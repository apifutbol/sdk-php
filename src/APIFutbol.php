<?php

namespace APIFutbolAPI;

/**
 * API Futbol API for PHP
 *
 * @author ragebrahimi: Founder (https://github.com/apifutbol)
 */
class APIFutbol
{
	/**
	 * Developer Token
	 *
	 * @var string
	 */
	public $token;

	/**
	 * Toggle Dev / Production mode.
	 *
	 * @var bool
	 */
	public $prod;

	/** @var Request\Server Collection of Server related functions. */
	public $server;

	/**
	 * Constructor.
	 *
	 * @param string  	$token
	 * @param bool  	$prod
	 */
	public function __construct(
		$token,
		$prod = false
	) {
		$this->token = $token;
		$this->prod = $prod;

		$this->server = new Request\Server($this);
	}
}
