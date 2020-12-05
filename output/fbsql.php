<?php



namespace {

	/**
	 * Get number of affected rows in previous FrontBase operation
	 * <p><b>fbsql_affected_rows()</b> returns the number of rows affected by the last INSERT, UPDATE or DELETE query associated with <code>link_identifier</code>.</p><p><b>Note</b>:</p><p>If you are using transactions, you need to call <b>fbsql_affected_rows()</b> after your INSERT, UPDATE, or DELETE query, not after the commit.</p><p>If the last query was a DELETE query with no WHERE clause, all of the records will have been deleted from the table but this function will return zero.</p><p><b>Note</b>:</p><p>When using UPDATE, FrontBase will not update columns where the new value is the same as the old value. This creates the possibility that <b>fbsql_affected_rows()</b> may not actually equal the number of rows matched, only the number of rows that were literally affected by the query.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return int <p>If the last query failed, this function will return -1.</p>
	 * @link http://php.net/manual/en/function.fbsql-affected-rows.php
	 * @see fbsql_num_rows()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_affected_rows($link_identifier = NULL): int {}

	/**
	 * Enable or disable autocommit
	 * <p>Returns the current autocommit status.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param bool $OnOff <p>If this optional parameter is given the auto commit status will be changed.</p> <p>With <code>OnOff</code> set to <b><code>TRUE</code></b> each statement will be committed automatically, if no errors was found.</p> <p>With OnOff set to <b><code>FALSE</code></b> the user must commit or rollback the transaction using either <code>fbsql_commit()</code> or <code>fbsql_rollback()</code>.</p>
	 * @return bool <p>Returns the current autocommit status, as a boolean.</p>
	 * @link http://php.net/manual/en/function.fbsql-autocommit.php
	 * @see fbsql_commit(), fbsql_rollback()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_autocommit($link_identifier, bool $OnOff = NULL): bool {}

	/**
	 * Get the size of a BLOB
	 * <p>Returns the size of the given BLOB.</p>
	 * @param string $blob_handle <p>A BLOB handle, returned by <code>fbsql_create_blob()</code>.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return int <p>Returns the BLOB size as an integer, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-blob-size.php
	 * @see fbsql_clob_size()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_blob_size(string $blob_handle, $link_identifier = NULL): int {}

	/**
	 * Change logged in user of the active connection
	 * <p><b>fbsql_change_user()</b> changes the logged in user of the specified connection. If the new user and password authorization fails, the current connected user stays active.</p>
	 * @param string $user <p>The new user name.</p>
	 * @param string $password <p>The new user password.</p>
	 * @param string $database <p>If specified, this will be the default or current database after the user has been changed.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-change-user.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_change_user(string $user, string $password, string $database = NULL, $link_identifier = NULL): bool {}

	/**
	 * Get the size of a CLOB
	 * <p>Returns the size of the given CLOB.</p>
	 * @param string $clob_handle <p>A CLOB handle, returned by <code>fbsql_create_clob()</code>.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return int <p>Returns the CLOB size as an integer, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-clob-size.php
	 * @see fbsql_blob_size()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_clob_size(string $clob_handle, $link_identifier = NULL): int {}

	/**
	 * Close FrontBase connection
	 * <p>Closes the connection to the FrontBase server that's associated with the specified link identifier.</p><p>Using <b>fbsql_close()</b> isn't usually necessary, as non-persistent open links are automatically closed at the end of the script's execution.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-close.php
	 * @see fbsql_connect(), fbsql_pconnect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_close($link_identifier = NULL): bool {}

	/**
	 * Commits a transaction to the database
	 * <p>Ends the current transaction by writing all inserts, updates and deletes to the disk and unlocking all row and table locks held by the transaction. This command is only needed if autocommit is set to false.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-commit.php
	 * @see fbsql_autocommit(), fbsql_rollback()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_commit($link_identifier = NULL): bool {}

	/**
	 * Open a connection to a FrontBase Server
	 * <p><b>fbsql_connect()</b> establishes a connection to a FrontBase server.</p><p>If a second call is made to <b>fbsql_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned.</p><p>The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling <code>fbsql_close()</code>.</p>
	 * @param string $hostname <p>The server host name.</p>
	 * @param string $username <p>The user name for the connection.</p>
	 * @param string $password <p>The password for the connection.</p>
	 * @return resource <p>Returns a positive FrontBase link identifier on success, or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.fbsql-connect.php
	 * @see fbsql_pconnect(), fbsql_close()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_connect(string $hostname = 'ini_get("fbsql.default_host")', string $username = 'ini_get("fbsql.default_user")', string $password = 'ini_get("fbsql.default_password")') {}

	/**
	 * Create a BLOB
	 * <p>Creates a BLOB from the given data.</p>
	 * @param string $blob_data <p>The BLOB data.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return string <p>Returns a resource handle to the newly created BLOB, which can be used with insert and update commands to store the BLOB in the database.</p>
	 * @link http://php.net/manual/en/function.fbsql-create-blob.php
	 * @see fbsql_create_clob(), fbsql_read_blob(), fbsql_read_clob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_create_blob(string $blob_data, $link_identifier = NULL): string {}

	/**
	 * Create a CLOB
	 * <p>Creates a CLOB from the given data.</p>
	 * @param string $clob_data <p>The CLOB data.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return string <p>Returns a resource handle to the newly created CLOB, which can be used with insert and update commands to store the CLOB in the database.</p>
	 * @link http://php.net/manual/en/function.fbsql-create-clob.php
	 * @see fbsql_create_blob(), fbsql_read_blob(), fbsql_read_clob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_create_clob(string $clob_data, $link_identifier = NULL): string {}

	/**
	 * Create a FrontBase database
	 * <p>Attempts to create a new database on the specified server.</p>
	 * @param string $database_name <p>The database name, as a string.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $database_options
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-create-db.php
	 * @see fbsql_drop_db()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_create_db(string $database_name, $link_identifier = NULL, string $database_options = NULL): bool {}

	/**
	 * Move internal result pointer
	 * <p>Moves the internal row pointer of the FrontBase result associated with the specified result identifier to point to the specified row number.</p><p>The next call to <code>fbsql_fetch_row()</code> would return that row.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $row_number <p>The row number. Starts at 0.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-data-seek.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_data_seek($result, int $row_number): bool {}

	/**
	 * Get or set the database name used with a connection
	 * <p>Get or set the database name used with the connection.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $database <p>The database name. If given, the default database of the connexion will be changed to <code>database</code>.</p>
	 * @return string <p>Returns the name of the database used with this connection.</p>
	 * @link http://php.net/manual/en/function.fbsql-database.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_database($link_identifier, string $database = NULL): string {}

	/**
	 * Sets or retrieves the password for a FrontBase database
	 * <p>Sets and retrieves the database password used by the connection. If a database is protected by a database password, the user must call this function before calling <code>fbsql_select_db()</code>.</p><p>If no link is open, the function will try to establish a link as if <code>fbsql_connect()</code> was called, and use it.</p><p>This function does not change the database password in the database nor can it be used to retrieve the database password for a database.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $database_password <p>The database password, as a string. If given, the function sets the database password for the specified link identifier.</p>
	 * @return string <p>Returns the database password associated with the link identifier.</p>
	 * @link http://php.net/manual/en/function.fbsql-database-password.php
	 * @see fbsql_connect(), fbsql_pconnect(), fbsql_select_db()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_database_password($link_identifier, string $database_password = NULL): string {}

	/**
	 * Send a FrontBase query
	 * <p>Selects a database and executes a query on it.</p>
	 * @param string $database <p>The database to be selected.</p>
	 * @param string $query <p>The SQL query to be executed.</p> <p><b>Note</b>:</p><p>The query string shall always end with a semicolon.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return resource <p>Returns a positive FrontBase result identifier to the query result, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-db-query.php
	 * @see fbsql_query(), fbsql_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_db_query(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * Get the status for a given database
	 * <p>Gets the current status of the specified database.</p>
	 * @param string $database_name <p>The database name.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return int <p>Returns an integer value with the current status. This can be one of the following constants:</p><ul> <li>  <b><code>FALSE</code></b> - The exec handler for the host was invalid. This error will occur when the <code>link_identifier</code> connects directly to a database by using a port number. FBExec can be available on the server but no connection has been made for it.  </li> <li>  <b><code>FBSQL_UNKNOWN</code></b> - The Status is unknown.  </li> <li>  <b><code>FBSQL_STOPPED</code></b> - The database is not running. Use <code>fbsql_start_db()</code> to start the database.  </li> <li>  <b><code>FBSQL_STARTING</code></b> - The database is starting.  </li> <li>  <b><code>FBSQL_RUNNING</code></b> - The database is running and can be used to perform SQL operations.  </li> <li>  <b><code>FBSQL_STOPPING</code></b> - The database is stopping.  </li> <li>  <b><code>FBSQL_NOEXEC</code></b> - FBExec is not running on the server and it is not possible to get the status of the database.  </li> </ul>
	 * @link http://php.net/manual/en/function.fbsql-db-status.php
	 * @see fbsql_start_db(), fbsql_stop_db()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0
	 */
	function fbsql_db_status(string $database_name, $link_identifier = NULL): int {}

