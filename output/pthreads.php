<?php



namespace {

	/**
	 * <p>Represents a garbage-collectable object.</p>
	 * @link https://php.net/manual/en/class.collectable.php
	 * @since PECL pthreads >= 2.0.8
	 */
	interface Collectable {

		/**
		 * Determine whether an object has been marked as garbage
		 * <p>Can be called in <code>Pool::collect()</code> to determine if this object is garbage.</p>
		 * @return true <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/collectable.isgarbage.php
		 * @since PECL pthreads >= 2.0.8
		 */
		public function isGarbage(): true;
	}

	/**
	 * <p>A Pool is a container for, and controller of, an adjustable number of Workers.</p>
	 * <p>Pooling provides a higher level abstraction of the Worker functionality, including the management of references in the way required by pthreads.</p>
	 * @link https://php.net/manual/en/class.pool.php
	 * @since PECL pthreads >= 2.0.0
	 */
	class Pool {

		/**
		 * @var mixed <p>maximum number of Workers this Pool can use</p>
		 * @link https://php.net/manual/en/class.pool.php#pool.props.size
		 */
		protected $size;

		/**
		 * @var mixed <p>the class of the Worker</p>
		 * @link https://php.net/manual/en/class.pool.php#pool.props.class
		 */
		protected $class;

		/**
		 * @var mixed <p>references to Workers</p>
		 * @link https://php.net/manual/en/class.pool.php#pool.props.workers
		 */
		protected $workers;

		/**
		 * @var mixed <p>the arguments for constructor of new Workers</p>
		 * @link https://php.net/manual/en/class.pool.php#pool.props.ctor
		 */
		protected $ctor;

		/**
		 * @var mixed <p>offset in workers of the last Worker used</p>
		 * @link https://php.net/manual/en/class.pool.php#pool.props.last
		 */
		protected $last;

		/**
		 * Creates a new Pool of Workers
		 * <p>Construct a new pool of workers. Pools lazily create their threads, which means new threads will only be spawned when they are required to execute tasks.</p>
		 * @param int $size <p>The maximum number of workers for this pool to create</p>
		 * @param string $class <p>The class for new Workers. If no class is given, then it defaults to the <code>Worker</code> class.</p>
		 * @param array $ctor <p>An array of arguments to be passed to new workers' constructors</p>
		 * @return self
		 * @link https://php.net/manual/en/pool.construct.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function __construct(int $size, string $class = null, array $ctor = null) {}

		/**
		 * Collect references to completed tasks
		 * <p>Allows the pool to collect references determined to be garbage by the optionally given collector.</p>
		 * @param Callable $collector <p>A Callable collector that returns a boolean on whether the task can be collected or not. Only in rare cases should a custom collector need to be used.</p>
		 * @return int <p>The number of remaining tasks in the pool to be collected.</p>
		 * @link https://php.net/manual/en/pool.collect.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function collect(Callable $collector = null): int {}

		/**
		 * Resize the Pool
		 * <p>Resize the Pool</p>
		 * @param int $size <p>The maximum number of Workers this Pool can create</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/pool.resize.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function resize(int $size): void {}

		/**
		 * Shutdown all workers
		 * <p>Shuts down all of the workers in the pool. This will block until all submitted tasks have been executed.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/pool.shutdown.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function shutdown(): void {}

		/**
		 * Submits an object for execution
		 * <p>Submit the task to the next Worker in the Pool</p>
		 * @param \Threaded $task <p>The task for execution</p>
		 * @return int <p>the identifier of the Worker executing the object</p>
		 * @link https://php.net/manual/en/pool.submit.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function submit(\Threaded $task): int {}

		/**
		 * Submits a task to a specific worker for execution
		 * <p>Submit a task to the specified worker in the pool. The workers are indexed from 0, and will only exist if the pool has needed to create them (since threads are lazily spawned).</p>
		 * @param int $worker <p>The worker to stack the task onto, indexed from <code>0</code>.</p>
		 * @param \Threaded $task <p>The task for execution.</p>
		 * @return int <p>The identifier of the worker that accepted the task.</p>
		 * @link https://php.net/manual/en/pool.submitTo.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function submitTo(int $worker, \Threaded $task): int {}
	}

	/**
	 * <p>When the start method of a Thread is invoked, the run method code will be executed in separate Thread, in parallel.</p>
	 * <p>After the run method is executed the Thread will exit immediately, it will be joined with the creating Thread at the appropriate time.</p>
	 * <p>Relying on the engine to determine when a Thread should join may cause undesirable behaviour; the programmer should be explicit, where possible.</p>
	 * @link https://php.net/manual/en/class.thread.php
	 * @since PECL pthreads >= 2.0.0
	 */
	class Thread extends \Threaded implements \Countable, \Traversable, \ArrayAccess {

