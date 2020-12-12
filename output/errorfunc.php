<?php



namespace {

	/**
	 * Generates a backtrace
	 * <p><b>debug_backtrace()</b> generates a PHP backtrace.</p>
	 * @param int $options <p>As of 5.3.6, this parameter is a bitmask for the following options:</p> <b><b>debug_backtrace()</b> options</b>   DEBUG_BACKTRACE_PROVIDE_OBJECT  Whether or not to populate the "object" index.    DEBUG_BACKTRACE_IGNORE_ARGS  Whether or not to omit the "args" index, and thus all the function/method arguments, to save memory.     Before 5.3.6, the only values recognized are <b><code>TRUE</code></b> or <b><code>FALSE</code></b>, which are the same as setting or not setting the <b><code>DEBUG_BACKTRACE_PROVIDE_OBJECT</code></b> option respectively.
	 * @param int $limit <p>As of 5.4.0, this parameter can be used to limit the number of stack frames returned. By default (<code>limit</code>=<code>0</code>) it returns all stack frames.</p>
	 * @return array <p>Returns an array of associative <code>array</code>s. The possible returned elements are as follows:</p> <b>Possible returned elements from <b>debug_backtrace()</b></b>   Name Type Description     function <code>string</code>  The current function name. See also __FUNCTION__.    line <code>int</code>  The current line number. See also __LINE__.    file <code>string</code>  The current file name. See also __FILE__.    class <code>string</code>  The current class name. See also __CLASS__    object <code>object</code>  The current object.    type <code>string</code>  The current call type. If a method call, "-&gt;" is returned. If a static method call, "::" is returned. If a function call, nothing is returned.    args <code>array</code>  If inside a function, this lists the functions arguments. If inside an included file, this lists the included file name(s).
	 * @link https://php.net/manual/en/function.debug-backtrace.php
	 * @see trigger_error(), debug_print_backtrace()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array {}

	/**
	 * Prints a backtrace
	 * <p><b>debug_print_backtrace()</b> prints a PHP backtrace. It prints the function calls, included/required files and <code>eval()</code>ed stuff.</p>
	 * @param int $options <p>As of 5.3.6, this parameter is a bitmask for the following options:</p> <b><b>debug_print_backtrace()</b> options</b>   DEBUG_BACKTRACE_IGNORE_ARGS  Whether or not to omit the "args" index, and thus all the function/method arguments, to save memory.
	 * @param int $limit <p>As of 5.4.0, this parameter can be used to limit the number of stack frames printed. By default (<code>limit</code>=<code>0</code>) it prints all stack frames.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.debug-print-backtrace.php
	 * @see debug_backtrace()
	 * @since PHP 5, PHP 7
	 */
	function debug_print_backtrace(int $options = 0, int $limit = 0): void {}

	/**
	 * Clear the most recent error
	 * @return void <p>Clears the most recent errors, making it unable to be retrieved with <code>error_get_last()</code>.</p>
	 * @link https://php.net/manual/en/function.error-clear-last.php
	 * @since PHP 7
	 */
	function error_clear_last(): void {}

