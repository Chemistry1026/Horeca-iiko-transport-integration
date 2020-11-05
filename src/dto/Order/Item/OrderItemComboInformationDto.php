<?php


namespace IikoTransport\dto\Order\Item;


use IikoTransport\RestDto;

class OrderItemComboInformationDto extends RestDto
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
}