<?php


namespace IikoTransport\dto\Nomenclature\Product;


use IikoTransport\RestDto;

class NomenclatureProductSizeDto extends RestDto
{
    /**
     * Item size ID
     * @var string|null
     */
    public $sizeId;

    /**
     * Price per this item size
     * @var NomenclatureProductSizePriceDto
     */
    public $price;
}