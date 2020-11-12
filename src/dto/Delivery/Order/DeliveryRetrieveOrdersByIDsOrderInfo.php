<?php


namespace IikoTransport\dto\Delivery\Order;


use IikoTransport\dto\Order\OrderErrorDto;
use IikoTransport\RestDto;

class DeliveryRetrieveOrdersByIDsOrderInfo extends RestDto
{
    /**
     * Delivery order ID
     * @var string
     */
    public $id;

    /**
     * Organization ID
     * @var string
     */
    public $organizationId;

    /**
     * Timestamp of most recent order change that took place on server
     * @var int
     */
    public $timestamp;

    /**
     *  Enum: "Success" "InProgress" "Error" "TimeoutError" "TimeoutSuccess"
     *  Order creation status. In case of asynchronous creation, it allows to track the instance an order was validated/created in iikoFront
     * @var string
     */
    public $creationStatus;

    /**
     * Order check creation error details
     * @var OrderErrorDto
     */
    public $errorInfo;

    /**
     * Order creation details. Field is filled up if creationStatus=Success
     * @var DeliveryRetrieveOrdersByIDsOrder
     */
    public $order;
}