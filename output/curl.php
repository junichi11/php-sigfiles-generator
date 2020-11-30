<?php



namespace {

	/**
	 * <p><b>CURLFile</b> should be used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
	 * @link http://php.net/manual/en/class.curlfile.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	class CURLFile {

		/**
		 * @var mixed <p>Name of the file to be uploaded.</p>
		 * @link http://php.net/manual/en/class.curlfile.php#curlfile.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>MIME type of the file (default is <i>application/octet-stream</i>).</p>
		 * @link http://php.net/manual/en/class.curlfile.php#curlfile.props.mime
		 */
		public $mime;

		/**
		 * @var mixed <p>The name of the file in the upload data (defaults to the name property).</p>
		 * @link http://php.net/manual/en/class.curlfile.php#curlfile.props.postname
		 */
		public $postname;

		/**
		 * Create a CURLFile object
		 * <p>Creates a CURLFile object, used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
		 * @param string $filename <p>Path to the file which will be uploaded.</p>
		 * @param string $mimetype <p>Mimetype of the file.</p>
		 * @param string $postname <p>Name of the file to be used in the upload data.</p>
		 * @return self <p>Returns a CURLFile object.</p>
		 * @link http://php.net/manual/en/curlfile.construct.php
		 * @see curl_setopt()
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function __construct(string $filename, string $mimetype = NULL, string $postname = NULL) {}

		/**
		 * Unserialization handler
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/curlfile.wakeup.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function __wakeup(): void {}

		/**
		 * Get file name
		 * @return string <p>Returns file name.</p>
		 * @link http://php.net/manual/en/curlfile.getfilename.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function getFilename(): string {}

		/**
		 * Get MIME type
		 * @return string <p>Returns MIME type.</p>
		 * @link http://php.net/manual/en/curlfile.getmimetype.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function getMimeType(): string {}

		/**
		 * Get file name for POST
		 * @return string <p>Returns file name for POST.</p>
		 * @link http://php.net/manual/en/curlfile.getpostfilename.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function getPostFilename(): string {}

		/**
		 * Set MIME type
		 * @param string $mime <p>MIME type to be used in POST data.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/curlfile.setmimetype.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setMimeType(string $mime): void {}

		/**
		 * Set file name for POST
		 * @param string $postname <p>Filename to be used in POST data.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/curlfile.setpostfilename.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setPostFilename(string $postname): void {}
	}

	/**
	 * Close a cURL session
	 * <p>Closes a cURL session and frees all resources. The cURL handle, <code>ch</code>, is also deleted.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.curl-close.php
	 * @see curl_init(), curl_multi_close()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function curl_close($ch): void {}

	/**
	 * Copy a cURL handle along with all of its preferences
	 * <p>Copies a cURL handle keeping the same preferences.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return resource <p>Returns a new cURL handle.</p>
	 * @link http://php.net/manual/en/function.curl-copy-handle.php
	 * @since PHP 5, PHP 7
	 */
	function curl_copy_handle($ch) {}

	/**
	 * Return the last error number
	 * <p>Returns the error number for the last cURL operation.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return int <p>Returns the error number or <i>0</i> (zero) if no error occurred.</p>
	 * @link http://php.net/manual/en/function.curl-errno.php
	 * @see curl_error()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function curl_errno($ch): int {}

	/**
	 * Return a string containing the last error for the current session
	 * <p>Returns a clear text error message for the last cURL operation.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return string <p>Returns the error message or <i>''</i> (the empty string) if no error occurred.</p>
	 * @link http://php.net/manual/en/function.curl-error.php
	 * @see curl_errno()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function curl_error($ch): string {}

	/**
	 * URL encodes the given string
	 * <p>This function URL encodes the given string according to RFC 3986.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param string $str <p>The string to be encoded.</p>
	 * @return string <p>Returns escaped string or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-escape.php
	 * @see curl_unescape(), urlencode(), rawurlencode()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_escape($ch, string $str): string {}

	/**
	 * Perform a cURL session
	 * <p>Execute the given cURL session.</p><p>This function should be called after initializing a cURL session and all the options for the session are set.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. However, if the <b><code>CURLOPT_RETURNTRANSFER</code></b> option is set, it will return the result on success, <b><code>FALSE</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p><p><b>Note</b>:</p><p>Note that response status codes which indicate errors (such as <i>404 Not found</i>) are not regarded as failure. <code>curl_getinfo()</code> can be used to check for these.</p>
	 * @link http://php.net/manual/en/function.curl-exec.php
	 * @see curl_multi_exec()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function curl_exec($ch) {}

	/**
	 * Create a CURLFile object
	 * <p>Creates a CURLFile object, used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
	 * @param string $filename <p>Path to the file which will be uploaded.</p>
	 * @param string $mimetype <p>Mimetype of the file.</p>
	 * @param string $postname <p>Name of the file to be used in the upload data.</p>
	 * @return CURLFile <p>Returns a CURLFile object.</p>
	 * @link http://php.net/manual/en/curlfile.construct.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_file_create(string $filename, string $mimetype = NULL, string $postname = NULL): \CURLFile {}

	/**
	 * Get information regarding a specific transfer
	 * <p>Gets information about the last transfer.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param int $opt <p>This may be one of the following constants:</p><ul> <li>  <b><code>CURLINFO_EFFECTIVE_URL</code></b> - Last effective URL  </li> <li>  <b><code>CURLINFO_HTTP_CODE</code></b> - The last response code. As of PHP 5.5.0 and cURL 7.10.8, this is a legacy alias of <b><code>CURLINFO_RESPONSE_CODE</code></b>  </li> <li>  <b><code>CURLINFO_FILETIME</code></b> - Remote time of the retrieved document, with the <b><code>CURLOPT_FILETIME</code></b> enabled; if -1 is returned the time of the document is unknown  </li> <li>  <b><code>CURLINFO_TOTAL_TIME</code></b> - Total transaction time in seconds for last transfer  </li> <li>  <b><code>CURLINFO_NAMELOOKUP_TIME</code></b> - Time in seconds until name resolving was complete  </li> <li>  <b><code>CURLINFO_CONNECT_TIME</code></b> - Time in seconds it took to establish the connection  </li> <li>  <b><code>CURLINFO_PRETRANSFER_TIME</code></b> - Time in seconds from start until just before file transfer begins  </li> <li>  <b><code>CURLINFO_STARTTRANSFER_TIME</code></b> - Time in seconds until the first byte is about to be transferred  </li> <li>  <b><code>CURLINFO_REDIRECT_COUNT</code></b> - Number of redirects, with the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option enabled  </li> <li>  <b><code>CURLINFO_REDIRECT_TIME</code></b> - Time in seconds of all redirection steps before final transaction was started, with the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option enabled  </li> <li>  <b><code>CURLINFO_REDIRECT_URL</code></b> - With the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option disabled: redirect URL found in the last transaction, that should be requested manually next. With the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option enabled: this is empty. The redirect URL in this case is available in <b><code>CURLINFO_EFFECTIVE_URL</code></b>  </li> <li>  <b><code>CURLINFO_PRIMARY_IP</code></b> - IP address of the most recent connection  </li> <li>  <b><code>CURLINFO_PRIMARY_PORT</code></b> - Destination port of the most recent connection  </li> <li>  <b><code>CURLINFO_LOCAL_IP</code></b> - Local (source) IP address of the most recent connection  </li> <li>  <b><code>CURLINFO_LOCAL_PORT</code></b> - Local (source) port of the most recent connection  </li> <li>  <b><code>CURLINFO_SIZE_UPLOAD</code></b> - Total number of bytes uploaded  </li> <li>  <b><code>CURLINFO_SIZE_DOWNLOAD</code></b> - Total number of bytes downloaded  </li> <li>  <b><code>CURLINFO_SPEED_DOWNLOAD</code></b> - Average download speed  </li> <li>  <b><code>CURLINFO_SPEED_UPLOAD</code></b> - Average upload speed  </li> <li>  <b><code>CURLINFO_HEADER_SIZE</code></b> - Total size of all headers received  </li> <li>  <b><code>CURLINFO_HEADER_OUT</code></b> - The request string sent. For this to work, add the <b><code>CURLINFO_HEADER_OUT</code></b> option to the handle by calling <code>curl_setopt()</code>  </li> <li>  <b><code>CURLINFO_REQUEST_SIZE</code></b> - Total size of issued requests, currently only for HTTP requests  </li> <li>  <b><code>CURLINFO_SSL_VERIFYRESULT</code></b> - Result of SSL certification verification requested by setting <b><code>CURLOPT_SSL_VERIFYPEER</code></b>  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_DOWNLOAD</code></b> - Content length of download, read from <i>Content-Length:</i> field  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_UPLOAD</code></b> - Specified size of upload  </li> <li>  <b><code>CURLINFO_CONTENT_TYPE</code></b> - <i>Content-Type:</i> of the requested document. NULL indicates server did not send valid <i>Content-Type:</i> header  </li> <li>  <b><code>CURLINFO_PRIVATE</code></b> - Private data associated with this cURL handle, previously set with the <b><code>CURLOPT_PRIVATE</code></b> option of <code>curl_setopt()</code>  </li> <li>  <b><code>CURLINFO_RESPONSE_CODE</code></b> - The last response code  </li> <li>  <b><code>CURLINFO_HTTP_CONNECTCODE</code></b> - The CONNECT response code  </li> <li>  <b><code>CURLINFO_HTTPAUTH_AVAIL</code></b> - Bitmask indicating the authentication method(s) available according to the previous response  </li> <li>  <b><code>CURLINFO_PROXYAUTH_AVAIL</code></b> - Bitmask indicating the proxy authentication method(s) available according to the previous response  </li> <li>  <b><code>CURLINFO_OS_ERRNO</code></b> - Errno from a connect failure. The number is OS and system specific.  </li> <li>  <b><code>CURLINFO_NUM_CONNECTS</code></b> - Number of connections curl had to create to achieve the previous transfer  </li> <li>  <b><code>CURLINFO_SSL_ENGINES</code></b> - OpenSSL crypto-engines supported  </li> <li>  <b><code>CURLINFO_COOKIELIST</code></b> - All known cookies  </li> <li>  <b><code>CURLINFO_FTP_ENTRY_PATH</code></b> - Entry path in FTP server  </li> <li>  <b><code>CURLINFO_APPCONNECT_TIME</code></b> - Time in seconds it took from the start until the SSL/SSH connect/handshake to the remote host was completed  </li> <li>  <b><code>CURLINFO_CERTINFO</code></b> - TLS certificate chain  </li> <li>  <b><code>CURLINFO_CONDITION_UNMET</code></b> - Info on unmet time conditional  </li> <li>  <b><code>CURLINFO_RTSP_CLIENT_CSEQ</code></b> - Next RTSP client CSeq  </li> <li>  <b><code>CURLINFO_RTSP_CSEQ_RECV</code></b> - Recently received CSeq  </li> <li>  <b><code>CURLINFO_RTSP_SERVER_CSEQ</code></b> - Next RTSP server CSeq  </li> <li>  <b><code>CURLINFO_RTSP_SESSION_ID</code></b> - RTSP session ID  </li> </ul>
	 * @return mixed <p>If <code>opt</code> is given, returns its value. Otherwise, returns an associative array with the following elements (which correspond to <code>opt</code>), or <b><code>FALSE</code></b> on failure:</p><ul> <li>  "url"  </li> <li>  "content_type"  </li> <li>  "http_code"  </li> <li>  "header_size"  </li> <li>  "request_size"  </li> <li>  "filetime"  </li> <li>  "ssl_verify_result"  </li> <li>  "redirect_count"  </li> <li>  "total_time"  </li> <li>  "namelookup_time"  </li> <li>  "connect_time"  </li> <li>  "pretransfer_time"  </li> <li>  "size_upload"  </li> <li>  "size_download"  </li> <li>  "speed_download"  </li> <li>  "speed_upload"  </li> <li>  "download_content_length"  </li> <li>  "upload_content_length"  </li> <li>  "starttransfer_time"  </li> <li>  "redirect_time"  </li> <li>  "certinfo"  </li> <li>  "primary_ip"  </li> <li>  "primary_port"  </li> <li>  "local_ip"  </li> <li>  "local_port"  </li> <li>  "redirect_url"  </li> <li>  "request_header" (This is only set if the <b><code>CURLINFO_HEADER_OUT</code></b> is set by a previous call to <code>curl_setopt()</code>)  </li> </ul> Note that private data is not included in the associative array and must be retrieved individually with the <b><code>CURLINFO_PRIVATE</code></b> option.
	 * @link http://php.net/manual/en/function.curl-getinfo.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function curl_getinfo($ch, int $opt = NULL) {}

	/**
	 * Initialize a cURL session
	 * <p>Initializes a new session and return a cURL handle for use with the <code>curl_setopt()</code>, <code>curl_exec()</code>, and <code>curl_close()</code> functions.</p>
	 * @param string $url <p>If provided, the <b><code>CURLOPT_URL</code></b> option will be set to its value. You can manually set this using the <code>curl_setopt()</code> function.</p> <p><b>Note</b>:</p><p>The <i>file</i> protocol is disabled by cURL if open_basedir is set.</p>
	 * @return resource <p>Returns a cURL handle on success, <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.curl-init.php
	 * @see curl_close(), curl_multi_init()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function curl_init(string $url = NULL) {}

	/**
	 * Add a normal cURL handle to a cURL multi handle
	 * <p>Adds the <code>ch</code> handle to the multi handle <code>mh</code></p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return int <p>Returns 0 on success, or one of the <b><code>CURLM_XXX</code></b> errors code.</p>
	 * @link http://php.net/manual/en/function.curl-multi-add-handle.php
	 * @see curl_multi_remove_handle(), curl_multi_init(), curl_init()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_add_handle($mh, $ch): int {}

	/**
	 * Close a set of cURL handles
	 * <p>Closes a set of cURL handles.</p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.curl-multi-close.php
	 * @see curl_multi_init(), curl_close()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_close($mh): void {}

	/**
	 * Return the last multi curl error number
	 * <p>Return an integer containing the last multi curl error number.</p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @return int <p>Return an integer containing the last multi curl error number, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-multi-errno.php
	 * @see curl_errno()
	 * @since PHP 7 >= 7.1.0
	 */
	function curl_multi_errno($mh): int {}

