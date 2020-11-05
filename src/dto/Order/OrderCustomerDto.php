<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderCustomerDto extends RestDto
{
    /**
     * Existing customer ID in RMS
     * @var string
     */
    public $id;

    /**
     * Name of customer
     * Required for new customers (i.e. if id == null). Not required if id specified.
     * @var string
     */
    public $name;

    /**
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Comment
     * @var string
     */
    public $comment;

    /**
     *  Enum: "NotSpecified" "Male" "Female"
     *  Gender
     * @var string
     */
    public $gender;

    /**
     * Is client in blacklist
     * @var bool
     */
    public $inBlacklist;

    /**
     * Reason why client was added to blacklist
     * @var string
     */
    public $blacklistReason;
}