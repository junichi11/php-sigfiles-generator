<?php



namespace {

	/**
	 * <p>Ev is a static class providing access to the default loop and to some common operations.</p>
	 * @link http://php.net/manual/en/class.ev.php
	 * @since PECL ev >= 0.2.0
	 */
	final class Ev {

		/**
		 * @var integer <p>The default flags value</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const FLAG_AUTO = 0;

		/**
		 * @var integer <p>If this flag used(or the program runs setuid or setgid), <i>libev</i> won't look at the environment variable LIBEV_FLAGS . Otherwise(by default), LIBEV_FLAGS will override the flags completely if it is found. Useful for performance tests and searching for bugs.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const FLAG_NOENV = 16777216;

		/**
		 * @var integer <p>Makes libev check for a fork in each iteration, instead of calling <code>EvLoop::fork()</code> manually. This works by calling <i>getpid()</i> on every iteration of the loop, and thus this might slow down the event loop with lots of loop iterations, but usually is not noticeable. This flag setting cannot be overridden or specified in the LIBEV_FLAGS environment variable.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const FLAG_FORKCHECK = 33554432;

		/**
		 * @var integer <p>When this flag is specified, <i>libev</i> won't attempt to use the <i>inotify</i> API for its ev_stat watchers. The flag can be useful to conserve inotify file descriptors, as otherwise each loop using <i>ev_stat</i> watchers consumes one <i>inotify</i> handle.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const FLAG_NOINOTIFY = 1048576;

		/**
		 * @var integer <p>When this flag is specified, <i>libev</i> will attempt to use the <i>signalfd</i> API for its ev_signal (and ev_child ) watchers. This API delivers signals synchronously, which makes it both faster and might make it possible to get the queued signal data. It can also simplify signal handling with threads, as long as signals are properly blocked in threads. <i>Signalfd</i> will not be used by default.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const FLAG_SIGNALFD = 2097152;

		/**
		 * @var integer <p>When this flag is specified, <i>libev</i> will avoid to modify the signal mask. Specifically, this means having to make sure signals are unblocked before receiving them.</p> <p>This behaviour is useful for custom signal handling, or handling signals only in specific threads.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const FLAG_NOSIGMASK = 4194304;

		/**
		 * @var integer <p>Means that event loop will look for new events, will handle those events and any already outstanding ones, but will not wait and block the process in case there are no events and will return after one iteration of the loop. This is sometimes useful to poll and handle new events while doing lengthy calculations, to keep the program responsive.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const RUN_NOWAIT = 1;

		/**
		 * @var integer <p>Means that event loop will look for new events (waiting if necessary) and will handle those and any already outstanding ones. It will block the process until at least one new event arrives (which could be an event internal to libev itself, so there is no guarantee that a user-registered callback will be called), and will return after one iteration of the loop.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const RUN_ONCE = 2;

		/**
		 * @var integer <p>Cancel the break operation.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BREAK_CANCEL = 0;

		/**
		 * @var integer <p>Makes the innermost <code>Ev::run()</code> (or <code>EvLoop::run()</code> ) call return.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BREAK_ONE = 1;

		/**
		 * @var integer <p>Makes all nested <code>Ev::run()</code> (or <code>EvLoop::run()</code> ) calls return.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BREAK_ALL = 2;

		/**
		 * @var integer <p>Minimum allowed watcher priority.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const MINPRI = -2;

		/**
		 * @var integer <p>Maximum allowed watcher priority.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const MAXPRI = 2;

		/**
		 * @var integer <p>The file descriptor in the EvIo watcher has become readable.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const READ = 1;

		/**
		 * @var integer <p>The file descriptor in the EvIo watcher has become writable.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const WRITE = 2;

		/**
		 * @var integer <p>EvTimer watcher has been timed out.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const TIMER = 256;

		/**
		 * @var integer <p>EvPeriodic watcher has been timed out.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const PERIODIC = 512;

		/**
		 * @var integer <p>A signal specified in <code>EvSignal::__construct()</code> has been received.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const SIGNAL = 1024;

		/**
		 * @var integer <p>The <code>pid</code> specified in <code>EvChild::__construct()</code> has received a status change.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const CHILD = 2048;

		/**
		 * @var integer <p>The path specified in EvStat watcher changed its attributes.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const STAT = 4096;

		/**
		 * @var integer <p>EvIdle watcher works when there is nothing to do with other watchers.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const IDLE = 8192;

		/**
		 * @var integer <p>All EvPrepare watchers are invoked just before <code>Ev::run()</code> starts. Thus, EvPrepare watchers are the last watchers invoked before the event loop sleeps or polls for new events.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const PREPARE = 16384;

		/**
		 * @var integer <p>All EvCheck watchers are queued just after <code>Ev::run()</code> has gathered the new events, but before it queues any callbacks for any received events. Thus, EvCheck watchers will be invoked before any other watchers of the same or lower priority within an event loop iteration.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const CHECK = 32768;

		/**
		 * @var integer <p>The embedded event loop specified in the EvEmbed watcher needs attention.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const EMBED = 65536;

		/**
		 * @var integer <p>Not ever sent(or otherwise used) by <i>libev</i> itself, but can be freely used by <i>libev</i> users to signal watchers (e.g. via <code>EvWatcher::feed()</code> ).</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const CUSTOM = 16777216;

		/**
		 * @var integer <p>An unspecified error has occurred, the watcher has been stopped. This might happen because the watcher could not be properly started because <i>libev</i> ran out of memory, a file descriptor was found to be closed or any other problem. <i>Libev</i> considers these application bugs. See also ANATOMY OF A WATCHER</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const ERROR = 2147483648;

		/**
		 * @var integer <p><i>select(2) backend</i></p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_SELECT = 1;

		/**
		 * @var integer <p><i>poll(2) backend</i></p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_POLL = 2;

		/**
		 * @var integer <p>Linux-specific <i>epoll(7)</i> backend for both pre- and post-2.6.9 kernels</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_EPOLL = 4;

		/**
		 * @var integer <p><i>kqueue</i> backend used on most BSD systems. EvEmbed watcher could be used to embed one loop(with kqueue backend) into another. For instance, one can try to create an event loop with <i>kqueue</i> backend and use it for sockets only.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_KQUEUE = 8;

		/**
		 * @var integer <p>Solaris 8 backend. This is not implemented yet.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_DEVPOLL = 16;

		/**
		 * @var integer <p>Solaris 10 event port mechanism with a good scaling.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_PORT = 32;

		/**
		 * @var integer <p>Try all backends(even currupted ones). It's not recommended to use it explicitly. Bitwise operators should be applied here(e.g. <b><code>Ev::BACKEND_ALL</code></b> &amp; ~ <b><code>Ev::BACKEND_KQUEUE</code></b> ) Use <code>Ev::recommendedBackends()</code> , or don't specify any backends at all.</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_ALL = 63;

		/**
		 * @var integer <p>Not a backend, but a mask to select all backend bits from <code>flags</code> value to mask out any backends(e.g. when modifying the LIBEV_FLAGS environment variable).</p>
		 * @link http://php.net/manual/en/class.ev.php
		 */
		const BACKEND_MASK = 65535;

