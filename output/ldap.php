<?php



namespace {

	/**
	 * Translate 8859 characters to t61 characters
	 * <p>Translate <code>ISO-8859</code> characters to <code>t61</code> characters.</p><p>This function is useful if you have to talk to a legacy <code>LDAPv2</code> server.</p>
	 * @param string $value <p>The text to be translated.</p>
	 * @return string <p>Return the <code>t61</code> translation of <code>value</code>.</p>
	 * @link https://php.net/manual/en/function.ldap-8859-to-t61.php
	 * @see ldap_t61_to_8859()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ldap_8859_to_t61(string $value): string {}

	/**
	 * Add entries to LDAP directory
	 * <p>Add entries in the LDAP directory.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $entry <p>An array that specifies the information about the entry. The values in the entries are indexed by individual attributes. In case of multiple values for an attribute, they are indexed using integers starting with 0.</p>  <code> &lt;&#63;php<br>$entry["attribute1"]&nbsp;=&nbsp;"value";<br>$entry["attribute2"][0]&nbsp;=&nbsp;"value1";<br>$entry["attribute2"][1]&nbsp;=&nbsp;"value2";<br>&#63;&gt;  </code>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-add.php
	 * @see ldap_add_ext(), ldap_delete()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_add($link_identifier, string $dn, array $entry, array $serverctrls = array()): bool {}

	/**
	 * Add entries to LDAP directory
	 * <p>Does the same thing as <code>ldap_add()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $dn
	 * @param array $entry
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-add-ext.php
	 * @see ldap_add(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_add_ext($link_identifier, string $dn, array $entry, array $serverctrls = array()) {}

	/**
	 * Bind to LDAP directory
	 * <p>Binds to the LDAP directory with specified RDN and password.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $bind_rdn
	 * @param string $bind_password
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-bind.php
	 * @see ldap_bind_ext(), ldap_unbind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_bind($link_identifier, string $bind_rdn = NULL, string $bind_password = NULL): bool {}

	/**
	 * Bind to LDAP directory
	 * <p>Does the same thing as <code>ldap_bind()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $bind_rdn
	 * @param string $bind_password
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-bind-ext.php
	 * @see ldap_bind(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_bind_ext($link_identifier, string $bind_rdn = NULL, string $bind_password = NULL, array $serverctrls = array()) {}

	/**
	 * Alias of ldap_unbind()
	 * <p>This function is an alias of: <code>ldap_unbind()</code>.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.ldap-close.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_close($link_identifier): bool {}

	/**
	 * Compare value of attribute found in entry specified with DN
	 * <p>Compare <code>value</code> of <code>attribute</code> with value of same attribute in an LDAP directory entry.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param string $attribute <p>The attribute name.</p>
	 * @param string $value <p>The compared value.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if <code>value</code> matches otherwise returns <b><code>FALSE</code></b>. Returns -1 on error.</p>
	 * @link https://php.net/manual/en/function.ldap-compare.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ldap_compare($link_identifier, string $dn, string $attribute, string $value, array $serverctrls = array()) {}

	/**
	 * Connect to an LDAP server
	 * <p>The <i>following</i> signature is still supported for backwards compatibility, but is considered deprecated and should not be used anymore!</p><p>Creates an LDAP link identifier and checks whether the given <code>host</code> and <code>port</code> are plausible.</p><p><b>Note</b>:  This function does <i>not</i> open a connection. It checks whether the given parameters are plausible and can be used to open a connection as soon as one is needed. </p>
	 * @param string $ldap_uri <p>A full LDAP URI of the form <code>ldap://hostname:port</code> or <code>ldaps://hostname:port</code> for SSL encryption.</p> <p>You can also provide multiple LDAP-URIs separated by a space as one string</p> <p>Note that <code>hostname:port</code> is not a supported LDAP URI as the schema is missing.</p>
	 * @return resource <p>Returns a positive LDAP link identifier when the provided LDAP URI seems plausible. It's a syntactic check of the provided parameter but the server(s) will not be contacted! If the syntactic check fails it returns <b><code>FALSE</code></b>. <b>ldap_connect()</b> will otherwise return a <code>resource</code> as it does not actually connect but just initializes the connecting parameters. The actual connect happens with the next calls to ldap_&#42; funcs, usually with <code>ldap_bind()</code>.</p><p>If no argument is specified then the link identifier of the already opened link will be returned.</p>
	 * @link https://php.net/manual/en/function.ldap-connect.php
	 * @see ldap_bind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_connect(string $ldap_uri = NULL) {}

	/**
	 * Send LDAP pagination control
	 * <p>Enable LDAP pagination by sending the pagination control (page size, cookie...).</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param int $pagesize <p>The number of entries by page.</p>
	 * @param bool $iscritical <p>Indicates whether the pagination is critical or not. If true and if the server doesn't support pagination, the search will return no result.</p>
	 * @param string $cookie <p>An opaque structure sent by the server (<code>ldap_control_paged_result_response()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-control-paged-result.php
	 * @see ldap_control_paged_result_response()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function ldap_control_paged_result($link, int $pagesize, bool $iscritical = FALSE, string $cookie = ""): bool {}

	/**
	 * Retrieve the LDAP pagination cookie
	 * <p>Retrieve the pagination information send by the server.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result
	 * @param string $cookie <p>An opaque structure sent by the server.</p>
	 * @param int $estimated <p>The estimated number of entries to retrieve.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-control-paged-result-response.php
	 * @see ldap_control_paged_result()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function ldap_control_paged_result_response($link, $result, string &$cookie = NULL, int &$estimated = NULL): bool {}

	/**
	 * Count the number of entries in a search
	 * <p>Returns the number of entries stored in the result of previous search operations.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_identifier <p>The internal LDAP result.</p>
	 * @return int <p>Returns number of entries in the result or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-count-entries.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_count_entries($link_identifier, $result_identifier): int {}

	/**
	 * Delete an entry from a directory
	 * <p>Deletes a particular entry in LDAP directory.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-delete.php
	 * @see ldap_delete_ext(), ldap_add()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_delete($link_identifier, string $dn, array $serverctrls = array()): bool {}

	/**
	 * Delete an entry from a directory
	 * <p>Does the same thing as <code>ldap_delete()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $dn
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-delete-ext.php
	 * @see ldap_delete(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_delete_ext($link_identifier, string $dn, array $serverctrls = array()) {}

	/**
	 * Convert DN to User Friendly Naming format
	 * <p>Turns the specified <code>dn</code>, into a more user-friendly form, stripping off type names.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @return string <p>Returns the user friendly name.</p>
	 * @link https://php.net/manual/en/function.ldap-dn2ufn.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_dn2ufn(string $dn): string {}

	/**
	 * Convert LDAP error number into string error message
	 * <p>Returns the string error message explaining the error number <code>errno</code>. While LDAP errno numbers are standardized, different libraries return different or even localized textual error messages. Never check for a specific error message text, but always use an error number to check.</p>
	 * @param int $errno <p>The error number.</p>
	 * @return string <p>Returns the error message, as a string.</p>
	 * @link https://php.net/manual/en/function.ldap-err2str.php
	 * @see ldap_errno(), ldap_error()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_err2str(int $errno): string {}

	/**
	 * Return the LDAP error number of the last LDAP command
	 * <p>Returns the standardized error number returned by the last LDAP command. This number can be converted into a textual error message using <code>ldap_err2str()</code>.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @return int <p>Return the LDAP error number of the last LDAP command for this link.</p>
	 * @link https://php.net/manual/en/function.ldap-errno.php
	 * @see ldap_err2str(), ldap_error()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_errno($link_identifier): int {}

	/**
	 * Return the LDAP error message of the last LDAP command
	 * <p>Returns the string error message explaining the error generated by the last LDAP command for the given <code>link_identifier</code>. While LDAP errno numbers are standardized, different libraries return different or even localized textual error messages. Never check for a specific error message text, but always use an error number to check.</p><p>Unless you lower your warning level in your php.ini sufficiently or prefix your LDAP commands with <code>@</code> (at) characters to suppress warning output, the errors generated will also show up in your HTML output.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @return string <p>Returns string error message.</p>
	 * @link https://php.net/manual/en/function.ldap-error.php
	 * @see ldap_err2str(), ldap_errno()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_error($link_identifier): string {}

	/**
	 * Escape a string for use in an LDAP filter or DN
	 * <p>Escapes <code>value</code> for use in the context implied by <code>flags</code>.</p>
	 * @param string $value <p>The value to escape.</p>
	 * @param string $ignore <p>Characters to ignore when escaping.</p>
	 * @param int $flags <p>The context the escaped string will be used in: <b><code>LDAP_ESCAPE_FILTER</code></b> for filters to be used with <code>ldap_search()</code>, or <b><code>LDAP_ESCAPE_DN</code></b> for DNs. If neither flag is passed, all chars are escaped.</p>
	 * @return string <p>Returns the escaped string.</p>
	 * @link https://php.net/manual/en/function.ldap-escape.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function ldap_escape(string $value, string $ignore = "", int $flags = 0): string {}

	/**
	 * Performs an extended operation
	 * <p>Performs an extended operation on the specified <code>link</code> with <code>reqoid</code> the OID of the operation and <code>reqdata</code> the data.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $reqoid <p>The extended operation request OID. You may use one of <b><code>LDAP_EXOP_START_TLS</code></b>, <b><code>LDAP_EXOP_MODIFY_PASSWD</code></b>, <b><code>LDAP_EXOP_REFRESH</code></b>, <b><code>LDAP_EXOP_WHO_AM_I</code></b>, <b><code>LDAP_EXOP_TURN</code></b>, or a string with the OID of the operation you want to send.</p>
	 * @param string $reqdata <p>The extended operation request data. May be NULL for some operations like <b><code>LDAP_EXOP_WHO_AM_I</code></b>, may also need to be BER encoded.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @param string $retdata <p>Will be filled with the extended operation response data if provided. If not provided you may use ldap_parse_exop on the result object later to get this data.</p>
	 * @param string $retoid <p>Will be filled with the response OID if provided, usually equal to the request OID.</p>
	 * @return mixed <p>When used with <code>retdata</code>, returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error. When used without <code>retdata</code>, returns a result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-exop.php
	 * @see ldap_parse_result(), ldap_parse_exop(), ldap_exop_whoami(), ldap_exop_refresh(), ldap_exop_passwd()
	 * @since PHP 7 >= 7.2.0
	 */
	function ldap_exop($link, string $reqoid, string $reqdata = NULL, array $serverctrls = NULL, string &$retdata = NULL, string &$retoid = NULL) {}

