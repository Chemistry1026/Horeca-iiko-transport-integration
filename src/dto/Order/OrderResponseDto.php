<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderResponseDto extends RestDto
{
    /**
     * Order ID
     * @var string
     */
    public $id;

    /**
     * Timestamp of most recent order change that took place on server
     * @var int
     */
    public $timestamp;

    /**
     * Enum: "Success" "InProgress" "Error" "TimeoutError" "TimeoutSuccess"
     * Order creation status. In case of asynchronous creation, it allows to track the instance an order was validated/created in iikoFront
     * @var string
     */
    public $creationStatus;

    /**
     * Order check creation error details.
     * @var OrderErrorDto
     */
    public $errorInfo;

    /**
     * Order creation details. Field is filled up if creationStatus=Success
     * @var OrderDto
     */
    protected $order;

    public function __construct()
    {
        $this->setPropertyToClassPropertyFromJson('errorInfo', new OrderErrorDto());
    }
}