<?php



namespace {

	/**
	 * Returns or sets the AUTOCOMMIT state for a database connection
	 * <p>Sets or gets the AUTOCOMMIT behavior of the specified connection resource.</p>
	 * @param resource $connection <p>A valid database connection resource variable as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @param bool $value <p>One of the following constants:</p>  <code>DB2_AUTOCOMMIT_OFF</code>  <p>Turns AUTOCOMMIT off.</p>   <code>DB2_AUTOCOMMIT_ON</code>  <p>Turns AUTOCOMMIT on.</p>
	 * @return mixed <p>When <b>db2_autocommit()</b> receives only the <code>connection</code> parameter, it returns the current state of AUTOCOMMIT for the requested connection as an integer value. A value of <b><code>DB2_AUTOCOMMIT_OFF</code></b> indicates that AUTOCOMMIT is off, while a value of <b><code>DB2_AUTOCOMMIT_ON</code></b> indicates that AUTOCOMMIT is on.</p><p>When <b>db2_autocommit()</b> receives both the <code>connection</code> parameter and <code>autocommit</code> parameter, it attempts to set the AUTOCOMMIT state of the requested connection to the corresponding state. Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-autocommit.php
	 * @see db2_connect(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_autocommit($connection, bool $value = NULL): mixed {}

	/**
	 * Binds a PHP variable to an SQL statement parameter
	 * <p>Binds a PHP variable to an SQL statement parameter in a statement resource returned by <code>db2_prepare()</code>. This function gives you more control over the parameter type, data type, precision, and scale for the parameter than simply passing the variable as part of the optional input array to <code>db2_execute()</code>.</p>
	 * @param resource $stmt <p>A prepared statement returned from <code>db2_prepare()</code>.</p>
	 * @param int $parameter_number <p>Specifies the 1-indexed position of the parameter in the prepared statement.</p>
	 * @param string $variable_name <p>A string specifying the name of the PHP variable to bind to the parameter specified by <code>parameter_number</code>.</p>
	 * @param int $parameter_type <p>A constant specifying whether the PHP variable should be bound to the SQL parameter as an input parameter (<code>DB2_PARAM_IN</code>), an output parameter (<code>DB2_PARAM_OUT</code>), or as a parameter that accepts input and returns output (<code>DB2_PARAM_INOUT</code>). To avoid memory overhead, you can also specify <code>DB2_PARAM_FILE</code> to bind the PHP variable to the name of a file that contains large object (BLOB, CLOB, or DBCLOB) data.</p>
	 * @param int $data_type <p>A constant specifying the SQL data type that the PHP variable should be bound as: one of <code>DB2_BINARY</code>, <code>DB2_CHAR</code>, <code>DB2_DOUBLE</code>, or <code>DB2_LONG</code> .</p>
	 * @param int $precision <p>Specifies the precision with which the variable should be bound to the database. This parameter can also be used for retrieving XML output values from stored procedures. A non-negative value specifies the maximum size of the XML data that will be retrieved from the database. If this parameter is not used, a default of 1MB will be assumed for retrieving the XML output value from the stored procedure.</p>
	 * @param int $scale <p>Specifies the scale with which the variable should be bound to the database.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-bind-param.php
	 * @see db2_execute(), db2_prepare()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_bind_param($stmt, int $parameter_number, string $variable_name, int $parameter_type = NULL, int $data_type = 0, int $precision = -1, int $scale = 0): bool {}

	/**
	 * Returns an object with properties that describe the DB2 database client
	 * <p>This function returns an object with read-only properties that return information about the DB2 database client. The following table lists the DB2 client properties:</p><p>The level of ODBC SQL grammar supported by the client:</p><p>Supports the minimum ODBC SQL grammar.</p><p>Supports the core ODBC SQL grammar.</p><p>Supports extended ODBC SQL grammar.</p>
	 * @param resource $connection <p>Specifies an active DB2 client connection.</p>
	 * @return object <p>Returns an object on a successful call. Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-client-info.php
	 * @see db2_server_info()
	 * @since PECL ibm_db2 >= 1.1.1
	 */
	function db2_client_info($connection): object {}

