<?php


namespace IikoTransport\dto\Order\DeliveryPoint;


use IikoTransport\RestDto;

class OrderDeliveryPointDto extends RestDto
{
    /**
     * Delivery address coordinates
     * @var OrderDeliveryPointCoordinateDto
     */
    public $coordinates;

    /**
     * Shipping address information
     * @var OrderDeliveryPointAddressDto
     */
    public $address;

    /**
     * Address ID in external mapping system
     * @var string
     */
    public $externalCartographyId;

    /**
     * Comment
     * @var string
     */
    public $comment;
}