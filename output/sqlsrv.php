<?php



namespace {

	/**
	 * Begins a database transaction
	 * <p>The transaction begun by <b>sqlsrv_begin_transaction()</b> includes all statements that were executed after the call to <b>sqlsrv_begin_transaction()</b> and before calls to <code>sqlsrv_rollback()</code> or <code>sqlsrv_commit()</code>. Explicit transactions should be started and committed or rolled back using these functions instead of executing SQL statements that begin and committ/roll back transactions. For more information, see SQLSRV Transactions.</p>
	 * @param resource $conn <p>The connection resource returned by a call to <code>sqlsrv_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-begin-transaction.php
	 * @see sqlsrv_commit(), sqlsrv_rollback()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_begin_transaction($conn): bool {}

	/**
	 * Cancels a statement
	 * <p>Cancels a statement. Any results associated with the statement that have not been consumed are deleted. After <b>sqlsrv_cancel()</b> has been called, the specified statement can be re-executed if it was created with <code>sqlsrv_prepare()</code>. Calling <b>sqlsrv_cancel()</b> is not necessary if all the results associated with the statement have been consumed.</p>
	 * @param resource $stmt <p>The statement resource to be cancelled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-cancel.php
	 * @see sqlsrv_free_stmt(), sqlsrv_prepare()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_cancel($stmt): bool {}

	/**
	 * Returns information about the client and specified connection
	 * <p>Returns information about the client and specified connection</p>
	 * @param resource $conn <p>The connection about which information is returned.</p>
	 * @return array <p>Returns an associative array with keys described in the table below. Returns <b><code>FALSE</code></b> otherwise.</p> <b>Array returned by sqlsrv_client_info</b>   Key Description     DriverDllName SQLNCLI10.DLL   DriverODBCVer ODBC version (xx.yy)   DriverVer SQL Server Native Client DLL version (10.5.xxx)   ExtensionVer php_sqlsrv.dll version (2.0.xxx.x)
	 * @link http://php.net/manual/en/function.sqlsrv-client-info.php
	 * @see sqlsrv_server_info()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_client_info($conn): array {}

	/**
	 * Closes an open connection and releases resourses associated with the connection
	 * <p>Closes an open connection and releases resourses associated with the connection.</p>
	 * @param resource $conn <p>The connection to be closed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-close.php
	 * @see sqlsrv_connect()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_close($conn): bool {}

	/**
	 * Commits a transaction that was begun with sqlsrv_begin_transaction()
	 * <p>Commits a transaction that was begun with <code>sqlsrv_begin_transaction()</code>. The connection is returned to auto-commit mode after <b>sqlsrv_commit()</b> is called. The transaction that is committed includes all statements that were executed after the call to <code>sqlsrv_begin_transaction()</code>. Explicit transactions should be started and committed or rolled back using these functions instead of executing SQL statements that begin and committ/roll back transactions. For more information, see SQLSRV Transactions.</p>
	 * @param resource $conn <p>The connection on which the transaction is to be committed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-commit.php
	 * @see sqlsrv_begin_transaction(), sqlsrv_rollback()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_commit($conn): bool {}

	/**
	 * Changes the driver error handling and logging configurations
	 * <p>Changes the driver error handling and logging configurations.</p>
	 * @param string $setting <p>The name of the setting to set. The possible values are "WarningsReturnAsErrors", "LogSubsystems", and "LogSeverity".</p>
	 * @param mixed $value <p>The value of the specified setting. The following table shows possible values:</p> <b>Error and Logging Setting Options</b>   Setting Options     WarningsReturnAsErrors 1 (<b><code>TRUE</code></b>) or 0 (<b><code>FALSE</code></b>)   LogSubsystems SQLSRV_LOG_SYSTEM_ALL (-1) SQLSRV_LOG_SYSTEM_CONN (2) SQLSRV_LOG_SYSTEM_INIT (1) SQLSRV_LOG_SYSTEM_OFF (0) SQLSRV_LOG_SYSTEM_STMT (4) SQLSRV_LOG_SYSTEM_UTIL (8)   LogSeverity SQLSRV_LOG_SEVERITY_ALL (-1) SQLSRV_LOG_SEVERITY_ERROR (1) SQLSRV_LOG_SEVERITY_NOTICE (4) SQLSRV_LOG_SEVERITY_WARNING (2)
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-configure.php
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_configure(string $setting, $value): bool {}

	/**
	 * Opens a connection to a Microsoft SQL Server database
	 * <p>Opens a connection to a Microsoft SQL Server database. By default, the connection is attempted using Windows Authentication. To connect using SQL Server Authentication, include "UID" and "PWD" in the connection options array.</p>
	 * @param string $serverName <p>The name of the server to which a connection is established. To connect to a specific instance, follow the server name with a backward slash and the instance name (e.g. serverName\sqlexpress).</p>
	 * @param array $connectionInfo <p>An associative array that specifies options for connecting to the server. If values for the UID and PWD keys are not specified, the connection will be attempted using Windows Authentication. For a complete list of supported keys, see SQLSRV Connection Options.</p>
	 * @return resource <p>A connection resource. If a connection cannot be successfully opened, <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-connect.php
	 * @see sqlsrv_close(), sqlsrv_errors(), sqlsrv_query()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_connect(string $serverName, array $connectionInfo = NULL) {}

	/**
	 * Returns error and warning information about the last SQLSRV operation performed
	 * <p>Returns error and warning information about the last SQLSRV operation performed.</p>
	 * @param int $errorsOrWarnings <p>Determines whether error information, warning information, or both are returned. If this parameter is not supplied, both error information and warning information are returned. The following are the supported values for this parameter: SQLSRV_ERR_ALL, SQLSRV_ERR_ERRORS, SQLSRV_ERR_WARNINGS.</p>
	 * @return mixed <p>If errors and/or warnings occurred on the last sqlsrv operation, an array of arrays containing error information is returned. If no errors and/or warnings occurred on the last sqlsrv operation, <b><code>NULL</code></b> is returned. The following table describes the structure of the returned arrays:</p> <b>Array returned by sqlsrv_errors</b>   Key Description     SQLSTATE For errors that originate from the ODBC driver, the SQLSTATE returned by ODBC. For errors that originate from the Microsoft Drivers for PHP for SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.    code For errors that originate from SQL Server, the native SQL Server error code. For errors that originate from the ODBC driver, the error code returned by ODBC. For errors that originate from the Microsoft Drivers for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.    message A description of the error.
	 * @link http://php.net/manual/en/function.sqlsrv-errors.php
	 * @see sqlsrv_configure()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_errors(int $errorsOrWarnings = NULL) {}

	/**
	 * Executes a statement prepared with sqlsrv_prepare()
	 * <p>Executes a statement prepared with <code>sqlsrv_prepare()</code>. This function is ideal for executing a prepared statement multiple times with different parameter values.</p>
	 * @param resource $stmt <p>A statement resource returned by <code>sqlsrv_prepare()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-execute.php
	 * @see sqlsrv_prepare(), sqlsrv_query()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_execute($stmt): bool {}

	/**
	 * Makes the next row in a result set available for reading
	 * <p>Makes the next row in a result set available for reading. Use <code>sqlsrv_get_field()</code> to read the fields of the row.</p>
	 * @param resource $stmt <p>A statement resource created by executing <code>sqlsrv_query()</code> or <code>sqlsrv_execute()</code>.</p>
	 * @param int $row <p>The row to be accessed. This parameter can only be used if the specified statement was prepared with a scrollable cursor. In that case, this parameter can take on one of the following values:</p><ul> <li>SQLSRV_SCROLL_NEXT</li> <li>SQLSRV_SCROLL_PRIOR</li> <li>SQLSRV_SCROLL_FIRST</li> <li>SQLSRV_SCROLL_LAST</li> <li>SQLSRV_SCROLL_ABSOLUTE</li> <li>SQLSRV_SCROLL_RELATIVE</li> </ul>
	 * @param int $offset <p>Specifies the row to be accessed if the row parameter is set to <b><code>SQLSRV_SCROLL_ABSOLUTE</code></b> or <b><code>SQLSRV_SCROLL_RELATIVE</code></b>. Note that the first row in a result set has index 0.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if the next row of a result set was successfully retrieved, <b><code>FALSE</code></b> if an error occurs, and <b><code>NULL</code></b> if there are no more rows in the result set.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-fetch.php
	 * @see sqlsrv_get_field(), sqlsrv_fetch_array(), sqlsrv_fetch_object()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_fetch($stmt, int $row = NULL, int $offset = NULL) {}

	/**
	 * Returns a row as an array
	 * <p>Returns the next available row of data as an associative array, a numeric array, or both (the default).</p>
	 * @param resource $stmt <p>A statement resource returned by sqlsrv_query or sqlsrv_prepare.</p>
	 * @param int $fetchType <p>A predefined constant specifying the type of array to return. Possible values are <b><code>SQLSRV_FETCH_ASSOC</code></b>, <b><code>SQLSRV_FETCH_NUMERIC</code></b>, and <b><code>SQLSRV_FETCH_BOTH</code></b> (the default).</p> <p>A fetch type of SQLSRV_FETCH_ASSOC should not be used when consuming a result set with multiple columns of the same name.</p>
	 * @param int $row <p>Specifies the row to access in a result set that uses a scrollable cursor. Possible values are <b><code>SQLSRV_SCROLL_NEXT</code></b>, <b><code>SQLSRV_SCROLL_PRIOR</code></b>, <b><code>SQLSRV_SCROLL_FIRST</code></b>, <b><code>SQLSRV_SCROLL_LAST</code></b>, <b><code>SQLSRV_SCROLL_ABSOLUTE</code></b> and, <b><code>SQLSRV_SCROLL_RELATIVE</code></b> (the default). When this parameter is specified, the <code>fetchType</code> must be explicitly defined.</p>
	 * @param int $offset <p>Specifies the row to be accessed if the row parameter is set to <b><code>SQLSRV_SCROLL_ABSOLUTE</code></b> or <b><code>SQLSRV_SCROLL_RELATIVE</code></b>. Note that the first row in a result set has index 0.</p>
	 * @return array <p>Returns an array on success, <b><code>NULL</code></b> if there are no more rows to return, and <b><code>FALSE</code></b> if an error occurs.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-fetch-array.php
	 * @see sqlsrv_connect(), sqlsrv_query(), sqlsrv_errors(), sqlsrv_fetch()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_fetch_array($stmt, int $fetchType = NULL, int $row = NULL, int $offset = NULL): array {}

	/**
	 * Retrieves the next row of data in a result set as an object
	 * <p>Retrieves the next row of data in a result set as an instance of the specified class with properties that match the row field names and values that correspond to the row field values.</p>
	 * @param resource $stmt <p>A statement resource created by <code>sqlsrv_query()</code> or <code>sqlsrv_execute()</code>.</p>
	 * @param string $className <p>The name of the class to instantiate. If no class name is specified, stdClass is instantiated.</p>
	 * @param array $ctorParams <p>Values passed to the constructor of the specified class. If the constructor of the specified class takes parameters, the ctorParams array must be supplied.</p>
	 * @param int $row <p>The row to be accessed. This parameter can only be used if the specified statement was prepared with a scrollable cursor. In that case, this parameter can take on one of the following values:</p><ul> <li>SQLSRV_SCROLL_NEXT</li> <li>SQLSRV_SCROLL_PRIOR</li> <li>SQLSRV_SCROLL_FIRST</li> <li>SQLSRV_SCROLL_LAST</li> <li>SQLSRV_SCROLL_ABSOLUTE</li> <li>SQLSRV_SCROLL_RELATIVE</li> </ul>
	 * @param int $offset <p>Specifies the row to be accessed if the row parameter is set to <b><code>SQLSRV_SCROLL_ABSOLUTE</code></b> or <b><code>SQLSRV_SCROLL_RELATIVE</code></b>. Note that the first row in a result set has index 0.</p>
	 * @return mixed <p>Returns an object on success, <b><code>NULL</code></b> if there are no more rows to return, and <b><code>FALSE</code></b> if an error occurs or if the specified class does not exist.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-fetch-object.php
	 * @see sqlsrv_fetch(), sqlsrv_fetch_array()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_fetch_object($stmt, string $className = NULL, array $ctorParams = NULL, int $row = NULL, int $offset = NULL) {}

	/**
	 * Retrieves metadata for the fields of a statement prepared by sqlsrv_prepare() or sqlsrv_query()
	 * <p>Retrieves metadata for the fields of a statement prepared by <code>sqlsrv_prepare()</code> or <code>sqlsrv_query()</code>. <b>sqlsrv_field_metadata()</b> can be called on a statement before or after statement execution.</p>
	 * @param resource $stmt <p>The statment resource for which metadata is returned.</p>
	 * @return mixed <p>Returns an array of arrays is returned on success. Otherwise, <b><code>FALSE</code></b> is returned. Each returned array is described by the following table:</p> <b>Array returned by sqlsrv_field_metadata</b>   Key Description     Name The name of the field.   Type The numeric value for the SQL type.   Size The number of characters for fields of character type, the number of bytes for fields of binary type, or <b><code>NULL</code></b> for other types.   Precision The precision for types of variable precision, <b><code>NULL</code></b> for other types.   Scale The scale for types of variable scale, <b><code>NULL</code></b> for other types.   Nullable An enumeration indicating whether the column is nullable, not nullable, or if it is not known.    For more information, see sqlsrv_field_metadata in the Microsoft SQLSRV documentation.
	 * @link http://php.net/manual/en/function.sqlsrv-field-metadata.php
	 * @see sqlsrv_client_info()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_field_metadata($stmt) {}

	/**
	 * Frees all resources for the specified statement
	 * <p>Frees all resources for the specified statement. The statement cannot be used after <b>sqlsrv_free_stmt()</b> has been called on it. If <b>sqlsrv_free_stmt()</b> is called on an in-progress statement that alters server state, statement execution is terminated and the statement is rolled back.</p>
	 * @param resource $stmt <p>The statment for which resources are freed. Note that <b><code>NULL</code></b> is a valid parameter value. This allows the function to be called multiple times in a script.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-free-stmt.php
	 * @see sqlsrv_cancel()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_free_stmt($stmt): bool {}

	/**
	 * Returns the value of the specified configuration setting
	 * <p>Returns the value of the specified configuration setting.</p>
	 * @param string $setting <p>The name of the setting for which the value is returned. For a list of configurable settings, see <code>sqlsrv_configure()</code>.</p>
	 * @return mixed <p>Returns the value of the specified setting. If an invalid setting is specified, <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-get-config.php
	 * @see sqlsrv_configure()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_get_config(string $setting) {}

	/**
	 * Gets field data from the currently selected row
	 * <p>Gets field data from the currently selected row. Fields must be accessed in order. Field indices start at 0.</p>
	 * @param resource $stmt <p>A statement resource returned by <code>sqlsrv_query()</code> or <code>sqlsrv_execute()</code>.</p>
	 * @param int $fieldIndex <p>The index of the field to be retrieved. Field indices start at 0. Fields must be accessed in order. i.e. If you access field index 1, then field index 0 will not be available.</p>
	 * @param int $getAsType <p>The PHP data type for the returned field data. If this parameter is not set, the field data will be returned as its default PHP data type. For information about default PHP data types, see Default PHP Data Types in the Microsoft SQLSRV documentation.</p>
	 * @return mixed <p>Returns data from the specified field on success. Returns <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-get-field.php
	 * @see sqlsrv_fetch(), sqlsrv_fetch_array(), sqlsrv_fetch_object()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_get_field($stmt, int $fieldIndex, int $getAsType = NULL) {}

	/**
	 * Indicates whether the specified statement has rows
	 * <p>Indicates whether the specified statement has rows.</p>
	 * @param resource $stmt <p>A statement resource returned by <code>sqlsrv_query()</code> or <code>sqlsrv_execute()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the specified statement has rows and <b><code>FALSE</code></b> if the statement does not have rows or if an error occurred.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-has-rows.php
	 * @see sqlsrv_num_rows(), sqlsrv_query()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_has_rows($stmt): bool {}

	/**
	 * Makes the next result of the specified statement active
	 * <p>Makes the next result of the specified statement active. Results include result sets, row counts, and output parameters.</p>
	 * @param resource $stmt <p>The statment on which the next result is being called.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if the next result was successfully retrieved, <b><code>FALSE</code></b> if an error occurred, and <b><code>NULL</code></b> if there are no more results to retrieve.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-next-result.php
	 * @see sqlsrv_query(), sqlsrv_fetch_array(), sqlsrv_rows_affected()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_next_result($stmt) {}

	/**
	 * Retrieves the number of fields (columns) on a statement
	 * <p>Retrieves the number of fields (columns) on a statement.</p>
	 * @param resource $stmt <p>The statment for which the number of fields is returned. <b>sqlsrv_num_fields()</b> can be called on a statement before or after statement execution.</p>
	 * @return mixed <p>Returns the number of fields on success. Returns <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-num-fields.php
	 * @see sqlsrv_field_metadata(), sqlsrv_fetch(), sqlsrv_get_field()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_num_fields($stmt) {}

	/**
	 * Retrieves the number of rows in a result set
	 * <p>Retrieves the number of rows in a result set. This function requires that the statment resource be created with a static or keyset cursor. For more information, see <code>sqlsrv_query()</code>, <code>sqlsrv_prepare()</code>, or Specifying a Cursor Type and Selecting Rows in the Microsoft SQLSRV documentation.</p>
	 * @param resource $stmt <p>The statement for which the row count is returned. The statment resource must be created with a static or keyset cursor. For more information, see <code>sqlsrv_query()</code>, <code>sqlsrv_prepare()</code>, or Specifying a Cursor Type and Selecting Rows in the Microsoft SQLSRV documentation.</p>
	 * @return mixed <p>Returns the number of rows retrieved on success and <b><code>FALSE</code></b> if an error occurred. If a forward cursor (the default) or dynamic cursor is used, <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-num-rows.php
	 * @see sqlsrv_has_rows(), sqlsrv_rows_affected()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_num_rows($stmt) {}

	/**
	 * Prepares a query for execution
	 * <p>Prepares a query for execution. This function is ideal for preparing a query that will be executed multiple times with different parameter values.</p>
	 * @param resource $conn <p>A connection resource returned by <code>sqlsrv_connect()</code>.</p>
	 * @param string $sql <p>The string that defines the query to be prepared and executed.</p>
	 * @param array $params <p>An array specifying parameter information when executing a parameterized query. Array elements can be any of the following:</p><ul> <li>A literal value</li> <li>A PHP variable</li> <li>An array with this structure: array($value [, $direction [, $phpType [, $sqlType]]])</li> </ul> The following table describes the elements in the array structure above:  <b>Array structure</b>   Element Description     $value A literal value, a PHP variable, or a PHP by-reference variable.   $direction (optional) One of the following SQLSRV constants used to indicate the parameter direction: SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT. The default value is SQLSRV_PARAM_IN.    $phpType (optional) A SQLSRV_PHPTYPE_&#42; constant that specifies PHP data type of the returned value.   $sqlType (optional) A SQLSRV_SQLTYPE_&#42; constant that specifies the SQL Server data type of the input value.
	 * @param array $options <p>An array specifing query property options. The supported keys are described in the following table:</p>  <b>Query Options</b>   Key Values Description     QueryTimeout A positive integer value. Sets the query timeout in seconds. By default, the driver will wait indefinitely for results.   SendStreamParamsAtExec <b><code>TRUE</code></b> or <b><code>FALSE</code></b> (the default is <b><code>TRUE</code></b>) Configures the driver to send all stream data at execution (<b><code>TRUE</code></b>), or to send stream data in chunks (<b><code>FALSE</code></b>). By default, the value is set to <b><code>TRUE</code></b>. For more information, see <code>sqlsrv_send_stream_data()</code>.   Scrollable SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_STATIC, SQLSRV_CURSOR_DYNAMIC, or SQLSRV_CURSOR_KEYSET See Specifying a Cursor Type and Selecting Rows in the Microsoft SQLSRV documentation.
	 * @return mixed <p>Returns a statement resource on success and <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-prepare.php
	 * @see sqlsrv_execute(), sqlsrv_query()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_prepare($conn, string $sql, array $params = NULL, array $options = NULL) {}

	/**
	 * Prepares and executes a query
	 * <p>Prepares and executes a query.</p>
	 * @param resource $conn <p>A connection resource returned by <code>sqlsrv_connect()</code>.</p>
	 * @param string $sql <p>The string that defines the query to be prepared and executed.</p>
	 * @param array $params <p>An array specifying parameter information when executing a parameterized query. Array elements can be any of the following:</p><ul> <li>A literal value</li> <li>A PHP variable</li> <li>An array with this structure: array($value [, $direction [, $phpType [, $sqlType]]])</li> </ul> The following table describes the elements in the array structure above:  <b>Array structure</b>   Element Description     $value A literal value, a PHP variable, or a PHP by-reference variable.   $direction (optional) One of the following SQLSRV constants used to indicate the parameter direction: SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT. The default value is SQLSRV_PARAM_IN.   $phpType (optional) A SQLSRV_PHPTYPE_&#42; constant that specifies PHP data type of the returned value.   $sqlType (optional) A SQLSRV_SQLTYPE_&#42; constant that specifies the SQL Server data type of the input value.
	 * @param array $options <p>An array specifing query property options. The supported keys are described in the following table:</p>  <b>Query Options</b>   Key Values Description     QueryTimeout A positive integer value. Sets the query timeout in seconds. By default, the driver will wait indefinitely for results.   SendStreamParamsAtExec <b><code>TRUE</code></b> or <b><code>FALSE</code></b> (the default is <b><code>TRUE</code></b>) Configures the driver to send all stream data at execution (<b><code>TRUE</code></b>), or to send stream data in chunks (<b><code>FALSE</code></b>). By default, the value is set to <b><code>TRUE</code></b>. For more information, see <code>sqlsrv_send_stream_data()</code>.   Scrollable SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_STATIC, SQLSRV_CURSOR_DYNAMIC, or SQLSRV_CURSOR_KEYSET See Specifying a Cursor Type and Selecting Rows in the Microsoft SQLSRV documentation.
	 * @return mixed <p>Returns a statement resource on success and <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-query.php
	 * @see sqlsrv_prepare(), sqlsrv_execute()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_query($conn, string $sql, array $params = NULL, array $options = NULL) {}

	/**
	 * Rolls back a transaction that was begun with sqlsrv_begin_transaction()
	 * <p>Rolls back a transaction that was begun with <code>sqlsrv_begin_transaction()</code> and returns the connection to auto-commit mode.</p>
	 * @param resource $conn <p>The connection resource returned by a call to <code>sqlsrv_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-rollback.php
	 * @see sqlsrv_begin_transaction(), sqlsrv_commit()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_rollback($conn): bool {}

	/**
	 * Returns the number of rows modified by the last INSERT, UPDATE, or DELETE query executed
	 * <p>Returns the number of rows modified by the last INSERT, UPDATE, or DELETE query executed. For information about the number of rows returned by a SELECT query, see <code>sqlsrv_num_rows()</code>.</p>
	 * @param resource $stmt <p>The executed statement resource for which the number of affected rows is returned.</p>
	 * @return int <p>Returns the number of rows affected by the last INSERT, UPDATE, or DELETE query. If no rows were affected, 0 is returned. If the number of affected rows cannot be determined, -1 is returned. If an error occurred, <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-rows-affected.php
	 * @see sqlsrv_num_rows()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_rows_affected($stmt): int {}

	/**
	 * Sends data from parameter streams to the server
	 * <p>Send data from parameter streams to the server. Up to 8 KB of data is sent with each call.</p>
	 * @param resource $stmt <p>A statement resource returned by <code>sqlsrv_query()</code> or <code>sqlsrv_execute()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there is more data to send and <b><code>FALSE</code></b> if there is not.</p>
	 * @link http://php.net/manual/en/function.sqlsrv-send-stream-data.php
	 * @see sqlsrv_prepare(), sqlsrv_query()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_send_stream_data($stmt): bool {}

	/**
	 * Returns information about the server
	 * <p>Returns information about the server.</p>
	 * @param resource $conn <p>The connection resource that connects the client and the server.</p>
	 * @return array <p>Returns an array as described in the following table:</p> <b>Returned Array</b>   CurrentDatabase The connected-to database.     SQLServerVersion The SQL Server version.   SQLServerName The name of the server.
	 * @link http://php.net/manual/en/function.sqlsrv-server-info.php
	 * @see sqlsrv_client_info()
	 * @since No version information available, might only be in Git
	 */
	function sqlsrv_server_info($conn): array {}

