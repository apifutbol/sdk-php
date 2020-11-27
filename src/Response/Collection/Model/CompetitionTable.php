<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * CompetitionTable.
 *
 * @method string 	getId()
 * @method string 	getName()
 * @method int 		getRank()
 * @method int 		getWon()
 * @method int 		getDrawn()
 * @method int 		getLost()
 * @method int 		getScored()
 * @method int 		getConceded()
 * @method int 		getDifference()
 */
class CompetitionTable extends Response
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string',
        'rank' => 'int',
        'won' => 'int',
        'drawn' => 'int',
        'lost' => 'int',
        'scored' => 'int',
        'conceded' => 'int',
        'difference' => 'int'
    ];
}
