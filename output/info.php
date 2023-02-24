<?php



namespace {

	/**
	 * Checks if assertion is false
	 * <p>PHP 5 and 7</p><p>PHP 7</p><p><b>assert()</b> will check the given <code>assertion</code> and take appropriate action if its result is <b><code>false</code></b>.</p><p>If the <code>assertion</code> is given as a string it will be evaluated as PHP code by <b>assert()</b>. If you pass a boolean condition as <code>assertion</code>, this condition will not be passed as a parameter to the assertion callback which you may have defined with <code>assert_options()</code>. Rather, the callback will receive an empty string.</p><p>Assertions should be used as a debugging feature only. You may use them for sanity-checks that test for conditions that should always be <b><code>true</code></b> and that indicate some programming errors if not or to check for the presence of certain features like extension functions or certain system limits and features.</p><p>Assertions should not be used for normal runtime operations like input parameter checks. As a rule of thumb your code should always be able to work correctly if assertion checking is not activated.</p><p>The behavior of <b>assert()</b> may be configured by <code>assert_options()</code> or by .ini-settings described in that functions manual page.</p><p>The <code>assert_options()</code> function and/or <b><code>ASSERT_CALLBACK</code></b> configuration directive allow a callback function to be set to handle failed assertions.</p><p><b>assert()</b> callbacks are particularly useful for building automated test suites because they allow you to easily capture the code passed to the assertion, along with information on where the assertion was made. While this information can be captured via other methods, using assertions makes it much faster and easier!</p><p>The callback function should accept three arguments. The first argument will contain the file the assertion failed in. The second argument will contain the line the assertion failed on and the third argument will contain the expression that failed (if any &#x2014; literal values such as 1 or "two" will not be passed via this argument). Users of PHP 5.4.8 and later may also provide a fourth optional argument, which will contain the <code>description</code> given to <b>assert()</b>, if it was set.</p><p><b>assert()</b> is a language construct in PHP 7, allowing for the definition of expectations: assertions that take effect in development and testing environments, but are optimised away to have zero cost in production.</p><p>While <code>assert_options()</code> can still be used to control behaviour as described above for backward compatibility reasons, PHP 7 only code should use the two new configuration directives to control the behaviour of <b>assert()</b> and not call <code>assert_options()</code>.</p>
	 * @param mixed $assertion <p>The assertion. In PHP 5, this must be either a <code>string</code> to be evaluated or a <code>bool</code> to be tested. In PHP 7, this may also be any expression that returns a value, which will be executed and the result used to indicate whether the assertion succeeded or failed.</p> <p><b>Warning</b></p> <p>Using <code>string</code> as the <code>assertion</code> is <i>DEPRECATED</i> as of PHP 7.2.0 and <i>REMOVED</i> as of PHP 8.0.0.</p>
	 * @param string $description <p>An optional description that will be included in the failure message if the <code>assertion</code> fails. From PHP 7, if no description is provided, a default description equal to the source code for the invocation of <b>assert()</b> is provided.</p>
	 * @return bool <p><b><code>false</code></b> if the assertion is false, <b><code>true</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.assert.php
	 * @see assert_options()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function assert(mixed $assertion, string $description = null): bool {}

	/**
	 * Set/get the various assert flags
	 * <p>Set the various <code>assert()</code> control options or just query their current settings.</p><p><b>Note</b>:  As of PHP 7.0.0, the use of <b>assert_options()</b> is discouraged in favor of setting and getting the php.ini directives zend.assertions and assert.exception with <code>ini_set()</code> and <code>ini_get()</code>, respectively. </p>
	 * @param int $what <p></p> <b>Assert Options</b>   Option INI Setting Default value Description     ASSERT_ACTIVE assert.active 1 enable <code>assert()</code> evaluation   ASSERT_WARNING assert.warning 1 issue a PHP warning for each failed assertion   ASSERT_BAIL assert.bail 0 terminate execution on failed assertions   ASSERT_QUIET_EVAL assert.quiet_eval 0  disable error_reporting during assertion expression evaluation    ASSERT_CALLBACK assert.callback (<b><code>null</code></b>) Callback to call on failed assertions
	 * @param mixed $value <p>An optional new value for the option.</p> <p>The callback function set via <b><code>ASSERT_CALLBACK</code></b> or assert.callback should have the following signature:</p> <b>assert_callback</b>(<br>&#xA0;&#xA0;&#xA0;&#xA0;<code>string</code> <code>$file</code>,<br>&#xA0;&#xA0;&#xA0;&#xA0;<code>int</code> <code>$line</code>,<br>&#xA0;&#xA0;&#xA0;&#xA0;<code>&#63;</code><code>string</code> <code>$assertion</code>,<br>&#xA0;&#xA0;&#xA0;&#xA0;<code>string</code> <code>$description</code> = &#63;<br>): void   <code>file</code>   The file where <code>assert()</code> has been called.    <code>line</code>   The line where <code>assert()</code> has been called.    <code>assertion</code>   Prior to PHP 8.0.0, the assertion which has been passed to <code>assert()</code>, but only when the assertion is given as a string. (If the assertion is a boolean condition, this parameter will be an empty string.) As of PHP 8.0.0, this parameter is always <b><code>null</code></b>.    <code>description</code>   The description that has been passed to <code>assert()</code>.
	 * @return mixed <p>Returns the original setting of any option or <b><code>false</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.assert-options.php
	 * @see assert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function assert_options(int $what, mixed $value = null): mixed {}

	/**
	 * Returns the current process title
	 * <p>Returns the current process title, as set by <code>cli_set_process_title()</code>. Note that this may not exactly match what is shown in <b>ps</b> or <b>top</b>, depending on your operating system.</p><p>This function is available only in CLI mode.</p>
	 * @return ?string <p>Return a string with the current process title or <b><code>null</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.cli-get-process-title.php
	 * @see cli_set_process_title()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function cli_get_process_title(): ?string {}

	/**
	 * Sets the process title
	 * <p>Sets the process title visible in tools such as <b>top</b> and <b>ps</b>. This function is available only in CLI mode.</p>
	 * @param string $title <p>The new title.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.cli-set-process-title.php
	 * @see cli_get_process_title()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function cli_set_process_title(string $title): bool {}

	/**
	 * Loads a PHP extension at runtime
	 * <p>Loads the PHP extension given by the parameter <code>extension_filename</code>.</p><p>Use <code>extension_loaded()</code> to test whether a given extension is already available or not. This works on both built-in extensions and dynamically loaded ones (either through php.ini or <b>dl()</b>).</p><p>This function is only available for the CLI and embed SAPIs, and the CGI SAPI when run from the command line.</p>
	 * @param string $extension_filename <p>This parameter is <i>only</i> the filename of the extension to load which also depends on your platform. For example, the sockets extension (if compiled as a shared module, not the default!) would be called sockets.so on Unix platforms whereas it is called php_sockets.dll on the Windows platform.</p> <p>The directory where the extension is loaded from depends on your platform:</p> <p>Windows - If not explicitly set in the php.ini, the extension is loaded from C:\php5\ by default.</p> <p>Unix - If not explicitly set in the php.ini, the default extension directory depends on</p><ul> <li>  whether PHP has been built with <code>--enable-debug</code> or not  </li> <li>  whether PHP has been built with ZTS (Zend Thread Safety) support or not  </li> <li>  the current internal <code>ZEND_MODULE_API_NO</code> (Zend internal module API number, which is basically the date on which a major module API change happened, e.g. <code>20010901</code>)  </li> </ul> Taking into account the above, the directory then defaults to <code>&lt;install-dir&gt;/lib/php/extensions/ &lt;debug-or-not&gt;-&lt;zts-or-not&gt;-ZEND_MODULE_API_NO</code>, e.g. /usr/local/php/lib/php/extensions/debug-non-zts-20010901 or /usr/local/php/lib/php/extensions/no-debug-zts-20010901.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. If the functionality of loading modules is not available or has been disabled (by setting enable_dl off in php.ini) an <b><code>E_ERROR</code></b> is emitted and execution is stopped. If <b>dl()</b> fails because the specified library couldn't be loaded, in addition to <b><code>false</code></b> an <b><code>E_WARNING</code></b> message is emitted.</p>
	 * @link https://php.net/manual/en/function.dl.php
	 * @see extension_loaded()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dl(string $extension_filename): bool {}

	/**
	 * Find out whether an extension is loaded
	 * <p>Finds out whether the extension is loaded.</p>
	 * @param string $extension <p>The extension name. This parameter is case-insensitive.</p> <p>You can see the names of various extensions by using <code>phpinfo()</code> or if you're using the <code>CGI</code> or <code>CLI</code> version of PHP you can use the <b>-m</b> switch to list all available extensions:</p> <pre> $ php -m [PHP Modules] xml tokenizer standard sockets session posix pcre overload mysql mbstring ctype [Zend Modules] </pre>
	 * @return bool <p>Returns <b><code>true</code></b> if the extension identified by <code>extension</code> is loaded, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.extension-loaded.php
	 * @see get_loaded_extensions(), get_extension_funcs(), phpinfo(), dl(), function_exists()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function extension_loaded(string $extension): bool {}

	/**
	 * Forces collection of any existing garbage cycles
	 * <p>Forces collection of any existing garbage cycles.</p>
	 * @return int <p>Returns number of collected cycles.</p>
	 * @link https://php.net/manual/en/function.gc-collect-cycles.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function gc_collect_cycles(): int {}

	/**
	 * Deactivates the circular reference collector
	 * <p>Deactivates the circular reference collector, setting zend.enable_gc to <code>0</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.gc-disable.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function gc_disable(): void {}

	/**
	 * Activates the circular reference collector
	 * <p>Activates the circular reference collector, setting zend.enable_gc to <code>1</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.gc-enable.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function gc_enable(): void {}

	/**
	 * Returns status of the circular reference collector
	 * <p>Returns status of the circular reference collector.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the garbage collector is enabled, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.gc-enabled.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function gc_enabled(): bool {}

	/**
	 * Reclaims memory used by the Zend Engine memory manager
	 * <p>Reclaims memory used by the Zend Engine memory manager.</p>
	 * @return int <p>Returns the number of bytes freed.</p>
	 * @link https://php.net/manual/en/function.gc-mem-caches.php
	 * @since PHP 7, PHP 8
	 */
	function gc_mem_caches(): int {}

