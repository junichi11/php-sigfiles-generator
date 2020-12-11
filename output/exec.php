<?php



namespace {

	/**
	 * Escape a string to be used as a shell argument
	 * <p><b>escapeshellarg()</b> adds single quotes around a string and quotes/escapes any existing single quotes allowing you to pass a string directly to a shell function and having it be treated as a single safe argument. This function should be used to escape individual arguments to shell functions coming from user input. The shell functions include <code>exec()</code>, <code>system()</code> and the backtick operator.</p><p>On Windows, <b>escapeshellarg()</b> instead replaces percent signs, exclamation marks (delayed variable substitution) and double quotes with spaces and adds double quotes around the string.</p>
	 * @param string $arg <p>The argument that will be escaped.</p>
	 * @return string <p>The escaped string.</p>
	 * @link https://php.net/manual/en/function.escapeshellarg.php
	 * @see escapeshellcmd(), exec(), popen(), system()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function escapeshellarg(string $arg): string {}

	/**
	 * Escape shell metacharacters
	 * <p><b>escapeshellcmd()</b> escapes any characters in a string that might be used to trick a shell command into executing arbitrary commands. This function should be used to make sure that any data coming from user input is escaped before this data is passed to the <code>exec()</code> or <code>system()</code> functions, or to the backtick operator.</p><p>Following characters are preceded by a backslash: <code>&amp;#;`|&#42;&#63;~&lt;&gt;^()[]{}$\</code>, <code>\x0A</code> and <code>\xFF</code>. <code>'</code> and <code>"</code> are escaped only if they are not paired. On Windows, all these characters plus <code>%</code> and <code>!</code> are preceded by a caret (<code>^</code>).</p>
	 * @param string $command <p>The command that will be escaped.</p>
	 * @return string <p>The escaped string.</p>
	 * @link https://php.net/manual/en/function.escapeshellcmd.php
	 * @see escapeshellarg(), exec(), popen(), system()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function escapeshellcmd(string $command): string {}

	/**
	 * Execute an external program
	 * <p><b>exec()</b> executes the given <code>command</code>.</p>
	 * @param string $command <p>The command that will be executed.</p>
	 * @param array $output <p>If the <code>output</code> argument is present, then the specified array will be filled with every line of output from the command. Trailing whitespace, such as <code>\n</code>, is not included in this array. Note that if the array already contains some elements, <b>exec()</b> will append to the end of the array. If you do not want the function to append elements, call <code>unset()</code> on the array before passing it to <b>exec()</b>.</p>
	 * @param int $return_var <p>If the <code>return_var</code> argument is present along with the <code>output</code> argument, then the return status of the executed command will be written to this variable.</p>
	 * @return string <p>The last line from the result of the command. If you need to execute a command and have all the data from the command passed directly back without any interference, use the <code>passthru()</code> function.</p><p>To get the output of the executed command, be sure to set and use the <code>output</code> parameter.</p>
	 * @link https://php.net/manual/en/function.exec.php
	 * @see system(), passthru(), escapeshellcmd(), pcntl_exec()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function exec(string $command, array &$output = NULL, int &$return_var = NULL): string {}

	/**
	 * Execute an external program and display raw output
	 * <p>The <b>passthru()</b> function is similar to the <code>exec()</code> function in that it executes a <code>command</code>. This function should be used in place of <code>exec()</code> or <code>system()</code> when the output from the Unix command is binary data which needs to be passed directly back to the browser. A common use for this is to execute something like the pbmplus utilities that can output an image stream directly. By setting the Content-type to <code>image/gif</code> and then calling a pbmplus program to output a gif, you can create PHP scripts that output images directly.</p>
	 * @param string $command <p>The command that will be executed.</p>
	 * @param int $return_var <p>If the <code>return_var</code> argument is present, the return status of the Unix command will be placed here.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.passthru.php
	 * @see exec(), system(), popen(), escapeshellcmd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function passthru(string $command, int &$return_var = NULL): void {}

	/**
	 * Close a process opened by proc_open() and return the exit code of that process
	 * <p><b>proc_close()</b> is similar to <code>pclose()</code> except that it only works on processes opened by <code>proc_open()</code>. <b>proc_close()</b> waits for the process to terminate, and returns its exit code. Open pipes to that process are closed when this function is called, in order to avoid a deadlock - the child process may not be able to exit while the pipes are open.</p>
	 * @param resource $process <p>The <code>proc_open()</code> <code>resource</code> that will be closed.</p>
	 * @return int <p>Returns the termination status of the process that was run. In case of an error then <code>-1</code> is returned.</p><p><b>Note</b>:</p><p>If PHP has been compiled with --enable-sigchild, the return value of this function is undefined.</p>
	 * @link https://php.net/manual/en/function.proc-close.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function proc_close($process): int {}

	/**
	 * Get information about a process opened by proc_open()
	 * <p><b>proc_get_status()</b> fetches data about a process opened using <code>proc_open()</code>.</p>
	 * @param resource $process <p>The <code>proc_open()</code> <code>resource</code> that will be evaluated.</p>
	 * @return array <p>An <code>array</code> of collected information on success, and <b><code>FALSE</code></b> on failure. The returned array contains the following elements:</p>  elementtypedescription    command <code>string</code>  The command string that was passed to <code>proc_open()</code>.    pid <code>int</code> process id   running <code>bool</code>  <b><code>TRUE</code></b> if the process is still running, <b><code>FALSE</code></b> if it has terminated.    signaled <code>bool</code>  <b><code>TRUE</code></b> if the child process has been terminated by an uncaught signal. Always set to <b><code>FALSE</code></b> on Windows.    stopped <code>bool</code>  <b><code>TRUE</code></b> if the child process has been stopped by a signal. Always set to <b><code>FALSE</code></b> on Windows.    exitcode <code>int</code>  The exit code returned by the process (which is only meaningful if <code>running</code> is <b><code>FALSE</code></b>). Only first call of this function return real value, next calls return <code>-1</code>.    termsig <code>int</code>  The number of the signal that caused the child process to terminate its execution (only meaningful if <code>signaled</code> is <b><code>TRUE</code></b>).    stopsig <code>int</code>  The number of the signal that caused the child process to stop its execution (only meaningful if <code>stopped</code> is <b><code>TRUE</code></b>).
	 * @link https://php.net/manual/en/function.proc-get-status.php
	 * @see proc_open()
	 * @since PHP 5, PHP 7
	 */
	function proc_get_status($process): array {}

