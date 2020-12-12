<?php



namespace {

	/**
	 * <p>The LuaSandbox class creates a Lua environment and allows for execution of Lua code.</p>
	 * @link https://php.net/manual/en/class.luasandbox.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandbox {

		/**
		 * @var int <p>Used with <code>LuaSandbox::getProfilerFunctionReport()</code> to return timings in samples.</p>
		 * @link https://php.net/manual/en/class.luasandbox.php
		 */
		const SAMPLES = 0;

		/**
		 * @var int <p>Used with <code>LuaSandbox::getProfilerFunctionReport()</code> to return timings in seconds.</p>
		 * @link https://php.net/manual/en/class.luasandbox.php
		 */
		const SECONDS = 1;

		/**
		 * @var int <p>Used with <code>LuaSandbox::getProfilerFunctionReport()</code> to return timings in percentages of the total.</p>
		 * @link https://php.net/manual/en/class.luasandbox.php
		 */
		const PERCENT = 2;

		/**
		 * Call a function in a Lua global variable
		 * <p>Calls a function in a Lua global variable.</p><p>If the name contains "." characters, the function is located via recursive table accesses, as if the name were a Lua expression.</p><p>If the variable does not exist, or is not a function, false will be returned and a warning issued.</p><p>For more information about calling Lua functions and the return values, see <code>LuaSandboxFunction::call()</code>.</p>
		 * @param string $name <p>Lua variable name.</p>
		 * @param mixed $args <p>Arguments to the function.</p>
		 * @return array|bool <p>Returns an <code>array</code> of values returned by the Lua function, which may be empty, or <code>false</code> in case of failure.</p>
		 * @link https://php.net/manual/en/luasandbox.callfunction.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function callFunction(string $name, ...$args) {}

		/**
		 * Disable the profiler
		 * <p>Disables the profiler.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/luasandbox.disableprofiler.php
		 * @since PECL luasandbox >= 1.1.0
		 */
		public function disableProfiler(): void {}

		/**
		 * Enable the profiler.
		 * <p>Enables the profiler. Profiling will begin when Lua code is entered.</p><p>The profiler periodically samples the Lua environment to record the running function. Testing indicates that at least on Linux, setting a period less than 1ms will lead to a high overrun count but no performance problems.</p>
		 * @param float $period <p>Sampling period in seconds.</p>
		 * @return bool <p>Returns a boolean indicating whether the profiler is enabled.</p>
		 * @link https://php.net/manual/en/luasandbox.enableprofiler.php
		 * @since PECL luasandbox >= 1.1.0
		 */
		public function enableProfiler(float $period = 0.02): bool {}

		/**
		 * Fetch the current CPU time usage of the Lua environment
		 * <p>Fetches the current CPU time usage of the Lua environment.</p><p>This includes time spent in PHP callbacks.</p>
		 * @return float <p>Returns the current CPU time usage in seconds.</p><p><b>Note</b>:</p><p>On Windows, this function always returns zero. On operating systems that do not support <b><code>CLOCK_THREAD_CPUTIME_ID</code></b>, such as FreeBSD and Mac OS X, this function will return the elapsed wall-clock time, not CPU time.</p>
		 * @link https://php.net/manual/en/luasandbox.getcpuusage.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function getCPUUsage(): float {}

		/**
		 * Fetch the current memory usage of the Lua environment
		 * <p>Fetches the current memory usage of the Lua environment.</p>
		 * @return int <p>Returns the current memory usage in bytes.</p>
		 * @link https://php.net/manual/en/luasandbox.getmemoryusage.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function getMemoryUsage(): int {}

		/**
		 * Fetch the peak memory usage of the Lua environment
		 * <p>Fetches the peak memory usage of the Lua environment.</p>
		 * @return int <p>Returns the peak memory usage in bytes.</p>
		 * @link https://php.net/manual/en/luasandbox.getpeakmemoryusage.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function getPeakMemoryUsage(): int {}

		/**
		 * Fetch profiler data
		 * <p>For a profiling instance previously started by <code>LuaSandbox::enableProfiler()</code>, get a report of the cost of each function.</p><p>The measurement unit used for the cost is determined by the $units parameter:</p><p></p><p>Measure in number of samples.</p><p>Measure in seconds of CPU time.</p><p>Measure percentage of CPU time.</p>
		 * @param int $units <p>Measurement unit constant.</p>
		 * @return array <p>Returns profiler measurements, sorted in descending order, as an associative <code>array</code>. Keys are the Lua function names (with source file and line defined in angle brackets), values are the measurements as <code>int</code> or <code>float</code>.</p><p><b>Note</b>:</p><p>On Windows, this function always returns an empty array. On operating systems that do not support <b><code>CLOCK_THREAD_CPUTIME_ID</code></b>, such as FreeBSD and Mac OS X, this function will report the elapsed wall-clock time, not CPU time.</p>
		 * @link https://php.net/manual/en/luasandbox.getprofilerfunctionreport.php
		 * @since PECL luasandbox >= 1.1.0
		 */
		public function getProfilerFunctionReport(int $units = LuaSandbox::SECONDS): array {}

