<?php

namespace APIFutbolAPI;

use APIFutbolAPI\Constants;

use GuzzleHttp\Client as GuzzleClient;

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
   * @param string    $token
   */
  public function __construct(
    \APIFutbolAPI\APIFutbol $parent,
    $token
  ) {
    $this->_parent = $parent;

    $this->_guzzleClient = new GuzzleClient([
      'base_uri' => Constants::API_URL,
      'headers' => [
        'Authorization' => 'Bearer ' . $token
      ]
    ]);
  }

  /**
   * Wraps Guzzle Request.
   *
   * @param string  $endpoint
   * @param array   $query
   *
   * @return HttpResponseInterface
   */
  protected function _guzzleRequest(
    $endpoint,
    $query
  ) {
    try {
      $response = $this->_guzzleClient->request('GET', $endpoint, ['query' => $query]);
    } catch (\Exception $e) {
      echo 'Something went wrong: ' . $e->getMessage() . "\n";
      exit(0);
    }

    return $response;
  }

  /**
   * Perform an API call.
   *
   * @param string  $endpoint
   * @param array   $query
   *
   * @return HttpResponseInterface
   */
  public function api(
    $endpoint,
    $query
  ) {
    return $this->_guzzleRequest($endpoint, $query);
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
