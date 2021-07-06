<?php


namespace Lazada\Object;


class Goods
{
    /**
     * 税额
     * @var float
     */
    public $tax_amount = 0.0000;
    /**
     * 取消、退货或其他原因
     * @var string|null
     */
    public $reason = null;
    /**
     * 船舶SLA时间
     * @var string|null
     */
    public $sla_time_stamp = null;
    /**
     * 卖家开出的凭证
     * @var string|null
     */
    public $voucher_seller = null;
    /**
     * 调用 SetPackedByMarketPlace 时返回
     * @var string|null
     */
    public $purchase_order_id = null;
    /**
     * 卖家提供的优惠券代码
     * @var string|null
     */
    public $voucher_code_seller = null;
    /**
     * Not used
     * @var string|null
     */
    public $voucher_code = null;
    /**
     * 来源
     * @var string|null
     */
    public $package_id = null;
    /**
     * 买家id
     * @var string|null
     */
    public $buyer_id = null;
    /**
     * 变化
     * @var string|null
     */
    public $variation = null;
    /**
     * 来自平台的优惠券代码
     * @var string|null
     */
    public $voucher_code_platform = null;
    /**
     * 调用 SetPackedByMarketPlace 时返回
     * @var string|null
     */
    public $purchase_order_number = null;
    /**
     * sku
     * @var string|null
     */
    public $sku = null;
    /**
     * PreSale 订单类型，可能是 Normal 或 PreSale
     * @var string|null
     */
    public $order_type = null;
    /**
     * 发票编号
     * @var string|null
     */
    public $invoice_number = null;
    /**
     * 表示谁发起了取消或退回的订单。可能的值为取消内部、取消客户、取消失败交付、取消卖家、退货客户和退款内部。
     * @var string|null
     */
    public $cancel_return_initiator = null;
    /**
     * Product outer ID
     * @var string|null
     */
    public $shop_sku = null;
    /**
     * 是否二次销售的标志，数值包括1和0。
     * @var string|null
     */
    public $is_reroute = null;
    /**
     * 预售阶段预售订单的支付状态。 可能的值为空、“未付”或“未付的最终付款”。 （未付：预售押金尚未支付；未付尾款：预售押金已付但尾款/到期未付）
     * @var string|null
     */
    public $stage_pay_status = null;
    /**
     * Not used
     * @var string|null
     */
    public $tracking_code_pre = null;
    /**
     * 订单商品 ID
     * @var string|null
     */
    public $order_item_id = null;
    /**
     * 卖家名称
     * @var string|null
     */
    public $shop_id = null;
    /**
     * 订单类型，可能的值为 GUARANTEE、NORMAL 和 GLOBAL_COLLECTION。标记为“GUARANTEE”或“GLOBAL_COLLECTION”的订单在订单履行中具有较短的 SLA 要求。
     * @var string|null
     */
    public $order_flag = null;
    /**
     * 是否满足 LAZADA 的标志，值包括 1 和 0。
     * @var string|null
     */
    public $is_fbl = null;
    /**
     * 产品名称
     * @var string|null
     */
    public $name = null;
    /**
     * 是否为卖方自有车队的标志，值包括1和0。
     * @var string|null
     */
    public $delivery_option_sof = null;
    /**
     * 订单id
     * @var string|null
     */
    public $order_id = null;
    /**
     * 状态
     * @var string|null
     */
    public $status = null;
    /**
     * 产品主图片
     * @var string|null
     */
    public $product_main_image = null;
    /**
     * Lazada发行的代金券
     * @var string|null
     */
    public $voucher_platform = null;
    /**
     * 已付价格
     * @var string|null
     */
    public $paid_price = null;
    /**
     * 商品详情网址
     * @var string|null
     */
    public $product_detail_url = null;
    /**
     * 多卖家仓库代码
     * @var string|null
     */
    public $warehouse_code = null;
    /**
     * 承诺的发货时间
     * @var string|null
     */
    public $promised_shipping_time = null;
    /**
     * 运输类型，直接运输或仓库
     * @var string|null
     */
    public $shipping_type = null;
    /**
     * 创建时间
     * @var string|null
     */
    public $created_at = null;
    /**
     * 卖家赞助的Lazada Bonus
     * @var string|null
     */
    public $voucher_seller_lpi = null;
    /**
     * 平台运费优惠
     * @var string|null
     */
    public $shipping_fee_discount_platform = null;
    /**
     * 钱包
     * @var string|null
     */
    public $wallet_credits = null;
    /**
     * 更新时间
     * @var string|null
     */
    public $updated_at = null;
    /**
     * 币种
     * @var string|null
     */
    public $currency = null;
    /**
     * 以下选项之一：快递、标准或经济
     * @var string|null
     */
    public $shipping_provider_type = null;
    /**
     * 由 Lazada 赞助的 Lazada Bonus
     * @var string|null
     */
    public $voucher_platform_lpi = null;
    /**
     * 运费原价
     * @var string|null
     */
    public $shipping_fee_original = null;
    /**
     * 产品价格
     * @var float
     */
    public $item_price = 0.0000;
    /**
     * 是不是数字商品
     * @var int|null
     */
    public $is_digital = 0;
    /**
     * 运输服务费用
     * @var string|null
     */
    public $shipping_service_cost = null;
    /**
     * 从 3PL 货件提供商处检索到的跟踪代码
     * @var string|null
     */
    public $tracking_code = null;
    /**
     * 卖家运费折扣
     * @var float|null
     */
    public $shipping_fee_discount_seller = 0.0000;
    /**
     * 运输费用
     * @var float|null
     */
    public $shipping_amount = 0.0000;
    /**
     * 原因详情
     * @var string|null
     */
    public $reason_detail = null;
    /**
     * 退货状态
     * @var string|null
     */
    public $return_status = null;
    /**
     * 3PL 货件供应商，例如 LEX
     * @var string|null
     */
    public $shipment_provider = null;
    /**
     * 代金券金额
     * @var float|null
     */
    public $voucher_amount = 0.0000;
    /**
     * Digital deliery information
     * @var string|null
     */
    public $digital_delivery_info = null;

    /**
     * 具有额外属性的 JSON 编码字符串
     * @var string|null
     */
    public $extra_attributes = null;
}