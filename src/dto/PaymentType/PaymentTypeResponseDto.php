<?php


namespace IikoTransport\dto\PaymentType;


use IikoTransport\dto\TerminalGroups\TerminalGroupDto;
use IikoTransport\RestDto;

class PaymentTypeResponseDto extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    /**
     * List of payment types and terminal groups where they are available
     * @var PaymentTypeItemDto[]
     */
    public $paymentTypes;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setArrayToPropertyFromJson('paymentTypes', new PaymentTypeItemDto(), function (PaymentTypeItemDto $dto) {
            $dto->setArrayToPropertyFromJson('terminalGroups', new TerminalGroupDto());
        });
    }
}