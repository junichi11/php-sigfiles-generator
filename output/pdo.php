<?php



namespace {

	/**
	 * <p>Represents a connection between PHP and a database server.</p>
	 * @link https://php.net/manual/en/class.pdo.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
	 */
	class PDO {

		/**
		 * @var int Represents a boolean data type.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_BOOL = 5;

		/**
		 * @var int Represents the SQL NULL data type.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_NULL = 0;

		/**
		 * @var int Represents the SQL INTEGER data type.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_INT = 1;

		/**
		 * @var int Represents the SQL CHAR, VARCHAR, or other string data type.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_STR = 2;

		/**
		 * @var int Flag to denote a string uses the national character set.   Available since PHP 7.2.0
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_STR_NATL = 1073741824;

		/**
		 * @var int Flag to denote a string uses the regular character set.   Available since PHP 7.2.0
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_STR_CHAR = 536870912;

		/**
		 * @var int Represents the SQL large object data type.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_LOB = 3;

		/**
		 * @var int Represents a recordset type. Not currently supported by any drivers.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_STMT = 4;

		/**
		 * @var int Specifies that the parameter is an INOUT parameter for a stored procedure. You must bitwise-OR this value with an explicit PDO::PARAM_&#42; data type.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_INPUT_OUTPUT = 2147483648;

		/**
		 * @var int Specifies that the default fetch mode shall be used. Available as of PHP 8.0.7.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_DEFAULT = 0;

		/**
		 * @var int Specifies that the fetch method shall return each row as an object with variable names that correspond to the column names returned in the result set. <b><code>PDO::FETCH_LAZY</code></b> creates the object variable names as they are accessed. Not valid inside <code>PDOStatement::fetchAll()</code>.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_LAZY = 1;

		/**
		 * @var int Specifies that the fetch method shall return each row as an array indexed by column name as returned in the corresponding result set. If the result set contains multiple columns with the same name, <b><code>PDO::FETCH_ASSOC</code></b> returns only a single value per column name.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ASSOC = 2;

		/**
		 * @var int Specifies that the fetch method shall return each row as an array indexed by column name as returned in the corresponding result set. If the result set contains multiple columns with the same name, <b><code>PDO::FETCH_NAMED</code></b> returns an array of values per column name.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_NAMED = 11;

		/**
		 * @var int Specifies that the fetch method shall return each row as an array indexed by column number as returned in the corresponding result set, starting at column 0.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_NUM = 3;

		/**
		 * @var int Specifies that the fetch method shall return each row as an array indexed by both column name and number as returned in the corresponding result set, starting at column 0.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_BOTH = 4;

		/**
		 * @var int Specifies that the fetch method shall return each row as an object with property names that correspond to the column names returned in the result set.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_OBJ = 5;

		/**
		 * @var int Specifies that the fetch method shall return TRUE and assign the values of the columns in the result set to the PHP variables to which they were bound with the <code>PDOStatement::bindParam()</code> or <code>PDOStatement::bindColumn()</code> methods.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_BOUND = 6;

		/**
		 * @var int Specifies that the fetch method shall return only a single requested column from the next row in the result set.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_COLUMN = 7;

		/**
		 * @var int Specifies that the fetch method shall return a new instance of the requested class, mapping the columns to named properties in the class.  <p><b>Note</b>:  The magic <b>__set()</b> method is called if the property doesn't exist in the requested class </p>
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_CLASS = 8;

		/**
		 * @var int Specifies that the fetch method shall update an existing instance of the requested class, mapping the columns to named properties in the class.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_INTO = 9;

		/**
		 * @var int Allows completely customize the way data is treated on the fly (only valid inside <code>PDOStatement::fetchAll()</code>).
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_FUNC = 10;

		/**
		 * @var int Group return by values. Usually combined with <b><code>PDO::FETCH_COLUMN</code></b> or <b><code>PDO::FETCH_KEY_PAIR</code></b>.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_GROUP = 65536;

		/**
		 * @var int Fetch only the unique values.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_UNIQUE = 196608;

		/**
		 * @var int Fetch a two-column result into an array where the first column is a key and the second column is the value.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_KEY_PAIR = 12;

		/**
		 * @var int Determine the class name from the value of first column.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_CLASSTYPE = 262144;

		/**
		 * @var int As <b><code>PDO::FETCH_INTO</code></b> but object is provided as a serialized string. The class constructor is never called if this flag is set. Deprecated as of PHP 8.1.0.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_SERIALIZE = 524288;

		/**
		 * @var int Call the constructor before setting properties.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_PROPS_LATE = 1048576;

		/**
		 * @var int If this value is <b><code>false</code></b>, PDO attempts to disable autocommit so that the connection begins a transaction.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_AUTOCOMMIT = 0;

		/**
		 * @var int Setting the prefetch size allows you to balance speed against memory usage for your application. Not all database/driver combinations support setting of the prefetch size. A larger prefetch size results in increased performance at the cost of higher memory usage.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_PREFETCH = 1;

		/**
		 * @var int Sets the timeout value in seconds for communications with the database.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_TIMEOUT = 2;

		/**
		 * @var int See the Errors and error handling section for more information about this attribute.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_ERRMODE = 3;

		/**
		 * @var int This is a read only attribute; it will return information about the version of the database server to which PDO is connected.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_SERVER_VERSION = 4;

		/**
		 * @var int This is a read only attribute; it will return information about the version of the client libraries that the PDO driver is using.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_CLIENT_VERSION = 5;

		/**
		 * @var int This is a read only attribute; it will return some meta information about the database server to which PDO is connected.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_SERVER_INFO = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_CONNECTION_STATUS = 7;

		/**
		 * @var int Force column names to a specific case specified by the <code>PDO::CASE_&#42;</code> constants.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_CASE = 8;

		/**
		 * @var int Get or set the name to use for a cursor. Most useful when using scrollable cursors and positioned updates.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_CURSOR_NAME = 9;

		/**
		 * @var int Selects the cursor type. PDO currently supports either <b><code>PDO::CURSOR_FWDONLY</code></b> and <b><code>PDO::CURSOR_SCROLL</code></b>. Stick with <b><code>PDO::CURSOR_FWDONLY</code></b> unless you know that you need a scrollable cursor.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_CURSOR = 10;

		/**
		 * @var string Returns the name of the driver.  <p></p><p><b>Example #1 using <b><code>PDO::ATTR_DRIVER_NAME</code></b></b></p>  <code> &lt;&#63;php<br>if ($db-&gt;getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {<br> echo "Running on mysql; doing something mysql specific here\n";<br>}<br>&#63;&gt;  </code>
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_DRIVER_NAME = '16';

		/**
		 * @var int Convert empty strings to SQL NULL values on data fetches.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_ORACLE_NULLS = 11;

		/**
		 * @var mixed Request a persistent connection, rather than creating a new connection. See Connections and Connection management for more information on this attribute.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_PERSISTENT = 12;

		/**
		 * @var int Sets the class name of which statements are returned as.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_STATEMENT_CLASS = 13;

		/**
		 * @var int Prepend the containing catalog name to each column name returned in the result set. The catalog name and column name are separated by a decimal (.) character. Support of this attribute is at the driver level; it may not be supported by your driver.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_FETCH_CATALOG_NAMES = 15;

		/**
		 * @var int Prepend the containing table name to each column name returned in the result set. The table name and column name are separated by a decimal (.) character. Support of this attribute is at the driver level; it may not be supported by your driver.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_FETCH_TABLE_NAMES = 14;

		/**
		 * @var int Forces all values fetched to be treated as strings.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_STRINGIFY_FETCHES = 17;

		/**
		 * @var int Sets the maximum column name length.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_MAX_COLUMN_LEN = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_DEFAULT_FETCH_MODE = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_EMULATE_PREPARES = 20;

		/**
		 * @var int Sets the default string parameter type, this can be one of <b><code>PDO::PARAM_STR_NATL</code></b> and <b><code>PDO::PARAM_STR_CHAR</code></b>.   Available since PHP 7.2.0.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ATTR_DEFAULT_STR_PARAM = 21;

		/**
		 * @var int Do not raise an error or exception if an error occurs. The developer is expected to explicitly check for errors. This is the default mode. See Errors and error handling for more information about this attribute.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ERRMODE_SILENT = 0;

		/**
		 * @var int Issue a PHP <b><code>E_WARNING</code></b> message if an error occurs. See Errors and error handling for more information about this attribute.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ERRMODE_WARNING = 1;

		/**
		 * @var int Throw a <code>PDOException</code> if an error occurs. See Errors and error handling for more information about this attribute.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ERRMODE_EXCEPTION = 2;

		/**
		 * @var int Leave column names as returned by the database driver.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const CASE_NATURAL = 0;

		/**
		 * @var int Force column names to lower case.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const CASE_LOWER = 2;

		/**
		 * @var int Force column names to upper case.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const CASE_UPPER = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const NULL_NATURAL = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const NULL_EMPTY_STRING = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const NULL_TO_STRING = 2;

		/**
		 * @var int Fetch the next row in the result set. Valid only for scrollable cursors.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ORI_NEXT = 0;

		/**
		 * @var int Fetch the previous row in the result set. Valid only for scrollable cursors.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ORI_PRIOR = 1;

		/**
		 * @var int Fetch the first row in the result set. Valid only for scrollable cursors.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ORI_FIRST = 2;

		/**
		 * @var int Fetch the last row in the result set. Valid only for scrollable cursors.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ORI_LAST = 3;

		/**
		 * @var int Fetch the requested row by row number from the result set. Valid only for scrollable cursors.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ORI_ABS = 4;

		/**
		 * @var int Fetch the requested row by relative position from the current position of the cursor in the result set. Valid only for scrollable cursors.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const FETCH_ORI_REL = 5;

		/**
		 * @var int Create a <code>PDOStatement</code> object with a forward-only cursor. This is the default cursor choice, as it is the fastest and most common data access pattern in PHP.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const CURSOR_FWDONLY = 0;

		/**
		 * @var int Create a <code>PDOStatement</code> object with a scrollable cursor. Pass the <code>PDO::FETCH_ORI_&#42;</code> constants to control the rows fetched from the result set.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const CURSOR_SCROLL = 1;

		/**
		 * @var string Corresponds to SQLSTATE '00000', meaning that the SQL statement was successfully issued with no errors or warnings. This constant is for your convenience when checking <code>PDO::errorCode()</code> or <code>PDOStatement::errorCode()</code> to determine if an error occurred. You will usually know if this is the case by examining the return code from the method that raised the error condition anyway.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const ERR_NONE = '00000';

		/**
		 * @var int Allocation event
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_ALLOC = 0;

		/**
		 * @var int Deallocation event
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_FREE = 1;

		/**
		 * @var int Event triggered prior to execution of a prepared statement.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_EXEC_PRE = 2;

		/**
		 * @var int Event triggered subsequent to execution of a prepared statement.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_EXEC_POST = 3;

		/**
		 * @var int Event triggered prior to fetching a result from a resultset.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_FETCH_PRE = 4;

		/**
		 * @var int Event triggered subsequent to fetching a result from a resultset.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_FETCH_POST = 5;

		/**
		 * @var int Event triggered during bound parameter registration allowing the driver to normalize the parameter name.
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const PARAM_EVT_NORMALIZE = 6;

		/**
		 * @var int Specifies that a function created with <code>PDO::sqliteCreateFunction()</code> is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement. (Available as of PHP 7.1.4.)
		 * @link https://php.net/manual/en/pdo.constants.php
		 */
		const SQLITE_DETERMINISTIC = 2048;

