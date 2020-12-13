<?php



namespace {

	/**
	 * Get number of affected rows in previous MySQL operation
	 * <p>Get the number of affected rows by the last INSERT, UPDATE, REPLACE or DELETE query associated with <code>link_identifier</code>.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return int <p>Returns the number of affected rows on success, and -1 if the last query failed.</p><p>If the last query was a DELETE query with no WHERE clause, all of the records will have been deleted from the table but this function will return zero with MySQL versions prior to 4.1.2.</p><p>When using UPDATE, MySQL will not update columns where the new value is the same as the old value. This creates the possibility that <b>mysql_affected_rows()</b> may not actually equal the number of rows matched, only the number of rows that were literally affected by the query.</p><p>The REPLACE statement first deletes the record with the same primary key and then inserts the new record. This function returns the number of deleted records plus the number of inserted records.</p><p>In the case of "INSERT ... ON DUPLICATE KEY UPDATE" queries, the return value will be <code>1</code> if an insert was performed, or <code>2</code> for an update of an existing row.</p>
	 * @link https://php.net/manual/en/function.mysql-affected-rows.php
	 * @see mysql_num_rows(), mysql_info()
	 * @since PHP 4, PHP 5
	 */
	function mysql_affected_rows($link_identifier = NULL): int {}

	/**
	 * Returns the name of the character set
	 * <p>Retrieves the <code>character_set</code> variable from MySQL.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string <p>Returns the default character set name for the current connection.</p>
	 * @link https://php.net/manual/en/function.mysql-client-encoding.php
	 * @see mysql_set_charset(), mysql_real_escape_string()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_client_encoding($link_identifier = NULL): string {}

	/**
	 * Close MySQL connection
	 * <p><b>mysql_close()</b> closes the non-persistent connection to the MySQL server that's associated with the specified link identifier. If <code>link_identifier</code> isn't specified, the last opened link is used.</p><p>Open non-persistent MySQL connections and result sets are automatically destroyed when a PHP script finishes its execution. So, while explicitly closing open connections and freeing result sets is optional, doing so is recommended. This will immediately return resources to PHP and MySQL, which can improve performance. For related information, see freeing resources</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-close.php
	 * @see mysql_connect(), mysql_free_result()
	 * @since PHP 4, PHP 5
	 */
	function mysql_close($link_identifier = NULL): bool {}

	/**
	 * Open a connection to a MySQL Server
	 * <p>Opens or reuses a connection to a MySQL server.</p>
	 * @param string $server <p>The MySQL server. It can also include a port number. e.g. "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for the localhost.</p> <p>If the PHP directive  mysql.default_host is undefined (default), then the default value is 'localhost:3306'. In SQL safe mode, this parameter is ignored and value 'localhost:3306' is always used.</p>
	 * @param string $username <p>The username. Default value is defined by mysql.default_user. In SQL safe mode, this parameter is ignored and the name of the user that owns the server process is used.</p>
	 * @param string $password <p>The password. Default value is defined by mysql.default_password. In SQL safe mode, this parameter is ignored and empty password is used.</p>
	 * @param bool $new_link <p>If a second call is made to <b>mysql_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned. The <code>new_link</code> parameter modifies this behavior and makes <b>mysql_connect()</b> always open a new link, even if <b>mysql_connect()</b> was called before with the same parameters. In SQL safe mode, this parameter is ignored.</p>
	 * @param int $client_flags <p>The <code>client_flags</code> parameter can be a combination of the following constants: 128 (enable <code>LOAD DATA LOCAL</code> handling), <b><code>MYSQL_CLIENT_SSL</code></b>, <b><code>MYSQL_CLIENT_COMPRESS</code></b>, <b><code>MYSQL_CLIENT_IGNORE_SPACE</code></b> or <b><code>MYSQL_CLIENT_INTERACTIVE</code></b>. Read the section about MySQL client constants for further information. In SQL safe mode, this parameter is ignored.</p>
	 * @return resource|false <p>Returns a MySQL link identifier on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-connect.php
	 * @see mysql_pconnect(), mysql_close()
	 * @since PHP 4, PHP 5
	 */
	function mysql_connect(string $server = 'ini_get("mysql.default_host")', string $username = 'ini_get("mysql.default_user")', string $password = 'ini_get("mysql.default_password")', bool $new_link = FALSE, int $client_flags = 0) {}

