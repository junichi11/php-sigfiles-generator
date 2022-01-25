<?php



namespace {

	/**
	 * Set an alarm clock for delivery of a signal
	 * <p>Creates a timer that will send a <b><code>SIGALRM</code></b> signal to the process after the given number of seconds. Any call to <b>pcntl_alarm()</b> will cancel any previously set alarm.</p>
	 * @param int $seconds <p>The number of seconds to wait. If <code>seconds</code> is zero, no new alarm is created.</p>
	 * @return int <p>Returns the time in seconds that any previously scheduled alarm had remaining before it was to be delivered, or <code>0</code> if there was no previously scheduled alarm.</p>
	 * @link https://php.net/manual/en/function.pcntl-alarm.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_alarm(int $seconds): int {}

	/**
	 * Enable/disable asynchronous signal handling or return the old setting
	 * <p>If the <code>enable</code> parameter is <b><code>null</code></b>, <b>pcntl_async_signals()</b> returns whether asynchronous signal handling is enabled. Otherwise, asynchronous signal handling is enabled or disabled.</p>
	 * @param ?bool $enable <p>Whether asynchronous signal handling should be enabled.</p>
	 * @return bool <p>When used as getter (<code>enable</code> parameter is <b><code>null</code></b>) it returns whether asynchronous signal handling is enabled. When used as setter (<code>enable</code> parameter is not <b><code>null</code></b>), it returns whether asynchronous signal handling was enabled <i>before</i> the function call.</p>
	 * @link https://php.net/manual/en/function.pcntl-async-signals.php
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function pcntl_async_signals(?bool $enable = null): bool {}

	/**
	 * Alias of pcntl_get_last_error()
	 * <p>This function is an alias of: <code>pcntl_get_last_error()</code></p>
	 * @return int
	 * @link https://php.net/manual/en/function.pcntl-errno.php
	 * @since PHP 5 >= 5.3.4, PHP 7, PHP 8
	 */
	function pcntl_errno(): int {}

	/**
	 * Executes specified program in current process space
	 * <p>Executes the program with the given arguments.</p>
	 * @param string $path <p><code>path</code> must be the path to a binary executable or a script with a valid path pointing to an executable in the shebang ( #!/usr/local/bin/perl for example) as the first line. See your system's man execve(2) page for additional information.</p>
	 * @param array $args <p><code>args</code> is an array of argument strings passed to the program.</p>
	 * @param array $env_vars <p><code>env_vars</code> is an array of strings which are passed as environment to the program. The array is in the format of name =&gt; value, the key being the name of the environmental variable and the value being the value of that variable.</p>
	 * @return bool <p>Returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.pcntl-exec.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_exec(string $path, array $args = [], array $env_vars = []): bool {}

	/**
	 * Forks the currently running process
	 * <p>The <b>pcntl_fork()</b> function creates a child process that differs from the parent process only in its PID and PPID. Please see your system's fork(2) man page for specific details as to how fork works on your system.</p>
	 * @return int <p>On success, the PID of the child process is returned in the parent's thread of execution, and a 0 is returned in the child's thread of execution. On failure, a -1 will be returned in the parent's context, no child process will be created, and a PHP error is raised.</p>
	 * @link https://php.net/manual/en/function.pcntl-fork.php
	 * @see pcntl_waitpid(), pcntl_signal(), cli_set_process_title()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_fork(): int {}

	/**
	 * Retrieve the error number set by the last pcntl function which failed
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int <p>Returns error code.</p>
	 * @link https://php.net/manual/en/function.pcntl-get-last-error.php
	 * @see pcntl_strerror()
	 * @since PHP 5 >= 5.3.4, PHP 7, PHP 8
	 */
	function pcntl_get_last_error(): int {}

