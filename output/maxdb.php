<?php



namespace {

	/**
	 * Gets the number of affected rows in a previous MaxDB operation
	 * <p><b>maxdb_affected_rows()</b> returns the number of rows affected by the last INSERT, UPDATE, or DELETE query associated with the provided <code>link</code> parameter. If this number cannot be determined, this function will return -1.</p><p><b>Note</b>:</p><p>For SELECT statements <b>maxdb_affected_rows()</b> works like <code>maxdb_num_rows()</code>.</p><p>The <b>maxdb_affected_rows()</b> function only works with queries which modify a table. In order to return the number of rows from a SELECT query, use the <code>maxdb_num_rows()</code> function instead.</p>
	 * @param resource $link
	 * @return int <p>An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records where updated for an UPDATE statement, no rows matched the WHERE clause in the query or that no query has yet been executed. -1 indicates that the number of rows affected can not be determined.</p>
	 * @link http://php.net/manual/en/function.maxdb-affected-rows.php
	 * @see maxdb_num_rows(), maxdb_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_affected_rows($link): int {}

	/**
	 * Turns on or off auto-commiting database modifications
	 * <p><b>maxdb_autocommit()</b> is used to turn on or off auto-commit mode on queries for the database connection represented by the <code>link</code> resource.</p>
	 * @param resource $link
	 * @param bool $mode
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-autocommit.php
	 * @see maxdb_commit(), maxdb_rollback()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_autocommit($link, bool $mode): bool {}

	/**
	 * Alias of maxdb_stmt_bind_param()
	 * <p>This function is an alias of: <code>maxdb_stmt_bind_param()</code></p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @param string $types
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-bind-param.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_bind_param($stmt, string $types, &$var1, &$_ = NULL): bool {}

	/**
	 * Alias of maxdb_stmt_bind_result()
	 * <p>This function is an alias of: <code>maxdb_stmt_bind_result()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-bind-result.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_bind_result($stmt, &$var1, &$_ = NULL): bool {}

	/**
	 * Changes the user of the specified database connection
	 * <p><b>maxdb_change_user()</b> is used to change the user of the specified database connection as given by the <code>link</code> parameter and to set the current database to that specified by the <code>database</code> parameter.</p><p>In order to successfully change users a valid <code>username</code> and <code>password</code> parameters must be provided and that user must have sufficient permissions to access the desired database. If for any reason authorization fails, the current user authentication will remain.</p><p><b>Note</b>:</p><p>Using this command will always cause the current database connection to behave as if was a completely new database connection, regardless of if the operation was completed successfully. This reset includes performing a rollback on any active transactions, closing all temporary tables, and unlocking all locked tables.</p>
	 * @param resource $link
	 * @param string $user
	 * @param string $password
	 * @param string $database
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-change-user.php
	 * @see maxdb_connect(), maxdb_select_db()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_change_user($link, string $user, string $password, string $database): bool {}

	/**
	 * Returns the default character set for the database connection
	 * <p>Returns the current character set for the database connection specified by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @return string <p>The default character set for the current connection, either ascii or unicode.</p>
	 * @link http://php.net/manual/en/function.maxdb-character-set-name.php
	 * @see maxdb_client_encoding(), maxdb_real_escape_string()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_character_set_name($link): string {}

	/**
	 * Alias of maxdb_character_set_name()
	 * <p>This function is an alias of: <code>maxdb_character_set_name()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $link
	 * @return string
	 * @link http://php.net/manual/en/function.maxdb-client-encoding.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_client_encoding($link): string {}

	/**
	 * Closes a previously opened database connection
	 * <p>The <b>maxdb_close()</b> function closes a previously opened database connection specified by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-close.php
	 * @see maxdb_connect(), maxdb_init(), maxdb_real_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_close($link): bool {}

	/**
	 * Alias of maxdb_stmt_close_long_data()
	 * <p>This function is an alias of: <code>maxdb_stmt_close_long_data()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-close-long-data.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_close_long_data($stmt, int $param_nr): bool {}

	/**
	 * Commits the current transaction
	 * <p>Commits the current transaction for the database connection specified by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-commit.php
	 * @see maxdb_autocommit(), maxdb_rollback()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_commit($link): bool {}

	/**
	 * Open a new connection to the MaxDB server
	 * <p>The <b>maxdb_connect()</b> function attempts to open a connection to the MaxDB Server running on <code>host</code> which can be either a host name or an IP address. Passing the string "localhost" to this parameter, the local host is assumed. If successful, the <b>maxdb_connect()</b> will return an resource representing the connection to the database or <b><code>FALSE</code></b> on failure.</p><p>The <code>username</code> and <code>password</code> parameters specify the username and password under which to connect to the MaxDB server. If the password is not provided (the <b><code>NULL</code></b> value is passed), the MaxDB server will attempt to authenticate the user against the <code>maxdb.default_pw</code> in php.ini.</p><p>The <code>dbname</code> parameter if provided will specify the default database to be used when performing queries. If not provied, the entry <code>maxdb.default_db</code> in php.ini is used.</p><p>The <code>port</code> and <code>socket</code> parameters are ignored for the MaxDB server.</p>
	 * @param string $host
	 * @param string $username
	 * @param string $passwd
	 * @param string $dbname
	 * @param int $port
	 * @param string $socket
	 * @return resource <p>Returns a resource which represents the connection to a MaxDB Server or <b><code>FALSE</code></b> if the connection failed.</p>
	 * @link http://php.net/manual/en/function.maxdb-connect.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_connect(string $host = NULL, string $username = NULL, string $passwd = NULL, string $dbname = NULL, int $port = 0, string $socket = NULL) {}

	/**
	 * Returns the error code from last connect call
	 * <p>The <b>maxdb_connect_errno()</b> function will return the last error code number for last call to <code>maxdb_connect()</code>. If no errors have occurred, this function will return zero.</p>
	 * @return int <p>An error code value for the last call to <code>maxdb_connect()</code>, if it failed. zero means no error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-connect-errno.php
	 * @see maxdb_connect(), maxdb_connect_error(), maxdb_errno(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_connect_errno(): int {}

	/**
	 * Returns a string description of the last connect error
	 * <p>The <b>maxdb_connect_error()</b> function is identical to the corresponding <code>maxdb_connect_errno()</code> function in every way, except instead of returning an integer error code the <b>maxdb_connect_error()</b> function will return a string representation of the last error to occur for the last <code>maxdb_connect()</code> call. If no error has occurred, this function will return an empty string.</p>
	 * @return string <p>A string that describes the error. An empty string if no error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-connect-error.php
	 * @see maxdb_connect(), maxdb_connect_errno(), maxdb_errno(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_connect_error(): string {}

	/**
	 * Adjusts the result pointer to an arbitary row in the result
	 * <p>The <b>maxdb_data_seek()</b> function seeks to an arbitrary result pointer specified by the <code>offset</code> in the result set represented by <code>result</code>. The <code>offset</code> parameter must be between zero and the total number of rows minus one (0..<code>maxdb_num_rows()</code> - 1).</p>
	 * @param resource $result
	 * @param int $offset
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-data-seek.php
	 * @see maxdb_store_result(), maxdb_fetch_row(), maxdb_num_rows()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_data_seek($result, int $offset): bool {}

	/**
	 * Performs debugging operations
	 * <p>The <b>maxdb_debug()</b> can be used to trace the SQLDBC communication. The following strings can be used as a parameter to <b>maxdb_debug()</b>:</p>
	 * @param string $debug
	 * @return void <p><b>maxdb_debug()</b> doesn't return any value.</p>
	 * @link http://php.net/manual/en/function.maxdb-debug.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_debug(string $debug): void {}

	/**
	 * Disable reads from master
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-disable-reads-from-master.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_disable_reads_from_master($link): bool {}

	/**
	 * Disable RPL parse
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-disable-rpl-parse.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_disable_rpl_parse($link): bool {}

	/**
	 * Dump debugging information into the log
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-dump-debug-info.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_dump_debug_info($link): bool {}

	/**
	 * Open a connection to an embedded MaxDB server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $dbname
	 * @return resource
	 * @link http://php.net/manual/en/function.maxdb-embedded-connect.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_embedded_connect(string $dbname = NULL) {}

	/**
	 * Enable reads from master
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-enable-reads-from-master.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_enable_reads_from_master($link): bool {}

	/**
	 * Enable RPL parse
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-enable-rpl-parse.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_enable_rpl_parse($link): bool {}

	/**
	 * Returns the error code for the most recent function call
	 * <p>The <b>maxdb_errno()</b> function will return the last error code for the most recent MaxDB function call that can succeed or fail with respect to the database link defined by the <code>link</code> parameter. If no errors have occurred, this function will return zero.</p>
	 * @param resource $link
	 * @return int <p>An error code value for the last call, if it failed. zero means no error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-errno.php
	 * @see maxdb_connect_errno(), maxdb_connect_error(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_errno($link): int {}

	/**
	 * Returns a string description of the last error
	 * <p>The <b>maxdb_error()</b> function is identical to the corresponding <code>maxdb_errno()</code> function in every way, except instead of returning an integer error code the <b>maxdb_error()</b> function will return a string representation of the last error to occur for the database connection represented by the <code>link</code> parameter. If no error has occurred, this function will return an empty string.</p>
	 * @param resource $link
	 * @return string <p>A string that describes the error. An empty string if no error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-error.php
	 * @see maxdb_connect_errno(), maxdb_connect_error(), maxdb_errno(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_error($link): string {}

	/**
	 * Alias of maxdb_real_escape_string()
	 * <p>This function is an alias of: <code>maxdb_real_escape_string()</code>.</p>
	 * @param resource $link
	 * @param string $escapestr
	 * @return string
	 * @link http://php.net/manual/en/function.maxdb-escape-string.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_escape_string($link, string $escapestr): string {}

	/**
	 * Alias of maxdb_stmt_execute()
	 * <p>This function is an alias of: <code>maxdb_stmt_execute()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-execute.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_execute($stmt): bool {}

	/**
	 * Alias of maxdb_stmt_fetch()
	 * <p>This function is an alias of: <code>maxdb_stmt_fetch()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-fetch.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_fetch($stmt): bool {}

	/**
	 * Fetch a result row as an associative, a numeric array, or both
	 * <p>Returns an array that corresponds to the fetched row or <b><code>NULL</code></b> if there are no more rows for the resultset represented by the <code>result</code> parameter.</p><p><b>maxdb_fetch_array()</b> is an extended version of the <code>maxdb_fetch_row()</code> function. In addition to storing the data in the numeric indices of the result array, the <b>maxdb_fetch_array()</b> function can also store the data in associative indices, using the field names of the result set as keys.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p><p>If two or more columns of the result have the same field names, the last column will take precedence and overwrite the earlier data. In order to access multiple columns with the same name, the numerically indexed version of the row must be used.</p><p>The optional second argument <code>resulttype</code> is a constant indicating what type of array should be produced from the current row data. The possible values for this parameter are the constants MAXDB_ASSOC, MAXDB_ASSOC_UPPER, MAXDB_ASSOC_LOWER, MAXDB_NUM, or MAXDB_BOTH. By default the <b>maxdb_fetch_array()</b> function will assume MAXDB_BOTH, which is a combination of MAXDB_NUM and MAXDB_ASSOC for this parameter.</p><p>By using the MAXDB_ASSOC constant this function will behave identically to the <code>maxdb_fetch_assoc()</code>, while MAXDB_NUM will behave identically to the <code>maxdb_fetch_row()</code> function. The final option MAXDB_BOTH will create a single array with the attributes of both.</p><p>By using the MAXDB_ASSOC_UPPER constant, the behaviour of this function is identical to the use of MAXDB_ASSOC except the array index of a column is the fieldname in upper case.</p><p>By using the MAXDB_ASSOC_LOWER constant, the behaviour of this function is identical to the use of MAXDB_ASSOC except the array index of a column is the fieldname in lower case.</p>
	 * @param resource $result
	 * @param int $resulttype
	 * @return mixed <p>Returns an array that corresponds to the fetched row or <b><code>NULL</code></b> if there are no more rows in resultset.</p>
	 * @link http://php.net/manual/en/function.maxdb-fetch-array.php
	 * @see maxdb_fetch_assoc(), maxdb_fetch_row()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_array($result, int $resulttype = NULL) {}

	/**
	 * Fetch a result row as an associative array
	 * <p>Returns an associative array that corresponds to the fetched row or <b><code>NULL</code></b> if there are no more rows.</p><p>The <b>maxdb_fetch_assoc()</b> function is used to return an associative array representing the next row in the result set for the result represented by the <code>result</code> parameter, where each key in the array represents the name of one of the result set's columns.</p><p>If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you either need to access the result with numeric indices by using <code>maxdb_fetch_row()</code> or add alias names.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p>
	 * @param resource $result
	 * @return array <p>Returns an array that corresponds to the fetched row or <b><code>NULL</code></b> if there are no more rows in resultset.</p>
	 * @link http://php.net/manual/en/function.maxdb-fetch-assoc.php
	 * @see maxdb_fetch_array(), maxdb_fetch_row()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_assoc($result): array {}

	/**
	 * Returns the next field in the result set
	 * <p>The <b>maxdb_fetch_field()</b> returns the definition of one column of a result set as an resource. Call this function repeatedly to retrieve information about all columns in the result set. <b>maxdb_fetch_field()</b> returns <b><code>FALSE</code></b> when no more fields are left.</p>
	 * @param resource $result
	 * @return mixed <p>Returns an resource which contains field definition information or <b><code>FALSE</code></b> if no field information is available.</p> <b>Object properties</b>   Property Description     name The name of the column   max_length The maximum width of the field for the result set.   type The data type used for this field   decimals The number of decimals used (for integer fields)
	 * @link http://php.net/manual/en/function.maxdb-fetch-field.php
	 * @see maxdb_num_fields(), maxdb_fetch_field_direct(), maxdb_fetch_fields(), maxdb_field_seek()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_field($result) {}

	/**
	 * Fetch meta-data for a single field
	 * <p><b>maxdb_fetch_field_direct()</b> returns an resource which contains field definition information from specified resultset. The value of fieldnr must be in the range from <i>0</i> to <i>number of fields - 1</i>.</p>
	 * @param resource $result
	 * @param int $fieldnr
	 * @return mixed <p>Returns an resource which contains field definition information or <b><code>FALSE</code></b> if no field information for specified <i>fieldnr</i> is available.</p> <b>Object attributes</b>   Attribute Description     name The name of the column   max_length The maximum width of the field for the result set.   type The data type used for this field   decimals The number of decimals used (for integer fields)
	 * @link http://php.net/manual/en/function.maxdb-fetch-field-direct.php
	 * @see maxdb_num_fields(), maxdb_fetch_field(), maxdb_fetch_fields()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_field_direct($result, int $fieldnr) {}

	/**
	 * Returns an array of resources representing the fields in a result set
	 * <p>This function serves an identical purpose to the <code>maxdb_fetch_field()</code> function with the single difference that, instead of returning one resource at a time for each field, the columns are returned as an array of resources.</p>
	 * @param resource $result
	 * @return mixed <p>Returns an array of resources which contains field definition information or <b><code>FALSE</code></b> if no field information is available.</p> <b>Object properties</b>   Property Description     name The name of the column   max_length The maximum width of the field for the result set.   type The data type used for this field   decimals The number of decimals used (for integer fields)
	 * @link http://php.net/manual/en/function.maxdb-fetch-fields.php
	 * @see maxdb_num_fields(), maxdb_fetch_field(), maxdb_fetch_field_direct()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_fields($result) {}

	/**
	 * Returns the lengths of the columns of the current row in the result set
	 * <p>The <b>maxdb_fetch_lengths()</b> function returns an array containing the lengths of every column of the current row within the result set represented by the <code>result</code> parameter. If successful, a numerically indexed array representing the lengths of each column is returned or <b><code>FALSE</code></b> on failure.</p>
	 * @param resource $result
	 * @return array <p>An array of integers representing the size of each column (not including any terminating null characters). <b><code>FALSE</code></b> if an error occurred.</p><p><b>maxdb_fetch_lengths()</b> is valid only for the current row of the result set. It returns <b><code>FALSE</code></b> if you call it before calling maxdb_fetch_row/array/resource or after retrieving all rows in the result.</p>
	 * @link http://php.net/manual/en/function.maxdb-fetch-lengths.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_lengths($result): array {}

	/**
	 * Returns the current row of a result set as an object
	 * <p>The <b>maxdb_fetch_object()</b> will return the current row result set as an object where the attributes of the object represent the names of the fields found within the result set. If no more rows exist in the current result set, <b><code>NULL</code></b> is returned.</p>
	 * @param object $result
	 * @return object <p>Returns an object that corresponds to the fetched row or <b><code>NULL</code></b> if there are no more rows in resultset.</p><p><b>Note</b>: Field names returned by this function are <i>case-sensitive</i>.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p>
	 * @link http://php.net/manual/en/function.maxdb-fetch-object.php
	 * @see maxdb_fetch_array(), maxdb_fetch_assoc(), maxdb_fetch_row()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_object(object $result): object {}

	/**
	 * Get a result row as an enumerated array
	 * <p>Returns an array that corresponds to the fetched row, or <b><code>NULL</code></b> if there are no more rows.</p><p><b>maxdb_fetch_row()</b> fetches one row of data from the result set represented by <code>result</code> and returns it as an enumerated array, where each column is stored in an array offset starting from 0 (zero). Each subsequent call to the <b>maxdb_fetch_row()</b> function will return the next row within the result set, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @param resource $result
	 * @return mixed <p><b>maxdb_fetch_row()</b> returns an array that corresponds to the fetched row or <b><code>NULL</code></b> if there are no more rows in result set.</p><p><b>Note</b>: This function sets NULL fields to the PHP <b><code>NULL</code></b> value.</p>
	 * @link http://php.net/manual/en/function.maxdb-fetch-row.php
	 * @see maxdb_fetch_array(), maxdb_fetch_assoc()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_row($result) {}

	/**
	 * Returns the number of columns for the most recent query
	 * <p>Returns the number of columns for the most recent query on the connection represented by the <code>link</code> parameter. This function can be useful when using the <code>maxdb_store_result()</code> function to determine if the query should have produced a non-empty result set or not without knowing the nature of the query.</p>
	 * @param resource $link
	 * @return int <p>An integer representing the number of fields in a result set.</p>
	 * @link http://php.net/manual/en/function.maxdb-field-count.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_field_count($link): int {}

	/**
	 * Set result pointer to a specified field offset
	 * <p>Sets the field cursor to the given offset. The next call to <code>maxdb_fetch_field()</code> will retrieve the field definition of the column associated with that offset.</p><p><b>Note</b>:</p><p>To seek to the beginning of a row, pass an offset value of zero.</p>
	 * @param resource $result
	 * @param int $fieldnr
	 * @return bool <p><b>maxdb_field_seek()</b> returns previuos value of field cursor.</p>
	 * @link http://php.net/manual/en/function.maxdb-field-seek.php
	 * @see maxdb_fetch_field()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_field_seek($result, int $fieldnr): bool {}

	/**
	 * Get current field offset of a result pointer
	 * <p>Returns the position of the field cursor used for the last <code>maxdb_fetch_field()</code> call. This value can be used as an argument to <code>maxdb_field_seek()</code>.</p>
	 * @param resource $result
	 * @return int <p>Returns current offset of field cursor.</p>
	 * @link http://php.net/manual/en/function.maxdb-field-tell.php
	 * @see maxdb_fetch_field(), maxdb_field_seek()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_field_tell($result): int {}

	/**
	 * Frees the memory associated with a result
	 * <p>The <b>maxdb_free_result()</b> function frees the memory associated with the result represented by the <code>result</code> parameter, which was allocated by <code>maxdb_query()</code>, <code>maxdb_store_result()</code> or <code>maxdb_use_result()</code>.</p><p><b>Note</b>:</p><p>You should always free your result with <b>maxdb_free_result()</b>, when your result resource is not needed anymore.</p>
	 * @param resource $result
	 * @return void <p>This function doesn't return any value.</p>
	 * @link http://php.net/manual/en/function.maxdb-free-result.php
	 * @see maxdb_query(), maxdb_stmt_store_result(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_free_result($result): void {}

	/**
	 * Returns the MaxDB client version as a string
	 * <p>The <b>maxdb_get_client_info()</b> function is used to return a string representing the client version being used in the MaxDB extension.</p>
	 * @return string <p>A string that represents the MaxDB client library version</p>
	 * @link http://php.net/manual/en/function.maxdb-get-client-info.php
	 * @see maxdb_get_client_version(), maxdb_get_server_info(), maxdb_get_server_version()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_client_info(): string {}

	/**
	 * Get MaxDB client info
	 * <p>Returns client version number as an integer.</p>
	 * @return int <p>A number that represents the MaxDB client library version in format: <i>main_version&#42;10000 + minor_version &#42;100 + sub_version</i>. For example, 7.5.0 is returned as 70500.</p><p>This is useful to quickly determine the version of the client library to know if some capability exists.</p>
	 * @link http://php.net/manual/en/function.maxdb-get-client-version.php
	 * @see maxdb_get_client_info(), maxdb_get_server_info(), maxdb_get_server_version()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_client_version(): int {}

	/**
	 * Returns a string representing the type of connection used
	 * <p>The <b>maxdb_get_host_info()</b> function returns a string describing the connection represented by the <code>link</code> parameter is using.</p>
	 * @param resource $link
	 * @return string <p>A character string representing the server hostname and the connection type.</p>
	 * @link http://php.net/manual/en/function.maxdb-get-host-info.php
	 * @see maxdb_get_proto_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_host_info($link): string {}

	/**
	 * Alias of maxdb_stmt_result_metadata()
	 * <p>This function is an alias of: <code>maxdb_stmt_result_metadata()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @return resource
	 * @link http://php.net/manual/en/function.maxdb-get-metadata.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_get_metadata($stmt) {}

	/**
	 * Returns the version of the MaxDB protocol used
	 * <p>Returns an integer representing the MaxDB protocol version used by the connection represented by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @return int <p>Returns an integer representing the protocol version (constant 10).</p>
	 * @link http://php.net/manual/en/function.maxdb-get-proto-info.php
	 * @see maxdb_get_host_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_proto_info($link): int {}

	/**
	 * Returns the version of the MaxDB server
	 * <p>Returns a string representing the version of the MaxDB server that the MaxDB extension is connected to (represented by the <code>link</code> parameter).</p>
	 * @param resource $link
	 * @return string <p>A character string representing the server version.</p>
	 * @link http://php.net/manual/en/function.maxdb-get-server-info.php
	 * @see maxdb_get_client_info(), maxdb_get_client_version(), maxdb_get_server_version()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_server_info($link): string {}

	/**
	 * Returns the version of the MaxDB server as an integer
	 * <p>The <b>maxdb_get_server_version()</b> function returns the version of the server connected to (represented by the <code>link</code> parameter) as an integer.</p><p>The form of this version number is <i>main_version &#42; 10000 + minor_version &#42; 100 + sub_version</i> (i.e. version 7.5.0 is 70500).</p>
	 * @param resource $link
	 * @return int <p>An integer representing the server version.</p>
	 * @link http://php.net/manual/en/function.maxdb-get-server-version.php
	 * @see maxdb_get_client_info(), maxdb_get_client_version(), maxdb_get_server_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_server_version($link): int {}

	/**
	 * Retrieves information about the most recently executed query
	 * <p>The <b>maxdb_info()</b> function returns a string providing information about the last query executed. The nature of this string is provided below:</p><p></p><p><b>Note</b>:</p><p>Queries which do not fall into one of the above formats are not supported. In these situations, <b>maxdb_info()</b> will return an empty string.</p>
	 * @param resource $link
	 * @return string <p>A character string representing additional information about the most recently executed query.</p>
	 * @link http://php.net/manual/en/function.maxdb-info.php
	 * @see maxdb_affected_rows(), maxdb_warning_count(), maxdb_num_rows()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_info($link): string {}

	/**
	 * Initializes MaxDB and returns an resource for use with maxdb_real_connect
	 * <p>Allocates or initializes a MaxDB resource suitable for <code>maxdb_options()</code> and <code>maxdb_real_connect()</code>.</p><p><b>Note</b>:</p><p>Any subsequent calls to any maxdb function (except <code>maxdb_options()</code>) will fail until <code>maxdb_real_connect()</code> was called.</p>
	 * @return resource <p>Returns an resource.</p>
	 * @link http://php.net/manual/en/function.maxdb-init.php
	 * @see maxdb_options(), maxdb_close(), maxdb_real_connect(), maxdb_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_init() {}

	/**
	 * Returns the auto generated id used in the last query
	 * <p>The <b>maxdb_insert_id()</b> function returns the ID generated by a query on a table with a column having the DEFAULT SERIAL attribute. If the last query wasn't an INSERT or UPDATE statement or if the modified table does not have a column with the DEFAULT SERIAL attribute, this function will return zero.</p>
	 * @param resource $link
	 * @return mixed <p>The value of the <i>DEFAULT SERIAL</i> field that was updated by the previous query. Returns zero if there was no previous query on the connection or if the query did not update an <i>DEFAULT_SERIAL</i> value.</p><p><b>Note</b>:</p><p>If the number is greater than maximal int value, <b>maxdb_insert_id()</b> will return a string.</p>
	 * @link http://php.net/manual/en/function.maxdb-insert-id.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_insert_id($link) {}

	/**
	 * Disconnects from a MaxDB server
	 * <p>This function is used to disconnect from a MaxDB server specified by the <code>processid</code> parameter.</p>
	 * @param resource $link
	 * @param int $processid
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-kill.php
	 * @see maxdb_thread_id()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_kill($link, int $processid): bool {}

	/**
	 * Enforce execution of a query on the master in a master/slave setup
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-master-query.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_master_query($link, string $query): bool {}

	/**
	 * Check if there any more query results from a multi query
	 * <p><b>maxdb_more_results()</b> indicates if one or more result sets are available from a previous call to <code>maxdb_multi_query()</code>.</p>
	 * @param resource $link
	 * @return bool <p>Always <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.maxdb-more-results.php
	 * @see maxdb_multi_query(), maxdb_next_result(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_more_results($link): bool {}

	/**
	 * Performs a query on the database
	 * <p>The <b>maxdb_multi_query()</b> works like the function <code>maxdb_query()</code>. Multiple queries are not yet supported.</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-multi-query.php
	 * @see maxdb_use_result(), maxdb_store_result(), maxdb_next_result(), maxdb_more_results()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_multi_query($link, string $query): bool {}

	/**
	 * Prepare next result from multi_query
	 * <p>Since multiple queries are not yet supported, <b>maxdb_next_result()</b> returns always <b><code>FALSE</code></b>.</p>
	 * @param resource $link
	 * @return bool <p>Returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.maxdb-next-result.php
	 * @see maxdb_multi_query(), maxdb_more_results(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_next_result($link): bool {}

	/**
	 * Get the number of fields in a result
	 * <p><b>maxdb_num_fields()</b> returns the number of fields from specified result set.</p>
	 * @param resource $result
	 * @return int <p>The number of fields from a result set</p>
	 * @link http://php.net/manual/en/function.maxdb-num-fields.php
	 * @see maxdb_fetch_field()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_num_fields($result): int {}

	/**
	 * Gets the number of rows in a result
	 * <p>Returns the number of rows in the result set.</p><p>The use of <b>maxdb_num_rows()</b> depends on whether you use buffered or unbuffered result sets. In case you use unbuffered resultsets <b>maxdb_num_rows()</b> will not correct the correct number of rows until all the rows in the result have been retrieved.</p>
	 * @param resource $result
	 * @return int <p>Returns number of rows in the result set.</p><p><b>Note</b>:</p><p>If the number of rows is greater than maximal int value, the number will be returned as a string.</p>
	 * @link http://php.net/manual/en/function.maxdb-num-rows.php
	 * @see maxdb_affected_rows(), maxdb_store_result(), maxdb_use_result(), maxdb_query()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_num_rows($result): int {}

	/**
	 * Set options
	 * <p><b>maxdb_options()</b> can be used to set extra connect options and affect behavior for a connection.</p><p>This function may be called multiple times to set several options.</p><p><b>maxdb_options()</b> should be called after <code>maxdb_init()</code> and before <code>maxdb_real_connect()</code>.</p><p>The parameter <code>option</code> is the option that you want to set, the <code>value</code> is the value for the option. For detailed description of the options see http://maxdb.sap.com/documentation/ The parameter <code>option</code> can be one of the following values:</p>
	 * @param resource $link
	 * @param int $option
	 * @param mixed $value
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-options.php
	 * @see maxdb_init(), maxdb_real_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_options($link, int $option, $value): bool {}

	/**
	 * Alias of maxdb_stmt_param_count()
	 * <p>This function is an alias of: <code>maxdb_stmt_param_count()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @return int
	 * @link http://php.net/manual/en/function.maxdb-param-count.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_param_count($stmt): int {}

	/**
	 * Pings a server connection, or tries to reconnect if the connection has gone down
	 * <p>Checks whether the connection to the server is working. If it has gone down, and global option <i>maxdb.reconnect</i> is enabled an automatic reconnection is attempted.</p><p>This function can be used by clients that remain idle for a long while, to check whether the server has closed the connection and reconnect if necessary.</p>
	 * @param resource $link
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-ping.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_ping($link): bool {}

	/**
	 * Prepare an SQL statement for execution
	 * <p><b>maxdb_prepare()</b> prepares the SQL query pointed to by the null-terminated string query, and returns a statement handle to be used for further operations on the statement. The query must consist of a single SQL statement.</p><p><b>Note</b>:</p><p>You should not add a terminating semicolon or <i>\g</i> to the statement.</p><p>The parameter <code>query</code> can include one or more parameter markers in the SQL statement by embedding question mark (<i>&#63;</i>) characters at the appropriate positions.</p><p><b>Note</b>:</p><p>The markers are legal only in certain places in SQL statements. For example, they are allowed in the VALUES() list of an INSERT statement (to specify column values for a row), or in a comparison with a column in a WHERE clause to specify a comparison value.</p><p>However, they are not allowed for identifiers (such as table or column names), in the select list that names the columns to be returned by a SELECT statement), or to specify both operands of a binary operator such as the <i>=</i> equal sign. The latter restriction is necessary because it would be impossible to determine the parameter type. In general, parameters are legal only in Data Manipulation Languange (DML) statements, and not in Data Defination Language (DDL) statements.</p><p>The parameter markers must be bound to application variables using <code>maxdb_stmt_bind_param()</code> and/or <code>maxdb_stmt_bind_result()</code> before executing the statement or fetching rows.</p>
	 * @param resource $link
	 * @param string $query
	 * @return resource <p><b>maxdb_prepare()</b> returns a statement resource or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-prepare.php
	 * @see maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_stmt_bind_param(), maxdb_stmt_bind_result(), maxdb_stmt_close()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_prepare($link, string $query) {}

	/**
	 * Performs a query on the database
	 * <p>The <b>maxdb_query()</b> function is used to simplify the act of performing a query against the database represented by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @param string $query
	 * @param int $resultmode
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. For <i>SELECT, SHOW, DESCRIBE</i> or <i>EXPLAIN</i> <b>maxdb_query()</b> will return a result resource.</p>
	 * @link http://php.net/manual/en/function.maxdb-query.php
	 * @see maxdb_real_query(), maxdb_multi_query(), maxdb_free_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_query($link, string $query, int $resultmode = NULL) {}

	/**
	 * Opens a connection to a MaxDB server
	 * <p><b>maxdb_real_connect()</b> attempts to establish a connection to a MaxDB database engine running on <code>hostname</code>.</p><p>This function differs from <code>maxdb_connect()</code>:</p><p><b>maxdb_real_connect()</b> needs a valid resource which has to be created by function <code>maxdb_init()</code></p><p>With function <code>maxdb_options()</code> you can set various options for connection.</p>
	 * @param resource $link
	 * @param string $hostname
	 * @param string $username
	 * @param string $passwd
	 * @param string $dbname
	 * @param int $port
	 * @param string $socket
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-real-connect.php
	 * @see maxdb_connect(), maxdb_init(), maxdb_options(), maxdb_ssl_set(), maxdb_close()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_real_connect($link, string $hostname = NULL, string $username = NULL, string $passwd = NULL, string $dbname = NULL, int $port = 0, string $socket = NULL): bool {}

	/**
	 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
	 * <p>This function is used to create a legal SQL string that you can use in an SQL statement. The string <i>escapestr</i> is encoded to an escaped SQL string, taking into account the current character set of the connection.</p><p>Characters encoded are <i>', "</i>.</p>
	 * @param resource $link
	 * @param string $escapestr
	 * @return string <p>Returns an escaped string.</p>
	 * @link http://php.net/manual/en/function.maxdb-real-escape-string.php
	 * @see maxdb_character_set_name()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_real_escape_string($link, string $escapestr): string {}

	/**
	 * Execute an SQL query
	 * <p>The <b>maxdb_real_query()</b> is functionally identical with the <code>maxdb_query()</code>.</p><p><b>Note</b>:</p><p>In order to determine if a given query should return a result set or not, see <code>maxdb_field_count()</code>.</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-real-query.php
	 * @see maxdb_query(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_real_query($link, string $query): bool {}

	/**
	 * Enables or disables internal report functions
	 * @param int $flags <p>One of the <i>MAXDB_REPORT_XXX</i> constants.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-report.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_report(int $flags): bool {}

	/**
	 * Rolls back current transaction
	 * <p>Rollbacks the current transaction for the database specified by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-rollback.php
	 * @see maxdb_commit(), maxdb_autocommit()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rollback($link): bool {}

	/**
	 * Check if RPL parse is enabled
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return int
	 * @link http://php.net/manual/en/function.maxdb-rpl-parse-enabled.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rpl_parse_enabled($link): int {}

	/**
	 * RPL probe
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-rpl-probe.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rpl_probe($link): bool {}

	/**
	 * Returns RPL query type
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return int
	 * @link http://php.net/manual/en/function.maxdb-rpl-query-type.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rpl_query_type($link): int {}

	/**
	 * Selects the default database for database queries
	 * <p>The <b>maxdb_select_db()</b> function selects the default database (specified by the <code>dbname</code> parameter) to be used when performing queries against the database connection represented by the <code>link</code> parameter.</p><p><b>Note</b>:</p><p>This function should only be used to change the default database for the connection. You can select the default database with 4th parameter in <code>maxdb_connect()</code>.</p>
	 * @param resource $link
	 * @param string $dbname
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-select-db.php
	 * @see maxdb_connect(), maxdb_real_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_select_db($link, string $dbname): bool {}

	/**
	 * Alias of maxdb_stmt_send_long_data()
	 * <p>This function is an alias of: <code>maxdb_stmt_send_long_data()</code>.</p><p>This function alias is deprecated and only exists for backwards compatibility reasons. The use of this function is not recommended, as it may be removed from PHP in the future.</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @param string $data
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-send-long-data.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_send_long_data($stmt, int $param_nr, string $data): bool {}

	/**
	 * Send the query and return
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-send-query.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_send_query($link, string $query): bool {}

	/**
	 * Shut down the embedded server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.maxdb-server-end.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_server_end(): void {}

	/**
	 * Initialize embedded server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param array $server
	 * @param array $groups
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-server-init.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_server_init(array $server = NULL, array $groups = NULL): bool {}

	/**
	 * Alias of maxdb_options()
	 * <p>This function is an alias of: <code>maxdb_options()</code>.</p>
	 * @param resource $link
	 * @param int $option
	 * @param mixed $value
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-set-opt.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_set_opt($link, int $option, $value): bool {}

	/**
	 * Returns the SQLSTATE error from previous MaxDB operation
	 * <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <i>'00000'</i> means no error. The values are specified by ANSI SQL and ODBC.</p><p><b>Note</b>:</p><p>Note that not all MaxDB errors are yet mapped to SQLSTATE's. The value <i>HY000</i> (general error) is used for unmapped errors.</p>
	 * @param resource $link
	 * @return string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <i>'00000'</i> means no error.</p>
	 * @link http://php.net/manual/en/function.maxdb-sqlstate.php
	 * @see maxdb_errno(), maxdb_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_sqlstate($link): string {}

	/**
	 * Used for establishing secure connections using SSL
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param string $key
	 * @param string $cert
	 * @param string $ca
	 * @param string $capath
	 * @param string $cipher
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-ssl-set.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_ssl_set($link, string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

	/**
	 * Gets the current system status
	 * <p><b>maxdb_stat()</b> returns a string containing several information about the MaxDB server running.</p>
	 * @param resource $link
	 * @return string <p>A string describing the server status. <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-stat.php
	 * @see maxdb_get_server_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stat($link): string {}

	/**
	 * Returns the total number of rows changed, deleted, or inserted by the last executed statement
	 * <p><b>maxdb_stmt_affected_rows()</b> returns the number of rows affected by INSERT, UPDATE, or DELETE query. If the last query was invalid or the number of rows can not determined, this function will return -1.</p>
	 * @param resource $stmt
	 * @return int <p>An integer greater than zero indicates the number of rows affected or retrieved. Zero indicates that no records where updated for an UPDATE/DELETE statement, no rows matched the WHERE clause in the query or that no query has yet been executed. -1 indicates that the query has returned an error or the number of rows can not determined.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-affected-rows.php
	 * @see maxdb_stmt_num_rows(), maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_affected_rows($stmt): int {}

	/**
	 * Binds variables to a prepared statement as parameters
	 * <p><b>maxdb_stmt_bind_param()</b> is used to bind variables for the parameter markers in the SQL statement that was passed to <code>maxdb_prepare()</code>. The string <code>types</code> contains one or more characters which specify the types for the corresponding bind variables.</p><p>The extended syntax of <b>maxdb_stmt_bind_param()</b> allows to give the parameters as an array instead of a variable list of PHP variables to the function. If the array variable has not been used before calling <b>maxdb_stmt_bind_param()</b>, it has to be initialized as an emtpy array. See the examples how to use <b>maxdb_stmt_bind_param()</b> with extended syntax.</p><p>Variables for SELECT INTO SQL statements can also be bound using <b>maxdb_stmt_bind_param()</b>. Parameters for database procedures can be bound using <b>maxdb_stmt_bind_param()</b>. See the examples how to use <b>maxdb_stmt_bind_param()</b> in this cases.</p><p>If a variable bound as INTO variable to an SQL statement was used before, the content of this variable is overwritten by the data of the SELECT INTO statement. A reference to this variable will be invalid after a call to <b>maxdb_stmt_bind_param()</b>.</p><p>For INOUT parameters of database procedures the content of the bound INOUT variable is overwritten by the output value of the database procedure. A reference to this variable will be invalid after a call to <b>maxdb_stmt_bind_param()</b>.</p><p></p>
	 * @param resource $stmt
	 * @param string $types
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-bind-param.php
	 * @see maxdb_stmt_bind_result(), maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_prepare(), maxdb_stmt_send_long_data(), maxdb_stmt_errno(), maxdb_stmt_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_bind_param($stmt, string $types, &$var1, &$_ = NULL): bool {}

	/**
	 * Binds variables to a prepared statement for result storage
	 * <p><b>maxdb_stmt_bind_result()</b> is used to associate (bind) columns in the result set to variables. When <code>maxdb_stmt_fetch()</code> is called to fetch data, the MaxDB client/server protocol places the data for the bound columns into the specified variables <code>var1, ...</code>.</p><p><b>Note</b>:</p><p>Note that all columns must be bound prior to calling <code>maxdb_stmt_fetch()</code>. Depending on column types bound variables can silently change to the corresponding PHP type.</p><p>A column can be bound or rebound at any time, even after a result set has been partially retrieved. The new binding takes effect the next time <code>maxdb_stmt_fetch()</code> is called.</p>
	 * @param resource $stmt
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-bind-result.php
	 * @see maxdb_stmt_bind_param(), maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_prepare(), maxdb_stmt_prepare(), maxdb_stmt_init(), maxdb_stmt_errno(), maxdb_stmt_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_bind_result($stmt, &$var1, &$_ = NULL): bool {}

	/**
	 * Closes a prepared statement
	 * <p>Closes a prepared statement. <b>maxdb_stmt_close()</b> also deallocates the statement handle pointed to by <code>stmt</code>. If the current statement has pending or unread results, this function cancels them so that the next query can be executed.</p>
	 * @param resource $stmt
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-close.php
	 * @see maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_close($stmt): bool {}

	/**
	 * Ends a sequence of maxdb_stmt_send_long_data()
	 * <p>This function has to be called after a sequence of <code>maxdb_stmt_send_long_data()</code>, that was started after <code>maxdb_execute()</code>.</p><p><code>param_nr</code> indicates which parameter to associate the end of data with. Parameters are numbered beginning with 0.</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-close-long-data.php
	 * @see maxdb_prepare(), maxdb_stmt_bind_param()
	 * @since PECL maxdb 1.0
	 */
	function maxdb_stmt_close_long_data($stmt, int $param_nr): bool {}

