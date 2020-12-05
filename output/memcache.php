<?php



namespace {

	/**
	 * <p>Represents a connection to a set of memcache servers.</p>
	 * @link http://php.net/manual/en/class.memcache.php
	 * @since PECL memcache >= 0.2.0
	 */
	class Memcache {

		/**
		 * Add an item to the server
		 * <p><b>Memcache::add()</b> stores variable <code>var</code> with <code>key</code> only if such key doesn't exist at the server yet. Also you can use <b>memcache_add()</b> function.</p>
		 * @param string $key <p>The key that will be associated with the item.</p>
		 * @param mixed $var <p>The variable to store. Strings and integers are stored as is, other types are stored serialized.</p>
		 * @param int $flag <p>Use <b><code>MEMCACHE_COMPRESSED</code></b> to store the item compressed (uses zlib).</p>
		 * @param int $expire <p>Expiration time of the item. If it's equal to zero, the item will never expire. You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Returns <b><code>FALSE</code></b> if such key already exist. For the rest <b>Memcache::add()</b> behaves similarly to <code>Memcache::set()</code>.</p>
		 * @link http://php.net/manual/en/memcache.add.php
		 * @see Memcache::set(), Memcache::replace()
		 * @since PECL memcache >= 0.2.0
		 */
		public function add(string $key, $var, int $flag = NULL, int $expire = NULL): bool {}

		/**
		 * Add a memcached server to connection pool
		 * <p><b>Memcache::addServer()</b> adds a server to the connection pool. You can also use the <b>memcache_add_server()</b> function.</p><p>When using this method (as opposed to <code>Memcache::connect()</code> and <code>Memcache::pconnect()</code>) the network connection is not established until actually needed. Thus there is no overhead in adding a large number of servers to the pool, even though they might not all be used.</p><p>Failover may occur at any stage in any of the methods, as long as other servers are available the request the user won't notice. Any kind of socket or Memcached server level errors (except out-of-memory) may trigger the failover. Normal client errors such as adding an existing key will not trigger a failover.</p><p><b>Note</b>:</p><p>This function has been added to Memcache version 2.0.0.</p>
		 * @param string $host <p>Point to the host where memcached is listening for connections. This parameter may also specify other transports like <code>unix:///path/to/memcached.sock</code> to use UNIX domain sockets, in this case <code>port</code> must also be set to <code>0</code>.</p>
		 * @param int $port <p>Point to the port where memcached is listening for connections. Set this parameter to <code>0</code> when using UNIX domain sockets.</p> <p>Please note: <code>port</code> defaults to memcache.default_port if not specified. For this reason it is wise to specify the port explicitly in this method call.</p>
		 * @param bool $persistent <p>Controls the use of a persistent connection. Default to <b><code>TRUE</code></b>.</p>
		 * @param int $weight <p>Number of buckets to create for this server which in turn control its probability of it being selected. The probability is relative to the total weight of all servers.</p>
		 * @param int $timeout <p>Value in seconds which will be used for connecting to the daemon. Think twice before changing the default value of 1 second - you can lose all the advantages of caching if your connection is too slow.</p>
		 * @param int $retry_interval <p>Controls how often a failed server will be retried, the default value is 15 seconds. Setting this parameter to -1 disables automatic retry. Neither this nor the <code>persistent</code> parameter has any effect when the extension is loaded dynamically via <code>dl()</code>.</p> <p>Each failed connection struct has its own timeout and before it has expired the struct will be skipped when selecting backends to serve a request. Once expired the connection will be successfully reconnected or marked as failed for another <code>retry_interval</code> seconds. The typical effect is that each web server child will retry the connection about every <code>retry_interval</code> seconds when serving a page.</p>
		 * @param bool $status <p>Controls if the server should be flagged as online. Setting this parameter to <b><code>FALSE</code></b> and <code>retry_interval</code> to -1 allows a failed server to be kept in the pool so as not to affect the key distribution algorithm. Requests for this server will then failover or fail immediately depending on the <code>memcache.allow_failover</code> setting. Default to <b><code>TRUE</code></b>, meaning the server should be considered online.</p>
		 * @param callable $failure_callback <p>Allows the user to specify a callback function to run upon encountering an error. The callback is run before failover is attempted. The function takes two parameters, the hostname and port of the failed server.</p>
		 * @param int $timeoutms
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.addserver.php
		 * @see Memcache::connect(), Memcache::pconnect(), Memcache::close(), Memcache::setServerParams(), Memcache::getServerStatus()
		 * @since PECL memcache >= 2.0.0
		 */
		public function addServer(string $host, int $port = 11211, bool $persistent = NULL, int $weight = NULL, int $timeout = NULL, int $retry_interval = NULL, bool $status = NULL, callable $failure_callback = NULL, int $timeoutms = NULL): bool {}

