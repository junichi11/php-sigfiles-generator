<?php



namespace {

	/**
	 * Convert string to requested character encoding
	 * <p>Performs a character set conversion on the string <code>str</code> from <code>in_charset</code> to <code>out_charset</code>.</p>
	 * @param string $in_charset <p>The input charset.</p>
	 * @param string $out_charset <p>The output charset.</p> <p>If you append the string <i>//TRANSLIT</i> to <code>out_charset</code> transliteration is activated. This means that when a character can't be represented in the target charset, it can be approximated through one or several similarly looking characters. If you append the string <i>//IGNORE</i>, characters that cannot be represented in the target charset are silently discarded. Otherwise, <b><code>E_NOTICE</code></b> is generated and the function will return <b><code>FALSE</code></b>.</p> <b>Caution</b> <p>If and how <i>//TRANSLIT</i> works exactly depends on the system's iconv() implementation (cf. <b><code>ICONV_IMPL</code></b>). Some implementations are known to ignore <i>//TRANSLIT</i>, so the conversion is likely to fail for characters which are illegal for the <code>out_charset</code>.</p>
	 * @param string $str <p>The string to be converted.</p>
	 * @return string <p>Returns the converted string or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.iconv.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function iconv(string $in_charset, string $out_charset, string $str): string {}

	/**
	 * Retrieve internal configuration variables of iconv extension
	 * <p>Retrieve internal configuration variables of iconv extension.</p>
	 * @param string $type <p>The value of the optional <code>type</code> can be:</p><ul> <li>all</li> <li>input_encoding</li> <li>output_encoding</li> <li>internal_encoding</li> </ul>
	 * @return mixed <p>Returns the current value of the internal configuration variable if successful or <b><code>FALSE</code></b> on failure.</p><p>If <code>type</code> is omitted or set to "all", <b>iconv_get_encoding()</b> returns an array that stores all these variables.</p>
	 * @link http://php.net/manual/en/function.iconv-get-encoding.php
	 * @see iconv_set_encoding(), ob_iconv_handler()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function iconv_get_encoding(string $type = "all") {}

	/**
	 * Decodes a MIME header field
	 * <p>Decodes a <i>MIME</i> header field.</p>
	 * @param string $encoded_header <p>The encoded header, as a string.</p>
	 * @param int $mode <p><code>mode</code> determines the behaviour in the event <b>iconv_mime_decode()</b> encounters a malformed <i>MIME</i> header field. You can specify any combination of the following bitmasks.</p> <b>Bitmasks acceptable to <b>iconv_mime_decode()</b></b>   Value Constant Description     1 ICONV_MIME_DECODE_STRICT  If set, the given header is decoded in full conformance with the standards defined in RFC2047. This option is disabled by default because there are a lot of broken mail user agents that don't follow the specification and don't produce correct <i>MIME</i> headers.    2 ICONV_MIME_DECODE_CONTINUE_ON_ERROR  If set, <code>iconv_mime_decode_headers()</code> attempts to ignore any grammatical errors and continue to process a given header.
	 * @param string $charset <p>The optional <code>charset</code> parameter specifies the character set to represent the result by. If omitted, iconv.internal_encoding will be used.</p>
	 * @return string <p>Returns a decoded <i>MIME</i> field on success, or <b><code>FALSE</code></b> if an error occurs during the decoding.</p>
	 * @link http://php.net/manual/en/function.iconv-mime-decode.php
	 * @see iconv_mime_decode_headers(), mb_decode_mimeheader(), imap_mime_header_decode(), imap_base64(), imap_qprint()
	 * @since PHP 5, PHP 7
	 */
	function iconv_mime_decode(string $encoded_header, int $mode = 0, string $charset = 'ini_get("iconv.internal_encoding")'): string {}

	/**
	 * Decodes multiple MIME header fields at once
	 * <p>Decodes multiple <i>MIME</i> header fields at once.</p>
	 * @param string $encoded_headers <p>The encoded headers, as a string.</p>
	 * @param int $mode <p><code>mode</code> determines the behaviour in the event <b>iconv_mime_decode_headers()</b> encounters a malformed <i>MIME</i> header field. You can specify any combination of the following bitmasks.</p> <b>Bitmasks acceptable to <b>iconv_mime_decode_headers()</b></b>   Value Constant Description     1 ICONV_MIME_DECODE_STRICT  If set, the given header is decoded in full conformance with the standards defined in RFC2047. This option is disabled by default because there are a lot of broken mail user agents that don't follow the specification and don't produce correct <i>MIME</i> headers.    2 ICONV_MIME_DECODE_CONTINUE_ON_ERROR  If set, <b>iconv_mime_decode_headers()</b> attempts to ignore any grammatical errors and continue to process a given header.
	 * @param string $charset <p>The optional <code>charset</code> parameter specifies the character set to represent the result by. If omitted, iconv.internal_encoding will be used.</p>
	 * @return array <p>Returns an associative array that holds a whole set of <i>MIME</i> header fields specified by <code>encoded_headers</code> on success, or <b><code>FALSE</code></b> if an error occurs during the decoding.</p><p>Each key of the return value represents an individual field name and the corresponding element represents a field value. If more than one field of the same name are present, <b>iconv_mime_decode_headers()</b> automatically incorporates them into a numerically indexed array in the order of occurrence.</p>
	 * @link http://php.net/manual/en/function.iconv-mime-decode-headers.php
	 * @see iconv_mime_decode(), mb_decode_mimeheader(), imap_mime_header_decode(), imap_base64(), imap_qprint()
	 * @since PHP 5, PHP 7
	 */
	function iconv_mime_decode_headers(string $encoded_headers, int $mode = 0, string $charset = 'ini_get("iconv.internal_encoding")'): array {}

