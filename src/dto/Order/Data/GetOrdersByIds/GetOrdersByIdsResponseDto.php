<?php


namespace IikoTransport\dto\Order\Data\GetOrdersByIds;


use IikoTransport\dto\Order\OrderDto;
use IikoTransport\RestDto;

class GetOrdersByIdsResponseDto extends RestDto
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