<?php



namespace {

	/**
	 * Add a user to a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the new database user.</p>
	 * @param string $password <p>The password of the new user.</p>
	 * @param string $first_name <p>The first name of the new database user.</p>
	 * @param string $middle_name <p>The middle name of the new database user.</p>
	 * @param string $last_name <p>The last name of the new database user.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-add-user.php
	 * @see ibase_modify_user(), ibase_delete_user()
	 * @since PHP 5, PHP 7
	 */
	function ibase_add_user($service_handle, string $user_name, string $password, string $first_name = NULL, string $middle_name = NULL, string $last_name = NULL): bool {}

	/**
	 * Return the number of rows that were affected by the previous query
	 * <p>This function returns the number of rows that were affected by the previous query (INSERT, UPDATE or DELETE) that was executed from within the specified transaction context.</p>
	 * @param resource $link_identifier <p>A transaction context. If <code>link_identifier</code> is a connection resource, its default transaction is used.</p>
	 * @return int <p>Returns the number of rows as an integer.</p>
	 * @link http://php.net/manual/en/function.ibase-affected-rows.php
	 * @see ibase_query(), ibase_execute()
	 * @since PHP 5, PHP 7
	 */
	function ibase_affected_rows($link_identifier = NULL): int {}

	/**
	 * Initiates a backup task in the service manager and returns immediately
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param string $source_db
	 * @param string $dest_file
	 * @param int $options
	 * @param bool $verbose
	 * @return mixed
	 * @link http://php.net/manual/en/function.ibase-backup.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = FALSE) {}

	/**
	 * Add data into a newly created blob
	 * <p><b>ibase_blob_add()</b> adds data into a blob created with <code>ibase_blob_create()</code>.</p>
	 * @param resource $blob_handle <p>A blob handle opened with <code>ibase_blob_create()</code>.</p>
	 * @param string $data <p>The data to be added.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-add.php
	 * @see ibase_blob_cancel(), ibase_blob_close(), ibase_blob_create(), ibase_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_add($blob_handle, string $data): void {}

	/**
	 * Cancel creating blob
	 * <p>This function will discard a BLOB if it has not yet been closed by <code>ibase_blob_close()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_create()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-cancel.php
	 * @see ibase_blob_close(), ibase_blob_create(), ibase_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_cancel($blob_handle): bool {}

	/**
	 * Close blob
	 * <p>This function closes a BLOB that has either been opened for reading by <code>ibase_blob_open()</code> or has been opened for writing by <code>ibase_blob_create()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_create()</code> or <code>ibase_blob_open()</code>.</p>
	 * @return mixed <p>If the BLOB was being read, this function returns <b><code>TRUE</code></b> on success, if the BLOB was being written to, this function returns a string containing the BLOB id that has been assigned to it by the database. On failure, this function returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-close.php
	 * @see ibase_blob_cancel(), ibase_blob_open()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_close($blob_handle) {}

	/**
	 * Create a new blob for adding data
	 * <p><b>ibase_blob_create()</b> creates a new BLOB for filling with data.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return resource <p>Returns a BLOB handle for later use with <code>ibase_blob_add()</code> or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-create.php
	 * @see ibase_blob_add(), ibase_blob_cancel(), ibase_blob_close(), ibase_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_create($link_identifier = NULL) {}

	/**
	 * Output blob contents to browser
	 * <p>This function opens a BLOB for reading and sends its contents directly to standard output (the browser, in most cases).</p>
	 * @param string $blob_id
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-echo.php
	 * @see ibase_blob_open(), ibase_blob_close(), ibase_blob_get()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_echo(string $blob_id): bool {}

	/**
	 * Get len bytes data from open blob
	 * <p>This function returns at most <code>len</code> bytes from a BLOB that has been opened for reading by <code>ibase_blob_open()</code>.</p><p><b>Note</b>:</p><p>It is not possible to read from a BLOB that has been opened for writing by <code>ibase_blob_create()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_open()</code>.</p>
	 * @param int $len <p>Size of returned data.</p>
	 * @return string <p>Returns at most <code>len</code> bytes from the BLOB, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-get.php
	 * @see ibase_blob_open(), ibase_blob_close(), ibase_blob_echo()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_get($blob_handle, int $len): string {}

	/**
	 * Create blob, copy file in it, and close it
	 * <p>This function creates a BLOB, reads an entire file into it, closes it and returns the assigned BLOB id.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param resource $file_handle <p>The file handle is a handle returned by <code>fopen()</code>.</p>
	 * @return string <p>Returns the BLOB id on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-import.php
	 * @see ibase_blob_add(), ibase_blob_cancel(), ibase_blob_close(), ibase_blob_create()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_import($link_identifier, $file_handle): string {}

	/**
	 * Return blob length and other useful info
	 * <p>Returns the BLOB length and other useful information.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $blob_id <p>A BLOB id.</p>
	 * @return array <p>Returns an array containing information about a BLOB. The information returned consists of the length of the BLOB, the number of segments it contains, the size of the largest segment, and whether it is a stream BLOB or a segmented BLOB.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-info.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_info($link_identifier, string $blob_id): array {}

	/**
	 * Open blob for retrieving data parts
	 * <p>Opens an existing BLOB for reading.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $blob_id <p>A BLOB id.</p>
	 * @return resource <p>Returns a BLOB handle for later use with <code>ibase_blob_get()</code> or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-blob-open.php
	 * @see ibase_blob_close(), ibase_blob_echo(), ibase_blob_get()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_open($link_identifier, string $blob_id) {}

	/**
	 * Close a connection to an InterBase database
	 * <p>Closes the link to an InterBase database that's associated with a connection id returned from <code>ibase_connect()</code>. Default transaction on link is committed, other transactions are rolled back.</p>
	 * @param resource $connection_id <p>An InterBase link identifier returned from <code>ibase_connect()</code>. If omitted, the last opened link is assumed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-close.php
	 * @see ibase_connect(), ibase_pconnect()
	 * @since PHP 5, PHP 7
	 */
	function ibase_close($connection_id = NULL): bool {}