	/**
	 * Creates a client-side cursor query. Lets you access rows in any order. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_CURSOR_BUFFERED', null);

	/**
	 * Inidicates a dynamic cursor. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_CURSOR_DYNAMIC', null);

	/**
	 * Inidicates a forward-only cursor. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_CURSOR_FORWARD', null);

	/**
	 * Inidicates a keyset cursor. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_CURSOR_KEYSET', null);

	/**
	 * Inidicates a static cursor. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_CURSOR_STATIC', null);

	/**
	 * Specifies that data is returned as a raw byte stream from the server without performing encoding or translation. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_ENC_BINARY', null);

	/**
	 * Data is returned in 8-bit characters as specified in the code page of the Windows locale that is set on the system. Any multi-byte characters or characters that do not map into this code page are substituted with a single byte question mark (&#63;) character. This is the default encoding. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_ENC_CHAR', null);

	/**
	 * Forces <code>sqlsrv_errors()</code> to return both errors and warings when passed as a parameter (the default behavior).
	 */
	define('SQLSRV_ERR_ALL', null);

	/**
	 * Forces <code>sqlsrv_errors()</code> to return errors only (no warnings) when passed as a parameter.
	 */
	define('SQLSRV_ERR_ERRORS', null);

	/**
	 * Forces <code>sqlsrv_errors()</code> to return warnings only (no errors) when passed as a parameter.
	 */
	define('SQLSRV_ERR_WARNINGS', null);

