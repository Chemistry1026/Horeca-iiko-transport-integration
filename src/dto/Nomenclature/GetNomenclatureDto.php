<?php


namespace IikoTransport\dto\Nomenclature;


use IikoTransport\RestDto;

class GetNomenclatureDto extends RestDto
{
    /**
     * Organization ID
     * @var string
     */
    public $organizationId;

    /**
     * Initial revision. Items list will be received only in case there is a newer revision in the database
     * @var integer
     */
    public $startRevision;

    /**
     * GetNomenclatureDto constructor.
     * @param string $organizationId
     */
    public function __construct(string $organizationId)
    {
        $this->organizationId = $organizationId;
    }
}