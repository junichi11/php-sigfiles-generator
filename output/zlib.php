<?php



namespace {

	/**
	 * Incrementally deflate data
	 * <p>Incrementally deflates data in the specified context.</p>
	 * @param resource $context <p>A context created with <code>deflate_init()</code>.</p>
	 * @param string $data <p>A chunk of data to compress.</p>
	 * @param int $flush_mode <p>One of <b><code>ZLIB_BLOCK</code></b>, <b><code>ZLIB_NO_FLUSH</code></b>, <b><code>ZLIB_PARTIAL_FLUSH</code></b>, <b><code>ZLIB_SYNC_FLUSH</code></b> (default), <b><code>ZLIB_FULL_FLUSH</code></b>, <b><code>ZLIB_FINISH</code></b>. Normally you will want to set <b><code>ZLIB_NO_FLUSH</code></b> to maximize compression, and <b><code>ZLIB_FINISH</code></b> to terminate with the last chunk of data. See the zlib manual for a detailed description of these constants.</p>
	 * @return string <p>Returns a chunk of compressed data, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.deflate-add.php
	 * @see deflate_init()
	 * @since PHP 7
	 */
	function deflate_add($context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string {}

	/**
	 * Initialize an incremental deflate context
	 * <p>Initializes an incremental deflate context using the specified <code>encoding</code>.</p><p>Note that the <i>window</i> option here only sets the window size of the algorithm, differently from the zlib filters where the same parameter also sets the encoding to use; the encoding must be set with the <code>encoding</code> parameter.</p><p>Limitation: there is currently no way to set the header information on a GZIP compressed stream, which are set as follows: GZIP signature (<i>\x1f\x8B</i>); compression method (<i>\x08</i> == DEFLATE); 6 zero bytes; the operating system set to the current system (<i>\x00</i> = Windows, <i>\x03</i> = Unix, etc.)</p>
	 * @param int $encoding <p>One of the <b><code>ZLIB_ENCODING_&#42;</code></b> constants.</p>
	 * @param array $options <p>An associative array which may contain the following elements:</p>  level  <p>The compression level in range -1..9; defaults to -1.</p>   memory  <p>The compression memory level in range 1..9; defaults to 8.</p>   window  <p>The zlib window size (logarithmic) in range 8..15; defaults to 15.</p>   strategy  <p>One of <b><code>ZLIB_FILTERED</code></b>, <b><code>ZLIB_HUFFMAN_ONLY</code></b>, <b><code>ZLIB_RLE</code></b>, <b><code>ZLIB_FIXED</code></b> or <b><code>ZLIB_DEFAULT_STRATEGY</code></b> (the default).</p>   dictionary  <p>A <code>string</code> or an <code>array</code> of strings of the preset dictionary (default: no preset dictionary).</p>
	 * @return resource <p>Returns a deflate context resource (<i>zlib.deflate</i>) on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.deflate-init.php
	 * @see deflate_add(), inflate_init()
	 * @since PHP 7
	 */
	function deflate_init(int $encoding, array $options = array()) {}

	/**
	 * Close an open gz-file pointer
	 * <p>Closes the given gz-file pointer.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gzclose.php
	 * @see gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzclose($zp): bool {}

	/**
	 * Compress a string
	 * <p>This function compresses the given string using the <i>ZLIB</i> data format.</p><p>For details on the ZLIB compression algorithm see the document "ZLIB Compressed Data Format Specification version 3.3" (RFC 1950).</p><p><b>Note</b>:</p><p>This is <i>not</i> the same as gzip compression, which includes some header data. See <code>gzencode()</code> for gzip compression.</p>
	 * @param string $data <p>The data to compress.</p>
	 * @param int $level <p>The level of compression. Can be given as 0 for no compression up to 9 for maximum compression.</p> <p>If -1 is used, the default compression of the zlib library is used which is 6.</p>
	 * @param int $encoding <p>One of <b><code>ZLIB_ENCODING_&#42;</code></b> constants.</p>
	 * @return string <p>The compressed string or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.gzcompress.php
	 * @see gzdeflate(), gzinflate(), gzuncompress(), gzencode()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE): string {}

	/**
	 * Decodes a gzip compressed string
	 * <p>This function returns a decoded version of the input <code>data</code>.</p>
	 * @param string $data <p>The data to decode, encoded by <code>gzencode()</code>.</p>
	 * @param int $length <p>The maximum length of data to decode.</p>
	 * @return string <p>The decoded string, or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.gzdecode.php
	 * @see gzencode()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function gzdecode(string $data, int $length = NULL): string {}

	/**
	 * Deflate a string
	 * <p>This function compresses the given string using the <i>DEFLATE</i> data format.</p><p>For details on the DEFLATE compression algorithm see the document "DEFLATE Compressed Data Format Specification version 1.3" (RFC 1951).</p>
	 * @param string $data <p>The data to deflate.</p>
	 * @param int $level <p>The level of compression. Can be given as 0 for no compression up to 9 for maximum compression. If not given, the default compression level will be the default compression level of the zlib library.</p>
	 * @param int $encoding <p>One of <b><code>ZLIB_ENCODING_&#42;</code></b> constants.</p>
	 * @return string <p>The deflated string or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.gzdeflate.php
	 * @see gzinflate(), gzcompress(), gzuncompress(), gzencode()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW): string {}

	/**
	 * Create a gzip compressed string
	 * <p>This function returns a compressed version of the input <code>data</code> compatible with the output of the <b>gzip</b> program.</p><p>For more information on the GZIP file format, see the document: GZIP file format specification version 4.3 (RFC 1952).</p>
	 * @param string $data <p>The data to encode.</p>
	 * @param int $level <p>The level of compression. Can be given as 0 for no compression up to 9 for maximum compression. If not given, the default compression level will be the default compression level of the zlib library.</p>
	 * @param int $encoding_mode <p>The encoding mode. Can be <b><code>FORCE_GZIP</code></b> (the default) or <b><code>FORCE_DEFLATE</code></b>.</p> <p>Prior to PHP 5.4.0, using <b><code>FORCE_DEFLATE</code></b> results in a standard zlib deflated string (inclusive zlib headers) after a gzip file header but without the trailing crc32 checksum.</p> <p>In PHP 5.4.0 and later, <b><code>FORCE_DEFLATE</code></b> generates RFC 1950 compliant output, consisting of a zlib header, the deflated data, and an Adler checksum.</p>
	 * @return string <p>The encoded string, or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link http://php.net/manual/en/function.gzencode.php
	 * @see gzdecode(), gzdeflate(), gzinflate(), gzuncompress(), gzcompress()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gzencode(string $data, int $level = -1, int $encoding_mode = FORCE_GZIP): string {}

	/**
	 * Test for EOF on a gz-file pointer
	 * <p>Tests the given GZ file pointer for EOF.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @return int <p>Returns <b><code>TRUE</code></b> if the gz-file pointer is at EOF or an error occurs; otherwise returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.gzeof.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzeof($zp): int {}

	/**
	 * Read entire gz-file into an array
	 * <p>This function is identical to <code>readgzfile()</code>, except that it returns the file in an array.</p>
	 * @param string $filename <p>The file name.</p>
	 * @param int $use_include_path <p>You can set this optional parameter to <i>1</i>, if you want to search for the file in the include_path too.</p>
	 * @return array <p>An array containing the file, one line per cell, empty lines included, and with newlines still attached.</p>
	 * @link http://php.net/manual/en/function.gzfile.php
	 * @see readgzfile(), gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzfile(string $filename, int $use_include_path = 0): array {}

	/**
	 * Get character from gz-file pointer
	 * <p>Returns a string containing a single (uncompressed) character read from the given gz-file pointer.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @return string <p>The uncompressed character or <b><code>FALSE</code></b> on EOF (unlike <code>gzeof()</code>).</p>
	 * @link http://php.net/manual/en/function.gzgetc.php
	 * @see gzopen(), gzgets()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzgetc($zp): string {}

	/**
	 * Get line from file pointer
	 * <p>Gets a (uncompressed) string of up to length - 1 bytes read from the given file pointer. Reading ends when length - 1 bytes have been read, on a newline, or on EOF (whichever comes first).</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @param int $length <p>The length of data to get.</p>
	 * @return string <p>The uncompressed string, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.gzgets.php
	 * @see gzopen(), gzgetc(), gzwrite()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzgets($zp, int $length = NULL): string {}

	/**
	 * Get line from gz-file pointer and strip HTML tags
	 * <p>Identical to <code>gzgets()</code>, except that <b>gzgetss()</b> attempts to strip any HTML and PHP tags from the text it reads.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @param int $length <p>The length of data to get.</p>
	 * @param string $allowable_tags <p>You can use this optional parameter to specify tags which should not be stripped.</p>
	 * @return string <p>The uncompressed and stripped string, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.gzgetss.php
	 * @see gzopen(), gzgets(), strip_tags()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzgetss($zp, int $length, string $allowable_tags = NULL): string {}

	/**
	 * Inflate a deflated string
	 * <p>This function inflates a deflated string.</p>
	 * @param string $data <p>The data compressed by <code>gzdeflate()</code>.</p>
	 * @param int $length <p>The maximum length of data to decode.</p>
	 * @return string <p>The original uncompressed data or <b><code>FALSE</code></b> on error.</p><p>The function will return an error if the uncompressed data is more than 32768 times the length of the compressed input <code>data</code> or more than the optional parameter <code>length</code>.</p>
	 * @link http://php.net/manual/en/function.gzinflate.php
	 * @see gzdeflate(), gzcompress(), gzuncompress(), gzencode()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gzinflate(string $data, int $length = 0): string {}

	/**
	 * Open gz-file
	 * <p>Opens a gzip (.gz) file for reading or writing.</p><p><b>gzopen()</b> can be used to read a file which is not in gzip format; in this case <code>gzread()</code> will directly read from the file without decompression.</p>
	 * @param string $filename <p>The file name.</p>
	 * @param string $mode <p>As in <code>fopen()</code> (<i>rb</i> or <i>wb</i>) but can also include a compression level (<i>wb9</i>) or a strategy: <i>f</i> for filtered data as in <i>wb6f</i>, <i>h</i> for <i>Huffman only compression</i> as in <i>wb1h</i>. (See the description of <i>deflateInit2</i> in zlib.h for more information about the strategy parameter.)</p>
	 * @param int $use_include_path <p>You can set this optional parameter to <i>1</i>, if you want to search for the file in the include_path too.</p>
	 * @return resource <p>Returns a file pointer to the file opened, after that, everything you read from this file descriptor will be transparently decompressed and what you write gets compressed.</p><p>If the open fails, the function returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.gzopen.php
	 * @see gzclose()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzopen(string $filename, string $mode, int $use_include_path = 0) {}

	/**
	 * Output all remaining data on a gz-file pointer
	 * <p>Reads to EOF on the given gz-file pointer from the current position and writes the (uncompressed) results to standard output.</p><p><b>Note</b>:</p><p>You may need to call <code>gzrewind()</code> to reset the file pointer to the beginning of the file if you have already written data to it.</p><p>If you just want to dump the contents of a file to the output buffer, without first modifying it or seeking to a particular offset, you may want to use the <code>readgzfile()</code> function, which saves you the <code>gzopen()</code> call.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @return int <p>The number of uncompressed characters read from <code>gz</code> and passed through to the input, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.gzpassthru.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzpassthru($zp): int {}

	/**
	 * Alias of gzwrite()
	 * <p>This function is an alias of: <code>gzwrite()</code>.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @param string $string <p>The string to write.</p>
	 * @param int $length <p>The number of uncompressed bytes to write. If supplied, writing will stop after <code>length</code> (uncompressed) bytes have been written or the end of <code>string</code> is reached, whichever comes first.</p> <p><b>Note</b>:</p><p>Note that if the <code>length</code> argument is given, then the magic_quotes_runtime configuration option will be ignored and no slashes will be stripped from <code>string</code>.</p>
	 * @return int
	 * @link http://php.net/manual/en/function.gzputs.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzputs($zp, string $string, int $length = NULL): int {}

	/**
	 * Binary-safe gz-file read
	 * <p><b>gzread()</b> reads up to <code>length</code> bytes from the given gz-file pointer. Reading stops when <code>length</code> (uncompressed) bytes have been read or EOF is reached, whichever comes first.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @param int $length <p>The number of bytes to read.</p>
	 * @return string <p>The data that have been read.</p>
	 * @link http://php.net/manual/en/function.gzread.php
	 * @see gzwrite(), gzopen(), gzgets(), gzgetss(), gzfile(), gzpassthru()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzread($zp, int $length): string {}

	/**
	 * Rewind the position of a gz-file pointer
	 * <p>Sets the file position indicator of the given gz-file pointer to the beginning of the file stream.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.gzrewind.php
	 * @see gzseek(), gztell()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzrewind($zp): bool {}

	/**
	 * Seek on a gz-file pointer
	 * <p>Sets the file position indicator for the given file pointer to the given offset byte into the file stream. Equivalent to calling (in C) <i>gzseek(zp, offset, SEEK_SET)</i>.</p><p>If the file is opened for reading, this function is emulated but can be extremely slow. If the file is opened for writing, only forward seeks are supported; <b>gzseek()</b> then compresses a sequence of zeroes up to the new starting position.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @param int $offset <p>The seeked offset.</p>
	 * @param int $whence <p><code>whence</code> values are:</p><ul> <li><b><code>SEEK_SET</code></b> - Set position equal to <code>offset</code> bytes.</li> <li><b><code>SEEK_CUR</code></b> - Set position to current location plus <code>offset</code>.</li> </ul> <p>If <code>whence</code> is not specified, it is assumed to be <b><code>SEEK_SET</code></b>.</p>
	 * @return int <p>Upon success, returns 0; otherwise, returns -1. Note that seeking past EOF is not considered an error.</p>
	 * @link http://php.net/manual/en/function.gzseek.php
	 * @see gztell(), gzrewind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzseek($zp, int $offset, int $whence = SEEK_SET): int {}

	/**
	 * Tell gz-file pointer read/write position
	 * <p>Gets the position of the given file pointer; i.e., its offset into the uncompressed file stream.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @return int <p>The position of the file pointer or <b><code>FALSE</code></b> if an error occurs.</p>
	 * @link http://php.net/manual/en/function.gztell.php
	 * @see gzopen(), gzseek(), gzrewind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gztell($zp): int {}

	/**
	 * Uncompress a compressed string
	 * <p>This function uncompress a compressed string.</p>
	 * @param string $data <p>The data compressed by <code>gzcompress()</code>.</p>
	 * @param int $length <p>The maximum length of data to decode.</p>
	 * @return string <p>The original uncompressed data or <b><code>FALSE</code></b> on error.</p><p>The function will return an error if the uncompressed data is more than 32768 times the length of the compressed input <code>data</code> or more than the optional parameter <code>length</code>.</p>
	 * @link http://php.net/manual/en/function.gzuncompress.php
	 * @see gzcompress(), gzinflate(), gzdeflate(), gzencode()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function gzuncompress(string $data, int $length = 0): string {}

	/**
	 * Binary-safe gz-file write
	 * <p><b>gzwrite()</b> writes the contents of <code>string</code> to the given gz-file.</p>
	 * @param resource $zp <p>The gz-file pointer. It must be valid, and must point to a file successfully opened by <code>gzopen()</code>.</p>
	 * @param string $string <p>The string to write.</p>
	 * @param int $length <p>The number of uncompressed bytes to write. If supplied, writing will stop after <code>length</code> (uncompressed) bytes have been written or the end of <code>string</code> is reached, whichever comes first.</p> <p><b>Note</b>:</p><p>Note that if the <code>length</code> argument is given, then the magic_quotes_runtime configuration option will be ignored and no slashes will be stripped from <code>string</code>.</p>
	 * @return int <p>Returns the number of (uncompressed) bytes written to the given gz-file stream.</p>
	 * @link http://php.net/manual/en/function.gzwrite.php
	 * @see gzread(), gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzwrite($zp, string $string, int $length = NULL): int {}

	/**
	 * Incrementally inflate encoded data
	 * <p>Incrementally inflates encoded data in the specified <code>context</code>.</p><p>Limitation: header information from GZIP compressed data are not made available.</p>
	 * @param resource $context <p>A context created with <code>inflate_init()</code>.</p>
	 * @param string $encoded_data <p>A chunk of compressed data.</p>
	 * @param int $flush_mode <p>One of <b><code>ZLIB_BLOCK</code></b>, <b><code>ZLIB_NO_FLUSH</code></b>, <b><code>ZLIB_PARTIAL_FLUSH</code></b>, <b><code>ZLIB_SYNC_FLUSH</code></b> (default), <b><code>ZLIB_FULL_FLUSH</code></b>, <b><code>ZLIB_FINISH</code></b>. Normally you will want to set <b><code>ZLIB_NO_FLUSH</code></b> to maximize compression, and <b><code>ZLIB_FINISH</code></b> to terminate with the last chunk of data. See the zlib manual for a detailed description of these constants.</p>
	 * @return string <p>Returns a chunk of uncompressed data, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.inflate-add.php
	 * @see inflate_init()
	 * @since PHP 7
	 */
	function inflate_add($context, string $encoded_data, int $flush_mode = ZLIB_SYNC_FLUSH): string {}

	/**
	 * Get number of bytes read so far
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $resource
	 * @return int <p>Returns number of bytes read so far or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.inflate-get-read-len.php
	 * @since PHP 7 >= 7.2.0
	 */
	function inflate_get_read_len($resource): int {}

	/**
	 * Get decompression status
	 * <p>Usually returns either <b><code>ZLIB_OK</code></b> or <b><code>ZLIB_STREAM_END</code></b>.</p>
	 * @param resource $resource
	 * @return int <p>Returns decompression status or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.inflate-get-status.php
	 * @since PHP 7 >= 7.2.0
	 */
	function inflate_get_status($resource): int {}

	/**
	 * Initialize an incremental inflate context
	 * <p>Initialize an incremental inflate context with the specified <code>encoding</code>.</p>
	 * @param int $encoding <p>One of the <b><code>ZLIB_ENCODING_&#42;</code></b> constants.</p>
	 * @param array $options <p>An associative array which may contain the following elements:</p>  level  <p>The compression level in range -1..9; defaults to -1.</p>   memory  <p>The compression memory level in range 1..9; defaults to 8.</p>   window  <p>The zlib window size (logarithmic) in range 8..15; defaults to 15.</p>   strategy  <p>One of <b><code>ZLIB_FILTERED</code></b>, <b><code>ZLIB_HUFFMAN_ONLY</code></b>, <b><code>ZLIB_RLE</code></b>, <b><code>ZLIB_FIXED</code></b> or <b><code>ZLIB_DEFAULT_STRATEGY</code></b> (the default).</p>   dictionary  <p>A <code>string</code> or an <code>array</code> of strings of the preset dictionary (default: no preset dictionary).</p>
	 * @return resource <p>Returns an inflate context resource (<i>zlib.inflate</i>) on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.inflate-init.php
	 * @see inflate_add(), deflate_init()
	 * @since PHP 7
	 */
	function inflate_init(int $encoding, array $options = array()) {}

	/**
	 * Output a gz-file
	 * <p>Reads a file, decompresses it and writes it to standard output.</p><p><b>readgzfile()</b> can be used to read a file which is not in gzip format; in this case <b>readgzfile()</b> will directly read from the file without decompression.</p>
	 * @param string $filename <p>The file name. This file will be opened from the filesystem and its contents written to standard output.</p>
	 * @param int $use_include_path <p>You can set this optional parameter to <i>1</i>, if you want to search for the file in the include_path too.</p>
	 * @return int <p>Returns the number of (uncompressed) bytes read from the file. If an error occurs, <b><code>FALSE</code></b> is returned and unless the function was called as <i>@readgzfile</i>, an error message is printed.</p>
	 * @link http://php.net/manual/en/function.readgzfile.php
	 * @see gzpassthru(), gzfile(), gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readgzfile(string $filename, int $use_include_path = 0): int {}

	/**
	 * Uncompress any raw/gzip/zlib encoded data
	 * <p>Uncompress any raw/gzip/zlib encoded data.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $data
	 * @param string $max_decoded_len
	 * @return string <p>Returns the uncompressed data, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.zlib-decode.php
	 * @see zlib_encode()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function zlib_decode(string $data, string $max_decoded_len = NULL): string {}

	/**
	 * Compress data with the specified encoding
	 * <p>Compress data with the specified encoding.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $data <p>The data to compress.</p>
	 * @param int $encoding <p>The compression algorithm. Either <b><code>ZLIB_ENCODING_RAW</code></b>, <b><code>ZLIB_ENCODING_DEFLATE</code></b> or <b><code>ZLIB_ENCODING_GZIP</code></b>.</p>
	 * @param int $level
	 * @return string
	 * @link http://php.net/manual/en/function.zlib-encode.php
	 * @see zlib_decode()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function zlib_encode(string $data, int $encoding, int $level = -1): string {}

	/**
	 * Returns the coding type used for output compression
	 * <p>Returns the coding type used for output compression.</p>
	 * @return string <p>Possible return values are <i>gzip</i>, <i>deflate</i>, or <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.zlib-get-coding-type.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function zlib_get_coding_type(): string {}

	define('FORCE_DEFLATE', 15);

	define('FORCE_GZIP', 31);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_BLOCK', 5);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_DEFAULT_STRATEGY', 0);

	/**
	 * ZLIB compression algorithm as per RFC 1950. Available as of PHP 7.0.0.
	 */
	define('ZLIB_ENCODING_DEFLATE', 15);

	/**
	 * GZIP algorithm as per RFC 1952. Available as of PHP 7.0.0.
	 */
	define('ZLIB_ENCODING_GZIP', 31);

	/**
	 * DEFLATE algorithm as per RFC 1951. Available as of PHP 7.0.0.
	 */
	define('ZLIB_ENCODING_RAW', -15);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_FILTERED', 1);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_FINISH', 4);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_FIXED', 4);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_FULL_FLUSH', 3);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_HUFFMAN_ONLY', 2);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_NO_FLUSH', 0);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_PARTIAL_FLUSH', 1);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_RLE', 3);

	/**
	 * Available as of PHP 7.0.0.
	 */
	define('ZLIB_SYNC_FLUSH', 2);

}
