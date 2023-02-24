<?php



namespace {

	/**
	 * <p>A fully opaque class which replaces <code>OpenSSL key</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.opensslasymmetrickey.php
	 * @since PHP 8
	 */
	final class OpenSSLAsymmetricKey {
	}

	/**
	 * <p>A fully opaque class which replaces <code>OpenSSL X.509</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.opensslcertificate.php
	 * @since PHP 8
	 */
	final class OpenSSLCertificate {
	}

	/**
	 * <p>A fully opaque class which replaces <code>OpenSSL X.509 CSR</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.opensslcertificatesigningrequest.php
	 * @since PHP 8
	 */
	final class OpenSSLCertificateSigningRequest {
	}

	/**
	 * Gets the cipher iv length
	 * <p>Gets the cipher initialization vector (iv) length.</p>
	 * @param string $cipher_algo <p>The cipher method, see <code>openssl_get_cipher_methods()</code> for a list of potential values.</p>
	 * @return int|false <p>Returns the cipher length on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cipher-iv-length.php
	 * @since PHP 5 >= 5.3.3, PHP 7, PHP 8
	 */
	function openssl_cipher_iv_length(string $cipher_algo): int|false {}

	/**
	 * Gets the cipher key length
	 * <p>Gets the cipher key length.</p>
	 * @param string $cipher_algo <p>The cipher method, see <code>openssl_get_cipher_methods()</code> for a list of potential values.</p>
	 * @return int|false <p>Returns the cipher length on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cipher-key-length.php
	 * @since PHP 8 >= 8.2.0
	 */
	function openssl_cipher_key_length(string $cipher_algo): int|false {}

