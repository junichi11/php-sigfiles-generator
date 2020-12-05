<?php



namespace {

	/**
	 * Regular expression match
	 * <p>Searches a <code>string</code> for matches to the regular expression given in <code>pattern</code> in a case-sensitive way.</p>
	 * @param string $pattern <p>Case sensitive regular expression.</p>
	 * @param string $string <p>The input string.</p>
	 * @param array $regs <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>regs</code>, the matches will be stored in the elements of the array <code>regs</code>.</p> <p>$regs[1] will contain the substring which starts at the first left parenthesis; $regs[2] will contain the substring starting at the second, and so on. $regs[0] will contain a copy of the complete string matched.</p>
	 * @return int <p>Returns the length of the matched string if a match for <code>pattern</code> was found in <code>string</code>, or <b><code>FALSE</code></b> if no matches were found or an error occurred.</p><p>If the optional parameter <code>regs</code> was not passed or the length of the matched string is <code>0</code>, this function returns <code>1</code>.</p>
	 * @link http://php.net/manual/en/function.ereg.php
	 * @see eregi(), ereg_replace(), eregi_replace(), preg_match(), strpos(), strstr(), quotemeta()
	 * @since PHP 4, PHP 5
	 */
	function ereg(string $pattern, string $string, array &$regs = NULL): int {}

	/**
	 * Replace regular expression
	 * <p>This function scans <code>string</code> for matches to <code>pattern</code>, then replaces the matched text with <code>replacement</code>.</p>
	 * @param string $pattern <p>A POSIX extended regular expression.</p>
	 * @param string $replacement <p>If <code>pattern</code> contains parenthesized substrings, <code>replacement</code> may contain substrings of the form <code>\digit</code>, which will be replaced by the text matching the digit'th parenthesized substring; <code>\0</code> will produce the entire contents of string. Up to nine substrings may be used. Parentheses may be nested, in which case they are counted by the opening parenthesis.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>The modified string is returned. If no matches are found in <code>string</code>, then it will be returned unchanged.</p>
	 * @link http://php.net/manual/en/function.ereg-replace.php
	 * @see ereg(), eregi(), eregi_replace(), str_replace(), preg_replace(), quotemeta()
	 * @since PHP 4, PHP 5
	 */
	function ereg_replace(string $pattern, string $replacement, string $string): string {}

	/**
	 * Case insensitive regular expression match
	 * <p>This function is identical to <code>ereg()</code> except that it ignores case distinction when matching alphabetic characters.</p>
	 * @param string $pattern <p>Case insensitive regular expression.</p>
	 * @param string $string <p>The input string.</p>
	 * @param array $regs <p>If matches are found for parenthesized substrings of <code>pattern</code> and the function is called with the third argument <code>regs</code>, the matches will be stored in the elements of the array <code>regs</code>.</p> <p>$regs[1] will contain the substring which starts at the first left parenthesis; $regs[2] will contain the substring starting at the second, and so on. $regs[0] will contain a copy of the complete string matched.</p>
	 * @return int <p>Returns the length of the matched string if a match for <code>pattern</code> was found in <code>string</code>, or <b><code>FALSE</code></b> if no matches were found or an error occurred.</p><p>If the optional parameter <code>regs</code> was not passed or the length of the matched string is <code>0</code>, this function returns <code>1</code>.</p>
	 * @link http://php.net/manual/en/function.eregi.php
	 * @see ereg(), ereg_replace(), eregi_replace(), preg_match(), stripos(), stristr(), quotemeta()
	 * @since PHP 4, PHP 5
	 */
	function eregi(string $pattern, string $string, array &$regs = NULL): int {}

