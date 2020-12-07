<?php



namespace {

	/**
	 * Allocates space for a file to be uploaded
	 * <p>Sends an <code>ALLO</code> command to the remote FTP server to allocate space for a file to be uploaded.</p><p><b>Note</b>:</p><p>Many FTP servers do not support this command. These servers may return a failure code (<b><code>FALSE</code></b>) indicating the command is not supported or a success code (<b><code>TRUE</code></b>) to indicate that pre-allocation is not necessary and the client should continue as though the operation were successful. Because of this, it may be best to reserve this function for servers which explicitly require preallocation.</p><p></p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param int $filesize <p>The number of bytes to allocate.</p>
	 * @param string $result <p>A textual representation of the servers response will be returned by reference in <code>result</code> if a variable is provided.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-alloc.php
	 * @see ftp_put(), ftp_fput()
	 * @since PHP 5, PHP 7
	 */
	function ftp_alloc($ftp_stream, int $filesize, string &$result = NULL): bool {}

	/**
	 * Append the contents of a file to another file on the FTP server
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $ftp
	 * @param string $remote_file
	 * @param string $local_file
	 * @param int $mode
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-append.php
	 * @since PHP 7 >= 7.2.0
	 */
	function ftp_append($ftp, string $remote_file, string $local_file, int $mode = FTP_BINARY): bool {}

	/**
	 * Changes to the parent directory
	 * <p>Changes to the parent directory.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-cdup.php
	 * @see ftp_chdir(), ftp_pwd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_cdup($ftp_stream): bool {}

	/**
	 * Changes the current directory on a FTP server
	 * <p>Changes the current directory to the specified one.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $directory <p>The target directory.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If changing directory fails, PHP will also throw a warning.</p>
	 * @link http://php.net/manual/en/function.ftp-chdir.php
	 * @see ftp_cdup(), ftp_pwd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_chdir($ftp_stream, string $directory): bool {}

	/**
	 * Set permissions on a file via FTP
	 * <p>Sets the permissions on the specified remote file to <code>mode</code>.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param int $mode <p>The new permissions, given as an <i>octal</i> value.</p>
	 * @param string $filename <p>The remote file.</p>
	 * @return int <p>Returns the new file permissions on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-chmod.php
	 * @see chmod()
	 * @since PHP 5, PHP 7
	 */
	function ftp_chmod($ftp_stream, int $mode, string $filename): int {}