		/**
		 * Creates a PDO instance representing a connection to a database
		 * <p>Creates a PDO instance to represent a connection to the requested database.</p>
		 * @param string $dsn <p>The Data Source Name, or DSN, contains the information required to connect to the database.</p> <p>In general, a DSN consists of the PDO driver name, followed by a colon, followed by the PDO driver-specific connection syntax. Further information is available from the PDO driver-specific documentation.</p> <p>The <code>dsn</code> parameter supports three different methods of specifying the arguments required to create a database connection:</p> <p></p>  Driver invocation  <p><code>dsn</code> contains the full DSN.</p>   URI invocation  <p><code>dsn</code> consists of <b><code>uri:</code></b> followed by a URI that defines the location of a file containing the DSN string. The URI can specify a local file or a remote URL.</p> <p><b><code>uri:file:///path/to/dsnfile</code></b></p>   Aliasing  <p><code>dsn</code> consists of a name <code>name</code> that maps to <code>pdo.dsn.<code>name</code></code> in php.ini defining the DSN string.</p> <p><b>Note</b>:</p><p>The alias must be defined in php.ini, and not .htaccess or httpd.conf</p>
		 * @param ?string $username <p>The user name for the DSN string. This parameter is optional for some PDO drivers.</p>
		 * @param ?string $password <p>The password for the DSN string. This parameter is optional for some PDO drivers.</p>
		 * @param ?array $options <p>A key=&gt;value array of driver-specific connection options.</p>
		 * @return self
		 * @link https://php.net/manual/en/pdo.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function __construct(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null) {}

		/**
		 * Initiates a transaction
		 * <p>Turns off autocommit mode. While autocommit mode is turned off, changes made to the database via the PDO object instance are not committed until you end the transaction by calling <code>PDO::commit()</code>. Calling <code>PDO::rollBack()</code> will roll back all changes to the database and return the connection to autocommit mode.</p><p>Some databases, including MySQL, automatically issue an implicit COMMIT when a database definition language (DDL) statement such as DROP TABLE or CREATE TABLE is issued within a transaction. The implicit COMMIT will prevent you from rolling back any other changes within the transaction boundary.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdo.begintransaction.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function beginTransaction(): bool {}

		/**
		 * Commits a transaction
		 * <p>Commits a transaction, returning the database connection to autocommit mode until the next call to <code>PDO::beginTransaction()</code> starts a new transaction.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdo.commit.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function commit(): bool {}

		/**
		 * Fetch the SQLSTATE associated with the last operation on the database handle
		 * @return ?string <p>Returns an SQLSTATE, a five characters alphanumeric identifier defined in the ANSI SQL-92 standard. Briefly, an SQLSTATE consists of a two characters class value followed by a three characters subclass value. A class value of 01 indicates a warning and is accompanied by a return code of SQL_SUCCESS_WITH_INFO. Class values other than '01', except for the class 'IM', indicate an error. The class 'IM' is specific to warnings and errors that derive from the implementation of PDO (or perhaps ODBC, if you're using the ODBC driver) itself. The subclass value '000' in any class indicates that there is no subclass for that SQLSTATE.</p><p><b>PDO::errorCode()</b> only retrieves error codes for operations performed directly on the database handle. If you create a PDOStatement object through <code>PDO::prepare()</code> or <code>PDO::query()</code> and invoke an error on the statement handle, <b>PDO::errorCode()</b> will not reflect that error. You must call <code>PDOStatement::errorCode()</code> to return the error code for an operation performed on a particular statement handle.</p><p>Returns <b><code>null</code></b> if no operation has been run on the database handle.</p>
		 * @link https://php.net/manual/en/pdo.errorcode.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function errorCode(): ?string {}

		/**
		 * Fetch extended error information associated with the last operation on the database handle
		 * @return array <p><b>PDO::errorInfo()</b> returns an array of error information about the last operation performed by this database handle. The array consists of at least the following fields:</p>   Element Information     0 SQLSTATE error code (a five characters alphanumeric identifier defined in the ANSI SQL standard).   1 Driver-specific error code.   2 Driver-specific error message.   <p><b>Note</b>:</p><p>If the SQLSTATE error code is not set or there is no driver-specific error, the elements following element 0 will be set to <b><code>null</code></b>.</p> <p><b>PDO::errorInfo()</b> only retrieves error information for operations performed directly on the database handle. If you create a PDOStatement object through <code>PDO::prepare()</code> or <code>PDO::query()</code> and invoke an error on the statement handle, <b>PDO::errorInfo()</b> will not reflect the error from the statement handle. You must call <code>PDOStatement::errorInfo()</code> to return the error information for an operation performed on a particular statement handle.</p>
		 * @link https://php.net/manual/en/pdo.errorinfo.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function errorInfo(): array {}

		/**
		 * Execute an SQL statement and return the number of affected rows
		 * <p><b>PDO::exec()</b> executes an SQL statement in a single function call, returning the number of rows affected by the statement.</p><p><b>PDO::exec()</b> does not return results from a SELECT statement. For a SELECT statement that you only need to issue once during your program, consider issuing <code>PDO::query()</code>. For a statement that you need to issue multiple times, prepare a PDOStatement object with <code>PDO::prepare()</code> and issue the statement with <code>PDOStatement::execute()</code>.</p>
		 * @param string $statement <p>The SQL statement to prepare and execute.</p> <p>Data inside the query should be properly escaped.</p>
		 * @return int|false <p><b>PDO::exec()</b> returns the number of rows that were modified or deleted by the SQL statement you issued. If no rows were affected, <b>PDO::exec()</b> returns <code>0</code>.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p><p>The following example incorrectly relies on the return value of <b>PDO::exec()</b>, wherein a statement that affected 0 rows results in a call to <code>die()</code>:</p> <code> &lt;&#63;php<br>$db-&gt;exec() or die(print_r($db-&gt;errorInfo(), true)); // incorrect<br>&#63;&gt;  </code>
		 * @link https://php.net/manual/en/pdo.exec.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function exec(string $statement): int|false {}

		/**
		 * Retrieve a database connection attribute
		 * <p>This function returns the value of a database connection attribute. To retrieve PDOStatement attributes, refer to <code>PDOStatement::getAttribute()</code>.</p><p>Note that some database/driver combinations may not support all of the database connection attributes.</p>
		 * @param int $attribute <p>One of the <code>PDO::ATTR_&#42;</code> constants. The generic attributes that apply to database connections are as follows:</p><ul> <li><code>PDO::ATTR_AUTOCOMMIT</code></li> <li><code>PDO::ATTR_CASE</code></li> <li><code>PDO::ATTR_CLIENT_VERSION</code></li> <li><code>PDO::ATTR_CONNECTION_STATUS</code></li> <li><code>PDO::ATTR_DRIVER_NAME</code></li> <li><code>PDO::ATTR_ERRMODE</code></li> <li><code>PDO::ATTR_ORACLE_NULLS</code></li> <li><code>PDO::ATTR_PERSISTENT</code></li> <li><code>PDO::ATTR_PREFETCH</code></li> <li><code>PDO::ATTR_SERVER_INFO</code></li> <li><code>PDO::ATTR_SERVER_VERSION</code></li> <li><code>PDO::ATTR_TIMEOUT</code></li> </ul>  Some drivers may make use of additional driver specific attributes. Note that driver specific attributes <i>must not</i> be used with other drivers.
		 * @return mixed <p>A successful call returns the value of the requested PDO attribute. An unsuccessful call returns <code>null</code>.</p>
		 * @link https://php.net/manual/en/pdo.getattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function getAttribute(int $attribute): mixed {}

		/**
		 * Return an array of available PDO drivers
		 * <p>This function returns all currently available PDO drivers which can be used in <code>DSN</code> parameter of <code>PDO::__construct()</code>.</p>
		 * @return array <p><b>PDO::getAvailableDrivers()</b> returns an array of PDO driver names. If no drivers are available, it returns an empty array.</p>
		 * @link https://php.net/manual/en/pdo.getavailabledrivers.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 1.0.3
		 */
		public static function getAvailableDrivers(): array {}

