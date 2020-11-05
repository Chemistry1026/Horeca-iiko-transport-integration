<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderTemplate extends RestDto
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