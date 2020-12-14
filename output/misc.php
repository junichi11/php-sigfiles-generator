<?php



namespace {

	/**
	 * Check whether client disconnected
	 * <p>Checks whether the client disconnected.</p>
	 * @return int <p>Returns 1 if client disconnected, 0 otherwise.</p>
	 * @link https://php.net/manual/en/function.connection-aborted.php
	 * @see connection_status(), ignore_user_abort()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function connection_aborted(): int {}

	/**
	 * Returns connection status bitfield
	 * <p>Gets the connection status bitfield.</p>
	 * @return int <p>Returns the connection status bitfield, which can be used against the <code>CONNECTION_XXX</code> constants to determine the connection status.</p>
	 * @link https://php.net/manual/en/function.connection-status.php
	 * @see connection_aborted(), ignore_user_abort()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function connection_status(): int {}

	/**
	 * Returns the value of a constant
	 * <p>Return the value of the constant indicated by <code>name</code>.</p><p><b>constant()</b> is useful if you need to retrieve the value of a constant, but do not know its name. I.e. it is stored in a variable or returned by a function.</p><p>This function works also with class constants.</p>
	 * @param string $name <p>The constant name.</p>
	 * @return mixed <p>Returns the value of the constant, or <b><code>NULL</code></b> if the constant is not defined.</p>
	 * @link https://php.net/manual/en/function.constant.php
	 * @see define(), defined()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function constant(string $name): mixed {}

	/**
	 * Defines a named constant
	 * <p>Defines a named constant at runtime.</p>
	 * @param string $name <p>The name of the constant.</p> <p><b>Note</b>:</p><p>It is possible to <b>define()</b> constants with reserved or even invalid names, whose value can (only) be retrieved with <code>constant()</code>. However, doing so is not recommended.</p>
	 * @param mixed $value <p>The value of the constant. In PHP 5, <code>value</code> must be a scalar value (<code>int</code>, <code>float</code>, <code>string</code>, <code>bool</code>, or <b><code>NULL</code></b>). In PHP 7, <code>array</code> values are also accepted.</p> <p><b>Warning</b></p> <p>While it is possible to define <code>resource</code> constants, it is not recommended and may cause unpredictable behavior.</p>
	 * @param bool $case_insensitive <p>If set to <b><code>TRUE</code></b>, the constant will be defined case-insensitive. The default behavior is case-sensitive; i.e. <code>CONSTANT</code> and <code>Constant</code> represent different values.</p> <p><b>Warning</b></p> <p>Defining case-insensitive constants is deprecated as of PHP 7.3.0.</p>  <p><b>Note</b>:</p><p>Case-insensitive constants are stored as lower-case.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.define.php
	 * @see defined(), constant()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function define(string $name, mixed $value, bool $case_insensitive = FALSE): bool {}

	/**
	 * Checks whether a given named constant exists
	 * <p>Checks whether the given constant exists and is defined.</p><p><b>Note</b>:</p><p>If you want to see if a variable exists, use <code>isset()</code> as <b>defined()</b> only applies to constants. If you want to see if a function exists, use <code>function_exists()</code>.</p>
	 * @param string $name <p>The constant name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the named constant given by <code>name</code> has been defined, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.defined.php
	 * @see define(), constant(), get_defined_constants(), function_exists()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function defined(string $name): bool {}

	/**
	 * Tells what the user's browser is capable of
	 * <p>Attempts to determine the capabilities of the user's browser, by looking up the browser's information in the browscap.ini file.</p>
	 * @param string $user_agent <p>The User Agent to be analyzed. By default, the value of HTTP User-Agent header is used; however, you can alter this (i.e., look up another browser's info) by passing this parameter.</p> <p>You can bypass this parameter with a <b><code>NULL</code></b> value.</p>
	 * @param bool $return_array <p>If set to <b><code>TRUE</code></b>, this function will return an <code>array</code> instead of an <code>object</code>.</p>
	 * @return mixed <p>The information is returned in an object or an array which will contain various data elements representing, for instance, the browser's major and minor version numbers and ID string; <b><code>TRUE</code></b>/<b><code>FALSE</code></b> values for features such as frames, JavaScript, and cookies; and so forth.</p><p>The <code>cookies</code> value simply means that the browser itself is capable of accepting cookies and does not mean the user has enabled the browser to accept cookies or not. The only way to test if cookies are accepted is to set one with <code>setcookie()</code>, reload, and check for the value.</p>
	 * @link https://php.net/manual/en/function.get-browser.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_browser(string $user_agent = NULL, bool $return_array = FALSE): mixed {}

	/**
	 * Syntax highlighting of a file
	 * <p>Prints out or returns a syntax highlighted version of the code contained in <code>filename</code> using the colors defined in the built-in syntax highlighter for PHP.</p><p>Many servers are configured to automatically highlight files with a <i>phps</i> extension. For example, example.phps when viewed will show the syntax highlighted source of the file. To enable this, add this line to the httpd.conf:</p>
	 * @param string $filename <p>Path to the PHP file to be highlighted.</p>
	 * @param bool $return <p>Set this parameter to <b><code>TRUE</code></b> to make this function return the highlighted code.</p>
	 * @return mixed <p>If <code>return</code> is set to <b><code>TRUE</code></b>, returns the highlighted code as a string instead of printing it out. Otherwise, it will return <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.highlight-file.php
	 * @see highlight_string()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function highlight_file(string $filename, bool $return = FALSE): mixed {}

	/**
	 * Syntax highlighting of a string
	 * <p>Outputs or returns html markup for a syntax highlighted version of the given PHP code using the colors defined in the built-in syntax highlighter for PHP.</p>
	 * @param string $str <p>The PHP code to be highlighted. This should include the opening tag.</p>
	 * @param bool $return <p>Set this parameter to <b><code>TRUE</code></b> to make this function return the highlighted code.</p>
	 * @return mixed <p>If <code>return</code> is set to <b><code>TRUE</code></b>, returns the highlighted code as a string instead of printing it out. Otherwise, it will return <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.highlight-string.php
	 * @see highlight_file()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function highlight_string(string $str, bool $return = FALSE): mixed {}

	/**
	 * Get the system's high resolution time
	 * <p>Returns the system's high resolution time, counted from an arbitrary point in time. The delivered timestamp is monotonic and can not be adjusted.</p>
	 * @param bool $get_as_number <p>Whether the high resolution time should be returned as <code>array</code> or number.</p>
	 * @return mixed <p>Returns an array of integers in the form [seconds, nanoseconds], if the parameter <code>get_as_number</code> is false. Otherwise the nanoseconds are returned as <code>int</code> (64bit platforms) or <code>float</code> (32bit platforms).</p>
	 * @link https://php.net/manual/en/function.hrtime.php
	 * @see microtime()
	 * @since PHP 7 >= 7.3.0
	 */
	function hrtime(bool $get_as_number = FALSE): mixed {}

