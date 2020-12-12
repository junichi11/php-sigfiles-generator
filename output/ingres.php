<?php



namespace {

	/**
	 * Switch autocommit on or off
	 * <p><b>ingres_autocommit()</b> is called before opening a transaction (before the first call to <code>ingres_query()</code> or just after a call to <code>ingres_rollback()</code> or <code>ingres_commit()</code>) to switch the autocommit mode of the server on or off (when the script begins the autocommit mode is off).</p><p>When autocommit mode is on, every query is automatically committed by the server, as if <code>ingres_commit()</code> was called after every call to <code>ingres_query()</code>. To see if autocommit is enabled use, <code>ingres_autocommit_state()</code>.</p><p>By default Ingres will rollback any uncommitted transactions at the end of a request. Use this function or <code>ingres_commit()</code> to ensure your data is committed to the database.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-autocommit.php
	 * @see ingres_autocommit_state(), ingres_query(), ingres_rollback(), ingres_commit()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_autocommit($link): bool {}

	/**
	 * Test if the connection is using autocommit
	 * <p><b>ingres_autocommit_state()</b> is called to determine whether the current link has autocommit enabled or not.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if autocommit is enabled or <b><code>FALSE</code></b> when autocommit is disabled</p>
	 * @link https://php.net/manual/en/function.ingres-autocommit-state.php
	 * @see ingres_autocommit(), ingres_query()
	 * @since PECL ingres >= 2.0.0
	 */
	function ingres_autocommit_state($link): bool {}

	/**
	 * Returns the installation character set
	 * <p><b>ingres_charset()</b> is called to determine the character set being used by the Ingres client, from II_CHARSETxx (where xx is the installation code).</p><p><b>Note</b>:</p><p>You can override the value returned by using the function <code>putenv()</code>. Changing the value of II_CHARSETxx in a running Ingres installation can cause data corruption.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return string <p>Returns a string with the value for II_CHARSETxx or returns NULL if the value could not be determined.</p>
	 * @link https://php.net/manual/en/function.ingres-charset.php
	 * @see ingres_connect(), ingres_query()
	 * @since PECL ingres >= 2.1.0
	 */
	function ingres_charset($link): string {}

