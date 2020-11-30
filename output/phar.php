<?php



namespace {

	/**
	 * <p>The Phar class provides a high-level interface to accessing and creating phar archives.</p>
	 * @link http://php.net/manual/en/class.phar.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
	 */
	class Phar extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess {

		/**
		 * @var int no compression
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const NONE = 0;

		/**
		 * @var int bitmask that can be used with file flags to determine if any compression is present
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const COMPRESSED = 61440;

		/**
		 * @var int zlib (gzip) compression
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const GZ = 4096;

		/**
		 * @var int bzip2 compression
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const BZ2 = 8192;

		/**
		 * @var int phar file format
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const PHAR = 1;

		/**
		 * @var int tar file format
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const TAR = 2;

		/**
		 * @var int zip file format
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const ZIP = 3;

		/**
		 * @var int signature with md5 hash algorithm
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const MD5 = 1;

		/**
		 * @var int signature with sha1 hash algorithm
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const SHA1 = 2;

		/**
		 * @var int signature with sha256 hash algorithm (requires hash extension)
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const SHA256 = 3;

		/**
		 * @var int signature with sha512 hash algorithm (requires hash extension)
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const SHA512 = 4;

		/**
		 * @var int signature with OpenSSL public/private key pair. This is a true, asymmetric key signature.
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const OPENSSL = 16;

		/**
		 * @var int used to instruct the mimeoverrides parameter of <code>Phar::webPhar()</code> that the extension should be parsed as a PHP file
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const PHP = 0;

		/**
		 * @var int used to instruct the mimeoverrides parameter of <code>Phar::webPhar()</code> that the extension should be parsed as a PHP source file through <code>highlight_file()</code>
		 * @link http://php.net/manual/en/phar.constants.php
		 */
		const PHPS = 1;

		/**
		 * Construct a Phar archive object
		 * @param string $fname <p>Path to an existing Phar archive or to-be-created archive. The file name's extension must contain .phar.</p>
		 * @param int $flags <p>Flags to pass to parent class RecursiveDirectoryIterator.</p>
		 * @param string $alias <p>Alias with which this Phar archive should be referred to in calls to stream functionality.</p>
		 * @return self
		 * @link http://php.net/manual/en/phar.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function __construct(string $fname, int $flags = NULL, string $alias = NULL) {}

		/**
		 * Add an empty directory to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>With this method, an empty directory is created with path <i>dirname</i>. This method is similar to <code>ZipArchive::addEmptyDir()</code>.</p>
		 * @param string $dirname <p>The name of the empty directory to create in the phar archive</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link http://php.net/manual/en/phar.addemptydir.php
		 * @see PharData::addEmptyDir(), Phar::addFile(), Phar::addFromString()
		 * @since Unknown
		 */
		public function addEmptyDir(string $dirname): void {}

		/**
		 * Add a file from the filesystem to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>With this method, any file or URL can be added to the phar archive. If the optional second parameter <i>localname</i> is specified, the file will be stored in the archive with that name, otherwise the <i>file</i> parameter is used as the path to store within the archive. URLs must have a localname or an exception is thrown. This method is similar to <code>ZipArchive::addFile()</code>.</p>
		 * @param string $file <p>Full or relative path to a file on disk to be added to the phar archive.</p>
		 * @param string $localname <p>Path that the file will be stored in the archive.</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link http://php.net/manual/en/phar.addfile.php
		 * @see Phar::offsetSet(), PharData::addFile(), Phar::addFromString(), Phar::addEmptyDir()
		 * @since Unknown
		 */
		public function addFile(string $file, string $localname = NULL): void {}

		/**
		 * Add a file from a string to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>With this method, any string can be added to the phar archive. The file will be stored in the archive with <i>localname</i> as its path. This method is similar to <code>ZipArchive::addFromString()</code>.</p>
		 * @param string $localname <p>Path that the file will be stored in the archive.</p>
		 * @param string $contents <p>The file contents to store</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link http://php.net/manual/en/phar.addfromstring.php
		 * @see Phar::offsetSet(), PharData::addFromString(), Phar::addFile(), Phar::addEmptyDir()
		 * @since Unknown
		 */
		public function addFromString(string $localname, string $contents): void {}

		/**
		 * Returns the api version
		 * <p>Return the API version of the phar file format that will be used when creating phars. The Phar extension supports reading API version 1.0.0 or newer. API version 1.1.0 is required for SHA-256 and SHA-512 hash, and API version 1.1.1 is required to store empty directories.</p>
		 * @return string <p>The API version string as in <i>"1.0.0"</i>.</p>
		 * @link http://php.net/manual/en/phar.apiversion.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function apiVersion(): string {}

		/**
		 * Construct a phar archive from the files within a directory
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Populate a phar archive from directory contents. The optional second parameter is a regular expression (pcre) that is used to exclude files. Any filename that matches the regular expression will be included, all others will be excluded. For more fine-grained control, use <code>Phar::buildFromIterator()</code>.</p>
		 * @param string $base_dir <p>The full or relative path to the directory that contains all files to add to the archive.</p>
		 * @param string $regex <p>An optional pcre regular expression that is used to filter the list of files. Only file paths matching the regular expression will be included in the archive.</p>
		 * @return array <p><b>Phar::buildFromDirectory()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link http://php.net/manual/en/phar.buildfromdirectory.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromDirectory(string $base_dir, string $regex = NULL): array {}

		/**
		 * Construct a phar archive from an iterator
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Populate a phar archive from an iterator. Two styles of iterators are supported, iterators that map the filename within the phar to the name of a file on disk, and iterators like DirectoryIterator that return SplFileInfo objects. For iterators that return SplFileInfo objects, the second parameter is required.</p>
		 * @param \Iterator $iter <p>Any iterator that either associatively maps phar file to location or returns SplFileInfo objects</p>
		 * @param string $base_directory <p>For iterators that return SplFileInfo objects, the portion of each file's full path to remove when adding to the phar archive</p>
		 * @return array <p><b>Phar::buildFromIterator()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link http://php.net/manual/en/phar.buildfromiterator.php
		 * @see Phar::buildFromDirectory()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromIterator(\Iterator $iter, string $base_directory = NULL): array {}

		/**
		 * Returns whether phar extension supports compression using either zlib or bzip2
		 * <p>This should be used to test whether compression is possible prior to loading a phar archive containing compressed files.</p>
		 * @param int $type <p>Either <i>Phar::GZ</i> or <i>Phar::BZ2</i> can be used to test whether compression is possible with a specific compression algorithm (zlib or bzip2).</p>
		 * @return bool <p><b><code>TRUE</code></b> if compression/decompression is available, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.cancompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canCompress(int $type = 0): bool {}

		/**
		 * Returns whether phar extension supports writing and creating phars
		 * <p>This static method determines whether write access has been disabled in the system php.ini via the phar.readonly ini variable.</p>
		 * @return bool <p><b><code>TRUE</code></b> if write access is enabled, <b><code>FALSE</code></b> if it is disabled.</p>
		 * @link http://php.net/manual/en/phar.canwrite.php
		 * @see Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canWrite(): bool {}

		/**
		 * Compresses the entire Phar archive using Gzip or Bzip2 compression
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based and phar-based phar archives, this method compresses the entire archive using gzip compression or bzip2 compression. The resulting file can be processed with the gunzip command/bunzip command, or accessed directly and transparently with the Phar extension.</p><p>For Zip-based phar archives, this method fails with an exception. The zlib extension must be enabled to compress with gzip compression, the bzip2 extension must be enabled in order to compress with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p><p>In addition, this method automatically renames the archive, appending <i>.gz</i>, <i>.bz2</i> or removing the extension if passed <i>Phar::NONE</i> to remove compression. Alternatively, a file extension may be specified with the second parameter.</p>
		 * @param int $compression <p>Compression must be one of <i>Phar::GZ</i>, <i>Phar::BZ2</i> to add compression, or <i>Phar::NONE</i> to remove compression.</p>
		 * @param string $extension <p>By default, the extension is <i>.phar.gz</i> or <i>.phar.bz2</i> for compressing phar archives, and <i>.phar.tar.gz</i> or <i>.phar.tar.bz2</i> for compressing tar archives. For decompressing, the default file extensions are <i>.phar</i> and <i>.phar.tar</i>.</p>
		 * @return object <p>Returns a Phar object.</p>
		 * @link http://php.net/manual/en/phar.compress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::decompress(), Phar::getSupportedCompression(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression, string $extension = NULL): object {}

		/**
		 * Compresses all files in the current Phar archive using Bzip2 compression
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>Phar::compress()</code>, <code>Phar::decompress()</code>, <code>Phar::compressFiles()</code> and <code>Phar::decompressFiles()</code>.</p><p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method compresses all files in the Phar archive using bzip2 compression. The bzip2 extension must be enabled to take advantage of this feature. In addition, if any files are already compressed using gzip compression, the zlib extension must be enabled in order to decompress the files prior to re-compressing with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.compressallfilesbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesBZIP2(): bool {}

		/**
		 * Compresses all files in the current Phar archive using Gzip compression
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>Phar::compress()</code>, <code>Phar::decompress()</code>, <code>Phar::compressFiles()</code> and <code>Phar::decompressFiles()</code>.</p><p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based phar archives, this method compresses the entire archive using gzip compression. The resulting file can be processed with the gunzip command, or accessed directly and transparently with the Phar extension.</p><p>For Zip-based and phar-based phar archives, this method compresses all files in the Phar archive using gzip compression. The zlib extension must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2 compression, the bzip2 extension must be enabled in order to decompress the files prior to re-compressing with gzip compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.compressallfilesgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesGZ(): bool {}

		/**
		 * Compresses all files in the current Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based phar archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use <code>Phar::compress()</code> to compress an entire tar-based phar archive.</p><p>For Zip-based and phar-based phar archives, this method compresses all files in the Phar archive using the specified compression. The zlib or bzip2 extensions must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2/zlib compression, the respective extension must be enabled in order to decompress the files prior to re-compressing. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @param int $compression <p>Compression must be one of <i>Phar::GZ</i>, <i>Phar::BZ2</i> to add compression, or <i>Phar::NONE</i> to remove compression.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.compressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::compress(), Phar::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compressFiles(int $compression): void {}

		/**
		 * Convert a phar archive to a non-executable tar or zip file
		 * <p>This method is used to convert an executable phar archive to either a tar or zip file. To make the tar or zip non-executable, the phar stub and phar alias files are removed from the newly created archive.</p><p>If no changes are specified, this method throws a BadMethodCallException if the archive is in phar file format. For archives in tar or zip file format, this method converts the archive to a non-executable archive.</p><p>If successful, the method creates a new archive on disk and returns a PharData object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param int $format <p>This should be one of <i>Phar::TAR</i> or <i>Phar::ZIP</i>. If set to <b><code>NULL</code></b>, the existing file format will be preserved.</p>
		 * @param int $compression <p>This should be one of <i>Phar::NONE</i> for no whole-archive compression, <i>Phar::GZ</i> for zlib-based compression, and <i>Phar::BZ2</i> for bzip-based compression.</p>
		 * @param string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that <i>.phar</i> cannot be used anywhere in the filename for a non-executable tar or zip archive.</p> <p>If converting to a tar-based phar archive, the default extensions are <i>.tar</i>, <i>.tar.gz</i>, and <i>.tar.bz2</i> depending on specified compression. For zip-based archives, the default extension is <i>.zip</i>.</p>
		 * @return PharData <p>The method returns a PharData object on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/phar.converttodata.php
		 * @see Phar::convertToExecutable(), PharData::convertToExecutable(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToData(int $format = 9021976, int $compression = 9021976, string $extension = NULL): \PharData {}

		/**
		 * Convert a phar archive to another executable phar archive file format
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method is used to convert a phar archive to another file format. For instance, it can be used to create a tar-based executable phar archive from a zip-based executable phar archive, or from an executable phar archive in the phar file format. In addition, it can be used to apply whole-archive compression to a tar or phar-based archive.</p><p>If no changes are specified, this method throws a BadMethodCallException.</p><p>If successful, the method creates a new archive on disk and returns a Phar object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param int $format <p>This should be one of <i>Phar::PHAR</i>, <i>Phar::TAR</i>, or <i>Phar::ZIP</i>. If set to <b><code>NULL</code></b>, the existing file format will be preserved.</p>
		 * @param int $compression <p>This should be one of <i>Phar::NONE</i> for no whole-archive compression, <i>Phar::GZ</i> for zlib-based compression, and <i>Phar::BZ2</i> for bzip-based compression.</p>
		 * @param string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that all zip- and tar-based phar archives must contain <i>.phar</i> in their file extension in order to be processed as a phar archive.</p> <p>If converting to a phar-based archive, the default extensions are <i>.phar</i>, <i>.phar.gz</i>, or <i>.phar.bz2</i> depending on the specified compression. For tar-based phar archives, the default extensions are <i>.phar.tar</i>, <i>.phar.tar.gz</i>, and <i>.phar.tar.bz2</i>. For zip-based phar archives, the default extension is <i>.phar.zip</i>.</p>
		 * @return Phar <p>The method returns a Phar object on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/phar.converttoexecutable.php
		 * @see Phar::convertToData(), PharData::convertToExecutable(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToExecutable(int $format = 9021976, int $compression = 9021976, string $extension = NULL): \Phar {}

		/**
		 * Copy a file internal to the phar archive to another new file within the phar
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Copy a file internal to the phar archive to another new file within the phar. This is an object-oriented alternative to using <code>copy()</code> with the phar stream wrapper.</p>
		 * @param string $oldfile
		 * @param string $newfile
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is safer to encase method call in a try/catch block and assume success if no exception is thrown.</p>
		 * @link http://php.net/manual/en/phar.copy.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function copy(string $oldfile, string $newfile): bool {}

		/**
		 * Returns the number of entries (files) in the Phar archive
		 * @return int <p>The number of files contained within this phar, or <i>0</i> (the number zero) if none.</p>
		 * @link http://php.net/manual/en/phar.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function count(): int {}

		/**
		 * Create a phar-file format specific stub
		 * <p>This method is intended for creation of phar-file format-specific stubs, and is not intended for use with tar- or zip-based phar archives.</p><p>Phar archives contain a bootstrap loader, or <i>stub</i> written in PHP that is executed when the archive is executed in PHP either via include:</p><p>This method provides a simple and easy method to create a stub that will run a startup file from the phar archive. In addition, different files can be specified for running the phar archive from the command line versus through a web server. The loader stub also calls <code>Phar::interceptFileFuncs()</code> to allow easy bundling of a PHP application that accesses the file system. If the phar extension is not present, the loader stub will extract the phar archive to a temporary directory and then operate on the files. A shutdown function erases the temporary files on exit.</p>
		 * @param string $indexfile
		 * @param string $webindexfile
		 * @return string <p>Returns a string containing the contents of a customized bootstrap loader (stub) that allows the created Phar archive to work with or without the Phar extension enabled.</p>
		 * @link http://php.net/manual/en/phar.createdefaultstub.php
		 * @see Phar::setStub(), Phar::getStub()
		 * @since Unknown
		 */
		final public static function createDefaultStub(string $indexfile = NULL, string $webindexfile = NULL): string {}

