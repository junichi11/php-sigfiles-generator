<?php



namespace {

	/**
	 * Inserts a breakpoint at a line in a file
	 * <p>Insert a breakpoint at the given <code>line</code> in the given <code>file</code>.</p>
	 * @param string $file <p>The name of the file.</p>
	 * @param int $line <p>The line number.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-break-file.php
	 * @see phpdbg_break_function(), phpdbg_break_method(), phpdbg_break_next(), phpdbg_clear()
	 * @since PHP 5 >= 5.6.3, PHP 7
	 */
	function phpdbg_break_file(string $file, int $line): void {}

	/**
	 * Inserts a breakpoint at entry to a function
	 * <p>Insert a breakpoint at the entry to the given <code>function</code>.</p>
	 * @param string $function <p>The name of the function.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-break-function.php
	 * @see phpdbg_break_file(), phpdbg_break_method(), phpdbg_break_next(), phpdbg_clear()
	 * @since PHP 5 >= 5.6.3, PHP 7
	 */
	function phpdbg_break_function(string $function): void {}

	/**
	 * Inserts a breakpoint at entry to a method
	 * <p>Insert a breakpoint at the entry to the given <code>method</code> of the given <code>class</code>.</p>
	 * @param string $class <p>The name of the class.</p>
	 * @param string $method <p>The name of the method.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-break-method.php
	 * @see phpdbg_break_file(), phpdbg_break_function(), phpdbg_break_next(), phpdbg_clear()
	 * @since PHP 5 >= 5.6.3, PHP 7
	 */
	function phpdbg_break_method(string $class, string $method): void {}

	/**
	 * Inserts a breakpoint at the next opcode
	 * <p>Insert a breakpoint at the next opcode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-break-next.php
	 * @see phpdbg_break_file(), phpdbg_break_function(), phpdbg_break_method(), phpdbg_clear()
	 * @since PHP 5 >= 5.6.3, PHP 7
	 */
	function phpdbg_break_next(): void {}

	/**
	 * Clears all breakpoints
	 * <p>Clear all breakpoints that have been set, either via one of the <b>phpdbg_break_&#42;()</b> functions or interactively in the console.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-clear.php
	 * @see phpdbg_break_file(), phpdbg_break_function(), phpdbg_break_method(), phpdbg_break_next()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function phpdbg_clear(): void {}

	/**
	 * Sets the color of certain elements
	 * <p>Set the <code>color</code> of the given <code>element</code>.</p>
	 * @param int $element <p>One of the <b><code>PHPDBG_COLOR_&#42;</code></b> constants.</p>
	 * @param string $color <p>The name of the color. One of <i>white</i>, <i>red</i>, <i>green</i>, <i>yellow</i>, <i>blue</i>, <i>purple</i>, <i>cyan</i> or <i>black</i>, optionally with either a trailing <i>-bold</i> or <i>-underline</i>, for instance, <i>white-bold</i> or <i>green-underline</i>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-color.php
	 * @see phpdbg_prompt()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function phpdbg_color(int $element, string $color): void {}

	/**
	 * 
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param array $options
	 * @return array
	 * @link http://php.net/manual/en/function.phpdbg-end-oplog.php
	 * @since PHP 7
	 */
	function phpdbg_end_oplog(array $options = NULL): array {}

	/**
	 * Attempts to set the execution context
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $context
	 * @return mixed <p>If the execution context was set previously it is returned. If the execution context was not set previously <b><code>TRUE</code></b> is returned. If the request to set the context fails, <b><code>FALSE</code></b> is returned, and an <b><code>E_WARNING</code></b> raised.</p>
	 * @link http://php.net/manual/en/function.phpdbg-exec.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function phpdbg_exec(string $context = NULL) {}

	/**
	 * 
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param array $options
	 * @return array
	 * @link http://php.net/manual/en/function.phpdbg-get-executable.php
	 * @since PHP 7
	 */
	function phpdbg_get_executable(array $options = NULL): array {}

	/**
	 * Sets the command prompt
	 * <p>Set the command prompt to the given <code>string</code>.</p>
	 * @param string $string <p>The string to use as command prompt.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-prompt.php
	 * @see phpdbg_color()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function phpdbg_prompt(string $string): void {}

	/**
	 * 
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.phpdbg-start-oplog.php
	 * @since PHP 7
	 */
	function phpdbg_start_oplog(): void {}

	define('PHPDBG_COLOR_ERROR', null);

	define('PHPDBG_COLOR_NOTICE', null);

	define('PHPDBG_COLOR_PROMPT', null);

	/**
	 * Removed as of PHP 7.3.0.
	 */
	define('PHPDBG_FILE', null);

	/**
	 * Removed as of PHP 7.3.0.
	 */
	define('PHPDBG_FUNC', null);

	/**
	 * Removed as of PHP 7.3.0.
	 */
	define('PHPDBG_LINENO', null);

	/**
	 * Removed as of PHP 7.3.0.
	 */
	define('PHPDBG_METHOD', null);

	define('PHPDBG_VERSION', null);

}
