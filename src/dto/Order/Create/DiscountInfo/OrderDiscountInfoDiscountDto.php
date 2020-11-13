<?php


namespace IikoTransport\dto\Order\Create\DiscountInfo;


use IikoTransport\dto\Order\Create\DiscountInfo\Discount\OrderDiscountInfoDiscountCardIikoCardDto;
use IikoTransport\dto\Order\Create\DiscountInfo\Discount\OrderDiscountInfoDiscountCardRmsDto;
use IikoTransport\RestDto;

class OrderDiscountInfoDiscountDto extends RestDto
{
    /**
     * Track of discount card to be applied to order
     * @var OrderDiscountInfoCardDto
     */
    public $card;

    /**
     * Discounts/surcharges
     * @var OrderDiscountInfoDiscountCardRmsDto[]|OrderDiscountInfoDiscountCardIikoCardDto[]
     */
    public $discounts;
}