	/**
	 * Close an Ingres database connection
	 * <p><b>ingres_close()</b> closes the connection to the Ingres server that is associated with the specified link.</p><p><b>ingres_close()</b> is usually unnecessary, as it will not close persistent connections and all non-persistent connections are automatically closed at the end of the script.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-close.php
	 * @see ingres_connect(), ingres_pconnect()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_close($link): bool {}

	/**
	 * Commit a transaction
	 * <p><b>ingres_commit()</b> commits the currently open transaction, making all changes made to the database permanent.</p><p>This closes the transaction. A new transaction can be opened by sending a query with <code>ingres_query()</code>.</p><p>You can also have the server commit automatically after every query by calling <code>ingres_autocommit()</code> before opening the transaction.</p><p>By default Ingres will roll back any uncommitted transactions at the end of a request. Use this function or <code>ingres_autocommit()</code> to ensure your that data is committed to the database.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-commit.php
	 * @see ingres_query(), ingres_rollback(), ingres_autocommit()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_commit($link): bool {}

	/**
	 * Open a connection to an Ingres database
	 * <p><b>ingres_connect()</b> opens a connection with the given Ingres <code>database</code>.</p><p>The connection is closed when the script ends or when <code>ingres_close()</code> is called on this link.</p>
	 * @param string $database <p>The database name. Must follow the syntax:</p> <p>[vnode::]dbname[/svr_class]</p>
	 * @param string $username <p>The Ingres user name</p>
	 * @param string $password <p>The password associated with <code>username</code></p>
	 * @param array $options <p><b>ingres_connect()</b> options</p>   Option name Option type Description Example     date_century_boundary <code>int</code> The threshold by which a 2-digit year is determined to be in the current century or in the next century. Equivalent to II_DATE_CENTURY_BOUNDARY.  50   group <code>string</code> Specifies the group ID of the user, equivalent to the "-G" flag payroll   role <code>string</code> The role ID of the application. If a role password is required, the parameter value should be specified as "role/password"   effective_user <code>string</code> The ingres user account being impersonated, equivalent to the "-u" flag another_user   dbms_password <code>string</code> The internal database password for the user connecting to Ingres s3cr3t   table_structure <code>string</code> <p>The default structure for new tables. Valid values for table_structure are:</p><ul> <li>INGRES_STRUCTURE_BTREE</li> <li>INGRES_STRUCTURE_HASH</li> <li>INGRES_STRUCTURE_HEAP</li> <li>INGRES_STRUCTURE_ISAM</li> <li>INGRES_STRUCTURE_CBTREE</li> <li>INGRES_STRUCTURE_CISAM</li> <li>INGRES_STRUCTURE_CHASH</li> <li>INGRES_STRUCTURE_CHEAP</li> </ul>  INGRES_STRUCTURE_BTREE   index_structure <code>string</code> <p>The default structure for new secondary indexes. Valid values for index_structure are:</p><ul> <li>INGRES_STRUCTURE_CBTREE</li> <li>INGRES_STRUCTURE_CISAM</li> <li>INGRES_STRUCTURE_CHASH</li> <li>INGRES_STRUCTURE_BTREE</li> <li>INGRES_STRUCTURE_HASH</li> <li>INGRES_STRUCTURE_ISAM</li> </ul>  INGRES_STRUCTURE_HASH   login_local <code>bool</code> Determines how the connection user ID and password are used when a VNODE is included in the target database string. If set to TRUE, the user ID and password are used to locally access the VNODE, and the VNODE login information is used to establish the DBMS connection. If set to FALSE, the process user ID is used to access the VNODE, and the connection user ID and password are used in place of the VNODE login information to establish the DBMS connection. This parameter is ignored if no VNODE is included in the target database string. The default is FALSE. TRUE   timezone <code>string</code> Controls the timezone of the session. If not set it will default to the value defined by II_TIMEZONE_NAME. If II_TIMEZONE_NAME is not defined, NA-PACIFIC (GMT-8 with Daylight Savings) is used.   date_format <code>int</code> <p>Sets the allowable input and output format for Ingres dates. Defaults to the value defined by II_DATE_FORMAT. If II_DATE_FORMAT is not set the default date format is US, e.g. mm/dd/yy. Valid values for date_format are:</p><ul> <li>INGRES_DATE_DMY</li> <li>INGRES_DATE_FINISH</li> <li>INGRES_DATE_GERMAN</li> <li>INGRES_DATE_ISO</li> <li>INGRES_DATE_ISO4</li> <li>INGRES_DATE_MDY</li> <li>INGRES_DATE_MULTINATIONAL</li> <li>INGRES_DATE_MULTINATIONAL4</li> <li>INGRES_DATE_YMD</li> <li>INGRES_DATE_US</li> </ul>  INGRES_DATE_MULTINATIONAL4   decimal_separator <code>string</code> The character identifier for decimal data ","   money_lort <code>int</code> <p>Leading or trailing currency sign. Valid values for money_lort are:</p><ul> <li>INGRES_MONEY_LEADING</li> <li>INGRES_MONEY_TRAILING</li> </ul>  INGRES_MONEY_TRAILING   money_sign <code>string</code> The currency symbol to be used with the MONEY datatype &euro;   money_precision <code>int</code> The precision of the MONEY datatype 3   float4_precision <code>int</code> Precision of the FLOAT4 datatype 10   float8_precision <code>int</code> Precision of the FLOAT8 data 10   blob_segment_length <code>int</code> The amount of data in bytes to fetch at a time when retrieving BLOB or CLOB data, defaults to 4096 bytes when not explicitly set 8192
	 * @return resource|false <p>Returns a Ingres link resource on success or <b><code>FALSE</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.ingres-connect.php
	 * @see ingres_pconnect(), ingres_close()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_connect(string $database = NULL, string $username = NULL, string $password = NULL, array $options = NULL) {}

	/**
	 * Get a cursor name for a given result resource
	 * <p>Returns a string with the active cursor name. If no cursor is active then NULL is returned.</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @return string <p>Returns a string containing the active cursor name. If no cursor is active then NULL is returned.</p>
	 * @link https://php.net/manual/en/function.ingres-cursor.php
	 * @see ingres_prepare(), ingres_execute()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_cursor($result): string {}

	/**
	 * Get the last Ingres error number generated
	 * <p>Returns an integer containing the last error number. If no error was reported 0 is returned.</p><p>If a <code>link</code> resource is passed to <b>ingres_errno()</b> it returns the last error recorded for the link. If no link is passed, then <b>ingres_errno()</b> returns the last error reported using the default link.</p><p>The function, <b>ingres_errno()</b>, should always be called after executing a database query. Calling another function before <b>ingres_errno()</b> is called will reset or change any error code from the last Ingres function call.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return int <p>Returns an integer containing the last error number. If no error was reported, 0 is returned.</p>
	 * @link https://php.net/manual/en/function.ingres-errno.php
	 * @see ingres_error(), ingres_errsqlstate(), ingres_next_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_errno($link = NULL): int {}

	/**
	 * Get a meaningful error message for the last error generated
	 * <p>Returns a string containing the last error, or NULL if no error has occurred.</p><p>If a <code>link</code> resource is passed to <b>ingres_error()</b>, it returns the last error recorded for the link. If no link is passed then <b>ingres_error()</b> returns the last error reported using the default link.</p><p>The function, <b>ingres_error()</b>, should always be called after executing any database query. Calling another function before <b>ingres_error()</b> is called will reset or change any error message from the last Ingres function call.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return string <p>Returns a string containing the last error, or NULL if no error has occurred.</p>
	 * @link https://php.net/manual/en/function.ingres-error.php
	 * @see ingres_errno(), ingres_errsqlstate(), ingres_next_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_error($link = NULL): string {}

	/**
	 * Get the last SQLSTATE error code generated
	 * <p>Returns a string containing the last SQLSTATE, or NULL if no error has occurred.</p><p>If a <code>link</code> resource is passed to <b>ingres_errsqlstate()</b>, it returns the last error recorded for the link. If no link is passed, then <b>ingres_errsqlstate()</b> returns the last error reported using the default link.</p><p>The function, <b>ingres_errsqlstate()</b>, should always be called after executing any database query. Calling another function before <b>ingres_errsqlstate()</b> is called will reset or change any error message from the last Ingres function call.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return string <p>Returns a string containing the last SQLSTATE, or NULL if no error has occurred.</p>
	 * @link https://php.net/manual/en/function.ingres-errsqlstate.php
	 * @see ingres_errno(), ingres_error(), ingres_next_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_errsqlstate($link = NULL): string {}

	/**
	 * Escape special characters for use in a query
	 * <p><b>ingres_escape_string()</b> is used to escape certain characters within a string before it is sent to the database server.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @param string $source_string <p>The source string to be parsed</p>
	 * @return string <p>Returns a string containing the escaped data.</p>
	 * @link https://php.net/manual/en/function.ingres-escape-string.php
	 * @see ingres_query()
	 * @since PECL ingres >= 2.1.0
	 */
	function ingres_escape_string($link, string $source_string): string {}