	/**
	 * Set whether a client disconnect should abort script execution
	 * <p>Sets whether a client disconnect should cause a script to be aborted.</p><p>When running PHP as a command line script, and the script's tty goes away without the script being terminated then the script will die the next time it tries to write anything, unless <code>value</code> is set to <b><code>TRUE</code></b></p>
	 * @param bool $value <p>If set, this function will set the ignore_user_abort ini setting to the given <code>value</code>. If not, this function will only return the previous setting without changing it.</p>
	 * @return int <p>Returns the previous setting, as an integer.</p>
	 * @link https://php.net/manual/en/function.ignore-user-abort.php
	 * @see connection_aborted(), connection_status()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ignore_user_abort(bool $value = NULL): int {}

	/**
	 * Pack data into binary string
	 * <p>Pack given arguments into a binary string according to <code>format</code>.</p><p>The idea for this function was taken from Perl and all formatting codes work the same as in Perl. However, there are some formatting codes that are missing such as Perl's "u" format code.</p><p>Note that the distinction between signed and unsigned values only affects the function <code>unpack()</code>, where as function <b>pack()</b> gives the same result for signed and unsigned format codes.</p>
	 * @param string $format <p>The <code>format</code> string consists of format codes followed by an optional repeater argument. The repeater argument can be either an integer value or <code>&#42;</code> for repeating to the end of the input data. For a, A, h, H the repeat count specifies how many characters of one data argument are taken, for @ it is the absolute position where to put the next data, for everything else the repeat count specifies how many data arguments are consumed and packed into the resulting binary string.</p> <p>Currently implemented formats are:</p> <b><b>pack()</b> format characters</b>   Code Description     a NUL-padded string   A SPACE-padded string  h Hex string, low nibble first  H Hex string, high nibble first csigned char  C unsigned char  s signed short (always 16 bit, machine byte order)   S unsigned short (always 16 bit, machine byte order)   n unsigned short (always 16 bit, big endian byte order)   v unsigned short (always 16 bit, little endian byte order)   i signed integer (machine dependent size and byte order)   I unsigned integer (machine dependent size and byte order)   l signed long (always 32 bit, machine byte order)   L unsigned long (always 32 bit, machine byte order)   N unsigned long (always 32 bit, big endian byte order)   V unsigned long (always 32 bit, little endian byte order)   q signed long long (always 64 bit, machine byte order)   Q unsigned long long (always 64 bit, machine byte order)   J unsigned long long (always 64 bit, big endian byte order)   P unsigned long long (always 64 bit, little endian byte order)   f float (machine dependent size and representation)   g float (machine dependent size, little endian byte order)   G float (machine dependent size, big endian byte order)   d double (machine dependent size and representation)   e double (machine dependent size, little endian byte order)   E double (machine dependent size, big endian byte order)   x NUL byte   X Back up one byte   Z NUL-padded string (new in PHP 5.5)   @ NUL-fill to absolute position
	 * @param mixed $values
	 * @return string|false <p>Returns a binary string containing data, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.pack.php
	 * @see unpack()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pack(string $format, mixed ...$values): string|false {}

	/**
	 * Return source with stripped comments and whitespace
	 * <p>Returns the PHP source code in <code>filename</code> with PHP comments and whitespace removed. This may be useful for determining the amount of actual code in your scripts compared with the amount of comments. This is similar to using <b>php -w</b> from the commandline.</p>
	 * @param string $filename <p>Path to the PHP file.</p>
	 * @return string <p>The stripped source code will be returned on success, or an empty string on failure.</p><p><b>Note</b>:</p><p>This function respects the value of the short_open_tag ini directive.</p> <p><b>Note</b>:</p><p>This function works as described as of PHP 5.0.1. Before this it would only return an empty string. For more information on this bug and its prior behavior, see bug report #29606.</p>
	 * @link https://php.net/manual/en/function.php-strip-whitespace.php
	 * @since PHP 5, PHP 7
	 */
	function php_strip_whitespace(string $filename): string {}

