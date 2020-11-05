<?php


namespace IikoTransport\dto\Nomenclature\Product;


use IikoTransport\RestDto;

class NomenclatureProductGroupModifierDto extends RestDto
{
    /**
     * ID
     * @var string
     */
    public $id;

    /**
     * Minimum quantity
     * @var integer
     */
    public $minAmount;

    /**
     * Maximum quantity
     * @var integer
     */
    public $maxAmount;

    /**
     * Required availability
     * @var bool
     */
    public $required;

    /**
     * Presence of max/min quantity limitations of child modifiers
     * @var bool
     */
    public $childModifiersHaveMinMaxRestrictions;

    /**
     * Default quantity. This field is supported since 7.2.4 iikoRMS version
     * @var integer
     */
    public $defaultAmount;

    /**
     * Hide if default amount applied. This field is supported since 7.2.4 iikoRMS version
     * @var bool
     */
    public $hideIfDefaultAmount;

    /**
     * Modifier can be splitted. This field is supported since 7.2.4 iikoRMS version
     * @var bool
     */
    public $splittable;

    /**
     * Free of charge amount. This field is supported since 7.2.4 iikoRMS version
     * @var integer
     */
    public $freeOfChargeAmount;

    /**
     * List of child modifiers
     * @var NomenclatureProductGroupModifierDto[]|null
     */
    public $childModifiers;
}