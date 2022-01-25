<?php



namespace {

	/**
	 * Returns trailing name component of path
	 * <p>Given a string containing the path to a file or directory, this function will return the trailing name component.</p><p><b>Note</b>:</p><p><b>basename()</b> operates naively on the input string, and is not aware of the actual filesystem, or path components such as "<code>..</code>".</p><p><b>basename()</b> is locale aware, so for it to see the correct basename with multibyte character paths, the matching locale must be set using the <code>setlocale()</code> function. If <code>path</code> contains characters which are invalid for the current locale, the behavior of <b>basename()</b> is undefined.</p>
	 * @param string $path <p>A path.</p> <p>On Windows, both slash (<code>/</code>) and backslash (<code>\</code>) are used as directory separator character. In other environments, it is the forward slash (<code>/</code>).</p>
	 * @param string $suffix <p>If the name component ends in <code>suffix</code> this will also be cut off.</p>
	 * @return string <p>Returns the base name of the given <code>path</code>.</p>
	 * @link https://php.net/manual/en/function.basename.php
	 * @see dirname(), pathinfo()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function basename(string $path, string $suffix = ""): string {}

	/**
	 * Changes file group
	 * <p>Attempts to change the group of the file <code>filename</code> to <code>group</code>.</p><p>Only the superuser may change the group of a file arbitrarily; other users may change the group of a file to any group of which that user is a member.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param string|int $group <p>A group name or number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.chgrp.php
	 * @see chown(), chmod()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function chgrp(string $filename, string|int $group): bool {}

	/**
	 * Changes file mode
	 * <p>Attempts to change the mode of the specified file to that given in <code>permissions</code>.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param int $permissions <p>Note that <code>permissions</code> is not automatically assumed to be an octal value, so to ensure the expected operation, you need to prefix <code>permissions</code> with a zero (0). Strings such as "g+w" will not work properly.</p> <p></p>  <code> &lt;&#63;php<br>chmod("/somedir/somefile",&nbsp;755);&nbsp;&nbsp;&nbsp;//&nbsp;decimal;&nbsp;probably&nbsp;incorrect<br>chmod("/somedir/somefile",&nbsp;"u+rwx,go+rx");&nbsp;//&nbsp;string;&nbsp;incorrect<br>chmod("/somedir/somefile",&nbsp;0755);&nbsp;&nbsp;//&nbsp;octal;&nbsp;correct&nbsp;value&nbsp;of&nbsp;mode<br>&#63;&gt;  </code>   <p>The <code>permissions</code> parameter consists of three octal number components specifying access restrictions for the owner, the user group in which the owner is in, and to everybody else in this order. One component can be computed by adding up the needed permissions for that target user base. Number 1 means that you grant execute rights, number 2 means that you make the file writeable, number 4 means that you make the file readable. Add up these numbers to specify needed rights. You can also read more about modes on Unix systems with '<b>man 1 chmod</b>' and '<b>man 2 chmod</b>'.</p> <p></p>  <code> &lt;&#63;php<br>//&nbsp;Read&nbsp;and&nbsp;write&nbsp;for&nbsp;owner,&nbsp;nothing&nbsp;for&nbsp;everybody&nbsp;else<br>chmod("/somedir/somefile",&nbsp;0600);<br><br>//&nbsp;Read&nbsp;and&nbsp;write&nbsp;for&nbsp;owner,&nbsp;read&nbsp;for&nbsp;everybody&nbsp;else<br>chmod("/somedir/somefile",&nbsp;0644);<br><br>//&nbsp;Everything&nbsp;for&nbsp;owner,&nbsp;read&nbsp;and&nbsp;execute&nbsp;for&nbsp;others<br>chmod("/somedir/somefile",&nbsp;0755);<br><br>//&nbsp;Everything&nbsp;for&nbsp;owner,&nbsp;read&nbsp;and&nbsp;execute&nbsp;for&nbsp;owner's&nbsp;group<br>chmod("/somedir/somefile",&nbsp;0750);<br>&#63;&gt;  </code>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.chmod.php
	 * @see chown(), chgrp(), fileperms(), stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function chmod(string $filename, int $permissions): bool {}

	/**
	 * Changes file owner
	 * <p>Attempts to change the owner of the file <code>filename</code> to user <code>user</code>. Only the superuser may change the owner of a file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param string|int $user <p>A user name or number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.chown.php
	 * @see chmod(), chgrp()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function chown(string $filename, string|int $user): bool {}

	/**
	 * Clears file status cache
	 * <p>When you use <code>stat()</code>, <code>lstat()</code>, or any of the other functions listed in the affected functions list (below), PHP caches the information those functions return in order to provide faster performance. However, in certain cases, you may want to clear the cached information. For instance, if the same file is being checked multiple times within a single script, and that file is in danger of being removed or changed during that script's operation, you may elect to clear the status cache. In these cases, you can use the <b>clearstatcache()</b> function to clear the information that PHP caches about a file.</p><p>You should also note that PHP doesn't cache information about non-existent files. So, if you call <code>file_exists()</code> on a file that doesn't exist, it will return <b><code>false</code></b> until you create the file. If you create the file, it will return <b><code>true</code></b> even if you then delete the file. However <code>unlink()</code> clears the cache automatically.</p><p><b>Note</b>:</p><p>This function caches information about specific filenames, so you only need to call <b>clearstatcache()</b> if you are performing multiple operations on the same filename and require the information about that particular file to not be cached.</p><p>Affected functions include <code>stat()</code>, <code>lstat()</code>, <code>file_exists()</code>, <code>is_writable()</code>, <code>is_readable()</code>, <code>is_executable()</code>, <code>is_file()</code>, <code>is_dir()</code>, <code>is_link()</code>, <code>filectime()</code>, <code>fileatime()</code>, <code>filemtime()</code>, <code>fileinode()</code>, <code>filegroup()</code>, <code>fileowner()</code>, <code>filesize()</code>, <code>filetype()</code>, and <code>fileperms()</code>.</p>
	 * @param bool $clear_realpath_cache <p>Whether to <i>also</i> clear the realpath cache.</p>
	 * @param string $filename <p>Clear the realpath cache for a specific filename only; only used if <code>clear_realpath_cache</code> is <b><code>true</code></b>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.clearstatcache.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function clearstatcache(bool $clear_realpath_cache = false, string $filename = ""): void {}

	/**
	 * Copies file
	 * <p>Makes a copy of the file <code>from</code> to <code>to</code>.</p><p>If you wish to move a file, use the <code>rename()</code> function.</p>
	 * @param string $from <p>Path to the source file.</p>
	 * @param string $to <p>The destination path. If <code>to</code> is a URL, the copy operation may fail if the wrapper does not support overwriting of existing files.</p> <p><b>Warning</b></p> <p>If the destination file already exists, it will be overwritten.</p>
	 * @param ?resource $context <p>A valid context resource created with <code>stream_context_create()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.copy.php
	 * @see move_uploaded_file(), rename()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function copy(string $from, string $to, ?resource $context = null): bool {}

	/**
	 * Returns a parent directory's path
	 * <p>Given a string containing the path of a file or directory, this function will return the parent directory's path that is <code>levels</code> up from the current directory.</p><p><b>Note</b>:</p><p><b>dirname()</b> operates naively on the input string, and is not aware of the actual filesystem, or path components such as "<code>..</code>".</p><p>On Windows, <b>dirname()</b> assumes the currently set codepage, so for it to see the correct directory name with multibyte character paths, the matching codepage must be set. If <code>path</code> contains characters which are invalid for the current codepage, the behavior of <b>dirname()</b> is undefined.</p><p>On other systems, <b>dirname()</b> assumes <code>path</code> to be encoded in an ASCII compatible encoding. Otherwise the behavior of the the function is undefined.</p>
	 * @param string $path <p>A path.</p> <p>On Windows, both slash (<code>/</code>) and backslash (<code>\</code>) are used as directory separator character. In other environments, it is the forward slash (<code>/</code>).</p>
	 * @param int $levels <p>The number of parent directories to go up.</p> <p>This must be an integer greater than 0.</p>
	 * @return string <p>Returns the path of a parent directory. If there are no slashes in <code>path</code>, a dot ('<code>.</code>') is returned, indicating the current directory. Otherwise, the returned string is <code>path</code> with any trailing <code>/component</code> removed.</p><b>Caution</b> <p>Be careful when using this function in a loop that can reach the top-level directory as this can result in an infinite loop.</p>  <code> &lt;&#63;php<br>dirname('.');&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Will&nbsp;return&nbsp;'.'.<br>dirname('/');&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Will&nbsp;return&nbsp;`\`&nbsp;on&nbsp;Windows&nbsp;and&nbsp;'/'&nbsp;on&nbsp;&#42;nix&nbsp;systems.<br>dirname('\\');&nbsp;&nbsp;&nbsp;//&nbsp;Will&nbsp;return&nbsp;`\`&nbsp;on&nbsp;Windows&nbsp;and&nbsp;'.'&nbsp;on&nbsp;&#42;nix&nbsp;systems.<br>dirname('C:\\');&nbsp;//&nbsp;Will&nbsp;return&nbsp;'C:\'&nbsp;on&nbsp;Windows&nbsp;and&nbsp;'.'&nbsp;on&nbsp;&#42;nix&nbsp;systems.<br>&#63;&gt;  </code>
	 * @link https://php.net/manual/en/function.dirname.php
	 * @see basename(), pathinfo(), realpath()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dirname(string $path, int $levels = 1): string {}

	/**
	 * Returns available space on filesystem or disk partition
	 * <p>Given a string containing a directory, this function will return the number of bytes available on the corresponding filesystem or disk partition.</p>
	 * @param string $directory <p>A directory of the filesystem or disk partition.</p> <p><b>Note</b>:</p><p>Given a file name instead of a directory, the behaviour of the function is unspecified and may differ between operating systems and PHP versions.</p>
	 * @return float|false <p>Returns the number of available bytes as a float or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.disk-free-space.php
	 * @see disk_total_space()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function disk_free_space(string $directory): float|false {}

	/**
	 * Returns the total size of a filesystem or disk partition
	 * <p>Given a string containing a directory, this function will return the total number of bytes on the corresponding filesystem or disk partition.</p>
	 * @param string $directory <p>A directory of the filesystem or disk partition.</p>
	 * @return float|false <p>Returns the total number of bytes as a float or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.disk-total-space.php
	 * @see disk_free_space()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function disk_total_space(string $directory): float|false {}

	/**
	 * Alias of disk_free_space()
	 * <p>This function is an alias of: <code>disk_free_space()</code>.</p>
	 * @param string $directory <p>A directory of the filesystem or disk partition.</p> <p><b>Note</b>:</p><p>Given a file name instead of a directory, the behaviour of the function is unspecified and may differ between operating systems and PHP versions.</p>
	 * @return float|false
	 * @link https://php.net/manual/en/function.diskfreespace.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function diskfreespace(string $directory): float|false {}

	/**
	 * Closes an open file pointer
	 * <p>The file pointed to by <code>stream</code> is closed.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fclose.php
	 * @see fopen(), fsockopen()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fclose($stream): bool {}

	/**
	 * Synchronizes data (but not meta-data) to the file
	 * <p>This function synchronizes <code>stream</code> contents to storage media, just like <code>fsync()</code> does, but it does not synchronize file meta-data. Note that this function is only effectively different in POSIX systems. In Windows, this function is aliased to <code>fsync()</code>.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdatasync.php
	 * @see fflush(), fsync()
	 * @since PHP 8 >= 8.1.0
	 */
	function fdatasync($stream): bool {}