	/**
	 * Convert string from one codepage to another
	 * <p>Convert string from one codepage to another.</p>
	 * @param int|string $in_codepage <p>The codepage of the <code>subject</code> string. Either the codepage name or identifier.</p>
	 * @param int|string $out_codepage <p>The codepage to convert the <code>subject</code> string to. Either the codepage name or identifier.</p>
	 * @param string $subject <p>The string to convert.</p>
	 * @return string <p>The <code>subject</code> string converted to <code>out_codepage</code>, or <b><code>NULL</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-cp-conv.php
	 * @see sapi_windows_cp_get(), iconv()
	 * @since PHP 7 >= 7.1.0
	 */
	function sapi_windows_cp_conv(int|string $in_codepage, int|string $out_codepage, string $subject): string {}

	/**
	 * Get current codepage
	 * <p>Gets the current codepage.</p>
	 * @param string $kind <p>The kind of operating system codepage to get, either <code>'ansi'</code> or <code>'oem'</code>. Any other value refers to the current codepage of the process.</p>
	 * @return int <p>If <code>kind</code> is <code>'ansi'</code>, the current ANSI code page of the operating system is returned. If <code>kind</code> is <code>'oem'</code>, the current OEM code page of the operating system is returned. Otherwise, the current codepage of the process is returned.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-cp-get.php
	 * @see sapi_windows_cp_set()
	 * @since PHP 7 >= 7.1.0
	 */
	function sapi_windows_cp_get(string $kind = ""): int {}

