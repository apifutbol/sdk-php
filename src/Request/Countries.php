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
    $request = $this->apifutbol->request([
      'query' => 'query {
        countries {
          id
          name
          new
        }
      }'
    ]);

    return new Response\CountriesResponse($request->getDecodedResponse());
  }

  /**
   * Get Country
   * 
   * @param string $id
   *
   * @return \APIFutbolAPI\Response\CountryResponse
   */
  public function getCountry(string $id)
  {
    $request = $this->apifutbol->request([
      'query' => 'query GetCountry($id: ID!) {
        country: countries_by_id(id: $id) {
          id
          name
          new
        }
      }',
      'variables' => [
        'id' => $id
      ]
    ]);

    return new Response\CountryResponse($request->getDecodedResponse());
  }
}
