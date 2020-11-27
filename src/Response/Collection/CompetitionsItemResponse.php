<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionsItemResponse.
 *
 * @method Model\Competitions[] getCompetitions()
 */
class CompetitionsItemResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'competitions' => 'Model\Competitions[]'
    ];
}