	/**
	 * Closes an FTP connection
	 * <p><b>ftp_close()</b> closes the given link identifier and releases the <code>resource</code>.</p><p><b>Note</b>:</p><p>After calling this function, you can no longer use the FTP connection and must create a new one with <code>ftp_connect()</code>.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-close.php
	 * @see ftp_connect()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ftp_close($ftp_stream): bool {}

	/**
	 * Opens an FTP connection
	 * <p><b>ftp_connect()</b> opens an FTP connection to the specified <code>host</code>.</p>
	 * @param string $host <p>The FTP server address. This parameter shouldn't have any trailing slashes and shouldn't be prefixed with <code>ftp://</code>.</p>
	 * @param int $port <p>This parameter specifies an alternate port to connect to. If it is omitted or set to zero, then the default FTP port, 21, will be used.</p>
	 * @param int $timeout <p>This parameter specifies the timeout in seconds for all subsequent network operations. If omitted, the default value is 90 seconds. The timeout can be changed and queried at any time with <code>ftp_set_option()</code> and <code>ftp_get_option()</code>.</p>
	 * @return resource <p>Returns a FTP stream on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-connect.php
	 * @see ftp_close(), ftp_ssl_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_connect(string $host, int $port = 21, int $timeout = 90) {}

	/**
	 * Deletes a file on the FTP server
	 * <p><b>ftp_delete()</b> deletes the file specified by <code>path</code> from the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $path <p>The file to delete.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-delete.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_delete($ftp_stream, string $path): bool {}

	/**
	 * Requests execution of a command on the FTP server
	 * <p>Sends a SITE EXEC <code>command</code> request to the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $command <p>The command to execute.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the command was successful (server sent response code: <code>200</code>); otherwise returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.ftp-exec.php
	 * @see ftp_raw()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function ftp_exec($ftp_stream, string $command): bool {}

	/**
	 * Downloads a file from the FTP server and saves to an open file
	 * <p><b>ftp_fget()</b> retrieves <code>remote_file</code> from the FTP server, and writes it to the given file pointer.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param resource $handle <p>An open file pointer in which we store the data.</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $resumepos <p>The position in the remote file to start downloading from.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-fget.php
	 * @see ftp_get(), ftp_nb_get(), ftp_nb_fget()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_fget($ftp_stream, $handle, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0): bool {}

	/**
	 * Uploads from an open file to the FTP server
	 * <p><b>ftp_fput()</b> uploads the data from a file pointer to a remote file on the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param resource $handle <p>An open file pointer on the local file. Reading stops at end of file.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $startpos <p>The position in the remote file to start uploading to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-fput.php
	 * @see ftp_put(), ftp_nb_fput(), ftp_nb_put()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_fput($ftp_stream, string $remote_file, $handle, int $mode = FTP_BINARY, int $startpos = 0): bool {}

	/**
	 * Downloads a file from the FTP server
	 * <p><b>ftp_get()</b> retrieves a remote file from the FTP server, and saves it into a local file.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $local_file <p>The local file path (will be overwritten if the file already exists).</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $resumepos <p>The position in the remote file to start downloading from.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-get.php
	 * @see ftp_pasv(), ftp_fget(), ftp_nb_get(), ftp_nb_fget()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_get($ftp_stream, string $local_file, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0): bool {}

	/**
	 * Retrieves various runtime behaviours of the current FTP stream
	 * <p>This function returns the value for the requested <code>option</code> from the specified FTP connection.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param int $option <p>Currently, the following options are supported:</p> <b>Supported runtime FTP options</b>   <b><code>FTP_TIMEOUT_SEC</code></b>  Returns the current timeout used for network related operations.    <b><code>FTP_AUTOSEEK</code></b>  Returns <b><code>TRUE</code></b> if this option is on, <b><code>FALSE</code></b> otherwise.
	 * @return mixed <p>Returns the value on success or <b><code>FALSE</code></b> if the given <code>option</code> is not supported. In the latter case, a warning message is also thrown.</p>
	 * @link http://php.net/manual/en/function.ftp-get-option.php
	 * @see ftp_set_option()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ftp_get_option($ftp_stream, int $option) {}

	/**
	 * Logs in to an FTP connection
	 * <p>Logs in to the given FTP stream.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $username <p>The username (<code>USER</code>).</p>
	 * @param string $password <p>The password (<code>PASS</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If login fails, PHP will also throw a warning.</p>
	 * @link http://php.net/manual/en/function.ftp-login.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_login($ftp_stream, string $username, string $password): bool {}

	/**
	 * Returns the last modified time of the given file
	 * <p><b>ftp_mdtm()</b> gets the last modified time for a remote file.</p><p><b>Note</b>:</p><p>Not all servers support this feature!</p><p><b>Note</b>:</p><p><b>ftp_mdtm()</b> does not work with directories.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $remote_file <p>The file from which to extract the last modification time.</p>
	 * @return int <p>Returns the last modified time as a Unix timestamp on success, or -1 on error.</p>
	 * @link http://php.net/manual/en/function.ftp-mdtm.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_mdtm($ftp_stream, string $remote_file): int {}

	/**
	 * Creates a directory
	 * <p>Creates the specified <code>directory</code> on the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $directory <p>The name of the directory that will be created.</p>
	 * @return string <p>Returns the newly created directory name on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-mkdir.php
	 * @see ftp_rmdir()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_mkdir($ftp_stream, string $directory): string {}

	/**
	 * Returns a list of files in the given directory
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $directory <p>The directory to be listed.</p>
	 * @return array <p>Returns an array of arrays with file infos from the specified directory on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-mlsd.php
	 * @see ftp_rawlist(), ftp_nlist()
	 * @since PHP 7 >= 7.2.0
	 */
	function ftp_mlsd($ftp_stream, string $directory): array {}