	/**
	 * Commit a transaction
	 * <p>Commits a transaction.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function commits the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be committed. If the argument is a transaction identifier, the corresponding transaction will be committed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-commit.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_commit($link_or_trans_identifier = NULL): bool {}

	/**
	 * Commit a transaction without closing it
	 * <p>Commits a transaction without closing it.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function commits the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be committed. If the argument is a transaction identifier, the corresponding transaction will be committed. The transaction context will be retained, so statements executed from within this transaction will not be invalidated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-commit-ret.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_commit_ret($link_or_trans_identifier = NULL): bool {}

	/**
	 * Open a connection to a database
	 * <p>Establishes a connection to an Firebird/InterBase server.</p><p>In case a second call is made to <b>ibase_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned. The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling <code>ibase_close()</code>.</p>
	 * @param string $database <p>The <code>database</code> argument has to be a valid path to database file on the server it resides on. If the server is not local, it must be prefixed with either 'hostname:' (TCP/IP), 'hostname/port:' (TCP/IP with interbase server on custom TCP port), '//hostname/' (NetBEUI), depending on the connection protocol used.</p>
	 * @param string $username <p>The user name. Can be set with the <i>ibase.default_user</i> php.ini directive.</p>
	 * @param string $password <p>The password for <code>username</code>. Can be set with the <i>ibase.default_password</i> php.ini directive.</p>
	 * @param string $charset <p><code>charset</code> is the default character set for a database.</p>
	 * @param int $buffers <p><code>buffers</code> is the number of database buffers to allocate for the server-side cache. If 0 or omitted, server chooses its own default.</p>
	 * @param int $dialect <p><code>dialect</code> selects the default SQL dialect for any statement executed within a connection, and it defaults to the highest one supported by client libraries.</p>
	 * @param string $role <p>Functional only with InterBase 5 and up.</p>
	 * @param int $sync
	 * @return resource <p>Returns an Firebird/InterBase link identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ibase-connect.php
	 * @see ibase_pconnect(), ibase_close()
	 * @since PHP 5, PHP 7
	 */
	function ibase_connect(string $database = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, int $buffers = NULL, int $dialect = NULL, string $role = NULL, int $sync = NULL) {}

