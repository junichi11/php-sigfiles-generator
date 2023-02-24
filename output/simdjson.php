<?php



namespace {

	/**
	 * <p>Exception thrown if <code>simdjson_decode()</code>, <code>simdjson_key_count()</code>, <code>simdjson_key_exists()</code>, or <code>simdjson_key_value()</code>. For possible values see the simdjson error codes constants.</p>
	 * @link https://php.net/manual/en/class.simdjsonexception.php
	 * @since PECL simdjson >= 2.1.0
	 */
	class SimdJsonException extends \RuntimeException {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;
	}

	/**
	 * <p>A <b>SimdJsonValueError</b> is thrown when the type of an argument to a function from simdjson is correct but the value of it is incorrect. E.g. when the JSON decoding $depth is not positive or the $depth is too large.</p>
	 * @link https://php.net/manual/en/class.simdjsonvalueerror.php
	 * @since PECL simdjson >= 3.0.0
	 */
	class SimdJsonValueError extends \ValueError {

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

	/**
	 * Decodes a JSON string
	 * <p>Takes a JSON encoded string and converts it into a PHP value. This uses a faster Simultaneous Instruction, Multiple Data implementation than <code>json_decode()</code> when it is supported by the computer architecture.</p>
	 * @param string $json <p>The <code>json</code> <code>string</code> being decoded.</p> <p>This function only works with UTF-8 encoded strings.</p> <p>This function parses valid inputs which <code>json_decode()</code> can decode, provided that they are less than 4 GiB long.</p>
	 * @param bool $associative <p>When <b><code>true</code></b>, JSON objects will be returned as associative <code>array</code>s; when <b><code>false</code></b>, JSON objects will be returned as <code>object</code>s.</p>
	 * @param int $depth <p>Maximum nesting depth of the structure being decoded. The value must be greater than <code>0</code>, and less than or equal to <code>2147483647</code>. Callers should use reasonably small values, because larger depths require more buffer space and will increase the recursion depth, unlike the current <code>json_decode()</code> implementation.</p>
	 * @return mixed <p>Returns the value encoded in <code>json</code> in appropriate PHP type. Values <code>true</code>, <code>false</code> and <code>null</code> are returned as <b><code>true</code></b>, <b><code>false</code></b> and <b><code>null</code></b> respectively.</p>
	 * @link https://php.net/manual/en/function.simdjson-decode.php
	 * @see json_encode(), json_decode()
	 * @since PECL simdjson >= 2.0.0
	 */
	function simdjson_decode(string $json, bool $associative = false, int $depth = 512): mixed {}

	/**
	 * Check if a JSON string is valid
	 * <p>Takes a JSON encoded string and returns true if it is valid.</p>
	 * @param string $json <p>The <code>json</code> <code>string</code> being validated.</p> <p>This function only works with UTF-8 encoded strings.</p> <p>This function validates inputs which <code>json_decode()</code> can decode, provided that they are less than 4 GiB long.</p>
	 * @param int $depth <p>Maximum nesting depth of the structure being validated. The value must be greater than <code>0</code>, and less than or equal to <code>2147483647</code>. Callers should use reasonably small values, because larger depths require more buffer space and will increase the recursion depth, unlike the current <code>json_decode()</code> implementation.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>json</code> is a valid JSON string, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.simdjson-is-valid.php
	 * @see json_encode(), json_decode()
	 * @since PECL simdjson >= 2.0.0
	 */
	function simdjson_is_valid(string $json = 'false', int $depth = 512): bool {}

	/**
	 * Returns the value at a JSON pointer.
	 * <p>Count the number of elements of the object/array found at the requested JSON pointer.</p>
	 * @param string $json <p>The <code>json</code> <code>string</code> being queried.</p>
	 * @param string $key <p>The JSON pointer <code>string</code>.</p>
	 * @param int $depth <p>Maximum nesting depth of the structure being validated. The value must be greater than <code>0</code>, and less than or equal to <code>2147483647</code>. Callers should use reasonably small values, because larger depths require more buffer space and will increase the recursion depth, unlike the current <code>json_decode()</code> implementation.</p>
	 * @param bool $throw_if_uncountable <p>When true, a <code>SimdJsonException</code> will be thrown instead of returning 0 when the value the JSON pointer points to is neither an object nor an array.</p>
	 * @return int <p>Returns an <code>int</code> with the number of elements of the value at the given JSON pointer.</p>
	 * @link https://php.net/manual/en/function.simdjson-key-count.php
	 * @since PECL simdjson >= 2.0.0
	 */
	function simdjson_key_count(string $json, string $key, int $depth = 512, bool $throw_if_uncountable = false): int {}

	/**
	 * Check if the JSON contains the value referred to by a JSON pointer.
	 * <p>Count the number of elements of the object/array found at the requested JSON pointer.</p>
	 * @param string $json <p>The <code>json</code> <code>string</code> being queried.</p>
	 * @param string $key <p>The JSON pointer <code>string</code>.</p>
	 * @param int $depth <p>Maximum nesting depth of the structure being validated. The value must be greater than <code>0</code>, and less than or equal to <code>2147483647</code>. Callers should use reasonably small values, because larger depths require more buffer space and will increase the recursion depth, unlike the current <code>json_decode()</code> implementation.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the JSON pointer is valid and refers to a value found within a valid JSON string. Returns <b><code>false</code></b> if the JSON is valid but does not contain the JSON pointer.</p>
	 * @link https://php.net/manual/en/function.simdjson-key-exists.php
	 * @since PECL simdjson >= 2.0.0
	 */
	function simdjson_key_exists(string $json, string $key, int $depth = null): bool {}