	/**
	 * Replace regular expression case insensitive
	 * <p>This function is identical to <code>ereg_replace()</code> except that this ignores case distinction when matching alphabetic characters.</p>
	 * @param string $pattern <p>A POSIX extended regular expression.</p>
	 * @param string $replacement <p>If <code>pattern</code> contains parenthesized substrings, <code>replacement</code> may contain substrings of the form <code>\digit</code>, which will be replaced by the text matching the digit'th parenthesized substring; <code>\0</code> will produce the entire contents of string. Up to nine substrings may be used. Parentheses may be nested, in which case they are counted by the opening parenthesis.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>The modified string is returned. If no matches are found in <code>string</code>, then it will be returned unchanged.</p>
	 * @link http://php.net/manual/en/function.eregi-replace.php
	 * @see ereg(), eregi(), ereg_replace(), preg_replace(), quotemeta()
	 * @since PHP 4, PHP 5
	 */
	function eregi_replace(string $pattern, string $replacement, string $string): string {}

	/**
	 * Split string into array by regular expression
	 * <p>Splits a <code>string</code> into array by regular expression.</p>
	 * @param string $pattern <p>Case sensitive regular expression.</p> <p>If you want to split on any of the characters which are considered special by regular expressions, you'll need to escape them first. If you think <b>split()</b> (or any other regex function, for that matter) is doing something weird, please read the file regex.7, included in the regex/ subdirectory of the PHP distribution. It's in manpage format, so you'll want to do something along the lines of <b>man /usr/local/src/regex/regex.7</b> in order to read it.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $limit <p>If <code>limit</code> is set, the returned array will contain a maximum of <code>limit</code> elements with the last element containing the whole rest of <code>string</code>.</p>
	 * @return array <p>Returns an array of strings, each of which is a substring of <code>string</code> formed by splitting it on boundaries formed by the case-sensitive regular expression <code>pattern</code>.</p><p>If there are n occurrences of <code>pattern</code>, the returned array will contain <code>n+1</code> items. For example, if there is no occurrence of <code>pattern</code>, an array with only one element will be returned. Of course, this is also true if <code>string</code> is empty. If an error occurs, <b>split()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.split.php
	 * @see preg_split(), spliti(), str_split(), explode(), implode(), chunk_split(), wordwrap()
	 * @since PHP 4, PHP 5
	 */
	function split(string $pattern, string $string, int $limit = -1): array {}

	/**
	 * Split string into array by regular expression case insensitive
	 * <p>Splits a <code>string</code> into array by regular expression.</p><p>This function is identical to <code>split()</code> except that this ignores case distinction when matching alphabetic characters.</p>
	 * @param string $pattern <p>Case insensitive regular expression.</p> <p>If you want to split on any of the characters which are considered special by regular expressions, you'll need to escape them first. If you think <b>spliti()</b> (or any other regex function, for that matter) is doing something weird, please read the file regex.7, included in the regex/ subdirectory of the PHP distribution. It's in manpage format, so you'll want to do something along the lines of <b>man /usr/local/src/regex/regex.7</b> in order to read it.</p>
	 * @param string $string <p>The input string.</p>
	 * @param int $limit <p>If <code>limit</code> is set, the returned array will contain a maximum of <code>limit</code> elements with the last element containing the whole rest of <code>string</code>.</p>
	 * @return array <p>Returns an array of strings, each of which is a substring of <code>string</code> formed by splitting it on boundaries formed by the case insensitive regular expression <code>pattern</code>.</p><p>If there are n occurrences of <code>pattern</code>, the returned array will contain <code>n+1</code> items. For example, if there is no occurrence of <code>pattern</code>, an array with only one element will be returned. Of course, this is also true if <code>string</code> is empty. If an error occurs, <b>spliti()</b> returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.spliti.php
	 * @see preg_split(), split(), explode(), implode()
	 * @since PHP 4 >= 4.0.1, PHP 5
	 */
	function spliti(string $pattern, string $string, int $limit = -1): array {}

	/**
	 * Make regular expression for case insensitive match
	 * <p>Creates a regular expression for a case insensitive match.</p>
	 * @param string $string <p>The input string.</p>
	 * @return string <p>Returns a valid regular expression which will match <code>string</code>, ignoring case. This expression is <code>string</code> with each alphabetic character converted to a bracket expression; this bracket expression contains that character's uppercase and lowercase form. Other characters remain unchanged.</p>
	 * @link http://php.net/manual/en/function.sql-regcase.php
	 * @since PHP 4, PHP 5
	 */
	function sql_regcase(string $string): string {}

}
