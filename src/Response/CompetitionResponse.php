<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CompetitionResponse.
 *
 * @method Competition[] getData()
 */
class CompetitionResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'data' => 'Model\Competition',
  ];
}