	/**
	 * Execute a prepared query
	 * <p>Execute a query prepared using <code>ingres_prepare()</code>.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.describe, ingres.scrollable and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $result <p>The result query identifier</p>
	 * @param array $params <p>An array of parameter values to be used with the query</p>
	 * @param string $types <p>A string containing a sequence of types for the parameter values passed. See the types parameter in <code>ingres_query()</code> for the list of type codes.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-execute.php
	 * @see ingres_unbuffered_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_execute($result, array $params = NULL, string $types = NULL): bool {}

	/**
	 * Fetch a row of result into an array
	 * <p>This function is an extended version of <code>ingres_fetch_row()</code>. In addition to storing the data in the numeric indices of the result array, it also stores the data in associative indices, using the field names as keys.</p><p>If two or more columns of the result have the same field names, the last column will take precedence. To access the another column or columns of the same name, you must use the numeric index of the column or make an alias for the column. For example:</p><p>With regard to speed, the function is identical to <code>ingres_fetch_object()</code>, and almost as quick as <code>ingres_fetch_row()</code> (the difference is insignificant).</p><p>By default, arrays created by <b>ingres_fetch_array()</b> start from position 1 and not 0 as with other DBMS extensions. The starting position can be adjusted to 0 using the configuration parameter ingres.array_index_start.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.array_index_start, ingres.fetch_buffer_size and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $result_type <p>The result type. This <code>result_type</code> can be <b><code>INGRES_NUM</code></b> for enumerated array, <b><code>INGRES_ASSOC</code></b> for associative array, or <b><code>INGRES_BOTH</code></b> (default).</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows</p>
	 * @link https://php.net/manual/en/function.ingres-fetch-array.php
	 * @see ingres_query(), ingres_num_fields(), ingres_field_name(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_fetch_array($result, int $result_type = NULL): array {}

	/**
	 * Fetch a row of result into an associative array
	 * <p>This function is stores the data fetched from a query executed using <code>ingres_query()</code> in an associative array, using the field names as keys.</p><p>With regard to speed, the function is identical to <code>ingres_fetch_object()</code>, and almost as quick as <code>ingres_fetch_row()</code> (the difference is insignificant).</p><p>By default, arrays created by <b>ingres_fetch_assoc()</b> start from position 1 and not 0 as with other DBMS extensions. The starting position can be adjusted to 0 using the configuration parameter ingres.array_index_start.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.array_index_start, ingres.fetch_buffer_size and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @return array <p>Returns an associative array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows</p>
	 * @link https://php.net/manual/en/function.ingres-fetch-assoc.php
	 * @see ingres_query(), ingres_num_fields(), ingres_field_name(), ingres_fetch_array(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PECL ingres >= 2.2.2
	 */
	function ingres_fetch_assoc($result): array {}

	/**
	 * Fetch a row of result into an object
	 * <p>This function is similar to <code>ingres_fetch_array()</code>, with one difference - an object is returned instead of an array. Indirectly, this means that you can access the data only by the field names and not by their offsets (numbers are illegal property names).</p><p>With regard to speed, the function is identical to <code>ingres_fetch_array()</code>, and almost as quick as <code>ingres_fetch_row()</code> (the difference is insignificant).</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.fetch_buffer_size and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $result
	 * @param int $result_type <p>(Optional argument.) <code>result_type</code> is a constant and can take the following values: <b><code>INGRES_ASSOC</code></b>, <b><code>INGRES_NUM</code></b>, and <b><code>INGRES_BOTH</code></b>.</p>
	 * @return object <p>Returns an object that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows</p>
	 * @link https://php.net/manual/en/function.ingres-fetch-object.php
	 * @see ingres_query(), ingres_num_fields(), ingres_field_name(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_fetch_object($result, int $result_type = NULL): object {}

	/**
	 * Get the return value from a procedure call
	 * <p>This function is used to retrieve the return value following the execution of an Ingres database procedure (stored procedure).</p><p><b>Note</b>:</p><p>If used with a row-producing procedure, this function should be called after all the rows from the procedure have been fetched using <code>ingres_fetch_array()</code>, <code>ingres_fetch_object()</code> or <code>ingres_fetch_row()</code>. This function will eliminate any rows yet to be fetched should there be any left over.</p>
	 * @param resource $result <p>The result identifier for a query</p>
	 * @return int <p>Returns an <code>int</code> if there is a return value otherwise it will return <b><code>NULL</code></b>.</p>
	 * @link https://php.net/manual/en/function.ingres-fetch-proc-return.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PECL ingres >= 1.4.0
	 */
	function ingres_fetch_proc_return($result): int {}

