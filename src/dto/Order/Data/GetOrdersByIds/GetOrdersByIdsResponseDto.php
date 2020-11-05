<?php


namespace IikoTransport\dto\Order\Data\GetOrdersByIds;


use IikoTransport\dto\Order\OrderResponseDto;
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
     * @var OrderResponseDto[]
     */
    public $orders;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setArrayToPropertyFromJson('orders', new OrderResponseDto());
    }
}