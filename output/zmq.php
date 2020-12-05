<?php



namespace {

	/**
	 * @link http://php.net/manual/en/class.zmq.php
	 * @since No version information available, might only be in Git
	 */
	class ZMQ {

		/**
		 * @var int <p>Exclusive pair pattern</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_PAIR = null;

		/**
		 * @var int <p>Publisher socket</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_PUB = null;

		/**
		 * @var int <p>Subscriber socket</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_SUB = null;

		/**
		 * @var int <p>Request socket</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_REQ = null;

		/**
		 * @var int <p>Reply socket</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_REP = null;

		/**
		 * @var int <p>Alias for SOCKET_DEALER</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_XREQ = null;

		/**
		 * @var int <p>Alias for SOCKET_ROUTER</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_XREP = null;

		/**
		 * @var int <p>Pipeline upstream push socket</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_PUSH = null;

		/**
		 * @var int <p>Pipeline downstream pull socket</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_PULL = null;

		/**
		 * @var int <p>Extended REP socket that can route replies to requesters</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_ROUTER = null;

		/**
		 * @var int <p>Extended REQ socket that load balances to all connected peers</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_DEALER = null;

		/**
		 * @var int <p>Similar to SOCKET_PUB, except you can receive subscriptions as messages. The subscription message is 0 (unsubscribe) or 1 (subscribe) followed by the topic.</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_XPUB = null;

		/**
		 * @var int <p>Similar to SOCKET_SUB, except you can send subscriptions as messages. See SOCKET_XPUB for format.</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_XSUB = null;

		/**
		 * @var int <p>Used to send and receive TCP data from a non-&Oslash;MQ peer. Available if compiled against ZeroMQ 4.x or higher (Value: <code>int</code>).</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKET_STREAM = null;

		/**
		 * @var int <p>The high water mark for inbound and outbound messages is a hard limit on the maximum number of outstanding messages &Oslash;MQ shall queue in memory for any single peer that the specified socket is communicating with. Setting this option on a socket will only affect connections made after the option has been set. On ZeroMQ 3.x this is a wrapper for setting both SNDHWM and RCVHWM. (Value: <code>int</code>).</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_HWM = null;

		/**
		 * @var int <p>The ZMQ_SNDHWM option shall set the high water mark for outbound messages on the specified socket. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>).</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_SNDHWM = null;

		/**
		 * @var int <p>The SOCKOPT_RCVHWM option shall set the high water mark for inbound messages on the specified socket. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>).</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RCVHWM = null;

		/**
		 * @var int <p>Set I/O thread affinity (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_AFFINITY = null;

		/**
		 * @var int <p>Set socket identity (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_IDENTITY = null;

		/**
		 * @var int <p>Establish message filter. Valid for subscriber socket (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_SUBSCRIBE = null;

		/**
		 * @var int <p>Remove message filter. Valid for subscriber socket (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_UNSUBSCRIBE = null;

		/**
		 * @var int <p>Set rate for multicast sockets (pgm) (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RATE = null;

		/**
		 * @var int <p>Set multicast recovery interval (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RECOVERY_IVL = null;

		/**
		 * @var int <p>Set the initial reconnection interval (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RECONNECT_IVL = null;

		/**
		 * @var int <p>Set the max reconnection interval (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RECONNECT_IVL_MAX = null;

		/**
		 * @var int <p>Control multicast loopback (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_MCAST_LOOP = null;

		/**
		 * @var int <p>Set kernel transmit buffer size (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_SNDBUF = null;

		/**
		 * @var int <p>Set kernel receive buffer size (Value: <code>int</code> &gt;= 0)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RCVBUF = null;

		/**
		 * @var int <p>Receive multi-part messages (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RCVMORE = null;

		/**
		 * @var int <p>Get the socket type. Valid for getSockOpt (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_TYPE = null;

		/**
		 * @var int <p>The linger value of the socket. Specifies how long the socket blocks trying flush messages after it has been closed (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_LINGER = null;

		/**
		 * @var int <p>The SOCKOPT_BACKLOG option shall set the maximum length of the queue of outstanding peer connections for the specified socket; this only applies to connection-oriented transports. (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_BACKLOG = null;

		/**
		 * @var int <p>Limits the maximum size of the inbound message. Value -1 means no limit. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_MAXMSGSIZE = null;

		/**
		 * @var int <p>Sets the timeout for send operation on the socket. Value -1 means no limit. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_SNDTIMEO = null;

		/**
		 * @var int <p>Sets the timeout for receive operation on the socket. Value -1 means no limit. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_RCVTIMEO = null;

		/**
		 * @var int <p>Disable IPV6 support if 1. Available if compiled against ZeroMQ 3.x (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_IPV4ONLY = null;

		/**
		 * @var int <p>Retrieve the last connected endpoint - for use with &#42; wildcard ports. Available if compiled against ZeroMQ 3.x or higher (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_LAST_ENDPOINT = null;

		/**
		 * @var int <p>Idle time for TCP keepalive. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_TCP_KEEPALIVE_IDLE = null;

		/**
		 * @var int <p>Count time for TCP keepalive. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_TCP_KEEPALIVE_CNT = null;

		/**
		 * @var int <p>Interval for TCP keepalive. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_TCP_KEEPALIVE_INTVL = null;

		/**
		 * @var int <p>Set a CIDR string to match against incoming TCP connections. Available if compiled against ZeroMQ 3.x or higher (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_TCP_ACCEPT_FILTER = null;

		/**
		 * @var int <p>Set a CIDR string to match against incoming TCP connections. Available if compiled against ZeroMQ 3.x or higher (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_DELAY_ATTACH_ON_CONNECT = null;

		/**
		 * @var int <p>Set the XPUB to receive an application message on each instance of a subscription. Available if compiled against ZeroMQ 3.x or higher (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_XPUB_VERBOSE = null;

		/**
		 * @var int <p>Sets the raw mode on the ROUTER, when set to 1. In raw mode when using tcp:// transport the socket will read and write without ZeroMQ framing. Available if compiled against ZeroMQ 4.0 or higher (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_ROUTER_RAW = null;

		/**
		 * @var int <p>Enable IPV6. Available if compiled against ZeroMQ 4.0 or higher (Value: <code>string</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const SOCKOPT_IPV6 = null;

		/**
		 * @var int <p>The socket limit for this context. Available if compiled against ZeroMQ 3.x or higher (Value: <code>int</code>)</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const CTXOPT_MAX_SOCKETS = null;

		/**
		 * @var int <p>Poll for incoming data</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const POLL_IN = null;

		/**
		 * @var int <p>Poll for outgoing data</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const POLL_OUT = null;

		/**
		 * @var int <p>Non-blocking operation. Deprecated, use ZMQ::MODE_DONTWAIT instead</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const MODE_NOBLOCK = null;

		/**
		 * @var int <p>Non-blocking operation</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const MODE_DONTWAIT = null;

		/**
		 * @var int <p>Send multi-part message</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const MODE_SNDMORE = null;

		/**
		 * @var int <p>ZMQ extension internal error</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const ERR_INTERNAL = null;

		/**
		 * @var int <p>Implies that the operation would block when ZMQ::MODE_DONTWAIT is used</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const ERR_EAGAIN = null;

		/**
		 * @var int <p>The operation is not supported by the socket type</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const ERR_ENOTSUP = null;

		/**
		 * @var int <p>The operation can not be executed because the socket is not in correct state</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const ERR_EFSM = null;

		/**
		 * @var int <p>The context has been terminated</p>
		 * @link http://php.net/manual/en/class.zmq.php
		 */
		const ERR_ETERM = null;

