<?php



namespace {

	/**
	 * Resumes a paused service
	 * <p>Resumes a paused, named service. Requires administrative privileges or an account with appropriate rights set in the service's ACL.</p>
	 * @param string $servicename <p>The short name of the service.</p>
	 * @param string $machine <p>Optional machine name. If omitted, the local machine is used.</p>
	 * @return int <p>Returns <b><code>WIN32_NO_ERROR</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-continue-service.php
	 * @see win32_start_service(), win32_stop_service(), win32_pause_service()
	 * @since PECL win32service SVN
	 */
	function win32_continue_service(string $servicename, string $machine = NULL): int {}

	/**
	 * Creates a new service entry in the SCM database
	 * <p>Attempts to add a service into the SCM database. Administrative privileges are required for this to succeed.</p>
	 * @param array $details <p>An array of service details:</p>  <code>service</code>  <p>The short name of the service. This is the name that you will use to control the service using the <i>net</i> command. The service must be unique (no two services can share the same name), and, ideally, should avoid having spaces in the name.</p>   <code>display</code>  <p>The display name of the service. This is the name that you will see in the Services Applet.</p>   <code>description</code>  <p>The long description of the service. This is the description that you will see in the Services Applet.</p>   <code>user</code>  <p>The name of the user account under which you want the service to run. If omitted, the service will run as the LocalSystem account. If the username is specified, you must also provide a password.</p>   <code>password</code>  <p>The password that corresponds to the <code>user</code>.</p>   <code>path</code>  <p>The full path to the executable module that will be launched when the service is started. If omitted, the path to the current PHP process will be used.</p>   <code>params</code>  <p>Command line parameters to pass to the service when it starts. If you want to run a PHP script as the service, then the first parameter should be the full path to the PHP script that you intend to run. If the script name or path contains spaces, then wrap the full path to the PHP script with <i>"</i>.</p>   <code>load_order</code>  <p>Controls the load_order. This is not yet fully supported.</p>   <code>svc_type</code>  <p>Sets the service type. If omitted, the default value is <b><code>WIN32_SERVICE_WIN32_OWN_PROCESS</code></b>. Don't change this unless you know what you're doing.</p>   <code>start_type</code>  <p>Specifies how the service should be started. The default is <b><code>WIN32_SERVICE_AUTO_START</code></b> which means the service will be launched when the machine starts up.</p>   <code>error_control</code>  <p>Informs the SCM what it should do when it detects a problem with the service. The default is <b><code>WIN32_SERVER_ERROR_IGNORE</code></b>. Changing this value is not yet fully supported.</p>   <code>delayed_start</code>  <p>If <code>delayed_start</code> is set to <b><code>TRUE</code></b>, then this will inform the SCM that this service should be started after other auto-start services are started plus a short delay.</p> <p>Any service can be marked as a delayed auto-start service; however, this setting has no effect unless the service's <code>start_type</code> is <b><code>WIN32_SERVICE_AUTO_START</code></b>.</p> <p>This setting is only applicable on Windows Vista and Windows Server 2008 or greater.</p>   <code>base_priority</code>  <p>To reduce the impact on processor utilisation, it may be necessary to set a base priority lower than normal.</p> <p>The <code>base_priority</code> can be set to one of the constants define in Win32 Base Priority Classes.</p>
	 * @param string $machine <p>The optional machine name on which you want to create a service. If omitted, it will use the local machine.</p>
	 * @return mixed <p>Returns <b><code>WIN32_NO_ERROR</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-create-service.php
	 * @see win32_delete_service()
	 * @since PECL win32service SVN
	 */
	function win32_create_service(array $details, string $machine = NULL) {}

