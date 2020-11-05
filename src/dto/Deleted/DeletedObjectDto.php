<?php


namespace IikoTransport\dto\Deleted;


use IikoTransport\RestDto;

class DeletedObjectDto extends RestDto
{
    /**
     * Deletion method
     * @var DeletedObjectMethodDto
     */
    public $deletionMethod;

    public function __construct()
    {
        $this->setPropertyToClassPropertyFromJson('deletionMethod', new DeletedObjectMethodDto());
    }
}