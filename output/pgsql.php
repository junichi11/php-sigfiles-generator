<?php



namespace {

	/**
	 * Returns number of affected records (tuples)
	 * <p><b>pg_affected_rows()</b> returns the number of tuples (instances/records/rows) affected by <i>INSERT</i>, <i>UPDATE</i>, and <i>DELETE</i> queries.</p><p>Since PostgreSQL 9.0 and above, the server returns the number of SELECTed rows. Older PostgreSQL return 0 for SELECT.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_cmdtuples()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @return int <p>The number of rows affected by the query. If no tuple is affected, it will return 0.</p>
	 * @link http://php.net/manual/en/function.pg-affected-rows.php
	 * @see pg_query(), pg_query_params(), pg_execute(), pg_num_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_affected_rows($result): int {}

	/**
	 * Cancel an asynchronous query
	 * <p><b>pg_cancel_query()</b> cancels an asynchronous query sent with <code>pg_send_query()</code>, <code>pg_send_query_params()</code> or <code>pg_send_execute()</code>. You cannot cancel a query executed using <code>pg_query()</code>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-cancel-query.php
	 * @see pg_send_query(), pg_connection_busy()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_cancel_query($connection): bool {}

	/**
	 * Gets the client encoding
	 * <p>PostgreSQL supports automatic character set conversion between server and client for certain character sets. <b>pg_client_encoding()</b> returns the client encoding as a string. The returned string will be one of the standard PostgreSQL encoding identifiers.</p><p><b>Note</b>:</p><p>This function requires PHP 4.0.3 or higher and PostgreSQL 7.0 or higher. If libpq is compiled without multibyte encoding support, <b>pg_client_encoding()</b> always returns <i>SQL_ASCII</i>. Supported encoding depends on PostgreSQL version. Refer to the PostgreSQL Documentation supported encodings.</p><p>The function used to be called <b>pg_clientencoding()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return string <p>The client encoding, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-client-encoding.php
	 * @see pg_set_client_encoding()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_client_encoding($connection = NULL): string {}

	/**
	 * Closes a PostgreSQL connection
	 * <p><b>pg_close()</b> closes the non-persistent connection to a PostgreSQL database associated with the given <code>connection</code> resource.</p><p><b>Note</b>:</p><p>Using <b>pg_close()</b> is not usually necessary, as non-persistent open connections are automatically closed at the end of the script.</p><p>If there is open large object resource on the connection, do not close the connection before closing all large object resources.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-close.php
	 * @see pg_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_close($connection = NULL): bool {}

	/**
	 * Open a PostgreSQL connection
	 * <p><b>pg_connect()</b> opens a connection to a PostgreSQL database specified by the <code>connection_string</code>.</p><p>If a second call is made to <b>pg_connect()</b> with the same <code>connection_string</code> as an existing connection, the existing connection will be returned unless you pass <b><code>PGSQL_CONNECT_FORCE_NEW</code></b> as <code>connect_type</code>.</p><p>The old syntax with multiple parameters <b>$conn = pg_connect("host", "port", "options", "tty", "dbname") </b> has been deprecated.</p>
	 * @param string $connection_string <p>The <code>connection_string</code> can be empty to use all default parameters, or it can contain one or more parameter settings separated by whitespace. Each parameter setting is in the form <i>keyword = value</i>. Spaces around the equal sign are optional. To write an empty value or a value containing spaces, surround it with single quotes, e.g., <i>keyword = 'a value'</i>. Single quotes and backslashes within the value must be escaped with a backslash, i.e., \' and \\.</p> <p>The currently recognized parameter keywords are: <code>host</code>, <code>hostaddr</code>, <code>port</code>, <code>dbname</code> (defaults to value of <code>user</code>), <code>user</code>, <code>password</code>, <code>connect_timeout</code>, <code>options</code>, <code>tty</code> (ignored), <code>sslmode</code>, <code>requiressl</code> (deprecated in favor of <code>sslmode</code>), and <code>service</code>. Which of these arguments exist depends on your PostgreSQL version.</p> <p>The <code>options</code> parameter can be used to set command line parameters to be invoked by the server.</p>
	 * @param int $connect_type <p>If <b><code>PGSQL_CONNECT_FORCE_NEW</code></b> is passed, then a new connection is created, even if the <code>connection_string</code> is identical to an existing connection.</p> <p>If <b><code>PGSQL_CONNECT_ASYNC</code></b> is given, then the connection is established asynchronously. The state of the connection can then be checked via <code>pg_connect_poll()</code> or <code>pg_connection_status()</code>.</p>
	 * @return resource <p>PostgreSQL connection resource on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-connect.php
	 * @see pg_pconnect(), pg_close(), pg_host(), pg_port(), pg_tty(), pg_options(), pg_dbname()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_connect(string $connection_string, int $connect_type = NULL) {}

	/**
	 * Poll the status of an in-progress asynchronous PostgreSQL connection attempt
	 * <p><b>pg_connect_poll()</b> polls the status of a PostgreSQL connection created by calling <code>pg_connect()</code> with the <b><code>PGSQL_CONNECT_ASYNC</code></b> option.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return int <p>Returns <b><code>PGSQL_POLLING_FAILED</code></b>, <b><code>PGSQL_POLLING_READING</code></b>, <b><code>PGSQL_POLLING_WRITING</code></b>, <b><code>PGSQL_POLLING_OK</code></b>, or <b><code>PGSQL_POLLING_ACTIVE</code></b>.</p>
	 * @link http://php.net/manual/en/function.pg-connect-poll.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_connect_poll($connection): int {}

	/**
	 * Get connection is busy or not
	 * <p><b>pg_connection_busy()</b> determines whether or not a connection is busy. If it is busy, a previous query is still executing. If <code>pg_get_result()</code> is used on the connection, it will be blocked.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the connection is busy, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.pg-connection-busy.php
	 * @see pg_connection_status(), pg_get_result()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_connection_busy($connection): bool {}

	/**
	 * Reset connection (reconnect)
	 * <p><b>pg_connection_reset()</b> resets the connection. It is useful for error recovery.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-connection-reset.php
	 * @see pg_connect(), pg_pconnect(), pg_connection_status()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_connection_reset($connection): bool {}

	/**
	 * Get connection status
	 * <p><b>pg_connection_status()</b> returns the status of the specified <code>connection</code>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return int <p><b><code>PGSQL_CONNECTION_OK</code></b> or <b><code>PGSQL_CONNECTION_BAD</code></b>.</p>
	 * @link http://php.net/manual/en/function.pg-connection-status.php
	 * @see pg_connection_busy()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_connection_status($connection): int {}

	/**
	 * Reads input on the connection
	 * <p><b>pg_consume_input()</b> consumes any input waiting to be read from the database server.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return bool <p><b><code>TRUE</code></b> if no error occurred, or <b><code>FALSE</code></b> if there was an error. Note that <b><code>TRUE</code></b> does not necessarily indicate that input was waiting to be read.</p>
	 * @link http://php.net/manual/en/function.pg-consume-input.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_consume_input($connection): bool {}

	/**
	 * Convert associative array values into forms suitable for SQL statements
	 * <p><b>pg_convert()</b> checks and converts the values in <code>assoc_array</code> into suitable values for use in an SQL statement. Precondition for <b>pg_convert()</b> is the existence of a table <code>table_name</code> which has at least as many columns as <code>assoc_array</code> has elements. The fieldnames in <code>table_name</code> must match the indices in <code>assoc_array</code> and the corresponding datatypes must be compatible. Returns an array with the converted values on success, <b><code>FALSE</code></b> otherwise.</p><p><b>Note</b>:</p><p>Since PHP 5.6.0, it accepts boolean values, converting them to PostgreSQL booleans. String representations of boolean values are also supported. <b><code>NULL</code></b> is converted to PostgreSQL NULL.</p><p>Prior to PHP 5.6.0, if there are boolean fields in <code>table_name</code> don't use the constant <b><code>TRUE</code></b> in <code>assoc_array</code>. It will be converted to the string 'TRUE' which is not a valid entry for boolean fields in PostgreSQL. Use one of "t", "true", 1, "y", "yes" instead.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table against which to convert types.</p>
	 * @param array $assoc_array <p>Data to be converted.</p>
	 * @param int $options <p>Any number of <b><code>PGSQL_CONV_IGNORE_DEFAULT</code></b>, <b><code>PGSQL_CONV_FORCE_NULL</code></b> or <b><code>PGSQL_CONV_IGNORE_NOT_NULL</code></b>, combined.</p>
	 * @return array <p>An <code>array</code> of converted values, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-convert.php
	 * @see pg_meta_data(), pg_insert(), pg_select(), pg_update(), pg_delete()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_convert($connection, string $table_name, array $assoc_array, int $options = 0): array {}

	/**
	 * Insert records into a table from an array
	 * <p><b>pg_copy_from()</b> inserts records into a table from <code>rows</code>. It issues a <i>COPY FROM</i> SQL command internally to insert records.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table into which to copy the <code>rows</code>.</p>
	 * @param array $rows <p>An <code>array</code> of data to be copied into <code>table_name</code>. Each value in <code>rows</code> becomes a row in <code>table_name</code>. Each value in <code>rows</code> should be a delimited string of the values to insert into each field. Values should be linefeed terminated.</p>
	 * @param string $delimiter <p>The token that separates values for each field in each element of <code>rows</code>. Default is <i>TAB</i>.</p>
	 * @param string $null_as <p>How SQL <i>NULL</i> values are represented in the <code>rows</code>. Default is \N ("\\N").</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-copy-from.php
	 * @see pg_copy_to()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_copy_from($connection, string $table_name, array $rows, string $delimiter = NULL, string $null_as = NULL): bool {}

	/**
	 * Copy a table to an array
	 * <p><b>pg_copy_to()</b> copies a table to an array. It issues <i>COPY TO</i> SQL command internally to retrieve records.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table from which to copy the data into <code>rows</code>.</p>
	 * @param string $delimiter <p>The token that separates values for each field in each element of <code>rows</code>. Default is <i>TAB</i>.</p>
	 * @param string $null_as <p>How SQL <i>NULL</i> values are represented in the <code>rows</code>. Default is \N ("\\N").</p>
	 * @return array <p>An <code>array</code> with one element for each line of <i>COPY</i> data. It returns <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-copy-to.php
	 * @see pg_copy_from()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_copy_to($connection, string $table_name, string $delimiter = NULL, string $null_as = NULL): array {}

	/**
	 * Get the database name
	 * <p><b>pg_dbname()</b> returns the name of the database that the given PostgreSQL <code>connection</code> resource.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return string <p>A <code>string</code> containing the name of the database the <code>connection</code> is to, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-dbname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_dbname($connection = NULL): string {}

	/**
	 * Deletes records
	 * <p><b>pg_delete()</b> deletes records from a table specified by the keys and values in <code>assoc_array</code>. If <code>options</code> is specified, <code>pg_convert()</code> is applied to <code>assoc_array</code> with the specified options.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table from which to delete rows.</p>
	 * @param array $assoc_array <p>An <code>array</code> whose keys are field names in the table <code>table_name</code>, and whose values are the values of those fields that are to be deleted.</p>
	 * @param int $options <p>Any number of <b><code>PGSQL_CONV_FORCE_NULL</code></b>, <b><code>PGSQL_DML_NO_CONV</code></b>, <b><code>PGSQL_DML_ESCAPE</code></b>, <b><code>PGSQL_DML_EXEC</code></b>, <b><code>PGSQL_DML_ASYNC</code></b> or <b><code>PGSQL_DML_STRING</code></b> combined. If <b><code>PGSQL_DML_STRING</code></b> is part of the <code>options</code> then query string is returned. When <b><code>PGSQL_DML_NO_CONV</code></b> or <b><code>PGSQL_DML_ESCAPE</code></b> is set, it does not call <code>pg_convert()</code> internally.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Returns <code>string</code> if <b><code>PGSQL_DML_STRING</code></b> is passed via <code>options</code>.</p>
	 * @link http://php.net/manual/en/function.pg-delete.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_delete($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

	/**
	 * Sync with PostgreSQL backend
	 * <p><b>pg_end_copy()</b> syncs the PostgreSQL frontend (usually a web server process) with the PostgreSQL server after doing a copy operation performed by <code>pg_put_line()</code>. <b>pg_end_copy()</b> must be issued, otherwise the PostgreSQL server may get out of sync with the frontend and will report an error.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-end-copy.php
	 * @see pg_put_line()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_end_copy($connection = NULL): bool {}

	/**
	 * Escape a string for insertion into a bytea field
	 * <p><b>pg_escape_bytea()</b> escapes string for bytea datatype. It returns escaped string.</p><p><b>Note</b>:</p><p>When you <i>SELECT</i> a bytea type, PostgreSQL returns octal byte values prefixed with '\' (e.g. \032). Users are supposed to convert back to binary format manually.</p><p>This function requires PostgreSQL 7.2 or later. With PostgreSQL 7.2.0 and 7.2.1, bytea values must be cast when you enable multi-byte support. i.e. <i>INSERT INTO test_table (image) VALUES ('$image_escaped'::bytea);</i> PostgreSQL 7.2.2 or later does not need a cast. The exception is when the client and backend character encoding does not match, and there may be multi-byte stream error. User must then cast to bytea to avoid this error.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $data <p>A <code>string</code> containing text or binary data to be inserted into a bytea column.</p>
	 * @return string <p>A <code>string</code> containing the escaped data.</p>
	 * @link http://php.net/manual/en/function.pg-escape-bytea.php
	 * @see pg_unescape_bytea(), pg_escape_string()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_escape_bytea($connection = NULL, string $data): string {}

	/**
	 * Escape a identifier for insertion into a text field
	 * <p><b>pg_escape_identifier()</b> escapes a identifier (e.g. table, field names) for quering the database. It returns an escaped identifier string for PostgreSQL server. <b>pg_escape_identifier()</b> adds double quotes before and after data. Users should not add double quotes. Use of this function is recommended for identifier parameters in query. For SQL literals (i.e. parameters except bytea), <code>pg_escape_literal()</code> or <code>pg_escape_string()</code> must be used. For bytea type fields, <code>pg_escape_bytea()</code> must be used instead.</p><p><b>Note</b>:</p><p>This function has internal escape code and can also be used with PostgreSQL 8.4 or less.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $data <p>A <code>string</code> containing text to be escaped.</p>
	 * @return string <p>A <code>string</code> containing the escaped data.</p>
	 * @link http://php.net/manual/en/function.pg-escape-identifier.php
	 * @see pg_escape_literal(), pg_escape_bytea(), pg_escape_string()
	 * @since PHP 5 >= 5.4.4, PHP 7
	 */
	function pg_escape_identifier($connection = NULL, string $data): string {}

