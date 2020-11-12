<?php


namespace IikoTransport\dto\Order\DeliveryPoint\Address;


use IikoTransport\RestDto;

class OrderDeliveryPointAddressStreetDto extends RestDto
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

    /**
     * City
     * @var OrderDeliveryPointAddressStreetCityDto
     */
    public $city;
}