<?php



namespace {

	/**
	 * Execute a query against a given database and returns an array
	 * <p><b>sqlite_array_query()</b> executes the given query and returns an array of the entire result set. It is similar to calling <code>sqlite_query()</code> and then <code>sqlite_fetch_array()</code> for each row in the result set. <b>sqlite_array_query()</b> is significantly faster than the aforementioned.</p><p><b>sqlite_array_query()</b> is best suited to queries returning 45 rows or less. If you have more data than that, it is recommended that you write your scripts to use <code>sqlite_unbuffered_query()</code> instead for more optimal performance.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param string $query <p>The query to be executed.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_BOTH</code></b> will return both associative and numerical indices. <b><code>SQLITE_BOTH</code></b> is the default for this function.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return array <p>Returns an array of the entire result set; <b><code>FALSE</code></b> otherwise.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-array-query.php
	 * @see sqlite_query(), sqlite_fetch_array(), sqlite_fetch_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_array_query($dbhandle, string $query, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * Set busy timeout duration, or disable busy handlers
	 * <p>Set the maximum time, in milliseconds, that SQLite will wait for a <code>dbhandle</code> to become ready for use.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param int $milliseconds <p>The number of milliseconds. When set to <i>0</i>, busy handlers will be disabled and SQLite will return immediately with a <i>SQLITE_BUSY</i> status code if another process/thread has the database locked for an update.</p> <p>PHP sets the default busy timeout to be 60 seconds when the database is opened.</p> <p><b>Note</b>:</p><p>There are one thousand (1000) milliseconds in one second.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sqlite-busy-timeout.php
	 * @see sqlite_open()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_busy_timeout($dbhandle, int $milliseconds): void {}

	/**
	 * Returns the number of rows that were changed by the most recent SQL statement
	 * <p>Returns the numbers of rows that were changed by the most recent SQL statement executed against the <code>dbhandle</code> database handle.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @return int <p>Returns the number of changed rows.</p>
	 * @link http://php.net/manual/en/function.sqlite-changes.php
	 * @see sqlite_open()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_changes($dbhandle): int {}

	/**
	 * Closes an open SQLite database
	 * <p>Closes the given <code>db_handle</code> database handle. If the database was persistent, it will be closed and removed from the persistent list.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sqlite-close.php
	 * @see sqlite_open(), sqlite_popen()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_close($dbhandle): void {}

	/**
	 * Fetches a column from the current row of a result set
	 * <p>Fetches the value of a column named <code>index_or_name</code> (if it is a string), or of the ordinal column numbered <code>index_or_name</code> (if it is an integer) from the current row of the query result handle <code>result</code>.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param mixed $index_or_name <p>The column index or name to fetch.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return mixed <p>Returns the column value.</p>
	 * @link http://php.net/manual/en/function.sqlite-column.php
	 * @see sqlite_fetch_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_column($result, $index_or_name, bool $decode_binary = TRUE) {}

	/**
	 * Register an aggregating UDF for use in SQL statements
	 * <p><b>sqlite_create_aggregate()</b> is similar to <code>sqlite_create_function()</code> except that it registers functions that can be used to calculate a result aggregated across all the rows of a query.</p><p>The key difference between this function and <code>sqlite_create_function()</code> is that two functions are required to manage the aggregate; <code>step_func</code> is called for each row of the result set. Your PHP function should accumulate the result and store it into the aggregation context. Once all the rows have been processed, <code>finalize_func</code> will be called and it should then take the data from the aggregation context and return the result. Callback functions should return a type understood by SQLite (i.e. scalar type).</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param string $function_name <p>The name of the function used in SQL statements.</p>
	 * @param callable $step_func <p>Callback function called for each row of the result set. Function parameters are <i>&amp;$context, $value, ...</i>.</p>
	 * @param callable $finalize_func <p>Callback function to aggregate the "stepped" data from each row. Function parameter is <i>&amp;$context</i> and the function should return the final result of aggregation.</p>
	 * @param int $num_args <p>Hint to the SQLite parser if the callback function accepts a predetermined number of arguments.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sqlite-create-aggregate.php
	 * @see sqlite_create_function(), sqlite_udf_encode_binary(), sqlite_udf_decode_binary()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_create_aggregate($dbhandle, string $function_name, callable $step_func, callable $finalize_func, int $num_args = -1): void {}

	/**
	 * Registers a "regular" User Defined Function for use in SQL statements
	 * <p><b>sqlite_create_function()</b> allows you to register a PHP function with SQLite as an UDF (User Defined Function), so that it can be called from within your SQL statements.</p><p>The UDF can be used in any SQL statement that can call functions, such as SELECT and UPDATE statements and also in triggers.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param string $function_name <p>The name of the function used in SQL statements.</p>
	 * @param callable $callback <p>Callback function to handle the defined SQL function.</p> <p><b>Note</b>:  Callback functions should return a type understood by SQLite (i.e. scalar type). </p>
	 * @param int $num_args <p>Hint to the SQLite parser if the callback function accepts a predetermined number of arguments.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.sqlite-create-function.php
	 * @see sqlite_create_aggregate()
	 * @since PHP 5 < 5.4.0, sqlite >= 1.0.0
	 */
	function sqlite_create_function($dbhandle, string $function_name, callable $callback, int $num_args = -1): void {}

