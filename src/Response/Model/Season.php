<?php

namespace APIFutbolAPI\Response\Model;

use APIFutbolAPI\Response;

/**
 * Season.
 *
 * @method string getId()
 * @method string getCompetition()
 * @method int    getPrecedence()
 * @method string getName()
 * @method bool   getNew()
 */
class Season extends Response
{
  const JSON_PROPERTY_MAP = [
    'id' => 'string',
    'competition' => 'string',
    'precedence' => 'int',
    'name' => 'string',
    'new' => 'bool',
  ];
}