	/**
	 * Create a MySQL database
	 * <p><b>mysql_create_db()</b> attempts to create a new database on the server associated with the specified link identifier.</p>
	 * @param string $database_name <p>The name of the database being created.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-create-db.php
	 * @see mysql_query(), mysql_select_db()
	 * @since PHP 4, PHP 5
	 */
	function mysql_create_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Move internal result pointer
	 * <p><b>mysql_data_seek()</b> moves the internal row pointer of the MySQL result associated with the specified result identifier to point to the specified row number. The next call to a MySQL fetch function, such as <code>mysql_fetch_assoc()</code>, would return that row.</p><p><code>row_number</code> starts at 0. The <code>row_number</code> should be a value in the range from 0 to <code>mysql_num_rows()</code> - 1. However if the result set is empty (<code>mysql_num_rows()</code> == 0), a seek to 0 will fail with an <b><code>E_WARNING</code></b> and <b>mysql_data_seek()</b> will return <b><code>FALSE</code></b>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $row_number <p>The desired row number of the new result pointer.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-data-seek.php
	 * @see mysql_query(), mysql_num_rows(), mysql_fetch_row(), mysql_fetch_assoc(), mysql_fetch_array(), mysql_fetch_object()
	 * @since PHP 4, PHP 5
	 */
	function mysql_data_seek($result, int $row_number): bool {}

	/**
	 * Retrieves database name from the call to mysql_list_dbs()
	 * <p>Retrieve the database name from a call to <code>mysql_list_dbs()</code>.</p>
	 * @param resource $result <p>The result pointer from a call to <code>mysql_list_dbs()</code>.</p>
	 * @param int $row <p>The index into the result set.</p>
	 * @param mixed $field <p>The field name.</p>
	 * @return string <p>Returns the database name on success, and <b><code>FALSE</code></b> on failure. If <b><code>FALSE</code></b> is returned, use <code>mysql_error()</code> to determine the nature of the error.</p>
	 * @link https://php.net/manual/en/function.mysql-db-name.php
	 * @see mysql_list_dbs(), mysql_tablename()
	 * @since PHP 4, PHP 5
	 */
	function mysql_db_name($result, int $row, mixed $field = NULL): string {}

