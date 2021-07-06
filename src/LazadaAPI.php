<?php

namespace Lazada;


use Lazada\lazop\LazopClient;
use Lazada\lazop\LazopRequest;

class LazadaAPI
{
    /**
     * 私有密钥
     * @var string
     */
    private $accessToken = null;

    private $LazopClient =null;

    /**
     * LazadaAPI constructor.
     * @param string $accessToken
     */
    public function __construct($accessToken,$url = "",$appkey = "",$secretKey = "")
    {
        $this->accessToken = $accessToken;

        $this->LazopClient = new LazopClient($url,$appkey,$secretKey);
    }

    public function GetOrder(LazopRequest $request)
    {

        $response = $this->LazopClient->execute($request,$this->accessToken);

    }

    public function GetOrders(LazopRequest $request)
    {

        $response = $this->LazopClient->execute($request,$this->accessToken);

        return $response;

    }
    public function GetMultipleOrderItems(LazopRequest $request)
    {

        $response = $this->LazopClient->execute($request,$this->accessToken);

    }
    public function GetOrderItems(LazopRequest $request)
    {

        $response = $this->LazopClient->execute($request,$this->accessToken);

    }

}