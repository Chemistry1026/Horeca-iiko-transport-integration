<?php


namespace IikoTransport\dto\Order\CloseOrder;


use IikoTransport\RestDto;

class CloseOrderInputDataDto extends RestDto
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

    public function __construct(string $organizationId, string $orderId)
    {
        $this->organizationId = $organizationId;
        $this->orderId = $orderId;
    }
}