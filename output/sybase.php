<?php



namespace {

	/**
	 * Gets number of affected rows in last query
	 * <p><b>sybase_affected_rows()</b> returns the number of rows affected by the last INSERT, UPDATE or DELETE query on the server associated with the specified link identifier.</p><p>This command is not effective for SELECT statements, only on statements which modify records. To retrieve the number of rows returned from a SELECT, use <code>sybase_num_rows()</code>.</p>
	 * @param resource $link_identifier <p>If the link identifier isn't specified, the last opened link is assumed.</p>
	 * @return int <p>Returns the number of affected rows, as an integer.</p>
	 * @link http://php.net/manual/en/function.sybase-affected-rows.php
	 * @see sybase_num_rows()
	 * @since PHP 4, PHP 5
	 */
	function sybase_affected_rows($link_identifier = NULL): int {}

	/**
	 * Closes a Sybase connection
	 * <p><b>sybase_close()</b> closes the link to a Sybase database that's associated with the specified link <code>link_identifier</code>.</p><p>Note that this isn't usually necessary, as non-persistent open links are automatically closed at the end of the script's execution.</p><p><b>sybase_close()</b> will not close persistent links generated by <code>sybase_pconnect()</code>.</p>
	 * @param resource $link_identifier <p>If the link identifier isn't specified, the last opened link is assumed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-close.php
	 * @see sybase_connect(), sybase_pconnect()
	 * @since PHP 4, PHP 5
	 */
	function sybase_close($link_identifier = NULL): bool {}

	/**
	 * Opens a Sybase server connection
	 * <p><b>sybase_connect()</b> establishes a connection to a Sybase server.</p><p>In case a second call is made to <b>sybase_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned.</p><p>The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling <code>sybase_close()</code>.</p>
	 * @param string $servername <p>The servername argument has to be a valid servername that is defined in the 'interfaces' file.</p>
	 * @param string $username <p>Sybase user name</p>
	 * @param string $password <p>Password associated with <code>username</code>.</p>
	 * @param string $charset <p>Specifies the charset for the connection</p>
	 * @param string $appname <p>Specifies an <i>appname</i> for the Sybase connection. This allow you to make separate connections in the same script to the same database. This may come handy when you have started a transaction in your current connection, and you need to be able to do a separate query which cannot be performed inside this transaction.</p>
	 * @param bool $new <p>Whether to open a new connection or use the existing one.</p>
	 * @return resource <p>Returns a positive Sybase link identifier on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-connect.php
	 * @see sybase_pconnect(), sybase_close()
	 * @since PHP 4, PHP 5
	 */
	function sybase_connect(string $servername = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, string $appname = NULL, bool $new = FALSE) {}

	/**
	 * Moves internal row pointer
	 * <p><b>sybase_data_seek()</b> moves the internal row pointer of the Sybase result associated with the specified result identifier to pointer to the specified row number. The next call to <code>sybase_fetch_row()</code> would return that row.</p>
	 * @param resource $result_identifier
	 * @param int $row_number
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-data-seek.php
	 * @see sybase_fetch_row()
	 * @since PHP 4, PHP 5
	 */
	function sybase_data_seek($result_identifier, int $row_number): bool {}

