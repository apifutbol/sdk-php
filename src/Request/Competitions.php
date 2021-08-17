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
   * @return CompetitionsResponse
   */
  public function getCompetitions()
  {
    $request = $this->apifutbol->request([
      'query' => 'query {
        competitions {
          id
          name
          new
          league
        }
      }'
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
    $request = $this->apifutbol->request([
      'query' => 'query GetCompetition($id: ID!) {
        competition: competitions_by_id(id: $id) {
          id
          name
          new,
          league
        }
      }',
      'variables' => [
        'id' => $id
      ]
    ]);

    return new CompetitionResponse($request->getDecodedResponse());
  }
}
