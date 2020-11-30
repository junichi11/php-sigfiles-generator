<?php



namespace {

	/**
	 * <p>The <b>APCIterator</b> class makes it easier to iterate over large APC caches. This is helpful as it allows iterating over large caches in steps, while grabbing a defined number of entries per lock instance, so it frees the cache locks for other activities rather than hold up the entire cache to grab 100 (the default) entries. Also, using regular expression matching is more efficient as it's been moved to the C level.</p>
	 * @link http://php.net/manual/en/class.apciterator.php
	 * @since PECL apc >= 3.1.1
	 */
	class APCIterator implements \Iterator {

		/**
		 * Constructs an APCIterator iterator object
		 * <p>Constructs an APCIterator <code>object</code>.</p>
		 * @param string $cache <p>The cache type, which will be <i>user</i> or <i>file</i>.</p>
		 * @param mixed $search <p>A PCRE regular expression that matches against APC key names, either as a <code>string</code> for a single regular expression, or as an <code>array</code> of regular expressions. Or, optionally pass in <b><code>NULL</code></b> to skip the search.</p>
		 * @param int $format <p>The desired format, as configured with one or more of the APC_ITER_&#42; constants.</p>
		 * @param int $chunk_size <p>The chunk size. Must be a value greater than 0. The default value is 100.</p>
		 * @param int $list <p>The type to list. Either pass in <b><code>APC_LIST_ACTIVE</code></b> or <b><code>APC_LIST_DELETED</code></b>.</p>
		 * @return self <p>An APCIterator <code>object</code> on success, or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/apciterator.construct.php
		 * @see apc_exists(), apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function __construct(string $cache, $search = NULL, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE) {}

		/**
		 * Get current item
		 * <p>Gets the current item from the APCIterator stack.</p>
		 * @return mixed <p>Returns the current item on success, or <b><code>FALSE</code></b> if no more items or exist, or on failure.</p>
		 * @link http://php.net/manual/en/apciterator.current.php
		 * @since PECL apc >= 3.1.1
		 */
		public function current() {}

		/**
		 * Get total count
		 * <p>Get the total count.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The total count.</p>
		 * @link http://php.net/manual/en/apciterator.gettotalcount.php
		 * @see apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function getTotalCount(): int {}

		/**
		 * Get total cache hits
		 * <p>Gets the total number of cache hits.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of hits on success, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/apciterator.gettotalhits.php
		 * @see apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function getTotalHits(): int {}

		/**
		 * Get total cache size
		 * <p>Gets the total cache size.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The total cache size.</p>
		 * @link http://php.net/manual/en/apciterator.gettotalsize.php
		 * @see apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function getTotalSize(): int {}

		/**
		 * Get iterator key
		 * <p>Gets the current iterator key.</p>
		 * @return string <p>Returns the key on success, or <b><code>FALSE</code></b> upon failure.</p>
		 * @link http://php.net/manual/en/apciterator.key.php
		 * @since PECL apc >= 3.1.1
		 */
		public function key(): string {}

		/**
		 * Move pointer to next item
		 * <p>Moves the iterator pointer to the next element.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/apciterator.next.php
		 * @since PECL apc >= 3.1.1
		 */
		public function next(): void {}

		/**
		 * Rewinds iterator
		 * <p>Rewinds back the iterator to the first element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/apciterator.rewind.php
		 * @since PECL apc >= 3.1.1
		 */
		public function rewind(): void {}

		/**
		 * Checks if current position is valid
		 * <p>Checks if the current iterator position is valid.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> if the current iterator position is valid, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/apciterator.valid.php
		 * @since PECL apc >= 3.1.1
		 */
		public function valid(): void {}
	}