	/**
	 * Composes a MIME header field
	 * <p>Composes and returns a string that represents a valid <i>MIME</i> header field, which looks like the following:</p>
	 * @param string $field_name <p>The field name.</p>
	 * @param string $field_value <p>The field value.</p>
	 * @param array $preferences <p>You can control the behaviour of <b>iconv_mime_encode()</b> by specifying an associative array that contains configuration items to the optional third parameter <code>preferences</code>. The items supported by <b>iconv_mime_encode()</b> are listed below. Note that item names are treated case-sensitive.</p> <b>Configuration items supported by <b>iconv_mime_encode()</b></b>   Item Type Description Default value Example     scheme <code>string</code>  Specifies the method to encode a field value by. The value of this item may be either "B" or "Q", where "B" stands for <i>base64</i> encoding scheme and "Q" stands for <i>quoted-printable</i> encoding scheme.  B B   input-charset <code>string</code>  Specifies the character set in which the first parameter <code>field_name</code> and the second parameter <code>field_value</code> are presented. If not given, <b>iconv_mime_encode()</b> assumes those parameters are presented to it in the iconv.internal_encoding ini setting.   iconv.internal_encoding  ISO-8859-1   output-charset <code>string</code>  Specifies the character set to use to compose the <i>MIME</i> header.   iconv.internal_encoding  UTF-8   line-length <code>integer</code>  Specifies the maximum length of the header lines. The resulting header is "folded" to a set of multiple lines in case the resulting header field would be longer than the value of this parameter, according to RFC2822 - Internet Message Format. If not given, the length will be limited to 76 characters.  76 996   line-break-chars <code>string</code>  Specifies the sequence of characters to append to each line as an end-of-line sign when "folding" is performed on a long header field. If not given, this defaults to "\r\n" (<i>CR</i> <i>LF</i>). Note that this parameter is always treated as an ASCII string regardless of the value of <i>input-charset</i>.  \r\n \n
	 * @return string <p>Returns an encoded <i>MIME</i> field on success, or <b><code>FALSE</code></b> if an error occurs during the encoding.</p>
	 * @link http://php.net/manual/en/function.iconv-mime-encode.php
	 * @see imap_binary(), mb_encode_mimeheader(), imap_8bit(), quoted_printable_encode()
	 * @since PHP 5, PHP 7
	 */
	function iconv_mime_encode(string $field_name, string $field_value, array $preferences = NULL): string {}

