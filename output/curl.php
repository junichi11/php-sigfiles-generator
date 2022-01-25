<?php



namespace {

	/**
	 * <p>This class or <code>CURLStringFile</code> should be used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
	 * <p>Unserialization of <b>CURLFile</b> instances is not allowed. As of PHP 7.4.0, serialization is forbidden in the first place.</p>
	 * @link https://php.net/manual/en/class.curlfile.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class CURLFile {

		/**
		 * @var string <p>Name of the file to be uploaded.</p>
		 * @link https://php.net/manual/en/class.curlfile.php#curlfile.props.name
		 */
		public $name = "";

		/**
		 * @var string <p>MIME type of the file (default is <code>application/octet-stream</code>).</p>
		 * @link https://php.net/manual/en/class.curlfile.php#curlfile.props.mime
		 */
		public $mime = "";

		/**
		 * @var string <p>The name of the file in the upload data (defaults to the name property).</p>
		 * @link https://php.net/manual/en/class.curlfile.php#curlfile.props.postname
		 */
		public $postname = "";

		/**
		 * Create a CURLFile object
		 * <p>Object-oriented style</p><p>Creates a <code>CURLFile</code> object, used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
		 * @param string $filename <p>Path to the file which will be uploaded.</p>
		 * @param ?string $mime_type <p>Mimetype of the file.</p>
		 * @param ?string $posted_filename <p>Name of the file to be used in the upload data.</p>
		 * @return CURLFile <p>Returns a <code>CURLFile</code> object.</p>
		 * @link https://php.net/manual/en/curlfile.construct.php
		 * @see curl_setopt()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function __construct(string $filename, ?string $mime_type = null, ?string $posted_filename = null) {}

		/**
		 * Get file name
		 * @return string <p>Returns file name.</p>
		 * @link https://php.net/manual/en/curlfile.getfilename.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get MIME type
		 * @return string <p>Returns MIME type.</p>
		 * @link https://php.net/manual/en/curlfile.getmimetype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getMimeType(): string {}

		/**
		 * Get file name for POST
		 * @return string <p>Returns file name for POST.</p>
		 * @link https://php.net/manual/en/curlfile.getpostfilename.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function getPostFilename(): string {}

		/**
		 * Set MIME type
		 * @param string $mime_type <p>MIME type to be used in POST data.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/curlfile.setmimetype.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setMimeType(string $mime_type): void {}

		/**
		 * Set file name for POST
		 * @param string $posted_filename <p>Filename to be used in POST data.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/curlfile.setpostfilename.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setPostFilename(string $posted_filename): void {}
	}

	/**
	 * <p>A fully opaque class which replaces <code>curl</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.curlhandle.php
	 * @since PHP 8
	 */
	final class CurlHandle {
	}

	/**
	 * <p>A fully opaque class which replaces <code>curl_multi</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.curlmultihandle.php
	 * @since PHP 8
	 */
	final class CurlMultiHandle {
	}

	/**
	 * <p>A fully opaque class which replaces <code>curl_share</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.curlsharehandle.php
	 * @since PHP 8
	 */
	final class CurlShareHandle {
	}

	/**
	 * <p><b>CURLStringFile</b> makes it possible to upload a file directly from a variable. This is similar to <code>CURLFile</code>, but works with the contents of the file, not filename. This class or <code>CURLFile</code> should be used to upload the contents of the file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
	 * @link https://php.net/manual/en/class.curlstringfile.php
	 * @since PHP 8 >= 8.1.0
	 */
	class CURLStringFile {

		/**
		 * @var string <p>The contents to be uploaded.</p>
		 * @link https://php.net/manual/en/class.curlstringfile.php#curlstringfile.props.data
		 */
		public $data;

		/**
		 * @var string <p>The name of the file to be used in the upload data.</p>
		 * @link https://php.net/manual/en/class.curlstringfile.php#curlstringfile.props.postname
		 */
		public $postname;

		/**
		 * @var string <p>MIME type of the file (default is <code>application/octet-stream</code>).</p>
		 * @link https://php.net/manual/en/class.curlstringfile.php#curlstringfile.props.mime
		 */
		public $mime;

		/**
		 * Create a CURLStringFile object
		 * <p>Creates a <code>CURLStringFile</code> object, used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
		 * @param string $data <p>The contents to be uploaded.</p>
		 * @param string $postname <p>The name of the file to be used in the upload data.</p>
		 * @param string $mime <p>MIME type of the file (default is <code>application/octet-stream</code>).</p>
		 * @return self <p>Returns a <code>CURLStringFile</code> object.</p>
		 * @link https://php.net/manual/en/curlstringfile.construct.php
		 * @see curl_setopt()
		 * @since PHP 8 >= 8.1.0
		 */
		public function __construct(string $data, string $postname, string $mime = "application/octet-stream") {}
	}

	/**
	 * Close a cURL session
	 * <p><b>Note</b>:</p><p>This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.</p><p>Closes a cURL session and frees all resources. The cURL handle, <code>handle</code>, is also deleted.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.curl-close.php
	 * @see curl_init(), curl_multi_close()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function curl_close(\CurlHandle $handle): void {}

	/**
	 * Copy a cURL handle along with all of its preferences
	 * <p>Copies a cURL handle keeping the same preferences.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return CurlHandle|false <p>Returns a new cURL handle, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-copy-handle.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_copy_handle(\CurlHandle $handle): \CurlHandle|false {}

	/**
	 * Return the last error number
	 * <p>Returns the error number for the last cURL operation.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return int <p>Returns the error number or <code>0</code> (zero) if no error occurred.</p>
	 * @link https://php.net/manual/en/function.curl-errno.php
	 * @see curl_error()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8
	 */
	function curl_errno(\CurlHandle $handle): int {}

	/**
	 * Return a string containing the last error for the current session
	 * <p>Returns a clear text error message for the last cURL operation.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return string <p>Returns the error message or <code>''</code> (the empty string) if no error occurred.</p>
	 * @link https://php.net/manual/en/function.curl-error.php
	 * @see curl_errno()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8
	 */
	function curl_error(\CurlHandle $handle): string {}

