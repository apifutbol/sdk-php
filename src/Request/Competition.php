<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response;

/**
 * Functions related to Competition
 */
class Competition extends RequestCollection
{
    /**
     * Get Competition
     *
     * @param string $id
     *
     * @return \APIFutbolAPI\Response\CompetitionResponse
     */
    public function getCompetition(
        $id
    ) {
        $request = $this->apifutbol->request("competition/{$id}");

        return new Response\CompetitionResponse($request->getDecodedResponse());
    }

    /**
     * Get Table
     *
     * @param string $id
     *
     * @return \APIFutbolAPI\Response\CompetitionTableResponse
     */
    public function getCompetitionTable(
        $id
    ) {
        $request = $this->apifutbol->request("competition/{$id}/table");

        return new Response\CompetitionTableResponse($request->getDecodedResponse());
    }
}
