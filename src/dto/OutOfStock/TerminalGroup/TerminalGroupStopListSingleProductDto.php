<?php


namespace IikoTransport\dto\OutOfStock\TerminalGroup;


use IikoTransport\RestDto;

class TerminalGroupStopListSingleProductDto extends RestDto
{

    /**
     * Product balance
     * @var double
     */
    public $balance;

    /**
     * Out-of-stock list product ID
     * @var string
     */
    public $productId;
}