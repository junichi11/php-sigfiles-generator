<?php



namespace {

	/**
	 * Closes the file descriptor given by fd
	 * <p>The function <b>dio_close()</b> closes the file descriptor <code>fd</code>.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.dio-close.php
	 * @see dio_open()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_close($fd): void {}

	/**
	 * Performs a c library fcntl on fd
	 * <p>The <b>dio_fcntl()</b> function performs the operation specified by <code>cmd</code> on the file descriptor <code>fd</code>. Some commands require additional arguments <code>args</code> to be supplied.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @param int $cmd <p>Can be one of the following operations:</p><ul> <li> <p><b><code>F_SETLK</code></b> - Lock is set or cleared. If the lock is held by someone else <b>dio_fcntl()</b> returns -1.</p> </li> <li> <p><b><code>F_SETLKW</code></b> - like <b><code>F_SETLK</code></b>, but in case the lock is held by someone else, <b>dio_fcntl()</b> waits until the lock is released.</p> </li> <li> <p><b><code>F_GETLK</code></b> - <b>dio_fcntl()</b> returns an associative array (as described below) if someone else prevents lock. If there is no obstruction key "type" will set to <b><code>F_UNLCK</code></b>.</p> </li> <li> <p><b><code>F_DUPFD</code></b> - finds the lowest numbered available file descriptor greater than or equal to <code>args</code> and returns them.</p> </li> <li> <p><b><code>F_SETFL</code></b> - Sets the file descriptors flags to the value specified by <code>args</code>, which can be <b><code>O_APPEND</code></b>, <b><code>O_NONBLOCK</code></b> or <b><code>O_ASYNC</code></b>. To use <b><code>O_ASYNC</code></b> you will need to use the PCNTL extension.</p> </li> </ul>
	 * @param mixed $args <p><code>args</code> is an associative array, when <code>cmd</code> is <b><code>F_SETLK</code></b> or <b><code>F_SETLLW</code></b>, with the following keys:</p><ul> <li> <p><code>start</code> - offset where lock begins</p> </li> <li> <p><code>length</code> - size of locked area. zero means to end of file</p> </li> <li> <p><code>whence</code> - Where l_start is relative to: can be <b><code>SEEK_SET</code></b>, <b><code>SEEK_END</code></b> and <b><code>SEEK_CUR</code></b></p> </li> <li> <p><code>type</code> - type of lock: can be <b><code>F_RDLCK</code></b> (read lock), <b><code>F_WRLCK</code></b> (write lock) or <b><code>F_UNLCK</code></b> (unlock)</p> </li> </ul>
	 * @return mixed <p>Returns the result of the C call.</p>
	 * @link https://php.net/manual/en/function.dio-fcntl.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_fcntl($fd, int $cmd, mixed $args = NULL): mixed {}

	/**
	 * Opens a file (creating it if necessary) at a lower level than the C library input/ouput stream functions allow
	 * <p><b>dio_open()</b> opens a file and returns a new file descriptor for it.</p>
	 * @param string $filename <p>The pathname of the file to open.</p>
	 * @param int $flags <p>The <code>flags</code> parameter is a bitwise-ORed value comprising flags from the following list. This value <i>must</i> include one of <b><code>O_RDONLY</code></b>, <b><code>O_WRONLY</code></b>, or <b><code>O_RDWR</code></b>. Additionally, it may include any combination of the other flags from this list.</p><ul> <li> <p><b><code>O_RDONLY</code></b> - opens the file for read access.</p> </li> <li> <p><b><code>O_WRONLY</code></b> - opens the file for write access.</p> </li> <li> <p><b><code>O_RDWR</code></b> - opens the file for both reading and writing.</p> </li> <li> <p><b><code>O_CREAT</code></b> - creates the file, if it doesn't already exist.</p> </li> <li> <p><b><code>O_EXCL</code></b> - if both <b><code>O_CREAT</code></b> and <b><code>O_EXCL</code></b> are set and the file already exists, <b>dio_open()</b> will fail.</p> </li> <li> <p><b><code>O_TRUNC</code></b> - if the file exists and is opened for write access, the file will be truncated to zero length.</p> </li> <li> <p><b><code>O_APPEND</code></b> - write operations write data at the end of the file.</p> </li> <li> <p><b><code>O_NONBLOCK</code></b> - sets non blocking mode.</p> </li> <li> <p><b><code>O_NOCTTY</code></b> - prevent the OS from assigning the opened file as the process's controlling terminal when opening a TTY device file.</p> </li> </ul>
	 * @param int $mode <p>If <code>flags</code> contains <b><code>O_CREAT</code></b>, <code>mode</code> will set the permissions of the file (creation permissions). <code>mode</code> is required for correct operation when <b><code>O_CREAT</code></b> is specified in <code>flags</code> and is ignored otherwise.</p> <p>The actual permissions assigned to the created file will be affected by the process's <i>umask</i> setting as per usual.</p>
	 * @return resource <p>A file descriptor or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.dio-open.php
	 * @see dio_close()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_open(string $filename, int $flags, int $mode = 0) {}

	/**
	 * Reads bytes from a file descriptor
	 * <p>The function <b>dio_read()</b> reads and returns <code>len</code> bytes from file with descriptor <code>fd</code>.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @param int $len <p>The number of bytes to read. If not specified, <b>dio_read()</b> reads 1K sized block.</p>
	 * @return string <p>The bytes read from <code>fd</code>.</p>
	 * @link https://php.net/manual/en/function.dio-read.php
	 * @see dio_write()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_read($fd, int $len = 1024): string {}

	/**
	 * Seeks to pos on fd from whence
	 * <p>The function <b>dio_seek()</b> is used to change the file position of the given file descriptor.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @param int $pos <p>The new position.</p>
	 * @param int $whence <p>Specifies how the position <code>pos</code> should be interpreted:</p><ul> <li> <p><b><code>SEEK_SET</code></b> (default) - specifies that <code>pos</code> is specified from the beginning of the file.</p> </li> <li> <p><b><code>SEEK_CUR</code></b> - Specifies that <code>pos</code> is a count of characters from the current file position. This count may be positive or negative.</p> </li> <li> <p><b><code>SEEK_END</code></b> - Specifies that <code>pos</code> is a count of characters from the end of the file. A negative count specifies a position within the current extent of the file; a positive count specifies a position past the current end. If you set the position past the current end, and actually write data, you will extend the file with zeros up to that position.</p> </li> </ul>
	 * @return int
	 * @link https://php.net/manual/en/function.dio-seek.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_seek($fd, int $pos, int $whence = SEEK_SET): int {}

	/**
	 * Gets stat information about the file descriptor fd
	 * <p><b>dio_stat()</b> returns information about the given file descriptor.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @return array <p>Returns an associative array with the following keys:</p><ul> <li> <p>"device" - device</p> </li> <li> <p>"inode" - inode</p> </li> <li> <p>"mode" - mode</p> </li> <li> <p>"nlink" - number of hard links</p> </li> <li> <p>"uid" - user id</p> </li> <li> <p>"gid" - group id</p> </li> <li> <p>"device_type" - device type (if inode device)</p> </li> <li> <p>"size" - total size in bytes</p> </li> <li> <p>"blocksize" - blocksize</p> </li> <li> <p>"blocks" - number of blocks allocated</p> </li> <li> <p>"atime" - time of last access</p> </li> <li> <p>"mtime" - time of last modification</p> </li> <li> <p>"ctime" - time of last change</p> </li> </ul> On error <b>dio_stat()</b> returns <b><code>NULL</code></b>.
	 * @link https://php.net/manual/en/function.dio-stat.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_stat($fd): array {}

	/**
	 * Sets terminal attributes and baud rate for a serial port
	 * <p><b>dio_tcsetattr()</b> sets the terminal attributes and baud rate of the open <code>fd</code>.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @param array $options <p>The currently available options are:</p><ul> <li> <p>'baud' - baud rate of the port - can be 38400,19200,9600,4800,2400,1800, 1200,600,300,200,150,134,110,75 or 50, default value is 9600.</p> </li> <li> <p>'bits' - data bits - can be 8,7,6 or 5. Default value is 8.</p> </li> <li> <p>'stop' - stop bits - can be 1 or 2. Default value is 1.</p> </li> <li> <p>'parity' - can be 0,1 or 2. Default value is 0.</p> </li> </ul>
	 * @return bool <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.dio-tcsetattr.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.1.0
	 */
	function dio_tcsetattr($fd, array $options): bool {}

