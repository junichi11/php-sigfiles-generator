<?php



namespace {

	/**
	 * Increments error counts and sets last error message
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $error_level
	 * @param string $error_message
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.session-pgsql-add-error.php
	 * @see session_pgsql_get_error()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_add_error(int $error_level, string $error_message = NULL): bool {}

	/**
	 * Returns number of errors and last error message
	 * <p>Get the number of errors and optional the error messages.</p>
	 * @param bool $with_error_message <p>Set to <b><code>TRUE</code></b> the literal error message for each error is also returned.</p>
	 * @return array <p>The number of errors are returned as <code>array</code>.</p>
	 * @link http://php.net/manual/en/function.session-pgsql-get-error.php
	 * @see session_pgsql_add_error()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_get_error(bool $with_error_message = FALSE): array {}

	/**
	 * Get custom field value
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.session-pgsql-get-field.php
	 * @see session_pgsql_set_field()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_get_field(): string {}

	/**
	 * Reset connection to session database servers
	 * <p>Reset the connection to the session database servers.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.session-pgsql-reset.php
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_reset(): bool {}

	/**
	 * Set custom field value
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $value
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.session-pgsql-set-field.php
	 * @see session_pgsql_get_field()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_set_field(string $value): bool {}

	/**
	 * Get current save handler status
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return array
	 * @link http://php.net/manual/en/function.session-pgsql-status.php
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_status(): array {}

}
