<?php



namespace {

	/**
	 * <p>Represents a connection between PHP and a Stomp compliant Message Broker.</p>
	 * @link http://php.net/manual/en/class.stomp.php
	 * @since PECL stomp >= 0.1.0
	 */
	class Stomp {

		/**
		 * Opens a connection
		 * <p>Opens a connection to a stomp compliant Message Broker.</p>
		 * @param string $broker <p>The broker URI</p>
		 * @param string $username <p>The username.</p>
		 * @param string $password <p>The password.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return self <p><b>Note</b>:</p><p>A transaction header may be specified, indicating that the message acknowledgment should be part of the named transaction.</p>
		 * @link http://php.net/manual/en/stomp.construct.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function __construct(string $broker = 'ini_get("stomp.default_broker_uri")', string $username = NULL, string $password = NULL, array $headers = NULL) {}

		/**
		 * Closes stomp connection
		 * <p>Closes a previously opened connection.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.destruct.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function __destruct() {}

		/**
		 * Rolls back a transaction in progress
		 * <p>Rolls back a transaction in progress.</p>
		 * @param string $transaction_id <p>The transaction to abort.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.abort.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function abort(string $transaction_id, array $headers = NULL): bool {}

		/**
		 * Acknowledges consumption of a message
		 * <p>Acknowledges consumption of a message from a subscription using client acknowledgment.</p>
		 * @param mixed $msg <p>The message/messageId to be acknowledged.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.ack.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function ack($msg, array $headers = NULL): bool {}

		/**
		 * Starts a transaction
		 * <p>Starts a transaction.</p>
		 * @param string $transaction_id <p>The transaction id.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.begin.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function begin(string $transaction_id, array $headers = NULL): bool {}

		/**
		 * Commits a transaction in progress
		 * <p>Commits a transaction in progress.</p>
		 * @param string $transaction_id <p>The transaction id.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.commit.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function commit(string $transaction_id, array $headers = NULL): bool {}

		/**
		 * Gets the last stomp error
		 * <p>Gets the last stomp error.</p>
		 * @return string <p>Returns an error string or <b><code>FALSE</code></b> if no error occurred.</p>
		 * @link http://php.net/manual/en/stomp.error.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function error(): string {}

		/**
		 * Gets read timeout
		 * <p>Gets read timeout</p>
		 * @return array <p>Returns an array with 2 elements: sec and usec.</p>
		 * @link http://php.net/manual/en/stomp.getreadtimeout.php
		 * @since PECL stomp >= 0.3.0
		 */
		public function getReadTimeout(): array {}

		/**
		 * Gets the current stomp session ID
		 * <p>Gets the current stomp session ID.</p>
		 * @return string|false <p><code>string</code> session id on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.getsessionid.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function getSessionId() {}

		/**
		 * Indicates whether or not there is a frame ready to read
		 * <p>Indicates whether or not there is a frame ready to read.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if a frame is ready to read, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/stomp.hasframe.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function hasFrame(): bool {}

		/**
		 * Reads the next frame
		 * <p>Reads the next frame. It is possible to instantiate an object of a specific class, and pass parameters to that class's constructor.</p>
		 * @param string $class_name <p>The name of the class to instantiate. If not specified, a stompFrame object is returned.</p>
		 * @return stompframe <p><b>Note</b>:</p><p>A transaction header may be specified, indicating that the message acknowledgment should be part of the named transaction.</p>
		 * @link http://php.net/manual/en/stomp.readframe.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function readFrame(string $class_name = "stompFrame"): \stompframe {}

		/**
		 * Sends a message
		 * <p>Sends a message to the Message Broker.</p>
		 * @param string $destination <p>Where to send the message</p>
		 * @param mixed $msg <p>Message to send.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.send.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function send(string $destination, $msg, array $headers = NULL): bool {}

		/**
		 * Sets read timeout
		 * <p>Sets read timeout.</p>
		 * @param int $seconds <p>The seconds part of the timeout to be set.</p>
		 * @param int $microseconds <p>The microseconds part of the timeout to be set.</p>
		 * @return void
		 * @link http://php.net/manual/en/stomp.setreadtimeout.php
		 * @since PECL stomp >= 0.3.0
		 */
		public function setReadTimeout(int $seconds, int $microseconds = NULL): void {}

