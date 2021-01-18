<?php



namespace {

	/**
	 * <p><b>Generator</b> objects are returned from generators.</p>
	 * <p><b>Generator</b> objects cannot be instantiated via new.</p>
	 * @link https://php.net/manual/en/class.generator.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class Generator implements \Iterator {

		/**
		 * Serialize callback
		 * <p>Throws an exception as generators can't be serialized.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/generator.wakeup.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function __wakeup(): void {}

		/**
		 * Get the yielded value
		 * @return mixed <p>Returns the yielded value.</p>
		 * @link https://php.net/manual/en/generator.current.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the return value of a generator
		 * @return mixed <p>Returns the generator's return value once it has finished executing.</p>
		 * @link https://php.net/manual/en/generator.getreturn.php
		 * @since PHP 7, PHP 8
		 */
		public function getReturn(): mixed {}

		/**
		 * Get the yielded key
		 * <p>Gets the key of the yielded value.</p>
		 * @return mixed <p>Returns the yielded key.</p>
		 * @link https://php.net/manual/en/generator.key.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Resume execution of the generator
		 * <p>Calling <b>Generator::next()</b> has the same effect as calling <code>Generator::send()</code> with <b><code>null</code></b> as argument.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/generator.next.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>If iteration has already begun, this will throw an exception.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/generator.rewind.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Send a value to the generator
		 * <p>Sends the given value to the generator as the result of the current yield expression and resumes execution of the generator.</p><p>If the generator is not at a yield expression when this method is called, it will first be let to advance to the first yield expression before sending the value. As such it is not necessary to "prime" PHP generators with a <code>Generator::next()</code> call (like it is done in Python).</p>
		 * @param mixed $value <p>Value to send into the generator. This value will be the return value of the yield expression the generator is currently at.</p>
		 * @return mixed <p>Returns the yielded value.</p>
		 * @link https://php.net/manual/en/generator.send.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function send(mixed $value): mixed {}

		/**
		 * Throw an exception into the generator
		 * <p>Throws an exception into the generator and resumes execution of the generator. The behavior will be the same as if the current yield expression was replaced with a <code>throw $exception</code> statement.</p><p>If the generator is already closed when this method is invoked, the exception will be thrown in the caller's context instead.</p>
		 * @param \Throwable $exception <p>Exception to throw into the generator.</p>
		 * @return mixed <p>Returns the yielded value.</p>
		 * @link https://php.net/manual/en/generator.throw.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function throw(\Throwable $exception): mixed {}

		/**
		 * Check if the iterator has been closed
		 * @return bool <p>Returns <b><code>false</code></b> if the iterator has been closed. Otherwise returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/generator.valid.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

}
