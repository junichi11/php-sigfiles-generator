<?php



namespace {

	/**
	 * Flush all cache contents
	 * <p>Flush all cache contents.</p><p>Flushing the cache is a storage handler responsibility. All built-in storage handler but the <i>memcache</i> storage handler support flushing the cache. The <i>memcache</i> storage handler cannot flush its cache contents.</p><p>User-defined storage handler may or may not support the operation.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>A return value of <b><code>FALSE</code></b> indicates that flushing all cache contents has failed or the operation is not supported by the active storage handler. Applications must not expect that calling the function will always flush the cache.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-clear-cache.php
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_clear_cache(): bool {}

	/**
	 * Returns a list of available storage handler
	 * <p>Which storage are available depends on the compile time configuration of the query cache plugin. The <i>default</i> storage handler is always available. All other storage handler must be enabled explicitly when building the extension.</p>
	 * @return array <p>Returns an array of available built-in storage handler. For each storage handler the version number and version string is given.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-get-available-handlers.php
	 * @see mysqlnd_qc_set_storage_handler()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_available_handlers(): array {}

	/**
	 * Returns information on the current handler, the number of cache entries and cache entries, if available
	 * @return array <p>Returns information on the current handler, the number of cache entries and cache entries, if available. If and what data will be returned for the cache entries is subject to the active storage handler. Storage handler are free to return any data. Storage handler are recommended to return at least the data provided by the default handler, if technically possible.</p><p>The scope of the information is the PHP process. Depending on the PHP deployment model a process may serve one or more web requests.</p><p>Values are aggregated for all cache activities on a per storage handler basis. It is not possible to tell how much queries originating from <i>mysqli</i>, <i>PDO_MySQL</i> or <i>mysql</i>.API calls have contributed to the aggregated data values. Use <code>mysqlnd_qc_get_core_stats()</code> to get timing data aggregated for all storage handlers.</p><p>Array of cache information</p>  <code>handler</code> <code>string</code>   <p>The active storage handler.</p> <p>All storage handler. Since 1.0.0.</p>   <code>handler_version</code> <code>string</code>   <p>The version of the active storage handler.</p> <p>All storage handler. Since 1.0.0.</p>   <code>num_entries</code> <code>int</code>   <p>The number of cache entries. The value depends on the storage handler in use.</p> <p>The default, APC and SQLite storage handler provide the actual number of cache entries.</p> <p>The MEMCACHE storage handler always returns <i>0</i>. MEMCACHE does not support counting the number of cache entries.</p> <p>If a user defined handler is used, the number of entries of the <i>data</i> property is reported.</p> <p>Since 1.0.0.</p>   <code>data</code> <code>array</code>   <p>The version of the active storage handler.</p> <p>Additional storage handler dependent data on the cache entries. Storage handler are requested to provide similar and comparable information. A user defined storage handler is free to return any data.</p> <p>Since 1.0.0.</p> <p>The following information is provided by the default storage handler for the <i>data</i> property.</p> <p>The <i>data</i> property holds a hash. The hash is indexed by the internal cache entry identifier of the storage handler. The cache entry identifier is human-readable and contains the query string leading to the cache entry. Please, see also the example below. The following data is given for every cache entry.</p> <p></p>  <code>statistics</code> <code>array</code>   <p>Statistics of the cache entry.</p> <p>Since 1.0.0.</p>       Property Description Version      <i>rows</i>   Number of rows of the cached result set.  Since 1.0.0.    <i>stored_size</i>   The size of the cached result set in bytes. This is the size of the payload. The value is not suited for calculating the total memory consumption of all cache entries including the administrative overhead of the cache entries.  Since 1.0.0.    <i>cache_hits</i>   How often the cached entry has been returned.  Since 1.0.0.    <i>run_time</i>   Run time of the statement to which the cache entry belongs. This is the run time of the uncached statement. It is the time between sending the statement to MySQL receiving a reply from MySQL. Run time saved by using the query cache plugin can be calculated like this: <i>cache_hits &#42; ((run_time - avg_run_time) + (store_time - avg_store_time))</i>.  Since 1.0.0.    <i>store_time</i>   Store time of the statements result set to which the cache entry belongs. This is the time it took to fetch and store the results of the uncached statement.  Since 1.0.0.    <i>min_run_time</i>   Minimum run time of the cached statement. How long it took to find the statement in the cache.  Since 1.0.0.    <i>min_store_time</i>   Minimum store time of the cached statement. The time taken for fetching the cached result set from the storage medium and decoding  Since 1.0.0.    <i>avg_run_time</i>   Average run time of the cached statement.  Since 1.0.0.    <i>avg_store_time</i>   Average store time of the cached statement.  Since 1.0.0.    <i>max_run_time</i>   Average run time of the cached statement.  Since 1.0.0.    <i>max_store_time</i>   Average store time of the cached statement.  Since 1.0.0.    <i>valid_until</i>   Timestamp when the cache entry expires.  Since 1.1.0.      <code>metadata</code> <code>array</code>   <p>Metadata of the cache entry. This is the metadata provided by MySQL together with the result set of the statement in question. Different versions of the MySQL server may return different metadata. Unlike with some of the PHP MySQL extensions no attempt is made to hide MySQL server version dependencies and version details from the caller. Please, refer to the MySQL C API documentation that belongs to the MySQL server in use for further details.</p> <p>The metadata list contains one entry for every column.</p> <p>Since 1.0.0.</p>       Property Description Version      <i>name</i>   The field name. Depending on the MySQL version this may be the fields alias name.  Since 1.0.0.    <i>org_name</i>   The field name.  Since 1.0.0.    <i>table</i>   The table name. If an alias name was used for the table, this usually holds the alias name.  Since 1.0.0.    <i>org_table</i>   The table name.  Since 1.0.0.    <i>db</i>   The database/schema name.  Since 1.0.0.    <i>max_length</i>   The maximum width of the field. Details may vary by MySQL server version.  Since 1.0.0.    <i>length</i>   The width of the field. Details may vary by MySQL server version.  Since 1.0.0.    <i>type</i>   The data type of the field. Details may vary by the MySQL server in use. This is the MySQL C API type constants value. It is recommended to use type constants provided by the <i>mysqli</i> extension to test for its meaning. You should not test for certain type values by comparing with certain numbers.  Since 1.0.0.      <p>The APC storage handler returns the same information for the <i>data</i> property but no <i>metadata</i>. The <i>metadata</i> of a cache entry is set to <i>NULL</i>.</p> <p>The MEMCACHE storage handler does not fill the <i>data</i> property. Statistics are not available on a per cache entry basis with the MEMCACHE storage handler.</p> <p>A user defined storage handler is free to provide any data.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-get-cache-info.php
	 * @see mysqlnd_qc_get_core_stats()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_cache_info(): array {}

	/**
	 * Statistics collected by the core of the query cache
	 * <p>Returns an array of statistics collected by the core of the cache plugin. The same data fields will be reported for any storage handler because the data is collected by the core.</p><p>The <i>PHP</i> configuration setting <i>mysqlnd_qc.collect_statistics</i> controls the collection of statistics. The collection of statistics is disabled by default for performance reasons. Disabling the collection of statistics will also disable the collection of time related statistics.</p><p>The <i>PHP</i> configuration setting <i>mysqlnd_qc.collect_time_statistics</i> controls the collection of time related statistics.</p><p>The scope of the core statistics is the <i>PHP</i> process. Depending on your deployment model a <i>PHP</i> process may handle one or multiple requests.</p><p>Statistics are aggregated for all cache entries and all storage handler. It is not possible to tell how much queries originating from <i>mysqli</i>, <i>PDO_MySQL</i> or <i>mysql</i> API calls have contributed to the aggregated data values.</p>
	 * @return array <p>Array of core statistics</p>      Statistic Description Version      <i>cache_hit</i>   Statement is considered cacheable and cached data has been reused. Statement is considered cacheable and a cache miss happened but the statement got cached by someone else while we process it and thus we can fetch the result from the refreshed cache.  Since 1.0.0.    <i>cache_miss</i>   Statement is considered cacheable... <ul> <li> <p>... and has been added to the cache</p> </li> <li> <p>... but the <i>PHP</i> configuration directive setting of <i>mysqlnd_qc.cache_no_table = 1</i> has prevented caching.</p> </li> <li> <p>... but an unbuffered result set is requested.</p> </li> <li> <p>... but a buffered result set was empty.</p> </li> </ul>  Since 1.0.0.    <i>cache_put</i>   Statement is considered cacheable and has been added to the cache. Take care when calculating derived statistics. Storage handler with a storage life time beyond process scope may report <i>cache_put = 0</i> together with <i>cache_hit &gt; 0</i>, if another process has filled the cache. You may want to use <i>num_entries</i> from <code>mysqlnd_qc_get_cache_info()</code> if the handler supports it ( <i>default</i>, <i>APC</i>).  Since 1.0.0.    <i>query_should_cache</i>   Statement is considered cacheable based on query string analysis. The statement may or may not be added to the cache. See also <i>cache_put</i>.  Since 1.0.0.    <i>query_should_not_cache</i>   Statement is considered not cacheable based on query string analysis.  Since 1.0.0.    <i>query_not_cached</i>   Statement is considered not cacheable or it is considered cachable but the storage handler has not returned a hash key for it.  Since 1.0.0.    <i>query_could_cache</i>   Statement is considered cacheable... <ul> <li> <p>... and statement has been run without errors</p> </li> <li> <p>... and meta data shows at least one column in the result set</p> </li> </ul> The statement may or may not be in the cache already. It may or may not be added to the cache later on.  Since 1.0.0.    <i>query_found_in_cache</i>   Statement is considered cacheable and we have found it in the cache but we have not replayed the cached data yet and we have not send the result set to the client yet. This is not considered a cache hit because the client might not fetch the result or the cached data may be faulty.  Since 1.0.0.    <i>query_uncached_other</i>   Statement is considered cacheable and it may or may not be in the cache already but either replaying cached data has failed, no result set is available or some other error has happened.     <i>query_uncached_no_table</i>   Statement has not been cached because the result set has at least one column which has no table name in its meta data. An example of such a query is <i>SELECT SLEEP(1)</i>. To cache those statements you have to change default value of the PHP configuration directive <i>mysqlnd_qc.cache_no_table</i> and set <i>mysqlnd_qc.cache_no_table = 1</i>. Often, it is not desired to cache such statements.  Since 1.0.0.    <i>query_uncached_use_result</i>   Statement would have been cached if a buffered result set had been used. The situation is also considered as a cache miss and <i>cache_miss</i> will be incremented as well.  Since 1.0.0.    <i>query_aggr_run_time_cache_hit</i>   Aggregated run time (ms) of all cached queries. Cached queries are those which have incremented <i>cache_hit</i>.  Since 1.0.0.    <i>query_aggr_run_time_cache_put</i>   Aggregated run time (ms) of all uncached queries that have been put into the cache. See also <i>cache_put</i>.  Since 1.0.0.    <i>query_aggr_run_time_total</i>   Aggregated run time (ms) of all uncached and cached queries that have been inspected and executed by the query cache.  Since 1.0.0.    <i>query_aggr_store_time_cache_hit</i>   Aggregated store time (ms) of all cached queries. Cached queries are those which have incremented <i>cache_hit</i>.  Since 1.0.0.    <i>query_aggr_store_time_cache_put</i>   Aggregated store time ( <i>ms</i>) of all uncached queries that have been put into the cache. See also <i>cache_put</i>.  Since 1.0.0.    <i>query_aggr_store_time_total</i>   Aggregated store time (ms) of all uncached and cached queries that have been inspected and executed by the query cache.  Since 1.0.0.    <i>receive_bytes_recorded</i>   Recorded incoming network traffic ( <i>bytes</i>) send from MySQL to PHP. The traffic may or may not have been added to the cache. The traffic is the total for all queries regardless if cached or not.  Since 1.0.0.    <i>receive_bytes_replayed</i>   Network traffic replayed during cache. This is the total amount of incoming traffic saved because of the usage of the query cache plugin.  Since 1.0.0.    <i>send_bytes_recorded</i>   Recorded outgoing network traffic ( <i>bytes</i>) send from MySQL to PHP. The traffic may or may not have been added to the cache. The traffic is the total for all queries regardless if cached or not.  Since 1.0.0.    <i>send_bytes_replayed</i>   Network traffic replayed during cache. This is the total amount of outgoing traffic saved because of the usage of the query cache plugin.  Since 1.0.0.    <i>slam_stale_refresh</i>   Number of cache misses which triggered serving stale data until the client causing the cache miss has refreshed the cache entry.  Since 1.0.0.    <i>slam_stale_hit</i>   Number of cache hits while a stale cache entry gets refreshed.  Since 1.0.0.
	 * @link http://php.net/manual/en/function.mysqlnd-qc-get-core-stats.php
	 * @see mysqlnd_qc_get_cache_info()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_core_stats(): array {}

	/**
	 * Returns a normalized query trace log for each query inspected by the query cache
	 * <p>Returns a normalized query trace log for each query inspected by the query cache. The collection of the trace log is disabled by default. To collect the trace log you have to set the PHP configuration directive <i>mysqlnd_qc.collect_normalized_query_trace</i> to <i>1</i></p><p>Entries in the trace log are grouped by the normalized query statement. The normalized query statement is the query statement with all statement parameter values being replaced with a question mark. For example, the two statements <i>SELECT id FROM test WHERE id = 1</i> and <i>SELECT id FROM test WHERE id = 2</i> are normalized as <i>SELECT id FROM test WHERE id = &#63;</i>. Whenever a statement is inspected by the query cache which matches the normalized statement pattern, its statistics are grouped by the normalized statement string.</p>
	 * @return array <p>An array of query log. Every list entry contains the normalized query stringand further detail information.</p>     Key Description      <i>query</i>   Normalized statement string.     <i>occurences</i>   How many statements have matched the normalized statement string in addition to the one which has created the log entry. The value is zero if a statement has been normalized, its normalized representation has been added to the log but no further queries inspected by PECL/mysqlnd_qc have the same normalized statement string.     <i>eligible_for_caching</i>   Whether the statement could be cached. An statement eligible for caching has not necessarily been cached. It not possible to tell for sure if or how many cached statement have contributed to the aggregated normalized statement log entry. However, comparing the minimum and average run time one can make an educated guess.     <i>avg_run_time</i>   The average run time of all queries contributing to the query log entry. The run time is the time between sending the query statement to MySQL and receiving an answer from MySQL.     <i>avg_store_time</i>   The average store time of all queries contributing to the query log entry. The store time is the time needed to fetch a statements result set from the server to the client and, storing it on the client.     <i>min_run_time</i>   The minimum run time of all queries contributing to the query log entry.     <i>min_store_time</i>   The minimum store time of all queries contributing to the query log entry.     <i>max_run_time</i>   The maximum run time of all queries contributing to the query log entry.     <i>max_store_time</i>   The maximum store time of all queries contributing to the query log entry.
	 * @link http://php.net/manual/en/function.mysqlnd-qc-get-normalized-query-trace-log.php
	 * @see mysqlnd_qc_get_query_trace_log()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_normalized_query_trace_log(): array {}

	/**
	 * Returns a backtrace for each query inspected by the query cache
	 * <p>Returns a backtrace for each query inspected by the query cache. The collection of the backtrace is disabled by default. To collect the backtrace you have to set the PHP configuration directive <i>mysqlnd_qc.collect_query_trace</i> to <i>1</i></p><p>The maximum depth of the backtrace is limited to the depth set with the PHP configuration directive <i>mysqlnd_qc.query_trace_bt_depth</i>.</p>
	 * @return array <p>An array of query backtrace. Every list entry contains the query string, a backtrace and further detail information.</p>     Key Description      <i>query</i>   Query string.     <i>origin</i>   Code backtrace.     <i>run_time</i>   Query run time in milliseconds. The collection of all times and the necessary <i>gettimeofday</i> system calls can be disabled by setting the PHP configuration directive <i>mysqlnd_qc.time_statistics</i> to <i>0</i>     <i>store_time</i>   Query result set store time in milliseconds. The collection of all times and the necessary <i>gettimeofday</i> system calls can be disabled by setting the PHP configuration directive <i>mysqlnd_qc.time_statistics</i> to <i>0</i>     <i>eligible_for_caching</i>   <b><code>TRUE</code></b> if query is cacheable otherwise <b><code>FALSE</code></b>.     <i>no_table</i>   <b><code>TRUE</code></b> if the query has generated a result set and at least one column from the result set has no table name set in its metadata. This is usually the case with queries which one probably do not want to cache such as <i>SELECT SLEEP(1)</i>. By default any such query will not be added to the cache. See also PHP configuration directive <i>mysqlnd_qc.cache_no_table</i>.     <i>was_added</i>   <b><code>TRUE</code></b> if the query result has been put into the cache, otherwise <b><code>FALSE</code></b>.     <i>was_already_in_cache</i>   <b><code>TRUE</code></b> if the query result would have been added to the cache if it was not already in the cache (cache hit). Otherwise <b><code>FALSE</code></b>.
	 * @link http://php.net/manual/en/function.mysqlnd-qc-get-query-trace-log.php
	 * @see mysqlnd_qc_get_normalized_query_trace_log()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_query_trace_log(): array {}

	/**
	 * Set conditions for automatic caching
	 * <p>Sets a condition for automatic caching of statements which do not contain the necessary SQL hints to enable caching of them.</p>
	 * @param int $condition_type <p>Type of the condition. The only allowed value is <b><code>MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN</code></b>.</p>
	 * @param mixed $condition <p>Parameter for the condition set with <i>condition_type</i>. Parameter type and structure depend on <i>condition_type</i></p> <p>If <i>condition_type</i> equals <i>MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN</i> <i>condition</i> must be a string. The string sets a pattern. Statements are cached if table and database meta data entry of their result sets match the pattern. The pattern is checked for a match with the <i>db</i> and <i>org_table</i> meta data entries provided by the underlying MySQL client server library. Please, check the MySQL Reference manual for details about the two entries. The <i>db</i> and <i>org_table</i> values are concatenated with a dot (<i>.</i>) before matched against <i>condition</i>. Pattern matching supports the wildcards <i>%</i> and <i>_</i>. The wildcard <i>%</i> will match one or many arbitrary characters. <i>_</i> will match one arbitrary character. The escape symbol is backslash.</p>
	 * @param mixed $condition_option <p>Option for <i>condition</i>. Type and structure depend on <i>condition_type</i>.</p> <p>If <i>condition_type</i> equals <i>MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN</i> <i>condition_options</i> is the TTL to be used.</p>
	 * @return bool <p>Returns TRUE on success or FALSE on FAILURE.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-set-cache-condition.php
	 * @since PECL mysqlnd_qc >= 1.1.0
	 */
	function mysqlnd_qc_set_cache_condition(int $condition_type, $condition, $condition_option): bool {}

