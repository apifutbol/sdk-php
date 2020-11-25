<?php

namespace APIFutbolAPI;

use GuzzleHttp\Client as GuzzleClient;

use Psr\Http\Message\RequestInterface as HttpRequestInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Handles Core API Calls
 */
class Client
{
    /**
     * The API Futbol Class Instance
     *
     * @var \APIFutbolAPI\APIFutbol
     */
    protected $_parent;

    /**
     * @var \GuzzleHttp\Client
     */
    private $_guzzleClient;

    /**
     * Constructor.
     *
     * @param APIFutbol $parent
     * @param string    $url
     */
    public function __construct(
        \APIFutbolAPI\APIFutbol $parent
    ) {
        $this->_parent = $parent;

        $this->_guzzleClient = new GuzzleClient();
    }

    /**
     * Wraps Guzzle Request.
     *
     * @return HttpResponseInterface
     */
    protected function _guzzleRequest(
        HttpRequestInterface $request
    ) {
        try {
            $response = $this->_guzzleClient->send($request);
        } catch (\Exception $e) {
            echo 'Something went wrong: ' . $e->getMessage() . "\n";
            exit(0);
        }

        return $response;
    }

    /**
     * Wrapper around _guzzleRequest().
     *
     * @return HttpResponseInterface
     */
    protected function _apiRequest(
        HttpRequestInterface $request
    ) {
        return $this->_guzzleRequest($request);
    }

    /**
     * Perform an API call.
     *
     * @return HttpResponseInterface
     */
    public function api(
        HttpRequestInterface $request
    ) {
        return $this->_apiRequest($request);
    }

    /**
     * Decode a JSON reply.
     *
     * @param string $json
     *
     * @return object|array|null
     */
    public static function apiDecode(
        $json
    ) {
        return @json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
    }
}