		/**
		 * Checks if inside a transaction
		 * <p>Checks if a transaction is currently active within the driver. This method only works for database drivers that support transactions.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if a transaction is currently active, and <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/pdo.intransaction.php
		 * @since PHP 5 >= 5.3.3, Bundled pdo_pgsql, PHP 7, PHP 8
		 */
		public function inTransaction(): bool {}

		/**
		 * Returns the ID of the last inserted row or sequence value
		 * <p>Returns the ID of the last inserted row, or the last value from a sequence object, depending on the underlying driver. For example, PDO_PGSQL requires you to specify the name of a sequence object for the <code>name</code> parameter.</p><p><b>Note</b>:</p><p>This method may not return a meaningful or consistent result across different PDO drivers, because the underlying database may not even support the notion of auto-increment fields or sequences.</p>
		 * @param ?string $name <p>Name of the sequence object from which the ID should be returned.</p>
		 * @return string|false <p>If a sequence name was not specified for the <code>name</code> parameter, <b>PDO::lastInsertId()</b> returns a string representing the row ID of the last row that was inserted into the database.</p><p>If a sequence name was specified for the <code>name</code> parameter, <b>PDO::lastInsertId()</b> returns a string representing the last value retrieved from the specified sequence object.</p><p>If the PDO driver does not support this capability, <b>PDO::lastInsertId()</b> triggers an <code>IM001</code> SQLSTATE.</p>
		 * @link https://php.net/manual/en/pdo.lastinsertid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function lastInsertId(?string $name = null): string|false {}

		/**
		 * Prepares a statement for execution and returns a statement object
		 * <p>Prepares an SQL statement to be executed by the <code>PDOStatement::execute()</code> method. The statement template can contain zero or more named (:name) or question mark (&#63;) parameter markers for which real values will be substituted when the statement is executed. Both named and question mark parameter markers cannot be used within the same statement template; only one or the other parameter style. Use these parameters to bind any user-input, do not include the user-input directly in the query.</p><p>You must include a unique parameter marker for each value you wish to pass in to the statement when you call <code>PDOStatement::execute()</code>. You cannot use a named parameter marker of the same name more than once in a prepared statement, unless emulation mode is on.</p><p><b>Note</b>:</p><p>Parameter markers can represent a complete data literal only. Neither part of literal, nor keyword, nor identifier, nor whatever arbitrary query part can be bound using parameters. For example, you cannot bind multiple values to a single parameter in the IN() clause of an SQL statement.</p><p>Calling <b>PDO::prepare()</b> and <code>PDOStatement::execute()</code> for statements that will be issued multiple times with different parameter values optimizes the performance of your application by allowing the driver to negotiate client and/or server side caching of the query plan and meta information. Also, calling <b>PDO::prepare()</b> and <code>PDOStatement::execute()</code> helps to prevent SQL injection attacks by eliminating the need to manually quote and escape the parameters.</p><p>PDO will emulate prepared statements/bound parameters for drivers that do not natively support them, and can also rewrite named or question mark style parameter markers to something more appropriate, if the driver supports one style but not the other.</p><p><b>Note</b>:  The parser used for emulated prepared statements and for rewriting named or question mark style parameters supports the non standard backslash escapes for single- and double quotes. That means that terminating quotes immediately preceeded by a backslash are not recognized as such, which may result in wrong detection of parameters causing the prepared statement to fail when it is executed. A work-around is to not use emulated prepares for such SQL queries, and to avoid rewriting of parameters by using a parameter style which is natively supported by the driver. </p><p>As of PHP 7.4.0, question marks can be escaped by doubling them. That means that the <code>&#63;&#63;</code> string will be translated to <code>&#63;</code> when sending the query to the database.</p>
		 * @param string $query <p>This must be a valid SQL statement template for the target database server.</p>
		 * @param array $options <p>This array holds one or more key=&gt;value pairs to set attribute values for the PDOStatement object that this method returns. You would most commonly use this to set the <code>PDO::ATTR_CURSOR</code> value to <code>PDO::CURSOR_SCROLL</code> to request a scrollable cursor. Some drivers have driver-specific options that may be set at prepare-time.</p>
		 * @return PDOStatement|false <p>If the database server successfully prepares the statement, <b>PDO::prepare()</b> returns a <code>PDOStatement</code> object. If the database server cannot successfully prepare the statement, <b>PDO::prepare()</b> returns <b><code>false</code></b> or emits <code>PDOException</code> (depending on error handling).</p><p><b>Note</b>:</p><p>Emulated prepared statements does not communicate with the database server so <b>PDO::prepare()</b> does not check the statement.</p>
		 * @link https://php.net/manual/en/pdo.prepare.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PHP 8,PECL pdo >= 0.1.0
		 */
		public function prepare(string $query, array $options = []): \PDOStatement|false {}

