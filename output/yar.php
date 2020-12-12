<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.yar-client.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Client {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-client.php#yar-client.props.protocol
		 */
		protected $_protocol;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-client.php#yar-client.props.uri
		 */
		protected $_uri;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-client.php#yar-client.props.options
		 */
		protected $_options;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-client.php#yar-client.props.running
		 */
		protected $_running;

		/**
		 * Call service
		 * <p>Issue a call to remote RPC method.</p>
		 * @param string $method <p>Remote RPC method name.</p>
		 * @param array $parameters <p>Parameters.</p>
		 * @return void
		 * @link https://php.net/manual/en/yar-client.call.php
		 * @since PECL yar >= 1.0.0
		 */
		public function __call(string $method, array $parameters): void {}

		/**
		 * Create a client
		 * <p>Create a Yar_Client to a Yar_Server.</p>
		 * @param string $url <p>Yar Server URL.</p>
		 * @param array $options
		 * @return self <p>Yar_Client instance.</p>
		 * @link https://php.net/manual/en/yar-client.construct.php
		 * @since PECL yar >= 1.0.0
		 */
		final public function __construct(string $url, array $options = NULL) {}

		/**
		 * Set calling contexts
		 * @param int $name <p>it can be: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (Need server support), YAR_OPT_TIMEOUT, YAR_OPT_CONNECT_TIMEOUT YAR_OPT_HEADER (Since 2.0.4)</p>
		 * @param mixed $value
		 * @return Yar_Client|false <p>Returns $this on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/yar-client.setopt.php
		 * @since PECL yar >= 1.0.0
		 */
		public function setOpt(int $name, $value) {}
	}

	/**
	 * @link https://php.net/manual/en/class.yar-client-exception.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Client_Exception extends \Exception {

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

		/**
		 * Retrieve exception's type
		 * @return string <p>Returns <code>"Yar_Exception_Client"</code>.</p>
		 * @link https://php.net/manual/en/yar-client-exception.gettype.php
		 * @since PECL yar >= 1.0.0
		 */
		public function getType(): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.yar-concurrent-client.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Concurrent_Client {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-concurrent-client.php#yar-concurrent-client.props.callstack
		 */
		static $_callstack;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-concurrent-client.php#yar-concurrent-client.props.callback
		 */
		static $_callback;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-concurrent-client.php#yar-concurrent-client.props.error-callback
		 */
		static $_error_callback;

		/**
		 * Register a concurrent call
		 * <p>Register a RPC call, but won't sent it immediately, it will be send while further call to <code>Yar_Concurrent_Client::loop()</code></p>
		 * @param string $uri <p>The RPC server URI(http, tcp)</p>
		 * @param string $method <p>Service name(aka the method name)</p>
		 * @param array $parameters <p>Parameters</p>
		 * @param callable $callback <p>A function callback, which will be called while the response return.</p>
		 * @param callable $error_callback
		 * @param array $options
		 * @return int <p>An unique id, can be used to identified which call it is.</p>
		 * @link https://php.net/manual/en/yar-concurrent-client.call.php
		 * @since PECL yar >= 1.0.0
		 */
		public static function call(string $uri, string $method, array $parameters = NULL, callable $callback = NULL, callable $error_callback = NULL, array $options = NULL): int {}

		/**
		 * Send all calls
		 * <p>Send all registed remote RPC calls.</p>
		 * @param callable $callback <p>If this callback is set, then Yar will call this callback after all calls are sent and before any response return, with a $callinfo NULL.</p> <p>Then, if user didn't specify callback when registering concurrent call, this callback will be used to handle response, otherwise, the callback specified while registering will be used.</p>
		 * @param callable $error_callback <p>If this callback is set, then Yar will call this callback while error occurred.</p>
		 * @return bool
		 * @link https://php.net/manual/en/yar-concurrent-client.loop.php
		 * @since PECL yar >= 1.0.0
		 */
		public static function loop(callable $callback = NULL, callable $error_callback = NULL): bool {}

		/**
		 * Clean all registered calls
		 * <p>Clean all registered calls</p>
		 * @return bool
		 * @link https://php.net/manual/en/yar-concurrent-client.reset.php
		 * @since PECL yar >= 1.2.4
		 */
		public static function reset(): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.yar-server.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Server {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-server.php#yar-server.props.executor
		 */
		protected $_executor;

		/**
		 * Register a server
		 * <p>Set up a Yar HTTP RPC Server, All the public methods of $obj will be register as a RPC service.</p>
		 * @param Object $obj <p>An Object, all public methods of its will be registered as RPC services.</p>
		 * @return self <p>An instance of Yar_Server.</p>
		 * @link https://php.net/manual/en/yar-server.construct.php
		 * @since PECL yar >= 1.0.0
		 */
		final public function __construct(Object $obj) {}

		/**
		 * Start RPC Server
		 * <p>Start a RPC HTTP server, and ready for accpet RPC requests.</p><p><b>Note</b>:</p><p>Usual RPC calls will be issued as HTTP POST requests. If a HTTP GET request is issued to the uri, the service information (commented section above) will be printed on the page</p>
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/en/yar-server.handle.php
		 * @since PECL yar >= 1.0.0
		 */
		public function handle(): bool {}
	}

	/**
	 * <p>If service threw exceptions, A Yar_Server_Exception will be threw in client side.</p>
	 * @link https://php.net/manual/en/class.yar-server-exception.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Server_Exception extends \Exception {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.yar-server-exception.php#yar-server-exception.props.type
		 */
		protected $_type;

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

		/**
		 * Retrieve exception's type
		 * <p>Get the exception original type threw by server</p>
		 * @return string <p>string</p>
		 * @link https://php.net/manual/en/yar-server-exception.gettype.php
		 * @since PECL yar >= 1.0.0
		 */
		public function getType(): string {}
	}

	define('YAR_CLIENT_PROTOCOL_HTTP', null);

	define('YAR_ERR_EXCEPTION', null);

	define('YAR_ERR_OKEY', null);

	define('YAR_ERR_OUTPUT', null);

	define('YAR_ERR_PACKAGER', null);

	define('YAR_ERR_PROTOCOL', null);

	define('YAR_ERR_REQUEST', null);

	define('YAR_ERR_TRANSPORT', null);

	define('YAR_OPT_CONNECT_TIMEOUT', null);

	/**
	 * Since 2.0.4
	 */
	define('YAR_OPT_HEADER', null);

	define('YAR_OPT_PACKAGER', null);

	define('YAR_OPT_TIMEOUT', null);

	define('YAR_PACKAGER_JSON', null);

	define('YAR_PACKAGER_PHP', null);

	define('YAR_VERSION', null);

}
