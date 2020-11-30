<?php



namespace {

	/**
	 * <p>The SphinxClient class provides object-oriented interface to Sphinx.</p>
	 * @link http://php.net/manual/en/class.sphinxclient.php
	 * @since PECL sphinx >= 0.1.0
	 */
	class SphinxClient {

		/**
		 * Create a new SphinxClient object
		 * <p>Creates a new SphinxClient object.</p>
		 * @return self
		 * @link http://php.net/manual/en/sphinxclient.construct.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function __construct() {}

		/**
		 * Add query to multi-query batch
		 * <p>Adds query with the current settings to multi-query batch. This method doesn't affect current settings (sorting, filtering, grouping etc.) in any way.</p>
		 * @param string $query <p>Query string.</p>
		 * @param string $index <p>An index name (or names).</p>
		 * @param string $comment
		 * @return int <p>Returns an index in an array of results that will be returned by SphinxClient::runQueries call or false on error.</p>
		 * @link http://php.net/manual/en/sphinxclient.addquery.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function addQuery(string $query, string $index = "*", string $comment = ""): int {}

		/**
		 * Build text snippets
		 * <p>Connects to searchd, requests it to generate excerpts (snippets) from the given documents, and returns the results.</p>
		 * @param array $docs <p>Array of strings with documents' contents.</p>
		 * @param string $index <p>Index name.</p>
		 * @param string $words <p>Keywords to highlight.</p>
		 * @param array $opts <p>Associative array of additional highlighting options (see below).</p>
		 * @return array <p>Returns array of snippets on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.buildexcerpts.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function buildExcerpts(array $docs, string $index, string $words, array $opts = NULL): array {}

		/**
		 * Extract keywords from query
		 * <p>Extracts keywords from <code>query</code> using tokenizer settings for the given <code>index</code>, optionally with per-keyword occurrence statistics.</p>
		 * @param string $query <p>A query to extract keywords from.</p>
		 * @param string $index <p>An index to get tokenizing settings and keyword occurrence statistics from.</p>
		 * @param bool $hits <p>A boolean flag to enable/disable keyword statistics generation.</p>
		 * @return array <p>Returns an array of associative arrays with per-keyword information.</p>
		 * @link http://php.net/manual/en/sphinxclient.buildkeywords.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function buildKeywords(string $query, string $index, bool $hits): array {}

		/**
		 * Closes previously opened persistent connection
		 * <p>Closes previously opened persistent connection.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.close.php
		 * @since PECL sphinx >= 1.0.3
		 */
		public function close(): bool {}

		/**
		 * Escape special characters
		 * <p>Escapes characters that are treated as special operators by the query language parser.</p>
		 * @param string $string <p>String to escape.</p>
		 * @return string <p>Returns escaped string.</p>
		 * @link http://php.net/manual/en/sphinxclient.escapestring.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function escapeString(string $string): string {}

		/**
		 * Get the last error message
		 * <p>Returns string with the last error message. If there were no errors during the previous API call, empty string is returned. This method doesn't reset the error message, so you can safely call it several times.</p>
		 * @return string <p>Returns the last error message or an empty string if there were no errors.</p>
		 * @link http://php.net/manual/en/sphinxclient.getlasterror.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function getLastError(): string {}

		/**
		 * Get the last warning
		 * <p>Returns last warning message. If there were no warnings during the previous API call, empty string is returned. This method doesn't reset the warning, so you can safely call it several times.</p>
		 * @return string <p>Returns the last warning message or an empty string if there were no warnings.</p>
		 * @link http://php.net/manual/en/sphinxclient.getlastwarning.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function getLastWarning(): string {}

		/**
		 * Opens persistent connection to the server
		 * <p>Opens persistent connection to the server.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.open.php
		 * @since PECL sphinx >= 1.0.3
		 */
		public function open(): bool {}

