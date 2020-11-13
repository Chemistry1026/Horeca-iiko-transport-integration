<?php


namespace IikoTransport\dto\Order\CreateDelivery;


use IikoTransport\RestDto;

class CreateDeliveryOrderResponseDto extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    /**
     * Order
     * @var
     */
    public $orderInfo;
}