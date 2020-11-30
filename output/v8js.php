<?php



namespace {

	/**
	 * <p>This is the core class for V8Js extension. Each instance created from this class has own context in which all JavaScript is compiled and executed.</p>
	 * <p>See <code>V8Js::__construct()</code> for more information.</p>
	 * @link http://php.net/manual/en/class.v8js.php
	 * @since PECL v8js >= 0.1.0
	 */
	class V8Js {

		/**
		 * @var string <p>The V8 Javascript Engine version.</p>
		 * @link http://php.net/manual/en/class.v8js.php
		 */
		const V8_VERSION = null;

		/**
		 * @var integer <p>No flags.</p>
		 * @link http://php.net/manual/en/class.v8js.php
		 */
		const FLAG_NONE = 1;

		/**
		 * @var integer <p>Forces all JS objects to be associative arrays in PHP.</p>
		 * @link http://php.net/manual/en/class.v8js.php
		 */
		const FLAG_FORCE_ARRAY = 2;

		/**
		 * Construct a new V8Js object
		 * <p>Constructs a new V8Js object.</p>
		 * @param string $object_name <p>The name of the object passed to Javascript.</p>
		 * @param array $variables <p>Map of PHP variables that will be available in Javascript. Must be an associative <code>array</code> in format <i>array("name-for-js" =&gt; "name-of-php-variable")</i>. Defaults to empty array.</p>
		 * @param array $extensions <p>List of extensions registered using <code>V8Js::registerExtension()</code> which should be available in the Javascript context of the created V8Js object.</p><p><b>Note</b>:</p><p>Extensions registered to be enabled automatically do not need to be listed in this array. Also if an extension has dependencies, those dependencies can be omitted as well. Defaults to empty array.</p>
		 * @param bool $report_uncaught_exceptions <p>Controls whether uncaught Javascript exceptions are reported immediately or not. Defaults to <b><code>TRUE</code></b>. If set to <b><code>FALSE</code></b> the uncaught exception can be accessed using <code>V8Js::getPendingException()</code>.</p>
		 * @return self <p>Returns a new V8Js context object.</p>
		 * @link http://php.net/manual/en/v8js.construct.php
		 * @since PECL v8js >= 0.1.0
		 */
		public function __construct(string $object_name = "PHP", array $variables = array(), array $extensions = array(), bool $report_uncaught_exceptions = TRUE) {}

		/**
		 * Execute a string as Javascript code
		 * <p>Compiles and executes the string passed with <code>script</code> as Javascript code.</p>
		 * @param string $script <p>The code string to be executed.</p>
		 * @param string $identifier <p>Identifier string for the executed code. Used for debugging.</p>
		 * @param int $flags <p>Execution flags. This value must be one of the <i>V8Js::FLAG_&#42;</i> constants, defaulting to <b><code>V8Js::FLAG_NONE</code></b>.</p><ul> <li> <p><b><code>V8Js::FLAG_NONE</code></b>: no flags</p> </li> <li> <p><b><code>V8Js::FLAG_FORCE_ARRAY</code></b>: forces all Javascript objects passed to PHP to be associative arrays</p> </li> </ul>
		 * @return mixed <p>Returns the last variable instantiated in the Javascript code converted to matching PHP variable type.</p>
		 * @link http://php.net/manual/en/v8js.executestring.php
		 * @since PECL v8js >= 0.1.0
		 */
		public function executeString(string $script, string $identifier = "V8Js::executeString()", int $flags = V8Js::FLAG_NONE) {}

		/**
		 * Return an array of registered extensions
		 * <p>This function returns array of Javascript extensions registered using <code>V8Js::registerExtension()</code>.</p>
		 * @return array <p>Returns an array of registered extensions or an empty array if there are none.</p>
		 * @link http://php.net/manual/en/v8js.getextensions.php
		 * @since PECL v8js >= 0.1.0
		 */
		public static function getExtensions(): array {}

		/**
		 * Return pending uncaught Javascript exception
		 * <p>Returns any pending uncaught Javascript exception as V8JsException left from earlier <code>V8Js::executeString()</code> call(s).</p>
		 * @return V8JsException <p>Either V8JsException or <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/v8js.getpendingexception.php
		 * @since PECL v8js >= 0.1.0
		 */
		public function getPendingException(): \V8JsException {}

		/**
		 * Register Javascript extensions for V8Js
		 * <p>Registers passed Javascript <code>script</code> as extension to be used in V8Js contexts.</p>
		 * @param string $extension_name <p>Name of the extension to be registered.</p>
		 * @param string $script <p>The Javascript code to be registered.</p>
		 * @param array $dependencies <p>Array of extension names the extension to be registered depends on. Any such extension is enabled automatically when this extension is loaded.</p><p><b>Note</b>:</p><p>All extensions, including the dependencies, must be registered before any V8Js are created which use them.</p>
		 * @param bool $auto_enable <p>If set to <b><code>TRUE</code></b>, the extension will be enabled automatically in all V8Js contexts.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if extension was registered successfully, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/v8js.registerextension.php
		 * @since PECL v8js >= 0.1.0
		 */
		public static function registerExtension(string $extension_name, string $script, array $dependencies = array(), bool $auto_enable = FALSE): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.v8jsexception.php
	 * @since PECL v8js >= 0.1.0
	 */
	class V8JsException extends \Exception {

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.v8jsexception.php#v8jsexception.props.jsfilename
		 */
		protected $JsFileName;

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.v8jsexception.php#v8jsexception.props.jslinenumber
		 */
		protected $JsLineNumber;

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.v8jsexception.php#v8jsexception.props.jssourceline
		 */
		protected $JsSourceLine;

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.v8jsexception.php#v8jsexception.props.jstrace
		 */
		protected $JsTrace;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * The getJsFileName purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/v8jsexception.getjsfilename.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsFileName(): string {}

		/**
		 * The getJsLineNumber purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link http://php.net/manual/en/v8jsexception.getjslinenumber.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsLineNumber(): int {}

		/**
		 * The getJsSourceLine purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/v8jsexception.getjssourceline.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsSourceLine(): string {}

		/**
		 * The getJsTrace purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/v8jsexception.getjstrace.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsTrace(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

}
