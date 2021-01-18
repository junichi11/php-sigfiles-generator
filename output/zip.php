<?php



namespace {

	/**
	 * <p>A file archive, compressed with Zip.</p>
	 * @link https://php.net/manual/en/class.ziparchive.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
	 */
	class ZipArchive implements \Countable {

		/**
		 * @var int Create the archive if it does not exist.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CREATE = 1;

		/**
		 * @var int If archive exists, ignore its current contents. In other words, handle it the same way as an empty archive.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OVERWRITE = 8;

		/**
		 * @var int Error if archive already exists.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EXCL = 2;

		/**
		 * @var int Open archive in read only mode. Available as of PHP 7.4.3 and PECL zip 1.17.1, respectively, if built against libzip &ge; 1.0.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const RDONLY = 16;

		/**
		 * @var int Perform additional consistency checks on the archive, and error if they fail.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CHECKCONS = 4;

		/**
		 * @var int Ignore case on name lookup
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_NOCASE = 1;

		/**
		 * @var int Ignore directory component
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_NODIR = 2;

		/**
		 * @var int Read compressed data
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_COMPRESSED = 4;

		/**
		 * @var int Use original data, ignoring changes.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_UNCHANGED = 8;

		/**
		 * @var int Force recompression of data. Available as of PHP 8.0.0 and PECL zip 1.18.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_RECOMPRESS = null;

		/**
		 * @var int Read encrypted data (implies FL_COMPRESSED). Available as of PHP 8.0.0 and PECL zip 1.18.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_ENCRYPTED = null;

		/**
		 * @var int If file with name exists, overwrite (replace) it. Available as of PHP 8.0.0 and PECL zip 1.18.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_OVERWRITE = null;

		/**
		 * @var int In local header. Available as of PHP 8.0.0 and PECL zip 1.18.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_LOCAL = null;

		/**
		 * @var int In central directory. Available as of PHP 8.0.0 and PECL zip 1.18.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ZIP_FL_CENTRAL = null;

		/**
		 * @var int Guess string encoding (is default). Available as of PHP 7.0.8.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_GUESS = 0;

		/**
		 * @var int Get unmodified string. Available as of PHP 7.0.8.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_RAW = 64;

		/**
		 * @var int Follow specification strictly. Available as of PHP 7.0.8.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_STRICT = 128;

		/**
		 * @var int String is UTF-8 encoded. Available as of PHP 7.0.8.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_UTF_8 = 2048;

		/**
		 * @var int String is CP437 encoded. Available as of PHP 7.0.8.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const FL_ENC_CP437 = 4096;

		/**
		 * @var int better of deflate or store.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_DEFAULT = -1;

		/**
		 * @var int stored (uncompressed).
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_STORE = 0;

		/**
		 * @var int shrunk
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_SHRINK = 1;

		/**
		 * @var int reduced with factor 1
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_1 = 2;

		/**
		 * @var int reduced with factor 2
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_2 = 3;

		/**
		 * @var int reduced with factor 3
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_3 = 4;

		/**
		 * @var int reduced with factor 4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_REDUCE_4 = 5;

		/**
		 * @var int imploded
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_IMPLODE = 6;

		/**
		 * @var int deflated
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_DEFLATE = 8;

		/**
		 * @var int deflate64
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_DEFLATE64 = 9;

		/**
		 * @var int PKWARE imploding
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_PKWARE_IMPLODE = 10;

		/**
		 * @var int BZIP2 algorithm
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_BZIP2 = 12;

		/**
		 * @var int LZMA algorithm
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_LZMA = 14;

		/**
		 * @var int LZMA2 algorithm. Available as of PHP 7.4.3 and PECL zip 1.16.0, respectively, if built against libzip &ge; 1.6.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_LZMA2 = null;

		/**
		 * @var int Zstandard algorithm. Available as of PHP 8.0.0 and PECL zip 1.19.1, respectively, if built against libzip &ge; 1.8.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_ZSTD = null;

		/**
		 * @var int XZ algorithm. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip &ge; 1.6.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const CM_XZ = 95;

		/**
		 * @var int No error.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_OK = 0;

		/**
		 * @var int Multi-disk zip archives not supported.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_MULTIDISK = 1;

		/**
		 * @var int Renaming temporary file failed.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_RENAME = 2;

		/**
		 * @var int Closing zip archive failed
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_CLOSE = 3;

		/**
		 * @var int Seek error
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_SEEK = 4;

		/**
		 * @var int Read error
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_READ = 5;

		/**
		 * @var int Write error
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_WRITE = 6;

		/**
		 * @var int CRC error
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_CRC = 7;

		/**
		 * @var int Containing zip archive was closed
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_ZIPCLOSED = 8;

		/**
		 * @var int No such file.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_NOENT = 9;

		/**
		 * @var int File already exists
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_EXISTS = 10;

		/**
		 * @var int Can't open file
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_OPEN = 11;

		/**
		 * @var int Failure to create temporary file.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_TMPOPEN = 12;

		/**
		 * @var int Zlib error
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_ZLIB = 13;

		/**
		 * @var int Memory allocation failure
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_MEMORY = 14;

		/**
		 * @var string Entry has been changed
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_CHANGED = '15';

		/**
		 * @var int Compression method not supported.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_COMPNOTSUPP = 16;

		/**
		 * @var int Premature EOF
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_EOF = 17;

		/**
		 * @var int Invalid argument
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_INVAL = 18;

		/**
		 * @var int Not a zip archive
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_NOZIP = 19;

		/**
		 * @var int Internal error
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_INTERNAL = 20;

		/**
		 * @var int Zip archive inconsistent
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_INCONS = 21;

		/**
		 * @var int Can't remove file
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_REMOVE = 22;

		/**
		 * @var int Entry has been deleted
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_DELETED = 23;

		/**
		 * @var int Encryption method not supported. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_ENCRNOTSUPP = 24;

		/**
		 * @var int Read-only archive. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_RDONLY = 25;

		/**
		 * @var int No password provided. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_NOPASSWD = 26;

		/**
		 * @var int Wrong password provided. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_WRONGPASSWD = 27;

		/**
		 * @var int Operation not supported. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip &ge; 1.0.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ZIP_ER_OPNOTSUPP = null;

		/**
		 * @var int Resource still in use. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip &ge; 1.0.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ZIP_ER_INUSE = null;

		/**
		 * @var int Tell error. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip &ge; 1.0.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ZIP_ER_TELL = null;

		/**
		 * @var int Compressed data invalid. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip &ge; 1.6.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ZIP_ER_COMPRESSED_DATA = null;

		/**
		 * @var int Operation cancelled. Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively, if built against libzip &ge; 1.6.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const ER_CANCELLED = null;

		/**
		 * @var int No encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EM_NONE = 0;

		/**
		 * @var int Traditional PKWARE encryption. Available as of PHP 8.0.0 and PECL zip 1.19.0, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EM_TRAD_PKWARE = null;

		/**
		 * @var int AES 128 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively, if built against libzip &ge; 1.2.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EM_AES_128 = 257;

		/**
		 * @var int AES 192 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively, if built against libzip &ge; 1.2.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EM_AES_192 = 258;

		/**
		 * @var int AES 256 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively, if built against libzip &ge; 1.2.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EM_AES_256 = 259;

		/**
		 * @var int Unknown encryption algorithm. Available as of PHP 8.0.0 and PECL zip 1.19.0, respectively.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const EM_UNKNOWN = null;

		/**
		 * @var string Zip library version. Available as of PHP 7.4.3 and PECL zip 1.16.0.
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const LIBZIP_VERSION = '1.5.1';

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_DOS = 0;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_AMIGA = 1;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OPENVMS = 2;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_UNIX = 3;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_VM_CMS = 4;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_ATARI_ST = 5;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OS_2 = 6;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_MACINTOSH = 7;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_Z_SYSTEM = 8;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_CPM = 9;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_WINDOWS_NTFS = 10;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_MVS = 11;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_VSE = 12;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_ACORN_RISC = 13;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_VFAT = 14;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_ALTERNATE_MVS = 15;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_BEOS = 16;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_TANDEM = 17;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OS_400 = 18;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_OS_X = 19;

		/**
		 * @var int Since PHP 5.6.0, PECL zip 1.12.4
		 * @link https://php.net/manual/en/zip.constants.php
		 */
		const OPSYS_DEFAULT = 3;

