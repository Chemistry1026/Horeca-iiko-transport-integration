<?php


namespace IikoTransport\dto\Cancel;


use IikoTransport\RestDto;

class CancelInfoCauseDto extends RestDto
{
    /**
     * ID
     * @var string
     */
    public $id;

    /**
     * Description
     * @var string
     */
    public $name;
}