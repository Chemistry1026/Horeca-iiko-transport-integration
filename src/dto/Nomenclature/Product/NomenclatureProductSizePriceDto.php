<?php


namespace IikoTransport\dto\Nomenclature\Product;


use IikoTransport\RestDto;

class NomenclatureProductSizePriceDto extends RestDto
{
    /**
     * Current price
     * @var double
     */
    public $currentPrice;

    /**
     * Is on the menu
     * @var bool
     */
    public $isIncludedInMenu;

    /**
     * New price
     * @var double
     */
    public $nextPrice;

    /**
     * Will be on the menu in the future
     * @var bool
     */
    public $nextIncludedInMenu;

    /**
     * New price validity start date
     * @var string
     */
    public $nextDatePrice;
}