	/**
	 * Request statistics about a database
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return string
	 * @link http://php.net/manual/en/function.ibase-db-info.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_db_info($service_handle, string $db, int $action, int $argument = 0): string {}

	/**
	 * Delete a user from a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the user you want to delete from the database.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-delete-user.php
	 * @see ibase_add_user(), ibase_modify_user()
	 * @since PHP 5, PHP 7
	 */
	function ibase_delete_user($service_handle, string $user_name): bool {}

	/**
	 * Drops a database
	 * <p>This functions drops a database that was opened by either <code>ibase_connect()</code> or <code>ibase_pconnect()</code>. The database is closed and deleted from the server.</p>
	 * @param resource $connection <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-drop-db.php
	 * @see ibase_connect(), ibase_pconnect()
	 * @since PHP 5, PHP 7
	 */
	function ibase_drop_db($connection = NULL): bool {}

	/**
	 * Return an error code
	 * <p>Returns the error code that resulted from the most recent InterBase function call.</p>
	 * @return int <p>Returns the error code as an integer, or <b><code>FALSE</code></b> if no error occurred.</p>
	 * @link http://php.net/manual/en/function.ibase-errcode.php
	 * @see ibase_errmsg()
	 * @since PHP 5, PHP 7
	 */
	function ibase_errcode(): int {}

	/**
	 * Return error messages
	 * <p>Returns the error message that resulted from the most recent InterBase function call.</p>
	 * @return string <p>Returns the error message as a string, or <b><code>FALSE</code></b> if no error occurred.</p>
	 * @link http://php.net/manual/en/function.ibase-errmsg.php
	 * @see ibase_errcode()
	 * @since PHP 5, PHP 7
	 */
	function ibase_errmsg(): string {}

	/**
	 * Execute a previously prepared query
	 * <p>Execute a query prepared by <code>ibase_prepare()</code>.</p><p>This is a lot more effective than using <code>ibase_query()</code> if you are repeating a same kind of query several times with only some parameters changing.</p>
	 * @param resource $query <p>An InterBase query prepared by <code>ibase_prepare()</code>.</p>
	 * @param mixed $bind_arg
	 * @param mixed $_
	 * @return resource <p>If the query raises an error, returns <b><code>FALSE</code></b>. If it is successful and there is a (possibly empty) result set (such as with a SELECT query), returns a result identifier. If the query was successful and there were no results, returns <b><code>TRUE</code></b>.</p><p><b>Note</b>:</p><p>This function returns the number of rows affected by the query (if &gt; 0 and applicable to the statement type). A query that succeeded, but did not affect any rows (e.g. an UPDATE of a non-existent record) will return <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ibase-execute.php
	 * @see ibase_query()
	 * @since PHP 5, PHP 7
	 */
	function ibase_execute($query, $bind_arg = NULL, $_ = NULL) {}

	/**
	 * Fetch a result row from a query as an associative array
	 * <p>Fetch a result row from a query as an associative array.</p><p><b>ibase_fetch_assoc()</b> fetches one row of data from the <code>result</code>. If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you either need to access the result with numeric indices by using <code>ibase_fetch_row()</code> or use alias names in your query.</p>
	 * @param resource $result <p>The result handle.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return array <p>Returns an associative array that corresponds to the fetched row. Subsequent calls will return the next row in the result set, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.ibase-fetch-assoc.php
	 * @see ibase_fetch_row(), ibase_fetch_object()
	 * @since PHP 5, PHP 7
	 */
	function ibase_fetch_assoc($result, int $fetch_flag = 0): array {}

