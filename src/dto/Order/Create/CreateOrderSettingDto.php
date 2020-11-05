<?php


namespace IikoTransport\dto\Order\Create\Create;


use IikoTransport\RestDto;

class CreateOrderSettingDto extends RestDto
{
    /**
     * Timeout in seconds that specifies how much time is given for order to reach iikoFront.
     * After this time, order is nullified if iikoFront doesn't take it
     * @var integer
     */
    public $transportToFrontTimeout;
}