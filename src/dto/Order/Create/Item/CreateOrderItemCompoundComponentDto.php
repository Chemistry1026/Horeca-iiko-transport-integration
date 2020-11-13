<?php


namespace IikoTransport\dto\Order\Create\Item;


use IikoTransport\RestDto;

class CreateOrderItemCompoundComponentDto extends RestDto
{
    /**
     * Item ID
     * @var string
     */
    public $productId;

    /**
     * Modifiers
     * @var CreateOrderItemModifierDto[]
     */
    public $modifiers;

    /**
     * Price
     * @var double
     */
    public $price;

    /**
     * Unique identifier of the item in the order. MUST be unique for the whole system. Therefore it must be generated with Guid.NewGuid()
     * @var string|null
     */
    public $positionId;

    /**
     * CreateOrderItemCompoundComponentDto constructor.
     * @param string $productId
     */
    public function __construct(string $productId)
    {
        $this->productId = $productId;
    }
}