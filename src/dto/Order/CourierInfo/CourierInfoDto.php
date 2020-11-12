<?php


namespace IikoTransport\dto\Order\CourierInfo;


use IikoTransport\RestDto;

class CourierInfoDto extends RestDto
{
    /**
     * Operator that took order
     * @var CourierInfoSingleDto
     */
    public $courier;

    /**
     * Whether driver is selected manually
     * @var bool
     */
    public $isCourierSelectedManually;
}