	/**
	 * Run the sub-connections of the current cURL handle
	 * <p>Processes each of the handles in the stack. This method can be called whether or not a handle needs to read or write data.</p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param int $still_running <p>A reference to a flag to tell whether the operations are still running.</p>
	 * @return int <p>A cURL code defined in the cURL Predefined Constants.</p><p><b>Note</b>:</p><p>This only returns errors regarding the whole multi stack. There might still have occurred problems on individual transfers even when this function returns <b><code>CURLM_OK</code></b>.</p>
	 * @link http://php.net/manual/en/function.curl-multi-exec.php
	 * @see curl_multi_init(), curl_multi_select(), curl_exec()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_exec($mh, int &$still_running): int {}

	/**
	 * Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set
	 * <p>If <b><code>CURLOPT_RETURNTRANSFER</code></b> is an option that is set for a specific handle, then this function will return the content of that cURL handle in the form of a string.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return string <p>Return the content of a cURL handle if <b><code>CURLOPT_RETURNTRANSFER</code></b> is set.</p>
	 * @link http://php.net/manual/en/function.curl-multi-getcontent.php
	 * @see curl_multi_init()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_getcontent($ch): string {}

	/**
	 * Get information about the current transfers
	 * <p>Ask the multi handle if there are any messages or information from the individual transfers. Messages may include information such as an error code from the transfer or just the fact that a transfer is completed.</p><p>Repeated calls to this function will return a new result each time, until a <b><code>FALSE</code></b> is returned as a signal that there is no more to get at this point. The integer pointed to with <code>msgs_in_queue</code> will contain the number of remaining messages after this function was called.</p><p>The data the returned resource points to will not survive calling <code>curl_multi_remove_handle()</code>.</p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param int $msgs_in_queue <p>Number of messages that are still in the queue</p>
	 * @return array <p>On success, returns an associative array for the message, <b><code>FALSE</code></b> on failure.</p> <b>Contents of the returned array</b>   Key: Value:     <i>msg</i> The <b><code>CURLMSG_DONE</code></b> constant. Other return values are currently not available.   <i>result</i> One of the <b><code>CURLE_&#42;</code></b> constants. If everything is OK, the <b><code>CURLE_OK</code></b> will be the result.   <i>handle</i> Resource of type curl indicates the handle which it concerns.
	 * @link http://php.net/manual/en/function.curl-multi-info-read.php
	 * @see curl_multi_init()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_info_read($mh, int &$msgs_in_queue = NULL): array {}

	/**
	 * Returns a new cURL multi handle
	 * <p>Allows the processing of multiple cURL handles asynchronously.</p>
	 * @return resource <p>Returns a cURL multi handle resource on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-multi-init.php
	 * @see curl_init(), curl_multi_close()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_init() {}

	/**
	 * Remove a multi handle from a set of cURL handles
	 * <p>Removes a given <code>ch</code> handle from the given <code>mh</code> handle. When the <code>ch</code> handle has been removed, it is again perfectly legal to run <code>curl_exec()</code> on this handle. Removing the <code>ch</code> handle while being used, will effectively halt the transfer in progress involving that handle.</p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return int <p>Returns 0 on success, or one of the <b><code>CURLM_XXX</code></b> error codes.</p>
	 * @link http://php.net/manual/en/function.curl-multi-remove-handle.php
	 * @see curl_init(), curl_multi_init(), curl_multi_add_handle()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_remove_handle($mh, $ch): int {}

	/**
	 * Wait for activity on any curl_multi connection
	 * <p>Blocks until there is activity on any of the curl_multi connections.</p>
	 * @param resource $mh <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param float $timeout <p>Time, in seconds, to wait for a response.</p>
	 * @return int <p>On success, returns the number of descriptors contained in the descriptor sets. This may be 0 if there was no activity on any of the descriptors. On failure, this function will return -1 on a select failure (from the underlying select system call).</p>
	 * @link http://php.net/manual/en/function.curl-multi-select.php
	 * @see curl_multi_init()
	 * @since PHP 5, PHP 7
	 */
	function curl_multi_select($mh, float $timeout = 1.0): int {}