		/**
		 * Decompresses the entire Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based and phar-based phar archives, this method decompresses the entire archive.</p><p>For Zip-based phar archives, this method fails with an exception. The zlib extension must be enabled to decompress an archive compressed with gzip compression, and the bzip2 extension must be enabled in order to decompress an archive compressed with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p><p>In addition, this method automatically changes the file extension of the archive, <i>.phar</i> by default for phar archives, or <i>.phar.tar</i> for tar-based phar archives. Alternatively, a file extension may be specified with the second parameter.</p>
		 * @param string $extension <p>For decompressing, the default file extensions are <i>.phar</i> and <i>.phar.tar</i>. Use this parameter to specify another file extension. Be aware that all executable phar archives must contain <i>.phar</i> in their filename.</p>
		 * @return object <p>A Phar object is returned.</p>
		 * @link http://php.net/manual/en/phar.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compress(), Phar::getSupportedCompression(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(string $extension = NULL): object {}

		/**
		 * Decompresses all files in the current Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based phar archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use <code>Phar::compress()</code> to compress an entire tar-based phar archive.</p><p>For Zip-based and phar-based phar archives, this method decompresses all files in the Phar archive. The zlib or bzip2 extensions must be enabled to take advantage of this feature if any files are compressed using bzip2/zlib compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.decompressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::getSupportedCompression(), Phar::compress(), Phar::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompressFiles(): bool {}

		/**
		 * Deletes the global metadata of the phar
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Deletes the global metadata of the phar</p>
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link http://php.net/manual/en/phar.delmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function delMetadata(): bool {}

		/**
		 * Delete a file within a phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Delete a file within an archive. This is the functional equivalent of calling <code>unlink()</code> on the stream wrapper equivalent, as shown in the example below.</p>
		 * @param string $entry <p>Path within an archive to the file to delete.</p>
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link http://php.net/manual/en/phar.delete.php
		 * @see PharData::delete(), Phar::unlinkArchive()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function delete(string $entry): bool {}

		/**
		 * Extract the contents of a phar archive to a directory
		 * <p>Extract all files within a phar archive to disk. Extracted files and directories preserve permissions as stored in the archive. The optional parameters allow optional control over which files are extracted, and whether existing files on disk can be overwritten. The second parameter <code>files</code> can be either the name of a file or directory to extract, or an array of names of files and directories to extract. By default, this method will not overwrite existing files, the third parameter can be set to true to enable overwriting of files. This method is similar to <code>ZipArchive::extractTo()</code>.</p>
		 * @param string $pathto <p>Path to extract the given <code>files</code> to</p>
		 * @param string|array $files <p>The name of a file or directory to extract, or an array of files/directories to extract, <b><code>NULL</code></b> to skip this param</p>
		 * @param bool $overwrite <p>Set to <b><code>TRUE</code></b> to enable overwriting existing files</p>
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link http://php.net/manual/en/phar.extractto.php
		 * @see PharData::extractTo()
		 * @since Unknown
		 */
		public function extractTo(string $pathto, $files = NULL, bool $overwrite = FALSE): bool {}

		/**
		 * Get the alias for Phar
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>Returns the alias or <b><code>NULL</code></b> if there's no alias.</p>
		 * @link http://php.net/manual/en/phar.getalias.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
		 */
		public function getAlias(): string {}

		/**
		 * Returns phar archive meta-data
		 * <p>Retrieve archive meta-data. Meta-data can be any PHP variable that can be serialized.</p>
		 * @return mixed <p>any PHP variable that can be serialized and is stored as meta-data for the Phar archive, or <b><code>NULL</code></b> if no meta-data is stored.</p>
		 * @link http://php.net/manual/en/phar.getmetadata.php
		 * @see Phar::setMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getMetadata() {}

		/**
		 * Return whether phar was modified
		 * <p>This method can be used to determine whether a phar has either had an internal file deleted, or contents of a file changed in some way.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the phar has been modified since opened, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.getmodified.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getModified(): bool {}

		/**
		 * Get the real path to the Phar archive on disk
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/phar.getpath.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
		 * <p>Returns the verification signature of a phar archive in a hexadecimal string.</p>
		 * @return array <p>Array with the opened archive's signature in <i>hash</i> key and <i>MD5</i>, <i>SHA-1</i>, <i>SHA-256</i>, <i>SHA-512</i>, or <i>OpenSSL</i> in <i>hash_type</i>. This signature is a hash calculated on the entire phar's contents, and may be used to verify the integrity of the archive. A valid signature is absolutely required of all executable phar archives if the phar.require_hash INI variable is set to true.</p>
		 * @link http://php.net/manual/en/phar.getsignature.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getSignature(): array {}

		/**
		 * Return the PHP loader or bootstrap stub of a Phar archive
		 * <p>Phar archives contain a bootstrap loader, or <i>stub</i> written in PHP that is executed when the archive is executed in PHP either via include:</p>
		 * @return string <p>Returns a string containing the contents of the bootstrap loader (stub) of the current Phar archive.</p>
		 * @link http://php.net/manual/en/phar.getstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getStub(): string {}

		/**
		 * Return array of supported compression algorithms
		 * @return array <p>Returns an array containing any of <i>Phar::GZ</i> or <i>Phar::BZ2</i>, depending on the availability of the zlib extension or the bz2 extension.</p>
		 * @link http://php.net/manual/en/phar.getsupportedcompression.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::compress(), Phar::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function getSupportedCompression(): array {}

		/**
		 * Return array of supported signature types
		 * <p>Return array of supported signature types</p>
		 * @return array <p>Returns an array containing any of <i>MD5</i>, <i>SHA-1</i>, <i>SHA-256</i>, <i>SHA-512</i>, or <i>OpenSSL</i>.</p>
		 * @link http://php.net/manual/en/phar.getsupportedsignatures.php
		 * @see Phar::getSignature(), Phar::setSignatureAlgorithm()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		final public static function getSupportedSignatures(): array {}

		/**
		 * Return version info of Phar archive
		 * <p>Returns the API version of an opened Phar archive.</p>
		 * @return string <p>The opened archive's API version. This is not to be confused with the API version that the loaded phar extension will use to create new phars. Each Phar archive has the API version hard-coded into its manifest. See Phar file format documentation for more information.</p>
		 * @link http://php.net/manual/en/phar.getversion.php
		 * @see Phar::apiVersion()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getVersion(): string {}

		/**
		 * Returns whether phar has global meta-data
		 * <p>Returns whether phar has global meta-data set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if meta-data has been set, and <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.hasmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
		 * <p>instructs phar to intercept <code>fopen()</code>, <code>readfile()</code>, <code>file_get_contents()</code>, <code>opendir()</code>, and all of the stat-related functions. If any of these functions is called from within a phar archive with a relative path, the call is modified to access a file within the phar archive. Absolute paths are assumed to be attempts to load external files from the filesystem.</p><p>This function makes it possible to run PHP applications designed to run off of a hard disk as a phar application.</p>
		 * @return void
		 * @link http://php.net/manual/en/phar.interceptfilefuncs.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function interceptFileFuncs(): void {}

		/**
		 * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
		 * <p>This method can be used to determine whether a Phar will save changes to disk immediately, or whether a call to <code>Phar::stopBuffering()</code> is needed to enable saving changes.</p><p>Phar write buffering is per-archive, buffering active for the <i>foo.phar</i> Phar archive does not affect changes to the <i>bar.phar</i> Phar archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the write operations are being buffer, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/phar.isbuffering.php
		 * @see Phar::startBuffering(), Phar::stopBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isBuffering(): bool {}

		/**
		 * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on). Zip-based phar archives cannot be compressed as a file, and so this method will always return <b><code>FALSE</code></b> if a zip-based phar archive is queried.</p>
		 * @return mixed <p><i>Phar::GZ</i>, <i>Phar::BZ2</i> or <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/phar.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isCompressed() {}

		/**
		 * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
		 * @param int $format <p>Either <i>Phar::PHAR</i>, <i>Phar::TAR</i>, or <i>Phar::ZIP</i> to test for the format of the archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the phar archive matches the file format requested by the parameter</p>
		 * @link http://php.net/manual/en/phar.isfileformat.php
		 * @see Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isFileFormat(int $format): bool {}

		/**
		 * Returns whether the given filename is a valid phar filename
		 * <p>Returns whether the given filename is a valid phar filename that will be recognized as a phar archive by the phar extension. This can be used to test a name without having to instantiate a phar archive and catch the inevitable Exception that will be thrown if an invalid name is specified.</p>
		 * @param string $filename <p>The name or full path to a phar archive not yet created</p>
		 * @param bool $executable <p>This parameter determines whether the filename should be treated as a phar executable archive, or a data non-executable archive</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the filename is valid, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.isvalidpharfilename.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function isValidPharFilename(string $filename, bool $executable = TRUE): bool {}

		/**
		 * Returns true if the phar archive can be modified
		 * <p>This method returns <b><code>TRUE</code></b> if <i>phar.readonly</i> is <i>0</i>, and the actual phar archive on disk is not read-only.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the phar archive can be modified</p>
		 * @link http://php.net/manual/en/phar.iswritable.php
		 * @see Phar::canWrite(), PharData::isWritable()
		 * @since Unknown
		 */
		public function isWritable(): bool {}

