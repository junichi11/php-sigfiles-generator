<?php



namespace {

	/**
	 * <p>Exception thrown if <b><code>JSON_THROW_ON_ERROR</code></b> option is set for <code>json_encode()</code> or <code>json_decode()</code>. code contains the error type, for possible values see <code>json_last_error()</code>.</p>
	 * @link https://php.net/manual/en/class.jsonexception.php
	 * @since PHP 7 >= 7.3.0
	 */
	class JsonException extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Objects implementing <b>JsonSerializable</b> can customize their JSON representation when encoded with <code>json_encode()</code>.</p>
	 * @link https://php.net/manual/en/class.jsonserializable.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	interface JsonSerializable {

		/**
		 * Specify data which should be serialized to JSON
		 * <p>Serializes the object to a value that can be serialized natively by <code>json_encode()</code>.</p>
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code>, which is a value of any type other than a resource.</p>
		 * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function jsonSerialize();
	}

	/**
	 * Decodes a JSON string
	 * <p>Takes a JSON encoded string and converts it into a PHP variable.</p>
	 * @param string $json <p>The <code>json</code> <code>string</code> being decoded.</p> <p>This function only works with UTF-8 encoded strings.</p> <p><b>Note</b>:</p><p>PHP implements a superset of JSON as specified in the original RFC 7159.</p>
	 * @param bool|null $associative <p>When <b><code>TRUE</code></b>, JSON objects will be returned as associative <code>array</code>s; when <b><code>FALSE</code></b>, JSON objects will be returned as <code>object</code>s. When <b><code>NULL</code></b>, JSON objects will be returned as associative <code>array</code>s or <code>object</code>s depending on whether <b><code>JSON_OBJECT_AS_ARRAY</code></b> is set in the <code>flags</code>.</p>
	 * @param int $depth <p>User specified recursion depth.</p>
	 * @param int $flags <p>Bitmask of <b><code>JSON_BIGINT_AS_STRING</code></b>, <b><code>JSON_INVALID_UTF8_IGNORE</code></b>, <b><code>JSON_INVALID_UTF8_SUBSTITUTE</code></b>, <b><code>JSON_OBJECT_AS_ARRAY</code></b>, <b><code>JSON_THROW_ON_ERROR</code></b>. The behaviour of these constants is described on the JSON constants page.</p>
	 * @return mixed <p>Returns the value encoded in <code>json</code> in appropriate PHP type. Values <code>true</code>, <code>false</code> and <code>null</code> are returned as <b><code>TRUE</code></b>, <b><code>FALSE</code></b> and <b><code>NULL</code></b> respectively. <b><code>NULL</code></b> is returned if the <code>json</code> cannot be decoded or if the encoded data is deeper than the recursion limit.</p>
	 * @link https://php.net/manual/en/function.json-decode.php
	 * @see json_encode(), json_last_error()
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL json >= 1.2.0
	 */
	function json_decode(string $json, $associative = NULL, int $depth = 512, int $flags = 0) {}

	/**
	 * Returns the JSON representation of a value
	 * <p>Returns a string containing the JSON representation of the supplied <code>value</code>.</p><p>The encoding is affected by the supplied <code>flags</code> and additionally the encoding of float values depends on the value of serialize_precision.</p>
	 * @param mixed $value <p>The <code>value</code> being encoded. Can be any type except a resource.</p> <p>All string data must be UTF-8 encoded.</p> <p><b>Note</b>:</p><p>PHP implements a superset of JSON as specified in the original RFC 7159.</p>
	 * @param int $flags <p>Bitmask consisting of <b><code>JSON_FORCE_OBJECT</code></b>, <b><code>JSON_HEX_QUOT</code></b>, <b><code>JSON_HEX_TAG</code></b>, <b><code>JSON_HEX_AMP</code></b>, <b><code>JSON_HEX_APOS</code></b>, <b><code>JSON_INVALID_UTF8_IGNORE</code></b>, <b><code>JSON_INVALID_UTF8_SUBSTITUTE</code></b>, <b><code>JSON_NUMERIC_CHECK</code></b>, <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b>, <b><code>JSON_PRESERVE_ZERO_FRACTION</code></b>, <b><code>JSON_PRETTY_PRINT</code></b>, <b><code>JSON_UNESCAPED_LINE_TERMINATORS</code></b>, <b><code>JSON_UNESCAPED_SLASHES</code></b>, <b><code>JSON_UNESCAPED_UNICODE</code></b>, <b><code>JSON_THROW_ON_ERROR</code></b>. The behaviour of these constants is described on the JSON constants page.</p>
	 * @param int $depth <p>Set the maximum depth. Must be greater than zero.</p>
	 * @return string|false <p>Returns a JSON encoded <code>string</code> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.json-encode.php
	 * @see json_decode(), json_last_error(), serialize()
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL json >= 1.2.0
	 */
	function json_encode($value, int $flags = 0, int $depth = 512) {}

