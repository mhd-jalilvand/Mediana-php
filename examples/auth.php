<?php

require_once(__DIR__ . '/../vendor/autoload.php');
//Set API KEY here or you can load it from ENV file using Dotenv\Dotenv class
DEFINE('API_KEY', 'YOUR_API_KEY');

$config =  Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', API_KEY)
            ->setApiKeyPrefix('Authorization', 'AccessKey');

$apiInstance = new  Mediana\Sdk\Api\AuthApi(new GuzzleHttp\Client(), $config);
try {
    $result = $apiInstance->getAuthorizedUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthorizedUser: ', $e->getMessage(), PHP_EOL;
}
