<?php



namespace {

	/**
	 * <p>Represents a connection to a set of memcached servers.</p>
	 * @link http://php.net/manual/en/class.memcached.php
	 * @since PECL memcached >= 0.1.0
	 */
	class Memcached {

		/**
		 * @var mixed <p>Enables or disables payload compression. When enabled, item values longer than a certain threshold (currently 100 bytes) will be compressed during storage and decompressed during retrieval transparently.</p> <p>Type: <i>boolean</i>, default: <b><code>TRUE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_COMPRESSION = null;

		/**
		 * @var mixed <p>Specifies the serializer to use for serializing non-scalar values. The valid serializers are <b><code>Memcached::SERIALIZER_PHP</code></b> or <b><code>Memcached::SERIALIZER_IGBINARY</code></b>. The latter is supported only when memcached is configured with <i>--enable-memcached-igbinary</i> option and the <i>igbinary</i> extension is loaded.</p> <p>Type: <i>integer</i>, default: <b><code>Memcached::SERIALIZER_PHP</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_SERIALIZER = null;

		/**
		 * @var mixed <p>The default PHP serializer.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const SERIALIZER_PHP = null;

		/**
		 * @var mixed <p>The igbinary serializer. Instead of textual representation it stores PHP data structures in a compact binary form, resulting in space and time gains.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const SERIALIZER_IGBINARY = null;

		/**
		 * @var mixed <p>The JSON serializer. Requires PHP 5.2.10+.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const SERIALIZER_JSON = null;

		/**
		 * @var mixed <p>This can be used to create a "domain" for your item keys. The value specified here will be prefixed to each of the keys. It cannot be longer than <i>128</i> characters and will reduce the maximum available key size. The prefix is applied only to the item keys, not to the server keys.</p> <p>Type: <i>string</i>, default: <i>""</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_PREFIX_KEY = null;

		/**
		 * @var mixed <p>Specifies the hashing algorithm used for the item keys. The valid values are supplied via <b><code>Memcached::HASH_&#42;</code></b> constants. Each hash algorithm has its advantages and its disadvantages. Go with the default if you don't know or don't care.</p> <p>Type: <i>integer</i>, default: <b><code>Memcached::HASH_DEFAULT</code></b></p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_HASH = null;

		/**
		 * @var mixed <p>The default (Jenkins one-at-a-time) item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_DEFAULT = null;

		/**
		 * @var mixed <p>MD5 item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_MD5 = null;

		/**
		 * @var mixed <p>CRC item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_CRC = null;

		/**
		 * @var mixed <p>FNV1_64 item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_FNV1_64 = null;

		/**
		 * @var mixed <p>FNV1_64A item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_FNV1A_64 = null;

		/**
		 * @var mixed <p>FNV1_32 item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_FNV1_32 = null;

		/**
		 * @var mixed <p>FNV1_32A item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_FNV1A_32 = null;

		/**
		 * @var mixed <p>Hsieh item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_HSIEH = null;

		/**
		 * @var mixed <p>Murmur item key hashing algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HASH_MURMUR = null;

		/**
		 * @var mixed <p>Specifies the method of distributing item keys to the servers. Currently supported methods are modulo and consistent hashing. Consistent hashing delivers better distribution and allows servers to be added to the cluster with minimal cache losses.</p> <p>Type: <i>integer</i>, default: <b><code>Memcached::DISTRIBUTION_MODULA.</code></b></p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_DISTRIBUTION = null;

		/**
		 * @var mixed <p>Modulo-based key distribution algorithm.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const DISTRIBUTION_MODULA = null;

		/**
		 * @var mixed <p>Consistent hashing key distribution algorithm (based on libketama).</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const DISTRIBUTION_CONSISTENT = null;

		/**
		 * @var mixed <p>Enables or disables compatibility with libketama-like behavior. When enabled, the item key hashing algorithm is set to MD5 and distribution is set to be weighted consistent hashing distribution. This is useful because other libketama-based clients (Python, Ruby, etc.) with the same server configuration will be able to access the keys transparently.</p> <p><b>Note</b>:</p><p>It is highly recommended to enable this option if you want to use consistent hashing, and it may be enabled by default in future releases.</p>  <p>Type: <i>boolean</i>, default: <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_LIBKETAMA_COMPATIBLE = null;

		/**
		 * @var mixed <p>Enables or disables buffered I/O. Enabling buffered I/O causes storage commands to "buffer" instead of being sent. Any action that retrieves data causes this buffer to be sent to the remote connection. Quitting the connection or closing down the connection will also cause the buffered data to be pushed to the remote connection.</p> <p>Type: <i>boolean</i>, default: <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_BUFFER_WRITES = null;

		/**
		 * @var mixed <p>Enable the use of the binary protocol. Please note that you cannot toggle this option on an open connection.</p> <p>Type: <i>boolean</i>, default: <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_BINARY_PROTOCOL = null;

		/**
		 * @var mixed <p>Enables or disables asynchronous I/O. This is the fastest transport available for storage functions.</p> <p>Type: <i>boolean</i>, default: <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_NO_BLOCK = null;

		/**
		 * @var mixed <p>Enables or disables the no-delay feature for connecting sockets (may be faster in some environments).</p> <p>Type: <i>boolean</i>, default: <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_TCP_NODELAY = null;

		/**
		 * @var mixed <p>The maximum socket send buffer in bytes.</p> <p>Type: <i>integer</i>, default: varies by platform/kernel configuration.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_SOCKET_SEND_SIZE = null;

		/**
		 * @var mixed <p>The maximum socket receive buffer in bytes.</p> <p>Type: <i>integer</i>, default: varies by platform/kernel configuration.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_SOCKET_RECV_SIZE = null;

		/**
		 * @var mixed <p>In non-blocking mode this set the value of the timeout during socket connection, in milliseconds.</p> <p>Type: <i>integer</i>, default: <i>1000</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_CONNECT_TIMEOUT = null;

		/**
		 * @var mixed <p>The amount of time, in seconds, to wait until retrying a failed connection attempt.</p> <p>Type: <i>integer</i>, default: <i>0</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_RETRY_TIMEOUT = null;

		/**
		 * @var mixed <p>Socket sending timeout, in microseconds. In cases where you cannot use non-blocking I/O this will allow you to still have timeouts on the sending of data.</p> <p>Type: <i>integer</i>, default: <i>0</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_SEND_TIMEOUT = null;

		/**
		 * @var mixed <p>Socket reading timeout, in microseconds. In cases where you cannot use non-blocking I/O this will allow you to still have timeouts on the reading of data.</p> <p>Type: <i>integer</i>, default: <i>0</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_RECV_TIMEOUT = null;

		/**
		 * @var mixed <p>Timeout for connection polling, in milliseconds.</p> <p>Type: <i>integer</i>, default: <i>1000</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_POLL_TIMEOUT = null;

		/**
		 * @var mixed <p>Enables or disables caching of DNS lookups.</p> <p>Type: <i>boolean</i>, default: <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_CACHE_LOOKUPS = null;

		/**
		 * @var mixed <p>Specifies the failure limit for server connection attempts. The server will be removed after this many continuous connection failures.</p> <p>Type: <i>integer</i>, default: <i>0</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const OPT_SERVER_FAILURE_LIMIT = null;

		/**
		 * @var mixed <p>Indicates whether igbinary serializer support is available.</p> <p>Type: <i>boolean</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HAVE_IGBINARY = null;

		/**
		 * @var mixed <p>Indicates whether JSON serializer support is available.</p> <p>Type: <i>boolean</i>.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HAVE_JSON = null;

		/**
		 * @var mixed <p>Indicates whether msgpack serializer support is available.</p> <p>Type: <i>boolean</i>.</p> <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HAVE_MSGPACK = null;

		/**
		 * @var mixed <p>Type: <i>boolean</i>.</p> <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HAVE_SESSION = null;

		/**
		 * @var mixed <p>Type: <i>boolean</i>.</p> <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const HAVE_SASL = null;

		/**
		 * @var mixed <p>A flag for <code>Memcached::get()</code>, <code>Memcached::getMulti()</code> and <code>Memcached::getMultiByKey()</code> to ensure that the CAS token values are returned as well.</p> <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const GET_EXTENDED = null;

		/**
		 * @var mixed <p>A flag for <code>Memcached::getMulti()</code> and <code>Memcached::getMultiByKey()</code> to ensure that the keys are returned in the same order as they were requested in. Non-existing keys get a default value of NULL.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const GET_PRESERVE_ORDER = null;

		/**
		 * @var mixed <p>The operation was successful.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_SUCCESS = null;

		/**
		 * @var mixed <p>The operation failed in some fashion.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_FAILURE = null;

		/**
		 * @var mixed <p>DNS lookup failed.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_HOST_LOOKUP_FAILURE = null;

		/**
		 * @var mixed <p>Failed to read network data.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_UNKNOWN_READ_FAILURE = null;

		/**
		 * @var mixed <p>Bad command in memcached protocol.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_PROTOCOL_ERROR = null;

		/**
		 * @var mixed <p>Error on the client side.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_CLIENT_ERROR = null;

		/**
		 * @var mixed <p>Error on the server side.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_SERVER_ERROR = null;

		/**
		 * @var mixed <p>Failed to write network data.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_WRITE_FAILURE = null;

		/**
		 * @var mixed <p>Failed to do compare-and-swap: item you are trying to store has been modified since you last fetched it.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_DATA_EXISTS = null;

		/**
		 * @var mixed <p>Item was not stored: but not because of an error. This normally means that either the condition for an "add" or a "replace" command wasn't met, or that the item is in a delete queue.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_NOTSTORED = null;

		/**
		 * @var mixed <p>Item with this key was not found (with "get" operation or "cas" operations).</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_NOTFOUND = null;

		/**
		 * @var mixed <p>Partial network data read error.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_PARTIAL_READ = null;

		/**
		 * @var mixed <p>Some errors occurred during multi-get.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_SOME_ERRORS = null;

		/**
		 * @var mixed <p>Server list is empty.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_NO_SERVERS = null;

		/**
		 * @var mixed <p>End of result set.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_END = null;

		/**
		 * @var mixed <p>System error.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_ERRNO = null;

		/**
		 * @var mixed <p>The operation was buffered.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_BUFFERED = null;

		/**
		 * @var mixed <p>The operation timed out.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_TIMEOUT = null;

		/**
		 * @var mixed <p>Bad key.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_BAD_KEY_PROVIDED = null;

		/**
		 * @var mixed <p>Failed to create network socket.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_CONNECTION_SOCKET_CREATE_FAILURE = null;

		/**
		 * @var mixed <p>Payload failure: could not compress/decompress or serialize/unserialize the value.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_PAYLOAD_FAILURE = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_AUTH_PROBLEM = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_AUTH_FAILURE = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_AUTH_CONTINUE = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_E2BIG = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_KEY_TOO_BIG = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_SERVER_TEMPORARILY_DISABLED = null;

		/**
		 * @var mixed <p>Available as of Memcached 3.0.0.</p>
		 * @link http://php.net/manual/en/memcached.constants.php
		 */
		const RES_SERVER_MEMORY_ALLOCATION_FAILURE = null;