		/**
		 * ZMQ constructor
		 * <p>Private constructor to prevent direct initialization. This class holds the constants for ZMQ extension.</p>
		 * @return self
		 * @link http://php.net/manual/en/zmq.construct.php
		 * @since PECL zmq >= 0.5.0
		 */
		private function __construct() {}
	}

	/**
	 * @link http://php.net/manual/en/class.zmqcontext.php
	 * @since No version information available, might only be in Git
	 */
	class ZMQContext {

		/**
		 * Construct a new ZMQContext object
		 * <p>Constructs a new ZMQ context. The context is used to initialize sockets. A persistent context is required to initialize persistent sockets.</p>
		 * @param int $io_threads <p>Number of io-threads in the context.</p>
		 * @param bool $is_persistent <p>Whether the context is persistent. Persistent context is stored over multiple requests and is a requirement for persistent sockets.</p>
		 * @return self <p>Throws ZMQContextException if context initialization fails.</p>
		 * @link http://php.net/manual/en/zmqcontext.construct.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function __construct(int $io_threads = 1, bool $is_persistent = TRUE) {}

		/**
		 * Get context option
		 * <p>Returns the value of a context option.</p>
		 * @param string $key <p>An integer representing the option. See the <b><code>ZMQ::CTXOPT_&#42;</code></b> constants.</p>
		 * @return mixed <p>Returns either a <code>string</code> or an <code>int</code> depending on <code>key</code>. Throws ZMQContextException on error.</p>
		 * @link http://php.net/manual/en/zmqcontext.getopt.php
		 * @since PECL zmq >= 1.0.4
		 */
		public function getOpt(string $key) {}

