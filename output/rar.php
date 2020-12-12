<?php



namespace {

	/**
	 * <p>This class represents a RAR archive, which may be formed by several volumes (parts) and which contains a number of RAR entries (i.e., files, directories and other special objects such as symbolic links).</p>
	 * <p>Objects of this class can be traversed, yielding the entries stored in the respective RAR archive. Those entries can also be obtained through <code>RarArchive::getEntry()</code> and <code>RarArchive::getEntries()</code>.</p>
	 * @link https://php.net/manual/en/class.rararchive.php
	 * @since PECL rar >= 2.0.0
	 */
	final class RarArchive implements \Traversable {

		/**
		 * Get text representation
		 * <p>Provides a string representation for this <code>RarArchive</code> object. It currently shows the full path name of the archive volume that was opened and whether the resource is valid or was already closed through a call to <code>RarArchive::close()</code>.</p><p>This method may be used only for debugging purposes, as there are no guarantees as to which information the result contains or how it is formatted.</p>
		 * @return string <p>A textual representation of this <code>RarArchive</code> object. The content of this representation is unspecified.</p>
		 * @link https://php.net/manual/en/rararchive.tostring.php
		 * @since PECL rar >= 2.0.0
		 */
		public function __toString(): string {}

		/**
		 * Close RAR archive and free all resources
		 * <p>Close RAR archive and free all allocated resources.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rararchive.close.php
		 * @since PECL rar >= 2.0.0
		 */
		public function close(): bool {}

		/**
		 * Get comment text from the RAR archive
		 * <p>Get the (global) comment stored in the RAR archive. It may be up to 64 KiB long.</p><p><b>Note</b>:</p><p>This extension does not support comments at the entry level.</p>
		 * @return string <p>Returns the comment or <b><code>NULL</code></b> if there is none.</p><p><b>Note</b>:</p><p>RAR has currently no support for unicode comments. The encoding of the result of this function is not specified, but it will probably be Windows-1252.</p>
		 * @link https://php.net/manual/en/rararchive.getcomment.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getComment(): string {}

		/**
		 * Get full list of entries from the RAR archive
		 * <p>Get entries list (files and directories) from the RAR archive.</p><p><b>Note</b>:</p><p>If the archive has entries with the same name, this method, together with <code>RarArchive</code> <code>foreach</code> iteration and array-like access with numeric indexes, are the only ones to access all the entries (i.e., <code>RarArchive::getEntry()</code> and the  <code>rar://</code> wrapper are insufficient).</p>
		 * @return array|false <p><b>rar_list()</b> returns array of <code>RarEntry</code> objects or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rararchive.getentries.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getEntries(): array|false {}

		/**
		 * Get entry object from the RAR archive
		 * <p>Get entry object (file or directory) from the RAR archive.</p><p><b>Note</b>:</p><p>You can also get entry objects using <code>RarArchive::getEntries()</code>.</p><p>Note that a RAR archive can have multiple entries with the same name; this method will retrieve only the first.</p>
		 * @param string $entryname <p>Path to the entry within the RAR archive.</p> <p><b>Note</b>:</p><p>The path must be the same returned by <code>RarEntry::getName()</code>.</p>
		 * @return RarEntry|false <p>Returns the matching <code>RarEntry</code> object or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rararchive.getentry.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getEntry(string $entryname): \RarEntry|false {}

		/**
		 * Test whether an archive is broken (incomplete)
		 * <p>This function determines whether an archive is incomplete, i.e., if a volume is missing or a volume is truncated.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the archive is broken, <b><code>FALSE</code></b> otherwise. This function may also return <b><code>FALSE</code></b> if the passed file has already been closed. The only way to tell the two cases apart is to enable exceptions with <code>RarException::setUsingExceptions()</code>; however, this should be unnecessary as a program should not operate on closed files.</p>
		 * @link https://php.net/manual/en/rararchive.isbroken.php
		 * @since PECL rar >= 3.0.0
		 */
		public function isBroken(): bool {}

		/**
		 * Check whether the RAR archive is solid
		 * <p>Check whether the RAR archive is solid. Individual file extraction is slower on solid archives.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the archive is solid, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/rararchive.issolid.php
		 * @since PECL rar >= 2.0.0
		 */
		public function isSolid(): bool {}

