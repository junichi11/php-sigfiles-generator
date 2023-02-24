<?php



namespace {

	/**
	 * <p>Exceptions thrown by the sodium functions.</p>
	 * @link https://php.net/manual/en/class.sodiumexception.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	class SodiumException extends \Exception {

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
	 * Add large numbers
	 * <p>This adds the parameter <code>string2</code> to <code>string1</code>, overwriting the value stored in <code>string1</code>. This function assumes both parameters are binary strings that represent unsigned integers in little-endian byte order.</p>
	 * @param string $string1 <p>String representing an arbitrary-length unsigned integer in little-endian byte order. This parameter is passed by reference and will hold the sum of the two parameters.</p>
	 * @param string $string2 <p>String representing an arbitrary-length unsigned integer in little-endian byte order.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.sodium-add.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_add(string &$string1, string $string2): void {}

	/**
	 * Decodes a base64-encoded string into raw binary.
	 * <p>Converts a base64 encoded string into raw binary. Unlike <code>base64_decode()</code>, <b>sodium_base642bin()</b> is constant-time (a property that is important for any code that touches cryptographic inputs, such as plaintexts or keys) and supports multiple character sets.</p>
	 * @param string $string <p><code>string</code>; Encoded string.</p>
	 * @param int $id <p></p><ul> <li> <b><code>SODIUM_BASE64_VARIANT_ORIGINAL</code></b> for standard (<code>A-Za-z0-9/\+</code>) Base64 encoding. </li> <li> <b><code>SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING</code></b> for standard (<code>A-Za-z0-9/\+</code>) Base64 encoding, without <code>=</code> padding characters. </li> <li> <b><code>SODIUM_BASE64_VARIANT_URLSAFE</code></b> for URL-safe (<code>A-Za-z0-9\-_</code>) Base64 encoding. </li> <li> <b><code>SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING</code></b> for URL-safe (<code>A-Za-z0-9\-_</code>) Base64 encoding, without <code>=</code> padding characters. </li> </ul>
	 * @param string $ignore <p>Characters to ignore when decoding (e.g. whitespace characters).</p>
	 * @return string <p>Decoded string.</p>
	 * @link https://php.net/manual/en/function.sodium-base642bin.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_base642bin(string $string, int $id, string $ignore = ""): string {}

	/**
	 * Encodes a raw binary string with base64.
	 * <p>Converts a raw binary string into a base64-encoded string. Unlike <code>base64_encode()</code>, <b>sodium_bin2base64()</b> is constant-time (a property that is important for any code that touches cryptographic inputs, such as plaintexts or keys) and supports multiple character sets.</p>
	 * @param string $string <p>Raw binary string.</p>
	 * @param int $id <p></p><ul> <li> <b><code>SODIUM_BASE64_VARIANT_ORIGINAL</code></b> for standard (<code>A-Za-z0-9/\+</code>) Base64 encoding. </li> <li> <b><code>SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING</code></b> for standard (<code>A-Za-z0-9/\+</code>) Base64 encoding, without <code>=</code> padding characters. </li> <li> <b><code>SODIUM_BASE64_VARIANT_URLSAFE</code></b> for URL-safe (<code>A-Za-z0-9\-_</code>) Base64 encoding. </li> <li> <b><code>SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING</code></b> for URL-safe (<code>A-Za-z0-9\-_</code>) Base64 encoding, without <code>=</code> padding characters. </li> </ul>
	 * @return string <p>Base64-encoded string.</p>
	 * @link https://php.net/manual/en/function.sodium-bin2base64.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_bin2base64(string $string, int $id): string {}

	/**
	 * Encode to hexadecimal
	 * <p>Converts a raw binary string into a hex-encoded string. Unlike the standard hex-encoding function, <b>sodium_bin2hex()</b> is constant-time (a property that is important for any code that touches cryptographic inputs, such as plaintexts or keys).</p>
	 * @param string $string <p>Raw binary string.</p>
	 * @return string <p>Hex encoded string.</p>
	 * @link https://php.net/manual/en/function.sodium-bin2hex.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_bin2hex(string $string): string {}

	/**
	 * Compare large numbers
	 * <p>Compare two strings as if they were arbitrary-length, unsigned little-endian integers, without side-channel leakage.</p>
	 * @param string $string1 <p>Left operand</p>
	 * @param string $string2 <p>Right operand</p>
	 * @return int <p>Returns <code>-1</code> if <code>string1</code> is less than <code>string2</code>.</p><p>Returns <code>1</code> if <code>string1</code> is greater than <code>string2</code>.</p><p>Returns <code>0</code> if both strings are equal.</p>
	 * @link https://php.net/manual/en/function.sodium-compare.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_compare(string $string1, string $string2): int {}

	/**
	 * Verify then decrypt a message with AES-256-GCM
	 * <p>Verify then decrypt with AES-256-GCM. Only available if <code>sodium_crypto_aead_aes256gcm_is_available()</code> returns <b><code>true</code></b>.</p>
	 * @param string $ciphertext <p>Must be in the format provided by <code>sodium_crypto_aead_aes256gcm_encrypt()</code> (ciphertext and tag, concatenated).</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 12 bytes long.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string|false <p>Returns the plaintext on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-aes256gcm-decrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_aes256gcm_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

	/**
	 * Encrypt then authenticate with AES-256-GCM
	 * <p>Encrypt then authenticate with AES-256-GCM. Only available if <code>sodium_crypto_aead_aes256gcm_is_available()</code> returns <b><code>true</code></b>.</p>
	 * @param string $message <p>The plaintext message to encrypt.</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 12 bytes long.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Returns the ciphertext and authentication tag as a string of raw binary bytes. (Format: ciphertext, then tag.)</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-aes256gcm-encrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_aes256gcm_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

	/**
	 * Check if hardware supports AES256-GCM
	 * <p>The return value of this function depends on whether or not the hardware supports hardware-accelerated AES.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if it is safe to encrypt with AES-256-GCM, and <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-aes256gcm-is-available.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_aes256gcm_is_available(): bool {}

	/**
	 * Generate a random AES-256-GCM key
	 * <p>Generate a random key for use with <code>sodium_crypto_aead_aes256gcm_encrypt()</code> and <code>sodium_crypto_aead_aes256gcm_decrypt()</code>.</p>
	 * @return string <p>Returns a 256-bit random key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-aes256gcm-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_aes256gcm_keygen(): string {}

	/**
	 * Verify then decrypt with ChaCha20-Poly1305
	 * <p>Verify then decrypt with ChaCha20-Poly1305.</p>
	 * @param string $ciphertext <p>Must be in the format provided by <code>sodium_crypto_aead_chacha20poly1305_encrypt()</code> (ciphertext and tag, concatenated).</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 8 bytes long.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string|false <p>Returns the plaintext on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-chacha20poly1305-decrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_chacha20poly1305_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

	/**
	 * Encrypt then authenticate with ChaCha20-Poly1305
	 * <p>Encrypt then authenticate with ChaCha20-Poly1305.</p>
	 * @param string $message <p>The plaintext message to encrypt.</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 8 bytes long.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Returns the ciphertext and tag on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-chacha20poly1305-encrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_chacha20poly1305_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

	/**
	 * Verify that the ciphertext includes a valid tag
	 * <p>Verify then decrypt with ChaCha20-Poly1305 (IETF variant).</p><p>The IETF variant uses 96-bit nonces and 32-bit internal counters, instead of 64-bit for both.</p>
	 * @param string $ciphertext <p>Must be in the format provided by <code>sodium_crypto_aead_chacha20poly1305_ietf_encrypt()</code> (ciphertext and tag, concatenated).</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 12 bytes long.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string|false <p>Returns the plaintext on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_chacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

	/**
	 * Encrypt a message
	 * <p>Encrypt then authenticate with ChaCha20-Poly1305 (IETF variant).</p><p>The IETF variant uses 96-bit nonces and 32-bit internal counters, instead of 64-bit for both.</p>
	 * @param string $message <p>The plaintext message to encrypt.</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 12 bytes long.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Returns the ciphertext and tag on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_chacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

	/**
	 * Generate a random ChaCha20-Poly1305 (IETF) key.
	 * <p>Generate a random key for use with <code>sodium_crypto_aead_chacha20poly1305_ietf_encrypt()</code> and <code>sodium_crypto_aead_chacha20poly1305_ietf_decrypt()</code>.</p>
	 * @return string <p>Returns a 256-bit random key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-chacha20poly1305-ietf-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_chacha20poly1305_ietf_keygen(): string {}

	/**
	 * Generate a random ChaCha20-Poly1305 key.
	 * <p>Generate a random key for use with <code>sodium_crypto_aead_chacha20poly1305_encrypt()</code> and <code>sodium_crypto_aead_chacha20poly1305_decrypt()</code>.</p>
	 * @return string <p>Returns a 256-bit random key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-chacha20poly1305-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_chacha20poly1305_keygen(): string {}

	/**
	 * (Preferred) Verify then decrypt with XChaCha20-Poly1305
	 * <p>Verify then decrypt with ChaCha20-Poly1305 (eXtended-nonce variant).</p><p>Generally, XChaCha20-Poly1305 is the best of the provided AEAD modes to use.</p>
	 * @param string $ciphertext <p>Must be in the format provided by <code>sodium_crypto_aead_chacha20poly1305_ietf_encrypt()</code> (ciphertext and tag, concatenated).</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string|false <p>Returns the plaintext on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-xchacha20poly1305-ietf-decrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): string|false {}

	/**
	 * (Preferred) Encrypt then authenticate with XChaCha20-Poly1305
	 * <p>Encrypt then authenticate with XChaCha20-Poly1305 (eXtended-nonce variant).</p><p>Generally, XChaCha20-Poly1305 is the best of the provided AEAD modes to use.</p>
	 * @param string $message <p>The plaintext message to encrypt.</p>
	 * @param string $additional_data <p>Additional, authenticated data. This is used in the verification of the authentication tag appended to the ciphertext, but it is not encrypted or stored in the ciphertext.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Returns the ciphertext and tag on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string {}

	/**
	 * Generate a random XChaCha20-Poly1305 key.
	 * <p>Generate a random key for use with <code>sodium_crypto_aead_xchacha20poly1305_ietf_encrypt()</code> and <code>sodium_crypto_aead_xchacha20poly1305_ietf_decrypt()</code>.</p>
	 * @return string <p>Returns a 256-bit random key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-aead-xchacha20poly1305-ietf-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_aead_xchacha20poly1305_ietf_keygen(): string {}

	/**
	 * Compute a tag for the message
	 * <p>Symmetric message authentication via <b>sodium_crypto_auth()</b> provides integrity, but not confidentiality.</p><p>Unlike with digital signatures (e.g. <code>sodium_crypto_sign_detached()</code>), any party capable of verifying a message is also capable of authenticating their own messages. (Hence, symmetric authentication.)</p>
	 * @param string $message <p>The message you intend to authenticate</p>
	 * @param string $key <p>Authentication key</p>
	 * @return string <p>Authentication tag</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-auth.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_auth(string $message, string $key): string {}

	/**
	 * Generate a random key for sodium_crypto_auth
	 * <p>Generate a key for use with <code>sodium_crypto_auth()</code> and <code>sodium_crypto_auth_verify()</code>.</p>
	 * @return string <p>Returns a 256-bit random key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-auth-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_auth_keygen(): string {}

	/**
	 * Verifies that the tag is valid for the message
	 * <p>Verify the authentication tag is valid for a given message and key.</p><p>Unlike with digital signatures (e.g. <code>sodium_crypto_sign_verify_detached()</code>), any party capable of verifying a message is also capable of authenticating their own messages. (Hence, symmetric authentication.)</p>
	 * @param string $mac <p>Authentication tag produced by <code>sodium_crypto_auth()</code></p>
	 * @param string $message <p>Message</p>
	 * @param string $key <p>Authentication key</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-auth-verify.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_auth_verify(string $mac, string $message, string $key): bool {}

	/**
	 * Authenticated public-key encryption
	 * <p>Encrypt a message using asymmetric (public key) cryptography.</p><p>The algorithm used by functions prefixed with <b>sodium_crypto_box()</b> are Elliptic Curve Diffie-Hellman over the Montgomery curve, Curve25519; usually abbreviated as X25519.</p>
	 * @param string $message <p>The message to be encrypted.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key_pair <p>See <code>sodium_crypto_box_keypair_from_secretkey_and_publickey()</code>. This should include the sender's X25519 secret key and the recipient's X25519 public key.</p>
	 * @return string <p>Returns the encrypted message (ciphertext plus authentication tag). The ciphertext will be 16 bytes longer than the plaintext, and a raw binary string. See <code>sodium_bin2base64()</code> for safe encoding for storage.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box(string $message, string $nonce, string $key_pair): string {}

	/**
	 * Randomly generate a secret key and a corresponding public key
	 * <p>Generates a secret key and a public key as one string.</p><p>To get the secret key out of this unified keypair string, see <code>sodium_crypto_box_secretkey()</code>. To get the public key out of this unified keypair string, see <code>sodium_crypto_box_publickey()</code>.</p>
	 * @return string <p>One string containing both the X25519 secret key and corresponding X25519 public key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-keypair.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_keypair(): string {}

	/**
	 * Create a unified keypair string from a secret key and public key
	 * <p>This function exists to satisfy the API requirements of e.g. <b>crypto_box()</b>. Pass in one party's secret key and the other's public key, and you will obtain a "keypair" for your conversation.</p>
	 * @param string $secret_key <p>Secret key.</p>
	 * @param string $public_key <p>Public key.</p>
	 * @return string <p>X25519 Keypair.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-keypair-from-secretkey-and-publickey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {}

	/**
	 * Authenticated public-key decryption
	 * <p>Decrypt a message using asymmetric (public key) cryptography.</p>
	 * @param string $ciphertext <p>The encrypted message to attempt to decrypt.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key_pair <p>See <code>sodium_crypto_box_keypair_from_secretkey_and_publickey()</code>. This should include the sender's public key and the recipient's secret key.</p>
	 * @return string|false <p>Returns the plaintext message on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-open.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_open(string $ciphertext, string $nonce, string $key_pair): string|false {}

	/**
	 * Extract the public key from a crypto_box keypair
	 * <p>Given a keypair, fetch only the public key.</p>
	 * @param string $key_pair <p>A keypair, such as one generated by <code>sodium_crypto_box_keypair()</code> or <code>sodium_crypto_box_seed_keypair()</code></p>
	 * @return string <p>X25519 public key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-publickey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_publickey(string $key_pair): string {}

	/**
	 * Calculate the public key from a secret key
	 * <p>Given a secret key, calculate the corresponding public key.</p><p>This only works with the type of keys intended for use with <b>crypto_box()</b> (which uses Elliptic Curve Diffie-Hellman over the Montgomery curve, Curve25519; abbreviated as X25519), not <b>crypto_sign()</b> (which uses Edwards Digital Signature Algorithm over the Edwards Curve with the corresponding paramaters; abbreviated Ed25519).</p>
	 * @param string $secret_key <p>X25519 secret key</p>
	 * @return string <p>X25519 public key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-publickey-from-secretkey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_publickey_from_secretkey(string $secret_key): string {}

	/**
	 * Anonymous public-key encryption
	 * <p>Encrypt a message such that only the recipient can decrypt it.</p><p>Unlike with <code>sodium_crypto_box()</code>, you only need to know the recipient's public key to use <b>sodium_crypto_box_seal()</b>. One consequence of this convenience, however, is that the ciphertext isn't bound to a static public key, and is therefore not authenticated. Hence, anonymous public-key encryption.</p><p><b>sodium_crypto_box_seal()</b> still provides ciphertext integrity. Just not sender identity authentication.</p><p>If you also need sender authentication, the <code>sodium_crypto_sign()</code> functions are likely the best place to start.</p>
	 * @param string $message <p>The message to encrypt.</p>
	 * @param string $public_key <p>The public key that corresponds to the only key that can decrypt the message.</p>
	 * @return string <p>A ciphertext string in the format of (one-time public key, encrypted message, authentication tag).</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-seal.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_seal(string $message, string $public_key): string {}

	/**
	 * Anonymous public-key decryption
	 * <p>Decrypt a message that was encrypted with <code>sodium_crypto_box_seal()</code></p>
	 * @param string $ciphertext <p>The encrypted message</p>
	 * @param string $key_pair <p>The keypair of the recipient. Must include the secret key.</p>
	 * @return string|false <p>The plaintext on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-seal-open.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_seal_open(string $ciphertext, string $key_pair): string|false {}

	/**
	 * Extracts the secret key from a crypto_box keypair
	 * <p>Given a keypair, fetch only the secret key.</p>
	 * @param string $key_pair <p>A keypair, such as one generated by <code>sodium_crypto_box_keypair()</code> or <code>sodium_crypto_box_seed_keypair()</code></p>
	 * @return string <p>X25519 secret key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-secretkey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_secretkey(string $key_pair): string {}

	/**
	 * Deterministically derive the key pair from a single key
	 * <p>Clamps the seed to form a secret key, derives the public key, and returns the two as a keypair.</p><p>The <code>&#42;_seed_keypair</code> functions are ideal for generating a keypair from a password and salt. Use the result as a <code>seed</code> to generate the desired keys.</p>
	 * @param string $seed <p>Some cryptographic input. Must be 32 bytes.</p>
	 * @return string <p>X25519 Keypair (secret key and public key).</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-box-seed-keypair.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_box_seed_keypair(string $seed): string {}

	/**
	 * Adds an element
	 * <p>Adds an element <code>q</code> to <code>p</code>. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $p <p>An element.</p>
	 * @param string $q <p>An element.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-add.php
	 * @see sodium_crypto_core_ristretto255_random(), sodium_crypto_core_ristretto255_sub()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_add(string $p, string $q): string {}

	/**
	 * Maps a vector
	 * <p>Maps a 64-bytes vector <code>s</code> to a group element. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s <p>A 64-bytes vector.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-from-hash.php
	 * @see sodium_hex2bin(), sodium_bin2hex()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_from_hash(string $s): string {}

	/**
	 * Determines if a point on the ristretto255 curve
	 * <p>Determines if a point on the ristretto255 curve, in canonical form, on the main subgroup, and that the point doesn't have a small order. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s <p>An Elliptic-curve point.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>s</code> is on the ristretto255 curve, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-is-valid-point.php
	 * @see sodium_crypto_core_ristretto255_scalar_random(), sodium_crypto_scalarmult_ristretto255_base()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_is_valid_point(string $s): bool {}

	/**
	 * Generates a random key
	 * <p>Generates a random key. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-random.php
	 * @see sodium_crypto_core_ristretto255_add(), sodium_crypto_core_ristretto255_sub()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_random(): string {}

	/**
	 * Adds a scalar value
	 * <p>Adds an element <code>y</code> to <code>x</code>. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $x <p>Scalar, representing the X coordinate.</p>
	 * @param string $y <p>Scalar, representing the Y coordinate.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-add.php
	 * @see sodium_crypto_core_ristretto255_scalar_random(), sodium_crypto_core_ristretto255_scalar_sub()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_add(string $x, string $y): string {}

	/**
	 * The sodium_crypto_core_ristretto255_scalar_complement purpose
	 * <p>Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s <p>Scalar value.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-complement.php
	 * @see sodium_crypto_core_ristretto255_scalar_random()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_complement(string $s): string {}

	/**
	 * Inverts a scalar value
	 * <p>Inverts a scalar value. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s <p>Scalar value.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-invert.php
	 * @see sodium_crypto_core_ristretto255_scalar_random()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_invert(string $s): string {}

	/**
	 * Multiplies a scalar value
	 * <p>Multiplies a scalar value. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $x <p>Scalar, representing the X coordinate.</p>
	 * @param string $y <p>Scalar, representing the Y coordinate.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-mul.php
	 * @see sodium_crypto_core_ristretto255_scalar_random()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_mul(string $x, string $y): string {}

	/**
	 * Negates a scalar value
	 * <p>Negates a scalar value. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s <p>Scalar value.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-negate.php
	 * @see sodium_crypto_core_ristretto255_scalar_random()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_negate(string $s): string {}

	/**
	 * Generates a random key
	 * <p>Generates a random key. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-random.php
	 * @see sodium_crypto_core_ristretto255_scalar_add(), sodium_crypto_core_ristretto255_scalar_sub()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_random(): string {}

	/**
	 * Reduces a scalar value
	 * <p>Reduces a scalar value. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $s <p>Scalar value.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-reduce.php
	 * @see sodium_crypto_core_ristretto255_scalar_random()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_reduce(string $s): string {}

	/**
	 * Subtracts a scalar value
	 * <p>Subtracts a scalar <code>y</code> from <code>x</code>. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $x <p>Scalar, representing the X coordinate.</p>
	 * @param string $y <p>Scalar, representing the Y coordinate.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-scalar-sub.php
	 * @see sodium_crypto_core_ristretto255_scalar_random(), sodium_crypto_core_ristretto255_scalar_add()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_scalar_sub(string $x, string $y): string {}

	/**
	 * Subtracts an element
	 * <p>Subtracts an element <code>q</code> from <code>p</code>. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $p <p>An element.</p>
	 * @param string $q <p>An element.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-core-ristretto255-sub.php
	 * @see sodium_crypto_core_ristretto255_random(), sodium_crypto_core_ristretto255_add()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_core_ristretto255_sub(string $p, string $q): string {}

	/**
	 * Get a hash of the message
	 * <p>Hash a message with BLAKE2b.</p>
	 * @param string $message <p>The message being hashed.</p>
	 * @param string $key <p>(Optional) cryptographic key. This serves the same function as a HMAC key, but it's utilized as a reserved section of the internal BLAKE2 state.</p>
	 * @param int $length <p>Output size.</p>
	 * @return string <p>The cryptographic hash as raw bytes. If a hex-encoded output is desired, the result can be passed to <code>sodium_bin2hex()</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-generichash.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_generichash(string $message, string $key = "", int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

	/**
	 * Complete the hash
	 * <p>The finalization method for the streaming generichash API.</p>
	 * @param string $state <p>Hash state returned from <code>sodium_crypto_generichash_init()</code></p>
	 * @param int $length <p>Output length.</p>
	 * @return string <p>Cryptographic hash.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-generichash-final.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_generichash_final(string &$state, int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

	/**
	 * Initialize a hash for streaming
	 * <p>The initialization method for the streaming generichash API.</p>
	 * @param string $key <p>The generichash key.</p>
	 * @param int $length <p>The expected output length of the hash function.</p>
	 * @return string <p>Returns a hash state, serialized as a raw binary string.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-generichash-init.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_generichash_init(string $key = "", int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

	/**
	 * Generate a random generichash key
	 * <p>Generate a random key for use with the generichash API.</p>
	 * @return string <p>A random 256-bit key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-generichash-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_generichash_keygen(): string {}

	/**
	 * Add message to a hash
	 * <p>Appends a message to the internal hash state.</p>
	 * @param string $state <p>The return value of <code>sodium_crypto_generichash_init()</code>.</p>
	 * @param string $message <p>Data to append to the hashing state.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-generichash-update.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_generichash_update(string &$state, string $message): bool {}

	/**
	 * Derive a subkey
	 * <p>Derive a subkey from a root key and additional context.</p><p>Similar to <code>hash_hkdf()</code>.</p>
	 * @param int $subkey_length <p>Length of the key to return (in bytes)</p>
	 * @param int $subkey_id <p>Return the Nth subkey from a given root key. Useful for seeking.</p>
	 * @param string $context <p>Application-specific context.</p>
	 * @param string $key <p>The root key from which the subkey is derived.</p>
	 * @return string <p>A string of pseudorandom (raw binary) bytes.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kdf-derive-from-key.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kdf_derive_from_key(int $subkey_length, int $subkey_id, string $context, string $key): string {}

	/**
	 * Generate a random root key for the KDF interface
	 * <p>Generates a random key suitable for serving as the root key for <code>sodium_crypto_kdf_derive_from_key()</code>.</p>
	 * @return string <p>A random 256-bit key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kdf-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kdf_keygen(): string {}

	/**
	 * Calculate the client-side session keys.
	 * <p>Calculate the client-side session keys, using the X25519 + BLAKE2b key-exchange method.</p>
	 * @param string $client_key_pair <p>A crypto_kx keypair, such as one generated by <code>sodium_crypto_kx_keypair()</code>.</p>
	 * @param string $server_key <p>A crypto_kx public key.</p>
	 * @return array <p>An array consisting of two strings. The first should be used for receiving data from the server. The second should be used for sending data to the server.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kx-client-session-keys.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kx_client_session_keys(string $client_key_pair, string $server_key): array {}

	/**
	 * Creates a new sodium keypair
	 * <p>Create a new sodium keypair consisting of the secret key (32 bytes) followed by the public key (32 bytes). The keys can be retrieved by calling <code>sodium_crypto_kx_secretkey()</code> and <code>sodium_crypto_kx_publickey()</code>, respectively.</p>
	 * @return string <p>Returns the new keypair on success; throws an exception otherwise.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kx-keypair.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kx_keypair(): string {}

	/**
	 * Extract the public key from a crypto_kx keypair
	 * <p>Extract the public key from a crypto_kx keypair.</p>
	 * @param string $key_pair <p>X25519 keypair, such as one generated by <code>sodium_crypto_kx_keypair()</code>.</p>
	 * @return string <p>X25519 public key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kx-publickey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kx_publickey(string $key_pair): string {}

	/**
	 * Extract the secret key from a crypto_kx keypair.
	 * <p>Extract the secret key from a crypto_kx keypair.</p>
	 * @param string $key_pair <p>X25519 keypair, such as one generated by <code>sodium_crypto_kx_keypair()</code>.</p>
	 * @return string <p>X25519 secret key.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kx-secretkey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kx_secretkey(string $key_pair): string {}

	/**
	 * Description
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $seed
	 * @return string
	 * @link https://php.net/manual/en/function.sodium-crypto-kx-seed-keypair.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kx_seed_keypair(string $seed): string {}

	/**
	 * Calculate the server-side session keys.
	 * <p>Calculate the server-side session keys, using the X25519 + BLAKE2b key-exchange method.</p>
	 * @param string $server_key_pair <p>A crypto_kx keypair, such as one generated by <code>sodium_crypto_kx_keypair()</code>.</p>
	 * @param string $client_key <p>A crypto_kx public key.</p>
	 * @return array <p>An array consisting of two strings. The first should be used for receiving data from the client. The second should be used for sending data to the client.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-kx-server-session-keys.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_kx_server_session_keys(string $server_key_pair, string $client_key): array {}

	/**
	 * Derive a key from a password, using Argon2
	 * <p>This function provides low-level access to libsodium's crypto_pwhash key derivation function. Unless you have specific reason to use this function, you should use <code>sodium_crypto_pwhash_str()</code> or <code>password_hash()</code> functions instead.</p><p>A common reason to use this particular function is to derive the seeds for cryptographic keys from a password and salt, and then use these seeds to generate the actual keys needed for some purpose (e.g. <code>sodium_crypto_sign_detached()</code>).</p>
	 * @param int $length <p><code>int</code>; The length of the password hash to generate, in bytes.</p>
	 * @param string $password <p><code>string</code>; The password to generate a hash for.</p>
	 * @param string $salt <p>A salt to add to the password before hashing. The salt should be unpredictable, ideally generated from a good random number source such as <code>random_bytes()</code>, and have a length of at least <b><code>SODIUM_CRYPTO_PWHASH_SALTBYTES</code></b> bytes.</p>
	 * @param int $opslimit <p>Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are some constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</code></b> and <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</code></b>.</p>
	 * @param int $memlimit <p>The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</code></b>, and <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</code></b>. Typically these should be paired with the matching <code>opslimit</code> values.</p>
	 * @param int $algo <p><code>int</code> A number indicating the hash algorithm to use. By default <b><code>SODIUM_CRYPTO_PWHASH_ALG_DEFAULT</code></b> (the currently recommended algorithm, which can change from one version of libsodium to another), or explicitly using <b><code>SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13</code></b>, representing the Argon2id algorithm version 1.3.</p>
	 * @return string <p>Returns the derived key. The return value is a binary string of the hash, not an ASCII-encoded representation, and does not contain additional information about the parameters used to create the hash, so you will need to keep that information if you are ever going to verify the password in future. Use <code>sodium_crypto_pwhash_str()</code> to avoid needing to do all that.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash(int $length, string $password, string $salt, int $opslimit, int $memlimit, int $algo = SODIUM_CRYPTO_PWHASH_ALG_DEFAULT): string {}

	/**
	 * Derives a key from a password, using scrypt
	 * <p>This is the scrypt counterpart to <code>sodium_crypto_pwhash()</code>.</p><p>A common reason to use this particular function is to derive the seeds for cryptographic keys from a password and salt, and then use these seeds to generate the actual keys needed for some purpose (e.g. <code>sodium_crypto_sign_detached()</code>).</p>
	 * @param int $length <p>The length of the password hash to generate, in bytes.</p>
	 * @param string $password <p>The password to generate a hash for.</p>
	 * @param string $salt <p>A salt to add to the password before hashing. The salt should be unpredictable, ideally generated from a good random number source such as <code>random_bytes()</code>, and have a length of at least <b><code>SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES</code></b> bytes.</p>
	 * @param int $opslimit <p>Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are some constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <b><code>SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE</code></b> and <b><code>SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE</code></b>.</p>
	 * @param int $memlimit <p>The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <b><code>SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE</code></b> and <b><code>SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE</code></b>. Typically these should be paired with the matching <code>opslimit</code> values.</p>
	 * @return string <p>A string of bytes of the desired length.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash-scryptsalsa208sha256.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash_scryptsalsa208sha256(int $length, string $password, string $salt, int $opslimit, int $memlimit): string {}

	/**
	 * Get an ASCII encoded hash
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $password
	 * @param int $opslimit
	 * @param int $memlimit
	 * @return string
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash-scryptsalsa208sha256-str.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash_scryptsalsa208sha256_str(string $password, int $opslimit, int $memlimit): string {}

	/**
	 * Verify that the password is a valid password verification string
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $hash
	 * @param string $password
	 * @return bool
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify(string $hash, string $password): bool {}

	/**
	 * Get an ASCII-encoded hash
	 * <p>Uses a CPU- and memory-hard hash algorithm along with a randomly-generated salt, and memory and CPU limits to generate an ASCII-encoded hash suitable for password storage.</p>
	 * @param string $password <p><code>string</code>; The password to generate a hash for.</p>
	 * @param int $opslimit <p>Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</code></b> and <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</code></b>.</p>
	 * @param int $memlimit <p>The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</code></b>, and <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</code></b>. Typically these should be paired with the matching opslimit values.</p>
	 * @return string <p>Returns the hashed password.</p><p>In order to produce the same password hash from the same password, the same values for <code>opslimit</code> and <code>memlimit</code> must be used. These are embedded within the generated hash, so everything that's needed to verify the hash is included. This allows the <code>sodium_crypto_pwhash_str_verify()</code> function to verify the hash without needing separate storage for the other parameters.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash-str.php
	 * @see sodium_crypto_pwhash_str_verify(), sodium_crypto_pwhash(), password_hash(), password_verify()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash_str(string $password, int $opslimit, int $memlimit): string {}

	/**
	 * Determine whether or not to rehash a password
	 * <p>Determine whether or not to rehash a password, based on the current hash <code>opslimit</code> and <code>memlimit</code>.</p>
	 * @param string $password <p>Password hash</p>
	 * @param int $opslimit <p>Configured opslimit; see <code>sodium_crypto_pwhash_str()</code></p>
	 * @param int $memlimit <p>Configured memlimit; see <code>sodium_crypto_pwhash_str()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> if the provided memlimit/opslimit do not match what's stored in the hash. Returns <b><code>false</code></b> if they match.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash-str-needs-rehash.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash_str_needs_rehash(string $password, int $opslimit, int $memlimit): bool {}

	/**
	 * Verifies that a password matches a hash
	 * <p>Checks that a password hash created using <code>sodium_crypto_pwhash_str()</code> matches a given plain-text password. Note that the parameters are in the opposite order to the same parameters in the similar <code>password_verify()</code> function.</p>
	 * @param string $hash <p>A hash created by <code>password_hash()</code>.</p>
	 * @param string $password <p>The user's password.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the password and hash match, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-pwhash-str-verify.php
	 * @see sodium_crypto_pwhash_str(), password_hash(), password_verify()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_pwhash_str_verify(string $hash, string $password): bool {}

	/**
	 * Compute a shared secret given a user's secret key and another user's public key
	 * <p>Elliptic Curve Diffie-Hellman. Calculates scalar n times point p, on an elliptic curve.</p>
	 * @param string $n <p>scalar, which is typically a secret key</p>
	 * @param string $p <p>point (x-coordinate), which is typically a public key</p>
	 * @return string <p>A 32-byte random string.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-scalarmult.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_scalarmult(string $n, string $p): string {}

	/**
	 * Alias of sodium_crypto_box_publickey_from_secretkey()
	 * <p>This function is an alias of: <code>sodium_crypto_box_publickey_from_secretkey()</code>.</p>
	 * @param string $secret_key <p>X25519 secret key</p>
	 * @return string
	 * @link https://php.net/manual/en/function.sodium-crypto-scalarmult-base.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_scalarmult_base(string $secret_key): string {}

	/**
	 * Computes a shared secret
	 * <p>Calculates scalar <code>n</code> times point <code>p</code>. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $n <p>A scalar, which is typically a secret key.</p>
	 * @param string $p <p>A point (x-coordinate), which is typically a public key.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-scalarmult-ristretto255.php
	 * @see sodium_crypto_scalarmult_ristretto255_base()
	 * @since PHP 8 >= 8.1.1
	 */
	function sodium_crypto_scalarmult_ristretto255(string $n, string $p): string {}

