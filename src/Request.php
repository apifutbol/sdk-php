<?php

namespace APIFutbolAPI;

use GuzzleHttp\Psr7\Request as HttpRequest;

/**
 * API Futbol Client calls.
 */
class Request
{
    /**
     * The API Futbol Class Instance
     *
     * @var \APIFutbolAPI\APIFutbol
     */
    protected $_parent;

    /**
     * Endpoint URL for request
     *
     * @var string
     */
    protected $_url;

    /**
     * Constructor.
     *
     * @param APIFutbol $parent
     * @param string    $url
     */
    public function __construct(
        \APIFutbolAPI\APIFutbol $parent,
        $url
    ) {
        $this->_parent = $parent;
        $this->_url = $url;
    }

    /**
     * Return safely JSON-decoded HTTP response.
     *
     * @return mixed
     */
    public function getDecodedResponse(
        $assoc = true
    ) {
        return Client::apiDecode(
            $this->getRawResponse()
        );
    }

    /**
     * Return the raw HTTP response body.
     *
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     * @throws InstagramException
     *
     * @return string
     */
    public function getRawResponse()
    {
        $httpResponse = $this->getHttpResponse(); // Throws.
        $body = (string) $httpResponse->getBody();

        return $body;
    }

    /**
     * Perform the request and get its raw HTTP response.
     *
     * @return HttpResponseInterface
     */
    public function getHttpResponse()
    {
        try {
            $this->_httpResponse = $this->_parent->client->api(
                $this->_buildHttpRequest()
            );
        } catch (\Exception $e) {
            echo 'Something went wrong: ' . $e->getMessage() . "\n";
            exit(0);
        }

        return $this->_httpResponse;
    }

    /**
     * Build HTTP request object.
     *
     * @return HttpRequest
     */
    protected function _buildHttpRequest()
    {
        $endpoint = Constants::API_URLS['prod'] . $this->_url;

        return new HttpRequest('GET', $endpoint);
    }
}