		/**
		 * Create a Memcached instance
		 * <p>Creates a Memcached instance representing the connection to the memcache servers.</p>
		 * @param string $persistent_id <p>By default the Memcached instances are destroyed at the end of the request. To create an instance that persists between requests, use <code>persistent_id</code> to specify a unique ID for the instance. All instances created with the same <code>persistent_id</code> will share the same connection.</p>
		 * @return self <p>A Memcached object.</p>
		 * @link http://php.net/manual/en/memcached.construct.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function __construct(string $persistent_id = NULL) {}

		/**
		 * Add an item under a new key
		 * <p><b>Memcached::add()</b> is similar to <code>Memcached::set()</code>, but the operation fails if the <code>key</code> already exists on the server.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key already exists.</p>
		 * @link http://php.net/manual/en/memcached.add.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function add(string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Add an item under a new key on a specific server
		 * <p><b>Memcached::addByKey()</b> is functionally equivalent to <code>Memcached::add()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server. This is useful if you need to keep a bunch of related keys on a certain server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key already exists.</p>
		 * @link http://php.net/manual/en/memcached.addbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function addByKey(string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Add a server to the server pool
		 * <p><b>Memcached::addServer()</b> adds the specified server to the server pool. No connection is established to the server at this time, but if you are using consistent key distribution option (via <b><code>Memcached::DISTRIBUTION_CONSISTENT</code></b> or <b><code>Memcached::OPT_LIBKETAMA_COMPATIBLE</code></b>), some of the internal data structures will have to be updated. Thus, if you need to add multiple servers, it is better to use <code>Memcached::addServers()</code> as the update then happens only once.</p><p>The same server may appear multiple times in the server pool, because no duplication checks are made. This is not advisable; instead, use the <code>weight</code> option to increase the selection weighting of this server.</p>
		 * @param string $host <p>The hostname of the memcache server. If the hostname is invalid, data-related operations will set <b><code>Memcached::RES_HOST_LOOKUP_FAILURE</code></b> result code. As of version 2.0.0b1, this parameter may also specify the path of a unix socket filepath ex. <i>/path/to/memcached.sock</i> to use UNIX domain sockets, in this case <code>port</code> must also be set to <i>0</i>.</p>
		 * @param int $port <p>The port on which memcache is running. Usually, this is <i>11211</i>. As of version 2.0.0b1, set this parameter to <i>0</i> when using UNIX domain sockets.</p>
		 * @param int $weight <p>The weight of the server relative to the total weight of all the servers in the pool. This controls the probability of the server being selected for operations. This is used only with consistent distribution option and usually corresponds to the amount of memory available to memcache on that server.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.addserver.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function addServer(string $host, int $port, int $weight = 0): bool {}

		/**
		 * Add multiple servers to the server pool
		 * <p><b>Memcached::addServers()</b> adds <code>servers</code> to the server pool. Each entry in <code>servers</code> is supposed to be an array containing hostname, port, and, optionally, weight of the server. No connection is established to the servers at this time.</p><p>The same server may appear multiple times in the server pool, because no duplication checks are made. This is not advisable; instead, use the <code>weight</code> option to increase the selection weighting of this server.</p>
		 * @param array $servers
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.addservers.php
		 * @since PECL memcached >= 0.1.1
		 */
		public function addServers(array $servers): bool {}

