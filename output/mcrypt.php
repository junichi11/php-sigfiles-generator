<?php



namespace {

	/**
	 * Encrypts/decrypts data in CBC mode
	 * <p>The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or higher. The <code>mode</code> should be either <b><code>MCRYPT_ENCRYPT</code></b> or <b><code>MCRYPT_DECRYPT</code></b>.</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @param string $iv
	 * @return string
	 * @link https://php.net/manual/en/function.mcrypt-cbc.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_cbc(int $cipher, string $key, string $data, int $mode, string $iv = NULL): string {}

	/**
	 * Encrypts/decrypts data in CFB mode
	 * <p>The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or higher. The <code>mode</code> should be either <b><code>MCRYPT_ENCRYPT</code></b> or <b><code>MCRYPT_DECRYPT</code></b>.</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @param string $iv
	 * @return string
	 * @link https://php.net/manual/en/function.mcrypt-cfb.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_cfb(int $cipher, string $key, string $data, int $mode, string $iv): string {}

	/**
	 * Creates an initialization vector (IV) from a random source
	 * <p>Creates an initialization vector (IV) from a random source.</p><p>The IV is only meant to give an alternative seed to the encryption routines. This IV does not need to be secret at all, though it can be desirable. You even can send it along with your ciphertext without losing security.</p>
	 * @param int $size <p>The size of the IV.</p>
	 * @param int $source <p>The source of the IV. The source can be <b><code>MCRYPT_RAND</code></b> (system random number generator), <b><code>MCRYPT_DEV_RANDOM</code></b> (read data from /dev/random) and <b><code>MCRYPT_DEV_URANDOM</code></b> (read data from /dev/urandom). Prior to 5.3.0, <b><code>MCRYPT_RAND</code></b> was the only one supported on Windows.</p> <p>Note that the default value of this parameter was <b><code>MCRYPT_DEV_RANDOM</code></b> prior to PHP 5.6.0.</p> <p><b>Note</b>:  Note that <b><code>MCRYPT_DEV_RANDOM</code></b> may block until more entropy is available. </p>
	 * @return string <p>Returns the initialization vector, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mcrypt-create-iv.php
	 * @see random_bytes()
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM): string {}

	/**
	 * Decrypts crypttext with given parameters
	 * <p>Decrypts the <code>data</code> and returns the unencrypted data.</p>
	 * @param string $cipher <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @param string $key <p>The key with which the data was encrypted. If the provided key size is not supported by the cipher, the function will emit a warning and return <b><code>FALSE</code></b></p>
	 * @param string $data <p>The data that will be decrypted with the given <code>cipher</code> and <code>mode</code>. If the size of the data is not n &#42; blocksize, the data will be padded with '<code>\0</code>'.</p>
	 * @param string $mode <p>One of the <b><code>MCRYPT_MODE_modename</code></b> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".</p>
	 * @param string $iv <p>Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <b><code>FALSE</code></b>.</p>
	 * @return string|false <p>Returns the decrypted data as a string or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-decrypt.php
	 * @see mcrypt_encrypt()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_decrypt(string $cipher, string $key, string $data, string $mode, string $iv = NULL): string|false {}

	/**
	 * Deprecated: Encrypts/decrypts data in ECB mode
	 * <p>The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or higher. The <code>mode</code> should be either <b><code>MCRYPT_ENCRYPT</code></b> or <b><code>MCRYPT_DECRYPT</code></b>.</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @return string
	 * @link https://php.net/manual/en/function.mcrypt-ecb.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_ecb(int $cipher, string $key, string $data, int $mode): string {}

	/**
	 * Returns the name of the opened algorithm
	 * <p>This function returns the name of the algorithm.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return string <p>Returns the name of the opened algorithm as a string.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-get-algorithms-name.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_algorithms_name($td): string {}

	/**
	 * Returns the blocksize of the opened algorithm
	 * <p>Gets the blocksize of the opened algorithm.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return int <p>Returns the block size of the specified algorithm in bytes.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-get-block-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_block_size($td): int {}

	/**
	 * Returns the size of the IV of the opened algorithm
	 * <p>This function returns the size of the IV of the algorithm specified by the encryption descriptor in bytes. An IV is used in cbc, cfb and ofb modes, and in some algorithms in stream mode.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return int <p>Returns the size of the IV, or 0 if the IV is ignored by the algorithm.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-get-iv-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_iv_size($td): int {}

	/**
	 * Returns the maximum supported keysize of the opened mode
	 * <p>Gets the maximum supported key size of the algorithm in bytes.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return int <p>Returns the maximum supported key size of the algorithm in bytes.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-get-key-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_key_size($td): int {}

	/**
	 * Returns the name of the opened mode
	 * <p>This function returns the name of the mode.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return string <p>Returns the name as a string.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-get-modes-name.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_modes_name($td): string {}

	/**
	 * Returns an array with the supported keysizes of the opened algorithm
	 * <p>Gets the supported key sizes of the opened algorithm.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return array <p>Returns an array with the key sizes supported by the algorithm specified by the encryption descriptor. If it returns an empty array then all key sizes between 1 and <code>mcrypt_enc_get_key_size()</code> are supported by the algorithm.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-get-supported-key-sizes.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_supported_key_sizes($td): array {}

	/**
	 * Checks whether the algorithm of the opened mode is a block algorithm
	 * <p>Tells whether the algorithm of the opened mode is a block algorithm.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the algorithm is a block algorithm or <b><code>FALSE</code></b> if it is a stream one.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-is-block-algorithm.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_is_block_algorithm($td): bool {}

	/**
	 * Checks whether the encryption of the opened mode works on blocks
	 * <p>Tells whether the algorithm of the opened mode works on blocks (e.g. <b><code>FALSE</code></b> for stream, and <b><code>TRUE</code></b> for cbc, cfb, ofb)..</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the mode is for use with block algorithms, otherwise it returns <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-is-block-algorithm-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_is_block_algorithm_mode($td): bool {}

	/**
	 * Checks whether the opened mode outputs blocks
	 * <p>Tells whether the opened mode outputs blocks (e.g. <b><code>TRUE</code></b> for cbc and ecb, and <b><code>FALSE</code></b> for cfb and stream).</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the mode outputs blocks of bytes, or <b><code>FALSE</code></b> if it outputs just bytes.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-is-block-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_is_block_mode($td): bool {}

	/**
	 * Runs a self test on the opened module
	 * <p>This function runs the self test on the algorithm specified by the descriptor <code>td</code>.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return int <p>Returns <code>0</code> on success and a negative <code>int</code> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-enc-self-test.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_self_test($td): int {}

	/**
	 * Encrypts plaintext with given parameters
	 * <p>Encrypts the data and returns it.</p>
	 * @param string $cipher <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @param string $key <p>The key with which the data will be encrypted. If the provided key size is not supported by the cipher, the function will emit a warning and return <b><code>FALSE</code></b></p>
	 * @param string $data <p>The data that will be encrypted with the given <code>cipher</code> and <code>mode</code>. If the size of the data is not n &#42; blocksize, the data will be padded with '<code>\0</code>'.</p> <p>The returned crypttext can be larger than the size of the data that was given by <code>data</code>.</p>
	 * @param string $mode <p>One of the <b><code>MCRYPT_MODE_modename</code></b> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".</p>
	 * @param string $iv <p>Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <b><code>FALSE</code></b>.</p>
	 * @return string|false <p>Returns the encrypted data as a string or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-encrypt.php
	 * @see mcrypt_decrypt(), mcrypt_module_open()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_encrypt(string $cipher, string $key, string $data, string $mode, string $iv = NULL): string|false {}

	/**
	 * This function encrypts data
	 * <p>This function encrypts data. The data is padded with "<code>\0</code>" to make sure the length of the data is n &#42; blocksize. This function returns the encrypted data. Note that the length of the returned string can in fact be longer than the input, due to the padding of the data.</p><p>If you want to store the encrypted data in a database make sure to store the entire string as returned by mcrypt_generic, or the string will not entirely decrypt properly. If your original string is 10 characters long and the block size is 8 (use <code>mcrypt_enc_get_block_size()</code> to determine the blocksize), you would need at least 16 characters in your database field. Note the string returned by <code>mdecrypt_generic()</code> will be 16 characters as well...use rtrim($str, "\0") to remove the padding.</p><p>If you are for example storing the data in a MySQL database remember that varchar fields automatically have trailing spaces removed during insertion. As encrypted data can end in a space (ASCII 32), the data will be damaged by this removal. Store data in a tinyblob/tinytext (or larger) field instead.</p>
	 * @param resource $td <p>The encryption descriptor.</p> <p>The encryption handle should always be initialized with <code>mcrypt_generic_init()</code> with a key and an IV before calling this function. Where the encryption is done, you should free the encryption buffers by calling <code>mcrypt_generic_deinit()</code>. See <code>mcrypt_module_open()</code> for an example.</p>
	 * @param string $data <p>The data to encrypt.</p>
	 * @return string <p>Returns the encrypted data.</p>
	 * @link https://php.net/manual/en/function.mcrypt-generic.php
	 * @see mdecrypt_generic(), mcrypt_generic_init(), mcrypt_generic_deinit()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_generic($td, string $data): string {}

	/**
	 * This function deinitializes an encryption module
	 * <p>This function terminates encryption specified by the encryption descriptor (<code>td</code>). It clears all buffers, but does not close the module. You need to call <code>mcrypt_module_close()</code> yourself. (But PHP does this for you at the end of the script.)</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-generic-deinit.php
	 * @see mcrypt_module_open(), mcrypt_generic_init()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_generic_deinit($td): bool {}

	/**
	 * This function terminates encryption
	 * <p></p><p><code>mcrypt_generic_deinit()</code> should be used instead of this function, as it can cause crashes when used with <code>mcrypt_module_close()</code> due to multiple buffer frees.</p><p>This function terminates encryption specified by the encryption descriptor (<code>td</code>). Actually it clears all buffers, and closes all the modules used. Returns <b><code>FALSE</code></b> on error, or <b><code>TRUE</code></b> on success.</p>
	 * @param resource $td
	 * @return bool
	 * @link https://php.net/manual/en/function.mcrypt-generic-end.php
	 * @since PHP 4 >= 4.0.2, PHP 5
	 */
	function mcrypt_generic_end($td): bool {}

