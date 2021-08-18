<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CompetitionsResponse.
 *
 * @method Competition[] getData()
 */
class CompetitionsResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'data' => 'Model\Competition[]',
  ];
}