	/**
	 * Set an option for the cURL multi handle
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $mh
	 * @param int $option <p>One of the <b><code>CURLMOPT_&#42;</code></b> constants.</p>
	 * @param mixed $value <p>The value to be set on <code>option</code>.</p> <p><code>value</code> should be an <code>int</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to     <b><code>CURLMOPT_PIPELINING</code></b>  Pass 1 to enable or 0 to disable. Enabling pipelining on a multi handle will make it attempt to perform HTTP Pipelining as far as possible for transfers using this handle. This means that if you add a second request that can use an already existing connection, the second request will be "piped" on the same connection. As of cURL 7.43.0 you can also pass 2 to try to multiplex the new transfer over an existing HTTP/2 connection if possible. Instead of integer literals, you can also use the CURLPIPE_&#42; constants if available.    <b><code>CURLMOPT_MAXCONNECTS</code></b>  Pass a number that will be used as the maximum amount of simultaneously open connections that libcurl may cache. By default the size will be enlarged to fit four times the number of handles added via <code>curl_multi_add_handle()</code>. When the cache is full, curl closes the oldest one in the cache to prevent the number of open connections from increasing.    <b><code>CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</code></b>  Pass a number that specifies the chunk length threshold for pipelining in bytes.    <b><code>CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</code></b>  Pass a number that specifies the size threshold for pipelining penalty in bytes.    <b><code>CURLMOPT_MAX_HOST_CONNECTIONS</code></b>  Pass a number that specifies the maximum number of connections to a single host.    <b><code>CURLMOPT_MAX_PIPELINE_LENGTH</code></b>  Pass a number that specifies the maximum number of requests in a pipeline.    <b><code>CURLMOPT_MAX_TOTAL_CONNECTIONS</code></b>  Pass a number that specifies the maximum number of simultaneously open connections.    <b><code>CURLMOPT_PUSHFUNCTION</code></b>  Pass a <code>callable</code> that will be registered to handle server pushes and should have the following signature:  int pushfunction ( resource <code>$parent_ch</code> , resource <code>$pushed_ch</code> , array <code>$headers</code> )   <code>parent_ch</code>  <p>The parent cURL handle (the request the client made).</p>   <code>pushed_ch</code>  <p>A new cURL handle for the pushed request.</p>   <code>headers</code>  <p>The push promise headers.</p>   The push function is supposed to return either <b><code>CURL_PUSH_OK</code></b> if it can handle the push, or <b><code>CURL_PUSH_DENY</code></b> to reject it.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-multi-setopt.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_multi_setopt($mh, int $option, $value): bool {}

	/**
	 * Return string describing error code
	 * <p>Returns a text error message describing the given CURLM error code.</p>
	 * @param int $errornum <p>One of the CURLM error codes constants.</p>
	 * @return string <p>Returns error string for valid error code, <b><code>NULL</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.curl-multi-strerror.php
	 * @see curl_strerror()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_multi_strerror(int $errornum): string {}

	/**
	 * Pause and unpause a connection
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param int $bitmask <p>One of <b><code>CURLPAUSE_&#42;</code></b> constants.</p>
	 * @return int <p>Returns an error code (<b><code>CURLE_OK</code></b> for no error).</p>
	 * @link http://php.net/manual/en/function.curl-pause.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_pause($ch, int $bitmask): int {}

	/**
	 * Reset all options of a libcurl session handle
	 * <p>This function re-initializes all options set on the given cURL handle to the default values.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.curl-reset.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_reset($ch): void {}

	/**
	 * Set an option for a cURL transfer
	 * <p>Sets an option on the given cURL session handle.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param int $option <p>The <i>CURLOPT_XXX</i> option to set.</p>
	 * @param mixed $value <p>The value to be set on <code>option</code>.</p> <p><code>value</code> should be a <code>bool</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_AUTOREFERER</code></b>  <b><code>TRUE</code></b> to automatically set the <i>Referer:</i> field in requests where it follows a <i>Location:</i> redirect.      <b><code>CURLOPT_BINARYTRANSFER</code></b>  <b><code>TRUE</code></b> to return the raw output when <b><code>CURLOPT_RETURNTRANSFER</code></b> is used.   From PHP 5.1.3, this option has no effect: the raw output will always be returned when <b><code>CURLOPT_RETURNTRANSFER</code></b> is used.    <b><code>CURLOPT_COOKIESESSION</code></b>  <b><code>TRUE</code></b> to mark this as a new cookie "session". It will force libcurl to ignore all cookies it is about to load that are "session cookies" from the previous session. By default, libcurl always stores and loads all cookies, independent if they are session cookies or not. Session cookies are cookies without expiry date and they are meant to be alive and existing for this "session" only.      <b><code>CURLOPT_CERTINFO</code></b>  <b><code>TRUE</code></b> to output SSL certification information to <i>STDERR</i> on secure transfers.   Added in cURL 7.19.1. Available since PHP 5.3.2. Requires <b><code>CURLOPT_VERBOSE</code></b> to be on to have an effect.    <b><code>CURLOPT_CONNECT_ONLY</code></b>  <b><code>TRUE</code></b> tells the library to perform all the required proxy authentication and connection setup, but no data transfer. This option is implemented for HTTP, SMTP and POP3.   Added in 7.15.2. Available since PHP 5.5.0.    <b><code>CURLOPT_CRLF</code></b>  <b><code>TRUE</code></b> to convert Unix newlines to CRLF newlines on transfers.      <b><code>CURLOPT_DNS_USE_GLOBAL_CACHE</code></b>  <b><code>TRUE</code></b> to use a global DNS cache. This option is not thread-safe and is enabled by default.      <b><code>CURLOPT_FAILONERROR</code></b>  <b><code>TRUE</code></b> to fail verbosely if the HTTP code returned is greater than or equal to 400. The default behavior is to return the page normally, ignoring the code.      <b><code>CURLOPT_SSL_FALSESTART</code></b>  <b><code>TRUE</code></b> to enable TLS false start.   Added in cURL 7.42.0. Available since PHP 7.0.7.    <b><code>CURLOPT_FILETIME</code></b>  <b><code>TRUE</code></b> to attempt to retrieve the modification date of the remote document. This value can be retrieved using the <code>CURLINFO_FILETIME</code> option with <code>curl_getinfo()</code>.      <b><code>CURLOPT_FOLLOWLOCATION</code></b>  <b><code>TRUE</code></b> to follow any <i>"Location: "</i> header that the server sends as part of the HTTP header (note this is recursive, PHP will follow as many <i>"Location: "</i> headers that it is sent, unless <b><code>CURLOPT_MAXREDIRS</code></b> is set).      <b><code>CURLOPT_FORBID_REUSE</code></b>  <b><code>TRUE</code></b> to force the connection to explicitly close when it has finished processing, and not be pooled for reuse.      <b><code>CURLOPT_FRESH_CONNECT</code></b>  <b><code>TRUE</code></b> to force the use of a new connection instead of a cached one.      <b><code>CURLOPT_FTP_USE_EPRT</code></b>  <b><code>TRUE</code></b> to use EPRT (and LPRT) when doing active FTP downloads. Use <b><code>FALSE</code></b> to disable EPRT and LPRT and use PORT only.      <b><code>CURLOPT_FTP_USE_EPSV</code></b>  <b><code>TRUE</code></b> to first try an EPSV command for FTP transfers before reverting back to PASV. Set to <b><code>FALSE</code></b> to disable EPSV.      <b><code>CURLOPT_FTP_CREATE_MISSING_DIRS</code></b>  <b><code>TRUE</code></b> to create missing directories when an FTP operation encounters a path that currently doesn't exist.      <b><code>CURLOPT_FTPAPPEND</code></b>  <b><code>TRUE</code></b> to append to the remote file instead of overwriting it.      <b><code>CURLOPT_TCP_NODELAY</code></b>  <b><code>TRUE</code></b> to disable TCP's Nagle algorithm, which tries to minimize the number of small packets on the network.   Available since PHP 5.2.1 for versions compiled with libcurl 7.11.2 or greater.    <b><code>CURLOPT_FTPASCII</code></b>  An alias of <b><code>CURLOPT_TRANSFERTEXT</code></b>. Use that instead.      <b><code>CURLOPT_FTPLISTONLY</code></b>  <b><code>TRUE</code></b> to only list the names of an FTP directory.      <b><code>CURLOPT_HEADER</code></b>  <b><code>TRUE</code></b> to include the header in the output.      <b><code>CURLINFO_HEADER_OUT</code></b>  <b><code>TRUE</code></b> to track the handle's request string.   Available since PHP 5.1.3. The <b><code>CURLINFO_</code></b> prefix is intentional.    <b><code>CURLOPT_HTTPGET</code></b>  <b><code>TRUE</code></b> to reset the HTTP request method to GET. Since GET is the default, this is only necessary if the request method has been changed.      <b><code>CURLOPT_HTTPPROXYTUNNEL</code></b>  <b><code>TRUE</code></b> to tunnel through a given HTTP proxy.      <b><code>CURLOPT_MUTE</code></b>  <b><code>TRUE</code></b> to be completely silent with regards to the cURL functions.   Removed in cURL 7.15.5 (You can use CURLOPT_RETURNTRANSFER instead)    <b><code>CURLOPT_NETRC</code></b>  <b><code>TRUE</code></b> to scan the ~/.netrc file to find a username and password for the remote site that a connection is being established with.      <b><code>CURLOPT_NOBODY</code></b>  <b><code>TRUE</code></b> to exclude the body from the output. Request method is then set to HEAD. Changing this to <b><code>FALSE</code></b> does not change it to GET.      <b><code>CURLOPT_NOPROGRESS</code></b> <p><b><code>TRUE</code></b> to disable the progress meter for cURL transfers.</p><p><b>Note</b>:</p><p>PHP automatically sets this option to <b><code>TRUE</code></b>, this should only be changed for debugging purposes.</p>       <b><code>CURLOPT_NOSIGNAL</code></b>  <b><code>TRUE</code></b> to ignore any cURL function that causes a signal to be sent to the PHP process. This is turned on by default in multi-threaded SAPIs so timeout options can still be used.   Added in cURL 7.10.    <b><code>CURLOPT_PATH_AS_IS</code></b>  <b><code>TRUE</code></b> to not handle dot dot sequences.   Added in cURL 7.42.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PIPEWAIT</code></b>  <b><code>TRUE</code></b> to wait for pipelining/multiplexing.   Added in cURL 7.43.0. Available since PHP 7.0.7.    <b><code>CURLOPT_POST</code></b>  <b><code>TRUE</code></b> to do a regular HTTP POST. This POST is the normal <i>application/x-www-form-urlencoded</i> kind, most commonly used by HTML forms.      <b><code>CURLOPT_PUT</code></b>  <b><code>TRUE</code></b> to HTTP PUT a file. The file to PUT must be set with <b><code>CURLOPT_INFILE</code></b> and <b><code>CURLOPT_INFILESIZE</code></b>.      <b><code>CURLOPT_RETURNTRANSFER</code></b>  <b><code>TRUE</code></b> to return the transfer as a string of the return value of <code>curl_exec()</code> instead of outputting it directly.      <b><code>CURLOPT_SAFE_UPLOAD</code></b>  <b><code>TRUE</code></b> to disable support for the <i>@</i> prefix for uploading files in <b><code>CURLOPT_POSTFIELDS</code></b>, which means that values starting with <i>@</i> can be safely passed as fields. CURLFile may be used for uploads instead.   Added in PHP 5.5.0 with <b><code>FALSE</code></b> as the default value. PHP 5.6.0 changes the default value to <b><code>TRUE</code></b>. PHP 7 removes this option; the CURLFile interface must be used to upload files.    <b><code>CURLOPT_SASL_IR</code></b>  <b><code>TRUE</code></b> to enable sending the initial response in the first packet.   Added in cURL 7.31.10. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_ENABLE_ALPN</code></b>  <b><code>FALSE</code></b> to disable ALPN in the SSL handshake (if the SSL backend libcurl is built to use supports it), which can be used to negotiate http2.   Added in cURL 7.36.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_ENABLE_NPN</code></b>  <b><code>FALSE</code></b> to disable NPN in the SSL handshake (if the SSL backend libcurl is built to use supports it), which can be used to negotiate http2.   Added in cURL 7.36.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_VERIFYPEER</code></b>  <b><code>FALSE</code></b> to stop cURL from verifying the peer's certificate. Alternate certificates to verify against can be specified with the <b><code>CURLOPT_CAINFO</code></b> option or a certificate directory can be specified with the <b><code>CURLOPT_CAPATH</code></b> option.   <b><code>TRUE</code></b> by default as of cURL 7.10. Default bundle installed as of cURL 7.10.    <b><code>CURLOPT_SSL_VERIFYSTATUS</code></b>  <b><code>TRUE</code></b> to verify the certificate's status.   Added in cURL 7.41.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TCP_FASTOPEN</code></b>  <b><code>TRUE</code></b> to enable TCP Fast Open.   Added in cURL 7.49.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TFTP_NO_OPTIONS</code></b>  <b><code>TRUE</code></b> to not send TFTP options requests.   Added in cURL 7.48.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TRANSFERTEXT</code></b>  <b><code>TRUE</code></b> to use ASCII mode for FTP transfers. For LDAP, it retrieves data in plain text instead of HTML. On Windows systems, it will not set <i>STDOUT</i> to binary mode.      <b><code>CURLOPT_UNRESTRICTED_AUTH</code></b>  <b><code>TRUE</code></b> to keep sending the username and password when following locations (using <b><code>CURLOPT_FOLLOWLOCATION</code></b>), even when the hostname has changed.      <b><code>CURLOPT_UPLOAD</code></b>  <b><code>TRUE</code></b> to prepare for an upload.      <b><code>CURLOPT_VERBOSE</code></b>  <b><code>TRUE</code></b> to output verbose information. Writes output to <i>STDERR</i>, or the file specified using <b><code>CURLOPT_STDERR</code></b>.       <p><code>value</code> should be an <code>integer</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_BUFFERSIZE</code></b>  The size of the buffer to use for each read. There is no guarantee this request will be fulfilled, however.   Added in cURL 7.10.    <b><code>CURLOPT_CLOSEPOLICY</code></b>  One of the <b><code>CURLCLOSEPOLICY_&#42;</code></b> values. <p><b>Note</b>:</p><p>This option is deprecated, as it was never implemented in cURL and never had any effect.</p>    Removed in PHP 5.6.0.    <b><code>CURLOPT_CONNECTTIMEOUT</code></b>  The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.      <b><code>CURLOPT_CONNECTTIMEOUT_MS</code></b>  The number of milliseconds to wait while trying to connect. Use 0 to wait indefinitely. If libcurl is built to use the standard system name resolver, that portion of the connect will still use full-second resolution for timeouts with a minimum timeout allowed of one second.   Added in cURL 7.16.2. Available since PHP 5.2.3.    <b><code>CURLOPT_DNS_CACHE_TIMEOUT</code></b>  The number of seconds to keep DNS entries in memory. This option is set to 120 (2 minutes) by default.      <b><code>CURLOPT_EXPECT_100_TIMEOUT_MS</code></b>  The timeout for Expect: 100-continue responses in milliseconds. Defaults to 1000 milliseconds.   Added in cURL 7.36.0. Available since PHP 7.0.7.    <b><code>CURLOPT_FTPSSLAUTH</code></b>  The FTP authentication method (when is activated): <i>CURLFTPAUTH_SSL</i> (try SSL first), <i>CURLFTPAUTH_TLS</i> (try TLS first), or <i>CURLFTPAUTH_DEFAULT</i> (let cURL decide).   Added in cURL 7.12.2.    <b><code>CURLOPT_HEADEROPT</code></b>  How to deal with headers. One of the following constants:  <b><code>CURLHEADER_UNIFIED</code></b>: the headers specified in <b><code>CURLOPT_HTTPHEADER</code></b> will be used in requests both to servers and proxies. With this option enabled, <b><code>CURLOPT_PROXYHEADER</code></b> will not have any effect.   <b><code>CURLHEADER_SEPARATE</code></b>: makes <b><code>CURLOPT_HTTPHEADER</code></b> headers only get sent to a server and not to a proxy. Proxy headers must be set with <b><code>CURLOPT_PROXYHEADER</code></b> to get used. Note that if a non-CONNECT request is sent to a proxy, libcurl will send both server headers and proxy headers. When doing CONNECT, libcurl will send <b><code>CURLOPT_PROXYHEADER</code></b> headers only to the proxy and then <b><code>CURLOPT_HTTPHEADER</code></b> headers only to the server.   Defaults to <b><code>CURLHEADER_SEPARATE</code></b> as of cURL 7.42.1, and <b><code>CURLHEADER_UNIFIED</code></b> before.    Added in cURL 7.37.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HTTP_VERSION</code></b>  <code>CURL_HTTP_VERSION_NONE</code> (default, lets CURL decide which version to use), <code>CURL_HTTP_VERSION_1_0</code> (forces HTTP/1.0), or <code>CURL_HTTP_VERSION_1_1</code> (forces HTTP/1.1).      <b><code>CURLOPT_HTTPAUTH</code></b>  <p>The HTTP authentication method(s) to use. The options are: <code>CURLAUTH_BASIC</code>, <code>CURLAUTH_DIGEST</code>, <code>CURLAUTH_GSSNEGOTIATE</code>, <code>CURLAUTH_NTLM</code>, <code>CURLAUTH_ANY</code>, and <code>CURLAUTH_ANYSAFE</code>.</p> <p>The bitwise <i>|</i> (or) operator can be used to combine more than one method. If this is done, cURL will poll the server to see what methods it supports and pick the best one.</p> <p><code>CURLAUTH_ANY</code> is an alias for <i>CURLAUTH_BASIC | CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</i>.</p> <p><code>CURLAUTH_ANYSAFE</code> is an alias for <i>CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</i>.</p>      <b><code>CURLOPT_INFILESIZE</code></b>  The expected size, in bytes, of the file when uploading a file to a remote site. Note that using this option will not stop libcurl from sending more data, as exactly what is sent depends on <b><code>CURLOPT_READFUNCTION</code></b>.      <b><code>CURLOPT_LOW_SPEED_LIMIT</code></b>  The transfer speed, in bytes per second, that the transfer should be below during the count of <b><code>CURLOPT_LOW_SPEED_TIME</code></b> seconds before PHP considers the transfer too slow and aborts.      <b><code>CURLOPT_LOW_SPEED_TIME</code></b>  The number of seconds the transfer speed should be below <b><code>CURLOPT_LOW_SPEED_LIMIT</code></b> before PHP considers the transfer too slow and aborts.      <b><code>CURLOPT_MAXCONNECTS</code></b>  The maximum amount of persistent connections that are allowed. When the limit is reached, <b><code>CURLOPT_CLOSEPOLICY</code></b> is used to determine which connection to close.      <b><code>CURLOPT_MAXREDIRS</code></b>  The maximum amount of HTTP redirections to follow. Use this option alongside <b><code>CURLOPT_FOLLOWLOCATION</code></b>.      <b><code>CURLOPT_PORT</code></b>  An alternative port number to connect to.      <b><code>CURLOPT_POSTREDIR</code></b>  A bitmask of 1 (301 Moved Permanently), 2 (302 Found) and 4 (303 See Other) if the HTTP POST method should be maintained when <b><code>CURLOPT_FOLLOWLOCATION</code></b> is set and a specific type of redirect occurs.   Added in cURL 7.19.1. Available since PHP 5.3.2.    <b><code>CURLOPT_PROTOCOLS</code></b>  <p>Bitmask of <b><code>CURLPROTO_&#42;</code></b> values. If used, this bitmask limits what protocols libcurl may use in the transfer. This allows you to have a libcurl built to support a wide range of protocols but still limit specific transfers to only be allowed to use a subset of them. By default libcurl will accept all protocols it supports. See also <b><code>CURLOPT_REDIR_PROTOCOLS</code></b>.</p> <p>Valid protocol options are: <code>CURLPROTO_HTTP</code>, <code>CURLPROTO_HTTPS</code>, <code>CURLPROTO_FTP</code>, <code>CURLPROTO_FTPS</code>, <code>CURLPROTO_SCP</code>, <code>CURLPROTO_SFTP</code>, <code>CURLPROTO_TELNET</code>, <code>CURLPROTO_LDAP</code>, <code>CURLPROTO_LDAPS</code>, <code>CURLPROTO_DICT</code>, <code>CURLPROTO_FILE</code>, <code>CURLPROTO_TFTP</code>, <code>CURLPROTO_ALL</code></p>   Added in cURL 7.19.4.    <b><code>CURLOPT_PROXYAUTH</code></b>  The HTTP authentication method(s) to use for the proxy connection. Use the same bitmasks as described in <b><code>CURLOPT_HTTPAUTH</code></b>. For proxy authentication, only <code>CURLAUTH_BASIC</code> and <code>CURLAUTH_NTLM</code> are currently supported.   Added in cURL 7.10.7.    <b><code>CURLOPT_PROXYPORT</code></b>  The port number of the proxy to connect to. This port number can also be set in <b><code>CURLOPT_PROXY</code></b>.      <b><code>CURLOPT_PROXYTYPE</code></b>  Either <b><code>CURLPROXY_HTTP</code></b> (default), <b><code>CURLPROXY_SOCKS4</code></b>, <b><code>CURLPROXY_SOCKS5</code></b>, <b><code>CURLPROXY_SOCKS4A</code></b> or <b><code>CURLPROXY_SOCKS5_HOSTNAME</code></b>.   Added in cURL 7.10.    <b><code>CURLOPT_REDIR_PROTOCOLS</code></b>  Bitmask of <b><code>CURLPROTO_&#42;</code></b> values. If used, this bitmask limits what protocols libcurl may use in a transfer that it follows to in a redirect when <b><code>CURLOPT_FOLLOWLOCATION</code></b> is enabled. This allows you to limit specific transfers to only be allowed to use a subset of protocols in redirections. By default libcurl will allow all protocols except for FILE and SCP. This is a difference compared to pre-7.19.4 versions which unconditionally would follow to all protocols supported. See also <b><code>CURLOPT_PROTOCOLS</code></b> for protocol constant values.   Added in cURL 7.19.4.    <b><code>CURLOPT_RESUME_FROM</code></b>  The offset, in bytes, to resume a transfer from.      <b><code>CURLOPT_SSL_OPTIONS</code></b>  Set SSL behavior options, which is a bitmask of any of the following constants:  <b><code>CURLSSLOPT_ALLOW_BEAST</code></b>: do not attempt to use any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.   <b><code>CURLSSLOPT_NO_REVOKE</code></b>: disable certificate revocation checks for those SSL backends where such behavior is present.    Added in cURL 7.25.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_VERIFYHOST</code></b>  <i>1</i> to check the existence of a common name in the SSL peer certificate. <i>2</i> to check the existence of a common name and also verify that it matches the hostname provided. <i>0</i> to not check the names. In production environments the value of this option should be kept at <i>2</i> (default value).   Support for value <i>1</i> removed in cURL 7.28.1.    <b><code>CURLOPT_SSLVERSION</code></b>  One of <b><code>CURL_SSLVERSION_DEFAULT</code></b> (0), <b><code>CURL_SSLVERSION_TLSv1</code></b> (1), <b><code>CURL_SSLVERSION_SSLv2</code></b> (2), <b><code>CURL_SSLVERSION_SSLv3</code></b> (3), <b><code>CURL_SSLVERSION_TLSv1_0</code></b> (4), <b><code>CURL_SSLVERSION_TLSv1_1</code></b> (5) or <b><code>CURL_SSLVERSION_TLSv1_2</code></b> (6). <p><b>Note</b>:</p><p>Your best bet is to not set this and let it use the default. Setting it to 2 or 3 is very dangerous given the known vulnerabilities in SSLv2 and SSLv3.</p>       <b><code>CURLOPT_STREAM_WEIGHT</code></b>  Set the numerical stream weight (a number between 1 and 256).   Added in cURL 7.46.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TIMECONDITION</code></b>  How <b><code>CURLOPT_TIMEVALUE</code></b> is treated. Use <code>CURL_TIMECOND_IFMODSINCE</code> to return the page only if it has been modified since the time specified in <b><code>CURLOPT_TIMEVALUE</code></b>. If it hasn't been modified, a <i>"304 Not Modified"</i> header will be returned assuming <b><code>CURLOPT_HEADER</code></b> is <b><code>TRUE</code></b>. Use <code>CURL_TIMECOND_IFUNMODSINCE</code> for the reverse effect. <code>CURL_TIMECOND_IFMODSINCE</code> is the default.      <b><code>CURLOPT_TIMEOUT</code></b>  The maximum number of seconds to allow cURL functions to execute.      <b><code>CURLOPT_TIMEOUT_MS</code></b>  The maximum number of milliseconds to allow cURL functions to execute. If libcurl is built to use the standard system name resolver, that portion of the connect will still use full-second resolution for timeouts with a minimum timeout allowed of one second.   Added in cURL 7.16.2. Available since PHP 5.2.3.    <b><code>CURLOPT_TIMEVALUE</code></b>  The time in seconds since January 1st, 1970. The time will be used by <b><code>CURLOPT_TIMECONDITION</code></b>. By default, <code>CURL_TIMECOND_IFMODSINCE</code> is used.      <b><code>CURLOPT_MAX_RECV_SPEED_LARGE</code></b>  If a download exceeds this speed (counted in bytes per second) on cumulative average during the transfer, the transfer will pause to keep the average rate less than or equal to the parameter value. Defaults to unlimited speed.   Added in cURL 7.15.5. Available since PHP 5.4.0.    <b><code>CURLOPT_MAX_SEND_SPEED_LARGE</code></b>  If an upload exceeds this speed (counted in bytes per second) on cumulative average during the transfer, the transfer will pause to keep the average rate less than or equal to the parameter value. Defaults to unlimited speed.   Added in cURL 7.15.5. Available since PHP 5.4.0.    <b><code>CURLOPT_SSH_AUTH_TYPES</code></b>  A bitmask consisting of one or more of <b><code>CURLSSH_AUTH_PUBLICKEY</code></b>, <b><code>CURLSSH_AUTH_PASSWORD</code></b>, <b><code>CURLSSH_AUTH_HOST</code></b>, <b><code>CURLSSH_AUTH_KEYBOARD</code></b>. Set to <b><code>CURLSSH_AUTH_ANY</code></b> to let libcurl pick one.   Added in cURL 7.16.1.    <b><code>CURLOPT_IPRESOLVE</code></b>  Allows an application to select what kind of IP addresses to use when resolving host names. This is only interesting when using host names that resolve addresses using more than one version of IP, possible values are <b><code>CURL_IPRESOLVE_WHATEVER</code></b>, <b><code>CURL_IPRESOLVE_V4</code></b>, <b><code>CURL_IPRESOLVE_V6</code></b>, by default <b><code>CURL_IPRESOLVE_WHATEVER</code></b>.   Added in cURL 7.10.8.    <b><code>CURLOPT_FTP_FILEMETHOD</code></b>  Tell curl which method to use to reach a file on a FTP(S) server. Possible values are <b><code>CURLFTPMETHOD_MULTICWD</code></b>, <b><code>CURLFTPMETHOD_NOCWD</code></b> and <b><code>CURLFTPMETHOD_SINGLECWD</code></b>.   Added in cURL 7.15.1. Available since PHP 5.3.0.     <p><code>value</code> should be a <code>string</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_CAINFO</code></b>  The name of a file holding one or more certificates to verify the peer with. This only makes sense when used in combination with <b><code>CURLOPT_SSL_VERIFYPEER</code></b>.   Might require an absolute path.    <b><code>CURLOPT_CAPATH</code></b>  A directory that holds multiple CA certificates. Use this option alongside <b><code>CURLOPT_SSL_VERIFYPEER</code></b>.      <b><code>CURLOPT_COOKIE</code></b>  The contents of the <i>"Cookie: "</i> header to be used in the HTTP request. Note that multiple cookies are separated with a semicolon followed by a space (e.g., "<i>fruit=apple; colour=red</i>")      <b><code>CURLOPT_COOKIEFILE</code></b>  The name of the file containing the cookie data. The cookie file can be in Netscape format, or just plain HTTP-style headers dumped into a file. If the name is an empty string, no cookies are loaded, but cookie handling is still enabled.      <b><code>CURLOPT_COOKIEJAR</code></b>  The name of a file to save all internal cookies to when the handle is closed, e.g. after a call to curl_close.      <b><code>CURLOPT_CUSTOMREQUEST</code></b> <p>A custom request method to use instead of <i>"GET"</i> or <i>"HEAD"</i> when doing a HTTP request. This is useful for doing <i>"DELETE"</i> or other, more obscure HTTP requests. Valid values are things like <i>"GET"</i>, <i>"POST"</i>, <i>"CONNECT"</i> and so on; i.e. Do not enter a whole HTTP request line here. For instance, entering <i>"GET /index.html HTTP/1.0\r\n\r\n"</i> would be incorrect.</p><p><b>Note</b>:</p><p>Don't do this without making sure the server supports the custom request method first.</p>       <b><code>CURLOPT_DEFAULT_PROTOCOL</code></b> <p>The default protocol to use if the URL is missing a scheme name.</p>  Added in cURL 7.45.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_INTERFACE</code></b> <p>Set the name of the network interface that the DNS resolver should bind to. This must be an interface name (not an address).</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_LOCAL_IP4</code></b> <p>Set the local IPv4 address that the resolver should bind to. The argument should contain a single numerical IPv4 address as a string.</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_LOCAL_IP6</code></b> <p>Set the local IPv6 address that the resolver should bind to. The argument should contain a single numerical IPv6 address as a string.</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_EGDSOCKET</code></b>  Like <b><code>CURLOPT_RANDOM_FILE</code></b>, except a filename to an Entropy Gathering Daemon socket.      <b><code>CURLOPT_ENCODING</code></b>  The contents of the <i>"Accept-Encoding: "</i> header. This enables decoding of the response. Supported encodings are <i>"identity"</i>, <i>"deflate"</i>, and <i>"gzip"</i>. If an empty string, <i>""</i>, is set, a header containing all supported encoding types is sent.   Added in cURL 7.10.    <b><code>CURLOPT_FTPPORT</code></b>  The value which will be used to get the IP address to use for the FTP "PORT" instruction. The "PORT" instruction tells the remote server to connect to our specified IP address. The string may be a plain IP address, a hostname, a network interface name (under Unix), or just a plain '-' to use the systems default IP address.      <b><code>CURLOPT_INTERFACE</code></b>  The name of the outgoing network interface to use. This can be an interface name, an IP address or a host name.      <b><code>CURLOPT_KEYPASSWD</code></b>  The password required to use the <b><code>CURLOPT_SSLKEY</code></b> or <b><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></b> private key.   Added in cURL 7.16.1.    <b><code>CURLOPT_KRB4LEVEL</code></b>  The KRB4 (Kerberos 4) security level. Any of the following values (in order from least to most powerful) are valid: <i>"clear"</i>, <i>"safe"</i>, <i>"confidential"</i>, <i>"private".</i>. If the string does not match one of these, <i>"private"</i> is used. Setting this option to <b><code>NULL</code></b> will disable KRB4 security. Currently KRB4 security only works with FTP transactions.      <b><code>CURLOPT_LOGIN_OPTIONS</code></b>  Can be used to set protocol specific login options, such as the preferred authentication mechanism via "AUTH=NTLM" or "AUTH=&#42;", and should be used in conjunction with the <b><code>CURLOPT_USERNAME</code></b> option.   Added in cURL 7.34.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PINNEDPUBLICKEY</code></b>  Set the pinned public key. The string can be the file name of your pinned public key. The file format expected is "PEM" or "DER". The string can also be any number of base64 encoded sha256 hashes preceded by "sha256//" and separated by ";".   Added in cURL 7.39.0. Available since PHP 7.0.7.    <b><code>CURLOPT_POSTFIELDS</code></b>   The full data to post in a HTTP "POST" operation. To post a file, prepend a filename with <i>@</i> and use the full path. The filetype can be explicitly specified by following the filename with the type in the format '<i>;type=mimetype</i>'. This parameter can either be passed as a urlencoded string like '<i>para1=val1&amp;para2=val2&amp;...</i>' or as an array with the field name as key and field data as value. If <code>value</code> is an array, the <i>Content-Type</i> header will be set to <i>multipart/form-data</i>.   As of PHP 5.2.0, <code>value</code> must be an array if files are passed to this option with the <i>@</i> prefix.   As of PHP 5.5.0, the <i>@</i> prefix is deprecated and files can be sent using CURLFile. The <i>@</i> prefix can be disabled for safe passing of values beginning with <i>@</i> by setting the <b><code>CURLOPT_SAFE_UPLOAD</code></b> option to <b><code>TRUE</code></b>.       <b><code>CURLOPT_PRIVATE</code></b>  Any data that should be associated with this cURL handle. This data can subsequently be retrieved with the <b><code>CURLINFO_PRIVATE</code></b> option of <code>curl_getinfo()</code>. cURL does nothing with this data. When using a cURL multi handle, this private data is typically a unique key to identify a standard cURL handle.   Added in cURL 7.10.3.    <b><code>CURLOPT_PROXY</code></b>  The HTTP proxy to tunnel requests through.      <b><code>CURLOPT_PROXY_SERVICE_NAME</code></b>  The proxy authentication service name.   Added in cURL 7.34.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PROXYUSERPWD</code></b>  A username and password formatted as <i>"[username]:[password]"</i> to use for the connection to the proxy.      <b><code>CURLOPT_RANDOM_FILE</code></b>  A filename to be used to seed the random number generator for SSL.      <b><code>CURLOPT_RANGE</code></b>  Range(s) of data to retrieve in the format <i>"X-Y"</i> where X or Y are optional. HTTP transfers also support several intervals, separated with commas in the format <i>"X-Y,N-M"</i>.      <b><code>CURLOPT_REFERER</code></b>  The contents of the <i>"Referer: "</i> header to be used in a HTTP request.      <b><code>CURLOPT_SERVICE_NAME</code></b>  The authentication service name.   Added in cURL 7.43.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</code></b>  A string containing 32 hexadecimal digits. The string should be the MD5 checksum of the remote host's public key, and libcurl will reject the connection to the host unless the md5sums match. This option is only for SCP and SFTP transfers.   Added in cURL 7.17.1.    <b><code>CURLOPT_SSH_PUBLIC_KEYFILE</code></b>  The file name for your public key. If not used, libcurl defaults to $HOME/.ssh/id_dsa.pub if the HOME environment variable is set, and just "id_dsa.pub" in the current directory if HOME is not set.   Added in cURL 7.16.1.    <b><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></b>  The file name for your private key. If not used, libcurl defaults to $HOME/.ssh/id_dsa if the HOME environment variable is set, and just "id_dsa" in the current directory if HOME is not set. If the file is password-protected, set the password with <b><code>CURLOPT_KEYPASSWD</code></b>.   Added in cURL 7.16.1.    <b><code>CURLOPT_SSL_CIPHER_LIST</code></b>  A list of ciphers to use for SSL. For example, <i>RC4-SHA</i> and <i>TLSv1</i> are valid cipher lists.      <b><code>CURLOPT_SSLCERT</code></b>  The name of a file containing a PEM formatted certificate.      <b><code>CURLOPT_SSLCERTPASSWD</code></b>  The password required to use the <b><code>CURLOPT_SSLCERT</code></b> certificate.      <b><code>CURLOPT_SSLCERTTYPE</code></b>  The format of the certificate. Supported formats are <i>"PEM"</i> (default), <i>"DER"</i>, and <i>"ENG"</i>.   Added in cURL 7.9.3.    <b><code>CURLOPT_SSLENGINE</code></b>  The identifier for the crypto engine of the private SSL key specified in <b><code>CURLOPT_SSLKEY</code></b>.      <b><code>CURLOPT_SSLENGINE_DEFAULT</code></b>  The identifier for the crypto engine used for asymmetric crypto operations.      <b><code>CURLOPT_SSLKEY</code></b>  The name of a file containing a private SSL key.      <b><code>CURLOPT_SSLKEYPASSWD</code></b> <p>The secret password needed to use the private SSL key specified in <b><code>CURLOPT_SSLKEY</code></b>.</p><p><b>Note</b>:</p><p>Since this option contains a sensitive password, remember to keep the PHP script it is contained within safe.</p>       <b><code>CURLOPT_SSLKEYTYPE</code></b>  The key type of the private SSL key specified in <b><code>CURLOPT_SSLKEY</code></b>. Supported key types are <i>"PEM"</i> (default), <i>"DER"</i>, and <i>"ENG"</i>.      <b><code>CURLOPT_UNIX_SOCKET_PATH</code></b>  Enables the use of Unix domain sockets as connection endpoint and sets the path to the given <code>string</code>.   Added in cURL 7.40.0. Available since PHP 7.0.7.    <b><code>CURLOPT_URL</code></b>  The URL to fetch. This can also be set when initializing a session with <code>curl_init()</code>.      <b><code>CURLOPT_USERAGENT</code></b>  The contents of the <i>"User-Agent: "</i> header to be used in a HTTP request.      <b><code>CURLOPT_USERNAME</code></b>  The user name to use in authentication.   Added in cURL 7.19.1. Available since PHP 5.5.0.    <b><code>CURLOPT_USERPWD</code></b>  A username and password formatted as <i>"[username]:[password]"</i> to use for the connection.      <b><code>CURLOPT_XOAUTH2_BEARER</code></b>  Specifies the OAuth 2.0 access token.   Added in cURL 7.33.0. Available since PHP 7.0.7.     <p><code>value</code> should be an array for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_CONNECT_TO</code></b>  Connect to a specific host and port instead of the URL's host and port. Accepts an array of strings with the format <i>HOST:PORT:CONNECT-TO-HOST:CONNECT-TO-PORT</i>.   Added in cURL 7.49.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HTTP200ALIASES</code></b>  An array of HTTP 200 responses that will be treated as valid responses and not as errors.   Added in cURL 7.10.3.    <b><code>CURLOPT_HTTPHEADER</code></b>  An array of HTTP header fields to set, in the format <code> array('Content-type: text/plain', 'Content-length: 100') </code>      <b><code>CURLOPT_POSTQUOTE</code></b>  An array of FTP commands to execute on the server after the FTP request has been performed.      <b><code>CURLOPT_PROXYHEADER</code></b>  An array of custom HTTP headers to pass to proxies.   Added in cURL 7.37.0. Available since PHP 7.0.7.    <b><code>CURLOPT_QUOTE</code></b>  An array of FTP commands to execute on the server prior to the FTP request.      <b><code>CURLOPT_RESOLVE</code></b>  Provide a custom address for a specific host and port pair. An array of hostname, port, and IP address strings, each element separated by a colon. In the format: <code> array("example.com:80:127.0.0.1") </code>   Added in cURL 7.21.3. Available since PHP 5.5.0.     <p><code>value</code> should be a stream resource (using <code>fopen()</code>, for example) for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to     <b><code>CURLOPT_FILE</code></b>  The file that the transfer should be written to. The default is <i>STDOUT</i> (the browser window).    <b><code>CURLOPT_INFILE</code></b>  The file that the transfer should be read from when uploading.    <b><code>CURLOPT_STDERR</code></b>  An alternative location to output errors to instead of <i>STDERR</i>.    <b><code>CURLOPT_WRITEHEADER</code></b>  The file that the header part of the transfer is written to.     <p><code>value</code> should be the name of a valid function or a Closure for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to     <b><code>CURLOPT_HEADERFUNCTION</code></b>  A callback accepting two parameters. The first is the cURL resource, the second is a string with the header data to be written. The header data must be written by this callback. Return the number of bytes written.    <b><code>CURLOPT_PASSWDFUNCTION</code></b>  A callback accepting three parameters. The first is the cURL resource, the second is a string containing a password prompt, and the third is the maximum password length. Return the string containing the password.    <b><code>CURLOPT_PROGRESSFUNCTION</code></b>  <p>A callback accepting five parameters. The first is the cURL resource, the second is the total number of bytes expected to be downloaded in this transfer, the third is the number of bytes downloaded so far, the fourth is the total number of bytes expected to be uploaded in this transfer, and the fifth is the number of bytes uploaded so far.</p> <p><b>Note</b>:</p><p>The callback is only called when the <b><code>CURLOPT_NOPROGRESS</code></b> option is set to <b><code>FALSE</code></b>.</p>  <p>Return a non-zero value to abort the transfer. In which case, the transfer will set a <b><code>CURLE_ABORTED_BY_CALLBACK</code></b> error.</p>    <b><code>CURLOPT_READFUNCTION</code></b>  A callback accepting three parameters. The first is the cURL resource, the second is a stream resource provided to cURL through the option <b><code>CURLOPT_INFILE</code></b>, and the third is the maximum amount of data to be read. The callback must return a string with a length equal or smaller than the amount of data requested, typically by reading it from the passed stream resource. It should return an empty string to signal <i>EOF</i>.    <b><code>CURLOPT_WRITEFUNCTION</code></b>  A callback accepting two parameters. The first is the cURL resource, and the second is a string with the data to be written. The data must be saved by this callback. It must return the exact number of bytes written or the transfer will be aborted with an error.     <p>Other values:</p>   Option Set <code>value</code> to     <b><code>CURLOPT_SHARE</code></b>  A result of <code>curl_share_init()</code>. Makes the cURL handle to use the data from the shared handle.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-setopt.php
	 * @see curl_setopt_array()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function curl_setopt($ch, int $option, $value): bool {}

	/**
	 * Set multiple options for a cURL transfer
	 * <p>Sets multiple options for a cURL session. This function is useful for setting a large number of cURL options without repetitively calling <code>curl_setopt()</code>.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param array $options <p>An <code>array</code> specifying which options to set and their values. The keys should be valid <code>curl_setopt()</code> constants or their integer equivalents.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if all options were successfully set. If an option could not be successfully set, <b><code>FALSE</code></b> is immediately returned, ignoring any future options in the <code>options</code> array.</p>
	 * @link http://php.net/manual/en/function.curl-setopt-array.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	function curl_setopt_array($ch, array $options): bool {}

	/**
	 * Close a cURL share handle
	 * <p>Closes a cURL share handle and frees all resources.</p>
	 * @param resource $sh <p>A cURL share handle returned by <code>curl_share_init()</code></p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.curl-share-close.php
	 * @see curl_share_init()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_share_close($sh): void {}

	/**
	 * Return the last share curl error number
	 * <p>Return an integer containing the last share curl error number.</p>
	 * @param resource $sh <p>A cURL share handle returned by <code>curl_share_init()</code>.</p>
	 * @return int <p>Returns an integer containing the last share curl error number, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-share-errno.php
	 * @see curl_errno()
	 * @since PHP 7 >= 7.1.0
	 */
	function curl_share_errno($sh): int {}