		/**
		 * Open RAR archive
		 * <p>Open specified RAR archive and return <code>RarArchive</code> instance representing it.</p><p><b>Note</b>:</p><p>If opening a multi-volume archive, the path of the first volume should be passed as the first parameter. Otherwise, not all files will be shown. This is by design.</p>
		 * @param string $filename <p>Path to the Rar archive.</p>
		 * @param string $password <p>A plain password, if needed to decrypt the headers. It will also be used by default if encrypted files are found. Note that the files may have different passwords in respect to the headers and among them.</p>
		 * @param callable $volume_callback <p>A function that receives one parameter &ndash; the path of the volume that was not found &ndash; and returns a string with the correct path for such volume or <b><code>NULL</code></b> if such volume does not exist or is not known. The programmer should ensure the passed function doesn't cause loops as this function is called repeatedly if the path returned in a previous call did not correspond to the needed volume. Specifying this parameter omits the notice that would otherwise be emitted whenever a volume is not found; an implementation that only returns <b><code>NULL</code></b> can therefore be used to merely omit such notices.</p>
		 * @return RarArchive|false <p>Returns the requested <code>RarArchive</code> instance or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rararchive.open.php
		 * @since PECL rar >= 2.0.0
		 */
		public static function open(string $filename, string $password = NULL, callable $volume_callback = NULL): \RarArchive|false {}

		/**
		 * Whether opening broken archives is allowed
		 * <p>This method defines whether broken archives can be read or all the operations that attempt to extract the archive entries will fail. Broken archives are archives for which no error is detected when the file is opened but an error occurs when reading the entries.</p>
		 * @param bool $allow_broken <p>Whether to allow reading broken files (<b><code>TRUE</code></b>) or not (<b><code>FALSE</code></b>).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> or <b><code>FALSE</code></b> on failure. It will only fail if the file has already been closed.</p>
		 * @link https://php.net/manual/en/rararchive.setallowbroken.php
		 * @since PECL rar >= 3.0.0
		 */
		public function setAllowBroken(bool $allow_broken): bool {}
	}

	/**
	 * <p>A RAR entry, representing a directory or a compressed file inside a RAR archive.</p>
	 * @link https://php.net/manual/en/class.rarentry.php
	 * @since PECL rar >= 0.1
	 */
	final class RarEntry {

