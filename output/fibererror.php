<?php



namespace {

	/**
	 * <p><b>FiberError</b> is thrown when an invalid operation is performed on a <code>Fiber</code>.</p>
	 * @link https://php.net/manual/en/class.fibererror.php
	 * @since PHP 8 >= 8.1.0
	 */
	final class FiberError extends \Error {

		/**
		 * @var string <p>The error message</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The error code</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the error happened</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the error happened</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the error
		 * <p>Error can not be cloned, so this method results in fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/error.clone.php
		 * @since PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * Constructor to disallow direct instantiation
		 * @return self
		 * @link https://php.net/manual/en/fibererror.construct.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function __construct() {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link https://php.net/manual/en/error.tostring.php
		 * @since PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return int <p>Returns the error code as <code>int</code></p>
		 * @link https://php.net/manual/en/error.getcode.php
		 * @since PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link https://php.net/manual/en/error.getfile.php
		 * @since PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link https://php.net/manual/en/error.getline.php
		 * @since PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the error message
		 * <p>Returns the error message.</p>
		 * @return string <p>Returns the error message as a string.</p>
		 * @link https://php.net/manual/en/error.getmessage.php
		 * @since PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous Throwable (the third parameter of <code>Error::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/error.getprevious.php
		 * @since PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/error.gettrace.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link https://php.net/manual/en/error.gettraceasstring.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

}