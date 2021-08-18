<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response\{CompetitionsResponse, CompetitionResponse};

/**
 * Functions related to Competitions
 */
class Competitions extends RequestCollection
{
  /**
   * Get Competitions
   * 
   * @param int $limit
   * @param int $offset
   * 
   * @return CompetitionsResponse
   */
  public function getCompetitions(
    int $limit = 10,
    int $offset = 0
  ) {
    $request = $this->apifutbol->request('/items/competitions', [
      'limit' => $limit,
      'offset' => $offset
    ]);

    return new CompetitionsResponse($request->getDecodedResponse());
  }

  /**
   * Get Competition
   * 
   * @param string $id
   *
   * @return CompetitionResponse
   */
  public function getCompetition(string $id)
  {
    $request = $this->apifutbol->request("/items/competitions/$id", $id);

    return new CompetitionResponse($request->getDecodedResponse());
  }
}