	/**
	 * Get the last occurred error
	 * <p>Gets information about the last error that occurred.</p>
	 * @return array <p>Returns an associative array describing the last error with keys "type", "message", "file" and "line". If the error has been caused by a PHP internal function then the "message" begins with its name. Returns <b><code>NULL</code></b> if there hasn't been an error yet.</p>
	 * @link https://php.net/manual/en/function.error-get-last.php
	 * @see error_clear_last()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function error_get_last(): array {}

	/**
	 * Send an error message to the defined error handling routines
	 * <p>Sends an error message to the web server's error log or to a file.</p>
	 * @param string $message <p>The error message that should be logged.</p>
	 * @param int $message_type <p>Says where the error should go. The possible message types are as follows:</p> <p></p> <b><b>error_log()</b> log types</b>   0  <code>message</code> is sent to PHP's system logger, using the Operating System's system logging mechanism or a file, depending on what the error_log configuration directive is set to. This is the default option.    1  <code>message</code> is sent by email to the address in the <code>destination</code> parameter. This is the only message type where the fourth parameter, <code>extra_headers</code> is used.    2  No longer an option.    3  <code>message</code> is appended to the file <code>destination</code>. A newline is not automatically added to the end of the <code>message</code> string.    4  <code>message</code> is sent directly to the SAPI logging handler.
	 * @param string $destination <p>The destination. Its meaning depends on the <code>message_type</code> parameter as described above.</p>
	 * @param string $extra_headers <p>The extra headers. It's used when the <code>message_type</code> parameter is set to <code>1</code>. This message type uses the same internal function as <code>mail()</code> does.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.error-log.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function error_log(string $message, int $message_type = 0, string $destination = NULL, string $extra_headers = NULL): bool {}

	/**
	 * Sets which PHP errors are reported
	 * <p>The <b>error_reporting()</b> function sets the error_reporting directive at runtime. PHP has many levels of errors, using this function sets that level for the duration (runtime) of your script. If the optional <code>level</code> is not set, <b>error_reporting()</b> will just return the current error reporting level.</p>
	 * @param int $level <p>The new error_reporting level. It takes on either a bitmask, or named constants. Using named constants is strongly encouraged to ensure compatibility for future versions. As error levels are added, the range of integers increases, so older integer-based error levels will not always behave as expected.</p> <p>The available error level constants and the actual meanings of these error levels are described in the predefined constants.</p>
	 * @return int <p>Returns the old error_reporting level or the current level if no <code>level</code> parameter is given.</p>
	 * @link https://php.net/manual/en/function.error-reporting.php
	 * @see ini_set()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function error_reporting(int $level = NULL): int {}

	/**
	 * Restores the previous error handler function
	 * <p>Used after changing the error handler function using <code>set_error_handler()</code>, to revert to the previous error handler (which could be the built-in or a user defined function).</p>
	 * @return bool <p>This function always returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.restore-error-handler.php
	 * @see error_reporting(), set_error_handler(), restore_exception_handler(), trigger_error()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function restore_error_handler(): bool {}

	/**
	 * Restores the previously defined exception handler function
	 * <p>Used after changing the exception handler function using <code>set_exception_handler()</code>, to revert to the previous exception handler (which could be the built-in or a user defined function).</p>
	 * @return bool <p>This function always returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.restore-exception-handler.php
	 * @see set_exception_handler(), set_error_handler(), restore_error_handler(), error_reporting()
	 * @since PHP 5, PHP 7
	 */
	function restore_exception_handler(): bool {}