		/**
		 * Create a new socket
		 * <p>Shortcut for creating new sockets from the context. If the context is not persistent the <code>persistent_id</code> parameter is ignored and the socket falls back to being non-persistent. The <code>on_new_socket</code> is called only when a new underlying socket structure is created.</p>
		 * @param int $type <p><b><code>ZMQ::SOCKET_&#42;</code></b> constant to specify socket type.</p>
		 * @param string $persistent_id <p>If <code>persistent_id</code> is specified the socket will be persisted over multiple requests.</p>
		 * @param callable $on_new_socket <p>Callback function, which is executed when a new socket structure is created. This function does not get invoked if the underlying persistent connection is re-used. The callback takes ZMQSocket and persistent_id as two arguments.</p>
		 * @return ZMQSocket <p>Returns a ZMQSocket object on success. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqcontext.getsocket.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function getSocket(int $type, string $persistent_id = NULL, callable $on_new_socket = NULL): \ZMQSocket {}

		/**
		 * Whether the context is persistent
		 * <p>Whether the context is persistent. Persistent context is needed for persistent connections as each socket is allocated from a context.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the context is persistent and <b><code>FALSE</code></b> if the context is non-persistent.</p>
		 * @link http://php.net/manual/en/zmqcontext.ispersistent.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function isPersistent(): bool {}

		/**
		 * Set a socket option
		 * <p>Sets a ZMQ context option. The type of the <code>value</code> depends on the <code>key</code>. See ZMQ Constant Types for more information.</p>
		 * @param int $key <p>One of the <b><code>ZMQ::CTXOPT_&#42;</code></b> constants.</p>
		 * @param mixed $value <p>The value of the parameter.</p>
		 * @return ZMQContext <p>Returns the current object. Throws ZMQContextException on error.</p>
		 * @link http://php.net/manual/en/zmqcontext.setopt.php
		 * @since PECL zmq >= 1.0.4
		 */
		public function setOpt(int $key, $value): \ZMQContext {}
	}

	/**
	 * @link http://php.net/manual/en/class.zmqdevice.php
	 * @since No version information available, might only be in Git
	 */
	class ZMQDevice {

		/**
		 * Construct a new device
		 * <p>"&Oslash;MQ devices can do intermediation of addresses, services, queues, or any other abstraction you care to define above the message and socket layers." -- zguide</p>
		 * @param \ZMQSocket $frontend <p>Frontend parameter for the devices. Usually where there messages are coming.</p>
		 * @param \ZMQSocket $backend <p>Backend parameter for the devices. Usually where there messages going to.</p>
		 * @param \ZMQSocket $listener <p>Listener socket, which receives a copy of all messages going both directions. The type of this socket should be SUB, PULL or DEALER.</p>
		 * @return self <p>Call to this method will prepare the device. Usually devices are very long running processes so running this method from interactive script is not recommended. This method throw ZMQDeviceException if the device cannot be started.</p>
		 * @link http://php.net/manual/en/zmqdevice.construct.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function __construct(\ZMQSocket $frontend, \ZMQSocket $backend, \ZMQSocket $listener = NULL) {}

		/**
		 * Get the idle timeout
		 * <p>Gets the idle callback timeout value. Added in ZMQ extension version 1.1.0.</p>
		 * @return ZMQDevice <p>This method returns the idle callback timeout value.</p>
		 * @link http://php.net/manual/en/zmqdevice.getidletimeout.php
		 * @since No version information available, might only be in Git
		 */
		public function getIdleTimeout(): \ZMQDevice {}

