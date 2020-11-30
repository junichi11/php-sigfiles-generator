<?php



namespace {

	/**
	 * <p><b>Event</b> class represents and event firing on a file descriptor being ready to read from or write to; a file descriptor becoming ready to read from or write to(edge-triggered I/O only); a timeout expiring; a signal occuring; a user-triggered event.</p>
	 * <p>Every event is associated with EventBase . However, event will never fire until it is <i>added</i> (via <code>Event::add()</code> ). An added event remains in <i>pending</i> state until the registered event occurs, thus turning it to <i>active</i> state. To handle events user may register a callback which is called when event becomes active. If event is configured <i>persistent</i> , it remains pending. If it is not persistent, it stops being pending when it's callback runs. <code>Event::del()</code> method <i>deletes</i> event, thus making it non-pending. By means of <code>Event::add()</code> method it could be added again.</p>
	 * @link http://php.net/manual/en/class.event.php
	 * @since PECL event >= 1.2.6-beta
	 */
	final class Event {

		/**
		 * @var integer <p>Indicates that the event should be edge-triggered, if the underlying event base backend supports edge-triggered events. This affects the semantics of <b><code>Event::READ</code></b> and <b><code>Event::WRITE</code></b> .</p>
		 * @link http://php.net/manual/en/class.event.php
		 */
		const ET = 32;

		/**
		 * @var integer <p>Indicates that the event is persistent. See About event persistence .</p>
		 * @link http://php.net/manual/en/class.event.php
		 */
		const PERSIST = 16;

		/**
		 * @var integer <p>This flag indicates an event that becomes active when the provided file descriptor(usually a stream resource, or socket) is ready for reading.</p>
		 * @link http://php.net/manual/en/class.event.php
		 */
		const READ = 2;

		/**
		 * @var integer <p>This flag indicates an event that becomes active when the provided file descriptor(usually a stream resource, or socket) is ready for reading.</p>
		 * @link http://php.net/manual/en/class.event.php
		 */
		const WRITE = 4;

		/**
		 * @var integer <p>Used to implement signal detection. See "Constructing signal events" below.</p>
		 * @link http://php.net/manual/en/class.event.php
		 */
		const SIGNAL = 8;

		/**
		 * @var integer <p>This flag indicates an event that becomes active after a timeout elapses.</p> <p>The <b><code>Event::TIMEOUT</code></b> flag is ignored when constructing an event: one can either set a timeout when event is <i>added</i> , or not. It is set in the <i>$what</i> argument to the callback function when a timeout has occurred.</p>
		 * @link http://php.net/manual/en/class.event.php
		 */
		const TIMEOUT = 1;

		/**
		 * @var bool <p>Whether event is pending. See About event persistence .</p>
		 * @link http://php.net/manual/en/class.event.php#event.props.pending
		 */
		public $pending;

		/**
		 * Constructs Event object
		 * <p>Constructs Event object.</p>
		 * @param \EventBase $base <p>The event base to associate with.</p>
		 * @param mixed $fd <p>stream resource, socket resource, or numeric file descriptor. For timer events pass <b><code>-1</code></b> . For signal events pass the signal number, e.g. <b><code>SIGHUP</code></b> .</p>
		 * @param int $what <p>Event flags. See Event flags .</p>
		 * @param callable $cb <p>The event callback. See Event callbacks .</p>
		 * @param mixed $arg <p>Custom data. If specified, it will be passed to the callback when event triggers.</p>
		 * @return self <p>Returns Event object.</p>
		 * @link http://php.net/manual/en/event.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventBase $base, $fd, int $what, callable $cb, $arg = NULL) {}

		/**
		 * Makes event pending
		 * <p>Marks event pending. Non-pending event will never occur, and the event callback will never be called. In conjuction with <code>Event::del()</code> an event could be re-scheduled by user at any time.</p><p>If <b>Event::add()</b> is called on an already pending event, libevent will leave it pending and re-schedule it with the given timeout(if specified). If in this case timeout is not specified, <b>Event::add()</b> has no effect.</p>
		 * @param float $timeout <p>Timeout in seconds.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/event.add.php
		 * @since PECL libevent >= 0.0.1
		 */
		public function add(float $timeout = NULL): bool {}

		/**
		 * Makes signal event pending
		 * <p><b>Event::addSignal()</b> is an alias of <code>Event::add()</code></p>
		 * @param float $timeout
		 * @return bool
		 * @link http://php.net/manual/en/event.addsignal.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function addSignal(float $timeout = NULL): bool {}

		/**
		 * Makes timer event pending
		 * <p><b>Event::addTimer()</b> is an alias of <code>Event::add()</code></p>
		 * @param float $timeout
		 * @return bool
		 * @link http://php.net/manual/en/event.addtimer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function addTimer(float $timeout = NULL): bool {}

		/**
		 * Makes event non-pending
		 * <p>Removes an event from the set of monitored events, i.e. makes it non-pending.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/event.del.php
		 * @since PECL libevent >= 0.0.1
		 */
		public function del(): bool {}

		/**
		 * Makes signal event non-pending
		 * <p><b>Event::delSignal()</b> is an alias of <code>Event::del()</code></p>
		 * @return bool
		 * @link http://php.net/manual/en/event.delsignal.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function delSignal(): bool {}

		/**
		 * Makes timer event non-pending
		 * <p><b>Event::delTimer()</b> is an alias of <code>Event::del()</code> .</p>
		 * @return bool
		 * @link http://php.net/manual/en/event.deltimer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function delTimer(): bool {}

		/**
		 * Make event non-pending and free resources allocated for this event
		 * <p>Removes event from the list of events monitored by libevent, and free resources allocated for the event.</p><p>The <b>Event::free()</b> method currently doesn't destruct the object itself. To destruct the object completely call <code>unset()</code> , or assign <b><code>NULL</code></b>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/event.free.php
		 * @since PECL libevent >= 0.0.1
		 */
		public function free(): void {}

		/**
		 * Returns array with of the names of the methods supported in this version of Libevent
		 * <p>Returns array with of the names of the methods(backends) supported in this version of Libevent.</p>
		 * @return array <p>Returns array.</p>
		 * @link http://php.net/manual/en/event.getsupportedmethods.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function getSupportedMethods(): array {}

		/**
		 * Detects whether event is pending or scheduled
		 * <p>Detects whether event is pending or scheduled</p>
		 * @param int $flags <p>One of, or a composition of the following constants: <b><code>Event::READ</code></b> , <b><code>Event::WRITE</code></b> , <b><code>Event::TIMEOUT</code></b> , <b><code>Event::SIGNAL</code></b> .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if event is pending or scheduled. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/event.pending.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function pending(int $flags): bool {}

		/**
		 * Re-configures event
		 * <p>Re-configures event. Note, this function doesn't invoke obsolete libevent's event_set. It calls event_assign instead.</p>
		 * @param \EventBase $base <p>The event base to associate the event with.</p>
		 * @param mixed $fd <p>Stream resource, socket resource, or numeric file descriptor. For timer events pass <b><code>-1</code></b> . For signal events pass the signal number, e.g. <b><code>SIGHUP</code></b> .</p>
		 * @param int $what <p>See Event flags .</p>
		 * @param callable $cb <p>The event callback. See Event callbacks .</p>
		 * @param mixed $arg <p>Custom data associated with the event. It will be passed to the callback when the event becomes active.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/event.set.php
		 * @since PECL libevent >= 0.0.1
		 */
		public function set(\EventBase $base, $fd, int $what = NULL, callable $cb = NULL, $arg = NULL): bool {}

		/**
		 * Set event priority
		 * <p>Set event priority.</p>
		 * @param int $priority <p>The event priority.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/event.setpriority.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setPriority(int $priority): bool {}

		/**
		 * Re-configures timer event
		 * <p>Re-configures timer event. Note, this function doesn't invoke obsolete libevent's <i>event_set</i> . It calls <i>event_assign</i> instead.</p>
		 * @param \EventBase $base <p>The event base to associate with.</p>
		 * @param callable $cb <p>The timer event callback. See Event callbacks .</p>
		 * @param mixed $arg <p>Custom data. If specified, it will be passed to the callback when event triggers.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/event.settimer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setTimer(\EventBase $base, callable $cb, $arg = NULL): bool {}

		/**
		 * Constructs signal event object
		 * <p>Constructs signal event object. This is a straightforward method to create a signal event. Note, the generic <code>Event::__construct()</code> method can contruct signal event objects too.</p>
		 * @param \EventBase $base <p>The associated event base object.</p>
		 * @param int $signum <p>The signal number.</p>
		 * @param callable $cb <p>The signal event callback. See Event callbacks .</p>
		 * @param mixed $arg <p>Custom data. If specified, it will be passed to the callback when event triggers.</p>
		 * @return Event <p>Returns Event object on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/event.signal.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function signal(\EventBase $base, int $signum, callable $cb, $arg = NULL): \Event {}

		/**
		 * Constructs timer event object
		 * <p>Constructs timer event object. This is a straightforward method to create a timer event. Note, the generic <code>Event::__construct()</code> method can contruct signal event objects too.</p>
		 * @param \EventBase $base <p>The associated event base object.</p>
		 * @param callable $cb <p>The signal event callback. See Event callbacks .</p>
		 * @param mixed $arg <p>Custom data. If specified, it will be passed to the callback when event triggers.</p>
		 * @return Event <p>Returns Event object on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/event.timer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function timer(\EventBase $base, callable $cb, $arg = NULL): \Event {}
	}

	/**
	 * <p><b>EventBase</b> class represents libevent's event base structure. It holds a set of events and can poll to determine which events are active.</p>
	 * <p>Each event base has a <i>method</i> , or a <i>backend</i> that it uses to determine which events are ready. The recognized methods are: <i>select</i> , <i>poll</i> , <i>epoll</i> , <i>kqueue</i> , <i>devpoll</i> , <i>evport</i> and <i>win32</i> .</p>
	 * <p>To configure event base to use, or avoid specific backend EventConfig class can be used.</p>
	 * <p>Do <i>NOT</i> destroy the <b>EventBase</b> object as long as resources of the associated <i>Event</i> objects are not released. Otherwise, it will lead to unpredictable results!</p>
	 * @link http://php.net/manual/en/class.eventbase.php
	 * @since PECL event >= 1.2.6-beta
	 */
	final class EventBase {

		/**
		 * @var integer <p>Flag used with <code>EventBase::loop()</code> method which means: "block until libevent has an active event, then exit once all active events have had their callbacks run".</p>
		 * @link http://php.net/manual/en/class.eventbase.php
		 */
		const LOOP_ONCE = 1;

		/**
		 * @var integer <p>Flag used with <code>EventBase::loop()</code> method which means: "do not block: see which events are ready now, run the callbacks of the highest-priority ones, then exit".</p>
		 * @link http://php.net/manual/en/class.eventbase.php
		 */
		const LOOP_NONBLOCK = 2;

		/**
		 * @var integer <p>Configuration flag. Do not allocate a lock for the event base, even if we have locking set up".</p>
		 * @link http://php.net/manual/en/class.eventbase.php
		 */
		const NOLOCK = 1;

		/**
		 * @var integer <p>Windows-only configuration flag. Enables the IOCP dispatcher at startup.</p>
		 * @link http://php.net/manual/en/class.eventbase.php
		 */
		const STARTUP_IOCP = 4;