	/**
	 * Escape a literal for insertion into a text field
	 * <p><b>pg_escape_literal()</b> escapes a literal for querying the PostgreSQL database. It returns an escaped literal in the PostgreSQL format. <b>pg_escape_literal()</b> adds quotes before and after data. Users should not add quotes. Use of this function is recommended instead of <code>pg_escape_string()</code>. If the type of the column is bytea, <code>pg_escape_bytea()</code> must be used instead. For escaping identifiers (e.g. table, field names), <code>pg_escape_identifier()</code> must be used.</p><p><b>Note</b>:</p><p>This function has internal escape code and can also be used with PostgreSQL 8.4 or less.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>. When there is no default connection, it raises <i>E_WARNING</i> and returns <b><code>FALSE</code></b>.</p>
	 * @param string $data <p>A <code>string</code> containing text to be escaped.</p>
	 * @return string <p>A <code>string</code> containing the escaped data.</p>
	 * @link http://php.net/manual/en/function.pg-escape-literal.php
	 * @see pg_escape_identifier(), pg_escape_bytea(), pg_escape_string()
	 * @since PHP 5 >= 5.4.4, PHP 7
	 */
	function pg_escape_literal($connection = NULL, string $data): string {}

	/**
	 * Escape a string for query
	 * <p><b>pg_escape_string()</b> escapes a string for querying the database. It returns an escaped string in the PostgreSQL format without quotes. <code>pg_escape_literal()</code> is more preferred way to escape SQL parameters for PostgreSQL. <code>addslashes()</code> must not be used with PostgreSQL. If the type of the column is bytea, <code>pg_escape_bytea()</code> must be used instead. <code>pg_escape_identifier()</code> must be used to escape identifiers (e.g. table names, field names)</p><p><b>Note</b>:</p><p>This function requires PostgreSQL 7.2 or later.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $data <p>A <code>string</code> containing text to be escaped.</p>
	 * @return string <p>A <code>string</code> containing the escaped data.</p>
	 * @link http://php.net/manual/en/function.pg-escape-string.php
	 * @see pg_escape_bytea()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_escape_string($connection = NULL, string $data): string {}

	/**
	 * Sends a request to execute a prepared statement with given parameters, and waits for the result
	 * <p>Sends a request to execute a prepared statement with given parameters, and waits for the result.</p><p><b>pg_execute()</b> is like <code>pg_query_params()</code>, but the command to be executed is specified by naming a previously-prepared statement, instead of giving a query string. This feature allows commands that will be used repeatedly to be parsed and planned just once, rather than each time they are executed. The statement must have been prepared previously in the current session. <b>pg_execute()</b> is supported only against PostgreSQL 7.4 or higher connections; it will fail when using earlier versions.</p><p>The parameters are identical to <code>pg_query_params()</code>, except that the name of a prepared statement is given instead of a query string.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $stmtname <p>The name of the prepared statement to execute. if "" is specified, then the unnamed statement is executed. The name must have been previously prepared using <code>pg_prepare()</code>, <code>pg_send_prepare()</code> or a <i>PREPARE</i> SQL command.</p>
	 * @param array $params <p>An array of parameter values to substitute for the $1, $2, etc. placeholders in the original prepared query string. The number of elements in the array must match the number of placeholders.</p> <p><b>Warning</b></p> <p>Elements are converted to strings by calling this function.</p>
	 * @return resource <p>A query result resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-execute.php
	 * @see pg_prepare(), pg_send_prepare(), pg_query_params()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_execute($connection = NULL, string $stmtname, array $params) {}

	/**
	 * Fetches all rows from a result as an array
	 * <p><b>pg_fetch_all()</b> returns an array that contains all rows (records) in the result resource.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $result_type
	 * @return array <p>An <code>array</code> with all rows in the result. Each row is an array of field values indexed by field name.</p><p><b><code>FALSE</code></b> is returned if there are no rows in the result, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-all.php
	 * @see pg_fetch_row(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_fetch_all($result, int $result_type = PGSQL_ASSOC): array {}

	/**
	 * Fetches all rows in a particular result column as an array
	 * <p><b>pg_fetch_all_columns()</b> returns an array that contains all rows (records) in a particular column of the result resource.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $column <p>Column number, zero-based, to be retrieved from the result resource. Defaults to the first column if not specified.</p>
	 * @return array <p>An <code>array</code> with all values in the result column.</p><p><b><code>FALSE</code></b> is returned if <code>column</code> is larger than the number of columns in the result, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-all-columns.php
	 * @see pg_fetch_all()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_fetch_all_columns($result, int $column = 0): array {}

	/**
	 * Fetch a row as an array
	 * <p><b>pg_fetch_array()</b> returns an array that corresponds to the fetched row (record).</p><p><b>pg_fetch_array()</b> is an extended version of <code>pg_fetch_row()</code>. In addition to storing the data in the numeric indices (field number) to the result array, it can also store the data using associative indices (field name). It stores both indicies by default.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p><p><b>pg_fetch_array()</b> is NOT significantly slower than using <code>pg_fetch_row()</code>, and is significantly easier to use.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row <p>Row number in result to fetch. Rows are numbered from 0 upwards. If omitted or <b><code>NULL</code></b>, the next row is fetched.</p>
	 * @param int $result_type <p>An optional parameter that controls how the returned <code>array</code> is indexed. <code>result_type</code> is a constant and can take the following values: <b><code>PGSQL_ASSOC</code></b>, <b><code>PGSQL_NUM</code></b> and <b><code>PGSQL_BOTH</code></b>. Using <b><code>PGSQL_NUM</code></b>, <b>pg_fetch_array()</b> will return an array with numerical indices, using <b><code>PGSQL_ASSOC</code></b> it will return only associative indices while <b><code>PGSQL_BOTH</code></b>, the default, will return both numerical and associative indices.</p>
	 * @return array <p>An <code>array</code> indexed numerically (beginning with 0) or associatively (indexed by field name), or both. Each value in the <code>array</code> is represented as a <code>string</code>. Database <i>NULL</i> values are returned as <b><code>NULL</code></b>.</p><p><b><code>FALSE</code></b> is returned if <code>row</code> exceeds the number of rows in the set, there are no more rows, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-array.php
	 * @see pg_fetch_row(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_fetch_array($result, int $row = NULL, int $result_type = PGSQL_BOTH): array {}

	/**
	 * Fetch a row as an associative array
	 * <p><b>pg_fetch_assoc()</b> returns an associative array that corresponds to the fetched row (records).</p><p><b>pg_fetch_assoc()</b> is equivalent to calling <code>pg_fetch_array()</code> with <b><code>PGSQL_ASSOC</code></b> as the optional third parameter. It only returns an associative array. If you need the numeric indices, use <code>pg_fetch_row()</code>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p><p><b>pg_fetch_assoc()</b> is NOT significantly slower than using <code>pg_fetch_row()</code>, and is significantly easier to use.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row <p>Row number in result to fetch. Rows are numbered from 0 upwards. If omitted or <b><code>NULL</code></b>, the next row is fetched.</p>
	 * @return array <p>An <code>array</code> indexed associatively (by field name). Each value in the <code>array</code> is represented as a <code>string</code>. Database <i>NULL</i> values are returned as <b><code>NULL</code></b>.</p><p><b><code>FALSE</code></b> is returned if <code>row</code> exceeds the number of rows in the set, there are no more rows, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-assoc.php
	 * @see pg_fetch_row(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_fetch_assoc($result, int $row = NULL): array {}

	/**
	 * Fetch a row as an object
	 * <p><b>pg_fetch_object()</b> returns an object with properties that correspond to the fetched row's field names. It can optionally instantiate an object of a specific class, and pass parameters to that class's constructor.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p><p>Speed-wise, the function is identical to <code>pg_fetch_array()</code>, and almost as fast as <code>pg_fetch_row()</code> (the difference is insignificant).</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row <p>Row number in result to fetch. Rows are numbered from 0 upwards. If omitted or <b><code>NULL</code></b>, the next row is fetched.</p>
	 * @param int $result_type <p>Ignored and deprecated.</p>
	 * @return object <p>An <code>object</code> with one attribute for each field name in the result. Database <i>NULL</i> values are returned as <b><code>NULL</code></b>.</p><p><b><code>FALSE</code></b> is returned if <code>row</code> exceeds the number of rows in the set, there are no more rows, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-object.php
	 * @see pg_query(), pg_fetch_array(), pg_fetch_assoc(), pg_fetch_row(), pg_fetch_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_fetch_object($result, int $row = NULL, int $result_type = PGSQL_ASSOC): object {}

	/**
	 * Returns values from a result resource
	 * <p><b>pg_fetch_result()</b> returns the value of a particular row and field (column) in a PostgreSQL result resource.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_result()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row <p>Row number in result to fetch. Rows are numbered from 0 upwards. If omitted, next row is fetched.</p>
	 * @param mixed $field <p>A <code>string</code> representing the name of the field (column) to fetch, otherwise an <code>int</code> representing the field number to fetch. Fields are numbered from 0 upwards.</p>
	 * @return string <p>Boolean is returned as "t" or "f". All other types, including arrays are returned as strings formatted in the same default PostgreSQL manner that you would see in the <b>psql</b> program. Database <i>NULL</i> values are returned as <b><code>NULL</code></b>.</p><p><b><code>FALSE</code></b> is returned if <code>row</code> exceeds the number of rows in the set, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-result.php
	 * @see pg_query(), pg_fetch_array()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_fetch_result($result, int $row, $field): string {}

	/**
	 * Get a row as an enumerated array
	 * <p><b>pg_fetch_row()</b> fetches one row of data from the result associated with the specified <code>result</code> resource.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row <p>Row number in result to fetch. Rows are numbered from 0 upwards. If omitted or <b><code>NULL</code></b>, the next row is fetched.</p>
	 * @return array <p>An <code>array</code>, indexed from 0 upwards, with each value represented as a <code>string</code>. Database <i>NULL</i> values are returned as <b><code>NULL</code></b>.</p><p><b><code>FALSE</code></b> is returned if <code>row</code> exceeds the number of rows in the set, there are no more rows, or on any other error.</p>
	 * @link http://php.net/manual/en/function.pg-fetch-row.php
	 * @see pg_query(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_fetch_row($result, int $row = NULL): array {}

	/**
	 * Test if a field is SQL NULL
	 * <p><b>pg_field_is_null()</b> tests if a field in a PostgreSQL result resource is SQL <i>NULL</i> or not.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_fieldisnull()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row <p>Row number in result to fetch. Rows are numbered from 0 upwards. If omitted, current row is fetched.</p>
	 * @param mixed $field <p>Field number (starting from 0) as an <code>integer</code> or the field name as a <code>string</code>.</p>
	 * @return int <p>Returns <i>1</i> if the field in the given row is SQL <i>NULL</i>, <i>0</i> if not. <b><code>FALSE</code></b> is returned if the row is out of range, or upon any other error.</p>
	 * @link http://php.net/manual/en/function.pg-field-is-null.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_is_null($result, int $row, $field): int {}

	/**
	 * Returns the name of a field
	 * <p><b>pg_field_name()</b> returns the name of the field occupying the given <code>field_number</code> in the given PostgreSQL <code>result</code> resource. Field numbering starts from 0.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_fieldname()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $field_number <p>Field number, starting from 0.</p>
	 * @return string <p>The field name, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-field-name.php
	 * @see pg_field_num()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_name($result, int $field_number): string {}

	/**
	 * Returns the field number of the named field
	 * <p><b>pg_field_num()</b> will return the number of the field number that corresponds to the <code>field_name</code> in the given PostgreSQL <code>result</code> resource.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_fieldnum()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param string $field_name <p>The name of the field.</p>
	 * @return int <p>The field number (numbered from 0), or -1 on error.</p>
	 * @link http://php.net/manual/en/function.pg-field-num.php
	 * @see pg_field_name()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_num($result, string $field_name): int {}

	/**
	 * Returns the printed length
	 * <p><b>pg_field_prtlen()</b> returns the actual printed length (number of characters) of a specific value in a PostgreSQL <code>result</code>. Row numbering starts at 0. This function will return <b><code>FALSE</code></b> on an error.</p><p><code>field_name_or_number</code> can be passed either as an <code>integer</code> or as a <code>string</code>. If it is passed as an <code>integer</code>, PHP recognises it as the field number, otherwise as field name.</p><p>See the example given at the <code>pg_field_name()</code> page.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_fieldprtlen()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $row_number
	 * @param mixed $field_name_or_number
	 * @return int <p>The field printed length, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-field-prtlen.php
	 * @see pg_field_size()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_prtlen($result, int $row_number, $field_name_or_number): int {}

	/**
	 * Returns the internal storage size of the named field
	 * <p><b>pg_field_size()</b> returns the internal storage size (in bytes) of the field number in the given PostgreSQL <code>result</code>.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_fieldsize()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $field_number <p>Field number, starting from 0.</p>
	 * @return int <p>The internal field storage size (in bytes). -1 indicates a variable length field. <b><code>FALSE</code></b> is returned on error.</p>
	 * @link http://php.net/manual/en/function.pg-field-size.php
	 * @see pg_field_prtlen(), pg_field_type()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_size($result, int $field_number): int {}

	/**
	 * Returns the name or oid of the tables field
	 * <p><b>pg_field_table()</b> returns the name of the table that field belongs to, or the table's oid if <code>oid_only</code> is <b><code>TRUE</code></b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $field_number <p>Field number, starting from 0.</p>
	 * @param bool $oid_only <p>By default the tables name that field belongs to is returned but if <code>oid_only</code> is set to <b><code>TRUE</code></b>, then the oid will instead be returned.</p>
	 * @return mixed <p>On success either the fields table name or oid. Or, <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-field-table.php
	 * @see pg_field_name(), pg_field_type()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function pg_field_table($result, int $field_number, bool $oid_only = FALSE) {}

	/**
	 * Returns the type name for the corresponding field number
	 * <p><b>pg_field_type()</b> returns a string containing the base type name of the given <code>field_number</code> in the given PostgreSQL <code>result</code> resource.</p><p><b>Note</b>:</p><p>If the field uses a PostgreSQL domain (rather than a basic type), it is the name of the domain's underlying type that is returned, rather than the name of the domain itself.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_fieldtype()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $field_number <p>Field number, starting from 0.</p>
	 * @return string <p>A <code>string</code> containing the base name of the field's type, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-field-type.php
	 * @see pg_field_prtlen(), pg_field_name(), pg_field_type_oid()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_type($result, int $field_number): string {}

	/**
	 * Returns the type ID (OID) for the corresponding field number
	 * <p><b>pg_field_type_oid()</b> returns an integer containing the OID of the base type of the given <code>field_number</code> in the given PostgreSQL <code>result</code> resource.</p><p>You can get more information about the field type by querying PostgreSQL's <i>pg_type</i> system table using the OID obtained with this function. The PostgreSQL <b>format_type()</b> function will convert a type OID into an SQL standard type name.</p><p><b>Note</b>:</p><p>If the field uses a PostgreSQL domain (rather than a basic type), it is the OID of the domain's underlying type that is returned, rather than the OID of the domain itself.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $field_number <p>Field number, starting from 0.</p>
	 * @return int <p>The OID of the field's base type. <b><code>FALSE</code></b> is returned on error.</p>
	 * @link http://php.net/manual/en/function.pg-field-type-oid.php
	 * @see pg_field_type(), pg_field_prtlen(), pg_field_name()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_field_type_oid($result, int $field_number): int {}

	/**
	 * Flush outbound query data on the connection
	 * <p><b>pg_flush()</b> flushes any outbound query data waiting to be sent on the connection.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if the flush was successful or no data was waiting to be flushed, <i>0</i> if part of the pending data was flushed but more remains or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-flush.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_flush($connection) {}

	/**
	 * Free result memory
	 * <p><b>pg_free_result()</b> frees the memory and data associated with the specified PostgreSQL query result <code>resource</code>.</p><p>This function need only be called if memory consumption during script execution is a problem. Otherwise, all result memory will be automatically freed when the script ends.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_freeresult()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-free-result.php
	 * @see pg_query(), pg_query_params(), pg_execute()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_free_result($result): bool {}

	/**
	 * Gets SQL NOTIFY message
	 * <p><b>pg_get_notify()</b> gets notifications generated by a <i>NOTIFY</i> SQL command. To receive notifications, the <i>LISTEN</i> SQL command must be issued.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param int $result_type <p>An optional parameter that controls how the returned <code>array</code> is indexed. <code>result_type</code> is a constant and can take the following values: <b><code>PGSQL_ASSOC</code></b>, <b><code>PGSQL_NUM</code></b> and <b><code>PGSQL_BOTH</code></b>. Using <b><code>PGSQL_NUM</code></b>, <b>pg_get_notify()</b> will return an array with numerical indices, using <b><code>PGSQL_ASSOC</code></b> it will return only associative indices while <b><code>PGSQL_BOTH</code></b>, the default, will return both numerical and associative indices.</p>
	 * @return array <p>An <code>array</code> containing the <i>NOTIFY</i> message name and backend PID. As of PHP 5.4.0 and if supported by the server, the array also contains the server version and the payload. Otherwise if no <i>NOTIFY</i> is waiting, then <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.pg-get-notify.php
	 * @see pg_get_pid()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_get_notify($connection, int $result_type = NULL): array {}

	/**
	 * Gets the backend's process ID
	 * <p><b>pg_get_pid()</b> gets the backend's (database server process) PID. The PID is useful to determine whether or not a <i>NOTIFY</i> message received via <code>pg_get_notify()</code> is sent from another process or not.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return int <p>The backend database process ID.</p>
	 * @link http://php.net/manual/en/function.pg-get-pid.php
	 * @see pg_get_notify()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_get_pid($connection): int {}

	/**
	 * Get asynchronous query result
	 * <p><b>pg_get_result()</b> gets the result resource from an asynchronous query executed by <code>pg_send_query()</code>, <code>pg_send_query_params()</code> or <code>pg_send_execute()</code>.</p><p><code>pg_send_query()</code> and the other asynchronous query functions can send multiple queries to a PostgreSQL server and <b>pg_get_result()</b> is used to get each query's results, one by one.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return resource <p>The result <code>resource</code>, or <b><code>FALSE</code></b> if no more results are available.</p>
	 * @link http://php.net/manual/en/function.pg-get-result.php
	 * @see pg_send_query()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_get_result($connection = NULL) {}

	/**
	 * Returns the host name associated with the connection
	 * <p><b>pg_host()</b> returns the host name of the given PostgreSQL <code>connection</code> resource is connected to.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return string <p>A <code>string</code> containing the name of the host the <code>connection</code> is to, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-host.php
	 * @see pg_connect(), pg_pconnect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_host($connection = NULL): string {}

	/**
	 * Insert array into table
	 * <p><b>pg_insert()</b> inserts the values of <code>assoc_array</code> into the table specified by <code>table_name</code>. If <code>options</code> is specified, <code>pg_convert()</code> is applied to <code>assoc_array</code> with the specified options.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table into which to insert rows. The table <code>table_name</code> must at least have as many columns as <code>assoc_array</code> has elements.</p>
	 * @param array $assoc_array <p>An <code>array</code> whose keys are field names in the table <code>table_name</code>, and whose values are the values of those fields that are to be inserted.</p>
	 * @param int $options <p>Any number of <b><code>PGSQL_CONV_OPTS</code></b>, <b><code>PGSQL_DML_NO_CONV</code></b>, <b><code>PGSQL_DML_ESCAPE</code></b>, <b><code>PGSQL_DML_EXEC</code></b>, <b><code>PGSQL_DML_ASYNC</code></b> or <b><code>PGSQL_DML_STRING</code></b> combined. If <b><code>PGSQL_DML_STRING</code></b> is part of the <code>options</code> then query string is returned. When <b><code>PGSQL_DML_NO_CONV</code></b> or <b><code>PGSQL_DML_ESCAPE</code></b> is set, it does not call <code>pg_convert()</code> internally.</p>
	 * @return mixed <p>Returns the connection resource on success, or <b><code>FALSE</code></b> on failure. Returns <code>string</code> if <b><code>PGSQL_DML_STRING</code></b> is passed via <code>options</code>.</p>
	 * @link http://php.net/manual/en/function.pg-insert.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_insert($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

	/**
	 * Get the last error message string of a connection
	 * <p><b>pg_last_error()</b> returns the last error message for a given <code>connection</code>.</p><p>Error messages may be overwritten by internal PostgreSQL (libpq) function calls. It may not return an appropriate error message if multiple errors occur inside a PostgreSQL module function.</p><p>Use <code>pg_result_error()</code>, <code>pg_result_error_field()</code>, <code>pg_result_status()</code> and <code>pg_connection_status()</code> for better error handling.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_errormessage()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return string <p>A <code>string</code> containing the last error message on the given <code>connection</code>, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-last-error.php
	 * @see pg_result_error(), pg_result_error_field()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_last_error($connection = NULL): string {}

	/**
	 * Returns the last notice message from PostgreSQL server
	 * <p><b>pg_last_notice()</b> returns the last notice message from the PostgreSQL server on the specified <code>connection</code>. The PostgreSQL server sends notice messages in several cases, for instance when creating a <i>SERIAL</i> column in a table.</p><p>With <b>pg_last_notice()</b>, you can avoid issuing useless queries by checking whether or not the notice is related to your transaction.</p><p>Notice message tracking can be set to optional by setting 1 for <i>pgsql.ignore_notice</i> in php.ini.</p><p>Notice message logging can be set to optional by setting 0 for <i>pgsql.log_notice</i> in php.ini. Unless <i>pgsql.ignore_notice</i> is set to 0, notice message cannot be logged.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param int $option <p>One of <b><code>PGSQL_NOTICE_LAST</code></b> (to return last notice), <b><code>PGSQL_NOTICE_ALL</code></b> (to return all notices), or <b><code>PGSQL_NOTICE_CLEAR</code></b> (to clear notices).</p>
	 * @return mixed <p>A <code>string</code> containing the last notice on the given <code>connection</code> with <b><code>PGSQL_NOTICE_LAST</code></b>, an <code>array</code> with <b><code>PGSQL_NOTICE_ALL</code></b>, a <code>boolean</code> with <b><code>PGSQL_NOTICE_CLEAR</code></b>, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-last-notice.php
	 * @see pg_query(), pg_last_error()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function pg_last_notice($connection, int $option = PGSQL_NOTICE_LAST) {}

	/**
	 * Returns the last row's OID
	 * <p><b>pg_last_oid()</b> is used to retrieve the OID assigned to an inserted row.</p><p>OID field became an optional field from PostgreSQL 7.2 and will not be present by default in PostgreSQL 8.1. When the OID field is not present in a table, the programmer must use <code>pg_result_status()</code> to check for successful insertion.</p><p>To get the value of a <i>SERIAL</i> field in an inserted row, it is necessary to use the PostgreSQL <i>CURRVAL</i> function, naming the sequence whose last value is required. If the name of the sequence is unknown, the <i>pg_get_serial_sequence</i> PostgreSQL 8.0 function is necessary.</p><p>PostgreSQL 8.1 has a function <i>LASTVAL</i> that returns the value of the most recently used sequence in the session. This avoids the need for naming the sequence, table or column altogether.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_getlastoid()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @return string <p>A <code>string</code> containing the OID assigned to the most recently inserted row in the specified <code>connection</code>, or <b><code>FALSE</code></b> on error or no available OID.</p>
	 * @link http://php.net/manual/en/function.pg-last-oid.php
	 * @see pg_query(), pg_result_status()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_last_oid($result): string {}

	/**
	 * Close a large object
	 * <p><b>pg_lo_close()</b> closes a large object. <code>large_object</code> is a resource for the large object from <code>pg_lo_open()</code>.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_loclose()</b>.</p>
	 * @param resource $large_object
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-lo-close.php
	 * @see pg_lo_open(), pg_lo_create(), pg_lo_import()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_close($large_object): bool {}

	/**
	 * Create a large object
	 * <p><b>pg_lo_create()</b> creates a large object and returns the OID of the large object. PostgreSQL access modes <b><code>INV_READ</code></b>, <b><code>INV_WRITE</code></b>, and <b><code>INV_ARCHIVE</code></b> are not supported, the object is created always with both read and write access. <b><code>INV_ARCHIVE</code></b> has been removed from PostgreSQL itself (version 6.3 and above).</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p>Instead of using the large object interface (which has no access controls and is cumbersome to use), try PostgreSQL's bytea column type and <code>pg_escape_bytea()</code>.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_locreate()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param mixed $object_id <p>If an <code>object_id</code> is given the function will try to create a large object with this id, else a free object id is assigned by the server. The parameter was added in PHP 5.3 and relies on functionality that first appeared in PostgreSQL 8.1.</p>
	 * @return int <p>A large object OID or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-lo-create.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_create($connection = NULL, $object_id = NULL): int {}

	/**
	 * Export a large object to file
	 * <p><b>pg_lo_export()</b> takes a large object in a PostgreSQL database and saves its contents to a file on the local filesystem.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_loexport()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param int $oid <p>The OID of the large object in the database.</p>
	 * @param string $pathname <p>The full path and file name of the file in which to write the large object on the client filesystem.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-lo-export.php
	 * @see pg_lo_import()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_export($connection = NULL, int $oid, string $pathname): bool {}

	/**
	 * Import a large object from file
	 * <p><b>pg_lo_import()</b> creates a new large object in the database using a file on the filesystem as its data source.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>: When safe mode is enabled, PHP checks whether the files or directories being operated upon have the same UID (owner) as the script that is being executed.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_loimport()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $pathname <p>The full path and file name of the file on the client filesystem from which to read the large object data.</p>
	 * @param mixed $object_id <p>If an <code>object_id</code> is given the function will try to create a large object with this id, else a free object id is assigned by the server. The parameter was added in PHP 5.3 and relies on functionality that first appeared in PostgreSQL 8.1.</p>
	 * @return int <p>The OID of the newly created large object, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-lo-import.php
	 * @see pg_lo_export(), pg_lo_open()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_import($connection = NULL, string $pathname, $object_id = NULL): int {}

	/**
	 * Open a large object
	 * <p><b>pg_lo_open()</b> opens a large object in the database and returns large object resource so that it can be manipulated.</p><p>Do not close the database connection before closing the large object resource.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_loopen()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param int $oid <p>The OID of the large object in the database.</p>
	 * @param string $mode <p>Can be either "r" for read-only, "w" for write only or "rw" for read and write.</p>
	 * @return resource <p>A large object resource or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-lo-open.php
	 * @see pg_lo_close(), pg_lo_create()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_open($connection, int $oid, string $mode) {}

	/**
	 * Read a large object
	 * <p><b>pg_lo_read()</b> reads at most <code>len</code> bytes from a large object and returns it as a <code>string</code>.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_loread()</b>.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @param int $len <p>An optional maximum number of bytes to return.</p>
	 * @return string <p>A <code>string</code> containing <code>len</code> bytes from the large object, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-lo-read.php
	 * @see pg_lo_read_all()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_read($large_object, int $len = 8192): string {}

	/**
	 * Reads an entire large object and send straight to browser
	 * <p><b>pg_lo_read_all()</b> reads a large object and passes it straight through to the browser after sending all pending headers. Mainly intended for sending binary data like images or sound.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_loreadall()</b>.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @return int <p>Number of bytes read or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-lo-read-all.php
	 * @see pg_lo_read()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_read_all($large_object): int {}

	/**
	 * Seeks position within a large object
	 * <p><b>pg_lo_seek()</b> seeks a position within a large object resource.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @param int $offset <p>The number of bytes to seek.</p>
	 * @param int $whence <p>One of the constants <b><code>PGSQL_SEEK_SET</code></b> (seek from object start), <b><code>PGSQL_SEEK_CUR</code></b> (seek from current position) or <b><code>PGSQL_SEEK_END</code></b> (seek from object end) .</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-lo-seek.php
	 * @see pg_lo_tell()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_seek($large_object, int $offset, int $whence = PGSQL_SEEK_CUR): bool {}

	/**
	 * Returns current seek position a of large object
	 * <p><b>pg_lo_tell()</b> returns the current position (offset from the beginning) of a large object.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @return int <p>The current seek offset (in number of bytes) from the beginning of the large object. If there is an error, the return value is negative.</p>
	 * @link http://php.net/manual/en/function.pg-lo-tell.php
	 * @see pg_lo_seek()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_tell($large_object): int {}

	/**
	 * Truncates a large object
	 * <p><b>pg_lo_truncate()</b> truncates a large object resource.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @param int $size <p>The number of bytes to truncate.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-lo-truncate.php
	 * @see pg_lo_tell()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_lo_truncate($large_object, int $size): bool {}

	/**
	 * Delete a large object
	 * <p><b>pg_lo_unlink()</b> deletes a large object with the <code>oid</code>. Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_lounlink()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param int $oid <p>The OID of the large object in the database.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-lo-unlink.php
	 * @see pg_lo_create(), pg_lo_import()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_unlink($connection, int $oid): bool {}

	/**
	 * Write to a large object
	 * <p><b>pg_lo_write()</b> writes data into a large object at the current seek position.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_lowrite()</b>.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @param string $data <p>The data to be written to the large object. If <code>len</code> is specified and is less than the length of <code>data</code>, only <code>len</code> bytes will be written.</p>
	 * @param int $len <p>An optional maximum number of bytes to write. Must be greater than zero and no greater than the length of <code>data</code>. Defaults to the length of <code>data</code>.</p>
	 * @return int <p>The number of bytes written to the large object, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-lo-write.php
	 * @see pg_lo_create(), pg_lo_open()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_write($large_object, string $data, int $len = NULL): int {}

	/**
	 * Get meta data for table
	 * <p><b>pg_meta_data()</b> returns table definition for <i>table_name</i> as an array.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>The name of the table.</p>
	 * @param bool $extended <p>Flag for returning extended meta data. Default to <b><code>FALSE</code></b>.</p>
	 * @return array <p>An <code>array</code> of the table definition, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-meta-data.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_meta_data($connection, string $table_name, bool $extended = FALSE): array {}

	/**
	 * Returns the number of fields in a result
	 * <p><b>pg_num_fields()</b> returns the number of fields (columns) in a PostgreSQL result resource.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_numfields()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @return int <p>The number of fields (columns) in the result. On error, -1 is returned.</p>
	 * @link http://php.net/manual/en/function.pg-num-fields.php
	 * @see pg_num_rows(), pg_affected_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_num_fields($result): int {}

	/**
	 * Returns the number of rows in a result
	 * <p><b>pg_num_rows()</b> will return the number of rows in a PostgreSQL result resource.</p><p><b>Note</b>:</p><p>This function used to be called <b>pg_numrows()</b>.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @return int <p>The number of rows in the result. On error, -1 is returned.</p>
	 * @link http://php.net/manual/en/function.pg-num-rows.php
	 * @see pg_num_fields(), pg_affected_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_num_rows($result): int {}

	/**
	 * Get the options associated with the connection
	 * <p><b>pg_options()</b> will return a string containing the options specified on the given PostgreSQL <code>connection</code> resource.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return string <p>A <code>string</code> containing the <code>connection</code> options, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-options.php
	 * @see pg_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_options($connection = NULL): string {}

	/**
	 * Looks up a current parameter setting of the server
	 * <p>Looks up a current parameter setting of the server.</p><p>Certain parameter values are reported by the server automatically at connection startup or whenever their values change. <b>pg_parameter_status()</b> can be used to interrogate these settings. It returns the current value of a parameter if known, or <b><code>FALSE</code></b> if the parameter is not known.</p><p>Parameters reported as of PostgreSQL 8.0 include <i>server_version</i>, <i>server_encoding</i>, <i>client_encoding</i>, <i>is_superuser</i>, <i>session_authorization</i>, <i>DateStyle</i>, <i>TimeZone</i>, and <i>integer_datetimes</i>. (<i>server_encoding</i>, <i>TimeZone</i>, and <i>integer_datetimes</i> were not reported by releases before 8.0.) Note that <i>server_version</i>, <i>server_encoding</i> and <i>integer_datetimes</i> cannot change after PostgreSQL startup.</p><p>PostgreSQL 7.3 or lower servers do not report parameter settings, <b>pg_parameter_status()</b> includes logic to obtain values for <i>server_version</i> and <i>client_encoding</i> anyway. Applications are encouraged to use <b>pg_parameter_status()</b> rather than ad hoc code to determine these values.</p><p>On a pre-7.4 PostgreSQL server, changing <i>client_encoding</i> via <i>SET</i> after connection startup will not be reflected by <b>pg_parameter_status()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $param_name <p>Possible <code>param_name</code> values include <i>server_version</i>, <i>server_encoding</i>, <i>client_encoding</i>, <i>is_superuser</i>, <i>session_authorization</i>, <i>DateStyle</i>, <i>TimeZone</i>, and <i>integer_datetimes</i>.</p>
	 * @return string <p>A <code>string</code> containing the value of the parameter, <b><code>FALSE</code></b> on failure or invalid <code>param_name</code>.</p>
	 * @link http://php.net/manual/en/function.pg-parameter-status.php
	 * @since PHP 5, PHP 7
	 */
	function pg_parameter_status($connection = NULL, string $param_name): string {}