	/**
	 * Fetch a row of result into an enumerated array
	 * <p><b>ingres_fetch_row()</b> returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows. Each result column is stored in an array offset, starting at offset 1.</p><p>Subsequent calls to <b>ingres_fetch_row()</b> return the next row in the result set, or <b><code>FALSE</code></b> if there are no more rows.</p><p>By default, arrays created by <b>ingres_fetch_row()</b> start from position 1 and not 0 as with other DBMS extensions. The starting position can be adjusted to 0 using the configuration parameter ingres.array_index_start.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.array_index_start, ingres.fetch_buffer_size and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>FALSE</code></b> if there are no more rows</p>
	 * @link https://php.net/manual/en/function.ingres-fetch-row.php
	 * @see ingres_num_fields(), ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_fetch_row($result): array {}

	/**
	 * Get the length of a field
	 * <p><b>ingres_field_length()</b> returns the length of a field. This is the number of bytes the server uses to store the field. For detailed information, see the Ingres <code>OpenAPI User Guide</code>, Appendix <code>"Data Types"</code> in the Ingres documentation.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See ingres.array_index_start in Runtime Configuration</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $index <p><code>index</code> is the column number whose length will be retrieved.</p> <p>The possible values of <code>index</code> depend upon the value of ingres.array_index_start. If ingres.array_index_start is <code>1</code> (the default) then <code>index</code> must be between <code>1</code> and the value returned by <code>ingres_num_fields()</code>. If ingres.array_index_start is <code>0</code> then <code>index</code> must be between <code>0</code> and <code>ingres_num_fields()</code><code> - 1</code>.</p>
	 * @return int <p>Returns the length of a field.</p>
	 * @link https://php.net/manual/en/function.ingres-field-length.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_length($result, int $index): int {}

	/**
	 * Get the name of a field in a query result
	 * <p><b>ingres_field_name()</b> returns the name of a field in a query result.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See ingres.array_index_start in Runtime Configuration</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $index <p><code>index</code> is the field whose name will be retrieved.</p> <p>The possible values of <code>index</code> depend upon the value of ingres.array_index_start. If ingres.array_index_start is <code>1</code> (the default) then <code>index</code> must be between <code>1</code> and the value returned by <code>ingres_num_fields()</code>. If ingres.array_index_start is <code>0</code> then <code>index</code> must be between <code>0</code> and <code>ingres_num_fields()</code><code> - 1</code>.</p>
	 * @return string|false <p>Returns the name of a field in a query result or <b><code>FALSE</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.ingres-field-name.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_name($result, int $index) {}

	/**
	 * Test if a field is nullable
	 * <p>Test if a field is nullable.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See ingres.array_index_start in Runtime Configuration</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $index <p><code>index</code> is the field whose nullability will be retrieved.</p> <p>The possible values of <code>index</code> depend upon the value of ingres.array_index_start. If ingres.array_index_start is <code>1</code> (the default) then <code>index</code> must be between <code>1</code> and the value returned by <code>ingres_num_fields()</code>. If ingres.array_index_start is <code>0</code> then <code>index</code> must be between <code>0</code> and <code>ingres_num_fields()</code><code> - 1</code>.</p>
	 * @return bool <p><b>ingres_field_nullable()</b> returns <b><code>TRUE</code></b> if the field can be set to the <b><code>NULL</code></b> value and <b><code>FALSE</code></b> if it cannot</p>
	 * @link https://php.net/manual/en/function.ingres-field-nullable.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_nullable($result, int $index): bool {}

	/**
	 * Get the precision of a field
	 * <p><b>ingres_field_precision()</b> returns the precision of a field. This value is used only for decimal, float, and money SQL data types. For detailed information, see the Ingres <code>OpenAPI User Guide</code>, Appendix "Data Types" in the Ingres documentation.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See ingres.array_index_start in Runtime Configuration</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $index <p><code>index</code> is the field whose precision will be retrieved.</p> <p>The possible values of <code>index</code> depend upon the value of ingres.array_index_start. If ingres.array_index_start is <code>1</code> (the default) then <code>index</code> must be between <code>1</code> and the value returned by <code>ingres_num_fields()</code>. If ingres.array_index_start is <code>0</code> then <code>index</code> must be between <code>0</code> and <code>ingres_num_fields()</code><code> - 1</code>.</p>
	 * @return int <p>Returns the field precision as an integer</p>
	 * @link https://php.net/manual/en/function.ingres-field-precision.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_precision($result, int $index): int {}

	/**
	 * Get the scale of a field
	 * <p><b>ingres_field_scale()</b> returns the scale of a field. This value is used only for the decimal SQL data type. For detailed information, see the Ingres <code>OpenAPI User Guide</code>, Appendix <code>"Data Types"</code> in the Ingres documentation.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See ingres.array_index_start in Runtime Configuration</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $index <p><code>index</code> is the field whose scale will be retrieved.</p> <p>The possible values of <code>index</code> depend upon the value of ingres.array_index_start. If ingres.array_index_start is <code>1</code> (the default) then <code>index</code> must be between <code>1</code> and the value returned by <code>ingres_num_fields()</code>. If ingres.array_index_start is <code>0</code> then <code>index</code> must be between <code>0</code> and <code>ingres_num_fields()</code><code> - 1</code>.</p>
	 * @return int <p>Returns the scale of the field, as an integer</p>
	 * @link https://php.net/manual/en/function.ingres-field-scale.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_scale($result, int $index): int {}

	/**
	 * Get the type of a field in a query result
	 * <p>Get the type of a field in a query result.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See ingres.array_index_start in Runtime Configuration</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @param int $index <p><code>index</code> is the field whose type will be retrieved.</p> <p>The possible values of <code>index</code> depend upon the value of ingres.array_index_start. If ingres.array_index_start is <code>1</code> (the default) then <code>index</code> must be between <code>1</code> and the value returned by <code>ingres_num_fields()</code>. If ingres.array_index_start is <code>0</code> then <code>index</code> must be between <code>0</code> and <code>ingres_num_fields()</code><code> - 1</code>.</p>
	 * @return string|false <p><b>ingres_field_type()</b> returns the type of a field in a query result or <b><code>FALSE</code></b> on failure. Examples of types returned are <code>IIAPI_BYTE_TYPE</code>, <code>IIAPI_CHA_TYPE</code>, <code>IIAPI_DTE_TYPE</code>, <code>IIAPI_FLT_TYPE</code>, <code>IIAPI_INT_TYPE</code>, <code>IIAPI_VCH_TYPE</code>. Some of these types can map to more than one SQL type depending on the length of the field (see <code>ingres_field_length()</code>). For example IIAPI_FLT_TYPE can be a float4 or a float8. For detailed information, see the Ingres <code>OpenAPI User Guide</code>, Appendix "Data Types" in the Ingres documentation.</p>
	 * @link https://php.net/manual/en/function.ingres-field-type.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_type($result, int $index) {}

	/**
	 * Free the resources associated with a result identifier
	 * @param resource $result <p>The query result identifier</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-free-result.php
	 * @see ingres_query()
	 * @since PECL ingres >= 2.0.0
	 */
	function ingres_free_result($result): bool {}

