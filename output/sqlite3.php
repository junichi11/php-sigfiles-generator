<?php



namespace {

	/**
	 * <p>A class that interfaces SQLite 3 databases.</p>
	 * @link https://php.net/manual/en/class.sqlite3.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3 {

		/**
		 * Instantiates an SQLite3 object and opens an SQLite 3 database
		 * <p>Instantiates an SQLite3 object and opens a connection to an SQLite 3 database. If the build includes encryption, then it will attempt to use the key.</p>
		 * @param string $filename <p>Path to the SQLite database, or <code>:memory:</code> to use in-memory database. If <code>filename</code> is an empty string, then a private, temporary on-disk database will be created. This private database will be automatically deleted as soon as the database connection is closed.</p>
		 * @param int $flags <p>Optional flags used to determine how to open the SQLite database. By default, open uses <code>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</code>.</p><ul> <li> <p><code>SQLITE3_OPEN_READONLY</code>: Open the database for reading only.</p> </li> <li> <p><code>SQLITE3_OPEN_READWRITE</code>: Open the database for reading and writing.</p> </li> <li> <p><code>SQLITE3_OPEN_CREATE</code>: Create the database if it does not exist.</p> </li> </ul>
		 * @param string $encryption_key <p>An optional encryption key used when encrypting and decrypting an SQLite database. If the SQLite encryption module is not installed, this parameter will have no effect.</p>
		 * @return self <p>Returns an SQLite3 object on success.</p>
		 * @link https://php.net/manual/en/sqlite3.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = "") {}

		/**
		 * Backup one database to another database
		 * <p><b>SQLite3::backup()</b> copies the contents of one database into another, overwriting the contents of the destination database. It is useful either for creating backups of databases or for copying in-memory databases to or from persistent files.</p>
		 * @param \SQLite3 $destination_db <p>A database connection opened with <code>SQLite3::open()</code>.</p>
		 * @param string $source_dbname <p>The database name is <code>"main"</code> for the main database, <code>"temp"</code> for the temporary database, or the name specified after the <code>AS</code> keyword in an <code>ATTACH</code> statement for an attached database.</p>
		 * @param string $destination_dbname <p>Analogous to <code>source_dbname</code> but for the <code>destination_db</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.backup.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function backup(\SQLite3 $destination_db, string $source_dbname = "main", string $destination_dbname = "main"): bool {}

		/**
		 * Sets the busy connection handler
		 * <p>Sets a busy handler that will sleep until the database is not locked or the timeout is reached.</p>
		 * @param int $msecs <p>The milliseconds to sleep. Setting this value to a value less than or equal to zero, will turn off an already set timeout handler.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.busytimeout.php
		 * @since PHP 5 >= 5.3.3, PHP 7
		 */
		public function busyTimeout(int $msecs): bool {}

