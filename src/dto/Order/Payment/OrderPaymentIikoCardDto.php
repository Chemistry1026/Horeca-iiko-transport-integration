<?php


namespace IikoTransport\dto\Order\Payment;


use IikoTransport\RestDto;

class OrderPaymentIikoCardDto extends RestDto
{
    /**
     *  Value: "Card"
     *  Payment type kind. Must be Card for card payment.
     * @var string
     */
    public $paymentTypeKind;

    /**
     * Card number
     * @var string
     */
    public $number;

    /**
     * Amount due
     * @var double
     */
    public $sum;

    /**
     * Payment type
     * @var string
     */
    public $paymentTypeId;

    /**
     * Whether payment item is processed by external payment system (made from outside)
     * @var bool
     */
    public $isProcessedExternally;

    /**
     * Additional data for iikoCard51 payment item.
     * @var CreateOrderPaymentAdditionalDataDto
     */
    public $paymentAdditionalData;
}