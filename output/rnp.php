<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.rnpffi.php
	 * @since PECL rnp >= 0.1.1
	 */
	class RnpFFI {
	}

	/**
	 * Return cryptographic backend library name
	 * @return string <p>Backend name string. Currently supported backends are "Botan" and "OpenSSL".</p>
	 * @link https://php.net/manual/en/function.rnp-backend-string.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_backend_string(): string {}

	/**
	 * Return cryptographic backend library version
	 * @return string <p>Version string.</p>
	 * @link https://php.net/manual/en/function.rnp-backend-version.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_backend_version(): string {}

	/**
	 * Decrypt PGP message
	 * <p>Private keys used for decryption should be loaded into the FFI object before calling this function. If password encryption was used, then password provider should be set by calling <code>rnp_ffi_set_pass_provider()</code>.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $input <p>Encrypted message.</p>
	 * @return string|false <p>Decrypted message on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-decrypt.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_decrypt(\RnpFFI $ffi, string $input): string|false {}

	/**
	 * Dump OpenPGP packets stream information in humand-readable format
	 * @param string $input <p>Input string containing OpenPGP data, either in binary or ASCII-armored format.</p>
	 * @param int $flags <p>See <b><code>RNP_DUMP_&#42;</code></b> predefined constants.</p>
	 * @return string|false <p>Text describing packet sequence or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-dump-packets.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_dump_packets(string $input, int $flags): string|false {}

	/**
	 * Dump OpenPGP packets stream information to the JSON string
	 * @param string $input <p>Input string containing OpenPGP data, either in binary or ASCII-armored format.</p>
	 * @param int $flags <p>See <b><code>RNP_JSON_DUMP_&#42;</code></b> predefined constants.</p>
	 * @return string|false <p>JSON string with dump or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-dump-packets-to-json.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_dump_packets_to_json(string $input, int $flags): string|false {}

	/**
	 * Create the top-level object used for interacting with the library
	 * @param string $pub_format <p>the format of the public keyring, RNP_KEYSTORE_GPG or other RNP_KEYSTORE_&#42; constant.</p>
	 * @param string $sec_format <p>the format of the secret keyring, RNP_KEYSTORE_GPG or other RNP_KEYSTORE_&#42; constant</p>
	 * @return RnpFFI|false <p>Returns <code>RnpFFI</code> object on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-ffi-create.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_ffi_create(string $pub_format, string $sec_format): \RnpFFI|false {}

	/**
	 * Destroy the top-level object used for interacting with the library
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @return void
	 * @link https://php.net/manual/en/function.rnp-ffi-destroy.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_ffi_destroy(\RnpFFI $ffi): void {}

	/**
	 * Set password provider callback function
	 * <p>Sets password provider function. This function can ask for the password on a standard input (if PHP script is executed in a command line environment), display GUI dialog or provide password in any other possible ways. Requested passwords are used to encrypt or decrypt secret keys or perform symmetric encryption/decryption operations.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param callable $password_callback <p>The function that is to be called for every password request. It has the following signature:</p> password_callback(<code>string</code> <code>$key_fp</code>, <code>string</code> <code>$pgp_context</code>, <code>string</code> <code>&amp;$password</code>): <code>bool</code> <ul> <li><code>$key_fp</code> - The key fingerprint, if any. Can be empty.</li> <li><code>$pgp_context</code> - String describing why the key is being requested.</li> <li><code>$password</code> - Password string reference where provided password should be stored to.</li> </ul> Callback function should return <b><code>true</code></b> if password was successfully set or <b><code>false</code></b> on failure.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-ffi-set-pass-provider.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_ffi_set_pass_provider(\RnpFFI $ffi, callable $password_callback): bool {}

	/**
	 * Import keys from PHP string to the keyring and receive JSON describing new/updated keys
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $input <p>OpenPGP packets containing key(s) to be loaded. Can be either binary or ASCII armored.</p>
	 * @param int $flags <p>See <b><code>RNP_LOAD_SAVE_&#42;</code></b> predefined constants.</p>
	 * @return string|false <p>JSON string with information about new and updated keys on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-import-keys.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_import_keys(\RnpFFI $ffi, string $input, int $flags): string|false {}

	/**
	 * Import standalone signatures to the keyring and receive JSON describing updated keys
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $input <p>OpenPGP packets containing signatures to be imported. Can be either binary or ASCII armored.</p>
	 * @param int $flags <p>Currently must be 0.</p>
	 * @return string|false <p>JSON string with information about updated keys on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-import-signatures.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_import_signatures(\RnpFFI $ffi, string $input, int $flags): string|false {}

	/**
	 * Export a key
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $key_fp <p>Key fingerprint.</p>
	 * @param int $flags <p>See <b><code>RNP_KEY_EXPORT_&#42;</code></b> predefined constants (except <b><code>RNP_KEY_EXPORT_BASE64</code></b>).</p>
	 * @return string|false <p>OpenPGP packets of exported key (binary or ASCII-armored) on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-key-export.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_key_export(\RnpFFI $ffi, string $key_fp, int $flags): string|false {}

	/**
	 * Export minimal key for autocrypt feature (just 5 packets: key, uid, signature, encryption subkey, signature)
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $key_fp <p>Primary key fingerprint.</p>
	 * @param string $subkey_fp <p>Subkey to export. Can be an empty string to pick the first suitable subkey.</p>
	 * @param string $uid <p>User ID to export. Can be an empty string if exported key has only one uid.</p>
	 * @param int $flags <p>Only <b><code>RNP_KEY_EXPORT_BASE64</code></b> is currently supported. Enabling it would export base64-encoded key data instead of binary.</p>
	 * @return string|false <p>OpenPGP packets of exported key on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-key-export-autocrypt.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_key_export_autocrypt(\RnpFFI $ffi, string $key_fp, string $subkey_fp, string $uid, int $flags): string|false {}

	/**
	 * Generate and export primary key revocation signature
	 * <p>Note: to revoke a key you'll need to import this signature into the keystore or use <code>rnp_key_revoke()</code> function.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $key_fp <p>Key fingerprint of the primary key to be revoked.</p>
	 * @param int $flags <p><b><code>RNP_KEY_EXPORT_ARMORED</code></b> or 0.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"hash"</code> string Set hash algorithm used during signature calculation.   <code>"code"</code> string Code reason for revocation code. Possible values: 'no', 'superseded', 'compromised', 'retired'. If not defined, then value 'no' will be used by default.   <code>"reason"</code> string Textual representation of the reason for revocation.
	 * @return string|false <p>Exported revocation signature on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-key-export-revocation.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_key_export_revocation(\RnpFFI $ffi, string $key_fp, int $flags, array $options = null): string|false {}

	/**
	 * Get information about the key
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $key_fp <p>Key fingerprint.</p>
	 * @return array|false <p>An associative array with information about the key or <b><code>false</code></b> on failure.</p>   Key Data type Description     <code>"is_primary"</code> boolean  <b><code>true</code></b> if this key is the primary key.    <code>"is_sub"</code> boolean  <b><code>true</code></b> if this key is a subkey.    <code>"is_valid"</code> boolean  <b><code>true</code></b> if public key is valid. This includes checks of the self-signatures, expiration times, revocations and so on.    <code>"is_revoked"</code> boolean  <b><code>true</code></b> if this key is revoked.    <code>"is_superseded"</code> boolean  <b><code>true</code></b> if this key is superseded. Present only if the key is revoked.    <code>"is_compromised"</code> boolean  <b><code>true</code></b> if this key is compromised. Present only if the key is revoked.    <code>"is_retired"</code> boolean  <b><code>true</code></b> if this key is retired. Present only if the key is revoked.    <code>"is_expired"</code> boolean  <b><code>true</code></b> if this key is expired.    <code>"have_secret"</code> boolean  <b><code>true</code></b> if this key has secret part.    <code>"is_locked"</code> boolean  <b><code>true</code></b> if this key is currently locked. Only present for secret keys.    <code>"is_protected"</code> boolean  <b><code>true</code></b> if this key is protected. Only present for secret keys. A protected key is one that is encrypted and can be safely held in memory and locked/unlocked as needed.    <code>"have_public"</code> boolean  <b><code>true</code></b> if this key has public part. Generally all keys would have public part.    <code>"valid_till"</code> integer  The timestamp till which key can be considered as valid. Note: this will take into account not only key's expiration, but revocations as well. For the subkey primary key's validity time will be also checked.    <code>"bits"</code> integer  Number of bits in the key. For EC-based keys it will contain size of the curve.    <code>"alg"</code> string  Key algorithm name.    <code>"subkeys"</code> array  An indexed array containing fingerprint strings of subkeys. Only present for primary keys. Could be empty if primary key has no subkeys.    <code>"uids"</code> array  An indexed array containing user ID strings. Only present for primary keys. Could be empty if primary key has no user ID-s.
	 * @link https://php.net/manual/en/function.rnp-key-get-info.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_key_get_info(\RnpFFI $ffi, string $key_fp): array|false {}

	/**
	 * Remove a key from keyring(s)
	 * <p>Note: you need to call <code>rnp_save_keys()</code> to write updated keyring(s) out.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $key_fp <p>Key fingerprint.</p>
	 * @param int $flags <p>See <b><code>RNP_KEY_REMOVE_&#42;</code></b> constants. Flag <b><code>RNP_KEY_REMOVE_SUBKEYS</code></b> will work only for the primary key and will remove all of its subkeys as well.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-key-remove.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_key_remove(\RnpFFI $ffi, string $key_fp, int $flags): bool {}

	/**
	 * Revoke a key or subkey by generating and adding revocation signature
	 * <p>Note: you need to call <code>rnp_save_keys()</code> to write updated keyring(s) out.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $key_fp <p>Key fingerprint.</p>
	 * @param int $flags <p>Currently must be 0.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"hash"</code> string Set hash algorithm used during signature calculation.   <code>"code"</code> string Code reason for revocation code. Possible values: 'no', 'superseded', 'compromised', 'retired'. If not defined, then value 'no' will be used by default.   <code>"reason"</code> string Textual representation of the reason for revocation.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-key-revoke.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_key_revoke(\RnpFFI $ffi, string $key_fp, int $flags, array $options = null): bool {}

	/**
	 * Enumerate all keys present in a keyring by specified identifer type
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $identifier_type <p>Key identifier type ("userid", "keyid", "grip", "fingerprint").</p>
	 * @return array|false <p>An associative array where key is an identifier string and value is a PGP key fingerprint or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-list-keys.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_list_keys(\RnpFFI $ffi, string $identifier_type): array|false {}

	/**
	 * Load keys from PHP string
	 * <p>Note that for G10, the input must be a directory (which must already exist).</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $format <p>The key format of the data (GPG, KBX, G10).</p>
	 * @param string $input <p>OpenPGP packets containing key(s) to be loaded. Can be either binary or ASCII armored.</p>
	 * @param int $flags <p>See RNP_LOAD_SAVE_&#42; flags description.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-load-keys.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_load_keys(\RnpFFI $ffi, string $format, string $input, int $flags): bool {}

	/**
	 * Load keys from specified path
	 * <p>Note that for G10, the input must be a directory (which must already exist).</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $format <p>The key format of the data (GPG, KBX, G10).</p>
	 * @param string $input_path <p>file or directory containing the keys.</p>
	 * @param int $flags <p>See RNP_LOAD_SAVE_&#42; flags description.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-load-keys-from-path.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_load_keys_from_path(\RnpFFI $ffi, string $format, string $input_path, int $flags): bool {}

	/**
	 * Search for the key
	 * <p>Note: only valid userids are checked while searching by userid.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $identifier_type <p>Identifier type string: "userid", "keyid", "fingerprint", "grip".</p>
	 * @param string $identifier <p>PGP User ID (name and email) for "userid" type, hexadecimal string that represents key id, fingerprint or key grip correspondingly.</p>
	 * @return string|false <p>Returns hexadecimal fingerprint of the key found on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-locate-key.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_locate_key(\RnpFFI $ffi, string $identifier_type, string $identifier): string|false {}

	/**
	 * Encrypt message
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $message <p>Message to be encrypted.</p>
	 * @param array $recipient_keys_fp <p>Array with fingerprints of recipient's keys. At least one key must be present.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"compression_alg"</code> string Compression algorithm. Both <code>"compression_alg"</code> and <code>"compression_level"</code> must be set in order to enable data compression.    <code>"compression_level"</code> integer Compression level, 0-9. 0 disables compression.   <code>"armor"</code> boolean Enable ASCII-armored output. Disabled by default.   <code>"add_signature"</code> boolean Encrypted message will be also signed.   <code>"hash"</code> string Set hash algorithm used during signature calculation. "add_signature" option should be set to <b><code>true</code></b>   <code>"creation_time"</code> integer Set signature creation time in seconds since Jan, 1 1970 UTC. By default current time is used.   <code>"expiration_time"</code> integer Set signature expiration time in seconds since the creation time. 0 value is used to mark signature as non-expiring (default value).   <code>"password"</code> string Add password which is used to encrypt data.   <code>"cipher"</code> string  Set symmetric encryption algorithm. Possible values are "IDEA", "TRIPLEDES", "CAST5", "BLOWFISH", "AES128", "AES192", "AES256", "TWOFISH", "CAMELLIA128", "CAMELLIA192", "CAMELLIA256", "SM4".    <code>"aead"</code> string  Set AEAD mode algorithm. Possible values are "None" to disable AEAD, "EAX", "OCB".    <code>"aead_bits"</code> integer Set chunk length for AEAD mode via number of chunk size bits. Must be between 0 to 56.   <code>"flags"</code> integer  Set additional encryption flags. Supported flags: RNP_ENCRYPT_NOWRAP - do not wrap the data in a literal data packet. This would allow to encrypt already signed data.    <code>"file_name"</code> string Set the internally stored file name for the data being encrypted. Special value _CONSOLE may be used to mark message as 'for your eyes only', i.e. it should not be stored anywhere but only displayed to the receiver. Default is the empty string.   <code>"file_mtime"</code> integer Set input file modification date in seconds since Jan, 1 1970 UTC.
	 * @return string|false <p>Encrypted data on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-op-encrypt.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_encrypt(\RnpFFI $ffi, string $message, array $recipient_keys_fp, array $options = null): string|false {}

	/**
	 * Generate key
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $userid <p>PGP User ID - text that is intended to represent the name and email address of the key holder.</p>
	 * @param string $key_alg <p>Primary key algorithm (i.e. 'RSA', 'DSA', etc).</p>
	 * @param string $sub_alg <p>Subkey algorithm. If not set, subkey will not be generated.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"bits"</code> integer Primary key size in bits. Applicable only to RSA, DSA and El-Gamal keys.   <code>"hash"</code> string Hash algorithm used in self signature or subkey binding signature.   <code>"dsa_qbits"</code> integer Set size of a <code>q</code> parameter for DSA key. Note: appropriate default value will be set, depending on key bits. However you may override it if needed.   <code>"curve"</code> string Set the curve used for ECC key. Note: this is only applicable for ECDSA, ECDH and SM2 keys.   <code>"request_password"</code> boolean Enable requesting password via password provider. This password will be used for key encryption. Password provider callback function should be set in advance by calling <code>rnp_ffi_set_pass_provider()</code>. Note: this setting will be ignored if password was set via<code>"password"</code>   <code>"password"</code> string Set the password used to encrypt the secret key data.   <code>"expiration"</code> integer Set the key and subkey expiration time in seconds.   <code>"sub_bits"</code> integer Subkey size in bits. Applicable only to RSA, DSA and El-Gamal keys.   <code>"sub_hash"</code> string Hash algorithm used in subkey self signature or subkey binding signature.   <code>"sub_curve"</code> string Set the curve used for ECC subkey. Note: this is only applicable for ECDSA, ECDH and SM2 keys.
	 * @return string|false <p>Fingerprint of the generated primary key or <b><code>false</code></b> on failure. This fingerprint can be used later to reference the key in sign and encrypt operations. The key data is stored in FFI memory context and can be saved using <code>rnp_save_keys()</code> or <code>rnp_save_keys_to_path()</code>.</p>
	 * @link https://php.net/manual/en/function.rnp-op-generate-key.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_generate_key(\RnpFFI $ffi, string $userid, string $key_alg, string $sub_alg = null, array $options = null): string|false {}

	/**
	 * Perform signing operation on a binary data, return embedded signature(s)
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $data <p>Data to be signed.</p>
	 * @param array $keys_fp <p>Array with key fingerprints. At least one key must be provided. Keys should be present in <code>ffi</code>.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"compression_alg"</code> string Compression algorithm. Both <code>"compression_alg"</code> and <code>"compression_level"</code> must be set in order to enable data compression.    <code>"compression_level"</code> integer Compression level, 0-9. 0 disables compression.   <code>"armor"</code> boolean Enable ASCII-armored output. Disabled by default.   <code>"hash"</code> string Set hash algorithm used during signature calculation.   <code>"creation_time"</code> integer Set signature creation time in seconds since Jan, 1 1970 UTC. By default current time is used.   <code>"expiration_time"</code> integer Set signature expiration time in seconds since the creation time. 0 value is used to mark signature as non-expiring (default value).   <code>"file_name"</code> string Set input file name.Special value _CONSOLE may be used to mark message as 'for your eyes only', i.e. it should not be stored anywhere but only displayed to the receiver. Default is the empty string.   <code>"file_mtime"</code> integer Set input file modification date in seconds since Jan, 1 1970 UTC.
	 * @return string|false <p>Data with embedded signature(s) on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-op-sign.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_sign(\RnpFFI $ffi, string $data, array $keys_fp, array $options = null): string|false {}

	/**
	 * Perform signing operation on a textual data, return cleartext signed message
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $data <p>Data to be signed.</p>
	 * @param array $keys_fp <p>Array with key fingerprints. At least one key must be provided. Keys should be present in <code>ffi</code>.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"armor"</code> boolean Enable ASCII-armored output. Disabled by default.   <code>"hash"</code> string Set hash algorithm used during signature calculation.   <code>"creation_time"</code> integer Set signature creation time in seconds since Jan, 1 1970 UTC. By default current time is used.   <code>"expiration_time"</code> integer Set signature expiration time in seconds since the creation time. 0 value is used to mark signature as non-expiring (default value).
	 * @return string|false <p>Cleartext signed message containing source data with additional headers and ASCII-armored signature on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-op-sign-cleartext.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_sign_cleartext(\RnpFFI $ffi, string $data, array $keys_fp, array $options = null): string|false {}

	/**
	 * Perform signing operation, return detached signature(s)
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $data <p>Data to be signed.</p>
	 * @param array $keys_fp <p>Array with key fingerprints. At least one key must be provided. Keys should be present in <code>ffi</code>.</p>
	 * @param array $options <p>An associative array with options.</p>    Key Data type Description     <code>"armor"</code> boolean Enable ASCII-armored output. Disabled by default.   <code>"hash"</code> string Set hash algorithm used during signature calculation.   <code>"creation_time"</code> integer Set signature creation time in seconds since Jan, 1 1970 UTC. By default current time is used.   <code>"expiration_time"</code> integer Set signature expiration time in seconds since the creation time. 0 value is used to mark signature as non-expiring (default value).
	 * @return string|false <p>Detached signature(s) data on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-op-sign-detached.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_sign_detached(\RnpFFI $ffi, string $data, array $keys_fp, array $options = null): string|false {}

	/**
	 * Verify embedded or cleartext signatures
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $data <p>Signed data.</p>
	 * @return array|false <p>An associative array with information about verification results or <b><code>false</code></b> on failure.</p>   Key Data type Description     <code>"verification_status"</code> string  Overall verification result, either "Success" string or appropriate error message. "Success" result is set when at least one signature is valid and successfully verified. Individual verification results for each signature can be checked in the "signatures" array.    <code>"file_name"</code> string File name.   <code>"file_mtime"</code> integer File modification time.   <code>"mode"</code> string Data protection (encryption) mode used in processed message. Currently defined values are "none", "cfb", "cfb-mdc", "aead-ocb", "aead-eax".    <code>"cipher"</code> string Symmetric cipher used for data encryption.   <code>"valid_integrity"</code> boolean <b><code>true</code></b> if message integrity protection was used (i.e. MDC or AEAD) and it was validated successfully.    <code>"signatures"</code> array  An associative array describing each signature found. See description below.    <p>"signatures" sub-array.</p>   Key Data type Description     "verification_status" string Signature verification status, either "Success" string or appropriate error message.   "creation_time" integer Signature creation time in seconds since Jan, 1 1970 UTC.   "expiration_time" integer Signature expiration time in seconds since the creation time or 0 if signature never expires.   "hash" string Hash function algorithm used to calculate the signature.   "signing_key" string Fingerprint of the key used for signing. Could be "Not found" if corresponding public key is not loaded to the FFI object.   "signature_type" string  Signature type. Currently defined values are: 'binary', 'text', 'standalone', 'certification (generic)', 'certification (persona)', 'certification (casual)', 'certification (positive)', 'subkey binding', 'primary key binding', 'direct', 'key revocation', 'subkey revocation', 'certification revocation', 'timestamp', 'uknown: 0..255'.
	 * @link https://php.net/manual/en/function.rnp-op-verify.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_verify(\RnpFFI $ffi, string $data): array|false {}

	/**
	 * Verify detached signatures
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $data <p>Source data.</p>
	 * @param string $signature <p>Detached signature data.</p>
	 * @return array|false <p>An associative array with information about verification results or <b><code>false</code></b> on failure.</p>   Key Data type Description     <code>"verification_status"</code> string  Overall verification result, either "Success" string or appropriate error message. "Success" result is set when at least one signature is valid and successfully verified. Individual verification results for each signature can be checked in the "signatures" array.    <code>"file_name"</code> string File name.   <code>"file_mtime"</code> integer File modification time.   <code>"mode"</code> string Data protection (encryption) mode used in processed message. Currently defined values are "none", "cfb", "cfb-mdc", "aead-ocb", "aead-eax".    <code>"cipher"</code> string Symmetric cipher used for data encryption.   <code>"valid_integrity"</code> boolean <b><code>true</code></b> if message integrity protection was used (i.e. MDC or AEAD) and it was validated successfully.    <code>"signatures"</code> array  An associative array describing each signature found. See description below.    <p>"signatures" sub-array.</p>   Key Data type Description     "verification_status" string Signature verification status, either "Success" string or appropriate error message.   "creation_time" integer Signature creation time in seconds since Jan, 1 1970 UTC.   "expiration_time" integer Signature expiration time in seconds since the creation time or 0 if signature never expires.   "hash" string Hash function algorithm used to calculate the signature.   "signing_key" string Fingerprint of the key used for signing. Could be "Not found" if corresponding public key is not loaded to the FFI object.   "signature_type" string  Signature type. Currently defined values are: 'binary', 'text', 'standalone', 'certification (generic)', 'certification (persona)', 'certification (casual)', 'certification (positive)', 'subkey binding', 'primary key binding', 'direct', 'key revocation', 'subkey revocation', 'certification revocation', 'timestamp', 'uknown: 0..255'.
	 * @link https://php.net/manual/en/function.rnp-op-verify-detached.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_op_verify_detached(\RnpFFI $ffi, string $data, string $signature): array|false {}

	/**
	 * Save keys to PHP string
	 * <p>Note that for G10, the output must be a directory (which must already exist).</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $format <p>The key format of the data (GPG, KBX, G10).</p>
	 * @param string $output <p>key packets will be saved to the string referenced by <code>output</code>.</p>
	 * @param int $flags <p>See RNP_LOAD_SAVE_&#42; flags description.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-save-keys.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_save_keys(\RnpFFI $ffi, string $format, string &$output, int $flags): bool {}

	/**
	 * Save keys to specified path
	 * <p>Saves keys present in the FFI object (loaded or generated) to the specified file or directory.</p>
	 * @param \RnpFFI $ffi <p>The FFI object returned by rnp_ffi_create.</p>
	 * @param string $format <p>The key format of the data (GPG, KBX, G10).</p>
	 * @param string $output_path <p>File or directory path where keys should be saved to.</p>
	 * @param int $flags <p>See RNP_LOAD_SAVE_&#42; flags description.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-save-keys-to-path.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_save_keys_to_path(\RnpFFI $ffi, string $format, string $output_path, int $flags): bool {}

	/**
	 * Get supported features in JSON format
	 * <p>Get the JSON formatted string containing array of supported rnp feature values (algorithms, curves, etc) by type.</p>
	 * @param string $type <p>See RNP_FEATURE_&#42; constants for supported values.</p>
	 * @return string|false <p>String containing JSON formatted array of supported algorithms, curves, etc or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rnp-supported-features.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_supported_features(string $type): string|false {}

	/**
	 * RNP library version
	 * @return string <p>Returns RNP library version string.</p>
	 * @link https://php.net/manual/en/function.rnp-version-string.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_version_string(): string {}

	/**
	 * Full version string of RNP library
	 * @return string <p>Returns full version string of RNP library.</p>
	 * @link https://php.net/manual/en/function.rnp-version-string-full.php
	 * @since PECL rnp >= 0.1.1
	 */
	function rnp_version_string_full(): string {}

	/**
	 * Dump key fingerprints and grips.
	 */
	define('RNP_DUMP_GRIP', null);

	/**
	 * Dump MPI (Multi-precision integer) values.
	 */
	define('RNP_DUMP_MPI', null);

	/**
	 * Dump raw packet contents as well.
	 */
	define('RNP_DUMP_RAW', null);

	/**
	 * Allows encryption of signed message. Message is not wrapped into literal data packet.
	 */
	define('RNP_ENCRYPT_NOWRAP', null);

	/**
	 * List available AEAD algorithms.
	 */
	define('RNP_FEATURE_AEAD_ALG', null);

	/**
	 * List available compression algorithms.
	 */
	define('RNP_FEATURE_COMP_ALG', null);

	/**
	 * List available elliptic curves.
	 */
	define('RNP_FEATURE_CURVE', null);

	/**
	 * List available hash algorithms.
	 */
	define('RNP_FEATURE_HASH_ALG', null);

	/**
	 * List available public key algorithms.
	 */
	define('RNP_FEATURE_PK_ALG', null);

	/**
	 * List available protection modes.
	 */
	define('RNP_FEATURE_PROT_MODE', null);

	/**
	 * List available symmetric encryption algorithms.
	 */
	define('RNP_FEATURE_SYMM_ALG', null);

	/**
	 * Dump key fingerprints and grips.
	 */
	define('RNP_JSON_DUMP_GRIP', null);

	/**
	 * Dump MPI (Multi-precision integer) values.
	 */
	define('RNP_JSON_DUMP_MPI', null);

	/**
	 * Dump raw packet contents as well.
	 */
	define('RNP_JSON_DUMP_RAW', null);

	/**
	 * Enable ASCII-armoring of exported data.
	 */
	define('RNP_KEY_EXPORT_ARMORED', null);

	/**
	 * Export base64-encoded autocrypt key instead of binary.
	 */
	define('RNP_KEY_EXPORT_BASE64', null);

	/**
	 * Export public key.
	 */
	define('RNP_KEY_EXPORT_PUBLIC', null);

	/**
	 * Export secret key.
	 */
	define('RNP_KEY_EXPORT_SECRET', null);

	/**
	 * If primary key is being exported, all subkeys will be exported too.
	 */
	define('RNP_KEY_EXPORT_SUBKEYS', null);

	/**
	 * Remove public key.
	 */
	define('RNP_KEY_REMOVE_PUBLIC', null);

	/**
	 * Remove secret key.
	 */
	define('RNP_KEY_REMOVE_SECRET', null);

	/**
	 * If primary key is being deleted, all of its subkeys will be removed too.
	 */
	define('RNP_KEY_REMOVE_SUBKEYS', null);

	/**
	 * Keystore format "G10". For private keys.
	 */
	define('RNP_KEYSTORE_G10', null);

	/**
	 * Keystore format "GPG".
	 */
	define('RNP_KEYSTORE_GPG', null);

	/**
	 * Keystore format "KBX". For public keys only. A keybox is a file format used to store public keys along with meta information and indices.
	 */
	define('RNP_KEYSTORE_KBX', null);

	/**
	 * Allow import of base64-encoded keys (autocrypt ones).
	 */
	define('RNP_LOAD_SAVE_BASE64', null);

	/**
	 * Allows to ignore bad signature/key/subkey packets during key import.
	 */
	define('RNP_LOAD_SAVE_PERMISSIVE', null);

	/**
	 * Load or save public keys only. Can be OR-ed with <b><code>RNP_LOAD_SAVE_SECRET_KEYS</code></b> to load both public and private keys to the FFI context or save them from the context.
	 */
	define('RNP_LOAD_SAVE_PUBLIC_KEYS', null);

	/**
	 * Load or save secret keys only. Can be OR-ed with <b><code>RNP_LOAD_SAVE_PUBLIC_KEYS</code></b> to load both public and private keys to the FFI context or save them from the context.
	 */
	define('RNP_LOAD_SAVE_SECRET_KEYS', null);

	/**
	 * If set, only the first key will be loaded.
	 */
	define('RNP_LOAD_SAVE_SINGLE', null);

}