	/**
	 * Gets information about the garbage collector
	 * <p>Gets information about the current state of the garbage collector.</p>
	 * @return array <p>Returns an associative array with the following elements:</p><ul> <li>  <code>"runs"</code>  </li> <li>  <code>"collected"</code>  </li> <li>  <code>"threshold"</code>  </li> <li>  <code>"roots"</code>  </li> </ul>
	 * @link https://php.net/manual/en/function.gc-status.php
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function gc_status(): array {}

	/**
	 * Gets the value of a PHP configuration option
	 * <p>Gets the value of a PHP configuration <code>option</code>.</p><p>This function will not return configuration information set when the PHP was compiled, or read from an Apache configuration file.</p><p>To check whether the system is using a configuration file, try retrieving the value of the cfg_file_path configuration setting. If this is available, a configuration file is being used.</p>
	 * @param string $option <p>The configuration option name.</p>
	 * @return string|array|false <p>Returns the current value of the PHP configuration variable specified by <code>option</code>, or <b><code>false</code></b> if an error occurs.</p>
	 * @link https://php.net/manual/en/function.get-cfg-var.php
	 * @see ini_get(), ini_get_all()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_cfg_var(string $option): string|array|false {}

	/**
	 * Gets the name of the owner of the current PHP script
	 * <p>Returns the name of the owner of the current PHP script.</p>
	 * @return string <p>Returns the username as a string.</p>
	 * @link https://php.net/manual/en/function.get-current-user.php
	 * @see getmyuid(), getmygid(), getmypid(), getmyinode(), getlastmod()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_current_user(): string {}

	/**
	 * Returns an associative array with the names of all the constants and their values
	 * <p>Returns the names and values of all the constants currently defined. This includes those created by extensions as well as those created with the <code>define()</code> function.</p>
	 * @param bool $categorize <p>Causing this function to return a multi-dimensional array with categories in the keys of the first dimension and constants and their values in the second dimension.</p>  <code> &lt;&#63;php<br>define("MY_CONSTANT", 1);<br>print_r(get_defined_constants(true));<br>&#63;&gt;  </code>  <p>The above example will output something similar to:</p>  <pre> Array ( [Core] =&gt; Array ( [E_ERROR] =&gt; 1 [E_WARNING] =&gt; 2 [E_PARSE] =&gt; 4 [E_NOTICE] =&gt; 8 [E_CORE_ERROR] =&gt; 16 [E_CORE_WARNING] =&gt; 32 [E_COMPILE_ERROR] =&gt; 64 [E_COMPILE_WARNING] =&gt; 128 [E_USER_ERROR] =&gt; 256 [E_USER_WARNING] =&gt; 512 [E_USER_NOTICE] =&gt; 1024 [E_ALL] =&gt; 2047 [TRUE] =&gt; 1 ) [pcre] =&gt; Array ( [PREG_PATTERN_ORDER] =&gt; 1 [PREG_SET_ORDER] =&gt; 2 [PREG_OFFSET_CAPTURE] =&gt; 256 [PREG_SPLIT_NO_EMPTY] =&gt; 1 [PREG_SPLIT_DELIM_CAPTURE] =&gt; 2 [PREG_SPLIT_OFFSET_CAPTURE] =&gt; 4 [PREG_GREP_INVERT] =&gt; 1 ) [user] =&gt; Array ( [MY_CONSTANT] =&gt; 1 ) ) </pre>
	 * @return array <p>Returns an array of constant name =&gt; constant value array, optionally groupped by extension name registering the constant.</p>
	 * @link https://php.net/manual/en/function.get-defined-constants.php
	 * @see defined(), constant(), get_loaded_extensions(), get_defined_functions(), get_defined_vars()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function get_defined_constants(bool $categorize = false): array {}

	/**
	 * Returns an array with the names of the functions of a module
	 * <p>This function returns the names of all the functions defined in the module indicated by <code>extension</code>.</p>
	 * @param string $extension <p>The module name.</p> <p><b>Note</b>:</p><p>This parameter must be in <i>lowercase</i>.</p>
	 * @return array|false <p>Returns an array with all the functions, or <b><code>false</code></b> if <code>extension</code> is not a valid extension.</p>
	 * @link https://php.net/manual/en/function.get-extension-funcs.php
	 * @see get_loaded_extensions()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_extension_funcs(string $extension): array|false {}

	/**
	 * Gets the current include_path configuration option
	 * <p>Gets the current include_path configuration option value.</p>
	 * @return string|false <p>Returns the path, as a string, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.get-include-path.php
	 * @see ini_get(), restore_include_path(), set_include_path(), include
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function get_include_path(): string|false {}

	/**
	 * Returns an array with the names of included or required files
	 * <p>Gets the names of all files that have been included using <code>include</code>, <code>include_once</code>, <code>require</code> or <code>require_once</code>.</p>
	 * @return array <p>Returns an array of the names of all files.</p><p>The script originally called is considered an "included file," so it will be listed together with the files referenced by <code>include</code> and family.</p><p>Files that are included or required multiple times only show up once in the returned array.</p>
	 * @link https://php.net/manual/en/function.get-included-files.php
	 * @see include, include_once, require, require_once, get_required_files()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_included_files(): array {}

	/**
	 * Returns an array with the names of all modules compiled and loaded
	 * <p>This function returns the names of all the modules compiled and loaded in the PHP interpreter.</p>
	 * @param bool $zend_extensions <p>Only return Zend extensions, if not then regular extensions, like mysqli are listed. Defaults to <b><code>false</code></b> (return regular extensions).</p>
	 * @return array <p>Returns an indexed array of all the modules names.</p>
	 * @link https://php.net/manual/en/function.get-loaded-extensions.php
	 * @see get_extension_funcs(), extension_loaded(), dl(), phpinfo()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_loaded_extensions(bool $zend_extensions = false): array {}

	/**
	 * Gets the current configuration setting of magic_quotes_gpc
	 * <p>Always returns <b><code>false</code></b>.</p>
	 * @return bool <p>Always returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.get-magic-quotes-gpc.php
	 * @see addslashes(), stripslashes(), get_magic_quotes_runtime(), ini_get()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_magic_quotes_gpc(): bool {}

	/**
	 * Gets the current active configuration setting of magic_quotes_runtime
	 * <p>Returns the current active configuration setting of magic_quotes_runtime.</p>
	 * @return bool <p>Returns 0 if magic_quotes_runtime is off, 1 otherwise. Or always returns <b><code>false</code></b> as of PHP 5.4.0.</p>
	 * @link https://php.net/manual/en/function.get-magic-quotes-runtime.php
	 * @see get_magic_quotes_gpc()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_magic_quotes_runtime(): bool {}

	/**
	 * Alias of get_included_files()
	 * <p>This function is an alias of: <code>get_included_files()</code>.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.get-required-files.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_required_files(): array {}

	/**
	 * Returns active resources
	 * <p>Returns an array of all currently active <code>resource</code>s, optionally filtered by resource type.</p><p><b>Note</b>:  This function is meant for debugging and testing purposes. It is not supposed to be used in production environments, especially not to access or even manipulate resources which are normally not accessible (e.g. the underlying stream resource of <code>SplFileObject</code> instances). </p>
	 * @param ?string $type <p>If defined, this will cause <b>get_resources()</b> to only return resources of the given type. A list of resource types is available.</p> <p>If the <code>string</code> <code>Unknown</code> is provided as the type, then only resources that are of an unknown type will be returned.</p> <p>If omitted, all resources will be returned.</p>
	 * @return array <p>Returns an <code>array</code> of currently active resources, indexed by resource number.</p>
	 * @link https://php.net/manual/en/function.get-resources.php
	 * @see get_loaded_extensions(), get_defined_constants(), get_defined_functions(), get_defined_vars()
	 * @since PHP 7, PHP 8
	 */
	function get_resources(?string $type = null): array {}

