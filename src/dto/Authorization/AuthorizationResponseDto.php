<?php


namespace IikoTransport\dto\Authorization;


use IikoTransport\RestDto;

class AuthorizationResponseDto extends RestDto
{
    /**
     * Authentication token
     * @var string
     */
    public $token;

    public function __construct($data)
    {
        $this->insertDataToClass($data);
    }
}