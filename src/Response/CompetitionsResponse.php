<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CompetitionsResponse.
 *
 * @method CompetitionsResponse[] getData()
 */
class CompetitionsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Collection\CompetitionsResponse'
    ];
}