	/**
	 * Gets the value of an environment variable
	 * <p>Gets the value of an environment variable.</p><p>You can see a list of all the environmental variables by using <code>phpinfo()</code>. Many of these variables are listed within &#xBB;&#xA0;RFC 3875, specifically section 4.1, "Request Meta-Variables".</p>
	 * @param string $varname <p>The variable name.</p>
	 * @param bool $local_only <p>Set to true to only return local environment variables (set by the operating system or putenv).</p>
	 * @return string|false <p>Returns the value of the environment variable <code>varname</code>, or <b><code>false</code></b> if the environment variable <code>varname</code> does not exist. If <code>varname</code> is omitted, all environment variables are returned as associative <code>array</code>.</p>
	 * @link https://php.net/manual/en/function.getenv.php
	 * @see putenv(), apache_getenv()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getenv(string $varname, bool $local_only = false): string|false {}

	/**
	 * Gets time of last page modification
	 * <p>Gets the time of the last modification of the main script of execution.</p><p>If you're interested in getting the last modification time of a different file, consider using <code>filemtime()</code>.</p>
	 * @return int|false <p>Returns the time of the last modification of the current page. The value returned is a Unix timestamp, suitable for feeding to <code>date()</code>. Returns <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.getlastmod.php
	 * @see date(), getmyuid(), getmygid(), get_current_user(), getmyinode(), getmypid(), filemtime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getlastmod(): int|false {}

	/**
	 * Get PHP script owner's GID
	 * <p>Gets the group ID of the current script.</p>
	 * @return int|false <p>Returns the group ID of the current script, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.getmygid.php
	 * @see getmyuid(), getmypid(), get_current_user(), getmyinode(), getlastmod()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function getmygid(): int|false {}

	/**
	 * Gets the inode of the current script
	 * <p>Gets the inode of the current script.</p>
	 * @return int|false <p>Returns the current script's inode as an integer, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.getmyinode.php
	 * @see getmygid(), getmyuid(), getmypid(), get_current_user(), getlastmod()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getmyinode(): int|false {}

	/**
	 * Gets PHP's process ID
	 * <p>Gets the current PHP process ID.</p>
	 * @return int|false <p>Returns the current PHP process ID, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.getmypid.php
	 * @see getmygid(), getmyuid(), get_current_user(), getmyinode(), getlastmod()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getmypid(): int|false {}

	/**
	 * Gets PHP script owner's UID
	 * <p>Gets the user ID of the current script.</p>
	 * @return int|false <p>Returns the user ID of the current script, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.getmyuid.php
	 * @see getmygid(), getmypid(), get_current_user(), getmyinode(), getlastmod()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getmyuid(): int|false {}

	/**
	 * Gets options from the command line argument list
	 * <p>Parses options passed to the script.</p>
	 * @param string $short_options Each character in this string will be used as option characters and matched against options passed to the script starting with a single hyphen (<code>-</code>).   For example, an option string <code>"x"</code> recognizes an option <code>-x</code>.   Only a-z, A-Z and 0-9 are allowed.
	 * @param array $long_options An array of options. Each element in this array will be used as option strings and matched against options passed to the script starting with two hyphens (<code>--</code>).   For example, an longopts element <code>"opt"</code> recognizes an option <code>--opt</code>.
	 * @param int $rest_index If the <code>rest_index</code> parameter is present, then the index where argument parsing stopped will be written to this variable.
	 * @return array|false <p>This function will return an array of option / argument pairs, or <b><code>false</code></b> on failure.</p><p><b>Note</b>:</p><p>The parsing of options will end at the first non-option found, anything that follows is discarded.</p>
	 * @link https://php.net/manual/en/function.getopt.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function getopt(string $short_options, array $long_options = [], int &$rest_index = null): array|false {}

	/**
	 * Gets the current resource usages
	 * <p>This is an interface to <b>getrusage(2)</b>. It gets data returned from the system call.</p>
	 * @param int $mode <p>If <code>mode</code> is 1, getrusage will be called with <b><code>RUSAGE_CHILDREN</code></b>.</p>
	 * @return array|false <p>Returns an associative array containing the data returned from the system call. All entries are accessible by using their documented field names. Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.getrusage.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getrusage(int $mode = 0): array|false {}

	/**
	 * Alias of ini_set()
	 * <p>This function is an alias of: <code>ini_set()</code>.</p>
	 * @param string $option <p></p> <p>Not all the available options can be changed using <b>ini_set()</b>. There is a list of all available options in the appendix.</p>
	 * @param string|int|float|bool|null $value <p>The new value for the option.</p>
	 * @return string|false
	 * @link https://php.net/manual/en/function.ini-alter.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ini_alter(string $option, string|int|float|bool|null $value): string|false {}

	/**
	 * Gets the value of a configuration option
	 * <p>Returns the value of the configuration option on success.</p>
	 * @param string $option <p>The configuration option name.</p>
	 * @return string|false <p>Returns the value of the configuration option as a string on success, or an empty string for <code>null</code> values. Returns <b><code>false</code></b> if the configuration option doesn't exist.</p>
	 * @link https://php.net/manual/en/function.ini-get.php
	 * @see get_cfg_var(), ini_get_all(), ini_restore(), ini_set()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ini_get(string $option): string|false {}

	/**
	 * Gets all configuration options
	 * <p>Returns all the registered configuration options.</p>
	 * @param ?string $extension <p>An optional extension name. If not <b><code>null</code></b> or the <code>string</code> <code>core</code>, the function returns only options specific for that extension.</p>
	 * @param bool $details <p>Retrieve details settings or only the current value for each setting. Default is <b><code>true</code></b> (retrieve details).</p>
	 * @return array|false <p>Returns an associative array with directive name as the array key. Returns <b><code>false</code></b> and raises an <b><code>E_WARNING</code></b> level error if the <code>extension</code> doesn't exist.</p><p>When <code>details</code> is <b><code>true</code></b> (default) the array will contain <code>global_value</code> (set in php.ini), <code>local_value</code> (perhaps set with <code>ini_set()</code> or .htaccess), and <code>access</code> (the access level).</p><p>When <code>details</code> is <b><code>false</code></b> the value will be the current value of the option.</p><p>See the manual section for information on what access levels mean.</p><p><b>Note</b>:</p><p>It's possible for a directive to have multiple access levels, which is why <code>access</code> shows the appropriate bitmask values.</p>
	 * @link https://php.net/manual/en/function.ini-get-all.php
	 * @see ini_get(), ini_restore(), ini_set(), get_loaded_extensions(), phpinfo()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function ini_get_all(?string $extension = null, bool $details = true): array|false {}

	/**
	 * Get interpreted size from ini shorthand syntax
	 * <p>Returns the interpreted size in bytes on success from an ini shorthand.</p>
	 * @param string $shorthand <p>Ini shorthand to parse, must be a number followed by an optional multiplier. The followig multipliers are supported: <code>k</code>/<code>K</code> (<code>1024</code>), <code>m</code>/<code>M</code> (<code>1048576</code>), <code>g</code>/<code>G</code> (<code>1073741824</code>). The number can be a decimal, hex (prefixed with <code>0x</code> or <code>0X</code>), octal (prefixed with <code>0o</code>, <code>0O</code> or <code>0</code>) or binary (prefixed with <code>0b</code> or <code>0B</code>)</p>
	 * @return int <p>Returns the interpreted size in bytes as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.ini-parse-quantity.php
	 * @see ini_get()
	 * @since PHP 8 >= 8.2.0
	 */
	function ini_parse_quantity(string $shorthand): int {}

