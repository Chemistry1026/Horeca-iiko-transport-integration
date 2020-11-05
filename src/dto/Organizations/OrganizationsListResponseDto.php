<?php


namespace IikoTransport\dto\Organizations;


use IikoTransport\RestDto;

class OrganizationsListResponseDto extends RestDto
{
    /**
     * List of organizations.
     * @var OrganizationSingleDto[]|array
     */
    public $organizations;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setArrayToPropertyFromJson('organizations', new OrganizationSingleDto());
    }
}