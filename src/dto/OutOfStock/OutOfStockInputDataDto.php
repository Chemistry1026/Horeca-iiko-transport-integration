<?php


namespace IikoTransport\dto\OutOfStock;


use IikoTransport\RestDto;

class OutOfStockInputDataDto extends RestDto
{
    /**
     * Organizations for which out-of-stock lists will be requested
     * @var string[]
     */
    public $organizationIds;
}