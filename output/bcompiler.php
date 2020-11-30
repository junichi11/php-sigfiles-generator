<?php



namespace {

	/**
	 * Reads and creates classes from a bz compressed file
	 * <p>Reads data from a bzcompressed file and creates classes from the bytecodes.</p>
	 * @param string $filename <p>The bzcompressed file path, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-load.php
	 * @see bcompiler_load_exe()
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_load(string $filename): bool {}

	/**
	 * Reads and creates classes from a bcompiler exe file
	 * <p>Reads data from a bcompiler exe file and creates classes from the bytecodes.</p>
	 * @param string $filename <p>The exe file path, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-load-exe.php
	 * @see bcompiler_load()
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_load_exe(string $filename): bool {}

	/**
	 * Reads the bytecodes of a class and calls back to a user function
	 * <p>Reads the bytecodes of a class and calls back to a user function.</p>
	 * @param string $class <p>The class name, as a string.</p>
	 * @param string $callback
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-parse-class.php
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_parse_class(string $class, string $callback): bool {}

	/**
	 * Reads and creates classes from a filehandle
	 * <p>Reads data from a open file handle and creates classes from the bytecodes.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-read.php
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_read($filehandle): bool {}

	/**
	 * Writes a defined class as bytecodes
	 * <p>Reads the bytecodes from PHP for an existing class, and writes them to the open file handle.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param string $className <p>The class name, as a string.</p>
	 * @param string $extends
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-class.php
	 * @see bcompiler_write_header(), bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_write_class($filehandle, string $className, string $extends = NULL): bool {}

	/**
	 * Writes a defined constant as bytecodes
	 * <p>Reads the bytecodes from PHP for an existing constant, and writes them to the open file handle.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param string $constantName <p>The name of the defined constant, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-constant.php
	 * @see bcompiler_write_header(), bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.5
	 */
	function bcompiler_write_constant($filehandle, string $constantName): bool {}

	/**
	 * Writes the start pos, and sig to the end of a exe type file
	 * <p>An EXE (or self executable) file consists of 3 parts:</p><p>To obtain a suitable stub you can compile php_embed-based stub phpe.c located in the examples/embed directory on bcompiler's CVS.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param int $startpos <p>The file position at which the Bytecodes start, and can be obtained using <code>ftell()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-exe-footer.php
	 * @see bcompiler_write_header(), bcompiler_write_class(), bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_write_exe_footer($filehandle, int $startpos): bool {}

	/**
	 * Writes a php source file as bytecodes
	 * <p>This function compiles specified source file into bytecodes, and writes them to the open file handle.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param string $filename <p>The source file path, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-file.php
	 * @see bcompiler_write_header(), bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.6
	 */
	function bcompiler_write_file($filehandle, string $filename): bool {}

	/**
	 * Writes the single character \x00 to indicate End of compiled data
	 * <p>Writes the single character <i>\x00</i> to indicate End of compiled data.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-footer.php
	 * @see bcompiler_write_header()
	 * @since PECL bcompiler >= 0.4
	 */
	function bcompiler_write_footer($filehandle): bool {}

	/**
	 * Writes a defined function as bytecodes
	 * <p>Reads the bytecodes from PHP for an existing function, and writes them to the open file handle. Order is not important, (eg. if function b uses function a, and you compile it like the example below, it will work perfectly OK).</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param string $functionName <p>The function name, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-function.php
	 * @see bcompiler_write_header(), bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.5
	 */
	function bcompiler_write_function($filehandle, string $functionName): bool {}

	/**
	 * Writes all functions defined in a file as bytecodes
	 * <p>Searches for all functions declared in the given file, and writes their correspondent bytecodes to the open file handle.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param string $fileName <p>The file to be compiled. You must always include or require the file you intend to compile.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-functions-from-file.php
	 * @see bcompiler_write_header(), bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.5
	 */
	function bcompiler_write_functions_from_file($filehandle, string $fileName): bool {}

	/**
	 * Writes the bcompiler header
	 * <p>Writes the header part of a bcompiler file.</p>
	 * @param resource $filehandle <p>A file handle as returned by <code>fopen()</code>.</p>
	 * @param string $write_ver <p>Can be used to write bytecode in a previously used format, so that you can use it with older versions of bcompiler.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-header.php
	 * @see bcompiler_write_footer()
	 * @since PECL bcompiler >= 0.3
	 */
	function bcompiler_write_header($filehandle, string $write_ver = NULL): bool {}

	/**
	 * Writes an included file as bytecodes
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $filehandle
	 * @param string $filename
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bcompiler-write-included-filename.php
	 * @since PECL bcompiler >= 0.5
	 */
	function bcompiler_write_included_filename($filehandle, string $filename): bool {}

}
