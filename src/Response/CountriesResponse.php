<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CountriesResponse.
 *
 * @method Country[] getData()
 */
class CountriesResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'data' => 'Model\Country[]',
  ];
}
