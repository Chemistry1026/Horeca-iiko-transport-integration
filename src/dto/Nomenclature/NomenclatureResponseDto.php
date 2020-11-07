<?php


namespace IikoTransport\dto\Nomenclature;


use IikoTransport\dto\Nomenclature\Product\NomenclatureProductGroupModifierDto;
use IikoTransport\dto\Nomenclature\Product\NomenclatureProductSizeDto;
use IikoTransport\dto\Nomenclature\Product\NomenclatureProductSizePriceDto;
use IikoTransport\RestDto;

class NomenclatureResponseDto extends RestDto
{
    /**
     * Stock list group
     * @var NomenclatureGroupDto[]
     */
    public $groups;

    /**
     * Menu item categories
     * @var NomenclatureProductCategoryDto[]
     */
    public $productCategories;

    /**
     * Menu items and modifiers
     * @var NomenclatureProductDto[]
     */
    public $products;

    /**
     * Item sizes
     * @var NomenclatureSizeDto[]
     */
    public $sizes;

    /**
     * Items list revision.
     * @var integer
     */
    public $revision;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setArrayToPropertyFromJson('groups', new NomenclatureGroupDto());

        $this->setArrayToPropertyFromJson('products', new NomenclatureProductDto(), function (NomenclatureProductDto $dto) {
            $dto->setArrayToPropertyFromJson('modifiers', new NomenclatureProductGroupModifierDto(), function (NomenclatureProductGroupModifierDto $modifierDto) {
                $modifierDto->setArrayToPropertyFromJson('childModifiers', new NomenclatureProductGroupModifierDto());
            });

            $dto->setArrayToPropertyFromJson('groupModifiers', new NomenclatureProductGroupModifierDto());

            $dto->setArrayToPropertyFromJson('sizePrices', new NomenclatureProductSizeDto(), function (NomenclatureProductSizeDto $sizePriceDto) {
                $sizePriceDto->setArrayToPropertyFromJson('price', new NomenclatureProductSizePriceDto());
            });
        });

        $this->setArrayToPropertyFromJson('productCategories', new NomenclatureProductCategoryDto());

        $this->setArrayToPropertyFromJson('sizes', new NomenclatureSizeDto());
    }
}