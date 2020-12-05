<?php



namespace {

	/**
	 * Compiles and caches a PHP script without executing it
	 * <p>This function compiles a PHP script and adds it to the opcode cache without executing it. This can be used to prime the cache after a Web server restart by pre-caching files that will be included in later requests.</p>
	 * @param string $filename <p>The path to the PHP script to be compiled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>filename</code> was compiled successfully or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.opcache-compile-file.php
	 * @see opcache_invalidate()
	 * @since PHP 5 >= 5.5.5, PHP 7, PECL ZendOpcache > 7.0.2
	 */
	function opcache_compile_file(string $filename): bool {}

	/**
	 * Get configuration information about the cache
	 * <p>This function returns configuration information about the cache instance</p>
	 * @return array|false <p>Returns an array of information, including ini, blacklist and version</p>
	 * @link http://php.net/manual/en/function.opcache-get-configuration.php
	 * @see opcache_get_status()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
	 */
	function opcache_get_configuration() {}

	/**
	 * Get status information about the cache
	 * <p>This function returns state information about the cache instance</p>
	 * @param bool $include_scripts <p>Include script specific state information</p>
	 * @return array|false <p>Returns an array of information, optionally containing script specific state information, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.opcache-get-status.php
	 * @see opcache_get_configuration()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
	 */
	function opcache_get_status(bool $include_scripts = TRUE) {}

	/**
	 * Invalidates a cached script
	 * <p>This function invalidates a particular script from the opcode cache. If <code>force</code> is unset or <b><code>FALSE</code></b>, the script will only be invalidated if the modification time of the script is newer than the cached opcodes.</p>
	 * @param string $filename <p>The path to the script being invalidated.</p>
	 * @param bool $force <p>If set to <b><code>TRUE</code></b>, the script will be invalidated regardless of whether invalidation is necessary.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the opcode cache for <code>filename</code> was invalidated or if there was nothing to invalidate, or <b><code>FALSE</code></b> if the opcode cache is disabled.</p>
	 * @link http://php.net/manual/en/function.opcache-invalidate.php
	 * @see opcache_compile_file(), opcache_reset()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
	 */
	function opcache_invalidate(string $filename, bool $force = FALSE): bool {}

	/**
	 * Tells whether a script is cached in OPCache
	 * <p>This function checks if a PHP script has been cached in OPCache. This can be used to more easily detect the "warming" of the cache for a particular script.</p>
	 * @param string $filename <p>The path to the PHP script to be checked.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>filename</code> is cached in OPCache, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.opcache-is-script-cached.php
	 * @see opcache_compile_file()
	 * @since PHP 5 >= 5.5.11, PHP 7, PECL ZendOpcache >= 7.0.4
	 */
	function opcache_is_script_cached(string $filename): bool {}

	/**
	 * Resets the contents of the opcode cache
	 * <p>This function resets the entire opcode cache. After calling <b>opcache_reset()</b>, all scripts will be reloaded and reparsed the next time they are hit.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the opcode cache was reset, or <b><code>FALSE</code></b> if the opcode cache is disabled.</p>
	 * @link http://php.net/manual/en/function.opcache-reset.php
	 * @see opcache_invalidate()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
	 */
	function opcache_reset(): bool {}

}