		/**
		 * Return the versions of LuaSandbox and Lua
		 * <p>Returns the versions of LuaSandbox and Lua.</p>
		 * @return array <p>Returns an array with two keys:</p>  elementtypedescription    LuaSandbox <code>string</code> The version of the LuaSandbox extension.   Lua <code>string</code> The library name and version as defined by the LUA_RELEASE macro, for example, "Lua 5.1.5".
		 * @link https://php.net/manual/en/luasandbox.getversioninfo.php
		 * @since PECL luasandbox >= 1.6.0
		 */
		public static function getVersionInfo(): array {}

		/**
		 * Load a precompiled binary chunk into the Lua environment
		 * <p>Loads data generated by <code>LuaSandboxFunction::dump()</code>.</p>
		 * @param string $code <p>Data from <code>LuaSandboxFunction::dump()</code>.</p>
		 * @param string $chunkName <p>Name for the loaded function.</p>
		 * @return LuaSandboxFunction <p>Returns a LuaSandboxFunction.</p>
		 * @link https://php.net/manual/en/luasandbox.loadbinary.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function loadBinary(string $code, string $chunkName = ''): \LuaSandboxFunction {}

		/**
		 * Load Lua code into the Lua environment
		 * <p>Loads Lua code into the Lua environment.</p><p>This is the equivalent of standard Lua's <code>loadstring()</code> function.</p>
		 * @param string $code <p>Lua code.</p>
		 * @param string $chunkName <p>Name for the loaded chunk, for use in error traces.</p>
		 * @return LuaSandboxFunction <p>Returns a LuaSandboxFunction which, when executed, will execute the passed $code.</p>
		 * @link https://php.net/manual/en/luasandbox.loadstring.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function loadString(string $code, string $chunkName = ''): \LuaSandboxFunction {}

		/**
		 * Pause the CPU usage timer
		 * <p>Pauses the CPU usage timer.</p><p>This only has effect when called from within a callback from Lua. When execution returns to Lua, the timer will be automatically unpaused. If a new call into Lua is made, the timer will be unpaused for the duration of that call.</p><p>If a PHP callback calls into Lua again with timer not paused, and then that Lua function calls into PHP again, the second PHP call will not be able to pause the timer. The logic is that even though the second PHP call would avoid counting the CPU usage against the limit, the first call still counts it.</p>
		 * @return bool <p>Returns a <code>bool</code> indicating whether the timer is now paused.</p>
		 * @link https://php.net/manual/en/luasandbox.pauseusagetimer.php
		 * @since PECL luasandbox >= 1.4.0
		 */
		public function pauseUsageTimer(): bool {}

