<?php

namespace Lazada\lazop;

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
