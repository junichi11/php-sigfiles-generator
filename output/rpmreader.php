<?php



namespace {

	/**
	 * Closes an RPM file
	 * <p><b>rpm_close()</b> will close an RPM file pointer.</p>
	 * @param resource $rpmr <p>A file pointer resource successfully opened by <code>rpm_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.rpm-close.php
	 * @see rpm_open()
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_close($rpmr): bool {}

	/**
	 * Retrieves a header tag from an RPM file
	 * <p><b>rpm_get_tag()</b> will retrieve a given tag from the RPM file's header and return it.</p>
	 * @param resource $rpmr <p>A file pointer resource successfully opened by <code>rpm_open()</code>.</p>
	 * @param int $tagnum <p>The tag number to retrieve from the RPM header. This value can be specified using the list of constants defined by this module.</p>
	 * @return mixed <p>The return value can be of various types depending on the <code>tagnum</code> supplied to the function.</p>
	 * @link http://php.net/manual/en/function.rpm-get-tag.php
	 * @see rpm_open(), rpm_close()
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_get_tag($rpmr, int $tagnum) {}

	/**
	 * Tests a filename for validity as an RPM file
	 * <p><b>rpm_is_valid()</b> will test an RPM file for validity as an RPM file. This is not the same as <code>rpm_open()</code> as it only checks the file for validity but does not return a file pointer to be used by further functions.</p>
	 * @param string $filename <p>The filename of the RPM file you wish to check for validity.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.rpm-is-valid.php
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_is_valid(string $filename): bool {}

	/**
	 * Opens an RPM file
	 * <p><b>rpm_open()</b> will open an RPM file and will determine if the file is a valid RPM file.</p>
	 * @param string $filename <p>The filename of the RPM file you wish to open.</p>
	 * @return resource <p>If the open succeeds, then <b>rpm_open()</b> will return a file pointer resource to the newly opened file. On error, the function will return <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.rpm-open.php
	 * @see rpm_close()
	 * @since PECL rpmreader >= 0.1.0
	 */
	function rpm_open(string $filename) {}

	/**
	 * Returns a string representing the current version of the rpmreader extension
	 * <p><b>rpm_version()</b> will return the current version of the rpmreader extension.</p>
	 * @return string <p><b>rpm_version()</b> will return a string representing the rpmreader version currently loaded in PHP.</p>
	 * @link http://php.net/manual/en/function.rpm-version.php
	 * @since PECL rpmreader >= 0.3.0
	 */
	function rpm_version(): string {}

	define('RPMREADER_ARCH', null);

	define('RPMREADER_ARCHIVESIZE', null);

	/**
	 * The list of the names of files in the RPM package without path information. This tag is used in conjunction with RPMREADER_DIRINDEXES and RPMREADER_DIRNAMES to reconstruct filenames in the RPM package stored with the new "CompressedFileNames" method in RPM.
	 */
	define('RPMREADER_BASENAMES', null);

	define('RPMREADER_BUILDARCHS', null);

	/**
	 * The name of the host on which the RPM package was built.
	 */
	define('RPMREADER_BUILDHOST', null);

	/**
	 * The date and time when the RPM package was built.
	 */
	define('RPMREADER_BUILDTIME', null);

	define('RPMREADER_CACHECTIME', null);

	define('RPMREADER_CACHEPKGMTIME', null);

	define('RPMREADER_CACHEPKGPATH', null);

	define('RPMREADER_CACHEPKGSIZE', null);

	/**
	 * The list of changelog entry names.
	 */
	define('RPMREADER_CHANGELOGNAME', null);

	/**
	 * The list of the text from changelog entries.
	 */
	define('RPMREADER_CHANGELOGTEXT', null);

	/**
	 * The list of dates from changelog entries.
	 */
	define('RPMREADER_CHANGELOGTIME', null);

	define('RPMREADER_CLASSDICT', null);

	define('RPMREADER_CONFLICTFLAGS', null);

	define('RPMREADER_CONFLICTNAME', null);

	define('RPMREADER_CONFLICTVERSION', null);

	define('RPMREADER_COOKIE', null);

	define('RPMREADER_COPYRIGHT', null);

	define('RPMREADER_DEPENDSDICT', null);

	/**
	 * The full description text of the RPM package.
	 */
	define('RPMREADER_DESCRIPTION', null);

	/**
	 * The list of indices that relate directory names to files in the RPM package. This tag is used in conjunction with RPMREADER_BASENAMES and RPMREADER_DIRNAMES to reconstruct filenames in the RPM package stored with the new "CompressedFileNames" method in RPM.
	 */
	define('RPMREADER_DIRINDEXES', null);

	/**
	 * The list of directory names used by files in the RPM package. This tag is used in conjunction with RPMREADER_BASENAMES and RPMREADER_DIRINDEXES to reconstruct filenames in the RPM package stored with the new "CompressedFileNames" method in RPM.
	 */
	define('RPMREADER_DIRNAMES', null);

	define('RPMREADER_DISTRIBUTION', null);

	define('RPMREADER_DISTURL', null);

	define('RPMREADER_EPOCH', null);

	define('RPMREADER_EXCLUDEARCH', null);

	define('RPMREADER_EXCLUDEOS', null);

	define('RPMREADER_EXCLUSIVEARCH', null);

	define('RPMREADER_EXCLUSIVEOS', null);

	define('RPMREADER_FILECLASS', null);

	define('RPMREADER_FILECOLORS', null);