		/**
		 * Constructs EvSignal watcher object
		 * <p>Constructs EvSignal watcher object and starts it automatically. For a stopped periodic watcher consider using <code>EvSignal::createStopped()</code> method.</p>
		 * @param int $signum <p>Signal number. See constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvSignal object on success.</p>
		 * @link http://php.net/manual/en/evsignal.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(int $signum, callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Returns an integer describing the backend used by libev
		 * <p>Returns an integer describing the backend used by <i>libev</i> . See Backend flags</p>
		 * @return int <p>Returns an integer(bit mask) describing the backend used by <i>libev</i> .</p>
		 * @link http://php.net/manual/en/ev.backend.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function backend(): int {}

		/**
		 * Returns or creates the default event loop
		 * <p>If the default event loop is not created, <b>EvLoop::defaultLoop()</b> creates it with the specified parameters. Otherwise, it just returns the object representing previously created instance ignoring all the parameters.</p>
		 * @param int $flags <p>One of the event loop flags</p>
		 * @param mixed $data <p>Custom data to associate with the loop.</p>
		 * @param float $io_interval
		 * @param float $timeout_interval
		 * @return EvLoop <p>Returns EvLoop object on success.</p>
		 * @link http://php.net/manual/en/evloop.defaultloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public static function defaultLoop(int $flags = Ev::FLAG_AUTO, $data = NULL, float $io_interval = 0., float $timeout_interval = 0.): \EvLoop {}

		/**
		 * Returns recursion depth
		 * <p>The number of times <code>Ev::run()</code> was entered minus the number of times <code>Ev::run()</code> was exited normally, in other words, the recursion depth. Outside <code>Ev::run()</code> , this number is <b><code>0</code></b> . In a callback, this number is <b><code>1</code></b> , unless <code>Ev::run()</code> was invoked recursively (or from another thread), in which case it is higher.</p>
		 * @return int <p><b>ev_depth()</b> returns recursion depth of the default loop.</p>
		 * @link http://php.net/manual/en/ev.depth.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function depth(): int {}

		/**
		 * Returns the set of backends that are embeddable in other event loops
		 * <p>Returns the set of backends that are embeddable in other event loops.</p>
		 * @return void <p>Returns a bit mask which can containing backend flags combined using bitwise <i>OR</i> operator.</p>
		 * @link http://php.net/manual/en/ev.embeddablebackends.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function embeddableBackends(): void {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Feed a signal event info Ev
		 * <p>Simulates a signal receive. It is safe to call this function at any time, from any context, including signal handlers or random threads. Its main use is to customise signal handling in the process.</p><p>Unlike <code>Ev::feedSignalEvent()</code> , this works regardless of which loop has registered the signal.</p>
		 * @param int $signum <p>Signal number. See <i>signal(7)</i> man page for detals. You can use constants exported by <i>pcntl</i> extension.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.feedsignal.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function feedSignal(int $signum): void {}

		/**
		 * Feed signal event into the default loop
		 * <p>Feed signal event into the default loop. Ev will react to this call as if the signal specified by <code>signal</code> had occurred.</p>
		 * @param int $signum <p>Signal number. See <i>signal(7)</i> man page for detals. See also constants exported by <i>pcntl</i> extension.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.feedsignalevent.php
		 * @since No version information available, might only be in Git
		 */
		final public static function feedSignalEvent(int $signum): void {}

		/**
		 * Creates EvFork watcher object associated with the current event loop instance
		 * <p>Creates EvFork watcher object associated with the current event loop instance</p>
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvFork <p>Returns EvFork object on success.</p>
		 * @link http://php.net/manual/en/evloop.fork.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function fork(callable $callback, $data = NULL, int $priority = 0): \EvFork {}

		/**
		 * Return the number of times the default event loop has polled for new events
		 * <p>Return the number of times the event loop has polled for new events. Sometimes useful as a generation counter.</p>
		 * @return int <p>Returns number of polls of the default event loop.</p>
		 * @link http://php.net/manual/en/ev.iteration.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function iteration(): int {}

		/**
		 * Returns the time when the last iteration of the default event loop has started
		 * <p>Returns the time when the last iteration of the default event loop has started. This is the time that timers( EvTimer and EvPeriodic ) are based on, and referring to it is usually faster then calling <code>Ev::time()</code> .</p>
		 * @return float <p>Returns number of seconds(fractional) representing the time when the last iteration of the default event loop has started.</p>
		 * @link http://php.net/manual/en/ev.now.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function now(): float {}

		/**
		 * Establishes the current time by querying the kernel, updating the time returned by Ev::now in the progress
		 * <p>Establishes the current time by querying the kernel, updating the time returned by <code>Ev::now()</code> in the progress. This is a costly operation and is usually done automatically within <code>Ev::run()</code> .</p><p>This method is rarely useful, but when some event callback runs for a very long time without entering the event loop, updating <i>libev</i> 's consideration of the current time is a good idea.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.nowupdate.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function nowUpdate(): void {}

		/**
		 * Returns a bit mask of recommended backends for current platform
		 * <p>Returns the set of all backends compiled into this binary of <i>libev</i> and also recommended for this platform, meaning it will work for most file descriptor types. This set is often smaller than the one returned by <b>ev_supported_backends()</b> , as for example <i>kqueue</i> is broken on most <i>BSD</i> systems and will not be auto-detected unless it is requested explicitly. This is the set of backends that <i>libev</i> will probe no backends specified explicitly.</p>
		 * @return void <p>Returns a bit mask which can containing backend flags combined using bitwise <i>OR</i> operator.</p>
		 * @link http://php.net/manual/en/ev.recommendedbackends.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function recommendedBackends(): void {}

		/**
		 * Resume previously suspended default event loop
		 * <p><code>Ev::suspend()</code> and <b>Ev::resume()</b> methods suspend and resume a loop correspondingly.</p><p>All timer watchers will be delayed by the time spend between <i>suspend</i> and <i>resume</i> , and all <i>periodic</i> watchers will be rescheduled(that is, they will lose any events that would have occurred while suspended).</p><p>After calling <code>Ev::suspend()</code> it is not allowed to call any function on the given loop other than <b>Ev::resume()</b> . Also it is not allowed to call <b>Ev::resume()</b> without a previous call to <code>Ev::suspend()</code> .</p><p>Calling <i>suspend</i> / <i>resume</i> has the side effect of updating the event loop time(see <code>Ev::nowUpdate()</code> ).</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.resume.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function resume(): void {}

		/**
		 * Begin checking for events and calling callbacks for the default loop
		 * <p>Begin checking for events and calling callbacks <i>for the default loop</i> . Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
		 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.run.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function run(int $flags = NULL): void {}

		/**
		 * Block the process for the given number of seconds
		 * <p>Block the process for the given number of seconds.</p>
		 * @param float $seconds <p>Fractional number of seconds</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.sleep.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function sleep(float $seconds): void {}

		/**
		 * Stops the default event loop
		 * <p>Stops the default event loop</p>
		 * @param int $how <p>One of <i>Ev::BREAK_&#42;</i> constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function stop(int $how = NULL): void {}

		/**
		 * Returns the set of backends supported by current libev configuration
		 * <p>Returns the set of backends supported by current libev configuration.</p>
		 * @return void <p>Returns a bit mask which can containing backend flags combined using bitwise <i>OR</i> operator.</p>
		 * @link http://php.net/manual/en/ev.supportedbackends.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function supportedBackends(): void {}

		/**
		 * Suspend the default event loop
		 * <p><b>Ev::suspend()</b> and <code>Ev::resume()</code> methods suspend and resume the default loop correspondingly.</p><p>All timer watchers will be delayed by the time spend between <i>suspend</i> and <i>resume</i> , and all <i>periodic</i> watchers will be rescheduled(that is, they will lose any events that would have occurred while suspended).</p><p>After calling <b>Ev::suspend()</b> it is not allowed to call any function on the given loop other than <code>Ev::resume()</code> . Also it is not allowed to call <code>Ev::resume()</code> without a previous call to <b>Ev::suspend()</b> .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.suspend.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function suspend(): void {}

		/**
		 * Returns the current time in fractional seconds since the epoch
		 * <p>Returns the current time in fractional seconds since the epoch. Consider using <code>Ev::now()</code></p>
		 * @return float <p>Returns the current time in fractional seconds since the epoch.</p>
		 * @link http://php.net/manual/en/ev.time.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function time(): float {}

		/**
		 * Performs internal consistency checks(for debugging)
		 * <p>Performs internal consistency checks(for debugging <i>libev</i> ) and abort the program if any data structures were found to be corrupted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/ev.verify.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function verify(): void {}
	}

	/**
	 * <p>EvPrepare and <b>EvCheck</b> watchers are usually used in pairs. EvPrepare watchers get invoked before the process blocks, <b>EvCheck</b> afterwards.</p>
	 * <p>It is not allowed to call <code>EvLoop::run()</code> or similar methods or functions that enter the current event loop from either EvPrepare or <b>EvCheck</b> watchers. Other loops than the current one are fine, however. The rationale behind this is that one don't need to check for recursion in those watchers, i.e. the sequence will always be: EvPrepare -&gt; blocking -&gt; <b>EvCheck</b> , so having a watcher of each kind they will always be called in pairs bracketing the blocking call.</p>
	 * <p>The main purpose is to integrate other event mechanisms into <i>libev</i> and their use is somewhat advanced. They could be used, for example, to track variable changes, implement custom watchers, integrate net-snmp or a coroutine library and lots more. They are also occasionally useful to cache some data and want to flush it before blocking.</p>
	 * <p>It is recommended to give <b>EvCheck</b> watchers highest( <b><code>Ev::MAXPRI</code></b> ) priority, to ensure that they are being run before any other watchers after the poll (this doesn&rsquo;t matter for EvPrepare watchers).</p>
	 * <p>Also, <b>EvCheck</b> watchers should not activate/feed events. While <i>libev</i> fully supports this, they might get executed before other <b>EvCheck</b> watchers did their job.</p>
	 * @link http://php.net/manual/en/class.evcheck.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvCheck extends \EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs the EvCheck watcher object
		 * <p>Constructs the EvCheck watcher object.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvCheck object on success.</p>
		 * @link http://php.net/manual/en/evcheck.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(callable $callback, $data = NULL, int $priority = NULL) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create instance of a stopped EvCheck watcher
		 * <p>Create instance of a stopped EvCheck watcher</p>
		 * @param string $callback <p>See Watcher callbacks .</p>
		 * @param string $data <p>Custom data associated with the watcher.</p>
		 * @param string $priority <p>Watcher priority</p>
		 * @return object <p>Returns EvCheck object on success.</p>
		 * @link http://php.net/manual/en/evcheck.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(string $callback, string $data = NULL, string $priority = NULL): object {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Begin checking for events and calling callbacks for the loop
		 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
		 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.run.php
		 * @since PECL ev >= 0.2.0
		 */
		public function run(int $flags = 0): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvChild</b> watchers trigger when the process receives a <b><code>SIGCHLD</code></b> in response to some child status changes (most typically when a child dies or exits). It is permissible to install an <b><code>EvChild</code></b> watcher after the child has been forked(which implies it might have already exited), as long as the event loop isn't entered(or is continued from a watcher), i.e. forking and then immediately registering a watcher for the child is fine, but forking and registering a watcher a few event loop iterations later or in the next callback invocation is not.</p>
	 * <p>It is allowed to register <b>EvChild</b> watchers in the <i>default loop</i> only.</p>
	 * @link http://php.net/manual/en/class.evchild.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvChild extends \EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . The process ID this watcher watches out for, or <b><code>0</code></b> , meaning any process ID.</p>
		 * @link http://php.net/manual/en/class.evchild.php#evchild.props.pid
		 */
		public $pid;