	/**
	 * Closes a database connection
	 * <p>This function closes a DB2 client connection created with <code>db2_connect()</code> and returns the corresponding resources to the database server.</p><p>If you attempt to close a persistent DB2 client connection created with <code>db2_pconnect()</code>, the close request is ignored and the persistent DB2 client connection remains available for the next caller.</p>
	 * @param resource $connection <p>Specifies an active DB2 client connection.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-close.php
	 * @see db2_connect(), db2_pclose(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_close($connection): bool {}

	/**
	 * Returns a result set listing the columns and associated privileges for a table
	 * <p>Returns a result set listing the columns and associated privileges for a table.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables. To match all schemas, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $table_name <p>The name of the table or view. To match all tables in the database, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $column_name <p>The name of the column. To match all columns in the table, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the column privileges for columns matching the specified parameters. The rows are composed of the following columns:</p>   Column name Description     TABLE_CAT Name of the catalog. The value is NULL if this table does not have catalogs.   TABLE_SCHEM Name of the schema.   TABLE_NAME Name of the table or view.   COLUMN_NAME Name of the column.   GRANTOR Authorization ID of the user who granted the privilege.   GRANTEE Authorization ID of the user to whom the privilege was granted.   PRIVILEGE The privilege for the column.   IS_GRANTABLE Whether the GRANTEE is permitted to grant this privilege to other users.
	 * @link https://php.net/manual/en/function.db2-column-privileges.php
	 * @see db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_column_privileges($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $column_name = NULL) {}

	/**
	 * Returns a result set listing the columns and associated metadata for a table
	 * <p>Returns a result set listing the columns and associated metadata for a table.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables. To match all schemas, pass <code>'%'</code>.</p>
	 * @param string $table_name <p>The name of the table or view. To match all tables in the database, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $column_name <p>The name of the column. To match all columns in the table, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the columns matching the specified parameters. The rows are composed of the following columns:</p>   Column name Description     TABLE_CAT Name of the catalog. The value is NULL if this table does not have catalogs.   TABLE_SCHEM Name of the schema.   TABLE_NAME Name of the table or view.   COLUMN_NAME Name of the column.   DATA_TYPE The SQL data type for the column represented as an integer value.   TYPE_NAME A string representing the data type for the column.   COLUMN_SIZE An integer value representing the size of the column.   BUFFER_LENGTH  Maximum number of bytes necessary to store data from this column.    DECIMAL_DIGITS  The scale of the column, or <b><code>NULL</code></b> where scale is not applicable.    NUM_PREC_RADIX  An integer value of either <code>10</code> (representing an exact numeric data type), <code>2</code> (representing an approximate numeric data type), or <b><code>NULL</code></b> (representing a data type for which radix is not applicable).    NULLABLE An integer value representing whether the column is nullable or not.   REMARKS Description of the column.   COLUMN_DEF Default value for the column.   SQL_DATA_TYPE An integer value representing the size of the column.   SQL_DATETIME_SUB  Returns an integer value representing a datetime subtype code, or <b><code>NULL</code></b> for SQL data types to which this does not apply.    CHAR_OCTET_LENGTH  Maximum length in octets for a character data type column, which matches COLUMN_SIZE for single-byte character set data, or <b><code>NULL</code></b> for non-character data types.    ORDINAL_POSITION The 1-indexed position of the column in the table.   IS_NULLABLE  A string value where 'YES' means that the column is nullable and 'NO' means that the column is not nullable.
	 * @link https://php.net/manual/en/function.db2-columns.php
	 * @see db2_column_privileges(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_columns($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $column_name = NULL) {}

	/**
	 * Commits a transaction
	 * <p>Commits an in-progress transaction on the specified connection resource and begins a new transaction. PHP applications normally default to AUTOCOMMIT mode, so <b>db2_commit()</b> is not necessary unless AUTOCOMMIT has been turned off for the connection resource.</p>
	 * @param resource $connection <p>A valid database connection resource variable as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-commit.php
	 * @see db2_autocommit(), db2_rollback()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_commit($connection): bool {}

	/**
	 * Returns a string containing the SQLSTATE returned by the last connection attempt
	 * <p><b>db2_conn_error()</b> returns an SQLSTATE value representing the reason the last attempt to connect to a database failed. As <code>db2_connect()</code> returns <b><code>FALSE</code></b> in the event of a failed connection attempt, you do not pass any parameters to <b>db2_conn_error()</b> to retrieve the SQLSTATE value.</p><p>If, however, the connection was successful but becomes invalid over time, you can pass the <code>connection</code> parameter to retrieve the SQLSTATE value for a specific connection.</p><p>To learn what the SQLSTATE value means, you can issue the following command at a DB2 Command Line Processor prompt: <b><code>db2 '&#63; <code>sqlstate-value</code>'</code></b>. You can also call <code>db2_conn_errormsg()</code> to retrieve an explicit error message and the associated SQLCODE value.</p>
	 * @param resource $connection <p>A connection resource associated with a connection that initially succeeded, but which over time became invalid.</p>
	 * @return string <p>Returns the SQLSTATE value resulting from a failed connection attempt. Returns an empty string if there is no error associated with the last connection attempt.</p>
	 * @link https://php.net/manual/en/function.db2-conn-error.php
	 * @see db2_conn_errormsg(), db2_connect(), db2_stmt_error(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_conn_error($connection = NULL): string {}

	/**
	 * Returns the last connection error message and SQLCODE value
	 * <p><b>db2_conn_errormsg()</b> returns an error message and SQLCODE value representing the reason the last database connection attempt failed. As <code>db2_connect()</code> returns <b><code>FALSE</code></b> in the event of a failed connection attempt, do not pass any parameters to <b>db2_conn_errormsg()</b> to retrieve the associated error message and SQLCODE value.</p><p>If, however, the connection was successful but becomes invalid over time, you can pass the <code>connection</code> parameter to retrieve the associated error message and SQLCODE value for a specific connection.</p>
	 * @param resource $connection <p>A connection resource associated with a connection that initially succeeded, but which over time became invalid.</p>
	 * @return string <p>Returns a string containing the error message and SQLCODE value resulting from a failed connection attempt. If there is no error associated with the last connection attempt, <b>db2_conn_errormsg()</b> returns an empty string.</p>
	 * @link https://php.net/manual/en/function.db2-conn-errormsg.php
	 * @see db2_conn_error(), db2_connect(), db2_stmt_error(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_conn_errormsg($connection = NULL): string {}

	/**
	 * Returns a connection to a database
	 * <p>Creates a new connection to an IBM DB2 Universal Database, IBM Cloudscape, or Apache Derby database.</p>
	 * @param string $database <p>For a cataloged connection to a database, <code>database</code> represents the database alias in the DB2 client catalog.</p> <p>For an uncataloged connection to a database, <code>database</code> represents a complete connection string in the following format:</p><pre>DATABASE=<code>database</code>;HOSTNAME=<code>hostname</code>;PORT=<code>port</code>;PROTOCOL=TCPIP;UID=<code>username</code>;PWD=<code>password</code>;</pre> where the parameters represent the following values:   <code>database</code>  <p>The name of the database.</p>   <code>hostname</code>  <p>The hostname or IP address of the database server.</p>   <code>port</code>  <p>The TCP/IP port on which the database is listening for requests.</p>   <code>username</code>  <p>The username with which you are connecting to the database.</p>   <code>password</code>  <p>The password with which you are connecting to the database.</p>
	 * @param string $username <p>The username with which you are connecting to the database.</p> <p>For uncataloged connections, you must pass a <b><code>NULL</code></b> value or empty string.</p>
	 * @param string $password <p>The password with which you are connecting to the database.</p> <p>For uncataloged connections, you must pass a <b><code>NULL</code></b> value or empty string.</p>
	 * @param array $options <p>An associative array of connection options that affect the behavior of the connection, where valid array keys include:</p>  <code>autocommit</code>  <p>Passing the <code>DB2_AUTOCOMMIT_ON</code> value turns autocommit on for this connection handle.</p> <p>Passing the <code>DB2_AUTOCOMMIT_OFF</code> value turns autocommit off for this connection handle.</p>   <code>DB2_ATTR_CASE</code>  <p>Passing the <code>DB2_CASE_NATURAL</code> value specifies that column names are returned in natural case.</p> <p>Passing the <code>DB2_CASE_LOWER</code> value specifies that column names are returned in lower case.</p> <p>Passing the <code>DB2_CASE_UPPER</code> value specifies that column names are returned in upper case.</p>   <code>CURSOR</code>  <p>Passing the <code>DB2_FORWARD_ONLY</code> value specifies a forward-only cursor for a statement resource. This is the default cursor type and is supported on all database servers.</p> <p>Passing the <code>DB2_SCROLLABLE</code> value specifies a scrollable cursor for a statement resource. This mode enables random access to rows in a result set, but currently is supported only by IBM DB2 Universal Database.</p>   <p>The following new option is available in ibm_db2 version 1.7.0 and later.</p>  <code>trustedcontext</code>  <p>Passing the DB2_TRUSTED_CONTEXT_ENABLE value turns trusted context on for this connection handle. This parameter cannot be set using <code>db2_set_option()</code>.</p> <p>This key works only if the database is cataloged (even if the database is local), or if you specify the full DSN when you create the connection.</p> <p>To catalog the database, use following commands:</p> <p></p><pre>db2 catalog tcpip node loopback remote &lt;SERVERNAME&gt; server &lt;SERVICENAME&gt; db2 catalog database &lt;LOCALDBNAME&gt; as &lt;REMOTEDBNAME&gt; at node loopback db2 "update dbm cfg using svcename &lt;SERVICENAME&gt;" db2set DB2COMM=TCPIP</pre>   <p>The following new i5/OS options are available in ibm_db2 version 1.5.1 and later.</p>  <code>i5_lib</code>  <p>A character value that indicates the default library that will be used for resolving unqualified file references. This is not valid if the connection is using system naming mode.</p>   <code>i5_naming</code>  <p><code>DB2_I5_NAMING_ON</code> value turns on DB2 UDB CLI iSeries system naming mode. Files are qualified using the slash (/) delimiter. Unqualified files are resolved using the library list for the job.</p> <p><code>DB2_I5_NAMING_OFF</code> value turns off DB2 UDB CLI default naming mode, which is SQL naming. Files are qualified using the period (.) delimiter. Unqualified files are resolved using either the default library or the current user ID.</p>   <code>i5_commit</code>  <p>The <code>i5_commit</code> attribute should be set before the <b>db2_connect()</b>. If the value is changed after the connection has been established, and the connection is to a remote data source, the change does not take effect until the next successful <b>db2_connect()</b> for the connection handle.</p><p><b>Note</b>:</p><p>The php.ini setting <code>ibm_db2.i5_allow_commit</code>==0 or <code>DB2_I5_TXN_NO_COMMIT</code> is the default, but may be overridden with the <code>i5_commit</code> option.</p>  <p><code>DB2_I5_TXN_NO_COMMIT</code> - Commitment control is not used.</p> <p><code>DB2_I5_TXN_READ_UNCOMMITTED</code> - Dirty reads, nonrepeatable reads, and phantoms are possible.</p> <p><code>DB2_I5_TXN_READ_COMMITTED</code> - Dirty reads are not possible. Nonrepeatable reads, and phantoms are possible.</p> <p><code>DB2_I5_TXN_REPEATABLE_READ</code> - Dirty reads and nonrepeatable reads are not possible. Phantoms are possible.</p> <p><code>DB2_I5_TXN_SERIALIZABLE</code> - Transactions are serializable. Dirty reads, non-repeatable reads, and phantoms are not possible</p>   <code>i5_query_optimize</code>  <p><code>DB2_FIRST_IO</code> All queries are optimized with the goal of returning the first page of output as fast as possible. This goal works well when the output is controlled by a user who is most likely to cancel the query after viewing the first page of output data. Queries coded with an OPTIMIZE FOR nnn ROWS clause honor the goal specified by the clause.</p> <p><code>DB2_ALL_IO</code> All queries are optimized with the goal of running the entire query to completion in the shortest amount of elapsed time. This is a good option when the output of a query is being written to a file or report, or the interface is queuing the output data. Queries coded with an OPTIMIZE FOR nnn ROWS clause honor the goal specified by the clause. This is the default.</p>   <code>i5_dbcs_alloc</code>  <p><code>DB2_I5_DBCS_ALLOC_ON</code> value turns on DB2 6X allocation scheme for DBCS translation column size growth.</p> <p><code>DB2_I5_DBCS_ALLOC_OFF</code> value turns off DB2 6X allocation scheme for DBCS translation column size growth.</p> <p>Note: php.ini setting <code>ibm_db2.i5_dbcs_alloc</code>==0 or <code>DB2_I5_DBCS_ALLOC_OFF</code> is the default, but may be overridden with the <code>i5_dbcs_alloc</code> option.</p>   <code>i5_date_fmt</code>  <p><code>DB2_I5_FMT_ISO</code> - The International Organization for Standardization (ISO) date format yyyy-mm-dd is used. This is the default.</p> <p><code>DB2_I5_FMT_USA</code> - The United States date format mm/dd/yyyy is used.</p> <p><code>DB2_I5_FMT_EUR</code> - The European date format dd.mm.yyyy is used.</p> <p><code>DB2_I5_FMT_JIS</code> - The Japanese Industrial Standard date format yyyy-mm-dd is used.</p> <p><code>DB2_I5_FMT_MDY</code> - The date format mm/dd/yyyy is used.</p> <p><code>DB2_I5_FMT_DMY</code> - The date format dd/mm/yyyy is used.</p> <p><code>DB2_I5_FMT_YMD</code> - The date format yy/mm/dd is used.</p> <p><code>DB2_I5_FMT_JUL</code> - The Julian date format yy/ddd is used.</p> <p><code>DB2_I5_FMT_JOB</code> - The job default is used.</p>   <code>i5_date_sep</code>  <p><code>DB2_I5_SEP_SLASH</code> - A slash ( / ) is used as the date separator. This is the default.</p> <p><code>DB2_I5_SEP_DASH</code> - A dash ( - ) is used as the date separator.</p> <p><code>DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the date separator.</p> <p><code>DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the date separator.</p> <p><code>DB2_I5_SEP_BLANK</code> - A blank is used as the date separator.</p> <p><code>DB2_I5_SEP_JOB</code> - The job default is used</p>   <code>i5_time_fmt</code>  <p><code>DB2_I5_FMT_ISO</code> - The International Organization for Standardization (ISO) time format hh.mm.ss is used. This is the default.</p> <p><code>DB2_I5_FMT_USA</code> - The United States time format hh:mmxx is used, where xx is AM or PM.</p> <p><code>DB2_I5_FMT_EUR</code> - The European time format hh.mm.ss is used.</p> <p><code>DB2_I5_FMT_JIS</code> - The Japanese Industrial Standard time format hh:mm:ss is used.</p> <p><code>DB2_I5_FMT_HMS</code> - The hh:mm:ss format is used.</p>   <code>i5_time_sep</code>  <p><code>DB2_I5_SEP_COLON</code> - A colon ( : ) is used as the time separator. This is the default.</p> <p><code>DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the time separator.</p> <p><code>DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the time separator.</p> <p><code>DB2_I5_SEP_BLANK</code> - A blank is used as the time separator.</p> <p><code>DB2_I5_SEP_JOB</code> - The job default is used.</p>   <code>i5_decimal_sep</code>  <p><code>DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the decimal separator. This is the default.</p> <p><code>DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the decimal separator.</p> <p><code>DB2_I5_SEP_JOB</code> - The job default is used.</p>   <p>The following new i5/OS option is available in ibm_db2 version 1.8.0 and later.</p>  <code>i5_libl</code>  <p>A character value that indicates the library list that will be used for resolving unqualified file references. Specify the library list elements separated by blanks 'i5_libl'=&gt;"MYLIB YOURLIB ANYLIB".</p> <p><b>Note</b>:</p><p><code>i5_libl</code> calls qsys2/qcmdexc('cmd',cmdlen), which is only available in i5/OS V5R4 and later.</p>
	 * @return resource <p>Returns a connection handle resource if the connection attempt is successful. If the connection attempt fails, <b>db2_connect()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-connect.php
	 * @see db2_close(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_connect(string $database, string $username, string $password, array $options = NULL) {}

	/**
	 * Returns the cursor type used by a statement resource
	 * <p>Returns the cursor type used by a statement resource. Use this to determine if you are working with a forward-only cursor or scrollable cursor.</p>
	 * @param resource $stmt <p>A valid statement resource.</p>
	 * @return int <p>Returns either <code>DB2_FORWARD_ONLY</code> if the statement resource uses a forward-only cursor or <code>DB2_SCROLLABLE</code> if the statement resource uses a scrollable cursor.</p>
	 * @link https://php.net/manual/en/function.db2-cursor-type.php
	 * @see db2_prepare()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_cursor_type($stmt): int {}

	/**
	 * Used to escape certain characters
	 * <p>Prepends backslashes to special characters in the string argument.</p>
	 * @param string $string_literal <p>The string that contains special characters that need to be modified. Characters that are prepended with a backslash are <code>\x00</code>, <code>\n</code>, <code>\r</code>, <code>\</code>, <code>'</code>, <code>"</code> and <code>\x1a</code>.</p>
	 * @return string <p>Returns <code>string_literal</code> with the special characters noted above prepended with backslashes.</p>
	 * @link https://php.net/manual/en/function.db2-escape-string.php
	 * @see db2_prepare()
	 * @since PECL ibm_db2 >= 1.6.0
	 */
	function db2_escape_string(string $string_literal): string {}

