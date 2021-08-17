<?php

namespace APIFutbolAPI\Response;

use APIFutbolAPI\Response;

/**
 * CompetitionsResponse.
 *
 * @method CompetitionsCollectionResponse[] getData()
 */
class CompetitionsResponse extends Response
{
  const JSON_PROPERTY_MAP = [
    'data' => 'Collection\CompetitionsCollectionResponse',
  ];
}
