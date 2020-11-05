<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderConceptionDto extends RestDto
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
     * Code
     * @var string
     */
    public $code;
}