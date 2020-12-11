<?php



namespace Parle {

	/**
	 * <p>The class represents detailed error information as supplied by <code>Parle\Parser::errorInfo()</code></p>
	 * @link https://php.net/manual/en/class.parle-errorinfo.php
	 * @since PECL parle >= 0.5.2
	 */
	class ErrorInfo {

		/**
		 * @var int <p>Error id.</p>
		 * @link https://php.net/manual/en/class.parle-errorinfo.php#parle-errorinfo.props.id
		 */
		public $id;

		/**
		 * @var int <p>Position in the input, where the error occurred.</p>
		 * @link https://php.net/manual/en/class.parle-errorinfo.php#parle-errorinfo.props.position
		 */
		public $position;

		/**
		 * @var mixed <p>If applicable - the Parle\Token related to the error, otherwise <b><code>NULL</code></b>.</p>
		 * @link https://php.net/manual/en/class.parle-errorinfo.php#parle-errorinfo.props.token
		 */
		public $token;
	}

	/**
	 * <p>Single state lexer class. Lexemes can be defined on the fly. If the particular lexer instance is meant to be used with Parle\Parser, the token IDs need to be taken from there. Otherwise, arbitrary token IDs can be supplied. This lexer can give a certain performance advantage over Parle\RLexer, if no multiple states are required. Note, that Parle\RParser is not compatible with this lexer.</p>
	 * @link https://php.net/manual/en/class.parle-lexer.php
	 * @since PECL parle >= 0.5.1
	 */
	class Lexer {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-lexer.php
		 */
		const ICASE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-lexer.php
		 */
		const DOT_NOT_LF = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-lexer.php
		 */
		const DOT_NOT_CRLF = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-lexer.php
		 */
		const SKIP_WS = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-lexer.php
		 */
		const MATCH_ZERO_LEN = 16;

		/**
		 * @var bool <p>Start of input flag.</p>
		 * @link https://php.net/manual/en/class.parle-lexer.php#parle-lexer.props.bol
		 */
		public $bol = FALSE;

		/**
		 * @var int <p>Lexer flags.</p>
		 * @link https://php.net/manual/en/class.parle-lexer.php#parle-lexer.props.flags
		 */
		public $flags = 0;

		/**
		 * @var int <p>Current lexer state, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-lexer.php#parle-lexer.props.state
		 */
		public $state = 0;

		/**
		 * @var int <p>Position of the latest token match, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-lexer.php#parle-lexer.props.marker
		 */
		public $marker = 0;

		/**
		 * @var int <p>Current input offset, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-lexer.php#parle-lexer.props.cursor
		 */
		public $cursor = 0;

		/**
		 * Process next lexer rule
		 * <p>Processes the next rule and prepares the resulting token data.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.advance.php
		 * @since PECL parle >= 0.5.1
		 */
		public function advance(): void {}

		/**
		 * Finalize the lexer rule set
		 * <p>Rules, previously added with <code>Parle\Lexer::push()</code> are finalized. This method call has to be done after all the necessary rules was pushed. The rule set becomes read only. The lexing can begin.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.build.php
		 * @since PECL parle >= 0.5.1
		 */
		public function build(): void {}

		/**
		 * Define token callback
		 * <p>Define a callback to be invoked once lexer encounters a particular token.</p>
		 * @param int $id <p>Token id.</p>
		 * @param callable $callback <p>Callable to be invoked. The callable doesn't receive any arguments and its return value is ignored.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.callout.php
		 * @since PECL parle >= 0.7.2
		 */
		public function callout(int $id, callable $callback): void {}

		/**
		 * Pass the data for processing
		 * <p>Consume the data for lexing.</p>
		 * @param string $data <p>Data to be lexed.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.consume.php
		 * @since PECL parle >= 0.5.1
		 */
		public function consume(string $data): void {}

		/**
		 * Dump the state machine
		 * <p>Dump the current state machine to stdout.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.dump.php
		 * @since PECL parle >= 0.5.1
		 */
		public function dump(): void {}

		/**
		 * Retrieve the current token
		 * <p>Retrieve the current token.</p>
		 * @return Parle\Token <p>Returns an instance of Parle\Token.</p>
		 * @link https://php.net/manual/en/parle-lexer.gettoken.php
		 * @since PECL parle >= 0.5.1
		 */
		public function getToken(): \Parle\Token {}

