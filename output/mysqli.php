<?php



namespace {

	/**
	 * <p>Represents a connection between PHP and a MySQL database.</p>
	 * @link https://php.net/manual/en/class.mysqli.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class mysqli {

		/**
		 * Gets the number of affected rows in a previous MySQL operation
		 * <p>Object-oriented style</p><p>Returns the number of rows affected by the last <code>INSERT</code>, <code>UPDATE</code>, <code>REPLACE</code> or <code>DELETE</code> query. Works like <code>mysqli_num_rows()</code> for <code>SELECT</code> statements.</p>
		 * @var int|string <p>An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records were updated for an <code>UPDATE</code> statement, no rows matched the <code>WHERE</code> clause in the query or that no query has yet been executed. <code>-1</code> indicates that the query returned an error or that <b>mysqli_affected_rows()</b> was called for an unbuffered <code>SELECT</code> query.</p><p><b>Note</b>:</p><p>If the number of affected rows is greater than the maximum int value (<b><code>PHP_INT_MAX</code></b>), the number of affected rows will be returned as a string.</p>
		 * @link https://php.net/manual/en/mysqli.affected-rows.php
		 * @see mysqli_num_rows(), mysqli_info()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $affected_rows;

		/**
		 * Get MySQL client info
		 * <p>Object-oriented style</p><p>Returns a string that represents the MySQL client library version.</p>
		 * @var string <p>A string that represents the MySQL client library version.</p>
		 * @link https://php.net/manual/en/mysqli.get-client-info.php
		 * @see mysqli_get_client_version(), mysqli_get_server_info(), mysqli_get_server_version()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $client_info;

		/**
		 * Returns the MySQL client version as an integer
		 * <p>Object-oriented style</p><p>Returns client version number as an integer.</p>
		 * @var int <p>A number that represents the MySQL client library version in format: <code>main_version&#42;10000 + minor_version &#42;100 + sub_version</code>. For example, 4.1.0 is returned as 40100.</p><p>This is useful to quickly determine the version of the client library to know if some capability exists.</p>
		 * @link https://php.net/manual/en/mysqli.get-client-version.php
		 * @see mysqli_get_client_info(), mysqli_get_server_info(), mysqli_get_server_version()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $client_version;

		/**
		 * Returns the error code from last connect call
		 * <p>Object-oriented style</p><p>Returns the error code from the last connection attempt.</p>
		 * @var int <p>An error code for the last connection attempt, if it failed. Zero means no error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.connect-errno.php
		 * @see mysqli_connect(), mysqli_connect_error(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $connect_errno;

		/**
		 * Returns a description of the last connection error
		 * <p>Object-oriented style</p><p>Returns the error message from the last connection attempt.</p>
		 * @var ?string <p>A string that describes the error. <b><code>null</code></b> is returned if no error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.connect-error.php
		 * @see mysqli_connect(), mysqli_connect_errno(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $connect_error;

		/**
		 * Returns the error code for the most recent function call
		 * <p>Object-oriented style</p><p>Returns the last error code for the most recent MySQLi function call that can succeed or fail.</p>
		 * @var int <p>An error code value for the last call, if it failed. zero means no error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.errno.php
		 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $errno;

		/**
		 * Returns a string description of the last error
		 * <p>Object-oriented style</p><p>Returns the last error message for the most recent MySQLi function call that can succeed or fail.</p>
		 * @var string <p>A string that describes the error. An empty string if no error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.error.php
		 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_errno(), mysqli_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $error;

		/**
		 * Returns a list of errors from the last command executed
		 * <p>Object-oriented style</p><p>Returns a array of errors for the most recent MySQLi function call that can succeed or fail.</p>
		 * @var array <p>A list of errors, each as an associative <code>array</code> containing the errno, error, and sqlstate.</p>
		 * @link https://php.net/manual/en/mysqli.error-list.php
		 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public $error_list;

		/**
		 * Returns the number of columns for the most recent query
		 * <p>Object-oriented style</p><p>Returns the number of columns for the most recent query on the connection represented by the <code>mysql</code> parameter. This function can be useful when using the <code>mysqli_store_result()</code> function to determine if the query should have produced a non-empty result set or not without knowing the nature of the query.</p>
		 * @var int <p>An integer representing the number of fields in a result set.</p>
		 * @link https://php.net/manual/en/mysqli.field-count.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $field_count;

		/**
		 * Returns a string representing the type of connection used
		 * <p>Object-oriented style</p><p>Returns a string describing the connection represented by the <code>mysql</code> parameter (including the server host name).</p>
		 * @var string <p>A character string representing the server hostname and the connection type.</p>
		 * @link https://php.net/manual/en/mysqli.get-host-info.php
		 * @see mysqli_get_proto_info()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $host_info;

		/**
		 * Retrieves information about the most recently executed query
		 * <p>Object-oriented style</p><p>The <b>mysqli_info()</b> function returns a string providing information about the last query executed. The nature of this string is provided below:</p><p></p><p><b>Note</b>:</p><p>Queries which do not fall into one of the preceding formats are not supported. In these situations, <b>mysqli_info()</b> will return an empty string.</p>
		 * @var ?string <p>A character string representing additional information about the most recently executed query.</p>
		 * @link https://php.net/manual/en/mysqli.info.php
		 * @see mysqli_affected_rows(), mysqli_warning_count(), mysqli_num_rows()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $info;

		/**
		 * Returns the value generated for an AUTO_INCREMENT column by the last query
		 * <p>Object-oriented style</p><p>Returns the ID generated by an <code>INSERT</code> or <code>UPDATE</code> query on a table with a column having the <code>AUTO_INCREMENT</code> attribute. In the case of a multiple-row <code>INSERT</code> statement, it returns the first automatically generated value that was successfully inserted.</p><p>Performing an <code>INSERT</code> or <code>UPDATE</code> statement using the <code>LAST_INSERT_ID()</code> MySQL function will also modify the value returned by <b>mysqli_insert_id()</b>. If <code>LAST_INSERT_ID(expr)</code> was used to generate the value of <code>AUTO_INCREMENT</code>, it returns the value of the last <code>expr</code> instead of the generated <code>AUTO_INCREMENT</code> value.</p><p>Returns <code>0</code> if the previous statement did not change an <code>AUTO_INCREMENT</code> value. <b>mysqli_insert_id()</b> must be called immediately after the statement that generated the value.</p>
		 * @var int|string <p>The value of the <code>AUTO_INCREMENT</code> field that was updated by the previous query. Returns zero if there was no previous query on the connection or if the query did not update an <code>AUTO_INCREMENT</code> value.</p><p>Only statements issued using the current connection affect the return value. The value is not affected by statements issued using other connections or clients.</p><p><b>Note</b>:</p><p>If the number is greater than the maximum int value, it will be returned as a string.</p>
		 * @link https://php.net/manual/en/mysqli.insert-id.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $insert_id;

		/**
		 * Returns the version of the MySQL server
		 * <p>Object-oriented style</p><p>Returns a string representing the version of the MySQL server that the MySQLi extension is connected to.</p>
		 * @var string <p>A character string representing the server version.</p>
		 * @link https://php.net/manual/en/mysqli.get-server-info.php
		 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_version()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $server_info;

		/**
		 * Returns the version of the MySQL server as an integer
		 * <p>Object-oriented style</p><p>The <b>mysqli_get_server_version()</b> function returns the version of the server connected to (represented by the <code>mysql</code> parameter) as an integer.</p>
		 * @var int <p>An integer representing the server version.</p><p>The form of this version number is <code>main_version &#42; 10000 + minor_version &#42; 100 + sub_version</code> (i.e. version 4.1.0 is 40100).</p>
		 * @link https://php.net/manual/en/mysqli.get-server-version.php
		 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_info()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $server_version;

		/**
		 * Returns the SQLSTATE error from previous MySQL operation
		 * <p>Object-oriented style</p><p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <code>'00000'</code> means no error. The values are specified by ANSI SQL and ODBC. For a list of possible values, see http://dev.mysql.com/doc/mysql/en/error-handling.html.</p><p><b>Note</b>:</p><p>Note that not all MySQL errors are yet mapped to SQLSTATE's. The value <code>HY000</code> (general error) is used for unmapped errors.</p>
		 * @var string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <code>'00000'</code> means no error.</p>
		 * @link https://php.net/manual/en/mysqli.sqlstate.php
		 * @see mysqli_errno(), mysqli_error()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $sqlstate;

		/**
		 * Returns the version of the MySQL protocol used
		 * <p>Object-oriented style</p><p>Returns an integer representing the MySQL protocol version used by the connection represented by the <code>mysql</code> parameter.</p>
		 * @var int <p>Returns an integer representing the protocol version.</p>
		 * @link https://php.net/manual/en/mysqli.get-proto-info.php
		 * @see mysqli_get_host_info()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $protocol_version;

		/**
		 * Returns the thread ID for the current connection
		 * <p>Object-oriented style</p><p>The <b>mysqli_thread_id()</b> function returns the thread ID for the current connection which can then be killed using the <code>mysqli_kill()</code> function. If the connection is lost and you reconnect with <code>mysqli_ping()</code>, the thread ID will be other. Therefore you should get the thread ID only when you need it.</p><p><b>Note</b>:</p><p>The thread ID is assigned on a connection-by-connection basis. Hence, if the connection is broken and then re-established a new thread ID will be assigned.</p><p>To kill a running query you can use the SQL command <code>KILL QUERY processid</code>.</p>
		 * @var int <p>Returns the Thread ID for the current connection.</p>
		 * @link https://php.net/manual/en/mysqli.thread-id.php
		 * @see mysqli_kill()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $thread_id;

		/**
		 * Returns the number of warnings from the last query for the given link
		 * <p>Object-oriented style</p><p>Returns the number of warnings from the last query in the connection.</p><p><b>Note</b>:</p><p>For retrieving warning messages you can use the SQL command <code>SHOW WARNINGS [limit row_count]</code>.</p>
		 * @var int <p>Number of warnings or zero if there are no warnings.</p>
		 * @link https://php.net/manual/en/mysqli.warning-count.php
		 * @see mysqli_errno(), mysqli_error(), mysqli_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $warning_count;

		/**
		 * Open a new connection to the MySQL server
		 * <p>Object-oriented style</p><p>Opens a connection to the MySQL Server.</p>
		 * @param string $hostname <p>Can be either a host name or an IP address. The local host is assumed when passing the <b><code>null</code></b> value or the string "localhost" to this parameter. When possible, pipes will be used instead of the TCP/IP protocol. The TCP/IP protocol is used if a host name and port number are provided together e.g. <code>localhost:3308</code>.</p> <p>Prepending host by <code>p:</code> opens a persistent connection. <code>mysqli_change_user()</code> is automatically called on connections opened from the connection pool.</p>
		 * @param string $username <p>The MySQL user name.</p>
		 * @param string $password <p>If not provided or <b><code>null</code></b>, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password is provided or not).</p>
		 * @param string $database <p>If provided will specify the default database to be used when performing queries.</p>
		 * @param int $port <p>Specifies the port number to attempt to connect to the MySQL server.</p>
		 * @param string $socket <p>Specifies the socket or named pipe that should be used.</p> <p><b>Note</b>:</p><p>Specifying the <code>socket</code> parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the <code>hostname</code> parameter.</p>
		 * @return void <p><b>mysqli::__construct()</b> always returns an object which represents the connection to a MySQL Server, regardless of it being successful or not.</p><p><code>mysqli_connect()</code> returns an object which represents the connection to a MySQL Server, or <b><code>false</code></b> on failure.</p><p><code>mysqli::connect()</code> returns <b><code>null</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.construct.php
		 * @see mysqli_real_connect(), mysqli_options(), mysqli_connect_errno(), mysqli_connect_error(), mysqli_close()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $hostname = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $password = 'ini_get("mysqli.default_pw")', string $database = "", int $port  = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")') {}

		/**
		 * Turns on or off auto-committing database modifications
		 * <p>Object-oriented style</p><p>Turns on or off auto-commit mode on queries for the database connection.</p><p>To determine the current state of autocommit use the SQL command <code>SELECT @@autocommit</code>.</p>
		 * @param bool $enable <p>Whether to turn on auto-commit or not.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.autocommit.php
		 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_rollback()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function autocommit(bool $enable): bool {}

		/**
		 * Starts a transaction
		 * <p>Object-oriented style</p><p>Begins a transaction. Requires the InnoDB engine (it is enabled by default). For additional details about how MySQL transactions work, see http://dev.mysql.com/doc/mysql/en/commit.html.</p>
		 * @param int $flags <p>Valid flags are:</p> <ul> <li> <p><b><code>MYSQLI_TRANS_START_READ_ONLY</code></b>: Start the transaction as "START TRANSACTION READ ONLY". Requires MySQL 5.6 and above.</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_READ_WRITE</code></b>: Start the transaction as "START TRANSACTION READ WRITE". Requires MySQL 5.6 and above.</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT</code></b>: Start the transaction as "START TRANSACTION WITH CONSISTENT SNAPSHOT".</p> </li> </ul>
		 * @param ?string $name <p>Savepoint name for the transaction.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.begin-transaction.php
		 * @see mysqli_autocommit(), mysqli_commit(), mysqli_rollback()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function begin_transaction(int $flags = 0, ?string $name = null): bool {}

		/**
		 * Changes the user of the specified database connection
		 * <p>Object-oriented style</p><p>Changes the user of the specified database connection and sets the current database.</p><p>In order to successfully change users a valid <code>username</code> and <code>password</code> parameters must be provided and that user must have sufficient permissions to access the desired database. If for any reason authorization fails, the current user authentication will remain.</p>
		 * @param string $username <p>The MySQL user name.</p>
		 * @param string $password <p>The MySQL password.</p>
		 * @param ?string $database <p>The database to change to.</p> <p>If desired, the <b><code>null</code></b> value may be passed resulting in only changing the user and not selecting a database. To select a database in this case use the <code>mysqli_select_db()</code> function.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.change-user.php
		 * @see mysqli_connect(), mysqli_select_db()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function change_user(string $username, string $password, ?string $database): bool {}

		/**
		 * Returns the current character set of the database connection
		 * <p>Object-oriented style</p><p>Returns the current character set of the database connection.</p>
		 * @return string <p>The current character set of the connection</p>
		 * @link https://php.net/manual/en/mysqli.character-set-name.php
		 * @see mysqli_set_charset(), mysqli_real_escape_string()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function character_set_name(): string {}

		/**
		 * Closes a previously opened database connection
		 * <p>Object-oriented style</p><p>Closes a previously opened database connection.</p><p>Open non-persistent MySQL connections and result sets are automatically closed when their objects are destroyed. Explicitly closing open connections and freeing result sets is optional. However, it's a good idea to close the connection as soon as the script finishes performing all of its database operations, if it still has a lot of processing to do after getting the results.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.close.php
		 * @see mysqli_init(), mysqli_real_connect(), mysqli_free_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function close(): bool {}

		/**
		 * Commits the current transaction
		 * <p>Object-oriented style</p><p>Commits the current transaction for the database connection.</p>
		 * @param int $flags <p>A bitmask of <b><code>MYSQLI_TRANS_COR_&#42;</code></b> constants.</p>
		 * @param ?string $name <p>If provided then <code>COMMIT/&#42;name&#42;/</code> is executed.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.commit.php
		 * @see mysqli_autocommit(), mysqli_begin_transaction(), mysqli_rollback(), mysqli_savepoint()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function commit(int $flags = 0, ?string $name = null): bool {}

		/**
		 * Open a new connection to the MySQL server
		 * <p>Object-oriented style</p><p>Opens a connection to the MySQL Server.</p>
		 * @param string $hostname <p>Can be either a host name or an IP address. The local host is assumed when passing the <b><code>null</code></b> value or the string "localhost" to this parameter. When possible, pipes will be used instead of the TCP/IP protocol. The TCP/IP protocol is used if a host name and port number are provided together e.g. <code>localhost:3308</code>.</p> <p>Prepending host by <code>p:</code> opens a persistent connection. <code>mysqli_change_user()</code> is automatically called on connections opened from the connection pool.</p>
		 * @param string $username <p>The MySQL user name.</p>
		 * @param string $password <p>If not provided or <b><code>null</code></b>, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password is provided or not).</p>
		 * @param string $database <p>If provided will specify the default database to be used when performing queries.</p>
		 * @param int $port <p>Specifies the port number to attempt to connect to the MySQL server.</p>
		 * @param string $socket <p>Specifies the socket or named pipe that should be used.</p> <p><b>Note</b>:</p><p>Specifying the <code>socket</code> parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the <code>hostname</code> parameter.</p>
		 * @return void <p><b>mysqli::__construct()</b> always returns an object which represents the connection to a MySQL Server, regardless of it being successful or not.</p><p><code>mysqli_connect()</code> returns an object which represents the connection to a MySQL Server, or <b><code>false</code></b> on failure.</p><p><code>mysqli::connect()</code> returns <b><code>null</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.construct.php
		 * @see mysqli_real_connect(), mysqli_options(), mysqli_connect_errno(), mysqli_connect_error(), mysqli_close()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function connect(string $hostname = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $password = 'ini_get("mysqli.default_pw")', string $database = "", int $port  = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")'): void {}

		/**
		 * Performs debugging operations
		 * <p>Object-oriented style</p><p>Performs debugging operations using the Fred Fish debugging library.</p>
		 * @param string $options <p>A string representing the debugging operation to perform</p> <p>The debug control string is a sequence of colon separated fields as follows: <code><pre>&lt;field_1&gt;:&lt;field_2&gt;:&lt;field_N&gt;</pre></code> Each field consists of a mandatory flag character followed by an optional <code>,</code> and comma separated list of modifiers: <code>flag[,modifier,modifier,...,modifier]</code></p> <p></p> <b>Recognized Flag Characters</b>   <code>option</code> character Description     O <b><code>MYSQLND_DEBUG_FLUSH</code></b>   A/a <b><code>MYSQLND_DEBUG_APPEND</code></b>   F <b><code>MYSQLND_DEBUG_DUMP_FILE</code></b>   i <b><code>MYSQLND_DEBUG_DUMP_PID</code></b>   L <b><code>MYSQLND_DEBUG_DUMP_LINE</code></b>   m <b><code>MYSQLND_DEBUG_TRACE_MEMORY_CALLS</code></b>   n <b><code>MYSQLND_DEBUG_DUMP_LEVEL</code></b>   o output to file   T <b><code>MYSQLND_DEBUG_DUMP_TIME</code></b>   t <b><code>MYSQLND_DEBUG_DUMP_TRACE</code></b>   x <b><code>MYSQLND_DEBUG_PROFILE_CALLS</code></b>
		 * @return bool <p>Returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/mysqli.debug.php
		 * @see mysqli_dump_debug_info(), mysqli_report()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function debug(string $options): bool {}

		/**
		 * Dump debugging information into the log
		 * <p>Object-oriented style</p><p>This function is designed to be executed by an user with the SUPER privilege and is used to dump debugging information into the log for the MySQL Server relating to the connection.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.dump-debug-info.php
		 * @see mysqli_debug()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function dump_debug_info(): bool {}

		/**
		 * Returns a character set object
		 * <p>Object-oriented style</p><p>Returns a character set object providing several properties of the current active character set.</p>
		 * @return ?object <p>The function returns a character set object with the following properties:</p>  <code>charset</code>  <p>Character set name</p>  <code>collation</code>  <p>Collation name</p>  <code>dir</code>  <p>Directory the charset description was fetched from (&#63;) or "" for built-in character sets</p>  <code>min_length</code>  <p>Minimum character length in bytes</p>  <code>max_length</code>  <p>Maximum character length in bytes</p>  <code>number</code>  <p>Internal character set number</p>  <code>state</code>  <p>Character set status (&#63;)</p>
		 * @link https://php.net/manual/en/mysqli.get-charset.php
		 * @see mysqli_character_set_name(), mysqli_set_charset()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function get_charset(): ?object {}

		/**
		 * Get MySQL client info
		 * <p>Object-oriented style</p><p>Returns a string that represents the MySQL client library version.</p>
		 * @return string <p>A string that represents the MySQL client library version.</p>
		 * @link https://php.net/manual/en/mysqli.get-client-info.php
		 * @see mysqli_get_client_version(), mysqli_get_server_info(), mysqli_get_server_version()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function get_client_info(): string {}

		/**
		 * Returns statistics about the client connection
		 * <p>Object-oriented style</p><p>Returns statistics about the client connection.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
		 * @return array <p>Returns an array with connection stats.</p>
		 * @link https://php.net/manual/en/mysqli.get-connection-stats.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function get_connection_stats(): array {}

		/**
		 * Returns the version of the MySQL server
		 * <p>Object-oriented style</p><p>Returns a string representing the version of the MySQL server that the MySQLi extension is connected to.</p>
		 * @return string <p>A character string representing the server version.</p>
		 * @link https://php.net/manual/en/mysqli.get-server-info.php
		 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_version()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function get_server_info(): string {}

		/**
		 * Get result of SHOW WARNINGS
		 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mysqli_warning|false
		 * @link https://php.net/manual/en/mysqli.get-warnings.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function get_warnings(): \mysqli_warning|false {}

		/**
		 * Initializes MySQLi and returns an object for use with mysqli_real_connect()
		 * <p>Object-oriented style</p><p>Allocates or initializes a MYSQL object suitable for <code>mysqli_options()</code> and <code>mysqli_real_connect()</code>.</p><p><b>Note</b>:</p><p>Any subsequent calls to any mysqli function (except <code>mysqli_options()</code> and <code>mysqli_ssl_set()</code>) will fail until <code>mysqli_real_connect()</code> was called.</p>
		 * @return ?bool <p><b>mysqli::init()</b> returns <b><code>null</code></b> on success, or <b><code>false</code></b> on failure. <b>mysqli_init()</b> returns an object on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.init.php
		 * @see mysqli_options(), mysqli_close(), mysqli_real_connect(), mysqli_connect()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function init(): ?bool {}

		/**
		 * Asks the server to kill a MySQL thread
		 * <p>Object-oriented style</p><p>This function is used to ask the server to kill a MySQL thread specified by the <code>process_id</code> parameter. This value must be retrieved by calling the <code>mysqli_thread_id()</code> function.</p><p>To stop a running query you should use the SQL command <code>KILL QUERY processid</code>.</p>
		 * @param int $process_id
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.kill.php
		 * @see mysqli_thread_id()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function kill(int $process_id): bool {}

		/**
		 * Check if there are any more query results from a multi query
		 * <p>Object-oriented style</p><p>Indicates if one or more result sets are available from a previous call to <code>mysqli_multi_query()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if one or more result sets (including errors) are available from a previous call to <code>mysqli_multi_query()</code>, otherwise <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/mysqli.more-results.php
		 * @see mysqli_multi_query(), mysqli_next_result(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function more_results(): bool {}

		/**
		 * Performs one or more queries on the database
		 * <p>Object-oriented style</p><p>Executes one or multiple queries which are concatenated by a semicolon.</p><p>Queries are sent asynchronously in a single call to the database, but the database processes them sequentially. <b>mysqli_multi_query()</b> waits for the first query to complete before returning control to PHP. The MySQL server will then process the next query in the sequence. Once the next result is ready, MySQL will wait for the next execution of <code>mysqli_next_result()</code> from PHP.</p><p>It is recommended to use do-while to process multiple queries. The connection will be busy until all queries have completed and their results are fetched to PHP. No other statement can be issued on the same connection until all queries are processed. To proceed to the next query in the sequence, use <code>mysqli_next_result()</code>. If the next result is not ready yet, mysqli will wait for the response from the MySQL server. To check if there are more results, use <code>mysqli_more_results()</code>.</p><p>For queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <code>mysqli_use_result()</code> or <code>mysqli_store_result()</code> can be used to retrieve the result set. For queries which do not produce a result set, the same functions can be used to retrieve information such as the number of affected rows.</p><p>Executing <code>CALL</code> statements for stored procedures can produce multiple result sets. If the stored procedure contains <code>SELECT</code> statements, the result sets are returned in the order that they are produced as the procedure executes. In general, the caller cannot know how many result sets a procedure will return and must be prepared to retrieve multiple results. The final result from the procedure is a status result that includes no result set. The status indicates whether the procedure succeeded or an error occurred.</p>
		 * @param string $query <p>A string containing the queries to be executed. Multiple queries must be separated by a semicolon.</p> <p><b>Warning</b></p> Security warning: SQL injection<p>If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the <code>mysqli_real_escape_string()</code> function.</p>
		 * @return bool <p>Returns <b><code>false</code></b> if the first statement failed. To retrieve subsequent errors from other statements you have to call <code>mysqli_next_result()</code> first.</p>
		 * @link https://php.net/manual/en/mysqli.multi-query.php
		 * @see mysqli_query(), mysqli_use_result(), mysqli_store_result(), mysqli_next_result(), mysqli_more_results()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function multi_query(string $query): bool {}

		/**
		 * Prepare next result from multi_query
		 * <p>Object-oriented style</p><p>Prepares next result set from a previous call to <code>mysqli_multi_query()</code> which can be retrieved by <code>mysqli_store_result()</code> or <code>mysqli_use_result()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. Also returns <b><code>false</code></b> if the next statement resulted in an error, unlike <code>mysqli_more_results()</code>.</p>
		 * @link https://php.net/manual/en/mysqli.next-result.php
		 * @see mysqli_multi_query(), mysqli_more_results(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next_result(): bool {}

		/**
		 * Set options
		 * <p>Object-oriented style</p><p>Used to set extra connect options and affect behavior for a connection.</p><p>This function may be called multiple times to set several options.</p><p><b>mysqli_options()</b> should be called after <code>mysqli_init()</code> and before <code>mysqli_real_connect()</code>.</p>
		 * @param int $option <p>The option that you want to set. It can be one of the following values:</p> <b>Valid options</b>   Name Description     <b><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></b> Connection timeout in seconds   <b><code>MYSQLI_OPT_READ_TIMEOUT</code></b> Command execution result timeout in seconds. Available as of PHP 7.2.0.   <b><code>MYSQLI_OPT_LOCAL_INFILE</code></b> Enable/disable use of <code>LOAD LOCAL INFILE</code>   <b><code>MYSQLI_INIT_COMMAND</code></b> Command to execute after when connecting to MySQL server   <b><code>MYSQLI_SET_CHARSET_NAME</code></b> The charset to be set as default.   <b><code>MYSQLI_READ_DEFAULT_FILE</code></b>  Read options from named option file instead of my.cnf Not supported by mysqlnd.    <b><code>MYSQLI_READ_DEFAULT_GROUP</code></b>  Read options from the named group from my.cnf or the file specified with <b><code>MYSQL_READ_DEFAULT_FILE</code></b>. Not supported by mysqlnd.    <b><code>MYSQLI_SERVER_PUBLIC_KEY</code></b>  RSA public key file used with the SHA-256 based authentication.    <b><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></b>  The size of the internal command/network buffer. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></b>  Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></b>  Convert integer and float columns back to PHP numbers. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></b>  Whether to verify server certificate or not.
		 * @param string|int $value <p>The value for the option.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.options.php
		 * @see mysqli_init(), mysqli_real_connect()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function options(int $option, string|int $value): bool {}

		/**
		 * Pings a server connection, or tries to reconnect if the connection has gone down
		 * <p>Object-oriented style</p><p>Checks whether the connection to the server is working. If it has gone down and global option mysqli.reconnect is enabled, an automatic reconnection is attempted.</p><p><b>Note</b>:  The php.ini setting mysqli.reconnect is ignored by the mysqlnd driver, so automatic reconnection is never attempted. </p><p>This function can be used by clients that remain idle for a long while, to check whether the server has closed the connection and reconnect if necessary.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.ping.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function ping(): bool {}

		/**
		 * Poll connections
		 * <p>Object-oriented style</p><p>Poll connections. The method can be used as static.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
		 * @param ?array $read <p>List of connections to check for outstanding results that can be read.</p>
		 * @param ?array $error <p>List of connections on which an error occurred, for example, query failure or lost connection.</p>
		 * @param array $reject <p>List of connections rejected because no asynchronous query has been run on for which the function could poll results.</p>
		 * @param int $seconds <p>Maximum number of seconds to wait, must be non-negative.</p>
		 * @param int $microseconds <p>Maximum number of microseconds to wait, must be non-negative.</p>
		 * @return int|false <p>Returns number of ready connections upon success, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mysqli.poll.php
		 * @see mysqli_query(), mysqli_reap_async_query()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public static function poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0): int|false {}

		/**
		 * Prepares an SQL statement for execution
		 * <p>Object-oriented style</p><p>Prepares the SQL query, and returns a statement handle to be used for further operations on the statement. The query must consist of a single SQL statement.</p><p>The statement template can contain zero or more question mark (<code>&#63;</code>) parameter markers&#8288;&mdash;also called placeholders. The parameter markers must be bound to application variables using <code>mysqli_stmt_bind_param()</code> before executing the statement.</p>
		 * @param string $query <p>The query, as a string. It must consist of a single SQL statement.</p> <p>The SQL statement may contain zero or more parameter markers represented by question mark (<code>&#63;</code>) characters at the appropriate positions.</p> <p><b>Note</b>:</p><p>The markers are legal only in certain places in SQL statements. For example, they are permitted in the <code>VALUES()</code> list of an <code>INSERT</code> statement (to specify column values for a row), or in a comparison with a column in a <code>WHERE</code> clause to specify a comparison value.</p> <p>However, they are not permitted for identifiers (such as table or column names), or to specify both operands of a binary operator such as the <code>=</code> equal sign. The latter restriction is necessary because it would be impossible to determine the parameter type. In general, parameters are legal only in Data Manipulation Language (DML) statements, and not in Data Definition Language (DDL) statements.</p>
		 * @return mysqli_stmt|false <p><b>mysqli_prepare()</b> returns a statement object or <b><code>false</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.prepare.php
		 * @see mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_get_result(), mysqli_stmt_close()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function prepare(string $query): \mysqli_stmt|false {}

		/**
		 * Performs a query on the database
		 * <p>Object-oriented style</p><p>Performs a <code>query</code> against the database.</p><p>For non-DML queries (not INSERT, UPDATE or DELETE), this function is similar to calling <code>mysqli_real_query()</code> followed by either <code>mysqli_use_result()</code> or <code>mysqli_store_result()</code>.</p><p><b>Note</b>:</p><p>In the case where you pass a statement to <b>mysqli_query()</b> that is longer than <code>max_allowed_packet</code> of the server, the returned error codes are different depending on whether you are using MySQL Native Driver (<code>mysqlnd</code>) or MySQL Client Library (<code>libmysqlclient</code>). The behavior is as follows:</p><p><code>mysqlnd</code> on Linux returns an error code of 1153. The error message means got a packet bigger than <code>max_allowed_packet</code> bytes.</p><p><code>mysqlnd</code> on Windows returns an error code 2006. This error message means server has gone away.</p><p><code>libmysqlclient</code> on all platforms returns an error code 2006. This error message means server has gone away.</p>
		 * @param string $query <p>The query string.</p> <p><b>Warning</b></p> Security warning: SQL injection<p>If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the <code>mysqli_real_escape_string()</code> function.</p>
		 * @param int $result_mode <p>The result mode can be one of 3 constants indicating how the result will be returned from the MySQL server.</p> <p><b><code>MYSQLI_STORE_RESULT</code></b> (default) - returns a <code>mysqli_result</code> object with buffered result set.</p> <p><b><code>MYSQLI_USE_RESULT</code></b> - returns a <code>mysqli_result</code> object with unbuffered result set. As long as there are pending records waiting to be fetched, the connection line will be busy and all subsequent calls will return error <code>Commands out of sync</code>. To avoid the error all records must be fetched from the server or the result set must be discarded by calling <code>mysqli_free_result()</code>.</p> <p><b><code>MYSQLI_ASYNC</code></b> (available with mysqlnd) - the query is performed asynchronously and no result set is immediately returned. <code>mysqli_poll()</code> is then used to get results from such queries. Used in combination with either <b><code>MYSQLI_STORE_RESULT</code></b> or <b><code>MYSQLI_USE_RESULT</code></b> constant.</p>
		 * @return mysqli_result|bool <p>Returns <b><code>false</code></b> on failure. For successful queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <b>mysqli_query()</b> will return a <code>mysqli_result</code> object. For other successful queries, <b>mysqli_query()</b> will return <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/mysqli.query.php
		 * @see mysqli_real_query(), mysqli_multi_query(), mysqli_prepare(), mysqli_free_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function query(string $query, int $result_mode = MYSQLI_STORE_RESULT): \mysqli_result|bool {}

		/**
		 * Opens a connection to a mysql server
		 * <p>Object-oriented style</p><p>Establish a connection to a MySQL database engine.</p><p>This function differs from <code>mysqli_connect()</code>:</p><p><b>mysqli_real_connect()</b> needs a valid object which has to be created by function <code>mysqli_init()</code>.</p><p>With the <code>mysqli_options()</code> function you can set various options for connection.</p><p>There is a <code>flags</code> parameter.</p>
		 * @param string $host <p>Can be either a host name or an IP address. Passing the <b><code>null</code></b> value or the string "localhost" to this parameter, the local host is assumed. When possible, pipes will be used instead of the TCP/IP protocol.</p>
		 * @param string $username <p>The MySQL user name.</p>
		 * @param string $passwd <p>If provided or <b><code>null</code></b>, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password as provided or not).</p>
		 * @param string $dbname <p>If provided will specify the default database to be used when performing queries.</p>
		 * @param int $port <p>Specifies the port number to attempt to connect to the MySQL server.</p>
		 * @param string $socket <p>Specifies the socket or named pipe that should be used.</p> <p><b>Note</b>:</p><p>Specifying the <code>socket</code> parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the <code>host</code> parameter.</p>
		 * @param int $flags <p>With the parameter <code>flags</code> you can set different connection options:</p>  <b>Supported flags</b>   Name Description     <b><code>MYSQLI_CLIENT_COMPRESS</code></b> Use compression protocol   <b><code>MYSQLI_CLIENT_FOUND_ROWS</code></b> return number of matched rows, not the number of affected rows   <b><code>MYSQLI_CLIENT_IGNORE_SPACE</code></b> Allow spaces after function names. Makes all function names reserved words.   <b><code>MYSQLI_CLIENT_INTERACTIVE</code></b>  Allow <code>interactive_timeout</code> seconds (instead of <code>wait_timeout</code> seconds) of inactivity before closing the connection    <b><code>MYSQLI_CLIENT_SSL</code></b> Use SSL (encryption)   <b><code>MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</code></b>  Like <b><code>MYSQLI_CLIENT_SSL</code></b>, but disables validation of the provided SSL certificate. This is only for installations using MySQL Native Driver and MySQL 5.6 or later.     <p><b>Note</b>:</p><p>For security reasons the <b><code>MULTI_STATEMENT</code></b> flag is not supported in PHP. If you want to execute multiple queries use the <code>mysqli_multi_query()</code> function.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.real-connect.php
		 * @see mysqli_connect(), mysqli_init(), mysqli_options(), mysqli_ssl_set(), mysqli_close()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function real_connect(string $host = null, string $username = null, string $passwd = null, string $dbname = null, int $port = null, string $socket = null, int $flags = null): bool {}

		/**
		 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
		 * <p>Object-oriented style</p><p>This function is used to create a legal SQL string that you can use in an SQL statement. The given string is encoded to produce an escaped SQL string, taking into account the current character set of the connection.</p><p>The character set must be set either at the server level, or with the API function <code>mysqli_set_charset()</code> for it to affect <b>mysqli_real_escape_string()</b>. See the concepts section on character sets for more information.</p>
		 * @param string $string <p>The string to be escaped.</p> <p>Characters encoded are <code>NUL (ASCII 0), \n, \r, \, ', ", and Control-Z</code>.</p>
		 * @return string <p>Returns an escaped string.</p>
		 * @link https://php.net/manual/en/mysqli.real-escape-string.php
		 * @see mysqli_set_charset()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function real_escape_string(string $string): string {}

		/**
		 * Execute an SQL query
		 * <p>Object-oriented style</p><p>Executes a single query against the database whose result can then be retrieved or stored using the <code>mysqli_store_result()</code> or <code>mysqli_use_result()</code> functions.</p><p>In order to determine if a given query should return a result set or not, see <code>mysqli_field_count()</code>.</p>
		 * @param string $query <p>The query string.</p> <p><b>Warning</b></p> Security warning: SQL injection<p>If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the <code>mysqli_real_escape_string()</code> function.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.real-query.php
		 * @see mysqli_query(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function real_query(string $query): bool {}

		/**
		 * Get result from async query
		 * <p>Object-oriented style</p><p>Get result from async query.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
		 * @return mysqli_result|bool <p>Returns <b><code>false</code></b> on failure. For successful queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <b>mysqli_reap_async_query()</b> will return a <code>mysqli_result</code> object. For other successful queries, <b>mysqli_reap_async_query()</b> will return <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/mysqli.reap-async-query.php
		 * @see mysqli_poll()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function reap_async_query(): \mysqli_result|bool {}

		/**
		 * Refreshes
		 * <p>Object-oriented style</p><p>Flushes tables or caches, or resets the replication server information.</p>
		 * @param int $flags <p>The options to refresh, using the MYSQLI_REFRESH_&#42; constants as documented within the MySQLi constants documentation.</p> <p>See also the official MySQL Refresh documentation.</p>
		 * @return bool <p><b><code>true</code></b> if the refresh was a success, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/mysqli.refresh.php
		 * @see mysqli_poll()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function refresh(int $flags): bool {}

		/**
		 * Removes the named savepoint from the set of savepoints of the current transaction
		 * <p>Object-oriented style</p><p>This function is identical to executing <code>$mysqli-&gt;query("RELEASE SAVEPOINT `$name`");</code>. This function does not trigger commit or rollback.</p>
		 * @param string $name <p>The identifier of the savepoint.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.release-savepoint.php
		 * @see mysqli_savepoint()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function release_savepoint(string $name): bool {}

		/**
		 * Rolls back current transaction
		 * <p>Object-oriented style</p><p>Rollbacks the current transaction for the database.</p>
		 * @param int $flags <p>A bitmask of <b><code>MYSQLI_TRANS_COR_&#42;</code></b> constants.</p>
		 * @param ?string $name <p>If provided then <code>ROLLBACK/&#42;name&#42;/</code> is executed.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.rollback.php
		 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_autocommit(), mysqli_release_savepoint()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rollback(int $flags = 0, ?string $name = null): bool {}

		/**
		 * Set a named transaction savepoint
		 * <p>Object-oriented style</p><p>This function is identical to executing <code>$mysqli-&gt;query("SAVEPOINT `$name`");</code></p>
		 * @param string $name <p>The identifier of the savepoint.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.savepoint.php
		 * @see mysqli_release_savepoint()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function savepoint(string $name): bool {}

		/**
		 * Selects the default database for database queries
		 * <p>Object-oriented style</p><p>Selects the default database to be used when performing queries against the database connection.</p><p><b>Note</b>:</p><p>This function should only be used to change the default database for the connection. You can select the default database with 4th parameter in <code>mysqli_connect()</code>.</p>
		 * @param string $database <p>The database name.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.select-db.php
		 * @see mysqli_connect(), mysqli_real_connect()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function select_db(string $database): bool {}

		/**
		 * Sets the client character set
		 * <p>Object-oriented style</p><p>Sets the character set to be used when sending data from and to the database server.</p>
		 * @param string $charset <p>The desired character set.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli.set-charset.php
		 * @see mysqli_character_set_name(), mysqli_real_escape_string()
		 * @since PHP 5 >= 5.0.5, PHP 7, PHP 8
		 */
		public function set_charset(string $charset): bool {}

