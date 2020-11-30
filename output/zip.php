<?php



namespace {

	/**
	 * <p>A file archive, compressed with Zip.</p>
	 * @link http://php.net/manual/en/class.ziparchive.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
	 */
	class ZipArchive implements \Countable {

		/**
		 * @var int Create the archive if it does not exist.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CREATE = 1;

		/**
		 * @var int If archive exists, ignore its current contents. In other words, handle it the same way as an empty archive.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OVERWRITE = 8;

		/**
		 * @var int Error if archive already exists.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const EXCL = 2;

		/**
		 * @var int Perform additional consistency checks on the archive, and error if they fail.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CHECKCONS = 4;

		/**
		 * @var int Ignore case on name lookup
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_NOCASE = 1;

		/**
		 * @var int Ignore directory component
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_NODIR = 2;

		/**
		 * @var int Read compressed data
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_COMPRESSED = 4;

		/**
		 * @var int Use original data, ignoring changes.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_UNCHANGED = 8;

		/**
		 * @var int Guess string encoding (is default). Available as of PHP 7.0.8.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_GUESS = 0;

		/**
		 * @var int Get unmodified string. Available as of PHP 7.0.8.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_RAW = 64;

		/**
		 * @var int Follow specification strictly. Available as of PHP 7.0.8.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_STRICT = 128;

		/**
		 * @var int String is UTF-8 encoded. Available as of PHP 7.0.8.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_UTF_8 = 2048;

		/**
		 * @var int String is CP437 encoded. Available as of PHP 7.0.8.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_CP437 = 4096;

		/**
		 * @var int better of deflate or store.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_DEFAULT = -1;

		/**
		 * @var int stored (uncompressed).
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_STORE = 0;

		/**
		 * @var int shrunk
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_SHRINK = 1;

		/**
		 * @var int reduced with factor 1
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_1 = 2;

		/**
		 * @var int reduced with factor 2
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_2 = 3;

		/**
		 * @var int reduced with factor 3
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_3 = 4;

		/**
		 * @var int reduced with factor 4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_4 = 5;

		/**
		 * @var int imploded
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_IMPLODE = 6;

		/**
		 * @var int deflated
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_DEFLATE = 8;

		/**
		 * @var int deflate64
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_DEFLATE64 = 9;

		/**
		 * @var int PKWARE imploding
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_PKWARE_IMPLODE = 10;

		/**
		 * @var int BZIP2 algorithm
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const CM_BZIP2 = 12;

		/**
		 * @var int No error.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_OK = 0;

		/**
		 * @var int Multi-disk zip archives not supported.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_MULTIDISK = 1;

		/**
		 * @var int Renaming temporary file failed.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_RENAME = 2;

		/**
		 * @var int Closing zip archive failed
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_CLOSE = 3;

		/**
		 * @var int Seek error
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_SEEK = 4;

		/**
		 * @var int Read error
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_READ = 5;

		/**
		 * @var int Write error
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_WRITE = 6;

		/**
		 * @var int CRC error
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_CRC = 7;

		/**
		 * @var int Containing zip archive was closed
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_ZIPCLOSED = 8;

		/**
		 * @var int No such file.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_NOENT = 9;

		/**
		 * @var int File already exists
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_EXISTS = 10;

		/**
		 * @var int Can't open file
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_OPEN = 11;

		/**
		 * @var int Failure to create temporary file.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_TMPOPEN = 12;

		/**
		 * @var int Zlib error
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_ZLIB = 13;

		/**
		 * @var int Memory allocation failure
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_MEMORY = 14;

		/**
		 * @var int Entry has been changed
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_CHANGED = 15;

		/**
		 * @var int Compression method not supported.
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_COMPNOTSUPP = 16;

		/**
		 * @var int Premature EOF
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_EOF = 17;

		/**
		 * @var int Invalid argument
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_INVAL = 18;

		/**
		 * @var int Not a zip archive
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_NOZIP = 19;

		/**
		 * @var int Internal error
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_INTERNAL = 20;

		/**
		 * @var int Zip archive inconsistent
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_INCONS = 21;

		/**
		 * @var int Can't remove file
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_REMOVE = 22;

		/**
		 * @var int Entry has been deleted
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const ER_DELETED = 23;

		/**
		 * @var int No encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const EM_NONE = null;

		/**
		 * @var int AES 128 encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const EM_AES_128 = null;

		/**
		 * @var int AES 1192 encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const EM_AES_192 = null;

		/**
		 * @var int AES 256 encryption, since PHP 7.2.0, PECL zip 1.14.0
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const EM_AES_256 = null;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_DOS = 0;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_AMIGA = 1;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OPENVMS = 2;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_UNIX = 3;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_VM_CMS = 4;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_ATARI_ST = 5;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OS_2 = 6;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_MACINTOSH = 7;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_Z_SYSTEM = 8;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_CPM = 9;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_WINDOWS_NTFS = 10;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_MVS = 11;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_VSE = 12;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_ACORN_RISC = 13;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_VFAT = 14;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_ALTERNATE_MVS = 15;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_BEOS = 16;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_TANDEM = 17;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OS_400 = 18;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OS_X = 19;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link http://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_DEFAULT = 3;

		/**
		 * @var int <p>Status of the Zip Archive</p>
		 * @link http://php.net/manual/en/class.ziparchive.php#ziparchive.props.status
		 */
		public $status;