		/**
		 * Insert regex macro
		 * <p>Insert a regex macro, that can be later used as a shortcut and included in other regular expressions.</p>
		 * @param string $name <p>Name of the macros.</p>
		 * @param string $regex <p>Regular expression.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.insertmacro.php
		 * @since PECL parle >= 0.5.1
		 */
		public function insertMacro(string $name, string $regex): void {}

		/**
		 * Add a lexer rule
		 * <p>Push a pattern for lexeme recognition.</p>
		 * @param string $regex <p>Regular expression used for token matching.</p>
		 * @param int $id <p>Token id. If the lexer instance is meant to be used standalone, this can be an arbitrary number. If the lexer instance is going to be passed to the parser, it has to be an id returned by <code>Parle\Parser::tokenid()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.push.php
		 * @since PECL parle >= 0.5.1
		 */
		public function push(string $regex, int $id): void {}

		/**
		 * Reset lexer
		 * <p>Reset lexing optionally supplying the desired offset.</p>
		 * @param int $pos <p>Reset position.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-lexer.reset.php
		 * @since PECL parle >= 0.7.1
		 */
		public function reset(int $pos): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.parle-lexerexception.php
	 * @since PECL parle >= 0.5.1
	 */
	class LexerException extends \Exception implements \Throwable {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Parser class. Rules can be defined on the fly. Once finalized, a Parle\Lexer instance is required to deliver the token stream.</p>
	 * @link https://php.net/manual/en/class.parle-parser.php
	 * @since PECL parle >= 0.5.1
	 */
	class Parser {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ACTION_ERROR = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ACTION_SHIFT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ACTION_REDUCE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ACTION_GOTO = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ACTION_ACCEPT = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ERROR_SYNTAX = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ERROR_NON_ASSOCIATIVE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-parser.php
		 */
		const ERROR_UNKNOWN_TOKEN = 2;

		/**
		 * @var int <p>Current parser action that matches one of the action class constants, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-parser.php#parle-parser.props.action
		 */
		public $action = 0;

		/**
		 * @var int <p>Grammar rule id just processed in the reduce action. The value corresponds either to a token or to a production id. Readonly.</p>
		 * @link https://php.net/manual/en/class.parle-parser.php#parle-parser.props.reduceId
		 */
		public $reduceId = 0;

		/**
		 * Process next parser rule
		 * <p>Process next parser rule.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.advance.php
		 * @since PECL parle >= 0.5.1
		 */
		public function advance(): void {}

		/**
		 * Finalize the grammar rules
		 * <p>Any tokens and grammar rules previously added are finalized. The rule set becomes readonly and the parser is ready to start.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.build.php
		 * @since PECL parle >= 0.5.1
		 */
		public function build(): void {}

		/**
		 * Consume the data for processing
		 * <p>Consume the data for parsing.</p>
		 * @param string $data <p>Data to be parsed.</p>
		 * @param \Parle\Lexer $lexer <p>A lexer object containing the lexing rules prepared for the particular grammar.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.consume.php
		 * @since PECL parle >= 0.5.1
		 */
		public function consume(string $data, \Parle\Lexer $lexer): void {}

		/**
		 * Dump the grammar
		 * <p>Dump the current grammar to stdout.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.dump.php
		 * @since PECL parle >= 0.5.1
		 */
		public function dump(): void {}

		/**
		 * Retrieve the error information
		 * <p>Retrieve the error information in case <b>Parle\Parser::action()</b> returned the error action.</p>
		 * @return Parle\ErrorInfo <p>Returns an instance of Parle\ErrorInfo.</p>
		 * @link https://php.net/manual/en/parle-parser.errorinfo.php
		 * @since PECL parle >= 0.5.1
		 */
		public function errorInfo(): \Parle\ErrorInfo {}

		/**
		 * Declare a token with left-associativity
		 * <p>Declare a terminal with left associativity.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.left.php
		 * @since PECL parle >= 0.5.1
		 */
		public function left(string $tok): void {}

		/**
		 * Declare a token with no associativity
		 * <p>Declare a terminal, that cannot appear more than once in the row.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.nonassoc.php
		 * @since PECL parle >= 0.5.1
		 */
		public function nonassoc(string $tok): void {}

