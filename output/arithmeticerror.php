<?php



namespace {

	/**
	 * <p><b>ArithmeticError</b> is thrown when an error occurs while performing mathematical operations. In PHP 7.0, these errors include attempting to perform a bitshift by a negative amount, and any call to <code>intdiv()</code> that would result in a value outside the possible bounds of an <code>integer</code>.</p>
	 * @link http://php.net/manual/en/class.arithmeticerror.php
	 * @since PHP 7
	 */
	class ArithmeticError extends \Error {

		/**
		 * Clone the error
		 * <p>Error can not be clone, so this method results in fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/error.clone.php
		 * @since No version information available, might only be in Git
		 */
		final private function __clone() {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link http://php.net/manual/en/error.tostring.php
		 * @since No version information available, might only be in Git
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return mixed <p>Returns the error code as <code>integer</code></p>
		 * @link http://php.net/manual/en/error.getcode.php
		 * @since No version information available, might only be in Git
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link http://php.net/manual/en/error.getfile.php
		 * @since No version information available, might only be in Git
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link http://php.net/manual/en/error.getline.php
		 * @since No version information available, might only be in Git
		 */
		final public function getLine(): int {}

		/**
		 * Gets the error message
		 * <p>Returns the error message.</p>
		 * @return string <p>Returns the error message as a string.</p>
		 * @link http://php.net/manual/en/error.getmessage.php
		 * @since No version information available, might only be in Git
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous Throwable (the third parameter of <code>Error::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/error.getprevious.php
		 * @since No version information available, might only be in Git
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/error.gettrace.php
		 * @since No version information available, might only be in Git
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link http://php.net/manual/en/error.gettraceasstring.php
		 * @since No version information available, might only be in Git
		 */
		final public function getTraceAsString(): string {}
	}

}