	/**
	 * Sets a user-defined error handler function
	 * <p>Sets a user function (<code>error_handler</code>) to handle errors in a script.</p><p>This function can be used for defining your own way of handling errors during runtime, for example in applications in which you need to do cleanup of data/files when a critical error happens, or when you need to trigger an error under certain conditions (using <code>trigger_error()</code>).</p><p>It is important to remember that the standard PHP error handler is completely bypassed for the error types specified by <code>error_types</code> unless the callback function returns <b><code>FALSE</code></b>. <code>error_reporting()</code> settings will have no effect and your error handler will be called regardless - however you are still able to read the current value of error_reporting and act appropriately. Of particular note is that this value will be 0 if the statement that caused the error was prepended by the @ error-control operator.</p><p>Also note that it is your responsibility to <code>die()</code> if necessary. If the error-handler function returns, script execution will continue with the next statement after the one that caused an error.</p><p>The following error types cannot be handled with a user defined function: <b><code>E_ERROR</code></b>, <b><code>E_PARSE</code></b>, <b><code>E_CORE_ERROR</code></b>, <b><code>E_CORE_WARNING</code></b>, <b><code>E_COMPILE_ERROR</code></b>, <b><code>E_COMPILE_WARNING</code></b> independent of where they were raised, and most of <b><code>E_STRICT</code></b> raised in the file where <b>set_error_handler()</b> is called.</p><p>If errors occur before the script is executed (e.g. on file uploads) the custom error handler cannot be called since it is not registered at that time.</p>
	 * @param callable $error_handler <p>A callback with the following signature. <b><code>NULL</code></b> may be passed instead, to reset this handler to its default state. Instead of a function name, an array containing an object reference and a method name can also be supplied.</p> <p></p> handler ( <code>int</code> <code>$errno</code> , <code>string</code> <code>$errstr</code> [, <code>string</code> <code>$errfile</code> [, <code>int</code> <code>$errline</code> [, <code>array</code> <code>$errcontext</code> ]]] ) : <code>bool</code>   <code>errno</code>   The first parameter, <code>errno</code>, contains the level of the error raised, as an integer.    <code>errstr</code>   The second parameter, <code>errstr</code>, contains the error message, as a string.    <code>errfile</code>   The third parameter is optional, <code>errfile</code>, which contains the filename that the error was raised in, as a string.    <code>errline</code>   The fourth parameter is optional, <code>errline</code>, which contains the line number the error was raised at, as an integer.    <code>errcontext</code>   The fifth parameter is optional, <code>errcontext</code>, which is an array that points to the active symbol table at the point the error occurred. In other words, <code>errcontext</code> will contain an array of every variable that existed in the scope the error was triggered in. User error handler must not modify error context.  <p><b>Warning</b></p> <p>This parameter has been <i>DEPRECATED</i> as of PHP 7.2.0. Relying on it is highly discouraged.</p>    <p>If the function returns <b><code>FALSE</code></b> then the normal error handler continues.</p>
	 * @param int $error_types <p>Can be used to mask the triggering of the <code>error_handler</code> function just like the error_reporting ini setting controls which errors are shown. Without this mask set the <code>error_handler</code> will be called for every error regardless to the setting of the error_reporting setting.</p>
	 * @return mixed <p>Returns a string containing the previously defined error handler (if any). If the built-in error handler is used <b><code>NULL</code></b> is returned. <b><code>NULL</code></b> is also returned in case of an error such as an invalid callback. If the previous error handler was a class method, this function will return an indexed array with the class and the method name.</p>
	 * @link https://php.net/manual/en/function.set-error-handler.php
	 * @see error_reporting(), restore_error_handler(), trigger_error()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function set_error_handler(callable $error_handler, int $error_types = E_ALL | E_STRICT): mixed {}

	/**
	 * Sets a user-defined exception handler function
	 * <p>Sets the default exception handler if an exception is not caught within a try/catch block. Execution will stop after the <code>exception_handler</code> is called.</p>
	 * @param callable $exception_handler <p>Name of the function to be called when an uncaught exception occurs. This handler function needs to accept one parameter, which will be the exception object that was thrown. This is the handler signature before PHP 7:</p> <p></p> handler ( <code>Exception</code> <code>$ex</code> ) : void <p>Since PHP 7, most errors are reported by throwing Error exceptions, which will be caught by the handler as well. Both Error and Exception implements the Throwable interface. This is the handler signature since PHP 7:</p> <p></p> handler ( <code>Throwable</code> <code>$ex</code> ) : void <p><b><code>NULL</code></b> may be passed instead, to reset this handler to its default state.</p> <b>Caution</b> <p>Note that providing an explicit Exception type hint for the <code>ex</code> parameter in your callback will cause issues with the changed exception hierarchy in PHP 7.</p>
	 * @return callable <p>Returns the name of the previously defined exception handler, or <b><code>NULL</code></b> on error. If no previous handler was defined, <b><code>NULL</code></b> is also returned.</p>
	 * @link https://php.net/manual/en/function.set-exception-handler.php
	 * @see restore_exception_handler(), restore_error_handler(), error_reporting()
	 * @since PHP 5, PHP 7
	 */
	function set_exception_handler(callable $exception_handler): callable {}