	define('RPMREADER_FILECONTEXTS', null);

	define('RPMREADER_FILEDEPENDSN', null);

	define('RPMREADER_FILEDEPENDSX', null);

	define('RPMREADER_FILEDEVICES', null);

	define('RPMREADER_FILEFLAGS', null);

	define('RPMREADER_FILEGROUPNAME', null);

	define('RPMREADER_FILEINODES', null);

	define('RPMREADER_FILELANGS', null);

	define('RPMREADER_FILELINKTOS', null);

	define('RPMREADER_FILEMD5S', null);

	define('RPMREADER_FILEMODES', null);

	define('RPMREADER_FILEMTIMES', null);

	define('RPMREADER_FILERDEVS', null);

	define('RPMREADER_FILESIZES', null);

	define('RPMREADER_FILESTATES', null);

	define('RPMREADER_FILEUSERNAME', null);

	define('RPMREADER_FILEVERIFYFLAGS', null);

	define('RPMREADER_FSCONTEXTS', null);

	define('RPMREADER_GIF', null);

	define('RPMREADER_GROUP', null);

	define('RPMREADER_ICON', null);

	define('RPMREADER_INSTALLCOLOR', null);

	define('RPMREADER_INSTALLTID', null);

	define('RPMREADER_INSTALLTIME', null);

	define('RPMREADER_INSTPREFIXES', null);

	define('RPMREADER_LICENSE', null);

	/**
	 * The maximum valid value of any RPM tag number.
	 */
	define('RPMREADER_MAXIMUM', null);

	/**
	 * The minimum valid value of any RPM tag number.
	 */
	define('RPMREADER_MINIMUM', null);

	/**
	 * The name of the RPM package.
	 */
	define('RPMREADER_NAME', null);

	define('RPMREADER_OBSOLETEFLAGS', null);

	define('RPMREADER_OBSOLETENAME', null);

	define('RPMREADER_OBSOLETES', null);

	define('RPMREADER_OBSOLETEVERSION', null);

	/**
	 * The list of files in an RPM package (deprecated format). The correct way is now to use a combination of 3 tags (RPMREADER_BASENAMES, RPMREADER_DIRINDEXES, RPMREADER_DIRNAMES) in what RPM now calls "CompressedFileNames". This tag is still used in older RPM files that did not use the "CompressedFileNames" method and is maintained for backward compatibility.
	 */
	define('RPMREADER_OLDFILENAMES', null);

	define('RPMREADER_OPTFLAGS', null);

	define('RPMREADER_OS', null);

	define('RPMREADER_PACKAGER', null);

	define('RPMREADER_PATCH', null);

	define('RPMREADER_PATCHESFLAGS', null);

	define('RPMREADER_PATCHESNAME', null);

	define('RPMREADER_PATCHESVERSION', null);

	define('RPMREADER_PAYLOADCOMPRESSOR', null);

	define('RPMREADER_PAYLOADFLAGS', null);

	define('RPMREADER_PAYLOADFORMAT', null);

	define('RPMREADER_PLATFORM', null);

	define('RPMREADER_POLICIES', null);

	define('RPMREADER_POSTIN', null);

	define('RPMREADER_POSTINPROG', null);

	define('RPMREADER_POSTUN', null);

	define('RPMREADER_POSTUNPROG', null);

	define('RPMREADER_PREFIXES', null);

	define('RPMREADER_PREIN', null);

	define('RPMREADER_PREINPROG', null);

	define('RPMREADER_PREUN', null);

	define('RPMREADER_PREUNPROG', null);

	define('RPMREADER_PROVIDEFLAGS', null);

	define('RPMREADER_PROVIDENAME', null);

	define('RPMREADER_PROVIDES', null);

	define('RPMREADER_PROVIDEVERSION', null);

	define('RPMREADER_RECONTEXTS', null);

	/**
	 * The release of the RPM package.
	 */
	define('RPMREADER_RELEASE', null);

	define('RPMREADER_REMOVETID', null);

	define('RPMREADER_REQUIREFLAGS', null);

	define('RPMREADER_REQUIRENAME', null);

	define('RPMREADER_REQUIREVERSION', null);

	define('RPMREADER_RHNPLATFORM', null);

	define('RPMREADER_RPMVERSION', null);

	define('RPMREADER_SERIAL', null);

	/**
	 * The size of the RPM package.
	 */
	define('RPMREADER_SIZE', null);

	define('RPMREADER_SOURCE', null);

	define('RPMREADER_SOURCEPKGID', null);

	define('RPMREADER_SOURCERPM', null);

	/**
	 * The summary text of the RPM package.
	 */
	define('RPMREADER_SUMMARY', null);

	define('RPMREADER_TRIGGERFLAGS', null);

	define('RPMREADER_TRIGGERINDEX', null);

	define('RPMREADER_TRIGGERNAME', null);

	define('RPMREADER_TRIGGERSCRIPTPROG', null);

	define('RPMREADER_TRIGGERSCRIPTS', null);

	define('RPMREADER_TRIGGERVERSION', null);

	define('RPMREADER_URL', null);

	define('RPMREADER_VENDOR', null);

	define('RPMREADER_VERIFYSCRIPT', null);

	define('RPMREADER_VERIFYSCRIPTPROG', null);

	/**
	 * The version of the RPM package.
	 */
	define('RPMREADER_VERSION', null);

	define('RPMREADER_XPM', null);

}