		/**
		 * @var integer <p>Configuration flag. Instead of checking the current time every time the event loop is ready to run timeout callbacks, check after each timeout callback.</p>
		 * @link http://php.net/manual/en/class.eventbase.php
		 */
		const NO_CACHE_TIME = 8;

		/**
		 * @var integer <p>If we are using the <i>epoll</i> backend, this flag says that it is safe to use Libevent's internal change-list code to batch up adds and deletes in order to try to do as few syscalls as possible.</p> <p>Setting this flag can make code run faster, but it may trigger a Linux bug: it is not safe to use this flag if one has any fds cloned by dup(), or its variants. Doing so will produce strange and hard-to-diagnose bugs.</p> <p>This flag can also be activated by settnig the <i>EVENT_EPOLL_USE_CHANGELIST</i> environment variable.</p> <p>This flag has no effect if one winds up using a backend other than <i>epoll</i> .</p>
		 * @link http://php.net/manual/en/class.eventbase.php
		 */
		const EPOLL_USE_CHANGELIST = 16;

		/**
		 * Constructs EventBase object
		 * <p>Constructs EventBase object</p>
		 * @param \EventConfig $cfg <p>Optional EventConfig object.</p>
		 * @return self <p>Returns EventBase object.</p>
		 * @link http://php.net/manual/en/eventbase.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventConfig $cfg = NULL) {}

		/**
		 * Dispatch pending events
		 * <p>Wait for events to become active, and run their callbacks. The same as <code>EventBase::loop()</code> with no flags set.</p><p></p><p>Do <i>NOT</i> destroy the EventBase object as long as resources of the associated <i>Event</i> objects are not released. Otherwise, it will lead to unpredictable results!</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.dispatch.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function dispatch(): void {}

		/**
		 * Stop dispatching events
		 * <p>Tells event base to stop optionally after given number of seconds.</p>
		 * @param float $timeout <p>Optional number of seconds after which the event base should stop dispatching events.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.exit.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function exit(float $timeout = NULL): bool {}

		/**
		 * Free resources allocated for this event base
		 * <p>Deallocates resources allocated by libevent for the EventBase object.</p><p>The <b>EventBase::free()</b> method doesn't destruct the object itself. To destruct the object completely call <code>unset()</code> , or assign <b><code>NULL</code></b>.</p><p>This method does not deallocate or detach any of the events that are currently associated with the EventBase object, or close any of their sockets - beware.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbase.free.php
		 * @since PECL event >= 1.10.0
		 */
		public function free(): void {}

		/**
		 * Returns bitmask of features supported
		 * <p>Returns bitmask of features supported.</p>
		 * @return int <p>Returns integer representing a bitmask of supported features. See EventConfig::FEATURE_&#42; constants .</p>
		 * @link http://php.net/manual/en/eventbase.getfeatures.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getFeatures(): int {}

		/**
		 * Returns event method in use
		 * @return string <p>String representing used event method(backend).</p>
		 * @link http://php.net/manual/en/eventbase.getmethod.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getMethod(): string {}

		/**
		 * Returns the current event base time
		 * <p>On success returns the current time(as returned by <i>gettimeofday()</i> ), looking at the cached value in <i>base</i> if possible, and calling <i>gettimeofday()</i> or <i>clock_gettime()</i> as appropriate if there is no cached time.</p>
		 * @return float <p>Returns the current <i>event base</i> time. On failure returns <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.gettimeofdaycached.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getTimeOfDayCached(): float {}

		/**
		 * Checks if the event loop was told to exit
		 * <p>Checks if the event loop was told to exit by <code>EventBase::exit()</code> .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b>, event loop was told to exit by <code>EventBase::exit()</code> . Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.gotexit.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function gotExit(): bool {}

		/**
		 * Checks if the event loop was told to exit
		 * <p>Checks if the event loop was told to exit by <code>EventBase::stop()</code> .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b>, event loop was told to stop by <code>EventBase::stop()</code> . Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.gotstop.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function gotStop(): bool {}

		/**
		 * Dispatch pending events
		 * <p>Wait for events to become active, and run their callbacks.</p><p></p><p>Do <i>NOT</i> destroy the EventBase object as long as resources of the associated <i>Event</i> objects are not released. Otherwise, it will lead to unpredictable results!</p>
		 * @param int $flags <p>Optional flags. One of <i>EventBase::LOOP_&#42;</i> constants. See EventBase constants .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.loop.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function loop(int $flags = NULL): bool {}

		/**
		 * Sets number of priorities per event base
		 * <p>Sets number of priorities per event base.</p>
		 * @param int $n_priorities <p>The number of priorities per event base.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.priorityinit.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function priorityInit(int $n_priorities): bool {}

		/**
		 * Re-initialize event base(after a fork)
		 * <p>Re-initialize event base. Should be called after a fork.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.reinit.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function reInit(): bool {}

		/**
		 * Tells event_base to stop dispatching events
		 * <p>Tells event_base to stop dispatching events</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbase.stop.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function stop(): bool {}
	}

	/**
	 * <p><b>EventBuffer</b> represents Libevent's "evbuffer", an utility functionality for buffered I/O.</p>
	 * <p>Event buffers are meant to be generally useful for doing the "buffer" part of buffered network I/O.</p>
	 * @link http://php.net/manual/en/class.eventbuffer.php
	 * @since PECL event >= 1.5.0
	 */
	class EventBuffer {

		/**
		 * @var integer <p>The end of line is any sequence of any number of carriage return and linefeed characters. This format is not very useful; it exists mainly for backward compatibility.</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php
		 */
		const EOL_ANY = 0;

		/**
		 * @var integer <p>The end of the line is an optional carriage return, followed by a linefeed. (In other words, it is either a <i>"\r\n"</i> or a <i>"\n"</i> .) This format is useful in parsing text-based Internet protocols, since the standards generally prescribe a <i>"\r\n"</i> line-terminator, but nonconformant clients sometimes say just <i>"\n"</i> .</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php
		 */
		const EOL_CRLF = 1;

		/**
		 * @var integer <p>The end of a line is a single carriage return, followed by a single linefeed. (This is also known as <i>"\r\n"</i> . The ASCII values are <b><code>0x0D</code></b> <b><code>0x0A</code></b> ).</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php
		 */
		const EOL_CRLF_STRICT = 2;

		/**
		 * @var integer <p>The end of a line is a single linefeed character. (This is also known as <i>"\n"</i> . It is ASCII value is <b><code>0x0A</code></b> .)</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php
		 */
		const EOL_LF = 3;

		/**
		 * @var integer <p>Flag used as argument of <b>EventBuffer::setPosition()</b> method. If this flag specified, the position pointer is moved to an absolute position within the buffer.</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php
		 */
		const PTR_SET = 0;

		/**
		 * @var integer <p>The same as <b><code>EventBuffer::PTR_SET</code></b> , except this flag causes <b>EventBuffer::setPosition()</b> method to move position forward up to the specified number of bytes(instead of setting absolute position).</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php
		 */
		const PTR_ADD = 1;

		/**
		 * @var int <p>The number of bytes stored in an event buffer.</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php#eventbuffer.props.length
		 */
		public $length;

		/**
		 * @var int <p>The number of bytes stored contiguously at the front of the buffer. The bytes in a buffer may be stored in multiple separate chunks of memory; the property returns the number of bytes currently stored in the first chunk.</p>
		 * @link http://php.net/manual/en/class.eventbuffer.php#eventbuffer.props.contiguous-space
		 */
		public $contiguous_space;

		/**
		 * Constructs EventBuffer object
		 * <p>Constructs EventBuffer object</p>
		 * @return self <p>Returns EventBuffer object.</p>
		 * @link http://php.net/manual/en/eventbuffer.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct() {}

		/**
		 * Append data to the end of an event buffer
		 * <p>Append data to the end of an event buffer.</p>
		 * @param string $data <p>String to be appended to the end of the buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.add.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function add(string $data): bool {}

		/**
		 * Move all data from a buffer provided to the current instance of EventBuffer
		 * <p>Move all data from the buffer provided in <code>buf</code> parameter to the end of current EventBuffer . This is a destructive add. The data from one buffer moves into the other buffer. However, no unnecessary memory copies occur.</p>
		 * @param \EventBuffer $buf <p>The source EventBuffer object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.addbuffer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function addBuffer(\EventBuffer $buf): bool {}

		/**
		 * Moves the specified number of bytes from a source buffer to the end of the current buffer
		 * <p>Moves the specified number of bytes from a source buffer to the end of the current buffer. If there are fewer number of bytes, it moves all the bytes available from the source buffer.</p>
		 * @param \EventBuffer $buf <p>Source buffer.</p>
		 * @param int $len
		 * @return int <p>Returns the number of bytes read.</p>
		 * @link http://php.net/manual/en/eventbuffer.appendfrom.php
		 * @since PECL event >= 1.6.0
		 */
		public function appendFrom(\EventBuffer $buf, int $len): int {}

		/**
		 * Copies out specified number of bytes from the front of the buffer
		 * <p>Behaves just like <code>EventBuffer::read()</code> , but does not drain any data from the buffer. I.e. it copies the first <code>max_bytes</code> bytes from the front of the buffer into <code>data</code> . If there are fewer than <code>max_bytes</code> bytes available, the function copies all the bytes there are.</p>
		 * @param string $data <p>Output string.</p>
		 * @param int $max_bytes <p>The number of bytes to copy.</p>
		 * @return int <p>Returns the number of bytes copied, or <b><code>-1</code></b> on failure.</p>
		 * @link http://php.net/manual/en/eventbuffer.copyout.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function copyout(string &$data, int $max_bytes): int {}

		/**
		 * Removes specified number of bytes from the front of the buffer without copying it anywhere
		 * <p>Behaves as <code>EventBuffer::read()</code> , except that it does not copy the data: it just removes it from the front of the buffer.</p>
		 * @param int $len <p>The number of bytes to remove from the buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.drain.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function drain(int $len): bool {}

		/**
		 * 
		 * <p>Enable locking on an EventBuffer so that it can safely be used by multiple threads at the same time. When locking is enabled, the lock will be held when callbacks are invoked. This could result in deadlock if you aren't careful. Plan accordingly!</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbuffer.enablelocking.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function enableLocking(): void {}

		/**
		 * Reserves space in buffer
		 * <p>Alters the last chunk of memory in the buffer, or adds a new chunk, such that the buffer is now large enough to contain <code>len</code> bytes without any further allocations.</p>
		 * @param int $len <p>The number of bytes to reserve for the buffer</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.expand.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function expand(int $len): bool {}

		/**
		 * Prevent calls that modify an event buffer from succeeding
		 * <p>Prevent calls that modify an event buffer from succeeding</p>
		 * @param bool $at_front <p>Whether to disable changes to the front or end of the buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.freeze.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function freeze(bool $at_front): bool {}

		/**
		 * Acquires a lock on buffer
		 * <p>Acquires a lock on buffer. Can be used in pair with <code>EventBuffer::unlock()</code> to make a set of operations atomic, i.e. thread-safe. Note, it is not needed to lock buffers for <i>individual</i> operations. When locking is enabled(see <code>EventBuffer::enableLocking()</code> ), individual operations on event buffers are already atomic.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbuffer.lock.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function lock(): void {}

		/**
		 * Prepend data to the front of the buffer
		 * <p>Prepend data to the front of the buffer.</p>
		 * @param string $data <p>String to be prepended to the front of the buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.prepend.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function prepend(string $data): bool {}

		/**
		 * Moves all data from source buffer to the front of current buffer
		 * <p>Behaves as <code>EventBuffer::addBuffer()</code> , except that it moves data to the front of the buffer.</p>
		 * @param \EventBuffer $buf <p>Source buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.prependbuffer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function prependBuffer(\EventBuffer $buf): bool {}

		/**
		 * Linearizes data within buffer and returns it's contents as a string
		 * <p>"Linearizes" the first <code>size</code> bytes of the buffer, copying or moving them as needed to ensure that they are all contiguous and occupying the same chunk of memory. If size is negative, the function linearizes the entire buffer.</p><p>Calling <b>EventBuffer::pullup()</b> with a large size can be quite slow, since it potentially needs to copy the entire buffer's contents.</p>
		 * @param int $size <p>The number of bytes required to be contiguous within the buffer.</p>
		 * @return string <p>If <code>size</code> is greater than the number of bytes in the buffer, the function returns <b><code>NULL</code></b>. Otherwise, <b>EventBuffer::pullup()</b> returns string.</p>
		 * @link http://php.net/manual/en/eventbuffer.pullup.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function pullup(int $size): string {}

		/**
		 * Read data from an evbuffer and drain the bytes read
		 * <p>Read the first <code>max_bytes</code> from the buffer and drain the bytes read. If more <code>max_bytes</code> are requested than are available in the buffer, it only extracts as many bytes as available.</p>
		 * @param int $max_bytes <p>Maxmimum number of bytes to read from the buffer.</p>
		 * @return string <p>Returns string read, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/eventbuffer.read.php
		 * @since PECL event >= 1.6.0
		 */
		public function read(int $max_bytes): string {}