		/**
		 * Loads any phar archive with an alias
		 * <p>This can be used to read the contents of an external Phar archive. This is most useful for assigning an alias to a phar so that subsequent references to the phar can use the shorter alias, or for loading Phar archives that only contain data and are not intended for execution/inclusion in PHP scripts.</p>
		 * @param string $filename <p>the full or relative path to the phar archive to open</p>
		 * @param string $alias <p>The alias that may be used to refer to the phar archive. Note that many phar archives specify an explicit alias inside the phar archive, and a PharException will be thrown if a new alias is specified in this case.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.loadphar.php
		 * @see Phar::mapPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function loadPhar(string $filename, string $alias = NULL): bool {}

		/**
		 * Reads the currently executed file (a phar) and registers its manifest
		 * <p>This static method can only be used inside a Phar archive's loader stub in order to initialize the phar when it is directly executed, or when it is included in another script.</p>
		 * @param string $alias <p>The alias that can be used in <i>phar://</i> URLs to refer to this archive, rather than its full path.</p>
		 * @param int $dataoffset <p>Unused variable, here for compatibility with PEAR's PHP_Archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.mapphar.php
		 * @see Phar::loadPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function mapPhar(string $alias = NULL, int $dataoffset = 0): bool {}

		/**
		 * Mount an external path or file to a virtual location within the phar archive
		 * <p>Much like the unix file system concept of mounting external devices to paths within the directory tree, <b>Phar::mount()</b> allows referring to external files and directories as if they were inside of an archive. This allows powerful abstraction such as referring to external configuration files as if they were inside the archive.</p>
		 * @param string $pharpath <p>The internal path within the phar archive to use as the mounted path location. This must be a relative path within the phar archive, and must not already exist.</p>
		 * @param string $externalpath <p>A path or URL to an external file or directory to mount within the phar archive</p>
		 * @return void <p>No return. PharException is thrown on failure.</p>
		 * @link http://php.net/manual/en/phar.mount.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function mount(string $pharpath, string $externalpath): void {}

		/**
		 * Defines a list of up to 4 $_SERVER variables that should be modified for execution
		 * <p><b>Phar::mungServer()</b> should only be called within the stub of a phar archive.</p><p>Defines a list of up to 4 $_SERVER variables that should be modified for execution. Variables that can be modified to remove traces of phar execution are <i>REQUEST_URI</i>, <i>PHP_SELF</i>, <i>SCRIPT_NAME</i> and <i>SCRIPT_FILENAME</i>.</p><p>On its own, this method does nothing. Only when combined with <code>Phar::webPhar()</code> does it take effect, and only when the requested file is a PHP file to be parsed. Note that the <i>PATH_INFO</i> and <i>PATH_TRANSLATED</i> variables are always modified.</p><p>The original values of variables that are modified are stored in the SERVER array with <i>PHAR_</i> prepended, so for instance <i>SCRIPT_NAME</i> would be saved as <i>PHAR_SCRIPT_NAME</i>.</p>
		 * @param array $munglist <p>an array containing as string indices any of <i>REQUEST_URI</i>, <i>PHP_SELF</i>, <i>SCRIPT_NAME</i> and <i>SCRIPT_FILENAME</i>. Other values trigger an exception, and <b>Phar::mungServer()</b> is case-sensitive.</p>
		 * @return void <p>No return.</p>
		 * @link http://php.net/manual/en/phar.mungserver.php
		 * @see Phar::webPhar(), Phar::setStub()
		 * @since Unknown
		 */
		final public static function mungServer(array $munglist): void {}

		/**
		 * Determines whether a file exists in the phar
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets.</p><p>offsetExists() is called whenever <code>isset()</code> is called.</p>
		 * @param string $offset <p>The filename (relative path) to look for in a Phar.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the file exists within the phar, or <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.offsetexists.php
		 * @see Phar::offsetGet(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetExists(string $offset): bool {}

		/**
		 * Gets a PharFileInfo object for a specific file
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. <b>Phar::offsetGet()</b> is used for retrieving files from a Phar archive.</p>
		 * @param string $offset <p>The filename (relative path) to look for in a Phar.</p>
		 * @return int <p>A PharFileInfo object is returned that can be used to iterate over a file's contents or to retrieve information about the current file.</p>
		 * @link http://php.net/manual/en/phar.offsetget.php
		 * @see Phar::offsetExists(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetGet(string $offset): int {}

		/**
		 * Set the contents of an internal file to those of an external file
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. offsetSet is used for modifying an existing file, or adding a new file to a Phar archive.</p>
		 * @param string $offset <p>The filename (relative path) to modify in a Phar.</p>
		 * @param string $value <p>Content of the file.</p>
		 * @return void <p>No return values.</p>
		 * @link http://php.net/manual/en/phar.offsetset.php
		 * @see Phar::offsetExists(), Phar::offsetGet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetSet(string $offset, string $value): void {}

		/**
		 * Remove a file from a phar
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. offsetUnset is used for deleting an existing file, and is called by the <code>unset()</code> language construct.</p>
		 * @param string $offset <p>The filename (relative path) to modify in a Phar.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.offsetunset.php
		 * @see Phar::offsetExists(), Phar::offsetGet(), Phar::offsetSet(), Phar::unlinkArchive(), Phar::delete()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetUnset(string $offset): bool {}

		/**
		 * Returns the full path on disk or full phar URL to the currently executing Phar archive
		 * <p>Returns the full path to the running phar archive. This is intended for use much like the <i>__FILE__</i> magic constant, and only has effect inside an executing phar archive.</p><p>Inside the stub of an archive, <b>Phar::running()</b> returns <i>""</i>. Simply use <b><code>__FILE__</code></b> to access the current running phar inside a stub.</p>
		 * @param bool $retphar <p>If <b><code>FALSE</code></b>, the full path on disk to the phar archive is returned. If <b><code>TRUE</code></b>, a full phar URL is returned.</p>
		 * @return string <p>Returns the filename if valid, empty string otherwise.</p>
		 * @link http://php.net/manual/en/phar.running.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function running(bool $retphar = TRUE): string {}

		/**
		 * Set the alias for the Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Set the alias for the Phar archive, and write it as the permanent alias for this phar archive. An alias can be used internally to a phar archive to ensure that use of the <i>phar</i> stream wrapper to access internal files always works regardless of the location of the phar archive on the filesystem. Another alternative is to rely upon Phar's interception of <code>include</code> or to use <code>Phar::interceptFileFuncs()</code> and use relative paths.</p>
		 * @param string $alias <p>A shorthand string that this archive can be referred to in <i>phar</i> stream wrapper access.</p>
		 * @return bool
		 * @link http://php.net/manual/en/phar.setalias.php
		 * @see Phar::__construct(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
		 */
		public function setAlias(string $alias): bool {}

		/**
		 * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method is a convenience method that combines the functionality of <code>Phar::createDefaultStub()</code> and <code>Phar::setStub()</code>.</p>
		 * @param string $index <p>Relative path within the phar archive to run if accessed on the command-line</p>
		 * @param string $webindex <p>Relative path within the phar archive to run if accessed through a web browser</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.setdefaultstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since Unknown
		 */
		public function setDefaultStub(string $index = NULL, string $webindex = NULL): bool {}

		/**
		 * Sets phar archive meta-data
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p><b>Phar::setMetadata()</b> should be used to store customized data that describes something about the phar archive as a complete entity. <code>PharFileInfo::setMetadata()</code> should be used for file-specific meta-data. Meta-data can slow down the performance of loading a phar archive if the data is large.</p><p>Some possible uses for meta-data include specifying which file within the archive should be used to bootstrap the archive, or the location of a file manifest like PEAR's package.xml file. However, any useful data that describes the phar archive may be stored.</p>
		 * @param mixed $metadata <p>Any PHP variable containing information to store that describes the phar archive</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phardata.setmetadata.php
		 * @see Phar::getMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setMetadata($metadata): void {}

		/**
		 * Set the signature algorithm for a phar and apply it
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Set the signature algorithm for a phar and apply it. The signature algorithm must be one of <i>Phar::MD5</i>, <i>Phar::SHA1</i>, <i>Phar::SHA256</i>, <i>Phar::SHA512</i>, or <i>Phar::PGP</i> (pgp not yet supported and falls back to SHA-1).</p>
		 * @param int $sigtype <p>One of <i>Phar::MD5</i>, <i>Phar::SHA1</i>, <i>Phar::SHA256</i>, <i>Phar::SHA512</i>, or <i>Phar::PGP</i></p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phardata.setsignaturealgorithm.php
		 * @see Phar::getSupportedSignatures(), Phar::getSignature()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		public function setSignatureAlgorithm(int $sigtype): void {}

		/**
		 * Used to set the PHP loader or bootstrap stub of a Phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method is used to add a PHP bootstrap loader stub to a new Phar archive, or to replace the loader stub in an existing Phar archive.</p><p>The loader stub for a Phar archive is used whenever an archive is included directly as in this example:</p><p>The loader is not accessed when including a file through the <i>phar</i> stream wrapper like so:</p>
		 * @param string $stub <p>A string or an open stream handle to use as the executable stub for this phar archive.</p>
		 * @param int $len
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.setstub.php
		 * @see Phar::getStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setStub(string $stub, int $len = -1): bool {}

		/**
		 * Start buffering Phar write operations, do not modify the Phar object on disk
		 * <p>Although technically unnecessary, the <b>Phar::startBuffering()</b> method can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.</p><p>However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. the <b>Phar::startBuffering()</b>/<code>Phar::stopBuffering()</code> pair of methods is provided for this purpose.</p><p>Phar write buffering is per-archive, buffering active for the <i>foo.phar</i> Phar archive does not affect changes to the <i>bar.phar</i> Phar archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.startbuffering.php
		 * @see Phar::stopBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function startBuffering(): void {}

		/**
		 * Stop buffering write requests to the Phar archive, and save changes to disk
		 * <p><b>Phar::stopBuffering()</b> is used in conjunction with the <code>Phar::startBuffering()</code> method. <code>Phar::startBuffering()</code> can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.</p><p>However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. The <code>Phar::startBuffering()</code>/<b>Phar::stopBuffering()</b> pair of methods is provided for this purpose.</p><p>Phar write buffering is per-archive, buffering active for the <i>foo.phar</i> Phar archive does not affect changes to the <i>bar.phar</i> Phar archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.stopbuffering.php
		 * @see Phar::startBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function stopBuffering(): void {}

		/**
		 * Uncompresses all files in the current Phar archive
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>Phar::compress()</code>, <code>Phar::decompress()</code>, <code>Phar::compressFiles()</code> and <code>Phar::decompressFiles()</code>.</p><p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method decompresses all files in the Phar archive. If any files are already compressed using gzip compression, the zlib extension must be enabled in order to decompress the files, and any files compressed using bzip2 compression require the bzip2 extension to decompress the files. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.uncompressallfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression()
		 * @since PECL phar < 2.0.0
		 */
		public function uncompressAllFiles(): bool {}

