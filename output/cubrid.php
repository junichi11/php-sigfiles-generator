<?php



namespace {

	/**
	 * Bind variables to a prepared statement as parameters
	 * <p>The <b>cubrid_bind()</b> function is used to bind values to a corresponding named or question mark placeholder in the SQL statement that was passed to <code>cubrid_prepare()</code>. If <code>bind_value_type</code> is not given, string will be the default.</p><p><b>Note</b>:</p><p>If the type of data to be bound is BLOB/CLOB, CUBRID will try to map the data as a PHP stream. If the actually bind value type is not stream, CUBRID will convert it to string, and use it as the full path and file name of a file on the client filesystem.</p><p>If the type of data to be bound explicitly is ENUM, the $bind_value argument should be the enum element which is in string format.</p><p>In CUBRID shard envrioment, the $bind_value_type must be included in the cubrid_bind function.</p><p>The following table shows the types of substitute values.</p><p></p>
	 * @param resource $req_identifier <p>Request identifier as a result of <code>cubrid_prepare()</code>.</p>
	 * @param int $bind_index <p>Location of binding parameters. It starts with 1.</p>
	 * @param mixed $bind_value <p>Actual value for binding.</p>
	 * @param string $bind_value_type <p>A type of the value to bind. (It is omitted by default. Thus, the system internally uses string by default. However, you need to specify the exact type of the value as an argument when they are NCHAR, BIT, or BLOB/CLOB).</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-bind.php
	 * @see cubrid_execute(), cubrid_prepare()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_bind($req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type = NULL): bool {}

	/**
	 * Close the request handle
	 * <p>The <b>cubrid_close_prepare()</b> function closes the request handle given by the <code>req_identifier</code> argument, and releases the memory region related to the handle. It is an alias of <code>cubrid_close_request()</code>.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @return bool <p>Return <b><code>TRUE</code></b> on success.</p>
	 * @link https://php.net/manual/en/function.cubrid-close-prepare.php
	 * @see cubrid_close_request()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_close_prepare($req_identifier): bool {}

	/**
	 * Close the request handle
	 * <p>The <b>cubrid_close_request()</b> function closes the request handle given by the <code>req_identifier</code> argument, and releases the memory region related to the handle. It is an alias of <code>cubrid_close_prepare()</code>.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @return bool <p>Return <b><code>TRUE</code></b> on success.</p>
	 * @link https://php.net/manual/en/function.cubrid-close-request.php
	 * @see cubrid_close_prepare()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_close_request($req_identifier): bool {}

	/**
	 * Get contents of collection type column using OID
	 * <p>The <b>cubrid_col_get()</b> function is used to get contents of the elements of the collection type (set, multiset, sequence) attribute you requested as an array.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to read.</p>
	 * @param string $attr_name <p>Attribute name that you want to read from the instance.</p>
	 * @return array <p>Array (0-based numerical array) containing the elements you requested, when process is successful;</p><p><b><code>FALSE</code></b> (to distinguish the error from the situation of attribute having empty collection or NULL, in case of error, a warning message is shown; in such case you can check the error by using <code>cubrid_error_code()</code>), when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-col-get.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_col_get($conn_identifier, string $oid, string $attr_name): array {}

	/**
	 * Get the number of elements in collection type column using OID
	 * <p>The <b>cubrid_col_size()</b> function is used to get the number of elements in a collection type (set, multiset, sequence) attribute.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID the instance that you want to work with.</p>
	 * @param string $attr_name <p>Name of the attribute that you want to work with.</p>
	 * @return int <p>Number of elements, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-col-size.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_col_size($conn_identifier, string $oid, string $attr_name): int {}

	/**
	 * Get the column names in result
	 * <p>The <b>cubrid_column_names()</b> function is used to get the column names of the query result by using <code>req_identifier</code>.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @return array <p>Array of string values containing the column names, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-column-names.php
	 * @see cubrid_prepare(), cubrid_execute(), cubrid_column_types()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_column_names($req_identifier): array {}

	/**
	 * Get column types in result
	 * <p>The <b>cubrid_column_types()</b> function gets column types of query results by using <code>req_identifier</code>.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @return array <p>Array of string values containing the column types, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-column-types.php
	 * @see cubrid_column_names(), cubrid_prepare(), cubrid_execute()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_column_types($req_identifier): array {}

	/**
	 * Commit a transaction
	 * <p>The <b>cubrid_commit()</b> function is used to execute commit on the transaction pointed by <code>conn_identifier</code>, currently in progress. Connection to the server is closed after the <b>cubrid_commit()</b> function is called; However, the connection handle is still valid.</p><p>In CUBRID PHP, auto-commit mode is disabled by default for transaction management. You can set it by using <code>cubrid_set_autocommit()</code>. You can get its status by using <code>cubrid_get_autocommit()</code>. Before you start a transaction, remember to disable the auto-commit mode.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-commit.php
	 * @see cubrid_rollback(), cubrid_get_autocommit(), cubrid_set_autocommit()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_commit($conn_identifier): bool {}

	/**
	 * Open a connection to a CUBRID Server
	 * <p>The <b>cubrid_connect()</b> function is used to establish the environment for connecting to your server by using your server address, port number, database name, user name, and password. If the user name and password is not given, then the "PUBLIC" connection will be made by default.</p>
	 * @param string $host <p>Host name or IP address of CUBRID CAS server.</p>
	 * @param int $port <p>Port number of CUBRID CAS server (BROKER_PORT configured in $CUBRID/conf/cubrid_broker.conf).</p>
	 * @param string $dbname <p>Name of database.</p>
	 * @param string $userid <p>User name for the database. If not given, the default value is "public".</p>
	 * @param string $passwd <p>User password. If not given, the default value is "".</p>
	 * @param bool $new_link <p>If a second call is made to <b>cubrid_connect()</b> with the same arguments, no new connection will be established, but instead, the connection identifier of the already opened connection will be returned. The <code>new_link</code> parameter modifies this behavior and makes <b>cubrid_connect()</b> always open a new connection, even if <b>cubrid_connect()</b> was called before with the same parameters.</p>
	 * @return resource <p>Connection identifier, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-connect.php
	 * @see cubrid_pconnect(), cubrid_connect_with_url(), cubrid_pconnect_with_url(), cubrid_disconnect(), cubrid_close()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_connect(string $host, int $port, string $dbname, string $userid = NULL, string $passwd = NULL, bool $new_link = FALSE) {}

	/**
	 * Establish the environment for connecting to CUBRID server
	 * <p>The <b>cubrid_connect_with_url()</b> function is used to establish the environment for connecting to your server by using connection information passed with an url string argument. If the HA feature is enabled in CUBRID, you must specify the connection information of the standby server, which is used for failover when failure occurs, in the url string argument of this function. If the user name and password is not given, then the "PUBLIC" connection will be made by default.</p><p>&lt;url&gt; ::= CUBRID:&lt;host&gt;:&lt;db_name&gt;:&lt;db_user&gt;:&lt;db_password&gt;:[&#63;&lt;properties&gt;]</p><p>&lt;properties&gt; ::= &lt;property&gt; [&amp;&lt;property&gt;]</p><p>&lt;properties&gt; ::= alhosts=&lt;alternative_hosts&gt;[ &amp;rctime=&lt;time&gt;]</p><p>&lt;properties&gt; ::= login_timeout=&lt;milli_sec&gt;</p><p>&lt;properties&gt; ::= query_timeout=&lt;milli_sec&gt;</p><p>&lt;properties&gt; ::= disconnect_on_query_timeout=true|false</p><p>&lt;alternative_hosts&gt; ::= &lt;standby_broker1_host&gt;:&lt;port&gt; [,&lt;standby_broker2_host&gt;:&lt;port&gt;]</p><p>&lt;host&gt; := HOSTNAME | IP_ADDR</p><p>&lt;time&gt; := SECOND</p><p>&lt;milli_sec&gt; := MILLI SECOND</p><p></p><p><b>Note</b>:</p><p><code>&#63;</code> and <code>:</code> that are used as identifiers in PHP connection URL can't be included in the password. The following is an example of a password that is invalid to use as connection URL because it contains "<code>&#63;:</code>".</p><p>$url = "CUBRID:localhost:33000:tdb:dba:12&#63;:&#63;login_timeout=100";</p><p>Passwords that contain <code>&#63;</code> or <code>:</code> may be passed as a separate parameter.</p><p>$url = "CUBRID:localhost:33000:tbd:::&#63;login_timeout=100";</p><p>$conn = cubrid_connect_with_url($url, "dba", "12&#63;");</p><p>If user or password is empty,you can't delete "<code>:</code>",the following is an example.</p><p>$url = "CUBRID:localhost:33000:demodb:::";</p>
	 * @param string $conn_url <p>A character string that contains server connection information.</p>
	 * @param string $userid <p>User name for the database.</p>
	 * @param string $passwd <p>User password.</p>
	 * @param bool $new_link <p>If a second call is made to <b>cubrid_connect_with_url()</b> with the same arguments, no new connection will be established, but instead, the connection identifier of the already opened connection will be returned. The <code>new_link</code> parameter modifies this behavior and makes <b>cubrid_connect_with_url()</b> always open a new connection, even if <b>cubrid_connect_with_url()</b> was called before with the same parameters.</p>
	 * @return resource <p>Connection identifier, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-connect-with-url.php
	 * @see cubrid_connect(), cubrid_pconnect(), cubrid_pconnect_with_url(), cubrid_disconnect(), cubrid_close()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_connect_with_url(string $conn_url, string $userid = NULL, string $passwd = NULL, bool $new_link = FALSE) {}

	/**
	 * Get OID of the current cursor location
	 * <p>The <b>cubrid_current_oid()</b> function is used to get the oid of the current cursor location from the query result. To use <b>cubrid_current_oid()</b>, the query executed must be a updatable query, and the CUBRID_INCLUDE_OID option must be included during the query execution.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @return string <p>Oid of current cursor location, when process is successful</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-current-oid.php
	 * @see cubrid_execute()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_current_oid($req_identifier): string {}

	/**
	 * Close a database connection
	 * <p>The <b>cubrid_disconnect()</b> function closes the connection handle and disconnects from server. If any request handle is not closed at this point, it will be closed. It is similar to the CUBRID MySQL compatible function <code>cubrid_close()</code>.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-disconnect.php
	 * @see cubrid_close(), cubrid_connect(), cubrid_connect_with_url()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_disconnect($conn_identifier = NULL): bool {}

	/**
	 * Delete an instance using OID
	 * <p>The <b>cubrid_drop()</b> function is used to delete an instance from database by using the <code>oid</code> of the instance.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>Oid of the instance that you want to delete.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-drop.php
	 * @see cubrid_is_instance()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_drop($conn_identifier, string $oid): bool {}

	/**
	 * Get error code for the most recent function call
	 * <p>The <b>cubrid_error_code()</b> function is used to get the error code of the error that occurred during the API execution. Usually, it gets the error code when API returns false as its return value.</p>
	 * @return int <p>Error code of the error that occurred, or <code>0</code> (zero) if no error occurred.</p>
	 * @link https://php.net/manual/en/function.cubrid-error-code.php
	 * @see cubrid_error_code_facility(), cubrid_error_msg()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_error_code(): int {}

	/**
	 * Get the facility code of error
	 * <p>The <b>cubrid_error_code_facility()</b> function is used to get the facility code (level in which the error occurred) from the error code of the error that occurred during the API execution. Usually, you can get the error code when API returns false as its return value.</p>
	 * @return int <p>Facility code of the error code that occurred: CUBRID_FACILITY_DBMS, CUBRID_FACILITY_CAS, CUBRID_FACILITY_CCI, CUBRID_FACILITY_CLIENT</p>
	 * @link https://php.net/manual/en/function.cubrid-error-code-facility.php
	 * @see cubrid_error_code(), cubrid_error_msg()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_error_code_facility(): int {}

	/**
	 * Get last error message for the most recent function call
	 * <p>The <b>cubrid_error_msg()</b> function is used to get the error message that occurred during the use of CUBRID API. Usually, it gets error message when API returns false as its return value.</p>
	 * @return string <p>Error message that occurred.</p>
	 * @link https://php.net/manual/en/function.cubrid-error-msg.php
	 * @see cubrid_error_code(), cubrid_error_code_facility()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_error_msg(): string {}

	/**
	 * Execute a prepared SQL statement
	 * <p>The <b>cubrid_execute()</b> function is used to execute the given SQL statement. It executes the query by using <code>conn_identifier</code> and SQL, and then returns the request identifier created. It is used for simple execution of query, where the parameter binding is not needed. In addition, the <b>cubrid_execute()</b> function is used to execute the prepared statement by means of <code>cubrid_prepare()</code> and <code>cubrid_bind()</code>. At this time, you need to specify arguments of <code>request_identifier</code> and <code>option</code>.</p><p>The <code>option</code> is used to determine whether to get OID after query execution and whether to execute the query in synchronous or asynchronous mode. CUBRID_INCLUDE_OID and CUBRID_ASYNC (or CUBRID_EXEC_QUERY_ALL if you want to execute multiple SQL statements) can be specified by using a bitwise OR operator. If not specified, neither of them isselected. If the flag CUBRID_EXEC_QUERY_ALL is set, a synchronous mode (sync_mode) is used to retrieve query results, and in such cases the following rules are applied:</p><p></p><p>If the first argument is <code>request_identifier</code> to execute the <code>cubrid_prepare()</code> function, you can specify an option, CUBRID_ASYNC only.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $sql <p>SQL to be executed.</p>
	 * @param int $option <p>Query execution option CUBRID_INCLUDE_OID, CUBRID_ASYNC, CUBRID_EXEC_QUERY_ALL.</p>
	 * @return resource <p>Request identifier, when process is successful and first param is conn_identifier; <b><code>TRUE</code></b>, when process is successful and first argument is request_identifier.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-execute.php
	 * @see cubrid_prepare(), cubrid_bind(), cubrid_next_result(), cubrid_close_request(), cubrid_commit(), cubrid_rollback()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_execute($conn_identifier, string $sql, int $option = 0) {}

	/**
	 * Fetch the next row from a result set
	 * <p>The <b>cubrid_fetch()</b> function is used to get a single row from the query result. The cursor automatically moves to the next row after getting the result.</p>
	 * @param resource $result <p><code>result</code> comes from a call to <code>cubrid_execute()</code></p>
	 * @param int $type <p>Array type of the fetched result CUBRID_NUM, CUBRID_ASSOC, CUBRID_BOTH, CUBRID_OBJECT. If you want to operate the lob object, you can use CUBRID_LOB.</p>
	 * @return mixed <p>Result array or object, when process is successful.</p><p><b><code>FALSE</code></b>, when there are no more rows; NULL, when process is unsuccessful.</p><p>The result can be received either as an array or as an object, and you can decide which data type to use by setting the <code>type</code> argument. The <code>type</code> variable can be set to one of the following values:</p><ul> <li>CUBRID_NUM : Numerical array (0-based)</li> <li>CUBRID_ASSOC : Associative array</li> <li>CUBRID_BOTH : Numerical &amp; Associative array (default)</li> <li>CUBRID_OBJECT : object that has the attribute name as the column name of query result</li> </ul><p>When <code>type</code> argument is omitted, the result will be received using CUBRID_BOTH option as default. When you want to receive query result in object data type, the column name of the result must obey the naming rules for identifiers in PHP. For example, column name such as "count(&#42;)" cannot be received in object type.</p>
	 * @link https://php.net/manual/en/function.cubrid-fetch.php
	 * @see cubrid_execute(), cubrid_fetch_array(), cubrid_fetch_row(), cubrid_fetch_assoc(), cubrid_fetch_object()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_fetch($result, int $type = CUBRID_BOTH): mixed {}

	/**
	 * Free the memory occupied by the result data
	 * <p>This function frees the memory occupied by the result data. It returns TRUE on success or FALSE on failure. Note that it can only frees the client fetch buffer now, and if you want free all memory, use function <code>cubrid_close_request()</code>.</p>
	 * @param resource $req_identifier <p>This is the request identifier.</p>
	 * @return bool <p><b><code>TRUE</code></b> on success.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-free-result.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_free_result($req_identifier): bool {}

	/**
	 * Get a column using OID
	 * <p>The <b>cubrid_get()</b> function is used to get the attribute of the instance of the given <code>oid</code>. You can get single attribute by using string data type for the <code>attr</code> argument, or many attributes by using array data type for the <code>attr</code> argument.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to read.</p>
	 * @param mixed $attr <p>Name of the attribute that you want to read.</p>
	 * @return mixed <p>Content of the requested attribute, when process is successful; When <code>attr</code> is set with string data type, the result is returned as a string; when <code>attr</code> is set with array data type (0-based numerical array), then the result is returned in associative array. When <code>attr</code> is omitted, then all attributes are received in array form.</p><p><b><code>FALSE</code></b> when process is unsuccessful or result is NULL (If error occurs to distinguish empty string from NULL, then it prints the warning message. You can check the error by using <code>cubrid_error_code()</code>)</p>
	 * @link https://php.net/manual/en/function.cubrid-get.php
	 * @see cubrid_put()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_get($conn_identifier, string $oid, mixed $attr = NULL): mixed {}

	/**
	 * Get auto-commit mode of the connection
	 * <p>The <b>cubrid_get_autocommit()</b> function is used to get the status of CUBRID database connection auto-commit mode.</p><p>For CUBRID 8.4.0, auto-commit mode is disabled by default for transaction management.</p><p>For CUBRID 8.4.1, auto-commit mode is enabled by default for transaction management.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when auto-commit is on.</p><p><b><code>FALSE</code></b>, when auto-commit is off.</p><p><b><code>NULL</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.cubrid-get-autocommit.php
	 * @see cubrid_set_autocommit(), cubrid_commit()
	 * @since PECL CUBRID >= 8.4.0
	 */
	function cubrid_get_autocommit($conn_identifier): bool {}

