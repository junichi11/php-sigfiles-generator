<?php



namespace {

	/**
	 * Add character at current position and advance cursor
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $ch
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-addch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addch(int $ch): int {}

	/**
	 * Add attributed string with specified length at current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-addchnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addchnstr(string $s, int $n): int {}

	/**
	 * Add attributed string at current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-addchstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addchstr(string $s): int {}

	/**
	 * Add string with specified length at current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-addnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addnstr(string $s, int $n): int {}

	/**
	 * Output text at current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $text
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-addstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addstr(string $text): int {}

	/**
	 * Define default colors for color 0
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $fg
	 * @param int $bg
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-assume-default-colors.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_assume_default_colors(int $fg, int $bg): int {}

	/**
	 * Turn off the given attributes
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $attributes
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-attroff.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_attroff(int $attributes): int {}

	/**
	 * Turn on the given attributes
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $attributes
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-attron.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_attron(int $attributes): int {}

	/**
	 * Set given attributes
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $attributes
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-attrset.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_attrset(int $attributes): int {}

	/**
	 * Returns baudrate of terminal
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-baudrate.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_baudrate(): int {}

	/**
	 * Let the terminal beep
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>ncurses_beep()</b> sends an audible alert (bell) and if its not possible flashes the screen.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-beep.php
	 * @see ncurses_flash()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_beep(): int {}

	/**
	 * Set background property for terminal screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $attrchar
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-bkgd.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_bkgd(int $attrchar): int {}

	/**
	 * Control screen background
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $attrchar
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-bkgdset.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_bkgdset(int $attrchar): void {}

	/**
	 * Draw a border around the screen using attributed characters
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Draws the specified lines and corners around the main window.</p><p>Use <code>ncurses_wborder()</code> for borders around subwindows!</p>
	 * @param int $left
	 * @param int $right
	 * @param int $top
	 * @param int $bottom
	 * @param int $tl_corner <p>Top left corner</p>
	 * @param int $tr_corner <p>Top right corner</p>
	 * @param int $bl_corner <p>Bottom left corner</p>
	 * @param int $br_corner <p>Bottom right corner</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-border.php
	 * @see ncurses_wborder()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_border(int $left, int $right, int $top, int $bottom, int $tl_corner, int $tr_corner, int $bl_corner, int $br_corner): int {}

	/**
	 * Moves a visible panel to the bottom of the stack
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-bottom-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_bottom_panel($panel): int {}

	/**
	 * Checks if terminal color definitions can be changed
	 * <p>Checks whether the terminal has color capabilities and whether the programmer can change color definitions using <code>ncurses_init_color()</code>. ncurses must be initialized using <code>ncurses_init()</code> before calling this function.</p>
	 * @return bool <p>Return <b><code>TRUE</code></b> if the programmer can change color definitions, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-can-change-color.php
	 * @see ncurses_has_colors(), ncurses_init_color(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_can_change_color(): bool {}

	/**
	 * Switch off input buffering
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Disables line buffering and character processing (interrupt and flow control characters are unaffected), making characters typed by the user immediately available to the program.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> or <b><code>NCURSES_ERR</code></b> if any error occurred.</p>
	 * @link http://php.net/manual/en/function.ncurses-cbreak.php
	 * @see ncurses_nocbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_cbreak(): bool {}

	/**
	 * Clear screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Clears the screen completely without setting blanks.</p><p>Note: <b>ncurses_clear()</b> clears the screen without setting blanks, which have the current background rendition. To clear screen with blanks, use <code>ncurses_erase()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-clear.php
	 * @see ncurses_erase()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_clear(): bool {}

	/**
	 * Clear screen from current position to bottom
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Erases all lines from cursor to end of screen and creates blanks. Blanks created by <b>ncurses_clrtobot()</b> have the current background rendition.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-clrtobot.php
	 * @see ncurses_clear(), ncurses_clrtoeol()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_clrtobot(): bool {}

	/**
	 * Clear screen from current position to end of line
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Erases the current line from cursor position to the end. Blanks created by <b>ncurses_clrtoeol()</b> have the current background rendition.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-clrtoeol.php
	 * @see ncurses_clear(), ncurses_clrtobot()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_clrtoeol(): bool {}

	/**
	 * Retrieves RGB components of a color
	 * <p>Retrieves the red, green, and blue components for the given color definition. Terminal color capabilities must be initialized with <code>ncurses_start_color()</code> prior to calling this function.</p>
	 * @param int $color <p>The number of the color to retrieve information for. May be one of the pre-defined color constants.</p>
	 * @param int $r <p>A reference to which to return the red component of the color. The value returned to the reference will be between 0 and 1000.</p>
	 * @param int $g <p>A reference to which to return the green component of the color. The value returned to the reference will be between 0 and 1000.</p>
	 * @param int $b <p>A reference to which to return the blue component of the color. The value returned to the reference will be between 0 and 1000.</p>
	 * @return int <p>Returns <i>-1</i> if the function was successful, and <i>0</i> if ncurses or terminal color capabilities have not been initialized.</p>
	 * @link http://php.net/manual/en/function.ncurses-color-content.php
	 * @see ncurses_init_color(), ncurses_start_color()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_color_content(int $color, int &$r, int &$g, int &$b): int {}

	/**
	 * Set active foreground and background colors
	 * <p>Sets the active foreground and background colors. Any characters written after this function is invoked will have these colors. This function requires terminal colors to be supported and initialized using <code>ncurses_start_color()</code> beforehand.</p><p>ncurses uses color pairs to specify both foreground and background colors. Use <code>ncurses_init_pair()</code> to define a color pair.</p>
	 * @param int $pair <p>The color pair from which to get the foreground and background colors to set as the active colors.</p>
	 * @return int <p>Returns <i>-1</i> on success, and <i>0</i> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-color-set.php
	 * @see ncurses_init_pair(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_color_set(int $pair): int {}

	/**
	 * Set cursor state
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $visibility
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-curs-set.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_curs_set(int $visibility): int {}

	/**
	 * Saves terminals (program) mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Saves the current terminal modes for program (in curses) for use by <code>ncurses_reset_prog_mode()</code>.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, otherwise <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-def-prog-mode.php
	 * @see ncurses_reset_prog_mode()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_def_prog_mode(): bool {}

	/**
	 * Saves terminals (shell) mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Saves the current terminal modes for shell (not in curses) for use by <code>ncurses_reset_shell_mode()</code>.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-def-shell-mode.php
	 * @see ncurses_reset_shell_mode()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_def_shell_mode(): bool {}

	/**
	 * Define a keycode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $definition
	 * @param int $keycode
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-define-key.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_define_key(string $definition, int $keycode): int {}

	/**
	 * Remove panel from the stack and delete it (but not the associated window)
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-del-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_del_panel($panel): bool {}

	/**
	 * Delay output on terminal using padding characters
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $milliseconds
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-delay-output.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_delay_output(int $milliseconds): int {}

	/**
	 * Delete character at current position, move rest of line left
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Deletes the character under the cursor. All characters to the right of the cursor on the same line are moved to the left one position and the last character on the line is filled with a blank. The cursor position does not change.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-delch.php
	 * @see ncurses_deleteln()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_delch(): bool {}

	/**
	 * Delete line at current position, move rest of screen up
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Deletes the current line under cursor position. All lines below the current line are moved up one line. The bottom line of window is cleared. Cursor position does not change.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, otherwise <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-deleteln.php
	 * @see ncurses_delch()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_deleteln(): bool {}

	/**
	 * Delete a ncurses window
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-delwin.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_delwin($window): bool {}

	/**
	 * Write all prepared refreshes to terminal
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Compares the virtual screen to the physical screen and updates the physical screen. This way is more effective than using multiple refresh calls.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-doupdate.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_doupdate(): bool {}

	/**
	 * Activate keyboard input echo
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Enables echo mode. All characters typed by user are echoed by <code>ncurses_getch()</code>.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, <b><code>TRUE</code></b> if any error occurred.</p>
	 * @link http://php.net/manual/en/function.ncurses-echo.php
	 * @see ncurses_noecho()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_echo(): bool {}

	/**
	 * Single character output including refresh
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $character
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-echochar.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_echochar(int $character): int {}

	/**
	 * Stop using ncurses, clean up the screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-end.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_end(): int {}

	/**
	 * Erase terminal screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Fills the terminal screen with blanks.</p><p>Created blanks have the current background rendition, set by <code>ncurses_bkgd()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-erase.php
	 * @see ncurses_bkgd(), ncurses_clear()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_erase(): bool {}

	/**
	 * Returns current erase character
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the current erase character.</p>
	 * @return string <p>The current erase char, as a string.</p>
	 * @link http://php.net/manual/en/function.ncurses-erasechar.php
	 * @see ncurses_killchar()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_erasechar(): string {}

	/**
	 * Set LINES for iniscr() and newterm() to 1
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-filter.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_filter(): void {}

	/**
	 * Flash terminal screen (visual bell)
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Flashes the screen, and if its not possible, sends an audible alert (bell).</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, otherwise <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-flash.php
	 * @see ncurses_beep()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_flash(): bool {}

	/**
	 * Flush keyboard input buffer
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Throws away any typeahead that has been typed and has not yet been read by your program.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, otherwise <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-flushinp.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_flushinp(): bool {}

	/**
	 * Read a character from keyboard
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-getch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getch(): int {}

	/**
	 * Returns the size of a window
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Gets the horizontal and vertical size of the given <code>window</code> into the given variables.</p><p>Variables must be passed as reference, so they are updated when the user changes the terminal size.</p>
	 * @param resource $window <p>The measured window</p>
	 * @param int $y <p>This will be set to the window height</p>
	 * @param int $x <p>This will be set to the window width</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ncurses-getmaxyx.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getmaxyx($window, int &$y, int &$x): void {}

	/**
	 * Reads mouse event
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>ncurses_getmouse()</b> reads mouse event out of queue.</p>
	 * @param array $mevent <p>Event options will be delivered in this parameter which has to be an array, passed by reference (see example below).</p> <p>On success an associative array with following keys will be delivered:</p><ul> <li> <p>"id" : Id to distinguish multiple devices</p> </li> <li> <p>"x" : screen relative x-position in character cells</p> </li> <li> <p>"y" : screen relative y-position in character cells</p> </li> <li> <p>"z" : currently not supported</p> </li> <li> <p>"mmask" : Mouse action</p> </li> </ul>
	 * @return bool <p>Returns <b><code>FALSE</code></b> if a mouse event is actually visible in the given window, otherwise returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-getmouse.php
	 * @see ncurses_ungetmouse()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getmouse(array &$mevent): bool {}

	/**
	 * Returns the current cursor position for a window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-getyx.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getyx($window, int &$y, int &$x): void {}

	/**
	 * Put terminal into halfdelay mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $tenth
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-halfdelay.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_halfdelay(int $tenth): int {}

	/**
	 * Checks if terminal has color capabilities
	 * <p>Checks whether the terminal has color capabilities. This function can be used to write terminal-independent programs. ncurses must be initialized using <code>ncurses_init()</code> before calling this function.</p>
	 * @return bool <p>Return <b><code>TRUE</code></b> if the terminal has color capabilities, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-has-colors.php
	 * @see ncurses_can_change_color(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_colors(): bool {}

	/**
	 * Check for insert- and delete-capabilities
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Checks whether the terminal has insert and delete capabilities.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the terminal has insert/delete-capabilities, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-has-ic.php
	 * @see ncurses_has_il()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_ic(): bool {}

	/**
	 * Check for line insert- and delete-capabilities
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Checks whether the terminal has insert- and delete-line-capabilities.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the terminal has insert/delete-line capabilities, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-has-il.php
	 * @see ncurses_has_ic()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_il(): bool {}

	/**
	 * Check for presence of a function key on terminal keyboard
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $keycode
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-has-key.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_key(int $keycode): int {}

	/**
	 * Remove panel from the stack, making it invisible
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-hide-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_hide_panel($panel): int {}

	/**
	 * Draw a horizontal line at current position using an attributed character and max. n characters long
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-hline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_hline(int $charattr, int $n): int {}

	/**
	 * Get character and attribute at current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the character from the current position.</p>
	 * @return string <p>Returns the character, as a string.</p>
	 * @link http://php.net/manual/en/function.ncurses-inch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_inch(): string {}

	/**
	 * Initialize ncurses
	 * <p>Initializes the ncurses interface. This function must be used before any other ncurses function call.</p><p>Note that <code>ncurses_end()</code> must be called before exiting from the program, or the terminal will not be restored to its proper non-visual mode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.ncurses-init.php
	 * @see ncurses_end()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_init(): void {}

	/**
	 * Define a terminal color
	 * <p>Defines or redefines the given color. When this function is called, all occurrences of the given color on the screen, if any, immediately change to the new definition.</p><p>Color capabilities must be supported by the terminal and initialized using <code>ncurses_start_color()</code> prior to calling this function. In addition, the terminal must have color changing capabilities; use <code>ncurses_can_change_color()</code> to check for this.</p>
	 * @param int $color <p>The identification number of the color to redefine. It may be one of the default color constants.</p>
	 * @param int $r <p>A color value, between 0 and 1000, for the red component.</p>
	 * @param int $g <p>A color value, between 0 and 1000, for the green component.</p>
	 * @param int $b <p>A color value, between 0 and 1000, for the blue component.</p>
	 * @return int <p>Returns <i>-1</i> if the function was successful, and <i>0</i> if ncurses or terminal color capabilities have not been initialized or the terminal does not have color changing capabilities.</p>
	 * @link http://php.net/manual/en/function.ncurses-init-color.php
	 * @see ncurses_color_content(), ncurses_start_color()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_init_color(int $color, int $r, int $g, int $b): int {}

	/**
	 * Define a color pair
	 * <p>Defines or redefines the given color pair to have the given foreground and background colors. If the color pair was previously initialized, the screen is refreshed and all occurrences of it are changed to reflect the new definition.</p><p>Color capabilities must be initialized using <code>ncurses_start_color()</code> before calling this function. The first color pair (color pair <i>0</i>) is assumed to be white on black by default, but can be changed using <code>ncurses_assume_default_colors()</code>.</p>
	 * @param int $pair <p>The number of the color pair to define.</p>
	 * @param int $fg <p>The foreground color for the color pair. May be one of the pre-defined colors or one defined by <code>ncurses_init_color()</code> if the terminal has color changing capabilities.</p>
	 * @param int $bg <p>The background color for the color pair. May be one of the pre-defined colors or one defined by <code>ncurses_init_color()</code> if the terminal has color changing capabilities.</p>
	 * @return int <p>Returns <i>-1</i> if the function was successful, and <i>0</i> if ncurses or color support were not initialized.</p>
	 * @link http://php.net/manual/en/function.ncurses-init-pair.php
	 * @see ncurses_pair_content(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_init_pair(int $pair, int $fg, int $bg): int {}

	/**
	 * Insert character moving rest of line including character at current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $character
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-insch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insch(int $character): int {}

	/**
	 * Insert lines before current line scrolling down (negative numbers delete and scroll up)
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $count
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-insdelln.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insdelln(int $count): int {}

	/**
	 * Insert a line, move rest of screen down
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Inserts a new line above the current line. The bottom line will be lost.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-insertln.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insertln(): int {}

	/**
	 * Insert string at current position, moving rest of line right
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $text
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-insstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insstr(string $text): int {}

	/**
	 * Reads string from terminal screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Reads a string from the terminal screen and returns the number of characters read from the current character position until end of line.</p>
	 * @param string $buffer <p>The characters. Attributes will be stripped.</p>
	 * @return int <p>Returns the number of characters.</p>
	 * @link http://php.net/manual/en/function.ncurses-instr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_instr(string &$buffer): int {}

	/**
	 * Ncurses is in endwin mode, normal screen output may be performed
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Checks if ncurses is in endwin mode.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b>, if <code>ncurses_end()</code> has been called without any subsequent calls to <code>ncurses_wrefresh()</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-isendwin.php
	 * @see ncurses_end(), ncurses_wrefresh()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_isendwin(): bool {}

	/**
	 * Enable or disable a keycode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $keycode
	 * @param bool $enable
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-keyok.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_keyok(int $keycode, bool $enable): int {}

	/**
	 * Turns keypad on or off
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param bool $bf
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-keypad.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_keypad($window, bool $bf): int {}

	/**
	 * Returns current line kill character
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the current line kill character.</p>
	 * @return string <p>Returns the kill character, as a string.</p>
	 * @link http://php.net/manual/en/function.ncurses-killchar.php
	 * @see ncurses_erasechar()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_killchar(): string {}

	/**
	 * Returns terminals description
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns a verbose description of the terminal.</p>
	 * @return string <p>Returns the description, as a string truncated to 128 characters. On errors, returns <b><code>NULL</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-longname.php
	 * @see ncurses_termname()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_longname(): string {}

	/**
	 * Enables/Disable 8-bit meta key information
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param bool $_8bit
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-meta.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_meta($window, bool $_8bit): int {}

	/**
	 * Transforms coordinates
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param bool $toscreen
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-mouse-trafo.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mouse_trafo(int &$y, int &$x, bool $toscreen): bool {}

	/**
	 * Set timeout for mouse button clicks
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $milliseconds
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mouseinterval.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mouseinterval(int $milliseconds): int {}

	/**
	 * Sets mouse options
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Sets mouse events to be reported. By default no mouse events will be reported.</p><p>Mouse events are represented by <b><code>NCURSES_KEY_MOUSE</code></b> in the <code>ncurses_wgetch()</code> input stream. To read the event data and pop the event of queue, call <code>ncurses_getmouse()</code>.</p>
	 * @param int $newmask <p>Mouse mask options can be set with the following predefined constants:</p><ul> <li><p>NCURSES_BUTTON1_PRESSED</p></li> <li><p>NCURSES_BUTTON1_RELEASED</p></li> <li><p>NCURSES_BUTTON1_CLICKED</p></li> <li><p>NCURSES_BUTTON1_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON1_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON2_PRESSED</p></li> <li><p>NCURSES_BUTTON2_RELEASED</p></li> <li><p>NCURSES_BUTTON2_CLICKED</p></li> <li><p>NCURSES_BUTTON2_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON2_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON3_PRESSED</p></li> <li><p>NCURSES_BUTTON3_RELEASED</p></li> <li><p>NCURSES_BUTTON3_CLICKED</p></li> <li><p>NCURSES_BUTTON3_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON3_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON4_PRESSED</p></li> <li><p>NCURSES_BUTTON4_RELEASED</p></li> <li><p>NCURSES_BUTTON4_CLICKED</p></li> <li><p>NCURSES_BUTTON4_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON4_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON_SHIFT&gt;</p></li> <li><p>NCURSES_BUTTON_CTRL</p></li> <li><p>NCURSES_BUTTON_ALT</p></li> <li><p>NCURSES_ALL_MOUSE_EVENTS</p></li> <li><p>NCURSES_REPORT_MOUSE_POSITION</p></li> </ul> <p>As a side effect, setting a zero mousemask in <code>newmask</code> turns off the mouse pointer. Setting a non zero value turns mouse pointer on.</p>
	 * @param int $oldmask <p>This will be set to the previous value of the mouse event mask.</p>
	 * @return int <p>Returns the mask of reportable events. On complete failure, it returns <i>0</i>.</p>
	 * @link http://php.net/manual/en/function.ncurses-mousemask.php
	 * @see ncurses_getch(), ncurses_getmouse(), ncurses_ungetmouse()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mousemask(int $newmask, int &$oldmask): int {}

	/**
	 * Move output position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-move.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_move(int $y, int $x): int {}

	/**
	 * Moves a panel so that its upper-left corner is at [startx, starty]
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @param int $startx
	 * @param int $starty
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-move-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_move_panel($panel, int $startx, int $starty): int {}

	/**
	 * Move current position and add character
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param int $c
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvaddch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddch(int $y, int $x, int $c): int {}

	/**
	 * Move position and add attributed string with specified length
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvaddchnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddchnstr(int $y, int $x, string $s, int $n): int {}

	/**
	 * Move position and add attributed string
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvaddchstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddchstr(int $y, int $x, string $s): int {}

	/**
	 * Move position and add string with specified length
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvaddnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddnstr(int $y, int $x, string $s, int $n): int {}

	/**
	 * Move position and add string
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvaddstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddstr(int $y, int $x, string $s): int {}

	/**
	 * Move cursor immediately
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $old_y
	 * @param int $old_x
	 * @param int $new_y
	 * @param int $new_x
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvcur.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvcur(int $old_y, int $old_x, int $new_y, int $new_x): int {}

	/**
	 * Move position and delete character, shift rest of line left
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvdelch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvdelch(int $y, int $x): int {}

	/**
	 * Move position and get character at new position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvgetch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvgetch(int $y, int $x): int {}

	/**
	 * Set new position and draw a horizontal line using an attributed character and max. n characters long
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param int $attrchar
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvhline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvhline(int $y, int $x, int $attrchar, int $n): int {}

	/**
	 * Move position and get attributed character at new position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvinch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvinch(int $y, int $x): int {}

	/**
	 * Set new position and draw a vertical line using an attributed character and max. n characters long
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $y
	 * @param int $x
	 * @param int $attrchar
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvvline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvvline(int $y, int $x, int $attrchar, int $n): int {}

	/**
	 * Add string at new position in window
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @param string $text
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-mvwaddstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvwaddstr($window, int $y, int $x, string $text): int {}

	/**
	 * Sleep
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $milliseconds
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-napms.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_napms(int $milliseconds): int {}

	/**
	 * Create a new panel and associate it with window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return resource
	 * @link http://php.net/manual/en/function.ncurses-new-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_new_panel($window) {}

	/**
	 * Creates a new pad (window)
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $rows
	 * @param int $cols
	 * @return resource
	 * @link http://php.net/manual/en/function.ncurses-newpad.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_newpad(int $rows, int $cols) {}

	/**
	 * Create a new window
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Creates a new window to draw elements in.</p><p>When creating additional windows, remember to use <code>ncurses_getmaxyx()</code> to check for available space, as terminal size is individual and may vary.</p>
	 * @param int $rows <p>Number of rows</p>
	 * @param int $cols <p>Number of columns</p>
	 * @param int $y <p>y-coordinate of the origin</p>
	 * @param int $x <p>x-coordinate of the origin</p>
	 * @return resource <p>Returns a resource ID for the new window.</p>
	 * @link http://php.net/manual/en/function.ncurses-newwin.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_newwin(int $rows, int $cols, int $y, int $x) {}

	/**
	 * Translate newline and carriage return / line feed
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-nl.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_nl(): bool {}

	/**
	 * Switch terminal to cooked mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns terminal to normal (cooked) mode. Initially the terminal may or may not be in cbreak mode as the mode is inherited. Therefore a program should call <code>ncurses_cbreak()</code> and <b>ncurses_nocbreak()</b> explicitly.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if any error occurred, otherwise <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-nocbreak.php
	 * @see ncurses_cbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_nocbreak(): bool {}

	/**
	 * Switch off keyboard input echo
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Prevents echoing of user typed characters.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if any error occurred, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-noecho.php
	 * @see ncurses_echo(), ncurses_getch()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_noecho(): bool {}

	/**
	 * Do not translate newline and carriage return / line feed
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-nonl.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_nonl(): bool {}

	/**
	 * Do not flush on signal characters
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-noqiflush.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_noqiflush(): void {}

	/**
	 * Switch terminal out of raw mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Switches the terminal out of raw mode. Raw mode is similar to cbreak mode, in that characters typed are immediately passed through to the user program. The difference is that in raw mode, the interrupt, quit, suspend and flow control characters are all passed through uninterpreted, instead of generating a signal.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if any error occurred, otherwise <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-noraw.php
	 * @see ncurses_raw(), ncurses_cbreak(), ncurses_nocbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_noraw(): bool {}

	/**
	 * Retrieves foreground and background colors of a color pair
	 * <p>Retrieves the foreground and background colors that constitute the given color pair. Terminal color capabilities must be initialized with <code>ncurses_start_color()</code> prior to calling this function.</p>
	 * @param int $pair <p>The number of the color pair to retrieve information for.</p>
	 * @param int $f <p>A reference to which to return the foreground color of the color pair. The information returned will be a color number referring to one of the pre-defined colors or a color defined previously by <code>ncurses_init_color()</code> if the terminal supports color changing.</p>
	 * @param int $b <p>A reference to which to return the background color of the color pair. The information returned will be a color number referring to one of the pre-defined colors or a color defined previously by <code>ncurses_init_color()</code> if the terminal supports color changing.</p>
	 * @return int <p>Returns <i>-1</i> if the function was successful, and <i>0</i> if ncurses or terminal color capabilities have not been initialized.</p>
	 * @link http://php.net/manual/en/function.ncurses-pair-content.php
	 * @see ncurses_init_pair(), ncurses_start_color()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_pair_content(int $pair, int &$f, int &$b): int {}

	/**
	 * Returns the panel above panel
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return resource <p>If panel is null, returns the bottom panel in the stack.</p>
	 * @link http://php.net/manual/en/function.ncurses-panel-above.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_panel_above($panel) {}

	/**
	 * Returns the panel below panel
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return resource
	 * @link http://php.net/manual/en/function.ncurses-panel-below.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_panel_below($panel) {}

	/**
	 * Returns the window associated with panel
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return resource
	 * @link http://php.net/manual/en/function.ncurses-panel-window.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_panel_window($panel) {}

	/**
	 * Copies a region from a pad into the virtual screen
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $pad
	 * @param int $pminrow
	 * @param int $pmincol
	 * @param int $sminrow
	 * @param int $smincol
	 * @param int $smaxrow
	 * @param int $smaxcol
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-pnoutrefresh.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_pnoutrefresh($pad, int $pminrow, int $pmincol, int $sminrow, int $smincol, int $smaxrow, int $smaxcol): int {}

	/**
	 * Copies a region from a pad into the virtual screen
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $pad
	 * @param int $pminrow
	 * @param int $pmincol
	 * @param int $sminrow
	 * @param int $smincol
	 * @param int $smaxrow
	 * @param int $smaxcol
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-prefresh.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_prefresh($pad, int $pminrow, int $pmincol, int $sminrow, int $smincol, int $smaxrow, int $smaxcol): int {}

	/**
	 * Apply padding information to the string and output it
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $text
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-putp.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_putp(string $text): int {}

	/**
	 * Flush on signal characters
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-qiflush.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_qiflush(): void {}

	/**
	 * Switch terminal into raw mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Places the terminal in raw mode. Raw mode is similar to cbreak mode, in that characters typed are immediately passed through to the user program. The difference is that in raw mode, the interrupt, quit, suspend and flow control characters are all passed through uninterpreted, instead of generating a signal.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if any error occurred, otherwise <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-raw.php
	 * @see ncurses_noraw(), ncurses_cbreak(), ncurses_nocbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_raw(): bool {}

	/**
	 * Refresh screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $ch
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-refresh.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_refresh(int $ch): int {}

	/**
	 * Replaces the window associated with panel
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-replace-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_replace_panel($panel, $window): int {}

	/**
	 * Resets the prog mode saved by def_prog_mode
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-reset-prog-mode.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_reset_prog_mode(): int {}

	/**
	 * Resets the shell mode saved by def_shell_mode
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-reset-shell-mode.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_reset_shell_mode(): int {}

	/**
	 * Restores saved terminal state
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Restores the terminal state, which was previously saved by calling <code>ncurses_savetty()</code>.</p>
	 * @return bool <p>Always returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-resetty.php
	 * @see ncurses_savetty()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_resetty(): bool {}

	/**
	 * Saves terminal state
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Saves the current terminal state. The saved terminal state can be restored with <code>ncurses_resetty()</code>.</p>
	 * @return bool <p>Always returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-savetty.php
	 * @see ncurses_resetty()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_savetty(): bool {}

	/**
	 * Dump screen content to file
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $filename
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-scr-dump.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_dump(string $filename): int {}

	/**
	 * Initialize screen from file dump
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $filename
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-scr-init.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_init(string $filename): int {}

	/**
	 * Restore screen from file dump
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $filename
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-scr-restore.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_restore(string $filename): int {}

	/**
	 * Inherit screen from file dump
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $filename
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-scr-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_set(string $filename): int {}

	/**
	 * Scroll window content up or down without changing current position
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $count
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-scrl.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scrl(int $count): int {}

	/**
	 * Places an invisible panel on top of the stack, making it visible
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-show-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_show_panel($panel): int {}

	/**
	 * Returns current soft label key attribute
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns the current soft label key attribute.</p>
	 * @return int <p>The attribute, as an integer.</p>
	 * @link http://php.net/manual/en/function.ncurses-slk-attr.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attr(): int {}

	/**
	 * Turn off the given attributes for soft function-key labels
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $intarg
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-attroff.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attroff(int $intarg): int {}

	/**
	 * Turn on the given attributes for soft function-key labels
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $intarg
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-attron.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attron(int $intarg): int {}

	/**
	 * Set given attributes for soft function-key labels
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $intarg
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-attrset.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attrset(int $intarg): int {}

	/**
	 * Clears soft labels from screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>The function <b>ncurses_slk_clear()</b> clears soft label keys from screen.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on errors, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-slk-clear.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_clear(): bool {}

	/**
	 * Sets color for soft label keys
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $intarg
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-color.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_color(int $intarg): int {}

	/**
	 * Initializes soft label key functions
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Initializes soft label key functions</p><p>This function must be called before <code>ncurses_init()</code> or <code>ncurses_newwin()</code> is called.</p>
	 * @param int $format <p>If <code>ncurses_init()</code> eventually uses a line from stdscr to emulate the soft labels, then this parameter determines how the labels are arranged of the screen.</p> <p>0 indicates a 3-2-3 arrangement of the labels, 1 indicates a 4-4 arrangement and 2 indicates the PC like 4-4-4 mode, but in addition an index line will be created.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ncurses-slk-init.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_init(int $format): bool {}

	/**
	 * Copies soft label keys to virtual screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-slk-noutrefresh.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_noutrefresh(): bool {}

	/**
	 * Copies soft label keys to screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Copies soft label keys from virtual screen to physical screen.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-refresh.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_refresh(): int {}

	/**
	 * Restores soft label keys
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Restores the soft label keys after <code>ncurses_slk_clear()</code> has been performed.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-restore.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_restore(): int {}

	/**
	 * Sets function key labels
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $labelnr
	 * @param string $label
	 * @param int $format
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-slk-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_set(int $labelnr, string $label, int $format): bool {}

	/**
	 * Forces output when ncurses_slk_noutrefresh is performed
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Forces all the soft labels to be output the next time a <code>ncurses_slk_noutrefresh()</code> is performed.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-slk-touch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_touch(): int {}

	/**
	 * Stop using 'standout' attribute
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-standend.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_standend(): int {}

	/**
	 * Start using 'standout' attribute
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-standout.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_standout(): int {}

	/**
	 * Initializes color functionality
	 * <p>Initializes color functionality in ncurses. This function must be called before any color manipulation functions are called and after <code>ncurses_init()</code> is called. It is good practice to call this function right after <code>ncurses_init()</code>.</p>
	 * @return int <p>Returns <i>0</i> on success, or <i>-1</i> if the color table could not be allocated or ncurses was not initialized.</p>
	 * @link http://php.net/manual/en/function.ncurses-start-color.php
	 * @see ncurses_can_change_color(), ncurses_has_colors()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_start_color(): int {}

	/**
	 * Returns a logical OR of all attribute flags supported by terminal
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-termattrs.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_termattrs(): bool {}

	/**
	 * Returns terminals (short)-name
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Returns terminals shortname.</p>
	 * @return string <p>Returns the shortname of the terminal, truncated to 14 characters. On errors, returns <b><code>NULL</code></b>.</p>
	 * @link http://php.net/manual/en/function.ncurses-termname.php
	 * @see ncurses_longname()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_termname(): string {}

	/**
	 * Set timeout for special key sequences
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $millisec
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-timeout.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_timeout(int $millisec): void {}

	/**
	 * Moves a visible panel to the top of the stack
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $panel
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-top-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_top_panel($panel): int {}

	/**
	 * Specify different filedescriptor for typeahead checking
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $fd
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-typeahead.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_typeahead(int $fd): int {}

	/**
	 * Put a character back into the input stream
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $keycode
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-ungetch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_ungetch(int $keycode): int {}

	/**
	 * Pushes mouse event to queue
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Pushes a KEY_MOUSE event onto the input queue and associates with this event the given state data and screen-relative character cell coordinates, specified in <code>mevent</code>.</p>
	 * @param array $mevent <p>An associative array specifying the event options:</p><ul> <li> <p>"id" : Id to distinguish multiple devices</p> </li> <li> <p>"x" : screen relative x-position in character cells</p> </li> <li> <p>"y" : screen relative y-position in character cells</p> </li> <li> <p>"z" : currently not supported</p> </li> <li> <p>"mmask" : Mouse action</p> </li> </ul>
	 * @return bool <p>Returns <b><code>FALSE</code></b> on success, <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ncurses-ungetmouse.php
	 * @see ncurses_getmouse()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_ungetmouse(array $mevent): bool {}

	/**
	 * Refreshes the virtual screen to reflect the relations between panels in the stack
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-update-panels.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_update_panels(): void {}

	/**
	 * Assign terminal default colors to color id -1
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-use-default-colors.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_use_default_colors(): bool {}

	/**
	 * Control use of environment information about terminal size
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param bool $flag
	 * @return void
	 * @link http://php.net/manual/en/function.ncurses-use-env.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_use_env(bool $flag): void {}

	/**
	 * Control use of extended names in terminfo descriptions
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param bool $flag
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-use-extended-names.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_use_extended_names(bool $flag): int {}

	/**
	 * Display the string on the terminal in the video attribute mode
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $intarg
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-vidattr.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_vidattr(int $intarg): int {}

	/**
	 * Draw a vertical line at current position using an attributed character and max. n characters long
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-vline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_vline(int $charattr, int $n): int {}

	/**
	 * Adds character at current position in a window and advance cursor
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $ch
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-waddch.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_waddch($window, int $ch): int {}

	/**
	 * Outputs text at current postion in window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param string $str
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-waddstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_waddstr($window, string $str, int $n = NULL): int {}

	/**
	 * Turns off attributes for a window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $attrs
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wattroff.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wattroff($window, int $attrs): int {}

	/**
	 * Turns on attributes for a window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $attrs
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wattron.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wattron($window, int $attrs): int {}

	/**
	 * Set the attributes for a window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $attrs
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wattrset.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wattrset($window, int $attrs): int {}

	/**
	 * Draws a border around the window using attributed characters
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>Draws the specified lines and corners around the passed <code>window</code>.</p><p>Use <code>ncurses_border()</code> for borders around the main window.</p>
	 * @param resource $window <p>The window on which we operate</p>
	 * @param int $left
	 * @param int $right
	 * @param int $top
	 * @param int $bottom
	 * @param int $tl_corner <p>Top left corner</p>
	 * @param int $tr_corner <p>Top right corner</p>
	 * @param int $bl_corner <p>Bottom left corner</p>
	 * @param int $br_corner <p>Bottom right corner</p>
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wborder.php
	 * @see ncurses_border()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wborder($window, int $left, int $right, int $top, int $bottom, int $tl_corner, int $tr_corner, int $bl_corner, int $br_corner): int {}

	/**
	 * Clears window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wclear.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wclear($window): int {}

	/**
	 * Sets windows color pairings
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $color_pair
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wcolor-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wcolor_set($window, int $color_pair): int {}

	/**
	 * Erase window contents
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-werase.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_werase($window): int {}

	/**
	 * Reads a character from keyboard (window)
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wgetch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wgetch($window): int {}

	/**
	 * Draws a horizontal line in a window at current position using an attributed character and max. n characters long
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-whline.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_whline($window, int $charattr, int $n): int {}

	/**
	 * Transforms window/stdscr coordinates
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @param bool $toscreen
	 * @return bool
	 * @link http://php.net/manual/en/function.ncurses-wmouse-trafo.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wmouse_trafo($window, int &$y, int &$x, bool $toscreen): bool {}

	/**
	 * Moves windows output position
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wmove.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wmove($window, int $y, int $x): int {}

	/**
	 * Copies window to virtual screen
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wnoutrefresh.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wnoutrefresh($window): int {}

	/**
	 * Refresh window on terminal screen
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wrefresh.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wrefresh($window): int {}

	/**
	 * End standout mode for a window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wstandend.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wstandend($window): int {}

	/**
	 * Enter standout mode for a window
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wstandout.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wstandout($window): int {}

	/**
	 * Draws a vertical line in a window at current position using an attributed character and max. n characters long
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $window
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link http://php.net/manual/en/function.ncurses-wvline.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wvline($window, int $charattr, int $n): int {}

}