		/**
		 * Completely remove a phar archive from disk and from memory
		 * <p>Removes a phar archive from disk and memory.</p>
		 * @param string $archive <p>The path on disk to the phar archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.unlinkarchive.php
		 * @see Phar::delete(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function unlinkArchive(string $archive): bool {}

		/**
		 * mapPhar for web-based phars. front controller for web applications
		 * <p><code>Phar::mapPhar()</code> for web-based phars. This method parses $_SERVER['REQUEST_URI'] and routes a request from a web browser to an internal file within the phar archive. In essence, it simulates a web server, routing requests to the correct file, echoing the correct headers and parsing PHP files as needed. This powerful method is part of what makes it easy to convert an existing PHP application into a phar archive. Combined with <code>Phar::mungServer()</code> and <code>Phar::interceptFileFuncs()</code>, any web application can be used unmodified from a phar archive.</p><p><b>Phar::webPhar()</b> should only be called from the stub of a phar archive (see here for more information on what a stub is).</p>
		 * @param string $alias <p>The alias that can be used in <i>phar://</i> URLs to refer to this archive, rather than its full path.</p>
		 * @param string $index <p>The location within the phar of the directory index.</p>
		 * @param string $f404 <p>The location of the script to run when a file is not found. This script should output the proper HTTP 404 headers.</p>
		 * @param array $mimetypes <p>An array mapping additional file extensions to MIME type. If the default mapping is sufficient, pass an empty array. By default, these extensions are mapped to these MIME types:</p> <code> &lt;&#63;php<br>$mimes&nbsp;=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;'phps'&nbsp;=&gt;&nbsp;Phar::PHPS,&nbsp;//&nbsp;pass&nbsp;to&nbsp;highlight_file()<br>&nbsp;&nbsp;&nbsp;&nbsp;'c'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'cc'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'cpp'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'c++'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'dtd'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'h'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'log'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'rng'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'txt'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xsd'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'php'&nbsp;=&gt;&nbsp;Phar::PHP,&nbsp;//&nbsp;parse&nbsp;as&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;'inc'&nbsp;=&gt;&nbsp;Phar::PHP,&nbsp;//&nbsp;parse&nbsp;as&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;'avi'&nbsp;=&gt;&nbsp;'video/avi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'bmp'&nbsp;=&gt;&nbsp;'image/bmp',<br>&nbsp;&nbsp;&nbsp;&nbsp;'css'&nbsp;=&gt;&nbsp;'text/css',<br>&nbsp;&nbsp;&nbsp;&nbsp;'gif'&nbsp;=&gt;&nbsp;'image/gif',<br>&nbsp;&nbsp;&nbsp;&nbsp;'htm'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'html'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'htmls'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'ico'&nbsp;=&gt;&nbsp;'image/x-ico',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpe'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpg'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpeg'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'js'&nbsp;=&gt;&nbsp;'application/x-javascript',<br>&nbsp;&nbsp;&nbsp;&nbsp;'midi'&nbsp;=&gt;&nbsp;'audio/midi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mid'&nbsp;=&gt;&nbsp;'audio/midi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mod'&nbsp;=&gt;&nbsp;'audio/mod',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mov'&nbsp;=&gt;&nbsp;'movie/quicktime',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mp3'&nbsp;=&gt;&nbsp;'audio/mp3',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mpg'&nbsp;=&gt;&nbsp;'video/mpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mpeg'&nbsp;=&gt;&nbsp;'video/mpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'pdf'&nbsp;=&gt;&nbsp;'application/pdf',<br>&nbsp;&nbsp;&nbsp;&nbsp;'png'&nbsp;=&gt;&nbsp;'image/png',<br>&nbsp;&nbsp;&nbsp;&nbsp;'swf'&nbsp;=&gt;&nbsp;'application/shockwave-flash',<br>&nbsp;&nbsp;&nbsp;&nbsp;'tif'&nbsp;=&gt;&nbsp;'image/tiff',<br>&nbsp;&nbsp;&nbsp;&nbsp;'tiff'&nbsp;=&gt;&nbsp;'image/tiff',<br>&nbsp;&nbsp;&nbsp;&nbsp;'wav'&nbsp;=&gt;&nbsp;'audio/wav',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xbm'&nbsp;=&gt;&nbsp;'image/xbm',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xml'&nbsp;=&gt;&nbsp;'text/xml',<br>);<br>&#63;&gt;  </code>
		 * @param callable $rewrites <p>The rewrites function is passed a string as its only parameter and must return a <code>string</code> or <b><code>FALSE</code></b>.</p> <p>If you are using fast-cgi or cgi then the parameter passed to the function is the value of the $_SERVER['PATH_INFO'] variable. Otherwise, the parameter passed to the function is the value of the $_SERVER['REQUEST_URI'] variable.</p> <p>If a string is returned it is used as the internal file path. If <b><code>FALSE</code></b> is returned then webPhar() will send a HTTP 403 Denied Code.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.webphar.php
		 * @see Phar::mungServer(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function webPhar(string $alias = NULL, string $index = "index.php", string $f404 = NULL, array $mimetypes = NULL, callable $rewrites = NULL): void {}
	}

	/**
	 * <p>The PharData class provides a high-level interface to accessing and creating non-executable tar and zip archives. Because these archives do not contain a stub and cannot be executed by the phar extension, it is possible to create and manipulate regular zip and tar files using the PharData class even if <i>phar.readonly</i> php.ini setting is <i>1</i>.</p>
	 * @link http://php.net/manual/en/class.phardata.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
	 */
	class PharData extends \RecursiveDirectoryIterator {

		/**
		 * Construct a non-executable tar or zip archive object
		 * @param string $fname <p>Path to an existing tar/zip archive or to-be-created archive</p>
		 * @param int $flags <p>Flags to pass to Phar parent class RecursiveDirectoryIterator.</p>
		 * @param string $alias <p>Alias with which this Phar archive should be referred to in calls to stream functionality.</p>
		 * @param int $format <p>One of the file format constants available within the Phar class.</p>
		 * @return self
		 * @link http://php.net/manual/en/phardata.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function __construct(string $fname, int $flags = NULL, string $alias = NULL, int $format = Phar::TAR) {}

		/**
		 * Add an empty directory to the tar/zip archive
		 * <p>With this method, an empty directory is created with path <i>dirname</i>. This method is similar to <code>ZipArchive::addEmptyDir()</code>.</p>
		 * @param string $dirname <p>The name of the empty directory to create in the phar archive</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link http://php.net/manual/en/phardata.addemptydir.php
		 * @see Phar::addEmptyDir(), PharData::addFile(), PharData::addFromString()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addEmptyDir(string $dirname): void {}

		/**
		 * Add a file from the filesystem to the phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>With this method, any file or URL can be added to the phar archive. If the optional second parameter <i>localname</i> is specified, the file will be stored in the archive with that name, otherwise the <i>file</i> parameter is used as the path to store within the archive. URLs must have a localname or an exception is thrown. This method is similar to <code>ZipArchive::addFile()</code>.</p>
		 * @param string $file <p>Full or relative path to a file on disk to be added to the phar archive.</p>
		 * @param string $localname <p>Path that the file will be stored in the archive.</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link http://php.net/manual/en/phar.addfile.php
		 * @see Phar::offsetSet(), PharData::addFile(), Phar::addFromString(), Phar::addEmptyDir()
		 * @since Unknown
		 */
		public function addFile(string $file, string $localname = NULL): void {}