		/**
		 * Extracts a line from the front of the buffer
		 * <p>Extracts a line from the front of the buffer and returns it in a newly allocated string. If there is not a whole line to read, the function returns <b><code>NULL</code></b>. The line terminator is not included in the copied string.</p>
		 * @param int $eol_style <p>One of EventBuffer:EOL_&#42; constants .</p>
		 * @return string <p>On success returns the line read from the buffer, otherwise <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.readline.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function readLine(int $eol_style): string {}

		/**
		 * Scans the buffer for an occurrence of a string
		 * <p>Scans the buffer for an occurrence of the string <code>what</code> . It returns numeric position of the string, or <b><code>FALSE</code></b> if the string was not found.</p><p>If the <code>start</code> argument is provided, it points to the position at which the search should begin; otherwise, the search is performed from the start of the string. If <code>end</code> argument provided, the search is performed between start and end buffer positions.</p>
		 * @param string $what <p>String to search.</p>
		 * @param int $start <p>Start search position.</p>
		 * @param int $end <p>End search position.</p>
		 * @return mixed <p>Returns numeric position of the first occurance of the string in the buffer, or <b><code>FALSE</code></b> if string is not found.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link http://php.net/manual/en/eventbuffer.search.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function search(string $what, int $start = -1, int $end = -1) {}

		/**
		 * Scans the buffer for an occurrence of an end of line
		 * <p>Scans the buffer for an occurrence of an end of line specified by <code>eol_style</code> parameter . It returns numeric position of the string, or <b><code>FALSE</code></b> if the string was not found.</p><p>If the <code>start</code> argument is provided, it represents the position at which the search should begin; otherwise, the search is performed from the start of the string. If <code>end</code> argument provided, the search is performed between start and end buffer positions.</p>
		 * @param int $start <p>Start search position.</p>
		 * @param int $eol_style <p>One of EventBuffer:EOL_&#42; constants .</p>
		 * @return mixed <p>Returns numeric position of the first occurance of end-of-line symbol in the buffer, or <b><code>FALSE</code></b> if not found.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link http://php.net/manual/en/eventbuffer.searcheol.php
		 * @since PECL event >= 1.5.0
		 */
		public function searchEol(int $start = -1, int $eol_style = 
     EventBuffer::EOL_ANY) {}

		/**
		 * Substracts a portion of the buffer data
		 * <p>Substracts up to <code>length</code> bytes of the buffer data beginning at <code>start</code> position.</p>
		 * @param int $start <p>The start position of data to be substracted.</p>
		 * @param int $length <p>Maximum number of bytes to substract.</p>
		 * @return string <p>Returns the data substracted as a <code>string</code> on success, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/eventbuffer.substr.php
		 * @since PECL event >= 1.6.0
		 */
		public function substr(int $start, int $length = NULL): string {}

		/**
		 * Re-enable calls that modify an event buffer
		 * <p>Re-enable calls that modify an event buffer.</p>
		 * @param bool $at_front <p>Whether to enable events at the front or at the end of the buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.unfreeze.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function unfreeze(bool $at_front): bool {}

		/**
		 * Releases lock acquired by EventBuffer::lock
		 * <p>Releases lock acquired by <code>EventBuffer::lock()</code> .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbuffer.unlock.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function unlock(): bool {}

		/**
		 * Write contents of the buffer to a file or socket
		 * <p>Write contents of the buffer to a file descriptor. The buffer will be drained after the bytes have been successfully written.</p>
		 * @param mixed $fd <p>Socket resource, stream or numeric file descriptor associated normally associated with a socket.</p>
		 * @param int $howmuch <p>The maximum number of bytes to write.</p>
		 * @return int <p>Returns the number of bytes written, or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/eventbuffer.write.php
		 * @since PECL event >= 1.6.0
		 */
		public function write($fd, int $howmuch = NULL): int {}
	}

	/**
	 * <p>Represents Libevent's buffer event.</p>
	 * <p>Usually an application wants to perform some amount of data buffering in addition to just responding to events. When we want to write data, for example, the usual pattern looks like:</p>
	 * <p>Decide that we want to write some data to a connection; put that data in a buffer.</p>
	 * <p>Wait for the connection to become writable</p>
	 * <p>Write as much of the data as we can</p>
	 * <p>Remember how much we wrote, and if we still have more data to write, wait for the connection to become writable again.</p>
	 * <p>This buffered I/O pattern is common enough that Libevent provides a generic mechanism for it. A "buffer event" consists of an underlying transport (like a socket), a read buffer, and a write buffer. Instead of regular events, which give callbacks when the underlying transport is ready to be read or written, a buffer event invokes its user-supplied callbacks when it has read or written enough data.</p>
	 * @link http://php.net/manual/en/class.eventbufferevent.php
	 * @since PECL event >= 1.2.6-beta
	 */
	final class EventBufferEvent {

		/**
		 * @var integer <p>An event occured during a read operation on the bufferevent. See the other flags for which event it was.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const READING = 1;

		/**
		 * @var integer <p>An event occured during a write operation on the bufferevent. See the other flags for which event it was.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const WRITING = 2;

		/**
		 * @var integer <p>Got an end-of-file indication on the buffer event.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const EOF = 16;

		/**
		 * @var integer <p>An error occurred during a bufferevent operation. For more information on what the error was, call <code>EventUtil::getLastSocketErrno()</code> and/or <code>EventUtil::getLastSocketError()</code> .</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const ERROR = 32;

		/**
		 * @var integer
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const TIMEOUT = 64;

		/**
		 * @var integer <p>Finished a requested connection on the bufferevent.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const CONNECTED = 128;

		/**
		 * @var integer <p>When the buffer event is freed, close the underlying transport. This will close an underlying socket, free an underlying buffer event, etc.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const OPT_CLOSE_ON_FREE = 1;

		/**
		 * @var integer <p>Automatically allocate locks for the bufferevent, so that it&rsquo;s safe to use from multiple threads.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const OPT_THREADSAFE = 2;

		/**
		 * @var integer <p>When this flag is set, the bufferevent defers all of its callbacks. See Fast portable non-blocking network programming with Libevent, Deferred callbacks .</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const OPT_DEFER_CALLBACKS = 4;

		/**
		 * @var integer <p>By default, when the bufferevent is set up to be threadsafe, the buffer event&rsquo;s locks are held whenever the any user-provided callback is invoked. Setting this option makes Libevent release the buffer event&rsquo;s lock when it&rsquo;s invoking the callbacks.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const OPT_UNLOCK_CALLBACKS = 8;

		/**
		 * @var integer <p>The SSL handshake is done</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const SSL_OPEN = 0;

		/**
		 * @var integer <p>SSL is currently performing negotiation as a client</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const SSL_CONNECTING = 1;

		/**
		 * @var integer <p>SSL is currently performing negotiation as a server</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php
		 */
		const SSL_ACCEPTING = 2;

		/**
		 * @var integer <p>Numeric file descriptor associated with the buffer event. Normally represents a bound socket. Equals to <b><code>NULL</code></b>, if there is no file descriptor(socket) associated with the buffer event.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php#eventbufferevent.props.fd
		 */
		public $fd;

		/**
		 * @var integer <p>The priority of the events used to implement the buffer event.</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php#eventbufferevent.props.priority
		 */
		public $priority;

		/**
		 * @var EventBuffer <p>Underlying input buffer object( EventBuffer )</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php#eventbufferevent.props.input
		 */
		public $input;

		/**
		 * @var EventBuffer <p>Underlying output buffer object( EventBuffer )</p>
		 * @link http://php.net/manual/en/class.eventbufferevent.php#eventbufferevent.props.output
		 */
		public $output;

		/**
		 * Constructs EventBufferEvent object
		 * <p>Create a buffer event on a socket, stream or a file descriptor. Passing <b><code>NULL</code></b> to <code>socket</code> means that the socket should be created later, e.g. by means of <code>EventBufferEvent::connect()</code> .</p>
		 * @param \EventBase $base <p>Event base that should be associated with the new buffer event.</p>
		 * @param mixed $socket <p>May be created as a stream(not necessarily by means of <i>sockets</i> extension)</p>
		 * @param int $options <p>One of EventBufferEvent::OPT_&#42; constants , or <b><code>0</code></b> .</p>
		 * @param callable $readcb <p>Read event callback. See About buffer event callbacks .</p>
		 * @param callable $writecb <p>Write event callback. See About buffer event callbacks .</p>
		 * @param callable $eventcb <p>Status-change event callback. See About buffer event callbacks .</p>
		 * @return self <p>Returns buffer event resource optionally associated with socket resource. &#42;/</p>
		 * @link http://php.net/manual/en/eventbufferevent.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventBase $base, $socket = NULL, int $options = 0, callable $readcb = NULL, callable $writecb = NULL, callable $eventcb = NULL) {}

		/**
		 * Closes file descriptor associated with the current buffer event
		 * <p>Closes file descriptor associated with the current buffer event.</p><p>This method may be used in cases when the <b><code>EventBufferEvent::OPT_CLOSE_ON_FREE</code></b> option is not appropriate.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbufferevent.close.php
		 * @since PECL event >= 1.10.0
		 */
		public function close(): void {}