	/**
	 * Cache a new variable in the data store
	 * <p>Caches a variable in the data store, only if it's not already stored.</p><p><b>Note</b>:  Unlike many other mechanisms in PHP, variables stored using <b>apc_add()</b> will persist between requests (until the value is removed from the cache). </p>
	 * @param string $key <p>Store the variable using this name. <code>key</code>s are cache-unique, so attempting to use <b>apc_add()</b> to store data with a key that already exists will not overwrite the existing data, and will instead return <b><code>FALSE</code></b>. (This is the only difference between <b>apc_add()</b> and <code>apc_store()</code>.)</p>
	 * @param mixed $var <p>The variable to store</p>
	 * @param int $ttl <p>Time To Live; store <code>var</code> in the cache for <code>ttl</code> seconds. After the <code>ttl</code> has passed, the stored variable will be expunged from the cache (on the next request). If no <code>ttl</code> is supplied (or if the <code>ttl</code> is <i>0</i>), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).</p>
	 * @return bool <p>Returns TRUE if something has effectively been added into the cache, FALSE otherwise. Second syntax returns array with error keys.</p>
	 * @link http://php.net/manual/en/function.apc-add.php
	 * @see apc_store(), apc_fetch(), apc_delete()
	 * @since PECL apc >= 3.0.13
	 */
	function apc_add(string $key, $var, int $ttl = 0): bool {}

	/**
	 * Get a binary dump of the given files and user variables
	 * <p>Returns a binary dump of the given files and user variables from the APC cache. A <b><code>NULL</code></b> for files or user_vars signals a dump of every entry, whereas array() will dump nothing.</p>
	 * @param array $files <p>The files. Passing in <b><code>NULL</code></b> signals a dump of every entry, while passing in <code>array()</code> will dump nothing.</p>
	 * @param array $user_vars <p>The user vars. Passing in <b><code>NULL</code></b> signals a dump of every entry, while passing in <code>array()</code> will dump nothing.</p>
	 * @return string <p>Returns a binary dump of the given files and user variables from the APC cache, <b><code>FALSE</code></b> if APC is not enabled, or <b><code>NULL</code></b> if an unknown error is encountered.</p>
	 * @link http://php.net/manual/en/function.apc-bin-dump.php
	 * @see apc_bin_dumpfile(), apc_bin_load()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_dump(array $files = NULL, array $user_vars = NULL): string {}

	/**
	 * Output a binary dump of cached files and user variables to a file
	 * <p>Outputs a binary dump of the given files and user variables from the APC cache to the named file.</p>
	 * @param array $files <p>The file names being dumped.</p>
	 * @param array $user_vars <p>The user variables being dumped.</p>
	 * @param string $filename <p>The filename where the dump is being saved.</p>
	 * @param int $flags <p>Flags passed to the <code>filename</code> stream. See the <code>file_put_contents()</code> documentation for details.</p>
	 * @param resource $context <p>The context passed to the <code>filename</code> stream. See the <code>file_put_contents()</code> documentation for details.</p>
	 * @return int <p>The number of bytes written to the file, otherwise <b><code>FALSE</code></b> if APC is not enabled, <code>filename</code> is an invalid file name, <code>filename</code> can't be opened, the file dump can't be completed (e.g., the hard drive is out of disk space), or an unknown error was encountered.</p>
	 * @link http://php.net/manual/en/function.apc-bin-dumpfile.php
	 * @see apc_bin_dump(), apc_bin_load()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_dumpfile(array $files, array $user_vars, string $filename, int $flags = 0, $context = NULL): int {}

	/**
	 * Load a binary dump into the APC file/user cache
	 * <p>Loads the given binary dump into the APC file/user cache.</p>
	 * @param string $data <p>The binary dump being loaded, likely from <code>apc_bin_dump()</code>.</p>
	 * @param int $flags <p>Either <b><code>APC_BIN_VERIFY_CRC32</code></b>, <b><code>APC_BIN_VERIFY_MD5</code></b>, or both.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the binary dump <code>data</code> was loaded with success, otherwise <b><code>FALSE</code></b> is returned. <b><code>FALSE</code></b> is returned if APC is not enabled, or if the <code>data</code> is not a valid APC binary dump (e.g., unexpected size).</p>
	 * @link http://php.net/manual/en/function.apc-bin-load.php
	 * @see apc_bin_dump(), apc_bin_loadfile()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_load(string $data, int $flags = 0): bool {}

	/**
	 * Load a binary dump from a file into the APC file/user cache
	 * <p>Loads a binary dump from a file into the APC file/user cache.</p>
	 * @param string $filename <p>The file name containing the dump, likely from <code>apc_bin_dumpfile()</code>.</p>
	 * @param resource $context <p>The files context.</p>
	 * @param int $flags <p>Either <b><code>APC_BIN_VERIFY_CRC32</code></b>, <b><code>APC_BIN_VERIFY_MD5</code></b>, or both.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success, otherwise <b><code>FALSE</code></b> Reasons it may return <b><code>FALSE</code></b> include APC is not enabled, <code>filename</code> is an invalid file name or empty, <code>filename</code> can't be opened, the file dump can't be completed, or if the <code>data</code> is not a valid APC binary dump (e.g., unexpected size).</p>
	 * @link http://php.net/manual/en/function.apc-bin-loadfile.php
	 * @see apc_bin_dumpfile(), apc_bin_load()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_loadfile(string $filename, $context = NULL, int $flags = 0): bool {}

	/**
	 * Retrieves cached information from APC's data store
	 * <p>Retrieves cached information and meta-data from APC's data store.</p>
	 * @param string $cache_type <p>If <code>cache_type</code> is "<i>user</i>", information about the user cache will be returned.</p> <p>If <code>cache_type</code> is "<i>filehits</i>", information about which files have been served from the bytecode cache for the current request will be returned. This feature must be enabled at compile time using <b>--enable-filehits</b> .</p> <p>If an invalid or no <code>cache_type</code> is specified, information about the system cache (cached files) will be returned.</p>
	 * @param bool $limited <p>If <code>limited</code> is <b><code>TRUE</code></b>, the return value will exclude the individual list of cache entries. This is useful when trying to optimize calls for statistics gathering.</p>
	 * @return array <p>Array of cached data (and meta-data) or <b><code>FALSE</code></b> on failure</p><p><b>Note</b>:  <b>apc_cache_info()</b> will raise a warning if it is unable to retrieve APC cache data. This typically occurs when APC is not enabled. </p>
	 * @link http://php.net/manual/en/function.apc-cache-info.php
	 * @since PECL apc >= 2.0.0
	 */
	function apc_cache_info(string $cache_type = "", bool $limited = FALSE): array {}