		/**
		 * @var mixed <p><i>Readonly</i> .The process ID that detected a status change.</p>
		 * @link http://php.net/manual/en/class.evchild.php#evchild.props.rpid
		 */
		public $rpid;

		/**
		 * @var mixed <p><i>Readonly</i> . The process exit status caused by rpid .</p>
		 * @link http://php.net/manual/en/class.evchild.php#evchild.props.rstatus
		 */
		public $rstatus;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs the EvChild watcher object
		 * <p>Constructs the EvChild watcher object.</p><p>Call the callback when a status change for process ID <code>pid</code> (or any <i>PID</i> if <code>pid</code> is <b><code>0</code></b> ) has been received(a status change happens when the process terminates or is killed, or, when <code>trace</code> is <b><code>TRUE</code></b>, additionally when it is stopped or continued). In other words, when the process receives a <b><code>SIGCHLD</code></b> , <i>Ev</i> will fetch the outstanding exit/wait status for all changed/zombie children and call the callback.</p><p>It is valid to install a child watcher after an EvChild has exited but before the event loop has started its next iteration. For example, first one calls <i>fork</i> , then the new child process might exit, and only then an EvChild watcher is installed in the parent for the new <i>PID</i> .</p><p>You can access both exit/tracing status and <code>pid</code> by using the rstatus and rpid properties of the watcher object.</p><p>The number of <i>PID</i> watchers per <i>PID</i> is unlimited. All of them will be called.</p><p>The <code>EvChild::createStopped()</code> method doesn't start(activate) the newly created watcher.</p>
		 * @param int $pid <p>Wait for status changes of process PID(or any process if PID is specified as <b><code>0</code></b> ).</p>
		 * @param bool $trace <p>If <b><code>FALSE</code></b>, only activate the watcher when the process terminates. Otherwise(<b><code>TRUE</code></b>) additionally activate the watcher when the process is stopped or continued.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvChild object on success.</p>
		 * @link http://php.net/manual/en/evchild.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(int $pid, bool $trace, callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create instance of a stopped EvCheck watcher
		 * <p>The same as <code>EvChild::__construct()</code> , but doesn't start the watcher automatically.</p>
		 * @param int $pid <p>The same as for <code>EvChild::__construct()</code></p>
		 * @param bool $trace <p>The same as for <code>EvChild::__construct()</code></p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return object
		 * @link http://php.net/manual/en/evchild.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(int $pid, bool $trace, callable $callback, $data = NULL, int $priority = NULL): object {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Configures the watcher
		 * @param int $pid <p>The same as for <code>EvChild::__construct()</code></p>
		 * @param bool $trace <p>The same as for <code>EvChild::__construct()</code></p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evchild.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set(int $pid, bool $trace): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p>Used to embed one event loop into another.</p>
	 * @link http://php.net/manual/en/class.evembed.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvEmbed extends \EvWatcher {

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.evembed.php#evembed.props.embed
		 */
		public $embed;

		/**
		 * Constructs the EvEmbed object
		 * <p>This is a rather advanced watcher type that lets to embed one event loop into another(currently only IO events are supported in the embedded loop, other types of watchers might be handled in a delayed or incorrect fashion and must not be used).</p><p>See the libev documentation for details.</p><p>This watcher is most useful on <i>BSD</i> systems without working <i>kqueue</i> to still be able to handle a large number of sockets. See example below.</p>
		 * @param object $other <p>Instance of EvLoop . The loop to embed, this loop must be embeddable(see <code>Ev::embeddableBackends()</code> ).</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvEmbed object on success.</p>
		 * @link http://php.net/manual/en/evembed.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(object $other, callable $callback = NULL, $data = NULL, int $priority = NULL) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create stopped EvEmbed watcher object
		 * <p>The same as <code>EvEmbed::__construct()</code> , but doesn't start the watcher automatically.</p>
		 * @param object $other <p>The same as for <code>EvEmbed::__construct()</code></p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return void <p>Returns stopped EvEmbed object on success.</p>
		 * @link http://php.net/manual/en/evembed.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(object $other, callable $callback = NULL, $data = NULL, int $priority = NULL): void {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Configures the watcher
		 * <p>Configures the watcher to use <code>other</code> event loop object.</p>
		 * @param object $other <p>The same as for <code>EvEmbed::__construct()</code></p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evembed.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set(object $other): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}

		/**
		 * Make a single, non-blocking sweep over the embedded loop
		 * <p>Make a single, non-blocking sweep over the embedded loop. Works similarly to the following, but in the most appropriate way for embedded loops:</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evembed.sweep.php
		 * @since PECL ev >= 0.2.0
		 */
		public function sweep(): void {}
	}

