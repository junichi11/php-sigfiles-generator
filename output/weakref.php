<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.weakmap.php
	 * @since PECL weakref >= 0.2.0
	 */
	class WeakMap implements \Countable, \ArrayAccess, \Iterator {

		/**
		 * Constructs a new map
		 * <p>Constructs a new map.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.construct.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function __construct() {}

		/**
		 * Counts the number of live entries in the map
		 * <p>Counts the number of live entries in the map.</p>
		 * @return int <p>Returns the number of live entries in the map.</p>
		 * @link https://php.net/manual/en/weakmap.count.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function count(): int {}

		/**
		 * Returns the current value under iteration
		 * <p>Returns the current value being iterated on in the map.</p>
		 * @return mixed <p>The value currently being iterated on.</p>
		 * @link https://php.net/manual/en/weakmap.current.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function current() {}

		/**
		 * Returns the current key under iteration
		 * <p>Returns the object serving as key in the map, at the current iterating position.</p>
		 * @return object <p>The object key currently being iterated.</p>
		 * @link https://php.net/manual/en/weakmap.key.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function key(): object {}

		/**
		 * Advances to the next map element
		 * <p>Advances to the next map element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.next.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function next(): void {}

		/**
		 * Checks whether a certain object is in the map
		 * <p>Checks whether the passed object is referenced in the map.</p>
		 * @param object $object <p>Object to check for.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the object is contained in the map, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakmap.offsetexists.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetExists(object $object): bool {}

		/**
		 * Returns the value pointed to by a certain object
		 * <p>Returns the value pointed to by a certain object.</p>
		 * @param object $object <p>Some object contained as key in the map.</p>
		 * @return mixed <p>Returns the value associated to the object passed as argument, <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakmap.offsetget.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetGet(object $object) {}

		/**
		 * Updates the map with a new key-value pair
		 * <p>Updates the map with a new key-value pair. If the key already existed in the map, the old value is replaced with the new.</p>
		 * @param object $object <p>The object serving as key of the key-value pair.</p>
		 * @param mixed $value <p>The arbitrary data serving as value of the key-value pair.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.offsetset.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetSet(object $object, $value): void {}

		/**
		 * Removes an entry from the map
		 * <p>Removes an entry from the map.</p>
		 * @param object $object <p>The key object to remove from the map.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.offsetunset.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function offsetUnset(object $object): void {}

		/**
		 * Rewinds the iterator to the beginning of the map
		 * <p>Rewinds the iterator to the beginning of the map.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakmap.rewind.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function rewind(): void {}

		/**
		 * Returns whether the iterator is still on a valid map element
		 * <p>Returns whether the iterator is still on a valid map element.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the iterator is on a valid element that can be accessed, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakmap.valid.php
		 * @since PECL weakref >= 0.2.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The WeakRef class provides a gateway to objects without preventing the garbage collector from freeing those objects. It also provides a way to turn a weak reference into a strong one.</p>
	 * <p><b>Note</b>:</p>
	 * <p>The class <b>WeakRef</b> is not to be confused with the class WeakReference.</p>
	 * @link https://php.net/manual/en/class.weakref.php
	 * @since PECL weakref >= 0.1.0
	 */
	class WeakRef {

		/**
		 * Constructs a new weak reference
		 * <p>Constructs a new weak reference.</p>
		 * @param object $object <p>The object to reference.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/weakref.construct.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function __construct(object $object) {}

		/**
		 * Acquires a strong reference on that object
		 * <p>Acquires a strong reference on that object, virtually turning the weak reference into a strong one.</p><p>The Weakref instance maintains an internal acquired counter to track outstanding strong references. If the call to <b>Weakref::acquire()</b> is successful, this counter will be incremented by one.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the reference was valid and could be turned into a strong reference, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakref.acquire.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function acquire(): bool {}

		/**
		 * Returns the object pointed to by the weak reference
		 * <p>Returns the object pointed to by the weak reference.</p>
		 * @return object <p>Returns the object if the reference is still valid, <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakref.get.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function get(): object {}

		/**
		 * Releases a previously acquired reference
		 * <p>Releases a previously acquired reference, potentially turning a strong reference back into a weak reference.</p><p>The Weakref instance maintains an internal acquired counter to track outstanding strong references. If the call to <b>Weakref::release()</b> is successful, this counter will be decremented by one. Once this counter reaches zero, the strong reference is turned back into a weak reference.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the reference was previously acquired and thus could be released, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakref.release.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function release(): bool {}

		/**
		 * Checks whether the object referenced still exists
		 * <p>Checks whether the object referenced still exists.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the object still exists and is thus still accessible via <code>Weakref::get()</code>, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/weakref.valid.php
		 * @since PECL weakref >= 0.1.0
		 */
		public function valid(): bool {}
	}

}
