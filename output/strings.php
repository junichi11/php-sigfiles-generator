<?php



namespace {

	/**
	 * Quote string with slashes in a C style
	 * <p>Returns a string with backslashes before characters that are listed in <code>characters</code> parameter.</p>
	 * @param string $string <p>The string to be escaped.</p>
	 * @param string $characters <p>A list of characters to be escaped. If <code>characters</code> contains characters <code>\n</code>, <code>\r</code> etc., they are converted in C-like style, while other non-alphanumeric characters with ASCII codes lower than 32 and higher than 126 converted to octal representation.</p> <p>When you define a sequence of characters in the charlist argument make sure that you know what characters come between the characters that you set as the start and end of the range.</p>  <code> &lt;&#63;php<br>echo&nbsp;addcslashes('foo[&nbsp;]',&nbsp;'A..z');<br>//&nbsp;output:&nbsp;&nbsp;\f\o\o\[&nbsp;\]<br>//&nbsp;All&nbsp;upper&nbsp;and&nbsp;lower-case&nbsp;letters&nbsp;will&nbsp;be&nbsp;escaped<br>//&nbsp;...&nbsp;but&nbsp;so&nbsp;will&nbsp;the&nbsp;[\]^_`<br>&#63;&gt;  </code>   Also, if the first character in a range has a higher ASCII value than the second character in the range, no range will be constructed. Only the start, end and period characters will be escaped. Use the <code>ord()</code> function to find the ASCII value for a character.   <code> &lt;&#63;php<br>echo&nbsp;addcslashes("zoo['.']",&nbsp;'z..A');<br>//&nbsp;output:&nbsp;&nbsp;\zoo['\.']<br>&#63;&gt;  </code>   <p>Be careful if you choose to escape characters 0, a, b, f, n, r, t and v. They will be converted to \0, \a, \b, \f, \n, \r, \t and \v, all of which are predefined escape sequences in C. Many of these sequences are also defined in other C-derived languages, including PHP, meaning that you may not get the desired result if you use the output of <b>addcslashes()</b> to generate code in those languages with these characters defined in <code>characters</code>.</p>
	 * @return string <p>Returns the escaped string.</p>
	 * @link https://php.net/manual/en/function.addcslashes.php
	 * @see stripcslashes(), stripslashes(), addslashes(), htmlspecialchars(), quotemeta()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function addcslashes(string $string, string $characters): string {}

	/**
	 * Quote string with slashes
	 * <p>Returns a string with backslashes added before characters that need to be escaped. These characters are:</p><p>A use case of <b>addslashes()</b> is escaping the aforementioned characters in a string that is to be evaluated by PHP:</p><p>The <b>addslashes()</b> is sometimes incorrectly used to try to prevent SQL Injection. Instead, database-specific escaping functions and/or prepared statements should be used.</p>
	 * @param string $string <p>The string to be escaped.</p>
	 * @return string <p>Returns the escaped string.</p>
	 * @link https://php.net/manual/en/function.addslashes.php
	 * @see stripcslashes(), stripslashes(), addcslashes(), htmlspecialchars(), quotemeta(), get_magic_quotes_gpc()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function addslashes(string $string): string {}

	/**
	 * Convert binary data into hexadecimal representation
	 * <p>Returns an ASCII string containing the hexadecimal representation of <code>string</code>. The conversion is done byte-wise with the high-nibble first.</p>
	 * @param string $string <p>A string.</p>
	 * @return string <p>Returns the hexadecimal representation of the given string.</p>
	 * @link https://php.net/manual/en/function.bin2hex.php
	 * @see hex2bin(), pack()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function bin2hex(string $string): string {}

	/**
	 * Alias of rtrim()
	 * <p>This function is an alias of: <code>rtrim()</code>.</p>
	 * @param string $string <p>The input string.</p>
	 * @param string $characters <p>You can also specify the characters you want to strip, by means of the <code>characters</code> parameter. Simply list all characters that you want to be stripped. With <code>..</code> you can specify a range of characters.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.chop.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function chop(string $string, string $characters = " \n\r\t\v\x00"): string {}

	/**
	 * Generate a single-byte string from a number
	 * <p>Returns a one-character string containing the character specified by interpreting <code>codepoint</code> as an unsigned integer.</p><p>This can be used to create a one-character string in a single-byte encoding such as ASCII, ISO-8859, or Windows 1252, by passing the position of a desired character in the encoding's mapping table. However, note that this function is not aware of any string encoding, and in particular cannot be passed a Unicode code point value to generate a string in a multibyte encoding like UTF-8 or UTF-16.</p><p>This function complements <code>ord()</code>.</p>
	 * @param int $codepoint <p>An integer between 0 and 255.</p> <p>Values outside the valid range (0..255) will be bitwise and'ed with 255, which is equivalent to the following algorithm:</p> <code> while&nbsp;($bytevalue&nbsp;&lt;&nbsp;0)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;$bytevalue&nbsp;+=&nbsp;256;<br>}<br>$bytevalue&nbsp;%=&nbsp;256; </code>
	 * @return string <p>A single-character string containing the specified byte.</p>
	 * @link https://php.net/manual/en/function.chr.php
	 * @see sprintf(), ord(), mb_chr(), IntlChar::chr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function chr(int $codepoint): string {}

	/**
	 * Split a string into smaller chunks
	 * <p>Can be used to split a string into smaller chunks which is useful for e.g. converting <code>base64_encode()</code> output to match RFC 2045 semantics. It inserts <code>separator</code> every <code>length</code> characters.</p>
	 * @param string $string <p>The string to be chunked.</p>
	 * @param int $length <p>The chunk length.</p>
	 * @param string $separator <p>The line ending sequence.</p>
	 * @return string <p>Returns the chunked string.</p>
	 * @link https://php.net/manual/en/function.chunk-split.php
	 * @see str_split(), explode(), wordwrap()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function chunk_split(string $string, int $length = 76, string $separator = "\r\n"): string {}

	/**
	 * Convert from one Cyrillic character set to another
	 * <p>Converts from one Cyrillic character set to another.</p>
	 * @param string $str <p>The string to be converted.</p>
	 * @param string $from <p>The source Cyrillic character set, as a single character.</p>
	 * @param string $to <p>The target Cyrillic character set, as a single character.</p>
	 * @return string <p>Returns the converted string.</p>
	 * @link https://php.net/manual/en/function.convert-cyr-string.php
	 * @see mb_convert_encoding(), iconv()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function convert_cyr_string(string $str, string $from, string $to): string {}

	/**
	 * Decode a uuencoded string
	 * <p><b>convert_uudecode()</b> decodes a uuencoded string.</p><p><b>Note</b>:  <b>convert_uudecode()</b> neither accepts the <code>begin</code> nor the <code>end</code> line, which are part of uuencoded <i>files</i>. </p>
	 * @param string $string <p>The uuencoded data.</p>
	 * @return string|false <p>Returns the decoded data as a string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.convert-uudecode.php
	 * @see convert_uuencode()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function convert_uudecode(string $string): string|false {}

	/**
	 * Uuencode a string
	 * <p><b>convert_uuencode()</b> encodes a string using the uuencode algorithm.</p><p>Uuencode translates all strings (including binary data) into printable characters, making them safe for network transmissions. Uuencoded data is about 35% larger than the original.</p><p><b>Note</b>:  <b>convert_uuencode()</b> neither produces the <code>begin</code> nor the <code>end</code> line, which are part of uuencoded <i>files</i>. </p>
	 * @param string $string <p>The data to be encoded.</p>
	 * @return string <p>Returns the uuencoded data.</p>
	 * @link https://php.net/manual/en/function.convert-uuencode.php
	 * @see convert_uudecode(), base64_encode()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function convert_uuencode(string $string): string {}

	/**
	 * Return information about characters used in a string
	 * <p>Counts the number of occurrences of every byte-value (0..255) in <code>string</code> and returns it in various ways.</p>
	 * @param string $string <p>The examined string.</p>
	 * @param int $mode <p>See return values.</p>
	 * @return array|string <p>Depending on <code>mode</code> <b>count_chars()</b> returns one of the following:</p><ul> <li>  0 - an array with the byte-value as key and the frequency of every byte as value.  </li> <li>  1 - same as 0 but only byte-values with a frequency greater than zero are listed.  </li> <li>  2 - same as 0 but only byte-values with a frequency equal to zero are listed.  </li> <li>  3 - a string containing all unique characters is returned.  </li> <li>  4 - a string containing all not used characters is returned.  </li> </ul>
	 * @link https://php.net/manual/en/function.count-chars.php
	 * @see strpos(), substr_count()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function count_chars(string $string, int $mode = 0): array|string {}

	/**
	 * Calculates the crc32 polynomial of a string
	 * <p>Generates the cyclic redundancy checksum polynomial of 32-bit lengths of the <code>string</code>. This is usually used to validate the integrity of data being transmitted.</p><p>Because PHP's integer type is signed many crc32 checksums will result in negative integers on 32bit platforms. On 64bit installations all <b>crc32()</b> results will be positive integers though.</p><p>So you need to use the "%u" formatter of <code>sprintf()</code> or <code>printf()</code> to get the string representation of the unsigned <b>crc32()</b> checksum in decimal format.</p><p>For a hexadecimal representation of the checksum you can either use the "%x" formatter of <code>sprintf()</code> or <code>printf()</code> or the <code>dechex()</code> conversion functions, both of these also take care of converting the <b>crc32()</b> result to an unsigned integer.</p><p>Having 64bit installations also return negative integers for higher result values was considered but would break the hexadecimal conversion as negatives would get an extra 0xFFFFFFFF######## offset then. As hexadecimal representation seems to be the most common use case we decided to not break this even if it breaks direct decimal comparisons in about 50% of the cases when moving from 32 to 64bits.</p><p>In retrospect having the function return an integer maybe wasn't the best idea and returning a hex string representation right away (as e.g. <code>md5()</code> does) might have been a better plan to begin with.</p><p>For a more portable solution you may also consider the generic <code>hash()</code>. <code>hash("crc32b", $str)</code> will return the same string as <code>str_pad(dechex(crc32($str)), 8, '0', STR_PAD_LEFT)</code>.</p>
	 * @param string $string <p>The data.</p>
	 * @return int <p>Returns the crc32 checksum of <code>string</code> as an integer.</p>
	 * @link https://php.net/manual/en/function.crc32.php
	 * @see hash(), md5(), sha1()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function crc32(string $string): int {}

	/**
	 * One-way string hashing
	 * <p><b>crypt()</b> will return a hashed string using the standard Unix DES-based algorithm or alternative algorithms.</p><p>The <code>salt</code> parameter is optional. However, <b>crypt()</b> creates a weak hash without the <code>salt</code>, and raises an <b><code>E_NOTICE</code></b> error without it. Make sure to specify a strong enough salt for better security.</p><p><code>password_hash()</code> uses a strong hash, generates a strong salt, and applies proper rounds automatically. <code>password_hash()</code> is a simple <b>crypt()</b> wrapper and compatible with existing password hashes. Use of <code>password_hash()</code> is encouraged.</p><p>The hash type is triggered by the salt argument. If no salt is provided, PHP will auto-generate either a standard two character (DES) salt, or a twelve character (MD5), depending on the availability of MD5 crypt(). PHP sets a constant named <b><code>CRYPT_SALT_LENGTH</code></b> which indicates the longest valid salt allowed by the available hashes.</p><p>The standard DES-based <b>crypt()</b> returns the salt as the first two characters of the output. It also only uses the first eight characters of <code>string</code>, so longer strings that start with the same eight characters will generate the same result (when the same salt is used).</p><p>The following hash types are supported:</p>
	 * @param string $string <p>The string to be hashed.</p> <b>Caution</b> <p>Using the <b><code>CRYPT_BLOWFISH</code></b> algorithm, will result in the <code>string</code> parameter being truncated to a maximum length of 72 bytes.</p>
	 * @param string $salt <p>An optional salt string to base the hashing on. If not provided, the behaviour is defined by the algorithm implementation and can lead to unexpected results.</p>
	 * @return string <p>Returns the hashed string or a string that is shorter than 13 characters and is guaranteed to differ from the salt on failure.</p><p><b>Warning</b></p> <p>When validating passwords, a string comparison function that isn't vulnerable to timing attacks should be used to compare the output of <b>crypt()</b> to the previously known hash. PHP provides <code>hash_equals()</code> for this purpose.</p>
	 * @link https://php.net/manual/en/function.crypt.php
	 * @see hash_equals(), password_hash(), md5()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function crypt(string $string, string $salt): string {}

	/**
	 * Split a string by a string
	 * <p>Returns an array of strings, each of which is a substring of <code>string</code> formed by splitting it on boundaries formed by the string <code>separator</code>.</p>
	 * @param string $separator <p>The boundary string.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $limit <p>If <code>limit</code> is set and positive, the returned array will contain a maximum of <code>limit</code> elements with the last element containing the rest of <code>string</code>.</p> <p>If the <code>limit</code> parameter is negative, all components except the last -<code>limit</code> are returned.</p> <p>If the <code>limit</code> parameter is zero, then this is treated as 1.</p>
	 * @return array <p>Returns an <code>array</code> of <code>string</code>s created by splitting the <code>string</code> parameter on boundaries formed by the <code>separator</code>.</p><p>If <code>separator</code> is an empty <code>string</code> (""), <b>explode()</b> throws a <code>ValueError</code>. If <code>separator</code> contains a value that is not contained in <code>string</code> and a negative <code>limit</code> is used, then an empty <code>array</code> will be returned, otherwise an <code>array</code> containing <code>string</code> will be returned. If <code>separator</code> values appear at the start or end of <code>string</code>, said values will be added as an empty <code>array</code> value either in the first or last position of the returned <code>array</code> respectively.</p>
	 * @link https://php.net/manual/en/function.explode.php
	 * @see preg_split(), str_split(), mb_split(), str_word_count(), strtok(), implode()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array {}

	/**
	 * Write a formatted string to a stream
	 * <p>Write a string produced according to <code>format</code> to the stream resource specified by <code>stream</code>.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param mixed $values
	 * @return int <p>Returns the length of the string written.</p>
	 * @link https://php.net/manual/en/function.fprintf.php
	 * @see printf(), sprintf(), vprintf(), vsprintf(), vfprintf(), sscanf(), fscanf(), number_format(), date()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function fprintf($stream, string $format, mixed ...$values): int {}

	/**
	 * Returns the translation table used by htmlspecialchars() and htmlentities()
	 * <p><b>get_html_translation_table()</b> will return the translation table that is used internally for <code>htmlspecialchars()</code> and <code>htmlentities()</code>.</p><p><b>Note</b>:</p><p>Special characters can be encoded in several ways. E.g. <code>"</code> can be encoded as <code>&amp;quot;</code>, <code>&amp;#34;</code> or <code>&amp;#x22</code>. <b>get_html_translation_table()</b> returns only the form used by <code>htmlspecialchars()</code> and <code>htmlentities()</code>.</p>
	 * @param int $table <p>Which table to return. Either <b><code>HTML_ENTITIES</code></b> or <b><code>HTML_SPECIALCHARS</code></b>.</p>
	 * @param int $flags <p>A bitmask of one or more of the following flags, which specify which quotes the table will contain as well as which document type the table is for. The default is <code>ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.</p> <b>Available <code>flags</code> constants</b>   Constant Name Description     <b><code>ENT_COMPAT</code></b> Table will contain entities for double-quotes, but not for single-quotes.   <b><code>ENT_QUOTES</code></b> Table will contain entities for both double and single quotes.   <b><code>ENT_NOQUOTES</code></b> Table will neither contain entities for single quotes nor for double quotes.   <b><code>ENT_SUBSTITUTE</code></b>  Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.    <b><code>ENT_HTML401</code></b> Table for HTML 4.01.   <b><code>ENT_XML1</code></b> Table for XML 1.   <b><code>ENT_XHTML</code></b> Table for XHTML.   <b><code>ENT_HTML5</code></b> Table for HTML 5.
	 * @param string $encoding <p>Encoding to use. If omitted, the default value for this argument is UTF-8.</p> <p>The following character sets are supported:</p> <b>Supported charsets</b>   Charset Aliases Description     ISO-8859-1 ISO8859-1  Western European, Latin-1.    ISO-8859-5 ISO8859-5  Little used cyrillic charset (Latin/Cyrillic).    ISO-8859-15 ISO8859-15  Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1 (ISO-8859-1).    UTF-8 &nbsp;  ASCII compatible multi-byte 8-bit Unicode.    cp866 ibm866, 866  DOS-specific Cyrillic charset.    cp1251 Windows-1251, win-1251, 1251  Windows-specific Cyrillic charset.    cp1252 Windows-1252, 1252  Windows specific charset for Western European.    KOI8-R koi8-ru, koi8r  Russian.    BIG5 950  Traditional Chinese, mainly used in Taiwan.    GB2312 936  Simplified Chinese, national standard character set.    BIG5-HKSCS &nbsp;  Big5 with Hong Kong extensions, Traditional Chinese.    Shift_JIS SJIS, SJIS-win, cp932, 932  Japanese    EUC-JP EUCJP, eucJP-win  Japanese    MacRoman &nbsp;  Charset that was used by Mac OS.    <code>''</code> &nbsp;  An empty string activates detection from script encoding (Zend multibyte), default_charset and current locale (see <code>nl_langinfo()</code> and <code>setlocale()</code>), in this order. Not recommended.     <p><b>Note</b>:  Any other character sets are not recognized. The default encoding will be used instead and a warning will be emitted. </p>
	 * @return array <p>Returns the translation table as an array, with the original characters as keys and entities as values.</p>
	 * @link https://php.net/manual/en/function.get-html-translation-table.php
	 * @see htmlspecialchars(), htmlentities(), html_entity_decode()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_html_translation_table(int $table = HTML_SPECIALCHARS, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, string $encoding = "UTF-8"): array {}

	/**
	 * Convert logical Hebrew text to visual text
	 * <p>Converts logical Hebrew text to visual text.</p><p>The function tries to avoid breaking words.</p>
	 * @param string $string <p>A Hebrew input string.</p>
	 * @param int $max_chars_per_line <p>This optional parameter indicates maximum number of characters per line that will be returned.</p>
	 * @return string <p>Returns the visual string.</p>
	 * @link https://php.net/manual/en/function.hebrev.php
	 * @see hebrevc()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function hebrev(string $string, int $max_chars_per_line = 0): string {}

	/**
	 * Convert logical Hebrew text to visual text with newline conversion
	 * <p>This function is similar to <code>hebrev()</code> with the difference that it converts newlines (\n) to "&lt;br&gt;\n".</p><p>The function tries to avoid breaking words.</p>
	 * @param string $hebrew_text <p>A Hebrew input string.</p>
	 * @param int $max_chars_per_line <p>This optional parameter indicates maximum number of characters per line that will be returned.</p>
	 * @return string <p>Returns the visual string.</p>
	 * @link https://php.net/manual/en/function.hebrevc.php
	 * @see hebrev()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function hebrevc(string $hebrew_text, int $max_chars_per_line = 0): string {}

	/**
	 * Decodes a hexadecimally encoded binary string
	 * <p>Decodes a hexadecimally encoded binary string.</p><p>This function does <i>NOT</i> convert a hexadecimal number to a binary number. This can be done using the <code>base_convert()</code> function.</p>
	 * @param string $string <p>Hexadecimal representation of data.</p>
	 * @return string|false <p>Returns the binary representation of the given data or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.hex2bin.php
	 * @see bin2hex(), unpack()
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function hex2bin(string $string): string|false {}

	/**
	 * Convert HTML entities to their corresponding characters
	 * <p><b>html_entity_decode()</b> is the opposite of <code>htmlentities()</code> in that it converts HTML entities in the <code>string</code> to their corresponding characters.</p><p>More precisely, this function decodes all the entities (including all numeric entities) that a) are necessarily valid for the chosen document type &mdash; i.e., for XML, this function does not decode named entities that might be defined in some DTD &mdash; and b) whose character or characters are in the coded character set associated with the chosen encoding and are permitted in the chosen document type. All other entities are left as is.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $flags <p>A bitmask of one or more of the following flags, which specify how to handle quotes and which document type to use. The default is <code>ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.</p> <b>Available <code>flags</code> constants</b>   Constant Name Description     <b><code>ENT_COMPAT</code></b> Will convert double-quotes and leave single-quotes alone.   <b><code>ENT_QUOTES</code></b> Will convert both double and single quotes.   <b><code>ENT_NOQUOTES</code></b> Will leave both double and single quotes unconverted.   <b><code>ENT_SUBSTITUTE</code></b>  Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.    <b><code>ENT_HTML401</code></b>  Handle code as HTML 4.01.    <b><code>ENT_XML1</code></b>  Handle code as XML 1.    <b><code>ENT_XHTML</code></b>  Handle code as XHTML.    <b><code>ENT_HTML5</code></b>  Handle code as HTML 5.
	 * @param ?string $encoding <p>An optional argument defining the encoding used when converting characters.</p> <p>If omitted, <code>encoding</code> defaults to the value of the default_charset configuration option.</p> <p>Although this argument is technically optional, you are highly encouraged to specify the correct value for your code if the default_charset configuration option may be set incorrectly for the given input.</p> <p>The following character sets are supported:</p> <b>Supported charsets</b>   Charset Aliases Description     ISO-8859-1 ISO8859-1  Western European, Latin-1.    ISO-8859-5 ISO8859-5  Little used cyrillic charset (Latin/Cyrillic).    ISO-8859-15 ISO8859-15  Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1 (ISO-8859-1).    UTF-8 &nbsp;  ASCII compatible multi-byte 8-bit Unicode.    cp866 ibm866, 866  DOS-specific Cyrillic charset.    cp1251 Windows-1251, win-1251, 1251  Windows-specific Cyrillic charset.    cp1252 Windows-1252, 1252  Windows specific charset for Western European.    KOI8-R koi8-ru, koi8r  Russian.    BIG5 950  Traditional Chinese, mainly used in Taiwan.    GB2312 936  Simplified Chinese, national standard character set.    BIG5-HKSCS &nbsp;  Big5 with Hong Kong extensions, Traditional Chinese.    Shift_JIS SJIS, SJIS-win, cp932, 932  Japanese    EUC-JP EUCJP, eucJP-win  Japanese    MacRoman &nbsp;  Charset that was used by Mac OS.    <code>''</code> &nbsp;  An empty string activates detection from script encoding (Zend multibyte), default_charset and current locale (see <code>nl_langinfo()</code> and <code>setlocale()</code>), in this order. Not recommended.     <p><b>Note</b>:  Any other character sets are not recognized. The default encoding will be used instead and a warning will be emitted. </p>
	 * @return string <p>Returns the decoded string.</p>
	 * @link https://php.net/manual/en/function.php-entity-decode.php
	 * @see htmlentities(), htmlspecialchars(), get_html_translation_table(), urldecode()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function html_entity_decode(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null): string {}

	/**
	 * Convert all applicable characters to HTML entities
	 * <p>This function is identical to <code>htmlspecialchars()</code> in all ways, except with <b>htmlentities()</b>, all characters which have HTML character entity equivalents are translated into these entities.</p><p>If you want to decode instead (the reverse) you can use <code>html_entity_decode()</code>.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $flags <p>A bitmask of one or more of the following flags, which specify how to handle quotes, invalid code unit sequences and the used document type. The default is <code>ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.</p> <b>Available <code>flags</code> constants</b>   Constant Name Description     <b><code>ENT_COMPAT</code></b> Will convert double-quotes and leave single-quotes alone.   <b><code>ENT_QUOTES</code></b> Will convert both double and single quotes.   <b><code>ENT_NOQUOTES</code></b> Will leave both double and single quotes unconverted.   <b><code>ENT_IGNORE</code></b>  Silently discard invalid code unit sequences instead of returning an empty string. Using this flag is discouraged as it may have security implications.    <b><code>ENT_SUBSTITUTE</code></b>  Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#FFFD; (otherwise) instead of returning an empty string.    <b><code>ENT_DISALLOWED</code></b>  Replace invalid code points for the given document type with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#FFFD; (otherwise) instead of leaving them as is. This may be useful, for instance, to ensure the well-formedness of XML documents with embedded external content.    <b><code>ENT_HTML401</code></b>  Handle code as HTML 4.01.    <b><code>ENT_XML1</code></b>  Handle code as XML 1.    <b><code>ENT_XHTML</code></b>  Handle code as XHTML.    <b><code>ENT_HTML5</code></b>  Handle code as HTML 5.
	 * @param ?string $encoding <p>An optional argument defining the encoding used when converting characters.</p> <p>If omitted, <code>encoding</code> defaults to the value of the default_charset configuration option.</p> <p>Although this argument is technically optional, you are highly encouraged to specify the correct value for your code if the default_charset configuration option may be set incorrectly for the given input.</p> <p>The following character sets are supported:</p> <b>Supported charsets</b>   Charset Aliases Description     ISO-8859-1 ISO8859-1  Western European, Latin-1.    ISO-8859-5 ISO8859-5  Little used cyrillic charset (Latin/Cyrillic).    ISO-8859-15 ISO8859-15  Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1 (ISO-8859-1).    UTF-8 &nbsp;  ASCII compatible multi-byte 8-bit Unicode.    cp866 ibm866, 866  DOS-specific Cyrillic charset.    cp1251 Windows-1251, win-1251, 1251  Windows-specific Cyrillic charset.    cp1252 Windows-1252, 1252  Windows specific charset for Western European.    KOI8-R koi8-ru, koi8r  Russian.    BIG5 950  Traditional Chinese, mainly used in Taiwan.    GB2312 936  Simplified Chinese, national standard character set.    BIG5-HKSCS &nbsp;  Big5 with Hong Kong extensions, Traditional Chinese.    Shift_JIS SJIS, SJIS-win, cp932, 932  Japanese    EUC-JP EUCJP, eucJP-win  Japanese    MacRoman &nbsp;  Charset that was used by Mac OS.    <code>''</code> &nbsp;  An empty string activates detection from script encoding (Zend multibyte), default_charset and current locale (see <code>nl_langinfo()</code> and <code>setlocale()</code>), in this order. Not recommended.     <p><b>Note</b>:  Any other character sets are not recognized. The default encoding will be used instead and a warning will be emitted. </p>
	 * @param bool $double_encode <p>When <code>double_encode</code> is turned off PHP will not encode existing html entities. The default is to convert everything.</p>
	 * @return string <p>Returns the encoded string.</p><p>If the input <code>string</code> contains an invalid code unit sequence within the given <code>encoding</code> an empty string will be returned, unless either the <b><code>ENT_IGNORE</code></b> or <b><code>ENT_SUBSTITUTE</code></b> flags are set.</p>
	 * @link https://php.net/manual/en/function.phpentities.php
	 * @see html_entity_decode(), get_html_translation_table(), htmlspecialchars(), nl2br(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function htmlentities(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string {}

	/**
	 * Convert special characters to HTML entities
	 * <p>Certain characters have special significance in HTML, and should be represented by HTML entities if they are to preserve their meanings. This function returns a string with these conversions made. If you require all input substrings that have associated named entities to be translated, use <code>htmlentities()</code> instead.</p><p>If the input string passed to this function and the final document share the same character set, this function is sufficient to prepare input for inclusion in most contexts of an HTML document. If, however, the input can represent characters that are not coded in the final document character set and you wish to retain those characters (as numeric or named entities), both this function and <code>htmlentities()</code> (which only encodes substrings that have named entity equivalents) may be insufficient. You may have to use <code>mb_encode_numericentity()</code> instead.</p><p></p>
	 * @param string $string <p>The <code>string</code> being converted.</p>
	 * @param int $flags <p>A bitmask of one or more of the following flags, which specify how to handle quotes, invalid code unit sequences and the used document type. The default is <code>ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.</p> <b>Available <code>flags</code> constants</b>   Constant Name Description     <b><code>ENT_COMPAT</code></b> Will convert double-quotes and leave single-quotes alone.   <b><code>ENT_QUOTES</code></b> Will convert both double and single quotes.   <b><code>ENT_NOQUOTES</code></b> Will leave both double and single quotes unconverted.   <b><code>ENT_IGNORE</code></b>  Silently discard invalid code unit sequences instead of returning an empty string. Using this flag is discouraged as it may have security implications.    <b><code>ENT_SUBSTITUTE</code></b>  Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.    <b><code>ENT_DISALLOWED</code></b>  Replace invalid code points for the given document type with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of leaving them as is. This may be useful, for instance, to ensure the well-formedness of XML documents with embedded external content.    <b><code>ENT_HTML401</code></b>  Handle code as HTML 4.01.    <b><code>ENT_XML1</code></b>  Handle code as XML 1.    <b><code>ENT_XHTML</code></b>  Handle code as XHTML.    <b><code>ENT_HTML5</code></b>  Handle code as HTML 5.
	 * @param ?string $encoding <p>An optional argument defining the encoding used when converting characters.</p> <p>If omitted, <code>encoding</code> defaults to the value of the default_charset configuration option.</p> <p>Although this argument is technically optional, you are highly encouraged to specify the correct value for your code if the default_charset configuration option may be set incorrectly for the given input.</p> <p>For the purposes of this function, the encodings <code>ISO-8859-1</code>, <code>ISO-8859-15</code>, <code>UTF-8</code>, <code>cp866</code>, <code>cp1251</code>, <code>cp1252</code>, and <code>KOI8-R</code> are effectively equivalent, provided the <code>string</code> itself is valid for the encoding, as the characters affected by <b>htmlspecialchars()</b> occupy the same positions in all of these encodings.</p> <p>The following character sets are supported:</p> <b>Supported charsets</b>   Charset Aliases Description     ISO-8859-1 ISO8859-1  Western European, Latin-1.    ISO-8859-5 ISO8859-5  Little used cyrillic charset (Latin/Cyrillic).    ISO-8859-15 ISO8859-15  Western European, Latin-9. Adds the Euro sign, French and Finnish letters missing in Latin-1 (ISO-8859-1).    UTF-8 &nbsp;  ASCII compatible multi-byte 8-bit Unicode.    cp866 ibm866, 866  DOS-specific Cyrillic charset.    cp1251 Windows-1251, win-1251, 1251  Windows-specific Cyrillic charset.    cp1252 Windows-1252, 1252  Windows specific charset for Western European.    KOI8-R koi8-ru, koi8r  Russian.    BIG5 950  Traditional Chinese, mainly used in Taiwan.    GB2312 936  Simplified Chinese, national standard character set.    BIG5-HKSCS &nbsp;  Big5 with Hong Kong extensions, Traditional Chinese.    Shift_JIS SJIS, SJIS-win, cp932, 932  Japanese    EUC-JP EUCJP, eucJP-win  Japanese    MacRoman &nbsp;  Charset that was used by Mac OS.    <code>''</code> &nbsp;  An empty string activates detection from script encoding (Zend multibyte), default_charset and current locale (see <code>nl_langinfo()</code> and <code>setlocale()</code>), in this order. Not recommended.     <p><b>Note</b>:  Any other character sets are not recognized. The default encoding will be used instead and a warning will be emitted. </p>
	 * @param bool $double_encode <p>When <code>double_encode</code> is turned off PHP will not encode existing html entities, the default is to convert everything.</p>
	 * @return string <p>The converted <code>string</code>.</p><p>If the input <code>string</code> contains an invalid code unit sequence within the given <code>encoding</code> an empty string will be returned, unless either the <b><code>ENT_IGNORE</code></b> or <b><code>ENT_SUBSTITUTE</code></b> flags are set.</p>
	 * @link https://php.net/manual/en/function.phpspecialchars.php
	 * @see get_html_translation_table(), htmlspecialchars_decode(), strip_tags(), htmlentities(), nl2br()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function htmlspecialchars(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string {}

	/**
	 * Convert special HTML entities back to characters
	 * <p>This function is the opposite of <code>htmlspecialchars()</code>. It converts special HTML entities back to characters.</p><p>The converted entities are: <code>&amp;amp;</code>, <code>&amp;quot;</code> (when <b><code>ENT_NOQUOTES</code></b> is not set), <code>&amp;#039;</code> (when <b><code>ENT_QUOTES</code></b> is set), <code>&amp;lt;</code> and <code>&amp;gt;</code>.</p>
	 * @param string $string <p>The string to decode.</p>
	 * @param int $flags <p>A bitmask of one or more of the following flags, which specify how to handle quotes and which document type to use. The default is <code>ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401</code>.</p> <b>Available <code>flags</code> constants</b>   Constant Name Description     <b><code>ENT_COMPAT</code></b> Will convert double-quotes and leave single-quotes alone.   <b><code>ENT_QUOTES</code></b> Will convert both double and single quotes.   <b><code>ENT_NOQUOTES</code></b> Will leave both double and single quotes unconverted.   <b><code>ENT_SUBSTITUTE</code></b>  Replace invalid code unit sequences with a Unicode Replacement Character U+FFFD (UTF-8) or &amp;#xFFFD; (otherwise) instead of returning an empty string.    <b><code>ENT_HTML401</code></b>  Handle code as HTML 4.01.    <b><code>ENT_XML1</code></b>  Handle code as XML 1.    <b><code>ENT_XHTML</code></b>  Handle code as XHTML.    <b><code>ENT_HTML5</code></b>  Handle code as HTML 5.
	 * @return string <p>Returns the decoded string.</p>
	 * @link https://php.net/manual/en/function.phpspecialchars-decode.php
	 * @see htmlspecialchars(), html_entity_decode(), get_html_translation_table()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function htmlspecialchars_decode(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401): string {}

	/**
	 * Join array elements with a string
	 * <p>Alternative signature (not supported with named arguments):</p><p>Legacy signature (deprecated as of PHP 7.4.0, removed as of PHP 8.0.0):</p><p>Join array elements with a <code>separator</code> string.</p>
	 * @param string $separator <p>Optional. Defaults to an empty string.</p>
	 * @param array $array <p>The array of strings to implode.</p>
	 * @return string <p>Returns a string containing a string representation of all the array elements in the same order, with the separator string between each element.</p>
	 * @link https://php.net/manual/en/function.implode.php
	 * @see explode(), preg_split(), http_build_query()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function implode(string $separator, array $array): string {}

	/**
	 * Alias of implode()
	 * <p>This function is an alias of: <code>implode()</code>.</p>
	 * @param string $separator <p>Optional. Defaults to an empty string.</p>
	 * @param array $array <p>The array of strings to implode.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.join.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function join(string $separator, array $array): string {}

	/**
	 * Make a string's first character lowercase
	 * <p>Returns a string with the first character of <code>string</code> lowercased if that character is alphabetic.</p><p>Note that 'alphabetic' is determined by the current locale. For instance, in the default "C" locale characters such as umlaut-a (&auml;) will not be converted.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the resulting string.</p>
	 * @link https://php.net/manual/en/function.lcfirst.php
	 * @see ucfirst(), strtolower(), strtoupper(), ucwords()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function lcfirst(string $string): string {}

	/**
	 * Calculate Levenshtein distance between two strings
	 * <p>The Levenshtein distance is defined as the minimal number of characters you have to replace, insert or delete to transform <code>string1</code> into <code>string2</code>. The complexity of the algorithm is <code>O(m&#42;n)</code>, where <code>n</code> and <code>m</code> are the length of <code>string1</code> and <code>string2</code> (rather good when compared to <code>similar_text()</code>, which is <code>O(max(n,m)&#42;&#42;3)</code>, but still expensive).</p><p>If <code>insertion_cost</code>, <code>replacement_cost</code> and/or <code>deletion_cost</code> are unequal to <code>1</code>, the algorithm adapts to choose the cheapest transforms. E.g. if <code>$insertion_cost + $deletion_cost &lt; $replacement_cost</code>, no replacements will be done, but rather inserts and deletions instead.</p>
	 * @param string $string1 <p>One of the strings being evaluated for Levenshtein distance.</p>
	 * @param string $string2 <p>One of the strings being evaluated for Levenshtein distance.</p>
	 * @param int $insertion_cost <p>Defines the cost of insertion.</p>
	 * @param int $replacement_cost <p>Defines the cost of replacement.</p>
	 * @param int $deletion_cost <p>Defines the cost of deletion.</p>
	 * @return int <p>This function returns the Levenshtein-Distance between the two argument strings or -1, if one of the argument strings is longer than the limit of 255 characters.</p>
	 * @link https://php.net/manual/en/function.levenshtein.php
	 * @see soundex(), similar_text(), metaphone()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1): int {}

	/**
	 * Get numeric formatting information
	 * <p>Returns an associative array containing localized numeric and monetary formatting information.</p>
	 * @return array <p><b>localeconv()</b> returns data based upon the current locale as set by <code>setlocale()</code>. The associative array that is returned contains the following fields:</p>   Array element Description     decimal_point Decimal point character   thousands_sep Thousands separator   grouping Array containing numeric groupings   int_curr_symbol International currency symbol (i.e. USD)   currency_symbol Local currency symbol (i.e. $)   mon_decimal_point Monetary decimal point character   mon_thousands_sep Monetary thousands separator   mon_grouping Array containing monetary groupings   positive_sign Sign for positive values   negative_sign Sign for negative values   int_frac_digits International fractional digits   frac_digits Local fractional digits   p_cs_precedes  <b><code>true</code></b> if currency_symbol precedes a positive value, <b><code>false</code></b> if it succeeds one    p_sep_by_space  <b><code>true</code></b> if a space separates currency_symbol from a positive value, <b><code>false</code></b> otherwise    n_cs_precedes  <b><code>true</code></b> if currency_symbol precedes a negative value, <b><code>false</code></b> if it succeeds one    n_sep_by_space  <b><code>true</code></b> if a space separates currency_symbol from a negative value, <b><code>false</code></b> otherwise    p_sign_posn  <ul> <li>0 - Parentheses surround the quantity and currency_symbol</li> <li>1 - The sign string precedes the quantity and currency_symbol</li> <li>2 - The sign string succeeds the quantity and currency_symbol</li> <li>3 - The sign string immediately precedes the currency_symbol</li> <li>4 - The sign string immediately succeeds the currency_symbol</li> </ul>    n_sign_posn  <ul> <li>0 - Parentheses surround the quantity and currency_symbol</li> <li>1 - The sign string precedes the quantity and currency_symbol</li> <li>2 - The sign string succeeds the quantity and currency_symbol</li> <li>3 - The sign string immediately precedes the currency_symbol</li> <li>4 - The sign string immediately succeeds the currency_symbol</li> </ul>    <p>The <code>p_sign_posn</code>, and <code>n_sign_posn</code> contain a string of formatting options. Each number representing one of the above listed conditions.</p><p>The grouping fields contain arrays that define the way numbers should be grouped. For example, the monetary grouping field for the nl_NL locale (in UTF-8 mode with the euro sign), would contain a 2 item array with the values 3 and 3. The higher the index in the array, the farther left the grouping is. If an array element is equal to <b><code>CHAR_MAX</code></b>, no further grouping is done. If an array element is equal to 0, the previous element should be used.</p>
	 * @link https://php.net/manual/en/function.localeconv.php
	 * @see setlocale()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8
	 */
	function localeconv(): array {}

