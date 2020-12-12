<?php



namespace {

	/**
	 * Fetch all HTTP request headers
	 * <p><b>nsapi_request_headers()</b> gets all the HTTP headers in the current request. This is only supported when PHP runs as a NSAPI module.</p><p><b>Note</b>:</p><p><code>getallheaders()</code> is an alias for <b>nsapi_request_headers()</b> if you use the NSAPI module.</p><p><b>Note</b>:</p><p>You can also get at the value of the common CGI variables by reading them from the $_SERVER superglobal, which works whether or not you are using PHP as a NSAPI module.</p>
	 * @return array <p>Returns an associative array with all the HTTP headers.</p>
	 * @link https://php.net/manual/en/function.nsapi-request-headers.php
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function nsapi_request_headers(): array {}

	/**
	 * Fetch all HTTP response headers
	 * <p>Gets all the NSAPI response headers.</p>
	 * @return array <p>Returns an associative array with all the NSAPI response headers.</p>
	 * @link https://php.net/manual/en/function.nsapi-response-headers.php
	 * @see nsapi_request_headers(), headers_sent()
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function nsapi_response_headers(): array {}

	/**
	 * Perform an NSAPI sub-request
	 * <p><b>nsapi_virtual()</b> is an NSAPI-specific function which is equivalent to <code>&lt;!--#include virtual...--&gt;</code> in SSI (.shtml files). It does an NSAPI sub-request. It is useful for including CGI scripts or .shtml files, or anything else that you'd parse through webserver.</p><p>To run the sub-request, all buffers are terminated and flushed to the browser, pending headers are sent too.</p><p>You cannot make recursive requests with this function to other PHP scripts. If you want to include PHP scripts, use <code>include</code> or <code>require</code>.</p><p><b>Note</b>:</p><p>This function depends on a undocumented feature of the Netscape/iPlanet/Sun webservers. Use <code>phpinfo()</code> to determine if it is available. In the Unix environment it should always work, in Windows it depends on the name of a ns-httpdXX.dll file.</p><p>Read the note about subrequests in the NSAPI section (UNIX, Windows) if you experience this problem.</p>
	 * @param string $uri <p>The URI of the script.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.nsapi-virtual.php
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function nsapi_virtual(string $uri): bool {}

}
