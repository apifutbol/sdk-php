<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CountryResponse.
 *
 * @method Model\Country[] getCountries()
 */
class CountryResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'countries' => 'Model\Country[]',
    ];
}
