<?php



namespace {

	/**
	 * Stop and destory a timer.
	 * <p>Object-oriented style (method):</p><p>Stop and destory a timer</p>
	 * @param int $timer_id
	 * @return void
	 * @link https://php.net/manual/en/swoole-server.cleartimer.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_timer_clear(int $timer_id): void {}

	define('SWOOLE_AIO_BASE', null);

	define('SWOOLE_AIO_LINUX', null);

	define('SWOOLE_ASYNC', null);

	define('SWOOLE_BASE', null);

	define('SWOOLE_EVENT_READ', null);

	define('SWOOLE_EVENT_WRITE', null);

	define('SWOOLE_FAST_PACK', null);

	define('SWOOLE_FILELOCK', null);

	define('SWOOLE_IPC_MSGQUEUE', null);

	define('SWOOLE_IPC_PREEMPTIVE', null);

	define('SWOOLE_IPC_UNSOCK', null);

	define('SWOOLE_KEEP', null);

	/**
	 * Debug log. Available as of swoole 2.1.2.
	 */
	define('SWOOLE_LOG_DEBUG', null);

	/**
	 * Error log. Available as of swoole 2.1.2.
	 */
	define('SWOOLE_LOG_ERROR', null);

	/**
	 * Info log. Available as of swoole 2.1.2.
	 */
	define('SWOOLE_LOG_INFO', null);

	/**
	 * None log. Available as of swoole 4.3.2.
	 */
	define('SWOOLE_LOG_NONE', null);

	/**
	 * Notice log. Available as of swoole 2.1.2.
	 */
	define('SWOOLE_LOG_NOTICE', null);

	/**
	 * Trace log. Available as of swoole 2.1.2.
	 */
	define('SWOOLE_LOG_TRACE', null);

	/**
	 * Warning log. Available as of swoole 2.1.2.
	 */
	define('SWOOLE_LOG_WARNING', null);

	define('SWOOLE_MUTEX', null);

	define('SWOOLE_PROCESS', null);

	define('SWOOLE_RWLOCK', null);

	define('SWOOLE_SEM', null);

	define('SWOOLE_SOCK_ASYNC', null);

	define('SWOOLE_SOCK_SYNC', null);

	define('SWOOLE_SOCK_TCP', null);

	define('SWOOLE_SOCK_TCP6', null);

	define('SWOOLE_SOCK_UDP', null);

	define('SWOOLE_SOCK_UDP6', null);

	define('SWOOLE_SOCK_UNIX_DGRAM', null);

	define('SWOOLE_SOCK_UNIX_STREAM', null);

	define('SWOOLE_SYNC', null);

	define('SWOOLE_TCP', null);

	define('SWOOLE_TCP6', null);

	define('SWOOLE_THREAD', null);

	define('SWOOLE_UDP', null);

	define('SWOOLE_UDP6', null);

	define('SWOOLE_UNIX_DGRAM', null);

	define('SWOOLE_UNIX_STREAM', null);

	define('SWOOLE_VERSION', null);

	define('WEBSOCKET_OPCODE_BINARY', null);

	define('WEBSOCKET_OPCODE_PING', null);

	define('WEBSOCKET_OPCODE_TEXT', null);

	define('WEBSOCKET_STATUS_ACTIVE', null);

	define('WEBSOCKET_STATUS_CONNECTION', null);

	define('WEBSOCKET_STATUS_FRAME', null);

	define('WEBSOCKET_STATUS_HANDSHAKE', null);

}

namespace Swoole {

