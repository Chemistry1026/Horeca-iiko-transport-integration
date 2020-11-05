<?php


namespace IikoTransport\dto\Order\Create;


use IikoTransport\dto\Order\Create\Create\CreateOrderSettingDto;
use IikoTransport\RestDto;

class CreateOrderInputDataDto extends RestDto
{
    /**
     * Organization ID
     * @var string
     */
    protected $organizationId;

    /**
     * Front group ID an order must be sent to
     * @var string
     */
    protected $terminalGroupId;

    /**
     * Order creation parameters
     * @var CreateOrderSettingDto
     */
    public $createOrderSettings;

    /**
     * Order
     * @var CreateOrderDto
     */
    public $order;

    public function __construct(string $organizationId, string $terminalGroupId, CreateOrderDto $order)
    {
        $this->organizationId = $organizationId;
        $this->terminalGroupId = $terminalGroupId;
        $this->order = $order;
    }
}