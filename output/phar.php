<?php



namespace {

	/**
	 * <p>The Phar class provides a high-level interface to accessing and creating phar archives.</p>
	 * @link https://php.net/manual/en/class.phar.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
	 */
	class Phar extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess {

		/**
		 * @var int no compression
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const NONE = 0;

		/**
		 * @var int bitmask that can be used with file flags to determine if any compression is present
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const COMPRESSED = 61440;

		/**
		 * @var int zlib (gzip) compression
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const GZ = 4096;

		/**
		 * @var int bzip2 compression
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const BZ2 = 8192;

		/**
		 * @var int phar file format
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const PHAR = 1;

		/**
		 * @var int tar file format
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const TAR = 2;

		/**
		 * @var int zip file format
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const ZIP = 3;

		/**
		 * @var int signature with md5 hash algorithm
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const MD5 = 1;

		/**
		 * @var int signature with sha1 hash algorithm
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const SHA1 = 2;

		/**
		 * @var int signature with sha256 hash algorithm (requires hash extension)
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const SHA256 = 3;

		/**
		 * @var int signature with sha512 hash algorithm (requires hash extension)
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const SHA512 = 4;

		/**
		 * @var int signature with OpenSSL public/private key pair. This is a true, asymmetric key signature.
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const OPENSSL = 16;

		/**
		 * @var int used to instruct the mimeoverrides parameter of <code>Phar::webPhar()</code> that the extension should be parsed as a PHP file
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const PHP = 0;

		/**
		 * @var int used to instruct the mimeoverrides parameter of <code>Phar::webPhar()</code> that the extension should be parsed as a PHP source file through <code>highlight_file()</code>
		 * @link https://php.net/manual/en/phar.constants.php
		 */
		const PHPS = 1;

		/**
		 * Construct a Phar archive object
		 * @param string $filename <p>Path to an existing Phar archive or to-be-created archive. The file name's extension must contain .phar.</p>
		 * @param int $flags <p>Flags to pass to parent class <code>RecursiveDirectoryIterator</code>.</p>
		 * @param ?string $alias <p>Alias with which this Phar archive should be referred to in calls to stream functionality.</p>
		 * @return self
		 * @link https://php.net/manual/en/phar.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null) {}

		/**
		 * Destructs a Phar archive object
		 * @return void
		 * @link https://php.net/manual/en/phar.destruct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function __destruct() {}

		/**
		 * Get file name as a string
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Add an empty directory to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>With this method, an empty directory is created with path <code>dirname</code>. This method is similar to <code>ZipArchive::addEmptyDir()</code>.</p>
		 * @param string $directory <p>The name of the empty directory to create in the phar archive</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link https://php.net/manual/en/phar.addemptydir.php
		 * @see PharData::addEmptyDir(), Phar::addFile(), Phar::addFromString()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function addEmptyDir(string $directory): void {}

		/**
		 * Add a file from the filesystem to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>With this method, any file or URL can be added to the phar archive. If the optional second parameter <code>localName</code> is a <code>string</code>, the file will be stored in the archive with that name, otherwise the <code>file</code> parameter is used as the path to store within the archive. URLs must have a localname or an exception is thrown. This method is similar to <code>ZipArchive::addFile()</code>.</p>
		 * @param string $filename <p>Full or relative path to a file on disk to be added to the phar archive.</p>
		 * @param ?string $localName <p>Path that the file will be stored in the archive.</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link https://php.net/manual/en/phar.addfile.php
		 * @see Phar::offsetSet(), PharData::addFile(), Phar::addFromString(), Phar::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function addFile(string $filename, ?string $localName = null): void {}

		/**
		 * Add a file from a string to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>With this method, any string can be added to the phar archive. The file will be stored in the archive with <code>localname</code> as its path. This method is similar to <code>ZipArchive::addFromString()</code>.</p>
		 * @param string $localName <p>Path that the file will be stored in the archive.</p>
		 * @param string $contents <p>The file contents to store</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link https://php.net/manual/en/phar.addfromstring.php
		 * @see Phar::offsetSet(), PharData::addFromString(), Phar::addFile(), Phar::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function addFromString(string $localName, string $contents): void {}

		/**
		 * Returns the api version
		 * <p>Return the API version of the phar file format that will be used when creating phars. The Phar extension supports reading API version 1.0.0 or newer. API version 1.1.0 is required for SHA-256 and SHA-512 hash, and API version 1.1.1 is required to store empty directories.</p>
		 * @return string <p>The API version string as in <code>"1.0.0"</code>.</p>
		 * @link https://php.net/manual/en/phar.apiversion.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		final public static function apiVersion(): string {}

		/**
		 * Construct a phar archive from the files within a directory
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Populate a phar archive from directory contents. The optional second parameter is a regular expression (pcre) that is used to exclude files. Any filename that matches the regular expression will be included, all others will be excluded. For more fine-grained control, use <code>Phar::buildFromIterator()</code>.</p>
		 * @param string $directory <p>The full or relative path to the directory that contains all files to add to the archive.</p>
		 * @param string $pattern <p>An optional pcre regular expression that is used to filter the list of files. Only file paths matching the regular expression will be included in the archive.</p>
		 * @return array <p><b>Phar::buildFromDirectory()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link https://php.net/manual/en/phar.buildfromdirectory.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function buildFromDirectory(string $directory, string $pattern = ""): array {}

		/**
		 * Construct a phar archive from an iterator
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Populate a phar archive from an iterator. Two styles of iterators are supported, iterators that map the filename within the phar to the name of a file on disk, and iterators like DirectoryIterator that return SplFileInfo objects. For iterators that return SplFileInfo objects, the second parameter is required.</p>
		 * @param \Traversable $iterator <p>Any iterator that either associatively maps phar file to location or returns SplFileInfo objects</p>
		 * @param ?string $baseDirectory <p>For iterators that return SplFileInfo objects, the portion of each file's full path to remove when adding to the phar archive</p>
		 * @return array <p><b>Phar::buildFromIterator()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link https://php.net/manual/en/phar.buildfromiterator.php
		 * @see Phar::buildFromDirectory()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function buildFromIterator(\Traversable $iterator, ?string $baseDirectory = null): array {}

		/**
		 * Returns whether phar extension supports compression using either zlib or bzip2
		 * <p>This should be used to test whether compression is possible prior to loading a phar archive containing compressed files.</p>
		 * @param int $compression <p>Either <code>Phar::GZ</code> or <code>Phar::BZ2</code> can be used to test whether compression is possible with a specific compression algorithm (zlib or bzip2).</p>
		 * @return bool <p><b><code>true</code></b> if compression/decompression is available, <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/phar.cancompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		final public static function canCompress(int $compression = 0): bool {}

		/**
		 * Returns whether phar extension supports writing and creating phars
		 * <p>This static method determines whether write access has been disabled in the system php.ini via the phar.readonly ini variable.</p>
		 * @return bool <p><b><code>true</code></b> if write access is enabled, <b><code>false</code></b> if it is disabled.</p>
		 * @link https://php.net/manual/en/phar.canwrite.php
		 * @see Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		final public static function canWrite(): bool {}

		/**
		 * Compresses the entire Phar archive using Gzip or Bzip2 compression
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>For tar-based and phar-based phar archives, this method compresses the entire archive using gzip compression or bzip2 compression. The resulting file can be processed with the gunzip command/bunzip command, or accessed directly and transparently with the Phar extension.</p><p>For Zip-based phar archives, this method fails with an exception. The zlib extension must be enabled to compress with gzip compression, the bzip2 extension must be enabled in order to compress with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p><p>In addition, this method automatically renames the archive, appending <code>.gz</code>, <code>.bz2</code> or removing the extension if passed <code>Phar::NONE</code> to remove compression. Alternatively, a file extension may be specified with the second parameter.</p>
		 * @param int $compression <p>Compression must be one of <code>Phar::GZ</code>, <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code> to remove compression.</p>
		 * @param ?string $extension <p>By default, the extension is <code>.phar.gz</code> or <code>.phar.bz2</code> for compressing phar archives, and <code>.phar.tar.gz</code> or <code>.phar.tar.bz2</code> for compressing tar archives. For decompressing, the default file extensions are <code>.phar</code> and <code>.phar.tar</code>.</p>
		 * @return ?Phar <p>Returns a <code>Phar</code> object, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.compress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::decompress(), Phar::getSupportedCompression(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function compress(int $compression, ?string $extension = null): ?\Phar {}

		/**
		 * Compresses all files in the current Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>For tar-based phar archives, this method throws a <code>BadMethodCallException</code>, as compression of individual files within a tar archive is not supported by the file format. Use <code>Phar::compress()</code> to compress an entire tar-based phar archive.</p><p>For Zip-based and phar-based phar archives, this method compresses all files in the Phar archive using the specified compression. The zlib or bzip2 extensions must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2/zlib compression, the respective extension must be enabled in order to decompress the files prior to re-compressing. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @param int $compression <p>Compression must be one of <code>Phar::GZ</code>, <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code> to remove compression.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.compressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::compress(), Phar::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function compressFiles(int $compression): void {}

		/**
		 * Convert a phar archive to a non-executable tar or zip file
		 * <p>This method is used to convert an executable phar archive to either a tar or zip file. To make the tar or zip non-executable, the phar stub and phar alias files are removed from the newly created archive.</p><p>If no changes are specified, this method throws a <code>BadMethodCallException</code> if the archive is in phar file format. For archives in tar or zip file format, this method converts the archive to a non-executable archive.</p><p>If successful, the method creates a new archive on disk and returns a <code>PharData</code> object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param ?int $format <p>This should be one of <code>Phar::TAR</code> or <code>Phar::ZIP</code>. If set to <b><code>null</code></b>, the existing file format will be preserved.</p>
		 * @param ?int $compression <p>This should be one of <code>Phar::NONE</code> for no whole-archive compression, <code>Phar::GZ</code> for zlib-based compression, and <code>Phar::BZ2</code> for bzip-based compression.</p>
		 * @param ?string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that <code>.phar</code> cannot be used anywhere in the filename for a non-executable tar or zip archive.</p> <p>If converting to a tar-based phar archive, the default extensions are <code>.tar</code>, <code>.tar.gz</code>, and <code>.tar.bz2</code> depending on specified compression. For zip-based archives, the default extension is <code>.zip</code>.</p>
		 * @return ?PharData <p>The method returns a <code>PharData</code> object on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.converttodata.php
		 * @see Phar::convertToExecutable(), PharData::convertToExecutable(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null): ?\PharData {}

		/**
		 * Convert a phar archive to another executable phar archive file format
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>This method is used to convert a phar archive to another file format. For instance, it can be used to create a tar-based executable phar archive from a zip-based executable phar archive, or from an executable phar archive in the phar file format. In addition, it can be used to apply whole-archive compression to a tar or phar-based archive.</p><p>If no changes are specified, this method throws a <code>BadMethodCallException</code>.</p><p>If successful, the method creates a new archive on disk and returns a <code>Phar</code> object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param ?int $format <p>This should be one of <code>Phar::PHAR</code>, <code>Phar::TAR</code>, or <code>Phar::ZIP</code>. If set to <b><code>null</code></b>, the existing file format will be preserved.</p>
		 * @param ?int $compression <p>This should be one of <code>Phar::NONE</code> for no whole-archive compression, <code>Phar::GZ</code> for zlib-based compression, and <code>Phar::BZ2</code> for bzip-based compression.</p>
		 * @param ?string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that all zip- and tar-based phar archives must contain <code>.phar</code> in their file extension in order to be processed as a phar archive.</p> <p>If converting to a phar-based archive, the default extensions are <code>.phar</code>, <code>.phar.gz</code>, or <code>.phar.bz2</code> depending on the specified compression. For tar-based phar archives, the default extensions are <code>.phar.tar</code>, <code>.phar.tar.gz</code>, and <code>.phar.tar.bz2</code>. For zip-based phar archives, the default extension is <code>.phar.zip</code>.</p>
		 * @return ?Phar <p>The method returns a <code>Phar</code> object on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.converttoexecutable.php
		 * @see Phar::convertToData(), PharData::convertToExecutable(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null): ?\Phar {}

		/**
		 * Copy a file internal to the phar archive to another new file within the phar
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Copy a file internal to the phar archive to another new file within the phar. This is an object-oriented alternative to using <code>copy()</code> with the phar stream wrapper.</p>
		 * @param string $from
		 * @param string $to
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is safer to encase method call in a try/catch block and assume success if no exception is thrown.</p>
		 * @link https://php.net/manual/en/phar.copy.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function copy(string $from, string $to): bool {}

		/**
		 * Returns the number of entries (files) in the Phar archive
		 * @param int $mode
		 * @return int <p>The number of files contained within this phar, or <code>0</code> (the number zero) if none.</p>
		 * @link https://php.net/manual/en/phar.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function count(int $mode = COUNT_NORMAL): int {}

		/**
		 * Create a phar-file format specific stub
		 * <p>This method is intended for creation of phar-file format-specific stubs, and is not intended for use with tar- or zip-based phar archives.</p><p>Phar archives contain a bootstrap loader, or <code>stub</code> written in PHP that is executed when the archive is executed in PHP either via include:</p><p>This method provides a simple and easy method to create a stub that will run a startup file from the phar archive. In addition, different files can be specified for running the phar archive from the command line versus through a web server. The loader stub also calls <code>Phar::interceptFileFuncs()</code> to allow easy bundling of a PHP application that accesses the file system. If the phar extension is not present, the loader stub will extract the phar archive to a temporary directory and then operate on the files. A shutdown function erases the temporary files on exit.</p>
		 * @param ?string $index <p>Relative path within the phar archive to run if accessed on the command-line</p>
		 * @param ?string $webIndex <p>Relative path within the phar archive to run if accessed through a web browser</p>
		 * @return string <p>Returns a string containing the contents of a customized bootstrap loader (stub) that allows the created Phar archive to work with or without the Phar extension enabled.</p>
		 * @link https://php.net/manual/en/phar.createdefaultstub.php
		 * @see Phar::setStub(), Phar::getStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function createDefaultStub(?string $index = null, ?string $webIndex = null): string {}

		/**
		 * The current file
		 * <p>Get file information of the current element.</p>
		 * @return string|SplFileInfo|FilesystemIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): string|\SplFileInfo|\FilesystemIterator {}

		/**
		 * Decompresses the entire Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>For tar-based and phar-based phar archives, this method decompresses the entire archive.</p><p>For Zip-based phar archives, this method fails with an exception. The zlib extension must be enabled to decompress an archive compressed with gzip compression, and the bzip2 extension must be enabled in order to decompress an archive compressed with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p><p>In addition, this method automatically changes the file extension of the archive, <code>.phar</code> by default for phar archives, or <code>.phar.tar</code> for tar-based phar archives. Alternatively, a file extension may be specified with the second parameter.</p>
		 * @param ?string $extension <p>For decompressing, the default file extensions are <code>.phar</code> and <code>.phar.tar</code>. Use this parameter to specify another file extension. Be aware that all executable phar archives must contain <code>.phar</code> in their filename.</p>
		 * @return ?Phar <p>A <code>Phar</code> object is returned on success, and <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compress(), Phar::getSupportedCompression(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function decompress(?string $extension = null): ?\Phar {}

		/**
		 * Decompresses all files in the current Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>For tar-based phar archives, this method throws a <code>BadMethodCallException</code>, as compression of individual files within a tar archive is not supported by the file format. Use <code>Phar::compress()</code> to compress an entire tar-based phar archive.</p><p>For Zip-based and phar-based phar archives, this method decompresses all files in the Phar archive. The zlib or bzip2 extensions must be enabled to take advantage of this feature if any files are compressed using bzip2/zlib compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.decompressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::getSupportedCompression(), Phar::compress(), Phar::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function decompressFiles(): bool {}

		/**
		 * Deletes the global metadata of the phar
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Deletes the global metadata of the phar</p>
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link https://php.net/manual/en/phar.delmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0
		 */
		public function delMetadata(): bool {}

