<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * Competitions.
 *
 * @method string getId()
 * @method string getName()
 */
class Competitions extends Response
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string'
    ];
}
