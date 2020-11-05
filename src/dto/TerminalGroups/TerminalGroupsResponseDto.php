<?php


namespace IikoTransport\dto\TerminalGroups;


use IikoTransport\RestDto;

class TerminalGroupsResponseDto extends RestDto
{
    /**
     * List of terminal groups broken down by organizations.
     * @var OrganizationTerminalGroupsDto[]
     */
    public $terminalGroups;

    public function __construct($data)
    {
        $this->insertDataToClass($data);
        $this->setTerminalGroups();
    }

    public function setTerminalGroups() {
        $this->setArrayToPropertyFromJson('terminalGroups', new OrganizationTerminalGroupsDto(), function (OrganizationTerminalGroupsDto $dto) {
            $dto->setItems();
        });
    }
}