	/**
	 * Executes an SQL statement directly
	 * <p>Executes an SQL statement directly.</p><p>If you plan to interpolate PHP variables into the SQL statement, understand that this is one of the more common security exposures. Consider calling <code>db2_prepare()</code> to prepare an SQL statement with parameter markers for input values. Then you can call <code>db2_execute()</code> to pass in the input values and avoid SQL injection attacks.</p><p>If you plan to repeatedly issue the same SQL statement with different parameters, consider calling <code>db2_prepare()</code> and <code>db2_execute()</code> to enable the database server to reuse its access plan and increase the efficiency of your database access.</p>
	 * @param resource $connection <p>A valid database connection resource variable as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @param string $statement <p>An SQL statement. The statement cannot contain any parameter markers.</p>
	 * @param array $options <p>An associative array containing statement options. You can use this parameter to request a scrollable cursor on database servers that support this functionality.</p> <p>For a description of valid statement options, see <code>db2_set_option()</code>.</p>
	 * @return resource <p>Returns a statement resource if the SQL statement was issued successfully, or <b><code>FALSE</code></b> if the database failed to execute the SQL statement.</p>
	 * @link https://php.net/manual/en/function.db2-exec.php
	 * @see db2_execute(), db2_prepare()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_exec($connection, string $statement, array $options = NULL) {}

	/**
	 * Executes a prepared SQL statement
	 * <p><b>db2_execute()</b> executes an SQL statement that was prepared by <code>db2_prepare()</code>.</p><p>If the SQL statement returns a result set, for example, a SELECT statement or a CALL to a stored procedure that returns one or more result sets, you can retrieve a row as an array from the <code>stmt</code> resource using <code>db2_fetch_assoc()</code>, <code>db2_fetch_both()</code>, or <code>db2_fetch_array()</code>. Alternatively, you can use <code>db2_fetch_row()</code> to move the result set pointer to the next row and fetch a column at a time from that row with <code>db2_result()</code>.</p><p>Refer to <code>db2_prepare()</code> for a brief discussion of the advantages of using <code>db2_prepare()</code> and <b>db2_execute()</b> rather than <code>db2_exec()</code>.</p>
	 * @param resource $stmt <p>A prepared statement returned from <code>db2_prepare()</code>.</p>
	 * @param array $parameters <p>An array of input parameters matching any parameter markers contained in the prepared statement.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-execute.php
	 * @see db2_exec(), db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_row(), db2_prepare(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_execute($stmt, array $parameters = NULL): bool {}

	/**
	 * Returns an array, indexed by column position, representing a row in a result set
	 * <p>Returns an array, indexed by column position, representing a row in a result set. The columns are 0-indexed.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource containing a result set.</p>
	 * @param int $row_number <p>Requests a specific 1-indexed row from the result set. Passing this parameter results in a PHP warning if the result set uses a forward-only cursor.</p>
	 * @return array <p>Returns a 0-indexed array with column values indexed by the column position representing the next or requested row in the result set. Returns <b><code>FALSE</code></b> if there are no rows left in the result set, or if the row requested by <code>row_number</code> does not exist in the result set.</p>
	 * @link https://php.net/manual/en/function.db2-fetch-array.php
	 * @see db2_fetch_assoc(), db2_fetch_both(), db2_fetch_object(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.1
	 */
	function db2_fetch_array($stmt, int $row_number = -1): array {}

