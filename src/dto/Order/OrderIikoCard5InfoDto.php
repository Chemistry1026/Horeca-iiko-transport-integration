<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderIikoCard5InfoDto extends RestDto
{
    /**
     * Coupon No. that has to be considered when calculating loyalty program
     * @var string
     */
    public $coupon;

    /**
     * Information about applied manual conditions
     * @var string[]
     */
    public $applicableManualConditions;
}