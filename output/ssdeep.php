<?php



namespace {

	/**
	 * Calculates the match score between two fuzzy hash signatures
	 * <p>Calculates the match score between <code>signature1</code> and <code>signature2</code> using  context-triggered piecewise hashing, and returns the match score.</p>
	 * @param string $signature1 <p>The first fuzzy hash signature string.</p>
	 * @param string $signature2 <p>The second fuzzy hash signature string.</p>
	 * @return int <p>Returns an integer from 0 to 100 on success, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ssdeep-fuzzy-compare.php
	 * @since PECL ssdeep >= 1.0.0
	 */
	function ssdeep_fuzzy_compare(string $signature1, string $signature2): int {}

	/**
	 * Create a fuzzy hash from a string
	 * <p><b>ssdeep_fuzzy_hash()</b> calculates the hash of <code>to_hash</code> using  context-triggered piecewise hashing, and returns that hash.</p>
	 * @param string $to_hash <p>The input string.</p>
	 * @return string <p>Returns a string on success, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ssdeep-fuzzy-hash.php
	 * @since PECL ssdeep >= 1.0.0
	 */
	function ssdeep_fuzzy_hash(string $to_hash): string {}

	/**
	 * Create a fuzzy hash from a file
	 * <p><b>ssdeep_fuzzy_hash_filename()</b> calculates the hash of the file specified by <code>file_name</code> using context-triggered piecewise hashing, and returns that hash.</p>
	 * @param string $file_name <p>The filename of the file to hash.</p>
	 * @return string <p>Returns a string on success, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.ssdeep-fuzzy-hash-filename.php
	 * @since PECL ssdeep >= 1.0.0
	 */
	function ssdeep_fuzzy_hash_filename(string $file_name): string {}

}
