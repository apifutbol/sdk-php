<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CountryResponse.
 *
 * @method Model\Country[] getCountry()
 */
class CountryResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'country' => 'Model\Country[]'
    ];
}