	/**
	 * Get the priority of any process
	 * <p><b>pcntl_getpriority()</b> gets the priority of <code>process_id</code>. Because priority levels can differ between system types and kernel versions, please see your system's getpriority(2) man page for specific details.</p>
	 * @param ?int $process_id <p>If <b><code>null</code></b>, the process id of the current process is used.</p>
	 * @param int $mode <p>One of <b><code>PRIO_PGRP</code></b>, <b><code>PRIO_USER</code></b> or <b><code>PRIO_PROCESS</code></b>.</p>
	 * @return int|false <p><b>pcntl_getpriority()</b> returns the priority of the process or <b><code>false</code></b> on error. A lower numerical value causes more favorable scheduling.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.pcntl-getpriority.php
	 * @see pcntl_setpriority()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function pcntl_getpriority(?int $process_id = null, int $mode = PRIO_PROCESS): int|false {}

	/**
	 * Change the priority of any process
	 * <p><b>pcntl_setpriority()</b> sets the priority of <code>process_id</code>.</p>
	 * @param int $priority <p><code>priority</code> is generally a value in the range <code>-20</code> to <code>20</code>. The default priority is <code>0</code> while a lower numerical value causes more favorable scheduling. Because priority levels can differ between system types and kernel versions, please see your system's setpriority(2) man page for specific details.</p>
	 * @param ?int $process_id <p>If <b><code>null</code></b>, the process id of the current process is used.</p>
	 * @param int $mode <p>One of <b><code>PRIO_PGRP</code></b>, <b><code>PRIO_USER</code></b> or <b><code>PRIO_PROCESS</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pcntl-setpriority.php
	 * @see pcntl_getpriority()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function pcntl_setpriority(int $priority, ?int $process_id = null, int $mode = PRIO_PROCESS): bool {}

	/**
	 * Installs a signal handler
	 * <p>The <b>pcntl_signal()</b> function installs a new signal handler or replaces the current signal handler for the signal indicated by <code>signal</code>.</p>
	 * @param int $signal <p>The signal number.</p>
	 * @param callable|int $handler <p>The signal handler. This may be either a <code>callable</code>, which will be invoked to handle the signal, or either of the two global constants <b><code>SIG_IGN</code></b> or <b><code>SIG_DFL</code></b>, which will ignore the signal or restore the default signal handler respectively.</p> <p>If a <code>callable</code> is given, it must implement the following signature:</p> <p></p> handler(<code>int</code> <code>$signo</code>, <code>mixed</code> <code>$siginfo</code>): void   <code>signal</code>   The signal being handled.    <code>siginfo</code>   If operating systems supports siginfo_t structures, this will be an array of signal information dependent on the signal.    <p><b>Note</b>:</p><p>Note that when you set a handler to an object method, that object's reference count is increased which makes it persist until you either change the handler to something else, or your script ends.</p>
	 * @param bool $restart_syscalls <p>Specifies whether system call restarting should be used when this signal arrives.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pcntl-signal.php
	 * @see pcntl_fork(), pcntl_waitpid()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_signal(int $signal, callable|int $handler, bool $restart_syscalls = true): bool {}

	/**
	 * Calls signal handlers for pending signals
	 * <p>The <b>pcntl_signal_dispatch()</b> function calls the signal handlers installed by <code>pcntl_signal()</code> for each pending signal.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pcntl-signal-dispatch.php
	 * @see pcntl_signal(), pcntl_sigprocmask(), pcntl_sigwaitinfo(), pcntl_sigtimedwait()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function pcntl_signal_dispatch(): bool {}

	/**
	 * Get the current handler for specified signal
	 * <p>The <b>pcntl_signal_get_handler()</b> function will get the current handler for the specified <code>signal</code>.</p>
	 * @param int $signal <p>The signal number.</p>
	 * @return callable|int <p>This function may return an integer value that refers to <b><code>SIG_DFL</code></b> or <b><code>SIG_IGN</code></b>. If a custom handler has been set, that <code>callable</code> is returned.</p>
	 * @link https://php.net/manual/en/function.pcntl-signal-get-handler.php
	 * @see pcntl_signal()
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function pcntl_signal_get_handler(int $signal): callable|int {}

	/**
	 * Sets and retrieves blocked signals
	 * <p>The <b>pcntl_sigprocmask()</b> function adds, removes or sets blocked signals, depending on the <code>mode</code> parameter.</p>
	 * @param int $mode <p>Sets the behavior of <b>pcntl_sigprocmask()</b>. Possible values:</p><ul> <li><b><code>SIG_BLOCK</code></b>: Add the signals to the currently blocked signals.</li> <li><b><code>SIG_UNBLOCK</code></b>: Remove the signals from the currently blocked signals.</li> <li><b><code>SIG_SETMASK</code></b>: Replace the currently blocked signals by the given list of signals.</li> </ul>
	 * @param array $signals <p>List of signals.</p>
	 * @param array $old_signals <p>The <code>old_signals</code> parameter is set to an array containing the list of the previously blocked signals.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pcntl-sigprocmask.php
	 * @see pcntl_sigwaitinfo(), pcntl_sigtimedwait()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function pcntl_sigprocmask(int $mode, array $signals, array &$old_signals = null): bool {}

	/**
	 * Waits for signals, with a timeout
	 * <p>The <b>pcntl_sigtimedwait()</b> function operates in exactly the same way as <code>pcntl_sigwaitinfo()</code> except that it takes two additional parameters, <code>seconds</code> and <code>nanoseconds</code>, which enable an upper bound to be placed on the time for which the script is suspended.</p>
	 * @param array $signals <p>Array of signals to wait for.</p>
	 * @param array $info <p>The <code>info</code> is set to an array containing information about the signal. See <code>pcntl_sigwaitinfo()</code>.</p>
	 * @param int $seconds <p>Timeout in seconds.</p>
	 * @param int $nanoseconds <p>Timeout in nanoseconds.</p>
	 * @return int|false <p><b>pcntl_sigtimedwait()</b> returns a signal number on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pcntl-sigtimedwait.php
	 * @see pcntl_sigprocmask(), pcntl_sigwaitinfo()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function pcntl_sigtimedwait(array $signals, array &$info = [], int $seconds = 0, int $nanoseconds = 0): int|false {}

	/**
	 * Waits for signals
	 * <p>The <b>pcntl_sigwaitinfo()</b> function suspends execution of the calling script until one of the signals given in <code>signals</code> are delivered. If one of the signal is already pending (e.g. blocked by <code>pcntl_sigprocmask()</code>), <b>pcntl_sigwaitinfo()</b> will return immediately.</p>
	 * @param array $signals <p>Array of signals to wait for.</p>
	 * @param array $info <p>The <code>info</code> parameter is set to an array containing information about the signal.</p> <p>The following elements are set for all signals:</p><ul> <li>signo: Signal number</li> <li>errno: An error number</li> <li>code: Signal code</li> </ul> <p>The following elements may be set for the <b><code>SIGCHLD</code></b> signal:</p><ul> <li>status: Exit value or signal</li> <li>utime: User time consumed</li> <li>stime: System time consumed</li> <li>pid: Sending process ID</li> <li>uid: Real user ID of sending process</li> </ul> <p>The following elements may be set for the <b><code>SIGILL</code></b>, <b><code>SIGFPE</code></b>, <b><code>SIGSEGV</code></b> and <b><code>SIGBUS</code></b> signals:</p><ul> <li>addr: Memory location which caused fault</li> </ul> <p>The following element may be set for the <b><code>SIGPOLL</code></b> signal:</p><ul> <li>band: Band event</li> <li>fd: File descriptor number</li> </ul>
	 * @return int|false <p>Returns a signal number on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pcntl-sigwaitinfo.php
	 * @see pcntl_sigprocmask(), pcntl_sigtimedwait()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function pcntl_sigwaitinfo(array $signals, array &$info = []): int|false {}

	/**
	 * Retrieve the system error message associated with the given errno
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $error_code
	 * @return string <p>Returns error description.</p>
	 * @link https://php.net/manual/en/function.pcntl-strerror.php
	 * @see pcntl_get_last_error()
	 * @since PHP 5 >= 5.3.4, PHP 7, PHP 8
	 */
	function pcntl_strerror(int $error_code): string {}

