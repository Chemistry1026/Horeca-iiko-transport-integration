<?php


namespace IikoTransport\dto\Order\Item;


use IikoTransport\dto\Order\OrderProductSingleDto;
use IikoTransport\RestDto;

class OrderItemCompoundComponentDto extends RestDto
{
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
     * Price
     * @var double
     */
    public $price;

    /**
     * Item total including tax, discounts/surcharges.
     * @var double
     */
    public $cost;

    /**
     * Whether price is predefined
     * @var bool
     */
    public $pricePredefined;

    /**
     * Unique identifier of the item in the order. MUST be unique for the whole system. Therefore it must be generated with Guid.NewGuid()
     * @var string|null
     */
    public $positionId;

    /**
     * Tax rate
     * @var double|null
     */
    public $taxPercent;
}