	/**
	 * Change the priority of the current process
	 * <p><b>proc_nice()</b> changes the priority of the current process by the amount specified in <code>increment</code>. A positive <code>increment</code> will lower the priority of the current process, whereas a negative <code>increment</code> will raise the priority.</p><p><b>proc_nice()</b> is not related to <code>proc_open()</code> and its associated functions in any way.</p>
	 * @param int $increment <p>The new priority value, the value of this may differ on platforms.</p> <p>On Unix, a low value, such as <code>-20</code> means high priority wheras a positive value have a lower priority.</p> <p>For Windows the <code>increment</code> parameter have the following meanings:</p>    Priority class Possible values     High priority  <code>increment</code> <code>&lt; -9</code>    Above normal priority  <code>increment</code> <code>&lt; -4</code>    Normal priority  <code>increment</code> <code>&lt; 5</code> &amp; <code>increment</code> <code>&gt; -5</code>    Below normal priority  <code>increment</code> <code>&gt; 5</code>    Idle priority  <code>increment</code> <code>&gt; 9</code>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If an error occurs, like the user lacks permission to change the priority, an error of level <b><code>E_WARNING</code></b> is also generated.</p>
	 * @link https://php.net/manual/en/function.proc-nice.php
	 * @since PHP 5, PHP 7
	 */
	function proc_nice(int $increment): bool {}

