<?php

namespace APIFutbolAPI\Request;

/**
 * Functions related to Server
 */
class Server extends RequestCollection
{
	/**
	 * Get Ping
	 */
	public function getPing()
	{
		return 'pong';
	}
}