		/**
		 * Close memcached server connection
		 * <p><b>Memcache::close()</b> closes connection to memcached server. This function doesn't close persistent connections, which are closed only during web-server shutdown/restart. Also you can use <b>memcache_close()</b> function.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.close.php
		 * @see Memcache::connect(), Memcache::pconnect()
		 * @since PECL memcache >= 0.4.0
		 */
		public function close(): bool {}

		/**
		 * Open memcached server connection
		 * <p><b>Memcache::connect()</b> establishes a connection to the memcached server. The connection, which was opened using <b>Memcache::connect()</b> will be automatically closed at the end of script execution. Also you can close it with <code>Memcache::close()</code>. Also you can use <b>memcache_connect()</b> function.</p>
		 * @param string $host <p>Point to the host where memcached is listening for connections. This parameter may also specify other transports like <code>unix:///path/to/memcached.sock</code> to use UNIX domain sockets, in this case <code>port</code> must also be set to <code>0</code>.</p>
		 * @param int $port <p>Point to the port where memcached is listening for connections. Set this parameter to <code>0</code> when using UNIX domain sockets.</p> <p>Please note: <code>port</code> defaults to memcache.default_port if not specified. For this reason it is wise to specify the port explicitly in this method call.</p>
		 * @param int $timeout <p>Value in seconds which will be used for connecting to the daemon. Think twice before changing the default value of 1 second - you can lose all the advantages of caching if your connection is too slow.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.connect.php
		 * @see Memcache::pconnect(), Memcache::close()
		 * @since PECL memcache >= 0.2.0
		 */
		public function connect(string $host, int $port = NULL, int $timeout = NULL): bool {}

		/**
		 * Decrement item's value
		 * <p><b>Memcache::decrement()</b> decrements value of the item by <code>value</code>. Similarly to <code>Memcache::increment()</code>, current value of the item is being converted to numerical and after that <code>value</code> is subtracted.</p><p><b>Note</b>:</p><p>New item's value will not be less than zero.</p><p><b>Note</b>:</p><p>Do not use <b>Memcache::decrement()</b> with item, which was stored compressed, because consequent call to <code>Memcache::get()</code> will fail.</p>
		 * @param string $key <p>Key of the item do decrement.</p>
		 * @param int $value <p>Decrement the item by <code>value</code>.</p>
		 * @return int|false <p>Returns item's new value on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.decrement.php
		 * @see Memcache::increment(), Memcache::replace()
		 * @since PECL memcache >= 0.2.0
		 */
		public function decrement(string $key, int $value = 1) {}

		/**
		 * Delete item from the server
		 * <p><b>Memcache::delete()</b> deletes an item with the <code>key</code>.</p>
		 * @param string $key <p>The key associated with the item to delete.</p>
		 * @param int $timeout <p>This deprecated parameter is not supported, and defaults to <code>0</code> seconds. Do not use this parameter.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.delete.php
		 * @see Memcache::set(), Memcache::replace()
		 * @since PECL memcache >= 0.2.0
		 */
		public function delete(string $key, int $timeout = 0): bool {}

		/**
		 * Flush all existing items at the server
		 * <p><b>Memcache::flush()</b> immediately invalidates all existing items. <b>Memcache::flush()</b> doesn't actually free any resources, it only marks all the items as expired, so occupied memory will be overwritten by new items. Also you can use <b>memcache_flush()</b> function.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.flush.php
		 * @since PECL memcache >= 1.0.0
		 */
		public function flush(): bool {}

