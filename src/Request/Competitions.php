<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response\{CompetitionsResponse};

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
        }
      }'
		]);

		return new CompetitionsResponse($request->getDecodedResponse());
	}
}