		/**
		 * Delete a file within a phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Delete a file within an archive. This is the functional equivalent of calling <code>unlink()</code> on the stream wrapper equivalent, as shown in the example below.</p>
		 * @param string $localName <p>Path within an archive to the file to delete.</p>
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link https://php.net/manual/en/phar.delete.php
		 * @see PharData::delete(), Phar::unlinkArchive()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function delete(string $localName): bool {}

		/**
		 * Extract the contents of a phar archive to a directory
		 * <p>Extract all files within a phar archive to disk. Extracted files and directories preserve permissions as stored in the archive. The optional parameters allow optional control over which files are extracted, and whether existing files on disk can be overwritten. The second parameter <code>files</code> can be either the name of a file or directory to extract, or an array of names of files and directories to extract. By default, this method will not overwrite existing files, the third parameter can be set to true to enable overwriting of files. This method is similar to <code>ZipArchive::extractTo()</code>.</p>
		 * @param string $directory <p>Path to extract the given <code>files</code> to</p>
		 * @param array|string|null $files <p>The name of a file or directory to extract, or an array of files/directories to extract, <b><code>null</code></b> to skip this param</p>
		 * @param bool $overwrite <p>Set to <b><code>true</code></b> to enable overwriting existing files</p>
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link https://php.net/manual/en/phar.extractto.php
		 * @see PharData::extractTo()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false): bool {}

		/**
		 * Get last access time of the current DirectoryIterator item
		 * <p>Get the last access time of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the time the file was last accessed, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getATime(): int {}

		/**
		 * Get the alias for Phar
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?string <p>Returns the alias or <b><code>null</code></b> if there's no alias.</p>
		 * @link https://php.net/manual/en/phar.getalias.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.1
		 */
		public function getAlias(): ?string {}