		/**
		 * @var int <p>System status of the Zip Archive</p>
		 * @link http://php.net/manual/en/class.ziparchive.php#ziparchive.props.statussys
		 */
		public $statusSys;

		/**
		 * @var int <p>Number of files in archive</p>
		 * @link http://php.net/manual/en/class.ziparchive.php#ziparchive.props.numfiles
		 */
		public $numFiles;

		/**
		 * @var string <p>File name in the file system</p>
		 * @link http://php.net/manual/en/class.ziparchive.php#ziparchive.props.filename
		 */
		public $filename;

		/**
		 * @var string <p>Comment for the archive</p>
		 * @link http://php.net/manual/en/class.ziparchive.php#ziparchive.props.comment
		 */
		public $comment;

		/**
		 * Add a new directory
		 * <p>Adds an empty directory in the archive.</p>
		 * @param string $dirname <p>The directory to add.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.addemptydir.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.8.0
		 */
		public function addEmptyDir(string $dirname): bool {}

		/**
		 * Adds a file to a ZIP archive from the given path
		 * <p>Adds a file to a ZIP archive from a given path.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<i>/</i>) as directory separator in ZIP filenames.</p>
		 * @param string $filename <p>The path to the file to add.</p>
		 * @param string $localname <p>If supplied, this is the local name inside the ZIP archive that will override the <code>filename</code>.</p>
		 * @param int $start <p>This parameter is not used but is required to extend ZipArchive.</p>
		 * @param int $length <p>This parameter is not used but is required to extend ZipArchive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.addfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function addFile(string $filename, string $localname = NULL, int $start = 0, int $length = 0): bool {}

		/**
		 * Add a file to a ZIP archive using its contents
		 * <p>Add a file to a ZIP archive using its contents.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<i>/</i>) as directory separator in ZIP filenames.</p>
		 * @param string $localname <p>The name of the entry to create.</p>
		 * @param string $contents <p>The contents to use to create the entry. It is used in a binary safe mode.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.addfromstring.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function addFromString(string $localname, string $contents): bool {}

		/**
		 * Add files from a directory by glob pattern
		 * <p>Add files from a directory which match the glob <code>pattern</code>.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<i>/</i>) as directory separator in ZIP filenames.</p>
		 * @param string $pattern <p>A <code>glob()</code> pattern against which files will be matched.</p>
		 * @param int $flags <p>A bit mask of <i>glob()</i> flags.</p>
		 * @param array $options <p>An associative array of options. Available options are:</p><ul> <li> <p><i>"add_path"</i></p> <p>Prefix to prepend when translating to the local path of the file within the archive. This is applied after any remove operations defined by the <i>"remove_path"</i> or <i>"remove_all_path"</i> options.</p> </li> <li> <p><i>"remove_path"</i></p> <p>Prefix to remove from matching file paths before adding to the archive.</p> </li> <li> <p><i>"remove_all_path"</i></p> <p><b><code>TRUE</code></b> to use the file name only and add to the root of the archive.</p> </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.addglob.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
		 */
		public function addGlob(string $pattern, int $flags = 0, array $options = array()): bool {}