	/**
	 * Calculates the public key from a secret key
	 * <p>Given a secret key, calculates the corresponding public key. Available as of libsodium 1.0.18.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $n <p>A secret key.</p>
	 * @return string <p>Returns a 32-byte random <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-scalarmult-ristretto255-base.php
	 * @see sodium_crypto_scalarmult_ristretto255()
	 * @since PHP 8 >= 8.1.1
	 */
	function sodium_crypto_scalarmult_ristretto255_base(string $n): string {}

	/**
	 * Authenticated shared-key encryption
	 * <p>Encrypt a message with a symmetric (shared) key.</p>
	 * @param string $message <p>The plaintext message to encrypt.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Returns the encrypted string.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretbox.php
	 * @see sodium_crypto_secretbox_open(), sodium_crypto_secretbox_keygen(), random_bytes()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretbox(string $message, string $nonce, string $key): string {}

	/**
	 * Generate random key for sodium_crypto_secretbox
	 * <p>Generate a key for use with <code>sodium_crypto_secretbox()</code> and <code>sodium_crypto_secretbox_open()</code>.</p>
	 * @return string <p>Returns the generated string of cryptographically secure random bytes.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretbox-keygen.php
	 * @see sodium_bin2hex(), random_bytes()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretbox_keygen(): string {}

	/**
	 * Authenticated shared-key decryption
	 * <p>Decrypt an encrypted message with a symmetric (shared) key.</p>
	 * @param string $ciphertext <p>Must be in the format provided by <code>sodium_crypto_secretbox()</code> (ciphertext and tag, concatenated).</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string|false <p>The decrypted string on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretbox-open.php
	 * @see sodium_crypto_secretbox(), sodium_crypto_secretbox_keygen(), random_bytes()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretbox_open(string $ciphertext, string $nonce, string $key): string|false {}

	/**
	 * Initialize a secretstream context for decryption
	 * <p>Initialize a secretstream context for decryption.</p>
	 * @param string $header <p>The header of the secretstream. This should be one of the values produced by <code>sodium_crypto_secretstream_xchacha20poly1305_init_push()</code>.</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Secretstream state.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_init_pull(string $header, string $key): string {}

	/**
	 * Initialize a secretstream context for encryption
	 * <p>Initialize a secretstream context for encryption.</p>
	 * @param string $key <p>Cryptography key. See <code>sodium_crypto_secretstream_xchacha20poly1305_keygen()</code>.</p>
	 * @return array <p>An array with two string values:</p><ul> <li>The secretstream state, needed for further pushes</li> <li>The secretstream header, which needs to be provided to the recipient so they can pull data</li> </ul>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretstream-xchacha20poly1305-init-push.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_init_push(string $key): array {}

	/**
	 * Generate a random secretstream key.
	 * <p>Generate a random secretstream key.</p>
	 * @return string <p>Returns a string of random bytes.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretstream-xchacha20poly1305-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_keygen(): string {}

	/**
	 * Decrypt a chunk of data from an encrypted stream
	 * <p>Decrypt a chunk of data from an encrypted stream.</p>
	 * @param string $state <p>See <code>sodium_crypto_secretstream_xchacha20poly1305_init_pull()</code> and <code>sodium_crypto_secretstream_xchacha20poly1305_init_push()</code></p>
	 * @param string $ciphertext <p>The ciphertext chunk to decrypt.</p>
	 * @param string $additional_data <p>Optional additional data to include in the authentication tag.</p>
	 * @return array|false <p>An array with two values:</p><ul> <li> <p><code>string</code>; The decrypted chunk</p> </li> <li> <p><code>int</code>; An optional tag (if provided during push). Possible values:</p><ul> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE</code></b>: the most common tag, that doesn't add any information about the nature of the message. </li> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL</code></b>: indicates that the message marks the end of the stream, and erases the secret key used to encrypt the previous sequence. </li> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH</code></b>: indicates that the message marks the end of a set of messages, but not the end of the stream. For example, a huge JSON string sent as multiple chunks can use this tag to indicate to the application that the string is complete and that it can be decoded. But the stream itself is not closed, and more data may follow. </li> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY</code></b>: "forget" the key used to encrypt this message and the previous ones, and derive a new secret key. </li> </ul> </li> </ul>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretstream-xchacha20poly1305-pull.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_pull(string &$state, string $ciphertext, string $additional_data = ""): array|false {}

	/**
	 * Encrypt a chunk of data so that it can safely be decrypted in a streaming API
	 * <p>Encrypt a chunk of data so that it can safely be decrypted in a streaming API.</p>
	 * @param string $state <p>See <code>sodium_crypto_secretstream_xchacha20poly1305_init_pull()</code> and <code>sodium_crypto_secretstream_xchacha20poly1305_init_push()</code></p>
	 * @param string $message
	 * @param string $additional_data
	 * @param int $tag <p>Optional. Can be used to assert decryption behavior (i.e. re-keying or indicating the final chunk in a stream).</p> <ul> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE</code></b>: the most common tag, that doesn't add any information about the nature of the message. </li> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL</code></b>: indicates that the message marks the end of the stream, and erases the secret key used to encrypt the previous sequence. </li> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH</code></b>: indicates that the message marks the end of a set of messages, but not the end of the stream. For example, a huge JSON string sent as multiple chunks can use this tag to indicate to the application that the string is complete and that it can be decoded. But the stream itself is not closed, and more data may follow. </li> <li> <b><code>SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY</code></b>: "forget" the key used to encrypt this message and the previous ones, and derive a new secret key. </li> </ul>
	 * @return string <p>Returns the encrypted ciphertext.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretstream-xchacha20poly1305-push.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_push(string &$state, string $message, string $additional_data = "", int $tag = SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE): string {}

	/**
	 * Explicitly rotate the key in the secretstream state
	 * <p>Explicitly rotate the key in the secretstream state. Overwrites the value passed in.</p>
	 * @param string $state <p>Secretstream state.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-secretstream-xchacha20poly1305-rekey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_rekey(string &$state): void {}

	/**
	 * Compute a short hash of a message and key
	 * <p><b>sodium_crypto_shorthash()</b> wraps a hash function called SipHash-2-4, which is ideal for implementing hash tables that are not susceptible to hash collision denial of service attacks (Hash-DoS).</p><p>SipHash-2-4 isn't a general purpose cryptographic hash function.</p>
	 * @param string $message <p>The message to hash.</p>
	 * @param string $key <p>The hash key.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.sodium-crypto-shorthash.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_shorthash(string $message, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p>Generate a key for use with <code>sodium_crypto_shorthash()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.sodium-crypto-shorthash-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_shorthash_keygen(): string {}

	/**
	 * Sign a message
	 * <p>Sign a message with a secret key, that can be verified by the corresponding public key. This function attaches the signature to the message. See <code>sodium_crypto_sign_detached()</code> for detached signatures.</p>
	 * @param string $message <p>Message to sign.</p>
	 * @param string $secret_key <p>Secret key. See <code>sodium_crypto_sign_secretkey()</code></p>
	 * @return string <p>Signed message (not encrypted).</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign(string $message, string $secret_key): string {}

	/**
	 * Sign the message
	 * <p>Sign a message with a secret key, that can be verified by the corresponding public key. This function returns a detached signature.</p>
	 * @param string $message <p>Message to sign.</p>
	 * @param string $secret_key <p>Secret key. See <code>sodium_crypto_sign_secretkey()</code></p>
	 * @return string <p>Cryptographic signature.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-detached.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_detached(string $message, string $secret_key): string {}

	/**
	 * Convert an Ed25519 public key to a Curve25519 public key
	 * <p>Given an Ed25519 public key, calculate the birationally equivalent X25519 public key.</p>
	 * @param string $public_key <p>Public key suitable for the crypto_sign functions.</p>
	 * @return string <p>Public key suitable for the crypto_box functions.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-ed25519-pk-to-curve25519.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_ed25519_pk_to_curve25519(string $public_key): string {}

	/**
	 * Convert an Ed25519 secret key to a Curve25519 secret key
	 * <p>Given an Ed25519 secret key, calculate the birationally equivalent X25519 secret key.</p>
	 * @param string $secret_key <p>Secret key suitable for the crypto_sign functions.</p>
	 * @return string <p>Secret key suitable for the crypto_box functions.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-ed25519-sk-to-curve25519.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_ed25519_sk_to_curve25519(string $secret_key): string {}

	/**
	 * Randomly generate a secret key and a corresponding public key
	 * <p>Generate a random Ed25519 keypair as one string.</p>
	 * @return string <p>Ed25519 keypair.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-keypair.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_keypair(): string {}

	/**
	 * Join a secret key and public key together
	 * <p>Join a secret key and public key together.</p>
	 * @param string $secret_key <p>Ed25519 secret key</p>
	 * @param string $public_key <p>Ed25519 public key</p>
	 * @return string <p>Keypair</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-keypair-from-secretkey-and-publickey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {}

	/**
	 * Check that the signed message has a valid signature
	 * <p>Verify the signature attached to a message and return the message</p>
	 * @param string $signed_message <p>A message signed with <code>sodium_crypto_sign()</code></p>
	 * @param string $public_key <p>An Ed25519 public key</p>
	 * @return string|false <p>Returns the original signed message on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-open.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_open(string $signed_message, string $public_key): string|false {}

	/**
	 * Extract the Ed25519 public key from a keypair
	 * <p>Extract the Ed25519 public key from a keypair</p>
	 * @param string $key_pair <p>Ed25519 keypair (see: <code>sodium_crypto_sign_keypair()</code>)</p>
	 * @return string <p>Ed25519 public key</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-publickey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_publickey(string $key_pair): string {}

	/**
	 * Extract the Ed25519 public key from the secret key
	 * <p>Extract the Ed25519 public key from the secret key</p>
	 * @param string $secret_key <p>Ed25519 secret key</p>
	 * @return string <p>Ed25519 public key</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-publickey-from-secretkey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_publickey_from_secretkey(string $secret_key): string {}

	/**
	 * Extract the Ed25519 secret key from a keypair
	 * <p>Extract the Ed25519 secret key from a keypair</p>
	 * @param string $key_pair <p>Ed25519 keypair (see: <code>sodium_crypto_sign_keypair()</code>)</p>
	 * @return string <p>Ed25519 secret key</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-secretkey.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_secretkey(string $key_pair): string {}

	/**
	 * Deterministically derive the key pair from a single key
	 * <p>Clamps the seed to form a secret key, derives the public key, and returns the two as a keypair.</p><p>The <code>&#42;_seed_keypair</code> functions are ideal for generating a keypair from a password and salt. Use the result as a <code>seed</code> to generate the desired keys.</p>
	 * @param string $seed <p>Some cryptographic input. Must be 32 bytes.</p>
	 * @return string <p>Keypair (secret key and public key)</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-seed-keypair.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_seed_keypair(string $seed): string {}

	/**
	 * Verify signature for the message
	 * <p>Verify signature for the message</p>
	 * @param string $signature <p>The cryptographic signature obtained from <code>sodium_crypto_sign_detached()</code></p>
	 * @param string $message <p>The message being verified</p>
	 * @param string $public_key <p>Ed25519 public key</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-sign-verify-detached.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_sign_verify_detached(string $signature, string $message, string $public_key): bool {}

	/**
	 * Generate a deterministic sequence of bytes from a seed
	 * <p>Generate a deterministic sequence of bytes from a seed, using the XSalsa20 stream cipher.</p>
	 * @param int $length <p>The number of bytes to return.</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>String of pseudorandom bytes.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_stream(int $length, string $nonce, string $key): string {}

	/**
	 * Generate a random sodium_crypto_stream key.
	 * <p>Generate a key for use with <code>sodium_crypto_stream()</code> and <code>sodium_crypto_stream_xor()</code>.</p>
	 * @return string <p>Encryption key (256-bit).</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream-keygen.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_stream_keygen(): string {}

	/**
	 * Expands the key and nonce into a keystream of pseudorandom bytes
	 * <p>Expands the <code>key</code> and <code>nonce</code> into a keystream of pseudorandom bytes.</p>
	 * @param int $length <p>Number of bytes desired.</p>
	 * @param string $nonce <p>24-byte nonce.</p>
	 * @param string $key <p>Key, possibly generated from <code>sodium_crypto_stream_xchacha20_keygen()</code>.</p>
	 * @return string <p>Returns a pseudorandom stream that can be used with <code>sodium_crypto_stream_xchacha20_xor()</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream-xchacha20.php
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_stream_xchacha20(int $length, string $nonce, string $key): string {}

	/**
	 * Returns a secure random key
	 * <p>Returns a secure random key for use with <code>sodium_crypto_stream_xchacha20()</code>.</p>
	 * @return string <p>Returns a 32-byte secure random key for use with <code>sodium_crypto_stream_xchacha20()</code>.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream-xchacha20-keygen.php
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_stream_xchacha20_keygen(): string {}

	/**
	 * Encrypts a message using a nonce and a secret key (no authentication)
	 * <p>Encrypts a <code>message</code> using a <code>nonce</code> and a secret <code>key</code> (no authentication).</p><p>This encryption is unauthenticated, and does not prevent chosen-ciphertext attacks. Make sure to combine the ciphertext with a Message Authentication Code, for example with <code>sodium_crypto_aead_xchacha20poly1305_ietf_encrypt()</code> function, or <code>sodium_crypto_auth()</code>.</p>
	 * @param string $message <p>The message to encrypt.</p>
	 * @param string $nonce <p>24-byte nonce.</p>
	 * @param string $key <p>Key, possibly generated from <code>sodium_crypto_stream_xchacha20_keygen()</code>.</p>
	 * @return string <p>Encrypted message.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream-xchacha20-xor.php
	 * @see sodium_crypto_stream_xchacha20_xor_ic()
	 * @since PHP 8 >= 8.1.0
	 */
	function sodium_crypto_stream_xchacha20_xor(string $message, string $nonce, string $key): string {}

