<?php



namespace {

	/**
	 * Artificially increase load. Could be useful in tests, benchmarking
	 * <p><b>eio_busy()</b> artificially increases load taking <code>delay</code> seconds to execute. May be used for debugging, or benchmarking.</p>
	 * @param int $delay <p>Delay in seconds</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p>This callback is called when all the group requests are done.</p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_busy()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-busy.php
	 * @see eio_nop()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_busy(int $delay, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Cancels a request
	 * <p><b>eio_cancel()</b> cancels a request specified by <code>req</code></p>
	 * @param resource $req <p>The request resource</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-cancel.php
	 * @see eio_grp_cancel()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_cancel($req): void {}

	/**
	 * Change file/directory permissions
	 * <p><b>eio_chmod()</b> changes file, or directory permissions. The new permissions are specified by <code>mode</code>.</p>
	 * @param string $path <p>Path to the target file or directory</p><p><b>Warning</b></p><p>Avoid relative paths</p>
	 * @param int $mode <p>The new permissions. E.g. <b><code>0644</code></b>.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_chmod()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-chmod.php
	 * @see eio_chown()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_chmod(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Change file/directory permissions
	 * <p>Changes file, or directory permissions.</p>
	 * @param string $path <p>Path to file or directory.</p><p><b>Warning</b></p><p>Avoid relative paths</p>
	 * @param int $uid <p>User ID. Is ignored when equal to -1.</p>
	 * @param int $gid <p>Group ID. Is ignored when equal to -1.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_chown()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-chown.php
	 * @see eio_chmod()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_chown(string $path, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Close file
	 * <p><b>eio_close()</b> closes file specified by <code>fd</code>.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_close()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-close.php
	 * @see eio_open()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_close(mixed $fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Execute custom request like any other eio_&#42; call
	 * <p><b>eio_custom()</b> executes custom function specified by <code>execute</code> processing it just like any other <i>eio_&#42;</i> call.</p>
	 * @param callable $execute <p>Specifies the request function that should match the following prototype:</p><pre> mixed execute(mixed data); </pre> <code>callback</code> is event completion callback that should match the following prototype: <pre> void callback(mixed data, mixed result); </pre> <code>data</code> is the data passed to <code>execute</code> via <code>data</code> argument without modifications <code>result</code> value returned by <code>execute</code>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_custom()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-custom.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_custom(callable $execute, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Duplicate a file descriptor
	 * <p><b>eio_dup2()</b> duplicates file descriptor.</p>
	 * @param mixed $fd <p>Source stream, Socket resource, or numeric file descriptor</p>
	 * @param mixed $fd2 <p>Target stream, Socket resource, or numeric file descriptor</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_dup2()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-dup2.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_dup2(mixed $fd, mixed $fd2, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Polls libeio until all requests proceeded
	 * <p><b>eio_event_loop()</b> polls libeio until all requests proceeded.</p>
	 * @return bool <p><b>eio_event_loop()</b> returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-event-loop.php
	 * @see eio_poll()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_event_loop(): bool {}

	/**
	 * Allows the caller to directly manipulate the allocated disk space for a file
	 * <p><b>eio_fallocate()</b> allows the caller to directly manipulate the allocated disk space for the file specified by <code>fd</code> file descriptor for the byte range starting at <code>offset</code> and continuing for <code>length</code> bytes.</p><p><b>Note</b>: <b>File should be opened for writing</b><br></p><p><b><code>EIO_O_CREAT</code></b> should be logically <i>OR</i>'d with <b><code>EIO_O_WRONLY</code></b>, or <b><code>EIO_O_RDWR</code></b></p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor, e.g. returned by <code>eio_open()</code>.</p>
	 * @param int $mode <p>Currently only one flag is supported for mode: <b><code>EIO_FALLOC_FL_KEEP_SIZE</code></b> (the same as POSIX constant <b><code>FALLOC_FL_KEEP_SIZE</code></b>).</p>
	 * @param int $offset <p>Specifies start of the byte range.</p>
	 * @param int $length <p>Specifies length the byte range.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_fallocate()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-fallocate.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fallocate(mixed $fd, int $mode, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Change file permissions
	 * <p><b>eio_fchmod()</b> changes permissions for the file specified by <code>fd</code> file descriptor.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor, e.g. returned by <code>eio_open()</code>.</p>
	 * @param int $mode <p>The new permissions. E.g. 0644.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_fchmod()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-fchmod.php
	 * @see eio_fchown()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fchmod(mixed $fd, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Change file ownership
	 * <p><b>eio_fchown()</b> changes ownership of the file specified by <code>fd</code> file descriptor.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor.</p>
	 * @param int $uid <p>User ID. Is ignored when equal to -1.</p>
	 * @param int $gid <p>Group ID. Is ignored when equal to -1.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource
	 * @link https://php.net/manual/en/function.eio-fchown.php
	 * @see eio_fchmod()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fchown(mixed $fd, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Synchronize a file's in-core state with storage device
	 * <p><b>eio_fdatasync()</b> synchronizes a file's in-core state with storage device.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor, e.g. returned by <code>eio_open()</code>.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_fdatasync()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-fdatasync.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fdatasync(mixed $fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Get file status
	 * <p><b>eio_fstat()</b> returns file status information in <code>result</code> argument of <code>callback</code></p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><code>eio_busy()</code> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-fstat.php
	 * @see eio_lstat(), eio_stat()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fstat(mixed $fd, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Get file system statistics
	 * <p><b>eio_fstatvfs()</b> returns file system statistics in <code>result</code> of <code>callback</code>.</p>
	 * @param mixed $fd <p>A file descriptor of a file within the mounted file system.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_fstatvfs()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-fstatvfs.php
	 * @see eio_statvfs()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fstatvfs(mixed $fd, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Synchronize a file's in-core state with storage device
	 * <p>Synchronize a file's in-core state with storage device</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_fsync()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-fsync.php
	 * @see eio_sync()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fsync(mixed $fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Truncate a file
	 * <p><b>eio_ftruncate()</b> causes a regular file referenced by <code>fd</code> file descriptor to be truncated to precisely <code>length</code> bytes.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor.</p>
	 * @param int $offset <p>Offset from beginning of the file</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_ftruncate()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-ftruncate.php
	 * @see eio_truncate()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_ftruncate(mixed $fd, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Change file last access and modification times
	 * <p><b>eio_futime()</b> changes file last access and modification times.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor, e.g. returned by <code>eio_open()</code></p>
	 * @param float $atime <p>Access time</p>
	 * @param float $mtime <p>Modification time</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_futime()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-futime.php
	 * @see eio_utime()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_futime(mixed $fd, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Get stream representing a variable used in internal communications with libeio
	 * <p><b>eio_get_event_stream()</b> acquires stream representing a variable used in internal communications with libeio. Could be used to bind with some event loop provided by other PECL extension, for example libevent.</p>
	 * @return mixed <p><b>eio_get_event_stream()</b> returns stream on success; otherwise, <b><code>NULL</code></b></p>
	 * @link https://php.net/manual/en/function.eio-get-event-stream.php
	 * @since PECL eio >= 0.3.1b
	 */
	function eio_get_event_stream(): mixed {}