		/**
		 * Manipulation
		 * <p>Fetches a chunk of the objects property table of the given size, optionally preserving keys</p>
		 * @param int $size <p>The number of items to fetch</p>
		 * @param bool $preserve <p>Preserve the keys of members, by default false</p>
		 * @return array <p>An array of items from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.chunk.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function chunk(int $size, bool $preserve): array {}

		/**
		 * Manipulation
		 * <p>Returns the number of properties for this object</p>
		 * @return int
		 * @link https://php.net/manual/en/threaded.count.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function count(): int {}

		/**
		 * Runtime Manipulation
		 * <p>Makes thread safe standard class at runtime</p>
		 * @param string $class <p>The class to extend</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.extend.php
		 * @since PECL pthreads >= 2.0.8
		 */
		public function extend(string $class): bool {}

		/**
		 * Identification
		 * <p>Will return the identity of the Thread that created the referenced Thread</p>
		 * @return int <p>A numeric identity</p>
		 * @link https://php.net/manual/en/thread.getcreatorid.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function getCreatorId(): int {}

		/**
		 * Identification
		 * <p>Return a reference to the currently executing Thread</p>
		 * @return Thread <p>An object representing the currently executing Thread</p>
		 * @link https://php.net/manual/en/thread.getcurrentthread.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public static function getCurrentThread(): \Thread {}

		/**
		 * Identification
		 * <p>Will return the identity of the currently executing Thread</p>
		 * @return int <p>A numeric identity</p>
		 * @link https://php.net/manual/en/thread.getcurrentthreadid.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public static function getCurrentThreadId(): int {}

		/**
		 * Identification
		 * <p>Will return the identity of the referenced Thread</p>
		 * @return int <p>A numeric identity</p>
		 * @link https://php.net/manual/en/thread.getthreadid.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function getThreadId(): int {}

		/**
		 * State Detection
		 * <p>Tell if the referenced Thread has been joined</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.isjoined.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isJoined(): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced object is executing</p>
		 * @return bool <p>A boolean indication of state</p><p><b>Note</b>:</p><p>A object is considered running while executing the run method</p>
		 * @link https://php.net/manual/en/thread.isrunning.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isRunning(): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced Thread was started</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.isstarted.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isStarted(): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced object was terminated during execution; suffered fatal errors, or threw uncaught exceptions</p>
		 * @return bool <p>A boolean indication of state</p>
		 * @link https://php.net/manual/en/threaded.isterminated.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isTerminated(): bool {}

		/**
		 * Synchronization
		 * <p>Causes the calling context to wait for the referenced Thread to finish executing</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.join.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function join(): bool {}

		/**
		 * Manipulation
		 * <p>Merges data into the current object</p>
		 * @param mixed $from <p>The data to merge</p>
		 * @param bool $overwrite <p>Overwrite existing keys, by default true</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.merge.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function merge(mixed $from, bool $overwrite = null): bool {}

		/**
		 * Synchronization
		 * <p>Send notification to the referenced object</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.notify.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function notify(): bool {}

		/**
		 * Synchronization
		 * <p>Send notification to the referenced object. This unblocks at least one of the blocked threads (as opposed to unblocking all of them, as seen with <code>Threaded::notify()</code>).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.notifyone.php
		 * @since PECL pthreads >= 3.0.0
		 */
		public function notifyOne(): bool {}

		/**
		 * Manipulation
		 * <p>Pops an item from the objects property table</p>
		 * @return bool <p>The last item from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.pop.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function pop(): bool {}

		/**
		 * Execution
		 * <p>The programmer should always implement the run method for objects that are intended for execution.</p>
		 * @return void <p>The methods return value, if used, will be ignored</p>
		 * @link https://php.net/manual/en/threaded.run.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function run(): void {}

		/**
		 * Manipulation
		 * <p>Shifts an item from the objects property table</p>
		 * @return mixed <p>The first item from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.shift.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function shift(): mixed {}

		/**
		 * Execution
		 * <p>Will start a new Thread to execute the implemented run method</p>
		 * @param int $options <p>An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.start.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function start(int $options = null): bool {}

		/**
		 * Synchronization
		 * <p>Executes the block while retaining the referenced objects synchronization lock for the calling context</p>
		 * @param \Closure $block <p>The block of code to execute</p>
		 * @param mixed $args <p>Variable length list of arguments to use as function arguments to the block</p>
		 * @return mixed <p>The return value from the block</p>
		 * @link https://php.net/manual/en/threaded.synchronized.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function synchronized(\Closure $block, mixed ...$args): mixed {}

		/**
		 * Synchronization
		 * <p>Will cause the calling context to wait for notification from the referenced object</p>
		 * @param int $timeout <p>An optional timeout in microseconds</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.wait.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function wait(int $timeout = null): bool {}
	}

	/**
	 * <p>Threaded objects form the basis of pthreads ability to execute user code in parallel; they expose synchronization methods and various useful interfaces.</p>
	 * <p>Threaded objects, most importantly, provide implicit safety for the programmer; all operations on the object scope are safe.</p>
	 * @link https://php.net/manual/en/class.threaded.php
	 * @since PECL pthreads >= 2.0.0
	 */
	class Threaded implements \Collectable, \Traversable, \Countable, \ArrayAccess {

