<?php



namespace {

	/**
	 * Add various search limits
	 * <p><b>udm_add_search_limit()</b> adds search restrictions.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param int $var <p>Defines the parameter, indicating limits. Possible <code>var</code> values:</p><ul> <li>  <b><code>UDM_LIMIT_URL</code></b> - defines document URL limitations to limit the search through subsection of the database. It supports SQL % and _ LIKE wildcards, where % matches any number of characters, even zero characters, and _ matches exactly one character. E.g. http://www.example.___/catalog may stand for http://www.example.com/catalog and http://www.example.net/catalog.  </li> <li>  <b><code>UDM_LIMIT_TAG</code></b> - defines site TAG limitations. In indexer-conf you can assign specific TAGs to various sites and parts of a site. Tags in mnoGoSearch 3.1.x are lines, that may contain metasymbols % and _. Metasymbols allow searching among groups of tags. E.g. there are links with tags ABCD and ABCE, and search restriction is by ABC_ - the search will be made among both of the tags.  </li> <li>  <b><code>UDM_LIMIT_LANG</code></b> - defines document language limitations.  </li> <li>  <b><code>UDM_LIMIT_CAT</code></b> - defines document category limitations. Categories are similar to tag feature, but nested. So you can have one category inside another and so on. You have to use two characters for each level. Use a hex number going from 0-F or a 36 base number going from 0-Z. Therefore a top-level category like 'Auto' would be 01. If it has a subcategory like 'Ford', then it would be 01 (the parent category) and then 'Ford' which we will give 01. Put those together and you get 0101. If 'Auto' had another subcategory named 'VW', then it's id would be 01 because it belongs to the 'Ford' category and then 02 because it's the next category. So it's id would be 0102. If VW had a sub category called 'Engine' then it's id would start at 01 again and it would get the 'VW' id 02 and 'Auto' id of 01, making it 010201. If you want to search for sites under that category then you pass it cat=010201 in the URL.  </li> <li> <p><b><code>UDM_LIMIT_DATE</code></b> - defines limitation by date the document was modified.</p> <p>Format of parameter value: a string with first character &lt; or &gt;, then with no space - date in unixtime format, for example:</p> <p></p>  <code> &lt;&#63;php<br>udm_add_search_limit($udm,&nbsp;UDM_LIMIT_DATE,&nbsp;"&amp;lt;908012006");<br>&#63;&gt;  </code>   <p>If &gt; character is used, then the search will be restricted to those documents having a modification date greater than entered, if &lt;, then smaller.</p> </li> </ul>
	 * @param string $val <p>Defines the value of the current parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-add-search-limit.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_add_search_limit($agent, int $var, string $val): bool {}

	/**
	 * Allocate mnoGoSearch session
	 * <p>Allocate a mnoGoSearch session.</p>
	 * @param string $dbaddr <p><code>dbaddr</code> - URL-style database description, with options (type, host, database name, port, user and password) to connect to SQL database. Do not matter for built-in text files support. Format for <code>dbaddr</code>: <i>DBType:[//[DBUser[:DBPass]@]DBHost[:DBPort]]/DBName/</i>. Currently supported DBType values are: mysql, pgsql, msql, solid, mssql, oracle, and ibase. Actually, it does not matter for native libraries support, but ODBC users should specify one of the supported values. If your database type is not supported, you may use <i>unknown</i> instead.</p>
	 * @param string $dbmode <p><code>dbmode</code> - You may select the SQL database mode of words storage. Possible values of <code>dbmode</code> are: <i>single</i>, <i>multi</i>, <i>crc</i>, or <i>crc-multi</i>. When <i>single</i> is specified, all words are stored in the same table. If <i>multi </i> is selected, words will be located in different tables depending of their lengths. "multi" mode is usually faster, but requires more tables in the database. If "crc" mode is selected, mnoGoSearch will store 32 bit integer word IDs calculated by CRC32 algorithm instead of words. This mode requires less disk space and it is faster comparing with "single" and "multi" modes. <i>crc-multi</i> uses the same storage structure with the "crc" mode, but also stores words in different tables depending on words lengths like in "multi" mode.</p>
	 * @return resource <p>Returns a mnogosearch agent identifier on success, <b><code>FALSE</code></b> on failure. This function creates a session with database parameters.</p>
	 * @link http://php.net/manual/en/function.udm-alloc-agent.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_alloc_agent(string $dbaddr, string $dbmode = NULL) {}

	/**
	 * Allocate mnoGoSearch session
	 * <p><b>udm_alloc_agent_array()</b> will create an agent with multiple database connections.</p>
	 * @param array $databases <p>The array <code>databases</code> must contain one database URL per element, analog to the first parameter of <code>udm_alloc_agent()</code>.</p>
	 * @return resource <p>Returns a resource link identifier on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-alloc-agent-array.php
	 * @see udm_alloc_agent()
	 * @since PHP 4 >= 4.3.3, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_alloc_agent_array(array $databases) {}

	/**
	 * Get mnoGoSearch API version
	 * <p>Gets the mnoGoSearch API version.</p><p>This function allows the user to identify which API functions are available, e.g. <code>udm_get_doc_count()</code> function is only available in mnoGoSearch 3.1.11 or later.</p>
	 * @return int <p><b>udm_api_version()</b> returns the mnoGoSearch API version number. E.g. if mnoGoSearch 3.1.10 API is used, this function will return <i>30110</i>.</p>
	 * @link http://php.net/manual/en/function.udm-api-version.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_api_version(): int {}

	/**
	 * Get all the categories on the same level with the current one
	 * <p>Gets all the categories on the same level with the current one.</p><p>The function can be useful for developing categories tree browser.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param string $category
	 * @return array <p>Returns an array listing all categories of the same level as the current <code>category</code> in the categories tree.</p><p>The returned array consists of pairs. Elements with even index numbers contain the category paths, odd elements contain the corresponding category names.</p> <pre>$array[0] will contain '020300' $array[1] will contain 'Audi' $array[2] will contain '020301' $array[3] will contain 'BMW' $array[4] will contain '020302' $array[5] will contain 'Opel' ... etc.</pre>
	 * @link http://php.net/manual/en/function.udm-cat-list.php
	 * @see udm_cat_path()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_cat_list($agent, string $category): array {}

	/**
	 * Get the path to the current category
	 * <p>Returns an array describing the path in the categories tree from the tree root to the current one, specified by <code>category</code>.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param string $category
	 * @return array <p>The returned array consists of pairs. Elements with even index numbers contain the category paths, odd elements contain the corresponding category names.</p><p>For example, the call <i>$array=udm_cat_path($agent, '02031D');</i> may return the following array:</p> <pre> $array[0] will contain '' $array[1] will contain 'Root' $array[2] will contain '02' $array[3] will contain 'Sport' $array[4] will contain '0203' $array[5] will contain 'Auto' $array[4] will contain '02031D' $array[5] will contain 'Ferrari' </pre>
	 * @link http://php.net/manual/en/function.udm-cat-path.php
	 * @see udm_cat_list()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_cat_path($agent, string $category): array {}

	/**
	 * Check if the given charset is known to mnogosearch
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $agent
	 * @param string $charset
	 * @return bool
	 * @link http://php.net/manual/en/function.udm-check-charset.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_check_charset($agent, string $charset): bool {}

	/**
	 * Clear all mnoGoSearch search restrictions
	 * <p><b>udm_clear_search_limits()</b> resets defined search limitations.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.udm-clear-search-limits.php
	 * @see udm_add_search_limit()
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_clear_search_limits($agent): bool {}

	/**
	 * Return CRC32 checksum of given string
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $agent
	 * @param string $str
	 * @return int
	 * @link http://php.net/manual/en/function.udm-crc32.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_crc32($agent, string $str): int {}

	/**
	 * Get mnoGoSearch error number
	 * <p>Receiving numeric agent error code.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @return int <p>Returns the mnoGoSearch error number, zero if no error.</p>
	 * @link http://php.net/manual/en/function.udm-errno.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_errno($agent): int {}

	/**
	 * Get mnoGoSearch error message
	 * <p>Gets the agent error message.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @return string <p><b>udm_error()</b> returns mnoGoSearch error message, empty string if no error.</p>
	 * @link http://php.net/manual/en/function.udm-error.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_error($agent): string {}

	/**
	 * Perform search
	 * <p>Performs a search.</p><p>The search itself. The first argument - session, the next one - query itself. To find something just type words you want to find and press SUBMIT button. For example, "mysql odbc". You should not use quotes " in query, they are written here only to divide a query from other text. mnoGoSearch will find all documents that contain word "mysql" and/or word "odbc". Best documents having bigger weights will be displayed first. If you use search mode ALL, search will return documents that contain both (or more) words you entered. In case you use mode ANY, the search will return list of documents that contain any of the words you entered. If you want more advanced results you may use query language. You should select "bool" match mode in the search from.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param string $query <p>mnoGoSearch understands the following boolean operators:</p> <p>&amp; - logical AND. For example, "mysql &amp; odbc". mnoGoSearch will find any URLs that contain both "mysql" and "odbc".</p> <p>| - logical OR. For example "mysql|odbc". mnoGoSearch will find any URLs, that contain word "mysql" or word "odbc".</p> <p>~ - logical NOT. For example "mysql &amp; ~odbc". mnoGoSearch will find URLs that contain word "mysql" and do not contain word "odbc" at the same time. Note that ~ just excludes given word from results. Query "~odbc" will find nothing!</p> <p>() - group command to compose more complex queries. For example "(mysql | msql) &amp; ~postgres". Query language is simple and powerful at the same time. Just consider query as usual boolean expression.</p>
	 * @return resource <p>Returns a result link identifier on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-find.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_find($agent, string $query) {}

	/**
	 * Free mnoGoSearch session
	 * <p>Freeing up memory allocated for agent session.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @return int <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-free-agent.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_free_agent($agent): int {}

	/**
	 * Free memory allocated for ispell data
	 * <p>Frees the memory allocated for ispell data.</p>
	 * @param int $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @return bool <p><b>udm_free_ispell_data()</b> always returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.udm-free-ispell-data.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_free_ispell_data(int $agent): bool {}

	/**
	 * Free mnoGoSearch result
	 * <p>Freeing up memory allocated for results.</p>
	 * @param resource $res <p>A link to a result identifier, received after call to <code>udm_find()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-free-res.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_free_res($res): bool {}

	/**
	 * Get total number of documents in database
	 * <p><b>udm_get_doc_count()</b> returns the number of documents in the database.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @return int <p>Returns the number of documents.</p>
	 * @link http://php.net/manual/en/function.udm-get-doc-count.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_get_doc_count($agent): int {}

	/**
	 * Fetch a result field
	 * <p>Fetch a mnoGoSearch result field.</p>
	 * @param resource $res <p><code>res</code> - a link to result identifier, received after call to <code>udm_find()</code>.</p>
	 * @param int $row <p><code>row</code> - the number of the link on the current page. May have values from 0 to <code>UDM_PARAM_NUM_ROWS-1</code>.</p>
	 * @param int $field <p><code>field</code> - field identifier, may have the following values:</p><ul> <li>  <b><code>UDM_FIELD_URL</code></b> - document URL field  </li> <li>  <b><code>UDM_FIELD_CONTENT</code></b> - document <i>Content-type</i> field (for example, <i>text/html</i>).  </li> <li>  <b><code>UDM_FIELD_CATEGORY</code></b> - document category field. Use <code>udm_cat_path()</code> to get full path to current category from the categories tree root. (This parameter is available only in PHP 4.0.6 or later).  </li> <li>  <b><code>UDM_FIELD_TITLE</code></b> - document title field.  </li> <li>  <b><code>UDM_FIELD_KEYWORDS</code></b> - document keywords field (from META KEYWORDS tag).  </li> <li>  <b><code>UDM_FIELD_DESC</code></b> - document description field (from META DESCRIPTION tag).  </li> <li>  <b><code>UDM_FIELD_TEXT</code></b> - document body text (the first couple of lines to give an idea of what the document is about).  </li> <li>  <b><code>UDM_FIELD_SIZE</code></b> - document size.  </li> <li>  <b><code>UDM_FIELD_URLID</code></b> - unique URL ID of the link.  </li> <li>  <b><code>UDM_FIELD_RATING</code></b> - page rating (as calculated by mnoGoSearch).  </li> <li>  <b><code>UDM_FIELD_MODIFIED</code></b> - last-modified field in unixtime format.  </li> <li>  <b><code>UDM_FIELD_ORDER</code></b> - the number of the current document in set of found documents.  </li> <li>  <b><code>UDM_FIELD_CRC</code></b> - document CRC.  </li> </ul>
	 * @return string <p><b>udm_get_res_field()</b> returns result field value on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.udm-get-res-field.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_get_res_field($res, int $row, int $field): string {}

	/**
	 * Get mnoGoSearch result parameters
	 * <p>Gets the mnoGoSearch result parameters.</p>
	 * @param resource $res <p><code>res</code> - a link to result identifier, received after call to <code>udm_find()</code>.</p>
	 * @param int $param <p><code>param</code> - parameter identifier, may have the following values:</p><ul> <li>  UDM_PARAM_NUM_ROWS - number of received found links on the current page. It is equal to UDM_PARAM_PAGE_SIZE for all search pages, on the last page - the rest of links.  </li> <li>  UDM_PARAM_FOUND - total number of results matching the query.  </li> <li>  UDM_PARAM_WORDINFO - information on the words found. E.g. search for "a good book" will return "a: stopword, good:5637, book: 120"  </li> <li>  UDM_PARAM_SEARCHTIME - search time in seconds.  </li> <li>  UDM_PARAM_FIRST_DOC - the number of the first document displayed on current page.  </li> <li>  UDM_PARAM_LAST_DOC - the number of the last document displayed on current page.  </li> </ul>
	 * @return string <p><b>udm_get_res_param()</b> returns result parameter value on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.udm-get-res-param.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_get_res_param($res, int $param): string {}

	/**
	 * Return Hash32 checksum of given string
	 * <p><b>udm_hash32()</b> will take a string <code>str</code> and return a quite unique 32-bit hash number from it.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param string $str <p>The input string.</p>
	 * @return int <p>Returns a 32-bit hash number.</p>
	 * @link http://php.net/manual/en/function.udm-hash32.php
	 * @see udm_alloc_agent()
	 * @since PHP 4 >= 4.3.3, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_hash32($agent, string $str): int {}

	/**
	 * Load ispell data
	 * <p><b>udm_load_ispell_data()</b> loads ispell data.</p><p>After using this function to free memory allocated for ispell data, please use <code>udm_free_ispell_data()</code>, even if you use <b><code>UDM_ISPELL_TYPE_SERVER</code></b> mode.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param int $var <p>Indicates the source for ispell data. May have the following values:</p><ul> <li>  <b><code>UDM_ISPELL_TYPE_DB</code></b> - indicates that ispell data should be loaded from SQL. In this case, parameters <code>val1</code> and <code>val2</code> are ignored and should be left blank. <code>flag</code> should be equal to <i>1</i>.  <p><b>Note</b>:</p><p><code>flag</code> indicates that after loading ispell data from defined source it should be sorted (it is necessary for correct functioning of ispell). In case of loading ispell data from files there may be several calls to <b>udm_load_ispell_data()</b>, and there is no sense to sort data after every call, but only after the last one. Since in db mode all the data is loaded by one call, this parameter should have the value <i>1</i>. In this mode in case of error, e.g. if ispell tables are absent, the function will return <b><code>FALSE</code></b> and code and error message will be accessible through <code>udm_error()</code> and <code>udm_errno()</code>.</p>  </li> <li> <p><b><code>UDM_ISPELL_TYPE_AFFIX</code></b> - indicates that ispell data should be loaded from file and initiates loading affixes file. In this case <code>val1</code> defines double letter language code for which affixes are loaded, and <code>val2</code> - file path. Please note, that if a relative path entered, the module looks for the file not in <b><code>UDM_CONF_DIR</code></b>, but in relation to current path, i.e. to the path where the script is executed. In case of error in this mode, e.g. if file is absent, the function will return <b><code>FALSE</code></b>, and an error message will be displayed. Error message text cannot be accessed through <code>udm_error()</code> and <code>udm_errno()</code>, since those functions can only return messages associated with SQL. Please, see <code>flag</code> parameter description in <b><code>UDM_ISPELL_TYPE_DB</code></b>.</p> <p></p> <p><b>Example #1 <b>udm_load_ispell_data()</b> example</b></p>  <code> &lt;&#63;php<br>if&nbsp;((!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_AFFIX,&nbsp;'en',&nbsp;'/opt/ispell/en.aff',&nbsp;0))&nbsp;||<br>&nbsp;&nbsp;&nbsp;&nbsp;(!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_AFFIX,&nbsp;'ru',&nbsp;'/opt/ispell/ru.aff',&nbsp;0))&nbsp;||<br>&nbsp;&nbsp;&nbsp;&nbsp;(!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_SPELL,&nbsp;'en',&nbsp;'/opt/ispell/en.dict',&nbsp;0))&nbsp;||<br>&nbsp;&nbsp;&nbsp;&nbsp;(!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_SPELL,&nbsp;'ru',&nbsp;'/opt/ispell/ru.dict',&nbsp;1)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}<br>&#63;&gt;  </code>   <p><b>Note</b>:</p><p><code>flag</code> is equal to <i>1</i> only in the last call.</p>  </li> <li> <p><b><code>UDM_ISPELL_TYPE_SPELL</code></b> - indicates that ispell data should be loaded from file and initiates loading of ispell dictionary file. In this case <code>val1</code> defines double letter language code for which affixes are loaded, and <code>val2</code> - file path. Please note, that if a relative path entered, the module looks for the file not in <b><code>UDM_CONF_DIR</code></b>, but in relation to current path, i.e. to the path where the script is executed. In case of error in this mode, e.g. if file is absent, the function will return <b><code>FALSE</code></b>, and an error message will be displayed. Error message text cannot be accessed through <code>udm_error()</code> and <code>udm_errno()</code>, since those functions can only return messages associated with SQL. Please, see <code>flag</code> parameter description in <b><code>UDM_ISPELL_TYPE_DB</code></b>.</p>   <code> &lt;&#63;php<br>if&nbsp;((!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_AFFIX,&nbsp;'en',&nbsp;'/opt/ispell/en.aff',&nbsp;0))&nbsp;||<br>&nbsp;&nbsp;&nbsp;(!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_AFFIX,&nbsp;'ru',&nbsp;'/opt/ispell/ru.aff',&nbsp;0))&nbsp;||<br>&nbsp;&nbsp;&nbsp;(!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_SPELL,&nbsp;'en',&nbsp;'/opt/ispell/en.dict',&nbsp;0))&nbsp;||<br>&nbsp;&nbsp;&nbsp;(!&nbsp;udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_SPELL,&nbsp;'ru',&nbsp;'/opt/ispell/ru.dict',&nbsp;1)))&nbsp;{<br>&nbsp;exit;<br>&nbsp;}<br>&#63;&gt;  </code>   <p><b>Note</b>:</p><p><code>flag</code> is equal to <i>1</i> only in the last call.</p>  </li> <li> <p><b><code>UDM_ISPELL_TYPE_SERVER</code></b> - enables spell server support. <code>val1</code> parameter indicates address of the host running spell server. <code>val2</code> ` is not used yet, but in future releases it is going to indicate number of port used by spell server. <code>flag</code> parameter in this case is not needed since ispell data is stored on spellserver already sorted.</p> <p>Spelld server reads spell-data from a separate configuration file (/usr/local/mnogosearch/etc/spelld.conf by default), sorts it and stores in memory. With clients server communicates in two ways: to indexer all the data is transferred (so that indexer starts faster), from search.cgi server receives word to normalize and then passes over to client (search.cgi) list of normalized word forms. This allows fastest, compared to db and text modes processing of search queries (by omitting loading and sorting all the spell data).</p> <p><b>udm_load_ispell_data()</b> function in <b><code>UDM_ISPELL_TYPE_SERVER</code></b> mode does not actually load ispell data, but only defines server address. In fact, server is automatically used by <code>udm_find()</code> function when performing search. In case of errors, e.g. if spellserver is not running or invalid host indicated, there are no messages returned and ispell conversion does not work.</p> <p><b>Note</b>:</p><p>This function is available in mnoGoSearch 3.1.12 or later.</p>  Example:   <code> &lt;&#63;php<br>if&nbsp;(!udm_load_ispell_data($udm,&nbsp;UDM_ISPELL_TYPE_SERVER,&nbsp;'',&nbsp;'',&nbsp;1))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"Error&nbsp;loading&nbsp;ispell&nbsp;data&nbsp;from&nbsp;server&lt;br&nbsp;/&gt;\n";<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}<br>&#63;&gt;  </code>   </li> </ul> <p>The fastest mode is <b><code>UDM_ISPELL_TYPE_SERVER</code></b>. <b><code>UDM_ISPELL_TYPE_TEXT</code></b> is slower and <b><code>UDM_ISPELL_TYPE_DB</code></b> is the slowest. The above pattern is <b><code>TRUE</code></b> for mnoGoSearch 3.1.10 - 3.1.11. It is planned to speed up DB mode in future versions and it is going to be faster than TEXT mode.</p>
	 * @param string $val1
	 * @param string $val2
	 * @param int $flag
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-load-ispell-data.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_load_ispell_data($agent, int $var, string $val1, string $val2, int $flag): bool {}

	/**
	 * Set mnoGoSearch agent session parameters
	 * <p>Defines mnoGoSearch session parameters.</p>
	 * @param resource $agent <p>A link to Agent, received after call to <code>udm_alloc_agent()</code>.</p>
	 * @param int $var <p>The following parameters and their values are available:</p><ul> <li>  <b><code>UDM_PARAM_PAGE_NUM</code></b> - used to choose search results page number (results are returned by pages beginning from 0, with <b><code>UDM_PARAM_PAGE_SIZE</code></b> results per page).  </li> <li>  <b><code>UDM_PARAM_PAGE_SIZE</code></b> - number of search results displayed on one page.  </li> <li>  <b><code>UDM_PARAM_SEARCH_MODE</code></b> - search mode. The following values available: <b><code>UDM_MODE_ALL</code></b> - search for all words; <b><code>UDM_MODE_ANY</code></b> - search for any word; <b><code>UDM_MODE_PHRASE</code></b> - phrase search; <b><code>UDM_MODE_BOOL</code></b> - boolean search. See <code>udm_find()</code> for details on boolean search.  </li> <li>  <b><code>UDM_PARAM_CACHE_MODE</code></b> - turns on or off search result cache mode. When enabled, the search engine will store search results to disk. In case a similar search is performed later, the engine will take results from the cache for faster performance. Available values: <b><code>UDM_CACHE_ENABLED</code></b>, <b><code>UDM_CACHE_DISABLED</code></b>.  </li> <li>  <b><code>UDM_PARAM_TRACK_MODE</code></b> - turns on or off trackquery mode. Since version 3.1.2 mnoGoSearch has a query tracking support. Note that tracking is implemented in SQL version only and not available in built-in database. To use tracking, you have to create tables for tracking support. For MySQL, use create/mysql/track.txt. When doing a search, front-end uses those tables to store query words, a number of found documents and current Unix timestamp in seconds. Available values: <b><code>UDM_TRACK_ENABLED</code></b>, <b><code>UDM_TRACK_DISABLED</code></b>.  </li> <li>  <b><code>UDM_PARAM_PHRASE_MODE</code></b> - defines whether index database using phrases ("phrase" parameter in indexer.conf). Possible values: <b><code>UDM_PHRASE_ENABLED</code></b> and <b><code>UDM_PHRASE_DISABLED</code></b>. Please note, that if phrase search is enabled (<b><code>UDM_PHRASE_ENABLED</code></b>), it is still possible to do search in any mode (<i>ANY</i>, <i>ALL</i>, <i>BOOL</i> or <i>PHRASE</i>). In 3.1.10 version of mnoGoSearch phrase search is supported only in sql and built-in database modes, while beginning with 3.1.11 phrases are supported in cachemode as well.   Examples of phrase search:   <i>"Arizona desert"</i> - This query returns all indexed documents that contain "Arizona desert" as a phrase. Notice that you need to put double quotes around the phrase  </li> <li>  <b><code>UDM_PARAM_CHARSET</code></b> - defines local charset. Available values: set of charsets supported by mnoGoSearch, e.g. koi8-r, cp1251, ...  </li> <li>  <b><code>UDM_PARAM_STOPFILE</code></b> - Defines name and path to stopwords file. (There is a small difference with mnoGoSearch - while in mnoGoSearch if relative path or no path entered, it looks for this file in relation to <b><code>UDM_CONF_DIR</code></b>, the module looks for the file in relation to current path, i.e. to the path where the PHP script is executed.)  </li> <li>  <b><code>UDM_PARAM_STOPTABLE</code></b> - Load stop words from the given SQL table. You may use several StopwordTable commands. This command has no effect when compiled without SQL database support.  </li> <li>  <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b> - represents weight factors for specific document parts. Currently body, title, keywords, description, url are supported. To activate this feature please use degrees of 2 in &#42;Weight commands of the indexer.conf. Let's imagine that we have these weights:  <pre> URLWeight 1 BodyWeight 2 TitleWeight 4 KeywordWeight 8 DescWeight 16 </pre>  As far as indexer uses bit OR operation for word weights when some word presents several time in the same document, it is possible at search time to detect word appearance in different document parts. Word which appears only in the body will have 00000010 aggregate weight (in binary notation). Word used in all document parts will have 00011111 aggregate weight.   This parameter's value is a string of hex digits <i>ABCDE</i>. Each digit is a factor for corresponding bit in word weight. For the given above weights configuration:  <pre> E is a factor for weight 1 (URL Weight bit) D is a factor for weight 2 (BodyWeight bit) C is a factor for weight 4 (TitleWeight bit) B is a factor for weight 8 (KeywordWeight bit) A is a factor for weight 16 (DescWeight bit) </pre>  Examples:   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=00001 will search through URLs only.   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=00100 will search through Titles only.   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=11100 will search through Title,Keywords,Description but not through URL and Body.   <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b>=F9421 will search through:  <pre> Description with factor 15 (F hex) Keywords with factor 9 Title with factor 4 Body with factor 2 URL with factor 1 </pre>  If <b><code>UDM_PARAM_WEIGHT_FACTOR</code></b> variable is omitted, original weight value is taken to sort results. For a given above weight configuration it means that document description has a most big weight 16.  </li> <li>  <b><code>UDM_PARAM_WORD_MATCH</code></b> - word match. You may use this parameter to choose word match type. This feature works only in "single" and "multi" modes using SQL based and built-in database. It does not work in cachemode and other modes since they use word CRC and do not support substring search. Available values:  <b><code>UDM_MATCH_BEGIN</code></b> - word beginning match; <b><code>UDM_MATCH_END</code></b> - word ending match; <b><code>UDM_MATCH_WORD</code></b> - whole word match; <b><code>UDM_MATCH_SUBSTR</code></b> - word substring match. </li> <li>  <b><code>UDM_PARAM_MIN_WORD_LEN</code></b> - defines minimal word length. Any word shorter this limit is considered to be a stopword. Please note that this parameter value is inclusive, i.e. if <b><code>UDM_PARAM_MIN_WORD_LEN</code></b>=3, a word 3 characters long will not be considered a stopword, while a word 2 characters long will be. Default value is 1.  </li> <li>  <b><code>UDM_PARAM_ISPELL_PREFIXES</code></b> - Possible values: <b><code>UDM_PREFIXES_ENABLED</code></b> and <b><code>UDM_PREFIXES_DISABLED</code></b>, that respectively enable or disable using prefixes. E.g. if a word "tested" is in search query, also words like "test", "testing", etc. Only suffixes are supported by default. Prefixes usually change word meanings, for example if somebody is searching for the word "tested" one hardly wants "untested" to be found. Prefixes support may also be found useful for site's spelling checking purposes. In order to enable ispell, you have to load ispell data with <code>udm_load_ispell_data()</code>.  </li> <li>  <b><code>UDM_PARAM_CROSS_WORDS</code></b> - enables or disables crosswords support. Possible values: <b><code>UDM_CROSS_WORDS_ENABLED</code></b> and <b><code>UDM_CROSS_WORDS_DISABLED</code></b>.   The crosswords feature allows to assign words between &lt;a href="xxx"&gt; and &lt;/a&gt; also to a document this link leads to. It works in SQL database mode and is not supported in built-in database and Cachemode.  </li> <li>  <b><code>UDM_PARAM_VARDIR</code></b> - specifies a custom path to directory where indexer stores data when using built-in database and in cache mode. By default <i>/var</i> directory of mnoGoSearch installation is used. Can have only string values.  </li> </ul>
	 * @param string $val
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.udm-set-agent-param.php
	 * @since PHP 4 >= 4.0.5, PHP 5 < 5.1.0, PECL mnogosearch >= 1.0.0
	 */
	function udm_set_agent_param($agent, int $var, string $val): bool {}

