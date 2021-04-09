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
    $token
  ) {
    if ($token == 'token') {
      throw new \RuntimeException('Replace "token" with your API Futbol Token.');
    }

    $this->client = new Client($this, $token);
    $this->countries = new Request\Countries($this);
  }

  /**
   * Create an API request.
   *
   * @param array    $body
   *
   * @return \APIFutbolAPI\Request
   */
  public function request(
    $body
  ) {
    return new Request($this, $body);
  }
}