	/**
	 * Selects a database and executes a query on it
	 * <p><b>mysql_db_query()</b> selects a database, and executes a query on it.</p>
	 * @param string $database <p>The name of the database that will be selected.</p>
	 * @param string $query <p>The MySQL query.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return resource|bool <p>Returns a positive MySQL result resource to the query result, or <b><code>FALSE</code></b> on error. The function also returns <b><code>TRUE</code></b>/<b><code>FALSE</code></b> for <code>INSERT</code>/<code>UPDATE</code>/<code>DELETE</code> queries to indicate success/failure.</p>
	 * @link https://php.net/manual/en/function.mysql-db-query.php
	 * @see mysql_query(), mysql_select_db()
	 * @since PHP 4, PHP 5
	 */
	function mysql_db_query(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * Drop (delete) a MySQL database
	 * <p><b>mysql_drop_db()</b> attempts to drop (remove) an entire database from the server associated with the specified link identifier. This function is deprecated, it is preferable to use <code>mysql_query()</code> to issue an sql <code>DROP DATABASE</code> statement instead.</p>
	 * @param string $database_name <p>The name of the database that will be deleted.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-drop-db.php
	 * @see mysql_query()
	 * @since PHP 4, PHP 5
	 */
	function mysql_drop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Returns the numerical value of the error message from previous MySQL operation
	 * <p>Returns the error number from the last MySQL function.</p><p>Errors coming back from the MySQL database backend no longer issue warnings. Instead, use <b>mysql_errno()</b> to retrieve the error code. Note that this function only returns the error code from the most recently executed MySQL function (not including <code>mysql_error()</code> and <b>mysql_errno()</b>), so if you want to use it, make sure you check the value before calling another MySQL function.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return int <p>Returns the error number from the last MySQL function, or <code>0</code> (zero) if no error occurred.</p>
	 * @link https://php.net/manual/en/function.mysql-errno.php
	 * @see mysql_error()
	 * @since PHP 4, PHP 5
	 */
	function mysql_errno($link_identifier = NULL): int {}

	/**
	 * Returns the text of the error message from previous MySQL operation
	 * <p>Returns the error text from the last MySQL function. Errors coming back from the MySQL database backend no longer issue warnings. Instead, use <b>mysql_error()</b> to retrieve the error text. Note that this function only returns the error text from the most recently executed MySQL function (not including <b>mysql_error()</b> and <code>mysql_errno()</code>), so if you want to use it, make sure you check the value before calling another MySQL function.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string <p>Returns the error text from the last MySQL function, or <code>''</code> (empty string) if no error occurred.</p>
	 * @link https://php.net/manual/en/function.mysql-error.php
	 * @see mysql_errno()
	 * @since PHP 4, PHP 5
	 */
	function mysql_error($link_identifier = NULL): string {}

	/**
	 * Escapes a string for use in a mysql_query
	 * <p>This function will escape the <code>unescaped_string</code>, so that it is safe to place it in a <code>mysql_query()</code>. This function is deprecated.</p><p>This function is identical to <code>mysql_real_escape_string()</code> except that <code>mysql_real_escape_string()</code> takes a connection handler and escapes the string according to the current character set. <b>mysql_escape_string()</b> does not take a connection argument and does not respect the current charset setting.</p>
	 * @param string $unescaped_string <p>The string that is to be escaped.</p>
	 * @return string <p>Returns the escaped string.</p>
	 * @link https://php.net/manual/en/function.mysql-escape-string.php
	 * @see mysql_real_escape_string(), addslashes()
	 * @since PHP 4 >= 4.0.3, PHP 5
	 */
	function mysql_escape_string(string $unescaped_string): string {}

	/**
	 * Fetch a result row as an associative array, a numeric array, or both
	 * <p>Returns an array that corresponds to the fetched row and moves the internal data pointer ahead.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $result_type <p>The type of array that is to be fetched. It's a constant and can take the following values: <b><code>MYSQL_ASSOC</code></b>, <b><code>MYSQL_NUM</code></b>, and <b><code>MYSQL_BOTH</code></b>.</p>
	 * @return array <p>Returns an array of strings that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows. The type of returned array depends on how <code>result_type</code> is defined. By using <b><code>MYSQL_BOTH</code></b> (default), you'll get an array with both associative and number indices. Using <b><code>MYSQL_ASSOC</code></b>, you only get associative indices (as <code>mysql_fetch_assoc()</code> works), using <b><code>MYSQL_NUM</code></b>, you only get number indices (as <code>mysql_fetch_row()</code> works).</p><p>If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you must use the numeric index of the column or make an alias for the column. For aliased columns, you cannot access the contents with the original column name.</p>
	 * @link https://php.net/manual/en/function.mysql-fetch-array.php
	 * @see mysql_fetch_row(), mysql_fetch_assoc(), mysql_data_seek(), mysql_query()
	 * @since PHP 4, PHP 5
	 */
	function mysql_fetch_array($result, int $result_type = MYSQL_BOTH): array {}

	/**
	 * Fetch a result row as an associative array
	 * <p>Returns an associative array that corresponds to the fetched row and moves the internal data pointer ahead. <b>mysql_fetch_assoc()</b> is equivalent to calling <code>mysql_fetch_array()</code> with MYSQL_ASSOC for the optional second parameter. It only returns an associative array.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @return array <p>Returns an associative array of strings that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p><p>If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you either need to access the result with numeric indices by using <code>mysql_fetch_row()</code> or add alias names. See the example at the <code>mysql_fetch_array()</code> description about aliases.</p>
	 * @link https://php.net/manual/en/function.mysql-fetch-assoc.php
	 * @see mysql_fetch_row(), mysql_fetch_array(), mysql_data_seek(), mysql_query(), mysql_error()
	 * @since PHP 4 >= 4.0.3, PHP 5
	 */
	function mysql_fetch_assoc($result): array {}

	/**
	 * Get column information from a result and return as an object
	 * <p>Returns an object containing field information. This function can be used to obtain information about fields in the provided query result.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. If the field offset is not specified, the next field that was not yet retrieved by this function is retrieved. The <code>field_offset</code> starts at <code>0</code>.</p>
	 * @return object <p>Returns an <code>object</code> containing field information. The properties of the object are:</p><ul> <li>  name - column name  </li> <li>  table - name of the table the column belongs to, which is the alias name if one is defined  </li> <li>  max_length - maximum length of the column  </li> <li>  not_null - 1 if the column cannot be <b><code>NULL</code></b>  </li> <li>  primary_key - 1 if the column is a primary key  </li> <li>  unique_key - 1 if the column is a unique key  </li> <li>  multiple_key - 1 if the column is a non-unique key  </li> <li>  numeric - 1 if the column is numeric  </li> <li>  blob - 1 if the column is a BLOB  </li> <li>  type - the type of the column  </li> <li>  unsigned - 1 if the column is unsigned  </li> <li>  zerofill - 1 if the column is zero-filled  </li> </ul>
	 * @link https://php.net/manual/en/function.mysql-fetch-field.php
	 * @see mysql_field_seek()
	 * @since PHP 4, PHP 5
	 */
	function mysql_fetch_field($result, int $field_offset = 0): object {}

	/**
	 * Get the length of each output in a result
	 * <p>Returns an array that corresponds to the lengths of each field in the last row fetched by MySQL.</p><p><b>mysql_fetch_lengths()</b> stores the lengths of each result column in the last row returned by <code>mysql_fetch_row()</code>, <code>mysql_fetch_assoc()</code>, <code>mysql_fetch_array()</code>, and <code>mysql_fetch_object()</code> in an array, starting at offset 0.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @return array|false <p>An <code>array</code> of lengths on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-fetch-lengths.php
	 * @see mysql_field_len(), mysql_fetch_row(), strlen()
	 * @since PHP 4, PHP 5
	 */
	function mysql_fetch_lengths($result): array|false {}

	/**
	 * Fetch a result row as an object
	 * <p>Returns an object with properties that correspond to the fetched row and moves the internal data pointer ahead.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param string $class_name <p>The name of the class to instantiate, set the properties of and return. If not specified, a <b>stdClass</b> object is returned.</p>
	 * @param array $params <p>An optional <code>array</code> of parameters to pass to the constructor for <code>class_name</code> objects.</p>
	 * @return object <p>Returns an <code>object</code> with string properties that correspond to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link https://php.net/manual/en/function.mysql-fetch-object.php
	 * @see mysql_fetch_array(), mysql_fetch_assoc(), mysql_fetch_row(), mysql_data_seek(), mysql_query()
	 * @since PHP 4, PHP 5
	 */
	function mysql_fetch_object($result, string $class_name = NULL, array $params = NULL): object {}

	/**
	 * Get a result row as an enumerated array
	 * <p>Returns a numerical array that corresponds to the fetched row and moves the internal data pointer ahead.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @return array <p>Returns an numerical array of strings that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p><p><b>mysql_fetch_row()</b> fetches one row of data from the result associated with the specified result identifier. The row is returned as an array. Each result column is stored in an array offset, starting at offset 0.</p>
	 * @link https://php.net/manual/en/function.mysql-fetch-row.php
	 * @see mysql_fetch_array(), mysql_fetch_assoc(), mysql_fetch_object(), mysql_data_seek(), mysql_fetch_lengths(), mysql_result()
	 * @since PHP 4, PHP 5
	 */
	function mysql_fetch_row($result): array {}

	/**
	 * Get the flags associated with the specified field in a result
	 * <p><b>mysql_field_flags()</b> returns the field flags of the specified field. The flags are reported as a single word per flag separated by a single space, so that you can split the returned value using <code>explode()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <code>0</code>. If <code>field_offset</code> does not exist, an error of level <b><code>E_WARNING</code></b> is also issued.</p>
	 * @return string|false <p>Returns a string of flags associated with the result or <b><code>FALSE</code></b> on failure.</p><p>The following flags are reported, if your version of MySQL is current enough to support them: <code>"not_null"</code>, <code>"primary_key"</code>, <code>"unique_key"</code>, <code>"multiple_key"</code>, <code>"blob"</code>, <code>"unsigned"</code>, <code>"zerofill"</code>, <code>"binary"</code>, <code>"enum"</code>, <code>"auto_increment"</code> and <code>"timestamp"</code>.</p>
	 * @link https://php.net/manual/en/function.mysql-field-flags.php
	 * @see mysql_field_type(), mysql_field_len()
	 * @since PHP 4, PHP 5
	 */
	function mysql_field_flags($result, int $field_offset): string|false {}

	/**
	 * Returns the length of the specified field
	 * <p><b>mysql_field_len()</b> returns the length of the specified field.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <code>0</code>. If <code>field_offset</code> does not exist, an error of level <b><code>E_WARNING</code></b> is also issued.</p>
	 * @return int|false <p>The length of the specified field index on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-field-len.php
	 * @see mysql_fetch_lengths(), strlen()
	 * @since PHP 4, PHP 5
	 */
	function mysql_field_len($result, int $field_offset): int|false {}

	/**
	 * Get the name of the specified field in a result
	 * <p><b>mysql_field_name()</b> returns the name of the specified field index.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <code>0</code>. If <code>field_offset</code> does not exist, an error of level <b><code>E_WARNING</code></b> is also issued.</p>
	 * @return string|false <p>The name of the specified field index on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-field-name.php
	 * @see mysql_field_type(), mysql_field_len()
	 * @since PHP 4, PHP 5
	 */
	function mysql_field_name($result, int $field_offset): string|false {}

	/**
	 * Set result pointer to a specified field offset
	 * <p>Seeks to the specified field offset. If the next call to <code>mysql_fetch_field()</code> doesn't include a field offset, the field offset specified in <b>mysql_field_seek()</b> will be returned.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <code>0</code>. If <code>field_offset</code> does not exist, an error of level <b><code>E_WARNING</code></b> is also issued.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-field-seek.php
	 * @see mysql_fetch_field()
	 * @since PHP 4, PHP 5
	 */
	function mysql_field_seek($result, int $field_offset): bool {}

	/**
	 * Get name of the table the specified field is in
	 * <p>Returns the name of the table that the specified field is in.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <code>0</code>. If <code>field_offset</code> does not exist, an error of level <b><code>E_WARNING</code></b> is also issued.</p>
	 * @return string <p>The name of the table on success.</p>
	 * @link https://php.net/manual/en/function.mysql-field-table.php
	 * @see mysql_list_tables()
	 * @since PHP 4, PHP 5
	 */
	function mysql_field_table($result, int $field_offset): string {}

	/**
	 * Get the type of the specified field in a result
	 * <p><b>mysql_field_type()</b> is similar to the <code>mysql_field_name()</code> function. The arguments are identical, but the field type is returned instead.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $field_offset <p>The numerical field offset. The <code>field_offset</code> starts at <code>0</code>. If <code>field_offset</code> does not exist, an error of level <b><code>E_WARNING</code></b> is also issued.</p>
	 * @return string <p>The returned field type will be one of <code>"int"</code>, <code>"real"</code>, <code>"string"</code>, <code>"blob"</code>, and others as detailed in the MySQL documentation.</p>
	 * @link https://php.net/manual/en/function.mysql-field-type.php
	 * @see mysql_field_name(), mysql_field_len()
	 * @since PHP 4, PHP 5
	 */
	function mysql_field_type($result, int $field_offset): string {}

	/**
	 * Free result memory
	 * <p><b>mysql_free_result()</b> will free all memory associated with the result identifier <code>result</code>.</p><p><b>mysql_free_result()</b> only needs to be called if you are concerned about how much memory is being used for queries that return large result sets. All associated result memory is automatically freed at the end of the script's execution.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If a non-resource is used for the <code>result</code>, an error of level E_WARNING will be emitted. It's worth noting that <code>mysql_query()</code> only returns a <code>resource</code> for SELECT, SHOW, EXPLAIN, and DESCRIBE queries.</p>
	 * @link https://php.net/manual/en/function.mysql-free-result.php
	 * @see mysql_query(), is_resource()
	 * @since PHP 4, PHP 5
	 */
	function mysql_free_result($result): bool {}

	/**
	 * Get MySQL client info
	 * <p><b>mysql_get_client_info()</b> returns a string that represents the client library version.</p>
	 * @return string <p>The MySQL client version.</p>
	 * @link https://php.net/manual/en/function.mysql-get-client-info.php
	 * @see mysql_get_host_info(), mysql_get_proto_info(), mysql_get_server_info()
	 * @since PHP 4 >= 4.0.5, PHP 5
	 */
	function mysql_get_client_info(): string {}

	/**
	 * Get MySQL host info
	 * <p>Describes the type of connection in use for the connection, including the server host name.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string|false <p>Returns a string describing the type of MySQL connection in use for the connection or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-get-host-info.php
	 * @see mysql_get_client_info(), mysql_get_proto_info(), mysql_get_server_info()
	 * @since PHP 4 >= 4.0.5, PHP 5
	 */
	function mysql_get_host_info($link_identifier = NULL): string|false {}

	/**
	 * Get MySQL protocol info
	 * <p>Retrieves the MySQL protocol.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return int|false <p>Returns the MySQL protocol on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-get-proto-info.php
	 * @see mysql_get_client_info(), mysql_get_host_info(), mysql_get_server_info()
	 * @since PHP 4 >= 4.0.5, PHP 5
	 */
	function mysql_get_proto_info($link_identifier = NULL): int|false {}

	/**
	 * Get MySQL server info
	 * <p>Retrieves the MySQL server version.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string|false <p>Returns the MySQL server version on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-get-server-info.php
	 * @see mysql_get_client_info(), mysql_get_host_info(), mysql_get_proto_info(), phpversion()
	 * @since PHP 4 >= 4.0.5, PHP 5
	 */
	function mysql_get_server_info($link_identifier = NULL): string|false {}

	/**
	 * Get information about the most recent query
	 * <p>Returns detailed information about the last query.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string <p>Returns information about the statement on success, or <b><code>FALSE</code></b> on failure. See the example below for which statements provide information, and what the returned value may look like. Statements that are not listed will return <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.mysql-info.php
	 * @see mysql_affected_rows(), mysql_insert_id(), mysql_stat()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_info($link_identifier = NULL): string {}

	/**
	 * Get the ID generated in the last query
	 * <p>Retrieves the ID generated for an AUTO_INCREMENT column by the previous query (usually INSERT).</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return int <p>The ID generated for an AUTO_INCREMENT column by the previous query on success, <code>0</code> if the previous query does not generate an AUTO_INCREMENT value, or <b><code>FALSE</code></b> if no MySQL connection was established.</p>
	 * @link https://php.net/manual/en/function.mysql-insert-id.php
	 * @see mysql_query(), mysql_info()
	 * @since PHP 4, PHP 5
	 */
	function mysql_insert_id($link_identifier = NULL): int {}

	/**
	 * List databases available on a MySQL server
	 * <p>Returns a result pointer containing the databases available from the current mysql daemon.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return resource <p>Returns a result pointer <code>resource</code> on success, or <b><code>FALSE</code></b> on failure. Use the <code>mysql_tablename()</code> function to traverse this result pointer, or any function for result tables, such as <code>mysql_fetch_array()</code>.</p>
	 * @link https://php.net/manual/en/function.mysql-list-dbs.php
	 * @see mysql_db_name(), mysql_select_db()
	 * @since PHP 4, PHP 5
	 */
	function mysql_list_dbs($link_identifier = NULL) {}

	/**
	 * List MySQL table fields
	 * <p>Retrieves information about the given table name.</p><p>This function is deprecated. It is preferable to use <code>mysql_query()</code> to issue an SQL <code>SHOW COLUMNS FROM table [LIKE 'name']</code> statement instead.</p>
	 * @param string $database_name <p>The name of the database that's being queried.</p>
	 * @param string $table_name <p>The name of the table that's being queried.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return resource <p>A result pointer <code>resource</code> on success, or <b><code>FALSE</code></b> on failure.</p><p>The returned result can be used with <code>mysql_field_flags()</code>, <code>mysql_field_len()</code>, <code>mysql_field_name()</code> and <code>mysql_field_type()</code>.</p>
	 * @link https://php.net/manual/en/function.mysql-list-fields.php
	 * @see mysql_field_flags(), mysql_info()
	 * @since PHP 4, PHP 5
	 */
	function mysql_list_fields(string $database_name, string $table_name, $link_identifier = NULL) {}

	/**
	 * List MySQL processes
	 * <p>Retrieves the current MySQL server threads.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return resource|false <p>A result pointer <code>resource</code> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-list-processes.php
	 * @see mysql_thread_id(), mysql_stat()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_list_processes($link_identifier = NULL) {}

	/**
	 * List tables in a MySQL database
	 * <p>Retrieves a list of table names from a MySQL database.</p><p>This function is deprecated. It is preferable to use <code>mysql_query()</code> to issue an SQL <code>SHOW TABLES [FROM db_name] [LIKE 'pattern']</code> statement instead.</p>
	 * @param string $database <p>The name of the database</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return resource|false <p>A result pointer <code>resource</code> on success or <b><code>FALSE</code></b> on failure.</p><p>Use the <code>mysql_tablename()</code> function to traverse this result pointer, or any function for result tables, such as <code>mysql_fetch_array()</code>.</p>
	 * @link https://php.net/manual/en/function.mysql-list-tables.php
	 * @see mysql_list_dbs(), mysql_tablename()
	 * @since PHP 4, PHP 5
	 */
	function mysql_list_tables(string $database, $link_identifier = NULL) {}

	/**
	 * Get number of fields in result
	 * <p>Retrieves the number of fields from a query.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @return int|false <p>Returns the number of fields in the result set <code>resource</code> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-num-fields.php
	 * @see mysql_select_db(), mysql_query(), mysql_fetch_field(), mysql_num_rows()
	 * @since PHP 4, PHP 5
	 */
	function mysql_num_fields($result): int|false {}

	/**
	 * Get number of rows in result
	 * <p>Retrieves the number of rows from a result set. This command is only valid for statements like SELECT or SHOW that return an actual result set. To retrieve the number of rows affected by a INSERT, UPDATE, REPLACE or DELETE query, use <code>mysql_affected_rows()</code>.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @return int|false <p>The number of rows in a result set on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-num-rows.php
	 * @see mysql_affected_rows(), mysql_connect(), mysql_data_seek(), mysql_select_db(), mysql_query()
	 * @since PHP 4, PHP 5
	 */
	function mysql_num_rows($result): int|false {}

	/**
	 * Open a persistent connection to a MySQL server
	 * <p>Establishes a persistent connection to a MySQL server.</p><p><b>mysql_pconnect()</b> acts very much like <code>mysql_connect()</code> with two major differences.</p><p>First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, username and password. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>mysql_close()</code> will not close links established by <b>mysql_pconnect()</b>).</p><p>This type of link is therefore called 'persistent'.</p>
	 * @param string $server <p>The MySQL server. It can also include a port number. e.g. "hostname:port" or a path to a local socket e.g. ":/path/to/socket" for the localhost.</p> <p>If the PHP directive  mysql.default_host is undefined (default), then the default value is 'localhost:3306'</p>
	 * @param string $username <p>The username. Default value is the name of the user that owns the server process.</p>
	 * @param string $password <p>The password. Default value is an empty password.</p>
	 * @param int $client_flags <p>The <code>client_flags</code> parameter can be a combination of the following constants: 128 (enable <code>LOAD DATA LOCAL</code> handling), <b><code>MYSQL_CLIENT_SSL</code></b>, <b><code>MYSQL_CLIENT_COMPRESS</code></b>, <b><code>MYSQL_CLIENT_IGNORE_SPACE</code></b> or <b><code>MYSQL_CLIENT_INTERACTIVE</code></b>.</p>
	 * @return resource <p>Returns a MySQL persistent link identifier on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-pconnect.php
	 * @see mysql_connect()
	 * @since PHP 4, PHP 5
	 */
	function mysql_pconnect(string $server = 'ini_get("mysql.default_host")', string $username = 'ini_get("mysql.default_user")', string $password = 'ini_get("mysql.default_password")', int $client_flags = 0) {}

	/**
	 * Ping a server connection or reconnect if there is no connection
	 * <p>Checks whether or not the connection to the server is working. If it has gone down, an automatic reconnection is attempted. This function can be used by scripts that remain idle for a long while, to check whether or not the server has closed the connection and reconnect if necessary.</p><p><b>Note</b>:</p><p>Automatic reconnection is disabled by default in versions of MySQL &gt;= 5.0.3.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the connection to the server MySQL server is working, otherwise <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.mysql-ping.php
	 * @see mysql_thread_id(), mysql_list_processes()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_ping($link_identifier = NULL): bool {}

	/**
	 * Send a MySQL query
	 * <p><b>mysql_query()</b> sends a unique query (multiple queries are not supported) to the currently active database on the server that's associated with the specified <code>link_identifier</code>.</p>
	 * @param string $query <p>An SQL query</p> <p>The query string should not end with a semicolon. Data inside the query should be properly escaped.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return mixed <p>For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements returning resultset, <b>mysql_query()</b> returns a <code>resource</code> on success, or <b><code>FALSE</code></b> on error.</p><p>For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc, <b>mysql_query()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p><p>The returned result resource should be passed to <code>mysql_fetch_array()</code>, and other functions for dealing with result tables, to access the returned data.</p><p>Use <code>mysql_num_rows()</code> to find out how many rows were returned for a SELECT statement or <code>mysql_affected_rows()</code> to find out how many rows were affected by a DELETE, INSERT, REPLACE, or UPDATE statement.</p><p><b>mysql_query()</b> will also fail and return <b><code>FALSE</code></b> if the user does not have permission to access the table(s) referenced by the query.</p>
	 * @link https://php.net/manual/en/function.mysql-query.php
	 * @see mysql_connect(), mysql_error(), mysql_real_escape_string(), mysql_result(), mysql_fetch_assoc(), mysql_unbuffered_query()
	 * @since PHP 4, PHP 5
	 */
	function mysql_query(string $query, $link_identifier = NULL): mixed {}

	/**
	 * Escapes special characters in a string for use in an SQL statement
	 * <p>Escapes special characters in the <code>unescaped_string</code>, taking into account the current character set of the connection so that it is safe to place it in a <code>mysql_query()</code>. If binary data is to be inserted, this function must be used.</p><p><b>mysql_real_escape_string()</b> calls MySQL's library function mysql_real_escape_string, which prepends backslashes to the following characters: <code>\x00</code>, <code>\n</code>, <code>\r</code>, <code>\</code>, <code>'</code>, <code>"</code> and <code>\x1a</code>.</p><p>This function must always (with few exceptions) be used to make data safe before sending a query to MySQL.</p><p>The character set must be set either at the server level, or with the API function <code>mysql_set_charset()</code> for it to affect <b>mysql_real_escape_string()</b>. See the concepts section on character sets for more information.</p>
	 * @param string $unescaped_string <p>The string that is to be escaped.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string <p>Returns the escaped string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mysql-real-escape-string.php
	 * @see mysql_set_charset(), mysql_client_encoding(), addslashes(), stripslashes()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_real_escape_string(string $unescaped_string, $link_identifier = NULL): string {}

	/**
	 * Get result data
	 * <p>Retrieves the contents of one cell from a MySQL result set.</p><p>When working on large result sets, you should consider using one of the functions that fetch an entire row (specified below). As these functions return the contents of multiple cells in one function call, they're MUCH quicker than <b>mysql_result()</b>. Also, note that specifying a numeric offset for the field argument is much quicker than specifying a fieldname or tablename.fieldname argument.</p>
	 * @param resource $result <p>The result <code>resource</code> that is being evaluated. This result comes from a call to <code>mysql_query()</code>.</p>
	 * @param int $row <p>The row number from the result that's being retrieved. Row numbers start at <code>0</code>.</p>
	 * @param mixed $field <p>The name or offset of the field being retrieved.</p> <p>It can be the field's offset, the field's name, or the field's table dot field name (tablename.fieldname). If the column name has been aliased ('select foo as bar from...'), use the alias instead of the column name. If undefined, the first field is retrieved.</p>
	 * @return string <p>The contents of one cell from a MySQL result set on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-result.php
	 * @see mysql_fetch_row(), mysql_fetch_array(), mysql_fetch_assoc(), mysql_fetch_object()
	 * @since PHP 4, PHP 5
	 */
	function mysql_result($result, int $row, mixed $field = 0): string {}

	/**
	 * Select a MySQL database
	 * <p>Sets the current active database on the server that's associated with the specified link identifier. Every subsequent call to <code>mysql_query()</code> will be made on the active database.</p>
	 * @param string $database_name <p>The name of the database that is to be selected.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-select-db.php
	 * @see mysql_connect(), mysql_pconnect(), mysql_query()
	 * @since PHP 4, PHP 5
	 */
	function mysql_select_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Sets the client character set
	 * <p>Sets the default character set for the current connection.</p>
	 * @param string $charset <p>A valid character set name.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-set-charset.php
	 * @see mysql_client_encoding()
	 * @since PHP 5 >= 5.2.3
	 */
	function mysql_set_charset(string $charset, $link_identifier = NULL): bool {}

	/**
	 * Get current system status
	 * <p><b>mysql_stat()</b> returns the current server status.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return string <p>Returns a string with the status for uptime, threads, queries, open tables, flush tables and queries per second. For a complete list of other status variables, you have to use the <code>SHOW STATUS</code> SQL command. If <code>link_identifier</code> is invalid, <b><code>NULL</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.mysql-stat.php
	 * @see mysql_get_server_info(), mysql_list_processes()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_stat($link_identifier = NULL): string {}

	/**
	 * Get table name of field
	 * <p>Retrieves the table name from a <code>result</code>.</p><p>This function is deprecated. It is preferable to use <code>mysql_query()</code> to issue an SQL <code>SHOW TABLES [FROM db_name] [LIKE 'pattern']</code> statement instead.</p>
	 * @param resource $result <p>A result pointer <code>resource</code> that's returned from <code>mysql_list_tables()</code>.</p>
	 * @param int $i <p>The integer index (row/table number)</p>
	 * @return string|false <p>The name of the table on success or <b><code>FALSE</code></b> on failure.</p><p>Use the <b>mysql_tablename()</b> function to traverse this result pointer, or any function for result tables, such as <code>mysql_fetch_array()</code>.</p>
	 * @link https://php.net/manual/en/function.mysql-tablename.php
	 * @see mysql_list_tables(), mysql_field_table(), mysql_db_name()
	 * @since PHP 4, PHP 5
	 */
	function mysql_tablename($result, int $i): string|false {}

	/**
	 * Return the current thread ID
	 * <p>Retrieves the current thread ID. If the connection is lost, and a reconnect with <code>mysql_ping()</code> is executed, the thread ID will change. This means only retrieve the thread ID when needed.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return int|false <p>The thread ID on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysql-thread-id.php
	 * @see mysql_ping(), mysql_list_processes()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function mysql_thread_id($link_identifier = NULL): int|false {}

	/**
	 * Send an SQL query to MySQL without fetching and buffering the result rows
	 * <p><b>mysql_unbuffered_query()</b> sends the SQL query <code>query</code> to MySQL without automatically fetching and buffering the result rows as <code>mysql_query()</code> does. This saves a considerable amount of memory with SQL queries that produce large result sets, and you can start working on the result set immediately after the first row has been retrieved as you don't have to wait until the complete SQL query has been performed. To use <b>mysql_unbuffered_query()</b> while multiple database connections are open, you must specify the optional parameter <code>link_identifier</code> to identify which connection you want to use.</p>
	 * @param string $query <p>The SQL query to execute.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param resource $link_identifier <p>The MySQL connection. If the link identifier is not specified, the last link opened by <code>mysql_connect()</code> is assumed. If no such link is found, it will try to create one as if <code>mysql_connect()</code> had been called with no arguments. If no connection is found or established, an <b><code>E_WARNING</code></b> level error is generated.</p>
	 * @return resource <p>For SELECT, SHOW, DESCRIBE or EXPLAIN statements, <b>mysql_unbuffered_query()</b> returns a <code>resource</code> on success, or <b><code>FALSE</code></b> on error.</p><p>For other type of SQL statements, UPDATE, DELETE, DROP, etc, <b>mysql_unbuffered_query()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mysql-unbuffered-query.php
	 * @see mysql_query()
	 * @since PHP 4 >= 4.0.6, PHP 5
	 */
	function mysql_unbuffered_query(string $query, $link_identifier = NULL) {}

	/**
	 * Columns are returned into the array having the fieldname as the array index.
	 */
	define('MYSQL_ASSOC', null);

	/**
	 * Columns are returned into the array having both a numerical index and the fieldname as the array index.
	 */
	define('MYSQL_BOTH', null);

	/**
	 * Use compression protocol
	 */
	define('MYSQL_CLIENT_COMPRESS', null);

	/**
	 * Allow space after function names
	 */
	define('MYSQL_CLIENT_IGNORE_SPACE', null);

	/**
	 * Allow interactive_timeout seconds (instead of <b>wait_timeout</b>) of inactivity before closing the connection.
	 */
	define('MYSQL_CLIENT_INTERACTIVE', null);

	/**
	 * Use SSL encryption. This flag is only available with version 4.x of the MySQL client library or newer. Version 3.23.x is bundled both with PHP 4 and Windows binaries of PHP 5.
	 */
	define('MYSQL_CLIENT_SSL', null);

	/**
	 * Columns are returned into the array having a numerical index to the fields. This index starts with 0, the first field in the result.
	 */
	define('MYSQL_NUM', null);

}