		/**
		 * Get base name of current DirectoryIterator item
		 * <p>Get the base name of the current <code>DirectoryIterator</code> item.</p>
		 * @param string $suffix <p>If the base name ends in <code>suffix</code>, this will be cut.</p>
		 * @return string <p>The base name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Get inode change time of the current DirectoryIterator item
		 * <p>Get the inode change time for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the last change time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getCTime(): int {}

		/**
		 * Returns an iterator for the current entry if it is a directory
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveDirectoryIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): \RecursiveDirectoryIterator {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Return file name of current DirectoryIterator item
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get the handling flags
		 * <p>Gets the handling flags, as set in <code>FilesystemIterator::__construct()</code> or <code>FilesystemIterator::setFlags()</code>.</p>
		 * @return int <p>The integer value of the set flags.</p>
		 * @link https://php.net/manual/en/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get group for the current DirectoryIterator item
		 * <p>Get the group id of the file.</p>
		 * @return int <p>Returns the group id of the current <code>DirectoryIterator</code> item in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getGroup(): int {}

		/**
		 * Get inode for the current DirectoryIterator item
		 * <p>Get the inode number for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the inode number for the file.</p>
		 * @link https://php.net/manual/en/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInode(): int {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Get last modification time of current DirectoryIterator item
		 * <p>Get the last modification time of the current <code>DirectoryIterator</code> item, as a Unix timestamp.</p>
		 * @return int <p>The last modification time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getMTime(): int {}

		/**
		 * Returns phar archive meta-data
		 * <p>Retrieve archive meta-data. Meta-data can be any PHP variable that can be serialized.</p>
		 * @param array $unserializeOptions
		 * @return mixed <p>Any PHP value that can be serialized and is stored as meta-data for the Phar archive, or <b><code>null</code></b> if no meta-data is stored.</p>
		 * @link https://php.net/manual/en/phar.getmetadata.php
		 * @see Phar::setMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getMetadata(array $unserializeOptions = []): mixed {}

		/**
		 * Return whether phar was modified
		 * <p>This method can be used to determine whether a phar has either had an internal file deleted, or contents of a file changed in some way.</p>
		 * @return bool <p><b><code>true</code></b> if the phar has been modified since opened, <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/phar.getmodified.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getModified(): bool {}

		/**
		 * Get owner of current DirectoryIterator item
		 * <p>Get the owner of the current <code>DirectoryIterator</code> item, in numerical format.</p>
		 * @return int <p>The file owner of the file, in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getOwner(): int {}

		/**
		 * Get the real path to the Phar archive on disk
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/phar.getpath.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Return path and file name of current DirectoryIterator item
		 * <p>Get the path and file name of the current file.</p>
		 * @return string <p>Returns the path and file name of current file. Directories do not have a trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Get the permissions of current DirectoryIterator item
		 * <p>Get the permissions of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the permissions of the file, as a decimal <code>int</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPerms(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
		 * <p>Returns the verification signature of a phar archive in a hexadecimal string.</p>
		 * @return array|false <p>Array with the opened archive's signature in <code>hash</code> key and <code>MD5</code>, <code>SHA-1</code>, <code>SHA-256</code>, <code>SHA-512</code>, or <code>OpenSSL</code> in <code>hash_type</code>. This signature is a hash calculated on the entire phar's contents, and may be used to verify the integrity of the archive. A valid signature is absolutely required of all executable phar archives if the phar.require_hash INI variable is set to true. If there is no signature, the function returns <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/phar.getsignature.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getSignature(): array|false {}

		/**
		 * Get size of current DirectoryIterator item
		 * <p>Get the file size for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the size of the file, in bytes.</p>
		 * @link https://php.net/manual/en/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Return the PHP loader or bootstrap stub of a Phar archive
		 * <p>Phar archives contain a bootstrap loader, or <code>stub</code> written in PHP that is executed when the archive is executed in PHP either via include:</p>
		 * @return string <p>Returns a string containing the contents of the bootstrap loader (stub) of the current Phar archive.</p>
		 * @link https://php.net/manual/en/phar.getstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getStub(): string {}

		/**
		 * Get sub path
		 * <p>Returns the sub path relative to the directory given in the constructor.</p>
		 * @return string <p>The sub path.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getsubpath.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getSubPath(): string {}

		/**
		 * Get sub path and name
		 * <p>Gets the sub path and filename.</p>
		 * @return string <p>The sub path (sub directory) and filename.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getSubPathname(): string {}

		/**
		 * Return array of supported compression algorithms
		 * @return array <p>Returns an array containing any of <code>Phar::GZ</code> or <code>Phar::BZ2</code>, depending on the availability of the zlib extension or the bz2 extension.</p>
		 * @link https://php.net/manual/en/phar.getsupportedcompression.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::compress(), Phar::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0
		 */
		final public static function getSupportedCompression(): array {}

		/**
		 * Return array of supported signature types
		 * <p>Return array of supported signature types</p>
		 * @return array <p>Returns an array containing any of <code>MD5</code>, <code>SHA-1</code>, <code>SHA-256</code>, <code>SHA-512</code>, or <code>OpenSSL</code>.</p>
		 * @link https://php.net/manual/en/phar.getsupportedsignatures.php
		 * @see Phar::getSignature(), Phar::setSignatureAlgorithm()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.1.0
		 */
		final public static function getSupportedSignatures(): array {}

		/**
		 * Determine the type of the current DirectoryIterator item
		 * <p>Determines which file type the current <code>DirectoryIterator</code> item belongs to. One of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @return string <p>Returns a <code>string</code> representing the type of the file. May be one of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getType(): string {}

		/**
		 * Return version info of Phar archive
		 * <p>Returns the API version of an opened Phar archive.</p>
		 * @return string <p>The opened archive's API version. This is not to be confused with the API version that the loaded phar extension will use to create new phars. Each Phar archive has the API version hard-coded into its manifest. See Phar file format documentation for more information.</p>
		 * @link https://php.net/manual/en/phar.getversion.php
		 * @see Phar::apiVersion()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getVersion(): string {}

		/**
		 * Returns whether current entry is a directory and not '.' or '..'
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $allowLinks
		 * @return bool <p>Returns whether the current entry is a directory, but not '.' or '..'</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.haschildren.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function hasChildren(bool $allowLinks = false): bool {}

		/**
		 * Returns whether phar has global meta-data
		 * <p>Returns whether phar has global meta-data set.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if meta-data has been set, and <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/phar.hasmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
		 * <p>instructs phar to intercept <code>fopen()</code>, <code>readfile()</code>, <code>file_get_contents()</code>, <code>opendir()</code>, and all of the stat-related functions. If any of these functions is called from within a phar archive with a relative path, the call is modified to access a file within the phar archive. Absolute paths are assumed to be attempts to load external files from the filesystem.</p><p>This function makes it possible to run PHP applications designed to run off of a hard disk as a phar application.</p>
		 * @return void
		 * @link https://php.net/manual/en/phar.interceptfilefuncs.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function interceptFileFuncs(): void {}

		/**
		 * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
		 * <p>This method can be used to determine whether a Phar will save changes to disk immediately, or whether a call to <code>Phar::stopBuffering()</code> is needed to enable saving changes.</p><p>Phar write buffering is per-archive, buffering active for the <code>foo.phar</code> Phar archive does not affect changes to the <code>bar.phar</code> Phar archive.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the write operations are being buffer, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/phar.isbuffering.php
		 * @see Phar::startBuffering(), Phar::stopBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function isBuffering(): bool {}

		/**
		 * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on). Zip-based phar archives cannot be compressed as a file, and so this method will always return <b><code>false</code></b> if a zip-based phar archive is queried.</p>
		 * @return int|false <p><code>Phar::GZ</code>, <code>Phar::BZ2</code> or <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/phar.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function isCompressed(): int|false {}

		/**
		 * Determine if current DirectoryIterator item is a directory
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if it is a directory, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Determine if current DirectoryIterator item is '.' or '..'
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory and either <code>.</code> or <code>..</code></p>
		 * @return bool <p><b><code>true</code></b> if the entry is <code>.</code> or <code>..</code>, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDot(): bool {}

		/**
		 * Determine if current DirectoryIterator item is executable
		 * <p>Determines if the current <code>DirectoryIterator</code> item is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the entry is executable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a regular file
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a <code>link</code> or <code>dir</code>), otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
		 * @param int $format <p>Either <code>Phar::PHAR</code>, <code>Phar::TAR</code>, or <code>Phar::ZIP</code> to test for the format of the archive.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the phar archive matches the file format requested by the parameter</p>
		 * @link https://php.net/manual/en/phar.isfileformat.php
		 * @see Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function isFileFormat(int $format): bool {}

		/**
		 * Determine if current DirectoryIterator item is a symbolic link
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a symbolic link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the item is a symbolic link, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.islink.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be read
		 * <p>Determines if the current <code>DirectoryIterator</code> item is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is readable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Returns whether the given filename is a valid phar filename
		 * <p>Returns whether the given filename is a valid phar filename that will be recognized as a phar archive by the phar extension. This can be used to test a name without having to instantiate a phar archive and catch the inevitable Exception that will be thrown if an invalid name is specified.</p>
		 * @param string $filename <p>The name or full path to a phar archive not yet created</p>
		 * @param bool $executable <p>This parameter determines whether the filename should be treated as a phar executable archive, or a data non-executable archive</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the filename is valid, <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/phar.isvalidpharfilename.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0
		 */
		final public static function isValidPharFilename(string $filename, bool $executable = true): bool {}

