<?php


namespace IikoTransport\dto\Order\Data\GetOrdersByTables;


use IikoTransport\dto\Order\OrderResponseDto;
use IikoTransport\RestDto;

class GetOrdersByTablesResponseDto extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    /**
     * Orders
     * @var OrderResponseDto[]
     */
    public $orders;

    public function __construct()
    {
        $this->setArrayToPropertyFromJson('orders', new OrderResponseDto());
    }
}