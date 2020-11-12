<?php


namespace IikoTransport\dto\Order\DeliveryPoint;


use IikoTransport\RestDto;

class OrderDeliveryPointCoordinateDto extends RestDto
{
    /**
     * Latitude
     * @var double
     */
    public $latitude;

    /**
     * Longitude
     * @var double
     */
    public $longitude;
}