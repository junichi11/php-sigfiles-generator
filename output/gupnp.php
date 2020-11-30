<?php



namespace {

	/**
	 * Get the IP address
	 * <p>Get the IP address we advertise ourselves as using.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @return string <p>Returns the IP address for the current context and <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-get-host-ip.php
	 * @see gupnp_context_new(), gupnp_context_get_port()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_get_host_ip($context): string {}

	/**
	 * Get the port
	 * <p>Get the port that the SOAP server is running on.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @return int <p>Returns the port number for the current context and <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-get-port.php
	 * @see gupnp_context_new(), gupnp_context_get_host_ip()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_get_port($context): int {}

	/**
	 * Get the event subscription timeout
	 * <p>Get the event subscription timeout (in seconds), or 0 meaning there is no timeout.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @return int <p>The event subscription timeout in seconds.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-get-subscription-timeout.php
	 * @see gupnp_context_new(), gupnp_context_set_subscription_timeout()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_get_subscription_timeout($context): int {}

	/**
	 * Start hosting
	 * <p>Start hosting <code>local_path</code> at <code>server_path</code>. Files with the path <code>local_path</code>.LOCALE (if they exist) will be served up when LOCALE is specified in the request's Accept-Language header.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @param string $local_path <p>Path to the local file or folder to be hosted.</p>
	 * @param string $server_path <p>Web server path where <code>local_path</code> should be hosted.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-host-path.php
	 * @see gupnp_context_new(), gupnp_context_unhost_path()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_host_path($context, string $local_path, string $server_path): bool {}

	/**
	 * Create a new context
	 * <p>Create a new context with the specified host_ip and port.</p>
	 * @param string $host_ip <p>The local host's IP address, or NULL to use the IP address of the first non-loopback network interface.</p>
	 * @param int $port <p>Port to run on, or 0 if you don't care what port is used.</p>
	 * @return resource <p>A context identifier.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-new.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_new(string $host_ip = NULL, int $port = 0) {}

	/**
	 * Sets the event subscription timeout
	 * <p>Sets the event subscription timeout (in seconds) to time out. Note that any client side subscriptions will automatically be renewed.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @param int $timeout <p>The event subscription timeout in seconds. Use 0 if you don't want subscriptions to time out.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-set-subscription-timeout.php
	 * @see gupnp_context_new(), gupnp_context_get_subscription_timeout()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_set_subscription_timeout($context, int $timeout): void {}

	/**
	 * Sets a function to be called at regular intervals
	 * <p>Sets a function to be called at regular intervals.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @param int $timeout <p>A timeout in miliseconds.</p>
	 * @param mixed $callback <p>The callback function calling every <code>timeout</code> period of time. Typically, callback function takes on <code>arg</code> parameter.</p>
	 * @param mixed $arg <p>User data for <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-timeout-add.php
	 * @see gupnp_context_new()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_timeout_add($context, int $timeout, $callback, $arg = NULL): bool {}

	/**
	 * Stop hosting
	 * <p>Stop hosting the file or folder at <code>server_path</code>.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @param string $server_path <p>Web server path where the file or folder is hosted.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-context-unhost-path.php
	 * @see gupnp_context_new(), gupnp_context_host_path()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_context_unhost_path($context, string $server_path): bool {}

	/**
	 * Start browsing
	 * <p>Start the search and calls user-defined callback.</p>
	 * @param resource $cpoint <p>A control point identifier, returned by <code>gupnp_control_point_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-control-point-browse-start.php
	 * @see gupnp_control_point_new(), gupnp_control_point_browse_stop()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_control_point_browse_start($cpoint): bool {}

	/**
	 * Stop browsing
	 * <p>Stop the search and calls user-defined callback.</p>
	 * @param resource $cpoint <p>A control point identifier, returned by <code>gupnp_control_point_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-control-point-browse-stop.php
	 * @see gupnp_control_point_new(), gupnp_control_point_browse_start()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_control_point_browse_stop($cpoint): bool {}

	/**
	 * Set control point callback
	 * <p>Set control point callback function for signal.</p>
	 * @param resource $cpoint <p>A control point identifier, returned by <code>gupnp_control_point_new()</code>.</p>
	 * @param int $signal <p>The value of signal. Signal can be one of the following values:</p>  <b><code>GUPNP_SIGNAL_DEVICE_PROXY_AVAILABLE</code></b>   Emitted whenever a new device has become available.    <b><code>GUPNP_SIGNAL_DEVICE_PROXY_UNAVAILABLE</code></b>   Emitted whenever a device is not available any more.    <b><code>GUPNP_SIGNAL_SERVICE_PROXY_AVAILABLE</code></b>   Emitted whenever a new service has become available.    <b><code>GUPNP_SIGNAL_SERVICE_PROXY_UNAVAILABLE</code></b>   Emitted whenever a service is not available any more.
	 * @param mixed $callback <p>The callback function for the certain signal. Typically, callback function takes on two parameters. The <code>proxy</code> parameter's identifier being the first, and the <code>arg</code> second.</p>
	 * @param mixed $arg <p>User data for <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-control-point-callback-set.php
	 * @see gupnp_control_point_new(), gupnp_control_point_browse_start()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_control_point_callback_set($cpoint, int $signal, $callback, $arg = NULL): bool {}

	/**
	 * Create a new control point
	 * <p>Create a new control point with the specified target.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @param string $target <p>The search target. <code>target</code> should be a service or device name, such as urn:schemas-upnp-org:service:WANIPConnection:1 or urn:schemas-upnp-org:device:MediaRenderer:1.</p>
	 * @return resource <p>A control point identifier.</p>
	 * @link http://php.net/manual/en/function.gupnp-control-point-new.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_control_point_new($context, string $target) {}

	/**
	 * Set device callback function
	 * <p>Set device callback function for signal and action.</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @param int $signal <p>The value of signal. Signal can be one of the following values:</p>  <b><code>GUPNP_SIGNAL_ACTION_INVOKED</code></b>   Emitted whenever an action is invoked. Handler should process action and must call either <code>gupnp_service_action_return()</code> or <code>gupnp_service_action_return_error()</code>.    <b><code>GUPNP_SIGNAL_NOTIFY_FAILED</code></b>   Emitted whenever notification of a client fails.
	 * @param string $action_name <p>The name of action.</p>
	 * @param mixed $callback <p>The callback function for the certain signal. Typically, callback function takes on three parameters. The <code>service</code> parameter's identifier being the first, <code>action</code> parameter's identifier (in case GUPNP_SIGNAL_ACTION_INVOKED signal) or <code>error</code> parameter's message (in case GUPNP_SIGNAL_NOTIFY_FAILED signal) being the second, and the <code>arg</code> is third.</p>
	 * @param mixed $arg <p>User data for <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-device-action-callback-set.php
	 * @see gupnp_root_device_new()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_device_action_callback_set($root_device, int $signal, string $action_name, $callback, $arg = NULL): bool {}

	/**
	 * Get info of root device
	 * <p>Get info of root device.</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @return array <p>Return array wich contains the information of the root device (like location, url, udn and etc).</p>
	 * @link http://php.net/manual/en/function.gupnp-device-info-get.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_device_info_get($root_device): array {}

	/**
	 * Get the service with type
	 * <p>Get the service with type or false if no such device was found.</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @param string $type <p>The type of the service to be retrieved.</p>
	 * @return resource <p>A service identifier.</p>
	 * @link http://php.net/manual/en/function.gupnp-device-info-get-service.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_device_info_get_service($root_device, string $type) {}

	/**
	 * Check whether root device is available
	 * <p>Get whether or not <code>root_device</code> is available (announcing its presence).</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-root-device-get-available.php
	 * @see gupnp_root_device_set_available()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_root_device_get_available($root_device): bool {}

	/**
	 * Get the relative location of root device
	 * <p>Get the relative location of root device.</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @return string <p>The relative location of root device</p>
	 * @link http://php.net/manual/en/function.gupnp-root-device-get-relative-location.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_root_device_get_relative_location($root_device): string {}

	/**
	 * Create a new root device
	 * <p>Create a new root device, automatically downloading and parsing location.</p>
	 * @param resource $context <p>A context identifier, returned by <code>gupnp_context_new()</code>.</p>
	 * @param string $location <p>Location of the description file for this device, relative to the HTTP root</p>
	 * @param string $description_dir
	 * @return resource <p>A root device identifier.</p>
	 * @link http://php.net/manual/en/function.gupnp-root-device-new.php
	 * @see gupnp_root_device_set_available(), gupnp_root_device_start(), gupnp_root_device_stop()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_root_device_new($context, string $location, string $description_dir) {}

	/**
	 * Set whether or not root_device is available
	 * <p>Controls whether or not root_device is available (announcing its presence).</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @param bool $available <p>Set <b><code>TRUE</code></b> if <code>root_device</code> should be available.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-root-device-set-available.php
	 * @see gupnp_root_device_get_available()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_root_device_set_available($root_device, bool $available): bool {}

	/**
	 * Start main loop
	 * <p>Start root server's main loop.</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-root-device-start.php
	 * @see gupnp_root_device_stop()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_root_device_start($root_device): bool {}

	/**
	 * Stop main loop
	 * <p>Stop root server's main loop.</p>
	 * @param resource $root_device <p>A root device identifier, returned by <code>gupnp_root_device_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-root-device-stop.php
	 * @see gupnp_root_device_start()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_root_device_stop($root_device): bool {}

	/**
	 * Retrieves the specified action arguments
	 * <p>Retrieves the specified action arguments.</p>
	 * @param resource $action <p>A service action identifier.</p>
	 * @param string $name <p>The name of the variable to retrieve.</p>
	 * @param int $type <p>The type of the variable to retrieve. Type can be one of the following values:</p>  <b><code>GUPNP_TYPE_BOOLEAN</code></b>   Type of the variable is boolean.    <b><code>GUPNP_TYPE_INT</code></b>   Type of the variable is integer.    <b><code>GUPNP_TYPE_LONG</code></b>   Type of the variable is long.    <b><code>GUPNP_TYPE_DOUBLE</code></b>   Type of the variable is double.    <b><code>GUPNP_TYPE_FLOAT</code></b>   Type of the variable is float.    <b><code>GUPNP_TYPE_STRING</code></b>   Type of the variable is string.
	 * @return mixed <p>The value of the variable.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-action-get.php
	 * @see gupnp_service_action_set()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_action_get($action, string $name, int $type) {}

	/**
	 * Return successfully
	 * <p>Return successfully.</p>
	 * @param resource $action <p>A service action identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-action-return.php
	 * @see gupnp_service_action_return_error()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_action_return($action): bool {}

	/**
	 * Return error code
	 * <p>Return error code.</p>
	 * @param resource $action <p>A service action identifier.</p>
	 * @param int $error_code <p>The error code. Signal can be one of the following values or user defined:</p>  <b><code>GUPNP_CONTROL_ERROR_INVALID_ACTION</code></b>   The action name was invalid.    <b><code>GUPNP_CONTROL_ERROR_INVALID_ARGS</code></b>   The action arguments were invalid.    <b><code>GUPNP_CONTROL_ERROR_OUT_OF_SYNC</code></b>   Out of sync (deprecated).    <b><code>GUPNP_CONTROL_ERROR_ACTION_FAILED</code></b>   The action failed.
	 * @param string $error_description <p>The error description.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-action-return-error.php
	 * @see gupnp_service_action_return()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_action_return_error($action, int $error_code, string $error_description = NULL): bool {}

	/**
	 * Sets the specified action return values
	 * <p>Sets the specified action return values.</p>
	 * @param resource $action <p>A service action identifier.</p>
	 * @param string $name <p>The name of the variable to retrieve.</p>
	 * @param int $type <p>The type of the variable to retrieve. Type can be one of the following values:</p>  <b><code>GUPNP_TYPE_BOOLEAN</code></b>   Type of the variable is boolean.    <b><code>GUPNP_TYPE_INT</code></b>   Type of the variable is integer.    <b><code>GUPNP_TYPE_LONG</code></b>   Type of the variable is long.    <b><code>GUPNP_TYPE_DOUBLE</code></b>   Type of the variable is double.    <b><code>GUPNP_TYPE_FLOAT</code></b>   Type of the variable is float.    <b><code>GUPNP_TYPE_STRING</code></b>   Type of the variable is string.
	 * @param mixed $value <p>The value of the variable to retrieve.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-action-set.php
	 * @see gupnp_service_action_get()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_action_set($action, string $name, int $type, $value): bool {}

	/**
	 * Freeze new notifications
	 * <p>Causes new notifications to be queued up until <code>gupnp_service_thaw_notify()</code> is called.</p>
	 * @param resource $service <p>A service identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-freeze-notify.php
	 * @see gupnp_service_notify(), gupnp_service_thaw_notify()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_freeze_notify($service): bool {}

	/**
	 * Get full info of service
	 * <p>Get full info of service.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @return array <p>Return array wich contains the information of the service (like location, url, udn and etc).</p>
	 * @link http://php.net/manual/en/function.gupnp-service-info-get.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_info_get($proxy): array {}

	/**
	 * Get resource introspection of service
	 * <p>Get resource introspection of service or register callback if corresponding parameter was passed.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param mixed $callback <p>The callback function to be called when introspection object is ready. Typically, callback function takes on three parameters. The <code>introspection</code> parameter's identifier being the first, <code>error</code> parameter's message being the second, and the <code>arg</code> is third.</p>
	 * @param mixed $arg <p>User data for <code>callback</code>.</p>
	 * @return mixed <p>Return true if callback function was defined. Return introspection identifier if callback function was omited.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-info-get-introspection.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_info_get_introspection($proxy, $callback = NULL, $arg = NULL) {}

	/**
	 * Returns the state variable data
	 * <p>Returns the state variable data by the name <code>variable_name</code> in this service.</p>
	 * @param resource $introspection <p>A introspection identifier.</p>
	 * @param string $variable_name <p>The name of the variable to retreive.</p>
	 * @return array <p>Return the state variable data or <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-introspection-get-state-variable.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_introspection_get_state_variable($introspection, string $variable_name): array {}

	/**
	 * Notifies listening clients
	 * <p>Notifies listening clients that the property have changed to the specified values.</p>
	 * @param resource $service <p>A service identifier.</p>
	 * @param string $name <p>The name of the variable.</p>
	 * @param int $type <p>The type of the variable. Type can be one of the following values:</p>  <b><code>GUPNP_TYPE_BOOLEAN</code></b>   Type of the variable is boolean.    <b><code>GUPNP_TYPE_INT</code></b>   Type of the variable is integer.    <b><code>GUPNP_TYPE_LONG</code></b>   Type of the variable is long.    <b><code>GUPNP_TYPE_DOUBLE</code></b>   Type of the variable is double.    <b><code>GUPNP_TYPE_FLOAT</code></b>   Type of the variable is float.    <b><code>GUPNP_TYPE_STRING</code></b>   Type of the variable is string.
	 * @param mixed $value <p>The value of the variable.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-notify.php
	 * @see gupnp_service_freeze_notify(), gupnp_service_thaw_notify()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_notify($service, string $name, int $type, $value): bool {}

	/**
	 * Send action to the service and get value
	 * <p>Send action with parameters to the service exposed by proxy synchronously and get value.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param string $action <p>An action.</p>
	 * @param string $name <p>The action name.</p>
	 * @param int $type <p>The type of the variable to retrieve. Type can be one of the following values:</p>  <b><code>GUPNP_TYPE_BOOLEAN</code></b>   Type of the variable is boolean.    <b><code>GUPNP_TYPE_INT</code></b>   Type of the variable is integer.    <b><code>GUPNP_TYPE_LONG</code></b>   Type of the variable is long.    <b><code>GUPNP_TYPE_DOUBLE</code></b>   Type of the variable is double.    <b><code>GUPNP_TYPE_FLOAT</code></b>   Type of the variable is float.    <b><code>GUPNP_TYPE_STRING</code></b>   Type of the variable is string.
	 * @return mixed <p>Return value of the action.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-action-get.php
	 * @see gupnp_service_proxy_action_set(), gupnp_service_proxy_send_action()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_action_get($proxy, string $action, string $name, int $type) {}

	/**
	 * Send action to the service and set value
	 * <p>Send action with parameters to the service exposed by proxy synchronously and set value.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param string $action <p>An action.</p>
	 * @param string $name <p>The action name.</p>
	 * @param mixed $value <p>The action value.</p>
	 * @param int $type <p>The type of the action. Type can be one of the following values:</p>  <b><code>GUPNP_TYPE_BOOLEAN</code></b>   Type of the variable is boolean.    <b><code>GUPNP_TYPE_INT</code></b>   Type of the variable is integer.    <b><code>GUPNP_TYPE_LONG</code></b>   Type of the variable is long.    <b><code>GUPNP_TYPE_DOUBLE</code></b>   Type of the variable is double.    <b><code>GUPNP_TYPE_FLOAT</code></b>   Type of the variable is float.    <b><code>GUPNP_TYPE_STRING</code></b>   Type of the variable is string.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-action-set.php
	 * @see gupnp_service_proxy_action_get(), gupnp_service_proxy_send_action()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_action_set($proxy, string $action, string $name, $value, int $type): bool {}

	/**
	 * Sets up callback for variable change notification
	 * <p>Sets up callback to be called whenever a change notification for variable is recieved.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param string $value <p>The variable to add notification for.</p>
	 * @param int $type <p>The type of the variable. Type can be one of the following values:</p>  <b><code>GUPNP_TYPE_BOOLEAN</code></b>   Type of the variable is boolean.    <b><code>GUPNP_TYPE_INT</code></b>   Type of the variable is integer.    <b><code>GUPNP_TYPE_LONG</code></b>   Type of the variable is long.    <b><code>GUPNP_TYPE_DOUBLE</code></b>   Type of the variable is double.    <b><code>GUPNP_TYPE_FLOAT</code></b>   Type of the variable is float.    <b><code>GUPNP_TYPE_STRING</code></b>   Type of the variable is string.
	 * @param mixed $callback <p>The callback to call when variable changes. Typically, callback function takes on three parameters. The <code>variable</code> parameter being the first, <code>value</code> parameter being the second, and the <code>arg</code> is third.</p>
	 * @param mixed $arg <p>User data for <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-add-notify.php
	 * @see gupnp_service_proxy_remove_notify()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_add_notify($proxy, string $value, int $type, $callback, $arg = NULL): bool {}

	/**
	 * Set service proxy callback for signal
	 * <p>Set service proxy callback for signal.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param int $signal <p>The value of signal.</p>  <b><code>GUPNP_SIGNAL_SUBSCRIPTION_LOST</code></b>   Emitted whenever the subscription to this service has been lost due to an error condition.
	 * @param mixed $callback <p>The callback function for the certain signal. Typically, callback function takes on two parameters. <code>error</code> parameter's message being the first, and the <code>arg</code> is second.</p>
	 * @param mixed $arg <p>User data for <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-callback-set.php
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_callback_set($proxy, int $signal, $callback, $arg = NULL): bool {}

	/**
	 * Check whether subscription is valid to the service
	 * <p>Check whether subscription is valid to the service.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-get-subscribed.php
	 * @see gupnp_service_proxy_set_subscribed()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_get_subscribed($proxy): bool {}

	/**
	 * Cancels the variable change notification
	 * <p>Cancels the variable change notification.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param string $value <p>The variable to add notification for.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-remove-notify.php
	 * @see gupnp_service_proxy_add_notify()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_remove_notify($proxy, string $value): bool {}

	/**
	 * (Un)subscribes to the service
	 * <p>(Un)subscribes to the service.</p>
	 * @param resource $proxy <p>A service proxy identifier.</p>
	 * @param bool $subscribed <p>Set <b><code>TRUE</code></b> to subscribe to this service.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-proxy-set-subscribed.php
	 * @see gupnp_service_proxy_get_subscribed()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_proxy_set_subscribed($proxy, bool $subscribed): bool {}

	/**
	 * Sends out any pending notifications and stops queuing of new ones
	 * <p>Sends out any pending notifications and stops queuing of new ones.</p>
	 * @param resource $service <p>A service identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gupnp-service-thaw-notify.php
	 * @see gupnp_service_notify(), gupnp_service_freeze_notify()
	 * @since PECL gupnp >= 0.1.0
	 */
	function gupnp_service_thaw_notify($service): bool {}