		/**
		 * Prepares and executes an SQL statement without placeholders
		 * <p><b>PDO::query()</b> prepares and executes an SQL statement in a single function call, returning the statement as a <code>PDOStatement</code> object.</p><p>For a query that you need to issue multiple times, you will realize better performance if you prepare a <code>PDOStatement</code> object using <code>PDO::prepare()</code> and issue the statement with multiple calls to <code>PDOStatement::execute()</code>.</p><p>If you do not fetch all of the data in a result set before issuing your next call to <b>PDO::query()</b>, your call may fail. Call <code>PDOStatement::closeCursor()</code> to release the database resources associated with the <code>PDOStatement</code> object before issuing your next call to <b>PDO::query()</b>.</p><p><b>Note</b>:</p><p>If the <code>query</code> contains placeholders, the statement must be prepared and executed separately using <code>PDO::prepare()</code> and <code>PDOStatement::execute()</code> methods.</p>
		 * @param string $query <p>The SQL statement to prepare and execute.</p> <p>If the SQL contains placeholders, <code>PDO::prepare()</code> and <code>PDOStatement::execute()</code> must be used instead. Alternatively, the SQL can be prepared manually before calling <b>PDO::query()</b>, with the data properly formatted using <code>PDO::quote()</code> if the driver supports it.</p>
		 * @param ?int $fetchMode <p>The default fetch mode for the returned <code>PDOStatement</code>. It must be one of the <code>PDO::FETCH_&#42;</code> constants.</p> <p>If this argument is passed to the function, the remaining arguments will be treated as though <code>PDOStatement::setFetchMode()</code> was called on the resultant statement object. The subsequent arguments vary depending on the selected fetch mode.</p>
		 * @return PDOStatement|false <p>Returns a <code>PDOStatement</code> object or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdo.query.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function query(string $query, ?int $fetchMode = null): \PDOStatement|false {}

		/**
		 * Quotes a string for use in a query
		 * <p><b>PDO::quote()</b> places quotes around the input string (if required) and escapes special characters within the input string, using a quoting style appropriate to the underlying driver.</p><p>If you are using this function to build SQL statements, you are <i>strongly</i> recommended to use <code>PDO::prepare()</code> to prepare SQL statements with bound parameters instead of using <b>PDO::quote()</b> to interpolate user input into an SQL statement. Prepared statements with bound parameters are not only more portable, more convenient, immune to SQL injection, but are often much faster to execute than interpolated queries, as both the server and client side can cache a compiled form of the query.</p><p>Not all PDO drivers implement this method (notably PDO_ODBC). Consider using prepared statements instead.</p><p>The character set must be set either on the server level, or within the database connection itself (depending on the driver) for it to affect <b>PDO::quote()</b>. See the driver-specific documentation for more information.</p>
		 * @param string $string <p>The string to be quoted.</p>
		 * @param int $type <p>Provides a hint to the type of data for drivers that have alternate quoting styles. For example <b><code>PDO_PARAM_LOB</code></b> will tell the driver to escape binary data.</p>
		 * @return string|false <p>Returns a quoted string that is theoretically safe to pass into an SQL statement. Returns <b><code>false</code></b> if the driver does not support quoting in this way.</p>
		 * @link https://php.net/manual/en/pdo.quote.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.1
		 */
		public function quote(string $string, int $type = PDO::PARAM_STR): string|false {}