		/**
		 * Connect buffer event's file descriptor to given address or UNIX socket
		 * <p>Connect buffer event's file descriptor to given address(optionally with port), or a UNIX domain socket.</p><p>If socket is not assigned to the buffer event, this function allocates a new socket and makes it non-blocking internally.</p><p>To resolve DNS names(asyncronously), use <code>EventBufferEvent::connectHost()</code> method.</p>
		 * @param string $addr <p>Should contain an IP address with optional port number, or a path to UNIX domain socket. Recognized formats are:</p> <pre>[IPv6Address]:port [IPv6Address] IPv6Address IPv4Address:port IPv4Address unix:path</pre>   Note, <i>'unix:'</i> prefix is currently not case sensitive.
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.connect.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function connect(string $addr): bool {}

		/**
		 * Connects to a hostname with optionally asyncronous DNS resolving
		 * <p>Resolves the DNS name hostname, looking for addresses of type <code>family</code> ( <i>EventUtil::AF_&#42;</i> constants). If the name resolution fails, it invokes the event callback with an error event. If it succeeds, it launches a connection attempt just as <code>EventBufferEvent::connect()</code> would.</p><p><code>dns_base</code> is optional. May be <b><code>NULL</code></b>, or an object created with <code>EventDnsBase::__construct()</code> . For asyncronous hostname resolving pass a valid event dns base resource. Otherwise the hostname resolving will block.</p><p><b>Note</b>:</p><p>EventDnsBase is available only if <i>Event</i> configured <b>--with-event-extra</b> ( <i>event_extra</i> library, <i>libevent protocol-specific functionality support including HTTP, DNS, and RPC</i> ).</p><p><b>Note</b>:</p><p><b>EventBufferEvent::connectHost()</b> requires <i>libevent-2.0.3-alpha</i> or greater.</p>
		 * @param \EventDnsBase $dns_base <p>Object of EventDnsBase in case if DNS is to be resolved asyncronously. Otherwise <b><code>NULL</code></b>.</p>
		 * @param string $hostname <p>Hostname to connect to. Recognized formats are:</p> <pre>www.example.com (hostname) 1.2.3.4 (ipv4address) ::1 (ipv6address) [::1] ([ipv6address])</pre>
		 * @param int $port <p>Port number</p>
		 * @param int $family <p>Address family. <b><code>EventUtil::AF_UNSPEC</code></b> , <b><code>EventUtil::AF_INET</code></b> , or <b><code>EventUtil::AF_INET6</code></b> . See EventUtil constants .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.connecthost.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function connectHost(\EventDnsBase $dns_base, string $hostname, int $port, int $family = EventUtil::AF_UNSPEC): bool {}

		/**
		 * Creates two buffer events connected to each other
		 * <p>Returns array of two EventBufferEvent objects connected to each other. All the usual options are supported, except for <b><code>EventBufferEvent::OPT_CLOSE_ON_FREE</code></b> , which has no effect, and <b><code>EventBufferEvent::OPT_DEFER_CALLBACKS</code></b> , which is always on.</p>
		 * @param \EventBase $base <p>Associated event base</p>
		 * @param int $options <p>EventBufferEvent::OPT_&#42; constants combined with bitwise <i>OR</i> operator.</p>
		 * @return array <p>Returns array of two EventBufferEvent objects connected to each other.</p>
		 * @link http://php.net/manual/en/eventbufferevent.createpair.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function createPair(\EventBase $base, int $options = 0): array {}

		/**
		 * Disable events read, write, or both on a buffer event
		 * <p>Disable events <b><code>Event::READ</code></b> , <b><code>Event::WRITE</code></b> , or <b><code>Event::READ</code></b> <i>|</i> <b><code>Event::WRITE</code></b> on a buffer event.</p>
		 * @param int $events
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.disable.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function disable(int $events): bool {}

		/**
		 * Enable events read, write, or both on a buffer event
		 * <p>Enable events <b><code>Event::READ</code></b> , <b><code>Event::WRITE</code></b> , or <b><code>Event::READ</code></b> <i>|</i> <b><code>Event::WRITE</code></b> on a buffer event.</p>
		 * @param int $events <p><b><code>Event::READ</code></b> , <b><code>Event::WRITE</code></b> , or <b><code>Event::READ</code></b> <i>|</i> <b><code>Event::WRITE</code></b> on a buffer event.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.enable.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function enable(int $events): bool {}

		/**
		 * Free a buffer event
		 * <p>Free resources allocated by buffer event.</p><p>Usually there is no need to call this method, since normally it is done within internal object destructors. However, sometimes we have a long-time script allocating lots of instances, or a script with a heavy memory usage, where we need to free resources as soon as possible. In such cases <b>EventBufferEvent::free()</b> may be used to protect the script against running up to the <i>memory_limit</i> .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbufferevent.free.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function free(): void {}

		/**
		 * Returns string describing the last failed DNS lookup attempt
		 * <p>Returns string describing the last failed DNS lookup attempt made by <code>EventBufferEvent::connectHost()</code> , or an empty string, if there is no DNS error detected.</p>
		 * @return string <p>Returns a string describing DNS lookup error, or an empty string for no error.</p>
		 * @link http://php.net/manual/en/eventbufferevent.getdnserrorstring.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getDnsErrorString(): string {}

		/**
		 * Returns bitmask of events currently enabled on the buffer event
		 * <p>Returns bitmask of events currently enabled on the buffer event</p>
		 * @return int <p>Returns integer representing a bitmask of events currently enabled on the buffer event</p>
		 * @link http://php.net/manual/en/eventbufferevent.getenabled.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getEnabled(): int {}

		/**
		 * Returns underlying input buffer associated with current buffer event
		 * <p>Returns underlying input buffer associated with current buffer event. An input buffer is a storage for data to read.</p><p>Note, there is also <i> input </i> property of EventBufferEvent class.</p>
		 * @return EventBuffer <p>Returns instance of EventBuffer input buffer associated with current buffer event.</p>
		 * @link http://php.net/manual/en/eventbufferevent.getinput.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getInput(): \EventBuffer {}

		/**
		 * Returns the most recent socket error number
		 * <p>Returns the most recent socket error number( <i>errno</i> ).</p>
		 * @param mixed $socket <p>Socket resource, stream or a file descriptor of a socket.</p>
		 * @return int <p>Returns the most recent socket error number( <i>errno</i> ).</p>
		 * @link http://php.net/manual/en/eventutil.getlastsocketerrno.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function getLastSocketErrno($socket = NULL): int {}

		/**
		 * Returns the most recent socket error
		 * <p>Returns the most recent socket error.</p>
		 * @param mixed $socket <p>Socket resource, stream or a file descriptor of a socket.</p>
		 * @return string <p>Returns the most recent socket error.</p>
		 * @link http://php.net/manual/en/eventutil.getlastsocketerror.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function getLastSocketError($socket = NULL): string {}

		/**
		 * Returns underlying output buffer associated with current buffer event
		 * <p>Returns underlying output buffer associated with current buffer event. An output buffer is a storage for data to be written.</p><p>Note, there is also <i> output </i> property of EventBufferEvent class.</p>
		 * @return EventBuffer <p>Returns instance of EventBuffer output buffer associated with current buffer event.</p>
		 * @link http://php.net/manual/en/eventbufferevent.getoutput.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getOutput(): \EventBuffer {}

		/**
		 * Read buffer's data
		 * <p>Removes up to <code>size</code> bytes from the input buffer. Returns a string of data read from the input buffer.</p>
		 * @param int $size <p>Maximum number of bytes to read</p>
		 * @return string <p>Returns string of data read from the input buffer.</p>
		 * @link http://php.net/manual/en/eventbufferevent.read.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function read(int $size): string {}

		/**
		 * Drains the entire contents of the input buffer and places them into buf
		 * <p>Drains the entire contents of the input buffer and places them into <code>buf</code> .</p>
		 * @param \EventBuffer $buf <p>Target buffer</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success; Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.readbuffer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function readBuffer(\EventBuffer $buf): bool {}

		/**
		 * Assigns read, write and event(status) callbacks
		 * <p>Assigns read, write and event(status) callbacks.</p>
		 * @param callable $readcb <p>Read event callback. See About buffer event callbacks .</p>
		 * @param callable $writecb <p>Write event callback. See About buffer event callbacks .</p>
		 * @param callable $eventcb <p>Status-change event callback. See About buffer event callbacks .</p>
		 * @param string $arg <p>A variable that will be passed to all the callbacks.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbufferevent.setcallbacks.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setCallbacks(callable $readcb, callable $writecb, callable $eventcb, string $arg = NULL): void {}

		/**
		 * Assign a priority to a bufferevent
		 * <p>Assign a priority to a bufferevent</p><p>Only supported for socket buffer events</p>
		 * @param int $priority <p>Priority value.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.setpriority.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setPriority(int $priority): bool {}

		/**
		 * Set the read and write timeout for a buffer event
		 * <p>Set the read and write timeout for a buffer event</p>
		 * @param float $timeout_read <p>Read timeout</p>
		 * @param float $timeout_write <p>Write timeout</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.settimeouts.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setTimeouts(float $timeout_read, float $timeout_write): bool {}

		/**
		 * Adjusts read and/or write watermarks
		 * <p>Adjusts the read watermarks, the write <i>watermarks</i> , or both, of a single buffer event.</p><p>A buffer event watermark is an edge, a value specifying number of bytes to be read or written before callback is invoked. By default every read/write event triggers a callback invokation. See Fast portable non-blocking network programming with Libevent: Callbacks and watermarks</p>
		 * @param int $events <p>Bitmask of <b><code>Event::READ</code></b> , <b><code>Event::WRITE</code></b> , or both.</p>
		 * @param int $lowmark <p>Minimum watermark value.</p>
		 * @param int $highmark <p>Maximum watermark value. <b><code>0</code></b> means "unlimited".</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbufferevent.setwatermark.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setWatermark(int $events, int $lowmark, int $highmark): void {}

		/**
		 * Returns most recent OpenSSL error reported on the buffer event
		 * <p>Returns most recent OpenSSL error reported on the buffer event.</p><p><b>Note</b>:</p><p>This function is available only if <i>Event</i> is compiled with OpenSSL support.</p>
		 * @return string <p>Returns OpenSSL error string reported on the buffer event, or <b><code>FALSE</code></b>, if there is no more error to return.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslerror.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function sslError(): string {}

		/**
		 * Create a new SSL buffer event to send its data over another buffer event
		 * <p>Create a new SSL buffer event to send its data over another buffer event</p><p><b>Note</b>:</p><p>This function is available only if <i>Event</i> is compiled with OpenSSL support.</p>
		 * @param \EventBase $base <p>Associated event base.</p>
		 * @param \EventBufferEvent $underlying <p>A socket buffer event to use for this SSL.</p>
		 * @param \EventSslContext $ctx <p>Object of EventSslContext class.</p>
		 * @param int $state <p>The current state of SSL connection: <b><code>EventBufferEvent::SSL_OPEN</code></b> , <b><code>EventBufferEvent::SSL_ACCEPTING</code></b> or <b><code>EventBufferEvent::SSL_CONNECTING</code></b> .</p>
		 * @param int $options <p>One or more buffer event options.</p>
		 * @return EventBufferEvent <p>Returns a new SSL EventBufferEvent object.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslfilter.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function sslFilter(\EventBase $base, \EventBufferEvent $underlying, \EventSslContext $ctx, int $state, int $options = 0): \EventBufferEvent {}

		/**
		 * Returns a textual description of the cipher
		 * <p>Retrieves description of the current cipher by means of the <i>SSL_CIPHER_description</i> SSL API function (see <i>SSL_CIPHER_get_name(3)</i> man page).</p><p><b>Note</b>:</p><p>This function is available only if <i>Event</i> is compiled with OpenSSL support.</p>
		 * @return string <p>Returns a textual description of the cipher on success, or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslgetcipherinfo.php
		 * @since PECL event >= 1.10.0
		 */
		public function sslGetCipherInfo(): string {}

