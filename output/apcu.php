<?php



namespace {

	/**
	 * <p>The <b>APCUIterator</b> class makes it easier to iterate over large APCu caches. This is helpful as it allows iterating over large caches in steps, while grabbing a defined number of entries per lock instance, so it frees the cache locks for other activities rather than hold up the entire cache to grab 100 (the default) entries. Also, using regular expression matching is more efficient as it's been moved to the C level.</p>
	 * @link http://php.net/manual/en/class.apcuiterator.php
	 * @since PECL apcu >= 5.0.0
	 */
	class APCUIterator implements \Iterator {

		/**
		 * Constructs an APCUIterator iterator object
		 * <p>Constructs an APCUIterator <code>object</code>.</p>
		 * @param mixed $search <p>A PCRE regular expression that matches against APCu key names, either as a <code>string</code> for a single regular expression, or as an <code>array</code> of regular expressions. Or, optionally pass in <b><code>NULL</code></b> to skip the search.</p>
		 * @param int $format <p>The desired format, as configured with one or more of the APC_ITER_&#42; constants.</p>
		 * @param int $chunk_size <p>The chunk size. Must be a value greater than 0. The default value is 100.</p>
		 * @param int $list <p>The type to list. Either pass in <b><code>APC_LIST_ACTIVE</code></b> or <b><code>APC_LIST_DELETED</code></b>.</p>
		 * @return self <p>An APCUIterator <code>object</code> on success, or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/apcuiterator.construct.php
		 * @see apcu_exists(), apcu_cache_info()
		 * @since PECL apcu >= 5.0.0
		 */
		public function __construct($search = NULL, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE) {}

		/**
		 * Get current item
		 * <p>Gets the current item from the APCUIterator stack.</p>
		 * @return mixed <p>Returns the current item on success, or <b><code>FALSE</code></b> if no more items or exist, or on failure.</p>
		 * @link http://php.net/manual/en/apcuiterator.current.php
		 * @since PECL apcu >= 5.0.0
		 */
		public function current() {}

		/**
		 * Get total count
		 * <p>Get the total count.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The total count.</p>
		 * @link http://php.net/manual/en/apcuiterator.gettotalcount.php
		 * @see apcu_cache_info()
		 * @since PECL apcu >= 5.0.0
		 */
		public function getTotalCount(): int {}

		/**
		 * Get total cache hits
		 * <p>Gets the total number of cache hits.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of hits on success, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/apcuiterator.gettotalhits.php
		 * @see apcu_cache_info()
		 * @since PECL apcu >= 5.0.0
		 */
		public function getTotalHits(): int {}

		/**
		 * Get total cache size
		 * <p>Gets the total cache size.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The total cache size.</p>
		 * @link http://php.net/manual/en/apcuiterator.gettotalsize.php
		 * @see apc_cache_info()
		 * @since PECL apcu >= 5.0.0
		 */
		public function getTotalSize(): int {}

		/**
		 * Get iterator key
		 * <p>Gets the current iterator key.</p>
		 * @return string <p>Returns the key on success, or <b><code>FALSE</code></b> upon failure.</p>
		 * @link http://php.net/manual/en/apcuiterator.key.php
		 * @since PECL apcu >= 5.0.0
		 */
		public function key(): string {}

		/**
		 * Move pointer to next item
		 * <p>Moves the iterator pointer to the next element.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/apcuiterator.next.php
		 * @since PECL apcu >= 5.0.0
		 */
		public function next(): void {}

		/**
		 * Rewinds iterator
		 * <p>Rewinds back the iterator to the first element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/apcuiterator.rewind.php
		 * @since PECL apcu >= 5.0.0
		 */
		public function rewind(): void {}

		/**
		 * Checks if current position is valid
		 * <p>Checks if the current iterator position is valid.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> if the current iterator position is valid, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/apcuiterator.valid.php
		 * @since PECL apcu >= 5.0.0
		 */
		public function valid(): void {}
	}