		/**
		 * Get the timer timeout
		 * <p>Gets the timer callback timeout value. Added in ZMQ extension version 1.1.0.</p>
		 * @return ZMQDevice <p>This method returns the timer timeout value.</p>
		 * @link http://php.net/manual/en/zmqdevice.gettimertimeout.php
		 * @since No version information available, might only be in Git
		 */
		public function getTimerTimeout(): \ZMQDevice {}

		/**
		 * Run the new device
		 * <p>Runs the device.</p>
		 * @return void <p>Call to this method will block until the device is running. It is not recommended that devices are used from interactive scripts. On failure this method will throw ZMQDeviceException.</p>
		 * @link http://php.net/manual/en/zmqdevice.run.php
		 * @since No version information available, might only be in Git
		 */
		public function run(): void {}

		/**
		 * Set the idle callback function
		 * <p>Sets the idle callback function. If idle timeout is defined the idle callback function shall be called if the internal poll loop times out without events. If the callback function returns false or a value that evaluates to false the device is stopped. The callback function signature is callback (mixed $user_data).</p>
		 * @param callable $cb_func <p>Callback function to invoke when the device is idle. Returning false or a value that evaluates to false from this function will cause the device to stop.</p>
		 * @param int $timeout <p>How often to invoke the idle callback in milliseconds. The idle callback is invoked periodically when there is no activity on the device. The timeout value guarantees that there is at least this amount of milliseconds between invocations of the callback function.</p>
		 * @param mixed $user_data <p>Additional data to pass to the callback function.</p>
		 * @return ZMQDevice <p>On success this method returns the current object.</p>
		 * @link http://php.net/manual/en/zmqdevice.setidlecallback.php
		 * @since No version information available, might only be in Git
		 */
		public function setIdleCallback(callable $cb_func, int $timeout, $user_data = NULL): \ZMQDevice {}

		/**
		 * Set the idle timeout
		 * <p>Sets the idle callback timeout value. The idle callback is invoked periodically when the device is idle.</p>
		 * @param int $timeout <p>The idle callback timeout value.</p>
		 * @return ZMQDevice <p>On success this method returns the current object.</p>
		 * @link http://php.net/manual/en/zmqdevice.setidletimeout.php
		 * @since No version information available, might only be in Git
		 */
		public function setIdleTimeout(int $timeout): \ZMQDevice {}

		/**
		 * Set the timer callback function
		 * <p>Sets the timer callback function. The timer callback will be invoked after timeout has passed. The difference between idle and timer callbacks are that idle callback is invoked only when the device is idle. The callback function signature is callback (mixed $user_data). Added in ZMQ extension version 1.1.0.</p>
		 * @param callable $cb_func <p>Callback function to invoke when the device is idle. Returning false or a value that evaluates to false from this function will cause the device to stop.</p>
		 * @param int $timeout <p>How often to invoke the idle callback in milliseconds. The idle callback is invoked periodically when there is no activity on the device. The timeout value guarantees that there is at least this amount of milliseconds between invocations of the callback function.</p>
		 * @param mixed $user_data <p>Additional data to pass to the callback function.</p>
		 * @return ZMQDevice <p>On success this method returns the current object.</p>
		 * @link http://php.net/manual/en/zmqdevice.settimercallback.php
		 * @since No version information available, might only be in Git
		 */
		public function setTimerCallback(callable $cb_func, int $timeout, $user_data = NULL): \ZMQDevice {}