	/**
	 * Fetches the current row from a result set as an array
	 * <p><b>sqlite_current()</b> is identical to <code>sqlite_fetch_array()</code> except that it does not advance to the next row prior to returning the data; it returns the data from the current position only.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_BOTH</code></b> will return both associative and numerical indices. <b><code>SQLITE_BOTH</code></b> is the default for this function.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return array <p>Returns an array of the current row from a result set; <b><code>FALSE</code></b> if the current position is beyond the final row.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-current.php
	 * @see sqlite_seek(), sqlite_next(), sqlite_fetch_array()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_current($result, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * Returns the textual description of an error code
	 * <p>Returns a human readable description of the <code>error_code</code> returned from <code>sqlite_last_error()</code>.</p>
	 * @param int $error_code <p>The error code being used, which might be passed in from <code>sqlite_last_error()</code>.</p>
	 * @return string <p>Returns a human readable description of the <code>error_code</code>, as a <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.sqlite-error-string.php
	 * @see sqlite_last_error()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_error_string(int $error_code): string {}

	/**
	 * Escapes a string for use as a query parameter
	 * <p><b>sqlite_escape_string()</b> will correctly quote the string specified by <code>item</code> for use in an SQLite SQL statement. This includes doubling up single-quote characters (<i>'</i>) and checking for binary-unsafe characters in the query string.</p><p>Although the encoding makes it safe to insert the data, it will render simple text comparisons and <i>LIKE</i> clauses in your queries unusable for the columns that contain the binary data. In practice, this shouldn't be a problem, as your schema should be such that you don't use such things on binary columns (in fact, it might be better to store binary data using other means, such as in files).</p>
	 * @param string $item <p>The <code>string</code> being quoted.</p> <p>If the <code>item</code> contains a <i>NUL</i> character, or if it begins with a character whose ordinal value is <i>0x01</i>, PHP will apply a binary encoding scheme so that you can safely store and retrieve binary data.</p>
	 * @return string <p>Returns an escaped <code>string</code> for use in an SQLite SQL statement.</p>
	 * @link http://php.net/manual/en/function.sqlite-escape-string.php
	 * @see sqlite_udf_encode_binary()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_escape_string(string $item): string {}

	/**
	 * Executes a result-less query against a given database
	 * <p>Executes an SQL statement given by the <code>query</code> against a given database handle (specified by the <code>dbhandle</code> parameter).</p><p>SQLite <i>will</i> execute multiple queries separated by semicolons, so you can use it to execute a batch of SQL that you have loaded from a file or have embedded in a script.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param string $query <p>The query to be executed.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param string $error_msg <p>The specified variable will be filled if an error occurs. This is specially important because SQL syntax errors can't be fetched using the <code>sqlite_last_error()</code> function.</p>
	 * @return bool <p>This function will return a boolean result; <b><code>TRUE</code></b> for success or <b><code>FALSE</code></b> for failure. If you need to run a query that returns rows, see <code>sqlite_query()</code>.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-exec.php
	 * @see sqlite_query(), sqlite_unbuffered_query(), sqlite_array_query()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.3
	 */
	function sqlite_exec($dbhandle, string $query, string &$error_msg = NULL): bool {}