		/**
		 * Returns the number of database rows that were changed (or inserted or deleted) by the most recent SQL statement
		 * <p>Returns the number of database rows that were changed (or inserted or deleted) by the most recent SQL statement.</p>
		 * @return int <p>Returns an <code>int</code> value corresponding to the number of database rows changed (or inserted or deleted) by the most recent SQL statement.</p>
		 * @link https://php.net/manual/en/sqlite3.changes.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function changes(): int {}

		/**
		 * Closes the database connection
		 * <p>Closes the database connection.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.close.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Registers a PHP function for use as an SQL aggregate function
		 * <p>Registers a PHP function or user-defined function for use as an SQL aggregate function for use within SQL statements.</p>
		 * @param string $name <p>Name of the SQL aggregate to be created or redefined.</p>
		 * @param mixed $step_callback <p>Callback function called for each row of the result set. Your PHP function should accumulate the result and store it in the aggregation context.</p> <p>This function need to be defined as:</p> step ( <code>mixed</code> <code>$context</code> , <code>int</code> <code>$rownumber</code> , <code>mixed</code> <code>$value</code> , <code>mixed</code> <code>...$values</code> ) : <code>mixed</code>   <code>context</code>  <p><b><code>NULL</code></b> for the first row; on subsequent rows it will have the value that was previously returned from the step function; you should use this to maintain the aggregate state.</p>   <code>rownumber</code>  <p>The current row number.</p>   <code>value</code>  <p>The first argument passed to the aggregate.</p>   <code>values</code>  <p>Further arguments passed to the aggregate.</p>   The return value of this function will be used as the <code>context</code> argument in the next call of the step or finalize functions.
		 * @param mixed $final_callback <p>Callback function to aggregate the "stepped" data from each row. Once all the rows have been processed, this function will be called and it should then take the data from the aggregation context and return the result. This callback function should return a type understood by SQLite (i.e. scalar type).</p> <p>This function need to be defined as:</p> fini ( <code>mixed</code> <code>$context</code> , <code>int</code> <code>$rownumber</code> ) : <code>mixed</code>   <code>context</code>  <p>Holds the return value from the very last call to the step function.</p>   <code>rownumber</code>  <p>Always <code>0</code>.</p>   The return value of this function will be used as the return value for the aggregate.
		 * @param int $argument_count <p>The number of arguments that the SQL aggregate takes. If this parameter is negative, then the SQL aggregate may take any number of arguments.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> upon successful creation of the aggregate, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.createaggregate.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function createAggregate(string $name, mixed $step_callback, mixed $final_callback, int $argument_count = -1): bool {}

		/**
		 * Registers a PHP function for use as an SQL collating function
		 * <p>Registers a PHP function or user-defined function for use as a collating function within SQL statements.</p>
		 * @param string $name <p>Name of the SQL collating function to be created or redefined</p>
		 * @param callable $callback <p>The name of a PHP function or user-defined function to apply as a callback, defining the behavior of the collation. It should accept two values and return as <code>strcmp()</code> does, i.e. it should return -1, 1, or 0 if the first string sorts before, sorts after, or is equal to the second.</p> <p>This function need to be defined as:</p> collation ( <code>mixed</code> <code>$value1</code> , <code>mixed</code> <code>$value2</code> ) : <code>int</code>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.createcollation.php
		 * @since PHP 5 >= 5.3.11, PHP 7
		 */
		public function createCollation(string $name, callable $callback): bool {}

