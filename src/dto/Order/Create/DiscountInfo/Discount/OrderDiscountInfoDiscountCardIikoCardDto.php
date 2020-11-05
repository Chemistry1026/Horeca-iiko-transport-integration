<?php


namespace IikoTransport\dto\Order\Create\DiscountInfo\Discount;


use IikoTransport\RestDto;

class OrderDiscountInfoDiscountCardIikoCardDto extends RestDto
{
    /**
     * Value: "iikoCard"
     * Discount/surcharge type.
     * @var string
     */
    protected $type = "iikoCard";

    /**
     * iikoCard program ID
     * @var string
     */
    protected $programId;

    /**
     * iikoCard program name
     * @var string
     */
    protected $programName;

    /**
     * Discount information for order items
     * @var OrderDiscountInfoDiscountItemDto[]
     */
    protected $discountItems;

    public function __construct(string $programId, string $programName, array $discountItems)
    {
        $this->programId = $programId;
        $this->programName = $programName;
        $this->discountItems = $discountItems;
    }
}