	/**
	 * Deletes a service entry from the SCM database
	 * <p>Attempts to delete a service from the SCM database. Administrative privileges are required for this to succeed.</p><p>This function really just marks the service for deletion. If other processes (such as the Services Applet) are open, then the deletion will be deferred until those applications are closed. If a service is marked for deletion, further attempts to delete it will fail, and attempts to create a new service with that name will also fail.</p>
	 * @param string $servicename <p>The short name of the service.</p>
	 * @param string $machine <p>The optional machine name. If omitted, the local machine will be used.</p>
	 * @return mixed <p>Returns <b><code>WIN32_NO_ERROR</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-delete-service.php
	 * @see win32_create_service()
	 * @since PECL win32service SVN
	 */
	function win32_delete_service(string $servicename, string $machine = NULL) {}

	/**
	 * Returns the last control message that was sent to this service
	 * <p>Returns the control code that was last sent to this service process. When running as a service you should periodically check this to determine if your service needs to stop running.</p><p>Since version 0.2.0, this function work only in "cli" SAPI. On other SAPI this function is disabled.</p>
	 * @return int <p>Returns a control constant which will be one of the Win32Service Service Control Message Constants: <b><code>WIN32_SERVICE_CONTROL_CONTINUE</code></b>, <b><code>WIN32_SERVICE_CONTROL_INTERROGATE</code></b>, <b><code>WIN32_SERVICE_CONTROL_PAUSE</code></b>, <b><code>WIN32_SERVICE_CONTROL_PRESHUTDOWN</code></b>, <b><code>WIN32_SERVICE_CONTROL_SHUTDOWN</code></b>, <b><code>WIN32_SERVICE_CONTROL_STOP</code></b>.</p>
	 * @link http://php.net/manual/en/function.win32-get-last-control-message.php
	 * @see win32_start_service_ctrl_dispatcher(), win32_set_service_status()
	 * @since PECL win32service SVN
	 */
	function win32_get_last_control_message(): int {}

	/**
	 * Pauses a service
	 * <p>Pauses a named service. Requires administrative privileges or an account with appropriate rights set in the service's ACL.</p>
	 * @param string $servicename <p>The short name of the service.</p>
	 * @param string $machine <p>Optional machine name. If omitted, the local machine is used.</p>
	 * @return int <p>Returns <b><code>WIN32_NO_ERROR</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-pause-service.php
	 * @see win32_start_service(), win32_stop_service(), win32_continue_service()
	 * @since PECL win32service SVN
	 */
	function win32_pause_service(string $servicename, string $machine = NULL): int {}

	/**
	 * Queries the status of a service
	 * <p>Queries the current status for a service, returning an array of information.</p>
	 * @param string $servicename <p>The short name of the service.</p>
	 * @param string $machine <p>The optional machine name. If omitted, the local machine will be used.</p>
	 * @return mixed <p>Returns an array consisting of the following information on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>  <code>ServiceType</code>  <p>The dwServiceType. See Win32Service Service Type Bitmasks.</p>   <code>CurrentState</code>  <p>The dwCurrentState. See Win32Service Service Status Constants.</p>   <code>ControlsAccepted</code>  <p>Which service controls are accepted by the service. See Win32Service Service Control Message Accepted Bitmasks.</p>   <code>Win32ExitCode</code>  <p>If the service exited, the return code from the process.</p>   <code>ServiceSpecificExitCode</code>  <p>If the service exited with an error condition, the service specific code that is logged in the event log is visible here.</p>   <code>CheckPoint</code>  <p>If the service is shutting down, holds the current check point number. This is used by the SCM as a kind of heart-beat to detect a wedged service process. The value of the check point is best interpreted in conjunction with the WaitHint value.</p>   <code>WaitHint</code>  <p>If the service is shutting down it will set WaitHint to a checkpoint value that will indicate 100% completion. This can be used to implement a progress indicator.</p>   <code>ProcessId</code>  <p>The Windows process identifier. If 0, the process is not running.</p>   <code>ServiceFlags</code>  <p>The dwServiceFlags. See Win32Service Service Service Flag Constants.</p>
	 * @link http://php.net/manual/en/function.win32-query-service-status.php
	 * @since PECL win32service SVN
	 */
	function win32_query_service_status(string $servicename, string $machine = NULL) {}