	/**
	 * PASSWD extended operation helper
	 * <p>Performs a PASSWD extended operation.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $user <p>dn of the user to change the password of.</p>
	 * @param string $oldpw <p>The old password of this user. May be ommited depending of server configuration.</p>
	 * @param string $newpw <p>The new password for this user. May be omitted or empty to have a generated password.</p>
	 * @param array $serverctrls <p>If provided, a password policy request control is send with the request and this is filled with an array of LDAP Controls returned with the request.</p>
	 * @return mixed <p>Returns the generated password if <code>newpw</code> is empty or omitted. Otherwise returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-exop-passwd.php
	 * @see ldap_exop(), ldap_parse_exop()
	 * @since PHP 7 >= 7.2.0
	 */
	function ldap_exop_passwd($link, string $user = "", string $oldpw = "", string $newpw = "", array &$serverctrls = NULL) {}

	/**
	 * Refresh extended operation helper
	 * <p>Performs a Refresh extended operation and returns the data.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>dn of the entry to refresh.</p>
	 * @param int $ttl <p>Time in seconds (between 1 and 31557600) that the client requests that the entry exists in the directory before being automatically removed.</p>
	 * @return int <p>From RFC: The responseTtl field is the time in seconds which the server chooses to have as the time-to-live field for that entry. It must not be any smaller than that which the client requested, and it may be larger. However, to allow servers to maintain a relatively accurate directory, and to prevent clients from abusing the dynamic extensions, servers are permitted to shorten a client-requested time-to-live value, down to a minimum of 86400 seconds (one day). <b><code>FALSE</code></b> will be returned on error.</p>
	 * @link https://php.net/manual/en/function.ldap-exop-refresh.php
	 * @see ldap_exop()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_exop_refresh($link, string $dn, int $ttl): int {}

	/**
	 * WHOAMI extended operation helper
	 * <p>Performs a WHOAMI extended operation and returns the data.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @return string <p>The data returned by the server, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-exop-whoami.php
	 * @see ldap_exop()
	 * @since PHP 7 >= 7.2.0
	 */
	function ldap_exop_whoami($link): string {}