	/**
	 * This function initializes all buffers needed for encryption
	 * <p>You need to call this function before every call to <code>mcrypt_generic()</code> or <code>mdecrypt_generic()</code>.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @param string $key <p>The maximum length of the key should be the one obtained by calling <code>mcrypt_enc_get_key_size()</code> and every value smaller than this is legal.</p>
	 * @param string $iv <p>The IV should normally have the size of the algorithms block size, but you must obtain the size by calling <code>mcrypt_enc_get_iv_size()</code>. IV is ignored in ECB. IV MUST exist in CFB, CBC, STREAM, nOFB and OFB modes. It needs to be random and unique (but not secret). The same IV must be used for encryption/decryption. If you do not want to use it you should set it to zeros, but this is not recommended.</p>
	 * @return int <p>The function returns a negative value on error: -3 when the key length was incorrect, -4 when there was a memory allocation problem and any other return value is an unknown error. If an error occurs a warning will be displayed accordingly. <b><code>FALSE</code></b> is returned if incorrect parameters were passed.</p>
	 * @link https://php.net/manual/en/function.mcrypt-generic-init.php
	 * @see mcrypt_module_open()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_generic_init($td, string $key, string $iv): int {}

	/**
	 * Gets the block size of the specified cipher
	 * <p>The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or 2.5.x.</p><p><b>mcrypt_get_block_size()</b> is used to get the size of a block of the specified <code>cipher</code> (in combination with an encryption mode).</p><p>It is more useful to use the <code>mcrypt_enc_get_block_size()</code> function as this uses the resource returned by <code>mcrypt_module_open()</code>.</p>
	 * @param int $cipher <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @return int|false <p>Returns the algorithm block size in bytes or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-get-block-size.php
	 * @see mcrypt_get_key_size(), mcrypt_enc_get_block_size(), mcrypt_encrypt()
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_block_size(int $cipher): int|false {}

	/**
	 * Gets the name of the specified cipher
	 * <p><b>mcrypt_get_cipher_name()</b> is used to get the name of the specified cipher.</p><p><b>mcrypt_get_cipher_name()</b> takes the cipher number as an argument (libmcrypt 2.2.x) or takes the cipher name as an argument (libmcrypt 2.4.x or higher) and returns the name of the cipher or <b><code>FALSE</code></b>, if the cipher does not exist.</p>
	 * @param int $cipher <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @return string <p>This function returns the name of the cipher or <b><code>FALSE</code></b> if the cipher does not exist.</p>
	 * @link https://php.net/manual/en/function.mcrypt-get-cipher-name.php
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_cipher_name(int $cipher): string {}

	/**
	 * Returns the size of the IV belonging to a specific cipher/mode combination
	 * <p>Gets the size of the IV belonging to a specific <code>cipher</code>/<code>mode</code> combination.</p><p>It is more useful to use the <code>mcrypt_enc_get_iv_size()</code> function as this uses the resource returned by <code>mcrypt_module_open()</code>.</p>
	 * @param string $cipher <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @param string $mode <p>One of the <b><code>MCRYPT_MODE_modename</code></b> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".</p> <p>The IV is ignored in ECB mode as this mode does not require it. You will need to have the same IV (think: starting point) both at encryption and decryption stages, otherwise your encryption will fail.</p>
	 * @return int <p>Returns the size of the Initialization Vector (IV) in bytes. On error the function returns <b><code>FALSE</code></b>. If the IV is ignored in the specified cipher/mode combination zero is returned.</p>
	 * @link https://php.net/manual/en/function.mcrypt-get-iv-size.php
	 * @see mcrypt_get_block_size(), mcrypt_enc_get_iv_size(), mcrypt_create_iv()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_iv_size(string $cipher, string $mode): int {}

	/**
	 * Gets the key size of the specified cipher
	 * <p>The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or 2.5.x.</p><p><b>mcrypt_get_key_size()</b> is used to get the size of a key of the specified <code>cipher</code> (in combination with an encryption mode).</p><p>It is more useful to use the <code>mcrypt_enc_get_key_size()</code> function as this uses the resource returned by <code>mcrypt_module_open()</code>.</p>
	 * @param int $cipher <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @return int|false <p>Returns the maximum supported key size of the algorithm in bytes or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-get-key-size.php
	 * @see mcrypt_get_block_size(), mcrypt_enc_get_key_size(), mcrypt_encrypt()
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_key_size(int $cipher): int|false {}

	/**
	 * Gets an array of all supported ciphers
	 * <p>Gets the list of all supported algorithms in the <code>lib_dir</code> parameter.</p>
	 * @param string $lib_dir <p>Specifies the directory where all algorithms are located. If not specified, the value of the <code>mcrypt.algorithms_dir</code> php.ini directive is used.</p>
	 * @return array <p>Returns an array with all the supported algorithms.</p>
	 * @link https://php.net/manual/en/function.mcrypt-list-algorithms.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_list_algorithms(string $lib_dir = 'ini_get("mcrypt.algorithms_dir")'): array {}

	/**
	 * Gets an array of all supported modes
	 * <p>Gets the list of all supported modes in the <code>lib_dir</code> parameter.</p>
	 * @param string $lib_dir <p>Specifies the directory where all modes are located. If not specified, the value of the <code>mcrypt.modes_dir</code> php.ini directive is used.</p>
	 * @return array <p>Returns an array with all the supported modes.</p>
	 * @link https://php.net/manual/en/function.mcrypt-list-modes.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_list_modes(string $lib_dir = 'ini_get("mcrypt.modes_dir")'): array {}

	/**
	 * Closes the mcrypt module
	 * <p>Closes the specified encryption handle.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-close.php
	 * @see mcrypt_module_open()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_close($td): bool {}

	/**
	 * Returns the blocksize of the specified algorithm
	 * <p>Gets the blocksize of the specified algorithm.</p>
	 * @param string $algorithm <p>The algorithm name.</p>
	 * @param string $lib_dir <p>This optional parameter can contain the location where the mode module is on the system.</p>
	 * @return int <p>Returns the block size of the algorithm specified in bytes.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-get-algo-block-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir = NULL): int {}

	/**
	 * Returns the maximum supported keysize of the opened mode
	 * <p>Gets the maximum supported keysize of the opened mode.</p>
	 * @param string $algorithm <p>The algorithm name.</p>
	 * @param string $lib_dir <p>This optional parameter can contain the location where the mode module is on the system.</p>
	 * @return int <p>This function returns the maximum supported key size of the algorithm specified in bytes.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-get-algo-key-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir = NULL): int {}

	/**
	 * Returns an array with the supported keysizes of the opened algorithm
	 * <p>Returns an array with the key sizes supported by the specified algorithm. If it returns an empty array then all key sizes between 1 and <code>mcrypt_module_get_algo_key_size()</code> are supported by the algorithm.</p>
	 * @param string $algorithm <p>The algorithm to be used.</p>
	 * @param string $lib_dir <p>The optional <code>lib_dir</code> parameter can contain the location where the algorithm module is on the system.</p>
	 * @return array <p>Returns an array with the key sizes supported by the specified algorithm. If it returns an empty array then all key sizes between 1 and <code>mcrypt_module_get_algo_key_size()</code> are supported by the algorithm.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-get-supported-key-sizes.php
	 * @see mcrypt_enc_get_supported_key_sizes()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir = NULL): array {}

	/**
	 * This function checks whether the specified algorithm is a block algorithm
	 * <p>This function returns <b><code>TRUE</code></b> if the specified algorithm is a block algorithm, or <b><code>FALSE</code></b> if it is a stream one.</p>
	 * @param string $algorithm <p>The algorithm to check.</p>
	 * @param string $lib_dir <p>The optional <code>lib_dir</code> parameter can contain the location where the algorithm module is on the system.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if the specified algorithm is a block algorithm, or <b><code>FALSE</code></b> if it is a stream one.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-is-block-algorithm.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir = NULL): bool {}

	/**
	 * Returns if the specified module is a block algorithm or not
	 * <p>This function returns <b><code>TRUE</code></b> if the mode is for use with block algorithms, otherwise it returns <b><code>FALSE</code></b>. (e.g. <b><code>FALSE</code></b> for stream, and <b><code>TRUE</code></b> for cbc, cfb, ofb).</p>
	 * @param string $mode <p>The mode to check.</p>
	 * @param string $lib_dir <p>The optional <code>lib_dir</code> parameter can contain the location where the algorithm module is on the system.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if the mode is for use with block algorithms, otherwise it returns <b><code>FALSE</code></b>. (e.g. <b><code>FALSE</code></b> for stream, and <b><code>TRUE</code></b> for cbc, cfb, ofb).</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-is-block-algorithm-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir = NULL): bool {}

	/**
	 * Returns if the specified mode outputs blocks or not
	 * <p>This function returns <b><code>TRUE</code></b> if the mode outputs blocks of bytes or <b><code>FALSE</code></b> if it outputs just bytes. (e.g. <b><code>TRUE</code></b> for cbc and ecb, and <b><code>FALSE</code></b> for cfb and stream).</p>
	 * @param string $mode <p>One of the <b><code>MCRYPT_MODE_modename</code></b> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".</p>
	 * @param string $lib_dir <p>The optional <code>lib_dir</code> parameter can contain the location where the algorithm module is on the system.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if the mode outputs blocks of bytes or <b><code>FALSE</code></b> if it outputs just bytes. (e.g. <b><code>TRUE</code></b> for cbc and ecb, and <b><code>FALSE</code></b> for cfb and stream).</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-is-block-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_is_block_mode(string $mode, string $lib_dir = NULL): bool {}

	/**
	 * Opens the module of the algorithm and the mode to be used
	 * <p>This function opens the module of the algorithm and the mode to be used. The name of the algorithm is specified in algorithm, e.g. <code>"twofish"</code> or is one of the <b><code>MCRYPT_ciphername</code></b> constants. The module is closed by calling <code>mcrypt_module_close()</code>.</p>
	 * @param string $algorithm <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @param string $algorithm_directory <p>The <code>algorithm_directory</code> parameter is used to locate the encryption module. When you supply a directory name, it is used. When you set it to an empty string (<code>""</code>), the value set by the <code>mcrypt.algorithms_dir</code> php.ini directive is used. When it is not set, the default directory that is used is the one that was compiled into libmcrypt (usually /usr/local/lib/libmcrypt).</p>
	 * @param string $mode <p>One of the <b><code>MCRYPT_MODE_modename</code></b> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".</p>
	 * @param string $mode_directory <p>The <code>mode_directory</code> parameter is used to locate the encryption module. When you supply a directory name, it is used. When you set it to an empty string (<code>""</code>), the value set by the <code>mcrypt.modes_dir</code> php.ini directive is used. When it is not set, the default directory that is used is the one that was compiled-in into libmcrypt (usually /usr/local/lib/libmcrypt).</p>
	 * @return resource <p>Normally it returns an encryption descriptor, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-open.php
	 * @see mcrypt_module_close(), mcrypt_generic(), mdecrypt_generic(), mcrypt_generic_init(), mcrypt_generic_deinit()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory) {}

	/**
	 * This function runs a self test on the specified module
	 * <p>This function runs the self test on the algorithm specified.</p>
	 * @param string $algorithm <p>One of the <b><code>MCRYPT_ciphername</code></b> constants, or the name of the algorithm as string.</p>
	 * @param string $lib_dir <p>The optional <code>lib_dir</code> parameter can contain the location where the algorithm module is on the system.</p>
	 * @return bool <p>The function returns <b><code>TRUE</code></b> if the self test succeeds, or <b><code>FALSE</code></b> when it fails.</p>
	 * @link https://php.net/manual/en/function.mcrypt-module-self-test.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_self_test(string $algorithm, string $lib_dir = NULL): bool {}

	/**
	 * Encrypts/decrypts data in OFB mode
	 * <p>The first prototype is when linked against libmcrypt 2.2.x, the second when linked against libmcrypt 2.4.x or higher. The <code>mode</code> should be either <b><code>MCRYPT_ENCRYPT</code></b> or <b><code>MCRYPT_DECRYPT</code></b>.</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @param string $iv
	 * @return string
	 * @link https://php.net/manual/en/function.mcrypt-ofb.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_ofb(int $cipher, string $key, string $data, int $mode, string $iv): string {}

	/**
	 * Decrypts data
	 * <p>This function decrypts data. Note that the length of the returned string can in fact be longer than the unencrypted string, due to the padding of the data.</p>
	 * @param resource $td <p>An encryption descriptor returned by <code>mcrypt_module_open()</code></p>
	 * @param string $data <p>Encrypted data.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.mdecrypt-generic.php
	 * @see mcrypt_generic(), mcrypt_generic_init(), mcrypt_generic_deinit()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mdecrypt_generic($td, string $data): string {}

	define('MCRYPT_DECRYPT', null);

	define('MCRYPT_DEV_RANDOM', null);

	define('MCRYPT_DEV_URANDOM', null);

	define('MCRYPT_ENCRYPT', null);

	define('MCRYPT_RAND', null);

}
