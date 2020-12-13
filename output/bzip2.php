<?php



namespace {

	/**
	 * Close a bzip2 file
	 * <p>Closes the given bzip2 file pointer.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.bzclose.php
	 * @see bzopen()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzclose($bz): bool {}

	/**
	 * Compress a string into bzip2 encoded data
	 * <p><b>bzcompress()</b> compresses the given string and returns it as bzip2 encoded data.</p>
	 * @param string $data <p>The string to compress.</p>
	 * @param int $block_size <p>Specifies the blocksize used during compression and should be a number from 1 to 9 with 9 giving the best compression, but using more resources to do so.</p>
	 * @param int $work_factor <p>Controls how the compression phase behaves when presented with worst case, highly repetitive, input data. The value can be between 0 and 250 with 0 being a special case.</p> <p>Regardless of the <code>work_factor</code>, the generated output is the same.</p>
	 * @return string|int <p>The compressed string, or an error number if an error occurred.</p>
	 * @link https://php.net/manual/en/function.bzcompress.php
	 * @see bzdecompress()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzcompress(string $data, int $block_size = 4, int $work_factor = 0): string|int {}

	/**
	 * Decompresses bzip2 encoded data
	 * <p><b>bzdecompress()</b> decompresses the given string containing bzip2 encoded data.</p>
	 * @param string $data <p>The string to decompress.</p>
	 * @param bool $use_less_memory <p>If <b><code>TRUE</code></b>, an alternative decompression algorithm will be used which uses less memory (the maximum memory requirement drops to around 2300K) but works at roughly half the speed.</p> <p>See the bzip2 documentation for more information about this feature.</p>
	 * @return string|int|false <p>The decompressed string, or <b><code>FALSE</code></b> or an error number if an error occurred.</p>
	 * @link https://php.net/manual/en/function.bzdecompress.php
	 * @see bzcompress()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzdecompress(string $data, bool $use_less_memory = FALSE): string|int|false {}

	/**
	 * Returns a bzip2 error number
	 * <p>Returns the error number of any bzip2 error returned by the given file pointer.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @return int <p>Returns the error number as an integer.</p>
	 * @link https://php.net/manual/en/function.bzerrno.php
	 * @see bzerror(), bzerrstr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzerrno($bz): int {}

	/**
	 * Returns the bzip2 error number and error string in an array
	 * <p>Returns the error number and error string of any bzip2 error returned by the given file pointer.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @return array <p>Returns an associative array, with the error code in the <code>errno</code> entry, and the error message in the <code>errstr</code> entry.</p>
	 * @link https://php.net/manual/en/function.bzerror.php
	 * @see bzerrno(), bzerrstr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzerror($bz): array {}

	/**
	 * Returns a bzip2 error string
	 * <p>Gets the error string of any bzip2 error returned by the given file pointer.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @return string <p>Returns a string containing the error message.</p>
	 * @link https://php.net/manual/en/function.bzerrstr.php
	 * @see bzerrno(), bzerror()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzerrstr($bz): string {}

	/**
	 * Force a write of all buffered data
	 * <p>Forces a write of all buffered bzip2 data for the file pointer <code>bz</code>.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.bzflush.php
	 * @see bzread(), bzwrite()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzflush($bz): bool {}

	/**
	 * Opens a bzip2 compressed file
	 * <p><b>bzopen()</b> opens a bzip2 (.bz2) file for reading or writing.</p>
	 * @param string|resource $file <p>The name of the file to open, or an existing stream resource.</p>
	 * @param string $mode <p>The modes <code>'r'</code> (read), and <code>'w'</code> (write) are supported. Everything else will cause <b>bzopen()</b> to return <b><code>FALSE</code></b>.</p>
	 * @return resource|false <p>If the open fails, <b>bzopen()</b> returns <b><code>FALSE</code></b>, otherwise it returns a pointer to the newly opened file.</p>
	 * @link https://php.net/manual/en/function.bzopen.php
	 * @see bzclose()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzopen($file, string $mode) {}

	/**
	 * Binary safe bzip2 file read
	 * <p><b>bzread()</b> reads from the given bzip2 file pointer.</p><p>Reading stops when <code>length</code> (uncompressed) bytes have been read or EOF is reached, whichever comes first.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @param int $length <p>If not specified, <b>bzread()</b> will read 1024 (uncompressed) bytes at a time. A maximum of 8192 uncompressed bytes will be read at a time.</p>
	 * @return string|false <p>Returns the uncompressed data, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.bzread.php
	 * @see bzwrite(), feof(), bzopen()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzread($bz, int $length = 1024): string|false {}

	/**
	 * Binary safe bzip2 file write
	 * <p><b>bzwrite()</b> writes a string into the given bzip2 file stream.</p>
	 * @param resource $bz <p>The file pointer. It must be valid and must point to a file successfully opened by <code>bzopen()</code>.</p>
	 * @param string $data <p>The written data.</p>
	 * @param int|null $length <p>If supplied, writing will stop after <code>length</code> (uncompressed) bytes have been written or the end of <code>data</code> is reached, whichever comes first.</p>
	 * @return int|false <p>Returns the number of bytes written, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.bzwrite.php
	 * @see bzread(), bzopen()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzwrite($bz, string $data, int|null $length = NULL): int|false {}

}
