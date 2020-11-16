<?php


namespace IikoTransport\dto\OutOfStock\TerminalGroup;


use IikoTransport\RestDto;

class TerminalGroupStopListDto extends RestDto
{
    /**
     * Organization ID to which out-of-stock lists belongs
     * @var string
     */
    public $organizationId;

    /**
     * Array of items that belong to organization
     * @var TerminalGroupStopListSingleDto[]
     */
    public $items;
}