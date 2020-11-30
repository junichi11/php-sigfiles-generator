<?php



namespace {

	/**
	 * Add an event to the set of monitored events
	 * <p><code>event_add()</code> schedules the execution of the <code>event</code> when the event specified in <code>event_set()</code> occurs or in at least the time specified by the <code>timeout</code> argument. If <code>timeout</code> was not specified, not timeout is set. The <code>event</code> must be already initalized by <code>event_set()</code> and <code>event_base_set()</code> functions. If the <code>event</code> already has a timeout set, it is replaced by the new one.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param int $timeout <p>Optional timeout (in microseconds).</p>
	 * @return bool <p><code>event_add()</code> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-add.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_add($event, int $timeout = -1): bool {}

	/**
	 * Destroy event base
	 * <p>Destroys the specified <code>event_base</code> and frees all the resources associated. Note that it's not possible to destroy an event base with events attached to it.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.event-base-free.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_free($event_base): void {}

	/**
	 * Handle events
	 * <p>Starts event loop for the specified event base.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @param int $flags <p>Optional parameter, which can take any combination of <b><code>EVLOOP_ONCE</code></b> and <b><code>EVLOOP_NONBLOCK</code></b>.</p>
	 * @return int <p><b>event_base_loop()</b> returns 0 on success, -1 on error and 1 if no events were registered.</p>
	 * @link http://php.net/manual/en/function.event-base-loop.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_loop($event_base, int $flags = 0): int {}

	/**
	 * Abort event loop
	 * <p>Abort the active event loop immediately. The behaviour is similar to <i>break</i> statement.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @return bool <p><b>event_base_loopbreak()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-base-loopbreak.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_loopbreak($event_base): bool {}

	/**
	 * Exit loop after a time
	 * <p>The next event loop iteration after the given timer expires will complete normally, then exit without blocking for events again.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @param int $timeout <p>Optional timeout parameter (in microseconds).</p>
	 * @return bool <p><b>event_base_loopexit()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-base-loopexit.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_loopexit($event_base, int $timeout = -1): bool {}

	/**
	 * Create and initialize new event base
	 * <p>Returns new event base, which can be used later in <code>event_base_set()</code>, <code>event_base_loop()</code> and other functions.</p>
	 * @return resource <p><b>event_base_new()</b> returns valid event base resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-base-new.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_new() {}

	/**
	 * Set the number of event priority levels
	 * <p>Sets the number of different event priority levels.</p><p>By default all events are scheduled with the same priority (<code>npriorities</code>/2). Using <b>event_base_priority_init()</b> you can change the number of event priority levels and then set a desired priority for each event.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @param int $npriorities <p>The number of event priority levels.</p>
	 * @return bool <p><b>event_base_priority_init()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-base-priority-init.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_base_priority_init($event_base, int $npriorities): bool {}

	/**
	 * Reinitialize the event base after a fork
	 * <p>Some event mechanisms do not survive across fork. The <code>event_base</code> needs to be reinitialized with this function.</p>
	 * @param resource $event_base <p>Valid event base resource that needs to be re-initialized.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.event-base-reinit.php
	 * @since PECL libevent >= 0.1.0
	 */
	function event_base_reinit($event_base): bool {}

