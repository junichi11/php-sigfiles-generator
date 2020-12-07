<?php



namespace {

	/**
	 * @link http://php.net/manual/en/class.mysqlnduhconnection.php
	 * @since PECL mysqlnd-uh >= 1.0.0-alpha
	 */
	class MysqlndUhConnection {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link http://php.net/manual/en/mysqlnduhconnection.construct.php
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function __construct() {}

		/**
		 * Changes the user of the specified mysqlnd database connection
		 * <p>Changes the user of the specified mysqlnd database connection</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $user <p>The MySQL user name.</p>
		 * @param string $password <p>The MySQL password.</p>
		 * @param string $database <p>The MySQL database to change to.</p>
		 * @param bool $silent <p>Controls if mysqlnd is allowed to emit errors or not.</p>
		 * @param int $passwd_len <p>Length of the MySQL password.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.changeuser.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_change_user()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function changeUser(\mysqlnd_connection $connection, string $user, string $password, string $database, bool $silent, int $passwd_len): bool {}

		/**
		 * Returns the default character set for the database connection
		 * <p>Returns the default character set for the database connection.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>The default character set.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.charsetname.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_character_set_name()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function charsetName(\mysqlnd_connection $connection): string {}

		/**
		 * Closes a previously opened database connection
		 * <p>Closes a previously opened database connection.</p><p><b>Note</b>:</p><p>Failing to call the parent implementation may cause memory leaks or crash PHP. This is not considered a bug. Please, keep in mind that the <code>mysqlnd</code> library functions have never been designed to be exposed to the user space.</p>
		 * @param \mysqlnd_connection $connection <p>The connection to be closed. Do not modify!</p>
		 * @param int $close_type <p>Why the connection is to be closed. The value of <code>close_type</code> is one of <b><code>MYSQLND_UH_MYSQLND_CLOSE_EXPLICIT</code></b>, <b><code>MYSQLND_UH_MYSQLND_CLOSE_IMPLICIT</code></b>, <b><code>MYSQLND_UH_MYSQLND_CLOSE_DISCONNECTED</code></b> or <b><code>MYSQLND_UH_MYSQLND_CLOSE_LAST</code></b>. The latter should never be seen, unless the default behaviour of the <code>mysqlnd</code> library has been changed by a plugin.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.close.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_close(), mysql_close()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function close(\mysqlnd_connection $connection, int $close_type): bool {}

		/**
		 * Open a new connection to the MySQL server
		 * <p>Open a new connection to the MySQL server.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $host <p>Can be either a host name or an IP address. Passing the NULL value or the string "localhost" to this parameter, the local host is assumed. When possible, pipes will be used instead of the TCP/IP protocol.</p>
		 * @param string $use
		 * @param string $password <p>If not provided or <b><code>NULL</code></b>, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password as provided or not).</p>
		 * @param string $database <p>If provided will specify the default database to be used when performing queries.</p>
		 * @param int $port <p>Specifies the port number to attempt to connect to the MySQL server.</p>
		 * @param string $socket <p>Specifies the socket or named pipe that should be used. If <b><code>NULL</code></b>, mysqlnd will default to <code>/tmp/mysql.sock</code>.</p>
		 * @param int $mysql_flags <p>Connection options.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.connect.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_connect(), mysql_connect()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function connect(\mysqlnd_connection $connection, string $host, string $use, string $password, string $database, int $port, string $socket, int $mysql_flags): bool {}

		/**
		 * End a persistent connection
		 * <p>End a persistent connection</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.endpsession.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function endPSession(\mysqlnd_connection $connection): bool {}

		/**
		 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
		 * <p>Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection.</p>
		 * @param \mysqlnd_connection $connection
		 * @param string $escape_string <p>The string to be escaped.</p>
		 * @return string <p>The escaped string.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.escapestring.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_real_escape_string(), mysql_real_escape_string()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function escapeString(\mysqlnd_connection $connection, string $escape_string): string {}

		/**
		 * Gets the number of affected rows in a previous MySQL operation
		 * <p>Gets the number of affected rows in a previous MySQL operation.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>Number of affected rows.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getaffectedrows.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_affected_rows(), mysql_affected_rows()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getAffectedRows(\mysqlnd_connection $connection): int {}

		/**
		 * Returns the error code for the most recent function call
		 * <p>Returns the error code for the most recent function call.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>Error code for the most recent function call.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.geterrornumber.php
		 * @see mysqlnd_uh_set_connection_proxy(), MysqlndUhConnection::getErrorString(), mysqli_errno(), mysql_errno()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getErrorNumber(\mysqlnd_connection $connection): int {}

		/**
		 * Returns a string description of the last error
		 * <p>Returns a string description of the last error.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>Error string for the most recent function call.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.geterrorstring.php
		 * @see mysqlnd_uh_set_connection_proxy(), MysqlndUhConnection::getErrorNumber(), mysqli_error(), mysql_error()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getErrorString(\mysqlnd_connection $connection): string {}

		/**
		 * Returns the number of columns for the most recent query
		 * <p>Returns the number of columns for the most recent query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>Number of columns.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getfieldcount.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_field_count()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getFieldCount(\mysqlnd_connection $connection): int {}

		/**
		 * Returns a string representing the type of connection used
		 * <p>Returns a string representing the type of connection used.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>Connection description.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.gethostinformation.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_get_host_info(), mysql_get_host_info()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getHostInformation(\mysqlnd_connection $connection): string {}

		/**
		 * Returns the auto generated id used in the last query
		 * <p>Returns the auto generated id used in the last query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>Last insert id.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getlastinsertid.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_insert_id(), mysql_insert_id()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getLastInsertId(\mysqlnd_connection $connection): int {}

		/**
		 * Retrieves information about the most recently executed query
		 * <p>Retrieves information about the most recently executed query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return void <p>Last message. Trying to return a string longer than 511 bytes will cause an error of the type <code>E_WARNING</code> and result in the string being truncated.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getlastmessage.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_info(), mysql_info()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getLastMessage(\mysqlnd_connection $connection): void {}

		/**
		 * Returns the version of the MySQL protocol used
		 * <p>Returns the version of the MySQL protocol used.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>The protocol version.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getprotocolinformation.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_get_proto_info(), mysql_get_proto_info()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getProtocolInformation(\mysqlnd_connection $connection): string {}

		/**
		 * Returns the version of the MySQL server
		 * <p>Returns the version of the MySQL server.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>The server version.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getserverinformation.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_get_server_info(), mysql_get_server_info()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getServerInformation(\mysqlnd_connection $connection): string {}

		/**
		 * Gets the current system status
		 * <p>Gets the current system status.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>The system status message.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getserverstatistics.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_stat(), mysql_stat()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getServerStatistics(\mysqlnd_connection $connection): string {}

		/**
		 * Returns the version of the MySQL server as an integer
		 * <p>Returns the version of the MySQL server as an integer.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>The MySQL version.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getserverversion.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_get_server_version()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getServerVersion(\mysqlnd_connection $connection): int {}

		/**
		 * Returns the SQLSTATE error from previous MySQL operation
		 * <p>Returns the SQLSTATE error from previous MySQL operation.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return string <p>The SQLSTATE code.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getsqlstate.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getSqlstate(\mysqlnd_connection $connection): string {}

		/**
		 * Returns statistics about the client connection
		 * <p>Returns statistics about the client connection.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return array <p>Connection statistics collected by mysqlnd.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getstatistics.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_get_connection_stats()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getStatistics(\mysqlnd_connection $connection): array {}

		/**
		 * Returns the thread ID for the current connection
		 * <p>Returns the thread ID for the current connection.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>Connection thread id.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getthreadid.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_thread_id(), mysql_thread_id()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getThreadId(\mysqlnd_connection $connection): int {}

		/**
		 * Returns the number of warnings from the last query for the given link
		 * <p>Returns the number of warnings from the last query for the given link.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return int <p>Number of warnings.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.getwarningcount.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_warning_count()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function getWarningCount(\mysqlnd_connection $connection): int {}

		/**
		 * Initialize mysqlnd connection
		 * <p>Initialize mysqlnd connection. This is an mysqlnd internal call to initialize the connection object.</p><p><b>Note</b>:</p><p>Failing to call the parent implementation may cause memory leaks or crash PHP. This is not considered a bug. Please, keep in mind that the <code>mysqlnd</code> library functions have never been designed to be exposed to the user space.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.init.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function init(\mysqlnd_connection $connection): bool {}

		/**
		 * Asks the server to kill a MySQL thread
		 * <p>Asks the server to kill a MySQL thread.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $pid <p>Thread Id of the connection to be killed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.killconnection.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_kill()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function killConnection(\mysqlnd_connection $connection, int $pid): bool {}

		/**
		 * List MySQL table fields
		 * <p>List MySQL table fields.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $table <p>The name of the table that's being queried.</p>
		 * @param string $achtung_wild
		 * @return array
		 * @link http://php.net/manual/en/mysqlnduhconnection.listfields.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysql_list_fields()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function listFields(\mysqlnd_connection $connection, string $table, string $achtung_wild): array {}

		/**
		 * Wrapper for assorted list commands
		 * <p>Wrapper for assorted list commands.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $query <p>SHOW command to be executed.</p>
		 * @param string $achtung_wild
		 * @param string $par1
		 * @return void
		 * @link http://php.net/manual/en/mysqlnduhconnection.listmethod.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysql_list_dbs()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function listMethod(\mysqlnd_connection $connection, string $query, string $achtung_wild, string $par1): void {}

		/**
		 * Check if there are any more query results from a multi query
		 * <p>Check if there are any more query results from a multi query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.moreresults.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_more_results()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function moreResults(\mysqlnd_connection $connection): bool {}

		/**
		 * Prepare next result from multi_query
		 * <p>Prepare next result from multi_query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.nextresult.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_next_result()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function nextResult(\mysqlnd_connection $connection): bool {}

		/**
		 * Pings a server connection, or tries to reconnect if the connection has gone down
		 * <p>Pings a server connection, or tries to reconnect if the connection has gone down.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.ping.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_ping(), mysql_ping()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function ping(\mysqlnd_connection $connection): bool {}

		/**
		 * Performs a query on the database
		 * <p>Performs a query on the database (COM_QUERY).</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $query <p>The query string.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.query.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_query(), mysql_query()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function query(\mysqlnd_connection $connection, string $query): bool {}

		/**
		 * Read a result set header
		 * <p>Read a result set header.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param \mysqlnd_statement $mysqlnd_stmt <p>Mysqlnd statement handle. Do not modify! Set to <b><code>NULL</code></b>, if function is not used in the context of a prepared statement.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.queryreadresultsetheader.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function queryReadResultsetHeader(\mysqlnd_connection $connection, \mysqlnd_statement $mysqlnd_stmt): bool {}

		/**
		 * Get result from async query
		 * <p>Get result from async query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.reapquery.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function reapQuery(\mysqlnd_connection $connection): bool {}

		/**
		 * Flush or reset tables and caches
		 * <p>Flush or reset tables and caches.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $options <p>What to refresh.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.refreshserver.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function refreshServer(\mysqlnd_connection $connection, int $options): bool {}

		/**
		 * Restart a persistent mysqlnd connection
		 * <p>Restart a persistent mysqlnd connection.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.restartpsession.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function restartPSession(\mysqlnd_connection $connection): bool {}

		/**
		 * Selects the default database for database queries
		 * <p>Selects the default database for database queries.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $database <p>The database name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.selectdb.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_select_db(), mysql_select_db()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function selectDb(\mysqlnd_connection $connection, string $database): bool {}

		/**
		 * Sends a close command to MySQL
		 * <p>Sends a close command to MySQL.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.sendclose.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function sendClose(\mysqlnd_connection $connection): bool {}

		/**
		 * Sends a query to MySQL
		 * <p>Sends a query to MySQL.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $query <p>The query string.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.sendquery.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function sendQuery(\mysqlnd_connection $connection, string $query): bool {}

		/**
		 * Dump debugging information into the log for the MySQL server
		 * <p>Dump debugging information into the log for the MySQL server.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.serverdumpdebuginformation.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_dump_debug_info()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function serverDumpDebugInformation(\mysqlnd_connection $connection): bool {}

		/**
		 * Turns on or off auto-committing database modifications
		 * <p>Turns on or off auto-committing database modifications</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $mode <p>Whether to turn on auto-commit or not.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.setautocommit.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_autocommit()
		 * @since PECL mysqlnd-uh >= 1.0.1-alpha
		 */
		public function setAutocommit(\mysqlnd_connection $connection, int $mode): bool {}