	/**
	 * Tests for end-of-file on a file pointer
	 * <p>Tests for end-of-file on a file pointer.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the file pointer is at EOF or an error occurs (including socket timeout); otherwise returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.feof.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function feof($stream): bool {}

	/**
	 * Flushes the output to a file
	 * <p>This function forces a write of all buffered output to the resource pointed to by the file <code>stream</code>.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fflush.php
	 * @see clearstatcache(), fwrite()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function fflush($stream): bool {}

	/**
	 * Gets character from file pointer
	 * <p>Gets a character from the given file pointer.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @return string|false <p>Returns a string containing a single character read from the file pointed to by <code>stream</code>. Returns <b><code>false</code></b> on EOF.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.fgetc.php
	 * @see fread(), fopen(), popen(), fsockopen(), fgets()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fgetc($stream): string|false {}

	/**
	 * Gets line from file pointer and parse for CSV fields
	 * <p>Similar to <code>fgets()</code> except that <b>fgetcsv()</b> parses the line it reads for fields in CSV format and returns an array containing the fields read.</p><p><b>Note</b>:</p><p>The locale settings are taken into account by this function. If <code>LC_CTYPE</code> is e.g. <code>en_US.UTF-8</code>, files in one-byte encodings may be read wrongly by this function.</p>
	 * @param resource $stream <p>A valid file pointer to a file successfully opened by <code>fopen()</code>, <code>popen()</code>, or <code>fsockopen()</code>.</p>
	 * @param ?int $length <p>Must be greater than the longest line (in characters) to be found in the CSV file (allowing for trailing line-end characters). Otherwise the line is split in chunks of <code>length</code> characters, unless the split would occur inside an enclosure.</p> <p>Omitting this parameter (or setting it to 0, or <b><code>null</code></b> in PHP 8.0.0 or later) the maximum line length is not limited, which is slightly slower.</p>
	 * @param string $separator <p>The optional <code>separator</code> parameter sets the field separator (one single-byte character only).</p>
	 * @param string $enclosure <p>The optional <code>enclosure</code> parameter sets the field enclosure character (one single-byte character only).</p>
	 * @param string $escape <p>The optional <code>escape</code> parameter sets the escape character (at most one single-byte character). An empty string (<code>""</code>) disables the proprietary escape mechanism.</p> <p><b>Note</b>:  Usually an <code>enclosure</code> character is escaped inside a field by doubling it; however, the <code>escape</code> character can be used as an alternative. So for the default parameter values <code>""</code> and <code>\"</code> have the same meaning. Other than allowing to escape the <code>enclosure</code> character the <code>escape</code> character has no special meaning; it isn't even meant to escape itself. </p>
	 * @return array|false <p>Returns an indexed array containing the fields read on success, or <b><code>false</code></b> on failure.</p><p><b>Note</b>:</p><p>A blank line in a CSV file will be returned as an array comprising a single <code>null</code> field, and will not be treated as an error.</p> <p><b>Note</b>: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.</p>
	 * @link https://php.net/manual/en/function.fgetcsv.php
	 * @see str_getcsv(), explode(), file(), pack(), fputcsv()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fgetcsv($stream, ?int $length = null, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false {}

	/**
	 * Gets line from file pointer
	 * <p>Gets a line from file pointer.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @param ?int $length <p>Reading ends when <code>length</code> - 1 bytes have been read, or a newline (which is included in the return value), or an EOF (whichever comes first). If no length is specified, it will keep reading from the stream until it reaches the end of the line.</p>
	 * @return string|false <p>Returns a string of up to <code>length</code> - 1 bytes read from the file pointed to by <code>stream</code>. If there is no more data to read in the file pointer, then <b><code>false</code></b> is returned.</p><p>If an error occurs, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.fgets.php
	 * @see fgetss(), fread(), fgetc(), stream_get_line(), fopen(), popen(), fsockopen(), stream_set_timeout()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fgets($stream, ?int $length = null): string|false {}

	/**
	 * Gets line from file pointer and strip HTML tags
	 * <p>Identical to <code>fgets()</code>, except that <b>fgetss()</b> attempts to strip any NUL bytes, HTML and PHP tags from the text it reads. The function retains the parsing state from call to call, and as such is not equivalent to calling <code>strip_tags()</code> on the return value of <code>fgets()</code>.</p>
	 * @param resource $handle <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @param int $length <p>Length of the data to be retrieved.</p>
	 * @param string $allowable_tags <p>You can use the optional third parameter to specify tags which should not be stripped. See <code>strip_tags()</code> for details regarding <code>allowable_tags</code>.</p>
	 * @return string <p>Returns a string of up to <code>length</code> - 1 bytes read from the file pointed to by <code>handle</code>, with all HTML and PHP code stripped.</p><p>If an error occurs, returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.fgetss.php
	 * @see fgets(), fopen(), popen(), fsockopen(), strip_tags()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function fgetss($handle, int $length = null, string $allowable_tags = null): string {}

	/**
	 * Reads entire file into an array
	 * <p>Reads an entire file into an array.</p><p><b>Note</b>:</p><p>You can use <code>file_get_contents()</code> to return the contents of a file as a string.</p>
	 * @param string $filename <p>Path to the file.</p> <b>Tip</b><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
	 * @param int $flags <p>The optional parameter <code>flags</code> can be one, or more, of the following constants:</p>  <b><code>FILE_USE_INCLUDE_PATH</code></b>    Search for the file in the include_path.    <b><code>FILE_IGNORE_NEW_LINES</code></b>    Omit newline at the end of each array element    <b><code>FILE_SKIP_EMPTY_LINES</code></b>    Skip empty lines
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return array|false <p>Returns the file in an array. Each element of the array corresponds to a line in the file, with the newline still attached. Upon failure, <b>file()</b> returns <b><code>false</code></b>.</p><p><b>Note</b>:</p><p>Each line in the resulting array will include the line ending, unless <b><code>FILE_IGNORE_NEW_LINES</code></b> is used.</p> <p><b>Note</b>: If PHP is not properly recognizing the line endings when reading files either on or created by a Macintosh computer, enabling the auto_detect_line_endings run-time configuration option may help resolve the problem.</p>
	 * @link https://php.net/manual/en/function.file.php
	 * @see file_get_contents(), readfile(), fopen(), fsockopen(), popen(), include, stream_context_create()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function file(string $filename, int $flags = 0, ?resource $context = null): array|false {}

	/**
	 * Checks whether a file or directory exists
	 * <p>Checks whether a file or directory exists.</p>
	 * @param string $filename <p>Path to the file or directory.</p> <p>On windows, use //computername/share/filename or \\computername\share\filename to check files on network shares.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the file or directory specified by <code>filename</code> exists; <b><code>false</code></b> otherwise.</p><p><b>Note</b>:</p><p>This function will return <b><code>false</code></b> for symlinks pointing to non-existing files.</p> <p><b>Note</b>:</p><p>The check is done using the real UID/GID instead of the effective one.</p> <p><b>Note</b>:  Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB. </p>
	 * @link https://php.net/manual/en/function.file-exists.php
	 * @see is_readable(), is_writable(), is_file(), file()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function file_exists(string $filename): bool {}

	/**
	 * Reads entire file into a string
	 * <p>This function is similar to <code>file()</code>, except that <b>file_get_contents()</b> returns the file in a <code>string</code>, starting at the specified <code>offset</code> up to <code>length</code> bytes. On failure, <b>file_get_contents()</b> will return <b><code>false</code></b>.</p><p><b>file_get_contents()</b> is the preferred way to read the contents of a file into a string. It will use memory mapping techniques if supported by your OS to enhance performance.</p><p><b>Note</b>:</p><p>If you're opening a URI with special characters, such as spaces, you need to encode the URI with <code>urlencode()</code>.</p>
	 * @param string $filename <p>Name of the file to read.</p>
	 * @param bool $use_include_path <p><b>Note</b>:</p><p>The <b><code>FILE_USE_INCLUDE_PATH</code></b> constant can be used to trigger include path search. This is not possible if strict typing is enabled, since <b><code>FILE_USE_INCLUDE_PATH</code></b> is an <code>int</code>. Use <b><code>true</code></b> instead.</p>
	 * @param ?resource $context <p>A valid context resource created with <code>stream_context_create()</code>. If you don't need to use a custom context, you can skip this parameter by <b><code>null</code></b>.</p>
	 * @param int $offset <p>The offset where the reading starts on the original stream. Negative offsets count from the end of the stream.</p> <p>Seeking (<code>offset</code>) is not supported with remote files. Attempting to seek on non-local files may work with small offsets, but this is unpredictable because it works on the buffered stream.</p>
	 * @param ?int $length <p>Maximum length of data read. The default is to read until end of file is reached. Note that this parameter is applied to the stream processed by the filters.</p>
	 * @return string|false <p>The function returns the read data or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.file-get-contents.php
	 * @see file(), fgets(), fread(), readfile(), file_put_contents(), stream_get_contents(), stream_context_create()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function file_get_contents(string $filename, bool $use_include_path = false, ?resource $context = null, int $offset = 0, ?int $length = null): string|false {}

	/**
	 * Write data to a file
	 * <p>This function is identical to calling <code>fopen()</code>, <code>fwrite()</code> and <code>fclose()</code> successively to write data to a file.</p><p>If <code>filename</code> does not exist, the file is created. Otherwise, the existing file is overwritten, unless the <b><code>FILE_APPEND</code></b> flag is set.</p>
	 * @param string $filename <p>Path to the file where to write the data.</p>
	 * @param mixed $data <p>The data to write. Can be either a <code>string</code>, an <code>array</code> or a stream resource.</p> <p>If <code>data</code> is a stream resource, the remaining buffer of that stream will be copied to the specified file. This is similar with using <code>stream_copy_to_stream()</code>.</p> <p>You can also specify the <code>data</code> parameter as a single dimension array. This is equivalent to <code>file_put_contents($filename, implode('', $array))</code>.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following flags, joined with the binary OR (<code>|</code>) operator.</p> <p></p> <b>Available flags</b>   Flag Description      <b><code>FILE_USE_INCLUDE_PATH</code></b>   Search for <code>filename</code> in the include directory. See include_path for more information.     <b><code>FILE_APPEND</code></b>   If file <code>filename</code> already exists, append the data to the file instead of overwriting it.     <b><code>LOCK_EX</code></b>   Acquire an exclusive lock on the file while proceeding to the writing. In other words, a <code>flock()</code> call happens between the <code>fopen()</code> call and the <code>fwrite()</code> call. This is not identical to an <code>fopen()</code> call with mode "x".
	 * @param ?resource $context <p>A valid context resource created with <code>stream_context_create()</code>.</p>
	 * @return int|false <p>This function returns the number of bytes that were written to the file, or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.file-put-contents.php
	 * @see fopen(), fwrite(), file_get_contents(), stream_context_create()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function file_put_contents(string $filename, mixed $data, int $flags = 0, ?resource $context = null): int|false {}

	/**
	 * Gets last access time of file
	 * <p>Gets the last access time of the given file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the time the file was last accessed, or <b><code>false</code></b> on failure. The time is returned as a Unix timestamp.</p>
	 * @link https://php.net/manual/en/function.fileatime.php
	 * @see filemtime(), fileinode(), date()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fileatime(string $filename): int|false {}

	/**
	 * Gets inode change time of file
	 * <p>Gets the inode change time of a file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the time the file was last changed, or <b><code>false</code></b> on failure. The time is returned as a Unix timestamp.</p>
	 * @link https://php.net/manual/en/function.filectime.php
	 * @see filemtime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function filectime(string $filename): int|false {}

	/**
	 * Gets file group
	 * <p>Gets the file group. The group ID is returned in numerical format, use <code>posix_getgrgid()</code> to resolve it to a group name.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the group ID of the file, or <b><code>false</code></b> if an error occurs. The group ID is returned in numerical format, use <code>posix_getgrgid()</code> to resolve it to a group name. Upon failure, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.filegroup.php
	 * @see fileowner(), posix_getgrgid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function filegroup(string $filename): int|false {}

	/**
	 * Gets file inode
	 * <p>Gets the file inode.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the inode number of the file, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fileinode.php
	 * @see getmyinode(), stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fileinode(string $filename): int|false {}

	/**
	 * Gets file modification time
	 * <p>This function returns the time when the data blocks of a file were being written to, that is, the time when the content of the file was changed.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the time the file was last modified, or <b><code>false</code></b> on failure. The time is returned as a Unix timestamp, which is suitable for the <code>date()</code> function.</p>
	 * @link https://php.net/manual/en/function.filemtime.php
	 * @see filectime(), stat(), touch(), getlastmod()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function filemtime(string $filename): int|false {}

	/**
	 * Gets file owner
	 * <p>Gets the file owner.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the user ID of the owner of the file, or <b><code>false</code></b> on failure. The user ID is returned in numerical format, use <code>posix_getpwuid()</code> to resolve it to a username.</p>
	 * @link https://php.net/manual/en/function.fileowner.php
	 * @see filegroup(), stat(), posix_getpwuid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fileowner(string $filename): int|false {}

	/**
	 * Gets file permissions
	 * <p>Gets permissions for the given file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the file's permissions as a numeric mode. Lower bits of this mode are the same as the permissions expected by <code>chmod()</code>, however on most platforms the return value will also include information on the type of file given as <code>filename</code>. The examples below demonstrate how to test the return value for specific permissions and file types on POSIX systems, including Linux and macOS.</p><p>For local files, the specific return value is that of the <code>st_mode</code> member of the structure returned by the C library's <code>stat()</code> function. Exactly which bits are set can vary from platform to platform, and looking up your specific platform's documentation is recommended if parsing the non-permission bits of the return value is required.</p><p>Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fileperms.php
	 * @see chmod(), is_readable(), stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fileperms(string $filename): int|false {}

	/**
	 * Gets file size
	 * <p>Gets the size for the given file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return int|false <p>Returns the size of the file in bytes, or <b><code>false</code></b> (and generates an error of level <b><code>E_WARNING</code></b>) in case of an error.</p><p><b>Note</b>:  Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB. </p>
	 * @link https://php.net/manual/en/function.filesize.php
	 * @see file_exists()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function filesize(string $filename): int|false {}

	/**
	 * Gets file type
	 * <p>Returns the type of the given file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return string|false <p>Returns the type of the file. Possible values are fifo, char, dir, block, link, file, socket and unknown.</p><p>Returns <b><code>false</code></b> if an error occurs. <b>filetype()</b> will also produce an <b><code>E_NOTICE</code></b> message if the stat call fails or if the file type is unknown.</p>
	 * @link https://php.net/manual/en/function.filetype.php
	 * @see is_dir(), is_file(), is_link(), file_exists(), mime_content_type(), pathinfo(), stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function filetype(string $filename): string|false {}

	/**
	 * Portable advisory file locking
	 * <p><b>flock()</b> allows you to perform a simple reader/writer model which can be used on virtually every platform (including most Unix derivatives and even Windows).</p><p>The lock is released also by <code>fclose()</code>, or when <code>stream</code> is garbage collected.</p><p>PHP supports a portable way of locking complete files in an advisory way (which means all accessing programs have to use the same way of locking or it will not work). By default, this function will block until the requested lock is acquired; this may be controlled with the <b><code>LOCK_NB</code></b> option documented below.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param int $operation <p><code>operation</code> is one of the following:</p><ul> <li>  <b><code>LOCK_SH</code></b> to acquire a shared lock (reader).  </li> <li>  <b><code>LOCK_EX</code></b> to acquire an exclusive lock (writer).  </li> <li>  <b><code>LOCK_UN</code></b> to release a lock (shared or exclusive).  </li> </ul> <p>It is also possible to add <b><code>LOCK_NB</code></b> as a bitmask to one of the above operations, if <b>flock()</b> should not block during the locking attempt.</p>
	 * @param int $would_block <p>The optional third argument is set to 1 if the lock would block (EWOULDBLOCK errno condition).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.flock.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function flock($stream, int $operation, int &$would_block = null): bool {}

	/**
	 * Match filename against a pattern
	 * <p><b>fnmatch()</b> checks if the passed <code>filename</code> would match the given shell wildcard <code>pattern</code>.</p>
	 * @param string $pattern <p>The shell wildcard pattern.</p>
	 * @param string $filename <p>The tested string. This function is especially useful for filenames, but may also be used on regular strings.</p> <p>The average user may be used to shell patterns or at least in their simplest form to <code>'&#63;'</code> and <code>'&#42;'</code> wildcards so using <b>fnmatch()</b> instead of <code>preg_match()</code> for frontend search expression input may be way more convenient for non-programming users.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following flags, joined with the binary OR (|) operator.</p> <b> A list of possible flags for <b>fnmatch()</b> </b>   <code>Flag</code> Description     <b><code>FNM_NOESCAPE</code></b>  Disable backslash escaping.    <b><code>FNM_PATHNAME</code></b>  Slash in string only matches slash in the given pattern.    <b><code>FNM_PERIOD</code></b>  Leading period in string must be exactly matched by period in the given pattern.    <b><code>FNM_CASEFOLD</code></b>  Caseless match. Part of the GNU extension.
	 * @return bool <p>Returns <b><code>true</code></b> if there is a match, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fnmatch.php
	 * @see glob(), preg_match(), sscanf(), printf(), sprintf()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function fnmatch(string $pattern, string $filename, int $flags = 0): bool {}

	/**
	 * Opens file or URL
	 * <p><b>fopen()</b> binds a named resource, specified by <code>filename</code>, to a stream.</p>
	 * @param string $filename <p>If <code>filename</code> is of the form "scheme://...", it is assumed to be a URL and PHP will search for a protocol handler (also known as a wrapper) for that scheme. If no wrappers for that protocol are registered, PHP will emit a notice to help you track potential problems in your script and then continue as though <code>filename</code> specifies a regular file.</p> <p>If PHP has decided that <code>filename</code> specifies a local file, then it will try to open a stream on that file. The file must be accessible to PHP, so you need to ensure that the file access permissions allow this access. If you have enabled open_basedir further restrictions may apply.</p> <p>If PHP has decided that <code>filename</code> specifies a registered protocol, and that protocol is registered as a network URL, PHP will check to make sure that allow_url_fopen is enabled. If it is switched off, PHP will emit a warning and the fopen call will fail.</p> <p><b>Note</b>:</p><p>The list of supported protocols can be found in Supported Protocols and Wrappers. Some protocols (also referred to as <code>wrappers</code>) support <code>context</code> and/or php.ini options. Refer to the specific page for the protocol in use for a list of options which can be set. (e.g. php.ini value <code>user_agent</code> used by the <code>http</code> wrapper).</p>  <p>On the Windows platform, be careful to escape any backslashes used in the path to the file, or use forward slashes.</p>  <code> &lt;&#63;php<br>$handle&nbsp;=&nbsp;fopen("c:\\folder\\resource.txt",&nbsp;"r");<br>&#63;&gt;  </code>
	 * @param string $mode <p>The <code>mode</code> parameter specifies the type of access you require to the stream. It may be any of the following:</p> <b> A list of possible modes for <b>fopen()</b> using <code>mode</code> </b>   <code>mode</code> Description     <code>'r'</code>  Open for reading only; place the file pointer at the beginning of the file.    <code>'r+'</code>  Open for reading and writing; place the file pointer at the beginning of the file.    <code>'w'</code>  Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.    <code>'w+'</code>  Open for reading and writing; otherwise it has the same behavior as <code>'w'</code>.    <code>'a'</code>  Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, <code>fseek()</code> has no effect, writes are always appended.    <code>'a+'</code>  Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, <code>fseek()</code> only affects the reading position, writes are always appended.    <code>'x'</code>  Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the <b>fopen()</b> call will fail by returning <b><code>false</code></b> and generating an error of level <b><code>E_WARNING</code></b>. If the file does not exist, attempt to create it. This is equivalent to specifying <code>O_EXCL|O_CREAT</code> flags for the underlying <code>open(2)</code> system call.    <code>'x+'</code>  Create and open for reading and writing; otherwise it has the same behavior as <code>'x'</code>.    <code>'c'</code>  Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to <code>'w'</code>), nor the call to this function fails (as is the case with <code>'x'</code>). The file pointer is positioned on the beginning of the file. This may be useful if it's desired to get an advisory lock (see <code>flock()</code>) before attempting to modify the file, as using <code>'w'</code> could truncate the file before the lock was obtained (if truncation is desired, <code>ftruncate()</code> can be used after the lock is requested).    <code>'c+'</code>  Open the file for reading and writing; otherwise it has the same behavior as <code>'c'</code>.    <code>'e'</code>  Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.     <p><b>Note</b>:</p><p>Different operating system families have different line-ending conventions. When you write a text file and want to insert a line break, you need to use the correct line-ending character(s) for your operating system. Unix based systems use <code>\n</code> as the line ending character, Windows based systems use <code>\r\n</code> as the line ending characters and Macintosh based systems (Mac OS Classic) used <code>\r</code> as the line ending character.</p> <p>If you use the wrong line ending characters when writing your files, you might find that other applications that open those files will "look funny".</p> <p>Windows offers a text-mode translation flag (<code>'t'</code>) which will transparently translate <code>\n</code> to <code>\r\n</code> when working with the file. In contrast, you can also use <code>'b'</code> to force binary mode, which will not translate your data. To use these flags, specify either <code>'b'</code> or <code>'t'</code> as the last character of the <code>mode</code> parameter.</p> <p>The default translation mode is <code>'b'</code>. You can use the <code>'t'</code> mode if you are working with plain-text files and you use <code>\n</code> to delimit your line endings in your script, but expect your files to be readable with applications such as old versions of notepad. You should use the <code>'b'</code> in all other cases.</p> <p>If you specify the 't' flag when working with binary files, you may experience strange problems with your data, including broken image files and strange problems with <code>\r\n</code> characters.</p>  <p><b>Note</b>:</p><p>For portability, it is also strongly recommended that you re-write code that uses or relies upon the <code>'t'</code> mode so that it uses the correct line endings and <code>'b'</code> mode instead.</p>  <p><b>Note</b>:  The <code>mode</code> is ignored for php://output, php://input, php://stdin, php://stdout, php://stderr and php://fd stream wrappers. </p>
	 * @param bool $use_include_path <p>The optional third <code>use_include_path</code> parameter can be set to '1' or <b><code>true</code></b> if you want to search for the file in the include_path, too.</p>
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return resource|false <p>Returns a file pointer resource on success, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.fopen.php
	 * @see fclose(), fgets(), fread(), fwrite(), fsockopen(), file(), file_exists(), is_readable(), stream_set_timeout(), popen(), stream_context_create(), umask()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fopen(string $filename, string $mode, bool $use_include_path = false, ?resource $context = null) {}

	/**
	 * Output all remaining data on a file pointer
	 * <p>Reads to EOF on the given file pointer from the current position and writes the results to the output buffer.</p><p>You may need to call <code>rewind()</code> to reset the file pointer to the beginning of the file if you have already written data to the file.</p><p>If you just want to dump the contents of a file to the output buffer, without first modifying it or seeking to a particular offset, you may want to use the <code>readfile()</code>, which saves you the <code>fopen()</code> call.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @return int <p>Returns the number of characters read from <code>stream</code> and passed through to the output.</p>
	 * @link https://php.net/manual/en/function.fpassthru.php
	 * @see readfile(), fopen(), popen(), fsockopen()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fpassthru($stream): int {}

	/**
	 * Format line as CSV and write to file pointer
	 * <p><b>fputcsv()</b> formats a line (passed as a <code>fields</code> array) as CSV and writes it (terminated by a newline) to the specified file <code>stream</code>.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @param array $fields <p>An array of <code>string</code>s.</p>
	 * @param string $separator <p>The optional <code>separator</code> parameter sets the field delimiter (one single-byte character only).</p>
	 * @param string $enclosure <p>The optional <code>enclosure</code> parameter sets the field enclosure (one single-byte character only).</p>
	 * @param string $escape <p>The optional <code>escape</code> parameter sets the escape character (at most one single-byte character). An empty string (<code>""</code>) disables the proprietary escape mechanism.</p>
	 * @param string $eol <p>The optional <code>eol</code> parameter sets a custom End of Line sequence.</p>
	 * @return int|false <p>Returns the length of the written string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fputcsv.php
	 * @see fgetcsv()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false {}

	/**
	 * Alias of fwrite()
	 * <p>This function is an alias of: <code>fwrite()</code>.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param string $data <p>The string that is to be written.</p>
	 * @param ?int $length <p>If <code>length</code> is an <code>int</code>, writing will stop after <code>length</code> bytes have been written or the end of <code>data</code> is reached, whichever comes first.</p>
	 * @return int|false
	 * @link https://php.net/manual/en/function.fputs.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fputs($stream, string $data, ?int $length = null): int|false {}

	/**
	 * Binary-safe file read
	 * <p><b>fread()</b> reads up to <code>length</code> bytes from the file pointer referenced by <code>stream</code>. Reading stops as soon as one of the following conditions is met:</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param int $length <p>Up to <code>length</code> number of bytes read.</p>
	 * @return string|false <p>Returns the read string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fread.php
	 * @see fwrite(), fopen(), fsockopen(), popen(), fgets(), fgetss(), fscanf(), file(), fpassthru(), ftell(), rewind(), unpack()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fread($stream, int $length): string|false {}

	/**
	 * Parses input from a file according to a format
	 * <p>The function <b>fscanf()</b> is similar to <code>sscanf()</code>, but it takes its input from a file associated with <code>stream</code> and interprets the input according to the specified <code>format</code>, which is described in the documentation for <code>sprintf()</code>.</p><p>Any whitespace in the format string matches any whitespace in the input stream. This means that even a tab <code>\t</code> in the format string can match a single space character in the input stream.</p><p>Each call to <b>fscanf()</b> reads one line from the file.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
	 * @param mixed $vars <p>The optional assigned values.</p>
	 * @return array|int|false|null <p>If only two parameters were passed to this function, the values parsed will be returned as an array. Otherwise, if optional parameters are passed, the function will return the number of assigned values. The optional parameters must be passed by reference.</p><p>If there are more substrings expected in the <code>format</code> than there are available within <code>string</code>, <b><code>null</code></b> will be returned. On other errors, <b><code>false</code></b> will be returned.</p>
	 * @link https://php.net/manual/en/function.fscanf.php
	 * @see fread(), fgets(), fgetss(), sscanf(), printf(), sprintf()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function fscanf($stream, string $format, mixed &...$vars): array|int|false|null {}

	/**
	 * Seeks on a file pointer
	 * <p>Sets the file position indicator for the file referenced by <code>stream</code>. The new position, measured in bytes from the beginning of the file, is obtained by adding <code>offset</code> to the position specified by <code>whence</code>.</p><p>In general, it is allowed to seek past the end-of-file; if data is then written, reads in any unwritten region between the end-of-file and the sought position will yield bytes with value 0. However, certain streams may not support this behavior, especially when they have an underlying fixed size storage.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param int $offset <p>The offset.</p> <p>To move to a position before the end-of-file, you need to pass a negative value in <code>offset</code> and set <code>whence</code> to <b><code>SEEK_END</code></b>.</p>
	 * @param int $whence <p><code>whence</code> values are:</p><ul> <li><b><code>SEEK_SET</code></b> - Set position equal to <code>offset</code> bytes.</li> <li><b><code>SEEK_CUR</code></b> - Set position to current location plus <code>offset</code>.</li> <li><b><code>SEEK_END</code></b> - Set position to end-of-file plus <code>offset</code>.</li> </ul>
	 * @return int <p>Upon success, returns 0; otherwise, returns -1.</p>
	 * @link https://php.net/manual/en/function.fseek.php
	 * @see ftell(), rewind()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fseek($stream, int $offset, int $whence = SEEK_SET): int {}

	/**
	 * Gets information about a file using an open file pointer
	 * <p>Gathers the statistics of the file opened by the file pointer <code>stream</code>. This function is similar to the <code>stat()</code> function except that it operates on an open file pointer instead of a filename.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @return array|false <p>Returns an array with the statistics of the file; the format of the array is described in detail on the <code>stat()</code> manual page. Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fstat.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fstat($stream): array|false {}

	/**
	 * Synchronizes changes to the file (including meta-data)
	 * <p>This function synchronizes changes to the file, including its meta-data. This is similar to <code>fflush()</code>, but it also instructs the operating system to write to the storage media.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>fsockopen()</code> (and not yet closed by <code>fclose()</code>).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fsync.php
	 * @see fdatasync(), fflush()
	 * @since PHP 8 >= 8.1.0
	 */
	function fsync($stream): bool {}