		/**
		 * Manipulation
		 * <p>Fetches a chunk of the objects property table of the given size, optionally preserving keys</p>
		 * @param int $size <p>The number of items to fetch</p>
		 * @param bool $preserve <p>Preserve the keys of members, by default false</p>
		 * @return array <p>An array of items from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.chunk.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function chunk(int $size, bool $preserve): array {}

		/**
		 * Manipulation
		 * <p>Returns the number of properties for this object</p>
		 * @return int
		 * @link https://php.net/manual/en/threaded.count.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function count(): int {}

		/**
		 * Runtime Manipulation
		 * <p>Makes thread safe standard class at runtime</p>
		 * @param string $class <p>The class to extend</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.extend.php
		 * @since PECL pthreads >= 2.0.8
		 */
		public function extend(string $class): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced object is executing</p>
		 * @return bool <p>A boolean indication of state</p><p><b>Note</b>:</p><p>A object is considered running while executing the run method</p>
		 * @link https://php.net/manual/en/thread.isrunning.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isRunning(): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced object was terminated during execution; suffered fatal errors, or threw uncaught exceptions</p>
		 * @return bool <p>A boolean indication of state</p>
		 * @link https://php.net/manual/en/threaded.isterminated.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isTerminated(): bool {}

		/**
		 * Manipulation
		 * <p>Merges data into the current object</p>
		 * @param mixed $from <p>The data to merge</p>
		 * @param bool $overwrite <p>Overwrite existing keys, by default true</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.merge.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function merge(mixed $from, bool $overwrite = null): bool {}

		/**
		 * Synchronization
		 * <p>Send notification to the referenced object</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.notify.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function notify(): bool {}

		/**
		 * Synchronization
		 * <p>Send notification to the referenced object. This unblocks at least one of the blocked threads (as opposed to unblocking all of them, as seen with <code>Threaded::notify()</code>).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.notifyone.php
		 * @since PECL pthreads >= 3.0.0
		 */
		public function notifyOne(): bool {}

		/**
		 * Manipulation
		 * <p>Pops an item from the objects property table</p>
		 * @return bool <p>The last item from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.pop.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function pop(): bool {}

		/**
		 * Execution
		 * <p>The programmer should always implement the run method for objects that are intended for execution.</p>
		 * @return void <p>The methods return value, if used, will be ignored</p>
		 * @link https://php.net/manual/en/threaded.run.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function run(): void {}

		/**
		 * Manipulation
		 * <p>Shifts an item from the objects property table</p>
		 * @return mixed <p>The first item from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.shift.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function shift(): mixed {}

		/**
		 * Synchronization
		 * <p>Executes the block while retaining the referenced objects synchronization lock for the calling context</p>
		 * @param \Closure $block <p>The block of code to execute</p>
		 * @param mixed $args <p>Variable length list of arguments to use as function arguments to the block</p>
		 * @return mixed <p>The return value from the block</p>
		 * @link https://php.net/manual/en/threaded.synchronized.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function synchronized(\Closure $block, mixed ...$args): mixed {}

		/**
		 * Synchronization
		 * <p>Will cause the calling context to wait for notification from the referenced object</p>
		 * @param int $timeout <p>An optional timeout in microseconds</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.wait.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function wait(int $timeout = null): bool {}
	}

	/**
	 * <p>The <b>Volatile</b> class is new to pthreads v3. Its introduction is a consequence of the new immutability semantics of <code>Threaded</code> members of <code>Threaded</code> classes. The <b>Volatile</b> class enables for mutability of its <code>Threaded</code> members, and is also used to store PHP arrays in <code>Threaded</code> contexts.</p>
	 * @link https://php.net/manual/en/class.volatile.php
	 * @since PECL pthreads >= 3.0.0
	 */
	class Volatile extends \Threaded implements \Collectable, \Traversable {