		/**
		 * Used for establishing secure connections using SSL
		 * <p>Object-oriented style</p><p>Used for establishing secure connections using SSL. It must be called before <code>mysqli_real_connect()</code>. This function does nothing unless OpenSSL support is enabled.</p>
		 * @param ?string $key <p>The path name to the key file.</p>
		 * @param ?string $certificate <p>The path name to the certificate file.</p>
		 * @param ?string $ca_certificate <p>The path name to the certificate authority file.</p>
		 * @param ?string $ca_path <p>The pathname to a directory that contains trusted SSL CA certificates in PEM format.</p>
		 * @param ?string $cipher_algos <p>A list of allowable ciphers to use for SSL encryption.</p>
		 * @return bool <p>This function always returns <b><code>true</code></b> value. If SSL setup is incorrect <code>mysqli_real_connect()</code> will return an error when you attempt to connect.</p>
		 * @link https://php.net/manual/en/mysqli.ssl-set.php
		 * @see mysqli_options(), mysqli_real_connect()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function ssl_set(?string $key, ?string $certificate, ?string $ca_certificate, ?string $ca_path, ?string $cipher_algos): bool {}

		/**
		 * Gets the current system status
		 * <p>Object-oriented style</p><p><b>mysqli_stat()</b> returns a string containing information similar to that provided by the 'mysqladmin status' command. This includes uptime in seconds and the number of running threads, questions, reloads, and open tables.</p>
		 * @return string|false <p>A string describing the server status. <b><code>false</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.stat.php
		 * @see mysqli_get_server_info()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function stat(): string|false {}

		/**
		 * Initializes a statement and returns an object for use with mysqli_stmt_prepare
		 * <p>Object-oriented style</p><p>Allocates and initializes a statement object suitable for <code>mysqli_stmt_prepare()</code>.</p><p><b>Note</b>:</p><p>Any subsequent calls to any mysqli_stmt function will fail until <code>mysqli_stmt_prepare()</code> was called.</p>
		 * @return mysqli_stmt|false <p>Returns an object.</p>
		 * @link https://php.net/manual/en/mysqli.stmt-init.php
		 * @see mysqli_stmt_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function stmt_init(): \mysqli_stmt|false {}

		/**
		 * Transfers a result set from the last query
		 * <p>Object-oriented style</p><p>Transfers the result set from the last query on the database connection represented by the <code>mysql</code> parameter to be used with the <code>mysqli_data_seek()</code> function.</p>
		 * @param int $mode <p>The option that you want to set. It can be one of the following values:</p> <b>Valid options</b>   Name Description     <b><code>MYSQLI_STORE_RESULT_COPY_DATA</code></b> Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default, mysqlnd will use a reference logic to avoid copying and duplicating results held in memory. For certain result sets, for example, result sets with many small rows, the copy approach can reduce the overall memory usage because PHP variables holding results may be released earlier (available with mysqlnd only)
		 * @return mysqli_result|false <p>Returns a buffered result object or <b><code>false</code></b> if an error occurred.</p><p><b>Note</b>:</p><p><b>mysqli_store_result()</b> returns <b><code>false</code></b> in case the query didn't return a result set (if the query was, for example an INSERT statement). This function also returns <b><code>false</code></b> if the reading of the result set failed. You can check if you have got an error by checking if <code>mysqli_error()</code> doesn't return an empty string, if <code>mysqli_errno()</code> returns a non zero value, or if <code>mysqli_field_count()</code> returns a non zero value. Also possible reason for this function returning <b><code>false</code></b> after successful call to <code>mysqli_query()</code> can be too large result set (memory for it cannot be allocated). If <code>mysqli_field_count()</code> returns a non-zero value, the statement should have produced a non-empty result set.</p>
		 * @link https://php.net/manual/en/mysqli.store-result.php
		 * @see mysqli_real_query(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function store_result(int $mode = 0): \mysqli_result|false {}

		/**
		 * Returns whether thread safety is given or not
		 * <p>Object-oriented style</p><p>Tells whether the client library is compiled as thread-safe.</p>
		 * @return bool <p><b><code>true</code></b> if the client library is thread-safe, otherwise <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/mysqli.thread-safe.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function thread_safe(): bool {}

		/**
		 * Initiate a result set retrieval
		 * <p>Object-oriented style</p><p>Used to initiate the retrieval of a result set from the last query executed using the <code>mysqli_real_query()</code> function on the database connection.</p><p>Either this or the <code>mysqli_store_result()</code> function must be called before the results of a query can be retrieved, and one or the other must be called to prevent the next query on that database connection from failing.</p><p><b>Note</b>:</p><p>The <b>mysqli_use_result()</b> function does not transfer the entire result set from the database and hence cannot be used functions such as <code>mysqli_data_seek()</code> to move to a particular row within the set. To use this functionality, the result set must be stored using <code>mysqli_store_result()</code>. One should not use <b>mysqli_use_result()</b> if a lot of processing on the client side is performed, since this will tie up the server and prevent other threads from updating any tables from which the data is being fetched.</p>
		 * @return mysqli_result|false <p>Returns an unbuffered result object or <b><code>false</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/mysqli.use-result.php
		 * @see mysqli_real_query(), mysqli_store_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function use_result(): \mysqli_result|false {}
	}

	/**
	 * <p>The <b>mysqli_driver</b> class is an instance of the monostate pattern, i.e. there is only one driver which can be accessed though an arbitrary amount of <b>mysqli_driver</b> instances.</p>
	 * @link https://php.net/manual/en/class.mysqli-driver.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	final class mysqli_driver {

		/**
		 * @var string <p>The Client API header version</p>
		 * @link https://php.net/manual/en/class.mysqli-driver.php#mysqli-driver.props.client-info
		 */
		public $client_info;