	/**
	 * URL encodes the given string
	 * <p>This function URL encodes the given string according to RFC 3986.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param string $string <p>The string to be encoded.</p>
	 * @return string|false <p>Returns escaped string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-escape.php
	 * @see curl_unescape(), urlencode(), rawurlencode()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_escape(\CurlHandle $handle, string $string): string|false {}

	/**
	 * Perform a cURL session
	 * <p>Execute the given cURL session.</p><p>This function should be called after initializing a cURL session and all the options for the session are set.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return string|bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. However, if the <b><code>CURLOPT_RETURNTRANSFER</code></b> option is set, it will return the result on success, <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p><p><b>Note</b>:</p><p>Note that response status codes which indicate errors (such as <code>404 Not found</code>) are not regarded as failure. <code>curl_getinfo()</code> can be used to check for these.</p>
	 * @link https://php.net/manual/en/function.curl-exec.php
	 * @see curl_multi_exec()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function curl_exec(\CurlHandle $handle): string|bool {}

	/**
	 * Create a CURLFile object
	 * <p>Object-oriented style</p><p>Creates a <code>CURLFile</code> object, used to upload a file with <b><code>CURLOPT_POSTFIELDS</code></b>.</p>
	 * @param string $filename <p>Path to the file which will be uploaded.</p>
	 * @param ?string $mime_type <p>Mimetype of the file.</p>
	 * @param ?string $posted_filename <p>Name of the file to be used in the upload data.</p>
	 * @return CURLFile <p>Returns a <code>CURLFile</code> object.</p>
	 * @link https://php.net/manual/en/curlfile.construct.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_file_create(string $filename, ?string $mime_type = null, ?string $posted_filename = null): \CURLFile {}

	/**
	 * Get information regarding a specific transfer
	 * <p>Gets information about the last transfer.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param ?int $option <p>This may be one of the following constants:</p><ul> <li>  <b><code>CURLINFO_EFFECTIVE_URL</code></b> - Last effective URL  </li> <li>  <b><code>CURLINFO_HTTP_CODE</code></b> - The last response code. As of cURL 7.10.8, this is a legacy alias of <b><code>CURLINFO_RESPONSE_CODE</code></b>  </li> <li>  <b><code>CURLINFO_FILETIME</code></b> - Remote time of the retrieved document, with the <b><code>CURLOPT_FILETIME</code></b> enabled; if -1 is returned the time of the document is unknown  </li> <li>  <b><code>CURLINFO_TOTAL_TIME</code></b> - Total transaction time in seconds for last transfer  </li> <li>  <b><code>CURLINFO_NAMELOOKUP_TIME</code></b> - Time in seconds until name resolving was complete  </li> <li>  <b><code>CURLINFO_CONNECT_TIME</code></b> - Time in seconds it took to establish the connection  </li> <li>  <b><code>CURLINFO_PRETRANSFER_TIME</code></b> - Time in seconds from start until just before file transfer begins  </li> <li>  <b><code>CURLINFO_STARTTRANSFER_TIME</code></b> - Time in seconds until the first byte is about to be transferred  </li> <li>  <b><code>CURLINFO_REDIRECT_COUNT</code></b> - Number of redirects, with the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option enabled  </li> <li>  <b><code>CURLINFO_REDIRECT_TIME</code></b> - Time in seconds of all redirection steps before final transaction was started, with the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option enabled  </li> <li>  <b><code>CURLINFO_REDIRECT_URL</code></b> - With the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option disabled: redirect URL found in the last transaction, that should be requested manually next. With the <b><code>CURLOPT_FOLLOWLOCATION</code></b> option enabled: this is empty. The redirect URL in this case is available in <b><code>CURLINFO_EFFECTIVE_URL</code></b>  </li> <li>  <b><code>CURLINFO_PRIMARY_IP</code></b> - IP address of the most recent connection  </li> <li>  <b><code>CURLINFO_PRIMARY_PORT</code></b> - Destination port of the most recent connection  </li> <li>  <b><code>CURLINFO_LOCAL_IP</code></b> - Local (source) IP address of the most recent connection  </li> <li>  <b><code>CURLINFO_LOCAL_PORT</code></b> - Local (source) port of the most recent connection  </li> <li>  <b><code>CURLINFO_SIZE_UPLOAD</code></b> - Total number of bytes uploaded  </li> <li>  <b><code>CURLINFO_SIZE_DOWNLOAD</code></b> - Total number of bytes downloaded  </li> <li>  <b><code>CURLINFO_SPEED_DOWNLOAD</code></b> - Average download speed  </li> <li>  <b><code>CURLINFO_SPEED_UPLOAD</code></b> - Average upload speed  </li> <li>  <b><code>CURLINFO_HEADER_SIZE</code></b> - Total size of all headers received  </li> <li>  <b><code>CURLINFO_HEADER_OUT</code></b> - The request string sent. For this to work, add the <b><code>CURLINFO_HEADER_OUT</code></b> option to the handle by calling <code>curl_setopt()</code>  </li> <li>  <b><code>CURLINFO_REQUEST_SIZE</code></b> - Total size of issued requests, currently only for HTTP requests  </li> <li>  <b><code>CURLINFO_SSL_VERIFYRESULT</code></b> - Result of SSL certification verification requested by setting <b><code>CURLOPT_SSL_VERIFYPEER</code></b>  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_DOWNLOAD</code></b> - Content length of download, read from <code>Content-Length:</code> field  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_UPLOAD</code></b> - Specified size of upload  </li> <li>  <b><code>CURLINFO_CONTENT_TYPE</code></b> - <code>Content-Type:</code> of the requested document. NULL indicates server did not send valid <code>Content-Type:</code> header  </li> <li>  <b><code>CURLINFO_PRIVATE</code></b> - Private data associated with this cURL handle, previously set with the <b><code>CURLOPT_PRIVATE</code></b> option of <code>curl_setopt()</code>  </li> <li>  <b><code>CURLINFO_RESPONSE_CODE</code></b> - The last response code  </li> <li>  <b><code>CURLINFO_HTTP_CONNECTCODE</code></b> - The CONNECT response code  </li> <li>  <b><code>CURLINFO_HTTPAUTH_AVAIL</code></b> - Bitmask indicating the authentication method(s) available according to the previous response  </li> <li>  <b><code>CURLINFO_PROXYAUTH_AVAIL</code></b> - Bitmask indicating the proxy authentication method(s) available according to the previous response  </li> <li>  <b><code>CURLINFO_OS_ERRNO</code></b> - Errno from a connect failure. The number is OS and system specific.  </li> <li>  <b><code>CURLINFO_NUM_CONNECTS</code></b> - Number of connections curl had to create to achieve the previous transfer  </li> <li>  <b><code>CURLINFO_SSL_ENGINES</code></b> - OpenSSL crypto-engines supported  </li> <li>  <b><code>CURLINFO_COOKIELIST</code></b> - All known cookies  </li> <li>  <b><code>CURLINFO_FTP_ENTRY_PATH</code></b> - Entry path in FTP server  </li> <li>  <b><code>CURLINFO_APPCONNECT_TIME</code></b> - Time in seconds it took from the start until the SSL/SSH connect/handshake to the remote host was completed  </li> <li>  <b><code>CURLINFO_CERTINFO</code></b> - TLS certificate chain  </li> <li>  <b><code>CURLINFO_CONDITION_UNMET</code></b> - Info on unmet time conditional  </li> <li>  <b><code>CURLINFO_RTSP_CLIENT_CSEQ</code></b> - Next RTSP client CSeq  </li> <li>  <b><code>CURLINFO_RTSP_CSEQ_RECV</code></b> - Recently received CSeq  </li> <li>  <b><code>CURLINFO_RTSP_SERVER_CSEQ</code></b> - Next RTSP server CSeq  </li> <li>  <b><code>CURLINFO_RTSP_SESSION_ID</code></b> - RTSP session ID  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_DOWNLOAD_T</code></b> - The content-length of the download. This is the value read from the <code>Content-Type:</code> field. -1 if the size isn't known  </li> <li>  <b><code>CURLINFO_CONTENT_LENGTH_UPLOAD_T</code></b> - The specified size of the upload. -1 if the size isn't known  </li> <li>  <b><code>CURLINFO_HTTP_VERSION</code></b> - The version used in the last HTTP connection. The return value will be one of the defined <b><code>CURL_HTTP_VERSION_&#42;</code></b> constants or 0 if the version can't be determined  </li> <li>  <b><code>CURLINFO_PROTOCOL</code></b> - The protocol used in the last HTTP connection. The returned value will be exactly one of the <b><code>CURLPROTO_&#42;</code></b> values  </li> <li>  <b><code>CURLINFO_PROXY_SSL_VERIFYRESULT</code></b> - The result of the certificate verification that was requested (using the <b><code>CURLOPT_PROXY_SSL_VERIFYPEER</code></b> option). Only used for HTTPS proxies  </li> <li>  <b><code>CURLINFO_SCHEME</code></b> - The URL scheme used for the most recent connection  </li> <li>  <b><code>CURLINFO_SIZE_DOWNLOAD_T</code></b> - Total number of bytes that were downloaded. The number is only for the latest transfer and will be reset again for each new transfer  </li> <li>  <b><code>CURLINFO_SIZE_UPLOAD_T</code></b> - Total number of bytes that were uploaded  </li> <li>  <b><code>CURLINFO_SPEED_DOWNLOAD_T</code></b> - The average download speed in bytes/second that curl measured for the complete download  </li> <li>  <b><code>CURLINFO_SPEED_UPLOAD_T</code></b> - The average upload speed in bytes/second that curl measured for the complete upload  </li> <li>  <b><code>CURLINFO_APPCONNECT_TIME_T</code></b> - Time, in microseconds, it took from the start until the SSL/SSH connect/handshake to the remote host was completed  </li> <li>  <b><code>CURLINFO_CONNECT_TIME_T</code></b> - Total time taken, in microseconds, from the start until the connection to the remote host (or proxy) was completed  </li> <li>  <b><code>CURLINFO_FILETIME_T</code></b> - Remote time of the retrieved document (as Unix timestamp), an alternative to <b><code>CURLINFO_FILETIME</code></b> to allow systems with 32 bit long variables to extract dates outside of the 32bit timestamp range  </li> <li>  <b><code>CURLINFO_NAMELOOKUP_TIME_T</code></b> - Time in microseconds from the start until the name resolving was completed  </li> <li>  <b><code>CURLINFO_PRETRANSFER_TIME_T</code></b> - Time taken from the start until the file transfer is just about to begin, in microseconds  </li> <li>  <b><code>CURLINFO_REDIRECT_TIME_T</code></b> - Total time, in microseconds, it took for all redirection steps include name lookup, connect, pretransfer and transfer before final transaction was started  </li> <li>  <b><code>CURLINFO_STARTTRANSFER_TIME_T</code></b> - Time, in microseconds, it took from the start until the first byte is received  </li> <li>  <b><code>CURLINFO_TOTAL_TIME_T</code></b> - Total time in microseconds for the previous transfer, including name resolving, TCP connect etc.  </li> </ul>
	 * @return mixed <p>If <code>option</code> is given, returns its value. Otherwise, returns an associative array with the following elements (which correspond to <code>option</code>), or <b><code>false</code></b> on failure:</p><ul> <li>  "url"  </li> <li>  "content_type"  </li> <li>  "http_code"  </li> <li>  "header_size"  </li> <li>  "request_size"  </li> <li>  "filetime"  </li> <li>  "ssl_verify_result"  </li> <li>  "redirect_count"  </li> <li>  "total_time"  </li> <li>  "namelookup_time"  </li> <li>  "connect_time"  </li> <li>  "pretransfer_time"  </li> <li>  "size_upload"  </li> <li>  "size_download"  </li> <li>  "speed_download"  </li> <li>  "speed_upload"  </li> <li>  "download_content_length"  </li> <li>  "upload_content_length"  </li> <li>  "starttransfer_time"  </li> <li>  "redirect_time"  </li> <li>  "certinfo"  </li> <li>  "primary_ip"  </li> <li>  "primary_port"  </li> <li>  "local_ip"  </li> <li>  "local_port"  </li> <li>  "redirect_url"  </li> <li>  "request_header" (This is only set if the <b><code>CURLINFO_HEADER_OUT</code></b> is set by a previous call to <code>curl_setopt()</code>)  </li> </ul> Note that private data is not included in the associative array and must be retrieved individually with the <b><code>CURLINFO_PRIVATE</code></b> option.
	 * @link https://php.net/manual/en/function.curl-getinfo.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function curl_getinfo(\CurlHandle $handle, ?int $option = null): mixed {}

	/**
	 * Initialize a cURL session
	 * <p>Initializes a new session and return a cURL handle for use with the <code>curl_setopt()</code>, <code>curl_exec()</code>, and <code>curl_close()</code> functions.</p>
	 * @param ?string $url <p>If provided, the <b><code>CURLOPT_URL</code></b> option will be set to its value. You can manually set this using the <code>curl_setopt()</code> function.</p> <p><b>Note</b>:</p><p>The <code>file</code> protocol is disabled by cURL if open_basedir is set.</p>
	 * @return CurlHandle|false <p>Returns a cURL handle on success, <b><code>false</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.curl-init.php
	 * @see curl_close(), curl_multi_init()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function curl_init(?string $url = null): \CurlHandle|false {}

	/**
	 * Add a normal cURL handle to a cURL multi handle
	 * <p>Adds the <code>handle</code> handle to the multi handle <code>multi_handle</code></p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return int <p>Returns 0 on success, or one of the <b><code>CURLM_XXX</code></b> errors code.</p>
	 * @link https://php.net/manual/en/function.curl-multi-add-handle.php
	 * @see curl_multi_remove_handle(), curl_multi_init(), curl_init()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_add_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int {}

	/**
	 * Close a set of cURL handles
	 * <p><b>Note</b>:</p><p>This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.</p><p>Closes a set of cURL handles.</p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.curl-multi-close.php
	 * @see curl_multi_init(), curl_close()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_close(\CurlMultiHandle $multi_handle): void {}

	/**
	 * Return the last multi curl error number
	 * <p>Return an integer containing the last multi curl error number.</p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @return int <p>Return an integer containing the last multi curl error number.</p>
	 * @link https://php.net/manual/en/function.curl-multi-errno.php
	 * @see curl_errno()
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function curl_multi_errno(\CurlMultiHandle $multi_handle): int {}

	/**
	 * Run the sub-connections of the current cURL handle
	 * <p>Processes each of the handles in the stack. This method can be called whether or not a handle needs to read or write data.</p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param int $still_running <p>A reference to a flag to tell whether the operations are still running.</p>
	 * @return int <p>A cURL code defined in the cURL Predefined Constants.</p><p><b>Note</b>:</p><p>This only returns errors regarding the whole multi stack. There might still have occurred problems on individual transfers even when this function returns <b><code>CURLM_OK</code></b>.</p>
	 * @link https://php.net/manual/en/function.curl-multi-exec.php
	 * @see curl_multi_init(), curl_multi_select(), curl_exec()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_exec(\CurlMultiHandle $multi_handle, int &$still_running): int {}

	/**
	 * Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set
	 * <p>If <b><code>CURLOPT_RETURNTRANSFER</code></b> is an option that is set for a specific handle, then this function will return the content of that cURL handle in the form of a string.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return ?string <p>Return the content of a cURL handle if <b><code>CURLOPT_RETURNTRANSFER</code></b> is set.</p>
	 * @link https://php.net/manual/en/function.curl-multi-getcontent.php
	 * @see curl_multi_init()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_getcontent(\CurlHandle $handle): ?string {}

	/**
	 * Get information about the current transfers
	 * <p>Ask the multi handle if there are any messages or information from the individual transfers. Messages may include information such as an error code from the transfer or just the fact that a transfer is completed.</p><p>Repeated calls to this function will return a new result each time, until a <b><code>false</code></b> is returned as a signal that there is no more to get at this point. The integer pointed to with <code>queued_messages</code> will contain the number of remaining messages after this function was called.</p><p>The data the returned resource points to will not survive calling <code>curl_multi_remove_handle()</code>.</p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param int $queued_messages <p>Number of messages that are still in the queue</p>
	 * @return array|false <p>On success, returns an associative array for the message, <b><code>false</code></b> on failure.</p> <b>Contents of the returned array</b>   Key: Value:     <code>msg</code> The <b><code>CURLMSG_DONE</code></b> constant. Other return values are currently not available.   <code>result</code> One of the <b><code>CURLE_&#42;</code></b> constants. If everything is OK, the <b><code>CURLE_OK</code></b> will be the result.   <code>handle</code> Resource of type curl indicates the handle which it concerns.
	 * @link https://php.net/manual/en/function.curl-multi-info-read.php
	 * @see curl_multi_init()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_info_read(\CurlMultiHandle $multi_handle, int &$queued_messages = null): array|false {}

	/**
	 * Returns a new cURL multi handle
	 * <p>Allows the processing of multiple cURL handles asynchronously.</p>
	 * @return CurlMultiHandle <p>Returns a cURL multi handle on success, <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-multi-init.php
	 * @see curl_init(), curl_multi_close()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_init(): \CurlMultiHandle {}

	/**
	 * Remove a multi handle from a set of cURL handles
	 * <p>Removes a given <code>handle</code> handle from the given <code>multi_handle</code> handle. When the <code>handle</code> handle has been removed, it is again perfectly legal to run <code>curl_exec()</code> on this handle. Removing the <code>handle</code> handle while being used, will effectively halt the transfer in progress involving that handle.</p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return int <p>Returns 0 on success, or one of the <b><code>CURLM_XXX</code></b> error codes.</p>
	 * @link https://php.net/manual/en/function.curl-multi-remove-handle.php
	 * @see curl_init(), curl_multi_init(), curl_multi_add_handle()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_remove_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int {}

	/**
	 * Wait for activity on any curl_multi connection
	 * <p>Blocks until there is activity on any of the curl_multi connections.</p>
	 * @param \CurlMultiHandle $multi_handle <p>A cURL multi handle returned by <code>curl_multi_init()</code>.</p>
	 * @param float $timeout <p>Time, in seconds, to wait for a response.</p>
	 * @return int <p>On success, returns the number of descriptors contained in the descriptor sets. This may be 0 if there was no activity on any of the descriptors. On failure, this function will return -1 on a select failure (from the underlying select system call).</p>
	 * @link https://php.net/manual/en/function.curl-multi-select.php
	 * @see curl_multi_init()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function curl_multi_select(\CurlMultiHandle $multi_handle, float $timeout = 1.0): int {}

	/**
	 * Set an option for the cURL multi handle
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CurlMultiHandle $multi_handle
	 * @param int $option <p>One of the <b><code>CURLMOPT_&#42;</code></b> constants.</p>
	 * @param mixed $value <p>The value to be set on <code>option</code>.</p> <p><code>value</code> should be an <code>int</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to     <b><code>CURLMOPT_PIPELINING</code></b>  Pass 1 to enable or 0 to disable. Enabling pipelining on a multi handle will make it attempt to perform HTTP Pipelining as far as possible for transfers using this handle. This means that if you add a second request that can use an already existing connection, the second request will be "piped" on the same connection. As of cURL 7.43.0, the value is a bitmask, and you can also pass 2 to try to multiplex the new transfer over an existing HTTP/2 connection if possible. Passing 3 instructs cURL to ask for pipelining and multiplexing independently of each other. As of cURL 7.62.0, setting the pipelining bit has no effect. Instead of integer literals, you can also use the CURLPIPE_&#42; constants if available.    <b><code>CURLMOPT_MAXCONNECTS</code></b>  Pass a number that will be used as the maximum amount of simultaneously open connections that libcurl may cache. By default the size will be enlarged to fit four times the number of handles added via <code>curl_multi_add_handle()</code>. When the cache is full, curl closes the oldest one in the cache to prevent the number of open connections from increasing.    <b><code>CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</code></b>  Pass a number that specifies the chunk length threshold for pipelining in bytes.    <b><code>CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</code></b>  Pass a number that specifies the size threshold for pipelining penalty in bytes.    <b><code>CURLMOPT_MAX_HOST_CONNECTIONS</code></b>  Pass a number that specifies the maximum number of connections to a single host.    <b><code>CURLMOPT_MAX_PIPELINE_LENGTH</code></b>  Pass a number that specifies the maximum number of requests in a pipeline.    <b><code>CURLMOPT_MAX_TOTAL_CONNECTIONS</code></b>  Pass a number that specifies the maximum number of simultaneously open connections.    <b><code>CURLMOPT_PUSHFUNCTION</code></b>  Pass a <code>callable</code> that will be registered to handle server pushes and should have the following signature:  pushfunction(<code>resource</code> <code>$parent_ch</code>, <code>resource</code> <code>$pushed_ch</code>, <code>array</code> <code>$headers</code>): <code>int</code>   <code>parent_ch</code>  <p>The parent cURL handle (the request the client made).</p>   <code>pushed_ch</code>  <p>A new cURL handle for the pushed request.</p>   <code>headers</code>  <p>The push promise headers.</p>   The push function is supposed to return either <b><code>CURL_PUSH_OK</code></b> if it can handle the push, or <b><code>CURL_PUSH_DENY</code></b> to reject it.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-multi-setopt.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_multi_setopt(\CurlMultiHandle $multi_handle, int $option, mixed $value): bool {}

	/**
	 * Return string describing error code
	 * <p>Returns a text error message describing the given CURLM error code.</p>
	 * @param int $error_code <p>One of the CURLM error codes constants.</p>
	 * @return ?string <p>Returns error string for valid error code, <b><code>null</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.curl-multi-strerror.php
	 * @see curl_strerror()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_multi_strerror(int $error_code): ?string {}

	/**
	 * Pause and unpause a connection
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param int $flags <p>One of <b><code>CURLPAUSE_&#42;</code></b> constants.</p>
	 * @return int <p>Returns an error code (<b><code>CURLE_OK</code></b> for no error).</p>
	 * @link https://php.net/manual/en/function.curl-pause.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_pause(\CurlHandle $handle, int $flags): int {}

	/**
	 * Reset all options of a libcurl session handle
	 * <p>This function re-initializes all options set on the given cURL handle to the default values.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.curl-reset.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_reset(\CurlHandle $handle): void {}

	/**
	 * Set an option for a cURL transfer
	 * <p>Sets an option on the given cURL session handle.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param int $option <p>The <code>CURLOPT_XXX</code> option to set.</p>
	 * @param mixed $value <p>The value to be set on <code>option</code>.</p> <p><code>value</code> should be a <code>bool</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_AUTOREFERER</code></b>  <b><code>true</code></b> to automatically set the <code>Referer:</code> field in requests where it follows a <code>Location:</code> redirect.      <b><code>CURLOPT_COOKIESESSION</code></b>  <b><code>true</code></b> to mark this as a new cookie "session". It will force libcurl to ignore all cookies it is about to load that are "session cookies" from the previous session. By default, libcurl always stores and loads all cookies, independent if they are session cookies or not. Session cookies are cookies without expiry date and they are meant to be alive and existing for this "session" only.      <b><code>CURLOPT_CERTINFO</code></b>  <b><code>true</code></b> to output SSL certification information to <code>STDERR</code> on secure transfers.   Added in cURL 7.19.1. Requires <b><code>CURLOPT_VERBOSE</code></b> to be on to have an effect.    <b><code>CURLOPT_CONNECT_ONLY</code></b>  <b><code>true</code></b> tells the library to perform all the required proxy authentication and connection setup, but no data transfer. This option is implemented for HTTP, SMTP and POP3.   Added in 7.15.2.    <b><code>CURLOPT_CRLF</code></b>  <b><code>true</code></b> to convert Unix newlines to CRLF newlines on transfers.      <b><code>CURLOPT_DISALLOW_USERNAME_IN_URL</code></b>  <b><code>true</code></b> to not allow URLs that include a username. Usernames are allowed by default (0).   Added in cURL 7.61.0. Available since PHP 7.3.0.    <b><code>CURLOPT_DNS_SHUFFLE_ADDRESSES</code></b>  <b><code>true</code></b> to shuffle the order of all returned addresses so that they will be used in a random order, when a name is resolved and more than one IP address is returned. This may cause IPv4 to be used before IPv6 or vice versa.   Added in cURL 7.60.0. Available since PHP 7.3.0.    <b><code>CURLOPT_HAPROXYPROTOCOL</code></b>  <b><code>true</code></b> to send an HAProxy PROXY protocol v1 header at the start of the connection. The default action is not to send this header.   Added in cURL 7.60.0. Available since PHP 7.3.0.    <b><code>CURLOPT_SSH_COMPRESSION</code></b>  <b><code>true</code></b> to enable built-in SSH compression. This is a request, not an order; the server may or may not do it.   Added in cURL 7.56.0. Available since PHP 7.3.0.    <b><code>CURLOPT_DNS_USE_GLOBAL_CACHE</code></b>  <b><code>true</code></b> to use a global DNS cache. This option is not thread-safe. It is conditionally enabled by default if PHP is built for non-threaded use (CLI, FCGI, Apache2-Prefork, etc.).      <b><code>CURLOPT_FAILONERROR</code></b>  <b><code>true</code></b> to fail verbosely if the HTTP code returned is greater than or equal to 400. The default behavior is to return the page normally, ignoring the code.      <b><code>CURLOPT_SSL_FALSESTART</code></b>  <b><code>true</code></b> to enable TLS false start.   Added in cURL 7.42.0. Available since PHP 7.0.7.    <b><code>CURLOPT_FILETIME</code></b>  <b><code>true</code></b> to attempt to retrieve the modification date of the remote document. This value can be retrieved using the <b><code>CURLINFO_FILETIME</code></b> option with <code>curl_getinfo()</code>.      <b><code>CURLOPT_FOLLOWLOCATION</code></b>  <b><code>true</code></b> to follow any <code>"Location: "</code> header that the server sends as part of the HTTP header. See also <b><code>CURLOPT_MAXREDIRS</code></b>.      <b><code>CURLOPT_FORBID_REUSE</code></b>  <b><code>true</code></b> to force the connection to explicitly close when it has finished processing, and not be pooled for reuse.      <b><code>CURLOPT_FRESH_CONNECT</code></b>  <b><code>true</code></b> to force the use of a new connection instead of a cached one.      <b><code>CURLOPT_FTP_USE_EPRT</code></b>  <b><code>true</code></b> to use EPRT (and LPRT) when doing active FTP downloads. Use <b><code>false</code></b> to disable EPRT and LPRT and use PORT only.      <b><code>CURLOPT_FTP_USE_EPSV</code></b>  <b><code>true</code></b> to first try an EPSV command for FTP transfers before reverting back to PASV. Set to <b><code>false</code></b> to disable EPSV.      <b><code>CURLOPT_FTP_CREATE_MISSING_DIRS</code></b>  <b><code>true</code></b> to create missing directories when an FTP operation encounters a path that currently doesn't exist.      <b><code>CURLOPT_FTPAPPEND</code></b>  <b><code>true</code></b> to append to the remote file instead of overwriting it.      <b><code>CURLOPT_TCP_NODELAY</code></b>  <b><code>true</code></b> to disable TCP's Nagle algorithm, which tries to minimize the number of small packets on the network.   Available for versions compiled with libcurl 7.11.2 or greater.    <b><code>CURLOPT_FTPASCII</code></b>  An alias of <b><code>CURLOPT_TRANSFERTEXT</code></b>. Use that instead.      <b><code>CURLOPT_FTPLISTONLY</code></b>  <b><code>true</code></b> to only list the names of an FTP directory.      <b><code>CURLOPT_HEADER</code></b>  <b><code>true</code></b> to include the header in the output.      <b><code>CURLINFO_HEADER_OUT</code></b>  <b><code>true</code></b> to track the handle's request string.   The <b><code>CURLINFO_</code></b> prefix is intentional.    <b><code>CURLOPT_HTTP09_ALLOWED </code></b>  Whether to allow HTTP/0.9 responses. Defaults to <b><code>false</code></b> as of libcurl 7.66.0; formerly it defaulted to <b><code>true</code></b>.   Available since PHP 7.3.15 and 7.4.3, respectively, if built against libcurl &gt;= 7.64.0    <b><code>CURLOPT_HTTPGET</code></b>  <b><code>true</code></b> to reset the HTTP request method to GET. Since GET is the default, this is only necessary if the request method has been changed.      <b><code>CURLOPT_HTTPPROXYTUNNEL</code></b>  <b><code>true</code></b> to tunnel through a given HTTP proxy.      <b><code>CURLOPT_HTTP_CONTENT_DECODING</code></b>  <b><code>false</code></b> to get the raw HTTP response body.   Available if built against libcurl &gt;= 7.16.2.    <b><code>CURLOPT_KEEP_SENDING_ON_ERROR</code></b>  <b><code>true</code></b> to keep sending the request body if the HTTP code returned is equal to or larger than 300. The default action would be to stop sending and close the stream or connection. Suitable for manual NTLM authentication. Most applications do not need this option.   Available as of PHP 7.3.0 if built against libcurl &gt;= 7.51.0.    <b><code>CURLOPT_MUTE</code></b>  <b><code>true</code></b> to be completely silent with regards to the cURL functions.   Removed in cURL 7.15.5 (You can use CURLOPT_RETURNTRANSFER instead)    <b><code>CURLOPT_NETRC</code></b>  <b><code>true</code></b> to scan the ~/.netrc file to find a username and password for the remote site that a connection is being established with.      <b><code>CURLOPT_NOBODY</code></b>  <b><code>true</code></b> to exclude the body from the output. Request method is then set to HEAD. Changing this to <b><code>false</code></b> does not change it to GET.      <b><code>CURLOPT_NOPROGRESS</code></b> <p><b><code>true</code></b> to disable the progress meter for cURL transfers.</p><p><b>Note</b>:</p><p>PHP automatically sets this option to <b><code>true</code></b>, this should only be changed for debugging purposes.</p>       <b><code>CURLOPT_NOSIGNAL</code></b>  <b><code>true</code></b> to ignore any cURL function that causes a signal to be sent to the PHP process. This is turned on by default in multi-threaded SAPIs so timeout options can still be used.   Added in cURL 7.10.    <b><code>CURLOPT_PATH_AS_IS</code></b>  <b><code>true</code></b> to not handle dot dot sequences.   Added in cURL 7.42.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PIPEWAIT</code></b>  <b><code>true</code></b> to wait for pipelining/multiplexing.   Added in cURL 7.43.0. Available since PHP 7.0.7.    <b><code>CURLOPT_POST</code></b>  <b><code>true</code></b> to do a regular HTTP POST. This POST is the normal <code>application/x-www-form-urlencoded</code> kind, most commonly used by HTML forms.      <b><code>CURLOPT_PUT</code></b>  <b><code>true</code></b> to HTTP PUT a file. The file to PUT must be set with <b><code>CURLOPT_INFILE</code></b> and <b><code>CURLOPT_INFILESIZE</code></b>.      <b><code>CURLOPT_RETURNTRANSFER</code></b>  <b><code>true</code></b> to return the transfer as a string of the return value of <code>curl_exec()</code> instead of outputting it directly.      <b><code>CURLOPT_SASL_IR</code></b>  <b><code>true</code></b> to enable sending the initial response in the first packet.   Added in cURL 7.31.10. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_ENABLE_ALPN</code></b>  <b><code>false</code></b> to disable ALPN in the SSL handshake (if the SSL backend libcurl is built to use supports it), which can be used to negotiate http2.   Added in cURL 7.36.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_ENABLE_NPN</code></b>  <b><code>false</code></b> to disable NPN in the SSL handshake (if the SSL backend libcurl is built to use supports it), which can be used to negotiate http2.   Added in cURL 7.36.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_VERIFYPEER</code></b>  <b><code>false</code></b> to stop cURL from verifying the peer's certificate. Alternate certificates to verify against can be specified with the <b><code>CURLOPT_CAINFO</code></b> option or a certificate directory can be specified with the <b><code>CURLOPT_CAPATH</code></b> option.   <b><code>true</code></b> by default as of cURL 7.10. Default bundle installed as of cURL 7.10.    <b><code>CURLOPT_SSL_VERIFYSTATUS</code></b>  <b><code>true</code></b> to verify the certificate's status.   Added in cURL 7.41.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PROXY_SSL_VERIFYPEER</code></b>  <b><code>false</code></b> to stop cURL from verifying the peer's certificate. Alternate certificates to verify against can be specified with the <b><code>CURLOPT_CAINFO</code></b> option or a certificate directory can be specified with the <b><code>CURLOPT_CAPATH</code></b> option. When set to false, the peer certificate verification succeeds regardless.   <b><code>true</code></b> by default. Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_SUPPRESS_CONNECT_HEADERS</code></b>  <b><code>true</code></b> to suppress proxy CONNECT response headers from the user callback functions <b><code>CURLOPT_HEADERFUNCTION</code></b> and <b><code>CURLOPT_WRITEFUNCTION</code></b>, when <b><code>CURLOPT_HTTPPROXYTUNNEL</code></b> is used and a CONNECT request is made.   Added in cURL 7.54.0. Available since PHP 7.3.0.    <b><code>CURLOPT_TCP_FASTOPEN</code></b>  <b><code>true</code></b> to enable TCP Fast Open.   Added in cURL 7.49.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TFTP_NO_OPTIONS</code></b>  <b><code>true</code></b> to not send TFTP options requests.   Added in cURL 7.48.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TRANSFERTEXT</code></b>  <b><code>true</code></b> to use ASCII mode for FTP transfers. For LDAP, it retrieves data in plain text instead of HTML. On Windows systems, it will not set <code>STDOUT</code> to binary mode.      <b><code>CURLOPT_UNRESTRICTED_AUTH</code></b>  <b><code>true</code></b> to keep sending the username and password when following locations (using <b><code>CURLOPT_FOLLOWLOCATION</code></b>), even when the hostname has changed.      <b><code>CURLOPT_UPLOAD</code></b>  <b><code>true</code></b> to prepare for an upload.      <b><code>CURLOPT_VERBOSE</code></b>  <b><code>true</code></b> to output verbose information. Writes output to <code>STDERR</code>, or the file specified using <b><code>CURLOPT_STDERR</code></b>.       <p><code>value</code> should be an <code>int</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_BUFFERSIZE</code></b>  The size of the buffer to use for each read. There is no guarantee this request will be fulfilled, however.   Added in cURL 7.10.    <b><code>CURLOPT_CONNECTTIMEOUT</code></b>  The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.      <b><code>CURLOPT_CONNECTTIMEOUT_MS</code></b>  The number of milliseconds to wait while trying to connect. Use 0 to wait indefinitely. If libcurl is built to use the standard system name resolver, that portion of the connect will still use full-second resolution for timeouts with a minimum timeout allowed of one second.   Added in cURL 7.16.2.    <b><code>CURLOPT_DNS_CACHE_TIMEOUT</code></b>  The number of seconds to keep DNS entries in memory. This option is set to 120 (2 minutes) by default.      <b><code>CURLOPT_EXPECT_100_TIMEOUT_MS</code></b>  The timeout for Expect: 100-continue responses in milliseconds. Defaults to 1000 milliseconds.   Added in cURL 7.36.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS</code></b>  Head start for ipv6 for the happy eyeballs algorithm. Happy eyeballs attempts to connect to both IPv4 and IPv6 addresses for dual-stack hosts, preferring IPv6 first for timeout milliseconds. Defaults to CURL_HET_DEFAULT, which is currently 200 milliseconds.   Added in cURL 7.59.0. Available since PHP 7.3.0.    <b><code>CURLOPT_FTPSSLAUTH</code></b>  The FTP authentication method (when is activated): <code>CURLFTPAUTH_SSL</code> (try SSL first), <code>CURLFTPAUTH_TLS</code> (try TLS first), or <code>CURLFTPAUTH_DEFAULT</code> (let cURL decide).   Added in cURL 7.12.2.    <b><code>CURLOPT_HEADEROPT</code></b>  How to deal with headers. One of the following constants:  <b><code>CURLHEADER_UNIFIED</code></b>: the headers specified in <b><code>CURLOPT_HTTPHEADER</code></b> will be used in requests both to servers and proxies. With this option enabled, <b><code>CURLOPT_PROXYHEADER</code></b> will not have any effect.   <b><code>CURLHEADER_SEPARATE</code></b>: makes <b><code>CURLOPT_HTTPHEADER</code></b> headers only get sent to a server and not to a proxy. Proxy headers must be set with <b><code>CURLOPT_PROXYHEADER</code></b> to get used. Note that if a non-CONNECT request is sent to a proxy, libcurl will send both server headers and proxy headers. When doing CONNECT, libcurl will send <b><code>CURLOPT_PROXYHEADER</code></b> headers only to the proxy and then <b><code>CURLOPT_HTTPHEADER</code></b> headers only to the server.   Defaults to <b><code>CURLHEADER_SEPARATE</code></b> as of cURL 7.42.1, and <b><code>CURLHEADER_UNIFIED</code></b> before.    Added in cURL 7.37.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HTTP_VERSION</code></b>  <b><code>CURL_HTTP_VERSION_NONE</code></b> (default, lets CURL decide which version to use), <b><code>CURL_HTTP_VERSION_1_0</code></b> (forces HTTP/1.0), <b><code>CURL_HTTP_VERSION_1_1</code></b> (forces HTTP/1.1), <b><code>CURL_HTTP_VERSION_2_0</code></b> (attempts HTTP 2), <b><code>CURL_HTTP_VERSION_2 </code></b> (alias of <b><code>CURL_HTTP_VERSION_2_0</code></b>), <b><code>CURL_HTTP_VERSION_2TLS</code></b> (attempts HTTP 2 over TLS (HTTPS) only) or <b><code>CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE</code></b> (issues non-TLS HTTP requests using HTTP/2 without HTTP/1.1 Upgrade).      <b><code>CURLOPT_HTTPAUTH</code></b>  <p>The HTTP authentication method(s) to use. The options are: <b><code>CURLAUTH_BASIC</code></b>, <b><code>CURLAUTH_DIGEST</code></b>, <b><code>CURLAUTH_GSSNEGOTIATE</code></b>, <b><code>CURLAUTH_NTLM</code></b>, <b><code>CURLAUTH_ANY</code></b>, and <b><code>CURLAUTH_ANYSAFE</code></b>.</p> <p>The bitwise <code>|</code> (or) operator can be used to combine more than one method. If this is done, cURL will poll the server to see what methods it supports and pick the best one.</p> <p><b><code>CURLAUTH_ANY</code></b> is an alias for <code>CURLAUTH_BASIC | CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</code>.</p> <p><b><code>CURLAUTH_ANYSAFE</code></b> is an alias for <code>CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</code>.</p>      <b><code>CURLOPT_INFILESIZE</code></b>  The expected size, in bytes, of the file when uploading a file to a remote site. Note that using this option will not stop libcurl from sending more data, as exactly what is sent depends on <b><code>CURLOPT_READFUNCTION</code></b>.      <b><code>CURLOPT_LOW_SPEED_LIMIT</code></b>  The transfer speed, in bytes per second, that the transfer should be below during the count of <b><code>CURLOPT_LOW_SPEED_TIME</code></b> seconds before PHP considers the transfer too slow and aborts.      <b><code>CURLOPT_LOW_SPEED_TIME</code></b>  The number of seconds the transfer speed should be below <b><code>CURLOPT_LOW_SPEED_LIMIT</code></b> before PHP considers the transfer too slow and aborts.      <b><code>CURLOPT_MAXCONNECTS</code></b>  The maximum amount of persistent connections that are allowed. When the limit is reached, <b><code>CURLOPT_CLOSEPOLICY</code></b> is used to determine which connection to close.      <b><code>CURLOPT_MAXREDIRS</code></b>  The maximum amount of HTTP redirections to follow. Use this option alongside <b><code>CURLOPT_FOLLOWLOCATION</code></b>. Default value of <code>20</code> is set to prevent infinite redirects. Setting to <code>-1</code> allows inifinite redirects, and <code>0</code> refuses all redirects.      <b><code>CURLOPT_PORT</code></b>  An alternative port number to connect to.      <b><code>CURLOPT_POSTREDIR</code></b>  A bitmask of 1 (301 Moved Permanently), 2 (302 Found) and 4 (303 See Other) if the HTTP POST method should be maintained when <b><code>CURLOPT_FOLLOWLOCATION</code></b> is set and a specific type of redirect occurs.   Added in cURL 7.19.1.    <b><code>CURLOPT_PROTOCOLS</code></b>  <p>Bitmask of <b><code>CURLPROTO_&#42;</code></b> values. If used, this bitmask limits what protocols libcurl may use in the transfer. This allows you to have a libcurl built to support a wide range of protocols but still limit specific transfers to only be allowed to use a subset of them. By default libcurl will accept all protocols it supports. See also <b><code>CURLOPT_REDIR_PROTOCOLS</code></b>.</p> <p>Valid protocol options are: <b><code>CURLPROTO_HTTP</code></b>, <b><code>CURLPROTO_HTTPS</code></b>, <b><code>CURLPROTO_FTP</code></b>, <b><code>CURLPROTO_FTPS</code></b>, <b><code>CURLPROTO_SCP</code></b>, <b><code>CURLPROTO_SFTP</code></b>, <b><code>CURLPROTO_TELNET</code></b>, <b><code>CURLPROTO_LDAP</code></b>, <b><code>CURLPROTO_LDAPS</code></b>, <b><code>CURLPROTO_DICT</code></b>, <b><code>CURLPROTO_FILE</code></b>, <b><code>CURLPROTO_TFTP</code></b>, <b><code>CURLPROTO_ALL</code></b></p>   Added in cURL 7.19.4.    <b><code>CURLOPT_PROXYAUTH</code></b>  The HTTP authentication method(s) to use for the proxy connection. Use the same bitmasks as described in <b><code>CURLOPT_HTTPAUTH</code></b>. For proxy authentication, only <b><code>CURLAUTH_BASIC</code></b> and <b><code>CURLAUTH_NTLM</code></b> are currently supported.   Added in cURL 7.10.7.    <b><code>CURLOPT_PROXYPORT</code></b>  The port number of the proxy to connect to. This port number can also be set in <b><code>CURLOPT_PROXY</code></b>.      <b><code>CURLOPT_PROXYTYPE</code></b>  Either <b><code>CURLPROXY_HTTP</code></b> (default), <b><code>CURLPROXY_SOCKS4</code></b>, <b><code>CURLPROXY_SOCKS5</code></b>, <b><code>CURLPROXY_SOCKS4A</code></b> or <b><code>CURLPROXY_SOCKS5_HOSTNAME</code></b>.   Added in cURL 7.10.    <b><code>CURLOPT_REDIR_PROTOCOLS</code></b>  Bitmask of <b><code>CURLPROTO_&#42;</code></b> values. If used, this bitmask limits what protocols libcurl may use in a transfer that it follows to in a redirect when <b><code>CURLOPT_FOLLOWLOCATION</code></b> is enabled. This allows you to limit specific transfers to only be allowed to use a subset of protocols in redirections. By default libcurl will allow all protocols except for FILE and SCP. This is a difference compared to pre-7.19.4 versions which unconditionally would follow to all protocols supported. See also <b><code>CURLOPT_PROTOCOLS</code></b> for protocol constant values.   Added in cURL 7.19.4.    <b><code>CURLOPT_RESUME_FROM</code></b>  The offset, in bytes, to resume a transfer from.      <b><code>CURLOPT_SOCKS5_AUTH</code></b>  <p>The SOCKS5 authentication method(s) to use. The options are: <b><code>CURLAUTH_BASIC</code></b>, <b><code>CURLAUTH_GSSAPI</code></b>, <b><code>CURLAUTH_NONE</code></b>.</p> <p>The bitwise <code>|</code> (or) operator can be used to combine more than one method. If this is done, cURL will poll the server to see what methods it supports and pick the best one.</p> <p><b><code>CURLAUTH_BASIC</code></b> allows username/password authentication.</p> <p><b><code>CURLAUTH_GSSAPI</code></b> allows GSS-API authentication.</p> <p><b><code>CURLAUTH_NONE</code></b> allows no authentication.</p> <p>Defaults to <code>CURLAUTH_BASIC|CURLAUTH_GSSAPI</code>. Set the actual username and password with the <b><code>CURLOPT_PROXYUSERPWD</code></b> option.</p>   Available as of 7.3.0 and curl &gt;= 7.55.0.    <b><code>CURLOPT_SSL_OPTIONS</code></b>  Set SSL behavior options, which is a bitmask of any of the following constants:  <b><code>CURLSSLOPT_ALLOW_BEAST</code></b>: do not attempt to use any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.   <b><code>CURLSSLOPT_NO_REVOKE</code></b>: disable certificate revocation checks for those SSL backends where such behavior is present.    Added in cURL 7.25.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSL_VERIFYHOST</code></b>  <code>2</code> to verify that a Common Name field or a Subject Alternate Name field in the SSL peer certificate matches the provided hostname. <code>0</code> to not check the names. <code>1</code> should not be used. In production environments the value of this option should be kept at <code>2</code> (default value).   Support for value <code>1</code> removed in cURL 7.28.1.    <b><code>CURLOPT_SSLVERSION</code></b>  One of <b><code>CURL_SSLVERSION_DEFAULT</code></b> (0), <b><code>CURL_SSLVERSION_TLSv1</code></b> (1), <b><code>CURL_SSLVERSION_SSLv2</code></b> (2), <b><code>CURL_SSLVERSION_SSLv3</code></b> (3), <b><code>CURL_SSLVERSION_TLSv1_0</code></b> (4), <b><code>CURL_SSLVERSION_TLSv1_1</code></b> (5) or <b><code>CURL_SSLVERSION_TLSv1_2</code></b> (6). The maximum TLS version can be set by using one of the <b><code>CURL_SSLVERSION_MAX_&#42;</code></b> constants. It is also possible to OR one of the <b><code>CURL_SSLVERSION_&#42;</code></b> constants with one of the <b><code>CURL_SSLVERSION_MAX_&#42;</code></b> constants. <b><code>CURL_SSLVERSION_MAX_DEFAULT</code></b> (the maximum version supported by the library), <b><code>CURL_SSLVERSION_MAX_TLSv1_0</code></b>, <b><code>CURL_SSLVERSION_MAX_TLSv1_1</code></b>, <b><code>CURL_SSLVERSION_MAX_TLSv1_2</code></b>, or <b><code>CURL_SSLVERSION_MAX_TLSv1_3</code></b>. <p><b>Note</b>:</p><p>Your best bet is to not set this and let it use the default. Setting it to 2 or 3 is very dangerous given the known vulnerabilities in SSLv2 and SSLv3.</p>       <b><code>CURLOPT_PROXY_SSL_OPTIONS</code></b>  Set proxy SSL behavior options, which is a bitmask of any of the following constants:  <b><code>CURLSSLOPT_ALLOW_BEAST</code></b>: do not attempt to use any workarounds for a security flaw in the SSL3 and TLS1.0 protocols.   <b><code>CURLSSLOPT_NO_REVOKE</code></b>: disable certificate revocation checks for those SSL backends where such behavior is present. (curl &gt;= 7.44.0)   <b><code>CURLSSLOPT_NO_PARTIALCHAIN</code></b>: do not accept "partial" certificate chains, which it otherwise does by default. (curl &gt;= 7.68.0)    Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_SSL_VERIFYHOST</code></b>  Set to <code>2</code> to verify in the HTTPS proxy's certificate name fields against the proxy name. When set to <code>0</code> the connection succeeds regardless of the names used in the certificate. Use that ability with caution! <code>1</code> treated as a debug option in curl 7.28.0 and earlier. From curl 7.28.1 to 7.65.3 <b><code>CURLE_BAD_FUNCTION_ARGUMENT</code></b> is returned. From curl 7.66.0 onwards <code>1</code> and <code>2</code> is treated as the same value. In production environments the value of this option should be kept at <code>2</code> (default value).   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_SSLVERSION</code></b>  One of <b><code>CURL_SSLVERSION_DEFAULT</code></b>, <b><code>CURL_SSLVERSION_TLSv1</code></b>, <b><code>CURL_SSLVERSION_TLSv1_0</code></b>, <b><code>CURL_SSLVERSION_TLSv1_1</code></b>, <b><code>CURL_SSLVERSION_TLSv1_2</code></b>, <b><code>CURL_SSLVERSION_TLSv1_3</code></b>, <b><code>CURL_SSLVERSION_MAX_DEFAULT</code></b>, <b><code>CURL_SSLVERSION_MAX_TLSv1_0</code></b>, <b><code>CURL_SSLVERSION_MAX_TLSv1_1</code></b>, <b><code>CURL_SSLVERSION_MAX_TLSv1_2</code></b>, <b><code>CURL_SSLVERSION_MAX_TLSv1_3</code></b> or <b><code>CURL_SSLVERSION_SSLv3</code></b>. <p><b>Note</b>:</p><p>Your best bet is to not set this and let it use the default <b><code>CURL_SSLVERSION_DEFAULT</code></b> which will attempt to figure out the remote SSL protocol version.</p>    Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_STREAM_WEIGHT</code></b>  Set the numerical stream weight (a number between 1 and 256).   Added in cURL 7.46.0. Available since PHP 7.0.7.    <b><code>CURLOPT_TCP_KEEPALIVE</code></b>  If set to <code>1</code>, TCP keepalive probes will be sent. The delay and frequency of these probes can be controlled by the <b><code>CURLOPT_TCP_KEEPIDLE</code></b> and <b><code>CURLOPT_TCP_KEEPINTVL</code></b> options, provided the operating system supports them. If set to <code>0</code> (default) keepalive probes are disabled.   Added in cURL 7.25.0.    <b><code>CURLOPT_TCP_KEEPIDLE</code></b>  Sets the delay, in seconds, that the operating system will wait while the connection is idle before sending keepalive probes, if <b><code>CURLOPT_TCP_KEEPALIVE</code></b> is enabled. Not all operating systems support this option. The default is <code>60</code>.   Added in cURL 7.25.0.    <b><code>CURLOPT_TCP_KEEPINTVL</code></b>  Sets the interval, in seconds, that the operating system will wait between sending keepalive probes, if <b><code>CURLOPT_TCP_KEEPALIVE</code></b> is enabled. Not all operating systems support this option. The default is <code>60</code>.   Added in cURL 7.25.0.    <b><code>CURLOPT_TIMECONDITION</code></b>  How <b><code>CURLOPT_TIMEVALUE</code></b> is treated. Use <b><code>CURL_TIMECOND_IFMODSINCE</code></b> to return the page only if it has been modified since the time specified in <b><code>CURLOPT_TIMEVALUE</code></b>. If it hasn't been modified, a <code>"304 Not Modified"</code> header will be returned assuming <b><code>CURLOPT_HEADER</code></b> is <b><code>true</code></b>. Use <b><code>CURL_TIMECOND_IFUNMODSINCE</code></b> for the reverse effect. Use <b><code>CURL_TIMECOND_NONE</code></b> to ignore <b><code>CURLOPT_TIMEVALUE</code></b> and always return the page. <b><code>CURL_TIMECOND_NONE</code></b> is the default.   Before cURL 7.46.0 the default was <b><code>CURL_TIMECOND_IFMODSINCE</code></b>.    <b><code>CURLOPT_TIMEOUT</code></b>  The maximum number of seconds to allow cURL functions to execute.      <b><code>CURLOPT_TIMEOUT_MS</code></b>  The maximum number of milliseconds to allow cURL functions to execute. If libcurl is built to use the standard system name resolver, that portion of the connect will still use full-second resolution for timeouts with a minimum timeout allowed of one second.   Added in cURL 7.16.2.    <b><code>CURLOPT_TIMEVALUE</code></b>  The time in seconds since January 1st, 1970. The time will be used by <b><code>CURLOPT_TIMECONDITION</code></b>.      <b><code>CURLOPT_TIMEVALUE_LARGE</code></b>  The time in seconds since January 1st, 1970. The time will be used by <b><code>CURLOPT_TIMECONDITION</code></b>. Defaults to zero. The difference between this option and <b><code>CURLOPT_TIMEVALUE</code></b> is the type of the argument. On systems where 'long' is only 32 bit wide, this option has to be used to set dates beyond the year 2038.   Added in cURL 7.59.0. Available since PHP 7.3.0.    <b><code>CURLOPT_MAX_RECV_SPEED_LARGE</code></b>  If a download exceeds this speed (counted in bytes per second) on cumulative average during the transfer, the transfer will pause to keep the average rate less than or equal to the parameter value. Defaults to unlimited speed.   Added in cURL 7.15.5.    <b><code>CURLOPT_MAX_SEND_SPEED_LARGE</code></b>  If an upload exceeds this speed (counted in bytes per second) on cumulative average during the transfer, the transfer will pause to keep the average rate less than or equal to the parameter value. Defaults to unlimited speed.   Added in cURL 7.15.5.    <b><code>CURLOPT_SSH_AUTH_TYPES</code></b>  A bitmask consisting of one or more of <b><code>CURLSSH_AUTH_PUBLICKEY</code></b>, <b><code>CURLSSH_AUTH_PASSWORD</code></b>, <b><code>CURLSSH_AUTH_HOST</code></b>, <b><code>CURLSSH_AUTH_KEYBOARD</code></b>. Set to <b><code>CURLSSH_AUTH_ANY</code></b> to let libcurl pick one.   Added in cURL 7.16.1.    <b><code>CURLOPT_IPRESOLVE</code></b>  Allows an application to select what kind of IP addresses to use when resolving host names. This is only interesting when using host names that resolve addresses using more than one version of IP, possible values are <b><code>CURL_IPRESOLVE_WHATEVER</code></b>, <b><code>CURL_IPRESOLVE_V4</code></b>, <b><code>CURL_IPRESOLVE_V6</code></b>, by default <b><code>CURL_IPRESOLVE_WHATEVER</code></b>.   Added in cURL 7.10.8.    <b><code>CURLOPT_FTP_FILEMETHOD</code></b>  Tell curl which method to use to reach a file on a FTP(S) server. Possible values are <b><code>CURLFTPMETHOD_MULTICWD</code></b>, <b><code>CURLFTPMETHOD_NOCWD</code></b> and <b><code>CURLFTPMETHOD_SINGLECWD</code></b>.   Added in cURL 7.15.1.     <p><code>value</code> should be a <code>string</code> for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_ABSTRACT_UNIX_SOCKET</code></b>  Enables the use of an abstract Unix domain socket instead of establishing a TCP connection to a host and sets the path to the given <code>string</code>. This option shares the same semantics as <b><code>CURLOPT_UNIX_SOCKET_PATH</code></b>. These two options share the same storage and therefore only one of them can be set per handle.   Available since PHP 7.3.0 and cURL 7.53.0    <b><code>CURLOPT_CAINFO</code></b>  The name of a file holding one or more certificates to verify the peer with. This only makes sense when used in combination with <b><code>CURLOPT_SSL_VERIFYPEER</code></b>.   Might require an absolute path.    <b><code>CURLOPT_CAPATH</code></b>  A directory that holds multiple CA certificates. Use this option alongside <b><code>CURLOPT_SSL_VERIFYPEER</code></b>.      <b><code>CURLOPT_COOKIE</code></b>  The contents of the <code>"Cookie: "</code> header to be used in the HTTP request. Note that multiple cookies are separated with a semicolon followed by a space (e.g., "<code>fruit=apple; colour=red</code>")      <b><code>CURLOPT_COOKIEFILE</code></b>  The name of the file containing the cookie data. The cookie file can be in Netscape format, or just plain HTTP-style headers dumped into a file. If the name is an empty string, no cookies are loaded, but cookie handling is still enabled.      <b><code>CURLOPT_COOKIEJAR</code></b>  The name of a file to save all internal cookies to when the handle is closed, e.g. after a call to curl_close.      <b><code>CURLOPT_COOKIELIST</code></b>  A cookie string (i.e. a single line in Netscape/Mozilla format, or a regular HTTP-style Set-Cookie header) adds that single cookie to the internal cookie store. <code>"ALL"</code> erases all cookies held in memory. <code>"SESS"</code> erases all session cookies held in memory. <code>"FLUSH"</code> writes all known cookies to the file specified by <b><code>CURLOPT_COOKIEJAR</code></b>. <code>"RELOAD"</code> loads all cookies from the files specified by <b><code>CURLOPT_COOKIEFILE</code></b>.   Available since cURL 7.14.1.    <b><code>CURLOPT_CUSTOMREQUEST</code></b> <p>A custom request method to use instead of <code>"GET"</code> or <code>"HEAD"</code> when doing a HTTP request. This is useful for doing <code>"DELETE"</code> or other, more obscure HTTP requests. Valid values are things like <code>"GET"</code>, <code>"POST"</code>, <code>"CONNECT"</code> and so on; i.e. Do not enter a whole HTTP request line here. For instance, entering <code>"GET /index.html HTTP/1.0\r\n\r\n"</code> would be incorrect.</p><p><b>Note</b>:</p><p>Don't do this without making sure the server supports the custom request method first.</p>       <b><code>CURLOPT_DEFAULT_PROTOCOL</code></b> <p>The default protocol to use if the URL is missing a scheme name.</p>  Added in cURL 7.45.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_INTERFACE</code></b> <p>Set the name of the network interface that the DNS resolver should bind to. This must be an interface name (not an address).</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_LOCAL_IP4</code></b> <p>Set the local IPv4 address that the resolver should bind to. The argument should contain a single numerical IPv4 address as a string.</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_DNS_LOCAL_IP6</code></b> <p>Set the local IPv6 address that the resolver should bind to. The argument should contain a single numerical IPv6 address as a string.</p>  Added in cURL 7.33.0. Available since PHP 7.0.7.    <b><code>CURLOPT_EGDSOCKET</code></b>  Like <b><code>CURLOPT_RANDOM_FILE</code></b>, except a filename to an Entropy Gathering Daemon socket.      <b><code>CURLOPT_ENCODING</code></b>  The contents of the <code>"Accept-Encoding: "</code> header. This enables decoding of the response. Supported encodings are <code>"identity"</code>, <code>"deflate"</code>, and <code>"gzip"</code>. If an empty string, <code>""</code>, is set, a header containing all supported encoding types is sent.   Added in cURL 7.10.    <b><code>CURLOPT_FTPPORT</code></b>  The value which will be used to get the IP address to use for the FTP "PORT" instruction. The "PORT" instruction tells the remote server to connect to our specified IP address. The string may be a plain IP address, a hostname, a network interface name (under Unix), or just a plain '-' to use the systems default IP address.      <b><code>CURLOPT_INTERFACE</code></b>  The name of the outgoing network interface to use. This can be an interface name, an IP address or a host name.      <b><code>CURLOPT_KEYPASSWD</code></b>  The password required to use the <b><code>CURLOPT_SSLKEY</code></b> or <b><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></b> private key.   Added in cURL 7.16.1.    <b><code>CURLOPT_KRB4LEVEL</code></b>  The KRB4 (Kerberos 4) security level. Any of the following values (in order from least to most powerful) are valid: <code>"clear"</code>, <code>"safe"</code>, <code>"confidential"</code>, <code>"private".</code>. If the string does not match one of these, <code>"private"</code> is used. Setting this option to <b><code>null</code></b> will disable KRB4 security. Currently KRB4 security only works with FTP transactions.      <b><code>CURLOPT_LOGIN_OPTIONS</code></b>  Can be used to set protocol specific login options, such as the preferred authentication mechanism via "AUTH=NTLM" or "AUTH=&#42;", and should be used in conjunction with the <b><code>CURLOPT_USERNAME</code></b> option.   Added in cURL 7.34.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PINNEDPUBLICKEY</code></b>  Set the pinned public key. The string can be the file name of your pinned public key. The file format expected is "PEM" or "DER". The string can also be any number of base64 encoded sha256 hashes preceded by "sha256//" and separated by ";".   Added in cURL 7.39.0. Available since PHP 7.0.7.    <b><code>CURLOPT_POSTFIELDS</code></b>   The full data to post in a HTTP "POST" operation. This parameter can either be passed as a urlencoded string like '<code>para1=val1&amp;para2=val2&amp;...</code>' or as an array with the field name as key and field data as value. If <code>value</code> is an array, the <code>Content-Type</code> header will be set to <code>multipart/form-data</code>.   Files can be sent using <code>CURLFile</code> or <code>CURLStringFile</code>, in which case <code>value</code> must be an array.       <b><code>CURLOPT_PRIVATE</code></b>  Any data that should be associated with this cURL handle. This data can subsequently be retrieved with the <b><code>CURLINFO_PRIVATE</code></b> option of <code>curl_getinfo()</code>. cURL does nothing with this data. When using a cURL multi handle, this private data is typically a unique key to identify a standard cURL handle.   Added in cURL 7.10.3.    <b><code>CURLOPT_PRE_PROXY</code></b>  Set a <code>string</code> holding the host name or dotted numerical IP address to be used as the preproxy that curl connects to before it connects to the HTTP(S) proxy specified in the <b><code>CURLOPT_PROXY</code></b> option for the upcoming request. The preproxy can only be a SOCKS proxy and it should be prefixed with <code>[scheme]://</code> to specify which kind of socks is used. A numerical IPv6 address must be written within [brackets]. Setting the preproxy to an empty string explicitly disables the use of a preproxy. To specify port number in this string, append <code>:[port]</code> to the end of the host name. The proxy's port number may optionally be specified with the separate option <b><code>CURLOPT_PROXYPORT</code></b>. Defaults to using port 1080 for proxies if a port is not specified.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY</code></b>  The HTTP proxy to tunnel requests through.      <b><code>CURLOPT_PROXY_SERVICE_NAME</code></b>  The proxy authentication service name.   Added in cURL 7.34.0. Available since PHP 7.0.7.    <b><code>CURLOPT_PROXY_CAINFO</code></b>  The path to proxy Certificate Authority (CA) bundle. Set the path as a <code>string</code> naming a file holding one or more certificates to verify the HTTPS proxy with. This option is for connecting to an HTTPS proxy, not an HTTPS server. Defaults set to the system path where libcurl's cacert bundle is assumed to be stored.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_CAPATH</code></b>  The directory holding multiple CA certificates to verify the HTTPS proxy with.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_CRLFILE</code></b>  Set the file name with the concatenation of CRL (Certificate Revocation List) in PEM format to use in the certificate validation that occurs during the SSL exchange.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_KEYPASSWD</code></b>  Set the string be used as the password required to use the <b><code>CURLOPT_PROXY_SSLKEY</code></b> private key. You never needed a passphrase to load a certificate but you need one to load your private key. This option is for connecting to an HTTPS proxy, not an HTTPS server.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_PINNEDPUBLICKEY</code></b>  Set the pinned public key for HTTPS proxy. The string can be the file name of your pinned public key. The file format expected is "PEM" or "DER". The string can also be any number of base64 encoded sha256 hashes preceded by "sha256//" and separated by ";"   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_SSLCERT</code></b>  The file name of your client certificate used to connect to the HTTPS proxy. The default format is "P12" on Secure Transport and "PEM" on other engines, and can be changed with <b><code>CURLOPT_PROXY_SSLCERTTYPE</code></b>. With NSS or Secure Transport, this can also be the nickname of the certificate you wish to authenticate with as it is named in the security database. If you want to use a file from the current directory, please precede it with "./" prefix, in order to avoid confusion with a nickname.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_SSLCERTTYPE</code></b>  The format of your client certificate used when connecting to an HTTPS proxy. Supported formats are "PEM" and "DER", except with Secure Transport. OpenSSL (versions 0.9.3 and later) and Secure Transport (on iOS 5 or later, or OS X 10.7 or later) also support "P12" for PKCS#12-encoded files. Defaults to "PEM".   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_SSL_CIPHER_LIST</code></b>  The list of ciphers to use for the connection to the HTTPS proxy. The list must be syntactically correct, it consists of one or more cipher strings separated by colons. Commas or spaces are also acceptable separators but colons are normally used, !, - and + can be used as operators.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_TLS13_CIPHERS</code></b>  The list of cipher suites to use for the TLS 1.3 connection to a proxy. The list must be syntactically correct, it consists of one or more cipher suite strings separated by colons. This option is currently used only when curl is built to use OpenSSL 1.1.1 or later. If you are using a different SSL backend you can try setting TLS 1.3 cipher suites by using the <b><code>CURLOPT_PROXY_SSL_CIPHER_LIST</code></b> option.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.61.0. Available when built with OpenSSL &gt;= 1.1.1.    <b><code>CURLOPT_PROXY_SSLKEY</code></b>  The file name of your private key used for connecting to the HTTPS proxy. The default format is "PEM" and can be changed with <b><code>CURLOPT_PROXY_SSLKEYTYPE</code></b>. (iOS and Mac OS X only) This option is ignored if curl was built against Secure Transport.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0. Available if built TLS enabled.    <b><code>CURLOPT_PROXY_SSLKEYTYPE</code></b>  The format of your private key. Supported formats are "PEM", "DER" and "ENG".   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_TLSAUTH_PASSWORD</code></b>  The password to use for the TLS authentication method specified with the <b><code>CURLOPT_PROXY_TLSAUTH_TYPE</code></b> option. Requires that the <b><code>CURLOPT_PROXY_TLSAUTH_USERNAME</code></b> option to also be set.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_TLSAUTH_TYPE</code></b>  The method of the TLS authentication used for the HTTPS connection. Supported method is "SRP". <p><b>Note</b>:</p><p>Secure Remote Password (SRP) authentication for TLS provides mutual authentication if both sides have a shared secret. To use TLS-SRP, you must also set the <b><code>CURLOPT_PROXY_TLSAUTH_USERNAME</code></b> and <b><code>CURLOPT_PROXY_TLSAUTH_PASSWORD</code></b> options.</p>    Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXY_TLSAUTH_USERNAME</code></b>  Tusername to use for the HTTPS proxy TLS authentication method specified with the <b><code>CURLOPT_PROXY_TLSAUTH_TYPE</code></b> option. Requires that the <b><code>CURLOPT_PROXY_TLSAUTH_PASSWORD</code></b> option to also be set.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.52.0.    <b><code>CURLOPT_PROXYUSERPWD</code></b>  A username and password formatted as <code>"[username]:[password]"</code> to use for the connection to the proxy.      <b><code>CURLOPT_RANDOM_FILE</code></b>  A filename to be used to seed the random number generator for SSL.      <b><code>CURLOPT_RANGE</code></b>  Range(s) of data to retrieve in the format <code>"X-Y"</code> where X or Y are optional. HTTP transfers also support several intervals, separated with commas in the format <code>"X-Y,N-M"</code>.      <b><code>CURLOPT_REFERER</code></b>  The contents of the <code>"Referer: "</code> header to be used in a HTTP request.      <b><code>CURLOPT_SERVICE_NAME</code></b>  The authentication service name.   Added in cURL 7.43.0. Available since PHP 7.0.7.    <b><code>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</code></b>  A string containing 32 hexadecimal digits. The string should be the MD5 checksum of the remote host's public key, and libcurl will reject the connection to the host unless the md5sums match. This option is only for SCP and SFTP transfers.   Added in cURL 7.17.1.    <b><code>CURLOPT_SSH_PUBLIC_KEYFILE</code></b>  The file name for your public key. If not used, libcurl defaults to $HOME/.ssh/id_dsa.pub if the HOME environment variable is set, and just "id_dsa.pub" in the current directory if HOME is not set.   Added in cURL 7.16.1.    <b><code>CURLOPT_SSH_PRIVATE_KEYFILE</code></b>  The file name for your private key. If not used, libcurl defaults to $HOME/.ssh/id_dsa if the HOME environment variable is set, and just "id_dsa" in the current directory if HOME is not set. If the file is password-protected, set the password with <b><code>CURLOPT_KEYPASSWD</code></b>.   Added in cURL 7.16.1.    <b><code>CURLOPT_SSL_CIPHER_LIST</code></b>  A list of ciphers to use for SSL. For example, <code>RC4-SHA</code> and <code>TLSv1</code> are valid cipher lists.      <b><code>CURLOPT_SSLCERT</code></b>  The name of a file containing a PEM formatted certificate.      <b><code>CURLOPT_SSLCERTPASSWD</code></b>  The password required to use the <b><code>CURLOPT_SSLCERT</code></b> certificate.      <b><code>CURLOPT_SSLCERTTYPE</code></b>  The format of the certificate. Supported formats are <code>"PEM"</code> (default), <code>"DER"</code>, and <code>"ENG"</code>. As of OpenSSL 0.9.3, <code>"P12"</code> (for PKCS#12-encoded files) is also supported.   Added in cURL 7.9.3.    <b><code>CURLOPT_SSLENGINE</code></b>  The identifier for the crypto engine of the private SSL key specified in <b><code>CURLOPT_SSLKEY</code></b>.      <b><code>CURLOPT_SSLENGINE_DEFAULT</code></b>  The identifier for the crypto engine used for asymmetric crypto operations.      <b><code>CURLOPT_SSLKEY</code></b>  The name of a file containing a private SSL key.      <b><code>CURLOPT_SSLKEYPASSWD</code></b> <p>The secret password needed to use the private SSL key specified in <b><code>CURLOPT_SSLKEY</code></b>.</p><p><b>Note</b>:</p><p>Since this option contains a sensitive password, remember to keep the PHP script it is contained within safe.</p>       <b><code>CURLOPT_SSLKEYTYPE</code></b>  The key type of the private SSL key specified in <b><code>CURLOPT_SSLKEY</code></b>. Supported key types are <code>"PEM"</code> (default), <code>"DER"</code>, and <code>"ENG"</code>.      <b><code>CURLOPT_TLS13_CIPHERS</code></b>  The list of cipher suites to use for the TLS 1.3 connection. The list must be syntactically correct, it consists of one or more cipher suite strings separated by colons. This option is currently used only when curl is built to use OpenSSL 1.1.1 or later. If you are using a different SSL backend you can try setting TLS 1.3 cipher suites by using the <b><code>CURLOPT_SSL_CIPHER_LIST</code></b> option.   Available since PHP 7.3.0 and libcurl &gt;= cURL 7.61.0. Available when built with OpenSSL &gt;= 1.1.1.    <b><code>CURLOPT_UNIX_SOCKET_PATH</code></b>  Enables the use of Unix domain sockets as connection endpoint and sets the path to the given <code>string</code>.   Added in cURL 7.40.0. Available since PHP 7.0.7.    <b><code>CURLOPT_URL</code></b>  The URL to fetch. This can also be set when initializing a session with <code>curl_init()</code>.      <b><code>CURLOPT_USERAGENT</code></b>  The contents of the <code>"User-Agent: "</code> header to be used in a HTTP request.      <b><code>CURLOPT_USERNAME</code></b>  The user name to use in authentication.   Added in cURL 7.19.1.    <b><code>CURLOPT_PASSWORD</code></b>  The password to use in authentication.   Added in cURL 7.19.1.    <b><code>CURLOPT_USERPWD</code></b>  A username and password formatted as <code>"[username]:[password]"</code> to use for the connection.      <b><code>CURLOPT_XOAUTH2_BEARER</code></b>  Specifies the OAuth 2.0 access token.   Added in cURL 7.33.0. Available since PHP 7.0.7.     <p><code>value</code> should be an array for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to Notes     <b><code>CURLOPT_CONNECT_TO</code></b>  Connect to a specific host and port instead of the URL's host and port. Accepts an array of strings with the format <code>HOST:PORT:CONNECT-TO-HOST:CONNECT-TO-PORT</code>.   Added in cURL 7.49.0. Available since PHP 7.0.7.    <b><code>CURLOPT_HTTP200ALIASES</code></b>  An array of HTTP 200 responses that will be treated as valid responses and not as errors.   Added in cURL 7.10.3.    <b><code>CURLOPT_HTTPHEADER</code></b>  An array of HTTP header fields to set, in the format <code> array('Content-type: text/plain', 'Content-length: 100') </code>      <b><code>CURLOPT_POSTQUOTE</code></b>  An array of FTP commands to execute on the server after the FTP request has been performed.      <b><code>CURLOPT_PROXYHEADER</code></b>  An array of custom HTTP headers to pass to proxies.   Added in cURL 7.37.0. Available since PHP 7.0.7.    <b><code>CURLOPT_QUOTE</code></b>  An array of FTP commands to execute on the server prior to the FTP request.      <b><code>CURLOPT_RESOLVE</code></b>  Provide a custom address for a specific host and port pair. An array of hostname, port, and IP address strings, each element separated by a colon. In the format: <code> array("example.com:80:127.0.0.1") </code>   Added in cURL 7.21.3.     <p><code>value</code> should be a stream resource (using <code>fopen()</code>, for example) for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to     <b><code>CURLOPT_FILE</code></b>  The file that the transfer should be written to. The default is <code>STDOUT</code> (the browser window).    <b><code>CURLOPT_INFILE</code></b>  The file that the transfer should be read from when uploading.    <b><code>CURLOPT_STDERR</code></b>  An alternative location to output errors to instead of <code>STDERR</code>.    <b><code>CURLOPT_WRITEHEADER</code></b>  The file that the header part of the transfer is written to.     <p><code>value</code> should be the name of a valid function or a Closure for the following values of the <code>option</code> parameter:</p>   Option Set <code>value</code> to     <b><code>CURLOPT_HEADERFUNCTION</code></b>  A callback accepting two parameters. The first is the cURL resource, the second is a string with the header data to be written. The header data must be written by this callback. Return the number of bytes written.    <b><code>CURLOPT_PASSWDFUNCTION</code></b>  A callback accepting three parameters. The first is the cURL resource, the second is a string containing a password prompt, and the third is the maximum password length. Return the string containing the password.    <b><code>CURLOPT_PROGRESSFUNCTION</code></b>  <p>A callback accepting five parameters. The first is the cURL resource, the second is the total number of bytes expected to be downloaded in this transfer, the third is the number of bytes downloaded so far, the fourth is the total number of bytes expected to be uploaded in this transfer, and the fifth is the number of bytes uploaded so far.</p> <p><b>Note</b>:</p><p>The callback is only called when the <b><code>CURLOPT_NOPROGRESS</code></b> option is set to <b><code>false</code></b>.</p>  <p>Return a non-zero value to abort the transfer. In which case, the transfer will set a <b><code>CURLE_ABORTED_BY_CALLBACK</code></b> error.</p>    <b><code>CURLOPT_READFUNCTION</code></b>  A callback accepting three parameters. The first is the cURL resource, the second is a stream resource provided to cURL through the option <b><code>CURLOPT_INFILE</code></b>, and the third is the maximum amount of data to be read. The callback must return a string with a length equal or smaller than the amount of data requested, typically by reading it from the passed stream resource. It should return an empty string to signal <code>EOF</code>.    <b><code>CURLOPT_WRITEFUNCTION</code></b>  A callback accepting two parameters. The first is the cURL resource, and the second is a string with the data to be written. The data must be saved by this callback. It must return the exact number of bytes written or the transfer will be aborted with an error.     <p>Other values:</p>   Option Set <code>value</code> to     <b><code>CURLOPT_SHARE</code></b>  A result of <code>curl_share_init()</code>. Makes the cURL handle to use the data from the shared handle.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-setopt.php
	 * @see curl_setopt_array()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function curl_setopt(\CurlHandle $handle, int $option, mixed $value): bool {}

	/**
	 * Set multiple options for a cURL transfer
	 * <p>Sets multiple options for a cURL session. This function is useful for setting a large number of cURL options without repetitively calling <code>curl_setopt()</code>.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param array $options <p>An <code>array</code> specifying which options to set and their values. The keys should be valid <code>curl_setopt()</code> constants or their integer equivalents.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if all options were successfully set. If an option could not be successfully set, <b><code>false</code></b> is immediately returned, ignoring any future options in the <code>options</code> array.</p>
	 * @link https://php.net/manual/en/function.curl-setopt-array.php
	 * @see curl_setopt()
	 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
	 */
	function curl_setopt_array(\CurlHandle $handle, array $options): bool {}

