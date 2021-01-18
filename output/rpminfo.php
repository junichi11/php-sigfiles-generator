<?php



namespace {

	/**
	 * Add tag retrieved in query
	 * <p>Add an additional retrieved tag in subsequent queries.</p>
	 * @param int $tag <p>One of RPMTAG_&#42; constant, see the rpminfo constants page.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rpmaddtag.php
	 * @see rpminfo(), rpmdbinfo(), rpmdbsearch()
	 * @since PECL rpminfo >= 0.5.0
	 */
	function rpmaddtag(int $tag): bool {}

	/**
	 * Get information from installed RPM
	 * <p>Retrieve information about an installed package, from the system RPM database.</p>
	 * @param string $nevr <p>Name with optional epoch, version and release.</p>
	 * @param bool $full <p>If <b><code>true</code></b> all information headers for the file are retrieved, else only a minimal set.</p>
	 * @return array <p>An <code>array</code> of <code>array</code> of information or NULL on error.</p>
	 * @link https://php.net/manual/en/function.rpmdbinfo.php
	 * @see rpmaddtag()
	 * @since PECL rpminfo >= 0.2.0
	 */
	function rpmdbinfo(string $nevr, bool $full = false): array {}

	/**
	 * Search RPM packages
	 * <p>Search packages in the system RPM database.</p>
	 * @param string $pattern <p>Value to search for.</p>
	 * @param int $rpmtag <p>Search criterion, one of RPMTAG_&#42; constant, see the rpminfo constants page.</p>
	 * @param int $rpmmire <p>Pattern type, one of RPMMIRE_&#42; constant, see the rpminfo constants page. When &lt; 0 the criterion must equals the value, and database index is used if possible.</p>
	 * @param bool $full <p>If <b><code>true</code></b> all information headers for the file are retrieved, else only a minimal set.</p>
	 * @return array <p>An <code>array</code> of <code>array</code> of information or NULL on error.</p>
	 * @link https://php.net/manual/en/function.rpmdbsearch.php
	 * @see rpmaddtag()
	 * @since PECL rpminfo >= 0.3.0
	 */
	function rpmdbsearch(string $pattern, int $rpmtag = RPMTAG_NAME, int $rpmmire = -1, bool $full = false): array {}

	/**
	 * Get information from a RPM file
	 * <p>Retrieve information about a local file, a RPM package.</p>
	 * @param string $path <p>Path of the RPM file.</p>
	 * @param bool $full <p>If <b><code>true</code></b> all information headers for the file are retrieved, else only a minimal set.</p>
	 * @param string $error <p>If provided, will receive the possible error message, and will avoid a runtime warning.</p>
	 * @return array <p>An <code>array</code> of information or NULL on error.</p>
	 * @link https://php.net/manual/en/function.rpminfo.php
	 * @see rpmaddtag()
	 * @since PECL rpminfo >= 0.1.0
	 */
	function rpminfo(string $path, bool $full = false, string &$error = null): array {}

	/**
	 * RPM version comparison
	 * <p>Compare 2 RPM versions.</p>
	 * @param string $evr1 <p>First epoch:version-release string</p>
	 * @param string $evr2 <p>Second epoch:version-release string</p>
	 * @return int <p>Returns &lt; 0 if evr1 is less than evr2, &gt; 0 if evr1 is greater than evr2, and 0 if they are equal.</p>
	 * @link https://php.net/manual/en/function.rpmvercmp.php
	 * @since PECL rpminfo >= 0.1.0
	 */
	function rpmvercmp(string $evr1, string $evr2): int {}

	/**
	 * Search pattern is a regular expression with \., .&#42; and ^...$ added.
	 */
	define('RPMMIRE_DEFAULT', null);

	/**
	 * Search pattern is a glob expression, using fnmatch(3).
	 */
	define('RPMMIRE_GLOB', null);

	/**
	 * Search pattern is a regular expression, using regcomp(3).
	 */
	define('RPMMIRE_REGEX', null);

	/**
	 * Search pattern is a <code>string</code>, using strcmp(3).
	 */
	define('RPMMIRE_STRCMP', null);

	define('RPMSENSE_ANY', null);