		/**
		 * @var int <p>The Client version</p>
		 * @link https://php.net/manual/en/class.mysqli-driver.php#mysqli-driver.props.client-version
		 */
		public $client_version;

		/**
		 * @var int <p>The MySQLi Driver version</p> <p><b>Warning</b></p><p>This property has been <i>deprecated</i> as of PHP 8.1.0. Relying on this property is highly discouraged.</p>
		 * @link https://php.net/manual/en/class.mysqli-driver.php#mysqli-driver.props.driver-version
		 */
		public $driver_version;

		/**
		 * @var bool <p>Whether MySQLi Embedded support is enabled</p> <p><b>Warning</b></p><p>This property has been <i>removed</i> as of PHP 8.0.0.</p>
		 * @link https://php.net/manual/en/class.mysqli-driver.php#mysqli-driver.props.embedded
		 */
		public $embedded;

		/**
		 * @var bool <p>Allow or prevent reconnect (see the mysqli.reconnect INI directive)</p>
		 * @link https://php.net/manual/en/class.mysqli-driver.php#mysqli-driver.props.reconnect
		 */
		public $reconnect = false;

		/**
		 * @var int <p>Set to <b><code>MYSQLI_REPORT_OFF</code></b>, <b><code>MYSQLI_REPORT_ALL</code></b> or any combination of <b><code>MYSQLI_REPORT_STRICT</code></b> (throw Exceptions for errors), <b><code>MYSQLI_REPORT_ERROR</code></b> (report errors) and <b><code>MYSQLI_REPORT_INDEX</code></b> (errors regarding indexes). See also <code>mysqli_report()</code>.</p>
		 * @link https://php.net/manual/en/class.mysqli-driver.php#mysqli-driver.props.report-mode
		 */
		public $report_mode;

		/**
		 * Stop embedded server
		 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/mysqli-driver.embedded-server-end.php
		 * @since PHP 5 >= 5.1.0, PHP 7 < 7.4.0
		 */
		public function embedded_server_end(): void {}