		/**
		 * Sets the default client character set
		 * <p>Sets the default client character set.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $charset <p>The charset to be set as default.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.setcharset.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_set_charset()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function setCharset(\mysqlnd_connection $connection, string $charset): bool {}

		/**
		 * Sets a client option
		 * <p>Sets a client option.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $option <p>The option to be set.</p>
		 * @param int $value <p>Optional option value, if required.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.setclientoption.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_real_connect(), mysqli_options()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function setClientOption(\mysqlnd_connection $connection, int $option, int $value): bool {}

		/**
		 * Sets a server option
		 * <p>Sets a server option.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $option <p>The option to be set.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.setserveroption.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_real_connect(), mysqli_options(), mysqli_multi_query()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function setServerOption(\mysqlnd_connection $connection, int $option): void {}

		/**
		 * The shutdownServer purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $MYSQLND_UH_RES_MYSQLND_NAME
		 * @param string $level
		 * @return void
		 * @link http://php.net/manual/en/mysqlnduhconnection.shutdownserver.php
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function shutdownServer(string $MYSQLND_UH_RES_MYSQLND_NAME, string $level): void {}

		/**
		 * Sends a basic COM_&#42; command
		 * <p>Sends a basic COM_&#42; command to MySQL.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $command <p>The COM command to be send.</p>
		 * @param string $arg <p>Optional COM command arguments.</p>
		 * @param int $ok_packet <p>The OK packet type.</p>
		 * @param bool $silent <p>Whether mysqlnd may emit errors.</p>
		 * @param bool $ignore_upsert_status <p>Whether to ignore <code>UPDATE</code>/<code>INSERT</code> status.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.simplecommand.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function simpleCommand(\mysqlnd_connection $connection, int $command, string $arg, int $ok_packet, bool $silent, bool $ignore_upsert_status): bool {}

		/**
		 * Process a response for a basic COM_&#42; command send to the client
		 * <p>Process a response for a basic COM_&#42; command send to the client.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param int $ok_packet <p>The OK packet type.</p>
		 * @param bool $silent <p>Whether mysqlnd may emit errors.</p>
		 * @param int $command <p>The COM command to process results from.</p>
		 * @param bool $ignore_upsert_status <p>Whether to ignore <code>UPDATE</code>/<code>INSERT</code> status.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.simplecommandhandleresponse.php
		 * @see mysqlnd_uh_set_connection_proxy()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function simpleCommandHandleResponse(\mysqlnd_connection $connection, int $ok_packet, bool $silent, int $command, bool $ignore_upsert_status): bool {}

		/**
		 * Used for establishing secure connections using SSL
		 * <p>Used for establishing secure connections using SSL.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @param string $key <p>The path name to the key file.</p>
		 * @param string $cert <p>The path name to the certificate file.</p>
		 * @param string $ca <p>The path name to the certificate authority file.</p>
		 * @param string $capath <p>The pathname to a directory that contains trusted SSL CA certificates in PEM format.</p>
		 * @param string $cipher <p>A list of allowable ciphers to use for SSL encryption.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.sslset.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_ssl_set()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function sslSet(\mysqlnd_connection $connection, string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

		/**
		 * Initializes a statement and returns a resource for use with mysqli_statement::prepare
		 * <p>Initializes a statement and returns a resource for use with mysqli_statement::prepare.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return resource <p>Resource of type <code>Mysqlnd Prepared Statement (internal only - you must not modify it!)</code>. The documentation may also refer to such resources using the alias name <code>mysqlnd_prepared_statement</code>.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.stmtinit.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_stmt_init()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function stmtInit(\mysqlnd_connection $connection) {}

		/**
		 * Transfers a result set from the last query
		 * <p>Transfers a result set from the last query.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return resource <p>Resource of type <code>Mysqlnd Resultset (internal only - you must not modify it!)</code>. The documentation may also refer to such resources using the alias name <code>mysqlnd_resultset</code>.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.storeresult.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_store_result(), mysqli_real_query()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function storeResult(\mysqlnd_connection $connection) {}

		/**
		 * Commits the current transaction
		 * <p>Commits the current transaction.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.txcommit.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_commit()
		 * @since PECL mysqlnd-uh >= 1.0.1-alpha
		 */
		public function txCommit(\mysqlnd_connection $connection): bool {}

