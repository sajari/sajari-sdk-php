<?php

require 'vendor/autoload.php';

use Sajari\Engine\EngineClient;
use Sajari\Engine\Exception\EngineException;

$logger = new Monolog\Logger('log');
$logger->pushHandler(new Monolog\Handler\StreamHandler('php://stdout'));

$c = new EngineClient(new Guzzle\Http\Client(), array(
    'access_key' => getenv('SAJARI_ACCESS_KEY'),
    'secret_key' => getenv('SAJARI_SECRET_KEY'),
    'company'    => getenv('SAJARI_COMPANY'),
    'collection' => getenv('SAJARI_COLLECTION'),
), $logger);

try {
    $r = $c->recent();
    echo var_export($r, true), PHP_EOL;
} catch (EngineException $e) {
    echo 'There was an error getting recent documents. ', $e->getMessage(), PHP_EOL;
}

try {
    $r = $c->flushEngine();
    echo var_export($r, true), PHP_EOL;
} catch (EngineException $e) {
    echo 'There was an error flushing the engine. ', $e->getMessage(), PHP_EOL;
}

try {
    $r = $c->recent();
    echo var_export($r, true), PHP_EOL;
} catch (EngineException $e) {
    echo 'There was an error getting recent documents. ', $e->getMessage(), PHP_EOL;
}