	/**
	 * Returns an array, indexed by column name, representing a row in a result set
	 * <p>Returns an array, indexed by column name, representing a row in a result set.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource containing a result set.</p>
	 * @param int $row_number <p>Requests a specific 1-indexed row from the result set. Passing this parameter results in a PHP warning if the result set uses a forward-only cursor.</p>
	 * @return array <p>Returns an associative array with column values indexed by the column name representing the next or requested row in the result set. Returns <b><code>FALSE</code></b> if there are no rows left in the result set, or if the row requested by <code>row_number</code> does not exist in the result set.</p>
	 * @link https://php.net/manual/en/function.db2-fetch-assoc.php
	 * @see db2_fetch_array(), db2_fetch_both(), db2_fetch_object(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_assoc($stmt, int $row_number = -1): array {}

	/**
	 * Returns an array, indexed by both column name and position, representing a row in a result set
	 * <p>Returns an array, indexed by both column name and position, representing a row in a result set. Note that the row returned by <b>db2_fetch_both()</b> requires more memory than the single-indexed arrays returned by <code>db2_fetch_assoc()</code> or <code>db2_fetch_array()</code>.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource containing a result set.</p>
	 * @param int $row_number <p>Requests a specific 1-indexed row from the result set. Passing this parameter results in a PHP warning if the result set uses a forward-only cursor.</p>
	 * @return array <p>Returns an associative array with column values indexed by both the column name and 0-indexed column number. The array represents the next or requested row in the result set. Returns <b><code>FALSE</code></b> if there are no rows left in the result set, or if the row requested by <code>row_number</code> does not exist in the result set.</p>
	 * @link https://php.net/manual/en/function.db2-fetch-both.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_object(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_both($stmt, int $row_number = -1): array {}

	/**
	 * Returns an object with properties representing columns in the fetched row
	 * <p>Returns an object in which each property represents a column returned in the row fetched from a result set.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource containing a result set.</p>
	 * @param int $row_number <p>Requests a specific 1-indexed row from the result set. Passing this parameter results in a PHP warning if the result set uses a forward-only cursor.</p>
	 * @return object <p>Returns an object representing a single row in the result set. The properties of the object map to the names of the columns in the result set.</p><p>The IBM DB2, Cloudscape, and Apache Derby database servers typically fold column names to upper-case, so the object properties will reflect that case.</p><p>If your SELECT statement calls a scalar function to modify the value of a column, the database servers return the column number as the name of the column in the result set. If you prefer a more descriptive column name and object property, you can use the AS clause to assign a name to the column in the result set.</p><p>Returns <b><code>FALSE</code></b> if no row was retrieved.</p>
	 * @link https://php.net/manual/en/function.db2-fetch-object.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_object($stmt, int $row_number = -1): object {}

	/**
	 * Sets the result set pointer to the next row or requested row
	 * <p>Use <b>db2_fetch_row()</b> to iterate through a result set, or to point to a specific row in a result set if you requested a scrollable cursor.</p><p>To retrieve individual fields from the result set, call the <code>db2_result()</code> function.</p><p>Rather than calling <b>db2_fetch_row()</b> and <code>db2_result()</code>, most applications will call one of <code>db2_fetch_assoc()</code>, <code>db2_fetch_both()</code>, or <code>db2_fetch_array()</code> to advance the result set pointer and return a complete row as an array.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource.</p>
	 * @param int $row_number <p>With scrollable cursors, you can request a specific row number in the result set. Row numbering is 1-indexed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the requested row exists in the result set. Returns <b><code>FALSE</code></b> if the requested row does not exist in the result set.</p>
	 * @link https://php.net/manual/en/function.db2-fetch-row.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_object(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_row($stmt, int $row_number = NULL): bool {}

	/**
	 * Returns the maximum number of bytes required to display a column
	 * <p>Returns the maximum number of bytes required to display a column in a result set.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return int <p>Returns an integer value with the maximum number of bytes required to display the specified column. If the column does not exist in the result set, <b>db2_field_display_size()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-display-size.php
	 * @see db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_display_size($stmt, mixed $column): int {}

	/**
	 * Returns the name of the column in the result set
	 * <p>Returns the name of the specified column in the result set.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return string <p>Returns a string containing the name of the specified column. If the specified column does not exist in the result set, <b>db2_field_name()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-name.php
	 * @see db2_field_display_size(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_name($stmt, mixed $column): string {}

	/**
	 * Returns the position of the named column in a result set
	 * <p>Returns the position of the named column in a result set.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return int <p>Returns an integer containing the 0-indexed position of the named column in the result set. If the specified column does not exist in the result set, <b>db2_field_num()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-num.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_num($stmt, mixed $column): int {}

	/**
	 * Returns the precision of the indicated column in a result set
	 * <p>Returns the precision of the indicated column in a result set.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return int <p>Returns an integer containing the precision of the specified column. If the specified column does not exist in the result set, <b>db2_field_precision()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-precision.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_precision($stmt, mixed $column): int {}

	/**
	 * Returns the scale of the indicated column in a result set
	 * <p>Returns the scale of the indicated column in a result set.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return int <p>Returns an integer containing the scale of the specified column. If the specified column does not exist in the result set, <b>db2_field_scale()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-scale.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_scale($stmt, mixed $column): int {}

	/**
	 * Returns the data type of the indicated column in a result set
	 * <p>Returns the data type of the indicated column in a result set.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return string <p>Returns a string containing the defined data type of the specified column. If the specified column does not exist in the result set, <b>db2_field_type()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-type.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_type($stmt, mixed $column): string {}

	/**
	 * Returns the width of the current value of the indicated column in a result set
	 * <p>Returns the width of the current value of the indicated column in a result set. This is the maximum width of the column for a fixed-length data type, or the actual width of the column for a variable-length data type.</p>
	 * @param resource $stmt <p>Specifies a statement resource containing a result set.</p>
	 * @param mixed $column <p>Specifies the column in the result set. This can either be an integer representing the 0-indexed position of the column, or a string containing the name of the column.</p>
	 * @return int <p>Returns an integer containing the width of the specified character or binary data type column in a result set. If the specified column does not exist in the result set, <b>db2_field_width()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-field-width.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_width($stmt, mixed $column): int {}

	/**
	 * Returns a result set listing the foreign keys for a table
	 * <p>Returns a result set listing the foreign keys for a table.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables. If <code>schema</code> is <b><code>NULL</code></b>, <b>db2_foreign_keys()</b> matches the schema for the current connection.</p>
	 * @param string $table_name <p>The name of the table.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the foreign keys for the specified table. The result set is composed of the following columns:</p>   Column name Description     PKTABLE_CAT  Name of the catalog for the table containing the primary key. The value is NULL if this table does not have catalogs.    PKTABLE_SCHEM  Name of the schema for the table containing the primary key.    PKTABLE_NAME Name of the table containing the primary key.   PKCOLUMN_NAME Name of the column containing the primary key.   FKTABLE_CAT  Name of the catalog for the table containing the foreign key. The value is NULL if this table does not have catalogs.    FKTABLE_SCHEM  Name of the schema for the table containing the foreign key.    FKTABLE_NAME Name of the table containing the foreign key.   FKCOLUMN_NAME Name of the column containing the foreign key.   KEY_SEQ 1-indexed position of the column in the key.   UPDATE_RULE  Integer value representing the action applied to the foreign key when the SQL operation is UPDATE.    DELETE_RULE  Integer value representing the action applied to the foreign key when the SQL operation is DELETE.    FK_NAME The name of the foreign key.   PK_NAME The name of the primary key.   DEFERRABILITY  An integer value representing whether the foreign key deferrability is SQL_INITIALLY_DEFERRED, SQL_INITIALLY_IMMEDIATE, or SQL_NOT_DEFERRABLE.
	 * @link https://php.net/manual/en/function.db2-foreign-keys.php
	 * @see db2_column_privileges(), db2_columns(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_foreign_keys($connection, string $qualifier, string $schema, string $table_name) {}

	/**
	 * Frees resources associated with a result set
	 * <p>Frees the system and database resources that are associated with a result set. These resources are freed implicitly when a script finishes, but you can call <b>db2_free_result()</b> to explicitly free the result set resources before the end of the script.</p>
	 * @param resource $stmt <p>A valid statement resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-free-result.php
	 * @see db2_free_stmt()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_free_result($stmt): bool {}

	/**
	 * Frees resources associated with the indicated statement resource
	 * <p>Frees the system and database resources that are associated with a statement resource. These resources are freed implicitly when a script finishes, but you can call <b>db2_free_stmt()</b> to explicitly free the statement resources before the end of the script.</p>
	 * @param resource $stmt <p>A valid statement resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-free-stmt.php
	 * @see db2_free_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_free_stmt($stmt): bool {}

	/**
	 * Retrieves an option value for a statement resource or a connection resource
	 * <p>Retrieves the value of a specified option value for a statement resource or a connection resource.</p>
	 * @param resource $resource <p>A valid statement resource as returned from <code>db2_prepare()</code> or a valid connection resource as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @param string $option <p>A valid statement or connection options. The following new options are available as of ibm_db2 version 1.6.0. They provide useful tracking information that can be set during execution with <b>db2_get_option()</b>.</p><p><b>Note</b>:</p><p>Prior versions of ibm_db2 do not support these new options.</p> <p>When the value in each option is being set, some servers might not handle the entire length provided and might truncate the value.</p> <p>To ensure that the data specified in each option is converted correctly when transmitted to a host system, use only the characters A through Z, 0 through 9, and the underscore (_) or period (.).</p>    <code>userid</code>  <p><code>SQL_ATTR_INFO_USERID</code> - A pointer to a null-terminated character string used to identify the client user ID sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 16 characters. This user-id is not to be confused with the authentication user-id, it is for identification purposes only and is not used for any authorization.</p>    <code>acctstr</code>  <p><code>SQL_ATTR_INFO_ACCTSTR</code> - A pointer to a null-terminated character string used to identify the client accounting string sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 200 characters.</p>    <code>applname</code>  <p><code>SQL_ATTR_INFO_APPLNAME</code> - A pointer to a null-terminated character string used to identify the client application name sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 32 characters.</p>    <code>wrkstnname</code>  <p><code>SQL_ATTR_INFO_WRKSTNNAME</code> - A pointer to a null-terminated character string used to identify the client workstation name sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 18 characters.</p>
	 * @return string|false <p>Returns the current setting of the connection attribute provided on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-get-option.php
	 * @see db2_connect(), db2_cursor_type(), db2_exec(), db2_set_option(), db2_pconnect(), db2_prepare()
	 * @since PECL ibm_db2 >= 1.6.0
	 */
	function db2_get_option($resource, string $option): string|false {}

	/**
	 * Returns the auto generated ID of the last insert query that successfully executed on this connection
	 * <p>Returns the auto generated ID of the last insert query that successfully executed on this connection.</p><p>The result of this function is not affected by any of the following:</p><p>A single row INSERT statement with a VALUES clause for a table without an identity column.</p><p>A multiple row INSERT statement with a VALUES clause.</p><p>An INSERT statement with a fullselect.</p><p>A ROLLBACK TO SAVEPOINT statement.</p>
	 * @param resource $resource <p>A valid connection resource as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>. The value of this parameter cannot be a statement resource or result set resource.</p>
	 * @return string <p>Returns the auto generated ID of last insert query that successfully executed on this connection.</p>
	 * @link https://php.net/manual/en/function.db2-last-insert-id.php
	 * @since PECL ibm_db2 >= 1.7.1
	 */
	function db2_last_insert_id($resource): string {}

	/**
	 * Gets a user defined size of LOB files with each invocation
	 * <p>Use <b>db2_lob_read()</b> to iterate through a specified column of a result set and retrieve a user defined size of LOB data.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource containing LOB data.</p>
	 * @param int $colnum <p>A valid column number in the result set of the <code>stmt</code> resource.</p>
	 * @param int $length <p>The size of the LOB data to be retrieved from the <code>stmt</code> resource.</p>
	 * @return string <p>Returns the amount of data the user specifies. Returns <b><code>FALSE</code></b> if the data cannot be retrieved.</p>
	 * @link https://php.net/manual/en/function.db2-lob-read.php
	 * @see db2_bind_param(), db2_exec(), db2_execute(), db2_fetch_row(), db2_prepare(), db2_result()
	 * @since PECL ibm_db2 >= 1.6.0
	 */
	function db2_lob_read($stmt, int $colnum, int $length): string {}

