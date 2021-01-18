<?php



namespace {

	/**
	 * Toggle autocommit behaviour
	 * <p>Toggles autocommit behaviour.</p><p>By default, auto-commit is on for a connection. Disabling auto-commit is equivalent with starting a transaction.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param bool $enable <p>If <code>enable</code> is <b><code>true</code></b>, auto-commit is enabled, if it is <b><code>false</code></b> auto-commit is disabled.</p>
	 * @return int|bool <p>Without the <code>enable</code> parameter, this function returns auto-commit status for <code>odbc</code>. Non-zero is returned if auto-commit is on, 0 if it is off, or <b><code>false</code></b> if an error occurs.</p><p>If <code>enable</code> is set, this function returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-autocommit.php
	 * @see odbc_commit(), odbc_rollback()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_autocommit($odbc, bool $enable = false): int|bool {}

	/**
	 * Handling of binary column data
	 * <p>Controls handling of binary column data. ODBC SQL types affected are <code>BINARY</code>, <code>VARBINARY</code>, and <code>LONGVARBINARY</code>. The default mode can be set using the uodbc.defaultbinmode php.ini directive.</p><p>When binary SQL data is converted to character C data (<b><code>ODBC_BINMODE_CONVERT</code></b>), each byte (8 bits) of source data is represented as two ASCII characters. These characters are the ASCII character representation of the number in its hexadecimal form. For example, a binary <code>00000001</code> is converted to <code>"01"</code> and a binary <code>11111111</code> is converted to <code>"FF"</code>.</p><p>While the handling of <code>BINARY</code> and <code>VARBINARY</code> columns only depend on the binmode, the handling of <code>LONGVARBINARY</code> columns also depends on the longreadlen as well:</p><p>If <code>odbc_fetch_into()</code> is used, passthru means that an empty string is returned for these columns. If <code>odbc_result()</code> is used, passthru means that the data are sent directly to the client (i.e. printed).</p>
	 * @param resource $statement <p>The result identifier.</p> <p>If <code>statement</code> is <code>0</code>, the settings apply as default for new results.</p>
	 * @param int $mode <p>Possible values for <code>mode</code> are:</p><ul> <li>  <b><code>ODBC_BINMODE_PASSTHRU</code></b>: Passthru BINARY data  </li> <li>  <b><code>ODBC_BINMODE_RETURN</code></b>: Return as is  </li> <li>  <b><code>ODBC_BINMODE_CONVERT</code></b>: Convert to char and return  </li> </ul> <p><b>Note</b>:  Handling of binary long columns is also affected by <code>odbc_longreadlen()</code>. </p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-binmode.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_binmode($statement, int $mode): bool {}

	/**
	 * Close an ODBC connection
	 * <p>Closes down the connection to the database server.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.odbc-close.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_close($odbc): void {}

	/**
	 * Close all ODBC connections
	 * <p><b>odbc_close_all()</b> will close down all connections to database server(s).</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.odbc-close-all.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_close_all(): void {}

	/**
	 * Lists columns and associated privileges for the given table
	 * <p>Lists columns and associated privileges for the given table.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string $schema <p>The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string $table <p>The table name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string $column <p>The column name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure. This result identifier can be used to fetch a list of columns and associated privileges.</p><p>The result set has the following columns:</p><ul> <li><code>TABLE_CAT</code></li> <li><code>TABLE_SCHEM</code></li> <li><code>TABLE_NAME</code></li> <li><code>COLUMN_NAME</code></li> <li><code>GRANTOR</code></li> <li><code>GRANTEE</code></li> <li><code>PRIVILEGE</code></li> <li><code>IS_GRANTABLE</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>TABLE_CAT</code>, <code>TABLE_SCHEM</code>, <code>TABLE_NAME</code>, <code>COLUMN_NAME</code> and <code>PRIVILEGE</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-columnprivileges.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_columnprivileges($odbc, string|null $catalog, string $schema, string $table, string $column) {}

	/**
	 * Lists the column names in specified tables
	 * <p>Lists all columns in the requested range.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string|null $schema <p>The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $table <p>The table name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $column <p>The column name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>TABLE_CAT</code></li> <li><code>TABLE_SCHEM</code></li> <li><code>TABLE_NAME</code></li> <li><code>COLUMN_NAME</code></li> <li><code>DATA_TYPE</code></li> <li><code>TYPE_NAME</code></li> <li><code>COLUMN_SIZE</code></li> <li><code>BUFFER_LENGTH</code></li> <li><code>DECIMAL_DIGITS</code></li> <li><code>NUM_PREC_RADIX</code></li> <li><code>NULLABLE</code></li> <li><code>REMARKS</code></li> <li><code>COLUMN_DEF</code></li> <li><code>SQL_DATA_TYPE</code></li> <li><code>SQL_DATETIME_SUB</code></li> <li><code>CHAR_OCTET_LENGTH</code></li> <li><code>ORDINAL_POSITION</code></li> <li><code>IS_NULLABLE</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>TABLE_CAT</code>, <code>TABLE_SCHEM</code>, <code>TABLE_NAME</code> and <code>ORDINAL_POSITION</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-columns.php
	 * @see odbc_columnprivileges(), odbc_procedurecolumns()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_columns($odbc, string|null $catalog = null, string|null $schema = null, string|null $table = null, string|null $column = null) {}

	/**
	 * Commit an ODBC transaction
	 * <p>Commits all pending transactions on the connection.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-commit.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_commit($odbc): bool {}

	/**
	 * Connect to a datasource
	 * <p>The connection id returned by this functions is needed by other ODBC functions. You can have multiple connections open at once as long as they either use different db or different credentials.</p><p>With some ODBC drivers, executing a complex stored procedure may fail with an error similar to: "Cannot open a cursor on a stored procedure that has anything other than a single select statement in it". Using SQL_CUR_USE_ODBC may avoid that error. Also, some drivers don't support the optional row_number parameter in <code>odbc_fetch_row()</code>. SQL_CUR_USE_ODBC might help in that case, too.</p>
	 * @param string $dsn <p>The database source name for the connection. Alternatively, a DSN-less connection string can be used.</p>
	 * @param string $user <p>The username.</p>
	 * @param string $password <p>The password.</p>
	 * @param int $cursor_option <p>This sets the type of cursor to be used for this connection. This parameter is not normally needed, but can be useful for working around problems with some ODBC drivers.</p>  The following constants are defined for cursortype:  <p></p><ul> <li>  SQL_CUR_USE_IF_NEEDED  </li> <li>  SQL_CUR_USE_ODBC  </li> <li>  SQL_CUR_USE_DRIVER  </li> </ul>
	 * @return resource|false <p>Returns an ODBC connection, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-connect.php
	 * @see odbc_pconnect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_connect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER) {}

	/**
	 * Get cursorname
	 * <p>Gets the cursorname for the given result_id.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @return string|false <p>Returns the cursor name, as a string, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-cursor.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_cursor($statement): string|false {}

	/**
	 * Returns information about available DSNs
	 * <p>This function will return the list of available DSN (after calling it several times).</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param int $fetch_type <p>The <code>fetch_type</code> can be one of two constant types: <b><code>SQL_FETCH_FIRST</code></b>, <b><code>SQL_FETCH_NEXT</code></b>. Use <b><code>SQL_FETCH_FIRST</code></b> the first time this function is called, thereafter use the <b><code>SQL_FETCH_NEXT</code></b>.</p>
	 * @return array|false <p>Returns <b><code>false</code></b> on error, an <code>array</code> upon success, and <b><code>null</code></b> after fetching the last available DSN.</p>
	 * @link https://php.net/manual/en/function.odbc-data-source.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function odbc_data_source($odbc, int $fetch_type): array|false {}

	/**
	 * Alias of odbc_exec()
	 * <p>This function is an alias of: <code>odbc_exec()</code>.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $query <p>The SQL statement.</p>
	 * @return resource|false
	 * @link https://php.net/manual/en/function.odbc-do.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_do($odbc, string $query) {}

	/**
	 * Get the last error code
	 * <p>Returns a six-digit ODBC state, or an empty string if there has been no errors.</p>
	 * @param resource|null $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return string <p>If <code>odbc</code> is specified, the last state of that connection is returned, else the last state of any connection is returned.</p><p>This function returns meaningful value only if last odbc query failed (i.e. <code>odbc_exec()</code> returned <b><code>false</code></b>).</p>
	 * @link https://php.net/manual/en/function.odbc-error.php
	 * @see odbc_errormsg(), odbc_exec()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function odbc_error($odbc = null): string {}

	/**
	 * Get the last error message
	 * <p>Returns a string containing the last ODBC error message, or an empty string if there has been no errors.</p>
	 * @param resource|null $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return string <p>If <code>odbc</code> is specified, the last state of that connection is returned, else the last state of any connection is returned.</p><p>This function returns meaningful value only if last odbc query failed (i.e. <code>odbc_exec()</code> returned <b><code>false</code></b>).</p>
	 * @link https://php.net/manual/en/function.odbc-errormsg.php
	 * @see odbc_error(), odbc_exec()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function odbc_errormsg($odbc = null): string {}

	/**
	 * Directly execute an SQL statement
	 * <p>Sends an SQL statement to the database server.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $query <p>The SQL statement.</p>
	 * @return resource|false <p>Returns an ODBC result identifier if the SQL command was executed successfully, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-exec.php
	 * @see odbc_prepare(), odbc_execute()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_exec($odbc, string $query) {}

	/**
	 * Execute a prepared statement
	 * <p>Executes a statement prepared with <code>odbc_prepare()</code>.</p>
	 * @param resource $statement <p>The result id <code>resource</code>, from <code>odbc_prepare()</code>.</p>
	 * @param array $params <p>Parameters in <code>parameter_array</code> will be substituted for placeholders in the prepared statement in order. Elements of this array will be converted to strings by calling this function.</p> <p>Any parameters in <code>parameter_array</code> which start and end with single quotes will be taken as the name of a file to read and send to the database server as the data for the appropriate placeholder.</p>  If you wish to store a string which actually begins and ends with single quotes, you must add a space or other non-single-quote character to the beginning or end of the parameter, which will prevent the parameter from being taken as a file name. If this is not an option, then you must use another mechanism to store the string, such as executing the query directly with <code>odbc_exec()</code>).
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-execute.php
	 * @see odbc_prepare()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_execute($statement, array $params = []): bool {}

	/**
	 * Fetch a result row as an associative array
	 * <p>Fetch an associative <code>array</code> from an ODBC query.</p>
	 * @param resource $statement <p>The result resource from <code>odbc_exec()</code>.</p>
	 * @param int $row <p>Optionally choose which row number to retrieve.</p>
	 * @return array|false <p>Returns an array that corresponds to the fetched row, or <b><code>false</code></b> if there are no more rows.</p>
	 * @link https://php.net/manual/en/function.odbc-fetch-array.php
	 * @see odbc_fetch_row(), odbc_fetch_object(), odbc_num_rows()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function odbc_fetch_array($statement, int $row = -1): array|false {}

	/**
	 * Fetch one result row into array
	 * <p>Fetch one result row into <code>array</code>.</p>
	 * @param resource $statement <p>The result <code>resource</code>.</p>
	 * @param array $array <p>The result <code>array</code> that can be of any type since it will be converted to type array. The array will contain the column values starting at array index 0.</p>
	 * @param int $row <p>The row number.</p>
	 * @return int|false <p>Returns the number of columns in the result; <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-fetch-into.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_fetch_into($statement, array &$array, int $row = 0): int|false {}

	/**
	 * Fetch a result row as an object
	 * <p>Fetch an <code>object</code> from an ODBC query.</p>
	 * @param resource $statement <p>The result resource from <code>odbc_exec()</code>.</p>
	 * @param int $row <p>Optionally choose which row number to retrieve.</p>
	 * @return stdClass|false <p>Returns an object that corresponds to the fetched row, or <b><code>false</code></b> if there are no more rows.</p>
	 * @link https://php.net/manual/en/function.odbc-fetch-object.php
	 * @see odbc_fetch_row(), odbc_fetch_array(), odbc_num_rows()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function odbc_fetch_object($statement, int $row = -1): \stdClass|false {}

	/**
	 * Fetch a row
	 * <p>Fetches a row of the data that was returned by <code>odbc_do()</code> or <code>odbc_exec()</code>. After <b>odbc_fetch_row()</b> is called, the fields of that row can be accessed with <code>odbc_result()</code>.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int|null $row <p>If <code>row</code> is not specified, <b>odbc_fetch_row()</b> will try to fetch the next row in the result set. Calls to <b>odbc_fetch_row()</b> with and without <code>row</code> can be mixed.</p> <p>To step through the result more than once, you can call <b>odbc_fetch_row()</b> with <code>row</code> 1, and then continue doing <b>odbc_fetch_row()</b> without <code>row</code> to review the result. If a driver doesn't support fetching rows by number, the <code>row</code> parameter is ignored.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if there was a row, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.odbc-fetch-row.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_fetch_row($statement, int|null $row = null): bool {}

	/**
	 * Get the length (precision) of a field
	 * <p>Gets the length of the field referenced by number in the given result identifier.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int $field <p>The field number. Field numbering starts at 1.</p>
	 * @return int|false <p>Returns the field length, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-field-len.php
	 * @see odbc_field_scale()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_len($statement, int $field): int|false {}

	/**
	 * Get the columnname
	 * <p>Gets the name of the field occupying the given column number in the given result identifier.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int $field <p>The field number. Field numbering starts at 1.</p>
	 * @return string|false <p>Returns the field name as a string, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-field-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_name($statement, int $field): string|false {}

	/**
	 * Return column number
	 * <p>Gets the number of the column slot that corresponds to the named field in the given result identifier.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param string $field <p>The field name.</p>
	 * @return int|false <p>Returns the field number as a integer, or <b><code>false</code></b> on error. Field numbering starts at 1.</p>
	 * @link https://php.net/manual/en/function.odbc-field-num.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_num($statement, string $field): int|false {}

	/**
	 * Alias of odbc_field_len()
	 * <p>This function is an alias of: <code>odbc_field_len()</code>.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int $field <p>The field number. Field numbering starts at 1.</p>
	 * @return int|false
	 * @link https://php.net/manual/en/function.odbc-field-precision.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_precision($statement, int $field): int|false {}

	/**
	 * Get the scale of a field
	 * <p>Gets the scale of the field referenced by number in the given result identifier.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int $field <p>The field number. Field numbering starts at 1.</p>
	 * @return int|false <p>Returns the field scale as a integer, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-field-scale.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_scale($statement, int $field): int|false {}

	/**
	 * Datatype of a field
	 * <p>Gets the SQL type of the field referenced by number in the given result identifier.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int $field <p>The field number. Field numbering starts at 1.</p>
	 * @return string|false <p>Returns the field type as a string, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-field-type.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_field_type($statement, int $field): string|false {}

	/**
	 * Retrieves a list of foreign keys
	 * <p>Retrieves a list of foreign keys in the specified table or a list of foreign keys in other tables that refer to the primary key in the specified table</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $pk_catalog <p>The catalog ('qualifier' in ODBC 2 parlance) of the foreign key table.</p>
	 * @param string $pk_schema <p>The schema ('owner' in ODBC 2 parlance) of the primary key table.</p>
	 * @param string $pk_table <p>The primary key table.</p>
	 * @param string $fk_catalog
	 * @param string $fk_schema <p>The schema ('owner' in ODBC 2 parlance) of the foreign key table.</p>
	 * @param string $fk_table <p>The foreign key table.</p>
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>PKTABLE_CAT</code></li> <li><code>PKTABLE_SCHEM</code></li> <li><code>PKTABLE_NAME</code></li> <li><code>PKCOLUMN_NAME</code></li> <li><code>FKTABLE_CAT</code></li> <li><code>FKTABLE_SCHEM</code></li> <li><code>FKTABLE_NAME</code></li> <li><code>FKCOLUMN_NAME</code></li> <li><code>KEY_SEQ</code></li> <li><code>UPDATE_RULE</code></li> <li><code>DELETE_RULE</code></li> <li><code>FK_NAME</code></li> <li><code>PK_NAME</code></li> <li><code>DEFERRABILITY</code></li> </ul> Drivers can report additional columns. <p>If the foreign keys associated with a primary key are requested, the result set is ordered by <code>FKTABLE_CAT</code>, <code>FKTABLE_SCHEM</code>, <code>FKTABLE_NAME</code> and <code>KEY_SEQ</code>. If the primary keys associated with a foreign key are requested, the result set is ordered by <code>PKTABLE_CAT</code>, <code>PKTABLE_SCHEM</code>, <code>PKTABLE_NAME</code> and <code>KEY_SEQ</code>.</p><p>If <code>pk_table</code> contains a table name, <b>odbc_foreignkeys()</b> returns a result set containing the primary key of the specified table and all of the foreign keys that refer to it.</p><p>If <code>fk_table</code> contains a table name, <b>odbc_foreignkeys()</b> returns a result set containing all of the foreign keys in the specified table and the primary keys (in other tables) to which they refer.</p><p>If both <code>pk_table</code> and <code>fk_table</code> contain table names, <b>odbc_foreignkeys()</b> returns the foreign keys in the table specified in <code>fk_table</code> that refer to the primary key of the table specified in <code>pk_table</code>. This should be one key at most.</p>
	 * @link https://php.net/manual/en/function.odbc-foreignkeys.php
	 * @see odbc_tables(), odbc_primarykeys()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_foreignkeys($odbc, string|null $pk_catalog, string $pk_schema, string $pk_table, string $fk_catalog, string $fk_schema, string $fk_table) {}

	/**
	 * Free resources associated with a result
	 * <p>Free resources associated with a result.</p><p><b>odbc_free_result()</b> only needs to be called if you are worried about using too much memory while your script is running. All result memory will automatically be freed when the script is finished.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.odbc-free-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_free_result($statement): bool {}

	/**
	 * Retrieves information about data types supported by the data source
	 * <p>Retrieves information about data types supported by the data source.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param int $data_type <p>The data type, which can be used to restrict the information to a single data type.</p>
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li>TYPE_NAME</li> <li>DATA_TYPE</li> <li>PRECISION</li> <li>LITERAL_PREFIX</li> <li>LITERAL_SUFFIX</li> <li>CREATE_PARAMS</li> <li>NULLABLE</li> <li>CASE_SENSITIVE</li> <li>SEARCHABLE</li> <li>UNSIGNED_ATTRIBUTE</li> <li>MONEY</li> <li>AUTO_INCREMENT</li> <li>LOCAL_TYPE_NAME</li> <li>MINIMUM_SCALE</li> <li>MAXIMUM_SCALE</li> </ul><p>The result set is ordered by DATA_TYPE and TYPE_NAME.</p>
	 * @link https://php.net/manual/en/function.odbc-gettypeinfo.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_gettypeinfo($odbc, int $data_type = 0) {}

	/**
	 * Handling of LONG columns
	 * <p>Controls handling of <code>LONG</code>, <code>LONGVARCHAR</code> and <code>LONGVARBINARY</code> columns. The default length can be set using the uodbc.defaultlrl php.ini directive.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param int $length <p>The number of bytes returned to PHP is controlled by the parameter length. If it is set to <code>0</code>, long column data is passed through to the client (i.e. printed) when retrieved with <code>odbc_result()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-longreadlen.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_longreadlen($statement, int $length): bool {}

	/**
	 * Checks if multiple results are available
	 * <p>Checks if there are more result sets available as well as allowing access to the next result set via <code>odbc_fetch_array()</code>, <code>odbc_fetch_row()</code>, <code>odbc_result()</code>, etc.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if there are more result sets, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.odbc-next-result.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function odbc_next_result($statement): bool {}

	/**
	 * Number of columns in a result
	 * <p>Gets the number of fields (columns) in an ODBC result.</p>
	 * @param resource $statement <p>The result identifier returned by <code>odbc_exec()</code>.</p>
	 * @return int <p>Returns the number of fields, or -1 on error.</p>
	 * @link https://php.net/manual/en/function.odbc-num-fields.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_num_fields($statement): int {}

	/**
	 * Number of rows in a result
	 * <p>Gets the number of rows in a result. For INSERT, UPDATE and DELETE statements <b>odbc_num_rows()</b> returns the number of rows affected. For a SELECT clause this <code>can</code> be the number of rows available.</p>
	 * @param resource $statement <p>The result identifier returned by <code>odbc_exec()</code>.</p>
	 * @return int <p>Returns the number of rows in an ODBC result. This function will return -1 on error.</p>
	 * @link https://php.net/manual/en/function.odbc-num-rows.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_num_rows($statement): int {}

	/**
	 * Open a persistent database connection
	 * <p>Opens a persistent database connection.</p><p>This function is much like <code>odbc_connect()</code>, except that the connection is not really closed when the script has finished. Future requests for a connection with the same <code>dsn</code>, <code>user</code>, <code>password</code> combination (via <code>odbc_connect()</code> and <b>odbc_pconnect()</b>) can reuse the persistent connection.</p>
	 * @param string $dsn
	 * @param string $user
	 * @param string $password
	 * @param int $cursor_option
	 * @return resource|false <p>Returns an ODBC connection, or <b><code>false</code></b> on failure. error.</p>
	 * @link https://php.net/manual/en/function.odbc-pconnect.php
	 * @see odbc_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_pconnect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER) {}

	/**
	 * Prepares a statement for execution
	 * <p>Prepares a statement for execution. The result identifier can be used later to execute the statement with <code>odbc_execute()</code>.</p><p>Some databases (such as IBM DB2, MS SQL Server, and Oracle) support stored procedures that accept parameters of type IN, INOUT, and OUT as defined by the ODBC specification. However, the Unified ODBC driver currently only supports parameters of type IN to stored procedures.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string $query <p>The query string statement being prepared.</p>
	 * @return resource|false <p>Returns an ODBC result identifier if the SQL command was prepared successfully. Returns <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-prepare.php
	 * @see odbc_execute()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_prepare($odbc, string $query) {}

	/**
	 * Gets the primary keys for a table
	 * <p>Returns a result identifier that can be used to fetch the column names that comprise the primary key for a table.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string $schema <p>The schema ('owner' in ODBC 2 parlance).</p>
	 * @param string $table
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>TABLE_CAT</code></li> <li><code>TABLE_SCHEM</code></li> <li><code>TABLE_NAME</code></li> <li><code>COLUMN_NAME</code></li> <li><code>KEY_SEQ</code></li> <li><code>PK_NAME</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>TABLE_CAT</code>, <code>TABLE_SCHEM</code>, <code>TABLE_NAME</code> and <code>KEY_SEQ</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-primarykeys.php
	 * @see odbc_tables(), odbc_foreignkeys()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_primarykeys($odbc, string|null $catalog, string $schema, string $table) {}

	/**
	 * Retrieve information about parameters to procedures
	 * <p>Retrieve information about parameters to procedures.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string|null $schema <p>The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $procedure <p>The proc. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $column <p>The column. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @return resource|false <p>Returns the list of input and output parameters, as well as the columns that make up the result set for the specified procedures. Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>PROCEDURE_CAT</code></li> <li><code>PROCEDURE_SCHEM</code></li> <li><code>PROCEDURE_NAME</code></li> <li><code>COLUMN_NAME</code></li> <li><code>COLUMN_TYPE</code></li> <li><code>DATA_TYPE</code></li> <li><code>TYPE_NAME</code></li> <li><code>COLUMN_SIZE</code></li> <li><code>BUFFER_LENGTH</code></li> <li><code>DECIMAL_DIGITS</code></li> <li><code>NUM_PREC_RADIX</code></li> <li><code>NULLABLE</code></li> <li><code>REMARKS</code></li> <li><code>COLUMN_DEF</code></li> <li><code>SQL_DATA_TYPE</code></li> <li><code>SQL_DATETIME_SUB</code></li> <li><code>CHAR_OCTET_LENGTH</code></li> <li><code>ORDINAL_POSITION</code></li> <li><code>IS_NULLABLE</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>PROCEDURE_CAT</code>, <code>PROCEDURE_SCHEM</code>, <code>PROCEDURE_NAME</code> and <code>COLUMN_TYPE</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-procedurecolumns.php
	 * @see odbc_columns()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_procedurecolumns($odbc, string|null $catalog = null, string|null $schema = null, string|null $procedure = null, string|null $column = null) {}

	/**
	 * Get the list of procedures stored in a specific data source
	 * <p>Lists all procedures in the requested range.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string|null $schema <p>The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $procedure <p>The name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @return resource|false <p>Returns an ODBC result identifier containing the information or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>PROCEDURE_CAT</code></li> <li><code>PROCEDURE_SCHEM</code></li> <li><code>PROCEDURE_NAME</code></li> <li><code>NUM_INPUT_PARAMS</code></li> <li><code>NUM_OUTPUT_PARAMS</code></li> <li><code>NUM_RESULT_SETS</code></li> <li><code>REMARKS</code></li> <li><code>PROCEDURE_TYPE</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>PROCEDURE_CAT</code>, <code>PROCEDURE_SCHEMA</code> and <code>PROCEDURE_NAME</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-procedures.php
	 * @see odbc_procedurecolumns(), odbc_tables()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_procedures($odbc, string|null $catalog = null, string|null $schema = null, string|null $procedure = null) {}

	/**
	 * Get result data
	 * <p>Get result data</p>
	 * @param resource $statement <p>The ODBC <code>resource</code>.</p>
	 * @param string|int $field <p>The field name being retrieved. It can either be an integer containing the column number of the field you want; or it can be a string containing the name of the field.</p>
	 * @return string|bool|null <p>Returns the string contents of the field, <b><code>false</code></b> on error, <b><code>null</code></b> for NULL data, or <b><code>true</code></b> for binary data.</p>
	 * @link https://php.net/manual/en/function.odbc-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_result($statement, string|int $field): string|bool|null {}

	/**
	 * Print result as HTML table
	 * <p>Prints all rows from a result identifier produced by <code>odbc_exec()</code>. The result is printed in HTML table format. The data is <i>not</i> escaped.</p><p>This function is not supposed to be used in production environments; it is merely meant for development purposes, to get a result set quickly rendered.</p>
	 * @param resource $statement <p>The result identifier.</p>
	 * @param string $format <p>Additional overall table formatting.</p>
	 * @return int|false <p>Returns the number of rows in the result or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.odbc-result-all.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_result_all($statement, string $format = ""): int|false {}

	/**
	 * Rollback a transaction
	 * <p>Rolls back all pending statements on the connection.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-rollback.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_rollback($odbc): bool {}

	/**
	 * Adjust ODBC settings
	 * <p>This function allows fiddling with the ODBC options for a particular connection or query result. It was written to help find work around to problems in quirky ODBC drivers. You should probably only use this function if you are an ODBC programmer and understand the effects the various options will have. You will certainly need a good ODBC reference to explain all the different options and values that can be used. Different driver versions support different options.</p><p>Because the effects may vary depending on the ODBC driver, use of this function in scripts to be made publicly available is strongly discouraged. Also, some ODBC options are not available to this function because they must be set before the connection is established or the query is prepared. However, if on a particular job it can make PHP work so your boss doesn't tell you to use a commercial product, that's all that really matters.</p>
	 * @param resource $odbc <p>Is a connection id or result id on which to change the settings. For SQLSetConnectOption(), this is a connection id. For SQLSetStmtOption(), this is a result id.</p>
	 * @param int $which <p>Is the ODBC function to use. The value should be 1 for SQLSetConnectOption() and 2 for SQLSetStmtOption().</p>
	 * @param int $option <p>The option to set.</p>
	 * @param int $value <p>The value for the given <code>option</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.odbc-setoption.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_setoption($odbc, int $which, int $option, int $value): bool {}

	/**
	 * Retrieves special columns
	 * <p>Retrieves either the optimal set of columns that uniquely identifies a row in the table, or columns that are automatically updated when any value in the row is updated by a transaction.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param int $type When the type argument is <b><code>SQL_BEST_ROWID</code></b>, <b>odbc_specialcolumns()</b> returns the column or columns that uniquely identify each row in the table.   When the type argument is <b><code>SQL_ROWVER</code></b>, <b>odbc_specialcolumns()</b> returns the column or columns in the specified table, if any, that are automatically updated by the data source when any value in the row is updated by any transaction.
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string $schema <p>The schema ('owner' in ODBC 2 parlance).</p>
	 * @param string $table <p>The table.</p>
	 * @param int $scope <p>The scope, which orders the result set. One of <b><code>SQL_SCOPE_CURROW</code></b>, <b><code>SQL_SCOPE_TRANSACTION</code></b> or <b><code>SQL_SCOPE_SESSION</code></b>.</p>
	 * @param int $nullable <p>Determines whether to return special columns that can have a NULL value. One of <b><code>SQL_NO_NULLS</code></b> or <b><code>SQL_NULLABLE </code></b>.</p>
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>SCOPE</code></li> <li><code>COLUMN_NAME</code></li> <li><code>DATA_TYPE</code></li> <li><code>TYPE_NAME</code></li> <li><code>COLUMN_SIZE</code></li> <li><code>BUFFER_LENGTH</code></li> <li><code>DECIMAL_DIGITS</code></li> <li><code>PSEUDO_COLUMN</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>SCOPE</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-specialcolumns.php
	 * @see odbc_tables()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_specialcolumns($odbc, int $type, string|null $catalog, string $schema, string $table, int $scope, int $nullable) {}

	/**
	 * Retrieve statistics about a table
	 * <p>Get statistics about a table and its indexes.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string $schema <p>The schema ('owner' in ODBC 2 parlance).</p>
	 * @param string $table <p>The table name.</p>
	 * @param int $unique <p>The type of the index. One of <b><code>SQL_INDEX_UNIQUE</code></b> or <b><code>SQL_INDEX_ALL</code></b>.</p>
	 * @param int $accuracy <p>One of <b><code>SQL_ENSURE</code></b> or <b><code>SQL_QUICK</code></b>. The latter requests that the driver retrieve the <code>CARDINALITY</code> and <code>PAGES</code> only if they are readily available from the server.</p>
	 * @return resource|false <p>Returns an ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>TABLE_CAT</code></li> <li><code>TABLE_SCHEM</code></li> <li><code>TABLE_NAME</code></li> <li><code>NON_UNIQUE</code></li> <li><code>INDEX_QUALIFIER</code></li> <li><code>INDEX_NAME</code></li> <li><code>TYPE</code></li> <li><code>ORDINAL_POSITION</code></li> <li><code>COLUMN_NAME</code></li> <li><code>ASC_OR_DESC</code></li> <li><code>CARDINALITY</code></li> <li><code>PAGES</code></li> <li><code>FILTER_CONDITION</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>NON_UNIQUE</code>, <code>TYPE</code>, <code>INDEX_QUALIFIER</code>, <code>INDEX_NAME</code> and <code>ORDINAL_POSITION</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-statistics.php
	 * @see odbc_tables()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_statistics($odbc, string|null $catalog, string $schema, string $table, int $unique, int $accuracy) {}

	/**
	 * Lists tables and the privileges associated with each table
	 * <p>Lists tables in the requested range and the privileges associated with each table.</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string $schema <p>The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string $table <p>The name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @return resource|false <p>An ODBC result identifier or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>TABLE_CAT</code></li> <li><code>TABLE_SCHEM</code></li> <li><code>TABLE_NAME</code></li> <li><code>GRANTOR</code></li> <li><code>GRANTEE</code></li> <li><code>PRIVILEGE</code></li> <li><code>IS_GRANTABLE</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>TABLE_CAT</code>, <code>TABLE_SCHEM</code>, <code>TABLE_NAME</code>, <code>PRIVILEGE</code> and <code>GRANTEE</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-tableprivileges.php
	 * @see odbc_tables()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_tableprivileges($odbc, string|null $catalog, string $schema, string $table) {}

	/**
	 * Get the list of table names stored in a specific data source
	 * <p>Lists all tables in the requested range.</p><p>To support enumeration of qualifiers, owners, and table types, the following special semantics for the <code>catalog</code>, <code>schema</code>, <code>table</code>, and <code>table_type</code> are available:</p>
	 * @param resource $odbc <p>The ODBC connection identifier, see <code>odbc_connect()</code> for details.</p>
	 * @param string|null $catalog <p>The catalog ('qualifier' in ODBC 2 parlance).</p>
	 * @param string|null $schema <p>The schema ('owner' in ODBC 2 parlance). This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $table <p>The name. This parameter accepts the following search patterns: <code>%</code> to match zero or more characters, and <code>_</code> to match a single character.</p>
	 * @param string|null $types <p>If <code>table_type</code> is not an empty string, it must contain a list of comma-separated values for the types of interest; each value may be enclosed in single quotes (<code>'</code>) or unquoted. For example, <code>'TABLE','VIEW'</code> or <code>TABLE, VIEW</code>. If the data source does not support a specified table type, <b>odbc_tables()</b> does not return any results for that type.</p>
	 * @return resource|false <p>Returns an ODBC result identifier containing the information or <b><code>false</code></b> on failure.</p><p>The result set has the following columns:</p><ul> <li><code>TABLE_CAT</code></li> <li><code>TABLE_SCHEM</code></li> <li><code>TABLE_NAME</code></li> <li><code>TABLE_TYPE</code></li> <li><code>REMARKS</code></li> </ul> Drivers can report additional columns. <p>The result set is ordered by <code>TABLE_TYPE</code>, <code>TABLE_CAT</code>, <code>TABLE_SCHEM</code> and <code>TABLE_NAME</code>.</p>
	 * @link https://php.net/manual/en/function.odbc-tables.php
	 * @see odbc_tableprivileges(), odbc_columns(), odbc_specialcolumns(), odbc_statistics(), odbc_procedures()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function odbc_tables($odbc, string|null $catalog = null, string|null $schema = null, string|null $table = null, string|null $types = null) {}

	define('ODBC_BINMODE_CONVERT', null);

	define('ODBC_BINMODE_PASSTHRU', null);

	define('ODBC_BINMODE_RETURN', null);

	define('ODBC_TYPE', null);

	define('SQL_BEST_ROWID', null);

	define('SQL_BIGINT', null);

	define('SQL_BINARY', null);

	define('SQL_BIT', null);

	define('SQL_CHAR', null);

	define('SQL_CONCUR_LOCK', null);

	define('SQL_CONCUR_READ_ONLY', null);

	define('SQL_CONCUR_ROWVER', null);

	define('SQL_CONCUR_VALUES', null);

	define('SQL_CONCURRENCY', null);

	define('SQL_CUR_USE_DRIVER', null);

	define('SQL_CUR_USE_IF_NEEDED', null);

	define('SQL_CUR_USE_ODBC', null);

	define('SQL_CURSOR_DYNAMIC', null);

	define('SQL_CURSOR_FORWARD_ONLY', null);

	define('SQL_CURSOR_KEYSET_DRIVEN', null);

	define('SQL_CURSOR_STATIC', null);

	define('SQL_CURSOR_TYPE', null);

	define('SQL_DATE', null);

	define('SQL_DECIMAL', null);

	define('SQL_DOUBLE', null);

	define('SQL_ENSURE', null);

	define('SQL_FLOAT', null);

	define('SQL_INDEX_ALL', null);

	define('SQL_INDEX_UNIQUE', null);

	define('SQL_INTEGER', null);

	define('SQL_KEYSET_SIZE', null);

	define('SQL_LONGVARBINARY', null);

	define('SQL_LONGVARCHAR', null);

	define('SQL_NO_NULLS', null);

	define('SQL_NULLABLE', null);

	define('SQL_NUMERIC', null);

	define('SQL_ODBC_CURSORS', null);

	define('SQL_QUICK', null);

	define('SQL_REAL', null);

	define('SQL_ROWVER', null);

	define('SQL_SCOPE_CURROW', null);

	define('SQL_SCOPE_SESSION', null);

	define('SQL_SCOPE_TRANSACTION', null);

	define('SQL_SMALLINT', null);

	define('SQL_TIME', null);

	define('SQL_TIMESTAMP', null);

	define('SQL_TINYINT', null);

	define('SQL_TYPE_DATE', null);

	define('SQL_TYPE_TIME', null);

	define('SQL_TYPE_TIMESTAMP', null);

	define('SQL_VARBINARY', null);

	define('SQL_VARCHAR', null);

}