	/**
	 * Forces <code>sqlsrv_fetch_array()</code> to return an associative array when passed as a parameter.
	 */
	define('SQLSRV_FETCH_ASSOC', null);

	/**
	 * Forces <code>sqlsrv_fetch_array()</code> to return an array with both associative and numeric keys when passed as a parameter (the default behavior).
	 */
	define('SQLSRV_FETCH_BOTH', null);

	/**
	 * Forces <code>sqlsrv_fetch_array()</code> to return an array with numeric when passed as a parameter.
	 */
	define('SQLSRV_FETCH_NUMERIC', null);

	/**
	 * Specifies that errors, warnings, and notices will be logged when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SEVERITY_ALL', null);

	/**
	 * Specifies that errors will be logged when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SEVERITY_ERROR', null);

	/**
	 * Specifies that notices will be logged when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SEVERITY_NOTICE', null);

	/**
	 * Specifies that warnings will be logged when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SEVERITY_WARNING', null);

	/**
	 * Turns on logging of all subsystems when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SYSTEM_ALL', null);

	/**
	 * Turns on logging of connection activity when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SYSTEM_CONN', null);

	/**
	 * Turns on logging of initialization activity when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SYSTEM_INIT', null);

	/**
	 * Turns off logging of all subsystems when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SYSTEM_OFF', null);

	/**
	 * Turns on logging of statement activity when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SYSTEM_STMT', null);

	/**
	 * Turns on logging of error function activity when passed to <code>sqlsrv_configure()</code> as a parameter.
	 */
	define('SQLSRV_LOG_SYSTEM_UTIL', null);

