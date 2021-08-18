<?php

namespace APIFutbolAPI;

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
   * Endpoint
   *
   * @var string
   */
  protected $_endpoint;

  /**
   * Query Params
   *
   * @var array
   */
  protected $_query;

  /**
   * Constructor.
   *
   * @param APIFutbol $parent
   * @param string    $endpoint
   * @param array     $query
   */
  public function __construct(
    \APIFutbolAPI\APIFutbol $parent,
    $endpoint,
    $query
  ) {
    $this->_parent = $parent;
    $this->_endpoint = $endpoint;
    $this->_query = $query;
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
        $this->_endpoint,
        $this->_query
      );
    } catch (\Exception $e) {
      echo 'Something went wrong: ' . $e->getMessage() . "\n";
      exit(0);
    }

    return $this->_httpResponse;
  }
}
