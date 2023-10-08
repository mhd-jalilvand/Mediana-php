# Mediana\Sdk\ComplexApi

All URIs are relative to http://rest.ippanel.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPattern()**](ComplexApi.md#createPattern) | **POST** /v1/messages/patterns |  |
| [**fetchInboxMessages()**](ComplexApi.md#fetchInboxMessages) | **GET** /v1/messages/inbox |  |
| [**getCredit()**](ComplexApi.md#getCredit) | **GET** /v1/credit |  |
| [**getMessageRecipientsStatus()**](ComplexApi.md#getMessageRecipientsStatus) | **GET** /v1/messages/{bulk_id}/recipients |  |
| [**getSMS()**](ComplexApi.md#getSMS) | **GET** /v1/messages/{bulk_id} |  |
| [**sendPattern()**](ComplexApi.md#sendPattern) | **POST** /v1/messages/patterns/send |  |
| [**sendSMS()**](ComplexApi.md#sendSMS) | **POST** /v1/messages |  |


## `createPattern()`

```php
createPattern($pattern_to_create): \Mediana\Sdk\Model\CreatePatternResponse
```



create message pattern

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pattern_to_create = new \Mediana\Sdk\Model\PatternToCreate(); // \Mediana\Sdk\Model\PatternToCreate | parameters

try {
    $result = $apiInstance->createPattern($pattern_to_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->createPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pattern_to_create** | [**\Mediana\Sdk\Model\PatternToCreate**](../Model/PatternToCreate.md)| parameters | |

### Return type

[**\Mediana\Sdk\Model\CreatePatternResponse**](../Model/CreatePatternResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchInboxMessages()`

```php
fetchInboxMessages($page, $limit): \Mediana\Sdk\Model\InboxResponse
```



fetch inbox messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int
$limit = 10; // int

try {
    $result = $apiInstance->fetchInboxMessages($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->fetchInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Mediana\Sdk\Model\InboxResponse**](../Model/InboxResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredit()`

```php
getCredit(): \Mediana\Sdk\Model\CreditResponse
```



get user credit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->getCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Mediana\Sdk\Model\CreditResponse**](../Model/CreditResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageRecipientsStatus()`

```php
getMessageRecipientsStatus($bulk_id, $page, $limit): \Mediana\Sdk\Model\RecipientResponse
```



get a sms recipients status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_id = 52738671; // int
$page = 0; // int
$limit = 10; // int

try {
    $result = $apiInstance->getMessageRecipientsStatus($bulk_id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->getMessageRecipientsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_id** | **int**|  | |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Mediana\Sdk\Model\RecipientResponse**](../Model/RecipientResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSMS()`

```php
getSMS($bulk_id): \Mediana\Sdk\Model\MessageResponse
```



get a sms properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_id = 52738671; // int

try {
    $result = $apiInstance->getSMS($bulk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->getSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_id** | **int**|  | |

### Return type

[**\Mediana\Sdk\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPattern()`

```php
sendPattern($pattern_to_send): \Mediana\Sdk\Model\SmsResponse
```



send pattern SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pattern_to_send = new \Mediana\Sdk\Model\PatternToSend(); // \Mediana\Sdk\Model\PatternToSend | parameters

try {
    $result = $apiInstance->sendPattern($pattern_to_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->sendPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pattern_to_send** | [**\Mediana\Sdk\Model\PatternToSend**](../Model/PatternToSend.md)| parameters | |

### Return type

[**\Mediana\Sdk\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSMS()`

```php
sendSMS($message_to_send): \Mediana\Sdk\Model\SmsResponse
```



send SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mediana\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Mediana\Sdk\Api\ComplexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_to_send = new \Mediana\Sdk\Model\MessageToSend(); // \Mediana\Sdk\Model\MessageToSend | parameters

try {
    $result = $apiInstance->sendSMS($message_to_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplexApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_to_send** | [**\Mediana\Sdk\Model\MessageToSend**](../Model/MessageToSend.md)| parameters | |

### Return type

[**\Mediana\Sdk\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json; charset=UTF-8`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
