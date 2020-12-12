<?php



namespace {

	/**
	 * Creates a Radius handle for accounting
	 * @return resource <p>Returns a handle on success, <b><code>FALSE</code></b> on error. This function only fails if insufficient memory is available.</p>
	 * @link https://php.net/manual/en/function.radius-acct-open.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_acct_open() {}

	/**
	 * Adds a server
	 * <p><b>radius_add_server()</b> may be called multiple times, and it may be used together with <code>radius_config()</code>. At most 10 servers may be specified. When multiple servers are given, they are tried in round-robin fashion until a valid response is received, or until each server's <code>max_tries</code> limit has been reached.</p>
	 * @param resource $radius_handle
	 * @param string $hostname <p>The <code>hostname</code> parameter specifies the server host, either as a fully qualified domain name or as a dotted-quad IP address in text form.</p>
	 * @param int $port <p>The <code>port</code> specifies the UDP port to contact on the server. If port is given as 0, the library looks up the <code>radius/udp</code> or <code>radacct/udp</code> service in the network services database, and uses the port found there. If no entry is found, the library uses the standard Radius ports, 1812 for authentication and 1813 for accounting.</p>
	 * @param string $secret <p>The shared secret for the server host is passed to the <code>secret</code> parameter. The Radius protocol ignores all but the leading 128 bytes of the shared secret.</p>
	 * @param int $timeout <p>The timeout for receiving replies from the server is passed to the <code>timeout</code> parameter, in units of seconds.</p>
	 * @param int $max_tries <p>The maximum number of repeated requests to make before giving up is passed into the <code>max_tries</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-add-server.php
	 * @see radius_config()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_add_server($radius_handle, string $hostname, int $port, string $secret, int $timeout, int $max_tries): bool {}

	/**
	 * Creates a Radius handle for authentication
	 * @return resource <p>Returns a handle on success, <b><code>FALSE</code></b> on error. This function only fails if insufficient memory is available.</p>
	 * @link https://php.net/manual/en/function.radius-auth-open.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_auth_open() {}

	/**
	 * Frees all ressources
	 * <p>It is not needed to call this function because php frees all resources at the end of each request.</p>
	 * @param resource $radius_handle
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-close.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_close($radius_handle): bool {}

	/**
	 * Causes the library to read the given configuration file
	 * <p>Before issuing any Radius requests, the library must be made aware of the servers it can contact. The easiest way to configure the library is to call <b>radius_config()</b>. <b>radius_config()</b> causes the library to read a configuration file whose format is described in radius.conf.</p>
	 * @param resource $radius_handle
	 * @param string $file <p>The pathname of the configuration file is passed as the file argument to <b>radius_config()</b>. The library can also be configured programmatically by calls to <code>radius_add_server()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-config.php
	 * @see radius_add_server()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_config($radius_handle, string $file): bool {}

	/**
	 * Create accounting or authentication request
	 * <p>A Radius request consists of a code specifying the kind of request, and zero or more attributes which provide additional information. To begin constructing a new request, call <b>radius_create_request()</b>.</p><p><b>Note</b>:  Attention: You must call this function, before you can put any attribute! </p>
	 * @param resource $radius_handle
	 * @param int $type <p>Type is <b><code>RADIUS_ACCESS_REQUEST</code></b> or <b><code>RADIUS_ACCOUNTING_REQUEST</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-create-request.php
	 * @see radius_send_request()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_create_request($radius_handle, int $type): bool {}

	/**
	 * Converts raw data to IP-Address
	 * @param string $data
	 * @return string
	 * @link https://php.net/manual/en/function.radius-cvt-addr.php
	 * @see radius_cvt_int(), radius_cvt_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_cvt_addr(string $data): string {}

	/**
	 * Converts raw data to integer
	 * @param string $data
	 * @return int
	 * @link https://php.net/manual/en/function.radius-cvt-int.php
	 * @see radius_cvt_addr(), radius_cvt_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_cvt_int(string $data): int {}

	/**
	 * Converts raw data to string
	 * @param string $data
	 * @return string
	 * @link https://php.net/manual/en/function.radius-cvt-string.php
	 * @see radius_cvt_addr(), radius_cvt_int()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_cvt_string(string $data): string {}

	/**
	 * Demangles data
	 * <p>Some data (Passwords, MS-CHAPv1 MPPE-Keys) is mangled for security reasons, and must be demangled before you can use them.</p>
	 * @param resource $radius_handle
	 * @param string $mangled
	 * @return string <p>Returns the demangled string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.radius-demangle.php
	 * @since PECL radius >= 1.2.0
	 */
	function radius_demangle($radius_handle, string $mangled): string {}