		/**
		 * Set the timer timeout
		 * <p>Sets the timer callback timeout value. The timer callback is invoked periodically if it's set. Added in ZMQ extension version 1.1.0.</p>
		 * @param int $timeout <p>The timer callback timeout value.</p>
		 * @return ZMQDevice <p>On success this method returns the current object.</p>
		 * @link http://php.net/manual/en/zmqdevice.settimertimeout.php
		 * @since No version information available, might only be in Git
		 */
		public function setTimerTimeout(int $timeout): \ZMQDevice {}
	}

	/**
	 * @link http://php.net/manual/en/class.zmqpoll.php
	 * @since No version information available, might only be in Git
	 */
	class ZMQPoll {

		/**
		 * Add item to the poll set
		 * <p>Adds a new item to the poll set and returns the internal id of the added item. The item can be removed from the poll set using the returned string id.</p>
		 * @param mixed $entry <p>ZMQSocket object or a PHP stream resource</p>
		 * @param int $type <p>Defines what activity the socket is polled for. See <b><code>ZMQ::POLL_IN</code></b> and <b><code>ZMQ::POLL_OUT</code></b> constants.</p>
		 * @return string <p>Returns a string id of the added item which can be later used to remove the item. Throws ZMQPollException on error.</p>
		 * @link http://php.net/manual/en/zmqpoll.add.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function add($entry, int $type): string {}

		/**
		 * Clear the poll set
		 * <p>Clears all elements from the poll set.</p>
		 * @return ZMQPoll <p>Returns the current object.</p>
		 * @link http://php.net/manual/en/zmqpoll.clear.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function clear(): \ZMQPoll {}

		/**
		 * Count items in the poll set
		 * <p>Count the items in the poll set.</p>
		 * @return int <p>Returns an <code>int</code> representing the amount of items in the poll set.</p>
		 * @link http://php.net/manual/en/zmqpoll.count.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function count(): int {}

		/**
		 * Get poll errors
		 * <p>Returns the ids of the objects that had errors in the last poll.</p>
		 * @return array <p>Returns an array containing ids for the items that had errors in the last poll. Empty array is returned if there were no errors.</p>
		 * @link http://php.net/manual/en/zmqpoll.getlasterrors.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function getLastErrors(): array {}

		/**
		 * Poll the items
		 * <p>Polls the items in the current poll set. The readable and writable items are returned in the <code>readable</code> and <code>writable</code> parameters. <code>ZMQPoll::getLastErrors()</code> can be used to check if there were errors.</p>
		 * @param array $readable <p>Array where readable ZMQSockets/PHP streams are returned. The array will be cleared at the beginning of the operation.</p>
		 * @param array $writable <p>Array where writable ZMQSockets/PHP streams are returned. The array will be cleared at the beginning of the operation.</p>
		 * @param int $timeout <p>Timeout for the operation. -1 means that poll waits until at least one item has activity. Please note that starting from version 1.0.0 the poll timeout is defined in milliseconds, rather than microseconds.</p>
		 * @return int <p>Returns an integer representing amount of items with activity. Throws ZMQPollException on error.</p>
		 * @link http://php.net/manual/en/zmqpoll.poll.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function poll(array &$readable, array &$writable, int $timeout = -1): int {}

		/**
		 * Remove item from poll set
		 * <p>Remove item from the poll set. The <code>item</code> parameter can be ZMQSocket object, a stream resource or the id returned from <code>ZMQPoll::add()</code> method.</p>
		 * @param mixed $item <p>The ZMQSocket object, PHP stream or <code>string</code> id of the item.</p>
		 * @return bool <p>Returns true if the item was removed and false if the object with given id does not exist in the poll set.</p>
		 * @link http://php.net/manual/en/zmqpoll.remove.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function remove($item): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.zmqsocket.php
	 * @since No version information available, might only be in Git
	 */
	class ZMQSocket {