	/**
	 * Open a persistent PostgreSQL connection
	 * <p><b>pg_pconnect()</b> opens a connection to a PostgreSQL database. It returns a connection resource that is needed by other PostgreSQL functions.</p><p>If a second call is made to <b>pg_pconnect()</b> with the same <code>connection_string</code> as an existing connection, the existing connection will be returned unless you pass <b><code>PGSQL_CONNECT_FORCE_NEW</code></b> as <code>connect_type</code>.</p><p>To enable persistent connection, the pgsql.allow_persistent php.ini directive must be set to "On" (which is the default). The maximum number of persistent connection can be defined with the pgsql.max_persistent php.ini directive (defaults to -1 for no limit). The total number of connections can be set with the pgsql.max_links php.ini directive.</p><p><code>pg_close()</code> will not close persistent links generated by <b>pg_pconnect()</b>.</p>
	 * @param string $connection_string <p>The <code>connection_string</code> can be empty to use all default parameters, or it can contain one or more parameter settings separated by whitespace. Each parameter setting is in the form <i>keyword = value</i>. Spaces around the equal sign are optional. To write an empty value or a value containing spaces, surround it with single quotes, e.g., <i>keyword = 'a value'</i>. Single quotes and backslashes within the value must be escaped with a backslash, i.e., \' and \\.</p> <p>The currently recognized parameter keywords are: <code>host</code>, <code>hostaddr</code>, <code>port</code>, <code>dbname</code>, <code>user</code>, <code>password</code>, <code>connect_timeout</code>, <code>options</code>, <code>tty</code> (ignored), <code>sslmode</code>, <code>requiressl</code> (deprecated in favor of <code>sslmode</code>), and <code>service</code>. Which of these arguments exist depends on your PostgreSQL version.</p>
	 * @param int $connect_type <p>If <b><code>PGSQL_CONNECT_FORCE_NEW</code></b> is passed, then a new connection is created, even if the <code>connection_string</code> is identical to an existing connection.</p>
	 * @return resource <p>PostgreSQL connection resource on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-pconnect.php
	 * @see pg_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_pconnect(string $connection_string, int $connect_type = NULL) {}

	/**
	 * Ping database connection
	 * <p><b>pg_ping()</b> pings a database connection and tries to reconnect it if it is broken.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-ping.php
	 * @see pg_connection_status(), pg_connection_reset()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_ping($connection = NULL): bool {}

	/**
	 * Return the port number associated with the connection
	 * <p><b>pg_port()</b> returns the port number that the given PostgreSQL <code>connection</code> resource is connected to.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return int <p>An <code>int</code> containing the port number of the database server the <code>connection</code> is to, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-port.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_port($connection = NULL): int {}

	/**
	 * Submits a request to create a prepared statement with the given parameters, and waits for completion
	 * <p><b>pg_prepare()</b> creates a prepared statement for later execution with <code>pg_execute()</code> or <code>pg_send_execute()</code>. This feature allows commands that will be used repeatedly to be parsed and planned just once, rather than each time they are executed. <b>pg_prepare()</b> is supported only against PostgreSQL 7.4 or higher connections; it will fail when using earlier versions.</p><p>The function creates a prepared statement named <code>stmtname</code> from the <code>query</code> string, which must contain a single SQL command. <code>stmtname</code> may be "" to create an unnamed statement, in which case any pre-existing unnamed statement is automatically replaced; otherwise it is an error if the statement name is already defined in the current session. If any parameters are used, they are referred to in the <code>query</code> as $1, $2, etc.</p><p>Prepared statements for use with <b>pg_prepare()</b> can also be created by executing SQL <i>PREPARE</i> statements. (But <b>pg_prepare()</b> is more flexible since it does not require parameter types to be pre-specified.) Also, although there is no PHP function for deleting a prepared statement, the SQL <i>DEALLOCATE</i> statement can be used for that purpose.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $stmtname <p>The name to give the prepared statement. Must be unique per-connection. If "" is specified, then an unnamed statement is created, overwriting any previously defined unnamed statement.</p>
	 * @param string $query <p>The parameterized SQL statement. Must contain only a single statement. (multiple statements separated by semi-colons are not allowed.) If any parameters are used, they are referred to as $1, $2, etc.</p>
	 * @return resource <p>A query result resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-prepare.php
	 * @see pg_execute(), pg_send_execute()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_prepare($connection = NULL, string $stmtname, string $query) {}

	/**
	 * Send a NULL-terminated string to PostgreSQL backend
	 * <p><b>pg_put_line()</b> sends a NULL-terminated string to the PostgreSQL backend server. This is needed in conjunction with PostgreSQL's <i>COPY FROM</i> command.</p><p><i>COPY</i> is a high-speed data loading interface supported by PostgreSQL. Data is passed in without being parsed, and in a single transaction.</p><p>An alternative to using raw <b>pg_put_line()</b> commands is to use <code>pg_copy_from()</code>. This is a far simpler interface.</p><p><b>Note</b>:</p><p>The application must explicitly send the two characters "\." on the last line to indicate to the backend that it has finished sending its data, before issuing <code>pg_end_copy()</code>.</p><p>Use of the <b>pg_put_line()</b> causes most large object operations, including <code>pg_lo_read()</code> and <code>pg_lo_tell()</code>, to subsequently fail. You can use <code>pg_copy_from()</code> and <code>pg_copy_to()</code> instead.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $data <p>A line of text to be sent directly to the PostgreSQL backend. A <i>NULL</i> terminator is added automatically.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-put-line.php
	 * @see pg_end_copy()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_put_line($connection = NULL, string $data): bool {}

	/**
	 * Execute a query
	 * <p><b>pg_query()</b> executes the <code>query</code> on the specified database <code>connection</code>. <code>pg_query_params()</code> should be preferred in most cases.</p><p>If an error occurs, and <b><code>FALSE</code></b> is returned, details of the error can be retrieved using the <code>pg_last_error()</code> function if the connection is valid.</p><p></p><p><b>Note</b>:  Although <code>connection</code> can be omitted, it is not recommended, since it can be the cause of hard to find bugs in scripts. </p><p><b>Note</b>:</p><p>This function used to be called <b>pg_exec()</b>. <b>pg_exec()</b> is still available for compatibility reasons, but users are encouraged to use the newer name.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $query <p>The SQL statement or statements to be executed. When multiple statements are passed to the function, they are automatically executed as one transaction, unless there are explicit BEGIN/COMMIT commands included in the query string. However, using multiple transactions in one function call is not recommended.</p> <p><b>Warning</b></p> <p>String interpolation of user-supplied data is extremely dangerous and is likely to lead to SQL injection vulnerabilities. In most cases <code>pg_query_params()</code> should be preferred, passing user-supplied values as parameters rather than substituting them into the query string.</p> <p>Any user-supplied data substituted directly into a query string should be properly escaped.</p>
	 * @return resource <p>A query result resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-query.php
	 * @see pg_connect(), pg_pconnect(), pg_fetch_array(), pg_fetch_object(), pg_num_rows(), pg_affected_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_query($connection = NULL, string $query) {}

	/**
	 * Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text
	 * <p>Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text.</p><p><b>pg_query_params()</b> is like <code>pg_query()</code>, but offers additional functionality: parameter values can be specified separately from the command string proper. <b>pg_query_params()</b> is supported only against PostgreSQL 7.4 or higher connections; it will fail when using earlier versions.</p><p>If parameters are used, they are referred to in the <code>query</code> string as $1, $2, etc. The same parameter may appear more than once in the <code>query</code>; the same value will be used in that case. <code>params</code> specifies the actual values of the parameters. A <b><code>NULL</code></b> value in this array means the corresponding parameter is SQL <i>NULL</i>.</p><p>The primary advantage of <b>pg_query_params()</b> over <code>pg_query()</code> is that parameter values may be separated from the <code>query</code> string, thus avoiding the need for tedious and error-prone quoting and escaping. Unlike <code>pg_query()</code>, <b>pg_query_params()</b> allows at most one SQL command in the given string. (There can be semicolons in it, but not more than one nonempty command.)</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $query <p>The parameterized SQL statement. Must contain only a single statement. (multiple statements separated by semi-colons are not allowed.) If any parameters are used, they are referred to as $1, $2, etc.</p> <p>User-supplied values should always be passed as parameters, not interpolated into the query string, where they form possible  SQL injection attack vectors and introduce bugs when handling data containing quotes. If for some reason you cannot use a parameter, ensure that interpolated values are properly escaped.</p>
	 * @param array $params <p>An array of parameter values to substitute for the $1, $2, etc. placeholders in the original prepared query string. The number of elements in the array must match the number of placeholders.</p> <p>Values intended for <i>bytea</i> fields are not supported as parameters. Use <code>pg_escape_bytea()</code> instead, or use the large object functions.</p>
	 * @return resource <p>A query result resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-query-params.php
	 * @see pg_query()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_query_params($connection = NULL, string $query, array $params) {}

	/**
	 * Get error message associated with result
	 * <p><b>pg_result_error()</b> returns any error message associated with the <code>result</code> resource. Therefore, the user has a better chance of getting the correct error message than with <code>pg_last_error()</code>.</p><p>The function <code>pg_result_error_field()</code> can give much greater detail on result errors than <b>pg_result_error()</b>.</p><p>Because <code>pg_query()</code> returns <b><code>FALSE</code></b> if the query fails, you must use <code>pg_send_query()</code> and <code>pg_get_result()</code> to get the result handle.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @return string <p>Returns a <code>string</code>. Returns empty string if there is no error. If there is an error associated with the <code>result</code> parameter, returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.pg-result-error.php
	 * @see pg_result_error_field(), pg_query(), pg_send_query(), pg_get_result(), pg_last_error(), pg_last_notice()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_result_error($result): string {}

	/**
	 * Returns an individual field of an error report
	 * <p><b>pg_result_error_field()</b> returns one of the detailed error message fields associated with <code>result</code> resource. It is only available against a PostgreSQL 7.4 or above server. The error field is specified by the <code>fieldcode</code>.</p><p>Because <code>pg_query()</code> and <code>pg_query_params()</code> return <b><code>FALSE</code></b> if the query fails, you must use <code>pg_send_query()</code> and <code>pg_get_result()</code> to get the result handle.</p><p>If you need to get additional error information from failed <code>pg_query()</code> queries, use <code>pg_set_error_verbosity()</code> and <code>pg_last_error()</code> and then parse the result.</p>
	 * @param resource $result <p>A PostgreSQL query result resource from a previously executed statement.</p>
	 * @param int $fieldcode <p>Possible <code>fieldcode</code> values are: <b><code>PGSQL_DIAG_SEVERITY</code></b>, <b><code>PGSQL_DIAG_SQLSTATE</code></b>, <b><code>PGSQL_DIAG_MESSAGE_PRIMARY</code></b>, <b><code>PGSQL_DIAG_MESSAGE_DETAIL</code></b>, <b><code>PGSQL_DIAG_MESSAGE_HINT</code></b>, <b><code>PGSQL_DIAG_STATEMENT_POSITION</code></b>, <b><code>PGSQL_DIAG_INTERNAL_POSITION</code></b> (PostgreSQL 8.0+ only), <b><code>PGSQL_DIAG_INTERNAL_QUERY</code></b> (PostgreSQL 8.0+ only), <b><code>PGSQL_DIAG_CONTEXT</code></b>, <b><code>PGSQL_DIAG_SOURCE_FILE</code></b>, <b><code>PGSQL_DIAG_SOURCE_LINE</code></b> or <b><code>PGSQL_DIAG_SOURCE_FUNCTION</code></b>.</p>
	 * @return string <p>A <code>string</code> containing the contents of the error field, <b><code>NULL</code></b> if the field does not exist or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-result-error-field.php
	 * @see pg_result_error()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_result_error_field($result, int $fieldcode): string {}

	/**
	 * Set internal row offset in result resource
	 * <p><b>pg_result_seek()</b> sets the internal row offset in a result resource.</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $offset <p>Row to move the internal offset to in the <code>result</code> resource. Rows are numbered starting from zero.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-result-seek.php
	 * @see pg_fetch_row(), pg_fetch_assoc(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_result_seek($result, int $offset): bool {}

	/**
	 * Get status of query result
	 * <p><b>pg_result_status()</b> returns the status of a result resource, or the PostgreSQL command completion tag associated with the result</p>
	 * @param resource $result <p>PostgreSQL query result resource, returned by <code>pg_query()</code>, <code>pg_query_params()</code> or <code>pg_execute()</code> (among others).</p>
	 * @param int $type <p>Either <b><code>PGSQL_STATUS_LONG</code></b> to return the numeric status of the <code>result</code>, or <b><code>PGSQL_STATUS_STRING</code></b> to return the command tag of the <code>result</code>. If not specified, <b><code>PGSQL_STATUS_LONG</code></b> is the default.</p>
	 * @return mixed <p>Possible return values are <b><code>PGSQL_EMPTY_QUERY</code></b>, <b><code>PGSQL_COMMAND_OK</code></b>, <b><code>PGSQL_TUPLES_OK</code></b>, <b><code>PGSQL_COPY_OUT</code></b>, <b><code>PGSQL_COPY_IN</code></b>, <b><code>PGSQL_BAD_RESPONSE</code></b>, <b><code>PGSQL_NONFATAL_ERROR</code></b> and <b><code>PGSQL_FATAL_ERROR</code></b> if <b><code>PGSQL_STATUS_LONG</code></b> is specified. Otherwise, a <code>string</code> containing the PostgreSQL command tag is returned.</p>
	 * @link http://php.net/manual/en/function.pg-result-status.php
	 * @see pg_connection_status()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_result_status($result, int $type = PGSQL_STATUS_LONG) {}

	/**
	 * Select records
	 * <p><b>pg_select()</b> selects records specified by <i>assoc_array</i> which has <i>field=&gt;value</i>. For a successful query, it returns an array containing all records and fields that match the condition specified by <i>assoc_array</i>.</p><p>If <i>options</i> is specified, <code>pg_convert()</code> is applied to <i>assoc_array</i> with the specified flags.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table from which to select rows.</p>
	 * @param array $assoc_array <p>An <code>array</code> whose keys are field names in the table <code>table_name</code>, and whose values are the conditions that a row must meet to be retrieved.</p>
	 * @param int $options <p>Any number of <b><code>PGSQL_CONV_FORCE_NULL</code></b>, <b><code>PGSQL_DML_NO_CONV</code></b>, <b><code>PGSQL_DML_ESCAPE</code></b>, <b><code>PGSQL_DML_EXEC</code></b>, <b><code>PGSQL_DML_ASYNC</code></b> or <b><code>PGSQL_DML_STRING</code></b> combined. If <b><code>PGSQL_DML_STRING</code></b> is part of the <code>options</code> then query string is returned. When <b><code>PGSQL_DML_NO_CONV</code></b> or <b><code>PGSQL_DML_ESCAPE</code></b> is set, it does not call <code>pg_convert()</code> internally.</p>
	 * @param int $result_type
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Returns <code>string</code> if <b><code>PGSQL_DML_STRING</code></b> is passed via <code>options</code>.</p>
	 * @link http://php.net/manual/en/function.pg-select.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_select($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC, int $result_type = PGSQL_ASSOC) {}

	/**
	 * Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)
	 * <p>Sends a request to execute a prepared statement with given parameters, without waiting for the result(s).</p><p>This is similar to <code>pg_send_query_params()</code>, but the command to be executed is specified by naming a previously-prepared statement, instead of giving a query string. The function's parameters are handled identically to <code>pg_execute()</code>. Like <code>pg_execute()</code>, it will not work on pre-7.4 versions of PostgreSQL.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $stmtname <p>The name of the prepared statement to execute. if "" is specified, then the unnamed statement is executed. The name must have been previously prepared using <code>pg_prepare()</code>, <code>pg_send_prepare()</code> or a <i>PREPARE</i> SQL command.</p>
	 * @param array $params <p>An array of parameter values to substitute for the $1, $2, etc. placeholders in the original prepared query string. The number of elements in the array must match the number of placeholders.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure. Use <code>pg_get_result()</code> to determine the query result.</p>
	 * @link http://php.net/manual/en/function.pg-send-execute.php
	 * @see pg_prepare(), pg_send_prepare(), pg_execute()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_send_execute($connection, string $stmtname, array $params): bool {}

	/**
	 * Sends a request to create a prepared statement with the given parameters, without waiting for completion
	 * <p>Sends a request to create a prepared statement with the given parameters, without waiting for completion.</p><p>This is an asynchronous version of <code>pg_prepare()</code>: it returns <b><code>TRUE</code></b> if it was able to dispatch the request, and <b><code>FALSE</code></b> if not. After a successful call, call <code>pg_get_result()</code> to determine whether the server successfully created the prepared statement. The function's parameters are handled identically to <code>pg_prepare()</code>. Like <code>pg_prepare()</code>, it will not work on pre-7.4 versions of PostgreSQL.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $stmtname <p>The name to give the prepared statement. Must be unique per-connection. If "" is specified, then an unnamed statement is created, overwriting any previously defined unnamed statement.</p>
	 * @param string $query <p>The parameterized SQL statement. Must contain only a single statement. (multiple statements separated by semi-colons are not allowed.) If any parameters are used, they are referred to as $1, $2, etc.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure. Use <code>pg_get_result()</code> to determine the query result.</p>
	 * @link http://php.net/manual/en/function.pg-send-prepare.php
	 * @see pg_connect(), pg_pconnect(), pg_execute(), pg_send_execute(), pg_send_query_params()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_send_prepare($connection, string $stmtname, string $query): bool {}

	/**
	 * Sends asynchronous query
	 * <p><b>pg_send_query()</b> sends a query or queries asynchronously to the <code>connection</code>. Unlike <code>pg_query()</code>, it can send multiple queries at once to PostgreSQL and get the results one by one using <code>pg_get_result()</code>.</p><p>Script execution is not blocked while the queries are executing. Use <code>pg_connection_busy()</code> to check if the connection is busy (i.e. the query is executing). Queries may be cancelled using <code>pg_cancel_query()</code>.</p><p>Although the user can send multiple queries at once, multiple queries cannot be sent over a busy connection. If a query is sent while the connection is busy, it waits until the last query is finished and discards all its results.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $query <p>The SQL statement or statements to be executed.</p> <p>Data inside the query should be properly escaped.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Use <code>pg_get_result()</code> to determine the query result.</p>
	 * @link http://php.net/manual/en/function.pg-send-query.php
	 * @see pg_query(), pg_cancel_query(), pg_get_result(), pg_connection_busy()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_send_query($connection, string $query): bool {}

	/**
	 * Submits a command and separate parameters to the server without waiting for the result(s)
	 * <p>Submits a command and separate parameters to the server without waiting for the result(s).</p><p>This is equivalent to <code>pg_send_query()</code> except that query parameters can be specified separately from the <code>query</code> string. The function's parameters are handled identically to <code>pg_query_params()</code>. Like <code>pg_query_params()</code>, it will not work on pre-7.4 PostgreSQL connections, and it allows only one command in the query string.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $query <p>The parameterized SQL statement. Must contain only a single statement. (multiple statements separated by semi-colons are not allowed.) If any parameters are used, they are referred to as $1, $2, etc.</p>
	 * @param array $params <p>An array of parameter values to substitute for the $1, $2, etc. placeholders in the original prepared query string. The number of elements in the array must match the number of placeholders.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Use <code>pg_get_result()</code> to determine the query result.</p>
	 * @link http://php.net/manual/en/function.pg-send-query-params.php
	 * @see pg_send_query()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_send_query_params($connection, string $query, array $params): bool {}

	/**
	 * Set the client encoding
	 * <p><b>pg_set_client_encoding()</b> sets the client encoding and returns 0 if success or -1 if error.</p><p>PostgreSQL will automatically convert data in the backend database encoding into the frontend encoding.</p><p><b>Note</b>:</p><p>The function used to be called <b>pg_setclientencoding()</b>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param string $encoding <p>The required client encoding. One of <i>SQL_ASCII</i>, <i>EUC_JP</i>, <i>EUC_CN</i>, <i>EUC_KR</i>, <i>EUC_TW</i>, <i>UNICODE</i>, <i>MULE_INTERNAL</i>, <i>LATINX</i> (X=1...9), <i>KOI8</i>, <i>WIN</i>, <i>ALT</i>, <i>SJIS</i>, <i>BIG5</i> or <i>WIN1250</i>.</p> <p>The exact list of available encodings depends on your PostgreSQL version, so check your PostgreSQL manual for a more specific list.</p>
	 * @return int <p>Returns 0 on success or -1 on error.</p>
	 * @link http://php.net/manual/en/function.pg-set-client-encoding.php
	 * @see pg_client_encoding()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_set_client_encoding($connection = NULL, string $encoding): int {}

	/**
	 * Determines the verbosity of messages returned by pg_last_error() and pg_result_error()
	 * <p>Determines the verbosity of messages returned by <code>pg_last_error()</code> and <code>pg_result_error()</code>.</p><p><b>pg_set_error_verbosity()</b> sets the verbosity mode, returning the connection's previous setting. In <b><code>PGSQL_ERRORS_TERSE</code></b> mode, returned messages include severity, primary text, and position only; this will normally fit on a single line. The default mode (<b><code>PGSQL_ERRORS_DEFAULT</code></b>) produces messages that include the above plus any detail, hint, or context fields (these may span multiple lines). The <b><code>PGSQL_ERRORS_VERBOSE</code></b> mode includes all available fields. Changing the verbosity does not affect the messages available from already-existing result objects, only subsequently-created ones.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @param int $verbosity <p>The required verbosity: <b><code>PGSQL_ERRORS_TERSE</code></b>, <b><code>PGSQL_ERRORS_DEFAULT</code></b> or <b><code>PGSQL_ERRORS_VERBOSE</code></b>.</p>
	 * @return int <p>The previous verbosity level: <b><code>PGSQL_ERRORS_TERSE</code></b>, <b><code>PGSQL_ERRORS_DEFAULT</code></b> or <b><code>PGSQL_ERRORS_VERBOSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.pg-set-error-verbosity.php
	 * @see pg_last_error(), pg_result_error()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_set_error_verbosity($connection = NULL, int $verbosity): int {}

	/**
	 * Get a read only handle to the socket underlying a PostgreSQL connection
	 * <p><b>pg_socket()</b> returns a read only <code>resource</code> corresponding to the socket underlying the given PostgreSQL connection.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return resource <p>A socket resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-socket.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_socket($connection) {}

	/**
	 * Enable tracing a PostgreSQL connection
	 * <p><b>pg_trace()</b> enables tracing of the PostgreSQL frontend/backend communication to a file. To fully understand the results, one needs to be familiar with the internals of PostgreSQL communication protocol.</p><p>For those who are not, it can still be useful for tracing errors in queries sent to the server, you could do for example <b>grep '^To backend' trace.log</b> and see what queries actually were sent to the PostgreSQL server. For more information, refer to the PostgreSQL Documentation.</p>
	 * @param string $pathname <p>The full path and file name of the file in which to write the trace log. Same as in <code>fopen()</code>.</p>
	 * @param string $mode <p>An optional file access mode, same as for <code>fopen()</code>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pg-trace.php
	 * @see fopen(), pg_untrace()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function pg_trace(string $pathname, string $mode = "w", $connection = NULL): bool {}

	/**
	 * Returns the current in-transaction status of the server
	 * <p>Returns the current in-transaction status of the server.</p><p><b>pg_transaction_status()</b> will give incorrect results when using a PostgreSQL 7.3 server that has the parameter <i>autocommit</i> set to off. The server-side autocommit feature has been deprecated and does not exist in later server versions.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return int <p>The status can be <b><code>PGSQL_TRANSACTION_IDLE</code></b> (currently idle), <b><code>PGSQL_TRANSACTION_ACTIVE</code></b> (a command is in progress), <b><code>PGSQL_TRANSACTION_INTRANS</code></b> (idle, in a valid transaction block), or <b><code>PGSQL_TRANSACTION_INERROR</code></b> (idle, in a failed transaction block). <b><code>PGSQL_TRANSACTION_UNKNOWN</code></b> is reported if the connection is bad. <b><code>PGSQL_TRANSACTION_ACTIVE</code></b> is reported only when a query has been sent to the server and not yet completed.</p>
	 * @link http://php.net/manual/en/function.pg-transaction-status.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_transaction_status($connection): int {}

	/**
	 * Return the TTY name associated with the connection
	 * <p><b>pg_tty()</b> returns the TTY name that server side debugging output is sent to on the given PostgreSQL <code>connection</code> resource.</p><p><b>Note</b>:</p><p><b>pg_tty()</b> is obsolete, since the server no longer pays attention to the TTY setting, but the function remains for backwards compatibility.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return string <p>A <code>string</code> containing the debug TTY of the <code>connection</code>, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pg-tty.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_tty($connection = NULL): string {}

	/**
	 * Unescape binary for bytea type
	 * <p><b>pg_unescape_bytea()</b> unescapes PostgreSQL bytea data values. It returns the unescaped string, possibly containing binary data.</p><p><b>Note</b>:</p><p>When you <i>SELECT</i> a bytea type, PostgreSQL returns octal byte values prefixed with '\' (e.g. \032). Users are supposed to convert back to binary format manually.</p><p>This function requires PostgreSQL 7.2 or later. With PostgreSQL 7.2.0 and 7.2.1, bytea values must be cast when you enable multi-byte support. i.e. <i>INSERT INTO test_table (image) VALUES ('$image_escaped'::bytea);</i> PostgreSQL 7.2.2 or later does not need a cast. The exception is when the client and backend character encoding does not match, and there may be multi-byte stream error. User must then cast to bytea to avoid this error.</p>
	 * @param string $data <p>A <code>string</code> containing PostgreSQL bytea data to be converted into a PHP binary string.</p>
	 * @return string <p>A <code>string</code> containing the unescaped data.</p>
	 * @link http://php.net/manual/en/function.pg-unescape-bytea.php
	 * @see pg_escape_bytea(), pg_escape_string()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_unescape_bytea(string $data): string {}

	/**
	 * Disable tracing of a PostgreSQL connection
	 * <p>Stop tracing started by <code>pg_trace()</code>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.pg-untrace.php
	 * @see pg_trace()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function pg_untrace($connection = NULL): bool {}

	/**
	 * Update table
	 * <p><b>pg_update()</b> updates records that matches <i>condition</i> with <i>data</i>. If <i>options</i> is specified, <code>pg_convert()</code> is applied to <i>data</i> with specified options.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @param string $table_name <p>Name of the table into which to update rows.</p>
	 * @param array $data <p>An <code>array</code> whose keys are field names in the table <code>table_name</code>, and whose values are what matched rows are to be updated to.</p>
	 * @param array $condition <p>An <code>array</code> whose keys are field names in the table <code>table_name</code>, and whose values are the conditions that a row must meet to be updated.</p>
	 * @param int $options <p>Any number of <b><code>PGSQL_CONV_FORCE_NULL</code></b>, <b><code>PGSQL_DML_NO_CONV</code></b>, <b><code>PGSQL_DML_ESCAPE</code></b>, <b><code>PGSQL_DML_EXEC</code></b>, <b><code>PGSQL_DML_ASYNC</code></b> or <b><code>PGSQL_DML_STRING</code></b> combined. If <b><code>PGSQL_DML_STRING</code></b> is part of the <code>options</code> then query string is returned. When <b><code>PGSQL_DML_NO_CONV</code></b> or <b><code>PGSQL_DML_ESCAPE</code></b> is set, it does not call <code>pg_convert()</code> internally.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Returns <code>string</code> if <b><code>PGSQL_DML_STRING</code></b> is passed via <code>options</code>.</p>
	 * @link http://php.net/manual/en/function.pg-update.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_update($connection, string $table_name, array $data, array $condition, int $options = PGSQL_DML_EXEC) {}

	/**
	 * Returns an array with client, protocol and server version (when available)
	 * <p><b>pg_version()</b> returns an array with the client, protocol and server version. Protocol and server versions are only available if PHP was compiled with PostgreSQL 7.4 or later.</p><p>For more detailed server information, use <code>pg_parameter_status()</code>.</p>
	 * @param resource $connection <p>PostgreSQL database connection resource. When <code>connection</code> is not present, the default connection is used. The default connection is the last connection made by <code>pg_connect()</code> or <code>pg_pconnect()</code>.</p>
	 * @return array <p>Returns an array with <i>client</i>, <i>protocol</i> and <i>server</i> keys and values (if available). Returns <b><code>FALSE</code></b> on error or invalid connection.</p>
	 * @link http://php.net/manual/en/function.pg-version.php
	 * @see pg_parameter_status()
	 * @since PHP 5, PHP 7
	 */
	function pg_version($connection = NULL): array {}