	/**
	 * Get an object from a InterBase database
	 * <p>Fetches a row as a pseudo-object from a given result identifier.</p><p>Subsequent calls to <b>ibase_fetch_object()</b> return the next row in the result set.</p>
	 * @param resource $result_id <p>An InterBase result identifier obtained either by <code>ibase_query()</code> or <code>ibase_execute()</code>.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return object <p>Returns an object with the next row information, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.ibase-fetch-object.php
	 * @see ibase_fetch_row(), ibase_fetch_assoc()
	 * @since PHP 5, PHP 7
	 */
	function ibase_fetch_object($result_id, int $fetch_flag = 0): object {}

	/**
	 * Fetch a row from an InterBase database
	 * <p><b>ibase_fetch_row()</b> fetches one row of data from the given result set.</p><p>Subsequent calls to <b>ibase_fetch_row()</b> return the next row in the result set, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @param resource $result_identifier <p>An InterBase result identifier.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows. Each result column is stored in an array offset, starting at offset 0.</p>
	 * @link http://php.net/manual/en/function.ibase-fetch-row.php
	 * @see ibase_fetch_assoc(), ibase_fetch_object()
	 * @since PHP 5, PHP 7
	 */
	function ibase_fetch_row($result_identifier, int $fetch_flag = 0): array {}

	/**
	 * Get information about a field
	 * <p>Returns an array with information about a field after a select query has been run.</p>
	 * @param resource $result <p>An InterBase result identifier.</p>
	 * @param int $field_number <p>Field offset.</p>
	 * @return array <p>Returns an array with the following keys: <i>name</i>, <i>alias</i>, <i>relation</i>, <i>length</i> and <i>type</i>.</p>
	 * @link http://php.net/manual/en/function.ibase-field-info.php
	 * @see ibase_num_fields()
	 * @since PHP 5, PHP 7
	 */
	function ibase_field_info($result, int $field_number): array {}

	/**
	 * Cancels a registered event handler
	 * <p>This function causes the registered event handler specified by <code>event</code> to be cancelled. The callback function will no longer be called for the events it was registered to handle.</p>
	 * @param resource $event <p>An event resource, created by <code>ibase_set_event_handler()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-free-event-handler.php
	 * @see ibase_set_event_handler()
	 * @since PHP 5, PHP 7
	 */
	function ibase_free_event_handler($event): bool {}

	/**
	 * Free memory allocated by a prepared query
	 * <p>Frees a prepared query.</p>
	 * @param resource $query <p>A query prepared with <code>ibase_prepare()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-free-query.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_free_query($query): bool {}

	/**
	 * Free a result set
	 * <p>Frees a result set.</p>
	 * @param resource $result_identifier <p>A result set created by <code>ibase_query()</code> or <code>ibase_execute()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-free-result.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_free_result($result_identifier): bool {}

	/**
	 * Increments the named generator and returns its new value
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $generator
	 * @param int $increment
	 * @param resource $link_identifier
	 * @return mixed <p>Returns new generator value as integer, or as string if the value is too big.</p>
	 * @link http://php.net/manual/en/function.ibase-gen-id.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_gen_id(string $generator, int $increment = 1, $link_identifier = NULL) {}

	/**
	 * Execute a maintenance command on the database server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-maintain-db.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool {}

	/**
	 * Modify a user to a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the database user to modify.</p>
	 * @param string $password <p>The user's new password.</p>
	 * @param string $first_name <p>The user's new first name.</p>
	 * @param string $middle_name <p>The user's new middle name.</p>
	 * @param string $last_name <p>The user's new last name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-modify-user.php
	 * @see ibase_add_user(), ibase_delete_user()
	 * @since PHP 5, PHP 7
	 */
	function ibase_modify_user($service_handle, string $user_name, string $password, string $first_name = NULL, string $middle_name = NULL, string $last_name = NULL): bool {}

