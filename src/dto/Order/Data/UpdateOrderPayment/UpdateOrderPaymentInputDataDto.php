<?php


namespace IikoTransport\dto\Order\Data\UpdateOrderPayment;


use IikoTransport\RestDto;

class UpdateOrderPaymentInputDataDto extends RestDto
{
    /**
     * Organization ID
     * @var string
     */
    protected $organizationId;

    /**
     * Order ID
     * @var string
     */
    protected $orderId;

    /**
     * Payment details
     * @var UpdateOrderPaymentItemsDto
     */
    public $paymentItems;

    public function __construct(string $organizationId, string $orderId)
    {
        $this->organizationId = $organizationId;
        $this->orderId = $orderId;
    }
}