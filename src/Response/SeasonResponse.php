<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * SeasonResponse.
 *
 * @method Season getData()
 */
class SeasonResponse extends Response
{
	const JSON_PROPERTY_MAP = [
		'data' => 'Model\Season',
	];
}