	/**
	 * Returns the current position of the file read/write pointer
	 * <p>Returns the position of the file pointer referenced by <code>stream</code>.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code> or <code>popen()</code>. <b>ftell()</b> gives undefined results for append-only streams (opened with "a" flag).</p>
	 * @return int|false <p>Returns the position of the file pointer referenced by <code>stream</code> as an integer; i.e., its offset into the file stream.</p><p>If an error occurs, returns <b><code>false</code></b>.</p><p><b>Note</b>:  Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB. </p>
	 * @link https://php.net/manual/en/function.ftell.php
	 * @see fopen(), popen(), fseek(), rewind()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ftell($stream): int|false {}

	/**
	 * Truncates a file to a given length
	 * <p>Takes the filepointer, <code>stream</code>, and truncates the file to length, <code>size</code>.</p>
	 * @param resource $stream <p>The file pointer.</p> <p><b>Note</b>:</p><p>The <code>stream</code> must be open for writing.</p>
	 * @param int $size <p>The size to truncate to.</p> <p><b>Note</b>:</p><p>If <code>size</code> is larger than the file then the file is extended with null bytes.</p> <p>If <code>size</code> is smaller than the file then the file is truncated to that size.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ftruncate.php
	 * @see fopen(), fseek()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ftruncate($stream, int $size): bool {}

	/**
	 * Binary-safe file write
	 * <p><b>fwrite()</b> writes the contents of <code>data</code> to the file stream pointed to by <code>stream</code>.</p>
	 * @param resource $stream <p>A file system pointer <code>resource</code> that is typically created using <code>fopen()</code>.</p>
	 * @param string $data <p>The string that is to be written.</p>
	 * @param ?int $length <p>If <code>length</code> is an <code>int</code>, writing will stop after <code>length</code> bytes have been written or the end of <code>data</code> is reached, whichever comes first.</p>
	 * @return int|false <p><b>fwrite()</b> returns the number of bytes written, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fwrite.php
	 * @see fread(), fopen(), fsockopen(), popen(), file_get_contents(), pack()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function fwrite($stream, string $data, ?int $length = null): int|false {}

	/**
	 * Find pathnames matching a pattern
	 * <p>The <b>glob()</b> function searches for all the pathnames matching <code>pattern</code> according to the rules used by the libc glob() function, which is similar to the rules used by common shells.</p>
	 * @param string $pattern <p>The pattern. No tilde expansion or parameter substitution is done.</p> <p>Special characters:</p><ul> <li>  <code>&#42;</code> - Matches zero or more characters.  </li> <li>  <code>&#63;</code> - Matches exactly one character (any character).  </li> <li>  <code>[...]</code> - Matches one character from a group of characters. If the first character is <code>!</code>, matches any character not in the group.  </li> <li>  <code>\</code> - Escapes the following character, except when the <b><code>GLOB_NOESCAPE</code></b> flag is used.  </li> </ul>
	 * @param int $flags <p>Valid flags:</p><ul> <li>  <b><code>GLOB_MARK</code></b> - Adds a slash (a backslash on Windows) to each directory returned  </li> <li>  <b><code>GLOB_NOSORT</code></b> - Return files as they appear in the directory (no sorting). When this flag is not used, the pathnames are sorted alphabetically  </li> <li>  <b><code>GLOB_NOCHECK</code></b> - Return the search pattern if no files matching it were found  </li> <li>  <b><code>GLOB_NOESCAPE</code></b> - Backslashes do not quote metacharacters  </li> <li>  <b><code>GLOB_BRACE</code></b> - Expands {a,b,c} to match 'a', 'b', or 'c'  </li> <li>  <b><code>GLOB_ONLYDIR</code></b> - Return only directory entries which match the pattern  </li> <li>  <b><code>GLOB_ERR</code></b> - Stop on read errors (like unreadable directories), by default errors are ignored.  </li> </ul> <p><b>Note</b>:  The <b><code>GLOB_BRACE</code></b> flag is not available on some non GNU systems, like Solaris or Alpine Linux. </p>
	 * @return array|false <p>Returns an array containing the matched files/directories, an empty array if no file matched or <b><code>false</code></b> on error.</p><p><b>Note</b>:</p><p>On some systems it is impossible to distinguish between empty match and an error.</p>
	 * @link https://php.net/manual/en/function.glob.php
	 * @see opendir(), readdir(), closedir(), fnmatch()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function glob(string $pattern, int $flags = 0): array|false {}

	/**
	 * Tells whether the filename is a directory
	 * <p>Tells whether the given filename is a directory.</p>
	 * @param string $filename <p>Path to the file. If <code>filename</code> is a relative filename, it will be checked relative to the current working directory. If <code>filename</code> is a symbolic or hard link then the link will be resolved and checked. If you have enabled open_basedir further restrictions may apply.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the filename exists and is a directory, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-dir.php
	 * @see chdir(), dir(), opendir(), is_file(), is_link()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_dir(string $filename): bool {}

	/**
	 * Tells whether the filename is executable
	 * <p>Tells whether the filename is executable.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the filename exists and is executable, or <b><code>false</code></b> on error. On POSIX systems, a file is executable if the executable bit of the file permissions is set. For Windows, see the note below.</p>
	 * @link https://php.net/manual/en/function.is-executable.php
	 * @see is_file(), is_link()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_executable(string $filename): bool {}

	/**
	 * Tells whether the filename is a regular file
	 * <p>Tells whether the given file is a regular file.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the filename exists and is a regular file, <b><code>false</code></b> otherwise.</p><p><b>Note</b>:  Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB. </p>
	 * @link https://php.net/manual/en/function.is-file.php
	 * @see is_dir(), is_link()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_file(string $filename): bool {}

	/**
	 * Tells whether the filename is a symbolic link
	 * <p>Tells whether the given file is a symbolic link.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the filename exists and is a symbolic link, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-link.php
	 * @see is_dir(), is_file(), readlink()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_link(string $filename): bool {}

	/**
	 * Tells whether a file exists and is readable
	 * <p>Tells whether a file exists and is readable.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the file or directory specified by <code>filename</code> exists and is readable, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-readable.php
	 * @see is_writable(), file_exists(), fgets()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_readable(string $filename): bool {}

	/**
	 * Tells whether the file was uploaded via HTTP POST
	 * <p>Returns <b><code>true</code></b> if the file named by <code>filename</code> was uploaded via HTTP POST. This is useful to help ensure that a malicious user hasn't tried to trick the script into working on files upon which it should not be working--for instance, /etc/passwd.</p><p>This sort of check is especially important if there is any chance that anything done with uploaded files could reveal their contents to the user, or even to other users on the same system.</p><p>For proper working, the function <b>is_uploaded_file()</b> needs an argument like $_FILES['userfile']['tmp_name'], - the name of the uploaded file on the client's machine $_FILES['userfile']['name'] does not work.</p>
	 * @param string $filename <p>The filename being checked.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.is-uploaded-file.php
	 * @see move_uploaded_file()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8
	 */
	function is_uploaded_file(string $filename): bool {}