	/**
	 * Waits on or returns the status of a forked child
	 * <p>The wait function suspends execution of the current process until a child has exited, or until a signal is delivered whose action is to terminate the current process or to call a signal handling function. If a child has already exited by the time of the call (a so-called "zombie" process), the function returns immediately. Any system resources used by the child are freed. Please see your system's wait(2) man page for specific details as to how wait works on your system.</p><p><b>Note</b>:</p><p>This function is equivalent to calling <code>pcntl_waitpid()</code> with a <code>-1</code> <code>process_id</code> and no <code>flags</code>.</p>
	 * @param int $status <p><b>pcntl_wait()</b> will store status information in the <code>status</code> parameter which can be evaluated using the following functions: <code>pcntl_wifexited()</code>, <code>pcntl_wifstopped()</code>, <code>pcntl_wifsignaled()</code>, <code>pcntl_wexitstatus()</code>, <code>pcntl_wtermsig()</code> and <code>pcntl_wstopsig()</code>.</p>
	 * @param int $flags <p>If wait3 is available on your system (mostly BSD-style systems), you can provide the optional <code>flags</code> parameter. If this parameter is not provided, wait will be used for the system call. If wait3 is not available, providing a value for <code>flags</code> will have no effect. The value of <code>flags</code> is the value of zero or more of the following two constants <code>OR</code>'ed together:</p> <b>Possible values for <code>flags</code></b>   <code>WNOHANG</code>  Return immediately if no child has exited.    <code>WUNTRACED</code>  Return for children which are stopped, and whose status has not been reported.
	 * @param array $resource_usage
	 * @return int <p><b>pcntl_wait()</b> returns the process ID of the child which exited, -1 on error or zero if WNOHANG was provided as an option (on wait3-available systems) and no child was available.</p>
	 * @link https://php.net/manual/en/function.pcntl-wait.php
	 * @see pcntl_fork(), pcntl_signal(), pcntl_wifexited(), pcntl_wifstopped(), pcntl_wifsignaled(), pcntl_wexitstatus(), pcntl_wtermsig(), pcntl_wstopsig(), pcntl_waitpid()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wait(int &$status, int $flags = 0, array &$resource_usage = []): int {}

	/**
	 * Waits on or returns the status of a forked child
	 * <p>Suspends execution of the current process until a child as specified by the <code>process_id</code> argument has exited, or until a signal is delivered whose action is to terminate the current process or to call a signal handling function.</p><p>If a child as requested by <code>process_id</code> has already exited by the time of the call (a so-called "zombie" process), the function returns immediately. Any system resources used by the child are freed. Please see your system's waitpid(2) man page for specific details as to how waitpid works on your system.</p>
	 * @param int $process_id <p>The value of <code>process_id</code> can be one of the following:</p> <b>possible values for <code>process_id</code></b>   <code>&lt; -1</code>  wait for any child process whose process group ID is equal to the absolute value of <code>process_id</code>.    <code>-1</code>  wait for any child process; this is the same behaviour that the wait function exhibits.    <code>0</code>  wait for any child process whose process group ID is equal to that of the calling process.    <code>&gt; 0</code>  wait for the child whose process ID is equal to the value of <code>process_id</code>.     <p><b>Note</b>:</p><p>Specifying <code>-1</code> as the <code>process_id</code> is equivalent to the functionality <code>pcntl_wait()</code> provides (minus <code>flags</code>).</p>
	 * @param int $status <p><b>pcntl_waitpid()</b> will store status information in the <code>status</code> parameter which can be evaluated using the following functions: <code>pcntl_wifexited()</code>, <code>pcntl_wifstopped()</code>, <code>pcntl_wifsignaled()</code>, <code>pcntl_wexitstatus()</code>, <code>pcntl_wtermsig()</code> and <code>pcntl_wstopsig()</code>.</p>
	 * @param int $flags <p>The value of <code>flags</code> is the value of zero or more of the following two global constants <code>OR</code>'ed together:</p> <b>possible values for <code>flags</code></b>   <code>WNOHANG</code>  return immediately if no child has exited.    <code>WUNTRACED</code>  return for children which are stopped, and whose status has not been reported.
	 * @param array $resource_usage
	 * @return int <p><b>pcntl_waitpid()</b> returns the process ID of the child which exited, -1 on error or zero if <b><code>WNOHANG</code></b> was used and no child was available</p>
	 * @link https://php.net/manual/en/function.pcntl-waitpid.php
	 * @see pcntl_fork(), pcntl_signal(), pcntl_wifexited(), pcntl_wifstopped(), pcntl_wifsignaled(), pcntl_wexitstatus(), pcntl_wtermsig(), pcntl_wstopsig()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_waitpid(int $process_id, int &$status, int $flags = 0, array &$resource_usage = []): int {}

	/**
	 * Returns the return code of a terminated child
	 * <p>Returns the return code of a terminated child. This function is only useful if <code>pcntl_wifexited()</code> returned <b><code>true</code></b>.</p>
	 * @param int $status <p>The <code>status</code> parameter is the status parameter supplied to a successful call to <code>pcntl_waitpid()</code>.</p>
	 * @return int|false <p>Returns the return code. If the functionality is not supported by the OS, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.pcntl-wexitstatus.php
	 * @see pcntl_waitpid(), pcntl_wifexited()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wexitstatus(int $status): int|false {}

	/**
	 * Checks if status code represents a normal exit
	 * <p>Checks whether the child status code represents a normal exit.</p>
	 * @param int $status <p>The <code>status</code> parameter is the status parameter supplied to a successful call to <code>pcntl_waitpid()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the child status code represents a normal exit, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.pcntl-wifexited.php
	 * @see pcntl_waitpid(), pcntl_wexitstatus()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wifexited(int $status): bool {}

	/**
	 * Checks whether the status code represents a termination due to a signal
	 * <p>Checks whether the child process exited because of a signal which was not caught.</p>
	 * @param int $status <p>The <code>status</code> parameter is the status parameter supplied to a successful call to <code>pcntl_waitpid()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the child process exited because of a signal which was not caught, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.pcntl-wifsignaled.php
	 * @see pcntl_waitpid(), pcntl_signal()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wifsignaled(int $status): bool {}

	/**
	 * Checks whether the child process is currently stopped
	 * <p>Checks whether the child process which caused the return is currently stopped; this is only possible if the call to <code>pcntl_waitpid()</code> was done using the option <code>WUNTRACED</code>.</p>
	 * @param int $status <p>The <code>status</code> parameter is the status parameter supplied to a successful call to <code>pcntl_waitpid()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the child process which caused the return is currently stopped, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.pcntl-wifstopped.php
	 * @see pcntl_waitpid()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wifstopped(int $status): bool {}

	/**
	 * Returns the signal which caused the child to stop
	 * <p>Returns the number of the signal which caused the child to stop. This function is only useful if <code>pcntl_wifstopped()</code> returned <b><code>true</code></b>.</p>
	 * @param int $status <p>The <code>status</code> parameter is the status parameter supplied to a successful call to <code>pcntl_waitpid()</code>.</p>
	 * @return int|false <p>Returns the signal number. If the functionality is not supported by the OS, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.pcntl-wstopsig.php
	 * @see pcntl_waitpid(), pcntl_wifstopped()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wstopsig(int $status): int|false {}

	/**
	 * Returns the signal which caused the child to terminate
	 * <p>Returns the number of the signal that caused the child process to terminate. This function is only useful if <code>pcntl_wifsignaled()</code> returned <b><code>true</code></b>.</p>
	 * @param int $status <p>The <code>status</code> parameter is the status parameter supplied to a successful call to <code>pcntl_waitpid()</code>.</p>
	 * @return int|false <p>Returns the signal number. If the functionality is not supported by the OS, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.pcntl-wtermsig.php
	 * @see pcntl_waitpid(), pcntl_signal(), pcntl_wifsignaled()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function pcntl_wtermsig(int $status): int|false {}

	define('BUS_ADRALN', 1);

	define('BUS_ADRERR', 2);

	define('BUS_OBJERR', 3);

	define('CLD_CONTINUED', 6);

	define('CLD_DUMPED', 3);

	define('CLD_EXITED', 1);

	define('CLD_KILLED', 2);

	define('CLD_STOPPED', 5);

	define('CLD_TRAPPED', 4);

	define('FPE_FLTDIV', 3);

	define('FPE_FLTINV', 7);

	define('FPE_FLTOVF', 4);

	define('FPE_FLTRES', 6);

	define('FPE_FLTSUB', 8);

	define('FPE_FLTUND', 7);

	define('FPE_INTDIV', 1);

	define('FPE_INTOVF', 2);

	define('ILL_BADSTK', 8);

	define('ILL_COPROC', 7);

	define('ILL_ILLADR', 3);

	define('ILL_ILLOPC', 1);

	define('ILL_ILLOPN', 2);

	define('ILL_ILLTRP', 4);

	define('ILL_PRVOPC', 5);

	define('ILL_PRVREG', 6);

	define('POLL_ERR', 4);

	define('POLL_HUP', 6);

	define('POLL_IN', 1);

	define('POLL_MSG', 3);

	define('POLL_OUT', 2);

	define('POLL_PRI', 5);

	define('SEGV_ACCERR', 2);

	define('SEGV_MAPERR', 1);

	define('SI_ASYNCIO', -4);

	define('SI_KERNEL', 128);

	define('SI_MSGGQ', null);

	define('SI_NOINFO', null);

	define('SI_QUEUE', -1);

	define('SI_SIGIO', -5);

	define('SI_TIMER', -2);

	define('SI_TKILL', -6);

	define('SI_USER', 0);

	define('SIG_BLOCK', 0);

	define('SIG_DFL', 0);

	define('SIG_ERR', -1);

	define('SIG_IGN', 1);

	define('SIG_SETMASK', 2);

	define('SIG_UNBLOCK', 1);

	define('SIGABRT', 6);

	define('SIGALRM', 14);

	define('SIGBABY', 31);

	define('SIGBUS', 7);

	define('SIGCHLD', 17);

	define('SIGCLD', 17);

	define('SIGCONT', 18);

	define('SIGFPE', 8);

	define('SIGHUP', 1);

	define('SIGILL', 4);

	define('SIGINT', 2);

	define('SIGIO', 29);

	define('SIGIOT', 6);

	define('SIGKILL', 9);

	define('SIGPIPE', 13);

	define('SIGPOLL', 29);

	define('SIGPROF', 27);

	define('SIGPWR', 30);

	define('SIGQUIT', 3);

	define('SIGSEGV', 11);

	define('SIGSTKFLT', 16);

	define('SIGSTOP', 19);

	define('SIGSYS', 31);

	define('SIGTERM', 15);

	define('SIGTRAP', 5);

	define('SIGTSTP', 20);

	define('SIGTTIN', 21);

	define('SIGTTOU', 22);

	define('SIGURG', 23);

	define('SIGUSR1', 10);

	define('SIGUSR2', 12);

	define('SIGVTALRM', 26);

	define('SIGWINCH', 28);

	define('SIGXCPU', 24);

	define('SIGXFSZ', 25);

	define('TRAP_BRKPT', 1);

	define('TRAP_TRACE', 2);

	define('WNOHANG', 1);

	define('WUNTRACED', 2);

}