		/**
		 * Add files from a directory by PCRE pattern
		 * <p>Add files from a directory which match the regular expression <code>pattern</code>. The operation is not recursive. The pattern will be matched against the file name only.</p>
		 * @param string $pattern <p>A PCRE pattern against which files will be matched.</p>
		 * @param string $path <p>The directory that will be scanned. Defaults to the current working directory.</p>
		 * @param array $options <p>An associative array of options accepted by <code>ZipArchive::addGlob()</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.addpattern.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
		 */
		public function addPattern(string $pattern, string $path = ".", array $options = array()): bool {}

		/**
		 * Close the active archive (opened or newly created)
		 * <p>Close opened or created archive and save changes. This method is automatically called at the end of the script.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.close.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function close(): bool {}

		/**
		 * Counts the number of files in the achive
		 * @return int <p>Returns the number of files in the achive.</p>
		 * @link http://php.net/manual/en/ziparchive.count.php
		 * @since No version information available, might only be in Git
		 */
		public function count(): int {}

		/**
		 * Delete an entry in the archive using its index
		 * <p>Delete an entry in the archive using its index.</p>
		 * @param int $index <p>Index of the entry to delete.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.deleteindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function deleteIndex(int $index): bool {}

		/**
		 * Delete an entry in the archive using its name
		 * <p>Delete an entry in the archive using its name.</p>
		 * @param string $name <p>Name of the entry to delete.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.deletename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function deleteName(string $name): bool {}

		/**
		 * Extract the archive contents
		 * <p>Extract the complete archive or the given files to the specified destination.</p>
		 * @param string $destination <p>Location where to extract the files.</p>
		 * @param mixed $entries <p>The entries to extract. It accepts either a single entry name or an array of names.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.extractto.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function extractTo(string $destination, $entries = NULL): bool {}

		/**
		 * Returns the Zip archive comment
		 * <p>Returns the Zip archive comment.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged comment is returned.</p>
		 * @return string <p>Returns the Zip archive comment or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getarchivecomment.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getArchiveComment(int $flags = NULL): string {}

		/**
		 * Returns the comment of an entry using the entry index
		 * <p>Returns the comment of an entry using the entry index.</p>
		 * @param int $index <p>Index of the entry</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged comment is returned.</p>
		 * @return string <p>Returns the comment on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getcommentindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function getCommentIndex(int $index, int $flags = NULL): string {}

		/**
		 * Returns the comment of an entry using the entry name
		 * <p>Returns the comment of an entry using the entry name.</p>
		 * @param string $name <p>Name of the entry</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged comment is returned.</p>
		 * @return string <p>Returns the comment on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getcommentname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function getCommentName(string $name, int $flags = NULL): string {}

		/**
		 * Retrieve the external attributes of an entry defined by its index
		 * <p>Retrieve the external attributes of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $opsys <p>On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>On success, receive the external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged attributes are returned.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getexternalattributesindex.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function getExternalAttributesIndex(int $index, int &$opsys, int &$attr, int $flags = NULL): bool {}

		/**
		 * Retrieve the external attributes of an entry defined by its name
		 * <p>Retrieve the external attributes of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $opsys <p>On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>On success, receive the external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged attributes are returned.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getexternalattributesname.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function getExternalAttributesName(string $name, int &$opsys, int &$attr, int $flags = NULL): bool {}

		/**
		 * Returns the entry contents using its index
		 * <p>Returns the entry contents using its index.</p>
		 * @param int $index <p>Index of the entry</p>
		 * @param int $length <p>The length to be read from the entry. If <i>0</i>, then the entire entry is read.</p>
		 * @param int $flags <p>The flags to use to open the archive. the following values may be ORed to it.</p><ul> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_COMPRESSED</code></b></p> </li> </ul>
		 * @return string <p>Returns the contents of the entry on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getfromindex.php
		 * @since No version information available, might only be in Git
		 */
		public function getFromIndex(int $index, int $length = 0, int $flags = NULL): string {}

