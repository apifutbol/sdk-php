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
}