	/**
	 * Sets the deadlock retry count
	 * <p>Using <b>sybase_deadlock_retry_count()</b>, the number of retries can be defined in cases of deadlocks. By default, every deadlock is retried an infinite number of times or until the process is killed by Sybase, the executing script is killed (for instance, by <code>set_time_limit()</code>) or the query succeeds.</p>
	 * @param int $retry_count <p></p> <b>Values for retry_count</b>   -1 Retry forever (default)   0 Do not retry   n Retry n times
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sybase-deadlock-retry-count.php
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_deadlock_retry_count(int $retry_count): void {}

	/**
	 * Fetch row as array
	 * <p><b>sybase_fetch_array()</b> is an extended version of <code>sybase_fetch_row()</code>. In addition to storing the data in the numeric indices of the result array, it also stores the data in associative indices, using the field names as keys.</p><p>An important thing to note is that using <b>sybase_fetch_array()</b> is NOT significantly slower than using <code>sybase_fetch_row()</code>, while it provides a significant added value.</p>
	 * @param resource $result
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p><p><b>Note</b>:</p><p>When selecting fields with identical names (for instance, in a join), the associative indices will have a sequential number prepended. See the example for details.</p>
	 * @link http://php.net/manual/en/function.sybase-fetch-array.php
	 * @see sybase_fetch_row(), sybase_fetch_assoc(), sybase_fetch_object()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_array($result): array {}

	/**
	 * Fetch a result row as an associative array
	 * <p><b>sybase_fetch_assoc()</b> is a version of <code>sybase_fetch_row()</code> that uses column names instead of integers for indices in the result array. Columns from different tables with the same names are returned as name, name1, name2, ..., nameN.</p><p>An important thing to note is that using <b>sybase_fetch_assoc()</b> is NOT significantly slower than using <code>sybase_fetch_row()</code>, while it provides a significant added value.</p>
	 * @param resource $result
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.sybase-fetch-assoc.php
	 * @see sybase_fetch_row(), sybase_fetch_array(), sybase_fetch_object()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_fetch_assoc($result): array {}

	/**
	 * Get field information from a result
	 * <p><b>sybase_fetch_field()</b> can be used in order to obtain information about fields in a certain query result.</p>
	 * @param resource $result
	 * @param int $field_offset <p>If the field offset isn't specified, the next field that wasn't yet retrieved by <b>sybase_fetch_field()</b> is retrieved.</p>
	 * @return object <p>Returns an object containing field information.</p><p>The properties of the object are:</p><ul> <li>  name - column name. if the column is a result of a function, this property is set to computed#N, where #N is a serial number.  </li> <li>  column_source - the table from which the column was taken  </li> <li>  max_length - maximum length of the column  </li> <li>  numeric - 1 if the column is numeric  </li> <li>  type - datatype of the column  </li> </ul>
	 * @link http://php.net/manual/en/function.sybase-fetch-field.php
	 * @see sybase_field_seek()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_field($result, int $field_offset = -1): object {}

	/**
	 * Fetch a row as an object
	 * <p><b>sybase_fetch_object()</b> is similar to <code>sybase_fetch_assoc()</code>, with one difference - an object is returned, instead of an array.</p><p>Speed-wise, the function is identical to <code>sybase_fetch_array()</code>, and almost as quick as <code>sybase_fetch_row()</code> (the difference is insignificant).</p>
	 * @param resource $result
	 * @param mixed $object <p>Use the second <code>object</code> to specify the type of object you want to return. If this parameter is omitted, the object will be of type stdClass.</p>
	 * @return object <p>Returns an object with properties that correspond to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.sybase-fetch-object.php
	 * @see sybase_fetch_array(), sybase_fetch_row()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_object($result, $object = NULL): object {}

	/**
	 * Get a result row as an enumerated array
	 * <p><b>sybase_fetch_row()</b> fetches one row of data from the result associated with the specified result identifier.</p><p>Subsequent call to <b>sybase_fetch_row()</b> would return the next row in the result set, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @param resource $result
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows. Each result column is stored in an array offset, starting at offset 0.</p> <b>Data types</b>   PHP Sybase     string VARCHAR, TEXT, CHAR, IMAGE, BINARY, VARBINARY, DATETIME   int NUMERIC (w/o precision), DECIMAL (w/o precision), INT, BIT, TINYINT, SMALLINT   float NUMERIC (w/ precision), DECIMAL (w/ precision), REAL, FLOAT, MONEY   <b><code>NULL</code></b> NULL
	 * @link http://php.net/manual/en/function.sybase-fetch-row.php
	 * @see sybase_fetch_array(), sybase_fetch_assoc(), sybase_fetch_object(), sybase_data_seek(), sybase_result()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_row($result): array {}

	/**
	 * Sets field offset
	 * <p>Seeks to the specified field offset. If the next call to <code>sybase_fetch_field()</code> won't include a field offset, this field would be returned.</p>
	 * @param resource $result
	 * @param int $field_offset
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-field-seek.php
	 * @see sybase_fetch_field()
	 * @since PHP 4, PHP 5
	 */
	function sybase_field_seek($result, int $field_offset): bool {}

