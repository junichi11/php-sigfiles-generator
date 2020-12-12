<?php



namespace {

	/**
	 * <p>The Judy class implements the ArrayAccess interface and the Iterator interface. This class, once instantiated, can be accessed like a PHP array.</p>
	 * <p>A PHP Judy object (or Judy Array) can be one of the following type :</p>
	 * <p><b>Example #1 Judy array example</b></p>
	 * @link https://php.net/manual/en/class.judy.php
	 * @since PECL judy >= 0.1.1
	 */
	class Judy implements \ArrayAccess, \Iterator {

		/**
		 * @var int <p>Define the Judy Array as a Bitset with keys as Integer and Values as a Boolean</p>
		 * @link https://php.net/manual/en/class.judy.php
		 */
		const BITSET = 1;

		/**
		 * @var int <p>Define the Judy Array with key/values as Integer, and Integer only.</p>
		 * @link https://php.net/manual/en/class.judy.php
		 */
		const INT_TO_INT = 2;

		/**
		 * @var int <p>Define the Judy Array with keys as Integer and Values of any type.</p>
		 * @link https://php.net/manual/en/class.judy.php
		 */
		const INT_TO_MIXED = 3;

		/**
		 * @var int <p>Define the Judy Array with keys as a String and Values as Integer, and Integer only.</p>
		 * @link https://php.net/manual/en/class.judy.php
		 */
		const STRING_TO_INT = 4;

		/**
		 * @var int <p>Define the Judy Array with keys as a String and Values of any type.</p>
		 * @link https://php.net/manual/en/class.judy.php
		 */
		const STRING_TO_MIXED = 5;

		/**
		 * Construct a new Judy object
		 * <p>Construct a new Judy object. A Judy object can be accessed like a PHP Array.</p>
		 * @param int $judy_type <p>The Judy type to be used.</p>
		 * @return self <p>Return the new Judy instance.</p>
		 * @link https://php.net/manual/en/judy.construct.php
		 * @since PECL judy >= 0.1.1
		 */
		public function __construct(int $judy_type) {}

		/**
		 * Destruct a Judy object
		 * <p>Destruct a Judy object.</p>
		 * @return void
		 * @link https://php.net/manual/en/judy.destruct.php
		 * @since PECL judy >= 0.1.1
		 */
		public function __destruct() {}

		/**
		 * Locate the Nth index present in the Judy array
		 * <p>Locate the Nth index present in the Judy array.</p>
		 * @param int $nth_index <p>Nth index to return. If nth_index equal 1, then it will return the first index in the array.</p>
		 * @return int <p>Return the index at the given Nth position.</p>
		 * @link https://php.net/manual/en/judy.bycount.php
		 * @since PECL judy >= 0.1.1
		 */
		public function byCount(int $nth_index): int {}

		/**
		 * Count the number of elements in the Judy array
		 * <p>Count the number of elements in the Judy array.</p>
		 * @param int $index_start <p>Start counting from the given index. Default is first index.</p>
		 * @param int $index_end <p>Stop counting when reaching this index. Default is last index.</p>
		 * @return int <p>Return the number of elements.</p>
		 * @link https://php.net/manual/en/judy.count.php
		 * @since PECL judy >= 0.1.1
		 */
		public function count(int $index_start = 0, int $index_end = -1): int {}

		/**
		 * Search for the first index in the Judy array
		 * <p>Search (inclusive) for the first index present that is equal to or greater than the passed Index.</p>
		 * @param mixed $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return mixed <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.first.php
		 * @since PECL judy >= 0.1.1
		 */
		public function first(mixed $index = NULL): mixed {}

		/**
		 * Search for the first absent index in the Judy array
		 * <p>Search (inclusive) for the first absent index that is equal to or greater than the passed Index.</p>
		 * @param mixed $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return int <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.firstempty.php
		 * @since PECL judy >= 0.1.1
		 */
		public function firstEmpty(mixed $index = 0): int {}

		/**
		 * Free the entire Judy array
		 * <p>Free the entire Judy array.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/judy.free.php
		 * @since PECL judy >= 0.1.1
		 */
		public function free(): int {}

		/**
		 * Return the type of the current Judy array
		 * <p>Return an integer corresponding to the Judy type of the current object.</p>
		 * @return int <p>Return an integer corresponding to a Judy type.</p>
		 * @link https://php.net/manual/en/judy.gettype.php
		 * @since PECL judy >= 0.1.1
		 */
		public function getType(): int {}

		/**
		 * Search for the last index in the Judy array
		 * <p>Search (inclusive) for the last index present that is equal to or less than the passed Index.</p>
		 * @param string $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return void <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.last.php
		 * @since PECL judy >= 0.1.1
		 */
		public function last(string $index = NULL): void {}