	/**
	 * Continues retrieving/sending a file (non-blocking)
	 * <p>Continues retrieving/sending a file non-blocking.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @return int <p>Returns <b><code>FTP_FAILED</code></b> or <b><code>FTP_FINISHED</code></b> or <b><code>FTP_MOREDATA</code></b>.</p>
	 * @link http://php.net/manual/en/function.ftp-nb-continue.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ftp_nb_continue($ftp_stream): int {}

	/**
	 * Retrieves a file from the FTP server and writes it to an open file (non-blocking)
	 * <p><b>ftp_nb_fget()</b> retrieves a remote file from the FTP server.</p><p>The difference between this function and <code>ftp_fget()</code> is that this function retrieves the file asynchronously, so your program can perform other operations while the file is being downloaded.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param resource $handle <p>An open file pointer in which we store the data.</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $resumepos <p>The position in the remote file to start downloading from.</p>
	 * @return int <p>Returns <b><code>FTP_FAILED</code></b> or <b><code>FTP_FINISHED</code></b> or <b><code>FTP_MOREDATA</code></b>.</p>
	 * @link http://php.net/manual/en/function.ftp-nb-fget.php
	 * @see ftp_nb_get(), ftp_nb_continue(), ftp_fget(), ftp_get()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ftp_nb_fget($ftp_stream, $handle, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0): int {}

	/**
	 * Stores a file from an open file to the FTP server (non-blocking)
	 * <p><b>ftp_nb_fput()</b> uploads the data from a file pointer to a remote file on the FTP server.</p><p>The difference between this function and the <code>ftp_fput()</code> is that this function uploads the file asynchronously, so your program can perform other operations while the file is being uploaded.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param resource $handle <p>An open file pointer on the local file. Reading stops at end of file.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $startpos <p>The position in the remote file to start uploading to.</p>
	 * @return int <p>Returns <b><code>FTP_FAILED</code></b> or <b><code>FTP_FINISHED</code></b> or <b><code>FTP_MOREDATA</code></b>.</p>
	 * @link http://php.net/manual/en/function.ftp-nb-fput.php
	 * @see ftp_nb_put(), ftp_nb_continue(), ftp_put(), ftp_fput()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ftp_nb_fput($ftp_stream, string $remote_file, $handle, int $mode = FTP_BINARY, int $startpos = 0): int {}

	/**
	 * Retrieves a file from the FTP server and writes it to a local file (non-blocking)
	 * <p><b>ftp_nb_get()</b> retrieves a remote file from the FTP server, and saves it into a local file.</p><p>The difference between this function and <code>ftp_get()</code> is that this function retrieves the file asynchronously, so your program can perform other operations while the file is being downloaded.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $local_file <p>The local file path (will be overwritten if the file already exists).</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $resumepos <p>The position in the remote file to start downloading from.</p>
	 * @return int <p>Returns <b><code>FTP_FAILED</code></b> or <b><code>FTP_FINISHED</code></b> or <b><code>FTP_MOREDATA</code></b>.</p>
	 * @link http://php.net/manual/en/function.ftp-nb-get.php
	 * @see ftp_nb_fget(), ftp_nb_continue(), ftp_fget(), ftp_get()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ftp_nb_get($ftp_stream, string $local_file, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0): int {}

	/**
	 * Stores a file on the FTP server (non-blocking)
	 * <p><b>ftp_nb_put()</b> stores a local file on the FTP server.</p><p>The difference between this function and the <code>ftp_put()</code> is that this function uploads the file asynchronously, so your program can perform other operations while the file is being uploaded.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param string $local_file <p>The local file path.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $startpos <p>The position in the remote file to start uploading to.</p>
	 * @return int <p>Returns <b><code>FTP_FAILED</code></b> or <b><code>FTP_FINISHED</code></b> or <b><code>FTP_MOREDATA</code></b>.</p>
	 * @link http://php.net/manual/en/function.ftp-nb-put.php
	 * @see ftp_nb_fput(), ftp_nb_continue(), ftp_put(), ftp_fput()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ftp_nb_put($ftp_stream, string $remote_file, string $local_file, int $mode = FTP_BINARY, int $startpos = 0): int {}

	/**
	 * Returns a list of files in the given directory
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $directory <p>The directory to be listed. This parameter can also include arguments, eg. ftp_nlist($conn_id, "-la /your/dir"); Note that this parameter isn't escaped so there may be some issues with filenames containing spaces and other characters.</p>
	 * @return array <p>Returns an array of filenames from the specified directory on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-nlist.php
	 * @see ftp_rawlist(), ftp_mlsd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_nlist($ftp_stream, string $directory): array {}

	/**
	 * Turns passive mode on or off
	 * <p><b>ftp_pasv()</b> turns on or off passive mode. In passive mode, data connections are initiated by the client, rather than by the server. It may be needed if the client is behind firewall.</p><p>Please note that <b>ftp_pasv()</b> can only be called after a successful login or otherwise it will fail.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param bool $pasv <p>If <b><code>TRUE</code></b>, the passive mode is turned on, else it's turned off.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-pasv.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_pasv($ftp_stream, bool $pasv): bool {}

	/**
	 * Uploads a file to the FTP server
	 * <p><b>ftp_put()</b> stores a local file on the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $remote_file <p>The remote file path.</p>
	 * @param string $local_file <p>The local file path.</p>
	 * @param int $mode <p>The transfer mode. Must be either <b><code>FTP_ASCII</code></b> or <b><code>FTP_BINARY</code></b>.</p>
	 * @param int $startpos <p>The position in the remote file to start uploading to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-put.php
	 * @see ftp_pasv(), ftp_fput(), ftp_nb_fput(), ftp_nb_put()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_put($ftp_stream, string $remote_file, string $local_file, int $mode = FTP_BINARY, int $startpos = 0): bool {}

	/**
	 * Returns the current directory name
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @return string <p>Returns the current directory name or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-pwd.php
	 * @see ftp_chdir(), ftp_cdup()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_pwd($ftp_stream): string {}

	/**
	 * Alias of ftp_close()
	 * <p>This function is an alias of: <code>ftp_close()</code>.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.ftp-quit.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_quit($ftp_stream): bool {}

	/**
	 * Sends an arbitrary command to an FTP server
	 * <p>Sends an arbitrary <code>command</code> to the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $command <p>The command to execute.</p>
	 * @return array <p>Returns the server's response as an array of strings. No parsing is performed on the response string, nor does <b>ftp_raw()</b> determine if the command succeeded.</p>
	 * @link http://php.net/manual/en/function.ftp-raw.php
	 * @see ftp_exec()
	 * @since PHP 5, PHP 7
	 */
	function ftp_raw($ftp_stream, string $command): array {}