	/**
	 * Splits DN into its component parts
	 * <p>Splits the DN returned by <code>ldap_get_dn()</code> and breaks it up into its component parts. Each part is known as Relative Distinguished Name, or RDN.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param int $with_attrib <p>Used to request if the RDNs are returned with only values or their attributes as well. To get RDNs with the attributes (i.e. in attribute=value format) set <code>with_attrib</code> to 0 and to get only values set it to 1.</p>
	 * @return array|false <p>Returns an array of all DN components, or <b><code>FALSE</code></b> on failure. The first element in the array has <code>count</code> key and represents the number of returned values, next elements are numerically indexed DN components.</p>
	 * @link https://php.net/manual/en/function.ldap-explode-dn.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_explode_dn(string $dn, int $with_attrib) {}

	/**
	 * Return first attribute
	 * <p>Gets the first attribute in the given entry. Remaining attributes are retrieved by calling <code>ldap_next_attribute()</code> successively.</p><p>Similar to reading entries, attributes are also read one by one from a particular entry.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @return string <p>Returns the first attribute in the entry on success and <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-first-attribute.php
	 * @see ldap_next_attribute(), ldap_get_attributes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_first_attribute($link_identifier, $result_entry_identifier): string {}

	/**
	 * Return first result id
	 * <p>Returns the entry identifier for first entry in the result. This entry identifier is then supplied to <code>ldap_next_entry()</code> routine to get successive entries from the result.</p><p>Entries in the LDAP result are read sequentially using the <b>ldap_first_entry()</b> and <code>ldap_next_entry()</code> functions.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_identifier
	 * @return resource <p>Returns the result entry identifier for the first entry on success and <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-first-entry.php
	 * @see ldap_get_entries()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_first_entry($link_identifier, $result_identifier) {}

	/**
	 * Return first reference
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param resource $result
	 * @return resource
	 * @link https://php.net/manual/en/function.ldap-first-reference.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ldap_first_reference($link, $result) {}

	/**
	 * Free result memory
	 * <p>Frees up the memory allocated internally to store the result. All result memory will be automatically freed when the script terminates.</p><p>Typically all the memory allocated for the LDAP result gets freed at the end of the script. In case the script is making successive searches which return large result sets, <b>ldap_free_result()</b> could be called to keep the runtime memory usage by the script low.</p>
	 * @param resource $result_identifier
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-free-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_free_result($result_identifier): bool {}

	/**
	 * Get attributes from a search result entry
	 * <p>Reads attributes and values from an entry in the search result.</p><p>Having located a specific entry in the directory, you can find out what information is held for that entry by using this call. You would use this call for an application which "browses" directory entries and/or where you do not know the structure of the directory entries. In many applications you will be searching for a specific attribute such as an email address or a surname, and won't care what other data is held.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @return array <p>Returns a complete entry information in a multi-dimensional array on success and <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-get-attributes.php
	 * @see ldap_first_attribute(), ldap_next_attribute()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_get_attributes($link_identifier, $result_entry_identifier): array {}

	/**
	 * Get the DN of a result entry
	 * <p>Finds out the DN of an entry in the result.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @return string <p>Returns the DN of the result entry and <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-get-dn.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_get_dn($link_identifier, $result_entry_identifier): string {}

	/**
	 * Get all result entries
	 * <p>Reads multiple entries from the given result, and then reading the attributes and multiple values.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_identifier
	 * @return array <p>Returns a complete result information in a multi-dimensional array on success and <b><code>FALSE</code></b> on error.</p><p>The structure of the array is as follows. The attribute index is converted to lowercase. (Attributes are case-insensitive for directory servers, but not when used as array indices.)</p>  <pre> return_value["count"] = number of entries in the result return_value[0] : refers to the details of first entry return_value[i]["dn"] = DN of the ith entry in the result return_value[i]["count"] = number of attributes in ith entry return_value[i][j] = NAME of the jth attribute in the ith entry in the result return_value[i]["attribute"]["count"] = number of values for attribute in ith entry return_value[i]["attribute"][j] = jth value of attribute in ith entry </pre>
	 * @link https://php.net/manual/en/function.ldap-get-entries.php
	 * @see ldap_first_entry(), ldap_next_entry()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_get_entries($link_identifier, $result_identifier): array {}

	/**
	 * Get the current value for given option
	 * <p>Sets <code>retval</code> to the value of the specified option.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param int $option <p>The parameter <code>option</code> can be one of:</p>   Option Type since     <b><code>LDAP_OPT_DEREF</code></b> integer &nbsp;   <b><code>LDAP_OPT_SIZELIMIT</code></b> integer &nbsp;   <b><code>LDAP_OPT_TIMELIMIT</code></b> integer &nbsp;   <b><code>LDAP_OPT_NETWORK_TIMEOUT</code></b> integer &nbsp;   <b><code>LDAP_OPT_PROTOCOL_VERSION</code></b> integer &nbsp;   <b><code>LDAP_OPT_ERROR_NUMBER</code></b> integer &nbsp;   <b><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></b> integer &nbsp;   <b><code>LDAP_OPT_REFERRALS</code></b> bool &nbsp;   <b><code>LDAP_OPT_RESTART</code></b> bool &nbsp;   <b><code>LDAP_OPT_HOST_NAME</code></b> string &nbsp;   <b><code>LDAP_OPT_ERROR_STRING</code></b> string &nbsp;   <b><code>LDAP_OPT_MATCHED_DN</code></b> string &nbsp;   <b><code>LDAP_OPT_SERVER_CONTROLS</code></b> array &nbsp;   <b><code>LDAP_OPT_CLIENT_CONTROLS</code></b> array &nbsp;   <b><code>LDAP_OPT_X_KEEPALIVE_IDLE</code></b> int 7.1   <b><code>LDAP_OPT_X_KEEPALIVE_PROBES</code></b> int 7.1   <b><code>LDAP_OPT_X_KEEPALIVE_INTERVAL</code></b> int 7.1   <b><code>LDAP_OPT_X_TLS_CACERTDIR</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_CACERTFILE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_CERTFILE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_CIPHER_SUITE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_CRLCHECK</code></b> integer 7.1   <b><code>LDAP_OPT_X_TLS_CRL_NONE</code></b> integer 7.1   <b><code>LDAP_OPT_X_TLS_CRL_PEER</code></b> integer 7.1   <b><code>LDAP_OPT_X_TLS_CRL_ALL</code></b> integer 7.1   <b><code>LDAP_OPT_X_TLS_CRLFILE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_DHFILE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_KEYILE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_PACKAGE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_PROTOCOL_MIN</code></b> integer 7.1   <b><code>LDAP_OPT_X_TLS_RANDOM_FILE</code></b> string 7.1   <b><code>LDAP_OPT_X_TLS_REQUIRE_CERT</code></b> integer &nbsp;
	 * @param mixed $retval <p>This will be set to the option value.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-get-option.php
	 * @see ldap_set_option()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ldap_get_option($link_identifier, int $option, &$retval): bool {}

	/**
	 * Get all values from a result entry
	 * <p>Reads all the values of the attribute in the entry in the result.</p><p>This call needs a <code>result_entry_identifier</code>, so needs to be preceded by one of the ldap search calls and one of the calls to get an individual entry.</p><p>You application will either be hard coded to look for certain attributes (such as "surname" or "mail") or you will have to use the <code>ldap_get_attributes()</code> call to work out what attributes exist for a given entry.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @param string $attribute
	 * @return array <p>Returns an array of values for the attribute on success and <b><code>FALSE</code></b> on error. The number of values can be found by indexing "count" in the resultant array. Individual values are accessed by integer index in the array. The first index is 0.</p><p>LDAP allows more than one entry for an attribute, so it can, for example, store a number of email addresses for one person's directory entry all labeled with the attribute "mail"</p> <pre> return_value["count"] = number of values for attribute return_value[0] = first value of attribute return_value[i] = ith value of attribute </pre>
	 * @link https://php.net/manual/en/function.ldap-get-values.php
	 * @see ldap_get_values_len()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_get_values($link_identifier, $result_entry_identifier, string $attribute): array {}

	/**
	 * Get all binary values from a result entry
	 * <p>Reads all the values of the attribute in the entry in the result.</p><p>This function is used exactly like <code>ldap_get_values()</code> except that it handles binary data and not string data.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @param string $attribute
	 * @return array <p>Returns an array of values for the attribute on success and <b><code>FALSE</code></b> on error. Individual values are accessed by integer index in the array. The first index is 0. The number of values can be found by indexing "count" in the resultant array.</p>
	 * @link https://php.net/manual/en/function.ldap-get-values-len.php
	 * @see ldap_get_values()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_get_values_len($link_identifier, $result_entry_identifier, string $attribute): array {}

	/**
	 * Single-level search
	 * <p>Performs the search for a specified <code>filter</code> on the directory with the scope <b><code>LDAP_SCOPE_ONELEVEL</code></b>.</p><p><b><code>LDAP_SCOPE_ONELEVEL</code></b> means that the search should only return information that is at the level immediately below the <code>base_dn</code> given in the call. (Equivalent to typing "<b>ls</b>" and getting a list of files and folders in the current working directory.)</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $base_dn <p>The base DN for the directory.</p>
	 * @param string $filter
	 * @param array $attributes <p>An array of the required attributes, e.g. array("mail", "sn", "cn"). Note that the "dn" is always returned irrespective of which attributes types are requested.</p> <p>Using this parameter is much more efficient than the default action (which is to return all attributes and their associated values). The use of this parameter should therefore be considered good practice.</p>
	 * @param int $attrsonly <p>Should be set to 1 if only attribute types are wanted. If set to 0 both attributes types and attribute values are fetched which is the default behaviour.</p>
	 * @param int $sizelimit <p>Enables you to limit the count of entries fetched. Setting this to 0 means no limit.</p> <p><b>Note</b>:</p><p>This parameter can NOT override server-side preset sizelimit. You can set it lower though.</p> <p>Some directory server hosts will be configured to return no more than a preset number of entries. If this occurs, the server will indicate that it has only returned a partial results set. This also occurs if you use this parameter to limit the count of fetched entries.</p>
	 * @param int $timelimit <p>Sets the number of seconds how long is spend on the search. Setting this to 0 means no limit.</p> <p><b>Note</b>:</p><p>This parameter can NOT override server-side preset timelimit. You can set it lower though.</p>
	 * @param int $deref <p>Specifies how aliases should be handled during the search. It can be one of the following:</p><ul> <li>  <b><code>LDAP_DEREF_NEVER</code></b> - (default) aliases are never dereferenced.  </li> <li>  <b><code>LDAP_DEREF_SEARCHING</code></b> - aliases should be dereferenced during the search but not when locating the base object of the search.  </li> <li>  <b><code>LDAP_DEREF_FINDING</code></b> - aliases should be dereferenced when locating the base object but not during the search.  </li> <li>  <b><code>LDAP_DEREF_ALWAYS</code></b> - aliases should be dereferenced always.  </li> </ul>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return resource <p>Returns a search result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-list.php
	 * @see ldap_search()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_list($link_identifier, string $base_dn, string $filter, array $attributes  = 'array("*")', int $attrsonly = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, array $serverctrls = array()) {}

	/**
	 * Add attribute values to current attributes
	 * <p>Adds one or more attribute values to the specified <code>dn</code>. To add a whole new object see <code>ldap_add()</code> function.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $entry <p>An associative array listing the attirbute values to add. If an attribute was not existing yet it will be added. If an attribute is existing you can only add values to it if it supports multiple values.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-mod-add.php
	 * @see ldap_mod_add_ext(), ldap_mod_del(), ldap_mod_replace(), ldap_modify_batch()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_mod_add($link_identifier, string $dn, array $entry, array $serverctrls = array()): bool {}

	/**
	 * Add attribute values to current attributes
	 * <p>Does the same thing as <code>ldap_mod_add()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $dn
	 * @param array $entry
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-mod_add-ext.php
	 * @see ldap_mod_add(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_mod_add_ext($link_identifier, string $dn, array $entry, array $serverctrls = array()) {}

	/**
	 * Delete attribute values from current attributes
	 * <p>Removes one or more attribute values from the specified <code>dn</code>. Object deletions are done by the <code>ldap_delete()</code> function.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $entry
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-mod-del.php
	 * @see ldap_mod_del_ext(), ldap_mod_add(), ldap_mod_replace(), ldap_modify_batch()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_mod_del($link_identifier, string $dn, array $entry, array $serverctrls = array()): bool {}

	/**
	 * Delete attribute values from current attributes
	 * <p>Does the same thing as <code>ldap_mod_del()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $dn
	 * @param array $entry
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-mod_del-ext.php
	 * @see ldap_mod_del(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_mod_del_ext($link_identifier, string $dn, array $entry, array $serverctrls = array()) {}

	/**
	 * Replace attribute values with new ones
	 * <p>Replaces one or more attributes from the specified <code>dn</code>. It may also add or remove attributes.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $entry <p>An associative array listing the attributes to replace. Sending an empty array as value will remove the attribute, while sending an attribute not existing yet on this entry will add it.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-mod-replace.php
	 * @see ldap_mod_replace_ext(), ldap_mod_del(), ldap_mod_add(), ldap_modify_batch()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_mod_replace($link_identifier, string $dn, array $entry, array $serverctrls = array()): bool {}

	/**
	 * Replace attribute values with new ones
	 * <p>Does the same thing as <code>ldap_mod_replace()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $dn
	 * @param array $entry
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-mod_replace-ext.php
	 * @see ldap_mod_replace(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_mod_replace_ext($link_identifier, string $dn, array $entry, array $serverctrls = array()) {}

	/**
	 * Alias of ldap_mod_replace()
	 * <p>This function is an alias of: <code>ldap_mod_replace()</code>.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $entry <p>An associative array listing the attributes to replace. Sending an empty array as value will remove the attribute, while sending an attribute not existing yet on this entry will add it.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.ldap-modify.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_modify($link_identifier, string $dn, array $entry, array $serverctrls = array()): bool {}

	/**
	 * Batch and execute modifications on an LDAP entry
	 * <p>Modifies an existing entry in the LDAP directory. Allows detailed specification of the modifications to perform.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param array $entry <p>An array that specifies the modifications to make. Each entry in this array is an associative array with two or three keys: <code>attrib</code> maps to the name of the attribute to modify, <code>modtype</code> maps to the type of modification to perform, and (depending on the type of modification) <code>values</code> maps to an array of attribute values relevant to the modification.</p> <p>Possible values for <code>modtype</code> include:</p>  <b><code>LDAP_MODIFY_BATCH_ADD</code></b>  <p>Each value specified through <code>values</code> is added (as an additional value) to the attribute named by <code>attrib</code>.</p>   <b><code>LDAP_MODIFY_BATCH_REMOVE</code></b>  <p>Each value specified through <code>values</code> is removed from the attribute named by <code>attrib</code>. Any value of the attribute not contained in the <code>values</code> array will remain untouched.</p>   <b><code>LDAP_MODIFY_BATCH_REMOVE_ALL</code></b>  <p>All values are removed from the attribute named by <code>attrib</code>. A <code>values</code> entry must not be provided.</p>   <b><code>LDAP_MODIFY_BATCH_REPLACE</code></b>  <p>All current values of the attribute named by <code>attrib</code> are replaced with the values specified through <code>values</code>.</p>   <p>Note that any value for <code>attrib</code> must be a string, any value for <code>values</code> must be an array of strings, and any value for <code>modtype</code> must be one of the LDAP_MODIFY_BATCH_&#42; constants listed above.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-modify-batch.php
	 * @since PHP 5.4 >= 5.4.26, PHP 5.5 >= 5.5.10, PHP 5.6 >= 5.6.0, PHP 7
	 */
	function ldap_modify_batch($link_identifier, string $dn, array $entry, array $serverctrls = array()): bool {}

