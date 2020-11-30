<?php



namespace {

	/**
	 * Check to see if a transaction has completed
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-checkstatus.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_checkstatus($conn, int $identifier): int {}

	/**
	 * Number of complete authorizations in queue, returning an array of their identifiers
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $array <p>Its description</p>
	 * @return int <p>What the function returns, first on success, then on failure. See also the &amp;return.success; entity</p>
	 * @link http://php.net/manual/en/function.m-completeauthorizations.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_completeauthorizations($conn, int &$array): int {}

	/**
	 * Establish the connection to MCVE
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.m-connect.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_connect($conn): int {}

	/**
	 * Get a textual representation of why a connection failed
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.m-connectionerror.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_connectionerror($conn): string {}

	/**
	 * Delete specified transaction from MCVE_CONN structure
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return bool
	 * @link http://php.net/manual/en/function.m-deletetrans.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_deletetrans($conn, int $identifier): bool {}

	/**
	 * Destroy the connection and MCVE_CONN structure
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.m-destroyconn.php
	 * @see m_initconn()
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_destroyconn($conn): bool {}

	/**
	 * Free memory associated with IP/SSL connectivity
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.m-destroyengine.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_destroyengine(): void {}

	/**
	 * Get a specific cell from a comma delimited response by column name
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @param string $column
	 * @param int $row
	 * @return string
	 * @link http://php.net/manual/en/function.m-getcell.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getcell($conn, int $identifier, string $column, int $row): string {}

	/**
	 * Get a specific cell from a comma delimited response by column number
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @param int $column
	 * @param int $row
	 * @return string
	 * @link http://php.net/manual/en/function.m-getcellbynum.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getcellbynum($conn, int $identifier, int $column, int $row): string {}

	/**
	 * Get the RAW comma delimited data returned from MCVE
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return string
	 * @link http://php.net/manual/en/function.m-getcommadelimited.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getcommadelimited($conn, int $identifier): string {}

	/**
	 * Get the name of the column in a comma-delimited response
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @param int $column_num
	 * @return string
	 * @link http://php.net/manual/en/function.m-getheader.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getheader($conn, int $identifier, int $column_num): string {}

	/**
	 * Create and initialize an MCVE_CONN structure
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return resource <p>Returns an MCVE_CONN resource.</p>
	 * @link http://php.net/manual/en/function.m-initconn.php
	 * @see m_destroyconn()
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_initconn() {}

	/**
	 * Ready the client for IP/SSL Communication
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $location
	 * @return int
	 * @link http://php.net/manual/en/function.m-initengine.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_initengine(string $location): int {}

	/**
	 * Checks to see if response is comma delimited
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-iscommadelimited.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_iscommadelimited($conn, int $identifier): int {}

	/**
	 * The maximum amount of time the API will attempt a connection to MCVE
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $secs
	 * @return bool
	 * @link http://php.net/manual/en/function.m-maxconntimeout.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_maxconntimeout($conn, int $secs): bool {}

	/**
	 * Perform communication with MCVE (send/receive data) Non-blocking
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.m-monitor.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_monitor($conn): int {}

	/**
	 * Number of columns returned in a comma delimited response
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-numcolumns.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_numcolumns($conn, int $identifier): int {}

	/**
	 * Number of rows returned in a comma delimited response
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-numrows.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_numrows($conn, int $identifier): int {}

	/**
	 * Parse the comma delimited response so m_getcell, etc will work
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-parsecommadelimited.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_parsecommadelimited($conn, int $identifier): int {}

	/**
	 * Returns array of strings which represents the keys that can be used for response parameters on this transaction
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return array
	 * @link http://php.net/manual/en/function.m-responsekeys.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_responsekeys($conn, int $identifier): array {}

	/**
	 * Get a custom response parameter
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @param string $key
	 * @return string
	 * @link http://php.net/manual/en/function.m-responseparam.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_responseparam($conn, int $identifier, string $key): string {}

	/**
	 * Check to see if the transaction was successful
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-returnstatus.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_returnstatus($conn, int $identifier): int {}

	/**
	 * Set blocking/non-blocking mode for connection
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $tf
	 * @return int
	 * @link http://php.net/manual/en/function.m-setblocking.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setblocking($conn, int $tf): int {}

	/**
	 * Set the connection method to Drop-File
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param string $directory
	 * @return int
	 * @link http://php.net/manual/en/function.m-setdropfile.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setdropfile($conn, string $directory): int {}

	/**
	 * Set the connection method to IP
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param string $host
	 * @param int $port
	 * @return int
	 * @link http://php.net/manual/en/function.m-setip.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setip($conn, string $host, int $port): int {}

	/**
	 * Set the connection method to SSL
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param string $host
	 * @param int $port
	 * @return int
	 * @link http://php.net/manual/en/function.m-setssl.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setssl($conn, string $host, int $port): int {}

	/**
	 * Set SSL CA (Certificate Authority) file for verification of server certificate
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param string $cafile
	 * @return int
	 * @link http://php.net/manual/en/function.m-setssl-cafile.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setssl_cafile($conn, string $cafile): int {}

	/**
	 * Set certificate key files and certificates if server requires client certificate verification
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param string $sslkeyfile
	 * @param string $sslcertfile
	 * @return int
	 * @link http://php.net/manual/en/function.m-setssl-files.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setssl_files($conn, string $sslkeyfile, string $sslcertfile): int {}

	/**
	 * Set maximum transaction time (per trans)
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $seconds
	 * @return int
	 * @link http://php.net/manual/en/function.m-settimeout.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_settimeout($conn, int $seconds): int {}

	/**
	 * Generate hash for SSL client certificate verification
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $filename
	 * @return string
	 * @link http://php.net/manual/en/function.m-sslcert-gen-hash.php
	 * @since PECL mcve >= 5.2.0
	 */
	function m_sslcert_gen_hash(string $filename): string {}

