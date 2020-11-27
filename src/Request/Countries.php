<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\Response;

/**
 * Functions related to Countries
 */
class Countries extends RequestCollection
{
    /**
     * Get Countries
     *
     * @return \APIFutbolAPI\Response\CountriesResponse
     */
    public function getCountries()
    {
        $request = $this->apifutbol->request("countries");

        return new Response\CountriesResponse($request->getDecodedResponse());
    }

    /**
     * Get Competitions
     *
     * @param string $id
     *
     * @return \APIFutbolAPI\Response\CompetitionsResponse
     */
    public function getCompetitions(
        $id
    ) {
        $request = $this->apifutbol->request("countries/{$id}/competitions");

        return new Response\CompetitionsResponse($request->getDecodedResponse());
    }
}
