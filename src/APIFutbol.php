<?php

namespace APIFutbolAPI;

/**
 * API Futbol API for PHP
 *
 * @author ragebrahimi: Founder (https://github.com/apifutbol)
 */
class APIFutbol
{
    /**
     * Developer Token
     *
     * @var string
     */
    public $token;

    /**
     * Toggle Dev / Production mode.
     *
     * @var bool
     */
    public $prod;

    /**
     * Raw API class.
     *
     * @var Client
     */
    public $client;

    /** @var Request\Countries Collection of Countries related functions. */
    public $countries;

    /**
     * Constructor.
     *
     * @param string  	$token
     * @param bool  	$prod
     */
    public function __construct(
        $token,
        $prod = false
    ) {
        $this->token = $token;
        $this->prod = $prod;

        $this->client = new Client($this);
        $this->countries = new Request\Countries($this);
    }

    /**
     * Create an API request.
     *
     * @return \APIFutbolAPI\Request
     */
    public function request(
        $url
    ) {
        return new Request($this, $url, $this->token, $this->prod);
    }
}