		/**
		 * @var int <p>Index value of last added entry (file or directory). Available as of PHP 8.0.0 and PECL zip 1.18.0.</p>
		 * @link https://php.net/manual/en/class.ziparchive.php#ziparchive.props.lastid
		 */
		public $lastId;

		/**
		 * @var int <p>Status of the Zip Archive. Available for closed archive, as of PHP 8.0.0 and PECL zip 1.18.0.</p>
		 * @link https://php.net/manual/en/class.ziparchive.php#ziparchive.props.status
		 */
		public $status;

		/**
		 * @var int <p>System status of the Zip Archive. Available for closed archive, as of PHP 8.0.0 and PECL zip 1.18.0.</p>
		 * @link https://php.net/manual/en/class.ziparchive.php#ziparchive.props.statussys
		 */
		public $statusSys;

		/**
		 * @var int <p>Number of files in archive</p>
		 * @link https://php.net/manual/en/class.ziparchive.php#ziparchive.props.numfiles
		 */
		public $numFiles;

		/**
		 * @var string <p>File name in the file system</p>
		 * @link https://php.net/manual/en/class.ziparchive.php#ziparchive.props.filename
		 */
		public $filename;

		/**
		 * @var string <p>Comment for the archive</p>
		 * @link https://php.net/manual/en/class.ziparchive.php#ziparchive.props.comment
		 */
		public $comment;