	/**
	 * Initialize a cURL share handle
	 * <p>Allows to share data between cURL handles.</p>
	 * @return resource <p>Returns resource of type "cURL Share Handle".</p>
	 * @link http://php.net/manual/en/function.curl-share-init.php
	 * @see curl_share_setopt(), curl_share_close()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_share_init() {}

	/**
	 * Set an option for a cURL share handle
	 * <p>Sets an option on the given cURL share handle.</p>
	 * @param resource $sh <p>A cURL share handle returned by <code>curl_share_init()</code>.</p>
	 * @param int $option <p></p>   Option Description     <b><code>CURLSHOPT_SHARE</code></b>  Specifies a type of data that should be shared.    <b><code>CURLSHOPT_UNSHARE</code></b>  Specifies a type of data that will be no longer shared.
	 * @param string $value <p></p>   Value Description     <b><code>CURL_LOCK_DATA_COOKIE</code></b>  Shares cookie data.    <b><code>CURL_LOCK_DATA_DNS</code></b>  Shares DNS cache. Note that when you use cURL multi handles, all handles added to the same multi handle will share DNS cache by default.    <b><code>CURL_LOCK_DATA_SSL_SESSION</code></b>  Shares SSL session IDs, reducing the time spent on the SSL handshake when reconnecting to the same server. Note that SSL session IDs are reused within the same handle by default.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-share-setopt.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_share_setopt($sh, int $option, string $value): bool {}

	/**
	 * Return string describing the given error code
	 * <p>Returns a text error message describing the given error code.</p>
	 * @param int $errornum <p>One of the cURL error codes constants.</p>
	 * @return string <p>Returns error description or <b><code>NULL</code></b> for invalid error code.</p>
	 * @link http://php.net/manual/en/function.curl-share-strerror.php
	 * @see curl_share_errno(), curl_strerror()
	 * @since PHP 7 >= 7.1.0
	 */
	function curl_share_strerror(int $errornum): string {}

