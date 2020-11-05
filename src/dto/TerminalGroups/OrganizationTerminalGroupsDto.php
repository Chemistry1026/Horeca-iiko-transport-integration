<?php


namespace IikoTransport\dto\TerminalGroups;


use IikoTransport\RestDto;

class OrganizationTerminalGroupsDto extends RestDto
{
    /**
     * Organization ID to which terminal groups belongs.
     * @var string
     */
    public $organizationId;

    /**
     * Array of terminal groups that belong to organization.
     * @var TerminalGroupDto[]
     */
    public $items;

    public function setItems() {
        $this->setArrayToPropertyFromJson('items', new TerminalGroupDto());
    }
}