	/**
	 * Tells whether the filename is writable
	 * <p>Returns <b><code>true</code></b> if the <code>filename</code> exists and is writable. The filename argument may be a directory name allowing you to check if a directory is writable.</p><p>Keep in mind that PHP may be accessing the file as the user id that the web server runs as (often 'nobody'). Safe mode limitations are not taken into account.</p>
	 * @param string $filename <p>The filename being checked.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the <code>filename</code> exists and is writable.</p>
	 * @link https://php.net/manual/en/function.is-writable.php
	 * @see is_readable(), file_exists(), fwrite()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_writable(string $filename): bool {}

	/**
	 * Alias of is_writable()
	 * <p>This function is an alias of: <code>is_writable()</code>.</p>
	 * @param string $filename <p>The filename being checked.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.is-writeable.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_writeable(string $filename): bool {}

	/**
	 * Changes group ownership of symlink
	 * <p>Attempts to change the group of the symlink <code>filename</code> to <code>group</code>.</p><p>Only the superuser may change the group of a symlink arbitrarily; other users may change the group of a symlink to any group of which that user is a member.</p>
	 * @param string $filename <p>Path to the symlink.</p>
	 * @param string|int $group <p>The group specified by name or number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.lchgrp.php
	 * @see chgrp(), lchown(), chown(), chmod()
	 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
	 */
	function lchgrp(string $filename, string|int $group): bool {}