	define('RPMSENSE_CONFIG', null);

	define('RPMSENSE_EQUAL', null);

	define('RPMSENSE_FIND_PROVIDES', null);

	define('RPMSENSE_FIND_REQUIRES', null);

	define('RPMSENSE_GREATER', null);

	define('RPMSENSE_INTERP', null);

	define('RPMSENSE_KEYRING', null);

	define('RPMSENSE_LESS', null);

	define('RPMSENSE_MISSINGOK', null);

	define('RPMSENSE_POSTTRANS', null);

	define('RPMSENSE_PREREQ', null);

	define('RPMSENSE_PRETRANS', null);

	define('RPMSENSE_RPMLIB', null);

	define('RPMSENSE_SCRIPT_POST', null);

	define('RPMSENSE_SCRIPT_POSTUN', null);

	define('RPMSENSE_SCRIPT_PRE', null);

	define('RPMSENSE_SCRIPT_PREUN', null);

	define('RPMSENSE_SCRIPT_VERIFY', null);

	define('RPMSENSE_TRIGGERIN', null);

	define('RPMSENSE_TRIGGERPOSTUN', null);

	define('RPMSENSE_TRIGGERPREIN', null);

	define('RPMSENSE_TRIGGERUN', null);

	define('RPMTAG_ARCH', null);

	define('RPMTAG_ARCHIVESIZE', null);

	/**
	 * Name (not path) of files, with database index.
	 */
	define('RPMTAG_BASENAMES', null);

	define('RPMTAG_BUGURL', null);

	define('RPMTAG_BUILDARCHS', null);

	define('RPMTAG_BUILDHOST', null);

	define('RPMTAG_BUILDTIME', null);

	define('RPMTAG_C', null);

	define('RPMTAG_CHANGELOGNAME', null);

	define('RPMTAG_CHANGELOGTEXT', null);

	define('RPMTAG_CHANGELOGTIME', null);

	define('RPMTAG_CLASSDICT', null);

	define('RPMTAG_CONFLICTFLAGS', null);

	/**
	 * Conflicting dependencies, with database index.
	 */
	define('RPMTAG_CONFLICTNAME', null);

	define('RPMTAG_CONFLICTNEVRS', null);

	define('RPMTAG_CONFLICTS', null);

	define('RPMTAG_CONFLICTVERSION', null);

	define('RPMTAG_COOKIE', null);

	define('RPMTAG_DBINSTANCE', null);

	define('RPMTAG_DEPENDSDICT', null);

	define('RPMTAG_DESCRIPTION', null);

	define('RPMTAG_DIRINDEXES', null);

	/**
	 * Directory of files, with database index.
	 */
	define('RPMTAG_DIRNAMES', null);

	define('RPMTAG_DISTRIBUTION', null);

	define('RPMTAG_DISTTAG', null);

	define('RPMTAG_DISTURL', null);

	define('RPMTAG_DSAHEADER', null);

	define('RPMTAG_E', null);

	define('RPMTAG_ENCODING', null);

	define('RPMTAG_ENHANCEFLAGS', null);

	/**
	 * Weak dependencies, with database index, requires librpm &gt;= 4.13.
	 */
	define('RPMTAG_ENHANCENAME', null);

	define('RPMTAG_ENHANCENEVRS', null);

	define('RPMTAG_ENHANCES', null);

	define('RPMTAG_ENHANCEVERSION', null);

	define('RPMTAG_EPOCH', null);

	define('RPMTAG_EPOCHNUM', null);

	define('RPMTAG_EVR', null);

	define('RPMTAG_EXCLUDEARCH', null);

	define('RPMTAG_EXCLUDEOS', null);

	define('RPMTAG_EXCLUSIVEARCH', null);

	define('RPMTAG_EXCLUSIVEOS', null);

	define('RPMTAG_FILECAPS', null);

	define('RPMTAG_FILECLASS', null);

	define('RPMTAG_FILECOLORS', null);

	define('RPMTAG_FILECONTEXTS', null);

	define('RPMTAG_FILEDEPENDSN', null);

	define('RPMTAG_FILEDEPENDSX', null);

	define('RPMTAG_FILEDEVICES', null);