	/**
	 * Get the next Ingres error
	 * <p>Get the next Ingres error for the last executed query. Each call to <b>ingres_next_error()</b> can be followed by a call to <code>ingres_errno()</code>, <code>ingres_error()</code> or <code>ingres_errsqlstate()</code> to get the respective error number, error text, or SQL STATE. While <b>ingres_next_error()</b> returns <b><code>TRUE</code></b>, there are more errors to fetch.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return bool <p><b>ingres_next_error()</b> returns <b><code>TRUE</code></b> if there is another error to retrieve or <b><code>FALSE</code></b> when there are no more errors</p>
	 * @link https://php.net/manual/en/function.ingres-next-error.php
	 * @see ingres_errno(), ingres_error(), ingres_errsqlstate()
	 * @since PECL ingres >= 2.0.0
	 */
	function ingres_next_error($link = NULL): bool {}

	/**
	 * Get the number of fields returned by the last query
	 * <p><b>ingres_num_fields()</b> returns the number of fields in the results returned by the Ingres server after a call to <code>ingres_query()</code>.</p>
	 * @param resource $result <p>The query result identifier</p>
	 * @return int <p>Returns the number of fields</p>
	 * @link https://php.net/manual/en/function.ingres-num-fields.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_num_fields($result): int {}

	/**
	 * Get the number of rows affected or returned by a query
	 * <p>This function primarily is meant to get the number of rows modified in the database. However, it can be used to retrieve the number of rows to fetch for a SELECT statement.</p><p><b>Note</b>:</p><p>If scrollable cursors are disabled and this function is called before using <code>ingres_fetch_array()</code>, <code>ingres_fetch_object()</code>, or <code>ingres_fetch_row()</code>, the server will delete the result's data and the script will be unable to get them.</p><p>Instead, you should retrieve the result's data using one of these fetch functions in a loop until it returns <b><code>FALSE</code></b>, indicating that no more results are available.</p>
	 * @param resource $result <p>The result identifier for a query</p>
	 * @return int <p>For delete, insert, or update queries, <b>ingres_num_rows()</b> returns the number of rows affected by the query. For other queries, <b>ingres_num_rows()</b> returns the number of rows in the query's result.</p>
	 * @link https://php.net/manual/en/function.ingres-num-rows.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_num_rows($result): int {}

	/**
	 * Open a persistent connection to an Ingres database
	 * <p>Open a persistent connection to an Ingres database.</p><p>There are only two differences between this function and <code>ingres_connect()</code>: First, when connecting, the function will initially try to find a (persistent) link that is already opened with the same parameters. If one is found, an identifier for it will be returned instead of opening a new connection. Second, the connection to the Ingres server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>ingres_close()</code> will not close links established by <b>ingres_pconnect()</b>). This type of link is therefore called "persistent".</p>
	 * @param string $database <p>The database name. Must follow the syntax:</p> <p>[vnode::]dbname[/svr_class]</p>
	 * @param string $username <p>The Ingres user name</p>
	 * @param string $password <p>The password associated with <code>username</code></p>
	 * @param array $options <p>See <code>ingres_connect()</code> for the list of options that can be passed</p>
	 * @return resource|false <p>Returns an Ingres link resource on success or <b><code>FALSE</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.ingres-pconnect.php
	 * @see ingres_connect(), ingres_close()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_pconnect(string $database = NULL, string $username = NULL, string $password = NULL, array $options = NULL) {}

	/**
	 * Prepare a query for later execution
	 * <p>Prepares a query for execution by <code>ingres_execute()</code>.</p><p>The query becomes part of the currently open transaction. If there is no open transaction, <code>ingres_query()</code> opens a new transaction. To close the transaction, you can call either <code>ingres_commit()</code> to commit the changes made to the database or <code>ingres_rollback()</code> to cancel these changes. When the script ends, any open transaction is rolled back (by calling <code>ingres_rollback()</code>). You can also use <code>ingres_autocommit()</code> before opening a new transaction to have every SQL query immediately committed.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.describe, ingres.scrollable and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @param string $query <p>A valid SQL query (see the Ingres <code>SQL reference guide</code>) in the Ingres documentation. See the query parameter in <code>ingres_query()</code> for a list of SQL statements which cannot be executed using <b>ingres_prepare()</b></p>
	 * @return mixed <p><b>ingres_prepare()</b> returns a query result identifier that is used with <code>ingres_execute()</code> to execute the query. To see if an error occurred, use <code>ingres_errno()</code>, <code>ingres_error()</code>, or <code>ingres_errsqlstate()</code>.</p>
	 * @link https://php.net/manual/en/function.ingres-prepare.php
	 * @see ingres_unbuffered_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_prepare($link, string $query) {}

	/**
	 * Send an SQL query to Ingres
	 * <p><b>ingres_query()</b> sends the given <code>query</code> to the Ingres server.</p><p>The query becomes part of the currently open transaction. If there is no open transaction, <b>ingres_query()</b> opens a new transaction. To close the transaction, you can call either <code>ingres_commit()</code> to commit the changes made to the database or <code>ingres_rollback()</code> to cancel these changes. When the script ends, any open transaction is rolled back (by calling <code>ingres_rollback()</code>). You can also use <code>ingres_autocommit()</code> before opening a new transaction to have every SQL query immediately committed.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.describe, ingres.scrollable and ingres.utf8 directives in Runtime Configuration</p>
	 * @param resource $link <p>The connection link identifier.</p>
	 * @param string $query <p>A valid SQL query (see the Ingres <code>SQL reference guide</code>) in the Ingres documentation.</p> <p>Data inside the query should be properly escaped.</p> <p>The following types of SQL queries cannot be sent with this function:</p><ul> <li>  <code>close</code> (see <code>ingres_close()</code>)  </li> <li>  <code>commit</code> (see <code>ingres_commit()</code>)  </li> <li>  <code>connect</code> (see <code>ingres_connect()</code>)  </li> <li>  <code>disconnect</code> (see <code>ingres_close()</code>)  </li> <li> <code>get dbevent</code> </li> <li> <code>prepare to commit</code> </li> <li>  <code>rollback</code> (see <code>ingres_rollback()</code>)  </li> <li><code>savepoint</code></li> <li>  <code>set autocommit</code> (see <code>ingres_autocommit()</code>)  </li> <li> all cursor-related queries are unsupported </li> </ul>
	 * @param array $params <p>An array of parameter values to be used with the query</p>
	 * @param string $types <p>A string containing a sequence of types for the parameter values passed. When ingres.describe is enabled, this parameter can be ignored as the driver automatically fetches the expected parameter types from the server.</p>    Type code Ingres type     a <code>BOOLEAN</code>   b BYTE   B LONG BYTE/BLOB   c CHAR   d DATE/ANSIDATE/TIMESTAMP/TIME   f <code>FLOAT</code>   i <code>INTEGER</code>   L LONG TEXT   m MONEY   M LONG NVARCHAR   n NCHAR   N NVARCHAR   t TEXT   v VARCHAR   V LONG VARCHAR
	 * @return mixed <p><b>ingres_query()</b> returns a query result identifier on success else it returns <b><code>FALSE</code></b>. To see if an error occurred use <code>ingres_errno()</code>, <code>ingres_error()</code> or <code>ingres_errsqlstate()</code>.</p>
	 * @link https://php.net/manual/en/function.ingres-query.php
	 * @see ingres_unbuffered_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_query($link, string $query, array $params = NULL, string $types = NULL) {}

	/**
	 * Set the row position before fetching data
	 * <p>This function is used to position the cursor associated with the result resource before issuing a fetch. If ingres.array_index_start is set to 0 then the first row is 0 else it is 1. <b>ingres_result_seek()</b> can be used only with queries that make use of scrollable cursors. It cannot be used with <code>ingres_unbuffered_query()</code>.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.scrollable and ingres.array_index_start directives in Runtime Configuration.</p>
	 * @param resource $result <p>The result identifier for a query</p>
	 * @param int $position <p>The row to position the cursor on. If ingres.array_index_start is set to 0, then the first row is 0, else it is 1</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-result-seek.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PECL ingres >= 2.1.0
	 */
	function ingres_result_seek($result, int $position): bool {}