		/**
		 * Rolls back a transaction
		 * <p>Rolls back the current transaction, as initiated by <code>PDO::beginTransaction()</code>.</p><p>If the database was set to autocommit mode, this function will restore autocommit mode after it has rolled back the transaction.</p><p>Some databases, including MySQL, automatically issue an implicit COMMIT when a database definition language (DDL) statement such as DROP TABLE or CREATE TABLE is issued within a transaction. The implicit COMMIT will prevent you from rolling back any other changes within the transaction boundary.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdo.rollback.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function rollBack(): bool {}

		/**
		 * Set an attribute
		 * <p>Sets an attribute on the database handle. Some available generic attributes are listed below; some drivers may make use of additional driver specific attributes. Note that driver specific attributes <i>must not</i> be used with other drivers.</p><p>Force column names to a specific case. Can take one of the following values:</p><p>Error reporting mode of PDO. Can take one of the following values:</p><p><b>Note</b>:  This attribute is available with all drivers, not just Oracle. </p><p>Determines if and how <b><code>null</code></b> and empty strings should be converted. Can take one of the following values:</p><p>Whether to convert numeric values to strings when fetching. Takes a value of type <code>bool</code>: <b><code>true</code></b> to enable and <b><code>false</code></b> to disable.</p><p>Set user-supplied statement class derived from PDOStatement. Requires <code>array(string classname, array(mixed constructor_args))</code>.</p><p>Cannot be used with persistent PDO instances.</p><p>Specifies the timeout duration in seconds. Takes a value of type <code>int</code>.</p><p><b>Note</b>:</p><p>Not all drivers support this option, and its meaning may differ from driver to driver. For example, SQLite will wait for up to this time value before giving up on obtaining a writable lock, but other drivers may interpret this as a connection or a read timeout interval.</p><p><b>Note</b>:  Only available for the OCI, Firebird, and MySQL drivers. </p><p>Whether to autocommit every single statement. Takes a value of type <code>bool</code>: <b><code>true</code></b> to enable and <b><code>false</code></b> to disable. By default, <b><code>true</code></b>.</p><p><b>Note</b>:  Only available for the OCI, Firebird, and MySQL drivers. </p><p>Whether enable or disable emulation of prepared statements. Some drivers do not support prepared statements natively or have limited support for them. If set to <b><code>true</code></b> PDO will always emulate prepared statements, otherwise PDO will attempt to use native prepared statements. In case the driver cannot successfully prepare the current query, PDO will always fall back to emulating the prepared statement.</p><p><b>Note</b>:  Only available for the MySQL driver. </p><p>Whether to use buffered queries. Takes a value of type <code>bool</code>: <b><code>true</code></b> to enable and <b><code>false</code></b> to disable. By default, <b><code>false</code></b>.</p><p>Set the default fetch mode. A description of the modes and how to use them is available in the <code>PDOStatement::fetch()</code> documentation.</p>
		 * @param int $attribute <p>The attribute to modify.</p>
		 * @param mixed $value <p>The value to set the <code>attribute</code>, might require a specific type depending on the attribute.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdo.setattribute.php
		 * @see PDO::getAttribute(), PDOStatement::getAttribute(), PDOStatement::setAttribute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function setAttribute(int $attribute, mixed $value): bool {}
	}

	/**
	 * <p>Represents an error raised by PDO. You should not throw a <b>PDOException</b> from your own code. See Exceptions for more information about Exceptions in PHP.</p>
	 * @link https://php.net/manual/en/class.pdoexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class PDOException extends \RuntimeException {

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var ?array <p>Corresponds to <code>PDO::errorInfo()</code> or <code>PDOStatement::errorInfo()</code></p>
		 * @link https://php.net/manual/en/class.pdoexception.php#pdoexception.props.errorinfo
		 */
		public $errorInfo = null;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * Construct the exception
		 * <p>Constructs the Exception.</p>
		 * @param string $message <p>The Exception message to throw.</p>
		 * @param int $code <p>The Exception code.</p>
		 * @param ?\Throwable $previous <p>The previous exception used for the exception chaining.</p>
		 * @return self
		 * @link https://php.net/manual/en/exception.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null) {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a prepared statement and, after the statement is executed, an associated result set.</p>
	 * @link https://php.net/manual/en/class.pdostatement.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 1.0.0
	 */
	class PDOStatement implements \IteratorAggregate {

		/**
		 * @var string <p>Used query string.</p>
		 * @link https://php.net/manual/en/class.pdostatement.php#pdostatement.props.querystring
		 */
		public $queryString;

