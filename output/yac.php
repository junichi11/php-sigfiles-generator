<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.yac.php
	 * @since PECL yac >= 1.0.0
	 */
	class Yac {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yac.php#yac.props.prefix
		 */
		protected $_prefix;

		/**
		 * Constructor
		 * <p>prefix is used to prepended to keys, this could be used to avoiding conflicts between apps.</p>
		 * @param string $prefix <p><code>string</code> prefix</p>
		 * @return self
		 * @link https://php.net/manual/en/yac.construct.php
		 * @since PECL yac >= 1.0.0
		 */
		public function __construct(string $prefix = "") {}

		/**
		 * Getter
		 * <p>Retrieve values from cache</p>
		 * @param string $key <p><code>string</code> key</p>
		 * @return mixed <p>mixed on success, <b><code>null</code></b> on failure</p>
		 * @link https://php.net/manual/en/yac.getter.php
		 * @since PECL yac >= 1.0.0
		 */
		public function __get(string $key): mixed {}

		/**
		 * Setter
		 * <p>store a item into cache</p>
		 * @param string $keys <p><code>string</code> key</p>
		 * @param mixed $value <p>mixed value, All php value type could be stored except resource</p>
		 * @return mixed <p>Always return the value self</p>
		 * @link https://php.net/manual/en/yac.setter.php
		 * @since PECL yac >= 1.0.0
		 */
		public function __set(string $keys, mixed $value): mixed {}

		/**
		 * Store into cache
		 * <p>Added a item into cache.</p>
		 * @param string $keys <p><code>string</code> key</p>
		 * @param mixed $value <p>mixed value, All php value type could be stored except resource</p>
		 * @param int $ttl <p>expire time</p>
		 * @return bool <p><code>bool</code>, <b><code>true</code></b> on success, <b><code>false</code></b> on failure</p><p><b>Note</b>:</p><p><b>Yac::add()</b> may fail if cas lock could not obtain, so, if you need the value to be stored properly, you may write codes like:</p> <p><b>Example #1 Make sure the item is stored</b></p>  <code> while(!$yac-&gt;set("key", "vale)); </code>
		 * @link https://php.net/manual/en/yac.add.php
		 * @since PECL yac >= 1.0.0
		 */
		public function add(string $keys, mixed $value, int $ttl = 0): bool {}

		/**
		 * Remove items from cache
		 * <p>remove items from cache</p>
		 * @param string|array $keys <p>string key, or array of multiple keys to be removed</p>
		 * @param int $ttl <p>if delay is set, delete will mark the items to be invalid in ttl second.</p>
		 * @return bool
		 * @link https://php.net/manual/en/yac.delete.php
		 * @since PECL yac >= 1.0.0
		 */
		public function delete(string|array $keys, int $ttl = null): bool {}

		/**
		 * Dump cache
		 * <p>Dump values stored in cache</p>
		 * @param int $num <p>Maximum number of items should be returned</p>
		 * @return mixed <p>mixed</p>
		 * @link https://php.net/manual/en/yac.dump.php
		 * @since PECL yac >= 1.0.0
		 */
		public function dump(int $num): mixed {}

		/**
		 * Flush the cache
		 * <p>Remove all cached values</p>
		 * @return bool <p>bool, always true</p>
		 * @link https://php.net/manual/en/yac.flush.php
		 * @since PECL yac >= 1.0.0
		 */
		public function flush(): bool {}

		/**
		 * Retrieve values from cache
		 * <p>Retrieve values from cache</p>
		 * @param string|array $key <p><code>string</code> keys, or <code>array</code> of multiple keys.</p>
		 * @param int $cas <p>if not <b><code>null</code></b>, it will be set to the retrieved item's cas.</p>
		 * @return mixed <p>mixed on success, false on failure</p>
		 * @link https://php.net/manual/en/yac.get.php
		 * @since PECL yac >= 1.0.0
		 */
		public function get(string|array $key, int &$cas = null): mixed {}

		/**
		 * Status of cache
		 * <p>Get status of cache system</p>
		 * @return array <p>Return an array, consistent with: "memory_size", "slots_memory_size", "values_memory_size", "segment_size", "segment_num", "miss", "hits", "fails", "kicks", "recycles", "slots_size", "slots_used"</p>
		 * @link https://php.net/manual/en/yac.info.php
		 * @since PECL yac >= 1.0.0
		 */
		public function info(): array {}

		/**
		 * Store into cache
		 * <p>Add a item into cache, it the key is already exists, override it.</p>
		 * @param string $keys <p><code>string</code> key</p>
		 * @param mixed $value <p>mixed value, All php value type could be stored except resource</p>
		 * @param int $ttl <p>expire time</p>
		 * @return bool <p>the value self</p>
		 * @link https://php.net/manual/en/yac.set.php
		 * @since PECL yac >= 1.0.0
		 */
		public function set(string $keys, mixed $value, int $ttl = 0): bool {}
	}

	/**
	 * Max length of a key could be, it is 48 bytes.
	 */
	define('YAC_MAX_KEY_LEN', null);

	define('YAC_MAX_RAW_COMPRESSED_LEN', null);

	define('YAC_MAX_VALUE_RAW_LEN', null);

	/**
	 * Which serialzier is yac used
	 */
	define('YAC_SERIALIZER', null);

	/**
	 * Use igbinary as serializer(require --enable-igbinary)
	 */
	define('YAC_SERIALIZER_IGBINARY', null);

	/**
	 * Use json as serializer(requrie --enable-json)
	 */
	define('YAC_SERIALIZER_JSON', null);

	/**
	 * Use msgpack as serializer(require --enable-msgpack)
	 */
	define('YAC_SERIALIZER_MSGPACK', null);

	/**
	 * Use php serialize as serializer
	 */
	define('YAC_SERIALIZER_PHP', null);

	define('YAC_VERSION', null);

}