		/**
		 * Returns true if the phar archive can be modified
		 * <p>This method returns <b><code>true</code></b> if <code>phar.readonly</code> is <code>0</code>, and the actual phar archive on disk is not read-only.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the phar archive can be modified</p>
		 * @link https://php.net/manual/en/phar.iswritable.php
		 * @see Phar::canWrite(), PharData::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function isWritable(): bool {}

		/**
		 * Return path and filename of current dir entry
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The path and filename of the current dir entry.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): string {}

		/**
		 * Loads any phar archive with an alias
		 * <p>This can be used to read the contents of an external Phar archive. This is most useful for assigning an alias to a phar so that subsequent references to the phar can use the shorter alias, or for loading Phar archives that only contain data and are not intended for execution/inclusion in PHP scripts.</p>
		 * @param string $filename <p>the full or relative path to the phar archive to open</p>
		 * @param ?string $alias <p>The alias that may be used to refer to the phar archive. Note that many phar archives specify an explicit alias inside the phar archive, and a <code>PharException</code> will be thrown if a new alias is specified in this case.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.loadphar.php
		 * @see Phar::mapPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		final public static function loadPhar(string $filename, ?string $alias = null): bool {}

		/**
		 * Reads the currently executed file (a phar) and registers its manifest
		 * <p>This static method can only be used inside a Phar archive's loader stub in order to initialize the phar when it is directly executed, or when it is included in another script.</p>
		 * @param ?string $alias <p>The alias that can be used in <code>phar://</code> URLs to refer to this archive, rather than its full path.</p>
		 * @param int $offset <p>Unused variable, here for compatibility with PEAR's PHP_Archive.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.mapphar.php
		 * @see Phar::loadPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		final public static function mapPhar(?string $alias = null, int $offset = 0): bool {}

		/**
		 * Mount an external path or file to a virtual location within the phar archive
		 * <p>Much like the unix file system concept of mounting external devices to paths within the directory tree, <b>Phar::mount()</b> allows referring to external files and directories as if they were inside of an archive. This allows powerful abstraction such as referring to external configuration files as if they were inside the archive.</p>
		 * @param string $pharPath <p>The internal path within the phar archive to use as the mounted path location. This must be a relative path within the phar archive, and must not already exist.</p>
		 * @param string $externalPath <p>A path or URL to an external file or directory to mount within the phar archive</p>
		 * @return void <p>No return. <code>PharException</code> is thrown on failure.</p>
		 * @link https://php.net/manual/en/phar.mount.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function mount(string $pharPath, string $externalPath): void {}

		/**
		 * Defines a list of up to 4 $_SERVER variables that should be modified for execution
		 * <p><b>Phar::mungServer()</b> should only be called within the stub of a phar archive.</p><p>Defines a list of up to 4 $_SERVER variables that should be modified for execution. Variables that can be modified to remove traces of phar execution are <code>REQUEST_URI</code>, <code>PHP_SELF</code>, <code>SCRIPT_NAME</code> and <code>SCRIPT_FILENAME</code>.</p><p>On its own, this method does nothing. Only when combined with <code>Phar::webPhar()</code> does it take effect, and only when the requested file is a PHP file to be parsed. Note that the <code>PATH_INFO</code> and <code>PATH_TRANSLATED</code> variables are always modified.</p><p>The original values of variables that are modified are stored in the SERVER array with <code>PHAR_</code> prepended, so for instance <code>SCRIPT_NAME</code> would be saved as <code>PHAR_SCRIPT_NAME</code>.</p>
		 * @param array $variables <p>an array containing as string indices any of <code>REQUEST_URI</code>, <code>PHP_SELF</code>, <code>SCRIPT_NAME</code> and <code>SCRIPT_FILENAME</code>. Other values trigger an exception, and <b>Phar::mungServer()</b> is case-sensitive.</p>
		 * @return void <p>No return.</p>
		 * @link https://php.net/manual/en/phar.mungserver.php
		 * @see Phar::webPhar(), Phar::setStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function mungServer(array $variables): void {}

		/**
		 * Move to next entry
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Determines whether a file exists in the phar
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets.</p><p>offsetExists() is called whenever <code>isset()</code> is called.</p>
		 * @param string $localName <p>The filename (relative path) to look for in a Phar.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists within the phar, or <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/phar.offsetexists.php
		 * @see Phar::offsetGet(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function offsetExists(string $localName): bool {}

		/**
		 * Gets a PharFileInfo object for a specific file
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. <b>Phar::offsetGet()</b> is used for retrieving files from a Phar archive.</p>
		 * @param string $localName <p>The filename (relative path) to look for in a Phar.</p>
		 * @return SplFileInfo <p>A <code>PharFileInfo</code> object is returned that can be used to iterate over a file's contents or to retrieve information about the current file.</p>
		 * @link https://php.net/manual/en/phar.offsetget.php
		 * @see Phar::offsetExists(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function offsetGet(string $localName): \SplFileInfo {}

		/**
		 * Set the contents of an internal file to those of an external file
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. offsetSet is used for modifying an existing file, or adding a new file to a Phar archive.</p>
		 * @param string $localName <p>The filename (relative path) to modify in a Phar.</p>
		 * @param resource|string $value <p>Content of the file.</p>
		 * @return void <p>No return values.</p>
		 * @link https://php.net/manual/en/phar.offsetset.php
		 * @see Phar::offsetExists(), Phar::offsetGet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function offsetSet(string $localName, $value): void {}

		/**
		 * Remove a file from a phar
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. offsetUnset is used for deleting an existing file, and is called by the <code>unset()</code> language construct.</p>
		 * @param string $localName <p>The filename (relative path) to modify in a Phar.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.offsetunset.php
		 * @see Phar::offsetExists(), Phar::offsetGet(), Phar::offsetSet(), Phar::unlinkArchive(), Phar::delete()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function offsetUnset(string $localName): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewind dir back to the start
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Returns the full path on disk or full phar URL to the currently executing Phar archive
		 * <p>Returns the full path to the running phar archive. This is intended for use much like the <code>__FILE__</code> magic constant, and only has effect inside an executing phar archive.</p><p>Inside the stub of an archive, <b>Phar::running()</b> returns <code>""</code>. Simply use <b><code>__FILE__</code></b> to access the current running phar inside a stub.</p>
		 * @param bool $returnPhar <p>If <b><code>false</code></b>, the full path on disk to the phar archive is returned. If <b><code>true</code></b>, a full phar URL is returned.</p>
		 * @return string <p>Returns the filename if valid, empty string otherwise.</p>
		 * @link https://php.net/manual/en/phar.running.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function running(bool $returnPhar = true): string {}

		/**
		 * Seek to a DirectoryIterator item
		 * <p>Seek to a given position in the <code>DirectoryIterator</code>.</p>
		 * @param int $offset <p>The zero-based numeric position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Set the alias for the Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Set the alias for the Phar archive, and write it as the permanent alias for this phar archive. An alias can be used internally to a phar archive to ensure that use of the <code>phar</code> stream wrapper to access internal files always works regardless of the location of the phar archive on the filesystem. Another alternative is to rely upon Phar's interception of <code>include</code> or to use <code>Phar::interceptFileFuncs()</code> and use relative paths.</p>
		 * @param string $alias <p>A shorthand string that this archive can be referred to in <code>phar</code> stream wrapper access.</p>
		 * @return bool
		 * @link https://php.net/manual/en/phar.setalias.php
		 * @see Phar::__construct(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.1
		 */
		public function setAlias(string $alias): bool {}

		/**
		 * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>This method is a convenience method that combines the functionality of <code>Phar::createDefaultStub()</code> and <code>Phar::setStub()</code>.</p>
		 * @param ?string $index <p>Relative path within the phar archive to run if accessed on the command-line</p>
		 * @param ?string $webIndex <p>Relative path within the phar archive to run if accessed through a web browser</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.setdefaultstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function setDefaultStub(?string $index = null, ?string $webIndex = null): bool {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets handling flags
		 * <p>Sets handling flags.</p>
		 * @param int $flags <p>The handling flags to set. See the FilesystemIterator constants.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Sets phar archive meta-data
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p><b>Phar::setMetadata()</b> should be used to store customized data that describes something about the phar archive as a complete entity. <code>PharFileInfo::setMetadata()</code> should be used for file-specific meta-data. Meta-data can slow down the performance of loading a phar archive if the data is large.</p><p>Some possible uses for meta-data include specifying which file within the archive should be used to bootstrap the archive, or the location of a file manifest like PEAR's package.xml file. However, any useful data that describes the phar archive may be stored.</p>
		 * @param mixed $metadata <p>Any PHP variable containing information to store that describes the phar archive</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.setmetadata.php
		 * @see Phar::getMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function setMetadata(mixed $metadata): void {}

		/**
		 * Set the signature algorithm for a phar and apply it
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>set the signature algorithm for a phar and apply it. The signature algorithm must be one of <code>Phar::MD5</code>, <code>Phar::SHA1</code>, <code>Phar::SHA256</code>, <code>Phar::SHA512</code>, or <code>Phar::OPENSSL</code>.</p><p>Note that all executable phar archives have a signature created automatically, <code>SHA1</code> by default. data tar- or zip-based archives (archives created with the <code>PharData</code> class) must have their signature created and set explicitly via <b>Phar::setSignatureAlgorithm()</b>.</p>
		 * @param int $algo <p>One of <code>Phar::MD5</code>, <code>Phar::SHA1</code>, <code>Phar::SHA256</code>, <code>Phar::SHA512</code>, or <code>Phar::OPENSSL</code></p>
		 * @param ?string $privateKey <p>The contents of an OpenSSL private key, as extracted from a certificate or OpenSSL key file:</p> <code> &lt;&#63;php<br>$private&nbsp;=&nbsp;openssl_get_privatekey(file_get_contents('private.pem'));<br>$pkey&nbsp;=&nbsp;'';<br>openssl_pkey_export($private,&nbsp;$pkey);<br>$p-&gt;setSignatureAlgorithm(Phar::OPENSSL,&nbsp;$pkey);<br>&#63;&gt;  </code>  See phar introduction for instructions on naming and placement of the public key file.
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.setsignaturealgorithm.php
		 * @see Phar::getSupportedSignatures(), Phar::getSignature()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.1.0
		 */
		public function setSignatureAlgorithm(int $algo, ?string $privateKey = null): void {}

