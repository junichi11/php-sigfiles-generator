<?php



namespace {

	/**
	 * Checks if variable of specified type exists
	 * @param int $input_type <p>One of <b><code>INPUT_GET</code></b>, <b><code>INPUT_POST</code></b>, <b><code>INPUT_COOKIE</code></b>, <b><code>INPUT_SERVER</code></b>, or <b><code>INPUT_ENV</code></b>.</p>
	 * @param string $var_name <p>Name of a variable to check.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.filter-has-var.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_has_var(int $input_type, string $var_name): bool {}

	/**
	 * Returns the filter ID belonging to a named filter
	 * @param string $name <p>Name of a filter to get.</p>
	 * @return int|false <p>ID of a filter on success or <b><code>FALSE</code></b> if filter doesn't exist.</p>
	 * @link https://php.net/manual/en/function.filter-id.php
	 * @see filter_list()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_id(string $name): int|false {}

	/**
	 * Gets a specific external variable by name and optionally filters it
	 * @param int $type <p>One of <b><code>INPUT_GET</code></b>, <b><code>INPUT_POST</code></b>, <b><code>INPUT_COOKIE</code></b>, <b><code>INPUT_SERVER</code></b>, or <b><code>INPUT_ENV</code></b>.</p>
	 * @param string $var_name <p>Name of a variable to get.</p>
	 * @param int $filter <p>The ID of the filter to apply. The Types of filters manual page lists the available filters.</p> <p>If omitted, <b><code>FILTER_DEFAULT</code></b> will be used, which is equivalent to <b><code>FILTER_UNSAFE_RAW</code></b>. This will result in no filtering taking place by default.</p>
	 * @param array|int $options <p>Associative array of options or bitwise disjunction of flags. If filter accepts options, flags can be provided in "flags" field of array.</p>
	 * @return mixed <p>Value of the requested variable on success, <b><code>FALSE</code></b> if the filter fails, or <b><code>NULL</code></b> if the <code>var_name</code> variable is not set. If the flag <b><code>FILTER_NULL_ON_FAILURE</code></b> is used, it returns <b><code>FALSE</code></b> if the variable is not set and <b><code>NULL</code></b> if the filter fails.</p>
	 * @link https://php.net/manual/en/function.filter-input.php
	 * @see filter_var(), filter_input_array(), filter_var_array()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_input(int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

	/**
	 * Gets external variables and optionally filters them
	 * <p>This function is useful for retrieving many values without repetitively calling <code>filter_input()</code>.</p>
	 * @param int $type <p>One of <b><code>INPUT_GET</code></b>, <b><code>INPUT_POST</code></b>, <b><code>INPUT_COOKIE</code></b>, <b><code>INPUT_SERVER</code></b>, or <b><code>INPUT_ENV</code></b>.</p>
	 * @param array|int $options <p>An array defining the arguments. A valid key is a <code>string</code> containing a variable name and a valid value is either a filter type, or an <code>array</code> optionally specifying the filter, flags and options. If the value is an array, valid keys are <code>filter</code> which specifies the filter type, <code>flags</code> which specifies any flags that apply to the filter, and <code>options</code> which specifies any options that apply to the filter. See the example below for a better understanding.</p> <p>This parameter can be also an integer holding a filter constant. Then all values in the input array are filtered by this filter.</p>
	 * @param bool $add_empty <p>Add missing keys as <b><code>NULL</code></b> to the return value.</p>
	 * @return array|false|null <p>An array containing the values of the requested variables on success. If the input array designated by <code>type</code> is not populated, the function returns <b><code>NULL</code></b> if the <b><code>FILTER_NULL_ON_FAILURE</code></b> flag is not given, or <b><code>FALSE</code></b> otherwise. For other failures, <b><code>FALSE</code></b> is returned.</p><p>An array value will be <b><code>FALSE</code></b> if the filter fails, or <b><code>NULL</code></b> if the variable is not set. Or if the flag <b><code>FILTER_NULL_ON_FAILURE</code></b> is used, it returns <b><code>FALSE</code></b> if the variable is not set and <b><code>NULL</code></b> if the filter fails. If the <code>add_empty</code> parameter is <b><code>FALSE</code></b>, no array element will be added for unset variables.</p>
	 * @link https://php.net/manual/en/function.filter-input-array.php
	 * @see filter_input(), filter_var_array()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_input_array(int $type, array|int $options = FILTER_DEFAULT, bool $add_empty = TRUE): array|false|null {}

	/**
	 * Returns a list of all supported filters
	 * @return array <p>Returns an array of names of all supported filters, empty array if there are no such filters. Indexes of this array are not filter IDs, they can be obtained with <code>filter_id()</code> from a name instead.</p>
	 * @link https://php.net/manual/en/function.filter-list.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_list(): array {}

	/**
	 * Filters a variable with a specified filter
	 * @param mixed $value <p>Value to filter. Note that scalar values are converted to string internally before they are filtered.</p>
	 * @param int $filter <p>The ID of the filter to apply. The Types of filters manual page lists the available filters.</p> <p>If omitted, <b><code>FILTER_DEFAULT</code></b> will be used, which is equivalent to <b><code>FILTER_UNSAFE_RAW</code></b>. This will result in no filtering taking place by default.</p>
	 * @param array|int $options <p>Associative array of options or bitwise disjunction of flags. If filter accepts options, flags can be provided in "flags" field of array. For the "callback" filter, <code>callable</code> type should be passed. The callback must accept one argument, the value to be filtered, and return the value after filtering/sanitizing it.</p> <p></p> <code> &lt;&#63;php<br>//&nbsp;for&nbsp;filters&nbsp;that&nbsp;accept&nbsp;options,&nbsp;use&nbsp;this&nbsp;format<br>$options&nbsp;=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;'options'&nbsp;=&gt;&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'default'&nbsp;=&gt;&nbsp;3,&nbsp;//&nbsp;value&nbsp;to&nbsp;return&nbsp;if&nbsp;the&nbsp;filter&nbsp;fails<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;other&nbsp;options&nbsp;here<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'min_range'&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;),<br>&nbsp;&nbsp;&nbsp;&nbsp;'flags'&nbsp;=&gt;&nbsp;FILTER_FLAG_ALLOW_OCTAL,<br>);<br>$var&nbsp;=&nbsp;filter_var('0755',&nbsp;FILTER_VALIDATE_INT,&nbsp;$options);<br><br>//&nbsp;for&nbsp;filters&nbsp;that&nbsp;only&nbsp;accept&nbsp;flags,&nbsp;you&nbsp;can&nbsp;pass&nbsp;them&nbsp;directly<br>$var&nbsp;=&nbsp;filter_var('oops',&nbsp;FILTER_VALIDATE_BOOLEAN,&nbsp;FILTER_NULL_ON_FAILURE);<br><br>//&nbsp;for&nbsp;filters&nbsp;that&nbsp;only&nbsp;accept&nbsp;flags,&nbsp;you&nbsp;can&nbsp;also&nbsp;pass&nbsp;as&nbsp;an&nbsp;array<br>$var&nbsp;=&nbsp;filter_var('oops',&nbsp;FILTER_VALIDATE_BOOLEAN,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array('flags'&nbsp;=&gt;&nbsp;FILTER_NULL_ON_FAILURE));<br><br>//&nbsp;callback&nbsp;validate&nbsp;filter<br>function&nbsp;foo($value)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Expected&nbsp;format:&nbsp;Surname,&nbsp;GivenNames<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(strpos($value,&nbsp;",&nbsp;")&nbsp;===&nbsp;false)&nbsp;return&nbsp;false;<br>&nbsp;&nbsp;&nbsp;&nbsp;list($surname,&nbsp;$givennames)&nbsp;=&nbsp;explode(",&nbsp;",&nbsp;$value,&nbsp;2);<br>&nbsp;&nbsp;&nbsp;&nbsp;$empty&nbsp;=&nbsp;(empty($surname)&nbsp;||&nbsp;empty($givennames));<br>&nbsp;&nbsp;&nbsp;&nbsp;$notstrings&nbsp;=&nbsp;(!is_string($surname)&nbsp;||&nbsp;!is_string($givennames));<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;($empty&nbsp;||&nbsp;$notstrings)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;false;<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$value;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br>$var&nbsp;=&nbsp;filter_var('Doe,&nbsp;Jane&nbsp;Sue',&nbsp;FILTER_CALLBACK,&nbsp;array('options'&nbsp;=&gt;&nbsp;'foo'));<br>&#63;&gt;  </code>
	 * @return mixed <p>Returns the filtered data, or <b><code>FALSE</code></b> if the filter fails.</p>
	 * @link https://php.net/manual/en/function.filter-var.php
	 * @see filter_var_array(), filter_input(), filter_input_array()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

	/**
	 * Gets multiple variables and optionally filters them
	 * <p>This function is useful for retrieving many values without repetitively calling <code>filter_var()</code>.</p>
	 * @param array $array <p>An array with string keys containing the data to filter.</p>
	 * @param array|int $options <p>An array defining the arguments. A valid key is a <code>string</code> containing a variable name and a valid value is either a filter type, or an <code>array</code> optionally specifying the filter, flags and options. If the value is an array, valid keys are <code>filter</code> which specifies the filter type, <code>flags</code> which specifies any flags that apply to the filter, and <code>options</code> which specifies any options that apply to the filter. See the example below for a better understanding.</p> <p>This parameter can be also an integer holding a filter constant. Then all values in the input array are filtered by this filter.</p>
	 * @param bool $add_empty <p>Add missing keys as <b><code>NULL</code></b> to the return value.</p>
	 * @return array|false|null <p>An array containing the values of the requested variables on success, or <b><code>FALSE</code></b> on failure. An array value will be <b><code>FALSE</code></b> if the filter fails, or <b><code>NULL</code></b> if the variable is not set.</p>
	 * @link https://php.net/manual/en/function.filter-var-array.php
	 * @see filter_input_array(), filter_var(), filter_input()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function filter_var_array(array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = TRUE): array|false|null {}

	/**
	 * ID of "callback" filter.
	 */
	define('FILTER_CALLBACK', 1024);

