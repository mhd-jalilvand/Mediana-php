<?php

require_once(__DIR__ . '/../vendor/autoload.php');
//Set API KEY here or you can load it from ENV file using Dotenv\Dotenv class
$apikey = 'YOUR_API_KEY';

$config =  Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', $apikey)
            ->setApiKeyPrefix('Authorization', 'AccessKey');

$apiInstance = new  Mediana\Sdk\Api\MedianaApi(new GuzzleHttp\Client(), $config);
try {
    $result = $apiInstance->getCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthorizedUser: ', $e->getMessage(), PHP_EOL;
}
