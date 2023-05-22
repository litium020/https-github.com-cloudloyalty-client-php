<?php 
require __DIR__ . '/autoload.php';

use CloudLoyalty\Api\Client;
use CloudLoyalty\Api\Exception\ProcessingException;
use CloudLoyalty\Api\Exception\TransportException;
use CloudLoyalty\Api\Generated\Model\ClientInfoQuery;
use CloudLoyalty\Api\Generated\Model\ClientInfoReply;
use CloudLoyalty\Api\Generated\Model\NewClientRequest;
use CloudLoyalty\Api\Generated\Model\NewClientResponse;
use CloudLoyalty\Api\Http\Request;
use CloudLoyalty\Api\Http\Response;
use CloudLoyalty\Api\Logger\PsrBridgeLogger;
use PHPUnit\Framework\TestCase;

$apiClient = (new Client())
    ->setProcessingKey('a7d2dfa1-11e1-4512-adbc-78d1ed672e97');
$request = new ClientQuery();
$request->setPhoneNumber('+79990853123');
$result = $apiClient->getBalance($request);