	/**
	 * Associate event base with an event
	 * <p>Associates the <code>event_base</code> with the <code>event</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @return bool <p><b>event_base_set()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-base-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_set($event, $event_base): bool {}

	/**
	 * Associate buffered event with an event base
	 * <p>Assign the specified <code>bevent</code> to the <code>event_base</code>.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param resource $event_base <p>Valid event base resource.</p>
	 * @return bool <p><b>event_buffer_base_set()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-buffer-base-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_base_set($bevent, $event_base): bool {}

	/**
	 * Disable a buffered event
	 * <p>Disables the specified buffered event.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param int $events <p>Any combination of <b><code>EV_READ</code></b> and <b><code>EV_WRITE</code></b>.</p>
	 * @return bool <p><b>event_buffer_disable()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-buffer-disable.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_disable($bevent, int $events): bool {}

	/**
	 * Enable a buffered event
	 * <p>Enables the specified buffered event.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param int $events <p>Any combination of <b><code>EV_READ</code></b> and <b><code>EV_WRITE</code></b>.</p>
	 * @return bool <p><b>event_buffer_enable()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-buffer-enable.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_enable($bevent, int $events): bool {}

	/**
	 * Change a buffered event file descriptor
	 * <p>Changes the file descriptor on which the buffered event operates.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param resource $fd <p>Valid PHP stream, must be castable to file descriptor.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.event-buffer-fd-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_fd_set($bevent, $fd): void {}

	/**
	 * Destroy buffered event
	 * <p>Destroys the specified buffered event and frees all the resources associated.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.event-buffer-free.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_free($bevent): void {}

	/**
	 * Create new buffered event
	 * <p>Libevent provides an abstraction layer on top of the regular event API. Using buffered event you don't need to deal with the I/O manually, instead it provides input and output buffers that get filled and drained automatically.</p>
	 * @param resource $stream <p>Valid PHP stream resource. Must be castable to file descriptor.</p>
	 * @param mixed $readcb <p>Callback to invoke where there is data to read, or <code>NULL</code> if no callback is desired.</p>
	 * @param mixed $writecb <p>Callback to invoke where the descriptor is ready for writing, or <code>NULL</code> if no callback is desired.</p>
	 * @param mixed $errorcb <p>Callback to invoke where there is an error on the descriptor, cannot be <code>NULL</code>.</p>
	 * @param mixed $arg <p>An argument that will be passed to each of the callbacks (optional).</p>
	 * @return resource <p><b>event_buffer_new()</b> returns new buffered event resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-buffer-new.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_new($stream, $readcb, $writecb, $errorcb, $arg = NULL) {}

	/**
	 * Assign a priority to a buffered event
	 * <p>Assign a priority to the <code>bevent</code>.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param int $priority <p>Priority level. Cannot be less than zero and cannot exceed maximum priority level of the event base (see <code>event_base_priority_init()</code>).</p>
	 * @return bool <p><b>event_buffer_priority_set()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-buffer-priority-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_priority_set($bevent, int $priority): bool {}

	/**
	 * Read data from a buffered event
	 * <p>Reads data from the input buffer of the buffered event.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param int $data_size <p>Data size in bytes.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.event-buffer-read.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_read($bevent, int $data_size): string {}

	/**
	 * Set or reset callbacks for a buffered event
	 * <p>Sets or changes existing callbacks for the buffered <code>event</code>.</p>
	 * @param resource $event <p>Valid buffered event resource.</p>
	 * @param mixed $readcb <p>Callback to invoke where there is data to read, or <code>NULL</code> if no callback is desired.</p>
	 * @param mixed $writecb <p>Callback to invoke where the descriptor is ready for writing, or <code>NULL</code> if no callback is desired.</p>
	 * @param mixed $errorcb <p>Callback to invoke where there is an error on the descriptor, cannot be <code>NULL</code>.</p>
	 * @param mixed $arg <p>An argument that will be passed to each of the callbacks (optional).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.event-buffer-set-callback.php
	 * @since PECL libevent >= 0.0.4
	 */
	function event_buffer_set_callback($event, $readcb, $writecb, $errorcb, $arg = NULL): bool {}

	/**
	 * Set read and write timeouts for a buffered event
	 * <p>Sets the read and write timeouts for the specified buffered event.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param int $read_timeout <p>Read timeout (in seconds).</p>
	 * @param int $write_timeout <p>Write timeout (in seconds).</p>
	 * @return void
	 * @link http://php.net/manual/en/function.event-buffer-timeout-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_timeout_set($bevent, int $read_timeout, int $write_timeout): void {}

	/**
	 * Set the watermarks for read and write events
	 * <p>Sets the watermarks for read and write events. Libevent does not invoke read callback unless there is at least <code>lowmark</code> bytes in the input buffer; if the read buffer is beyond the <code>highmark</code>, reading is stopped. On output, the write callback is invoked whenever the buffered data falls below the <code>lowmark</code>.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param int $events <p>Any combination of <b><code>EV_READ</code></b> and <b><code>EV_WRITE</code></b>.</p>
	 * @param int $lowmark <p>Low watermark.</p>
	 * @param int $highmark <p>High watermark.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.event-buffer-watermark-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_watermark_set($bevent, int $events, int $lowmark, int $highmark): void {}

	/**
	 * Write data to a buffered event
	 * <p>Writes data to the specified buffered event. The data is appended to the output buffer and written to the descriptor when it becomes available for writing.</p>
	 * @param resource $bevent <p>Valid buffered event resource.</p>
	 * @param string $data <p>The data to be written.</p>
	 * @param int $data_size <p>Optional size parameter. <b>event_buffer_write()</b> writes all the <code>data</code> by default.</p>
	 * @return bool <p><b>event_buffer_write()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-buffer-write.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_write($bevent, string $data, int $data_size = -1): bool {}

	/**
	 * Remove an event from the set of monitored events
	 * <p>Cancels the <code>event</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @return bool <p><code>event_del()</code> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-del.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_del($event): bool {}

	/**
	 * Free event resource
	 * <p>Frees previously created event resource.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.event-free.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_free($event): void {}

	/**
	 * Create new event
	 * <p>Creates and returns a new event resource.</p>
	 * @return resource <p><b>event_new()</b> returns a new event resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-new.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_new() {}

	/**
	 * Assign a priority to an event
	 * <p>Assign a priority to the <code>event</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param int $priority <p>Priority level. Cannot be less than zero and cannot exceed maximum priority level of the event base (see <code>event_base_priority_init()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.event-priority-set.php
	 * @since PECL libevent >= 0.0.5
	 */
	function event_priority_set($event, int $priority): bool {}

