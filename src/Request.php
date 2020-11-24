<?php

namespace APIFutbolAPI;

use GuzzleHttp\Client as GuzzleClient;

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
        \APIFutbolAPI\APIFutbol $parent,
        $url
    ) {
        $this->_parent = $parent;

        $this->_guzzleClient = new GuzzleClient();
    }
}