	define('UDM_CACHE_DISABLED', null);

	define('UDM_CACHE_ENABLED', null);

	define('UDM_CROSS_WORDS_DISABLED', null);

	define('UDM_CROSS_WORDS_ENABLED', null);

	define('UDM_CROSSWORDS_DISABLED', null);

	define('UDM_CROSSWORDS_ENABLED', null);

	define('UDM_FIELD_CATEGORY', null);

	define('UDM_FIELD_CHARSET', null);

	define('UDM_FIELD_CONTENT', null);

	define('UDM_FIELD_CRC', null);

	define('UDM_FIELD_DESC', null);

	define('UDM_FIELD_DESCRIPTION', null);

	define('UDM_FIELD_KEYWORDS', null);

	define('UDM_FIELD_LANG', null);

	define('UDM_FIELD_MODIFIED', null);

	define('UDM_FIELD_ORDER', null);

	define('UDM_FIELD_RATING', null);

	define('UDM_FIELD_SCORE', null);

	define('UDM_FIELD_SIZE', null);

	define('UDM_FIELD_TEXT', null);

	define('UDM_FIELD_TITLE', null);

	define('UDM_FIELD_URL', null);

	define('UDM_FIELD_URLID', null);

	define('UDM_ISPELL_PREFIX_DISABLED', null);

