<?php



namespace {

	/**
	 * Convert a logical string to a visual one
	 * <p>Converts a logical string to a visual one.</p>
	 * @param string $str <p>The logical string.</p>
	 * @param string $direction <p>One of <b><code>FRIBIDI_RTL</code></b>, <b><code>FRIBIDI_LTR</code></b> or <b><code>FRIBIDI_AUTO</code></b>.</p>
	 * @param int $charset <p>One of the <i>FRIBIDI_CHARSET_XXX</i> constants.</p>
	 * @return string <p>Returns the visual string on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.fribidi-log2vis.php
	 * @since PHP 4 >= 4.0.4 and PHP 4 <= 4.1.0, PECL fribidi >= 1.0
	 */
	function fribidi_log2vis(string $str, string $direction, int $charset): string {}

	/**
	 * Autodetect the base direction
	 */
	define('FRIBIDI_AUTO', null);

	/**
	 * Arabic
	 */
	define('FRIBIDI_CHARSET_8859_6', null);

	/**
	 * Hebrew
	 */
	define('FRIBIDI_CHARSET_8859_8', null);

	/**
	 * Used for test purposes, will treat CAPS as non-English letters
	 */
	define('FRIBIDI_CHARSET_CAP_RTL', null);

	/**
	 * Hebrew/Yiddish
	 */
	define('FRIBIDI_CHARSET_CP1255', null);

	/**
	 * Arabic
	 */
	define('FRIBIDI_CHARSET_CP1256', null);

	/**
	 * Persian
	 */
	define('FRIBIDI_CHARSET_ISIRI_3342', null);

	/**
	 * Unicode
	 */
	define('FRIBIDI_CHARSET_UTF8', null);

	/**
	 * Left to right
	 */
	define('FRIBIDI_LTR', null);

	/**
	 * Right to left
	 */
	define('FRIBIDI_RTL', null);

}