		/**
		 * Used to set the PHP loader or bootstrap stub of a Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>This method is used to add a PHP bootstrap loader stub to a new Phar archive, or to replace the loader stub in an existing Phar archive.</p><p>The loader stub for a Phar archive is used whenever an archive is included directly as in this example:</p><p>The loader is not accessed when including a file through the <code>phar</code> stream wrapper like so:</p>
		 * @param string $stub <p>A string or an open stream handle to use as the executable stub for this phar archive.</p>
		 * @param int $len
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.setstub.php
		 * @see Phar::getStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function setStub(string $stub, int $len = -1): bool {}

		/**
		 * Start buffering Phar write operations, do not modify the Phar object on disk
		 * <p>Although technically unnecessary, the <b>Phar::startBuffering()</b> method can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.</p><p>However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. the <b>Phar::startBuffering()</b>/<code>Phar::stopBuffering()</code> pair of methods is provided for this purpose.</p><p>Phar write buffering is per-archive, buffering active for the <code>foo.phar</code> Phar archive does not affect changes to the <code>bar.phar</code> Phar archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.startbuffering.php
		 * @see Phar::stopBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function startBuffering(): void {}

		/**
		 * Stop buffering write requests to the Phar archive, and save changes to disk
		 * <p><b>Phar::stopBuffering()</b> is used in conjunction with the <code>Phar::startBuffering()</code> method. <code>Phar::startBuffering()</code> can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.</p><p>However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. The <code>Phar::startBuffering()</code>/<b>Phar::stopBuffering()</b> pair of methods is provided for this purpose.</p><p>Phar write buffering is per-archive, buffering active for the <code>foo.phar</code> Phar archive does not affect changes to the <code>bar.phar</code> Phar archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.stopbuffering.php
		 * @see Phar::startBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function stopBuffering(): void {}

		/**
		 * Completely remove a phar archive from disk and from memory
		 * <p>Removes a phar archive from disk and memory.</p>
		 * @param string $filename <p>The path on disk to the phar archive.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phar.unlinkarchive.php
		 * @see Phar::delete(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function unlinkArchive(string $filename): bool {}

		/**
		 * Check whether current DirectoryIterator position is a valid file
		 * <p>Check whether current <code>DirectoryIterator</code> position is a valid file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}

		/**
		 * Routes a request from a web browser to an internal file within the phar archive
		 * <p><b>Phar::webPhar()</b> serves as <code>Phar::mapPhar()</code> for web-based phars. This method parses $_SERVER['REQUEST_URI'] and routes a request from a web browser to an internal file within the phar archive. It simulates a web server, routing requests to the correct file, echoing the correct headers and parsing PHP files as needed. Combined with <code>Phar::mungServer()</code> and <code>Phar::interceptFileFuncs()</code>, any web application can be used unmodified from a phar archive.</p><p><b>Phar::webPhar()</b> should only be called from the stub of a phar archive (see here for more information on what a stub is).</p>
		 * @param ?string $alias <p>The alias that can be used in <code>phar://</code> URLs to refer to this archive, rather than its full path.</p>
		 * @param ?string $index <p>The location within the phar of the directory index.</p>
		 * @param ?string $fileNotFoundScript <p>The location of the script to run when a file is not found. This script should output the proper HTTP 404 headers.</p>
		 * @param array $mimeTypes <p>An array mapping additional file extensions to MIME type. If the default mapping is sufficient, pass an empty array. By default, these extensions are mapped to these MIME types:</p> <code> &lt;&#63;php<br>$mimes&nbsp;=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;'phps'&nbsp;=&gt;&nbsp;Phar::PHPS,&nbsp;//&nbsp;pass&nbsp;to&nbsp;highlight_file()<br>&nbsp;&nbsp;&nbsp;&nbsp;'c'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'cc'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'cpp'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'c++'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'dtd'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'h'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'log'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'rng'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'txt'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xsd'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'php'&nbsp;=&gt;&nbsp;Phar::PHP,&nbsp;//&nbsp;parse&nbsp;as&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;'inc'&nbsp;=&gt;&nbsp;Phar::PHP,&nbsp;//&nbsp;parse&nbsp;as&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;'avi'&nbsp;=&gt;&nbsp;'video/avi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'bmp'&nbsp;=&gt;&nbsp;'image/bmp',<br>&nbsp;&nbsp;&nbsp;&nbsp;'css'&nbsp;=&gt;&nbsp;'text/css',<br>&nbsp;&nbsp;&nbsp;&nbsp;'gif'&nbsp;=&gt;&nbsp;'image/gif',<br>&nbsp;&nbsp;&nbsp;&nbsp;'htm'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'html'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'htmls'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'ico'&nbsp;=&gt;&nbsp;'image/x-ico',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpe'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpg'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpeg'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'js'&nbsp;=&gt;&nbsp;'application/x-javascript',<br>&nbsp;&nbsp;&nbsp;&nbsp;'midi'&nbsp;=&gt;&nbsp;'audio/midi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mid'&nbsp;=&gt;&nbsp;'audio/midi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mod'&nbsp;=&gt;&nbsp;'audio/mod',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mov'&nbsp;=&gt;&nbsp;'movie/quicktime',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mp3'&nbsp;=&gt;&nbsp;'audio/mp3',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mpg'&nbsp;=&gt;&nbsp;'video/mpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mpeg'&nbsp;=&gt;&nbsp;'video/mpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'pdf'&nbsp;=&gt;&nbsp;'application/pdf',<br>&nbsp;&nbsp;&nbsp;&nbsp;'png'&nbsp;=&gt;&nbsp;'image/png',<br>&nbsp;&nbsp;&nbsp;&nbsp;'swf'&nbsp;=&gt;&nbsp;'application/shockwave-flash',<br>&nbsp;&nbsp;&nbsp;&nbsp;'tif'&nbsp;=&gt;&nbsp;'image/tiff',<br>&nbsp;&nbsp;&nbsp;&nbsp;'tiff'&nbsp;=&gt;&nbsp;'image/tiff',<br>&nbsp;&nbsp;&nbsp;&nbsp;'wav'&nbsp;=&gt;&nbsp;'audio/wav',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xbm'&nbsp;=&gt;&nbsp;'image/xbm',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xml'&nbsp;=&gt;&nbsp;'text/xml',<br>);<br>&#63;&gt;  </code>
		 * @param ?callable $rewrite <p>The rewrites function is passed a string as its only parameter and must return a <code>string</code> or <b><code>false</code></b>.</p> <p>If you are using fast-cgi or cgi then the parameter passed to the function is the value of the $_SERVER['PATH_INFO'] variable. Otherwise, the parameter passed to the function is the value of the $_SERVER['REQUEST_URI'] variable.</p> <p>If a string is returned it is used as the internal file path. If <b><code>false</code></b> is returned then webPhar() will send a HTTP 403 Denied Code.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phar.webphar.php
		 * @see Phar::mungServer(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		final public static function webPhar(?string $alias = null, ?string $index = null, ?string $fileNotFoundScript = null, array $mimeTypes = [], ?callable $rewrite = null): void {}
	}

	/**
	 * <p>The PharData class provides a high-level interface to accessing and creating non-executable tar and zip archives. Because these archives do not contain a stub and cannot be executed by the phar extension, it is possible to create and manipulate regular zip and tar files using the PharData class even if <code>phar.readonly</code> php.ini setting is <code>1</code>.</p>
	 * @link https://php.net/manual/en/class.phardata.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
	 */
	class PharData extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess {

