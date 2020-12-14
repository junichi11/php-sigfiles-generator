<?php



namespace {

	/**
	 * Flush all cache contents
	 * <p>Flush all cache contents.</p><p>Flushing the cache is a storage handler responsibility. All built-in storage handler but the <code>memcache</code> storage handler support flushing the cache. The <code>memcache</code> storage handler cannot flush its cache contents.</p><p>User-defined storage handler may or may not support the operation.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>A return value of <b><code>FALSE</code></b> indicates that flushing all cache contents has failed or the operation is not supported by the active storage handler. Applications must not expect that calling the function will always flush the cache.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-clear-cache.php
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_clear_cache(): bool {}

	/**
	 * Returns a list of available storage handler
	 * <p>Which storage are available depends on the compile time configuration of the query cache plugin. The <code>default</code> storage handler is always available. All other storage handler must be enabled explicitly when building the extension.</p>
	 * @return array <p>Returns an array of available built-in storage handler. For each storage handler the version number and version string is given.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-get-available-handlers.php
	 * @see mysqlnd_qc_set_storage_handler()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_available_handlers(): array {}

	/**
	 * Returns information on the current handler, the number of cache entries and cache entries, if available
	 * @return array <p>Returns information on the current handler, the number of cache entries and cache entries, if available. If and what data will be returned for the cache entries is subject to the active storage handler. Storage handler are free to return any data. Storage handler are recommended to return at least the data provided by the default handler, if technically possible.</p><p>The scope of the information is the PHP process. Depending on the PHP deployment model a process may serve one or more web requests.</p><p>Values are aggregated for all cache activities on a per storage handler basis. It is not possible to tell how much queries originating from <code>mysqli</code>, <code>PDO_MySQL</code> or <code>mysql</code>.API calls have contributed to the aggregated data values. Use <code>mysqlnd_qc_get_core_stats()</code> to get timing data aggregated for all storage handlers.</p><p>Array of cache information</p>  <code>handler</code> <code>string</code>   <p>The active storage handler.</p> <p>All storage handler. Since 1.0.0.</p>   <code>handler_version</code> <code>string</code>   <p>The version of the active storage handler.</p> <p>All storage handler. Since 1.0.0.</p>   <code>num_entries</code> <code>int</code>   <p>The number of cache entries. The value depends on the storage handler in use.</p> <p>The default, APC and SQLite storage handler provide the actual number of cache entries.</p> <p>The MEMCACHE storage handler always returns <code>0</code>. MEMCACHE does not support counting the number of cache entries.</p> <p>If a user defined handler is used, the number of entries of the <code>data</code> property is reported.</p> <p>Since 1.0.0.</p>   <code>data</code> <code>array</code>   <p>The version of the active storage handler.</p> <p>Additional storage handler dependent data on the cache entries. Storage handler are requested to provide similar and comparable information. A user defined storage handler is free to return any data.</p> <p>Since 1.0.0.</p> <p>The following information is provided by the default storage handler for the <code>data</code> property.</p> <p>The <code>data</code> property holds a hash. The hash is indexed by the internal cache entry identifier of the storage handler. The cache entry identifier is human-readable and contains the query string leading to the cache entry. Please, see also the example below. The following data is given for every cache entry.</p> <p></p>  <code>statistics</code> <code>array</code>   <p>Statistics of the cache entry.</p> <p>Since 1.0.0.</p>       Property Description Version      <code>rows</code>   Number of rows of the cached result set.  Since 1.0.0.    <code>stored_size</code>   The size of the cached result set in bytes. This is the size of the payload. The value is not suited for calculating the total memory consumption of all cache entries including the administrative overhead of the cache entries.  Since 1.0.0.    <code>cache_hits</code>   How often the cached entry has been returned.  Since 1.0.0.    <code>run_time</code>   Run time of the statement to which the cache entry belongs. This is the run time of the uncached statement. It is the time between sending the statement to MySQL receiving a reply from MySQL. Run time saved by using the query cache plugin can be calculated like this: <code>cache_hits &#42; ((run_time - avg_run_time) + (store_time - avg_store_time))</code>.  Since 1.0.0.    <code>store_time</code>   Store time of the statements result set to which the cache entry belongs. This is the time it took to fetch and store the results of the uncached statement.  Since 1.0.0.    <code>min_run_time</code>   Minimum run time of the cached statement. How long it took to find the statement in the cache.  Since 1.0.0.    <code>min_store_time</code>   Minimum store time of the cached statement. The time taken for fetching the cached result set from the storage medium and decoding  Since 1.0.0.    <code>avg_run_time</code>   Average run time of the cached statement.  Since 1.0.0.    <code>avg_store_time</code>   Average store time of the cached statement.  Since 1.0.0.    <code>max_run_time</code>   Average run time of the cached statement.  Since 1.0.0.    <code>max_store_time</code>   Average store time of the cached statement.  Since 1.0.0.    <code>valid_until</code>   Timestamp when the cache entry expires.  Since 1.1.0.      <code>metadata</code> <code>array</code>   <p>Metadata of the cache entry. This is the metadata provided by MySQL together with the result set of the statement in question. Different versions of the MySQL server may return different metadata. Unlike with some of the PHP MySQL extensions no attempt is made to hide MySQL server version dependencies and version details from the caller. Please, refer to the MySQL C API documentation that belongs to the MySQL server in use for further details.</p> <p>The metadata list contains one entry for every column.</p> <p>Since 1.0.0.</p>       Property Description Version      <code>name</code>   The field name. Depending on the MySQL version this may be the fields alias name.  Since 1.0.0.    <code>org_name</code>   The field name.  Since 1.0.0.    <code>table</code>   The table name. If an alias name was used for the table, this usually holds the alias name.  Since 1.0.0.    <code>org_table</code>   The table name.  Since 1.0.0.    <code>db</code>   The database/schema name.  Since 1.0.0.    <code>max_length</code>   The maximum width of the field. Details may vary by MySQL server version.  Since 1.0.0.    <code>length</code>   The width of the field. Details may vary by MySQL server version.  Since 1.0.0.    <code>type</code>   The data type of the field. Details may vary by the MySQL server in use. This is the MySQL C API type constants value. It is recommended to use type constants provided by the <code>mysqli</code> extension to test for its meaning. You should not test for certain type values by comparing with certain numbers.  Since 1.0.0.      <p>The APC storage handler returns the same information for the <code>data</code> property but no <code>metadata</code>. The <code>metadata</code> of a cache entry is set to <code>NULL</code>.</p> <p>The MEMCACHE storage handler does not fill the <code>data</code> property. Statistics are not available on a per cache entry basis with the MEMCACHE storage handler.</p> <p>A user defined storage handler is free to provide any data.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-get-cache-info.php
	 * @see mysqlnd_qc_get_core_stats()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_cache_info(): array {}

	/**
	 * Statistics collected by the core of the query cache
	 * <p>Returns an array of statistics collected by the core of the cache plugin. The same data fields will be reported for any storage handler because the data is collected by the core.</p><p>The <code>PHP</code> configuration setting <code>mysqlnd_qc.collect_statistics</code> controls the collection of statistics. The collection of statistics is disabled by default for performance reasons. Disabling the collection of statistics will also disable the collection of time related statistics.</p><p>The <code>PHP</code> configuration setting <code>mysqlnd_qc.collect_time_statistics</code> controls the collection of time related statistics.</p><p>The scope of the core statistics is the <code>PHP</code> process. Depending on your deployment model a <code>PHP</code> process may handle one or multiple requests.</p><p>Statistics are aggregated for all cache entries and all storage handler. It is not possible to tell how much queries originating from <code>mysqli</code>, <code>PDO_MySQL</code> or <code>mysql</code> API calls have contributed to the aggregated data values.</p>
	 * @return array <p>Array of core statistics</p>      Statistic Description Version      <code>cache_hit</code>   Statement is considered cacheable and cached data has been reused. Statement is considered cacheable and a cache miss happened but the statement got cached by someone else while we process it and thus we can fetch the result from the refreshed cache.  Since 1.0.0.    <code>cache_miss</code>   Statement is considered cacheable... <ul> <li> <p>... and has been added to the cache</p> </li> <li> <p>... but the <code>PHP</code> configuration directive setting of <code>mysqlnd_qc.cache_no_table = 1</code> has prevented caching.</p> </li> <li> <p>... but an unbuffered result set is requested.</p> </li> <li> <p>... but a buffered result set was empty.</p> </li> </ul>  Since 1.0.0.    <code>cache_put</code>   Statement is considered cacheable and has been added to the cache. Take care when calculating derived statistics. Storage handler with a storage life time beyond process scope may report <code>cache_put = 0</code> together with <code>cache_hit &gt; 0</code>, if another process has filled the cache. You may want to use <code>num_entries</code> from <code>mysqlnd_qc_get_cache_info()</code> if the handler supports it ( <code>default</code>, <code>APC</code>).  Since 1.0.0.    <code>query_should_cache</code>   Statement is considered cacheable based on query string analysis. The statement may or may not be added to the cache. See also <code>cache_put</code>.  Since 1.0.0.    <code>query_should_not_cache</code>   Statement is considered not cacheable based on query string analysis.  Since 1.0.0.    <code>query_not_cached</code>   Statement is considered not cacheable or it is considered cachable but the storage handler has not returned a hash key for it.  Since 1.0.0.    <code>query_could_cache</code>   Statement is considered cacheable... <ul> <li> <p>... and statement has been run without errors</p> </li> <li> <p>... and meta data shows at least one column in the result set</p> </li> </ul> The statement may or may not be in the cache already. It may or may not be added to the cache later on.  Since 1.0.0.    <code>query_found_in_cache</code>   Statement is considered cacheable and we have found it in the cache but we have not replayed the cached data yet and we have not send the result set to the client yet. This is not considered a cache hit because the client might not fetch the result or the cached data may be faulty.  Since 1.0.0.    <code>query_uncached_other</code>   Statement is considered cacheable and it may or may not be in the cache already but either replaying cached data has failed, no result set is available or some other error has happened.     <code>query_uncached_no_table</code>   Statement has not been cached because the result set has at least one column which has no table name in its meta data. An example of such a query is <code>SELECT SLEEP(1)</code>. To cache those statements you have to change default value of the PHP configuration directive <code>mysqlnd_qc.cache_no_table</code> and set <code>mysqlnd_qc.cache_no_table = 1</code>. Often, it is not desired to cache such statements.  Since 1.0.0.    <code>query_uncached_use_result</code>   Statement would have been cached if a buffered result set had been used. The situation is also considered as a cache miss and <code>cache_miss</code> will be incremented as well.  Since 1.0.0.    <code>query_aggr_run_time_cache_hit</code>   Aggregated run time (ms) of all cached queries. Cached queries are those which have incremented <code>cache_hit</code>.  Since 1.0.0.    <code>query_aggr_run_time_cache_put</code>   Aggregated run time (ms) of all uncached queries that have been put into the cache. See also <code>cache_put</code>.  Since 1.0.0.    <code>query_aggr_run_time_total</code>   Aggregated run time (ms) of all uncached and cached queries that have been inspected and executed by the query cache.  Since 1.0.0.    <code>query_aggr_store_time_cache_hit</code>   Aggregated store time (ms) of all cached queries. Cached queries are those which have incremented <code>cache_hit</code>.  Since 1.0.0.    <code>query_aggr_store_time_cache_put</code>   Aggregated store time ( <code>ms</code>) of all uncached queries that have been put into the cache. See also <code>cache_put</code>.  Since 1.0.0.    <code>query_aggr_store_time_total</code>   Aggregated store time (ms) of all uncached and cached queries that have been inspected and executed by the query cache.  Since 1.0.0.    <code>receive_bytes_recorded</code>   Recorded incoming network traffic ( <code>bytes</code>) send from MySQL to PHP. The traffic may or may not have been added to the cache. The traffic is the total for all queries regardless if cached or not.  Since 1.0.0.    <code>receive_bytes_replayed</code>   Network traffic replayed during cache. This is the total amount of incoming traffic saved because of the usage of the query cache plugin.  Since 1.0.0.    <code>send_bytes_recorded</code>   Recorded outgoing network traffic ( <code>bytes</code>) send from MySQL to PHP. The traffic may or may not have been added to the cache. The traffic is the total for all queries regardless if cached or not.  Since 1.0.0.    <code>send_bytes_replayed</code>   Network traffic replayed during cache. This is the total amount of outgoing traffic saved because of the usage of the query cache plugin.  Since 1.0.0.    <code>slam_stale_refresh</code>   Number of cache misses which triggered serving stale data until the client causing the cache miss has refreshed the cache entry.  Since 1.0.0.    <code>slam_stale_hit</code>   Number of cache hits while a stale cache entry gets refreshed.  Since 1.0.0.
	 * @link https://php.net/manual/en/function.mysqlnd-qc-get-core-stats.php
	 * @see mysqlnd_qc_get_cache_info()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_core_stats(): array {}

	/**
	 * Returns a normalized query trace log for each query inspected by the query cache
	 * <p>Returns a normalized query trace log for each query inspected by the query cache. The collection of the trace log is disabled by default. To collect the trace log you have to set the PHP configuration directive <code>mysqlnd_qc.collect_normalized_query_trace</code> to <code>1</code></p><p>Entries in the trace log are grouped by the normalized query statement. The normalized query statement is the query statement with all statement parameter values being replaced with a question mark. For example, the two statements <code>SELECT id FROM test WHERE id = 1</code> and <code>SELECT id FROM test WHERE id = 2</code> are normalized as <code>SELECT id FROM test WHERE id = &#63;</code>. Whenever a statement is inspected by the query cache which matches the normalized statement pattern, its statistics are grouped by the normalized statement string.</p>
	 * @return array <p>An array of query log. Every list entry contains the normalized query stringand further detail information.</p>     Key Description      <code>query</code>   Normalized statement string.     <code>occurences</code>   How many statements have matched the normalized statement string in addition to the one which has created the log entry. The value is zero if a statement has been normalized, its normalized representation has been added to the log but no further queries inspected by PECL/mysqlnd_qc have the same normalized statement string.     <code>eligible_for_caching</code>   Whether the statement could be cached. An statement eligible for caching has not necessarily been cached. It not possible to tell for sure if or how many cached statement have contributed to the aggregated normalized statement log entry. However, comparing the minimum and average run time one can make an educated guess.     <code>avg_run_time</code>   The average run time of all queries contributing to the query log entry. The run time is the time between sending the query statement to MySQL and receiving an answer from MySQL.     <code>avg_store_time</code>   The average store time of all queries contributing to the query log entry. The store time is the time needed to fetch a statements result set from the server to the client and, storing it on the client.     <code>min_run_time</code>   The minimum run time of all queries contributing to the query log entry.     <code>min_store_time</code>   The minimum store time of all queries contributing to the query log entry.     <code>max_run_time</code>   The maximum run time of all queries contributing to the query log entry.     <code>max_store_time</code>   The maximum store time of all queries contributing to the query log entry.
	 * @link https://php.net/manual/en/function.mysqlnd-qc-get-normalized-query-trace-log.php
	 * @see mysqlnd_qc_get_query_trace_log()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_normalized_query_trace_log(): array {}

	/**
	 * Returns a backtrace for each query inspected by the query cache
	 * <p>Returns a backtrace for each query inspected by the query cache. The collection of the backtrace is disabled by default. To collect the backtrace you have to set the PHP configuration directive <code>mysqlnd_qc.collect_query_trace</code> to <code>1</code></p><p>The maximum depth of the backtrace is limited to the depth set with the PHP configuration directive <code>mysqlnd_qc.query_trace_bt_depth</code>.</p>
	 * @return array <p>An array of query backtrace. Every list entry contains the query string, a backtrace and further detail information.</p>     Key Description      <code>query</code>   Query string.     <code>origin</code>   Code backtrace.     <code>run_time</code>   Query run time in milliseconds. The collection of all times and the necessary <code>gettimeofday</code> system calls can be disabled by setting the PHP configuration directive <code>mysqlnd_qc.time_statistics</code> to <code>0</code>     <code>store_time</code>   Query result set store time in milliseconds. The collection of all times and the necessary <code>gettimeofday</code> system calls can be disabled by setting the PHP configuration directive <code>mysqlnd_qc.time_statistics</code> to <code>0</code>     <code>eligible_for_caching</code>   <b><code>TRUE</code></b> if query is cacheable otherwise <b><code>FALSE</code></b>.     <code>no_table</code>   <b><code>TRUE</code></b> if the query has generated a result set and at least one column from the result set has no table name set in its metadata. This is usually the case with queries which one probably do not want to cache such as <code>SELECT SLEEP(1)</code>. By default any such query will not be added to the cache. See also PHP configuration directive <code>mysqlnd_qc.cache_no_table</code>.     <code>was_added</code>   <b><code>TRUE</code></b> if the query result has been put into the cache, otherwise <b><code>FALSE</code></b>.     <code>was_already_in_cache</code>   <b><code>TRUE</code></b> if the query result would have been added to the cache if it was not already in the cache (cache hit). Otherwise <b><code>FALSE</code></b>.
	 * @link https://php.net/manual/en/function.mysqlnd-qc-get-query-trace-log.php
	 * @see mysqlnd_qc_get_normalized_query_trace_log()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_get_query_trace_log(): array {}

	/**
	 * Set conditions for automatic caching
	 * <p>Sets a condition for automatic caching of statements which do not contain the necessary SQL hints to enable caching of them.</p>
	 * @param int $condition_type <p>Type of the condition. The only allowed value is <b><code>MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN</code></b>.</p>
	 * @param mixed $condition <p>Parameter for the condition set with <code>condition_type</code>. Parameter type and structure depend on <code>condition_type</code></p> <p>If <code>condition_type</code> equals <code>MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN</code> <code>condition</code> must be a string. The string sets a pattern. Statements are cached if table and database meta data entry of their result sets match the pattern. The pattern is checked for a match with the <code>db</code> and <code>org_table</code> meta data entries provided by the underlying MySQL client server library. Please, check the MySQL Reference manual for details about the two entries. The <code>db</code> and <code>org_table</code> values are concatenated with a dot (<code>.</code>) before matched against <code>condition</code>. Pattern matching supports the wildcards <code>%</code> and <code>_</code>. The wildcard <code>%</code> will match one or many arbitrary characters. <code>_</code> will match one arbitrary character. The escape symbol is backslash.</p>
	 * @param mixed $condition_option <p>Option for <code>condition</code>. Type and structure depend on <code>condition_type</code>.</p> <p>If <code>condition_type</code> equals <code>MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN</code> <code>condition_options</code> is the TTL to be used.</p>
	 * @return bool <p>Returns TRUE on success or FALSE on FAILURE.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-set-cache-condition.php
	 * @since PECL mysqlnd_qc >= 1.1.0
	 */
	function mysqlnd_qc_set_cache_condition(int $condition_type, mixed $condition, mixed $condition_option): bool {}

