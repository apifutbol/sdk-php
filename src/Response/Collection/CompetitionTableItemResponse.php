<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionTableItemResponse.
 *
 * @method string						getCompetition()
 * @method Model\CompetitionTable[] 	getTable()
 */
class CompetitionTableItemResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'competition' => 'string',
        'table' => 'Model\CompetitionTable[]'
    ];
}
