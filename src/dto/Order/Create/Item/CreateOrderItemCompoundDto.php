<?php


namespace IikoTransport\dto\Order\Create\Item;


use IikoTransport\RestDto;

class CreateOrderItemCompoundDto extends RestDto
{
    /**
     *  Value: "Product"
     *  Item type. Product if product item.
     * @var string
     */
    protected $type = "Compound";

    /**
     * Main component
     * @var CreateOrderItemCompoundComponentDto
     */
    protected $primaryComponent;

    /**
     * Main component
     * @var CreateOrderItemCompoundComponentDto
     */
    protected $secondaryComponent;

    /**
     * Indivisible modifiers
     * @var CreateOrderItemModifierDto[]
     */
    public $commonModifiers;

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

    public function __construct(CreateOrderItemCompoundComponentDto $primaryComponent, float $amount)
    {
        $this->primaryComponent = $primaryComponent;
        $this->amount = $amount;
    }

    public function setSecondaryComponent(CreateOrderItemCompoundComponentDto $component)
    {
        $this->secondaryComponent = $component;
    }
}