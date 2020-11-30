<?php



namespace {

	/**
	 * Split given source into PHP tokens
	 * <p><b>token_get_all()</b> parses the given <code>source</code> string into PHP language tokens using the Zend engine's lexical scanner.</p><p>For a list of parser tokens, see List of Parser Tokens, or use <code>token_name()</code> to translate a token value into its string representation.</p>
	 * @param string $source <p>The PHP source to parse.</p>
	 * @param int $flags <p>Valid flags:</p><ul> <li>  <b><code>TOKEN_PARSE</code></b> - Recognises the ability to use reserved words in specific contexts.  </li> </ul>
	 * @return array <p>An array of token identifiers. Each individual token identifier is either a single character (i.e.: <i>;</i>, <i>.</i>, <i>&gt;</i>, <i>!</i>, etc...), or a three element array containing the token index in element 0, the string content of the original token in element 1 and the line number in element 2.</p>
	 * @link http://php.net/manual/en/function.token-get-all.php
	 * @see token_name()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function token_get_all(string $source, int $flags = 0): array {}

	/**
	 * Get the symbolic name of a given PHP token
	 * <p><b>token_name()</b> gets the symbolic name for a PHP <code>token</code> value.</p>
	 * @param int $token <p>The token value.</p>
	 * @return string <p>The symbolic name of the given <code>token</code>.</p>
	 * @link http://php.net/manual/en/function.token-name.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function token_name(int $token): string {}

}