	/**
	 * Get the next attribute in result
	 * <p>Retrieves the attributes in an entry. The first call to <b>ldap_next_attribute()</b> is made with the <code>result_entry_identifier</code> returned from <code>ldap_first_attribute()</code>.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @return string <p>Returns the next attribute in an entry on success and <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-next-attribute.php
	 * @see ldap_get_attributes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_next_attribute($link_identifier, $result_entry_identifier): string {}

	/**
	 * Get next result entry
	 * <p>Retrieve the entries stored in the result. Successive calls to the <b>ldap_next_entry()</b> return entries one by one till there are no more entries. The first call to <b>ldap_next_entry()</b> is made after the call to <code>ldap_first_entry()</code> with the <code>result_entry_identifier</code> as returned from the <code>ldap_first_entry()</code>.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result_entry_identifier
	 * @return resource <p>Returns entry identifier for the next entry in the result whose entries are being read starting with <code>ldap_first_entry()</code>. If there are no more entries in the result then it returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.ldap-next-entry.php
	 * @see ldap_get_entries()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_next_entry($link_identifier, $result_entry_identifier) {}

	/**
	 * Get next reference
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param resource $entry
	 * @return resource
	 * @link https://php.net/manual/en/function.ldap-next-reference.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ldap_next_reference($link, $entry) {}

	/**
	 * Parse result object from an LDAP extended operation
	 * <p>Parse LDAP extended operation data from result object <code>result</code></p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result <p>An LDAP result resource, returned by <code>ldap_exop()</code>.</p>
	 * @param string $retdata <p>Will be filled by the response data.</p>
	 * @param string $retoid <p>Will be filled by the response OID.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-parse-exop.php
	 * @see ldap_exop()
	 * @since PHP 7 >= 7.2.0
	 */
	function ldap_parse_exop($link, $result, string &$retdata = NULL, string &$retoid = NULL): bool {}

