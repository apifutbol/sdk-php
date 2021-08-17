<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CountryResponse.
 *
 * @method CountryCollectionResponse[] getData()
 */
class CountryResponse extends Response
{
	const JSON_PROPERTY_MAP = [
		'data' => 'Collection\CountryCollectionResponse',
	];
}