		/**
		 * Add a new directory
		 * <p>Adds an empty directory in the archive.</p>
		 * @param string $dirname <p>The directory to add.</p>
		 * @param int $flags <p>Bitmask consisting of <b><code>ZipArchive::FL_ENC_GUESS</code></b>, <b><code>ZipArchive::FL_ENC_UTF_8</code></b>, <b><code>ZipArchive::FL_ENC_CP437</code></b>. The behaviour of these constants is described on the ZIP constants page.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.addemptydir.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.8.0
		 */
		public function addEmptyDir(string $dirname, int $flags = 0): bool {}

		/**
		 * Adds a file to a ZIP archive from the given path
		 * <p>Adds a file to a ZIP archive from a given path.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<code>/</code>) as directory separator in ZIP filenames.</p>
		 * @param string $filepath <p>The path to the file to add.</p>
		 * @param string $entryname <p>If supplied and not empty, this is the local name inside the ZIP archive that will override the <code>filepath</code>.</p>
		 * @param int $start <p>For partial copy, start position.</p>
		 * @param int $length <p>For partial copy, length to be copied, if 0 or -1 the whole file (starting from <code>start</code>) is used.</p>
		 * @param int $flags <p>Bitmask consisting of <b><code>ZipArchive::FL_OVERWRITE</code></b>, <b><code>ZipArchive::FL_ENC_GUESS</code></b>, <b><code>ZipArchive::FL_ENC_UTF_8</code></b>, <b><code>ZipArchive::FL_ENC_CP437</code></b>. The behaviour of these constants is described on the ZIP constants page.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.addfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function addFile(string $filepath, string $entryname = "", int $start = 0, int $length = 0, int $flags = ZipArchive::FL_OVERWRITE): bool {}

		/**
		 * Add a file to a ZIP archive using its contents
		 * <p>Add a file to a ZIP archive using its contents.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<code>/</code>) as directory separator in ZIP filenames.</p>
		 * @param string $name <p>The name of the entry to create.</p>
		 * @param string $content <p>The contents to use to create the entry. It is used in a binary safe mode.</p>
		 * @param int $flags <p>Bitmask consisting of <b><code>ZipArchive::FL_OVERWRITE</code></b>, <b><code>ZipArchive::FL_ENC_GUESS</code></b>, <b><code>ZipArchive::FL_ENC_UTF_8</code></b>, <b><code>ZipArchive::FL_ENC_CP437</code></b>. The behaviour of these constants is described on the ZIP constants page.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.addfromstring.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE): bool {}

		/**
		 * Add files from a directory by glob pattern
		 * <p>Add files from a directory which match the glob <code>pattern</code>.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<code>/</code>) as directory separator in ZIP filenames.</p>
		 * @param string $pattern <p>A <code>glob()</code> pattern against which files will be matched.</p>
		 * @param int $flags <p>A bit mask of <code>glob()</code> flags.</p>
		 * @param array $options <p>An associative array of options. Available options are:</p><ul> <li> <p><code>"add_path"</code></p> <p>Prefix to prepend when translating to the local path of the file within the archive. This is applied after any remove operations defined by the <code>"remove_path"</code> or <code>"remove_all_path"</code> options.</p> </li> <li> <p><code>"remove_path"</code></p> <p>Prefix to remove from matching file paths before adding to the archive.</p> </li> <li> <p><code>"remove_all_path"</code></p> <p><b><code>true</code></b> to use the file name only and add to the root of the archive.</p> </li> <li> <p><code>"flags"</code></p> <p>Bitmask consisting of <b><code>ZipArchive::FL_OVERWRITE</code></b>, <b><code>ZipArchive::FL_ENC_GUESS</code></b>, <b><code>ZipArchive::FL_ENC_UTF_8</code></b>, <b><code>ZipArchive::FL_ENC_CP437</code></b>. The behaviour of these constants is described on the ZIP constants page.</p> </li> <li> <p><code>"comp_method"</code></p> <p>Compression method, one of the <b><code>ZipArchive::CM_&#42;</code></b> constants, see ZIP constants page.</p> </li> <li> <p><code>"comp_flags"</code></p> <p>Compression level.</p> </li> <li> <p><code>"enc_method"</code></p> <p>Encryption method, one of the <b><code>ZipArchive::EM_&#42;</code></b> constants, see ZIP constants page.</p> </li> <li> <p><code>"enc_password"</code></p> <p>Password used for encryption.</p> </li> </ul>
		 * @return array|false <p>An <code>array</code> of added files on success or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/ziparchive.addglob.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
		 */
		public function addGlob(string $pattern, int $flags = 0, array $options = []): array|false {}

