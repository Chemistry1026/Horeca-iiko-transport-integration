<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderComboDto extends RestDto
{
    /**
     * Combo ID
     * @var string
     */
    public $id;

    /**
     * Name of combo
     * @var string
     */
    public $name;

    /**
     * Quantity
     * @var integer
     */
    public $amount;

    /**
     * Price of one combo
     * @var double
     */
    public $price;

    /**
     * Combo validity ID
     * @var string
     */
    public $sourceId;
}