		/**
		 * Registers a PHP function for use as an SQL scalar function
		 * <p>Registers a PHP function or user-defined function for use as an SQL scalar function for use within SQL statements.</p>
		 * @param string $name <p>Name of the SQL function to be created or redefined.</p>
		 * @param mixed $callback <p>The name of a PHP function or user-defined function to apply as a callback, defining the behavior of the SQL function.</p> <p>This function need to be defined as:</p> callback ( <code>mixed</code> <code>$value</code> , <code>mixed</code> <code>...$values</code> ) : <code>mixed</code>   <code>value</code>  <p>The first argument passed to the SQL function.</p>   <code>values</code>  <p>Further arguments passed to the SQL function.</p>
		 * @param int $argument_count <p>The number of arguments that the SQL function takes. If this parameter is <code>-1</code>, then the SQL function may take any number of arguments.</p>
		 * @param int $flags <p>A bitwise conjunction of flags. Currently, only <b><code>SQLITE3_DETERMINISTIC</code></b> is supported, which specifies that the function always returns the same result given the same inputs within a single SQL statement.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> upon successful creation of the function, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.createfunction.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function createFunction(string $name, mixed $callback, int $argument_count = -1, int $flags = 0): bool {}

		/**
		 * Enable throwing exceptions
		 * <p>Controls whether the SQLite3 instance will throw exceptions or warnings on error.</p>
		 * @param bool $enableExceptions
		 * @return bool <p>Returns the old value; <b><code>TRUE</code></b> if exceptions were enabled, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/sqlite3.enableexceptions.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function enableExceptions(bool $enableExceptions = FALSE): bool {}

		/**
		 * Returns a string that has been properly escaped
		 * <p>Returns a string that has been properly escaped for safe inclusion in an SQL statement.</p><p>This function is not (yet) binary safe!</p><p>To properly handle BLOB fields which may contain NUL characters, use <code>SQLite3Stmt::bindParam()</code> instead.</p>
		 * @param string $value <p>The string to be escaped.</p>
		 * @return string <p>Returns a properly escaped string that may be used safely in an SQL statement.</p>
		 * @link https://php.net/manual/en/sqlite3.escapestring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function escapeString(string $value): string {}

		/**
		 * Executes a result-less query against a given database
		 * <p>Executes a result-less query against a given database.</p><p><b>Note</b>:  SQLite3 may need to create temporary files during the execution of queries, so the respective directories may have to be writable. </p>
		 * @param string $query <p>The SQL query to execute (typically an INSERT, UPDATE, or DELETE query).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the query succeeded, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.exec.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function exec(string $query): bool {}

		/**
		 * Returns the numeric result code of the most recent failed SQLite request
		 * <p>Returns the numeric result code of the most recent failed SQLite request.</p>
		 * @return int <p>Returns an integer value representing the numeric result code of the most recent failed SQLite request.</p>
		 * @link https://php.net/manual/en/sqlite3.lasterrorcode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastErrorCode(): int {}

		/**
		 * Returns English text describing the most recent failed SQLite request
		 * <p>Returns English text describing the most recent failed SQLite request.</p>
		 * @return string <p>Returns an English string describing the most recent failed SQLite request.</p>
		 * @link https://php.net/manual/en/sqlite3.lasterrormsg.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastErrorMsg(): string {}

		/**
		 * Returns the row ID of the most recent INSERT into the database
		 * <p>Returns the row ID of the most recent INSERT into the database.</p>
		 * @return int <p>Returns the row ID of the most recent INSERT into the database</p>
		 * @link https://php.net/manual/en/sqlite3.lastinsertrowid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastInsertRowID(): int {}

		/**
		 * Attempts to load an SQLite extension library
		 * <p>Attempts to load an SQLite extension library.</p>
		 * @param string $shared_library <p>The name of the library to load. The library must be located in the directory specified in the configure option sqlite3.extension_dir.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the extension is successfully loaded, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.loadextension.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function loadExtension(string $shared_library): bool {}

		/**
		 * Opens an SQLite database
		 * <p>Opens an SQLite 3 Database. If the build includes encryption, then it will attempt to use the key.</p>
		 * @param string $filename <p>Path to the SQLite database, or <code>:memory:</code> to use in-memory database.</p>
		 * @param int $flags <p>Optional flags used to determine how to open the SQLite database. By default, open uses <code>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</code>.</p><ul> <li> <p><code>SQLITE3_OPEN_READONLY</code>: Open the database for reading only.</p> </li> <li> <p><code>SQLITE3_OPEN_READWRITE</code>: Open the database for reading and writing.</p> </li> <li> <p><code>SQLITE3_OPEN_CREATE</code>: Create the database if it does not exist.</p> </li> </ul>
		 * @param string $encryption_key <p>An optional encryption key used when encrypting and decrypting an SQLite database. If the SQLite encryption module is not installed, this parameter will have no effect.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/sqlite3.open.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = ""): void {}

		/**
		 * Opens a stream resource to read a BLOB
		 * <p>Opens a stream resource to read or write a BLOB, which would be selected by:</p><p>SELECT <code>column</code> FROM <code>dbname</code>.<code>table</code> WHERE rowid = <code>rowid</code></p><p><b>Note</b>:  It is not possible to change the size of a BLOB by writing to the stream. Instead, an UPDATE statement has to be executed, possibly using SQLite's zeroblob() function to set the desired BLOB size. </p>
		 * @param string $table <p>The table name.</p>
		 * @param string $column <p>The column name.</p>
		 * @param int $rowid <p>The row ID.</p>
		 * @param string $dbname <p>The symbolic name of the DB</p>
		 * @param int $flags <p>Either <b><code>SQLITE3_OPEN_READONLY</code></b> or <b><code>SQLITE3_OPEN_READWRITE</code></b> to open the stream for reading only, or for reading and writing, respectively.</p>
		 * @return resource|false <p>Returns a stream resource, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.openblob.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function openBlob(string $table, string $column, int $rowid, string $dbname = "main", int $flags = SQLITE3_OPEN_READONLY): resource|false {}

		/**
		 * Prepares an SQL statement for execution
		 * <p>Prepares an SQL statement for execution and returns an SQLite3Stmt object.</p>
		 * @param string $query <p>The SQL query to prepare.</p>
		 * @return SQLite3Stmt|false <p>Returns an SQLite3Stmt object on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.prepare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function prepare(string $query): \SQLite3Stmt|false {}

		/**
		 * Executes an SQL query
		 * <p>Executes an SQL query, returning an SQLite3Result object. If the query does not yield a result (such as DML statements) the returned SQLite3Result object is not really usable. Use <code>SQLite3::exec()</code> for such queries instead.</p>
		 * @param string $query <p>The SQL query to execute.</p>
		 * @return SQLite3Result|false <p>Returns an SQLite3Result object, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.query.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function query(string $query): \SQLite3Result|false {}

		/**
		 * Executes a query and returns a single result
		 * <p>Executes a query and returns a single result.</p>
		 * @param string $query <p>The SQL query to execute.</p>
		 * @param bool $entire_row <p>By default, <b>querySingle()</b> returns the value of the first column returned by the query. If <code>entire_row</code> is <b><code>TRUE</code></b>, then it returns an array of the entire first row.</p>
		 * @return mixed <p>Returns the value of the first column of results or an array of the entire first row (if <code>entire_row</code> is <b><code>TRUE</code></b>).</p><p>If the query is valid but no results are returned, then <b><code>NULL</code></b> will be returned if <code>entire_row</code> is <b><code>FALSE</code></b>, otherwise an empty array is returned.</p><p>Invalid or failing queries will return <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/en/sqlite3.querysingle.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function querySingle(string $query, bool $entire_row = FALSE): mixed {}

		/**
		 * Configures a callback to be used as an authorizer to limit what a statement can do
		 * <p>Sets a callback that will be called by SQLite every time an action is performed (reading, deleting, updating, etc.). This is used when preparing a SQL statement from an untrusted source to ensure that the SQL statements do not try to access data they are not allowed to see, or that they do not try to execute malicious statements that damage the database. For example, an application may allow a user to enter arbitrary SQL queries for evaluation by a database. But the application does not want the user to be able to make arbitrary changes to the database. An authorizer could then be put in place while the user-entered SQL is being prepared that disallows everything except SELECT statements.</p><p>The authorizer callback may be called multiple times for each statement prepared by SQLite. A <code>SELECT</code> or <code>UPDATE</code> query will call the authorizer for every column that would be read or updated.</p><p>The authorizer is called with up to five parameters. The first parameter is always given, and is an <code>int</code> (action code) matching a constant from <code>SQLite3</code>. The other parameters are only passed for some actions. The following table describes the second and third parameters according to the action:</p><p>The 5th parameter will be the name of the database (<code>"main"</code>, <code>"temp"</code>, etc.) if applicable.</p><p>The 6th parameter to the authorizer callback is the name of the inner-most trigger or view that is responsible for the access attempt or <b><code>NULL</code></b> if this access attempt is directly from top-level SQL code.</p><p>When the callback returns <b><code>SQLite3::OK</code></b>, that means the operation requested is accepted. When the callback returns <b><code>SQLite3::DENY</code></b>, the call that triggered the authorizer will fail with an error message explaining that access is denied.</p><p>If the action code is <b><code>SQLite3::READ</code></b> and the callback returns <b><code>SQLite3::IGNORE</code></b> then the prepared statement statement is constructed to substitute a <b><code>NULL</code></b> value in place of the table column that would have been read if <b><code>SQLite3::OK</code></b> had been returned. The <b><code>SQLite3::IGNORE</code></b> return can be used to deny an untrusted user access to individual columns of a table.</p><p>When a table is referenced by a <code>SELECT</code> but no column values are extracted from that table (for example in a query like <code>"SELECT count(&#42;) FROM table"</code>) then the <b><code>SQLite3::READ</code></b> authorizer callback is invoked once for that table with a column name that is an empty string.</p><p>If the action code is <b><code>SQLite3::DELETE</code></b> and the callback returns <b><code>SQLite3::IGNORE</code></b> then the DELETE operation proceeds but the truncate optimization is disabled and all rows are deleted individually.</p><p>Only a single authorizer can be in place on a database connection at a time. Each call to <b>SQLite3::setAuthorizer()</b> overrides the previous call. Disable the authorizer by installing a <b><code>NULL</code></b> callback. The authorizer is disabled by default.</p><p>The authorizer callback must not do anything that will modify the database connection that invoked the authorizer callback.</p><p>Note that the authorizer is only called when a statement is prepared, not when it's executed.</p><p>More details can be found in the SQLite3 documentation.</p>
		 * @param callable|null $callback <p>The <code>callable</code> to be called.</p> <p>If <b><code>NULL</code></b> is passed instead, this will disable the current authorizer callback.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3.setauthorizer.php
		 * @since PHP 8
		 */
		public function setAuthorizer(callable|null $callback): bool {}