	/**
	 * Roll back a transaction
	 * <p><b>ingres_rollback()</b> rolls back the currently open transaction, actually cancelling all changes made to the database during the transaction.</p><p>This closes the transaction. A new transaction can be opened by sending a query with <code>ingres_query()</code>.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-rollback.php
	 * @see ingres_query(), ingres_commit(), ingres_autocommit()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_rollback($link): bool {}

	/**
	 * Set environment features controlling output options
	 * <p><b>ingres_set_environment()</b> is called to set environmental options that affect the output of certain values from Ingres, such as the timezone, date format, decimal character separator, and float precision.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @param array $options <p>An enumerated <code>array</code> of option name/value pairs. The following table lists the option name and the expected type</p> <p></p>   Option name Option type Description Example     date_century_boundary <code>int</code> The threshold by which a 2-digit year is determined to be in the current century or in the next century. Equivalent to II_DATE_CENTURY_BOUNDARY 50   timezone <code>string</code> Controls the timezone of the session. If not set, it will default the value defined by II_TIMEZONE_NAME. If II_TIMEZONE_NAME is not defined, NA-PACIFIC (GMT-8 with Daylight Savings) is used. UNITED-KINGDOM   date_format <code>int</code> <p>Sets the allowable input and output format for Ingres dates. Defaults to the value defined by II_DATE_FORMAT. If II_DATE_FORMAT is not set, the default date format is US, for example mm/dd/yy. Valid values for date_format are:</p><ul> <li>INGRES_DATE_DMY</li> <li>INGRES_DATE_FINISH</li> <li>INGRES_DATE_GERMAN</li> <li>INGRES_DATE_ISO</li> <li>INGRES_DATE_ISO4</li> <li>INGRES_DATE_MDY</li> <li>INGRES_DATE_MULTINATIONAL</li> <li>INGRES_DATE_MULTINATIONAL4</li> <li>INGRES_DATE_YMD</li> <li>INGRES_DATE_US</li> </ul>  INGRES_DATE_ISO4   decimal_separator <code>string</code> The character identifier for decimal data ","   money_lort <code>int</code> <p>Leading or trailing currency sign. Valid values for money_lort are:</p><ul> <li>INGRES_MONEY_LEADING</li> <li>INGRES_MONEY_TRAILING</li> </ul>  INGRES_MONEY_LEADING   money_sign <code>string</code> The currency symbol to be used with the MONEY datatype &euro;   money_precision <code>int</code> The precision of the MONEY datatype 2   float4_precision <code>int</code> Precision of the FLOAT4 datatype 10   float8_precision <code>int</code> Precision of the FLOAT8 data 10   blob_segment_length <code>int</code> The amount of data in bytes to fetch at a time when retrieving BLOB or CLOB data. Defaults to 4096 bytes when not set explicitly 8192
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ingres-set-environment.php
	 * @see ingres_connect(), ingres_query()
	 * @since PECL ingres >= 1.2.0
	 */
	function ingres_set_environment($link, array $options): bool {}