	/**
	 * Restores the value of a configuration option
	 * <p>Restores a given configuration option to its original value.</p>
	 * @param string $option <p>The configuration option name.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.ini-restore.php
	 * @see ini_get(), ini_get_all(), ini_set()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ini_restore(string $option): void {}

	/**
	 * Sets the value of a configuration option
	 * <p>Sets the value of the given configuration option. The configuration option will keep this new value during the script's execution, and will be restored at the script's ending.</p>
	 * @param string $option <p></p> <p>Not all the available options can be changed using <b>ini_set()</b>. There is a list of all available options in the appendix.</p>
	 * @param string|int|float|bool|null $value <p>The new value for the option.</p>
	 * @return string|false <p>Returns the old value on success, <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ini-set.php
	 * @see get_cfg_var(), ini_get(), ini_get_all(), ini_restore()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ini_set(string $option, string|int|float|bool|null $value): string|false {}

	/**
	 * Returns the peak of memory allocated by PHP
	 * <p>Returns the peak of memory, in bytes, that's been allocated to your PHP script.</p>
	 * @param bool $real_usage <p>Set this to <b><code>true</code></b> to get the real size of memory allocated from system. If not set or <b><code>false</code></b> only the memory used by <code>emalloc()</code> is reported.</p>
	 * @return int <p>Returns the memory peak in bytes.</p>
	 * @link https://php.net/manual/en/function.memory-get-peak-usage.php
	 * @see memory_get_usage(), memory_reset_peak_usage()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function memory_get_peak_usage(bool $real_usage = false): int {}

	/**
	 * Returns the amount of memory allocated to PHP
	 * <p>Returns the amount of memory, in bytes, that's currently being allocated to your PHP script.</p>
	 * @param bool $real_usage <p>Set this to <b><code>true</code></b> to get total memory allocated from system, including unused pages. If not set or <b><code>false</code></b> only the used memory is reported.</p>
	 * @return int <p>Returns the memory amount in bytes.</p>
	 * @link https://php.net/manual/en/function.memory-get-usage.php
	 * @see memory_get_peak_usage()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8
	 */
	function memory_get_usage(bool $real_usage = false): int {}