		/**
		 * Register a set of PHP functions as a Lua library
		 * <p>Registers a set of PHP functions as a Lua library, so that Lua can call the relevant PHP code.</p><p>For more information about calling Lua functions and the return values, see <code>LuaSandboxFunction::call()</code>.</p>
		 * @param string $libname <p>The name of the library. In the Lua state, the global variable of this name will be set to the table of functions. If the table already exists, the new functions will be added to it.</p>
		 * @param array $functions <p>An <code>array</code>, where each key is a function name, and each value is a corresponding PHP <code>callable</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/luasandbox.registerlibrary.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function registerLibrary(string $libname, array $functions): void {}

		/**
		 * Set the CPU time limit for the Lua environment
		 * <p>Sets the CPU time limit for the Lua environment.</p><p>If the total user and system time used by the environment after the call to this method exceeds this limit, a LuaSandboxTimeoutError exception is thrown.</p><p>Time used in PHP callbacks is included in the limit.</p><p>Setting the time limit from a callback while Lua is running causes the timer to be reset, or started if it was not already running.</p><p><b>Note</b>:</p><p>On Windows, the CPU limit will be ignored. On operating systems that do not support <b><code>CLOCK_THREAD_CPUTIME_ID</code></b>, such as FreeBSD and Mac OS X, wall-clock time rather than CPU time will be limited.</p>
		 * @param float|bool $limit <p>Limit as a <code>float</code> in seconds, or <code>false</code> for no limit.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/luasandbox.setcpulimit.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function setCPULimit($limit): void {}

		/**
		 * Set the memory limit for the Lua environment
		 * <p>Sets the memory limit for the Lua environment.</p><p>If this limit is exceeded, a LuaSandboxMemoryError exception is thrown.</p>
		 * @param int $limit <p>Memory limit in bytes.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/luasandbox.setmemorylimit.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function setMemoryLimit(int $limit): void {}

		/**
		 * Unpause the timer paused by LuaSandbox::pauseUsageTimer()
		 * <p>Unpauses the timer paused by <code>LuaSandbox::pauseUsageTimer()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/luasandbox.unpauseusagetimer.php
		 * @since PECL luasandbox >= 1.4.0
		 */
		public function unpauseUsageTimer(): void {}