	/**
	 * Indicates whether the codepage is UTF-8 compatible
	 * <p>Indicates whether the codepage of the current process is UTF-8 compatible.</p>
	 * @return bool <p>Returns whether the codepage of the current process is UTF-8 compatible.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-cp-is-utf8.php
	 * @see sapi_windows_cp_get()
	 * @since PHP 7 >= 7.1.0
	 */
	function sapi_windows_cp_is_utf8(): bool {}

	/**
	 * Set process codepage
	 * <p>Set the codepage of the current process.</p>
	 * @param int $cp <p>A codepage identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-cp-set.php
	 * @see sapi_windows_cp_get()
	 * @since PHP 7 >= 7.1.0
	 */
	function sapi_windows_cp_set(int $cp): bool {}

	/**
	 * Send a CTRL event to another process
	 * <p>Sends a CTRL event to another process in the same process group.</p>
	 * @param int $event <p>The <code>CTRL</code> even to send; either <b><code>PHP_WINDOWS_EVENT_CTRL_C</code></b> or <b><code>PHP_WINDOWS_EVENT_CTRL_BREAK</code></b>.</p>
	 * @param int $pid <p>The ID of the process to which to send the event to. If <code>0</code> is given, the event is sent to all processes of the process group.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-generate-ctrl-event.php
	 * @see proc_open(), sapi_windows_set_ctrl_handler()
	 * @since PHP 7 >= 7.4.0
	 */
	function sapi_windows_generate_ctrl_event(int $event, int $pid = 0): bool {}

	/**
	 * Set or remove a CTRL event handler
	 * <p>Sets or removes a <code>CTRL</code> event handler, which allows Windows CLI processes to intercept or ignore <code>CTRL+C</code> and <code>CTRL+BREAK</code> events. Note that in multithreaded environments, this is only possible when called from the main thread.</p>
	 * @param callable $callable <p>A callback function to set or remove. If set, this function will be called whenever a <code>CTRL+C</code> or <code>CTRL+BREAK</code> event occurs. The function is supposed to have the following signature:</p> <b>handler</b> ( <code>int</code> <code>$event</code> ) : void   <code>event</code>   The <code>CTRL</code> event which has been received; either <b><code>PHP_WINDOWS_EVENT_CTRL_C</code></b> or <b><code>PHP_WINDOWS_EVENT_CTRL_BREAK</code></b>.    Setting a <b><code>NULL</code></b> <code>callable</code> causes the process to ignore <code>CTRL+C</code> events, but not <code>CTRL+BREAK</code> events.
	 * @param bool $add <p>If <b><code>TRUE</code></b>, the handler is set. If <b><code>FALSE</code></b>, the handler is removed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-set-ctrl-handler.php
	 * @see sapi_windows_generate_ctrl_event()
	 * @since PHP 7 >= 7.4.0
	 */
	function sapi_windows_set_ctrl_handler(callable $callable, bool $add = TRUE): bool {}

