<?php



namespace {

	/**
	 * Get available password hashing algorithm IDs
	 * <p>Returns a complete list of all registered password hashing algorithm IDs as an <code>array</code> of <code>string</code>s.</p>
	 * @return array <p>Returns the available password hashing algorithm IDs.</p>
	 * @link https://php.net/manual/en/function.password-algos.php
	 * @since PHP 7 >= 7.4.0
	 */
	function password_algos(): array {}

	/**
	 * Returns information about the given hash
	 * <p>When passed in a valid hash created by an algorithm supported by <code>password_hash()</code>, this function will return an array of information about that hash.</p>
	 * @param string $hash <p>A hash created by <code>password_hash()</code>.</p>
	 * @return array <p>Returns an associative array with three elements:</p><ul> <li>  <code>algo</code>, which will match a password algorithm constant  </li> <li>  <code>algoName</code>, which has the human readable name of the algorithm  </li> <li>  <code>options</code>, which includes the options provided when calling <code>password_hash()</code>  </li> </ul>
	 * @link https://php.net/manual/en/function.password-get-info.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_get_info(string $hash): array {}

	/**
	 * Creates a password hash
	 * <p><b>password_hash()</b> creates a new password hash using a strong one-way hashing algorithm. <b>password_hash()</b> is compatible with <code>crypt()</code>. Therefore, password hashes created by <code>crypt()</code> can be used with <b>password_hash()</b>.</p><p>The following algorithms are currently supported:</p><p></p><p>Supported options for <b><code>PASSWORD_BCRYPT</code></b>:</p><p></p><p><code>salt</code> (<code>string</code>) - to manually provide a salt to use when hashing the password. Note that this will override and prevent a salt from being automatically generated.</p><p>If omitted, a random salt will be generated by <b>password_hash()</b> for each password hashed. This is the intended mode of operation.</p><p>The salt option has been deprecated as of PHP 7.0.0. It is now preferred to simply use the salt that is generated by default.</p><p><code>cost</code> (<code>int</code>) - which denotes the algorithmic cost that should be used. Examples of these values can be found on the <code>crypt()</code> page.</p><p>If omitted, a default value of <code>10</code> will be used. This is a good baseline cost, but you may want to consider increasing it depending on your hardware.</p><p>Supported options for <b><code>PASSWORD_ARGON2I</code></b> and <b><code>PASSWORD_ARGON2ID</code></b>:</p><p></p><p><code>memory_cost</code> (<code>int</code>) - Maximum memory (in kibibytes) that may be used to compute the Argon2 hash. Defaults to <b><code>PASSWORD_ARGON2_DEFAULT_MEMORY_COST</code></b>.</p><p><code>time_cost</code> (<code>int</code>) - Maximum amount of time it may take to compute the Argon2 hash. Defaults to <b><code>PASSWORD_ARGON2_DEFAULT_TIME_COST</code></b>.</p><p><code>threads</code> (<code>int</code>) - Number of threads to use for computing the Argon2 hash. Defaults to <b><code>PASSWORD_ARGON2_DEFAULT_THREADS</code></b>.</p>
	 * @param string $password <p>The user's password.</p> <b>Caution</b> <p>Using the <b><code>PASSWORD_BCRYPT</code></b> as the algorithm, will result in the <code>password</code> parameter being truncated to a maximum length of 72 characters.</p>
	 * @param mixed $algo <p>A password algorithm constant denoting the algorithm to use when hashing the password.</p>
	 * @param array $options <p>An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.</p> <p>If omitted, a random salt will be created and the default cost will be used.</p>
	 * @return string|false <p>Returns the hashed password, or <b><code>FALSE</code></b> on failure.</p><p>The used algorithm, cost and salt are returned as part of the hash. Therefore, all information that's needed to verify the hash is included in it. This allows the <code>password_verify()</code> function to verify the hash without needing separate storage for the salt or algorithm information.</p>
	 * @link https://php.net/manual/en/function.password-hash.php
	 * @see password_verify(), crypt(), sodium_crypto_pwhash_str()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_hash(string $password, $algo, array $options = NULL) {}

	/**
	 * Checks if the given hash matches the given options
	 * <p>This function checks to see if the supplied hash implements the algorithm and options provided. If not, it is assumed that the hash needs to be rehashed.</p>
	 * @param string $hash <p>A hash created by <code>password_hash()</code>.</p>
	 * @param mixed $algo <p>A password algorithm constant denoting the algorithm to use when hashing the password.</p>
	 * @param array $options <p>An associative array containing options. See the password algorithm constants for documentation on the supported options for each algorithm.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the hash should be rehashed to match the given <code>algo</code> and <code>options</code>, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.password-needs-rehash.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_needs_rehash(string $hash, $algo, array $options = NULL): bool {}

	/**
	 * Verifies that a password matches a hash
	 * <p>Verifies that the given hash matches the given password.</p><p>Note that <code>password_hash()</code> returns the algorithm, cost and salt as part of the returned hash. Therefore, all information that's needed to verify the hash is included in it. This allows the verify function to verify the hash without needing separate storage for the salt or algorithm information.</p><p>This function is safe against timing attacks.</p>
	 * @param string $password <p>The user's password.</p>
	 * @param string $hash <p>A hash created by <code>password_hash()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the password and hash match, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.password-verify.php
	 * @see password_hash(), sodium_crypto_pwhash_str_verify()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function password_verify(string $password, string $hash): bool {}

	/**
	 * <p>Default amount of memory in bytes that Argon2lib will use while trying to compute a hash.</p> <p>Available as of PHP 7.2.0.</p>
	 */
	define('PASSWORD_ARGON2_DEFAULT_MEMORY_COST', 65536);

