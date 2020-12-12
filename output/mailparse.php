<?php



namespace {

	/**
	 * Gets the best way of encoding
	 * <p>Figures out the best way of encoding the content read from the given file pointer.</p>
	 * @param resource $fp <p>A valid file pointer, which must be seek-able.</p>
	 * @return string <p>Returns one of the character encodings supported by the mbstring module.</p>
	 * @link https://php.net/manual/en/function.mailparse-determine-best-xfer-encoding.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_determine_best_xfer_encoding($fp): string {}

	/**
	 * Create a mime mail resource
	 * <p>Create a <code>MIME</code> mail resource.</p>
	 * @return resource <p>Returns a handle that can be used to parse a message.</p>
	 * @link https://php.net/manual/en/function.mailparse-msg-create.php
	 * @see mailparse_msg_free(), mailparse_msg_parse_file()
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_create() {}

	/**
	 * Extracts/decodes a message section
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource.</p>
	 * @param string $msgbody
	 * @param callable $callbackfunc
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.mailparse-msg-extract-part.php
	 * @see mailparse_msg_extract_part_file(), mailparse_msg_extract_whole_part_file()
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_extract_part($mimemail, string $msgbody, callable $callbackfunc = NULL): void {}

	/**
	 * Extracts/decodes a message section
	 * <p>Extracts/decodes a message section from the supplied filename.</p><p>The contents of the section will be decoded according to their transfer encoding - base64, quoted-printable and uuencoded text are supported.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource, created with <code>mailparse_msg_create()</code>.</p>
	 * @param mixed $filename <p>Can be a file name or a valid stream resource.</p>
	 * @param callable $callbackfunc <p>If set, this must be either a valid callback that will be passed the extracted section, or <b><code>NULL</code></b> to make this function return the extracted section.</p> <p>If not specified, the contents will be sent to "stdout".</p>
	 * @return string <p>If <code>callbackfunc</code> is not <b><code>NULL</code></b> returns <b><code>TRUE</code></b> on success.</p><p>If <code>callbackfunc</code> is set to <b><code>NULL</code></b>, returns the extracted section as a string.</p><p>Returns <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mailparse-msg-extract-part-file.php
	 * @see mailparse_msg_extract_part(), mailparse_msg_extract_whole_part_file()
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_extract_part_file($mimemail, mixed $filename, callable $callbackfunc = NULL): string {}

	/**
	 * Extracts a message section including headers without decoding the transfer encoding
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource.</p>
	 * @param string $filename
	 * @param callable $callbackfunc
	 * @return string
	 * @link https://php.net/manual/en/function.mailparse-msg-extract-whole-part-file.php
	 * @see mailparse_msg_extract_part(), mailparse_msg_extract_part_file()
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_extract_whole_part_file($mimemail, string $filename, callable $callbackfunc = NULL): string {}

	/**
	 * Frees a MIME resource
	 * <p>Frees a <code>MIME</code> resource.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource allocated by <code>mailparse_msg_create()</code> or <code>mailparse_msg_parse_file()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mailparse-msg-free.php
	 * @see mailparse_msg_create(), mailparse_msg_parse_file()
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_free($mimemail): bool {}

	/**
	 * Returns a handle on a given section in a mimemessage
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource.</p>
	 * @param string $mimesection
	 * @return resource
	 * @link https://php.net/manual/en/function.mailparse-msg-get-part.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_get_part($mimemail, string $mimesection) {}

	/**
	 * Returns an associative array of info about the message
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.mailparse-msg-get-part-data.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_get_part_data($mimemail): array {}

	/**
	 * Returns an array of mime section names in the supplied message
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.mailparse-msg-get-structure.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_get_structure($mimemail): array {}

	/**
	 * Incrementally parse data into buffer
	 * <p>Incrementally parse data into the supplied mime mail resource.</p><p>This function allow you to stream portions of a file at a time, rather than read and parse the whole thing.</p>
	 * @param resource $mimemail <p>A valid <code>MIME</code> resource.</p>
	 * @param string $data <p><b>Note</b>:</p><p>The final chunk of <code>data</code> is supposed to end with a newline (<code>CRLF</code>); otherwise the last line of the message will not be parsed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mailparse-msg-parse.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_parse($mimemail, string $data): bool {}

	/**
	 * Parses a file
	 * <p>Parses a file. This is the optimal way of parsing a mail file that you have on disk.</p>
	 * @param string $filename <p>Path to the file holding the message. The file is opened and streamed through the parser.</p> <p><b>Note</b>:</p><p>The message contained in <code>filename</code> is supposed to end with a newline (<code>CRLF</code>); otherwise the last line of the message will not be parsed.</p>
	 * @return resource <p>Returns a <code>MIME</code> resource representing the structure, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.mailparse-msg-parse-file.php
	 * @see mailparse_msg_free(), mailparse_msg_create()
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_msg_parse_file(string $filename) {}

	/**
	 * Parse RFC 822 compliant addresses
	 * <p>Parses a RFC 822 compliant recipient list, such as that found in the <code>To:</code> header.</p>
	 * @param string $addresses <p>A string containing addresses, like in: <code>Wez Furlong &lt;wez@example.com&gt;, doe@example.com</code></p> <p><b>Note</b>:</p><p>This string must not include the header name.</p>
	 * @return array <p>Returns an array of associative arrays with the following keys for each recipient:</p>   <code>display</code>  The recipient name, for display purpose. If this part is not set for a recipient, this key will hold the same value as <code>address</code>.    <code>address</code> The email address   <code>is_group</code> <b><code>TRUE</code></b> if the recipient is a newsgroup, <b><code>FALSE</code></b> otherwise.
	 * @link https://php.net/manual/en/function.mailparse-rfc822-parse-addresses.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_rfc822_parse_addresses(string $addresses): array {}

	/**
	 * Streams data from source file pointer, apply encoding and write to destfp
	 * <p>Streams data from the source file pointer, apply <code>encoding</code> and write to the destination file pointer.</p>
	 * @param resource $sourcefp <p>A valid file handle. The file is streamed through the parser.</p>
	 * @param resource $destfp <p>The destination file handle in which the encoded data will be written.</p>
	 * @param string $encoding <p>One of the character encodings supported by the mbstring module.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mailparse-stream-encode.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_stream_encode($sourcefp, $destfp, string $encoding): bool {}

	/**
	 * Scans the data from fp and extract each embedded uuencoded file
	 * <p>Scans the data from the given file pointer and extract each embedded uuencoded file into a temporary file.</p>
	 * @param resource $fp <p>A valid file pointer.</p>
	 * @return array <p>Returns an array of associative arrays listing filename information.</p>   <code>filename</code> Path to the temporary file name created   <code>origfilename</code> The original filename, for uuencoded parts only    The first filename entry is the message body. The next entries are the decoded uuencoded files.
	 * @link https://php.net/manual/en/function.mailparse-uudecode-all.php
	 * @since PECL mailparse >= 0.9.0
	 */
	function mailparse_uudecode_all($fp): array {}

	define('MAILPARSE_EXTRACT_OUTPUT', null);

	define('MAILPARSE_EXTRACT_RETURN', null);

	define('MAILPARSE_EXTRACT_STREAM', null);

}
