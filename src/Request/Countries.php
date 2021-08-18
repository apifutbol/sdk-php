<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response\{CountriesResponse, CountryResponse};

/**
 * Functions related to Countries
 */
class Countries extends RequestCollection
{
  /**
   * Get Countries
   * 
   * @param int $limit
   * @param int $offset
   * 
   * @return CountriesResponse
   */
  public function getCountries(
    int $limit = 10,
    int $offset = 0
  ) {
    $request = $this->apifutbol->request('/items/countries', [
      'limit' => $limit,
      'offset' => $offset
    ]);

    return new CountriesResponse($request->getDecodedResponse());
  }

  /**
   * Get Country
   * 
   * @param string $id
   *
   * @return CountryResponse
   */
  public function getCountry(string $id)
  {
    $request = $this->apifutbol->request("/items/countries/$id", $id);

    return new CountryResponse($request->getDecodedResponse());
  }
}