		/**
		 * Construct a non-executable tar or zip archive object
		 * @param string $filename <p>Path to an existing tar/zip archive or to-be-created archive</p>
		 * @param int $flags <p>Flags to pass to <code>Phar</code> parent class <code>RecursiveDirectoryIterator</code>.</p>
		 * @param ?string $alias <p>Alias with which this Phar archive should be referred to in calls to stream functionality.</p>
		 * @param int $format <p>One of the file format constants available within the <code>Phar</code> class.</p>
		 * @return self
		 * @link https://php.net/manual/en/phardata.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null, int $format = 0) {}

		/**
		 * Destructs a non-executable tar or zip archive object
		 * @return void
		 * @link https://php.net/manual/en/phardata.destruct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function __destruct() {}

		/**
		 * Get file name as a string
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Add an empty directory to the tar/zip archive
		 * <p>With this method, an empty directory is created with path <code>dirname</code>. This method is similar to <code>ZipArchive::addEmptyDir()</code>.</p>
		 * @param string $directory <p>The name of the empty directory to create in the phar archive</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link https://php.net/manual/en/phardata.addemptydir.php
		 * @see Phar::addEmptyDir(), PharData::addFile(), PharData::addFromString()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function addEmptyDir(string $directory): void {}

		/**
		 * Add a file from the filesystem to the tar/zip archive
		 * <p>With this method, any file or URL can be added to the tar/zip archive. If the optional second parameter <code>localname</code> is specified, the file will be stored in the archive with that name, otherwise the <code>file</code> parameter is used as the path to store within the archive. URLs must have a localname or an exception is thrown. This method is similar to <code>ZipArchive::addFile()</code>.</p>
		 * @param string $filename <p>Full or relative path to a file on disk to be added to the phar archive.</p>
		 * @param ?string $localName <p>Path that the file will be stored in the archive.</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link https://php.net/manual/en/phardata.addfile.php
		 * @see PharData::offsetSet(), Phar::addFile(), PharData::addFromString(), PharData::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function addFile(string $filename, ?string $localName = null): void {}

		/**
		 * Add a file from the filesystem to the tar/zip archive
		 * <p>With this method, any string can be added to the tar/zip archive. The file will be stored in the archive with <code>localname</code> as its path. This method is similar to <code>ZipArchive::addFromString()</code>.</p>
		 * @param string $localName <p>Path that the file will be stored in the archive.</p>
		 * @param string $contents <p>The file contents to store</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link https://php.net/manual/en/phardata.addfromstring.php
		 * @see PharData::offsetSet(), Phar::addFromString(), PharData::addFile(), PharData::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function addFromString(string $localName, string $contents): void {}

		/**
		 * Construct a tar/zip archive from the files within a directory
		 * <p>Populate a tar/zip archive from directory contents. The optional second parameter is a regular expression (pcre) that is used to exclude files. Any filename that matches the regular expression will be included, all others will be excluded. For more fine-grained control, use <code>PharData::buildFromIterator()</code>.</p>
		 * @param string $directory <p>The full or relative path to the directory that contains all files to add to the archive.</p>
		 * @param string $pattern <p>An optional pcre regular expression that is used to filter the list of files. Only file paths matching the regular expression will be included in the archive.</p>
		 * @return array <p><code>Phar::buildFromDirectory()</code> returns an associative array mapping internal path of file to the full path of the file on the filesystem, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.buildfromdirectory.php
		 * @see Phar::buildFromDirectory(), PharData::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function buildFromDirectory(string $directory, string $pattern = ""): array {}

		/**
		 * Construct a tar or zip archive from an iterator
		 * <p>Populate a tar or zip archive from an iterator. Two styles of iterators are supported, iterators that map the filename within the tar/zip to the name of a file on disk, and iterators like DirectoryIterator that return SplFileInfo objects. For iterators that return SplFileInfo objects, the second parameter is required.</p>
		 * @param \Traversable $iterator <p>Any iterator that either associatively maps tar/zip file to location or returns SplFileInfo objects</p>
		 * @param ?string $baseDirectory <p>For iterators that return SplFileInfo objects, the portion of each file's full path to remove when adding to the tar/zip archive</p>
		 * @return array <p><b>PharData::buildFromIterator()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link https://php.net/manual/en/phardata.buildfromiterator.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function buildFromIterator(\Traversable $iterator, ?string $baseDirectory = null): array {}

		/**
		 * Compresses the entire tar/zip archive using Gzip or Bzip2 compression
		 * <p>For tar archives, this method compresses the entire archive using gzip compression or bzip2 compression. The resulting file can be processed with the gunzip command/bunzip command, or accessed directly and transparently with the Phar extension.</p><p>For zip archives, this method fails with an exception. The zlib extension must be enabled to compress with gzip compression, the bzip2 extension must be enabled in order to compress with bzip2 compression.</p><p>In addition, this method automatically renames the archive, appending <code>.gz</code>, <code>.bz2</code> or removing the extension if passed <code>Phar::NONE</code> to remove compression. Alternatively, a file extension may be specified with the second parameter.</p>
		 * @param int $compression <p>Compression must be one of <code>Phar::GZ</code>, <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code> to remove compression.</p>
		 * @param ?string $extension <p>By default, the extension is <code>.tar.gz</code> or <code>.tar.bz2</code> for compressing a tar, and <code>.tar</code> for decompressing.</p>
		 * @return ?PharData <p>A <code>PharData</code> object is returned on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.compress.php
		 * @see Phar::compress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function compress(int $compression, ?string $extension = null): ?\PharData {}

		/**
		 * Compresses all files in the current tar/zip archive
		 * <p>For tar-based archives, this method throws a <code>BadMethodCallException</code>, as compression of individual files within a tar archive is not supported by the file format. Use <code>PharData::compress()</code> to compress an entire tar-based archive.</p><p>For Zip-based archives, this method compresses all files in the archive using the specified compression. The zlib or bzip2 extensions must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2/zlib compression, the respective extension must be enabled in order to decompress the files prior to re-compressing.</p>
		 * @param int $compression <p>Compression must be one of <code>Phar::GZ</code>, <code>Phar::BZ2</code> to add compression, or <code>Phar::NONE</code> to remove compression.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phardata.compressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), PharData::decompressFiles(), Phar::getSupportedCompression(), PharData::compress(), PharData::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function compressFiles(int $compression): void {}

		/**
		 * Convert a phar archive to a non-executable tar or zip file
		 * <p>This method is used to convert a non-executable tar or zip archive to another non-executable format.</p><p>If no changes are specified, this method throws a <code>BadMethodCallException</code>. This method should be used to convert a tar archive to zip format or vice-versa. Although it is possible to simply change the compression of a tar archive using this method, it is better to use the <code>PharData::compress()</code> method for logical consistency.</p><p>If successful, the method creates a new archive on disk and returns a <code>PharData</code> object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param ?int $format <p>This should be one of <code>Phar::TAR</code> or <code>Phar::ZIP</code>. If set to <b><code>null</code></b>, the existing file format will be preserved.</p>
		 * @param ?int $compression <p>This should be one of <code>Phar::NONE</code> for no whole-archive compression, <code>Phar::GZ</code> for zlib-based compression, and <code>Phar::BZ2</code> for bzip-based compression.</p>
		 * @param ?string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that <code>.phar</code> cannot be used anywhere in the filename for a non-executable tar or zip archive.</p> <p>If converting to a tar-based phar archive, the default extensions are <code>.tar</code>, <code>.tar.gz</code>, and <code>.tar.bz2</code> depending on specified compression. For zip-based archives, the default extension is <code>.zip</code>.</p>
		 * @return ?PharData <p>The method returns a <code>PharData</code> object on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.converttodata.php
		 * @see Phar::convertToExecutable(), Phar::convertToData(), PharData::convertToExecutable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null): ?\PharData {}

		/**
		 * Convert a non-executable tar/zip archive to an executable phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>This method is used to convert a non-executable tar or zip archive to an executable phar archive. Any of the three executable file formats (phar, tar or zip) can be used, and whole-archive compression can also be performed.</p><p>If no changes are specified, this method throws a <code>BadMethodCallException</code>.</p><p>If successful, the method creates a new archive on disk and returns a <code>Phar</code> object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param ?int $format <p>This should be one of <code>Phar::PHAR</code>, <code>Phar::TAR</code>, or <code>Phar::ZIP</code>. If set to <b><code>null</code></b>, the existing file format will be preserved.</p>
		 * @param ?int $compression <p>This should be one of <code>Phar::NONE</code> for no whole-archive compression, <code>Phar::GZ</code> for zlib-based compression, and <code>Phar::BZ2</code> for bzip-based compression.</p>
		 * @param ?string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that all zip- and tar-based phar archives must contain <code>.phar</code> in their file extension in order to be processed as a phar archive.</p> <p>If converting to a phar-based archive, the default extensions are <code>.phar</code>, <code>.phar.gz</code>, or <code>.phar.bz2</code> depending on the specified compression. For tar-based phar archives, the default extensions are <code>.phar.tar</code>, <code>.phar.tar.gz</code>, and <code>.phar.tar.bz2</code>. For zip-based phar archives, the default extension is <code>.phar.zip</code>.</p>
		 * @return ?Phar <p>The method returns a <code>Phar</code> object on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.converttoexecutable.php
		 * @see Phar::convertToExecutable(), Phar::convertToData(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null): ?\Phar {}

		/**
		 * Copy a file internal to the phar archive to another new file within the phar
		 * <p>Copy a file internal to the tar/zip archive to another new file within the same archive. This is an object-oriented alternative to using <code>copy()</code> with the phar stream wrapper.</p>
		 * @param string $from
		 * @param string $to
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is safer to encase method call in a try/catch block and assume success if no exception is thrown.</p>
		 * @link https://php.net/manual/en/phardata.copy.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function copy(string $from, string $to): bool {}

		/**
		 * The current file
		 * <p>Get file information of the current element.</p>
		 * @return string|SplFileInfo|FilesystemIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): string|\SplFileInfo|\FilesystemIterator {}

		/**
		 * Decompresses the entire Phar archive
		 * <p>For tar-based archives, this method decompresses the entire archive.</p><p>For Zip-based archives, this method fails with an exception. The zlib extension must be enabled to decompress an archive compressed with gzip compression, and the bzip2 extension must be enabled in order to decompress an archive compressed with bzip2 compression.</p><p>In addition, this method automatically renames the file extension of the archive, <code>.tar</code> by default. Alternatively, a file extension may be specified with the <code>extension</code> parameter.</p>
		 * @param ?string $extension <p>For decompressing, the default file extension is <code>.tar</code>. Use this parameter to specify another file extension. Be aware that only executable archives can contain <code>.phar</code> in their filename.</p>
		 * @return ?PharData <p>A <code>PharData</code> object is returned on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), PharData::compress(), Phar::getSupportedCompression(), PharData::compressFiles(), PharData::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function decompress(?string $extension = null): ?\PharData {}

		/**
		 * Decompresses all files in the current zip archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>For tar-based archives, this method throws a <code>BadMethodCallException</code>, as compression of individual files within a tar archive is not supported by the file format. Use <code>PharData::compress()</code> to compress an entire tar-based archive.</p><p>For Zip-based archives, this method decompresses all files in the archive. The zlib or bzip2 extensions must be enabled to take advantage of this feature if any files are compressed using bzip2/zlib compression.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.decompressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), PharData::compressFiles(), Phar::getSupportedCompression(), PharData::compress(), PharData::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function decompressFiles(): bool {}

		/**
		 * Deletes the global metadata of a zip archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Deletes the global metadata of the zip archive</p>
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link https://php.net/manual/en/phardata.delmetadata.php
		 * @see Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function delMetadata(): bool {}

		/**
		 * Delete a file within a tar/zip archive
		 * <p>Delete a file within an archive. This is the functional equivalent of calling <code>unlink()</code> on the stream wrapper equivalent, as shown in the example below.</p>
		 * @param string $localName <p>Path within an archive to the file to delete.</p>
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link https://php.net/manual/en/phardata.delete.php
		 * @see Phar::delete()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function delete(string $localName): bool {}

		/**
		 * Extract the contents of a tar/zip archive to a directory
		 * <p>Extract all files within a tar/zip archive to disk. Extracted files and directories preserve permissions as stored in the archive. The optional parameters allow optional control over which files are extracted, and whether existing files on disk can be overwritten. The second parameter <code>files</code> can be either the name of a file or directory to extract, or an array of names of files and directories to extract. By default, this method will not overwrite existing files, the third parameter can be set to true to enable overwriting of files. This method is similar to <code>ZipArchive::extractTo()</code>.</p>
		 * @param string $directory <p>Path to extract the given <code>files</code> to</p>
		 * @param array|string|null $files <p>The name of a file or directory to extract, or an array of files/directories to extract</p>
		 * @param bool $overwrite <p>Set to <b><code>true</code></b> to enable overwriting existing files</p>
		 * @return bool <p>returns <b><code>true</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link https://php.net/manual/en/phardata.extractto.php
		 * @see Phar::extractTo()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false): bool {}

		/**
		 * Get last access time of the current DirectoryIterator item
		 * <p>Get the last access time of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the time the file was last accessed, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getATime(): int {}

		/**
		 * Get base name of current DirectoryIterator item
		 * <p>Get the base name of the current <code>DirectoryIterator</code> item.</p>
		 * @param string $suffix <p>If the base name ends in <code>suffix</code>, this will be cut.</p>
		 * @return string <p>The base name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Get inode change time of the current DirectoryIterator item
		 * <p>Get the inode change time for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the last change time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getCTime(): int {}

		/**
		 * Returns an iterator for the current entry if it is a directory
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveDirectoryIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): \RecursiveDirectoryIterator {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Return file name of current DirectoryIterator item
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get the handling flags
		 * <p>Gets the handling flags, as set in <code>FilesystemIterator::__construct()</code> or <code>FilesystemIterator::setFlags()</code>.</p>
		 * @return int <p>The integer value of the set flags.</p>
		 * @link https://php.net/manual/en/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get group for the current DirectoryIterator item
		 * <p>Get the group id of the file.</p>
		 * @return int <p>Returns the group id of the current <code>DirectoryIterator</code> item in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getGroup(): int {}

		/**
		 * Get inode for the current DirectoryIterator item
		 * <p>Get the inode number for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the inode number for the file.</p>
		 * @link https://php.net/manual/en/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInode(): int {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Get last modification time of current DirectoryIterator item
		 * <p>Get the last modification time of the current <code>DirectoryIterator</code> item, as a Unix timestamp.</p>
		 * @return int <p>The last modification time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getMTime(): int {}

		/**
		 * Get owner of current DirectoryIterator item
		 * <p>Get the owner of the current <code>DirectoryIterator</code> item, in numerical format.</p>
		 * @return int <p>The file owner of the file, in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getOwner(): int {}

		/**
		 * Get path of current Iterator item without filename
		 * <p>Get the path to the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the path to the file, omitting the file name and any trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Return path and file name of current DirectoryIterator item
		 * <p>Get the path and file name of the current file.</p>
		 * @return string <p>Returns the path and file name of current file. Directories do not have a trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Get the permissions of current DirectoryIterator item
		 * <p>Get the permissions of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the permissions of the file, as a decimal <code>int</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPerms(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Get size of current DirectoryIterator item
		 * <p>Get the file size for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the size of the file, in bytes.</p>
		 * @link https://php.net/manual/en/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Get sub path
		 * <p>Returns the sub path relative to the directory given in the constructor.</p>
		 * @return string <p>The sub path.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getsubpath.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getSubPath(): string {}

		/**
		 * Get sub path and name
		 * <p>Gets the sub path and filename.</p>
		 * @return string <p>The sub path (sub directory) and filename.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getSubPathname(): string {}

		/**
		 * Determine the type of the current DirectoryIterator item
		 * <p>Determines which file type the current <code>DirectoryIterator</code> item belongs to. One of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @return string <p>Returns a <code>string</code> representing the type of the file. May be one of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getType(): string {}

		/**
		 * Returns whether current entry is a directory and not '.' or '..'
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $allowLinks
		 * @return bool <p>Returns whether the current entry is a directory, but not '.' or '..'</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.haschildren.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function hasChildren(bool $allowLinks = false): bool {}

		/**
		 * Determine if current DirectoryIterator item is a directory
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if it is a directory, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Determine if current DirectoryIterator item is '.' or '..'
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory and either <code>.</code> or <code>..</code></p>
		 * @return bool <p><b><code>true</code></b> if the entry is <code>.</code> or <code>..</code>, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDot(): bool {}

		/**
		 * Determine if current DirectoryIterator item is executable
		 * <p>Determines if the current <code>DirectoryIterator</code> item is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the entry is executable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a regular file
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a <code>link</code> or <code>dir</code>), otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a symbolic link
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a symbolic link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the item is a symbolic link, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.islink.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be read
		 * <p>Determines if the current <code>DirectoryIterator</code> item is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is readable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Returns true if the tar/zip archive can be modified
		 * <p>This method returns <b><code>true</code></b> if the tar/zip archive on disk is not read-only. Unlike <code>Phar::isWritable()</code>, data-only tar/zip archives can be modified even if <code>phar.readonly</code> is set to <code>1</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the tar/zip archive can be modified</p>
		 * @link https://php.net/manual/en/phardata.iswritable.php
		 * @see Phar::canWrite(), Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function isWritable(): bool {}

		/**
		 * Return path and filename of current dir entry
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The path and filename of the current dir entry.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): string {}

		/**
		 * Move to next entry
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Set the contents of a file within the tar/zip to those of an external file or string
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a tar/zip archive using array access brackets. offsetSet is used for modifying an existing file, or adding a new file to a tar/zip archive.</p>
		 * @param string $localName <p>The filename (relative path) to modify in a tar or zip archive.</p>
		 * @param resource|string $value <p>Content of the file.</p>
		 * @return void <p>No return values.</p>
		 * @link https://php.net/manual/en/phardata.offsetset.php
		 * @see Phar::offsetSet()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function offsetSet(string $localName, $value): void {}

		/**
		 * Remove a file from a tar/zip archive
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a tar/zip archive using array access brackets. offsetUnset is used for deleting an existing file, and is called by the <code>unset()</code> language construct.</p>
		 * @param string $localName <p>The filename (relative path) to modify in the tar/zip archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phardata.offsetunset.php
		 * @see Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function offsetUnset(string $localName): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewind dir back to the start
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to a DirectoryIterator item
		 * <p>Seek to a given position in the <code>DirectoryIterator</code>.</p>
		 * @param int $offset <p>The zero-based numeric position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Dummy function (Phar::setAlias is not valid for PharData)
		 * <p>Non-executable tar/zip archives cannot have an alias, so this method simply throws an exception.</p>
		 * @param string $alias <p>A shorthand string that this archive can be referred to in <code>phar</code> stream wrapper access. This parameter is ignored.</p>
		 * @return bool
		 * @link https://php.net/manual/en/phardata.setalias.php
		 * @see Phar::setAlias()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function setAlias(string $alias): bool {}

		/**
		 * Dummy function (Phar::setDefaultStub is not valid for PharData)
		 * <p>Non-executable tar/zip archives cannot have a stub, so this method simply throws an exception.</p>
		 * @param ?string $index <p>Relative path within the phar archive to run if accessed on the command-line</p>
		 * @param ?string $webIndex <p>Relative path within the phar archive to run if accessed through a web browser</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.setdefaultstub.php
		 * @see Phar::setDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function setDefaultStub(?string $index = null, ?string $webIndex = null): bool {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets handling flags
		 * <p>Sets handling flags.</p>
		 * @param int $flags <p>The handling flags to set. See the FilesystemIterator constants.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Sets phar archive meta-data
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p><code>Phar::setMetadata()</code> should be used to store customized data that describes something about the phar archive as a complete entity. <code>PharFileInfo::setMetadata()</code> should be used for file-specific meta-data. Meta-data can slow down the performance of loading a phar archive if the data is large.</p><p>Some possible uses for meta-data include specifying which file within the archive should be used to bootstrap the archive, or the location of a file manifest like PEAR's package.xml file. However, any useful data that describes the phar archive may be stored.</p>
		 * @param mixed $metadata <p>Any PHP variable containing information to store that describes the phar archive</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phardata.setmetadata.php
		 * @see Phar::getMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since No version information available, might only be in Git
		 */
		public function setMetadata(mixed $metadata): void {}