	/**
	 * Opens an SQLite database and returns an SQLiteDatabase object
	 * <p><b>sqlite_factory()</b> behaves similarly to <code>sqlite_open()</code> in that it opens an SQLite database or attempts to create it if it does not exist. However, a SQLiteDatabase object is returned rather than a resource. Please see the <code>sqlite_open()</code> reference page for further usage and caveats.</p>
	 * @param string $filename <p>The filename of the SQLite database.</p>
	 * @param int $mode <p>The mode of the file. Intended to be used to open the database in read-only mode. Presently, this parameter is ignored by the sqlite library. The default value for mode is the octal value <i>0666</i> and this is the recommended value.</p>
	 * @param string $error_message <p>Passed by reference and is set to hold a descriptive error message explaining why the database could not be opened if there was an error.</p>
	 * @return SQLiteDatabase <p>Returns an SQLiteDatabase object on success, <b><code>NULL</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.sqlite-factory.php
	 * @see sqlite_open(), sqlite_popen()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_factory(string $filename, int $mode = 0666, string &$error_message = NULL): \SQLiteDatabase {}

	/**
	 * Fetches all rows from a result set as an array of arrays
	 * <p><b>sqlite_fetch_all()</b> returns an array of the entire result set from the <code>result</code> resource. It is similar to calling <code>sqlite_query()</code> (or <code>sqlite_unbuffered_query()</code>) and then <code>sqlite_fetch_array()</code> for each row in the result set.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_BOTH</code></b> will return both associative and numerical indices. <b><code>SQLITE_BOTH</code></b> is the default for this function.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return array <p>Returns an array of the remaining rows in a result set. If called right after <code>sqlite_query()</code>, it returns all rows. If called after <code>sqlite_fetch_array()</code>, it returns the rest. If there are no rows in a result set, it returns an empty array.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-fetch-all.php
	 * @see sqlite_fetch_array()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_fetch_all($result, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * Fetches the next row from a result set as an array
	 * <p>Fetches the next row from the given <code>result</code> handle. If there are no more rows, returns <b><code>FALSE</code></b>, otherwise returns an associative array representing the row data.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_BOTH</code></b> will return both associative and numerical indices. <b><code>SQLITE_BOTH</code></b> is the default for this function.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return array <p>Returns an array of the next row from a result set; <b><code>FALSE</code></b> if the next position is beyond the final row.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-fetch-array.php
	 * @see sqlite_array_query(), sqlite_fetch_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_fetch_array($result, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * Return an array of column types from a particular table
	 * <p><b>sqlite_fetch_column_types()</b> returns an array of column data types from the specified <code>table_name</code> table.</p>
	 * @param string $table_name <p>The table name to query.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_ASSOC</code></b> is the default for this function.</p>
	 * @return array <p>Returns an array of column data types; <b><code>FALSE</code></b> on error.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-fetch-column-types.php
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_fetch_column_types(string $table_name, $dbhandle, int $result_type = SQLITE_ASSOC): array {}

	/**
	 * Fetches the next row from a result set as an object
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $result
	 * @param string $class_name
	 * @param array $ctor_params
	 * @param bool $decode_binary
	 * @return object
	 * @link http://php.net/manual/en/function.sqlite-fetch-object.php
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_fetch_object($result, string $class_name = NULL, array $ctor_params = NULL, bool $decode_binary = TRUE): object {}

	/**
	 * Fetches the first column of a result set as a string
	 * <p><b>sqlite_fetch_single()</b> is identical to <code>sqlite_fetch_array()</code> except that it returns the value of the first column of the rowset.</p><p>This is the most optimal way to retrieve data when you are only interested in the values from a single column of data.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return string <p>Returns the first column value, as a string.</p>
	 * @link http://php.net/manual/en/function.sqlite-fetch-single.php
	 * @see sqlite_fetch_array()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.1
	 */
	function sqlite_fetch_single($result, bool $decode_binary = TRUE): string {}

