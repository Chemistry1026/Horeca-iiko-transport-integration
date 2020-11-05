<?php


namespace IikoTransport\dto\Order\Create\Item;


use IikoTransport\RestDto;

class CreateOrderItemModifierDto extends RestDto
{
    /**
     * Modifier item ID
     * @var string
     */
    protected $productId;

    /**
     * Quantity
     * @var double
     */
    protected $amount;

    /**
     * Modifiers group ID (for group modifier). Required for a group modifier
     * @var string
     */
    public $productGroupId;

    /**
     * Unit price
     * @var double
     */
    public $price;

    /**
     * Unique identifier of the item in the order. MUST be unique for the whole system. Therefore it must be generated with Guid.NewGuid()
     * @var string|null
     */
    public $positionId = null;

    /**
     * CreateOrderItemModifierDto constructor.
     * @param string $productId
     * @param float $amount
     */
    public function __construct(string $productId, float $amount)
    {
        $this->productId = $productId;
        $this->amount = $amount;
    }
}