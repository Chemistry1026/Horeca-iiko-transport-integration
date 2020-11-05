<?php


namespace IikoTransport\dto\Nomenclature;


use IikoTransport\RestDto;

class NomenclatureGroupDto extends RestDto
{
    /**
     * ID
     * @var integer
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
     * Links to images
     * @var string[]
     */
    public $imageLinks;

    /**
     * Parent group
     * @var string
     */
    public $parentGroup;

    /**
     * Group's order in menu
     * @var integer
     */
    public $order;

    /**
     * On-the-menu attribute.
     * @var bool
     */
    public $isIncludedInMenu;

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
     * Is group modifier attribute
     * @var bool
     */
    public $isGroupModifier;
}