<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response;

/**
 * Functions related to Competitions
 */
class Competitions extends RequestCollection
{
    /**
     * Get Competition
     *
     * @param string $id
     *
     * @return \APIFutbolAPI\Response\CompetitionsResponse
     */
    public function getCompetition(
        $id
    ) {
        $request = $this->apifutbol->request("competitions/{$id}");

        return new Response\CompetitionsResponse($request->getDecodedResponse());
    }
}