	/**
	 * <p>Fork watchers are called when a <i>fork()</i> was detected (usually because whoever signalled <i>libev</i> about it by calling <code>EvLoop::fork()</code> ). The invocation is done before the event loop blocks next and before EvCheck watchers are being called, and only in the child after the fork. Note, that if whoever calling <code>EvLoop::fork()</code> calls it in the wrong process, the fork handlers will be invoked, too.</p>
	 * @link http://php.net/manual/en/class.evfork.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvFork extends \EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs the EvFork watcher object
		 * <p>Constructs the EvFork watcher object and starts the watcher automatically.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvFork object on success.</p>
		 * @link http://php.net/manual/en/evfork.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Creates a stopped instance of EvFork watcher class
		 * <p>The same as <code>EvFork::__construct()</code> , but doesn't start the watcher automatically.</p>
		 * @param string $callback <p>See Watcher callbacks .</p>
		 * @param string $data <p>Custom data associated with the watcher.</p>
		 * @param string $priority <p>Watcher priority</p>
		 * @return object <p>Returns EvFork(stopped) object on success.</p>
		 * @link http://php.net/manual/en/evfork.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(string $callback, string $data = NULL, string $priority = NULL): object {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Creates EvFork watcher object associated with the current event loop instance
		 * <p>Creates EvFork watcher object associated with the current event loop instance</p>
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvFork <p>Returns EvFork object on success.</p>
		 * @link http://php.net/manual/en/evloop.fork.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function fork(callable $callback, $data = NULL, int $priority = 0): \EvFork {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvIdle</b> watchers trigger events when no other events of the same or higher priority are pending ( EvPrepare , EvCheck and other <b>EvIdle</b> watchers do not count as receiving <i>events</i> ).</p>
	 * <p>Thus, as long as the process is busy handling sockets or timeouts(or even signals) of the same or higher priority it will not be triggered. But when the process is in idle(or only lower-priority watchers are pending), the <b>EvIdle</b> watchers are being called once per event loop iteration - until stopped, that is, or the process receives more events and becomes busy again with higher priority stuff.</p>
	 * <p>Apart from keeping the process non-blocking(which is a useful on its own sometimes), <b>EvIdle</b> watchers are a good place to do <i>"pseudo-background processing"</i> , or delay processing stuff to after the event loop has handled all outstanding events.</p>
	 * <p>The most noticeable effect is that as long as any <i>idle</i> watchers are active, the process will <i>not</i> block when waiting for new events.</p>
	 * @link http://php.net/manual/en/class.evidle.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvIdle extends \EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs the EvIdle watcher object
		 * <p>Constructs the EvIdle watcher object and starts the watcher automatically.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvIdle object on success.</p>
		 * @link http://php.net/manual/en/evidle.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(callable $callback, $data = NULL, int $priority = NULL) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Creates instance of a stopped EvIdle watcher object
		 * <p>The same as <code>EvIdle::__construct()</code> , but doesn't start the watcher automatically.</p>
		 * @param string $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return object <p>Returns EvIdle object on success.</p>
		 * @link http://php.net/manual/en/evidle.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(string $callback, $data = NULL, int $priority = NULL): object {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvIo</b> watchers check whether a file descriptor(or socket, or a stream castable to numeric file descriptor) is readable or writable in each iteration of the event loop, or, more precisely, when reading would not block the process and writing would at least be able to write some data. This behaviour is called <i>level-triggering</i> because events are kept receiving as long as the condition persists. To stop receiving events just stop the watcher.</p>
	 * <p>The number of read and/or write event watchers per <code>fd</code> is unlimited. Setting all file descriptors to non-blocking mode is also usually a good idea(but not required).</p>
	 * <p>Another thing to watch out for is that it is quite easy to receive false readiness notifications, i.e. the callback might be called with <b><code>Ev::READ</code></b> but a subsequent <i>read()</i> will actually block because there is no data. It is very easy to get into this situation. Thus it is best to always use non-blocking I/O: An extra <i>read()</i> returning <b><code>EAGAIN</code></b> (or similar) is far preferable to a program hanging until some data arrives.</p>
	 * <p>If for some reason it is impossible to run the <code>fd</code> in non-blocking mode, then separately re-test whether a file descriptor is really ready. Some people additionally use <b><code>SIGALRM</code></b> and an interval timer, just to be sure thry won't block infinitely.</p>
	 * <p>Always consider using non-blocking mode.</p>
	 * @link http://php.net/manual/en/class.evio.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvIo extends \EvWatcher {

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.evio.php#evio.props.fd
		 */
		public $fd;

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.evio.php#evio.props.events
		 */
		public $events;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs EvIo watcher object
		 * <p>Constructs EvIo watcher object and starts the watcher automatically.</p>
		 * @param mixed $fd <p>Can be a stream opened with <code>fopen()</code> or similar functions, numeric file descriptor, or socket.</p>
		 * @param int $events <p><b><code>Ev::READ</code></b> and/or <b><code>Ev::WRITE</code></b> . See the bit masks .</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvIo object on success.</p>
		 * @link http://php.net/manual/en/evio.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct($fd, int $events, callable $callback, $data = NULL, int $priority = NULL) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create stopped EvIo watcher object
		 * <p>The same as <code>EvIo::__construct()</code> , but doesn't start the watcher automatically.</p>
		 * @param mixed $fd <p>The same as for <code>EvIo::__construct()</code></p>
		 * @param int $events <p>The same as for <code>EvIo::__construct()</code></p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return EvIo <p>Returns EvIo object on success.</p>
		 * @link http://php.net/manual/en/evio.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped($fd, int $events, callable $callback, $data = NULL, int $priority = 0): \EvIo {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Configures the watcher
		 * <p>Configures the EvIo watcher</p>
		 * @param mixed $fd <p>The same as for <code>EvIo::__construct()</code></p>
		 * @param int $events <p>The same as for <code>EvIo::__construct()</code></p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evio.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set($fd, int $events): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p>Represents an event loop that is always distinct from the <i>default loop</i> . Unlike the <i>default loop</i> , it cannot handle EvChild watchers.</p>
	 * <p>Having threads we have to create a loop per thread, and use the <i>default loop</i> in the parent thread.</p>
	 * <p>The <i>default event loop</i> is initialized automatically by <i>Ev</i> . It is accessible via methods of the Ev class, or via <code>EvLoop::defaultLoop()</code> method.</p>
	 * @link http://php.net/manual/en/class.evloop.php
	 * @since PECL ev >= 0.2.0
	 */
	final class EvLoop {

		/**
		 * @var mixed <p>Custom data attached to loop</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> . The backend flags indicating the event backend in use.</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.backend
		 */
		public $backend;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if it is the default event loop.</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.is-default-loop
		 */
		public $is_default_loop;

		/**
		 * @var mixed <p>The current iteration count of the loop. See <code>Ev::iteration()</code></p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.iteration
		 */
		public $iteration;

		/**
		 * @var mixed <p>The number of pending watchers. <b><code>0</code></b> indicates that there are no watchers pending.</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.pending
		 */
		public $pending;

		/**
		 * @var mixed <p>Higher io_interval allows <i>libev</i> to spend more time collecting EvIo events, so more events can be handled per iteration, at the cost of increasing latency. Timeouts (both EvPeriodic and EvTimer ) will not be affected. Setting this to a non-zero value will introduce an additional <i>sleep()</i> call into most loop iterations. The sleep time ensures that <i>libev</i> will not poll for EvIo events more often than once per this interval, on average. Many programs can usually benefit by setting the io_interval to a value near <b><code>0.1</code></b> , which is often enough for interactive servers(not for games). It usually doesn't make much sense to set it to a lower value than <b><code>0.01</code></b> , as this approaches the timing granularity of most systems.</p> <p>See also FUNCTIONS CONTROLLING EVENT LOOPS .</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.io-interval
		 */
		public $io_interval;

		/**
		 * @var mixed <p>Higher timeout_interval allows <i>libev</i> to spend more time collecting timeouts, at the expense of increased latency/jitter/inexactness(the watcher callback will be called later). EvIo watchers will not be affected. Setting this to a non-null value will not introduce any overhead in <i>libev</i> . See also FUNCTIONS CONTROLLING EVENT LOOPS .</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.timeout-interval
		 */
		public $timeout_interval;

		/**
		 * @var mixed <p>The recursion depth. See <code>Ev::depth()</code> .</p>
		 * @link http://php.net/manual/en/class.evloop.php#evloop.props.depth
		 */
		public $depth;

