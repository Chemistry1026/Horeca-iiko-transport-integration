<?php


namespace IikoTransport\dto\Order\CreateDelivery;


use IikoTransport\dto\Order\Create\CreateOrderSettingDto;
use IikoTransport\RestDto;

class CreateDeliveryOrderInputDataDto extends RestDto
{
    /**
     * Organization ID of a new order
     * @var string
     */
    protected $organizationId;

    /**
     * Front group ID an order must be sent to
     * @var string
     */
    public $terminalGroupId;

    /**
     * Order creation parameters
     * @var CreateOrderSettingDto
     */
    public $createOrderSettings;

    /**
     * Order
     * @var CreateDeliveryOrderDto
     */
    public $order;

    public function __construct(string $organizationId, CreateDeliveryOrderDto $order)
    {
        $this->organizationId = $organizationId;
        $this->order = $order;
    }
}