	/**
	 * Drop (delete) a FrontBase database
	 * <p><b>fbsql_drop_db()</b> attempts to drop (remove) an entire database from the server associated with the specified link identifier.</p>
	 * @param string $database_name <p>The database name, as a string.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-drop-db.php
	 * @see fbsql_create_db()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_drop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Returns the error number from previous operation
	 * <p>Returns the numerical value of the error message from previous FrontBase operation.</p><p>Errors coming back from the fbsql database backend don't issue warnings. Instead, use <b>fbsql_errno()</b> to retrieve the error code. Note that this function only returns the error code from the most recently executed fbsql function (not including <code>fbsql_error()</code> and <b>fbsql_errno()</b>), so if you want to use it, make sure you check the value before calling another fbsql function.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return int <p>Returns the error number from the last fbsql function, or <code>0</code> (zero) if no error occurred.</p>
	 * @link http://php.net/manual/en/function.fbsql-errno.php
	 * @see fbsql_error(), fbsql_warnings()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_errno($link_identifier = NULL): int {}

	/**
	 * Returns the error message from previous operation
	 * <p>Returns the error message from previous FrontBase operation.</p><p>Errors coming back from the fbsql database backend don't issue warnings. Instead, use <b>fbsql_error()</b> to retrieve the error text. Note that this function only returns the error code from the most recently executed fbsql function (not including <b>fbsql_error()</b> and <code>fbsql_errno()</code>), so if you want to use it, make sure you check the value before calling another fbsql function.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return string <p>Returns the error text from the last fbsql function, or <code>''</code> (the empty string) if no error occurred.</p>
	 * @link http://php.net/manual/en/function.fbsql-error.php
	 * @see fbsql_errno(), fbsql_warnings()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_error($link_identifier = NULL): string {}

	/**
	 * Fetch a result row as an associative array, a numeric array, or both
	 * <p><b>fbsql_fetch_array()</b> is a combination of <code>fbsql_fetch_row()</code> and <code>fbsql_fetch_assoc()</code>.</p><p>An important thing to note is that using <b>fbsql_fetch_array()</b> is NOT significantly slower than using <code>fbsql_fetch_row()</code>, while it provides a significant added value.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $result_type <p>A constant and can take the following values: <b><code>FBSQL_ASSOC</code></b>, <b><code>FBSQL_NUM</code></b>, or <b><code>FBSQL_BOTH</code></b>.</p> <p>When using <b><code>FBSQL_BOTH</code></b>, in addition to storing the data in the numeric indices of the result array, it also stores the data in associative indices, using the field names as keys.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you must the numeric index of the column or make an alias for the column.</p>  <pre>select t1.f1 as foo t2.f1 as bar from t1, t2</pre>
	 * @link http://php.net/manual/en/function.fbsql-fetch-array.php
	 * @see fbsql_fetch_row(), fbsql_fetch_assoc(), fbsql_fetch_object()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_fetch_array($result, int $result_type = NULL): array {}

	/**
	 * Fetch a result row as an associative array
	 * <p>Calling <b>fbsql_fetch_assoc()</b> is equivalent to calling <code>fbsql_fetch_array()</code> with <b><code>FBSQL_ASSOC</code></b> as second parameter. It only returns an associative array.</p><p>This is the way <code>fbsql_fetch_array()</code> originally worked. If you need the numeric indices as well as the associative, use <code>fbsql_fetch_array()</code>.</p><p>An important thing to note is that using <b>fbsql_fetch_assoc()</b> is NOT significantly slower than using <code>fbsql_fetch_row()</code>, while it provides a significant added value.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return array <p>Returns an associative array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you must use <code>fbsql_fetch_array()</code> and have it return the numeric indices as well.</p>
	 * @link http://php.net/manual/en/function.fbsql-fetch-assoc.php
	 * @see fbsql_fetch_row(), fbsql_fetch_array(), fbsql_fetch_object()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_fetch_assoc($result): array {}

	/**
	 * Get column information from a result and return as an object
	 * <p>Used in order to obtain information about fields in a certain query result.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $field_offset <p>The numerical offset of the field. The field index starts at 0. If not specified, the next field that wasn't yet retrieved by <b>fbsql_fetch_field()</b> is retrieved.</p>
	 * @return object <p>Returns an object containing field information, or <b><code>FALSE</code></b> on errors.</p><p>The properties of the object are:</p><ul> <li>  name - column name  </li> <li>  table - name of the table the column belongs to  </li> <li>  max_length - maximum length of the column  </li> <li>  not_null - 1 if the column cannot be <b><code>NULL</code></b>  </li> <li>  type - the type of the column  </li> </ul>
	 * @link http://php.net/manual/en/function.fbsql-fetch-field.php
	 * @see fbsql_field_seek()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_fetch_field($result, int $field_offset = NULL): object {}

	/**
	 * Get the length of each output in a result
	 * <p>Stores the lengths of each result column in the last row returned by <code>fbsql_fetch_row()</code>, <code>fbsql_fetch_array()</code> and <code>fbsql_fetch_object()</code> in an array.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return array <p>Returns an array, starting at offset 0, that corresponds to the lengths of each field in the last row fetched by <code>fbsql_fetch_row()</code>, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-fetch-lengths.php
	 * @see fbsql_fetch_row()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_fetch_lengths($result): array {}

	/**
	 * Fetch a result row as an object
	 * <p><b>fbsql_fetch_object()</b> is similar to <code>fbsql_fetch_array()</code>, with one difference - an object is returned, instead of an array. Indirectly, that means that you can only access the data by the field names, and not by their offsets (numbers are illegal property names).</p><p>Speed-wise, the function is identical to <code>fbsql_fetch_array()</code>, and almost as quick as <code>fbsql_fetch_row()</code> (the difference is insignificant).</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return object <p>Returns an object with properties that correspond to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.fbsql-fetch-object.php
	 * @see fbsql_fetch_array(), fbsql_fetch_row(), fbsql_fetch_assoc()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_fetch_object($result): object {}

	/**
	 * Get a result row as an enumerated array
	 * <p><b>fbsql_fetch_row()</b> fetches one row of data from the result associated with the specified result identifier.</p><p>Subsequent call to <b>fbsql_fetch_row()</b> would return the next row in the result set, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row where each result column is stored in an offset, starting at offset 0, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.fbsql-fetch-row.php
	 * @see fbsql_fetch_array(), fbsql_fetch_assoc(), fbsql_fetch_object(), fbsql_data_seek(), fbsql_fetch_lengths(), fbsql_result()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_fetch_row($result): array {}

	/**
	 * Get the flags associated with the specified field in a result
	 * <p>Gets the flags associated with the specified field in a result.</p>
	 * @param resource $result <p>A result pointer returned by <code>fbsql_list_fields()</code>.</p>
	 * @param int $field_offset <p>The numerical offset of the field. The field index starts at 0.</p>
	 * @return string <p>Returns the field flags of the specified field as a single word per flag separated by a single space, so that you can split the returned value using <code>explode()</code>.</p>
	 * @link http://php.net/manual/en/function.fbsql-field-flags.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_field_flags($result, int $field_offset = NULL): string {}

	/**
	 * Returns the length of the specified field
	 * <p>Returns the length of the specified field.</p>
	 * @param resource $result <p>A result pointer returned by <code>fbsql_list_fields()</code>.</p>
	 * @param int $field_offset <p>The numerical offset of the field. The field index starts at 0.</p>
	 * @return int <p>Returns the length of the specified field.</p>
	 * @link http://php.net/manual/en/function.fbsql-field-len.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_field_len($result, int $field_offset = NULL): int {}

	/**
	 * Get the name of the specified field in a result
	 * <p>Returns the name of the specified field index.</p>
	 * @param resource $result <p>A result pointer returned by <code>fbsql_list_fields()</code>.</p>
	 * @param int $field_index <p>The numerical offset of the field. The field index starts at 0.</p>
	 * @return string <p>Returns the name as a string, or <b><code>FALSE</code></b> if the field doesn't exist.</p>
	 * @link http://php.net/manual/en/function.fbsql-field-name.php
	 * @see fbsql_field_type()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_field_name($result, int $field_index = NULL): string {}

	/**
	 * Set result pointer to a specified field offset
	 * <p>Seeks to the specified field offset. If the next call to <code>fbsql_fetch_field()</code> doesn't include a field offset, the field offset specified in <b>fbsql_field_seek()</b> will be returned.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $field_offset <p>The numerical offset of the field. The field index starts at 0.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-field-seek.php
	 * @see fbsql_fetch_field()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_field_seek($result, int $field_offset = NULL): bool {}

	/**
	 * Get name of the table the specified field is in
	 * <p>Returns the name of the table that the specified field is in.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $field_offset <p>The numerical offset of the field. The field index starts at 0.</p>
	 * @return string <p>Returns the name of the table, as a string.</p>
	 * @link http://php.net/manual/en/function.fbsql-field-table.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_field_table($result, int $field_offset = NULL): string {}

	/**
	 * Get the type of the specified field in a result
	 * <p><b>fbsql_field_type()</b> is similar to the <code>fbsql_field_name()</code> function, but the field type is returned instead.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $field_offset <p>The numerical offset of the field. The field index starts at 0.</p>
	 * @return string <p>Returns the field type, as a string.</p><p>This can be one of <code>int</code>, <code>real</code>, <code>string</code>, <code>blob</code>, and others as detailed in the FrontBase documentation.</p>
	 * @link http://php.net/manual/en/function.fbsql-field-type.php
	 * @see fbsql_field_name()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_field_type($result, int $field_offset = NULL): string {}

	/**
	 * Free result memory
	 * <p>Frees all memory associated with the given <code>result</code> identifier.</p><p><b>fbsql_free_result()</b> only needs to be called if you are concerned about how much memory is being used for queries that return large result sets. All associated result memory is automatically freed at the end of the script's execution.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-free-result.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_free_result($result): bool {}

	/**
	 * 
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return array
	 * @link http://php.net/manual/en/function.fbsql-get-autostart-info.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0
	 */
	function fbsql_get_autostart_info($link_identifier = NULL): array {}