		/**
		 * Set the signature algorithm for a phar and apply it
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <code>phar.readonly</code> to be set to <code>0</code> in order to work for <code>Phar</code> objects. Otherwise, a <code>PharException</code> will be thrown.</p><p>Set the signature algorithm for a phar and apply it. The signature algorithm must be one of <code>Phar::MD5</code>, <code>Phar::SHA1</code>, <code>Phar::SHA256</code>, <code>Phar::SHA512</code>, or <code>Phar::OPENSSL</code>.</p>
		 * @param int $algo <p>One of <code>Phar::MD5</code>, <code>Phar::SHA1</code>, <code>Phar::SHA256</code>, <code>Phar::SHA512</code>, or <code>Phar::OPENSSL</code></p>
		 * @param ?string $privateKey
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/phardata.setsignaturealgorithm.php
		 * @see Phar::getSupportedSignatures(), Phar::getSignature()
		 * @since No version information available, might only be in Git
		 */
		public function setSignatureAlgorithm(int $algo, ?string $privateKey = null): void {}

		/**
		 * Dummy function (Phar::setStub is not valid for PharData)
		 * <p>Non-executable tar/zip archives cannot have a stub, so this method simply throws an exception.</p>
		 * @param string $stub <p>A string or an open stream handle to use as the executable stub for this phar archive. This parameter is ignored.</p>
		 * @param int $len
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/phardata.setstub.php
		 * @see Phar::setStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 2.0.0
		 */
		public function setStub(string $stub, int $len = -1): bool {}

		/**
		 * Check whether current DirectoryIterator position is a valid file
		 * <p>Check whether current <code>DirectoryIterator</code> position is a valid file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The PharException class provides a phar-specific exception class for try/catch blocks.</p>
	 * @link https://php.net/manual/en/class.pharexception.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
	 */
	class PharException extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>The PharFileInfo class provides a high-level interface to the contents and attributes of a single file within a phar archive.</p>
	 * @link https://php.net/manual/en/class.pharfileinfo.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
	 */
	class PharFileInfo extends \SplFileInfo {

