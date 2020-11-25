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
     * API Futbol Token
     *
     * @var string
     */
    protected $_token;

    /**
     * Toggle Dev / Production mode.
     *
     * @var bool
     */
    protected $_prod;

    /**
     * Constructor.
     *
     * @param APIFutbol $parent
     * @param string    $url
     * @param string    $token
     */
    public function __construct(
        \APIFutbolAPI\APIFutbol $parent,
        $url,
        $token,
        $prod
    ) {
        $this->_parent = $parent;
        $this->_url = $url;
        $this->_token = $token;
        $this->_prod = $prod;

        if ($this->_token == 'token') {
            throw new \RuntimeException('Replace "token" with your API Futbol Token.');
        }
    }

    /**
     * Return safely JSON-decoded HTTP response.
     *
     * @return mixed
     */
    public function getDecodedResponse()
    {
        return Client::apiDecode(
            $this->getRawResponse()
        );
    }

    /**
     * Return the raw HTTP response body.
     *
     * @return string
     */
    public function getRawResponse()
    {
        return (string) $this->getHttpResponse()->getBody();
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
        $endpoint = ($this->_prod ? Constants::API_URLS['prod'] : Constants::API_URLS['dev']) . $this->_url;

        return new HttpRequest('GET', $endpoint, $this->_defaultHeaders());
    }

    /**
     * Default headers for requests.
     *
     * @return array
     */
    protected function _defaultHeaders()
    {
        return [
            'Authorization' => 'Bearer ' . $this->_token
        ];
    }
}