	/**
	 * Get or set the host name used with a connection
	 * <p>Gets or sets the host name used with a connection.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $host_name <p>If provided, this will be the new connection host name.</p>
	 * @return string <p>Returns the current host name used for the connection.</p>
	 * @link http://php.net/manual/en/function.fbsql-hostname.php
	 * @see fbsql_username(), fbsql_password()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_hostname($link_identifier, string $host_name = NULL): string {}

	/**
	 * Get the id generated from the previous INSERT operation
	 * <p>Gets the id generated from the previous INSERT operation which created a DEFAULT UNIQUE value.</p><p><b>Note</b>:</p><p>The value of the FrontBase SQL function <b>fbsql_insert_id()</b> always contains the most recently generated DEFAULT UNIQUE value, and is not reset between queries.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return int <p>Returns the ID generated from the previous INSERT query, or 0 if the previous query does not generate an DEFAULT UNIQUE value.</p><p>If you need to save the value for later, be sure to call this function immediately after the query that generates the value.</p>
	 * @link http://php.net/manual/en/function.fbsql-insert-id.php
	 * @see fbsql_affected_rows()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_insert_id($link_identifier = NULL): int {}

	/**
	 * List databases available on a FrontBase server
	 * <p>Return a result pointer containing the databases available from the current fbsql daemon. Use the <code>fbsql_tablename()</code> to traverse this result pointer.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return resource <p>Returns a result pointer or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-list-dbs.php
	 * @see fbsql_list_fields(), fbsql_list_tables()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_list_dbs($link_identifier = NULL) {}

	/**
	 * List FrontBase result fields
	 * <p>Retrieves information about the given table.</p>
	 * @param string $database_name <p>The database name.</p>
	 * @param string $table_name <p>The table name.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return resource <p>Returns a result pointer which can be used with the <code>fbsql_field_xxx</code> functions, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-list-fields.php
	 * @see fbsql_field_len(), fbsql_field_name(), fbsql_field_type(), fbsql_field_flags()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_list_fields(string $database_name, string $table_name, $link_identifier = NULL) {}

	/**
	 * List tables in a FrontBase database
	 * <p>Returns a result pointer describing the <code>database</code>.</p>
	 * @param string $database <p>The database name.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return resource <p>Returns a result pointer which can be used with the <code>fbsql_tablename()</code> function to read the actual table names, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-list-tables.php
	 * @see fbsql_list_fields(), fbsql_list_dbs()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_list_tables(string $database, $link_identifier = NULL) {}

	/**
	 * Move the internal result pointer to the next result
	 * <p>When sending more than one SQL statement to the server or executing a stored procedure with multiple results will cause the server to return multiple result sets. This function will test for additional results available form the server. If an additional result set exists it will free the existing result set and prepare to fetch the words from the new result set.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if an additional result set was available or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.fbsql-next-result.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_next_result($result): bool {}

	/**
	 * Get number of fields in result
	 * <p>Returns the number of fields in the given <code>result</code> set.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return int <p>Returns the number of fields, as an integer.</p>
	 * @link http://php.net/manual/en/function.fbsql-num-fields.php
	 * @see fbsql_db_query(), fbsql_query(), fbsql_fetch_field(), fbsql_num_rows()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_num_fields($result): int {}

	/**
	 * Get number of rows in result
	 * <p>Gets the number of rows in the given <code>result</code> set.</p><p>This function is only valid for SELECT statements. To retrieve the number of rows returned from a INSERT, UPDATE or DELETE query, use <code>fbsql_affected_rows()</code>.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return int <p>Returns the number of rows returned by the last SELECT statement.</p>
	 * @link http://php.net/manual/en/function.fbsql-num-rows.php
	 * @see fbsql_affected_rows(), fbsql_connect(), fbsql_select_db(), fbsql_query()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_num_rows($result): int {}

	/**
	 * Get or set the user password used with a connection
	 * <p>Get or set the user password used with a connection.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $password <p>If provided, this will be the new connection password.</p>
	 * @return string <p>Returns the current password used for the connection.</p>
	 * @link http://php.net/manual/en/function.fbsql-password.php
	 * @see fbsql_username(), fbsql_hostname()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_password($link_identifier, string $password = NULL): string {}

	/**
	 * Open a persistent connection to a FrontBase Server
	 * <p>Establishes a persistent connection to a FrontBase server.</p><p>To set the server port number, use <code>fbsql_select_db()</code>.</p><p><b>fbsql_pconnect()</b> acts very much like <code>fbsql_connect()</code> with two major differences:</p><p>First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, username and password. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use.</p><p>This type of links is therefore called 'persistent'.</p>
	 * @param string $hostname <p>The server host name.</p>
	 * @param string $username <p>The user name for the connection.</p>
	 * @param string $password <p>The password for the connection.</p>
	 * @return resource <p>Returns a positive FrontBase persistent link identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.fbsql-pconnect.php
	 * @see fbsql_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_pconnect(string $hostname = 'ini_get("fbsql.default_host")', string $username = 'ini_get("fbsql.default_user")', string $password = 'ini_get("fbsql.default_password")') {}

	/**
	 * Send a FrontBase query
	 * <p>Sends a <code>query</code> to the currently active database on the server.</p><p>If the query succeeds, you can call <code>fbsql_num_rows()</code> to find out how many rows were returned for a SELECT statement or <code>fbsql_affected_rows()</code> to find out how many rows were affected by a DELETE, INSERT, REPLACE, or UPDATE statement.</p>
	 * @param string $query <p>The SQL query to be executed.</p> <p><b>Note</b>:</p><p>The query string shall always end with a semicolon.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param int $batch_size
	 * @return resource <p><b>fbsql_query()</b> returns <b><code>TRUE</code></b> (non-zero) or <b><code>FALSE</code></b> to indicate whether or not the query succeeded. A return value of <b><code>TRUE</code></b> means that the query was legal and could be executed by the server. It does not indicate anything about the number of rows affected or returned. It is perfectly possible for a query to succeed but affect no rows or return no rows.</p><p>For SELECT statements, <b>fbsql_query()</b> returns a new result identifier that you can pass to <code>fbsql_result()</code>.</p><p><b>fbsql_query()</b> will also fail and return <b><code>FALSE</code></b> if you don't have permission to access the table(s) referenced by the query.</p>
	 * @link http://php.net/manual/en/function.fbsql-query.php
	 * @see fbsql_affected_rows(), fbsql_db_query(), fbsql_free_result(), fbsql_result(), fbsql_select_db(), fbsql_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_query(string $query, $link_identifier = NULL, int $batch_size = NULL) {}

	/**
	 * Read a BLOB from the database
	 * <p>Reads BLOB data from the database.</p><p>If a select statement contains BLOB and/or CLOB columns FrontBase will return the data directly when data is fetched. This default behavior can be changed with <code>fbsql_set_lob_mode()</code> so the fetch functions will return handles to BLOB and CLOB data. If a handle is fetched a user must call <b>fbsql_read_blob()</b> to get the actual BLOB data from the database.</p>
	 * @param string $blob_handle <p>A BLOB handle, returned by <code>fbsql_create_blob()</code>.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return string <p>Returns a string containing the specified BLOB data.</p>
	 * @link http://php.net/manual/en/function.fbsql-read-blob.php
	 * @see fbsql_create_blob(), fbsql_read_clob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_read_blob(string $blob_handle, $link_identifier = NULL): string {}

	/**
	 * Read a CLOB from the database
	 * <p>Reads CLOB data from the database.</p><p>If a select statement contains BLOB and/or CLOB columns FrontBase will return the data directly when data is fetched. This default behavior can be changed with <code>fbsql_set_lob_mode()</code> so the fetch functions will return handles to BLOB and CLOB data. If a handle is fetched a user must call <b>fbsql_read_clob()</b> to get the actual CLOB data from the database.</p>
	 * @param string $clob_handle <p>A CLOB handle, returned by <code>fbsql_create_clob()</code>.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return string <p>Returns a string containing the specified CLOB data.</p>
	 * @link http://php.net/manual/en/function.fbsql-read-clob.php
	 * @see fbsql_create_clob(), fbsql_read_blob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_read_clob(string $clob_handle, $link_identifier = NULL): string {}

	/**
	 * Get result data
	 * <p>Returns the contents of one cell from a FrontBase <code>result</code> set.</p><p>When working on large result sets, you should consider using one of the functions that fetch an entire row (specified below). As these functions return the contents of multiple cells in one function call, they're MUCH quicker than <b>fbsql_result()</b>.</p><p>Calls to <b>fbsql_result()</b> should not be mixed with calls to other functions that deal with the result set.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $row
	 * @param mixed $field <p>Can be the field's offset, or the field's name, or the field's table dot field's name (tablename.fieldname).</p> <p>If the column name has been aliased ('select foo as bar from...'), use the alias instead of the column name.</p> <p><b>Note</b>:</p><p>Specifying a numeric offset for the field argument is much quicker than specifying a fieldname or tablename.fieldname argument.</p>
	 * @return mixed
	 * @link http://php.net/manual/en/function.fbsql-result.php
	 * @see fbsql_fetch_row(), fbsql_fetch_array(), fbsql_fetch_assoc(), fbsql_fetch_object()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_result($result, int $row = NULL, $field = NULL) {}

	/**
	 * Rollback a transaction to the database
	 * <p>Ends the current transaction by rolling back all statements issued since last commit.</p><p>This command is only needed if autocommit is set to false.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-rollback.php
	 * @see fbsql_autocommit(), fbsql_commit()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_rollback($link_identifier = NULL): bool {}

	/**
	 * Get the number of rows affected by the last statement
	 * <p>Gets the number of rows affected by the last statement.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @return int <p>Returns the number of rows, as an integer.</p>
	 * @link http://php.net/manual/en/function.fbsql-rows-fetched.php
	 * @since PHP 5 >= 5.1.0 < 5.3.0
	 */
	function fbsql_rows_fetched($result): int {}

