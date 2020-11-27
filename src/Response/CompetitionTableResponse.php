<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CompetitionTableResponse.
 *
 * @method \CompetitionTableItemResponse[] getData()
 */
class CompetitionTableResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data' => 'Collection\CompetitionTableItemResponse'
    ];
}
