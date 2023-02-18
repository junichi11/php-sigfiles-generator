<?php



namespace {

	/**
	 * <p>Fibers represent full-stack, interruptible functions. Fibers may be suspended from anywhere in the call-stack, pausing execution within the fiber until the fiber is resumed at a later time.</p>
	 * @link https://php.net/manual/en/class.fiber.php
	 * @since PHP 8 >= 8.1.0
	 */
	final class Fiber {

		/**
		 * Creates a new Fiber instance
		 * @param callable $callback <p>The <code>callable</code> to invoke when starting the fiber. Arguments given to <code>Fiber::start()</code> will be provided as arguments to the given callable.</p>
		 * @return self
		 * @link https://php.net/manual/en/fiber.construct.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function __construct(callable $callback) {}

		/**
		 * Gets the currently executing Fiber instance
		 * @return ?Fiber <p>Returns the currently executing <code>Fiber</code> instance or <b><code>null</code></b> if this method is called from outside a fiber.</p>
		 * @link https://php.net/manual/en/fiber.getcurrent.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function getCurrent(): ?\Fiber {}

		/**
		 * Gets the value returned by the Fiber
		 * @return mixed <p>Returns the value returned by the <code>callable</code> provided to <code>Fiber::__construct()</code>. If the fiber has not returned a value, either because it has not been started, has not terminated, or threw an exception, a <code>FiberError</code> will be thrown.</p>
		 * @link https://php.net/manual/en/fiber.getreturn.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function getReturn(): mixed {}

		/**
		 * Determines if the fiber is running
		 * @return bool <p>Returns <b><code>true</code></b> only if the fiber is running. A fiber is considered running after a call to <code>Fiber::start()</code>, <code>Fiber::resume()</code>, or <code>Fiber::throw()</code> that has not yet returned. Return <b><code>false</code></b> if the fiber is not running.</p>
		 * @link https://php.net/manual/en/fiber.isrunning.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function isRunning(): bool {}

		/**
		 * Determines if the fiber has started
		 * @return bool <p>Returns <b><code>true</code></b> only after the fiber has been started; otherwise <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/fiber.isstarted.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function isStarted(): bool {}

		/**
		 * Determines if the fiber is suspended
		 * @return bool <p>Returns <b><code>true</code></b> if the fiber is currently suspended; otherwise <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/fiber.issuspended.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function isSuspended(): bool {}

		/**
		 * Determines if the fiber has terminated
		 * @return bool <p>Returns <b><code>true</code></b> only after the fiber has terminated, either by returning or throwing an exception; otherwise <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/fiber.isterminated.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function isTerminated(): bool {}

		/**
		 * Resumes execution of the fiber with a value
		 * <p>Resumes the fiber using the given value as the result of the current <code>Fiber::suspend()</code> call.</p><p>If the fiber is not suspended when this method is called, a <code>FiberError</code> will be thrown.</p>
		 * @param mixed $value <p>The value to resume the fiber. This value will be the return value of the current <code>Fiber::suspend()</code> call.</p>
		 * @return mixed <p>The value provided to the next call to <code>Fiber::suspend()</code> or <b><code>null</code></b> if the fiber returns. If the fiber throws an exception before suspending, it will be thrown from the call to this method.</p>
		 * @link https://php.net/manual/en/fiber.resume.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function resume(mixed $value = null): mixed {}

		/**
		 * Start execution of the fiber
		 * <p>A variadic list of arguments to provide to the callable used when constructing the fiber.</p><p>If the fiber has already been started when this method is called, a <code>FiberError</code> will be thrown.</p>
		 * @param mixed $args <p>The arguments to use when invoking the callable given to the fiber constructor.</p>
		 * @return mixed <p>The value provided to the first call to <code>Fiber::suspend()</code> or <b><code>null</code></b> if the fiber returns. If the fiber throws an exception before suspending, it will be thrown from the call to this method.</p>
		 * @link https://php.net/manual/en/fiber.start.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function start(mixed ...$args): mixed {}

		/**
		 * Suspends execution of the current fiber
		 * <p>Suspends execution of the current fiber. The value provided to this method will be returned from the call to <code>Fiber::start()</code>, <code>Fiber::resume()</code>, or <code>Fiber::throw()</code> that switched execution into the current fiber.</p><p>When the fiber is resumed, this method returns the value provided to <code>Fiber::resume()</code>. If the fiber is resumed using <code>Fiber::throw()</code>, the exception given to that method will be thrown from the call to this method.</p><p>If this method is called from outside a fiber, a <code>FiberError</code> will be thrown.</p>
		 * @param mixed $value <p>The value to return from the call to <code>Fiber::start()</code>, <code>Fiber::resume()</code>, or <code>Fiber::throw()</code> that switched execution into the current fiber.</p>
		 * @return mixed <p>The value provided to <code>Fiber::resume()</code>.</p>
		 * @link https://php.net/manual/en/fiber.suspend.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function suspend(mixed $value = null): mixed {}

		/**
		 * Resumes execution of the fiber with an exception
		 * <p>Resumes the fiber by throwing the given exception from the current <code>Fiber::suspend()</code> call.</p><p>If the fiber is not suspended when this method is called, a <code>FiberError</code> will be thrown.</p>
		 * @param \Throwable $exception <p>The exception to throw into the fiber from the current <code>Fiber::suspend()</code> call.</p>
		 * @return mixed <p>The value provided to the next call to <code>Fiber::suspend()</code> or <b><code>null</code></b> if the fiber returns. If the fiber throws an exception before suspending, it will be thrown from the call to this method.</p>
		 * @link https://php.net/manual/en/fiber.throw.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function throw(\Throwable $exception): mixed {}
	}

}