		/**
		 * Rolls back current transaction
		 * <p>Rolls back current transaction.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.txrollback.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_commit()
		 * @since PECL mysqlnd-uh >= 1.0.1-alpha
		 */
		public function txRollback(\mysqlnd_connection $connection): bool {}

		/**
		 * Initiate a result set retrieval
		 * <p>Initiate a result set retrieval.</p>
		 * @param \mysqlnd_connection $connection <p>Mysqlnd connection handle. Do not modify!</p>
		 * @return resource <p>Resource of type <code>Mysqlnd Resultset (internal only - you must not modify it!)</code>. The documentation may also refer to such resources using the alias name <code>mysqlnd_resultset</code>.</p>
		 * @link http://php.net/manual/en/mysqlnduhconnection.useresult.php
		 * @see mysqlnd_uh_set_connection_proxy(), mysqli_use_result(), mysqli_real_query()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function useResult(\mysqlnd_connection $connection) {}
	}

	/**
	 * @link http://php.net/manual/en/class.mysqlnduhpreparedstatement.php
	 * @since PECL mysqlnd-uh >= 1.0.0-alpha
	 */
	class MysqlndUhPreparedStatement {

		/**
		 * The __construct purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return self
		 * @link http://php.net/manual/en/mysqlnduhpreparedstatement.construct.php
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function __construct() {}

		/**
		 * Executes a prepared Query
		 * <p>Executes a prepared Query.</p>
		 * @param \mysqlnd_prepared_statement $statement <p>Mysqlnd prepared statement handle. Do not modify! Resource of type <code>Mysqlnd Prepared Statement (internal only - you must not modify it!)</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhpreparedstatement.execute.php
		 * @see mysqlnd_uh_set_statement_proxy(), mysqli_stmt_execute()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function execute(\mysqlnd_prepared_statement $statement): bool {}

		/**
		 * Prepare an SQL statement for execution
		 * <p>Prepare an SQL statement for execution.</p>
		 * @param \mysqlnd_prepared_statement $statement <p>Mysqlnd prepared statement handle. Do not modify! Resource of type <code>Mysqlnd Prepared Statement (internal only - you must not modify it!)</code>.</p>
		 * @param string $query <p>The query to be prepared.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/mysqlnduhpreparedstatement.prepare.php
		 * @see mysqlnd_uh_set_statement_proxy(), mysqli_stmt_prepare(), mysqli_prepare()
		 * @since PECL mysqlnd-uh >= 1.0.0-alpha
		 */
		public function prepare(\mysqlnd_prepared_statement $statement, string $query): bool {}
	}

