<?php



namespace {

	/**
	 * Flushes all response data to the client
	 * <p>This function flushes all response data to the client and finishes the request. This allows for time consuming tasks to be performed without leaving the connection to the client open.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fastcgi-finish-request.php
	 * @since PHP 5 >= 5.3.3, PHP 7, PHP 8
	 */
	function fastcgi_finish_request(): bool {}

	/**
	 * Returns the current FPM pool status
	 * <p>This function returns the full current FPM pool status as an associative array. It always returns the full status, including per-process status information. See the FPM status page guide for further details.</p><p>Note that this function will only be defined if FPM is being used to serve the script.</p>
	 * @return array|false <p>Associative array containing the full FPM pool status, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fpm-get-status.php
	 * @since PHP 7 >= 7.3, PHP 8
	 */
	function fpm_get_status(): array|false {}

}