	define('RPMTAG_FILEDIGESTALGO', null);

	define('RPMTAG_FILEDIGESTS', null);

	define('RPMTAG_FILEFLAGS', null);

	define('RPMTAG_FILEGROUPNAME', null);

	define('RPMTAG_FILEINODES', null);

	define('RPMTAG_FILELANGS', null);

	define('RPMTAG_FILELINKTOS', null);

	define('RPMTAG_FILEMD5S', null);

	define('RPMTAG_FILEMODES', null);

	define('RPMTAG_FILEMTIMES', null);

	define('RPMTAG_FILENAMES', null);

	define('RPMTAG_FILENLINKS', null);

	define('RPMTAG_FILEPROVIDE', null);

	define('RPMTAG_FILERDEVS', null);

	define('RPMTAG_FILEREQUIRE', null);

	define('RPMTAG_FILESIGNATURELENGTH', null);

	define('RPMTAG_FILESIGNATURES', null);

	define('RPMTAG_FILESIZES', null);

	define('RPMTAG_FILESTATES', null);

	define('RPMTAG_FILETRIGGERCONDS', null);

	define('RPMTAG_FILETRIGGERFLAGS', null);

	define('RPMTAG_FILETRIGGERINDEX', null);

	/**
	 * File trigger name, with database index, requires librpm &gt;= 4.13.
	 */
	define('RPMTAG_FILETRIGGERNAME', null);

	define('RPMTAG_FILETRIGGERPRIORITIES', null);

	define('RPMTAG_FILETRIGGERSCRIPTFLAGS', null);

	define('RPMTAG_FILETRIGGERSCRIPTPROG', null);

	define('RPMTAG_FILETRIGGERSCRIPTS', null);

	define('RPMTAG_FILETRIGGERTYPE', null);

	define('RPMTAG_FILETRIGGERVERSION', null);

	define('RPMTAG_FILEUSERNAME', null);

	define('RPMTAG_FILEVERIFYFLAGS', null);

	define('RPMTAG_FSCONTEXTS', null);

	define('RPMTAG_GIF', null);

	/**
	 * Group of the package, with database index.
	 */
	define('RPMTAG_GROUP', null);

	define('RPMTAG_HDRID', null);

	define('RPMTAG_HEADERCOLOR', null);

	define('RPMTAG_HEADERI18NTABLE', null);

	define('RPMTAG_HEADERIMAGE', null);

	define('RPMTAG_HEADERIMMUTABLE', null);

	define('RPMTAG_HEADERREGIONS', null);

	define('RPMTAG_HEADERSIGNATURES', null);

	define('RPMTAG_ICON', null);

	define('RPMTAG_INSTALLCOLOR', null);

	/**
	 * Installation transaction ID, with database index.
	 */
	define('RPMTAG_INSTALLTID', null);

	define('RPMTAG_INSTALLTIME', null);

	/**
	 * Path of files, with database index.
	 */
	define('RPMTAG_INSTFILENAMES', null);

	define('RPMTAG_INSTPREFIXES', null);

	define('RPMTAG_LICENSE', null);

	define('RPMTAG_LONGARCHIVESIZE', null);

	define('RPMTAG_LONGFILESIZES', null);

	define('RPMTAG_LONGSIGSIZE', null);

	define('RPMTAG_LONGSIZE', null);

	define('RPMTAG_MODULARITYLABEL', null);

	define('RPMTAG_N', null);

	/**
	 * Package name, with database index.
	 */
	define('RPMTAG_NAME', null);

	define('RPMTAG_NEVR', null);

	define('RPMTAG_NEVRA', null);

	define('RPMTAG_NOPATCH', null);

	define('RPMTAG_NOSOURCE', null);

	define('RPMTAG_NVR', null);

	define('RPMTAG_NVRA', null);

	define('RPMTAG_O', null);

	define('RPMTAG_OBSOLETEFLAGS', null);

	/**
	 * Obsoleted packages, with database index.
	 */
	define('RPMTAG_OBSOLETENAME', null);

	define('RPMTAG_OBSOLETENEVRS', null);

	define('RPMTAG_OBSOLETES', null);

	define('RPMTAG_OBSOLETEVERSION', null);

