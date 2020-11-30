<?php



namespace {

	/**
	 * Authenticate against a Cyrus IMAP server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $connection
	 * @param string $mechlist
	 * @param string $service
	 * @param string $user
	 * @param int $minssf
	 * @param int $maxssf
	 * @param string $authname
	 * @param string $password
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.cyrus-authenticate.php
	 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
	 */
	function cyrus_authenticate($connection, string $mechlist = NULL, string $service = NULL, string $user = NULL, int $minssf = NULL, int $maxssf = NULL, string $authname = NULL, string $password = NULL): void {}

	/**
	 * Bind callbacks to a Cyrus IMAP connection
	 * <p>Binds callbacks to a Cyrus IMAP connection.</p>
	 * @param resource $connection <p>The connection handle.</p>
	 * @param array $callbacks <p>An array of callbacks.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.cyrus-bind.php
	 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
	 */
	function cyrus_bind($connection, array $callbacks): bool {}

	/**
	 * Close connection to a Cyrus IMAP server
	 * <p>Closes the connection to a Cyrus IMAP server.</p>
	 * @param resource $connection <p>The connection handle.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.cyrus-close.php
	 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
	 */
	function cyrus_close($connection): bool {}

	/**
	 * Connect to a Cyrus IMAP server
	 * <p>Connects to a Cyrus IMAP server.</p>
	 * @param string $host <p>The Cyrus IMAP host name.</p>
	 * @param string $port <p>The port number.</p>
	 * @param int $flags
	 * @return resource <p>Returns a connection handler on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.cyrus-connect.php
	 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
	 */
	function cyrus_connect(string $host = NULL, string $port = NULL, int $flags = NULL) {}

	/**
	 * Send a query to a Cyrus IMAP server
	 * <p>Sends a query to a Cyrus IMAP server.</p>
	 * @param resource $connection <p>The connection handle.</p>
	 * @param string $query <p>The query string.</p>
	 * @return array <p>Returns an associative array with the following keys: <i>text</i>, <i>msgno</i>, and <i>keyword</i>.</p>
	 * @link http://php.net/manual/en/function.cyrus-query.php
	 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
	 */
	function cyrus_query($connection, string $query): array {}

	/**
	 * Unbind ...
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $connection <p>The connection handle.</p>
	 * @param string $trigger_name <p>The trigger name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.cyrus-unbind.php
	 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
	 */
	function cyrus_unbind($connection, string $trigger_name): bool {}

	define('CYRUS_CALLBACK_NOLITERAL', null);

	define('CYRUS_CALLBACK_NUMBERED', null);

	define('CYRUS_CONN_INITIALRESPONSE', null);

	define('CYRUS_CONN_NONSYNCLITERAL', null);

}
