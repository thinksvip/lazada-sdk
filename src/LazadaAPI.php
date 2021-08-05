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

    /**
     * 获取集货点列表
     * @param LazopRequest $request
     * @return mixed|object
     * @throws \JsonMapper_Exception
     */
    public function GetLogisticsReceivingPoint(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取揽收地址信息
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetLogisticsAddressId(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取创建物流袋子（大包）
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetCreateLogisticsBigBag(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取取消物流袋子（大包）
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetLogisticsBigBagCancel(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取袋子面单
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetLogisticsBigBagFaceSheet(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取物流袋子（大包）
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetLogisticsBigBag(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取单个包裹信息
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetPackage(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response->result;
    }

    /**
     * 获取商家授权
     * @param LazopRequest $request
     * @return mixed
     * @throws \JsonMapper_Exception
     */
    public function GetSellerAuth(LazopRequest $request)
    {
        $response = $this->LazopClient->execute($request, $this->accessToken);
        $response = json_decode($response);
        if ($response->code != "0") throw new Exception($response->message);

        return $response;
    }
}