	define('RPMTAG_OLDENHANCES', null);

	define('RPMTAG_OLDENHANCESFLAGS', null);

	define('RPMTAG_OLDENHANCESNAME', null);

	define('RPMTAG_OLDENHANCESVERSION', null);

	define('RPMTAG_OLDFILENAMES', null);

	define('RPMTAG_OLDSUGGESTS', null);

	define('RPMTAG_OLDSUGGESTSFLAGS', null);

	define('RPMTAG_OLDSUGGESTSNAME', null);

	define('RPMTAG_OLDSUGGESTSVERSION', null);

	define('RPMTAG_OPTFLAGS', null);

	define('RPMTAG_ORDERFLAGS', null);

	define('RPMTAG_ORDERNAME', null);

	define('RPMTAG_ORDERVERSION', null);

	define('RPMTAG_ORIGBASENAMES', null);

	define('RPMTAG_ORIGDIRINDEXES', null);

	define('RPMTAG_ORIGDIRNAMES', null);

	define('RPMTAG_ORIGFILENAMES', null);

	define('RPMTAG_OS', null);

	define('RPMTAG_P', null);

	define('RPMTAG_PACKAGER', null);

	define('RPMTAG_PATCH', null);

	define('RPMTAG_PATCHESFLAGS', null);

	define('RPMTAG_PATCHESNAME', null);

	define('RPMTAG_PATCHESVERSION', null);

	define('RPMTAG_PAYLOADCOMPRESSOR', null);

	define('RPMTAG_PAYLOADDIGEST', null);

	define('RPMTAG_PAYLOADDIGESTALGO', null);

	define('RPMTAG_PAYLOADFLAGS', null);

	define('RPMTAG_PAYLOADFORMAT', null);

	define('RPMTAG_PKGID', null);

	define('RPMTAG_PLATFORM', null);

	define('RPMTAG_POLICIES', null);

	define('RPMTAG_POLICYFLAGS', null);

	define('RPMTAG_POLICYNAMES', null);

	define('RPMTAG_POLICYTYPES', null);

	define('RPMTAG_POLICYTYPESINDEXES', null);

	define('RPMTAG_POSTIN', null);

	define('RPMTAG_POSTINFLAGS', null);

	define('RPMTAG_POSTINPROG', null);

	define('RPMTAG_POSTTRANS', null);

	define('RPMTAG_POSTTRANSFLAGS', null);

	define('RPMTAG_POSTTRANSPROG', null);

	define('RPMTAG_POSTUN', null);

	define('RPMTAG_POSTUNFLAGS', null);

	define('RPMTAG_POSTUNPROG', null);

	define('RPMTAG_PREFIXES', null);

	define('RPMTAG_PREIN', null);

	define('RPMTAG_PREINFLAGS', null);

	define('RPMTAG_PREINPROG', null);

	define('RPMTAG_PRETRANS', null);

	define('RPMTAG_PRETRANSFLAGS', null);

	define('RPMTAG_PRETRANSPROG', null);

	define('RPMTAG_PREUN', null);

	define('RPMTAG_PREUNFLAGS', null);

	define('RPMTAG_PREUNPROG', null);

	define('RPMTAG_PROVIDEFLAGS', null);

	/**
	 * Provided dependencies, with database index.
	 */
	define('RPMTAG_PROVIDENAME', null);

	define('RPMTAG_PROVIDENEVRS', null);

	define('RPMTAG_PROVIDES', null);

	define('RPMTAG_PROVIDEVERSION', null);

	define('RPMTAG_PUBKEYS', null);

	define('RPMTAG_R', null);

	define('RPMTAG_RECOMMENDFLAGS', null);

	/**
	 * Recommended weak dependencies, with database index, requires librpm &gt;= 4.13.
	 */
	define('RPMTAG_RECOMMENDNAME', null);

	define('RPMTAG_RECOMMENDNEVRS', null);

	define('RPMTAG_RECOMMENDS', null);

	define('RPMTAG_RECOMMENDVERSION', null);

	define('RPMTAG_RECONTEXTS', null);

	define('RPMTAG_RELEASE', null);

	define('RPMTAG_REMOVETID', null);

