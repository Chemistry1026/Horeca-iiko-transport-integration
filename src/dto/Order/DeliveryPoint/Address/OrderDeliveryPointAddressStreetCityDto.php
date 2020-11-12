<?php


namespace IikoTransport\dto\Order\DeliveryPoint\Address;


use IikoTransport\RestDto;

class OrderDeliveryPointAddressStreetCityDto extends RestDto
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