	/**
	 * Update the service status
	 * <p>Informs the SCM of the current status of a running service. This call is only valid for a running service process.</p><p>Since version 0.2.0, this function work only in "cli" SAPI. On other SAPI this function is disabled.</p>
	 * @param int $status <p>The service status code, one of <b><code>WIN32_SERVICE_RUNNING</code></b>, <b><code>WIN32_SERVICE_STOPPED</code></b>, <b><code>WIN32_SERVICE_STOP_PENDING</code></b>, <b><code>WIN32_SERVICE_START_PENDING</code></b>, <b><code>WIN32_SERVICE_CONTINUE_PENDING</code></b>, <b><code>WIN32_SERVICE_PAUSE_PENDING</code></b>, <b><code>WIN32_SERVICE_PAUSED</code></b>.</p>
	 * @param int $checkpoint <p>The checkpoint value the service increments periodically to report its progress during a lengthy start, stop, pause, or continue operation. For example, the service should increment this value as it completes each step of its initialization when it is starting up.</p> <p>The <code>checkpoint</code> is only valid when the <code>status</code> is one of <b><code>WIN32_SERVICE_STOP_PENDING</code></b>, <b><code>WIN32_SERVICE_START_PENDING</code></b>, <b><code>WIN32_SERVICE_CONTINUE_PENDING</code></b> or <b><code>WIN32_SERVICE_PAUSE_PENDING</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-set-service-status.php
	 * @see win32_start_service_ctrl_dispatcher(), win32_get_last_control_message()
	 * @since PECL win32service SVN
	 */
	function win32_set_service_status(int $status, int $checkpoint = 0): bool {}

	/**
	 * Starts a service
	 * <p>Attempts to start the named service. Requires administrative privileges or an account with appropriate rights set in the service's ACL.</p>
	 * @param string $servicename <p>The short name of the service.</p>
	 * @param string $machine <p>Optional machine name. If omitted, the local machine is used.</p>
	 * @return int <p>Returns <b><code>WIN32_NO_ERROR</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-start-service.php
	 * @see win32_stop_service(), win32_pause_service(), win32_continue_service()
	 * @since PECL win32service SVN
	 */
	function win32_start_service(string $servicename, string $machine = NULL): int {}

	/**
	 * Registers the script with the SCM, so that it can act as the service with the given name
	 * <p>When launched via the Service Control Manager, a service process is required to "check-in" with it to establish service monitoring and communication facilities. This function performs the check-in by spawning a thread to handle the lower-level communication with the service control manager.</p><p>Once started, the service process should do 2 things. The first is to tell the Service Control Manager that the service is running. This is achieved by calling <code>win32_set_service_status()</code> with the <b><code>WIN32_SERVICE_RUNNING</code></b> constant. If you need to perform some lengthy process before the service is actually running, then you can use the <b><code>WIN32_SERVICE_START_PENDING</code></b> constant. The second is to continue to check-in with the service control manager so that it can determine if it should terminate. This is achieved by periodically calling <code>win32_get_last_control_message()</code> and handling the return code appropriately.</p><p>Since version 0.2.0, this function work only in "cli" SAPI. On other SAPI this function is disabled.</p>
	 * @param string $name <p>The short-name of the service, as registered by <code>win32_create_service()</code>.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-start-service-ctrl-dispatcher.php
	 * @see win32_set_service_status(), win32_get_last_control_message()
	 * @since PECL win32service SVN
	 */
	function win32_start_service_ctrl_dispatcher(string $name) {}

