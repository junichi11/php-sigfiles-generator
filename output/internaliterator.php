<?php



namespace {

	/**
	 * <p>Class to ease implementing <code>IteratorAggregate</code> for <i>internal</i> classes.</p>
	 * @link https://php.net/manual/en/class.internaliterator.php
	 * @since PHP 8
	 */
	final class InternalIterator implements \Iterator {

		/**
		 * Private constructor to disallow direct instantiation
		 * @return self
		 * @link https://php.net/manual/en/internaliterator.construct.php
		 * @since PHP 8
		 */
		private function __construct() {}

		/**
		 * Return the current element
		 * <p>Returns the current element.</p>
		 * @return mixed <p>Returns the current element.</p>
		 * @link https://php.net/manual/en/internaliterator.current.php
		 * @since PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Return the key of the current element
		 * <p>Returns the key of the current element.</p>
		 * @return mixed <p>Returns the key of the current element.</p>
		 * @link https://php.net/manual/en/internaliterator.key.php
		 * @since PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move forward to next element
		 * <p>Moves the current position to the next element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/internaliterator.next.php
		 * @since PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the Iterator to the first element
		 * <p>Rewinds back to the first element of the Iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/internaliterator.rewind.php
		 * @since PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check if current position is valid
		 * <p>Checks if current position is valid.</p>
		 * @return bool <p>Returns whether the current position is valid.</p>
		 * @link https://php.net/manual/en/internaliterator.valid.php
		 * @since PHP 8
		 */
		public function valid(): bool {}
	}

}
