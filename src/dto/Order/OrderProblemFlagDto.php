<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderProblemFlagDto extends RestDto
{
    /**
     * Problem description
     * @var string
     */
    public $description;
}