	/**
	 * Strip whitespace (or other characters) from the beginning of a string
	 * <p>Strip whitespace (or other characters) from the beginning of a string.</p>
	 * @param string $string <p>The input string.</p>
	 * @param string $characters <p>You can also specify the characters you want to strip, by means of the <code>characters</code> parameter. Simply list all characters that you want to be stripped. With <code>..</code> you can specify a range of characters.</p>
	 * @return string <p>This function returns a string with whitespace stripped from the beginning of <code>string</code>. Without the second parameter, <b>ltrim()</b> will strip these characters:</p><ul> <li>  " " (ASCII <code>32</code> (<code>0x20</code>)), an ordinary space.  </li> <li>  "\t" (ASCII <code>9</code> (<code>0x09</code>)), a tab.  </li> <li>  "\n" (ASCII <code>10</code> (<code>0x0A</code>)), a new line (line feed).  </li> <li>  "\r" (ASCII <code>13</code> (<code>0x0D</code>)), a carriage return.  </li> <li>  "\0" (ASCII <code>0</code> (<code>0x00</code>)), the <code>NUL</code>-byte.  </li> <li>  "\v" (ASCII <code>11</code> (<code>0x0B</code>)), a vertical tab.  </li> </ul>
	 * @link https://php.net/manual/en/function.ltrim.php
	 * @see trim(), rtrim()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ltrim(string $string, string $characters = " \n\r\t\v\x00"): string {}

	/**
	 * Calculate the md5 hash of a string
	 * <p>Calculates the MD5 hash of <code>string</code> using the RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash.</p>
	 * @param string $string <p>The string.</p>
	 * @param bool $binary <p>If the optional <code>binary</code> is set to <b><code>true</code></b>, then the md5 digest is instead returned in raw binary format with a length of 16.</p>
	 * @return string <p>Returns the hash as a 32-character hexadecimal number.</p>
	 * @link https://php.net/manual/en/function.md5.php
	 * @see md5_file(), sha1_file(), crc32(), sha1(), hash(), crypt(), password_hash()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function md5(string $string, bool $binary = false): string {}

	/**
	 * Calculates the md5 hash of a given file
	 * <p>Calculates the MD5 hash of the file specified by the <code>filename</code> parameter using the RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash. The hash is a 32-character hexadecimal number.</p>
	 * @param string $filename <p>The filename</p>
	 * @param bool $binary <p>When <b><code>true</code></b>, returns the digest in raw binary format with a length of 16.</p>
	 * @return string|false <p>Returns a string on success, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.md5-file.php
	 * @see md5(), sha1_file(), crc32()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function md5_file(string $filename, bool $binary = false): string|false {}

	/**
	 * Calculate the metaphone key of a string
	 * <p>Calculates the metaphone key of <code>string</code>.</p><p>Similar to <code>soundex()</code> metaphone creates the same key for similar sounding words. It's more accurate than <code>soundex()</code> as it knows the basic rules of English pronunciation. The metaphone generated keys are of variable length.</p><p>Metaphone was developed by Lawrence Philips &lt;lphilips at verity dot com&gt;. It is described in ["Practical Algorithms for Programmers", Binstock &amp; Rex, Addison Wesley, 1995].</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $max_phonemes <p>This parameter restricts the returned metaphone key to <code>max_phonemes</code> <i>characters</i> in length. However, the resulting phonemes are always transcribed completely, so the resulting string length may be slightly longer than <code>max_phonemes</code>. The default value of <code>0</code> means no restriction.</p>
	 * @return string <p>Returns the metaphone key as a string.</p>
	 * @link https://php.net/manual/en/function.metaphone.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function metaphone(string $string, int $max_phonemes = 0): string {}

	/**
	 * Formats a number as a currency string
	 * <p><b>money_format()</b> returns a formatted version of <code>number</code>. This function wraps the C library function <b>strfmon()</b>, with the difference that this implementation converts only one number at a time.</p>
	 * @param string $format <p>The format specification consists of the following sequence:</p><ul> <li><p>a <code>%</code> character</p></li> <li><p>optional flags</p></li> <li><p>optional field width</p></li> <li><p>optional left precision</p></li> <li><p>optional right precision</p></li> <li><p>a required conversion character</p></li> </ul> <p></p>Flags <p>One or more of the optional flags below can be used:</p>  <code>=</code>f  <p>The character <code>=</code> followed by a (single byte) character f to be used as the numeric fill character. The default fill character is space.</p>   <code>^</code>  <p>Disable the use of grouping characters (as defined by the current locale).</p>   <code>+</code> or <code>(</code>  <p>Specify the formatting style for positive and negative numbers. If <code>+</code> is used, the locale's equivalent for <code>+</code> and <code>-</code> will be used. If <code>(</code> is used, negative amounts are enclosed in parenthesis. If no specification is given, the default is <code>+</code>.</p>   <code>!</code>  <p>Suppress the currency symbol from the output string.</p>   <code>-</code>  <p>If present, it will make all fields left-justified (padded to the right), as opposed to the default which is for the fields to be right-justified (padded to the left).</p>   <p></p>Field width <p></p>  w  <p>A decimal digit string specifying a minimum field width. Field will be right-justified unless the flag <code>-</code> is used. Default value is 0 (zero).</p>   <p></p>Left precision <p></p>  <code>#</code>n  <p>The maximum number of digits (n) expected to the left of the decimal character (e.g. the decimal point). It is used usually to keep formatted output aligned in the same columns, using the fill character if the number of digits is less than n. If the number of actual digits is bigger than n, then this specification is ignored.</p> <p>If grouping has not been suppressed using the <code>^</code> flag, grouping separators will be inserted before the fill characters (if any) are added. Grouping separators will not be applied to fill characters, even if the fill character is a digit.</p> <p>To ensure alignment, any characters appearing before or after the number in the formatted output such as currency or sign symbols are padded as necessary with space characters to make their positive and negative formats an equal length.</p>   <p></p> Right precision  <p></p>  <code>.</code>p  <p>A period followed by the number of digits (p) after the decimal character. If the value of p is 0 (zero), the decimal character and the digits to its right will be omitted. If no right precision is included, the default will dictated by the current locale in use. The amount being formatted is rounded to the specified number of digits prior to formatting.</p>   <p></p> Conversion characters  <p></p>  <code>i</code>  <p>The number is formatted according to the locale's international currency format (e.g. for the USA locale: USD 1,234.56).</p>   <code>n</code>  <p>The number is formatted according to the locale's national currency format (e.g. for the de_DE locale: EU1.234,56).</p>   <code>%</code>  <p>Returns the <code>%</code> character.</p>
	 * @param float $number <p>The number to be formatted.</p>
	 * @return string <p>Returns the formatted string. Characters before and after the formatting string will be returned unchanged. Non-numeric <code>number</code> causes returning <b><code>null</code></b> and emitting <b><code>E_WARNING</code></b>.</p>
	 * @link https://php.net/manual/en/function.money-format.php
	 * @see setlocale(), sscanf(), sprintf(), printf(), number_format()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function money_format(string $format, float $number): string {}

	/**
	 * Inserts HTML line breaks before all newlines in a string
	 * <p>Returns <code>string</code> with <code>&lt;br /&gt;</code> or <code>&lt;br&gt;</code> inserted before all newlines (<code>\r\n</code>, <code>\n\r</code>, <code>\n</code> and <code>\r</code>).</p>
	 * @param string $string <p>The input string.</p>
	 * @param bool $use_xhtml <p>Whether to use XHTML compatible line breaks or not.</p>
	 * @return string <p>Returns the altered string.</p>
	 * @link https://php.net/manual/en/function.nl2br.php
	 * @see htmlspecialchars(), htmlentities(), wordwrap(), str_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function nl2br(string $string, bool $use_xhtml = true): string {}

	/**
	 * Query language and locale information
	 * <p><b>nl_langinfo()</b> is used to access individual elements of the locale categories. Unlike <code>localeconv()</code>, which returns all of the elements, <b>nl_langinfo()</b> allows you to select any specific element.</p>
	 * @param int $item <p><code>item</code> may be an integer value of the element or the constant name of the element. The following is a list of constant names for <code>item</code> that may be used and their description. Some of these constants may not be defined or hold no value for certain locales.</p> <b>nl_langinfo Constants</b>     Constant Description     <i>LC_TIME Category Constants</i>   <b><code>ABDAY_(1-7)</code></b> Abbreviated name of n-th day of the week.   <b><code>DAY_(1-7)</code></b> Name of the n-th day of the week (DAY_1 = Sunday).   <b><code>ABMON_(1-12)</code></b> Abbreviated name of the n-th month of the year.   <b><code>MON_(1-12)</code></b> Name of the n-th month of the year.   <b><code>AM_STR</code></b> String for Ante meridian.   <b><code>PM_STR</code></b> String for Post meridian.   <b><code>D_T_FMT</code></b> String that can be used as the format string for <code>strftime()</code> to represent time and date.   <b><code>D_FMT</code></b> String that can be used as the format string for <code>strftime()</code> to represent date.   <b><code>T_FMT</code></b> String that can be used as the format string for <code>strftime()</code> to represent time.   <b><code>T_FMT_AMPM</code></b> String that can be used as the format string for <code>strftime()</code> to represent time in 12-hour format with ante/post meridian.   <b><code>ERA</code></b> Alternate era.   <b><code>ERA_YEAR</code></b> Year in alternate era format.   <b><code>ERA_D_T_FMT</code></b> Date and time in alternate era format (string can be used in <code>strftime()</code>).   <b><code>ERA_D_FMT</code></b> Date in alternate era format (string can be used in <code>strftime()</code>).   <b><code>ERA_T_FMT</code></b> Time in alternate era format (string can be used in <code>strftime()</code>).   <i>LC_MONETARY Category Constants</i>   <b><code>INT_CURR_SYMBOL</code></b> International currency symbol.   <b><code>CURRENCY_SYMBOL</code></b> Local currency symbol.   <b><code>CRNCYSTR</code></b> Same value as <b><code>CURRENCY_SYMBOL</code></b>.   <b><code>MON_DECIMAL_POINT</code></b> Decimal point character.   <b><code>MON_THOUSANDS_SEP</code></b> Thousands separator (groups of three digits).   <b><code>MON_GROUPING</code></b> Like <code>"grouping"</code> element.   <b><code>POSITIVE_SIGN</code></b> Sign for positive values.   <b><code>NEGATIVE_SIGN</code></b> Sign for negative values.   <b><code>INT_FRAC_DIGITS</code></b> International fractional digits.   <b><code>FRAC_DIGITS</code></b> Local fractional digits.   <b><code>P_CS_PRECEDES</code></b> Returns 1 if <b><code>CURRENCY_SYMBOL</code></b> precedes a positive value.   <b><code>P_SEP_BY_SPACE</code></b> Returns 1 if a space separates <b><code>CURRENCY_SYMBOL</code></b> from a positive value.   <b><code>N_CS_PRECEDES</code></b> Returns 1 if <b><code>CURRENCY_SYMBOL</code></b> precedes a negative value.   <b><code>N_SEP_BY_SPACE</code></b> Returns 1 if a space separates <b><code>CURRENCY_SYMBOL</code></b> from a negative value.   <b><code>P_SIGN_POSN</code></b>  <ul> <li>  Returns 0 if parentheses surround the quantity and <b><code>CURRENCY_SYMBOL</code></b>.  </li> <li>  Returns 1 if the sign string precedes the quantity and <b><code>CURRENCY_SYMBOL</code></b>.  </li> <li>  Returns 2 if the sign string follows the quantity and <b><code>CURRENCY_SYMBOL</code></b>.  </li> <li>  Returns 3 if the sign string immediately precedes the <b><code>CURRENCY_SYMBOL</code></b>.  </li> <li>  Returns 4 if the sign string immediately follows the <b><code>CURRENCY_SYMBOL</code></b>.  </li> </ul>    <b><code>N_SIGN_POSN</code></b>   <i>LC_NUMERIC Category Constants</i>   <b><code>DECIMAL_POINT</code></b> Decimal point character.   <b><code>RADIXCHAR</code></b> Same value as <b><code>DECIMAL_POINT</code></b>.   <b><code>THOUSANDS_SEP</code></b> Separator character for thousands (groups of three digits).   <b><code>THOUSEP</code></b> Same value as <b><code>THOUSANDS_SEP</code></b>.   <b><code>GROUPING</code></b> &nbsp;   <i>LC_MESSAGES Category Constants</i>   <b><code>YESEXPR</code></b> Regex string for matching <code>"yes"</code> input.   <b><code>NOEXPR</code></b> Regex string for matching <code>"no"</code> input.   <b><code>YESSTR</code></b> Output string for <code>"yes"</code>.   <b><code>NOSTR</code></b> Output string for <code>"no"</code>.   <i>LC_CTYPE Category Constants</i>   <b><code>CODESET</code></b> Return a string with the name of the character encoding.
	 * @return string|false <p>Returns the element as a string, or <b><code>false</code></b> if <code>item</code> is not valid.</p>
	 * @link https://php.net/manual/en/function.nl-langinfo.php
	 * @see setlocale(), localeconv()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function nl_langinfo(int $item): string|false {}

	/**
	 * Format a number with grouped thousands
	 * <p>Formats a number with grouped thousands and optionally decimal digits.</p>
	 * @param float $num <p>The number being formatted.</p>
	 * @param int $decimals <p>Sets the number of decimal digits. If <code>0</code>, the <code>decimal_separator</code> is omitted from the return value.</p>
	 * @param ?string $decimal_separator <p>Sets the separator for the decimal point.</p>
	 * @param ?string $thousands_separator <p>Sets the thousands separator.</p>
	 * @return string <p>A formatted version of <code>num</code>.</p>
	 * @link https://php.net/manual/en/function.number-format.php
	 * @see money_format(), sprintf(), printf(), sscanf()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function number_format(float $num, int $decimals = 0, ?string $decimal_separator = ".", ?string $thousands_separator = ","): string {}

	/**
	 * Convert the first byte of a string to a value between 0 and 255
	 * <p>Interprets the binary value of the first byte of <code>character</code> as an unsigned integer between 0 and 255.</p><p>If the string is in a single-byte encoding, such as ASCII, ISO-8859, or Windows 1252, this is equivalent to returning the position of a character in the character set's mapping table. However, note that this function is not aware of any string encoding, and in particular will never identify a Unicode code point in a multi-byte encoding such as UTF-8 or UTF-16.</p><p>This function complements <code>chr()</code>.</p>
	 * @param string $character <p>A character.</p>
	 * @return int <p>An integer between 0 and 255.</p>
	 * @link https://php.net/manual/en/function.ord.php
	 * @see chr(), mb_ord(), IntlChar::ord()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ord(string $character): int {}

	/**
	 * Parses the string into variables
	 * <p>Parses <code>string</code> as if it were the query string passed via a URL and sets variables in the current scope (or in the array if <code>result</code> is provided).</p>
	 * @param string $string <p>The input string.</p>
	 * @param array $result <p>If the second parameter <code>result</code> is present, variables are stored in this variable as array elements instead.</p> <p><b>Warning</b></p> <p>Using this function without the <code>result</code> parameter is highly <i>DISCOURAGED</i> and <i>DEPRECATED</i> as of PHP 7.2.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.parse-str.php
	 * @see parse_url(), pathinfo(), http_build_query(), urldecode()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function parse_str(string $string, array &$result): void {}

	/**
	 * Output a formatted string
	 * <p>Produces output according to <code>format</code>.</p>
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param mixed $values
	 * @return int <p>Returns the length of the outputted string.</p>
	 * @link https://php.net/manual/en/function.printf.php
	 * @see print, sprintf(), fprintf(), vprintf(), vsprintf(), vfprintf(), sscanf(), fscanf(), number_format(), date(), flush()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function printf(string $format, mixed ...$values): int {}

	/**
	 * Convert a quoted-printable string to an 8 bit string
	 * <p>This function returns an 8-bit binary string corresponding to the decoded quoted printable string (according to RFC2045, section 6.7, not RFC2821, section 4.5.2, so additional periods are not stripped from the beginning of line).</p><p>This function is similar to <code>imap_qprint()</code>, except this one does not require the IMAP module to work.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the 8-bit binary string.</p>
	 * @link https://php.net/manual/en/function.quoted-printable-decode.php
	 * @see quoted_printable_encode()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function quoted_printable_decode(string $string): string {}

	/**
	 * Convert a 8 bit string to a quoted-printable string
	 * <p>Returns a quoted printable string created according to RFC2045, section 6.7.</p><p>This function is similar to <code>imap_8bit()</code>, except this one does not require the IMAP module to work.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the encoded string.</p>
	 * @link https://php.net/manual/en/function.quoted-printable-encode.php
	 * @see quoted_printable_decode(), iconv_mime_encode()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function quoted_printable_encode(string $string): string {}

	/**
	 * Quote meta characters
	 * <p>Returns a version of str with a backslash character (<code>\</code>) before every character that is among these:</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the string with meta characters quoted, or <b><code>false</code></b> if an empty string is given as <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.quotemeta.php
	 * @see addslashes(), addcslashes(), htmlentities(), htmlspecialchars(), nl2br(), stripslashes(), stripcslashes(), preg_quote()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function quotemeta(string $string): string {}

	/**
	 * Strip whitespace (or other characters) from the end of a string
	 * <p>This function returns a string with whitespace (or other characters) stripped from the end of <code>string</code>.</p><p>Without the second parameter, <b>rtrim()</b> will strip these characters:</p>
	 * @param string $string <p>The input string.</p>
	 * @param string $characters <p>You can also specify the characters you want to strip, by means of the <code>characters</code> parameter. Simply list all characters that you want to be stripped. With <code>..</code> you can specify a range of characters.</p>
	 * @return string <p>Returns the modified string.</p>
	 * @link https://php.net/manual/en/function.rtrim.php
	 * @see trim(), ltrim()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rtrim(string $string, string $characters = " \n\r\t\v\x00"): string {}

	/**
	 * Set locale information
	 * <p>Alternative signature (not supported with named arguments):</p><p>Sets locale information.</p><p>The locale information is maintained per process, not per thread. If you are running PHP on a multithreaded server API , you may experience sudden changes in locale settings while a script is running, though the script itself never called <b>setlocale()</b>. This happens due to other scripts running in different threads of the same process at the same time, changing the process-wide locale using <b>setlocale()</b>. On Windows, locale information is maintained per thread as of PHP 7.0.5.</p>
	 * @param int $category <p><code>category</code> is a named constant specifying the category of the functions affected by the locale setting:</p><ul> <li>  <b><code>LC_ALL</code></b> for all of the below  </li> <li>  <b><code>LC_COLLATE</code></b> for string comparison, see <code>strcoll()</code>  </li> <li>  <b><code>LC_CTYPE</code></b> for character classification and conversion, for example <code>strtoupper()</code>  </li> <li>  <b><code>LC_MONETARY</code></b> for <code>localeconv()</code>  </li> <li>  <b><code>LC_NUMERIC</code></b> for decimal separator (See also <code>localeconv()</code>)  </li> <li>  <b><code>LC_TIME</code></b> for date and time formatting with <code>strftime()</code>  </li> <li>  <b><code>LC_MESSAGES</code></b> for system responses (available if PHP was compiled with <code>libintl</code>)  </li> </ul>
	 * @param string $locales <p>If <code>locales</code> is the empty string <code>""</code>, the locale names will be set from the values of environment variables with the same names as the above categories, or from "LANG".</p> <p>If <code>locales</code> is <code>"0"</code>, the locale setting is not affected, only the current setting is returned.</p> <p>If <code>locales</code> is followed by additional parameters then each parameter is tried to be set as new locale until success. This is useful if a locale is known under different names on different systems or for providing a fallback for a possibly not available locale.</p>
	 * @param string $rest <p>Optional string parameters to try as locale settings until success.</p>
	 * @return string|false <p>Returns the new current locale, or <b><code>false</code></b> if the locale functionality is not implemented on your platform, the specified locale does not exist or the category name is invalid.</p><p>An invalid category name also causes a warning message. Category/locale names can be found in RFC 1766 and ISO 639. Different systems have different naming schemes for locales.</p><p><b>Note</b>:</p><p>The return value of <b>setlocale()</b> depends on the system that PHP is running. It returns exactly what the system <code>setlocale</code> function returns.</p>
	 * @link https://php.net/manual/en/function.setlocale.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function setlocale(int $category, string $locales, string ...$rest): string|false {}

	/**
	 * Calculate the sha1 hash of a string
	 * <p>Calculates the sha1 hash of <code>string</code> using the US Secure Hash Algorithm 1.</p>
	 * @param string $string <p>The input string.</p>
	 * @param bool $binary <p>If the optional <code>binary</code> is set to <b><code>true</code></b>, then the sha1 digest is instead returned in raw binary format with a length of 20, otherwise the returned value is a 40-character hexadecimal number.</p>
	 * @return string <p>Returns the sha1 hash as a string.</p>
	 * @link https://php.net/manual/en/function.sha1.php
	 * @see sha1_file(), crc32(), md5(), hash(), crypt(), password_hash()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function sha1(string $string, bool $binary = false): string {}

	/**
	 * Calculate the sha1 hash of a file
	 * <p>Calculates the sha1 hash of the file specified by <code>filename</code> using the US Secure Hash Algorithm 1, and returns that hash. The hash is a 40-character hexadecimal number.</p>
	 * @param string $filename <p>The filename of the file to hash.</p>
	 * @param bool $binary <p>When <b><code>true</code></b>, returns the digest in raw binary format with a length of 20.</p>
	 * @return string|false <p>Returns a string on success, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.sha1-file.php
	 * @see sha1(), md5_file(), crc32()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function sha1_file(string $filename, bool $binary = false): string|false {}

	/**
	 * Calculate the similarity between two strings
	 * <p>This calculates the similarity between two strings as described in Programming Classics: Implementing the World's Best Algorithms by Oliver (ISBN 0-131-00413-1). Note that this implementation does not use a stack as in Oliver's pseudo code, but recursive calls which may or may not speed up the whole process. Note also that the complexity of this algorithm is O(N&#42;&#42;3) where N is the length of the longest string.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p> <p><b>Note</b>:</p><p>Swapping the <code>string1</code> and <code>string2</code> may yield a different result; see the example below.</p>
	 * @param float $percent <p>By passing a reference as third argument, <b>similar_text()</b> will calculate the similarity in percent, by dividing the result of <b>similar_text()</b> by the average of the lengths of the given strings times <code>100</code>.</p>
	 * @return int <p>Returns the number of matching chars in both strings.</p><p>The number of matching characters is calculated by finding the longest first common substring, and then doing this for the prefixes and the suffixes, recursively. The lengths of all found common substrings are added.</p>
	 * @link https://php.net/manual/en/function.similar-text.php
	 * @see levenshtein(), soundex()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function similar_text(string $string1, string $string2, float &$percent = null): int {}

	/**
	 * Calculate the soundex key of a string
	 * <p>Calculates the soundex key of <code>string</code>.</p><p>Soundex keys have the property that words pronounced similarly produce the same soundex key, and can thus be used to simplify searches in databases where you know the pronunciation but not the spelling.</p><p>This particular soundex function is one described by Donald Knuth in "The Art Of Computer Programming, vol. 3: Sorting And Searching", Addison-Wesley (1973), pp. 391-392.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the soundex key as a <code>string</code> with four characters. If at least one letter is contained in <code>string</code>, the returned string starts with a letter. Otherwise <code>"0000"</code> is returned.</p>
	 * @link https://php.net/manual/en/function.soundex.php
	 * @see levenshtein(), metaphone(), similar_text()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function soundex(string $string): string {}

	/**
	 * Return a formatted string
	 * <p>Returns a string produced according to the formatting string <code>format</code>.</p>
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param mixed $values
	 * @return string <p>Returns a string produced according to the formatting string <code>format</code>.</p>
	 * @link https://php.net/manual/en/function.sprintf.php
	 * @see printf(), fprintf(), vprintf(), vsprintf(), vfprintf(), sscanf(), fscanf(), number_format(), date()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function sprintf(string $format, mixed ...$values): string {}

	/**
	 * Parses input from a string according to a format
	 * <p>The function <b>sscanf()</b> is the input analog of <code>printf()</code>. <b>sscanf()</b> reads from the string <code>string</code> and interprets it according to the specified <code>format</code>, which is described in the documentation for <code>sprintf()</code>.</p><p>Any whitespace in the format string matches any whitespace in the input string. This means that even a tab \t in the format string can match a single space character in the input string.</p>
	 * @param string $string <p>The input <code>string</code> being parsed.</p>
	 * @param string $format <p>The interpreted format for <code>string</code>, which is described in the documentation for <code>sprintf()</code> with following differences:</p><ul> <li> Function is not locale-aware. </li> <li> <code>F</code>, <code>g</code>, <code>G</code> and <code>b</code> are not supported. </li> <li> <code>D</code> stands for decimal number. </li> <li> <code>i</code> stands for integer with base detection. </li> <li> <code>n</code> stands for number of characters processed so far. </li> <li> <code>s</code> stops reading at any whitespace character. </li> </ul>
	 * @param mixed $vars <p>Optionally pass in variables by reference that will contain the parsed values.</p>
	 * @return array|int|null <p>If only two parameters were passed to this function, the values parsed will be returned as an array. Otherwise, if optional parameters are passed, the function will return the number of assigned values. The optional parameters must be passed by reference.</p><p>If there are more substrings expected in the <code>format</code> than there are available within <code>string</code>, <b><code>null</code></b> will be returned.</p>
	 * @link https://php.net/manual/en/function.sscanf.php
	 * @see printf(), sprintf(), fprintf(), vprintf(), vsprintf(), vfprintf(), fscanf(), number_format(), date()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function sscanf(string $string, string $format, mixed &...$vars): array|int|null {}

	/**
	 * Determine if a string contains a given substring
	 * <p>Performs a case-sensitive check indicating if <code>needle</code> is contained in <code>haystack</code>.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>The substring to search for in the <code>haystack</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>needle</code> is in <code>haystack</code>, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.str-contains.php
	 * @see str_ends_with(), str_starts_with(), stripos(), strrpos(), strripos(), strstr(), strpbrk(), substr(), preg_match()
	 * @since PHP 8
	 */
	function str_contains(string $haystack, string $needle): bool {}

