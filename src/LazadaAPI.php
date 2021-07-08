<?php

namespace Lazada;


use Lazada\Lazop\LazopClient;
use Lazada\Lazop\LazopRequest;
use Exception;
use JsonMapper;
use Lazada\Object\Response;

class LazadaAPI
{
    /**
     * 私有密钥
     * @var string
     */
    private $accessToken = null;

    private $LazopClient = null;

    private $serializer = null;

    /**
     * LazadaAPI constructor.
     * @param string $accessToken
     */
    public function __construct($accessToken, $url = "", $appkey = "", $secretKey = "")
    {
        $this->accessToken = $accessToken;

        $this->LazopClient = new LazopClient($url, $appkey, $secretKey);

        $this->serializer = new JsonMapper();
    }

    /**
     * 获取指定订单
     * @param LazopRequest $request
     * @return mixed|object
     * @throws \JsonMapper_Exception
     */
    public function GetOrder(LazopRequest $request)
    {

        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        $order['order'] = $response->data;

        return $this->serializer->map(json_decode(json_encode($order)), new Response());
    }

    /**
     * 获取订单列表
     * @param LazopRequest $request
     * @return mixed|object
     * @throws \JsonMapper_Exception
     */
    public function GetOrders(LazopRequest $request)
    {

        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $this->serializer->map($response->data, new Response());

    }

    /**
     * 获取指定订单商品列表
     * @param LazopRequest $request
     * @return mixed|object
     * @throws \JsonMapper_Exception
     */
    public function GetOrderItems(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        $goods['goods'] = $response->data;

        return $this->serializer->map(json_decode(json_encode($goods)), new Response());
    }

}