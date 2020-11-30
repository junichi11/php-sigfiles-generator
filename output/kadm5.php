<?php



namespace {

	/**
	 * Changes the principal's password
	 * <p><b>kadm5_chpass_principal()</b> sets the new password <code>password</code> for the <code>principal</code>.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @param string $principal <p>The principal.</p>
	 * @param string $password <p>The new password.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-chpass-principal.php
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_chpass_principal($handle, string $principal, string $password): bool {}

	/**
	 * Creates a kerberos principal with the given parameters
	 * <p>Creates a <code>principal</code> with the given <code>password</code>.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @param string $principal <p>The principal.</p>
	 * @param string $password <p>If <code>password</code> is omitted or is <b><code>NULL</code></b>, a random key will be generated.</p>
	 * @param array $options <p>It is possible to specify several optional parameters within the array <code>options</code>. Allowed are the following options: <b><code>KADM5_PRINC_EXPIRE_TIME</code></b>, <b><code>KADM5_PW_EXPIRATION</code></b>, <b><code>KADM5_ATTRIBUTES</code></b>, <b><code>KADM5_MAX_LIFE</code></b>, <b><code>KADM5_KVNO</code></b>, <b><code>KADM5_POLICY</code></b>, <b><code>KADM5_CLEARPOLICY</code></b>, <b><code>KADM5_MAX_RLIFE</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-create-principal.php
	 * @see kadm5_modify_principal(), kadm5_delete_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_create_principal($handle, string $principal, string $password = NULL, array $options = NULL): bool {}

	/**
	 * Deletes a kerberos principal
	 * <p>Removes the <code>principal</code> from the Kerberos database.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @param string $principal <p>The removed principal.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-delete-principal.php
	 * @see kadm5_modify_principal(), kadm5_create_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_delete_principal($handle, string $principal): bool {}

	/**
	 * Closes the connection to the admin server and releases all related resources
	 * <p>Closes the connection to the admin server and releases all related resources.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-destroy.php
	 * @see kadm5_init_with_password()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_destroy($handle): bool {}

	/**
	 * Flush all changes to the Kerberos database
	 * <p>Flush all changes to the Kerberos database, leaving the connection to the Kerberos admin server open.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-flush.php
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_flush($handle): bool {}

	/**
	 * Gets all policies from the Kerberos database
	 * <p>Gets an array containing the policies's names.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @return array <p>Returns array of policies on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-get-policies.php
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_get_policies($handle): array {}

	/**
	 * Gets the principal's entries from the Kerberos database
	 * <p>Gets the principal's entries from the Kerberos database.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @param string $principal <p>The principal.</p>
	 * @return array <p>Returns array of options containing the following keys: KADM5_PRINCIPAL, KADM5_PRINC_EXPIRE_TIME, KADM5_PW_EXPIRATION, KADM5_ATTRIBUTES, KADM5_MAX_LIFE, KADM5_MOD_NAME, KADM5_MOD_TIME, KADM5_KVNO, KADM5_POLICY, KADM5_MAX_RLIFE, KADM5_LAST_SUCCESS, KADM5_LAST_FAILED, KADM5_FAIL_AUTH_COUNT on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-get-principal.php
	 * @see kadm5_get_principals()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_get_principal($handle, string $principal): array {}

	/**
	 * Gets all principals from the Kerberos database
	 * <p><b>kadm5_get_principals()</b> returns an array containing the principals's names.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @return array <p>Returns array of principals on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-get-principals.php
	 * @see kadm5_get_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_get_principals($handle): array {}

	/**
	 * Opens a connection to the KADM5 library
	 * <p>Opens a connection with the KADM5 library using the <code>principal</code> and the given <code>password</code> to obtain initial credentials from the <code>admin_server</code>.</p>
	 * @param string $admin_server <p>The server.</p>
	 * @param string $realm <p>Defines the authentication domain for the connection.</p>
	 * @param string $principal <p>The principal.</p>
	 * @param string $password <p>If <code>password</code> is omitted or is <b><code>NULL</code></b>, a random key will be generated.</p>
	 * @return resource <p>Returns a KADM5 handle on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-init-with-password.php
	 * @see kadm5_destroy()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_init_with_password(string $admin_server, string $realm, string $principal, string $password) {}

	/**
	 * Modifies a kerberos principal with the given parameters
	 * <p>Modifies a <code>principal</code> according to the given <code>options</code>.</p>
	 * @param resource $handle <p>A KADM5 handle.</p>
	 * @param string $principal <p>The principal.</p>
	 * @param array $options <p>It is possible to specify several optional parameters within the array <code>options</code>. Allowed are the following options: <b><code>KADM5_PRINC_EXPIRE_TIME</code></b>, <b><code>KADM5_PW_EXPIRATION</code></b>, <b><code>KADM5_ATTRIBUTES</code></b>, <b><code>KADM5_MAX_LIFE</code></b>, <b><code>KADM5_KVNO</code></b>, <b><code>KADM5_POLICY</code></b>, <b><code>KADM5_CLEARPOLICY</code></b>, <b><code>KADM5_MAX_RLIFE</code></b>. <b><code>KADM5_FAIL_AUTH_COUNT</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.kadm5-modify-principal.php
	 * @see kadm5_create_principal(), kadm5_delete_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_modify_principal($handle, string $principal, array $options): bool {}

}