	/**
	 * Requests the next result set from a stored procedure
	 * <p>A stored procedure can return zero or more result sets. While you handle the first result set in exactly the same way you would handle the results returned by a simple SELECT statement, to fetch the second and subsequent result sets from a stored procedure you must call the <b>db2_next_result()</b> function and return the result to a uniquely named PHP variable.</p>
	 * @param resource $stmt <p>A prepared statement returned from <code>db2_exec()</code> or <code>db2_execute()</code>.</p>
	 * @return resource <p>Returns a new statement resource containing the next result set if the stored procedure returned another result set. Returns <b><code>FALSE</code></b> if the stored procedure did not return another result set.</p>
	 * @link https://php.net/manual/en/function.db2-next-result.php
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_next_result($stmt) {}

	/**
	 * Returns the number of fields contained in a result set
	 * <p>Returns the number of fields contained in a result set. This is most useful for handling the result sets returned by dynamically generated queries, or for result sets returned by stored procedures, where your application cannot otherwise know how to retrieve and use the results.</p>
	 * @param resource $stmt <p>A valid statement resource containing a result set.</p>
	 * @return int <p>Returns an integer value representing the number of fields in the result set associated with the specified statement resource. Returns <b><code>FALSE</code></b> if the statement resource is not a valid input value.</p>
	 * @link https://php.net/manual/en/function.db2-num-fields.php
	 * @see db2_execute(), db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_num_fields($stmt): int {}

	/**
	 * Returns the number of rows affected by an SQL statement
	 * <p>Returns the number of rows deleted, inserted, or updated by an SQL statement.</p><p>To determine the number of rows that will be returned by a SELECT statement, issue SELECT COUNT(&#42;) with the same predicates as your intended SELECT statement and retrieve the value.</p><p>If your application logic checks the number of rows returned by a SELECT statement and branches if the number of rows is 0, consider modifying your application to attempt to return the first row with one of <code>db2_fetch_assoc()</code>, <code>db2_fetch_both()</code>, <code>db2_fetch_array()</code>, or <code>db2_fetch_row()</code>, and branch if the fetch function returns <b><code>FALSE</code></b>.</p><p><b>Note</b>:</p><p>If you issue a SELECT statement using a scrollable cursor, <b>db2_num_rows()</b> returns the number of rows returned by the SELECT statement. However, the overhead associated with scrollable cursors significantly degrades the performance of your application, so if this is the only reason you are considering using scrollable cursors, you should use a forward-only cursor and either call SELECT COUNT(&#42;) or rely on the <code>bool</code> return value of the fetch functions to achieve the equivalent functionality with much better performance.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource containing a result set.</p>
	 * @return int <p>Returns the number of rows affected by the last SQL statement issued by the specified statement handle.</p>
	 * @link https://php.net/manual/en/function.db2-num-rows.php
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_num_rows($stmt): int {}

	/**
	 * Closes a persistent database connection
	 * <p>This function closes a DB2 client connection created with <code>db2_pconnect()</code> and returns the corresponding resources to the database server.</p><p><b>Note</b>:</p><p>This function is only available on i5/OS in response to i5/OS system administration requests.</p><p>If you have a persistent DB2 client connection created with <code>db2_pconnect()</code>, you may use this function to close the connection. To avoid substantial connection performance penalties, this function should only be used in rare cases when the persistent connection has become unresponsive or the persistent connection will not be needed for a long period of time.</p>
	 * @param resource $resource
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-pclose.php
	 * @see db2_close(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.8.0
	 */
	function db2_pclose($resource): bool {}

