<?php

namespace Lazada\Lazop;

use Exception;

class LazopRequest
{
    public $apiName = null;

    public $headerParams = array();

    public $udfParams = array();

    public $fileParams = array();

    public $httpMethod = 'POST';

    /**
     * 获取订单列表
     * @param string $created_after 创建开始时间
     * @param string $created_before 创建结束时间
     * @param string $sort_by
     * @param string $status
     * @param array|null $params
     * @return mixed
     * @throws Exception
     */
    public static function getOrders(string $created_after, string $created_before, string $sort_by, string $status, array $params = null)
    {
        $request = new LazopRequest();
        $request->apiName = '/orders/get';
        $request->httpMethod = 'GET';
        $request->addApiParam('created_after', $created_after);
        $request->addApiParam('created_before', $created_before);
        $request->addApiParam('sort_by', $sort_by);
        $request->addApiParam('status', $status);

        if (isset($params)){
            foreach ($params as $key=>$value){
                $request->addApiParam($key,$value);
            }
        }
        return $request;
    }

    /**
     * 获取单个订单详情
     * @param string $order_id 订单号
     * @return LazopRequest
     * @throws Exception
     */
    public static function getOrder(string $order_id)
    {
        $request = new LazopRequest();
        $request->apiName = '/order/get';
        $request->httpMethod = 'GET';
        $request->addApiParam('order_id', $order_id);
        return $request;
    }

    /**
     * 获取多个订单商品信息
     * @param array $order_ids 订单号数组
     * @return LazopRequest
     * @throws Exception
     */
    public static function getMultipleOrderItems(array $order_ids)
    {
        $request = new LazopRequest();
        $request->apiName = '/orders/items/get';
        $request->httpMethod = 'GET';
        $request->addApiParam('order_ids',$order_ids);
        return $request;
    }

    /**
     * 获取单个订单商品信息
     * @param string $order_id 订单号
     * @return LazopRequest
     * @throws Exception
     */
    public static function getOrderItems(string $order_id)
    {
        $request = new LazopRequest();
        $request->apiName = '/order/items/get';
        $request->httpMethod = 'GET';
        $request->addApiParam('order_id',$order_id);
        return $request;
    }