		/**
		 * Constructs the event loop object
		 * <p>Constructs the event loop object.</p>
		 * @param int $flags <p>One of the event loop flags</p>
		 * @param mixed $data <p>Custom data associated with the loop.</p>
		 * @param float $io_interval <p>See io_interval</p>
		 * @param float $timeout_interval <p>See timeout_interval</p>
		 * @return self <p>Returns new EvLoop object.</p>
		 * @link http://php.net/manual/en/evloop.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(int $flags = NULL, $data = NULL, float $io_interval = 0.0, float $timeout_interval = 0.0) {}

		/**
		 * Returns an integer describing the backend used by libev
		 * <p>The same as <code>Ev::backend()</code> , but for the loop instance.</p>
		 * @return int <p>Returns an integer describing the backend used by libev. See <code>Ev::backend()</code> .</p>
		 * @link http://php.net/manual/en/evloop.backend.php
		 * @since PECL ev >= 0.2.0
		 */
		public function backend(): int {}

		/**
		 * Creates EvCheck object associated with the current event loop instance
		 * <p>Creates EvCheck object associated with the current event loop instance.</p>
		 * @param string $callback
		 * @param string $data
		 * @param string $priority
		 * @return EvCheck <p>Returns EvCheck object on success.</p>
		 * @link http://php.net/manual/en/evloop.check.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function check(string $callback, string $data = NULL, string $priority = NULL): \EvCheck {}

		/**
		 * Creates EvChild object associated with the current event loop
		 * <p>Creates EvChild object associated with the current event loop.</p>
		 * @param string $pid
		 * @param string $trace
		 * @param string $callback
		 * @param string $data
		 * @param string $priority
		 * @return EvChild <p>Returns EvChild object on success.</p>
		 * @link http://php.net/manual/en/evloop.child.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function child(string $pid, string $trace, string $callback, string $data = NULL, string $priority = NULL): \EvChild {}

		/**
		 * Returns or creates the default event loop
		 * <p>If the default event loop is not created, <b>EvLoop::defaultLoop()</b> creates it with the specified parameters. Otherwise, it just returns the object representing previously created instance ignoring all the parameters.</p>
		 * @param int $flags <p>One of the event loop flags</p>
		 * @param mixed $data <p>Custom data to associate with the loop.</p>
		 * @param float $io_interval
		 * @param float $timeout_interval
		 * @return EvLoop <p>Returns EvLoop object on success.</p>
		 * @link http://php.net/manual/en/evloop.defaultloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public static function defaultLoop(int $flags = Ev::FLAG_AUTO, $data = NULL, float $io_interval = 0., float $timeout_interval = 0.): \EvLoop {}

		/**
		 * Returns recursion depth
		 * <p>The number of times <code>Ev::run()</code> was entered minus the number of times <code>Ev::run()</code> was exited normally, in other words, the recursion depth. Outside <code>Ev::run()</code> , this number is <b><code>0</code></b> . In a callback, this number is <b><code>1</code></b> , unless <code>Ev::run()</code> was invoked recursively (or from another thread), in which case it is higher.</p>
		 * @return int <p><b>ev_depth()</b> returns recursion depth of the default loop.</p>
		 * @link http://php.net/manual/en/ev.depth.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function depth(): int {}

		/**
		 * Creates an instance of EvEmbed watcher associated with the current EvLoop object
		 * <p>Creates an instance of EvEmbed watcher associated with the current EvLoop object.</p>
		 * @param string $other
		 * @param string $callback
		 * @param string $data
		 * @param string $priority
		 * @return EvEmbed <p>Returns EvEmbed object on success.</p>
		 * @link http://php.net/manual/en/evloop.embed.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function embed(string $other, string $callback = NULL, string $data = NULL, string $priority = NULL): \EvEmbed {}

		/**
		 * Creates EvFork watcher object associated with the current event loop instance
		 * <p>Creates EvFork watcher object associated with the current event loop instance</p>
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvFork <p>Returns EvFork object on success.</p>
		 * @link http://php.net/manual/en/evloop.fork.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function fork(callable $callback, $data = NULL, int $priority = 0): \EvFork {}

		/**
		 * Creates EvIdle watcher object associated with the current event loop instance
		 * <p>Creates EvIdle watcher object associated with the current event loop instance</p>
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvIdle <p>Returns EvIdle object on success.</p>
		 * @link http://php.net/manual/en/evloop.idle.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function idle(callable $callback, $data = NULL, int $priority = 0): \EvIdle {}

		/**
		 * Invoke all pending watchers while resetting their pending state
		 * <p>Invoke all pending watchers while resetting their pending state.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.invokepending.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invokePending(): void {}

		/**
		 * Create EvIo watcher object associated with the current event loop instance
		 * <p>Create EvIo watcher object associated with the current event loop instance.</p>
		 * @param mixed $fd
		 * @param int $events
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvIo <p>Returns EvIo object on success.</p>
		 * @link http://php.net/manual/en/evloop.io.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function io($fd, int $events, callable $callback, $data = NULL, int $priority = 0): \EvIo {}

		/**
		 * Return the number of times the default event loop has polled for new events
		 * <p>Return the number of times the event loop has polled for new events. Sometimes useful as a generation counter.</p>
		 * @return int <p>Returns number of polls of the default event loop.</p>
		 * @link http://php.net/manual/en/ev.iteration.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function iteration(): int {}

		/**
		 * Must be called after a fork
		 * <p>Must be called after a <i>fork</i> in the child, before entering or continuing the event loop. An alternative is to use <b><code>Ev::FLAG_FORKCHECK</code></b> which calls this function automatically, at some performance loss (refer to the libev documentation ).</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.loopfork.php
		 * @since PECL ev >= 0.2.0
		 */
		public function loopFork(): void {}

		/**
		 * Returns the current "event loop time"
		 * <p>Returns the current "event loop time", which is the time the event loop received events and started processing them. This timestamp does not change as long as callbacks are being processed, and this is also the base time used for relative timers. You can treat it as the timestamp of the event occurring(or more correctly, libev finding out about it).</p>
		 * @return float <p>Returns time of the event loop in (fractional) seconds.</p>
		 * @link http://php.net/manual/en/evloop.now.php
		 * @since PECL ev >= 0.2.0
		 */
		public function now(): float {}

		/**
		 * Establishes the current time by querying the kernel, updating the time returned by EvLoop::now in the progress
		 * <p>Establishes the current time by querying the kernel, updating the time returned by <code>EvLoop::now()</code> in the progress. This is a costly operation and is usually done automatically within <code>EvLoop::run()</code> .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.nowupdate.php
		 * @since PECL ev >= 0.2.0
		 */
		public function nowUpdate(): void {}

		/**
		 * Creates EvPeriodic watcher object associated with the current event loop instance
		 * <p>Creates EvPeriodic watcher object associated with the current event loop instance</p>
		 * @param float $offset
		 * @param float $interval
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvPeriodic <p>Returns EvPeriodic object on success.</p>
		 * @link http://php.net/manual/en/evloop.periodic.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function periodic(float $offset, float $interval, callable $callback, $data = NULL, int $priority = 0): \EvPeriodic {}

		/**
		 * Creates EvPrepare watcher object associated with the current event loop instance
		 * <p>Creates EvPrepare watcher object associated with the current event loop instance</p>
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvPrepare <p>Returns EvPrepare object on success</p>
		 * @link http://php.net/manual/en/evloop.prepare.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function prepare(callable $callback, $data = NULL, int $priority = 0): \EvPrepare {}

		/**
		 * Resume previously suspended default event loop
		 * <p><code>EvLoop::suspend()</code> and <b>EvLoop::resume()</b> methods suspend and resume a loop correspondingly.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.resume.php
		 * @since PECL ev >= 0.2.0
		 */
		public function resume(): void {}

		/**
		 * Begin checking for events and calling callbacks for the loop
		 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
		 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.run.php
		 * @since PECL ev >= 0.2.0
		 */
		public function run(int $flags = 0): void {}