		/**
		 * Declare a precedence rule
		 * <p>Declares a precedence rule for a fictitious terminal symbol. This rule can be later used in the specific grammar rules.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.precedence.php
		 * @since PECL parle >= 0.5.1
		 */
		public function precedence(string $tok): void {}

		/**
		 * Add a grammar rule
		 * <p>Push a grammar rule. The production id returned can be used later in the parsing process to identify the rule matched.</p>
		 * @param string $name <p>Rule name.</p>
		 * @param string $rule <p>The rule to be added. The syntax is Bison compatible.</p>
		 * @return int <p>Returns <code>int</code> representing the rule index.</p>
		 * @link https://php.net/manual/en/parle-parser.push.php
		 * @since PECL parle >= 0.5.1
		 */
		public function push(string $name, string $rule): int {}

		/**
		 * Reset parser state
		 * <p>Reset parser state using the given token id.</p>
		 * @param int $tokenId <p>Token id.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.reset.php
		 * @since PECL parle >= 0.7.1
		 */
		public function reset(int $tokenId = NULL): void {}

		/**
		 * Declare a token with right-associativity
		 * <p>Declare a terminal with right associativity.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.right.php
		 * @since PECL parle >= 0.5.1
		 */
		public function right(string $tok): void {}

		/**
		 * Retrieve a matching part of a rule
		 * <p>Retrieve a part of the match by a rule. This method is equivalent to the pseudo variable functionality in Bison.</p>
		 * @param int $idx <p>Match index, zero based.</p>
		 * @return string <p>Returns a <code>string</code> with the matched part.</p>
		 * @link https://php.net/manual/en/parle-parser.sigil.php
		 * @since PECL parle >= 0.5.1
		 */
		public function sigil(int $idx): string {}

		/**
		 * Declare a token
		 * <p>Declare a terminal to be used in the grammar.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-parser.token.php
		 * @since PECL parle >= 0.5.1
		 */
		public function token(string $tok): void {}

		/**
		 * Get token id
		 * <p>Retrieve the id of the named token.</p>
		 * @param string $tok <p>Name of the token as used in <code>Parle\Parser::token()</code>.</p>
		 * @return int <p>Returns <code>int</code> representing the token id.</p>
		 * @link https://php.net/manual/en/parle-parser.tokenid.php
		 * @since PECL parle >= 0.5.1
		 */
		public function tokenId(string $tok): int {}

		/**
		 * Trace the parser operation
		 * <p>Retrieve the current parser operation description. This can be especially useful for studying the parser and to optimize the grammar.</p>
		 * @return string <p>Returns a <code>string</code> with the trace information.</p>
		 * @link https://php.net/manual/en/parle-parser.trace.php
		 * @since PECL parle >= 0.5.1
		 */
		public function trace(): string {}

		/**
		 * Validate input
		 * <p>Validate an input string. The string is parsed internally, thus this method is useful for the quick input validation.</p>
		 * @param string $data <p>String to be validated.</p>
		 * @param \Parle\Lexer $lexer <p>A lexer object containing the lexing rules prepared for the particular grammar.</p>
		 * @return bool <p>Returns <code>bool</code> witnessing whether the input chimes or not with the defined rules.</p>
		 * @link https://php.net/manual/en/parle-parser.validate.php
		 * @since PECL parle >= 0.5.1
		 */
		public function validate(string $data, \Parle\Lexer $lexer): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.parle-parserexception.php
	 * @since PECL parle >= 0.5.1
	 */
	class ParserException extends \Exception implements \Throwable {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Multistate lexer class. Lexemes can be defined on the fly. If the particular lexer instance is meant to be used with Parle\RParser, the token IDs need to be taken from there. Otherwise, arbitrary token IDs can be supplied. Note, that Parle\Parser is not compatible with this lexer.</p>
	 * @link https://php.net/manual/en/class.parle-rlexer.php
	 * @since PECL parle >= 0.5.1
	 */
	class RLexer {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rlexer.php
		 */
		const ICASE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rlexer.php
		 */
		const DOT_NOT_LF = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rlexer.php
		 */
		const DOT_NOT_CRLF = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rlexer.php
		 */
		const SKIP_WS = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rlexer.php
		 */
		const MATCH_ZERO_LEN = 16;

		/**
		 * @var bool <p>Start of input flag.</p>
		 * @link https://php.net/manual/en/class.parle-rlexer.php#parle-rlexer.props.bol
		 */
		public $bol = FALSE;

