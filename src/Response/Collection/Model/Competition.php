<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * Competition.
 *
 * @method string 	getId()
 * @method string 	getName()
 * @method int 		getRank()
 * @method int 		getPoints()
 * @method int 		getWon()
 * @method int 		getDrawn()
 * @method int 		getLost()
 * @method int 		getConceded()
 * @method int 		getDifference()
 */
class Competition extends Response
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string',
        'rank' => 'int',
        'points' => 'int',
        'won' => 'bool',
        'drawn' => 'bool',
        'lost' => 'bool',
        'scored' => 'bool',
        'conceded' => 'bool',
        'difference' => 'bool'
    ];
}