		/**
		 * Add files from a directory by PCRE pattern
		 * <p>Add files from a directory which match the regular expression <code>pattern</code>. The operation is not recursive. The pattern will be matched against the file name only.</p>
		 * @param string $pattern <p>A PCRE pattern against which files will be matched.</p>
		 * @param string $path <p>The directory that will be scanned. Defaults to the current working directory.</p>
		 * @param array $options <p>An associative array of options accepted by <code>ZipArchive::addGlob()</code>.</p>
		 * @return array|false <p>An <code>array</code> of added files on success or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/ziparchive.addpattern.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL zip >= 1.9.0
		 */
		public function addPattern(string $pattern, string $path = ".", array $options = []): array|false {}

		/**
		 * Close the active archive (opened or newly created)
		 * <p>Close opened or created archive and save changes. This method is automatically called at the end of the script.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.close.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function close(): bool {}

		/**
		 * Counts the number of files in the archive
		 * @return int <p>Returns the number of files in the archive.</p>
		 * @link https://php.net/manual/en/ziparchive.count.php
		 * @since PHP 7 >= 7.2.0, PECL zip >= 1.15.0
		 */
		public function count(): int {}

		/**
		 * Delete an entry in the archive using its index
		 * <p>Delete an entry in the archive using its index.</p>
		 * @param int $index <p>Index of the entry to delete.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.deleteindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function deleteIndex(int $index): bool {}

		/**
		 * Delete an entry in the archive using its name
		 * <p>Delete an entry in the archive using its name.</p>
		 * @param string $name <p>Name of the entry to delete.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.deletename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function deleteName(string $name): bool {}

		/**
		 * Extract the archive contents
		 * <p>Extract the complete archive or the given files to the specified destination.</p><p>The default permissions for extracted files and directories give the widest possible access. This can be restricted by setting the current umask, which can be changed using <code>umask()</code>.</p>
		 * @param string $pathto <p>Location where to extract the files.</p>
		 * @param array|string|null $files <p>The entries to extract. It accepts either a single entry name or an array of names.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.extractto.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function extractTo(string $pathto, array|string|null $files = null): bool {}

		/**
		 * Returns the Zip archive comment
		 * <p>Returns the Zip archive comment.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged comment is returned.</p>
		 * @return string|false <p>Returns the Zip archive comment or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getarchivecomment.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getArchiveComment(int $flags = 0): string|false {}

		/**
		 * Returns the comment of an entry using the entry index
		 * <p>Returns the comment of an entry using the entry index.</p>
		 * @param int $index <p>Index of the entry</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged comment is returned.</p>
		 * @return string|false <p>Returns the comment on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getcommentindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function getCommentIndex(int $index, int $flags = 0): string|false {}

		/**
		 * Returns the comment of an entry using the entry name
		 * <p>Returns the comment of an entry using the entry name.</p>
		 * @param string $name <p>Name of the entry</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged comment is returned.</p>
		 * @return string|false <p>Returns the comment on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getcommentname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function getCommentName(string $name, int $flags = 0): string|false {}

		/**
		 * Retrieve the external attributes of an entry defined by its index
		 * <p>Retrieve the external attributes of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $opsys <p>On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>On success, receive the external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged attributes are returned.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getexternalattributesindex.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function getExternalAttributesIndex(int $index, int &$opsys, int &$attr, int $flags = null): bool {}

		/**
		 * Retrieve the external attributes of an entry defined by its name
		 * <p>Retrieve the external attributes of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $opsys <p>On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>On success, receive the external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged attributes are returned.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getexternalattributesname.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function getExternalAttributesName(string $name, int &$opsys, int &$attr, int $flags = 0): bool {}

		/**
		 * Returns the entry contents using its index
		 * <p>Returns the entry contents using its index.</p>
		 * @param int $index <p>Index of the entry</p>
		 * @param int $len <p>The length to be read from the entry. If <code>0</code>, then the entire entry is read.</p>
		 * @param int $flags <p>The flags to use to open the archive. the following values may be ORed to it.</p><ul> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_COMPRESSED</code></b></p> </li> </ul>
		 * @return string|false <p>Returns the contents of the entry on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getfromindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getFromIndex(int $index, int $len = 0, int $flags = 0): string|false {}

		/**
		 * Returns the entry contents using its name
		 * <p>Returns the entry contents using its name.</p>
		 * @param string $name <p>Name of the entry</p>
		 * @param int $len <p>The length to be read from the entry. If <code>0</code>, then the entire entry is read.</p>
		 * @param int $flags <p>The flags to use to find the entry. The following values may be ORed.</p><ul> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_COMPRESSED</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> </ul>
		 * @return string|false <p>Returns the contents of the entry on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getfromname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getFromName(string $name, int $len = 0, int $flags = 0): string|false {}

		/**
		 * Returns the name of an entry using its index
		 * <p>Returns the name of an entry using its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $flags <p>If flags is set to <b><code>ZipArchive::FL_UNCHANGED</code></b>, the original unchanged name is returned.</p>
		 * @return string|false <p>Returns the name on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getnameindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function getNameIndex(int $index, int $flags = 0): string|false {}

		/**
		 * Returns the status error message, system and/or zip messages
		 * <p>Returns the status error message, system and/or zip messages.</p>
		 * @return string <p>Returns a <code>string</code> with the status message.</p>
		 * @link https://php.net/manual/en/ziparchive.getstatusstring.php
		 * @since PHP 5 >= 5.2.7, PHP 7
		 */
		public function getStatusString(): string {}

