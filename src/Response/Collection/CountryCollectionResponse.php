<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CountryCollectionResponse.
 *
 * @method Model\Country getCountry()
 */
class CountryCollectionResponse extends Response
{
	const JSON_PROPERTY_MAP = [
		'country' => 'Model\Country',
	];
}
