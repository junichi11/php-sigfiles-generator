<?php



namespace {

	/**
	 * Decodes data encoded with MIME base64
	 * <p>Decodes a base64 encoded <code>data</code>.</p>
	 * @param string $data <p>The encoded data.</p>
	 * @param bool $strict <p>If the <code>strict</code> parameter is set to <b><code>TRUE</code></b> then the <b>base64_decode()</b> function will return <b><code>FALSE</code></b> if the input contains character from outside the base64 alphabet. Otherwise invalid characters will be silently discarded.</p>
	 * @return string|false <p>Returns the decoded data or <b><code>FALSE</code></b> on failure. The returned data may be binary.</p>
	 * @link http://php.net/manual/en/function.base64-decode.php
	 * @see base64_encode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function base64_decode(string $data, bool $strict = FALSE) {}

	/**
	 * Encodes data with MIME base64
	 * <p>Encodes the given <code>data</code> with base64.</p><p>This encoding is designed to make binary data survive transport through transport layers that are not 8-bit clean, such as mail bodies.</p><p>Base64-encoded data takes about 33% more space than the original data.</p>
	 * @param string $data <p>The data to encode.</p>
	 * @return string <p>The encoded data, as a string.</p>
	 * @link http://php.net/manual/en/function.base64-encode.php
	 * @see base64_decode(), chunk_split(), convert_uuencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function base64_encode(string $data): string {}

	/**
	 * Fetches all the headers sent by the server in response to an HTTP request
	 * <p><b>get_headers()</b> returns an array with the headers sent by the server in response to a HTTP request.</p>
	 * @param string $url <p>The target URL.</p>
	 * @param int $format <p>If the optional <code>format</code> parameter is set to non-zero, <b>get_headers()</b> parses the response and sets the array's keys.</p>
	 * @param resource $context <p>A valid context resource created with <code>stream_context_create()</code>.</p>
	 * @return array <p>Returns an indexed or associative array with the headers, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.get-headers.php
	 * @see apache_request_headers()
	 * @since PHP 5, PHP 7
	 */
	function get_headers(string $url, int $format = 0, $context = NULL): array {}

	/**
	 * Extracts all meta tag content attributes from a file and returns an array
	 * <p>Opens <code>filename</code> and parses it line by line for &lt;meta&gt; tags in the file. The parsing stops at <code>&lt;/head&gt;</code>.</p>
	 * @param string $filename <p>The path to the HTML file, as a string. This can be a local file or an URL.</p> <p></p> <p><b>Example #1 What <b>get_meta_tags()</b> parses</b></p>  <pre>&lt;meta name="author" content="name"&gt; &lt;meta name="keywords" content="php documentation"&gt; &lt;meta name="DESCRIPTION" content="a php manual"&gt; &lt;meta name="geo.position" content="49.33;-86.59"&gt; &lt;/head&gt; &lt;!-- parsing stops here --&gt;</pre>    (pay attention to line endings - PHP uses a native function to parse the input, so a Mac file won't work on Unix).
	 * @param bool $use_include_path <p>Setting <code>use_include_path</code> to <b><code>TRUE</code></b> will result in PHP trying to open the file along the standard include path as per the include_path directive. This is used for local files, not URLs.</p>
	 * @return array <p>Returns an array with all the parsed meta tags.</p><p>The value of the name property becomes the key, the value of the content property becomes the value of the returned array, so you can easily use standard array functions to traverse it or access single values. Special characters in the value of the name property are substituted with '_', the rest is converted to lower case. If two meta tags have the same name, only the last one is returned.</p>
	 * @link http://php.net/manual/en/function.get-meta-tags.php
	 * @see htmlentities(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_meta_tags(string $filename, bool $use_include_path = FALSE): array {}

	/**
	 * Generate URL-encoded query string
	 * <p>Generates a URL-encoded query string from the associative (or indexed) array provided.</p>
	 * @param mixed $query_data <p>May be an array or object containing properties.</p> <p>If <code>query_data</code> is an array, it may be a simple one-dimensional structure, or an array of arrays (which in turn may contain other arrays).</p> <p>If <code>query_data</code> is an object, then only public properties will be incorporated into the result.</p>
	 * @param string $numeric_prefix <p>If numeric indices are used in the base array and this parameter is provided, it will be prepended to the numeric index for elements in the base array only.</p> <p>This is meant to allow for legal variable names when the data is decoded by PHP or another CGI application later on.</p>
	 * @param string $arg_separator <p>arg_separator.output is used to separate arguments but may be overridden by specifying this parameter.</p>
	 * @param int $enc_type <p>By default, <b><code>PHP_QUERY_RFC1738</code></b>.</p> <p>If <code>enc_type</code> is <b><code>PHP_QUERY_RFC1738</code></b>, then encoding is performed per RFC 1738 and the <code>application/x-www-form-urlencoded</code> media type, which implies that spaces are encoded as plus (<code>+</code>) signs.</p> <p>If <code>enc_type</code> is <b><code>PHP_QUERY_RFC3986</code></b>, then encoding is performed according to RFC 3986, and spaces will be percent encoded (<code>%20</code>).</p>
	 * @return string <p>Returns a URL-encoded string.</p>
	 * @link http://php.net/manual/en/function.http-build-query.php
	 * @see parse_str(), parse_url(), urlencode(), array_walk()
	 * @since PHP 5, PHP 7
	 */
	function http_build_query($query_data, string $numeric_prefix = NULL, string $arg_separator = NULL, int $enc_type = PHP_QUERY_RFC1738): string {}

