<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * Competition.
 *
 * @method string getId()
 * @method string getName()
 * @method bool getNew()
 */
class Competition extends Response
{
	const JSON_PROPERTY_MAP = [
		'id' => 'string',
		'name' => 'string',
		'new' => 'bool',
		'league' => 'bool',
	];
}