	/**
	 * Passed to <code>pg_fetch_array()</code>. Return an associative array of field names and values.
	 */
	define('PGSQL_ASSOC', 1);

	/**
	 * Returned by <code>pg_result_status()</code>. The server's response was not understood.
	 */
	define('PGSQL_BAD_RESPONSE', 5);

	/**
	 * Passed to <code>pg_fetch_array()</code>. Return an array of field values that is both numerically indexed (by field number) and associated (by field name).
	 */
	define('PGSQL_BOTH', 3);

	/**
	 * Returned by <code>pg_result_status()</code>. Successful completion of a command returning no data.
	 */
	define('PGSQL_COMMAND_OK', 1);

	/**
	 * Passed to <code>pg_connect()</code> to create an asynchronous connection. Added in PHP 5.6.0.
	 */
	define('PGSQL_CONNECT_ASYNC', 4);

	/**
	 * Passed to <code>pg_connect()</code> to force the creation of a new connection, rather than re-using an existing identical connection.
	 */
	define('PGSQL_CONNECT_FORCE_NEW', 2);

	/**
	 * Returned by <code>pg_connection_status()</code> indicating that the database connection is in an invalid state.
	 */
	define('PGSQL_CONNECTION_BAD', 1);

	/**
	 * Returned by <code>pg_connection_status()</code> indicating that the database connection is in a valid state.
	 */
	define('PGSQL_CONNECTION_OK', 0);