	/**
	 * Updates an old value with a new value
	 * <p><b>apc_cas()</b> updates an already existing integer value if the <code>old</code> parameter matches the currently stored value with the value of the <code>new</code> parameter.</p>
	 * @param string $key <p>The key of the value being updated.</p>
	 * @param int $old <p>The old value (the value currently stored).</p>
	 * @param int $new <p>The new value to update to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apc-cas.php
	 * @see apc_dec(), apc_store()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_cas(string $key, int $old, int $new): bool {}

	/**
	 * Clears the APC cache
	 * <p>Clears the user/system cache.</p>
	 * @param string $cache_type <p>If <code>cache_type</code> is "<i>user</i>", the user cache will be cleared; otherwise, the system cache (cached files) will be cleared.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> always</p>
	 * @link http://php.net/manual/en/function.apc-clear-cache.php
	 * @see apc_cache_info()
	 * @since PECL apc >= 2.0.0
	 */
	function apc_clear_cache(string $cache_type = ""): bool {}

	/**
	 * Stores a file in the bytecode cache, bypassing all filters
	 * <p>Stores a file in the bytecode cache, bypassing all filters.</p>
	 * @param string $filename <p>Full or relative path to a PHP file that will be compiled and stored in the bytecode cache.</p>
	 * @param bool $atomic
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apc-compile-file.php
	 * @see apc_bin_dumpfile(), apc_bin_loadfile()
	 * @since PECL apc >= 3.0.13
	 */
	function apc_compile_file(string $filename, bool $atomic = TRUE) {}

