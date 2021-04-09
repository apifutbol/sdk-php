<?php

namespace APIFutbolAPI\Response\Collection\Model;

use APIFutbolAPI\Response;

/**
 * Country.
 *
 * @method string getId()
 * @method string getName()
 * @method int getCompetitions()
 */
class Country extends Response
{
  const JSON_PROPERTY_MAP = [
    'id' => 'string',
  ];
}