		/**
		 * Bind a column to a PHP variable
		 * <p><b>PDOStatement::bindColumn()</b> arranges to have a particular variable bound to a given column in the result-set from a query. Each call to <code>PDOStatement::fetch()</code> or <code>PDOStatement::fetchAll()</code> will update all the variables that are bound to columns.</p><p><b>Note</b>:</p><p>Since information about the columns is not always available to PDO until the statement is executed, portable applications should call this function <i>after</i> <code>PDOStatement::execute()</code>.</p><p>However, to be able to bind a LOB column as a stream when using the <i>PgSQL driver</i>, applications should call this method <i>before</i> calling <code>PDOStatement::execute()</code>, otherwise the large object OID will be returned as an integer.</p>
		 * @param string|int $column <p>Number of the column (1-indexed) or name of the column in the result set. If using the column name, be aware that the name should match the case of the column, as returned by the driver.</p>
		 * @param mixed $var <p>Name of the PHP variable to which the column will be bound.</p>
		 * @param int $type <p>Data type of the parameter, specified by the <code>PDO::PARAM_&#42;</code> constants.</p>
		 * @param int $maxLength <p>A hint for pre-allocation.</p>
		 * @param mixed $driverOptions <p>Optional parameter(s) for the driver.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.bindcolumn.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function bindColumn(string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null): bool {}

		/**
		 * Binds a parameter to the specified variable name
		 * <p>Binds a PHP variable to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement. Unlike <code>PDOStatement::bindValue()</code>, the variable is bound as a reference and will only be evaluated at the time that <code>PDOStatement::execute()</code> is called.</p><p>Most parameters are input parameters, that is, parameters that are used in a read-only fashion to build up the query (but may nonetheless be cast according to <code>type</code>). Some drivers support the invocation of stored procedures that return data as output parameters, and some also as input/output parameters that both send in data and are updated to receive it.</p>
		 * @param string|int $param <p>Parameter identifier. For a prepared statement using named placeholders, this will be a parameter name of the form :name. For a prepared statement using question mark placeholders, this will be the 1-indexed position of the parameter.</p>
		 * @param mixed $var <p>Name of the PHP variable to bind to the SQL statement parameter.</p>
		 * @param int $type <p>Explicit data type for the parameter using the <code>PDO::PARAM_&#42;</code> constants. To return an INOUT parameter from a stored procedure, use the bitwise OR operator to set the <b><code>PDO::PARAM_INPUT_OUTPUT</code></b> bits for the <code>type</code> parameter.</p>
		 * @param int $maxLength <p>Length of the data type. To indicate that a parameter is an OUT parameter from a stored procedure, you must explicitly set the length. Meaningful only when <code>type</code> parameter is <b><code>PDO::PARAM_INPUT_OUTPUT</code></b>.</p>
		 * @param mixed $driverOptions
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.bindparam.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null): bool {}

		/**
		 * Binds a value to a parameter
		 * <p>Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.</p>
		 * @param string|int $param <p>Parameter identifier. For a prepared statement using named placeholders, this will be a parameter name of the form :name. For a prepared statement using question mark placeholders, this will be the 1-indexed position of the parameter.</p>
		 * @param mixed $value <p>The value to bind to the parameter.</p>
		 * @param int $type <p>Explicit data type for the parameter using the <code>PDO::PARAM_&#42;</code> constants.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.bindvalue.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 1.0.0
		 */
		public function bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool {}

		/**
		 * Closes the cursor, enabling the statement to be executed again
		 * <p><b>PDOStatement::closeCursor()</b> frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again.</p><p>This method is useful for database drivers that do not support executing a PDOStatement object when a previously executed PDOStatement object still has unfetched rows. If your database driver suffers from this limitation, the problem may manifest itself in an out-of-sequence error.</p><p><b>PDOStatement::closeCursor()</b> is implemented either as an optional driver specific method (allowing for maximum efficiency), or as the generic PDO fallback if no driver specific function is installed. The PDO generic fallback is semantically the same as writing the following code in your PHP script:</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.closecursor.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.9.0
		 */
		public function closeCursor(): bool {}

		/**
		 * Returns the number of columns in the result set
		 * <p>Use <b>PDOStatement::columnCount()</b> to return the number of columns in the result set represented by the PDOStatement object.</p><p>If the PDOStatement object was returned from <code>PDO::query()</code>, the column count is immediately available.</p><p>If the PDOStatement object was returned from <code>PDO::prepare()</code>, an accurate column count will not be available until you invoke <code>PDOStatement::execute()</code>.</p>
		 * @return int <p>Returns the number of columns in the result set represented by the PDOStatement object, even if the result set is empty. If there is no result set, <b>PDOStatement::columnCount()</b> returns <code>0</code>.</p>
		 * @link https://php.net/manual/en/pdostatement.columncount.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function columnCount(): int {}

		/**
		 * Dump an SQL prepared command
		 * <p>Dumps the information contained by a prepared statement directly on the output. It will provide the <code>SQL</code> query in use, the number of parameters used (<code>Params</code>), the list of parameters with their key name or position, their name, their position in the query (if this is supported by the PDO driver, otherwise, it will be -1), type (<code>param_type</code>) as an integer, and a boolean value <code>is_param</code>.</p><p>This is a debug function, which dumps the data directly to the normal output.</p><p>As with anything that outputs its result directly to the browser, the output-control functions can be used to capture the output of this function, and save it in a <code>string</code> (for example).</p><p>This will only dump the parameters in the statement at the moment of the dump. Extra parameters are not stored in the statement, and not displayed.</p>
		 * @return ?bool <p>Returns <b><code>null</code></b>, or <b><code>false</code></b> in case of an error.</p>
		 * @link https://php.net/manual/en/pdostatement.debugdumpparams.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.9.0
		 */
		public function debugDumpParams(): ?bool {}