	/**
	 * Installs a callback which decides whether a statement is cached
	 * <p>Installs a callback which decides whether a statement is cached.</p><p>There are several ways of hinting PELC/mysqlnd_qc to cache a query. By default, PECL/mysqlnd_qc attempts to cache a if caching of all statements is enabled or the query string begins with a certain SQL hint. The plugin internally calls a function named <i>is_select()</i> to find out. This internal function can be replaced with a user-defined callback. Then, the user-defined callback is responsible to decide whether the plugin attempts to cache a statement. Because the internal function is replaced with the callback, the callback gains full control. The callback is free to ignore the configuration setting <i>mysqlnd_qc.cache_by_default</i> and SQL hints.</p><p>The callback is invoked for every statement inspected by the plugin. It is given the statements string as a parameter. The callback returns <b><code>FALSE</code></b> if the statement shall not be cached. It returns <b><code>TRUE</code></b> to make the plugin attempt to cache the statements result set, if any. A so-created cache entry is given the default TTL set with the PHP configuration directive <i>mysqlnd_qc.ttl</i>. If a different TTL shall be used, the callback returns a numeric value to be used as the TTL.</p><p>The internal <i>is_select</i> function is part of the internal cache storage handler interface. Thus, a user-defined storage handler offers the same capabilities.</p>
	 * @param string $callback
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-set-is-select.php
	 * @see mysqlnd_qc_set_user_handlers()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_set_is_select(string $callback) {}

	/**
	 * Change current storage handler
	 * <p>Sets the storage handler used by the query cache. A list of available storage handler can be obtained from <code>mysqlnd_qc_get_available_handlers()</code>. Which storage are available depends on the compile time configuration of the query cache plugin. The <i>default</i> storage handler is always available. All other storage handler must be enabled explicitly when building the extension.</p>
	 * @param string $handler <p>Handler can be of type string representing the name of a built-in storage handler or an object of type <i>mysqlnd_qc_handler_default</i>. The names of the built-in storage handler are <i>default</i>, <i>APC</i>, <i>MEMCACHE</i>, <i>sqlite</i>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If changing the storage handler fails a catchable fatal error will be thrown. The query cache cannot operate if the previous storage handler has been shutdown but no new storage handler has been installed.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-set-storage-handler.php
	 * @see mysqlnd_qc_get_available_handlers()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_set_storage_handler(string $handler): bool {}

	/**
	 * Sets the callback functions for a user-defined procedural storage handler
	 * <p>Sets the callback functions for a user-defined procedural storage handler.</p>
	 * @param string $get_hash <p>Name of the user function implementing the storage handler <i>get_hash</i> functionality.</p>
	 * @param string $find_query_in_cache <p>Name of the user function implementing the storage handler <i>find_in_cache</i> functionality.</p>
	 * @param string $return_to_cache <p>Name of the user function implementing the storage handler <i>return_to_cache</i> functionality.</p>
	 * @param string $add_query_to_cache_if_not_exists <p>Name of the user function implementing the storage handler <i>add_query_to_cache_if_not_exists</i> functionality.</p>
	 * @param string $query_is_select <p>Name of the user function implementing the storage handler <i>query_is_select</i> functionality.</p>
	 * @param string $update_query_run_time_stats <p>Name of the user function implementing the storage handler <i>update_query_run_time_stats</i> functionality.</p>
	 * @param string $get_stats <p>Name of the user function implementing the storage handler <i>get_stats</i> functionality.</p>
	 * @param string $clear_cache <p>Name of the user function implementing the storage handler <i>clear_cache</i> functionality.</p>
	 * @return bool <p>Returns TRUE on success or FALSE on FAILURE.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-qc-set-user-handlers.php
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_set_user_handlers(string $get_hash, string $find_query_in_cache, string $return_to_cache, string $add_query_to_cache_if_not_exists, string $query_is_select, string $update_query_run_time_stats, string $get_stats, string $clear_cache): bool {}

	/**
	 * Used as a parameter of <code>mysqlnd_qc_set_cache_condition()</code> to set conditions for schema based automatic caching.
	 */
	define('MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN', null);

