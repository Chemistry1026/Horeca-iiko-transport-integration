<?php


namespace IikoTransport\dto\Order\CloseOrder;


use IikoTransport\RestDto;

class CloseOrderResponseDto extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    public function __construct($data)
    {
        $this->insertDataToClass($data);
    }
}