		/**
		 * @var int <p>Lexer flags.</p>
		 * @link https://php.net/manual/en/class.parle-rlexer.php#parle-rlexer.props.flags
		 */
		public $flags = 0;

		/**
		 * @var int <p>Current lexer state, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-rlexer.php#parle-rlexer.props.state
		 */
		public $state = 0;

		/**
		 * @var int <p>Position of the latest token match, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-rlexer.php#parle-rlexer.props.marker
		 */
		public $marker = 0;

		/**
		 * @var int <p>Current input offset, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-rlexer.php#parle-rlexer.props.cursor
		 */
		public $cursor = 0;

		/**
		 * Process next lexer rule
		 * <p>Processes the next rule and prepares the resulting token data.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.advance.php
		 * @since PECL parle >= 0.5.1
		 */
		public function advance(): void {}

		/**
		 * Finalize the lexer rule set
		 * <p>Rules, previously added with <code>Parle\RLexer::push()</code> are finalized. This method call has to be done after all the necessary rules was pushed. The rule set becomes read only. The lexing can begin.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.build.php
		 * @since PECL parle >= 0.5.1
		 */
		public function build(): void {}

		/**
		 * Define token callback
		 * <p>Define a callback to be invoked once lexer encounters a particular token.</p>
		 * @param int $id <p>Token id.</p>
		 * @param callable $callback <p>Callable to be invoked. The callable doesn't receive any arguments and its return value is ignored.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.callout.php
		 * @since PECL parle >= 0.7.2
		 */
		public function callout(int $id, callable $callback): void {}

		/**
		 * Pass the data for processing
		 * <p>Consume the data for lexing.</p>
		 * @param string $data <p>Data to be lexed.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.consume.php
		 * @since PECL parle >= 0.5.1
		 */
		public function consume(string $data): void {}

		/**
		 * Dump the state machine
		 * <p>Dump the current state machine to stdout.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.dump.php
		 * @since PECL parle >= 0.5.1
		 */
		public function dump(): void {}

		/**
		 * Retrieve the current token
		 * <p>Retrive the current token.</p>
		 * @return Parle\Token <p>Returns an instance of Parle\Token.</p>
		 * @link https://php.net/manual/en/parle-rlexer.gettoken.php
		 * @since PECL parle >= 0.5.1
		 */
		public function getToken(): \Parle\Token {}

		/**
		 * Insert regex macro
		 * <p>Insert a regex macro, that can be later used as a shortcut and included in other regular expressions.</p>
		 * @param string $name <p>Name of the macros.</p>
		 * @param string $regex <p>Regular expression.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.insertmacro.php
		 * @since PECL parle >= 0.5.1
		 */
		public function insertMacro(string $name, string $regex): void {}

		/**
		 * Add a lexer rule
		 * <p>Push a pattern for lexeme recognition.</p><p>A 'start state' and 'exit state' can be specified by using a suitable signature.</p>
		 * @param string $regex <p>Regular expression used for token matching.</p>
		 * @param int $id <p>Token id. If the lexer instance is meant to be used standalone, this can be an arbitrary number. If the lexer instance is going to be passed to the parser, it has to be an id returned by <code>Parle\RParser::tokenid()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.push.php
		 * @since PECL parle >= 0.5.1
		 */
		public function push(string $regex, int $id): void {}

		/**
		 * Push a new start state
		 * <p>This lexer type can have more than one state machine. This allows you to lex different tokens depending on context, thus allowing simple parsing to take place. Once a state pushed, it can be used with a suitable <code>Parle\RLexer::push()</code> signature variant.</p>
		 * @param string $state <p>Name of the state.</p>
		 * @return int
		 * @link https://php.net/manual/en/parle-rlexer.pushstate.php
		 * @since PECL parle >= 0.5.1
		 */
		public function pushState(string $state): int {}

		/**
		 * Reset lexer
		 * <p>Reset lexing optionally supplying the desired offset.</p>
		 * @param int $pos <p>Reset position.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rlexer.reset.php
		 * @since PECL parle >= 0.7.1
		 */
		public function reset(int $pos): void {}
	}