	/**
	 * Indicates that a column is not nullable.
	 */
	define('SQLSRV_NULLABLE_NO', null);

	/**
	 * Indicates that it is not known if a column is nullable.
	 */
	define('SQLSRV_NULLABLE_UNKNOWN', null);

	/**
	 * Indicates that a column is nullable.
	 */
	define('SQLSRV_NULLABLE_YES', null);

	/**
	 * Indicates an input parameter when passed to <code>sqlsrv_query()</code> or <code>sqlsrv_prepare()</code>.
	 */
	define('SQLSRV_PARAM_IN', null);

	/**
	 * Indicates a bidirectional parameter when passed to <code>sqlsrv_query()</code> or <code>sqlsrv_prepare()</code>.
	 */
	define('SQLSRV_PARAM_INOUT', null);

	/**
	 * Indicates an output parameter when passed to <code>sqlsrv_query()</code> or <code>sqlsrv_prepare()</code>.
	 */
	define('SQLSRV_PARAM_OUT', null);

	/**
	 * Specifies a datetime PHP data type. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_PHPTYPE_DATETIME', null);

	/**
	 * Specifies a float PHP data type. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_PHPTYPE_FLOAT', null);

	/**
	 * Specifies an integer PHP data type. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_PHPTYPE_INT', null);

	/**
	 * Specifies a PHP stream. This constant works like a function and accepts an encoding constant. See the SQLSRV_ENC_&#42; constants. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_PHPTYPE_STREAM', null);

	/**
	 * Specifies a string PHP data type. This constant works like a function and accepts an encoding constant. See the SQLSRV_ENC_&#42; constants. For usage information, see How to: Specify PHP Types.
	 */
	define('SQLSRV_PHPTYPE_STRING', null);