	/**
	 * Send an unbuffered SQL query to Ingres
	 * <p><b>ingres_unbuffered_query()</b> sends the given <code>query</code> to the Ingres server.</p><p>The query becomes part of the currently open transaction. If there is no open transaction, <b>ingres_unbuffered_query()</b> opens a new transaction. To close the transaction, you can call either <code>ingres_commit()</code> to commit the changes made to the database or <code>ingres_rollback()</code> to cancel these changes. When the script ends, any open transaction is rolled back (by calling <code>ingres_rollback()</code>). You can also use <code>ingres_autocommit()</code> before opening a new transaction to have every SQL query immediately committed. Ingres allows only a single unbuffered statement to be active at any one time. The extension will close any active unbuffered statements before executing any SQL. In addition you cannot use <code>ingres_result_seek()</code> to position the row before fetching.</p><p><b>Note</b>: <b>Related Configurations</b><br></p><p>See also the ingres.describe and ingres.utf8 directives in Runtime Configuration.</p>
	 * @param resource $link <p>The connection link identifier</p>
	 * @param string $query <p>A valid SQL query (see the Ingres <i>SQL reference guide</i>) in the Ingres documentation. See the query parameter in <code>ingres_query()</code> for a list of SQL statements that cannot be executed via <b>ingres_unbuffered_query()</b>.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param array $params <p>An array of parameter values to be used with the query</p>
	 * @param string $types <p>A string containing a sequence of types for the parameter values passed. See the types parameter in <code>ingres_query()</code> for the list of type codes.</p>
	 * @return mixed <p><b>ingres_unbuffered_query()</b> returns a query result identifier when there are rows to fetch; else it returns <b><code>FALSE</code></b> when there are no rows, as is the case of an INSERT, UPDATE, or DELETE statement. To see if an error occurred, use <code>ingres_errno()</code>, <code>ingres_error()</code>, or <code>ingres_errsqlstate()</code>.</p>
	 * @link https://php.net/manual/en/function.ingres-unbuffered-query.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since No version information available, might only be in Git
	 */
	function ingres_unbuffered_query($link, string $query, array $params = NULL, string $types = NULL) {}

