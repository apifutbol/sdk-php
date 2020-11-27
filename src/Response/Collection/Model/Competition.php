<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * Competition.
 *
 * @method string 	getId()
 * @method string 	getName()
 * @method int 		getStart()
 * @method int 		getEnd()
 * @method bool 	getTable()
 * @method bool 	getSeasons()
 */
class Competition extends Response
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string',
        'start' => 'int',
        'end' => 'int',
        'table' => 'bool',
        'seasons' => 'bool'
    ];
}
