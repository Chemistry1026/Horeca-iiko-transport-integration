<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderGuestInfoDto extends RestDto
{
    /**
     * Number of persons
     * @var integer
     */
    public $count;

    /**
     * Attribute that shows whether order must be split among guests
     * @var bool
     */
    public $splitBetweenPersons;
}