		/**
		 * @var int <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, MS-DOS was used to add this entry. Use instead of <b><code>RAR_HOST_MSDOS</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const HOST_MSDOS = 0;

		/**
		 * @var int <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, OS/2 was used to add this entry. Intended to replace <b><code>RAR_HOST_OS2</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const HOST_OS2 = 1;

		/**
		 * @var int <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, Microsoft Windows was used to add this entry. Intended to replace <b><code>RAR_HOST_WIN32</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const HOST_WIN32 = 2;

		/**
		 * @var int <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, an unspecified UNIX OS was used to add this entry. Intended to replace <b><code>RAR_HOST_UNIX</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const HOST_UNIX = 3;

		/**
		 * @var int <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, Mac OS was used to add this entry.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const HOST_MACOS = 4;

		/**
		 * @var int <p>If the return value of <code>RarEntry::getHostOs()</code> equals this constant, BeOS was used to add this entry. Intended to replace <b><code>RAR_HOST_BEOS</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const HOST_BEOS = 5;

		/**
		 * @var int <p>Bit that represents a Windows entry with a read-only attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_READONLY = 1;

		/**
		 * @var int <p>Bit that represents a Windows entry with a hidden attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_HIDDEN = 2;

		/**
		 * @var int <p>Bit that represents a Windows entry with a system attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_SYSTEM = 4;

		/**
		 * @var int <p>Bit that represents a Windows entry with a directory attribute (entry is a directory). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were not added in WinRAR.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_DIRECTORY = 16;

		/**
		 * @var int <p>Bit that represents a Windows entry with an archive attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_ARCHIVE = 32;

		/**
		 * @var int <p>Bit that represents a Windows entry with a device attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_DEVICE = 64;

		/**
		 * @var int <p>Bit that represents a Windows entry with a normal file attribute (entry is NOT a directory). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were not added in WinRAR.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_NORMAL = 128;

		/**
		 * @var int <p>Bit that represents a Windows entry with a temporary attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_TEMPORARY = 256;

		/**
		 * @var int <p>Bit that represents a Windows entry with a sparse file attribute (file is an NTFS sparse file). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_SPARSE_FILE = 512;

		/**
		 * @var int <p>Bit that represents a Windows entry with a reparse point attribute (entry is an NTFS reparse point, e.g. a directory junction or a mount file system). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_REPARSE_POINT = 1024;

		/**
		 * @var int <p>Bit that represents a Windows entry with a compressed attribute (NTFS only). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_COMPRESSED = 2048;

		/**
		 * @var int <p>Bit that represents a Windows entry with an offline attribute (entry is offline and not accessible). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_OFFLINE = 4096;

		/**
		 * @var int <p>Bit that represents a Windows entry with a not content indexed attribute (entry is to be indexed). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_NOT_CONTENT_INDEXED = 8192;

		/**
		 * @var int <p>Bit that represents a Windows entry with an encrypted attribute (NTFS only). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_ENCRYPTED = 16384;

		/**
		 * @var int <p>Bit that represents a Windows entry with a virtual attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is Microsoft Windows.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_WIN_VIRTUAL = 65536;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is world executable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_WORLD_EXECUTE = 1;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is world writable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_WORLD_WRITE = 2;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is world readable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_WORLD_READ = 4;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is group executable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_GROUP_EXECUTE = 8;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is group writable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_GROUP_WRITE = 16;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is group readable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_GROUP_READ = 32;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is owner executable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_OWNER_EXECUTE = 64;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is owner writable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_OWNER_WRITE = 128;

		/**
		 * @var int <p>Bit that represents a UNIX entry that is owner readable. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_OWNER_READ = 256;

		/**
		 * @var int <p>Bit that represents the UNIX sticky bit. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_STICKY = 512;

		/**
		 * @var int <p>Bit that represents the UNIX setgid attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SETGID = 1024;

		/**
		 * @var int <p>Bit that represents the UNIX setuid attribute. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SETUID = 2048;

		/**
		 * @var int <p>Mask to isolate the last four bits (nibble) of UNIX attributes (_S_IFMT, the type of file mask). To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constants <b><code>RarEntry::ATTRIBUTE_UNIX_FIFO</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_CHAR_DEV</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_DIRECTORY</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_BLOCK_DEV</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_REGULAR_FILE</code></b>, <b><code>RarEntry::ATTRIBUTE_UNIX_SYM_LINK</code></b> and <b><code>RarEntry::ATTRIBUTE_UNIX_SOCKET</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_FINAL_QUARTET = 61440;

		/**
		 * @var int <p>Unix FIFOs will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_FIFO = 4096;

		/**
		 * @var int <p>Unix character devices will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_CHAR_DEV = 8192;

		/**
		 * @var int <p>Unix directories will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were added in other operating systems.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_DIRECTORY = 16384;

		/**
		 * @var int <p>Unix block devices will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_BLOCK_DEV = 24576;

		/**
		 * @var int <p>Unix regular files (not directories) will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>. See also <code>RarEntry::isDirectory()</code>, which also works with entries that were added in other operating systems.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_REGULAR_FILE = 32768;

		/**
		 * @var int <p>Unix symbolic links will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SYM_LINK = 40960;

		/**
		 * @var int <p>Unix sockets will have attributes whose last four bits have this value. To be used with <code>RarEntry::getAttr()</code> on entries whose host OS is UNIX and with the constant  <b><code>RarEntry::ATTRIBUTE_UNIX_FINAL_QUARTET</code></b>.</p>
		 * @link https://php.net/manual/en/class.rarentry.php
		 */
		const ATTRIBUTE_UNIX_SOCKET = 49152;

		/**
		 * Get text representation of entry
		 * <p><b>RarEntry::__toString()</b> returns a textual representation for this entry. It includes whether the entry is a file or a directory (symbolic links and other special objects will be treated as files), the UTF-8 name of the entry and its CRC. The form and content of this representation may be changed in the future, so they cannot be relied upon.</p>
		 * @return string <p>A textual representation for the entry.</p>
		 * @link https://php.net/manual/en/rarentry.tostring.php
		 * @since PECL rar >= 2.0.0
		 */
		public function __toString(): string {}

