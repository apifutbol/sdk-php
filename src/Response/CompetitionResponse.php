<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CompetitionResponse.
 *
 * @method CompetitionResponse[] getData()
 */
class CompetitionResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Collection\CompetitionResponse'
    ];
}
