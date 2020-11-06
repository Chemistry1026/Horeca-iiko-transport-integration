<?php


namespace IikoTransport\dto\PaymentType;


use IikoTransport\dto\TerminalGroups\TerminalGroupDto;
use IikoTransport\RestDto;

class PaymentTypeItemDto extends RestDto
{
    /**
     * Payment type ID
     * @var string
     */
    public $id;

    /**
     * Payment type code
     * @var string
     */
    public $code;

    /**
     * Payment type name
     * @var string
     */
    public $name;

    /**
     * Payment type comment
     * @var string
     */
    public $comment;

    /**
     * Combinability attribute
     * @var bool
     */
    public $combinable;

    /**
     * External system revision number.
     * @var int
     */
    public $externalRevision;

    /**
     * Array of marketing campaigns associated with iikoCard5 payment type applicable to this organization
     * @var string[]
     */
    public $applicableMarketingCampaigns;

    /**
     * IsDeleted attribute of payment type
     * @var bool
     */
    public $isDeleted;

    /**
     * If true, payment type is fiscal and bill will be printed
     * @var bool
     */
    public $printCheque;

    /**
     *  Enum: "Unknown" "Cash" "Card" "Creadit" "Writeoff" "Voucher" "External"

        Payment type category.
        Can be:

        Unknown - unknown type
        Cash - cash
        Card - bank cards
        Creadit - credit
        Writeoff - write-off
        Voucher - coupon
        External - external payment type
     * 
     * @var string
     */
    public $paymentTypeKind;

    /**
     *  Enum: "External" "Internal" "Both"

        Describes operation processing type.
        Can be:

        External - only external
        Internal - on restaurant's side only
        Both - both external and on restauran't side
     * @var string
     */
    public $paymentProcessingType;

    /**
     * Terminal groups where this payment type is available
     * @var TerminalGroupDto[]
     */
    public $terminalGroups;
}