	/**
	 * @link https://php.net/manual/en/class.swoole-async.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Async {

		/**
		 * Async and non-blocking hostname to IP lookup.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $hostname <p>The host name.</p>
		 * @param callable $callback callback(<code>string</code> <code>$hostname</code>, <code>string</code> <code>$ip</code>): <code>mixed</code>   <code>hostname</code>  <p>The host name.</p>   <code>IP</code>  <p>The IP address.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-async.dnslookup.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function dnsLookup(string $hostname, callable $callback): void {}

		/**
		 * Read file stream asynchronously.
		 * @param string $filename <p>The name of the file.</p>
		 * @param callable $callback callback(<code>string</code> <code>$filename</code>, <code>string</code> <code>$content</code>): <code>mixed</code>   <code>filename</code>  <p>The name of the file.</p>   <code>content</code>  <p>The content readed from the file stream.</p>
		 * @param int $chunk_size <p>The chunk length.</p>
		 * @param int $offset <p>The offset.</p>
		 * @return bool <p>Whether the read is succeed.</p>
		 * @link https://php.net/manual/en/swoole-async.read.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function read(string $filename, callable $callback, int $chunk_size = null, int $offset = null): bool {}

		/**
		 * Read a file asynchronously.
		 * @param string $filename <p>The filename of the file being read.</p>
		 * @param callable $callback callback(<code>string</code> <code>$filename</code>, <code>string</code> <code>$content</code>): <code>mixed</code>   <code>filename</code>  <p>The name of the file.</p>   <code>content</code>  <p>The content readed from the file.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-async.readfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function readFile(string $filename, callable $callback): void {}

		/**
		 * Update the async I/O options.
		 * @param array $settings
		 * @return void
		 * @link https://php.net/manual/en/swoole-async.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function set(array $settings): void {}

		/**
		 * Write data to a file stream asynchronously.
		 * @param string $filename <p>The filename being written.</p>
		 * @param string $content <p>The content writing to the file.</p>
		 * @param int $offset <p>The offset.</p>
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-async.write.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function write(string $filename, string $content, int $offset = null, callable $callback = null): void {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $filename <p>The filename being written.</p>
		 * @param string $content <p>The content writing to the file.</p>
		 * @param callable $callback
		 * @param string $flags
		 * @return void
		 * @link https://php.net/manual/en/swoole-async.writefile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function writeFile(string $filename, string $content, callable $callback = null, string $flags = null): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-atomic.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Atomic {

		/**
		 * Add a number to the value to the atomic object.
		 * <p>Add a number to the value to the atomic object.</p>
		 * @param int $add_value <p>The value which will be added to the current value.</p>
		 * @return int <p>The new value of the atomic object.</p>
		 * @link https://php.net/manual/en/swoole-atomic.add.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function add(int $add_value = null): int {}

		/**
		 * Compare and set the value of the atomic object.
		 * @param int $cmp_value <p>The value to compare with the current value of the atomic object.</p>
		 * @param int $new_value <p>The value to set to the atomic object if the cmp_value is the same as the current value of the atomic object.</p>
		 * @return int <p>The new value of the atomic object.</p>
		 * @link https://php.net/manual/en/swoole-atomic.cmpset.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function cmpset(int $cmp_value, int $new_value): int {}

		/**
		 * Get the current value of the atomic object.
		 * <p>Get the current value of the atomic object.</p>
		 * @return int <p>The current value of the atomic object.</p>
		 * @link https://php.net/manual/en/swoole-atomic.get.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function get(): int {}

		/**
		 * Set a new value to the atomic object.
		 * <p>Set a new value to the atomic object.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $value <p>The value to set to the atomic object.</p>
		 * @return int <p>The current value of the atomic object.</p>
		 * @link https://php.net/manual/en/swoole-atomic.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(int $value): int {}

		/**
		 * Subtract a number to the value of the atomic object.
		 * <p>Subtract a number to the value of the atomic object.</p>
		 * @param int $sub_value <p>The value which will be subtracted to the current value.</p>
		 * @return int <p>The current value of the atomic object.</p>
		 * @link https://php.net/manual/en/swoole-atomic.sub.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sub(int $sub_value = null): int {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-buffer.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Buffer {

		/**
		 * Destruct the Swoole memory buffer.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-buffer.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Get the string value of the memory buffer.
		 * @return string <p>The string value of the memory buffer.</p>
		 * @link https://php.net/manual/en/swoole-buffer.tostring.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __toString(): string {}

		/**
		 * Append the string or binary data at the end of the memory buffer and return the new size of memory allocated.
		 * @param string $data <p>The string or binary data to append at the end of the memory buffer.</p>
		 * @return int <p>The new size of the memory buffer.</p>
		 * @link https://php.net/manual/en/swoole-buffer.append.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function append(string $data): int {}

		/**
		 * Reset the memory buffer.
		 * @return void
		 * @link https://php.net/manual/en/swoole-buffer.clear.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function clear(): void {}

		/**
		 * Expand the size of memory buffer.
		 * @param int $size <p>The new size of the memory buffer.</p>
		 * @return int <p>The new size of the memory buffer.</p>
		 * @link https://php.net/manual/en/swoole-buffer.expand.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function expand(int $size): int {}

		/**
		 * Read data from the memory buffer based on offset and length.
		 * @param int $offset <p>The offset.</p>
		 * @param int $length <p>The length.</p>
		 * @return string <p>The data readed from the memory buffer.</p>
		 * @link https://php.net/manual/en/swoole-buffer.read.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function read(int $offset, int $length): string {}

		/**
		 * Release the memory to OS which is not used by the memory buffer.
		 * @return void
		 * @link https://php.net/manual/en/swoole-buffer.recycle.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function recycle(): void {}

		/**
		 * Read data from the memory buffer based on offset and length. Or remove data from the memory buffer.
		 * <p>If $remove is set to be true and $offset is set to be 0, the data will be removed from the buffer. The memory for storing the data will be released when the buffer object is deconstructed.</p>
		 * @param int $offset <p>The offset.</p>
		 * @param int $length <p>The length.</p>
		 * @param bool $remove <p>Whether to remove the data from the memory buffer.</p>
		 * @return string <p>The data or string readed from the memory buffer.</p>
		 * @link https://php.net/manual/en/swoole-buffer.substr.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function substr(int $offset, int $length = null, bool $remove = null): string {}

		/**
		 * Write data to the memory buffer. The memory allocated for the buffer will not be changed.
		 * @param int $offset <p>The offset.</p>
		 * @param string $data <p>The data to write to the memory buffer.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-buffer.write.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function write(int $offset, string $data): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-channel.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Channel {

		/**
		 * Destruct a Swoole channel.
		 * @return void
		 * @link https://php.net/manual/en/swoole-channel.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Read and pop data from swoole channel.
		 * @return mixed <p>If the channel is empty, the function will return false, or return the unserialized data.</p>
		 * @link https://php.net/manual/en/swoole-channel.pop.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pop(): mixed {}

		/**
		 * Write and push data into Swoole channel.
		 * <p>Data can be any non-empty PHP variable, the variable will be serialized if it is not string type.</p><p>If size of the data is more than 8KB, swoole channel will use temp files storage.</p><p>The function will return true if the write operation is succeeded, or return false if there is not enough space.</p>
		 * @param string $data <p>The data to push into the Swoole channel.</p>
		 * @return bool <p>Wheter the data is pushed into he Swoole channel.</p>
		 * @link https://php.net/manual/en/swoole-channel.push.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function push(string $data): bool {}

		/**
		 * Get stats of swoole channel.
		 * <p>Get the numbers of queued elements and total size of the memory used by the queue.</p>
		 * @return array <p>The stats of the Swoole channel.</p>
		 * @link https://php.net/manual/en/swoole-channel.stats.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stats(): array {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-client.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Client {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-client.php
		 */
		const MSG_OOB = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-client.php
		 */
		const MSG_PEEK = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-client.php
		 */
		const MSG_DONTWAIT = 128;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-client.php
		 */
		const MSG_WAITALL = 64;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.swoole-client.php#swoole-client.props.errcode
		 */
		public $errCode;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.swoole-client.php#swoole-client.props.sock
		 */
		public $sock;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.swoole-client.php#swoole-client.props.reuse
		 */
		public $reuse;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.swoole-client.php#swoole-client.props.reusecount
		 */
		public $reuseCount;

