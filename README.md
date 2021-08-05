# lazada-sdk

## Features
    · 通过此API，可以快速获取 PHP Object
## Composer
```
composer require thinksvip/lazada-sdk:v0.0.1-beta2
```
# Quick Example

## Make an API request
```php
<?php

    use Lazada\LazadaAPI;
    use Lazada\Lazop\LazopRequest;
    use Lazada\Object\Response;

    // 获取授权信息
     $API = (new LazadaAPI('access_token', 'url', 'appkey', 'appSecret'));
    // 组装请求订单列表数据
    $r = LazopRequest::getOrder('563268962662');

    // 发起请求 获取数据
    /** @var Response $response */
    $response = $API->GetOrder($r);
    
    $address_billing = $response->order->address_billing;
    
    print_r($address_billing);die();

```