	/**
	 * Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
	 * <p>If <code>enable</code> is omitted, the function returns <b><code>TRUE</code></b> if the stream <code>stream</code> has VT100 control codes enabled, <b><code>FALSE</code></b> otherwise.</p><p>If <code>enable</code> is specified, the function will try to enable or disable the VT100 features of the stream <code>stream</code>. If the feature has been successfully enabled (or disabled), the function will return <b><code>TRUE</code></b>, or <b><code>FALSE</code></b> otherwise.</p><p>At startup, PHP tries to enable the VT100 feature of the <b><code>STDOUT</code></b>/<b><code>STDERR</code></b> streams. By the way, if those streams are redirected to a file, the VT100 features may not be enabled.</p><p>If VT100 support is enabled, it is possible to use control sequences as they are known from the VT100 terminal. They allow the modification of the terminal's output. On Windows these sequences are called Console Virtual Terminal Sequences.</p><p>This function uses the <b><code>ENABLE_VIRTUAL_TERMINAL_PROCESSING</code></b> flag implemented in the Windows 10 API, so the VT100 feature may not be available on older Windows versions.</p>
	 * @param resource $stream <p>The stream on which the function will operate.</p>
	 * @param bool $enable <p>If specified, the VT100 feature will be enabled (if <b><code>TRUE</code></b>) or disabled (if <b><code>FALSE</code></b>).</p>
	 * @return bool <p>If <code>enable</code> is not specified: returns <b><code>TRUE</code></b> if the VT100 feature is enabled, <b><code>FALSE</code></b> otherwise.</p><p>If <code>enable</code> is specified: Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sapi-windows-vt100-support.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sapi_windows_vt100_support($stream, bool $enable = NULL): bool {}

	/**
	 * Alias of highlight_file()
	 * <p>This function is an alias of: <code>highlight_file()</code>.</p>
	 * @param string $filename <p>Path to the PHP file to be highlighted.</p>
	 * @param bool $return <p>Set this parameter to <b><code>TRUE</code></b> to make this function return the highlighted code.</p>
	 * @return mixed
	 * @link https://php.net/manual/en/function.show-source.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function show_source(string $filename, bool $return = FALSE): mixed {}

	/**
	 * Delay execution
	 * <p>Delays the program execution for the given number of <code>seconds</code>.</p>
	 * @param int $seconds <p>Halt time in seconds.</p>
	 * @return int <p>Returns zero on success, or <b><code>FALSE</code></b> on error.</p><p>If the call was interrupted by a signal, <b>sleep()</b> returns a non-zero value. On Windows, this value will always be <code>192</code> (the value of the <b><code>WAIT_IO_COMPLETION</code></b> constant within the Windows API). On other platforms, the return value will be the number of seconds left to sleep.</p>
	 * @link https://php.net/manual/en/function.sleep.php
	 * @see usleep(), time_nanosleep(), time_sleep_until(), set_time_limit()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sleep(int $seconds): int {}

	/**
	 * Gets system load average
	 * <p>Returns three samples representing the average system load (the number of processes in the system run queue) over the last 1, 5 and 15 minutes, respectively.</p>
	 * @return array <p>Returns an <code>array</code> with three samples (last 1, 5 and 15 minutes).</p>
	 * @link https://php.net/manual/en/function.sys-getloadavg.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	function sys_getloadavg(): array {}

	/**
	 * Delay for a number of seconds and nanoseconds
	 * <p>Delays program execution for the given number of <code>seconds</code> and <code>nanoseconds</code>.</p>
	 * @param int $seconds <p>Must be a non-negative integer.</p>
	 * @param int $nanoseconds <p>Must be a non-negative integer less than 1 billion.</p> <p><b>Note</b>:  On Windows, the system may sleep longer that the given number of nanoseconds, depending on the hardware. </p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If the delay was interrupted by a signal, an associative array will be returned with the components:</p><ul> <li>  <code>seconds</code> - number of seconds remaining in the delay  </li> <li>  <code>nanoseconds</code> - number of nanoseconds remaining in the delay  </li> </ul>
	 * @link https://php.net/manual/en/function.time-nanosleep.php
	 * @see sleep(), usleep(), time_sleep_until(), set_time_limit()
	 * @since PHP 5, PHP 7
	 */
	function time_nanosleep(int $seconds, int $nanoseconds): mixed {}

