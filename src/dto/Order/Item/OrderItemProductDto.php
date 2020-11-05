<?php


namespace IikoTransport\dto\Order\Item;


use IikoTransport\dto\Deleted\DeletedObjectDto;
use IikoTransport\dto\Order\OrderProductSingleDto;
use IikoTransport\dto\Order\OrderSizeDto;
use IikoTransport\RestDto;

class OrderItemProductDto extends RestDto
{
    /**
     *  Value: "Product"
     *  Item type. Product if product item.
     * @var string
     */
    public $type;

    /**
     * Item
     * @var OrderProductSingleDto
     */
    public $product;

    /**
     * Modifiers
     * @var OrderItemModifierDto[]
     */
    public $modifiers;

    /**
     * Price per item unit
     * @var double
     */
    public $price;

    /**
     * Total amount per item including tax, discounts/surcharges
     * @var double
     */
    public $cost;

    /**
     * Whether price is predefined
     * @var bool
     */
    public $pricePredefined;

    /**
     *  Enum: "Added" "PrintedNotCooking" "CookingStarted" "CookingCompleted" "Served"
     *  Item cooking status
     * @var string
     */
    public $status;

    /**
     * Item deletion details. If filled up, item is deleted
     * @var DeletedObjectDto
     */
    public $deleted;

    /**
     * Quantity
     * @var double
     */
    public $amount;

    /**
     * Comment
     * @var string
     */
    public $comment;

    /**
     * Printing time
     * @var string
     */
    public $whenPrinted;

    /**
     * Size
     * @var OrderSizeDto
     */
    public $size;

    /**
     * Combo details if combo includes order item
     * @var OrderItemComboInformationDto
     */
    public $comboInformation;

    /**
     * Unique identifier of the item in the order. MUST be unique for the whole system. Therefore it must be generated with Guid.NewGuid()
     * @var string|null
     */
    public $positionId;

    /**
     * Tax rate
     * @var string|null
     */
    public $taxPercent;

    public function __construct()
    {
        $this->setPropertyToClassPropertyFromJson('product', new OrderProductSingleDto());
        $this->setPropertyToClassPropertyFromJson('deleted', new DeletedObjectDto());
        $this->setPropertyToClassPropertyFromJson('size', new OrderSizeDto());
        $this->setPropertyToClassPropertyFromJson('comboInformation', new OrderItemComboInformationDto());
    }
}