	/**
	 * Check to see if outgoing buffer is clear
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.m-transactionssent.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transactionssent($conn): int {}

	/**
	 * Number of transactions in client-queue
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.m-transinqueue.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transinqueue($conn): int {}

	/**
	 * Add key/value pair to a transaction. Replaces deprecated transparam()
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @param string $key
	 * @param string $value
	 * @return int
	 * @link http://php.net/manual/en/function.m-transkeyval.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transkeyval($conn, int $identifier, string $key, string $value): int {}

	/**
	 * Start a new transaction
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.m-transnew.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transnew($conn): int {}

	/**
	 * Finalize and send the transaction
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $identifier
	 * @return int
	 * @link http://php.net/manual/en/function.m-transsend.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transsend($conn, int $identifier): int {}

	/**
	 * Wait x microsecs
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $microsecs
	 * @return int
	 * @link http://php.net/manual/en/function.m-uwait.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_uwait(int $microsecs): int {}

	/**
	 * Whether or not to validate the passed identifier on any transaction it is passed to
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $tf
	 * @return int
	 * @link http://php.net/manual/en/function.m-validateidentifier.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_validateidentifier($conn, int $tf): int {}

	/**
	 * Set whether or not to PING upon connect to verify connection
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $tf
	 * @return bool
	 * @link http://php.net/manual/en/function.m-verifyconnection.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_verifyconnection($conn, int $tf): bool {}

	/**
	 * Set whether or not to verify the server ssl certificate
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $conn <p>An MCVE_CONN resource returned by <code>m_initengine()</code>.</p>
	 * @param int $tf
	 * @return bool
	 * @link http://php.net/manual/en/function.m-verifysslcert.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_verifysslcert($conn, int $tf): bool {}

	define('M_DONE', null);

	define('M_ERROR', null);

	define('M_FAIL', null);

	define('M_PENDING', null);

	define('M_SUCCESS', null);

}
