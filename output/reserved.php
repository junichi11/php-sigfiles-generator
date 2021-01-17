<?php



namespace {

	define('DEFAULT_INCLUDE_PATH', '.:/usr/share/php');

	/**
	 * Error reporting constant
	 */
	define('E_ALL', 32767);

	/**
	 * Error reporting constant
	 */
	define('E_COMPILE_ERROR', 64);

	/**
	 * Error reporting constant
	 */
	define('E_COMPILE_WARNING', 128);

	/**
	 * Error reporting constant
	 */
	define('E_CORE_ERROR', 16);

	/**
	 * Error reporting constant
	 */
	define('E_CORE_WARNING', 32);

	/**
	 * Error reporting constant. Available since PHP 5.3.0
	 */
	define('E_DEPRECATED', 8192);

	/**
	 * Error reporting constant
	 */
	define('E_ERROR', 1);

	/**
	 * Error reporting constant
	 */
	define('E_NOTICE', 8);

	/**
	 * Error reporting constant
	 */
	define('E_PARSE', 4);

	/**
	 * Error reporting constant. Available since PHP 5.2.0
	 */
	define('E_RECOVERABLE_ERROR', 4096);

	/**
	 * Error reporting constant
	 */
	define('E_STRICT', 2048);

	/**
	 * Error reporting constant. Available since PHP 5.3.0
	 */
	define('E_USER_DEPRECATED', 16384);

	/**
	 * Error reporting constant
	 */
	define('E_USER_ERROR', 256);

	/**
	 * Error reporting constant
	 */
	define('E_USER_NOTICE', 1024);

	/**
	 * Error reporting constant
	 */
	define('E_USER_WARNING', 512);

	/**
	 * Error reporting constant
	 */
	define('E_WARNING', 2);

	/**
	 * See Booleans.
	 */
	define('false', false);

	/**
	 * See Null.
	 */
	define('null', null);

	define('PEAR_EXTENSION_DIR', '/usr/lib/php/20190902');

	define('PEAR_INSTALL_DIR', '/usr/share/php');

	/**
	 * Specifies the PHP binary path during script execution. Available since PHP 5.4.
	 */
	define('PHP_BINARY', '/usr/bin/php7.4');

	/**
	 * Specifies where the binaries were installed into.
	 */
	define('PHP_BINDIR', '/usr/bin');

	define('PHP_CONFIG_FILE_PATH', '/etc/php/7.4/cli');

	define('PHP_CONFIG_FILE_SCAN_DIR', '/etc/php/7.4/cli/conf.d');

	define('PHP_DATADIR', '/usr/share/php/7.4');

	/**
	 * Available since PHP 5.2.7.
	 */
	define('PHP_DEBUG', 0);