		/**
		 * Manipulation
		 * <p>Fetches a chunk of the objects property table of the given size, optionally preserving keys</p>
		 * @param int $size <p>The number of items to fetch</p>
		 * @param bool $preserve <p>Preserve the keys of members, by default false</p>
		 * @return array <p>An array of items from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.chunk.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function chunk(int $size, bool $preserve): array {}

		/**
		 * Manipulation
		 * <p>Returns the number of properties for this object</p>
		 * @return int
		 * @link https://php.net/manual/en/threaded.count.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function count(): int {}

		/**
		 * Runtime Manipulation
		 * <p>Makes thread safe standard class at runtime</p>
		 * @param string $class <p>The class to extend</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.extend.php
		 * @since PECL pthreads >= 2.0.8
		 */
		public function extend(string $class): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced object is executing</p>
		 * @return bool <p>A boolean indication of state</p><p><b>Note</b>:</p><p>A object is considered running while executing the run method</p>
		 * @link https://php.net/manual/en/thread.isrunning.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isRunning(): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced object was terminated during execution; suffered fatal errors, or threw uncaught exceptions</p>
		 * @return bool <p>A boolean indication of state</p>
		 * @link https://php.net/manual/en/threaded.isterminated.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isTerminated(): bool {}

		/**
		 * Manipulation
		 * <p>Merges data into the current object</p>
		 * @param mixed $from <p>The data to merge</p>
		 * @param bool $overwrite <p>Overwrite existing keys, by default true</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.merge.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function merge(mixed $from, bool $overwrite = null): bool {}

		/**
		 * Synchronization
		 * <p>Send notification to the referenced object</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.notify.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function notify(): bool {}

		/**
		 * Synchronization
		 * <p>Send notification to the referenced object. This unblocks at least one of the blocked threads (as opposed to unblocking all of them, as seen with <code>Threaded::notify()</code>).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.notifyone.php
		 * @since PECL pthreads >= 3.0.0
		 */
		public function notifyOne(): bool {}

		/**
		 * Manipulation
		 * <p>Pops an item from the objects property table</p>
		 * @return bool <p>The last item from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.pop.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function pop(): bool {}

		/**
		 * Execution
		 * <p>The programmer should always implement the run method for objects that are intended for execution.</p>
		 * @return void <p>The methods return value, if used, will be ignored</p>
		 * @link https://php.net/manual/en/threaded.run.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function run(): void {}

		/**
		 * Manipulation
		 * <p>Shifts an item from the objects property table</p>
		 * @return mixed <p>The first item from the objects property table</p>
		 * @link https://php.net/manual/en/threaded.shift.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function shift(): mixed {}

		/**
		 * Synchronization
		 * <p>Executes the block while retaining the referenced objects synchronization lock for the calling context</p>
		 * @param \Closure $block <p>The block of code to execute</p>
		 * @param mixed $args <p>Variable length list of arguments to use as function arguments to the block</p>
		 * @return mixed <p>The return value from the block</p>
		 * @link https://php.net/manual/en/threaded.synchronized.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function synchronized(\Closure $block, mixed ...$args): mixed {}

		/**
		 * Synchronization
		 * <p>Will cause the calling context to wait for notification from the referenced object</p>
		 * @param int $timeout <p>An optional timeout in microseconds</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/threaded.wait.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function wait(int $timeout = null): bool {}
	}

	/**
	 * <p>Worker Threads have a persistent context, as such should be used over Threads in most cases.</p>
	 * <p>When a Worker is started, the run method will be executed, but the Thread will not leave until one of the following conditions are met:</p>
	 * <p>the Worker goes out of scope (no more references remain)</p>
	 * <p>the programmer calls shutdown</p>
	 * <p>the script dies</p>
	 * <p>This means the programmer can reuse the context throughout execution; placing objects on the stack of the Worker will cause the Worker to execute the stacked objects run method.</p>
	 * @link https://php.net/manual/en/class.worker.php
	 * @since PECL pthreads >= 2.0.0
	 */
	class Worker extends \Thread implements \Traversable, \Countable, \ArrayAccess {