	/**
	 * Reset the peak memory usage
	 * <p>Resets the peak memory usage returned by the <code>memory_get_peak_usage()</code> function.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.memory-reset-peak-usage.php
	 * @see memory_get_peak_usage()
	 * @since PHP 8 >= 8.2.0
	 */
	function memory_reset_peak_usage(): void {}

	/**
	 * Retrieve a path to the loaded php.ini file
	 * <p>Check if a php.ini file is loaded, and retrieve its path.</p>
	 * @return string|false <p>The loaded php.ini path, or <b><code>false</code></b> if one is not loaded.</p>
	 * @link https://php.net/manual/en/function.php-ini-loaded-file.php
	 * @see php_ini_scanned_files(), phpinfo()
	 * @since PHP 5 >= 5.2.4, PHP 7, PHP 8
	 */
	function php_ini_loaded_file(): string|false {}

	/**
	 * Return a list of .ini files parsed from the additional ini dir
	 * <p><b>php_ini_scanned_files()</b> returns a comma-separated list of configuration files parsed after php.ini. The directories searched are set by a compile time option and, optionally, by an environment variable at run time: more information can be found in the installation guide.</p><p>The returned configuration files include the full path.</p>
	 * @return string|false <p>Returns a comma-separated string of .ini files on success. Each comma is followed by a newline. If the configure directive <b>--with-config-file-scan-dir</b> wasn't set and the PHP_INI_SCAN_DIR environment variable isn't set, <b><code>false</code></b> is returned. If it was set and the directory was empty, an empty string is returned. If a file is unrecognizable, the file will still make it into the returned string but a PHP error will also result. This PHP error will be seen both at compile time and while using <b>php_ini_scanned_files()</b>.</p>
	 * @link https://php.net/manual/en/function.php-ini-scanned-files.php
	 * @see ini_set(), phpinfo(), php_ini_loaded_file()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function php_ini_scanned_files(): string|false {}

	/**
	 * Returns the type of interface between web server and PHP
	 * <p>Returns a lowercase string that describes the type of interface (the Server API, SAPI) that PHP is using. For example, in CLI PHP this string will be "cli" whereas with Apache it may have several different values depending on the exact SAPI used. Possible values are listed below.</p>
	 * @return string|false <p>Returns the interface type, as a lowercase string, or <b><code>false</code></b> on failure.</p><p>Although not exhaustive, the possible return values include <code>apache</code>, <code>apache2handler</code>, <code>cgi</code> (until PHP 5.3), <code>cgi-fcgi</code>, <code>cli</code>, <code>cli-server</code>, <code>embed</code>, <code>fpm-fcgi</code>, <code>litespeed</code>, <code>phpdbg</code>.</p>
	 * @link https://php.net/manual/en/function.php-sapi-name.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function php_sapi_name(): string|false {}

	/**
	 * Returns information about the operating system PHP is running on
	 * <p><b>php_uname()</b> returns a description of the operating system PHP is running on. This is the same string you see at the very top of the <code>phpinfo()</code> output. For the name of just the operating system, consider using the <b><code>PHP_OS</code></b> constant, but keep in mind this constant will contain the operating system PHP was <i>built</i> on.</p><p>On some older UNIX platforms, it may not be able to determine the current OS information in which case it will revert to displaying the OS PHP was built on. This will only happen if your uname() library call either doesn't exist or doesn't work.</p>
	 * @param string $mode <p><code>mode</code> is a single character that defines what information is returned:</p><ul> <li>  <code>'a'</code>: This is the default. Contains all modes in the sequence <code>"s n r v m"</code>.  </li> <li>  <code>'s'</code>: Operating system name. eg. <code>FreeBSD</code>.  </li> <li>  <code>'n'</code>: Host name. eg. <code>localhost.example.com</code>.  </li> <li>  <code>'r'</code>: Release name. eg. <code>5.1.2-RELEASE</code>.  </li> <li>  <code>'v'</code>: Version information. Varies a lot between operating systems.  </li> <li>  <code>'m'</code>: Machine type. eg. <code>i386</code>.  </li> </ul>
	 * @return string <p>Returns the description, as a string.</p>
	 * @link https://php.net/manual/en/function.php-uname.php
	 * @see phpversion(), php_sapi_name(), phpinfo()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function php_uname(string $mode = "a"): string {}

	/**
	 * Prints out the credits for PHP
	 * <p>This function prints out the credits listing the PHP developers, modules, etc. It generates the appropriate HTML codes to insert the information in a page.</p>
	 * @param int $flags <p>To generate a custom credits page, you may want to use the <code>flags</code> parameter.</p> <p></p> <b>Pre-defined <b>phpcredits()</b> flags</b>   name description     CREDITS_ALL  All the credits, equivalent to using: <b><code>CREDITS_DOCS</code></b> + <b><code>CREDITS_GENERAL</code></b> + <b><code>CREDITS_GROUP</code></b> + <b><code>CREDITS_MODULES</code></b> + <b><code>CREDITS_FULLPAGE</code></b>. It generates a complete stand-alone HTML page with the appropriate tags.    CREDITS_DOCS The credits for the documentation team   CREDITS_FULLPAGE  Usually used in combination with the other flags. Indicates that a complete stand-alone HTML page needs to be printed including the information indicated by the other flags.    CREDITS_GENERAL  General credits: Language design and concept, PHP authors and SAPI module.    CREDITS_GROUP A list of the core developers   CREDITS_MODULES  A list of the extension modules for PHP, and their authors    CREDITS_SAPI  A list of the server API modules for PHP, and their authors
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.phpcredits.php
	 * @see phpversion(), phpinfo()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function phpcredits(int $flags = CREDITS_ALL): bool {}

	/**
	 * Outputs information about PHP's configuration
	 * <p>Outputs a large amount of information about the current state of PHP. This includes information about PHP compilation options and extensions, the PHP version, server information and environment (if compiled as a module), the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers, and the PHP License.</p><p>Because every system is setup differently, <b>phpinfo()</b> is commonly used to check configuration settings and for available predefined variables on a given system.</p><p><b>phpinfo()</b> is also a valuable debugging tool as it contains all EGPCS (Environment, GET, POST, Cookie, Server) data.</p>
	 * @param int $flags <p>The output may be customized by passing one or more of the following <i>constants</i> bitwise values summed together in the optional <code>flags</code> parameter. One can also combine the respective constants or bitwise values together with the bitwise or operator.</p> <p></p> <b><b>phpinfo()</b> options</b>   Name (constant) Value Description     INFO_GENERAL 1  The configuration line, php.ini location, build date, Web Server, System and more.    INFO_CREDITS 2  PHP Credits. See also <code>phpcredits()</code>.    INFO_CONFIGURATION 4  Current Local and Master values for PHP directives. See also <code>ini_get()</code>.    INFO_MODULES 8  Loaded modules and their respective settings. See also <code>get_loaded_extensions()</code>.    INFO_ENVIRONMENT 16  Environment Variable information that's also available in $_ENV.    INFO_VARIABLES 32  Shows all  predefined variables from EGPCS (Environment, GET, POST, Cookie, Server).    INFO_LICENSE 64  PHP License information. See also the &#xBB;&#xA0;license FAQ.    INFO_ALL -1  Shows all of the above.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.phpinfo.php
	 * @see phpversion(), phpcredits(), ini_get(), ini_set(), get_loaded_extensions()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function phpinfo(int $flags = INFO_ALL): bool {}

	/**
	 * Gets the current PHP version
	 * <p>Returns a string containing the version of the currently running PHP parser or extension.</p>
	 * @param ?string $extension <p>An optional extension name.</p>
	 * @return string|false <p>Returns the current PHP version as a <code>string</code>. If a <code>string</code> argument is provided for <code>extension</code> parameter, <b>phpversion()</b> returns the version of that extension, or <b><code>false</code></b> if there is no version information associated or the extension isn't enabled.</p>
	 * @link https://php.net/manual/en/function.phpversion.php
	 * @see version_compare(), phpinfo(), phpcredits(), zend_version()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function phpversion(?string $extension = null): string|false {}

	/**
	 * Sets the value of an environment variable
	 * <p>Adds <code>assignment</code> to the server environment. The environment variable will only exist for the duration of the current request. At the end of the request the environment is restored to its original state.</p>
	 * @param string $assignment <p>The setting, like <code>"FOO=BAR"</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.putenv.php
	 * @see getenv(), apache_setenv()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function putenv(string $assignment): bool {}

	/**
	 * Restores the value of the include_path configuration option
	 * <p>Restores the include_path configuration option back to its original master value as set in php.ini</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.restore-include-path.php
	 * @see ini_restore(), get_include_path(), set_include_path(), include
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function restore_include_path(): void {}

	/**
	 * Sets the include_path configuration option
	 * <p>Sets the include_path configuration option for the duration of the script.</p>
	 * @param string $include_path <p>The new value for the include_path</p>
	 * @return string|false <p>Returns the old include_path on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.set-include-path.php
	 * @see ini_set(), get_include_path(), restore_include_path(), include
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function set_include_path(string $include_path): string|false {}

	/**
	 * Limits the maximum execution time
	 * <p>Set the number of seconds a script is allowed to run. If this is reached, the script returns a fatal error. The default limit is 30 seconds or, if it exists, the <code>max_execution_time</code> value defined in the php.ini.</p><p>When called, <b>set_time_limit()</b> restarts the timeout counter from zero. In other words, if the timeout is the default 30 seconds, and 25 seconds into script execution a call such as <code>set_time_limit(20)</code> is made, the script will run for a total of 45 seconds before timing out.</p>
	 * @param int $seconds <p>The maximum execution time, in seconds. If set to zero, no time limit is imposed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.set-time-limit.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function set_time_limit(int $seconds): bool {}

	/**
	 * Returns directory path used for temporary files
	 * <p>Returns the path of the directory PHP stores temporary files in by default.</p>
	 * @return string <p>Returns the path of the temporary directory.</p>
	 * @link https://php.net/manual/en/function.sys-get-temp-dir.php
	 * @see tmpfile(), tempnam()
	 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8
	 */
	function sys_get_temp_dir(): string {}