	define('UDM_ISPELL_PREFIX_ENABLED', null);

	define('UDM_ISPELL_PREFIXES_DISABLED', null);

	define('UDM_ISPELL_PREFIXES_ENABLED', null);

	define('UDM_ISPELL_TYPE_AFFIX', null);

	define('UDM_ISPELL_TYPE_DB', null);

	define('UDM_ISPELL_TYPE_SERVER', null);

	define('UDM_ISPELL_TYPE_SPELL', null);

	define('UDM_LIMIT_CAT', null);

	define('UDM_LIMIT_DATE', null);

	define('UDM_LIMIT_LANG', null);

	define('UDM_LIMIT_TAG', null);

	define('UDM_LIMIT_URL', null);

	define('UDM_MATCH_BEGIN', null);

	define('UDM_MATCH_END', null);

	define('UDM_MATCH_SUBSTR', null);

	define('UDM_MATCH_WORD', null);

	define('UDM_MODE_ALL', null);

	define('UDM_MODE_ANY', null);

	define('UDM_MODE_BOOL', null);

	define('UDM_MODE_PHRASE', null);

	define('UDM_PARAM_BROWSER_CHARSET', null);

	define('UDM_PARAM_CACHE_MODE', null);

	define('UDM_PARAM_CHARSET', null);