		/**
		 * Collect references to completed tasks
		 * <p>Allows the worker to collect references determined to be garbage by the optionally given collector.</p>
		 * @param Callable $collector <p>A Callable collector that returns a boolean on whether the task can be collected or not. Only in rare cases should a custom collector need to be used.</p>
		 * @return int <p>The number of remaining tasks on the worker's stack to be collected.</p>
		 * @link https://php.net/manual/en/worker.collect.php
		 * @since PECL pthreads >= 3.0.0
		 */
		public function collect(Callable $collector = null): int {}

		/**
		 * Identification
		 * <p>Will return the identity of the Thread that created the referenced Thread</p>
		 * @return int <p>A numeric identity</p>
		 * @link https://php.net/manual/en/thread.getcreatorid.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function getCreatorId(): int {}

		/**
		 * Identification
		 * <p>Return a reference to the currently executing Thread</p>
		 * @return Thread <p>An object representing the currently executing Thread</p>
		 * @link https://php.net/manual/en/thread.getcurrentthread.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public static function getCurrentThread(): \Thread {}

		/**
		 * Identification
		 * <p>Will return the identity of the currently executing Thread</p>
		 * @return int <p>A numeric identity</p>
		 * @link https://php.net/manual/en/thread.getcurrentthreadid.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public static function getCurrentThreadId(): int {}

		/**
		 * Gets the remaining stack size
		 * <p>Returns the number of tasks left on the stack</p>
		 * @return int <p>Returns the number of tasks currently waiting to be executed by the worker</p>
		 * @link https://php.net/manual/en/worker.getstacked.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function getStacked(): int {}

		/**
		 * Identification
		 * <p>Will return the identity of the referenced Thread</p>
		 * @return int <p>A numeric identity</p>
		 * @link https://php.net/manual/en/thread.getthreadid.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function getThreadId(): int {}

		/**
		 * State Detection
		 * <p>Tell if the referenced Thread has been joined</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.isjoined.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isJoined(): bool {}

		/**
		 * State Detection
		 * <p>Whether the worker has been shutdown or not.</p>
		 * @return bool <p>Returns whether the worker has been shutdown or not.</p>
		 * @link https://php.net/manual/en/worker.isshutdown.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isShutdown(): bool {}

		/**
		 * State Detection
		 * <p>Tell if the referenced Thread was started</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.isstarted.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function isStarted(): bool {}

		/**
		 * Synchronization
		 * <p>Causes the calling context to wait for the referenced Thread to finish executing</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.join.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function join(): bool {}

		/**
		 * Shutdown the worker
		 * <p>Shuts down the worker after executing all of the stacked tasks.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/worker.shutdown.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function shutdown(): bool {}

		/**
		 * Stacking work
		 * <p>Appends the new work to the stack of the referenced worker.</p>
		 * @param \Threaded $work <p>A <code>Threaded</code> object to be executed by the worker.</p>
		 * @return int <p>The new size of the stack.</p>
		 * @link https://php.net/manual/en/worker.stack.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function stack(\Threaded &$work): int {}

		/**
		 * Execution
		 * <p>Will start a new Thread to execute the implemented run method</p>
		 * @param int $options <p>An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/thread.start.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function start(int $options = null): bool {}

		/**
		 * Unstacking work
		 * <p>Removes the first task (the oldest one) in the stack.</p>
		 * @return int <p>The new size of the stack.</p>
		 * @link https://php.net/manual/en/worker.unstack.php
		 * @since PECL pthreads >= 2.0.0
		 */
		public function unstack(): int {}
	}

	/**
	 * Allow new Threads to send headers to standard output (normally prohibited)
	 */
	define('PTHREADS_ALLOW_HEADERS', null);

	/**
	 * The default options for all Threads, causes pthreads to copy the environment when new Threads are started
	 */
	define('PTHREADS_INHERIT_ALL', null);

	/**
	 * Inherit user declared classes when new Threads are started
	 */
	define('PTHREADS_INHERIT_CLASSES', null);

	/**
	 * Inherit all comments when new Threads are started
	 */
	define('PTHREADS_INHERIT_COMMENTS', null);

	/**
	 * Inherit user declared constants when new Threads are started
	 */
	define('PTHREADS_INHERIT_CONSTANTS', null);

	/**
	 * Inherit user declared functions when new Threads are started
	 */
	define('PTHREADS_INHERIT_FUNCTIONS', null);

	/**
	 * Inherit included file information when new Threads are started
	 */
	define('PTHREADS_INHERIT_INCLUDES', null);

	/**
	 * Inherit INI entries when new Threads are started
	 */
	define('PTHREADS_INHERIT_INI', null);

	/**
	 * Do not inherit anything when new Threads are started
	 */
	define('PTHREADS_INHERIT_NONE', null);

}
