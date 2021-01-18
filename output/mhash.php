<?php



namespace {

	/**
	 * Computes hash
	 * <p><b>mhash()</b> applies a hash function specified by <code>algo</code> to the <code>data</code>.</p>
	 * @param int $algo <p>The hash ID. One of the <b><code>MHASH_hashname</code></b> constants.</p>
	 * @param string $data <p>The user input, as a string.</p>
	 * @param string|null $key <p>If specified, the function will return the resulting HMAC instead. HMAC is keyed hashing for message authentication, or simply a message digest that depends on the specified key. Not all algorithms supported in mhash can be used in HMAC mode.</p>
	 * @return string|false <p>Returns the resulting hash (also called digest) or HMAC as a string, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mhash.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash(int $algo, string $data, string|null $key = null): string|false {}

	/**
	 * Gets the highest available hash ID
	 * <p>Gets the highest available hash ID.</p>
	 * @return int <p>Returns the highest available hash ID. Hashes are numbered from 0 to this hash ID.</p>
	 * @link https://php.net/manual/en/function.mhash-count.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash_count(): int {}

	/**
	 * Gets the block size of the specified hash
	 * <p>Gets the size of a block of the specified <code>algo</code>.</p>
	 * @param int $algo <p>The hash ID. One of the <b><code>MHASH_hashname</code></b> constants.</p>
	 * @return int|false <p>Returns the size in bytes or <b><code>false</code></b>, if the <code>algo</code> does not exist.</p>
	 * @link https://php.net/manual/en/function.mhash-get-block-size.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash_get_block_size(int $algo): int|false {}

	/**
	 * Gets the name of the specified hash
	 * <p>Gets the name of the specified <code>algo</code>.</p>
	 * @param int $algo <p>The hash ID. One of the <b><code>MHASH_hashname</code></b> constants.</p>
	 * @return string|false <p>Returns the name of the hash or <b><code>false</code></b>, if the hash does not exist.</p>
	 * @link https://php.net/manual/en/function.mhash-get-hash-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash_get_hash_name(int $algo): string|false {}

	/**
	 * Generates a key
	 * <p>Generates a key according to the given <code>algo</code>, using an user provided <code>password</code>.</p><p>This is the Salted S2K algorithm as specified in the OpenPGP document (RFC 2440).</p><p>Keep in mind that user supplied passwords are not really suitable to be used as keys in cryptographic algorithms, since users normally choose keys they can write on keyboard. These passwords use only 6 to 7 bits per character (or less). It is highly recommended to use some kind of transformation (like this function) to the user supplied key.</p>
	 * @param int $algo <p>The hash ID used to create the key. One of the <b><code>MHASH_hashname</code></b> constants.</p>
	 * @param string $password <p>An user supplied password.</p>
	 * @param string $salt <p>Must be different and random enough for every key you generate in order to create different keys. Because <code>salt</code> must be known when you check the keys, it is a good idea to append the key to it. Salt has a fixed length of 8 bytes and will be padded with zeros if you supply less bytes.</p>
	 * @param int $length <p>The key length, in bytes.</p>
	 * @return string|false <p>Returns the generated key as a string, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mhash-keygen-s2k.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function mhash_keygen_s2k(int $algo, string $password, string $salt, int $length): string|false {}

}
