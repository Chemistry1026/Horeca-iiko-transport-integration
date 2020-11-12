<?php


namespace IikoTransport\dto\Order\DeliveryPoint\Address;


use IikoTransport\RestDto;

class OrderDeliveryPointAddressRegionDto extends RestDto
{
    /**
     * ID
     * @var string
     */
    public $id;

    /**
     * Name
     * @var string
     */
    public $name;
}