<?php


namespace IikoTransport\dto\Order\Create;


use IikoTransport\dto\Order\OrderResponseDto;
use IikoTransport\RestDto;

class CreateOrderResponseDto extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    /**
     * Order
     * @var OrderResponseDto
     */
    public $orderInfo;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setPropertyToClassPropertyFromJson('orderInfo', new OrderResponseDto());
    }
}