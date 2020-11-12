<?php


namespace IikoTransport\dto\Delivery;


use IikoTransport\RestDto;

class DeliveryRetrieveOrdersByIDsInputData extends RestDto
{
    /**
     * Organization ID for which an order search will be performed
     * @var string
     */
    public $organizationId;

    /**
     * IDs of orders information on which is required
     * @var string[]
     */
    public $orderIds;

    /**
     * Delivery source keys
     * @var string[]
     */
    public $sourceKeys;

    /**
     * DeliveryRetrieveOrdersByIDsInputData constructor.
     * @param string $organizationId
     * @param string[] $orderIds
     */
    public function __construct(string $organizationId, array $orderIds)
    {
        $this->organizationId = $organizationId;
        $this->orderIds = $orderIds;
    }
}