	/**
	 * Make the script sleep until the specified time
	 * <p>Makes the script sleep until the specified <code>timestamp</code>.</p>
	 * @param float $timestamp <p>The timestamp when the script should wake.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.time-sleep-until.php
	 * @see sleep(), usleep(), time_nanosleep(), set_time_limit()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function time_sleep_until(float $timestamp): bool {}

	/**
	 * Generate a unique ID
	 * <p>Gets a prefixed unique identifier based on the current time in microseconds.</p><p>This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using <code>random_int()</code>, <code>random_bytes()</code>, or <code>openssl_random_pseudo_bytes()</code> instead.</p><p>This function does not guarantee uniqueness of return value. Since most systems adjust system clock by NTP or like, system time is changed constantly. Therefore, it is possible that this function does not return unique ID for the process/thread. Use <code>more_entropy</code> to increase likelihood of uniqueness.</p>
	 * @param string $prefix <p>Can be useful, for instance, if you generate identifiers simultaneously on several hosts that might happen to generate the identifier at the same microsecond.</p> <p>With an empty <code>prefix</code>, the returned string will be 13 characters long. If <code>more_entropy</code> is <b><code>TRUE</code></b>, it will be 23 characters.</p>
	 * @param bool $more_entropy <p>If set to <b><code>TRUE</code></b>, <b>uniqid()</b> will add additional entropy (using the combined linear congruential generator) at the end of the return value, which increases the likelihood that the result will be unique.</p>
	 * @return string <p>Returns timestamp based unique identifier as a string.</p><p><b>Warning</b></p> <p>This function tries to create unique identifier, but it does not guarantee 100% uniqueness of return value.</p>
	 * @link https://php.net/manual/en/function.uniqid.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function uniqid(string $prefix = "", bool $more_entropy = FALSE): string {}

	/**
	 * Unpack data from binary string
	 * <p>Unpacks from a binary string into an array according to the given <code>format</code>.</p><p>The unpacked data is stored in an associative array. To accomplish this you have to name the different format codes and separate them by a slash /. If a repeater argument is present, then each of the array keys will have a sequence number behind the given name.</p>
	 * @param string $format <p>See <code>pack()</code> for an explanation of the format codes.</p>
	 * @param string $data <p>The packed data.</p>
	 * @param int $offset <p>The offset to begin unpacking from.</p>
	 * @return array|false <p>Returns an associative array containing unpacked elements of binary string, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.unpack.php
	 * @see pack()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function unpack(string $format, string $data, int $offset = 0): array|false {}

	/**
	 * Delay execution in microseconds
	 * <p>Delays program execution for the given number of microseconds.</p>
	 * @param int $micro_seconds <p>Halt time in microseconds. A microsecond is one millionth of a second.</p> <p><b>Note</b>:  On Windows, the system may sleep longer that the given number of microseconds, depending on the hardware. </p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.usleep.php
	 * @see sleep(), time_nanosleep(), time_sleep_until(), set_time_limit()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function usleep(int $micro_seconds): void {}

	/**
	 * Added in PHP 5.1.
	 */
	define('__COMPILER_HALT_OFFSET__', null);

	define('CONNECTION_ABORTED', 1);

	define('CONNECTION_NORMAL', 0);

	define('CONNECTION_TIMEOUT', 2);

}

namespace HRTime {

	/**
	 * @link https://php.net/manual/en/class.hrtime-performancecounter.php
	 * @since PECL hrtime >= 0.4.3
	 */
	class PerformanceCounter {

		/**
		 * Timer frequency in ticks per second
		 * <p>Returns the timer frequency in ticks per second. This value is constant after the system start on almost any operating system.</p>
		 * @return int <p>Returns <code>int</code> indicating the timer frequency.</p>
		 * @link https://php.net/manual/en/hrtime-performancecounter.getfrequency.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public static function getFrequency(): int {}

		/**
		 * Current ticks from the system
		 * <p>Returns the ticks count.</p>
		 * @return int <p>Returns <code>int</code> indicating the ticks count.</p>
		 * @link https://php.net/manual/en/hrtime-performancecounter.getticks.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicks(): int {}

		/**
		 * Ticks elapsed since the given value
		 * <p>Returns the ticks count elapsed since the given start value.</p>
		 * @param int $start <p>Starting ticks value.</p>
		 * @return int <p>Returns <code>int</code> indicating the ticks count.</p>
		 * @link https://php.net/manual/en/hrtime-performancecounter.gettickssince.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicksSince(int $start): int {}
	}

	/**
	 * @link https://php.net/manual/en/class.hrtime-stopwatch.php
	 * @since PECL hrtime >= 0.4.3
	 */
	class StopWatch extends \HRTime\PerformanceCounter {