	/**
	 * Converts a MySQL connection handle into a mysqlnd connection handle
	 * <p>Converts a MySQL connection handle into a mysqlnd connection handle. After conversion you can execute mysqlnd library calls on the connection handle. This can be used to access mysqlnd functionality not made available through user space API calls.</p><p>The function can be disabled with <code>mysqlnd_uh.enable</code>. If <code>mysqlnd_uh.enable</code> is set to <b><code>FALSE</code></b> the function will not install the proxy and always return <b><code>TRUE</code></b>. Additionally, an error of the type <code>E_WARNING</code> may be emitted. The error message may read like <code>PHP Warning: mysqlnd_uh_convert_to_mysqlnd(): (Mysqlnd User Handler) The plugin has been disabled by setting the configuration parameter mysqlnd_uh.enable = false. You are not allowed to call this function [...]</code>.</p>
	 * @param \mysqli $mysql_connection
	 * @return resource <p>A mysqlnd connection handle.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-uh-convert-to-mysqlnd.php
	 * @since PECL mysqlnd-uh >= 1.0.0-alpha
	 */
	function mysqlnd_uh_convert_to_mysqlnd(\mysqli &$mysql_connection) {}

	/**
	 * Installs a proxy for mysqlnd connections
	 * <p>Installs a proxy object to hook mysqlnd's connection objects methods. Once installed, the proxy will be used for all MySQL connections opened with mysqli, mysql or PDO_MYSQL, assuming that the listed extensions are compiled to use the mysqlnd library.</p><p>The function can be disabled with <code>mysqlnd_uh.enable</code>. If <code>mysqlnd_uh.enable</code> is set to <b><code>FALSE</code></b> the function will not install the proxy and always return <b><code>TRUE</code></b>. Additionally, an error of the type <code>E_WARNING</code> may be emitted. The error message may read like <code>PHP Warning: mysqlnd_uh_set_connection_proxy(): (Mysqlnd User Handler) The plugin has been disabled by setting the configuration parameter mysqlnd_uh.enable = false. The proxy has not been installed [...]</code>.</p>
	 * @param \MysqlndUhConnection $connection_proxy <p>A proxy object of type MysqlndUhConnection.</p>
	 * @param \mysqli $mysqli_connection <p>Object of type <code>mysqli</code>. If given, the proxy will be set for this particular connection only.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
	 * @link http://php.net/manual/en/function.mysqlnd-uh-set-connection-proxy.php
	 * @see mysqlnd_uh_set_statement_proxy()
	 * @since PECL mysqlnd-uh >= 1.0.0-alpha
	 */
	function mysqlnd_uh_set_connection_proxy(\MysqlndUhConnection &$connection_proxy, \mysqli &$mysqli_connection = NULL): bool {}