	/**
	 * Alias of sqlite_fetch_single()
	 * <p>This function is an alias of: <code>sqlite_fetch_single()</code>.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param bool $decode_binary <p>When the <code>decode_binary</code> parameter is set to <b><code>TRUE</code></b> (the default), PHP will decode the binary encoding it applied to the data if it was encoded using the <code>sqlite_escape_string()</code>. You should normally leave this value at its default, unless you are interoperating with databases created by other sqlite capable applications.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.sqlite-fetch-string.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_fetch_string($result, bool $decode_binary = TRUE): string {}

	/**
	 * Returns the name of a particular field
	 * <p>Given the ordinal column number, <code>field_index</code>, <b>sqlite_field_name()</b> returns the name of that field in the result set <code>result</code>.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @param int $field_index <p>The ordinal column number in the result set.</p>
	 * @return string <p>Returns the name of a field in an SQLite result set, given the ordinal column number; <b><code>FALSE</code></b> on error.</p><p>The column names returned by <b><code>SQLITE_ASSOC</code></b> and <b><code>SQLITE_BOTH</code></b> will be case-folded according to the value of the sqlite.assoc_case configuration option.</p>
	 * @link http://php.net/manual/en/function.sqlite-field-name.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_field_name($result, int $field_index): string {}

	/**
	 * Finds whether or not more rows are available
	 * <p>Finds whether more rows are available from the given result set.</p>
	 * @param resource $result <p>The SQLite result resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more rows available from the <code>result</code> handle, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlite-has-more.php
	 * @see sqlite_num_rows(), sqlite_changes()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_has_more($result): bool {}

	/**
	 * Returns whether or not a previous row is available
	 * <p>Find whether there are more previous rows from the given result handle.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more previous rows available from the <code>result</code> handle, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlite-has-prev.php
	 * @see sqlite_prev(), sqlite_has_more(), sqlite_num_rows()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_has_prev($result): bool {}

	/**
	 * Returns the current row index
	 * <p><b>SQLiteResult::key()</b> returns the current row index of the buffered result set <code>result</code>.</p><p>Unlike all other SQLite functions, this function does not have a procedural version, and can only be called as a method on a <b>SQLiteResult</b> object.</p>
	 * @return int <p>Returns the current row index of the buffered result set <code>result</code>.</p>
	 * @link http://php.net/manual/en/function.sqlite-key.php
	 * @see sqlite_next(), sqlite_current(), sqlite_rewind()
	 * @since PHP 5 >= 5.1.0 < 5.4.0
	 */
	function sqlite_key(): int {}

