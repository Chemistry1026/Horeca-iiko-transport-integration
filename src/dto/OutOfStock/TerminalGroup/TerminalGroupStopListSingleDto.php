<?php


namespace IikoTransport\dto\OutOfStock\TerminalGroup;


use IikoTransport\RestDto;

class TerminalGroupStopListSingleDto extends RestDto
{
    /**
     * Terminal ID
     * @var string
     */
    public $terminalGroupId;

    /**
     * Out-of-stock list
     * @var TerminalGroupStopListSingleProductDto[]
     */
    public $items;
}