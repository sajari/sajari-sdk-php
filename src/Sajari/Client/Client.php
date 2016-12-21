<?php
/**
 * Class Client | Sajari/Client/Client.php
 *
 * @package     sajari-sdk-php
 */

namespace Sajari\Client;

require_once __DIR__.'/../proto/engine/value.php';
require_once __DIR__.'/../proto/engine/key.php';
require_once __DIR__.'/../proto/engine/status.php';
require_once __DIR__.'/../proto/engine/store/record/record.php';
require_once __DIR__.'/../proto/api/query/v1/query.php';

use Sajari\Record\Record;
use Sajari\Record\Key as RecordKey;
use Sajari\Record\KeyValue;
use Sajari\Record\Value as RecordValue;

use Sajari\Search\Request as SearchRequest;
use Sajari\Search\Result as SearchResult;
use Sajari\Search\Response as SearchResponse;
use Sajari\Search\Tracking;
use Sajari\Search\ClickToken;
use Sajari\Search\PosNegToken;
use Sajari\Search\CountResponseAggregate;
use Sajari\Search\BucketResponseAggregate;
use Sajari\Search\MetricResponseAggregate;

use Sajari\Client\Opt;

use sajari\engine\store\record\Keys as EngineKeys;
use sajari\engine\Value as EngineValue;
use sajari\engine\Key as EngineKey;
use sajari\engine\store\record\Record as EngineRecord;
use sajari\engine\store\record\Record\ValuesEntry as EngineRecordValuesEntry;

use sajari\api\query\SearchRequest as ProtoSearchRequest;

use sajari\engine\store\record\GetResponse;


/**
 * Class Client
 * @package Sajari\Client
 */
class Client
{
    /** @var string $projectID */
    private $projectID = '';
    /** @var string $collection */
    private $collection = '';
    /** @var string $endpoint */
    private $endpoint = 'api.sajari.com:443';
    /** @var string $auth */
    private $auth = '';
    private $credentials;
    private $storeClient;
    private $searchClient;
    private $grpcDialOptions;

    /**
     * Client constructor
     * @param \sajari\api\query\v1\QueryClient $queryClient
     * @param \sajari\engine\store\record\StoreClient $storeClient
     * @param string $projectID
     * @param string $collection
     * @param \Sajari\Client\Opt[] $dialOptions
     */
    public function __construct(\sajari\api\query\v1\QueryClient $queryClient, \sajari\engine\store\record\StoreClient $storeClient, $projectID, $collection, $dialOptions)
    {
        $this->projectID = $projectID;
        $this->collection = $collection;
        $this->credentials = \Grpc\ChannelCredentials::createSsl(file_get_contents(dirname(__FILE__) . "/roots.pem"));

        /** @var $opt Opt */
        foreach ($dialOptions as $opt) {
            $opt->Apply($this);
        }

        $this->searchClient = $queryClient;
        $this->storeClient = $storeClient;
    }