	/**
	 * Returns the error code of the last error for a database
	 * <p>Returns the error code from the last operation performed on <code>dbhandle</code> (the database handle), or <i>0</i> when no error occurred. A human readable description of the error code can be retrieved using <code>sqlite_error_string()</code>.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @return int <p>Returns an error code, or 0 if no error occurred.</p>
	 * @link http://php.net/manual/en/function.sqlite-last-error.php
	 * @see sqlite_error_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_last_error($dbhandle): int {}

	/**
	 * Returns the rowid of the most recently inserted row
	 * <p>Returns the rowid of the row that was most recently inserted into the database <code>dbhandle</code>, if it was created as an auto-increment field.</p><p>You can create auto-increment fields in SQLite by declaring them as <i>INTEGER PRIMARY KEY</i> in your table schema.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @return int <p>Returns the row id, as an integer.</p>
	 * @link http://php.net/manual/en/function.sqlite-last-insert-rowid.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_last_insert_rowid($dbhandle): int {}

	/**
	 * Returns the encoding of the linked SQLite library
	 * <p>The SQLite library may be compiled in either <i>ISO-8859-1</i> or <i>UTF-8</i> compatible modes. This function allows you to determine which encoding scheme is used by your version of the library.</p><p>The default PHP distribution builds libsqlite in <i>ISO-8859-1</i> encoding mode. However, this is a misnomer; rather than handling <i>ISO-8859-1</i>, it operates according to your current locale settings for string comparisons and sort ordering. So, rather than <i>ISO-8859-1</i>, you should think of it as being '<i>8-bit</i>' instead.</p><p>When compiled with <i>UTF-8</i> support, sqlite handles encoding and decoding of <i>UTF-8</i> multi-byte character sequences, but does not yet do a complete job when working with the data (no normalization is performed for example), and some comparison operations may still not be carried out correctly.</p><p>It is not recommended that you use PHP in a web-server configuration with a version of the SQLite library compiled with <i>UTF-8</i> support, since libsqlite will abort the process if it detects a problem with the <i>UTF-8</i> encoding.</p>
	 * @return string <p>Returns the library encoding.</p>
	 * @link http://php.net/manual/en/function.sqlite-libencoding.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_libencoding(): string {}

	/**
	 * Returns the version of the linked SQLite library
	 * <p>Returns the version of the linked SQLite library.</p>
	 * @return string <p>Returns the library version, as a string.</p>
	 * @link http://php.net/manual/en/function.sqlite-libversion.php
	 * @see sqlite_libencoding()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_libversion(): string {}

	/**
	 * Seek to the next row number
	 * <p><b>sqlite_next()</b> advances the result handle <code>result</code> to the next row.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> if there are no more rows.</p>
	 * @link http://php.net/manual/en/function.sqlite-next.php
	 * @see sqlite_seek(), sqlite_current(), sqlite_rewind()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_next($result): bool {}

	/**
	 * Returns the number of fields in a result set
	 * <p>Returns the number of fields in the <code>result</code> set.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p>
	 * @return int <p>Returns the number of fields, as an integer.</p>
	 * @link http://php.net/manual/en/function.sqlite-num-fields.php
	 * @see sqlite_changes(), sqlite_num_rows()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_num_fields($result): int {}

	/**
	 * Returns the number of rows in a buffered result set
	 * <p>Returns the number of rows in the buffered <code>result</code> set.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @return int <p>Returns the number of rows, as an integer.</p>
	 * @link http://php.net/manual/en/function.sqlite-num-rows.php
	 * @see sqlite_changes(), sqlite_query(), sqlite_num_fields()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_num_rows($result): int {}

	/**
	 * Opens an SQLite database and create the database if it does not exist
	 * <p>Opens an SQLite database or creates the database if it does not exist.</p>
	 * @param string $filename <p>The filename of the SQLite database. If the file does not exist, SQLite will attempt to create it. PHP must have write permissions to the file if data is inserted, the database schema is modified or to create the database if it does not exist.</p>
	 * @param int $mode <p>The mode of the file. Intended to be used to open the database in read-only mode. Presently, this parameter is ignored by the sqlite library. The default value for mode is the octal value <i>0666</i> and this is the recommended value.</p>
	 * @param string $error_message <p>Passed by reference and is set to hold a descriptive error message explaining why the database could not be opened if there was an error.</p>
	 * @return resource <p>Returns a resource (database handle) on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.sqlite-open.php
	 * @see sqlite_popen(), sqlite_close(), sqlite_factory()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_open(string $filename, int $mode = 0666, string &$error_message = NULL) {}

	/**
	 * Opens a persistent handle to an SQLite database and create the database if it does not exist
	 * <p>This function behaves identically to <code>sqlite_open()</code> except that is uses the persistent resource mechanism of PHP. For information about the meaning of the parameters, read the <code>sqlite_open()</code> manual page.</p><p><b>sqlite_popen()</b> will first check to see if a persistent handle has already been opened for the given <code>filename</code>. If it finds one, it returns that handle to your script, otherwise it opens a fresh handle to the database.</p><p>The benefit of this approach is that you don't incur the performance cost of re-reading the database and index schema on each page hit served by persistent web server SAPI's (any SAPI except for regular CGI or CLI).</p><p><b>Note</b>:  If you use persistent handles and have the database updated by a background process (perhaps via a crontab), and that process re-creates the database by overwriting it (either by unlinking and rebuilding, or moving the updated version to replace the current version), you may experience undefined behaviour when a persistent handle on the old version of the database is recycled.   To avoid this situation, have your background processes open the same database file and perform their updates in a transaction. </p>
	 * @param string $filename <p>The filename of the SQLite database. If the file does not exist, SQLite will attempt to create it. PHP must have write permissions to the file if data is inserted, the database schema is modified or to create the database if it does not exist.</p>
	 * @param int $mode <p>The mode of the file. Intended to be used to open the database in read-only mode. Presently, this parameter is ignored by the sqlite library. The default value for mode is the octal value <i>0666</i> and this is the recommended value.</p>
	 * @param string $error_message <p>Passed by reference and is set to hold a descriptive error message explaining why the database could not be opened if there was an error.</p>
	 * @return resource <p>Returns a resource (database handle) on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.sqlite-popen.php
	 * @see sqlite_open(), sqlite_close(), sqlite_factory()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_popen(string $filename, int $mode = 0666, string &$error_message = NULL) {}

	/**
	 * Seek to the previous row number of a result set
	 * <p><b>sqlite_prev()</b> seeks back the <code>result</code> handle to the previous row.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> if there are no more previous rows.</p>
	 * @link http://php.net/manual/en/function.sqlite-prev.php
	 * @see sqlite_has_prev(), sqlite_rewind(), sqlite_next()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_prev($result): bool {}

	/**
	 * Executes a query against a given database and returns a result handle
	 * <p>Executes an SQL statement given by the <code>query</code> against a given database handle.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param string $query <p>The query to be executed.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_BOTH</code></b> will return both associative and numerical indices. <b><code>SQLITE_BOTH</code></b> is the default for this function.</p>
	 * @param string $error_msg <p>The specified variable will be filled if an error occurs. This is specially important because SQL syntax errors can't be fetched using the <code>sqlite_last_error()</code> function.</p>
	 * @return resource <p>This function will return a result handle or <b><code>FALSE</code></b> on failure. For queries that return rows, the result handle can then be used with functions such as <code>sqlite_fetch_array()</code> and <code>sqlite_seek()</code>.</p><p>Regardless of the query type, this function will return <b><code>FALSE</code></b> if the query failed.</p><p><b>sqlite_query()</b> returns a buffered, seekable result handle. This is useful for reasonably small queries where you need to be able to randomly access the rows. Buffered result handles will allocate memory to hold the entire result and will not return until it has been fetched. If you only need sequential access to the data, it is recommended that you use the much higher performance <code>sqlite_unbuffered_query()</code> instead.</p>
	 * @link http://php.net/manual/en/function.sqlite-query.php
	 * @see sqlite_unbuffered_query(), sqlite_array_query()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_query($dbhandle, string $query, int $result_type = SQLITE_BOTH, string &$error_msg = NULL) {}

	/**
	 * Seek to the first row number
	 * <p><b>sqlite_rewind()</b> seeks back to the first row in the given result set.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> if there are no rows in the result set, <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlite-rewind.php
	 * @see sqlite_next(), sqlite_current(), sqlite_seek()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_rewind($result): bool {}

	/**
	 * Seek to a particular row number of a buffered result set
	 * <p><b>sqlite_seek()</b> seeks to the row given by the parameter <code>rownum</code>.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @param int $rownum <p>The ordinal row number to seek to. The row number is zero-based (0 is the first row).</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> if the row does not exist, <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlite-seek.php
	 * @see sqlite_next(), sqlite_current(), sqlite_rewind()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_seek($result, int $rownum): bool {}

	/**
	 * Executes a query and returns either an array for one single column or the value of the first row
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $db
	 * @param string $query
	 * @param bool $first_row_only
	 * @param bool $decode_binary
	 * @return array
	 * @link http://php.net/manual/en/function.sqlite-single-query.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.1
	 */
	function sqlite_single_query($db, string $query, bool $first_row_only = NULL, bool $decode_binary = NULL): array {}