	/**
	 * Decodes the value of a JSON string located at the requested JSON pointer.
	 * <p>Decodes and returns the value found at the requested JSON pointer.</p>
	 * @param string $json <p>The <code>json</code> <code>string</code> being queried and decoded.</p> <p>This function only works with UTF-8 encoded strings.</p> <p>This function parses valid inputs which <code>json_decode()</code> can decode, provided that they are less than 4 GiB long.</p>
	 * @param string $key <p>The JSON pointer <code>string</code>.</p>
	 * @param bool $associative <p>When <b><code>true</code></b>, JSON objects will be returned as associative <code>array</code>s; when <b><code>false</code></b>, JSON objects will be returned as <code>object</code>s.</p>
	 * @param int $depth <p>Maximum nesting depth of the structure being decoded. The value must be greater than <code>0</code>, and less than or equal to <code>2147483647</code>. Callers should use reasonably small values, because larger depths require more buffer space and will increase the recursion depth, unlike the current <code>json_decode()</code> implementation.</p>
	 * @return mixed <p>Returns the part of the value encoded in <code>json</code> that <code>key</code> refers to in appropriate PHP type. Values <code>true</code>, <code>false</code> and <code>null</code> are returned as <b><code>true</code></b>, <b><code>false</code></b> and <b><code>null</code></b> respectively.</p>
	 * @link https://php.net/manual/en/function.simdjson-key-value.php
	 * @see json_encode(), simdjson_decode()
	 * @since PECL simdjson >= 2.0.0
	 */
	function simdjson_key_value(string $json, string $key, bool $associative = false, int $depth = 512): mixed {}

	/**
	 * This parser can't support a document that big. Thrown when parsing a JSON string that is over 4GiB long.
	 */
	define('SIMDJSON_ERR_CAPACITY', null);

	/**
	 * The JSON document was too deep (too many nested objects and arrays)
	 */
	define('SIMDJSON_ERR_DEPTH_ERROR', null);

	/**
	 * Empty: no JSON found
	 */
	define('SIMDJSON_ERR_EMPTY', null);

	/**
	 * Problem while parsing an atom starting with the letter 'f'
	 */
	define('SIMDJSON_ERR_F_ATOM_ERROR', null);

	/**
	 * JSON document ended early in the middle of an object or array.
	 */
	define('SIMDJSON_ERR_INCOMPLETE_ARRAY_OR_OBJECT', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_INCORRECT_TYPE', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_INDEX_OUT_OF_BOUNDS', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_INSUFFICIENT_PADDING', null);

	/**
	 * Invalid JSON pointer syntax in <code>simdjson_key_value()</code> and other functions accepting a JSON pointer $key.
	 */
	define('SIMDJSON_ERR_INVALID_JSON_POINTER', null);

	/**
	 * Invalid property name for an <code>stdClass</code> when decoding a value with <code>simdjson_decode()</code> or <code>simdjson_key_value()</code>
	 */
	define('SIMDJSON_ERR_INVALID_PROPERTY', null);

	/**
	 * Invalid URI fragment syntax.
	 */
	define('SIMDJSON_ERR_INVALID_URI_FRAGMENT', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_IO_ERROR', null);

	define('SIMDJSON_ERR_KEY_COUNT_NOT_COUNTABLE', null);

	/**
	 * Problem while parsing an atom starting with the letter 'n'
	 */
	define('SIMDJSON_ERR_N_ATOM_ERROR', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_NO_SUCH_FIELD', null);

	/**
	 * Problem while parsing a number
	 */
	define('SIMDJSON_ERR_NUMBER_ERROR', null);

	/**
	 * The JSON number is too large or too small to fit within the requested type. Note that the C simdjson library is a fork and this error is ignored to match php's handling of JSON numbers that are too large or too small.
	 */
	define('SIMDJSON_ERR_NUMBER_OUT_OF_RANGE', null);

	/**
	 * Attempted to access location outside of document.
	 */
	define('SIMDJSON_ERR_OUT_OF_BOUNDS', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_OUT_OF_ORDER_ITERATION', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_PARSER_IN_USE', null);

	/**
	 * Should not happen.
	 */
	define('SIMDJSON_ERR_SCALAR_DOCUMENT_AS_VALUE', null);

	/**
	 * Problem while parsing a string
	 */
	define('SIMDJSON_ERR_STRING_ERROR', null);

	/**
	 * Problem while parsing an atom starting with the letter 't'
	 */
	define('SIMDJSON_ERR_T_ATOM_ERROR', null);

	/**
	 * The JSON document has an improper structure: missing or superfluous commas, braces, missing keys, etc.
	 */
	define('SIMDJSON_ERR_TAPE_ERROR', null);

	define('SIMDJSON_ERR_TRAILING_CONTENT', null);

	/**
	 * A string is opened, but never closed.
	 */
	define('SIMDJSON_ERR_UNCLOSED_STRING', null);

	/**
	 * Within strings, some characters must be escaped, we found unescaped characters
	 */
	define('SIMDJSON_ERR_UNESCAPED_CHARS', null);

	/**
	 * Unexpected error, consider reporting this problem as you may have found a bug in the simdjson PECL
	 */
	define('SIMDJSON_ERR_UNEXPECTED_ERROR', null);

	/**
	 * The parser used by simdjson is uninitialized. Should not happen.
	 */
	define('SIMDJSON_ERR_UNINITIALIZED', null);

	/**
	 * simdjson does not have an implementation supported by this CPU architecture (perhaps it's a non-SIMD CPU&#63;).
	 */
	define('SIMDJSON_ERR_UNSUPPORTED_ARCHITECTURE', null);

	/**
	 * The input is not valid UTF-8
	 */
	define('SIMDJSON_ERR_UTF8_ERROR', null);

}