    /**
     * Creates a new Client with defaults set
     * @param string $projectID
     * @param string $collection
     * @param \Sajari\Client\Opt[] $dialOptions
     * @return Client
     */
    public static function NewClient($projectID, $collection, array $dialOptions)
    {
        $credentials = \Grpc\ChannelCredentials::createSsl(file_get_contents(dirname(__FILE__) . "/roots.pem"));

        return new Client(
            new \sajari\api\query\v1\QueryClient('api.sajari.com:443', [
                'credentials' => $credentials,
            ]),
            new \sajari\engine\store\record\StoreClient('api.sajari.com:443', [
                'credentials' => $credentials,
            ]),
            $projectID,
            $collection,
            $dialOptions
        );
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param string $auth
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return mixed
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param mixed $credentials
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @return array
     */
    public function getCallMeta()
    {
        return array(
            'project' => array($this->projectID),
            'collection' => array($this->collection),
            'authorization' => array($this->auth),
        );
    }

    /**
     * @param RecordKey $key
     * @return array
     * @throws \Sajari\Error\RecordNotFoundException
     */
    public function Get(RecordKey $key)
    {
        try {
            list($res, $status) = $this->GetMulti(array($key));
        } catch (\Sajari\Error\MultiRecordNotFoundException $e) {
            throw new \Sajari\Error\RecordNotFoundException($e->getMessage(), $e->getCode(), null);
        }

        return [$res[0], $status[0]];
    }

    /**
     * @param RecordKey[] $keys
     * @return Record[]
     * @throws \Exception
     */
    public function GetMulti(array $keys)
    {
        $protoKeys = $this->keysToProto($keys);

        /** @var GetResponse $reply */
        list($reply, $status) = $this->storeClient->Get(
            $protoKeys,
            $this->getCallMeta()
        )->wait();

        if ($status->code !== 0) {
            throw new \Exception($status->details);
        }

        // Check for server error
        $this->checkForError($status);

        $docs = array();

        /** @var EngineRecord $doc */
        foreach ($reply->getRecordsList() as $doc) {
            $value = array();

            /** @var EngineRecordValuesEntry $m */
            foreach ($doc->getValuesList() as $m) {
                $value[] = \Sajari\Record\Value::FromProtoValue($m);
            }

            $docs[] = new Record($value);
        }

        $statuses = $reply->getStatusList();

        foreach ($statuses as $s) {
            if (isset($s) && $s->code === 5) {
                throw new \Sajari\Error\MultiRecordNotFoundException($s->message, $s->code, null);
            }
        }

        return [$docs, $statuses];
    }

    /**
     * @param array $keys
     * @return EngineKeys
     */
    private function keysToProto(array $keys)
    {
        $protoKeys = new EngineKeys();

        /** @var RecordKey $k */
        foreach ($keys as $k) {
            $protoKeys->addKeys($k->Proto());
        }

        return $protoKeys;
    }

    /**
     * @param Record $rec
     * @return Key
     * @throws Exception
     */
    public function Add(Record $rec)
    {
        $multiResult = $this->AddMulti([$rec]);

        // Return the first key and status from add multi
        return [$multiResult[0][0], $multiResult[1][0]];
    }

    /**
     * @param array $docs
     * @return array
     * @throws \Sajari\Error\Exception
     */
    public function AddMulti(array $docs)
    {
        $protoDocs = new \sajari\engine\store\record\Records();

        foreach ($docs as $d) {
            $protoDoc = new \sajari\engine\store\record\Record();
            foreach ($d->getValues() as $m) {
                $valueEntry = new \sajari\engine\store\record\Record\ValuesEntry();
                $valueEntry->setKey($m->getKey());
                $v = new EngineValue();
                $v->setSingle($m->getValue());
                $valueEntry->setValue($v);

                $protoDoc->addValues($valueEntry);
            }

            $protoDocs->addRecords($protoDoc);
        }

        list($reply, $status) = $this->storeClient->Add(
            $protoDocs,
            $this->getCallMeta()
        )->wait();

        if ($status->code !== 0) {
            throw new \Sajari\Error\Exception($status->details);
        }

        $keys = array();

        /** @var $k EngineKey */
        foreach ($reply->getKeysList() as $k) {
            $value = \Sajari\Record\Key::FromProto($k);

            $keys[] = new RecordKey($k->getField(), $value);
        }

        return [$keys, $reply->getStatusList()];
    }

    /**
     * @param $key
     * @return null
     */
    public function Delete($key)
    {
        $multiResult = $this->DeleteMulti([$key]);
        if ($multiResult == NULL) {
          return NULL;
        } else {
          return $multiResult[0];
        }
    }

    /**
     * @param array $keys
     * @return mixed
     * @throws \Exception
     */
    public function DeleteMulti(array $keys)
    {
        $protoKeys = $this->keysToProto($keys);

        list($reply, $status) = $this->storeClient->Delete(
            $protoKeys,
            $this->getCallMeta()
        )->wait();

        if ($status->code !== 0) {
            throw new \Exception($status->details);
        }

        return $reply->getStatusList();
    }

    /**
     * @param $km
     * @return null
     */
    public function Patch($km)
    {
      $multiResult = $this->PatchMulti(array($km));
      if ($multiResult == NULL) {
        return NULL;
      } else {
        return $multiResult[0];
      }
    }

    /**
     * @param array $kvs
     * @return mixed
     * @throws \Exception
     */
    public function PatchMulti(array $kvs)
    {
        $protoKeyValues = new \sajari\engine\store\record\KeysValues();

        foreach ($kvs as $kv) {
            $protoKeyValue = new \sajari\engine\store\record\KeysValues\KeyValues();

            $k = new \sajari\engine\Key();
            $k->setField($kv->getKey()->getField());

            $v = new \sajari\engine\Value();

            $v->setSingle($kv->getKey()->getValue());
            $k->setValue($v);

            $protoKeyValue->setKey($k);

            foreach ($kv->getValues() as $m) {
                $protoKeyValue->addValues($m->Proto());
            }

            $protoKeyValues->addKeysValues($protoKeyValue);
        }

        list($reply, $status) = $this->storeClient->Patch(
            $protoKeyValues,
            $this->getCallMeta()
        )->wait();

        if ($status->code !== 0) {
            throw new \Exception($status->details);
        }

        return $reply->getStatusList();
    }

    /**
     * @param SearchRequest $r
     * @return SearchResponse
     */
    public function Search(SearchRequest $r)
    {
        $searchRequest = $r->Proto();
        // Make Request
        /** @var engine\query\Response $reply */
        list($reply, $status) = $this->searchClient->Search(
            $searchRequest,
            $this->getCallMeta()
        )->wait();

        // Check for server error
        $this->checkForError($status);

        // Transform proto to user-friendly objects

        $response = $reply->getSearchResponse();

        // Reads
        /** @var integer $reads */
        $reads = $response->getReads();

        // Time
        /** @var string $time */
        $time = $response->getTime();

        // Total Results
        /** @var integer $total */
        $total = $response->getTotalResults();

        // Results
        $results = array();

        /** @var engine\query\Result[] $protoResponseList */
        $protoResponseList = $response->getResultsList();

        foreach ($protoResponseList as $protoResult) {
            $meta = array();
            /** @var engine\query\Result\MetaEntry $protoMeta */
            foreach ($protoResult->getValuesList() as $m) {
                /** @var sajari\engine\Value $v */
                $meta[] = \Sajari\Record\Value::FromProtoValue($m);
            }

            $result = new SearchResult(
                $protoResult->getScore(),
                $protoResult->getIndexScore(),
                $meta
            );

            $results[] = $result;
        }

        // Aggregates
        /** @var engine\query\Response\AggregatesEntry[] $protoAggregateList */
        $protoAggregateList = $response->getAggregatesList();

        $aggregateList = array();
        foreach ($protoAggregateList as $a) {
            /** @var engine\query\AggregateResponse $ar */
            $ar = $a->getValue();

            if ($ar->hasBuckets()) {
                /** @var engine\query\AggregateResponse\Buckets $b */
                $buckets = $ar->getBuckets();

                $bucketArray = array();

                /** @var engine\query\AggregateResponse\Buckets\BucketsEntry $be */
                foreach ($buckets->getBucketsList() as $be) {
                    /** @var engine\query\AggregateResponse\Buckets\Bucket $b */
                    $b = $be->getValue();
                    $bucketArray[$b->getName()] = new BucketResponseAggregate($b->getName(), $b->getCount());
                }

                $aggregateList[$a->getKey()] = $bucketArray;
            } elseif ($ar->hasCount()) {
                /** @var engine\query\AggregateResponse\Count $counts */
                $counts = $ar->getCount();

                $countArray = array();

                /** @var engine\query\AggregateResponse\Count\CountsEntry $ce */
                foreach ($counts->getCountsList() as $ce) {
                    $countArray[$ce->getKey()] = new CountResponseAggregate($ce->getKey(), $ce->getValue());
                }

                $aggregateList[$a->getKey()] = $countArray;
            } elseif ($ar->hasMetric()) {
                /** @var engine\query\AggregateResponse\Metric */
                $m = $ar->getMetric();

                $aggregateList[$a->getKey()] = new MetricResponseAggregate($m->getValue());
            }
        }

        $tokens = [];
        if ($reply->hasTokens()) {
          foreach ($reply->getTokensList() as $protoToken) {
            $token = NULL;
            if ($protoToken->hasClick()) {
              $token = new ClickToken($protoToken->getClick()->getClick());
            } else {
              $token = new PosNegToken(
                $protoToken->getPosNeg()->getPos(),
                $protoToken->getPosNeg()->getNeg()
              );
            }
            $tokens[] = $token;
          }
        }

        return new SearchResponse($total, $reads, $time, $results, $aggregateList, $tokens);
    }

    /**
     * @param $status
     * @throws \Sajari\Error\AlreadyExistsException
     * @throws \Sajari\Error\Base
     * @throws \Sajari\Error\MalformedRequestException
     * @throws \Sajari\Error\NotFoundException
     * @throws \Sajari\Error\PermissionDeniedException
     * @throws \Sajari\Error\Unauthenticated
     * @throws \Sajari\Error\Unavailable
     */
    private function checkForError($status)
    {
        switch ($status->code) {
            case 0:
                return;
            case 3:
                // invalid argument
                throw new \Sajari\Error\MalformedRequestException($status->details, $status->code);
            case 5:
                // not found
                throw new \Sajari\Error\NotFoundException($status->details, $status->code);
            case 6:
                // already exists
                throw new \Sajari\Error\AlreadyExistsException($status->details, $status->code);
            case 7:
                // permission denied
                throw new \Sajari\Error\PermissionDeniedException($status->details, $status->code);
            case 14:
                // unavailable
                throw new \Sajari\Error\Unavailable($status->details, $status->code);
            case 16:
                // unauthenticated
                throw new \Sajari\Error\Unauthenticated($status->details, $status->code);;
            default:
                // generic exception
                throw new \Sajari\Error\Base($status->details, $status->code);
        }
    }
}