	/**
	 * Compares two "PHP-standardized" version number strings
	 * <p><b>version_compare()</b> compares two "PHP-standardized" version number strings.</p><p>The function first replaces <code>_</code>, <code>-</code> and <code>+</code> with a dot <code>.</code> in the version strings and also inserts dots <code>.</code> before and after any non number so that for example '4.3.2RC1' becomes '4.3.2.RC.1'. Then it compares the parts starting from left to right. If a part contains special version strings these are handled in the following order: <code>any string not found in this list</code> &lt; <code>dev</code> &lt; <code>alpha</code> = <code>a</code> &lt; <code>beta</code> = <code>b</code> &lt; <code>RC</code> = <code>rc</code> &lt; <code>#</code> &lt; <code>pl</code> = <code>p</code>. This way not only versions with different levels like '4.1' and '4.1.2' can be compared but also any PHP specific version containing development state.</p>
	 * @param string $version1 <p>First version number.</p>
	 * @param string $version2 <p>Second version number.</p>
	 * @param ?string $operator <p>An optional operator. The possible operators are: <code>&lt;</code>, <code>lt</code>, <code>&lt;=</code>, <code>le</code>, <code>&gt;</code>, <code>gt</code>, <code>&gt;=</code>, <code>ge</code>, <code>==</code>, <code>=</code>, <code>eq</code>, <code>!=</code>, <code>&lt;&gt;</code>, <code>ne</code> respectively.</p> <p>This parameter is case-sensitive, values should be lowercase.</p>
	 * @return int|bool <p>By default, <b>version_compare()</b> returns <code>-1</code> if the first version is lower than the second, <code>0</code> if they are equal, and <code>1</code> if the second is lower.</p><p>When using the optional <code>operator</code> argument, the function will return <b><code>true</code></b> if the relationship is the one specified by the operator, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.version-compare.php
	 * @see phpversion(), php_uname(), function_exists()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function version_compare(string $version1, string $version2, ?string $operator = null): int|bool {}

	/**
	 * Returns a unique identifier for the current thread
	 * <p>This function returns a unique identifier for the current thread.</p>
	 * @return int <p>Returns the thread id as an integer.</p>
	 * @link https://php.net/manual/en/function.zend-thread-id.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function zend_thread_id(): int {}

	/**
	 * Gets the version of the current Zend engine
	 * <p>Returns a string containing the version of the currently running Zend Engine.</p>
	 * @return string <p>Returns the Zend Engine version number, as a string.</p>
	 * @link https://php.net/manual/en/function.zend-version.php
	 * @see phpinfo(), phpcredits(), phpversion()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function zend_version(): string {}

	/**
	 * Microsoft Small Business Server was once installed on the system, but may have been upgraded to another version of Windows.
	 */
	define('0x00000001', null);