	/**
	 * Encrypts a message using a nonce and a secret key (no authentication)
	 * <p>The function is similar to <code>sodium_crypto_stream_xchacha20_xor()</code> but adds the ability to set the initial value of the block counter to a non-zero value. This permits direct access to any block without having to compute the previous ones.</p><p>This encryption is unauthenticated, and does not prevent chosen-ciphertext attacks. Make sure to combine the ciphertext with a Message Authentication Code, for example with <code>sodium_crypto_aead_xchacha20poly1305_ietf_encrypt()</code> function, or <code>sodium_crypto_auth()</code>.</p>
	 * @param string $message <p>The message to encrypt.</p>
	 * @param string $nonce <p>24-byte nonce.</p>
	 * @param int $counter <p>The initial value of the block counter.</p>
	 * @param string $key <p>Key, possibly generated from <code>sodium_crypto_stream_xchacha20_keygen()</code>.</p>
	 * @return string <p>Encrypted message, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream-xchacha20-xor-ic.php
	 * @see sodium_crypto_stream_xchacha20_xor()
	 * @since PHP 8 >= 8.2.0
	 */
	function sodium_crypto_stream_xchacha20_xor_ic(string $message, string $nonce, int $counter, string $key): string {}

	/**
	 * Encrypt a message without authentication
	 * <p>This function encrypts a message with XSalsa20, but does not provide any ciphertext guarantees about the plaintext.</p>
	 * @param string $message <p>The message to encrypt</p>
	 * @param string $nonce <p>A number that must be only used once, per message. 24 bytes long. This is a large enough bound to generate randomly (i.e. <code>random_bytes()</code>).</p>
	 * @param string $key <p>Encryption key (256-bit).</p>
	 * @return string <p>Encrypted message.</p>
	 * @link https://php.net/manual/en/function.sodium-crypto-stream-xor.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_crypto_stream_xor(string $message, string $nonce, string $key): string {}

	/**
	 * Decodes a hexadecimally encoded binary string
	 * <p>Decodes a hexadecimally encoded binary string.</p><p>Like <code>sodium_bin2hex()</code>, <b>sodium_hex2bin()</b> is resistant to side-channel attacks while <code>hex2bin()</code> is not.</p>
	 * @param string $string <p>Hexadecimal representation of data.</p>
	 * @param string $ignore <p>Optional string argument for characters to ignore.</p>
	 * @return string <p>Returns the binary representation of the given <code>string</code> data.</p>
	 * @link https://php.net/manual/en/function.sodium-hex2bin.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_hex2bin(string $string, string $ignore = ""): string {}

	/**
	 * Increment large number
	 * <p>Treat the string as a little-endian unsigned integer, then increase it by 1. Constant-time.</p>
	 * @param string $string <p>String to increment.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.sodium-increment.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_increment(string &$string): void {}

	/**
	 * Test for equality in constant-time
	 * <p>Compare two strings in constant-time.</p><p>In practice, you almost always want to use <code>hash_equals()</code> instead, since it provides the same logic but returns a <code>bool</code> instead of an <code>int</code>. However, if you're using the return value of a comparison in a calculation that's timing-sensitive, and worried about timing leaks with bool-to-int conversions, <b>sodium_memcmp()</b> is an ideal replacement.</p>
	 * @param string $string1 <p>String to compare</p>
	 * @param string $string2 <p>Other string to compare</p>
	 * @return int <p>Returns <code>0</code> if both strings are equal; <code>-1</code> otherwise.</p>
	 * @link https://php.net/manual/en/function.sodium-memcmp.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_memcmp(string $string1, string $string2): int {}

	/**
	 * Overwrite a string with NUL characters
	 * <p><b>sodium_memzero()</b> zeroes out the string that is passed by reference.</p>
	 * @param string $string <p>String.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.sodium-memzero.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_memzero(string &$string): void {}

	/**
	 * Add padding data
	 * <p>Right-pad a string to a desired length. Timing-safe.</p>
	 * @param string $string <p>Unpadded string.</p>
	 * @param int $block_size <p>The string will be padded until it is an even multiple of the block size.</p>
	 * @return string <p>Padded string.</p>
	 * @link https://php.net/manual/en/function.sodium-pad.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_pad(string $string, int $block_size): string {}

	/**
	 * Remove padding data
	 * <p>Unpad a padded string. Timing-safe.</p>
	 * @param string $string <p>Padded string.</p>
	 * @param int $block_size <p>The block size for padding.</p>
	 * @return string <p>Unpadded string.</p>
	 * @link https://php.net/manual/en/function.sodium-unpad.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function sodium_unpad(string $string, int $block_size): string {}

	define('SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES', 16);

	define('SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES', 32);

	define('SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES', 12);

	define('SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES', 0);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES', 16);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES', 16);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES', 32);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES', 12);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES', 0);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES', 32);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES', 8);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES', 0);

	define('SODIUM_CRYPTO_AUTH_BYTES', 32);

	define('SODIUM_CRYPTO_AUTH_KEYBYTES', 32);

	define('SODIUM_CRYPTO_BOX_KEYPAIRBYTES', 64);

	define('SODIUM_CRYPTO_BOX_MACBYTES', 16);

	define('SODIUM_CRYPTO_BOX_NONCEBYTES', 24);

	define('SODIUM_CRYPTO_BOX_PUBLICKEYBYTES', 32);

	define('SODIUM_CRYPTO_BOX_SEALBYTES', 48);

	define('SODIUM_CRYPTO_BOX_SECRETKEYBYTES', 32);

	define('SODIUM_CRYPTO_BOX_SEEDBYTES', 32);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES', 32);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES', 64);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES', 64);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES', 32);

	define('SODIUM_CRYPTO_GENERICHASH_BYTES', 32);

	define('SODIUM_CRYPTO_GENERICHASH_BYTES_MAX', 64);

	define('SODIUM_CRYPTO_GENERICHASH_BYTES_MIN', 16);

	define('SODIUM_CRYPTO_GENERICHASH_KEYBYTES', 32);

	define('SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX', 64);

	define('SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN', 16);

	define('SODIUM_CRYPTO_KDF_BYTES_MAX', 64);

	define('SODIUM_CRYPTO_KDF_BYTES_MIN', 16);

	define('SODIUM_CRYPTO_KDF_CONTEXTBYTES', 8);

	define('SODIUM_CRYPTO_KDF_KEYBYTES', 32);

	define('SODIUM_CRYPTO_KX_KEYPAIRBYTES', 64);

	define('SODIUM_CRYPTO_KX_PUBLICKEYBYTES', 32);

	define('SODIUM_CRYPTO_KX_SECRETKEYBYTES', 32);

	define('SODIUM_CRYPTO_KX_SEEDBYTES', 32);

	define('SODIUM_CRYPTO_KX_SESSIONKEYBYTES', 32);

	define('SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13', 1);

	define('SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13', 2);

	define('SODIUM_CRYPTO_PWHASH_ALG_DEFAULT', 2);

	define('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE', 67108864);

	define('SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE', 268435456);

	define('SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE', 1073741824);

	define('SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE', 2);

	define('SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE', 3);

	define('SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE', 4);

	define('SODIUM_CRYPTO_PWHASH_SALTBYTES', 16);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE', 16777216);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE', 1073741824);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE', 524288);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE', 33554432);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES', 32);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX', '$7$');

	define('SODIUM_CRYPTO_PWHASH_STRPREFIX', '$argon2id$');

	define('SODIUM_CRYPTO_SCALARMULT_BYTES', 32);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES', 32);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES', 32);

	define('SODIUM_CRYPTO_SCALARMULT_SCALARBYTES', 32);

	define('SODIUM_CRYPTO_SECRETBOX_KEYBYTES', 32);

	define('SODIUM_CRYPTO_SECRETBOX_MACBYTES', 16);

	define('SODIUM_CRYPTO_SECRETBOX_NONCEBYTES', 24);

	define('SODIUM_CRYPTO_SHORTHASH_BYTES', 8);

	define('SODIUM_CRYPTO_SHORTHASH_KEYBYTES', 16);

	define('SODIUM_CRYPTO_SIGN_BYTES', 64);

	define('SODIUM_CRYPTO_SIGN_KEYPAIRBYTES', 96);

	define('SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES', 32);

	define('SODIUM_CRYPTO_SIGN_SECRETKEYBYTES', 64);

	define('SODIUM_CRYPTO_SIGN_SEEDBYTES', 32);

	define('SODIUM_CRYPTO_STREAM_KEYBYTES', 32);

	define('SODIUM_CRYPTO_STREAM_NONCEBYTES', 24);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_STREAM_XCHACHA20_KEYBYTES', 32);

	/**
	 * Available as of PHP 8.1.0.
	 */
	define('SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES', 24);

	define('SODIUM_LIBRARY_MAJOR_VERSION', 10);

	define('SODIUM_LIBRARY_MINOR_VERSION', 3);

	define('SODIUM_LIBRARY_VERSION', '1.0.18');

}