		/**
		 * Returns the current cipher name of the SSL connection
		 * <p>Retrieves name of cipher used by current SSL connection.</p><p><b>Note</b>:</p><p>This function is available only if <i>Event</i> is compiled with OpenSSL support.</p>
		 * @return string <p>Returns the current cipher name of the SSL connection, or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslgetciphername.php
		 * @since PECL event >= 1.10.0
		 */
		public function sslGetCipherName(): string {}

		/**
		 * Returns version of cipher used by current SSL connection
		 * <p>Retrieves version of cipher used by current SSL connection.</p><p><b>Note</b>:</p><p>This function is available only if <i>Event</i> is compiled with OpenSSL support.</p>
		 * @return string <p>Returns the current cipher version of the SSL connection, or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslgetcipherversion.php
		 * @since PECL event >= 1.10.0
		 */
		public function sslGetCipherVersion(): string {}

		/**
		 * Returns the name of the protocol used for current SSL connection
		 * <p>Returns the name of the protocol used for current SSL connection.</p><p><b>Note</b>:</p><p>This function is available only if <i>Event</i> is compiled with OpenSSL support.</p>
		 * @return string <p>Returns the name of the protocol used for current SSL connection.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslgetprotocol.php
		 * @since PECL event >= 1.10.0
		 */
		public function sslGetProtocol(): string {}

		/**
		 * Tells a bufferevent to begin SSL renegotiation
		 * <p>Tells a bufferevent to begin SSL renegotiation.</p><p>Calling this function tells the SSL to renegotiate, and the buffer event to invoke appropriate callbacks. This is an advanced topic; this should be generally avoided unless one really knows what he/she does, especially since many SSL versions have had known security issues related to renegotiation.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslrenegotiate.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function sslRenegotiate(): void {}

		/**
		 * Creates a new SSL buffer event to send its data over an SSL on a socket
		 * <p>Creates a new SSL buffer event to send its data over an SSL on a socket.</p>
		 * @param \EventBase $base <p>Associated event base.</p>
		 * @param mixed $socket <p>Socket to use for this SSL. Can be stream or socket resource, numeric file descriptor, or <b><code>NULL</code></b>. If <code>socket</code> is <b><code>NULL</code></b>, it is assumed that the file descriptor for the socket will be assigned later, for instance, by means of <code>EventBufferEvent::connectHost()</code> method.</p>
		 * @param \EventSslContext $ctx <p>Object of EventSslContext class.</p>
		 * @param int $state <p>The current state of SSL connection: <b><code>EventBufferEvent::SSL_OPEN</code></b> , <b><code>EventBufferEvent::SSL_ACCEPTING</code></b> or <b><code>EventBufferEvent::SSL_CONNECTING</code></b> .</p>
		 * @param int $options <p>The buffer event options.</p>
		 * @return EventBufferEvent <p>Returns EventBufferEvent object.</p>
		 * @link http://php.net/manual/en/eventbufferevent.sslsocket.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function sslSocket(\EventBase $base, $socket, \EventSslContext $ctx, int $state, int $options = NULL): \EventBufferEvent {}

		/**
		 * Adds data to a buffer event's output buffer
		 * <p>Adds <code>data</code> to a buffer event's output buffer</p>
		 * @param string $data <p>Data to be added to the underlying buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.write.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function write(string $data): bool {}

		/**
		 * Adds contents of the entire buffer to a buffer event's output buffer
		 * <p>Adds contents of the entire buffer to a buffer event's output buffer</p>
		 * @param \EventBuffer $buf <p>Source EventBuffer object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventbufferevent.writebuffer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function writeBuffer(\EventBuffer $buf): bool {}
	}

	/**
	 * <p>Represents configuration structure which could be used in construction of the EventBase .</p>
	 * @link http://php.net/manual/en/class.eventconfig.php
	 * @since PECL event >= 1.2.6-beta
	 */
	final class EventConfig {

		/**
		 * @var integer <p>Requires a backend method that supports edge-triggered I/O.</p>
		 * @link http://php.net/manual/en/class.eventconfig.php
		 */
		const FEATURE_ET = 1;

		/**
		 * @var integer <p>Requires a backend method where adding or deleting a single event, or having a single event become active, is an O(1) operation.</p>
		 * @link http://php.net/manual/en/class.eventconfig.php
		 */
		const FEATURE_O1 = 2;

		/**
		 * @var integer <p>Requires a backend method that can support arbitrary file descriptor types, and not just sockets.</p>
		 * @link http://php.net/manual/en/class.eventconfig.php
		 */
		const FEATURE_FDS = 4;

		/**
		 * Constructs EventConfig object
		 * <p>Constructs EventConfig object which could be passed to <code>EventBase::__construct()</code> constructor.</p>
		 * @return self <p>Returns EventConfig object.</p>
		 * @link http://php.net/manual/en/eventconfig.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct() {}

		/**
		 * Tells libevent to avoid specific event method
		 * <p>Tells libevent to avoid specific event method(backend). See Creating an event base .</p>
		 * @param string $method <p>The backend method to avoid. See EventConfig constants .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventconfig.avoidmethod.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function avoidMethod(string $method): bool {}

		/**
		 * Enters a required event method feature that the application demands
		 * <p>Enters a required event method feature that the application demands</p>
		 * @param int $feature <p>Bitmask of required features. See  <i>EventConfig::FEATURE_&#42;</i> constants</p>
		 * @return bool
		 * @link http://php.net/manual/en/eventconfig.requirefeatures.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function requireFeatures(int $feature): bool {}

		/**
		 * Prevents priority inversion
		 * <p>Prevents priority inversion by limiting how many low-priority event callbacks can be invoked before checking for more high-priority events.</p><p><b>Note</b>:</p><p>Available since <i>libevent 2.1.0-alpha</i> .</p>
		 * @param int $max_interval <p>An interval after which Libevent should stop running callbacks and check for more events, or <b><code>0</code></b> , if there should be no such interval.</p>
		 * @param int $max_callbacks <p>A number of callbacks after which Libevent should stop running callbacks and check for more events, or <b><code>-1</code></b> , if there should be no such limit.</p>
		 * @param int $min_priority <p>A priority below which <code>max_interval</code> and <code>max_callbacks</code> should not be enforced. If this is set to <b><code>0</code></b> , they are enforced for events of every priority; if it's set to <b><code>1</code></b> , they're enforced for events of priority <b><code>1</code></b> and above, and so on.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventconfig.setmaxdispatchinterval.php
		 * @since No version information available, might only be in Git
		 */
		public function setMaxDispatchInterval(int $max_interval, int $max_callbacks, int $min_priority): void {}
	}

	/**
	 * <p>Represents Libevent's DNS base structure. Used to resolve DNS asyncronously, parse configuration files like resolv.conf etc.</p>
	 * @link http://php.net/manual/en/class.eventdnsbase.php
	 * @since PECL event >= 1.2.6-beta
	 */
	final class EventDnsBase {

		/**
		 * @var integer <p>Tells to read the domain and search fields from the <i>resolv.conf</i> file and the <i>ndots</i> option, and use them to decide which domains(if any) to search for hostnames that aren&rsquo;t fully-qualified.</p>
		 * @link http://php.net/manual/en/class.eventdnsbase.php
		 */
		const OPTION_SEARCH = 1;

		/**
		 * @var integer <p>Tells to learn the nameservers from the <i>resolv.conf</i> file.</p>
		 * @link http://php.net/manual/en/class.eventdnsbase.php
		 */
		const OPTION_NAMESERVERS = 2;

		/**
		 * @var integer
		 * @link http://php.net/manual/en/class.eventdnsbase.php
		 */
		const OPTION_MISC = 4;

		/**
		 * @var integer <p>Tells to read a list of hosts from <i>/etc/hosts</i> as part of loading the <i>resolv.conf</i> file.</p>
		 * @link http://php.net/manual/en/class.eventdnsbase.php
		 */
		const OPTION_HOSTSFILE = 8;

		/**
		 * @var integer <p>Tells to learn as much as it can from the <i>resolv.conf</i> file.</p>
		 * @link http://php.net/manual/en/class.eventdnsbase.php
		 */
		const OPTIONS_ALL = 15;

		/**
		 * Constructs EventDnsBase object
		 * <p>Constructs EventDnsBase object.</p>
		 * @param \EventBase $base <p>Event base.</p>
		 * @param bool $initialize <p>If the <code>initialize</code> argument is <b><code>TRUE</code></b>, it tries to configure the DNS base sensibly given your operating system&rsquo;s default. Otherwise, it leaves the event DNS base empty, with no nameservers or options configured. In the latter case DNS base should be configured manually, e.g. with <code>EventDnsBase::parseResolvConf()</code> .</p>
		 * @return self <p>Returns EventDnsBase object.</p>
		 * @link http://php.net/manual/en/eventdnsbase.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventBase $base, bool $initialize) {}

		/**
		 * Adds a nameserver to the DNS base
		 * <p>Adds a nameserver to the evdns_base.</p>
		 * @param string $ip <p>The nameserver string, either as an IPv4 address, an IPv6 address, an IPv4 address with a port ( <i>IPv4:Port</i> ), or an IPv6 address with a port ( <i>[IPv6]:Port</i> ).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventdnsbase.addnameserverip.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function addNameserverIp(string $ip): bool {}

		/**
		 * Adds a domain to the list of search domains
		 * <p>Adds a domain to the list of search domains</p>
		 * @param string $domain <p>Search domain.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventdnsbase.addsearch.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function addSearch(string $domain): void {}

		/**
		 * Removes all current search suffixes
		 * <p>Removes all current search suffixes from the DNS base; the <code>EventDnsBase::addSearch()</code> function adds a suffix.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventdnsbase.clearsearch.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function clearSearch(): void {}

		/**
		 * Gets the number of configured nameservers
		 * <p>Gets the number of configured nameservers</p>
		 * @return int <p>Returns the number of configured nameservers(not necessarily the number of running nameservers). This is useful for double-checking whether our calls to the various nameserver configuration functions have been successful.</p>
		 * @link http://php.net/manual/en/eventdnsbase.countnameservers.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function countNameservers(): int {}

		/**
		 * Loads a hosts file (in the same format as /etc/hosts) from hosts file
		 * <p>Loads a hosts file (in the same format as <i>/etc/hosts</i> ) from hosts file.</p>
		 * @param string $hosts <p>Path to the hosts' file.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventdnsbase.loadhosts.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function loadHosts(string $hosts): bool {}

		/**
		 * Scans the resolv.conf-formatted file
		 * <p>Scans the resolv.conf-formatted file stored in filename, and read in all the options from it that are listed in flags</p>
		 * @param int $flags <p>Determines what information is parsed from the <i>resolv.conf</i> file. See the man page for <i>resolv.conf</i> for the format of this file.</p> <p>The following directives are not parsed from the file: <i>sortlist, rotate, no-check-names, inet6, debug</i> .</p> <p>If this function encounters an error, the possible return values are:</p><ul> <li> <b><code>1</code></b> = failed to open file</li> <li> <b><code>2</code></b> = failed to stat file</li> <li> <b><code>3</code></b> = file too large</li> <li> <b><code>4</code></b> = out of memory</li> <li> <b><code>5</code></b> = short read from file</li> <li> <b><code>6</code></b> = no nameservers listed in the file</li> </ul>
		 * @param string $filename <p>Path to <i>resolv.conf</i> file.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventdnsbase.parseresolvconf.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function parseResolvConf(int $flags, string $filename): bool {}

		/**
		 * Set the value of a configuration option
		 * <p>Set the value of a configuration option.</p>
		 * @param string $option <p>The currently available configuration options are: <i>"ndots"</i> , <i>"timeout"</i> , <i>"max-timeouts"</i> , <i>"max-inflight"</i> , and <i>"attempts"</i> .</p>
		 * @param string $value <p>Option value.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventdnsbase.setoption.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setOption(string $option, string $value): bool {}

		/**
		 * Set the 'ndots' parameter for searches
		 * <p>Set the <b><code>'ndots'</code></b> parameter for searches. Sets the number of dots which, when found in a name, causes the first query to be without any search domain.</p>
		 * @param int $ndots <p>The number of dots.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventdnsbase.setsearchndots.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setSearchNdots(int $ndots): bool {}
	}

	/**
	 * <p>Represents HTTP server.</p>
	 * @link http://php.net/manual/en/class.eventhttp.php
	 * @since PECL event >= 1.4.0-beta
	 */
	final class EventHttp {

