<?php



namespace parallel {

	/**
	 * @link https://php.net/manual/en/class.parallel-channel.php
	 * @since 0.9.0
	 */
	final class Channel {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-channel.php
		 */
		const Infinite = null;

		/**
		 * Channel Construction
		 * <p>Shall make an anonymous unbuffered channel</p><p>Shall make an anonymous buffered channel with the given capacity</p>
		 * @return self
		 * @link https://php.net/manual/en/parallel-channel.construct.php
		 * @since 1.1.0
		 */
		public function __construct() {}

		/**
		 * Closing
		 * <p>Shall close this channel</p>
		 * @return void
		 * @link https://php.net/manual/en/parallel-channel.close.php
		 * @since 0.9.0
		 */
		public function close(): void {}

		/**
		 * Access
		 * <p>Shall make an unbuffered channel with the given name</p><p>Shall make a buffered channel with the given name and capacity</p>
		 * @param string $name <p>The name of the channel.</p>
		 * @return Channel
		 * @link https://php.net/manual/en/parallel-channel.make.php
		 * @since 0.9.0
		 */
		public function make(string $name): \Channel {}

		/**
		 * Access
		 * <p>Shall open the channel with the given name</p>
		 * @param string $name
		 * @return Channel
		 * @link https://php.net/manual/en/parallel-channel.open.php
		 * @since 0.9.0
		 */
		public function open(string $name): \Channel {}

		/**
		 * Sharing
		 * <p>Shall recv a value from this channel</p>
		 * @return mixed
		 * @link https://php.net/manual/en/parallel-channel.recv.php
		 * @since 0.9.0
		 */
		public function recv(): mixed {}

		/**
		 * Sharing
		 * <p>Shall send the given value on this channel</p>
		 * @param mixed $value
		 * @return void
		 * @link https://php.net/manual/en/parallel-channel.send.php
		 * @since 0.9.0
		 */
		public function send(mixed $value): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.parallel-events.php
	 * @since 0.9.0
	 */
	final class Events implements \Countable, \Traversable {

		/**
		 * Targets
		 * <p>Shall watch for events on the given <code>channel</code></p>
		 * @param \parallel\Channel $channel
		 * @return void
		 * @link https://php.net/manual/en/parallel-events.addchannel.php
		 * @since 0.9.0
		 */
		public function addChannel(\parallel\Channel $channel): void {}

		/**
		 * Targets
		 * <p>Shall watch for events on the given <code>future</code></p>
		 * @param string $name
		 * @param \parallel\Future $future
		 * @return void
		 * @link https://php.net/manual/en/parallel-events.addfuture.php
		 * @since 0.9.0
		 */
		public function addFuture(string $name, \parallel\Future $future): void {}

		/**
		 * Polling
		 * <p>Shall poll for the next event</p>
		 * @return ?parallel\Events\Event <p>Should there be no targets remaining, <b><code>null</code></b> shall be returned</p><p>Should this be a non-blocking loop, and blocking would occur, <b><code>null</code></b> shall be returned</p><p>Otherwise, the <code>parallel\Events\Event</code> returned describes the event.</p>
		 * @link https://php.net/manual/en/parallel-events.poll.php
		 * @since 0.9.0
		 */
		public function poll(): ?\parallel\Events\Event {}

		/**
		 * Targets
		 * <p>Shall remove the given <code>target</code></p>
		 * @param string $target
		 * @return void
		 * @link https://php.net/manual/en/parallel-events.remove.php
		 * @since 0.9.0
		 */
		public function remove(string $target): void {}

		/**
		 * Behaviour
		 * <p>By default when events are polled for, blocking will occur (at the PHP level) until the first event can be returned: Setting blocking mode to <b><code>false</code></b> will cause poll to return control if the first target polled is not ready.</p><p>This differs from setting a timeout of 0 with <code>parallel\Events::setTimeout()</code>, since a timeout of 0, while allowed, will cause an exception to be raised, which may be extremely slow or wasteful if what is really desired is non-blocking behaviour.</p><p>A non-blocking loop effects the return value of <code>parallel\Events::poll()</code>, such that it may be <b><code>null</code></b> before all events have been processed.</p><p>Shall set blocking mode</p>
		 * @param bool $blocking
		 * @return void
		 * @link https://php.net/manual/en/parallel-events.setblocking.php
		 * @since 0.9.0
		 */
		public function setBlocking(bool $blocking): void {}

