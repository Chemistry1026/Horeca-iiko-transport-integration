<?php


namespace IikoTransport\dto\Order\CourierInfo;


use IikoTransport\RestDto;

class CourierInfoSingleDto extends RestDto
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