	/**
	 * Changes user ownership of symlink
	 * <p>Attempts to change the owner of the symlink <code>filename</code> to user <code>user</code>.</p><p>Only the superuser may change the owner of a symlink.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param string|int $user <p>User name or number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.lchown.php
	 * @see chown(), lchgrp(), chgrp(), chmod()
	 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
	 */
	function lchown(string $filename, string|int $user): bool {}

	/**
	 * Create a hard link
	 * <p><b>link()</b> creates a hard link.</p>
	 * @param string $target <p>Target of the link.</p>
	 * @param string $link <p>The link name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.link.php
	 * @see symlink(), readlink(), linkinfo(), unlink()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function link(string $target, string $link): bool {}

	/**
	 * Gets information about a link
	 * <p>Gets information about a link.</p><p>This function is used to verify if a link (pointed to by <code>path</code>) really exists (using the same method as the S_ISLNK macro defined in stat.h).</p>
	 * @param string $path <p>Path to the link.</p>
	 * @return int|false <p><b>linkinfo()</b> returns the <code>st_dev</code> field of the Unix C stat structure returned by the <code>lstat</code> system call. Returns a non-negative integer on success, -1 in case the link was not found, or <b><code>false</code></b> if an open.base_dir violation occurs.</p>
	 * @link https://php.net/manual/en/function.linkinfo.php
	 * @see symlink(), link(), readlink()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function linkinfo(string $path): int|false {}

	/**
	 * Gives information about a file or symbolic link
	 * <p>Gathers the statistics of the file or symbolic link named by <code>filename</code>.</p>
	 * @param string $filename <p>Path to a file or a symbolic link.</p>
	 * @return array|false <p>See the manual page for <code>stat()</code> for information on the structure of the array that <b>lstat()</b> returns. This function is identical to the <code>stat()</code> function except that if the <code>filename</code> parameter is a symbolic link, the status of the symbolic link is returned, not the status of the file pointed to by the symbolic link.</p><p>On failure, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.lstat.php
	 * @see stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function lstat(string $filename): array|false {}

	/**
	 * Makes directory
	 * <p>Attempts to create the directory specified by <code>directory</code>.</p>
	 * @param string $directory <p>The directory path.</p>
	 * @param int $permissions <p>The permissions are 0777 by default, which means the widest possible access. For more information on permissions, read the details on the <code>chmod()</code> page.</p> <p><b>Note</b>:</p><p><code>permissions</code> is ignored on Windows.</p>  <p>Note that you probably want to specify the <code>permissions</code> as an octal number, which means it should have a leading zero. The <code>permissions</code> is also modified by the current umask, which you can change using <code>umask()</code>.</p>
	 * @param bool $recursive <p>Allows the creation of nested directories specified in the <code>directory</code>.</p>
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.mkdir.php
	 * @see is_dir(), rmdir()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function mkdir(string $directory, int $permissions = 0777, bool $recursive = false, ?resource $context = null): bool {}

	/**
	 * Moves an uploaded file to a new location
	 * <p>This function checks to ensure that the file designated by <code>from</code> is a valid upload file (meaning that it was uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given by <code>to</code>.</p><p>This sort of check is especially important if there is any chance that anything done with uploaded files could reveal their contents to the user, or even to other users on the same system.</p>
	 * @param string $from <p>The filename of the uploaded file.</p>
	 * @param string $to <p>The destination of the moved file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success.</p><p>If <code>from</code> is not a valid upload file, then no action will occur, and <b>move_uploaded_file()</b> will return <b><code>false</code></b>.</p><p>If <code>from</code> is a valid upload file, but cannot be moved for some reason, no action will occur, and <b>move_uploaded_file()</b> will return <b><code>false</code></b>. Additionally, a warning will be issued.</p>
	 * @link https://php.net/manual/en/function.move-uploaded-file.php
	 * @see is_uploaded_file(), rename()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8
	 */
	function move_uploaded_file(string $from, string $to): bool {}