	/**
	 * Truncates file descriptor fd to offset bytes
	 * <p><b>dio_truncate()</b> truncates a file to at most <code>offset</code> bytes in size.</p><p>If the file previously was larger than this size, the extra data is lost. If the file previously was shorter, it is unspecified whether the file is left unchanged or is extended. In the latter case the extended part reads as zero bytes.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @param int $offset <p>The offset in bytes.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dio-truncate.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_truncate($fd, int $offset): bool {}

	/**
	 * Writes data to fd with optional truncation at length
	 * <p><b>dio_write()</b> writes up to <code>len</code> bytes from <code>data</code> to file <code>fd</code>.</p>
	 * @param resource $fd <p>The file descriptor returned by <code>dio_open()</code>.</p>
	 * @param string $data <p>The written data.</p>
	 * @param int $len <p>The length of data to write in bytes. If not specified, the function writes all the data to the specified file.</p>
	 * @return int <p>Returns the number of bytes written to <code>fd</code>.</p>
	 * @link https://php.net/manual/en/function.dio-write.php
	 * @see dio_read()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.0
	 */
	function dio_write($fd, string $data, int $len = 0): int {}

	define('F_DUPFD', null);

	define('F_GETFD', null);

	define('F_GETFL', null);

	define('F_GETLK', null);

	define('F_GETOWN', null);

	define('F_RDLCK', null);

	define('F_SETFL', null);

	define('F_SETLK', null);

	define('F_SETLKW', null);

	define('F_SETOWN', null);

	define('F_UNLCK', null);

	define('F_WRLCK', null);

	define('O_APPEND', null);

	define('O_ASYNC', null);

	define('O_CREAT', null);

	define('O_EXCL', null);

	define('O_NDELAY', null);

	define('O_NOCTTY', null);

	define('O_NONBLOCK', null);

	define('O_RDONLY', null);

	define('O_RDWR', null);

	define('O_SYNC', null);

	define('O_TRUNC', null);

	define('O_WRONLY', null);

	define('S_IRGRP', null);

	define('S_IROTH', null);

	define('S_IRUSR', null);

	define('S_IRWXG', null);

	define('S_IRWXO', null);

	define('S_IRWXU', null);

	define('S_IWGRP', null);

	define('S_IWOTH', null);

	define('S_IWUSR', null);

	define('S_IXGRP', null);

	define('S_IXOTH', null);

	define('S_IXUSR', null);

}
