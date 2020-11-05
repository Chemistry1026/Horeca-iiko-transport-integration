<?php


namespace IikoTransport\dto\Order\Create\DiscountInfo;


use IikoTransport\RestDto;

class OrderDiscountInfoCardDto extends RestDto
{
    /**
     * Track of discount card to be applied to order.
     * @var string
     */
    public $track;

    public function __construct(string $track)
    {
        $this->track = $track;
    }
}