		/**
		 * Creates EvSignal watcher object associated with the current event loop instance
		 * <p>Creates EvSignal watcher object associated with the current event loop instance</p>
		 * @param int $signum
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvSignal <p>Returns EvSignal object on success</p>
		 * @link http://php.net/manual/en/evloop.signal.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function signal(int $signum, callable $callback, $data = NULL, int $priority = 0): \EvSignal {}

		/**
		 * Creates EvStat watcher object associated with the current event loop instance
		 * <p>Creates EvStat watcher object associated with the current event loop instance</p>
		 * @param string $path
		 * @param float $interval
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvStat <p>Returns EvStat object on success</p>
		 * @link http://php.net/manual/en/evloop.stat.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function stat(string $path, float $interval, callable $callback, $data = NULL, int $priority = 0): \EvStat {}

		/**
		 * Stops the event loop
		 * <p>Stops the event loop</p>
		 * @param int $how <p>One of <i>Ev::BREAK_&#42;</i> constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(int $how = NULL): void {}

		/**
		 * Suspend the loop
		 * <p><b>EvLoop::suspend()</b> and <code>EvLoop::resume()</code> methods suspend and resume a loop correspondingly.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.suspend.php
		 * @since PECL ev >= 0.2.0
		 */
		public function suspend(): void {}

		/**
		 * Creates EvTimer watcher object associated with the current event loop instance
		 * <p>Creates EvTimer watcher object associated with the current event loop instance</p>
		 * @param float $after
		 * @param float $repeat
		 * @param callable $callback
		 * @param mixed $data
		 * @param int $priority
		 * @return EvTimer <p>Returns EvTimer object on success</p>
		 * @link http://php.net/manual/en/evloop.timer.php
		 * @since PECL ev >= 0.2.0
		 */
		final public function timer(float $after, float $repeat, callable $callback, $data = NULL, int $priority = 0): \EvTimer {}

		/**
		 * Performs internal consistency checks(for debugging)
		 * <p>Performs internal consistency checks(for debugging <i>libev</i> ) and abort the program if any data structures were found to be corrupted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.verify.php
		 * @since PECL ev >= 0.2.0
		 */
		public function verify(): void {}
	}

	/**
	 * <p>Periodic watchers are also timers of a kind, but they are very versatile.</p>
	 * <p>Unlike EvTimer , <b>EvPeriodic</b> watchers are not based on real time(or relative time, the physical time that passes) but on wall clock time(absolute time, calendar or clock). The difference is that wall clock time can run faster or slower than real time, and time jumps are not uncommon(e.g. when adjusting it).</p>
	 * <p><b>EvPeriodic</b> watcher can be configured to trigger after some specific point in time. For example, if an <b>EvPeriodic</b> watcher is configured to trigger <i>"in 10 seconds"</i> (e.g. <code>EvLoop::now()</code> + <b><code>10.0</code></b> , i.e. an absolute time, not a delay), and the system clock is reset to <i>January of the previous year</i> , then it will take a year or more to trigger the event (unlike an EvTimer , which would still trigger roughly <b><code>10</code></b> seconds after starting it as it uses a relative timeout).</p>
	 * <p>As with timers, the callback is guaranteed to be invoked only when the point in time where it is supposed to trigger has passed. If multiple timers become ready during the same loop iteration then the ones with earlier time-out values are invoked before ones with later time-out values (but this is no longer true when a callback calls <code>EvLoop::run()</code> recursively).</p>
	 * @link http://php.net/manual/en/class.evperiodic.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvPeriodic extends \EvWatcher {

		/**
		 * @var mixed <p>When repeating, this contains the offset value, otherwise this is the absolute point in time(the offset value passed to <code>EvPeriodic::set()</code> , although <i>libev</i> might modify this value for better numerical stability).</p>
		 * @link http://php.net/manual/en/class.evperiodic.php#evperiodic.props.offset
		 */
		public $offset;

		/**
		 * @var mixed <p>The current interval value. Can be modified any time, but changes only take effect when the periodic timer fires or <code>EvPeriodic::again()</code> is being called.</p>
		 * @link http://php.net/manual/en/class.evperiodic.php#evperiodic.props.interval
		 */
		public $interval;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs EvPeriodic watcher object
		 * <p>Constructs EvPeriodic watcher object and starts it automatically. <code>EvPeriodic::createStopped()</code> method creates stopped periodic watcher.</p>
		 * @param float $offset <p>See Periodic watcher operation modes</p>
		 * @param string $interval <p>See Periodic watcher operation modes</p>
		 * @param callable $reschedule_cb <p>Reschedule callback. You can pass <b><code>NULL</code></b>. See Periodic watcher operation modes</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvPeriodic object on success.</p>
		 * @link http://php.net/manual/en/evperiodic.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(float $offset, string $interval, callable $reschedule_cb, callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Simply stops and restarts the periodic watcher again
		 * <p>Simply stops and restarts the periodic watcher again. This is only useful when attributes are changed.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evperiodic.again.php
		 * @since PECL ev >= 0.2.0
		 */
		public function again(): void {}