		/**
		 * Construct a Phar entry object
		 * <p>This should not be called directly. Instead, a PharFileInfo object is initialized by calling <code>Phar::offsetGet()</code> through array access.</p>
		 * @param string $filename <p>The full url to retrieve a file. If you wish to retrieve the information for the file <code>my/file.php</code> from the phar <code>boo.phar</code>, the entry should be <code>phar://boo.phar/my/file.php</code>.</p>
		 * @return self
		 * @link https://php.net/manual/en/pharfileinfo.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function __construct(string $filename) {}

		/**
		 * Destructs a Phar entry object
		 * @return void
		 * @link https://php.net/manual/en/pharfileinfo.destruct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function __destruct() {}

		/**
		 * Returns the path to the file as a string
		 * <p>This method will return the file name of the referenced file.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.tostring.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Sets file-specific permission bits
		 * <p><b>PharFileInfo::chmod()</b> allows setting of the executable file permissions bit, as well as read-only bits. Writeable bits are ignored, and set at runtime based on the phar.readonly INI variable. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a <code>Phar</code> archive. Files within <code>PharData</code> archives do not have this restriction.</p>
		 * @param int $perms <p>permissions (see <code>chmod()</code>)</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/pharfileinfo.chmod.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function chmod(int $perms): void {}

		/**
		 * Compresses the current Phar entry with either zlib or bzip2 compression
		 * <p>This method compresses the file inside the Phar archive using either bzip2 compression or zlib compression. The bzip2 or zlib extension must be enabled to take advantage of this feature. In addition, if the file is already compressed, the respective extension must be enabled in order to decompress the file. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a <code>Phar</code> archive. Files within <code>PharData</code> archives do not have this restriction.</p>
		 * @param int $compression <p>Compression must be <b><code>Phar::GZ</code></b> or <b><code>Phar::BZ2</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pharfileinfo.compress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression): bool {}

		/**
		 * Decompresses the current Phar entry within the phar
		 * <p>This method decompresses the file inside the Phar archive. Depending on how the file is compressed, the bzip2 or zlib extensions must be enabled to take advantage of this feature. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a <code>Phar</code> archive. Files within <code>PharData</code> archives do not have this restriction.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/pharfileinfo.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(): bool {}

		/**
		 * Deletes the metadata of the entry
		 * <p>Deletes the metadata of the entry, if any.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if successful, <b><code>false</code></b> if the entry had no metadata. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a <code>Phar</code> archive. Files within <code>PharData</code> archives do not have this restriction.</p>
		 * @link https://php.net/manual/en/pharfileinfo.delmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::hasMetadata(), PharFileInfo::getMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0
		 */
		public function delMetadata(): bool {}

		/**
		 * Gets last access time of the file
		 * <p>Gets the last access time for the file.</p>
		 * @return int|false <p>Returns the time the file was last accessed on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getatime.php
		 * @see fileatime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getATime(): int|false {}

		/**
		 * Gets the base name of the file
		 * <p>This method returns the base name of the file, directory, or link without path info.</p><p><b>SplFileInfo::getBasename()</b> is locale aware, so for it to see the correct basename with multibyte character paths, the matching locale must be set using the <code>setlocale()</code> function.</p>
		 * @param string $suffix <p>Optional suffix to omit from the base name returned.</p>
		 * @return string <p>Returns the base name without path information.</p>
		 * @link https://php.net/manual/en/splfileinfo.getbasename.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Returns CRC32 code or throws an exception if CRC has not been verified
		 * <p>This returns the <code>crc32()</code> checksum of the file within the Phar archive.</p>
		 * @return int <p>The <code>crc32()</code> checksum of the file within the Phar archive.</p>
		 * @link https://php.net/manual/en/pharfileinfo.getcrc32.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getCRC32(): int {}

		/**
		 * Gets the inode change time
		 * <p>Returns the inode change time for the file. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>The last change time, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getctime.php
		 * @see filectime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getCTime(): int|false {}

		/**
		 * Returns the actual size of the file (with compression) inside the Phar archive
		 * <p>This returns the size of the file within the Phar archive. Uncompressed files will return the same value for getCompressedSize as they will with <code>filesize()</code></p>
		 * @return int <p>The size in bytes of the file within the Phar archive on disk.</p>
		 * @link https://php.net/manual/en/pharfileinfo.getcompressedsize.php
		 * @see PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression(), Phar::decompressFiles(), Phar::compressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getCompressedSize(): int {}

		/**
		 * Get the complete file contents of the entry
		 * <p>This function behaves like <code>file_get_contents()</code> but for Phar.</p>
		 * @return string <p>Returns the file contents.</p>
		 * @link https://php.net/manual/en/pharfileinfo.getcontent.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getContent(): string {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/splfileinfo.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Gets the filename
		 * <p>Gets the filename without any path information.</p>
		 * @return string <p>The filename.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfilename.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Gets the file group
		 * <p>Gets the file group. The group ID is returned in numerical format.</p>
		 * @return int|false <p>The group id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getgroup.php
		 * @see posix_getgrgid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getGroup(): int|false {}

		/**
		 * Gets the inode for the file
		 * <p>Gets the inode number for the filesystem object.</p>
		 * @return int|false <p>Returns the inode number for the filesystem object on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getinode.php
		 * @see fileinode()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getInode(): int|false {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Gets the last modified time
		 * <p>Returns the time when the contents of the file were changed. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>Returns the last modified time for the file, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getmtime.php
		 * @see filemtime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getMTime(): int|false {}

		/**
		 * Returns file-specific meta-data saved with a file
		 * <p>Return meta-data that was saved in the Phar archive's manifest for this file.</p>
		 * @param array $unserializeOptions
		 * @return mixed <p>any PHP variable that can be serialized and is stored as meta-data for the file, or <b><code>null</code></b> if no meta-data is stored.</p>
		 * @link https://php.net/manual/en/pharfileinfo.getmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::hasMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getMetadata(array $unserializeOptions = []): mixed {}

		/**
		 * Gets the owner of the file
		 * <p>Gets the file owner. The owner ID is returned in numerical format.</p>
		 * @return int|false <p>The owner id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getOwner(): int|false {}

		/**
		 * Gets the path without filename
		 * <p>Returns the path to the file, omitting the filename and any trailing slash.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpath.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Gets the path to the file
		 * <p>Returns the path to the file.</p>
		 * @return string <p>The path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathname.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Gets file permissions
		 * <p>Gets the file permissions for the file.</p>
		 * @return int|false <p>Returns the file permissions on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getperms.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPerms(): int|false {}

		/**
		 * Returns the Phar file entry flags
		 * <p>This returns the flags set in the manifest for a Phar. This will always return <code>0</code> in the current implementation.</p>
		 * @return int <p>The Phar flags (always <code>0</code> in the current implementation)</p>
		 * @link https://php.net/manual/en/pharfileinfo.getpharflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function getPharFlags(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Gets file size
		 * <p>Returns the filesize in bytes for the file referenced.</p>
		 * @return int|false <p>The filesize in bytes on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getsize.php
		 * @see filesize()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getSize(): int|false {}

		/**
		 * Gets file type
		 * <p>Returns the type of the file referenced.</p>
		 * @return string|false <p>A <code>string</code> representing the type of the entry. May be one of <code>file</code>, <code>link</code>, <code>dir</code>, <code>block</code>, <code>fifo</code>, <code>char</code>, <code>socket</code>, or <code>unknown</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.gettype.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getType(): string|false {}

		/**
		 * Returns the metadata of the entry
		 * <p>Returns the metadata of a file within a phar archive.</p>
		 * @return bool <p>Returns <b><code>false</code></b> if no metadata is set or is <b><code>null</code></b>, <b><code>true</code></b> if metadata is not <b><code>null</code></b></p>
		 * @link https://php.net/manual/en/pharfileinfo.hasmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::getMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * Returns whether file entry has had its CRC verified
		 * <p>This returns whether a file within a Phar archive has had its CRC verified.</p>
		 * @return bool <p><b><code>true</code></b> if the file has had its CRC verified, <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/pharfileinfo.iscrcchecked.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function isCRCChecked(): bool {}

		/**
		 * Returns whether the entry is compressed
		 * <p>This returns whether a file is compressed within a Phar archive with either Gzip or Bzip2 compression.</p>
		 * @param ?int $compression <p>One of <b><code>Phar::GZ</code></b> or <b><code>Phar::BZ2</code></b>, defaults to any compression.</p>
		 * @return bool <p><b><code>true</code></b> if the file is compressed within the Phar archive, <b><code>false</code></b> if not.</p>
		 * @link https://php.net/manual/en/pharfileinfo.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::getSupportedCompression(), Phar::decompressFiles(), Phar::compressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function isCompressed(?int $compression = null): bool {}

		/**
		 * Tells if the file is a directory
		 * <p>This method can be used to determine if the file is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if a directory, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isdir.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Tells if the file is executable
		 * <p>Checks if the file is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if executable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isexecutable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Tells if the object references a regular file
		 * <p>Checks if the file referenced by this SplFileInfo object exists and is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a link), <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isfile.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Tells if the file is a link
		 * <p>Use this method to check if the file referenced by the SplFileInfo object is a link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is a link, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.islink.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Tells if file is readable
		 * <p>Check if the file is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if readable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isreadable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Tells if the entry is writable
		 * <p>Checks if the current entry is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if writable, <b><code>false</code></b> otherwise;</p>
		 * @link https://php.net/manual/en/splfileinfo.iswritable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Sets file-specific meta-data saved with a file
		 * <p><b>PharFileInfo::setMetadata()</b> should only be used to store customized data in a file that cannot be represented with existing information stored with a file. Meta-data can significantly slow down the performance of loading a phar archive if the data is large, or if there are many files containing meta-data. It is important to note that file permissions are natively supported inside a phar; it is possible to set them with the <code>PharFileInfo::chmod()</code> method. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a <code>Phar</code> archive. Files within <code>PharData</code> archives do not have this restriction.</p><p>Some possible uses for meta-data include passing a user/group that should be set when a file is extracted from the phar to disk. Other uses could include explicitly specifying a MIME type to return. However, any useful data that describes a file, but should not be contained inside of it may be stored.</p>
		 * @param mixed $metadata <p>Any PHP variable containing information to store alongside a file</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/pharfileinfo.setmetadata.php
		 * @see PharFileInfo::hasMetadata(), PharFileInfo::getMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0
		 */
		public function setMetadata(mixed $metadata): void {}
	}

}