		/**
		 * Constructs EventHttp object(the HTTP server)
		 * <p>Constructs the HTTP server object.</p>
		 * @param \EventBase $base <p>Associated event base.</p>
		 * @param \EventSslContext $ctx <p>EventSslContext class object. Turns plain HTTP server into HTTPS server. It means that if <code>ctx</code> is configured correctly, then the underlying buffer events will be based on OpenSSL sockets. Thus, all traffic will pass through the SSL or TLS.</p> <p><b>Note</b>:</p><p>This parameter is available only if <i>Event</i> is compiled with OpenSSL support and only with <i>Libevent 2.1.0-alpha</i> and higher.</p>
		 * @return self <p>Returns EventHttp object.</p>
		 * @link http://php.net/manual/en/eventhttp.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventBase $base, \EventSslContext $ctx = NULL) {}

		/**
		 * Makes an HTTP server accept connections on the specified socket stream or resource
		 * <p>Makes an HTTP server accept connections on the specified socket stream or resource. The socket should be ready to accept connections.</p><p>Can be called multiple times to accept connections on different sockets.</p><p><b>Note</b>:</p><p>To bind a socket, <i>listen</i> , and <i> accept</i> connections on the socket in s single call use <code>EventHttp::bind()</code> . <b>EventHttp::accept()</b> is needed only if one already has a socket ready to accept connections.</p>
		 * @param mixed $socket <p>Socket resource, stream or numeric file descriptor representing a socket ready to accept connections.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttp.accept.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function accept($socket): bool {}

		/**
		 * Adds a server alias to the HTTP server object
		 * <p>Adds a server alias to the HTTP server object.</p>
		 * @param string $alias <p>The alias to add.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttp.addserveralias.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function addServerAlias(string $alias): bool {}

		/**
		 * Binds an HTTP server on the specified address and port
		 * <p>Binds an HTTP server on the specified address and port.</p><p>Can be called multiple times to bind the same HTTP server to multiple different ports.</p>
		 * @param string $address <p>A string containing the IP address to <i>listen(2)</i> on.</p>
		 * @param int $port <p>The port number to listen on.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttp.bind.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function bind(string $address, int $port): void {}

		/**
		 * Removes server alias
		 * <p>Removes server alias added with <code>EventHttp::addServerAlias()</code></p>
		 * @param string $alias <p>The alias to remove.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttp.removeserveralias.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function removeServerAlias(string $alias): bool {}

		/**
		 * Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks
		 * <p>Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks</p><p>If not supported they will generate a <i>"405 Method not allowed"</i> response.</p><p>By default this includes the following methods: <i>GET</i> , <i>POST</i> , <i>HEAD</i> , <i>PUT</i> , <i>DELETE</i> . See <i>EventHttpRequest::CMD_&#42;</i> constants.</p>
		 * @param int $methods <p>A bit mask of  <i>EventHttpRequest::CMD_&#42;</i> constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttp.setallowedmethods.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function setAllowedMethods(int $methods): void {}

		/**
		 * Sets a callback for specified URI
		 * <p>Sets a callback for specified URI.</p>
		 * @param string $path <p>The path for which to invoke the callback.</p>
		 * @param string $cb <p>The callback <code>callable</code> that gets invoked on requested <code>path</code> . It should match the following prototype:</p>  void <b>callback</b> ([  <code>EventHttpRequest</code> <code>$req</code>  = NULL  [,  <code>mixed</code> <code>$arg</code>  = NULL  ]] ) <p></p>  <code>req</code>   <p>EventHttpRequest object.</p>   <code>arg</code>   <p>Custom data.</p>
		 * @param string $arg <p>Custom data.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttp.setcallback.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function setCallback(string $path, string $cb, string $arg = NULL): void {}

		/**
		 * Sets default callback to handle requests that are not caught by specific callbacks
		 * <p>Sets default callback to handle requests that are not caught by specific callbacks</p>
		 * @param string $cb <p>The callback <code>callable</code> . It should match the following prototype:</p>  void <b>callback</b> ([  <code>EventHttpRequest</code> <code>$req</code>  = NULL  [,  <code>mixed</code> <code>$arg</code>  = NULL  ]] ) <p></p>  <code>req</code>   <p>EventHttpRequest object.</p>   <code>arg</code>   <p>Custom data.</p>
		 * @param string $arg <p>User custom data passed to the callback.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttp.setdefaultcallback.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function setDefaultCallback(string $cb, string $arg = NULL): void {}

		/**
		 * Sets maximum request body size
		 * <p>Sets maximum request body size.</p>
		 * @param int $value <p>The body size in bytes.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttp.setmaxbodysize.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function setMaxBodySize(int $value): void {}

		/**
		 * Sets maximum HTTP header size
		 * <p>Sets maximum HTTP header size.</p>
		 * @param int $value <p>The header size in bytes.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttp.setmaxheaderssize.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function setMaxHeadersSize(int $value): void {}

		/**
		 * Sets the timeout for an HTTP request
		 * <p>Sets the timeout for an HTTP request.</p>
		 * @param int $value <p>The timeout in seconds.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttp.settimeout.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function setTimeout(int $value): void {}
	}

	/**
	 * <p>Represents an HTTP connection.</p>
	 * @link http://php.net/manual/en/class.eventhttpconnection.php
	 * @since PECL event >= 1.4.0-beta
	 */
	class EventHttpConnection {

		/**
		 * Constructs EventHttpConnection object
		 * <p>Constructs EventHttpConnection object.</p>
		 * @param \EventBase $base <p>Associated event base.</p>
		 * @param \EventDnsBase $dns_base <p>If <code>dns_base</code> is <b><code>NULL</code></b>, hostname resolution will block.</p>
		 * @param string $address <p>The address to connect to.</p>
		 * @param int $port <p>The port to connect to.</p>
		 * @param \EventSslContext $ctx <p>EventSslContext class object. Enables OpenSSL.</p> <p><b>Note</b>:</p><p>This parameter is available only if <i>Event</i> is compiled with OpenSSL support and only with <i>Libevent 2.1.0-alpha</i> and higher.</p>
		 * @return self <p>Returns EventHttpConnection object.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventBase $base, \EventDnsBase $dns_base, string $address, int $port, \EventSslContext $ctx = NULL) {}

		/**
		 * Returns event base associated with the connection
		 * <p>Returns event base associated with the connection.</p>
		 * @return EventBase <p>On success returns EventBase object associated with the connection. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.getbase.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getBase(): \EventBase {}

		/**
		 * Gets the remote address and port associated with the connection
		 * <p>Gets the remote address and port associated with the connection</p>
		 * @param string $address <p>Address of the peer.</p>
		 * @param int $port <p>Port of the peer.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.getpeer.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getPeer(string &$address, int &$port): void {}

		/**
		 * Makes an HTTP request over the specified connection
		 * <p>Makes an HTTP request over the specified connection. <code>type</code> is one of <i>EventHttpRequest::CMD_&#42;</i> constants.</p>
		 * @param \EventHttpRequest $req <p>The connection object over which to send the request.</p>
		 * @param int $type <p>One of  <i>EventHttpRequest::CMD_&#42;</i> constants .</p>
		 * @param string $uri <p>The URI associated with the request.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.makerequest.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function makeRequest(\EventHttpRequest $req, int $type, string $uri): bool {}

		/**
		 * Set callback for connection close
		 * <p>Sets callback for connection close.</p>
		 * @param callable $callback <p>Callback which is called when connection is closed. Should match the following prototype:</p>  void <b>callback</b> ([  <code>EventHttpConnection</code> <code>$conn</code>  = <b><code>NULL</code></b>  [,  <code>mixed</code> <code>$arg</code>  = <b><code>NULL</code></b>  ]] )
		 * @param mixed $data
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.setclosecallback.php
		 * @since PECL event >= 1.8.0
		 */
		public function setCloseCallback(callable $callback, $data = NULL): void {}

		/**
		 * Sets the IP address from which HTTP connections are made
		 * <p>Sets the IP address from which http connections are made.</p>
		 * @param string $address <p>The IP address from which HTTP connections are made.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.setlocaladdress.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setLocalAddress(string $address): void {}

		/**
		 * Sets the local port from which connections are made
		 * <p>Sets the local port from which connections are made.</p>
		 * @param int $port <p>The port number.</p>
		 * @return void
		 * @link http://php.net/manual/en/eventhttpconnection.setlocalport.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setLocalPort(int $port): void {}

		/**
		 * Sets maximum body size for the connection
		 * <p>Sets maximum body size for the connection.</p>
		 * @param string $max_size <p>The maximum body size in bytes.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.setmaxbodysize.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setMaxBodySize(string $max_size): void {}

		/**
		 * Sets maximum header size
		 * <p>Sets maximum header size for the connection.</p>
		 * @param string $max_size <p>The maximum header size in bytes.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.setmaxheaderssize.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setMaxHeadersSize(string $max_size): void {}

		/**
		 * Sets the retry limit for the connection
		 * <p>Sets the retry limit for the connection</p>
		 * @param int $retries <p>The retry limit. <b><code>-1</code></b> means infinity.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.setretries.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setRetries(int $retries): void {}

		/**
		 * Sets the timeout for the connection
		 * <p>Sets the timeout for the connection</p>
		 * @param int $timeout <p>Timeout in seconds.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttpconnection.settimeout.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setTimeout(int $timeout): void {}
	}

	/**
	 * <p>Represents an HTTP request.</p>
	 * @link http://php.net/manual/en/class.eventhttprequest.php
	 * @since PECL event >= 1.4.0-beta
	 */
	class EventHttpRequest {

		/**
		 * @var integer <p>GET method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_GET = 1;

		/**
		 * @var integer <p>POST method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_POST = 2;

		/**
		 * @var integer <p>HEAD method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_HEAD = 4;

		/**
		 * @var integer <p>PUT method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_PUT = 8;

		/**
		 * @var integer <p>DELETE command(method)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_DELETE = 16;

		/**
		 * @var integer <p>OPTIONS method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_OPTIONS = 32;

		/**
		 * @var integer <p>TRACE method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_TRACE = 64;

		/**
		 * @var integer <p>CONNECT method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_CONNECT = 128;

		/**
		 * @var integer <p>PATCH method(command)</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const CMD_PATCH = 256;

		/**
		 * @var integer <p>Request input header type.</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const INPUT_HEADER = 1;

		/**
		 * @var integer <p>Request output header type.</p>
		 * @link http://php.net/manual/en/class.eventhttprequest.php
		 */
		const OUTPUT_HEADER = 2;