	/**
	 * Execute a command and open file pointers for input/output
	 * <p><b>proc_open()</b> is similar to <code>popen()</code> but provides a much greater degree of control over the program execution.</p>
	 * @param mixed $cmd <p>The commandline to execute as <code>string</code>. Special characters have to be properly escaped, and proper quoting has to be applied.</p> <p><b>Note</b>:  On <i>Windows</i>, unless <code>bypass_shell</code> is set to <b><code>TRUE</code></b> in <code>other_options</code>, the <code>cmd</code> is passed to <b>cmd.exe</b> (actually, <code>%ComSpec%</code>) with the <code>/c</code> flag as <i>unquoted</i> string (i.e. exactly as has been given to <b>proc_open()</b>). This can cause <b>cmd.exe</b> to remove enclosing quotes from <code>cmd</code> (for details see the <b>cmd.exe</b> documentation), resulting in unexpected, and potentially even dangerous behavior, because <b>cmd.exe</b> error messages may contain (parts of) the passed <code>cmd</code> (see example below). </p> <p>As of PHP 7.4.0, <code>cmd</code> may be passed as <code>array</code> of command parameters. In this case the process will be opened directly (without going through a shell) and PHP will take care of any necessary argument escaping.</p> <p><b>Note</b>:</p><p>On Windows, the argument escaping of the <code>array</code> elements assumes that the command line parsing of the executed command is compatible with the parsing of command line arguments done by the VC runtime.</p>
	 * @param array $descriptorspec <p>An indexed array where the key represents the descriptor number and the value represents how PHP will pass that descriptor to the child process. 0 is stdin, 1 is stdout, while 2 is stderr.</p> <p>Each element can be:</p><ul> <li>An array describing the pipe to pass to the process. The first element is the descriptor type and the second element is an option for the given type. Valid types are <code>pipe</code> (the second element is either <code>r</code> to pass the read end of the pipe to the process, or <code>w</code> to pass the write end) and <code>file</code> (the second element is a filename). </li> <li> A stream resource representing a real file descriptor (e.g. opened file, a socket, <b><code>STDIN</code></b>). </li> </ul> <p>The file descriptor numbers are not limited to 0, 1 and 2 - you may specify any valid file descriptor number and it will be passed to the child process. This allows your script to interoperate with other scripts that run as "co-processes". In particular, this is useful for passing passphrases to programs like PGP, GPG and openssl in a more secure manner. It is also useful for reading status information provided by those programs on auxiliary file descriptors.</p>
	 * @param array $pipes <p>Will be set to an indexed array of file pointers that correspond to PHP's end of any pipes that are created.</p>
	 * @param string $cwd <p>The initial working dir for the command. This must be an <i>absolute</i> directory path, or <b><code>NULL</code></b> if you want to use the default value (the working dir of the current PHP process)</p>
	 * @param array $env <p>An array with the environment variables for the command that will be run, or <b><code>NULL</code></b> to use the same environment as the current PHP process</p>
	 * @param array $other_options <p>Allows you to specify additional options. Currently supported options include:</p><ul> <li> <code>suppress_errors</code> (windows only): suppresses errors generated by this function when it's set to <b><code>TRUE</code></b> </li> <li> <code>bypass_shell</code> (windows only): bypass <code>cmd.exe</code> shell when set to <b><code>TRUE</code></b> </li> <li> <code>blocking_pipes</code> (windows only): force blocking pipes when set to <b><code>TRUE</code></b> </li> <li> <code>create_process_group</code> (windows only): allow the child process to handle <code>CTRL</code> events when set to <b><code>TRUE</code></b> </li> <li> <code>create_new_console</code> (windows only): the new process has a new console, instead of inheriting its parent's console </li> </ul>
	 * @return resource <p>Returns a resource representing the process, which should be freed using <code>proc_close()</code> when you are finished with it. On failure returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.proc-open.php
	 * @see popen(), exec(), system(), passthru(), stream_select()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function proc_open($cmd, array $descriptorspec, array &$pipes, string $cwd = NULL, array $env = NULL, array $other_options = NULL) {}

	/**
	 * Kills a process opened by proc_open
	 * <p>Signals a <code>process</code> (created using <code>proc_open()</code>) that it should terminate. <b>proc_terminate()</b> returns immediately and does not wait for the process to terminate.</p><p><b>proc_terminate()</b> allows you terminate the process and continue with other tasks. You may poll the process (to see if it has stopped yet) by using the <code>proc_get_status()</code> function.</p>
	 * @param resource $process <p>The <code>proc_open()</code> <code>resource</code> that will be closed.</p>
	 * @param int $signal <p>This optional parameter is only useful on POSIX operating systems; you may specify a signal to send to the process using the <code>kill(2)</code> system call. The default is <code>SIGTERM</code>.</p>
	 * @return bool <p>Returns the termination status of the process that was run.</p>
	 * @link https://php.net/manual/en/function.proc-terminate.php
	 * @see proc_open(), proc_close(), proc_get_status()
	 * @since PHP 5, PHP 7
	 */
	function proc_terminate($process, int $signal = 15): bool {}

	/**
	 * Execute command via shell and return the complete output as a string
	 * <p>This function is identical to the backtick operator.</p><p><b>Note</b>:</p><p>On Windows, the underlying pipe is opened in text mode which can cause the function to fail for binary output. Consider to use <code>popen()</code> instead for such cases.</p>
	 * @param string $cmd <p>The command that will be executed.</p>
	 * @return string <p>The output from the executed command or <b><code>NULL</code></b> if an error occurred or the command produces no output.</p><p><b>Note</b>:</p><p>This function can return <b><code>NULL</code></b> both when an error occurs or the program produces no output. It is not possible to detect execution failures using this function. <code>exec()</code> should be used when access to the program exit code is required.</p>
	 * @link https://php.net/manual/en/function.shell-exec.php
	 * @see exec(), escapeshellcmd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shell_exec(string $cmd): string {}

	/**
	 * Execute an external program and display the output
	 * <p><b>system()</b> is just like the C version of the function in that it executes the given <code>command</code> and outputs the result.</p><p>The <b>system()</b> call also tries to automatically flush the web server's output buffer after each line of output if PHP is running as a server module.</p><p>If you need to execute a command and have all the data from the command passed directly back without any interference, use the <code>passthru()</code> function.</p>
	 * @param string $command <p>The command that will be executed.</p>
	 * @param int $return_var <p>If the <code>return_var</code> argument is present, then the return status of the executed command will be written to this variable.</p>
	 * @return string <p>Returns the last line of the command output on success, and <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.system.php
	 * @see exec(), passthru(), popen(), escapeshellcmd(), pcntl_exec()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function system(string $command, int &$return_var = NULL): string {}

}