	/**
	 * Derives mppe-keys from mangled data
	 * <p>When using MPPE with MS-CHAPv2, the send- and recv-keys are mangled (see RFC 2548), however this function is useless, because I don't think that there is or will be a PPTP-MPPE implementation in PHP.</p>
	 * @param resource $radius_handle
	 * @param string $mangled
	 * @return string <p>Returns the demangled string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.radius-demangle-mppe-key.php
	 * @since PECL radius >= 1.2.0
	 */
	function radius_demangle_mppe_key($radius_handle, string $mangled): string {}

	/**
	 * Extracts an attribute
	 * <p>Like Radius requests, each response may contain zero or more attributes. After a response has been received successfully by <code>radius_send_request()</code>, its attributes can be extracted one by one using <b>radius_get_attr()</b>. Each time <b>radius_get_attr()</b> is called, it gets the next attribute from the current response.</p>
	 * @param resource $radius_handle
	 * @return mixed <p>Returns an associative array containing the attribute-type and the data, or error number &lt;= 0.</p>
	 * @link https://php.net/manual/en/function.radius-get-attr.php
	 * @see radius_put_attr(), radius_get_vendor_attr(), radius_put_vendor_attr(), radius_send_request()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_get_attr($radius_handle) {}

	/**
	 * Extracts the data from a tagged attribute
	 * <p>If a tagged attribute has been returned from <code>radius_get_attr()</code>, <b>radius_get_tagged_attr_data()</b> will return the data from the attribute.</p>
	 * @param string $data <p>The tagged attribute to be decoded.</p>
	 * @return string|false <p>Returns the data from the tagged attribute or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-get-tagged-attr-data.php
	 * @see radius_get_attr(), radius_get_tagged_attr_tag()
	 * @since PECL radius >= 1.3.0
	 */
	function radius_get_tagged_attr_data(string $data) {}

	/**
	 * Extracts the tag from a tagged attribute
	 * <p>If a tagged attribute has been returned from <code>radius_get_attr()</code>, <code>radius_get_tagged_attr_data()</code> will return the tag from the attribute.</p>
	 * @param string $data <p>The tagged attribute to be decoded.</p>
	 * @return int|false <p>Returns the tag from the tagged attribute or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-get-tagged-attr-tag.php
	 * @see radius_get_attr(), radius_get_tagged_attr_data()
	 * @since PECL radius >= 1.3.0
	 */
	function radius_get_tagged_attr_tag(string $data) {}

