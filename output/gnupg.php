<?php



namespace {

	/**
	 * Add a key for decryption
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $fingerprint <p>The fingerprint key.</p>
	 * @param string $passphrase <p>The pass phrase.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-adddecryptkey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_adddecryptkey($identifier, string $fingerprint, string $passphrase): bool {}

	/**
	 * Add a key for encryption
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $fingerprint <p>The fingerprint key.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-addencryptkey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_addencryptkey($identifier, string $fingerprint): bool {}

	/**
	 * Add a key for signing
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $fingerprint <p>The fingerprint key.</p>
	 * @param string $passphrase <p>The pass phrase.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-addsignkey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_addsignkey($identifier, string $fingerprint, string $passphrase = null): bool {}

	/**
	 * Removes all keys which were set for decryption before
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-cleardecryptkeys.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_cleardecryptkeys($identifier): bool {}

	/**
	 * Removes all keys which were set for encryption before
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-clearencryptkeys.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_clearencryptkeys($identifier): bool {}

	/**
	 * Removes all keys which were set for signing before
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-clearsignkeys.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_clearsignkeys($identifier): bool {}

	/**
	 * Decrypts a given text
	 * <p>Decrypts the given text with the keys, which were set with gnupg_adddecryptkey before.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $text <p>The text being decrypted.</p>
	 * @return string <p>On success, this function returns the decrypted text. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-decrypt.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_decrypt($identifier, string $text): string {}

	/**
	 * Decrypts and verifies a given text
	 * <p>Decrypts and verifies a given text and returns information about the signature.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $text <p>The text being decrypted.</p>
	 * @param string $plaintext <p>The parameter <code>plaintext</code> gets filled with the decrypted text.</p>
	 * @return array <p>On success, this function returns information about the signature and fills the <code>plaintext</code> parameter with the decrypted text. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-decryptverify.php
	 * @since PECL gnupg >= 0.2
	 */
	function gnupg_decryptverify($identifier, string $text, string &$plaintext): array {}

	/**
	 * Delete a key from the keyring
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $key <p>The key to delete.</p>
	 * @param bool $allow_secret <p>It specifies whether to delete secret keys as well.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-deletekey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_deletekey($identifier, string $key, bool $allow_secret): bool {}

	/**
	 * Encrypts a given text
	 * <p>Encrypts the given <code>plaintext</code> with the keys, which were set with gnupg_addencryptkey before and returns the encrypted text.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $plaintext <p>The text being encrypted.</p>
	 * @return string <p>On success, this function returns the encrypted text. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-encrypt.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_encrypt($identifier, string $plaintext): string {}

	/**
	 * Encrypts and signs a given text
	 * <p>Encrypts and signs the given <code>plaintext</code> with the keys, which were set with gnupg_addsignkey and gnupg_addencryptkey before and returns the encrypted and signed text.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $plaintext <p>The text being encrypted.</p>
	 * @return string <p>On success, this function returns the encrypted and signed text. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-encryptsign.php
	 * @since PECL gnupg >= 0.2
	 */
	function gnupg_encryptsign($identifier, string $plaintext): string {}

	/**
	 * Exports a key
	 * <p>Exports the key <code>fingerprint</code>.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $fingerprint <p>The fingerprint key.</p>
	 * @return string <p>On success, this function returns the keydata. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-export.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_export($identifier, string $fingerprint): string {}

	/**
	 * Returns the engine info
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return array <p>Returns an array with engine info consting of <code>protocol</code>, <code>file_name</code> and <code>home_dir</code>.</p>
	 * @link https://php.net/manual/en/function.gnupg-getengineinfo.php
	 * @since PECL gnupg >= 1.5
	 */
	function gnupg_getengineinfo($identifier): array {}

	/**
	 * Returns the errortext, if a function fails
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return string <p>Returns an errortext, if an error has occurred, otherwise <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-geterror.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_geterror($identifier): string {}

	/**
	 * Returns the error info
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return array <p>Returns an array with error info.</p>
	 * @link https://php.net/manual/en/function.gnupg-geterrorinfo.php
	 * @since PECL gnupg >= 1.5
	 */
	function gnupg_geterrorinfo($identifier): array {}

	/**
	 * Returns the currently active protocol for all operations
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @return int <p>Returns the currently active protocol, which can be one of <b><code>GNUPG_PROTOCOL_OpenPGP</code></b> or <b><code>GNUPG_PROTOCOL_CMS</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-getprotocol.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_getprotocol($identifier): int {}

	/**
	 * Search the trust items
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $pattern <p>Expression to limit the list of trust items to only the ones matching the pattern.</p>
	 * @return array <p>On success, this function returns an array of trust items. On failure, this function returns <b><code>null</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-gettrustlist.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_gettrustlist($identifier, string $pattern): array {}

	/**
	 * Imports a key
	 * <p>Imports the key <code>keydata</code> and returns an array with information about the importprocess.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $keydata <p>The data key that is being imported.</p>
	 * @return array <p>On success, this function returns and info-array about the importprocess. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-import.php
	 * @since PECL gnupg >= 0.3
	 */
	function gnupg_import($identifier, string $keydata): array {}

