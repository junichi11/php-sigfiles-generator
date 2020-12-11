<?php



namespace {

	/**
	 * <p>Instances of <b>Directory</b> are created by calling the <code>dir()</code> function, not by the new operator.</p>
	 * @link https://php.net/manual/en/class.directory.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	class Directory {

		/**
		 * @var string <p>The directory that was opened.</p>
		 * @link https://php.net/manual/en/class.directory.php#directory.props.path
		 */
		public $path;

		/**
		 * @var resource <p>Can be used with other directory functions such as <code>readdir()</code>, <code>rewinddir()</code> and <code>closedir()</code>.</p>
		 * @link https://php.net/manual/en/class.directory.php#directory.props.handle
		 */
		public $handle;

		/**
		 * Close directory handle
		 * <p>Same as <code>closedir()</code>, only <code> dir_handle</code> defaults to $this-&gt;handle.</p>
		 * @param resource $dir_handle
		 * @return void
		 * @link https://php.net/manual/en/directory.close.php
		 * @since PHP 4, PHP 5, PHP 7
		 */
		public function close($dir_handle = NULL): void {}

		/**
		 * Read entry from directory handle
		 * <p>Same as <code>readdir()</code>, only <code> dir_handle</code> defaults to $this-&gt;handle.</p>
		 * @param resource $dir_handle
		 * @return string
		 * @link https://php.net/manual/en/directory.read.php
		 * @since PHP 4, PHP 5, PHP 7
		 */
		public function read($dir_handle = NULL): string {}

		/**
		 * Rewind directory handle
		 * <p>Same as <code>rewinddir()</code>, only <code> dir_handle</code> defaults to $this-&gt;handle.</p>
		 * @param resource $dir_handle
		 * @return void
		 * @link https://php.net/manual/en/directory.rewind.php
		 * @since PHP 4, PHP 5, PHP 7
		 */
		public function rewind($dir_handle = NULL): void {}
	}

	/**
	 * Change directory
	 * <p>Changes PHP's current directory to <code>directory</code>.</p>
	 * @param string $directory <p>The new current directory</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.chdir.php
	 * @see getcwd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function chdir(string $directory): bool {}

	/**
	 * Change the root directory
	 * <p>Changes the root directory of the current process to <code>directory</code>, and changes the current working directory to "/".</p><p>This function is only available to GNU and BSD systems, and only when using the CLI, CGI or Embed SAPI. Also, this function requires root privileges.</p>
	 * @param string $directory <p>The path to change the root directory to.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.chroot.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function chroot(string $directory): bool {}

	/**
	 * Close directory handle
	 * <p>Closes the directory stream indicated by <code>dir_handle</code>. The stream must have previously been opened by <code>opendir()</code>.</p>
	 * @param resource $dir_handle <p>The directory handle <code>resource</code> previously opened with <code>opendir()</code>. If the directory handle is not specified, the last link opened by <code>opendir()</code> is assumed.</p>
	 * @return void
	 * @link https://php.net/manual/en/function.closedir.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function closedir($dir_handle = NULL): void {}

	/**
	 * Return an instance of the Directory class
	 * <p>A pseudo-object oriented mechanism for reading a directory. The given <code>directory</code> is opened.</p>
	 * @param string $directory <p>Directory to open</p>
	 * @param resource $context <p></p><p><b>Note</b>: Context support was added with PHP 5.0.0. For a description of <code>contexts</code>, refer to Streams.</p>
	 * @return Directory <p>Returns an instance of Directory, or <b><code>NULL</code></b> with wrong parameters, or <b><code>FALSE</code></b> in case of another error.</p>
	 * @link https://php.net/manual/en/function.dir.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dir(string $directory, $context = NULL): \Directory {}

	/**
	 * Gets the current working directory
	 * <p>Gets the current working directory.</p>
	 * @return string <p>Returns the current working directory on success, or <b><code>FALSE</code></b> on failure.</p><p>On some Unix variants, <b>getcwd()</b> will return <b><code>FALSE</code></b> if any one of the parent directories does not have the readable or search mode set, even if the current directory does. See <code>chmod()</code> for more information on modes and permissions.</p>
	 * @link https://php.net/manual/en/function.getcwd.php
	 * @see chdir(), chmod()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getcwd(): string {}

	/**
	 * Open directory handle
	 * <p>Opens up a directory handle to be used in subsequent <code>closedir()</code>, <code>readdir()</code>, and <code>rewinddir()</code> calls.</p>
	 * @param string $path <p>The directory path that is to be opened</p>
	 * @param resource $context <p>For a description of the <code>context</code> parameter, refer to the streams section of the manual.</p>
	 * @return resource|false <p>Returns a directory handle <code>resource</code> on success, or <b><code>FALSE</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.opendir.php
	 * @see is_dir(), readdir(), dir()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function opendir(string $path, $context = NULL) {}

	/**
	 * Read entry from directory handle
	 * <p>Returns the name of the next entry in the directory. The entries are returned in the order in which they are stored by the filesystem.</p>
	 * @param resource $dir_handle <p>The directory handle <code>resource</code> previously opened with <code>opendir()</code>. If the directory handle is not specified, the last link opened by <code>opendir()</code> is assumed.</p>
	 * @return string|false <p>Returns the entry name on success or <b><code>FALSE</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.readdir.php
	 * @see is_dir(), glob(), opendir(), scandir()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readdir($dir_handle = NULL) {}

	/**
	 * Rewind directory handle
	 * <p>Resets the directory stream indicated by <code>dir_handle</code> to the beginning of the directory.</p>
	 * @param resource $dir_handle <p>The directory handle <code>resource</code> previously opened with <code>opendir()</code>. If the directory handle is not specified, the last link opened by <code>opendir()</code> is assumed.</p>
	 * @return void <p>Returns <b><code>NULL</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rewinddir.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rewinddir($dir_handle = NULL): void {}

	/**
	 * List files and directories inside the specified path
	 * <p>Returns an <code>array</code> of files and directories from the <code>directory</code>.</p>
	 * @param string $directory <p>The directory that will be scanned.</p>
	 * @param int $sorting_order <p>By default, the sorted order is alphabetical in ascending order. If the optional <code>sorting_order</code> is set to <b><code>SCANDIR_SORT_DESCENDING</code></b>, then the sort order is alphabetical in descending order. If it is set to <b><code>SCANDIR_SORT_NONE</code></b> then the result is unsorted.</p>
	 * @param resource $context <p>For a description of the <code>context</code> parameter, refer to the streams section of the manual.</p>
	 * @return array <p>Returns an <code>array</code> of filenames on success, or <b><code>FALSE</code></b> on failure. If <code>directory</code> is not a directory, then boolean <b><code>FALSE</code></b> is returned, and an error of level <b><code>E_WARNING</code></b> is generated.</p>
	 * @link https://php.net/manual/en/function.scandir.php
	 * @see opendir(), readdir(), glob(), is_dir(), sort()
	 * @since PHP 5, PHP 7
	 */
	function scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, $context = NULL): array {}

	define('DIRECTORY_SEPARATOR', '/');

	/**
	 * Semicolon on Windows, colon otherwise.
	 */
	define('PATH_SEPARATOR', ':');

	/**
	 * Available since PHP 5.4.0.
	 */
	define('SCANDIR_SORT_ASCENDING', 0);

	/**
	 * Available since PHP 5.4.0.
	 */
	define('SCANDIR_SORT_DESCENDING', 1);

	/**
	 * Available since PHP 5.4.0.
	 */
	define('SCANDIR_SORT_NONE', 2);

}
