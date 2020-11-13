<?php


namespace IikoTransport\dto\Order\CreateDelivery\Payment;


use IikoTransport\RestDto;

class CreateOrderPaymentCashDto extends RestDto
{
    /**
     *  Value: "Card"
     *  Payment type kind. Must be Card for card payment.
     * @var string
     */
    protected $paymentTypeKind = "Cash";

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
     * CreateOrderPaymentCashDto constructor.
     * @param int $sum
     * @param string $paymentTypeId
     */
    public function __construct(int $sum, string $paymentTypeId)
    {
        $this->sum = $sum;
        $this->paymentTypeId = $paymentTypeId;
    }
}