	/**
	 * <p>Parser class. Rules can be defined on the fly. Once finalized, a Parle\RLexer instance is required to deliver the token stream.</p>
	 * @link https://php.net/manual/en/class.parle-rparser.php
	 * @since PECL parle >= 0.7.0
	 */
	class RParser {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ACTION_ERROR = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ACTION_SHIFT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ACTION_REDUCE = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ACTION_GOTO = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ACTION_ACCEPT = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ERROR_SYNTAX = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ERROR_NON_ASSOCIATIVE = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.parle-rparser.php
		 */
		const ERROR_UNKNOWN_TOKEN = 2;

		/**
		 * @var int <p>Current parser action that matches one of the action class constants, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-rparser.php#parle-rparser.props.action
		 */
		public $action = 0;

		/**
		 * @var int <p>Grammar rule id just processed in the reduce action. The value corresponds either to a token or to a production id. Readonly.</p>
		 * @link https://php.net/manual/en/class.parle-rparser.php#parle-rparser.props.reduceId
		 */
		public $reduceId = 0;

		/**
		 * Process next parser rule
		 * <p>Prosess next parser rule.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.advance.php
		 * @since PECL parle >= 0.7.0
		 */
		public function advance(): void {}

		/**
		 * Finalize the grammar rules
		 * <p>Any tokens and grammar rules previously added are finalized. The rule set becomes readonly and the parser is ready to start.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.build.php
		 * @since PECL parle >= 0.7.0
		 */
		public function build(): void {}

		/**
		 * Consume the data for processing
		 * <p>Consume the data for parsing.</p>
		 * @param string $data <p>Data to be parsed.</p>
		 * @param \Parle\RLexer $rlexer
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.consume.php
		 * @since PECL parle >= 0.7.0
		 */
		public function consume(string $data, \Parle\RLexer $rlexer): void {}

		/**
		 * Dump the grammar
		 * <p>Dump the current grammar to stdout.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.dump.php
		 * @since PECL parle >= 0.7.0
		 */
		public function dump(): void {}

		/**
		 * Retrieve the error information
		 * <p>Retrieve the error information in case <b>Parle\RParser::action()</b> returned the error action.</p>
		 * @return Parle\ErrorInfo <p>Returns an instance of Parle\ErrorInfo.</p>
		 * @link https://php.net/manual/en/parle-rparser.errorinfo.php
		 * @since PECL parle >= 0.7.0
		 */
		public function errorInfo(): \Parle\ErrorInfo {}

		/**
		 * Declare a token with left-associativity
		 * <p>Declare a terminal with left associativity.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.left.php
		 * @since PECL parle >= 0.7.0
		 */
		public function left(string $tok): void {}

		/**
		 * Declare a token with no associativity
		 * <p>Declare a terminal, that cannot appear more than once in the row.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.nonassoc.php
		 * @since PECL parle >= 0.7.0
		 */
		public function nonassoc(string $tok): void {}

		/**
		 * Declare a precedence rule
		 * <p>Declares a precedence rule for a fictious terminal symbol. This rule can be later used in the specific grammar rules.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.precedence.php
		 * @since PECL parle >= 0.7.0
		 */
		public function precedence(string $tok): void {}

		/**
		 * Add a grammar rule
		 * <p>Push a grammar rule. The production id returned can be used later in the parsing process to identify the rule matched.</p>
		 * @param string $name <p>Rule name.</p>
		 * @param string $rule <p>The rule to be added. The syntax is Bison compatible.</p>
		 * @return int <p>Returns <code>int</code> representing the rule index.</p>
		 * @link https://php.net/manual/en/parle-rparser.push.php
		 * @since PECL parle >= 0.7.0
		 */
		public function push(string $name, string $rule): int {}

		/**
		 * Reset parser state
		 * <p>Reset parser state using the given token id.</p>
		 * @param int $tokenId <p>Token id.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.reset.php
		 * @since PECL parle >= 0.7.1
		 */
		public function reset(int $tokenId = NULL): void {}

		/**
		 * Declare a token with right-associativity
		 * <p>Declare a terminal with right associativity.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.right.php
		 * @since PECL parle >= 0.7.0
		 */
		public function right(string $tok): void {}

		/**
		 * Retrieve a matching part of a rule
		 * <p>Retrieve a part of the match by a rule. This method is equivalent to the pseudo variable functionality in Bison.</p>
		 * @param int $idx <p>Match index, zero based.</p>
		 * @return string <p>Returns a <code>string</code> with the matched part.</p>
		 * @link https://php.net/manual/en/parle-rparser.sigil.php
		 * @since PECL parle >= 0.7.0
		 */
		public function sigil(int $idx = NULL): string {}

