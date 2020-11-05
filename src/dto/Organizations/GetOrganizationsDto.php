<?php


namespace IikoTransport\dto\Organizations;


use IikoTransport\RestDto;

class GetOrganizationsDto extends RestDto
{
    /**
     * Organizations IDs for which information is requested. By default - all organizations available to api-login user.
     * @var string|null
     */
    public $organizationIds = null;

    /**
     * A sign whether additional information about the organization should be returned (country, restaurantAddress, etc.), or only minimal information should be returned (id and name).
     * @var bool
     */
    public $returnAdditionalInfo = false;

    /**
     * Attribute that shows that response contains disabled organizations.
     * @var bool
     */
    public $includeDisabled = false;
}