		/**
		 * Registers to listen to a given destination
		 * <p>Registers to listen to a given destination.</p>
		 * @param string $destination <p>Destination to subscribe to.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.subscribe.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function subscribe(string $destination, array $headers = NULL): bool {}

		/**
		 * Removes an existing subscription
		 * <p>Removes an existing subscription.</p>
		 * @param string $destination <p>Subscription to remove.</p>
		 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/stomp.unsubscribe.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function unsubscribe(string $destination, array $headers = NULL): bool {}
	}

	/**
	 * <p>Represents an error raised by the stomp extension. See Exceptions for more information about Exceptions in PHP.</p>
	 * @link http://php.net/manual/en/class.stompexception.php
	 * @since PECL stomp >= 0.1.0
	 */
	class StompException extends \Exception {

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Get exception details
		 * <p>Get exception details.</p>
		 * @return string <p><code>string</code> containing the error details.</p>
		 * @link http://php.net/manual/en/stomp.getdetails.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function getDetails(): string {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a message which was sent or received from a Stomp compliant Message Broker.</p>
	 * @link http://php.net/manual/en/class.stompframe.php
	 * @since PECL stomp >= 0.1.0
	 */
	class StompFrame {

		/**
		 * @var mixed <p>Frame command.</p>
		 * @link http://php.net/manual/en/class.stompframe.php#stompframe.props.command
		 */
		public $command;

		/**
		 * @var mixed <p>Frame headers (<code>array</code>).</p>
		 * @link http://php.net/manual/en/class.stompframe.php#stompframe.props.headers
		 */
		public $headers;

		/**
		 * @var mixed <p>Frame body.</p>
		 * @link http://php.net/manual/en/class.stompframe.php#stompframe.props.body
		 */
		public $body;

		/**
		 * Constructor
		 * <p>Constructor.</p>
		 * @param string $command <p>Frame command</p>
		 * @param array $headers <p>Frame headers (<code>array</code>).</p>
		 * @param string $body <p>Frame body.</p>
		 * @return self
		 * @link http://php.net/manual/en/stompframe.construct.php
		 * @since PECL stomp >= 0.1.0
		 */
		public function __construct(string $command = NULL, array $headers = NULL, string $body = NULL) {}
	}

	/**
	 * Rolls back a transaction in progress
	 * <p>Rolls back a transaction in progress.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param string $transaction_id <p>The transaction to abort.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.abort.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_abort($link, string $transaction_id, array $headers = NULL): bool {}

	/**
	 * Acknowledges consumption of a message
	 * <p>Acknowledges consumption of a message from a subscription using client acknowledgment.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param mixed $msg <p>The message/messageId to be acknowledged.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.ack.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_ack($link, $msg, array $headers = NULL): bool {}

	/**
	 * Starts a transaction
	 * <p>Starts a transaction.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param string $transaction_id <p>The transaction id.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.begin.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_begin($link, string $transaction_id, array $headers = NULL): bool {}

	/**
	 * Closes stomp connection
	 * <p>Closes a previously opened connection.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.destruct.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_close($link): bool {}

	/**
	 * Commits a transaction in progress
	 * <p>Commits a transaction in progress.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param string $transaction_id <p>The transaction id.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.commit.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_commit($link, string $transaction_id, array $headers = NULL): bool {}

	/**
	 * Opens a connection
	 * <p>Opens a connection to a stomp compliant Message Broker.</p>
	 * @param string $broker <p>The broker URI</p>
	 * @param string $username <p>The username.</p>
	 * @param string $password <p>The password.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return resource <p><b>Note</b>:</p><p>A transaction header may be specified, indicating that the message acknowledgment should be part of the named transaction.</p>
	 * @link http://php.net/manual/en/stomp.construct.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_connect(string $broker = 'ini_get("stomp.default_broker_uri")', string $username = NULL, string $password = NULL, array $headers = NULL) {}

	/**
	 * Returns a string description of the last connect error
	 * <p>Returns a string description of the last connect error.</p>
	 * @return string <p>A string that describes the error, or <b><code>NULL</code></b> if no error occurred.</p>
	 * @link http://php.net/manual/en/function.stomp-connect-error.php
	 * @since PECL stomp >= 0.3.0
	 */
	function stomp_connect_error(): string {}