	/**
	 * Checks if a string ends with a given substring
	 * <p>Performs a case-sensitive check indicating if <code>haystack</code> ends with <code>needle</code>.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>The substring to search for in the <code>haystack</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>haystack</code> ends with <code>needle</code>, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.str-ends-with.php
	 * @see str_contains(), str_starts_with(), stripos(), strrpos(), strripos(), strstr(), strpbrk(), substr(), preg_match()
	 * @since PHP 8
	 */
	function str_ends_with(string $haystack, string $needle): bool {}

	/**
	 * Parse a CSV string into an array
	 * <p>Parses a string input for fields in CSV format and returns an array containing the fields read.</p><p><b>Note</b>:</p><p>The locale settings are taken into account by this function. If <code>LC_CTYPE</code> is e.g. <code>en_US.UTF-8</code>, strings in one-byte encodings may be read wrongly by this function.</p>
	 * @param string $string <p>The string to parse.</p>
	 * @param string $separator <p>Set the field delimiter (one single-byte character only).</p>
	 * @param string $enclosure <p>Set the field enclosure character (one single-byte character only).</p>
	 * @param string $escape <p>Set the escape character (at most one single-byte character). Defaults as a backslash (<code>\</code>) An empty string (<code>""</code>) disables the proprietary escape mechanism.</p> <p><b>Note</b>:  Usually an <code>enclosure</code> character is escaped inside a field by doubling it; however, the <code>escape</code> character can be used as an alternative. So for the default parameter values <code>""</code> and <code>\"</code> have the same meaning. Other than allowing to escape the <code>enclosure</code> character the <code>escape</code> character has no special meaning; it isn't even meant to escape itself. </p>
	 * @return array <p>Returns an indexed array containing the fields read.</p>
	 * @link https://php.net/manual/en/function.str-getcsv.php
	 * @see fgetcsv()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function str_getcsv(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array {}

	/**
	 * Case-insensitive version of str_replace()
	 * <p>This function returns a string or an array with all occurrences of <code>search</code> in <code>subject</code> (ignoring case) replaced with the given <code>replace</code> value. If you don't need fancy replacing rules, you should generally use this function instead of <code>preg_replace()</code> with the <code>i</code> modifier.</p>
	 * @param array|string $search <p>The value being searched for, otherwise known as the <i>needle</i>. An array may be used to designate multiple needles.</p>
	 * @param array|string $replace <p>The replacement value that replaces found <code>search</code> values. An array may be used to designate multiple replacements.</p>
	 * @param string|array $subject <p>The string or array being searched and replaced on, otherwise known as the <i>haystack</i>.</p> <p>If <code>subject</code> is an array, then the search and replace is performed with every entry of <code>subject</code>, and the return value is an array as well.</p>
	 * @param int $count <p>If passed, this will be set to the number of replacements performed.</p>
	 * @return string|array <p>Returns a string or an array of replacements.</p>
	 * @link https://php.net/manual/en/function.str-ireplace.php
	 * @see str_replace(), preg_replace(), strtr()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function str_ireplace(array|string $search, array|string $replace, string|array $subject, int &$count = null): string|array {}

	/**
	 * Pad a string to a certain length with another string
	 * <p>This function returns the <code>string</code> string padded on the left, the right, or both sides to the specified padding length. If the optional argument <code>pad_string</code> is not supplied, the <code>string</code> is padded with spaces, otherwise it is padded with characters from <code>pad_string</code> up to the limit.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $length <p>If the value of <code>length</code> is negative, less than, or equal to the length of the input string, no padding takes place, and <code>string</code> will be returned.</p>
	 * @param string $pad_string <p><b>Note</b>:</p><p>The <code>pad_string</code> may be truncated if the required number of padding characters can't be evenly divided by the <code>pad_string</code>'s length.</p>
	 * @param int $pad_type <p>Optional argument <code>pad_type</code> can be <b><code>STR_PAD_RIGHT</code></b>, <b><code>STR_PAD_LEFT</code></b>, or <b><code>STR_PAD_BOTH</code></b>. If <code>pad_type</code> is not specified it is assumed to be <b><code>STR_PAD_RIGHT</code></b>.</p>
	 * @return string <p>Returns the padded string.</p>
	 * @link https://php.net/manual/en/function.str-pad.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT): string {}

	/**
	 * Repeat a string
	 * <p>Returns <code>string</code> repeated <code>times</code> times.</p>
	 * @param string $string <p>The string to be repeated.</p>
	 * @param int $times <p>Number of time the <code>string</code> string should be repeated.</p> <p><code>times</code> has to be greater than or equal to 0. If the <code>times</code> is set to 0, the function will return an empty string.</p>
	 * @return string <p>Returns the repeated string.</p>
	 * @link https://php.net/manual/en/function.str-repeat.php
	 * @see str_pad(), substr_count()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function str_repeat(string $string, int $times): string {}

	/**
	 * Replace all occurrences of the search string with the replacement string
	 * <p>This function returns a string or an array with all occurrences of <code>search</code> in <code>subject</code> replaced with the given <code>replace</code> value.</p><p>If you don't need fancy replacing rules (like regular expressions), you should use this function instead of <code>preg_replace()</code>.</p>
	 * @param array|string $search <p>The value being searched for, otherwise known as the <i>needle</i>. An array may be used to designate multiple needles.</p>
	 * @param array|string $replace <p>The replacement value that replaces found <code>search</code> values. An array may be used to designate multiple replacements.</p>
	 * @param string|array $subject <p>The string or array being searched and replaced on, otherwise known as the <i>haystack</i>.</p> <p>If <code>subject</code> is an array, then the search and replace is performed with every entry of <code>subject</code>, and the return value is an array as well.</p>
	 * @param int $count <p>If passed, this will be set to the number of replacements performed.</p>
	 * @return string|array <p>This function returns a string or an array with the replaced values.</p>
	 * @link https://php.net/manual/en/function.str-replace.php
	 * @see str_ireplace(), substr_replace(), preg_replace(), strtr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function str_replace(array|string $search, array|string $replace, string|array $subject, int &$count = null): string|array {}

	/**
	 * Perform the rot13 transform on a string
	 * <p>Performs the ROT13 encoding on the <code>string</code> argument and returns the resulting string.</p><p>The ROT13 encoding simply shifts every letter by 13 places in the alphabet while leaving non-alpha characters untouched. Encoding and decoding are done by the same function, passing an encoded string as argument will return the original version.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the ROT13 version of the given string.</p>
	 * @link https://php.net/manual/en/function.str-rot13.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function str_rot13(string $string): string {}

	/**
	 * Randomly shuffles a string
	 * <p><b>str_shuffle()</b> shuffles a string. One permutation of all possible is created.</p><p>This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using <code>random_int()</code>, <code>random_bytes()</code>, or <code>openssl_random_pseudo_bytes()</code> instead.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the shuffled string.</p>
	 * @link https://php.net/manual/en/function.str-shuffle.php
	 * @see shuffle(), rand()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function str_shuffle(string $string): string {}

	/**
	 * Convert a string to an array
	 * <p>Converts a string to an array.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $length <p>Maximum length of the chunk.</p>
	 * @return array <p>If the optional <code>length</code> parameter is specified, the returned array will be broken down into chunks with each being <code>length</code> in length, otherwise each chunk will be one character in length.</p><p><b><code>false</code></b> is returned if <code>length</code> is less than 1. If the <code>length</code> length exceeds the length of <code>string</code>, the entire string is returned as the first (and only) array element.</p>
	 * @link https://php.net/manual/en/function.str-split.php
	 * @see mb_str_split(), chunk_split(), preg_split(), explode(), count_chars(), str_word_count()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function str_split(string $string, int $length = 1): array {}

	/**
	 * Checks if a string starts with a given substring
	 * <p>Performs a case-sensitive check indicating if <code>haystack</code> begins with <code>needle</code>.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>The substring to search for in the <code>haystack</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>haystack</code> begins with <code>needle</code>, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.str-starts-with.php
	 * @see str_contains(), str_ends_with(), stripos(), strrpos(), strripos(), strstr(), strpbrk(), substr(), preg_match()
	 * @since PHP 8
	 */
	function str_starts_with(string $haystack, string $needle): bool {}

