<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionItemResponse.
 *
 * @method Model\Competition[] getCompetition()
 */
class CompetitionItemResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'competition' => 'Model\Competition'
    ];
}