	/**
	 * Return string describing the given error code
	 * <p>Returns a text error message describing the given error code.</p>
	 * @param int $errornum <p>One of the cURL error codes constants.</p>
	 * @return string <p>Returns error description or <b><code>NULL</code></b> for invalid error code.</p>
	 * @link http://php.net/manual/en/function.curl-strerror.php
	 * @see curl_errno(), curl_error()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_strerror(int $errornum): string {}

	/**
	 * Decodes the given URL encoded string
	 * <p>This function decodes the given URL encoded string.</p>
	 * @param resource $ch <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param string $str <p>The URL encoded string to be decoded.</p>
	 * @return string <p>Returns decoded string or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.curl-unescape.php
	 * @see curl_escape(), urlencode(), urldecode(), rawurlencode(), rawurldecode()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function curl_unescape($ch, string $str): string {}

	/**
	 * Gets cURL version information
	 * <p>Returns information about the cURL version.</p>
	 * @param int $age
	 * @return array <p>Returns an associative array with the following elements:</p>   Indice Value description     version_number cURL 24 bit version number   version cURL version number, as a string   ssl_version_number OpenSSL 24 bit version number   ssl_version OpenSSL version number, as a string   libz_version zlib version number, as a string   host Information about the host where cURL was built   age &nbsp;   features A bitmask of the <i>CURL_VERSION_XXX</i> constants   protocols An array of protocols names supported by cURL
	 * @link http://php.net/manual/en/function.curl-version.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function curl_version(int $age = CURLVERSION_NOW): array {}

	define('CURL_HTTP_VERSION_1_0', 1);

	define('CURL_HTTP_VERSION_1_1', 2);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURL_HTTP_VERSION_2', 3);

	/**
	 * Available since PHP 7.0.7 and cURL 7.49.0
	 */
	define('CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE', 5);

