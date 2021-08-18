<?php

namespace APIFutbolAPI\Response\Model;

use APIFutbolAPI\Response;

/**
 * Season.
 *
 * @method string getId()
 * @method string getCompetition()
 * @method string getName()
 * @method bool   getNew()
 */
class Season extends Response
{
  const JSON_PROPERTY_MAP = [
    'id' => 'string',
    'competition' => 'string',
    'name' => 'string',
    'new' => 'bool',
  ];
}