	/**
	 * Select a FrontBase database
	 * <p>Sets the current active database on the given link identifier.</p><p>The client contacts FBExec to obtain the port number to use for the connection to the database. If the database name is a number the system will use that as a port number and it will not ask FBExec for the port number. The FrontBase server can be stared as FRontBase -FBExec=No -port=&lt;port number&gt; &lt;database name&gt;.</p><p>Every subsequent call to <code>fbsql_query()</code> will be made on the active database.</p>
	 * @param string $database_name <p>The name of the database to be selected.</p> <p>If the database is protected with a database password, the you must call <code>fbsql_database_password()</code> before selecting the database.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-select-db.php
	 * @see fbsql_connect(), fbsql_pconnect(), fbsql_database_password(), fbsql_query()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_select_db(string $database_name = NULL, $link_identifier = NULL): bool {}

	/**
	 * Change input/output character set
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link_identifier
	 * @param int $characterset
	 * @param int $in_out_both
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.fbsql-set-characterset.php
	 * @since PHP 5 >= 5.1.0 < 5.3.0
	 */
	function fbsql_set_characterset($link_identifier, int $characterset, int $in_out_both = NULL): void {}

	/**
	 * Set the LOB retrieve mode for a FrontBase result set
	 * <p>Sets the mode for retrieving LOB data from the database.</p><p>When BLOB and CLOB data is retrieved in FrontBase it can be retrieved direct or indirect. Direct retrieved LOB data will always be fetched no matter the setting of the lob mode. If the LOB data is less than 512 bytes it will always be retrieved directly.</p>
	 * @param resource $result <p>A result identifier returned by <code>fbsql_query()</code> or <code>fbsql_db_query()</code>.</p>
	 * @param int $lob_mode <p>Can be one of:</p><ul> <li>  <b><code>FBSQL_LOB_DIRECT</code></b> - LOB data is retrieved directly. When data is fetched from the database with <code>fbsql_fetch_row()</code>, and other fetch functions, all CLOB and BLOB columns will be returned as ordinary columns. This is the default value on a new FrontBase result.  </li> <li>  <b><code>FBSQL_LOB_HANDLE</code></b> - LOB data is retrieved as handles to the data. When data is fetched from the database with <code>fbsql_fetch_row()</code>, and other fetch functions, LOB data will be returned as a handle to the data if the data is stored indirect or the data if it is stored direct. If a handle is returned it will be a 27 byte string formatted as <code>@'000000000000000000000000'</code>.  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-set-lob-mode.php
	 * @see fbsql_create_blob(), fbsql_create_clob(), fbsql_read_blob(), fbsql_read_clob()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_set_lob_mode($result, int $lob_mode): bool {}

	/**
	 * Change the password for a given user
	 * <p>Changes the password for the given <code>user</code>.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $user <p>The user name.</p>
	 * @param string $password <p>The new password to be set.</p>
	 * @param string $old_password <p>The old password to be replaced.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-set-password.php
	 * @since PHP 5 < 5.3.0
	 */
	function fbsql_set_password($link_identifier, string $user, string $password, string $old_password): bool {}