	/**
	 * Assigns a name to a result set
	 * <p>This function assigns a name to a result set. This name can be used later in UPDATE|DELETE ... WHERE CURRENT OF <code>name</code> statements.</p>
	 * @param resource $result <p>An InterBase result set.</p>
	 * @param string $name <p>The name to be assigned.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-name-result.php
	 * @see ibase_prepare(), ibase_execute()
	 * @since PHP 5, PHP 7
	 */
	function ibase_name_result($result, string $name): bool {}

	/**
	 * Get the number of fields in a result set
	 * <p>Get the number of fields in a result set.</p>
	 * @param resource $result_id <p>An InterBase result identifier.</p>
	 * @return int <p>Returns the number of fields as an integer.</p>
	 * @link http://php.net/manual/en/function.ibase-num-fields.php
	 * @see ibase_field_info()
	 * @since PHP 5, PHP 7
	 */
	function ibase_num_fields($result_id): int {}

	/**
	 * Return the number of parameters in a prepared query
	 * <p>This function returns the number of parameters in the prepared query specified by <code>query</code>. This is the number of binding arguments that must be present when calling <code>ibase_execute()</code>.</p>
	 * @param resource $query <p>The prepared query handle.</p>
	 * @return int <p>Returns the number of parameters as an integer.</p>
	 * @link http://php.net/manual/en/function.ibase-num-params.php
	 * @see ibase_prepare(), ibase_param_info()
	 * @since PHP 5, PHP 7
	 */
	function ibase_num_params($query): int {}

	/**
	 * Return information about a parameter in a prepared query
	 * <p>Returns an array with information about a parameter after a query has been prepared.</p>
	 * @param resource $query <p>An InterBase prepared query handle.</p>
	 * @param int $param_number <p>Parameter offset.</p>
	 * @return array <p>Returns an array with the following keys: <i>name</i>, <i>alias</i>, <i>relation</i>, <i>length</i> and <i>type</i>.</p>
	 * @link http://php.net/manual/en/function.ibase-param-info.php
	 * @see ibase_field_info(), ibase_num_params()
	 * @since PHP 5, PHP 7
	 */
	function ibase_param_info($query, int $param_number): array {}

	/**
	 * Open a persistent connection to an InterBase database
	 * <p>Opens a persistent connection to an InterBase database.</p><p><b>ibase_pconnect()</b> acts very much like <code>ibase_connect()</code> with two major differences.</p><p>First, when connecting, the function will first try to find a (persistent) link that's already opened with the same parameters. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the InterBase server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>ibase_close()</code> will not close links established by <b>ibase_pconnect()</b>). This type of link is therefore called 'persistent'.</p>
	 * @param string $database <p>The <code>database</code> argument has to be a valid path to database file on the server it resides on. If the server is not local, it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/' (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection protocol used.</p>
	 * @param string $username <p>The user name. Can be set with the <i>ibase.default_user</i> php.ini directive.</p>
	 * @param string $password <p>The password for <code>username</code>. Can be set with the <i>ibase.default_password</i> php.ini directive.</p>
	 * @param string $charset <p><code>charset</code> is the default character set for a database.</p>
	 * @param int $buffers <p><code>buffers</code> is the number of database buffers to allocate for the server-side cache. If 0 or omitted, server chooses its own default.</p>
	 * @param int $dialect <p><code>dialect</code> selects the default SQL dialect for any statement executed within a connection, and it defaults to the highest one supported by client libraries. Functional only with InterBase 6 and up.</p>
	 * @param string $role <p>Functional only with InterBase 5 and up.</p>
	 * @param int $sync
	 * @return resource <p>Returns an InterBase link identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ibase-pconnect.php
	 * @see ibase_close(), ibase_connect()
	 * @since PHP 5, PHP 7
	 */
	function ibase_pconnect(string $database = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, int $buffers = NULL, int $dialect = NULL, string $role = NULL, int $sync = NULL) {}