	/**
	 * Extract information from reference entry
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param resource $entry
	 * @param array $referrals
	 * @return bool
	 * @link https://php.net/manual/en/function.ldap-parse-reference.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ldap_parse_reference($link, $entry, array &$referrals): bool {}

	/**
	 * Extract information from result
	 * <p>Parses an LDAP search result.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result
	 * @param int $errcode <p>A reference to a variable that will be set to the LDAP error code in the result, or <code>0</code> if no error occurred.</p>
	 * @param string $matcheddn <p>A reference to a variable that will be set to a matched DN if one was recognised within the request, otherwise it will be set to <b><code>NULL</code></b>.</p>
	 * @param string $errmsg <p>A reference to a variable that will be set to the LDAP error message in the result, or an empty string if no error occurred.</p>
	 * @param array $referrals <p>A reference to a variable that will be set to an <code>array</code> set to all of the referral strings in the result, or an empty array if no referrals were returned.</p>
	 * @param array $serverctrls <p>An <code>array</code> of LDAP Controls which have been sent with the response.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-parse-result.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ldap_parse_result($link, $result, int &$errcode, string &$matcheddn = NULL, string &$errmsg = NULL, array &$referrals = NULL, array &$serverctrls = NULL): bool {}

	/**
	 * Read an entry
	 * <p>Performs the search for a specified <code>filter</code> on the directory with the scope <b><code>LDAP_SCOPE_BASE</code></b>. So it is equivalent to reading an entry from the directory.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $base_dn <p>The base DN for the directory.</p>
	 * @param string $filter <p>An empty filter is not allowed. If you want to retrieve absolutely all information for this entry, use a filter of <code>objectClass=&#42;</code>. If you know which entry types are used on the directory server, you might use an appropriate filter such as <code>objectClass=inetOrgPerson</code>.</p>
	 * @param array $attributes <p>An array of the required attributes, e.g. array("mail", "sn", "cn"). Note that the "dn" is always returned irrespective of which attributes types are requested.</p> <p>Using this parameter is much more efficient than the default action (which is to return all attributes and their associated values). The use of this parameter should therefore be considered good practice.</p>
	 * @param int $attrsonly <p>Should be set to 1 if only attribute types are wanted. If set to 0 both attributes types and attribute values are fetched which is the default behaviour.</p>
	 * @param int $sizelimit <p>Enables you to limit the count of entries fetched. Setting this to 0 means no limit.</p> <p><b>Note</b>:</p><p>This parameter can NOT override server-side preset sizelimit. You can set it lower though.</p> <p>Some directory server hosts will be configured to return no more than a preset number of entries. If this occurs, the server will indicate that it has only returned a partial results set. This also occurs if you use this parameter to limit the count of fetched entries.</p>
	 * @param int $timelimit <p>Sets the number of seconds how long is spend on the search. Setting this to 0 means no limit.</p> <p><b>Note</b>:</p><p>This parameter can NOT override server-side preset timelimit. You can set it lower though.</p>
	 * @param int $deref <p>Specifies how aliases should be handled during the search. It can be one of the following:</p><ul> <li>  <b><code>LDAP_DEREF_NEVER</code></b> - (default) aliases are never dereferenced.  </li> <li>  <b><code>LDAP_DEREF_SEARCHING</code></b> - aliases should be dereferenced during the search but not when locating the base object of the search.  </li> <li>  <b><code>LDAP_DEREF_FINDING</code></b> - aliases should be dereferenced when locating the base object but not during the search.  </li> <li>  <b><code>LDAP_DEREF_ALWAYS</code></b> - aliases should be dereferenced always.  </li> </ul>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return resource <p>Returns a search result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-read.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_read($link_identifier, string $base_dn, string $filter, array $attributes  = 'array("*")', int $attrsonly = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, array $serverctrls = array()) {}

	/**
	 * Modify the name of an entry
	 * <p>The entry specified by <code>dn</code> is renamed/moved.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
	 * @param string $newrdn <p>The new RDN.</p>
	 * @param string $newparent <p>The new parent/superior entry.</p>
	 * @param bool $deleteoldrdn <p>If <b><code>TRUE</code></b> the old RDN value(s) is removed, else the old RDN value(s) is retained as non-distinguished values of the entry.</p>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-rename.php
	 * @see ldap_rename_ext(), ldap_modify()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ldap_rename($link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn, array $serverctrls = array()): bool {}

	/**
	 * Modify the name of an entry
	 * <p>Does the same thing as <code>ldap_rename()</code> but returns the LDAP result resource to be parsed with <code>ldap_parse_result()</code>.</p>
	 * @param resource $link_identifier
	 * @param string $dn
	 * @param string $newrdn
	 * @param string $newparent
	 * @param bool $deleteoldrdn
	 * @param array $serverctrls
	 * @return resource <p>Returns an LDAP result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-rename-ext.php
	 * @see ldap_rename(), ldap_parse_result()
	 * @since PHP 7 >= 7.3.0
	 */
	function ldap_rename_ext($link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn, array $serverctrls = array()) {}