		/**
		 * Execute search query
		 * <p>Connects to searchd server, runs the given search query with the current settings, obtains and returns the result set.</p>
		 * @param string $query <p>Query string.</p>
		 * @param string $index <p>An index name (or names).</p>
		 * @param string $comment
		 * @return array <p>On success, <b>SphinxClient::query()</b> returns a list of found matches and additional per-query statistics. The result set is a hash utilize other structures instead of hash) with the following keys and values:</p> <b>Result set structure</b>   Key Value description     "matches" An array with found document IDs as keys and their weight and attributes values as values   "total" Total number of matches found and retrieved (depends on your settings)   "total_found" Total number of found documents matching the query   "words" An array with words (case-folded and stemmed) as keys and per-word statistics as values   "error" Query error message reported by searchd   "warning" Query warning reported by searchd
		 * @link http://php.net/manual/en/sphinxclient.query.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function query(string $query, string $index = "*", string $comment = ""): array {}

		/**
		 * Clear all filters
		 * <p>Clears all currently set filters. This call is normally required when using multi-queries. You might want to set different filters for different queries in the batch. To do that, you should call <b>SphinxClient::resetFilters()</b> and add new filters using the respective calls.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/sphinxclient.resetfilters.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function resetFilters(): void {}

		/**
		 * Clear all group-by settings
		 * <p>Clears all currently group-by settings, and disables group-by. This call is normally required only when using multi-queries.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/sphinxclient.resetgroupby.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function resetGroupBy(): void {}

		/**
		 * Run a batch of search queries
		 * <p>Connects to searchd, runs a batch of all queries added using SphinxClient::addQuery, obtains and returns the result sets.</p>
		 * @return array <p>Returns <b><code>FALSE</code></b> on failure and array of result sets on success.</p>
		 * @link http://php.net/manual/en/sphinxclient.runqueries.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function runQueries(): array {}

		/**
		 * Change the format of result set array
		 * <p>Controls the format of search results set arrays (whether matches should be returned as an array or a hash).</p>
		 * @param bool $array_result <p>If <code>array_result</code> is <b><code>FALSE</code></b>, matches are returned as a hash with document IDs as keys, and other information (weight, attributes) as values. If <code>array_result</code> is <b><code>TRUE</code></b>, matches are returned as a plain array with complete per-match information including document IDs.</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link http://php.net/manual/en/sphinxclient.setarrayresult.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setArrayResult(bool $array_result = FALSE): bool {}

		/**
		 * Set connection timeout
		 * <p>Sets connection timeout (in seconds) for searchd connection.</p>
		 * @param float $timeout <p>Timeout in seconds.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setconnecttimeout.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setConnectTimeout(float $timeout): bool {}

		/**
		 * Set field weights
		 * <p>Binds per-field weights by name.</p><p>Match ranking can be affected by per-field weights. See Sphinx documentation for an explanation on how phrase proximity ranking is affected. This call lets you specify non-default weights for full-text fields.</p><p>The weights must be positive 32-bit integers, so be careful not to hit 32-bit integer maximum. The final weight is a 32-bit integer too. Default weight value is 1. Unknown field names are silently ignored.</p>
		 * @param array $weights <p>Associative array of field names and field weights.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setfieldweights.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setFieldWeights(array $weights): bool {}

		/**
		 * Add new integer values set filter
		 * <p>Adds new integer values set filter to the existing list of filters.</p>
		 * @param string $attribute <p>An attribute name.</p>
		 * @param array $values <p>Plain array of integer values.</p>
		 * @param bool $exclude <p>If set to <b><code>TRUE</code></b>, matching documents are excluded from the result set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setfilter.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setFilter(string $attribute, array $values, bool $exclude = FALSE): bool {}

		/**
		 * Add new float range filter
		 * <p>Adds new float range filter to the existing list of filters. Only those documents which have <code>attribute</code> value stored in the index between <code>min</code> and <code>max</code> (including values that are exactly equal to <code>min</code> or <code>max</code>) will be matched (or rejected, if <code>exclude</code> is <b><code>TRUE</code></b>).</p>
		 * @param string $attribute <p>An attribute name.</p>
		 * @param float $min <p>Minimum value.</p>
		 * @param float $max <p>Maximum value.</p>
		 * @param bool $exclude <p>If set to <b><code>TRUE</code></b>, matching documents are excluded from the result set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setfilterfloatrange.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setFilterFloatRange(string $attribute, float $min, float $max, bool $exclude = FALSE): bool {}

		/**
		 * Add new integer range filter
		 * <p>Adds new integer range filter to the existing list of filters. Only those documents which have <code>attribute</code> value stored in the index between <code>min</code> and <code>max</code> (including values that are exactly equal to <code>min</code> or <code>max</code>) will be matched (or rejected, if <code>exclude</code> is <b><code>TRUE</code></b>).</p>
		 * @param string $attribute <p>An attribute name.</p>
		 * @param int $min <p>Minimum value.</p>
		 * @param int $max <p>Maximum value.</p>
		 * @param bool $exclude <p>If set to <b><code>TRUE</code></b>, matching documents are excluded from the result set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setfilterrange.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setFilterRange(string $attribute, int $min, int $max, bool $exclude = FALSE): bool {}

		/**
		 * Set anchor point for a geosphere distance calculations
		 * <p>Sets anchor point for a geosphere distance (geodistance) calculations and enables them.</p><p>Once an anchor point is set, you can use magic "@geodist" attribute name in your filters and/or sorting expressions.</p>
		 * @param string $attrlat <p>Name of a latitude attribute.</p>
		 * @param string $attrlong <p>Name of a longitude attribute.</p>
		 * @param float $latitude <p>Anchor latitude in radians.</p>
		 * @param float $longitude <p>Anchor longitude in radians.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setgeoanchor.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setGeoAnchor(string $attrlat, string $attrlong, float $latitude, float $longitude): bool {}

		/**
		 * Set grouping attribute
		 * <p>Sets grouping attribute, function, and group sorting mode, and enables grouping.</p><p>Grouping feature is very similar to GROUP BY clause in SQL. Results produced by this function call are going to be the same as produced by the following pseudo code: <b>SELECT ... GROUP BY $func($attribute) ORDER BY $groupsort</b>.</p>
		 * @param string $attribute <p>A string containing group-by attribute name.</p>
		 * @param int $func <p>Constant, which sets a function applied to the attribute value in order to compute group-by key.</p>
		 * @param string $groupsort <p>An optional clause controlling how the groups are sorted.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setgroupby.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setGroupBy(string $attribute, int $func, string $groupsort = "@group desc"): bool {}

		/**
		 * Set attribute name for per-group distinct values count calculations
		 * <p>Sets attribute name for per-group distinct values count calculations. Only available for grouping queries. For each group, all values of <code>attribute</code> will be stored, then the amount of distinct values will be calculated and returned to the client. This feature is similar to COUNT(DISTINCT) clause in SQL.</p>
		 * @param string $attribute <p>A string containing group-by attribute name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setgroupdistinct.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setGroupDistinct(string $attribute): bool {}

		/**
		 * Set a range of accepted document IDs
		 * <p>Sets an accepted range of document IDs. Default range is from 0 to 0, i.e. no limit. Only those records that have document ID between <code>min</code> and <code>max</code> (including IDs exactly equal to <code>min</code> or <code>max</code>) will be matched.</p>
		 * @param int $min <p>Minimum ID value.</p>
		 * @param int $max <p>Maximum ID value.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setidrange.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setIDRange(int $min, int $max): bool {}

		/**
		 * Set per-index weights
		 * <p>Sets per-index weights and enables weighted summing of match weights across different indexes.</p>
		 * @param array $weights <p>An associative array mapping string index names to integer weights. Default is empty array, i.e. weighting summing is disabled.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setindexweights.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setIndexWeights(array $weights): bool {}

		/**
		 * Set offset and limit of the result set
		 * <p>Sets <code>offset</code> into server-side result set and amount of matches to return to client starting from that offset (<code>limit</code>). Can additionally control maximum server-side result set size for current query (<code>max_matches</code>) and the threshold amount of matches to stop searching at (<code>cutoff</code>).</p>
		 * @param int $offset <p>Result set offset.</p>
		 * @param int $limit <p>Amount of matches to return.</p>
		 * @param int $max_matches <p>Controls how much matches searchd will keep in RAM while searching.</p>
		 * @param int $cutoff <p>Used for advanced performance control. It tells searchd to forcibly stop search query once <code>cutoff</code> matches have been found and processed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setlimits.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setLimits(int $offset, int $limit, int $max_matches = 0, int $cutoff = 0): bool {}

		/**
		 * Set full-text query matching mode
		 * <p>Sets full-text query matching mode. <code>mode</code> is one of the constants listed below.</p>
		 * @param int $mode <p>Matching mode.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setmatchmode.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setMatchMode(int $mode): bool {}

		/**
		 * Set maximum query time
		 * <p>Sets maximum search query time.</p>
		 * @param int $qtime <p>Maximum query time, in milliseconds. It must be a non-negative integer. Default value is 0, i.e. no limit.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setmaxquerytime.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setMaxQueryTime(int $qtime): bool {}

		/**
		 * Sets temporary per-document attribute value overrides
		 * <p>Sets temporary (per-query) per-document attribute value overrides. Override feature lets you "temporary" update attribute values for some documents within a single query, leaving all other queries unaffected. This might be useful for personalized data</p>
		 * @param string $attribute <p>An attribute name.</p>
		 * @param int $type <p>An attribute type. Only supports scalar attributes.</p>
		 * @param array $values <p>Array of attribute values that maps document IDs to overridden attribute values.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setoverride.php
		 * @since PECL sphinx >= 1.0.3
		 */
		public function setOverride(string $attribute, int $type, array $values): bool {}

