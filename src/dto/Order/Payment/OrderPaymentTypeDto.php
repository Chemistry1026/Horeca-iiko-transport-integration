<?php


namespace IikoTransport\dto\Order\Payment;


use IikoTransport\RestDto;

class OrderPaymentTypeDto extends RestDto
{
    /**
     * ID
     * @var string
     */
    public $id;

    /**
     * Name
     * @var string
     */
    public $name;

    /**
     * Enum: "Unknown" "Cash" "Card" "Credit" "Writeoff" "Voucher" "External" "SmartSale" "Sberbank" "Trpos"
     * Payment type classifier
     * @var string
     */
    public $kind;
}