		/**
		 * Fetch the SQLSTATE associated with the last operation on the statement handle
		 * @return ?string <p>Identical to <code>PDO::errorCode()</code>, except that <b>PDOStatement::errorCode()</b> only retrieves error codes for operations performed with PDOStatement objects.</p>
		 * @link https://php.net/manual/en/pdostatement.errorcode.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function errorCode(): ?string {}

		/**
		 * Fetch extended error information associated with the last operation on the statement handle
		 * @return array <p><b>PDOStatement::errorInfo()</b> returns an array of error information about the last operation performed by this statement handle. The array consists of at least the following fields:</p>   Element Information     0 SQLSTATE error code (a five characters alphanumeric identifier defined in the ANSI SQL standard).   1 Driver specific error code.   2 Driver specific error message.
		 * @link https://php.net/manual/en/pdostatement.errorinfo.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function errorInfo(): array {}

		/**
		 * Executes a prepared statement
		 * <p>Execute the prepared statement. If the prepared statement included parameter markers, either:</p><p><code>PDOStatement::bindParam()</code> and/or <code>PDOStatement::bindValue()</code> has to be called to bind either variables or values (respectively) to the parameter markers. Bound variables pass their value as input and receive the output value, if any, of their associated parameter markers</p><p>or an array of input-only parameter values has to be passed</p>
		 * @param ?array $params <p>An array of values with as many elements as there are bound parameters in the SQL statement being executed. All values are treated as <b><code>PDO::PARAM_STR</code></b>.</p> <p>Multiple values cannot be bound to a single parameter; for example, it is not allowed to bind two values to a single named parameter in an IN() clause.</p> <p>Binding more values than specified is not possible; if more keys exist in <code>params</code> than in the SQL specified in the <code>PDO::prepare()</code>, then the statement will fail and an error is emitted.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.execute.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function execute(?array $params = null): bool {}

		/**
		 * Fetches the next row from a result set
		 * <p>Fetches a row from a result set associated with a PDOStatement object. The <code>mode</code> parameter determines how PDO returns the row.</p>
		 * @param int $mode <p>Controls how the next row will be returned to the caller. This value must be one of the <code>PDO::FETCH_&#42;</code> constants, defaulting to value of <code>PDO::ATTR_DEFAULT_FETCH_MODE</code> (which defaults to <code>PDO::FETCH_BOTH</code>).</p><ul> <li><p><code>PDO::FETCH_ASSOC</code>: returns an array indexed by column name as returned in your result set</p></li> <li><p><code>PDO::FETCH_BOTH</code> (default): returns an array indexed by both column name and 0-indexed column number as returned in your result set</p></li> <li><p><code>PDO::FETCH_BOUND</code>: returns <b><code>true</code></b> and assigns the values of the columns in your result set to the PHP variables to which they were bound with the <code>PDOStatement::bindColumn()</code> method</p></li> <li><p><code>PDO::FETCH_CLASS</code>: returns a new instance of the requested class, mapping the columns of the result set to named properties in the class, and calling the constructor afterwards, unless <code>PDO::FETCH_PROPS_LATE</code> is also given. If <code>mode</code> includes PDO::FETCH_CLASSTYPE (e.g. <code>PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE</code>) then the name of the class is determined from a value of the first column.</p></li> <li><p><code>PDO::FETCH_INTO</code>: updates an existing instance of the requested class, mapping the columns of the result set to named properties in the class</p></li> <li><p><code>PDO::FETCH_LAZY</code>: combines <code>PDO::FETCH_BOTH</code> and <code>PDO::FETCH_OBJ</code>, creating the object variable names as they are accessed</p></li> <li><p><code>PDO::FETCH_NAMED</code>: returns an array with the same form as <code>PDO::FETCH_ASSOC</code>, except that if there are multiple columns with the same name, the value referred to by that key will be an array of all the values in the row that had that column name</p></li> <li><p><code>PDO::FETCH_NUM</code>: returns an array indexed by column number as returned in your result set, starting at column 0</p></li> <li><p><code>PDO::FETCH_OBJ</code>: returns an anonymous object with property names that correspond to the column names returned in your result set</p></li> <li><p><code>PDO::FETCH_PROPS_LATE</code>: when used with <code>PDO::FETCH_CLASS</code>, the constructor of the class is called before the properties are assigned from the respective column values.</p></li> </ul>
		 * @param int $cursorOrientation <p>For a PDOStatement object representing a scrollable cursor, this value determines which row will be returned to the caller. This value must be one of the <code>PDO::FETCH_ORI_&#42;</code> constants, defaulting to <code>PDO::FETCH_ORI_NEXT</code>. To request a scrollable cursor for your PDOStatement object, you must set the <code>PDO::ATTR_CURSOR</code> attribute to <code>PDO::CURSOR_SCROLL</code> when you prepare the SQL statement with <code>PDO::prepare()</code>.</p>
		 * @param int $cursorOffset <p>For a PDOStatement object representing a scrollable cursor for which the <code>cursorOrientation</code> parameter is set to <code>PDO::FETCH_ORI_ABS</code>, this value specifies the absolute number of the row in the result set that shall be fetched.</p> <p>For a PDOStatement object representing a scrollable cursor for which the <code>cursorOrientation</code> parameter is set to <code>PDO::FETCH_ORI_REL</code>, this value specifies the row to fetch relative to the cursor position before <b>PDOStatement::fetch()</b> was called.</p>
		 * @return mixed <p>The return value of this function on success depends on the fetch type. In all cases, <b><code>false</code></b> is returned on failure or if there are no more rows.</p>
		 * @link https://php.net/manual/en/pdostatement.fetch.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0): mixed {}

		/**
		 * Fetches the remaining rows from a result set
		 * @param int $mode <p>Controls the contents of the returned array as documented in <code>PDOStatement::fetch()</code>. Defaults to value of <b><code>PDO::ATTR_DEFAULT_FETCH_MODE</code></b> (which defaults to <b><code>PDO::FETCH_BOTH</code></b>)</p> <p>To return an array consisting of all values of a single column from the result set, specify <b><code>PDO::FETCH_COLUMN</code></b>. You can specify which column you want with the <code>column</code> parameter.</p> <p>To fetch only the unique values of a single column from the result set, bitwise-OR <b><code>PDO::FETCH_COLUMN</code></b> with <b><code>PDO::FETCH_UNIQUE</code></b>.</p> <p>To return an associative array grouped by the values of a specified column, bitwise-OR <b><code>PDO::FETCH_COLUMN</code></b> with <b><code>PDO::FETCH_GROUP</code></b>.</p>
		 * @return array <p><b>PDOStatement::fetchAll()</b> returns an array containing all of the remaining rows in the result set. The array represents each row as either an array of column values or an object with properties corresponding to each column name. An empty array is returned if there are zero results to fetch.</p><p>Using this method to fetch large result sets will result in a heavy demand on system and possibly network resources. Rather than retrieving all of the data and manipulating it in PHP, consider using the database server to manipulate the result sets. For example, use the WHERE and ORDER BY clauses in SQL to restrict results before retrieving and processing them with PHP.</p>
		 * @link https://php.net/manual/en/pdostatement.fetchall.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function fetchAll(int $mode = PDO::FETCH_DEFAULT): array {}

		/**
		 * Returns a single column from the next row of a result set
		 * <p>Returns a single column from the next row of a result set or <b><code>false</code></b> if there are no more rows.</p><p><b>Note</b>:</p><p><b>PDOStatement::fetchColumn()</b> should not be used to retrieve boolean columns, as it is impossible to distinguish a value of <b><code>false</code></b> from there being no more rows to retrieve. Use <code>PDOStatement::fetch()</code> instead.</p>
		 * @param int $column <p>0-indexed number of the column you wish to retrieve from the row. If no value is supplied, <b>PDOStatement::fetchColumn()</b> fetches the first column.</p>
		 * @return mixed <p><b>PDOStatement::fetchColumn()</b> returns a single column from the next row of a result set or <b><code>false</code></b> if there are no more rows.</p><p><b>Warning</b></p> <p>There is no way to return another column from the same row if you use <b>PDOStatement::fetchColumn()</b> to retrieve data.</p>
		 * @link https://php.net/manual/en/pdostatement.fetchcolumn.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.9.0
		 */
		public function fetchColumn(int $column = 0): mixed {}