		/**
		 * Retrieve item from the server
		 * <p><b>Memcache::get()</b> returns previously stored data of an item, if such <code>key</code> exists on the server at this moment.</p><p>You can pass array of keys to <b>Memcache::get()</b> to get array of values. The result array will contain only found key-value pairs.</p>
		 * @param string $key <p>The key or array of keys to fetch.</p>
		 * @param int $flags <p>If present, flags fetched along with the values will be written to this parameter. These flags are the same as the ones given to for example <code>Memcache::set()</code>. The lowest byte of the int is reserved for pecl/memcache internal usage (e.g. to indicate compression and serialization status).</p>
		 * @return string <p>Returns the value associated with the <code>key</code> or an array of found key-value pairs when <code>key</code> is an <code>array</code>. Returns <b><code>FALSE</code></b> on failure, <code>key</code> is not found or <code>key</code> is an empty <code>array</code>.</p>
		 * @link http://php.net/manual/en/memcache.get.php
		 * @since PECL memcache >= 0.2.0
		 */
		public function get(string $key, int &$flags = NULL): string {}

		/**
		 * Get statistics from all servers in pool
		 * <p><b>Memcache::getExtendedStats()</b> returns a two-dimensional associative array with server statistics. Array keys correspond to host:port of server and values contain the individual server statistics. A failed server will have its corresponding entry set to <b><code>FALSE</code></b>. You can also use the <b>memcache_get_extended_stats()</b> function.</p><p><b>Note</b>:</p><p>This function has been added to Memcache version 2.0.0.</p>
		 * @param string $type <p>The type of statistics to fetch. Valid values are {reset, malloc, maps, cachedump, slabs, items, sizes}. According to the memcached protocol spec these additional arguments "are subject to change for the convenience of memcache developers".</p>
		 * @param int $slabid <p>Used in conjunction with <code>type</code> set to cachedump to identify the slab to dump from. The cachedump command ties up the server and is strictly to be used for debugging purposes.</p>
		 * @param int $limit <p>Used in conjunction with <code>type</code> set to cachedump to limit the number of entries to dump.</p>
		 * @return array <p>Returns a two-dimensional associative array of server statistics or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.getextendedstats.php
		 * @see Memcache::getVersion(), Memcache::getStats()
		 * @since PECL memcache >= 2.0.0
		 */
		public function getExtendedStats(string $type = NULL, int $slabid = NULL, int $limit = 100): array {}

		/**
		 * Returns server status
		 * <p><b>Memcache::getServerStatus()</b> returns a the servers online/offline status. You can also use <b>memcache_get_server_status()</b> function.</p><p><b>Note</b>:</p><p>This function has been added to Memcache version 2.1.0.</p>
		 * @param string $host <p>Point to the host where memcached is listening for connections.</p>
		 * @param int $port <p>Point to the port where memcached is listening for connections.</p>
		 * @return int <p>Returns a the servers status. 0 if server is failed, non-zero otherwise</p>
		 * @link http://php.net/manual/en/memcache.getserverstatus.php
		 * @see Memcache::addServer(), Memcache::setServerParams()
		 * @since PECL memcache >= 2.1.0
		 */
		public function getServerStatus(string $host, int $port = 11211): int {}

		/**
		 * Get statistics of the server
		 * <p><b>Memcache::getStats()</b> returns an associative array with server's statistics. Array keys correspond to stats parameters and values to parameter's values. Also you can use <b>memcache_get_stats()</b> function.</p>
		 * @param string $type <p>The type of statistics to fetch. Valid values are {reset, malloc, maps, cachedump, slabs, items, sizes}. According to the memcached protocol spec these additional arguments "are subject to change for the convenience of memcache developers".</p>
		 * @param int $slabid <p>Used in conjunction with <code>type</code> set to cachedump to identify the slab to dump from. The cachedump command ties up the server and is strictly to be used for debugging purposes.</p>
		 * @param int $limit <p>Used in conjunction with <code>type</code> set to cachedump to limit the number of entries to dump.</p>
		 * @return array|false <p>Returns an associative array of server statistics or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.getstats.php
		 * @see Memcache::getVersion(), Memcache::getExtendedStats()
		 * @since PECL memcache >= 0.2.0
		 */
		public function getStats(string $type = NULL, int $slabid = NULL, int $limit = 100) {}

		/**
		 * Return version of the server
		 * <p><b>Memcache::getVersion()</b> returns a string with server's version number. Also you can use <b>memcache_get_version()</b> function.</p>
		 * @return string|false <p>Returns a string of server version number or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.getversion.php
		 * @see Memcache::getExtendedStats(), Memcache::getStats()
		 * @since PECL memcache >= 0.2.0
		 */
		public function getVersion() {}

