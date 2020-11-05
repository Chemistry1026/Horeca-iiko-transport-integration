<?php


namespace IikoTransport\dto\Authorization;


use IikoTransport\RestDto;

class AuthorizationDto extends RestDto
{
    /**
     * API login
     * @var string
     */
    public $apiLogin;

    public function __construct(string $apiLogin) {
        $this->apiLogin = $apiLogin;
    }
}