	/**
	 * Return the current CUBRID connection charset
	 * <p>This function returns the current CUBRID connection charset and is similar to the CUBRID MySQL compatible function <code>cubrid_client_encoding()</code>.</p>
	 * @param resource $conn_identifier <p>The CUBRID connection.</p>
	 * @return string <p>A string that represents the CUBRID connection charset; on success.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-get-charset.php
	 * @see cubrid_client_encoding()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_get_charset($conn_identifier): string {}

	/**
	 * Get the class name using OID
	 * <p>The <b>cubrid_get_class_name()</b> function is used to get the class name from <code>oid</code>. It doesn't work when selecting data from the system tables, for example db_class.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to check the existence.</p>
	 * @return string <p>Class name when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-get-class-name.php
	 * @see cubrid_is_instance(), cubrid_drop()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_get_class_name($conn_identifier, string $oid): string {}

	/**
	 * Return the client library version
	 * <p>This function returns a string that represents the client library version.</p>
	 * @return string <p>A string that represents the client library version; on success.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-get-client-info.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_get_client_info(): string {}

	/**
	 * Returns the CUBRID database parameters
	 * <p>This function returns the CUBRID database parameters or it returns FALSE on failure. It returns an associative array with the values for the following parameters:</p><p></p><p></p><p>The following table shows the isolation levels from 1 to 6. It consists of table schema (row) and isolation level:</p>
	 * @param resource $conn_identifier <p>The CUBRID connection. If the connection identifier is not specified, the last link opened by <code>cubrid_connect()</code> is assumed.</p>
	 * @return array <p>An associative array with CUBRID database parameters; on success.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-get-db-parameter.php
	 * @see cubrid_set_db_parameter(), cubrid_get_autocommit()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_get_db_parameter($conn_identifier): array {}

	/**
	 * Get the query timeout value of the request
	 * <p>The <b>cubrid_get_query_timeout()</b> function is used to get the query timeout of the request.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @return int <p>Success: the query timeout value of the current request. Units of msec.</p><p>Failure: FALSE</p>
	 * @link https://php.net/manual/en/function.cubrid-get-query-timeout.php
	 * @see cubrid_set_query_timeout()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_get_query_timeout($req_identifier): int {}

	/**
	 * Return the CUBRID server version
	 * <p>This function returns a string that represents the CUBRID server version.</p>
	 * @param resource $conn_identifier <p>The CUBRID connection.</p>
	 * @return string <p>A string that represents the CUBRID server version; on success.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-get-server-info.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_get_server_info($conn_identifier): string {}

	/**
	 * Return the ID generated for the last updated AUTO_INCREMENT column
	 * <p>The <b>cubrid_insert_id()</b> function retrieves the ID generated for the AUTO_INCREMENT column which is updated by the previous INSERT query. It returns 0 if the previous query does not generate new rows, or FALSE on failure.</p><p><b>Note</b>:</p><p>CUBRID supports AUTO_INCREMENT for more than one columns in a table. In most cases, there will be a single AUTO_INCREMENT column in a table. If there are multiple AUTO_INCREMENT columns, this function should not be used even if it will return a value.</p>
	 * @param resource $conn_identifier <p>The connection identifier previously obtained by a call to <code>cubrid_connect()</code>.</p>
	 * @return string <p>A string representing the ID generated for an AUTO_INCREMENT column by the previous query, on success.</p><p>0, if the previous query does not generate new rows.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-insert-id.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_insert_id($conn_identifier = NULL): string {}

	/**
	 * Check whether the instance pointed by OID exists
	 * <p>The <b>cubrid_is_instance()</b> function is used to check whether the instance pointed by the given <code>oid</code> exists or not.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to check the existence.</p>
	 * @return int <p>1, if such instance exists;</p><p>0, if such instance does not exist;</p><p>-1, in case of error</p>
	 * @link https://php.net/manual/en/function.cubrid-is-instance.php
	 * @see cubrid_drop(), cubrid_get_class_name()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_is_instance($conn_identifier, string $oid): int {}

	/**
	 * Bind a lob object or a string as a lob object to a prepared statement as parameters
	 * <p>The <b>cubrid_lob2_bind()</b> function is used to bind BLOB/CLOB datas to a corresponding question mark placeholder in the SQL statement that was passed to <code>cubrid_prepare()</code>. If <code>bind_value_type</code> is not given, string will be "BLOB" as the default. But if you use <code>cubrid_lob2_new()</code> before, <code>bind_value_type</code> will be consistent with <code>type</code> in <code>cubrid_lob2_new()</code> as the default.</p>
	 * @param resource $req_identifier <p>Request identifier as a result of <code>cubrid_prepare()</code>.</p>
	 * @param int $bind_index <p>Location of binding parameters. It starts with 1.</p>
	 * @param mixed $bind_value <p>Actual value for binding.</p>
	 * @param string $bind_value_type <p>It must be "BLOB" or "CLOB" and it won't be case-sensitive. If it not be given, the default value is "BLOB".</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-bind.php
	 * @see cubrid_lob2_new(), cubrid_lob2_close()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_bind($req_identifier, int $bind_index, mixed $bind_value, string $bind_value_type = NULL): bool {}

	/**
	 * Close LOB object
	 * <p>The <b>cubrid_lob2_close()</b> function is used to close LOB object returned from <code>cubrid_lob2_new()</code> or got from the result set.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @return bool <p><b><code>TRUE</code></b>, on success.</p><p><b><code>FALSE</code></b>, on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-close.php
	 * @see cubrid_lob2_new()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_close($lob_identifier): bool {}

	/**
	 * Export the lob object to a file
	 * <p>The <b>cubrid_lob2_export()</b> function is used to save the contents of BLOB/CLOB data to a file. To use this function, you must use <code>cubrid_lob2_new()</code> or fetch a lob object from CUBRID database first. If the file already exists, the operation will fail. This function will not influence the cursor position of the lob object. It operates the entire lob object.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @param string $file_name
	 * @return bool <p><b><code>TRUE</code></b> if the process is successful and <b><code>FALSE</code></b> for failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-export.php
	 * @see cubrid_lob2_new(), cubrid_lob2_close(), cubrid_lob2_import(), cubrid_lob2_bind()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_export($lob_identifier, string $file_name): bool {}

	/**
	 * Import BLOB/CLOB data from a file
	 * <p>The <b>cubrid_lob2_import()</b> function is used to save the contents of BLOB/CLOB data from a file. To use this function, you must use <code>cubrid_lob2_new()</code> or fetch a lob object from CUBRID database first. If the file already exists, the operation will fail. This function will not influence the cursor position of the lob object. It operates the entire lob object.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @param string $file_name
	 * @return bool <p><b><code>TRUE</code></b> if the process is successful and <b><code>FALSE</code></b> for failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-import.php
	 * @see cubrid_lob2_new(), cubrid_lob2_close(), cubrid_lob2_export(), cubrid_lob2_bind()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_import($lob_identifier, string $file_name): bool {}

	/**
	 * Create a lob object
	 * <p>The <b>cubrid_lob2_new()</b> function is used to create a lob object (both BLOB and CLOB). This function should be used before you bind a lob object.</p>
	 * @param resource $conn_identifier <p>Connection identifier. If the connection identifier is not specified, the last connection opened by <code>cubrid_connect()</code> or <code>cubrid_connect_with_url()</code> is assumed.</p>
	 * @param string $type <p>It may be "BLOB" or "CLOB", it won't be case-sensitive. The default value is "BLOB".</p>
	 * @return resource <p>Lob identifier when it is successful.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-new.php
	 * @see cubrid_lob2_close()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_new($conn_identifier = NULL, string $type = "BLOB") {}

	/**
	 * Read from BLOB/CLOB data
	 * <p>The <b>cubrid_lob2_read()</b> function reads <code>len</code> bytes from the LOB data and returns the bytes read.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @param int $len <p>Length from buffer you want to read from the lob data.</p>
	 * @return string <p>Returns the contents as a string.</p><p><b><code>FALSE</code></b> when there is no more data.</p><p>NULL on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-read.php
	 * @see cubrid_lob2_write(), cubrid_lob2_seek(), cubrid_lob2_seek64(), cubrid_lob2_tell(), cubrid_lob2_tell64(), cubrid_lob2_size(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_read($lob_identifier, int $len): string {}

	/**
	 * Move the cursor of a lob object
	 * <p>The <b>cubrid_lob2_seek()</b> function is used to move the cursor position of a lob object by the value set in the <code>offset</code> argument, to the direction set in the <code>origin</code> argument.</p><p>To set the <code>origin</code> argument, you can use CUBRID_CURSOR_FIRST to set the cursor position moving forward <code>offset</code> units from the first beginning. In this case, <code>offset</code> must be a positive value.</p><p>If you use CUBRID_CURSOR_CURRENT for <code>origin</code>, you can move forward or backward. and <code>offset</code> can be positive or negative.</p><p>If you use CUBRID_CURSOR_LAST for <code>origin</code>, you can move backward <code>offset</code> units from the end of LOB object and <code>offset</code> only can be positive.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @param int $offset <p>Number of units you want to move the cursor.</p>
	 * @param int $origin <p>This parameter can be the following values:</p> <p>CUBRID_CURSOR_FIRST: move forward from the first beginning.</p> <p>CUBRID_CURSOR_CURRENT: move forward or backward from the current position.</p> <p>CUBRID_CURSOR_LAST: move backward at the end of LOB object.</p>
	 * @return bool <p><b><code>TRUE</code></b> if the process is successful and <b><code>FALSE</code></b> for failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-seek.php
	 * @see cubrid_lob2_read(), cubrid_lob2_write(), cubrid_lob2_seek64(), cubrid_lob2_tell(), cubrid_lob2_tell64(), cubrid_lob2_size(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_seek($lob_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT): bool {}

	/**
	 * Move the cursor of a lob object
	 * <p>The <b>cubrid_lob2_seek64()</b> function is used to move the cursor position of a lob object by the value set in the <code>offset</code> argument, to the direction set in the <code>origin</code> argument. If the <code>offset</code> you want to move is larger than an integer data can be stored, you can use this function.</p><p>To set the <code>origin</code> argument, you can use CUBRID_CURSOR_FIRST to set the cursor position moving forward <code>offset</code> units from the first beginning. In this case, <code>offset</code> must be a positive value.</p><p>If you use CUBRID_CURSOR_CURRENT for <code>origin</code>, you can move forward or backward. and <code>offset</code> can be positive or negative.</p><p>If you use CUBRID_CURSOR_LAST for <code>origin</code>, you can move backward <code>offset</code> units from the end of LOB object and <code>offset</code> only can be positive.</p><p><b>Note</b>:</p><p>If you use this function to move the cursor position of the lob object, you should pass <code>offset</code> as a string.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @param string $offset <p>Number of units you want to move the cursor.</p>
	 * @param int $origin <p>This parameter can be the following values:</p> <p>CUBRID_CURSOR_FIRST: move forward from the first beginning.</p> <p>CUBRID_CURSOR_CURRENT: move forward or backward from the current position.</p> <p>CUBRID_CURSOR_LAST: move backward at the end of LOB object.</p>
	 * @return bool <p><b><code>TRUE</code></b> if the process is successful and <b><code>FALSE</code></b> for failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-seek64.php
	 * @see cubrid_lob2_read(), cubrid_lob2_write(), cubrid_lob2_seek(), cubrid_lob2_tell(), cubrid_lob2_tell64(), cubrid_lob2_size(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_seek64($lob_identifier, string $offset, int $origin = CUBRID_CURSOR_CURRENT): bool {}

	/**
	 * Get a lob object's size
	 * <p>The <b>cubrid_lob2_size()</b> function is used to get the size of a lob object.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @return int <p>It will return the size of the LOB object when it processes successfully.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-size.php
	 * @see cubrid_lob2_read(), cubrid_lob2_write(), cubrid_lob2_seek(), cubrid_lob2_seek64(), cubrid_lob2_tell(), cubrid_lob2_tell64(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_size($lob_identifier): int {}

	/**
	 * Get a lob object's size
	 * <p>The <b>cubrid_lob2_size64()</b> function is used to get the size of a lob object. If the size of a lob object is larger than an integer data can be stored, you can use this function and it will return the size as a string.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @return string <p>It will return the size of the LOB object as a string when it processes successfully.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-size64.php
	 * @see cubrid_lob2_read(), cubrid_lob2_write(), cubrid_lob2_seek(), cubrid_lob2_seek64(), cubrid_lob2_tell(), cubrid_lob2_tell64(), cubrid_lob2_size()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_size64($lob_identifier): string {}

	/**
	 * Tell the cursor position of the LOB object
	 * <p>The <b>cubrid_lob2_tell()</b> function is used to tell the cursor position of the LOB object.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @return int <p>It will return the cursor position on the LOB object when it processes successfully.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-tell.php
	 * @see cubrid_lob2_read(), cubrid_lob2_write(), cubrid_lob2_seek(), cubrid_lob2_seek64(), cubrid_lob2_tell64(), cubrid_lob2_size(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_tell($lob_identifier): int {}

	/**
	 * Tell the cursor position of the LOB object
	 * <p>The <b>cubrid_lob2_tell64()</b> function is used to tell the cursor position of the LOB object. If the size of a lob object is larger than an integer data can be stored, you can use this function and it will return the position information as a string.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @return string <p>It will return the cursor position on the LOB object as a string when it processes successfully.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-tell64.php
	 * @see cubrid_lob2_read(), cubrid_lob2_write(), cubrid_lob2_seek(), cubrid_lob2_seek64(), cubrid_lob2_tell(), cubrid_lob2_size(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_tell64($lob_identifier): string {}

	/**
	 * Write to a lob object
	 * <p>The <b>cubrid_lob2_write()</b> function reads as much as data from <code>buf</code> and stores it to the LOB object. Note that this function can only append characters now.</p>
	 * @param resource $lob_identifier <p>Lob identifier as a result of <code>cubrid_lob2_new()</code> or get from the result set.</p>
	 * @param string $buf <p>Data that need to be written to the lob object.</p>
	 * @return bool <p><b><code>TRUE</code></b> if the process is successful and <b><code>FALSE</code></b> for failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob2-write.php
	 * @see cubrid_lob2_read(), cubrid_lob2_seek(), cubrid_lob2_seek64(), cubrid_lob2_tell(), cubrid_lob2_tell64(), cubrid_lob2_size(), cubrid_lob2_size64()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_lob2_write($lob_identifier, string $buf): bool {}

	/**
	 * Close BLOB/CLOB data
	 * <p><b>cubrid_lob_close()</b> is used to close all BLOB/CLOB returned from <code>cubrid_lob_get()</code>.</p>
	 * @param array $lob_identifier_array <p>LOB identifier array return from cubrid_lob_get.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob-close.php
	 * @see cubrid_lob_get(), cubrid_lob_size(), cubrid_lob_export(), cubrid_lob_send()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_lob_close(array $lob_identifier_array): bool {}

	/**
	 * Export BLOB/CLOB data to file
	 * <p><b>cubrid_lob_export()</b> is used to get BLOB/CLOB data from CUBRID database, and saves its contents to a file. To use this function, you must use <code>cubrid_lob_get()</code> first to get BLOB/CLOB info from CUBRID.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param resource $lob_identifier <p>LOB identifier.</p>
	 * @param string $path_name <p>Path name of the file.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob-export.php
	 * @see cubrid_lob_get(), cubrid_lob_close(), cubrid_lob_size(), cubrid_lob_send()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_lob_export($conn_identifier, $lob_identifier, string $path_name): bool {}

	/**
	 * Get BLOB/CLOB data
	 * <p><b>cubrid_lob_get()</b> is used to get BLOB/CLOB meta info from CUBRID database, CUBRID gets BLOB/CLOB by executing the SQL statement, and returns all LOBs as a resource array. Be sure that the SQL retrieves only one column and its data type is BLOB or CLOB.</p><p>Remember to use <code>cubrid_lob_close()</code> to release the LOBs if you don't need it any more.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $sql <p>SQL statement to be executed.</p>
	 * @return array <p>Return an array of LOB resources, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob-get.php
	 * @see cubrid_lob_close(), cubrid_lob_size(), cubrid_lob_export(), cubrid_lob_send()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_lob_get($conn_identifier, string $sql): array {}

	/**
	 * Read BLOB/CLOB data and send straight to browser
	 * <p><b>cubrid_lob_send()</b> reads BLOB/CLOB data and passes it straight through to the browser. To use this function, you must use <code>cubrid_lob_get()</code> first to get BLOB/CLOB info from CUBRID.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param resource $lob_identifier <p>LOB identifier.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob-send.php
	 * @see cubrid_lob_get(), cubrid_lob_close(), cubrid_lob_size(), cubrid_lob_export()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_lob_send($conn_identifier, $lob_identifier): bool {}

	/**
	 * Get BLOB/CLOB data size
	 * <p><b>cubrid_lob_size()</b> is used to get BLOB/CLOB data size.</p>
	 * @param resource $lob_identifier <p>LOB identifier.</p>
	 * @return string <p>A string representing LOB data size, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lob-size.php
	 * @see cubrid_lob_get(), cubrid_lob_close(), cubrid_lob_export(), cubrid_lob_send()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_lob_size($lob_identifier): string {}

	/**
	 * Set a read lock on the given OID
	 * <p>The <b>cubrid_lock_read()</b> function is used to put read lock on the instance pointed by given <code>oid</code>.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to put read lock on.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lock-read.php
	 * @see cubrid_lock_write()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_lock_read($conn_identifier, string $oid): bool {}

	/**
	 * Set a write lock on the given OID
	 * <p>The <b>cubrid_lock_write()</b> function is used to put write lock on the instance pointed by the given <code>oid</code>.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to put write lock on.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-lock-write.php
	 * @see cubrid_lock_read()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_lock_write($conn_identifier, string $oid): bool {}

	/**
	 * Move the cursor in the result
	 * <p>The <b>cubrid_move_cursor()</b> function is used to move the current cursor location of <code>req_identifier</code> by the value set in the <code>offset</code> argument, to the direction set in the <code>origin</code> argument. To set the <code>origin</code> argument, you can use CUBRID_CURSOR_FIRST for the first part of the result, CUBRID_CURSOR_CURRENT for the current location of the result, or CUBRID_CURSOR_LAST for the last part of the result. If <code>origin</code> argument is not explicitly designated, then the function uses CUBRID_CURSOR_CURRENT as its default value.</p><p>If the value of cursor movement range goes over the valid limit, then the cursor moves to the next location after the valid range for the cursor. For example, if you move 20 units in the result with the size of 10, then the cursor will move to 11th place and return CUBRID_NO_MORE_DATA.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @param int $offset <p>Number of units you want to move the cursor.</p>
	 * @param int $origin <p>Location where you want to move the cursor from CUBRID_CURSOR_FIRST, CUBRID_CURSOR_CURRENT, CUBRID_CURSOR_LAST.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsucceful.</p>
	 * @link https://php.net/manual/en/function.cubrid-move-cursor.php
	 * @see cubrid_execute()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_move_cursor($req_identifier, int $offset, int $origin = CUBRID_CURSOR_CURRENT): bool {}

	/**
	 * Get result of next query when executing multiple SQL statements
	 * <p>The <b>cubrid_next_result()</b> function is used to get results of next query if multiple SQL statements are executed and CUBRID_EXEC_QUERY_ALL flag is set upon <code>cubrid_execute()</code>.</p>
	 * @param resource $result <p><code>result</code> comes from a call to <code>cubrid_execute()</code></p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-next-result.php
	 * @see cubrid_execute()
	 * @since PECL CUBRID >= 8.4.0
	 */
	function cubrid_next_result($result): bool {}

