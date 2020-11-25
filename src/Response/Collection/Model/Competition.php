<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * Country.
 *
 * @method string getId()
 * @method string getName()
 */
class Competition extends Response
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string'
    ];
}
