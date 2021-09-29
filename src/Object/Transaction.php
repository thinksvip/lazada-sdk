<?php

namespace Lazada\Object;

class Transaction
{
    /**
     * 交易类型ID
     * @var int
     */
    public $fee_type = null;

    /**
     * 交易详情
     * @var string
     */
    public $details = null;

    /**
     * 卖家sku
     * @var string
     */
    public $seller_sku = null;

    /**
     * lazada sku
     * @var string
     */
    public $lazada_sku = null;

    /**
     * 总交易金额
     * @var float|null
     */
    public $amount = 0.00;

    /**
     * 增值税金额
     * @var float|null
     */
    public $VAT_in_amount = 0.0000;

    /**
     * WHT金额
     * @var float|null
     */
    public $WHT_amount = 0.0000;

    /**
     * WHT是否包含在总金额中
     * @var string|null
     */
    public $WHT_included_in_amount = null;

    /**
     * 交易时间区间
     * @var string|null
     */
    public $statement = null;

    /**
     * 支付状态
     * @var string|null
     */
    public $paid_status = null;

    /**
     * 订单id
     * @var string|null
     */
    public $order_no = null;

    /**
     * 订单产品id
     * @var string|null
     */
    public $orderItem_no = null;

    /**
     * 订单产品状态
     * @var string|null
     */
    public $orderItem_status = null;

    /**
     * 运输供应商
     * @var string|null
     */
    public $shipping_provider = null;

    /**
     * 发货时效
     * @var string|null
     */
    public $shipping_speed = null;

    /**
     * 运输类型
     * @var string|null
     */
    public $shipment_type = null;

    /**
     * 订单项目ID（“订单ID”参数的子订单ID）
     * @var string|null
     */
    public $reference = null;

    /**
     * 区域财务团队的评论
     * @var string|null
     */
    public $comment = null;

    /**
     * 来自银行或其他付款提供商的付款参考ID
     * @var string|null
     */
    public $payment_ref_id = null;

    /**
     * 费用名称
     * @var string|null
     */
    public $fee_name = null;

    /**
     * 交易日期
     * @var string|null
     */
    public $transaction_date = null;

    /**
     * 交易类型或费用名称
     * @var string|null
     */
    public $transaction_type = null;

    /**
     * 交易的唯一ID
     * @var string|null
     */
    public $transaction_number = null;
}