	/**
	 * Parse a configuration file
	 * <p><b>parse_ini_file()</b> loads in the ini file specified in <code>filename</code>, and returns the settings in it in an associative array.</p><p>The structure of the ini file is the same as the php.ini's.</p>
	 * @param string $filename <p>The filename of the ini file being parsed. If a relative path is used, it is evaluated relative to the current working directory, then the include_path.</p>
	 * @param bool $process_sections <p>By setting the <code>process_sections</code> parameter to <b><code>true</code></b>, you get a multidimensional array, with the section names and settings included. The default for <code>process_sections</code> is <b><code>false</code></b></p>
	 * @param int $scanner_mode <p>Can either be <b><code>INI_SCANNER_NORMAL</code></b> (default) or <b><code>INI_SCANNER_RAW</code></b>. If <b><code>INI_SCANNER_RAW</code></b> is supplied, then option values will not be parsed.</p> <p>As of PHP 5.6.1 can also be specified as <b><code>INI_SCANNER_TYPED</code></b>. In this mode boolean, null and integer types are preserved when possible. String values <code>"true"</code>, <code>"on"</code> and <code>"yes"</code> are converted to <b><code>true</code></b>. <code>"false"</code>, <code>"off"</code>, <code>"no"</code> and <code>"none"</code> are considered <b><code>false</code></b>. <code>"null"</code> is converted to <b><code>null</code></b> in typed mode. Also, all numeric strings are converted to integer type if it is possible.</p>
	 * @return array|false <p>The settings are returned as an associative <code>array</code> on success, and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.parse-ini-file.php
	 * @see parse_ini_string()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false {}

	/**
	 * Parse a configuration string
	 * <p><b>parse_ini_string()</b> returns the settings in string <code>ini_string</code> in an associative array.</p><p>The structure of the ini string is the same as the php.ini's.</p>
	 * @param string $ini_string <p>The contents of the ini file being parsed.</p>
	 * @param bool $process_sections <p>By setting the <code>process_sections</code> parameter to <b><code>true</code></b>, you get a multidimensional array, with the section names and settings included. The default for <code>process_sections</code> is <b><code>false</code></b></p>
	 * @param int $scanner_mode <p>Can either be <b><code>INI_SCANNER_NORMAL</code></b> (default) or <b><code>INI_SCANNER_RAW</code></b>. If <b><code>INI_SCANNER_RAW</code></b> is supplied, then option values will not be parsed.</p> <p>As of PHP 5.6.1 can also be specified as <b><code>INI_SCANNER_TYPED</code></b>. In this mode boolean, null and integer types are preserved when possible. String values <code>"true"</code>, <code>"on"</code> and <code>"yes"</code> are converted to <b><code>true</code></b>. <code>"false"</code>, <code>"off"</code>, <code>"no"</code> and <code>"none"</code> are considered <b><code>false</code></b>. <code>"null"</code> is converted to <b><code>null</code></b> in typed mode. Also, all numeric strings are converted to integer type if it is possible.</p>
	 * @return array|false <p>The settings are returned as an associative <code>array</code> on success, and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.parse-ini-string.php
	 * @see parse_ini_file()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array|false {}

	/**
	 * Returns information about a file path
	 * <p><b>pathinfo()</b> returns information about <code>path</code>: either an associative array or a string, depending on <code>flags</code>.</p><p><b>Note</b>:</p><p>For information on retrieving the current path info, read the section on  predefined reserved variables.</p><p><b>Note</b>:</p><p><b>pathinfo()</b> operates naively on the input string, and is not aware of the actual filesystem, or path components such as "<code>..</code>".</p><p><b>pathinfo()</b> is locale aware, so for it to parse a path containing multibyte characters correctly, the matching locale must be set using the <code>setlocale()</code> function.</p>
	 * @param string $path <p>The path to be parsed.</p>
	 * @param int $flags <p>If present, specifies a specific element to be returned; one of <b><code>PATHINFO_DIRNAME</code></b>, <b><code>PATHINFO_BASENAME</code></b>, <b><code>PATHINFO_EXTENSION</code></b> or <b><code>PATHINFO_FILENAME</code></b>.</p> <p>If <code>flags</code> is not specified, returns all available elements.</p>
	 * @return array|string <p>If the <code>flags</code> parameter is not passed, an associative <code>array</code> containing the following elements is returned: <code>dirname</code>, <code>basename</code>, <code>extension</code> (if any), and <code>filename</code>.</p><p><b>Note</b>:</p><p>If the <code>path</code> has more than one extension, <b><code>PATHINFO_EXTENSION</code></b> returns only the last one and <b><code>PATHINFO_FILENAME</code></b> only strips the last one. (see first example below).</p> <p><b>Note</b>:</p><p>If the <code>path</code> does not have an extension, no <code>extension</code> element will be returned (see second example below).</p> <p><b>Note</b>:</p><p>If the <code>basename</code> of the <code>path</code> starts with a dot, the following characters are interpreted as <code>extension</code>, and the <code>filename</code> is empty (see third example below).</p> <p>If <code>flags</code> is present, returns a <code>string</code> containing the requested element.</p>
	 * @link https://php.net/manual/en/function.pathinfo.php
	 * @see dirname(), basename(), parse_url(), realpath()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8
	 */
	function pathinfo(string $path, int $flags = PATHINFO_ALL): array|string {}

