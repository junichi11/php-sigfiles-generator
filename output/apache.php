<?php



namespace {

	/**
	 * Terminate apache process after this request
	 * <p><b>apache_child_terminate()</b> will register the Apache process executing the current PHP request for termination once execution of PHP code is completed. It may be used to terminate a process after a script with high memory consumption has been run as memory will usually only be freed internally but not given back to the operating system.</p><p>Works in the Apache, and FastCGI webservers.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.apache-child-terminate.php
	 * @see exit()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8
	 */
	function apache_child_terminate(): void {}

	/**
	 * Get a list of loaded Apache modules
	 * <p>Get a list of loaded Apache modules.</p>
	 * @return array <p>An <code>array</code> of loaded Apache modules.</p>
	 * @link https://php.net/manual/en/function.apache-get-modules.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8
	 */
	function apache_get_modules(): array {}

	/**
	 * Fetch Apache version
	 * <p>Fetch the Apache version.</p>
	 * @return string|false <p>Returns the Apache version on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.apache-get-version.php
	 * @see phpinfo()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8
	 */
	function apache_get_version(): string|false {}

	/**
	 * Get an Apache subprocess_env variable
	 * <p>Retrieve an Apache environment variable specified by <code>variable</code>.</p>
	 * @param string $variable <p>The Apache environment variable</p>
	 * @param bool $walk_to_top <p>Whether to get the top-level variable available to all Apache layers.</p>
	 * @return string|false <p>The value of the Apache environment variable on success, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.apache-getenv.php
	 * @see apache_setenv(), getenv()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function apache_getenv(string $variable, bool $walk_to_top = false): string|false {}

	/**
	 * Perform a partial request for the specified URI and return all info about it
	 * <p>This performs a partial request for a URI. It goes just far enough to obtain all the important information about the given resource.</p><p>This function is supported when PHP is installed as an Apache module webserver.</p>
	 * @param string $filename <p>The filename (URI) that's being requested.</p>
	 * @return object|false <p>An <code>object</code> of related URI information. The properties of this <code>object</code> are:</p><ul> <li>status</li> <li>the_request</li> <li>status_line</li> <li>method</li> <li>content_type</li> <li>handler</li> <li>uri</li> <li>filename</li> <li>path_info</li> <li>args</li> <li>boundary</li> <li>no_cache</li> <li>no_local_copy</li> <li>allowed</li> <li>send_bodyct</li> <li>bytes_sent</li> <li>byterange</li> <li>clength</li> <li>unparsed_uri</li> <li>mtime</li> <li>request_time</li> </ul><p>Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.apache-lookup-uri.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function apache_lookup_uri(string $filename): object|false {}

	/**
	 * Get and set apache request notes
	 * <p>This function is a wrapper for Apache's <code>table_get</code> and <code>table_set</code>. It edits the table of notes that exists during a request. The table's purpose is to allow Apache modules to communicate.</p><p>The main use for <b>apache_note()</b> is to pass information from one module to another within the same request.</p>
	 * @param string $note_name <p>The name of the note.</p>
	 * @param ?string $note_value <p>The value of the note.</p>
	 * @return string|false <p>If <code>note_value</code> is omitted or <b><code>null</code></b>, it returns the current value of note <code>note_name</code>. Otherwise, it sets the value of note <code>note_name</code> to <code>note_value</code> and returns the previous value of note <code>note_name</code>. If the note cannot be retrieved, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.apache-note.php
	 * @see virtual()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function apache_note(string $note_name, ?string $note_value = null): string|false {}

	/**
	 * Fetch all HTTP request headers
	 * <p>Fetches all HTTP request headers from the current request. Works in the Apache, FastCGI, CLI, and FPM webservers.</p>
	 * @return array <p>An associative array of all the HTTP headers in the current request, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.apache-request-headers.php
	 * @see apache_response_headers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function apache_request_headers(): array {}

	/**
	 * Fetch all HTTP response headers
	 * <p>Fetch all HTTP response headers. Works in the Apache, FastCGI, CLI, and FPM webservers.</p>
	 * @return array|false <p>An array of all Apache response headers on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.apache-response-headers.php
	 * @see apache_request_headers(), headers_sent(), headers_list()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function apache_response_headers(): array|false {}

	/**
	 * Set an Apache subprocess_env variable
	 * <p><b>apache_setenv()</b> sets the value of the Apache environment variable specified by <code>variable</code>.</p><p><b>Note</b>:</p><p>When setting an Apache environment variable, the corresponding $_SERVER variable is not changed.</p>
	 * @param string $variable <p>The environment variable that's being set.</p>
	 * @param string $value <p>The new <code>variable</code> value.</p>
	 * @param bool $walk_to_top <p>Whether to set the top-level variable available to all Apache layers.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.apache-setenv.php
	 * @see apache_getenv()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function apache_setenv(string $variable, string $value, bool $walk_to_top = false): bool {}

	/**
	 * Fetch all HTTP request headers
	 * <p>Fetches all HTTP headers from the current request.</p><p>This function is an alias for <code>apache_request_headers()</code>. Please read the <code>apache_request_headers()</code> documentation for more information on how this function works.</p>
	 * @return array <p>An associative array of all the HTTP headers in the current request, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.getallheaders.php
	 * @see apache_response_headers()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getallheaders(): array {}

	/**
	 * Perform an Apache sub-request
	 * <p><b>virtual()</b> is an Apache-specific function which is similar to <code>&lt;!--#include virtual...--&gt;</code> in <code>mod_include</code>. It performs an Apache sub-request. It is useful for including CGI scripts or .shtml files, or anything else that you would parse through Apache. Note that for a CGI script, the script must generate valid CGI headers. At the minimum that means it must generate a <code>Content-Type</code> header.</p><p>To run the sub-request, all buffers are terminated and flushed to the browser, pending headers are sent too.</p><p>This function is supported when PHP is installed as an Apache module webserver.</p>
	 * @param string $uri <p>The file that the virtual command will be performed on.</p>
	 * @return bool <p>Performs the virtual command on success, or returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.virtual.php
	 * @see apache_note()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function virtual(string $uri): bool {}

}