	/**
	 * Installs a callback which decides whether a statement is cached
	 * <p>Installs a callback which decides whether a statement is cached.</p><p>There are several ways of hinting PELC/mysqlnd_qc to cache a query. By default, PECL/mysqlnd_qc attempts to cache a if caching of all statements is enabled or the query string begins with a certain SQL hint. The plugin internally calls a function named <code>is_select()</code> to find out. This internal function can be replaced with a user-defined callback. Then, the user-defined callback is responsible to decide whether the plugin attempts to cache a statement. Because the internal function is replaced with the callback, the callback gains full control. The callback is free to ignore the configuration setting <code>mysqlnd_qc.cache_by_default</code> and SQL hints.</p><p>The callback is invoked for every statement inspected by the plugin. It is given the statements string as a parameter. The callback returns <b><code>FALSE</code></b> if the statement shall not be cached. It returns <b><code>TRUE</code></b> to make the plugin attempt to cache the statements result set, if any. A so-created cache entry is given the default TTL set with the PHP configuration directive <code>mysqlnd_qc.ttl</code>. If a different TTL shall be used, the callback returns a numeric value to be used as the TTL.</p><p>The internal <code>is_select</code> function is part of the internal cache storage handler interface. Thus, a user-defined storage handler offers the same capabilities.</p>
	 * @param string $callback
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-set-is-select.php
	 * @see mysqlnd_qc_set_user_handlers()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_set_is_select(string $callback): mixed {}

	/**
	 * Change current storage handler
	 * <p>Sets the storage handler used by the query cache. A list of available storage handler can be obtained from <code>mysqlnd_qc_get_available_handlers()</code>. Which storage are available depends on the compile time configuration of the query cache plugin. The <code>default</code> storage handler is always available. All other storage handler must be enabled explicitly when building the extension.</p>
	 * @param string $handler <p>Handler can be of type string representing the name of a built-in storage handler or an object of type <code>mysqlnd_qc_handler_default</code>. The names of the built-in storage handler are <code>default</code>, <code>APC</code>, <code>MEMCACHE</code>, <code>sqlite</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If changing the storage handler fails a catchable fatal error will be thrown. The query cache cannot operate if the previous storage handler has been shutdown but no new storage handler has been installed.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-set-storage-handler.php
	 * @see mysqlnd_qc_get_available_handlers()
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_set_storage_handler(string $handler): bool {}

	/**
	 * Sets the callback functions for a user-defined procedural storage handler
	 * <p>Sets the callback functions for a user-defined procedural storage handler.</p>
	 * @param string $get_hash <p>Name of the user function implementing the storage handler <code>get_hash</code> functionality.</p>
	 * @param string $find_query_in_cache <p>Name of the user function implementing the storage handler <code>find_in_cache</code> functionality.</p>
	 * @param string $return_to_cache <p>Name of the user function implementing the storage handler <code>return_to_cache</code> functionality.</p>
	 * @param string $add_query_to_cache_if_not_exists <p>Name of the user function implementing the storage handler <code>add_query_to_cache_if_not_exists</code> functionality.</p>
	 * @param string $query_is_select <p>Name of the user function implementing the storage handler <code>query_is_select</code> functionality.</p>
	 * @param string $update_query_run_time_stats <p>Name of the user function implementing the storage handler <code>update_query_run_time_stats</code> functionality.</p>
	 * @param string $get_stats <p>Name of the user function implementing the storage handler <code>get_stats</code> functionality.</p>
	 * @param string $clear_cache <p>Name of the user function implementing the storage handler <code>clear_cache</code> functionality.</p>
	 * @return bool <p>Returns TRUE on success or FALSE on FAILURE.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-qc-set-user-handlers.php
	 * @since PECL mysqlnd_qc >= 1.0.0
	 */
	function mysqlnd_qc_set_user_handlers(string $get_hash, string $find_query_in_cache, string $return_to_cache, string $add_query_to_cache_if_not_exists, string $query_is_select, string $update_query_run_time_stats, string $get_stats, string $clear_cache): bool {}

	/**
	 * Used as a parameter of <code>mysqlnd_qc_set_cache_condition()</code> to set conditions for schema based automatic caching.
	 */
	define('MYSQLND_QC_CONDITION_META_SCHEMA_PATTERN', null);

	/**
	 * SQL hint used to disable caching of a query if <code>mysqlnd_qc.cache_by_default = 1</code>.
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
	 * Plugin version string, for example, 1.0.0-prototype.
	 */
	define('MYSQLND_QC_VERSION', null);

	/**
	 * Plugin version number, for example, 10000.
	 */
	define('MYSQLND_QC_VERSION_ID', null);

}