	/**
	 * Return the number of columns in the result set
	 * <p>The <b>cubrid_num_cols()</b> function is used to get the number of columns from the query result. It can only be used when the query executed is a select statement.</p>
	 * @param resource $result <p>Result.</p>
	 * @return int <p>Number of columns, when process is successful.</p><p><b><code>FALSE</code></b>, if SQL statement is not SELECT.</p>
	 * @link https://php.net/manual/en/function.cubrid-num-cols.php
	 * @see cubrid_execute(), cubrid_num_rows()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_num_cols($result): int {}

	/**
	 * Get the number of rows in the result set
	 * <p>The <b>cubrid_num_rows()</b> function is used to get the number of rows from the query result. You can use it only when the query executed is a select statement. When you want to know such value for INSERT, UPDATE, or DELETE query, you have to use the <code>cubrid_affected_rows()</code> function.</p><p>Note: The <b>cubrid_num_rows()</b> function can only be used for synchronous query; it returns 0 when it is used for asynchronous query.</p>
	 * @param resource $result <p><code>result</code> comes from a call to <code>cubrid_execute()</code>, <code>cubrid_query()</code> and <code>cubrid_prepare()</code></p>
	 * @return int <p>Number of rows, when process is successful.</p><p>0 when the query was done in async mode.</p><p>-1, if SQL statement is not SELECT.</p><p><b><code>FALSE</code></b> when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-num-rows.php
	 * @see cubrid_execute(), cubrid_num_cols(), cubrid_affected_rows()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_num_rows($result): int {}

	/**
	 * Open a persistent connection to a CUBRID server
	 * <p>Establishes a persistent connection to a CUBRID server.</p><p><b>cubrid_pconnect()</b> acts very much like <code>cubrid_connect()</code> with two major differences.</p><p>First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, port, dbname and userid. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>cubrid_close()</code> or <code>cubrid_disconnect()</code> will not close links established by <b>cubrid_pconnect()</b>).</p><p>This type of link is therefore called 'persistent'.</p>
	 * @param string $host <p>Host name or IP address of CUBRID CAS server.</p>
	 * @param int $port <p>Port number of CUBRID CAS server (BROKER_PORT configured in $CUBRID/conf/cubrid_broker.conf).</p>
	 * @param string $dbname <p>Name of database.</p>
	 * @param string $userid <p>User name for the database.</p>
	 * @param string $passwd <p>User password.</p>
	 * @return resource <p>Connection identifier, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-pconnect.php
	 * @see cubrid_connect(), cubrid_connect_with_url(), cubrid_pconnect_with_url(), cubrid_disconnect(), cubrid_close()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_pconnect(string $host, int $port, string $dbname, string $userid = NULL, string $passwd = NULL) {}

	/**
	 * Open a persistent connection to CUBRID server
	 * <p>Establishes a persistent connection to a CUBRID server.</p><p><b>cubrid_pconnect_with_url()</b> acts very much like <code>cubrid_connect_with_url()</code> with two major differences.</p><p>First, when connecting, the function would first try to find a (persistent) link that's already open with the same host, port, dbname and userid. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the SQL server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>cubrid_close()</code> or <code>cubrid_disconnect()</code> will not close links established by <b>cubrid_pconnect_with_url()</b>).</p><p>This type of link is therefore called 'persistent'.</p><p>&lt;url&gt; ::= CUBRID:&lt;host&gt;:&lt;db_name&gt;:&lt;db_user&gt;:&lt;db_password&gt;:[&#63;&lt;properties&gt;]</p><p>&lt;properties&gt; ::= &lt;property&gt; [&amp;&lt;property&gt;]</p><p>&lt;properties&gt; ::= alhosts=&lt;alternative_hosts&gt;[ &amp;rctime=&lt;time&gt;]</p><p>&lt;properties&gt; ::= login_timeout=&lt;milli_sec&gt;</p><p>&lt;properties&gt; ::= query_timeout=&lt;milli_sec&gt;</p><p>&lt;properties&gt; ::= disconnect_on_query_timeout=true|false</p><p>&lt;alternative_hosts&gt; ::= &lt;standby_broker1_host&gt;:&lt;port&gt; [,&lt;standby_broker2_host&gt;:&lt;port&gt;]</p><p>&lt;host&gt; := HOSTNAME | IP_ADDR</p><p>&lt;time&gt; := SECOND</p><p>&lt;milli_sec&gt; := MILLI SECOND</p><p></p><p><b>Note</b>:</p><p><code>&#63;</code> and <code>:</code> that are used as identifiers in PHP connection URL can't be included in the password. The following is an example of a password that is invalid to use as connection URL because it contains "<code>&#63;:</code>".</p><p>$url = "CUBRID:localhost:33000:tdb:dba:12&#63;:&#63;login_timeout=100";</p><p>Passwords that contain <code>&#63;</code> or <code>:</code> may be passed as a separate parameter.</p><p>$url = "CUBRID:localhost:33000:tbd:::&#63;login_timeout=100";</p><p>$conn = cubrid_pconnect_with_url ($url, "dba", "12&#63;");</p><p>If user or password is empty,you can't delete "<code>:</code>",the following is an example.</p><p>$url = "CUBRID:localhost:33000:demodb:::";</p>
	 * @param string $conn_url <p>A character string that contains server connection information.</p>
	 * @param string $userid <p>User name for the database.</p>
	 * @param string $passwd <p>User password.</p>
	 * @return resource <p>Connection identifier, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-pconnect-with-url.php
	 * @see cubrid_connect(), cubrid_connect_with_url(), cubrid_pconnect(), cubrid_disconnect(), cubrid_close()
	 * @since PECL CUBRID >= 8.3.1
	 */
	function cubrid_pconnect_with_url(string $conn_url, string $userid = NULL, string $passwd = NULL) {}