	/**
	 * <p>Default number of threads that Argon2lib will use.</p> <p>Available as of PHP 7.2.0.</p>
	 */
	define('PASSWORD_ARGON2_DEFAULT_THREADS', 1);

	/**
	 * <p>Default amount of time that Argon2lib will spend trying to compute a hash.</p> <p>Available as of PHP 7.2.0.</p>
	 */
	define('PASSWORD_ARGON2_DEFAULT_TIME_COST', 4);

	/**
	 * <p><b><code>PASSWORD_ARGON2I</code></b> is used to create new password hashes using the Argon2i algorithm.</p> <p>Supported Options:</p> <ul> <li> <p><code>memory_cost</code> (<code>int</code>) - Maximum memory (in bytes) that may be used to compute the Argon2 hash. Defaults to <b><code>PASSWORD_ARGON2_DEFAULT_MEMORY_COST</code></b>.</p> </li> <li> <p><code>time_cost</code> (<code>int</code>) - Maximum amount of time it may take to compute the Argon2 hash. Defaults to <b><code>PASSWORD_ARGON2_DEFAULT_TIME_COST</code></b>.</p> </li> <li> <p><code>threads</code> (<code>int</code>) - Number of threads to use for computing the Argon2 hash. Defaults to <b><code>PASSWORD_ARGON2_DEFAULT_THREADS</code></b>.</p> </li> </ul> <p>Available as of PHP 7.2.0.</p>
	 */
	define('PASSWORD_ARGON2I', 'argon2i');

	/**
	 * <p><b><code>PASSWORD_ARGON2ID</code></b> is used to create new password hashes using the Argon2id algorithm. It supports the same options as <b><code>PASSWORD_ARGON2I</code></b>.</p> <p>Available as of PHP 7.3.0.</p>
	 */
	define('PASSWORD_ARGON2ID', 'argon2id');

	/**
	 * <p><b><code>PASSWORD_BCRYPT</code></b> is used to create new password hashes using the <b><code>CRYPT_BLOWFISH</code></b> algorithm.</p> <p>This will always result in a hash using the "$2y$" crypt format, which is always 60 characters wide.</p> <p>Supported Options:</p> <ul> <li> <p><code>salt</code> (<code>string</code>) - to manually provide a salt to use when hashing the password. Note that this will override and prevent a salt from being automatically generated.</p> <p>If omitted, a random salt will be generated by <code>password_hash()</code> for each password hashed. This is the intended mode of operation and as of PHP 7.0.0 the salt option has been deprecated.</p> </li> <li> <p><code>cost</code> (<code>int</code>) - which denotes the algorithmic cost that should be used. Examples of these values can be found on the <code>crypt()</code> page.</p> <p>If omitted, a default value of <code>10</code> will be used. This is a good baseline cost, but you may want to consider increasing it depending on your hardware.</p> </li> </ul>
	 */
	define('PASSWORD_BCRYPT', '2y');

	/**
	 * <p>The default algorithm to use for hashing if no algorithm is provided. This may change in newer PHP releases when newer, stronger hashing algorithms are supported.</p> <p>It is worth noting that over time this constant can (and likely will) change. Therefore you should be aware that the length of the resulting hash can change. Therefore, if you use <b><code>PASSWORD_DEFAULT</code></b> you should store the resulting hash in a way that can store more than 60 characters (255 is the recommended width).</p> <p>Values for this constant:</p> <ul> <li>  PHP 5.5.0 - <b><code>PASSWORD_BCRYPT</code></b>  </li> </ul>
	 */
	define('PASSWORD_DEFAULT', '2y');

}
