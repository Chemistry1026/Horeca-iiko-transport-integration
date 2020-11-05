<?php


namespace IikoTransport\dto\Order\Data\GetOrdersByTables;


use IikoTransport\RestDto;

class GetOrdersByTablesInputDataDto extends RestDto
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
    protected $tableIds;

    /**
     * Source keys
     * @var string[]
     */
    protected $sourceKeys;

    /**
     * GetOrdersByIdsInputDataDto constructor.
     * @param string $organizationId
     * @param string[] $tableIds
     */
    public function __construct(string $organizationId, array $tableIds)
    {
        $this->organizationId = $organizationId;
        $this->tableIds = $tableIds;
    }
}