	/**
	 * Seeks to an arbitray row in statement result set
	 * <p>The <b>maxdb_stmt_data_seek()</b> function seeks to an arbitrary result pointer specified by the <code>offset</code> in the statement result set represented by <code>statement</code>. The <code>offset</code> parameter must be between zero and the total number of rows minus one (0..<code>maxdb_stmt_num_rows()</code> - 1).</p>
	 * @param resource $statement
	 * @param int $offset
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-data-seek.php
	 * @see maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_data_seek($statement, int $offset): bool {}

	/**
	 * Returns the error code for the most recent statement call
	 * <p>For the statement specified by <i>stmt</i>, <b>maxdb_stmt_errno()</b> returns the error code for the most recently invoked statement function that can succeed or fail.</p><p><b>Note</b>:</p><p>For possible error codes see documentation of SQLDBC: http://maxdb.sap.com/documentation/.</p>
	 * @param resource $stmt
	 * @return int <p>An error code value. Zero means no error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-errno.php
	 * @see maxdb_stmt_error(), maxdb_stmt_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_errno($stmt): int {}

	/**
	 * Returns a string description for last statement error
	 * <p>For the statement specified by <i>stmt</i>, <b>maxdb_stmt_error()</b> returns a containing the error message for the most recently invoked statement function that can succeed or fail.</p>
	 * @param resource $stmt
	 * @return string <p>A string that describes the error. An empty string if no error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-error.php
	 * @see maxdb_stmt_errno(), maxdb_stmt_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_error($stmt): string {}

	/**
	 * Executes a prepared Query
	 * <p>The <b>maxdb_stmt_execute()</b> function executes a query that has been previously prepared using the <code>maxdb_prepare()</code> function represented by the <code>stmt</code> resource. When executed any parameter markers which exist will automatically be replaced with the appropiate data.</p><p>If the statement is UPDATE, DELETE, or INSERT, the total number of affected rows can be determined by using the <code>maxdb_stmt_affected_rows()</code> function. Likewise, if the query yields a result set the <code>maxdb_fetch()</code> function is used.</p><p><b>Note</b>:</p><p>When using <b>maxdb_stmt_execute()</b>, the <code>maxdb_fetch()</code> function must be used to fetch the data prior to preforming any additional queries.</p>
	 * @param resource $stmt
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-execute.php
	 * @see maxdb_prepare(), maxdb_stmt_bind_param()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_execute($stmt): bool {}

	/**
	 * Fetch results from a prepared statement into the bound variables
	 * <p><b>maxdb_stmt_fetch()</b> returns row data using the variables bound by <code>maxdb_stmt_bind_result()</code>.</p><p><b>Note</b>:</p><p>Note that all columns must be bound by the application before calling <b>maxdb_stmt_fetch()</b>.</p>
	 * @param resource $stmt
	 * @return bool <b>Return values</b>   Value Description     <b><code>TRUE</code></b> Success. Data has been fetched   <b><code>FALSE</code></b> Error occurred   <b><code>NULL</code></b> No more rows/data exists
	 * @link http://php.net/manual/en/function.maxdb-stmt-fetch.php
	 * @see maxdb_prepare(), maxdb_stmt_errno(), maxdb_stmt_error(), maxdb_stmt_bind_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_fetch($stmt): bool {}

	/**
	 * Frees stored result memory for the given statement handle
	 * <p>The <b>maxdb_stmt_free_result()</b> function frees the result memory associated with the statement represented by the <code>stmt</code> parameter, which was allocated by <code>maxdb_stmt_store_result()</code>.</p>
	 * @param resource $stmt
	 * @return void <p>This function doesn't return any value.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-free-result.php
	 * @see maxdb_stmt_store_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_free_result($stmt): void {}

	/**
	 * Initializes a statement and returns an resource for use with maxdb_stmt_prepare
	 * <p>Allocates and initializes a statement resource suitable for <code>maxdb_stmt_prepare()</code>.</p><p><b>Note</b>:</p><p>Any subsequent calls to any maxdb_stmt function will fail until <code>maxdb_stmt_prepare()</code> was called.</p>
	 * @param resource $link
	 * @return resource <p>Returns an resource.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-init.php
	 * @see maxdb_stmt_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_init($link) {}

	/**
	 * Return the number of rows in statements result set
	 * <p>Returns the number of rows in the result set.</p>
	 * @param resource $stmt
	 * @return int <p>An integer representing the number of rows in result set.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-num-rows.php
	 * @see maxdb_stmt_affected_rows(), maxdb_prepare(), maxdb_stmt_store_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_num_rows($stmt): int {}

	/**
	 * Returns the number of parameter for the given statement
	 * <p><b>maxdb_stmt_param_count()</b> returns the number of parameter markers present in the prepared statement.</p>
	 * @param resource $stmt
	 * @return int <p>returns an integer representing the number of parameters.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-param-count.php
	 * @see maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_param_count($stmt): int {}

	/**
	 * Prepare an SQL statement for execution
	 * <p><b>maxdb_stmt_prepare()</b> prepares the SQL query pointed to by the null-terminated string query. The statement resource has to be allocated by <code>maxdb_stmt_init()</code>. The query must consist of a single SQL statement.</p><p><b>Note</b>:</p><p>You should not add a terminating semicolon or <i>\g</i> to the statement.</p><p>The parameter <code>query</code> can include one or more parameter markers in the SQL statement by embedding question mark (<i>&#63;</i>) characters at the appropriate positions.</p><p><b>Note</b>:</p><p>The markers are legal only in certain places in SQL statements. For example, they are allowed in the VALUES() list of an INSERT statement (to specify column values for a row), or in a comparison with a column in a WHERE clause to specify a comparison value.</p><p>However, they are not allowed for identifiers (such as table or column names), in the select list that names the columns to be returned by a SELECT statement), or to specify both operands of a binary operator such as the <i>=</i> equal sign. The latter restriction is necessary because it would be impossible to determine the parameter type. In general, parameters are legal only in Data Manipulation Languange (DML) statements, and not in Data Defination Language (DDL) statements.</p><p>The parameter markers must be bound to application variables using <code>maxdb_stmt_bind_param()</code> and/or <code>maxdb_stmt_bind_result()</code> before executing the statement or fetching rows.</p>
	 * @param resource $stmt
	 * @param string $query
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-prepare.php
	 * @see maxdb_stmt_init(), maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_stmt_bind_param(), maxdb_stmt_bind_result(), maxdb_stmt_close()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_prepare($stmt, string $query): bool {}

	/**
	 * Resets a prepared statement
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $stmt
	 * @return bool
	 * @link http://php.net/manual/en/function.maxdb-stmt-reset.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_reset($stmt): bool {}

	/**
	 * Returns result set metadata from a prepared statement
	 * <p>If a statement passed to <code>maxdb_prepare()</code> is one that produces a result set, <b>maxdb_stmt_result_metadata()</b> returns the result resource that can be used to process the meta information such as total number of fields and individual field information.</p><p><b>Note</b>:</p><p>This result set pointer can be passed as an argument to any of the field-based functions that process result set metadata, such as:</p><p><code>maxdb_num_fields()</code></p><p><code>maxdb_fetch_field()</code></p><p><code>maxdb_fetch_field_direct()</code></p><p><code>maxdb_fetch_fields()</code></p><p><code>maxdb_field_count()</code></p><p><code>maxdb_field_seek()</code></p><p><code>maxdb_field_tell()</code></p><p><code>maxdb_free_result()</code></p><p>The result set structure should be freed when you are done with it, which you can do by passing it to <code>maxdb_free_result()</code></p><p><b>Note</b>:</p><p>The result set returned by <b>maxdb_stmt_result_metadata()</b> contains only metadata. It does not contain any row results. The rows are obtained by using the statement handle with <code>maxdb_fetch()</code>.</p>
	 * @param resource $stmt
	 * @return resource <p><b>maxdb_stmt_result_metadata()</b> returns a result resource or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-result-metadata.php
	 * @see maxdb_prepare(), maxdb_free_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_result_metadata($stmt) {}

	/**
	 * Send data in blocks
	 * <p>Allows to send parameter data to the server in pieces (or chunks). This function can be called multiple times to send the parts of a character or binary data value for a column, which must be one of the TEXT or BLOB datatypes.</p><p><code>param_nr</code> indicates which parameter to associate the data with. Parameters are numbered beginning with 0. <code>data</code> is a string containing data to be sent.</p><p><b>Note</b>:</p><p>For efficiency reasons, this function should be used after calling <code>maxdb_execute()</code>. In this case, the data is not stored on the client side. The end of the sequence must end with a call to <code>maxdb_stmt_close_long_data()</code>.</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @param string $data
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-send-long-data.php
	 * @see maxdb_prepare(), maxdb_stmt_bind_param()
	 * @since PECL maxdb 1.0
	 */
	function maxdb_stmt_send_long_data($stmt, int $param_nr, string $data): bool {}