		/**
		 * Returns the entry contents using its name
		 * <p>Returns the entry contents using its name.</p>
		 * @param string $name <p>Name of the entry</p>
		 * @param int $length <p>The length to be read from the entry. If <i>0</i>, then the entire entry is read.</p>
		 * @param int $flags <p>The flags to use to find the entry. The following values may be ORed.</p><ul> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_COMPRESSED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> </ul>
		 * @return string <p>Returns the contents of the entry on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getfromname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getFromName(string $name, int $length = 0, int $flags = NULL): string {}

		/**
		 * Returns the name of an entry using its index
		 * <p>Returns the name of an entry using its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged name is returned.</p>
		 * @return string <p>Returns the name on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getnameindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function getNameIndex(int $index, int $flags = NULL): string {}

		/**
		 * Returns the status error message, system and/or zip messages
		 * <p>Returns the status error message, system and/or zip messages.</p>
		 * @return string <p>Returns a <code>string</code> with the status message on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getstatusstring.php
		 * @since PHP 5 >= 5.2.7, PHP 7
		 */
		public function getStatusString(): string {}

		/**
		 * Get a file handler to the entry defined by its name (read only)
		 * <p>Get a file handler to the entry defined by its name. For now it only supports read operations.</p>
		 * @param string $name <p>The name of the entry to use.</p>
		 * @return resource <p>Returns a file pointer (resource) on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.getstream.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getStream(string $name) {}

		/**
		 * Returns the index of the entry in the archive
		 * <p>Locates an entry using its name.</p>
		 * @param string $name <p>The name of the entry to look up</p>
		 * @param int $flags <p>The flags are specified by ORing the following values, or 0 for none of them.</p><ul> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NODIR</code></b></p> </li> </ul>
		 * @return int <p>Returns the index of the entry on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.locatename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function locateName(string $name, int $flags = NULL): int {}

		/**
		 * Open a ZIP file archive
		 * <p>Opens a new zip archive for reading, writing or modifying.</p>
		 * @param string $filename <p>The file name of the ZIP archive to open.</p>
		 * @param int $flags <p>The mode to use to open the archive.</p><ul> <li> <p><b><code>ZipArchive::OVERWRITE</code></b></p> </li> <li> <p><b><code>ZipArchive::CREATE</code></b></p> </li> <li> <p><b><code>ZipArchive::EXCL</code></b></p> </li> <li> <p><b><code>ZipArchive::CHECKCONS</code></b></p> </li> </ul>
		 * @return mixed <code>Error codes</code>  <p>Returns <b><code>TRUE</code></b> on success or the error code.</p><ul> <li> <p><b><code>ZipArchive::ER_EXISTS</code></b></p> <p>File already exists.</p> </li> <li> <p><b><code>ZipArchive::ER_INCONS</code></b></p> <p>Zip archive inconsistent.</p> </li> <li> <p><b><code>ZipArchive::ER_INVAL</code></b></p> <p>Invalid argument.</p> </li> <li> <p><b><code>ZipArchive::ER_MEMORY</code></b></p> <p>Malloc failure.</p> </li> <li> <p><b><code>ZipArchive::ER_NOENT</code></b></p> <p>No such file.</p> </li> <li> <p><b><code>ZipArchive::ER_NOZIP</code></b></p> <p>Not a zip archive.</p> </li> <li> <p><b><code>ZipArchive::ER_OPEN</code></b></p> <p>Can't open file.</p> </li> <li> <p><b><code>ZipArchive::ER_READ</code></b></p> <p>Read error.</p> </li> <li> <p><b><code>ZipArchive::ER_SEEK</code></b></p> <p>Seek error.</p> </li> </ul>
		 * @link http://php.net/manual/en/ziparchive.open.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function open(string $filename, int $flags = NULL) {}

		/**
		 * Renames an entry defined by its index
		 * <p>Renames an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry to rename.</p>
		 * @param string $newname <p>New name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.renameindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function renameIndex(int $index, string $newname): bool {}

		/**
		 * Renames an entry defined by its name
		 * <p>Renames an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry to rename.</p>
		 * @param string $newname <p>New name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.renamename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function renameName(string $name, string $newname): bool {}

		/**
		 * Set the comment of a ZIP archive
		 * <p>Set the comment of a ZIP archive.</p>
		 * @param string $comment <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setarchivecomment.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setArchiveComment(string $comment): bool {}

		/**
		 * Set the comment of an entry defined by its index
		 * <p>Set the comment of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param string $comment <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setcommentindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setCommentIndex(int $index, string $comment): bool {}

		/**
		 * Set the comment of an entry defined by its name
		 * <p>Set the comment of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param string $comment <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setcommentname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setCommentName(string $name, string $comment): bool {}

		/**
		 * Set the compression method of an entry defined by its index
		 * <p>Set the compression method of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $comp_method <p>The compression method. Either <b><code>ZipArchive::CM_DEFAULT</code></b>, <b><code>ZipArchive::CM_STORE</code></b> or <b><code>ZipArchive::CM_DEFLATE</code></b>.</p>
		 * @param int $comp_flags <p>Compression flags. Currently unused.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setcompressionindex.php
		 * @since PHP 7, PECL zip >= 1.13.0
		 */
		public function setCompressionIndex(int $index, int $comp_method, int $comp_flags = 0): bool {}

