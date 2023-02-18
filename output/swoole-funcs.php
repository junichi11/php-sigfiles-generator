<?php



namespace {

	/**
	 * Async and non-blocking hostname to IP lookup
	 * @param string $hostname <p>The host name.</p>
	 * @param callable $callback callback(<code>string</code> <code>$hostname</code>, <code>string</code> <code>$ip</code>): <code>mixed</code>   <code>hostname</code>  <p>The host name.</p>   <code>IP</code>  <p>The IP address.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-async-dns-lookup.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_async_dns_lookup(string $hostname, callable $callback): bool {}

	/**
	 * Read file stream asynchronously
	 * @param string $filename <p>The filename of the file being read.</p>
	 * @param callable $callback callback(<code>string</code> <code>$filename</code>, <code>string</code> <code>$content</code>): <code>mixed</code>   <code>filename</code>  <p>The name of the file.</p>   <code>content</code>  <p>The content readed from the file stream.</p>
	 * @param int $chunk_size <p>The chunk length.</p>
	 * @param int $offset <p>The offset.</p>
	 * @return bool <p>Whether the read is succeed.</p>
	 * @link https://php.net/manual/en/function.swoole-async-read.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_async_read(string $filename, callable $callback, int $chunk_size = 65536, int $offset = 0): bool {}

	/**
	 * Read a file asynchronously
	 * @param string $filename <p>The filename of the file being read.</p>
	 * @param callable $callback callback(<code>string</code> <code>$filename</code>, <code>string</code> <code>$content</code>): <code>mixed</code>   <code>filename</code>  <p>The name of the file.</p>   <code>content</code>  <p>The content read from the file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-async-readfile.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_async_readfile(string $filename, callable $callback): bool {}

	/**
	 * Update the async I/O options
	 * @param array $settings
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.swoole-async-set.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_async_set(array $settings): void {}

	/**
	 * Write data to a file stream asynchronously
	 * @param string $filename <p>The filename being written.</p>
	 * @param string $content <p>The content writing to the file.</p>
	 * @param int $offset <p>The offset.</p>
	 * @param callable $callback
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-async-write.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_async_write(string $filename, string $content, int $offset = null, callable $callback = null): bool {}

	/**
	 * Write data to a file asynchronously
	 * @param string $filename <p>The filename being written.</p>
	 * @param string $content <p>The content writing to the file.</p>
	 * @param callable $callback
	 * @param int $flags
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-async-writefile.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_async_writefile(string $filename, string $content, callable $callback = null, int $flags = 0): bool {}

	/**
	 * Clear errors in the socket or on the last error code
	 * <p>Clear errors in the socket or on the last error code.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.swoole-clear-error.php
	 * @since PECL swoole >= 4.6.0
	 */
	function swoole_clear_error(): void {}

	/**
	 * Get the file description which are ready to read/write or error
	 * @param array $read_array
	 * @param array $write_array
	 * @param array $error_array
	 * @param float $timeout
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-client-select.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_client_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = 0.5): int {}

	/**
	 * Get the number of CPU
	 * @return int <p>The number of CPU.</p>
	 * @link https://php.net/manual/en/function.swoole-cpu-num.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_cpu_num(): int {}

	/**
	 * Get the error code of the latest system call
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-errno.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_errno(): int {}

	/**
	 * Output error messages to the log
	 * <p>Output error messages to the log.</p>
	 * @param int $level <p>Log Level, constants can be used: <b><code>SWOOLE_LOG_DEBUG</code></b>, <b><code>SWOOLE_LOG_TRACE</code></b>, <b><code>SWOOLE_LOG_INFO</code></b>, <b><code>SWOOLE_LOG_NOTICE</code></b>, <b><code>SWOOLE_LOG_WARNING</code></b>, <b><code>SWOOLE_LOG_ERROR</code></b>, <b><code>SWOOLE_LOG_NONE</code></b></p>
	 * @param string $msg <p>Message content to be written to the log.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.swoole-error-log.php
	 * @since PECL swoole >= 4.5.8
	 */
	function swoole_error_log(int $level, string $msg): void {}

	/**
	 * Add new callback functions of a socket into the EventLoop
	 * @param int $fd
	 * @param callable $read_callback
	 * @param callable $write_callback
	 * @param int $events
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-event-add.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_add(int $fd, callable $read_callback = null, callable $write_callback = null, int $events = 0): int {}

	/**
	 * Add callback function to the next event loop
	 * @param callable $callback
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-event-defer.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_defer(callable $callback): bool {}

	/**
	 * Remove all event callback functions of a socket
	 * @param int $fd
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-event-del.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_del(int $fd): bool {}

	/**
	 * Exit the eventloop, only available at the client side
	 * @return void
	 * @link https://php.net/manual/en/function.swoole-event-exit.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_exit(): void {}

	/**
	 * Update the event callback functions of a socket
	 * @param int $fd
	 * @param callable $read_callback
	 * @param callable $write_callback
	 * @param int $events
	 * @return bool
	 * @link https://php.net/manual/en/function.swoole-event-set.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_set(int $fd, callable $read_callback = null, callable $write_callback = null, int $events = 0): bool {}

	/**
	 * Start the event loop
	 * @return void
	 * @link https://php.net/manual/en/function.swoole-event-wait.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_wait(): void {}

	/**
	 * Write data to a socket
	 * @param int $fd
	 * @param string $data
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.swoole-event-write.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_event_write(int $fd, string $data): bool {}

	/**
	 * Get the IPv4 IP addresses of each NIC on the machine
	 * @return array
	 * @link https://php.net/manual/en/function.swoole-get-local-ip.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_get_local_ip(): array {}

	/**
	 * Get the lastest error message
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-last-error.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_last_error(): int {}

	/**
	 * Load a swoole extension
	 * @param string $filename
	 * @return mixed
	 * @link https://php.net/manual/en/function.swoole-load-module.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_load_module(string $filename): mixed {}

	/**
	 * Select the file descriptions which are ready to read/write or error in the eventloop
	 * @param array $read_array
	 * @param array $write_array
	 * @param array $error_array
	 * @param float $timeout
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-select.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = null): int {}

	/**
	 * Set the process name
	 * @param string $process_name
	 * @param int $size
	 * @return void
	 * @link https://php.net/manual/en/function.swoole-set-process-name.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_set_process_name(string $process_name, int $size = 128): void {}

	/**
	 * Convert the Errno into error messages
	 * @param int $errno
	 * @param int $error_type
	 * @return string
	 * @link https://php.net/manual/en/function.swoole-strerror.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_strerror(int $errno, int $error_type = 0): string {}

	/**
	 * Trigger a one time callback function in the future
	 * @param int $ms
	 * @param callable $callback
	 * @param mixed $param
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-timer-after.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_timer_after(int $ms, callable $callback, mixed $param = null): int {}

	/**
	 * Check if a timer callback function is existed
	 * @param int $timer_id
	 * @return bool
	 * @link https://php.net/manual/en/function.swoole-timer-exists.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_timer_exists(int $timer_id): bool {}

	/**
	 * Trigger a timer tick callback function by time interval
	 * @param int $ms
	 * @param callable $callback
	 * @param mixed $param
	 * @return int
	 * @link https://php.net/manual/en/function.swoole-timer-tick.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_timer_tick(int $ms, callable $callback, mixed $param = null): int {}

	/**
	 * Get the version of Swoole
	 * @return string <p>The version of Swoole.</p>
	 * @link https://php.net/manual/en/function.swoole-version.php
	 * @since PECL swoole >= 1.9.0
	 */
	function swoole_version(): string {}

}