	/**
	 * Cache a new variable in the data store
	 * <p>Caches a variable in the data store, only if it's not already stored.</p><p><b>Note</b>:  Unlike many other mechanisms in PHP, variables stored using <b>apcu_add()</b> will persist between requests (until the value is removed from the cache). </p>
	 * @param string $key <p>Store the variable using this name. <code>key</code>s are cache-unique, so attempting to use <b>apcu_add()</b> to store data with a key that already exists will not overwrite the existing data, and will instead return <b><code>FALSE</code></b>. (This is the only difference between <b>apcu_add()</b> and <code>apcu_store()</code>.)</p>
	 * @param mixed $var <p>The variable to store</p>
	 * @param int $ttl <p>Time To Live; store <code>var</code> in the cache for <code>ttl</code> seconds. After the <code>ttl</code> has passed, the stored variable will be expunged from the cache (on the next request). If no <code>ttl</code> is supplied (or if the <code>ttl</code> is <i>0</i>), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).</p>
	 * @return bool <p>Returns TRUE if something has effectively been added into the cache, FALSE otherwise. Second syntax returns array with error keys.</p>
	 * @link http://php.net/manual/en/function.apcu-add.php
	 * @see apcu_store(), apcu_fetch(), apcu_delete()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_add(string $key, $var, int $ttl = 0): bool {}

	/**
	 * Retrieves cached information from APCu's data store
	 * <p>Retrieves cached information and meta-data from APC's data store.</p>
	 * @param bool $limited <p>If <code>limited</code> is <b><code>TRUE</code></b>, the return value will exclude the individual list of cache entries. This is useful when trying to optimize calls for statistics gathering.</p>
	 * @return array <p>Array of cached data (and meta-data) or <b><code>FALSE</code></b> on failure</p><p><b>Note</b>:  <b>apcu_cache_info()</b> will raise a warning if it is unable to retrieve APC cache data. This typically occurs when APC is not enabled. </p>
	 * @link http://php.net/manual/en/function.apcu-cache-info.php
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_cache_info(bool $limited = FALSE): array {}

	/**
	 * Updates an old value with a new value
	 * <p><b>apcu_cas()</b> updates an already existing integer value if the <code>old</code> parameter matches the currently stored value with the value of the <code>new</code> parameter.</p>
	 * @param string $key <p>The key of the value being updated.</p>
	 * @param int $old <p>The old value (the value currently stored).</p>
	 * @param int $new <p>The new value to update to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apcu-cas.php
	 * @see apcu_dec(), apcu_store()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_cas(string $key, int $old, int $new): bool {}

	/**
	 * Clears the APCu cache
	 * <p>Clears the cache.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> always</p>
	 * @link http://php.net/manual/en/function.apcu-clear-cache.php
	 * @see apcu_cache_info()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_clear_cache(): bool {}

	/**
	 * Decrease a stored number
	 * <p>Decreases a stored integer value.</p>
	 * @param string $key <p>The key of the value being decreased.</p>
	 * @param int $step <p>The step, or value to decrease.</p>
	 * @param bool $success <p>Optionally pass the success or fail boolean value to this referenced variable.</p>
	 * @return int <p>Returns the current value of <code>key</code>'s value on success, or <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.apcu-dec.php
	 * @see apcu_inc()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_dec(string $key, int $step = 1, bool &$success = NULL): int {}

	/**
	 * Removes a stored variable from the cache
	 * <p>Removes a stored variable from the cache.</p>
	 * @param mixed $key <p>A <code>key</code> used to store the value as a <code>string</code> for a single key, or as an <code>array</code> of strings for several keys, or as an APCUIterator <code>object</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apcu-delete.php
	 * @see apcu_store(), apcu_fetch(), apcu_clear_cache()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_delete($key): bool {}

	/**
	 * Atomically fetch or generate a cache entry
	 * <p>Atomically attempts to find <code>key</code> in the cache, if it cannot be found <code>generator</code> is called, passing <code>key</code> as the only argument. The return value of the call is then cached with the optionally specified <code>ttl</code>, and returned.</p><p><b>Note</b>:  When control enters <b>apcu_entry()</b> the lock for the cache is acquired exclusively, it is released when control leaves <b>apcu_entry()</b>: In effect, this turns the body of <code>generator</code> into a critical section, disallowing two processes from executing the same code paths concurrently. In addition, it prohibits the concurrent execution of any other APCu functions, since they will acquire the same lock. </p><p>The only APCu function that can be called safely by <code>generator</code> is <b>apcu_entry()</b>.</p>
	 * @param string $key <p>Identity of cache entry</p>
	 * @param callable $generator <p>A callable that accepts <code>key</code> as the only argument and returns the value to cache.</p>
	 * @param int $ttl <p>Time To Live; store <code>var</code> in the cache for <code>ttl</code> seconds. After the <code>ttl</code> has passed, the stored variable will be expunged from the cache (on the next request). If no <code>ttl</code> is supplied (or if the <code>ttl</code> is <i>0</i>), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).</p>
	 * @return mixed <p>Returns the cached value</p>
	 * @link http://php.net/manual/en/function.apcu-entry.php
	 * @see apcu_store(), apcu_fetch(), apcu_delete()
	 * @since PECL apcu >= 5.1.0
	 */
	function apcu_entry(string $key, callable $generator, int $ttl = 0) {}