	define('UDM_PARAM_CROSS_WORDS', null);

	define('UDM_PARAM_CROSSWORDS', null);

	define('UDM_PARAM_DATADIR', null);

	define('UDM_PARAM_FIRST_DOC', null);

	define('UDM_PARAM_FOUND', null);

	define('UDM_PARAM_HLBEG', null);

	define('UDM_PARAM_HLEND', null);

	define('UDM_PARAM_ISPELL_PREFIX', null);

	define('UDM_PARAM_ISPELL_PREFIXES', null);

	define('UDM_PARAM_LAST_DOC', null);

	define('UDM_PARAM_LOCAL_CHARSET', null);

	define('UDM_PARAM_MAX_WORD_LEN', null);

	define('UDM_PARAM_MAX_WORDLEN', null);

	define('UDM_PARAM_MIN_WORD_LEN', null);

	define('UDM_PARAM_MIN_WORDLEN', null);

	define('UDM_PARAM_NUM_ROWS', null);

	define('UDM_PARAM_PAGE_NUM', null);

	define('UDM_PARAM_PAGE_SIZE', null);

	define('UDM_PARAM_PHRASE_MODE', null);

	define('UDM_PARAM_PREFIX', null);

	define('UDM_PARAM_PREFIXES', null);

	define('UDM_PARAM_QSTRING', null);

