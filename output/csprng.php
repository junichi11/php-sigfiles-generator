<?php



namespace {

	/**
	 * Generates cryptographically secure pseudo-random bytes
	 * <p>Generates an arbitrary length string of cryptographic random bytes that are suitable for cryptographic use, such as when generating salts, keys or initialization vectors.</p><p>The sources of randomness used for this function are as follows:</p><p><b>Note</b>:  Although this function was added to PHP in PHP 7.0, a userland implementation is available for PHP 5.2 to 5.6, inclusive. </p>
	 * @param int $length <p>The length of the random string that should be returned in bytes.</p>
	 * @return string <p>Returns a string containing the requested number of cryptographically secure random bytes.</p>
	 * @link http://php.net/manual/en/function.random-bytes.php
	 * @see random_int(), openssl_random_pseudo_bytes(), bin2hex()
	 * @since PHP 7
	 */
	function random_bytes(int $length): string {}

	/**
	 * Generates cryptographically secure pseudo-random integers
	 * <p>Generates cryptographic random integers that are suitable for use where unbiased results are critical, such as when shuffling a deck of cards for a poker game.</p><p>The sources of randomness used for this function are as follows:</p><p><b>Note</b>:  Although this function was added to PHP in PHP 7.0, a userland implementation is available for PHP 5.2 to 5.6, inclusive. </p>
	 * @param int $min <p>The lowest value to be returned, which must be <b><code>PHP_INT_MIN</code></b> or higher.</p>
	 * @param int $max <p>The highest value to be returned, which must be less than or equal to <b><code>PHP_INT_MAX</code></b>.</p>
	 * @return int <p>Returns a cryptographically secure random integer in the range <code>min</code> to <code>max</code>, inclusive.</p>
	 * @link http://php.net/manual/en/function.random-int.php
	 * @see random_bytes()
	 * @since PHP 7
	 */
	function random_int(int $min, int $max): int {}

}
