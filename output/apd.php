<?php



namespace {

	/**
	 * Stops the interpreter and waits on a CR from the socket
	 * <p>This can be used to stop the running of your script, and await responses on the connected socket. To step the program, just send enter (a blank line), or enter a php command to be executed.</p>
	 * @param int $debug_level <p>An integer which is formed by adding together the <i>XXX_TRACE</i> constants.</p><p>It is not recommended to use <b><code>MEMORY_TRACE</code></b>. It is very slow and does not appear to be accurate. <b><code>ASSIGNMENT_TRACE</code></b> is not implemented yet.</p><p>To turn on all functional traces (TIMING, FUNCTIONS, ARGS SUMMARY (like strace -c)) use the value 99</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apd-breakpoint.php
	 * @since PECL apd >= 0.2
	 */
	function apd_breakpoint(int $debug_level): bool {}

	/**
	 * Returns the current call stack as an array
	 * <p>Returns the current call stack as an array</p>
	 * @return array <p>An array containing the current call stack.</p>
	 * @link http://php.net/manual/en/function.apd-callstack.php
	 * @since PECL apd 0.2-0.4
	 */
	function apd_callstack(): array {}

	/**
	 * Throw a warning and a callstack
	 * <p>Behaves like perl's <i>Carp::cluck</i>. Throw a warning and a callstack.</p>
	 * @param string $warning <p>The warning to throw.</p>
	 * @param string $delimiter <p>The delimiter. Default to <i>&lt;BR /&gt;</i>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.apd-clunk.php
	 * @see apd_croak()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_clunk(string $warning, string $delimiter = "<BR />"): void {}

	/**
	 * Restarts the interpreter
	 * <p>Usually sent via the socket to restart the interpreter.</p>
	 * @param int $debug_level <p>An integer which is formed by adding together the <i>XXX_TRACE</i> constants.</p><p>It is not recommended to use <b><code>MEMORY_TRACE</code></b>. It is very slow and does not appear to be accurate. <b><code>ASSIGNMENT_TRACE</code></b> is not implemented yet.</p><p>To turn on all functional traces (TIMING, FUNCTIONS, ARGS SUMMARY (like strace -c)) use the value 99</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apd-continue.php
	 * @since PECL apd >= 0.2
	 */
	function apd_continue(int $debug_level): bool {}

	/**
	 * Throw an error, a callstack and then exit
	 * <p>Behaves like perl's <i>Carp::croak</i>. Throw an error, a callstack and then exit.</p>
	 * @param string $warning <p>The warning to throw.</p>
	 * @param string $delimiter <p>The delimiter. Default to <i>&lt;BR /&gt;</i>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.apd-croak.php
	 * @see apd_clunk()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_croak(string $warning, string $delimiter = "<BR />"): void {}

	/**
	 * Outputs the current function table
	 * <p>Outputs the current function table.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.apd-dump-function-table.php
	 * @since Unknown
	 */
	function apd_dump_function_table(): void {}

	/**
	 * Return all persistent resources as an array
	 * <p>Return all persistent resources as an array.</p>
	 * @return array <p>An array containing the current persistent resources.</p>
	 * @link http://php.net/manual/en/function.apd-dump-persistent-resources.php
	 * @see apd_dump_regular_resources()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_dump_persistent_resources(): array {}

	/**
	 * Return all current regular resources as an array
	 * <p>Return all current regular resources as an array.</p>
	 * @return array <p>An array containing the current regular resources.</p>
	 * @link http://php.net/manual/en/function.apd-dump-regular-resources.php
	 * @see apd_dump_persistent_resources()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_dump_regular_resources(): array {}

	/**
	 * Echo to the debugging socket
	 * <p>Usually sent via the socket to request information about the running script.</p>
	 * @param string $output <p>The debugged variable.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apd-echo.php
	 * @since PECL apd >= 0.2
	 */
	function apd_echo(string $output): bool {}

	/**
	 * Get an array of the current variables names in the local scope
	 * <p>Returns the names of all the variables defined in the active scope, (not their values).</p>
	 * @return array <p>A multidimensional array with all the variables.</p>
	 * @link http://php.net/manual/en/function.apd-get-active-symbols.php
	 * @since PECL apd 0.2
	 */
	function apd_get_active_symbols(): array {}

	/**
	 * Starts the session debugging
	 * <p>Starts debugging to pprof_{process_id} in the dump directory.</p>
	 * @param string $dump_directory <p>The directory in which the profile dump file is written. If not set, the <b>apd.dumpdir</b> setting from the php.ini file is used.</p>
	 * @param string $fragment
	 * @return string <p>Returns path of the destination file.</p>
	 * @link http://php.net/manual/en/function.apd-set-pprof-trace.php
	 * @see apd_set_session_trace()
	 * @since PECL apd >= 0.2
	 */
	function apd_set_pprof_trace(string $dump_directory = 'ini_get("apd.dumpdir")', string $fragment = "pprof"): string {}

