<?php



namespace {

	/**
	 * <p>A class that interfaces SQLite 3 databases.</p>
	 * @link http://php.net/manual/en/class.sqlite3.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3 {

		/**
		 * Instantiates an SQLite3 object and opens an SQLite 3 database
		 * <p>Instantiates an SQLite3 object and opens a connection to an SQLite 3 database. If the build includes encryption, then it will attempt to use the key.</p>
		 * @param string $filename <p>Path to the SQLite database, or <i>:memory:</i> to use in-memory database. If <code>filename</code> is an empty string, then a private, temporary on-disk database will be created. This private database will be automatically deleted as soon as the database connection is closed.</p>
		 * @param int $flags <p>Optional flags used to determine how to open the SQLite database. By default, open uses <i>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</i>.</p><ul> <li> <p><i>SQLITE3_OPEN_READONLY</i>: Open the database for reading only.</p> </li> <li> <p><i>SQLITE3_OPEN_READWRITE</i>: Open the database for reading and writing.</p> </li> <li> <p><i>SQLITE3_OPEN_CREATE</i>: Create the database if it does not exist.</p> </li> </ul>
		 * @param string $encryption_key <p>An optional encryption key used when encrypting and decrypting an SQLite database. If the SQLite encryption module is not installed, this parameter will have no effect.</p>
		 * @return self <p>Returns an SQLite3 object on success.</p>
		 * @link http://php.net/manual/en/sqlite3.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = NULL) {}

		/**
		 * Sets the busy connection handler
		 * <p>Sets a busy handler that will sleep until the database is not locked or the timeout is reached.</p>
		 * @param int $msecs <p>The milliseconds to sleep. Setting this value to a value less than or equal to zero, will turn off an already set timeout handler.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.busytimeout.php
		 * @since PHP 5 >= 5.3.3, PHP 7
		 */
		public function busyTimeout(int $msecs): bool {}

		/**
		 * Returns the number of database rows that were changed (or inserted or deleted) by the most recent SQL statement
		 * <p>Returns the number of database rows that were changed (or inserted or deleted) by the most recent SQL statement.</p>
		 * @return int <p>Returns an <code>integer</code> value corresponding to the number of database rows changed (or inserted or deleted) by the most recent SQL statement.</p>
		 * @link http://php.net/manual/en/sqlite3.changes.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function changes(): int {}

		/**
		 * Closes the database connection
		 * <p>Closes the database connection.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.close.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Registers a PHP function for use as an SQL aggregate function
		 * <p>Registers a PHP function or user-defined function for use as an SQL aggregate function for use within SQL statements.</p>
		 * @param string $name <p>Name of the SQL aggregate to be created or redefined.</p>
		 * @param mixed $step_callback <p>The name of a PHP function or user-defined function to apply as a callback for every item in the aggregate.</p>
		 * @param mixed $final_callback <p>The name of a PHP function or user-defined function to apply as a callback at the end of the aggregate data.</p>
		 * @param int $argument_count <p>The number of arguments that the SQL aggregate takes. If this parameter is negative, then the SQL aggregate may take any number of arguments.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> upon successful creation of the aggregate, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.createaggregate.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function createAggregate(string $name, $step_callback, $final_callback, int $argument_count = -1): bool {}

		/**
		 * Registers a PHP function for use as an SQL collating function
		 * <p>Registers a PHP function or user-defined function for use as a collating function within SQL statements.</p>
		 * @param string $name <p>Name of the SQL collating function to be created or redefined</p>
		 * @param callable $callback <p>The name of a PHP function or user-defined function to apply as a callback, defining the behavior of the collation. It should accept two strings and return as <code>strcmp()</code> does, i.e. it should return -1, 1, or 0 if the first string sorts before, sorts after, or is equal to the second.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.createcollation.php
		 * @since PHP 5 >= 5.3.11, PHP 7
		 */
		public function createCollation(string $name, callable $callback): bool {}