		/**
		 * Get a file handler to the entry defined by its name (read only)
		 * <p>Get a file handler to the entry defined by its name. For now it only supports read operations.</p>
		 * @param string $name <p>The name of the entry to use.</p>
		 * @return resource|false <p>Returns a file pointer (resource) on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.getstream.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function getStream(string $name) {}

		/**
		 * Check if a compression method is supported by libzip
		 * <p>Check if a compression method is supported by libzip.</p>
		 * @param int $method <p>The compression method, one of the <b><code>ZipArchive::CM_&#42;</code></b> constants.</p>
		 * @param bool $enc <p>If <b><code>true</code></b> check for compression, else check for decompression.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.iscompressionmethoddupported.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.19.0
		 */
		public static function isCompressionMethodSupported(int $method, bool $enc = true): bool {}

		/**
		 * Check if a encryption method is supported by libzip
		 * <p>Check if a compression method is supported by libzip.</p>
		 * @param int $method <p>The encryption method, one of the <b><code>ZipArchive::EM_&#42;</code></b> constants.</p>
		 * @param bool $enc <p>If <b><code>true</code></b> check for encryption, else check for decryption.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.isencryptionmethoddupported.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.19.0
		 */
		public static function isEncryptionMethodSupported(int $method, bool $enc = true): bool {}