	define('RPMTAG_REQUIREFLAGS', null);

	/**
	 * Required dependencies, with database index.
	 */
	define('RPMTAG_REQUIRENAME', null);

	define('RPMTAG_REQUIRENEVRS', null);

	define('RPMTAG_REQUIRES', null);

	define('RPMTAG_REQUIREVERSION', null);

	define('RPMTAG_RPMVERSION', null);

	define('RPMTAG_RSAHEADER', null);

	/**
	 * SHA1 signature, with database index.
	 */
	define('RPMTAG_SHA1HEADER', null);

	define('RPMTAG_SHA256HEADER', null);

	define('RPMTAG_SIGGPG', null);

	/**
	 * MD5 signature, with database index.
	 */
	define('RPMTAG_SIGMD5', null);

	define('RPMTAG_SIGPGP', null);

	define('RPMTAG_SIGSIZE', null);

	define('RPMTAG_SIZE', null);

	define('RPMTAG_SOURCE', null);

	define('RPMTAG_SOURCEPACKAGE', null);

	define('RPMTAG_SOURCEPKGID', null);

	define('RPMTAG_SOURCERPM', null);

	define('RPMTAG_SUGGESTFLAGS', null);

	/**
	 * Suggested weak dependencies, with database index, requires librpm &gt;= 4.13.
	 */
	define('RPMTAG_SUGGESTNAME', null);

	define('RPMTAG_SUGGESTNEVRS', null);

	define('RPMTAG_SUGGESTS', null);

	define('RPMTAG_SUGGESTVERSION', null);

	define('RPMTAG_SUMMARY', null);

	define('RPMTAG_SUPPLEMENTFLAGS', null);

	/**
	 * Weak dependencies, with database index, requires librpm &gt;= 4.13.
	 */
	define('RPMTAG_SUPPLEMENTNAME', null);

	define('RPMTAG_SUPPLEMENTNEVRS', null);

	define('RPMTAG_SUPPLEMENTS', null);

	define('RPMTAG_SUPPLEMENTVERSION', null);

	define('RPMTAG_TRANSFILETRIGGERCONDS', null);

	define('RPMTAG_TRANSFILETRIGGERFLAGS', null);

	define('RPMTAG_TRANSFILETRIGGERINDEX', null);

	/**
	 * Transaction file trigger name, with database index, requires librpm &gt;= 4.13.
	 */
	define('RPMTAG_TRANSFILETRIGGERNAME', null);

	define('RPMTAG_TRANSFILETRIGGERPRIORITIES', null);

	define('RPMTAG_TRANSFILETRIGGERSCRIPTFLAGS', null);

	define('RPMTAG_TRANSFILETRIGGERSCRIPTPROG', null);

	define('RPMTAG_TRANSFILETRIGGERSCRIPTS', null);

	define('RPMTAG_TRANSFILETRIGGERTYPE', null);

	define('RPMTAG_TRANSFILETRIGGERVERSION', null);

	define('RPMTAG_TRIGGERCONDS', null);

	define('RPMTAG_TRIGGERFLAGS', null);

	define('RPMTAG_TRIGGERINDEX', null);

	/**
	 * Trigger name, with database index.
	 */
	define('RPMTAG_TRIGGERNAME', null);

	define('RPMTAG_TRIGGERSCRIPTFLAGS', null);

	define('RPMTAG_TRIGGERSCRIPTPROG', null);

	define('RPMTAG_TRIGGERSCRIPTS', null);

	define('RPMTAG_TRIGGERTYPE', null);

	define('RPMTAG_TRIGGERVERSION', null);

	define('RPMTAG_URL', null);

	define('RPMTAG_V', null);

	define('RPMTAG_VCS', null);

	define('RPMTAG_VENDOR', null);

	define('RPMTAG_VERBOSE', null);

	define('RPMTAG_VERIFYSCRIPT', null);

	define('RPMTAG_VERIFYSCRIPTFLAGS', null);

	define('RPMTAG_VERIFYSCRIPTPROG', null);

	define('RPMTAG_VERSION', null);

	define('RPMTAG_XPM', null);

	/**
	 * System librpm version.
	 */
	define('RPMVERSION', null);

}