	/**
	 * Prepare a SQL statement for execution
	 * <p>The <b>cubrid_prepare()</b> function is a sort of API which represents SQL statements compiled previously to a given connection handle. This pre-compiled SQL statement will be included in the <b>cubrid_prepare()</b>.</p><p>Accordingly, you can use this statement effectively to execute several times repeatedly or to process long data. Only a single statement can be used and a parameter may put a question mark (&#63;) to appropriate area in the SQL statement. Add a parameter when you bind a value in the VALUES clause of INSERT statement or in the WHERE clause. Note that it is allowed to bind a value to a MARK(&#63;) by using the <code>cubrid_bind()</code> function only.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $prepare_stmt <p>Prepare query.</p>
	 * @param int $option <p>OID return option CUBRID_INCLUDE_OID.</p>
	 * @return resource <p>Request identifier, if process is successful;</p><p><b><code>FALSE</code></b>, if process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-prepare.php
	 * @see cubrid_execute(), cubrid_bind()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_prepare($conn_identifier, string $prepare_stmt, int $option = 0) {}

	/**
	 * Update a column using OID
	 * <p>The <b>cubrid_put()</b> function is used to update an attribute of the instance of the given <code>oid</code>.</p><p>You can update single attribute by using string data type to set <code>attr</code>. In such case, you can use integer, floating point or string type data for the <code>value</code> argument. To update multiple number of attributes, you can disregard the <code>attr</code> argument, and set <code>value</code> argument with associative array data type.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance that you want to update.</p>
	 * @param string $attr <p>Name of the attribute that you want to update.</p>
	 * @param mixed $value <p>New value that you want to assign to the attribute.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-put.php
	 * @see cubrid_get(), cubrid_set_add(), cubrid_set_drop(), cubrid_seq_insert(), cubrid_seq_drop(), cubrid_seq_put()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_put($conn_identifier, string $oid, string $attr = NULL, mixed $value): bool {}

	/**
	 * Roll back a transaction
	 * <p>The <b>cubrid_rollback()</b> function executes rollback on the transaction pointed by <code>conn_identifier</code>, currently in progress.</p><p>Connection to server is closed after calling <b>cubrid_rollback()</b>. Connection handle, however, is still valid.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-rollback.php
	 * @see cubrid_commit(), cubrid_disconnect()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_rollback($conn_identifier): bool {}

	/**
	 * Get the requested schema information
	 * <p>The <b>cubrid_schema()</b> function is used to get the requested schema information from database. You have to designate <code>class_name</code>, if you want to get information on certain class, <code>attr_name</code>, if you want to get information on certain attribute (can be used only with CUBRID_ SCH_ATTR_PRIVILEGE).</p><p>The result of the cubrid_schema function is returned as a two-dimensional array (column (associative array) &#42; row (numeric array)). The following tables shows types of schema and the column structure of the result array to be returned based on the schema type.</p><p></p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param int $schema_type <p>Schema data that you want to know.</p>
	 * @param string $class_name <p>Class you want to know the schema of.</p>
	 * @param string $attr_name <p>Attribute you want to know the schema of.</p>
	 * @return array <p>Array containing the schema information, when process is successful;</p><p><b><code>FALSE</code></b>, when process is unsuccessful</p>
	 * @link https://php.net/manual/en/function.cubrid-schema.php
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_schema($conn_identifier, int $schema_type, string $class_name = NULL, string $attr_name = NULL): array {}

	/**
	 * Delete an element from sequence type column using OID
	 * <p>The <b>cubrid_seq_drop()</b> function is used to delete an element you request from the given sequence type attribute in the database.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance you want to work with.</p>
	 * @param string $attr_name <p>Name of the attribute that you want to delete an element from.</p>
	 * @param int $index <p>Index of the element that you want to delete (1-based).</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-seq-drop.php
	 * @see cubrid_seq_insert(), cubrid_seq_put()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_seq_drop($conn_identifier, string $oid, string $attr_name, int $index): bool {}

	/**
	 * Insert an element to a sequence type column using OID
	 * <p>The <b>cubrid_col_insert()</b> function is used to insert an element to a sequence type attribute in a requested location.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance you want to work with.</p>
	 * @param string $attr_name <p>Name of the attribute you want to insert an instance to.</p>
	 * @param int $index <p>Location of the element, you want to insert the element to (1-based).</p>
	 * @param string $seq_element <p>Content of the element that you want to insert.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-seq-insert.php
	 * @see cubrid_seq_drop(), cubrid_seq_put()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_seq_insert($conn_identifier, string $oid, string $attr_name, int $index, string $seq_element): bool {}

	/**
	 * Update the element value of sequence type column using OID
	 * <p>The <b>cubrid_seq_put()</b> function is used to update the content of the requested element in a sequent type attribute using OID.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance you want to work with.</p>
	 * @param string $attr_name <p>Name of the attribute that you want to update an element.</p>
	 * @param int $index <p>Index (1-based) of the element that you want to update.</p>
	 * @param string $seq_element <p>New content that you want to use for the update.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-seq-put.php
	 * @see cubrid_seq_drop(), cubrid_seq_insert()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_seq_put($conn_identifier, string $oid, string $attr_name, int $index, string $seq_element): bool {}

	/**
	 * Insert a single element to set type column using OID
	 * <p>The <b>cubrid_set_add()</b> function is used to insert a single element to a set type attribute (set, multiset, sequence) you requested.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance you want to work with.</p>
	 * @param string $attr_name <p>Name of the attribute you want to insert an element.</p>
	 * @param string $set_element <p>Content of the element you want to insert.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-set-add.php
	 * @see cubrid_seq_drop()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_set_add($conn_identifier, string $oid, string $attr_name, string $set_element): bool {}

	/**
	 * Set autocommit mode of the connection
	 * <p>The <b>cubrid_set_autocommit()</b> function is used to set the CUBRID database auto-commit mode of the current database connection.</p><p>In CUBRID PHP, auto-commit mode is disabled by default for transaction management. When auto-commit mode is truned from off to on, any pending work is automatically committed.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param bool $mode <p>Auto-commit mode. The following constants can be used:</p> <p></p><ul> <li><b><code>CUBRID_AUTOCOMMIT_FALSE</code></b></li> <li><b><code>CUBRID_AUTOCOMMIT_TRUE</code></b></li> </ul>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-set-autocommit.php
	 * @see cubrid_get_autocommit(), cubrid_commit()
	 * @since PECL CUBRID >= 8.4.0
	 */
	function cubrid_set_autocommit($conn_identifier, bool $mode): bool {}