	/**
	 * Set the transaction locking and isolation
	 * <p>Sets the transaction <code>locking</code> and <code>isolation</code>.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param int $locking <p>The type of locking to be set. It can be one of the following constants: <b><code>FBSQL_LOCK_DEFERRED</code></b>, <b><code>FBSQL_LOCK_OPTIMISTIC</code></b>, or <b><code>FBSQL_LOCK_PESSIMISTIC</code></b>.</p>
	 * @param int $isolation <p>The type of isolation to be set. It can be one of the following constants: <b><code>FBSQL_ISO_READ_UNCOMMITTED</code></b>, <b><code>FBSQL_ISO_READ_COMMITTED</code></b>, <b><code>FBSQL_ISO_REPEATABLE_READ</code></b>, <b><code>FBSQL_ISO_SERIALIZABLE</code></b>, or <b><code>FBSQL_ISO_VERSIONED</code></b>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.fbsql-set-transaction.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_set_transaction($link_identifier, int $locking, int $isolation): void {}

	/**
	 * Start a database on local or remote server
	 * <p>Start a database on local or remote server.</p>
	 * @param string $database_name <p>The database name.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $database_options
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-start-db.php
	 * @see fbsql_db_status(), fbsql_stop_db()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_start_db(string $database_name, $link_identifier = NULL, string $database_options = NULL): bool {}

	/**
	 * Stop a database on local or remote server
	 * <p>Stops a database on local or remote server.</p>
	 * @param string $database_name <p>The database name.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fbsql-stop-db.php
	 * @see fbsql_db_status(), fbsql_start_db()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_stop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Get table name of field
	 * <p><b>fbsql_table_name()</b> gets the name of the current table in the given <code>result</code> set.</p><p>The <code>fbsql_num_rows()</code> function may be used to determine the number of tables in the result pointer.</p>
	 * @param resource $result <p>A result pointer returned by <code>fbsql_list_tables()</code>.</p>
	 * @param int $index <p>Integer index for the current table.</p>
	 * @return string <p>Returns the name of the table, as a string.</p>
	 * @link http://php.net/manual/en/function.fbsql-table-name.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_table_name($result, int $index): string {}

	/**
	 * Alias of fbsql_table_name()
	 * <p>This function is an alias of: <code>fbsql_table_name()</code>.</p>
	 * @param resource $result <p>A result pointer returned by <code>fbsql_list_tables()</code>.</p>
	 * @param int $index <p>Integer index for the current table.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.fbsql-tablename.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0
	 */
	function fbsql_tablename($result, int $index): string {}

