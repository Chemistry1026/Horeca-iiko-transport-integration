<?php


namespace IikoTransport\dto\Order\Data\AddOrderItems;


use IikoTransport\dto\Order\Create\Item\CreateOrderItemCompoundDto;
use IikoTransport\dto\Order\Create\Item\CreateOrderItemProductDto;
use IikoTransport\RestDto;

class AddOrderItemsInputDataDto extends RestDto
{
    /**
     * Organization ID
     * @var string
     */
    public $organizationId;

    /**
     * Order ID
     * @var string
     */
    public $orderId;

    /**
     * Order items (may include ProductOrderItem or CompoundOrderItem)
     * @var CreateOrderItemProductDto[]|CreateOrderItemCompoundDto[]
     */
    protected $items;

    public function __construct($organizationId, $orderId)
    {
        $this->organizationId = $organizationId;
        $this->orderId = $orderId;
    }

    /**
     * @param CreateOrderItemProductDto[]|CreateOrderItemCompoundDto[] $data
     */
    public function setProducts(array $data)
    {
        $this->items = $data;
    }

    /**
     * @param CreateOrderItemProductDto|CreateOrderItemCompoundDto ...$data
     */
    public function appendProducts(...$data)
    {
        foreach ($data as $item) {
            $this->appendProduct($item);
        }
    }

    /**
     * @param CreateOrderItemProductDto|CreateOrderItemCompoundDto $data
     */
    public function appendProduct($data)
    {
        if (!is_array($this->items)) $this->items = [];
        $this->items[] = $data;
    }
}