	/**
	 * Prepare a query for later binding of parameter placeholders and execution
	 * <p>Prepare a query for later binding of parameter placeholders and execution (via <code>ibase_execute()</code>).</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @return resource <p>Returns a prepared query handle, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ibase-prepare.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_prepare(string $query) {}

	/**
	 * Execute a query on an InterBase database
	 * <p>Performs a query on an InterBase database.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @param int $bind_args
	 * @return resource <p>If the query raises an error, returns <b><code>FALSE</code></b>. If it is successful and there is a (possibly empty) result set (such as with a SELECT query), returns a result identifier. If the query was successful and there were no results, returns <b><code>TRUE</code></b>.</p><p><b>Note</b>:</p><p>In PHP 5.0.0 and up, this function will return the number of rows affected by the query for INSERT, UPDATE and DELETE statements. In order to retain backward compatibility, it will return <b><code>TRUE</code></b> for these statements if the query succeeded without affecting any rows.</p>
	 * @link http://php.net/manual/en/function.ibase-query.php
	 * @see ibase_errmsg(), ibase_fetch_row(), ibase_fetch_object(), ibase_free_result()
	 * @since PHP 5, PHP 7
	 */
	function ibase_query($link_identifier = NULL, string $query, int $bind_args = NULL) {}

	/**
	 * Initiates a restore task in the service manager and returns immediately
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param string $source_file
	 * @param string $dest_db
	 * @param int $options
	 * @param bool $verbose
	 * @return mixed
	 * @link http://php.net/manual/en/function.ibase-restore.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = FALSE) {}

	/**
	 * Roll back a transaction
	 * <p>Rolls back a transaction.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function rolls back the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be rolled back. If the argument is a transaction identifier, the corresponding transaction will be rolled back.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-rollback.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_rollback($link_or_trans_identifier = NULL): bool {}

	/**
	 * Roll back a transaction without closing it
	 * <p>Rolls back a transaction without closing it.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function rolls back the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be rolled back. If the argument is a transaction identifier, the corresponding transaction will be rolled back. The transaction context will be retained, so statements executed from within this transaction will not be invalidated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-rollback-ret.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_rollback_ret($link_or_trans_identifier = NULL): bool {}

	/**
	 * Request information about a database server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param int $action
	 * @return string
	 * @link http://php.net/manual/en/function.ibase-server-info.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_server_info($service_handle, int $action): string {}

	/**
	 * Connect to the service manager
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $host
	 * @param string $dba_username
	 * @param string $dba_password
	 * @return resource
	 * @link http://php.net/manual/en/function.ibase-service-attach.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_service_attach(string $host, string $dba_username, string $dba_password) {}

	/**
	 * Disconnect from the service manager
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ibase-service-detach.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_service_detach($service_handle): bool {}

	/**
	 * Register a callback function to be called when events are posted
	 * <p>This function registers a PHP user function as event handler for the specified events.</p>
	 * @param callable $event_handler <p>The callback is called with the event name and the link resource as arguments whenever one of the specified events is posted by the database.</p> <p>The callback must return <b><code>FALSE</code></b> if the event handler should be canceled. Any other return value is ignored. This function accepts up to 15 event arguments.</p>
	 * @param string $event_name1 <p>An event name.</p>
	 * @param string $event_name2 <p>At most 15 events allowed.</p>
	 * @param string $_
	 * @return resource <p>The return value is an event resource. This resource can be used to free the event handler using <code>ibase_free_event_handler()</code>.</p>
	 * @link http://php.net/manual/en/function.ibase-set-event-handler.php
	 * @see ibase_free_event_handler(), ibase_wait_event()
	 * @since PHP 5, PHP 7
	 */
	function ibase_set_event_handler(callable $event_handler, string $event_name1, string $event_name2 = NULL, string $_ = NULL) {}

