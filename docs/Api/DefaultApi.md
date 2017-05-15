# Swagger\Client\DefaultApi

All URIs are relative to *https://api.vip2phone.net/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aclDelete**](DefaultApi.md#aclDelete) | **DELETE** /acl | 
[**aclGet**](DefaultApi.md#aclGet) | **GET** /acl | 
[**aclOptions**](DefaultApi.md#aclOptions) | **OPTIONS** /acl | 
[**aclPatch**](DefaultApi.md#aclPatch) | **PATCH** /acl | 
[**blacklistIdDelete**](DefaultApi.md#blacklistIdDelete) | **DELETE** /blacklist/{id} | 
[**blacklistIdOptions**](DefaultApi.md#blacklistIdOptions) | **OPTIONS** /blacklist/{id} | 
[**blacklistIdPut**](DefaultApi.md#blacklistIdPut) | **PUT** /blacklist/{id} | 
[**cdrGet**](DefaultApi.md#cdrGet) | **GET** /cdr | 
[**cdrOptions**](DefaultApi.md#cdrOptions) | **OPTIONS** /cdr | 
[**didsGet**](DefaultApi.md#didsGet) | **GET** /dids | 
[**didsIdOptions**](DefaultApi.md#didsIdOptions) | **OPTIONS** /dids/{id} | 
[**didsIdPatch**](DefaultApi.md#didsIdPatch) | **PATCH** /dids/{id} | 
[**didsOptions**](DefaultApi.md#didsOptions) | **OPTIONS** /dids | 
[**extensionsGet**](DefaultApi.md#extensionsGet) | **GET** /extensions | 
[**extensionsIdOptions**](DefaultApi.md#extensionsIdOptions) | **OPTIONS** /extensions/{id} | 
[**extensionsIdPatch**](DefaultApi.md#extensionsIdPatch) | **PATCH** /extensions/{id} | 
[**extensionsOptions**](DefaultApi.md#extensionsOptions) | **OPTIONS** /extensions | 
[**loginOptions**](DefaultApi.md#loginOptions) | **OPTIONS** /login | 
[**loginPost**](DefaultApi.md#loginPost) | **POST** /login | 
[**meGet**](DefaultApi.md#meGet) | **GET** /me | 
[**meOptions**](DefaultApi.md#meOptions) | **OPTIONS** /me | 
[**queuesGet**](DefaultApi.md#queuesGet) | **GET** /queues | 
[**queuesIdOptions**](DefaultApi.md#queuesIdOptions) | **OPTIONS** /queues/{id} | 
[**queuesIdPatch**](DefaultApi.md#queuesIdPatch) | **PATCH** /queues/{id} | 
[**queuesOptions**](DefaultApi.md#queuesOptions) | **OPTIONS** /queues | 
[**queuesPost**](DefaultApi.md#queuesPost) | **POST** /queues | 
[**versionGet**](DefaultApi.md#versionGet) | **GET** /version | 
[**versionOptions**](DefaultApi.md#versionOptions) | **OPTIONS** /version | 


# **aclDelete**
> \Swagger\Client\Model\EmptyResponse aclDelete($acl_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$acl_request = new \Swagger\Client\Model\ACLRequest(); // \Swagger\Client\Model\ACLRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->aclDelete($acl_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aclDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acl_request** | [**\Swagger\Client\Model\ACLRequest**](../Model/\Swagger\Client\Model\ACLRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aclGet**
> \Swagger\Client\Model\ACLResponse aclGet($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->aclGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aclGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ACLResponse**](../Model/ACLResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aclOptions**
> aclOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $api_instance->aclOptions();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aclOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aclPatch**
> \Swagger\Client\Model\EmptyResponse aclPatch($acl_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$acl_request = new \Swagger\Client\Model\ACLRequest(); // \Swagger\Client\Model\ACLRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->aclPatch($acl_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aclPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **acl_request** | [**\Swagger\Client\Model\ACLRequest**](../Model/\Swagger\Client\Model\ACLRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blacklistIdDelete**
> \Swagger\Client\Model\EmptyResponse blacklistIdDelete($id, $empty_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$empty_request = new \Swagger\Client\Model\EmptyRequest(); // \Swagger\Client\Model\EmptyRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->blacklistIdDelete($id, $empty_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blacklistIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **empty_request** | [**\Swagger\Client\Model\EmptyRequest**](../Model/\Swagger\Client\Model\EmptyRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blacklistIdOptions**
> blacklistIdOptions($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $api_instance->blacklistIdOptions($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blacklistIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blacklistIdPut**
> \Swagger\Client\Model\EmptyResponse blacklistIdPut($id, $empty_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$empty_request = new \Swagger\Client\Model\EmptyRequest(); // \Swagger\Client\Model\EmptyRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->blacklistIdPut($id, $empty_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blacklistIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **empty_request** | [**\Swagger\Client\Model\EmptyRequest**](../Model/\Swagger\Client\Model\EmptyRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cdrGet**
> \Swagger\Client\Model\CDRResponse cdrGet($clid, $extension_src, $dial_status, $extension_dst, $start_date, $ani, $trunk_name, $queue_name, $unique_id, $sort_order, $end_date, $timezone, $dnis, $authorization, $sort_field, $page, $record_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$clid = "clid_example"; // string | 
$extension_src = "extension_src_example"; // string | 
$dial_status = "dial_status_example"; // string | 
$extension_dst = "extension_dst_example"; // string | 
$start_date = "start_date_example"; // string | 
$ani = "ani_example"; // string | 
$trunk_name = "trunk_name_example"; // string | 
$queue_name = "queue_name_example"; // string | 
$unique_id = "unique_id_example"; // string | 
$sort_order = "sort_order_example"; // string | 
$end_date = "end_date_example"; // string | 
$timezone = "timezone_example"; // string | 
$dnis = "dnis_example"; // string | 
$authorization = "authorization_example"; // string | 
$sort_field = "sort_field_example"; // string | 
$page = "page_example"; // string | 
$record_name = "record_name_example"; // string | 

try {
    $result = $api_instance->cdrGet($clid, $extension_src, $dial_status, $extension_dst, $start_date, $ani, $trunk_name, $queue_name, $unique_id, $sort_order, $end_date, $timezone, $dnis, $authorization, $sort_field, $page, $record_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cdrGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clid** | **string**|  | [optional]
 **extension_src** | **string**|  | [optional]
 **dial_status** | **string**|  | [optional]
 **extension_dst** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **ani** | **string**|  | [optional]
 **trunk_name** | **string**|  | [optional]
 **queue_name** | **string**|  | [optional]
 **unique_id** | **string**|  | [optional]
 **sort_order** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]
 **timezone** | **string**|  | [optional]
 **dnis** | **string**|  | [optional]
 **authorization** | **string**|  | [optional]
 **sort_field** | **string**|  | [optional]
 **page** | **string**|  | [optional]
 **record_name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CDRResponse**](../Model/CDRResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cdrOptions**
> \Swagger\Client\Model\ModelEmpty cdrOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->cdrOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cdrOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **didsGet**
> \Swagger\Client\Model\DidsResponse didsGet($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->didsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->didsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DidsResponse**](../Model/DidsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **didsIdOptions**
> didsIdOptions($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $api_instance->didsIdOptions($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->didsIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **didsIdPatch**
> \Swagger\Client\Model\EmptyResponse didsIdPatch($id, $dids_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$dids_request = new \Swagger\Client\Model\DidsRequest(); // \Swagger\Client\Model\DidsRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->didsIdPatch($id, $dids_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->didsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **dids_request** | [**\Swagger\Client\Model\DidsRequest**](../Model/\Swagger\Client\Model\DidsRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **didsOptions**
> didsOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $api_instance->didsOptions();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->didsOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extensionsGet**
> \Swagger\Client\Model\ExtensionsResponse extensionsGet($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->extensionsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->extensionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ExtensionsResponse**](../Model/ExtensionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extensionsIdOptions**
> extensionsIdOptions($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $api_instance->extensionsIdOptions($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->extensionsIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extensionsIdPatch**
> \Swagger\Client\Model\EmptyResponse extensionsIdPatch($id, $extensions_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$extensions_request = new \Swagger\Client\Model\ExtensionsRequest(); // \Swagger\Client\Model\ExtensionsRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->extensionsIdPatch($id, $extensions_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->extensionsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **extensions_request** | [**\Swagger\Client\Model\ExtensionsRequest**](../Model/\Swagger\Client\Model\ExtensionsRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extensionsOptions**
> extensionsOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $api_instance->extensionsOptions();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->extensionsOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginOptions**
> \Swagger\Client\Model\ModelEmpty loginOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->loginOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loginOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginPost**
> \Swagger\Client\Model\LoginResponse loginPost($empty, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$empty = new \Swagger\Client\Model\ModelEmpty(); // \Swagger\Client\Model\ModelEmpty | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->loginPost($empty, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **empty** | [**\Swagger\Client\Model\ModelEmpty**](../Model/\Swagger\Client\Model\ModelEmpty.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meGet**
> \Swagger\Client\Model\Me meGet($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->meGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->meGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Me**](../Model/Me.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meOptions**
> meOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $api_instance->meOptions();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->meOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesGet**
> \Swagger\Client\Model\QueuesResponse queuesGet($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->queuesGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\QueuesResponse**](../Model/QueuesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesIdOptions**
> queuesIdOptions($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 

try {
    $api_instance->queuesIdOptions($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queuesIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesIdPatch**
> \Swagger\Client\Model\EmptyResponse queuesIdPatch($id, $queues_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$id = "id_example"; // string | 
$queues_request = new \Swagger\Client\Model\QueuesRequest(); // \Swagger\Client\Model\QueuesRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->queuesIdPatch($id, $queues_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queuesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **queues_request** | [**\Swagger\Client\Model\QueuesRequest**](../Model/\Swagger\Client\Model\QueuesRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesOptions**
> \Swagger\Client\Model\ModelEmpty queuesOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->queuesOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queuesOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesPost**
> \Swagger\Client\Model\EmptyResponse queuesPost($queues_request, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$queues_request = new \Swagger\Client\Model\QueuesRequest(); // \Swagger\Client\Model\QueuesRequest | 
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->queuesPost($queues_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->queuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queues_request** | [**\Swagger\Client\Model\QueuesRequest**](../Model/\Swagger\Client\Model\QueuesRequest.md)|  |
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **versionGet**
> \Swagger\Client\Model\VersionResponse versionGet($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorization = "authorization_example"; // string | 

try {
    $result = $api_instance->versionGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->versionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\VersionResponse**](../Model/VersionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **versionOptions**
> \Swagger\Client\Model\EmptyResponse versionOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->versionOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->versionOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\EmptyResponse**](../Model/EmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