		/**
		 * Extract entry from the archive
		 * <p><b>RarEntry::extract()</b> extracts the entry's data. It will create new file in the specified <code>dir</code> with the name identical to the entry's name, unless the second argument is specified. See below for more information.</p>
		 * @param string $dir <p>Path to the directory where files should be extracted. This parameter is considered if and only if <code>filepath</code> is not. If both parameters are empty an extraction to the current directory will be attempted.</p>
		 * @param string $filepath <p>Path (relative or absolute) containing the directory and filename of the extracted file. This parameter overrides both the parameter <code>dir</code> and the original file name.</p>
		 * @param string $password <p>The password used to encrypt this entry. If the entry is not encrypted, this value will not be used and can be omitted. If this parameter is omitted and the entry is encrypted, the password given to <code>rar_open()</code>, if any, will be used. If a wrong password is given, either explicitly or implicitly via <code>rar_open()</code>, CRC checking will fail and this method will fail and return <b><code>FALSE</code></b>. If no password is given and one is required, this method will fail and return <b><code>FALSE</code></b>. You can check whether an entry is encrypted with <code>RarEntry::isEncrypted()</code>.</p>
		 * @param bool $extended_data <p>If <b><code>TRUE</code></b>, extended information such as NTFS ACLs and Unix owner information will be set in the extract files, as long as it's present in the archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rarentry.extract.php
		 * @since PECL rar >= 0.1
		 */
		public function extract(string $dir, string $filepath = "", string $password = NULL, bool $extended_data = FALSE): bool {}

		/**
		 * Get attributes of the entry
		 * <p>Returns the OS-dependent attributes of the archive entry.</p>
		 * @return int <p>Returns the attributes or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getattr.php
		 * @since PECL rar >= 0.1
		 */
		public function getAttr(): int {}

		/**
		 * Get CRC of the entry
		 * <p>Returns an hexadecimal string representation of the CRC of the archive entry.</p>
		 * @return string <p>Returns the CRC of the archive entry or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getcrc.php
		 * @since PECL rar >= 0.1
		 */
		public function getCrc(): string {}

		/**
		 * Get entry last modification time
		 * <p>Gets entry last modification time.</p>
		 * @return string <p>Returns entry last modification time as string in format <code>YYYY-MM-DD HH:II:SS</code>, or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getfiletime.php
		 * @since PECL rar >= 0.1
		 */
		public function getFileTime(): string {}

		/**
		 * Get entry host OS
		 * <p>Returns the code of the host OS of the archive entry.</p>
		 * @return int <p>Returns the code of the host OS, or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.gethostos.php
		 * @since PECL rar >= 0.1
		 */
		public function getHostOs(): int {}

		/**
		 * Get pack method of the entry
		 * <p><b>RarEntry::getMethod()</b> returns number of the method used when adding current archive entry.</p>
		 * @return int <p>Returns the method number or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getmethod.php
		 * @since PECL rar >= 0.1
		 */
		public function getMethod(): int {}

		/**
		 * Get name of the entry
		 * <p>Returns the name (with path) of the archive entry.</p>
		 * @return string <p>Returns the entry name as a string, or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getname.php
		 * @since PECL rar >= 0.1
		 */
		public function getName(): string {}

		/**
		 * Get packed size of the entry
		 * <p>Get packed size of the archive entry.</p><p><b>Note</b>:</p><p>Note that on platforms with 32-bit longs (that includes Windows x64), the maximum size returned is capped at 2 GiB. Check the constant <b><code>PHP_INT_MAX</code></b>.</p>
		 * @return int <p>Returns the packed size, or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getpackedsize.php
		 * @since PECL rar >= 0.1
		 */
		public function getPackedSize(): int {}

		/**
		 * Get file handler for entry
		 * <p>Returns a file handler that supports read operations. This handler provides on-the-fly decompression for this entry.</p><p>The handler is not invalidated by calling <code>rar_close()</code>.</p><p>The resulting stream has no integrity verification. In particular, file corruption and decryption with a wrong a key will not be detected. It is the programmer's responsability to use the entry's CRC to check for integrity, if he so wishes.</p>
		 * @param string $password <p>The password used to encrypt this entry. If the entry is not encrypted, this value will not be used and can be omitted. If this parameter is omitted and the entry is encrypted, the password given to <code>rar_open()</code>, if any, will be used. If a wrong password is given, either explicitly or implicitly via <code>rar_open()</code>, this method's resulting stream will produce wrong output. If no password is given and one is required, this method will fail and return <b><code>FALSE</code></b>. You can check whether an entry is encrypted with <code>RarEntry::isEncrypted()</code>.</p>
		 * @return resource|false <p>The file handler or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rarentry.getstream.php
		 * @since PECL rar >= 2.0.0
		 */
		public function getStream(string $password = NULL): resource|false {}

		/**
		 * Get unpacked size of the entry
		 * <p>Get unpacked size of the archive entry.</p><p><b>Note</b>:</p><p>Note that on platforms with 32-bit longs (that includes Windows x64), the maximum size returned is capped at 2 GiB. Check the constant <b><code>PHP_INT_MAX</code></b>.</p>
		 * @return int <p>Returns the unpacked size, or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getunpackedsize.php
		 * @since PECL rar >= 0.1
		 */
		public function getUnpackedSize(): int {}