		/**
		 * Registers a PHP function for use as an SQL scalar function
		 * <p>Registers a PHP function or user-defined function for use as an SQL scalar function for use within SQL statements.</p>
		 * @param string $name <p>Name of the SQL function to be created or redefined.</p>
		 * @param mixed $callback <p>The name of a PHP function or user-defined function to apply as a callback, defining the behavior of the SQL function.</p>
		 * @param int $argument_count <p>The number of arguments that the SQL function takes. If this parameter is <i>-1</i>, then the SQL function may take any number of arguments.</p>
		 * @param int $flags <p>A bitwise conjunction of flags. Currently, only <b><code>SQLITE3_DETERMINISTIC</code></b> is supported, which specifies that the function always returns the same result given the same inputs within a single SQL statement.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> upon successful creation of the function, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.createfunction.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function createFunction(string $name, $callback, int $argument_count = -1, int $flags = 0): bool {}

		/**
		 * Enable throwing exceptions
		 * <p>Controls whether the SQLite3 instance will throw exceptions or warnings on error.</p>
		 * @param bool $enableExceptions
		 * @return bool <p>Returns the old value; <b><code>TRUE</code></b> if exceptions were enabled, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/sqlite3.enableexceptions.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function enableExceptions(bool $enableExceptions = FALSE): bool {}

		/**
		 * Returns a string that has been properly escaped
		 * <p>Returns a string that has been properly escaped for safe inclusion in an SQL statement.</p><p>This function is not (yet) binary safe!</p><p>To properly handle BLOB fields which may contain NUL characters, use <code>SQLite3Stmt::bindParam()</code> instead.</p>
		 * @param string $value <p>The string to be escaped.</p>
		 * @return string <p>Returns a properly escaped string that may be used safely in an SQL statement.</p>
		 * @link http://php.net/manual/en/sqlite3.escapestring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function escapeString(string $value): string {}

		/**
		 * Executes a result-less query against a given database
		 * <p>Executes a result-less query against a given database.</p>
		 * @param string $query <p>The SQL query to execute (typically an INSERT, UPDATE, or DELETE query).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the query succeeded, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.exec.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function exec(string $query): bool {}

		/**
		 * Returns the numeric result code of the most recent failed SQLite request
		 * <p>Returns the numeric result code of the most recent failed SQLite request.</p>
		 * @return int <p>Returns an integer value representing the numeric result code of the most recent failed SQLite request.</p>
		 * @link http://php.net/manual/en/sqlite3.lasterrorcode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastErrorCode(): int {}

		/**
		 * Returns English text describing the most recent failed SQLite request
		 * <p>Returns English text describing the most recent failed SQLite request.</p>
		 * @return string <p>Returns an English string describing the most recent failed SQLite request.</p>
		 * @link http://php.net/manual/en/sqlite3.lasterrormsg.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastErrorMsg(): string {}

		/**
		 * Returns the row ID of the most recent INSERT into the database
		 * <p>Returns the row ID of the most recent INSERT into the database.</p>
		 * @return int <p>Returns the row ID of the most recent INSERT into the database</p>
		 * @link http://php.net/manual/en/sqlite3.lastinsertrowid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastInsertRowID(): int {}

		/**
		 * Attempts to load an SQLite extension library
		 * <p>Attempts to load an SQLite extension library.</p>
		 * @param string $shared_library <p>The name of the library to load. The library must be located in the directory specified in the configure option sqlite3.extension_dir.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the extension is successfully loaded, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.loadextension.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function loadExtension(string $shared_library): bool {}

		/**
		 * Opens an SQLite database
		 * <p>Opens an SQLite 3 Database. If the build includes encryption, then it will attempt to use the key.</p>
		 * @param string $filename <p>Path to the SQLite database, or <i>:memory:</i> to use in-memory database.</p>
		 * @param int $flags <p>Optional flags used to determine how to open the SQLite database. By default, open uses <i>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</i>.</p><ul> <li> <p><i>SQLITE3_OPEN_READONLY</i>: Open the database for reading only.</p> </li> <li> <p><i>SQLITE3_OPEN_READWRITE</i>: Open the database for reading and writing.</p> </li> <li> <p><i>SQLITE3_OPEN_CREATE</i>: Create the database if it does not exist.</p> </li> </ul>
		 * @param string $encryption_key <p>An optional encryption key used when encrypting and decrypting an SQLite database. If the SQLite encryption module is not installed, this parameter will have no effect.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/sqlite3.open.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = NULL): void {}

		/**
		 * Opens a stream resource to read a BLOB
		 * <p>Opens a stream resource to read or write a BLOB, which would be selected by:</p><p>SELECT <code>column</code> FROM <code>dbname</code>.<code>table</code> WHERE rowid = <code>rowid</code></p><p><b>Note</b>:  It is not possible to change the size of a BLOB by writing to the stream. Instead, an UPDATE statement has to be executed, possibly using SQLite's zeroblob() function to set the desired BLOB size. </p>
		 * @param string $table <p>The table name.</p>
		 * @param string $column <p>The column name.</p>
		 * @param int $rowid <p>The row ID.</p>
		 * @param string $dbname <p>The symbolic name of the DB</p>
		 * @param int $flags <p>Either <b><code>SQLITE3_OPEN_READONLY</code></b> or <b><code>SQLITE3_OPEN_READWRITE</code></b> to open the stream for reading only, or for reading and writing, respectively.</p>
		 * @return resource <p>Returns a stream resource, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.openblob.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function openBlob(string $table, string $column, int $rowid, string $dbname = "main", int $flags = SQLITE3_OPEN_READONLY) {}

		/**
		 * Prepares an SQL statement for execution
		 * <p>Prepares an SQL statement for execution and returns an SQLite3Stmt object.</p>
		 * @param string $query <p>The SQL query to prepare.</p>
		 * @return SQLite3Stmt <p>Returns an SQLite3Stmt object on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.prepare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function prepare(string $query): \SQLite3Stmt {}

		/**
		 * Executes an SQL query
		 * <p>Executes an SQL query, returning an SQLite3Result object. If the query does not yield a result (such as DML statements) the returned SQLite3Result object is not really usable. Use <code>SQLite3::exec()</code> for such queries instead.</p>
		 * @param string $query <p>The SQL query to execute.</p>
		 * @return SQLite3Result <p>Returns an SQLite3Result object, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3.query.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function query(string $query): \SQLite3Result {}

		/**
		 * Executes a query and returns a single result
		 * <p>Executes a query and returns a single result.</p>
		 * @param string $query <p>The SQL query to execute.</p>
		 * @param bool $entire_row <p>By default, <b>querySingle()</b> returns the value of the first column returned by the query. If <code>entire_row</code> is <b><code>TRUE</code></b>, then it returns an array of the entire first row.</p>
		 * @return mixed <p>Returns the value of the first column of results or an array of the entire first row (if <code>entire_row</code> is <b><code>TRUE</code></b>).</p><p>If the query is valid but no results are returned, then <b><code>NULL</code></b> will be returned if <code>entire_row</code> is <b><code>FALSE</code></b>, otherwise an empty array is returned.</p><p>Invalid or failing queries will return <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/sqlite3.querysingle.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function querySingle(string $query, bool $entire_row = FALSE) {}

		/**
		 * Returns the SQLite3 library version as a string constant and as a number
		 * <p>Returns the SQLite3 library version as a string constant and as a number.</p>
		 * @return array <p>Returns an associative array with the keys "versionString" and "versionNumber".</p>
		 * @link http://php.net/manual/en/sqlite3.version.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function version(): array {}
	}

	/**
	 * <p>A class that handles result sets for the SQLite 3 extension.</p>
	 * @link http://php.net/manual/en/class.sqlite3result.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3Result {

		/**
		 * Returns the name of the nth column
		 * <p>Returns the name of the column specified by the <code>column_number</code>.</p>
		 * @param int $column_number <p>The numeric zero-based index of the column.</p>
		 * @return string <p>Returns the <code>string</code> name of the column identified by <code>column_number</code>.</p>
		 * @link http://php.net/manual/en/sqlite3result.columnname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function columnName(int $column_number): string {}

		/**
		 * Returns the type of the nth column
		 * <p>Returns the type of the column identified by <code>column_number</code>.</p>
		 * @param int $column_number <p>The numeric zero-based index of the column.</p>
		 * @return int <p>Returns the data type index of the column identified by <code>column_number</code> (one of <b><code>SQLITE3_INTEGER</code></b>, <b><code>SQLITE3_FLOAT</code></b>, <b><code>SQLITE3_TEXT</code></b>, <b><code>SQLITE3_BLOB</code></b>, or <b><code>SQLITE3_NULL</code></b>).</p>
		 * @link http://php.net/manual/en/sqlite3result.columntype.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function columnType(int $column_number): int {}

		/**
		 * Fetches a result row as an associative or numerically indexed array or both
		 * <p>Fetches a result row as an associative or numerically indexed array or both. By default, fetches as both.</p>
		 * @param int $mode <p>Controls how the next row will be returned to the caller. This value must be one of either <i>SQLITE3_ASSOC</i>, <i>SQLITE3_NUM</i>, or <i>SQLITE3_BOTH</i>.</p><ul> <li> <p><i>SQLITE3_ASSOC</i>: returns an array indexed by column name as returned in the corresponding result set</p> </li> <li> <p><i>SQLITE3_NUM</i>: returns an array indexed by column number as returned in the corresponding result set, starting at column 0</p> </li> <li> <p><i>SQLITE3_BOTH</i>: returns an array indexed by both column name and number as returned in the corresponding result set, starting at column 0</p> </li> </ul>
		 * @return array <p>Returns a result row as an associatively or numerically indexed array or both. Alternately will return <b><code>FALSE</code></b> if there are no more rows.</p><p>The types of the values of the returned array are mapped from SQLite3 types as follows: integers are mapped to <code>integer</code> if they fit into the range <b><code>PHP_INT_MIN</code></b>..<b><code>PHP_INT_MAX</code></b>, and to <code>string</code> otherwise. Floats are mapped to <code>float</code>, <i>NULL</i> values are mapped to <code>null</code>, and strings and blobs are mapped to <code>string</code>.</p>
		 * @link http://php.net/manual/en/sqlite3result.fetcharray.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function fetchArray(int $mode = SQLITE3_BOTH): array {}

		/**
		 * Closes the result set
		 * <p>Closes the result set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
		 * @link http://php.net/manual/en/sqlite3result.finalize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function finalize(): bool {}

		/**
		 * Returns the number of columns in the result set
		 * <p>Returns the number of columns in the result set.</p>
		 * @return int <p>Returns the number of columns in the result set.</p>
		 * @link http://php.net/manual/en/sqlite3result.numcolumns.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function numColumns(): int {}

		/**
		 * Resets the result set back to the first row
		 * <p>Resets the result set back to the first row.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the result set is successfully reset back to the first row, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3result.reset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function reset(): bool {}
	}

	/**
	 * <p>A class that handles prepared statements for the SQLite 3 extension.</p>
	 * @link http://php.net/manual/en/class.sqlite3stmt.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3Stmt {

		/**
		 * Binds a parameter to a statement variable
		 * <p>Binds a parameter to a statement variable.</p>
		 * @param mixed $sql_param <p>Either a <code>string</code> or an <code>int</code> identifying the statement variable to which the parameter should be bound.</p>
		 * @param mixed $param <p>The parameter to bind to a statement variable.</p>
		 * @param int $type <p>The data type of the parameter to bind.</p><ul> <li> <p><b><code>SQLITE3_INTEGER</code></b>: The value is a signed integer, stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of the value.</p> </li> <li> <p><b><code>SQLITE3_FLOAT</code></b>: The value is a floating point value, stored as an 8-byte IEEE floating point number.</p> </li> <li> <p><b><code>SQLITE3_TEXT</code></b>: The value is a text string, stored using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).</p> </li> <li> <p><b><code>SQLITE3_BLOB</code></b>: The value is a blob of data, stored exactly as it was input.</p> </li> <li> <p><b><code>SQLITE3_NULL</code></b>: The value is a NULL value.</p> </li> </ul> <p>As of PHP 7.0.7, if <code>type</code> is omitted, it is automatically detected from the type of the <code>param</code>: <code>boolean</code> and <code>integer</code> are treated as <b><code>SQLITE3_INTEGER</code></b>, <code>float</code> as <b><code>SQLITE3_FLOAT</code></b>, <code>null</code> as <b><code>SQLITE3_NULL</code></b> and all others as <b><code>SQLITE3_TEXT</code></b>. Formerly, if <code>type</code> has been omitted, it has defaulted to <b><code>SQLITE3_TEXT</code></b>.</p> <p><b>Note</b>:</p><p>If <code>param</code> is <b><code>NULL</code></b>, it is always treated as <b><code>SQLITE3_NULL</code></b>, regardless of the given <code>type</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the parameter is bound to the statement variable, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.bindparam.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bindParam($sql_param, &$param, int $type = NULL): bool {}

		/**
		 * Binds the value of a parameter to a statement variable
		 * <p>Binds the value of a parameter to a statement variable.</p>
		 * @param mixed $sql_param <p>Either a <code>string</code> or an <code>int</code> identifying the statement variable to which the value should be bound.</p>
		 * @param mixed $value <p>The value to bind to a statement variable.</p>
		 * @param int $type <p>The data type of the value to bind.</p><ul> <li> <p><b><code>SQLITE3_INTEGER</code></b>: The value is a signed integer, stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of the value.</p> </li> <li> <p><b><code>SQLITE3_FLOAT</code></b>: The value is a floating point value, stored as an 8-byte IEEE floating point number.</p> </li> <li> <p><b><code>SQLITE3_TEXT</code></b>: The value is a text string, stored using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).</p> </li> <li> <p><b><code>SQLITE3_BLOB</code></b>: The value is a blob of data, stored exactly as it was input.</p> </li> <li> <p><b><code>SQLITE3_NULL</code></b>: The value is a NULL value.</p> </li> </ul> <p>As of PHP 7.0.7, if <code>type</code> is omitted, it is automatically detected from the type of the <code>value</code>: <code>boolean</code> and <code>integer</code> are treated as <b><code>SQLITE3_INTEGER</code></b>, <code>float</code> as <b><code>SQLITE3_FLOAT</code></b>, <code>null</code> as <b><code>SQLITE3_NULL</code></b> and all others as <b><code>SQLITE3_TEXT</code></b>. Formerly, if <code>type</code> has been omitted, it has defaulted to <b><code>SQLITE3_TEXT</code></b>.</p> <p><b>Note</b>:</p><p>If <code>value</code> is <b><code>NULL</code></b>, it is always treated as <b><code>SQLITE3_NULL</code></b>, regardless of the given <code>type</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the value is bound to the statement variable, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.bindvalue.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bindValue($sql_param, $value, int $type = NULL): bool {}

		/**
		 * Clears all current bound parameters
		 * <p>Clears all current bound parameters.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on successful clearing of bound parameters, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.clear.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function clear(): bool {}

		/**
		 * Closes the prepared statement
		 * <p>Closes the prepared statement.</p><p><b>Note</b>:  Note that all SQLite3Results that have been retrieved by executing this statement will be invalidated when the statement is closed. </p>
		 * @return bool <p>Returns <b><code>TRUE</code></b></p>
		 * @link http://php.net/manual/en/sqlite3stmt.close.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Executes a prepared statement and returns a result set object
		 * <p>Executes a prepared statement and returns a result set object.</p><p>Result set objects retrieved by calling this method on the same statement object are not independent, but rather share the same underlying structure. Therefore it is recommended to call <code>SQLite3Result::finalize()</code>, before calling <b>SQLite3Stmt::execute()</b> on the same statement object again.</p>
		 * @return SQLite3Result <p>Returns an SQLite3Result object on successful execution of the prepared statement, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.execute.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function execute(): \SQLite3Result {}

		/**
		 * Returns the number of parameters within the prepared statement
		 * <p>Returns the number of parameters within the prepared statement.</p>
		 * @return int <p>Returns the number of parameters within the prepared statement.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.paramcount.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function paramCount(): int {}

		/**
		 * Returns whether a statement is definitely read only
		 * <p>Returns whether a statement is definitely read only. A statement is considered read only, if it makes no <i>direct</i> changes to the content of the database file. Note that user defined SQL functions might change the database <i>indirectly</i> as a side effect.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if a statement is definitely read only, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.readonly.php
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function readOnly(): bool {}

		/**
		 * Resets the prepared statement
		 * <p>Resets the prepared statement to its state prior to execution. All bindings remain intact after reset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the statement is successfully reset, <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sqlite3stmt.reset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function reset(): bool {}
	}

	/**
	 * Specifies that the <code>Sqlite3Result::fetchArray()</code> method shall return an array indexed by column name as returned in the corresponding result set.
	 */
	define('SQLITE3_ASSOC', 1);

