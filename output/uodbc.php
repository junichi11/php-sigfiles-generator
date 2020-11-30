<?php



namespace {

	/**
	 * Toggle autocommit behaviour
	 * <p>Toggles autocommit behaviour.</p><p>By default, auto-commit is on for a connection. Disabling auto-commit is equivalent with starting a transaction.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param bool $OnOff <p>If <code>OnOff</code> is <b><code>TRUE</code></b>, auto-commit is enabled, if it is <b><code>FALSE</code></b> auto-commit is disabled.</p>
	 * @return mixed <p>Without the <code>OnOff</code> parameter, this function returns auto-commit status for <code>connection_id</code>. Non-zero is returned if auto-commit is on, 0 if it is off, or <b><code>FALSE</code></b> if an error occurs.</p><p>If <code>OnOff</code> is set, this function returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-autocommit.php
	 * @see odbc_commit(), odbc_rollback()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_autocommit($connection_id, bool $OnOff = FALSE) {}

	/**
	 * Handling of binary column data
	 * <p>Enables handling of binary column data. ODBC SQL types affected are <i>BINARY</i>, <i>VARBINARY</i>, and <i>LONGVARBINARY</i>.</p><p>When binary SQL data is converted to character C data, each byte (8 bits) of source data is represented as two ASCII characters. These characters are the ASCII character representation of the number in its hexadecimal form. For example, a binary <i>00000001</i> is converted to <i>"01"</i> and a binary <i>11111111</i> is converted to <i>"FF"</i>.</p><p>If <code>odbc_fetch_into()</code> is used, passthru means that an empty string is returned for these columns.</p>
	 * @param resource $result_id <p>The result identifier.</p> <p>If <code>result_id</code> is <i>0</i>, the settings apply as default for new results.</p><p><b>Note</b>:  Default for <i>longreadlen</i> is <i>4096</i> and <code>mode</code> defaults to <i>ODBC_BINMODE_RETURN</i>. Handling of binary long columns is also affected by <code>odbc_longreadlen()</code>. </p>
	 * @param int $mode <p>Possible values for <code>mode</code> are:</p><ul> <li>  <b><code>ODBC_BINMODE_PASSTHRU</code></b>: Passthru BINARY data  </li> <li>  <b><code>ODBC_BINMODE_RETURN</code></b>: Return as is  </li> <li>  <b><code>ODBC_BINMODE_CONVERT</code></b>: Convert to char and return  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-binmode.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_binmode($result_id, int $mode): bool {}

	/**
	 * Close an ODBC connection
	 * <p>Closes down the connection to the database server.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.odbc-close.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_close($connection_id): void {}

	/**
	 * Close all ODBC connections
	 * <p><b>odbc_close_all()</b> will close down all connections to database server(s).</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.odbc-close-all.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_close_all(): void {}

	/**
	 * Lists columns and associated privileges for the given table
	 * <p>Lists columns and associated privileges for the given table.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $qualifier <p>The qualifier.</p>
	 * @param string $owner <p>The owner.</p>
	 * @param string $table_name <p>The table name.</p>
	 * @param string $column_name <p>The column name.</p>
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure. This result identifier can be used to fetch a list of columns and associated privileges.</p><p>The result set has the following columns:</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>GRANTOR</li> <li>GRANTEE</li> <li>PRIVILEGE</li> <li>IS_GRANTABLE</li> </ul><p>The result set is ordered by TABLE_QUALIFIER, TABLE_OWNER and TABLE_NAME.</p>
	 * @link http://php.net/manual/en/function.odbc-columnprivileges.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_columnprivileges($connection_id, string $qualifier, string $owner, string $table_name, string $column_name) {}

	/**
	 * Lists the column names in specified tables
	 * <p>Lists all columns in the requested range.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $qualifier <p>The qualifier.</p>
	 * @param string $schema <p>The owner.</p>
	 * @param string $table_name <p>The table name.</p>
	 * @param string $column_name <p>The column name.</p>
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_SCHEM</li> <li>TABLE_NAME</li> <li>COLUMN_NAME</li> <li>DATA_TYPE</li> <li>TYPE_NAME</li> <li>PRECISION</li> <li>LENGTH</li> <li>SCALE</li> <li>RADIX</li> <li>NULLABLE</li> <li>REMARKS</li> </ul><p>The result set is ordered by TABLE_QUALIFIER, TABLE_SCHEM and TABLE_NAME.</p>
	 * @link http://php.net/manual/en/function.odbc-columns.php
	 * @see odbc_columnprivileges()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_columns($connection_id, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $column_name = NULL) {}

	/**
	 * Commit an ODBC transaction
	 * <p>Commits all pending transactions on the connection.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-commit.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_commit($connection_id): bool {}

	/**
	 * Connect to a datasource
	 * <p>The connection id returned by this functions is needed by other ODBC functions. You can have multiple connections open at once as long as they either use different db or different credentials.</p><p>With some ODBC drivers, executing a complex stored procedure may fail with an error similar to: "Cannot open a cursor on a stored procedure that has anything other than a single select statement in it". Using SQL_CUR_USE_ODBC may avoid that error. Also, some drivers don't support the optional row_number parameter in <code>odbc_fetch_row()</code>. SQL_CUR_USE_ODBC might help in that case, too.</p>
	 * @param string $dsn <p>The database source name for the connection. Alternatively, a DSN-less connection string can be used.</p>
	 * @param string $user <p>The username.</p>
	 * @param string $password <p>The password.</p>
	 * @param int $cursor_type <p>This sets the type of cursor to be used for this connection. This parameter is not normally needed, but can be useful for working around problems with some ODBC drivers.</p>  The following constants are defined for cursortype:  <p></p><ul> <li>  SQL_CUR_USE_IF_NEEDED  </li> <li>  SQL_CUR_USE_ODBC  </li> <li>  SQL_CUR_USE_DRIVER  </li> </ul>
	 * @return resource <p>Returns an ODBC connection or (<b><code>FALSE</code></b>) on error.</p>
	 * @link http://php.net/manual/en/function.odbc-connect.php
	 * @see odbc_pconnect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_connect(string $dsn, string $user, string $password, int $cursor_type = NULL) {}

	/**
	 * Get cursorname
	 * <p>Gets the cursorname for the given result_id.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @return string <p>Returns the cursor name, as a string.</p>
	 * @link http://php.net/manual/en/function.odbc-cursor.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_cursor($result_id): string {}

	/**
	 * Returns information about a current connection
	 * <p>This function will return the list of available DSN (after calling it several times).</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param int $fetch_type <p>The <code>fetch_type</code> can be one of two constant types: <b><code>SQL_FETCH_FIRST</code></b>, <b><code>SQL_FETCH_NEXT</code></b>. Use <b><code>SQL_FETCH_FIRST</code></b> the first time this function is called, thereafter use the <b><code>SQL_FETCH_NEXT</code></b>.</p>
	 * @return array <p>Returns <b><code>FALSE</code></b> on error, and an array upon success.</p>
	 * @link http://php.net/manual/en/function.odbc-data-source.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function odbc_data_source($connection_id, int $fetch_type): array {}

	/**
	 * Alias of odbc_exec()
	 * <p>This function is an alias of: <code>odbc_exec()</code>.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $query_string <p>The SQL statement.</p>
	 * @param int $flags <p>This parameter is currently not used.</p>
	 * @return resource
	 * @link http://php.net/manual/en/function.odbc-do.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_do($connection_id, string $query_string, int $flags = NULL) {}

	/**
	 * Get the last error code
	 * <p>Returns a six-digit ODBC state, or an empty string if there has been no errors.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return string <p>If <code>connection_id</code> is specified, the last state of that connection is returned, else the last state of any connection is returned.</p><p>This function returns meaningful value only if last odbc query failed (i.e. <code>odbc_exec()</code> returned <b><code>FALSE</code></b>).</p>
	 * @link http://php.net/manual/en/function.odbc-error.php
	 * @see odbc_errormsg(), odbc_exec()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function odbc_error($connection_id = NULL): string {}

	/**
	 * Get the last error message
	 * <p>Returns a string containing the last ODBC error message, or an empty string if there has been no errors.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return string <p>If <code>connection_id</code> is specified, the last state of that connection is returned, else the last state of any connection is returned.</p><p>This function returns meaningful value only if last odbc query failed (i.e. <code>odbc_exec()</code> returned <b><code>FALSE</code></b>).</p>
	 * @link http://php.net/manual/en/function.odbc-errormsg.php
	 * @see odbc_error(), odbc_exec()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function odbc_errormsg($connection_id = NULL): string {}

	/**
	 * Prepare and execute an SQL statement
	 * <p>Sends an SQL statement to the database server.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $query_string <p>The SQL statement.</p>
	 * @param int $flags <p>This parameter is currently not used.</p>
	 * @return resource <p>Returns an ODBC result identifier if the SQL command was executed successfully, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-exec.php
	 * @see odbc_prepare(), odbc_execute()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_exec($connection_id, string $query_string, int $flags = NULL) {}

	/**
	 * Execute a prepared statement
	 * <p>Executes a statement prepared with <code>odbc_prepare()</code>.</p>
	 * @param resource $result_id <p>The result id <code>resource</code>, from <code>odbc_prepare()</code>.</p>
	 * @param array $parameters_array <p>Parameters in <code>parameter_array</code> will be substituted for placeholders in the prepared statement in order. Elements of this array will be converted to strings by calling this function.</p> <p>Any parameters in <code>parameter_array</code> which start and end with single quotes will be taken as the name of a file to read and send to the database server as the data for the appropriate placeholder.</p>  If you wish to store a string which actually begins and ends with single quotes, you must add a space or other non-single-quote character to the beginning or end of the parameter, which will prevent the parameter from being taken as a file name. If this is not an option, then you must use another mechanism to store the string, such as executing the query directly with <code>odbc_exec()</code>).
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-execute.php
	 * @see odbc_prepare()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_execute($result_id, array $parameters_array = NULL): bool {}

	/**
	 * Fetch a result row as an associative array
	 * <p>Fetch an associative <code>array</code> from an ODBC query.</p>
	 * @param resource $result <p>The result resource from <code>odbc_exec()</code>.</p>
	 * @param int $rownumber <p>Optionally choose which row number to retrieve.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.odbc-fetch-array.php
	 * @see odbc_fetch_row(), odbc_fetch_object(), odbc_num_rows()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function odbc_fetch_array($result, int $rownumber = NULL): array {}

	/**
	 * Fetch one result row into array
	 * <p>Fetch one result row into <code>array</code>.</p>
	 * @param resource $result_id <p>The result <code>resource</code>.</p>
	 * @param array $result_array <p>The result <code>array</code> that can be of any type since it will be converted to type array. The array will contain the column values starting at array index 0.</p>
	 * @param int $rownumber <p>The row number.</p>
	 * @return int <p>Returns the number of columns in the result; <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-fetch-into.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_fetch_into($result_id, array &$result_array, int $rownumber = NULL): int {}

	/**
	 * Fetch a result row as an object
	 * <p>Fetch an <code>object</code> from an ODBC query.</p>
	 * @param resource $result <p>The result resource from <code>odbc_exec()</code>.</p>
	 * @param int $rownumber <p>Optionally choose which row number to retrieve.</p>
	 * @return object <p>Returns an object that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.odbc-fetch-object.php
	 * @see odbc_fetch_row(), odbc_fetch_array(), odbc_num_rows()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function odbc_fetch_object($result, int $rownumber = NULL): object {}

	/**
	 * Fetch a row
	 * <p>Fetches a row of the data that was returned by <code>odbc_do()</code> or <code>odbc_exec()</code>. After <b>odbc_fetch_row()</b> is called, the fields of that row can be accessed with <code>odbc_result()</code>.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $row_number <p>If <code>row_number</code> is not specified, <b>odbc_fetch_row()</b> will try to fetch the next row in the result set. Calls to <b>odbc_fetch_row()</b> with and without <code>row_number</code> can be mixed.</p> <p>To step through the result more than once, you can call <b>odbc_fetch_row()</b> with <code>row_number</code> 1, and then continue doing <b>odbc_fetch_row()</b> without <code>row_number</code> to review the result. If a driver doesn't support fetching rows by number, the <code>row_number</code> parameter is ignored.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there was a row, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.odbc-fetch-row.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_fetch_row($result_id, int $row_number = 1): bool {}

	/**
	 * Get the length (precision) of a field
	 * <p>Gets the length of the field referenced by number in the given result identifier.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $field_number <p>The field number. Field numbering starts at 1.</p>
	 * @return int <p>Returns the field length, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-field-len.php
	 * @see odbc_field_scale()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_len($result_id, int $field_number): int {}

	/**
	 * Get the columnname
	 * <p>Gets the name of the field occupying the given column number in the given result identifier.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $field_number <p>The field number. Field numbering starts at 1.</p>
	 * @return string <p>Returns the field name as a string, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-field-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_name($result_id, int $field_number): string {}

	/**
	 * Return column number
	 * <p>Gets the number of the column slot that corresponds to the named field in the given result identifier.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param string $field_name <p>The field name.</p>
	 * @return int <p>Returns the field number as a integer, or <b><code>FALSE</code></b> on error. Field numbering starts at 1.</p>
	 * @link http://php.net/manual/en/function.odbc-field-num.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_num($result_id, string $field_name): int {}

	/**
	 * Alias of odbc_field_len()
	 * <p>This function is an alias of: <code>odbc_field_len()</code>.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $field_number <p>The field number. Field numbering starts at 1.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.odbc-field-precision.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_precision($result_id, int $field_number): int {}

	/**
	 * Get the scale of a field
	 * <p>Gets the scale of the field referenced by number in the given result identifier.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $field_number <p>The field number. Field numbering starts at 1.</p>
	 * @return int <p>Returns the field scale as a integer, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-field-scale.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_scale($result_id, int $field_number): int {}

	/**
	 * Datatype of a field
	 * <p>Gets the SQL type of the field referenced by number in the given result identifier.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $field_number <p>The field number. Field numbering starts at 1.</p>
	 * @return string <p>Returns the field type as a string, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-field-type.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_type($result_id, int $field_number): string {}

	/**
	 * Retrieves a list of foreign keys
	 * <p>Retrieves a list of foreign keys in the specified table or a list of foreign keys in other tables that refer to the primary key in the specified table</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $pk_qualifier <p>The primary key qualifier.</p>
	 * @param string $pk_owner <p>The primary key owner.</p>
	 * @param string $pk_table <p>The primary key table.</p>
	 * @param string $fk_qualifier <p>The foreign key qualifier.</p>
	 * @param string $fk_owner <p>The foreign key owner.</p>
	 * @param string $fk_table <p>The foreign key table.</p>
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>PKTABLE_QUALIFIER</li> <li>PKTABLE_OWNER</li> <li>PKTABLE_NAME</li> <li>PKCOLUMN_NAME</li> <li>FKTABLE_QUALIFIER</li> <li>FKTABLE_OWNER</li> <li>FKTABLE_NAME</li> <li>FKCOLUMN_NAME</li> <li>KEY_SEQ</li> <li>UPDATE_RULE</li> <li>DELETE_RULE</li> <li>FK_NAME</li> <li>PK_NAME</li> </ul><p>If <code>pk_table</code> contains a table name, <b>odbc_foreignkeys()</b> returns a result set containing the primary key of the specified table and all of the foreign keys that refer to it.</p><p>If <code>fk_table</code> contains a table name, <b>odbc_foreignkeys()</b> returns a result set containing all of the foreign keys in the specified table and the primary keys (in other tables) to which they refer.</p><p>If both <code>pk_table</code> and <code>fk_table</code> contain table names, <b>odbc_foreignkeys()</b> returns the foreign keys in the table specified in <code>fk_table</code> that refer to the primary key of the table specified in <code>pk_table</code>. This should be one key at most.</p>
	 * @link http://php.net/manual/en/function.odbc-foreignkeys.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_foreignkeys($connection_id, string $pk_qualifier, string $pk_owner, string $pk_table, string $fk_qualifier, string $fk_owner, string $fk_table) {}

	/**
	 * Free resources associated with a result
	 * <p>Free resources associated with a result.</p><p><b>odbc_free_result()</b> only needs to be called if you are worried about using too much memory while your script is running. All result memory will automatically be freed when the script is finished.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.odbc-free-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_free_result($result_id): bool {}

	/**
	 * Retrieves information about data types supported by the data source
	 * <p>Retrieves information about data types supported by the data source.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param int $data_type <p>The data type, which can be used to restrict the information to a single data type.</p>
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TYPE_NAME</li> <li>DATA_TYPE</li> <li>PRECISION</li> <li>LITERAL_PREFIX</li> <li>LITERAL_SUFFIX</li> <li>CREATE_PARAMS</li> <li>NULLABLE</li> <li>CASE_SENSITIVE</li> <li>SEARCHABLE</li> <li>UNSIGNED_ATTRIBUTE</li> <li>MONEY</li> <li>AUTO_INCREMENT</li> <li>LOCAL_TYPE_NAME</li> <li>MINIMUM_SCALE</li> <li>MAXIMUM_SCALE</li> </ul><p>The result set is ordered by DATA_TYPE and TYPE_NAME.</p>
	 * @link http://php.net/manual/en/function.odbc-gettypeinfo.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_gettypeinfo($connection_id, int $data_type = NULL) {}

	/**
	 * Handling of LONG columns
	 * <p>Enables handling of LONG and LONGVARBINARY columns.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param int $length <p>The number of bytes returned to PHP is controlled by the parameter length. If it is set to 0, Long column data is passed through to the client.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-longreadlen.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_longreadlen($result_id, int $length): bool {}

	/**
	 * Checks if multiple results are available
	 * <p>Checks if there are more result sets available as well as allowing access to the next result set via <code>odbc_fetch_array()</code>, <code>odbc_fetch_row()</code>, <code>odbc_result()</code>, etc.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more result sets, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.odbc-next-result.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function odbc_next_result($result_id): bool {}

	/**
	 * Number of columns in a result
	 * <p>Gets the number of fields (columns) in an ODBC result.</p>
	 * @param resource $result_id <p>The result identifier returned by <code>odbc_exec()</code>.</p>
	 * @return int <p>Returns the number of fields, or -1 on error.</p>
	 * @link http://php.net/manual/en/function.odbc-num-fields.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_num_fields($result_id): int {}

	/**
	 * Number of rows in a result
	 * <p>Gets the number of rows in a result. For INSERT, UPDATE and DELETE statements <b>odbc_num_rows()</b> returns the number of rows affected. For a SELECT clause this <i>can</i> be the number of rows available.</p>
	 * @param resource $result_id <p>The result identifier returned by <code>odbc_exec()</code>.</p>
	 * @return int <p>Returns the number of rows in an ODBC result. This function will return -1 on error.</p>
	 * @link http://php.net/manual/en/function.odbc-num-rows.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_num_rows($result_id): int {}

	/**
	 * Open a persistent database connection
	 * <p>Opens a persistent database connection.</p><p>This function is much like <code>odbc_connect()</code>, except that the connection is not really closed when the script has finished. Future requests for a connection with the same <code>dsn</code>, <code>user</code>, <code>password</code> combination (via <code>odbc_connect()</code> and <b>odbc_pconnect()</b>) can reuse the persistent connection.</p>
	 * @param string $dsn
	 * @param string $user
	 * @param string $password
	 * @param int $cursor_type
	 * @return resource <p>Returns an ODBC connection id or 0 (<b><code>FALSE</code></b>) on error.</p>
	 * @link http://php.net/manual/en/function.odbc-pconnect.php
	 * @see odbc_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_pconnect(string $dsn, string $user, string $password, int $cursor_type = NULL) {}

	/**
	 * Prepares a statement for execution
	 * <p>Prepares a statement for execution. The result identifier can be used later to execute the statement with <code>odbc_execute()</code>.</p><p>Some databases (such as IBM DB2, MS SQL Server, and Oracle) support stored procedures that accept parameters of type IN, INOUT, and OUT as defined by the ODBC specification. However, the Unified ODBC driver currently only supports parameters of type IN to stored procedures.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $query_string <p>The query string statement being prepared.</p>
	 * @return resource <p>Returns an ODBC result identifier if the SQL command was prepared successfully. Returns <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-prepare.php
	 * @see odbc_execute()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_prepare($connection_id, string $query_string) {}

	/**
	 * Gets the primary keys for a table
	 * <p>Returns a result identifier that can be used to fetch the column names that comprise the primary key for a table.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $qualifier
	 * @param string $owner
	 * @param string $table
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>COLUMN_NAME</li> <li>KEY_SEQ</li> <li>PK_NAME</li> </ul>
	 * @link http://php.net/manual/en/function.odbc-primarykeys.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_primarykeys($connection_id, string $qualifier, string $owner, string $table) {}

	/**
	 * Retrieve information about parameters to procedures
	 * <p>Retrieve information about parameters to procedures.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return resource <p>Returns the list of input and output parameters, as well as the columns that make up the result set for the specified procedures. Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>PROCEDURE_QUALIFIER</li> <li>PROCEDURE_OWNER</li> <li>PROCEDURE_NAME</li> <li>COLUMN_NAME</li> <li>COLUMN_TYPE</li> <li>DATA_TYPE</li> <li>TYPE_NAME</li> <li>PRECISION</li> <li>LENGTH</li> <li>SCALE</li> <li>RADIX</li> <li>NULLABLE</li> <li>REMARKS</li> </ul><p>The result set is ordered by PROCEDURE_QUALIFIER, PROCEDURE_OWNER, PROCEDURE_NAME and COLUMN_TYPE.</p>
	 * @link http://php.net/manual/en/function.odbc-procedurecolumns.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_procedurecolumns($connection_id) {}

	/**
	 * Get the list of procedures stored in a specific data source
	 * <p>Lists all procedures in the requested range.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return resource <p>Returns an ODBC result identifier containing the information or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>PROCEDURE_QUALIFIER</li> <li>PROCEDURE_OWNER</li> <li>PROCEDURE_NAME</li> <li>NUM_INPUT_PARAMS</li> <li>NUM_OUTPUT_PARAMS</li> <li>NUM_RESULT_SETS</li> <li>REMARKS</li> <li>PROCEDURE_TYPE</li> </ul>
	 * @link http://php.net/manual/en/function.odbc-procedures.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_procedures($connection_id) {}

	/**
	 * Get result data
	 * <p>Get result data</p>
	 * @param resource $result_id <p>The ODBC <code>resource</code>.</p>
	 * @param mixed $field <p>The field name being retrieved. It can either be an integer containing the column number of the field you want; or it can be a string containing the name of the field.</p>
	 * @return mixed <p>Returns the string contents of the field, <b><code>FALSE</code></b> on error, <b><code>NULL</code></b> for NULL data, or <b><code>TRUE</code></b> for binary data.</p>
	 * @link http://php.net/manual/en/function.odbc-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_result($result_id, $field) {}

	/**
	 * Print result as HTML table
	 * <p>Prints all rows from a result identifier produced by <code>odbc_exec()</code>. The result is printed in HTML table format.</p>
	 * @param resource $result_id <p>The result identifier.</p>
	 * @param string $format <p>Additional overall table formatting.</p>
	 * @return int <p>Returns the number of rows in the result or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.odbc-result-all.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_result_all($result_id, string $format = NULL): int {}

	/**
	 * Rollback a transaction
	 * <p>Rolls back all pending statements on the connection.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-rollback.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_rollback($connection_id): bool {}

	/**
	 * Adjust ODBC settings
	 * <p>This function allows fiddling with the ODBC options for a particular connection or query result. It was written to help find work around to problems in quirky ODBC drivers. You should probably only use this function if you are an ODBC programmer and understand the effects the various options will have. You will certainly need a good ODBC reference to explain all the different options and values that can be used. Different driver versions support different options.</p><p>Because the effects may vary depending on the ODBC driver, use of this function in scripts to be made publicly available is strongly discouraged. Also, some ODBC options are not available to this function because they must be set before the connection is established or the query is prepared. However, if on a particular job it can make PHP work so your boss doesn't tell you to use a commercial product, that's all that really matters.</p>
	 * @param resource $id <p>Is a connection id or result id on which to change the settings. For SQLSetConnectOption(), this is a connection id. For SQLSetStmtOption(), this is a result id.</p>
	 * @param int $function <p>Is the ODBC function to use. The value should be 1 for SQLSetConnectOption() and 2 for SQLSetStmtOption().</p>
	 * @param int $option <p>The option to set.</p>
	 * @param int $param <p>The value for the given <code>option</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.odbc-setoption.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_setoption($id, int $function, int $option, int $param): bool {}

	/**
	 * Retrieves special columns
	 * <p>Retrieves either the optimal set of columns that uniquely identifies a row in the table, or columns that are automatically updated when any value in the row is updated by a transaction.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param int $type When the type argument is <b><code>SQL_BEST_ROWID</code></b>, <b>odbc_specialcolumns()</b> returns the column or columns that uniquely identify each row in the table.   When the type argument is <b><code>SQL_ROWVER</code></b>, <b>odbc_specialcolumns()</b> returns the column or columns in the specified table, if any, that are automatically updated by the data source when any value in the row is updated by any transaction.
	 * @param string $qualifier <p>The qualifier.</p>
	 * @param string $table <p>The table.</p>
	 * @param int $scope <p>The scope, which orders the result set.</p>
	 * @param int $nullable <p>The nullable option.</p>
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>SCOPE</li> <li>COLUMN_NAME</li> <li>DATA_TYPE</li> <li>TYPE_NAME</li> <li>PRECISION</li> <li>LENGTH</li> <li>SCALE</li> <li>PSEUDO_COLUMN</li> </ul>
	 * @link http://php.net/manual/en/function.odbc-specialcolumns.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_specialcolumns($connection_id, int $type, string $qualifier, string $table, int $scope, int $nullable) {}

	/**
	 * Retrieve statistics about a table
	 * <p>Get statistics about a table and its indexes.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $qualifier <p>The qualifier.</p>
	 * @param string $owner <p>The owner.</p>
	 * @param string $table_name <p>The table name.</p>
	 * @param int $unique <p>The unique attribute.</p>
	 * @param int $accuracy <p>The accuracy.</p>
	 * @return resource <p>Returns an ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>NON_UNIQUE</li> <li>INDEX_QUALIFIER</li> <li>INDEX_NAME</li> <li>TYPE</li> <li>SEQ_IN_INDEX</li> <li>COLUMN_NAME</li> <li>COLLATION</li> <li>CARDINALITY</li> <li>PAGES</li> <li>FILTER_CONDITION</li> </ul><p>The result set is ordered by NON_UNIQUE, TYPE, INDEX_QUALIFIER, INDEX_NAME and SEQ_IN_INDEX.</p>
	 * @link http://php.net/manual/en/function.odbc-statistics.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_statistics($connection_id, string $qualifier, string $owner, string $table_name, int $unique, int $accuracy) {}

	/**
	 * Lists tables and the privileges associated with each table
	 * <p>Lists tables in the requested range and the privileges associated with each table.</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $qualifier <p>The qualifier.</p>
	 * @param string $owner <p>The owner. Accepts the following search patterns: ('%' to match zero or more characters and '_' to match a single character)</p>
	 * @param string $name <p>The name. Accepts the following search patterns: ('%' to match zero or more characters and '_' to match a single character)</p>
	 * @return resource <p>An ODBC result identifier or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>GRANTOR</li> <li>GRANTEE</li> <li>PRIVILEGE</li> <li>IS_GRANTABLE</li> </ul><p>The result set is ordered by TABLE_QUALIFIER, TABLE_OWNER and TABLE_NAME.</p>
	 * @link http://php.net/manual/en/function.odbc-tableprivileges.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_tableprivileges($connection_id, string $qualifier, string $owner, string $name) {}

	/**
	 * Get the list of table names stored in a specific data source
	 * <p>Lists all tables in the requested range.</p><p>To support enumeration of qualifiers, owners, and table types, the following special semantics for the <code>qualifier</code>, <code>owner</code>, <code>name</code>, and <code>table_type</code> are available:</p>
	 * @param resource $connection_id <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $qualifier <p>The qualifier.</p>
	 * @param string $owner <p>The owner. Accepts search patterns ('%' to match zero or more characters and '_' to match a single character).</p>
	 * @param string $name <p>The name. Accepts search patterns ('%' to match zero or more characters and '_' to match a single character).</p>
	 * @param string $types <p>If <code>table_type</code> is not an empty string, it must contain a list of comma-separated values for the types of interest; each value may be enclosed in single quotes (') or unquoted. For example, "'TABLE','VIEW'" or "TABLE, VIEW". If the data source does not support a specified table type, <b>odbc_tables()</b> does not return any results for that type.</p>
	 * @return resource <p>Returns an ODBC result identifier containing the information or <b><code>FALSE</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>TABLE_TYPE</li> <li>REMARKS</li> </ul><p>The result set is ordered by TABLE_TYPE, TABLE_QUALIFIER, TABLE_OWNER and TABLE_NAME.</p>
	 * @link http://php.net/manual/en/function.odbc-tables.php
	 * @see odbc_tableprivileges()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_tables($connection_id, string $qualifier = NULL, string $owner = NULL, string $name = NULL, string $types = NULL) {}

	define('ODBC_BINMODE_CONVERT', 2);

	define('ODBC_BINMODE_PASSTHRU', 0);

	define('ODBC_BINMODE_RETURN', 1);

	define('ODBC_TYPE', 'unixODBC');

	define('SQL_BEST_ROWID', 1);

	define('SQL_BIGINT', -5);

	define('SQL_BINARY', -2);

	define('SQL_BIT', -7);

	define('SQL_CHAR', 1);

	define('SQL_CONCUR_LOCK', 2);

	define('SQL_CONCUR_READ_ONLY', 1);

	define('SQL_CONCUR_ROWVER', 3);

	define('SQL_CONCUR_VALUES', 4);

	define('SQL_CONCURRENCY', 7);

	define('SQL_CUR_USE_DRIVER', 2);

	define('SQL_CUR_USE_IF_NEEDED', 0);

	define('SQL_CUR_USE_ODBC', 1);

	define('SQL_CURSOR_DYNAMIC', 2);

	define('SQL_CURSOR_FORWARD_ONLY', 0);

	define('SQL_CURSOR_KEYSET_DRIVEN', 1);

	define('SQL_CURSOR_STATIC', 3);

	define('SQL_CURSOR_TYPE', 6);

	define('SQL_DATE', 9);

	define('SQL_DECIMAL', 3);

	define('SQL_DOUBLE', 8);

	define('SQL_ENSURE', 1);

	define('SQL_FLOAT', 6);

	define('SQL_INDEX_ALL', 1);

	define('SQL_INDEX_UNIQUE', 0);

	define('SQL_INTEGER', 4);

	define('SQL_KEYSET_SIZE', 8);

	define('SQL_LONGVARBINARY', -4);

	define('SQL_LONGVARCHAR', -1);

	define('SQL_NO_NULLS', 0);

	define('SQL_NULLABLE', 1);

	define('SQL_NUMERIC', 2);

	define('SQL_ODBC_CURSORS', 110);

	define('SQL_QUICK', 0);

	define('SQL_REAL', 7);

	define('SQL_ROWVER', 2);

	define('SQL_SCOPE_CURROW', 0);

	define('SQL_SCOPE_SESSION', 2);

	define('SQL_SCOPE_TRANSACTION', 1);

	define('SQL_SMALLINT', 5);

	define('SQL_TIME', 10);

	define('SQL_TIMESTAMP', 11);

	define('SQL_TINYINT', -6);

	define('SQL_TYPE_DATE', 91);

	define('SQL_TYPE_TIME', 92);

	define('SQL_TYPE_TIMESTAMP', 93);

	define('SQL_VARBINARY', -3);

	define('SQL_VARCHAR', 12);

}
