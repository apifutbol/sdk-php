<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionResponse.
 *
 * @method Model\Competition[] getCompetition()
 */
class CompetitionResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'competition' => 'Model\Competition[]'
    ];
}