	/**
	 * Changes or sets the current debugging level
	 * <p>This can be used to increase or decrease debugging in a different area of your application.</p>
	 * @param int $debug_level <p>An integer which is formed by adding together the <i>XXX_TRACE</i> constants.</p><p>It is not recommended to use <b><code>MEMORY_TRACE</code></b>. It is very slow and does not appear to be accurate. <b><code>ASSIGNMENT_TRACE</code></b> is not implemented yet.</p><p>To turn on all functional traces (TIMING, FUNCTIONS, ARGS SUMMARY (like strace -c)) use the value 99</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.apd-set-session.php
	 * @since PECL apd 0.2-0.4
	 */
	function apd_set_session(int $debug_level): void {}

	/**
	 * Starts the session debugging
	 * <p>Starts debugging to apd_dump_{process_id} in the dump directory.</p>
	 * @param int $debug_level <p>An integer which is formed by adding together the <i>XXX_TRACE</i> constants.</p><p>It is not recommended to use <b><code>MEMORY_TRACE</code></b>. It is very slow and does not appear to be accurate. <b><code>ASSIGNMENT_TRACE</code></b> is not implemented yet.</p><p>To turn on all functional traces (TIMING, FUNCTIONS, ARGS SUMMARY (like strace -c)) use the value 99</p>
	 * @param string $dump_directory <p>The directory in which the profile dump file is written. If not set, the <i>apd.dumpdir</i> setting from the php.ini file is used.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.apd-set-session-trace.php
	 * @since PECL apd 0.2-0.4
	 */
	function apd_set_session_trace(int $debug_level, string $dump_directory = 'ini_get("apd.dumpdir")'): void {}

	/**
	 * Starts the remote session debugging
	 * <p>Connects to the specified <code>tcp_server</code> (eg. <i>tcplisten</i>) and sends debugging data to the socket.</p>
	 * @param string $tcp_server <p>IP or Unix Domain socket (like a file) of the TCP server.</p>
	 * @param int $socket_type <p>Can be <b><code>AF_UNIX</code></b> for file based sockets or <b><code>APD_AF_INET</code></b> for standard tcp/ip.</p>
	 * @param int $port <p>You can use any port, but higher numbers are better as most of the lower numbers may be used by other system services.</p>
	 * @param int $debug_level <p>An integer which is formed by adding together the <i>XXX_TRACE</i> constants.</p><p>It is not recommended to use <b><code>MEMORY_TRACE</code></b>. It is very slow and does not appear to be accurate. <b><code>ASSIGNMENT_TRACE</code></b> is not implemented yet.</p><p>To turn on all functional traces (TIMING, FUNCTIONS, ARGS SUMMARY (like strace -c)) use the value 99</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.apd-set-session-trace-socket.php
	 * @since PECL apd >= 0.2
	 */
	function apd_set_session_trace_socket(string $tcp_server, int $socket_type, int $port, int $debug_level): bool {}

	/**
	 * Overrides built-in functions
	 * <p>Overrides built-in functions by replacing them in the symbol table.</p>
	 * @param string $function_name <p>The function to override.</p>
	 * @param string $function_args <p>The function arguments, as a comma separated string.</p> <p>Usually you will want to pass this parameter, as well as the <code>function_code</code> parameter, as a single quote delimited string. The reason for using single quoted strings, is to protect the variable names from parsing, otherwise, if you use double quotes there will be a need to escape the variable names, e.g. \$your_var.</p>
	 * @param string $function_code <p>The new code for the function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.override-function.php
	 * @since PECL apd >= 0.2
	 */
	function override_function(string $function_name, string $function_args, string $function_code): bool {}

	/**
	 * Renames orig_name to new_name in the global function table
	 * <p>Renames a orig_name to new_name in the global function table. Useful for temporarily overriding built-in functions.</p>
	 * @param string $original_name <p>The original function name.</p>
	 * @param string $new_name <p>The new name for the <code>original_name</code> function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.rename-function.php
	 * @since PECL apd >= 0.2
	 */
	function rename_function(string $original_name, string $new_name): bool {}

	/**
	 * example: <i>1.0.2-dev</i>
	 */
	define('APD_VERSION', null);

	/**
	 * 2
	 */
	define('ARGS_TRACE', null);

	/**
	 * 4
	 */
	define('ASSIGNMENT_TRACE', null);

	/**
	 * 128
	 */
	define('ERROR_TRACE', null);

	/**
	 * 1
	 */
	define('FUNCTION_TRACE', null);

	/**
	 * 16
	 */
	define('MEMORY_TRACE', null);

	/**
	 * 256
	 */
	define('PROF_TRACE', null);

	/**
	 * 8
	 */
	define('STATEMENT_TRACE', null);

	/**
	 * 64
	 */
	define('SUMMARY_TRACE', null);

	/**
	 * 32
	 */
	define('TIMING_TRACE', null);

}
