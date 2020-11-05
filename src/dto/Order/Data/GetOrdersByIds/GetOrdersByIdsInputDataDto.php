<?php


namespace IikoTransport\dto\Order\Data\GetOrdersByIds;


use IikoTransport\RestDto;

class GetOrdersByIdsInputDataDto extends RestDto
{
    /**
     * Organization IDs
     * @var string
     */
    protected $organizationId;

    /**
     * Order IDs
     * @var string[]
     */
    protected $orderIds;

    /**
     * Source keys
     * @var string[]
     */
    protected $sourceKeys;

    /**
     * GetOrdersByIdsInputDataDto constructor.
     * @param string $organizationId
     * @param string[] $orderIds
     */
    public function __construct(string $organizationId, array $orderIds)
    {
        $this->organizationId = $organizationId;
        $this->orderIds = $orderIds;
    }
}