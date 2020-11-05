<?php


namespace IikoTransport\dto\Order\Create\DiscountInfo\Discount;


use IikoTransport\RestDto;

class OrderDiscountInfoDiscountItemDto extends RestDto
{
    /**
     * Position ID of order item
     * @var string
     */
    protected $positionId;

    /**
     * Discount/surcharge sum
     * @var double
     */
    protected $sum;

    /**
     * Amount
     * @var double
     */
    protected $amount;

    public function __construct($positionId, float $sum, float $amount)
    {
        $this->positionId = $positionId;
        $this->sum = $sum;
        $this->amount = $amount;
    }
}