	define('GUPNP_CONTROL_ERROR_ACTION_FAILED', null);

	define('GUPNP_CONTROL_ERROR_INVALID_ACTION', null);

	define('GUPNP_CONTROL_ERROR_INVALID_ARGS', null);

	define('GUPNP_CONTROL_ERROR_OUT_OF_SYNC', null);

	define('GUPNP_SIGNAL_ACTION_INVOKED', null);

	define('GUPNP_SIGNAL_DEVICE_PROXY_AVAILABLE', null);

	define('GUPNP_SIGNAL_DEVICE_PROXY_UNAVAILABLE', null);

	define('GUPNP_SIGNAL_NOTIFY_FAILED', null);

	define('GUPNP_SIGNAL_SERVICE_PROXY_AVAILABLE', null);

	define('GUPNP_SIGNAL_SERVICE_PROXY_UNAVAILABLE', null);

	define('GUPNP_SIGNAL_SUBSCRIPTION_LOST', null);

	define('GUPNP_TYPE_BOOLEAN', null);

	define('GUPNP_TYPE_DOUBLE', null);

	define('GUPNP_TYPE_FLOAT', null);

	define('GUPNP_TYPE_INT', null);

	define('GUPNP_TYPE_LONG', null);

	define('GUPNP_TYPE_STRING', null);

}
