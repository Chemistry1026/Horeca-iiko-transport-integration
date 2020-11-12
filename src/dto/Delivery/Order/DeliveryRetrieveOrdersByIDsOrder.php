<?php


namespace IikoTransport\dto\Delivery\Order;


use IikoTransport\dto\Cancel\CancelInfoDto;
use IikoTransport\dto\Order\CourierInfo\CourierInfoDto;
use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointDto;
use IikoTransport\dto\Order\Item\OrderItemCompoundDto;
use IikoTransport\dto\Order\Item\OrderItemProductDto;
use IikoTransport\dto\Order\OrderComboDto;
use IikoTransport\dto\Order\OrderConceptionDto;
use IikoTransport\dto\Order\OrderCustomerDto;
use IikoTransport\dto\Order\OrderDiscountDto;
use IikoTransport\dto\Order\OrderGuestInfoDto;
use IikoTransport\dto\Order\OrderMarketingSourceDto;
use IikoTransport\dto\Order\OrderOperatorDto;
use IikoTransport\dto\Order\OrderPaymentDto;
use IikoTransport\dto\Order\OrderProblemFlagDto;
use IikoTransport\dto\Order\OrderProductSingleDto;
use IikoTransport\dto\Order\OrderTypeDto;
use IikoTransport\dto\Order\Payment\OrderPaymentTypeDto;
use IikoTransport\RestDto;

class DeliveryRetrieveOrdersByIDsOrder extends RestDto
{
    /**
     * ID of delivery serving as source for splitting by FCRs
     * @var string
     */
    public $parentDeliveryId;

    /**
     * Order guest
     * @var OrderCustomerDto
     */
    public $customer;

    /**
     * Delivery phone number
     * @var string
     */
    public $phone;

    /**
     * Delivery point details.
     * Not required if order type is customer pickup. Otherwise, required
     * @var OrderDeliveryPointDto
     */
    public $deliveryPoint;

    /**
     * Order amount (after discount or surcharge)
     * @var double
     */
    public $sum;

    /**
     * Delivery No
     * @var int
     */
    public $number;

    /**
     * Delivery source
     * @var string
     */
    public $sourceKey;

    /**
     * Enum: "Unconfirmed" "WaitCooking" "ReadyForCooking" "CookingStarted" "CookingCompleted" "Waiting" "OnWay" "Delivered" "Closed" "Cancelled"
     * Delivery status.
     * @var string
     */
    public $status;

    /**
     * Delivery cancellation details.
     * Required only if delivery is canceled, i.e. status=Canceled
     * @var CancelInfoDto
     */
    public $cancelInfo;

    /**
     * Driver information
     * @var CourierInfoDto
     */
    public $courierInfo;

    /**
     * Order fulfillment time
     * @var string
     */
    public $completeBefore;

    /**
     * Delivery creation time in iikoFront
     * @var string
     */
    public $whenCreated;

    /**
     * Delivery confirmation time
     * @var string
     */
    public $whenConfirmed;

    /**
     * Service printing time
     * @var string
     */
    public $whenPrinted;

    /**
     * Invoice printing time (guest bill time)
     * @var string
     */
    public $whenBillPrinted;

    /**
     * Delivery dispatch time
     * @var string
     */
    public $whenSended;

    /**
     * Actual delivery time
     * @var string
     */
    public $whenDelivered;

    /**
     * Delivery closing time
     * @var string
     */
    public $whenClosed;

    /**
     * Moment of time when CloudAPI received the request to create the order (UTC)
     * @var string
     */
    public $whenReceivedByApi;

    /**
     * Moment of time when the order first received and saved from iikoFront (UTC)
     * @var string
     */
    public $whenReceivedFromFront;

    /**
     * Order comment
     * @var string
     */
    public $comment;

    /**
     * Problem flag
     * @var OrderProblemFlagDto
     */
    public $problem;

    /**
     * Operator that took order
     * @var OrderOperatorDto
     */
    public $operator;

    /**
     * @var OrderConceptionDto
     */
    public $Conception;

    /**
     * Marketing source
     * @var OrderMarketingSourceDto
     */
    public $marketingSource;

    /**
     * Duration of delivery (in minutes)
     * @var int
     */
    public $deliveryDuration;

    /**
     * Information about order guests
     * @var OrderGuestInfoDto
     */
    public $guestsInfo;

    /**
     * Order items
     * @var OrderItemProductDto[]|OrderItemCompoundDto[]
     */
    public $items;

    /**
     * Combo
     * @var OrderComboDto[]
     */
    public $combos;

    /**
     * Payments
     * @var OrderPaymentDto[]
     */
    public $payments;

    /**
     * Discounts
     * @var OrderDiscountDto[]
     */
    public $discounts;

    /**
     * Order type
     * @var OrderTypeDto
     */
    public $orderType;

    /**
     * Ordinal number in route list.
     * Field is filled up at the time of delivery allocation by logistics in iikoFront. If logistics is not in use, the field is not filled up
     * @var int
     */
    public $indexInCourierRoute;

    /**
     * Front group ID
     * @var string
     */
    public $terminalGroupId;

    /**
     * Whether order is deleted
     * @var bool
     */
    public $isDeleted;
}