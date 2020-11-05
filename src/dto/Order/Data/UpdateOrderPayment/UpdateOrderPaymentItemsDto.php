<?php


namespace IikoTransport\dto\Order\Data\UpdateOrderPayment;


use IikoTransport\RestDto;

class UpdateOrderPaymentItemsDto extends RestDto
{
    /**
     * Amount due
     * @var double
     */
    public $sum;

    /**
     * Payment type ID
     * @var string
     */
    public $paymentTypeId;

    /**
     * Payment item is processed by external payment system
     * @var bool
     */
    protected $isProcessedExternally;

    public function __construct(bool $isProcessedExternally)
    {
        $this->isProcessedExternally = $isProcessedExternally;
    }
}