	/**
	 * Initialize a connection
	 * @param ?array $options <p>Must be an associative array. It is used to change the default configuration of the crypto engine.</p> <b>Configuration overrides</b>   key type description     file_name <code>string</code>  It is the file name of the executable program implementing this protocol which is usually path of the <code>gpg</code> executable.    home_dir <code>string</code>  It is the directory name of the configuration directory. It also overrides <code>GNUPGHOME</code> environment variable that is used for the same purpose.
	 * @return resource <p>A GnuPG <code>resource</code> connection used by other GnuPG functions.</p>
	 * @link https://php.net/manual/en/function.gnupg-init.php
	 * @since PECL gnupg >= 0.4
	 */
	function gnupg_init(?array $options = null) {}

	/**
	 * Returns an array with information about all keys that matches the given pattern
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $pattern <p>The pattern being checked against the keys.</p>
	 * @return array <p>Returns an array with information about all keys that matches the given pattern or <b><code>false</code></b>, if an error has occurred.</p>
	 * @link https://php.net/manual/en/function.gnupg-keyinfo.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_keyinfo($identifier, string $pattern): array {}

	/**
	 * List key signatures
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $keyid <p>The key ID to list signatures for.</p>
	 * @return array <p>On success, this function returns an array of key signatures. On failure, this function returns <b><code>null</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-listsignatures.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_listsignatures($identifier, string $keyid): array {}

	/**
	 * Toggle armored output
	 * <p>Toggle the armored output.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param int $armor <p>Pass a non-zero integer-value to this function to enable armored-output (default). Pass 0 to disable armored output.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-setarmor.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_setarmor($identifier, int $armor): bool {}

	/**
	 * Sets the mode for error_reporting
	 * <p>Sets the mode for error_reporting.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param int $errormode <p>The error mode.</p> <p><code>errormode</code> takes a constant indicating what type of error_reporting should be used. The possible values are <b><code>GNUPG_ERROR_WARNING</code></b>, <b><code>GNUPG_ERROR_EXCEPTION</code></b> and <b><code>GNUPG_ERROR_SILENT</code></b>. By default <b><code>GNUPG_ERROR_SILENT</code></b> is used.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.gnupg-seterrormode.php
	 * @since PECL gnupg >= 0.6
	 */
	function gnupg_seterrormode($identifier, int $errormode): void {}

	/**
	 * Sets the mode for signing
	 * <p>Sets the mode for signing.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param int $signmode
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gnupg-setsignmode.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_setsignmode($identifier, int $signmode): bool {}

	/**
	 * Signs a given text
	 * <p>Signs the given <code>plaintext</code> with the keys, which were set with gnupg_addsignkey before and returns the signed text or the signature, depending on what was set with gnupg_setsignmode.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $plaintext <p>The plain text being signed.</p>
	 * @return string <p>On success, this function returns the signed text or the signature. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-sign.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_sign($identifier, string $plaintext): string {}

	/**
	 * Verifies a signed text
	 * <p>Verifies the given <code>signed_text</code> and returns information about the signature.</p>
	 * @param resource $identifier <p>The gnupg identifier, from a call to <code>gnupg_init()</code> or <b>gnupg</b>.</p>
	 * @param string $signed_text <p>The signed text.</p>
	 * @param string $signature <p>The signature. To verify a clearsigned text, set signature to <b><code>false</code></b>.</p>
	 * @param string $plaintext <p>The plain text. If this optional parameter is passed, it is filled with the plain text.</p>
	 * @return array <p>On success, this function returns information about the signature. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gnupg-verify.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_verify($identifier, string $signed_text, string $signature, string &$plaintext = null): array {}

	define('GNUPG_ERROR_EXCEPTION', null);

	define('GNUPG_ERROR_SILENT', null);

	define('GNUPG_ERROR_WARNING', null);

	define('GNUPG_PROTOCOL_CMS', null);

	define('GNUPG_PROTOCOL_OpenPGP', null);

	define('GNUPG_SIG_MODE_CLEAR', null);

	define('GNUPG_SIG_MODE_DETACH', null);

	define('GNUPG_SIG_MODE_NORMAL', null);

	define('GNUPG_SIGSUM_BAD_POLICY', null);

	define('GNUPG_SIGSUM_CRL_MISSING', null);

	define('GNUPG_SIGSUM_CRL_TOO_OLD', null);

	define('GNUPG_SIGSUM_GREEN', null);

	define('GNUPG_SIGSUM_KEY_EXPIRED', null);

	define('GNUPG_SIGSUM_KEY_MISSING', null);

	define('GNUPG_SIGSUM_KEY_REVOKED', null);

	define('GNUPG_SIGSUM_RED', null);

	define('GNUPG_SIGSUM_SIG_EXPIRED', null);

	define('GNUPG_SIGSUM_SYS_ERROR', null);

	define('GNUPG_SIGSUM_VALID', null);

	define('GNUPG_VALIDITY_FULL', null);

	define('GNUPG_VALIDITY_MARGINAL', null);

	define('GNUPG_VALIDITY_NEVER', null);

	define('GNUPG_VALIDITY_ULTIMATE', null);

	define('GNUPG_VALIDITY_UNDEFINED', null);

	define('GNUPG_VALIDITY_UNKNOWN', null);

}
