<?php


namespace IikoTransport\dto\Deleted;


use IikoTransport\RestDto;

class DeletedObjectMethodDto extends RestDto
{
    /**
     * ID
     * @var string
     */
    public $id;

    /**
     * Comment
     * @var string
     */
    public $comment;

    /**
     * Write-off type
     * @var DeletedObjectMethodRemovalTypeDto
     */
    public $removalType;

    public function __construct()
    {
        $this->setPropertyToClassPropertyFromJson('removalType', new DeletedObjectMethodRemovalTypeDto());
    }
}