	/**
	 * Passed to <code>pg_convert()</code>. Use SQL <i>NULL</i> in place of an empty <code>string</code>.
	 */
	define('PGSQL_CONV_FORCE_NULL', 4);

	/**
	 * Passed to <code>pg_convert()</code>. Ignore default values in the table during conversion.
	 */
	define('PGSQL_CONV_IGNORE_DEFAULT', 2);

	/**
	 * Passed to <code>pg_convert()</code>. Ignore conversion of <b><code>NULL</code></b> into SQL <i>NOT NULL</i> columns.
	 */
	define('PGSQL_CONV_IGNORE_NOT_NULL', 8);

	/**
	 * Returned by <code>pg_result_status()</code>. Copy In (to server) data transfer started.
	 */
	define('PGSQL_COPY_IN', 4);

	/**
	 * Returned by <code>pg_result_status()</code>. Copy Out (from server) data transfer started.
	 */
	define('PGSQL_COPY_OUT', 3);

	/**
	 * Passed to <code>pg_result_error_field()</code>. An indication of the context in which the error occurred. Presently this includes a call stack traceback of active procedural language functions and internally-generated queries. The trace is one entry per line, most recent first.
	 */
	define('PGSQL_DIAG_CONTEXT', 87);

	/**
	 * Passed to <code>pg_result_error_field()</code>. This is defined the same as the <b><code>PG_DIAG_STATEMENT_POSITION</code></b> field, but it is used when the cursor position refers to an internally generated command rather than the one submitted by the client. The <b><code>PG_DIAG_INTERNAL_QUERY</code></b> field will always appear when this field appears.
	 */
	define('PGSQL_DIAG_INTERNAL_POSITION', 112);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The text of a failed internally-generated command. This could be, for example, a SQL query issued by a PL/pgSQL function.
	 */
	define('PGSQL_DIAG_INTERNAL_QUERY', 113);