	/**
	 * Set current setting for character encoding conversion
	 * <p>Changes the value of the internal configuration variable specified by <code>type</code> to <code>charset</code>.</p>
	 * @param string $type <p>The value of <code>type</code> can be any one of these:</p><ul> <li>input_encoding</li> <li>output_encoding</li> <li>internal_encoding</li> </ul>
	 * @param string $charset <p>The character set.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.iconv-set-encoding.php
	 * @see iconv_get_encoding(), ob_iconv_handler()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function iconv_set_encoding(string $type, string $charset): bool {}

	/**
	 * Returns the character count of string
	 * <p>In contrast to <code>strlen()</code>, <b>iconv_strlen()</b> counts the occurrences of characters in the given byte sequence <code>str</code> on the basis of the specified character set, the result of which is not necessarily identical to the length of the string in byte.</p>
	 * @param string $str <p>The string.</p>
	 * @param string $charset <p>If <code>charset</code> parameter is omitted, <code>str</code> is assumed to be encoded in iconv.internal_encoding.</p>
	 * @return int <p>Returns the character count of <code>str</code>, as an integer.</p>
	 * @link http://php.net/manual/en/function.iconv-strlen.php
	 * @see grapheme_strlen(), mb_strlen(), strlen()
	 * @since PHP 5, PHP 7
	 */
	function iconv_strlen(string $str, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

	/**
	 * Finds position of first occurrence of a needle within a haystack
	 * <p>Finds position of first occurrence of a <code>needle</code> within a <code>haystack</code>.</p><p>In contrast to <code>strpos()</code>, the return value of <b>iconv_strpos()</b> is the number of characters that appear before the needle, rather than the offset in bytes to the position where the needle has been found. The characters are counted on the basis of the specified character set <code>charset</code>.</p>
	 * @param string $haystack <p>The entire string.</p>
	 * @param string $needle <p>The searched substring.</p>
	 * @param int $offset <p>The optional <code>offset</code> parameter specifies the position from which the search should be performed. If the offset is negative, it is counted from the end of the string.</p>
	 * @param string $charset <p>If <code>charset</code> parameter is omitted, <code>string</code> are assumed to be encoded in iconv.internal_encoding.</p>
	 * @return int <p>Returns the numeric position of the first occurrence of <code>needle</code> in <code>haystack</code>.</p><p>If <code>needle</code> is not found, <b>iconv_strpos()</b> will return <b><code>FALSE</code></b>.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link http://php.net/manual/en/function.iconv-strpos.php
	 * @see strpos(), iconv_strrpos(), mb_strpos()
	 * @since PHP 5, PHP 7
	 */
	function iconv_strpos(string $haystack, string $needle, int $offset = 0, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

	/**
	 * Finds the last occurrence of a needle within a haystack
	 * <p>Finds the last occurrence of a <code>needle</code> within a <code>haystack</code>.</p><p>In contrast to <code>strrpos()</code>, the return value of <b>iconv_strrpos()</b> is the number of characters that appear before the needle, rather than the offset in bytes to the position where the needle has been found. The characters are counted on the basis of the specified character set <code>charset</code>.</p>
	 * @param string $haystack <p>The entire string.</p>
	 * @param string $needle <p>The searched substring.</p>
	 * @param string $charset <p>If <code>charset</code> parameter is omitted, <code>string</code> are assumed to be encoded in iconv.internal_encoding.</p>
	 * @return int <p>Returns the numeric position of the last occurrence of <code>needle</code> in <code>haystack</code>.</p><p>If <code>needle</code> is not found, <b>iconv_strrpos()</b> will return <b><code>FALSE</code></b>.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link http://php.net/manual/en/function.iconv-strrpos.php
	 * @see strrpos(), iconv_strpos(), mb_strrpos()
	 * @since PHP 5, PHP 7
	 */
	function iconv_strrpos(string $haystack, string $needle, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

	/**
	 * Cut out part of a string
	 * <p>Cuts a portion of <code>str</code> specified by the <code>offset</code> and <code>length</code> parameters.</p>
	 * @param string $str <p>The original string.</p>
	 * @param int $offset <p>If <code>offset</code> is non-negative, <b>iconv_substr()</b> cuts the portion out of <code>str</code> beginning at <code>offset</code>'th character, counting from zero.</p> <p>If <code>offset</code> is negative, <b>iconv_substr()</b> cuts out the portion beginning at the position, <code>offset</code> characters away from the end of <code>str</code>.</p>
	 * @param int $length <p>If <code>length</code> is given and is positive, the return value will contain at most <code>length</code> characters of the portion that begins at <code>offset</code> (depending on the length of <code>string</code>).</p> <p>If negative <code>length</code> is passed, <b>iconv_substr()</b> cuts the portion out of <code>str</code> from the <code>offset</code>'th character up to the character that is <code>length</code> characters away from the end of the string. In case <code>offset</code> is also negative, the start position is calculated beforehand according to the rule explained above.</p>
	 * @param string $charset <p>If <code>charset</code> parameter is omitted, <code>string</code> are assumed to be encoded in iconv.internal_encoding.</p> <p>Note that <code>offset</code> and <code>length</code> parameters are always deemed to represent offsets that are calculated on the basis of the character set determined by <code>charset</code>, whilst the counterpart <code>substr()</code> always takes these for byte offsets.</p>
	 * @return string <p>Returns the portion of <code>str</code> specified by the <code>offset</code> and <code>length</code> parameters.</p><p>If <code>str</code> is shorter than <code>offset</code> characters long, <b><code>FALSE</code></b> will be returned. If <code>str</code> is exactly <code>offset</code> characters long, an empty string will be returned.</p>
	 * @link http://php.net/manual/en/function.iconv-substr.php
	 * @see substr(), mb_substr(), mb_strcut()
	 * @since PHP 5, PHP 7
	 */
	function iconv_substr(string $str, int $offset, int $length  = 'iconv_strlen($str, $charset)', string $charset = 'ini_get("iconv.internal_encoding")'): string {}

	/**
	 * Convert character encoding as output buffer handler
	 * <p>Converts the string encoded in <code>internal_encoding</code> to <code>output_encoding</code>.</p><p><code>internal_encoding</code> and <code>output_encoding</code> should be defined in the php.ini file or in <code>iconv_set_encoding()</code>.</p>
	 * @param string $contents
	 * @param int $status
	 * @return string <p>See <code>ob_start()</code> for information about this handler return values.</p>
	 * @link http://php.net/manual/en/function.ob-iconv-handler.php
	 * @see iconv_get_encoding(), iconv_set_encoding()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ob_iconv_handler(string $contents, int $status): string {}

	/**
	 * The implementation name
	 */
	define('ICONV_IMPL', 'glibc');

	/**
	 * A bitmask used for <code>iconv_mime_decode()</code>
	 */
	define('ICONV_MIME_DECODE_CONTINUE_ON_ERROR', 2);

	/**
	 * A bitmask used for <code>iconv_mime_decode()</code>
	 */
	define('ICONV_MIME_DECODE_STRICT', 1);

	/**
	 * The implementation version
	 */
	define('ICONV_VERSION', 2.28);

}