	/**
	 * Close a cURL share handle
	 * <p><b>Note</b>:</p><p>This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.</p><p>Closes a cURL share handle and frees all resources.</p>
	 * @param \CurlShareHandle $share_handle <p>A cURL share handle returned by <code>curl_share_init()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.curl-share-close.php
	 * @see curl_share_init()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_share_close(\CurlShareHandle $share_handle): void {}

	/**
	 * Return the last share curl error number
	 * <p>Return an integer containing the last share curl error number.</p>
	 * @param \CurlShareHandle $share_handle <p>A cURL share handle returned by <code>curl_share_init()</code>.</p>
	 * @return int <p>Returns an integer containing the last share curl error number, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-share-errno.php
	 * @see curl_errno()
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function curl_share_errno(\CurlShareHandle $share_handle): int {}

	/**
	 * Initialize a cURL share handle
	 * <p>Allows to share data between cURL handles.</p>
	 * @return CurlShareHandle <p>Returns a cURL share handle.</p>
	 * @link https://php.net/manual/en/function.curl-share-init.php
	 * @see curl_share_setopt(), curl_share_close()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_share_init(): \CurlShareHandle {}

	/**
	 * Set an option for a cURL share handle
	 * <p>Sets an option on the given cURL share handle.</p>
	 * @param \CurlShareHandle $share_handle <p>A cURL share handle returned by <code>curl_share_init()</code>.</p>
	 * @param int $option <p></p>   Option Description     <b><code>CURLSHOPT_SHARE</code></b>  Specifies a type of data that should be shared.    <b><code>CURLSHOPT_UNSHARE</code></b>  Specifies a type of data that will be no longer shared.
	 * @param mixed $value <p></p>   Value Description     <b><code>CURL_LOCK_DATA_COOKIE</code></b>  Shares cookie data.    <b><code>CURL_LOCK_DATA_DNS</code></b>  Shares DNS cache. Note that when you use cURL multi handles, all handles added to the same multi handle will share DNS cache by default.    <b><code>CURL_LOCK_DATA_SSL_SESSION</code></b>  Shares SSL session IDs, reducing the time spent on the SSL handshake when reconnecting to the same server. Note that SSL session IDs are reused within the same handle by default.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-share-setopt.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_share_setopt(\CurlShareHandle $share_handle, int $option, mixed $value): bool {}

	/**
	 * Return string describing the given error code
	 * <p>Returns a text error message describing the given error code.</p>
	 * @param int $error_code <p>One of the cURL error codes constants.</p>
	 * @return ?string <p>Returns error description or <b><code>null</code></b> for invalid error code.</p>
	 * @link https://php.net/manual/en/function.curl-share-strerror.php
	 * @see curl_share_errno(), curl_strerror()
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function curl_share_strerror(int $error_code): ?string {}

	/**
	 * Return string describing the given error code
	 * <p>Returns a text error message describing the given error code.</p>
	 * @param int $error_code <p>One of the cURL error codes constants.</p>
	 * @return ?string <p>Returns error description or <b><code>null</code></b> for invalid error code.</p>
	 * @link https://php.net/manual/en/function.curl-strerror.php
	 * @see curl_errno(), curl_error()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_strerror(int $error_code): ?string {}

	/**
	 * Decodes the given URL encoded string
	 * <p>This function decodes the given URL encoded string.</p>
	 * @param \CurlHandle $handle <p>A cURL handle returned by <code>curl_init()</code>.</p>
	 * @param string $string <p>The URL encoded string to be decoded.</p>
	 * @return string|false <p>Returns decoded string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.curl-unescape.php
	 * @see curl_escape(), urlencode(), urldecode(), rawurlencode(), rawurldecode()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function curl_unescape(\CurlHandle $handle, string $string): string|false {}

	/**
	 * Gets cURL version information
	 * <p>Returns information about the cURL version.</p>
	 * @return array|false <p>Returns an associative array with the following elements:</p>   Key Value description     version_number cURL 24 bit version number   version cURL version number, as a string   ssl_version_number OpenSSL 24 bit version number   ssl_version OpenSSL version number, as a string   libz_version zlib version number, as a string   host Information about the host where cURL was built   age &nbsp;   features A bitmask of the <code>CURL_VERSION_XXX</code> constants   protocols An array of protocols names supported by cURL
	 * @link https://php.net/manual/en/function.curl-version.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function curl_version(): array|false {}

	define('CURL_HTTP_VERSION_1_0', null);

	define('CURL_HTTP_VERSION_1_1', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURL_HTTP_VERSION_2', null);

	/**
	 * Available since cURL 7.33.0
	 */
	define('CURL_HTTP_VERSION_2_0', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.49.0
	 */
	define('CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.47.0
	 */
	define('CURL_HTTP_VERSION_2TLS', null);

	define('CURL_HTTP_VERSION_NONE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.10.0
	 */
	define('CURL_LOCK_DATA_CONNECT', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURL_LOCK_DATA_PSL', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.53.0
	 */
	define('CURL_MAX_READ_SIZE', null);

	define('CURL_NETRC_IGNORED', null);

	define('CURL_NETRC_OPTIONAL', null);

	define('CURL_NETRC_REQUIRED', null);

	/**
	 * Available since PHP 7.1.0 and cURL 7.44.0
	 */
	define('CURL_PUSH_DENY', null);

	/**
	 * Available since PHP 7.1.0 and cURL 7.44.0
	 */
	define('CURL_PUSH_OK', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.18.2
	 */
	define('CURL_REDIR_POST_301', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.18.2
	 */
	define('CURL_REDIR_POST_302', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.25.1
	 */
	define('CURL_REDIR_POST_303', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.18.2
	 */
	define('CURL_REDIR_POST_ALL', null);

	define('CURL_SSLVERSION_DEFAULT', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURL_SSLVERSION_MAX_DEFAULT', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURL_SSLVERSION_MAX_NONE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURL_SSLVERSION_MAX_TLSv1_0', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURL_SSLVERSION_MAX_TLSv1_1', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURL_SSLVERSION_MAX_TLSv1_2', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURL_SSLVERSION_MAX_TLSv1_3', null);

	define('CURL_SSLVERSION_SSLv2', null);

	define('CURL_SSLVERSION_SSLv3', null);

	define('CURL_SSLVERSION_TLSv1', null);

	define('CURL_SSLVERSION_TLSv1_0', null);

	define('CURL_SSLVERSION_TLSv1_1', null);

	define('CURL_SSLVERSION_TLSv1_2', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURL_SSLVERSION_TLSv1_3', null);

	define('CURL_TIMECOND_IFMODSINCE', null);

	define('CURL_TIMECOND_IFUNMODSINCE', null);

	define('CURL_TIMECOND_LASTMOD', null);

	define('CURL_TIMECOND_NONE', null);

	/**
	 * Available since PHP 7.3.6 and cURL 7.64.1
	 */
	define('CURL_VERSION_ALTSVC', null);

	/**
	 * Asynchronous DNS resolves. Available since PHP 7.3.0 and cURL 7.10.7
	 */
	define('CURL_VERSION_ASYNCHDNS', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.57.0
	 */
	define('CURL_VERSION_BROTLI', null);

	/**
	 * Character conversions supported. Available since PHP 7.3.0 and cURL 7.15.4
	 */
	define('CURL_VERSION_CONV', null);

	/**
	 * Debug memory tracking supported. Available since PHP 7.3.6 and cURL 7.19.6
	 */
	define('CURL_VERSION_CURLDEBUG', null);

	/**
	 * Built with debug capabilities. Available since PHP 7.3.0 and cURL 7.10.6
	 */
	define('CURL_VERSION_DEBUG', null);

	/**
	 * Built against a GSS-API library. Available since PHP 7.3.0 and cURL 7.38.0
	 */
	define('CURL_VERSION_GSSAPI', null);

	/**
	 * Negotiate auth is supported. Available since PHP 7.3.0 and cURL 7.10.6 (deprecated since 7.38.0)
	 */
	define('CURL_VERSION_GSSNEGOTIATE', null);

	/**
	 * HTTP2 support built-in. Available since cURL 7.33.0
	 */
	define('CURL_VERSION_HTTP2', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURL_VERSION_HTTPS_PROXY', null);

	/**
	 * Internationized Domain Names are supported. Available since PHP 7.3.0 and cURL 7.12.0
	 */
	define('CURL_VERSION_IDN', null);

	/**
	 * IPv6-enabled.
	 */
	define('CURL_VERSION_IPV6', null);

	/**
	 * Kerberos V4 auth is supported.
	 */
	define('CURL_VERSION_KERBEROS4', null);

	/**
	 * Kerberos V5 auth is supported. Available since PHP 7.0.7 and cURL 7.40.0
	 */
	define('CURL_VERSION_KERBEROS5', null);

	/**
	 * Supports files larger than 2GB. Available since cURL 7.33.0
	 */
	define('CURL_VERSION_LARGEFILE', null);

	/**
	 * libz features are present.
	 */
	define('CURL_VERSION_LIBZ', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.56.0
	 */
	define('CURL_VERSION_MULTI_SSL', null);

	/**
	 * NTLM auth is supported. Available since PHP 7.3.0 and cURL 7.10.6
	 */
	define('CURL_VERSION_NTLM', null);

	/**
	 * NTLM delegation to winbind helper is supported. Available since PHP 7.3.0 and cURL 7.22.0
	 */
	define('CURL_VERSION_NTLM_WB', null);

	/**
	 * Mozilla's Public Suffix List, used for cookie domain verification. Available since PHP 7.3.6 and cURL 7.47.0
	 */
	define('CURL_VERSION_PSL', null);

	/**
	 * SPNEGO auth is supported. Available since PHP 7.3.0 and cURL 7.10.8
	 */
	define('CURL_VERSION_SPNEGO', null);

	/**
	 * SSL options are present.
	 */
	define('CURL_VERSION_SSL', null);

	/**
	 * Built against Windows SSPI. Available since PHP 7.3.0 and cURL 7.13.2
	 */
	define('CURL_VERSION_SSPI', null);

	/**
	 * TLS-SRP auth is supported. Available since PHP 7.3.0 and cURL 7.21.4
	 */
	define('CURL_VERSION_TLSAUTH_SRP', null);

	/**
	 * Unix domain sockets support. Available since PHP 7.0.7 and cURL 7.40.0
	 */
	define('CURL_VERSION_UNIX_SOCKETS', null);

	define('CURLAUTH_ANY', null);

	define('CURLAUTH_ANYSAFE', null);

	define('CURLAUTH_BASIC', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0.
	 */
	define('CURLAUTH_BEARER', null);

	define('CURLAUTH_DIGEST', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.1
	 */
	define('CURLAUTH_GSSAPI', null);

	define('CURLAUTH_GSSNEGOTIATE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.38.0.
	 */
	define('CURLAUTH_NEGOTIATE', null);

	define('CURLAUTH_NTLM', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.22.0
	 */
	define('CURLAUTH_NTLM_WB', null);

	define('CURLE_ABORTED_BY_CALLBACK', null);

	define('CURLE_BAD_CALLING_ORDER', null);

	define('CURLE_BAD_CONTENT_ENCODING', null);

	define('CURLE_BAD_FUNCTION_ARGUMENT', null);

	define('CURLE_BAD_PASSWORD_ENTERED', null);

	define('CURLE_COULDNT_CONNECT', null);

	define('CURLE_COULDNT_RESOLVE_HOST', null);

	define('CURLE_COULDNT_RESOLVE_PROXY', null);

	define('CURLE_FAILED_INIT', null);

	define('CURLE_FILE_COULDNT_READ_FILE', null);

	define('CURLE_FILESIZE_EXCEEDED', null);

	define('CURLE_FTP_ACCESS_DENIED', null);

	define('CURLE_FTP_BAD_DOWNLOAD_RESUME', null);

	define('CURLE_FTP_CANT_GET_HOST', null);

	define('CURLE_FTP_CANT_RECONNECT', null);

	define('CURLE_FTP_COULDNT_GET_SIZE', null);

	define('CURLE_FTP_COULDNT_RETR_FILE', null);

	define('CURLE_FTP_COULDNT_SET_ASCII', null);

	define('CURLE_FTP_COULDNT_SET_BINARY', null);

	define('CURLE_FTP_COULDNT_STOR_FILE', null);

	define('CURLE_FTP_COULDNT_USE_REST', null);

	define('CURLE_FTP_PORT_FAILED', null);

	define('CURLE_FTP_QUOTE_ERROR', null);

	define('CURLE_FTP_SSL_FAILED', null);

	define('CURLE_FTP_USER_PASSWORD_INCORRECT', null);

	define('CURLE_FTP_WEIRD_227_FORMAT', null);

	define('CURLE_FTP_WEIRD_PASS_REPLY', null);

	define('CURLE_FTP_WEIRD_PASV_REPLY', null);

	define('CURLE_FTP_WEIRD_SERVER_REPLY', null);

	define('CURLE_FTP_WEIRD_USER_REPLY', null);

	define('CURLE_FTP_WRITE_ERROR', null);

	define('CURLE_FUNCTION_NOT_FOUND', null);

	define('CURLE_GOT_NOTHING', null);

	define('CURLE_HTTP_NOT_FOUND', null);

	define('CURLE_HTTP_PORT_FAILED', null);

	define('CURLE_HTTP_POST_ERROR', null);

	define('CURLE_HTTP_RANGE_ERROR', null);

	define('CURLE_LDAP_CANNOT_BIND', null);

	define('CURLE_LDAP_INVALID_URL', null);

	define('CURLE_LDAP_SEARCH_FAILED', null);

	define('CURLE_LIBRARY_NOT_FOUND', null);

	define('CURLE_MALFORMAT_USER', null);

	define('CURLE_OBSOLETE', null);

	define('CURLE_OK', null);

	define('CURLE_OPERATION_TIMEOUTED', null);

	define('CURLE_OUT_OF_MEMORY', null);

	define('CURLE_PARTIAL_FILE', null);

	define('CURLE_READ_ERROR', null);

	define('CURLE_RECV_ERROR', null);

	define('CURLE_SEND_ERROR', null);

	define('CURLE_SHARE_IN_USE', null);

	/**
	 * Available since cURL 7.16.1.
	 */
	define('CURLE_SSH', null);

	define('CURLE_SSL_CACERT', null);

	define('CURLE_SSL_CERTPROBLEM', null);

	define('CURLE_SSL_CIPHER', null);

	define('CURLE_SSL_CONNECT_ERROR', null);

	define('CURLE_SSL_ENGINE_NOTFOUND', null);

	define('CURLE_SSL_ENGINE_SETFAILED', null);

	define('CURLE_SSL_PEER_CERTIFICATE', null);

	define('CURLE_TELNET_OPTION_SYNTAX', null);

	define('CURLE_TOO_MANY_REDIRECTS', null);

	define('CURLE_UNKNOWN_TELNET_OPTION', null);

	define('CURLE_UNSUPPORTED_PROTOCOL', null);

	define('CURLE_URL_MALFORMAT', null);

	define('CURLE_URL_MALFORMAT_USER', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.51.0
	 */
	define('CURLE_WEIRD_SERVER_REPLY', null);

	define('CURLE_WRITE_ERROR', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLFTP_CREATE_DIR', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLFTP_CREATE_DIR_NONE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLFTP_CREATE_DIR_RETRY', null);

	define('CURLFTPAUTH_DEFAULT', null);

	define('CURLFTPAUTH_SSL', null);

	define('CURLFTPAUTH_TLS', null);

	define('CURLFTPSSL_ALL', null);

	define('CURLFTPSSL_CONTROL', null);

	define('CURLFTPSSL_NONE', null);

	define('CURLFTPSSL_TRY', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0.
	 */
	define('CURLHEADER_SEPARATE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0.
	 */
	define('CURLHEADER_UNIFIED', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_APPCONNECT_TIME_T', null);

	define('CURLINFO_CONNECT_TIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_CONNECT_TIME_T', null);

	define('CURLINFO_CONTENT_LENGTH_DOWNLOAD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.55.0
	 */
	define('CURLINFO_CONTENT_LENGTH_DOWNLOAD_T', null);

	define('CURLINFO_CONTENT_LENGTH_UPLOAD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.55.0
	 */
	define('CURLINFO_CONTENT_LENGTH_UPLOAD_T', null);

	define('CURLINFO_CONTENT_TYPE', null);

	define('CURLINFO_EFFECTIVE_URL', null);

	define('CURLINFO_FILETIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.59.0
	 */
	define('CURLINFO_FILETIME_T', null);

	define('CURLINFO_HEADER_OUT', null);

	define('CURLINFO_HEADER_SIZE', null);

	/**
	 * As of cURL 7.10.8, this is a legacy alias of <b><code>CURLINFO_RESPONSE_CODE</code></b>
	 */
	define('CURLINFO_HTTP_CODE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.50.0
	 */
	define('CURLINFO_HTTP_VERSION', null);

	define('CURLINFO_LOCAL_IP', null);

	define('CURLINFO_LOCAL_PORT', null);

	define('CURLINFO_NAMELOOKUP_TIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_NAMELOOKUP_TIME_T', null);

	define('CURLINFO_PRETRANSFER_TIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_PRETRANSFER_TIME_T', null);

	define('CURLINFO_PRIMARY_IP', null);

	define('CURLINFO_PRIMARY_PORT', null);

	define('CURLINFO_PRIVATE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLINFO_PROTOCOL', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLINFO_PROXY_SSL_VERIFYRESULT', null);

	define('CURLINFO_REDIRECT_COUNT', null);

	define('CURLINFO_REDIRECT_TIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_REDIRECT_TIME_T', null);

	define('CURLINFO_REDIRECT_URL', null);

	define('CURLINFO_REQUEST_SIZE', null);

	/**
	 * Available since cURL 7.10.8
	 */
	define('CURLINFO_RESPONSE_CODE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLINFO_SCHEME', null);

	define('CURLINFO_SIZE_DOWNLOAD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.50.0
	 */
	define('CURLINFO_SIZE_DOWNLOAD_T', null);

	define('CURLINFO_SIZE_UPLOAD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.50.0
	 */
	define('CURLINFO_SIZE_UPLOAD_T', null);

	define('CURLINFO_SPEED_DOWNLOAD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.50.0
	 */
	define('CURLINFO_SPEED_DOWNLOAD_T', null);

	define('CURLINFO_SPEED_UPLOAD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.50.0
	 */
	define('CURLINFO_SPEED_UPLOAD_T', null);

	define('CURLINFO_SSL_VERIFYRESULT', null);

	define('CURLINFO_STARTTRANSFER_TIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_STARTTRANSFER_TIME_T', null);

	define('CURLINFO_TOTAL_TIME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLINFO_TOTAL_TIME_T', null);

	define('CURLM_BAD_EASY_HANDLE', null);

	define('CURLM_BAD_HANDLE', null);

	define('CURLM_CALL_MULTI_PERFORM', null);

	define('CURLM_INTERNAL_ERROR', null);

	define('CURLM_OK', null);

	define('CURLM_OUT_OF_MEMORY', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_MAX_HOST_CONNECTIONS', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_MAX_PIPELINE_LENGTH', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.30.0
	 */
	define('CURLMOPT_MAX_TOTAL_CONNECTIONS', null);

	/**
	 * Available since cURL 7.16.3.
	 */
	define('CURLMOPT_MAXCONNECTS', null);

	/**
	 * Available since cURL 7.16.0.
	 */
	define('CURLMOPT_PIPELINING', null);

	/**
	 * Available since PHP 7.1.0 and cURL 7.44.0
	 */
	define('CURLMOPT_PUSHFUNCTION', null);

	define('CURLMSG_DONE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.53.0
	 */
	define('CURLOPT_ABSTRACT_UNIX_SOCKET', null);

	define('CURLOPT_AUTOREFERER', null);

	define('CURLOPT_BINARYTRANSFER', null);

	define('CURLOPT_BUFFERSIZE', null);

	define('CURLOPT_CAINFO', null);

	define('CURLOPT_CAPATH', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.49.0
	 */
	define('CURLOPT_CONNECT_TO', null);

	define('CURLOPT_CONNECTTIMEOUT', null);

	define('CURLOPT_CONNECTTIMEOUT_MS', null);

	define('CURLOPT_COOKIE', null);

	define('CURLOPT_COOKIEFILE', null);

	define('CURLOPT_COOKIEJAR', null);

	/**
	 * Available since cURL 7.14.1
	 */
	define('CURLOPT_COOKIELIST', null);

	define('CURLOPT_COOKIESESSION', null);

	define('CURLOPT_CRLF', null);

	define('CURLOPT_CUSTOMREQUEST', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.45.0
	 */
	define('CURLOPT_DEFAULT_PROTOCOL', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLOPT_DISALLOW_USERNAME_IN_URL', null);

	define('CURLOPT_DNS_CACHE_TIMEOUT', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_DNS_INTERFACE', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_DNS_LOCAL_IP4', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_DNS_LOCAL_IP6', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.60.0
	 */
	define('CURLOPT_DNS_SHUFFLE_ADDRESSES', null);

	define('CURLOPT_DNS_USE_GLOBAL_CACHE', null);

	/**
	 * Provides the DNS-over-HTTPS URL. Available as of PHP 8.1.0 and cURL 7.62.0.
	 */
	define('CURLOPT_DOH_URL', null);

	define('CURLOPT_EGDSOCKET', null);

	define('CURLOPT_ENCODING', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.36.0
	 */
	define('CURLOPT_EXPECT_100_TIMEOUT_MS', null);

	define('CURLOPT_FAILONERROR', null);

	define('CURLOPT_FILE', null);

	define('CURLOPT_FILETIME', null);

	/**
	 * This constant is not available when open_basedir is enabled.
	 */
	define('CURLOPT_FOLLOWLOCATION', null);

	define('CURLOPT_FORBID_REUSE', null);

	define('CURLOPT_FRESH_CONNECT', null);

	define('CURLOPT_FTP_CREATE_MISSING_DIRS', null);

	define('CURLOPT_FTP_SSL', null);

	define('CURLOPT_FTP_USE_EPRT', null);

	define('CURLOPT_FTP_USE_EPSV', null);

	define('CURLOPT_FTPAPPEND', null);

	define('CURLOPT_FTPASCII', null);

	define('CURLOPT_FTPLISTONLY', null);

	define('CURLOPT_FTPPORT', null);

	define('CURLOPT_FTPSSLAUTH', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.59.0
	 */
	define('CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.60.0
	 */
	define('CURLOPT_HAPROXYPROTOCOL', null);

	define('CURLOPT_HEADER', null);

	define('CURLOPT_HEADERFUNCTION', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0
	 */
	define('CURLOPT_HEADEROPT', null);

	/**
	 * Available since PHP 7.3.15 and 7.4.3, respectively, and cURL 7.64.0
	 */
	define('CURLOPT_HTTP09_ALLOWED', null);

	define('CURLOPT_HTTP200ALIASES', null);

	define('CURLOPT_HTTP_VERSION', null);

	define('CURLOPT_HTTPAUTH', null);

	define('CURLOPT_HTTPGET', null);

	define('CURLOPT_HTTPHEADER', null);

	define('CURLOPT_HTTPPROXYTUNNEL', null);

	define('CURLOPT_INFILE', null);

	define('CURLOPT_INFILESIZE', null);

	define('CURLOPT_INTERFACE', null);

	/**
	 * Issuer SSL certificate from memory blob. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_ISSUERCERT_BLOB', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.51.0
	 */
	define('CURLOPT_KEEP_SENDING_ON_ERROR', null);

	define('CURLOPT_KEYPASSWD', null);

	define('CURLOPT_KRB4LEVEL', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.34.0
	 */
	define('CURLOPT_LOGIN_OPTIONS', null);

	define('CURLOPT_LOW_SPEED_LIMIT', null);

	define('CURLOPT_LOW_SPEED_TIME', null);

	/**
	 * Available since cURL 7.15.5
	 */
	define('CURLOPT_MAX_RECV_SPEED_LARGE', null);

	/**
	 * Available since cURL 7.15.5
	 */
	define('CURLOPT_MAX_SEND_SPEED_LARGE', null);

	define('CURLOPT_MAXCONNECTS', null);

	define('CURLOPT_MAXREDIRS', null);

	define('CURLOPT_MUTE', null);

	define('CURLOPT_NETRC', null);

	define('CURLOPT_NOBODY', null);

	define('CURLOPT_NOPROGRESS', null);

	define('CURLOPT_NOSIGNAL', null);

	define('CURLOPT_PASSWDFUNCTION', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.42.0
	 */
	define('CURLOPT_PATH_AS_IS', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.39.0
	 */
	define('CURLOPT_PINNEDPUBLICKEY', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURLOPT_PIPEWAIT', null);

	define('CURLOPT_PORT', null);

	define('CURLOPT_POST', null);

	define('CURLOPT_POSTFIELDS', null);

	define('CURLOPT_POSTQUOTE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PRE_PROXY', null);

	define('CURLOPT_PRIVATE', null);

	define('CURLOPT_PROGRESSFUNCTION', null);

	define('CURLOPT_PROXY', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_CAINFO', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_CAPATH', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_CRLFILE', null);

	/**
	 * Proxy issuer SSL certificate filename. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_PROXY_ISSUERCERT', null);

	/**
	 * Proxy issuer SSL certificate from memory blob. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_PROXY_ISSUERCERT_BLOB', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_KEYPASSWD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_PINNEDPUBLICKEY', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURLOPT_PROXY_SERVICE_NAME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSL_CIPHER_LIST', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSL_OPTIONS', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSL_VERIFYHOST', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSL_VERIFYPEER', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSLCERT', null);

	/**
	 * SSL proxy client certificate from memory blob. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_PROXY_SSLCERT_BLOB', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSLCERTTYPE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSLKEY', null);

	/**
	 * Private key for proxy cert from memory blob. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_PROXY_SSLKEY_BLOB', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSLKEYTYPE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_SSLVERSION', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLOPT_PROXY_TLS13_CIPHERS', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_TLSAUTH_PASSWORD', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_TLSAUTH_TYPE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLOPT_PROXY_TLSAUTH_USERNAME', null);

	define('CURLOPT_PROXYAUTH', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.37.0
	 */
	define('CURLOPT_PROXYHEADER', null);

	define('CURLOPT_PROXYPORT', null);

	/**
	 * Available as of cURL 7.10.
	 */
	define('CURLOPT_PROXYTYPE', null);

	define('CURLOPT_PROXYUSERPWD', null);

	define('CURLOPT_PUT', null);

	define('CURLOPT_QUOTE', null);

	define('CURLOPT_RANDOM_FILE', null);

	define('CURLOPT_RANGE', null);

	define('CURLOPT_READFUNCTION', null);

	define('CURLOPT_REFERER', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.55.0.
	 */
	define('CURLOPT_REQUEST_TARGET', null);

	define('CURLOPT_RESUME_FROM', null);

	define('CURLOPT_RETURNTRANSFER', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.31.0
	 */
	define('CURLOPT_SASL_IR', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.43.0
	 */
	define('CURLOPT_SERVICE_NAME', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.55.0
	 */
	define('CURLOPT_SOCKS5_AUTH', null);

	define('CURLOPT_SSH_AUTH_TYPES', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.56.0
	 */
	define('CURLOPT_SSH_COMPRESSION', null);

	define('CURLOPT_SSH_HOST_PUBLIC_KEY_MD5', null);

	define('CURLOPT_SSH_PRIVATE_KEYFILE', null);

	define('CURLOPT_SSH_PUBLIC_KEYFILE', null);

	define('CURLOPT_SSL_CIPHER_LIST', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.36.0
	 */
	define('CURLOPT_SSL_ENABLE_ALPN', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.36.0
	 */
	define('CURLOPT_SSL_ENABLE_NPN', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.42.0
	 */
	define('CURLOPT_SSL_FALSESTART', null);

	/**
	 * Available since cURL 7.25.0
	 */
	define('CURLOPT_SSL_OPTIONS', null);

	define('CURLOPT_SSL_VERIFYHOST', null);

	define('CURLOPT_SSL_VERIFYPEER', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.41.0
	 */
	define('CURLOPT_SSL_VERIFYSTATUS', null);

	define('CURLOPT_SSLCERT', null);

	/**
	 * SSL client certificate from memory blob. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_SSLCERT_BLOB', null);

	define('CURLOPT_SSLCERTPASSWD', null);

	define('CURLOPT_SSLCERTTYPE', null);

	define('CURLOPT_SSLENGINE', null);

	define('CURLOPT_SSLENGINE_DEFAULT', null);

	define('CURLOPT_SSLKEY', null);

	/**
	 * Private key for client cert from memory blob. Available as of PHP 8.1.0 and cURL 7.71.0.
	 */
	define('CURLOPT_SSLKEY_BLOB', null);

	define('CURLOPT_SSLKEYPASSWD', null);

	define('CURLOPT_SSLKEYTYPE', null);

	define('CURLOPT_SSLVERSION', null);

	define('CURLOPT_STDERR', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.46.0
	 */
	define('CURLOPT_STREAM_WEIGHT', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.54.0
	 */
	define('CURLOPT_SUPPRESS_CONNECT_HEADERS', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.49.0
	 */
	define('CURLOPT_TCP_FASTOPEN', null);

	/**
	 * Available since cURL 7.25.0
	 */
	define('CURLOPT_TCP_KEEPALIVE', null);

	/**
	 * Available since cURL 7.25.0
	 */
	define('CURLOPT_TCP_KEEPIDLE', null);

	/**
	 * Available since cURL 7.25.0
	 */
	define('CURLOPT_TCP_KEEPINTVL', null);

	define('CURLOPT_TCP_NODELAY', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.48.0
	 */
	define('CURLOPT_TFTP_NO_OPTIONS', null);

	define('CURLOPT_TIMECONDITION', null);

	define('CURLOPT_TIMEOUT', null);

	define('CURLOPT_TIMEOUT_MS', null);

	define('CURLOPT_TIMEVALUE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.59.0
	 */
	define('CURLOPT_TIMEVALUE_LARGE', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.61.0
	 */
	define('CURLOPT_TLS13_CIPHERS', null);

	define('CURLOPT_TRANSFERTEXT', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0
	 */
	define('CURLOPT_UNIX_SOCKET_PATH', null);

	define('CURLOPT_UNRESTRICTED_AUTH', null);

	define('CURLOPT_UPLOAD', null);

	define('CURLOPT_URL', null);

	define('CURLOPT_USERAGENT', null);

	/**
	 * Available since cURL 7.19.1
	 */
	define('CURLOPT_USERNAME', null);

	define('CURLOPT_USERPWD', null);

	define('CURLOPT_VERBOSE', null);

	define('CURLOPT_WRITEFUNCTION', null);

	define('CURLOPT_WRITEHEADER', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.33.0
	 */
	define('CURLOPT_XOAUTH2_BEARER', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPAUSE_ALL', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPAUSE_CONT', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPAUSE_RECV', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPAUSE_RECV_CONT', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPAUSE_SEND', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPAUSE_SEND_CONT', null);

	/**
	 * Available since cURL 7.43.0.
	 */
	define('CURLPIPE_HTTP1', null);

	/**
	 * Available since cURL 7.43.0.
	 */
	define('CURLPIPE_MULTIPLEX', null);

	/**
	 * Available since cURL 7.43.0.
	 */
	define('CURLPIPE_NOTHING', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0.
	 */
	define('CURLPROTO_SMB', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.40.0.
	 */
	define('CURLPROTO_SMBS', null);

	/**
	 * Available since cURL 7.10.
	 */
	define('CURLPROXY_HTTP', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.19.3
	 */
	define('CURLPROXY_HTTP_1_0', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.52.0
	 */
	define('CURLPROXY_HTTPS', null);

	/**
	 * Available since cURL 7.10.
	 */
	define('CURLPROXY_SOCKS4', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPROXY_SOCKS4A', null);

	/**
	 * Available since cURL 7.10.
	 */
	define('CURLPROXY_SOCKS5', null);

	/**
	 * Available since cURL 7.18.0.
	 */
	define('CURLPROXY_SOCKS5_HOSTNAME', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.28.0
	 */
	define('CURLSSH_AUTH_AGENT', null);

	define('CURLSSH_AUTH_ANY', null);

	define('CURLSSH_AUTH_DEFAULT', null);

	/**
	 * Available since PHP 7.3.0 and cURL 7.58.0
	 */
	define('CURLSSH_AUTH_GSSAPI', null);

	define('CURLSSH_AUTH_HOST', null);

	define('CURLSSH_AUTH_KEYBOARD', null);

	define('CURLSSH_AUTH_NONE', null);

	define('CURLSSH_AUTH_PASSWORD', null);

	define('CURLSSH_AUTH_PUBLICKEY', null);

	/**
	 * Available since cURL 7.25.0
	 */
	define('CURLSSLOPT_ALLOW_BEAST', null);

	/**
	 * Available since PHP 7.0.7 and cURL 7.44.0
	 */
	define('CURLSSLOPT_NO_REVOKE', null);

	define('CURLVERSION_NOW', null);

}
