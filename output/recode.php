<?php



namespace {

	/**
	 * Alias of recode_string()
	 * <p>This function is an alias of: <code>recode_string()</code>.</p>
	 * @param string $request <p>The desired recode request type</p>
	 * @param string $string <p>The <code>string</code> to be recoded</p>
	 * @return string
	 * @link http://php.net/manual/en/function.recode.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function recode(string $request, string $string): string {}

	/**
	 * Recode from file to file according to recode request
	 * <p>Recode the file referenced by file handle <code>input</code> into the file referenced by file handle <code>output</code> according to the recode <code>request</code>.</p>
	 * @param string $request <p>The desired recode request type</p>
	 * @param resource $input <p>A local file handle <code>resource</code> for the <code>input</code></p>
	 * @param resource $output <p>A local file handle <code>resource</code> for the <code>output</code></p>
	 * @return bool <p>Returns <b><code>FALSE</code></b>, if unable to comply, <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.recode-file.php
	 * @see fopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function recode_file(string $request, $input, $output): bool {}

	/**
	 * Recode a string according to a recode request
	 * <p>Recode the string <code>string</code> according to the recode request <code>request</code>.</p>
	 * @param string $request <p>The desired recode request type</p>
	 * @param string $string <p>The <code>string</code> to be recoded</p>
	 * @return string <p>Returns the recoded <code>string</code> or <b><code>FALSE</code></b>, if unable to perform the recode request.</p>
	 * @link http://php.net/manual/en/function.recode-string.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function recode_string(string $request, string $string): string {}

}
