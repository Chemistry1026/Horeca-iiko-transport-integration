<?php


namespace IikoTransport\dto\Organizations;


use IikoTransport\RestDto;

class OrganizationSingleDto extends RestDto
{
    /**
     * Organization ID (uuid)
     * @var string
     */
    public $id;

    /**
     * Organization name
     * @var string
     */
    public $name;
}