		/**
		 * Add a file from the filesystem to the tar/zip archive
		 * <p>With this method, any string can be added to the tar/zip archive. The file will be stored in the archive with <i>localname</i> as its path. This method is similar to <code>ZipArchive::addFromString()</code>.</p>
		 * @param string $localname <p>Path that the file will be stored in the archive.</p>
		 * @param string $contents <p>The file contents to store</p>
		 * @return void <p>no return value, exception is thrown on failure.</p>
		 * @link http://php.net/manual/en/phardata.addfromstring.php
		 * @see PharData::offsetSet(), Phar::addFromString(), PharData::addFile(), PharData::addEmptyDir()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function addFromString(string $localname, string $contents): void {}

		/**
		 * Returns the api version
		 * <p>Return the API version of the phar file format that will be used when creating phars. The Phar extension supports reading API version 1.0.0 or newer. API version 1.1.0 is required for SHA-256 and SHA-512 hash, and API version 1.1.1 is required to store empty directories.</p>
		 * @return string <p>The API version string as in <i>"1.0.0"</i>.</p>
		 * @link http://php.net/manual/en/phar.apiversion.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function apiVersion(): string {}

		/**
		 * Construct a phar archive from the files within a directory
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Populate a phar archive from directory contents. The optional second parameter is a regular expression (pcre) that is used to exclude files. Any filename that matches the regular expression will be included, all others will be excluded. For more fine-grained control, use <code>Phar::buildFromIterator()</code>.</p>
		 * @param string $base_dir <p>The full or relative path to the directory that contains all files to add to the archive.</p>
		 * @param string $regex <p>An optional pcre regular expression that is used to filter the list of files. Only file paths matching the regular expression will be included in the archive.</p>
		 * @return array <p><b>Phar::buildFromDirectory()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link http://php.net/manual/en/phar.buildfromdirectory.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromDirectory(string $base_dir, string $regex = NULL): array {}

		/**
		 * Construct a tar or zip archive from an iterator
		 * <p>Populate a tar or zip archive from an iterator. Two styles of iterators are supported, iterators that map the filename within the tar/zip to the name of a file on disk, and iterators like DirectoryIterator that return SplFileInfo objects. For iterators that return SplFileInfo objects, the second parameter is required.</p>
		 * @param \Iterator $iter <p>Any iterator that either associatively maps tar/zip file to location or returns SplFileInfo objects</p>
		 * @param string $base_directory <p>For iterators that return SplFileInfo objects, the portion of each file's full path to remove when adding to the tar/zip archive</p>
		 * @return array <p><b>PharData::buildFromIterator()</b> returns an associative array mapping internal path of file to the full path of the file on the filesystem.</p>
		 * @link http://php.net/manual/en/phardata.buildfromiterator.php
		 * @see Phar::buildFromIterator()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function buildFromIterator(\Iterator $iter, string $base_directory = NULL): array {}

		/**
		 * Returns whether phar extension supports compression using either zlib or bzip2
		 * <p>This should be used to test whether compression is possible prior to loading a phar archive containing compressed files.</p>
		 * @param int $type <p>Either <i>Phar::GZ</i> or <i>Phar::BZ2</i> can be used to test whether compression is possible with a specific compression algorithm (zlib or bzip2).</p>
		 * @return bool <p><b><code>TRUE</code></b> if compression/decompression is available, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.cancompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression(), Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canCompress(int $type = 0): bool {}

		/**
		 * Returns whether phar extension supports writing and creating phars
		 * <p>This static method determines whether write access has been disabled in the system php.ini via the phar.readonly ini variable.</p>
		 * @return bool <p><b><code>TRUE</code></b> if write access is enabled, <b><code>FALSE</code></b> if it is disabled.</p>
		 * @link http://php.net/manual/en/phar.canwrite.php
		 * @see Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function canWrite(): bool {}

		/**
		 * Compresses the entire tar/zip archive using Gzip or Bzip2 compression
		 * <p>For tar archives, this method compresses the entire archive using gzip compression or bzip2 compression. The resulting file can be processed with the gunzip command/bunzip command, or accessed directly and transparently with the Phar extension.</p><p>For zip archives, this method fails with an exception. The zlib extension must be enabled to compress with gzip compression, the bzip2 extension must be enabled in order to compress with bzip2 compression.</p><p>In addition, this method automatically renames the archive, appending <i>.gz</i>, <i>.bz2</i> or removing the extension if passed <i>Phar::NONE</i> to remove compression. Alternatively, a file extension may be specified with the second parameter.</p>
		 * @param int $compression <p>Compression must be one of <i>Phar::GZ</i>, <i>Phar::BZ2</i> to add compression, or <i>Phar::NONE</i> to remove compression.</p>
		 * @param string $extension <p>By default, the extension is <i>.tar.gz</i> or <i>.tar.bz2</i> for compressing a tar, and <i>.tar</i> for decompressing.</p>
		 * @return object <p>A PharData object is returned.</p>
		 * @link http://php.net/manual/en/phardata.compress.php
		 * @see Phar::compress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression, string $extension = NULL): object {}

		/**
		 * Compresses all files in the current Phar archive using Bzip2 compression
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>Phar::compress()</code>, <code>Phar::decompress()</code>, <code>Phar::compressFiles()</code> and <code>Phar::decompressFiles()</code>.</p><p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method compresses all files in the Phar archive using bzip2 compression. The bzip2 extension must be enabled to take advantage of this feature. In addition, if any files are already compressed using gzip compression, the zlib extension must be enabled in order to decompress the files prior to re-compressing with bzip2 compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.compressallfilesbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesBZIP2(): bool {}

		/**
		 * Compresses all files in the current Phar archive using Gzip compression
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>Phar::compress()</code>, <code>Phar::decompress()</code>, <code>Phar::compressFiles()</code> and <code>Phar::decompressFiles()</code>.</p><p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based phar archives, this method compresses the entire archive using gzip compression. The resulting file can be processed with the gunzip command, or accessed directly and transparently with the Phar extension.</p><p>For Zip-based and phar-based phar archives, this method compresses all files in the Phar archive using gzip compression. The zlib extension must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2 compression, the bzip2 extension must be enabled in order to decompress the files prior to re-compressing with gzip compression. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.compressallfilesgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function compressAllFilesGZ(): bool {}

		/**
		 * Compresses all files in the current tar/zip archive
		 * <p>For tar-based archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use <code>PharData::compress()</code> to compress an entire tar-based archive.</p><p>For Zip-based archives, this method compresses all files in the archive using the specified compression. The zlib or bzip2 extensions must be enabled to take advantage of this feature. In addition, if any files are already compressed using bzip2/zlib compression, the respective extension must be enabled in order to decompress the files prior to re-compressing.</p>
		 * @param int $compression <p>Compression must be one of <i>Phar::GZ</i>, <i>Phar::BZ2</i> to add compression, or <i>Phar::NONE</i> to remove compression.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phardata.compressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), PharData::decompressFiles(), Phar::getSupportedCompression(), PharData::compress(), PharData::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compressFiles(int $compression): void {}

		/**
		 * Convert a phar archive to a non-executable tar or zip file
		 * <p>This method is used to convert a non-executable tar or zip archive to another non-executable format.</p><p>If no changes are specified, this method throws a BadMethodCallException. This method should be used to convert a tar archive to zip format or vice-versa. Although it is possible to simply change the compression of a tar archive using this method, it is better to use the <code>PharData::compress()</code> method for logical consistency.</p><p>If successful, the method creates a new archive on disk and returns a PharData object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param int $format <p>This should be one of <i>Phar::TAR</i> or <i>Phar::ZIP</i>. If set to <b><code>NULL</code></b>, the existing file format will be preserved.</p>
		 * @param int $compression <p>This should be one of <i>Phar::NONE</i> for no whole-archive compression, <i>Phar::GZ</i> for zlib-based compression, and <i>Phar::BZ2</i> for bzip-based compression.</p>
		 * @param string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that <i>.phar</i> cannot be used anywhere in the filename for a non-executable tar or zip archive.</p> <p>If converting to a tar-based phar archive, the default extensions are <i>.tar</i>, <i>.tar.gz</i>, and <i>.tar.bz2</i> depending on specified compression. For zip-based archives, the default extension is <i>.zip</i>.</p>
		 * @return PharData <p>The method returns a PharData object on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/phardata.converttodata.php
		 * @see Phar::convertToExecutable(), Phar::convertToData(), PharData::convertToExecutable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToData(int $format = NULL, int $compression = NULL, string $extension = NULL): \PharData {}

		/**
		 * Convert a non-executable tar/zip archive to an executable phar archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method is used to convert a non-executable tar or zip archive to an executable phar archive. Any of the three executable file formats (phar, tar or zip) can be used, and whole-archive compression can also be performed.</p><p>If no changes are specified, this method throws a BadMethodCallException.</p><p>If successful, the method creates a new archive on disk and returns a Phar object. The old archive is not removed from disk, and should be done manually after the process has finished.</p>
		 * @param int $format <p>This should be one of <i>Phar::PHAR</i>, <i>Phar::TAR</i>, or <i>Phar::ZIP</i>. If set to <b><code>NULL</code></b>, the existing file format will be preserved.</p>
		 * @param int $compression <p>This should be one of <i>Phar::NONE</i> for no whole-archive compression, <i>Phar::GZ</i> for zlib-based compression, and <i>Phar::BZ2</i> for bzip-based compression.</p>
		 * @param string $extension <p>This parameter is used to override the default file extension for a converted archive. Note that all zip- and tar-based phar archives must contain <i>.phar</i> in their file extension in order to be processed as a phar archive.</p> <p>If converting to a phar-based archive, the default extensions are <i>.phar</i>, <i>.phar.gz</i>, or <i>.phar.bz2</i> depending on the specified compression. For tar-based phar archives, the default extensions are <i>.phar.tar</i>, <i>.phar.tar.gz</i>, and <i>.phar.tar.bz2</i>. For zip-based phar archives, the default extension is <i>.phar.zip</i>.</p>
		 * @return Phar <p>The method returns a Phar object on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/phardata.converttoexecutable.php
		 * @see Phar::convertToExecutable(), Phar::convertToData(), PharData::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function convertToExecutable(int $format = NULL, int $compression = NULL, string $extension = NULL): \Phar {}

		/**
		 * Copy a file internal to the phar archive to another new file within the phar
		 * <p>Copy a file internal to the tar/zip archive to another new file within the same archive. This is an object-oriented alternative to using <code>copy()</code> with the phar stream wrapper.</p>
		 * @param string $oldfile
		 * @param string $newfile
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is safer to encase method call in a try/catch block and assume success if no exception is thrown.</p>
		 * @link http://php.net/manual/en/phardata.copy.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function copy(string $oldfile, string $newfile): bool {}

		/**
		 * Returns the number of entries (files) in the Phar archive
		 * @return int <p>The number of files contained within this phar, or <i>0</i> (the number zero) if none.</p>
		 * @link http://php.net/manual/en/phar.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function count(): int {}

		/**
		 * Create a phar-file format specific stub
		 * <p>This method is intended for creation of phar-file format-specific stubs, and is not intended for use with tar- or zip-based phar archives.</p><p>Phar archives contain a bootstrap loader, or <i>stub</i> written in PHP that is executed when the archive is executed in PHP either via include:</p><p>This method provides a simple and easy method to create a stub that will run a startup file from the phar archive. In addition, different files can be specified for running the phar archive from the command line versus through a web server. The loader stub also calls <code>Phar::interceptFileFuncs()</code> to allow easy bundling of a PHP application that accesses the file system. If the phar extension is not present, the loader stub will extract the phar archive to a temporary directory and then operate on the files. A shutdown function erases the temporary files on exit.</p>
		 * @param string $indexfile
		 * @param string $webindexfile
		 * @return string <p>Returns a string containing the contents of a customized bootstrap loader (stub) that allows the created Phar archive to work with or without the Phar extension enabled.</p>
		 * @link http://php.net/manual/en/phar.createdefaultstub.php
		 * @see Phar::setStub(), Phar::getStub()
		 * @since Unknown
		 */
		final public static function createDefaultStub(string $indexfile = NULL, string $webindexfile = NULL): string {}

		/**
		 * Decompresses the entire Phar archive
		 * <p>For tar-based archives, this method decompresses the entire archive.</p><p>For Zip-based archives, this method fails with an exception. The zlib extension must be enabled to decompress an archive compressed with gzip compression, and the bzip2 extension must be enabled in order to decompress an archive compressed with bzip2 compression.</p><p>In addition, this method automatically renames the file extension of the archive, <i>.tar</i> by default. Alternatively, a file extension may be specified with the <code>extension</code> parameter.</p>
		 * @param string $extension <p>For decompressing, the default file extension is <i>.tar</i>. Use this parameter to specify another file extension. Be aware that only executable archives can contain <i>.phar</i> in their filename.</p>
		 * @return object <p>A PharData object is returned.</p>
		 * @link http://php.net/manual/en/phardata.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), PharData::compress(), Phar::canCompress(), Phar::isCompressed(), PharData::compress(), Phar::getSupportedCompression(), PharData::compressFiles(), PharData::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(string $extension = NULL): object {}

		/**
		 * Decompresses all files in the current zip archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>For tar-based archives, this method throws a BadMethodCallException, as compression of individual files within a tar archive is not supported by the file format. Use <code>PharData::compress()</code> to compress an entire tar-based archive.</p><p>For Zip-based archives, this method decompresses all files in the archive. The zlib or bzip2 extensions must be enabled to take advantage of this feature if any files are compressed using bzip2/zlib compression.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phardata.decompressfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), PharData::compressFiles(), Phar::getSupportedCompression(), PharData::compress(), PharData::decompress()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompressFiles(): bool {}

		/**
		 * Deletes the global metadata of a zip archive
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Deletes the global metadata of the zip archive</p>
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link http://php.net/manual/en/phardata.delmetadata.php
		 * @see Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function delMetadata(): bool {}

		/**
		 * Delete a file within a tar/zip archive
		 * <p>Delete a file within an archive. This is the functional equivalent of calling <code>unlink()</code> on the stream wrapper equivalent, as shown in the example below.</p>
		 * @param string $entry <p>Path within an archive to the file to delete.</p>
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link http://php.net/manual/en/phardata.delete.php
		 * @see Phar::delete()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function delete(string $entry): bool {}

		/**
		 * Extract the contents of a tar/zip archive to a directory
		 * <p>Extract all files within a tar/zip archive to disk. Extracted files and directories preserve permissions as stored in the archive. The optional parameters allow optional control over which files are extracted, and whether existing files on disk can be overwritten. The second parameter <i>files</i> can be either the name of a file or directory to extract, or an array of names of files and directories to extract. By default, this method will not overwrite existing files, the third parameter can be set to true to enable overwriting of files. This method is similar to <code>ZipArchive::extractTo()</code>.</p>
		 * @param string $pathto <p>Path to extract the given <i>files</i> to</p>
		 * @param string|array $files <p>The name of a file or directory to extract, or an array of files/directories to extract</p>
		 * @param bool $overwrite <p>Set to <b><code>TRUE</code></b> to enable overwriting existing files</p>
		 * @return bool <p>returns <b><code>TRUE</code></b> on success, but it is better to check for thrown exception, and assume success if none is thrown.</p>
		 * @link http://php.net/manual/en/phardata.extractto.php
		 * @see Phar::extractTo()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function extractTo(string $pathto, $files = NULL, bool $overwrite = FALSE): bool {}

		/**
		 * Get the alias for Phar
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>Returns the alias or <b><code>NULL</code></b> if there's no alias.</p>
		 * @link http://php.net/manual/en/phar.getalias.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.1
		 */
		public function getAlias(): string {}