	/**
	 * Returns string describing the last error associated with a request resource
	 * <p><b>eio_get_last_error()</b> returns string describing the last error associated with <code>req</code>.</p>
	 * @param resource $req <p>The request resource</p>
	 * @return string <p><b>eio_get_last_error()</b> returns string describing the last error associated with the request resource specified by <code>req</code>.</p><p><b>Warning</b></p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @link https://php.net/manual/en/function.eio-get-last-error.php
	 * @since PECL eio >= 1.0.0
	 */
	function eio_get_last_error($req): string {}

	/**
	 * Creates a request group
	 * <p><b>eio_grp()</b> creates a request group.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param string $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_grp()</b> returns request group resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-grp.php
	 * @see eio_grp_cancel(), eio_grp_add()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp(callable $callback, string $data = NULL) {}

	/**
	 * Adds a request to the request group
	 * <p><b>eio_grp_add()</b> adds a request to the request group.</p>
	 * @param resource $grp <p>The request group resource returned by <code>eio_grp()</code></p>
	 * @param resource $req <p>The request resource</p>
	 * @return void <p><b>eio_grp_add()</b> doesn't return a value.</p>
	 * @link https://php.net/manual/en/function.eio-grp-add.php
	 * @see eio_grp(), eio_grp_cancel(), eio_grp_limit()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp_add($grp, $req): void {}

	/**
	 * Cancels a request group
	 * <p><b>eio_grp_cancel()</b> cancels a group request specified by <code>grp</code> request group resource.</p>
	 * @param resource $grp <p>The request group resource returned by <code>eio_grp()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-grp-cancel.php
	 * @see eio_grp(), eio_grp_add()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp_cancel($grp): void {}

	/**
	 * Set group limit
	 * <p>Limit number of requests in the request group.</p>
	 * @param resource $grp <p>The request group resource.</p>
	 * @param int $limit <p>Number of requests in the group.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-grp-limit.php
	 * @see eio_grp_add()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp_limit($grp, int $limit): void {}

	/**
	 * (Re-)initialize Eio
	 * <p><b>eio_init()</b> (re-)initializes Eio. It allocates memory for internal structures of libeio and Eio itself. You may call <b>eio_init()</b> before using Eio functions. Otherwise it will be called internally first time you invoke an Eio function in a process.</p><p></p><p>This deprecated feature <i>will</i> certainly be <i>removed</i> in the future. Since Eio <i>1.1.0</i> <b>eio_init()</b> is deprecated. In Eio <i>1.0.0</i> because of <i>libeio</i>'s restrictions you <i>must</i> call <b>eio_init()</b> in child process, if you fork one by any means. You have to avoid using Eio in parent process, if you use it in childs.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-init.php
	 * @since PECL eio = 1.0.0
	 */
	function eio_init(): void {}