	/**
	 * Returns SQLSTATE error from previous statement operation
	 * <p>Returns a string containing the SQLSTATE error code for the most recently invoked prepared statement function that can succeed or fail. The error code consists of five characters. <i>'00000'</i> means no error. The values are specified by ANSI SQL and ODBC.</p><p><b>Note</b>:</p><p>Note that not all MaxDB errors are yet mapped to SQLSTATE's. The value <i>HY000</i> (general error) is used for unmapped errors.</p>
	 * @param resource $stmt
	 * @return string <p>Returns a string containing the SQLSTATE error code for the last error. The error code consists of five characters. <i>'00000'</i> means no error.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-sqlstate.php
	 * @see maxdb_stmt_errno(), maxdb_stmt_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_sqlstate($stmt): string {}

	/**
	 * Transfers a result set from a prepared statement
	 * <p><b>maxdb_stmt_store_result()</b> has no functionally effect and should not be used for retrieving data from MaxDB server.</p>
	 * @param resource $stmt
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-stmt-store-result.php
	 * @see maxdb_prepare(), maxdb_stmt_result_metadata(), maxdb_fetch()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_store_result($stmt): bool {}

	/**
	 * Transfers a result set from the last query
	 * <p>This function has no functionally effect.</p>
	 * @param resource $link
	 * @return resource <p>Returns a result resource or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.maxdb-store-result.php
	 * @see maxdb_real_query(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_store_result($link) {}

	/**
	 * Returns the thread ID for the current connection
	 * <p>The <b>maxdb_thread_id()</b> function returns the thread ID for the current connection which can then be killed using the <code>maxdb_kill()</code> function. If the connection is lost and you reconnect with <code>maxdb_ping()</code>, the thread ID will be other. Therefore you should get the thread ID only when you need it.</p><p><b>Note</b>:</p><p>The thread ID is assigned on a connection-by-connection basis. Hence, if the connection is broken and then re-established a new thread ID will be assigned.</p>
	 * @param resource $link
	 * @return int <p><b>maxdb_thread_id()</b> returns the Thread ID for the current connection.</p>
	 * @link http://php.net/manual/en/function.maxdb-thread-id.php
	 * @see maxdb_kill()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_thread_id($link): int {}

	/**
	 * Returns whether thread safety is given or not
	 * <p><b>maxdb_thread_safe()</b> indicates whether the client library is compiled as thread-safe.</p>
	 * @return bool <p><b><code>TRUE</code></b> if the client library is thread-safe, otherwise <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.maxdb-thread-safe.php
	 * @since PECL maxdb >= 7.6.06.04
	 */
	function maxdb_thread_safe(): bool {}

