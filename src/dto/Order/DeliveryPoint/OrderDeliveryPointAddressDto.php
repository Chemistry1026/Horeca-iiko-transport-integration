<?php


namespace IikoTransport\dto\Order\DeliveryPoint;


use IikoTransport\dto\Order\DeliveryPoint\Address\OrderDeliveryPointAddressRegionDto;
use IikoTransport\dto\Order\DeliveryPoint\Address\OrderDeliveryPointAddressStreetDto;
use IikoTransport\RestDto;

class OrderDeliveryPointAddressDto extends RestDto
{
    /**
     * Street
     * @var OrderDeliveryPointAddressStreetDto
     */
    public $street;

    /**
     * Postcode
     * @var string
     */
    public $index;

    /**
     * House
     * @var string
     */
    public $house;

    /**
     * Building
     * @var string
     */
    public $building;

    /**
     * Apartment
     * @var string
     */
    public $flat;

    /**
     * Entrance
     * @var string
     */
    public $entrance;

    /**
     * Floor
     * @var string
     */
    public $floor;

    /**
     * Intercom
     * @var string
     */
    public $doorphone;

    /**
     * Region
     * @var OrderDeliveryPointAddressRegionDto
     */
    public $region;
}