	/**
	 * ID of default ("unsafe_raw") filter. This is equivalent to <b><code>FILTER_UNSAFE_RAW</code></b>.
	 */
	define('FILTER_DEFAULT', 516);

	/**
	 * Allow fractional part in "number_float" filter.
	 */
	define('FILTER_FLAG_ALLOW_FRACTION', 4096);

	/**
	 * Allow hex notation (<code>0x[0-9a-fA-F]+</code>) in "int" filter.
	 */
	define('FILTER_FLAG_ALLOW_HEX', 2);

	/**
	 * Allow octal notation (<code>0[0-7]+</code>) in "int" filter.
	 */
	define('FILTER_FLAG_ALLOW_OCTAL', 1);

	/**
	 * Allow scientific notation (<code>e</code>, <code>E</code>) in "number_float" filter.
	 */
	define('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);

	/**
	 * Allow thousand separator (<code>,</code>) in "number_float" filter.
	 */
	define('FILTER_FLAG_ALLOW_THOUSAND', 8192);

	/**
	 * Accepts Unicode characters in the local part in "validate_email" filter. (Available as of PHP 7.1.0)
	 */
	define('FILTER_FLAG_EMAIL_UNICODE', 1048576);

	/**
	 * (No use for now.)
	 */
	define('FILTER_FLAG_EMPTY_STRING_NULL', 256);

	/**
	 * Encode <code>&amp;</code>.
	 */
	define('FILTER_FLAG_ENCODE_AMP', 64);

	/**
	 * Encode characters with ASCII value greater than 127.
	 */
	define('FILTER_FLAG_ENCODE_HIGH', 32);

	/**
	 * Encode characters with ASCII value less than 32.
	 */
	define('FILTER_FLAG_ENCODE_LOW', 16);

	/**
	 * Require host in "validate_url" filter. (Deprecated per PHP 7.3 as it is implied in the filter already.)
	 */
	define('FILTER_FLAG_HOST_REQUIRED', 131072);

	/**
	 * Require hostnames to start with an alphanumeric character and contain only alphanumerics or hyphens. (Available as of PHP 7.0.0)
	 */
	define('FILTER_FLAG_HOSTNAME', 1048576);

	/**
	 * Allow only IPv4 address in "validate_ip" filter.
	 */
	define('FILTER_FLAG_IPV4', 1048576);

	/**
	 * Allow only IPv6 address in "validate_ip" filter.
	 */
	define('FILTER_FLAG_IPV6', 2097152);

	/**
	 * Don't encode <code>'</code> and <code>"</code>.
	 */
	define('FILTER_FLAG_NO_ENCODE_QUOTES', 128);

	/**
	 * Deny private addresses in "validate_ip" filter.
	 */
	define('FILTER_FLAG_NO_PRIV_RANGE', 8388608);

	/**
	 * Deny reserved addresses in "validate_ip" filter.
	 */
	define('FILTER_FLAG_NO_RES_RANGE', 4194304);

	/**
	 * No flags.
	 */
	define('FILTER_FLAG_NONE', 0);

	/**
	 * Require path in "validate_url" filter.
	 */
	define('FILTER_FLAG_PATH_REQUIRED', 262144);

	/**
	 * Require query in "validate_url" filter.
	 */
	define('FILTER_FLAG_QUERY_REQUIRED', 524288);

	/**
	 * Require scheme in "validate_url" filter. (Deprecated per PHP 7.3 as it is implied in the filter already.)
	 */
	define('FILTER_FLAG_SCHEME_REQUIRED', 65536);

	/**
	 * Strips backtick characters. (Available as of PHP 5.3.2)
	 */
	define('FILTER_FLAG_STRIP_BACKTICK', 512);

	/**
	 * Strip characters with ASCII value greater than 127.
	 */
	define('FILTER_FLAG_STRIP_HIGH', 8);

	/**
	 * Strip characters with ASCII value less than 32.
	 */
	define('FILTER_FLAG_STRIP_LOW', 4);

	/**
	 * Always returns an array.
	 */
	define('FILTER_FORCE_ARRAY', 67108864);

	/**
	 * Use NULL instead of FALSE on failure.
	 */
	define('FILTER_NULL_ON_FAILURE', 134217728);

	/**
	 * Require an array as input.
	 */
	define('FILTER_REQUIRE_ARRAY', 16777216);

	/**
	 * Flag used to require scalar as input
	 */
	define('FILTER_REQUIRE_SCALAR', 33554432);

	/**
	 * ID of "add_slashes" filter. (Available as of PHP 7.3.0)
	 */
	define('FILTER_SANITIZE_ADD_SLASHES', 523);

	/**
	 * ID of "email" filter.
	 */
	define('FILTER_SANITIZE_EMAIL', 517);

	/**
	 * ID of "encoded" filter.
	 */
	define('FILTER_SANITIZE_ENCODED', 514);

	/**
	 * ID of "magic_quotes" filter. (Deprecated per PHP 7.3.0, use FILTER_SANITIZE_ADD_SLASHES instead.)
	 */
	define('FILTER_SANITIZE_MAGIC_QUOTES', 521);

	/**
	 * ID of "number_float" filter.
	 */
	define('FILTER_SANITIZE_NUMBER_FLOAT', 520);

	/**
	 * ID of "number_int" filter.
	 */
	define('FILTER_SANITIZE_NUMBER_INT', 519);

	/**
	 * ID of "special_chars" filter.
	 */
	define('FILTER_SANITIZE_SPECIAL_CHARS', 515);

	/**
	 * ID of "string" filter.
	 */
	define('FILTER_SANITIZE_STRING', 513);

	/**
	 * ID of "stripped" filter.
	 */
	define('FILTER_SANITIZE_STRIPPED', 513);

	/**
	 * ID of "url" filter.
	 */
	define('FILTER_SANITIZE_URL', 518);

	/**
	 * ID of "unsafe_raw" filter.
	 */
	define('FILTER_UNSAFE_RAW', 516);

	/**
	 * ID of "boolean" filter.
	 */
	define('FILTER_VALIDATE_BOOLEAN', 258);

	/**
	 * ID of "validate_domain" filter. (Available as of PHP 7.0.0)
	 */
	define('FILTER_VALIDATE_DOMAIN', 277);

	/**
	 * ID of "validate_email" filter.
	 */
	define('FILTER_VALIDATE_EMAIL', 274);

	/**
	 * ID of "float" filter.
	 */
	define('FILTER_VALIDATE_FLOAT', 259);

	/**
	 * ID of "int" filter.
	 */
	define('FILTER_VALIDATE_INT', 257);

	/**
	 * ID of "validate_ip" filter.
	 */
	define('FILTER_VALIDATE_IP', 275);

	/**
	 * ID of "validate_mac_address" filter. (Available as of PHP 5.5.0)
	 */
	define('FILTER_VALIDATE_MAC', 276);

	/**
	 * ID of "validate_regexp" filter.
	 */
	define('FILTER_VALIDATE_REGEXP', 272);

	/**
	 * ID of "validate_url" filter.
	 */
	define('FILTER_VALIDATE_URL', 273);

	/**
	 * COOKIE variables.
	 */
	define('INPUT_COOKIE', 2);

	/**
	 * ENV variables.
	 */
	define('INPUT_ENV', 4);

	/**
	 * GET variables.
	 */
	define('INPUT_GET', 1);

	/**
	 * POST variables.
	 */
	define('INPUT_POST', 0);

	/**
	 * REQUEST variables. (not implemented yet)
	 */
	define('INPUT_REQUEST', 99);

	/**
	 * SERVER variables.
	 */
	define('INPUT_SERVER', 5);

	/**
	 * SESSION variables. (not implemented yet)
	 */
	define('INPUT_SESSION', 6);

}
