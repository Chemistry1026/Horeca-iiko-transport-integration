<?php


namespace IikoTransport\dto\Cancel;


use IikoTransport\RestDto;

class CancelInfoDto extends RestDto
{
    /**
     * Date and time when the order has been cancelled.
     * @var string
     */
    public $whenCanceled;

    /**
     * Delivery cancellation reason
     * @var CancelInfoCauseDto
     */
    public $cause;

    /**
     * Delivery cancellation comment
     * @var string
     */
    public $comment;
}