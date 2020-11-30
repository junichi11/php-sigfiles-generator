<?php



namespace {

	/**
	 * Check for alphanumeric character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are alphanumeric.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is either a letter or a digit, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-alnum.php
	 * @see ctype_alpha(), ctype_digit(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_alnum(string $text): bool {}

	/**
	 * Check for alphabetic character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are alphabetic. In the standard <i>C</i> locale letters are just <i>[A-Za-z]</i> and <b>ctype_alpha()</b> is equivalent to <i>(ctype_upper($text) || ctype_lower($text))</i> if $text is just a single character, but other languages have letters that are considered neither upper nor lower case.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is a letter from the current locale, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-alpha.php
	 * @see ctype_upper(), ctype_lower(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_alpha(string $text): bool {}

	/**
	 * Check for control character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are control characters. Control characters are e.g. line feed, tab, escape.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is a control character from the current locale, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-cntrl.php
	 * @see ctype_print()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_cntrl(string $text): bool {}

	/**
	 * Check for numeric character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are numerical.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in the string <code>text</code> is a decimal digit, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-digit.php
	 * @see ctype_alnum(), ctype_xdigit(), is_numeric(), is_int(), is_string()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_digit(string $text): bool {}

	/**
	 * Check for any printable character(s) except space
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, creates visible output.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is printable and actually creates visible output (no white space), <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-graph.php
	 * @see ctype_alnum(), ctype_print(), ctype_punct()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_graph(string $text): bool {}

	/**
	 * Check for lowercase character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are lowercase letters.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is a lowercase letter in the current locale.</p>
	 * @link http://php.net/manual/en/function.ctype-lower.php
	 * @see ctype_alpha(), ctype_upper(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_lower(string $text): bool {}

	/**
	 * Check for printable character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are printable.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> will actually create output (including blanks). Returns <b><code>FALSE</code></b> if <code>text</code> contains control characters or characters that do not have any output or control function at all.</p>
	 * @link http://php.net/manual/en/function.ctype-print.php
	 * @see ctype_cntrl(), ctype_graph(), ctype_punct()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_print(string $text): bool {}

	/**
	 * Check for any printable character which is not whitespace or an alphanumeric character
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are punctuation character.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is printable, but neither letter, digit or blank, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-punct.php
	 * @see ctype_cntrl(), ctype_graph()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_punct(string $text): bool {}

	/**
	 * Check for whitespace character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, creates whitespace.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> creates some sort of white space, <b><code>FALSE</code></b> otherwise. Besides the blank character this also includes tab, vertical tab, line feed, carriage return and form feed characters.</p>
	 * @link http://php.net/manual/en/function.ctype-space.php
	 * @see ctype_cntrl(), ctype_graph(), ctype_punct()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_space(string $text): bool {}

	/**
	 * Check for uppercase character(s)
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are uppercase characters.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is an uppercase letter in the current locale.</p>
	 * @link http://php.net/manual/en/function.ctype-upper.php
	 * @see ctype_alpha(), ctype_lower(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_upper(string $text): bool {}

	/**
	 * Check for character(s) representing a hexadecimal digit
	 * <p>Checks if all of the characters in the provided <code>string</code>, <code>text</code>, are hexadecimal 'digits'.</p>
	 * @param string $text <p>The tested string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if every character in <code>text</code> is a hexadecimal 'digit', that is a decimal digit or a character from <i>[A-Fa-f]</i> , <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ctype-xdigit.php
	 * @see ctype_digit()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_xdigit(string $text): bool {}

}
