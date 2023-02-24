<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.hashcontext.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	final class HashContext {

		/**
		 * Private constructor to disallow direct instantiation
		 * @return self
		 * @link https://php.net/manual/en/hashcontext.construct.php
		 * @since PHP 7 >= 7.2.0, PHP 8
		 */
		private function __construct() {}

		/**
		 * Serializes the HashContext object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>No value is returned.</p>
		 * @link https://php.net/manual/en/hashcontext.serialize.php
		 * @since PHP 8
		 */
		public function __serialize(): array {}

		/**
		 * Deserializes the data parameter into a HashContext object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $data <p>The value being deserialized.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/hashcontext.unserialize.php
		 * @since PHP 8
		 */
		public function __unserialize(array $data): void {}
	}

	/**
	 * Generate a hash value (message digest)
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see <code>hash_algos()</code>.</p>
	 * @param string $data <p>Message to be hashed.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @param array $options <p>An array of options for the various hashing algorithms. Currently, only the "seed" parameter is supported by the MurmurHash variants.</p>
	 * @return string <p>Returns a string containing the calculated message digest as lowercase hexits unless <code>binary</code> is set to true in which case the raw binary representation of the message digest is returned.</p>
	 * @link https://php.net/manual/en/function.hash.php
	 * @see hash_file(), hash_hmac(), hash_init(), md5(), sha1()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash(string $algo, string $data, bool $binary = false, array $options = []): string {}

	/**
	 * Return a list of registered hashing algorithms
	 * @return array <p>Returns a numerically indexed array containing the list of supported hashing algorithms.</p>
	 * @link https://php.net/manual/en/function.hash-algos.php
	 * @see hash_hmac_algos()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_algos(): array {}

	/**
	 * Copy hashing context
	 * @param \HashContext $context <p>Hashing context returned by <code>hash_init()</code>.</p>
	 * @return HashContext <p>Returns a copy of Hashing Context.</p>
	 * @link https://php.net/manual/en/function.hash-copy.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function hash_copy(\HashContext $context): \HashContext {}

	/**
	 * Timing attack safe string comparison
	 * <p>Compares two strings using the same time whether they're equal or not.</p><p>This function should be used to mitigate timing attacks; for instance, when testing <code>crypt()</code> password hashes.</p>
	 * @param string $known_string <p>The <code>string</code> of known length to compare against</p>
	 * @param string $user_string <p>The user-supplied string</p>
	 * @return bool <p>Returns <b><code>true</code></b> when the two strings are equal, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.hash-equals.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function hash_equals(string $known_string, string $user_string): bool {}

	/**
	 * Generate a hash value using the contents of a given file
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see <code>hash_algos()</code>.</p>
	 * @param string $filename <p>URL describing location of file to be hashed; Supports fopen wrappers.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @param array $options <p>An array of options for the various hashing algorithms. Currently, only the "seed" parameter is supported by the MurmurHash variants.</p>
	 * @return string|false <p>Returns a string containing the calculated message digest as lowercase hexits unless <code>binary</code> is set to true in which case the raw binary representation of the message digest is returned.</p>
	 * @link https://php.net/manual/en/function.hash-file.php
	 * @see hash(), hash_hmac_file(), hash_update_file(), md5_file(), sha1_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_file(string $algo, string $filename, bool $binary = false, array $options = []): string|false {}

	/**
	 * Finalize an incremental hash and return resulting digest
	 * @param \HashContext $context <p>Hashing context returned by <code>hash_init()</code>.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @return string <p>Returns a string containing the calculated message digest as lowercase hexits unless <code>binary</code> is set to true in which case the raw binary representation of the message digest is returned.</p>
	 * @link https://php.net/manual/en/function.hash-final.php
	 * @see hash_init(), hash_update(), hash_update_stream(), hash_update_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_final(\HashContext $context, bool $binary = false): string {}

	/**
	 * Generate a HKDF key derivation of a supplied key input
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "sha256", "sha512", "haval160,4", etc..) See <code>hash_algos()</code> for a list of supported algorithms.</p><p><b>Note</b>:</p><p>Non-cryptographic hash functions are not allowed.</p>
	 * @param string $key <p>Input keying material (raw binary). Cannot be empty.</p>
	 * @param int $length <p>Desired output length in bytes. Cannot be greater than 255 times the chosen hash function size.</p> <p>If <code>length</code> is <code>0</code>, the output length will default to the chosen hash function size.</p>
	 * @param string $info <p>Application/context-specific info string.</p>
	 * @param string $salt <p>Salt to use during derivation.</p> <p>While optional, adding random salt significantly improves the strength of HKDF.</p>
	 * @return string <p>Returns a string containing a raw binary representation of the derived key (also known as output keying material - OKM).</p>
	 * @link https://php.net/manual/en/function.hash-hkdf.php
	 * @see hash_pbkdf2()
	 * @since PHP 7 >= 7.1.2, PHP 8
	 */
	function hash_hkdf(string $algo, string $key, int $length = 0, string $info = "", string $salt = ""): string {}

	/**
	 * Generate a keyed hash value using the HMAC method
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <code>hash_hmac_algos()</code> for a list of supported algorithms.</p>
	 * @param string $data <p>Message to be hashed.</p>
	 * @param string $key <p>Shared secret key used for generating the HMAC variant of the message digest.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @return string <p>Returns a string containing the calculated message digest as lowercase hexits unless <code>binary</code> is set to true in which case the raw binary representation of the message digest is returned.</p>
	 * @link https://php.net/manual/en/function.hash-hmac.php
	 * @see hash(), hash_hmac_algos(), hash_init(), hash_hmac_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_hmac(string $algo, string $data, string $key, bool $binary = false): string {}

	/**
	 * Return a list of registered hashing algorithms suitable for hash_hmac
	 * @return array <p>Returns a numerically indexed array containing the list of supported hashing algorithms suitable for <code>hash_hmac()</code>.</p>
	 * @link https://php.net/manual/en/function.hash-hmac-algos.php
	 * @see hash_hmac(), hash_algos()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function hash_hmac_algos(): array {}

	/**
	 * Generate a keyed hash value using the HMAC method and the contents of a given file
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <code>hash_hmac_algos()</code> for a list of supported algorithms.</p>
	 * @param string $filename <p>URL describing location of file to be hashed; Supports fopen wrappers.</p>
	 * @param string $key <p>Shared secret key used for generating the HMAC variant of the message digest.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @return string|false <p>Returns a string containing the calculated message digest as lowercase hexits unless <code>binary</code> is set to true in which case the raw binary representation of the message digest is returned. Returns <b><code>false</code></b> if the file <code>filename</code> cannot be read.</p>
	 * @link https://php.net/manual/en/function.hash-hmac-file.php
	 * @see hash_hmac_algos(), hash_hmac(), hash_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_hmac_file(string $algo, string $filename, string $key, bool $binary = false): string|false {}

	/**
	 * Initialize an incremental hashing context
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see <code>hash_algos()</code>.</p>
	 * @param int $flags <p>Optional settings for hash generation, currently supports only one option: <b><code>HASH_HMAC</code></b>. When specified, the <code>key</code> <i>must</i> be specified.</p>
	 * @param string $key <p>When <b><code>HASH_HMAC</code></b> is specified for <code>flags</code>, a shared secret key to be used with the HMAC hashing method must be supplied in this parameter.</p>
	 * @param array $options <p>An array of options for the various hashing algorithms. Currently, only the "seed" parameter is supported by the MurmurHash variants.</p>
	 * @return HashContext <p>Returns a Hashing Context for use with <code>hash_update()</code>, <code>hash_update_stream()</code>, <code>hash_update_file()</code>, and <code>hash_final()</code>.</p>
	 * @link https://php.net/manual/en/function.hash-init.php
	 * @see hash(), hash_algos(), hash_file(), hash_hmac(), hash_hmac_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_init(string $algo, int $flags = 0, string $key = "", array $options = []): \HashContext {}

	/**
	 * Generate a PBKDF2 key derivation of a supplied password
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. <code>md5</code>, <code>sha256</code>, <code>haval160,4</code>, etc..) See <code>hash_algos()</code> for a list of supported algorithms.</p>
	 * @param string $password <p>The password to use for the derivation.</p>
	 * @param string $salt <p>The salt to use for the derivation. This value should be generated randomly.</p>
	 * @param int $iterations <p>The number of internal iterations to perform for the derivation.</p>
	 * @param int $length <p>The length of the output string. If <code>binary</code> is <b><code>true</code></b> this corresponds to the byte-length of the derived key, if <code>binary</code> is <b><code>false</code></b> this corresponds to twice the byte-length of the derived key (as every byte of the key is returned as two hexits).</p> <p>If <code>0</code> is passed, the entire output of the supplied algorithm is used.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @return string <p>Returns a string containing the derived key as lowercase hexits unless <code>binary</code> is set to <b><code>true</code></b> in which case the raw binary representation of the derived key is returned.</p>
	 * @link https://php.net/manual/en/function.hash-pbkdf2.php
	 * @see crypt(), password_hash(), hash(), hash_algos(), hash_init(), hash_hmac(), hash_hmac_file(), openssl_pbkdf2()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false): string {}

	/**
	 * Pump data into an active hashing context
	 * @param \HashContext $context <p>Hashing context returned by <code>hash_init()</code>.</p>
	 * @param string $data <p>Message to be included in the hash digest.</p>
	 * @return bool <p>Returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.hash-update.php
	 * @see hash_init(), hash_update_file(), hash_update_stream(), hash_final()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_update(\HashContext $context, string $data): bool {}

	/**
	 * Pump data into an active hashing context from a file
	 * @param \HashContext $context <p>Hashing context returned by <code>hash_init()</code>.</p>
	 * @param string $filename <p>URL describing location of file to be hashed; Supports fopen wrappers.</p>
	 * @param ?resource $stream_context <p>Stream context as returned by <code>stream_context_create()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.hash-update-file.php
	 * @see hash_init(), hash_update(), hash_update_stream(), hash_final(), hash(), hash_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_update_file(\HashContext $context, string $filename, ?resource $stream_context = null): bool {}

	/**
	 * Pump data into an active hashing context from an open stream
	 * @param \HashContext $context <p>Hashing context returned by <code>hash_init()</code>.</p>
	 * @param resource $stream <p>Open file handle as returned by any stream creation function.</p>
	 * @param int $length <p>Maximum number of characters to copy from <code>stream</code> into the hashing context.</p>
	 * @return int <p>Actual number of bytes added to the hashing context from <code>stream</code>.</p>
	 * @link https://php.net/manual/en/function.hash-update-stream.php
	 * @see hash_init(), hash_update(), hash_final(), hash(), hash_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL hash >= 1.1
	 */
	function hash_update_stream(\HashContext $context, $stream, int $length = -1): int {}

	/**
	 * Optional flag for <code>hash_init()</code>. Indicates that the HMAC digest-keying algorithm should be applied to the current hashing context.
	 */
	define('HASH_HMAC', 1);

}
