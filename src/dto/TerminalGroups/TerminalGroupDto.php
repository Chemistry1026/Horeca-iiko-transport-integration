<?php


namespace IikoTransport\dto\TerminalGroups;


use IikoTransport\RestDto;

class TerminalGroupDto extends RestDto
{
    /**
     * Delivery group ID
     * @var string
     */
    public $id;

    /**
     * Organization ID to which delivery group belongs
     * @var string
     */
    public $organizationId;

    /**
     * Terminal group name
     * @var string
     */
    public $name;
}