	/**
	 * Available since PHP 7.0.7 and cURL 7.47.0
	 */
	define('CURL_HTTP_VERSION_2TLS', 4);

	define('CURL_HTTP_VERSION_NONE', 0);

	define('CURL_NETRC_IGNORED', 0);

	define('CURL_NETRC_OPTIONAL', 1);

	define('CURL_NETRC_REQUIRED', 2);

	/**
	 * Available since PHP 7.1.0 and cURL 7.44.0
	 */
	define('CURL_PUSH_DENY', 1);

	/**
	 * Available since PHP 7.1.0 and cURL 7.44.0
	 */
	define('CURL_PUSH_OK', 0);

	/**
	 * Available since PHP 7.0.7 and cURL 7.18.2
	 */
	define('CURL_REDIR_POST_301', 1);

	/**
	 * Available since PHP 7.0.7 and cURL 7.18.2
	 */
	define('CURL_REDIR_POST_302', 2);

	/**
	 * Available since PHP 7.0.7 and cURL 7.25.1
	 */
	define('CURL_REDIR_POST_303', 4);

	/**
	 * Available since PHP 7.0.7 and cURL 7.18.2
	 */
	define('CURL_REDIR_POST_ALL', 7);

	define('CURL_SSLVERSION_DEFAULT', 0);

	define('CURL_SSLVERSION_SSLv2', 2);

	define('CURL_SSLVERSION_SSLv3', 3);

	define('CURL_SSLVERSION_TLSv1', 1);

	/**
	 * Available since PHP 5.5.19 and 5.6.3
	 */
	define('CURL_SSLVERSION_TLSv1_0', 4);

	/**
	 * Available since PHP 5.5.19 and 5.6.3
	 */
	define('CURL_SSLVERSION_TLSv1_1', 5);

	/**
	 * Available since PHP 5.5.19 and 5.6.3
	 */
	define('CURL_SSLVERSION_TLSv1_2', 6);

	define('CURL_TIMECOND_IFMODSINCE', 1);

	define('CURL_TIMECOND_IFUNMODSINCE', 2);

	define('CURL_TIMECOND_LASTMOD', 3);

	/**
	 * Available since PHP 5.5.24 and 5.6.8 and cURL 7.33.0
	 */
	define('CURL_VERSION_HTTP2', 65536);

	define('CURL_VERSION_IPV6', 1);

	define('CURL_VERSION_KERBEROS4', 2);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0
	 */
	define('CURL_VERSION_KERBEROS5', null);

	define('CURL_VERSION_LIBZ', 8);

	/**
	 * Available since PHP 7.0.7 and cURL 7.47.0
	 */
	define('CURL_VERSION_PSL', null);

	define('CURL_VERSION_SSL', 4);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0
	 */
	define('CURL_VERSION_UNIX_SOCKETS', null);

	/**
	 * Defined if PHP was configured with <b>--with-curlwrappers</b> . Moved to PECL in PHP 5.5.0.
	 */
	define('CURL_WRAPPERS_ENABLED', null);

	define('CURLAUTH_ANY', -17);

	define('CURLAUTH_ANYSAFE', -18);

	define('CURLAUTH_BASIC', 1);

	define('CURLAUTH_DIGEST', 2);

	define('CURLAUTH_GSSNEGOTIATE', 4);

	/**
	 * Available since PHP 7.0.7 and cURL 7.38.0.
	 */
	define('CURLAUTH_NEGOTIATE', 4);

	define('CURLAUTH_NTLM', 8);

	/**
	 * Available since PHP 7.0.7 and cURL 7.22.0
	 */
	define('CURLAUTH_NTLM_WB', 32);

