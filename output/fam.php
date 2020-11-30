<?php



namespace {

	/**
	 * Terminate monitoring
	 * <p>Terminates monitoring on a resource.</p><p>In addition an <b><code>FAMAcknowledge</code></b> event occurs.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param resource $fam_monitor <p>A resource returned by one of the <i>fam_monitor_XXX</i> functions</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fam-cancel-monitor.php
	 * @see fam_monitor_file(), fam_monitor_directory(), fam_monitor_collection(), fam_suspend_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_cancel_monitor($fam, $fam_monitor): bool {}

	/**
	 * Close FAM connection
	 * <p>Closes a connection to the FAM service.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.fam-close.php
	 * @since PHP 5 < 5.1.0
	 */
	function fam_close($fam): void {}

	/**
	 * Monitor a collection of files in a directory for changes
	 * <p>Requests monitoring for a collection of files within a directory.</p><p>A FAM event will be generated whenever the status of the files change. The possible event codes are described in detail in the constants part of this section.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param string $dirname <p>Directory path to the monitored files</p>
	 * @param int $depth <p>The maximum search <code>depth</code> starting from this directory</p>
	 * @param string $mask <p>A shell pattern <code>mask</code> restricting the file names to look for</p>
	 * @return resource <p>Returns a monitoring resource or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.fam-monitor-collection.php
	 * @see fam_monitor_file(), fam_monitor_directory(), fam_cancel_monitor(), fam_suspend_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_monitor_collection($fam, string $dirname, int $depth, string $mask) {}

	/**
	 * Monitor a directory for changes
	 * <p>Requests monitoring for a directory and all contained files.</p><p>A FAM event will be generated whenever the status of the directory (i.e. the result of function <code>stat()</code> on that directory) or its content (i.e. the results of <code>readdir()</code>) changes.</p><p>The possible event codes are described in detail in the constants part of this section.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param string $dirname <p>Path to the monitored directory</p>
	 * @return resource <p>Returns a monitoring resource or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.fam-monitor-directory.php
	 * @see fam_monitor_file(), fam_monitor_collection(), fam_cancel_monitor(), fam_suspend_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_monitor_directory($fam, string $dirname) {}

	/**
	 * Monitor a regular file for changes
	 * <p>Requests monitoring for a single file. A FAM event will be generated whenever the file status changes (i.e. the result of function <code>stat()</code> on that file).</p><p>The possible event codes are described in detail in the constants part of this section.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param string $filename <p>Path to the monitored file</p>
	 * @return resource <p>Returns a monitoring resource or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.fam-monitor-file.php
	 * @see fam_monitor_directory(), fam_monitor_collection(), fam_cancel_monitor(), fam_suspend_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_monitor_file($fam, string $filename) {}

	/**
	 * Get next pending FAM event
	 * <p>Returns the next pending FAM event.</p><p>The function will block until an event is available which can be checked for using <code>fam_pending()</code>.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @return array <p>Returns an array that contains a FAM event code in the '<i>code</i>' element, the path of the file this event applies to in the '<i>filename</i>' element and optionally a hostname in the '<i>hostname</i>' element.</p><p>The possible event codes are described in detail in the constants part of this section.</p>
	 * @link http://php.net/manual/en/function.fam-next-event.php
	 * @see fam_pending()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_next_event($fam): array {}

	/**
	 * Open connection to FAM daemon
	 * <p>Opens a connection to the FAM service daemon.</p>
	 * @param string $appname <p>A string identifying the application for logging reasons</p>
	 * @return resource <p>Returns a resource representing a connection to the FAM service on success or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.fam-open.php
	 * @see fam_close()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_open(string $appname = NULL) {}

	/**
	 * Check for pending FAM events
	 * <p>Checks for pending FAM events.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @return int <p>Returns non-zero if events are available to be fetched using <code>fam_next_event()</code>, zero otherwise.</p>
	 * @link http://php.net/manual/en/function.fam-pending.php
	 * @see fam_next_event()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_pending($fam): int {}

	/**
	 * Resume suspended monitoring
	 * <p>Resumes monitoring of a resource previously suspended using <code>fam_suspend_monitor()</code>.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param resource $fam_monitor <p>A resource returned by one of the <i>fam_monitor_XXX</i> functions</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fam-resume-monitor.php
	 * @see fam_suspend_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_resume_monitor($fam, $fam_monitor): bool {}

	/**
	 * Temporarily suspend monitoring
	 * <p><b>fam_suspend_monitor()</b> temporarily suspend monitoring of a resource.</p><p>Monitoring can later be continued using <code>fam_resume_monitor()</code> without the need of requesting a complete new monitor.</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param resource $fam_monitor <p>A resource returned by one of the <i>fam_monitor_XXX</i> functions</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fam-suspend-monitor.php
	 * @see fam_cancel_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_suspend_monitor($fam, $fam_monitor): bool {}

	/**
	 * An event in response to <code>fam_cancel_monitor()</code>.
	 */
	define('FAMAcknowledge', null);

	/**
	 * Some value which can be obtained with fstat(1) changed for a file or directory.
	 */
	define('FAMChanged', null);

	/**
	 * A file was created in a directory.
	 */
	define('FAMCreated', null);

	/**
	 * A file or directory was deleted or renamed.
	 */
	define('FAMDeleted', null);

	/**
	 * Event after the last FAMEExists event.
	 */
	define('FAMEndExist', null);

	/**
	 * An event upon request to monitor a file or directory. When a directory is monitored, an event for that directory and every file contained in that directory is issued.
	 */
	define('FAMExists', null);

	/**
	 * This event never occurs.
	 */
	define('FAMMoved', null);

	/**
	 * An executable file started executing.
	 */
	define('FAMStartExecuting', null);

	/**
	 * An executable file that was running finished.
	 */
	define('FAMStopExecuting', null);

}
