<?php



namespace {

	/**
	 * Retrieves information about files cached in the file cache
	 * <p>Retrieves information about file cache content and its usage.</p>
	 * @param bool $summaryonly <p>Controls whether the returned array will contain information about individual cache entries along with the file cache summary.</p>
	 * @return array|false <p>Array of meta data about file cache or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>total_cache_uptime</code> - total time in seconds that the file cache has been active  </li> <li>  <code>total_file_count</code> - total number of files that are currently in the file cache  </li> <li>  <code>total_hit_count</code> - number of times the files have been served from the file cache  </li> <li>  <code>total_miss_count</code> - number of times the files have not been found in the file cache  </li> <li> <p><code>file_entries</code> - an array that contains the information about all the cached files:</p><ul> <li>  <code>file_name</code> - absolute file name of the cached file  </li> <li>  <code>add_time</code> - time in seconds since the file has been added to the file cache  </li> <li>  <code>use_time</code> - time in seconds since the file has been accessed in the file cache  </li> <li>  <code>last_check</code> - time in seconds since the file has been checked for modifications  </li> <li>  <code>hit_count</code> - number of times the file has been served from the cache  </li> <li>  <code>file_size</code> - size of the cached file in bytes  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-fcache-fileinfo.php
	 * @see wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_fcache_fileinfo(bool $summaryonly = false): array|false {}

	/**
	 * Retrieves information about file cache memory usage
	 * <p>Retrieves information about memory usage by file cache.</p>
	 * @return array|false <p>Array of meta data about file cache memory usage or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>memory_total</code> - amount of memory in bytes allocated for the file cache  </li> <li>  <code>memory_free</code> - amount of free memory in bytes available for the file cache  </li> <li>  <code>num_used_blks</code> - number of memory blocks used by the file cache  </li> <li>  <code>num_free_blks</code> - number of free memory blocks available for the file cache  </li> <li>  <code>memory_overhead</code> - amount of memory in bytes used for the file cache internal structures  </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-fcache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_fcache_meminfo(): array|false {}

	/**
	 * Acquires an exclusive lock on a given key
	 * <p>Obtains an exclusive lock on a given key. The execution of the current script will be blocked until the lock can be obtained. Once the lock is obtained, the other scripts that try to request the lock by using the same key will be blocked, until the current script releases the lock by using <code>wincache_unlock()</code>.</p><p>Using of the <b>wincache_lock()</b> and <code>wincache_unlock()</code> can cause deadlocks when executing PHP scripts in a multi-process environment like FastCGI. Do not use these functions unless you are absolutely sure you need to use them. For the majority of the operations on the user cache it is not necessary to use these functions.</p>
	 * @param string $key <p>Name of the key in the cache to get the lock on.</p>
	 * @param bool $isglobal <p>Controls whether the scope of the lock is system-wide or local. Local locks are scoped to the application pool in IIS FastCGI case or to all php processes that have the same parent process identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-lock.php
	 * @see wincache_unlock(), wincache_ucache_set(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_lock(string $key, bool $isglobal = false): bool {}

	/**
	 * Retrieves information about files cached in the opcode cache
	 * <p>Retrieves information about opcode cache content and its usage.</p><p>This function was <i>REMOVED</i> in PHP 7.0.0.</p>
	 * @param bool $summaryonly <p>Controls whether the returned array will contain information about individual cache entries along with the opcode cache summary.</p>
	 * @return array|false <p>Array of meta data about opcode cache or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>total_cache_uptime</code> - total time in seconds that the opcode cache has been active  </li> <li>  <code>total_file_count</code> - total number of files that are currently in the opcode cache  </li> <li>  <code>total_hit_count</code> - number of times the compiled opcode have been served from the cache  </li> <li>  <code>total_miss_count</code> - number of times the compiled opcode have not been found in the cache  </li> <li>  <code>is_local_cache</code> - true is the cache metadata is for a local cache instance, false if the metadata is for the global cache  </li> <li> <p><code>file_entries</code> - an array that contains the information about all the cached files:</p><ul> <li>  <code>file_name</code> - absolute file name of the cached file  </li> <li>  <code>add_time</code> - time in seconds since the file has been added to the opcode cache  </li> <li>  <code>use_time</code> - time in seconds since the file has been accessed in the opcode cache  </li> <li>  <code>last_check</code> - time in seconds since the file has been checked for modifications  </li> <li>  <code>hit_count</code> - number of times the file has been served from the cache  </li> <li>  <code>function_count</code> - number of functions in the cached file  </li> <li>  <code>class_count</code> - number of classes in the cached file  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-ocache-fileinfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_ocache_fileinfo(bool $summaryonly = false): array|false {}

	/**
	 * Retrieves information about opcode cache memory usage
	 * <p>Retrieves information about memory usage by opcode cache.</p>
	 * @return array|false <p>Array of meta data about opcode cache memory usage or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>memory_total</code> - amount of memory in bytes allocated for the opcode cache  </li> <li>  <code>memory_free</code> - amount of free memory in bytes available for the opcode cache  </li> <li>  <code>num_used_blks</code> - number of memory blocks used by the opcode cache  </li> <li>  <code>num_free_blks</code> - number of free memory blocks available for the opcode cache  </li> <li>  <code>memory_overhead</code> - amount of memory in bytes used for the opcode cache internal structures  </li> </ul><p><b>Warning</b></p><p>This function was <i>REMOVED</i> in PHP 7.0.0.</p>
	 * @link https://php.net/manual/en/function.wincache-ocache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_ocache_meminfo(): array|false {}

	/**
	 * Refreshes the cache entries for the cached files
	 * <p>Refreshes the cache entries for the files, whose names were passed in the input argument. If no argument is specified then refreshes all the entries in the cache.</p>
	 * @param array $files <p>An array of file names for files that need to be refreshed. An absolute or relative file paths can be used.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-refresh-if-changed.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_refresh_if_changed(array $files = NULL): bool {}

	/**
	 * Retrieves information about resolve file path cache
	 * <p>Retrieves information about cached mappings between relative file paths and corresponding absolute file paths.</p>
	 * @param bool $summaryonly
	 * @return array|false <p>Array of meta data about the resolve file path cache or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>total_file_count</code> - total number of file path mappings stored in the cache  </li> <li> <p><code>rplist_entries</code> - an array that contains the information about all the cached file paths:</p><ul> <li>  <code>resolve_path</code> - path to a file  </li> <li>  <code>subkey_data</code> - corresponding absolute path to a file  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-rplist-fileinfo.php
	 * @see wincache_fcache_meminfo(), wincache_fcache_fileinfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_rplist_fileinfo(bool $summaryonly = false): array|false {}

	/**
	 * Retrieves information about memory usage by the resolve file path cache
	 * <p>Retrieves information about memory usage by resolve file path cache.</p>
	 * @return array|false <p>Array of meta data that describes memory usage by resolve file path cache. or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>memory_total</code> - amount of memory in bytes allocated for the resolve file path cache  </li> <li>  <code>memory_free</code> - amount of free memory in bytes available for the resolve file path cache  </li> <li>  <code>num_used_blks</code> - number of memory blocks used by the resolve file path cache  </li> <li>  <code>num_free_blks</code> - number of free memory blocks available for the resolve file path cache  </li> <li>  <code>memory_overhead</code> - amount of memory in bytes used for the internal structures of resolve file path cache  </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-rplist-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_rplist_meminfo(): array|false {}

	/**
	 * Retrieves information about files cached in the session cache
	 * <p>Retrieves information about session cache content and its usage.</p>
	 * @param bool $summaryonly <p>Controls whether the returned array will contain information about individual cache entries along with the session cache summary.</p>
	 * @return array|false <p>Array of meta data about session cache or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>total_cache_uptime</code> - total time in seconds that the session cache has been active  </li> <li>  <code>total_item_count</code> - total number of elements that are currently in the session cache  </li> <li>  <code>is_local_cache</code> - true is the cache metadata is for a local cache instance, false if the metadata is for the global cache  </li> <li>  <code>total_hit_count</code> - number of times the data has been served from the cache  </li> <li>  <code>total_miss_count</code> - number of times the data has not been found in the cache  </li> <li> <p><code>scache_entries</code> - an array that contains the information about all the cached items:</p><ul> <li>  <code>key_name</code> - name of the key which is used to store the data  </li> <li>  <code>value_type</code> - type of value stored by the key  </li> <li>  <code>use_time</code> - time in seconds since the file has been accessed in the opcode cache  </li> <li>  <code>last_check</code> - time in seconds since the file has been checked for modifications  </li> <li>  <code>ttl_seconds</code> - time remaining for the data to live in the cache, 0 meaning infinite  </li> <li>  <code>age_seconds</code> - time elapsed from the time data has been added in the cache  </li> <li>  <code>hitcount</code> - number of times data has been served from the cache  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-scache-info.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_scache_info(bool $summaryonly = false): array|false {}

	/**
	 * Retrieves information about session cache memory usage
	 * <p>Retrieves information about memory usage by session cache.</p>
	 * @return array|false <p>Array of meta data about session cache memory usage or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>memory_total</code> - amount of memory in bytes allocated for the session cache  </li> <li>  <code>memory_free</code> - amount of free memory in bytes available for the session cache  </li> <li>  <code>num_used_blks</code> - number of memory blocks used by the session cache  </li> <li>  <code>num_free_blks</code> - number of free memory blocks available for the session cache  </li> <li>  <code>memory_overhead</code> - amount of memory in bytes used for the session cache internal structures  </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-scache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_info(), wincache_scache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_scache_meminfo(): array|false {}

	/**
	 * Adds a variable in user cache only if variable does not already exist in the cache
	 * <p>Adds a variable in user cache, only if this variable doesn't already exist in the cache. The added variable remains in the user cache unless its time to live expires or it is deleted by using <code>wincache_ucache_delete()</code> or <code>wincache_ucache_clear()</code> functions.</p>
	 * @param string $key <p>Store the variable using this <code>key</code> name. If a variable with same key is already present the function will fail and return <b><code>false</code></b>. <code>key</code> is case sensitive. To override the value even if <code>key</code> is present use <code>wincache_ucache_set()</code> function instad. <code>key</code> can also take array of name =&gt; value pairs where names will be used as keys. This can be used to add multiple values in the cache in one operation, thus avoiding race condition.</p>
	 * @param mixed $value <p>Value of a variable to store. <code>Value</code> supports all data types except resources, such as file handles. This paramter is ignored if first argument is an array. A general guidance is to pass <b><code>null</code></b> as <code>value</code> while using array as <code>key</code>. If <code>value</code> is an object, or an array containing objects, then the objects will be serialized. See __sleep() for details on serializing objects.</p>
	 * @param int $ttl <p>Time for the variable to live in the cache in seconds. After the value specified in <code>ttl</code> has passed the stored variable will be deleted from the cache. This parameter takes a default value of <code>0</code> which means the variable will stay in the cache unless explicitly deleted by using <code>wincache_ucache_delete()</code> or <code>wincache_ucache_clear()</code> functions.</p>
	 * @return bool <p>If <code>key</code> is string, the function returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p><p>If <code>key</code> is an array, the function returns:</p><ul> <li>  If all the name =&gt; value pairs in the array can be set, function returns an empty array;  </li> <li>  If all the name =&gt; value pairs in the array cannot be set, function returns <b><code>false</code></b>;  </li> <li>  If some can be set while others cannot, function returns an array with name=&gt;value pair for which the addition failed in the user cache.  </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-ucache-add.php
	 * @see wincache_ucache_set(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_add(string $key, mixed $value, int $ttl = 0): bool {}

	/**
	 * Compares the variable with old value and assigns new value to it
	 * <p>Compares the variable associated with the <code>key</code> with <code>old_value</code> and if it matches then assigns the <code>new_value</code> to it.</p>
	 * @param string $key <p>The <code>key</code> that is used to store the variable in the cache. <code>key</code> is case sensitive.</p>
	 * @param int $old_value <p>Old value of the variable pointed by <code>key</code> in the user cache. The value should be of type <code>long</code>, otherwise the function returns <b><code>false</code></b>.</p>
	 * @param int $new_value <p>New value which will get assigned to variable pointer by <code>key</code> if a match is found. The value should be of type <code>long</code>, otherwise the function returns <b><code>false</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-cas.php
	 * @see wincache_ucache_inc(), wincache_ucache_dec()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_cas(string $key, int $old_value, int $new_value): bool {}

	/**
	 * Deletes entire content of the user cache
	 * <p>Clears/deletes all the values stored in the user cache.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-clear.php
	 * @see wincache_ucache_set(), wincache_ucache_add(), wincache_ucache_delete(), wincache_ucache_get(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_clear(): bool {}

	/**
	 * Decrements the value associated with the key
	 * <p>Decrements the value associated with the <code>key</code> by 1 or as specified by <code>dec_by</code>.</p>
	 * @param string $key <p>The <code>key</code> that was used to store the variable in the cache. <code>key</code> is case sensitive.</p>
	 * @param int $dec_by <p>The value by which the variable associated with the <code>key</code> will get decremented. If the argument is a floating point number it will be truncated to nearest integer. The variable associated with the <code>key</code> should be of type <code>long</code>, otherwise the function fails and returns <b><code>false</code></b>.</p>
	 * @param bool $success <p>Will be set to <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
	 * @return mixed <p>Returns the decremented value on success and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-dec.php
	 * @see wincache_ucache_inc(), wincache_ucache_cas()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_dec(string $key, int $dec_by = 1, bool &$success = null): mixed {}

	/**
	 * Deletes variables from the user cache
	 * <p>Deletes the elements in the user cache pointed by <code>key</code>.</p>
	 * @param mixed $key <p>The <code>key</code> that was used to store the variable in the cache. <code>key</code> is case sensitive. <code>key</code> can be an array of keys.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>If <code>key</code> is an array then the function returns <b><code>false</code></b> if every element of the array fails to get deleted from the user cache, otherwise returns an array which consists of all the keys that are deleted.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-delete.php
	 * @see wincache_ucache_set(), wincache_ucache_add(), wincache_ucache_get(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_delete(mixed $key): bool {}

	/**
	 * Checks if a variable exists in the user cache
	 * <p>Checks if a variable with the <code>key</code> exists in the user cache or not.</p>
	 * @param string $key <p>The <code>key</code> that was used to store the variable in the cache. <code>key</code> is case sensitive.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if variable with the <code>key</code> exitsts, otherwise returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-exists.php
	 * @see wincache_ucache_set(), wincache_ucache_add(), wincache_ucache_get(), wincache_ucache_clear(), wincache_ucache_delete(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_exists(string $key): bool {}

	/**
	 * Gets a variable stored in the user cache
	 * <p>Gets a variable stored in the user cache.</p>
	 * @param mixed $key <p>The <code>key</code> that was used to store the variable in the cache. <code>key</code> is case sensitive. <code>key</code> can be an array of keys. In this case the return value will be an array of values of each element in the <code>key</code> array. If an object, or an array containing objects, is returned, then the objects will be unserialized. See __wakeup() for details on unserializing objects.</p>
	 * @param bool $success <p>Will be set to <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
	 * @return mixed <p>If <code>key</code> is a string, the function returns the value of the variable stored with that key. The <code>success</code> is set to <b><code>true</code></b> on success and to <b><code>false</code></b> on failure.</p><p>The <code>key</code> is an array, the parameter <code>success</code> is always set to <b><code>true</code></b>. The returned array (name =&gt; value pairs) will contain only those name =&gt; value pairs for which the get operation in user cache was successful. If none of the keys in the key array finds a match in the user cache an empty array will be returned.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-get.php
	 * @see wincache_ucache_add(), wincache_ucache_set(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_get(mixed $key, bool &$success = null): mixed {}

	/**
	 * Increments the value associated with the key
	 * <p>Increments the value associated with the <code>key</code> by 1 or as specified by <code>inc_by</code>.</p>
	 * @param string $key <p>The <code>key</code> that was used to store the variable in the cache. <code>key</code> is case sensitive.</p>
	 * @param int $inc_by <p>The value by which the variable associated with the <code>key</code> will get incremented. If the argument is a floating point number it will be truncated to nearest integer. The variable associated with the <code>key</code> should be of type <code>long</code>, otherwise the function fails and returns <b><code>false</code></b>.</p>
	 * @param bool $success <p>Will be set to <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p>
	 * @return mixed <p>Returns the incremented value on success and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-ucache-inc.php
	 * @see wincache_ucache_dec(), wincache_ucache_cas()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_inc(string $key, int $inc_by = 1, bool &$success = null): mixed {}

	/**
	 * Retrieves information about data stored in the user cache
	 * <p>Retrieves information about data stored in the user cache.</p>
	 * @param bool $summaryonly <p>Controls whether the returned array will contain information about individual cache entries along with the user cache summary.</p>
	 * @param string $key <p>The key of an entry in the user cache. If specified then the returned array will contain information only about that cache entry. If not specified and <code>summaryonly</code> is set to <b><code>false</code></b> then the returned array will contain information about all entries in the cache.</p>
	 * @return array|false <p>Array of meta data about user cache or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>total_cache_uptime</code> - total time in seconds that the user cache has been active  </li> <li>  <code>total_item_count</code> - total number of elements that are currently in the user cache  </li> <li>  <code>is_local_cache</code> - true is the cache metadata is for a local cache instance, false if the metadata is for the global cache  </li> <li>  <code>total_hit_count</code> - number of times the data has been served from the cache  </li> <li>  <code>total_miss_count</code> - number of times the data has not been found in the cache  </li> <li> <p><code>ucache_entries</code> - an array that contains the information about all the cached items:</p><ul> <li>  <code>key_name</code> - name of the key which is used to store the data  </li> <li>  <code>value_type</code> - type of value stored by the key  </li> <li>  <code>use_time</code> - time in seconds since the file has been accessed in the opcode cache  </li> <li>  <code>last_check</code> - time in seconds since the file has been checked for modifications  </li> <li>  <code>is_session</code> - indicates if the data is a session variable  </li> <li>  <code>ttl_seconds</code> - time remaining for the data to live in the cache, 0 meaning infinite  </li> <li>  <code>age_seconds</code> - time elapsed from the time data has been added in the cache  </li> <li>  <code>hitcount</code> - number of times data has been served from the cache  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-ucache-info.php
	 * @see wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_meminfo(), wincache_rplist_fileinfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_info(bool $summaryonly = false, string $key = NULL): array|false {}

	/**
	 * Retrieves information about user cache memory usage
	 * <p>Retrieves information about memory usage by user cache.</p>
	 * @return array|false <p>Array of meta data about user cache memory usage or <b><code>false</code></b> on failure</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <code>memory_total</code> - amount of memory in bytes allocated for the user cache  </li> <li>  <code>memory_free</code> - amount of free memory in bytes available for the user cache  </li> <li>  <code>num_used_blks</code> - number of memory blocks used by the user cache  </li> <li>  <code>num_free_blks</code> - number of free memory blocks available for the user cache  </li> <li>  <code>memory_overhead</code> - amount of memory in bytes used for the user cache internal structures  </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-ucache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_meminfo(): array|false {}

	/**
	 * Adds a variable in user cache and overwrites a variable if it already exists in the cache
	 * <p>Adds a variable in user cache. Overwrites a variable if it already exists in the cache. The added or updated variable remains in the user cache unless its time to live expires or it is deleted by using <code>wincache_ucache_delete()</code> or <code>wincache_ucache_clear()</code> functions.</p>
	 * @param mixed $key <p>Store the variable using this <code>key</code> name. If a variable with same <code>key</code> is already present the function will overwrite the previous value with the new one. <code>key</code> is case sensitive. <code>key</code> can also take array of name =&gt; value pairs where names will be used as keys. This can be used to add multiple values in the cache in one operation, thus avoiding race condition.</p>
	 * @param mixed $value <p>Value of a variable to store. <code>Value</code> supports all data types except resources, such as file handles. This paramter is ignored if first argument is an array. A general guidance is to pass <b><code>null</code></b> as <code>value</code> while using array as <code>key</code>. If <code>value</code> is an object, or an array containing objects, then the objects will be serialized. See __sleep() for details on serializing objects.</p>
	 * @param int $ttl <p>Time for the variable to live in the cache in seconds. After the value specified in <code>ttl</code> has passed the stored variable will be deleted from the cache. This parameter takes a default value of <code>0</code> which means the variable will stay in the cache unless explicitly deleted by using <code>wincache_ucache_delete()</code> or <code>wincache_ucache_clear()</code> functions.</p>
	 * @return bool <p>If <code>key</code> is string, the function returns <b><code>true</code></b> on success and <b><code>false</code></b> on failure.</p><p>If <code>key</code> is an array, the function returns:</p><ul> <li>  If all the name =&gt; value pairs in the array can be set, function returns an empty array;  </li> <li>  If all the name =&gt; value pairs in the array cannot be set, function returns <b><code>false</code></b>;  </li> <li>  If some can be set while others cannot, function returns an array with name=&gt;value pair for which the addition failed in the user cache.  </li> </ul>
	 * @link https://php.net/manual/en/function.wincache-ucache-set.php
	 * @see wincache_ucache_add(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_set(mixed $key, mixed $value, int $ttl = 0): bool {}

	/**
	 * Releases an exclusive lock on a given key
	 * <p>Releases an exclusive lock that was obtained on a given key by using <code>wincache_lock()</code>. If any other process was blocked waiting for the lock on this key, that process will be able to obtain the lock.</p><p>Using of the <code>wincache_lock()</code> and <b>wincache_unlock()</b> can cause deadlocks when executing PHP scripts in a multi-process environment like FastCGI. Do not use these functions unless you are absolutely sure you need to use them. For the majority of the operations on the user cache it is not necessary to use these functions.</p>
	 * @param string $key <p>Name of the key in the cache to release the lock on.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wincache-unlock.php
	 * @see wincache_lock(), wincache_ucache_set(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_unlock(string $key): bool {}

}