	/**
	 * Decrease a stored number
	 * <p>Decreases a stored integer value.</p>
	 * @param string $key <p>The key of the value being decreased.</p>
	 * @param int $step <p>The step, or value to decrease.</p>
	 * @param bool $success <p>Optionally pass the success or fail boolean value to this referenced variable.</p>
	 * @return int <p>Returns the current value of <code>key</code>'s value on success, or <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.apc-dec.php
	 * @see apc_inc()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_dec(string $key, int $step = 1, bool &$success = NULL): int {}

	/**
	 * Defines a set of constants for retrieval and mass-definition
	 * <p><code>define()</code> is notoriously slow. Since the main benefit of APC is to increase the performance of scripts/applications, this mechanism is provided to streamline the process of mass constant definition. However, this function does not perform as well as anticipated.</p><p>For a better-performing solution, try the hidef extension from PECL.</p><p><b>Note</b>:  To remove a set of stored constants (without clearing the entire cache), an empty array may be passed as the <code>constants</code> parameter, effectively clearing the stored value(s). </p>
	 * @param string $key <p>The <code>key</code> serves as the name of the constant set being stored. This <code>key</code> is used to retrieve the stored constants in <code>apc_load_constants()</code>.</p>
	 * @param array $constants <p>An associative array of <i>constant_name =&gt; value</i> pairs. The <i>constant_name</i> must follow the normal constant naming rules. <i>value</i> must evaluate to a scalar value.</p>
	 * @param bool $case_sensitive <p>The default behaviour for constants is to be declared case-sensitive; i.e. <i>CONSTANT</i> and <i>Constant</i> represent different values. If this parameter evaluates to <b><code>FALSE</code></b> the constants will be declared as case-insensitive symbols.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apc-define-constants.php
	 * @see apc_load_constants(), define(), constant()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_define_constants(string $key, array $constants, bool $case_sensitive = TRUE): bool {}

	/**
	 * Removes a stored variable from the cache
	 * <p>Removes a stored variable from the cache.</p>
	 * @param string $key <p>The <code>key</code> used to store the value (with <code>apc_store()</code>).</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apc-delete.php
	 * @see apc_store(), apc_fetch()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_delete(string $key) {}

	/**
	 * Deletes files from the opcode cache
	 * <p>Deletes the given files from the opcode cache.</p>
	 * @param mixed $keys <p>The files to be deleted. Accepts a <code>string</code>, <code>array</code> of strings, or an APCIterator <code>object</code>.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Or if <code>keys</code> is an <code>array</code>, then an empty array is returned on success, or an array of failed files is returned.</p>
	 * @link http://php.net/manual/en/function.apc-delete-file.php
	 * @see apc_clear_cache(), apc_delete(), apc_exists()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_delete_file($keys) {}

	/**
	 * Checks if APC key exists
	 * <p>Checks if one or more APC keys exist.</p>
	 * @param mixed $keys <p>A <code>string</code>, or an <code>array</code> of strings, that contain keys.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if the key exists, otherwise <b><code>FALSE</code></b> Or if an <code>array</code> was passed to <code>keys</code>, then an array is returned that contains all existing keys, or an empty array if none exist.</p>
	 * @link http://php.net/manual/en/function.apc-exists.php
	 * @see apc_cache_info(), apc_fetch()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_exists($keys) {}

	/**
	 * Fetch a stored variable from the cache
	 * <p>Fetchs a stored variable from the cache.</p>
	 * @param mixed $key <p>The <code>key</code> used to store the value (with <code>apc_store()</code>). If an array is passed then each element is fetched and returned.</p>
	 * @param bool $success <p>Set to <b><code>TRUE</code></b> in success and <b><code>FALSE</code></b> in failure.</p>
	 * @return mixed <p>The stored variable or array of variables on success; <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.apc-fetch.php
	 * @see apc_store(), apc_delete()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_fetch($key, bool &$success = NULL) {}

	/**
	 * Increase a stored number
	 * <p>Increases a stored number.</p>
	 * @param string $key <p>The key of the value being increased.</p>
	 * @param int $step <p>The step, or value to increase.</p>
	 * @param bool $success <p>Optionally pass the success or fail boolean value to this referenced variable.</p>
	 * @return int <p>Returns the current value of <code>key</code>'s value on success, or <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.apc-inc.php
	 * @see apc_dec()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_inc(string $key, int $step = 1, bool &$success = NULL): int {}

	/**
	 * Loads a set of constants from the cache
	 * <p>Loads a set of constants from the cache.</p>
	 * @param string $key <p>The name of the constant set (that was stored with <code>apc_define_constants()</code>) to be retrieved.</p>
	 * @param bool $case_sensitive <p>The default behaviour for constants is to be declared case-sensitive; i.e. <i>CONSTANT</i> and <i>Constant</i> represent different values. If this parameter evaluates to <b><code>FALSE</code></b> the constants will be declared as case-insensitive symbols.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apc-load-constants.php
	 * @see apc_define_constants(), define(), constant()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_load_constants(string $key, bool $case_sensitive = TRUE): bool {}

	/**
	 * Retrieves APC's Shared Memory Allocation information
	 * <p>Retrieves APC's Shared Memory Allocation information.</p>
	 * @param bool $limited <p>When set to <b><code>FALSE</code></b> (default) <b>apc_sma_info()</b> will return a detailed information about each segment.</p>
	 * @return array <p>Array of Shared Memory Allocation data; <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apc-sma-info.php
	 * @since PECL apc >= 2.0.0
	 */
	function apc_sma_info(bool $limited = FALSE): array {}