		/**
		 * Input
		 * <p>Shall set <code>input</code> for this event loop</p>
		 * @param \Input $input
		 * @return void
		 * @link https://php.net/manual/en/parallel-events.setinput.php
		 * @since 0.9.0
		 */
		public function setInput(\Input $input): void {}

		/**
		 * Behaviour
		 * <p>By default when events are polled for, blocking will occur (at the PHP level) until the first event can be returned: Setting the timeout causes an exception to be thrown when the timeout is reached.</p><p>This differs from setting blocking mode to <b><code>false</code></b> with <code>parallel\Events::setBlocking()</code>, which will not cause an exception to be thrown.</p><p>Shall set the timeout in microseconds</p>
		 * @param int $timeout
		 * @return void
		 * @link https://php.net/manual/en/parallel-events.settimeout.php
		 * @since 0.9.0
		 */
		public function setTimeout(int $timeout): void {}
	}

}

namespace parallel\Events {

	/**
	 * @link https://php.net/manual/en/class.parallel-events-event.php
	 * @since 0.9.0
	 */
	final class Event {

		public $type;

		public $source;

		public $object;

		public $value;
	}

}

namespace parallel\Events\Event {

	/**
	 * @link https://php.net/manual/en/class.parallel-events-event-type.php
	 * @since 0.9.0
	 */
	final class Type {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-events-event-type.php
		 */
		const Read = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-events-event-type.php
		 */
		const Write = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-events-event-type.php
		 */
		const Close = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-events-event-type.php
		 */
		const Cancel = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-events-event-type.php
		 */
		const Kill = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.parallel-events-event-type.php
		 */
		const Error = null;
	}

}

namespace parallel\Events {

	/**
	 * @link https://php.net/manual/en/class.parallel-events-input.php
	 * @since 0.9.0
	 */
	final class Input {

		/**
		 * Inputs
		 * <p>Shall set input for the given target</p>
		 * @param string $target
		 * @param mixed $value
		 * @return void
		 * @link https://php.net/manual/en/parallel-events-input.add.php
		 * @since 0.9.0
		 */
		public function add(string $target, mixed $value): void {}

		/**
		 * Inputs
		 * <p>Shall remove input for all targets</p>
		 * @return void
		 * @link https://php.net/manual/en/parallel-events-input.clear.php
		 * @since 0.9.0
		 */
		public function clear(): void {}

		/**
		 * Inputs
		 * <p>Shall remove input for the given target</p>
		 * @param string $target
		 * @return void
		 * @link https://php.net/manual/en/parallel-events-input.remove.php
		 * @since 0.9.0
		 */
		public function remove(string $target): void {}
	}

}

namespace parallel {

	/**
	 * @link https://php.net/manual/en/class.parallel-future.php
	 * @since 0.8.0
	 */
	final class Future {

		/**
		 * Cancellation
		 * <p>Shall try to cancel the task</p><p><b>Note</b>:</p><p>If task is running, it will be interrupted.</p><p>Internal function calls in progress cannot be interrupted.</p>
		 * @return bool
		 * @link https://php.net/manual/en/parallel-future.cancel.php
		 * @since 0.9.0
		 */
		public function cancel(): bool {}

		/**
		 * State Detection
		 * <p>Shall indicate if the task was cancelled</p>
		 * @return bool
		 * @link https://php.net/manual/en/parallel-future.cancelled.php
		 * @since 0.9.0
		 */
		public function cancelled(): bool {}

		/**
		 * State Detection
		 * <p>Shall indicate if the task is completed</p>
		 * @return bool
		 * @link https://php.net/manual/en/parallel-future.done.php
		 * @since 0.8.0
		 */
		public function done(): bool {}

