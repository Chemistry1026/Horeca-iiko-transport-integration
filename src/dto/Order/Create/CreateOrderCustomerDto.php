<?php


namespace IikoTransport\dto\Order\Create;


use IikoTransport\RestDto;

class CreateOrderCustomerDto extends RestDto
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
     * Date of birth
     * @var string
     */
    public $birthdate;

    /**
     * Email
     * @var string
     */
    public $email;

    /**
     * Whether user is included in promotional mailing list.
     * @var bool
     */
    public $shouldReceivePromoActionsInfo;

    /**
     *  Enum: "NotSpecified" "Male" "Female"
     *  Gender
     * @var string
     */
    public $gender;
}