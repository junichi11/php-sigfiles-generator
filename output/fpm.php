<?php



namespace {

	/**
	 * Flushes all response data to the client
	 * <p>This function flushes all response data to the client and finishes the request. This allows for time consuming tasks to be performed without leaving the connection to the client open.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fastcgi-finish-request.php
	 * @since PHP 5 >= 5.3.3, PHP 7
	 */
	function fastcgi_finish_request(): bool {}

}