	/**
	 * Passed to <code>pg_result_error_field()</code>. Detail: an optional secondary error message carrying more detail about the problem. May run to multiple lines.
	 */
	define('PGSQL_DIAG_MESSAGE_DETAIL', 68);

	/**
	 * Passed to <code>pg_result_error_field()</code>. Hint: an optional suggestion what to do about the problem. This is intended to differ from detail in that it offers advice (potentially inappropriate) rather than hard facts. May run to multiple lines.
	 */
	define('PGSQL_DIAG_MESSAGE_HINT', 72);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The primary human-readable error message (typically one line). Always present.
	 */
	define('PGSQL_DIAG_MESSAGE_PRIMARY', 77);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The severity; the field contents are <i>ERROR</i>, <i>FATAL</i>, or <i>PANIC</i> (in an error message), or <i>WARNING</i>, <i>NOTICE</i>, <i>DEBUG</i>, <i>INFO</i>, or <i>LOG</i> (in a notice message), or a localized translation of one of these. Always present.
	 */
	define('PGSQL_DIAG_SEVERITY', 83);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The file name of the PostgreSQL source-code location where the error was reported.
	 */
	define('PGSQL_DIAG_SOURCE_FILE', 70);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The name of the PostgreSQL source-code function reporting the error.
	 */
	define('PGSQL_DIAG_SOURCE_FUNCTION', 82);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The line number of the PostgreSQL source-code location where the error was reported.
	 */
	define('PGSQL_DIAG_SOURCE_LINE', 76);

