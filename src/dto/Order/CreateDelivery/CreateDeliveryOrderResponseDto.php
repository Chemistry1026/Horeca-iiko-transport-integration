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
     * @var CreateDeliveryOrderInfoDto
     */
    public $orderInfo;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setPropertyToClassPropertyFromJson('orderInfo', new CreateDeliveryOrderInfoDto());
    }
}