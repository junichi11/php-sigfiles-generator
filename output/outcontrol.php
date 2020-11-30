<?php



namespace {

	/**
	 * Flush system output buffer
	 * <p>Flushes the system write buffers of PHP and whatever backend PHP is using (CGI, a web server, etc). This attempts to push current output all the way to the browser with a few caveats.</p><p><b>flush()</b> may not be able to override the buffering scheme of your web server and it has no effect on any client-side buffering in the browser. It also doesn't affect PHP's userspace output buffering mechanism. This means you will have to call both <code>ob_flush()</code> and <b>flush()</b> to flush the ob output buffers if you are using those.</p><p>Several servers, especially on Win32, will still buffer the output from your script until it terminates before transmitting the results to the browser.</p><p>Server modules for Apache like mod_gzip may do buffering of their own that will cause <b>flush()</b> to not result in data being sent immediately to the client.</p><p>Even the browser may buffer its input before displaying it. Netscape, for example, buffers text until it receives an end-of-line or the beginning of a tag, and it won't render tables until the &lt;/table&gt; tag of the outermost table is seen.</p><p>Some versions of Microsoft Internet Explorer will only start to display the page after they have received 256 bytes of output, so you may need to send extra whitespace before flushing to get those browsers to display the page.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.flush.php
	 * @see ob_flush(), ob_clean(), ob_end_flush(), ob_end_clean()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function flush(): void {}

	/**
	 * Clean (erase) the output buffer
	 * <p>This function discards the contents of the output buffer.</p><p>This function does not destroy the output buffer like <code>ob_end_clean()</code> does.</p><p>The output buffer must be started by <code>ob_start()</code> with PHP_OUTPUT_HANDLER_CLEANABLE flag. Otherwise <b>ob_clean()</b> will not work.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ob-clean.php
	 * @see ob_flush(), ob_end_flush(), ob_end_clean()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_clean(): void {}

	/**
	 * Clean (erase) the output buffer and turn off output buffering
	 * <p>This function discards the contents of the topmost output buffer and turns off this output buffering. If you want to further process the buffer's contents you have to call <code>ob_get_contents()</code> before <b>ob_end_clean()</b> as the buffer contents are discarded when <b>ob_end_clean()</b> is called.</p><p>The output buffer must be started by <code>ob_start()</code> with PHP_OUTPUT_HANDLER_CLEANABLE and PHP_OUTPUT_HANDLER_REMOVABLE flags. Otherwise <b>ob_end_clean()</b> will not work.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Reasons for failure are first that you called the function without an active buffer or that for some reason a buffer could not be deleted (possible for special buffer).</p>
	 * @link http://php.net/manual/en/function.ob-end-clean.php
	 * @see ob_start(), ob_get_contents(), ob_flush()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_end_clean(): bool {}

	/**
	 * Flush (send) the output buffer and turn off output buffering
	 * <p>This function will send the contents of the topmost output buffer (if any) and turn this output buffer off. If you want to further process the buffer's contents you have to call <code>ob_get_contents()</code> before <b>ob_end_flush()</b> as the buffer contents are discarded after <b>ob_end_flush()</b> is called.</p><p>The output buffer must be started by <code>ob_start()</code> with PHP_OUTPUT_HANDLER_FLUSHABLE and PHP_OUTPUT_HANDLER_REMOVABLE flags. Otherwise <b>ob_end_flush()</b> will not work.</p><p><b>Note</b>:  This function is similar to <code>ob_get_flush()</code>, except that <code>ob_get_flush()</code> returns the buffer as a string. </p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Reasons for failure are first that you called the function without an active buffer or that for some reason a buffer could not be deleted (possible for special buffer).</p>
	 * @link http://php.net/manual/en/function.ob-end-flush.php
	 * @see ob_start(), ob_get_contents(), ob_get_flush(), ob_flush(), ob_end_clean()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_end_flush(): bool {}

	/**
	 * Flush (send) the output buffer
	 * <p>This function will send the contents of the output buffer (if any). If you want to further process the buffer's contents you have to call <code>ob_get_contents()</code> before <b>ob_flush()</b> as the buffer contents are discarded after <b>ob_flush()</b> is called.</p><p>This function does not destroy the output buffer like <code>ob_end_flush()</code> does.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ob-flush.php
	 * @see ob_get_contents(), ob_clean(), ob_end_flush(), ob_end_clean()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_flush(): void {}

	/**
	 * Get current buffer contents and delete current output buffer
	 * <p>Gets the current buffer contents and delete current output buffer.</p><p><b>ob_get_clean()</b> essentially executes both <code>ob_get_contents()</code> and <code>ob_end_clean()</code>.</p><p>The output buffer must be started by <code>ob_start()</code> with PHP_OUTPUT_HANDLER_CLEANABLE flag. Otherwise <b>ob_get_clean()</b> will not work.</p>
	 * @return string <p>Returns the contents of the output buffer and end output buffering. If output buffering isn't active then <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.ob-get-clean.php
	 * @see ob_get_contents(), ob_start()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ob_get_clean(): string {}

	/**
	 * Return the contents of the output buffer
	 * <p>Gets the contents of the output buffer without clearing it.</p>
	 * @return string <p>This will return the contents of the output buffer or <b><code>FALSE</code></b>, if output buffering isn't active.</p>
	 * @link http://php.net/manual/en/function.ob-get-contents.php
	 * @see ob_start(), ob_get_length()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_get_contents(): string {}

	/**
	 * Flush the output buffer, return it as a string and turn off output buffering
	 * <p><b>ob_get_flush()</b> flushes the output buffer, return it as a string and turns off output buffering.</p><p>The output buffer must be started by <code>ob_start()</code> with PHP_OUTPUT_HANDLER_FLUSHABLE flag. Otherwise <b>ob_get_flush()</b> will not work.</p><p><b>Note</b>:  This function is similar to <code>ob_end_flush()</code>, except that this function also returns the buffer as a string. </p>
	 * @return string <p>Returns the output buffer or <b><code>FALSE</code></b> if no buffering is active.</p>
	 * @link http://php.net/manual/en/function.ob-get-flush.php
	 * @see ob_end_clean(), ob_end_flush(), ob_list_handlers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ob_get_flush(): string {}

	/**
	 * Return the length of the output buffer
	 * <p>This will return the length of the contents in the output buffer, in bytes.</p>
	 * @return int <p>Returns the length of the output buffer contents, in bytes, or <b><code>FALSE</code></b> if no buffering is active.</p>
	 * @link http://php.net/manual/en/function.ob-get-length.php
	 * @see ob_start(), ob_get_contents()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ob_get_length(): int {}

	/**
	 * Return the nesting level of the output buffering mechanism
	 * <p>Returns the nesting level of the output buffering mechanism.</p>
	 * @return int <p>Returns the level of nested output buffering handlers or zero if output buffering is not active.</p>
	 * @link http://php.net/manual/en/function.ob-get-level.php
	 * @see ob_start(), ob_get_contents()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_get_level(): int {}

	/**
	 * Get status of output buffers
	 * <p><b>ob_get_status()</b> returns status information on either the top level output buffer or all active output buffer levels if <code>full_status</code> is set to <b><code>TRUE</code></b>.</p>
	 * @param bool $full_status <p><b><code>TRUE</code></b> to return all active output buffer levels. If <b><code>FALSE</code></b> or not set, only the top level output buffer is returned.</p>
	 * @return array <p>If called without the <code>full_status</code> parameter or with <code>full_status</code> = <b><code>FALSE</code></b> a simple array with the following elements is returned:</p>  <pre>Array ( [level] =&gt; 2 [type] =&gt; 0 [status] =&gt; 0 [name] =&gt; URL-Rewriter [del] =&gt; 1 )</pre>    <b>Simple <b>ob_get_status()</b> results</b> KeyValue levelOutput nesting level type<i>PHP_OUTPUT_HANDLER_INTERNAL (0)</i> or <i>PHP_OUTPUT_HANDLER_USER (1)</i> statusOne of <i>PHP_OUTPUT_HANDLER_START</i> (0), <i>PHP_OUTPUT_HANDLER_CONT</i> (1) or <i>PHP_OUTPUT_HANDLER_END</i> (2) nameName of active output handler or ' default output handler' if none is set delErase-flag as set by <code>ob_start()</code> <p>If called with <code>full_status</code> = <b><code>TRUE</code></b> an array with one element for each active output buffer level is returned. The output level is used as key of the top level array and each array element itself is another array holding status information on one active output level.</p>  <pre> Array ( [0] =&gt; Array ( [chunk_size] =&gt; 0 [size] =&gt; 40960 [block_size] =&gt; 10240 [type] =&gt; 1 [status] =&gt; 0 [name] =&gt; default output handler [del] =&gt; 1 ) [1] =&gt; Array ( [chunk_size] =&gt; 0 [size] =&gt; 40960 [block_size] =&gt; 10240 [type] =&gt; 0 [buffer_size] =&gt; 0 [status] =&gt; 0 [name] =&gt; URL-Rewriter [del] =&gt; 1 ) ) </pre>  <p>The full output contains these additional elements:</p> <b>Full <b>ob_get_status()</b> results</b> KeyValue chunk_sizeChunk size as set by <code>ob_start()</code> size... blocksize...
	 * @link http://php.net/manual/en/function.ob-get-status.php
	 * @see ob_get_level(), ob_list_handlers()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_get_status(bool $full_status = FALSE): array {}

	/**
	 * ob_start callback function to gzip output buffer
	 * <p><b>ob_gzhandler()</b> is intended to be used as a callback function for <code>ob_start()</code> to help facilitate sending gz-encoded data to web browsers that support compressed web pages. Before <b>ob_gzhandler()</b> actually sends compressed data, it determines what type of content encoding the browser will accept ("gzip", "deflate" or none at all) and will return its output accordingly. All browsers are supported since it's up to the browser to send the correct header saying that it accepts compressed web pages. If a browser doesn't support compressed pages this function returns <b><code>FALSE</code></b>.</p>
	 * @param string $buffer
	 * @param int $mode
	 * @return string
	 * @link http://php.net/manual/en/function.ob-gzhandler.php
	 * @see ob_start(), ob_end_flush()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ob_gzhandler(string $buffer, int $mode): string {}

	/**
	 * Turn implicit flush on/off
	 * <p><b>ob_implicit_flush()</b> will turn implicit flushing on or off. Implicit flushing will result in a flush operation after every output call, so that explicit calls to <code>flush()</code> will no longer be needed.</p>
	 * @param int $flag <p><i>1</i> to turn implicit flushing on, <i>0</i> otherwise.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ob-implicit-flush.php
	 * @see flush(), ob_start(), ob_end_flush()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_implicit_flush(int $flag = 1): void {}

	/**
	 * List all output handlers in use
	 * <p>Lists all output handlers in use.</p>
	 * @return array <p>This will return an array with the output handlers in use (if any). If output_buffering is enabled or an anonymous function was used with <code>ob_start()</code>, <b>ob_list_handlers()</b> will return "default output handler".</p>
	 * @link http://php.net/manual/en/function.ob-list-handlers.php
	 * @see ob_end_clean(), ob_end_flush(), ob_get_flush(), ob_start()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ob_list_handlers(): array {}

	/**
	 * Turn on output buffering
	 * <p>This function will turn output buffering on. While output buffering is active no output is sent from the script (other than headers), instead the output is stored in an internal buffer.</p><p>The contents of this internal buffer may be copied into a string variable using <code>ob_get_contents()</code>. To output what is stored in the internal buffer, use <code>ob_end_flush()</code>. Alternatively, <code>ob_end_clean()</code> will silently discard the buffer contents.</p><p>Some web servers (e.g. Apache) change the working directory of a script when calling the callback function. You can change it back by e.g. <i>chdir(dirname($_SERVER['SCRIPT_FILENAME']))</i> in the callback function.</p><p>Output buffers are stackable, that is, you may call <b>ob_start()</b> while another <b>ob_start()</b> is active. Just make sure that you call <code>ob_end_flush()</code> the appropriate number of times. If multiple output callback functions are active, output is being filtered sequentially through each of them in nesting order.</p>
	 * @param callable $output_callback <p>An optional <code>output_callback</code> function may be specified. This function takes a string as a parameter and should return a string. The function will be called when the output buffer is flushed (sent) or cleaned (with <code>ob_flush()</code>, <code>ob_clean()</code> or similar function) or when the output buffer is flushed to the browser at the end of the request. When <code>output_callback</code> is called, it will receive the contents of the output buffer as its parameter and is expected to return a new output buffer as a result, which will be sent to the browser. If the <code>output_callback</code> is not a callable function, this function will return <b><code>FALSE</code></b>. This is the callback signature:</p> <p></p> string handler ( string <code>$buffer</code> [, int <code>$phase</code> ] )   <code>buffer</code>   Contents of the output buffer.    <code>phase</code>   Bitmask of <b><code>PHP_OUTPUT_HANDLER_&#42;</code></b> constants.    <p>If <code>output_callback</code> returns <b><code>FALSE</code></b> original input is sent to the browser.</p> <p>The <code>output_callback</code> parameter may be bypassed by passing a <b><code>NULL</code></b> value.</p> <p><code>ob_end_clean()</code>, <code>ob_end_flush()</code>, <code>ob_clean()</code>, <code>ob_flush()</code> and <b>ob_start()</b> may not be called from a callback function. If you call them from callback function, the behavior is undefined. If you would like to delete the contents of a buffer, return "" (a null string) from callback function. You can't even call functions using the output buffering functions like <i>print_r($expression, true)</i> or <i>highlight_file($filename, true)</i> from a callback function.</p> <p><b>Note</b>:</p><p><code>ob_gzhandler()</code> function exists to facilitate sending gz-encoded data to web browsers that support compressed web pages. <code>ob_gzhandler()</code> determines what type of content encoding the browser will accept and will return its output accordingly.</p>
	 * @param int $chunk_size <p>If the optional parameter <code>chunk_size</code> is passed, the buffer will be flushed after any output call which causes the buffer's length to equal or exceed <code>chunk_size</code>. The default value <i>0</i> means that the output function will only be called when the output buffer is closed.</p> <p>Prior to PHP 5.4.0, the value <i>1</i> was a special case value that set the chunk size to 4096 bytes.</p>
	 * @param int $flags <p>The <code>flags</code> parameter is a bitmask that controls the operations that can be performed on the output buffer. The default is to allow output buffers to be cleaned, flushed and removed, which can be set explicitly via <b><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></b>, or <b><code>PHP_OUTPUT_HANDLER_STDFLAGS</code></b> as shorthand.</p> <p>Each flag controls access to a set of functions, as described below:</p>   Constant Functions     <b><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></b>  <code>ob_clean()</code>, <code>ob_end_clean()</code>, and <code>ob_get_clean()</code>.    <b><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></b>  <code>ob_end_flush()</code>, <code>ob_flush()</code>, and <code>ob_get_flush()</code>.    <b><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></b>  <code>ob_end_clean()</code>, <code>ob_end_flush()</code>, and <code>ob_get_flush()</code>.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ob-start.php
	 * @see ob_get_contents(), ob_end_clean(), ob_end_flush(), ob_implicit_flush(), ob_gzhandler(), ob_iconv_handler(), mb_output_handler(), ob_tidyhandler()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_start(callable $output_callback = NULL, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS): bool {}

	/**
	 * Add URL rewriter values
	 * <p>This function adds another name/value pair to the URL rewrite mechanism. The name and value will be added to URLs (as GET parameter) and forms (as hidden input fields) the same way as the session ID when transparent URL rewriting is enabled with session.use_trans_sid.</p><p>This function's behaviour is controlled by the url_rewriter.tags and url_rewriter.hosts php.ini parameters.</p><p><b>Note</b>:  Calling this function will implicitly start output buffering if it is not active already. </p>
	 * @param string $name <p>The variable name.</p>
	 * @param string $value <p>The variable value.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.output-add-rewrite-var.php
	 * @see output_reset_rewrite_vars(), ob_flush(), ob_list_handlers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function output_add_rewrite_var(string $name, string $value): bool {}

	/**
	 * Reset URL rewriter values
	 * <p>This function resets the URL rewriter and removes all rewrite variables previously set by the <code>output_add_rewrite_var()</code> function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.output-reset-rewrite-vars.php
	 * @see output_add_rewrite_var(), ob_flush(), ob_list_handlers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function output_reset_rewrite_vars(): bool {}

	/**
	 * <p>Indicates that the output buffer has been cleaned.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_CLEAN', 2);

	/**
	 * <p>Controls whether an output buffer created by <code>ob_start()</code> can be cleaned.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_CLEANABLE', 16);

	/**
	 * <p>Indicates that the buffer has been flushed, but output buffering will continue.</p> <p>As of PHP 5.4, this is an alias for <b><code>PHP_OUTPUT_HANDLER_WRITE</code></b>.</p>
	 */
	define('PHP_OUTPUT_HANDLER_CONT', 0);

	/**
	 * <p>Indicates that output buffering has ended.</p> <p>As of PHP 5.4, this is an alias for <b><code>PHP_OUTPUT_HANDLER_FINAL</code></b>.</p>
	 */
	define('PHP_OUTPUT_HANDLER_END', 8);

	/**
	 * <p>Indicates that this is the final output buffering operation.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_FINAL', 8);

	/**
	 * <p>Indicates that the buffer has been flushed.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_FLUSH', 4);

	/**
	 * <p>Controls whether an output buffer created by <code>ob_start()</code> can be flushed.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_FLUSHABLE', 32);

	/**
	 * <p>Controls whether an output buffer created by <code>ob_start()</code> can be removed before the end of the script.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_REMOVABLE', 64);

	/**
	 * <p>Indicates that output buffering has begun.</p>
	 */
	define('PHP_OUTPUT_HANDLER_START', 1);

	/**
	 * <p>The default set of output buffer flags; currently equivalent to <b><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></b>.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_STDFLAGS', 112);

	/**
	 * <p>Indicates that the output buffer is being flushed, and had data to output.</p> <p>Available since PHP 5.4.</p>
	 */
	define('PHP_OUTPUT_HANDLER_WRITE', 0);

}
