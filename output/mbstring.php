<?php



namespace {

	/**
	 * Check if strings are valid for the specified encoding
	 * <p>Checks if the specified byte stream is valid for the specified encoding. If <code>value</code> is of type <code>array</code>, all keys and values are validated recursively. It is useful to prevent so-called "Invalid Encoding Attack".</p><p></p>
	 * @param array|string|null $value <p>The byte stream or <code>array</code> to check. If it is omitted, this function checks all the input from the beginning of the request.</p> <p><b>Warning</b></p> <p>As of PHP 8.1.0, omitting this parameter or passing <b><code>null</code></b> is deprecated.</p>
	 * @param ?string $encoding <p>The expected encoding.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-check-encoding.php
	 * @since PHP 4 >= 4.4.3, PHP 5 >= 5.1.3, PHP 7, PHP 8
	 */
	function mb_check_encoding(array|string|null $value = null, ?string $encoding = null): bool {}

	/**
	 * Return character by Unicode code point value
	 * <p>Returns a string containing the character specified by the Unicode code point value, encoded in the specified encoding.</p><p>This function complements <code>mb_ord()</code>.</p>
	 * @param int $codepoint <p>A Unicode codepoint value, e.g. <code>128024</code> for <i>U+1F418 ELEPHANT</i></p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string|false <p>A string containing the requested character, if it can be represented in the specified encoding or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-chr.php
	 * @see mb_internal_encoding(), mb_ord(), IntlChar::ord(), chr()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function mb_chr(int $codepoint, ?string $encoding = null): string|false {}

	/**
	 * Perform case folding on a string
	 * <p>Performs case folding on a <code>string</code>, converted in the way specified by <code>mode</code>.</p>
	 * @param string $string <p>The <code>string</code> being converted.</p>
	 * @param int $mode <p>The mode of the conversion. It can be one of <b><code>MB_CASE_UPPER</code></b>, <b><code>MB_CASE_LOWER</code></b>, <b><code>MB_CASE_TITLE</code></b>, <b><code>MB_CASE_FOLD</code></b>, <b><code>MB_CASE_UPPER_SIMPLE</code></b>, <b><code>MB_CASE_LOWER_SIMPLE</code></b>, <b><code>MB_CASE_TITLE_SIMPLE</code></b>, <b><code>MB_CASE_FOLD_SIMPLE</code></b>.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p>A case folded version of <code>string</code> converted in the way specified by <code>mode</code>.</p>
	 * @link https://php.net/manual/en/function.mb-convert-case.php
	 * @see mb_strtolower(), mb_strtoupper(), strtolower(), strtoupper(), ucfirst(), ucwords()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_convert_case(string $string, int $mode, ?string $encoding = null): string {}

	/**
	 * Convert a string from one character encoding to another
	 * <p>Converts <code>string</code> from <code>from_encoding</code>, or the current internal encoding, to <code>to_encoding</code>. If <code>string</code> is an <code>array</code>, all its <code>string</code> values will be converted recursively.</p>
	 * @param array|string $string <p>The <code>string</code> or <code>array</code> to be converted.</p>
	 * @param string $to_encoding <p>The desired encoding of the result.</p>
	 * @param array|string|null $from_encoding <p>The current encoding used to interpret <code>string</code>. Multiple encodings may be specified as an <code>array</code> or comma separated list, in which case the correct encoding will be guessed using the same algorithm as <code>mb_detect_encoding()</code>.</p> <p>If <code>from_encoding</code> is <b><code>null</code></b> or not specified, the mbstring.internal_encoding setting will be used if set, otherwise the default_charset setting.</p> <p>See supported encodings for valid values of <code>to_encoding</code> and <code>from_encoding</code>.</p>
	 * @return array|string|false <p>The encoded <code>string</code> or <code>array</code> on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-convert-encoding.php
	 * @see mb_detect_order(), iconv()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_convert_encoding(array|string $string, string $to_encoding, array|string|null $from_encoding = null): array|string|false {}

	/**
	 * Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
	 * <p>Performs a "han-kaku" - "zen-kaku" conversion for <code>string</code> <code>string</code>. This function is only useful for Japanese.</p>
	 * @param string $string <p>The <code>string</code> being converted.</p>
	 * @param string $mode <p>The conversion option.</p> <p>Specify with a combination of following options.</p> <b>Applicable Conversion Options</b>   Option Meaning     <code>r</code>  Convert "zen-kaku" alphabets to "han-kaku"    <code>R</code>  Convert "han-kaku" alphabets to "zen-kaku"    <code>n</code>  Convert "zen-kaku" numbers to "han-kaku"    <code>N</code>  Convert "han-kaku" numbers to "zen-kaku"    <code>a</code>  Convert "zen-kaku" alphabets and numbers to "han-kaku"    <code>A</code>  Convert "han-kaku" alphabets and numbers to "zen-kaku" (Characters included in "a", "A" options are U+0021 - U+007E excluding U+0022, U+0027, U+005C, U+007E)    <code>s</code>  Convert "zen-kaku" space to "han-kaku" (U+3000 -&gt; U+0020)    <code>S</code>  Convert "han-kaku" space to "zen-kaku" (U+0020 -&gt; U+3000)    <code>k</code>  Convert "zen-kaku kata-kana" to "han-kaku kata-kana"    <code>K</code>  Convert "han-kaku kata-kana" to "zen-kaku kata-kana"    <code>h</code>  Convert "zen-kaku hira-gana" to "han-kaku kata-kana"    <code>H</code>  Convert "han-kaku kata-kana" to "zen-kaku hira-gana"    <code>c</code>  Convert "zen-kaku kata-kana" to "zen-kaku hira-gana"    <code>C</code>  Convert "zen-kaku hira-gana" to "zen-kaku kata-kana"    <code>V</code>  Collapse voiced sound notation and convert them into a character. Use with "K","H"
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-convert-kana.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_convert_kana(string $string, string $mode = "KV", ?string $encoding = null): string {}

	/**
	 * Convert character code in variable(s)
	 * <p>Converts character encoding of variables <code>var</code> and <code>vars</code> in encoding <code>from_encoding</code> to encoding <code>to_encoding</code>.</p><p><b>mb_convert_variables()</b> join strings in Array or Object to detect encoding, since encoding detection tends to fail for short strings. Therefore, it is impossible to mix encoding in single array or object.</p>
	 * @param string $to_encoding <p>The encoding that the <code>string</code> is being converted to.</p>
	 * @param array|string $from_encoding <p><code>from_encoding</code> is specified as an <code>array</code> or comma separated <code>string</code>, it tries to detect encoding from <code>from-coding</code>. When <code>from_encoding</code> is omitted, <code>detect_order</code> is used.</p>
	 * @param mixed $var <p><code>var</code> is the reference to the variable being converted. String, Array and Object are accepted. <b>mb_convert_variables()</b> assumes all parameters have the same encoding.</p>
	 * @param mixed $vars <p>Additional <code>var</code>s.</p>
	 * @return string|false <p>The character encoding before conversion for success, or <b><code>false</code></b> for failure.</p>
	 * @link https://php.net/manual/en/function.mb-convert-variables.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_convert_variables(string $to_encoding, array|string $from_encoding, mixed &$var, mixed &...$vars): string|false {}

	/**
	 * Decode string in MIME header field
	 * <p>Decodes encoded-word <code>string</code> <code>string</code> in MIME header.</p>
	 * @param string $string <p>The <code>string</code> being decoded.</p>
	 * @return string <p>The decoded <code>string</code> in internal character encoding.</p>
	 * @link https://php.net/manual/en/function.mb-decode-mimeheader.php
	 * @see mb_encode_mimeheader()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_decode_mimeheader(string $string): string {}

	/**
	 * Decode HTML numeric string reference to character
	 * <p>Convert numeric string reference of <code>string</code> <code>string</code> in a specified block to character.</p>
	 * @param string $string <p>The <code>string</code> being decoded.</p>
	 * @param array $map <p><code>map</code> is an <code>array</code> that specifies the code area to convert.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-decode-numericentity.php
	 * @see mb_encode_numericentity()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_decode_numericentity(string $string, array $map, ?string $encoding = null): string {}

	/**
	 * Detect character encoding
	 * <p>Detects the most likely character encoding for <code>string</code> <code>string</code> from an ordered list of candidates.</p><p>Automatic detection of the intended character encoding can never be entirely reliable; without some additional information, it is similar to decoding an encrypted string without the key. It is always preferable to use an indication of character encoding stored or transmitted with the data, such as a "Content-Type" HTTP header.</p><p>This function is most useful with multibyte encodings, where not all sequences of bytes form a valid string. If the input string contains such a sequence, that encoding will be rejected, and the next encoding checked.</p>
	 * @param string $string <p>The <code>string</code> being inspected.</p>
	 * @param array|string|null $encodings <p>A list of character encodings to try, in order. The list may be specified as an array of strings, or a single string separated by commas.</p> <p>If <code>encodings</code> is omitted or <b><code>null</code></b>, the current detect_order (set with the  mbstring.detect_order configuration option, or <code>mb_detect_order()</code> function) will be used.</p>
	 * @param bool $strict <p>Controls the behaviour when <code>string</code> is not valid in any of the listed <code>encodings</code>. If <code>strict</code> is set to <b><code>false</code></b>, the closest matching encoding will be returned; if <code>strict</code> is set to <b><code>true</code></b>, <b><code>false</code></b> will be returned.</p> <p>The default value for <code>strict</code> can be set with the  mbstring.strict_detection configuration option.</p>
	 * @return string|false <p>The detected character encoding, or <b><code>false</code></b> if the string is not valid in any of the listed encodings.</p>
	 * @link https://php.net/manual/en/function.mb-detect-encoding.php
	 * @see mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_detect_encoding(string $string, array|string|null $encodings = null, bool $strict = false): string|false {}

	/**
	 * Set/Get character encoding detection order
	 * <p>Sets the automatic character encoding detection order to <code>encoding</code>.</p>
	 * @param array|string|null $encoding <p><code>encoding</code> is an <code>array</code> or comma separated list of character encoding. See supported encodings.</p> <p>If <code>encoding</code> is omitted or <b><code>null</code></b>, it returns the current character encoding detection order as array.</p> <p>This setting affects <code>mb_detect_encoding()</code> and <code>mb_send_mail()</code>.</p> <p><code>mbstring</code> currently implements the following encoding detection filters. If there is an invalid byte sequence for the following encodings, encoding detection will fail.</p>  <code>UTF-8</code>, <code>UTF-7</code>, <code>ASCII</code>, <code>EUC-JP</code>,<code>SJIS</code>, <code>eucJP-win</code>, <code>SJIS-win</code>, <code>JIS</code>, <code>ISO-2022-JP</code>  <p>For <code>ISO-8859-&#42;</code>, <code>mbstring</code> always detects as <code>ISO-8859-&#42;</code>.</p> <p>For <code>UTF-16</code>, <code>UTF-32</code>, <code>UCS2</code> and <code>UCS4</code>, encoding detection will fail always.</p>
	 * @return array|bool <p>When setting the encoding detection order, <b><code>true</code></b> is returned on success or <b><code>false</code></b> on failure.</p><p>When getting the encoding detection order, an ordered array of the encodings is returned.</p>
	 * @link https://php.net/manual/en/function.mb-detect-order.php
	 * @see mb_internal_encoding(), mb_http_input(), mb_http_output(), mb_send_mail()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_detect_order(array|string|null $encoding = null): array|bool {}

	/**
	 * Encode string for MIME header
	 * <p>Encodes a given <code>string</code> <code>string</code> by the MIME header encoding scheme.</p>
	 * @param string $string <p>The <code>string</code> being encoded. Its encoding should be same as <code>mb_internal_encoding()</code>.</p>
	 * @param ?string $charset <p><code>charset</code> specifies the name of the character set in which <code>string</code> is represented in. The default value is determined by the current NLS setting (<code>mbstring.language</code>).</p>
	 * @param ?string $transfer_encoding <p><code>transfer_encoding</code> specifies the scheme of MIME encoding. It should be either <code>"B"</code> (Base64) or <code>"Q"</code> (Quoted-Printable). Falls back to <code>"B"</code> if not given.</p>
	 * @param string $newline <p><code>newline</code> specifies the EOL (end-of-line) marker with which <b>mb_encode_mimeheader()</b> performs line-folding (a &#xBB;&#xA0;RFC term, the act of breaking a line longer than a certain length into multiple lines. The length is currently hard-coded to 74 characters). Falls back to <code>"\r\n"</code> (CRLF) if not given.</p>
	 * @param int $indent <p>Indentation of the first line (number of characters in the header before <code>string</code>).</p>
	 * @return string <p>A converted version of the <code>string</code> represented in ASCII.</p>
	 * @link https://php.net/manual/en/function.mb-encode-mimeheader.php
	 * @see mb_decode_mimeheader()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_encode_mimeheader(string $string, ?string $charset = null, ?string $transfer_encoding = null, string $newline = "\r\n", int $indent = 0): string {}

	/**
	 * Encode character to HTML numeric string reference
	 * <p>Converts specified character codes in <code>string</code> <code>string</code> from character code to HTML numeric character reference.</p>
	 * @param string $string <p>The <code>string</code> being encoded.</p>
	 * @param array $map <p><code>map</code> is array specifies code area to convert.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @param bool $hex <p>Whether the returned entity reference should be in hexadecimal notation (otherwise it is in decimal notation).</p>
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-encode-numericentity.php
	 * @see mb_decode_numericentity()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_encode_numericentity(string $string, array $map, ?string $encoding = null, bool $hex = false): string {}

	/**
	 * Get aliases of a known encoding type
	 * <p>Returns an array of aliases for a known <code>encoding</code> type.</p>
	 * @param string $encoding <p>The encoding type being checked, for aliases.</p>
	 * @return array <p>Returns a numerically indexed array of encoding aliases.</p>
	 * @link https://php.net/manual/en/function.mb-encoding-aliases.php
	 * @see mb_list_encodings()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function mb_encoding_aliases(string $encoding): array {}

	/**
	 * Regular expression match with multibyte support
	 * <p>Executes the regular expression match with multibyte support.</p>
	 * @param string $pattern <p>The search pattern.</p>
	 * @param string $string <p>The search <code>string</code>.</p>
	 * @param array $matches <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>matches</code>, the matches will be stored in the elements of the array <code>matches</code>. If no matches are found, <code>matches</code> is set to an empty array.</p> <p>$matches[1] will contain the substring which starts at the first left parenthesis; $matches[2] will contain the substring starting at the second, and so on. $matches[0] will contain a copy of the complete string matched.</p>
	 * @return bool <p>Returns whether <code>pattern</code> matches <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-ereg.php
	 * @see mb_regex_encoding(), mb_eregi()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg(string $pattern, string $string, array &$matches = null): bool {}

	/**
	 * Regular expression match for multibyte string
	 * <p>A regular expression match for a multibyte string</p><p><b>Note</b>:  <code>pattern</code> is only matched at the beginning of <code>string</code>. </p>
	 * @param string $pattern <p>The regular expression pattern.</p>
	 * @param string $string <p>The <code>string</code> being evaluated.</p>
	 * @param ?string $options <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>string</code> matches the regular expression <code>pattern</code>, <b><code>false</code></b> if not.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-match.php
	 * @see mb_regex_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_match(string $pattern, string $string, ?string $options = null): bool {}

	/**
	 * Replace regular expression with multibyte support
	 * <p>Scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with <code>replacement</code></p>
	 * @param string $pattern <p>The regular expression pattern.</p> <p>Multibyte characters may be used in <code>pattern</code>.</p>
	 * @param string $replacement <p>The replacement text.</p>
	 * @param string $string <p>The <code>string</code> being checked.</p>
	 * @param ?string $options The search option. See <code>mb_regex_set_options()</code> for explanation.
	 * @return string|false|null <p>The resultant <code>string</code> on success, or <b><code>false</code></b> on error. If <code>string</code> is not valid for the current encoding, <b><code>null</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-replace.php
	 * @see mb_regex_encoding(), mb_eregi_replace()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_replace(string $pattern, string $replacement, string $string, ?string $options = null): string|false|null {}

	/**
	 * Perform a regular expression search and replace with multibyte support using a callback
	 * <p>Scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with the output of <code>callback</code> function.</p><p>The behavior of this function is almost identical to <code>mb_ereg_replace()</code>, except for the fact that instead of <code>replacement</code> parameter, one should specify a <code>callback</code>.</p>
	 * @param string $pattern <p>The regular expression pattern.</p> <p>Multibyte characters may be used in <code>pattern</code>.</p>
	 * @param callable $callback <p>A callback that will be called and passed an array of matched elements in the <code>subject</code> string. The callback should return the replacement string.</p> <p>You'll often need the <code>callback</code> function for a <b>mb_ereg_replace_callback()</b> in just one place. In this case you can use an anonymous function to declare the callback within the call to <b>mb_ereg_replace_callback()</b>. By doing it this way you have all information for the call in one place and do not clutter the function namespace with a callback function's name not used anywhere else.</p>
	 * @param string $string <p>The <code>string</code> being checked.</p>
	 * @param ?string $options <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return string|false|null <p>The resultant <code>string</code> on success, or <b><code>false</code></b> on error. If <code>string</code> is not valid for the current encoding, <b><code>null</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-replace-callback.php
	 * @see mb_regex_encoding(), mb_ereg_replace()
	 * @since PHP 5 >= 5.4.1, PHP 7, PHP 8
	 */
	function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, ?string $options = null): string|false|null {}

	/**
	 * Multibyte regular expression match for predefined multibyte string
	 * <p>Performs a multibyte regular expression match for a predefined multibyte string.</p>
	 * @param ?string $pattern <p>The search pattern.</p>
	 * @param ?string $options <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return bool <p><b>mb_ereg_search()</b> returns <b><code>true</code></b> if the multibyte string matches with the regular expression, or <b><code>false</code></b> otherwise. The <code>string</code> for matching is set by <code>mb_ereg_search_init()</code>. If <code>pattern</code> is not specified, the previous one is used.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search(?string $pattern = null, ?string $options = null): bool {}

	/**
	 * Returns start point for next regular expression match
	 * <p>Returns the start point for the next regular expression match.</p>
	 * @return int <p><b>mb_ereg_search_getpos()</b> returns the point to start regular expression match for <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code>. The position is represented by bytes from the head of string.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search-getpos.php
	 * @see mb_regex_encoding(), mb_ereg_search_setpos()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search_getpos(): int {}

	/**
	 * Retrieve the result from the last multibyte regular expression match
	 * <p>Retrieve the result from the last multibyte regular expression match</p>
	 * @return array|false <p>An <code>array</code> including the sub-string of matched part by last <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code>. If there are some matches, the first element will have the matched sub-string, the second element will have the first part grouped with brackets, the third element will have the second part grouped with brackets, and so on. It returns <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search-getregs.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search_getregs(): array|false {}

	/**
	 * Setup string and regular expression for a multibyte regular expression match
	 * <p><b>mb_ereg_search_init()</b> sets <code>string</code> and <code>pattern</code> for a multibyte regular expression. These values are used for <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, and <code>mb_ereg_search_regs()</code>.</p>
	 * @param string $string <p>The search string.</p>
	 * @param ?string $pattern <p>The search pattern.</p>
	 * @param ?string $options <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search-init.php
	 * @see mb_regex_encoding(), mb_ereg_search_regs()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search_init(string $string, ?string $pattern = null, ?string $options = null): bool {}

	/**
	 * Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
	 * <p>Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string</p><p>The string for match is specified by <code>mb_ereg_search_init()</code>. If it is not specified, the previous one will be used.</p>
	 * @param ?string $pattern <p>The search pattern.</p>
	 * @param ?string $options <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return array|false <p>An <code>array</code> containing two elements. The first element is the offset, in bytes, where the match begins relative to the start of the search string, and the second element is the length in bytes of the match.</p><p>If an error occurs, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search-pos.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search_pos(?string $pattern = null, ?string $options = null): array|false {}

	/**
	 * Returns the matched part of a multibyte regular expression
	 * <p>Returns the matched part of a multibyte regular expression.</p>
	 * @param ?string $pattern <p>The search pattern.</p>
	 * @param ?string $options <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return array|false <p><b>mb_ereg_search_regs()</b> executes the multibyte regular expression match, and if there are some matched part, it returns an <code>array</code> including substring of matched part as first element, the first grouped part with brackets as second element, the second grouped part as third element, and so on. It returns <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search-regs.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search_regs(?string $pattern = null, ?string $options = null): array|false {}

	/**
	 * Set start point of next regular expression match
	 * <p><b>mb_ereg_search_setpos()</b> sets the starting point of a match for <code>mb_ereg_search()</code>.</p>
	 * @param int $offset <p>The position to set. If it is negative, it counts from the end of the string.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-ereg-search-setpos.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_ereg_search_setpos(int $offset): bool {}

	/**
	 * Regular expression match ignoring case with multibyte support
	 * <p>Executes the case insensitive regular expression match with multibyte support.</p>
	 * @param string $pattern <p>The regular expression pattern.</p>
	 * @param string $string <p>The <code>string</code> being searched.</p>
	 * @param array $matches <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>matches</code>, the matches will be stored in the elements of the array <code>matches</code>. If no matches are found, <code>matches</code> is set to an empty array.</p> <p>$matches[1] will contain the substring which starts at the first left parenthesis; $matches[2] will contain the substring starting at the second, and so on. $matches[0] will contain a copy of the complete string matched.</p>
	 * @return bool <p>Returns whether <code>pattern</code> matches <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-eregi.php
	 * @see mb_regex_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_eregi(string $pattern, string $string, array &$matches = null): bool {}

	/**
	 * Replace regular expression with multibyte support ignoring case
	 * <p>Scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with <code>replacement</code>.</p>
	 * @param string $pattern <p>The regular expression pattern. Multibyte characters may be used. The case will be ignored.</p>
	 * @param string $replacement <p>The replacement text.</p>
	 * @param string $string <p>The searched <code>string</code>.</p>
	 * @param ?string $options The search option. See <code>mb_regex_set_options()</code> for explanation.
	 * @return string|false|null <p>The resultant <code>string</code> or <b><code>false</code></b> on error. If <code>string</code> is not valid for the current encoding, <b><code>null</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.mb-eregi-replace.php
	 * @see mb_regex_encoding(), mb_ereg_replace()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_eregi_replace(string $pattern, string $replacement, string $string, ?string $options = null): string|false|null {}

	/**
	 * Get internal settings of mbstring
	 * <p><b>mb_get_info()</b> returns the internal setting parameters of mbstring.</p>
	 * @param string $type <p>If <code>type</code> is not specified or is specified as <code>"all"</code>, <code>"internal_encoding"</code>, <code>"http_input"</code>, <code>"http_output"</code>, <code>"http_output_conv_mimetypes"</code>, <code>"mail_charset"</code>, <code>"mail_header_encoding"</code>, <code>"mail_body_encoding"</code>, <code>"illegal_chars"</code>, <code>"encoding_translation"</code>, <code>"language"</code>, <code>"detect_order"</code>, <code>"substitute_character"</code> and <code>"strict_detection"</code> will be returned.</p> <p>If <code>type</code> is specified as <code>"internal_encoding"</code>, <code>"http_input"</code>, <code>"http_output"</code>, <code>"http_output_conv_mimetypes"</code>, <code>"mail_charset"</code>, <code>"mail_header_encoding"</code>, <code>"mail_body_encoding"</code>, <code>"illegal_chars"</code>, <code>"encoding_translation"</code>, <code>"language"</code>, <code>"detect_order"</code>, <code>"substitute_character"</code> or <code>"strict_detection"</code> the specified setting parameter will be returned.</p>
	 * @return array|string|int|false <p>An <code>array</code> of type information if <code>type</code> is not specified, otherwise a specific <code>type</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-get-info.php
	 * @see mb_regex_encoding(), mb_http_output()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_get_info(string $type = "all"): array|string|int|false {}

	/**
	 * Detect HTTP input character encoding
	 * <p>Detects the HTTP input character encoding.</p>
	 * @param ?string $type <p>Input string specifies the input type. <code>"G"</code> for GET, <code>"P"</code> for POST, <code>"C"</code> for COOKIE, <code>"S"</code> for string, <code>"L"</code> for list, and <code>"I"</code> for the whole list (will return <code>array</code>). If type is omitted, it returns the last input type processed.</p>
	 * @return array|string|false <p>The character encoding name, as per the <code>type</code>, or an array of character encoding names, if <code>type</code> is <code>"I"</code>. If <b>mb_http_input()</b> does not process specified HTTP input, it returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.mb-http-input.php
	 * @see mb_internal_encoding(), mb_http_output(), mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_http_input(?string $type = null): array|string|false {}

	/**
	 * Set/Get HTTP output character encoding
	 * <p>Set/Get the HTTP output character encoding. Output after this function is called will be converted from the set internal encoding to <code>encoding</code>.</p>
	 * @param ?string $encoding <p>If <code>encoding</code> is set, <b>mb_http_output()</b> sets the HTTP output character encoding to <code>encoding</code>.</p> <p>If <code>encoding</code> is omitted, <b>mb_http_output()</b> returns the current HTTP output character encoding.</p>
	 * @return string|bool <p>If <code>encoding</code> is omitted, <b>mb_http_output()</b> returns the current HTTP output character encoding. Otherwise, Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-http-output.php
	 * @see mb_internal_encoding(), mb_http_input(), mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_http_output(?string $encoding = null): string|bool {}

	/**
	 * Set/Get internal character encoding
	 * <p>Set/Get the internal character encoding</p>
	 * @param ?string $encoding <p><code>encoding</code> is the character encoding name used for the HTTP input character encoding conversion, HTTP output character encoding conversion, and the default character encoding for string functions defined by the mbstring module. You should notice that the internal encoding is totally different from the one for multibyte regex.</p>
	 * @return string|bool <p>If <code>encoding</code> is set, then Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. In this case, the character encoding for multibyte regex is NOT changed. If <code>encoding</code> is omitted, then the current character encoding name is returned.</p>
	 * @link https://php.net/manual/en/function.mb-internal-encoding.php
	 * @see mb_http_input(), mb_http_output(), mb_detect_order(), mb_regex_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_internal_encoding(?string $encoding = null): string|bool {}

	/**
	 * Set/Get current language
	 * <p>Set/Get the current language.</p>
	 * @param ?string $language <p>Used for encoding e-mail messages. The valid languages are listed in the following table. <code>mb_send_mail()</code> uses this setting to encode e-mail.</p>    Language Charset Encoding Alias     German/de ISO-8859-15 Quoted-Printable Deutsch   English/en ISO-8859-1 Quoted-Printable &#xA0;   Armenian/hy ArmSCII-8 Quoted-Printable &#xA0;   Japanese/ja ISO-2022-JP BASE64 &#xA0;   Korean/ko ISO-2022-KR BASE64 &#xA0;   neutral UTF-8 BASE64 &#xA0;   Russian/ru KOI8-R Quoted-Printable &#xA0;   Turkish/tr ISO-8859-9 Quoted-Printable &#xA0;   Ukrainian/ua KOI8-U Quoted-Printable &#xA0;   uni UTF-8 BASE64 universal   Simplified Chinese/zh-cn HZ BASE64 &#xA0;   Traditional Chinese/zh-tw BIG-5 BASE64 &#xA0;
	 * @return string|bool <p>If <code>language</code> is set and <code>language</code> is valid, it returns <b><code>true</code></b>. Otherwise, it returns <b><code>false</code></b>. When <code>language</code> is omitted or <b><code>null</code></b>, it returns the language name as a <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-language.php
	 * @see mb_send_mail()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_language(?string $language = null): string|bool {}

	/**
	 * Returns an array of all supported encodings
	 * <p>Returns an array containing all supported encodings.</p>
	 * @return array <p>Returns a numerically indexed array.</p>
	 * @link https://php.net/manual/en/function.mb-list-encodings.php
	 * @see mb_encoding_aliases()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function mb_list_encodings(): array {}

	/**
	 * Get Unicode code point of character
	 * <p>Returns the Unicode code point value of the given character.</p><p>This function complements <code>mb_chr()</code>.</p>
	 * @param string $string <p>A string</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return int|false <p>The Unicode code point for the first character of <code>string</code> or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-ord.php
	 * @see mb_internal_encoding(), mb_chr(), IntlChar::ord(), ord()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function mb_ord(string $string, ?string $encoding = null): int|false {}

	/**
	 * Callback function converts character encoding in output buffer
	 * <p><b>mb_output_handler()</b> is <code>ob_start()</code> callback function. <b>mb_output_handler()</b> converts characters in the output buffer from internal character encoding to HTTP output character encoding.</p>
	 * @param string $string <p>The contents of the output buffer.</p>
	 * @param int $status <p>The status of the output buffer.</p>
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-output-handler.php
	 * @see ob_start()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_output_handler(string $string, int $status): string {}

	/**
	 * Parse GET/POST/COOKIE data and set global variable
	 * <p>Parses GET/POST/COOKIE data and sets global variables. Since PHP does not provide raw POST/COOKIE data, it can only be used for GET data for now. It parses URL encoded data, detects encoding, converts coding to internal encoding and set values to the <code>result</code> <code>array</code> or global variables.</p>
	 * @param string $string <p>The URL encoded data.</p>
	 * @param array $result <p>An <code>array</code> containing decoded and character encoded converted values.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-parse-str.php
	 * @see mb_detect_order(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_parse_str(string $string, array &$result): bool {}

	/**
	 * Get MIME charset string
	 * <p>Get a MIME charset <code>string</code> for a specific encoding.</p>
	 * @param string $encoding <p>The encoding being checked.</p>
	 * @return string|false <p>The MIME <code>charset</code> <code>string</code> for character encoding <code>encoding</code>, or <b><code>false</code></b> if no charset is preferred for the given <code>encoding</code>.</p>
	 * @link https://php.net/manual/en/function.mb-preferred-mime-name.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_preferred_mime_name(string $encoding): string|false {}

	/**
	 * Set/Get character encoding for multibyte regex
	 * <p>Set/Get character encoding for a multibyte regex.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string|bool <p>If <code>encoding</code> is set, then Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. In this case, the internal character encoding is NOT changed. If <code>encoding</code> is omitted, then the current character encoding name for a multibyte regex is returned.</p>
	 * @link https://php.net/manual/en/function.mb-regex-encoding.php
	 * @see mb_internal_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_regex_encoding(?string $encoding = null): string|bool {}

	/**
	 * Set/Get the default options for mbregex functions
	 * <p>Sets the default options described by <code>options</code> for multibyte regex functions.</p>
	 * @param ?string $options <p>The options to set. This is a string where each character is an option. To set a mode, the mode character must be the last one set, however there can only be set one mode but multiple options.</p>  <b>Regex options</b>   Option Meaning     i Ambiguity match on   x Enables extended pattern form   m <code>'.'</code> matches with newlines   s <code>'^'</code> -&gt; <code>'\A'</code>, <code>'$'</code> -&gt; <code>'\Z'</code>   p Same as both the <code>m</code> and <code>s</code> options   l Finds longest matches   n Ignores empty matches   e <code>eval()</code> resulting code     <b>Regex syntax modes</b>   Mode Meaning     j Java (Sun java.util.regex)   u GNU regex   g grep   c Emacs   r Ruby   z Perl   b POSIX Basic regex   d POSIX Extended regex
	 * @return string <p>The previous options. If <code>options</code> is omitted or <b><code>null</code></b>, it returns the <code>string</code> that describes the current options.</p>
	 * @link https://php.net/manual/en/function.mb-regex-set-options.php
	 * @see mb_split(), mb_ereg(), mb_eregi()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_regex_set_options(?string $options = null): string {}

	/**
	 * Description
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $string
	 * @param ?string $encoding
	 * @return string
	 * @link https://php.net/manual/en/function.mb-scrub.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function mb_scrub(string $string, ?string $encoding = null): string {}

	/**
	 * Send encoded mail
	 * <p>Sends email. Headers and messages are converted and encoded according to the <code>mb_language()</code> setting. It's a wrapper function for <code>mail()</code>, so see also <code>mail()</code> for details.</p>
	 * @param string $to <p>The mail addresses being sent to. Multiple recipients may be specified by putting a comma between each address in <code>to</code>. This parameter is not automatically encoded.</p>
	 * @param string $subject <p>The subject of the mail.</p>
	 * @param string $message <p>The message of the mail.</p>
	 * @param array|string $additional_headers <p><code>String</code> or <code>array</code> to be inserted at the end of the email header.</p> <p>This is typically used to add extra headers (From, Cc, and Bcc). Multiple extra headers should be separated with a CRLF (\r\n). Validate parameter not to be injected unwanted headers by attackers.</p> <p>If an <code>array</code> is passed, its keys are the header names and its values are the respective header values.</p> <p><b>Note</b>:</p><p>When sending mail, the mail <i>must</i> contain a <code>From</code> header. This can be set with the <code>additional_headers</code> parameter, or a default can be set in php.ini.</p> <p>Failing to do this will result in an error message similar to <code>Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing</code>. The <code>From</code> header sets also <code>Return-Path</code> under Windows.</p>  <p><b>Note</b>:</p><p>If messages are not received, try using a LF (\n) only. Some Unix mail transfer agents (most notably &#xBB;&#xA0;qmail) replace LF by CRLF automatically (which leads to doubling CR if CRLF is used). This should be a last resort, as it does not comply with &#xBB;&#xA0;RFC 2822.</p>
	 * @param ?string $additional_params <p><code>additional_params</code> is a MTA command line parameter. It is useful when setting the correct Return-Path header when using sendmail.</p> <p>This parameter is escaped by <code>escapeshellcmd()</code> internally to prevent command execution. <code>escapeshellcmd()</code> prevents command execution, but allows to add additional parameters. For security reason, this parameter should be validated.</p> <p>Since <code>escapeshellcmd()</code> is applied automatically, some characters that are allowed as email addresses by internet RFCs cannot be used. Programs that are required to use these characters <code>mail()</code> cannot be used.</p> <p>The user that the webserver runs as should be added as a trusted user to the sendmail configuration to prevent a 'X-Warning' header from being added to the message when the envelope sender (-f) is set using this method. For sendmail users, this file is /etc/mail/trusted-users.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-send-mail.php
	 * @see mail(), mb_encode_mimeheader(), mb_language()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_send_mail(string $to, string $subject, string $message, array|string $additional_headers = [], ?string $additional_params = null): bool {}

	/**
	 * Split multibyte string using regular expression
	 * <p>Split a multibyte <code>string</code> using regular expression <code>pattern</code> and returns the result as an <code>array</code>.</p>
	 * @param string $pattern <p>The regular expression pattern.</p>
	 * @param string $string <p>The <code>string</code> being split.</p>
	 * @param int $limit If optional parameter <code>limit</code> is specified, it will be split in <code>limit</code> elements as maximum.
	 * @return array|false <p>The result as an <code>array</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mb-split.php
	 * @see mb_regex_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_split(string $pattern, string $string, int $limit = -1): array|false {}

	/**
	 * Given a multibyte string, return an array of its characters
	 * <p>This function will return an array of strings, it is a version of <code>str_split()</code> with support for encodings of variable character size as well as fixed-size encodings of 1,2 or 4 byte characters. If the <code>length</code> parameter is specified, the string is broken down into chunks of the specified length in characters (not bytes). The <code>encoding</code> parameter can be optionally specified and it is good practice to do so.</p>
	 * @param string $string <p>The <code>string</code> to split into characters or chunks.</p>
	 * @param int $length <p>If specified, each element of the returned array will be composed of multiple characters instead of a single character.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p> <p>A string specifying one of the supported encodings.</p>
	 * @return array <p><b>mb_str_split()</b> returns an array of strings.</p>
	 * @link https://php.net/manual/en/function.mb-str-split.php
	 * @see str_split()
	 * @since PHP 7 >= 7.4.0, PHP 8
	 */
	function mb_str_split(string $string, int $length = 1, ?string $encoding = null): array {}

	/**
	 * Get part of string
	 * <p><b>mb_strcut()</b> extracts a substring from a string similarly to <code>mb_substr()</code>, but operates on bytes instead of characters. If the cut position happens to be between two bytes of a multi-byte character, the cut is performed starting from the first byte of that character. This is also the difference to the <code>substr()</code> function, which would simply cut the string between the bytes and thus result in a malformed byte sequence.</p>
	 * @param string $string <p>The <code>string</code> being cut.</p>
	 * @param int $start <p>If <code>start</code> is non-negative, the returned string will start at the <code>start</code>'th <i>byte</i> position in <code>string</code>, counting from zero. For instance, in the string '<code>abcdef</code>', the byte at position <code>0</code> is '<code>a</code>', the byte at position <code>2</code> is '<code>c</code>', and so forth.</p> <p>If <code>start</code> is negative, the returned string will start at the <code>start</code>'th byte counting back from the end of <code>string</code>. However, if the magnitude of a negative <code>start</code> is greater than the length of the string, the returned portion will start from the beginning of <code>string</code>.</p>
	 * @param ?int $length <p>Length in <i>bytes</i>. If omitted or <code>NULL</code> is passed, extract all bytes to the end of the string.</p> <p>If <code>length</code> is negative, the returned string will end at the <code>length</code>'th byte counting back from the end of <code>string</code>. However, if the magnitude of a negative <code>length</code> is greater than the number of characters after the <code>start</code> position, an empty string will be returned.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p><b>mb_strcut()</b> returns the portion of <code>string</code> specified by the <code>start</code> and <code>length</code> parameters.</p>
	 * @link https://php.net/manual/en/function.mb-strcut.php
	 * @see mb_substr(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_strcut(string $string, int $start, ?int $length = null, ?string $encoding = null): string {}

	/**
	 * Get truncated string with specified width
	 * <p>Truncates <code>string</code> <code>string</code> to specified <code>width</code>, where halfwidth characters count as <code>1</code>, and fullwidth characters count as <code>2</code>. See &#xBB;&#xA0;http://www.unicode.org/reports/tr11/ for details regarding East Asian character widths.</p>
	 * @param string $string <p>The <code>string</code> being decoded.</p>
	 * @param int $start <p>The start position offset. Number of characters from the beginning of string (first character is 0), or if start is negative, number of characters from the end of the string.</p>
	 * @param int $width <p>The width of the desired trim. Negative widths count from the end of the string.</p>
	 * @param string $trim_marker <p>A string that is added to the end of string when string is truncated.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p>The truncated <code>string</code>. If <code>trim_marker</code> is set, <code>trim_marker</code> replaces the last chars to match the <code>width</code>.</p>
	 * @link https://php.net/manual/en/function.mb-strimwidth.php
	 * @see mb_strwidth(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_strimwidth(string $string, int $start, int $width, string $trim_marker = "", ?string $encoding = null): string {}

	/**
	 * Finds position of first occurrence of a string within another, case insensitive
	 * <p><b>mb_stripos()</b> returns the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> string. Unlike <code>mb_strpos()</code>, <b>mb_stripos()</b> is case-insensitive. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the position of the first occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param int $offset <p>The position in <code>haystack</code> to start searching. A negative offset counts from the end of the string.</p>
	 * @param ?string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return int|false <p>Return the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> string, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.mb-stripos.php
	 * @see stripos(), strpos(), mb_strpos()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function mb_stripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false {}

	/**
	 * Finds first occurrence of a string within another, case insensitive
	 * <p><b>mb_stristr()</b> finds the first occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. Unlike <code>mb_strstr()</code>, <b>mb_stristr()</b> is case-insensitive. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the first occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $before_needle <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>true</code></b>, it returns all of <code>haystack</code> from the beginning to the first occurrence of <code>needle</code> (excluding needle). If set to <b><code>false</code></b>, it returns all of <code>haystack</code> from the first occurrence of <code>needle</code> to the end (including needle).</p>
	 * @param ?string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string|false <p>Returns the portion of <code>haystack</code>, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.mb-stristr.php
	 * @see stristr(), strstr(), mb_strstr()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function mb_stristr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = null): string|false {}

	/**
	 * Get string length
	 * <p>Gets the length of a <code>string</code>.</p>
	 * @param string $string <p>The <code>string</code> being checked for length.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return int <p>Returns the number of characters in <code>string</code> <code>string</code> having character encoding <code>encoding</code>. A multi-byte character is counted as 1.</p>
	 * @link https://php.net/manual/en/function.mb-strlen.php
	 * @see mb_internal_encoding(), grapheme_strlen(), iconv_strlen(), strlen()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_strlen(string $string, ?string $encoding = null): int {}

	/**
	 * Find position of first occurrence of string in a string
	 * <p>Finds position of the first occurrence of a <code>string</code> in a <code>string</code>.</p><p>Performs a multi-byte safe <code>strpos()</code> operation based on number of characters. The first character's position is 0, the second character position is 1, and so on.</p>
	 * @param string $haystack <p>The <code>string</code> being checked.</p>
	 * @param string $needle <p>The string to find in <code>haystack</code>. In contrast with <code>strpos()</code>, numeric values are not applied as the ordinal value of a character.</p>
	 * @param int $offset <p>The search offset. If it is not specified, 0 is used. A negative offset counts from the end of the string.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return int|false <p>Returns the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> <code>string</code>. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.mb-strpos.php
	 * @see mb_internal_encoding(), strpos()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false {}

	/**
	 * Finds the last occurrence of a character in a string within another
	 * <p><b>mb_strrchr()</b> finds the last occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $before_needle <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>true</code></b>, it returns all of <code>haystack</code> from the beginning to the last occurrence of <code>needle</code>. If set to <b><code>false</code></b>, it returns all of <code>haystack</code> from the last occurrence of <code>needle</code> to the end,</p>
	 * @param ?string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string|false <p>Returns the portion of <code>haystack</code>. or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.mb-strrchr.php
	 * @see strrchr(), mb_strstr(), mb_strrichr()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function mb_strrchr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = null): string|false {}

	/**
	 * Finds the last occurrence of a character in a string within another, case insensitive
	 * <p><b>mb_strrichr()</b> finds the last occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. Unlike <code>mb_strrchr()</code>, <b>mb_strrichr()</b> is case-insensitive. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $before_needle <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>true</code></b>, it returns all of <code>haystack</code> from the beginning to the last occurrence of <code>needle</code>. If set to <b><code>false</code></b>, it returns all of <code>haystack</code> from the last occurrence of <code>needle</code> to the end,</p>
	 * @param ?string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string|false <p>Returns the portion of <code>haystack</code>. or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.mb-strrichr.php
	 * @see mb_stristr(), mb_strrchr()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function mb_strrichr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = null): string|false {}

	/**
	 * Finds position of last occurrence of a string within another, case insensitive
	 * <p><b>mb_strripos()</b> performs multi-byte safe <code>strripos()</code> operation based on number of characters. <code>needle</code> position is counted from the beginning of <code>haystack</code>. First character's position is 0. Second character position is 1. Unlike <code>mb_strrpos()</code>, <b>mb_strripos()</b> is case-insensitive.</p>
	 * @param string $haystack <p>The string from which to get the position of the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param int $offset <p>The position in <code>haystack</code> to start searching</p>
	 * @param ?string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return int|false <p>Return the numeric position of the last occurrence of <code>needle</code> in the <code>haystack</code> string, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.mb-strripos.php
	 * @see strripos(), strrpos(), mb_strrpos()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function mb_strripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false {}

	/**
	 * Find position of last occurrence of a string in a string
	 * <p>Performs a multibyte safe <code>strrpos()</code> operation based on the number of characters. <code>needle</code> position is counted from the beginning of <code>haystack</code>. First character's position is 0. Second character position is 1.</p>
	 * @param string $haystack <p>The <code>string</code> being checked, for the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The <code>string</code> to find in <code>haystack</code>.</p>
	 * @param int $offset May be specified to begin searching an arbitrary number of characters into the <code>string</code>. Negative values will stop searching at an arbitrary point prior to the end of the <code>string</code>.
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return int|false <p>Returns the numeric position of the last occurrence of <code>needle</code> in the <code>haystack</code> <code>string</code>. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.mb-strrpos.php
	 * @see mb_strpos(), mb_internal_encoding(), strrpos()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_strrpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false {}

	/**
	 * Finds first occurrence of a string within another
	 * <p><b>mb_strstr()</b> finds the first occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. If <code>needle</code> is not found, it returns <b><code>false</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the first occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $before_needle <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>true</code></b>, it returns all of <code>haystack</code> from the beginning to the first occurrence of <code>needle</code> (excluding needle). If set to <b><code>false</code></b>, it returns all of <code>haystack</code> from the first occurrence of <code>needle</code> to the end (including needle).</p>
	 * @param ?string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string|false <p>Returns the portion of <code>haystack</code>, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.mb-strstr.php
	 * @see stristr(), strstr(), mb_stristr()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function mb_strstr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = null): string|false {}

	/**
	 * Make a string lowercase
	 * <p>Returns <code>string</code> with all alphabetic characters converted to lowercase.</p>
	 * @param string $string <p>The <code>string</code> being lowercased.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p><code>string</code> with all alphabetic characters converted to lowercase.</p>
	 * @link https://php.net/manual/en/function.mb-strtolower.php
	 * @see mb_strtoupper(), mb_convert_case(), strtolower()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_strtolower(string $string, ?string $encoding = null): string {}

	/**
	 * Make a string uppercase
	 * <p>Returns <code>string</code> with all alphabetic characters converted to uppercase.</p>
	 * @param string $string <p>The <code>string</code> being uppercased.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p><code>string</code> with all alphabetic characters converted to uppercase.</p>
	 * @link https://php.net/manual/en/function.mb-strtoupper.php
	 * @see mb_strtolower(), mb_convert_case(), strtoupper()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_strtoupper(string $string, ?string $encoding = null): string {}

	/**
	 * Return width of string
	 * <p>Returns the width of <code>string</code> <code>string</code>, where halfwidth characters count as <code>1</code>, and fullwidth characters count as <code>2</code>. See &#xBB;&#xA0;http://www.unicode.org/reports/tr11/ for details regarding East Asian character widths.</p><p>The fullwidth characters are: <code>U+1100</code>-<code>U+115F</code>, <code>U+11A3</code>-<code>U+11A7</code>, <code>U+11FA</code>-<code>U+11FF</code>, <code>U+2329</code>-<code>U+232A</code>, <code>U+2E80</code>-<code>U+2E99</code>, <code>U+2E9B</code>-<code>U+2EF3</code>, <code>U+2F00</code>-<code>U+2FD5</code>, <code>U+2FF0</code>-<code>U+2FFB</code>, <code>U+3000</code>-<code>U+303E</code>, <code>U+3041</code>-<code>U+3096</code>, <code>U+3099</code>-<code>U+30FF</code>, <code>U+3105</code>-<code>U+312D</code>, <code>U+3131</code>-<code>U+318E</code>, <code>U+3190</code>-<code>U+31BA</code>, <code>U+31C0</code>-<code>U+31E3</code>, <code>U+31F0</code>-<code>U+321E</code>, <code>U+3220</code>-<code>U+3247</code>, <code>U+3250</code>-<code>U+32FE</code>, <code>U+3300</code>-<code>U+4DBF</code>, <code>U+4E00</code>-<code>U+A48C</code>, <code>U+A490</code>-<code>U+A4C6</code>, <code>U+A960</code>-<code>U+A97C</code>, <code>U+AC00</code>-<code>U+D7A3</code>, <code>U+D7B0</code>-<code>U+D7C6</code>, <code>U+D7CB</code>-<code>U+D7FB</code>, <code>U+F900</code>-<code>U+FAFF</code>, <code>U+FE10</code>-<code>U+FE19</code>, <code>U+FE30</code>-<code>U+FE52</code>, <code>U+FE54</code>-<code>U+FE66</code>, <code>U+FE68</code>-<code>U+FE6B</code>, <code>U+FF01</code>-<code>U+FF60</code>, <code>U+FFE0</code>-<code>U+FFE6</code>, <code>U+1B000</code>-<code>U+1B001</code>, <code>U+1F200</code>-<code>U+1F202</code>, <code>U+1F210</code>-<code>U+1F23A</code>, <code>U+1F240</code>-<code>U+1F248</code>, <code>U+1F250</code>-<code>U+1F251</code>, <code>U+20000</code>-<code>U+2FFFD</code>, <code>U+30000</code>-<code>U+3FFFD</code>. All other characters are halfwidth characters.</p>
	 * @param string $string <p>The <code>string</code> being decoded.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return int <p>The width of <code>string</code> <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-strwidth.php
	 * @see mb_strimwidth(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_strwidth(string $string, ?string $encoding = null): int {}

	/**
	 * Set/Get substitution character
	 * <p>Specifies a substitution character when input character encoding is invalid or character code does not exist in output character encoding. Invalid characters may be substituted <code>"none"</code> (no output), <code>string</code> or <code>int</code> value (Unicode character code value).</p><p>This setting affects <code>mb_convert_encoding()</code>, <code>mb_convert_variables()</code>, <code>mb_output_handler()</code>, and <code>mb_send_mail()</code>.</p>
	 * @param string|int|null $substitute_character <p>Specify the Unicode value as an <code>int</code>, or as one of the following <code>string</code>s:</p><ul> <li>  <code>"none"</code>: no output  </li> <li>  <code>"long"</code>: Output character code value (Example: <code>U+3000</code>, <code>JIS+7E7E</code>)  </li> <li>  <code>"entity"</code>: Output character entity (Example: <code>&amp;#x200;</code>)  </li> </ul>
	 * @return string|int|bool <p>If <code>substitute_character</code> is set, it returns <b><code>true</code></b> for success, otherwise returns <b><code>false</code></b>. If <code>substitute_character</code> is not set, it returns the current setting.</p>
	 * @link https://php.net/manual/en/function.mb-substitute-character.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_substitute_character(string|int|null $substitute_character = null): string|int|bool {}

	/**
	 * Get part of string
	 * <p>Performs a multi-byte safe <code>substr()</code> operation based on number of characters. Position is counted from the beginning of <code>string</code>. First character's position is 0. Second character position is 1, and so on.</p>
	 * @param string $string <p>The <code>string</code> to extract the substring from.</p>
	 * @param int $start <p>If <code>start</code> is non-negative, the returned string will start at the <code>start</code>'th position in <code>string</code>, counting from zero. For instance, in the string '<code>abcdef</code>', the character at position <code>0</code> is '<code>a</code>', the character at position <code>2</code> is '<code>c</code>', and so forth.</p> <p>If <code>start</code> is negative, the returned string will start at the <code>start</code>'th character from the end of <code>string</code>.</p>
	 * @param ?int $length <p>Maximum number of characters to use from <code>string</code>. If omitted or <code>NULL</code> is passed, extract all characters to the end of the string.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return string <p><b>mb_substr()</b> returns the portion of <code>string</code> specified by the <code>start</code> and <code>length</code> parameters.</p>
	 * @link https://php.net/manual/en/function.mb-substr.php
	 * @see mb_strcut(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function mb_substr(string $string, int $start, ?int $length = null, ?string $encoding = null): string {}

	/**
	 * Count the number of substring occurrences
	 * <p>Counts the number of times the <code>needle</code> substring occurs in the <code>haystack</code> <code>string</code>.</p>
	 * @param string $haystack <p>The <code>string</code> being checked.</p>
	 * @param string $needle <p>The <code>string</code> being found.</p>
	 * @param ?string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted or <b><code>null</code></b>, the internal character encoding value will be used.</p>
	 * @return int <p>The number of times the <code>needle</code> substring occurs in the <code>haystack</code> <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.mb-substr-count.php
	 * @see mb_strpos(), mb_substr(), substr_count()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function mb_substr_count(string $haystack, string $needle, ?string $encoding = null): int {}

	/**
	 * Performs a full case fold conversion which removes case distinctions present in the string. This is used for caseless matching. This may change the length of the string. Available since PHP 7.3.
	 */
	define('MB_CASE_FOLD', 3);

	/**
	 * Performs a simple case fold conversion which removes case distinctions present in the string. This is used for caseless matching. This does not change the length of the string. Used by case-insensitive operations internally by the MBString extension. Available as of PHP 7.3.
	 */
	define('MB_CASE_FOLD_SIMPLE', 7);

	/**
	 * Performs a full lower-case folding. This may change the length of the string. This is the mode used by mb_strtolower().
	 */
	define('MB_CASE_LOWER', 1);

	/**
	 * Performs a simple lower-case fold conversion. This does not change the length of the string. Available as of PHP 7.3.
	 */
	define('MB_CASE_LOWER_SIMPLE', 5);

	/**
	 * Performs a full title-case conversion based on the Cased and CaseIgnorable derived Unicode properties. In particular this improves handling of quotes and apostrophes. This may change the length of the string.
	 */
	define('MB_CASE_TITLE', 2);

	/**
	 * Performs simple title-case fold conversion. This does not change the length of the string. Available as of PHP 7.3.
	 */
	define('MB_CASE_TITLE_SIMPLE', 6);

	/**
	 * Performs a full upper-case folding. This may change the length of the string. This is the mode used by mb_strtoupper().
	 */
	define('MB_CASE_UPPER', 0);

	/**
	 * Performs simple upper-case fold conversion. This does not change the length of the string. Available as of PHP 7.3.
	 */
	define('MB_CASE_UPPER_SIMPLE', 4);

	/**
	 * The Oniguruma version, e.g. <code>6.9.4</code>. Available as of PHP 7.4.
	 */
	define('MB_ONIGURUMA_VERSION', '6.9.7');

	/**
	 * Removed as of PHP 8.0.0.
	 */
	define('MB_OVERLOAD_MAIL', null);

	/**
	 * Removed as of PHP 8.0.0.
	 */
	define('MB_OVERLOAD_REGEX', null);

	/**
	 * Removed as of PHP 8.0.0.
	 */
	define('MB_OVERLOAD_STRING', null);

}