		/**
		 * Declare a token
		 * <p>Declare a terminal to be used in the grammar.</p>
		 * @param string $tok <p>Token name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-rparser.token.php
		 * @since PECL parle >= 0.7.0
		 */
		public function token(string $tok): void {}

		/**
		 * Get token id
		 * <p>Retrieve the id of the named token.</p>
		 * @param string $tok <p>Name of the token as used in <code>Parle\RParser::token()</code>.</p>
		 * @return int <p>Returns <code>int</code> representing the token id.</p>
		 * @link https://php.net/manual/en/parle-rparser.tokenid.php
		 * @since PECL parle >= 0.7.0
		 */
		public function tokenId(string $tok): int {}

		/**
		 * Trace the parser operation
		 * <p>Retrieve the current parser operation description. This can be especially useful to study the parser and to optimize the grammar.</p>
		 * @return string <p>Returns a <code>string</code> with the trace information.</p>
		 * @link https://php.net/manual/en/parle-rparser.trace.php
		 * @since PECL parle >= 0.7.0
		 */
		public function trace(): string {}

		/**
		 * Validate input
		 * <p>Validate an input string. The string is parsed internally, thus this method is useful for the quick input validation.</p>
		 * @param string $data <p>String to be validated.</p>
		 * @param \Parle\RLexer $lexer <p>A lexer object containing the lexing rules prepared for the particular grammar.</p>
		 * @return bool <p>Returns <code>bool</code> whitnessing whether the input chimes or not with the defined rules.</p>
		 * @link https://php.net/manual/en/parle-rparser.validate.php
		 * @since PECL parle >= 0.7.0
		 */
		public function validate(string $data, \Parle\RLexer $lexer): bool {}
	}

	/**
	 * <p><b>Parle\Stack</b> is a LIFO stack. The elements are inserted and removed only from one end.</p>
	 * @link https://php.net/manual/en/class.parle-stack.php
	 * @since PECL parle >= 0.7.0
	 */
	class Stack {

		/**
		 * @var bool <p>Whether the stack is empty, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-stack.php#parle-stack.props.empty
		 */
		public $empty = TRUE;

		/**
		 * @var int <p>Stack size, readonly.</p>
		 * @link https://php.net/manual/en/class.parle-stack.php#parle-stack.props.size
		 */
		public $size = 0;

		/**
		 * @var mixed <p>Element on the top of the stack.</p>
		 * @link https://php.net/manual/en/class.parle-stack.php#parle-stack.props.top
		 */
		public $top;

		/**
		 * Pop an item from the stack
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-stack.pop.php
		 * @since PECL parle >= 0.5.1
		 */
		public function pop(): void {}

		/**
		 * Push an item into the stack
		 * @param mixed $item <p>Variable to be pushed.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parle-stack.push.php
		 * @since PECL parle >= 0.5.1
		 */
		public function push($item): void {}
	}

	/**
	 * <p>This class represents a token. Lexer returns instances of this class.</p>
	 * @link https://php.net/manual/en/class.parle-token.php
	 * @since PECL parle >= 0.5.2
	 */
	class Token {

		/**
		 * @var int <p>End of input token id.</p>
		 * @link https://php.net/manual/en/class.parle-token.php
		 */
		const EOI = 0;

		/**
		 * @var int <p>Unknown token id.</p>
		 * @link https://php.net/manual/en/class.parle-token.php
		 */
		const UNKNOWN = -1;

		/**
		 * @var int <p>Skip token id.</p>
		 * @link https://php.net/manual/en/class.parle-token.php
		 */
		const SKIP = -2;

		/**
		 * @var int <p>Token id.</p>
		 * @link https://php.net/manual/en/class.parle-token.php#parle-token.props.id
		 */
		public $id;

		/**
		 * @var string <p>Token value.</p>
		 * @link https://php.net/manual/en/class.parle-token.php#parle-token.props.value
		 */
		public $value;
	}

	/**
	 * Flag whether the internal UTF-32 support is compiled in. Available since parle 0.7.2.
	 */
	const INTERNAL_UTF32 = null;

}