	/**
	 * Decode binary data passed as parameters to an UDF
	 * <p>Decodes binary data passed as parameters to a UDF.</p><p>You must call this function on parameters passed to your UDF if you need them to handle binary data, as the binary encoding employed by PHP will obscure the content and of the parameter in its natural, non-coded form.</p><p>PHP does not perform this encode/decode operation automatically as it would severely impact performance if it did.</p>
	 * @param string $data <p>The encoded data that will be decoded, data that was applied by either <code>sqlite_udf_encode_binary()</code> or <code>sqlite_escape_string()</code>.</p>
	 * @return string <p>The decoded <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.sqlite-udf-decode-binary.php
	 * @see sqlite_udf_encode_binary(), sqlite_create_function(), sqlite_create_aggregate()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_udf_decode_binary(string $data): string {}

	/**
	 * Encode binary data before returning it from an UDF
	 * <p><b>sqlite_udf_encode_binary()</b> applies a binary encoding to the <code>data</code> so that it can be safely returned from queries (since the underlying libsqlite API is not binary safe).</p><p>If there is a chance that your data might be binary unsafe (e.g.: it contains a NUL byte in the middle rather than at the end, or if it has and <i>0x01</i> byte as the first character) then you must call this function to encode the return value from your UDF.</p><p>PHP does not perform this encode/decode operation automatically as it would severely impact performance if it did.</p><p><b>Note</b>:</p><p>Do not use <code>sqlite_escape_string()</code> to quote strings returned from UDF's as it will lead to double-quoting of the data. Use <b>sqlite_udf_encode_binary()</b> instead!</p>
	 * @param string $data <p>The <code>string</code> being encoded.</p>
	 * @return string <p>The encoded <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.sqlite-udf-encode-binary.php
	 * @see sqlite_udf_decode_binary(), sqlite_escape_string(), sqlite_create_function(), sqlite_create_aggregate()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_udf_encode_binary(string $data): string {}

	/**
	 * Execute a query that does not prefetch and buffer all data
	 * <p><b>sqlite_unbuffered_query()</b> is identical to <code>sqlite_query()</code> except that the result that is returned is a sequential forward-only result set that can only be used to read each row, one after the other.</p><p>This function is ideal for generating things such as HTML tables where you only need to process one row at a time and don't need to randomly access the row data.</p><p><b>Note</b>:</p><p>Functions such as <code>sqlite_seek()</code>, <code>sqlite_rewind()</code>, <code>sqlite_next()</code>, <code>sqlite_current()</code>, and <code>sqlite_num_rows()</code> do not work on result handles returned from <b>sqlite_unbuffered_query()</b>.</p>
	 * @param resource $dbhandle <p>The SQLite Database resource; returned from <code>sqlite_open()</code> when used procedurally. This parameter is not required when using the object-oriented method.</p>
	 * @param string $query <p>The query to be executed.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param int $result_type <p>The optional <code>result_type</code> parameter accepts a constant and determines how the returned array will be indexed. Using <b><code>SQLITE_ASSOC</code></b> will return only associative indices (named fields) while <b><code>SQLITE_NUM</code></b> will return only numerical indices (ordinal field numbers). <b><code>SQLITE_BOTH</code></b> will return both associative and numerical indices. <b><code>SQLITE_BOTH</code></b> is the default for this function.</p>
	 * @param string $error_msg <p>The specified variable will be filled if an error occurs. This is specially important because SQL syntax errors can't be fetched using the <code>sqlite_last_error()</code> function.</p>
	 * @return resource <p>Returns a result handle or <b><code>FALSE</code></b> on failure.</p><p><b>sqlite_unbuffered_query()</b> returns a sequential forward-only result set that can only be used to read each row, one after the other.</p>
	 * @link http://php.net/manual/en/function.sqlite-unbuffered-query.php
	 * @see sqlite_query()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_unbuffered_query($dbhandle, string $query, int $result_type = SQLITE_BOTH, string &$error_msg = NULL) {}

	/**
	 * Returns whether more rows are available
	 * <p>Finds whether more rows are available from the given result handle.</p>
	 * @param resource $result <p>The SQLite result resource. This parameter is not required when using the object-oriented method.</p> <p><b>Note</b>:</p><p>This function cannot be used with unbuffered result handles.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more rows available from the <code>result</code> handle, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlite-valid.php
	 * @see sqlite_num_rows(), sqlite_changes()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_valid($result): bool {}

	/**
	 * Callback routine requested an abort.
	 */
	define('SQLITE_ABORT', null);

