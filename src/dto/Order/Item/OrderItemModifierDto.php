<?php


namespace IikoTransport\dto\Order\Item;


use IikoTransport\dto\Deleted\DeletedObjectDto;
use IikoTransport\dto\Order\OrderProductSingleDto;
use IikoTransport\RestDto;

class OrderItemModifierDto extends RestDto
{
    /**
     * Item
     * @var OrderProductSingleDto
     */
    public $product;

    /**
     * Quantity
     * @var double
     */
    public $amount;

    /**
     * Whether quantity of modifier depends on quantity of item
     * @var bool
     */
    public $amountIndependentOfParentAmount;

    /**
     * Group of modifiers (in case of a group modifier)
     * @var OrderProductSingleDto
     */
    public $productGroup;

    /**
     * Unit price
     * @var double
     */
    public $price;

    /**
     * Whether price is predefined
     * @var bool
     */
    public $pricePredefined;

    /**
     * Total amount per item including tax, discounts/surcharges
     * @var double
     */
    public $resultSum;

    /**
     * Item deletion details. If filled up, item is deleted
     * @var DeletedObjectDto
     */
    public $deleted;

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
        $this->setPropertyToClassPropertyFromJson('productGroup', new OrderProductSingleDto());
        $this->setPropertyToClassPropertyFromJson('deleted', new DeletedObjectDto());
    }
}