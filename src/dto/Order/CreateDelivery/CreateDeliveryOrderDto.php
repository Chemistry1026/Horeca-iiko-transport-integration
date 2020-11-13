<?php


namespace IikoTransport\dto\Order\CreateDelivery;


use IikoTransport\dto\Cancel\CancelInfoCauseDto;
use IikoTransport\dto\Cancel\CancelInfoDto;
use IikoTransport\dto\Order\CourierInfo\CourierInfoDto;
use IikoTransport\dto\Order\CourierInfo\CourierInfoSingleDto;
use IikoTransport\dto\Order\DeliveryPoint\Address\OrderDeliveryPointAddressStreetCityDto;
use IikoTransport\dto\Order\DeliveryPoint\Address\OrderDeliveryPointAddressStreetDto;
use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointAddressDto;
use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointCoordinateDto;
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
use IikoTransport\dto\Order\OrderTypeDto;
use IikoTransport\RestDto;

class CreateDeliveryOrderDto extends RestDto
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
     * Telephone number
     * @var string
     */
    public $phone;

    /**
     * Delivery point details.
     * Not required if order type is customer pickup. Otherwise, required.
     * @var OrderDeliveryPointDto
     */
    public $deliveryPoint;

    /**
     * Order amount (after discount or surcharge)
     * @var double
     */
    public $sum;

    /**
     * Order No
     * @var integer
     */
    public $number;

    /**
     * Order source
     * @var string
     */
    public $sourceKey;

    /**
     *  Enum: "Unconfirmed" "WaitCooking" "ReadyForCooking" "CookingStarted" "CookingCompleted" "Waiting" "OnWay" "Delivered" "Closed" "Cancelled"
     *  Delivery status
     * @var string
     */
    public $status;

    /**
     * Delivery cancellation details.
     * Required only if delivery is canceled, i.e. status=Canceled.
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
     * Order payment time
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
     * Concept
     * @var OrderConceptionDto
     */
    public $conception;

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
     * Order items(may include ProductOrderItem or CompoundOrderItem)
     * @var OrderItemProductDto[]|OrderItemCompoundDto[]
     */
    public $items;

    /**
     * Combos included in order
     * @var OrderComboDto[]
     */
    public $combos;

    /**
     * Order payment components (can be CashPayment and CardPayment)
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
     * Field is filled up at the time of delivery allocation by logistics in iikoFront. If logistics is not in use, the field is not filled up.
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

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setPropertyToClassPropertyFromJson('customer', new OrderCustomerDto());

        $this->setPropertyToClassPropertyFromJson('deliveryPoint', new OrderDeliveryPointDto());
        if ($deliveryPointDto = $this->deliveryPoint) {
            $deliveryPointDto->setPropertyToClassPropertyFromJson('coordinates', new OrderDeliveryPointCoordinateDto());

            $deliveryPointDto->setPropertyToClassPropertyFromJson('address', new OrderDeliveryPointAddressDto());
            if ($addressDto = $deliveryPointDto->address) {
                $addressDto->setPropertyToClassPropertyFromJson('street', new OrderDeliveryPointAddressStreetDto());
                if ($streetDto = $addressDto->street) {
                    $streetDto->setPropertyToClassPropertyFromJson('city', new OrderDeliveryPointAddressStreetCityDto());
                }

                $addressDto->setPropertyToClassPropertyFromJson('region', new OrderDeliveryPointAddressStreetCityDto());
            }
        }

        $this->setPropertyToClassPropertyFromJson('cancelInfo', new CancelInfoDto());
        if ($cancelInfoDto = $this->cancelInfo) {
            $cancelInfoDto->setPropertyToClassPropertyFromJson('cause', new CancelInfoCauseDto());
        }

        $this->setPropertyToClassPropertyFromJson('courierInfo', new CourierInfoDto());
        if ($courierInfoDto = $this->courierInfo) {
            $courierInfoDto->setPropertyToClassPropertyFromJson('courier', new CourierInfoSingleDto());
        }

        $this->setPropertyToClassPropertyFromJson('problem', new OrderProblemFlagDto());

        $this->setPropertyToClassPropertyFromJson('operator', new OrderOperatorDto());

        foreach ($this->items as &$item) {
            switch ($item['type']) {
                case "Product":
                    $item = $this->setPropertyToClassPropertyFromJson($item, new OrderItemProductDto());
                    break;

                case "Compound":
                    $item = $this->setPropertyToClassPropertyFromJson($item, new OrderItemCompoundDto());
                    break;
            }
        }

        $this->setPropertyToClassPropertyFromJson('conception', new OrderConceptionDto());

        $this->setPropertyToClassPropertyFromJson('guestsInfo', new OrderGuestInfoDto());

        $this->setPropertyToClassPropertyFromJson('marketingSource', new OrderMarketingSourceDto());

        $this->setArrayToPropertyFromJson('combos', new OrderComboDto());

        $this->setArrayToPropertyFromJson('payments', new OrderPaymentDto());

        $this->setArrayToPropertyFromJson('discounts', new OrderDiscountDto());

        $this->setPropertyToClassPropertyFromJson('orderType', new OrderTypeDto());
    }
}