	/**
	 * Windows Server 2008 Enterprise, Windows Server 2003, Enterprise Edition, Windows 2000 Advanced Server, or Windows NT Server 4.0 Enterprise Edition is installed.
	 */
	define('0x00000002', null);

	/**
	 * Microsoft BackOffice components are installed.
	 */
	define('0x00000004', null);

	/**
	 * Terminal Services is installed. This value is always set. If this value is set but <code>0x00000100</code> is not set, then the system is running in application server mode.
	 */
	define('0x00000010', null);

	/**
	 * Microsoft Small Business Server is installed with the restrictive client license in force.
	 */
	define('0x00000020', null);

	/**
	 * Windows XP Embedded is installed.
	 */
	define('0x00000040', null);

	/**
	 * Windows Server 2008 Datacenter, Windows Server 2003, Datacenter Edition or Windows 2000 Datacenter Server is installed.
	 */
	define('0x00000080', null);

	/**
	 * Remote Desktop is supported, but only one interactive session is supported. This value is set unless the system is running in application server mode.
	 */
	define('0x00000100', null);

	/**
	 * Windows Vista Home Premium, Windows Vista Home Basic, or Windows XP Home Edition is installed.
	 */
	define('0x00000200', null);

	/**
	 * Windows Server 2003, Web Edition is installed.
	 */
	define('0x00000400', null);

	/**
	 * Windows Storage Server 2003 R2 or Windows Storage Server 2003 is installed.
	 */
	define('0x00002000', null);

