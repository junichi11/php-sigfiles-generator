<?php



namespace {

	/**
	 * Get an extended attribute
	 * <p>This function gets the value of an extended attribute of a file.</p><p>Extended attributes have two different namespaces: user and root. The user namespace is available to all users, while the root namespace is available only to users with root privileges. xattr operates on the user namespace by default, but this can be changed with the <code>flags</code> parameter.</p>
	 * @param string $filename <p>The file from which we get the attribute.</p>
	 * @param string $name <p>The name of the attribute.</p>
	 * @param int $flags <p></p> <b>Supported xattr flags</b>   <b><code>XATTR_DONTFOLLOW</code></b> Do not follow the symbolic link but operate on symbolic link itself.   <b><code>XATTR_ROOT</code></b> Set attribute in root (trusted) namespace. Requires root privileges.
	 * @return string <p>Returns a string containing the value or <b><code>FALSE</code></b> if the attribute doesn't exist.</p>
	 * @link https://php.net/manual/en/function.xattr-get.php
	 * @see xattr_list(), xattr_set(), xattr_remove()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_get(string $filename, string $name, int $flags = 0): string {}

	/**
	 * Get a list of extended attributes
	 * <p>This functions gets a list of names of extended attributes of a file.</p><p>Extended attributes have two different namespaces: user and root. The user namespace is available to all users, while the root namespace is available only to users with root privileges. xattr operates on the user namespace by default, but this can be changed with the <code>flags</code> parameter.</p>
	 * @param string $filename <p>The path of the file.</p>
	 * @param int $flags <p></p> <b>Supported xattr flags</b>   <b><code>XATTR_DONTFOLLOW</code></b> Do not follow the symbolic link but operate on symbolic link itself.   <b><code>XATTR_ROOT</code></b> Set attribute in root (trusted) namespace. Requires root privileges.
	 * @return array <p>This function returns an array with names of extended attributes.</p>
	 * @link https://php.net/manual/en/function.xattr-list.php
	 * @see xattr_get()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_list(string $filename, int $flags = 0): array {}

	/**
	 * Remove an extended attribute
	 * <p>This function removes an extended attribute of a file.</p><p>Extended attributes have two different namespaces: user and root. The user namespace is available to all users, while the root namespace is available only to users with root privileges. xattr operates on the user namespace by default, but this can be changed with the <code>flags</code> parameter.</p>
	 * @param string $filename <p>The file from which we remove the attribute.</p>
	 * @param string $name <p>The name of the attribute to remove.</p>
	 * @param int $flags <p></p> <b>Supported xattr flags</b>   <b><code>XATTR_DONTFOLLOW</code></b> Do not follow the symbolic link but operate on symbolic link itself.   <b><code>XATTR_ROOT</code></b> Set attribute in root (trusted) namespace. Requires root privileges.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xattr-remove.php
	 * @see xattr_list(), xattr_set(), xattr_get()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_remove(string $filename, string $name, int $flags = 0): bool {}

	/**
	 * Set an extended attribute
	 * <p>This function sets the value of an extended attribute of a file.</p><p>Extended attributes have two different namespaces: user and root. The user namespace is available to all users, while the root namespace is available only to users with root privileges. xattr operates on the user namespace by default, but this can be changed with the <code>flags</code> parameter.</p>
	 * @param string $filename <p>The file in which we set the attribute.</p>
	 * @param string $name <p>The name of the extended attribute. This attribute will be created if it doesn't exist or replaced otherwise. You can change this behaviour by using the <code>flags</code> parameter.</p>
	 * @param string $value <p>The value of the attribute.</p>
	 * @param int $flags <p></p> <b>Supported xattr flags</b>   <b><code>XATTR_CREATE</code></b> Function will fail if extended attribute already exists.   <b><code>XATTR_REPLACE</code></b> Function will fail if extended attribute doesn't exist.   <b><code>XATTR_DONTFOLLOW</code></b> Do not follow the symbolic link but operate on symbolic link itself.   <b><code>XATTR_ROOT</code></b> Set attribute in root (trusted) namespace. Requires root privileges.
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xattr-set.php
	 * @see xattr_get(), xattr_remove()
	 * @since PECL xattr >= 0.9.0
	 */
	function xattr_set(string $filename, string $name, string $value, int $flags = 0): bool {}

	/**
	 * Check if filesystem supports extended attributes
	 * <p>This functions checks if the filesystem holding the given file supports extended attributes. Read access to the file is required.</p>
	 * @param string $filename <p>The path of the tested file.</p>
	 * @param int $flags <p></p> <b>Supported xattr flags</b>   <b><code>XATTR_DONTFOLLOW</code></b> Do not follow the symbolic link but operate on symbolic link itself.
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if filesystem supports extended attributes, <b><code>FALSE</code></b> if it doesn't and <b><code>NULL</code></b> if it can't be determined (for example wrong path or lack of permissions to file).</p>
	 * @link https://php.net/manual/en/function.xattr-supported.php
	 * @see xattr_get(), xattr_list()
	 * @since PECL xattr >= 1.0.0
	 */
	function xattr_supported(string $filename, int $flags = 0): bool {}

	/**
	 * Function will fail if extended attribute already exists.
	 */
	define('XATTR_CREATE', null);

	/**
	 * Do not follow the symbolic link but operate on symbolic link itself.
	 */
	define('XATTR_DONTFOLLOW', null);

	/**
	 * Function will fail if extended attribute doesn't exist.
	 */
	define('XATTR_REPLACE', null);

	/**
	 * Set attribute in root (trusted) namespace. Requires root privileges.
	 */
	define('XATTR_ROOT', null);

}