	/**
	 * Removed in PHP 5.6.0.
	 */
	define('CURLCLOSEPOLICY_CALLBACK', null);

	/**
	 * Removed in PHP 5.6.0.
	 */
	define('CURLCLOSEPOLICY_LEAST_RECENTLY_USED', null);

	/**
	 * Removed in PHP 5.6.0.
	 */
	define('CURLCLOSEPOLICY_LEAST_TRAFFIC', null);

	/**
	 * Removed in PHP 5.6.0.
	 */
	define('CURLCLOSEPOLICY_OLDEST', null);

	/**
	 * Removed in PHP 5.6.0.
	 */
	define('CURLCLOSEPOLICY_SLOWEST', null);

	define('CURLE_ABORTED_BY_CALLBACK', 42);

	define('CURLE_BAD_CALLING_ORDER', 44);

	define('CURLE_BAD_CONTENT_ENCODING', 61);

	define('CURLE_BAD_FUNCTION_ARGUMENT', 43);

	define('CURLE_BAD_PASSWORD_ENTERED', 46);

	define('CURLE_COULDNT_CONNECT', 7);

	define('CURLE_COULDNT_RESOLVE_HOST', 6);

	define('CURLE_COULDNT_RESOLVE_PROXY', 5);

	define('CURLE_FAILED_INIT', 2);

	define('CURLE_FILE_COULDNT_READ_FILE', 37);

	define('CURLE_FILESIZE_EXCEEDED', 63);

	define('CURLE_FTP_ACCESS_DENIED', 9);

	define('CURLE_FTP_BAD_DOWNLOAD_RESUME', 36);

	define('CURLE_FTP_CANT_GET_HOST', 15);

	define('CURLE_FTP_CANT_RECONNECT', 16);

	define('CURLE_FTP_COULDNT_GET_SIZE', 32);

	define('CURLE_FTP_COULDNT_RETR_FILE', 19);

	define('CURLE_FTP_COULDNT_SET_ASCII', 29);

	define('CURLE_FTP_COULDNT_SET_BINARY', 17);

	define('CURLE_FTP_COULDNT_STOR_FILE', 25);

	define('CURLE_FTP_COULDNT_USE_REST', 31);

	define('CURLE_FTP_PORT_FAILED', 30);

	define('CURLE_FTP_QUOTE_ERROR', 21);

	define('CURLE_FTP_SSL_FAILED', 64);

	define('CURLE_FTP_USER_PASSWORD_INCORRECT', 10);

	define('CURLE_FTP_WEIRD_227_FORMAT', 14);

	define('CURLE_FTP_WEIRD_PASS_REPLY', 11);

	define('CURLE_FTP_WEIRD_PASV_REPLY', 13);

	define('CURLE_FTP_WEIRD_SERVER_REPLY', 8);

	define('CURLE_FTP_WEIRD_USER_REPLY', 12);

	define('CURLE_FTP_WRITE_ERROR', 20);

	define('CURLE_FUNCTION_NOT_FOUND', 41);

	define('CURLE_GOT_NOTHING', 52);

	define('CURLE_HTTP_NOT_FOUND', 22);

	define('CURLE_HTTP_PORT_FAILED', 45);

	define('CURLE_HTTP_POST_ERROR', 34);

	define('CURLE_HTTP_RANGE_ERROR', 33);

	define('CURLE_LDAP_CANNOT_BIND', 38);

	define('CURLE_LDAP_INVALID_URL', 62);

	define('CURLE_LDAP_SEARCH_FAILED', 39);

	define('CURLE_LIBRARY_NOT_FOUND', 40);

	define('CURLE_MALFORMAT_USER', 24);

	define('CURLE_OBSOLETE', 50);

	define('CURLE_OK', 0);

	define('CURLE_OPERATION_TIMEOUTED', 28);

	define('CURLE_OUT_OF_MEMORY', 27);

	define('CURLE_PARTIAL_FILE', 18);

	define('CURLE_READ_ERROR', 26);

	define('CURLE_RECV_ERROR', 56);

	define('CURLE_SEND_ERROR', 55);

	define('CURLE_SHARE_IN_USE', 57);

	/**
	 * Available since PHP 5.3.0 and cURL 7.16.1.
	 */
	define('CURLE_SSH', 79);

	define('CURLE_SSL_CACERT', 60);

	define('CURLE_SSL_CERTPROBLEM', 58);

	define('CURLE_SSL_CIPHER', 59);

	define('CURLE_SSL_CONNECT_ERROR', 35);

	define('CURLE_SSL_ENGINE_NOTFOUND', 53);

	define('CURLE_SSL_ENGINE_SETFAILED', 54);

	define('CURLE_SSL_PEER_CERTIFICATE', 51);

	define('CURLE_TELNET_OPTION_SYNTAX', 49);

	define('CURLE_TOO_MANY_REDIRECTS', 47);

	define('CURLE_UNKNOWN_TELNET_OPTION', 48);

	define('CURLE_UNSUPPORTED_PROTOCOL', 1);

	define('CURLE_URL_MALFORMAT', 3);

	define('CURLE_URL_MALFORMAT_USER', 4);

