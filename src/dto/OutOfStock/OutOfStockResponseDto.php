<?php


namespace IikoTransport\dto\OutOfStock;


use IikoTransport\dto\OutOfStock\TerminalGroup\TerminalGroupStopListDto;
use IikoTransport\dto\OutOfStock\TerminalGroup\TerminalGroupStopListSingleDto;
use IikoTransport\dto\OutOfStock\TerminalGroup\TerminalGroupStopListSingleProductDto;
use IikoTransport\RestDto;

class OutOfStockResponseDto extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    /**
     * Set of out-of-stock lists
     * @var TerminalGroupStopListDto[]
     */
    public $terminalGroupStopLists;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setArrayToPropertyFromJson('terminalGroupStopLists', new TerminalGroupStopListDto(), function (TerminalGroupStopListDto $terminalGroupStopListDto) {
            $terminalGroupStopListDto->setArrayToPropertyFromJson('items', new TerminalGroupStopListSingleDto(), function (TerminalGroupStopListSingleDto $terminalGroupStopListSingleDto) {
                $terminalGroupStopListSingleDto->setArrayToPropertyFromJson('items', new TerminalGroupStopListSingleProductDto());
            });
        });
    }
}