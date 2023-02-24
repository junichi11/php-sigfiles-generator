<?php



namespace {

	/**
	 * Show largest possible random value
	 * <p>Returns the maximum value that can be returned by a call to <code>rand()</code>.</p>
	 * @return int <p>The largest possible random value returned by <code>rand()</code></p>
	 * @link https://php.net/manual/en/function.getrandmax.php
	 * @see rand(), srand(), mt_getrandmax()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getrandmax(): int {}

	/**
	 * Combined linear congruential generator
	 * <p><b>lcg_value()</b> returns a pseudo random number in the range of (0, 1). The function combines two CGs with periods of 2^31 - 85 and 2^31 - 249. The period of this function is equal to the product of both primes.</p><p>This function does not generate cryptographically secure values, and <i>must not</i> be used for cryptographic purposes, or purposes that require returned values to be unguessable.</p><p>If cryptographically secure randomness is required, the <code>Random\Randomizer</code> may be used with the <code>Random\Engine\Secure</code> engine. For simple use cases, the <code>random_int()</code> and <code>random_bytes()</code> functions provide a convenient and secure API that is backed by the operating system&#x2019;s CSPRNG.</p>
	 * @return float <p>A pseudo random float value between 0.0 and 1.0, inclusive.</p>
	 * @link https://php.net/manual/en/function.lcg-value.php
	 * @see rand(), mt_rand()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function lcg_value(): float {}

	/**
	 * Show largest possible random value
	 * <p>Returns the maximum value that can be returned by a call to <code>mt_rand()</code>.</p>
	 * @return int <p>Returns the maximum random value returned by a call to <code>mt_rand()</code> without arguments, which is the maximum value that can be used for its <code>max</code> parameter without the result being scaled up (and therefore less random).</p>
	 * @link https://php.net/manual/en/function.mt-getrandmax.php
	 * @see mt_rand(), mt_srand(), getrandmax()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function mt_getrandmax(): int {}

	/**
	 * Generate a random value via the Mersenne Twister Random Number Generator
	 * <p>Many random number generators of older libcs have dubious or unknown characteristics and are slow. The <b>mt_rand()</b> function is a drop-in replacement for the older <code>rand()</code>. It uses a random number generator with known characteristics using the &#xBB;&#xA0;Mersenne Twister, which will produce random numbers four times faster than what the average libc rand() provides.</p><p>If called without the optional <code>min</code>, <code>max</code> arguments <b>mt_rand()</b> returns a pseudo-random value between 0 and <code>mt_getrandmax()</code>. If you want a random number between 5 and 15 (inclusive), for example, use <code>mt_rand(5, 15)</code>.</p><p>This function does not generate cryptographically secure values, and <i>must not</i> be used for cryptographic purposes, or purposes that require returned values to be unguessable.</p><p>If cryptographically secure randomness is required, the <code>Random\Randomizer</code> may be used with the <code>Random\Engine\Secure</code> engine. For simple use cases, the <code>random_int()</code> and <code>random_bytes()</code> functions provide a convenient and secure API that is backed by the operating system&#x2019;s CSPRNG.</p>
	 * @return int <p>A random integer value between <code>min</code> (or 0) and <code>max</code> (or <code>mt_getrandmax()</code>, inclusive), or <b><code>false</code></b> if <code>max</code> is less than <code>min</code>.</p>
	 * @link https://php.net/manual/en/function.mt-rand.php
	 * @see mt_srand(), mt_getrandmax(), random_int(), random_bytes(), rand()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function mt_rand(): int {}

	/**
	 * Seeds the Mersenne Twister Random Number Generator
	 * <p>Seeds the random number generator with <code>seed</code> or with a random value if no <code>seed</code> is given.</p><p><b>Note</b>: There is no need to seed the random number generator with <code>srand()</code> or <b>mt_srand()</b> as this is done automatically. </p><p>Because the Mt19937 (&#x201C;Mersenne Twister&#x201D;) engine accepts only a single 32 bit integer as the seed, the number of possible random sequences is limited to just 232 (i.e. 4,294,967,296), despite Mt19937&#x2019;s huge period of 219937-1.</p><p>When relying on either implicit or explicit random seeding, duplications will appear much earlier. Duplicated seeds are expected with 50% probability after less than 80,000 randomly generated seeds according to the birthday problem. A 10% probability of a duplicated seed happens after randomly generating roughly 30,000 seeds.</p><p>This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with more than a negligible probability. If reproducible seeding is required, both the <code>Random\Engine\Xoshiro256StarStar</code> and <code>Random\Engine\PcgOneseq128XslRr64</code> engines support much larger seeds that are unlikely to collide randomly. If reproducibility is not required, the <code>Random\Engine\Secure</code> engine provides cryptographically secure randomness.</p>
	 * @param int $seed <p>An arbitrary <code>int</code> seed value.</p>
	 * @param int $mode <p>Use one of the following constants to specify the implementation of the algorithm to use.</p><ul> <li> <b><code>MT_RAND_MT19937</code></b>: The correct Mt19937 implementation, available as of PHP 7.1.0. </li> <li> <b><code>MT_RAND_PHP</code></b> Uses an incorrect Mersenne Twister implementation which was used as the default up till PHP 7.1.0. This mode is available for backward compatibility. </li> </ul>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.mt-srand.php
	 * @see mt_rand(), mt_getrandmax(), srand()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function mt_srand(int $seed = 0, int $mode = MT_RAND_MT19937): void {}

	/**
	 * Generate a random integer
	 * <p>If called without the optional <code>min</code>, <code>max</code> arguments <b>rand()</b> returns a pseudo-random integer between 0 and <code>getrandmax()</code>. If you want a random number between 5 and 15 (inclusive), for example, use <code>rand(5, 15)</code>.</p><p>This function does not generate cryptographically secure values, and <i>must not</i> be used for cryptographic purposes, or purposes that require returned values to be unguessable.</p><p>If cryptographically secure randomness is required, the <code>Random\Randomizer</code> may be used with the <code>Random\Engine\Secure</code> engine. For simple use cases, the <code>random_int()</code> and <code>random_bytes()</code> functions provide a convenient and secure API that is backed by the operating system&#x2019;s CSPRNG.</p><p><b>Note</b>:  On some platforms (such as Windows), <code>getrandmax()</code> is only 32767. If you require a range larger than 32767, specifying <code>min</code> and <code>max</code> will allow you to create a range larger than this, or consider using <code>mt_rand()</code> instead. </p><p><b>Note</b>: As of PHP 7.1.0, <b>rand()</b> uses the same random number generator as <code>mt_rand()</code>. To preserve backwards compatibility <b>rand()</b> allows <code>max</code> to be smaller than <code>min</code> as opposed to returning <b><code>false</code></b> as <code>mt_rand()</code>.</p>
	 * @return int <p>A pseudo random value between <code>min</code> (or 0) and <code>max</code> (or <code>getrandmax()</code>, inclusive).</p>
	 * @link https://php.net/manual/en/function.rand.php
	 * @see srand(), getrandmax(), mt_rand(), random_int(), random_bytes()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rand(): int {}

	/**
	 * Get cryptographically secure random bytes
	 * <p>Generates an arbitrary length string of cryptographic random bytes that are suitable for cryptographic use, such as when generating salts, keys or initialization vectors.</p><p>The sources of randomness used for this function are as follows:</p><p><b>Note</b>:  Although this function was added to PHP in PHP 7.0, a &#xBB;&#xA0;userland implementation is available for PHP 5.2 to 5.6, inclusive. </p>
	 * @param int $length <p>The length of the random string that should be returned in bytes; must be <code>1</code> or greater.</p>
	 * @return string <p>A string containing the requested number of cryptographically secure random bytes.</p>
	 * @link https://php.net/manual/en/function.random-bytes.php
	 * @see Random\Randomizer::getBytes(), random_int(), bin2hex()
	 * @since PHP 7, PHP 8
	 */
	function random_bytes(int $length): string {}