		/**
		 * Set the compression method of an entry defined by its name
		 * <p>Set the compression method of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $comp_method <p>The compression method. Either <b><code>ZipArchive::CM_DEFAULT</code></b>, <b><code>ZipArchive::CM_STORE</code></b> or <b><code>ZipArchive::CM_DEFLATE</code></b>.</p>
		 * @param int $comp_flags <p>Compression flags. Currently unused.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setcompressionname.php
		 * @since PHP 7, PECL zip >= 1.13.0
		 */
		public function setCompressionName(string $name, int $comp_method, int $comp_flags = 0): bool {}

		/**
		 * Set the encryption method of an entry defined by its index
		 * <p>Set the encryption method of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param string $method <p>The encryption method defined by one of the ZipArchive::EM_ constants.</p>
		 * @param string $password <p>Optional password, default used when missing.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setencryptionindex.php
		 * @since PHP >= 7.2.0, PECL zip >= 1.14.0
		 */
		public function setEncryptionIndex(int $index, string $method, string $password = NULL): bool {}

		/**
		 * Set the encryption method of an entry defined by its name
		 * <p>Set the encryption method of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $method <p>The encryption method defined by one of the ZipArchive::EM_ constants.</p>
		 * @param string $password <p>Optional password, default used when missing.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setencryptionname.php
		 * @since PHP >= 7.2.0, PECL zip >= 1.14.0
		 */
		public function setEncryptionName(string $name, int $method, string $password = NULL): bool {}