		/**
		 * Returns phar archive meta-data
		 * <p>Retrieve archive meta-data. Meta-data can be any PHP variable that can be serialized.</p>
		 * @return mixed <p>any PHP variable that can be serialized and is stored as meta-data for the Phar archive, or <b><code>NULL</code></b> if no meta-data is stored.</p>
		 * @link http://php.net/manual/en/phar.getmetadata.php
		 * @see Phar::setMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getMetadata() {}

		/**
		 * Return whether phar was modified
		 * <p>This method can be used to determine whether a phar has either had an internal file deleted, or contents of a file changed in some way.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the phar has been modified since opened, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.getmodified.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getModified(): bool {}

		/**
		 * Get the real path to the Phar archive on disk
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/phar.getpath.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getPath(): string {}

		/**
		 * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive
		 * <p>Returns the verification signature of a phar archive in a hexadecimal string.</p>
		 * @return array <p>Array with the opened archive's signature in <i>hash</i> key and <i>MD5</i>, <i>SHA-1</i>, <i>SHA-256</i>, <i>SHA-512</i>, or <i>OpenSSL</i> in <i>hash_type</i>. This signature is a hash calculated on the entire phar's contents, and may be used to verify the integrity of the archive. A valid signature is absolutely required of all executable phar archives if the phar.require_hash INI variable is set to true.</p>
		 * @link http://php.net/manual/en/phar.getsignature.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getSignature(): array {}

		/**
		 * Return the PHP loader or bootstrap stub of a Phar archive
		 * <p>Phar archives contain a bootstrap loader, or <i>stub</i> written in PHP that is executed when the archive is executed in PHP either via include:</p>
		 * @return string <p>Returns a string containing the contents of the bootstrap loader (stub) of the current Phar archive.</p>
		 * @link http://php.net/manual/en/phar.getstub.php
		 * @see Phar::setStub(), Phar::createDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getStub(): string {}

		/**
		 * Return array of supported compression algorithms
		 * @return array <p>Returns an array containing any of <i>Phar::GZ</i> or <i>Phar::BZ2</i>, depending on the availability of the zlib extension or the bz2 extension.</p>
		 * @link http://php.net/manual/en/phar.getsupportedcompression.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), PharFileInfo::decompress(), Phar::compress(), Phar::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function getSupportedCompression(): array {}

		/**
		 * Return array of supported signature types
		 * <p>Return array of supported signature types</p>
		 * @return array <p>Returns an array containing any of <i>MD5</i>, <i>SHA-1</i>, <i>SHA-256</i>, <i>SHA-512</i>, or <i>OpenSSL</i>.</p>
		 * @link http://php.net/manual/en/phar.getsupportedsignatures.php
		 * @see Phar::getSignature(), Phar::setSignatureAlgorithm()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		final public static function getSupportedSignatures(): array {}

		/**
		 * Return version info of Phar archive
		 * <p>Returns the API version of an opened Phar archive.</p>
		 * @return string <p>The opened archive's API version. This is not to be confused with the API version that the loaded phar extension will use to create new phars. Each Phar archive has the API version hard-coded into its manifest. See Phar file format documentation for more information.</p>
		 * @link http://php.net/manual/en/phar.getversion.php
		 * @see Phar::apiVersion()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getVersion(): string {}

		/**
		 * Returns whether phar has global meta-data
		 * <p>Returns whether phar has global meta-data set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if meta-data has been set, and <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.hasmetadata.php
		 * @see Phar::getMetadata(), Phar::setMetadata(), Phar::delMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * Instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions
		 * <p>instructs phar to intercept <code>fopen()</code>, <code>readfile()</code>, <code>file_get_contents()</code>, <code>opendir()</code>, and all of the stat-related functions. If any of these functions is called from within a phar archive with a relative path, the call is modified to access a file within the phar archive. Absolute paths are assumed to be attempts to load external files from the filesystem.</p><p>This function makes it possible to run PHP applications designed to run off of a hard disk as a phar application.</p>
		 * @return void
		 * @link http://php.net/manual/en/phar.interceptfilefuncs.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function interceptFileFuncs(): void {}

		/**
		 * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk
		 * <p>This method can be used to determine whether a Phar will save changes to disk immediately, or whether a call to <code>Phar::stopBuffering()</code> is needed to enable saving changes.</p><p>Phar write buffering is per-archive, buffering active for the <i>foo.phar</i> Phar archive does not affect changes to the <i>bar.phar</i> Phar archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the write operations are being buffer, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/phar.isbuffering.php
		 * @see Phar::startBuffering(), Phar::stopBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isBuffering(): bool {}

		/**
		 * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on)
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on). Zip-based phar archives cannot be compressed as a file, and so this method will always return <b><code>FALSE</code></b> if a zip-based phar archive is queried.</p>
		 * @return mixed <p><i>Phar::GZ</i>, <i>Phar::BZ2</i> or <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/phar.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::compressFiles(), Phar::decompressFiles(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isCompressed() {}

		/**
		 * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter
		 * @param int $format <p>Either <i>Phar::PHAR</i>, <i>Phar::TAR</i>, or <i>Phar::ZIP</i> to test for the format of the archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the phar archive matches the file format requested by the parameter</p>
		 * @link http://php.net/manual/en/phar.isfileformat.php
		 * @see Phar::convertToExecutable(), Phar::convertToData()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isFileFormat(int $format): bool {}

		/**
		 * Returns whether the given filename is a valid phar filename
		 * <p>Returns whether the given filename is a valid phar filename that will be recognized as a phar archive by the phar extension. This can be used to test a name without having to instantiate a phar archive and catch the inevitable Exception that will be thrown if an invalid name is specified.</p>
		 * @param string $filename <p>The name or full path to a phar archive not yet created</p>
		 * @param bool $executable <p>This parameter determines whether the filename should be treated as a phar executable archive, or a data non-executable archive</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the filename is valid, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.isvalidpharfilename.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		final public static function isValidPharFilename(string $filename, bool $executable = TRUE): bool {}

		/**
		 * Returns true if the tar/zip archive can be modified
		 * <p>This method returns <b><code>TRUE</code></b> if the tar/zip archive on disk is not read-only. Unlike <code>Phar::isWritable()</code>, data-only tar/zip archives can be modified even if <i>phar.readonly</i> is set to <i>1</i>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the tar/zip archive can be modified</p>
		 * @link http://php.net/manual/en/phardata.iswritable.php
		 * @see Phar::canWrite(), Phar::isWritable()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function isWritable(): bool {}

		/**
		 * Loads any phar archive with an alias
		 * <p>This can be used to read the contents of an external Phar archive. This is most useful for assigning an alias to a phar so that subsequent references to the phar can use the shorter alias, or for loading Phar archives that only contain data and are not intended for execution/inclusion in PHP scripts.</p>
		 * @param string $filename <p>the full or relative path to the phar archive to open</p>
		 * @param string $alias <p>The alias that may be used to refer to the phar archive. Note that many phar archives specify an explicit alias inside the phar archive, and a PharException will be thrown if a new alias is specified in this case.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.loadphar.php
		 * @see Phar::mapPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function loadPhar(string $filename, string $alias = NULL): bool {}

		/**
		 * Reads the currently executed file (a phar) and registers its manifest
		 * <p>This static method can only be used inside a Phar archive's loader stub in order to initialize the phar when it is directly executed, or when it is included in another script.</p>
		 * @param string $alias <p>The alias that can be used in <i>phar://</i> URLs to refer to this archive, rather than its full path.</p>
		 * @param int $dataoffset <p>Unused variable, here for compatibility with PEAR's PHP_Archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.mapphar.php
		 * @see Phar::loadPhar()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		final public static function mapPhar(string $alias = NULL, int $dataoffset = 0): bool {}

		/**
		 * Mount an external path or file to a virtual location within the phar archive
		 * <p>Much like the unix file system concept of mounting external devices to paths within the directory tree, <b>Phar::mount()</b> allows referring to external files and directories as if they were inside of an archive. This allows powerful abstraction such as referring to external configuration files as if they were inside the archive.</p>
		 * @param string $pharpath <p>The internal path within the phar archive to use as the mounted path location. This must be a relative path within the phar archive, and must not already exist.</p>
		 * @param string $externalpath <p>A path or URL to an external file or directory to mount within the phar archive</p>
		 * @return void <p>No return. PharException is thrown on failure.</p>
		 * @link http://php.net/manual/en/phar.mount.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function mount(string $pharpath, string $externalpath): void {}

		/**
		 * Defines a list of up to 4 $_SERVER variables that should be modified for execution
		 * <p><b>Phar::mungServer()</b> should only be called within the stub of a phar archive.</p><p>Defines a list of up to 4 $_SERVER variables that should be modified for execution. Variables that can be modified to remove traces of phar execution are <i>REQUEST_URI</i>, <i>PHP_SELF</i>, <i>SCRIPT_NAME</i> and <i>SCRIPT_FILENAME</i>.</p><p>On its own, this method does nothing. Only when combined with <code>Phar::webPhar()</code> does it take effect, and only when the requested file is a PHP file to be parsed. Note that the <i>PATH_INFO</i> and <i>PATH_TRANSLATED</i> variables are always modified.</p><p>The original values of variables that are modified are stored in the SERVER array with <i>PHAR_</i> prepended, so for instance <i>SCRIPT_NAME</i> would be saved as <i>PHAR_SCRIPT_NAME</i>.</p>
		 * @param array $munglist <p>an array containing as string indices any of <i>REQUEST_URI</i>, <i>PHP_SELF</i>, <i>SCRIPT_NAME</i> and <i>SCRIPT_FILENAME</i>. Other values trigger an exception, and <b>Phar::mungServer()</b> is case-sensitive.</p>
		 * @return void <p>No return.</p>
		 * @link http://php.net/manual/en/phar.mungserver.php
		 * @see Phar::webPhar(), Phar::setStub()
		 * @since Unknown
		 */
		final public static function mungServer(array $munglist): void {}

