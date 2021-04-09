<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response;

/**
 * Functions related to Countries
 */
class Countries extends RequestCollection
{
  /**
   * Get Countries
   *
   * @return \APIFutbolAPI\Response\CountriesResponse
   */
  public function getCountries()
  {
    $body = [
      'query' => 'query {
        countries {
          id
        }
      }',
      'variables' => []
    ];
    $request = $this->apifutbol->request($body);

    return new Response\CountriesResponse($request->getDecodedResponse());
  }
}