	/**
	 * Get a cryptographically secure, uniformly selected integer
	 * <p>Generates cryptographic random integers that are suitable for use where unbiased results are critical, such as when shuffling a deck of cards for a poker game.</p><p>The sources of randomness used for this function are as follows:</p><p><b>Note</b>:  Although this function was added to PHP in PHP 7.0, a &#xBB;&#xA0;userland implementation is available for PHP 5.2 to 5.6, inclusive. </p>
	 * @param int $min <p>The lowest value to be returned.</p>
	 * @param int $max <p>The highest value to be returned.</p>
	 * @return int <p>A cryptographically secure, uniformly selected integer from the closed interval [<code>min</code>, <code>max</code>]. Both <code>min</code> and <code>max</code> are possible return values.</p>
	 * @link https://php.net/manual/en/function.random-int.php
	 * @see Random\Randomizer::getInt(), random_bytes()
	 * @since PHP 7, PHP 8
	 */
	function random_int(int $min, int $max): int {}

	/**
	 * Seed the random number generator
	 * <p>Seeds the random number generator with <code>seed</code> or with a random value if <code>seed</code> is <code>0</code>.</p><p><b>Note</b>: There is no need to seed the random number generator with <b>srand()</b> or <code>mt_srand()</code> as this is done automatically. </p><p>Because the Mt19937 (&#x201C;Mersenne Twister&#x201D;) engine accepts only a single 32 bit integer as the seed, the number of possible random sequences is limited to just 232 (i.e. 4,294,967,296), despite Mt19937&#x2019;s huge period of 219937-1.</p><p>When relying on either implicit or explicit random seeding, duplications will appear much earlier. Duplicated seeds are expected with 50% probability after less than 80,000 randomly generated seeds according to the birthday problem. A 10% probability of a duplicated seed happens after randomly generating roughly 30,000 seeds.</p><p>This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with more than a negligible probability. If reproducible seeding is required, both the <code>Random\Engine\Xoshiro256StarStar</code> and <code>Random\Engine\PcgOneseq128XslRr64</code> engines support much larger seeds that are unlikely to collide randomly. If reproducibility is not required, the <code>Random\Engine\Secure</code> engine provides cryptographically secure randomness.</p><p><b>Note</b>: As of PHP 7.1.0, <b>srand()</b> has been made an alias of <code>mt_srand()</code>.</p>
	 * @param int $seed <p>An arbitrary <code>int</code> seed value.</p>
	 * @param int $mode
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.srand.php
	 * @see rand(), getrandmax(), mt_srand()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function srand(int $seed = 0, int $mode = MT_RAND_MT19937): void {}

	/**
	 * Indicates that the correct &#xBB;&#xA0;Mt19937 (Mersenne Twister) implementation will be used by the algorithm, when creating a <code>Random\Engine\Mt19937</code> instance using <code>Random\Engine\Mt19937::__construct()</code> or seeding the global Mersenne Twister with <code>mt_srand()</code>.
	 */
	define('MT_RAND_MT19937', 0);

