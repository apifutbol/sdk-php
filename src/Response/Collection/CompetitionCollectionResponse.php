<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionCollectionResponse.
 *
 * @method Model\Competition getCompetition()
 */
class CompetitionCollectionResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'competition' => 'Model\Competition',
  ];
}