	/**
	 * SQL hint used to disable caching of a query if <i>mysqlnd_qc.cache_by_default = 1</i>.
	 */
	define('MYSQLND_QC_DISABLE_SWITCH', null);

	/**
	 * SQL hint used to enable caching of a query.
	 */
	define('MYSQLND_QC_ENABLE_SWITCH', null);

	/**
	 * This SQL hint should not be used in general.   It is needed by PECL/mysqlnd_ms to group cache entries for one statement but originating from different physical connections. If the hint is used connection settings such as user, hostname and charset are not considered for generating a cache key of a query. Instead the given value and the query string are used as input to the hashing function that generates the key.   PECL/mysqlnd_ms may, if instructed, cache results from MySQL Replication slaves. Because it can hold many connections to the slave the cache key shall not be formed from the user, hostname or other settings that may vary for the various slave connections. Instead, PECL/mysqlnd_ms provides an identifier which refers to the group of slave connections that shall be enabled to share cache entries no matter which physical slave connection was to generate the cache entry.   Use of this feature outside of PECL/mysqlnd_ms is not recommended.
	 */
	define('MYSQLND_QC_SERVER_ID_SWITCH', null);

	/**
	 * SQL hint used to set the TTL of a result set.
	 */
	define('MYSQLND_QC_TTL_SWITCH', null);

	/**
	 * Plugin version string, for example, "1.0.0-prototype".
	 */
	define('MYSQLND_QC_VERSION', null);

	/**
	 * Plugin version number, for example, 10000.
	 */
	define('MYSQLND_QC_VERSION_ID', null);

}