	/**
	 * Frees result memory
	 * <p><b>sybase_free_result()</b> only needs to be called if you are worried about using too much memory while your script is running. All result memory will automatically be freed when the script ends. You may call <b>sybase_free_result()</b> with the result identifier as an argument and the associated result memory will be freed.</p>
	 * @param resource $result
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-free-result.php
	 * @since PHP 4, PHP 5
	 */
	function sybase_free_result($result): bool {}

	/**
	 * Returns the last message from the server
	 * <p><b>sybase_get_last_message()</b> returns the last message reported by the server.</p>
	 * @return string <p>Returns the message as a string.</p>
	 * @link http://php.net/manual/en/function.sybase-get-last-message.php
	 * @see sybase_min_message_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_get_last_message(): string {}

	/**
	 * Sets minimum client severity
	 * <p><b>sybase_min_client_severity()</b> sets the minimum client severity level.</p>
	 * @param int $severity
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sybase-min-client-severity.php
	 * @see sybase_min_server_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_client_severity(int $severity): void {}

	/**
	 * Sets minimum error severity
	 * <p><b>sybase_min_error_severity()</b> sets the minimum error severity level.</p>
	 * @param int $severity
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sybase-min-error-severity.php
	 * @see sybase_min_message_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_error_severity(int $severity): void {}

	/**
	 * Sets minimum message severity
	 * <p><b>sybase_min_message_severity()</b> sets the minimum message severity level.</p>
	 * @param int $severity
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sybase-min-message-severity.php
	 * @see sybase_min_error_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_message_severity(int $severity): void {}

	/**
	 * Sets minimum server severity
	 * <p><b>sybase_min_server_severity()</b> sets the minimum server severity level.</p>
	 * @param int $severity
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sybase-min-server-severity.php
	 * @see sybase_min_client_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_server_severity(int $severity): void {}

	/**
	 * Gets the number of fields in a result set
	 * <p><b>sybase_num_fields()</b> returns the number of fields in a result set.</p>
	 * @param resource $result
	 * @return int <p>Returns the number of fields as an integer.</p>
	 * @link http://php.net/manual/en/function.sybase-num-fields.php
	 * @see sybase_query(), sybase_fetch_field(), sybase_num_rows()
	 * @since PHP 4, PHP 5
	 */
	function sybase_num_fields($result): int {}

	/**
	 * Get number of rows in a result set
	 * <p><b>sybase_num_rows()</b> returns the number of rows in a result set.</p>
	 * @param resource $result
	 * @return int <p>Returns the number of rows as an integer.</p>
	 * @link http://php.net/manual/en/function.sybase-num-rows.php
	 * @see sybase_num_fields(), sybase_query(), sybase_fetch_row()
	 * @since PHP 4, PHP 5
	 */
	function sybase_num_rows($result): int {}

	/**
	 * Open persistent Sybase connection
	 * <p><b>sybase_pconnect()</b> acts very much like <code>sybase_connect()</code> with two major differences.</p><p>First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, username and password. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>sybase_close()</code> will not close links established by <b>sybase_pconnect()</b>).</p><p>This type of links is therefore called 'persistent'.</p>
	 * @param string $servername <p>The servername argument has to be a valid servername that is defined in the 'interfaces' file.</p>
	 * @param string $username <p>Sybase user name</p>
	 * @param string $password <p>Password associated with <code>username</code>.</p>
	 * @param string $charset <p>Specifies the charset for the connection</p>
	 * @param string $appname <p>Specifies an <i>appname</i> for the Sybase connection. This allow you to make separate connections in the same script to the same database. This may come handy when you have started a transaction in your current connection, and you need to be able to do a separate query which cannot be performed inside this transaction.</p>
	 * @return resource <p>Returns a positive Sybase persistent link identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.sybase-pconnect.php
	 * @see sybase_connect()
	 * @since PHP 4, PHP 5
	 */
	function sybase_pconnect(string $servername = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, string $appname = NULL) {}

	/**
	 * Sends a Sybase query
	 * <p><b>sybase_query()</b> sends a query to the currently active database on the server that's associated with the specified link identifier.</p>
	 * @param string $query
	 * @param resource $link_identifier <p>If the link identifier isn't specified, the last opened link is assumed. If no link is open, the function tries to establish a link as if <code>sybase_connect()</code> was called, and use it.</p>
	 * @return mixed <p>Returns a positive Sybase result identifier on success, <b><code>FALSE</code></b> on error, or <b><code>TRUE</code></b> if the query was successful but didn't return any columns.</p>
	 * @link http://php.net/manual/en/function.sybase-query.php
	 * @see sybase_select_db(), sybase_connect()
	 * @since PHP 4, PHP 5
	 */
	function sybase_query(string $query, $link_identifier = NULL) {}