		/**
		 * Fetches the next row and returns it as an object
		 * <p>Fetches the next row and returns it as an object. This function is an alternative to <code>PDOStatement::fetch()</code> with <b><code>PDO::FETCH_CLASS</code></b> or <b><code>PDO::FETCH_OBJ</code></b> style.</p><p>When an object is fetched, its properties are assigned from respective column values, and afterwards its constructor is invoked.</p>
		 * @param ?string $class <p>Name of the created class.</p>
		 * @param array $constructorArgs <p>Elements of this array are passed to the constructor.</p>
		 * @return object|false <p>Returns an instance of the required class with property names that correspond to the column names or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.fetchobject.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.4
		 */
		public function fetchObject(?string $class = "stdClass", array $constructorArgs = []): object|false {}

		/**
		 * Retrieve a statement attribute
		 * <p>Gets an attribute of the statement. Currently, no generic attributes exist but only driver specific:</p><p><code>PDO::ATTR_CURSOR_NAME</code> (Firebird and ODBC specific): Get the name of cursor for <code>UPDATE ... WHERE CURRENT OF</code>.</p>
		 * @param int $name <p>The attribute to query.</p>
		 * @return mixed <p>Returns the attribute value.</p>
		 * @link https://php.net/manual/en/pdostatement.getattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function getAttribute(int $name): mixed {}

		/**
		 * Returns metadata for a column in a result set
		 * <p>Retrieves the metadata for a 0-indexed column in a result set as an associative array.</p><p>Some drivers may not implement <b>PDOStatement::getColumnMeta()</b>, as it is optional. However, all PDO drivers documented in the manual implement this function.</p>
		 * @param int $column <p>The 0-indexed column in the result set.</p>
		 * @return array|false <p>Returns an associative array containing the following values representing the metadata for a single column:</p> <b>Column metadata</b>     Name Value     <code>native_type</code> The PHP native type used to represent the column value.   <code>driver:decl_type</code> The SQL type used to represent the column value in the database. If the column in the result set is the result of a function, this value is not returned by <b>PDOStatement::getColumnMeta()</b>.    <code>flags</code> Any flags set for this column.   <code>name</code> The name of this column as returned by the database.   <code>table</code> The name of this column's table as returned by the database.   <code>len</code> The length of this column. Normally <code>-1</code> for types other than floating point decimals.   <code>precision</code> The numeric precision of this column. Normally <code>0</code> for types other than floating point decimals.   <code>pdo_type</code> The type of this column as represented by the <code>PDO::PARAM_&#42;</code> constants.   <p>Returns <b><code>false</code></b> if the requested column does not exist in the result set, or if no result set exists.</p>
		 * @link https://php.net/manual/en/pdostatement.getcolumnmeta.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function getColumnMeta(int $column): array|false {}

		/**
		 * Gets result set iterator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return Iterator
		 * @link https://php.net/manual/en/pdostatement.getiterator.php
		 * @since PHP 8
		 */
		public function getIterator(): \Iterator {}

		/**
		 * Advances to the next rowset in a multi-rowset statement handle
		 * <p>Some database servers support stored procedures that return more than one rowset (also known as a result set). <b>PDOStatement::nextRowset()</b> enables you to access the second and subsequent rowsets associated with a PDOStatement object. Each rowset can have a different set of columns from the preceding rowset.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.nextrowset.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function nextRowset(): bool {}

		/**
		 * Returns the number of rows affected by the last SQL statement
		 * <p><b>PDOStatement::rowCount()</b> returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement executed by the corresponding <code>PDOStatement</code> object.</p><p>For statements that produce result sets, such as <code>SELECT</code>, the behavior is undefined and can be different for each driver. Some databases may return the number of rows produced by that statement (e.g. MySQL in buffered mode), but this behaviour is not guaranteed for all databases and should not be relied on for portable applications.</p><p><b>Note</b>:</p><p>This method returns "0" (zero) with the SQLite driver at all times, and with the PostgreSQL driver only when setting the <b><code>PDO::ATTR_CURSOR</code></b> statement attribute to <b><code>PDO::CURSOR_SCROLL</code></b>.</p>
		 * @return int <p>Returns the number of rows.</p>
		 * @link https://php.net/manual/en/pdostatement.rowcount.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0
		 */
		public function rowCount(): int {}

		/**
		 * Set a statement attribute
		 * <p>Sets an attribute on the statement. Currently, no generic attributes are set but only driver specific:</p><p><code>PDO::ATTR_CURSOR_NAME</code> (Firebird and ODBC specific): Set the name of cursor for <code>UPDATE ... WHERE CURRENT OF</code>.</p>
		 * @param int $attribute <p>The attribute to modify.</p>
		 * @param mixed $value <p>The value to set the <code>attribute</code>, might require a specific type depending on the attribute.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.setattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function setAttribute(int $attribute, mixed $value): bool {}

		/**
		 * Set the default fetch mode for this statement
		 * @param int $mode <p>The fetch mode must be one of the <code>PDO::FETCH_&#42;</code> constants.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pdostatement.setfetchmode.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.2.0
		 */
		public function setFetchMode(int $mode): bool {}
	}

	/**
	 * Return an array of available PDO drivers
	 * <p>This function returns all currently available PDO drivers which can be used in <code>DSN</code> parameter of <code>PDO::__construct()</code>.</p>
	 * @return array <p><b>PDO::getAvailableDrivers()</b> returns an array of PDO driver names. If no drivers are available, it returns an empty array.</p>
	 * @link https://php.net/manual/en/pdo.getavailabledrivers.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 1.0.3
	 */
	function pdo_drivers(): array {}

}
