<?php



namespace {

	/**
	 * Stops xhprof profiler
	 * <p>Stops the profiler, and returns xhprof data from the run.</p>
	 * @return array <p>An <code>array</code> of xhprof data, from the run.</p>
	 * @link https://php.net/manual/en/function.xhprof-disable.php
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_disable(): array {}

	/**
	 * Start xhprof profiler
	 * <p>Start xhprof profiling.</p>
	 * @param int $flags <p>Optional flags to add additional information to the profiling. See the XHprof constants for further information about these flags, e.g., <b><code>XHPROF_FLAGS_MEMORY</code></b> to enable memory profiling.</p>
	 * @param array $options <p>An <code>array</code> of optional options, namely, the 'ignored_functions' option to pass in functions to be ignored during profiling.</p>
	 * @return void <p><b><code>null</code></b></p>
	 * @link https://php.net/manual/en/function.xhprof-enable.php
	 * @see xhprof_disable(), xhprof_sample_enable(), memory_get_usage(), getrusage()
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_enable(int $flags = 0, array $options = null): void {}

	/**
	 * Stops xhprof sample profiler
	 * <p>Stops the sample mode xhprof profiler, and</p>
	 * @return array <p>An <code>array</code> of xhprof sample data, from the run.</p>
	 * @link https://php.net/manual/en/function.xhprof-sample-disable.php
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_sample_disable(): array {}

	/**
	 * Start XHProf profiling in sampling mode
	 * <p>Starts profiling in sample mode, which is a lighter weight version of <code>xhprof_enable()</code>. The sampling interval is 0.1 seconds, and samples record the full function call stack. The main use case is when lower overhead is required when doing performance monitoring and diagnostics.</p>
	 * @return void <p><b><code>null</code></b></p>
	 * @link https://php.net/manual/en/function.xhprof-sample-enable.php
	 * @see xhprof_sample_disable(), xhprof_enable(), memory_get_usage(), getrusage()
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_sample_enable(): void {}

	/**
	 * Used to add CPU profiling information to the output.
	 */
	define('XHPROF_FLAGS_CPU', null);

	/**
	 * Used to add memory profiling information to the output.
	 */
	define('XHPROF_FLAGS_MEMORY', null);

	/**
	 * Used to skip all built-in (internal) functions.
	 */
	define('XHPROF_FLAGS_NO_BUILTINS', null);

}
