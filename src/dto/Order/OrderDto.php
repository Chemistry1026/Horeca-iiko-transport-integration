<?php


namespace IikoTransport\dto\Order;


use IikoTransport\dto\Order\Item\OrderItemCompoundDto;
use IikoTransport\dto\Order\Item\OrderItemProductDto;
use IikoTransport\RestDto;

class OrderDto extends RestDto
{
    /**
     * Table IDs
     * @var string[]
     */
    public $tableIds;

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
     * Invoice printing time (guest bill time)
     * @var string
     */
    public $whenBillPrinted;

    /**
     * Order payment time
     * @var string
     */
    public $whenClosed;

    /**
     * Concept
     * @var OrderConceptionDto
     */
    public $conception;

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
     * Front group ID
     * @var string
     */
    public $terminalGroupId;

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

    public function __construct($data)
    {
        $this->insertDataToClass($data);

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

        $this->setArrayToPropertyFromJson('combos', new OrderComboDto());

        $this->setArrayToPropertyFromJson('payments', new OrderPaymentDto());

        $this->setArrayToPropertyFromJson('discounts', new OrderDiscountDto());

        $this->setPropertyToClassPropertyFromJson('orderType', new OrderTypeDto());

        $this->setPropertyToClassPropertyFromJson('customer', new OrderCustomerDto());
    }
}