	/**
	 * Returns the last error occurred
	 * <p>Returns the last error (if any) occurred during the last JSON encoding/decoding, which did not specify <b><code>JSON_THROW_ON_ERROR</code></b>.</p>
	 * @return int <p>Returns an integer, the value can be one of the following constants:</p> <b>JSON error codes</b>   Constant Meaning Availability     <b><code>JSON_ERROR_NONE</code></b> No error has occurred &nbsp;   <b><code>JSON_ERROR_DEPTH</code></b> The maximum stack depth has been exceeded &nbsp;   <b><code>JSON_ERROR_STATE_MISMATCH</code></b> Invalid or malformed JSON &nbsp;   <b><code>JSON_ERROR_CTRL_CHAR</code></b> Control character error, possibly incorrectly encoded &nbsp;   <b><code>JSON_ERROR_SYNTAX</code></b> Syntax error &nbsp;   <b><code>JSON_ERROR_UTF8</code></b> Malformed UTF-8 characters, possibly incorrectly encoded PHP 5.3.3   <b><code>JSON_ERROR_RECURSION</code></b> One or more recursive references in the value to be encoded PHP 5.5.0   <b><code>JSON_ERROR_INF_OR_NAN</code></b>  One or more <b><code>NAN</code></b> or <b><code>INF</code></b> values in the value to be encoded  PHP 5.5.0   <b><code>JSON_ERROR_UNSUPPORTED_TYPE</code></b> A value of a type that cannot be encoded was given PHP 5.5.0   <b><code>JSON_ERROR_INVALID_PROPERTY_NAME</code></b> A property name that cannot be encoded was given PHP 7.0.0   <b><code>JSON_ERROR_UTF16</code></b> Malformed UTF-16 characters, possibly incorrectly encoded PHP 7.0.0
	 * @link https://php.net/manual/en/function.json-last-error.php
	 * @see json_last_error_msg(), json_decode(), json_encode()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function json_last_error(): int {}

	/**
	 * Returns the error string of the last json_encode() or json_decode() call
	 * <p>Returns the error string of the last <code>json_encode()</code> or <code>json_decode()</code> call, which did not specify <b><code>JSON_THROW_ON_ERROR</code></b>.</p>
	 * @return string <p>Returns the error message on success, or <code>"No error"</code> if no error has occurred.</p>
	 * @link https://php.net/manual/en/function.json-last-error-msg.php
	 * @see json_last_error()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function json_last_error_msg(): string {}

	/**
	 * Decodes large integers as their original string value. Available as of PHP 5.4.0.
	 */
	define('JSON_BIGINT_AS_STRING', 2);

	/**
	 * Control character error, possibly incorrectly encoded. Available as of PHP 5.3.0.
	 */
	define('JSON_ERROR_CTRL_CHAR', 3);

	/**
	 * The maximum stack depth has been exceeded. Available as of PHP 5.3.0.
	 */
	define('JSON_ERROR_DEPTH', 1);

	/**
	 * The value passed to <code>json_encode()</code> includes either <b><code>NAN</code></b> or <b><code>INF</code></b>. If the <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> option was given, <code>0</code> will be encoded in the place of these special numbers. Available as of PHP 5.5.0.
	 */
	define('JSON_ERROR_INF_OR_NAN', 7);

	/**
	 * A key starting with \u0000 character was in the string passed to <code>json_decode()</code> when decoding a JSON object into a PHP object. Available as of PHP 7.0.0.
	 */
	define('JSON_ERROR_INVALID_PROPERTY_NAME', 9);

	/**
	 * No error has occurred. Available as of PHP 5.3.0.
	 */
	define('JSON_ERROR_NONE', 0);

	/**
	 * The object or array passed to <code>json_encode()</code> include recursive references and cannot be encoded. If the <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> option was given, <b><code>NULL</code></b> will be encoded in the place of the recursive reference. Available as of PHP 5.5.0.
	 */
	define('JSON_ERROR_RECURSION', 6);

