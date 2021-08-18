<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * SeasonsResponse.
 *
 * @method Season[] getData()
 */
class SeasonsResponse extends Response
{
	const JSON_PROPERTY_MAP = [
		'data' => 'Model\Season[]',
	];
}
