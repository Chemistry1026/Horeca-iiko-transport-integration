<?php


namespace IikoTransport\dto\Order\Payment;


use IikoTransport\RestDto;

class OrderPaymentCashDto extends RestDto
{
    /**
     *  Value: "Card"
     *  Payment type kind. Must be Card for card payment.
     * @var string
     */
    public $paymentTypeKind;

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
}