		/**
		 * Returns the absolute time that this watcher is supposed to trigger next
		 * <p>When the watcher is active, returns the absolute time that this watcher is supposed to trigger next. This is not the same as the offset argument to <code>EvPeriodic::set()</code> or <code>EvPeriodic::__construct()</code> , but indeed works even in interval mode.</p>
		 * @return float <p>Returns the absolute time this watcher is supposed to trigger next in seconds.</p>
		 * @link http://php.net/manual/en/evperiodic.at.php
		 * @since PECL ev >= 0.2.0
		 */
		public function at(): float {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create a stopped EvPeriodic watcher
		 * <p>Create EvPeriodic object. Unlike <code>EvPeriodic::__construct()</code> this method doesn't start the watcher automatically.</p>
		 * @param float $offset <p>See Periodic watcher operation modes</p>
		 * @param float $interval <p>See Periodic watcher operation modes</p>
		 * @param callable $reschedule_cb <p>Reschedule callback. You can pass <b><code>NULL</code></b>. See Periodic watcher operation modes</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return EvPeriodic <p>Returns EvPeriodic watcher object on success.</p>
		 * @link http://php.net/manual/en/evperiodic.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(float $offset, float $interval, callable $reschedule_cb, callable $callback, $data = NULL, int $priority = 0): \EvPeriodic {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Returns the current "event loop time"
		 * <p>Returns the current "event loop time", which is the time the event loop received events and started processing them. This timestamp does not change as long as callbacks are being processed, and this is also the base time used for relative timers. You can treat it as the timestamp of the event occurring(or more correctly, libev finding out about it).</p>
		 * @return float <p>Returns time of the event loop in (fractional) seconds.</p>
		 * @link http://php.net/manual/en/evloop.now.php
		 * @since PECL ev >= 0.2.0
		 */
		public function now(): float {}

		/**
		 * Begin checking for events and calling callbacks for the loop
		 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
		 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.run.php
		 * @since PECL ev >= 0.2.0
		 */
		public function run(int $flags = 0): void {}

		/**
		 * Configures the watcher
		 * <p>(Re-)Configures EvPeriodic watcher</p>
		 * @param float $offset <p>The same meaning as for <code>EvPeriodic::__construct()</code> . See Periodic watcher operation modes</p>
		 * @param float $interval <p>The same meaning as for <code>EvPeriodic::__construct()</code> . See Periodic watcher operation modes</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evperiodic.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set(float $offset, float $interval): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvPrepare</b> and EvCheck watchers are usually used in pairs. <b>EvPrepare</b> watchers get invoked before the process blocks, EvCheck afterwards.</p>
	 * <p>It is not allowed to call <code>EvLoop::run()</code> or similar methods or functions that enter the current event loop from either <b>EvPrepare</b> or EvCheck watchers. Other loops than the current one are fine, however. The rationale behind this is that one don't need to check for recursion in those watchers, i.e. the sequence will always be: <b>EvPrepare</b> -&gt; blocking -&gt; EvCheck , so having a watcher of each kind they will always be called in pairs bracketing the blocking call.</p>
	 * <p>The main purpose is to integrate other event mechanisms into <i>libev</i> and their use is somewhat advanced. They could be used, for example, to track variable changes, implement custom watchers, integrate net-snmp or a coroutine library and lots more. They are also occasionally useful to cache some data and want to flush it before blocking.</p>
	 * <p>It is recommended to give EvCheck watchers highest( <b><code>Ev::MAXPRI</code></b> ) priority, to ensure that they are being run before any other watchers after the poll (this doesn&rsquo;t matter for <b>EvPrepare</b> watchers).</p>
	 * <p>Also, EvCheck watchers should not activate/feed events. While <i>libev</i> fully supports this, they might get executed before other EvCheck watchers did their job.</p>
	 * @link http://php.net/manual/en/class.evprepare.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvPrepare extends \EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs EvPrepare watcher object
		 * <p>Constructs EvPrepare watcher object. And starts the watcher automatically. If need a stopped watcher consider using <code>EvPrepare::createStopped()</code></p>
		 * @param string $callback <p>See Watcher callbacks .</p>
		 * @param string $data <p>Custom data associated with the watcher.</p>
		 * @param string $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvPrepare object on success.</p>
		 * @link http://php.net/manual/en/evprepare.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(string $callback, string $data = NULL, string $priority = NULL) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Creates a stopped instance of EvPrepare watcher
		 * <p>Creates a stopped instance of EvPrepare watcher. Unlike <code>EvPrepare::__construct()</code> , this method doesn' start the watcher automatically.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return EvPrepare <p>Return EvPrepare object on success.</p>
		 * @link http://php.net/manual/en/evprepare.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(callable $callback, $data = NULL, int $priority = 0): \EvPrepare {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Begin checking for events and calling callbacks for the loop
		 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
		 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.run.php
		 * @since PECL ev >= 0.2.0
		 */
		public function run(int $flags = 0): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvSignal</b> watchers will trigger an event when the process receives a specific signal one or more times. Even though signals are very asynchronous, <i>libev</i> will try its best to deliver signals synchronously, i.e. as part of the normal event processing, like any other event.</p>
	 * <p>There is no limit for the number of watchers for the same signal, but only within the same loop, i.e. one can watch for <b><code>SIGINT</code></b> in the default loop and for <b><code>SIGIO</code></b> in another loop, but it is not allowed to watch for <b><code>SIGINT</code></b> in both the default loop and another loop at the same time. At the moment, <b><code>SIGCHLD</code></b> is permanently tied to the default loop.</p>
	 * <p>If possible and supported, <i>libev</i> will install its handlers with <i>SA_RESTART</i> (or equivalent) behaviour enabled, so system calls should not be unduly interrupted. In case of a problem with system calls getting interrupted by signals, all the signals can be blocked in an EvCheck watcher and unblocked in a EvPrepare watcher.</p>
	 * @link http://php.net/manual/en/class.evsignal.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvSignal extends \EvWatcher {

		/**
		 * @var mixed <p>Signal number. See the constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
		 * @link http://php.net/manual/en/class.evsignal.php#evsignal.props.signum
		 */
		public $signum;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs EvSignal watcher object
		 * <p>Constructs EvSignal watcher object and starts it automatically. For a stopped periodic watcher consider using <code>EvSignal::createStopped()</code> method.</p>
		 * @param int $signum <p>Signal number. See constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvSignal object on success.</p>
		 * @link http://php.net/manual/en/evsignal.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(int $signum, callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create stopped EvSignal watcher object
		 * <p>Create stopped EvSignal watcher object. Unlike <code>EvSignal::__construct()</code> , this method does't start the watcher automatically.</p>
		 * @param int $signum <p>Signal number. See constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return EvSignal <p>Returns EvSignal object on success.</p>
		 * @link http://php.net/manual/en/evsignal.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(int $signum, callable $callback, $data = NULL, int $priority = 0): \EvSignal {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Configures the watcher
		 * <p>Configures the watcher.</p>
		 * @param int $signum <p>Signal number. The same as for <code>EvSignal::__construct()</code></p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evsignal.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set(int $signum): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvStat</b> monitors a file system path for attribute changes. It calls <i>stat()</i> on that path in regular intervals(or when the OS signals it changed) and sees if it changed compared to the last time, invoking the callback if it did.</p>
	 * <p>The path does not need to exist: changing from "path exists" to "path does not exist" is a status change like any other. The condition "path does not exist" is signified by the <b><code>'nlink'</code></b> item being 0(returned by <code>EvStat::attr()</code> method).</p>
	 * <p>The path must not end in a slash or contain special components such as <b><code>'.'</code></b> or <b><code>..</code></b> . The path should be absolute: if it is relative and the working directory changes, then the behaviour is undefined.</p>
	 * <p>Since there is no portable change notification interface available, the portable implementation simply calls <i>stat()</i> regularly on the path to see if it changed somehow. For this case a recommended polling interval can be specified. If one specifies a polling interval of <b><code>0.0 </code></b> (highly recommended) then a suitable, unspecified default value will be used(which could be expected to be around 5 seconds, although this might change dynamically). <i>libev</i> will also impose a minimum interval which is currently around <b><code>0.1</code></b> , but that&rsquo;s usually overkill.</p>
	 * <p>This watcher type is not meant for massive numbers of <b>EvStat</b> watchers, as even with OS-supported change notifications, this can be resource-intensive.</p>
	 * @link http://php.net/manual/en/class.evstat.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvStat extends \EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . The path to wait for status changes on.</p>
		 * @link http://php.net/manual/en/class.evstat.php#evstat.props.path
		 */
		public $path;

		/**
		 * @var mixed <p><i>Readonly</i> . Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
		 * @link http://php.net/manual/en/class.evstat.php#evstat.props.interval
		 */
		public $interval;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs EvStat watcher object
		 * <p>Constructs EvStat watcher object and starts the watcher automatically.</p>
		 * @param string $path <p>The path to wait for status changes on.</p>
		 * @param float $interval <p>Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvStat watcher object on succes.</p>
		 * @link http://php.net/manual/en/evstat.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(string $path, float $interval, callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Returns the values most recently detected by Ev
		 * <p>Returns array of the values most recently detected by Ev</p>
		 * @return array <p>Returns array with the values most recently detect by Ev(without actual <i>stat</i> 'ing):</p> <b> List for item keys of the array returned by <b>EvStat::attr()</b> </b>   Key Description      <b><code>'dev'</code></b>  ID of device containing file    <b><code>'ino'</code></b>  inode number    <b><code>'mode'</code></b>  protection    <b><code>'nlink'</code></b>  number of hard links    <b><code>'uid'</code></b>  user ID of owner    <b><code>'size'</code></b>  total size, in bytes    <b><code>'gid'</code></b>  group ID of owner    <b><code>'rdev'</code></b>  device ID (if special file)    <b><code>'blksize'</code></b>  blocksize for file system I/O    <b><code>'blocks'</code></b>  number of 512B blocks allocated    <b><code>'atime'</code></b>  time of last access    <b><code>'ctime'</code></b>  time of last status change    <b><code>'mtime'</code></b>  time of last modification   <p>See <i>stat(2)</i> man page for details.</p>
		 * @link http://php.net/manual/en/evstat.attr.php
		 * @since PECL ev >= 0.2.0
		 */
		public function attr(): array {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Create a stopped EvStat watcher object
		 * <p>Creates EvStat watcher object, but doesn't start it automatically(unlike <code>EvStat::__construct()</code> ).</p>
		 * @param string $path <p>The path to wait for status changes on.</p>
		 * @param float $interval <p>Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return void <p>Returns a stopped EvStat watcher object on success.</p>
		 * @link http://php.net/manual/en/evstat.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(string $path, float $interval, callable $callback, $data = NULL, int $priority = 0): void {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Returns the previous set of values returned by EvStat::attr
		 * <p>Just like <code>EvStat::attr()</code> , but returns the previous set of values.</p>
		 * @return void <p>Returns an array with the same structure as the array returned by <code>EvStat::attr()</code> . The array contains previously detected values.</p>
		 * @link http://php.net/manual/en/evstat.prev.php
		 * @since PECL ev >= 0.2.0
		 */
		public function prev(): void {}

		/**
		 * Configures the watcher
		 * <p>Configures the watcher.</p>
		 * @param string $path <p>The path to wait for status changes on.</p>
		 * @param float $interval <p>Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evstat.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set(string $path, float $interval): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Initiates the stat call
		 * <p>Initiates the stat call(updates internal cache). It stats(using <i>lstat</i> ) the path specified in the watcher and sets to the values found.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if path exists. Otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/evstat.stat.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stat(): bool {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvTimer</b> watchers are simple relative timers that generate an event after a given time, and optionally repeating in regular intervals after that.</p>
	 * <p>The timers are based on real time, that is, if one registers an event that times out after an hour and resets the system clock to <i>January last year</i> , it will still time out after(roughly) one hour. "Roughly" because detecting time jumps is hard, and some inaccuracies are unavoidable.</p>
	 * <p>The callback is guaranteed to be invoked only after its timeout has passed (not at, so on systems with very low-resolution clocks this might introduce a small delay). If multiple timers become ready during the same loop iteration then the ones with earlier time-out values are invoked before ones of the same priority with later time-out values (but this is no longer true when a callback calls <code>EvLoop::run()</code> recursively).</p>
	 * <p>The timer itself will do a best-effort at avoiding drift, that is, if a timer is configured to trigger every <b><code>10</code></b> seconds, then it will normally trigger at exactly <b><code>10</code></b> second intervals. If, however, the script cannot keep up with the timer because it takes longer than those <b><code>10</code></b> seconds to do) the timer will not fire more than once per event loop iteration.</p>
	 * @link http://php.net/manual/en/class.evtimer.php
	 * @since PECL ev >= 0.2.0
	 */
	class EvTimer extends \EvWatcher {

		/**
		 * @var mixed <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
		 * @link http://php.net/manual/en/class.evtimer.php#evtimer.props.repeat
		 */
		public $repeat;

		/**
		 * @var mixed <p>Returns the remaining time until a timer fires. If the timer is active, then this time is relative to the current event loop time, otherwise it's the timeout value currently configured.</p> <p>That is, after instanciating an <b>EvTimer</b> with an <code>after</code> value of <b><code>5.0</code></b> and <code>repeat</code> value of <b><code>7.0</code></b> , remaining returns <b><code>5.0</code></b> . When the timer is started and one second passes, remaining will return <b><code>4.0</code></b> . When the timer expires and is restarted, it will return roughly <b><code>7.0</code></b> (likely slightly less as callback invocation takes some time too), and so on.</p>
		 * @link http://php.net/manual/en/class.evtimer.php#evtimer.props.remaining
		 */
		public $remaining;

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Constructs an EvTimer watcher object
		 * <p>Constructs an EvTimer watcher object.</p>
		 * @param float $after <p>Configures the timer to trigger after <code>after</code> seconds.</p>
		 * @param float $repeat <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return self <p>Returns EvTimer object on success.</p>
		 * @link http://php.net/manual/en/evtimer.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		public function __construct(float $after, float $repeat, callable $callback, $data = NULL, int $priority = 0) {}

		/**
		 * Restarts the timer watcher
		 * <p>This will act as if the timer timed out and restart it again if it is repeating. The exact semantics are:</p><p>if the timer is pending, its pending status is cleared.</p><p>if the timer is started but non-repeating, stop it (as if it timed out).</p><p>if the timer is repeating, either start it if necessary (with the repeat value), or reset the running timer to the repeat value.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evtimer.again.php
		 * @since PECL ev >= 0.2.0
		 */
		public function again(): void {}

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Creates EvTimer stopped watcher object
		 * <p>Creates EvTimer stopped watcher object. Unlike <code>EvTimer::__construct()</code> , this method doesn't start the watcher automatically.</p>
		 * @param float $after <p>Configures the timer to trigger after <code>after</code> seconds.</p>
		 * @param float $repeat <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @param mixed $data <p>Custom data associated with the watcher.</p>
		 * @param int $priority <p>Watcher priority</p>
		 * @return EvTimer <p>Returns EvTimer watcher object on success.</p>
		 * @link http://php.net/manual/en/evtimer.createstopped.php
		 * @since PECL ev >= 0.2.0
		 */
		final public static function createStopped(float $after, float $repeat, callable $callback, $data = NULL, int $priority = 0): \EvTimer {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Begin checking for events and calling callbacks for the loop
		 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
		 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evloop.run.php
		 * @since PECL ev >= 0.2.0
		 */
		public function run(int $flags = 0): void {}

		/**
		 * Configures the watcher
		 * <p>Configures the watcher</p>
		 * @param float $after <p>Configures the timer to trigger after <code>after</code> seconds.</p>
		 * @param float $repeat <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evtimer.set.php
		 * @since PECL ev >= 0.2.0
		 */
		public function set(float $after, float $repeat): void {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

	/**
	 * <p><b>EvWatcher</b> is a base class for all watchers( EvCheck , EvChild etc.). Since <b>EvWatcher</b> 's constructor is abstract , one can't(and don't need to) create EvWatcher objects directly.</p>
	 * @link http://php.net/manual/en/class.evwatcher.php
	 * @since PECL ev >= 0.2.0
	 */
	abstract class EvWatcher {

		/**
		 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-active
		 */
		public $is_active;

		/**
		 * @var mixed <p>User custom data associated with the watcher</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.data
		 */
		public $data;

		/**
		 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.is-pending
		 */
		public $is_pending;

		/**
		 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
		 * @link http://php.net/manual/en/class.evwatcher.php#evwatcher.props.priority
		 */
		public $priority;

		/**
		 * Abstract constructor of a watcher object
		 * <p><b>EvWatcher::__construct()</b> is an abstract constructor of a watcher object implemented in the derived classes.</p>
		 * @return self
		 * @link http://php.net/manual/en/evwatcher.construct.php
		 * @since PECL ev >= 0.2.0
		 */
		abstract public function __construct();

		/**
		 * Clear watcher pending status
		 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
		 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
		 * @link http://php.net/manual/en/evwatcher.clear.php
		 * @since PECL ev >= 0.2.0
		 */
		public function clear(): int {}

		/**
		 * Feeds the given revents set into the event loop
		 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.feed.php
		 * @since PECL ev >= 0.2.0
		 */
		public function feed(int $revents): void {}

		/**
		 * Returns the loop responsible for the watcher
		 * <p>Returns the loop responsible for the watcher</p>
		 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
		 * @link http://php.net/manual/en/evwatcher.getloop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function getLoop(): \EvLoop {}

		/**
		 * Invokes the watcher callback with the given received events bit mask
		 * <p>Invokes the watcher callback with the given received events bit mask.</p>
		 * @param int $revents <p>Bit mask of watcher received events .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.invoke.php
		 * @since PECL ev >= 0.2.0
		 */
		public function invoke(int $revents): void {}

		/**
		 * Configures whether to keep the loop from returning
		 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
		 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
		 * @return bool <p>Returns the previous state.</p>
		 * @link http://php.net/manual/en/evwatcher.keepalive.php
		 * @since PECL ev >= 0.2.0
		 */
		public function keepalive(bool $value = NULL): bool {}

		/**
		 * Sets new callback for the watcher
		 * <p>Sets new callback for the watcher</p>
		 * @param callable $callback <p>See Watcher callbacks .</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.setcallback.php
		 * @since PECL ev >= 0.2.0
		 */
		public function setCallback(callable $callback): void {}

		/**
		 * Starts the watcher
		 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.start.php
		 * @since PECL ev >= 0.2.0
		 */
		public function start(): void {}

		/**
		 * Stops the watcher
		 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/evwatcher.stop.php
		 * @since PECL ev >= 0.2.0
		 */
		public function stop(): void {}
	}

}