	/**
	 * Specifies which row to select in a result set. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_SCROLL_ABSOLUTE', null);

	/**
	 * Specifies which row to select in a result set. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_SCROLL_FIRST', null);

	/**
	 * Specifies which row to select in a result set. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_SCROLL_LAST', null);

	/**
	 * Specifies which row to select in a result set. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_SCROLL_NEXT', null);

	/**
	 * Specifies which row to select in a result set. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_SCROLL_PRIOR', null);

	/**
	 * Specifies which row to select in a result set. For usage information, see Specifying a Cursor Type and Selecting Rows.
	 */
	define('SQLSRV_SCROLL_RELATIVE', null);

	/**
	 * Describes the bigint SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_BIGINT', null);

	/**
	 * Describes the binary SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_BINARY', null);

	/**
	 * Describes the bit SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_BIT', null);

	/**
	 * Describes the char SQL Server data type. This constant works like a function and accepts a parameter indicating the number characters. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_CHAR', null);

	/**
	 * Describes the date SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_DATE', null);

	/**
	 * Describes the datetime SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_DATETIME', null);

	/**
	 * Describes the datetime2 SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_DATETIME2', null);

	/**
	 * Describes the datetimeoffset SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_DATETIMEOFFSET', null);

	/**
	 * Describes the decimal SQL Server data type. This constant works like a function and accepts two parameters indicating (in order) precision and scale. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_DECIMAL', null);

	/**
	 * Describes the float SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_FLOAT', null);

	/**
	 * Describes the image SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_IMAGE', null);

	/**
	 * Describes the int SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_INT', null);

	/**
	 * Describes the money SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_MONEY', null);

	/**
	 * Describes the nchar SQL Server data type. This constant works like a function and accepts a single parameter indicating the character count. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_NCHAR', null);

	/**
	 * Describes the ntext SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_NTEXT', null);

	/**
	 * Describes the numeric SQL Server data type. This constant works like a function and accepts two parameter indicating (in order) precision and scale. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_NUMERIC', null);

	/**
	 * Describes the nvarchar(MAX) SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_NVARCHAR', null);

	/**
	 * Describes the real SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_REAL', null);

	/**
	 * Describes the smalldatetime SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_SMALLDATETIME', null);

	/**
	 * Describes the smallint SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_SMALLINT', null);

	/**
	 * Describes the smallmoney SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_SMALLMONEY', null);

	/**
	 * Describes the text SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_TEXT', null);

	/**
	 * Describes the time SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_TIME', null);

	/**
	 * Describes the timestamp SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_TIMESTAMP', null);

	/**
	 * Describes the tinyint SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_TINYINT', null);

	/**
	 * Describes the UDT SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_UDT', null);

	/**
	 * Describes the uniqueidentifier SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_UNIQUEIDENTIFIER', null);

	/**
	 * Describes the varbinary(MAX) SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_VARBINARY', null);

	/**
	 * Describes the varchar(MAX) SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_VARCHAR', null);

	/**
	 * Describes the XML SQL Server data type. For usage information, see How to: Specify SQL Types.
	 */
	define('SQLSRV_SQLTYPE_XML', null);

