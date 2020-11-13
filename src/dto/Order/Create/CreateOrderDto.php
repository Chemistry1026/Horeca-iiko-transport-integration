<?php


namespace IikoTransport\dto\Order\Create;


use IikoTransport\dto\Order\Create\Combo\CreateOrderComboDto;
use IikoTransport\dto\Order\Create\DiscountInfo\OrderDiscountInfoDiscountDto;
use IikoTransport\dto\Order\Create\Item\CreateOrderItemCompoundDto;
use IikoTransport\dto\Order\Create\Item\CreateOrderItemProductDto;
use IikoTransport\dto\Order\Create\Payment\CreateOrderPaymentCardDto;
use IikoTransport\dto\Order\Create\Payment\CreateOrderPaymentCashDto;
use IikoTransport\dto\Order\Create\Payment\CreateOrderPaymentIikoCardDto;
use IikoTransport\dto\Order\OrderIikoCard5InfoDto;
use IikoTransport\RestDto;

class CreateOrderDto extends RestDto
{
    /**
     * Order ID. Must be unique
     * If sent null, it generates automatically on iikoTransport side
     * @var string|null
     */
    public $id = null;

    /**
     * Table IDs
     * @var string[]
     */
    public $tableIds;

    /**
     * Order items(may include ProductOrderItem or CompoundOrderItem)
     * @var CreateOrderItemProductDto[]|CreateOrderItemCompoundDto[]
     */
    protected $items;

    /**
     * Combos included in order
     * @var CreateOrderComboDto[]
     */
    protected $combos;

    /**
     * Order payment components (can be CashPayment and CardPayment)
     * @var CreateOrderPaymentCashDto|CreateOrderPaymentCardDto|CreateOrderPaymentIikoCardDto
     */
    protected $payments;

    /**
     * The string key (marker) of the source (partner - api user) that created the order
     * @var string
     */
    public $sourceKey;

    /**
     * Discounts/surcharges
     * @var OrderDiscountInfoDiscountDto
     */
    public $discountsInfo;

    /**
     * Information about iikoCard5
     * @var OrderIikoCard5InfoDto
     */
    public $iikoCard5Info;

    /**
     * Order type ID
     * @var mixed
     */
    public $orderTypeId;

    /**
     * Customer
     * @var CreateOrderCustomerDto
     */
    public $customer;

    /**
     * Telephone number
     * @var string
     */
    public $phone;

    /**
     * CreateOrderDto constructor.
     * @param CreateOrderItemProductDto[]|CreateOrderItemCompoundDto[] $products
     */
    public function __construct(array $products)
    {
        $this->setProducts($products);
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

    /**
     * Appends combo
     * @param CreateOrderComboDto[] $data
     */
    public function appendsCombo(array $data)
    {
        $this->combos = $data;
    }

    public function appendCombo(CreateOrderComboDto $data)
    {
        if (!is_array($this->combos)) $this->combos = [];
        $this->combos[] = $data;
    }

    /*
     * Set payment
     */
    protected function setPayment($data)
    {
        $this->payments = $data;
    }

    /**
     * @param CreateOrderPaymentCashDto $data
     */
    public function setCashPayment(CreateOrderPaymentCashDto $data)
    {
        $this->setPayment($data);
    }

    /**
     * @param CreateOrderPaymentCardDto $data
     */
    public function setCardPayment(CreateOrderPaymentCardDto $data)
    {
        $this->setPayment($data);
    }

    /**
     * @param CreateOrderPaymentIikoCardDto $data
     */
    public function setIikoCardPayment(CreateOrderPaymentIikoCardDto $data)
    {
        $this->setPayment($data);
    }
}