	/**
	 * Initiate a result set retrieval
	 * <p><b>maxdb_use_result()</b> has no effect.</p>
	 * @param resource $link
	 * @return resource <p>Returns result or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.maxdb-use-result.php
	 * @see maxdb_real_query(), maxdb_store_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_use_result($link) {}

	/**
	 * Returns the number of warnings from the last query for the given link
	 * <p><b>maxdb_warning_count()</b> returns the number of warnings from the last query in the connection represented by the <code>link</code> parameter.</p>
	 * @param resource $link
	 * @return int <p>Number of warnings or zero if there are no warnings.</p>
	 * @link http://php.net/manual/en/function.maxdb-warning-count.php
	 * @see maxdb_errno(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_warning_count($link): int {}

	/**
	 * The application to be connected to the database.
	 */
	define('MAXDB_APPLICATION', null);

	/**
	 * The version of the application.
	 */
	define('MAXDB_APPVERSION', null);

	/**
	 * Columns are returned into the array having the fieldname as the array index.
	 */
	define('MAXDB_ASSOC', null);

	/**
	 * Columns are returned into the array having the lower case fieldname as the array index.
	 */
	define('MAXDB_ASSOC_LOWER', null);

	/**
	 * Columns are returned into the array having the upper case fieldname as the array index.
	 */
	define('MAXDB_ASSOC_UPPER', null);