	/**
	 * Cache a variable in the data store
	 * <p>Cache a variable in the data store.</p><p><b>Note</b>:  Unlike many other mechanisms in PHP, variables stored using <b>apc_store()</b> will persist between requests (until the value is removed from the cache). </p>
	 * @param string $key <p>Store the variable using this name. <code>key</code>s are cache-unique, so storing a second value with the same <code>key</code> will overwrite the original value.</p>
	 * @param mixed $var <p>The variable to store</p>
	 * @param int $ttl <p>Time To Live; store <code>var</code> in the cache for <code>ttl</code> seconds. After the <code>ttl</code> has passed, the stored variable will be expunged from the cache (on the next request). If no <code>ttl</code> is supplied (or if the <code>ttl</code> is <i>0</i>), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Second syntax returns array with error keys.</p>
	 * @link http://php.net/manual/en/function.apc-store.php
	 * @see apc_add(), apc_fetch(), apc_delete()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_store(string $key, $var, int $ttl = 0): bool {}

	define('APC_BIN_VERIFY_CRC32', null);

	define('APC_BIN_VERIFY_MD5', null);

	define('APC_ITER_ALL', null);

	define('APC_ITER_ATIME', null);

	define('APC_ITER_CTIME', null);

	define('APC_ITER_DEVICE', null);

	define('APC_ITER_DTIME', null);

	define('APC_ITER_FILENAME', null);

	define('APC_ITER_INODE', null);

	define('APC_ITER_KEY', null);

	define('APC_ITER_MD5', null);

	define('APC_ITER_MEM_SIZE', null);

	define('APC_ITER_MTIME', null);

	define('APC_ITER_NONE', null);

	define('APC_ITER_NUM_HITS', null);

	define('APC_ITER_REFCOUNT', null);

	define('APC_ITER_TTL', null);

	define('APC_ITER_TYPE', null);

	define('APC_ITER_VALUE', null);

	define('APC_LIST_ACTIVE', null);

	define('APC_LIST_DELETED', null);

}