		/**
		 * Set ranking mode
		 * <p>Sets ranking mode. Only available in <b><code>SPH_MATCH_EXTENDED2</code></b> matching mode.</p>
		 * @param int $ranker <p>Ranking mode.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setrankingmode.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setRankingMode(int $ranker): bool {}

		/**
		 * Set retry count and delay
		 * <p>Sets distributed retry count and delay.</p><p>On temporary failures searchd will attempt up to <code>count</code> retries per agent. <code>delay</code> is the delay between the retries, in milliseconds. Retries are disabled by default. Note that this call will not make the API itself retry on temporary failure; it only tells searchd to do so.</p>
		 * @param int $count <p>Number of retries.</p>
		 * @param int $delay
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setretries.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setRetries(int $count, int $delay = 0): bool {}

		/**
		 * Set select clause
		 * <p>Sets the select clause, listing specific attributes to fetch, and expressions to compute and fetch.</p>
		 * @param string $clause <p>SQL-like clause.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setselect.php
		 * @since PECL sphinx >= 1.0.1
		 */
		public function setSelect(string $clause): bool {}

		/**
		 * Set searchd host and port
		 * <p>Sets searchd host name and TCP port. All subsequent requests will use the new host and port settings. Default host and port are 'localhost' and 3312, respectively.</p>
		 * @param string $server <p>IP or hostname.</p>
		 * @param int $port <p>Port number.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setserver.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setServer(string $server, int $port): bool {}

		/**
		 * Set matches sorting mode
		 * <p>Sets matches sorting mode. See available modes below.</p>
		 * @param int $mode <p>Sorting mode.</p>
		 * @param string $sortby
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.setsortmode.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function setSortMode(int $mode, string $sortby = NULL): bool {}

		/**
		 * Queries searchd status
		 * <p>Queries searchd status, and returns an array of status variable name and value pairs.</p>
		 * @return array <p>Returns an associative array of search server statistics or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.status.php
		 * @since PECL sphinx >= 1.0.3
		 */
		public function status(): array {}