	define('UDM_PARAM_REMOTE_ADDR', null);

	define('UDM_PARAM_SEARCH_MODE', null);

	define('UDM_PARAM_SEARCH_TIME', null);

	define('UDM_PARAM_SEARCHD', null);

	define('UDM_PARAM_SEARCHTIME', null);

	define('UDM_PARAM_STOP_FILE', null);

	define('UDM_PARAM_STOP_TABLE', null);

	define('UDM_PARAM_STOPFILE', null);

	define('UDM_PARAM_STOPTABLE', null);

	define('UDM_PARAM_SYNONYM', null);

	define('UDM_PARAM_TRACK_MODE', null);

	define('UDM_PARAM_VARDIR', null);

	define('UDM_PARAM_WEIGHT_FACTOR', null);

	define('UDM_PARAM_WORD_INFO', null);

	define('UDM_PARAM_WORD_MATCH', null);

	define('UDM_PARAM_WORDINFO', null);

	define('UDM_PHRASE_DISABLED', null);

	define('UDM_PHRASE_ENABLED', null);

	define('UDM_PREFIX_DISABLED', null);

	define('UDM_PREFIX_ENABLED', null);

	define('UDM_PREFIXES_DISABLED', null);

	define('UDM_PREFIXES_ENABLED', null);

	define('UDM_TRACK_DISABLED', null);

	define('UDM_TRACK_ENABLED', null);

}