		/**
		 * Resolution
		 * <p>Shall return (and if necessary wait for) return from task</p>
		 * @return mixed
		 * @link https://php.net/manual/en/parallel-future.value.php
		 * @since 0.8.0
		 */
		public function value(): mixed {}
	}

	/**
	 * @link https://php.net/manual/en/class.parallel-runtime.php
	 * @since 0.8.0
	 */
	final class Runtime {

		/**
		 * Runtime Construction
		 * <p>Shall construct a new runtime without bootstrapping.</p><p>Shall construct a bootstrapped runtime.</p>
		 * @return self
		 * @link https://php.net/manual/en/parallel-runtime.construct.php
		 * @since 0.8.0
		 */
		public function __construct() {}

		/**
		 * Runtime Graceful Join
		 * <p>Shall request that the runtime shutsdown.</p><p><b>Note</b>:</p><p>Tasks scheduled for execution will be executed before the shutdown occurs.</p>
		 * @return void
		 * @link https://php.net/manual/en/parallel-runtime.close.php
		 * @since 0.8.0
		 */
		public function close(): void {}

		/**
		 * Runtime Join
		 * <p>Shall attempt to force the runtime to shutdown.</p><p><b>Note</b>:</p><p>Tasks scheduled for execution will not be executed, the currently running task shall be interrupted.</p><p>Internal function calls in progress cannot be interrupted.</p>
		 * @return void
		 * @link https://php.net/manual/en/parallel-runtime.kill.php
		 * @since 0.8.0
		 */
		public function kill(): void {}

		/**
		 * Execution
		 * <p>Shall schedule <code>task</code> for execution in parallel.</p><p>Shall schedule <code>task</code> for execution in parallel, passing <code>argv</code> at execution time.</p>
		 * @param \Closure $task <p>A <code>Closure</code> with specific characteristics.</p>
		 * @return ?Future <p><b>Warning</b></p> <p>The return <code>parallel\Future</code> must not be ignored when the task contains a return or throw statement.</p>
		 * @link https://php.net/manual/en/parallel-runtime.run.php
		 * @since 0.8.0
		 */
		public function run(\Closure $task): ?\Future {}
	}

	/**
	 * @link https://php.net/manual/en/class.parallel-sync.php
	 * @since 1.1.0
	 */
	final class Sync {

		/**
		 * Construction
		 * <p>Shall construct a new synchronization object with no value</p><p>Shall construct a new synchronization object containing the given scalar value</p>
		 * @return self
		 * @link https://php.net/manual/en/parallel-sync.construct.php
		 * @since 1.1.0
		 */
		public function __construct() {}

		/**
		 * Synchronization
		 * <p>Shall exclusively enter into the critical code</p>
		 * @param callable $critical
		 * @return mixed
		 * @link https://php.net/manual/en/parallel-sync.invoke.php
		 * @since 1.1.0
		 */
		public function __invoke(callable $critical) {}

		/**
		 * Access
		 * <p>Shall atomically return the syncrhonization objects value</p>
		 * @return scalar
		 * @link https://php.net/manual/en/parallel-sync.get.php
		 * @since 1.1.0
		 */
		public function get(): \scalar {}

		/**
		 * Synchronization
		 * <p>Shall notify one (by default) or all threads waiting on the synchronization object</p>
		 * @param bool $all
		 * @return void
		 * @link https://php.net/manual/en/parallel-sync.notify.php
		 * @since 1.1.0
		 */
		public function notify(bool $all = null) {}

		/**
		 * Access
		 * <p>Shall atomically set the value of the synchronization object</p>
		 * @param \scalar $value
		 * @return void
		 * @link https://php.net/manual/en/parallel-sync.set.php
		 * @since 1.1.0
		 */
		public function set(\scalar $value) {}

		/**
		 * Synchronization
		 * <p>Shall wait for notification on this synchronization object</p>
		 * @return void
		 * @link https://php.net/manual/en/parallel-sync.wait.php
		 * @since 1.1.0
		 */
		public function wait() {}
	}

}