		/**
		 * Initialize and start embedded server
		 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $start
		 * @param array $arguments
		 * @param array $groups
		 * @return bool
		 * @link https://php.net/manual/en/mysqli-driver.embedded-server-start.php
		 * @since PHP 5 >= 5.1.0, PHP 7 < 7.4.0
		 */
		public function embedded_server_start(int $start, array $arguments, array $groups): bool {}
	}

	/**
	 * <p>Represents the result set obtained from a query against the database.</p>
	 * @link https://php.net/manual/en/class.mysqli-result.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class mysqli_result implements \IteratorAggregate {

		/**
		 * Get current field offset of a result pointer
		 * <p>Object-oriented style</p><p>Returns the position of the field cursor used for the last <code>mysqli_fetch_field()</code> call. This value can be used as an argument to <code>mysqli_field_seek()</code>.</p>
		 * @var int <p>Returns current offset of field cursor.</p>
		 * @link https://php.net/manual/en/mysqli-result.current-field.php
		 * @see mysqli_fetch_field(), mysqli_field_seek()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $current_field;

		/**
		 * Gets the number of fields in the result set
		 * <p>Object-oriented style</p><p>Returns the number of fields in the result set.</p>
		 * @var int <p>An <code>int</code> representing the number of fields.</p>
		 * @link https://php.net/manual/en/mysqli-result.field-count.php
		 * @see mysqli_fetch_field()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $field_count;

		/**
		 * Returns the lengths of the columns of the current row in the result set
		 * <p>Object-oriented style</p><p>The <b>mysqli_fetch_lengths()</b> function returns an array containing the lengths of every column of the current row within the result set.</p>
		 * @var ?array <p>An array of integers representing the size of each column (not including any terminating null characters). <b><code>false</code></b> if an error occurred.</p><p><b>mysqli_fetch_lengths()</b> is valid only for the current row of the result set. It returns <b><code>false</code></b> if you call it before calling mysqli_fetch_row/array/object or after retrieving all rows in the result.</p>
		 * @link https://php.net/manual/en/mysqli-result.lengths.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $lengths;

		/**
		 * Gets the number of rows in the result set
		 * <p>Object-oriented style</p><p>Returns the number of rows in the result set.</p><p>The behaviour of <b>mysqli_num_rows()</b> depends on whether buffered or unbuffered result sets are being used. This function returns <code>0</code> for unbuffered result sets unless all rows have been fetched from the server.</p>
		 * @var int|string <p>An <code>int</code> representing the number of fetched rows. Returns <code>0</code> in unbuffered mode unless all rows have been fetched from the server.</p><p><b>Note</b>:</p><p>If the number of rows is greater than <b><code>PHP_INT_MAX</code></b>, the number will be returned as a <code>string</code>.</p>
		 * @link https://php.net/manual/en/mysqli-result.num-rows.php
		 * @see mysqli_affected_rows(), mysqli_store_result(), mysqli_use_result(), mysqli_query(), mysqli_stmt_num_rows()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $num_rows;

		/**
		 * @var int <p>Stores whether the result is buffered or unbuffered as an <code>int</code> (<b><code>MYSQLI_STORE_RESULT</code></b> or <b><code>MYSQLI_USE_RESULT</code></b>, respectively).</p>
		 * @link https://php.net/manual/en/class.mysqli-result.php#mysqli-result.props.type
		 */
		public $type;

		/**
		 * Constructs a mysqli_result object
		 * <p>This method constructs a new <code>mysqli_result</code> object.</p><p>It can be used to create the <code>mysqli_result</code> object after calling the <code>mysqli_real_query()</code> or <code>mysqli_multi_query()</code> function. Constructing the object manually is equivalent to calling the <code>mysqli_store_result()</code> or <code>mysqli_use_result()</code> function.</p>
		 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
		 * @param int $result_mode <p>The result mode can be one of 2 constants indicating how the result will be returned from the MySQL server.</p> <p><b><code>MYSQLI_STORE_RESULT</code></b> (default) - creates a <code>mysqli_result</code> object with buffered result set.</p> <p><b><code>MYSQLI_USE_RESULT</code></b> - creates a <code>mysqli_result</code> object with unbuffered result set. As long as there are pending records waiting to be fetched, the connection line will be busy and all subsequent calls will return error <code>Commands out of sync</code>. To avoid the error all records must be fetched from the server or the result set must be discarded by calling <code>mysqli_free_result()</code>. The connection must remain open for the rows to be fetched.</p>
		 * @return self
		 * @link https://php.net/manual/en/mysqli-result.construct.php
		 * @see mysqli_multi_query(), mysqli_real_query(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(\mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT) {}

		/**
		 * Frees the memory associated with a result
		 * <p>Object-oriented style</p><p>Frees the memory associated with the result.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mysqli-result.free.php
		 * @see mysqli_query(), mysqli_stmt_get_result(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function close(): void {}

		/**
		 * Adjusts the result pointer to an arbitrary row in the result
		 * <p>Object-oriented style</p><p>The <b>mysqli_data_seek()</b> function seeks to an arbitrary result pointer specified by the <code>offset</code> in the result set.</p>
		 * @param int $offset <p>The field offset. Must be between zero and the total number of rows minus one (0..<code>mysqli_num_rows()</code> - 1).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-result.data-seek.php
		 * @see mysqli_store_result(), mysqli_fetch_row(), mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_query(), mysqli_num_rows()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function data_seek(int $offset): bool {}

		/**
		 * Fetch all result rows as an associative array, a numeric array, or both
		 * <p>Object-oriented style</p><p>Returns a two-dimensional array of all result rows as an associative array, a numeric array, or both.</p><p><b>Note</b>:</p><p>Prior to PHP 8.1.0, available only with mysqlnd.</p>
		 * @param int $mode <p>This optional parameter is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants <b><code>MYSQLI_ASSOC</code></b>, <b><code>MYSQLI_NUM</code></b>, or <b><code>MYSQLI_BOTH</code></b>.</p>
		 * @return array <p>Returns an array of associative or numeric arrays holding result rows.</p>
		 * @link https://php.net/manual/en/mysqli-result.fetch-all.php
		 * @see mysqli_fetch_array(), mysqli_fetch_column(), mysqli_query()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function fetch_all(int $mode = MYSQLI_NUM): array {}

		/**
		 * Fetch the next row of a result set as an associative, a numeric array, or both
		 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an array. Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p>In addition to storing the data in the numeric indices of the result array, this function can also store the data in associative indices by using the field names of the result set as keys.</p><p>If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, the numerically indexed version of the row must be used.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
		 * @param int $mode <p>This optional parameter is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants <b><code>MYSQLI_ASSOC</code></b>, <b><code>MYSQLI_NUM</code></b>, or <b><code>MYSQLI_BOTH</code></b>.</p> <p>By using the <b><code>MYSQLI_ASSOC</code></b> constant this function will behave identically to the <code>mysqli_fetch_assoc()</code>, while <b><code>MYSQLI_NUM</code></b> will behave identically to the <code>mysqli_fetch_row()</code> function. The final option <b><code>MYSQLI_BOTH</code></b> will create a single array with the attributes of both.</p>
		 * @return array|null|false <p>Returns an array representing the fetched row, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-result.fetch-array.php
		 * @see mysqli_fetch_assoc(), mysqli_fetch_column(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_array(int $mode = MYSQLI_BOTH): array|null|false {}

		/**
		 * Fetch the next row of a result set as an associative array
		 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, <code>mysqli_fetch_row()</code> may be used to fetch the numerically indexed array, or aliases may be used in the SQL query select list to give columns different names.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
		 * @return array|null|false <p>Returns an associative array representing the fetched row, where each key in the array represents the name of one of the result set's columns, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-result.fetch-assoc.php
		 * @see mysqli_fetch_array(), mysqli_fetch_column(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_assoc(): array|null|false {}

		/**
		 * Fetch a single column from the next row of a result set
		 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns the 0-indexed column. Each subsequent call to this function will return the value from the next row within the result set, or <b><code>false</code></b> if there are no more rows.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
		 * @param int $column <p>0-indexed number of the column you wish to retrieve from the row. If no value is supplied, the first column will be returned.</p>
		 * @return null|int|float|string|false <p>Returns a single column from the next row of a result set or <b><code>false</code></b> if there are no more rows.</p><p><b>Warning</b></p> <p>There is no way to return another column from the same row if you use this function to retrieve data.</p>
		 * @link https://php.net/manual/en/mysqli-result.fetch-column.php
		 * @see mysqli_fetch_all(), mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_fetch_row(), mysqli_data_seek()
		 * @since PHP 8 >= 8.1.0
		 */
		public function fetch_column(int $column = 0): null|int|float|string|false {}

		/**
		 * Returns the next field in the result set
		 * <p>Object-oriented style</p><p>Returns the definition of one column of a result set as an object. Call this function repeatedly to retrieve information about all columns in the result set.</p>
		 * @return object|false <p>Returns an object which contains field definition information or <b><code>false</code></b> if no field information is available.</p> <b>Object properties</b>   Property Description     name The name of the column   orgname Original column name if an alias was specified   table The name of the table this field belongs to (if not calculated)   orgtable Original table name if an alias was specified   def Reserved for default value, currently always ""   db The name of the database   catalog The catalog name, always "def"   max_length The maximum width of the field for the result set.   length The width of the field, as specified in the table definition.   charsetnr The character set number for the field.   flags An integer representing the bit-flags for the field.   type The data type used for this field   decimals The number of decimals used (for integer fields)
		 * @link https://php.net/manual/en/mysqli-result.fetch-field.php
		 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_fields(), mysqli_field_seek()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_field(): object|false {}

		/**
		 * Fetch meta-data for a single field
		 * <p>Object-oriented style</p><p>Returns an object which contains field definition information from the specified result set.</p>
		 * @param int $index <p>The field number. This value must be in the range from <code>0</code> to <code>number of fields - 1</code>.</p>
		 * @return object|false <p>Returns an object which contains field definition information or <b><code>false</code></b> if no field information for specified <code>fieldnr</code> is available.</p> <b>Object attributes</b>   Attribute Description     name The name of the column   orgname Original column name if an alias was specified   table The name of the table this field belongs to (if not calculated)   orgtable Original table name if an alias was specified   def The default value for this field, represented as a string   max_length The maximum width of the field for the result set.   length The width of the field, as specified in the table definition.   charsetnr The character set number for the field.   flags An integer representing the bit-flags for the field.   type The data type used for this field   decimals The number of decimals used (for numeric fields)
		 * @link https://php.net/manual/en/mysqli-result.fetch-field-direct.php
		 * @see mysqli_num_fields(), mysqli_fetch_field(), mysqli_fetch_fields()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_field_direct(int $index): object|false {}

		/**
		 * Returns an array of objects representing the fields in a result set
		 * <p>Object-oriented style</p><p>This function serves an identical purpose to the <code>mysqli_fetch_field()</code> function with the single difference that, instead of returning one object at a time for each field, the columns are returned as an array of objects.</p>
		 * @return array <p>Returns an array of objects containing field definition information.</p> <b>Object properties</b>   Property Description     name The name of the column   orgname Original column name if an alias was specified   table The name of the table this field belongs to (if not calculated)   orgtable Original table name if an alias was specified   max_length The maximum width of the field for the result set.   length  The width of the field, in bytes, as specified in the table definition. Note that this number (bytes) might differ from your table definition value (characters), depending on the character set you use. For example, the character set utf8 has 3 bytes per character, so varchar(10) will return a length of 30 for utf8 (10&#42;3), but return 10 for latin1 (10&#42;1).    charsetnr The character set number (id) for the field.   flags An integer representing the bit-flags for the field.   type The data type used for this field   decimals The number of decimals used (for integer fields)
		 * @link https://php.net/manual/en/mysqli-result.fetch-fields.php
		 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_field()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_fields(): array {}

		/**
		 * Fetch the next row of a result set as an object
		 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an object, where each property represents the name of the result set's column. Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, <code>mysqli_fetch_row()</code> may be used to fetch the numerically indexed array, or aliases may be used in the SQL query select list to give columns different names.</p><p><b>Note</b>:  This function sets the properties of the object before calling the object constructor. </p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
		 * @param string $class <p>The name of the class to instantiate, set the properties of and return. If not specified, a <b>stdClass</b> object is returned.</p>
		 * @param array $constructor_args <p>An optional <code>array</code> of parameters to pass to the constructor for <code>class</code> objects.</p>
		 * @return object|null|false <p>Returns an object representing the fetched row, where each property represents the name of the result set's column, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-result.fetch-object.php
		 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_column(), mysqli_fetch_row(), mysqli_query(), mysqli_data_seek()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_object(string $class = "stdClass", array $constructor_args = []): object|null|false {}

		/**
		 * Fetch the next row of a result set as an enumerated array
		 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an enumerated array, where each column is stored in an array offset starting from 0 (zero). Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
		 * @return array|null|false <p>Returns an enumerated array representing the fetched row, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-result.fetch-row.php
		 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_column(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch_row(): array|null|false {}

		/**
		 * Set result pointer to a specified field offset
		 * <p>Object-oriented style</p><p>Sets the field cursor to the given offset. The next call to <code>mysqli_fetch_field()</code> will retrieve the field definition of the column associated with that offset.</p><p><b>Note</b>:</p><p>To seek to the beginning of a row, pass an offset value of zero.</p>
		 * @param int $index <p>The field number. This value must be in the range from <code>0</code> to <code>number of fields - 1</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-result.field-seek.php
		 * @see mysqli_fetch_field()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function field_seek(int $index): bool {}

		/**
		 * Frees the memory associated with a result
		 * <p>Object-oriented style</p><p>Frees the memory associated with the result.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mysqli-result.free.php
		 * @see mysqli_query(), mysqli_stmt_get_result(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function free(): void {}

		/**
		 * Frees the memory associated with a result
		 * <p>Object-oriented style</p><p>Frees the memory associated with the result.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mysqli-result.free.php
		 * @see mysqli_query(), mysqli_stmt_get_result(), mysqli_store_result(), mysqli_use_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function free_result(): void {}

		/**
		 * Retrieve an external iterator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return Iterator
		 * @link https://php.net/manual/en/mysqli-result.getiterator.php
		 * @since PHP 8
		 */
		public function getIterator(): \Iterator {}
	}

	/**
	 * <p>The mysqli exception handling class.</p>
	 * @link https://php.net/manual/en/class.mysqli-sql-exception.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	final class mysqli_sql_exception extends \RuntimeException {

		/**
		 * @var string <p>The sql state with the error.</p>
		 * @link https://php.net/manual/en/class.mysqli-sql-exception.php#mysqli-sql-exception.props.sqlstate
		 */
		protected $sqlstate = "00000";

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Returns the SQLSTATE error code
		 * <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. The values are specified by ANSI SQL and ODBC. For a list of possible values, see http://dev.mysql.com/doc/mysql/en/error-handling.html.</p><p><b>Note</b>:</p><p>Note that not all MySQL errors are yet mapped to SQLSTATE's. The value <code>HY000</code> (general error) is used for unmapped errors.</p>
		 * @return string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters.</p>
		 * @link https://php.net/manual/en/mysqli-sql-exception.getsqlstate.php
		 * @since PHP 8 >= 8.1.2
		 */
		public function getSqlState(): string {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a prepared statement.</p>
	 * @link https://php.net/manual/en/class.mysqli-stmt.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class mysqli_stmt {

		/**
		 * Returns the total number of rows changed, deleted, inserted, or matched by the last statement executed
		 * <p>Object-oriented style</p><p>Returns the number of rows affected by <code>INSERT</code>, <code>UPDATE</code>, or <code>DELETE</code> query. Works like <code>mysqli_stmt_num_rows()</code> for <code>SELECT</code> statements.</p>
		 * @var int|string <p>An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records were updated for an <code>UPDATE</code> statement, no rows matched the <code>WHERE</code> clause in the query or that no query has yet been executed. <code>-1</code> indicates that the query returned an error or that, for a <code>SELECT</code> query, <b>mysqli_stmt_affected_rows()</b> was called prior to calling <code>mysqli_stmt_store_result()</code>.</p><p><b>Note</b>:</p><p>If the number of affected rows is greater than maximum PHP int value, the number of affected rows will be returned as a string value.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.affected-rows.php
		 * @see mysqli_stmt_num_rows(), mysqli_stmt_store_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $affected_rows;

		/**
		 * Get the ID generated from the previous INSERT operation
		 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @var int|string
		 * @link https://php.net/manual/en/mysqli-stmt.insert-id.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $insert_id;

		/**
		 * Returns the number of rows fetched from the server
		 * <p>Object-oriented style</p><p>Returns the number of rows buffered in the statement. This function will only work after <code>mysqli_stmt_store_result()</code> is called to buffer the entire result set in the statement handle.</p><p>This function returns <code>0</code> unless all rows have been fetched from the server.</p>
		 * @var int|string <p>An <code>int</code> representing the number of buffered rows. Returns <code>0</code> in unbuffered mode unless all rows have been fetched from the server.</p><p><b>Note</b>:</p><p>If the number of rows is greater than <b><code>PHP_INT_MAX</code></b>, the number will be returned as a <code>string</code>.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.num-rows.php
		 * @see mysqli_stmt_store_result(), mysqli_stmt_affected_rows(), mysqli_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $num_rows;

		/**
		 * Returns the number of parameters for the given statement
		 * <p>Object-oriented style</p><p>Returns the number of parameter markers present in the prepared statement.</p>
		 * @var int <p>Returns an integer representing the number of parameters.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.param-count.php
		 * @see mysqli_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $param_count;

		/**
		 * Returns the number of columns in the given statement
		 * <p>Object-oriented style</p><p>Returns the number of columns in the prepared statement.</p>
		 * @var int <p>Returns an integer representing the number of columns.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.field-count.php
		 * @see mysqli_stmt_num_rows()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $field_count;

		/**
		 * Returns the error code for the most recent statement call
		 * <p>Object-oriented style</p><p>Returns the error code for the most recently invoked statement function that can succeed or fail.</p>
		 * @var int <p>An error code value. Zero means no error occurred.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.errno.php
		 * @see mysqli_stmt_error(), mysqli_stmt_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $errno;

		/**
		 * Returns a string description for last statement error
		 * <p>Object-oriented style</p><p>Returns a string containing the error message for the most recently invoked statement function that can succeed or fail.</p>
		 * @var string <p>A string that describes the error. An empty string if no error occurred.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.error.php
		 * @see mysqli_stmt_errno(), mysqli_stmt_sqlstate()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $error;

		/**
		 * Returns a list of errors from the last statement executed
		 * <p>Object-oriented style</p><p>Returns an array of errors for the most recently invoked statement function that can succeed or fail.</p>
		 * @var array <p>A list of errors, each as an associative <code>array</code> containing the errno, error, and sqlstate.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.error-list.php
		 * @see mysqli_stmt_error(), mysqli_stmt_errno(), mysqli_stmt_sqlstate()
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public $error_list;

		/**
		 * Returns SQLSTATE error from previous statement operation
		 * <p>Object-oriented style</p><p>Returns a string containing the SQLSTATE error code for the most recently invoked prepared statement function that can succeed or fail. The error code consists of five characters. <code>'00000'</code> means no error. The values are specified by ANSI SQL and ODBC. For a list of possible values, see http://dev.mysql.com/doc/mysql/en/error-handling.html.</p>
		 * @var string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <code>'00000'</code> means no error.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.sqlstate.php
		 * @see mysqli_stmt_errno(), mysqli_stmt_error()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public $sqlstate;

		/**
		 * @var int <p>Stores the statement ID.</p>
		 * @link https://php.net/manual/en/class.mysqli-stmt.php#mysqli-stmt.props.id
		 */
		public $id;

		/**
		 * Constructs a new mysqli_stmt object
		 * <p>This method constructs a new <code>mysqli_stmt</code> object.</p>
		 * @param \mysqli $mysql
		 * @param ?string $query <p>The query, as a string. If this parameter is <b><code>null</code></b>, then the constructor behaves identically to <code>mysqli_stmt_init()</code>, otherwise it behaves as per <code>mysqli_prepare()</code>.</p>
		 * @return self
		 * @link https://php.net/manual/en/mysqli-stmt.construct.php
		 * @see mysqli_prepare(), mysqli_stmt_init()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(\mysqli $mysql, ?string $query = null) {}

		/**
		 * Used to get the current value of a statement attribute
		 * <p>Object-oriented style</p><p>Gets the current value of a statement attribute.</p>
		 * @param int $attribute <p>The attribute that you want to get.</p>
		 * @return int <p>Returns the value of the attribute.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.attr-get.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function attr_get(int $attribute): int {}

		/**
		 * Used to modify the behavior of a prepared statement
		 * <p>Object-oriented style</p><p>Used to modify the behavior of a prepared statement. This function may be called multiple times to set several attributes.</p>
		 * @param int $attribute <p>The attribute that you want to set. It can have one of the following values:</p> <b>Attribute values</b>   Character Description     MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH  Setting to <b><code>true</code></b> causes <code>mysqli_stmt_store_result()</code> to update the metadata <code>MYSQL_FIELD-&gt;max_length</code> value.    MYSQLI_STMT_ATTR_CURSOR_TYPE  Type of cursor to open for statement when <code>mysqli_stmt_execute()</code> is invoked. <code>value</code> can be <code>MYSQLI_CURSOR_TYPE_NO_CURSOR</code> (the default) or <code>MYSQLI_CURSOR_TYPE_READ_ONLY</code>.    MYSQLI_STMT_ATTR_PREFETCH_ROWS  Number of rows to fetch from server at a time when using a cursor. <code>value</code> can be in the range from 1 to the maximum value of unsigned long. The default is 1.     <p>If you use the <code>MYSQLI_STMT_ATTR_CURSOR_TYPE</code> option with <code>MYSQLI_CURSOR_TYPE_READ_ONLY</code>, a cursor is opened for the statement when you invoke <code>mysqli_stmt_execute()</code>. If there is already an open cursor from a previous <code>mysqli_stmt_execute()</code> call, it closes the cursor before opening a new one. <code>mysqli_stmt_reset()</code> also closes any open cursor before preparing the statement for re-execution. <code>mysqli_stmt_free_result()</code> closes any open cursor.</p> <p>If you open a cursor for a prepared statement, <code>mysqli_stmt_store_result()</code> is unnecessary.</p>
		 * @param int $value <p>The value to assign to the attribute.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.attr-set.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function attr_set(int $attribute, int $value): bool {}

		/**
		 * Binds variables to a prepared statement as parameters
		 * <p>Object-oriented style</p><p>Bind variables for the parameter markers in the SQL statement prepared by <code>mysqli_prepare()</code> or <code>mysqli_stmt_prepare()</code>.</p><p><b>Note</b>:</p><p>If data size of a variable exceeds max. allowed packet size (max_allowed_packet), you have to specify <code>b</code> in <code>types</code> and use <code>mysqli_stmt_send_long_data()</code> to send the data in packets.</p><p><b>Note</b>:</p><p>Care must be taken when using <b>mysqli_stmt_bind_param()</b> in conjunction with <code>call_user_func_array()</code>. Note that <b>mysqli_stmt_bind_param()</b> requires parameters to be passed by reference, whereas <code>call_user_func_array()</code> can accept as a parameter a list of variables that can represent references or values.</p>
		 * @param string $types <p>A string that contains one or more characters which specify the types for the corresponding bind variables:</p> <b>Type specification chars</b>   Character Description     i corresponding variable has type integer   d corresponding variable has type double   s corresponding variable has type string   b corresponding variable is a blob and will be sent in packets
		 * @param mixed $var
		 * @param mixed $vars <p>The number of variables and length of string <code>types</code> must match the parameters in the statement.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.bind-param.php
		 * @see mysqli_stmt_bind_result(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_send_long_data(), mysqli_stmt_errno(), mysqli_stmt_error()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function bind_param(string $types, mixed &$var, mixed &...$vars): bool {}

		/**
		 * Binds variables to a prepared statement for result storage
		 * <p>Object-oriented style</p><p>Binds columns in the result set to variables.</p><p>When <code>mysqli_stmt_fetch()</code> is called to fetch data, the MySQL client/server protocol places the data for the bound columns into the specified variables <code>var</code>/<code>vars</code>.</p><p>A column can be bound or rebound at any time, even after a result set has been partially retrieved. The new binding takes effect the next time <code>mysqli_stmt_fetch()</code> is called.</p><p><b>Note</b>:</p><p>All columns must be bound after <code>mysqli_stmt_execute()</code> and prior to calling <code>mysqli_stmt_fetch()</code>.</p><p><b>Note</b>:</p><p>Depending on column types bound variables can silently change to the corresponding PHP type.</p><p>This functions is useful for simple results. To retrieve iterable result set, or fetch each row as an array or object, use <code>mysqli_stmt_get_result()</code>.</p>
		 * @param mixed $var <p>The first variable to be bound.</p>
		 * @param mixed $vars <p>Further variables to be bound.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.bind-result.php
		 * @see mysqli_stmt_get_result(), mysqli_stmt_bind_param(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function bind_result(mixed &$var, mixed &...$vars): bool {}

		/**
		 * Closes a prepared statement
		 * <p>Object-oriented style</p><p>Closes a prepared statement. <b>mysqli_stmt_close()</b> also deallocates the statement handle. If the current statement has pending or unread results, this function cancels them so that the next query can be executed.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.close.php
		 * @see mysqli_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function close(): bool {}

		/**
		 * Seeks to an arbitrary row in statement result set
		 * <p>Object-oriented style</p><p>Seeks to an arbitrary result pointer in the statement result set.</p><p><code>mysqli_stmt_store_result()</code> must be called prior to <b>mysqli_stmt_data_seek()</b>.</p>
		 * @param int $offset <p>Must be between zero and the total number of rows minus one (0.. <code>mysqli_stmt_num_rows()</code> - 1).</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.data-seek.php
		 * @see mysqli_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function data_seek(int $offset): void {}

		/**
		 * Executes a prepared statement
		 * <p>Object-oriented style</p><p>Executes previously prepared statement. The statement must be successfully prepared prior to execution, using either the <code>mysqli_prepare()</code> or <code>mysqli_stmt_prepare()</code> function, or by passing the second argument to <code>mysqli_stmt::__construct()</code>.</p><p>If the statement is <code>UPDATE</code>, <code>DELETE</code>, or <code>INSERT</code>, the total number of affected rows can be determined by using the <code>mysqli_stmt_affected_rows()</code> function. If the query yields a result set, it can be fetched using <code>mysqli_stmt_get_result()</code> function or by fetching it row by row directly from the statement using <code>mysqli_stmt_fetch()</code> function.</p>
		 * @param ?array $params <p>An optional list <code>array</code> with as many elements as there are bound parameters in the SQL statement being executed. Each value is treated as a <code>string</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.execute.php
		 * @see mysqli_prepare(), mysqli_stmt_bind_param(), mysqli_stmt_get_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function execute(?array $params = null): bool {}

		/**
		 * Fetch results from a prepared statement into the bound variables
		 * <p>Object-oriented style</p><p>Fetch the result from a prepared statement into the variables bound by <code>mysqli_stmt_bind_result()</code>.</p><p><b>Note</b>:</p><p>Note that all columns must be bound by the application before calling <b>mysqli_stmt_fetch()</b>.</p><p><b>Note</b>:</p><p>Data are transferred unbuffered without calling <code>mysqli_stmt_store_result()</code> which can decrease performance (but reduces memory cost).</p>
		 * @return ?bool <b>Return Values</b>   Value Description     <b><code>true</code></b> Success. Data has been fetched   <b><code>false</code></b> Error occurred   <b><code>null</code></b> No more rows/data exists or data truncation occurred
		 * @link https://php.net/manual/en/mysqli-stmt.fetch.php
		 * @see mysqli_prepare(), mysqli_stmt_errno(), mysqli_stmt_error(), mysqli_stmt_bind_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fetch(): ?bool {}

		/**
		 * Frees stored result memory for the given statement handle
		 * <p>Object-oriented style</p><p>Frees the result memory associated with the statement, which was allocated by <code>mysqli_stmt_store_result()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.free-result.php
		 * @see mysqli_stmt_store_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function free_result(): void {}

		/**
		 * Gets a result set from a prepared statement as a mysqli_result object
		 * <p>Object-oriented style</p><p>Retrieves a result set from a prepared statement as a <code>mysqli_result</code> object. The data will be fetched from the MySQL server to PHP. This method should be called only for queries which produce a result set.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p><p><b>Note</b>:</p><p>This function cannot be used together with <code>mysqli_stmt_store_result()</code>. Both of these functions retrieve the full result set from the MySQL server.</p>
		 * @return mysqli_result|false <p>Returns <b><code>false</code></b> on failure. For successful queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <b>mysqli_stmt_get_result()</b> will return a <code>mysqli_result</code> object. For other successful queries, <b>mysqli_stmt_get_result()</b> will return <b><code>false</code></b>. The <code>mysqli_stmt_errno()</code> function can be used to distinguish between the two reasons for <b><code>false</code></b>; due to a bug, prior to PHP 7.4.13, <code>mysqli_errno()</code> had to be used for this purpose.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.get-result.php
		 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch(), mysqli_fetch_array(), mysqli_stmt_store_result()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function get_result(): \mysqli_result|false {}

		/**
		 * Get result of SHOW WARNINGS
		 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mysqli_warning|false
		 * @link https://php.net/manual/en/mysqli-stmt.get-warnings.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function get_warnings(): \mysqli_warning|false {}

		/**
		 * Check if there are more query results from a multiple query
		 * <p>Object-oriented style</p><p>Checks if there are more query results from a multiple query.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if more results exist, otherwise <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.more-results.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function more_results(): bool {}

		/**
		 * Reads the next result from a multiple query
		 * <p>Object-oriented style</p><p>Reads the next result from a multiple query.</p><p><b>Note</b>:</p><p>Prior to PHP 8.1.0, available only with mysqlnd.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.next-result.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next_result(): bool {}

		/**
		 * Returns the number of rows fetched from the server
		 * <p>Object-oriented style</p><p>Returns the number of rows buffered in the statement. This function will only work after <code>mysqli_stmt_store_result()</code> is called to buffer the entire result set in the statement handle.</p><p>This function returns <code>0</code> unless all rows have been fetched from the server.</p>
		 * @return int|string <p>An <code>int</code> representing the number of buffered rows. Returns <code>0</code> in unbuffered mode unless all rows have been fetched from the server.</p><p><b>Note</b>:</p><p>If the number of rows is greater than <b><code>PHP_INT_MAX</code></b>, the number will be returned as a <code>string</code>.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.num-rows.php
		 * @see mysqli_stmt_store_result(), mysqli_stmt_affected_rows(), mysqli_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function num_rows(): int|string {}

		/**
		 * Prepares an SQL statement for execution
		 * <p>Object-oriented style</p><p>Prepares a statement for execution. The query must consist of a single SQL statement.</p><p>The statement template can contain zero or more question mark (<code>&#63;</code>) parameter markers&#8288;&mdash;also called placeholders. The parameter markers must be bound to application variables using <code>mysqli_stmt_bind_param()</code> before executing the statement.</p><p><b>Note</b>:</p><p>In the case where you pass a statement to <b>mysqli_stmt_prepare()</b> that is longer than <code>max_allowed_packet</code> of the server, the returned error codes are different depending on whether you are using MySQL Native Driver (<code>mysqlnd</code>) or MySQL Client Library (<code>libmysqlclient</code>). The behavior is as follows:</p><p><code>mysqlnd</code> on Linux returns an error code of 1153. The error message means got a packet bigger than <code>max_allowed_packet</code> bytes.</p><p><code>mysqlnd</code> on Windows returns an error code 2006. This error message means server has gone away.</p><p><code>libmysqlclient</code> on all platforms returns an error code 2006. This error message means server has gone away.</p>
		 * @param string $query <p>The query, as a string. It must consist of a single SQL statement.</p> <p>The SQL statement may contain zero or more parameter markers represented by question mark (<code>&#63;</code>) characters at the appropriate positions.</p> <p><b>Note</b>:</p><p>The markers are legal only in certain places in SQL statements. For example, they are permitted in the <code>VALUES()</code> list of an <code>INSERT</code> statement (to specify column values for a row), or in a comparison with a column in a <code>WHERE</code> clause to specify a comparison value.</p> <p>However, they are not permitted for identifiers (such as table or column names), or to specify both operands of a binary operator such as the <code>=</code> equal sign. The latter restriction is necessary because it would be impossible to determine the parameter type. In general, parameters are legal only in Data Manipulation Language (DML) statements, and not in Data Definition Language (DDL) statements.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.prepare.php
		 * @see mysqli_stmt_init(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_get_result(), mysqli_stmt_close()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function prepare(string $query): bool {}

		/**
		 * Resets a prepared statement
		 * <p>Object-oriented style</p><p>Resets a prepared statement on client and server to state after prepare.</p><p>It resets the statement on the server, data sent using <code>mysqli_stmt_send_long_data()</code>, unbuffered result sets and current errors. It does not clear bindings or stored result sets. Stored result sets will be cleared when executing the prepared statement (or closing it).</p><p>To prepare a statement with another query use function <code>mysqli_stmt_prepare()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.reset.php
		 * @see mysqli_prepare()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function reset(): bool {}

		/**
		 * Returns result set metadata from a prepared statement
		 * <p>Object-oriented style</p><p>If a statement passed to <code>mysqli_prepare()</code> is one that produces a result set, <b>mysqli_stmt_result_metadata()</b> returns the result object that can be used to process the meta information such as total number of fields and individual field information.</p><p><b>Note</b>:</p><p>This result set pointer can be passed as an argument to any of the field-based functions that process result set metadata, such as:</p><p><code>mysqli_num_fields()</code></p><p><code>mysqli_fetch_field()</code></p><p><code>mysqli_fetch_field_direct()</code></p><p><code>mysqli_fetch_fields()</code></p><p><code>mysqli_field_count()</code></p><p><code>mysqli_field_seek()</code></p><p><code>mysqli_field_tell()</code></p><p><code>mysqli_free_result()</code></p><p>The result set structure should be freed when you are done with it, which you can do by passing it to <code>mysqli_free_result()</code></p><p><b>Note</b>:</p><p>The result set returned by <b>mysqli_stmt_result_metadata()</b> contains only metadata. It does not contain any row results. The rows are obtained by using the statement handle with <code>mysqli_stmt_fetch()</code>.</p>
		 * @return mysqli_result|false <p>Returns a result object or <b><code>false</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.result-metadata.php
		 * @see mysqli_prepare(), mysqli_free_result()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function result_metadata(): \mysqli_result|false {}

		/**
		 * Send data in blocks
		 * <p>Object-oriented style</p><p>Allows to send parameter data to the server in pieces (or chunks), e.g. if the size of a blob exceeds the size of <code>max_allowed_packet</code>. This function can be called multiple times to send the parts of a character or binary data value for a column, which must be one of the TEXT or BLOB datatypes.</p>
		 * @param int $param_num <p>Indicates which parameter to associate the data with. Parameters are numbered beginning with 0.</p>
		 * @param string $data <p>A string containing data to be sent.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.send-long-data.php
		 * @see mysqli_prepare(), mysqli_stmt_bind_param()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function send_long_data(int $param_num, string $data): bool {}

		/**
		 * Stores a result set in an internal buffer
		 * <p>Object-oriented style</p><p>This function should be called for queries that successfully produce a result set (e.g. <code>SELECT, SHOW, DESCRIBE, EXPLAIN</code>) only if the complete result set needs to be buffered in PHP. Each subsequent <code>mysqli_stmt_fetch()</code> call will return buffered data.</p><p><b>Note</b>:</p><p>It is unnecessary to call <b>mysqli_stmt_store_result()</b> for other queries, but if you do, it will not harm or cause any notable performance loss in all cases. You can detect whether the query produced a result set by checking if <code>mysqli_stmt_result_metadata()</code> returns <b><code>false</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/mysqli-stmt.store-result.php
		 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function store_result(): bool {}
	}

	/**
	 * <p>Represents a MySQL warning.</p>
	 * @link https://php.net/manual/en/class.mysqli-warning.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	final class mysqli_warning {

		/**
		 * @var string <p>Message string</p>
		 * @link https://php.net/manual/en/class.mysqli-warning.php#mysqli-warning.props.message
		 */
		public $message;

		/**
		 * @var string <p>SQL state</p>
		 * @link https://php.net/manual/en/class.mysqli-warning.php#mysqli-warning.props.sqlstate
		 */
		public $sqlstate;

		/**
		 * @var int <p>Error number</p>
		 * @link https://php.net/manual/en/class.mysqli-warning.php#mysqli-warning.props.errno
		 */
		public $errno;

		/**
		 * Private constructor to disallow direct instantiation
		 * @return self
		 * @link https://php.net/manual/en/mysqli-warning.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __construct() {}

		/**
		 * Fetch next warning
		 * <p>Change warning information to the next warning if possible.</p><p>Once the warning has been set to the next warning, new values of properties <code>message</code>, <code>sqlstate</code> and <code>errno</code> of <code>mysqli_warning</code> are available.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if next warning was fetched successfully. If there are no more warnings, it will return <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/mysqli-warning.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): bool {}
	}

	/**
	 * Gets the number of affected rows in a previous MySQL operation
	 * <p>Object-oriented style</p><p>Returns the number of rows affected by the last <code>INSERT</code>, <code>UPDATE</code>, <code>REPLACE</code> or <code>DELETE</code> query. Works like <code>mysqli_num_rows()</code> for <code>SELECT</code> statements.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int|string <p>An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records were updated for an <code>UPDATE</code> statement, no rows matched the <code>WHERE</code> clause in the query or that no query has yet been executed. <code>-1</code> indicates that the query returned an error or that <b>mysqli_affected_rows()</b> was called for an unbuffered <code>SELECT</code> query.</p><p><b>Note</b>:</p><p>If the number of affected rows is greater than the maximum int value (<b><code>PHP_INT_MAX</code></b>), the number of affected rows will be returned as a string.</p>
	 * @link https://php.net/manual/en/mysqli.affected-rows.php
	 * @see mysqli_num_rows(), mysqli_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_affected_rows(\mysqli $mysql): int|string {}

	/**
	 * Turns on or off auto-committing database modifications
	 * <p>Object-oriented style</p><p>Turns on or off auto-commit mode on queries for the database connection.</p><p>To determine the current state of autocommit use the SQL command <code>SELECT @@autocommit</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param bool $enable <p>Whether to turn on auto-commit or not.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.autocommit.php
	 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_rollback()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_autocommit(\mysqli $mysql, bool $enable): bool {}

	/**
	 * Starts a transaction
	 * <p>Object-oriented style</p><p>Begins a transaction. Requires the InnoDB engine (it is enabled by default). For additional details about how MySQL transactions work, see http://dev.mysql.com/doc/mysql/en/commit.html.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $flags <p>Valid flags are:</p> <ul> <li> <p><b><code>MYSQLI_TRANS_START_READ_ONLY</code></b>: Start the transaction as "START TRANSACTION READ ONLY". Requires MySQL 5.6 and above.</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_READ_WRITE</code></b>: Start the transaction as "START TRANSACTION READ WRITE". Requires MySQL 5.6 and above.</p> </li> <li> <p><b><code>MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT</code></b>: Start the transaction as "START TRANSACTION WITH CONSISTENT SNAPSHOT".</p> </li> </ul>
	 * @param ?string $name <p>Savepoint name for the transaction.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.begin-transaction.php
	 * @see mysqli_autocommit(), mysqli_commit(), mysqli_rollback()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function mysqli_begin_transaction(\mysqli $mysql, int $flags = 0, ?string $name = null): bool {}

	/**
	 * Changes the user of the specified database connection
	 * <p>Object-oriented style</p><p>Changes the user of the specified database connection and sets the current database.</p><p>In order to successfully change users a valid <code>username</code> and <code>password</code> parameters must be provided and that user must have sufficient permissions to access the desired database. If for any reason authorization fails, the current user authentication will remain.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $username <p>The MySQL user name.</p>
	 * @param string $password <p>The MySQL password.</p>
	 * @param ?string $database <p>The database to change to.</p> <p>If desired, the <b><code>null</code></b> value may be passed resulting in only changing the user and not selecting a database. To select a database in this case use the <code>mysqli_select_db()</code> function.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.change-user.php
	 * @see mysqli_connect(), mysqli_select_db()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_change_user(\mysqli $mysql, string $username, string $password, ?string $database): bool {}

	/**
	 * Returns the current character set of the database connection
	 * <p>Object-oriented style</p><p>Returns the current character set of the database connection.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return string <p>The current character set of the connection</p>
	 * @link https://php.net/manual/en/mysqli.character-set-name.php
	 * @see mysqli_set_charset(), mysqli_real_escape_string()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_character_set_name(\mysqli $mysql): string {}

	/**
	 * Closes a previously opened database connection
	 * <p>Object-oriented style</p><p>Closes a previously opened database connection.</p><p>Open non-persistent MySQL connections and result sets are automatically closed when their objects are destroyed. Explicitly closing open connections and freeing result sets is optional. However, it's a good idea to close the connection as soon as the script finishes performing all of its database operations, if it still has a lot of processing to do after getting the results.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.close.php
	 * @see mysqli_init(), mysqli_real_connect(), mysqli_free_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_close(\mysqli $mysql): bool {}

	/**
	 * Commits the current transaction
	 * <p>Object-oriented style</p><p>Commits the current transaction for the database connection.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $flags <p>A bitmask of <b><code>MYSQLI_TRANS_COR_&#42;</code></b> constants.</p>
	 * @param ?string $name <p>If provided then <code>COMMIT/&#42;name&#42;/</code> is executed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.commit.php
	 * @see mysqli_autocommit(), mysqli_begin_transaction(), mysqli_rollback(), mysqli_savepoint()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_commit(\mysqli $mysql, int $flags = 0, ?string $name = null): bool {}

	/**
	 * Open a new connection to the MySQL server
	 * <p>Object-oriented style</p><p>Opens a connection to the MySQL Server.</p>
	 * @param string $hostname <p>Can be either a host name or an IP address. The local host is assumed when passing the <b><code>null</code></b> value or the string "localhost" to this parameter. When possible, pipes will be used instead of the TCP/IP protocol. The TCP/IP protocol is used if a host name and port number are provided together e.g. <code>localhost:3308</code>.</p> <p>Prepending host by <code>p:</code> opens a persistent connection. <code>mysqli_change_user()</code> is automatically called on connections opened from the connection pool.</p>
	 * @param string $username <p>The MySQL user name.</p>
	 * @param string $password <p>If not provided or <b><code>null</code></b>, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password is provided or not).</p>
	 * @param string $database <p>If provided will specify the default database to be used when performing queries.</p>
	 * @param int $port <p>Specifies the port number to attempt to connect to the MySQL server.</p>
	 * @param string $socket <p>Specifies the socket or named pipe that should be used.</p> <p><b>Note</b>:</p><p>Specifying the <code>socket</code> parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the <code>hostname</code> parameter.</p>
	 * @return mysqli|false <p><b>mysqli::__construct()</b> always returns an object which represents the connection to a MySQL Server, regardless of it being successful or not.</p><p><code>mysqli_connect()</code> returns an object which represents the connection to a MySQL Server, or <b><code>false</code></b> on failure.</p><p><code>mysqli::connect()</code> returns <b><code>null</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.construct.php
	 * @see mysqli_real_connect(), mysqli_options(), mysqli_connect_errno(), mysqli_connect_error(), mysqli_close()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_connect(string $hostname = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $password = 'ini_get("mysqli.default_pw")', string $database = "", int $port  = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")'): \mysqli|false {}

	/**
	 * Returns the error code from last connect call
	 * <p>Object-oriented style</p><p>Returns the error code from the last connection attempt.</p>
	 * @return int <p>An error code for the last connection attempt, if it failed. Zero means no error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.connect-errno.php
	 * @see mysqli_connect(), mysqli_connect_error(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_connect_errno(): int {}

	/**
	 * Returns a description of the last connection error
	 * <p>Object-oriented style</p><p>Returns the error message from the last connection attempt.</p>
	 * @return ?string <p>A string that describes the error. <b><code>null</code></b> is returned if no error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.connect-error.php
	 * @see mysqli_connect(), mysqli_connect_errno(), mysqli_errno(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_connect_error(): ?string {}

	/**
	 * Adjusts the result pointer to an arbitrary row in the result
	 * <p>Object-oriented style</p><p>The <b>mysqli_data_seek()</b> function seeks to an arbitrary result pointer specified by the <code>offset</code> in the result set.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param int $offset <p>The field offset. Must be between zero and the total number of rows minus one (0..<code>mysqli_num_rows()</code> - 1).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-result.data-seek.php
	 * @see mysqli_store_result(), mysqli_fetch_row(), mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_query(), mysqli_num_rows()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_data_seek(\mysqli_result $result, int $offset): bool {}

	/**
	 * Performs debugging operations
	 * <p>Object-oriented style</p><p>Performs debugging operations using the Fred Fish debugging library.</p>
	 * @param string $options <p>A string representing the debugging operation to perform</p> <p>The debug control string is a sequence of colon separated fields as follows: <code><pre>&lt;field_1&gt;:&lt;field_2&gt;:&lt;field_N&gt;</pre></code> Each field consists of a mandatory flag character followed by an optional <code>,</code> and comma separated list of modifiers: <code>flag[,modifier,modifier,...,modifier]</code></p> <p></p> <b>Recognized Flag Characters</b>   <code>option</code> character Description     O <b><code>MYSQLND_DEBUG_FLUSH</code></b>   A/a <b><code>MYSQLND_DEBUG_APPEND</code></b>   F <b><code>MYSQLND_DEBUG_DUMP_FILE</code></b>   i <b><code>MYSQLND_DEBUG_DUMP_PID</code></b>   L <b><code>MYSQLND_DEBUG_DUMP_LINE</code></b>   m <b><code>MYSQLND_DEBUG_TRACE_MEMORY_CALLS</code></b>   n <b><code>MYSQLND_DEBUG_DUMP_LEVEL</code></b>   o output to file   T <b><code>MYSQLND_DEBUG_DUMP_TIME</code></b>   t <b><code>MYSQLND_DEBUG_DUMP_TRACE</code></b>   x <b><code>MYSQLND_DEBUG_PROFILE_CALLS</code></b>
	 * @return bool <p>Returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/mysqli.debug.php
	 * @see mysqli_dump_debug_info(), mysqli_report()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_debug(string $options): bool {}

	/**
	 * Dump debugging information into the log
	 * <p>Object-oriented style</p><p>This function is designed to be executed by an user with the SUPER privilege and is used to dump debugging information into the log for the MySQL Server relating to the connection.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.dump-debug-info.php
	 * @see mysqli_debug()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_dump_debug_info(\mysqli $mysql): bool {}

	/**
	 * Stop embedded server
	 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link https://php.net/manual/en/mysqli-driver.embedded-server-end.php
	 * @since PHP 5 >= 5.1.0, PHP 7 < 7.4.0
	 */
	function mysqli_embedded_server_end(): void {}

	/**
	 * Initialize and start embedded server
	 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $start
	 * @param array $arguments
	 * @param array $groups
	 * @return bool
	 * @link https://php.net/manual/en/mysqli-driver.embedded-server-start.php
	 * @since PHP 5 >= 5.1.0, PHP 7 < 7.4.0
	 */
	function mysqli_embedded_server_start(int $start, array $arguments, array $groups): bool {}

	/**
	 * Returns the error code for the most recent function call
	 * <p>Object-oriented style</p><p>Returns the last error code for the most recent MySQLi function call that can succeed or fail.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int <p>An error code value for the last call, if it failed. zero means no error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.errno.php
	 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_errno(\mysqli $mysql): int {}

	/**
	 * Returns a string description of the last error
	 * <p>Object-oriented style</p><p>Returns the last error message for the most recent MySQLi function call that can succeed or fail.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return string <p>A string that describes the error. An empty string if no error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.error.php
	 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_errno(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_error(\mysqli $mysql): string {}

	/**
	 * Returns a list of errors from the last command executed
	 * <p>Object-oriented style</p><p>Returns a array of errors for the most recent MySQLi function call that can succeed or fail.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return array <p>A list of errors, each as an associative <code>array</code> containing the errno, error, and sqlstate.</p>
	 * @link https://php.net/manual/en/mysqli.error-list.php
	 * @see mysqli_connect_errno(), mysqli_connect_error(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function mysqli_error_list(\mysqli $mysql): array {}

	/**
	 * Alias of mysqli_real_escape_string()
	 * <p>This function is an alias of: <code>mysqli_real_escape_string()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $string <p>The string to be escaped.</p> <p>Characters encoded are <code>NUL (ASCII 0), \n, \r, \, ', ", and Control-Z</code>.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.mysqli-escape-string.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_escape_string(\mysqli $mysql, string $string): string {}

	/**
	 * Alias for mysqli_stmt_execute()
	 * <p>This function is an alias of: <code>mysqli_stmt_execute()</code>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param ?array $params <p>An optional list <code>array</code> with as many elements as there are bound parameters in the SQL statement being executed. Each value is treated as a <code>string</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.mysqli-execute.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_execute(\mysqli_stmt $statement, ?array $params = null): bool {}

	/**
	 * Fetch all result rows as an associative array, a numeric array, or both
	 * <p>Object-oriented style</p><p>Returns a two-dimensional array of all result rows as an associative array, a numeric array, or both.</p><p><b>Note</b>:</p><p>Prior to PHP 8.1.0, available only with mysqlnd.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param int $mode <p>This optional parameter is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants <b><code>MYSQLI_ASSOC</code></b>, <b><code>MYSQLI_NUM</code></b>, or <b><code>MYSQLI_BOTH</code></b>.</p>
	 * @return array <p>Returns an array of associative or numeric arrays holding result rows.</p>
	 * @link https://php.net/manual/en/mysqli-result.fetch-all.php
	 * @see mysqli_fetch_array(), mysqli_fetch_column(), mysqli_query()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_fetch_all(\mysqli_result $result, int $mode = MYSQLI_NUM): array {}

	/**
	 * Fetch the next row of a result set as an associative, a numeric array, or both
	 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an array. Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p>In addition to storing the data in the numeric indices of the result array, this function can also store the data in associative indices by using the field names of the result set as keys.</p><p>If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, the numerically indexed version of the row must be used.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param int $mode <p>This optional parameter is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants <b><code>MYSQLI_ASSOC</code></b>, <b><code>MYSQLI_NUM</code></b>, or <b><code>MYSQLI_BOTH</code></b>.</p> <p>By using the <b><code>MYSQLI_ASSOC</code></b> constant this function will behave identically to the <code>mysqli_fetch_assoc()</code>, while <b><code>MYSQLI_NUM</code></b> will behave identically to the <code>mysqli_fetch_row()</code> function. The final option <b><code>MYSQLI_BOTH</code></b> will create a single array with the attributes of both.</p>
	 * @return array|null|false <p>Returns an array representing the fetched row, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-result.fetch-array.php
	 * @see mysqli_fetch_assoc(), mysqli_fetch_column(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_array(\mysqli_result $result, int $mode = MYSQLI_BOTH): array|null|false {}

	/**
	 * Fetch the next row of a result set as an associative array
	 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, <code>mysqli_fetch_row()</code> may be used to fetch the numerically indexed array, or aliases may be used in the SQL query select list to give columns different names.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return array|null|false <p>Returns an associative array representing the fetched row, where each key in the array represents the name of one of the result set's columns, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-result.fetch-assoc.php
	 * @see mysqli_fetch_array(), mysqli_fetch_column(), mysqli_fetch_row(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_assoc(\mysqli_result $result): array|null|false {}

	/**
	 * Fetch a single column from the next row of a result set
	 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns the 0-indexed column. Each subsequent call to this function will return the value from the next row within the result set, or <b><code>false</code></b> if there are no more rows.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param int $column <p>0-indexed number of the column you wish to retrieve from the row. If no value is supplied, the first column will be returned.</p>
	 * @return null|int|float|string|false <p>Returns a single column from the next row of a result set or <b><code>false</code></b> if there are no more rows.</p><p><b>Warning</b></p> <p>There is no way to return another column from the same row if you use this function to retrieve data.</p>
	 * @link https://php.net/manual/en/mysqli-result.fetch-column.php
	 * @see mysqli_fetch_all(), mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_object(), mysqli_fetch_row(), mysqli_data_seek()
	 * @since PHP 8 >= 8.1.0
	 */
	function mysqli_fetch_column(\mysqli_result $result, int $column = 0): null|int|float|string|false {}

	/**
	 * Returns the next field in the result set
	 * <p>Object-oriented style</p><p>Returns the definition of one column of a result set as an object. Call this function repeatedly to retrieve information about all columns in the result set.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return object|false <p>Returns an object which contains field definition information or <b><code>false</code></b> if no field information is available.</p> <b>Object properties</b>   Property Description     name The name of the column   orgname Original column name if an alias was specified   table The name of the table this field belongs to (if not calculated)   orgtable Original table name if an alias was specified   def Reserved for default value, currently always ""   db The name of the database   catalog The catalog name, always "def"   max_length The maximum width of the field for the result set.   length The width of the field, as specified in the table definition.   charsetnr The character set number for the field.   flags An integer representing the bit-flags for the field.   type The data type used for this field   decimals The number of decimals used (for integer fields)
	 * @link https://php.net/manual/en/mysqli-result.fetch-field.php
	 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_fields(), mysqli_field_seek()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_field(\mysqli_result $result): object|false {}

	/**
	 * Fetch meta-data for a single field
	 * <p>Object-oriented style</p><p>Returns an object which contains field definition information from the specified result set.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param int $index <p>The field number. This value must be in the range from <code>0</code> to <code>number of fields - 1</code>.</p>
	 * @return object|false <p>Returns an object which contains field definition information or <b><code>false</code></b> if no field information for specified <code>fieldnr</code> is available.</p> <b>Object attributes</b>   Attribute Description     name The name of the column   orgname Original column name if an alias was specified   table The name of the table this field belongs to (if not calculated)   orgtable Original table name if an alias was specified   def The default value for this field, represented as a string   max_length The maximum width of the field for the result set.   length The width of the field, as specified in the table definition.   charsetnr The character set number for the field.   flags An integer representing the bit-flags for the field.   type The data type used for this field   decimals The number of decimals used (for numeric fields)
	 * @link https://php.net/manual/en/mysqli-result.fetch-field-direct.php
	 * @see mysqli_num_fields(), mysqli_fetch_field(), mysqli_fetch_fields()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_field_direct(\mysqli_result $result, int $index): object|false {}

	/**
	 * Returns an array of objects representing the fields in a result set
	 * <p>Object-oriented style</p><p>This function serves an identical purpose to the <code>mysqli_fetch_field()</code> function with the single difference that, instead of returning one object at a time for each field, the columns are returned as an array of objects.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return array <p>Returns an array of objects containing field definition information.</p> <b>Object properties</b>   Property Description     name The name of the column   orgname Original column name if an alias was specified   table The name of the table this field belongs to (if not calculated)   orgtable Original table name if an alias was specified   max_length The maximum width of the field for the result set.   length  The width of the field, in bytes, as specified in the table definition. Note that this number (bytes) might differ from your table definition value (characters), depending on the character set you use. For example, the character set utf8 has 3 bytes per character, so varchar(10) will return a length of 30 for utf8 (10&#42;3), but return 10 for latin1 (10&#42;1).    charsetnr The character set number (id) for the field.   flags An integer representing the bit-flags for the field.   type The data type used for this field   decimals The number of decimals used (for integer fields)
	 * @link https://php.net/manual/en/mysqli-result.fetch-fields.php
	 * @see mysqli_num_fields(), mysqli_fetch_field_direct(), mysqli_fetch_field()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_fields(\mysqli_result $result): array {}

	/**
	 * Returns the lengths of the columns of the current row in the result set
	 * <p>Object-oriented style</p><p>The <b>mysqli_fetch_lengths()</b> function returns an array containing the lengths of every column of the current row within the result set.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return array|false <p>An array of integers representing the size of each column (not including any terminating null characters). <b><code>false</code></b> if an error occurred.</p><p><b>mysqli_fetch_lengths()</b> is valid only for the current row of the result set. It returns <b><code>false</code></b> if you call it before calling mysqli_fetch_row/array/object or after retrieving all rows in the result.</p>
	 * @link https://php.net/manual/en/mysqli-result.lengths.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_lengths(\mysqli_result $result): array|false {}

	/**
	 * Fetch the next row of a result set as an object
	 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an object, where each property represents the name of the result set's column. Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same name, the last column will take precedence and overwrite any previous data. To access multiple columns with the same name, <code>mysqli_fetch_row()</code> may be used to fetch the numerically indexed array, or aliases may be used in the SQL query select list to give columns different names.</p><p><b>Note</b>:  This function sets the properties of the object before calling the object constructor. </p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param string $class <p>The name of the class to instantiate, set the properties of and return. If not specified, a <b>stdClass</b> object is returned.</p>
	 * @param array $constructor_args <p>An optional <code>array</code> of parameters to pass to the constructor for <code>class</code> objects.</p>
	 * @return object|null|false <p>Returns an object representing the fetched row, where each property represents the name of the result set's column, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-result.fetch-object.php
	 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_column(), mysqli_fetch_row(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_object(\mysqli_result $result, string $class = "stdClass", array $constructor_args = []): object|null|false {}

	/**
	 * Fetch the next row of a result set as an enumerated array
	 * <p>Object-oriented style</p><p>Fetches one row of data from the result set and returns it as an enumerated array, where each column is stored in an array offset starting from 0 (zero). Each subsequent call to this function will return the next row within the result set, or <b><code>null</code></b> if there are no more rows.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>null</code></b> value.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return array|null|false <p>Returns an enumerated array representing the fetched row, <b><code>null</code></b> if there are no more rows in the result set, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-result.fetch-row.php
	 * @see mysqli_fetch_array(), mysqli_fetch_assoc(), mysqli_fetch_column(), mysqli_fetch_object(), mysqli_query(), mysqli_data_seek()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_fetch_row(\mysqli_result $result): array|null|false {}

	/**
	 * Returns the number of columns for the most recent query
	 * <p>Object-oriented style</p><p>Returns the number of columns for the most recent query on the connection represented by the <code>mysql</code> parameter. This function can be useful when using the <code>mysqli_store_result()</code> function to determine if the query should have produced a non-empty result set or not without knowing the nature of the query.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int <p>An integer representing the number of fields in a result set.</p>
	 * @link https://php.net/manual/en/mysqli.field-count.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_field_count(\mysqli $mysql): int {}

	/**
	 * Set result pointer to a specified field offset
	 * <p>Object-oriented style</p><p>Sets the field cursor to the given offset. The next call to <code>mysqli_fetch_field()</code> will retrieve the field definition of the column associated with that offset.</p><p><b>Note</b>:</p><p>To seek to the beginning of a row, pass an offset value of zero.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @param int $index <p>The field number. This value must be in the range from <code>0</code> to <code>number of fields - 1</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-result.field-seek.php
	 * @see mysqli_fetch_field()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_field_seek(\mysqli_result $result, int $index): bool {}

	/**
	 * Get current field offset of a result pointer
	 * <p>Object-oriented style</p><p>Returns the position of the field cursor used for the last <code>mysqli_fetch_field()</code> call. This value can be used as an argument to <code>mysqli_field_seek()</code>.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return int <p>Returns current offset of field cursor.</p>
	 * @link https://php.net/manual/en/mysqli-result.current-field.php
	 * @see mysqli_fetch_field(), mysqli_field_seek()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_field_tell(\mysqli_result $result): int {}

	/**
	 * Frees the memory associated with a result
	 * <p>Object-oriented style</p><p>Frees the memory associated with the result.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/mysqli-result.free.php
	 * @see mysqli_query(), mysqli_stmt_get_result(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_free_result(\mysqli_result $result): void {}

	/**
	 * Returns a character set object
	 * <p>Object-oriented style</p><p>Returns a character set object providing several properties of the current active character set.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return ?object <p>The function returns a character set object with the following properties:</p>  <code>charset</code>  <p>Character set name</p>  <code>collation</code>  <p>Collation name</p>  <code>dir</code>  <p>Directory the charset description was fetched from (&#63;) or "" for built-in character sets</p>  <code>min_length</code>  <p>Minimum character length in bytes</p>  <code>max_length</code>  <p>Maximum character length in bytes</p>  <code>number</code>  <p>Internal character set number</p>  <code>state</code>  <p>Character set status (&#63;)</p>
	 * @link https://php.net/manual/en/mysqli.get-charset.php
	 * @see mysqli_character_set_name(), mysqli_set_charset()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function mysqli_get_charset(\mysqli $mysql): ?object {}

	/**
	 * Get MySQL client info
	 * <p>Object-oriented style</p><p>Returns a string that represents the MySQL client library version.</p>
	 * @param ?\mysqli $mysql
	 * @return string <p>A string that represents the MySQL client library version.</p>
	 * @link https://php.net/manual/en/mysqli.get-client-info.php
	 * @see mysqli_get_client_version(), mysqli_get_server_info(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_get_client_info(?\mysqli $mysql = null): string {}

	/**
	 * Returns client per-process statistics
	 * <p>Returns client per-process statistics.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
	 * @return array <p>Returns an array with client stats.</p>
	 * @link https://php.net/manual/en/function.mysqli-get-client-stats.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_get_client_stats(): array {}

	/**
	 * Returns the MySQL client version as an integer
	 * <p>Object-oriented style</p><p>Returns client version number as an integer.</p>
	 * @return int <p>A number that represents the MySQL client library version in format: <code>main_version&#42;10000 + minor_version &#42;100 + sub_version</code>. For example, 4.1.0 is returned as 40100.</p><p>This is useful to quickly determine the version of the client library to know if some capability exists.</p>
	 * @link https://php.net/manual/en/mysqli.get-client-version.php
	 * @see mysqli_get_client_info(), mysqli_get_server_info(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_get_client_version(): int {}

	/**
	 * Returns statistics about the client connection
	 * <p>Object-oriented style</p><p>Returns statistics about the client connection.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return array <p>Returns an array with connection stats.</p>
	 * @link https://php.net/manual/en/mysqli.get-connection-stats.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_get_connection_stats(\mysqli $mysql): array {}

	/**
	 * Returns a string representing the type of connection used
	 * <p>Object-oriented style</p><p>Returns a string describing the connection represented by the <code>mysql</code> parameter (including the server host name).</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return string <p>A character string representing the server hostname and the connection type.</p>
	 * @link https://php.net/manual/en/mysqli.get-host-info.php
	 * @see mysqli_get_proto_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_get_host_info(\mysqli $mysql): string {}

	/**
	 * Return information about open and cached links
	 * <p><b>mysqli_get_links_stats()</b> returns information about open and cached MySQL links.</p>
	 * @return array <p><b>mysqli_get_links_stats()</b> returns an associative array with three elements, keyed as follows:</p>  <code>total</code>  <p>An <code>int</code> indicating the total number of open links in any state.</p>   <code>active_plinks</code>  <p>An <code>int</code> representing the number of active persistent connections.</p>   <code>cached_plinks</code>  <p>An <code>int</code> representing the number of inactive persistent connections.</p>
	 * @link https://php.net/manual/en/function.mysqli-get-links-stats.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function mysqli_get_links_stats(): array {}

	/**
	 * Returns the version of the MySQL protocol used
	 * <p>Object-oriented style</p><p>Returns an integer representing the MySQL protocol version used by the connection represented by the <code>mysql</code> parameter.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int <p>Returns an integer representing the protocol version.</p>
	 * @link https://php.net/manual/en/mysqli.get-proto-info.php
	 * @see mysqli_get_host_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_get_proto_info(\mysqli $mysql): int {}

	/**
	 * Returns the version of the MySQL server
	 * <p>Object-oriented style</p><p>Returns a string representing the version of the MySQL server that the MySQLi extension is connected to.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return string <p>A character string representing the server version.</p>
	 * @link https://php.net/manual/en/mysqli.get-server-info.php
	 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_version()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_get_server_info(\mysqli $mysql): string {}

	/**
	 * Returns the version of the MySQL server as an integer
	 * <p>Object-oriented style</p><p>The <b>mysqli_get_server_version()</b> function returns the version of the server connected to (represented by the <code>mysql</code> parameter) as an integer.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int <p>An integer representing the server version.</p><p>The form of this version number is <code>main_version &#42; 10000 + minor_version &#42; 100 + sub_version</code> (i.e. version 4.1.0 is 40100).</p>
	 * @link https://php.net/manual/en/mysqli.get-server-version.php
	 * @see mysqli_get_client_info(), mysqli_get_client_version(), mysqli_get_server_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_get_server_version(\mysqli $mysql): int {}

	/**
	 * Get result of SHOW WARNINGS
	 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \mysqli $mysql
	 * @return mysqli_warning|false
	 * @link https://php.net/manual/en/mysqli.get-warnings.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function mysqli_get_warnings(\mysqli $mysql): \mysqli_warning|false {}

	/**
	 * Retrieves information about the most recently executed query
	 * <p>Object-oriented style</p><p>The <b>mysqli_info()</b> function returns a string providing information about the last query executed. The nature of this string is provided below:</p><p></p><p><b>Note</b>:</p><p>Queries which do not fall into one of the preceding formats are not supported. In these situations, <b>mysqli_info()</b> will return an empty string.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return ?string <p>A character string representing additional information about the most recently executed query.</p>
	 * @link https://php.net/manual/en/mysqli.info.php
	 * @see mysqli_affected_rows(), mysqli_warning_count(), mysqli_num_rows()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_info(\mysqli $mysql): ?string {}

	/**
	 * Initializes MySQLi and returns an object for use with mysqli_real_connect()
	 * <p>Object-oriented style</p><p>Allocates or initializes a MYSQL object suitable for <code>mysqli_options()</code> and <code>mysqli_real_connect()</code>.</p><p><b>Note</b>:</p><p>Any subsequent calls to any mysqli function (except <code>mysqli_options()</code> and <code>mysqli_ssl_set()</code>) will fail until <code>mysqli_real_connect()</code> was called.</p>
	 * @return mysqli|false <p><b>mysqli::init()</b> returns <b><code>null</code></b> on success, or <b><code>false</code></b> on failure. <b>mysqli_init()</b> returns an object on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.init.php
	 * @see mysqli_options(), mysqli_close(), mysqli_real_connect(), mysqli_connect()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_init(): \mysqli|false {}

	/**
	 * Returns the value generated for an AUTO_INCREMENT column by the last query
	 * <p>Object-oriented style</p><p>Returns the ID generated by an <code>INSERT</code> or <code>UPDATE</code> query on a table with a column having the <code>AUTO_INCREMENT</code> attribute. In the case of a multiple-row <code>INSERT</code> statement, it returns the first automatically generated value that was successfully inserted.</p><p>Performing an <code>INSERT</code> or <code>UPDATE</code> statement using the <code>LAST_INSERT_ID()</code> MySQL function will also modify the value returned by <b>mysqli_insert_id()</b>. If <code>LAST_INSERT_ID(expr)</code> was used to generate the value of <code>AUTO_INCREMENT</code>, it returns the value of the last <code>expr</code> instead of the generated <code>AUTO_INCREMENT</code> value.</p><p>Returns <code>0</code> if the previous statement did not change an <code>AUTO_INCREMENT</code> value. <b>mysqli_insert_id()</b> must be called immediately after the statement that generated the value.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int|string <p>The value of the <code>AUTO_INCREMENT</code> field that was updated by the previous query. Returns zero if there was no previous query on the connection or if the query did not update an <code>AUTO_INCREMENT</code> value.</p><p>Only statements issued using the current connection affect the return value. The value is not affected by statements issued using other connections or clients.</p><p><b>Note</b>:</p><p>If the number is greater than the maximum int value, it will be returned as a string.</p>
	 * @link https://php.net/manual/en/mysqli.insert-id.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_insert_id(\mysqli $mysql): int|string {}

	/**
	 * Asks the server to kill a MySQL thread
	 * <p>Object-oriented style</p><p>This function is used to ask the server to kill a MySQL thread specified by the <code>process_id</code> parameter. This value must be retrieved by calling the <code>mysqli_thread_id()</code> function.</p><p>To stop a running query you should use the SQL command <code>KILL QUERY processid</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $process_id
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.kill.php
	 * @see mysqli_thread_id()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_kill(\mysqli $mysql, int $process_id): bool {}

	/**
	 * Check if there are any more query results from a multi query
	 * <p>Object-oriented style</p><p>Indicates if one or more result sets are available from a previous call to <code>mysqli_multi_query()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> if one or more result sets (including errors) are available from a previous call to <code>mysqli_multi_query()</code>, otherwise <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/mysqli.more-results.php
	 * @see mysqli_multi_query(), mysqli_next_result(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_more_results(\mysqli $mysql): bool {}

	/**
	 * Performs one or more queries on the database
	 * <p>Object-oriented style</p><p>Executes one or multiple queries which are concatenated by a semicolon.</p><p>Queries are sent asynchronously in a single call to the database, but the database processes them sequentially. <b>mysqli_multi_query()</b> waits for the first query to complete before returning control to PHP. The MySQL server will then process the next query in the sequence. Once the next result is ready, MySQL will wait for the next execution of <code>mysqli_next_result()</code> from PHP.</p><p>It is recommended to use do-while to process multiple queries. The connection will be busy until all queries have completed and their results are fetched to PHP. No other statement can be issued on the same connection until all queries are processed. To proceed to the next query in the sequence, use <code>mysqli_next_result()</code>. If the next result is not ready yet, mysqli will wait for the response from the MySQL server. To check if there are more results, use <code>mysqli_more_results()</code>.</p><p>For queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <code>mysqli_use_result()</code> or <code>mysqli_store_result()</code> can be used to retrieve the result set. For queries which do not produce a result set, the same functions can be used to retrieve information such as the number of affected rows.</p><p>Executing <code>CALL</code> statements for stored procedures can produce multiple result sets. If the stored procedure contains <code>SELECT</code> statements, the result sets are returned in the order that they are produced as the procedure executes. In general, the caller cannot know how many result sets a procedure will return and must be prepared to retrieve multiple results. The final result from the procedure is a status result that includes no result set. The status indicates whether the procedure succeeded or an error occurred.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $query <p>A string containing the queries to be executed. Multiple queries must be separated by a semicolon.</p> <p><b>Warning</b></p> Security warning: SQL injection<p>If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the <code>mysqli_real_escape_string()</code> function.</p>
	 * @return bool <p>Returns <b><code>false</code></b> if the first statement failed. To retrieve subsequent errors from other statements you have to call <code>mysqli_next_result()</code> first.</p>
	 * @link https://php.net/manual/en/mysqli.multi-query.php
	 * @see mysqli_query(), mysqli_use_result(), mysqli_store_result(), mysqli_next_result(), mysqli_more_results()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_multi_query(\mysqli $mysql, string $query): bool {}

	/**
	 * Prepare next result from multi_query
	 * <p>Object-oriented style</p><p>Prepares next result set from a previous call to <code>mysqli_multi_query()</code> which can be retrieved by <code>mysqli_store_result()</code> or <code>mysqli_use_result()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. Also returns <b><code>false</code></b> if the next statement resulted in an error, unlike <code>mysqli_more_results()</code>.</p>
	 * @link https://php.net/manual/en/mysqli.next-result.php
	 * @see mysqli_multi_query(), mysqli_more_results(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_next_result(\mysqli $mysql): bool {}

	/**
	 * Gets the number of fields in the result set
	 * <p>Object-oriented style</p><p>Returns the number of fields in the result set.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return int <p>An <code>int</code> representing the number of fields.</p>
	 * @link https://php.net/manual/en/mysqli-result.field-count.php
	 * @see mysqli_fetch_field()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_num_fields(\mysqli_result $result): int {}

	/**
	 * Gets the number of rows in the result set
	 * <p>Object-oriented style</p><p>Returns the number of rows in the result set.</p><p>The behaviour of <b>mysqli_num_rows()</b> depends on whether buffered or unbuffered result sets are being used. This function returns <code>0</code> for unbuffered result sets unless all rows have been fetched from the server.</p>
	 * @param \mysqli_result $result <p>A <code>mysqli_result</code> object returned by <code>mysqli_query()</code>, <code>mysqli_store_result()</code>, <code>mysqli_use_result()</code> or <code>mysqli_stmt_get_result()</code>.</p>
	 * @return int|string <p>An <code>int</code> representing the number of fetched rows. Returns <code>0</code> in unbuffered mode unless all rows have been fetched from the server.</p><p><b>Note</b>:</p><p>If the number of rows is greater than <b><code>PHP_INT_MAX</code></b>, the number will be returned as a <code>string</code>.</p>
	 * @link https://php.net/manual/en/mysqli-result.num-rows.php
	 * @see mysqli_affected_rows(), mysqli_store_result(), mysqli_use_result(), mysqli_query(), mysqli_stmt_num_rows()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_num_rows(\mysqli_result $result): int|string {}

	/**
	 * Set options
	 * <p>Object-oriented style</p><p>Used to set extra connect options and affect behavior for a connection.</p><p>This function may be called multiple times to set several options.</p><p><b>mysqli_options()</b> should be called after <code>mysqli_init()</code> and before <code>mysqli_real_connect()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $option <p>The option that you want to set. It can be one of the following values:</p> <b>Valid options</b>   Name Description     <b><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></b> Connection timeout in seconds   <b><code>MYSQLI_OPT_READ_TIMEOUT</code></b> Command execution result timeout in seconds. Available as of PHP 7.2.0.   <b><code>MYSQLI_OPT_LOCAL_INFILE</code></b> Enable/disable use of <code>LOAD LOCAL INFILE</code>   <b><code>MYSQLI_INIT_COMMAND</code></b> Command to execute after when connecting to MySQL server   <b><code>MYSQLI_SET_CHARSET_NAME</code></b> The charset to be set as default.   <b><code>MYSQLI_READ_DEFAULT_FILE</code></b>  Read options from named option file instead of my.cnf Not supported by mysqlnd.    <b><code>MYSQLI_READ_DEFAULT_GROUP</code></b>  Read options from the named group from my.cnf or the file specified with <b><code>MYSQL_READ_DEFAULT_FILE</code></b>. Not supported by mysqlnd.    <b><code>MYSQLI_SERVER_PUBLIC_KEY</code></b>  RSA public key file used with the SHA-256 based authentication.    <b><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></b>  The size of the internal command/network buffer. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></b>  Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></b>  Convert integer and float columns back to PHP numbers. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></b>  Whether to verify server certificate or not.
	 * @param string|int $value <p>The value for the option.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.options.php
	 * @see mysqli_init(), mysqli_real_connect()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_options(\mysqli $mysql, int $option, string|int $value): bool {}

	/**
	 * Pings a server connection, or tries to reconnect if the connection has gone down
	 * <p>Object-oriented style</p><p>Checks whether the connection to the server is working. If it has gone down and global option mysqli.reconnect is enabled, an automatic reconnection is attempted.</p><p><b>Note</b>:  The php.ini setting mysqli.reconnect is ignored by the mysqlnd driver, so automatic reconnection is never attempted. </p><p>This function can be used by clients that remain idle for a long while, to check whether the server has closed the connection and reconnect if necessary.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.ping.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_ping(\mysqli $mysql): bool {}

	/**
	 * Poll connections
	 * <p>Object-oriented style</p><p>Poll connections. The method can be used as static.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
	 * @param ?array $read <p>List of connections to check for outstanding results that can be read.</p>
	 * @param ?array $error <p>List of connections on which an error occurred, for example, query failure or lost connection.</p>
	 * @param array $reject <p>List of connections rejected because no asynchronous query has been run on for which the function could poll results.</p>
	 * @param int $seconds <p>Maximum number of seconds to wait, must be non-negative.</p>
	 * @param int $microseconds <p>Maximum number of microseconds to wait, must be non-negative.</p>
	 * @return int|false <p>Returns number of ready connections upon success, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/mysqli.poll.php
	 * @see mysqli_query(), mysqli_reap_async_query()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0): int|false {}

	/**
	 * Prepares an SQL statement for execution
	 * <p>Object-oriented style</p><p>Prepares the SQL query, and returns a statement handle to be used for further operations on the statement. The query must consist of a single SQL statement.</p><p>The statement template can contain zero or more question mark (<code>&#63;</code>) parameter markers&#8288;&mdash;also called placeholders. The parameter markers must be bound to application variables using <code>mysqli_stmt_bind_param()</code> before executing the statement.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $query <p>The query, as a string. It must consist of a single SQL statement.</p> <p>The SQL statement may contain zero or more parameter markers represented by question mark (<code>&#63;</code>) characters at the appropriate positions.</p> <p><b>Note</b>:</p><p>The markers are legal only in certain places in SQL statements. For example, they are permitted in the <code>VALUES()</code> list of an <code>INSERT</code> statement (to specify column values for a row), or in a comparison with a column in a <code>WHERE</code> clause to specify a comparison value.</p> <p>However, they are not permitted for identifiers (such as table or column names), or to specify both operands of a binary operator such as the <code>=</code> equal sign. The latter restriction is necessary because it would be impossible to determine the parameter type. In general, parameters are legal only in Data Manipulation Language (DML) statements, and not in Data Definition Language (DDL) statements.</p>
	 * @return mysqli_stmt|false <p><b>mysqli_prepare()</b> returns a statement object or <b><code>false</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.prepare.php
	 * @see mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_get_result(), mysqli_stmt_close()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_prepare(\mysqli $mysql, string $query): \mysqli_stmt|false {}

	/**
	 * Performs a query on the database
	 * <p>Object-oriented style</p><p>Performs a <code>query</code> against the database.</p><p>For non-DML queries (not INSERT, UPDATE or DELETE), this function is similar to calling <code>mysqli_real_query()</code> followed by either <code>mysqli_use_result()</code> or <code>mysqli_store_result()</code>.</p><p><b>Note</b>:</p><p>In the case where you pass a statement to <b>mysqli_query()</b> that is longer than <code>max_allowed_packet</code> of the server, the returned error codes are different depending on whether you are using MySQL Native Driver (<code>mysqlnd</code>) or MySQL Client Library (<code>libmysqlclient</code>). The behavior is as follows:</p><p><code>mysqlnd</code> on Linux returns an error code of 1153. The error message means got a packet bigger than <code>max_allowed_packet</code> bytes.</p><p><code>mysqlnd</code> on Windows returns an error code 2006. This error message means server has gone away.</p><p><code>libmysqlclient</code> on all platforms returns an error code 2006. This error message means server has gone away.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $query <p>The query string.</p> <p><b>Warning</b></p> Security warning: SQL injection<p>If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the <code>mysqli_real_escape_string()</code> function.</p>
	 * @param int $result_mode <p>The result mode can be one of 3 constants indicating how the result will be returned from the MySQL server.</p> <p><b><code>MYSQLI_STORE_RESULT</code></b> (default) - returns a <code>mysqli_result</code> object with buffered result set.</p> <p><b><code>MYSQLI_USE_RESULT</code></b> - returns a <code>mysqli_result</code> object with unbuffered result set. As long as there are pending records waiting to be fetched, the connection line will be busy and all subsequent calls will return error <code>Commands out of sync</code>. To avoid the error all records must be fetched from the server or the result set must be discarded by calling <code>mysqli_free_result()</code>.</p> <p><b><code>MYSQLI_ASYNC</code></b> (available with mysqlnd) - the query is performed asynchronously and no result set is immediately returned. <code>mysqli_poll()</code> is then used to get results from such queries. Used in combination with either <b><code>MYSQLI_STORE_RESULT</code></b> or <b><code>MYSQLI_USE_RESULT</code></b> constant.</p>
	 * @return mysqli_result|bool <p>Returns <b><code>false</code></b> on failure. For successful queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <b>mysqli_query()</b> will return a <code>mysqli_result</code> object. For other successful queries, <b>mysqli_query()</b> will return <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/mysqli.query.php
	 * @see mysqli_real_query(), mysqli_multi_query(), mysqli_prepare(), mysqli_free_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_query(\mysqli $mysql, string $query, int $result_mode = MYSQLI_STORE_RESULT): \mysqli_result|bool {}

	/**
	 * Opens a connection to a mysql server
	 * <p>Object-oriented style</p><p>Establish a connection to a MySQL database engine.</p><p>This function differs from <code>mysqli_connect()</code>:</p><p><b>mysqli_real_connect()</b> needs a valid object which has to be created by function <code>mysqli_init()</code>.</p><p>With the <code>mysqli_options()</code> function you can set various options for connection.</p><p>There is a <code>flags</code> parameter.</p>
	 * @param \mysqli $link
	 * @param string $host <p>Can be either a host name or an IP address. Passing the <b><code>null</code></b> value or the string "localhost" to this parameter, the local host is assumed. When possible, pipes will be used instead of the TCP/IP protocol.</p>
	 * @param string $username <p>The MySQL user name.</p>
	 * @param string $passwd <p>If provided or <b><code>null</code></b>, the MySQL server will attempt to authenticate the user against those user records which have no password only. This allows one username to be used with different permissions (depending on if a password as provided or not).</p>
	 * @param string $dbname <p>If provided will specify the default database to be used when performing queries.</p>
	 * @param int $port <p>Specifies the port number to attempt to connect to the MySQL server.</p>
	 * @param string $socket <p>Specifies the socket or named pipe that should be used.</p> <p><b>Note</b>:</p><p>Specifying the <code>socket</code> parameter will not explicitly determine the type of connection to be used when connecting to the MySQL server. How the connection is made to the MySQL database is determined by the <code>host</code> parameter.</p>
	 * @param int $flags <p>With the parameter <code>flags</code> you can set different connection options:</p>  <b>Supported flags</b>   Name Description     <b><code>MYSQLI_CLIENT_COMPRESS</code></b> Use compression protocol   <b><code>MYSQLI_CLIENT_FOUND_ROWS</code></b> return number of matched rows, not the number of affected rows   <b><code>MYSQLI_CLIENT_IGNORE_SPACE</code></b> Allow spaces after function names. Makes all function names reserved words.   <b><code>MYSQLI_CLIENT_INTERACTIVE</code></b>  Allow <code>interactive_timeout</code> seconds (instead of <code>wait_timeout</code> seconds) of inactivity before closing the connection    <b><code>MYSQLI_CLIENT_SSL</code></b> Use SSL (encryption)   <b><code>MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</code></b>  Like <b><code>MYSQLI_CLIENT_SSL</code></b>, but disables validation of the provided SSL certificate. This is only for installations using MySQL Native Driver and MySQL 5.6 or later.     <p><b>Note</b>:</p><p>For security reasons the <b><code>MULTI_STATEMENT</code></b> flag is not supported in PHP. If you want to execute multiple queries use the <code>mysqli_multi_query()</code> function.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.real-connect.php
	 * @see mysqli_connect(), mysqli_init(), mysqli_options(), mysqli_ssl_set(), mysqli_close()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_real_connect(\mysqli $link, string $host = null, string $username = null, string $passwd = null, string $dbname = null, int $port = null, string $socket = null, int $flags = null): bool {}

	/**
	 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
	 * <p>Object-oriented style</p><p>This function is used to create a legal SQL string that you can use in an SQL statement. The given string is encoded to produce an escaped SQL string, taking into account the current character set of the connection.</p><p>The character set must be set either at the server level, or with the API function <code>mysqli_set_charset()</code> for it to affect <b>mysqli_real_escape_string()</b>. See the concepts section on character sets for more information.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $string <p>The string to be escaped.</p> <p>Characters encoded are <code>NUL (ASCII 0), \n, \r, \, ', ", and Control-Z</code>.</p>
	 * @return string <p>Returns an escaped string.</p>
	 * @link https://php.net/manual/en/mysqli.real-escape-string.php
	 * @see mysqli_set_charset()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_real_escape_string(\mysqli $mysql, string $string): string {}

	/**
	 * Execute an SQL query
	 * <p>Object-oriented style</p><p>Executes a single query against the database whose result can then be retrieved or stored using the <code>mysqli_store_result()</code> or <code>mysqli_use_result()</code> functions.</p><p>In order to determine if a given query should return a result set or not, see <code>mysqli_field_count()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $query <p>The query string.</p> <p><b>Warning</b></p> Security warning: SQL injection<p>If the query contains any variable input then parameterized prepared statements should be used instead. Alternatively, the data must be properly formatted and all strings must be escaped using the <code>mysqli_real_escape_string()</code> function.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.real-query.php
	 * @see mysqli_query(), mysqli_store_result(), mysqli_use_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_real_query(\mysqli $mysql, string $query): bool {}

	/**
	 * Get result from async query
	 * <p>Object-oriented style</p><p>Get result from async query.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return mysqli_result|bool <p>Returns <b><code>false</code></b> on failure. For successful queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <b>mysqli_reap_async_query()</b> will return a <code>mysqli_result</code> object. For other successful queries, <b>mysqli_reap_async_query()</b> will return <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/mysqli.reap-async-query.php
	 * @see mysqli_poll()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_reap_async_query(\mysqli $mysql): \mysqli_result|bool {}

	/**
	 * Refreshes
	 * <p>Object-oriented style</p><p>Flushes tables or caches, or resets the replication server information.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $flags <p>The options to refresh, using the MYSQLI_REFRESH_&#42; constants as documented within the MySQLi constants documentation.</p> <p>See also the official MySQL Refresh documentation.</p>
	 * @return bool <p><b><code>true</code></b> if the refresh was a success, otherwise <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/mysqli.refresh.php
	 * @see mysqli_poll()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_refresh(\mysqli $mysql, int $flags): bool {}

	/**
	 * Removes the named savepoint from the set of savepoints of the current transaction
	 * <p>Object-oriented style</p><p>This function is identical to executing <code>$mysqli-&gt;query("RELEASE SAVEPOINT `$name`");</code>. This function does not trigger commit or rollback.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $name <p>The identifier of the savepoint.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.release-savepoint.php
	 * @see mysqli_savepoint()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function mysqli_release_savepoint(\mysqli $mysql, string $name): bool {}

	/**
	 * Alias of mysqli_driver->report_mode
	 * <p>This function is an alias of: mysqli_driver-&gt;report_mode</p>
	 * @link https://php.net/manual/en/function.mysqli-report.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_report() {}

	/**
	 * Rolls back current transaction
	 * <p>Object-oriented style</p><p>Rollbacks the current transaction for the database.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $flags <p>A bitmask of <b><code>MYSQLI_TRANS_COR_&#42;</code></b> constants.</p>
	 * @param ?string $name <p>If provided then <code>ROLLBACK/&#42;name&#42;/</code> is executed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.rollback.php
	 * @see mysqli_begin_transaction(), mysqli_commit(), mysqli_autocommit(), mysqli_release_savepoint()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_rollback(\mysqli $mysql, int $flags = 0, ?string $name = null): bool {}

	/**
	 * Set a named transaction savepoint
	 * <p>Object-oriented style</p><p>This function is identical to executing <code>$mysqli-&gt;query("SAVEPOINT `$name`");</code></p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $name <p>The identifier of the savepoint.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.savepoint.php
	 * @see mysqli_release_savepoint()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function mysqli_savepoint(\mysqli $mysql, string $name): bool {}

	/**
	 * Selects the default database for database queries
	 * <p>Object-oriented style</p><p>Selects the default database to be used when performing queries against the database connection.</p><p><b>Note</b>:</p><p>This function should only be used to change the default database for the connection. You can select the default database with 4th parameter in <code>mysqli_connect()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $database <p>The database name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.select-db.php
	 * @see mysqli_connect(), mysqli_real_connect()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_select_db(\mysqli $mysql, string $database): bool {}

	/**
	 * Sets the client character set
	 * <p>Object-oriented style</p><p>Sets the character set to be used when sending data from and to the database server.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param string $charset <p>The desired character set.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli.set-charset.php
	 * @see mysqli_character_set_name(), mysqli_real_escape_string()
	 * @since PHP 5 >= 5.0.5, PHP 7, PHP 8
	 */
	function mysqli_set_charset(\mysqli $mysql, string $charset): bool {}

	/**
	 * Alias of mysqli_options()
	 * <p>This function is an alias of: <code>mysqli_options()</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $option <p>The option that you want to set. It can be one of the following values:</p> <b>Valid options</b>   Name Description     <b><code>MYSQLI_OPT_CONNECT_TIMEOUT</code></b> Connection timeout in seconds   <b><code>MYSQLI_OPT_READ_TIMEOUT</code></b> Command execution result timeout in seconds. Available as of PHP 7.2.0.   <b><code>MYSQLI_OPT_LOCAL_INFILE</code></b> Enable/disable use of <code>LOAD LOCAL INFILE</code>   <b><code>MYSQLI_INIT_COMMAND</code></b> Command to execute after when connecting to MySQL server   <b><code>MYSQLI_SET_CHARSET_NAME</code></b> The charset to be set as default.   <b><code>MYSQLI_READ_DEFAULT_FILE</code></b>  Read options from named option file instead of my.cnf Not supported by mysqlnd.    <b><code>MYSQLI_READ_DEFAULT_GROUP</code></b>  Read options from the named group from my.cnf or the file specified with <b><code>MYSQL_READ_DEFAULT_FILE</code></b>. Not supported by mysqlnd.    <b><code>MYSQLI_SERVER_PUBLIC_KEY</code></b>  RSA public key file used with the SHA-256 based authentication.    <b><code>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</code></b>  The size of the internal command/network buffer. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_NET_READ_BUFFER_SIZE</code></b>  Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</code></b>  Convert integer and float columns back to PHP numbers. Only valid for mysqlnd.    <b><code>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</code></b>  Whether to verify server certificate or not.
	 * @param string|int $value <p>The value for the option.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.mysqli-set-opt.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_set_opt(\mysqli $mysql, int $option, string|int $value): bool {}

	/**
	 * Returns the SQLSTATE error from previous MySQL operation
	 * <p>Object-oriented style</p><p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <code>'00000'</code> means no error. The values are specified by ANSI SQL and ODBC. For a list of possible values, see http://dev.mysql.com/doc/mysql/en/error-handling.html.</p><p><b>Note</b>:</p><p>Note that not all MySQL errors are yet mapped to SQLSTATE's. The value <code>HY000</code> (general error) is used for unmapped errors.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <code>'00000'</code> means no error.</p>
	 * @link https://php.net/manual/en/mysqli.sqlstate.php
	 * @see mysqli_errno(), mysqli_error()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_sqlstate(\mysqli $mysql): string {}

	/**
	 * Used for establishing secure connections using SSL
	 * <p>Object-oriented style</p><p>Used for establishing secure connections using SSL. It must be called before <code>mysqli_real_connect()</code>. This function does nothing unless OpenSSL support is enabled.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param ?string $key <p>The path name to the key file.</p>
	 * @param ?string $certificate <p>The path name to the certificate file.</p>
	 * @param ?string $ca_certificate <p>The path name to the certificate authority file.</p>
	 * @param ?string $ca_path <p>The pathname to a directory that contains trusted SSL CA certificates in PEM format.</p>
	 * @param ?string $cipher_algos <p>A list of allowable ciphers to use for SSL encryption.</p>
	 * @return bool <p>This function always returns <b><code>true</code></b> value. If SSL setup is incorrect <code>mysqli_real_connect()</code> will return an error when you attempt to connect.</p>
	 * @link https://php.net/manual/en/mysqli.ssl-set.php
	 * @see mysqli_options(), mysqli_real_connect()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_ssl_set(\mysqli $mysql, ?string $key, ?string $certificate, ?string $ca_certificate, ?string $ca_path, ?string $cipher_algos): bool {}

	/**
	 * Gets the current system status
	 * <p>Object-oriented style</p><p><b>mysqli_stat()</b> returns a string containing information similar to that provided by the 'mysqladmin status' command. This includes uptime in seconds and the number of running threads, questions, reloads, and open tables.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return string|false <p>A string describing the server status. <b><code>false</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.stat.php
	 * @see mysqli_get_server_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stat(\mysqli $mysql): string|false {}

	/**
	 * Returns the total number of rows changed, deleted, inserted, or matched by the last statement executed
	 * <p>Object-oriented style</p><p>Returns the number of rows affected by <code>INSERT</code>, <code>UPDATE</code>, or <code>DELETE</code> query. Works like <code>mysqli_stmt_num_rows()</code> for <code>SELECT</code> statements.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return int|string <p>An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records were updated for an <code>UPDATE</code> statement, no rows matched the <code>WHERE</code> clause in the query or that no query has yet been executed. <code>-1</code> indicates that the query returned an error or that, for a <code>SELECT</code> query, <b>mysqli_stmt_affected_rows()</b> was called prior to calling <code>mysqli_stmt_store_result()</code>.</p><p><b>Note</b>:</p><p>If the number of affected rows is greater than maximum PHP int value, the number of affected rows will be returned as a string value.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.affected-rows.php
	 * @see mysqli_stmt_num_rows(), mysqli_stmt_store_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_affected_rows(\mysqli_stmt $statement): int|string {}

	/**
	 * Used to get the current value of a statement attribute
	 * <p>Object-oriented style</p><p>Gets the current value of a statement attribute.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param int $attribute <p>The attribute that you want to get.</p>
	 * @return int <p>Returns the value of the attribute.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.attr-get.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_attr_get(\mysqli_stmt $statement, int $attribute): int {}

	/**
	 * Used to modify the behavior of a prepared statement
	 * <p>Object-oriented style</p><p>Used to modify the behavior of a prepared statement. This function may be called multiple times to set several attributes.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param int $attribute <p>The attribute that you want to set. It can have one of the following values:</p> <b>Attribute values</b>   Character Description     MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH  Setting to <b><code>true</code></b> causes <code>mysqli_stmt_store_result()</code> to update the metadata <code>MYSQL_FIELD-&gt;max_length</code> value.    MYSQLI_STMT_ATTR_CURSOR_TYPE  Type of cursor to open for statement when <code>mysqli_stmt_execute()</code> is invoked. <code>value</code> can be <code>MYSQLI_CURSOR_TYPE_NO_CURSOR</code> (the default) or <code>MYSQLI_CURSOR_TYPE_READ_ONLY</code>.    MYSQLI_STMT_ATTR_PREFETCH_ROWS  Number of rows to fetch from server at a time when using a cursor. <code>value</code> can be in the range from 1 to the maximum value of unsigned long. The default is 1.     <p>If you use the <code>MYSQLI_STMT_ATTR_CURSOR_TYPE</code> option with <code>MYSQLI_CURSOR_TYPE_READ_ONLY</code>, a cursor is opened for the statement when you invoke <code>mysqli_stmt_execute()</code>. If there is already an open cursor from a previous <code>mysqli_stmt_execute()</code> call, it closes the cursor before opening a new one. <code>mysqli_stmt_reset()</code> also closes any open cursor before preparing the statement for re-execution. <code>mysqli_stmt_free_result()</code> closes any open cursor.</p> <p>If you open a cursor for a prepared statement, <code>mysqli_stmt_store_result()</code> is unnecessary.</p>
	 * @param int $value <p>The value to assign to the attribute.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.attr-set.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_attr_set(\mysqli_stmt $statement, int $attribute, int $value): bool {}

	/**
	 * Binds variables to a prepared statement as parameters
	 * <p>Object-oriented style</p><p>Bind variables for the parameter markers in the SQL statement prepared by <code>mysqli_prepare()</code> or <code>mysqli_stmt_prepare()</code>.</p><p><b>Note</b>:</p><p>If data size of a variable exceeds max. allowed packet size (max_allowed_packet), you have to specify <code>b</code> in <code>types</code> and use <code>mysqli_stmt_send_long_data()</code> to send the data in packets.</p><p><b>Note</b>:</p><p>Care must be taken when using <b>mysqli_stmt_bind_param()</b> in conjunction with <code>call_user_func_array()</code>. Note that <b>mysqli_stmt_bind_param()</b> requires parameters to be passed by reference, whereas <code>call_user_func_array()</code> can accept as a parameter a list of variables that can represent references or values.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param string $types <p>A string that contains one or more characters which specify the types for the corresponding bind variables:</p> <b>Type specification chars</b>   Character Description     i corresponding variable has type integer   d corresponding variable has type double   s corresponding variable has type string   b corresponding variable is a blob and will be sent in packets
	 * @param mixed $var
	 * @param mixed $vars <p>The number of variables and length of string <code>types</code> must match the parameters in the statement.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.bind-param.php
	 * @see mysqli_stmt_bind_result(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_send_long_data(), mysqli_stmt_errno(), mysqli_stmt_error()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_bind_param(\mysqli_stmt $statement, string $types, mixed &$var, mixed &...$vars): bool {}

	/**
	 * Binds variables to a prepared statement for result storage
	 * <p>Object-oriented style</p><p>Binds columns in the result set to variables.</p><p>When <code>mysqli_stmt_fetch()</code> is called to fetch data, the MySQL client/server protocol places the data for the bound columns into the specified variables <code>var</code>/<code>vars</code>.</p><p>A column can be bound or rebound at any time, even after a result set has been partially retrieved. The new binding takes effect the next time <code>mysqli_stmt_fetch()</code> is called.</p><p><b>Note</b>:</p><p>All columns must be bound after <code>mysqli_stmt_execute()</code> and prior to calling <code>mysqli_stmt_fetch()</code>.</p><p><b>Note</b>:</p><p>Depending on column types bound variables can silently change to the corresponding PHP type.</p><p>This functions is useful for simple results. To retrieve iterable result set, or fetch each row as an array or object, use <code>mysqli_stmt_get_result()</code>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param mixed $var <p>The first variable to be bound.</p>
	 * @param mixed $vars <p>Further variables to be bound.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.bind-result.php
	 * @see mysqli_stmt_get_result(), mysqli_stmt_bind_param(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_prepare(), mysqli_stmt_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_bind_result(\mysqli_stmt $statement, mixed &$var, mixed &...$vars): bool {}

	/**
	 * Closes a prepared statement
	 * <p>Object-oriented style</p><p>Closes a prepared statement. <b>mysqli_stmt_close()</b> also deallocates the statement handle. If the current statement has pending or unread results, this function cancels them so that the next query can be executed.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.close.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_close(\mysqli_stmt $statement): bool {}

	/**
	 * Seeks to an arbitrary row in statement result set
	 * <p>Object-oriented style</p><p>Seeks to an arbitrary result pointer in the statement result set.</p><p><code>mysqli_stmt_store_result()</code> must be called prior to <b>mysqli_stmt_data_seek()</b>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param int $offset <p>Must be between zero and the total number of rows minus one (0.. <code>mysqli_stmt_num_rows()</code> - 1).</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.data-seek.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_data_seek(\mysqli_stmt $statement, int $offset): void {}

	/**
	 * Returns the error code for the most recent statement call
	 * <p>Object-oriented style</p><p>Returns the error code for the most recently invoked statement function that can succeed or fail.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return int <p>An error code value. Zero means no error occurred.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.errno.php
	 * @see mysqli_stmt_error(), mysqli_stmt_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_errno(\mysqli_stmt $statement): int {}

	/**
	 * Returns a string description for last statement error
	 * <p>Object-oriented style</p><p>Returns a string containing the error message for the most recently invoked statement function that can succeed or fail.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return string <p>A string that describes the error. An empty string if no error occurred.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.error.php
	 * @see mysqli_stmt_errno(), mysqli_stmt_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_error(\mysqli_stmt $statement): string {}

	/**
	 * Returns a list of errors from the last statement executed
	 * <p>Object-oriented style</p><p>Returns an array of errors for the most recently invoked statement function that can succeed or fail.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return array <p>A list of errors, each as an associative <code>array</code> containing the errno, error, and sqlstate.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.error-list.php
	 * @see mysqli_stmt_error(), mysqli_stmt_errno(), mysqli_stmt_sqlstate()
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function mysqli_stmt_error_list(\mysqli_stmt $statement): array {}

	/**
	 * Executes a prepared statement
	 * <p>Object-oriented style</p><p>Executes previously prepared statement. The statement must be successfully prepared prior to execution, using either the <code>mysqli_prepare()</code> or <code>mysqli_stmt_prepare()</code> function, or by passing the second argument to <code>mysqli_stmt::__construct()</code>.</p><p>If the statement is <code>UPDATE</code>, <code>DELETE</code>, or <code>INSERT</code>, the total number of affected rows can be determined by using the <code>mysqli_stmt_affected_rows()</code> function. If the query yields a result set, it can be fetched using <code>mysqli_stmt_get_result()</code> function or by fetching it row by row directly from the statement using <code>mysqli_stmt_fetch()</code> function.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param ?array $params <p>An optional list <code>array</code> with as many elements as there are bound parameters in the SQL statement being executed. Each value is treated as a <code>string</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.execute.php
	 * @see mysqli_prepare(), mysqli_stmt_bind_param(), mysqli_stmt_get_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_execute(\mysqli_stmt $statement, ?array $params = null): bool {}

	/**
	 * Fetch results from a prepared statement into the bound variables
	 * <p>Object-oriented style</p><p>Fetch the result from a prepared statement into the variables bound by <code>mysqli_stmt_bind_result()</code>.</p><p><b>Note</b>:</p><p>Note that all columns must be bound by the application before calling <b>mysqli_stmt_fetch()</b>.</p><p><b>Note</b>:</p><p>Data are transferred unbuffered without calling <code>mysqli_stmt_store_result()</code> which can decrease performance (but reduces memory cost).</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return ?bool <b>Return Values</b>   Value Description     <b><code>true</code></b> Success. Data has been fetched   <b><code>false</code></b> Error occurred   <b><code>null</code></b> No more rows/data exists or data truncation occurred
	 * @link https://php.net/manual/en/mysqli-stmt.fetch.php
	 * @see mysqli_prepare(), mysqli_stmt_errno(), mysqli_stmt_error(), mysqli_stmt_bind_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_fetch(\mysqli_stmt $statement): ?bool {}

	/**
	 * Returns the number of columns in the given statement
	 * <p>Object-oriented style</p><p>Returns the number of columns in the prepared statement.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return int <p>Returns an integer representing the number of columns.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.field-count.php
	 * @see mysqli_stmt_num_rows()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_field_count(\mysqli_stmt $statement): int {}

	/**
	 * Frees stored result memory for the given statement handle
	 * <p>Object-oriented style</p><p>Frees the result memory associated with the statement, which was allocated by <code>mysqli_stmt_store_result()</code>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.free-result.php
	 * @see mysqli_stmt_store_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_free_result(\mysqli_stmt $statement): void {}

	/**
	 * Gets a result set from a prepared statement as a mysqli_result object
	 * <p>Object-oriented style</p><p>Retrieves a result set from a prepared statement as a <code>mysqli_result</code> object. The data will be fetched from the MySQL server to PHP. This method should be called only for queries which produce a result set.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p><p><b>Note</b>:</p><p>This function cannot be used together with <code>mysqli_stmt_store_result()</code>. Both of these functions retrieve the full result set from the MySQL server.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return mysqli_result|false <p>Returns <b><code>false</code></b> on failure. For successful queries which produce a result set, such as <code>SELECT, SHOW, DESCRIBE</code> or <code>EXPLAIN</code>, <b>mysqli_stmt_get_result()</b> will return a <code>mysqli_result</code> object. For other successful queries, <b>mysqli_stmt_get_result()</b> will return <b><code>false</code></b>. The <code>mysqli_stmt_errno()</code> function can be used to distinguish between the two reasons for <b><code>false</code></b>; due to a bug, prior to PHP 7.4.13, <code>mysqli_errno()</code> had to be used for this purpose.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.get-result.php
	 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch(), mysqli_fetch_array(), mysqli_stmt_store_result()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_stmt_get_result(\mysqli_stmt $statement): \mysqli_result|false {}

	/**
	 * Get result of SHOW WARNINGS
	 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \mysqli_stmt $statement
	 * @return mysqli_warning|false
	 * @link https://php.net/manual/en/mysqli-stmt.get-warnings.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function mysqli_stmt_get_warnings(\mysqli_stmt $statement): \mysqli_warning|false {}

	/**
	 * Initializes a statement and returns an object for use with mysqli_stmt_prepare
	 * <p>Object-oriented style</p><p>Allocates and initializes a statement object suitable for <code>mysqli_stmt_prepare()</code>.</p><p><b>Note</b>:</p><p>Any subsequent calls to any mysqli_stmt function will fail until <code>mysqli_stmt_prepare()</code> was called.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return mysqli_stmt|false <p>Returns an object.</p>
	 * @link https://php.net/manual/en/mysqli.stmt-init.php
	 * @see mysqli_stmt_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_init(\mysqli $mysql): \mysqli_stmt|false {}

	/**
	 * Get the ID generated from the previous INSERT operation
	 * <p>Object-oriented style</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \mysqli_stmt $statement
	 * @return int|string
	 * @link https://php.net/manual/en/mysqli-stmt.insert-id.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_insert_id(\mysqli_stmt $statement): int|string {}

	/**
	 * Check if there are more query results from a multiple query
	 * <p>Object-oriented style</p><p>Checks if there are more query results from a multiple query.</p><p><b>Note</b>:</p><p>Available only with mysqlnd.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if more results exist, otherwise <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.more-results.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_stmt_more_results(\mysqli_stmt $statement): bool {}

	/**
	 * Reads the next result from a multiple query
	 * <p>Object-oriented style</p><p>Reads the next result from a multiple query.</p><p><b>Note</b>:</p><p>Prior to PHP 8.1.0, available only with mysqlnd.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.next-result.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mysqli_stmt_next_result(\mysqli_stmt $statement): bool {}

	/**
	 * Returns the number of rows fetched from the server
	 * <p>Object-oriented style</p><p>Returns the number of rows buffered in the statement. This function will only work after <code>mysqli_stmt_store_result()</code> is called to buffer the entire result set in the statement handle.</p><p>This function returns <code>0</code> unless all rows have been fetched from the server.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return int|string <p>An <code>int</code> representing the number of buffered rows. Returns <code>0</code> in unbuffered mode unless all rows have been fetched from the server.</p><p><b>Note</b>:</p><p>If the number of rows is greater than <b><code>PHP_INT_MAX</code></b>, the number will be returned as a <code>string</code>.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.num-rows.php
	 * @see mysqli_stmt_store_result(), mysqli_stmt_affected_rows(), mysqli_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_num_rows(\mysqli_stmt $statement): int|string {}

	/**
	 * Returns the number of parameters for the given statement
	 * <p>Object-oriented style</p><p>Returns the number of parameter markers present in the prepared statement.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return int <p>Returns an integer representing the number of parameters.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.param-count.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_param_count(\mysqli_stmt $statement): int {}

	/**
	 * Prepares an SQL statement for execution
	 * <p>Object-oriented style</p><p>Prepares a statement for execution. The query must consist of a single SQL statement.</p><p>The statement template can contain zero or more question mark (<code>&#63;</code>) parameter markers&#8288;&mdash;also called placeholders. The parameter markers must be bound to application variables using <code>mysqli_stmt_bind_param()</code> before executing the statement.</p><p><b>Note</b>:</p><p>In the case where you pass a statement to <b>mysqli_stmt_prepare()</b> that is longer than <code>max_allowed_packet</code> of the server, the returned error codes are different depending on whether you are using MySQL Native Driver (<code>mysqlnd</code>) or MySQL Client Library (<code>libmysqlclient</code>). The behavior is as follows:</p><p><code>mysqlnd</code> on Linux returns an error code of 1153. The error message means got a packet bigger than <code>max_allowed_packet</code> bytes.</p><p><code>mysqlnd</code> on Windows returns an error code 2006. This error message means server has gone away.</p><p><code>libmysqlclient</code> on all platforms returns an error code 2006. This error message means server has gone away.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param string $query <p>The query, as a string. It must consist of a single SQL statement.</p> <p>The SQL statement may contain zero or more parameter markers represented by question mark (<code>&#63;</code>) characters at the appropriate positions.</p> <p><b>Note</b>:</p><p>The markers are legal only in certain places in SQL statements. For example, they are permitted in the <code>VALUES()</code> list of an <code>INSERT</code> statement (to specify column values for a row), or in a comparison with a column in a <code>WHERE</code> clause to specify a comparison value.</p> <p>However, they are not permitted for identifiers (such as table or column names), or to specify both operands of a binary operator such as the <code>=</code> equal sign. The latter restriction is necessary because it would be impossible to determine the parameter type. In general, parameters are legal only in Data Manipulation Language (DML) statements, and not in Data Definition Language (DDL) statements.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.prepare.php
	 * @see mysqli_stmt_init(), mysqli_stmt_execute(), mysqli_stmt_fetch(), mysqli_stmt_bind_param(), mysqli_stmt_bind_result(), mysqli_stmt_get_result(), mysqli_stmt_close()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_prepare(\mysqli_stmt $statement, string $query): bool {}

	/**
	 * Resets a prepared statement
	 * <p>Object-oriented style</p><p>Resets a prepared statement on client and server to state after prepare.</p><p>It resets the statement on the server, data sent using <code>mysqli_stmt_send_long_data()</code>, unbuffered result sets and current errors. It does not clear bindings or stored result sets. Stored result sets will be cleared when executing the prepared statement (or closing it).</p><p>To prepare a statement with another query use function <code>mysqli_stmt_prepare()</code>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.reset.php
	 * @see mysqli_prepare()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_reset(\mysqli_stmt $statement): bool {}

	/**
	 * Returns result set metadata from a prepared statement
	 * <p>Object-oriented style</p><p>If a statement passed to <code>mysqli_prepare()</code> is one that produces a result set, <b>mysqli_stmt_result_metadata()</b> returns the result object that can be used to process the meta information such as total number of fields and individual field information.</p><p><b>Note</b>:</p><p>This result set pointer can be passed as an argument to any of the field-based functions that process result set metadata, such as:</p><p><code>mysqli_num_fields()</code></p><p><code>mysqli_fetch_field()</code></p><p><code>mysqli_fetch_field_direct()</code></p><p><code>mysqli_fetch_fields()</code></p><p><code>mysqli_field_count()</code></p><p><code>mysqli_field_seek()</code></p><p><code>mysqli_field_tell()</code></p><p><code>mysqli_free_result()</code></p><p>The result set structure should be freed when you are done with it, which you can do by passing it to <code>mysqli_free_result()</code></p><p><b>Note</b>:</p><p>The result set returned by <b>mysqli_stmt_result_metadata()</b> contains only metadata. It does not contain any row results. The rows are obtained by using the statement handle with <code>mysqli_stmt_fetch()</code>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return mysqli_result|false <p>Returns a result object or <b><code>false</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.result-metadata.php
	 * @see mysqli_prepare(), mysqli_free_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_result_metadata(\mysqli_stmt $statement): \mysqli_result|false {}

	/**
	 * Send data in blocks
	 * <p>Object-oriented style</p><p>Allows to send parameter data to the server in pieces (or chunks), e.g. if the size of a blob exceeds the size of <code>max_allowed_packet</code>. This function can be called multiple times to send the parts of a character or binary data value for a column, which must be one of the TEXT or BLOB datatypes.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @param int $param_num <p>Indicates which parameter to associate the data with. Parameters are numbered beginning with 0.</p>
	 * @param string $data <p>A string containing data to be sent.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.send-long-data.php
	 * @see mysqli_prepare(), mysqli_stmt_bind_param()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_send_long_data(\mysqli_stmt $statement, int $param_num, string $data): bool {}

	/**
	 * Returns SQLSTATE error from previous statement operation
	 * <p>Object-oriented style</p><p>Returns a string containing the SQLSTATE error code for the most recently invoked prepared statement function that can succeed or fail. The error code consists of five characters. <code>'00000'</code> means no error. The values are specified by ANSI SQL and ODBC. For a list of possible values, see http://dev.mysql.com/doc/mysql/en/error-handling.html.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <code>'00000'</code> means no error.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.sqlstate.php
	 * @see mysqli_stmt_errno(), mysqli_stmt_error()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_sqlstate(\mysqli_stmt $statement): string {}

	/**
	 * Stores a result set in an internal buffer
	 * <p>Object-oriented style</p><p>This function should be called for queries that successfully produce a result set (e.g. <code>SELECT, SHOW, DESCRIBE, EXPLAIN</code>) only if the complete result set needs to be buffered in PHP. Each subsequent <code>mysqli_stmt_fetch()</code> call will return buffered data.</p><p><b>Note</b>:</p><p>It is unnecessary to call <b>mysqli_stmt_store_result()</b> for other queries, but if you do, it will not harm or cause any notable performance loss in all cases. You can detect whether the query produced a result set by checking if <code>mysqli_stmt_result_metadata()</code> returns <b><code>false</code></b>.</p>
	 * @param \mysqli_stmt $statement <p>A <code>mysqli_stmt</code> object returned by <code>mysqli_stmt_init()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/mysqli-stmt.store-result.php
	 * @see mysqli_prepare(), mysqli_stmt_result_metadata(), mysqli_stmt_fetch()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_stmt_store_result(\mysqli_stmt $statement): bool {}

	/**
	 * Transfers a result set from the last query
	 * <p>Object-oriented style</p><p>Transfers the result set from the last query on the database connection represented by the <code>mysql</code> parameter to be used with the <code>mysqli_data_seek()</code> function.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @param int $mode <p>The option that you want to set. It can be one of the following values:</p> <b>Valid options</b>   Name Description     <b><code>MYSQLI_STORE_RESULT_COPY_DATA</code></b> Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default, mysqlnd will use a reference logic to avoid copying and duplicating results held in memory. For certain result sets, for example, result sets with many small rows, the copy approach can reduce the overall memory usage because PHP variables holding results may be released earlier (available with mysqlnd only)
	 * @return mysqli_result|false <p>Returns a buffered result object or <b><code>false</code></b> if an error occurred.</p><p><b>Note</b>:</p><p><b>mysqli_store_result()</b> returns <b><code>false</code></b> in case the query didn't return a result set (if the query was, for example an INSERT statement). This function also returns <b><code>false</code></b> if the reading of the result set failed. You can check if you have got an error by checking if <code>mysqli_error()</code> doesn't return an empty string, if <code>mysqli_errno()</code> returns a non zero value, or if <code>mysqli_field_count()</code> returns a non zero value. Also possible reason for this function returning <b><code>false</code></b> after successful call to <code>mysqli_query()</code> can be too large result set (memory for it cannot be allocated). If <code>mysqli_field_count()</code> returns a non-zero value, the statement should have produced a non-empty result set.</p>
	 * @link https://php.net/manual/en/mysqli.store-result.php
	 * @see mysqli_real_query(), mysqli_use_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_store_result(\mysqli $mysql, int $mode = 0): \mysqli_result|false {}

	/**
	 * Returns the thread ID for the current connection
	 * <p>Object-oriented style</p><p>The <b>mysqli_thread_id()</b> function returns the thread ID for the current connection which can then be killed using the <code>mysqli_kill()</code> function. If the connection is lost and you reconnect with <code>mysqli_ping()</code>, the thread ID will be other. Therefore you should get the thread ID only when you need it.</p><p><b>Note</b>:</p><p>The thread ID is assigned on a connection-by-connection basis. Hence, if the connection is broken and then re-established a new thread ID will be assigned.</p><p>To kill a running query you can use the SQL command <code>KILL QUERY processid</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int <p>Returns the Thread ID for the current connection.</p>
	 * @link https://php.net/manual/en/mysqli.thread-id.php
	 * @see mysqli_kill()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_thread_id(\mysqli $mysql): int {}

	/**
	 * Returns whether thread safety is given or not
	 * <p>Object-oriented style</p><p>Tells whether the client library is compiled as thread-safe.</p>
	 * @return bool <p><b><code>true</code></b> if the client library is thread-safe, otherwise <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/mysqli.thread-safe.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_thread_safe(): bool {}

	/**
	 * Initiate a result set retrieval
	 * <p>Object-oriented style</p><p>Used to initiate the retrieval of a result set from the last query executed using the <code>mysqli_real_query()</code> function on the database connection.</p><p>Either this or the <code>mysqli_store_result()</code> function must be called before the results of a query can be retrieved, and one or the other must be called to prevent the next query on that database connection from failing.</p><p><b>Note</b>:</p><p>The <b>mysqli_use_result()</b> function does not transfer the entire result set from the database and hence cannot be used functions such as <code>mysqli_data_seek()</code> to move to a particular row within the set. To use this functionality, the result set must be stored using <code>mysqli_store_result()</code>. One should not use <b>mysqli_use_result()</b> if a lot of processing on the client side is performed, since this will tie up the server and prevent other threads from updating any tables from which the data is being fetched.</p>
	 * @param \mysqli $mysql
	 * @return mysqli_result|false <p>Returns an unbuffered result object or <b><code>false</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/mysqli.use-result.php
	 * @see mysqli_real_query(), mysqli_store_result()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_use_result(\mysqli $mysql): \mysqli_result|false {}

	/**
	 * Returns the number of warnings from the last query for the given link
	 * <p>Object-oriented style</p><p>Returns the number of warnings from the last query in the connection.</p><p><b>Note</b>:</p><p>For retrieving warning messages you can use the SQL command <code>SHOW WARNINGS [limit row_count]</code>.</p>
	 * @param \mysqli $mysql <p>A <code>mysqli</code> object returned by <code>mysqli_connect()</code> or <code>mysqli_init()</code></p>
	 * @return int <p>Number of warnings or zero if there are no warnings.</p>
	 * @link https://php.net/manual/en/mysqli.warning-count.php
	 * @see mysqli_errno(), mysqli_error(), mysqli_sqlstate()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mysqli_warning_count(\mysqli $mysql): int {}

	/**
	 * <p>Columns are returned into the array having the fieldname as the array index.</p>
	 */
	define('MYSQLI_ASSOC', 1);

	/**
	 * <p>Field is defined as <code>AUTO_INCREMENT</code></p>
	 */
	define('MYSQLI_AUTO_INCREMENT_FLAG', 512);

	/**
	 * <p>Field is defined as <code>BINARY</code>.</p>
	 */
	define('MYSQLI_BINARY_FLAG', 128);

	/**
	 * <p>Field is defined as <code>BLOB</code></p>
	 */
	define('MYSQLI_BLOB_FLAG', 16);

	/**
	 * <p>Columns are returned into the array having both a numerical index and the fieldname as the associative index.</p>
	 */
	define('MYSQLI_BOTH', 3);

	/**
	 * <p>Use compression protocol</p>
	 */
	define('MYSQLI_CLIENT_COMPRESS', 32);

	/**
	 * <p>Allow spaces after function names. Makes all functions names reserved words.</p>
	 */
	define('MYSQLI_CLIENT_IGNORE_SPACE', 256);

	/**
	 * <p>Allow <code>interactive_timeout</code> seconds (instead of <code>wait_timeout</code> seconds) of inactivity before closing the connection. The client's session <code>wait_timeout</code> variable will be set to the value of the session <code>interactive_timeout</code> variable.</p>
	 */
	define('MYSQLI_CLIENT_INTERACTIVE', 1024);

	/**
	 * <p>Allows multiple semicolon-delimited queries in a single <code>mysqli_query()</code> call.</p>
	 */
	define('MYSQLI_CLIENT_MULTI_QUERIES', null);

	/**
	 * <p>Don't allow the <code>db_name.tbl_name.col_name</code> syntax.</p>
	 */
	define('MYSQLI_CLIENT_NO_SCHEMA', 16);

	/**
	 * <p>Use SSL (encrypted protocol). This option should not be set by application programs; it is set internally in the MySQL client library</p>
	 */
	define('MYSQLI_CLIENT_SSL', 2048);

	/**
	 * <p>Requires MySQL 5.6.5 and up.</p>
	 */
	define('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT', 64);

	define('MYSQLI_CURSOR_TYPE_FOR_UPDATE', 2);

	define('MYSQLI_CURSOR_TYPE_NO_CURSOR', 0);

	define('MYSQLI_CURSOR_TYPE_READ_ONLY', 1);

	define('MYSQLI_CURSOR_TYPE_SCROLLABLE', 4);

	/**
	 * <p>Data truncation occurred. Available since MySQL 5.0.5.</p>
	 */
	define('MYSQLI_DATA_TRUNCATED', 101);

	/**
	 * <p>Is set to 1 if <code>mysqli_debug()</code> functionality is enabled.</p>
	 */
	define('MYSQLI_DEBUG_TRACE_ENABLED', 0);

	/**
	 * <p>Field is defined as <code>ENUM</code>.</p>
	 */
	define('MYSQLI_ENUM_FLAG', 256);

	/**
	 * <p>Field is part of <code>GROUP BY</code></p>
	 */
	define('MYSQLI_GROUP_FLAG', 32768);

	/**
	 * <p>Command to execute when connecting to MySQL server. Will automatically be re-executed when reconnecting.</p>
	 */
	define('MYSQLI_INIT_COMMAND', 3);

	/**
	 * <p>Whether the mysqli extension has been built against a MariaDB client library. Available as of PHP 8.1.2.</p>
	 */
	define('MYSQLI_IS_MARIADB', null);

	/**
	 * <p>Field is part of an index.</p>
	 */
	define('MYSQLI_MULTIPLE_KEY_FLAG', 8);

	/**
	 * <p>More data available for bind variable</p>
	 */
	define('MYSQLI_NEED_DATA', null);

	/**
	 * <p>No more data available for bind variable</p>
	 */
	define('MYSQLI_NO_DATA', 100);

	/**
	 * <p>Indicates that a field is defined as <code>NOT NULL</code></p>
	 */
	define('MYSQLI_NOT_NULL_FLAG', 1);

	/**
	 * <p>Columns are returned into the array having an enumerated index.</p>
	 */
	define('MYSQLI_NUM', 2);

	/**
	 * <p>Field is defined as <code>NUMERIC</code></p>
	 */
	define('MYSQLI_NUM_FLAG', 32768);

	/**
	 * <p>Connect timeout in seconds</p>
	 */
	define('MYSQLI_OPT_CONNECT_TIMEOUT', 0);

	/**
	 * <p>Convert integer and float columns back to PHP numbers. Only valid for mysqlnd.</p>
	 */
	define('MYSQLI_OPT_INT_AND_FLOAT_NATIVE', 201);

	/**
	 * <p>Enables command <code>LOAD LOCAL INFILE</code></p>
	 */
	define('MYSQLI_OPT_LOCAL_INFILE', 8);

	/**
	 * <p>The size of the internal command/network buffer. Only valid for mysqlnd.</p>
	 */
	define('MYSQLI_OPT_NET_CMD_BUFFER_SIZE', 202);

	/**
	 * <p>Maximum read chunk size in bytes when reading the body of a MySQL command packet. Only valid for mysqlnd.</p>
	 */
	define('MYSQLI_OPT_NET_READ_BUFFER_SIZE', 203);

	/**
	 * <p>Command execution result timeout in seconds. Available as of PHP 7.2.0.</p>
	 */
	define('MYSQLI_OPT_READ_TIMEOUT', 11);

	/**
	 * <p>Requires MySQL 5.1.10 and up</p>
	 */
	define('MYSQLI_OPT_SSL_VERIFY_SERVER_CERT', 21);

	/**
	 * <p>Field is part of an multi-index</p>
	 */
	define('MYSQLI_PART_KEY_FLAG', 16384);

	/**
	 * <p>Field is part of a primary index</p>
	 */
	define('MYSQLI_PRI_KEY_FLAG', 2);

	/**
	 * <p>Read options from the named option file instead of from my.cnf</p>
	 */
	define('MYSQLI_READ_DEFAULT_FILE', 4);

	/**
	 * <p>Read options from the named group from my.cnf or the file specified with <b><code>MYSQLI_READ_DEFAULT_FILE</code></b></p>
	 */
	define('MYSQLI_READ_DEFAULT_GROUP', 5);

	/**
	 * <p>Refreshes the grant tables.</p>
	 */
	define('MYSQLI_REFRESH_GRANT', 1);

	/**
	 * <p>Flushes the host cache, like executing the <code>FLUSH HOSTS</code> SQL statement.</p>
	 */
	define('MYSQLI_REFRESH_HOSTS', 8);

	/**
	 * <p>Flushes the logs, like executing the <code>FLUSH LOGS</code> SQL statement.</p>
	 */
	define('MYSQLI_REFRESH_LOG', 2);

	/**
	 * <p>On a master replication server: removes the binary log files listed in the binary log index, and truncates the index file. Like executing the <code>RESET MASTER</code> SQL statement.</p>
	 */
	define('MYSQLI_REFRESH_MASTER', 128);

	/**
	 * <p>Alias of <b><code>MYSQLI_REFRESH_SLAVE</code></b> constant. Available as of PHP 8.1.0.</p>
	 */
	define('MYSQLI_REFRESH_REPLICA', null);

	/**
	 * <p>On a slave replication server: resets the master server information, and restarts the slave. Like executing the <code>RESET SLAVE</code> SQL statement.</p>
	 */
	define('MYSQLI_REFRESH_SLAVE', 64);

	/**
	 * <p>Reset the status variables, like executing the <code>FLUSH STATUS</code> SQL statement.</p>
	 */
	define('MYSQLI_REFRESH_STATUS', 16);

	/**
	 * <p>Flushes the table cache, like executing the <code>FLUSH TABLES</code> SQL statement.</p>
	 */
	define('MYSQLI_REFRESH_TABLES', 4);

	/**
	 * <p>Flushes the thread cache.</p>
	 */
	define('MYSQLI_REFRESH_THREADS', 32);

	/**
	 * <p>Set all options on (report all).</p>
	 */
	define('MYSQLI_REPORT_ALL', 255);

	/**
	 * <p>Report errors from mysqli function calls.</p>
	 */
	define('MYSQLI_REPORT_ERROR', 1);

	/**
	 * <p>Report if no index or bad index was used in a query.</p>
	 */
	define('MYSQLI_REPORT_INDEX', 4);

	/**
	 * <p>Turns reporting off.</p>
	 */
	define('MYSQLI_REPORT_OFF', 0);

	/**
	 * <p>Throw a <code>mysqli_sql_exception</code> for errors instead of warnings.</p>
	 */
	define('MYSQLI_REPORT_STRICT', 2);

	define('MYSQLI_SERVER_PUBLIC_KEY', 35);

	define('MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED', 16);

	define('MYSQLI_SERVER_QUERY_NO_INDEX_USED', 32);

	define('MYSQLI_SET_CHARSET_NAME', 7);

	/**
	 * <p>Field is defined as <code>SET</code></p>
	 */
	define('MYSQLI_SET_FLAG', 2048);

	define('MYSQLI_STMT_ATTR_CURSOR_TYPE', 1);

	define('MYSQLI_STMT_ATTR_PREFETCH_ROWS', 2);

	define('MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH', 0);

	/**
	 * <p>For using buffered result sets. It has a value of <code>0</code>.</p>
	 */
	define('MYSQLI_STORE_RESULT', 0);

	/**
	 * <p>Field is defined as <code>TIMESTAMP</code></p>
	 */
	define('MYSQLI_TIMESTAMP_FLAG', 1024);

	/**
	 * <p>Appends "AND CHAIN" to <code>mysqli_commit()</code> or <code>mysqli_rollback()</code>.</p>
	 */
	define('MYSQLI_TRANS_COR_AND_CHAIN', 1);

	/**
	 * <p>Appends "AND NO CHAIN" to <code>mysqli_commit()</code> or <code>mysqli_rollback()</code>.</p>
	 */
	define('MYSQLI_TRANS_COR_AND_NO_CHAIN', 2);

	/**
	 * <p>Appends "NO RELEASE" to <code>mysqli_commit()</code> or <code>mysqli_rollback()</code>.</p>
	 */
	define('MYSQLI_TRANS_COR_NO_RELEASE', 8);

	/**
	 * <p>Appends "RELEASE" to <code>mysqli_commit()</code> or <code>mysqli_rollback()</code>.</p>
	 */
	define('MYSQLI_TRANS_COR_RELEASE', 4);

	/**
	 * <p>Start the transaction as "START TRANSACTION WITH CONSISTENT SNAPSHOT" with <code>mysqli_begin_transaction()</code>.</p>
	 */
	define('MYSQLI_TRANS_START_CONSISTENT_SNAPSHOT', null);

	/**
	 * <p>Start the transaction as "START TRANSACTION READ ONLY" with <code>mysqli_begin_transaction()</code>.</p>
	 */
	define('MYSQLI_TRANS_START_READ_ONLY', 4);

	/**
	 * <p>Start the transaction as "START TRANSACTION READ WRITE" with <code>mysqli_begin_transaction()</code>.</p>
	 */
	define('MYSQLI_TRANS_START_READ_WRITE', 2);

	/**
	 * <p>Field is defined as <code>BIT</code> (MySQL 5.0.3 and up)</p>
	 */
	define('MYSQLI_TYPE_BIT', 16);

	/**
	 * <p>Field is defined as <code>BLOB</code></p>
	 */
	define('MYSQLI_TYPE_BLOB', 252);

	/**
	 * <p>Field is defined as <code>TINYINT</code>. For <code>CHAR</code>, see <code>MYSQLI_TYPE_STRING</code></p>
	 */
	define('MYSQLI_TYPE_CHAR', 1);

	/**
	 * <p>Field is defined as <code>DATE</code></p>
	 */
	define('MYSQLI_TYPE_DATE', 10);

	/**
	 * <p>Field is defined as <code>DATETIME</code></p>
	 */
	define('MYSQLI_TYPE_DATETIME', 12);

	/**
	 * <p>Field is defined as <code>DECIMAL</code></p>
	 */
	define('MYSQLI_TYPE_DECIMAL', 0);

	/**
	 * <p>Field is defined as <code>DOUBLE</code></p>
	 */
	define('MYSQLI_TYPE_DOUBLE', 5);

	/**
	 * <p>Field is defined as <code>ENUM</code></p>
	 */
	define('MYSQLI_TYPE_ENUM', 247);

	/**
	 * <p>Field is defined as <code>FLOAT</code></p>
	 */
	define('MYSQLI_TYPE_FLOAT', 4);

	/**
	 * <p>Field is defined as <code>GEOMETRY</code></p>
	 */
	define('MYSQLI_TYPE_GEOMETRY', 255);

	/**
	 * <p>Field is defined as <code>MEDIUMINT</code></p>
	 */
	define('MYSQLI_TYPE_INT24', 9);

	/**
	 * <p>Field is defined as <code>INTERVAL</code></p>
	 */
	define('MYSQLI_TYPE_INTERVAL', 247);

	/**
	 * <p>Field is defined as <code>JSON</code>. Only valid for mysqlnd and MySQL 5.7.8 and up.</p>
	 */
	define('MYSQLI_TYPE_JSON', 245);

	/**
	 * <p>Field is defined as <code>INT</code></p>
	 */
	define('MYSQLI_TYPE_LONG', 3);

	/**
	 * <p>Field is defined as <code>LONGBLOB</code></p>
	 */
	define('MYSQLI_TYPE_LONG_BLOB', 251);

	/**
	 * <p>Field is defined as <code>BIGINT</code></p>
	 */
	define('MYSQLI_TYPE_LONGLONG', 8);

	/**
	 * <p>Field is defined as <code>MEDIUMBLOB</code></p>
	 */
	define('MYSQLI_TYPE_MEDIUM_BLOB', 250);

	/**
	 * <p>Field is defined as <code>DATE</code></p>
	 */
	define('MYSQLI_TYPE_NEWDATE', 14);

	/**
	 * <p>Precision math <code>DECIMAL</code> or <code>NUMERIC</code> field (MySQL 5.0.3 and up)</p>
	 */
	define('MYSQLI_TYPE_NEWDECIMAL', 246);

	/**
	 * <p>Field is defined as <code>DEFAULT NULL</code></p>
	 */
	define('MYSQLI_TYPE_NULL', 6);

	/**
	 * <p>Field is defined as <code>SET</code></p>
	 */
	define('MYSQLI_TYPE_SET', 248);

	/**
	 * <p>Field is defined as <code>SMALLINT</code></p>
	 */
	define('MYSQLI_TYPE_SHORT', 2);

	/**
	 * <p>Field is defined as <code>CHAR</code> or <code>BINARY</code></p>
	 */
	define('MYSQLI_TYPE_STRING', 254);

	/**
	 * <p>Field is defined as <code>TIME</code></p>
	 */
	define('MYSQLI_TYPE_TIME', 11);

	/**
	 * <p>Field is defined as <code>TIMESTAMP</code></p>
	 */
	define('MYSQLI_TYPE_TIMESTAMP', 7);

	/**
	 * <p>Field is defined as <code>TINYINT</code></p>
	 */
	define('MYSQLI_TYPE_TINY', 1);

	/**
	 * <p>Field is defined as <code>TINYBLOB</code></p>
	 */
	define('MYSQLI_TYPE_TINY_BLOB', 249);

	/**
	 * <p>Field is defined as <code>VARCHAR</code></p>
	 */
	define('MYSQLI_TYPE_VAR_STRING', 253);

	/**
	 * <p>Field is defined as <code>YEAR</code></p>
	 */
	define('MYSQLI_TYPE_YEAR', 13);

	/**
	 * <p>Field is part of a unique index.</p>
	 */
	define('MYSQLI_UNIQUE_KEY_FLAG', 4);

	/**
	 * <p>Field is defined as <code>UNSIGNED</code></p>
	 */
	define('MYSQLI_UNSIGNED_FLAG', 32);

	/**
	 * <p>For using unbuffered result sets. It has a value of <code>1</code>.</p>
	 */
	define('MYSQLI_USE_RESULT', 1);

	/**
	 * <p>Field is defined as <code>ZEROFILL</code></p>
	 */
	define('MYSQLI_ZEROFILL_FLAG', 64);

}