		/**
		 * Returns the index of the entry in the archive
		 * <p>Locates an entry using its name.</p>
		 * @param string $name <p>The name of the entry to look up</p>
		 * @param int $flags <p>The flags are specified by ORing the following values, or 0 for none of them.</p><ul> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NODIR</code></b></p> </li> </ul>
		 * @return int|false <p>Returns the index of the entry on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.locatename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function locateName(string $name, int $flags = 0): int|false {}

		/**
		 * Open a ZIP file archive
		 * <p>Opens a new or existing zip archive for reading, writing or modifying.</p><p>Since libzip 1.6.0, a empty file is not a valid archive any longer.</p>
		 * @param string $filename <p>The file name of the ZIP archive to open.</p>
		 * @param int $flags <p>The mode to use to open the archive.</p><ul> <li> <p><b><code>ZipArchive::OVERWRITE</code></b></p> </li> <li> <p><b><code>ZipArchive::CREATE</code></b></p> </li> <li> <p><b><code>ZipArchive::RDONLY</code></b></p> </li> <li> <p><b><code>ZipArchive::EXCL</code></b></p> </li> <li> <p><b><code>ZipArchive::CHECKCONS</code></b></p> </li> </ul>
		 * @return bool|int <p>Returns <b><code>true</code></b> on success, or one of the following error codes:</p>  <b><code>ZipArchive::ER_EXISTS</code></b>  File already exists.   <b><code>ZipArchive::ER_INCONS</code></b>  Zip archive inconsistent.   <b><code>ZipArchive::ER_INVAL</code></b>  Invalid argument.   <b><code>ZipArchive::ER_MEMORY</code></b>  Malloc failure.   <b><code>ZipArchive::ER_NOENT</code></b>  No such file.   <b><code>ZipArchive::ER_NOZIP</code></b>  Not a zip archive.   <b><code>ZipArchive::ER_OPEN</code></b>  Can't open file.   <b><code>ZipArchive::ER_READ</code></b>  Read error.   <b><code>ZipArchive::ER_SEEK</code></b>  Seek error.
		 * @link https://php.net/manual/en/ziparchive.open.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function open(string $filename, int $flags = 0): bool|int {}

		/**
		 * Register a callback to allow cancellation during archive close.
		 * <p>Register a <code>callback</code> function to allow cancellation during archive close.</p>
		 * @param callable $callback <p>If this function return 0 operation will continue, other value it will be cancelled.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.registercancelcallback.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.17.0
		 */
		public function registerCancelCallback(callable $callback): bool {}

		/**
		 * Register a callback to provide updates during archive close.
		 * <p>Register a <code>callback</code> function to provide updates during archive close.</p>
		 * @param float $rate <p>Change between each call of the callback (from 0.0 to 1.0).</p>
		 * @param callable $callback <p>This function will receive the current <code>state</code> as a <code>float</code> (from 0.0 to 1.0).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.registerprogresscallback.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.17.0
		 */
		public function registerProgressCallback(float $rate, callable $callback): bool {}

		/**
		 * Renames an entry defined by its index
		 * <p>Renames an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry to rename.</p>
		 * @param string $new_name <p>New name.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.renameindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function renameIndex(int $index, string $new_name): bool {}

		/**
		 * Renames an entry defined by its name
		 * <p>Renames an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry to rename.</p>
		 * @param string $new_name <p>New name.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.renamename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function renameName(string $name, string $new_name): bool {}

		/**
		 * Replace file in ZIP archive with a given path
		 * <p>Replace file in ZIP archive with a given path.</p><p><b>Note</b>: For maximum portability, it is recommended to always use forward slashes (<code>/</code>) as directory separator in ZIP filenames.</p>
		 * @param string $filepath <p>The path to the file to add.</p>
		 * @param string $index <p>The index of the file to be replaced, its name is unchanged.</p>
		 * @param int $start <p>For partial copy, start position.</p>
		 * @param int $length <p>For partial copy, length to be copied, if 0 or -1 the whole file (starting from <code>start</code>) is used.</p>
		 * @param int $flags <p>Bitmask consisting of <b><code>ZipArchive::FL_ENC_GUESS</code></b>, <b><code>ZipArchive::FL_ENC_UTF_8</code></b>, <b><code>ZipArchive::FL_ENC_CP437</code></b>. The behaviour of these constants is described on the ZIP constants page.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.replacefile.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.18.0
		 */
		public function replaceFile(string $filepath, string $index, int $start = 0, int $length = 0, int $flags = 0): bool {}

		/**
		 * Set the comment of a ZIP archive
		 * <p>Set the comment of a ZIP archive.</p>
		 * @param string $comment <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setarchivecomment.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setArchiveComment(string $comment): bool {}

		/**
		 * Set the comment of an entry defined by its index
		 * <p>Set the comment of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param string $comment <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setcommentindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setCommentIndex(int $index, string $comment): bool {}

		/**
		 * Set the comment of an entry defined by its name
		 * <p>Set the comment of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param string $comment <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setcommentname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.4.0
		 */
		public function setCommentName(string $name, string $comment): bool {}

		/**
		 * Set the compression method of an entry defined by its index
		 * <p>Set the compression method of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $method <p>The compression method, one of the <b><code>ZipArchive::CM_&#42;</code></b> constants.</p>
		 * @param int $compflags <p>Compression level.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setcompressionindex.php
		 * @since PHP 7, PECL zip >= 1.13.0
		 */
		public function setCompressionIndex(int $index, int $method, int $compflags = 0): bool {}

