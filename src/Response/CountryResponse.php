<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CountryResponse.
 *
 * @method Country getData()
 */
class CountryResponse extends Response
{
	const JSON_PROPERTY_MAP = [
		'data' => 'Model\Country',
	];
}
