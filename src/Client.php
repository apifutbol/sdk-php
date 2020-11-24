<?php

namespace APIFutbolAPI;

/**
 * Handles Core API Calls
 */
class Client
{
	/**
	 * The API Futbol Class Instance
	 *
	 * @var \APIFutbolAPI\APIFutbol
	 */
	protected $_parent;

	/**
	 * Constructor.
	 *
	 * @param APIFutbol $parent
	 * @param string    $url
	 */
	public function __construct(
		\APIFutbolAPI\APIFutbol $parent
	) {
		$this->_parent = $parent;
	}
}