		/**
		 * Get minimum version of RAR program required to unpack the entry
		 * <p>Returns minimum version of RAR program (e.g. WinRAR) required to unpack the entry. It is encoded as 10 &#42; major version + minor version.</p>
		 * @return int <p>Returns the version or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/rarentry.getversion.php
		 * @since PECL rar >= 0.1
		 */
		public function getVersion(): int {}

		/**
		 * Test whether an entry represents a directory
		 * <p>Tests whether the current entry is a directory.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this entry is a directory and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/rarentry.isdirectory.php
		 * @since PECL rar >= 2.0.0
		 */
		public function isDirectory(): bool {}

		/**
		 * Test whether an entry is encrypted
		 * <p>Tests whether the current entry contents are encrypted.</p><p><b>Note</b>:</p><p>The password used may differ between files inside the same RAR archive.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the current entry is encrypted and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/rarentry.isencrypted.php
		 * @since PECL rar >= 2.0.0
		 */
		public function isEncrypted(): bool {}
	}

	/**
	 * <p>This class serves two purposes: it is the type of the exceptions thrown by the RAR extension functions and methods and it allows, through static methods to query and define the error behaviour of the extension, i.e., whether exceptions are thrown or only warnings are emitted.</p>
	 * <p>The following error codes are used:</p>
	 * @link https://php.net/manual/en/class.rarexception.php
	 * @since PECL rar >= 2.0.0
	 */
	final class RarException extends \Exception {

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

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
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

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
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

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

		/**
		 * Check whether error handling with exceptions is in use
		 * <p>Checks whether the RAR functions will emit warnings and return error values or whether they will throw exceptions in most of the circumstances (does not include some programmatic errors such as passing the wrong type of arguments).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if exceptions are being used, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/rarexception.isusingexceptions.php
		 * @since PECL rar >= 2.0.0
		 */
		public static function isUsingExceptions(): bool {}

		/**
		 * Activate and deactivate error handling with exceptions
		 * <p>If and only if the argument is <b><code>TRUE</code></b>, then, instead of emitting warnings and returning a special value indicating error when the UnRAR library encounters an error, an exception of type <code>RarException</code> will be thrown.</p><p>Exceptions will also be thrown for the following errors, which occur outside the library (their error code will be -1):</p>
		 * @param bool $using_exceptions <p>Should be <b><code>TRUE</code></b> to activate exception throwing, <b><code>FALSE</code></b> to deactivate (the default).</p>
		 * @return void
		 * @link https://php.net/manual/en/rarexception.setusingexceptions.php
		 * @since PECL rar >= 2.0.0
		 */
		public static function setUsingExceptions(bool $using_exceptions): void {}
	}

	/**
	 * Test whether an archive is broken (incomplete)
	 * <p>This function determines whether an archive is incomplete, i.e., if a volume is missing or a volume is truncated.</p>
	 * @param \RarArchive $rarfile <p>A <code>RarArchive</code> object, opened with <code>rar_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the archive is broken, <b><code>FALSE</code></b> otherwise. This function may also return <b><code>FALSE</code></b> if the passed file has already been closed. The only way to tell the two cases apart is to enable exceptions with <code>RarException::setUsingExceptions()</code>; however, this should be unnecessary as a program should not operate on closed files.</p>
	 * @link https://php.net/manual/en/rararchive.isbroken.php
	 * @since PECL rar >= 3.0.0
	 */
	function rar_broken_is(\RarArchive $rarfile): bool {}