	/**
	 * Windows Server 2003, Compute Cluster Edition is installed.
	 */
	define('0x00004000', null);

	/**
	 * Windows Home Server is installed.
	 */
	define('0x00008000', null);

	/**
	 * Enable <code>assert()</code> evaluation.
	 */
	define('ASSERT_ACTIVE', 1);

	/**
	 * Terminate execution on failed assertions.
	 */
	define('ASSERT_BAIL', 3);

	/**
	 * Callback to call on failed assertions.
	 */
	define('ASSERT_CALLBACK', 2);

	/**
	 * Disable <code>error_reporting</code> during assertion expression evaluation. Removed as of PHP 8.0.0.
	 */
	define('ASSERT_QUIET_EVAL', null);

	/**
	 * Issues a PHP warning for each failed assertion
	 */
	define('ASSERT_WARNING', 4);

	/**
	 * All the credits, equivalent to using: <code>CREDITS_DOCS + CREDITS_GENERAL + CREDITS_GROUP + CREDITS_MODULES + CREDITS_QA CREDITS_FULLPAGE</code>. It generates a complete stand-alone HTML page with the appropriate tags. This is the default value.
	 */
	define('CREDITS_ALL', 4294967295);

	/**
	 * The credits for the documentation team.
	 */
	define('CREDITS_DOCS', 16);

	/**
	 * Usually used in combination with the other flags. Indicates that a complete stand-alone HTML page needs to be printed including the information indicated by the other flags.
	 */
	define('CREDITS_FULLPAGE', 32);

	/**
	 * General credits: Language design and concept, PHP authors and SAPI module.
	 */
	define('CREDITS_GENERAL', 2);

	/**
	 * A list of the core developers
	 */
	define('CREDITS_GROUP', 1);

	/**
	 * A list of the extension modules for PHP, and their authors.
	 */
	define('CREDITS_MODULES', 8);

	/**
	 * The credits for the quality assurance team.
	 */
	define('CREDITS_QA', 64);

	/**
	 * A list of the server API modules for PHP, and their authors.
	 */
	define('CREDITS_SAPI', 4);

	/**
	 * Shows all of the above. This is the default value.
	 */
	define('INFO_ALL', 4294967295);

	/**
	 * Current Local and Master values for PHP directives. See also <code>ini_get()</code>.
	 */
	define('INFO_CONFIGURATION', 4);

	/**
	 * PHP Credits. See also <code>phpcredits()</code>.
	 */
	define('INFO_CREDITS', 2);

	/**
	 * Environment Variable information that's also available in $_ENV.
	 */
	define('INFO_ENVIRONMENT', 16);

	/**
	 * The configuration line, php.ini location, build date, Web Server, System and more.
	 */
	define('INFO_GENERAL', 1);

	/**
	 * PHP License information. See also the &#xBB;&#xA0;license faq.
	 */
	define('INFO_LICENSE', 64);

	/**
	 * Loaded modules and their respective settings.
	 */
	define('INFO_MODULES', 8);

	/**
	 * Shows all  predefined variables from <code>EGPCS</code> (Environment, GET, POST, Cookie, Server).
	 */
	define('INFO_VARIABLES', 32);

	/**
	 * Unused
	 */
	define('INI_ALL', 7);

	/**
	 * Unused
	 */
	define('INI_PERDIR', 2);

	/**
	 * Unused
	 */
	define('INI_SYSTEM', 4);

	/**
	 * Unused
	 */
	define('INI_USER', 1);

	/**
	 * This is a domain controller
	 */
	define('PHP_WINDOWS_NT_DOMAIN_CONTROLLER', null);

	/**
	 * This is a server system (eg. Server 2008/2003/2000), note that if this is a domain controller its reported as <b><code>PHP_WINDOWS_NT_DOMAIN_CONTROLLER</code></b>.
	 */
	define('PHP_WINDOWS_NT_SERVER', null);

	/**
	 * This is a workstation system (eg. Vista/XP/2000/NT4)
	 */
	define('PHP_WINDOWS_NT_WORKSTATION', null);

	/**
	 * The Windows build number (for example, Windows Vista with SP1 applied is build 6001)
	 */
	define('PHP_WINDOWS_VERSION_BUILD', null);

	/**
	 * The major version of Windows, this can be either <code>4</code> (NT4/Me/98/95), <code>5</code> (XP/2003 R2/2003/2000) or <code>6</code> (Vista/2008/7/8/8.1).
	 */
	define('PHP_WINDOWS_VERSION_MAJOR', null);

	/**
	 * The minor version of Windows, this can be either <code>0</code> (Vista/2008/2000/NT4/95), <code>1</code> (XP), <code>2</code> (2003 R2/2003/XP x64), <code>10</code> (98) or <code>90</code> (ME).
	 */
	define('PHP_WINDOWS_VERSION_MINOR', null);

	/**
	 * The platform that PHP currently is running on, this value is <code>2</code> on Windows Vista/XP/2000/NT4, Server 2008/2003 and on Windows ME/98/95 this value is <code>1</code>.
	 */
	define('PHP_WINDOWS_VERSION_PLATFORM', null);

	/**
	 * This contains the value used to determine the <code>PHP_WINDOWS_NT_&#42;</code> constants. This value may be one of the <code>PHP_WINDOWS_NT_&#42;</code> constants indicating the platform type.
	 */
	define('PHP_WINDOWS_VERSION_PRODUCTTYPE', null);

	/**
	 * The major version of the service pack installed, this value is <code>0</code> if no service pack is installed. For example, Windows XP with service pack 3 installed will make this value <code>3</code>.
	 */
	define('PHP_WINDOWS_VERSION_SP_MAJOR', null);

	/**
	 * The minor version of the service pack installed, this value is <code>0</code> if no service pack is installed.
	 */
	define('PHP_WINDOWS_VERSION_SP_MINOR', null);

	/**
	 * The suitemask is a bitmask that can tell if various features of Windows is installed, see the table below for possible bitfield values.
	 */
	define('PHP_WINDOWS_VERSION_SUITEMASK', null);

}
