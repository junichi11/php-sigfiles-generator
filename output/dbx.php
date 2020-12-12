<?php



namespace {

	/**
	 * Close an open connection/database
	 * @param object $link_identifier <p>The DBX link object to close.</p>
	 * @return int <p>Returns 1 on success and 0 on errors.</p>
	 * @link https://php.net/manual/en/function.dbx-close.php
	 * @see dbx_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_close(object $link_identifier): int {}

	/**
	 * Compare two rows for sorting purposes
	 * <p><b>dbx_compare()</b> is a helper function for <code>dbx_sort()</code> to ease the make and use of the custom sorting function.</p>
	 * @param array $row_a <p>First row</p>
	 * @param array $row_b <p>Second row</p>
	 * @param string $column_key <p>The compared column</p>
	 * @param int $flags <p>The <code>flags</code> can be set to specify comparison direction:</p><ul> <li>  <b><code>DBX_CMP_ASC</code></b> - ascending order  </li> <li>  <b><code>DBX_CMP_DESC</code></b> - descending order  </li> </ul> and the preferred comparison type: <ul> <li>  <b><code>DBX_CMP_NATIVE</code></b> - no type conversion  </li> <li>  <b><code>DBX_CMP_TEXT</code></b> - compare items as strings  </li> <li>  <b><code>DBX_CMP_NUMBER</code></b> - compare items numerically  </li> </ul> One of the direction and one of the type constant can be combined with bitwise OR operator (|).
	 * @return int <p>Returns <code>0</code> if the <code>row_a[$column_key]</code> is equal to <code>row_b[$column_key]</code>, and <code>1</code> or <code>-1</code> if the former is greater or is smaller than the latter one, respectively, or vice versa if the <code>flag</code> is set to <b><code>DBX_CMP_DESC</code></b>.</p>
	 * @link https://php.net/manual/en/function.dbx-compare.php
	 * @see dbx_sort()
	 * @since PHP 4 >= 4.1.0, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_compare(array $row_a, array $row_b, string $column_key, int $flags = DBX_CMP_ASC | DBX_CMP_NATIVE): int {}

	/**
	 * Open a connection/database
	 * <p>Opens a connection to a database.</p>
	 * @param mixed $module <p>The <code>module</code> parameter can be either a string or a constant, though the latter form is preferred. The possible values are given below, but keep in mind that they only work if the module is actually loaded.</p> <p></p><ul> <li>  <b><code>DBX_MYSQL</code></b> or <code>"mysql"</code>  </li> <li>  <b><code>DBX_ODBC</code></b> or <code>"odbc"</code>  </li> <li>  <b><code>DBX_PGSQL</code></b> or <code>"pgsql"</code>  </li> <li>  <b><code>DBX_MSSQL</code></b> or <code>"mssql"</code>  </li> <li>  <b><code>DBX_FBSQL</code></b> or <code>"fbsql"</code>  </li> <li>  <b><code>DBX_SYBASECT</code></b> or <code>"sybase_ct"</code>  </li> <li>  <b><code>DBX_OCI8</code></b> or <code>"oci8"</code>  </li> <li>  <b><code>DBX_SQLITE</code></b> or <code>"sqlite"</code>  </li> </ul>
	 * @param string $host <p>The SQL server host</p>
	 * @param string $database <p>The database name</p>
	 * @param string $username <p>The username</p>
	 * @param string $password <p>The password</p>
	 * @param int $persistent <p>The <code>persistent</code> parameter can be set to <b><code>DBX_PERSISTENT</code></b>, if so, a persistent connection will be created.</p>
	 * @return object <p>Returns an object on success, <b><code>FALSE</code></b> on error. If a connection has been made but the database could not be selected, the connection is closed and <b><code>FALSE</code></b> is returned.</p><p>The returned object has three properties:</p>  database    It is the name of the currently selected database.    handle   <p>It is a valid handle for the connected database, and as such it can be used in module-specific functions (if required).</p>  <code> &lt;&#63;php<br>$link&nbsp;=&nbsp;dbx_connect(DBX_MYSQL,&nbsp;"localhost",&nbsp;"db",&nbsp;"username",&nbsp;"password");<br>mysql_close($link-&gt;handle);&nbsp;//&nbsp;dbx_close($link)&nbsp;would&nbsp;be&nbsp;better&nbsp;here<br>&#63;&gt;  </code>     module    It is used internally by dbx only, and is actually the module number mentioned above.
	 * @link https://php.net/manual/en/function.dbx-connect.php
	 * @see dbx_close()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_connect(mixed $module, string $host, string $database, string $username, string $password, int $persistent = NULL): object {}

	/**
	 * Report the error message of the latest function call in the module
	 * <p><b>dbx_error()</b> returns the last error message.</p>
	 * @param object $link_identifier <p>The DBX link object returned by <code>dbx_connect()</code></p>
	 * @return string <p>Returns a string containing the error message from the last function call of the abstracted module (e.g. mysql module). If there are multiple connections in the same module, just the last error is given. If there are connections on different modules, the latest error is returned for the module specified by the <code>link_identifier</code> parameter.</p>
	 * @link https://php.net/manual/en/function.dbx-error.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_error(object $link_identifier): string {}

	/**
	 * Escape a string so it can safely be used in an sql-statement
	 * <p>Escape the given string so that it can safely be used in an sql-statement.</p>
	 * @param object $link_identifier <p>The DBX link object returned by <code>dbx_connect()</code></p>
	 * @param string $text <p>The string to escape.</p>
	 * @return string <p>Returns the text, escaped where necessary (such as quotes, backslashes etc). On error, <b><code>NULL</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.dbx-escape-string.php
	 * @see dbx_query()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_escape_string(object $link_identifier, string $text): string {}

	/**
	 * Fetches rows from a query-result that had the DBX_RESULT_UNBUFFERED flag set
	 * <p><b>dbx_fetch_row()</b> fetches rows from a result identifier that had the <b><code>DBX_RESULT_UNBUFFERED</code></b> flag set.</p><p>When the <b><code>DBX_RESULT_UNBUFFERED</code></b> is not set in the query, <b>dbx_fetch_row()</b> will fail as all rows have already been fetched into the results data property.</p><p>As a side effect, the rows property of the query-result object is incremented for each successful call to <b>dbx_fetch_row()</b>.</p>
	 * @param object $result_identifier <p>A result set returned by <code>dbx_query()</code>.</p>
	 * @return mixed <p>Returns an object on success that contains the same information as any row would have in the <code>dbx_query()</code> result data property, including columns accessible by index or fieldname when the flags for <code>dbx_query()</code> were set that way.</p><p>Upon failure, returns <code>0</code> (e.g. when no more rows are available).</p>
	 * @link https://php.net/manual/en/function.dbx-fetch-row.php
	 * @see dbx_query()
	 * @since PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_fetch_row(object $result_identifier): mixed {}

	/**
	 * Send a query and fetch all results (if any)
	 * <p>Sends a query and fetch all results.</p>
	 * @param object $link_identifier <p>The DBX link object returned by <code>dbx_connect()</code></p>
	 * @param string $sql_statement <p>SQL statement.</p> <p>Data inside the query should be properly escaped.</p>
	 * @param int $flags <p>The <code>flags</code> parameter is used to control the amount of information that is returned. It may be any combination of the following constants with the bitwise OR operator (|). The DBX_COLNAMES_&#42; flags override the dbx.colnames_case setting from php.ini.</p>  <b><code>DBX_RESULT_INDEX</code></b>    It is <i>always</i> set, that is, the returned object has a data property which is a 2 dimensional array indexed numerically. For example, in the expression <code>data[2][3]</code> <code>2</code> stands for the row (or record) number and <code>3</code> stands for the column (or field) number. The first row and column are indexed at 0.   If <b><code>DBX_RESULT_ASSOC</code></b> is also specified, the returning object contains the information related to <b><code>DBX_RESULT_INFO</code></b> too, even if it was not specified.    <b><code>DBX_RESULT_INFO</code></b>    It provides info about columns, such as field names and field types.    <b><code>DBX_RESULT_ASSOC</code></b>    It effects that the field values can be accessed with the respective column names used as keys to the returned object's data property.   Associated results are actually references to the numerically indexed data, so modifying <code>data[0][0]</code> causes that <code>data[0]['field_name_for_first_column']</code> is modified as well.    <b><code>DBX_RESULT_UNBUFFERED</code></b>    This flag will not create the data property, and the rows property will initially be 0. Use this flag for large datasets, and use <code>dbx_fetch_row()</code> to retrieve the results row by row.   The <code>dbx_fetch_row()</code> function will return rows that are conformant to the flags set with this query. Incidentally, it will also update the rows each time it is called.    <b><code>DBX_COLNAMES_UNCHANGED</code></b>    The case of the returned column names will not be changed.    <b><code>DBX_COLNAMES_UPPERCASE</code></b>    The case of the returned column names will be changed to uppercase.    <b><code>DBX_COLNAMES_LOWERCASE</code></b>    The case of the returned column names will be changed to lowercase.    Note that <b><code>DBX_RESULT_INDEX</code></b> is always used, regardless of the actual value of <code>flags</code> parameter. This means that only the following combinations are effective: <ul> <li>  <b><code>DBX_RESULT_INDEX</code></b>  </li> <li>  <b><code>DBX_RESULT_INDEX</code></b> | <b><code>DBX_RESULT_INFO</code></b>  </li> <li>  <b><code>DBX_RESULT_INDEX</code></b> | <b><code>DBX_RESULT_INFO</code></b> | <b><code>DBX_RESULT_ASSOC</code></b> - this is the default, if <code>flags</code> is not specified.  </li> </ul>
	 * @return mixed <p><b>dbx_query()</b> returns an object or <code>1</code> on success, and <code>0</code> on failure. The result object is returned only if the query given in <code>sql_statement</code> produces a result set (i.e. a SELECT query, even if the result set is empty).</p><p>The returned object has four or five properties depending on <code>flags</code>:</p>  handle   <p>It is a valid handle for the connected database, and as such it can be used in module specific functions (if required).</p>  <code> &lt;&#63;php<br>$result&nbsp;=&nbsp;dbx_query($link,&nbsp;"SELECT&nbsp;id&nbsp;FROM&nbsp;table");<br>mysql_field_len($result-&gt;handle,&nbsp;0);<br>&#63;&gt;  </code>     cols and rows   <p>These contain the number of columns (or fields) and rows (or records) respectively.</p>  <code> &lt;&#63;php<br>$result&nbsp;=&nbsp;dbx_query($link,&nbsp;'SELECT&nbsp;id&nbsp;FROM&nbsp;table');<br>echo&nbsp;$result-&gt;rows;&nbsp;//&nbsp;number&nbsp;of&nbsp;records<br>echo&nbsp;$result-&gt;cols;&nbsp;//&nbsp;number&nbsp;of&nbsp;fields&nbsp;<br>&#63;&gt;  </code>     info (optional)    It is returned only if either <b><code>DBX_RESULT_INFO</code></b> or <b><code>DBX_RESULT_ASSOC</code></b> is specified in the <code>flags</code> parameter. It is a 2 dimensional array, that has two named rows (<code>name</code> and <code>type</code>) to retrieve column information.   <p><b>Example #1 lists each field's name and type</b></p>  <code> &lt;&#63;php<br>$result&nbsp;=&nbsp;dbx_query($link,&nbsp;'SELECT&nbsp;id&nbsp;FROM&nbsp;table',<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DBX_RESULT_INDEX&nbsp;|&nbsp;DBX_RESULT_INFO);<br><br>for&nbsp;($i&nbsp;=&nbsp;0;&nbsp;$i&nbsp;&lt;&nbsp;$result-&gt;cols;&nbsp;$i++&nbsp;)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$result-&gt;info['name'][$i]&nbsp;.&nbsp;"\n";<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$result-&gt;info['type'][$i]&nbsp;.&nbsp;"\n";&nbsp;&nbsp;<br>}<br>&#63;&gt;  </code>     data    This property contains the actual resulting data, possibly associated with column names as well depending on <code>flags</code>. If <b><code>DBX_RESULT_ASSOC</code></b> is set, it is possible to use <code>$result-&gt;data[2]["field_name"]</code>.   <p><b>Example #2 outputs the content of data property into HTML table</b></p>  <code> &lt;&#63;php<br>$result&nbsp;=&nbsp;dbx_query($link,&nbsp;'SELECT&nbsp;id,&nbsp;parentid,&nbsp;description&nbsp;FROM&nbsp;table');<br><br>echo&nbsp;"&lt;table&gt;\n";<br>foreach&nbsp;($result-&gt;data&nbsp;as&nbsp;$row)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;tr&gt;\n";<br>&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;($row&nbsp;as&nbsp;$field)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;td&gt;$field&lt;/td&gt;";<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;/tr&gt;\n";<br>}<br>echo&nbsp;"&lt;/table&gt;\n";<br>&#63;&gt;  </code>    <p><b>Example #3 How to handle UNBUFFERED queries</b></p>  <code> &lt;&#63;php<br><br>$result&nbsp;=&nbsp;dbx_query&nbsp;($link,&nbsp;'SELECT&nbsp;id,&nbsp;parentid,&nbsp;description&nbsp;FROM&nbsp;table',&nbsp;DBX_RESULT_UNBUFFERED);<br><br>echo&nbsp;"&lt;table&gt;\n";<br>while&nbsp;($row&nbsp;=&nbsp;dbx_fetch_row($result))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;tr&gt;\n";<br>&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;($row&nbsp;as&nbsp;$field)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;td&gt;$field&lt;/td&gt;";<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"&lt;/tr&gt;\n";<br>}<br>echo&nbsp;"&lt;/table&gt;\n";<br><br>&#63;&gt;  </code>
	 * @link https://php.net/manual/en/function.dbx-query.php
	 * @see dbx_escape_string(), dbx_fetch_row(), dbx_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_query(object $link_identifier, string $sql_statement, int $flags = NULL): mixed {}

	/**
	 * Sort a result from a dbx_query by a custom sort function
	 * <p>Sort a result from a <code>dbx_query()</code> call with a custom sort function.</p>
	 * @param object $result <p>A result set returned by <code>dbx_query()</code>.</p>
	 * @param string $user_compare_function <p>The user-defined comparison function. It must accept two arguments and return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbx-sort.php
	 * @see dbx_compare()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_sort(object $result, string $user_compare_function): bool {}

}
