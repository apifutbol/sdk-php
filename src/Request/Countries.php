<?php

namespace APIFutbolAPI\Request;

/**
 * Functions related to Countries
 */
class Countries extends RequestCollection
{
	/**
	 * Get Countries
	 */
	public function getCountries()
	{
		return $this->apifutbol->request("countries")->getRawResponse();
	}
}
