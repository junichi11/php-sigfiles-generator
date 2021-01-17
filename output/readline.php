<?php



namespace {

	/**
	 * Reads a line
	 * <p>Reads a single line from the user. You must add this line to the history yourself using <code>readline_add_history()</code>.</p>
	 * @param string|null $prompt <p>You may specify a string with which to prompt the user.</p>
	 * @return string|false <p>Returns a single string from the user. The line returned has the ending newline removed. If there is no more data to read, then <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.readline.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline(string|null $prompt = null): string|false {}

	/**
	 * Adds a line to the history
	 * <p>This function adds a line to the command line history.</p>
	 * @param string $prompt <p>The line to be added in the history.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.readline-add-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_add_history(string $prompt): bool {}

	/**
	 * Initializes the readline callback interface and terminal, prints the prompt and returns immediately
	 * <p>Sets up a readline callback interface then prints <code>prompt</code> and immediately returns. Calling this function twice without removing the previous callback interface will automatically and conveniently overwrite the old interface.</p><p>The callback feature is useful when combined with <code>stream_select()</code> as it allows interleaving of IO and user input, unlike <code>readline()</code>.</p>
	 * @param string $prompt <p>The prompt message.</p>
	 * @param callable $callback <p>The <code>callback</code> function takes one parameter; the user input returned.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.readline-callback-handler-install.php
	 * @see readline_callback_handler_remove(), readline_callback_read_char(), stream_select()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_callback_handler_install(string $prompt, callable $callback): bool {}

	/**
	 * Removes a previously installed callback handler and restores terminal settings
	 * <p>Removes a previously installed callback handler and restores terminal settings.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if a previously installed callback handler was removed, or <b><code>false</code></b> if one could not be found.</p>
	 * @link https://php.net/manual/en/function.readline-callback-handler-remove.php
	 * @see readline_callback_handler_install(), readline_callback_read_char()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_callback_handler_remove(): bool {}

	/**
	 * Reads a character and informs the readline callback interface when a line is received
	 * <p>Reads a character of user input. When a line is received, this function informs the readline callback interface installed using <code>readline_callback_handler_install()</code> that a line is ready for input.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.readline-callback-read-char.php
	 * @see readline_callback_handler_install(), readline_callback_handler_remove()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_callback_read_char(): void {}

	/**
	 * Clears the history
	 * <p>This function clears the entire command line history.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.readline-clear-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_clear_history(): bool {}

	/**
	 * Registers a completion function
	 * <p>This function registers a completion function. This is the same kind of functionality you'd get if you hit your tab key while using Bash.</p>
	 * @param callable $callback <p>You must supply the name of an existing function which accepts a partial command line and returns an array of possible matches.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.readline-completion-function.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_completion_function(callable $callback): bool {}

	/**
	 * Gets/sets various internal readline variables
	 * <p>Gets or sets various internal readline variables.</p>
	 * @param string|null $var_name <p>A variable name.</p>
	 * @param int|string|bool|null $value <p>If provided, this will be the new value of the setting.</p>
	 * @return mixed <p>If called with no parameters, this function returns an array of values for all the setting readline uses. The elements will be indexed by the following values: done, end, erase_empty_line, library_version, line_buffer, mark, pending_input, point, prompt, readline_name, and terminal_name.</p><p>If called with one or two parameters, the old value is returned.</p>
	 * @link https://php.net/manual/en/function.readline-info.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_info(string|null $var_name = null, int|string|bool|null $value = null): mixed {}

	/**
	 * Lists the history
	 * <p>Gets the entire command line history.</p>
	 * @return array <p>Returns an array of the entire command line history. The elements are indexed by integers starting at zero.</p>
	 * @link https://php.net/manual/en/function.readline-list-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_list_history(): array {}

	/**
	 * Inform readline that the cursor has moved to a new line
	 * <p>Tells readline that the cursor has moved to a new line.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.readline-on-new-line.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_on_new_line(): void {}

	/**
	 * Reads the history
	 * <p>This function reads a command history from a file.</p>
	 * @param string|null $filename <p>Path to the filename containing the command history.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.readline-read-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_read_history(string|null $filename = null): bool {}

	/**
	 * Redraws the display
	 * <p>Redraws readline to redraw the display.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.readline-redisplay.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_redisplay(): void {}

	/**
	 * Writes the history
	 * <p>This function writes the command history to a file.</p>
	 * @param string|null $filename <p>Path to the saved file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.readline-write-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_write_history(string|null $filename = null): bool {}

	/**
	 * The library which is used for readline support; currently either <code>readline</code> or <code>libedit</code>. Available as of PHP 5.5.0.
	 */
	define('READLINE_LIB', 'libedit');

}