		/**
		 * Increment item's value
		 * <p><b>Memcache::increment()</b> increments value of an item by the specified <code>value</code>. If item specified by <code>key</code> was not numeric and cannot be converted to a number, it will change its value to <code>value</code>. <b>Memcache::increment()</b> <i>does not</i> create an item if it doesn't already exist.</p><p><b>Note</b>:</p><p>Do not use <b>Memcache::increment()</b> with items that have been stored compressed because subsequent calls to <code>Memcache::get()</code> will fail.</p>
		 * @param string $key <p>Key of the item to increment.</p>
		 * @param int $value <p>Increment the item by <code>value</code>.</p>
		 * @return int|false <p>Returns new items value on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.increment.php
		 * @see Memcache::decrement(), Memcache::replace()
		 * @since PECL memcache >= 0.2.0
		 */
		public function increment(string $key, int $value = 1) {}

		/**
		 * Open memcached server persistent connection
		 * <p><b>Memcache::pconnect()</b> is similar to <code>Memcache::connect()</code> with the difference, that the connection it establishes is persistent. This connection is not closed after the end of script execution and by <code>Memcache::close()</code> function. Also you can use <b>memcache_pconnect()</b> function.</p>
		 * @param string $host <p>Point to the host where memcached is listening for connections. This parameter may also specify other transports like <code>unix:///path/to/memcached.sock</code> to use UNIX domain sockets, in this case <code>port</code> must also be set to <code>0</code>.</p>
		 * @param int $port <p>Point to the port where memcached is listening for connections. Set this parameter to <code>0</code> when using UNIX domain sockets.</p>
		 * @param int $timeout <p>Value in seconds which will be used for connecting to the daemon. Think twice before changing the default value of 1 second - you can lose all the advantages of caching if your connection is too slow.</p>
		 * @return mixed <p>Returns a Memcache object or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.pconnect.php
		 * @see Memcache::connect()
		 * @since PECL memcache >= 0.4.0
		 */
		public function pconnect(string $host, int $port = NULL, int $timeout = NULL) {}

		/**
		 * Replace value of the existing item
		 * <p><b>Memcache::replace()</b> should be used to replace value of existing item with <code>key</code>. In case if item with such key doesn't exists, <b>Memcache::replace()</b> returns <b><code>FALSE</code></b>. For the rest <b>Memcache::replace()</b> behaves similarly to <code>Memcache::set()</code>. Also you can use <b>memcache_replace()</b> function.</p>
		 * @param string $key <p>The key that will be associated with the item.</p>
		 * @param mixed $var <p>The variable to store. Strings and integers are stored as is, other types are stored serialized.</p>
		 * @param int $flag <p>Use <b><code>MEMCACHE_COMPRESSED</code></b> to store the item compressed (uses zlib).</p>
		 * @param int $expire <p>Expiration time of the item. If it's equal to zero, the item will never expire. You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.replace.php
		 * @see Memcache::set(), Memcache::add()
		 * @since PECL memcache >= 0.2.0
		 */
		public function replace(string $key, $var, int $flag = NULL, int $expire = NULL): bool {}

		/**
		 * Store data at the server
		 * <p><b>Memcache::set()</b> stores an item <code>var</code> with <code>key</code> on the memcached server. Parameter <code>expire</code> is expiration time in seconds. If it's 0, the item never expires (but memcached server doesn't guarantee this item to be stored all the time, it could be deleted from the cache to make place for other items). You can use <b><code>MEMCACHE_COMPRESSED</code></b> constant as <code>flag</code> value if you want to use on-the-fly compression (uses zlib).</p><p><b>Note</b>:</p><p>Remember that resource variables (i.e. file and connection descriptors) cannot be stored in the cache, because they cannot be adequately represented in serialized state.</p>
		 * @param string $key <p>The key that will be associated with the item.</p>
		 * @param mixed $var <p>The variable to store. Strings and integers are stored as is, other types are stored serialized.</p>
		 * @param int $flag <p>Use <b><code>MEMCACHE_COMPRESSED</code></b> to store the item compressed (uses zlib).</p>
		 * @param int $expire <p>Expiration time of the item. If it's equal to zero, the item will never expire. You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.set.php
		 * @see Memcache::add(), Memcache::replace()
		 * @since PECL memcache >= 0.2.0
		 */
		public function set(string $key, $var, int $flag = NULL, int $expire = NULL): bool {}

