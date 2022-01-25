<?php



namespace {

	/**
	 * <p>This class provides an alternative to <code>token_get_all()</code>. While the function returns tokens either as a single-character string, or an array with a token ID, token text and line number, <code>PhpToken::tokenize()</code> normalizes all tokens into PhpToken objects, which makes code operating on tokens more memory efficient and readable.</p>
	 * @link https://php.net/manual/en/class.phptoken.php
	 * @since PHP 8
	 */
	class PhpToken implements \Stringable {

		/**
		 * @var int <p>One of the T_&#42; constants, or an ASCII codepoint representing a single-char token.</p>
		 * @link https://php.net/manual/en/class.phptoken.php#phptoken.props.id
		 */
		public $id;

		/**
		 * @var string <p>The textual content of the token.</p>
		 * @link https://php.net/manual/en/class.phptoken.php#phptoken.props.text
		 */
		public $text;

		/**
		 * @var int <p>The starting line number (1-based) of the token.</p>
		 * @link https://php.net/manual/en/class.phptoken.php#phptoken.props.line
		 */
		public $line;

		/**
		 * @var int <p>The starting position (0-based) in the tokenized string.</p>
		 * @link https://php.net/manual/en/class.phptoken.php#phptoken.props.pos
		 */
		public $pos;

		/**
		 * Returns a new PhpToken object
		 * <p>Returns a new PhpToken object</p>
		 * @param int $id <p>One of the T_&#42; constants (see List of Parser Tokens), or an ASCII codepoint representing a single-char token.</p>
		 * @param string $text <p>The textual content of the token.</p>
		 * @param int $line <p>The starting line number (1-based) of the token.</p>
		 * @param int $pos <p>The starting position (0-based) in the tokenized string.</p>
		 * @return self <p>Returns a new PhpToken instance.</p>
		 * @link https://php.net/manual/en/phptoken.construct.php
		 * @see PhpToken::tokenize()
		 * @since PHP 8
		 */
		final public function __construct(int $id, string $text, int $line = -1, int $pos = -1) {}

		/**
		 * Returns the textual content of the token.
		 * <p>Returns the textual content of the token.</p>
		 * @return string <p>A textual content of the token.</p>
		 * @link https://php.net/manual/en/phptoken.tostring.php
		 * @see token_name()
		 * @since PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Returns the name of the token.
		 * <p>Returns the name of the token.</p>
		 * @return ?string <p>An ASCII character for single-char tokens, or one of T_&#42; constant names for known tokens (see List of Parser Tokens), or <b><code>null</code></b> for unknown tokens.</p>
		 * @link https://php.net/manual/en/phptoken.gettokenname.php
		 * @see PhpToken::tokenize(), token_name()
		 * @since PHP 8
		 */
		public function getTokenName(): ?string {}

		/**
		 * Tells whether the token is of given kind.
		 * <p>Tells whether the token is of given <code>kind</code>.</p>
		 * @param int|string|array $kind <p>Either a single value to match the token's id or textual content, or an array thereof.</p>
		 * @return bool <p>A boolean value whether the token is of given kind.</p>
		 * @link https://php.net/manual/en/phptoken.is.php
		 * @see token_name()
		 * @since PHP 8
		 */
		public function is(int|string|array $kind): bool {}

		/**
		 * Tells whether the token would be ignored by the PHP parser.
		 * <p>Tells whether the token would be ignored by the PHP parser.</p>
		 * @return bool <p>A boolean value whether the token would be ignored by the PHP parser (such as whitespace or comments).</p>
		 * @link https://php.net/manual/en/phptoken.isignorable.php
		 * @see PhpToken::tokenize()
		 * @since PHP 8
		 */
		public function isIgnorable(): bool {}

		/**
		 * Splits given source into PHP tokens, represented by PhpToken objects.
		 * <p>Returns an array of PhpToken objects representing given <code>code</code>.</p>
		 * @param string $code <p>The PHP source to parse.</p>
		 * @param int $flags <p>Valid flags:</p><ul> <li>  <b><code>TOKEN_PARSE</code></b> - Recognises the ability to use reserved words in specific contexts.  </li> </ul>
		 * @return array <p>An array of PHP tokens represented by instances of PhpToken or its descendants. This method returns static[] so that PhpToken can be seamlessly extended.</p>
		 * @link https://php.net/manual/en/phptoken.tokenize.php
		 * @see token_get_all()
		 * @since PHP 8
		 */
		public static function tokenize(string $code, int $flags = 0): array {}
	}

	/**
	 * Split given source into PHP tokens
	 * <p><b>token_get_all()</b> parses the given <code>code</code> string into PHP language tokens using the Zend engine's lexical scanner.</p><p>For a list of parser tokens, see List of Parser Tokens, or use <code>token_name()</code> to translate a token value into its string representation.</p>
	 * @param string $code <p>The PHP source to parse.</p>
	 * @param int $flags <p>Valid flags:</p><ul> <li>  <b><code>TOKEN_PARSE</code></b> - Recognises the ability to use reserved words in specific contexts.  </li> </ul>
	 * @return array <p>An array of token identifiers. Each individual token identifier is either a single character (i.e.: <code>;</code>, <code>.</code>, <code>&gt;</code>, <code>!</code>, etc...), or a three element array containing the token index in element 0, the string content of the original token in element 1 and the line number in element 2.</p>
	 * @link https://php.net/manual/en/function.token-get-all.php
	 * @see PhpToken::tokenize(), token_name()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function token_get_all(string $code, int $flags = 0): array {}

	/**
	 * Get the symbolic name of a given PHP token
	 * <p><b>token_name()</b> gets the symbolic name for a PHP <code>id</code> value.</p>
	 * @param int $id <p>The token value.</p>
	 * @return string <p>The symbolic name of the given <code>id</code>.</p>
	 * @link https://php.net/manual/en/function.token-name.php
	 * @see PhpToken::getTokenName()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function token_name(int $id): string {}

}