	/**
	 * Prepare an event
	 * <p>Prepares the event to be used in <code>event_add()</code>. The event is prepared to call the function specified by the <code>callback</code> on the events specified in parameter <code>events</code>, which is a set of the following flags: <b><code>EV_TIMEOUT</code></b>, <b><code>EV_SIGNAL</code></b>, <b><code>EV_READ</code></b>, <b><code>EV_WRITE</code></b> and <b><code>EV_PERSIST</code></b>.</p><p>If <b><code>EV_SIGNAL</code></b> bit is set in parameter <code>events</code>, the <code>fd</code> is interpreted as signal number.</p><p>After initializing the event, use <code>event_base_set()</code> to associate the event with its event base.</p><p>In case of matching event, these three arguments are passed to the <code>callback</code> function:</p><p>Signal number or resource indicating the stream.</p><p>A flag indicating the event. Consists of the following flags: <b><code>EV_TIMEOUT</code></b>, <b><code>EV_SIGNAL</code></b>, <b><code>EV_READ</code></b>, <b><code>EV_WRITE</code></b> and <b><code>EV_PERSIST</code></b>.</p><p>Optional parameter, previously passed to <code>event_set()</code> as <code>arg</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param mixed $fd <p>Valid PHP stream resource. The stream must be castable to file descriptor, so you most likely won't be able to use any of filtered streams.</p>
	 * @param int $events <p>A set of flags indicating the desired event, can be <b><code>EV_READ</code></b> and/or <b><code>EV_WRITE</code></b>. The additional flag <b><code>EV_PERSIST</code></b> makes the event to persist until <code>event_del()</code> is called, otherwise the callback is invoked only once.</p>
	 * @param mixed $callback <p>Callback function to be called when the matching event occurs.</p>
	 * @param mixed $arg <p>Optional callback parameter.</p>
	 * @return bool <p><code>event_set()</code> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.event-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_set($event, $fd, int $events, $callback, $arg = NULL): bool {}

	/**
	 * Alias of event_add()
	 * <p>This function is an alias of: <code>event_add()</code>.</p>
	 * @param float $timeout <p>Timeout in seconds.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.event-timer-add.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_add(float $timeout = NULL): bool {}

	/**
	 * Alias of event_del()
	 * <p>This function is an alias of: <code>event_del()</code>.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.event-timer-del.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_del(): bool {}

	/**
	 * Alias of event_new()
	 * <p>This function is an alias of: <code>event_new()</code>.</p>
	 * @return resource
	 * @link http://php.net/manual/en/function.event-timer-new.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_new() {}

	/**
	 * Prepare a timer event
	 * <p>Prepares the timer event to be used in <code>event_add()</code>. The event is prepared to call the function specified by the <code>callback</code> when the event timeout elapses.</p><p>After initializing the event, use <code>event_base_set()</code> to associate the event with its event base.</p><p>In case of matching event, these three arguments are passed to the <code>callback</code> function:</p><p>Signal number or resource indicating the stream.</p><p>A flag indicating the event. This will always be <b><code>EV_TIMEOUT</code></b> for timer events.</p><p>Optional parameter, previously passed to <b>event_timer_set()</b> as <code>arg</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param callable $callback <p>Callback function to be called when the matching event occurs.</p>
	 * @param mixed $arg <p>Optional callback parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.event-timer-set.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_set($event, callable $callback, $arg = NULL): bool {}

	define('EV_PERSIST', null);

	define('EV_READ', null);

	define('EV_SIGNAL', null);

	define('EV_TIMEOUT', null);

	define('EV_WRITE', null);

	define('EVLOOP_NONBLOCK', null);

	define('EVLOOP_ONCE', null);

}