	/**
	 * Closes process file pointer
	 * <p>Closes a file pointer to a pipe opened by <code>popen()</code>.</p>
	 * @param resource $handle <p>The file pointer must be valid, and must have been returned by a successful call to <code>popen()</code>.</p>
	 * @return int <p>Returns the termination status of the process that was run. In case of an error then <code>-1</code> is returned.</p><p><b>Note</b>:</p><p>If PHP has been compiled with --enable-sigchild, the return value of this function is undefined.</p>
	 * @link https://php.net/manual/en/function.pclose.php
	 * @see popen()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function pclose($handle): int {}

	/**
	 * Opens process file pointer
	 * <p>Opens a pipe to a process executed by forking the command given by <code>command</code>.</p>
	 * @param string $command <p>The command</p>
	 * @param string $mode <p>The mode. Either <code>'r'</code> for reading, or <code>'w'</code> for writing.</p> <p>On Windows, <b>popen()</b> defaults to text mode, i.e. any <code>\n</code> characters written to or read from the pipe will be translated to <code>\r\n</code>. If this is not desired, binary mode can be enforced by setting <code>mode</code> to <code>'rb'</code> and <code>'wb'</code>, respectively.</p>
	 * @return resource|false <p>Returns a file pointer identical to that returned by <code>fopen()</code>, except that it is unidirectional (may only be used for reading or writing) and must be closed with <code>pclose()</code>. This pointer may be used with <code>fgets()</code>, <code>fgetss()</code>, and <code>fwrite()</code>. When the mode is 'r', the returned file pointer equals to the STDOUT of the command, when the mode is 'w', the returned file pointer equals to the STDIN of the command.</p><p>If an error occurs, returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.popen.php
	 * @see pclose(), fopen(), proc_open()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function popen(string $command, string $mode) {}

	/**
	 * Outputs a file
	 * <p>Reads a file and writes it to the output buffer.</p>
	 * @param string $filename <p>The filename being read.</p>
	 * @param bool $use_include_path <p>You can use the optional second parameter and set it to <b><code>true</code></b>, if you want to search for the file in the include_path, too.</p>
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return int|false <p>Returns the number of bytes read from the file on success, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.readfile.php
	 * @see fpassthru(), file(), fopen(), include, require, virtual(), file_get_contents()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function readfile(string $filename, bool $use_include_path = false, ?resource $context = null): int|false {}

	/**
	 * Returns the target of a symbolic link
	 * <p><b>readlink()</b> does the same as the readlink C function.</p>
	 * @param string $path <p>The symbolic link path.</p>
	 * @return string|false <p>Returns the contents of the symbolic link path or <b><code>false</code></b> on error.</p><p><b>Note</b>:  The function fails if <code>path</code> is not a symlink, except on Windows, where the normalized path will be returned. </p>
	 * @link https://php.net/manual/en/function.readlink.php
	 * @see is_link(), symlink(), linkinfo()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function readlink(string $path): string|false {}

	/**
	 * Returns canonicalized absolute pathname
	 * <p><b>realpath()</b> expands all symbolic links and resolves references to <code>/./</code>, <code>/../</code> and extra <code>/</code> characters in the input <code>path</code> and returns the canonicalized absolute pathname.</p>
	 * @param string $path <p>The path being checked.</p><p><b>Note</b>:</p><p>Whilst a path must be supplied, the value can be an empty string. In this case, the value is interpreted as the current directory.</p>
	 * @return string|false <p>Returns the canonicalized absolute pathname on success. The resulting path will have no symbolic link, <code>/./</code> or <code>/../</code> components. Trailing delimiters, such as <code>\</code> and <code>/</code>, are also removed.</p><p><b>realpath()</b> returns <b><code>false</code></b> on failure, e.g. if the file does not exist.</p><p><b>Note</b>:</p><p>The running script must have executable permissions on all directories in the hierarchy, otherwise <b>realpath()</b> will return <b><code>false</code></b>.</p> <p><b>Note</b>:</p><p>For case-insensitive filesystems <b>realpath()</b> may or may not normalize the character case.</p> <p><b>Note</b>:</p><p>The function <b>realpath()</b> will not work for a file which is inside a Phar as such path would be a virtual path, not a real one.</p> <p><b>Note</b>:</p><p>On Windows, junctions and symbolic links to directories are only expanded by one level.</p> <p><b>Note</b>:  Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB. </p>
	 * @link https://php.net/manual/en/function.realpath.php
	 * @see basename(), dirname(), pathinfo()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function realpath(string $path): string|false {}

	/**
	 * Get realpath cache entries
	 * <p>Get the contents of the realpath cache.</p>
	 * @return array <p>Returns an array of realpath cache entries. The keys are original path entries, and the values are arrays of data items, containing the resolved path, expiration date, and other options kept in the cache.</p>
	 * @link https://php.net/manual/en/function.realpath-cache-get.php
	 * @see realpath_cache_size()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8
	 */
	function realpath_cache_get(): array {}

	/**
	 * Get realpath cache size
	 * <p>Get the amount of memory used by the realpath cache.</p>
	 * @return int <p>Returns how much memory realpath cache is using.</p>
	 * @link https://php.net/manual/en/function.realpath-cache-size.php
	 * @see realpath_cache_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8
	 */
	function realpath_cache_size(): int {}