	/**
	 * Installs a proxy for mysqlnd statements
	 * <p>Installs a proxy for mysqlnd statements. The proxy object will be used for all mysqlnd prepared statement objects, regardless which PHP MySQL extension (mysqli, mysql, PDO_MYSQL) has created them as long as the extension is compiled to use the mysqlnd library.</p><p>The function can be disabled with <code>mysqlnd_uh.enable</code>. If <code>mysqlnd_uh.enable</code> is set to <b><code>FALSE</code></b> the function will not install the proxy and always return <b><code>TRUE</code></b>. Additionally, an error of the type <code>E_WARNING</code> may be emitted. The error message may read like <code>PHP Warning: mysqlnd_uh_set_statement_proxy(): (Mysqlnd User Handler) The plugin has been disabled by setting the configuration parameter mysqlnd_uh.enable = false. The proxy has not been installed [...]</code>.</p>
	 * @param \MysqlndUhStatement $statement_proxy <p>The mysqlnd statement proxy object of type <code>MysqlndUhStatement</code></p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise, returns <b><code>FALSE</code></b></p>
	 * @link http://php.net/manual/en/function.mysqlnd-uh-set-statement-proxy.php
	 * @see mysqlnd_uh_set_connection_proxy()
	 * @since PECL mysqlnd-uh >= 1.0.0-alpha
	 */
	function mysqlnd_uh_set_statement_proxy(\MysqlndUhStatement &$statement_proxy): bool {}