	/**
	 * Indicates that an incorrect Mersenne Twister implementation will be used by the algorithm, when creating a <code>Random\Engine\Mt19937</code> instance using <code>Random\Engine\Mt19937::__construct()</code> or seeding the global Mersenne Twister with <code>mt_srand()</code>.   The incorrect implementation is available for backwards compatibility with <code>mt_srand()</code> prior to PHP 7.1.0.
	 */
	define('MT_RAND_PHP', 1);

}

namespace Random {

	/**
	 * <p>Indicates that the used <code>Random\Engine</code> is broken, e.g. because it is severely biased.</p>
	 * @link https://php.net/manual/en/class.random-brokenrandomengineerror.php
	 * @since PHP 8 >= 8.2.0
	 */
	class BrokenRandomEngineError extends \Random\RandomError {

		/**
		 * @var string <p>The error message</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The error code</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the error happened</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the error happened</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the error
		 * <p>Error can not be cloned, so this method results in fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/error.clone.php
		 * @since PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * Construct the error object
		 * <p>Constructs the Error.</p>
		 * @param string $message <p>The error message.</p>
		 * @param int $code <p>The error code.</p>
		 * @param ?\Throwable $previous <p>The previous throwable used for the exception chaining.</p>
		 * @return self
		 * @link https://php.net/manual/en/error.construct.php
		 * @since PHP 7, PHP 8
		 */
		public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null) {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link https://php.net/manual/en/error.tostring.php
		 * @since PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return int <p>Returns the error code as <code>int</code></p>
		 * @link https://php.net/manual/en/error.getcode.php
		 * @since PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link https://php.net/manual/en/error.getfile.php
		 * @since PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link https://php.net/manual/en/error.getline.php
		 * @since PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the error message
		 * <p>Returns the error message.</p>
		 * @return string <p>Returns the error message as a string.</p>
		 * @link https://php.net/manual/en/error.getmessage.php
		 * @since PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous Throwable (the third parameter of <code>Error::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/error.getprevious.php
		 * @since PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/error.gettrace.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link https://php.net/manual/en/error.gettraceasstring.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>A marker interface indicating that the <code>Random\Engine</code> returns cryptographically secure randomness.</p>
	 * @link https://php.net/manual/en/class.random-cryptosafeengine.php
	 * @since PHP 8 >= 8.2.0
	 */
	interface CryptoSafeEngine extends Random\Engine {

		/**
		 * Generates randomness
		 * <p>Returns randomness and advances the algorithm&#x2019;s state by one step.</p><p>The randomness is represented by a binary string containing random bytes. This representation allows to unambiguously interpret the random bits generated by the algorithm, for example to accomodate different output sizes used by different algorithms.</p><p>Algorithms that natively operate on integer values should return the integer in little-endian byte order, for example by leveraging the <code>pack()</code> function with the <code>P</code> format code. The high-level interface provided by the <code>Random\Randomizer</code> will interpret the returned random bytes as unsigned little-endian integers if a numeric representation is required.</p><p>It is strongly recommended that each bit of the returned string is uniformly and independently selected, as some applications require randomness based on the bit-level to work correctly. For example linear congruential generators often generate lower-quality randomness for the less significant bits of the return integer value and thus would not be appropriate for applications that require bit-level randomness.</p>
		 * @return string <p>A non-empty string containing random bytes.</p><p><b>Note</b>:  The <code>Random\Randomizer</code> works with unsigned 64 bit integers internally. If the returned string contains more than 64 bit (8 byte) of randomness the exceeding bytes will be ignored. Other applications may be able to process more than 64 bit at once. </p>
		 * @link https://php.net/manual/en/random-engine.generate.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function generate(): string;
	}

	/**
	 * <p>A <b>Random\Engine</b> provides a low-level source of randomness by returning random bytes that are consumed by high-level APIs to perform their operations. The <b>Random\Engine</b> interface allows swapping out the algorithm used to generate randomness, because each algorithm makes different tradeoffs to fit specific use-cases. Some algorithms are very fast, but generate lower-quality randomness, whereas other algorithms are slower, but generate better randomness, up to cryptographically secure randomness as provided by the <code>Random\Engine\Secure</code> engine.</p>
	 * <p>PHP provides several <b>Random\Engine</b>s out of the box to accomodate different use-cases. The <code>Random\Engine\Secure</code> engine that is backed by a CSPRNG is the recommended safe default choice, unless the application requires either reproducible sequences or very high performance.</p>
	 * @link https://php.net/manual/en/class.random-engine.php
	 * @since PHP 8 >= 8.2.0
	 */
	interface Engine {

		/**
		 * Generates randomness
		 * <p>Returns randomness and advances the algorithm&#x2019;s state by one step.</p><p>The randomness is represented by a binary string containing random bytes. This representation allows to unambiguously interpret the random bits generated by the algorithm, for example to accomodate different output sizes used by different algorithms.</p><p>Algorithms that natively operate on integer values should return the integer in little-endian byte order, for example by leveraging the <code>pack()</code> function with the <code>P</code> format code. The high-level interface provided by the <code>Random\Randomizer</code> will interpret the returned random bytes as unsigned little-endian integers if a numeric representation is required.</p><p>It is strongly recommended that each bit of the returned string is uniformly and independently selected, as some applications require randomness based on the bit-level to work correctly. For example linear congruential generators often generate lower-quality randomness for the less significant bits of the return integer value and thus would not be appropriate for applications that require bit-level randomness.</p>
		 * @return string <p>A non-empty string containing random bytes.</p><p><b>Note</b>:  The <code>Random\Randomizer</code> works with unsigned 64 bit integers internally. If the returned string contains more than 64 bit (8 byte) of randomness the exceeding bytes will be ignored. Other applications may be able to process more than 64 bit at once. </p>
		 * @link https://php.net/manual/en/random-engine.generate.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function generate(): string;
	}

}

namespace Random\Engine {

	/**
	 * <p>Implements the &#xBB;&#xA0;Mt19937 (&#x201C;Mersenne Twister&#x201D;) algorithm.</p>
	 * @link https://php.net/manual/en/class.random-engine-mt19937.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class Mt19937 implements \Random\Engine {

		/**
		 * Constructs a new Mt19937 engine
		 * <p></p><p>Because the Mt19937 (&#x201C;Mersenne Twister&#x201D;) engine accepts only a single 32 bit integer as the seed, the number of possible random sequences is limited to just 232 (i.e. 4,294,967,296), despite Mt19937&#x2019;s huge period of 219937-1.</p><p>When relying on either implicit or explicit random seeding, duplications will appear much earlier. Duplicated seeds are expected with 50% probability after less than 80,000 randomly generated seeds according to the birthday problem. A 10% probability of a duplicated seed happens after randomly generating roughly 30,000 seeds.</p><p>This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with more than a negligible probability. If reproducible seeding is required, both the <code>Random\Engine\Xoshiro256StarStar</code> and <code>Random\Engine\PcgOneseq128XslRr64</code> engines support much larger seeds that are unlikely to collide randomly. If reproducibility is not required, the <code>Random\Engine\Secure</code> engine provides cryptographically secure randomness.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?int $seed <p>Fills the state with values generated with a linear congruential generator that was seeded with <code>seed</code> interpreted as an unsigned 32 bit integer.</p> <p>If <code>seed</code> is omitted or <b><code>null</code></b>, a random unsigned 32 bit integer will be used.</p>
		 * @param int $mode <p>Use one of the following constants to specify the implementation of the algorithm to use.</p><ul> <li> <b><code>MT_RAND_MT19937</code></b>: The correct Mt19937 implementation. </li> <li> <b><code>MT_RAND_PHP</code></b>: An incorrect implementation for backwards compatibility with <code>mt_srand()</code> prior to PHP 7.1.0. </li> </ul>
		 * @return self
		 * @link https://php.net/manual/en/random-engine-mt19937.construct.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __construct(?int $seed = null, int $mode = MT_RAND_MT19937) {}

		/**
		 * Returns the internal state of the engine
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-engine-mt19937.debuginfo.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __debugInfo(): array {}

		/**
		 * Serializes the Mt19937 object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-engine-mt19937.serialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __serialize(): array {}

		/**
		 * Deserializes the data parameter into a Mt19937 object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $data
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-engine-mt19937.unserialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __unserialize(array $data): void {}

		/**
		 * Generate 32 bits of randomness
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>A string representing an unsigned 32 bit integer in little-endian order.</p>
		 * @link https://php.net/manual/en/random-engine-mt19937.generate.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function generate(): string {}
	}

	/**
	 * <p>Implements a &#xBB;&#xA0;Permuted congruential generator (PCG) with 128 bits of state, XSL and RR output transformations, and 64 bits of output.</p>
	 * @link https://php.net/manual/en/class.random-engine-pcgoneseq128xslrr64.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class PcgOneseq128XslRr64 implements \Random\Engine {

		/**
		 * Constructs a new PCG Oneseq 128 XSL RR 64 engine
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string|int|null $seed <p>How the internal 128 bit (16 byte) state consisting of one unsigned 128 bit integer is seeded depends on the type used as the <code>seed</code>.</p>   Type Description     <code>null</code>  Fills the state with 16 random bytes generated using the CSPRNG.    <code>int</code>  Fills the state by setting the state to <code>0</code>, advancing the engine one step, adding the value of <code>seed</code> interpreted as an unsigned 64 bit integer, and advancing the engine another step.    <code>string</code>  Fills the state by interpreting a 16 byte <code>string</code> as a little-endian unsigned 128 bit integer.
		 * @return self
		 * @link https://php.net/manual/en/random-engine-pcgoneseq128xslrr64.construct.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __construct(string|int|null $seed = null) {}

		/**
		 * Returns the internal state of the engine
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-engine-pcgoneseq128xslrr64.debuginfo.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __debugInfo(): array {}

		/**
		 * Serializes the PcgOneseq128XslRr64 object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-engine-pcgoneseq128xslrr64.serialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __serialize(): array {}

		/**
		 * Deserializes the data parameter into a PcgOneseq128XslRr64 object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $data
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-engine-pcgoneseq128xslrr64.unserialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __unserialize(array $data): void {}

		/**
		 * Generate 64 bits of randomness
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>A string representing an unsigned 64 bit integer in little-endian order.</p>
		 * @link https://php.net/manual/en/random-engine-pcgoneseq128xslrr64.generate.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function generate(): string {}

		/**
		 * Efficiently move the engine ahead multiple steps
		 * <p>Moves the algorithm&#x2019;s state ahead by the number of steps given by <code>advance</code>, as if <code>Random\Engine\PcgOneseq128XslRr64::generate()</code> was called that many times.</p>
		 * @param int $advance <p>The number of steps to move ahead; must be <code>0</code> or greater.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-engine-pcgoneseq128xslrr64.jump.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function jump(int $advance): void {}
	}

	/**
	 * <p>Generates cryptographically secure randomness using the operating system&#x2019;s CSPRNG.</p>
	 * <p>The randomness generated by this <code>Random\Engine</code> is suitable for all applications, including the generation of long-term secrets, such as encryption keys.</p>
	 * <p>The <b>Random\Engine\Secure</b> engine is the recommended safe default choice, unless the application requires either reproducible sequences or very high performance.</p>
	 * @link https://php.net/manual/en/class.random-engine-secure.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class Secure implements \Random\CryptoSafeEngine {

		/**
		 * Generate cryptographically secure randomness
		 * <p>Returns cryptographically secure randomness.</p><p>The sources of randomness used for this function are as follows:</p>
		 * @return string <p>A string containing <b><code>PHP_INT_SIZE</code></b> cryptographically secure random bytes.</p>
		 * @link https://php.net/manual/en/random-engine-secure.generate.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function generate(): string {}
	}

	/**
	 * <p>Implements the &#xBB;&#xA0;xoshiro256&#42;&#42; algorithm.</p>
	 * @link https://php.net/manual/en/class.random-engine-xoshiro256starstar.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class Xoshiro256StarStar implements \Random\Engine {

		/**
		 * Constructs a new xoshiro256&#42;&#42; engine
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string|int|null $seed <p>How the internal 256 bit (32 byte) state consisting of four unsigned 64 bit integers is seeded depends on the type used as the <code>seed</code>.</p>   Type Description     <code>null</code>  Fills the state with 32 random bytes generated using the CSPRNG.    <code>int</code>  Fills the state with four consecutive values generated with the SplitMix64 algorithm that was seeded with <code>seed</code> interpreted as an unsigned 64 bit integer.    <code>string</code>  Fills the state by interpreting a 32 byte <code>string</code> as four little-endian unsigned 64 bit integers.
		 * @return self
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.construct.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __construct(string|int|null $seed = null) {}

		/**
		 * Returns the internal state of the engine
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.debuginfo.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __debugInfo(): array {}

		/**
		 * Serializes the Xoshiro256StarStar object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.serialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __serialize(): array {}

		/**
		 * Deserializes the data parameter into a Xoshiro256StarStar object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $data
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.unserialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __unserialize(array $data): void {}

		/**
		 * Generate 64 bits of randomness
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>A string representing an unsigned 64 bit integer in little-endian order.</p>
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.generate.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function generate(): string {}

		/**
		 * Efficiently move the engine ahead by 2^128 steps
		 * <p>Moves the algorithm&#x2019;s state ahead by 2128 steps, as if <code>Random\Engine\Xoshiro256StarStar::generate()</code> was called 2128 times.</p><p>The purpose of a jump is to facilitate the creation of a new <code>Random\Engine\Xoshiro256StarStar</code> engine from an existing seeded <code>Random\Engine\Xoshiro256StarStar</code> engine. The seeded engine acts as a blueprint, which can be cloned and repeatedly jumped to create 2128 non-overlapping sequences with 2128 values each.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.jump.php
		 * @see Random\Engine\Xoshiro256StarStar::jumpLong()
		 * @since PHP 8 >= 8.2.0
		 */
		public function jump(): void {}

		/**
		 * Efficiently move the engine ahead by 2^192 steps
		 * <p>Moves the algorithm&#x2019;s state ahead by 2192 steps, as if <code>Random\Engine\Xoshiro256StarStar::generate()</code> was called 2192 times.</p><p>The purpose of a long jump is to facilitate the creation of a new <code>Random\Engine\Xoshiro256StarStar</code> engine from an existing seeded <code>Random\Engine\Xoshiro256StarStar</code> engine. The seeded engine acts as a blueprint, which can be cloned and repeatedly jumped to create 264 non-overlapping sequences with 2192 values each.</p><p>Long jumping may be combined with <code>Random\Engine\Xoshiro256StarStar::jump()</code>ing to further split each of the 264 sequences generated by long jumping, into 264 sequences of 2128 values each.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-engine-xoshiro256starstar.jumplong.php
		 * @see Random\Engine\Xoshiro256StarStar::jump()
		 * @since PHP 8 >= 8.2.0
		 */
		public function jumpLong(): void {}
	}

}

namespace Random {

	/**
	 * <p>The base class for <code>Error</code>s that occur during generation or use of randomness.</p>
	 * @link https://php.net/manual/en/class.random-randomerror.php
	 * @since PHP 8 >= 8.2.0
	 */
	class RandomError extends \Error {

		/**
		 * @var string <p>The error message</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The error code</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the error happened</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the error happened</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.error.php#error.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the error
		 * <p>Error can not be cloned, so this method results in fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/error.clone.php
		 * @since PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * Construct the error object
		 * <p>Constructs the Error.</p>
		 * @param string $message <p>The error message.</p>
		 * @param int $code <p>The error code.</p>
		 * @param ?\Throwable $previous <p>The previous throwable used for the exception chaining.</p>
		 * @return self
		 * @link https://php.net/manual/en/error.construct.php
		 * @since PHP 7, PHP 8
		 */
		public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null) {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link https://php.net/manual/en/error.tostring.php
		 * @since PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return int <p>Returns the error code as <code>int</code></p>
		 * @link https://php.net/manual/en/error.getcode.php
		 * @since PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link https://php.net/manual/en/error.getfile.php
		 * @since PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link https://php.net/manual/en/error.getline.php
		 * @since PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the error message
		 * <p>Returns the error message.</p>
		 * @return string <p>Returns the error message as a string.</p>
		 * @link https://php.net/manual/en/error.getmessage.php
		 * @since PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous Throwable (the third parameter of <code>Error::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/error.getprevious.php
		 * @since PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/error.gettrace.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link https://php.net/manual/en/error.gettraceasstring.php
		 * @since PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>The base class for <code>Exception</code>s that occur during generation or use of randomness.</p>
	 * @link https://php.net/manual/en/class.random-randomexception.php
	 * @since PHP 8 >= 8.2.0
	 */
	class RandomException extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * Construct the exception
		 * <p>Constructs the Exception.</p>
		 * @param string $message <p>The Exception message to throw.</p>
		 * @param int $code <p>The Exception code.</p>
		 * @param ?\Throwable $previous <p>The previous exception used for the exception chaining.</p>
		 * @return self
		 * @link https://php.net/manual/en/exception.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $message = "", int $code = 0, ?\Throwable $previous = null) {}

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
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

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
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

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
	 * <p>Provides a high-level API to the randomness provided by an <code>Random\Engine</code>.</p>
	 * @link https://php.net/manual/en/class.random-randomizer.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class Randomizer {

		/**
		 * @var Random\Engine <p>The low-level source of randomness for the <code>Random\Randomizer</code>&#x2019;s methods.</p>
		 * @link https://php.net/manual/en/class.random-randomizer.php#random-randomizer.props.engine
		 */
		public $engine;

		/**
		 * Constructs a new Randomizer
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?\Random\Engine $engine <p>The <code>Random\Engine</code> to use to generate randomness.</p> <p>If <code>engine</code> is omitted or <b><code>null</code></b>, a new <code>Random\Engine\Secure</code> object will be used.</p>
		 * @return self
		 * @link https://php.net/manual/en/random-randomizer.construct.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __construct(?\Random\Engine $engine = null) {}

		/**
		 * Serializes the Randomizer object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/random-randomizer.serialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __serialize(): array {}

		/**
		 * Deserializes the data parameter into a Randomizer object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $data
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/random-randomizer.unserialize.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __unserialize(array $data): void {}

		/**
		 * Get random bytes
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $length <p>The length of the random string that should be returned in bytes; must be <code>1</code> or greater.</p>
		 * @return string <p>A string containing the requested number of random bytes.</p>
		 * @link https://php.net/manual/en/random-randomizer.getbytes.php
		 * @see random_bytes()
		 * @since PHP 8 >= 8.2.0
		 */
		public function getBytes(int $length): string {}

		/**
		 * Get a uniformly selected integer
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $min <p>The lowest value to be returned.</p>
		 * @param int $max <p>The highest value to be returned.</p>
		 * @return int <p>A uniformly selected integer from the closed interval [<code>min</code>, <code>max</code>]. Both <code>min</code> and <code>max</code> are possible return values.</p>
		 * @link https://php.net/manual/en/random-randomizer.getint.php
		 * @see random_int()
		 * @since PHP 8 >= 8.2.0
		 */
		public function getInt(int $min, int $max): int {}

		/**
		 * Get a positive integer
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int
		 * @link https://php.net/manual/en/random-randomizer.nextint.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function nextInt(): int {}

		/**
		 * Select random array keys
		 * <p>Uniformly selects <code>num</code> distinct array keys of the input <code>array</code>.</p><p>Each key of the input <code>array</code> is equally likely to be returned.</p><p>The selection of the array keys depends on the internal structure of the input <code>array</code>. The returned array keys might be different for two equal input arrays and two <code>Random\Engine</code>s with identical state, depending on how the input arrays have been created.</p>
		 * @param array $array <p>The array whose array keys are selected.</p>
		 * @param int $num <p>The number of array keys to return; must be between <code>1</code> and the number of elements in <code>array</code>.</p>
		 * @return array <p>An <code>array</code> containing <code>num</code> distinct array keys of <code>array</code>.</p><p>The returned <code>array</code> will be a list (<code>array_is_list()</code>). It will be a subset of the <code>array</code> returned by <code>array_keys()</code>.</p>
		 * @link https://php.net/manual/en/random-randomizer.pickarraykeys.php
		 * @see array_keys()
		 * @since PHP 8 >= 8.2.0
		 */
		public function pickArrayKeys(array $array, int $num): array {}

		/**
		 * Get a permutation of an array
		 * <p>Returns a uniformly selected permutation of the input <code>array</code>.</p><p>Each possible permutation of the input <code>array</code> is equally likely to be returned.</p>
		 * @param array $array <p>The <code>array</code> whose values are shuffled.</p> <p>The input <code>array</code> will not be modified.</p>
		 * @return array <p>A permutation of the values of <code>array</code>.</p><p>Array keys of the input <code>array</code> will not be preserved; the returned <code>array</code> will be a list (<code>array_is_list()</code>).</p>
		 * @link https://php.net/manual/en/random-randomizer.shufflearray.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function shuffleArray(array $array): array {}

		/**
		 * Get a byte-wise permutation of a string
		 * <p>Returns a uniformly selected permutation of the input <code>bytes</code>.</p><p>Each possible permutation of the input <code>bytes</code> is equally likely to be returned.</p>
		 * @param string $bytes <p>The <code>string</code> whose bytes are shuffled.</p> <p>The input <code>string</code> will not be modified.</p>
		 * @return string <p>A permutation of the bytes of <code>bytes</code>.</p>
		 * @link https://php.net/manual/en/random-randomizer.shufflebytes.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function shuffleBytes(string $bytes): string {}
	}

}
