<?php


namespace IikoTransport\dto\Order\Create\Payment;


use IikoTransport\RestDto;

class CreateOrderPaymentIikoCardDto extends RestDto
{
    /**
     *  Value: "Card"
     *  Payment type kind. Must be Card for card payment.
     * @var string
     */
    protected $paymentTypeKind = "IikoCard";

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
     * Additional data for iikoCard51 payment item.
     * @var CreateOrderPaymentAdditionalDataDto
     */
    protected $paymentAdditionalData;

    /**
     * CreateOrderPaymentIikoCardDto constructor.
     * @param int $sum
     * @param string $paymentTypeId
     * @param CreateOrderPaymentAdditionalDataDto $paymentAdditionalData
     */
    public function __construct(int $sum, string $paymentTypeId, CreateOrderPaymentAdditionalDataDto $paymentAdditionalData)
    {
        $this->sum = $sum;
        $this->paymentTypeId = $paymentTypeId;
        $this->paymentAdditionalData = $paymentAdditionalData;
    }
}