		/**
		 * Enable automatic compression of large values
		 * <p><b>Memcache::setCompressThreshold()</b> enables automatic compression of large values. You can also use the <b>memcache_set_compress_threshold()</b> function.</p><p><b>Note</b>:</p><p>This function has been added to Memcache version 2.0.0.</p>
		 * @param int $threshold <p>Controls the minimum value length before attempting to compress automatically.</p>
		 * @param float $min_savings
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.setcompressthreshold.php
		 * @since PECL memcache >= 2.0.0
		 */
		public function setCompressThreshold(int $threshold, float $min_savings = NULL): bool {}

		/**
		 * Changes server parameters and status at runtime
		 * <p><b>Memcache::setServerParams()</b> changes server parameters at runtime. You can also use the <b>memcache_set_server_params()</b> function.</p><p><b>Note</b>:</p><p>This function has been added to Memcache version 2.1.0.</p>
		 * @param string $host <p>Point to the host where memcached is listening for connections.</p>
		 * @param int $port <p>Point to the port where memcached is listening for connections.</p>
		 * @param int $timeout <p>Value in seconds which will be used for connecting to the daemon. Think twice before changing the default value of 1 second - you can lose all the advantages of caching if your connection is too slow.</p>
		 * @param int $retry_interval <p>Controls how often a failed server will be retried, the default value is 15 seconds. Setting this parameter to -1 disables automatic retry. Neither this nor the <code>persistent</code> parameter has any effect when the extension is loaded dynamically via <code>dl()</code>.</p>
		 * @param bool $status <p>Controls if the server should be flagged as online. Setting this parameter to <b><code>FALSE</code></b> and <code>retry_interval</code> to -1 allows a failed server to be kept in the pool so as not to affect the key distribution algorithm. Requests for this server will then failover or fail immediately depending on the <code>memcache.allow_failover</code> setting. Default to <b><code>TRUE</code></b>, meaning the server should be considered online.</p>
		 * @param callable $failure_callback <p>Allows the user to specify a callback function to run upon encountering an error. The callback is run before failover is attempted. The function takes two parameters, the hostname and port of the failed server.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcache.setserverparams.php
		 * @see Memcache::addServer(), Memcache::getServerStatus()
		 * @since PECL memcache >= 2.1.0
		 */
		public function setServerParams(string $host, int $port = 11211, int $timeout = NULL, int $retry_interval = FALSE, bool $status = NULL, callable $failure_callback = NULL): bool {}
	}

	/**
	 * Turn debug output on/off
	 * <p><b>memcache_debug()</b> turns on debug output if parameter <code>on_off</code> is equal to <b><code>TRUE</code></b> and turns off if it's <b><code>FALSE</code></b>.</p><p><b>Note</b>:</p><p><b>memcache_debug()</b> is accessible only if PHP was built with --enable-debug option and always returns <b><code>TRUE</code></b> in this case. Otherwise, this function has no effect and always returns <b><code>FALSE</code></b>.</p>
	 * @param bool $on_off <p>Turns debug output on if equals to <b><code>TRUE</code></b>. Turns debug output off if equals to <b><code>FALSE</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if PHP was built with --enable-debug option, otherwise returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.memcache-debug.php
	 * @since PECL memcache >= 0.2.0
	 */
	function memcache_debug(bool $on_off): bool {}

	/**
	 * Used to turn on-the-fly data compression on with <code>Memcache::set()</code>, <code>Memcache::add()</code> and <code>Memcache::replace()</code>.
	 */
	define('MEMCACHE_COMPRESSED', null);

	/**
	 * 1 if this Memcache session handler is available, 0 otherwise.
	 */
	define('MEMCACHE_HAVE_SESSION', null);

	/**
	 * Used to turn user-defined application flag on with <code>Memcache::set()</code>, <code>Memcache::add()</code> and <code>Memcache::replace()</code>.
	 */
	define('MEMCACHE_USER1', null);

	/**
	 * Used to turn user-defined application flag on with <code>Memcache::set()</code>, <code>Memcache::add()</code> and <code>Memcache::replace()</code>.
	 */
	define('MEMCACHE_USER2', null);

	/**
	 * Used to turn user-defined application flag on with <code>Memcache::set()</code>, <code>Memcache::add()</code> and <code>Memcache::replace()</code>.
	 */
	define('MEMCACHE_USER3', null);

	/**
	 * Used to turn user-defined application flag on with <code>Memcache::set()</code>, <code>Memcache::add()</code> and <code>Memcache::replace()</code>.
	 */
	define('MEMCACHE_USER4', null);

}