	/**
	 * Get result data
	 * <p>Returns the contents of the cell at the row and offset in the specified Sybase result set.</p><p>When working on large result sets, you should consider using one of the functions that fetch an entire row (specified below). As these functions return the contents of multiple cells in one function call, they're MUCH quicker than sybase_result(). Also, note that specifying a numeric offset for the field argument is much quicker than specifying a fieldname or tablename.fieldname argument.</p><p>Recommended high-performance alternatives: <code>sybase_fetch_row()</code>, <code>sybase_fetch_array()</code> and <code>sybase_fetch_object()</code>.</p>
	 * @param resource $result
	 * @param int $row
	 * @param mixed $field <p>The field argument can be the field's offset, or the field's name, or the field's table dot field's name (tablename.fieldname). If the column name has been aliased ('select foo as bar from...'), use the alias instead of the column name.</p>
	 * @return string <p><b>sybase_result()</b> returns the contents of one cell from a Sybase result set.</p>
	 * @link http://php.net/manual/en/function.sybase-result.php
	 * @since PHP 4, PHP 5
	 */
	function sybase_result($result, int $row, $field): string {}

	/**
	 * Selects a Sybase database
	 * <p><b>sybase_select_db()</b> sets the current active database on the server that's associated with the specified link identifier.</p><p>Every subsequent call to <code>sybase_query()</code> will be made on the active database.</p>
	 * @param string $database_name
	 * @param resource $link_identifier <p>If no link identifier is specified, the last opened link is assumed. If no link is open, the function will try to establish a link as if <code>sybase_connect()</code> was called, and use it.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-select-db.php
	 * @see sybase_connect(), sybase_pconnect(), sybase_query()
	 * @since PHP 4, PHP 5
	 */
	function sybase_select_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Sets the handler called when a server message is raised
	 * <p><b>sybase_set_message_handler()</b> sets a user function to handle messages generated by the server. You may specify the name of a global function, or use an array to specify an object reference and a method name.</p>
	 * @param callable $handler <p>The handler expects five arguments in the following order: message number, severity, state, line number and description. The first four are integers. The last is a string. If the function returns <b><code>FALSE</code></b>, PHP generates an ordinary error message.</p>
	 * @param resource $link_identifier <p>If the link identifier isn't specified, the last opened link is assumed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sybase-set-message-handler.php
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_set_message_handler(callable $handler, $link_identifier = NULL): bool {}

	/**
	 * Send a Sybase query and do not block
	 * <p><b>sybase_unbuffered_query()</b> sends a query to the currently active database on the server that's associated with the specified link identifier. If the link identifier isn't specified, the last opened link is assumed. If no link is open, the function tries to establish a link as if <code>sybase_connect()</code> was called, and use it.</p><p>Unlike <code>sybase_query()</code>, <b>sybase_unbuffered_query()</b> reads only the first row of the result set. <code>sybase_fetch_array()</code> and similar function read more rows as needed. <code>sybase_data_seek()</code> reads up to the target row. The behavior may produce better performance for large result sets.</p><p><code>sybase_num_rows()</code> will only return the correct number of rows if all result sets have been read. To Sybase, the number of rows is not known and is therefore computed by the client implementation.</p><p><b>Note</b>:</p><p>If you don't read all of the resultsets prior to executing the next query, PHP will raise a warning and cancel all of the pending results. To get rid of this, use <code>sybase_free_result()</code> which will cancel pending results of an unbuffered query.</p>
	 * @param string $query
	 * @param resource $link_identifier
	 * @param bool $store_result <p>The optional <code>store_result</code> can be <b><code>FALSE</code></b> to indicate the resultsets shouldn't be fetched into memory, thus minimizing memory usage which is particularly interesting with very large resultsets.</p>
	 * @return resource <p>Returns a positive Sybase result identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.sybase-unbuffered-query.php
	 * @see sybase_query()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_unbuffered_query(string $query, $link_identifier, bool $store_result = NULL) {}

}