		/**
		 * Append data to an existing item
		 * <p><b>Memcached::append()</b> appends the given <code>value</code> string to the value of an existing item. The reason that <code>value</code> is forced to be a string is that appending mixed types is not well-defined.</p><p><b>Note</b>:</p><p>If the <b><code>Memcached::OPT_COMPRESSION</code></b> is enabled, the operation will fail and a warning will be issued, because appending compressed data to a value that is potentially already compressed is not possible.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param string $value <p>The string to append.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.append.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function append(string $key, string $value): bool {}

		/**
		 * Append data to an existing item on a specific server
		 * <p><b>Memcached::appendByKey()</b> is functionally equivalent to <code>Memcached::append()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param string $value <p>The string to append.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.appendbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function appendByKey(string $server_key, string $key, string $value): bool {}

		/**
		 * Compare and swap an item
		 * <p><b>Memcached::cas()</b> performs a "check and set" operation, so that the item will be stored only if no other client has updated it since it was last fetched by this client. The check is done via the <code>cas_token</code> parameter which is a unique 64-bit value assigned to the existing item by memcache. See the documentation for <b>Memcached::get&#42;()</b> methods for how to obtain this token. Note that the token is represented as a double due to the limitations of PHP's integer space.</p>
		 * @param float $cas_token <p>Unique value associated with the existing item. Generated by memcache.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_DATA_EXISTS</code></b> if the item you are trying to store has been modified since you last fetched it.</p>
		 * @link http://php.net/manual/en/memcached.cas.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function cas(float $cas_token, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Compare and swap an item on a specific server
		 * <p><b>Memcached::casByKey()</b> is functionally equivalent to <code>Memcached::cas()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server. This is useful if you need to keep a bunch of related keys on a certain server.</p>
		 * @param float $cas_token <p>Unique value associated with the existing item. Generated by memcache.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_DATA_EXISTS</code></b> if the item you are trying to store has been modified since you last fetched it.</p>
		 * @link http://php.net/manual/en/memcached.casbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function casByKey(float $cas_token, string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Decrement numeric item's value
		 * <p><b>Memcached::decrement()</b> decrements a numeric item's value by the specified <code>offset</code>. If the item's value is not numeric, an error will result. If the operation would decrease the value below 0, the new value will be 0. <b>Memcached::decrement()</b> will set the item to the <code>initial_value</code> parameter if the key doesn't exist.</p>
		 * @param string $key <p>The key of the item to decrement.</p>
		 * @param int $offset <p>The amount by which to decrement the item's value.</p>
		 * @param int $initial_value <p>The value to set the item to if it doesn't currently exist.</p>
		 * @param int $expiry <p>The expiry time to set on the item.</p>
		 * @return int <p>Returns item's new value on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.decrement.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function decrement(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * Decrement numeric item's value, stored on a specific server
		 * <p><b>Memcached::decrementByKey()</b> decrements a numeric item's value by the specified <code>offset</code>. If the item's value is not numeric, an error will result. If the operation would decrease the value below 0, the new value will be 0. <b>Memcached::decrementByKey()</b> will set the item to the <code>initial_value</code> parameter if the key doesn't exist.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key of the item to decrement.</p>
		 * @param int $offset <p>The amount by which to decrement the item's value.</p>
		 * @param int $initial_value <p>The value to set the item to if it doesn't currently exist.</p>
		 * @param int $expiry <p>The expiry time to set on the item.</p>
		 * @return int <p>Returns item's new value on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.decrementbykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function decrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * Delete an item
		 * <p><b>Memcached::delete()</b> deletes the <code>key</code> from the server. The <code>time</code> parameter is the amount of time in seconds (or Unix time until which) the client wishes the server to refuse <i>add</i> and <i>replace</i> commands for this key. For this amount of time, the item is put into a delete queue, which means that it won't possible to retrieve it by the <i>get</i> command, but <i>add</i> and <i>replace</i> command with this key will also fail (the <i>set</i> command will succeed, however). After the time passes, the item is finally deleted from server memory. The parameter <code>time</code> defaults to 0 (which means that the item will be deleted immediately and further storage commands with this key will succeed).</p>
		 * @param string $key <p>The key to be deleted.</p>
		 * @param int $time <p>The amount of time the server will wait to delete the item.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTFOUND</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.delete.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function delete(string $key, int $time = 0): bool {}

		/**
		 * Delete an item from a specific server
		 * <p><b>Memcached::deleteByKey()</b> is functionally equivalent to <code>Memcached::delete()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key to be deleted.</p>
		 * @param int $time <p>The amount of time the server will wait to delete the item.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTFOUND</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.deletebykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function deleteByKey(string $server_key, string $key, int $time = 0): bool {}

		/**
		 * Delete multiple items
		 * <p><b>Memcached::deleteMulti()</b> deletes the array of <code>keys</code> from the server. The <code>time</code> parameter is the amount of time in seconds (or Unix time until which) the client wishes the server to refuse <i>add</i> and <i>replace</i> commands for these keys. For this amount of time, the item is put into a delete queue, which means that it won't be possible to retrieve it by the <i>get</i> command, but <i>add</i> and <i>replace</i> command with these keys will also fail (the <i>set</i> command will succeed, however). After the time passes, the item is finally deleted from server memory. The parameter <code>time</code> defaults to 0 (which means that the item will be deleted immediately and further storage commands with these keys will succeed).</p>
		 * @param array $keys <p>The keys to be deleted.</p>
		 * @param int $time <p>The amount of time the server will wait to delete the items.</p>
		 * @return array <p>Returns array indexed by <code>keys</code> and where values are indicating whether operation succeeded or not. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTFOUND</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.deletemulti.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function deleteMulti(array $keys, int $time = 0): array {}

		/**
		 * Delete multiple items from a specific server
		 * <p><b>Memcached::deleteMultiByKey()</b> is functionally equivalent to <code>Memcached::deleteMulti()</code>, except that the free-form <code>server_key</code> can be used to map the <code>keys</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param array $keys <p>The keys to be deleted.</p>
		 * @param int $time <p>The amount of time the server will wait to delete the items.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTFOUND</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.deletemultibykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function deleteMultiByKey(string $server_key, array $keys, int $time = 0): bool {}

		/**
		 * Fetch the next result
		 * <p><b>Memcached::fetch()</b> retrieves the next result from the last request.</p>
		 * @return array <p>Returns the next result or <b><code>FALSE</code></b> otherwise. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_END</code></b> if result set is exhausted.</p>
		 * @link http://php.net/manual/en/memcached.fetch.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function fetch(): array {}

		/**
		 * Fetch all the remaining results
		 * <p><b>Memcached::fetchAll()</b> retrieves all the remaining results from the last request.</p>
		 * @return array <p>Returns the results or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.fetchall.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function fetchAll(): array {}

		/**
		 * Invalidate all items in the cache
		 * <p><b>Memcached::flush()</b> invalidates all existing cache items immediately (by default) or after the <code>delay</code> specified. After invalidation none of the items will be returned in response to a retrieval command (unless it's stored again under the same key after <b>Memcached::flush()</b> has invalidated the items). The flush does not actually free all the memory taken up by the existing items; that will happen gradually as new items are stored.</p>
		 * @param int $delay <p>Number of seconds to wait before invalidating the items.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.flush.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function flush(int $delay = 0): bool {}

		/**
		 * Retrieve an item
		 * <p><b>Memcached::get()</b> returns the item that was previously stored under the <code>key</code>. If the item is found and the <code>flags</code> is given <b><code>Memcached::GET_EXTENDED</code></b>, it will also return the CAS token value for the item. See <code>Memcached::cas()</code> for how to use CAS tokens. Read-through caching callback may be specified via <code>cache_cb</code> parameter.</p><p></p>
		 * @param string $key <p>The key of the item to retrieve.</p>
		 * @param callable $cache_cb <p>Read-through caching callback or <b><code>NULL</code></b>.</p>
		 * @param int $flags <p>Flags to control the returned result. When <b><code>Memcached::GET_EXTENDED</code></b> is given, the function will also return the CAS token.</p>
		 * @return mixed <p>Returns the value stored in the cache or <b><code>FALSE</code></b> otherwise. If the <code>flags</code> is set to <b><code>Memcached::GET_EXTENDED</code></b>, an array containing the value and the CAS token is returned instead of only the value. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTFOUND</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.get.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function get(string $key, callable $cache_cb = NULL, int $flags = NULL) {}

		/**
		 * Gets the keys stored on all the servers
		 * <p><b>Memcached::getAllKeys()</b> queries each memcache server and retrieves an array of all keys stored on them at that point in time. This is not an atomic operation, so it isn't a truly consistent snapshot of the keys at point in time. As memcache doesn't guarantee to return all keys you also cannot assume that all keys have been returned.</p>
		 * @return array <p>Returns the keys stored on all the servers on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.getallkeys.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function getAllKeys(): array {}

		/**
		 * Retrieve an item from a specific server
		 * <p><b>Memcached::getByKey()</b> is functionally equivalent to <code>Memcached::get()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key of the item to fetch.</p>
		 * @param callable $cache_cb <p>Read-through caching callback or <b><code>NULL</code></b></p>
		 * @param int $flags <p>Flags to control the returned result. When value of <b><code>Memcached::GET_EXTENDED</code></b> is given will return the CAS token.</p>
		 * @return mixed <p>Returns the value stored in the cache or <b><code>FALSE</code></b> otherwise. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTFOUND</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.getbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getByKey(string $server_key, string $key, callable $cache_cb = NULL, int $flags = NULL) {}

		/**
		 * Request multiple items
		 * <p><b>Memcached::getDelayed()</b> issues a request to memcache for multiple items the keys of which are specified in the <code>keys</code> array. The method does not wait for response and returns right away. When you are ready to collect the items, call either <code>Memcached::fetch()</code> or <code>Memcached::fetchAll()</code>. If <code>with_cas</code> is true, the CAS token values will also be requested.</p><p>Instead of fetching the results explicitly, you can specify a result callback via <code>value_cb</code> parameter.</p>
		 * @param array $keys <p>Array of keys to request.</p>
		 * @param bool $with_cas <p>Whether to request CAS token values also.</p>
		 * @param callable $value_cb <p>The result callback or <b><code>NULL</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.getdelayed.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getDelayed(array $keys, bool $with_cas = NULL, callable $value_cb = NULL): bool {}

		/**
		 * Request multiple items from a specific server
		 * <p><b>Memcached::getDelayedByKey()</b> is functionally equivalent to <code>Memcached::getDelayed()</code>, except that the free-form <code>server_key</code> can be used to map the <code>keys</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param array $keys <p>Array of keys to request.</p>
		 * @param bool $with_cas <p>Whether to request CAS token values also.</p>
		 * @param callable $value_cb <p>The result callback or <b><code>NULL</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.getdelayedbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getDelayedByKey(string $server_key, array $keys, bool $with_cas = NULL, callable $value_cb = NULL): bool {}

		/**
		 * Retrieve multiple items
		 * <p><b>Memcached::getMulti()</b> is similar to <code>Memcached::get()</code>, but instead of a single key item, it retrieves multiple items the keys of which are specified in the <code>keys</code> array.</p><p><b>Note</b>:</p><p>Before v3.0 a second argument <code>&amp;cas_tokens</code> was in use. It was filled with the CAS token values for the found items. The <code>&amp;cas_tokens</code> parameter was removed in v3.0 of the extension. It was replaced with a new flag <b><code>Memcached::GET_EXTENDED</code></b> that needs is to be used as the value for <code>flags</code>.</p><p>The <code>flags</code> parameter can be used to specify additional options for <b>Memcached::getMulti()</b>. <b><code>Memcached::GET_PRESERVE_ORDER</code></b> ensures that the keys are returned in the same order as they were requested in. <b><code>Memcached::GET_EXTENDED</code></b> ensures that the CAS tokens will be fetched too.</p>
		 * @param array $keys <p>Array of keys to retrieve.</p>
		 * @param int $flags <p>The flags for the get operation.</p>
		 * @return mixed <p>Returns the array of found items or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.getmulti.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getMulti(array $keys, int $flags = NULL) {}

		/**
		 * Retrieve multiple items from a specific server
		 * <p><b>Memcached::getMultiByKey()</b> is functionally equivalent to <code>Memcached::getMulti()</code>, except that the free-form <code>server_key</code> can be used to map the <code>keys</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param array $keys <p>Array of keys to retrieve.</p>
		 * @param int $flags <p>The flags for the get operation.</p>
		 * @return array <p>Returns the array of found items or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.getmultibykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getMultiByKey(string $server_key, array $keys, int $flags = NULL): array {}

		/**
		 * Retrieve a Memcached option value
		 * <p>This method returns the value of a Memcached <code>option</code>. Some options correspond to the ones defined by libmemcached, and some are specific to the extension. See Memcached Constants for more information.</p>
		 * @param int $option <p>One of the <i>Memcached::OPT_&#42;</i> constants.</p>
		 * @return mixed <p>Returns the value of the requested option, or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/memcached.getoption.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getOption(int $option) {}

		/**
		 * Return the result code of the last operation
		 * <p><b>Memcached::getResultCode()</b> returns one of the <b><code>Memcached::RES_&#42;</code></b> constants that is the result of the last executed Memcached method.</p>
		 * @return int <p>Result code of the last Memcached operation.</p>
		 * @link http://php.net/manual/en/memcached.getresultcode.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getResultCode(): int {}

		/**
		 * Return the message describing the result of the last operation
		 * <p><b>Memcached::getResultMessage()</b> returns a string that describes the result code of the last executed Memcached method.</p>
		 * @return string <p>Message describing the result of the last Memcached operation.</p>
		 * @link http://php.net/manual/en/memcached.getresultmessage.php
		 * @since PECL memcached >= 1.0.0
		 */
		public function getResultMessage(): string {}