		/**
		 * Update document attributes
		 * <p>Instantly updates given attribute values in given documents.</p>
		 * @param string $index <p>Name of the index (or indexes) to be updated.</p>
		 * @param array $attributes <p>Array of attribute names, listing attributes that are updated.</p>
		 * @param array $values <p>Associative array containing document IDs as keys and array of attribute values as values.</p>
		 * @param bool $mva
		 * @return int <p>Returns number of actually updated documents (0 or more) on success, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/sphinxclient.updateattributes.php
		 * @since PECL sphinx >= 0.1.0
		 */
		public function updateAttributes(string $index, array $attributes, array $values, bool $mva = FALSE): int {}
	}

	define('SEARCHD_ERROR', null);

	define('SEARCHD_OK', null);

	define('SEARCHD_RETRY', null);

	define('SEARCHD_WARNING', null);

	define('SPH_ATTR_BOOL', null);

	define('SPH_ATTR_FLOAT', null);

	define('SPH_ATTR_INTEGER', null);

	define('SPH_ATTR_MULTI', null);

	define('SPH_ATTR_ORDINAL', null);

	define('SPH_ATTR_TIMESTAMP', null);

	define('SPH_FILTER_FLOATRANGE', null);

	define('SPH_FILTER_RANGE', null);

	define('SPH_FILTER_VALUES', null);

	define('SPH_GROUPBY_ATTR', null);

	define('SPH_GROUPBY_ATTRPAIR', null);

	define('SPH_GROUPBY_DAY', null);

	define('SPH_GROUPBY_MONTH', null);

	define('SPH_GROUPBY_WEEK', null);

	define('SPH_GROUPBY_YEAR', null);

	define('SPH_MATCH_ALL', null);

	define('SPH_MATCH_ANY', null);

	define('SPH_MATCH_BOOLEAN', null);

	define('SPH_MATCH_EXTENDED', null);

	define('SPH_MATCH_EXTENDED2', null);

	define('SPH_MATCH_FULLSCAN', null);

	define('SPH_MATCH_PHRASE', null);

	define('SPH_RANK_BM25', null);

	define('SPH_RANK_NONE', null);

	define('SPH_RANK_PROXIMITY_BM25', null);

	define('SPH_RANK_WORDCOUNT', null);

	define('SPH_SORT_ATTR_ASC', null);

	define('SPH_SORT_ATTR_DESC', null);

	define('SPH_SORT_EXPR', null);

	define('SPH_SORT_EXTENDED', null);

	define('SPH_SORT_RELEVANCE', null);

	define('SPH_SORT_TIME_SEGMENTS', null);

}