	/**
	 * Columns are returned into the array having the field name as the array index.
	 */
	define('SQLITE_ASSOC', null);

	/**
	 * Authorized failed.
	 */
	define('SQLITE_AUTH', null);

	/**
	 * Columns are returned into the array having both a numerical index and the field name as the array index.
	 */
	define('SQLITE_BOTH', null);

	/**
	 * The database file is locked.
	 */
	define('SQLITE_BUSY', null);

	/**
	 * Unable to open the database file.
	 */
	define('SQLITE_CANTOPEN', null);

	/**
	 * Abort due to constraint violation.
	 */
	define('SQLITE_CONSTRAINT', null);

	/**
	 * The database disk image is malformed.
	 */
	define('SQLITE_CORRUPT', null);

	/**
	 * Internal process has finished executing.
	 */
	define('SQLITE_DONE', null);

	/**
	 * (Internal) Database table is empty.
	 */
	define('SQLITE_EMPTY', null);

	/**
	 * SQL error or missing database.
	 */
	define('SQLITE_ERROR', null);

	/**
	 * Auxiliary database format error.
	 */
	define('SQLITE_FORMAT', null);

	/**
	 * Insertion failed because database is full.
	 */
	define('SQLITE_FULL', null);

	/**
	 * An internal logic error in SQLite.
	 */
	define('SQLITE_INTERNAL', null);

