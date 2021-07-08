<?php


namespace Lazada\Object;


class Response
{

    /**
     * lazada 订单
     * @var \Lazada\Object\Order|null
     */
    public $order = null;

    /**
     * lazada 订单列表
     * @var \Lazada\Object\Order[]|null
     */
    public $orders = null;

    /**
     * lazada 订单商品
     * @var \Lazada\Object\Goods[]|null
     */
    public $goods = null;

    /**
     * 总数量
     * @var int|null
     */
    public $countTotal = 0;


    /**
     * 分页limit
     * @var int|null
     */
    public $count = 0;
}