	/**
	 * Create a hardlink for file
	 * <p><b>eio_link()</b> creates a hardlink <code>new_path</code> for a file specified by <code>path</code>.</p>
	 * @param string $path <p>Source file path.</p>
	 * @param string $new_path <p>Target file path.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource
	 * @link https://php.net/manual/en/function.eio-link.php
	 * @see eio_symlink()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_link(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Get file status
	 * <p><b>eio_lstat()</b> returns file status information in <code>result</code> argument of <code>callback</code></p>
	 * @param string $path <p>The file path</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_lstat()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-lstat.php
	 * @see eio_stat(), eio_fstat()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_lstat(string $path, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Create directory
	 * <p><b>eio_mkdir()</b> creates directory with specified access <code>mode</code>.</p>
	 * @param string $path <p>Path for the new directory.</p>
	 * @param int $mode <p>Access mode, e.g. 0755</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_mkdir()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-mkdir.php
	 * @see eio_rmdir()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_mkdir(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Create a special or ordinary file
	 * <p><b>eio_mknod()</b> creates ordinary or special(often) file.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $path <p>Path for the new node(file).</p>
	 * @param int $mode <p>Specifies both the permissions to use and the type of node to be created. It should be a combination (using bitwise OR) of one of the file types listed below and the permissions for the new node(e.g. 0640). Possible file types are: <b><code>EIO_S_IFREG</code></b>(regular file), <b><code>EIO_S_IFCHR</code></b>(character file), <b><code>EIO_S_IFBLK</code></b>(block special file), <b><code>EIO_S_IFIFO</code></b>(FIFO - named pipe) and <b><code>EIO_S_IFSOCK</code></b>(UNIX domain socket). To specify permissions <i>EIO_S_I&#42;</i> constants could be used.</p>
	 * @param int $dev <p>If the file type is <b><code>EIO_S_IFCHR</code></b> or <b><code>EIO_S_IFBLK</code></b> then dev specifies the major and minor numbers of the newly created device special file. Otherwise <code>dev</code> ignored. See <i>mknod(2) man page for details</i>.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_mknod()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-mknod.php
	 * @see eio_open()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_mknod(string $path, int $mode, int $dev, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Does nothing, except go through the whole request cycle
	 * <p><b>eio_nop()</b> does nothing, except go through the whole request cycle. Could be useful in debugging.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_nop()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-nop.php
	 * @see eio_busy()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nop(int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Returns number of finished, but unhandled requests
	 * <p><b>eio_npending()</b> returns number of finished, but unhandled requests</p>
	 * @return int <p><b>eio_npending()</b> returns number of finished, but unhandled requests.</p>
	 * @link https://php.net/manual/en/function.eio-npending.php
	 * @see eio_nreqs(), eio_nready(), eio_nthreads()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_npending(): int {}

	/**
	 * Returns number of not-yet handled requests
	 * @return int <p><b>eio_nready()</b> returns number of not-yet handled requests</p>
	 * @link https://php.net/manual/en/function.eio-nready.php
	 * @see eio_nreqs(), eio_nthreads()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nready(): int {}

	/**
	 * Returns number of requests to be processed
	 * <p><b>eio_nreqs()</b> could be called in a custom loop calling <code>eio_poll()</code>.</p>
	 * @return int <p><b>eio_nreqs()</b> returns number of requests to be processed.</p>
	 * @link https://php.net/manual/en/function.eio-nreqs.php
	 * @see eio_poll(), eio_nready()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nreqs(): int {}

	/**
	 * Returns number of threads currently in use
	 * @return int <p><b>eio_nthreads()</b> returns number of threads currently in use.</p>
	 * @link https://php.net/manual/en/function.eio-nthreads.php
	 * @see eio_npending(), eio_nready(), eio_nreqs(), eio_set_max_idle(), eio_set_max_parallel(), eio_set_min_parallel()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nthreads(): int {}

	/**
	 * Opens a file
	 * <p><b>eio_open()</b> opens file specified by <code>path</code> in access mode <code>mode</code> with</p>
	 * @param string $path <p>Path of the file to be opened.</p><p><b>Warning</b></p><p>In some SAPIs(e.g. <i>PHP-FPM</i>) it could fail, if you don't specify full path.</p>
	 * @param int $flags <p>One of <i>EIO_O_&#42;</i> constants, or their combinations. <i>EIO_O_&#42;</i> constants have the same meaning, as their corresponding <i>O_&#42;</i> counterparts defined in <code>fnctl.h</code> C header file. Default is <b><code>EIO_O_RDWR</code></b>.</p>
	 * @param int $mode <p>One of <i>EIO_S_I&#42;</i> constants, or their combination (via bitwise OR operator). The constants have the same meaning as their <i>S_I&#42;</i> counterparts defined in sys/stat.h C header file. Required, if a file is created. Otherwise ignored.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_open()</b> returns file descriptor in <code>result</code> argument of <code>callback</code> on success; otherwise, <code>result</code> is equal to <b><code>-1</code></b>.</p>
	 * @link https://php.net/manual/en/function.eio-open.php
	 * @see eio_mknod()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_open(string $path, int $flags, int $mode, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Can be to be called whenever there are pending requests that need finishing
	 * <p><b>eio_poll()</b> can be used to implement special event loop. For this <code>eio_nreqs()</code> could be used to test if there are unprocessed requests.</p><p><b>Note</b>:</p><p>Applicable only when implementing userspace event loop.</p>
	 * @return int <p>If any request invocation returns a non-zero value, returns that value. Otherwise, it returns <b><code>0</code></b>.</p>
	 * @link https://php.net/manual/en/function.eio-poll.php
	 * @see eio_nreqs()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_poll(): int {}

	/**
	 * Read from a file descriptor at given offset
	 * <p><b>eio_read()</b> reads up to <code>length</code> bytes from <code>fd</code> file descriptor at <code>offset</code>. The read bytes are stored in <code>result</code> argument of <code>callback</code>.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor</p>
	 * @param int $length <p>Maximum number of bytes to read.</p>
	 * @param int $offset <p>Offset within the file.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_read()</b> stores read bytes in <code>result</code> argument of <code>callback</code> function.</p>
	 * @link https://php.net/manual/en/function.eio-read.php
	 * @see eio_open(), eio_write(), eio_close(), eio_event_loop()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_read(mixed $fd, int $length, int $offset, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Perform file readahead into page cache
	 * <p><b>eio_readahead()</b> populates the page cache with data from a file so that subsequent reads from that file will not block on disk I/O. See <code>READAHEAD(2)</code> man page for details.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor</p>
	 * @param int $offset <p>Starting point from which data is to be read.</p>
	 * @param int $length <p>Number of bytes to be read.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_readahead()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-readahead.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_readahead(mixed $fd, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Reads through a whole directory
	 * <p>Reads through a whole directory(via the <code>opendir</code>, <code>readdir</code> and <code>closedir</code> system calls) and returns either the names or an array in <code>result</code> argument of <code>callback</code> function, depending on the <code>flags</code> argument.</p>
	 * @param string $path <p>Directory path.</p>
	 * @param int $flags <p>Combination of <i>EIO_READDIR_&#42;</i> constants.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param string $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_readdir()</b> returns request resource on success, or <b><code>FALSE</code></b> on error. Sets <code>result</code> argument of <code>callback</code> function according to <code>flags</code>:</p>  <b><code>EIO_READDIR_DENTS</code></b> (<code>int</code>)    <b>eio_readdir()</b> flag. If specified, the result argument of the callback becomes an array with the following keys: <code>'names'</code> - array of directory names <code>'dents'</code> - array of <code>struct eio_dirent</code>-like arrays having the following keys each: <code>'name'</code> - the directory name; <code>'type'</code> - one of <i>EIO_DT_&#42;</i> constants; <code>'inode'</code> - the inode number, if available, otherwise unspecified;    <b><code>EIO_READDIR_DIRS_FIRST</code></b> (<code>int</code>)    When this flag is specified, the names will be returned in an order where likely directories come first, in optimal stat order.    <b><code>EIO_READDIR_STAT_ORDER</code></b> (<code>int</code>)    When this flag is specified, then the names will be returned in an order suitable for <code>stat</code>'ing each one. When planning to <code>stat()</code> all files in the given directory, the returned order will likely be fastest.    <b><code>EIO_READDIR_FOUND_UNKNOWN</code></b> (<code>int</code>)      <p>Node types:</p>  <b><code>EIO_DT_UNKNOWN</code></b> (<code>int</code>)    Unknown node type(very common). Further <code>stat()</code> needed.    <b><code>EIO_DT_FIFO</code></b> (<code>int</code>)    FIFO node type    <b><code>EIO_DT_CHR</code></b> (<code>int</code>)    Node type    <b><code>EIO_DT_MPC</code></b> (<code>int</code>)    Multiplexed char device (v7+coherent) node type    <b><code>EIO_DT_DIR</code></b> (<code>int</code>)    Directory node type    <b><code>EIO_DT_NAM</code></b> (<code>int</code>)    Xenix special named file node type    <b><code>EIO_DT_BLK</code></b> (<code>int</code>)    Node type    <b><code>EIO_DT_MPB</code></b> (<code>int</code>)    Multiplexed block device (v7+coherent)    <b><code>EIO_DT_REG</code></b> (<code>int</code>)    Node type    <b><code>EIO_DT_NWK</code></b> (<code>int</code>)       <b><code>EIO_DT_CMP</code></b> (<code>int</code>)    HP-UX network special node type    <b><code>EIO_DT_LNK</code></b> (<code>int</code>)    Link node type    <b><code>EIO_DT_SOCK</code></b> (<code>int</code>)    Socket node type    <b><code>EIO_DT_DOOR</code></b> (<code>int</code>)    Solaris door node type    <b><code>EIO_DT_WHT</code></b> (<code>int</code>)    Node type    <b><code>EIO_DT_MAX</code></b> (<code>int</code>)    Highest node type value
	 * @link https://php.net/manual/en/function.eio-readdir.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_readdir(string $path, int $flags, int $pri, callable $callback, string $data = NULL) {}

	/**
	 * Read value of a symbolic link
	 * @param string $path <p>Source symbolic link path</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param string $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_readlink()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-readlink.php
	 * @see eio_symlink()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_readlink(string $path, int $pri, callable $callback, string $data = NULL) {}

	/**
	 * Get the canonicalized absolute pathname
	 * <p><b>eio_realpath()</b> returns the canonicalized absolute pathname in <code>result</code> argument of <code>callback</code> function.</p>
	 * @param string $path <p>Short pathname</p>
	 * @param int $pri
	 * @param callable $callback
	 * @param string $data
	 * @return resource
	 * @link https://php.net/manual/en/function.eio-realpath.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_realpath(string $path, int $pri, callable $callback, string $data = NULL) {}

	/**
	 * Change the name or location of a file
	 * <p><b>eio_rename()</b> renames or moves a file to new location.</p>
	 * @param string $path <p>Source path</p>
	 * @param string $new_path <p>Target path</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_rename()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-rename.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_rename(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Remove a directory
	 * <p><b>eio_rmdir()</b> removes a directory.</p>
	 * @param string $path <p>Directory path</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_rmdir()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-rmdir.php
	 * @see eio_mkdir()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_rmdir(string $path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Repositions the offset of the open file associated with the fd argument to the argument offset according to the directive whence
	 * <p><b>eio_seek()</b> repositions the offset of the open file associated with stream, Socket resource, or file descriptor specified by <code>fd</code> to the argument <code>offset</code> according to the directive <code>whence</code> as follows:</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor</p>
	 * @param int $offset <p>Starting point from which data is to be read.</p>
	 * @param int $whence
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_seek()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-seek.php
	 * @since PECL eio >= 0.5.0b
	 */
	function eio_seek(mixed $fd, int $offset, int $whence, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Transfer data between file descriptors
	 * <p><b>eio_sendfile()</b> copies data between one file descriptor and another. See <code>SENDFILE(2)</code> man page for details.</p>
	 * @param mixed $out_fd <p>Output stream, Socket resource, or file descriptor. Should be opened for writing.</p>
	 * @param mixed $in_fd <p>Input stream, Socket resource, or file descriptor. Should be opened for reading.</p>
	 * @param int $offset <p>Offset within the source file.</p>
	 * @param int $length <p>Number of bytes to copy.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param string $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_sendfile()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-sendfile.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_sendfile(mixed $out_fd, mixed $in_fd, int $offset, int $length, int $pri = NULL, callable $callback = NULL, string $data = NULL) {}

	/**
	 * Set maximum number of idle threads
	 * @param int $nthreads <p>Number of idle threads.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-set-max-idle.php
	 * @see eio_nthreads(), eio_set_min_parallel(), eio_set_max_parallel()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_idle(int $nthreads): void {}

	/**
	 * Set maximum parallel threads
	 * @param int $nthreads <p>Number of parallel threads</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-set-max-parallel.php
	 * @see eio_nthreads(), eio_set_max_idle(), eio_set_min_parallel()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_parallel(int $nthreads): void {}

	/**
	 * Set maximum number of requests processed in a poll
	 * @param int $nreqs <p>Number of requests</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-set-max-poll-reqs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_poll_reqs(int $nreqs): void {}

	/**
	 * Set maximum poll time
	 * <p>Polling stops, if poll took longer than <code>nseconds</code> seconds.</p>
	 * @param float $nseconds <p>Number of seconds</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-set-max-poll-time.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_poll_time(float $nseconds): void {}

	/**
	 * Set minimum parallel thread number
	 * @param string $nthreads <p>Number of parallel threads.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.eio-set-min-parallel.php
	 * @see eio_nthreads(), eio_set_max_idle(), eio_set_max_parallel()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_min_parallel(string $nthreads): void {}

	/**
	 * Get file status
	 * <p><b>eio_stat()</b> returns file status information in <code>result</code> argument of <code>callback</code></p>
	 * @param string $path <p>The file path</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_stat()</b> returns request resource on success or <b><code>FALSE</code></b> on error. On success assigns <code>result</code> argument of <code>callback</code> to an array.</p>
	 * @link https://php.net/manual/en/function.eio-stat.php
	 * @see eio_lstat(), eio_fstat()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_stat(string $path, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Get file system statistics
	 * <p><b>eio_statvfs()</b> returns file system statistics information in <code>result</code> argument of <code>callback</code></p>
	 * @param string $path <p>Pathname of any file within the mounted file system</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_statvfs()</b> returns request resource on success or <b><code>FALSE</code></b> on error. On success assigns <code>result</code> argument of <code>callback</code> to an array.</p>
	 * @link https://php.net/manual/en/function.eio-statvfs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_statvfs(string $path, int $pri, callable $callback, mixed $data = NULL) {}

	/**
	 * Create a symbolic link
	 * <p><b>eio_symlink()</b> creates a symbolic link <code>new_path</code> to <code>path</code>.</p>
	 * @param string $path <p>Source path</p>
	 * @param string $new_path <p>Target path</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_symlink()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-symlink.php
	 * @see eio_link()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_symlink(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Commit buffer cache to disk
	 * @param int $pri
	 * @param callable $callback
	 * @param mixed $data
	 * @return resource <p><b>eio_sync()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-sync.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_sync(int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Sync a file segment with disk
	 * <p><b>eio_sync_file_range()</b> permits fine control when synchronizing the open file referred to by the file descriptor <code>fd</code> with disk.</p>
	 * @param mixed $fd <p>File descriptor</p>
	 * @param int $offset <p>The starting byte of the file range to be synchronized</p>
	 * @param int $nbytes <p>Specifies the length of the range to be synchronized, in bytes. If <code>nbytes</code> is zero, then all bytes from <code>offset</code> through to the end of file are synchronized.</p>
	 * @param int $flags <p>A bit-mask. Can include any of the following values: <b><code>EIO_SYNC_FILE_RANGE_WAIT_BEFORE</code></b>, <b><code>EIO_SYNC_FILE_RANGE_WRITE</code></b>, <b><code>EIO_SYNC_FILE_RANGE_WAIT_AFTER</code></b>. These flags have the same meaning as their <i>SYNC_FILE_RANGE_&#42;</i> counterparts(see <code>SYNC_FILE_RANGE(2)</code> man page).</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_sync_file_range()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-sync-file-range.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_sync_file_range(mixed $fd, int $offset, int $nbytes, int $flags, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Calls Linux' syncfs syscall, if available
	 * @param mixed $fd <p>File descriptor</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_syncfs()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-syncfs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_syncfs(mixed $fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Truncate a file
	 * <p><b>eio_truncate()</b> causes the regular file named by <code>path</code> to be truncated to a size of precisely <code>length</code> bytes</p>
	 * @param string $path <p>File path</p>
	 * @param int $offset <p>Offset from beginning of the file.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><code>eio_busy()</code> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-truncate.php
	 * @see eio_ftruncate()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_truncate(string $path, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Delete a name and possibly the file it refers to
	 * <p><b>eio_unlink()</b> deletes a name from the file system.</p>
	 * @param string $path <p>Path to file</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_unlink()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-unlink.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_unlink(string $path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Change file last access and modification times
	 * @param string $path <p>Path to the file.</p>
	 * @param float $atime <p>Access time</p>
	 * @param float $mtime <p>Modification time</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_utime()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-utime.php
	 * @see eio_futime()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_utime(string $path, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Write to file
	 * <p><b>eio_write()</b> writes up to <code>length</code> bytes from <code>str</code> at <code>offset</code> offset from the beginning of the file.</p>
	 * @param mixed $fd <p>Stream, Socket resource, or numeric file descriptor, e.g. returned by <code>eio_open()</code></p>
	 * @param string $str <p>Source string</p>
	 * @param int $length <p>Maximum number of bytes to write.</p>
	 * @param int $offset <p>Offset from the beginning of file.</p>
	 * @param int $pri <p>The request priority: <b><code>EIO_PRI_DEFAULT</code></b>, <b><code>EIO_PRI_MIN</code></b>, <b><code>EIO_PRI_MAX</code></b>, or <b><code>NULL</code></b>. If <b><code>NULL</code></b> passed, <code>pri</code> internally is set to <b><code>EIO_PRI_DEFAULT</code></b>.</p>
	 * @param callable $callback <p><code>callback</code> function is called when the request is done. It should match the following prototype:</p><code> void&nbsp;callback(mixed&nbsp;$data,&nbsp;int&nbsp;$result[,&nbsp;resource&nbsp;$req]); </code>   <code>data</code>  <p>is custom data passed to the request.</p>  <code>result</code>  <p>request-specific result value; basically, the value returned by corresponding system call.</p>  <code>req</code>  <p>is optional request resource which can be used with functions like <code>eio_get_last_error()</code></p>
	 * @param mixed $data <p>Arbitrary variable passed to <code>callback</code>.</p>
	 * @return resource <p><b>eio_write()</b> returns request resource on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.eio-write.php
	 * @see eio_open()
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_write(mixed $fd, string $str, int $length = 0, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, mixed $data = NULL) {}

	/**
	 * Node type
	 */
	define('EIO_DT_BLK', null);

	/**
	 * Node type
	 */
	define('EIO_DT_CHR', null);

	/**
	 * HP-UX network special node type
	 */
	define('EIO_DT_CMP', null);

	/**
	 * Directory node type
	 */
	define('EIO_DT_DIR', null);

	/**
	 * Solaris door node type
	 */
	define('EIO_DT_DOOR', null);

	/**
	 * FIFO node type
	 */
	define('EIO_DT_FIFO', null);

	/**
	 * Link node type
	 */
	define('EIO_DT_LNK', null);

	/**
	 * Highest node type value
	 */
	define('EIO_DT_MAX', null);

	/**
	 * Multiplexed block device (v7+coherent)
	 */
	define('EIO_DT_MPB', null);

	/**
	 * Multiplexed char device (v7+coherent) node type
	 */
	define('EIO_DT_MPC', null);

	/**
	 * Xenix special named file node type
	 */
	define('EIO_DT_NAM', null);

	define('EIO_DT_NWK', null);

	/**
	 * Node type
	 */
	define('EIO_DT_REG', null);

	/**
	 * Socket node type
	 */
	define('EIO_DT_SOCK', null);

	/**
	 * Unknown node type(very common). Further <code>stat()</code> needed.
	 */
	define('EIO_DT_UNKNOWN', null);

	/**
	 * Node type
	 */
	define('EIO_DT_WHT', null);

	define('EIO_FALLOC_FL_KEEP_SIZE', null);

	define('EIO_O_APPEND', null);

	define('EIO_O_CREAT', null);

	define('EIO_O_EXCL', null);

	define('EIO_O_FSYNC', null);

	define('EIO_O_NONBLOCK', null);

	define('EIO_O_RDONLY', null);

	define('EIO_O_RDWR', null);

	define('EIO_O_TRUNC', null);

	define('EIO_O_WRONLY', null);

	/**
	 * Request default prioriry
	 */
	define('EIO_PRI_DEFAULT', null);

	/**
	 * Request maximal prioriry
	 */
	define('EIO_PRI_MAX', null);

	/**
	 * Request minimal prioriry
	 */
	define('EIO_PRI_MIN', null);

	/**
	 * <code>eio_readdir()</code> flag. If specified, the result argument of the callback becomes an array with the following keys: <code>'names'</code> - array of directory names <code>'dents'</code> - array of <code>struct eio_dirent</code>-like arrays having the following keys each: <code>'name'</code> - the directory name; <code>'type'</code> - one of <i>EIO_DT_&#42;</i> constants; <code>'inode'</code> - the inode number, if available, otherwise unspecified;
	 */
	define('EIO_READDIR_DENTS', null);

	/**
	 * When this flag is specified, the names will be returned in an order where likely directories come first, in optimal stat order.
	 */
	define('EIO_READDIR_DIRS_FIRST', null);

	define('EIO_READDIR_FOUND_UNKNOWN', null);

	/**
	 * When this flag is specified, then the names will be returned in an order suitable for <code>stat</code>'ing each one. When planning to <code>stat()</code> all files in the given directory, the returned order will likely be fastest.
	 */
	define('EIO_READDIR_STAT_ORDER', null);

	define('EIO_S_IFBLK', null);

	define('EIO_S_IFCHR', null);

	define('EIO_S_IFIFO', null);

	define('EIO_S_IFREG', null);

	define('EIO_S_IFSOCK', null);

	define('EIO_S_IRGRP', null);

	define('EIO_S_IROTH', null);

	define('EIO_S_IRUSR', null);

	define('EIO_S_IWGRP', null);

	define('EIO_S_IWOTH', null);

	define('EIO_S_IWUSR', null);

	define('EIO_S_IXGRP', null);

	define('EIO_S_IXOTH', null);

	define('EIO_S_IXUSR', null);

	/**
	 * The offset is set to its current location plus <code>offset</code> bytes.
	 */
	define('EIO_SEEK_CUR', null);

	/**
	 * The offset is set to the size of the file plus <code>offset</code> bytes.
	 */
	define('EIO_SEEK_END', null);

	/**
	 * The offset is set to specified number of bytes(<code>offset</code>).
	 */
	define('EIO_SEEK_SET', null);

	define('EIO_SYNC_FILE_RANGE_WAIT_AFTER', null);

	define('EIO_SYNC_FILE_RANGE_WAIT_BEFORE', null);

	define('EIO_SYNC_FILE_RANGE_WRITE', null);

}