	/**
	 * Passed to <code>pg_result_error_field()</code>. The SQLSTATE code for the error. The SQLSTATE code identifies the type of error that has occurred; it can be used by front-end applications to perform specific operations (such as error handling) in response to a particular database error. This field is not localizable, and is always present.
	 */
	define('PGSQL_DIAG_SQLSTATE', 67);

	/**
	 * Passed to <code>pg_result_error_field()</code>. A string containing a decimal integer indicating an error cursor position as an index into the original statement string. The first character has index 1, and positions are measured in characters not bytes.
	 */
	define('PGSQL_DIAG_STATEMENT_POSITION', 80);

	/**
	 * Passed to <code>pg_insert()</code>, <code>pg_select()</code>, <code>pg_update()</code> and <code>pg_delete()</code>. Execute asynchronous query by these functions.
	 */
	define('PGSQL_DML_ASYNC', 1024);

	/**
	 * Passed to <code>pg_insert()</code>, <code>pg_select()</code>, <code>pg_update()</code> and <code>pg_delete()</code>. Apply escape to all parameters instead of calling <code>pg_convert()</code> internally. This option omits meta data look up. Query could be as fast as <code>pg_query()</code> and <code>pg_send_query()</code>.
	 */
	define('PGSQL_DML_ESCAPE', 4096);