		/**
		 * Returns the SQLite3 library version as a string constant and as a number
		 * <p>Returns the SQLite3 library version as a string constant and as a number.</p>
		 * @return array <p>Returns an associative array with the keys "versionString" and "versionNumber".</p>
		 * @link https://php.net/manual/en/sqlite3.version.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function version(): array {}
	}

	/**
	 * <p>A class that handles result sets for the SQLite 3 extension.</p>
	 * @link https://php.net/manual/en/class.sqlite3result.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3Result {

		/**
		 * Returns the name of the nth column
		 * <p>Returns the name of the column specified by the <code>column_number</code>. Note that the name of a result column is the value of the <code>AS</code> clause for that column, if there is an <code>AS</code> clause. If there is no <code>AS</code> clause then the name of the column is unspecified and may change from one release of libsqlite3 to the next.</p>
		 * @param int $column_number <p>The numeric zero-based index of the column.</p>
		 * @return string <p>Returns the <code>string</code> name of the column identified by <code>column_number</code>.</p>
		 * @link https://php.net/manual/en/sqlite3result.columnname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function columnName(int $column_number): string {}

		/**
		 * Returns the type of the nth column
		 * <p>Returns the type of the column identified by <code>column_number</code>.</p>
		 * @param int $column_number <p>The numeric zero-based index of the column.</p>
		 * @return int <p>Returns the data type index of the column identified by <code>column_number</code> (one of <b><code>SQLITE3_INTEGER</code></b>, <b><code>SQLITE3_FLOAT</code></b>, <b><code>SQLITE3_TEXT</code></b>, <b><code>SQLITE3_BLOB</code></b>, or <b><code>SQLITE3_NULL</code></b>).</p>
		 * @link https://php.net/manual/en/sqlite3result.columntype.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function columnType(int $column_number): int {}

		/**
		 * Fetches a result row as an associative or numerically indexed array or both
		 * <p>Fetches a result row as an associative or numerically indexed array or both. By default, fetches as both.</p>
		 * @param int $mode <p>Controls how the next row will be returned to the caller. This value must be one of either <code>SQLITE3_ASSOC</code>, <code>SQLITE3_NUM</code>, or <code>SQLITE3_BOTH</code>.</p><ul> <li> <p><code>SQLITE3_ASSOC</code>: returns an array indexed by column name as returned in the corresponding result set</p> </li> <li> <p><code>SQLITE3_NUM</code>: returns an array indexed by column number as returned in the corresponding result set, starting at column 0</p> </li> <li> <p><code>SQLITE3_BOTH</code>: returns an array indexed by both column name and number as returned in the corresponding result set, starting at column 0</p> </li> </ul>
		 * @return array <p>Returns a result row as an associatively or numerically indexed array or both. Alternately will return <b><code>FALSE</code></b> if there are no more rows.</p><p>The types of the values of the returned array are mapped from SQLite3 types as follows: integers are mapped to <code>int</code> if they fit into the range <b><code>PHP_INT_MIN</code></b>..<b><code>PHP_INT_MAX</code></b>, and to <code>string</code> otherwise. Floats are mapped to <code>float</code>, <code>NULL</code> values are mapped to <code>null</code>, and strings and blobs are mapped to <code>string</code>.</p>
		 * @link https://php.net/manual/en/sqlite3result.fetcharray.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function fetchArray(int $mode = SQLITE3_BOTH): array {}

		/**
		 * Closes the result set
		 * <p>Closes the result set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/en/sqlite3result.finalize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function finalize(): bool {}

		/**
		 * Returns the number of columns in the result set
		 * <p>Returns the number of columns in the result set.</p>
		 * @return int <p>Returns the number of columns in the result set.</p>
		 * @link https://php.net/manual/en/sqlite3result.numcolumns.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function numColumns(): int {}

		/**
		 * Resets the result set back to the first row
		 * <p>Resets the result set back to the first row.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the result set is successfully reset back to the first row, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3result.reset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function reset(): bool {}
	}

	/**
	 * <p>A class that handles prepared statements for the SQLite 3 extension.</p>
	 * @link https://php.net/manual/en/class.sqlite3stmt.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3Stmt {

		/**
		 * Binds a parameter to a statement variable
		 * <p>Binds a parameter to a statement variable.</p><p>Before PHP 7.2.14 and 7.3.0, respectively, <code>SQLite3Stmt::reset()</code> must be called after the first call to <code>SQLite3Stmt::execute()</code> if the bound value should be properly updated on following calls to <code>SQLite3Stmt::execute()</code>. If <code>SQLite3Stmt::reset()</code> is not called, the bound value will not change, even if the value assigned to the variable passed to <b>SQLite3Stmt::bindParam()</b> has changed, or <b>SQLite3Stmt::bindParam()</b> has been called again.</p>
		 * @param mixed $sql_param <p>Either a <code>string</code> (for named parameters) or an <code>int</code> (for positional parameters) identifying the statement variable to which the value should be bound. If a named parameter does not start with a colon (<code>:</code>) or an at sign (<code>@</code>), a colon (<code>:</code>) is automatically preprended. Positional parameters start with <code>1</code>.</p>
		 * @param mixed $param <p>The parameter to bind to a statement variable.</p>
		 * @param int $type <p>The data type of the parameter to bind.</p><ul> <li> <p><b><code>SQLITE3_INTEGER</code></b>: The value is a signed integer, stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of the value.</p> </li> <li> <p><b><code>SQLITE3_FLOAT</code></b>: The value is a floating point value, stored as an 8-byte IEEE floating point number.</p> </li> <li> <p><b><code>SQLITE3_TEXT</code></b>: The value is a text string, stored using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).</p> </li> <li> <p><b><code>SQLITE3_BLOB</code></b>: The value is a blob of data, stored exactly as it was input.</p> </li> <li> <p><b><code>SQLITE3_NULL</code></b>: The value is a NULL value.</p> </li> </ul> <p>As of PHP 7.0.7, if <code>type</code> is omitted, it is automatically detected from the type of the <code>param</code>: <code>bool</code> and <code>int</code> are treated as <b><code>SQLITE3_INTEGER</code></b>, <code>float</code> as <b><code>SQLITE3_FLOAT</code></b>, <code>null</code> as <b><code>SQLITE3_NULL</code></b> and all others as <b><code>SQLITE3_TEXT</code></b>. Formerly, if <code>type</code> has been omitted, it has defaulted to <b><code>SQLITE3_TEXT</code></b>.</p> <p><b>Note</b>:</p><p>If <code>param</code> is <b><code>NULL</code></b>, it is always treated as <b><code>SQLITE3_NULL</code></b>, regardless of the given <code>type</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the parameter is bound to the statement variable, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.bindparam.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bindParam(mixed $sql_param, mixed &$param, int $type = NULL): bool {}

		/**
		 * Binds the value of a parameter to a statement variable
		 * <p>Binds the value of a parameter to a statement variable.</p><p>Before PHP 7.2.14 and 7.3.0, respectively, once the statement has been executed, <code>SQLite3Stmt::reset()</code> needs to be called to be able to change the value of bound parameters.</p>
		 * @param mixed $sql_param <p>Either a <code>string</code> (for named parameters) or an <code>int</code> (for positional parameters) identifying the statement variable to which the value should be bound. If a named parameter does not start with a colon (<code>:</code>) or an at sign (<code>@</code>), a colon (<code>:</code>) is automatically preprended. Positional parameters start with <code>1</code>.</p>
		 * @param mixed $value <p>The value to bind to a statement variable.</p>
		 * @param int $type <p>The data type of the value to bind.</p><ul> <li> <p><b><code>SQLITE3_INTEGER</code></b>: The value is a signed integer, stored in 1, 2, 3, 4, 6, or 8 bytes depending on the magnitude of the value.</p> </li> <li> <p><b><code>SQLITE3_FLOAT</code></b>: The value is a floating point value, stored as an 8-byte IEEE floating point number.</p> </li> <li> <p><b><code>SQLITE3_TEXT</code></b>: The value is a text string, stored using the database encoding (UTF-8, UTF-16BE or UTF-16-LE).</p> </li> <li> <p><b><code>SQLITE3_BLOB</code></b>: The value is a blob of data, stored exactly as it was input.</p> </li> <li> <p><b><code>SQLITE3_NULL</code></b>: The value is a NULL value.</p> </li> </ul> <p>As of PHP 7.0.7, if <code>type</code> is omitted, it is automatically detected from the type of the <code>value</code>: <code>bool</code> and <code>int</code> are treated as <b><code>SQLITE3_INTEGER</code></b>, <code>float</code> as <b><code>SQLITE3_FLOAT</code></b>, <code>null</code> as <b><code>SQLITE3_NULL</code></b> and all others as <b><code>SQLITE3_TEXT</code></b>. Formerly, if <code>type</code> has been omitted, it has defaulted to <b><code>SQLITE3_TEXT</code></b>.</p> <p><b>Note</b>:</p><p>If <code>value</code> is <b><code>NULL</code></b>, it is always treated as <b><code>SQLITE3_NULL</code></b>, regardless of the given <code>type</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the value is bound to the statement variable, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.bindvalue.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bindValue(mixed $sql_param, mixed $value, int $type = NULL): bool {}

		/**
		 * Clears all current bound parameters
		 * <p>Clears all current bound parameters (sets them to <b><code>NULL</code></b>).</p><p>This method needs to be used with <code>SQLite3Stmt::reset()</code>. If used alone, any call to <code>SQLite3Stmt::bindValue()</code> or <code>SQLite3Stmt::bindParam()</code> will be of no effect and all bound parameters will have the <b><code>NULL</code></b> value.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on successful clearing of bound parameters, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.clear.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function clear(): bool {}

		/**
		 * Closes the prepared statement
		 * <p>Closes the prepared statement.</p><p><b>Note</b>:  Note that all SQLite3Results that have been retrieved by executing this statement will be invalidated when the statement is closed. </p>
		 * @return bool <p>Returns <b><code>TRUE</code></b></p>
		 * @link https://php.net/manual/en/sqlite3stmt.close.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Executes a prepared statement and returns a result set object
		 * <p>Executes a prepared statement and returns a result set object.</p><p>Result set objects retrieved by calling this method on the same statement object are not independent, but rather share the same underlying structure. Therefore it is recommended to call <code>SQLite3Result::finalize()</code>, before calling <b>SQLite3Stmt::execute()</b> on the same statement object again.</p>
		 * @return SQLite3Result <p>Returns an SQLite3Result object on successful execution of the prepared statement, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.execute.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function execute(): \SQLite3Result {}

		/**
		 * Get the SQL of the statement
		 * <p>Retrieves the SQL of the prepared statement. If <code>expanded</code> is <b><code>FALSE</code></b>, the unmodified SQL is retrieved. If <code>expanded</code> is <b><code>TRUE</code></b>, all query parameters are replaced with their bound values, or with an SQL <code>NULL</code>, if not already bound.</p>
		 * @param bool $expanded <p>Whether to retrieve the expanded SQL. Passing <b><code>TRUE</code></b> is only supported as of libsqlite 3.14.</p>
		 * @return string|false <p>Returns the SQL of the prepared statement, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.getsql.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function getSQL(bool $expanded = FALSE): string|false {}

		/**
		 * Returns the number of parameters within the prepared statement
		 * <p>Returns the number of parameters within the prepared statement.</p>
		 * @return int <p>Returns the number of parameters within the prepared statement.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.paramcount.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function paramCount(): int {}

		/**
		 * Returns whether a statement is definitely read only
		 * <p>Returns whether a statement is definitely read only. A statement is considered read only, if it makes no <i>direct</i> changes to the content of the database file. Note that user defined SQL functions might change the database <i>indirectly</i> as a side effect.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if a statement is definitely read only, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.readonly.php
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function readOnly(): bool {}

		/**
		 * Resets the prepared statement
		 * <p>Resets the prepared statement to its state prior to execution. All bindings remain intact after reset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the statement is successfully reset, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/sqlite3stmt.reset.php
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
