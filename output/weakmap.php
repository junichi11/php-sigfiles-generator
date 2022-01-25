<?php



namespace {

	/**
	 * <p>A <b>WeakMap</b> is map (or dictionary) that accepts objects as keys. However, unlike the otherwise similar <code>SplObjectStorage</code>, an object in a key of <b>WeakMap</b> does not contribute toward the object's reference count. That is, if at any point the only remaining reference to an object is the key of a <b>WeakMap</b>, the object will be garbage collected and removed from the <b>WeakMap</b>. Its primary use case is for building caches of data derived from an object that do not need to live longer than the object.</p>
	 * <p><b>WeakMap</b> implements <code>ArrayAccess</code>, <code>Iterator</code>, and <code>Countable</code>, so in most cases it can be used in the same fashion as an associative array.</p>
	 * @link https://php.net/manual/en/class.weakmap.php
	 * @since PHP 8
	 */
	final class WeakMap implements \ArrayAccess, \Countable, \IteratorAggregate {

		/**
		 * Constructs a new map
		 * <p>Constructs a new map.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/ext-weakmap.construct.php
		 * @since PHP 8
		 */
		public function __construct() {}

		/**
		 * Counts the number of live entries in the map
		 * <p>Counts the number of live entries in the map.</p>
		 * @return int <p>Returns the number of live entries in the map.</p>
		 * @link https://php.net/manual/en/weakmap.count.php
		 * @since PHP 8
		 */
		public function count(): int {}

		/**
		 * Retrieve an external iterator
		 * <p>Returns an external iterator.</p>
		 * @return Iterator <p>An instance of an object implementing <code>Iterator</code> or <code>Traversable</code></p>
		 * @link https://php.net/manual/en/weakmap.getiterator.php
		 * @since PHP 8
		 */
		public function getIterator(): \Iterator {}

		/**
		 * Checks whether a certain object is in the map
		 * <p>Checks whether the passed object is referenced in the map.</p>
		 * @param object $object <p>Object to check for.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the object is contained in the map, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakmap.offsetexists.php
		 * @since PHP 8
		 */
		public function offsetExists(object $object): bool {}

		/**
		 * Returns the value pointed to by a certain object
		 * <p>Returns the value pointed to by a certain object.</p>
		 * @param object $object <p>Some object contained as key in the map.</p>
		 * @return mixed <p>Returns the value associated to the object passed as argument, <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakmap.offsetget.php
		 * @since PHP 8
		 */
		public function offsetGet(object $object): mixed {}

		/**
		 * Updates the map with a new key-value pair
		 * <p>Updates the map with a new key-value pair. If the key already existed in the map, the old value is replaced with the new.</p>
		 * @param object $object <p>The object serving as key of the key-value pair.</p>
		 * @param mixed $value <p>The arbitrary data serving as value of the key-value pair.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.offsetset.php
		 * @since PHP 8
		 */
		public function offsetSet(object $object, mixed $value): void {}

		/**
		 * Removes an entry from the map
		 * <p>Removes an entry from the map.</p>
		 * @param object $object <p>The key object to remove from the map.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.offsetunset.php
		 * @since PHP 8
		 */
		public function offsetUnset(object $object): void {}
	}

}
