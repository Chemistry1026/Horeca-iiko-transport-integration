<?php


namespace IikoTransport\dto\PaymentType;


use IikoTransport\RestDto;

class PaymentTypeInputDataDto extends RestDto
{
    /**
     * Organizations IDs which payment types have to be returned.
     * @var string[]
     */
    protected $organizationIds;

    /**
     * PaymentTypeInputDataDto constructor.
     * @param string[] $organizationIds
     */
    public function __construct(array $organizationIds)
    {
        $this->organizationIds = $organizationIds;
    }
}