	/**
	 * Close RAR archive and free all resources
	 * <p>Close RAR archive and free all allocated resources.</p>
	 * @param \RarArchive $rarfile <p>A <code>RarArchive</code> object, opened with <code>rar_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/rararchive.close.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_close(\RarArchive $rarfile): bool {}

	/**
	 * Get comment text from the RAR archive
	 * <p>Get the (global) comment stored in the RAR archive. It may be up to 64 KiB long.</p><p><b>Note</b>:</p><p>This extension does not support comments at the entry level.</p>
	 * @param \RarArchive $rarfile <p>A <code>RarArchive</code> object, opened with <code>rar_open()</code>.</p>
	 * @return string <p>Returns the comment or <b><code>NULL</code></b> if there is none.</p><p><b>Note</b>:</p><p>RAR has currently no support for unicode comments. The encoding of the result of this function is not specified, but it will probably be Windows-1252.</p>
	 * @link https://php.net/manual/en/rararchive.getcomment.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_comment_get(\RarArchive $rarfile): string {}

	/**
	 * Get entry object from the RAR archive
	 * <p>Get entry object (file or directory) from the RAR archive.</p><p><b>Note</b>:</p><p>You can also get entry objects using <code>RarArchive::getEntries()</code>.</p><p>Note that a RAR archive can have multiple entries with the same name; this method will retrieve only the first.</p>
	 * @param \RarArchive $rarfile <p>A <code>RarArchive</code> object, opened with <code>rar_open()</code>.</p>
	 * @param string $entryname <p>Path to the entry within the RAR archive.</p> <p><b>Note</b>:</p><p>The path must be the same returned by <code>RarEntry::getName()</code>.</p>
	 * @return RarEntry|false <p>Returns the matching <code>RarEntry</code> object or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/rararchive.getentry.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_entry_get(\RarArchive $rarfile, string $entryname): \RarEntry|false {}

	/**
	 * Get full list of entries from the RAR archive
	 * <p>Get entries list (files and directories) from the RAR archive.</p><p><b>Note</b>:</p><p>If the archive has entries with the same name, this method, together with <code>RarArchive</code> <code>foreach</code> iteration and array-like access with numeric indexes, are the only ones to access all the entries (i.e., <code>RarArchive::getEntry()</code> and the  <code>rar://</code> wrapper are insufficient).</p>
	 * @param \RarArchive $rarfile <p>A <code>RarArchive</code> object, opened with <code>rar_open()</code>.</p>
	 * @return array|false <p><b>rar_list()</b> returns array of <code>RarEntry</code> objects or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/rararchive.getentries.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_list(\RarArchive $rarfile): array|false {}

	/**
	 * Open RAR archive
	 * <p>Open specified RAR archive and return <code>RarArchive</code> instance representing it.</p><p><b>Note</b>:</p><p>If opening a multi-volume archive, the path of the first volume should be passed as the first parameter. Otherwise, not all files will be shown. This is by design.</p>
	 * @param string $filename <p>Path to the Rar archive.</p>
	 * @param string $password <p>A plain password, if needed to decrypt the headers. It will also be used by default if encrypted files are found. Note that the files may have different passwords in respect to the headers and among them.</p>
	 * @param callable $volume_callback <p>A function that receives one parameter &ndash; the path of the volume that was not found &ndash; and returns a string with the correct path for such volume or <b><code>NULL</code></b> if such volume does not exist or is not known. The programmer should ensure the passed function doesn't cause loops as this function is called repeatedly if the path returned in a previous call did not correspond to the needed volume. Specifying this parameter omits the notice that would otherwise be emitted whenever a volume is not found; an implementation that only returns <b><code>NULL</code></b> can therefore be used to merely omit such notices.</p>
	 * @return RarArchive|false <p>Returns the requested <code>RarArchive</code> instance or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/rararchive.open.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_open(string $filename, string $password = NULL, callable $volume_callback = NULL): \RarArchive|false {}

	/**
	 * Check whether the RAR archive is solid
	 * <p>Check whether the RAR archive is solid. Individual file extraction is slower on solid archives.</p>
	 * @param \RarArchive $rarfile <p>A <code>RarArchive</code> object, opened with <code>rar_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the archive is solid, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/rararchive.issolid.php
	 * @since PECL rar >= 2.0.0
	 */
	function rar_solid_is(\RarArchive $rarfile): bool {}

	/**
	 * Cache hits and misses for the URL wrapper
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.rar-wrapper-cache-stats.php
	 * @since PECL rar >= 3.0.0
	 */
	function rar_wrapper_cache_stats(): string {}

	/**
	 * Use <b><code>RarEntry::HOST_BEOS</code></b> instead.
	 */
	define('RAR_HOST_BEOS', null);

	/**
	 * Use <b><code>RarEntry::HOST_MSDOS</code></b> instead.
	 */
	define('RAR_HOST_MSDOS', null);

	/**
	 * Use <b><code>RarEntry::HOST_OS2</code></b> instead.
	 */
	define('RAR_HOST_OS2', null);

	/**
	 * Use <b><code>RarEntry::HOST_UNIX</code></b> instead.
	 */
	define('RAR_HOST_UNIX', null);

	/**
	 * Use <b><code>RarEntry::HOST_WIN32</code></b> instead.
	 */
	define('RAR_HOST_WIN32', null);

}
