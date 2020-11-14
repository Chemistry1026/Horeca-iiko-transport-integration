<?php


namespace IikoTransport\dto\Order\Item;


use IikoTransport\dto\Deleted\DeletedObjectDto;
use IikoTransport\dto\Order\OrderSizeDto;
use IikoTransport\dto\Order\OrderTemplate;
use IikoTransport\RestDto;

class OrderItemCompoundDto extends RestDto
{
    /**
     *  Value: "Product"
     *  Item type. Product if product item.
     * @var string
     */
    public $type;

    /**
     * Main component
     * @var OrderItemCompoundComponentDto
     */
    public $primaryComponent;

    /**
     * Main component
     * @var OrderItemCompoundComponentDto
     */
    public $secondaryComponent;

    /**
     * Indivisible modifiers
     * @var OrderItemModifierDto[]
     */
    public $commonModifiers;

    /**
     *  Enum: "Added" "PrintedNotCooking" "CookingStarted" "CookingCompleted" "Served"
     *  Item cooking status
     *  @var string
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
     * Modifier scheme
     * @var OrderTemplate
     */
    public $template;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setPropertyToClassPropertyFromJson('primaryComponent', new OrderItemCompoundComponentDto());
        $this->setPropertyToClassPropertyFromJson('secondaryComponent', new OrderItemCompoundComponentDto());
        $this->setArrayToPropertyFromJson('commonModifiers', new OrderItemModifierDto());
        $this->setPropertyToClassPropertyFromJson('size', new OrderSizeDto());
        $this->setPropertyToClassPropertyFromJson('comboInformation', new OrderItemComboInformationDto());
        $this->setPropertyToClassPropertyFromJson('template', new OrderTemplate());
    }
}