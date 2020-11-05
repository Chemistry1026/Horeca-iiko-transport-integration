<?php


namespace IikoTransport\dto\Order\Payment;


use IikoTransport\RestDto;

class OrderPaymentAdditionalDataDto extends RestDto
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
}