	/**
	 * Occurs with underflow or with the modes mismatch. Available as of PHP 5.3.0.
	 */
	define('JSON_ERROR_STATE_MISMATCH', 2);

	/**
	 * Syntax error. Available as of PHP 5.3.0.
	 */
	define('JSON_ERROR_SYNTAX', 4);

	/**
	 * A value of an unsupported type was given to <code>json_encode()</code>, such as a resource. If the <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> option was given, <b><code>NULL</code></b> will be encoded in the place of the unsupported value. Available as of PHP 5.5.0.
	 */
	define('JSON_ERROR_UNSUPPORTED_TYPE', 8);

	/**
	 * Single unpaired UTF-16 surrogate in unicode escape contained in the JSON string passed to <code>json_decode()</code>. Available as of PHP 7.0.0.
	 */
	define('JSON_ERROR_UTF16', 10);

	/**
	 * Malformed UTF-8 characters, possibly incorrectly encoded. Available as of PHP 5.3.3.
	 */
	define('JSON_ERROR_UTF8', 5);

	/**
	 * Outputs an object rather than an array when a non-associative array is used. Especially useful when the recipient of the output is expecting an object and the array is empty. Available as of PHP 5.3.0.
	 */
	define('JSON_FORCE_OBJECT', 16);

	/**
	 * All &amp; are converted to \u0026. Available as of PHP 5.3.0.
	 */
	define('JSON_HEX_AMP', 2);

	/**
	 * All ' are converted to \u0027. Available as of PHP 5.3.0.
	 */
	define('JSON_HEX_APOS', 4);

	/**
	 * All " are converted to \u0022. Available as of PHP 5.3.0.
	 */
	define('JSON_HEX_QUOT', 8);

	/**
	 * All &lt; and &gt; are converted to \u003C and \u003E. Available as of PHP 5.3.0.
	 */
	define('JSON_HEX_TAG', 1);

	/**
	 * Ignore invalid UTF-8 characters. Available as of PHP 7.2.0.
	 */
	define('JSON_INVALID_UTF8_IGNORE', 1048576);

	/**
	 * Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER') Available as of PHP 7.2.0.
	 */
	define('JSON_INVALID_UTF8_SUBSTITUTE', 2097152);

	/**
	 * Encodes numeric strings as numbers. Available as of PHP 5.3.3.
	 */
	define('JSON_NUMERIC_CHECK', 32);

	/**
	 * Decodes JSON objects as PHP array. This option can be added automatically by calling <code>json_decode()</code> with the second parameter equal to <b><code>TRUE</code></b>. Available as of PHP 5.4.0.
	 */
	define('JSON_OBJECT_AS_ARRAY', 1);

	/**
	 * Substitute some unencodable values instead of failing. Available as of PHP 5.5.0.
	 */
	define('JSON_PARTIAL_OUTPUT_ON_ERROR', 512);

	/**
	 * Ensures that <code>float</code> values are always encoded as a float value. Available as of PHP 5.6.6.
	 */
	define('JSON_PRESERVE_ZERO_FRACTION', 1024);

	/**
	 * Use whitespace in returned data to format it. Available as of PHP 5.4.0.
	 */
	define('JSON_PRETTY_PRINT', 128);

	/**
	 * Throws JsonException if an error occurs instead of setting the global error state that is retrieved with <code>json_last_error()</code> and <code>json_last_error_msg()</code>. <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> takes precedence over <b><code>JSON_THROW_ON_ERROR</code></b>. Available as of PHP 7.3.0.
	 */
	define('JSON_THROW_ON_ERROR', 4194304);

	/**
	 * The line terminators are kept unescaped when <b><code>JSON_UNESCAPED_UNICODE</code></b> is supplied. It uses the same behaviour as it was before PHP 7.1 without this constant. Available as of PHP 7.1.0.
	 */
	define('JSON_UNESCAPED_LINE_TERMINATORS', 2048);

	/**
	 * Don't escape <code>/</code>. Available as of PHP 5.4.0.
	 */
	define('JSON_UNESCAPED_SLASHES', 64);

	/**
	 * Encode multibyte Unicode characters literally (default is to escape as \uXXXX). Available as of PHP 5.4.0.
	 */
	define('JSON_UNESCAPED_UNICODE', 256);

}