		/**
		 * Set the compression method of an entry defined by its name
		 * <p>Set the compression method of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $method <p>The compression method, one of the <b><code>ZipArchive::CM_&#42;</code></b> constants.</p>
		 * @param int $compflags <p>Compression level.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setcompressionname.php
		 * @since PHP 7, PECL zip >= 1.13.0
		 */
		public function setCompressionName(string $name, int $method, int $compflags = 0): bool {}

		/**
		 * Set the encryption method of an entry defined by its index
		 * <p>Set the encryption method of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $method <p>The encryption method defined by one of the ZipArchive::EM_ constants.</p>
		 * @param string|null $password <p>Optional password, default used when missing.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setencryptionindex.php
		 * @since PHP >= 7.2.0, PECL zip >= 1.14.0
		 */
		public function setEncryptionIndex(int $index, int $method, string|null $password = null): bool {}

		/**
		 * Set the encryption method of an entry defined by its name
		 * <p>Set the encryption method of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $method <p>The encryption method defined by one of the ZipArchive::EM_ constants.</p>
		 * @param string|null $password <p>Optional password, default used when missing.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setencryptionname.php
		 * @since PHP >= 7.2.0, PECL zip >= 1.14.0
		 */
		public function setEncryptionName(string $name, int $method, string|null $password = null): bool {}

		/**
		 * Set the external attributes of an entry defined by its index
		 * <p>Set the external attributes of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $opsys <p>The operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>The external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>Optional flags. Currently unused.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setexternalattributesindex.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0): bool {}

		/**
		 * Set the external attributes of an entry defined by its name
		 * <p>Set the external attributes of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $opsys <p>The operating system code defined by one of the ZipArchive::OPSYS_ constants.</p>
		 * @param int $attr <p>The external attributes. Value depends on operating system.</p>
		 * @param int $flags <p>Optional flags. Currently unused.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setexternalattributesname.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0): bool {}

		/**
		 * Set the modification time of an entry defined by its index
		 * <p>Set the modification time of an entry defined by its index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @param int $timestamp <p>The modification time (unix timestamp) of the file.</p>
		 * @param int $flags <p>Optional flags, unused for now.</p>
		 * @return bool|null <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setmtimeindex.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.16.0
		 */
		public function setMtimeIndex(int $index, int $timestamp, int $flags = 0): bool|null {}

		/**
		 * Set the modification time of an entry defined by its name
		 * <p>Set the modification time of an entry defined by its name.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @param int $timestamp <p>The modification time (unix timestamp) of the file.</p>
		 * @param int $flags <p>Optional flags, unused for now.</p>
		 * @return bool|null <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setmtimename.php
		 * @since PHP >= 8.0.0, PECL zip >= 1.16.0
		 */
		public function setMtimeName(string $name, int $timestamp, int $flags = 0): bool|null {}

		/**
		 * Set the password for the active archive
		 * <p>Sets the password for the active archive.</p>
		 * @param string $password <p>The password to be used for the archive.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.setpassword.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PECL zip >= 1.12.4
		 */
		public function setPassword(string $password): bool {}

		/**
		 * Get the details of an entry defined by its index
		 * <p>The function obtains information about the entry defined by its index.</p>
		 * @param int $index <p>Index of the entry</p>
		 * @param int $flags <p><b><code>ZipArchive::FL_UNCHANGED</code></b> may be ORed to it to request information about the original file in the archive, ignoring any changes made.</p>
		 * @return array|false <p>Returns an array containing the entry details or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.statindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function statIndex(int $index, int $flags = 0): array|false {}

		/**
		 * Get the details of an entry defined by its name
		 * <p>The function obtains information about the entry defined by its name.</p>
		 * @param string $name <p>Name of the entry</p>
		 * @param int $flags <p>The flags argument specifies how the name lookup should be done. Also, <b><code>ZipArchive::FL_UNCHANGED</code></b> may be ORed to it to request information about the original file in the archive, ignoring any changes made.</p><ul> <li> <p><b><code>ZipArchive::FL_NOCASE</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_NODIR</code></b></p> </li> <li> <p><b><code>ZipArchive::FL_UNCHANGED</code></b></p> </li> </ul>
		 * @return array|false <p>Returns an array containing the entry details or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.statname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function statName(string $name, int $flags = 0): array|false {}

		/**
		 * Undo all changes done in the archive
		 * <p>Undo all changes done in the archive.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.unchangeall.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeAll(): bool {}

		/**
		 * Revert all global changes done in the archive
		 * <p>Revert all global changes to the archive. For now, this only reverts archive comment changes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.unchangearchive.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeArchive(): bool {}

		/**
		 * Revert all changes done to an entry at the given index
		 * <p>Revert all changes done to an entry at the given index.</p>
		 * @param int $index <p>Index of the entry.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.unchangeindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.1.0
		 */
		public function unchangeIndex(int $index): bool {}