		/**
		 * Constructs EventHttpRequest object
		 * <p>Constructs EventHttpRequest object.</p>
		 * @param callable $callback <p>Gets invoked on requesting path. Should match the following prototype:</p>  void <b>callback</b> ([  <code>EventHttpRequest</code> <code>$req</code>  = <b><code>NULL</code></b>  [,  <code>mixed</code> <code>$arg</code>  = <b><code>NULL</code></b>  ]] )
		 * @param mixed $data <p>User custom data passed to the callback.</p>
		 * @return self <p>Returns EventHttpRequest object.</p>
		 * @link http://php.net/manual/en/eventhttprequest.construct.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function __construct(callable $callback, $data = NULL) {}

		/**
		 * Adds an HTTP header to the headers of the request
		 * <p>Adds an HTTP header to the headers of the request.</p>
		 * @param string $key <p>Header name.</p>
		 * @param string $value <p>Header value.</p>
		 * @param int $type <p>One of  <i>EventHttpRequest::&#42;_HEADER</i> constants .</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventhttprequest.addheader.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function addHeader(string $key, string $value, int $type): bool {}

		/**
		 * Cancels a pending HTTP request
		 * <p>Cancels a pending HTTP request.</p><p>Cancels an ongoing HTTP request. The callback associated with this request is not executed and the request object is freed. If the request is currently being processed, e.g. it is ongoing, the corresponding EventHttpConnection object is going to get reset.</p><p>A request cannot be canceled if its callback has executed already. A request may be canceled reentrantly from its chunked callback.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.cancel.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function cancel(): void {}

		/**
		 * Removes all output headers from the header list of the request
		 * <p>Removes all output headers from the header list of the request.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.clearheaders.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function clearHeaders(): void {}

		/**
		 * Closes associated HTTP connection
		 * <p>Closes HTTP connection associated with the request.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.closeconnection.php
		 * @since PECL event >= 1.8.0
		 */
		public function closeConnection(): void {}

		/**
		 * Finds the value belonging a header
		 * <p>Finds the value belonging a header.</p>
		 * @param string $key <p>The header name.</p>
		 * @param string $type <p>One of  <i>EventHttpRequest::&#42;_HEADER</i> constants .</p>
		 * @return void <p>Returns <b><code>NULL</code></b> if header not found.</p>
		 * @link http://php.net/manual/en/eventhttprequest.findheader.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function findHeader(string $key, string $type): void {}

		/**
		 * Frees the object and removes associated events
		 * <p>Frees the object and removes associated events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.free.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function free(): void {}

		/**
		 * Returns the request command(method)
		 * <p>Returns the request command, one of  <i>EventHttpRequest::CMD_&#42;</i>  constants.</p>
		 * @return void <p>Returns the request command, one of  <i>EventHttpRequest::CMD_&#42;</i>  constants.</p>
		 * @link http://php.net/manual/en/eventhttprequest.getcommand.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getCommand(): void {}

		/**
		 * Returns the request host
		 * <p>Returns the request host.</p>
		 * @return string <p>Returns the request host.</p>
		 * @link http://php.net/manual/en/eventhttprequest.gethost.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getHost(): string {}

		/**
		 * Returns the input buffer
		 * <p>Returns the input buffer.</p>
		 * @return EventBuffer <p>Returns the input buffer.</p>
		 * @link http://php.net/manual/en/eventhttprequest.getinputbuffer.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getInputBuffer(): \EventBuffer {}

		/**
		 * Returns associative array of the input headers
		 * <p>Returns associative array of the input headers.</p>
		 * @return array <p>Returns associative array of the input headers.</p>
		 * @link http://php.net/manual/en/eventhttprequest.getinputheaders.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getInputHeaders(): array {}

		/**
		 * Returns the output buffer of the request
		 * <p>Returns the output buffer of the request.</p>
		 * @return EventBuffer <p>Returns the output buffer of the request.</p>
		 * @link http://php.net/manual/en/eventhttprequest.getoutputbuffer.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getOutputBuffer(): \EventBuffer {}

		/**
		 * Returns associative array of the output headers
		 * <p>Returns associative array of the output headers.</p>
		 * @return void
		 * @link http://php.net/manual/en/eventhttprequest.getoutputheaders.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getOutputHeaders(): void {}

		/**
		 * Returns the response code
		 * <p>Returns the response code.</p>
		 * @return int <p>Returns the response code of the request.</p>
		 * @link http://php.net/manual/en/eventhttprequest.getresponsecode.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getResponseCode(): int {}

		/**
		 * Returns the request URI
		 * <p>Returns the request URI</p>
		 * @return string <p>Returns the request URI</p>
		 * @link http://php.net/manual/en/eventhttprequest.geturi.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function getUri(): string {}

		/**
		 * Removes an HTTP header from the headers of the request
		 * <p>Removes an HTTP header from the headers of the request.</p>
		 * @param string $key <p>The header name.</p>
		 * @param string $type <p><code>type</code> is one of <i>EventHttpRequest::&#42;_HEADER</i> constants.</p>
		 * @return void <p>Removes an HTTP header from the headers of the request.</p>
		 * @link http://php.net/manual/en/eventhttprequest.removeheader.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function removeHeader(string $key, string $type): void {}

		/**
		 * Send an HTML error message to the client
		 * <p>Send an HTML error message to the client.</p>
		 * @param int $error <p>The HTTP error code.</p>
		 * @param string $reason <p>A brief explanation ofthe error. If <b><code>NULL</code></b>, the standard meaning of the error code will be used.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.senderror.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function sendError(int $error, string $reason = NULL): void {}

		/**
		 * Send an HTML reply to the client
		 * <p>Send an HTML reply to the client. The body of the reply consists of data in optional <code>buf</code> parameter.</p>
		 * @param int $code <p>The HTTP response code to send.</p>
		 * @param string $reason <p>A brief message to send with the response code.</p>
		 * @param \EventBuffer $buf <p>The body of the response.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.sendreply.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function sendReply(int $code, string $reason, \EventBuffer $buf = NULL): void {}

		/**
		 * Send another data chunk as part of an ongoing chunked reply
		 * <p>Send another data chunk as part of an ongoing chunked reply. After calling this method <code>buf</code> will be empty.</p>
		 * @param \EventBuffer $buf <p>The data chunk to send as part of the reply.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.sendreplychunk.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function sendReplyChunk(\EventBuffer $buf): void {}

		/**
		 * Complete a chunked reply, freeing the request as appropriate
		 * <p>Complete a chunked reply, freeing the request as appropriate.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.sendreplyend.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function sendReplyEnd(): void {}

		/**
		 * Initiate a chunked reply
		 * <p>Initiate a reply that uses <i>Transfer-Encoding</i> <i>chunked</i> .</p><p>This allows the caller to stream the reply back to the client and is useful when either not all of the reply data is immediately available or when sending very large replies.</p><p>The caller needs to supply data chunks with <code>EventHttpRequest::sendReplyChunk()</code> and complete the reply by calling <code>EventHttpRequest::sendReplyEnd()</code> .</p>
		 * @param int $code <p>The HTTP response code to send.</p>
		 * @param string $reason <p>A brief message to send with the response code.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventhttprequest.sendreplystart.php
		 * @since PECL event >= 1.4.0-beta
		 */
		public function sendReplyStart(int $code, string $reason): void {}
	}

	/**
	 * <p>Represents a connection listener.</p>
	 * @link http://php.net/manual/en/class.eventlistener.php
	 * @since PECL event >= 1.5.0
	 */
	final class EventListener {

		/**
		 * @var integer <p>By default Libevent turns underlying file descriptors, or sockets, to non-blocking mode. This flag tells Libevent to leave them in blocking mode.</p>
		 * @link http://php.net/manual/en/class.eventlistener.php
		 */
		const OPT_LEAVE_SOCKETS_BLOCKING = 1;

		/**
		 * @var integer <p>If this option is set, the connection listener closes its underlying socket when the <b>EventListener</b> object is freed.</p>
		 * @link http://php.net/manual/en/class.eventlistener.php
		 */
		const OPT_CLOSE_ON_FREE = 2;

		/**
		 * @var integer <p>If this option is set, the connection listener sets the close-on-exec flag on the underlying listener socket. See platform documentation for <i>fcntl</i> and <b><code>FD_CLOEXEC</code></b> for more information.</p>
		 * @link http://php.net/manual/en/class.eventlistener.php
		 */
		const OPT_CLOSE_ON_EXEC = 4;

		/**
		 * @var integer <p>By default on some platforms, once a listener socket is closed, no other socket can bind to the same port until a while has passed. Setting this option makes Libevent mark the socket as reusable, so that once it is closed, another socket can be opened to listen on the same port.</p>
		 * @link http://php.net/manual/en/class.eventlistener.php
		 */
		const OPT_REUSEABLE = 8;

		/**
		 * @var integer <p>Allocate locks for the listener, so that it&rsquo;s safe to use it from multiple threads.</p>
		 * @link http://php.net/manual/en/class.eventlistener.php
		 */
		const OPT_THREADSAFE = 16;

		/**
		 * @var int <p>Numeric file descriptor of the underlying socket. (Added in <i>event-1.6.0</i> .)</p>
		 * @link http://php.net/manual/en/class.eventlistener.php#eventlistener.props.fd
		 */
		public $fd;

		/**
		 * Creates new connection listener associated with an event base
		 * <p>Creates new connection listener associated with an event base.</p>
		 * @param \EventBase $base <p>Associated event base.</p>
		 * @param callable $cb <p>A <code>callable</code> that will be invoked when new connection received.</p>
		 * @param mixed $data <p>Custom user data attached to <code>cb</code> .</p>
		 * @param int $flags <p>Bit mask of <i>EventListener::OPT_&#42;</i> constants. See EventListener constants .</p>
		 * @param int $backlog <p>Controls the maximum number of pending connections that the network stack should allow to wait in a not-yet-accepted state at any time; see documentation for your system&rsquo;s <i>listen</i> function for more details. If <code>backlog</code> is negative, Libevent tries to pick a good value for the <code>backlog</code> ; if it is zero, Event assumes that <i>listen</i> is already called on the socket( <code>target</code> )</p>
		 * @param mixed $target <p>May be string, socket resource, or a stream associated with a socket. In case if <code>target</code> is a string, the string will be parsed as network address. It will be interpreted as a UNIX domain socket path, if prefixed with <i>'unix:'</i> , e.g. <i>'unix:/tmp/my.sock'</i> .</p>
		 * @return self <p>Returns EventListener object representing the event connection listener.</p>
		 * @link http://php.net/manual/en/eventlistener.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(\EventBase $base, callable $cb, $data, int $flags, int $backlog, $target) {}

		/**
		 * Disables an event connect listener object
		 * <p>Disables an event connect listener object</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventlistener.disable.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function disable(): bool {}

		/**
		 * Enables an event connect listener object
		 * <p>Enables an event connect listener object</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventlistener.enable.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function enable(): bool {}

		/**
		 * Returns event base associated with the event listener
		 * <p>Returns event base associated with the event listener.</p>
		 * @return void <p>Returns event base associated with the event listener.</p>
		 * @link http://php.net/manual/en/eventlistener.getbase.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function getBase(): void {}

		/**
		 * Retreives the current address to which the listener's socket is bound
		 * <p>Retreives the current address to which the listener's socket is bound.</p>
		 * @param string $address <p>Output parameter. IP-address depending on the socket address family.</p>
		 * @param mixed $port <p>Output parameter. The port the socket is bound to.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventlistener.getsocketname.php
		 * @since PECL event >= 1.5.0
		 */
		public static function getSocketName(string &$address, &$port = NULL): bool {}