	/**
	 * Bind to LDAP directory using SASL
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param string $binddn
	 * @param string $password
	 * @param string $sasl_mech
	 * @param string $sasl_realm
	 * @param string $sasl_authc_id
	 * @param string $sasl_authz_id
	 * @param string $props
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-sasl-bind.php
	 * @since PHP 5, PHP 7
	 */
	function ldap_sasl_bind($link, string $binddn = NULL, string $password = NULL, string $sasl_mech = NULL, string $sasl_realm = NULL, string $sasl_authc_id = NULL, string $sasl_authz_id = NULL, string $props = NULL): bool {}

	/**
	 * Search LDAP tree
	 * <p>Performs the search for a specified filter on the directory with the scope of <b><code>LDAP_SCOPE_SUBTREE</code></b>. This is equivalent to searching the entire directory.</p><p>From 4.0.5 on it's also possible to do parallel searches. To do this you use an array of link identifiers, rather than a single identifier, as the first argument. If you don't want the same base DN and the same filter for all the searches, you can also use an array of base DNs and/or an array of filters. Those arrays must be of the same size as the link identifier array since the first entries of the arrays are used for one search, the second entries are used for another, and so on. When doing parallel searches an array of search result identifiers is returned, except in case of error, then the entry corresponding to the search will be <b><code>FALSE</code></b>. This is very much like the value normally returned, except that a result identifier is always returned when a search was made. There are some rare cases where the normal search returns <b><code>FALSE</code></b> while the parallel search returns an identifier.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param string $base_dn <p>The base DN for the directory.</p>
	 * @param string $filter <p>The search filter can be simple or advanced, using boolean operators in the format described in the LDAP documentation (see the Netscape Directory SDK or RFC4515 for full information on filters).</p>
	 * @param array $attributes <p>An array of the required attributes, e.g. <code>array("mail", "sn", "cn")</code>. Note that the "dn" is always returned irrespective of which attributes types are requested.</p> <p>Using this parameter is much more efficient than the default action (which is to return all attributes and their associated values). The use of this parameter should therefore be considered good practice.</p>
	 * @param int $attrsonly <p>Should be set to 1 if only attribute types are wanted. If set to 0 both attributes types and attribute values are fetched which is the default behaviour.</p>
	 * @param int $sizelimit <p>Enables you to limit the count of entries fetched. Setting this to 0 means no limit.</p> <p><b>Note</b>:</p><p>This parameter can NOT override server-side preset sizelimit. You can set it lower though.</p> <p>Some directory server hosts will be configured to return no more than a preset number of entries. If this occurs, the server will indicate that it has only returned a partial results set. This also occurs if you use this parameter to limit the count of fetched entries.</p>
	 * @param int $timelimit <p>Sets the number of seconds how long is spend on the search. Setting this to 0 means no limit.</p> <p><b>Note</b>:</p><p>This parameter can NOT override server-side preset timelimit. You can set it lower though.</p>
	 * @param int $deref <p>Specifies how aliases should be handled during the search. It can be one of the following:</p><ul> <li>  <b><code>LDAP_DEREF_NEVER</code></b> - (default) aliases are never dereferenced.  </li> <li>  <b><code>LDAP_DEREF_SEARCHING</code></b> - aliases should be dereferenced during the search but not when locating the base object of the search.  </li> <li>  <b><code>LDAP_DEREF_FINDING</code></b> - aliases should be dereferenced when locating the base object but not during the search.  </li> <li>  <b><code>LDAP_DEREF_ALWAYS</code></b> - aliases should be dereferenced always.  </li> </ul>
	 * @param array $serverctrls <p>Array of LDAP Controls to send with the request.</p>
	 * @return resource <p>Returns a search result identifier or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ldap-search.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_search($link_identifier, string $base_dn, string $filter, array $attributes  = 'array("*")', int $attrsonly = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, array $serverctrls = array()) {}

	/**
	 * Set the value of the given option
	 * <p>Sets the value of the specified option to be <code>newval</code>.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param int $option <p>The parameter <code>option</code> can be one of:</p>   Option Type Available since     <b><code>LDAP_OPT_DEREF</code></b> integer &nbsp;   <b><code>LDAP_OPT_SIZELIMIT</code></b> integer &nbsp;   <b><code>LDAP_OPT_TIMELIMIT</code></b> integer &nbsp;   <b><code>LDAP_OPT_NETWORK_TIMEOUT</code></b> integer PHP 5.3.0   <b><code>LDAP_OPT_PROTOCOL_VERSION</code></b> integer &nbsp;   <b><code>LDAP_OPT_ERROR_NUMBER</code></b> integer &nbsp;   <b><code>LDAP_OPT_REFERRALS</code></b> bool &nbsp;   <b><code>LDAP_OPT_RESTART</code></b> bool &nbsp;   <b><code>LDAP_OPT_HOST_NAME</code></b> string &nbsp;   <b><code>LDAP_OPT_ERROR_STRING</code></b> string &nbsp;   <b><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></b> string &nbsp;   <b><code>LDAP_OPT_MATCHED_DN</code></b> string &nbsp;   <b><code>LDAP_OPT_SERVER_CONTROLS</code></b> array &nbsp;   <b><code>LDAP_OPT_CLIENT_CONTROLS</code></b> array &nbsp;   <b><code>LDAP_OPT_X_KEEPALIVE_IDLE</code></b> int PHP 7.1.0   <b><code>LDAP_OPT_X_KEEPALIVE_PROBES</code></b> int PHP 7.1.0   <b><code>LDAP_OPT_X_KEEPALIVE_INTERVAL</code></b> int PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_CACERTDIR</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_CACERTFILE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_CERTFILE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_CIPHER_SUITE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_CRLCHECK</code></b> integer PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_CRLFILE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_DHFILE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_KEYFILE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_PROTOCOL_MIN</code></b> integer PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_RANDOM_FILE</code></b> string PHP 7.1.0   <b><code>LDAP_OPT_X_TLS_REQUIRE_CERT</code></b> integer PHP 7.0.5    <p><b><code>LDAP_OPT_SERVER_CONTROLS</code></b> and <b><code>LDAP_OPT_CLIENT_CONTROLS</code></b> require a list of controls, this means that the value must be an array of controls. A control consists of an <i>oid</i> identifying the control, an optional <i>value</i>, and an optional flag for <i>criticality</i>. In PHP a control is given by an array containing an element with the key <i>oid</i> and string value, and two optional elements. The optional elements are key <i>value</i> with string value and key <i>iscritical</i> with boolean value. <i>iscritical</i> defaults to <i><b><code>FALSE</code></b></i> if not supplied. See draft-ietf-ldapext-ldap-c-api-xx.txt for details. See also the second example below.</p>
	 * @param mixed $newval <p>The new value for the specified <code>option</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-set-option.php
	 * @see ldap_get_option()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ldap_set_option($link_identifier, int $option, $newval): bool {}

	/**
	 * Set a callback function to do re-binds on referral chasing
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @param callable $callback
	 * @return bool
	 * @link https://php.net/manual/en/function.ldap-set-rebind-proc.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ldap_set_rebind_proc($link, callable $callback): bool {}

	/**
	 * Sort LDAP result entries on the client side
	 * <p>Sort the result of a LDAP search, returned by <code>ldap_search()</code>.</p><p>As this function sorts the returned values on the client side it is possible that you might not get the expected results in case you reach the <code>sizelimit</code> either of the server or defined within <code>ldap_search()</code>.</p><p>This feature has been <i>DEPRECATED</i> as of PHP 7.0.0. Relying on this feature is highly discouraged.</p>
	 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @param resource $result <p>An search result identifier, returned by <code>ldap_search()</code>.</p>
	 * @param string $sortfilter <p>The attribute to use as a key in the sort.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.ldap-sort.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ldap_sort($link, $result, string $sortfilter): bool {}

	/**
	 * Start TLS
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/en/function.ldap-start-tls.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ldap_start_tls($link): bool {}

	/**
	 * Translate t61 characters to 8859 characters
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $value
	 * @return string
	 * @link https://php.net/manual/en/function.ldap-t61-to-8859.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ldap_t61_to_8859(string $value): string {}

	/**
	 * Unbind from LDAP directory
	 * <p>Unbinds from the LDAP directory.</p>
	 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ldap-unbind.php
	 * @see ldap_bind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ldap_unbind($link_identifier): bool {}

	/**
	 * SSL Authentication Mode - No authentication required. (Only for Oracle LDAP)
	 */
	define('GSLC_SSL_NO_AUTH', null);

