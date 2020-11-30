<?php



namespace {

	/**
	 * Async and non-blocking hostname to IP lookup
	 * @param string $hostname <p>The host name.</p>
	 * @param callable $callback <code>mixed</code> callback ( string <code>$hostname</code> , string <code>$ip</code> )   <code>hostname</code>  <p>The host name.</p>   <code>IP</code>  <p>The IP address.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-async-dns-lookup.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_async_dns_lookup(string $hostname, callable $callback): bool {}

	/**
	 * Read file stream asynchronously
	 * @param string $filename <p>The filename of the file being read.</p>
	 * @param callable $callback <code>mixed</code> callback ( string <code>$filename</code> , string <code>$content</code> )   <code>filename</code>  <p>The name of the file.</p>   <code>content</code>  <p>The content readed from the file stream.</p>
	 * @param int $chunk_size <p>The chunk length.</p>
	 * @param int $offset <p>The offset.</p>
	 * @return bool <p>Whether the read is succeed.</p>
	 * @link http://php.net/manual/en/function.swoole-async-read.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_async_read(string $filename, callable $callback, int $chunk_size = 65536, int $offset = 0): bool {}

	/**
	 * Read a file asynchronously
	 * @param string $filename <p>The filename of the file being read.</p>
	 * @param callable $callback <code>mixed</code> callback ( string <code>$filename</code> , string <code>$content</code> )   <code>filename</code>  <p>The name of the file.</p>   <code>content</code>  <p>The content readed from the file.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-async-readfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_async_readfile(string $filename, callable $callback): bool {}

	/**
	 * Update the async I/O options
	 * @param array $settings
	 * @return void
	 * @link http://php.net/manual/en/function.swoole-async-set.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_async_set(array $settings): void {}

	/**
	 * Write data to a file stream asynchronously
	 * @param string $filename <p>The filename being written.</p>
	 * @param string $content <p>The content writing to the file.</p>
	 * @param int $offset <p>The offset.</p>
	 * @param callable $callback
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-async-write.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_async_write(string $filename, string $content, int $offset = NULL, callable $callback = NULL): bool {}

	/**
	 * Write data to a file asynchronously
	 * @param string $filename <p>The filename being written.</p>
	 * @param string $content <p>The content writing to the file.</p>
	 * @param callable $callback
	 * @param int $flags
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-async-writefile.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_async_writefile(string $filename, string $content, callable $callback = NULL, int $flags = 0): bool {}

	/**
	 * Get the file description which are ready to read/write or error
	 * @param array $read_array
	 * @param array $write_array
	 * @param array $error_array
	 * @param float $timeout
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-client-select.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_client_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = 0.5): int {}

	/**
	 * Get the number of CPU
	 * @return int <p>The number of CPU.</p>
	 * @link http://php.net/manual/en/function.swoole-cpu-num.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_cpu_num(): int {}

	/**
	 * Get the error code of the latest system call
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-errno.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_errno(): int {}

	/**
	 * Add new callback functions of a socket into the EventLoop
	 * @param int $fd
	 * @param callable $read_callback
	 * @param callable $write_callback
	 * @param int $events
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-event-add.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_add(int $fd, callable $read_callback = NULL, callable $write_callback = NULL, int $events = 0): int {}

	/**
	 * Add callback function to the next event loop
	 * @param callable $callback
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-event-defer.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_defer(callable $callback): bool {}

	/**
	 * Remove all event callback functions of a socket
	 * @param int $fd
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-event-del.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_del(int $fd): bool {}

	/**
	 * Exit the eventloop, only available at the client side
	 * @return void
	 * @link http://php.net/manual/en/function.swoole-event-exit.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_exit(): void {}

	/**
	 * Update the event callback functions of a socket
	 * @param int $fd
	 * @param callable $read_callback
	 * @param callable $write_callback
	 * @param int $events
	 * @return bool
	 * @link http://php.net/manual/en/function.swoole-event-set.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_set(int $fd, callable $read_callback = NULL, callable $write_callback = NULL, int $events = 0): bool {}

	/**
	 * Start the event loop
	 * @return void
	 * @link http://php.net/manual/en/function.swoole-event-wait.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_wait(): void {}

	/**
	 * Write data to a socket
	 * @param int $fd
	 * @param string $data
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.swoole-event-write.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_event_write(int $fd, string $data): bool {}

	/**
	 * Get the IPv4 IP addresses of each NIC on the machine
	 * @return array
	 * @link http://php.net/manual/en/function.swoole-get-local-ip.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_get_local_ip(): array {}

	/**
	 * Get the lastest error message
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-last-error.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_last_error(): int {}

	/**
	 * Load a swoole extension
	 * @param string $filename
	 * @return mixed
	 * @link http://php.net/manual/en/function.swoole-load-module.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_load_module(string $filename) {}

	/**
	 * Select the file descriptions which are ready to read/write or error in the eventloop
	 * @param array $read_array
	 * @param array $write_array
	 * @param array $error_array
	 * @param float $timeout
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-select.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = NULL): int {}

	/**
	 * Set the process name
	 * @param string $process_name
	 * @param int $size
	 * @return void
	 * @link http://php.net/manual/en/function.swoole-set-process-name.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_set_process_name(string $process_name, int $size = 128): void {}

	/**
	 * Convert the Errno into error messages
	 * @param int $errno
	 * @param int $error_type
	 * @return string
	 * @link http://php.net/manual/en/function.swoole-strerror.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_strerror(int $errno, int $error_type = 0): string {}

	/**
	 * Trigger a one time callback function in the future
	 * @param int $ms
	 * @param callable $callback
	 * @param mixed $param
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-timer-after.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_timer_after(int $ms, callable $callback, $param = NULL): int {}

	/**
	 * Check if a timer callback function is existed
	 * @param int $timer_id
	 * @return bool
	 * @link http://php.net/manual/en/function.swoole-timer-exists.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_timer_exists(int $timer_id): bool {}

	/**
	 * Trigger a timer tick callback function by time interval
	 * @param int $ms
	 * @param callable $callback
	 * @param mixed $param
	 * @return int
	 * @link http://php.net/manual/en/function.swoole-timer-tick.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_timer_tick(int $ms, callable $callback, $param = NULL): int {}

	/**
	 * Get the version of Swoole
	 * @return string <p>The version of Swoole.</p>
	 * @link http://php.net/manual/en/function.swoole-version.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL swoole >= 1.9.0
	 */
	function swoole_version(): string {}

}
