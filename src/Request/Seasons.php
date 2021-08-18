<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response\{SeasonsResponse, SeasonResponse};

/**
 * Functions related to Seasons
 */
class Seasons extends RequestCollection
{
  /**
   * Get Seasons
   * 
   * @param int $limit
   * @param int $offset
   * 
   * @return SeasonsResponse
   */
  public function getSeasons(
    int $limit = 10,
    int $offset = 0
  ) {
    $request = $this->apifutbol->request('/items/seasons', [
      'limit' => $limit,
      'offset' => $offset
    ]);

    return new SeasonsResponse($request->getDecodedResponse());
  }

  /**
   * Get Season
   * 
   * @param string $id
   *
   * @return SeasonResponse
   */
  public function getSeason(string $id)
  {
    $request = $this->apifutbol->request("/items/seasons/$id", $id);

    return new SeasonResponse($request->getDecodedResponse());
  }
}