	/**
	 * Begin a transaction
	 * <p>Begins a transaction.</p><p><b>Note</b>:</p><p>The first call to <b>ibase_trans()</b> will not return the default transaction of a connection. All transactions started by <b>ibase_trans()</b> will be rolled back at the end of the script if they were not committed or rolled back by either <code>ibase_commit()</code> or <code>ibase_rollback()</code>.</p><p><b>Note</b>:</p><p>This function will accept multiple <code>trans_args</code> and <code>link_identifier</code> arguments. This allows transactions over multiple database connections, which are committed using a 2-phase commit algorithm. This means you can rely on the updates to either succeed in every database, or fail in every database. It does NOT mean you can use tables from different databases in the same query!</p><p>If you use transactions over multiple databases, you will have to specify both the <code>link_id</code> and <code>transaction_id</code> in calls to <code>ibase_query()</code> and <code>ibase_prepare()</code>.</p>
	 * @param int $trans_args <p><code>trans_args</code> can be a combination of <b><code>IBASE_READ</code></b>, <b><code>IBASE_WRITE</code></b>, <b><code>IBASE_COMMITTED</code></b>, <b><code>IBASE_CONSISTENCY</code></b>, <b><code>IBASE_CONCURRENCY</code></b>, <b><code>IBASE_REC_VERSION</code></b>, <b><code>IBASE_REC_NO_VERSION</code></b>, <b><code>IBASE_WAIT</code></b> and <b><code>IBASE_NOWAIT</code></b>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return resource <p>Returns a transaction handle, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ibase-trans.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_trans(int $trans_args = NULL, $link_identifier = NULL) {}

	/**
	 * Wait for an event to be posted by the database
	 * <p>This function suspends execution of the script until one of the specified events is posted by the database. The name of the event that was posted is returned. This function accepts up to 15 event arguments.</p>
	 * @param string $event_name1 <p>The event name.</p>
	 * @param string $event_name2
	 * @param string $_
	 * @return string <p>Returns the name of the event that was posted.</p>
	 * @link http://php.net/manual/en/function.ibase-wait-event.php
	 * @see ibase_set_event_handler(), ibase_free_event_handler()
	 * @since PHP 5, PHP 7
	 */
	function ibase_wait_event(string $event_name1, string $event_name2 = NULL, string $_ = NULL): string {}

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_CONVERT', 64);

	define('IBASE_BKP_IGNORE_CHECKSUMS', 1);

	define('IBASE_BKP_IGNORE_LIMBO', 2);

	define('IBASE_BKP_METADATA_ONLY', 4);

	define('IBASE_BKP_NO_GARBAGE_COLLECT', 8);

	define('IBASE_BKP_NON_TRANSPORTABLE', 32);

	define('IBASE_BKP_OLD_DESCRIPTIONS', 16);

	/**
	 * Starts a transaction with the isolation level set to 'read committed'. This flag should be combined with either <b><code>IBASE_REC_VERSION</code></b> or <b><code>IBASE_REC_NO_VERSION</code></b>. This isolation level allows access to changes that were committed after the transaction was started. If <b><code>IBASE_REC_NO_VERSION</code></b> was specified, only the latest version of a row can be read. If <b><code>IBASE_REC_VERSION</code></b> was specified, a row can even be read when a modification to it is pending in a concurrent transaction.
	 */
	define('IBASE_COMMITTED', 8);

	/**
	 * Starts a transaction with the isolation level set to 'concurrency' (or 'snapshot'), which means the transaction has access to all tables, but cannot see changes that were committed by other transactions after the transaction was started.
	 */
	define('IBASE_CONCURRENCY', 4);

	/**
	 * Starts a transaction with the isolation level set to 'consistency', which means the transaction cannot read from tables that are being modified by other concurrent transactions.
	 */
	define('IBASE_CONSISTENCY', 16);

	/**
	 * The default transaction settings are to be used. This default is determined by the client library, which defines it as IBASE_WRITE|IBASE_CONCURRENCY|IBASE_WAIT in most cases.
	 */
	define('IBASE_DEFAULT', 0);

	/**
	 * Causes arrays to be fetched inline. Otherwise, array identifiers are returned. Array identifiers can only be used as arguments to INSERT operations, as no functions to handle array identifiers are currently available.
	 */
	define('IBASE_FETCH_ARRAYS', 2);