	/**
	 * Operation terminated internally.
	 */
	define('SQLITE_INTERRUPT', null);

	/**
	 * Disk I/O error occurred.
	 */
	define('SQLITE_IOERR', null);

	/**
	 * A table in the database is locked.
	 */
	define('SQLITE_LOCKED', null);

	/**
	 * Data type mismatch.
	 */
	define('SQLITE_MISMATCH', null);

	/**
	 * Library used incorrectly.
	 */
	define('SQLITE_MISUSE', null);

	/**
	 * Uses of OS features not supported on host.
	 */
	define('SQLITE_NOLFS', null);

	/**
	 * Memory allocation failed.
	 */
	define('SQLITE_NOMEM', null);

	/**
	 * File opened that is not a database file.
	 */
	define('SQLITE_NOTADB', null);

	/**
	 * (Internal) Table or record not found.
	 */
	define('SQLITE_NOTFOUND', null);

	/**
	 * Columns are returned into the array having a numerical index to the fields. This index starts with 0, the first field in the result.
	 */
	define('SQLITE_NUM', null);

	/**
	 * Successful result.
	 */
	define('SQLITE_OK', null);

	/**
	 * Access permission denied.
	 */
	define('SQLITE_PERM', null);

	/**
	 * Database lock protocol error.
	 */
	define('SQLITE_PROTOCOL', null);

	/**
	 * Attempt to write a readonly database.
	 */
	define('SQLITE_READONLY', null);

	/**
	 * Internal process has another row ready.
	 */
	define('SQLITE_ROW', null);

	/**
	 * The database schema changed.
	 */
	define('SQLITE_SCHEMA', null);

	/**
	 * Too much data for one row of a table.
	 */
	define('SQLITE_TOOBIG', null);

}
