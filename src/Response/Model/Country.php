<?php

namespace APIFutbolAPI\Response\Model;

use APIFutbolAPI\Response;

/**
 * Country.
 *
 * @method string   getId()
 * @method string[] getCompetitions()
 * @method int      getPrecedence()
 * @method string   getName()
 * @method bool     getNew()
 */
class Country extends Response
{
  const JSON_PROPERTY_MAP = [
    'id' => 'string',
    'competitions' => 'string[]',
    'precedence' => 'int',
    'name' => 'string',
    'new' => 'bool',
  ];
}