	/**
	 * Gets the last stomp error
	 * <p>Gets the last stomp error.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @return string <p>Returns an error string or <b><code>FALSE</code></b> if no error occurred.</p>
	 * @link http://php.net/manual/en/stomp.error.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_error($link): string {}

	/**
	 * Gets read timeout
	 * <p>Gets read timeout</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @return array <p>Returns an array with 2 elements: sec and usec.</p>
	 * @link http://php.net/manual/en/stomp.getreadtimeout.php
	 * @since PECL stomp >= 0.3.0
	 */
	function stomp_get_read_timeout($link): array {}

	/**
	 * Gets the current stomp session ID
	 * <p>Gets the current stomp session ID.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @return string|false <p><code>string</code> session id on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.getsessionid.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_get_session_id($link) {}

	/**
	 * Indicates whether or not there is a frame ready to read
	 * <p>Indicates whether or not there is a frame ready to read.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if a frame is ready to read, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/stomp.hasframe.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_has_frame($link): bool {}

	/**
	 * Reads the next frame
	 * <p>Reads the next frame. It is possible to instantiate an object of a specific class, and pass parameters to that class's constructor.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @return array <p><b>Note</b>:</p><p>A transaction header may be specified, indicating that the message acknowledgment should be part of the named transaction.</p>
	 * @link http://php.net/manual/en/stomp.readframe.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_read_frame($link): array {}

	/**
	 * Sends a message
	 * <p>Sends a message to the Message Broker.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param string $destination <p>Where to send the message</p>
	 * @param mixed $msg <p>Message to send.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.send.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_send($link, string $destination, $msg, array $headers = NULL): bool {}

	/**
	 * Sets read timeout
	 * <p>Sets read timeout.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param int $seconds <p>The seconds part of the timeout to be set.</p>
	 * @param int $microseconds <p>The microseconds part of the timeout to be set.</p>
	 * @return void
	 * @link http://php.net/manual/en/stomp.setreadtimeout.php
	 * @since PECL stomp >= 0.3.0
	 */
	function stomp_set_read_timeout($link, int $seconds, int $microseconds = NULL): void {}

	/**
	 * Registers to listen to a given destination
	 * <p>Registers to listen to a given destination.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param string $destination <p>Destination to subscribe to.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.subscribe.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_subscribe($link, string $destination, array $headers = NULL): bool {}

	/**
	 * Removes an existing subscription
	 * <p>Removes an existing subscription.</p>
	 * @param resource $link <p>The stomp link identifier returned by <code>stomp_connect()</code>.</p>
	 * @param string $destination <p>Subscription to remove.</p>
	 * @param array $headers <p>Associative array containing the additional headers (example: receipt).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/stomp.unsubscribe.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_unsubscribe($link, string $destination, array $headers = NULL): bool {}

	/**
	 * Gets the current stomp extension version
	 * <p>Returns a string containing the version of the current stomp extension.</p>
	 * @return string <p>It returns the current stomp extension version</p>
	 * @link http://php.net/manual/en/function.stomp-version.php
	 * @since PECL stomp >= 0.1.0
	 */
	function stomp_version(): string {}

}