		/**
		 * Map a key to a server
		 * <p><b>Memcached::getServerByKey()</b> returns the server that would be selected by a particular <code>server_key</code> in all the <b>Memcached::&#42;ByKey()</b> operations.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @return array <p>Returns an array containing three keys of <i>host</i>, <i>port</i>, and <i>weight</i> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.getserverbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getServerByKey(string $server_key): array {}

		/**
		 * Get the list of the servers in the pool
		 * <p><b>Memcached::getServerList()</b> returns the list of all servers that are in its server pool.</p>
		 * @return array <p>The list of all servers in the server pool.</p>
		 * @link http://php.net/manual/en/memcached.getserverlist.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getServerList(): array {}

		/**
		 * Get server pool statistics
		 * <p><b>Memcached::getStats()</b> returns an array containing the state of all available memcache servers. See memcache protocol specification for details on these statistics.</p>
		 * @return array <p>Array of server statistics, one entry per server.</p>
		 * @link http://php.net/manual/en/memcached.getstats.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getStats(): array {}

		/**
		 * Get server pool version info
		 * <p><b>Memcached::getVersion()</b> returns an array containing the version info for all available memcache servers.</p>
		 * @return array <p>Array of server versions, one entry per server.</p>
		 * @link http://php.net/manual/en/memcached.getversion.php
		 * @since PECL memcached >= 0.1.5
		 */
		public function getVersion(): array {}