		/**
		 * Revert all changes done to an entry with the given name
		 * <p>Revert all changes done to an entry.</p>
		 * @param string $name <p>Name of the entry.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ziparchive.unchangename.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.5.0
		 */
		public function unchangeName(string $name): bool {}
	}

	/**
	 * Close a ZIP file archive
	 * <p>Closes the given ZIP file archive.</p>
	 * @param resource $zip <p>A ZIP file previously opened with <code>zip_open()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.zip-close.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_close($zip): void {}

	/**
	 * Close a directory entry
	 * <p>Closes the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry previously opened <code>zip_entry_open()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.zip-entry-close.php
	 * @see zip_entry_open(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_close($zip_entry): bool {}

	/**
	 * Retrieve the compressed size of a directory entry
	 * <p>Returns the compressed size of the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return int|false <p>The compressed size, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.zip-entry-compressedsize.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_compressedsize($zip_entry): int|false {}

	/**
	 * Retrieve the compression method of a directory entry
	 * <p>Returns the compression method of the directory entry specified by <code>zip_entry</code>.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return string|false <p>The compression method, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.zip-entry-compressionmethod.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_compressionmethod($zip_entry): string|false {}

	/**
	 * Retrieve the actual file size of a directory entry
	 * <p>Returns the actual size of the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return int|false <p>The size of the directory entry, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.zip-entry-filesize.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_filesize($zip_entry): int|false {}

	/**
	 * Retrieve the name of a directory entry
	 * <p>Returns the name of the specified directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @return string|false <p>The name of the directory entry, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.zip-entry-name.php
	 * @see zip_open(), zip_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_name($zip_entry): string|false {}

	/**
	 * Open a directory entry for reading
	 * <p>Opens a directory entry in a zip file for reading.</p>
	 * @param resource $zip_dp <p>A valid resource handle returned by <code>zip_open()</code>.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @param string $mode <p>Any of the modes specified in the documentation of <code>fopen()</code>.</p> <p><b>Note</b>:</p><p>Currently, <code>mode</code> is ignored and is always <code>"rb"</code>. This is due to the fact that zip support in PHP is read only access.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p><b>Note</b>:</p><p>Unlike <code>fopen()</code> and other similar functions, the return value of <b>zip_entry_open()</b> only indicates the result of the operation and is not needed for reading or closing the directory entry.</p>
	 * @link https://php.net/manual/en/function.zip-entry-open.php
	 * @see zip_entry_close(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_open($zip_dp, $zip_entry, string $mode = "rb"): bool {}

	/**
	 * Read from an open directory entry
	 * <p>Reads from an open directory entry.</p>
	 * @param resource $zip_entry <p>A directory entry returned by <code>zip_read()</code>.</p>
	 * @param int $len <p>The number of bytes to return.</p> <p><b>Note</b>:</p><p>This should be the uncompressed length you wish to read.</p>
	 * @return string|false <p>Returns the data read, empty string on end of a file, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.zip-entry-read.php
	 * @see zip_entry_open(), zip_entry_close(), zip_entry_filesize()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_entry_read($zip_entry, int $len = 1024): string|false {}

	/**
	 * Open a ZIP file archive
	 * <p>Opens a new zip archive for reading.</p>
	 * @param string $filename <p>The file name of the ZIP archive to open.</p>
	 * @return resource|int|false <p>Returns a resource handle for later use with <code>zip_read()</code> and <code>zip_close()</code> or returns either <b><code>false</code></b> or the number of error if <code>filename</code> does not exist or in case of other error.</p>
	 * @link https://php.net/manual/en/function.zip-open.php
	 * @see zip_read(), zip_close()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_open(string $filename) {}

	/**
	 * Read next entry in a ZIP file archive
	 * <p>Reads the next entry in a zip file archive.</p>
	 * @param resource $zip <p>A ZIP file previously opened with <code>zip_open()</code>.</p>
	 * @return resource|false <p>Returns a directory entry resource for later use with the <code>zip_entry_...</code> functions, or <b><code>false</code></b> if there are no more entries to read, or an error code if an error occurred.</p>
	 * @link https://php.net/manual/en/function.zip-read.php
	 * @see zip_open(), zip_close(), zip_entry_open(), zip_entry_read()
	 * @since PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PECL zip >= 1.0.0
	 */
	function zip_read($zip) {}

}
