<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CountriesResponse.
 *
 * @method CountryResponse[] getData()
 */
class CountriesResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'data' => 'Collection\CountryResponse',
  ];
}
