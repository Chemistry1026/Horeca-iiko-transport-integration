<?php declare(strict_types=1);


namespace IikoTransport\Tests;


use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;
use IikoTransport\RestMethods;

class RestMethodsTest extends TestCase
{
    /**
     * @var string
     */
    private $login = '';

    /**
     * @throws GuzzleException
     */
    public function testCanLogin()
    {
        $restMethods = new RestMethods($this->login);
        $response = $restMethods->auth();

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @throws GuzzleException
     */
    public function testShouldReturnOrganizations()
    {
        $restMethods = new RestMethods($this->login);
        $response = $restMethods->getOrganizations();

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @throws GuzzleException
     */
    public function testShouldReturnTerminalGroups()
    {
        $restMethods = new RestMethods($this->login);
        $response = $restMethods->getTerminalGroups();

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @throws GuzzleException
     */
    public function testShouldReturnNomenclature()
    {
        $restMethods = new RestMethods($this->login);
        $response = $restMethods->getNomenclature();

        $this->assertEquals(200, $response->getStatusCode());
    }
}