	/**
	 * Returns a persistent connection to a database
	 * <p>Returns a persistent connection to an IBM DB2 Universal Database, IBM Cloudscape, or Apache Derby database.</p><p>For more information on persistent connections, refer to Persistent Database Connections.</p><p>Calling <code>db2_close()</code> on a persistent connection always returns <b><code>TRUE</code></b>, but the underlying DB2 client connection remains open and waiting to serve the next matching <b>db2_pconnect()</b> request.</p><p>Users running version 1.9.0 or later of ibm_db2 should be aware that the extension will perform a transaction rollback on persistent connections at the end of a request, thus ending the transaction. This prevents the transaction block from carrying over to the next request which uses that connection if script execution ends before the transaction block does.</p>
	 * @param string $database <p>The database alias in the DB2 client catalog.</p>
	 * @param string $username <p>The username with which you are connecting to the database.</p>
	 * @param string $password <p>The password with which you are connecting to the database.</p>
	 * @param array $options <p>An associative array of connection options that affect the behavior of the connection, where valid array keys include:</p>  <code>autocommit</code>  <p>Passing the <code>DB2_AUTOCOMMIT_ON</code> value turns autocommit on for this connection handle.</p> <p>Passing the <code>DB2_AUTOCOMMIT_OFF</code> value turns autocommit off for this connection handle.</p>   <code>DB2_ATTR_CASE</code>  <p>Passing the <code>DB2_CASE_NATURAL</code> value specifies that column names are returned in natural case.</p> <p>Passing the <code>DB2_CASE_LOWER</code> value specifies that column names are returned in lower case.</p> <p>Passing the <code>DB2_CASE_UPPER</code> value specifies that column names are returned in upper case.</p>   <code>CURSOR</code>  <p>Passing the <code>DB2_FORWARD_ONLY</code> value specifies a forward-only cursor for a statement resource. This is the default cursor type and is supported on all database servers.</p> <p>Passing the <code>DB2_SCROLLABLE</code> value specifies a scrollable cursor for a statement resource. This mode enables random access to rows in a result set, but currently is supported only by IBM DB2 Universal Database.</p>   <p>The following new option is available in ibm_db2 version 1.7.0 and later.</p>  <code>trustedcontext</code>  <p>Passing the DB2_TRUSTED_CONTEXT_ENABLE value turns trusted context on for this connection handle. This parameter cannot be set using <code>db2_set_option()</code>.</p> <p>This key works only if the database is cataloged (even if the database is local), or if you specify the full DSN when you create the connection.</p> <p>To catalog the database, use following commands:</p> <p></p><pre>db2 catalog tcpip node loopback remote &lt;SERVERNAME&gt; server &lt;SERVICENAME&gt; db2 catalog database &lt;LOCALDBNAME&gt; as &lt;REMOTEDBNAME&gt; at node loopback db2 "update dbm cfg using svcename &lt;SERVICENAME&gt;" db2set DB2COMM=TCPIP</pre>   <p>The following new i5/OS options are available in ibm_db2 version 1.5.1 and later.</p><b>Tip</b> <p>Conflicting connection attributes used in conjunction with persistent connections can produce indeterminate results on i5/OS. Site policies should be establish for all applications using each persistent connection user profile. The default DB2_AUTOCOMMIT_ON is suggested when using persistent connections.</p>    <code>i5_lib</code>  <p>A character value that indicates the default library that will be used for resolving unqualified file references. This is not valid if the connection is using system naming mode.</p>   <code>i5_naming</code>  <p><code>DB2_I5_NAMING_ON</code> value turns on DB2 UDB CLI iSeries system naming mode. Files are qualified using the slash (/) delimiter. Unqualified files are resolved using the library list for the job.</p> <p><code>DB2_I5_NAMING_OFF</code> value turns off DB2 UDB CLI default naming mode, which is SQL naming. Files are qualified using the period (.) delimiter. Unqualified files are resolved using either the default library or the current user ID.</p>   <code>i5_commit</code>  <p>The <code>i5_commit</code> attribute should be set before the <b>db2_pconnect()</b>. If the value is changed after the connection has been established, and the connection is to a remote data source, the change does not take effect until the next successful <b>db2_pconnect()</b> for the connection handle.</p><p><b>Note</b>:</p><p>The php.ini setting <code>ibm_db2.i5_allow_commit</code>==0 or <code>DB2_I5_TXN_NO_COMMIT</code> is the default, but may be overridden with the <code>i5_commit</code> option.</p>  <p><code>DB2_I5_TXN_NO_COMMIT</code> - Commitment control is not used.</p> <p><code>DB2_I5_TXN_READ_UNCOMMITTED</code> - Dirty reads, nonrepeatable reads, and phantoms are possible.</p> <p><code>DB2_I5_TXN_READ_COMMITTED</code> - Dirty reads are not possible. Nonrepeatable reads, and phantoms are possible.</p> <p><code>DB2_I5_TXN_REPEATABLE_READ</code> - Dirty reads and nonrepeatable reads are not possible. Phantoms are possible.</p> <p><code>DB2_I5_TXN_SERIALIZABLE</code> - Transactions are serializable. Dirty reads, non-repeatable reads, and phantoms are not possible</p>   <code>i5_query_optimize</code>  <p><code>DB2_FIRST_IO</code> All queries are optimized with the goal of returning the first page of output as fast as possible. This goal works well when the output is controlled by a user who is most likely to cancel the query after viewing the first page of output data. Queries coded with an OPTIMIZE FOR nnn ROWS clause honor the goal specified by the clause.</p> <p><code>DB2_ALL_IO</code> All queries are optimized with the goal of running the entire query to completion in the shortest amount of elapsed time. This is a good option when the output of a query is being written to a file or report, or the interface is queuing the output data. Queries coded with an OPTIMIZE FOR nnn ROWS clause honor the goal specified by the clause. This is the default.</p>   <code>i5_dbcs_alloc</code>  <p><code>DB2_I5_DBCS_ALLOC_ON</code> value turns on DB2 6X allocation scheme for DBCS translation column size growth.</p> <p><code>DB2_I5_DBCS_ALLOC_OFF</code> value turns off DB2 6X allocation scheme for DBCS translation column size growth.</p><p><b>Note</b>:</p><p>The php.ini setting <code>ibm_db2.i5_dbcs_alloc</code>==0 or <code>DB2_I5_DBCS_ALLOC_OFF</code> is the default, but may be overridden with the <code>i5_dbcs_alloc</code> option.</p>    <code>i5_date_fmt</code>  <p><code>DB2_I5_FMT_ISO</code> - The International Organization for Standardization (ISO) date format yyyy-mm-dd is used. This is the default.</p> <p><code>DB2_I5_FMT_USA</code> - The United States date format mm/dd/yyyy is used.</p> <p><code>DB2_I5_FMT_EUR</code> - The European date format dd.mm.yyyy is used.</p> <p><code>DB2_I5_FMT_JIS</code> - The Japanese Industrial Standard date format yyyy-mm-dd is used.</p> <p><code>DB2_I5_FMT_MDY</code> - The date format mm/dd/yyyy is used.</p> <p><code>DB2_I5_FMT_DMY</code> - The date format dd/mm/yyyy is used.</p> <p><code>DB2_I5_FMT_YMD</code> - The date format yy/mm/dd is used.</p> <p><code>DB2_I5_FMT_JUL</code> - The Julian date format yy/ddd is used.</p> <p><code>DB2_I5_FMT_JOB</code> - The job default is used.</p>   <code>i5_date_sep</code>  <p><code>DB2_I5_SEP_SLASH</code> - A slash ( / ) is used as the date separator. This is the default.</p> <p><code>DB2_I5_SEP_DASH</code> - A dash ( - ) is used as the date separator.</p> <p><code>DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the date separator.</p> <p><code>DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the date separator.</p> <p><code>DB2_I5_SEP_BLANK</code> - A blank is used as the date separator.</p> <p><code>DB2_I5_SEP_JOB</code> - The job default is used</p>   <code>i5_time_fmt</code>  <p><code>DB2_I5_FMT_ISO</code> - The International Organization for Standardization (ISO) time format hh.mm.ss is used. This is the default.</p> <p><code>DB2_I5_FMT_USA</code> - The United States time format hh:mmxx is used, where xx is AM or PM.</p> <p><code>DB2_I5_FMT_EUR</code> - The European time format hh.mm.ss is used.</p> <p><code>DB2_I5_FMT_JIS</code> - The Japanese Industrial Standard time format hh:mm:ss is used.</p> <p><code>DB2_I5_FMT_HMS</code> - The hh:mm:ss format is used.</p>   <code>i5_time_sep</code>  <p><code>DB2_I5_SEP_COLON</code> - A colon ( : ) is used as the time separator. This is the default.</p> <p><code>DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the time separator.</p> <p><code>DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the time separator.</p> <p><code>DB2_I5_SEP_BLANK</code> - A blank is used as the time separator.</p> <p><code>DB2_I5_SEP_JOB</code> - The job default is used.</p>   <code>i5_decimal_sep</code>  <p><code>DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the decimal separator. This is the default.</p> <p><code>DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the decimal separator.</p> <p><code>DB2_I5_SEP_JOB</code> - The job default is used.</p>   <p>The following new i5/OS option is available in ibm_db2 version 1.8.0 and later.</p>  <code>i5_libl</code>  <p>A character value that indicates the library list that will be used for resolving unqualified file references. Specify the library list elements separated by blanks 'i5_libl'=&gt;"MYLIB YOURLIB ANYLIB".</p><p><b>Note</b>:</p><p>i5_libl calls qsys2/qcmdexc('cmd',cmdlen), which is only available in i5/OS V5R4 and later.</p>
	 * @return resource <p>Returns a connection handle resource if the connection attempt is successful. <b>db2_pconnect()</b> tries to reuse an existing connection resource that exactly matches the <code>database</code>, <code>username</code>, and <code>password</code> parameters. If the connection attempt fails, <b>db2_pconnect()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.db2-pconnect.php
	 * @see db2_connect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_pconnect(string $database, string $username, string $password, array $options = NULL) {}

	/**
	 * Prepares an SQL statement to be executed
	 * <p><b>db2_prepare()</b> creates a prepared SQL statement which can include 0 or more parameter markers (<code>&#63;</code> characters) representing parameters for input, output, or input/output. You can pass parameters to the prepared statement using <code>db2_bind_param()</code>, or for input values only, as an array passed to <code>db2_execute()</code>.</p><p>There are three main advantages to using prepared statements in your application:</p><p><i>Performance</i>: when you prepare a statement, the database server creates an optimized access plan for retrieving data with that statement. Subsequently issuing the prepared statement with <code>db2_execute()</code> enables the statements to reuse that access plan and avoids the overhead of dynamically creating a new access plan for every statement you issue.</p><p><i>Security</i>: when you prepare a statement, you can include parameter markers for input values. When you execute a prepared statement with input values for placeholders, the database server checks each input value to ensure that the type matches the column definition or parameter definition.</p><p><i>Advanced functionality</i>: Parameter markers not only enable you to pass input values to prepared SQL statements, they also enable you to retrieve OUT and INOUT parameters from stored procedures using <code>db2_bind_param()</code>.</p>
	 * @param resource $connection <p>A valid database connection resource variable as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @param string $statement <p>An SQL statement, optionally containing one or more parameter markers..</p>
	 * @param array $options <p>An associative array containing statement options. You can use this parameter to request a scrollable cursor on database servers that support this functionality.</p> <p>For a description of valid statement options, see <code>db2_set_option()</code>.</p>
	 * @return resource <p>Returns a statement resource if the SQL statement was successfully parsed and prepared by the database server. Returns <b><code>FALSE</code></b> if the database server returned an error. You can determine which error was returned by calling <code>db2_stmt_error()</code> or <code>db2_stmt_errormsg()</code>.</p>
	 * @link https://php.net/manual/en/function.db2-prepare.php
	 * @see db2_bind_param(), db2_execute(), db2_stmt_error(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_prepare($connection, string $statement, array $options = NULL) {}

	/**
	 * Returns a result set listing primary keys for a table
	 * <p>Returns a result set listing the primary keys for a table.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables. If <code>schema</code> is <b><code>NULL</code></b>, <b>db2_primary_keys()</b> matches the schema for the current connection.</p>
	 * @param string $table_name <p>The name of the table.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the primary keys for the specified table. The result set is composed of the following columns:</p>   Column name Description     TABLE_CAT  Name of the catalog for the table containing the primary key. The value is NULL if this table does not have catalogs.    TABLE_SCHEM  Name of the schema for the table containing the primary key.    TABLE_NAME Name of the table containing the primary key.   COLUMN_NAME Name of the column containing the primary key.   KEY_SEQ 1-indexed position of the column in the key.   PK_NAME The name of the primary key.
	 * @link https://php.net/manual/en/function.db2-primary-keys.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_primary_keys($connection, string $qualifier, string $schema, string $table_name) {}

	/**
	 * Returns a result set listing stored procedure parameters
	 * <p>Returns a result set listing the parameters for one or more stored procedures.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the procedures. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @param string $procedure <p>The name of the procedure. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @param string $parameter <p>The name of the parameter. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards. If this parameter is <b><code>NULL</code></b>, all parameters for the specified stored procedures are returned.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the parameters for the stored procedures matching the specified parameters. The rows are composed of the following columns:</p>   Column name Description     PROCEDURE_CAT The catalog that contains the procedure. The value is <b><code>NULL</code></b> if this table does not have catalogs.   PROCEDURE_SCHEM Name of the schema that contains the stored procedure.   PROCEDURE_NAME Name of the procedure.   COLUMN_NAME Name of the parameter.   COLUMN_TYPE  <p>An integer value representing the type of the parameter:</p>   Return value Parameter type     1 (SQL_PARAM_INPUT) Input (IN) parameter.   2 (SQL_PARAM_INPUT_OUTPUT) Input/output (INOUT) parameter.   3 (SQL_PARAM_OUTPUT) Output (OUT) parameter.       DATA_TYPE The SQL data type for the parameter represented as an integer value.   TYPE_NAME A string representing the data type for the parameter.   COLUMN_SIZE An integer value representing the size of the parameter.   BUFFER_LENGTH  Maximum number of bytes necessary to store data for this parameter.    DECIMAL_DIGITS  The scale of the parameter, or <b><code>NULL</code></b> where scale is not applicable.    NUM_PREC_RADIX  An integer value of either <code>10</code> (representing an exact numeric data type), <code>2</code> (representing an approximate numeric data type), or <b><code>NULL</code></b> (representing a data type for which radix is not applicable).    NULLABLE An integer value representing whether the parameter is nullable or not.   REMARKS Description of the parameter.   COLUMN_DEF Default value for the parameter.   SQL_DATA_TYPE An integer value representing the size of the parameter.   SQL_DATETIME_SUB  Returns an integer value representing a datetime subtype code, or <b><code>NULL</code></b> for SQL data types to which this does not apply.    CHAR_OCTET_LENGTH  Maximum length in octets for a character data type parameter, which matches COLUMN_SIZE for single-byte character set data, or <b><code>NULL</code></b> for non-character data types.    ORDINAL_POSITION The 1-indexed position of the parameter in the CALL statement.   IS_NULLABLE  A string value where 'YES' means that the parameter accepts or returns <b><code>NULL</code></b> values and 'NO' means that the parameter does not accept or return <b><code>NULL</code></b> values.
	 * @link https://php.net/manual/en/function.db2-procedure-columns.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_procedure_columns($connection, string $qualifier, string $schema, string $procedure, string $parameter) {}

	/**
	 * Returns a result set listing the stored procedures registered in a database
	 * <p>Returns a result set listing the stored procedures registered in a database.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the procedures. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @param string $procedure <p>The name of the procedure. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the stored procedures matching the specified parameters. The rows are composed of the following columns:</p>   Column name Description     PROCEDURE_CAT The catalog that contains the procedure. The value is <b><code>NULL</code></b> if this table does not have catalogs.   PROCEDURE_SCHEM Name of the schema that contains the stored procedure.   PROCEDURE_NAME Name of the procedure.   NUM_INPUT_PARAMS Number of input (IN) parameters for the stored procedure.   NUM_OUTPUT_PARAMS Number of output (OUT) parameters for the stored procedure.   NUM_RESULT_SETS Number of result sets returned by the stored procedure.   REMARKS Any comments about the stored procedure.   PROCEDURE_TYPE Always returns <code>1</code>, indicating that the stored procedure does not return a return value.
	 * @link https://php.net/manual/en/function.db2-procedures.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_procedures($connection, string $qualifier, string $schema, string $procedure) {}

	/**
	 * Returns a single column from a row in the result set
	 * <p>Use <b>db2_result()</b> to return the value of a specified column in the current row of a result set. You must call <code>db2_fetch_row()</code> before calling <b>db2_result()</b> to set the location of the result set pointer.</p>
	 * @param resource $stmt <p>A valid <code>stmt</code> resource.</p>
	 * @param mixed $column <p>Either an integer mapping to the 0-indexed field in the result set, or a string matching the name of the column.</p>
	 * @return mixed <p>Returns the value of the requested field if the field exists in the result set. Returns NULL if the field does not exist, and issues a warning.</p>
	 * @link https://php.net/manual/en/function.db2-result.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_object(), db2_fetch_row()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_result($stmt, mixed $column): mixed {}

	/**
	 * Rolls back a transaction
	 * <p>Rolls back an in-progress transaction on the specified connection resource and begins a new transaction. PHP applications normally default to AUTOCOMMIT mode, so <b>db2_rollback()</b> normally has no effect unless AUTOCOMMIT has been turned off for the connection resource.</p>
	 * @param resource $connection <p>A valid database connection resource variable as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-rollback.php
	 * @see db2_autocommit(), db2_commit()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_rollback($connection): bool {}

	/**
	 * Returns an object with properties that describe the DB2 database server
	 * <p>This function returns an object with read-only properties that return information about the IBM DB2, Cloudscape, or Apache Derby database server. The following table lists the database server properties:</p><p>The default transaction isolation level supported by the server:</p><p>Uncommitted read: changes are immediately visible by all concurrent transactions.</p><p>Cursor stability: a row read by one transaction can be altered and committed by a second concurrent transaction.</p><p>Read stability: a transaction can add or remove rows matching a search condition or a pending transaction.</p><p>Repeatable read: data affected by pending transaction is not available to other transactions.</p><p>No commit: any changes are visible at the end of a successful operation. Explicit commits and rollbacks are not allowed.</p><p>The level of conformance to the ANSI/ISO SQL-92 specification offered by the database server:</p><p>Entry-level SQL-92 compliance.</p><p>FIPS-127-2 transitional compliance.</p><p>Full level SQL-92 compliance.</p><p>Intermediate level SQL-92 compliance.</p>
	 * @param resource $connection <p>Specifies an active DB2 client connection.</p>
	 * @return object <p>Returns an object on a successful call. Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-server-info.php
	 * @see db2_client_info()
	 * @since PECL ibm_db2 >= 1.1.1
	 */
	function db2_server_info($connection): object {}