    /**
     * 获取集货点
     * @param string $client
     * @return LazopRequest
     * @throws Exception
     */
    public static function getLogisticsReceivingPoint(string $client)
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/bigbag/querycollection';
        $request->httpMethod = 'GET';
        $request->addApiParam('client', $client);
        return $request;
    }

    /**
     * 获取揽件地址 ID
     * @param string $appUserKey 应用秘钥，用于授权分组
     * @param string $country 国家
     * @param string $province 省
     * @param string $city 市
     * @param string $district 区/县
     * @param string $street 街道
     * @param string $detailAddress 详细地址
     * @return LazopRequest
     * @throws Exception
     */
    public static function getlogisticsAddressId(string $appUserKey, string $country, string $province, string $city, string $district, string $street, string $detailAddress)
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/address/query';
        $request->httpMethod = 'GET';
        $request->addApiParam('userInfo', $appUserKey);
        $request->addApiParam('country', $country);
        $request->addApiParam('province', $province);
        $request->addApiParam('city', $city);
        $request->addApiParam('district', $district);
        $request->addApiParam('street', $street);
        $request->addApiParam('detailAddress', $detailAddress);
        return $request;
    }

    /**
     * 创建物流袋子（大包）
     * @param string $client
     * @param string $userInfo
     * @param string $pickInfo
     * @param string $weightUnit
     * @param string $type
     * @param string $returnInfo
     * @param string $orderCodeList
     * @param string $weight
     * @param array $params
     * @return LazopRequest
     * @throws Exception
     */
    public static function createLogisticsBigBag(string $client, string $userInfo, string $pickInfo, string $weightUnit, string $type, string $returnInfo, string $orderCodeList, string $weight, array $params = [])
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/bigbag/commit';
        $request->httpMethod = 'GET';
        $request->addApiParam('client', $client);
        $request->addApiParam('userInfo', $userInfo);
        $request->addApiParam('pickupInfo', $pickInfo);
        $request->addApiParam('weightUnit', $weightUnit);
        $request->addApiParam('type', $type);
        $request->addApiParam('returnInfo', $returnInfo);
        $request->addApiParam('orderCodeList', $orderCodeList);
        $request->addApiParam('weight', $weight);
        if ($params) {
            foreach ($params as $key => $value) {
                $request->addApiParam($key, $value);
            }
        }
        return $request;
    }

    /**
     * 取消物流袋子（大包）
     * @param string $client
     * @param string $userInfo
     * @param string $orderCode
     * @param string $trackingNumber
     * @param array $params
     * @return LazopRequest
     * @throws Exception
     */
    public static function logisticsBigBagCancel(string $client, string $userInfo, string $orderCode = '', string $trackingNumber = '', array $params = [])
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/bigbag/cancel';
        $request->httpMethod = 'GET';
        $request->addApiParam('client', $client);
        $request->addApiParam('userInfo', $userInfo);
        $request->addApiParam('orderCode', $orderCode);
        if ($trackingNumber) {
            $request->addApiParam('trackingNumber', $trackingNumber);
        }
        if ($params) {
            foreach ($params as $key => $value) {
                $request->addApiParam($key, $value);
            }
        }
        return $request;
    }

    /**
     * 获取袋子面单
     * @param string $client
     * @param string $userInfo
     * @param string $orderCode
     * @param string $trackingNumber
     * @param array $params
     * @return LazopRequest
     * @throws Exception
     */
    public static function getLogisticsBigBagFaceSheet(string $client, string $userInfo, string $orderCode = '', string $trackingNumber = '', array $params = [])
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/bigbag/lable/getPdf';
        $request->addApiParam('client', $client);
        $request->addApiParam('userInfo', $userInfo);
        $request->addApiParam('orderCode', $orderCode);
        if ($trackingNumber) {
            $request->addApiParam('trackingNumber', $trackingNumber);
        }
        if ($params) {
            foreach ($params as $key => $value) {
                $request->addApiParam($key, $value);
            }
        }
        return $request;
    }

    /**
     * 获取袋子
     * @param string $client
     * @param string $userInfo
     * @param string $orderCode
     * @param string $trackingNumber
     * @param array $params
     * @return LazopRequest
     * @throws Exception
     */
    public static function getLogisticsBigBag(string $client, string $userInfo, string $orderCode = '', string $trackingNumber = '', array $params = [])
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/bigbag/query';
        $request->addApiParam('client', $client);
        $request->addApiParam('userInfo', $userInfo);
        $request->addApiParam('orderCode', $orderCode);
        if ($trackingNumber) {
            $request->addApiParam('trackingNumber', $trackingNumber);
        }
        if ($params) {
            foreach ($params as $key => $value) {
                $request->addApiParam($key, $value);
            }
        }
        return $request;
    }

    /**
     * 获取包裹
     * @param string $trackingNumber
     * @return LazopRequest
     * @throws Exception
     */
    public static function getPackage(string $trackingNumber = '')
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/package/query';
        $request->addApiParam('trackingNumber', $trackingNumber);
        return $request;
    }

    /**
     * 设置商家授权
     * @param string $userInfo
     * @param string $storeList
     * @param array $params
     * @return LazopRequest
     * @throws Exception
     */
    public static function setSellerAuth(string $userInfo, string $storeList, array $params = [])
    {
        $request = new LazopRequest();
        $request->apiName = '/logistics/cnpms/account/bind';
        $request->addApiParam('userInfo', $userInfo);
        $request->addApiParam('sellerList', $storeList);
        if ($params) {
            foreach ($params as $key => $value) {
                $request->addApiParam($key, $value);
            }
        }
        return $request;
    }

    /**
     * 获取一段时间内的交易详情数据
     * @param String $start_time 开始时间
     * @param String $end_time 结束时间
     * @param int $offset
     * @param int $limit
     * @param String $trans_type 交易类型ID
     * @param String $trade_order_id 订单 ID.
     * @param String $trade_order_line_id Order Item ID.
     * @return LazopRequest
     * @throws Exception
     */
    public static function queryTransactionDetails(String $start_time,String $end_time,int $offset = 0,int $limit = 100,String $trans_type = '',String $trade_order_id = '',String $trade_order_line_id = '')
    {
        $request = new LazopRequest();
        $request->apiName = '/finance/transaction/details/get';
        $request->httpMethod = 'GET';
        $request->addApiParam('start_time',$start_time);
        $request->addApiParam('end_time',$end_time);
        $request->addApiParam('offset',$offset);
        $request->addApiParam('limit',$limit);
        if(!empty($trans_type)){
            $request->addApiParam('trans_type',$trans_type);
        }
        if(!empty($trade_order_id)){
            $request->addApiParam('trade_order_id',$trade_order_id);
        }
        if(!empty($trade_order_line_id)){
            $request->addApiParam('trade_order_line_id',$trade_order_line_id);
        }

        return $request;
    }

    private function addApiParam($key, $value)
    {

        if (!is_string($key)) {
            throw new Exception("api param key should be string");
        }

        if (is_object($value)) {
            $this->udfParams[$key] = json_decode($value);
        } else {
            $this->udfParams[$key] = $value;
        }
    }

    private function addFileParam($key, $content, $mimeType = 'application/octet-stream')
    {
        if (!is_string($key)) {
            throw new Exception("api file param key should be string");
        }

        $file = array(
            'type' => $mimeType,
            'content' => $content,
            'name' => $key
        );
        $this->fileParams[$key] = $file;
    }

    private function addHttpHeaderParam($key, $value)
    {
        if (!is_string($key)) {
            throw new Exception("http header param key should be string");
        }

        if (!is_string($value)) {
            throw new Exception("http header param value should be string");
        }

        $this->headerParams[$key] = $value;
    }

    function startWith($str, $needle)
    {
        return strpos($str, $needle) === 0;
    }
}
