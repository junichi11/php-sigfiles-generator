<?php



namespace {

	/**
	 * Returns a short, readable, parsable string representation of a variable
	 * <p><b>var_representation()</b> (from the var_representation PECL) returns a string with structured information about the given variable. It is similar to <code>var_export()</code> with differences in indentation, string escaping, and array representations.</p>
	 * @param mixed $value <p>The variable to generate a representation of.</p>
	 * @param int $flags <p>Bitmask consisting of <b><code>VAR_REPRESENTATION_SINGLE_LINE</code></b>, <b><code>VAR_REPRESENTATION_UNESCAPED</code></b>. The behaviour of these constants is described on the var_representation constants page.</p>
	 * @return string <p>Returns the variable representation.</p>
	 * @link https://php.net/manual/en/function.var-representation.php
	 * @see var_export()
	 * @since PECL var_representation >= 0.1.0
	 */
	function var_representation(mixed $value, int $flags = 0): string {}

	/**
	 * <code>var_representation()</code> flag indicating that newlines should not be used for whitespace in variable representations.
	 */
	define('VAR_REPRESENTATION_SINGLE_LINE', null);

	/**
	 * <code>var_representation()</code> flag indicating that strings should be encoded as single quoted strings with unescaped control characters.
	 */
	define('VAR_REPRESENTATION_UNESCAPED', null);

}