	/**
	 * Stops a service
	 * <p>Stops a named service. Requires administrative privileges or an account with appropriate rights set in the service's ACL.</p>
	 * @param string $servicename <p>The short name of the service.</p>
	 * @param string $machine <p>Optional machine name. If omitted, the local machine is used.</p>
	 * @return int <p>Returns <b><code>WIN32_NO_ERROR</code></b> on success, <b><code>FALSE</code></b> if there is a problem with the parameters or a Win32 Error Code on failure.</p>
	 * @link http://php.net/manual/en/function.win32-stop-service.php
	 * @see win32_start_service(), win32_pause_service(), win32_continue_service()
	 * @since PECL win32service SVN
	 */
	function win32_stop_service(string $servicename, string $machine = NULL): int {}

	/**
	 * Process that has priority above WIN32_NORMAL_PRIORITY_CLASS but below WIN32_HIGH_PRIORITY_CLASS.
	 */
	define('WIN32_ABOVE_NORMAL_PRIORITY_CLASS', null);

	/**
	 * Process that has priority above WIN32_IDLE_PRIORITY_CLASS but below WIN32_NORMAL_PRIORITY_CLASS.
	 */
	define('WIN32_BELOW_NORMAL_PRIORITY_CLASS', null);

	/**
	 * The handle to the SCM database does not have the appropriate access rights.
	 */
	define('WIN32_ERROR_ACCESS_DENIED', null);

	/**
	 * A circular service dependency was specified.
	 */
	define('WIN32_ERROR_CIRCULAR_DEPENDENCY', null);

	/**
	 * The specified database does not exist.
	 */
	define('WIN32_ERROR_DATABASE_DOES_NOT_EXIST', null);

	/**
	 * The service cannot be stopped because other running services are dependent on it.
	 */
	define('WIN32_ERROR_DEPENDENT_SERVICES_RUNNING', null);

	/**
	 * The display name already exists in the service control manager database either as a service name or as another display name.
	 */
	define('WIN32_ERROR_DUPLICATE_SERVICE_NAME', null);

	/**
	 * This error is returned if the program is being run as a console application rather than as a service. If the program will be run as a console application for debugging purposes, structure it such that service-specific code is not called.
	 */
	define('WIN32_ERROR_FAILED_SERVICE_CONTROLLER_CONNECT', null);

	/**
	 * The buffer is too small for the service status structure. Nothing was written to the structure.
	 */
	define('WIN32_ERROR_INSUFFICIENT_BUFFER', null);

	/**
	 * The specified service status structure is invalid.
	 */
	define('WIN32_ERROR_INVALID_DATA', null);

	/**
	 * The handle to the specified service control manager database is invalid.
	 */
	define('WIN32_ERROR_INVALID_HANDLE', null);

	/**
	 * The InfoLevel parameter contains an unsupported value.
	 */
	define('WIN32_ERROR_INVALID_LEVEL', null);

	/**
	 * The specified service name is invalid.
	 */
	define('WIN32_ERROR_INVALID_NAME', null);

	/**
	 * A parameter that was specified is invalid.
	 */
	define('WIN32_ERROR_INVALID_PARAMETER', null);

	/**
	 * The user account name specified in the <code>user</code> parameter does not exist. See <code>win32_create_service()</code>.
	 */
	define('WIN32_ERROR_INVALID_SERVICE_ACCOUNT', null);

	/**
	 * The requested control code is not valid, or it is unacceptable to the service.
	 */
	define('WIN32_ERROR_INVALID_SERVICE_CONTROL', null);

	/**
	 * The service binary file could not be found.
	 */
	define('WIN32_ERROR_PATH_NOT_FOUND', null);

	/**
	 * An instance of the service is already running.
	 */
	define('WIN32_ERROR_SERVICE_ALREADY_RUNNING', null);

	/**
	 * The requested control code cannot be sent to the service because the state of the service is <b><code>WIN32_SERVICE_STOPPED</code></b>, <b><code>WIN32_SERVICE_START_PENDING</code></b>, or <b><code>WIN32_SERVICE_STOP_PENDING</code></b>.
	 */
	define('WIN32_ERROR_SERVICE_CANNOT_ACCEPT_CTRL', null);