	/**
	 * Sets the CUBRID database parameters
	 * <p>The <b>cubrid_set_db_parameter()</b> function is used to set the CUBRID database parameters. It can set the following CUBRID database parameters:</p><p></p><p><b>Note</b>:</p><p>The auto-commit mode can be set by using <code>cubrid_set_autocommit()</code>.</p>
	 * @param resource $conn_identifier <p>The CUBRID connection. If the connection identifier is not specified, the last link opened by <code>cubrid_connect()</code> is assumed.</p>
	 * @param int $param_type <p>Database parameter type.</p>
	 * @param int $param_value <p>Isolation level value (1-6) or lock timeout (in seconds) value.</p>
	 * @return bool <p><b><code>TRUE</code></b> on success.</p><p><b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cubrid-set-db-parameter.php
	 * @see cubrid_get_db_parameter(), cubrid_set_autocommit()
	 * @since PECL CUBRID >= 8.4.0
	 */
	function cubrid_set_db_parameter($conn_identifier, int $param_type, int $param_value): bool {}

	/**
	 * Delete an element from set type column using OID
	 * <p>The <b>cubrid_set_drop()</b> function is used to delete an element that you request from the given set type (set, multiset) attribute of the database.</p>
	 * @param resource $conn_identifier <p>Connection identifier.</p>
	 * @param string $oid <p>OID of the instance you want to work with.</p>
	 * @param string $attr_name <p>Name of the attribute you want to delete an element from.</p>
	 * @param string $set_element <p>Content of the element you want to delete.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-set-drop.php
	 * @see cubrid_set_add()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_set_drop($conn_identifier, string $oid, string $attr_name, string $set_element): bool {}

	/**
	 * Set the timeout time of query execution
	 * <p>The <b>cubrid_set_query_timeout()</b> function is used to set the timeout time of query execution.</p>
	 * @param resource $req_identifier <p>Request identifier.</p>
	 * @param int $timeout <p>Timeout time, unit of msec.</p>
	 * @return bool <p><b><code>TRUE</code></b>, when process is successful.</p><p><b><code>FALSE</code></b>, when process is unsuccessful.</p>
	 * @link https://php.net/manual/en/function.cubrid-set-query-timeout.php
	 * @see cubrid_get_query_timeout()
	 * @since PECL CUBRID >= 8.4.1
	 */
	function cubrid_set_query_timeout($req_identifier, int $timeout): bool {}

