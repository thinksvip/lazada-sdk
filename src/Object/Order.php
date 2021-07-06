<?php


namespace Lazada\Object;


class Order
{

    /**
     * 代金券金额
     * @var float|null
     */
    public $voucher = 0.000;

    /**
     * 多卖家仓库代码
     * @var string|null
     */
    public $warehouse_code = null;

    /**
     * 订单号
     * @var string|null
     */
    public $order_number = null;

    /**
     * 下单时间
     * @var string|null
     */
    public $created_at = null;

    /**
     * 优惠券代码
     * @var string|null
     */
    public $voucher_code = null;

    /**
     * 礼品选项
     * 如果物品是礼物，则为 1，如果不是，则为 0。
     * @var boolean
     */
    public $gift_option = 0;

    /**
     * 平台运费优惠
     * @var float
     */
    public $shipping_fee_discount_platform = 0.000;

    /**
     * 客户姓氏
     * @var string|null
     */
    public $customer_last_name = null;

    /**
     * 上次更改订单的日期和时间
     * @var string|null
     */
    public $updated_at = null;

    /**
     * 承诺的发货时间
     * @var string|null
     */
    public $promised_shipping_times = null;

    /**
     * 此订单的总金额
     * @var float
     */
    public $price = 0.000;

    /**
     * 国家注册号
     * @var string|null
     */
    public $national_registration_number = null;

    /**
     * 原运费
     * @var float
     */
    public $shipping_fee_original = 0.000;

    /**
     * 付款方式
     * @var string|null
     */
    public $payment_method = null;

    /**
     * 客户名字
     * @var string|null
     */
    public $customer_first_name = null;

    /**
     * 卖家运费折扣
     * @var float
     */
    public $shipping_fee_discount_seller = null;

    /**
     * 运输费用
     * @var float
     */
    public $shipping_fee = null;

    /**
     * （仅限泰国）企业客户的税务分支机构代码，由客户在下订单时提供。
     * @var string|null
     */
    public $branch_number = null;

    /**
     * （仅适用于泰国和越南）客户的增值税税号，由客户在下订单时提供。
     * @var string|null
     */
    public $tax_code = null;

    /**
     * 订单中的商品数量
     * @var string|null
     */
    public $items_count = null;

    /**
     * 订单配送信息
     * @var string|null
     */
    public $delivery_info = null;

    /**
     * 订单状态
     * @var array|null
     */
    public $statuses = null;

    /**
     * 在 getMarketPlaceOrders 调用时传递给卖家中心的额外属性。
     * @var string|null
     */
    public $extra_attributes = null;

    /**
     * 卖家中心分配的此订单的标识符
     * @var string|null
     */
    public $order_id = null;

    /**
     * 客户指定的礼品信息
     * @var string|null
     */
    public $gift_message = null;

    /**
     * 评论
     * @var string|null
     */
    public $remarks = null;

    /**
     * 收货地址信息
     * @var \Lazada\Object\AddressShipping|null
     */
    public $address_shipping = null;


    /**
     * 帐单地址
     * @var \Lazada\Object\AddressShipping|null
     */
    public $address_billing = null;
}