	/**
	 * Generates a user-level error/warning/notice message
	 * <p>Used to trigger a user error condition, it can be used in conjunction with the built-in error handler, or with a user defined function that has been set as the new error handler (<code>set_error_handler()</code>).</p><p>This function is useful when you need to generate a particular response to an exception at runtime.</p>
	 * @param string $error_msg <p>The designated error message for this error. It's limited to 1024 bytes in length. Any additional characters beyond 1024 bytes will be truncated.</p>
	 * @param int $error_type <p>The designated error type for this error. It only works with the E_USER family of constants, and will default to <b><code>E_USER_NOTICE</code></b>.</p>
	 * @return bool <p>This function returns <b><code>FALSE</code></b> if wrong <code>error_type</code> is specified, <b><code>TRUE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.trigger-error.php
	 * @see error_reporting(), set_error_handler(), restore_error_handler()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function trigger_error(string $error_msg, int $error_type = E_USER_NOTICE): bool {}

	/**
	 * Alias of trigger_error()
	 * <p>This function is an alias of: <code>trigger_error()</code>.</p>
	 * @param string $error_msg <p>The designated error message for this error. It's limited to 1024 bytes in length. Any additional characters beyond 1024 bytes will be truncated.</p>
	 * @param int $error_type <p>The designated error type for this error. It only works with the E_USER family of constants, and will default to <b><code>E_USER_NOTICE</code></b>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.user-error.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function user_error(string $error_msg, int $error_type = E_USER_NOTICE): bool {}

	/**
	 * Fatal run-time errors. These indicate errors that can not be recovered from, such as a memory allocation problem. Execution of the script is halted.
	 */
	define('1', null);

	/**
	 * User-generated notice message. This is like an <b><code>E_NOTICE</code></b>, except it is generated in PHP code by using the PHP function <code>trigger_error()</code>.
	 */
	define('1024', null);

	/**
	 * Compile-time warnings (non-fatal errors). This is like an <b><code>E_WARNING</code></b>, except it is generated by the Zend Scripting Engine.
	 */
	define('128', null);

	/**
	 * Fatal errors that occur during PHP's initial startup. This is like an <b><code>E_ERROR</code></b>, except it is generated by the core of PHP.
	 */
	define('16', null);

	/**
	 * As of PHP 5.3.0
	 */
	define('16384', null);

	/**
	 * Run-time warnings (non-fatal errors). Execution of the script is not halted.
	 */
	define('2', null);

	/**
	 * Not included in <b><code>E_ALL</code></b> prior to PHP 5.4.0
	 */
	define('2048', null);

	/**
	 * User-generated error message. This is like an <b><code>E_ERROR</code></b>, except it is generated in PHP code by using the PHP function <code>trigger_error()</code>.
	 */
	define('256', null);

	/**
	 * Warnings (non-fatal errors) that occur during PHP's initial startup. This is like an <b><code>E_WARNING</code></b>, except it is generated by the core of PHP.
	 */
	define('32', null);

	/**
	 * 32767 in PHP 5.4.x, 30719 in PHP 5.3.x, 6143 in PHP 5.2.x, 2047 previously
	 */
	define('32767', null);

	/**
	 * Compile-time parse errors. Parse errors should only be generated by the parser.
	 */
	define('4', null);

	/**
	 * As of PHP 5.2.0
	 */
	define('4096', null);

	/**
	 * User-generated warning message. This is like an <b><code>E_WARNING</code></b>, except it is generated in PHP code by using the PHP function <code>trigger_error()</code>.
	 */
	define('512', null);

	/**
	 * Fatal compile-time errors. This is like an <b><code>E_ERROR</code></b>, except it is generated by the Zend Scripting Engine.
	 */
	define('64', null);

	/**
	 * Run-time notices. Indicate that the script encountered something that could indicate an error, but could also happen in the normal course of running a script.
	 */
	define('8', null);

	/**
	 * As of PHP 5.3.0
	 */
	define('8192', null);

}
