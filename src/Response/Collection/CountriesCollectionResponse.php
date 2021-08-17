<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CountriesCollectionResponse.
 *
 * @method Model\Country[] getCountries()
 */
class CountriesCollectionResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'countries' => 'Model\Country[]',
  ];
}
