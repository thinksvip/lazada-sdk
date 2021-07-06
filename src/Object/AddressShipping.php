<?php


namespace Lazada\Object;


class AddressShipping
{
    /**
     * 国家
     * @var string|null
     */
    public $country = null;

    /**
     * 城市名
     * @var string|null
     */
    public $city = null;

    /**
     * 邮政编码;注意：此值不会用于 Lazada ID
     * @var string|null
     */
    public $post_code = null;

    /**
     * 电话
     * @var string|null
     */
    public $phone = null;

    /**
     * 电话2
     * @var string|null
     */
    public $phone2 = null;

    /**
     * 地址1
     * @var string|null
     */
    public $address1 = null;

    /**
     * 地址2
     * @var string|null
     */
    public $address2 = null;

    /**
     * 地址3
     * @var string|null
     */
    public $address3 = null;

    /**
     * 地址4
     * @var string|null
     */
    public $address4 = null;

    /**
     * 地址5
     * @var string|null
     */
    public $address5 = null;

    /**
     * 客户姓氏
     * @var string|null
     */
    public $last_name = null;

    /**
     * 客户名字
     * @var string|null
     */
    public $first_name = null;
}