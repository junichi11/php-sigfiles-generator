<?php



namespace {

	/**
	 * <p>Interface for external iterators or objects that can be iterated themselves internally.</p>
	 * @link https://php.net/manual/en/class.iterator.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	interface Iterator extends Traversable {

		/**
		 * Return the current element
		 * <p>Returns the current element.</p>
		 * @return mixed <p>Can return any type.</p>
		 * @link https://php.net/manual/en/iterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current();

		/**
		 * Return the key of the current element
		 * <p>Returns the key of the current element.</p>
		 * @return scalar <p>Returns scalar on success, or <b><code>NULL</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): \scalar;

		/**
		 * Move forward to next element
		 * <p>Moves the current position to the next element.</p><p><b>Note</b>:</p><p>This method is called <i>after</i> each foreach loop.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void;

		/**
		 * Rewind the Iterator to the first element
		 * <p>Rewinds back to the first element of the Iterator.</p><p><b>Note</b>:</p><p>This is the <i>first</i> method called when starting a foreach loop. It will <i>not</i> be executed <i>after</i> foreach loops.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void;

		/**
		 * Checks if current position is valid
		 * <p>This method is called after <code>Iterator::rewind()</code> and <code>Iterator::next()</code> to check if the current position is valid.</p>
		 * @return bool <p>The return value will be casted to <code>bool</code> and then evaluated. Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool;
	}

}
