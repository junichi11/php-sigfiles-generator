<?php



namespace {

	/**
	 * Encrypt a PHP script with BLENC
	 * <p>Encrypt the <code>plaintext</code> content and write it into <code>encodedfile</code></p>
	 * @param string $plaintext <p>A source code to encrypt. Does not need to contain opening/closing PHP tags</p>
	 * @param string $encodedfile <p>The filename where BLENC will save the encoded source.</p>
	 * @param string $encryption_key <p>The key that BLENC will use to encrypt plaintext content. If not given BLENC will create a valid key.</p>
	 * @return string <p>BLENC will return the redistributable key that must be saved into key_file: the path of key_file is specified at runtime with the option blenc.key_file</p>
	 * @link https://php.net/manual/en/function.blenc-encrypt.php
	 * @since PECL blenc >= 5
	 */
	function blenc_encrypt(string $plaintext, string $encodedfile, string $encryption_key = NULL): string {}

	define('BLENC_EXT_VERSION', null);

}
