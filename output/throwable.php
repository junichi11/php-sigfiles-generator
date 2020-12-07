<?php



namespace {

	/**
	 * <p><b>Throwable</b> is the base interface for any object that can be thrown via a <code>throw</code> statement, including Error and Exception.</p>
	 * <p><b>Note</b>:</p>
	 * <p>PHP classes cannot implement the <b>Throwable</b> interface directly, and must instead extend Exception.</p>
	 * @link http://php.net/manual/en/class.throwable.php
	 * @since PHP 7, PHP 8
	 */
	interface Throwable {

		/**
		 * Gets a string representation of the thrown object
		 * @return string <p>Returns the <code>string</code> representation of the thrown object.</p>
		 * @link http://php.net/manual/en/throwable.tostring.php
		 * @since PHP 7, PHP 8
		 */
		public function __toString(): string;

		/**
		 * Gets the exception code
		 * <p>Returns the error code associated with the thrown object.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/throwable.getcode.php
		 * @since PHP 7, PHP 8
		 */
		public function getCode(): int;

		/**
		 * Gets the file in which the object was created
		 * <p>Get the name of the file in which the thrown object was created.</p>
		 * @return string <p>Returns the filename in which the thrown object was created.</p>
		 * @link http://php.net/manual/en/throwable.getfile.php
		 * @since PHP 7, PHP 8
		 */
		public function getFile(): string;

		/**
		 * Gets the line on which the object was instantiated
		 * <p>Returns the line number where the thrown object was instantiated.</p>
		 * @return int <p>Returns the line number where the thrown object was instantiated.</p>
		 * @link http://php.net/manual/en/throwable.getline.php
		 * @since PHP 7, PHP 8
		 */
		public function getLine(): int;

		/**
		 * Gets the message
		 * <p>Returns the message associated with the thrown object.</p>
		 * @return string <p>Returns the message associated with the thrown object.</p>
		 * @link http://php.net/manual/en/throwable.getmessage.php
		 * @since PHP 7, PHP 8
		 */
		public function getMessage(): string;

		/**
		 * Returns the previous Throwable
		 * <p>Returns any previous Throwable (for example, one provided as the third parameter to <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available, or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/throwable.getprevious.php
		 * @since PHP 7, PHP 8
		 */
		public function getPrevious(): \Throwable;

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace as an <code>array</code>.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code> in the same format as <code>debug_backtrace()</code>.</p>
		 * @link http://php.net/manual/en/throwable.gettrace.php
		 * @since PHP 7, PHP 8
		 */
		public function getTrace(): array;

		/**
		 * Gets the stack trace as a string
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link http://php.net/manual/en/throwable.gettraceasstring.php
		 * @since PHP 7, PHP 8
		 */
		public function getTraceAsString(): string;
	}

}