	/**
	 * The correct 'End Of Line' symbol for this platform. Available since PHP 5.0.2
	 */
	define('PHP_EOL', '
');

	define('PHP_EXTENSION_DIR', '/usr/lib/php/20190902');

	/**
	 * The current PHP "extra" version as a string (e.g., '-extra' from version "5.2.7-extra"). Often used by distribution vendors to indicate a package version. Available since PHP 5.2.7.
	 */
	define('PHP_EXTRA_VERSION', '');

	/**
	 * The maximum number of file descriptors for select system calls. Available as of PHP 7.1.0.
	 */
	define('PHP_FD_SETSIZE', 1024);

	/**
	 * Number of decimal digits that can be rounded into a float and back without precision loss. Available as of PHP 7.2.0.
	 */
	define('PHP_FLOAT_DIG', 15);

	/**
	 * Smallest representable positive number x, so that <code>x + 1.0 != 1.0</code>. Available as of PHP 7.2.0.
	 */
	define('PHP_FLOAT_EPSILON', 2.2204460492503E-16);

	/**
	 * Largest representable floating point number. Available as of PHP 7.2.0.
	 */
	define('PHP_FLOAT_MAX', 1.7976931348623E+308);

	/**
	 * Smallest representable <i>positive</i> floating point number. If you need the smallest representable <i>negative</i> floating point number, use <code>- PHP_FLOAT_MAX</code>. Available as of PHP 7.2.0.
	 */
	define('PHP_FLOAT_MIN', 2.2250738585072E-308);

	/**
	 * The largest integer supported in this build of PHP. Usually int(2147483647) in 32 bit systems and int(9223372036854775807) in 64 bit systems. Available since PHP 5.0.5
	 */
	define('PHP_INT_MAX', 9223372036854775807);

	/**
	 * The smallest integer supported in this build of PHP. Usually int(-2147483648) in 32 bit systems and int(-9223372036854775808) in 64 bit systems. Available since PHP 7.0.0. Usually, PHP_INT_MIN === ~PHP_INT_MAX.
	 */
	define('PHP_INT_MIN', -9223372036854775808);

	/**
	 * The size of an integer in bytes in this build of PHP. Available since PHP 5.0.5
	 */
	define('PHP_INT_SIZE', 8);

	define('PHP_LIBDIR', '/usr/lib/php');

	define('PHP_LOCALSTATEDIR', '/var');

	/**
	 * The current PHP "major" version as an integer (e.g., int(5) from version "5.2.7-extra"). Available since PHP 5.2.7.
	 */
	define('PHP_MAJOR_VERSION', 7);

	/**
	 * Specifies where the manpages were installed into. Available since PHP 5.3.7.
	 */
	define('PHP_MANDIR', '/usr/share/man');

	/**
	 * The maximum length of filenames (including path) supported by this build of PHP. Available since PHP 5.3.0.
	 */
	define('PHP_MAXPATHLEN', 4096);

	/**
	 * The current PHP "minor" version as an integer (e.g., int(2) from version "5.2.7-extra"). Available since PHP 5.2.7.
	 */
	define('PHP_MINOR_VERSION', 4);

	/**
	 * The operating system PHP was built for.
	 */
	define('PHP_OS', 'Linux');

	/**
	 * The operating system family PHP was built for. One of <code>'Windows'</code>, <code>'BSD'</code>, <code>'Darwin'</code>, <code>'Solaris'</code>, <code>'Linux'</code> or <code>'Unknown'</code>. Available as of PHP 7.2.0.
	 */
	define('PHP_OS_FAMILY', 'Linux');

	/**
	 * The value "--prefix" was set to at configure.
	 */
	define('PHP_PREFIX', '/usr');

	/**
	 * The current PHP "release" version as an integer (e.g., int(7) from version "5.2.7-extra"). Available since PHP 5.2.7.
	 */
	define('PHP_RELEASE_VERSION', 3);

	/**
	 * The Server API for this build of PHP. See also <code>php_sapi_name()</code>.
	 */
	define('PHP_SAPI', 'cli');

	/**
	 * The build-platform's shared library suffix, such as "so" (most Unixes) or "dll" (Windows).
	 */
	define('PHP_SHLIB_SUFFIX', 'so');

	define('PHP_SYSCONFDIR', '/etc');

	/**
	 * The current PHP version as a string in "major.minor.release[extra]" notation.
	 */
	define('PHP_VERSION', '7.4.3');

	/**
	 * The current PHP version as an integer, useful for version comparisons (e.g., int(50207) from version "5.2.7-extra"). Available since PHP 5.2.7.
	 */
	define('PHP_VERSION_ID', 70403);

	/**
	 * A Windows <code>CTRL+BREAK</code> event. Available as of PHP 7.4.0 (Windows only).
	 */
	define('PHP_WINDOWS_EVENT_CTRL_BREAK', null);

	/**
	 * A Windows <code>CTRL+C</code> event. Available as of PHP 7.4.0 (Windows only).
	 */
	define('PHP_WINDOWS_EVENT_CTRL_C', null);

	/**
	 * Available since PHP 5.2.7.
	 */
	define('PHP_ZTS', 0);

	/**
	 * See Booleans.
	 */
	define('true', true);

}
