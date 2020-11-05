<?php


namespace IikoTransport\dto\Order;


use IikoTransport\dto\Order\Payment\OrderPaymentTypeDto;
use IikoTransport\RestDto;

class OrderPaymentDto extends RestDto
{
    /**
     * Payment type
     * @var OrderPaymentTypeDto
     */
    public $paymentType;

    /**
     * Amount due
     * @var double
     */
    public $sum;

    /**
     * Whether payment item is preliminary
     * @var bool
     */
    public $isPreliminary;

    /**
     * Payment item is external
     * @var bool
     */
    public $isExternal;

    /**
     * Payment item is processed by external payment system
     * @var bool
     */
    public $isProcessedExternally;

    public function __construct()
    {
        $this->setPropertyToClassPropertyFromJson('paymentType', new OrderPaymentTypeDto());
    }
}