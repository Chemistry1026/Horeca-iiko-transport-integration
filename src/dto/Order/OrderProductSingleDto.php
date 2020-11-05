<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderProductSingleDto extends RestDto
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