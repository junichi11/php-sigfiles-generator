<?php



namespace {

	/**
	 * Add an alias for a virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @param string $aliasdomain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-add-alias-domain.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_add_alias_domain(string $domain, string $aliasdomain): bool {}

	/**
	 * Add alias to an existing virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $olddomain
	 * @param string $newdomain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-add-alias-domain-ex.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_add_alias_domain_ex(string $olddomain, string $newdomain): bool {}

	/**
	 * Add a new virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @param string $dir
	 * @param int $uid
	 * @param int $gid
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-add-domain.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_add_domain(string $domain, string $dir, int $uid, int $gid): bool {}

	/**
	 * Add a new virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @param string $passwd
	 * @param string $quota
	 * @param string $bounce
	 * @param bool $apop
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-add-domain-ex.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_add_domain_ex(string $domain, string $passwd, string $quota = NULL, string $bounce = NULL, bool $apop = NULL): bool {}

	/**
	 * Add a new user to the specified virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @param string $password
	 * @param string $gecos
	 * @param bool $apop
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-add-user.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_add_user(string $user, string $domain, string $password, string $gecos = NULL, bool $apop = NULL): bool {}

	/**
	 * Insert a virtual alias
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @param string $alias
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-alias-add.php
	 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
	 */
	function vpopmail_alias_add(string $user, string $domain, string $alias): bool {}

	/**
	 * Deletes all virtual aliases of a user
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-alias-del.php
	 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
	 */
	function vpopmail_alias_del(string $user, string $domain): bool {}

	/**
	 * Deletes all virtual aliases of a domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-alias-del-domain.php
	 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
	 */
	function vpopmail_alias_del_domain(string $domain): bool {}

	/**
	 * Get all lines of an alias for a domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $alias
	 * @param string $domain
	 * @return array
	 * @link http://php.net/manual/en/function.vpopmail-alias-get.php
	 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
	 */
	function vpopmail_alias_get(string $alias, string $domain): array {}

	/**
	 * Get all lines of an alias for a domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @return array
	 * @link http://php.net/manual/en/function.vpopmail-alias-get-all.php
	 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
	 */
	function vpopmail_alias_get_all(string $domain): array {}

	/**
	 * Attempt to validate a username/domain/password
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @param string $password
	 * @param string $apop
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-auth-user.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_auth_user(string $user, string $domain, string $password, string $apop = NULL): bool {}

	/**
	 * Delete a virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-del-domain.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_del_domain(string $domain): bool {}

	/**
	 * Delete a virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-del-domain-ex.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_del_domain_ex(string $domain): bool {}

	/**
	 * Delete a user from a virtual domain
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-del-user.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_del_user(string $user, string $domain): bool {}

	/**
	 * Get text message for last vpopmail error
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.vpopmail-error.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_error(): string {}

	/**
	 * Change a virtual user's password
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @param string $password
	 * @param bool $apop
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-passwd.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_passwd(string $user, string $domain, string $password, bool $apop = NULL): bool {}

	/**
	 * Sets a virtual user's quota
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $user
	 * @param string $domain
	 * @param string $quota
	 * @return bool
	 * @link http://php.net/manual/en/function.vpopmail-set-user-quota.php
	 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
	 */
	function vpopmail_set_user_quota(string $user, string $domain, string $quota): bool {}

}