	/**
	 * Columns are returned into the array having both a numerical index and the fieldname as the array index.
	 */
	define('MAXDB_BOTH', null);

	/**
	 * The component name used to initialise the SQLDBC runtime environment.
	 */
	define('MAXDB_COMPNAME', null);

	/**
	 * The prefix to use for result tables that are automatically named.
	 */
	define('MAXDB_CURSORPREFIX', null);

	/**
	 * Specifies whether and how shared locks and exclusive locks are implicitly requested or released.
	 */
	define('MAXDB_ISOLATIONLEVEL', null);

	/**
	 * Columns are returned into the array having a numerical index to the fields. This index starts with 0, the first field in the result.
	 */
	define('MAXDB_NUM', null);

	/**
	 * The number of different request packets used for the connection.
	 */
	define('MAXDB_PACKETCOUNT', null);

	/**
	 * The SQL mode.
	 */
	define('MAXDB_SQLMODE', null);

	/**
	 * The number of prepared statements to be cached for the connection for re-use.
	 */
	define('MAXDB_STATEMENTCACHESIZE', null);

	/**
	 * The maximum allowed time of inactivity after which the connection to the database is closed by the system.
	 */
	define('MAXDB_TIMEOUT', null);

	/**
	 * <b><code>TRUE</code></b>, if the connection is an unicode (UCS2) client or <b><code>FALSE</code></b>, if not.
	 */
	define('MAXDB_UNICODE', null);

}
