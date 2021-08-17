<?php

namespace APIFutbolAPI\Response\Collection;

use APIFutbolAPI\Response;

/**
 * CompetitionsCollectionResponse.
 *
 * @method Model\Competition[] getCompetitions()
 */
class CompetitionsCollectionResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'competitions' => 'Model\Competition[]',
  ];
}