		/**
		 * Search for the last absent index in the Judy array
		 * <p>Search (inclusive) for the last absent index that is equal to or less than the passed Index.</p>
		 * @param int $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return int <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.lastempty.php
		 * @since PECL judy >= 0.1.1
		 */
		public function lastEmpty(int $index = -1): int {}

		/**
		 * Return the memory used by the Judy array
		 * <p>Return the memory used by the Judy array.</p>
		 * @return int <p>Return the memory used in bytes.</p>
		 * @link https://php.net/manual/en/judy.memoryusage.php
		 * @since PECL judy >= 0.1.1
		 */
		public function memoryUsage(): int {}

		/**
		 * Search for the next index in the Judy array
		 * <p>Search (exclusive) for the next index present that is greater than the passed Index.</p>
		 * @param mixed $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return mixed <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.next.php
		 * @since PECL judy >= 0.1.1
		 */
		public function next(mixed $index): mixed {}

		/**
		 * Search for the next absent index in the Judy array
		 * <p>Search (exclusive) for the next absent index that is greater than the passed Index.</p>
		 * @param int $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return int <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.nextempty.php
		 * @since PECL judy >= 0.1.1
		 */
		public function nextEmpty(int $index): int {}

		/**
		 * Whether a offset exists
		 * <p>Whether or not an offset exists.</p>
		 * @param mixed $offset <p>An offset to check for.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/judy.offsetexists.php
		 * @since PECL judy >= 0.1.1
		 */
		public function offsetExists(mixed $offset): bool {}

		/**
		 * Offset to retrieve
		 * <p>Returns the value at specified offset.</p>
		 * @param mixed $offset <p>The offset to retrieve.</p>
		 * @return mixed <p>Can return all value types.</p>
		 * @link https://php.net/manual/en/judy.offsetget.php
		 * @since PECL judy >= 0.1.1
		 */
		public function offsetGet(mixed $offset): mixed {}

		/**
		 * Offset to set
		 * <p>Assigns a value to the specified offset.</p>
		 * @param mixed $offset <p>The offset to assign the value to.</p>
		 * @param mixed $value <p>The value to set.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link https://php.net/manual/en/judy.offsetset.php
		 * @since PECL judy >= 0.1.1
		 */
		public function offsetSet(mixed $offset, mixed $value): bool {}

		/**
		 * Offset to unset
		 * <p>Unsets an offset.</p>
		 * @param mixed $offset <p>The offset to unset.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link https://php.net/manual/en/judy.offsetunset.php
		 * @since PECL judy >= 0.1.1
		 */
		public function offsetUnset(mixed $offset): bool {}

		/**
		 * Search for the previous index in the Judy array
		 * <p>Search (exclusive) for the previous index present that is less than the passed Index.</p>
		 * @param mixed $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return mixed <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.prev.php
		 * @since PECL judy >= 0.1.1
		 */
		public function prev(mixed $index): mixed {}

		/**
		 * Search for the previous absent index in the Judy array
		 * <p>Search (exclusive) for the previous index absent that is less than the passed Index.</p>
		 * @param mixed $index <p>The index can be an integer or a string corresponding to the index where to start the search.</p>
		 * @return int <p>Return the corresponding index in the array.</p>
		 * @link https://php.net/manual/en/judy.prevempty.php
		 * @since PECL judy >= 0.1.1
		 */
		public function prevEmpty(mixed $index): int {}

		/**
		 * Return the size of the current Judy array
		 * <p>This method is an alias of: <code>Judy::count()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>Return an integer.</p>
		 * @link https://php.net/manual/en/judy.size.php
		 * @since PECL judy >= 0.1.1
		 */
		public function size(): void {}
	}

	/**
	 * Return the type of a Judy array
	 * <p><b>judy_type()</b> return an integer corresponding to the Judy type of the specified Judy <code>array</code>.</p>
	 * @param \Judy $array <p>The Judy Array to test.</p>
	 * @return int <p>Return an integer corresponding to a Judy type.</p>
	 * @link https://php.net/manual/en/function.judy-type.php
	 * @since PECL judy >= 0.1.1
	 */
	function judy_type(\Judy $array): int {}

	/**
	 * Return or print the current PHP Judy version
	 * <p>Return a string of the PHP Judy version. If the return value is not used, the string will be printed.</p>
	 * @return string <p>Return a string of the PHP Judy version.</p>
	 * @link https://php.net/manual/en/function.judy-version.php
	 * @since PECL judy >= 0.1.1
	 */
	function judy_version(): string {}

}