	/**
	 * Renames a file or directory
	 * <p>Attempts to rename <code>from</code> to <code>to</code>, moving it between directories if necessary. If renaming a file and <code>to</code> exists, it will be overwritten. If renaming a directory and <code>to</code> exists, this function will emit a warning.</p>
	 * @param string $from <p>The old name.</p> <p><b>Note</b>:</p><p>The wrapper used in <code>from</code> <i>must</i> match the wrapper used in <code>to</code>.</p>
	 * @param string $to <p>The new name.</p><p><b>Note</b>:  On Windows, if <code>to</code> already exists, it must be writable. Otherwise <b>rename()</b> fails and issues <b><code>E_WARNING</code></b>. </p>
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rename.php
	 * @see copy(), unlink(), move_uploaded_file()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rename(string $from, string $to, ?resource $context = null): bool {}

	/**
	 * Rewind the position of a file pointer
	 * <p>Sets the file position indicator for <code>stream</code> to the beginning of the file stream.</p><p><b>Note</b>:</p><p>If you have opened the file in append ("a" or "a+") mode, any data you write to the file will always be appended, regardless of the file pointer position.</p>
	 * @param resource $stream <p>The file pointer must be valid, and must point to a file successfully opened by <code>fopen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rewind.php
	 * @see fread(), fseek(), ftell(), fwrite()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rewind($stream): bool {}

	/**
	 * Removes directory
	 * <p>Attempts to remove the directory named by <code>directory</code>. The directory must be empty, and the relevant permissions must permit this. A <b><code>E_WARNING</code></b> level error will be generated on failure.</p>
	 * @param string $directory <p>Path to the directory.</p>
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rmdir.php
	 * @see is_dir(), mkdir(), unlink()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rmdir(string $directory, ?resource $context = null): bool {}

	/**
	 * Alias of stream_set_write_buffer()
	 * <p>This function is an alias of: <code>stream_set_write_buffer()</code>.</p>
	 * @param resource $stream <p>The file pointer.</p>
	 * @param int $size <p>The number of bytes to buffer. If <code>size</code> is 0 then write operations are unbuffered. This ensures that all writes with <code>fwrite()</code> are completed before other processes are allowed to write to that output stream.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.set-file-buffer.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function set_file_buffer($stream, int $size): int {}

	/**
	 * Gives information about a file
	 * <p>Gathers the statistics of the file named by <code>filename</code>. If <code>filename</code> is a symbolic link, statistics are from the file itself, not the symlink. Prior to PHP 7.4.0, on Windows NTS builds the <code>size</code>, <code>atime</code>, <code>mtime</code> and <code>ctime</code> statistics have been from the symlink, in this case.</p><p><code>lstat()</code> is identical to <b>stat()</b> except it would instead be based off the symlinks status.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @return array|false <b><b>stat()</b> and <code>fstat()</code> result format</b>   Numeric Associative Description     0 dev device number &#42;&#42;&#42;   1 ino inode number &#42;&#42;&#42;&#42;   2 mode inode protection mode &#42;&#42;&#42;&#42;&#42;   3 nlink number of links   4 uid userid of owner &#42;   5 gid groupid of owner &#42;   6 rdev device type, if inode device   7 size size in bytes   8 atime time of last access (Unix timestamp)   9 mtime time of last modification (Unix timestamp)   10 ctime time of last inode change (Unix timestamp)   11 blksize blocksize of filesystem IO &#42;&#42;   12 blocks number of 512-byte blocks allocated &#42;&#42;   <p>&#42; On Windows this will always be <code>0</code>.</p><p>&#42;&#42; Only valid on systems supporting the st_blksize type - other systems (e.g. Windows) return <code>-1</code>.</p><p>&#42;&#42;&#42; On Windows, as of PHP 7.4.0, this is the serial number of the volume that contains the file, which is a 64-bit <i>unsigned</i> integer, so may overflow. Previously, it was the numeric representation of the drive letter (e.g. <code>2</code> for <code>C:</code>) for <b>stat()</b>, and <code>0</code> for <code>lstat()</code>.</p><p>&#42;&#42;&#42;&#42; On Windows, as of PHP 7.4.0, this is the identifier associated with the file, which is a 64-bit <i>unsigned</i> integer, so may overflow. Previously, it was always <code>0</code>.</p><p>&#42;&#42;&#42;&#42;&#42; On Windows, the writable permission bit is set according to the read-only file attribute, and the same value is reported for all users, group and owner. The ACL is not taken into account, contrary to <code>is_writable()</code>.</p><p>The value of <code>mode</code> contains information read by several functions. When written in octal, starting from the right, the first three digits are returned by <code>chmod()</code>. The next digit is ignored by PHP. The next two digits indicate the file type:</p> <b><code>mode</code> file types</b>   <code>mode</code> in octal Meaning     <b><code>0140000</code></b> socket   <b><code>0120000</code></b> link   <b><code>0100000</code></b> regular file   <b><code>0060000</code></b> block device   <b><code>0040000</code></b> directory   <b><code>0020000</code></b> character device   <b><code>0010000</code></b> fifo    So for example a regular file could be <b><code>0100644</code></b> and a directory could be <b><code>0040755</code></b>. <p>In case of error, <b>stat()</b> returns <b><code>false</code></b>.</p><p><b>Note</b>:  Because PHP's integer type is signed and many platforms use 32bit integers, some filesystem functions may return unexpected results for files which are larger than 2GB. </p>
	 * @link https://php.net/manual/en/function.stat.php
	 * @see lstat(), fstat(), filemtime(), filegroup()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function stat(string $filename): array|false {}

	/**
	 * Creates a symbolic link
	 * <p><b>symlink()</b> creates a symbolic link to the existing <code>target</code> with the specified name <code>link</code>.</p>
	 * @param string $target <p>Target of the link.</p>
	 * @param string $link <p>The link name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.symlink.php
	 * @see link(), readlink(), linkinfo(), unlink()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function symlink(string $target, string $link): bool {}

	/**
	 * Create file with unique file name
	 * <p>Creates a file with a unique filename, with access permission set to 0600, in the specified directory. If the directory does not exist or is not writable, <b>tempnam()</b> may generate a file in the system's temporary directory, and return the full path to that file, including its name.</p>
	 * @param string $directory <p>The directory where the temporary filename will be created.</p>
	 * @param string $prefix <p>The prefix of the generated temporary filename.</p> <p><b>Note</b>:  Only the first 63 characters of the prefix are used. Windows even uses only the first three characters of the prefix. </p>
	 * @return string|false <p>Returns the new temporary filename (with path), or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.tempnam.php
	 * @see tmpfile(), sys_get_temp_dir(), unlink()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function tempnam(string $directory, string $prefix): string|false {}

	/**
	 * Creates a temporary file
	 * <p>Creates a temporary file with a unique name in read-write (w+) mode and returns a file handle.</p><p>The file is automatically removed when closed (for example, by calling <code>fclose()</code>, or when there are no remaining references to the file handle returned by <b>tmpfile()</b>), or when the script ends.</p><p>If the script terminates unexpectedly, the temporary file may not be deleted.</p>
	 * @return resource|false <p>Returns a file handle, similar to the one returned by <code>fopen()</code>, for the new file or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.tmpfile.php
	 * @see tempnam(), sys_get_temp_dir()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function tmpfile() {}

	/**
	 * Sets access and modification time of file
	 * <p>Attempts to set the access and modification times of the file named in the <code>filename</code> parameter to the value given in <code>mtime</code>. Note that the access time is always modified, regardless of the number of parameters.</p><p>If the file does not exist, it will be created.</p>
	 * @param string $filename <p>The name of the file being touched.</p>
	 * @param ?int $mtime <p>The touch time. If <code>mtime</code> is <b><code>null</code></b>, the current system <code>time()</code> is used.</p>
	 * @param ?int $atime <p>If <b><code>null</code></b>, the access time of the given filename is set to the value of <code>atime</code>. Otherwise, it is set to the value passed to the <code>mtime</code> parameter. If both are <b><code>null</code></b>, the current system time is used.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.touch.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function touch(string $filename, ?int $mtime = null, ?int $atime = null): bool {}

	/**
	 * Changes the current umask
	 * <p><b>umask()</b> sets PHP's umask to <code>mask</code> &amp; 0777 and returns the old umask. When PHP is being used as a server module, the umask is restored when each request is finished.</p>
	 * @param ?int $mask <p>The new umask.</p>
	 * @return int <p>If <code>mask</code> is <b><code>null</code></b>, <b>umask()</b> simply returns the current umask otherwise the old umask is returned.</p>
	 * @link https://php.net/manual/en/function.umask.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function umask(?int $mask = null): int {}

	/**
	 * Deletes a file
	 * <p>Deletes <code>filename</code>. Similar to the Unix C unlink() function. An <b><code>E_WARNING</code></b> level error will be generated on failure.</p>
	 * @param string $filename <p>Path to the file.</p> <p>If the file is a symlink, the symlink will be deleted. On Windows, to delete a symlink to a directory, <code>rmdir()</code> has to be used instead.</p>
	 * @param ?resource $context <p>A context stream <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.unlink.php
	 * @see rmdir()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function unlink(string $filename, ?resource $context = null): bool {}

	/**
	 * Append content to existing file.
	 */
	define('FILE_APPEND', 8);

	/**
	 * <p>Binary mode.</p><p><b>Note</b>:</p><p>This constant has no effect, and is only available for <code>forward compatibility</code>.</p>
	 */
	define('FILE_BINARY', 0);

	/**
	 * Strip EOL characters.
	 */
	define('FILE_IGNORE_NEW_LINES', 2);

	define('FILE_NO_DEFAULT_CONTEXT', 16);

	/**
	 * Skip empty lines.
	 */
	define('FILE_SKIP_EMPTY_LINES', 4);

	/**
	 * <p>Text mode.</p><p><b>Note</b>:</p><p>This constant has no effect, and is only available for <code>forward compatibility</code>.</p>
	 */
	define('FILE_TEXT', 0);

	/**
	 * Search for <code>filename</code> in include_path.
	 */
	define('FILE_USE_INCLUDE_PATH', 1);

	/**
	 * Caseless match. Part of the GNU extension.
	 */
	define('FNM_CASEFOLD', 16);

	/**
	 * Disable backslash escaping.
	 */
	define('FNM_NOESCAPE', 2);

	/**
	 * Slash in string only matches slash in the given pattern.
	 */
	define('FNM_PATHNAME', 1);

	/**
	 * Leading period in string must be exactly matched by period in the given pattern.
	 */
	define('FNM_PERIOD', 4);

	define('GLOB_AVAILABLE_FLAGS', 9303);

	define('GLOB_BRACE', 1024);

	define('GLOB_MARK', 2);

	define('GLOB_NOCHECK', 16);

	define('GLOB_NOESCAPE', 64);

	define('GLOB_NOSORT', 4);

	define('GLOB_ONLYDIR', 8192);

	/**
	 * Normal INI scanner mode.
	 */
	define('INI_SCANNER_NORMAL', 0);

	/**
	 * Raw INI scanner mode.
	 */
	define('INI_SCANNER_RAW', 1);

	/**
	 * Typed INI scanner mode.
	 */
	define('INI_SCANNER_TYPED', 2);

	define('LOCK_EX', 2);

	define('LOCK_NB', 4);

	define('LOCK_SH', 1);

	define('LOCK_UN', 3);

	define('PATHINFO_BASENAME', 2);

	define('PATHINFO_DIRNAME', 1);

	define('PATHINFO_EXTENSION', 4);

	define('PATHINFO_FILENAME', 8);

	define('SEEK_CUR', 1);

	define('SEEK_END', 2);

	define('SEEK_SET', 0);

}
