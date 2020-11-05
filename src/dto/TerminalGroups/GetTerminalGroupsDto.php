<?php


namespace IikoTransport\dto\TerminalGroups;


use IikoTransport\RestDto;

class GetTerminalGroupsDto extends RestDto
{
    /**
     * Organizations IDs for which information is requested.
     * @var string[]
     */
    public $organizationIds;

    /**
     * Attribute that shows that response contains disabled terminal groups.
     * @var bool
     */
    public $includeDisabled = false;

    /**
     * GetTerminalGroupsDto constructor.
     * @param string[] $organizationIds
     */
    public function __construct(array $organizationIds)
    {
        $this->organizationIds = $organizationIds;
    }
}