		/**
		 * Wrap a PHP callable in a LuaSandboxFunction
		 * <p>Wraps a PHP callable in a LuaSandboxFunction, so it can be passed into Lua as an anonymous function.</p><p>The function must return either an array of values (which may be empty), or <b><code>NULL</code></b> which is equivalent to returning the empty array.</p><p>Exceptions will be raised as errors in Lua, however only LuaSandboxRuntimeError exceptions may be caught inside Lua with <code>pcall()</code> or <code>xpcall()</code>.</p><p>For more information about calling Lua functions and the return values, see <code>LuaSandboxFunction::call()</code>.</p>
		 * @param callable $function <p>Callable to wrap.</p>
		 * @return LuaSandboxFunction <p>Returns a LuaSandboxFunction.</p>
		 * @link https://php.net/manual/en/luasandbox.wrapphpfunction.php
		 * @since PECL luasandbox >= 1.2.0
		 */
		public function wrapPhpFunction(callable $function): \LuaSandboxFunction {}
	}

	/**
	 * <p>Base class for LuaSandbox exceptions</p>
	 * @link https://php.net/manual/en/class.luasandboxerror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxError extends \Exception {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.luasandboxerror.php
		 */
		const RUN = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.luasandboxerror.php
		 */
		const SYNTAX = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.luasandboxerror.php
		 */
		const MEM = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.luasandboxerror.php
		 */
		const ERR = 5;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Exception thrown when Lua encounters an error inside an error handler.</p>
	 * @link https://php.net/manual/en/class.luasandboxerrorerror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxErrorError extends \LuaSandboxFatalError {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Uncatchable LuaSandbox exceptions.</p>
	 * <p>These may not be caught inside Lua using <code>pcall()</code> or <code>xpcall()</code>.</p>
	 * @link https://php.net/manual/en/class.luasandboxfatalerror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxFatalError extends \LuaSandboxError {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a Lua function, allowing it to be called from PHP.</p>
	 * <p>A LuaSandboxFunction may be obtained as a return value from Lua, as a parameter passed to a callback from Lua, or by using <code>LuaSandbox::wrapPhpFunction()</code>, <code>LuaSandbox::loadString()</code>, or <code>LuaSandbox::loadBinary()</code>.</p>
	 * @link https://php.net/manual/en/class.luasandboxfunction.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxFunction {

		/**
		 * Call a Lua function
		 * <p>Calls a Lua function.</p><p>Errors considered to be the fault of the PHP code will result in the function returning <code>false</code> and <b><code>E_WARNING</code></b> being raised, for example, a <code>resource</code> type being used as an argument. Lua errors will result in a LuaSandboxRuntimeError exception being thrown.</p><p>PHP and Lua types are converted as follows:</p><p></p><p>PHP <b><code>NULL</code></b> is Lua <code>nil</code>, and vice versa.</p><p>PHP <code>int</code>s and <code>float</code>s are converted to Lua numbers. Infinity and <b><code>NAN</code></b> are supported.</p><p>Lua numbers without a fractional part between approximately <code>-2&#42;&#42;53</code> and <code>2&#42;&#42;53</code> are converted to PHP <code>int</code>s, with others being converted to PHP <code>float</code>s.</p><p>PHP <code>bool</code>s are Lua booleans, and vice versa.</p><p>PHP <code>string</code>s are Lua strings, and vice versa.</p><p>Lua functions are PHP LuaSandboxFunction objects, and vice versa. General PHP <code>callable</code>s are not supported.</p><p>PHP <code>array</code>s are converted to Lua tables, and vice versa.</p><p></p><p>Note that Lua typically indexes arrays from 1, while PHP indexes arrays from 0. No adjustment is made for these differing conventions.</p><p>Self-referential arrays are not supported in either direction.</p><p>PHP references are dereferenced.</p><p>Lua <code>__pairs</code> and <code>__ipairs</code> are processed. <code>__index</code> is ignored.</p><p>When converting from PHP to Lua, integer keys between <code>-2&#42;&#42;53</code> and <code>2&#42;&#42;53</code> are represented as Lua numbers. All other keys are represented as Lua strings.</p><p>When converting from Lua to PHP, keys other than strings and numbers will result in an error, as will collisions when converting numbers to strings or vice versa (since PHP considers things like <code>$a[0]</code> and <code>$a["0"]</code> as being equivalent).</p><p>All other types are unsupported and will raise an error/exception, including general PHP <code>object</code>s and Lua userdata and thread types.</p><p>Lua functions inherently return a list of results. So on success, this method returns an <code>array</code> containing all of the values returned by Lua, with <code>int</code> keys starting from zero. Lua may return no results, in which case an empty array is returned.</p>
		 * @param string $args <p>Arguments passed to the function.</p>
		 * @return array|bool <p>Returns an <code>array</code> of values returned by the function, which may be empty, or <code>false</code> on error.</p>
		 * @link https://php.net/manual/en/luasandboxfunction.call.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function call(string ...$args) {}

		/**
		 * Dump the function as a binary blob
		 * <p>Dumps the function as a binary blob.</p>
		 * @return string <p>Returns a string that may be passed to <code>LuaSandbox::loadBinary()</code>.</p>
		 * @link https://php.net/manual/en/luasandboxfunction.dump.php
		 * @since PECL luasandbox >= 1.0.0
		 */
		public function dump(): string {}
	}

	/**
	 * <p>Exception thrown when Lua cannot allocate memory.</p>
	 * @link https://php.net/manual/en/class.luasandboxmemoryerror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxMemoryError extends \LuaSandboxFatalError {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Catchable LuaSandbox runtime exceptions.</p>
	 * <p>These may be caught inside Lua using <code>pcall()</code> or <code>xpcall()</code>.</p>
	 * @link https://php.net/manual/en/class.luasandboxruntimeerror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxRuntimeError extends \LuaSandboxError {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Exception thrown when Lua code cannot be parsed.</p>
	 * @link https://php.net/manual/en/class.luasandboxsyntaxerror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxSyntaxError extends \LuaSandboxFatalError {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Exception thrown when the configured CPU time limit is exceeded.</p>
	 * @link https://php.net/manual/en/class.luasandboxtimeouterror.php
	 * @since PECL luasandbox >= 1.0.0
	 */
	class LuaSandboxTimeoutError extends \LuaSandboxFatalError {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

}