	/**
	 * Get the CUBRID PHP module's version
	 * <p>The <b>cubrid_version()</b> function is used to get the CUBRID PHP module's version.</p>
	 * @return string <p>Version information (eg. "8.3.1.0001").</p>
	 * @link https://php.net/manual/en/function.cubrid-version.php
	 * @see cubrid_error_code(), cubrid_error_code_facility()
	 * @since PECL CUBRID >= 8.3.0
	 */
	function cubrid_version(): string {}

	/**
	 * Get query result as an associative array.
	 */
	define('CUBRID_ASSOC', null);

	/**
	 * Execute the query in asynchronous mode.
	 */
	define('CUBRID_ASYNC', null);

	/**
	 * Disable the auto-commit mode.
	 */
	define('CUBRID_AUTOCOMMIT_FALSE', null);

	/**
	 * Enable the auto-commit mode.
	 */
	define('CUBRID_AUTOCOMMIT_TRUE', null);

	/**
	 * Get query result as both numeric and associative arrays (default value).
	 */
	define('CUBRID_BOTH', null);

	/**
	 * Move current cursor as a default value if the origin is not specified.
	 */
	define('CUBRID_CURSOR_CURRENT', null);

	/**
	 * Returned value of <code>cubrid_move_cursor()</code> function in case of failure. This flag has been removed from 8.4.1.
	 */
	define('CUBRID_CURSOR_ERROR', null);