	/**
	 * Return information about words used in a string
	 * <p>Counts the number of words inside <code>string</code>. If the optional <code>format</code> is not specified, then the return value will be an integer representing the number of words found. In the event the <code>format</code> is specified, the return value will be an array, content of which is dependent on the <code>format</code>. The possible value for the <code>format</code> and the resultant outputs are listed below.</p><p>For the purpose of this function, 'word' is defined as a locale dependent string containing alphabetic characters, which also may contain, but not start with "'" and "-" characters. Note that multibyte locales are not supported.</p>
	 * @param string $string <p>The string</p>
	 * @param int $format <p>Specify the return value of this function. The current supported values are:</p><ul> <li>  0 - returns the number of words found  </li> <li>  1 - returns an array containing all the words found inside the <code>string</code>  </li> <li>  2 - returns an associative array, where the key is the numeric position of the word inside the <code>string</code> and the value is the actual word itself  </li> </ul>
	 * @param ?string $characters <p>A list of additional characters which will be considered as 'word'</p>
	 * @return array|int <p>Returns an array or an integer, depending on the <code>format</code> chosen.</p>
	 * @link https://php.net/manual/en/function.str-word-count.php
	 * @see explode(), preg_split(), count_chars(), substr_count()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function str_word_count(string $string, int $format = 0, ?string $characters = null): array|int {}

	/**
	 * Binary safe case-insensitive string comparison
	 * <p>Binary safe case-insensitive string comparison. The comparision is not locale aware; only ASCII letters are compared in a case-insensitive way.</p>
	 * @param string $string1 <p>The first string</p>
	 * @param string $string2 <p>The second string</p>
	 * @return int <p>Returns &lt; 0 if <code>string1</code> is less than <code>string2</code>; &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strcasecmp.php
	 * @see strcmp(), preg_match(), substr_compare(), strncasecmp(), stristr(), substr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strcasecmp(string $string1, string $string2): int {}

	/**
	 * Alias of strstr()
	 * <p>This function is an alias of: <code>strstr()</code>.</p>
	 * @param string $haystack <p>The input string.</p>
	 * @param string $needle <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param bool $before_needle <p>If <b><code>true</code></b>, <b>strstr()</b> returns the part of the <code>haystack</code> before the first occurrence of the <code>needle</code> (excluding the needle).</p>
	 * @return string|false
	 * @link https://php.net/manual/en/function.strchr.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strchr(string $haystack, string $needle, bool $before_needle = false): string|false {}

	/**
	 * Binary safe string comparison
	 * <p>Note that this comparison is case sensitive.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p>
	 * @return int <p>Returns &lt; 0 if <code>string1</code> is less than <code>string2</code>; &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strcmp.php
	 * @see strcasecmp(), preg_match(), substr_compare(), strncmp(), strstr(), substr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strcmp(string $string1, string $string2): int {}

	/**
	 * Locale based string comparison
	 * <p>Note that this comparison is case sensitive, and unlike <code>strcmp()</code> this function is not binary safe.</p><p><b>strcoll()</b> uses the current locale for doing the comparisons. If the current locale is C or POSIX, this function is equivalent to <code>strcmp()</code>.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p>
	 * @return int <p>Returns &lt; 0 if <code>string1</code> is less than <code>string2</code>; &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strcoll.php
	 * @see preg_match(), strcmp(), strcasecmp(), substr(), stristr(), strncasecmp(), strncmp(), strstr(), setlocale()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8
	 */
	function strcoll(string $string1, string $string2): int {}

