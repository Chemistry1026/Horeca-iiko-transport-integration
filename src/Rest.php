<?php

namespace IikoTransport;

use Exception;
use GuzzleHttp;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class Rest
{
    public $baseRoute = 'https://api-ru.iiko.services/api/1/';

    /**
     * @param $data
     * @param string $route
     * @param string $method
     * @param bool $isJson
     * @return ResponseInterface
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function makeRequest($data, $route = '', $method = 'GET', $isJson = false)
    {
        if ($isJson) {
            $args['json'] = $data;
        } else {
            $args['query'] = $data;
        }

        $client = new Client();
        return $client->request($method, $route, $args);
    }

    public function makeRawRequest($args, $route = '', $method = 'GET')
    {
        $client = new Client();
        return $client->request($method, $route, $args);
    }

    /**
     * @param $request
     * @return string
     */
    public function formattedResponse(ResponseInterface $request)
    {
        if ($request) {
            return $request->getBody();
        }
        new Exception('Response empty');
    }

    /**
     * @param $data
     * @return mixed
     */
    public function decodeJson($data)
    {
        return json_decode($data, true);
    }

//    public function
//
//    /**
//     * @param $route
//     * @param array $args
//     * @return string
//     */
//    public function buildQuery($route, $args = array())
//    {
//        return $route . '?' . http_build_query($args);
//    }
//
//    /**
//     * @param $method
//     * @param $route
//     * @return mixed
//     * @throws GuzzleHttp\Exception\GuzzleException
//     */
//    public function getJsonData($method, $route)
//    {
//        $data = $this->makeFormattedRequest($method, $route);
//
//        return $this->decodedJson($data);
//    }
//
//    /**
//     * @param string $method
//     * @param string $route
//     * @param array $data
//     * @param string $type
//     * @return mixed
//     * @throws GuzzleHttp\Exception\GuzzleException
//     */
//    public function sendJsonData($method, $route, $data, $type = 'json')
//    {
//        $args = [];
//
//        if ($type == 'json') {
//            $args['json'] = $data;
//        } else {
//            $args['query'] = $data;
//        }
//
//        $data = $this->makeFormattedRequest($method, $this->apiRoute($route), $args);
//        return $this->decodedJson($data);
//    }
//
//    /**
//     * @param string $method
//     * @param string $route
//     * @param array $args
//     * @return mixed
//     * @throws GuzzleHttp\Exception\GuzzleException
//     */
//    public function sendData($method, $route, $args)
//    {
//        $data = $this->makeFormattedRequest($method, $this->apiRoute($route), $args);
//        return $this->decodedJson($data);
//    }

    /**
     * @param string $route
     * @return string
     */
    public function apiRoute($route)
    {
        return $this->baseRoute . $route;
    }
}