		/**
		 * Set the external attributes of an entry defined by its index
		 * <p>Set the external attributes of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $opsys <p>The operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>The external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>Optional flags. Currently unused.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setexternalattributesindex.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = NULL): bool {}

		/**
		 * Set the external attributes of an entry defined by its name
		 * <p>Set the external attributes of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $opsys <p>The operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>The external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>Optional flags. Currently unused.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setexternalattributesname.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = NULL): bool {}

		/**
		 * Set the password for the active archive
		 * <p>Sets the password for the active archive.</p>
		 * @param string $password <p>The password to be used for the archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.setpassword.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setPassword(string $password): bool {}

		/**
		 * Get the details of an entry defined by its index
		 * <p>The function obtains information about the entry defined by its index.</p>
		 * @param int $index <p>Index of the entry</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> may be ORed to it to request information about the original file in the archive, ignoring any changes made.</p>
		 * @return array <p>Returns an array containing the entry details or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.statindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function statIndex(int $index, int $flags = NULL): array {}

		/**
		 * Get the details of an entry defined by its name
		 * <p>The function obtains information about the entry defined by its name.</p>
		 * @param string $name <p>Name of the entry</p>
		 * @param int $flags <p>The flags argument specifies how the name lookup should be done. Also, <b><code>ZipArchive::FL_UNCHANGED</code></b> may be ORed to it to request information about the original file in the archive, ignoring any changes made.</p><ul> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NODIR</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> </ul>
		 * @return array <p>Returns an array containing the entry details or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.statname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function statName(string $name, int $flags = NULL): array {}

		/**
		 * Undo all changes done in the archive
		 * <p>Undo all changes done in the archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.unchangeall.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeAll(): bool {}

		/**
		 * Revert all global changes done in the archive
		 * <p>Revert all global changes to the archive. For now, this only reverts archive comment changes.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.unchangearchive.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeArchive(): bool {}

		/**
		 * Revert all changes done to an entry at the given index
		 * <p>Revert all changes done to an entry at the given index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.unchangeindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeIndex(int $index): bool {}

		/**
		 * Revert all changes done to an entry with the given name
		 * <p>Revert all changes done to an entry.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/ziparchive.unchangename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function unchangeName(string $name): bool {}
	}

	/**
	 * Close a ZIP file archive
	 * <p>Closes the given ZIP file archive.</p>
	 * @param resource $zip <p>A ZIP file previously opened with <code>zip_open()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.zip-close.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_close($zip): void {}

	/**
	 * Close a directory entry
	 * <p>Closes the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry previously opened <code>zip_entry_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.zip-entry-close.php
	 * @see zip_entry_open(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_close($zip_entry): bool {}

	/**
	 * Retrieve the compressed size of a directory entry
	 * <p>Returns the compressed size of the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return int <p>The compressed size.</p>
	 * @link http://php.net/manual/en/function.zip-entry-compressedsize.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_compressedsize($zip_entry): int {}

	/**
	 * Retrieve the compression method of a directory entry
	 * <p>Returns the compression method of the directory entry specified by <code>zip_entry</code>.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return string <p>The compression method.</p>
	 * @link http://php.net/manual/en/function.zip-entry-compressionmethod.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_compressionmethod($zip_entry): string {}

	/**
	 * Retrieve the actual file size of a directory entry
	 * <p>Returns the actual size of the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return int <p>The size of the directory entry.</p>
	 * @link http://php.net/manual/en/function.zip-entry-filesize.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_filesize($zip_entry): int {}

	/**
	 * Retrieve the name of a directory entry
	 * <p>Returns the name of the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return string <p>The name of the directory entry.</p>
	 * @link http://php.net/manual/en/function.zip-entry-name.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_name($zip_entry): string {}

	/**
	 * Open a directory entry for reading
	 * <p>Opens a directory entry in a zip file for reading.</p>
	 * @param resource $zip <p>A valid resource handle returned by <code>zip_open()</code>.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @param string $mode <p>Any of the modes specified in the documentation of <code>fopen()</code>.</p> <p><b>Note</b>:</p><p>Currently, <code>mode</code> is ignored and is always <i>"rb"</i>. This is due to the fact that zip support in PHP is read only access.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p><b>Note</b>:</p><p>Unlike <code>fopen()</code> and other similar functions, the return value of <b>zip_entry_open()</b> only indicates the result of the operation and is not needed for reading or closing the directory entry.</p>
	 * @link http://php.net/manual/en/function.zip-entry-open.php
	 * @see zip_entry_close(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_open($zip, $zip_entry, string $mode = NULL): bool {}

	/**
	 * Read from an open directory entry
	 * <p>Reads from an open directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @param int $length <p>The number of bytes to return.</p> <p><b>Note</b>:</p><p>This should be the uncompressed length you wish to read.</p>
	 * @return string <p>Returns the data read, empty string on end of a file, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.zip-entry-read.php
	 * @see zip_entry_open(), zip_entry_close(), zip_entry_filesize()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_read($zip_entry, int $length = 1024): string {}

	/**
	 * Open a ZIP file archive
	 * <p>Opens a new zip archive for reading.</p>
	 * @param string $filename <p>The file name of the ZIP archive to open.</p>
	 * @return resource <p>Returns a resource handle for later use with <code>zip_read()</code> and <code>zip_close()</code> or returns the number of error if <code>filename</code> does not exist or in case of other error.</p>
	 * @link http://php.net/manual/en/function.zip-open.php
	 * @see zip_read(), zip_close()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_open(string $filename) {}

	/**
	 * Read next entry in a ZIP file archive
	 * <p>Reads the next entry in a zip file archive.</p>
	 * @param resource $zip <p>A ZIP file previously opened with <code>zip_open()</code>.</p>
	 * @return resource <p>Returns a directory entry resource for later use with the <i>zip_entry_...</i> functions, or <b><code>FALSE</code></b> if there are no more entries to read, or an error code if an error occurred.</p>
	 * @link http://php.net/manual/en/function.zip-read.php
	 * @see zip_open(), zip_close(), zip_entry_open(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_read($zip) {}

}