	/**
	 * Checks if entry exists
	 * <p>Checks if one or more APCu entries exist.</p>
	 * @param mixed $keys <p>A <code>string</code>, or an <code>array</code> of strings, that contain keys.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if the key exists, otherwise <b><code>FALSE</code></b> Or if an <code>array</code> was passed to <code>keys</code>, then an array is returned that contains all existing keys, or an empty array if none exist.</p>
	 * @link http://php.net/manual/en/function.apcu-exists.php
	 * @see apcu_cache_info(), apcu_fetch()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_exists($keys) {}

	/**
	 * Fetch a stored variable from the cache
	 * <p>Fetchs an entry from the cache.</p>
	 * @param mixed $key <p>The <code>key</code> used to store the value (with <code>apcu_store()</code>). If an array is passed then each element is fetched and returned.</p>
	 * @param bool $success <p>Set to <b><code>TRUE</code></b> in success and <b><code>FALSE</code></b> in failure.</p>
	 * @return mixed <p>The stored variable or array of variables on success; <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.apcu-fetch.php
	 * @see apcu_store(), apcu_delete()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_fetch($key, bool &$success = NULL) {}

	/**
	 * Increase a stored number
	 * <p>Increases a stored number.</p>
	 * @param string $key <p>The key of the value being increased.</p>
	 * @param int $step <p>The step, or value to increase.</p>
	 * @param bool $success <p>Optionally pass the success or fail boolean value to this referenced variable.</p>
	 * @return int <p>Returns the current value of <code>key</code>'s value on success, or <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.apcu-inc.php
	 * @see apcu_dec()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_inc(string $key, int $step = 1, bool &$success = NULL): int {}

	/**
	 * Retrieves APCu Shared Memory Allocation information
	 * <p>Retrieves APCu Shared Memory Allocation information.</p>
	 * @param bool $limited <p>When set to <b><code>FALSE</code></b> (default) <b>apcu_sma_info()</b> will return a detailed information about each segment.</p>
	 * @return array <p>Array of Shared Memory Allocation data; <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apcu-sma-info.php
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_sma_info(bool $limited = FALSE): array {}

	/**
	 * Cache a variable in the data store
	 * <p>Cache a variable in the data store.</p><p><b>Note</b>:  Unlike many other mechanisms in PHP, variables stored using <b>apcu_store()</b> will persist between requests (until the value is removed from the cache). </p>
	 * @param string $key <p>Store the variable using this name. <code>key</code>s are cache-unique, so storing a second value with the same <code>key</code> will overwrite the original value.</p>
	 * @param mixed $var <p>The variable to store</p>
	 * @param int $ttl <p>Time To Live; store <code>var</code> in the cache for <code>ttl</code> seconds. After the <code>ttl</code> has passed, the stored variable will be expunged from the cache (on the next request). If no <code>ttl</code> is supplied (or if the <code>ttl</code> is <i>0</i>), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Second syntax returns array with error keys.</p>
	 * @link http://php.net/manual/en/function.apcu-store.php
	 * @see apcu_add(), apcu_fetch(), apcu_delete()
	 * @since PECL apcu >= 4.0.0
	 */
	function apcu_store(string $key, $var, int $ttl = 0): bool {}

}