	/**
	 * Move current cursor to the first position in the result.
	 */
	define('CUBRID_CURSOR_FIRST', null);

	/**
	 * Move current cursor to the last position in the result.
	 */
	define('CUBRID_CURSOR_LAST', null);

	/**
	 * Returned value of <code>cubrid_move_cursor()</code> function in case of success. This flag has been removed from 8.4.1.
	 */
	define('CUBRID_CURSOR_SUCCESS', null);

	/**
	 * Execute the query in synchronous mode. This flag must be set when executing multiple SQL statements.
	 */
	define('CUBRID_EXEC_QUERY_ALL', null);

	/**
	 * The error occurred in CUBRID broker cas.
	 */
	define('CUBRID_FACILITY_CAS', null);

	/**
	 * The error occurred in CUBRID cci.
	 */
	define('CUBRID_FACILITY_CCI', null);

	/**
	 * The error occurred in CUBRID PHP client.
	 */
	define('CUBRID_FACILITY_CLIENT', null);

	/**
	 * The error occurred in CUBRID dbms.
	 */
	define('CUBRID_FACILITY_DBMS', null);

	/**
	 * Determine whether to get OID during query execution.
	 */
	define('CUBRID_INCLUDE_OID', null);

	/**
	 * The constant CUBRID_LOB can be used when you want to operate the lob object. It can be passed to <code>cubrid_fetch()</code>, <code>cubrid_fetch_row()</code>, <code>cubrid_fetch_array()</code>, <code>cubrid_fetch_assoc()</code> and <code>cubrid_fetch_object()</code>.
	 */
	define('CUBRID_LOB', null);

