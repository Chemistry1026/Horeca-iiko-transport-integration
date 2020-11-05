<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderDiscountDto extends RestDto
{
    /**
     * Discount type
     * @var OrderDiscountTypeDto
     */
    public $discountType;

    /**
     * Total
     * @var double
     */
    public $sum;

    /**
     * Order item positions
     * @var string[]
     */
    public $selectivePositions;

    public function __construct()
    {
        $this->setPropertyToClassPropertyFromJson('discountType', new OrderDiscountTypeDto());
    }
}