	/**
	 * Inidicates a transaction isolation level of READ COMMITTED. This value is used to set the TransactionIsolation level in the $connectionOptions arrary passed to <code>sqlsrv_connect()</code>.
	 */
	define('SQLSRV_TXN_READ_COMMITTED', null);

	/**
	 * Inidicates a transaction isolation level of SERIALIZABLE. This value is used to set the TransactionIsolation level in the $connectionOptions arrary passed to <code>sqlsrv_connect()</code>.
	 */
	define('SQLSRV_TXN_READ_SERIALIZABLE', null);

	/**
	 * Inidicates a transaction isolation level of READ UNCOMMITTED. This value is used to set the TransactionIsolation level in the $connectionOptions arrary passed to <code>sqlsrv_connect()</code>.
	 */
	define('SQLSRV_TXN_READ_UNCOMMITTED', null);

	/**
	 * Inidicates a transaction isolation level of REPEATABLE READ. This value is used to set the TransactionIsolation level in the $connectionOptions arrary passed to <code>sqlsrv_connect()</code>.
	 */
	define('SQLSRV_TXN_REPEATABLE_READ', null);

	/**
	 * Inidicates a transaction isolation level of SNAPSHOT. This value is used to set the TransactionIsolation level in the $connectionOptions arrary passed to <code>sqlsrv_connect()</code>.
	 */
	define('SQLSRV_TXN_SNAPSHOT', null);

	/**
	 * Specifies that data is returned with UTF-8 encoding. For usage information, see How to: Specify PHP Types.
	 */
	define('UTF_8', null);

}
