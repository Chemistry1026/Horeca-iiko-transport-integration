<?php


namespace IikoTransport\dto\Order\Create\Combo;


use IikoTransport\RestDto;

class CreateOrderComboDto extends RestDto
{
    /**
     * Combo ID
     * @var string
     */
    public $id;

    /**
     * Name of combo
     * @var string
     */
    public $name;

    /**
     * Quantity
     * @var integer
     */
    public $amount;

    /**
     * Price of one combo
     * @var double
     */
    public $price;

    /**
     * Combo validity ID
     * @var string
     */
    public $sourceId;

    /**
     * CreateOrderComboDto constructor.
     * @param string $id
     * @param string $name
     * @param int $amount
     * @param float $price
     * @param string $sourceId
     */
    public function __construct(string $id, string $name, int $amount, float $price, string $sourceId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->sourceId = $sourceId;
    }
}