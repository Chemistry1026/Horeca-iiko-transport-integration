<?php


namespace IikoTransport\dto\Order\Data\UpdateOrderPayment;


use IikoTransport\RestDto;

class UpdateOrderPaymentResponseDto extends RestDto
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