<?php



namespace {

	/**
	 * Check if the string is valid for the specified encoding
	 * <p>Checks if the specified byte stream is valid for the specified encoding. It is useful to prevent so-called "Invalid Encoding Attack".</p><p></p>
	 * @param string $var <p>The byte stream to check. If it is omitted, this function checks all the input from the beginning of the request.</p>
	 * @param string $encoding <p>The expected encoding.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-check-encoding.php
	 * @since PHP 4 >= 4.4.3, PHP 5 >= 5.1.3, PHP 7
	 */
	function mb_check_encoding(string $var = NULL, string $encoding = 'mb_internal_encoding()'): bool {}

	/**
	 * Get a specific character
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $cp
	 * @param string $encoding
	 * @return string <p>Returns a specific character or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-chr.php
	 * @see mb_ord(), chr()
	 * @since PHP 7 >= 7.2.0
	 */
	function mb_chr(int $cp, string $encoding = NULL): string {}

	/**
	 * Perform case folding on a string
	 * <p>Performs case folding on a <code>string</code>, converted in the way specified by <code>mode</code>.</p>
	 * @param string $str <p>The <code>string</code> being converted.</p>
	 * @param int $mode <p>The mode of the conversion. It can be one of <b><code>MB_CASE_UPPER</code></b>, <b><code>MB_CASE_LOWER</code></b>, or <b><code>MB_CASE_TITLE</code></b>.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p>A case folded version of <code>string</code> converted in the way specified by <code>mode</code>.</p>
	 * @link http://php.net/manual/en/function.mb-convert-case.php
	 * @see mb_strtolower(), mb_strtoupper(), strtolower(), strtoupper(), ucfirst(), ucwords()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function mb_convert_case(string $str, int $mode, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Convert character encoding
	 * <p>Converts the character encoding of <code>string</code> <code>str</code> to <code>to_encoding</code> from optionally <code>from_encoding</code>.</p>
	 * @param string $str <p>The <code>string</code> being encoded.</p>
	 * @param string $to_encoding <p>The type of encoding that <code>str</code> is being converted to.</p>
	 * @param mixed $from_encoding <p>Is specified by character code names before conversion. It is either an <code>array</code>, or a comma separated enumerated list. If <code>from_encoding</code> is not specified, the internal encoding will be used.</p> <p>See supported encodings.</p>
	 * @return string <p>The encoded <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.mb-convert-encoding.php
	 * @see mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_convert_encoding(string $str, string $to_encoding, $from_encoding  = 'mb_internal_encoding()'): string {}

	/**
	 * Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
	 * <p>Performs a "han-kaku" - "zen-kaku" conversion for <code>string</code> <code>str</code>. This function is only useful for Japanese.</p>
	 * @param string $str <p>The <code>string</code> being converted.</p>
	 * @param string $option <p>The conversion option.</p> <p>Specify with a combination of following options.</p> <b>Applicable Conversion Options</b>   Option Meaning     <i>r</i>  Convert "zen-kaku" alphabets to "han-kaku"    <i>R</i>  Convert "han-kaku" alphabets to "zen-kaku"    <i>n</i>  Convert "zen-kaku" numbers to "han-kaku"    <i>N</i>  Convert "han-kaku" numbers to "zen-kaku"    <i>a</i>  Convert "zen-kaku" alphabets and numbers to "han-kaku"    <i>A</i>  Convert "han-kaku" alphabets and numbers to "zen-kaku" (Characters included in "a", "A" options are U+0021 - U+007E excluding U+0022, U+0027, U+005C, U+007E)    <i>s</i>  Convert "zen-kaku" space to "han-kaku" (U+3000 -&gt; U+0020)    <i>S</i>  Convert "han-kaku" space to "zen-kaku" (U+0020 -&gt; U+3000)    <i>k</i>  Convert "zen-kaku kata-kana" to "han-kaku kata-kana"    <i>K</i>  Convert "han-kaku kata-kana" to "zen-kaku kata-kana"    <i>h</i>  Convert "zen-kaku hira-gana" to "han-kaku kata-kana"    <i>H</i>  Convert "han-kaku kata-kana" to "zen-kaku hira-gana"    <i>c</i>  Convert "zen-kaku kata-kana" to "zen-kaku hira-gana"    <i>C</i>  Convert "zen-kaku hira-gana" to "zen-kaku kata-kana"    <i>V</i>  Collapse voiced sound notation and convert them into a character. Use with "K","H"
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.mb-convert-kana.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_convert_kana(string $str, string $option = "KV", string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Convert character code in variable(s)
	 * <p>Converts character encoding of variables <code>vars</code> in encoding <code>from_encoding</code> to encoding <code>to_encoding</code>.</p><p><b>mb_convert_variables()</b> join strings in Array or Object to detect encoding, since encoding detection tends to fail for short strings. Therefore, it is impossible to mix encoding in single array or object.</p>
	 * @param string $to_encoding <p>The encoding that the <code>string</code> is being converted to.</p>
	 * @param mixed $from_encoding <p><code>from_encoding</code> is specified as an <code>array</code> or comma separated <code>string</code>, it tries to detect encoding from <code>from-coding</code>. When <code>from_encoding</code> is omitted, <i>detect_order</i> is used.</p>
	 * @param mixed $vars <p><code>vars</code> is the reference to the variable being converted. String, Array and Object are accepted. <b>mb_convert_variables()</b> assumes all parameters have the same encoding.</p>
	 * @param mixed $_ <p>Additional <code>vars</code>.</p>
	 * @return string <p>The character encoding before conversion for success, or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.mb-convert-variables.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_convert_variables(string $to_encoding, $from_encoding, &$vars, &$_ = NULL): string {}

	/**
	 * Decode string in MIME header field
	 * <p>Decodes encoded-word <code>string</code> <code>str</code> in MIME header.</p>
	 * @param string $str <p>The <code>string</code> being decoded.</p>
	 * @return string <p>The decoded <code>string</code> in internal character encoding.</p>
	 * @link http://php.net/manual/en/function.mb-decode-mimeheader.php
	 * @see mb_encode_mimeheader()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_decode_mimeheader(string $str): string {}

	/**
	 * Decode HTML numeric string reference to character
	 * <p>Convert numeric string reference of <code>string</code> <code>str</code> in a specified block to character.</p>
	 * @param string $str <p>The <code>string</code> being decoded.</p>
	 * @param array $convmap <p><code>convmap</code> is an <code>array</code> that specifies the code area to convert.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @param bool $is_hex
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.mb-decode-numericentity.php
	 * @see mb_encode_numericentity()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_decode_numericentity(string $str, array $convmap, string $encoding = 'mb_internal_encoding()', bool $is_hex = FALSE): string {}

	/**
	 * Detect character encoding
	 * <p>Detects character encoding in <code>string</code> <code>str</code>.</p>
	 * @param string $str <p>The <code>string</code> being detected.</p>
	 * @param mixed $encoding_list <p><code>encoding_list</code> is list of character encoding. Encoding order may be specified by array or comma separated list string.</p> <p>If <code>encoding_list</code> is omitted, detect_order is used.</p>
	 * @param bool $strict <p><code>strict</code> specifies whether to use the strict encoding detection or not. Default is <b><code>FALSE</code></b>.</p>
	 * @return string <p>The detected character encoding or <b><code>FALSE</code></b> if the encoding cannot be detected from the given string.</p>
	 * @link http://php.net/manual/en/function.mb-detect-encoding.php
	 * @see mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_detect_encoding(string $str, $encoding_list  = 'mb_detect_order()', bool $strict = FALSE): string {}

	/**
	 * Set/Get character encoding detection order
	 * <p>Sets the automatic character encoding detection order to <code>encoding_list</code>.</p>
	 * @param mixed $encoding_list <p><code>encoding_list</code> is an <code>array</code> or comma separated list of character encoding. See supported encodings.</p> <p>If <code>encoding_list</code> is omitted, it returns the current character encoding detection order as array.</p> <p>This setting affects <code>mb_detect_encoding()</code> and <code>mb_send_mail()</code>.</p> <p><i>mbstring</i> currently implements the following encoding detection filters. If there is an invalid byte sequence for the following encodings, encoding detection will fail.</p>  <i>UTF-8</i>, <i>UTF-7</i>, <i>ASCII</i>, <i>EUC-JP</i>,<i>SJIS</i>, <i>eucJP-win</i>, <i>SJIS-win</i>, <i>JIS</i>, <i>ISO-2022-JP</i>  <p>For <i>ISO-8859-&#42;</i>, <i>mbstring</i> always detects as <i>ISO-8859-&#42;</i>.</p> <p>For <i>UTF-16</i>, <i>UTF-32</i>, <i>UCS2</i> and <i>UCS4</i>, encoding detection will fail always.</p>
	 * @return mixed <p>When setting the encoding detection order, <b><code>TRUE</code></b> is returned on success or <b><code>FALSE</code></b> on failure.</p><p>When getting the encoding detection order, an ordered array of the encodings is returned.</p>
	 * @link http://php.net/manual/en/function.mb-detect-order.php
	 * @see mb_internal_encoding(), mb_http_input(), mb_http_output(), mb_send_mail()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_detect_order($encoding_list  = 'mb_detect_order()') {}

	/**
	 * Encode string for MIME header
	 * <p>Encodes a given <code>string</code> <code>str</code> by the MIME header encoding scheme.</p>
	 * @param string $str <p>The <code>string</code> being encoded. Its encoding should be same as <code>mb_internal_encoding()</code>.</p>
	 * @param string $charset <p><code>charset</code> specifies the name of the character set in which <code>str</code> is represented in. The default value is determined by the current NLS setting (<i>mbstring.language</i>).</p>
	 * @param string $transfer_encoding <p><code>transfer_encoding</code> specifies the scheme of MIME encoding. It should be either <i>"B"</i> (Base64) or <i>"Q"</i> (Quoted-Printable). Falls back to <i>"B"</i> if not given.</p>
	 * @param string $linefeed <p><code>linefeed</code> specifies the EOL (end-of-line) marker with which <b>mb_encode_mimeheader()</b> performs line-folding (a RFC term, the act of breaking a line longer than a certain length into multiple lines. The length is currently hard-coded to 74 characters). Falls back to <i>"\r\n"</i> (CRLF) if not given.</p>
	 * @param int $indent <p>Indentation of the first line (number of characters in the header before <code>str</code>).</p>
	 * @return string <p>A converted version of the <code>string</code> represented in ASCII.</p>
	 * @link http://php.net/manual/en/function.mb-encode-mimeheader.php
	 * @see mb_decode_mimeheader()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_encode_mimeheader(string $str, string $charset = 'determined by mb_language()', string $transfer_encoding = "B", string $linefeed = "\r\n", int $indent = 0): string {}

	/**
	 * Encode character to HTML numeric string reference
	 * <p>Converts specified character codes in <code>string</code> <code>str</code> from character code to HTML numeric character reference.</p>
	 * @param string $str <p>The <code>string</code> being encoded.</p>
	 * @param array $convmap <p><code>convmap</code> is array specifies code area to convert.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @param bool $is_hex
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.mb-encode-numericentity.php
	 * @see mb_decode_numericentity()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_encode_numericentity(string $str, array $convmap, string $encoding = 'mb_internal_encoding()', bool $is_hex = FALSE): string {}

	/**
	 * Get aliases of a known encoding type
	 * <p>Returns an array of aliases for a known <code>encoding</code> type.</p>
	 * @param string $encoding <p>The encoding type being checked, for aliases.</p>
	 * @return array <p>Returns a numerically indexed array of encoding aliases on success, or <b><code>FALSE</code></b> on failure</p>
	 * @link http://php.net/manual/en/function.mb-encoding-aliases.php
	 * @see mb_list_encodings()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function mb_encoding_aliases(string $encoding): array {}

	/**
	 * Regular expression match with multibyte support
	 * <p>Executes the regular expression match with multibyte support.</p>
	 * @param string $pattern <p>The search pattern.</p>
	 * @param string $string <p>The search <code>string</code>.</p>
	 * @param array $regs <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>regs</code>, the matches will be stored in the elements of the array <code>regs</code>. If no matches are found, <code>regs</code> is set to an empty array.</p> <p>$regs[1] will contain the substring which starts at the first left parenthesis; $regs[2] will contain the substring starting at the second, and so on. $regs[0] will contain a copy of the complete string matched.</p>
	 * @return int <p>Returns the byte length of the matched string if a match for <code>pattern</code> was found in <code>string</code>, or <b><code>FALSE</code></b> if no matches were found or an error occurred.</p><p>If the optional parameter <code>regs</code> was not passed or the length of the matched string is <i>0</i>, this function returns <i>1</i>.</p>
	 * @link http://php.net/manual/en/function.mb-ereg.php
	 * @see mb_regex_encoding(), mb_eregi()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg(string $pattern, string $string, array &$regs = NULL): int {}

	/**
	 * Regular expression match for multibyte string
	 * <p>A regular expression match for a multibyte string</p>
	 * @param string $pattern <p>The regular expression pattern.</p>
	 * @param string $string <p>The <code>string</code> being evaluated.</p>
	 * @param string $option <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>string</code> matches the regular expression <code>pattern</code>, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-match.php
	 * @see mb_regex_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_match(string $pattern, string $string, string $option = "msr"): bool {}

	/**
	 * Replace regular expression with multibyte support
	 * <p>Scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with <code>replacement</code></p>
	 * @param string $pattern <p>The regular expression pattern.</p> <p>Multibyte characters may be used in <code>pattern</code>.</p>
	 * @param string $replacement <p>The replacement text.</p>
	 * @param string $string <p>The <code>string</code> being checked.</p>
	 * @param string $option The search option. See <code>mb_regex_set_options()</code> for explanation.
	 * @return string <p>The resultant <code>string</code> on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-replace.php
	 * @see mb_regex_encoding(), mb_eregi_replace()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_replace(string $pattern, string $replacement, string $string, string $option = "msr"): string {}

	/**
	 * Perform a regular expresssion seach and replace with multibyte support using a callback
	 * <p>Scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with the output of <code>callback</code> function.</p><p>The behavior of this function is almost identical to <code>mb_ereg_replace()</code>, except for the fact that instead of <code>replacement</code> parameter, one should specify a <code>callback</code>.</p>
	 * @param string $pattern <p>The regular expression pattern.</p> <p>Multibyte characters may be used in <code>pattern</code>.</p>
	 * @param callable $callback <p>A callback that will be called and passed an array of matched elements in the <code>subject</code> string. The callback should return the replacement string.</p> <p>You'll often need the <code>callback</code> function for a <b>mb_ereg_replace_callback()</b> in just one place. In this case you can use an anonymous function to declare the callback within the call to <b>mb_ereg_replace_callback()</b>. By doing it this way you have all information for the call in one place and do not clutter the function namespace with a callback function's name not used anywhere else.</p>
	 * @param string $string <p>The <code>string</code> being checked.</p>
	 * @param string $option <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return string <p>The resultant <code>string</code> on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-replace-callback.php
	 * @see mb_regex_encoding(), mb_ereg_replace()
	 * @since PHP 5 >= 5.4.1, PHP 7
	 */
	function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, string $option = "msr"): string {}

	/**
	 * Multibyte regular expression match for predefined multibyte string
	 * <p>Performs a multibyte regular expression match for a predefined multibyte string.</p>
	 * @param string $pattern <p>The search pattern.</p>
	 * @param string $option <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return bool <p><b>mb_ereg_search()</b> returns <b><code>TRUE</code></b> if the multibyte string matches with the regular expression, or <b><code>FALSE</code></b> otherwise. The <code>string</code> for matching is set by <code>mb_ereg_search_init()</code>. If <code>pattern</code> is not specified, the previous one is used.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search(string $pattern = NULL, string $option = "ms"): bool {}

	/**
	 * Returns start point for next regular expression match
	 * <p>Returns the start point for the next regular expression match.</p>
	 * @return int <p><b>mb_ereg_search_getpos()</b> returns the point to start regular expression match for <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code>. The position is represented by bytes from the head of string.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search-getpos.php
	 * @see mb_regex_encoding(), mb_ereg_search_setpos()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search_getpos(): int {}

	/**
	 * Retrieve the result from the last multibyte regular expression match
	 * <p>Retrieve the result from the last multibyte regular expression match</p>
	 * @return array <p>An <code>array</code> including the sub-string of matched part by last <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, <code>mb_ereg_search_regs()</code>. If there are some matches, the first element will have the matched sub-string, the second element will have the first part grouped with brackets, the third element will have the second part grouped with brackets, and so on. It returns <b><code>FALSE</code></b> on error;</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search-getregs.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search_getregs(): array {}

	/**
	 * Setup string and regular expression for a multibyte regular expression match
	 * <p><b>mb_ereg_search_init()</b> sets <code>string</code> and <code>pattern</code> for a multibyte regular expression. These values are used for <code>mb_ereg_search()</code>, <code>mb_ereg_search_pos()</code>, and <code>mb_ereg_search_regs()</code>.</p>
	 * @param string $string <p>The search string.</p>
	 * @param string $pattern <p>The search pattern.</p>
	 * @param string $option <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search-init.php
	 * @see mb_regex_encoding(), mb_ereg_search_regs()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search_init(string $string, string $pattern = NULL, string $option = "msr"): bool {}

	/**
	 * Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
	 * <p>Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string</p><p>The string for match is specified by <code>mb_ereg_search_init()</code>. If it is not specified, the previous one will be used.</p>
	 * @param string $pattern <p>The search pattern.</p>
	 * @param string $option <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return array <p>An <code>array</code> containing two elements. The first element is the offset, in bytes, where the match begins relative to the start of the search string, and the second element is the length in bytes of the match.</p><p>If an error occurs, <b><code>FALSE</code></b> is returned.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search-pos.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search_pos(string $pattern = NULL, string $option = "ms"): array {}

	/**
	 * Returns the matched part of a multibyte regular expression
	 * <p>Returns the matched part of a multibyte regular expression.</p>
	 * @param string $pattern <p>The search pattern.</p>
	 * @param string $option <p>The search option. See <code>mb_regex_set_options()</code> for explanation.</p>
	 * @return array <p><b>mb_ereg_search_regs()</b> executes the multibyte regular expression match, and if there are some matched part, it returns an <code>array</code> including substring of matched part as first element, the first grouped part with brackets as second element, the second grouped part as third element, and so on. It returns <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search-regs.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search_regs(string $pattern = NULL, string $option = "ms"): array {}

	/**
	 * Set start point of next regular expression match
	 * <p><b>mb_ereg_search_setpos()</b> sets the starting point of a match for <code>mb_ereg_search()</code>.</p>
	 * @param int $position <p>The position to set. If it is negative, it counts from the end of the string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-ereg-search-setpos.php
	 * @see mb_regex_encoding(), mb_ereg_search_init()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_ereg_search_setpos(int $position): bool {}

	/**
	 * Regular expression match ignoring case with multibyte support
	 * <p>Executes the case insensitive regular expression match with multibyte support.</p>
	 * @param string $pattern <p>The regular expression pattern.</p>
	 * @param string $string <p>The <code>string</code> being searched.</p>
	 * @param array $regs <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>regs</code>, the matches will be stored in the elements of the array <code>regs</code>. If no matches are found, <code>regs</code> is set to an empty array.</p> <p>$regs[1] will contain the substring which starts at the first left parenthesis; $regs[2] will contain the substring starting at the second, and so on. $regs[0] will contain a copy of the complete string matched.</p>
	 * @return int <p>Returns the byte length of the matched string if a match for <code>pattern</code> was found in <code>string</code>, or <b><code>FALSE</code></b> if no matches were found or an error occurred.</p><p>If the optional parameter <code>regs</code> was not passed or the length of the matched string is <i>0</i>, this function returns <i>1</i>.</p>
	 * @link http://php.net/manual/en/function.mb-eregi.php
	 * @see mb_regex_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_eregi(string $pattern, string $string, array &$regs = NULL): int {}

	/**
	 * Replace regular expression with multibyte support ignoring case
	 * <p>Scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with <code>replacement</code>.</p>
	 * @param string $pattern <p>The regular expression pattern. Multibyte characters may be used. The case will be ignored.</p>
	 * @param string $replace <p>The replacement text.</p>
	 * @param string $string <p>The searched <code>string</code>.</p>
	 * @param string $option The search option. See <code>mb_regex_set_options()</code> for explanation.
	 * @return string <p>The resultant <code>string</code> or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.mb-eregi-replace.php
	 * @see mb_regex_encoding(), mb_ereg_replace()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_eregi_replace(string $pattern, string $replace, string $string, string $option = "msri"): string {}

	/**
	 * Get internal settings of mbstring
	 * <p><b>mb_get_info()</b> returns the internal setting parameters of mbstring.</p>
	 * @param string $type <p>If <code>type</code> isn't specified or is specified to "all", an <code>array</code> having the elements "internal_encoding", "http_output", "http_input", "func_overload", "mail_charset", "mail_header_encoding", "mail_body_encoding" will be returned.</p> <p>If <code>type</code> is specified as "http_output", "http_input", "internal_encoding", "func_overload", the specified setting parameter will be returned.</p>
	 * @return mixed <p>An <code>array</code> of type information if <code>type</code> is not specified, otherwise a specific <code>type</code>.</p>
	 * @link http://php.net/manual/en/function.mb-get-info.php
	 * @see mb_regex_encoding(), mb_http_output()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_get_info(string $type = "all") {}

	/**
	 * Detect HTTP input character encoding
	 * <p>Detects the HTTP input character encoding.</p>
	 * @param string $type <p>Input string specifies the input type. "G" for GET, "P" for POST, "C" for COOKIE, "S" for string, "L" for list, and "I" for the whole list (will return <code>array</code>). If type is omitted, it returns the last input type processed.</p>
	 * @return mixed <p>The character encoding name, as per the <code>type</code>. If <b>mb_http_input()</b> does not process specified HTTP input, it returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.mb-http-input.php
	 * @see mb_internal_encoding(), mb_http_output(), mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_http_input(string $type = "") {}

	/**
	 * Set/Get HTTP output character encoding
	 * <p>Set/Get the HTTP output character encoding. Output after this function is called will be converted from the set internal encoding to <code>encoding</code>.</p>
	 * @param string $encoding <p>If <code>encoding</code> is set, <b>mb_http_output()</b> sets the HTTP output character encoding to <code>encoding</code>.</p> <p>If <code>encoding</code> is omitted, <b>mb_http_output()</b> returns the current HTTP output character encoding.</p>
	 * @return mixed <p>If <code>encoding</code> is omitted, <b>mb_http_output()</b> returns the current HTTP output character encoding. Otherwise, Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-http-output.php
	 * @see mb_internal_encoding(), mb_http_input(), mb_detect_order()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_http_output(string $encoding = 'mb_http_output()') {}

	/**
	 * Set/Get internal character encoding
	 * <p>Set/Get the internal character encoding</p>
	 * @param string $encoding <p><code>encoding</code> is the character encoding name used for the HTTP input character encoding conversion, HTTP output character encoding conversion, and the default character encoding for string functions defined by the mbstring module. You should notice that the internal encoding is totally different from the one for multibyte regex.</p>
	 * @return mixed <p>If <code>encoding</code> is set, then Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. In this case, the character encoding for multibyte regex is NOT changed. If <code>encoding</code> is omitted, then the current character encoding name is returned.</p>
	 * @link http://php.net/manual/en/function.mb-internal-encoding.php
	 * @see mb_http_input(), mb_http_output(), mb_detect_order(), mb_regex_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_internal_encoding(string $encoding = 'mb_internal_encoding()') {}

	/**
	 * Set/Get current language
	 * <p>Set/Get the current language.</p>
	 * @param string $language <p>Used for encoding e-mail messages. Valid languages are "Japanese", "ja","English","en" and "uni" (UTF-8). <code>mb_send_mail()</code> uses this setting to encode e-mail.</p> <p>Language and its setting is ISO-2022-JP/Base64 for Japanese, UTF-8/Base64 for uni, ISO-8859-1/quoted printable for English.</p>
	 * @return mixed <p>If <code>language</code> is set and <code>language</code> is valid, it returns <b><code>TRUE</code></b>. Otherwise, it returns <b><code>FALSE</code></b>. When <code>language</code> is omitted, it returns the language name as a <code>string</code>. If no language is set previously, it then returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.mb-language.php
	 * @see mb_send_mail()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_language(string $language = 'mb_language()') {}

	/**
	 * Returns an array of all supported encodings
	 * <p>Returns an array containing all supported encodings.</p>
	 * @return array <p>Returns a numerically indexed array.</p>
	 * @link http://php.net/manual/en/function.mb-list-encodings.php
	 * @since PHP 5, PHP 7
	 */
	function mb_list_encodings(): array {}

	/**
	 * Get code point of character
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $str
	 * @param string $encoding
	 * @return int <p>Returns a code point of character or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-ord.php
	 * @see mb_chr(), ord()
	 * @since PHP 7 >= 7.2.0
	 */
	function mb_ord(string $str, string $encoding = NULL): int {}

	/**
	 * Callback function converts character encoding in output buffer
	 * <p><b>mb_output_handler()</b> is <code>ob_start()</code> callback function. <b>mb_output_handler()</b> converts characters in the output buffer from internal character encoding to HTTP output character encoding.</p>
	 * @param string $contents <p>The contents of the output buffer.</p>
	 * @param int $status <p>The status of the output buffer.</p>
	 * @return string <p>The converted <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.mb-output-handler.php
	 * @see ob_start()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_output_handler(string $contents, int $status): string {}

	/**
	 * Parse GET/POST/COOKIE data and set global variable
	 * <p>Parses GET/POST/COOKIE data and sets global variables. Since PHP does not provide raw POST/COOKIE data, it can only be used for GET data for now. It parses URL encoded data, detects encoding, converts coding to internal encoding and set values to the <code>result</code> <code>array</code> or global variables.</p>
	 * @param string $encoded_string <p>The URL encoded data.</p>
	 * @param array $result <p>An <code>array</code> containing decoded and character encoded converted values.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-parse-str.php
	 * @see mb_detect_order(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_parse_str(string $encoded_string, array &$result = NULL): bool {}

	/**
	 * Get MIME charset string
	 * <p>Get a MIME charset <code>string</code> for a specific encoding.</p>
	 * @param string $encoding <p>The encoding being checked.</p>
	 * @return string <p>The MIME <i>charset</i> <code>string</code> for character encoding <code>encoding</code>.</p>
	 * @link http://php.net/manual/en/function.mb-preferred-mime-name.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_preferred_mime_name(string $encoding): string {}

	/**
	 * Set/Get character encoding for multibyte regex
	 * <p>Set/Get character encoding for a multibyte regex.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return mixed <p>If <code>encoding</code> is set, then Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. In this case, the internal character encoding is NOT changed. If <code>encoding</code> is omitted, then the current character encoding name for a multibyte regex is returned.</p>
	 * @link http://php.net/manual/en/function.mb-regex-encoding.php
	 * @see mb_internal_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_regex_encoding(string $encoding = 'mb_regex_encoding()') {}

	/**
	 * Set/Get the default options for mbregex functions
	 * <p>Sets the default options described by <code>options</code> for multibyte regex functions.</p>
	 * @param string $options <p>The options to set. This is a string where each character is an option. To set a mode, the mode character must be the last one set, however there can only be set one mode but multiple options.</p>  <b>Regex options</b>   Option Meaning     i Ambiguity match on   x Enables extended pattern form   m <i>'.'</i> matches with newlines   s <i>'^'</i> -&gt; <i>'\A'</i>, <i>'$'</i> -&gt; <i>'\Z'</i>   p Same as both the <i>m</i> and <i>s</i> options   l Finds longest matches   n Ignores empty matches   e <code>eval()</code> resulting code     <b>Regex syntax modes</b>   Mode Meaning     j Java (Sun java.util.regex)   u GNU regex   g grep   c Emacs   r Ruby   z Perl   b POSIX Basic regex   d POSIX Extended regex
	 * @return string <p>The previous options. If <code>options</code> is omitted, it returns the <code>string</code> that describes the current options.</p>
	 * @link http://php.net/manual/en/function.mb-regex-set-options.php
	 * @see mb_split(), mb_ereg(), mb_eregi()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function mb_regex_set_options(string $options = 'mb_regex_set_options()'): string {}

	/**
	 * Description
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $str
	 * @param string $encoding
	 * @return string
	 * @link http://php.net/manual/en/function.mb-scrub.php
	 * @since PHP 7 >= 7.2.0
	 */
	function mb_scrub(string $str, string $encoding = NULL): string {}

	/**
	 * Send encoded mail
	 * <p>Sends email. Headers and messages are converted and encoded according to the <code>mb_language()</code> setting. It's a wrapper function for <code>mail()</code>, so see also <code>mail()</code> for details.</p>
	 * @param string $to <p>The mail addresses being sent to. Multiple recipients may be specified by putting a comma between each address in <code>to</code>. This parameter is not automatically encoded.</p>
	 * @param string $subject <p>The subject of the mail.</p>
	 * @param string $message <p>The message of the mail.</p>
	 * @param mixed $additional_headers <p><code>String</code> or <code>array</code> to be inserted at the end of the email header.</p> <p>This is typically used to add extra headers (From, Cc, and Bcc). Multiple extra headers should be separated with a CRLF (\r\n). Validate parameter not to be injected unwanted headers by attackers.</p> <p>If an <code>array</code> is passed, its keys are the header names and its values are the respective header values.</p> <p><b>Note</b>:</p><p>When sending mail, the mail <i>must</i> contain a <i>From</i> header. This can be set with the <code>additional_headers</code> parameter, or a default can be set in php.ini.</p> <p>Failing to do this will result in an error message similar to <i>Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing</i>. The <i>From</i> header sets also <i>Return-Path</i> under Windows.</p>  <p><b>Note</b>:</p><p>If messages are not received, try using a LF (\n) only. Some Unix mail transfer agents (most notably qmail) replace LF by CRLF automatically (which leads to doubling CR if CRLF is used). This should be a last resort, as it does not comply with RFC 2822.</p>
	 * @param string $additional_parameter <p><code>additional_parameter</code> is a MTA command line parameter. It is useful when setting the correct Return-Path header when using sendmail.</p> <p>This parameter is escaped by <code>escapeshellcmd()</code> internally to prevent command execution. <code>escapeshellcmd()</code> prevents command execution, but allows to add addtional parameters. For security reason, this parameter should be validated.</p> <p>Since <code>escapeshellcmd()</code> is applied automatically, some characters that are allowed as email addresses by internet RFCs cannot be used. Programs that are required to use these characters <code>mail()</code> cannot be used.</p> <p>The user that the webserver runs as should be added as a trusted user to the sendmail configuration to prevent a 'X-Warning' header from being added to the message when the envelope sender (-f) is set using this method. For sendmail users, this file is /etc/mail/trusted-users.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.mb-send-mail.php
	 * @see mail(), mb_encode_mimeheader(), mb_language()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_send_mail(string $to, string $subject, string $message, $additional_headers = NULL, string $additional_parameter = NULL): bool {}

	/**
	 * Split multibyte string using regular expression
	 * <p>Split a multibyte <code>string</code> using regular expression <code>pattern</code> and returns the result as an <code>array</code>.</p>
	 * @param string $pattern <p>The regular expression pattern.</p>
	 * @param string $string <p>The <code>string</code> being split.</p>
	 * @param int $limit If optional parameter <code>limit</code> is specified, it will be split in <code>limit</code> elements as maximum.
	 * @return array <p>The result as an <code>array</code>.</p>
	 * @link http://php.net/manual/en/function.mb-split.php
	 * @see mb_regex_encoding(), mb_ereg()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function mb_split(string $pattern, string $string, int $limit = -1): array {}

	/**
	 * Get part of string
	 * <p><b>mb_strcut()</b> extracts a substring from a string similarly to <code>mb_substr()</code>, but operates on bytes instead of characters. If the cut position happens to be between two bytes of a multi-byte character, the cut is performed starting from the first byte of that character. This is also the difference to the <code>substr()</code> function, which would simply cut the string between the bytes and thus result in a malformed byte sequence.</p>
	 * @param string $str <p>The <code>string</code> being cut.</p>
	 * @param int $start <p>If <code>start</code> is non-negative, the returned string will start at the <code>start</code>'th <i>byte</i> position in <code>str</code>, counting from zero. For instance, in the string '<i>abcdef</i>', the byte at position <i>0</i> is '<i>a</i>', the byte at position <i>2</i> is '<i>c</i>', and so forth.</p> <p>If <code>start</code> is negative, the returned string will start at the <code>start</code>'th byte from the end of <code>str</code>.</p>
	 * @param int $length <p>Length in <i>bytes</i>. If omitted or <i>NULL</i> is passed, extract all bytes to the end of the string.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p><b>mb_strcut()</b> returns the portion of <code>str</code> specified by the <code>start</code> and <code>length</code> parameters.</p>
	 * @link http://php.net/manual/en/function.mb-strcut.php
	 * @see mb_substr(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_strcut(string $str, int $start, int $length = NULL, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Get truncated string with specified width
	 * <p>Truncates <code>string</code> <code>str</code> to specified <code>width</code>.</p>
	 * @param string $str <p>The <code>string</code> being decoded.</p>
	 * @param int $start <p>The start position offset. Number of characters from the beginning of string (first character is 0), or if start is negative, number of characters from the end of the string.</p>
	 * @param int $width <p>The width of the desired trim. Negative widths count from the end of the string.</p>
	 * @param string $trimmarker <p>A string that is added to the end of string when string is truncated.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p>The truncated <code>string</code>. If <code>trimmarker</code> is set, <code>trimmarker</code> replaces the last chars to match the <code>width</code>.</p>
	 * @link http://php.net/manual/en/function.mb-strimwidth.php
	 * @see mb_strwidth(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_strimwidth(string $str, int $start, int $width, string $trimmarker = "", string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Finds position of first occurrence of a string within another, case insensitive
	 * <p><b>mb_stripos()</b> returns the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> string. Unlike <code>mb_strpos()</code>, <b>mb_stripos()</b> is case-insensitive. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the position of the first occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param int $offset <p>The position in <code>haystack</code> to start searching. A negative offset counts from the end of the string.</p>
	 * @param string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return int <p>Return the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> string, or <b><code>FALSE</code></b> if <code>needle</code> is not found.</p>
	 * @link http://php.net/manual/en/function.mb-stripos.php
	 * @see stripos(), strpos(), mb_strpos()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function mb_stripos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

	/**
	 * Finds first occurrence of a string within another, case insensitive
	 * <p><b>mb_stristr()</b> finds the first occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. Unlike <code>mb_strstr()</code>, <b>mb_stristr()</b> is case-insensitive. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the first occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $before_needle <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>TRUE</code></b>, it returns all of <code>haystack</code> from the beginning to the first occurrence of <code>needle</code> (excluding needle). If set to <b><code>FALSE</code></b>, it returns all of <code>haystack</code> from the first occurrence of <code>needle</code> to the end (including needle).</p>
	 * @param string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string <p>Returns the portion of <code>haystack</code>, or <b><code>FALSE</code></b> if <code>needle</code> is not found.</p>
	 * @link http://php.net/manual/en/function.mb-stristr.php
	 * @see stristr(), strstr(), mb_strstr()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function mb_stristr(string $haystack, string $needle, bool $before_needle = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Get string length
	 * <p>Gets the length of a <code>string</code>.</p>
	 * @param string $str <p>The <code>string</code> being checked for length.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return int <p>Returns the number of characters in <code>string</code> <code>str</code> having character encoding <code>encoding</code>. A multi-byte character is counted as 1.</p><p>Returns <b><code>FALSE</code></b> if the given <code>encoding</code> is invalid.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link http://php.net/manual/en/function.mb-strlen.php
	 * @see mb_internal_encoding(), grapheme_strlen(), iconv_strlen(), strlen()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_strlen(string $str, string $encoding = 'mb_internal_encoding()'): int {}

	/**
	 * Find position of first occurrence of string in a string
	 * <p>Finds position of the first occurrence of a <code>string</code> in a <code>string</code>.</p><p>Performs a multi-byte safe <code>strpos()</code> operation based on number of characters. The first character's position is 0, the second character position is 1, and so on.</p>
	 * @param string $haystack <p>The <code>string</code> being checked.</p>
	 * @param string $needle <p>The string to find in <code>haystack</code>. In contrast with <code>strpos()</code>, numeric values are not applied as the ordinal value of a character.</p>
	 * @param int $offset <p>The search offset. If it is not specified, 0 is used. A negative offset counts from the end of the string.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return int <p>Returns the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> <code>string</code>. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.mb-strpos.php
	 * @see mb_internal_encoding(), strpos()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_strpos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

	/**
	 * Finds the last occurrence of a character in a string within another
	 * <p><b>mb_strrchr()</b> finds the last occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $part <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>TRUE</code></b>, it returns all of <code>haystack</code> from the beginning to the last occurrence of <code>needle</code>. If set to <b><code>FALSE</code></b>, it returns all of <code>haystack</code> from the last occurrence of <code>needle</code> to the end,</p>
	 * @param string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string <p>Returns the portion of <code>haystack</code>. or <b><code>FALSE</code></b> if <code>needle</code> is not found.</p>
	 * @link http://php.net/manual/en/function.mb-strrchr.php
	 * @see strrchr(), mb_strstr(), mb_strrichr()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function mb_strrchr(string $haystack, string $needle, bool $part = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Finds the last occurrence of a character in a string within another, case insensitive
	 * <p><b>mb_strrichr()</b> finds the last occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. Unlike <code>mb_strrchr()</code>, <b>mb_strrichr()</b> is case-insensitive. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $part <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>TRUE</code></b>, it returns all of <code>haystack</code> from the beginning to the last occurrence of <code>needle</code>. If set to <b><code>FALSE</code></b>, it returns all of <code>haystack</code> from the last occurrence of <code>needle</code> to the end,</p>
	 * @param string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string <p>Returns the portion of <code>haystack</code>. or <b><code>FALSE</code></b> if <code>needle</code> is not found.</p>
	 * @link http://php.net/manual/en/function.mb-strrichr.php
	 * @see mb_stristr(), mb_strrchr()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function mb_strrichr(string $haystack, string $needle, bool $part = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Finds position of last occurrence of a string within another, case insensitive
	 * <p><b>mb_strripos()</b> performs multi-byte safe <code>strripos()</code> operation based on number of characters. <code>needle</code> position is counted from the beginning of <code>haystack</code>. First character's position is 0. Second character position is 1. Unlike <code>mb_strrpos()</code>, <b>mb_strripos()</b> is case-insensitive.</p>
	 * @param string $haystack <p>The string from which to get the position of the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param int $offset <p>The position in <code>haystack</code> to start searching</p>
	 * @param string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return int <p>Return the numeric position of the last occurrence of <code>needle</code> in the <code>haystack</code> string, or <b><code>FALSE</code></b> if <code>needle</code> is not found.</p>
	 * @link http://php.net/manual/en/function.mb-strripos.php
	 * @see strripos(), strrpos(), mb_strrpos()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function mb_strripos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

	/**
	 * Find position of last occurrence of a string in a string
	 * <p>Performs a multibyte safe <code>strrpos()</code> operation based on the number of characters. <code>needle</code> position is counted from the beginning of <code>haystack</code>. First character's position is 0. Second character position is 1.</p>
	 * @param string $haystack <p>The <code>string</code> being checked, for the last occurrence of <code>needle</code></p>
	 * @param string $needle <p>The <code>string</code> to find in <code>haystack</code>.</p>
	 * @param int $offset May be specified to begin searching an arbitrary number of characters into the <code>string</code>. Negative values will stop searching at an arbitrary point prior to the end of the <code>string</code>.
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return int <p>Returns the numeric position of the last occurrence of <code>needle</code> in the <code>haystack</code> <code>string</code>. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.mb-strrpos.php
	 * @see mb_strpos(), mb_internal_encoding(), strrpos()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_strrpos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

	/**
	 * Finds first occurrence of a string within another
	 * <p><b>mb_strstr()</b> finds the first occurrence of <code>needle</code> in <code>haystack</code> and returns the portion of <code>haystack</code>. If <code>needle</code> is not found, it returns <b><code>FALSE</code></b>.</p>
	 * @param string $haystack <p>The string from which to get the first occurrence of <code>needle</code></p>
	 * @param string $needle <p>The string to find in <code>haystack</code></p>
	 * @param bool $before_needle <p>Determines which portion of <code>haystack</code> this function returns. If set to <b><code>TRUE</code></b>, it returns all of <code>haystack</code> from the beginning to the first occurrence of <code>needle</code> (excluding needle). If set to <b><code>FALSE</code></b>, it returns all of <code>haystack</code> from the first occurrence of <code>needle</code> to the end (including needle).</p>
	 * @param string $encoding <p>Character encoding name to use. If it is omitted, internal character encoding is used.</p>
	 * @return string <p>Returns the portion of <code>haystack</code>, or <b><code>FALSE</code></b> if <code>needle</code> is not found.</p>
	 * @link http://php.net/manual/en/function.mb-strstr.php
	 * @see stristr(), strstr(), mb_stristr()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function mb_strstr(string $haystack, string $needle, bool $before_needle = FALSE, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Make a string lowercase
	 * <p>Returns <code>str</code> with all alphabetic characters converted to lowercase.</p>
	 * @param string $str <p>The <code>string</code> being lowercased.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p><code>str</code> with all alphabetic characters converted to lowercase.</p>
	 * @link http://php.net/manual/en/function.mb-strtolower.php
	 * @see mb_strtoupper(), mb_convert_case(), strtolower()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function mb_strtolower(string $str, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Make a string uppercase
	 * <p>Returns <code>str</code> with all alphabetic characters converted to uppercase.</p>
	 * @param string $str <p>The <code>string</code> being uppercased.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p><code>str</code> with all alphabetic characters converted to uppercase.</p>
	 * @link http://php.net/manual/en/function.mb-strtoupper.php
	 * @see mb_strtolower(), mb_convert_case(), strtoupper()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function mb_strtoupper(string $str, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Return width of string
	 * <p>Returns the width of <code>string</code> <code>str</code>, where halfwidth characters count as <i>1</i>, and fullwidth characters count as <i>2</i>.</p><p>The fullwidth characters are: <i>U+1100</i>-<i>U+115F</i>, <i>U+11A3</i>-<i>U+11A7</i>, <i>U+11FA</i>-<i>U+11FF</i>, <i>U+2329</i>-<i>U+232A</i>, <i>U+2E80</i>-<i>U+2E99</i>, <i>U+2E9B</i>-<i>U+2EF3</i>, <i>U+2F00</i>-<i>U+2FD5</i>, <i>U+2FF0</i>-<i>U+2FFB</i>, <i>U+3000</i>-<i>U+303E</i>, <i>U+3041</i>-<i>U+3096</i>, <i>U+3099</i>-<i>U+30FF</i>, <i>U+3105</i>-<i>U+312D</i>, <i>U+3131</i>-<i>U+318E</i>, <i>U+3190</i>-<i>U+31BA</i>, <i>U+31C0</i>-<i>U+31E3</i>, <i>U+31F0</i>-<i>U+321E</i>, <i>U+3220</i>-<i>U+3247</i>, <i>U+3250</i>-<i>U+32FE</i>, <i>U+3300</i>-<i>U+4DBF</i>, <i>U+4E00</i>-<i>U+A48C</i>, <i>U+A490</i>-<i>U+A4C6</i>, <i>U+A960</i>-<i>U+A97C</i>, <i>U+AC00</i>-<i>U+D7A3</i>, <i>U+D7B0</i>-<i>U+D7C6</i>, <i>U+D7CB</i>-<i>U+D7FB</i>, <i>U+F900</i>-<i>U+FAFF</i>, <i>U+FE10</i>-<i>U+FE19</i>, <i>U+FE30</i>-<i>U+FE52</i>, <i>U+FE54</i>-<i>U+FE66</i>, <i>U+FE68</i>-<i>U+FE6B</i>, <i>U+FF01</i>-<i>U+FF60</i>, <i>U+FFE0</i>-<i>U+FFE6</i>, <i>U+1B000</i>-<i>U+1B001</i>, <i>U+1F200</i>-<i>U+1F202</i>, <i>U+1F210</i>-<i>U+1F23A</i>, <i>U+1F240</i>-<i>U+1F248</i>, <i>U+1F250</i>-<i>U+1F251</i>, <i>U+20000</i>-<i>U+2FFFD</i>, <i>U+30000</i>-<i>U+3FFFD</i>. All other characters are halfwidth characters.</p>
	 * @param string $str <p>The <code>string</code> being decoded.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return int <p>The width of <code>string</code> <code>str</code>.</p>
	 * @link http://php.net/manual/en/function.mb-strwidth.php
	 * @see mb_strimwidth(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_strwidth(string $str, string $encoding = 'mb_internal_encoding()'): int {}

	/**
	 * Set/Get substitution character
	 * <p>Specifies a substitution character when input character encoding is invalid or character code does not exist in output character encoding. Invalid characters may be substituted <b><code>NULL</code></b> (no output), <code>string</code> or <code>integer</code> value (Unicode character code value).</p><p>This setting affects <code>mb_convert_encoding()</code>, <code>mb_convert_variables()</code>, <code>mb_output_handler()</code>, and <code>mb_send_mail()</code>.</p>
	 * @param mixed $substchar <p>Specify the Unicode value as an <code>integer</code>, or as one of the following <code>string</code>s:</p><ul> <li>  <i>"none"</i>: no output  </li> <li>  <i>"long"</i>: Output character code value (Example: <i>U+3000</i>, <i>JIS+7E7E</i>)  </li> <li>  <i>"entity"</i>: Output character entity (Example: <i>&amp;#x200;</i>)  </li> </ul>
	 * @return mixed <p>If <code>substchar</code> is set, it returns <b><code>TRUE</code></b> for success, otherwise returns <b><code>FALSE</code></b>. If <code>substchar</code> is not set, it returns the current setting.</p>
	 * @link http://php.net/manual/en/function.mb-substitute-character.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_substitute_character($substchar  = 'mb_substitute_character()') {}

	/**
	 * Get part of string
	 * <p>Performs a multi-byte safe <code>substr()</code> operation based on number of characters. Position is counted from the beginning of <code>str</code>. First character's position is 0. Second character position is 1, and so on.</p>
	 * @param string $str <p>The <code>string</code> to extract the substring from.</p>
	 * @param int $start <p>If <code>start</code> is non-negative, the returned string will start at the <code>start</code>'th position in <code>str</code>, counting from zero. For instance, in the string '<i>abcdef</i>', the character at position <i>0</i> is '<i>a</i>', the character at position <i>2</i> is '<i>c</i>', and so forth.</p> <p>If <code>start</code> is negative, the returned string will start at the <code>start</code>'th character from the end of <code>str</code>.</p>
	 * @param int $length <p>Maximum number of characters to use from <code>str</code>. If omitted or <i>NULL</i> is passed, extract all characters to the end of the string.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return string <p><b>mb_substr()</b> returns the portion of <code>str</code> specified by the <code>start</code> and <code>length</code> parameters.</p>
	 * @link http://php.net/manual/en/function.mb-substr.php
	 * @see mb_strcut(), mb_internal_encoding()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function mb_substr(string $str, int $start, int $length = NULL, string $encoding = 'mb_internal_encoding()'): string {}

	/**
	 * Count the number of substring occurrences
	 * <p>Counts the number of times the <code>needle</code> substring occurs in the <code>haystack</code> <code>string</code>.</p>
	 * @param string $haystack <p>The <code>string</code> being checked.</p>
	 * @param string $needle <p>The <code>string</code> being found.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter is the character encoding. If it is omitted, the internal character encoding value will be used.</p>
	 * @return int <p>The number of times the <code>needle</code> substring occurs in the <code>haystack</code> <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.mb-substr-count.php
	 * @see mb_strpos(), mb_substr(), substr_count()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function mb_substr_count(string $haystack, string $needle, string $encoding = 'mb_internal_encoding()'): int {}

	define('MB_CASE_LOWER', 1);

	define('MB_CASE_TITLE', 2);

	define('MB_CASE_UPPER', 0);

	define('MB_OVERLOAD_MAIL', 1);

	define('MB_OVERLOAD_REGEX', 4);

	define('MB_OVERLOAD_STRING', 2);

}
