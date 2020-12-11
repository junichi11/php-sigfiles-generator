<?php



namespace {

	/**
	 * <p>This class provides an object oriented interface into the fileinfo functions.</p>
	 * @link https://php.net/manual/en/class.finfo.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
	 */
	class finfo {

		/**
		 * Alias of finfo_open()
		 * <p>This function is an alias of: <code>finfo_open()</code></p>
		 * @param int $flags <p>One or disjunction of more Fileinfo constants.</p>
		 * @param string $magic_database <p>Name of a magic database file, usually something like /path/to/magic.mime. If not specified, the <code>MAGIC</code> environment variable is used. If the environment variable isn't set, then PHP's bundled magic database will be used.</p> <p>Passing <b><code>NULL</code></b> or an empty string will be equivalent to the default value.</p>
		 * @return resource|false
		 * @link https://php.net/manual/en/finfo.construct.php
		 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
		 */
		function __construct(int $flags = FILEINFO_NONE, string $magic_database = "") {}

		/**
		 * Alias of finfo_buffer()
		 * <p>This function is an alias of: finfo_buffer()</p>
		 * @link https://php.net/manual/en/finfo.buffer.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
		 */
		function buffer() {}

		/**
		 * Alias of finfo_file()
		 * <p>This function is an alias of: finfo_file()</p>
		 * @link https://php.net/manual/en/finfo.file.php
		 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
		 */
		function file() {}

		/**
		 * Alias of finfo_set_flags()
		 * <p>This function is an alias of: finfo_set_flags()</p>
		 * @link https://php.net/manual/en/finfo.set-flags.php
		 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
		 */
		function set_flags() {}
	}

	/**
	 * Return information about a string buffer
	 * <p>This function is used to get information about binary data in a string.</p>
	 * @param resource $finfo <p>Fileinfo resource returned by <code>finfo_open()</code>.</p>
	 * @param string $string <p>Content of a file to be checked.</p>
	 * @param int $flags <p>One or disjunction of more Fileinfo constants.</p>
	 * @param resource|null $context
	 * @return string|false <p>Returns a textual description of the <code>string</code> argument, or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/function.finfo-buffer.php
	 * @see finfo_file()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
	 */
	function finfo_buffer($finfo, string $string, int $flags = FILEINFO_NONE, $context = NULL) {}

	/**
	 * Close fileinfo resource
	 * <p>This function closes the resource opened by <code>finfo_open()</code>.</p>
	 * @param resource $finfo <p>Fileinfo resource returned by <code>finfo_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.finfo-close.php
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function finfo_close($finfo): bool {}

	/**
	 * Return information about a file
	 * <p>This function is used to get information about a file.</p>
	 * @param resource $finfo <p>Fileinfo resource returned by <code>finfo_open()</code>.</p>
	 * @param string $filename <p>Name of a file to be checked.</p>
	 * @param int $flags <p>One or disjunction of more Fileinfo constants.</p>
	 * @param resource|null $context <p>For a description of <code>contexts</code>, refer to Stream Functions.</p>
	 * @return string|false <p>Returns a textual description of the contents of the <code>filename</code> argument, or <b><code>FALSE</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/function.finfo-file.php
	 * @see finfo_buffer()
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function finfo_file($finfo, string $filename, int $flags = FILEINFO_NONE, $context = NULL) {}

	/**
	 * Create a new fileinfo resource
	 * <p>This function opens a magic database and returns its resource.</p>
	 * @param int $flags <p>One or disjunction of more Fileinfo constants.</p>
	 * @param string $magic_database <p>Name of a magic database file, usually something like /path/to/magic.mime. If not specified, the <code>MAGIC</code> environment variable is used. If the environment variable isn't set, then PHP's bundled magic database will be used.</p> <p>Passing <b><code>NULL</code></b> or an empty string will be equivalent to the default value.</p>
	 * @return resource|false <p>(Procedural style only) Returns a magic database resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.finfo-open.php
	 * @see finfo_close()
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function finfo_open(int $flags = FILEINFO_NONE, string $magic_database = "") {}

	/**
	 * Set libmagic configuration options
	 * <p>This function sets various Fileinfo options. Options can be set also directly in <code>finfo_open()</code> or other Fileinfo functions.</p>
	 * @param resource $finfo <p>Fileinfo resource returned by <code>finfo_open()</code>.</p>
	 * @param int $flags <p>One or disjunction of more Fileinfo constants.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.finfo-set-flags.php
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function finfo_set_flags($finfo, int $flags): bool {}

	/**
	 * Detect MIME Content-type for a file
	 * <p>Returns the MIME content type for a file as determined by using information from the magic.mime file.</p>
	 * @param resource|string $filename <p>Path to the tested file.</p>
	 * @return string|false <p>Returns the content type in MIME format, like <code>text/plain</code> or <code>application/octet-stream</code>, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mime-content-type.php
	 * @see finfo_file(), finfo_buffer()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function mime_content_type($filename) {}

	/**
	 * Decompress compressed files.   Disabled since PHP 5.3.0 due to thread safety issues.
	 */
	define('FILEINFO_COMPRESS', null);

	/**
	 * Return all matches, not just the first.
	 */
	define('FILEINFO_CONTINUE', 32);

	/**
	 * Look at the contents of blocks or character special devices.
	 */
	define('FILEINFO_DEVICES', 8);

	/**
	 * Returns the file extension appropriate for the MIME type detected in the file.   For types that commonly have multiple file extensions, such as <code>JPEG</code> images, then the return value is multiple extensions separated by a forward slash e.g.: <code>"jpeg/jpg/jpe/jfif"</code>. For unknown types not available in the magic.mime database, then return value is <code>"&#63;&#63;&#63;"</code>.   Available since PHP 7.2.0.
	 */
	define('FILEINFO_EXTENSION', 16777216);

	/**
	 * Return the mime type and mime encoding as defined by RFC 2045.
	 */
	define('FILEINFO_MIME', 1040);

	/**
	 * Return the mime encoding of the file.   Available since PHP 5.3.0.
	 */
	define('FILEINFO_MIME_ENCODING', 1024);

	/**
	 * Return the mime type.   Available since PHP 5.3.0.
	 */
	define('FILEINFO_MIME_TYPE', 16);

	/**
	 * No special handling.
	 */
	define('FILEINFO_NONE', 0);

	/**
	 * If possible preserve the original access time.
	 */
	define('FILEINFO_PRESERVE_ATIME', 128);

	/**
	 * Don't translate unprintable characters to a <code>\ooo</code> octal representation.
	 */
	define('FILEINFO_RAW', 256);

	/**
	 * Follow symlinks.
	 */
	define('FILEINFO_SYMLINK', 2);

}