		/**
		 * Determines whether a file exists in the phar
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets.</p><p>offsetExists() is called whenever <code>isset()</code> is called.</p>
		 * @param string $offset <p>The filename (relative path) to look for in a Phar.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the file exists within the phar, or <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/phar.offsetexists.php
		 * @see Phar::offsetGet(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetExists(string $offset): bool {}

		/**
		 * Gets a PharFileInfo object for a specific file
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a Phar archive using array access brackets. <b>Phar::offsetGet()</b> is used for retrieving files from a Phar archive.</p>
		 * @param string $offset <p>The filename (relative path) to look for in a Phar.</p>
		 * @return int <p>A PharFileInfo object is returned that can be used to iterate over a file's contents or to retrieve information about the current file.</p>
		 * @link http://php.net/manual/en/phar.offsetget.php
		 * @see Phar::offsetExists(), Phar::offsetSet(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function offsetGet(string $offset): int {}

		/**
		 * Set the contents of a file within the tar/zip to those of an external file or string
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a tar/zip archive using array access brackets. offsetSet is used for modifying an existing file, or adding a new file to a tar/zip archive.</p>
		 * @param string $offset <p>The filename (relative path) to modify in a tar or zip archive.</p>
		 * @param string $value <p>Content of the file.</p>
		 * @return void <p>No return values.</p>
		 * @link http://php.net/manual/en/phardata.offsetset.php
		 * @see Phar::offsetSet()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function offsetSet(string $offset, string $value): void {}

		/**
		 * Remove a file from a tar/zip archive
		 * <p>This is an implementation of the <code>ArrayAccess</code> interface allowing direct manipulation of the contents of a tar/zip archive using array access brackets. offsetUnset is used for deleting an existing file, and is called by the <code>unset()</code> language construct.</p>
		 * @param string $offset <p>The filename (relative path) to modify in the tar/zip archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phardata.offsetunset.php
		 * @see Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function offsetUnset(string $offset): bool {}

		/**
		 * Returns the full path on disk or full phar URL to the currently executing Phar archive
		 * <p>Returns the full path to the running phar archive. This is intended for use much like the <i>__FILE__</i> magic constant, and only has effect inside an executing phar archive.</p><p>Inside the stub of an archive, <b>Phar::running()</b> returns <i>""</i>. Simply use <b><code>__FILE__</code></b> to access the current running phar inside a stub.</p>
		 * @param bool $retphar <p>If <b><code>FALSE</code></b>, the full path on disk to the phar archive is returned. If <b><code>TRUE</code></b>, a full phar URL is returned.</p>
		 * @return string <p>Returns the filename if valid, empty string otherwise.</p>
		 * @link http://php.net/manual/en/phar.running.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function running(bool $retphar = TRUE): string {}

		/**
		 * Dummy function (Phar::setAlias is not valid for PharData)
		 * <p>Non-executable tar/zip archives cannot have an alias, so this method simply throws an exception.</p>
		 * @param string $alias <p>A shorthand string that this archive can be referred to in <i>phar</i> stream wrapper access. This parameter is ignored.</p>
		 * @return bool
		 * @link http://php.net/manual/en/phardata.setalias.php
		 * @see Phar::setAlias()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setAlias(string $alias): bool {}

		/**
		 * Dummy function (Phar::setDefaultStub is not valid for PharData)
		 * <p>Non-executable tar/zip archives cannot have a stub, so this method simply throws an exception.</p>
		 * @param string $index <p>Relative path within the phar archive to run if accessed on the command-line</p>
		 * @param string $webindex <p>Relative path within the phar archive to run if accessed through a web browser</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phardata.setdefaultstub.php
		 * @see Phar::setDefaultStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setDefaultStub(string $index = NULL, string $webindex = NULL): bool {}

		/**
		 * Sets phar archive meta-data
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p><b>Phar::setMetadata()</b> should be used to store customized data that describes something about the phar archive as a complete entity. <code>PharFileInfo::setMetadata()</code> should be used for file-specific meta-data. Meta-data can slow down the performance of loading a phar archive if the data is large.</p><p>Some possible uses for meta-data include specifying which file within the archive should be used to bootstrap the archive, or the location of a file manifest like PEAR's package.xml file. However, any useful data that describes the phar archive may be stored.</p>
		 * @param mixed $metadata <p>Any PHP variable containing information to store that describes the phar archive</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phardata.setmetadata.php
		 * @see Phar::getMetadata(), Phar::delMetadata(), Phar::hasMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setMetadata($metadata): void {}

		/**
		 * Set the signature algorithm for a phar and apply it
		 * <p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>Set the signature algorithm for a phar and apply it. The signature algorithm must be one of <i>Phar::MD5</i>, <i>Phar::SHA1</i>, <i>Phar::SHA256</i>, <i>Phar::SHA512</i>, or <i>Phar::PGP</i> (pgp not yet supported and falls back to SHA-1).</p>
		 * @param int $sigtype <p>One of <i>Phar::MD5</i>, <i>Phar::SHA1</i>, <i>Phar::SHA256</i>, <i>Phar::SHA512</i>, or <i>Phar::PGP</i></p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phardata.setsignaturealgorithm.php
		 * @see Phar::getSupportedSignatures(), Phar::getSignature()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.1.0
		 */
		public function setSignatureAlgorithm(int $sigtype): void {}

		/**
		 * Dummy function (Phar::setStub is not valid for PharData)
		 * <p>Non-executable tar/zip archives cannot have a stub, so this method simply throws an exception.</p>
		 * @param string $stub <p>A string or an open stream handle to use as the executable stub for this phar archive. This parameter is ignored.</p>
		 * @param int $len
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phardata.setstub.php
		 * @see Phar::setStub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function setStub(string $stub, int $len = -1): bool {}

		/**
		 * Start buffering Phar write operations, do not modify the Phar object on disk
		 * <p>Although technically unnecessary, the <b>Phar::startBuffering()</b> method can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.</p><p>However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. the <b>Phar::startBuffering()</b>/<code>Phar::stopBuffering()</code> pair of methods is provided for this purpose.</p><p>Phar write buffering is per-archive, buffering active for the <i>foo.phar</i> Phar archive does not affect changes to the <i>bar.phar</i> Phar archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.startbuffering.php
		 * @see Phar::stopBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function startBuffering(): void {}

		/**
		 * Stop buffering write requests to the Phar archive, and save changes to disk
		 * <p><b>Phar::stopBuffering()</b> is used in conjunction with the <code>Phar::startBuffering()</code> method. <code>Phar::startBuffering()</code> can provide a significant performance boost when creating or modifying a Phar archive with a large number of files. Ordinarily, every time a file within a Phar archive is created or modified in any way, the entire Phar archive will be recreated with the changes. In this way, the archive will be up-to-date with the activity performed on it.</p><p>However, this can be unnecessary when simply creating a new Phar archive, when it would make more sense to write the entire archive out at once. Similarly, it is often necessary to make a series of changes and to ensure that they all are possible before making any changes on disk, similar to the relational database concept of transactions. The <code>Phar::startBuffering()</code>/<b>Phar::stopBuffering()</b> pair of methods is provided for this purpose.</p><p>Phar write buffering is per-archive, buffering active for the <i>foo.phar</i> Phar archive does not affect changes to the <i>bar.phar</i> Phar archive.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.stopbuffering.php
		 * @see Phar::startBuffering(), Phar::isBuffering()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function stopBuffering(): void {}

		/**
		 * Uncompresses all files in the current Phar archive
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>Phar::compress()</code>, <code>Phar::decompress()</code>, <code>Phar::compressFiles()</code> and <code>Phar::decompressFiles()</code>.</p><p><b>Note</b>:</p><p>This method requires the php.ini setting <i>phar.readonly</i> to be set to <i>0</i> in order to work for Phar objects. Otherwise, a PharException will be thrown.</p><p>This method decompresses all files in the Phar archive. If any files are already compressed using gzip compression, the zlib extension must be enabled in order to decompress the files, and any files compressed using bzip2 compression require the bzip2 extension to decompress the files. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.uncompressallfiles.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression()
		 * @since PECL phar < 2.0.0
		 */
		public function uncompressAllFiles(): bool {}

		/**
		 * Completely remove a phar archive from disk and from memory
		 * <p>Removes a phar archive from disk and memory.</p>
		 * @param string $archive <p>The path on disk to the phar archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phar.unlinkarchive.php
		 * @see Phar::delete(), Phar::offsetUnset()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function unlinkArchive(string $archive): bool {}

		/**
		 * mapPhar for web-based phars. front controller for web applications
		 * <p><code>Phar::mapPhar()</code> for web-based phars. This method parses $_SERVER['REQUEST_URI'] and routes a request from a web browser to an internal file within the phar archive. In essence, it simulates a web server, routing requests to the correct file, echoing the correct headers and parsing PHP files as needed. This powerful method is part of what makes it easy to convert an existing PHP application into a phar archive. Combined with <code>Phar::mungServer()</code> and <code>Phar::interceptFileFuncs()</code>, any web application can be used unmodified from a phar archive.</p><p><b>Phar::webPhar()</b> should only be called from the stub of a phar archive (see here for more information on what a stub is).</p>
		 * @param string $alias <p>The alias that can be used in <i>phar://</i> URLs to refer to this archive, rather than its full path.</p>
		 * @param string $index <p>The location within the phar of the directory index.</p>
		 * @param string $f404 <p>The location of the script to run when a file is not found. This script should output the proper HTTP 404 headers.</p>
		 * @param array $mimetypes <p>An array mapping additional file extensions to MIME type. If the default mapping is sufficient, pass an empty array. By default, these extensions are mapped to these MIME types:</p> <code> &lt;&#63;php<br>$mimes&nbsp;=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;'phps'&nbsp;=&gt;&nbsp;Phar::PHPS,&nbsp;//&nbsp;pass&nbsp;to&nbsp;highlight_file()<br>&nbsp;&nbsp;&nbsp;&nbsp;'c'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'cc'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'cpp'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'c++'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'dtd'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'h'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'log'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'rng'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'txt'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xsd'&nbsp;=&gt;&nbsp;'text/plain',<br>&nbsp;&nbsp;&nbsp;&nbsp;'php'&nbsp;=&gt;&nbsp;Phar::PHP,&nbsp;//&nbsp;parse&nbsp;as&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;'inc'&nbsp;=&gt;&nbsp;Phar::PHP,&nbsp;//&nbsp;parse&nbsp;as&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;'avi'&nbsp;=&gt;&nbsp;'video/avi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'bmp'&nbsp;=&gt;&nbsp;'image/bmp',<br>&nbsp;&nbsp;&nbsp;&nbsp;'css'&nbsp;=&gt;&nbsp;'text/css',<br>&nbsp;&nbsp;&nbsp;&nbsp;'gif'&nbsp;=&gt;&nbsp;'image/gif',<br>&nbsp;&nbsp;&nbsp;&nbsp;'htm'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'html'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'htmls'&nbsp;=&gt;&nbsp;'text/html',<br>&nbsp;&nbsp;&nbsp;&nbsp;'ico'&nbsp;=&gt;&nbsp;'image/x-ico',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpe'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpg'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'jpeg'&nbsp;=&gt;&nbsp;'image/jpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'js'&nbsp;=&gt;&nbsp;'application/x-javascript',<br>&nbsp;&nbsp;&nbsp;&nbsp;'midi'&nbsp;=&gt;&nbsp;'audio/midi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mid'&nbsp;=&gt;&nbsp;'audio/midi',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mod'&nbsp;=&gt;&nbsp;'audio/mod',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mov'&nbsp;=&gt;&nbsp;'movie/quicktime',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mp3'&nbsp;=&gt;&nbsp;'audio/mp3',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mpg'&nbsp;=&gt;&nbsp;'video/mpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'mpeg'&nbsp;=&gt;&nbsp;'video/mpeg',<br>&nbsp;&nbsp;&nbsp;&nbsp;'pdf'&nbsp;=&gt;&nbsp;'application/pdf',<br>&nbsp;&nbsp;&nbsp;&nbsp;'png'&nbsp;=&gt;&nbsp;'image/png',<br>&nbsp;&nbsp;&nbsp;&nbsp;'swf'&nbsp;=&gt;&nbsp;'application/shockwave-flash',<br>&nbsp;&nbsp;&nbsp;&nbsp;'tif'&nbsp;=&gt;&nbsp;'image/tiff',<br>&nbsp;&nbsp;&nbsp;&nbsp;'tiff'&nbsp;=&gt;&nbsp;'image/tiff',<br>&nbsp;&nbsp;&nbsp;&nbsp;'wav'&nbsp;=&gt;&nbsp;'audio/wav',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xbm'&nbsp;=&gt;&nbsp;'image/xbm',<br>&nbsp;&nbsp;&nbsp;&nbsp;'xml'&nbsp;=&gt;&nbsp;'text/xml',<br>);<br>&#63;&gt;  </code>
		 * @param callable $rewrites <p>The rewrites function is passed a string as its only parameter and must return a <code>string</code> or <b><code>FALSE</code></b>.</p> <p>If you are using fast-cgi or cgi then the parameter passed to the function is the value of the $_SERVER['PATH_INFO'] variable. Otherwise, the parameter passed to the function is the value of the $_SERVER['REQUEST_URI'] variable.</p> <p>If a string is returned it is used as the internal file path. If <b><code>FALSE</code></b> is returned then webPhar() will send a HTTP 403 Denied Code.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phar.webphar.php
		 * @see Phar::mungServer(), Phar::interceptFileFuncs()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		final public static function webPhar(string $alias = NULL, string $index = "index.php", string $f404 = NULL, array $mimetypes = NULL, callable $rewrites = NULL): void {}
	}

	/**
	 * <p>The PharException class provides a phar-specific exception class for try/catch blocks.</p>
	 * @link http://php.net/manual/en/class.pharexception.php
	 * @since Unknown
	 */
	class PharException extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>The PharFileInfo class provides a high-level interface to the contents and attributes of a single file within a phar archive.</p>
	 * @link http://php.net/manual/en/class.pharfileinfo.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
	 */
	class PharFileInfo extends \SplFileInfo {

