<?php


namespace IikoTransport\dto\Order\CreateDelivery\Item;


use IikoTransport\RestDto;

class CreateOrderItemComboInformationDto extends RestDto
{
    /**
     * Created combo ID
     * @var string
     */
    public $comboId;

    /**
     * Action ID that defines combo
     * @var string
     */
    public $comboSourceId;

    /**
     * Combo group ID to which item belongs
     * @var string
     */
    public $comboGroupId;

    /**
     * CreateOrderItemComboInformationDto constructor.
     * @param string $comboId
     * @param string $comboSourceId
     * @param string $comboGroupId
     */
    public function __construct(string $comboId, string $comboSourceId, string $comboGroupId)
    {
        $this->comboId = $comboId;
        $this->comboSourceId = $comboSourceId;
        $this->comboGroupId = $comboGroupId;
    }
}