	/**
	 * Represents the SQLite3 BLOB storage class.
	 */
	define('SQLITE3_BLOB', 4);

	/**
	 * Specifies that the <code>Sqlite3Result::fetchArray()</code> method shall return an array indexed by both column name and number as returned in the corresponding result set, starting at column 0.
	 */
	define('SQLITE3_BOTH', 3);

	/**
	 * Specifies that a function created with <code>SQLite3::createFunction()</code> is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement. (Available as of PHP 7.1.4.)
	 */
	define('SQLITE3_DETERMINISTIC', 2048);

	/**
	 * Represents the SQLite3 REAL (FLOAT) storage class.
	 */
	define('SQLITE3_FLOAT', 2);

	/**
	 * Represents the SQLite3 INTEGER storage class.
	 */
	define('SQLITE3_INTEGER', 1);

	/**
	 * Represents the SQLite3 NULL storage class.
	 */
	define('SQLITE3_NULL', 5);

	/**
	 * Specifies that the <code>Sqlite3Result::fetchArray()</code> method shall return an array indexed by column number as returned in the corresponding result set, starting at column 0.
	 */
	define('SQLITE3_NUM', 2);

	/**
	 * Specifies that the SQLite3 database be created if it does not already exist.
	 */
	define('SQLITE3_OPEN_CREATE', 4);

	/**
	 * Specifies that the SQLite3 database be opened for reading only.
	 */
	define('SQLITE3_OPEN_READONLY', 1);

	/**
	 * Specifies that the SQLite3 database be opened for reading and writing.
	 */
	define('SQLITE3_OPEN_READWRITE', 2);

	/**
	 * Represents the SQLite3 TEXT storage class.
	 */
	define('SQLITE3_TEXT', 3);

}