		/**
		 * Increment numeric item's value
		 * <p><b>Memcached::increment()</b> increments a numeric item's value by the specified <code>offset</code>. If the item's value is not numeric, an error will result. <b>Memcached::increment()</b> will set the item to the <code>initial_value</code> parameter if the key doesn't exist.</p>
		 * @param string $key <p>The key of the item to increment.</p>
		 * @param int $offset <p>The amount by which to increment the item's value.</p>
		 * @param int $initial_value <p>The value to set the item to if it doesn't currently exist.</p>
		 * @param int $expiry <p>The expiry time to set on the item.</p>
		 * @return int <p>Returns new item's value on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.increment.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function increment(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * Increment numeric item's value, stored on a specific server
		 * <p><b>Memcached::incrementByKey()</b> increments a numeric item's value by the specified <code>offset</code>. If the item's value is not numeric, an error will result. <b>Memcached::incrementByKey()</b> will set the item to the <code>initial_value</code> parameter if the key doesn't exist.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key of the item to increment.</p>
		 * @param int $offset <p>The amount by which to increment the item's value.</p>
		 * @param int $initial_value <p>The value to set the item to if it doesn't currently exist.</p>
		 * @param int $expiry <p>The expiry time to set on the item.</p>
		 * @return int <p>Returns new item's value on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.incrementbykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function incrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * Check if a persitent connection to memcache is being used
		 * <p><b>Memcached::isPersistent()</b> checks if the connections to the memcache servers are persistent connections.</p>
		 * @return bool <p>Returns true if Memcache instance uses a persistent connection, false otherwise.</p>
		 * @link http://php.net/manual/en/memcached.ispersistent.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function isPersistent(): bool {}

		/**
		 * Check if the instance was recently created
		 * <p><b>Memcached::isPristine()</b> checks if the Memcache instance was recently created.</p>
		 * @return bool <p>Returns the true if instance is recently created, false otherwise.</p>
		 * @link http://php.net/manual/en/memcached.ispristine.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function isPristine(): bool {}

		/**
		 * Prepend data to an existing item
		 * <p><b>Memcached::prepend()</b> prepends the given <code>value</code> string to the value of an existing item. The reason that <code>value</code> is forced to be a string is that prepending mixed types is not well-defined.</p><p><b>Note</b>:</p><p>If the <b><code>Memcached::OPT_COMPRESSION</code></b> is enabled, the operation will fail and a warning will be issued, because prepending compressed data to a value that is potentially already compressed is not possible.</p>
		 * @param string $key <p>The key of the item to prepend the data to.</p>
		 * @param string $value <p>The string to prepend.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.prepend.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function prepend(string $key, string $value): bool {}

		/**
		 * Prepend data to an existing item on a specific server
		 * <p><b>Memcached::prependByKey()</b> is functionally equivalent to <code>Memcached::prepend()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key of the item to prepend the data to.</p>
		 * @param string $value <p>The string to prepend.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.prependbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function prependByKey(string $server_key, string $key, string $value): bool {}

		/**
		 * Close any open connections
		 * <p><b>Memcached::quit()</b> closes any open connections to the memcache servers.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.quit.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function quit(): bool {}

		/**
		 * Replace the item under an existing key
		 * <p><b>Memcached::replace()</b> is similar to <code>Memcached::set()</code>, but the operation fails if the <code>key</code> does not exist on the server.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.replace.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function replace(string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Replace the item under an existing key on a specific server
		 * <p><b>Memcached::replaceByKey()</b> is functionally equivalent to <code>Memcached::replace()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server. This is useful if you need to keep a bunch of related keys on a certain server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. The <code>Memcached::getResultCode()</code> will return <b><code>Memcached::RES_NOTSTORED</code></b> if the key does not exist.</p>
		 * @link http://php.net/manual/en/memcached.replacebykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function replaceByKey(string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Clears all servers from the server list
		 * <p><b>Memcached::resetserverlist()</b> removes all memcache servers from the known server list, reseting it back to empty.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.resetserverlist.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function resetServerList(): bool {}

		/**
		 * Store an item
		 * <p><b>Memcached::set()</b> stores the <code>value</code> on a memcache server under the specified <code>key</code>. The <code>expiration</code> parameter can be used to control when the value is considered expired.</p><p>The value can be any valid PHP type except for resources, because those cannot be represented in a serialized form. If the <b><code>Memcached::OPT_COMPRESSION</code></b> option is turned on, the serialized value will also be compressed before storage.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.set.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function set(string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Store an item on a specific server
		 * <p><b>Memcached::setByKey()</b> is functionally equivalent to <code>Memcached::set()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server. This is useful if you need to keep a bunch of related keys on a certain server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param mixed $value <p>The value to store.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.setbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setByKey(string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * Store multiple items
		 * <p><b>Memcached::setMulti()</b> is similar to <code>Memcached::set()</code>, but instead of a single key/value item, it works on multiple items specified in <code>items</code>. The <code>expiration</code> time applies to all the items at once.</p>
		 * @param array $items <p>An array of key/value pairs to store on the server.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.setmulti.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setMulti(array $items, int $expiration = NULL): bool {}

		/**
		 * Store multiple items on a specific server
		 * <p><b>Memcached::setMultiByKey()</b> is functionally equivalent to <code>Memcached::setMulti()</code>, except that the free-form <code>server_key</code> can be used to map the keys from <code>items</code> to a specific server. This is useful if you need to keep a bunch of related keys on a certain server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param array $items <p>An array of key/value pairs to store on the server.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.setmultibykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setMultiByKey(string $server_key, array $items, int $expiration = NULL): bool {}

		/**
		 * Set a Memcached option
		 * <p>This method sets the value of a Memcached <code>option</code>. Some options correspond to the ones defined by libmemcached, and some are specific to the extension. See Memcached Constants for more information.</p><p>The options listed below require values specified via constants.</p><p><i>Memcached::OPT_HASH</i> requires <i>Memcached::HASH_&#42;</i> values.</p><p><i>Memcached::OPT_DISTRIBUTION</i> requires <i>Memcached::DISTRIBUTION_&#42;</i> values.</p>
		 * @param int $option
		 * @param mixed $value
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.setoption.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setOption(int $option, $value): bool {}

		/**
		 * Set Memcached options
		 * <p><b>Memcached::setOptions()</b> is a variation of the <code>Memcached::setOption()</code> that takes an array of options to be set.</p>
		 * @param array $options <p>An associative array of options where the key is the option to set and the value is the new value for the option.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/memcached.setoptions.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function setOptions(array $options): bool {}

		/**
		 * Set the credentials to use for authentication
		 * <p><b>Memcached::setSaslAuthData()</b> sets the username and password that should be used for SASL authentication with the memcache servers.</p><p><i>This method is only available when the memcached extension is built with SASL support.</i> Please refer to Memcached setup for how to do this.</p>
		 * @param string $username <p>The username to use for authentication.</p>
		 * @param string $password <p>The password to use for authentication.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/memcached.setsaslauthdata.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function setSaslAuthData(string $username, string $password): void {}

		/**
		 * Set a new expiration on an item
		 * <p><b>Memcached::touch()</b> sets a new expiration value on the given key.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.touch.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function touch(string $key, int $expiration): bool {}

		/**
		 * Set a new expiration on an item on a specific server
		 * <p><b>Memcached::touchByKey()</b> is functionally equivalent to <code>Memcached::touch()</code>, except that the free-form <code>server_key</code> can be used to map the <code>key</code> to a specific server.</p>
		 * @param string $server_key <p>The key identifying the server to store the value on or retrieve it from. Instead of hashing on the actual key for the item, we hash on the server key when deciding which memcached server to talk to. This allows related items to be grouped together on a single server for efficiency with multi operations.</p>
		 * @param string $key <p>The key under which to store the value.</p>
		 * @param int $expiration <p>The expiration time, defaults to 0. See Expiration Times for more info.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Use <code>Memcached::getResultCode()</code> if necessary.</p>
		 * @link http://php.net/manual/en/memcached.touchbykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function touchByKey(string $server_key, string $key, int $expiration): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.memcachedexception.php
	 * @since PECL memcached >= 0.1.0
	 */
	class MemcachedException extends \RuntimeException {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

}