	/**
	 * MySQL Client Server protocol packet: change user response.
	 */
	define('MYSQLND_UH_MYSQLND_CHG_USER_RESP_PACKET', null);

	/**
	 * Connection error.
	 */
	define('MYSQLND_UH_MYSQLND_CLOSE_DISCONNECTED', null);

	/**
	 * User has called mysqlnd to close the connection.
	 */
	define('MYSQLND_UH_MYSQLND_CLOSE_EXPLICIT', null);

	/**
	 * Implicitly closed, for example, during garbage connection.
	 */
	define('MYSQLND_UH_MYSQLND_CLOSE_IMPLICIT', null);

	/**
	 * No practical meaning. Last entry marker of internal C data structure list.
	 */
	define('MYSQLND_UH_MYSQLND_CLOSE_LAST', null);

	/**
	 * MySQL Client Server protocol command: COM_BINLOG_DUMP.
	 */
	define('MYSQLND_UH_MYSQLND_COM_BINLOG_DUMP', null);

	/**
	 * MySQL Client Server protocol command: COM_CHANGE_USER.
	 */
	define('MYSQLND_UH_MYSQLND_COM_CHANGE_USER', null);

	/**
	 * MySQL Client Server protocol command: COM_CONNECT.
	 */
	define('MYSQLND_UH_MYSQLND_COM_CONNECT', null);

	/**
	 * MySQL Client Server protocol command: COM_CONNECT_OUT.
	 */
	define('MYSQLND_UH_MYSQLND_COM_CONNECT_OUT', null);

	/**
	 * MySQL Client Server protocol command: COM_CREATE_DB.
	 */
	define('MYSQLND_UH_MYSQLND_COM_CREATE_DB', null);

	/**
	 * MySQL Client Server protocol command: COM_DAEMON.
	 */
	define('MYSQLND_UH_MYSQLND_COM_DAEMON', null);

	/**
	 * MySQL Client Server protocol command: COM_DEBUG.
	 */
	define('MYSQLND_UH_MYSQLND_COM_DEBUG', null);

	/**
	 * MySQL Client Server protocol command: COM_DELAYED_INSERT.
	 */
	define('MYSQLND_UH_MYSQLND_COM_DELAYED_INSERT', null);

	/**
	 * MySQL Client Server protocol command: COM_DROP_DB.
	 */
	define('MYSQLND_UH_MYSQLND_COM_DROP_DB', null);

	/**
	 * MySQL Client Server protocol command: COM_END.
	 */
	define('MYSQLND_UH_MYSQLND_COM_END', null);

	/**
	 * MySQL Client Server protocol command: COM_FIELD_LIST.
	 */
	define('MYSQLND_UH_MYSQLND_COM_FIELD_LIST', null);

	/**
	 * MySQL Client Server protocol command: COM_INIT_DB.
	 */
	define('MYSQLND_UH_MYSQLND_COM_INIT_DB', null);

