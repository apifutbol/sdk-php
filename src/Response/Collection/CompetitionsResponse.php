<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionsResponse.
 *
 * @method Model\Competitions[] getCompetitions()
 */
class CompetitionsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'competitions' => 'Model\Competitions[]'
    ];
}