	/**
	 * Passed to <code>pg_insert()</code>, <code>pg_select()</code>, <code>pg_update()</code> and <code>pg_delete()</code>. Execute query by these functions.
	 */
	define('PGSQL_DML_EXEC', 512);

	/**
	 * Passed to <code>pg_insert()</code>, <code>pg_select()</code>, <code>pg_update()</code> and <code>pg_delete()</code>. All parameters passed as is. Manual escape is required if parameters contain user supplied data. Use <code>pg_escape_string()</code> for it.
	 */
	define('PGSQL_DML_NO_CONV', 256);

	/**
	 * Passed to <code>pg_insert()</code>, <code>pg_select()</code>, <code>pg_update()</code> and <code>pg_delete()</code>. Return executed query string.
	 */
	define('PGSQL_DML_STRING', 2048);

	/**
	 * Returned by <code>pg_result_status()</code>. The string sent to the server was empty.
	 */
	define('PGSQL_EMPTY_QUERY', 0);

	/**
	 * Passed to <code>pg_set_error_verbosity()</code>. The default mode produces messages that include the above plus any detail, hint, or context fields (these may span multiple lines).
	 */
	define('PGSQL_ERRORS_DEFAULT', 1);

	/**
	 * Passed to <code>pg_set_error_verbosity()</code>. Specified that returned messages include severity, primary text, and position only; this will normally fit on a single line.
	 */
	define('PGSQL_ERRORS_TERSE', 0);

	/**
	 * Passed to <code>pg_set_error_verbosity()</code>. The verbose mode includes all available fields.
	 */
	define('PGSQL_ERRORS_VERBOSE', 2);

	/**
	 * Returned by <code>pg_result_status()</code>. A fatal error occurred.
	 */
	define('PGSQL_FATAL_ERROR', 7);

	/**
	 * Short libpq version that contains only numbers and dots.
	 */
	define('PGSQL_LIBPQ_VERSION', '10.5 (Ubuntu 10.5-1)');

	/**
	 * Long libpq version that includes compiler information.
	 */
	define('PGSQL_LIBPQ_VERSION_STR', 'PostgreSQL 10.5 (Ubuntu 10.5-1) on x86_64-pc-linux-gnu, compiled by gcc (Ubuntu 8.2.0-3ubuntu1) 8.2.0, 64-bit');

	/**
	 * Returned by <code>pg_result_status()</code>. A nonfatal error (a notice or warning) occurred.
	 */
	define('PGSQL_NONFATAL_ERROR', 6);

	/**
	 * Used by <code>pg_last_notice()</code>. Available since PHP 7.1.0.
	 */
	define('PGSQL_NOTICE_ALL', 2);

	/**
	 * Used by <code>pg_last_notice()</code>. Available since PHP 7.1.0.
	 */
	define('PGSQL_NOTICE_CLEAR', 3);

	/**
	 * Used by <code>pg_last_notice()</code>. Available since PHP 7.1.0.
	 */
	define('PGSQL_NOTICE_LAST', 1);

	/**
	 * Passed to <code>pg_fetch_array()</code>. Return a numerically indexed array of field numbers and values.
	 */
	define('PGSQL_NUM', 2);

	/**
	 * Returned by <code>pg_connect_poll()</code> to indicate that the connection is currently active.
	 */
	define('PGSQL_POLLING_ACTIVE', 4);

	/**
	 * Returned by <code>pg_connect_poll()</code> to indicate that the connection attempt failed.
	 */
	define('PGSQL_POLLING_FAILED', 0);

	/**
	 * Returned by <code>pg_connect_poll()</code> to indicate that the connection is ready to be used.
	 */
	define('PGSQL_POLLING_OK', 3);

	/**
	 * Returned by <code>pg_connect_poll()</code> to indicate that the connection is waiting for the PostgreSQL socket to be readable.
	 */
	define('PGSQL_POLLING_READING', 1);

	/**
	 * Returned by <code>pg_connect_poll()</code> to indicate that the connection is waiting for the PostgreSQL socket to be writable.
	 */
	define('PGSQL_POLLING_WRITING', 2);

	/**
	 * Passed to <code>pg_lo_seek()</code>. Seek operation is to begin from the current position.
	 */
	define('PGSQL_SEEK_CUR', 1);

	/**
	 * Passed to <code>pg_lo_seek()</code>. Seek operation is to begin from the end of the object.
	 */
	define('PGSQL_SEEK_END', 2);

	/**
	 * Passed to <code>pg_lo_seek()</code>. Seek operation is to begin from the start of the object.
	 */
	define('PGSQL_SEEK_SET', 0);

	/**
	 * Passed to <code>pg_result_status()</code>. Indicates that numerical result code is desired.
	 */
	define('PGSQL_STATUS_LONG', 1);

	/**
	 * Passed to <code>pg_result_status()</code>. Indicates that textual result command tag is desired.
	 */
	define('PGSQL_STATUS_STRING', 2);

	/**
	 * Returned by <code>pg_transaction_status()</code>. A command is in progress on the connection. A query has been sent via the connection and not yet completed.
	 */
	define('PGSQL_TRANSACTION_ACTIVE', 1);

	/**
	 * Returned by <code>pg_transaction_status()</code>. Connection is currently idle, not in a transaction.
	 */
	define('PGSQL_TRANSACTION_IDLE', 0);

	/**
	 * Returned by <code>pg_transaction_status()</code>. The connection is idle, in a failed transaction block.
	 */
	define('PGSQL_TRANSACTION_INERROR', 3);

	/**
	 * Returned by <code>pg_transaction_status()</code>. The connection is idle, in a transaction block.
	 */
	define('PGSQL_TRANSACTION_INTRANS', 2);

	/**
	 * Returned by <code>pg_transaction_status()</code>. The connection is bad.
	 */
	define('PGSQL_TRANSACTION_UNKNOWN', 4);

	/**
	 * Returned by <code>pg_result_status()</code>. Successful completion of a command returning data (such as a <i>SELECT</i> or <i>SHOW</i>).
	 */
	define('PGSQL_TUPLES_OK', 2);

}