		/**
		 * Construct a new ZMQSocket
		 * <p>Constructs a ZMQSocket object. <code>persistent_id</code> parameter can be used to allocated a persistent socket. A persistent socket has to be allocated from a persistent context and it stays connected over multiple requests. The <code>persistent_id</code> parameter can be used to recall the same socket over multiple requests. The <code>on_new_socket</code> is called only when a new underlying socket structure is created.</p>
		 * @param \ZMQContext $context <p>ZMQContext object.</p>
		 * @param int $type <p>The socket type. See <b><code>ZMQ::SOCKET_&#42;</code></b> constants.</p>
		 * @param string $persistent_id <p>If <code>persistent_id</code> is specified the socket will be persisted over multiple requests. If <code>context</code> is not persistent the socket falls back to non-persistent mode.</p>
		 * @param callable $on_new_socket <p>Callback function, which is executed when a new socket structure is created. This function does not get invoked if the underlying persistent connection is re-used.</p>
		 * @return self <p>Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.construct.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function __construct(\ZMQContext $context, int $type, string $persistent_id = NULL, callable $on_new_socket = NULL) {}

		/**
		 * Bind the socket
		 * <p>Bind the socket to an endpoint. The endpoint is defined in format <code>transport://address</code> where transport is one of the following: inproc, ipc, tcp, pgm or epgm.</p>
		 * @param string $dsn <p>The bind dsn, for example <code>transport://address</code>.</p>
		 * @param bool $force <p>Tries to bind even if the socket has already been bound to the given endpoint.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.bind.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function bind(string $dsn, bool $force = FALSE): \ZMQSocket {}

		/**
		 * Connect the socket
		 * <p>Connect the socket to a remote endpoint. The endpoint is defined in format <code>transport://address</code> where transport is one of the following: inproc, ipc, tcp, pgm or epgm.</p>
		 * @param string $dsn <p>The connect dsn, for example <code>transport://address</code>.</p>
		 * @param bool $force <p>Tries to connect even if the socket has already been connected to given endpoint.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.connect.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function connect(string $dsn, bool $force = FALSE): \ZMQSocket {}

		/**
		 * Disconnect a socket
		 * <p>Disconnect the socket from a previously connected remote endpoint. The endpoint is defined in format <code>transport://address</code> where transport is one of the following: inproc, ipc, tcp, pgm or epgm.</p>
		 * @param string $dsn <p>The connect dsn, for example <code>transport://address</code>.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.disconnect.php
		 * @since PECL zmq >= 1.0.4
		 */
		public function disconnect(string $dsn): \ZMQSocket {}

		/**
		 * Get list of endpoints
		 * <p>Returns a list of endpoints where the socket is connected or bound to.</p>
		 * @return array <p>Returns an array containing elements 'bind' and 'connect'.</p>
		 * @link http://php.net/manual/en/zmqsocket.getendpoints.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function getEndpoints(): array {}

		/**
		 * Get the persistent id
		 * <p>Returns the persistent id of the socket.</p>
		 * @return string <p>Returns the persistent id string assigned of the object and <b><code>NULL</code></b> if socket is not persistent.</p>
		 * @link http://php.net/manual/en/zmqsocket.getpersistentid.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function getPersistentId(): string {}

		/**
		 * Get socket option
		 * <p>Returns the value of a socket option.</p>
		 * @param string $key <p>An integer representing the option. See the <b><code>ZMQ::SOCKOPT_&#42;</code></b> constants.</p>
		 * @return mixed <p>Returns either a <code>string</code> or an <code>int</code> depending on <code>key</code>. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.getsockopt.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function getSockOpt(string $key) {}

		/**
		 * Get the socket type
		 * <p>Gets the socket type.</p>
		 * @return int <p>Returns an integer representing the socket type. The integer can be compared against <b><code>ZMQ::SOCKET_&#42;</code></b> constants.</p>
		 * @link http://php.net/manual/en/zmqsocket.getsockettype.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function getSocketType(): int {}

		/**
		 * Whether the socket is persistent
		 * <p>Check whether the socket is persistent.</p>
		 * @return bool <p>Returns a <code>bool</code> based on whether the socket is persistent or not.</p>
		 * @link http://php.net/manual/en/zmqsocket.ispersistent.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function isPersistent(): bool {}

		/**
		 * Receives a message
		 * <p>Receive a message from a socket. By default receiving will block until a message is available unless <b><code>ZMQ::MODE_DONTWAIT</code></b> flag is used. <b><code>ZMQ::SOCKOPT_RCVMORE</code></b> socket option can be used for receiving multi-part messages. See <code>ZMQSocket::setSockOpt()</code> for more information.</p>
		 * @param int $mode <p>Pass mode flags to receive multipart messages or non-blocking operation. See <b><code>ZMQ::MODE_&#42;</code></b> constants.</p>
		 * @return string <p>Returns the message. Throws ZMQSocketException in error. If <b><code>ZMQ::MODE_DONTWAIT</code></b> is used and the operation would block <code>bool</code> false shall be returned.</p>
		 * @link http://php.net/manual/en/zmqsocket.recv.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function recv(int $mode = 0): string {}

		/**
		 * Receives a multipart message
		 * <p>Receive an array multipart message from a socket. By default receiving will block until a message is available unless <b><code>ZMQ::MODE_NOBLOCK</code></b> flag is used.</p>
		 * @param int $mode <p>Pass mode flags to receive multipart messages or non-blocking operation. See <b><code>ZMQ::MODE_&#42;</code></b> constants.</p>
		 * @return array <p>Returns the array of message parts. Throws ZMQSocketException in error. If <b><code>ZMQ::MODE_NOBLOCK</code></b> is used and the operation would block <code>bool</code> false shall be returned.</p>
		 * @link http://php.net/manual/en/zmqsocket.recvmulti.php
		 * @since PECL zmq >= 0.8.0
		 */
		public function recvMulti(int $mode = 0): array {}

