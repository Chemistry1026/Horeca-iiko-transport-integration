<?php


namespace IikoTransport\dto\Order\CreateDelivery\Item;


use IikoTransport\RestDto;

class CreateOrderItemProductDto extends RestDto
{
    /**
     *  Value: "Product"
     *  Item type. Product if product item.
     * @var string
     */
    protected $type = "Product";

    /**
     * ID of menu item
     * @var string
     */
    protected $productId;

    /**
     * Modifiers
     * @var CreateOrderItemModifierDto[]
     */
    protected $modifiers;

    /**
     * Price per item unit
     * @var double
     */
    public $price;

    /**
     * Quantity
     * @var double
     */
    protected $amount;

    /**
     * Size ID. Required if a stock list item has a size scale
     * @var string
     */
    public $productSizeId;

    /**
     * Combo details if combo includes order item
     * @var CreateOrderItemComboInformationDto
     */
    public $comboInformation;

    /**
     * Comment
     * @var string
     */
    public $comment;

    /**
     * Unique identifier of the item in the order. MUST be unique for the whole system. Therefore it must be generated with Guid.NewGuid()
     * @var string|null
     */
    public $positionId = null;

    /**
     * AddOrderItemProductDto constructor.
     * @param string $productId
     * @param float $amount
     */
    public function __construct(string $productId, float $amount)
    {
        $this->productId = $productId;
        $this->amount = $amount;
    }

    /**
     * @param CreateOrderItemModifierDto $modifier
     */
    public function appendModifier(CreateOrderItemModifierDto $modifier)
    {
        $this->modifiers[] = $modifier;
    }
}