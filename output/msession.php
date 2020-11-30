<?php



namespace {

	/**
	 * Connect to msession server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $host
	 * @param string $port
	 * @return bool
	 * @link http://php.net/manual/en/function.msession-connect.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_connect(string $host, string $port): bool {}

	/**
	 * Get session count
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.msession-count.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_count(): int {}

	/**
	 * Create a session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param string $classname
	 * @param string $data
	 * @return bool
	 * @link http://php.net/manual/en/function.msession-create.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_create(string $session, string $classname = NULL, string $data = NULL): bool {}

	/**
	 * Destroy a session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $name
	 * @return bool
	 * @link http://php.net/manual/en/function.msession-destroy.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_destroy(string $name): bool {}

	/**
	 * Close connection to msession server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return void
	 * @link http://php.net/manual/en/function.msession-disconnect.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_disconnect(): void {}

	/**
	 * Find all sessions with name and value
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $name
	 * @param string $value
	 * @return array
	 * @link http://php.net/manual/en/function.msession-find.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_find(string $name, string $value): array {}

	/**
	 * Get value from session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param string $name
	 * @param string $value
	 * @return string
	 * @link http://php.net/manual/en/function.msession-get.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_get(string $session, string $name, string $value): string {}

	/**
	 * Get array of msession variables
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @return array
	 * @link http://php.net/manual/en/function.msession-get-array.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_get_array(string $session): array {}

	/**
	 * Get data session unstructured data
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @return string
	 * @link http://php.net/manual/en/function.msession-get-data.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_get_data(string $session): string {}

	/**
	 * Increment value in session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param string $name
	 * @return string
	 * @link http://php.net/manual/en/function.msession-inc.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_inc(string $session, string $name): string {}

	/**
	 * List all sessions
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @return array
	 * @link http://php.net/manual/en/function.msession-list.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_list(): array {}

	/**
	 * List sessions with variable
	 * <p>Used for searching sessions with common attributes.</p>
	 * @param string $name <p>The name being searched.</p>
	 * @return array <p>Returns an associative array of value/session for all sessions with a variable named <code>name</code>.</p>
	 * @link http://php.net/manual/en/function.msession-listvar.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_listvar(string $name): array {}

	/**
	 * Lock a session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $name
	 * @return int
	 * @link http://php.net/manual/en/function.msession-lock.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_lock(string $name): int {}

	/**
	 * Call an escape function within the msession personality plugin
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param string $val
	 * @param string $param
	 * @return string
	 * @link http://php.net/manual/en/function.msession-plugin.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_plugin(string $session, string $val, string $param = NULL): string {}

	/**
	 * Get random string
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $param
	 * @return string
	 * @link http://php.net/manual/en/function.msession-randstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_randstr(int $param): string {}

	/**
	 * Set value in session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param string $name
	 * @param string $value
	 * @return bool
	 * @link http://php.net/manual/en/function.msession-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_set(string $session, string $name, string $value): bool {}

	/**
	 * Set msession variables from an array
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param array $tuples
	 * @return void
	 * @link http://php.net/manual/en/function.msession-set-array.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_set_array(string $session, array $tuples): void {}

	/**
	 * Set data session unstructured data
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param string $value
	 * @return bool
	 * @link http://php.net/manual/en/function.msession-set-data.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_set_data(string $session, string $value): bool {}

	/**
	 * Set/get session timeout
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param int $param
	 * @return int
	 * @link http://php.net/manual/en/function.msession-timeout.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_timeout(string $session, int $param = NULL): int {}

	/**
	 * Get unique id
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $param
	 * @param string $classname
	 * @param string $data
	 * @return string
	 * @link http://php.net/manual/en/function.msession-uniq.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_uniq(int $param, string $classname = NULL, string $data = NULL): string {}

	/**
	 * Unlock a session
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $session
	 * @param int $key
	 * @return int
	 * @link http://php.net/manual/en/function.msession-unlock.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
	 */
	function msession_unlock(string $session, int $key): int {}

}