	/**
	 * Returned value of <code>cubrid_move_cursor()</code> function in case of failure. This flag has been removed from 8.4.1.
	 */
	define('CUBRID_NO_MORE_DATA', null);

	/**
	 * Get query result as a numeric array (0-default).
	 */
	define('CUBRID_NUM', null);

	/**
	 * Get query result an object.
	 */
	define('CUBRID_OBJECT', null);

	/**
	 * Transaction isolation level for the database connection.
	 */
	define('CUBRID_PARAM_ISOLATION_LEVEL', null);

	/**
	 * Transaction timeout in seconds.
	 */
	define('CUBRID_PARAM_LOCK_TIMEOUT', null);

	/**
	 * Get the privilege information of column.
	 */
	define('CUBRID_SCH_ATTR_PRIVILEGE', null);

	/**
	 * Get the attributes of table column.
	 */
	define('CUBRID_SCH_ATTRIBUTE', null);

	/**
	 * Get name and type of table in CUBRID.
	 */
	define('CUBRID_SCH_CLASS', null);

	/**
	 * Get the attributes of table.
	 */
	define('CUBRID_SCH_CLASS_ATTRIBUTE', null);

	/**
	 * Get the class method. The class method is a method called by a class object. It is usually used to create a new class instance or to initialize it. It is also used to access or update class attributes.
	 */
	define('CUBRID_SCH_CLASS_METHOD', null);

	/**
	 * Get the privilege information of table.
	 */
	define('CUBRID_SCH_CLASS_PRIVILEGE', null);

	/**
	 * Get the table constraints.
	 */
	define('CUBRID_SCH_CONSTRAINT', null);

	/**
	 * Get reference relationship of tow tables.
	 */
	define('CUBRID_SCH_CROSS_REFERENCE', null);

	/**
	 * Get the direct super table of table.
	 */
	define('CUBRID_SCH_DIRECT_SUPER_CLASS', null);

	/**
	 * Get exported keys of table.
	 */
	define('CUBRID_SCH_EXPORTED_KEYS', null);

	/**
	 * Get imported keys of table.
	 */
	define('CUBRID_SCH_IMPORTED_KEYS', null);

	/**
	 * Get the instance method. The instance method is a method called by a class instance. It is used more often than the class method because most operations are executed in the instance.
	 */
	define('CUBRID_SCH_METHOD', null);

	/**
	 * Get the information of the file where the method of the table is defined.
	 */
	define('CUBRID_SCH_METHOD_FILE', null);

	/**
	 * Get the table primary key.
	 */
	define('CUBRID_SCH_PRIMARY_KEY', null);

	/**
	 * Get the query definition of view.
	 */
	define('CUBRID_SCH_QUERY_SPEC', null);

	/**
	 * Get the name and type of table which inherites attributes from this table.
	 */
	define('CUBRID_SCH_SUBCLASS', null);

	/**
	 * Get the name and type of table which table inherites attributes from.
	 */
	define('CUBRID_SCH_SUPERCLASS', null);

	/**
	 * Get the table triggers.
	 */
	define('CUBRID_SCH_TRIGGER', null);

	/**
	 * Get name and type of view in CUBRID.
	 */
	define('CUBRID_SCH_VCLASS', null);

	/**
	 * A relatively low isolation level (2). A dirty read does not occur, but non-repeatable or phantom read may occur.
	 */
	define('TRAN_COMMIT_CLASS_COMMIT_INSTANCE', null);

	/**
	 * The lowest isolation level (1). A dirty, non-repeatable or phantom read may occur for the tuple and a non-repeatable read may occur for the table as well.
	 */
	define('TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE', null);

	/**
	 * A relatively low isolation level (4). A dirty read does not occur, but non-repeatable or phantom read may.
	 */
	define('TRAN_REP_CLASS_COMMIT_INSTANCE', null);

	/**
	 * A relatively high isolation level (5). A dirty or non-repeatable read does not occur, but a phantom read may.
	 */
	define('TRAN_REP_CLASS_REP_INSTANCE', null);

	/**
	 * The default isolation of CUBRID (3). A dirty, non-repeatable or phantom read may occur for the tuple, but repeatable read is ensured for the table.
	 */
	define('TRAN_REP_CLASS_UNCOMMIT_INSTANCE', null);

	/**
	 * The highest isolation level (6). Problems concerning concurrency (e.g. dirty read, non-repeatable read, phantom read, etc.) do not occur.
	 */
	define('TRAN_SERIALIZABLE', null);

}