	/**
	 * Set options for connection or statement resources
	 * <p>Sets options for a statement resource or a connection resource. You cannot set options for result set resources.</p>
	 * @param resource $resource <p>A valid statement resource as returned from <code>db2_prepare()</code> or a valid connection resource as returned from <code>db2_connect()</code> or <code>db2_pconnect()</code>.</p>
	 * @param array $options <p>An associative array containing valid statement or connection options. This parameter can be used to change autocommit values, cursor types (scrollable or forward), and to specify the case of the column names (lower, upper, or natural) that will appear in a result set.</p>  <code>autocommit</code>  <p>Passing <code>DB2_AUTOCOMMIT_ON</code> turns autocommit on for the specified connection resource.</p> <p>Passing <code>DB2_AUTOCOMMIT_OFF</code> turns autocommit off for the specified connection resource.</p>   <code>cursor</code>  <p>Passing <code>DB2_FORWARD_ONLY</code> specifies a forward-only cursor for a statement resource. This is the default cursor type, and is supported by all database servers.</p> <p>Passing <code>DB2_SCROLLABLE</code> specifies a scrollable cursor for a statement resource. Scrollable cursors enable result set rows to be accessed in non-sequential order, but are only supported by IBM DB2 Universal Database databases.</p>   <code>binmode</code>  <p>Passing <code>DB2_BINARY</code> specifies that binary data will be returned as is. This is the default mode. This is the equivalent of setting <code>ibm_db2.binmode=1</code> in php.ini.</p> <p>Passing <code>DB2_CONVERT</code> specifies that binary data will be converted to hexadecimal encoding, and will be returned as such. This is the equivalent of setting <code>ibm_db2.binmode=2</code> in php.ini.</p> <p>Passing <code>DB2_PASSTHRU</code> specifies that binary data will be converted to <b><code>NULL</code></b>. This is the equivalent of setting <code>ibm_db2.binmode=3</code> in php.ini.</p>   <code>db2_attr_case</code>  <p>Passing <code>DB2_CASE_LOWER</code> specifies that column names of the result set are returned in lower case.</p> <p>Passing <code>DB2_CASE_UPPER</code> specifies that column names of the result set are returned in upper case.</p> <p>Passing <code>DB2_CASE_NATURAL</code> specifies that column names of the result set are returned in natural case.</p>   <code>deferred_prepare</code>  <p>Passing <code>DB2_DEFERRED_PREPARE_ON</code> turns deferred prepare on for the specified statement resource.</p> <p>Passing <code>DB2_DEFERRED_PREPARE_OFF</code> turns deferred prepare off for the specified statement resource.</p>   <p>The following new i5/OS options are available in ibm_db2 version 1.5.1 and later. These options apply only when running PHP and ibm_db2 natively on i5 systems.</p>  <code>i5_fetch_only</code>  <p><code>DB2_I5_FETCH_ON</code> - Cursors are read-only and cannot be used for positioned updates or deletes. This is the default unless <code>SQL_ATTR_FOR_FETCH_ONLY</code> environment has been set to <code>SQL_FALSE</code>.</p> <p><code>DB2_I5_FETCH_OFF</code> - Cursors can be used for positioned updates and deletes.</p>   <p>The following new option is available in ibm_db2 version 1.8.0 and later.</p>  <code>rowcount</code>  <p><code>DB2_ROWCOUNT_PREFETCH_ON</code> - Client can request the full row count prior to fetching, which means that <code>db2_num_rows()</code> returns the number of rows selected even when a <code>ROLLFORWARD_ONLY</code> cursor is used.</p> <p><code>DB2_ROWCOUNT_PREFETCH_OFF</code> - Client cannot request the full row count prior to fetching.</p>   <p>The following new options are available in ibm_db2 version 1.7.0 and later.</p>  <code>trusted_user</code>  <p>To switch the user to a trusted user, pass the User ID (String) of the trusted user as the value of this key. This option can be set on a connection resource only. To use this option, trusted context must be enabled on the connection resource.</p>   <code>trusted_password</code>  <p>The password (String) that corresponds to the user specified by the trusted_user key.</p>   <p>The following new options are available in ibm_db2 version 1.6.0 and later. These options provide useful tracking information that can be accessed during execution with <code>db2_get_option()</code>.</p><p><b>Note</b>:</p><p>When the value in each option is being set, some servers might not handle the entire length provided and might truncate the value.</p> <p>To ensure that the data specified in each option is converted correctly when transmitted to a host system, use only the characters A through Z, 0 through 9, and the underscore (_) or period (.).</p>    <code>userid</code>  <p><code>SQL_ATTR_INFO_USERID</code> - A pointer to a null-terminated character string used to identify the client user ID sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 16 characters. This user-id is not to be confused with the authentication user-id, it is for identification purposes only and is not used for any authorization.</p>    <code>acctstr</code>  <p><code>SQL_ATTR_INFO_ACCTSTR</code> - A pointer to a null-terminated character string used to identify the client accounting string sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 200 characters.</p>    <code>applname</code>  <p><code>SQL_ATTR_INFO_APPLNAME</code> - A pointer to a null-terminated character string used to identify the client application name sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 32 characters.</p>    <code>wrkstnname</code>  <p><code>SQL_ATTR_INFO_WRKSTNNAME</code> - A pointer to a null-terminated character string used to identify the client workstation name sent to the host database server when using DB2 Connect.</p><p><b>Note</b>:</p><p>DB2 for z/OS and OS/390 servers support up to a length of 18 characters.</p>
	 * @param int $type <p>An integer value that specifies the type of resource that was passed into the function. The type of resource and this value must correspond.</p> <p>Passing <code>1</code> as the value specifies that a connection resource has been passed into the function.</p> <p>Passing any integer not equal to <code>1</code> as the value specifies that a statement resource has been passed into the function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.db2-set-option.php
	 * @see db2_connect(), db2_pconnect(), db2_exec(), db2_prepare(), db2_cursor_type()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_set_option($resource, array $options, int $type): bool {}

	/**
	 * Returns a result set listing the unique row identifier columns for a table
	 * <p>Returns a result set listing the unique row identifier columns for a table.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables.</p>
	 * @param string $table_name <p>The name of the table.</p>
	 * @param int $scope <p>Integer value representing the minimum duration for which the unique row identifier is valid. This can be one of the following values:</p>   Integer value SQL constant Description     0 SQL_SCOPE_CURROW Row identifier is valid only while the cursor is positioned on the row.   1 SQL_SCOPE_TRANSACTION Row identifier is valid for the duration of the transaction.   2 SQL_SCOPE_SESSION Row identifier is valid for the duration of the connection.
	 * @return resource <p>Returns a statement resource with a result set containing rows with unique row identifier information for a table. The rows are composed of the following columns:</p>   Column name Description     SCOPE  <p></p>   Integer value SQL constant Description     0 SQL_SCOPE_CURROW Row identifier is valid only while the cursor is positioned on the row.   1 SQL_SCOPE_TRANSACTION Row identifier is valid for the duration of the transaction.   2 SQL_SCOPE_SESSION Row identifier is valid for the duration of the connection.       COLUMN_NAME Name of the unique column.   DATA_TYPE SQL data type for the column.   TYPE_NAME Character string representation of the SQL data type for the column.   COLUMN_SIZE An integer value representing the size of the column.   BUFFER_LENGTH  Maximum number of bytes necessary to store data from this column.    DECIMAL_DIGITS  The scale of the column, or <b><code>NULL</code></b> where scale is not applicable.    NUM_PREC_RADIX  An integer value of either <code>10</code> (representing an exact numeric data type), <code>2</code> (representing an approximate numeric data type), or <b><code>NULL</code></b> (representing a data type for which radix is not applicable).    PSEUDO_COLUMN Always returns 1.
	 * @link https://php.net/manual/en/function.db2-special-columns.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_special_columns($connection, string $qualifier, string $schema, string $table_name, int $scope) {}

	/**
	 * Returns a result set listing the index and statistics for a table
	 * <p>Returns a result set listing the index and statistics for a table.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema that contains the targeted table. If this parameter is <b><code>NULL</code></b>, the statistics and indexes are returned for the schema of the current user.</p>
	 * @param string $table_name <p>The name of the table.</p>
	 * @param bool $unique <p>An integer value representing the type of index information to return.</p>  <code>0</code>  <p>Return only the information for unique indexes on the table.</p>   <code>1</code>  <p>Return the information for all indexes on the table.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the statistics and indexes for the base tables matching the specified parameters. The rows are composed of the following columns:</p>   Column name Description     TABLE_CAT The catalog that contains the table. The value is <b><code>NULL</code></b> if this table does not have catalogs.   TABLE_SCHEM Name of the schema that contains the table.   TABLE_NAME Name of the table.   NON_UNIQUE  <p>An integer value representing whether the index prohibits unique values, or whether the row represents statistics on the table itself:</p>   Return value Parameter type     0 (SQL_FALSE) The index allows duplicate values.   1 (SQL_TRUE) The index values must be unique.   <b><code>NULL</code></b> This row is statistics information for the table itself.       INDEX_QUALIFIER A string value representing the qualifier that would have to be prepended to INDEX_NAME to fully qualify the index.   INDEX_NAME A string representing the name of the index.   TYPE  <p>An integer value representing the type of information contained in this row of the result set:</p>   Return value Parameter type     0 (SQL_TABLE_STAT) The row contains statistics about the table itself.   1 (SQL_INDEX_CLUSTERED) The row contains information about a clustered index.   2 (SQL_INDEX_HASH) The row contains information about a hashed index.   3 (SQL_INDEX_OTHER) The row contains information about a type of index that is neither clustered nor hashed.       ORDINAL_POSITION The 1-indexed position of the column in the index. <b><code>NULL</code></b> if the row contains statistics information about the table itself.   COLUMN_NAME The name of the column in the index. <b><code>NULL</code></b> if the row contains statistics information about the table itself.   ASC_OR_DESC  <code>A</code> if the column is sorted in ascending order, <code>D</code> if the column is sorted in descending order, <b><code>NULL</code></b> if the row contains statistics information about the table itself.    CARDINALITY  <p>If the row contains information about an index, this column contains an integer value representing the number of unique values in the index.</p> <p>If the row contains information about the table itself, this column contains an integer value representing the number of rows in the table.</p>    PAGES  <p>If the row contains information about an index, this column contains an integer value representing the number of pages used to store the index.</p> <p>If the row contains information about the table itself, this column contains an integer value representing the number of pages used to store the table.</p>    FILTER_CONDITION Always returns <b><code>NULL</code></b>.
	 * @link https://php.net/manual/en/function.db2-statistics.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_statistics($connection, string $qualifier, string $schema, string $table_name, bool $unique) {}

	/**
	 * Returns a string containing the SQLSTATE returned by an SQL statement
	 * <p>Returns a string containing the SQLSTATE value returned by an SQL statement.</p><p>If you do not pass a statement resource as an argument to <b>db2_stmt_error()</b>, the driver returns the SQLSTATE value associated with the last attempt to return a statement resource, for example, from <code>db2_prepare()</code> or <code>db2_exec()</code>.</p><p>To learn what the SQLSTATE value means, you can issue the following command at a DB2 Command Line Processor prompt: <b><code>db2 '&#63; <code>sqlstate-value</code>'</code></b>. You can also call <code>db2_stmt_errormsg()</code> to retrieve an explicit error message and the associated SQLCODE value.</p>
	 * @param resource $stmt <p>A valid statement resource.</p>
	 * @return string <p>Returns a string containing an SQLSTATE value.</p>
	 * @link https://php.net/manual/en/function.db2-stmt-error.php
	 * @see db2_conn_error(), db2_conn_errormsg(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_stmt_error($stmt = NULL): string {}

	/**
	 * Returns a string containing the last SQL statement error message
	 * <p>Returns a string containing the last SQL statement error message.</p><p>If you do not pass a statement resource as an argument to <b>db2_stmt_errormsg()</b>, the driver returns the error message associated with the last attempt to return a statement resource, for example, from <code>db2_prepare()</code> or <code>db2_exec()</code>.</p>
	 * @param resource $stmt <p>A valid statement resource.</p>
	 * @return string <p>Returns a string containing the error message and SQLCODE value for the last error that occurred issuing an SQL statement.</p>
	 * @link https://php.net/manual/en/function.db2-stmt-errormsg.php
	 * @see db2_conn_error(), db2_conn_errormsg(), db2_stmt_error()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_stmt_errormsg($stmt = NULL): string {}

	/**
	 * Returns a result set listing the tables and associated privileges in a database
	 * <p>Returns a result set listing the tables and associated privileges in a database.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @param string $table_name <p>The name of the table. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the privileges for the tables that match the specified parameters. The rows are composed of the following columns:</p>   Column name Description     TABLE_CAT The catalog that contains the table. The value is <b><code>NULL</code></b> if this table does not have catalogs.   TABLE_SCHEM Name of the schema that contains the table.   TABLE_NAME Name of the table.   GRANTOR Authorization ID of the user who granted the privilege.   GRANTEE Authorization ID of the user to whom the privilege was granted.   PRIVILEGE  The privilege that has been granted. This can be one of ALTER, CONTROL, DELETE, INDEX, INSERT, REFERENCES, SELECT, or UPDATE.    IS_GRANTABLE  A string value of "YES" or "NO" indicating whether the grantee can grant the privilege to other users.
	 * @link https://php.net/manual/en/function.db2-table-privileges.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_table_privileges($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL) {}

	/**
	 * Returns a result set listing the tables and associated metadata in a database
	 * <p>Returns a result set listing the tables and associated metadata in a database.</p>
	 * @param resource $connection <p>A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.</p>
	 * @param string $qualifier <p>A qualifier for DB2 databases running on OS/390 or z/OS servers. For other databases, pass <b><code>NULL</code></b> or an empty string.</p>
	 * @param string $schema <p>The schema which contains the tables. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @param string $table_name <p>The name of the table. This parameter accepts a search pattern containing <code>_</code> and <code>%</code> as wildcards.</p>
	 * @param string $table_type <p>A list of comma-delimited table type identifiers. To match all table types, pass <b><code>NULL</code></b> or an empty string. Valid table type identifiers include: ALIAS, HIERARCHY TABLE, INOPERATIVE VIEW, NICKNAME, MATERIALIZED QUERY TABLE, SYSTEM TABLE, TABLE, TYPED TABLE, TYPED VIEW, and VIEW.</p>
	 * @return resource <p>Returns a statement resource with a result set containing rows describing the tables that match the specified parameters. The rows are composed of the following columns:</p>   Column name Description     TABLE_CAT The catalog that contains the table. The value is <b><code>NULL</code></b> if this table does not have catalogs.   TABLE_SCHEM Name of the schema that contains the table.   TABLE_NAME Name of the table.   TABLE_TYPE Table type identifier for the table.   REMARKS Description of the table.
	 * @link https://php.net/manual/en/function.db2-tables.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_tables($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $table_type = NULL) {}

	/**
	 * Specifies that autocommit should be turned off.
	 */
	define('DB2_AUTOCOMMIT_OFF', null);