	/**
	 * The database is locked.
	 */
	define('WIN32_ERROR_SERVICE_DATABASE_LOCKED', null);

	/**
	 * The service depends on a service that does not exist or has been marked for deletion.
	 */
	define('WIN32_ERROR_SERVICE_DEPENDENCY_DELETED', null);

	/**
	 * The service depends on another service that has failed to start.
	 */
	define('WIN32_ERROR_SERVICE_DEPENDENCY_FAIL', null);

	/**
	 * The service has been disabled.
	 */
	define('WIN32_ERROR_SERVICE_DISABLED', null);

	/**
	 * The specified service does not exist as an installed service.
	 */
	define('WIN32_ERROR_SERVICE_DOES_NOT_EXIST', null);

	/**
	 * The specified service already exists in this database.
	 */
	define('WIN32_ERROR_SERVICE_EXISTS', null);

	/**
	 * The service did not start due to a logon failure. This error occurs if the service is configured to run under an account that does not have the "Log on as a service" right.
	 */
	define('WIN32_ERROR_SERVICE_LOGON_FAILED', null);

	/**
	 * The specified service has already been marked for deletion.
	 */
	define('WIN32_ERROR_SERVICE_MARKED_FOR_DELETE', null);

	/**
	 * A thread could not be created for the service.
	 */
	define('WIN32_ERROR_SERVICE_NO_THREAD', null);

	/**
	 * The service has not been started.
	 */
	define('WIN32_ERROR_SERVICE_NOT_ACTIVE', null);

	/**
	 * The process for the service was started, but it did not call StartServiceCtrlDispatcher, or the thread that called StartServiceCtrlDispatcher may be blocked in a control handler function.
	 */
	define('WIN32_ERROR_SERVICE_REQUEST_TIMEOUT', null);

	/**
	 * The system is shutting down; this function cannot be called.
	 */
	define('WIN32_ERROR_SHUTDOWN_IN_PROGRESS', null);

	/**
	 * Process that performs time-critical tasks that must be executed immediately. The threads of the process preempt the threads of normal or idle priority class processes. An example is the Task List, which must respond quickly when called by the user, regardless of the load on the operating system. Use extreme care when using the high-priority class, because a high-priority class application can use nearly all available CPU time.
	 */
	define('WIN32_HIGH_PRIORITY_CLASS', null);

	/**
	 * Process whose threads run only when the system is idle. The threads of the process are preempted by the threads of any process running in a higher priority class. An example is a screen saver. The idle-priority class is inherited by child processes.
	 */
	define('WIN32_IDLE_PRIORITY_CLASS', null);

	/**
	 * No error.
	 */
	define('WIN32_NO_ERROR', null);

	/**
	 * Process with no special scheduling needs.
	 */
	define('WIN32_NORMAL_PRIORITY_CLASS', null);

	/**
	 * Process that has the highest possible priority. The threads of the process preempt the threads of all other processes, including operating system processes performing important tasks. For example, a real-time process that executes for more than a very brief interval can cause disk caches not to flush or cause the mouse to be unresponsive.
	 */
	define('WIN32_REALTIME_PRIORITY_CLASS', null);

	/**
	 * The service can be paused and continued. This control code allows the service to receive <b><code>WIN32_SERVICE_CONTROL_PAUSE</code></b> and <b><code>WIN32_SERVICE_CONTROL_CONTINUE</code></b> notifications.
	 */
	define('WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE', null);

	/**
	 * The service can perform preshutdown tasks. This control code enables the service to receive <b><code>WIN32_SERVICE_CONTROL_PRESHUTDOWN</code></b> notifications. This value is not supported by Windows Server 2003 and Windows XP/2000.
	 */
	define('WIN32_SERVICE_ACCEPT_PRESHUTDOWN', null);

