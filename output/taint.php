<?php



namespace {

	/**
	 * Checks whether a string is tainted
	 * <p>Checks whether a string is tainted</p>
	 * @param string $string
	 * @return bool <p>Return TRUE if the string is tainted, FALSE otherwise.</p>
	 * @link https://php.net/manual/en/function.is-tainted.php
	 * @since PECL taint >=0.1.0
	 */
	function is_tainted(string $string): bool {}

	/**
	 * Taint a string
	 * <p>Make a string tainted. This is used for testing purpose only.</p>
	 * @param string $string
	 * @param string $_$strings
	 * @return bool <p>Return TRUE if the transformation is done. Always return TRUE if the taint extension is not enabled.</p>
	 * @link https://php.net/manual/en/function.taint.php
	 * @since PECL taint >=0.1.0
	 */
	function taint(string &$string, string $_$strings): bool {}

	/**
	 * Untaint strings
	 * <p>Untaint strings</p>
	 * @param string $string
	 * @param string $_$strings
	 * @return bool
	 * @link https://php.net/manual/en/function.untaint.php
	 * @since PECL taint >=0.1.0
	 */
	function untaint(string &$string, string $_$strings): bool {}

}