	/**
	 * SSL Authentication Mode - Only server authentication required. (Only for Oracle LDAP)
	 */
	define('GSLC_SSL_ONEWAY_AUTH', null);

	/**
	 * SSL Authentication Mode - Both server and client authentication required. (Only for Oracle LDAP)
	 */
	define('GSLC_SSL_TWOWAY_AUTH', null);

	/**
	 * Control Constant - Assertion (RFC 4528). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_ASSERT', null);

	/**
	 * Control Constant - Authorization Identity Request (RFC 3829). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_AUTHZID_REQUEST', null);

	/**
	 * Control Constant - Authorization Identity Response (RFC 3829). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_AUTHZID_RESPONSE', null);

	/**
	 * Control Constant - Don't Use Copy (RFC 6171). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_DONTUSECOPY', null);

	/**
	 * Control Constant - Manage DSA IT (RFC 3296). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_MANAGEDSAIT', null);

	/**
	 * Control Constant - Paged results (RFC 2696). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_PAGEDRESULTS', null);

	/**
	 * Control Constant - Password Policy Request. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_PASSWORDPOLICYREQUEST', null);

	/**
	 * Control Constant - Password Policy Response. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_PASSWORDPOLICYRESPONSE', null);

	/**
	 * Control Constant - Post read (RFC 4527). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_POST_READ', null);

	/**
	 * Control Constant - Pre read (RFC 4527). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_PRE_READ', null);

	/**
	 * Control Constant - Proxied Authorization (RFC 4370). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_PROXY_AUTHZ', null);

	/**
	 * Control Constant - Sort request (RFC 2891). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_SORTREQUEST', null);

	/**
	 * Control Constant - Sort response (RFC 2891). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_SORTRESPONSE', null);

	/**
	 * Control Constant - Subentries (RFC 3672). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_SUBENTRIES', null);

	/**
	 * Control Constant - Content Synchronization Operation (RFC 4533). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_SYNC', null);

	/**
	 * Control Constant - Content Synchronization Operation Done (RFC 4533). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_SYNC_DONE', null);

	/**
	 * Control Constant - Content Synchronization Operation State (RFC 4533). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_SYNC_STATE', null);

	/**
	 * Control Constant - Filter returned values (RFC 3876). Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_VALUESRETURNFILTER', null);

	/**
	 * Control Constant - Virtual List View Request. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_VLVREQUEST', null);

	/**
	 * Control Constant - Virtual List View Response. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_VLVRESPONSE', null);

	/**
	 * Control Constant - Active Directory Domain Scope. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_X_DOMAIN_SCOPE', null);

	/**
	 * Control Constant - Active Directory Extended DN. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_X_EXTENDED_DN', null);

	/**
	 * Control Constant - Active Directory Incremental Values. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_X_INCREMENTAL_VALUES', null);

	/**
	 * Control Constant - Active Directory Permissive Modify. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_X_PERMISSIVE_MODIFY', null);

	/**
	 * Control Constant - Active Directory Search Options. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_X_SEARCH_OPTIONS', null);

	/**
	 * Control Constant - Active Directory Tree Delete. Available as of PHP 7.3.0.
	 */
	define('LDAP_CONTROL_X_TREE_DELETE', null);

	/**
	 * Alias dereferencing rule - Always.
	 */
	define('LDAP_DEREF_ALWAYS', null);

	/**
	 * Alias dereferencing rule - Finding.
	 */
	define('LDAP_DEREF_FINDING', null);

