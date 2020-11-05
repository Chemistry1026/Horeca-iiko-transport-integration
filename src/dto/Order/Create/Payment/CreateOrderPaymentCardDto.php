<?php


namespace IikoTransport\dto\Order\Create\Payment;


use IikoTransport\RestDto;

class CreateOrderPaymentCardDto extends RestDto
{
    /**
     *  Value: "Card"
     *  Payment type kind. Must be Card for card payment.
     * @var string
     */
    protected $paymentTypeKind = "Card";

    /**
     * Card number
     * @var string
     */
    public $number;

    /**
     * Amount due
     * @var double
     */
    protected $sum;

    /**
     * Payment type
     * @var string
     */
    protected $paymentTypeId;

    /**
     * Whether payment item is processed by external payment system (made from outside)
     * @var bool
     */
    public $isProcessedExternally;

    /**
     * CreateOrderPaymentCardDto constructor.
     * @param int $sum
     * @param string $paymentTypeId
     */
    public function __construct(int $sum, string $paymentTypeId)
    {
        $this->sum = $sum;
        $this->paymentTypeId = $paymentTypeId;
    }
}