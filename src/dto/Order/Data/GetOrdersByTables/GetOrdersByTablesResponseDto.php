<?php


namespace IikoTransport\dto\Order\Data\GetOrdersByTables;


use IikoTransport\dto\Order\OrderDto;
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
     * @var OrderDto[]
     */
    public $orders;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->orders = new OrderDto($data);
    }
}