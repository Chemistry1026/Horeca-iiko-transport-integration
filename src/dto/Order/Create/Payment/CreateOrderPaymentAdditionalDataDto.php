<?php


namespace IikoTransport\dto\Order\Create\Payment;


use IikoTransport\RestDto;

class CreateOrderPaymentAdditionalDataDto extends RestDto
{
    /**
     * Guest credential, authorizing payment.
     * Phone, card or card track number
     * @var string
     */
    public $credential;

    /**
     *  Enum: "Phone" "CardNumber" "CardTrack"
     *  Guest credential search scope.
     * @var string
     */
    public $searchScope;

    public function __construct(string $credential, string $searchScope)
    {
        $this->credential = $credential;
        $this->searchScope = $searchScope;
    }
}