		/**
		 * Get elapsed ticks for all intervals
		 * <p>Get elapsed ticks for all the previously closed intervals.</p>
		 * @return int <p>Returns <code>int</code> indicating elapsed ticks.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.getelapsedticks.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getElapsedTicks(): int {}

		/**
		 * Get elapsed time for all intervals
		 * <p>Get elapsed time for all the previously closed intervals.</p>
		 * @param int $unit <p>Time unit represented by a HRTime\Unit constant. Default is HRTime\Unit::SECOND.</p>
		 * @return float <p>Returns <code>float</code> indicating elapsed time.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.getelapsedtime.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getElapsedTime(int $unit = NULL): float {}

		/**
		 * Timer frequency in ticks per second
		 * <p>Returns the timer frequency in ticks per second. This value is constant after the system start on almost any operating system.</p>
		 * @return int <p>Returns <code>int</code> indicating the timer frequency.</p>
		 * @link https://php.net/manual/en/hrtime-performancecounter.getfrequency.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public static function getFrequency(): int {}

		/**
		 * Get elapsed ticks for the last interval
		 * <p>Get elapsed ticks for the previously closed interval.</p>
		 * @return int <p>Returns <code>int</code> indicating elapsed ticks.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.getlastelapsedticks.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getLastElapsedTicks(): int {}

		/**
		 * Get elapsed time for the last interval
		 * <p>Get elapsed time for the previously closed interval.</p>
		 * @param int $unit <p>Time unit represented by a HRTime\Unit constant. Default is HRTime\Unit::SECOND.</p>
		 * @return float <p>Returns <code>float</code> indicating elapsed time.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.getlastelapsedtime.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getLastElapsedTime(int $unit = NULL): float {}

		/**
		 * Current ticks from the system
		 * <p>Returns the ticks count.</p>
		 * @return int <p>Returns <code>int</code> indicating the ticks count.</p>
		 * @link https://php.net/manual/en/hrtime-performancecounter.getticks.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicks(): int {}

		/**
		 * Ticks elapsed since the given value
		 * <p>Returns the ticks count elapsed since the given start value.</p>
		 * @param int $start <p>Starting ticks value.</p>
		 * @return int <p>Returns <code>int</code> indicating the ticks count.</p>
		 * @link https://php.net/manual/en/hrtime-performancecounter.gettickssince.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicksSince(int $start): int {}

		/**
		 * Whether the measurement is running
		 * <p>Reveals whether the measurement was started.</p>
		 * @return bool <p>Returns <code>bool</code> indicating whetehr the measurement is running.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.isrunning.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function isRunning(): bool {}

		/**
		 * Start time measurement
		 * <p>Starts the time measurement. It has no effect if the measurement was already started. The measurement will be continued if it was previously stopped.</p>
		 * @return void <p>Returns void.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.start.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function start(): void {}

		/**
		 * Stop time measurement
		 * <p>Stop the time measurement for the previously started interval.</p>
		 * @return void <p>Returns void.</p>
		 * @link https://php.net/manual/en/hrtime-stopwatch.stop.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function stop(): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.hrtime-unit.php
	 * @since PECL hrtime >= 0.4.3
	 */
	class Unit {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.hrtime-unit.php
		 */
		const SECOND = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.hrtime-unit.php
		 */
		const MILLISECOND = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.hrtime-unit.php
		 */
		const MICROSECOND = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.hrtime-unit.php
		 */
		const NANOSECOND = 3;
	}

}
