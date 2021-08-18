<?php

namespace APIFutbolAPI;

use APIFutbolAPI\Request\{Countries, Competitions, Seasons};

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

  /** @var Countries Collection of Countries related functions. */
  public $countries;

  /** @var Competitions Collection of Competitions related functions. */
  public $competitions;

  /** @var Seasons Collection of Seasons related functions. */
  public $seasons;

  /**
   * Constructor.
   *
   * @param string  $token
   * @param bool    $prod
   */
  public function __construct(
    $token
  ) {
    if ($token == 'token') {
      throw new \RuntimeException('Replace "token" with your API Futbol Token.');
    }

    $this->client = new Client($this, $token);
    $this->countries = new Countries($this);
    $this->competitions = new Competitions($this);
    $this->seasons = new Seasons($this);
  }

  /**
   * Create an API request.
   *
   * @param string  $endpoint
   * @param array   $query
   *
   * @return \APIFutbolAPI\Request
   */
  public function request(
    $endpoint,
    $query = []
  ) {
    return new Request($this, $endpoint, $query);
  }
}
