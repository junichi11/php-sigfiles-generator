<?php



namespace {

	/**
	 * Alias of msql_db_query()
	 * <p>This function is an alias of <code>msql_db_query()</code>.</p>
	 * @param string $database <p>The name of the mSQL database.</p>
	 * @param string $query <p>The SQL query.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return resource
	 * @link http://php.net/manual/en/function.msql.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * Returns number of affected rows
	 * <p>Returns number of affected rows by the last SELECT, UPDATE or DELETE query associated with <code>result</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @return int <p>Returns the number of affected rows on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.msql-affected-rows.php
	 * @see msql_query()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_affected_rows($result): int {}

	/**
	 * Close mSQL connection
	 * <p><b>msql_close()</b> closes the non-persistent connection to the mSQL server that's associated with the specified link identifier.</p><p>Using <b>msql_close()</b> isn't usually necessary, as non-persistent open links are automatically closed at the end of the script's execution. See also freeing resources.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-close.php
	 * @see msql_connect(), msql_pconnect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_close($link_identifier = NULL): bool {}

	/**
	 * Open mSQL connection
	 * <p><b>msql_connect()</b> establishes a connection to a mSQL server.</p><p>If a second call is made to <b>msql_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned.</p><p>The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling <code>msql_close()</code>.</p>
	 * @param string $hostname <p>The hostname can also include a port number. e.g. <i>hostname,port</i>.</p> <p>If not specified, the connection is established by the means of a Unix domain socket, being then more efficient then a localhost TCP socket connection.</p> <p><b>Note</b>:</p><p>While this function will accept a colon (<i>:</i>) as a host/port separator, a comma (<i>,</i>) is the preferred method.</p>
	 * @return resource <p>Returns a positive mSQL link identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.msql-connect.php
	 * @see msql_pconnect(), msql_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_connect(string $hostname = NULL) {}

	/**
	 * Create mSQL database
	 * <p><b>msql_create_db()</b> attempts to create a new database on the mSQL server.</p>
	 * @param string $database_name <p>The name of the mSQL database.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-create-db.php
	 * @see msql_drop_db()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_create_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Alias of msql_create_db()
	 * <p>This function is an alias of: <code>msql_create_db()</code>.</p>
	 * @param string $database_name <p>The name of the mSQL database.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.msql-createdb.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_createdb(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Move internal row pointer
	 * <p><b>msql_data_seek()</b> moves the internal row pointer of the mSQL result associated with the specified query identifier to point to the specified row number. The next call to <code>msql_fetch_row()</code> would return that row.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $row_number <p>The seeked row number.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-data-seek.php
	 * @see msql_fetch_array(), msql_fetch_object(), msql_fetch_row(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_data_seek($result, int $row_number): bool {}

	/**
	 * Send mSQL query
	 * <p><b>msql_db_query()</b> selects a database and executes a query on it.</p>
	 * @param string $database <p>The name of the mSQL database.</p>
	 * @param string $query <p>The SQL query.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return resource <p>Returns a positive mSQL query identifier to the query result, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.msql-db-query.php
	 * @see msql_query()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_db_query(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * Alias of msql_result()
	 * <p>This function is an alias of: <code>msql_result()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $row <p>The row offset.</p>
	 * @param mixed $field <p>Can be the field's offset, or the field's name, or the field's table dot field's name (tablename.fieldname.). If the column name has been aliased ('select foo as bar from ...'), use the alias instead of the column name.</p> <p><b>Note</b>:</p><p>Specifying a numeric field offset is much quicker than specifying a fieldname or tablename.fieldname.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.msql-dbname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_dbname($result, int $row, $field = NULL): string {}

	/**
	 * Drop (delete) mSQL database
	 * <p><b>msql_drop_db()</b> attempts to drop (remove) a database from the mSQL server.</p>
	 * @param string $database_name <p>The name of the database.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-drop-db.php
	 * @see msql_create_db()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_drop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Returns error message of last msql call
	 * <p><b>msql_error()</b> returns the last issued error by the mSQL server. Note that only the last error message is accessible with <b>msql_error()</b>.</p>
	 * @return string <p>The last error message or an empty string if no error was issued.</p>
	 * @link http://php.net/manual/en/function.msql-error.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_error(): string {}

	/**
	 * Fetch row as array
	 * <p><b>msql_fetch_array()</b> is an extended version of <code>msql_fetch_row()</code>. In addition to storing the data in the numeric indices of the result array, it also stores the data in associative indices, using the field names as keys.</p><p>An important thing to note is that using <b>msql_fetch_array()</b> is NOT significantly slower than using <code>msql_fetch_row()</code>, while it provides a significant added value.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $result_type <p>A constant that can take the following values: <b><code>MSQL_ASSOC</code></b>, <b><code>MSQL_NUM</code></b>, and <b><code>MSQL_BOTH</code></b> with <b><code>MSQL_BOTH</code></b> being the default.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.msql-fetch-array.php
	 * @see msql_fetch_row(), msql_fetch_object(), msql_data_seek(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_array($result, int $result_type = NULL): array {}

	/**
	 * Get field information
	 * <p><b>msql_fetch_field()</b> can be used in order to obtain information about fields in a certain query result.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The field offset. If not specified, the next field that wasn't yet retrieved by <b>msql_fetch_field()</b> is retrieved.</p>
	 * @return object <p>Returns an object containing field information. The properties of the object are:</p><ul> <li> <p>name - column name</p> </li> <li> <p>table - name of the table the column belongs to</p> </li> <li> <p>not_null - 1 if the column cannot be <b><code>NULL</code></b></p> </li> <li> <p>unique - 1 if the column is a unique key</p> </li> <li>  type - the type of the column  </li> </ul>
	 * @link http://php.net/manual/en/function.msql-fetch-field.php
	 * @see msql_field_seek()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_field($result, int $field_offset = 0): object {}

	/**
	 * Fetch row as object
	 * <p><b>msql_fetch_object()</b> is similar to <code>msql_fetch_array()</code>, with one difference - an object is returned, instead of an array. Indirectly, that means that you can only access the data by the field names, and not by their offsets (numbers are illegal property names).</p><p>Speed-wise, the function is identical to <code>msql_fetch_array()</code>, and almost as quick as <code>msql_fetch_row()</code> (the difference is insignificant).</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @return object <p>Returns an object with properties that correspond to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.msql-fetch-object.php
	 * @see msql_fetch_array(), msql_fetch_row(), msql_data_seek(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_object($result): object {}

	/**
	 * Get row as enumerated array
	 * <p><b>msql_fetch_row()</b> fetches one row of data from the result associated with the specified query identifier. The row is returned as an array. Each result column is stored in an array offset, starting at offset 0.</p><p>Subsequent call to <b>msql_fetch_row()</b> would return the next row in the result set, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.msql-fetch-row.php
	 * @see msql_fetch_array(), msql_fetch_object(), msql_data_seek(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_row($result): array {}

	/**
	 * Get field flags
	 * <p><b>msql_field_flags()</b> returns the field flags of the specified field.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return string <p>Returns a string containing the field flags of the specified key. This can be: <i>primary key not null</i>, <i>not null</i>, <i>primary key</i>, <i>unique not null</i> or <i>unique</i>.</p>
	 * @link http://php.net/manual/en/function.msql-field-flags.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_flags($result, int $field_offset): string {}

	/**
	 * Get field length
	 * <p><b>msql_field_len()</b> returns the length of the specified field.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return int <p>Returns the length of the specified field or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.msql-field-len.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_len($result, int $field_offset): int {}

	/**
	 * Get the name of the specified field in a result
	 * <p><b>msql_field_name()</b> gets the name of the specified field index.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return string <p>The name of the field or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-field-name.php
	 * @see msql_field_len()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_name($result, int $field_offset): string {}

	/**
	 * Set field offset
	 * <p>Seeks to the specified field offset. If the next call to <code>msql_fetch_field()</code> won't include a field offset, this field would be returned.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-field-seek.php
	 * @see msql_fetch_field()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_seek($result, int $field_offset): bool {}

	/**
	 * Get table name for field
	 * <p>Returns the name of the table that the specified field is in.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return int <p>The name of the table on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-field-table.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_table($result, int $field_offset): int {}

	/**
	 * Get field type
	 * <p><b>msql_field_type()</b> gets the type of the specified field index.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return string <p>The type of the field. One of <i>int</i>, <i>char</i>, <i>real</i>, <i>ident</i>, <i>null</i> or <i>unknown</i>. This functions will return <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-field-type.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_type($result, int $field_offset): string {}

	/**
	 * Alias of msql_field_flags()
	 * <p>This function is an alias of <code>msql_field_flags()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.msql-fieldflags.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldflags($result, int $field_offset): string {}

	/**
	 * Alias of msql_field_len()
	 * <p>This function is an alias of <code>msql_field_len()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.msql-fieldlen.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldlen($result, int $field_offset): int {}

	/**
	 * Alias of msql_field_name()
	 * <p>This function is an alias of <code>msql_field_name()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.msql-fieldname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldname($result, int $field_offset): string {}

	/**
	 * Alias of msql_field_table()
	 * <p>This function is an alias of <code>msql_field_table()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.msql-fieldtable.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldtable($result, int $field_offset): int {}

	/**
	 * Alias of msql_field_type()
	 * <p>This function is an alias of <code>msql_field_type()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <i>1</i>.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.msql-fieldtype.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldtype($result, int $field_offset): string {}

	/**
	 * Free result memory
	 * <p><b>msql_free_result()</b> frees the memory associated with <code>query_identifier</code>. When PHP completes a request, this memory is freed automatically, so you only need to call this function when you want to make sure you don't use too much memory while the script is running.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-free-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_free_result($result): bool {}

	/**
	 * List mSQL databases on server
	 * <p><code>msql_list_tables()</code> lists the databases available on the specified <code>link_identifier</code>.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return resource <p>Returns a result set which may be traversed with any function that fetches result sets, such as <code>msql_fetch_array()</code>. On failure, this function will return <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.msql-list-dbs.php
	 * @see msql_list_tables(), msql_list_fields()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_list_dbs($link_identifier = NULL) {}

	/**
	 * List result fields
	 * <p><b>msql_list_fields()</b> returns information about the given table.</p>
	 * @param string $database <p>The name of the database.</p>
	 * @param string $tablename <p>The name of the table.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return resource <p>Returns a result set which may be traversed with any function that fetches result sets, such as <code>msql_fetch_array()</code>. On failure, this function will return <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.msql-list-fields.php
	 * @see msql_list_tables(), msql_list_dbs()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_list_fields(string $database, string $tablename, $link_identifier = NULL) {}

	/**
	 * List tables in an mSQL database
	 * <p><b>msql_list_tables()</b> lists the tables on the specified <code>database</code>.</p>
	 * @param string $database <p>The name of the database.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return resource <p>Returns a result set which may be traversed with any function that fetches result sets, such as <code>msql_fetch_array()</code>. On failure, this function will return <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.msql-list-tables.php
	 * @see msql_list_fields(), msql_list_dbs()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_list_tables(string $database, $link_identifier = NULL) {}

	/**
	 * Get number of fields in result
	 * <p><b>msql_num_fields()</b> returns the number of fields in a result set.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @return int <p>Returns the number of fields in the result set.</p>
	 * @link http://php.net/manual/en/function.msql-num-fields.php
	 * @see msql_query(), msql_fetch_field(), msql_num_rows()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_num_fields($result): int {}

	/**
	 * Get number of rows in result
	 * <p><b>msql_num_rows()</b> returns the number of rows in a result set.</p>
	 * @param resource $query_identifier
	 * @return int <p>Returns the number of rows in the result set.</p>
	 * @link http://php.net/manual/en/function.msql-num-rows.php
	 * @see msql_num_fields()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_num_rows($query_identifier): int {}

	/**
	 * Alias of msql_num_fields()
	 * <p>This function is an alias of <code>msql_num_fields()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.msql-numfields.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_numfields($result): int {}

	/**
	 * Alias of msql_num_rows()
	 * <p>This function is an alias of <code>msql_num_rows()</code>.</p>
	 * @param resource $query_identifier
	 * @return int
	 * @link http://php.net/manual/en/function.msql-numrows.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_numrows($query_identifier): int {}

	/**
	 * Open persistent mSQL connection
	 * <p><b>msql_pconnect()</b> acts very much like <code>msql_connect()</code> with two major differences.</p><p>First, when connecting, the function would first try to find a (persistent) link that's already open with the same host. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>msql_close()</code> will not close links established by this function).</p>
	 * @param string $hostname <p>The hostname can also include a port number. e.g. <i>hostname,port</i>.</p> <p>If not specified, the connection is established by the means of a Unix domain socket, being more efficient than a localhost TCP socket connection.</p> <p><b>Note</b>:  While this function will accept a colon (<i>:</i>) as a host/port separator, a comma (<i>,</i>) is the preferred method. </p>
	 * @return resource <p>Returns a positive mSQL link identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.msql-pconnect.php
	 * @see msql_connect(), msql_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_pconnect(string $hostname = NULL) {}

	/**
	 * Send mSQL query
	 * <p><b>msql_query()</b> sends a query to the currently active database on the server that's associated with the specified link identifier.</p>
	 * @param string $query <p>The SQL query.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return resource <p>Returns a positive mSQL query identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.msql-query.php
	 * @see msql_db_query(), msql_select_db(), msql_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_query(string $query, $link_identifier = NULL) {}

	/**
	 * Alias of sql_regcase()
	 * <p>This function is an alias of <code>sql_regcase()</code>.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.msql-regcase.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_regcase(string $string): string {}

	/**
	 * Get result data
	 * <p><b>msql_result()</b> returns the contents of one cell from a mSQL result set.</p><p>When working on large result sets, you should consider using one of the functions that fetch an entire row (specified below). As these functions return the contents of multiple cells in one function call, they are often much quicker than <b>msql_result()</b>.</p><p>Recommended high-performance alternatives: <code>msql_fetch_row()</code>, <code>msql_fetch_array()</code>, and <code>msql_fetch_object()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $row <p>The row offset.</p>
	 * @param mixed $field <p>Can be the field's offset, or the field's name, or the field's table dot field's name (tablename.fieldname.). If the column name has been aliased ('select foo as bar from ...'), use the alias instead of the column name.</p> <p><b>Note</b>:</p><p>Specifying a numeric field offset is much quicker than specifying a fieldname or tablename.fieldname.</p>
	 * @return string <p>Returns the contents of the cell at the row and offset in the specified mSQL result set.</p>
	 * @link http://php.net/manual/en/function.msql-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_result($result, int $row, $field = NULL): string {}

	/**
	 * Select mSQL database
	 * <p><b>msql_select_db()</b> sets the current active database on the server that's associated with the specified <code>link_identifier</code>.</p><p>Subsequent calls to <code>msql_query()</code> will be made on the active database.</p>
	 * @param string $database_name <p>The database name.</p>
	 * @param resource $link_identifier <p>The mSQL connection. If not specified, the last link opened by <code>msql_connect()</code> is assumed. If no such link is found, the function will try to establish a link as if <code>msql_connect()</code> was called, and use it.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.msql-select-db.php
	 * @see msql_connect(), msql_pconnect(), msql_query()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_select_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Alias of msql_result()
	 * <p>This function is an alias of <code>msql_result()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>msql_query()</code>.</p>
	 * @param int $row <p>The row offset.</p>
	 * @param mixed $field <p>Can be the field's offset, or the field's name, or the field's table dot field's name (tablename.fieldname.). If the column name has been aliased ('select foo as bar from ...'), use the alias instead of the column name.</p> <p><b>Note</b>:</p><p>Specifying a numeric field offset is much quicker than specifying a fieldname or tablename.fieldname.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.msql-tablename.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_tablename($result, int $row, $field = NULL): string {}

	define('MSQL_ASSOC', null);

	define('MSQL_BOTH', null);

	define('MSQL_NUM', null);

}