	/**
	 * Specifies the version of Ingres OpenAPI that the extension was built against. Available since version 1.2.0 of the PECL extension.
	 */
	define('INGRES_API_VERSION', null);

	/**
	 * Columns are returned into the array having the fieldname as the array index. Used with <code>ingres_fetch_array()</code>.
	 */
	define('INGRES_ASSOC', null);

	/**
	 * Columns are returned into the array having both a numerical index and the fieldname as the array index. Used with <code>ingres_fetch_array()</code>.
	 */
	define('INGRES_BOTH', null);

	/**
	 * Specifies that Ingres cursors should be opened in "readonly" mode. Available since version 1.2.0 of the PECL extension. Used with ingres.cursor_mode.
	 */
	define('INGRES_CURSOR_READONLY', null);

	/**
	 * Specifies that Ingres cursors should be opened "for update." Available since version 1.2.0 of the PECL extension. Used with ingres.cursor_mode.
	 */
	define('INGRES_CURSOR_UPDATE', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of DMY. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_DMY', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of FINNISH. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_FINNISH', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of GERMAN. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_GERMAN', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of ISO. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_ISO', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of ISO4. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_ISO4', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of MDY. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_MDY', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of MULTINATIONAL. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_MULTINATIONAL', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of MULTINATIONAL4. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_MULTINATIONAL4', null);

	/**
	 * Equivalent to the II_DATE_FORMAT setting of YMD. Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_DATE_YMD', null);

	/**
	 * Specifies the version of the Ingres Extension. Available since version 1.2.0 of the PECL extension.
	 */
	define('INGRES_EXT_VERSION', null);

	/**
	 * Specifies the currency character that should be placed at the start of a money value. Equivalent to setting II_MONEY_FORMAT to "L:". Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_MONEY_LEADING', null);

	/**
	 * Specifies the currency character that should be placed at the end of a money value. Equivalent to setting II_MONEY_FORMAT to "T:". Available since version 1.2.0 of the PECL extension. Used with <code>ingres_connect()</code>, <code>ingres_pconnect()</code> and <code>ingres_set_environment()</code>. See options in <code>ingres_set_environment()</code>.
	 */
	define('INGRES_MONEY_TRAILING', null);

	/**
	 * Columns are returned into the array having a numerical index to the fields. By default this index starts at 1, the first field in the result. To change this value, see ingres.array_index_start. Used with <code>ingres_fetch_array()</code>.
	 */
	define('INGRES_NUM', null);

	/**
	 * Specifies the default table or index structure to BTREE when used in combination with the options or index_structure option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_BTREE', null);

	/**
	 * Specifies the default table or index structure to COMPRESSED BTREE when used in combination with the options or index_structure option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_CBTREE', null);

	/**
	 * Specifies the default table or index structure to COMPRESSED HASH when used in combination with the options or index_structure option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_CHASH', null);

	/**
	 * Specifies the default table structure to COMPRESSED HEAP when used in combination with the options option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_CHEAP', null);

	/**
	 * Specifies the default table or index structure to COMPRESSED ISAM when used in combination with the options or index_structure option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_CISAM', null);

	/**
	 * Specifies the default table or index structure to HASH when used in combination with the options or index_structure option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_HASH', null);

	/**
	 * Specifies the default table structure to HEAP when used in combination with the options option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_HEAP', null);

	/**
	 * Specifies the default table or index structure to ISAM when used in combination with the options or index_structure option when connecting. Available since version 1.4.0 of the PECL extension. Used with <code>ingres_connect()</code> and <code>ingres_pconnect()</code>. See options in <code>ingres_connect()</code>.
	 */
	define('INGRES_STRUCTURE_ISAM', null);

}