	/**
	 * Specifies that autocommit should be turned on.
	 */
	define('DB2_AUTOCOMMIT_ON', null);

	/**
	 * Specifies that binary data shall be returned as is. This is the default mode.
	 */
	define('DB2_BINARY', null);

	/**
	 * Specifies that column names will be returned in lower case.
	 */
	define('DB2_CASE_LOWER', null);

	/**
	 * Specifies that column names will be returned in their natural case.
	 */
	define('DB2_CASE_NATURAL', null);

	/**
	 * Specifies that column names will be returned in upper case.
	 */
	define('DB2_CASE_UPPER', null);

	/**
	 * Specifies that the variable should be bound as a CHAR or VARCHAR data type.
	 */
	define('DB2_CHAR', null);

	/**
	 * Specifies that binary data shall be converted to a hexadecimal encoding and returned as an ASCII string.
	 */
	define('DB2_CONVERT', null);

	/**
	 * Specifies that deferred prepare should be turned off for the specified statement resource.
	 */
	define('DB2_DEFERRED_PREPARE_OFF', null);

	/**
	 * Specifies that deferred prepare should be turned on for the specified statement resource.
	 */
	define('DB2_DEFERRED_PREPARE_ON', null);

	/**
	 * Specifies that the variable should be bound as a DOUBLE, FLOAT, or REAL data type.
	 */
	define('DB2_DOUBLE', null);

	/**
	 * Specifies a forward-only cursor for a statement resource. This is the default cursor type and is supported on all database servers.
	 */
	define('DB2_FORWARD_ONLY', null);

	/**
	 * Specifies that the variable should be bound as a SMALLINT, INTEGER, or BIGINT data type.
	 */
	define('DB2_LONG', null);

	/**
	 * Specifies that the column should be bound directly to a file for input.
	 */
	define('DB2_PARAM_FILE', null);

	/**
	 * Specifies the PHP variable should be bound as an IN parameter for a stored procedure.
	 */
	define('DB2_PARAM_IN', null);

	/**
	 * Specifies the PHP variable should be bound as an INOUT parameter for a stored procedure.
	 */
	define('DB2_PARAM_INOUT', null);

	/**
	 * Specifies the PHP variable should be bound as an OUT parameter for a stored procedure.
	 */
	define('DB2_PARAM_OUT', null);

	/**
	 * Specifies that binary data shall be converted to a <b><code>NULL</code></b> value.
	 */
	define('DB2_PASSTHRU', null);

	/**
	 * Specifies a scrollable cursor for a statement resource. This mode enables random access to rows in a result set, but currently is supported only by IBM DB2 Universal Database.
	 */
	define('DB2_SCROLLABLE', null);

}