		/**
		 * Construct a Phar entry object
		 * <p>This should not be called directly. Instead, a PharFileInfo object is initialized by calling <code>Phar::offsetGet()</code> through array access.</p>
		 * @param string $entry <p>The full url to retrieve a file. If you wish to retrieve the information for the file <i>my/file.php</i> from the phar <i>boo.phar</i>, the entry should be <i>phar://boo.phar/my/file.php</i>.</p>
		 * @return self
		 * @link http://php.net/manual/en/pharfileinfo.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function __construct(string $entry) {}

		/**
		 * Sets file-specific permission bits
		 * <p><b>PharFileInfo::chmod()</b> allows setting of the executable file permissions bit, as well as read-only bits. Writeable bits are ignored, and set at runtime based on the phar.readonly INI variable. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.</p>
		 * @param int $permissions <p>permissions (see <code>chmod()</code>)</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/pharfileinfo.chmod.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function chmod(int $permissions): void {}

		/**
		 * Compresses the current Phar entry with either zlib or bzip2 compression
		 * <p>This method compresses the file inside the Phar archive using either bzip2 compression or zlib compression. The bzip2 or zlib extension must be enabled to take advantage of this feature. In addition, if the file is already compressed, the respective extension must be enabled in order to decompress the file. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.</p>
		 * @param int $compression
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/pharfileinfo.compress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::decompress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function compress(int $compression): bool {}

		/**
		 * Decompresses the current Phar entry within the phar
		 * <p>This method decompresses the file inside the Phar archive. Depending on how the file is compressed, the bzip2 or zlib extensions must be enabled to take advantage of this feature. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/pharfileinfo.decompress.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compressFiles(), Phar::decompressFiles(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 2.0.0
		 */
		public function decompress(): bool {}

		/**
		 * Deletes the metadata of the entry
		 * <p>Deletes the metadata of the entry, if any.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if successful, <b><code>FALSE</code></b> if the entry had no metadata. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.</p>
		 * @link http://php.net/manual/en/pharfileinfo.delmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::hasMetadata(), PharFileInfo::getMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function delMetadata(): bool {}

		/**
		 * Returns CRC32 code or throws an exception if CRC has not been verified
		 * <p>This returns the <code>crc32()</code> checksum of the file within the Phar archive.</p>
		 * @return int <p>The <code>crc32()</code> checksum of the file within the Phar archive.</p>
		 * @link http://php.net/manual/en/pharfileinfo.getcrc32.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getCRC32(): int {}

		/**
		 * Returns the actual size of the file (with compression) inside the Phar archive
		 * <p>This returns the size of the file within the Phar archive. Uncompressed files will return the same value for getCompressedSize as they will with <code>filesize()</code></p>
		 * @return int <p>The size in bytes of the file within the Phar archive on disk.</p>
		 * @link http://php.net/manual/en/pharfileinfo.getcompressedsize.php
		 * @see PharFileInfo::isCompressed(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::compress(), Phar::decompress(), Phar::getSupportedCompression(), Phar::decompressFiles(), Phar::compressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getCompressedSize(): int {}

		/**
		 * Get the complete file contents of the entry
		 * <p>This function behaves like <code>file_get_contents()</code> but for Phar.</p>
		 * @return string <p>Returns the file contents.</p>
		 * @link http://php.net/manual/en/pharfileinfo.getcontent.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getContent(): string {}

		/**
		 * Returns file-specific meta-data saved with a file
		 * <p>Return meta-data that was saved in the Phar archive's manifest for this file.</p>
		 * @return mixed <p>any PHP variable that can be serialized and is stored as meta-data for the file, or <b><code>NULL</code></b> if no meta-data is stored.</p>
		 * @link http://php.net/manual/en/pharfileinfo.getmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::hasMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getMetadata() {}

		/**
		 * Returns the Phar file entry flags
		 * <p>This returns the flags set in the manifest for a Phar. This will always return <i>0</i> in the current implementation.</p>
		 * @return int <p>The Phar flags (always <i>0</i> in the current implementation)</p>
		 * @link http://php.net/manual/en/pharfileinfo.getpharflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function getPharFlags(): int {}

		/**
		 * Returns the metadata of the entry
		 * <p>Returns the metadata of a file within a phar archive.</p>
		 * @return bool <p>Returns <b><code>FALSE</code></b> if no metadata is set or is <b><code>NULL</code></b>, <b><code>TRUE</code></b> if metadata is not <b><code>NULL</code></b></p>
		 * @link http://php.net/manual/en/pharfileinfo.hasmetadata.php
		 * @see PharFileInfo::setMetadata(), PharFileInfo::getMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.2.0
		 */
		public function hasMetadata(): bool {}

		/**
		 * Returns whether file entry has had its CRC verified
		 * <p>This returns whether a file within a Phar archive has had its CRC verified.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the file has had its CRC verified, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/pharfileinfo.iscrcchecked.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCRCChecked(): bool {}

		/**
		 * Returns whether the entry is compressed
		 * <p>This returns whether a file is compressed within a Phar archive with either Gzip or Bzip2 compression.</p>
		 * @param int $compression_type <p>One of <b><code>Phar::GZ</code></b> or <b><code>Phar::BZ2</code></b>, defaults to any compression.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the file is compressed within the Phar archive, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/pharfileinfo.iscompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::decompress(), PharFileInfo::compress(), Phar::decompress(), Phar::compress(), Phar::canCompress(), Phar::isCompressed(), Phar::getSupportedCompression(), Phar::decompressFiles(), Phar::compressFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCompressed(int $compression_type = 9021976): bool {}

		/**
		 * Returns whether the entry is compressed using bzip2
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>PharFileInfo::isCompressed()</code>, <code>PharFileInfo::decompress()</code>, and <code>PharFileInfo::compress()</code>.</p><p>This returns whether a file is compressed within a Phar archive with Bzip2 compression.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the file is compressed within the Phar archive using Bzip2, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/pharfileinfo.iscompressedbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCompressedBZIP2(): bool {}

		/**
		 * Returns whether the entry is compressed using gz
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>PharFileInfo::isCompressed()</code>, <code>PharFileInfo::decompress()</code>, and <code>PharFileInfo::compress()</code>.</p><p>This returns whether a file is compressed within a Phar archive with Gzip compression.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the file is compressed within the Phar archive using Gzip, <b><code>FALSE</code></b> if not.</p>
		 * @link http://php.net/manual/en/pharfileinfo.iscompressedgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function isCompressedGZ(): bool {}

		/**
		 * Compresses the current Phar entry within the phar using Bzip2 compression
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>PharFileInfo::isCompressed()</code>, <code>PharFileInfo::decompress()</code>, and <code>PharFileInfo::compress()</code>.</p><p>This method compresses the file inside the Phar archive using bzip2 compression. The bzip2 extension must be enabled to take advantage of this feature. In addition, if the file is already compressed using gzip compression, the zlib extension must be enabled in order to decompress the file. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/pharfileinfo.setcompressedbzip2.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setUncompressed(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setCompressedBZIP2(): bool {}

		/**
		 * Compresses the current Phar entry within the phar using gz compression
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>PharFileInfo::isCompressed()</code>, <code>PharFileInfo::decompress()</code>, and <code>PharFileInfo::compress()</code>.</p><p>This method compresses the file inside the Phar archive using gzip compression. The zlib extension must be enabled to take advantage of this feature. In addition, if the file is already compressed using bzip2 compression, the bzip2 extension must be enabled in order to decompress the file. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/pharfileinfo.setcompressedgz.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setUncompressed(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setCompressedGZ(): bool {}

		/**
		 * Sets file-specific meta-data saved with a file
		 * <p><b>PharFileInfo::setMetadata()</b> should only be used to store customized data in a file that cannot be represented with existing information stored with a file. Meta-data can significantly slow down the performance of loading a phar archive if the data is large, or if there are many files containing meta-data. It is important to note that file permissions are natively supported inside a phar; it is possible to set them with the <code>PharFileInfo::chmod()</code> method. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed if the file is within a Phar archive. Files within PharData archives do not have this restriction.</p><p>Some possible uses for meta-data include passing a user/group that should be set when a file is extracted from the phar to disk. Other uses could include explicitly specifying a MIME type to return. However, any useful data that describes a file, but should not be contained inside of it may be stored.</p>
		 * @param mixed $metadata <p>Any PHP variable containing information to store alongside a file</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/pharfileinfo.setmetadata.php
		 * @see PharFileInfo::hasMetadata(), PharFileInfo::getMetadata(), PharFileInfo::delMetadata(), Phar::setMetadata(), Phar::hasMetadata(), Phar::getMetadata()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setMetadata($metadata): void {}

		/**
		 * Uncompresses the current Phar entry within the phar, if it is compressed
		 * <p><b>Note</b>:</p><p>This method has been removed from the phar extension as of version 2.0.0. Alternative implementations are available using <code>PharFileInfo::isCompressed()</code>, <code>PharFileInfo::decompress()</code>, and <code>PharFileInfo::compress()</code>.</p><p>This method decompresses the file inside the Phar archive. Depending on how the file is compressed, the bzip2 or zlib extensions must be enabled to take advantage of this feature. As with all functionality that modifies the contents of a phar, the phar.readonly INI variable must be off in order to succeed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/pharfileinfo.setuncompressed.php
		 * @see PharFileInfo::getCompressedSize(), PharFileInfo::isCompressedBZIP2(), PharFileInfo::isCompressed(), PharFileInfo::isCompressedGZ(), PharFileInfo::setCompressedBZIP2(), PharFileInfo::setCompressedGZ(), Phar::canCompress(), Phar::isCompressed(), Phar::compressAllFilesBZIP2(), Phar::compressAllFilesGZ(), Phar::getSupportedCompression(), Phar::uncompressAllFiles()
		 * @since PHP 5 >= 5.3.0, PHP 7, PECL phar >= 1.0.0
		 */
		public function setUncompressed(): bool {}
	}

}
