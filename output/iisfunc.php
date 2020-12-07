<?php



namespace {

	/**
	 * Creates a new virtual web server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $path
	 * @param string $comment
	 * @param string $server_ip
	 * @param int $port
	 * @param string $host_name
	 * @param int $rights
	 * @param int $start_server
	 * @return int
	 * @link http://php.net/manual/en/function.iis-add-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_add_server(string $path, string $comment, string $server_ip, int $port, string $host_name, int $rights, int $start_server): int {}

	/**
	 * Gets Directory Security
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @return int
	 * @link http://php.net/manual/en/function.iis-get-dir-security.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_dir_security(int $server_instance, string $virtual_path): int {}

	/**
	 * Gets script mapping on a virtual directory for a specific extension
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param string $script_extension
	 * @return string
	 * @link http://php.net/manual/en/function.iis-get-script-map.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_script_map(int $server_instance, string $virtual_path, string $script_extension): string {}

	/**
	 * Return the instance number associated with the Comment
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $comment
	 * @return int
	 * @link http://php.net/manual/en/function.iis-get-server-by-comment.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_server_by_comment(string $comment): int {}

	/**
	 * Return the instance number associated with the Path
	 * <p>Each virtual server in IIS is associated with an instance number. <b>iis_get_server_by_path()</b> finds the instance number from the actual path to the root directory.</p>
	 * @param string $path <p>The path to the root directory</p>
	 * @return int <p>Returns the server instance number.</p>
	 * @link http://php.net/manual/en/function.iis-get-server-by-path.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_server_by_path(string $path): int {}

	/**
	 * Gets server rights
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @return int
	 * @link http://php.net/manual/en/function.iis-get-server-rights.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_server_rights(int $server_instance, string $virtual_path): int {}

	/**
	 * Returns the state for the service defined by ServiceId
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $service_id
	 * @return int
	 * @link http://php.net/manual/en/function.iis-get-service-state.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_service_state(string $service_id): int {}

	/**
	 * Removes the virtual web server indicated by ServerInstance
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @return int
	 * @link http://php.net/manual/en/function.iis-remove-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_remove_server(int $server_instance): int {}

	/**
	 * Creates application scope for a virtual directory
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param string $application_scope
	 * @return int
	 * @link http://php.net/manual/en/function.iis-set-app-settings.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_app_settings(int $server_instance, string $virtual_path, string $application_scope): int {}

	/**
	 * Sets Directory Security
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param int $directory_flags
	 * @return int
	 * @link http://php.net/manual/en/function.iis-set-dir-security.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_dir_security(int $server_instance, string $virtual_path, int $directory_flags): int {}

	/**
	 * Sets script mapping on a virtual directory
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param string $script_extension
	 * @param string $engine_path
	 * @param int $allow_scripting
	 * @return int
	 * @link http://php.net/manual/en/function.iis-set-script-map.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_script_map(int $server_instance, string $virtual_path, string $script_extension, string $engine_path, int $allow_scripting): int {}

	/**
	 * Sets server rights
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param int $directory_flags
	 * @return int
	 * @link http://php.net/manual/en/function.iis-set-server-rights.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_server_rights(int $server_instance, string $virtual_path, int $directory_flags): int {}

	/**
	 * Starts the virtual web server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @return int
	 * @link http://php.net/manual/en/function.iis-start-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_start_server(int $server_instance): int {}

	/**
	 * Starts the service defined by ServiceId
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $service_id
	 * @return int
	 * @link http://php.net/manual/en/function.iis-start-service.php
	 * @since PECL iisfunc SVN
	 */
	function iis_start_service(string $service_id): int {}

	/**
	 * Stops the virtual web server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $server_instance
	 * @return int
	 * @link http://php.net/manual/en/function.iis-stop-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_stop_server(int $server_instance): int {}

	/**
	 * Stops the service defined by ServiceId
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $service_id
	 * @return int
	 * @link http://php.net/manual/en/function.iis-stop-service.php
	 * @since PECL iisfunc SVN
	 */
	function iis_stop_service(string $service_id): int {}

	define('IIS_ANONYMOUS', null);

	define('IIS_BASIC', null);

	define('IIS_EXECUTE', null);

	define('IIS_NTLM', null);

	define('IIS_PAUSED', null);

	define('IIS_READ', null);

	define('IIS_RUNNING', null);

	define('IIS_SCRIPT', null);

	define('IIS_STARTING', null);

	define('IIS_STOPPED', null);

	define('IIS_WRITE', null);

}