	/**
	 * Get or set the username for the connection
	 * <p>Get or set the username used for the connection.</p>
	 * @param resource $link_identifier <p>A FrontBase link identifier returned by <code>fbsql_connect()</code> or <code>fbsql_pconnect()</code>.</p><p>If optional and not specified, the function will try to find an open link to the FrontBase server and if no such link is found it will try to create one as if <code>fbsql_connect()</code> was called with no arguments.</p>
	 * @param string $username <p>If provided, this is the new username to set.</p>
	 * @return string <p>Returns the current username used with the connection, as a string.</p>
	 * @link http://php.net/manual/en/function.fbsql-username.php
	 * @see fbsql_password(), fbsql_hostname()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_username($link_identifier, string $username = NULL): string {}

	/**
	 * Enable or disable FrontBase warnings
	 * <p>Enables or disables FrontBase warnings.</p>
	 * @param bool $OnOff <p>Whether to enable warnings or no.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if warnings is turned on, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.fbsql-warnings.php
	 * @see fbsql_errno(), fbsql_error()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.3.0
	 */
	function fbsql_warnings(bool $OnOff = NULL): bool {}

	define('FBSQL_ASSOC', null);

	define('FBSQL_BOTH', null);

	define('FBSQL_ISO_READ_COMMITTED', null);

	define('FBSQL_ISO_READ_UNCOMMITTED', null);

	define('FBSQL_ISO_REPEATABLE_READ', null);

	define('FBSQL_ISO_SERIALIZABLE', null);

	define('FBSQL_ISO_VERSIONED', null);

	define('FBSQL_LOB_DIRECT', null);

	define('FBSQL_LOB_HANDLE', null);

	define('FBSQL_LOCK_DEFERRED', null);

	define('FBSQL_LOCK_OPTIMISTIC', null);

	define('FBSQL_LOCK_PESSIMISTIC', null);

	define('FBSQL_NOEXEC', null);

	define('FBSQL_NUM', null);

	define('FBSQL_RUNNING', null);

	define('FBSQL_STARTING', null);

	define('FBSQL_STOPPED', null);

	define('FBSQL_STOPPING', null);

	define('FBSQL_UNKNOWN', null);

}