	/**
	 * Decrypt a CMS message
	 * <p>Decrypts a CMS message.</p>
	 * @param string $input_filename <p>The name of a file containing encrypted content.</p>
	 * @param string $output_filename <p>The name of the file to deposit the decrypted content.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>The name of the file containing a certificate of the recipient.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string|null $private_key <p>The name of the file containing a PKCS#8 key.</p>
	 * @param int $encoding <p>The encoding of the input file. One of <b><code>OPENSSL_ENCODING_SMIME</code></b>, <b><code>OPENSSL_ENCODING_DER</code></b> or <b><code>OPENSSL_ENCODING_PEM</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cms-decrypt.php
	 * @since PHP 8
	 */
	function openssl_cms_decrypt(string $input_filename, string $output_filename, \OpenSSLCertificate|string $certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string|null $private_key = null, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

	/**
	 * Encrypt a CMS message
	 * <p>This function encrypts content to one or more recipients, based on the certificates that are passed to it.</p>
	 * @param string $input_filename <p>The file to be encrypted.</p>
	 * @param string $output_filename <p>The output file.</p>
	 * @param \OpenSSLCertificate|array|string $certificate <p>Recipients to encrypt to.</p>
	 * @param ?array $headers <p>Headers to include when S/MIME is used.</p>
	 * @param int $flags <p>Flags to be passed to CMS_sign.</p>
	 * @param int $encoding <p>An encoding to output. One of <b><code>OPENSSL_ENCODING_SMIME</code></b>, <b><code>OPENSSL_ENCODING_DER</code></b> or <b><code>OPENSSL_ENCODING_PEM</code></b>.</p>
	 * @param int $cipher_algo <p>A cypher to use.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cms-encrypt.php
	 * @since PHP 8
	 */
	function openssl_cms_encrypt(string $input_filename, string $output_filename, \OpenSSLCertificate|array|string $certificate, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC): bool {}

	/**
	 * Export the CMS file to an array of PEM certificates
	 * <p>Performs the exact analog to <code>openssl_pkcs7_read()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $input_filename
	 * @param array $certificates
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cms-read.php
	 * @since PHP 8
	 */
	function openssl_cms_read(string $input_filename, array &$certificates): bool {}

	/**
	 * Sign a file
	 * <p>This function signs a file with an X.509 certificate and key.</p>
	 * @param string $input_filename <p>The name of the file to be signed.</p>
	 * @param string $output_filename <p>The name of the file to deposit the results.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>The signing certificate. See Key/Certificate parameters for a list of valid values.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p>The key associated with <code>certificate</code>. See Key/Certificate parameters for a list of valid values.</p>
	 * @param ?array $headers <p>An array of headers to be included in S/MIME output.</p>
	 * @param int $flags <p>Flags to be passed to <b>cms_sign()</b>.</p>
	 * @param int $encoding <p>The encoding of the output file. One of <b><code>OPENSSL_ENCODING_SMIME</code></b>, <b><code>OPENSSL_ENCODING_DER</code></b> or <b><code>OPENSSL_ENCODING_PEM</code></b>.</p>
	 * @param ?string $untrusted_certificates_filename <p>Intermediate certificates to be included in the signature.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cms-sign.php
	 * @since PHP 8
	 */
	function openssl_cms_sign(string $input_filename, string $output_filename, \OpenSSLCertificate|string $certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename = null): bool {}

	/**
	 * Verify a CMS signature
	 * <p>This function verifies a CMS signature, either attached or detached, with the specified encoding.</p>
	 * @param string $input_filename <p>The input file.</p>
	 * @param int $flags <p>Flags to pass to <b>cms_verify()</b>.</p>
	 * @param ?string $certificates <p>A file with the signer certificate and optionally intermediate certificates.</p>
	 * @param array $ca_info <p>An array containing self-signed certificate authority certificates.</p>
	 * @param ?string $untrusted_certificates_filename <p>A file containing additional intermediate certificates.</p>
	 * @param ?string $content <p>A file pointing to the content when signatures are detached.</p>
	 * @param ?string $pk7
	 * @param ?string $sigfile <p>A file to save the signature to.</p>
	 * @param int $encoding <p>The encoding of the input file. One of <b><code>OPENSSL_ENCODING_SMIME</code></b>, <b><code>OPENSSL_ENCODING_DER</code></b> or <b><code>OPENSSL_ENCODING_PEM</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-cms-verify.php
	 * @since PHP 8
	 */
	function openssl_cms_verify(string $input_filename, int $flags = 0, ?string $certificates = null, array $ca_info = [], ?string $untrusted_certificates_filename = null, ?string $content = null, ?string $pk7 = null, ?string $sigfile = null, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

	/**
	 * Exports a CSR as a string
	 * <p><b>openssl_csr_export()</b> takes the Certificate Signing Request represented by <code>csr</code> and stores it in PEM format in <code>output</code>, which is passed by reference.</p>
	 * @param \OpenSSLCertificateSigningRequest|string $csr <p>See CSR parameters for a list of valid values.</p>
	 * @param string $output <p>on success, this string will contain the PEM encoded CSR</p>
	 * @param bool $no_text <p>The optional parameter <code>notext</code> affects the verbosity of the output; if it is <b><code>false</code></b>, then additional human-readable information is included in the output. The default value of <code>notext</code> is <b><code>true</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-csr-export.php
	 * @see openssl_csr_export_to_file(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_csr_export(\OpenSSLCertificateSigningRequest|string $csr, string &$output, bool $no_text = true): bool {}

	/**
	 * Exports a CSR to a file
	 * <p><b>openssl_csr_export_to_file()</b> takes the Certificate Signing Request represented by <code>csr</code> and saves it in PEM format into the file named by <code>output_filename</code>.</p>
	 * @param \OpenSSLCertificateSigningRequest|string $csr <p>See CSR parameters for a list of valid values.</p>
	 * @param string $output_filename <p>Path to the output file.</p>
	 * @param bool $no_text <p>The optional parameter <code>notext</code> affects the verbosity of the output; if it is <b><code>false</code></b>, then additional human-readable information is included in the output. The default value of <code>notext</code> is <b><code>true</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-csr-export-to-file.php
	 * @see openssl_csr_export(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_csr_export_to_file(\OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text = true): bool {}

	/**
	 * Returns the public key of a CSR
	 * <p><b>openssl_csr_get_public_key()</b> extracts the public key from <code>csr</code> and prepares it for use by other functions.</p>
	 * @param \OpenSSLCertificateSigningRequest|string $csr <p>See CSR parameters for a list of valid values.</p>
	 * @param bool $short_names <p><b>Warning</b></p> <p>This parameter is ignored</p>
	 * @return OpenSSLAsymmetricKey|false <p>Returns an <code>OpenSSLAsymmetricKey</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.openssl-csr-get-public-key.php
	 * @see openssl_csr_get_subject(), openssl_csr_new(), openssl_pkey_get_details(), openssl_pkey_export_to_file(), openssl_pkey_export()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function openssl_csr_get_public_key(\OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): \OpenSSLAsymmetricKey|false {}

	/**
	 * Returns the subject of a CSR
	 * <p><b>openssl_csr_get_subject()</b> returns subject distinguished name information encoded in the <code>csr</code> including fields commonName (CN), organizationName (O), countryName (C) etc.</p>
	 * @param \OpenSSLCertificateSigningRequest|string $csr <p>See CSR parameters for a list of valid values.</p>
	 * @param bool $short_names <p><code>shortnames</code> controls how the data is indexed in the array - if <code>shortnames</code> is <b><code>true</code></b> (the default) then fields will be indexed with the short name form, otherwise, the long name form will be used - e.g.: CN is the shortname form of commonName.</p>
	 * @return array|false <p>Returns an associative array with subject description, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-csr-get-subject.php
	 * @see openssl_csr_new(), openssl_csr_get_public_key(), openssl_x509_parse()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function openssl_csr_get_subject(\OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): array|false {}

	/**
	 * Generates a CSR
	 * <p><b>openssl_csr_new()</b> generates a new CSR (Certificate Signing Request) based on the information provided by <code>distinguished_names</code>.</p><p><b>Note</b>:  You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information. </p>
	 * @param array $distinguished_names <p>The Distinguished Name or subject fields to be used in the certificate.</p>
	 * @param \OpenSSLAsymmetricKey $private_key <p><code>private_key</code> should be set to a private key that was previously generated by <code>openssl_pkey_new()</code> (or otherwise obtained from the other openssl_pkey family of functions). The corresponding public portion of the key will be used to sign the CSR.</p>
	 * @param ?array $options <p>By default, the information in your system <code>openssl.conf</code> is used to initialize the request; you can specify a configuration file section by setting the <code>config_section_section</code> key of <code>options</code>. You can also specify an alternative openssl configuration file by setting the value of the <code>config</code> key to the path of the file you want to use. The following keys, if present in <code>options</code> behave as their equivalents in the <code>openssl.conf</code>, as listed in the table below.</p> <b>Configuration overrides</b>   <code>options</code> key type <code>openssl.conf</code> equivalent description     digest_alg <code>string</code> default_md Digest method or signature hash, usually one of <code>openssl_get_md_methods()</code>   x509_extensions <code>string</code> x509_extensions Selects which extensions should be used when creating an x509 certificate   req_extensions <code>string</code> req_extensions Selects which extensions should be used when creating a CSR   private_key_bits <code>int</code> default_bits Specifies how many bits should be used to generate a private key   private_key_type <code>int</code> none Specifies the type of private key to create. This can be one of <b><code>OPENSSL_KEYTYPE_DSA</code></b>, <b><code>OPENSSL_KEYTYPE_DH</code></b>, <b><code>OPENSSL_KEYTYPE_RSA</code></b> or <b><code>OPENSSL_KEYTYPE_EC</code></b>. The default value is <b><code>OPENSSL_KEYTYPE_RSA</code></b>.    encrypt_key <code>bool</code> encrypt_key Should an exported key (with passphrase) be encrypted&#63;   encrypt_key_cipher <code>int</code> none  One of cipher constants.    curve_name <code>string</code> none  One of <code>openssl_get_curve_names()</code>.    config <code>string</code> N/A  Path to your own alternative openssl.conf file.
	 * @param ?array $extra_attributes <p><code>extra_attributes</code> is used to specify additional configuration options for the CSR. Both <code>distinguished_names</code> and <code>extra_attributes</code> are associative arrays whose keys are converted to OIDs and applied to the relevant part of the request.</p>
	 * @return OpenSSLCertificateSigningRequest|false <p>Returns the CSR or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-csr-new.php
	 * @see openssl_csr_sign()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_csr_new(array $distinguished_names, \OpenSSLAsymmetricKey &$private_key, ?array $options = null, ?array $extra_attributes = null): \OpenSSLCertificateSigningRequest|false {}

	/**
	 * Sign a CSR with another certificate (or itself) and generate a certificate
	 * <p><b>openssl_csr_sign()</b> generates an x509 certificate from the given CSR.</p><p><b>Note</b>:  You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information. </p>
	 * @param \OpenSSLCertificateSigningRequest|string $csr <p>A CSR previously generated by <code>openssl_csr_new()</code>. It can also be the path to a PEM encoded CSR when specified as file://path/to/csr or an exported string generated by <code>openssl_csr_export()</code>.</p>
	 * @param \OpenSSLCertificate|string|null $ca_certificate <p>The generated certificate will be signed by <code>ca_certificate</code>. If <code>ca_certificate</code> is <b><code>null</code></b>, the generated certificate will be a self-signed certificate.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>private_key</code> is the private key that corresponds to <code>ca_certificate</code>.</p>
	 * @param int $days <p><code>days</code> specifies the length of time for which the generated certificate will be valid, in days.</p>
	 * @param ?array $options <p>You can finetune the CSR signing by <code>options</code>. See <code>openssl_csr_new()</code> for more information about <code>options</code>.</p>
	 * @param int $serial <p>An optional the serial number of issued certificate. If not specified it will default to 0.</p>
	 * @return OpenSSLCertificate|false <p>Returns an <code>OpenSSLCertificate</code> on success, <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-csr-sign.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_csr_sign(\OpenSSLCertificateSigningRequest|string $csr, \OpenSSLCertificate|string|null $ca_certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, int $days, ?array $options = null, int $serial = 0): \OpenSSLCertificate|false {}

	/**
	 * Decrypts data
	 * <p>Takes a raw or base64 encoded string and decrypts it using a given method and key.</p>
	 * @param string $data <p>The encrypted message to be decrypted.</p>
	 * @param string $cipher_algo <p>The cipher method. For a list of available cipher methods, use <code>openssl_get_cipher_methods()</code>.</p>
	 * @param string $passphrase <p>The key.</p>
	 * @param int $options <p><code>options</code> can be one of <b><code>OPENSSL_RAW_DATA</code></b>, <b><code>OPENSSL_ZERO_PADDING</code></b>.</p>
	 * @param string $iv <p>A non-NULL Initialization Vector.</p>
	 * @param ?string $tag <p>The authentication tag in AEAD cipher mode. If it is incorrect, the authentication fails and the function returns <b><code>false</code></b>.</p> <b>Caution</b> <p>The length of the <code>tag</code> is not checked by the function. It is the caller's responsibility to ensure that the length of the tag matches the length of the tag retrieved when <code>openssl_encrypt()</code> has been called. Otherwise the decryption may succeed if the given tag only matches the start of the proper tag.</p>
	 * @param string $aad <p>Additional authenticated data.</p>
	 * @return string|false <p>The decrypted string on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-decrypt.php
	 * @see openssl_encrypt()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false {}

	/**
	 * Computes shared secret for public value of remote DH public key and local DH key
	 * <p>The shared secret returned by <b>openssl_dh_compute_key()</b> is often used as an encryption key to secretly communicate with a remote party. This is known as the Diffie-Hellman key exchange.</p><p><b>Note</b>:  ECDH is only supported as of PHP 8.1.0 <i>and</i> OpenSSL 3.0.0. </p>
	 * @param string $public_key <p>DH Public key of the remote party.</p>
	 * @param \OpenSSLAsymmetricKey $private_key <p>A local DH private key, corresponding to the public key to be shared with the remote party.</p>
	 * @return string|false <p>Returns shared secret on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-dh-compute-key.php
	 * @see openssl_pkey_new(), openssl_pkey_get_details(), openssl_pkey_get_private(), openssl_pkey_get_public()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_dh_compute_key(string $public_key, \OpenSSLAsymmetricKey $private_key): string|false {}

	/**
	 * Computes a digest
	 * <p>Computes a digest hash value for the given data using a given method, and returns a raw or binhex encoded string.</p>
	 * @param string $data <p>The data.</p>
	 * @param string $digest_algo <p>The digest method to use, e.g. "sha256", see <code>openssl_get_md_methods()</code> for a list of available digest methods.</p>
	 * @param bool $binary <p>Setting to <b><code>true</code></b> will return as raw output data, otherwise the return value is binhex encoded.</p>
	 * @return string|false <p>Returns the digested hash value on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-digest.php
	 * @see openssl_get_md_methods()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_digest(string $data, string $digest_algo, bool $binary = false): string|false {}

	/**
	 * Encrypts data
	 * <p>Encrypts given data with given method and key, returns a raw or base64 encoded string</p>
	 * @param string $data <p>The plaintext message data to be encrypted.</p>
	 * @param string $cipher_algo <p>The cipher method. For a list of available cipher methods, use <code>openssl_get_cipher_methods()</code>.</p>
	 * @param string $passphrase <p>The passphrase. If the passphrase is shorter than expected, it is silently padded with <code>NUL</code> characters; if the passphrase is longer than expected, it is silently truncated.</p>
	 * @param int $options <p><code>options</code> is a bitwise disjunction of the flags <b><code>OPENSSL_RAW_DATA</code></b> and <b><code>OPENSSL_ZERO_PADDING</code></b>.</p>
	 * @param string $iv <p>A non-NULL Initialization Vector.</p>
	 * @param string $tag <p>The authentication tag passed by reference when using AEAD cipher mode (GCM or CCM).</p>
	 * @param string $aad <p>Additional authenticated data.</p>
	 * @param int $tag_length <p>The length of the authentication <code>tag</code>. Its value can be between 4 and 16 for GCM mode.</p>
	 * @return string|false <p>Returns the encrypted string on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-encrypt.php
	 * @see openssl_decrypt()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", string &$tag = null, string $aad = "", int $tag_length = 16): string|false {}

	/**
	 * Return openSSL error message
	 * <p><b>openssl_error_string()</b> returns the last error from the openSSL library. Error messages are queued, so this function should be called multiple times to collect all of the information. The last error will be the most recent one.</p>
	 * @return string|false <p>Returns an error message string, or <b><code>false</code></b> if there are no more error messages to return.</p>
	 * @link https://php.net/manual/en/function.openssl-error-string.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_error_string(): string|false {}

	/**
	 * Free key resource
	 * <p><b>openssl_free_key()</b> frees the key associated with the specified <code>key</code> from memory.</p>
	 * @param \OpenSSLAsymmetricKey $key
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.openssl-free-key.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_free_key(\OpenSSLAsymmetricKey $key): void {}

	/**
	 * Retrieve the available certificate locations
	 * <p><b>openssl_get_cert_locations()</b> returns an array with information about the available certificate locations that will be searched for SSL certificates.</p>
	 * @return array <p>Returns an array with the available certificate locations.</p>
	 * @link https://php.net/manual/en/function.openssl-get-cert-locations.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function openssl_get_cert_locations(): array {}

	/**
	 * Gets available cipher methods
	 * <p>Gets a list of available cipher methods.</p>
	 * @param bool $aliases <p>Set to <b><code>true</code></b> if cipher aliases should be included within the returned <code>array</code>.</p>
	 * @return array <p>An <code>array</code> of available cipher methods. Note that prior to OpenSSL 1.1.1, the cipher methods have been returned in upper case and lower case spelling; as of OpenSSL 1.1.1 only the lower case variants are returned.</p>
	 * @link https://php.net/manual/en/function.openssl-get-cipher-methods.php
	 * @see openssl_get_md_methods()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_get_cipher_methods(bool $aliases = false): array {}

	/**
	 * Gets list of available curve names for ECC
	 * <p>Gets the list of available curve names for use in Elliptic curve cryptography (ECC) for public/private key operations. The two most widely standardized/supported curves are <i>prime256v1</i> (NIST P-256) and <i>secp384r1</i> (NIST P-384).</p>
	 * @return array|false <p>An <code>array</code> of available curve names, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-get-curve-names.php
	 * @since PHP 7 >= 7.1.0, PHP 8
	 */
	function openssl_get_curve_names(): array|false {}

	/**
	 * Gets available digest methods
	 * <p>Gets a list of available digest methods.</p>
	 * @param bool $aliases <p>Set to <b><code>true</code></b> if digest aliases should be included within the returned <code>array</code>.</p>
	 * @return array <p>An <code>array</code> of available digest methods.</p>
	 * @link https://php.net/manual/en/function.openssl-get-md-methods.php
	 * @see openssl_digest(), openssl_get_cipher_methods()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_get_md_methods(bool $aliases = false): array {}

	/**
	 * Alias of openssl_pkey_get_private()
	 * <p>This function is an alias of: <code>openssl_pkey_get_private()</code>.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>private_key</code> can be one of the following:</p><ol> <li>a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/private key (it may contain both).  </li> <li>A PEM formatted private key.</li> </ol>
	 * @param ?string $passphrase <p>The optional parameter <code>passphrase</code> must be used if the specified key is encrypted (protected by a passphrase).</p>
	 * @return OpenSSLAsymmetricKey|false
	 * @link https://php.net/manual/en/function.openssl-get-privatekey.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_get_privatekey(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, ?string $passphrase = null): \OpenSSLAsymmetricKey|false {}

	/**
	 * Alias of openssl_pkey_get_public()
	 * <p>This function is an alias of: <code>openssl_pkey_get_public()</code>.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p><code>public_key</code> can be one of the following:</p><ol> <li>an <code>OpenSSLAsymmetricKey</code> instance</li> <li>a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/public key (it may contain both).  </li> <li>A PEM formatted public key.</li> </ol>
	 * @return OpenSSLAsymmetricKey|false
	 * @link https://php.net/manual/en/function.openssl-get-publickey.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_get_publickey(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key): \OpenSSLAsymmetricKey|false {}

	/**
	 * Open sealed data
	 * <p><b>openssl_open()</b> opens (decrypts) <code>data</code> using the private key associated with the key identifier <code>private_key</code> and the envelope key <code>encrypted_key</code>, and fills <code>output</code> with the decrypted data. The envelope key is generated when the data are sealed and can only be used by one specific private key. See <code>openssl_seal()</code> for more information.</p>
	 * @param string $data
	 * @param string $output <p>If the call is successful the opened data is returned in this parameter.</p>
	 * @param string $encrypted_key
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key
	 * @param string $cipher_algo <p>The cipher method.</p><b>Caution</b> <p>The default value (<code>'RC4'</code>) is considered insecure. It is strongly recommended to explicitly specify a secure cipher method.</p>
	 * @param ?string $iv <p>The initialization vector.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-open.php
	 * @see openssl_seal()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_open(string $data, string &$output, string $encrypted_key, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, string $cipher_algo, ?string $iv = null): bool {}

	/**
	 * Generates a PKCS5 v2 PBKDF2 string
	 * <p><b>openssl_pbkdf2()</b> computes PBKDF2 (Password-Based Key Derivation Function 2), a key derivation function defined in PKCS5 v2.</p>
	 * @param string $password <p>Password from which the derived key is generated.</p>
	 * @param string $salt <p>PBKDF2 recommends a crytographic salt of at least 64 bits (8 bytes).</p>
	 * @param int $key_length <p>Length of desired output key.</p>
	 * @param int $iterations <p>The number of iterations desired. &#xBB;&#xA0;NIST recommends at least 10,000.</p>
	 * @param string $digest_algo <p>Optional hash or digest algorithm from <code>openssl_get_md_methods()</code>. Defaults to SHA-1.</p>
	 * @return string|false <p>Returns raw binary string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pbkdf2.php
	 * @see hash_pbkdf2(), openssl_get_md_methods()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1"): string|false {}

	/**
	 * Exports a PKCS#12 Compatible Certificate Store File to variable
	 * <p><b>openssl_pkcs12_export()</b> stores <code>certificate</code> into a string named by <code>output</code> in a PKCS#12 file format.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param string $output <p>On success, this will hold the PKCS#12.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p>Private key component of PKCS#12 file. See Public/Private Key parameters for a list of valid values.</p>
	 * @param string $passphrase <p>Encryption password for unlocking the PKCS#12 file.</p>
	 * @param array $options <p>Optional array, other keys will be ignored.</p>   Key Description     <code>"extracerts"</code> array of extra certificates or a single certificate to be included in the PKCS#12 file.   <code>"friendlyname"</code> string to be used for the supplied certificate and key
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs12-export.php
	 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
	 */
	function openssl_pkcs12_export(\OpenSSLCertificate|string $certificate, string &$output, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, string $passphrase, array $options = []): bool {}

	/**
	 * Exports a PKCS#12 Compatible Certificate Store File
	 * <p><b>openssl_pkcs12_export_to_file()</b> stores <code>certificate</code> into a file named by <code>output_filename</code> in a PKCS#12 file format.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param string $output_filename <p>Path to the output file.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p>Private key component of PKCS#12 file. See Public/Private Key parameters for a list of valid values.</p>
	 * @param string $passphrase <p>Encryption password for unlocking the PKCS#12 file.</p>
	 * @param array $options <p>Optional array, other keys will be ignored.</p>   Key Description     <code>"extracerts"</code> array of extra certificates or a single certificate to be included in the PKCS#12 file.   <code>"friendlyname"</code> string to be used for the supplied certificate and key
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs12-export-to-file.php
	 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
	 */
	function openssl_pkcs12_export_to_file(\OpenSSLCertificate|string $certificate, string $output_filename, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, string $passphrase, array $options = []): bool {}

	/**
	 * Parse a PKCS#12 Certificate Store into an array
	 * <p><b>openssl_pkcs12_read()</b> parses the PKCS#12 certificate store supplied by <code>pkcs12</code> into a array named <code>certificates</code>.</p>
	 * @param string $pkcs12 <p>The certificate store contents, not its file name.</p>
	 * @param array $certificates <p>On success, this will hold the Certificate Store Data.</p>
	 * @param string $passphrase <p>Encryption password for unlocking the PKCS#12 file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs12-read.php
	 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
	 */
	function openssl_pkcs12_read(string $pkcs12, array &$certificates, string $passphrase): bool {}

	/**
	 * Decrypts an S/MIME encrypted message
	 * <p>Decrypts the S/MIME encrypted message contained in the file specified by <code>input_filename</code> using the certificate and its associated private key specified by <code>certificate</code> and <code>private_key</code>.</p>
	 * @param string $input_filename
	 * @param string $output_filename <p>The decrypted message is written to the file specified by <code>output_filename</code>.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string|null $private_key
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs7-decrypt.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkcs7_decrypt(string $input_filename, string $output_filename, \OpenSSLCertificate|string $certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string|null $private_key = null): bool {}

	/**
	 * Encrypt an S/MIME message
	 * <p><b>openssl_pkcs7_encrypt()</b> takes the contents of the file named <code>input_filename</code> and encrypts them using an RC2 40-bit cipher so that they can only be read by the intended recipients specified by <code>certificate</code>.</p>
	 * @param string $input_filename
	 * @param string $output_filename
	 * @param \OpenSSLCertificate|array|string $certificate <p>Either a lone X.509 certificate, or an array of X.509 certificates.</p>
	 * @param ?array $headers <p><code>headers</code> is an array of headers that will be prepended to the data after it has been encrypted.</p> <p><code>headers</code> can be either an associative array keyed by header name, or an indexed array, where each element contains a single header line.</p>
	 * @param int $flags <p><code>flags</code> can be used to specify options that affect the encoding process - see PKCS7 constants.</p>
	 * @param int $cipher_algo <p>One of cipher constants.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs7-encrypt.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkcs7_encrypt(string $input_filename, string $output_filename, \OpenSSLCertificate|array|string $certificate, ?array $headers, int $flags = 0, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC): bool {}

	/**
	 * Export the PKCS7 file to an array of PEM certificates
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $data <p>The string of data you wish to parse (p7b format).</p>
	 * @param array $certificates <p>The array of PEM certificates from the p7b input data.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs7-read.php
	 * @see openssl_csr_sign()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function openssl_pkcs7_read(string $data, array &$certificates): bool {}

	/**
	 * Sign an S/MIME message
	 * <p><b>openssl_pkcs7_sign()</b> takes the contents of the file named <code>input_filename</code> and signs them using the certificate and its matching private key specified by <code>certificate</code> and <code>private_key</code> parameters.</p>
	 * @param string $input_filename <p>The input file you are intending to digitally sign.</p>
	 * @param string $output_filename <p>The file which the digital signature will be written to.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>The X.509 certificate used to digitally sign <code>input_filename</code>. See Key/Certificate parameters for a list of valid values.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>private_key</code> is the private key corresponding to <code>certificate</code>. See Public/Private Key parameters for a list of valid values.</p>
	 * @param ?array $headers <p><code>headers</code> is an array of headers that will be prepended to the data after it has been signed (see <code>openssl_pkcs7_encrypt()</code> for more information about the format of this parameter).</p>
	 * @param int $flags <p><code>flags</code> can be used to alter the output - see PKCS7 constants.</p>
	 * @param ?string $untrusted_certificates_filename <p><code>untrusted_certificates_filename</code> specifies the name of a file containing a bunch of extra certificates to include in the signature which can for example be used to help the recipient to verify the certificate that you used.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs7-sign.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkcs7_sign(string $input_filename, string $output_filename, \OpenSSLCertificate|string $certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, ?array $headers, int $flags = PKCS7_DETACHED, ?string $untrusted_certificates_filename = null): bool {}

	/**
	 * Verifies the signature of an S/MIME signed message
	 * <p><b>openssl_pkcs7_verify()</b> reads the S/MIME message contained in the given file and examines the digital signature.</p>
	 * @param string $input_filename <p>Path to the message.</p>
	 * @param int $flags <p><code>flags</code> can be used to affect how the signature is verified - see PKCS7 constants for more information.</p>
	 * @param ?string $signers_certificates_filename <p>If the <code>signers_certificates_filename</code> is specified, it should be a string holding the name of a file into which the certificates of the persons that signed the messages will be stored in PEM format.</p>
	 * @param array $ca_info <p>If the <code>ca_info</code> is specified, it should hold information about the trusted CA certificates to use in the verification process - see certificate verification for more information about this parameter.</p>
	 * @param ?string $untrusted_certificates_filename <p>If the <code>untrusted_certificates_filename</code> is specified, it is the filename of a file containing a bunch of certificates to use as untrusted CAs.</p>
	 * @param ?string $content <p>You can specify a filename with <code>content</code> that will be filled with the verified data, but with the signature information stripped.</p>
	 * @param ?string $output_filename
	 * @return bool|int <p>Returns <b><code>true</code></b> if the signature is verified, <b><code>false</code></b> if it is not correct (the message has been tampered with, or the signing certificate is invalid), or -1 on error.</p>
	 * @link https://php.net/manual/en/function.openssl-pkcs7-verify.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkcs7_verify(string $input_filename, int $flags, ?string $signers_certificates_filename = null, array $ca_info = [], ?string $untrusted_certificates_filename = null, ?string $content = null, ?string $output_filename = null): bool|int {}

	/**
	 * Computes shared secret for public value of remote and local DH or ECDH key
	 * <p><b>openssl_pkey_derive()</b> takes a set of a <code>public_key</code> and <code>private_key</code> and derives a shared secret, for either DH or EC keys.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p><code>public_key</code> is the public key for the derivation. See Public/Private Key parameters for a list of valid values.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>private_key</code> is the private key for the derivation. See Public/Private Key parameters for a list of valid values.</p>
	 * @param int $key_length <p>If not zero, will set the desired length of the derived secret.</p>
	 * @return string|false <p>The derived secret on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-derive.php
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function openssl_pkey_derive(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, int $key_length = 0): string|false {}

	/**
	 * Gets an exportable representation of a key into a string
	 * <p><b>openssl_pkey_export()</b> exports <code>key</code> as a PEM encoded string and stores it into <code>output</code> (which is passed by reference).</p><p><b>Note</b>:  You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information. </p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $key
	 * @param string $output
	 * @param ?string $passphrase <p>The key is optionally protected by <code>passphrase</code>.</p>
	 * @param ?array $options <p><code>options</code> can be used to fine-tune the export process by specifying and/or overriding options for the openssl configuration file. See <code>openssl_csr_new()</code> for more information about <code>options</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-export.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkey_export(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $key, string &$output, ?string $passphrase = null, ?array $options = null): bool {}

	/**
	 * Gets an exportable representation of a key into a file
	 * <p><b>openssl_pkey_export_to_file()</b> saves an ascii-armoured (PEM encoded) rendition of <code>key</code> into the file named by <code>output_filename</code>.</p><p><b>Note</b>:  You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information. </p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $key
	 * @param string $output_filename <p>Path to the output file.</p>
	 * @param ?string $passphrase <p>The key can be optionally protected by a <code>passphrase</code>.</p>
	 * @param ?array $options <p><code>options</code> can be used to fine-tune the export process by specifying and/or overriding options for the openssl configuration file. See <code>openssl_csr_new()</code> for more information about <code>options</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-export-to-file.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkey_export_to_file(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $key, string $output_filename, ?string $passphrase = null, ?array $options = null): bool {}

	/**
	 * Frees a private key
	 * <p><b>Note</b>:</p><p>This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.</p><p>This function frees a private key created by <code>openssl_pkey_new()</code>.</p>
	 * @param \OpenSSLAsymmetricKey $key <p>Resource holding the key.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-free.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void {}

	/**
	 * Returns an array with the key details
	 * <p>This function returns the key details (bits, key, type).</p>
	 * @param \OpenSSLAsymmetricKey $key <p>Resource holding the key.</p>
	 * @return array|false <p>Returns an array with the key details in success or <b><code>false</code></b> in failure. Returned array has indexes <code>bits</code> (number of bits), <code>key</code> (string representation of the public key) and <code>type</code> (type of the key which is one of <b><code>OPENSSL_KEYTYPE_RSA</code></b>, <b><code>OPENSSL_KEYTYPE_DSA</code></b>, <b><code>OPENSSL_KEYTYPE_DH</code></b>, <b><code>OPENSSL_KEYTYPE_EC</code></b> or -1 meaning unknown).</p><p>Depending on the key type used, additional details may be returned. Note that some elements may not always be available.</p><ul> <li>  <b><code>OPENSSL_KEYTYPE_RSA</code></b>, an additional array key named <code>"rsa"</code>, containing the key data is returned.     Key Description     <code>"n"</code> modulus   <code>"e"</code> public exponent   <code>"d"</code> private exponent   <code>"p"</code> prime 1   <code>"q"</code> prime 2   <code>"dmp1"</code> exponent1, d mod (p-1)   <code>"dmq1"</code> exponent2, d mod (q-1)   <code>"iqmp"</code> coefficient, (inverse of q) mod p    </li> <li>  <b><code>OPENSSL_KEYTYPE_DSA</code></b>, an additional array key named <code>"dsa"</code>, containing the key data is returned.     Key Description     <code>"p"</code> prime number (public)   <code>"q"</code> 160-bit subprime, q | p-1 (public)   <code>"g"</code> generator of subgroup (public)   <code>"priv_key"</code> private key x   <code>"pub_key"</code> public key y = g^x    </li> <li>  <b><code>OPENSSL_KEYTYPE_DH</code></b>, an additional array key named <code>"dh"</code>, containing the key data is returned.     Key Description     <code>"p"</code> prime number (shared)   <code>"g"</code> generator of Z_p (shared)   <code>"priv_key"</code> private DH value x   <code>"pub_key"</code> public DH value g^x    </li> <li>  <b><code>OPENSSL_KEYTYPE_EC</code></b>, an additional array key named <code>"ec"</code>, containing the key data is returned.     Key Description     <code>"curve_name"</code> name of curve, see <code>openssl_get_curve_names()</code>   <code>"curve_oid"</code> ASN1 Object identifier (OID) for EC curve.   <code>"x"</code> x coordinate (public)   <code>"y"</code> y coordinate (public)   <code>"d"</code> private key    </li> </ul>
	 * @link https://php.net/manual/en/function.openssl-pkey-get-details.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function openssl_pkey_get_details(\OpenSSLAsymmetricKey $key): array|false {}

	/**
	 * Get a private key
	 * <p><b>openssl_pkey_get_private()</b> parses <code>private_key</code> and prepares it for use by other functions.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>private_key</code> can be one of the following:</p><ol> <li>a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/private key (it may contain both).  </li> <li>A PEM formatted private key.</li> </ol>
	 * @param ?string $passphrase <p>The optional parameter <code>passphrase</code> must be used if the specified key is encrypted (protected by a passphrase).</p>
	 * @return OpenSSLAsymmetricKey|false <p>Returns an <code>OpenSSLAsymmetricKey</code> instance on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-get-private.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkey_get_private(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, ?string $passphrase = null): \OpenSSLAsymmetricKey|false {}

	/**
	 * Extract public key from certificate and prepare it for use
	 * <p><b>openssl_pkey_get_public()</b> extracts the public key from <code>public_key</code> and prepares it for use by other functions.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p><code>public_key</code> can be one of the following:</p><ol> <li>an <code>OpenSSLAsymmetricKey</code> instance</li> <li>a string having the format file://path/to/file.pem. The named file must contain a PEM encoded certificate/public key (it may contain both).  </li> <li>A PEM formatted public key.</li> </ol>
	 * @return OpenSSLAsymmetricKey|false <p>Returns an <code>OpenSSLAsymmetricKey</code> instance on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-get-public.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkey_get_public(\OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key): \OpenSSLAsymmetricKey|false {}

	/**
	 * Generates a new private key
	 * <p><b>openssl_pkey_new()</b> generates a new private key. How to obtain the public component of the key is shown in an example below.</p><p><b>Note</b>:  You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information. </p>
	 * @param ?array $options <p>You can finetune the key generation (such as specifying the number of bits) using <code>options</code>. See <code>openssl_csr_new()</code> for more information about <code>options</code>.</p>
	 * @return OpenSSLAsymmetricKey|false <p>Returns an <code>OpenSSLAsymmetricKey</code> instance for the pkey on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.openssl-pkey-new.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_pkey_new(?array $options = null): \OpenSSLAsymmetricKey|false {}

	/**
	 * Decrypts data with private key
	 * <p><b>openssl_private_decrypt()</b> decrypts <code>data</code> that was previously encrypted via <code>openssl_public_encrypt()</code> and stores the result into <code>decrypted_data</code>.</p><p>You can use this function e.g. to decrypt data which is supposed to only be available to you.</p>
	 * @param string $data
	 * @param string $decrypted_data
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>private_key</code> must be the private key corresponding that was used to encrypt the data.</p>
	 * @param int $padding <p><code>padding</code> can be one of <b><code>OPENSSL_PKCS1_PADDING</code></b>, <b><code>OPENSSL_SSLV23_PADDING</code></b>, <b><code>OPENSSL_PKCS1_OAEP_PADDING</code></b>, <b><code>OPENSSL_NO_PADDING</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-private-decrypt.php
	 * @see openssl_public_encrypt(), openssl_public_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_private_decrypt(string $data, string &$decrypted_data, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * Encrypts data with private key
	 * <p><b>openssl_private_encrypt()</b> encrypts <code>data</code> with private <code>private_key</code> and stores the result into <code>encrypted_data</code>. Encrypted data can be decrypted via <code>openssl_public_decrypt()</code>.</p><p>This function can be used e.g. to sign data (or its hash) to prove that it is not written by someone else.</p>
	 * @param string $data
	 * @param string $encrypted_data
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key
	 * @param int $padding <p><code>padding</code> can be one of <b><code>OPENSSL_PKCS1_PADDING</code></b>, <b><code>OPENSSL_NO_PADDING</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-private-encrypt.php
	 * @see openssl_public_encrypt(), openssl_public_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_private_encrypt(string $data, string &$encrypted_data, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * Decrypts data with public key
	 * <p><b>openssl_public_decrypt()</b> decrypts <code>data</code> that was previous encrypted via <code>openssl_private_encrypt()</code> and stores the result into <code>decrypted_data</code>.</p><p>You can use this function e.g. to check if the message was written by the owner of the private key.</p>
	 * @param string $data
	 * @param string $decrypted_data
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p><code>public_key</code> must be the public key corresponding that was used to encrypt the data.</p>
	 * @param int $padding <p><code>padding</code> can be one of <b><code>OPENSSL_PKCS1_PADDING</code></b>, <b><code>OPENSSL_NO_PADDING</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-public-decrypt.php
	 * @see openssl_private_encrypt(), openssl_private_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_public_decrypt(string $data, string &$decrypted_data, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * Encrypts data with public key
	 * <p><b>openssl_public_encrypt()</b> encrypts <code>data</code> with public <code>public_key</code> and stores the result into <code>encrypted_data</code>. Encrypted data can be decrypted via <code>openssl_private_decrypt()</code>.</p><p>This function can be used e.g. to encrypt message which can be then read only by owner of the private key. It can be also used to store secure data in database.</p>
	 * @param string $data
	 * @param string $encrypted_data <p>This will hold the result of the encryption.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p>The public key.</p>
	 * @param int $padding <p><code>padding</code> can be one of <b><code>OPENSSL_PKCS1_PADDING</code></b>, <b><code>OPENSSL_SSLV23_PADDING</code></b>, <b><code>OPENSSL_PKCS1_OAEP_PADDING</code></b>, <b><code>OPENSSL_NO_PADDING</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-public-encrypt.php
	 * @see openssl_private_encrypt(), openssl_private_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_public_encrypt(string $data, string &$encrypted_data, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * Generate a pseudo-random string of bytes
	 * <p>Generates a <code>string</code> of pseudo-random bytes, with the number of bytes determined by the <code>length</code> parameter.</p><p>It also indicates if a cryptographically strong algorithm was used to produce the pseudo-random bytes, and does this via the optional <code>strong_result</code> parameter. It's rare for this to be <b><code>false</code></b>, but some systems may be broken or old.</p>
	 * @param int $length <p>The length of the desired string of bytes. Must be a positive integer less than or equal to <code>2147483647</code>. PHP will try to cast this parameter to a non-null integer to use it.</p>
	 * @param bool $strong_result <p>If passed into the function, this will hold a <code>bool</code> value that determines if the algorithm used was "cryptographically strong", e.g., safe for usage with GPG, passwords, etc. <b><code>true</code></b> if it did, otherwise <b><code>false</code></b></p>
	 * @return string <p>Returns the generated <code>string</code> of bytes.</p>
	 * @link https://php.net/manual/en/function.openssl-random-pseudo-bytes.php
	 * @see random_bytes(), bin2hex(), crypt(), random_int()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function openssl_random_pseudo_bytes(int $length, bool &$strong_result = null): string {}

	/**
	 * Seal (encrypt) data
	 * <p><b>openssl_seal()</b> seals (encrypts) <code>data</code> by using the given <code>cipher_algo</code> with a randomly generated secret key. The key is encrypted with each of the public keys associated with the identifiers in <code>public_key</code> and each encrypted key is returned in <code>encrypted_keys</code>. This means that one can send sealed data to multiple recipients (provided one has obtained their public keys). Each recipient must receive both the sealed data and the envelope key that was encrypted with the recipient's public key.</p>
	 * @param string $data <p>The data to seal.</p>
	 * @param string $sealed_data <p>The sealed data.</p>
	 * @param array $encrypted_keys <p>Array of encrypted keys.</p>
	 * @param array $public_key <p>Array of <code>OpenSSLAsymmetricKey</code> instances containing public keys.</p>
	 * @param string $cipher_algo <p>The cipher method.</p><b>Caution</b> <p>The default value (<code>'RC4'</code>) is considered insecure. It is strongly recommended to explicitly specify a secure cipher method.</p>
	 * @param string $iv <p>The initialization vector.</p>
	 * @return int|false <p>Returns the length of the sealed data on success, or <b><code>false</code></b> on error. If successful the sealed data is returned in <code>sealed_data</code>, and the envelope keys in <code>encrypted_keys</code>.</p>
	 * @link https://php.net/manual/en/function.openssl-seal.php
	 * @see openssl_open()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_seal(string $data, string &$sealed_data, array &$encrypted_keys, array $public_key, string $cipher_algo, string &$iv = null): int|false {}

	/**
	 * Generate signature
	 * <p><b>openssl_sign()</b> computes a signature for the specified <code>data</code> by generating a cryptographic digital signature using the private key associated with <code>private_key</code>. Note that the data itself is not encrypted.</p>
	 * @param string $data <p>The string of data you wish to sign</p>
	 * @param string $signature <p>If the call was successful the signature is returned in <code>signature</code>.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p><code>OpenSSLAsymmetricKey</code> - a key, returned by <code>openssl_get_privatekey()</code></p> <p><code>string</code> - a PEM formatted key</p>
	 * @param string|int $algorithm <p><code>int</code> - one of these Signature Algorithms.</p> <p><code>string</code> - a valid string returned by <code>openssl_get_md_methods()</code> example, "sha256WithRSAEncryption" or "sha384".</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-sign.php
	 * @see openssl_verify()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_sign(string $data, string &$signature, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1): bool {}

	/**
	 * Exports a valid PEM formatted public key signed public key and challenge
	 * <p>Exports PEM formatted public key from encoded signed public key and challenge</p>
	 * @param string $spki <p>Expects a valid signed public key and challenge</p>
	 * @return string|false <p>Returns the associated PEM formatted public key or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-spki-export.php
	 * @see openssl_spki_new(), openssl_spki_verify(), openssl_spki_export_challenge(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function openssl_spki_export(string $spki): string|false {}

	/**
	 * Exports the challenge associated with a signed public key and challenge
	 * <p>Exports challenge from encoded signed public key and challenge</p>
	 * @param string $spki <p>Expects a valid signed public key and challenge</p>
	 * @return string|false <p>Returns the associated challenge string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-spki-export-challenge.php
	 * @see openssl_spki_new(), openssl_spki_verify(), openssl_spki_export(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function openssl_spki_export_challenge(string $spki): string|false {}

	/**
	 * Generate a new signed public key and challenge
	 * <p>Generates a signed public key and challenge using specified hashing algorithm</p>
	 * @param \OpenSSLAsymmetricKey $private_key <p><code>private_key</code> should be set to a private key that was previously generated by <code>openssl_pkey_new()</code> (or otherwise obtained from the other openssl_pkey family of functions). The corresponding public portion of the key will be used to sign the CSR.</p>
	 * @param string $challenge <p>The challenge associated to associate with the SPKAC</p>
	 * @param int $digest_algo <p>The digest algorithm. See openssl_get_md_method().</p>
	 * @return string|false <p>Returns a signed public key and challenge string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-spki-new.php
	 * @see openssl_spki_verify(), openssl_spki_export_challenge(), openssl_spki_export(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function openssl_spki_new(\OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = OPENSSL_ALGO_MD5): string|false {}

	/**
	 * Verifies a signed public key and challenge
	 * <p>Validates the supplied signed public key and challenge</p>
	 * @param string $spki <p>Expects a valid signed public key and challenge</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-spki-verify.php
	 * @see openssl_spki_new(), openssl_spki_export_challenge(), openssl_spki_export(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function openssl_spki_verify(string $spki): bool {}

	/**
	 * Verify signature
	 * <p><b>openssl_verify()</b> verifies that the <code>signature</code> is correct for the specified <code>data</code> using the public key associated with <code>public_key</code>. This must be the public key corresponding to the private key used for signing.</p>
	 * @param string $data <p>The string of data used to generate the signature previously</p>
	 * @param string $signature <p>A raw binary string, generated by <code>openssl_sign()</code> or similar means</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p><code>OpenSSLAsymmetricKey</code> - a key, returned by <code>openssl_get_publickey()</code></p> <p><code>string</code> - a PEM formatted key, example, "-----BEGIN PUBLIC KEY----- MIIBCgK..."</p>
	 * @param string|int $algorithm <p><code>int</code> - one of these Signature Algorithms.</p> <p><code>string</code> - a valid string returned by <code>openssl_get_md_methods()</code> example, "sha1WithRSAEncryption" or "sha512".</p>
	 * @return int|false <p>Returns 1 if the signature is correct, 0 if it is incorrect, and -1 or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.openssl-verify.php
	 * @see openssl_sign()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function openssl_verify(string $data, string $signature, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1): int|false {}

	/**
	 * Checks if a private key corresponds to a certificate
	 * <p>Checks whether the given <code>private_key</code> is the private key that corresponds to <code>certificate</code>.</p><p>The function does not check if <code>private_key</code> is indeed a private key or not. It merely compares the public materials (e.g. exponent and modulus of an RSA key) and/or key parameters (e.g. EC params of an EC key) of a key pair.</p><p>This means, for example, that a public key could be given for <code>private_key</code> and the function may return <b><code>true</code></b>.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>The certificate.</p>
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key <p>The private key.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>private_key</code> is the private key that corresponds to <code>certificate</code>, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-check-private-key.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_check_private_key(\OpenSSLCertificate|string $certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $private_key): bool {}

	/**
	 * Verifies if a certificate can be used for a particular purpose
	 * <p><b>openssl_x509_checkpurpose()</b> examines a certificate to see if it can be used for the specified <code>purpose</code>.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>The examined certificate.</p>
	 * @param int $purpose <p></p> <b><b>openssl_x509_checkpurpose()</b> purposes</b>   Constant Description     X509_PURPOSE_SSL_CLIENT Can the certificate be used for the client side of an SSL connection&#63;   X509_PURPOSE_SSL_SERVER Can the certificate be used for the server side of an SSL connection&#63;   X509_PURPOSE_NS_SSL_SERVER Can the cert be used for Netscape SSL server&#63;   X509_PURPOSE_SMIME_SIGN Can the cert be used to sign S/MIME email&#63;   X509_PURPOSE_SMIME_ENCRYPT Can the cert be used to encrypt S/MIME email&#63;   X509_PURPOSE_CRL_SIGN Can the cert be used to sign a certificate revocation list (CRL)&#63;   X509_PURPOSE_ANY Can the cert be used for Any/All purposes&#63;    These options are not bitfields - you may specify one only!
	 * @param array $ca_info <p><code>ca_info</code> should be an array of trusted CA files/dirs as described in Certificate Verification.</p>
	 * @param ?string $untrusted_certificates_file <p>If specified, this should be the name of a PEM encoded file holding certificates that can be used to help verify the certificate, although no trust is placed in the certificates that come from that file.</p>
	 * @return bool|int <p>Returns <b><code>true</code></b> if the certificate can be used for the intended purpose, <b><code>false</code></b> if it cannot, or -1 on error.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-checkpurpose.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_checkpurpose(\OpenSSLCertificate|string $certificate, int $purpose, array $ca_info = [], ?string $untrusted_certificates_file = null): bool|int {}

	/**
	 * Exports a certificate as a string
	 * <p><b>openssl_x509_export()</b> stores <code>certificate</code> into a string named by <code>output</code> in a PEM encoded format.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param string $output <p>On success, this will hold the PEM.</p>
	 * @param bool $no_text <p>The optional parameter <code>notext</code> affects the verbosity of the output; if it is <b><code>false</code></b>, then additional human-readable information is included in the output. The default value of <code>notext</code> is <b><code>true</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-export.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_export(\OpenSSLCertificate|string $certificate, string &$output, bool $no_text = true): bool {}

	/**
	 * Exports a certificate to file
	 * <p><b>openssl_x509_export_to_file()</b> stores <code>certificate</code> into a file named by <code>output_filename</code> in a PEM encoded format.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param string $output_filename <p>Path to the output file.</p>
	 * @param bool $no_text <p>The optional parameter <code>notext</code> affects the verbosity of the output; if it is <b><code>false</code></b>, then additional human-readable information is included in the output. The default value of <code>notext</code> is <b><code>true</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-export-to-file.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_export_to_file(\OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true): bool {}

	/**
	 * Calculates the fingerprint, or digest, of a given X.509 certificate
	 * <p><b>openssl_x509_fingerprint()</b> returns the digest of <code>certificate</code> as a string.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param string $digest_algo <p>The digest method or hash algorithm to use, e.g. "sha256", one of <code>openssl_get_md_methods()</code>.</p>
	 * @param bool $binary <p>When set to <b><code>true</code></b>, outputs raw binary data. <b><code>false</code></b> outputs lowercase hexits.</p>
	 * @return string|false <p>Returns a string containing the calculated certificate fingerprint as lowercase hexits unless <code>binary</code> is set to <b><code>true</code></b> in which case the raw binary representation of the message digest is returned.</p><p>Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-fingerprint.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function openssl_x509_fingerprint(\OpenSSLCertificate|string $certificate, string $digest_algo = "sha1", bool $binary = false): string|false {}

	/**
	 * Free certificate resource
	 * <p><b>Note</b>:</p><p>This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.</p><p><b>openssl_x509_free()</b> frees the certificate associated with the specified <code>certificate</code> resource from memory.</p>
	 * @param \OpenSSLCertificate $certificate
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-free.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_free(\OpenSSLCertificate $certificate): void {}

	/**
	 * Parse an X509 certificate and return the information as an array
	 * <p><b>openssl_x509_parse()</b> returns information about the supplied <code>certificate</code>, including fields such as subject name, issuer name, purposes, valid from and valid to dates etc.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>X509 certificate. See Key/Certificate parameters for a list of valid values.</p>
	 * @param bool $short_names <p><code>short_names</code> controls how the data is indexed in the array - if <code>short_names</code> is <b><code>true</code></b> (the default) then fields will be indexed with the short name form, otherwise, the long name form will be used - e.g.: CN is the shortname form of commonName.</p>
	 * @return array|false <p><i>The structure of the returned data is (deliberately) not yet documented, as it is still subject to change.</i></p>
	 * @link https://php.net/manual/en/function.openssl-x509-parse.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_parse(\OpenSSLCertificate|string $certificate, bool $short_names = true): array|false {}

	/**
	 * Parse an X.509 certificate and return an object for it
	 * <p><b>openssl_x509_read()</b> parses the certificate supplied by <code>certificate</code> and returns an <code>OpenSSLCertificate</code> object for it.</p>
	 * @param \OpenSSLCertificate|string $certificate <p>X509 certificate. See Key/Certificate parameters for a list of valid values.</p>
	 * @return OpenSSLCertificate|false <p>Returns an <code>OpenSSLCertificate</code> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-read.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function openssl_x509_read(\OpenSSLCertificate|string $certificate): \OpenSSLCertificate|false {}

	/**
	 * Verifies digital signature of x509 certificate against a public key
	 * <p><b>openssl_x509_verify()</b> verifies that the <code>certificate</code> certificate was signed by the private key corresponding to public key <code>public_key</code>.</p>
	 * @param \OpenSSLCertificate|string $certificate
	 * @param \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key <p><code>OpenSSLAsymmetricKey</code> - a key, returned by <code>openssl_get_publickey()</code></p> <p><code>string</code> - a PEM formatted key, example, "-----BEGIN PUBLIC KEY----- MIIBCgK..."</p>
	 * @return int <p>Returns 1 if the signature is correct, 0 if it is incorrect, and -1 on error.</p>
	 * @link https://php.net/manual/en/function.openssl-x509-verify.php
	 * @see openssl_verify(), openssl_get_publickey()
	 * @since PHP 7 >= 7.4.0, PHP 8
	 */
	function openssl_x509_verify(\OpenSSLCertificate|string $certificate, \OpenSSLAsymmetricKey|\OpenSSLCertificate|array|string $public_key): int {}

}