	/**
	 * Alias dereferencing rule - Never.
	 */
	define('LDAP_DEREF_NEVER', null);

	/**
	 * Alias dereferencing rule - Searching.
	 */
	define('LDAP_DEREF_SEARCHING', null);

	/**
	 * Extended Operation constant - Modify password (RFC 3062).
	 */
	define('LDAP_EXOP_MODIFY_PASSWD', null);

	/**
	 * Extended Operation Constant - Refresh (RFC 2589).
	 */
	define('LDAP_EXOP_REFRESH', null);

	/**
	 * Extended Operation constant - Start TLS (RFC 4511).
	 */
	define('LDAP_EXOP_START_TLS', null);

	/**
	 * Extended Operation Constant - Turn (RFC 4531).
	 */
	define('LDAP_EXOP_TURN', null);

	/**
	 * Extended Operation Constant - WHOAMI (RFC 4532).
	 */
	define('LDAP_EXOP_WHO_AM_I', null);

	/**
	 * Specifies a default list of client controls to be processed with each request.
	 */
	define('LDAP_OPT_CLIENT_CONTROLS', null);

	/**
	 * Specifies a bitwise level for debug traces.
	 */
	define('LDAP_OPT_DEBUG_LEVEL', null);

	/**
	 * Specifies alternative rules for following aliases at the server.
	 */
	define('LDAP_OPT_DEREF', null);

	/**
	 * Gets the latest session error message.
	 */
	define('LDAP_OPT_DIAGNOSTIC_MESSAGE', null);

	/**
	 * Latest session error number.
	 */
	define('LDAP_OPT_ERROR_NUMBER', null);

	/**
	 * Alias of <b><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></b>.
	 */
	define('LDAP_OPT_ERROR_STRING', null);

	/**
	 * Sets/gets a space-separated of hosts when trying to connect.
	 */
	define('LDAP_OPT_HOST_NAME', null);

	/**
	 * Sets/gets the matched DN associated with the connection.
	 */
	define('LDAP_OPT_MATCHED_DN', null);

	/**
	 * Option for <code>ldap_set_option()</code> to allow setting network timeout. (Available as of PHP 5.3.0)
	 */
	define('LDAP_OPT_NETWORK_TIMEOUT', null);

	/**
	 * Specifies the LDAP protocol to be used (V2 or V3).
	 */
	define('LDAP_OPT_PROTOCOL_VERSION', null);

	/**
	 * Specifies whether to automatically follow referrals returned by the LDAP server.
	 */
	define('LDAP_OPT_REFERRALS', null);

	/**
	 * Determines whether or not the connection should be implicitly restarted.
	 */
	define('LDAP_OPT_RESTART', null);

	/**
	 * Specifies a default list of server controls to be sent with each request.
	 */
	define('LDAP_OPT_SERVER_CONTROLS', null);

	/**
	 * <p>Specifies the maximum number of entries that can be returned on a search operation.</p> <p><b>Note</b>:  The actual size limit for operations is also bounded by the server's configured maximum number of return entries. The lesser of these two settings is the actual size limit. </p>
	 */
	define('LDAP_OPT_SIZELIMIT', null);

	/**
	 * Specifies the number of seconds to wait for search results.  <p><b>Note</b>:  The actual time limit for operations is also bounded by the server's configured maximum time. The lesser of these two settings is the actual time limit. </p>
	 */
	define('LDAP_OPT_TIMELIMIT', null);

	/**
	 * Specifies the number of seconds a connection needs to remain idle before TCP starts sending keepalive probes.
	 */
	define('LDAP_OPT_X_KEEPALIVE_IDLE', null);

	/**
	 * Specifies the interval in seconds between individual keepalive probes.
	 */
	define('LDAP_OPT_X_KEEPALIVE_INTERVAL', null);

	/**
	 * Specifies the maximum number of keepalive probes TCP should send before dropping the connection.
	 */
	define('LDAP_OPT_X_KEEPALIVE_PROBES', null);

	/**
	 * Specifies the path of the directory containing CA certificates.
	 */
	define('LDAP_OPT_X_TLS_CACERTDIR', null);

	/**
	 * Specifies the full-path of the CA certificate file.
	 */
	define('LDAP_OPT_X_TLS_CACERTFILE', null);

	/**
	 * Specifies the full-path of the certificate file.
	 */
	define('LDAP_OPT_X_TLS_CERTFILE', null);

	/**
	 * Specifies the allowed cipher suite.
	 */
	define('LDAP_OPT_X_TLS_CIPHER_SUITE', null);

	/**
	 * Specifies the CRL evaluation strategy. This must be one of: <b><code>LDAP_OPT_X_TLS_CRL_NONE</code></b>,<b><code>LDAP_OPT_X_TLS_CRL_PEER</code></b>, <b><code>LDAP_OPT_X_TLS_CRL_ALL</code></b>.  <p><b>Note</b>:  This option is only valid for OpenSSL. </p>
	 */
	define('LDAP_OPT_X_TLS_CRLCHECK', null);

	/**
	 * Specifies the full-path of the CRL file.  <p><b>Note</b>:  This option is only valid for GnuTLS. </p>
	 */
	define('LDAP_OPT_X_TLS_CRLFILE', null);

	/**
	 * Specifies the full-path of the file containing the parameters for Diffie-Hellman ephemeral key exchange.  <p><b>Note</b>:  This option is ignored by GnuTLS and Mozilla NSS. </p>
	 */
	define('LDAP_OPT_X_TLS_DHFILE', null);

	/**
	 * Specifies the full-path of the certificate key file.
	 */
	define('LDAP_OPT_X_TLS_KEYFILE', null);

	/**
	 * Specifies the minimum protocol version. This can be one of: <b><code>LDAP_OPT_X_TLS_PROTOCOL_SSL2</code></b>,<b><code>LDAP_OPT_X_TLS_PROTOCOL_SSL3</code></b>, <b><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_0</code></b>, <b><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_1</code></b>, <b><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_2</code></b>
	 */
	define('LDAP_OPT_X_TLS_PROTOCOL_MIN', null);

	/**
	 * Sets/gets the random file when one of the system default ones are not available.
	 */
	define('LDAP_OPT_X_TLS_RANDOM_FILE', null);

	/**
	 * Specifies the certificate checking checking strategy. This must be one of: <b><code>LDAP_OPT_X_TLS_NEVER</code></b>,<b><code>LDAP_OPT_X_TLS_HARD</code></b>, <b><code>LDAP_OPT_X_TLS_DEMAND</code></b>, <b><code>LDAP_OPT_X_TLS_ALLOW</code></b>, <b><code>LDAP_OPT_X_TLS_TRY</code></b>. (Available as of PHP 7.0.0)
	 */
	define('LDAP_OPT_X_TLS_REQUIRE_CERT', null);

}