		/**
		 * Sends a message
		 * <p>Send a message using the socket. The operation can block unless <b><code>ZMQ::MODE_NOBLOCK</code></b> is used.</p>
		 * @param string $message <p>The message to send.</p>
		 * @param int $mode <p>Pass mode flags to receive multipart messages or non-blocking operation. See <b><code>ZMQ::MODE_&#42;</code></b> constants.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error. If <b><code>ZMQ::MODE_NOBLOCK</code></b> is used and the operation would block <code>bool</code> false shall be returned.</p>
		 * @link http://php.net/manual/en/zmqsocket.send.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function send(string $message, int $mode = 0): \ZMQSocket {}

		/**
		 * Sends a multipart message
		 * <p>Send a multipart message using the socket. The operation can block unless <b><code>ZMQ::MODE_NOBLOCK</code></b> is used.</p>
		 * @param array $message <p>The message to send - an array of strings</p>
		 * @param int $mode <p>Pass mode flags to receive multipart messages or non-blocking operation. See <b><code>ZMQ::MODE_&#42;</code></b> constants.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error. If <b><code>ZMQ::MODE_NOBLOCK</code></b> is used and the operation would block <code>bool</code> false shall be returned.</p>
		 * @link http://php.net/manual/en/zmqsocket.sendmulti.php
		 * @since PECL zmq >= 0.8.0
		 */
		public function sendmulti(array $message, int $mode = 0): \ZMQSocket {}

		/**
		 * Set a socket option
		 * <p>Sets a ZMQ socket option. The type of the <code>value</code> depends on the <code>key</code>. See ZMQ Constant Types for more information.</p>
		 * @param int $key <p>One of the <b><code>ZMQ::SOCKOPT_&#42;</code></b> constants.</p>
		 * @param mixed $value <p>The value of the parameter.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.setsockopt.php
		 * @since PECL zmq >= 0.5.0
		 */
		public function setSockOpt(int $key, $value): \ZMQSocket {}

		/**
		 * Unbind the socket
		 * <p>Unbind the socket from an endpoint. The endpoint is defined in format <code>transport://address</code> where transport is one of the following: inproc, ipc, tcp, pgm or epgm.</p>
		 * @param string $dsn <p>The previously bound dsn, for example <code>transport://address</code>.</p>
		 * @return ZMQSocket <p>Returns the current object. Throws ZMQSocketException on error.</p>
		 * @link http://php.net/manual/en/zmqsocket.unbind.php
		 * @since PECL zmq >= 1.0.4
		 */
		public function unbind(string $dsn): \ZMQSocket {}
	}

}