	/**
	 * Extracts a vendor specific attribute
	 * <p>If <code>radius_get_attr()</code> returns <b><code>RADIUS_VENDOR_SPECIFIC</code></b>, <b>radius_get_vendor_attr()</b> may be called to determine the vendor.</p>
	 * @param string $data
	 * @return array <p>Returns an associative array containing the attribute-type, vendor and the data, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.radius-get-vendor-attr.php
	 * @see radius_get_attr(), radius_put_vendor_attr()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_get_vendor_attr(string $data): array {}

	/**
	 * Attaches an IP address attribute
	 * <p>Attaches an IP address attribute to the current RADIUS request.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param string $addr <p>An IPv4 address in string form, such as <code>10.0.0.1</code>.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-addr.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_addr($radius_handle, int $type, string $addr, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Attaches a binary attribute
	 * <p>Attaches a binary attribute to the current RADIUS request.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param string $value <p>The attribute value, which will be treated as a raw binary string.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-attr.php
	 * @see radius_get_attr(), radius_get_vendor_attr(), radius_put_vendor_attr()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_attr($radius_handle, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Attaches an integer attribute
	 * <p>Attaches an integer attribute to the current RADIUS request.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param int $value <p>The attribute value.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-int.php
	 * @see radius_put_string(), radius_put_vendor_int(), radius_put_vendor_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_int($radius_handle, int $type, int $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Attaches a string attribute
	 * <p>Attaches a string attribute to the current RADIUS request. In general, <code>radius_put_attr()</code> is a more useful function for attaching string attributes, as it is binary safe.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param string $value <p>The attribute value. This value is expected by the underlying library to be null terminated, therefore this parameter is not binary safe.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-string.php
	 * @see radius_put_int(), radius_put_vendor_int(), radius_put_vendor_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_string($radius_handle, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Attaches a vendor specific IP address attribute
	 * <p>Attaches an IP address vendor specific attribute to the current RADIUS request.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $vendor <p>The vendor ID.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param string $addr <p>An IPv4 address in string form, such as <code>10.0.0.1</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-vendor-addr.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_addr($radius_handle, int $vendor, int $type, string $addr): bool {}

	/**
	 * Attaches a vendor specific binary attribute
	 * <p>Attaches a vendor specific binary attribute to the current RADIUS request.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $vendor <p>The vendor ID.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param string $value <p>The attribute value, which will be treated as a raw binary string.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-vendor-attr.php
	 * @see radius_get_vendor_attr()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_attr($radius_handle, int $vendor, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Attaches a vendor specific integer attribute
	 * <p>Attaches a vendor specific integer attribute to the current RADIUS request.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $vendor <p>The vendor ID.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param int $value <p>The attribute value.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-vendor-int.php
	 * @see radius_put_vendor_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_int($radius_handle, int $vendor, int $type, int $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Attaches a vendor specific string attribute
	 * <p>Attaches a vendor specific string attribute to the current RADIUS request. In general, <code>radius_put_vendor_attr()</code> is a more useful function for attaching string attributes, as it is binary safe.</p><p><b>Note</b>:</p><p>A request must be created via <code>radius_create_request()</code> before this function can be called.</p>
	 * @param resource $radius_handle <p>The RADIUS resource.</p>
	 * @param int $vendor <p>The vendor ID.</p>
	 * @param int $type <p>The attribute type.</p>
	 * @param string $value <p>The attribute value. This value is expected by the underlying library to be null terminated, therefore this parameter is not binary safe.</p>
	 * @param int $options <p>A bitmask of the attribute options. The available options include <b><code>RADIUS_OPTION_TAGGED</code></b> and <b><code>RADIUS_OPTION_SALT</code></b>.</p>
	 * @param int $tag <p>The attribute tag. This parameter is ignored unless the <b><code>RADIUS_OPTION_TAGGED</code></b> option is set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-put-vendor-string.php
	 * @see radius_put_vendor_int()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_string($radius_handle, int $vendor, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * Returns the request authenticator
	 * <p>The request authenticator is needed for demangling mangled data like passwords and encryption-keys.</p>
	 * @param resource $radius_handle
	 * @return string <p>Returns the request authenticator as string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.radius-request-authenticator.php
	 * @see radius_demangle()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_request_authenticator($radius_handle): string {}

	/**
	 * Salt-encrypts a value
	 * <p>Applies the RADIUS salt-encryption algorithm to the given value.</p><p>In general, this is achieved automatically by providing the <b><code>RADIUS_OPTION_SALT</code></b> option to an attribute setter function, but this function can be used if low-level request construction is required.</p>
	 * @param resource $radius_handle
	 * @param string $data <p>The data to be salt-encrypted.</p>
	 * @return string|false <p>Returns the salt-encrypted data or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.radius-salt-encrypt-attr.php
	 * @see radius_put_addr(), radius_put_attr(), radius_put_int(), radius_put_string()
	 * @since PECL radius >= 1.3.0
	 */
	function radius_salt_encrypt_attr($radius_handle, string $data) {}

	/**
	 * Sends the request and waits for a reply
	 * <p>After the Radius request has been constructed, it is sent by <b>radius_send_request()</b>.</p><p>The <b>radius_send_request()</b> function sends the request and waits for a valid reply, retrying the defined servers in round-robin fashion as necessary.</p>
	 * @param resource $radius_handle
	 * @return int <p>If a valid response is received, <b>radius_send_request()</b> returns the Radius code which specifies the type of the response. This will typically be <b><code>RADIUS_ACCESS_ACCEPT</code></b>, <b><code>RADIUS_ACCESS_REJECT</code></b>, or <b><code>RADIUS_ACCESS_CHALLENGE</code></b>. If no valid response is received, <b>radius_send_request()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.radius-send-request.php
	 * @see radius_create_request()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_send_request($radius_handle): int {}

	/**
	 * Returns the shared secret
	 * <p>The shared secret is needed as salt for demangling mangled data like passwords and encryption-keys.</p>
	 * @param resource $radius_handle
	 * @return string <p>Returns the server's shared secret as string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.radius-server-secret.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_server_secret($radius_handle): string {}

	/**
	 * Returns an error message
	 * <p>If Radius-functions fail then they record an error message. This error message can be retrieved with this function.</p>
	 * @param resource $radius_handle
	 * @return string <p>Returns error messages as string from failed radius functions.</p>
	 * @link https://php.net/manual/en/function.radius-strerror.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_strerror($radius_handle): string {}

	/**
	 * The maximum length of MPPE keys.
	 */
	define('RADIUS_MPPE_KEY_LEN', null);

}
