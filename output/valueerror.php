<?php



namespace {

	/**
	 * <p>A <b>ValueError</b> is thrown when the type of an argument is correct but the value of it is incorrect. For example, passing a negative integer when the function expects a positive one, or passing an empty string/array when the function expects it to not be empty.</p>
	 * @link http://php.net/manual/en/class.valueerror.php
	 * @since PHP 8
	 */
	class ValueError extends \Error {

		/**
		 * @var string <p>The error message</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The error code</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the error happened</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the error happened</p>
		 * @link http://php.net/manual/en/class.error.php#error.props.line
		 */
		protected $line;

		/**
		 * Clone the error
		 * <p>Error can not be cloned, so this method results in fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/error.clone.php
		 * @since PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link http://php.net/manual/en/error.tostring.php
		 * @since PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return mixed <p>Returns the error code as <code>int</code></p>
		 * @link http://php.net/manual/en/error.getcode.php
		 * @since PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link http://php.net/manual/en/error.getfile.php
		 * @since PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link http://php.net/manual/en/error.getline.php
		 * @since PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the error message
		 * <p>Returns the error message.</p>
		 * @return string <p>Returns the error message as a string.</p>
		 * @link http://php.net/manual/en/error.getmessage.php
		 * @since PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous Throwable (the third parameter of <code>Error::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/error.getprevious.php
		 * @since PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/error.gettrace.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link http://php.net/manual/en/error.gettraceasstring.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

}