	/**
	 * MySQL Client Server protocol command: COM_PING.
	 */
	define('MYSQLND_UH_MYSQLND_COM_PING', null);

	/**
	 * MySQL Client Server protocol command: COM_PROCESS_INFO.
	 */
	define('MYSQLND_UH_MYSQLND_COM_PROCESS_INFO', null);

	/**
	 * MySQL Client Server protocol command: COM_PROCESS_KILL.
	 */
	define('MYSQLND_UH_MYSQLND_COM_PROCESS_KILL', null);

	/**
	 * MySQL Client Server protocol command: COM_QUERY.
	 */
	define('MYSQLND_UH_MYSQLND_COM_QUERY', null);

	/**
	 * MySQL Client Server protocol command: COM_QUIT.
	 */
	define('MYSQLND_UH_MYSQLND_COM_QUIT', null);

	/**
	 * MySQL Client Server protocol command: COM_REFRESH.
	 */
	define('MYSQLND_UH_MYSQLND_COM_REFRESH', null);

	/**
	 * MySQL Client Server protocol command: COM_REGISTER_SLAVED.
	 */
	define('MYSQLND_UH_MYSQLND_COM_REGISTER_SLAVED', null);

	/**
	 * MySQL Client Server protocol command: COM_SET_OPTION.
	 */
	define('MYSQLND_UH_MYSQLND_COM_SET_OPTION', null);

	/**
	 * MySQL Client Server protocol command: COM_SHUTDOWN.
	 */
	define('MYSQLND_UH_MYSQLND_COM_SHUTDOWN', null);

	/**
	 * MySQL Client Server protocol command: COM_SLEEP.
	 */
	define('MYSQLND_UH_MYSQLND_COM_SLEEP', null);

	/**
	 * MySQL Client Server protocol command: COM_STATISTICS.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STATISTICS', null);

	/**
	 * MySQL Client Server protocol command: COM_STMT_CLOSE.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STMT_CLOSE', null);

	/**
	 * MySQL Client Server protocol command: COM_STMT_EXECUTE.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STMT_EXECUTE', null);

	/**
	 * MySQL Client Server protocol command: COM_STMT_FETCH.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STMT_FETCH', null);

	/**
	 * MySQL Client Server protocol command: COM_STMT_PREPARE.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STMT_PREPARE', null);

	/**
	 * MySQL Client Server protocol command: COM_STMT_RESET.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STMT_RESET', null);

	/**
	 * MySQL Client Server protocol command: COM_STMT_SEND_LONG_DATA.
	 */
	define('MYSQLND_UH_MYSQLND_COM_STMT_SEND_LONG_DATA', null);

	/**
	 * MySQL Client Server protocol command: COM_TABLE_DUMP.
	 */
	define('MYSQLND_UH_MYSQLND_COM_TABLE_DUMP', null);

	/**
	 * MySQL Client Server protocol command: COM_TIME.
	 */
	define('MYSQLND_UH_MYSQLND_COM_TIME', null);

	/**
	 * Option: TODO. Available as of <code>PHP 5.4.0</code>.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_AUTH_PROTOCOL', null);

	/**
	 * TODO
	 */
	define('MYSQLND_UH_MYSQLND_OPT_GUESS_CONNECTION', null);

	/**
	 * Option: make mysqlnd return integer and float columns as long even when using the MySQL Client Server text protocol. Only available with a custom build of mysqlnd.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_INT_AND_FLOAT_NATIVE', null);

	/**
	 * Option: Whether to allow <code>LOAD DATA LOCAL INFILE</code> use.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_LOCAL_INFILE', null);

	/**
	 * Option: maximum allowed packet size. Available as of <code>PHP 5.4.0</code>.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_MAX_ALLOWED_PACKET', null);

	/**
	 * Option: mysqlnd network buffer size for commands.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_NET_CMD_BUFFER_SIZE', null);

	/**
	 * Option: mysqlnd network buffer size for reading from the server.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_NET_READ_BUFFER_SIZE', null);

	/**
	 * Option: supported protocol version.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_PROTOCOL', null);

	/**
	 * Option: connection read timeout.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_READ_TIMEOUT', null);

	/**
	 * Option: Whether to reconnect automatically.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_RECONNECT', null);

	/**
	 * Option: SSL CA.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_CA', null);

	/**
	 * Option: Path to SSL CA.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_CAPATH', null);

	/**
	 * Option: SSL certificate.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_CERT', null);

	/**
	 * Option: SSL cipher.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_CIPHER', null);

	/**
	 * Option: SSL key.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_KEY', null);

	/**
	 * Option: SSL passphrase.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_PASSPHRASE', null);

	/**
	 * Option: TODO
	 */
	define('MYSQLND_UH_MYSQLND_OPT_SSL_VERIFY_SERVER_CERT', null);