	/**
	 * Also available as <b><code>IBASE_TEXT</code></b>for backward compatibility. Causes BLOB contents to be fetched inline, instead of being fetched as BLOB identifiers.
	 */
	define('IBASE_FETCH_BLOBS', 1);

	/**
	 * Indicated that a transaction should fail immediately when a conflict occurs.
	 */
	define('IBASE_NOWAIT', 256);

	define('IBASE_PRP_ACCESS_MODE', 13);

	define('IBASE_PRP_ACTIVATE', 256);

	define('IBASE_PRP_AM_READONLY', 39);

	define('IBASE_PRP_AM_READWRITE', 40);

	define('IBASE_PRP_DB_ONLINE', 512);

	define('IBASE_PRP_DENY_NEW_ATTACHMENTS', 9);

	define('IBASE_PRP_DENY_NEW_TRANSACTIONS', 10);

	define('IBASE_PRP_PAGE_BUFFERS', 5);

	define('IBASE_PRP_RES', 36);

	define('IBASE_PRP_RES_USE_FULL', 35);

	define('IBASE_PRP_RESERVE_SPACE', 11);

	define('IBASE_PRP_SET_SQL_DIALECT', 14);

	define('IBASE_PRP_SHUTDOWN_DB', 7);

	define('IBASE_PRP_SWEEP_INTERVAL', 6);

	define('IBASE_PRP_WM_ASYNC', 37);

	define('IBASE_PRP_WM_SYNC', 38);

	define('IBASE_PRP_WRITE_MODE', 12);

	/**
	 * Starts a read-only transaction.
	 */
	define('IBASE_READ', 2);

	define('IBASE_RES_CREATE', 8192);

	define('IBASE_RES_DEACTIVATE_IDX', 256);

	define('IBASE_RES_NO_SHADOW', 512);

	define('IBASE_RES_NO_VALIDITY', 1024);

	define('IBASE_RES_ONE_AT_A_TIME', 2048);

	define('IBASE_RES_REPLACE', 4096);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_USE_ALL_SPACE', 16384);

	define('IBASE_RPR_CHECK_DB', 16);

	define('IBASE_RPR_FULL', 128);

	define('IBASE_RPR_IGNORE_CHECKSUM', 32);

	define('IBASE_RPR_KILL_SHADOWS', 64);

	define('IBASE_RPR_MEND_DB', 4);

	/**
	 * Options to <code>ibase_maintain_db()</code>
	 */
	define('IBASE_RPR_SWEEP_DB', 2);

	define('IBASE_RPR_VALIDATE_DB', 1);

	define('IBASE_STS_DATA_PAGES', 1);

	define('IBASE_STS_DB_LOG', 2);

	define('IBASE_STS_HDR_PAGES', 4);

	define('IBASE_STS_IDX_PAGES', 8);

	/**
	 * Options to <code>ibase_db_info()</code>
	 */
	define('IBASE_STS_SYS_RELATIONS', 16);

	define('IBASE_SVC_GET_ENV', 59);

	define('IBASE_SVC_GET_ENV_LOCK', 60);

	define('IBASE_SVC_GET_ENV_MSG', 61);

	/**
	 * Options to <code>ibase_server_info()</code>
	 */
	define('IBASE_SVC_GET_USERS', 68);

	define('IBASE_SVC_IMPLEMENTATION', 56);

	define('IBASE_SVC_SERVER_VERSION', 55);

	define('IBASE_SVC_SVR_DB_INFO', 50);

	define('IBASE_SVC_USER_DBPATH', 58);

	/**
	 * Causes date and time fields not to be returned as strings, but as UNIX timestamps (the number of seconds since the epoch, which is 1-Jan-1970 0:00 UTC). Might be problematic if used with dates before 1970 on some systems.
	 */
	define('IBASE_UNIXTIME', 4);

	/**
	 * Indicated that a transaction should wait and retry when a conflict occurs.
	 */
	define('IBASE_WAIT', 128);

	/**
	 * Starts a read-write transaction.
	 */
	define('IBASE_WRITE', 1);

}