	/**
	 * Returns a detailed list of files in the given directory
	 * <p><b>ftp_rawlist()</b> executes the FTP <b>LIST</b> command, and returns the result as an array.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $directory <p>The directory path. May include arguments for the <b>LIST</b> command.</p>
	 * @param bool $recursive <p>If set to <b><code>TRUE</code></b>, the issued command will be <b>LIST -R</b>.</p>
	 * @return array <p>Returns an array where each element corresponds to one line of text. Returns <b><code>FALSE</code></b> when passed <code>directory</code> is invalid.</p><p>The output is not parsed in any way. The system type identifier returned by <code>ftp_systype()</code> can be used to determine how the results should be interpreted.</p>
	 * @link http://php.net/manual/en/function.ftp-rawlist.php
	 * @see ftp_nlist(), ftp_mlsd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_rawlist($ftp_stream, string $directory, bool $recursive = FALSE): array {}

	/**
	 * Renames a file or a directory on the FTP server
	 * <p><b>ftp_rename()</b> renames a file or a directory on the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $oldname <p>The old file/directory name.</p>
	 * @param string $newname <p>The new name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Upon failure (such as attempting to rename a non-existent file), an <code>E_WARNING</code> error will be emitted.</p>
	 * @link http://php.net/manual/en/function.ftp-rename.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_rename($ftp_stream, string $oldname, string $newname): bool {}

	/**
	 * Removes a directory
	 * <p>Removes the specified <code>directory</code> on the FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $directory <p>The directory to delete. This must be either an absolute or relative path to an empty directory.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-rmdir.php
	 * @see ftp_mkdir()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_rmdir($ftp_stream, string $directory): bool {}

	/**
	 * Set miscellaneous runtime FTP options
	 * <p>This function controls various runtime options for the specified FTP stream.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param int $option <p>Currently, the following options are supported:</p> <b>Supported runtime FTP options</b>   <b><code>FTP_TIMEOUT_SEC</code></b>  Changes the timeout in seconds used for all network related functions. <code>value</code> must be an integer that is greater than 0. The default timeout is 90 seconds.    <b><code>FTP_AUTOSEEK</code></b>  When enabled, GET or PUT requests with a <code>resumepos</code> or <code>startpos</code> parameter will first seek to the requested position within the file. This is enabled by default.    <b><code>FTP_USEPASVADDRESS</code></b>  When disabled, PHP will ignore the IP address returned by the FTP server in response to the PASV command and instead use the IP address that was supplied in the ftp_connect(). <code>value</code> must be a boolean.
	 * @param mixed $value <p>This parameter depends on which <code>option</code> is chosen to be altered.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the option could be set; <b><code>FALSE</code></b> if not. A warning message will be thrown if the <code>option</code> is not supported or the passed <code>value</code> doesn't match the expected value for the given <code>option</code>.</p>
	 * @link http://php.net/manual/en/function.ftp-set-option.php
	 * @see ftp_get_option()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ftp_set_option($ftp_stream, int $option, $value): bool {}

	/**
	 * Sends a SITE command to the server
	 * <p><b>ftp_site()</b> sends the given <code>SITE</code> command to the FTP server.</p><p><code>SITE</code> commands are not standardized, and vary from server to server. They are useful for handling such things as file permissions and group membership.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $command <p>The SITE command. Note that this parameter isn't escaped so there may be some issues with filenames containing spaces and other characters.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.ftp-site.php
	 * @see ftp_raw()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_site($ftp_stream, string $command): bool {}

	/**
	 * Returns the size of the given file
	 * <p><b>ftp_size()</b> returns the size of the given file in bytes.</p><p><b>Note</b>:</p><p>Not all servers support this feature.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @param string $remote_file <p>The remote file.</p>
	 * @return int <p>Returns the file size on success, or -1 on error.</p>
	 * @link http://php.net/manual/en/function.ftp-size.php
	 * @see ftp_rawlist()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_size($ftp_stream, string $remote_file): int {}

	/**
	 * Opens a Secure SSL-FTP connection
	 * <p><b>ftp_ssl_connect()</b> opens an <i>explicit</i> SSL-FTP connection to the specified <code>host</code>. That implies that <b>ftp_ssl_connect()</b> will succeed even if the server is not configured for SSL-FTP, or its certificate is invalid. Only when <code>ftp_login()</code> is called, the client will send the appropriate AUTH FTP command, so <code>ftp_login()</code> will fail in the mentioned cases.</p><p><b>Note</b>: <b>Why this function may not exist</b><br></p><p>Before PHP 7.0.0, <b>ftp_ssl_connect()</b> was only available if both the ftp module and the OpenSSL support have been built statically into php; this means that on Windows this function had been undefined in the official PHP builds. To have this function available on Windows, it had been necessary to compile own PHP binaries.</p><p><b>Note</b>:</p><p><b>ftp_ssl_connect()</b> is not intended for use with sFTP. To use sFTP with PHP, please see <code>ssh2_sftp()</code>.</p>
	 * @param string $host <p>The FTP server address. This parameter shouldn't have any trailing slashes and shouldn't be prefixed with <code>ftp://</code>.</p>
	 * @param int $port <p>This parameter specifies an alternate port to connect to. If it is omitted or set to zero, then the default FTP port, 21, will be used.</p>
	 * @param int $timeout <p>This parameter specifies the timeout for all subsequent network operations. If omitted, the default value is 90 seconds. The timeout can be changed and queried at any time with <code>ftp_set_option()</code> and <code>ftp_get_option()</code>.</p>
	 * @return resource <p>Returns a SSL-FTP stream on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-ssl-connect.php
	 * @see ftp_connect()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ftp_ssl_connect(string $host, int $port = 21, int $timeout = 90) {}

	/**
	 * Returns the system type identifier of the remote FTP server
	 * <p>Returns the system type identifier of the remote FTP server.</p>
	 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
	 * @return string <p>Returns the remote system type, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.ftp-systype.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ftp_systype($ftp_stream): string {}

	define('FTP_ASCII', 1);

	/**
	 * <p>Automatically determine resume position and start position for GET and PUT requests (only works if FTP_AUTOSEEK is enabled)</p>
	 */
	define('FTP_AUTORESUME', -1);

	/**
	 * <p>See <code>ftp_set_option()</code> for information.</p>
	 */
	define('FTP_AUTOSEEK', 1);

	define('FTP_BINARY', 2);

	/**
	 * <p>Asynchronous transfer has failed</p>
	 */
	define('FTP_FAILED', 0);

	/**
	 * <p>Asynchronous transfer has finished</p>
	 */
	define('FTP_FINISHED', 1);

	/**
	 * <p>Alias of <b><code>FTP_BINARY</code></b>.</p>
	 */
	define('FTP_IMAGE', 2);

	/**
	 * <p>Asynchronous transfer is still active</p>
	 */
	define('FTP_MOREDATA', 2);

	/**
	 * <p>Alias of <b><code>FTP_ASCII</code></b>.</p>
	 */
	define('FTP_TEXT', 1);

	/**
	 * <p>See <code>ftp_set_option()</code> for information.</p>
	 */
	define('FTP_TIMEOUT_SEC', 0);

	/**
	 * <p>See <code>ftp_set_option()</code> for information. Available as of PHP 5.6.0.</p>
	 */
	define('FTP_USEPASVADDRESS', 2);

}
