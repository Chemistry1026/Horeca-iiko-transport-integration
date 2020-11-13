<?php


namespace IikoTransport\dto\Order\CreateDelivery;


use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointDto;
use IikoTransport\dto\Order\Item\OrderItemCompoundDto;
use IikoTransport\dto\Order\Item\OrderItemProductDto;
use IikoTransport\dto\Order\OrderComboDto;
use IikoTransport\dto\Order\OrderCustomerDto;
use IikoTransport\dto\Order\OrderIikoCard5InfoDto;
use IikoTransport\dto\Order\OrderPaymentDto;
use IikoTransport\RestDto;

class CreateRawDeliveryOrderDto extends RestDto
{
    /**
     * Order ID. Must be unique
     * @var string|null
     */
    public $id;

    /**
     * Order fulfillment date
     * @var string|null
     */
    public $completeBefore;

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
     * Telephone number
     * @var string
     */
    public $phone;

    /**
     * Order type ID.
     * One of the fields required: "orderTypeId" or "orderServiceType".
     * @var string
     */
    public $orderTypeId;

    /**
     *  Enum: "DeliveryByCourier" "DeliveryByClient"
     *  Order service type.
     * @var string
     */
    public $orderServiceType;

    /**
     * Delivery point details.
     * Not required if order type is customer pickup. Otherwise, required.
     * @var OrderDeliveryPointDto
     */
    public $deliveryPoint;

    /**
     * Order guest
     * @var OrderCustomerDto
     */
    public $customer;

    /**
     * Information about iikoCard5
     * @var OrderIikoCard5InfoDto
     */
    public $iikoCard5Info;

    /**
     * Order source
     * @var string
     */
    public $sourceKey;

    /**
     * CreateRawDeliveryOrderDto constructor.
     * @param OrderItemProductDto[]|OrderItemCompoundDto[] $items
     * @param string $phone
     * @param OrderCustomerDto $customer
     */
    public function __construct(array $items, string $phone, OrderCustomerDto $customer)
    {
        $this->items = $items;
        $this->phone = $phone;
        $this->customer = $customer;
    }
}