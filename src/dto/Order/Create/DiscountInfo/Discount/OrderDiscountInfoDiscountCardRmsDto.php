<?php


namespace IikoTransport\dto\Order\Create\DiscountInfo\Discount;


use IikoTransport\RestDto;

class OrderDiscountInfoDiscountCardRmsDto extends RestDto
{
    /**
     *  Value: "RMS"
     *  Discount/surcharge type.
     * @var string
     */
    protected $type = "RMS";

    /**
     * Discount type
     * @var string
     */
    protected $discountTypeId;

    /**
     * Discount/surcharge sum
     * @var double
     */
    public $sum;

    /**
     * Order item positions
     * @var string[]
     */
    public $selectivePositions;

    public function __construct(string $discountTypeId)
    {
        $this->discountTypeId = $discountTypeId;
    }
}