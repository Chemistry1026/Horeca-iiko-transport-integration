<?php


namespace IikoTransport\dto\Nomenclature;


use IikoTransport\dto\Nomenclature\Product\NomenclatureProductGroupModifierDto;
use IikoTransport\dto\Nomenclature\Product\NomenclatureProductSizeDto;
use IikoTransport\RestDto;

class NomenclatureProductDto extends RestDto
{
    /**
     * Fat per 100g
     * @var double
     */
    public $fatAmount;

    /**
     * Protein per 100g
     * @var double
     */
    public $proteinsAmount;

    /**
     * Carbohydrate per 100g
     * @var double
     */
    public $carbohydratesAmount;

    /**
     * Calories per 100g
     * @var double
     */
    public $energyAmount;

    /**
     * Fat per item
     * @var double
     */
    public $fatFullAmount;

    /**
     * Protein per item
     * @var double
     */
    public $proteinsFullAmount;

    /**
     * Carbohydrate per item
     * @var double
     */
    public $carbohydratesFullAmount;

    /**
     * Calories per item
     * @var double
     */
    public $energyFullAmount;

    /**
     * Item weight
     * @var double
     */
    public $weight;

    /**
     * Stock list group in RMS
     * @var string
     */
    public $groupId;

    /**
     * Product category in RMS
     * @var string
     */
    public $productCategoryId;

    /**
     * dish | good | modifier
     * @var string
     */
    public $type;

    /**
     * Product or Compound. Depends on modifiers scheme existence.
     * Product if null or empty modifierSchemaName, otherwise - Compound.
     * @var string
     */
    public $orderItemType;

    /**
     * Modifiers scheme's name
     * @var string
     */
    public $modifierSchemaName;

    /**
     * Item's unit of measurement
     * @var string
     */
    public $measureUnit;

    /**
     * Array of objects
     * @var NomenclatureProductSizeDto[]
     */
    public $sizePrices;

    /**
     * Modifiers
     * @var NomenclatureProductGroupModifierDto[]
     */
    public $modifiers;

    /**
     * Modifier groups
     * @var NomenclatureProductGroupModifierDto[]
     */
    public $groupModifiers;

    /**
     * Links to images
     * @var string[]
     */
    public $imageLinks;

    /**
     * Do not print on bill
     * @var bool
     */
    public $doNotPrintInCheque;

    /**
     * External menu group
     * @var string
     */
    public $parentGroup;

    /**
     * Product's order in menu
     * @var integer
     */
    public $order;

    /**
     * ID
     * @var string
     */
    public $id;

    /**
     * SKU
     * @var string
     */
    public $code;

    /**
     * Name
     * @var string
     */
    public $name;

    /**
     * Description
     * @var string
     */
    public $description;

    /**
     * Additional information
     * @var string
     */
    public $additionalInfo;

    /**
     * Tags
     * @var string[]
     */
    public $tags;

    /**
     * Is-Deleted attribute
     * @var bool
     */
    public $isDeleted;

    /**
     * SEO description for client
     * @var string
     */
    public $seoDescription;

    /**
     * SEO text for robots
     * @var string
     */
    public $seoText;

    /**
     * SEO key words
     * @var string
     */
    public $seoKeywords;

    /**
     * SEO header
     * @var string
     */
    public $seoTitle;

    /**
     * Full name in a foreign language
     * @var string
     */
    public $fullNameEnglish;

    /**
     * Weighed product
     * @var bool
     */
    public $useBalanceForSell;

    /**
     * Open price
     * @var bool
     */
    public $canSetOpenPrice;

    /**
     * @return NomenclatureProductSizeDto|null
     */
    public function getFirstSizePrice()
    {
        if (!count($this->sizePrices)) return null;
        return $this->sizePrices[0];
    }
}