	/**
	 * Find length of initial segment not matching mask
	 * <p>Returns the length of the initial segment of <code>string</code> which does <i>not</i> contain any of the characters in <code>characters</code>.</p><p>If <code>offset</code> and <code>length</code> are omitted, then all of <code>string</code> will be examined. If they are included, then the effect will be the same as calling <code>strcspn(substr($string, $offset, $length), $characters)</code> (see substr for more information).</p>
	 * @param string $string <p>The string to examine.</p>
	 * @param string $characters <p>The string containing every disallowed character.</p>
	 * @param int $offset <p>The position in <code>string</code> to start searching.</p> <p>If <code>offset</code> is given and is non-negative, then <b>strcspn()</b> will begin examining <code>string</code> at the <code>offset</code>'th position. For instance, in the string '<code>abcdef</code>', the character at position <code>0</code> is '<code>a</code>', the character at position <code>2</code> is '<code>c</code>', and so forth.</p> <p>If <code>offset</code> is given and is negative, then <b>strcspn()</b> will begin examining <code>string</code> at the <code>offset</code>'th position from the end of <code>string</code>.</p>
	 * @param ?int $length <p>The length of the segment from <code>string</code> to examine.</p> <p>If <code>length</code> is given and is non-negative, then <code>string</code> will be examined for <code>length</code> characters after the starting position.</p> <p>If <code>length</code> is given and is negative, then <code>string</code> will be examined from the starting position up to <code>length</code> characters from the end of <code>string</code>.</p>
	 * @return int <p>Returns the length of the initial segment of <code>string</code> which consists entirely of characters <i>not</i> in <code>characters</code>.</p><p><b>Note</b>:</p><p>When a <code>offset</code> parameter is set, the returned length is counted starting from this position, not from the beginning of <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.strcspn.php
	 * @see strspn()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strcspn(string $string, string $characters, int $offset = 0, ?int $length = null): int {}

	/**
	 * Strip HTML and PHP tags from a string
	 * <p>This function tries to return a string with all NULL bytes, HTML and PHP tags stripped from a given <code>string</code>. It uses the same tag stripping state machine as the <code>fgetss()</code> function.</p>
	 * @param string $string <p>The input string.</p>
	 * @param array|string|null $allowed_tags <p>You can use the optional second parameter to specify tags which should not be stripped. These are either given as <code>string</code>, or as of PHP 7.4.0, as <code>array</code>. Refer to the example below regarding the format of this parameter.</p> <p><b>Note</b>:</p><p>HTML comments and PHP tags are also stripped. This is hardcoded and can not be changed with <code>allowed_tags</code>.</p>  <p><b>Note</b>:</p><p>Self-closing XHTML tags are ignored and only non-self-closing tags should be used in <code>allowed_tags</code>. For example, to allow both <code>&lt;br&gt;</code> and <code>&lt;br/&gt;</code>, you should use:</p>   <code> &lt;&#63;php<br>strip_tags($input,&nbsp;'&lt;br&gt;');<br>&#63;&gt;  </code>
	 * @return string <p>Returns the stripped string.</p>
	 * @link https://php.net/manual/en/function.strip-tags.php
	 * @see htmlspecialchars()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strip_tags(string $string, array|string|null $allowed_tags = null): string {}

	/**
	 * Un-quote string quoted with addcslashes()
	 * <p>Returns a string with backslashes stripped off. Recognizes C-like <code>\n</code>, <code>\r</code> ..., octal and hexadecimal representation.</p>
	 * @param string $string <p>The string to be unescaped.</p>
	 * @return string <p>Returns the unescaped string.</p>
	 * @link https://php.net/manual/en/function.stripcslashes.php
	 * @see addcslashes()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function stripcslashes(string $string): string {}

	/**
	 * Find the position of the first occurrence of a case-insensitive substring in a string
	 * <p>Find the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> string.</p><p>Unlike the <code>strpos()</code>, <b>stripos()</b> is case-insensitive.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>Note that the <code>needle</code> may be a string of one or more characters.</p> <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param int $offset <p>If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.</p>
	 * @return int|false <p>Returns the position of where the needle exists relative to the beginning of the <code>haystack</code> string (independent of offset). Also note that string positions start at 0, and not 1.</p><p>Returns <b><code>false</code></b> if the needle was not found.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.stripos.php
	 * @see mb_stripos(), str_contains(), str_ends_with(), str_starts_with(), strpos(), strrpos(), strripos(), stristr(), substr(), str_ireplace()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function stripos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Un-quotes a quoted string
	 * <p>Un-quotes a quoted string.</p><p><b>stripslashes()</b> can be used if you aren't inserting this data into a place (such as a database) that requires escaping. For example, if you're simply outputting data straight from an HTML form.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns a string with backslashes stripped off. (<code>\'</code> becomes <code>'</code> and so on.) Double backslashes (<code>\\</code>) are made into a single backslash (<code>\</code>).</p>
	 * @link https://php.net/manual/en/function.stripslashes.php
	 * @see addslashes(), get_magic_quotes_gpc()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function stripslashes(string $string): string {}

	/**
	 * Case-insensitive strstr()
	 * <p>Returns all of <code>haystack</code> starting from and including the first occurrence of <code>needle</code> to the end.</p>
	 * @param string $haystack <p>The string to search in</p>
	 * @param string $needle <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param bool $before_needle <p>If <b><code>true</code></b>, <b>stristr()</b> returns the part of the <code>haystack</code> before the first occurrence of the <code>needle</code> (excluding needle).</p>
	 * @return string|false <p>Returns the matched substring. If <code>needle</code> is not found, returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.stristr.php
	 * @see strstr(), strrchr(), stripos(), strpbrk(), preg_match()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function stristr(string $haystack, string $needle, bool $before_needle = false): string|false {}

	/**
	 * Get string length
	 * <p>Returns the length of the given <code>string</code>.</p>
	 * @param string $string <p>The <code>string</code> being measured for length.</p>
	 * @return int <p>The length of the <code>string</code> on success, and <code>0</code> if the <code>string</code> is empty.</p>
	 * @link https://php.net/manual/en/function.strlen.php
	 * @see count(), grapheme_strlen(), iconv_strlen(), mb_strlen()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strlen(string $string): int {}

	/**
	 * Case insensitive string comparisons using a "natural order" algorithm
	 * <p>This function implements a comparison algorithm that orders alphanumeric strings in the way a human being would. The behaviour of this function is similar to <code>strnatcmp()</code>, except that the comparison is not case sensitive. For more information see: Martin Pool's Natural Order String Comparison page.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p>
	 * @return int <p>Similar to other string comparison functions, this one returns &lt; 0 if <code>string1</code> is less than <code>string2</code> &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strnatcasecmp.php
	 * @see preg_match(), strcmp(), strcasecmp(), substr(), stristr(), strncasecmp(), strncmp(), strstr(), setlocale()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strnatcasecmp(string $string1, string $string2): int {}

	/**
	 * String comparisons using a "natural order" algorithm
	 * <p>This function implements a comparison algorithm that orders alphanumeric strings in the way a human being would, this is described as a "natural ordering". Note that this comparison is case sensitive.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p>
	 * @return int <p>Similar to other string comparison functions, this one returns &lt; 0 if <code>string1</code> is less than <code>string2</code>; &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strnatcmp.php
	 * @see preg_match(), strcasecmp(), substr(), stristr(), strcmp(), strncmp(), strncasecmp(), strnatcasecmp(), strstr(), natsort(), natcasesort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strnatcmp(string $string1, string $string2): int {}

	/**
	 * Binary safe case-insensitive string comparison of the first n characters
	 * <p>This function is similar to <code>strcasecmp()</code>, with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p>
	 * @param int $length <p>The length of strings to be used in the comparison.</p>
	 * @return int <p>Returns &lt; 0 if <code>string1</code> is less than <code>string2</code>; &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strncasecmp.php
	 * @see strncmp(), preg_match(), substr_compare(), strcasecmp(), stristr(), substr()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function strncasecmp(string $string1, string $string2, int $length): int {}

	/**
	 * Binary safe string comparison of the first n characters
	 * <p>This function is similar to <code>strcmp()</code>, with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.</p><p>Note that this comparison is case sensitive.</p>
	 * @param string $string1 <p>The first string.</p>
	 * @param string $string2 <p>The second string.</p>
	 * @param int $length <p>Number of characters to use in the comparison.</p>
	 * @return int <p>Returns &lt; 0 if <code>string1</code> is less than <code>string2</code>; &gt; 0 if <code>string1</code> is greater than <code>string2</code>, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.strncmp.php
	 * @see strncasecmp(), preg_match(), substr_compare(), strcmp(), strstr(), substr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strncmp(string $string1, string $string2, int $length): int {}

	/**
	 * Search a string for any of a set of characters
	 * <p><b>strpbrk()</b> searches the <code>string</code> string for a <code>characters</code>.</p>
	 * @param string $string <p>The string where <code>characters</code> is looked for.</p>
	 * @param string $characters <p>This parameter is case sensitive.</p>
	 * @return string|false <p>Returns a string starting from the character found, or <b><code>false</code></b> if it is not found.</p>
	 * @link https://php.net/manual/en/function.strpbrk.php
	 * @see strpos(), strstr(), preg_match()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function strpbrk(string $string, string $characters): string|false {}

	/**
	 * Find the position of the first occurrence of a substring in a string
	 * <p>Find the numeric position of the first occurrence of <code>needle</code> in the <code>haystack</code> string.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param int $offset <p>If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.</p>
	 * @return int|false <p>Returns the position of where the needle exists relative to the beginning of the <code>haystack</code> string (independent of offset). Also note that string positions start at 0, and not 1.</p><p>Returns <b><code>false</code></b> if the needle was not found.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.strpos.php
	 * @see stripos(), str_contains(), str_ends_with(), str_starts_with(), strrpos(), strripos(), strstr(), strpbrk(), substr(), preg_match()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strpos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Find the last occurrence of a character in a string
	 * <p>This function returns the portion of <code>haystack</code> which starts at the last occurrence of <code>needle</code> and goes until the end of <code>haystack</code>.</p>
	 * @param string $haystack <p>The string to search in</p>
	 * @param string $needle <p>If <code>needle</code> contains more than one character, only the first is used. This behavior is different from that of <code>strstr()</code>.</p> <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @return string|false <p>This function returns the portion of string, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.strrchr.php
	 * @see strstr(), strrpos()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strrchr(string $haystack, string $needle): string|false {}

	/**
	 * Reverse a string
	 * <p>Returns <code>string</code>, reversed.</p>
	 * @param string $string <p>The string to be reversed.</p>
	 * @return string <p>Returns the reversed string.</p>
	 * @link https://php.net/manual/en/function.strrev.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strrev(string $string): string {}

	/**
	 * Find the position of the last occurrence of a case-insensitive substring in a string
	 * <p>Find the numeric position of the last occurrence of <code>needle</code> in the <code>haystack</code> string.</p><p>Unlike the <code>strrpos()</code>, <b>strripos()</b> is case-insensitive.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param int $offset <p>If zero or positive, the search is performed left to right skipping the first <code>offset</code> bytes of the <code>haystack</code>.</p> <p>If negative, the search is performed right to left skipping the last <code>offset</code> bytes of the <code>haystack</code> and searching for the first occurrence of <code>needle</code>.</p><p><b>Note</b>:</p><p>This is effectively looking for the last occurrence of <code>needle</code> before the last <code>offset</code> bytes.</p>
	 * @return int|false <p>Returns the position where the needle exists relative to the beginnning of the <code>haystack</code> string (independent of search direction or offset).</p><p><b>Note</b>:  String positions start at 0, and not 1. </p><p>Returns <b><code>false</code></b> if the needle was not found.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.strripos.php
	 * @see strpos(), stripos(), strrpos(), strrchr(), stristr(), substr()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function strripos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Find the position of the last occurrence of a substring in a string
	 * <p>Find the numeric position of the last occurrence of <code>needle</code> in the <code>haystack</code> string.</p>
	 * @param string $haystack <p>The string to search in.</p>
	 * @param string $needle <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param int $offset <p>If zero or positive, the search is performed left to right skipping the first <code>offset</code> bytes of the <code>haystack</code>.</p> <p>If negative, the search is performed right to left skipping the last <code>offset</code> bytes of the <code>haystack</code> and searching for the first occurrence of <code>needle</code>.</p><p><b>Note</b>:</p><p>This is effectively looking for the last occurrence of <code>needle</code> before the last <code>offset</code> bytes.</p>
	 * @return int|false <p>Returns the position where the needle exists relative to the beginning of the <code>haystack</code> string (independent of search direction or offset).</p><p><b>Note</b>:  String positions start at 0, and not 1. </p><p>Returns <b><code>false</code></b> if the needle was not found.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.strrpos.php
	 * @see strpos(), stripos(), strripos(), strrchr(), substr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strrpos(string $haystack, string $needle, int $offset = 0): int|false {}

	/**
	 * Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask
	 * <p>Finds the length of the initial segment of <code>string</code> that contains <i>only</i> characters from <code>characters</code>.</p><p>If <code>offset</code> and <code>length</code> are omitted, then all of <code>string</code> will be examined. If they are included, then the effect will be the same as calling <code>strspn(substr($string, $offset, $length), $characters)</code> (see substr for more information).</p><p>The line of code:</p>
	 * @param string $string <p>The string to examine.</p>
	 * @param string $characters <p>The list of allowable characters.</p>
	 * @param int $offset <p>The position in <code>string</code> to start searching.</p> <p>If <code>offset</code> is given and is non-negative, then <b>strspn()</b> will begin examining <code>string</code> at the <code>offset</code>'th position. For instance, in the string '<code>abcdef</code>', the character at position <code>0</code> is '<code>a</code>', the character at position <code>2</code> is '<code>c</code>', and so forth.</p> <p>If <code>offset</code> is given and is negative, then <b>strspn()</b> will begin examining <code>string</code> at the <code>offset</code>'th position from the end of <code>string</code>.</p>
	 * @param ?int $length <p>The length of the segment from <code>string</code> to examine.</p> <p>If <code>length</code> is given and is non-negative, then <code>string</code> will be examined for <code>length</code> characters after the starting position.</p> <p>If <code>length</code> is given and is negative, then <code>string</code> will be examined from the starting position up to <code>length</code> characters from the end of <code>string</code>.</p>
	 * @return int <p>Returns the length of the initial segment of <code>string</code> which consists entirely of characters in <code>characters</code>.</p><p><b>Note</b>:</p><p>When a <code>offset</code> parameter is set, the returned length is counted starting from this position, not from the beginning of <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.strspn.php
	 * @see strcspn()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strspn(string $string, string $characters, int $offset = 0, ?int $length = null): int {}

	/**
	 * Find the first occurrence of a string
	 * <p>Returns part of <code>haystack</code> string starting from and including the first occurrence of <code>needle</code> to the end of <code>haystack</code>.</p><p><b>Note</b>:</p><p>This function is case-sensitive. For case-insensitive searches, use <code>stristr()</code>.</p><p><b>Note</b>:</p><p>If you only want to determine if a particular <code>needle</code> occurs within <code>haystack</code>, use the faster and less memory intensive function <code>strpos()</code> instead.</p>
	 * @param string $haystack <p>The input string.</p>
	 * @param string $needle <p>Prior to PHP 8.0.0, if <code>needle</code> is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the <code>needle</code> should either be explicitly cast to string, or an explicit call to <code>chr()</code> should be performed.</p>
	 * @param bool $before_needle <p>If <b><code>true</code></b>, <b>strstr()</b> returns the part of the <code>haystack</code> before the first occurrence of the <code>needle</code> (excluding the needle).</p>
	 * @return string|false <p>Returns the portion of string, or <b><code>false</code></b> if <code>needle</code> is not found.</p>
	 * @link https://php.net/manual/en/function.strstr.php
	 * @see stristr(), strrchr(), strpos(), strpbrk(), preg_match()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strstr(string $haystack, string $needle, bool $before_needle = false): string|false {}

	/**
	 * Tokenize string
	 * <p>Alternative signature (not supported with named arguments):</p><p><b>strtok()</b> splits a string (<code>string</code>) into smaller strings (tokens), with each token being delimited by any character from <code>token</code>. That is, if you have a string like "This is an example string" you could tokenize this string into its individual words by using the space character as the <code>token</code>.</p><p>Note that only the first call to strtok uses the <code>string</code> argument. Every subsequent call to strtok only needs the <code>token</code> to use, as it keeps track of where it is in the current string. To start over, or to tokenize a new string you simply call strtok with the <code>string</code> argument again to initialize it. Note that you may put multiple tokens in the <code>token</code> parameter. The string will be tokenized when any one of the characters in the <code>token</code> argument is found.</p><p><b>Note</b>:</p><p>This function behaves slightly different from what one may expect being familiar with <code>explode()</code>. First, a sequence of two or more contiguous <code>token</code> characters in the parsed string is considered to be a single delimiter. Also, a <code>token</code> situated at the start or end of the string is ignored. For example, if a string <code>";aaa;;bbb;"</code> is used, successive calls to <b>strtok()</b> with <code>";"</code> as a <code>token</code> would return strings "aaa" and "bbb", and then <b><code>false</code></b>. As a result, the string will be split into only two elements, while <code>explode(";", $string)</code> would return an array of 5 elements.</p>
	 * @param string $string <p>The <code>string</code> being split up into smaller strings (tokens).</p>
	 * @param string $token <p>The delimiter used when splitting up <code>string</code>.</p>
	 * @return string|false <p>A <code>string</code> token, or <b><code>false</code></b> if no more tokens are available.</p>
	 * @link https://php.net/manual/en/function.strtok.php
	 * @see explode()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strtok(string $string, string $token): string|false {}

	/**
	 * Make a string lowercase
	 * <p>Returns <code>string</code> with all alphabetic characters converted to lowercase.</p><p>Note that 'alphabetic' is determined by the current locale. This means that e.g. in the default "C" locale, characters such as umlaut-A (&Auml;) will not be converted.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the lowercased string.</p>
	 * @link https://php.net/manual/en/function.strtolower.php
	 * @see strtoupper(), ucfirst(), ucwords(), mb_strtolower()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strtolower(string $string): string {}

	/**
	 * Make a string uppercase
	 * <p>Returns <code>string</code> with all alphabetic characters converted to uppercase.</p><p>Note that 'alphabetic' is determined by the current locale. For instance, in the default "C" locale characters such as umlaut-a (&auml;) will not be converted.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the uppercased string.</p>
	 * @link https://php.net/manual/en/function.strtoupper.php
	 * @see strtolower(), ucfirst(), ucwords(), mb_strtoupper()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strtoupper(string $string): string {}

	/**
	 * Translate characters or replace substrings
	 * <p>Alternative signature (not supported with named arguments):</p><p>If given three arguments, this function returns a copy of <code>string</code> where all occurrences of each (single-byte) character in <code>from</code> have been translated to the corresponding character in <code>to</code>, i.e., every occurrence of <code>$from[$n]</code> has been replaced with <code>$to[$n]</code>, where <code>$n</code> is a valid offset in both arguments.</p><p>If <code>from</code> and <code>to</code> have different lengths, the extra characters in the longer of the two are ignored. The length of <code>string</code> will be the same as the return value's.</p><p>If given two arguments, the second should be an <code>array</code> in the form <code>array('from' =&gt; 'to', ...)</code>. The return value is a <code>string</code> where all the occurrences of the array keys have been replaced by the corresponding values. The longest keys will be tried first. Once a substring has been replaced, its new value will not be searched again.</p><p>In this case, the keys and the values may have any length, provided that there is no empty key; additionally, the length of the return value may differ from that of <code>string</code>. However, this function will be the most efficient when all the keys have the same size.</p>
	 * @param string $string <p>The <code>string</code> being translated.</p>
	 * @param string $from <p>The <code>string</code> being translated to <code>to</code>.</p>
	 * @param string $to <p>The <code>string</code> replacing <code>from</code>.</p>
	 * @return string <p>Returns the translated <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.strtr.php
	 * @see str_replace(), preg_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strtr(string $string, string $from, string $to): string {}

	/**
	 * Return part of a string
	 * <p>Returns the portion of <code>string</code> specified by the <code>offset</code> and <code>length</code> parameters.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $offset <p>If <code>offset</code> is non-negative, the returned string will start at the <code>offset</code>'th position in <code>string</code>, counting from zero. For instance, in the string '<code>abcdef</code>', the character at position <code>0</code> is '<code>a</code>', the character at position <code>2</code> is '<code>c</code>', and so forth.</p> <p>If <code>offset</code> is negative, the returned string will start at the <code>offset</code>'th character from the end of <code>string</code>.</p> <p>If <code>string</code> is less than <code>offset</code> characters long, an empty string will be returned.</p> <p></p> <p><b>Example #1 Using a negative <code>offset</code></b></p>  <code> &lt;&#63;php<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;-1);&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;returns&nbsp;"f"<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;-2);&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;returns&nbsp;"ef"<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;-3,&nbsp;1);&nbsp;//&nbsp;returns&nbsp;"d"<br>&#63;&gt;  </code>
	 * @param ?int $length <p>If <code>length</code> is given and is positive, the string returned will contain at most <code>length</code> characters beginning from <code>offset</code> (depending on the length of <code>string</code>).</p> <p>If <code>length</code> is given and is negative, then that many characters will be omitted from the end of <code>string</code> (after the start position has been calculated when a <code>offset</code> is negative). If <code>offset</code> denotes the position of this truncation or beyond, an empty string will be returned.</p> <p>If <code>length</code> is given and is <code>0</code>, <b><code>false</code></b> or <b><code>null</code></b>, an empty string will be returned.</p> <p>If <code>length</code> is omitted, the substring starting from <code>offset</code> until the end of the string will be returned.</p>  <p><b>Example #2 Using a negative <code>length</code></b></p>  <code> &lt;&#63;php<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;0,&nbsp;-1);&nbsp;&nbsp;//&nbsp;returns&nbsp;"abcde"<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;2,&nbsp;-1);&nbsp;&nbsp;//&nbsp;returns&nbsp;"cde"<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;4,&nbsp;-4);&nbsp;&nbsp;//&nbsp;returns&nbsp;"";&nbsp;prior&nbsp;to&nbsp;PHP&nbsp;8.0.0,&nbsp;false&nbsp;was&nbsp;returned<br>$rest&nbsp;=&nbsp;substr("abcdef",&nbsp;-3,&nbsp;-1);&nbsp;//&nbsp;returns&nbsp;"de"<br>&#63;&gt;  </code>
	 * @return string <p>Returns the extracted part of <code>string</code>, or an empty string.</p>
	 * @link https://php.net/manual/en/function.substr.php
	 * @see strrchr(), substr_replace(), preg_match(), trim(), mb_substr(), wordwrap()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function substr(string $string, int $offset, ?int $length = null): string {}

	/**
	 * Binary safe comparison of two strings from an offset, up to length characters
	 * <p><b>substr_compare()</b> compares <code>haystack</code> from position <code>offset</code> with <code>needle</code> up to <code>length</code> characters.</p>
	 * @param string $haystack <p>The main string being compared.</p>
	 * @param string $needle <p>The secondary string being compared.</p>
	 * @param int $offset <p>The start position for the comparison. If negative, it starts counting from the end of the string.</p>
	 * @param ?int $length <p>The length of the comparison. The default value is the largest of the length of the <code>needle</code> compared to the length of <code>haystack</code> minus the <code>offset</code>.</p>
	 * @param bool $case_insensitive <p>If <code>case_insensitive</code> is <b><code>true</code></b>, comparison is case insensitive.</p>
	 * @return int <p>Returns &lt; 0 if <code>haystack</code> from position <code>offset</code> is less than <code>needle</code>, &gt; 0 if it is greater than <code>needle</code>, and 0 if they are equal. If <code>offset</code> is equal to (prior to PHP 7.2.18, 7.3.5) or greater than the length of <code>haystack</code>, or the <code>length</code> is set and is less than 0, <b>substr_compare()</b> prints a warning and returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.substr-compare.php
	 * @see strncmp()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function substr_compare(string $haystack, string $needle, int $offset, ?int $length = null, bool $case_insensitive = false): int {}

	/**
	 * Count the number of substring occurrences
	 * <p><b>substr_count()</b> returns the number of times the <code>needle</code> substring occurs in the <code>haystack</code> string. Please note that <code>needle</code> is case sensitive.</p><p><b>Note</b>:</p><p>This function doesn't count overlapped substrings. See the example below!</p>
	 * @param string $haystack <p>The string to search in</p>
	 * @param string $needle <p>The substring to search for</p>
	 * @param int $offset <p>The offset where to start counting. If the offset is negative, counting starts from the end of the string.</p>
	 * @param ?int $length <p>The maximum length after the specified offset to search for the substring. It outputs a warning if the offset plus the length is greater than the <code>haystack</code> length. A negative length counts from the end of <code>haystack</code>.</p>
	 * @return int <p>This function returns an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.substr-count.php
	 * @see count_chars(), strpos(), substr(), strstr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = null): int {}

	/**
	 * Replace text within a portion of a string
	 * <p><b>substr_replace()</b> replaces a copy of <code>string</code> delimited by the <code>offset</code> and (optionally) <code>length</code> parameters with the string given in <code>replace</code>.</p>
	 * @param array|string $string <p>The input string.</p> <p>An <code>array</code> of <code>string</code>s can be provided, in which case the replacements will occur on each string in turn. In this case, the <code>replace</code>, <code>offset</code> and <code>length</code> parameters may be provided either as scalar values to be applied to each input string in turn, or as <code>array</code>s, in which case the corresponding array element will be used for each input string.</p>
	 * @param array|string $replace <p>The replacement string.</p>
	 * @param array|int $offset <p>If <code>offset</code> is non-negative, the replacing will begin at the <code>offset</code>'th offset into <code>string</code>.</p> <p>If <code>offset</code> is negative, the replacing will begin at the <code>offset</code>'th character from the end of <code>string</code>.</p>
	 * @param array|int|null $length <p>If given and is positive, it represents the length of the portion of <code>string</code> which is to be replaced. If it is negative, it represents the number of characters from the end of <code>string</code> at which to stop replacing. If it is not given, then it will default to strlen( <code>string</code> ); i.e. end the replacing at the end of <code>string</code>. Of course, if <code>length</code> is zero then this function will have the effect of inserting <code>replace</code> into <code>string</code> at the given <code>offset</code> offset.</p>
	 * @return string|array <p>The result string is returned. If <code>string</code> is an array then array is returned.</p>
	 * @link https://php.net/manual/en/function.substr-replace.php
	 * @see str_replace(), substr()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function substr_replace(array|string $string, array|string $replace, array|int $offset, array|int|null $length = null): string|array {}

	/**
	 * Strip whitespace (or other characters) from the beginning and end of a string
	 * <p>This function returns a string with whitespace stripped from the beginning and end of <code>string</code>. Without the second parameter, <b>trim()</b> will strip these characters:</p>
	 * @param string $string <p>The <code>string</code> that will be trimmed.</p>
	 * @param string $characters <p>Optionally, the stripped characters can also be specified using the <code>characters</code> parameter. Simply list all characters that you want to be stripped. With <code>..</code> you can specify a range of characters.</p>
	 * @return string <p>The trimmed string.</p>
	 * @link https://php.net/manual/en/function.trim.php
	 * @see ltrim(), rtrim(), str_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function trim(string $string, string $characters = " \n\r\t\v\x00"): string {}

	/**
	 * Make a string's first character uppercase
	 * <p>Returns a string with the first character of <code>string</code> capitalized, if that character is alphabetic.</p><p>Note that 'alphabetic' is determined by the current locale. For instance, in the default "C" locale characters such as umlaut-a (&auml;) will not be converted.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns the resulting string.</p>
	 * @link https://php.net/manual/en/function.ucfirst.php
	 * @see lcfirst(), strtolower(), strtoupper(), ucwords()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ucfirst(string $string): string {}

	/**
	 * Uppercase the first character of each word in a string
	 * <p>Returns a string with the first character of each word in <code>string</code> capitalized, if that character is alphabetic.</p><p>For this function, a word is a string of characters that are not listed in the <code>separators</code> parameter. By default, these are: space, horizontal tab, carriage return, newline, form-feed and vertical tab.</p>
	 * @param string $string <p>The input string.</p>
	 * @param string $separators <p>The optional <code>separators</code> contains the word separator characters.</p>
	 * @return string <p>Returns the modified string.</p>
	 * @link https://php.net/manual/en/function.ucwords.php
	 * @see strtoupper(), strtolower(), ucfirst(), mb_convert_case()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ucwords(string $string, string $separators = " \t\r\n\f\v"): string {}

	/**
	 * Write a formatted string to a stream
	 * <p>Write a string produced according to <code>format</code> to the stream resource specified by <code>stream</code>.</p><p>Operates as <code>fprintf()</code> but accepts an array of arguments, rather than a variable number of arguments.</p>
	 * @param resource $stream
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param array $values
	 * @return int <p>Returns the length of the outputted string.</p>
	 * @link https://php.net/manual/en/function.vfprintf.php
	 * @see printf(), sprintf(), fprintf(), vprintf(), vsprintf(), sscanf(), fscanf(), number_format(), date()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function vfprintf($stream, string $format, array $values): int {}

	/**
	 * Output a formatted string
	 * <p>Display array values as a formatted string according to <code>format</code> (which is described in the documentation for <code>sprintf()</code>).</p><p>Operates as <code>printf()</code> but accepts an array of arguments, rather than a variable number of arguments.</p>
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param array $values
	 * @return int <p>Returns the length of the outputted string.</p>
	 * @link https://php.net/manual/en/function.vprintf.php
	 * @see printf(), sprintf(), fprintf(), vsprintf(), vfprintf(), sscanf(), fscanf(), number_format(), date()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function vprintf(string $format, array $values): int {}

	/**
	 * Return a formatted string
	 * <p>Operates as <code>sprintf()</code> but accepts an array of arguments, rather than a variable number of arguments.</p>
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param array $values
	 * @return string <p>Return array values as a formatted string according to <code>format</code>.</p>
	 * @link https://php.net/manual/en/function.vsprintf.php
	 * @see printf(), sprintf(), fprintf(), vprintf(), vfprintf(), sscanf(), fscanf(), number_format(), date()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function vsprintf(string $format, array $values): string {}

	/**
	 * Wraps a string to a given number of characters
	 * <p>Wraps a string to a given number of characters using a string break character.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $width <p>The number of characters at which the string will be wrapped.</p>
	 * @param string $break <p>The line is broken using the optional <code>break</code> parameter.</p>
	 * @param bool $cut_long_words <p>If the <code>cut_long_words</code> is set to <b><code>true</code></b>, the string is always wrapped at or before the specified <code>width</code>. So if you have a word that is larger than the given width, it is broken apart. (See second example). When <b><code>false</code></b> the function does not split the word even if the <code>width</code> is smaller than the word width.</p>
	 * @return string <p>Returns the given string wrapped at the specified length.</p>
	 * @link https://php.net/manual/en/function.wordwrap.php
	 * @see nl2br(), chunk_split()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false): string {}

}
