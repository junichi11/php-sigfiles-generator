<?php



namespace {

	/**
	 * Decodes XML into native PHP types
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $xml <p>XML response returned by XMLRPC method.</p>
	 * @param string $encoding <p>Input encoding supported by iconv.</p>
	 * @return mixed <p>Returns either an array, or an integer, or a string, or a boolean according to the response returned by the XMLRPC method.</p>
	 * @link http://php.net/manual/en/function.xmlrpc-decode.php
	 * @see xmlrpc_encode_request(), xmlrpc_is_fault()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_decode(string $xml, string $encoding = "iso-8859-1") {}

	/**
	 * Decodes XML into native PHP types
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $xml
	 * @param string $method
	 * @param string $encoding
	 * @return mixed
	 * @link http://php.net/manual/en/function.xmlrpc-decode-request.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_decode_request(string $xml, string &$method, string $encoding = NULL) {}

	/**
	 * Generates XML for a PHP value
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param mixed $value
	 * @return string
	 * @link http://php.net/manual/en/function.xmlrpc-encode.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_encode($value): string {}

	/**
	 * Generates XML for a method request
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $method <p>Name of the method to call.</p>
	 * @param mixed $params <p>Method parameters compatible with method signature.</p>
	 * @param array $output_options <p>Array specifying output options may contain (default values are emphasised):</p><ul> <li><p>output_type: php, <i>xml</i></p></li> <li><p>verbosity: no_white_space, newlines_only, <i>pretty</i></p></li> <li><p>escaping: cdata, <i>non-ascii, non-print, markup</i> (may be a string with one value or an array with multiple values)</p></li> <li><p>version: simple, <i>xmlrpc</i>, soap 1.1, auto</p></li> <li><p>encoding: <i>iso-8859-1</i>, other character set supported by iconv</p></li> </ul>
	 * @return string <p>Returns a string containing the XML representation of the request.</p>
	 * @link http://php.net/manual/en/function.xmlrpc-encode-request.php
	 * @see stream_context_create(), file_get_contents(), xmlrpc_decode()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_encode_request(string $method, $params, array $output_options = NULL): string {}

	/**
	 * Gets xmlrpc type for a PHP value
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is especially useful for base64 and datetime strings.</p>
	 * @param mixed $value <p>PHP value</p>
	 * @return string <p>Returns the XML-RPC type.</p>
	 * @link http://php.net/manual/en/function.xmlrpc-get-type.php
	 * @see xmlrpc_set_type()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_get_type($value): string {}

	/**
	 * Determines if an array value represents an XMLRPC fault
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param array $arg <p>Array returned by <code>xmlrpc_decode()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the argument means fault, <b><code>FALSE</code></b> otherwise. Fault description is available in <code>$arg["faultString"]</code>, fault code is in <code>$arg["faultCode"]</code>.</p>
	 * @link http://php.net/manual/en/function.xmlrpc-is-fault.php
	 * @see xmlrpc_decode()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function xmlrpc_is_fault(array $arg): bool {}

	/**
	 * Decodes XML into a list of method descriptions
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $xml
	 * @return array
	 * @link http://php.net/manual/en/function.xmlrpc-parse-method-descriptions.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_parse_method_descriptions(string $xml): array {}

	/**
	 * Adds introspection documentation
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $server
	 * @param array $desc
	 * @return int
	 * @link http://php.net/manual/en/function.xmlrpc-server-add-introspection-data.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_server_add_introspection_data($server, array $desc): int {}

	/**
	 * Parses XML requests and call methods
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $server
	 * @param string $xml
	 * @param mixed $user_data
	 * @param array $output_options
	 * @return string
	 * @link http://php.net/manual/en/function.xmlrpc-server-call-method.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_server_call_method($server, string $xml, $user_data, array $output_options = NULL): string {}

	/**
	 * Creates an xmlrpc server
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return resource
	 * @link http://php.net/manual/en/function.xmlrpc-server-create.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_server_create() {}

	/**
	 * Destroys server resources
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $server
	 * @return bool
	 * @link http://php.net/manual/en/function.xmlrpc-server-destroy.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_server_destroy($server): bool {}

	/**
	 * Register a PHP function to generate documentation
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $server
	 * @param string $function
	 * @return bool
	 * @link http://php.net/manual/en/function.xmlrpc-server-register-introspection-callback.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_server_register_introspection_callback($server, string $function): bool {}

	/**
	 * Register a PHP function to resource method matching method_name
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $server
	 * @param string $method_name
	 * @param string $function
	 * @return bool
	 * @link http://php.net/manual/en/function.xmlrpc-server-register-method.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_server_register_method($server, string $method_name, string $function): bool {}

	/**
	 * Sets xmlrpc type, base64 or datetime, for a PHP string value
	 * <p>Sets xmlrpc type, base64 or datetime, for a PHP string value.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $value <p>Value to set the type</p>
	 * @param string $type <p>'base64' or 'datetime'</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If successful, <code>value</code> is converted to an object.</p>
	 * @link http://php.net/manual/en/function.xmlrpc-set-type.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function xmlrpc_set_type(string &$value, string $type): bool {}

}
