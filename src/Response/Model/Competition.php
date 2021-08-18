<?php

namespace APIFutbolAPI\Response\Model;

use APIFutbolAPI\Response;

/**
 * Competition.
 *
 * @method string   getId()
 * @method string[] getSeasons()
 * @method string   getCountry()
 * @method string   getName()
 * @method bool     getNew()
 * @method bool     getLeague()
 */
class Competition extends Response
{
  const JSON_PROPERTY_MAP = [
    'id' => 'string',
    'seasons' => 'string[]',
    'country' => 'string',
    'name' => 'string',
    'new' => 'bool',
    'league' => 'bool',
  ];
}
