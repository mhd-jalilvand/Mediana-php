<?php

require_once(__DIR__ . '/../vendor/autoload.php');
//Set API KEY here or you can load it from ENV file using Dotenv\Dotenv class
$apikey = 'YOUR_API_KEY';

$config =  Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', $apikey)
            ->setApiKeyPrefix('Authorization', 'AccessKey');

$apiInstance = new  Mediana\Sdk\Api\MedianaApi(new GuzzleHttp\Client(), $config);
$pattern = new \Mediana\Sdk\Model\PatternToSend([
    "pattern_code"=>"xxx",
    "originator"=>"+98xxx",
    "recipient"=>"+98xx",
    "values"=>["xx"=>"xxx"]
]);
try {
    $result = $apiInstance->sendPattern($pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthorizedUser: ', $e->getMessage(), PHP_EOL;
}