	/**
	 * The service is notified when system shutdown occurs. This control code allows the service to receive <b><code>WIN32_SERVICE_CONTROL_SHUTDOWN</code></b> notifications.
	 */
	define('WIN32_SERVICE_ACCEPT_SHUTDOWN', null);

	/**
	 * The service can be stopped. This control code allows the service to receive <b><code>WIN32_SERVICE_CONTROL_STOP</code></b> notifications.
	 */
	define('WIN32_SERVICE_ACCEPT_STOP', null);

	/**
	 * A service started automatically by the service control manager during system startup.
	 */
	define('WIN32_SERVICE_AUTO_START', null);

	/**
	 * The service continue is pending.
	 */
	define('WIN32_SERVICE_CONTINUE_PENDING', null);

	/**
	 * Notifies a paused service that it should resume.
	 */
	define('WIN32_SERVICE_CONTROL_CONTINUE', null);

	/**
	 * Notifies a service that it should report its current status information to the service control manager.
	 */
	define('WIN32_SERVICE_CONTROL_INTERROGATE', null);

	/**
	 * Notifies a service that it should pause.
	 */
	define('WIN32_SERVICE_CONTROL_PAUSE', null);

	/**
	 * Notifies a service that the system will be shutting down. A service that handles this notification blocks system shutdown until the service stops or the preshutdown time-out interval expires. This value is not supported by Windows Server 2003 and Windows XP/2000.
	 */
	define('WIN32_SERVICE_CONTROL_PRESHUTDOWN', null);

	/**
	 * Notifies a service that the system is shutting down so the service can perform cleanup tasks. If a service accepts this control code, it must stop after it performs its cleanup tasks. After the SCM sends this control code, it will not send other control codes to the service.
	 */
	define('WIN32_SERVICE_CONTROL_SHUTDOWN', null);

	/**
	 * Notifies a service that it should stop.
	 */
	define('WIN32_SERVICE_CONTROL_STOP', null);

	/**
	 * A service started by the service control manager when a process calls the StartService function.
	 */
	define('WIN32_SERVICE_DEMAND_START', null);

	/**
	 * A service that cannot be started. Attempts to start the service result in the error code <b><code>WIN32_ERROR_SERVICE_DISABLED</code></b>.
	 */
	define('WIN32_SERVICE_DISABLED', null);

	/**
	 * The startup program ignores the error and continues the startup operation.
	 */
	define('WIN32_SERVICE_ERROR_IGNORE', null);

	/**
	 * The startup program logs the error in the event log but continues the startup operation.
	 */
	define('WIN32_SERVICE_ERROR_NORMAL', null);

	/**
	 * The service can interact with the desktop. This option is not available on Windows Vista or later.
	 */
	define('WIN32_SERVICE_INTERACTIVE_PROCESS', null);

	/**
	 * The service pause is pending.
	 */
	define('WIN32_SERVICE_PAUSE_PENDING', null);

	/**
	 * The service is paused.
	 */
	define('WIN32_SERVICE_PAUSED', null);

	/**
	 * The service is running.
	 */
	define('WIN32_SERVICE_RUNNING', null);

	/**
	 * The service runs in a system process that must always be running.
	 */
	define('WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS', null);

	/**
	 * The service is starting.
	 */
	define('WIN32_SERVICE_START_PENDING', null);

	/**
	 * The service is stopping.
	 */
	define('WIN32_SERVICE_STOP_PENDING', null);

	/**
	 * The service is not running.
	 */
	define('WIN32_SERVICE_STOPPED', null);

	/**
	 * The service runs in its own process.
	 */
	define('WIN32_SERVICE_WIN32_OWN_PROCESS', null);

	/**
	 * The service runs in its own process and can interact with the desktop. This option is not available on Windows Vista or later.
	 */
	define('WIN32_SERVICE_WIN32_OWN_PROCESS_INTERACTIVE', null);

}