		/**
		 * The setCallback purpose
		 * <p>Adjust event connect listener's callback and optionally the callback argument.</p>
		 * @param callable $cb <p>The new callback for new connections. Ignored if <b><code>NULL</code></b>.</p> <p>Should match the following prototype:</p>  void <b>callback</b> ([  <code>EventListener</code> <code>$listener</code>  = <b><code>NULL</code></b>  [,  <code>mixed</code> <code>$fd</code>  = <b><code>NULL</code></b>  [,  array <code>$address</code>  = <b><code>NULL</code></b>  [,  <code>mixed</code> <code>$arg</code>  = <b><code>NULL</code></b>  ]]]] ) <p></p>  <code>listener</code>   <p>The EventListener object.</p>   <code>fd</code>   <p>The file descriptor or a resource associated with the listener.</p>   <code>address</code>   <p>Array of two elements: IP address and the <i>server</i> port.</p>   <code>arg</code>   <p>User custom data attached to the callback.</p>
		 * @param mixed $arg <p>Custom user data attached to the callback. Ignored if <b><code>NULL</code></b>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventlistener.setcallback.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setCallback(callable $cb, $arg = NULL): void {}

		/**
		 * Set event listener's error callback
		 * <p>Set event listener's error callback</p>
		 * @param string $cb <p>The error callback. Should match the following prototype:</p>  void <b>callback</b> ([  <code>EventListener</code> <code>$listener</code>  = <b><code>NULL</code></b>  [,  <code>mixed</code> <code>$data</code>  = <b><code>NULL</code></b>  ]] ) <p></p>  <code>listener</code>   <p>The EventListener object.</p>   <code>data</code>   <p>User custom data attached to the callback.</p>
		 * @return void
		 * @link http://php.net/manual/en/eventlistener.seterrorcallback.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function setErrorCallback(string $cb): void {}
	}

	/**
	 * <p>Represents <i>SSL_CTX</i> structure. Provides methods and properties to configure the SSL context.</p>
	 * @link http://php.net/manual/en/class.eventsslcontext.php
	 * @since PECL event >= 1.2.6-beta
	 */
	final class EventSslContext {

		/**
		 * @var integer <p>SSLv2 client method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const SSLv2_CLIENT_METHOD = 1;

		/**
		 * @var integer <p>SSLv3 client method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const SSLv3_CLIENT_METHOD = 2;

		/**
		 * @var integer <p>SSLv23 client method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const SSLv23_CLIENT_METHOD = 3;

		/**
		 * @var integer <p>TLS client method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const TLS_CLIENT_METHOD = 4;

		/**
		 * @var integer <p>SSLv2 server method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const SSLv2_SERVER_METHOD = 5;

		/**
		 * @var integer <p>SSLv3 server method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const SSLv3_SERVER_METHOD = 6;

		/**
		 * @var integer <p>SSLv23 server method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const SSLv23_SERVER_METHOD = 7;

		/**
		 * @var integer <p>TLS server method. See <i>SSL_CTX_new(3)</i> man page.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const TLS_SERVER_METHOD = 8;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . The option points to path of local certificate.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_LOCAL_CERT = 1;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . The option points to path of the private key.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_LOCAL_PK = 2;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents passphrase of the certificate.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_PASSPHRASE = 3;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents path of the certificate authority file.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_CA_FILE = 4;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents path where the certificate authority file should be searched for.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_CA_PATH = 5;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents option that allows self-signed certificates.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_ALLOW_SELF_SIGNED = 6;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents option that tells Event to verify peer.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_VERIFY_PEER = 7;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents maximum depth for the certificate chain verification that shall be allowed for the SSL context.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_VERIFY_DEPTH = 8;

		/**
		 * @var integer <p>Key for an item of the options' array used in <code>EventSslContext::__construct()</code> . Represents the cipher list for the SSL context.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php
		 */
		const OPT_CIPHERS = 9;

		/**
		 * @var string <p>Path to local certificate file on filesystem. It must be a PEM-encoded file which contains certificate. It can optionally contain the certificate chain of issuers.</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php#eventsslcontext.props.local-cert
		 */
		public $local_cert;

		/**
		 * @var string <p>Path to local private key file</p>
		 * @link http://php.net/manual/en/class.eventsslcontext.php#eventsslcontext.props.local-pk
		 */
		public $local_pk;

		/**
		 * Constructs an OpenSSL context for use with Event classes
		 * <p>Creates SSL context holding pointer to <i>SSL_CTX</i> (see the system manual).</p>
		 * @param string $method <p>One of  <i>EventSslContext::&#42;_METHOD</i> constants .</p>
		 * @param string $options <p>Associative array of SSL context options One of  <i>EventSslContext::OPT_&#42;</i> constants .</p>
		 * @return self <p>Returns EventSslContext object.</p>
		 * @link http://php.net/manual/en/eventsslcontext.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public function __construct(string $method, string $options) {}
	}

	/**
	 * <p><b>EventUtil</b> is a singleton with supplimentary methods and constants.</p>
	 * @link http://php.net/manual/en/class.eventutil.php
	 * @since PECL event >= 1.5.0
	 */
	final class EventUtil {

		/**
		 * @var integer <p>IPv4 address family</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const AF_INET = 2;

		/**
		 * @var integer <p>IPv6 address family</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const AF_INET6 = 10;

		/**
		 * @var integer <p>Unspecified IP address family</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const AF_UNSPEC = 0;

		/**
		 * @var integer <p>Libevent' version number at the time when Event extension had been compiled with the library.</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const LIBEVENT_VERSION_NUMBER = 33559808;

		/**
		 * @var integer <p>Socket option. Enable socket debugging. Only allowed for processes with the <i>CAP_NET_ADMIN</i> capability or an effective user ID of <b><code>0</code></b> . (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_DEBUG = 1;

		/**
		 * @var integer <p>Socket option. Indicates that the rules used in validating addresses supplied in a <i>bind(2)</i> call should allow reuse of local addresses. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_REUSEADDR = 2;

		/**
		 * @var integer <p>Socket option. Enable sending of keep-alive messages on connection-oriented sockets. Expects an integer boolean flag. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_KEEPALIVE = 9;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_DONTROUTE = 5;

		/**
		 * @var integer <p>Socket option. When enabled, a <i>close(2)</i> or <i>shutdown(2)</i> will not return until all queued messages for the socket have been successfully sent or the linger timeout has been reached. Otherwise, the call returns immediately and the closing is done in the background. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_LINGER = 13;

		/**
		 * @var integer <p>Socket option. Reports whether transmission of broadcast messages is supported. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_BROADCAST = 6;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_OOBINLINE = 10;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_SNDBUF = 7;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_RCVBUF = 8;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_SNDLOWAT = 19;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_RCVLOWAT = 18;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_SNDTIMEO = 21;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_RCVTIMEO = 20;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_TYPE = 3;

		/**
		 * @var integer <p>Socket option. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SO_ERROR = 4;

		/**
		 * @var integer <p>Socket option level. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SOL_SOCKET = 1;

		/**
		 * @var integer <p>Socket option level. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SOL_TCP = 6;

		/**
		 * @var integer <p>Socket option level. See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const SOL_UDP = 17;

		/**
		 * @var integer <p>See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const IPPROTO_IP = 0;

		/**
		 * @var integer <p>See the <i>socket(7)</i> manual page. (Added in event-1.6.0.)</p>
		 * @link http://php.net/manual/en/class.eventutil.php
		 */
		const IPPROTO_IPV6 = 41;

		/**
		 * The abstract constructor
		 * <p>EventUtil is a singleton. Therefore the constructor is abstract, and it is impossible to create objects based on this class.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventutil.construct.php
		 * @since PECL event >= 1.2.6-beta
		 */
		abstract public function __construct();

		/**
		 * Returns the most recent socket error number
		 * <p>Returns the most recent socket error number( <i>errno</i> ).</p>
		 * @param mixed $socket <p>Socket resource, stream or a file descriptor of a socket.</p>
		 * @return int <p>Returns the most recent socket error number( <i>errno</i> ).</p>
		 * @link http://php.net/manual/en/eventutil.getlastsocketerrno.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function getLastSocketErrno($socket = NULL): int {}

		/**
		 * Returns the most recent socket error
		 * <p>Returns the most recent socket error.</p>
		 * @param mixed $socket <p>Socket resource, stream or a file descriptor of a socket.</p>
		 * @return string <p>Returns the most recent socket error.</p>
		 * @link http://php.net/manual/en/eventutil.getlastsocketerror.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function getLastSocketError($socket = NULL): string {}

		/**
		 * Returns numeric file descriptor of a socket, or stream
		 * <p>Returns numeric file descriptor of a socket or stream specified by <code>socket</code> argument just like the <i>Event</i> extension does it internally for all methods accepting socket resource or stream.</p>
		 * @param mixed $socket <p>Socket resource or stream.</p>
		 * @return int <p>Returns numeric file descriptor of a socket, or stream. <b>EventUtil::getSocketFd()</b> returns <b><code>FALSE</code></b> in case if it is whether failed to recognize the type of the underlying file, or detected that the file descriptor associated with <code>socket</code> is not valid.</p>
		 * @link http://php.net/manual/en/eventutil.getsocketfd.php
		 * @since PECL event >= 1.7.0
		 */
		public static function getSocketFd($socket): int {}

		/**
		 * Retreives the current address to which the socket is bound
		 * <p>Retreives the current address to which the <code>socket</code> is bound.</p>
		 * @param mixed $socket <p>Socket resource, stream or a file descriptor of a socket.</p>
		 * @param string $address <p>Output parameter. IP-address, or the UNIX domain socket path depending on the socket address family.</p>
		 * @param mixed $port <p>Output parameter. The port the socket is bound to. Has no meaning for UNIX domain sockets.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventutil.getsocketname.php
		 * @since PECL event >= 1.5.0
		 */
		public static function getSocketName($socket, string &$address, &$port = NULL): bool {}

		/**
		 * Sets socket options
		 * <p>Sets socket options.</p>
		 * @param mixed $socket <p>Socket resource, stream, or numeric file descriptor associated with the socket.</p>
		 * @param int $level <p>One of <i>EventUtil::SOL_&#42;</i> constants. Specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a <code>level</code> parameter of <b><code>EventUtil::SOL_SOCKET</code></b> would be used. Other levels, such as TCP, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the <code>getprotobyname()</code> function. See EventUtil constants .</p>
		 * @param int $optname <p>Option name(type). Has the same meaning as corresponding parameter of <code>socket_get_option()</code> function. See EventUtil constants .</p>
		 * @param mixed $optval <p>Accepts the same values as <code>optval</code> parameter of the <code>socket_get_option()</code> function.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/eventutil.setsocketoption.php
		 * @see socket_get_option(), socket_set_option()
		 * @since PECL event >= 1.6.0
		 */
		public static function setSocketOption($socket, int $level, int $optname, $optval): bool {}

		/**
		 * Generates entropy by means of OpenSSL's RAND_poll()
		 * <p>Generates entropy by means of OpenSSL's <i>RAND_poll()</i> (see the system manual).</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/eventutil.sslrandpoll.php
		 * @since PECL event >= 1.2.6-beta
		 */
		public static function sslRandPoll(): void {}
	}

}
