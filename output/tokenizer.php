<?php



namespace {

	/**
	 * Split given source into PHP tokens
	 * <p><b>token_get_all()</b> parses the given <code>code</code> string into PHP language tokens using the Zend engine's lexical scanner.</p><p>For a list of parser tokens, see List of Parser Tokens, or use <code>token_name()</code> to translate a token value into its string representation.</p>
	 * @param string $code <p>The PHP source to parse.</p>
	 * @param int $flags <p>Valid flags:</p><ul> <li>  <b><code>TOKEN_PARSE</code></b> - Recognises the ability to use reserved words in specific contexts.  </li> </ul>
	 * @return array <p>An array of token identifiers. Each individual token identifier is either a single character (i.e.: <code>;</code>, <code>.</code>, <code>&gt;</code>, <code>!</code>, etc...), or a three element array containing the token index in element 0, the string content of the original token in element 1 and the line number in element 2.</p>
	 * @link https://php.net/manual/en/function.token-get-all.php
	 * @see token_name()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function token_get_all(string $code, int $flags = 0): array {}

	/**
	 * Get the symbolic name of a given PHP token
	 * <p><b>token_name()</b> gets the symbolic name for a PHP <code>id</code> value.</p>
	 * @param int $id <p>The token value.</p>
	 * @return string <p>The symbolic name of the given <code>id</code>.</p>
	 * @link https://php.net/manual/en/function.token-name.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function token_name(int $id): string {}

}