	/**
	 * Parse a URL and return its components
	 * <p>This function parses a URL and returns an associative array containing any of the various components of the URL that are present. The values of the array elements are <i>not</i> URL decoded.</p><p>This function is <i>not</i> meant to validate the given URL, it only breaks it up into the above listed parts. Partial URLs are also accepted, <b>parse_url()</b> tries its best to parse them correctly.</p>
	 * @param string $url <p>The URL to parse. Invalid characters are replaced by <code>_</code>.</p>
	 * @param int $component
	 * @return mixed <p>On seriously malformed URLs, <b>parse_url()</b> may return <b><code>FALSE</code></b>.</p><p>If the <code>component</code> parameter is omitted, an associative <code>array</code> is returned. At least one element will be present within the array. Potential keys within this array are:</p><ul> <li>  scheme - e.g. http  </li> <li>  host  </li> <li>  port  </li> <li>  user  </li> <li>  pass  </li> <li>  path  </li> <li>  query - after the question mark <code>&#63;</code>  </li> <li>  fragment - after the hashmark <code>#</code>  </li> </ul><p>If the <code>component</code> parameter is specified, <b>parse_url()</b> returns a <code>string</code> (or an <code>int</code>, in the case of <b><code>PHP_URL_PORT</code></b>) instead of an <code>array</code>. If the requested component doesn't exist within the given URL, <b><code>NULL</code></b> will be returned.</p>
	 * @link http://php.net/manual/en/function.parse-url.php
	 * @see pathinfo(), parse_str(), http_build_query(), dirname(), basename()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function parse_url(string $url, int $component = -1) {}

	/**
	 * Decode URL-encoded strings
	 * <p>Returns a string in which the sequences with percent (<code>%</code>) signs followed by two hex digits have been replaced with literal characters.</p>
	 * @param string $str <p>The URL to be decoded.</p>
	 * @return string <p>Returns the decoded URL, as a string.</p>
	 * @link http://php.net/manual/en/function.rawurldecode.php
	 * @see rawurlencode(), urldecode(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rawurldecode(string $str): string {}

	/**
	 * URL-encode according to RFC 3986
	 * <p>Encodes the given string according to RFC 3986.</p>
	 * @param string $str <p>The URL to be encoded.</p>
	 * @return string <p>Returns a string in which all non-alphanumeric characters except <code>-_.~</code> have been replaced with a percent (<code>%</code>) sign followed by two hex digits. This is the encoding described in RFC 3986 for protecting literal characters from being interpreted as special URL delimiters, and for protecting URLs from being mangled by transmission media with character conversions (like some email systems).</p><p><b>Note</b>:</p><p>Prior to PHP 5.3.0, rawurlencode encoded tildes (<code>~</code>) as per RFC 1738.</p>
	 * @link http://php.net/manual/en/function.rawurlencode.php
	 * @see rawurldecode(), urldecode(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rawurlencode(string $str): string {}

	/**
	 * Decodes URL-encoded string
	 * <p>Decodes any <code>%##</code> encoding in the given string. Plus symbols ('<code>+</code>') are decoded to a space character.</p>
	 * @param string $str <p>The string to be decoded.</p>
	 * @return string <p>Returns the decoded string.</p>
	 * @link http://php.net/manual/en/function.urldecode.php
	 * @see urlencode(), rawurlencode(), rawurldecode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function urldecode(string $str): string {}

	/**
	 * URL-encodes string
	 * <p>This function is convenient when encoding a string to be used in a query part of a URL, as a convenient way to pass variables to the next page.</p>
	 * @param string $str <p>The string to be encoded.</p>
	 * @return string <p>Returns a string in which all non-alphanumeric characters except <code>-_.</code> have been replaced with a percent (<code>%</code>) sign followed by two hex digits and spaces encoded as plus (<code>+</code>) signs. It is encoded the same way that the posted data from a WWW form is encoded, that is the same way as in <code>application/x-www-form-urlencoded</code> media type. This differs from the RFC 3986 encoding (see <code>rawurlencode()</code>) in that for historical reasons, spaces are encoded as plus (+) signs.</p>
	 * @link http://php.net/manual/en/function.urlencode.php
	 * @see urldecode(), htmlentities(), rawurlencode(), rawurldecode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function urlencode(string $str): string {}

	/**
	 * Encoding is performed per RFC 1738 and the <code>application/x-www-form-urlencoded</code> media type, which implies that spaces are encoded as plus (<code>+</code>) signs.
	 */
	define('PHP_QUERY_RFC1738', 1);

	/**
	 * Encoding is performed according to RFC 3986, and spaces will be percent encoded (<code>%20</code>).
	 */
	define('PHP_QUERY_RFC3986', 2);

	/**
	 * Outputs the fragment (string after the hashmark #) of the URL parsed.
	 */
	define('PHP_URL_FRAGMENT', 7);

	/**
	 * Outputs the hostname of the URL parsed.
	 */
	define('PHP_URL_HOST', 1);

	/**
	 * Outputs the password of the URL parsed.
	 */
	define('PHP_URL_PASS', 4);

	/**
	 * Outputs the path of the URL parsed.
	 */
	define('PHP_URL_PATH', 5);

	/**
	 * Outputs the port of the URL parsed.
	 */
	define('PHP_URL_PORT', 2);

	/**
	 * Outputs the query string of the URL parsed.
	 */
	define('PHP_URL_QUERY', 6);

	define('PHP_URL_SCHEME', 0);

	/**
	 * Outputs the user of the URL parsed.
	 */
	define('PHP_URL_USER', 3);

}