		/**
		 * Destruct the Swoole client.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Close the connection established.
		 * @param bool $force <p>Whether force to close the connection.</p>
		 * @return bool <p>Whether the connection is closed.</p>
		 * @link https://php.net/manual/en/swoole-client.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(bool $force = null): bool {}

		/**
		 * Connect to the remote TCP or UDP port.
		 * @param string $host <p>The host name of the remote address.</p>
		 * @param int $port <p>The port number of the remote address.</p>
		 * @param int $timeout <p>The timeout(second) of connect/send/recv, the dafault value is 0.1s</p>
		 * @param int $flag <p>If the type of client is UDP, the $flag means if to enable the configuration udp_connect. If the configuration udp_connect is enabled, the client will only receive the data from specified ip:port. If the type of client is TCP and the $flag is set to 1, it must use swoole_client_select to check the connection status before send/recv.</p>
		 * @return bool <p>Whether the connection is established.</p>
		 * @link https://php.net/manual/en/swoole-client.connect.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connect(string $host, int $port = null, int $timeout = null, int $flag = null): bool {}

		/**
		 * Get the remote socket name of the connection.
		 * @return array <p>The host and port of the remote socket.</p>
		 * @link https://php.net/manual/en/swoole-client.getpeername.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getpeername(): array {}

		/**
		 * Get the local socket name of the connection.
		 * @return array <p>The host and port of the local socket.</p>
		 * @link https://php.net/manual/en/swoole-client.getsockname.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getsockname(): array {}

		/**
		 * Check if the connection is established.
		 * <p>This method returns the connection status of application layer.</p>
		 * @return bool <p>Whether the connection is established.</p>
		 * @link https://php.net/manual/en/swoole-client.isconnected.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function isConnected(): bool {}

		/**
		 * Add callback functions triggered by events.
		 * @param string $event
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event, callable $callback): void {}

		/**
		 * Pause receiving data.
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.pause.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pause(): void {}

		/**
		 * Redirect the data to another file descriptor.
		 * @param string $socket
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.pipe.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pipe(string $socket): void {}

		/**
		 * Receive data from the remote socket.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $size
		 * @param string $flag
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.recv.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function recv(string $size = null, string $flag = null): void {}

		/**
		 * Resume receiving data.
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.resume.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function resume(): void {}

		/**
		 * Send data to the remote TCP socket.
		 * @param string $data <p>The data to send which can be string or binary</p>
		 * @param string $flag
		 * @return int <p>If the client sends data successfully, it returns the length of data sent. Or it returns false and sets $swoole_client-&gt;errCode. For sync client, there is no limit for the data to send. For async client, The limit for the data to send is socket_buffer_size.</p>
		 * @link https://php.net/manual/en/swoole-client.send.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function send(string $data, string $flag = null): int {}

		/**
		 * Send file to the remote TCP socket.
		 * <p>This is a wrapper of the Linux sendfile system call.</p>
		 * @param string $filename <p>File path of the file to send.</p>
		 * @param int $offset <p>Offset of the file to send</p>
		 * @return bool
		 * @link https://php.net/manual/en/swoole-client.sendfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendfile(string $filename, int $offset = null): bool {}

		/**
		 * Send data to the remote UDP address.
		 * <p>The swoole client should be type of SWOOLE_SOCK_UDP or SWOOLE_SOCK_UDP6.</p>
		 * @param string $ip <p>The IP address of remote host, IPv4 or IPv6.</p>
		 * @param int $port <p>The port number of remote host.</p>
		 * @param string $data <p>The data to send which should be less-than 64K.</p>
		 * @return bool
		 * @link https://php.net/manual/en/swoole-client.sendto.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendto(string $ip, int $port, string $data): bool {}

		/**
		 * Set the Swoole client parameters before the connection is established.
		 * @param array $settings
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(array $settings): void {}

		/**
		 * Remove the TCP client from system event loop.
		 * <p>Remove the TCP client from system event loop.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.sleep.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sleep(): void {}

		/**
		 * Add the TCP client back into the system event loop.
		 * @return void
		 * @link https://php.net/manual/en/swoole-client.wakeup.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function wakeup(): void {}
	}

}

namespace Swoole\Connection {

	/**
	 * @link https://php.net/manual/en/class.swoole-connection-iterator.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Iterator implements \Iterator, \Countable, \ArrayAccess {

		/**
		 * Count connections.
		 * <p>Gets the number of connections.</p>
		 * @return int <p>The number of connections.</p>
		 * @link https://php.net/manual/en/swoole-connection-iterator.count.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function count(): int {}

		/**
		 * Return current connection entry.
		 * <p>Get current connection entry.</p>
		 * @return Connection <p>The current connection entry.</p>
		 * @link https://php.net/manual/en/swoole-connection-iterator.current.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function current(): \Connection {}

		/**
		 * Return key of the current connection.
		 * <p>This function returns key of the current connection.</p>
		 * @return int <p>Key of the current connection.</p>
		 * @link https://php.net/manual/en/swoole-connection-iterator.key.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function key(): int {}

		/**
		 * Move to the next connection.
		 * <p>The iterator to the next connection.</p>
		 * @return Connection
		 * @link https://php.net/manual/en/swoole-connection-iterator.next.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function next(): \Connection {}

		/**
		 * Check if offet exists.
		 * <p>Check if offset exists.</p>
		 * @param int $index <p>The offset being checked.</p>
		 * @return bool <p>Returns TRUE if the offset exists, otherwise FALSE.</p>
		 * @link https://php.net/manual/en/swoole-connection-iterator.offsetexists.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function offsetExists(int $index): bool {}

		/**
		 * Offset to retrieve.
		 * <p>Return the connection at specified offset.</p>
		 * @param string $index <p>The offset to retrieve.</p>
		 * @return Connection
		 * @link https://php.net/manual/en/swoole-connection-iterator.offsetget.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function offsetGet(string $index): \Connection {}

		/**
		 * Assign a Connection to the specified offset.
		 * <p>Assign a Connection to the specified offset.</p>
		 * @param int $offset <p>The offset to assign the Connection to.</p>
		 * @param mixed $connection <p>The connection to set.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-connection-iterator.offsetset.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function offsetSet(int $offset, mixed $connection): void {}

		/**
		 * Unset an offset.
		 * <p>Unsets an offset.</p>
		 * @param int $offset <p>The offset to unset.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-connection-iterator.offsetunset.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function offsetUnset(int $offset): void {}

		/**
		 * Rewinds iterator
		 * @return void
		 * @link https://php.net/manual/en/swoole-connection-iterator.rewind.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function rewind(): void {}

		/**
		 * Check if current position is valid.
		 * <p>Checks if the current position is valid.</p>
		 * @return bool <p>Returns TRUE if the current iterator position is valid, otherwise FALSE.</p>
		 * @link https://php.net/manual/en/swoole-connection-iterator.valid.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function valid(): bool {}
	}

}

namespace Swoole {

	/**
	 * @link https://php.net/manual/en/class.swoole-coroutine.php
	 * @since PECL swoole >= 2.0.0
	 */
	class Coroutine {

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.destruct.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function __destruct() {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.addfile.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function addFile(): \ReturnType {}

		/**
		 * Call a callback given by the first parameter
		 * <p>Calls the <code>callback</code> given by the first parameter and passes the remaining parameters as arguments.</p>
		 * @param callable $callback <p>The <code>callable</code> to be called.</p>
		 * @param mixed $args <p>Zero or more parameters to be passed to the callback.</p>
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-coroutine.call-user-func.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function call_user_func(callable $callback, mixed ...$args): mixed {}

		/**
		 * Call a callback with an array of parameters
		 * <p>Calls the callback given by the first parameter with the parameters in param_array.</p>
		 * @param callable $callback <p>The <code>callable</code> to be called.</p>
		 * @param array $param_array <p>Zero or more parameters in the array to be passed to the callback.</p>
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-coroutine.call-user-func-array.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function call_user_func_array(callable $callback, array $param_array): mixed {}

		/**
		 * Description
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine.cli-wait.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function cli_wait(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.close.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function close(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.connect.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function connect(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine.create.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function create(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.execute.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function execute(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.get.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function get(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.getdefer.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function getDefer(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.getpeername.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function getpeername(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.getsockname.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function getsockname(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine.getuid.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function getuid(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.isconnected.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function isConnected(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.post.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function post(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-mysql.query.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function query(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.recv.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function recv(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine.resume.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function resume(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.send.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function send(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.sendfile.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function sendfile(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.sendto.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function sendto(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-client.set.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function set(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.setcookies.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function setCookies(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.setdata.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function setData(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.setdefer.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function setDefer(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.setheaders.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function setHeaders(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine-http-client.setmethod.php
		 * @since PECL swoole >= 2.0.0
		 */
		public function setMethod(): \ReturnType {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-coroutine.suspend.php
		 * @since PECL swoole >= 2.0.0
		 */
		public static function suspend(): \ReturnType {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-event.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Event {

		/**
		 * Add new callback functions of a socket into the EventLoop.
		 * @param int $fd
		 * @param callable $read_callback
		 * @param callable $write_callback
		 * @param string $events
		 * @return bool
		 * @link https://php.net/manual/en/swoole-event.add.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function add(int $fd, callable $read_callback, callable $write_callback = null, string $events = null): bool {}

		/**
		 * Add a callback function to the next event loop.
		 * @param mixed $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-event.defer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function defer(mixed $callback): void {}

		/**
		 * Remove all event callback functions of a socket.
		 * @param string $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-event.del.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function del(string $fd): bool {}

		/**
		 * Exit the eventloop, only available at client side.
		 * @return void
		 * @link https://php.net/manual/en/swoole-event.exit.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function exit(): void {}

		/**
		 * Update the event callback functions of a socket.
		 * @param int $fd
		 * @param string $read_callback
		 * @param string $write_callback
		 * @param string $events
		 * @return bool
		 * @link https://php.net/manual/en/swoole-event.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function set(int $fd, string $read_callback = null, string $write_callback = null, string $events = null): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-event.wait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function wait(): void {}

		/**
		 * Write data to the socket.
		 * @param string $fd
		 * @param string $data
		 * @return void
		 * @link https://php.net/manual/en/swoole-event.write.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function write(string $fd, string $data): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-exception.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Exception extends \Exception implements \Throwable {

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

}

namespace Swoole\Http {

	/**
	 * @link https://php.net/manual/en/class.swoole-http-client.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Client {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.swoole-http-client.php#swoole-http-client.props.errcode
		 */
		public $errCode;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.swoole-http-client.php#swoole-http-client.props.sock
		 */
		public $sock;

		/**
		 * Destruct the HTTP client.
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Add a file to the post form.
		 * @param string $path
		 * @param string $name
		 * @param string $type
		 * @param string $filename
		 * @param string $offset
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.addfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addFile(string $path, string $name, string $type = null, string $filename = null, string $offset = null): void {}

		/**
		 * Close the http connection.
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(): void {}

		/**
		 * Download a file from the remote server.
		 * @param string $path
		 * @param string $file
		 * @param callable $callback
		 * @param int $offset
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.download.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function download(string $path, string $file, callable $callback, int $offset = null): void {}

		/**
		 * Send the HTTP request after setting the parameters.
		 * @param string $path
		 * @param string $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.execute.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function execute(string $path, string $callback): void {}

		/**
		 * Send GET http request to the remote server.
		 * @param string $path
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.get.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function get(string $path, callable $callback): void {}

		/**
		 * Check if the HTTP connection is connected.
		 * @return bool
		 * @link https://php.net/manual/en/swoole-http-client.isconnected.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function isConnected(): bool {}

		/**
		 * Register callback function by event name.
		 * @param string $event_name
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event_name, callable $callback): void {}

		/**
		 * Send POST http request to the remote server.
		 * @param string $path
		 * @param string $data
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.post.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function post(string $path, string $data, callable $callback): void {}

		/**
		 * Push data to websocket client.
		 * @param string $data
		 * @param string $opcode
		 * @param string $finish
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.push.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function push(string $data, string $opcode = null, string $finish = null): void {}

		/**
		 * Update the HTTP client paramters.
		 * @param array $settings
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(array $settings): void {}

		/**
		 * Set the http request cookies.
		 * @param array $cookies
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.setcookies.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function setCookies(array $cookies): void {}

		/**
		 * Set the HTTP request body data.
		 * <p>The HTTP method will be changed to be POST.</p>
		 * @param string $data
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-http-client.setdata.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function setData(string $data): \ReturnType {}

		/**
		 * Set the HTTP request headers.
		 * @param array $headers
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.setheaders.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function setHeaders(array $headers): void {}

		/**
		 * Set the HTTP request method.
		 * @param string $method
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.setmethod.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function setMethod(string $method): void {}

		/**
		 * Upgrade to websocket protocol.
		 * @param string $path
		 * @param string $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-client.upgrade.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function upgrade(string $path, string $callback): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-http-request.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Request {

		/**
		 * Destruct the HTTP request.
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-request.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Get the raw HTTP POST body.
		 * <p>This method is used for the POST data which isn't in the form of `application/x-www-form-urlencoded`.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/swoole-http-request.rawcontent.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function rawcontent(): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-http-response.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Response {

		/**
		 * Destruct the HTTP response.
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-response.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Set the cookies of the HTTP response.
		 * @param string $name
		 * @param string $value
		 * @param string $expires
		 * @param string $path
		 * @param string $domain
		 * @param string $secure
		 * @param string $httponly
		 * @return string
		 * @link https://php.net/manual/en/swoole-http-response.cookie.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function cookie(string $name, string $value = null, string $expires = null, string $path = null, string $domain = null, string $secure = null, string $httponly = null): string {}

		/**
		 * Send data for the HTTP request and finish the response.
		 * @param string $content
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-response.end.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function end(string $content = null): void {}

		/**
		 * Enable the gzip of response content.
		 * <p>The header about Content-Encoding will be added automatically.</p>
		 * @param string $compress_level
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-http-response.gzip.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function gzip(string $compress_level = null): \ReturnType {}

		/**
		 * Set the HTTP response headers.
		 * @param string $key
		 * @param string $value
		 * @param string $ucwords
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-response.header.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function header(string $key, string $value, string $ucwords = null): void {}

		/**
		 * Init the HTTP response header.
		 * <p>Init the HTTP response header.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-http-response.initheader.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function initHeader(): \ReturnType {}

		/**
		 * Set the raw cookies to the HTTP response.
		 * @param string $name
		 * @param string $value
		 * @param string $expires
		 * @param string $path
		 * @param string $domain
		 * @param string $secure
		 * @param string $httponly
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-http-response.rawcookie.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function rawcookie(string $name, string $value = null, string $expires = null, string $path = null, string $domain = null, string $secure = null, string $httponly = null): \ReturnType {}

		/**
		 * Send file through the HTTP response.
		 * <p>Send file through the HTTP response.</p>
		 * @param string $filename
		 * @param int $offset
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-http-response.sendfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendfile(string $filename, int $offset = null): \ReturnType {}

		/**
		 * Set the status code of the HTTP response.
		 * <p>Set the status code of the HTTP response.</p>
		 * @param string $http_code
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-http-response.status.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function status(string $http_code): \ReturnType {}

		/**
		 * Append HTTP body content to the HTTP response.
		 * <p>Append HTTP body content to the HTTP response.</p>
		 * @param string $content
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-response.write.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function write(string $content): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-http-server.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Server extends \Swoole\Server {

		/**
		 * Destory server port
		 * @return void
		 * @link https://php.net/manual/en/swoole-server-port.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Add a user defined swoole_process to the server.
		 * @param \swoole_process $process
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.addprocess.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addProcess(\swoole_process $process): bool {}

		/**
		 * Add a new listener to the server.
		 * @param string $host
		 * @param int $port
		 * @param string $socket_type
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.addlistener.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addlistener(string $host, int $port, string $socket_type): void {}

		/**
		 * Trigger a callback function after a period of time.
		 * @param int $after_time_ms
		 * @param callable $callback
		 * @param string $param
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-server.after.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function after(int $after_time_ms, callable $callback, string $param = null): \ReturnType {}

		/**
		 * Bind the connection to a user defined user ID.
		 * @param int $fd
		 * @param int $uid
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.bind.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function bind(int $fd, int $uid): bool {}

		/**
		 * Stop and destory a timer.
		 * <p>Object-oriented style (method):</p><p>Stop and destory a timer</p>
		 * @param int $timer_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.cleartimer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function clearTimer(int $timer_id): void {}

		/**
		 * Close a connection to the client.
		 * @param int $fd
		 * @param bool $reset
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(int $fd, bool $reset = null): bool {}

		/**
		 * Check status of the connection.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.confirm.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function confirm(int $fd): bool {}

		/**
		 * Get the connection info by file description.
		 * @param int $fd
		 * @param int $reactor_id
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.connection-info.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connection_info(int $fd, int $reactor_id = null): array {}

		/**
		 * Get all of the established connections.
		 * @param int $start_fd
		 * @param int $pagesize
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.connection-list.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connection_list(int $start_fd, int $pagesize = null): array {}

		/**
		 * Delay execution of the callback function at the end of current EventLoop.
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.defer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function defer(callable $callback): void {}

		/**
		 * Check if the connection is existed.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.exist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exist(int $fd): bool {}

		/**
		 * Used in task process for sending result to the worker process when the task is finished.
		 * @param string $data
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.finish.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function finish(string $data): void {}

		/**
		 * Get the connection info by file description.
		 * @param int $fd <p>File descriptors.</p>
		 * @param int $reactor_id <p>The Reactor thread ID where the connection is made.</p>
		 * @param bool $ignore_error <p>Whether to ignore errors, if set to true, connection information will be returned even if the connection is closed.</p>
		 * @return array <p>Returns information about the client connection.</p>
		 * @link https://php.net/manual/en/swoole-server.getclientinfo.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getClientInfo(int $fd, int $reactor_id = null, bool $ignore_error = null): array {}

		/**
		 * Get all of the established connections.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $start_fd
		 * @param int $pagesize
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.getclientlist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getClientList(int $start_fd, int $pagesize = null): array {}

		/**
		 * Get the error code of the most recent error.
		 * @return int
		 * @link https://php.net/manual/en/swoole-server.getlasterror.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getLastError(): int {}

		/**
		 * Check all the connections on the server.
		 * @param bool $if_close_connection
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-server.heartbeat.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function heartbeat(bool $if_close_connection): mixed {}

		/**
		 * Listen on the given IP and port, socket type.
		 * @param string $host
		 * @param int $port
		 * @param string $socket_type
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.listen.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function listen(string $host, int $port, string $socket_type): bool {}

		/**
		 * Bind callback function to HTTP server by event name.
		 * <p>Bind callback function to HTTP server by event name.</p>
		 * @param string $event_name
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-server.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event_name, callable $callback): void {}

		/**
		 * Stop receiving data from the connection.
		 * @param int $fd
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.pause.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pause(int $fd): void {}

		/**
		 * Set the connection to be protected mode.
		 * @param int $fd
		 * @param bool $is_protected
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.protect.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function protect(int $fd, bool $is_protected = null): void {}

		/**
		 * Restart all the worker process.
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.reload.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function reload(): bool {}

		/**
		 * Start receving data from the connection.
		 * @param int $fd
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.resume.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function resume(int $fd): void {}

		/**
		 * Send data to the client.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $data
		 * @param int $reactor_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.send.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function send(int $fd, string $data, int $reactor_id = null): bool {}

		/**
		 * Send message to worker processes by ID.
		 * @param int $worker_id
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendmessage.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendMessage(int $worker_id, string $data): bool {}

		/**
		 * Send file to the connection.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $filename
		 * @param int $offset
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendfile(int $fd, string $filename, int $offset = null): bool {}

		/**
		 * Send data to the remote UDP address.
		 * @param string $ip
		 * @param int $port
		 * @param string $data
		 * @param string $server_socket
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendto.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendto(string $ip, int $port, string $data, string $server_socket = null): bool {}

		/**
		 * Send data to the remote socket in the blocking way.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendwait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendwait(int $fd, string $data): bool {}

		/**
		 * Set protocol of the server port.
		 * @param array $settings
		 * @return void
		 * @link https://php.net/manual/en/swoole-server-port.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(array $settings): void {}

		/**
		 * Shutdown the master server process, this function can be called in worker processes.
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.shutdown.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function shutdown(): void {}

		/**
		 * Start the swoole http server.
		 * <p>Start the swoole http server.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-server.start.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function start(): void {}

		/**
		 * Get the stats of the Swoole server.
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.stats.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stats(): array {}

		/**
		 * Stop the Swoole server.
		 * @param int $worker_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.stop.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stop(int $worker_id = null): bool {}

		/**
		 * Send data to the task worker processes.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data
		 * @param int $dst_worker_id
		 * @param callable $callback
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-server.task.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function task(string $data, int $dst_worker_id = null, callable $callback = null): mixed {}

		/**
		 * Execute multiple tasks concurrently.
		 * @param array $tasks
		 * @param \double $timeout_ms
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.taskwaitmulti.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function taskWaitMulti(array $tasks, \double $timeout_ms = null): void {}

		/**
		 * Send data to the task worker processes in blocking way.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data
		 * @param float $timeout
		 * @param int $worker_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.taskwait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function taskwait(string $data, float $timeout = null, int $worker_id = null): void {}

		/**
		 * Repeats a given function at every given time-interval.
		 * @param int $interval_ms
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.tick.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function tick(int $interval_ms, callable $callback): void {}
	}

}

namespace Swoole {

	/**
	 * @link https://php.net/manual/en/class.swoole-lock.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Lock {

		/**
		 * Destory a Swoole memory lock.
		 * @return void
		 * @link https://php.net/manual/en/swoole-lock.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Try to acquire the lock. It will block if the lock is not available.
		 * @return void
		 * @link https://php.net/manual/en/swoole-lock.lock.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function lock(): void {}

		/**
		 * Lock a read-write lock for reading.
		 * <p>Lock a read-write lock for reading.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-lock.lock-read.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function lock_read(): void {}

		/**
		 * Try to acquire the lock and return straight away even the lock is not available.
		 * @return void
		 * @link https://php.net/manual/en/swoole-lock.trylock.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function trylock(): void {}

		/**
		 * Try to lock a read-write lock for reading and return straight away even the lock is not available.
		 * @return void
		 * @link https://php.net/manual/en/swoole-lock.trylock-read.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function trylock_read(): void {}

		/**
		 * Release the lock.
		 * @return void
		 * @link https://php.net/manual/en/swoole-lock.unlock.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function unlock(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-mmap.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Mmap {

		/**
		 * Map a file into memory and return the stream resource which can be used by PHP stream operations.
		 * @param string $filename
		 * @param string $size
		 * @param string $offset
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-mmap.open.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function open(string $filename, string $size = null, string $offset = null): \ReturnType {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-mysql.php
	 * @since PECL swoole >= 1.9.0
	 */
	class MySQL {

		/**
		 * Destory the async MySQL client.
		 * @return void
		 * @link https://php.net/manual/en/swoole-mysql.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Close the async MySQL connection.
		 * @return void
		 * @link https://php.net/manual/en/swoole-mysql.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(): void {}

		/**
		 * Connect to the remote MySQL server.
		 * <p>Connect to the remote MySQL server.</p>
		 * @param array $server_config
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-mysql.connect.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connect(array $server_config, callable $callback): void {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-mysql.getbuffer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getBuffer(): \ReturnType {}

		/**
		 * Register callback function based on event name.
		 * <p>Register callback function based on event name, current only 'close' event is supported.</p>
		 * @param string $event_name
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-mysql.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event_name, callable $callback): void {}

		/**
		 * Run the SQL query.
		 * @param string $sql
		 * @param callable $callback
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-mysql.query.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function query(string $sql, callable $callback): \ReturnType {}
	}

}

namespace Swoole\MySQL {

	/**
	 * @link https://php.net/manual/en/class.swoole-mysql-exception.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Exception extends \Exception implements \Throwable {

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

}

namespace Swoole {

	/**
	 * @link https://php.net/manual/en/class.swoole-process.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Process {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-process.php
		 */
		const IPC_NOWAIT = 256;

		/**
		 * Destory the process.
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * High precision timer which triggers signal with fixed interval.
		 * @param int $interval_usec
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.alarm.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function alarm(int $interval_usec): void {}

		/**
		 * Close the pipe to the child process.
		 * <p>Close the pipe to the child process.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(): void {}

		/**
		 * Change the process to be a daemon process.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $nochdir
		 * @param bool $noclose
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.daemon.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function daemon(bool $nochdir = null, bool $noclose = null): void {}

		/**
		 * Execute system commands.
		 * <p>The process will be replaced to be the system command process, but the pipe to the parent process will be kept.</p>
		 * @param string $exec_file
		 * @param string $args
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-process.exec.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exec(string $exec_file, string $args): \ReturnType {}

		/**
		 * Stop the child processes.
		 * @param string $exit_code
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.exit.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exit(string $exit_code = null): void {}

		/**
		 * Destroy the message queue created by swoole_process::useQueue.
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.freequeue.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function freeQueue(): void {}

		/**
		 * Send signal to the child process.
		 * <p>Send signal to the child process.</p>
		 * @param int $pid <p>Process pid</p>
		 * @param int $signal_no <p>Signal to be sent</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/swoole-process.kill.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function kill(int $pid, int $signal_no = null): bool {}

		/**
		 * Set name of the process.
		 * @param string $process_name <p>Set name of the process.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/swoole-process.name.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function name(string $process_name): bool {}

		/**
		 * Read and pop data from the message queue.
		 * @param int $maxsize
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-process.pop.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pop(int $maxsize = null): mixed {}

		/**
		 * Write and push data into the message queue.
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-process.push.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function push(string $data): bool {}

		/**
		 * Read data sending to the process.
		 * @param int $maxsize
		 * @return string
		 * @link https://php.net/manual/en/swoole-process.read.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function read(int $maxsize = null): string {}

		/**
		 * Send signal to the child processes.
		 * @param string $signal_no
		 * @param callable $callback
		 * @return void <p>If signal sent successfully, it returns TRUE, otherwise it returns FALSE.</p>
		 * @link https://php.net/manual/en/swoole-process.signal.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function signal(string $signal_no, callable $callback): void {}

		/**
		 * Start the process.
		 * @return void
		 * @link https://php.net/manual/en/swoole-process.start.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function start(): void {}

		/**
		 * Get the stats of the message queue used as the communication method between processes.
		 * @return array <p>The array of status of the message queue.</p>
		 * @link https://php.net/manual/en/swoole-process.statqueue.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function statQueue(): array {}

		/**
		 * Create a message queue as the communication method between the parent process and child processes.
		 * @param int $key
		 * @param int $mode
		 * @return bool
		 * @link https://php.net/manual/en/swoole-process.usequeue.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function useQueue(int $key, int $mode = null): bool {}

		/**
		 * Wait for the events of child processes.
		 * @param bool $blocking
		 * @return array
		 * @link https://php.net/manual/en/swoole-process.wait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function wait(bool $blocking = null): array {}

		/**
		 * Write data into the pipe and communicate with the parent process or child processes.
		 * @param string $data
		 * @return int
		 * @link https://php.net/manual/en/swoole-process.write.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function write(string $data): int {}
	}

}

namespace Swoole\Redis {

	/**
	 * @link https://php.net/manual/en/class.swoole-redis-server.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Server extends \Swoole\Server {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const NIL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const ERROR = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const STATUS = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const INT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const STRING = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const SET = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-redis-server.php
		 */
		const MAP = 6;

		/**
		 * Destory server port
		 * @return void
		 * @link https://php.net/manual/en/swoole-server-port.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Add a user defined swoole_process to the server.
		 * @param \swoole_process $process
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.addprocess.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addProcess(\swoole_process $process): bool {}

		/**
		 * Add a new listener to the server.
		 * @param string $host
		 * @param int $port
		 * @param string $socket_type
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.addlistener.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addlistener(string $host, int $port, string $socket_type): void {}

		/**
		 * Trigger a callback function after a period of time.
		 * @param int $after_time_ms
		 * @param callable $callback
		 * @param string $param
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-server.after.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function after(int $after_time_ms, callable $callback, string $param = null): \ReturnType {}

		/**
		 * Bind the connection to a user defined user ID.
		 * @param int $fd
		 * @param int $uid
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.bind.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function bind(int $fd, int $uid): bool {}

		/**
		 * Stop and destory a timer.
		 * <p>Object-oriented style (method):</p><p>Stop and destory a timer</p>
		 * @param int $timer_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.cleartimer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function clearTimer(int $timer_id): void {}

		/**
		 * Close a connection to the client.
		 * @param int $fd
		 * @param bool $reset
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(int $fd, bool $reset = null): bool {}

		/**
		 * Check status of the connection.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.confirm.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function confirm(int $fd): bool {}

		/**
		 * Get the connection info by file description.
		 * @param int $fd
		 * @param int $reactor_id
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.connection-info.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connection_info(int $fd, int $reactor_id = null): array {}

		/**
		 * Get all of the established connections.
		 * @param int $start_fd
		 * @param int $pagesize
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.connection-list.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connection_list(int $start_fd, int $pagesize = null): array {}

		/**
		 * Delay execution of the callback function at the end of current EventLoop.
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.defer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function defer(callable $callback): void {}

		/**
		 * Check if the connection is existed.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.exist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exist(int $fd): bool {}

		/**
		 * Used in task process for sending result to the worker process when the task is finished.
		 * @param string $data
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.finish.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function finish(string $data): void {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $type
		 * @param string $value
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-redis-server.format.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function format(string $type, string $value = null): \ReturnType {}

		/**
		 * Get the connection info by file description.
		 * @param int $fd <p>File descriptors.</p>
		 * @param int $reactor_id <p>The Reactor thread ID where the connection is made.</p>
		 * @param bool $ignore_error <p>Whether to ignore errors, if set to true, connection information will be returned even if the connection is closed.</p>
		 * @return array <p>Returns information about the client connection.</p>
		 * @link https://php.net/manual/en/swoole-server.getclientinfo.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getClientInfo(int $fd, int $reactor_id = null, bool $ignore_error = null): array {}

		/**
		 * Get all of the established connections.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $start_fd
		 * @param int $pagesize
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.getclientlist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getClientList(int $start_fd, int $pagesize = null): array {}

		/**
		 * Get the error code of the most recent error.
		 * @return int
		 * @link https://php.net/manual/en/swoole-server.getlasterror.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getLastError(): int {}

		/**
		 * Check all the connections on the server.
		 * @param bool $if_close_connection
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-server.heartbeat.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function heartbeat(bool $if_close_connection): mixed {}

		/**
		 * Listen on the given IP and port, socket type.
		 * @param string $host
		 * @param int $port
		 * @param string $socket_type
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.listen.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function listen(string $host, int $port, string $socket_type): bool {}

		/**
		 * Register callback functions by event.
		 * @param string $event_name
		 * @param callable $callback
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-server-port.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event_name, callable $callback): \ReturnType {}

		/**
		 * Stop receiving data from the connection.
		 * @param int $fd
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.pause.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pause(int $fd): void {}

		/**
		 * Set the connection to be protected mode.
		 * @param int $fd
		 * @param bool $is_protected
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.protect.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function protect(int $fd, bool $is_protected = null): void {}

		/**
		 * Restart all the worker process.
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.reload.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function reload(): bool {}

		/**
		 * Start receving data from the connection.
		 * @param int $fd
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.resume.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function resume(int $fd): void {}

		/**
		 * Send data to the client.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $data
		 * @param int $reactor_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.send.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function send(int $fd, string $data, int $reactor_id = null): bool {}

		/**
		 * Send message to worker processes by ID.
		 * @param int $worker_id
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendmessage.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendMessage(int $worker_id, string $data): bool {}

		/**
		 * Send file to the connection.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $filename
		 * @param int $offset
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendfile(int $fd, string $filename, int $offset = null): bool {}

		/**
		 * Send data to the remote UDP address.
		 * @param string $ip
		 * @param int $port
		 * @param string $data
		 * @param string $server_socket
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendto.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendto(string $ip, int $port, string $data, string $server_socket = null): bool {}

		/**
		 * Send data to the remote socket in the blocking way.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendwait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendwait(int $fd, string $data): bool {}

		/**
		 * Set protocol of the server port.
		 * @param array $settings
		 * @return void
		 * @link https://php.net/manual/en/swoole-server-port.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(array $settings): void {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $command
		 * @param string $callback
		 * @param string $number_of_string_param
		 * @param string $type_of_array_param
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-redis-server.sethandler.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function setHandler(string $command, string $callback, string $number_of_string_param = null, string $type_of_array_param = null): \ReturnType {}

		/**
		 * Shutdown the master server process, this function can be called in worker processes.
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.shutdown.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function shutdown(): void {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-redis-server.start.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function start(): \ReturnType {}

		/**
		 * Get the stats of the Swoole server.
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.stats.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stats(): array {}

		/**
		 * Stop the Swoole server.
		 * @param int $worker_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.stop.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stop(int $worker_id = null): bool {}

		/**
		 * Send data to the task worker processes.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data
		 * @param int $dst_worker_id
		 * @param callable $callback
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-server.task.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function task(string $data, int $dst_worker_id = null, callable $callback = null): mixed {}

		/**
		 * Execute multiple tasks concurrently.
		 * @param array $tasks
		 * @param \double $timeout_ms
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.taskwaitmulti.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function taskWaitMulti(array $tasks, \double $timeout_ms = null): void {}

		/**
		 * Send data to the task worker processes in blocking way.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data
		 * @param float $timeout
		 * @param int $worker_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.taskwait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function taskwait(string $data, float $timeout = null, int $worker_id = null): void {}

		/**
		 * Repeats a given function at every given time-interval.
		 * @param int $interval_ms
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.tick.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function tick(int $interval_ms, callable $callback): void {}
	}

}

namespace Swoole {

	/**
	 * @link https://php.net/manual/en/class.swoole-serialize.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Serialize {

		/**
		 * Serialize the data.
		 * <p>Swoole provides a fast and high performance serialization module.</p>
		 * @param string $data
		 * @param int $is_fast
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-serialize.pack.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function pack(string $data, int $is_fast = null): \ReturnType {}

		/**
		 * Unserialize the data.
		 * <p>Unserialize the data.</p>
		 * @param string $data
		 * @param string $args
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-serialize.unpack.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function unpack(string $data, string $args = null): \ReturnType {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-server.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Server {

		/**
		 * Destory server port
		 * @return void
		 * @link https://php.net/manual/en/swoole-server-port.destruct.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function __destruct() {}

		/**
		 * Add a user defined swoole_process to the server.
		 * @param \swoole_process $process
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.addprocess.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addProcess(\swoole_process $process): bool {}

		/**
		 * Add a new listener to the server.
		 * @param string $host
		 * @param int $port
		 * @param string $socket_type
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.addlistener.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function addlistener(string $host, int $port, string $socket_type): void {}

		/**
		 * Trigger a callback function after a period of time.
		 * @param int $after_time_ms
		 * @param callable $callback
		 * @param string $param
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-server.after.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function after(int $after_time_ms, callable $callback, string $param = null): \ReturnType {}

		/**
		 * Bind the connection to a user defined user ID.
		 * @param int $fd
		 * @param int $uid
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.bind.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function bind(int $fd, int $uid): bool {}

		/**
		 * Stop and destory a timer.
		 * <p>Object-oriented style (method):</p><p>Stop and destory a timer</p>
		 * @param int $timer_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.cleartimer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function clearTimer(int $timer_id): void {}

		/**
		 * Close a connection to the client.
		 * @param int $fd
		 * @param bool $reset
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.close.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function close(int $fd, bool $reset = null): bool {}

		/**
		 * Check status of the connection.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.confirm.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function confirm(int $fd): bool {}

		/**
		 * Get the connection info by file description.
		 * @param int $fd
		 * @param int $reactor_id
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.connection-info.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connection_info(int $fd, int $reactor_id = null): array {}

		/**
		 * Get all of the established connections.
		 * @param int $start_fd
		 * @param int $pagesize
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.connection-list.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function connection_list(int $start_fd, int $pagesize = null): array {}

		/**
		 * Delay execution of the callback function at the end of current EventLoop.
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.defer.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function defer(callable $callback): void {}

		/**
		 * Check if the connection is existed.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.exist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exist(int $fd): bool {}

		/**
		 * Used in task process for sending result to the worker process when the task is finished.
		 * @param string $data
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.finish.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function finish(string $data): void {}

		/**
		 * Get the connection info by file description.
		 * @param int $fd <p>File descriptors.</p>
		 * @param int $reactor_id <p>The Reactor thread ID where the connection is made.</p>
		 * @param bool $ignore_error <p>Whether to ignore errors, if set to true, connection information will be returned even if the connection is closed.</p>
		 * @return array <p>Returns information about the client connection.</p>
		 * @link https://php.net/manual/en/swoole-server.getclientinfo.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getClientInfo(int $fd, int $reactor_id = null, bool $ignore_error = null): array {}

		/**
		 * Get all of the established connections.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $start_fd
		 * @param int $pagesize
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.getclientlist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getClientList(int $start_fd, int $pagesize = null): array {}

		/**
		 * Get the error code of the most recent error.
		 * @return int
		 * @link https://php.net/manual/en/swoole-server.getlasterror.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function getLastError(): int {}

		/**
		 * Check all the connections on the server.
		 * @param bool $if_close_connection
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-server.heartbeat.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function heartbeat(bool $if_close_connection): mixed {}

		/**
		 * Listen on the given IP and port, socket type.
		 * @param string $host
		 * @param int $port
		 * @param string $socket_type
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.listen.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function listen(string $host, int $port, string $socket_type): bool {}

		/**
		 * Register callback functions by event.
		 * @param string $event_name
		 * @param callable $callback
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-server-port.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event_name, callable $callback): \ReturnType {}

		/**
		 * Stop receiving data from the connection.
		 * @param int $fd
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.pause.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function pause(int $fd): void {}

		/**
		 * Set the connection to be protected mode.
		 * @param int $fd
		 * @param bool $is_protected
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.protect.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function protect(int $fd, bool $is_protected = null): void {}

		/**
		 * Restart all the worker process.
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.reload.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function reload(): bool {}

		/**
		 * Start receving data from the connection.
		 * @param int $fd
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.resume.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function resume(int $fd): void {}

		/**
		 * Send data to the client.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $data
		 * @param int $reactor_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.send.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function send(int $fd, string $data, int $reactor_id = null): bool {}

		/**
		 * Send message to worker processes by ID.
		 * @param int $worker_id
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendmessage.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendMessage(int $worker_id, string $data): bool {}

		/**
		 * Send file to the connection.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $filename
		 * @param int $offset
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendfile.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendfile(int $fd, string $filename, int $offset = null): bool {}

		/**
		 * Send data to the remote UDP address.
		 * @param string $ip
		 * @param int $port
		 * @param string $data
		 * @param string $server_socket
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendto.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendto(string $ip, int $port, string $data, string $server_socket = null): bool {}

		/**
		 * Send data to the remote socket in the blocking way.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $fd
		 * @param string $data
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.sendwait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function sendwait(int $fd, string $data): bool {}

		/**
		 * Set protocol of the server port.
		 * @param array $settings
		 * @return void
		 * @link https://php.net/manual/en/swoole-server-port.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(array $settings): void {}

		/**
		 * Shutdown the master server process, this function can be called in worker processes.
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.shutdown.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function shutdown(): void {}

		/**
		 * Start the Swoole server.
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.start.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function start(): void {}

		/**
		 * Get the stats of the Swoole server.
		 * @return array
		 * @link https://php.net/manual/en/swoole-server.stats.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stats(): array {}

		/**
		 * Stop the Swoole server.
		 * @param int $worker_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-server.stop.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function stop(int $worker_id = null): bool {}

		/**
		 * Send data to the task worker processes.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data
		 * @param int $dst_worker_id
		 * @param callable $callback
		 * @return mixed
		 * @link https://php.net/manual/en/swoole-server.task.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function task(string $data, int $dst_worker_id = null, callable $callback = null): mixed {}

		/**
		 * Execute multiple tasks concurrently.
		 * @param array $tasks
		 * @param \double $timeout_ms
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.taskwaitmulti.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function taskWaitMulti(array $tasks, \double $timeout_ms = null): void {}

		/**
		 * Send data to the task worker processes in blocking way.
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data
		 * @param float $timeout
		 * @param int $worker_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.taskwait.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function taskwait(string $data, float $timeout = null, int $worker_id = null): void {}

		/**
		 * Repeats a given function at every given time-interval.
		 * @param int $interval_ms
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-server.tick.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function tick(int $interval_ms, callable $callback): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-table.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Table implements \Iterator, \Countable {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-table.php
		 */
		const TYPE_INT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-table.php
		 */
		const TYPE_STRING = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.swoole-table.php
		 */
		const TYPE_FLOAT = 6;

		/**
		 * Set the data type and size of the columns.
		 * @param string $name
		 * @param string $type
		 * @param int $size
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-table.column.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function column(string $name, string $type, int $size = null): \ReturnType {}

		/**
		 * Count the rows in the table, or count all the elements in the table if $mode = 1.
		 * @return int
		 * @link https://php.net/manual/en/swoole-table.count.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function count(): int {}

		/**
		 * Create the swoole memory table.
		 * @return void
		 * @link https://php.net/manual/en/swoole-table.create.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function create(): void {}

		/**
		 * Get the current row.
		 * @return array
		 * @link https://php.net/manual/en/swoole-table.current.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function current(): array {}

		/**
		 * Decrement the value in the Swoole table by $row_key and $column_key.
		 * @param string $key
		 * @param string $column
		 * @param int $decrby
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-table.decr.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function decr(string $key, string $column, int $decrby = null): \ReturnType {}

		/**
		 * Delete a row in the Swoole table by $row_key.
		 * @param string $key
		 * @return void
		 * @link https://php.net/manual/en/swoole-table.del.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function del(string $key): void {}

		/**
		 * Destroy the Swoole table.
		 * @return void
		 * @link https://php.net/manual/en/swoole-table.destroy.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function destroy(): void {}

		/**
		 * Check if a row is existed by $row_key.
		 * @param string $key
		 * @return bool
		 * @link https://php.net/manual/en/swoole-table.exist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exist(string $key): bool {}

		/**
		 * Get the value in the Swoole table by $row_key and $column_key.
		 * @param string $row_key
		 * @param string $column_key
		 * @return int
		 * @link https://php.net/manual/en/swoole-table.get.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function get(string $row_key, string $column_key): int {}

		/**
		 * Increment the value by $row_key and $column_key.
		 * @param string $key
		 * @param string $column
		 * @param int $incrby
		 * @return void
		 * @link https://php.net/manual/en/swoole-table.incr.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function incr(string $key, string $column, int $incrby = null): void {}

		/**
		 * Get the key of current row.
		 * @return string
		 * @link https://php.net/manual/en/swoole-table.key.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function key(): string {}

		/**
		 * Iterator the next row.
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-table.next.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function next(): \ReturnType {}

		/**
		 * Rewind the iterator.
		 * @return void
		 * @link https://php.net/manual/en/swoole-table.rewind.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function rewind(): void {}

		/**
		 * Update a row of the table by $row_key.
		 * @param string $key
		 * @param array $value
		 * @return VOID
		 * @link https://php.net/manual/en/swoole-table.set.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function set(string $key, array $value): VOID {}

		/**
		 * Check current if the current row is valid.
		 * @return bool
		 * @link https://php.net/manual/en/swoole-table.valid.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function valid(): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-timer.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Timer {

		/**
		 * Trigger a callback function after a period of time.
		 * <p>Trigger a callback function after a period of time.</p>
		 * @param int $after_time_ms
		 * @param callable $callback
		 * @return void
		 * @link https://php.net/manual/en/swoole-timer.after.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function after(int $after_time_ms, callable $callback): void {}

		/**
		 * Delete a timer by timer ID.
		 * <p>Delete a timer by timer ID.</p>
		 * @param int $timer_id
		 * @return void
		 * @link https://php.net/manual/en/swoole-timer.clear.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function clear(int $timer_id): void {}

		/**
		 * Check if a timer is existed.
		 * <p>Check if a timer is existed.</p>
		 * @param int $timer_id
		 * @return bool
		 * @link https://php.net/manual/en/swoole-timer.exists.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function exists(int $timer_id): bool {}

		/**
		 * Repeats a given function at every given time-interval.
		 * @param int $interval_ms
		 * @param callable $callback
		 * @param string $param
		 * @return void
		 * @link https://php.net/manual/en/swoole-timer.tick.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function tick(int $interval_ms, callable $callback, string $param = null): void {}
	}

}

namespace Swoole\WebSocket {

	/**
	 * @link https://php.net/manual/en/class.swoole-websocket-frame.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Frame {
	}

	/**
	 * @link https://php.net/manual/en/class.swoole-websocket-server.php
	 * @since PECL swoole >= 1.9.0
	 */
	class Server extends \Swoole\Http\Server {

		/**
		 * Check if the file descriptor exists.
		 * @param int $fd
		 * @return bool
		 * @link https://php.net/manual/en/swoole-websocket-server.exist.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function exist(int $fd): bool {}

		/**
		 * Register event callback function
		 * <p>Register event callback function</p>
		 * @param string $event_name
		 * @param callable $callback
		 * @return ReturnType
		 * @link https://php.net/manual/en/swoole-websocket-server.on.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function on(string $event_name, callable $callback): \ReturnType {}

		/**
		 * Get a pack of binary data to send in a single frame.
		 * @param string $data
		 * @param string $opcode
		 * @param string $finish
		 * @param string $mask
		 * @return binary
		 * @link https://php.net/manual/en/swoole-websocket-server.pack.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function pack(string $data, string $opcode = null, string $finish = null, string $mask = null): \binary {}

		/**
		 * Push data to the remote client.
		 * @param string $fd
		 * @param string $data
		 * @param string $opcode
		 * @param string $finish
		 * @return void
		 * @link https://php.net/manual/en/swoole-websocket-server.push.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function push(string $fd, string $data, string $opcode = null, string $finish = null): void {}

		/**
		 * Start the swoole http server.
		 * <p>Start the swoole http server.</p>
		 * @return void
		 * @link https://php.net/manual/en/swoole-http-server.start.php
		 * @since PECL swoole >= 1.9.0
		 */
		public function start(): void {}

		/**
		 * Unpack the binary data received from the client.
		 * @param \binary $data
		 * @return string
		 * @link https://php.net/manual/en/swoole-websocket-server.unpack.php
		 * @since PECL swoole >= 1.9.0
		 */
		public static function unpack(\binary $data): string {}
	}

}