	define('CURLE_WRITE_ERROR', 23);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLFTP_CREATE_DIR', 1);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLFTP_CREATE_DIR_NONE', 0);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLFTP_CREATE_DIR_RETRY', 2);

	/**
	 * Available since PHP 5.1.0
	 */
	define('CURLFTPAUTH_DEFAULT', 0);

	/**
	 * Available since PHP 5.1.0
	 */
	define('CURLFTPAUTH_SSL', 1);

	/**
	 * Available since PHP 5.1.0
	 */
	define('CURLFTPAUTH_TLS', 2);

	/**
	 * Available since PHP 5.2.0
	 */
	define('CURLFTPSSL_ALL', 3);

	/**
	 * Available since PHP 5.2.0
	 */
	define('CURLFTPSSL_CONTROL', 2);

	/**
	 * Available since PHP 5.2.0
	 */
	define('CURLFTPSSL_NONE', 0);

	/**
	 * Available since PHP 5.2.0
	 */
	define('CURLFTPSSL_TRY', 1);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0.
	 */
	define('CURLHEADER_SEPARATE', 1);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0.
	 */
	define('CURLHEADER_UNIFIED', 0);

	define('CURLINFO_CONNECT_TIME', 3145733);

	define('CURLINFO_CONTENT_LENGTH_DOWNLOAD', 3145743);

	define('CURLINFO_CONTENT_LENGTH_UPLOAD', 3145744);

	define('CURLINFO_CONTENT_TYPE', 1048594);

	define('CURLINFO_EFFECTIVE_URL', 1048577);

	define('CURLINFO_FILETIME', 2097166);

	/**
	 * Available since PHP 5.1.3
	 */
	define('CURLINFO_HEADER_OUT', 2);

	define('CURLINFO_HEADER_SIZE', 2097163);

	/**
	 * As of PHP 5.5.0 and cURL 7.10.8, this is a legacy alias of <b><code>CURLINFO_RESPONSE_CODE</code></b>
	 */
	define('CURLINFO_HTTP_CODE', 2097154);

	/**
	 * Available since PHP 5.4.7
	 */
	define('CURLINFO_LOCAL_IP', 1048617);

	/**
	 * Available since PHP 5.4.7
	 */
	define('CURLINFO_LOCAL_PORT', 2097194);

	define('CURLINFO_NAMELOOKUP_TIME', 3145732);

	define('CURLINFO_PRETRANSFER_TIME', 3145734);

	/**
	 * Available since PHP 5.4.7
	 */
	define('CURLINFO_PRIMARY_IP', 1048608);

	/**
	 * Available since PHP 5.4.7
	 */
	define('CURLINFO_PRIMARY_PORT', 2097192);

	/**
	 * Available since PHP 5.2.4
	 */
	define('CURLINFO_PRIVATE', 1048597);

	define('CURLINFO_REDIRECT_COUNT', 2097172);

	define('CURLINFO_REDIRECT_TIME', 3145747);

	/**
	 * Available since PHP 5.3.7
	 */
	define('CURLINFO_REDIRECT_URL', 1048607);

	define('CURLINFO_REQUEST_SIZE', 2097164);

	/**
	 * Available since PHP 5.5.0 and cURL 7.10.8
	 */
	define('CURLINFO_RESPONSE_CODE', 2097154);

	define('CURLINFO_SIZE_DOWNLOAD', 3145736);

	define('CURLINFO_SIZE_UPLOAD', 3145735);

	define('CURLINFO_SPEED_DOWNLOAD', 3145737);

	define('CURLINFO_SPEED_UPLOAD', 3145738);

	define('CURLINFO_SSL_VERIFYRESULT', 2097165);

	define('CURLINFO_STARTTRANSFER_TIME', 3145745);

	define('CURLINFO_TOTAL_TIME', 3145731);

	define('CURLM_BAD_EASY_HANDLE', 2);

	define('CURLM_BAD_HANDLE', 1);

	define('CURLM_CALL_MULTI_PERFORM', -1);

	define('CURLM_INTERNAL_ERROR', 4);

	define('CURLM_OK', 0);

	define('CURLM_OUT_OF_MEMORY', 3);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE', 30010);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE', 30009);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_MAX_HOST_CONNECTIONS', 7);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_MAX_PIPELINE_LENGTH', 8);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_MAX_TOTAL_CONNECTIONS', 13);

	/**
	 * Available since PHP 5.5.0 and cURL 7.16.3.
	 */
	define('CURLMOPT_MAXCONNECTS', 6);

	/**
	 * Available since PHP 5.5.0 and cURL 7.16.0.
	 */
	define('CURLMOPT_PIPELINING', 3);

	/**
	 * Available since PHP 7.1.0 and cURL 7.44.0
	 */
	define('CURLMOPT_PUSHFUNCTION', 20014);

	define('CURLMSG_DONE', 1);

	/**
	 * Available since PHP 5.1.0
	 */
	define('CURLOPT_AUTOREFERER', 58);

	define('CURLOPT_BINARYTRANSFER', 19914);

	define('CURLOPT_BUFFERSIZE', 98);

	define('CURLOPT_CAINFO', 10065);

	define('CURLOPT_CAPATH', 10097);

	/**
	 * Removed in PHP 5.6.0.
	 */
	define('CURLOPT_CLOSEPOLICY', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.49.0
	 */
	define('CURLOPT_CONNECT_TO', 10243);

	define('CURLOPT_CONNECTTIMEOUT', 78);

	define('CURLOPT_CONNECTTIMEOUT_MS', 156);

	define('CURLOPT_COOKIE', 10022);

	define('CURLOPT_COOKIEFILE', 10031);

	define('CURLOPT_COOKIEJAR', 10082);

	/**
	 * Available since PHP 5.1.0
	 */
	define('CURLOPT_COOKIESESSION', 96);

	define('CURLOPT_CRLF', 27);

	define('CURLOPT_CUSTOMREQUEST', 10036);

	/**
	 * Available since PHP 7.0.7 and cURL 7.45.0
	 */
	define('CURLOPT_DEFAULT_PROTOCOL', 10238);

	define('CURLOPT_DNS_CACHE_TIMEOUT', 92);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_DNS_INTERFACE', 10221);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_DNS_LOCAL_IP4', 10222);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_DNS_LOCAL_IP6', 10223);

	define('CURLOPT_DNS_USE_GLOBAL_CACHE', 91);

	define('CURLOPT_EGDSOCKET', 10077);

	define('CURLOPT_ENCODING', 10102);

	/**
	 * Available since PHP 7.0.7 and cURL 7.36.0
	 */
	define('CURLOPT_EXPECT_100_TIMEOUT_MS', 227);

	define('CURLOPT_FAILONERROR', 45);

	define('CURLOPT_FILE', 10001);

	define('CURLOPT_FILETIME', 69);

	/**
	 * This constant is not available when open_basedir or safe_mode are enabled.
	 */
	define('CURLOPT_FOLLOWLOCATION', 52);

	define('CURLOPT_FORBID_REUSE', 75);

	define('CURLOPT_FRESH_CONNECT', 74);

	define('CURLOPT_FTP_CREATE_MISSING_DIRS', 110);

	/**
	 * Available since PHP 5.2.0
	 */
	define('CURLOPT_FTP_SSL', 119);

	define('CURLOPT_FTP_USE_EPRT', 106);

	define('CURLOPT_FTP_USE_EPSV', 85);

	define('CURLOPT_FTPAPPEND', 50);

	define('CURLOPT_FTPASCII', null);

	define('CURLOPT_FTPLISTONLY', 48);

	define('CURLOPT_FTPPORT', 10017);

	/**
	 * Available since PHP 5.1.0
	 */
	define('CURLOPT_FTPSSLAUTH', 129);

	define('CURLOPT_HEADER', 42);

	define('CURLOPT_HEADERFUNCTION', 20079);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0
	 */
	define('CURLOPT_HEADEROPT', 229);

	define('CURLOPT_HTTP200ALIASES', 10104);

	define('CURLOPT_HTTP_VERSION', 84);

	define('CURLOPT_HTTPAUTH', 107);

	define('CURLOPT_HTTPGET', 80);

	define('CURLOPT_HTTPHEADER', 10023);

	define('CURLOPT_HTTPPROXYTUNNEL', 61);

	define('CURLOPT_INFILE', 10009);

	define('CURLOPT_INFILESIZE', 14);

	define('CURLOPT_INTERFACE', 10062);

	define('CURLOPT_KEYPASSWD', 10026);

	define('CURLOPT_KRB4LEVEL', 10063);

	/**
	 * Available since PHP 7.0.7 and cURL 7.34.0
	 */
	define('CURLOPT_LOGIN_OPTIONS', 10224);

	define('CURLOPT_LOW_SPEED_LIMIT', 19);

	define('CURLOPT_LOW_SPEED_TIME', 20);

	/**
	 * Available since PHP 5.4.0 and cURL 7.15.5
	 */
	define('CURLOPT_MAX_RECV_SPEED_LARGE', 30146);

	/**
	 * Available since PHP 5.4.0 and cURL 7.15.5
	 */
	define('CURLOPT_MAX_SEND_SPEED_LARGE', 30145);

	define('CURLOPT_MAXCONNECTS', 71);

	define('CURLOPT_MAXREDIRS', 68);

	define('CURLOPT_MUTE', null);

	define('CURLOPT_NETRC', 51);

	define('CURLOPT_NOBODY', 44);

	define('CURLOPT_NOPROGRESS', 43);

	define('CURLOPT_NOSIGNAL', 99);

	define('CURLOPT_PASSWDFUNCTION', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.42.0
	 */
	define('CURLOPT_PATH_AS_IS', 234);

	/**
	 * Available since PHP 7.0.7 and cURL 7.39.0
	 */
	define('CURLOPT_PINNEDPUBLICKEY', 10230);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURLOPT_PIPEWAIT', 237);

	define('CURLOPT_PORT', 3);

	define('CURLOPT_POST', 47);

	define('CURLOPT_POSTFIELDS', 10015);

	define('CURLOPT_POSTQUOTE', 10039);

	/**
	 * Available since PHP 5.2.4
	 */
	define('CURLOPT_PRIVATE', 10103);

	/**
	 * Available since PHP 5.3.0
	 */
	define('CURLOPT_PROGRESSFUNCTION', 20056);

	define('CURLOPT_PROXY', 10004);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURLOPT_PROXY_SERVICE_NAME', 10235);

	define('CURLOPT_PROXYAUTH', 111);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0
	 */
	define('CURLOPT_PROXYHEADER', 10228);

	define('CURLOPT_PROXYPORT', 59);

	/**
	 * Available as of cURL 7.10.
	 */
	define('CURLOPT_PROXYTYPE', 101);

	define('CURLOPT_PROXYUSERPWD', 10006);

	define('CURLOPT_PUT', 54);

	define('CURLOPT_QUOTE', 10028);

	define('CURLOPT_RANDOM_FILE', 10076);

	define('CURLOPT_RANGE', 10007);

	define('CURLOPT_READFUNCTION', 20012);

	define('CURLOPT_REFERER', 10016);

	define('CURLOPT_RESUME_FROM', 21);

	define('CURLOPT_RETURNTRANSFER', 19913);

	/**
	 * Available since PHP 7.0.7 and cURL 7.31.0
	 */
	define('CURLOPT_SASL_IR', 218);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURLOPT_SERVICE_NAME', 10236);

	define('CURLOPT_SSH_AUTH_TYPES', 151);

	define('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5', 10162);

	define('CURLOPT_SSH_PRIVATE_KEYFILE', 10153);

	define('CURLOPT_SSH_PUBLIC_KEYFILE', 10152);

	define('CURLOPT_SSL_CIPHER_LIST', 10083);

	/**
	 * Available since PHP 7.0.7 and cURL 7.36.0
	 */
	define('CURLOPT_SSL_ENABLE_ALPN', 226);

	/**
	 * Available since PHP 7.0.7 and cURL 7.36.0
	 */
	define('CURLOPT_SSL_ENABLE_NPN', 225);

	/**
	 * Available since PHP 7.0.7 and cURL 7.42.0
	 */
	define('CURLOPT_SSL_FALSESTART', 233);

	/**
	 * Available since PHP 5.5.0 and cURL 7.25.0
	 */
	define('CURLOPT_SSL_OPTIONS', 216);

	define('CURLOPT_SSL_VERIFYHOST', 81);

	define('CURLOPT_SSL_VERIFYPEER', 64);

	/**
	 * Available since PHP 7.0.7 and cURL 7.41.0
	 */
	define('CURLOPT_SSL_VERIFYSTATUS', 232);

	define('CURLOPT_SSLCERT', 10025);

	define('CURLOPT_SSLCERTPASSWD', 10026);

	define('CURLOPT_SSLCERTTYPE', 10086);

	define('CURLOPT_SSLENGINE', 10089);

	define('CURLOPT_SSLENGINE_DEFAULT', 90);

	define('CURLOPT_SSLKEY', 10087);

	define('CURLOPT_SSLKEYPASSWD', 10026);

	define('CURLOPT_SSLKEYTYPE', 10088);

	define('CURLOPT_SSLVERSION', 32);

	define('CURLOPT_STDERR', 10037);

	/**
	 * Available since PHP 7.0.7 and cURL 7.46.0
	 */
	define('CURLOPT_STREAM_WEIGHT', 239);

	/**
	 * Available since PHP 7.0.7 and cURL 7.49.0
	 */
	define('CURLOPT_TCP_FASTOPEN', 244);

	/**
	 * Available since PHP 5.2.1
	 */
	define('CURLOPT_TCP_NODELAY', 121);

	/**
	 * Available since PHP 7.0.7 and cURL 7.48.0
	 */
	define('CURLOPT_TFTP_NO_OPTIONS', 242);

	define('CURLOPT_TIMECONDITION', 33);

	define('CURLOPT_TIMEOUT', 13);

	define('CURLOPT_TIMEOUT_MS', 155);

	define('CURLOPT_TIMEVALUE', 34);

	define('CURLOPT_TRANSFERTEXT', 53);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0
	 */
	define('CURLOPT_UNIX_SOCKET_PATH', 10231);

	define('CURLOPT_UNRESTRICTED_AUTH', 105);

	define('CURLOPT_UPLOAD', 46);

	define('CURLOPT_URL', 10002);

	define('CURLOPT_USERAGENT', 10018);

	/**
	 * Available since PHP 5.5.0 and cURL 7.19.1
	 */
	define('CURLOPT_USERNAME', 10173);

	define('CURLOPT_USERPWD', 10005);

	define('CURLOPT_VERBOSE', 41);

	define('CURLOPT_WRITEFUNCTION', 20011);

	define('CURLOPT_WRITEHEADER', 10029);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_XOAUTH2_BEARER', 10220);

	/**
	 * Available since PHP 5.5.0 and cURL 7.18.0.
	 */
	define('CURLPAUSE_ALL', 5);

	/**
	 * Available since PHP 5.5.0 and cURL 7.18.0.
	 */
	define('CURLPAUSE_CONT', 0);

	/**
	 * Available since PHP 5.5.0 and cURL 7.18.0.
	 */
	define('CURLPAUSE_RECV', 1);

	/**
	 * Available since PHP 5.5.0 and cURL 7.18.0.
	 */
	define('CURLPAUSE_RECV_CONT', 0);

	/**
	 * Available since PHP 5.5.0 and cURL 7.18.0.
	 */
	define('CURLPAUSE_SEND', 4);

	/**
	 * Available since PHP 5.5.0 and cURL 7.18.0.
	 */
	define('CURLPAUSE_SEND_CONT', 0);

	/**
	 * Available since PHP 7.0.0 and cURL 7.43.0.
	 */
	define('CURLPIPE_HTTP1', 1);

	/**
	 * Available since PHP 7.0.0 and cURL 7.43.0.
	 */
	define('CURLPIPE_MULTIPLEX', 2);

	/**
	 * Available since PHP 7.0.0 and cURL 7.43.0.
	 */
	define('CURLPIPE_NOTHING', 0);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0.
	 */
	define('CURLPROTO_SMB', 67108864);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0.
	 */
	define('CURLPROTO_SMBS', 134217728);

	/**
	 * Available since cURL 7.10.
	 */
	define('CURLPROXY_HTTP', 0);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLPROXY_HTTP_1_0', 1);

	/**
	 * Available since PHP 5.2.10 and cURL 7.10.
	 */
	define('CURLPROXY_SOCKS4', 4);

	/**
	 * Available since PHP 5.5.23 and PHP 5.6.7 and cURL 7.18.0.
	 */
	define('CURLPROXY_SOCKS4A', 6);

	/**
	 * Available since cURL 7.10.
	 */
	define('CURLPROXY_SOCKS5', 5);

	/**
	 * Available since PHP 5.5.23 and PHP 5.6.7 and cURL 7.18.0.
	 */
	define('CURLPROXY_SOCKS5_HOSTNAME', 7);

	/**
	 * Available since PHP 7.0.7 and cURL 7.28.0
	 */
	define('CURLSSH_AUTH_AGENT', 16);

	define('CURLSSH_AUTH_ANY', -1);

	define('CURLSSH_AUTH_DEFAULT', -1);

	define('CURLSSH_AUTH_HOST', 4);

	define('CURLSSH_AUTH_KEYBOARD', 8);

	define('CURLSSH_AUTH_NONE', 0);

	define('CURLSSH_AUTH_PASSWORD', 2);

	define('CURLSSH_AUTH_PUBLICKEY', 1);

	/**
	 * Available since PHP 5.5.0 and cURL 7.25.0
	 */
	define('CURLSSLOPT_ALLOW_BEAST', 1);

	/**
	 * Available since PHP 7.0.7 and cURL 7.44.0
	 */
	define('CURLSSLOPT_NO_REVOKE', 2);

	define('CURLVERSION_NOW', 4);

}