	/**
	 * Embedded server related.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_USE_EMBEDDED_CONNECTION', null);

	/**
	 * Embedded server related.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_USE_REMOTE_CONNECTION', null);

	/**
	 * Option: unbuffered result sets.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_USE_RESULT', null);

	/**
	 * Option: connection write timeout.
	 */
	define('MYSQLND_UH_MYSQLND_OPT_WRITE_TIMEOUT', null);

	/**
	 * Option: init command to execute upon connect.
	 */
	define('MYSQLND_UH_MYSQLND_OPTION_INIT_COMMAND', null);

	/**
	 * Option: whether the MySQL compressed protocol is to be used.
	 */
	define('MYSQLND_UH_MYSQLND_OPTION_OPT_COMPRESS', null);

	/**
	 * Option: connection timeout.
	 */
	define('MYSQLND_UH_MYSQLND_OPTION_OPT_CONNECT_TIMEOUT', null);

	/**
	 * Option: named pipe to use for connection (Windows).
	 */
	define('MYSQLND_UH_MYSQLND_OPTION_OPT_NAMED_PIPE', null);

	/**
	 * MySQL Client Server protocol packet: prepare response.
	 */
	define('MYSQLND_UH_MYSQLND_PREPARE_RESP_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: authentication.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_AUTH_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: command.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_CMD_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: EOF.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_EOF_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: greeting.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_GREET_PACKET', null);

	/**
	 * No practical meaning. Last entry marker of internal C data structure list.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_LAST', null);

	/**
	 * MySQL Client Server protocol packet: OK.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_OK_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: row.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_ROW_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: resultset field.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_RSET_FLD_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: result set header.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_RSET_HEADER_PACKET', null);

	/**
	 * MySQL Client Server protocol packet: stats.
	 */
	define('MYSQLND_UH_MYSQLND_PROT_STATS_PACKET', null);

	/**
	 * Option: MySQL server default file to read upon connect.
	 */
	define('MYSQLND_UH_MYSQLND_READ_DEFAULT_FILE', null);

	/**
	 * Option: MySQL server default file group to read upon connect.
	 */
	define('MYSQLND_UH_MYSQLND_READ_DEFAULT_GROUP', null);

	/**
	 * Option: Whether to report data truncation.
	 */
	define('MYSQLND_UH_MYSQLND_REPORT_DATA_TRUNCATION', null);

	/**
	 * TODO
	 */
	define('MYSQLND_UH_MYSQLND_SECURE_AUTH', null);

	/**
	 * Option: charset description files directory.
	 */
	define('MYSQLND_UH_MYSQLND_SET_CHARSET_DIR', null);

	/**
	 * Option: charset name.
	 */
	define('MYSQLND_UH_MYSQLND_SET_CHARSET_NAME', null);

	/**
	 * TODO
	 */
	define('MYSQLND_UH_MYSQLND_SET_CLIENT_IP', null);

	/**
	 * Option: shared memory base name for shared memory connections.
	 */
	define('MYSQLND_UH_MYSQLND_SHARED_MEMORY_BASE_NAME', null);

	/**
	 * Option: default authentication method.
	 */
	define('MYSQLND_UH_SERVER_OPTION_DEFAULT_AUTH', null);

	/**
	 * Option: disables multi statement support.
	 */
	define('MYSQLND_UH_SERVER_OPTION_MULTI_STATEMENTS_OFF', null);

	/**
	 * Option: enables multi statement support.
	 */
	define('MYSQLND_UH_SERVER_OPTION_MULTI_STATEMENTS_ON', null);

	/**
	 * Option: server plugin directory.
	 */
	define('MYSQLND_UH_SERVER_OPTION_PLUGIN_DIR', null);

	/**
	 * TODO
	 */
	define('MYSQLND_UH_SERVER_OPTION_SET_CLIENT_IP', null);

	/**
	 * Plugin version string, for example, 1.0.0-alpha.
	 */
	define('MYSQLND_UH_VERSION', null);

	/**
	 * Plugin version number, for example, 10000.
	 */
	define('MYSQLND_UH_VERSION_ID', null);

}
