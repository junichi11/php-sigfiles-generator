<?php



namespace {

	/**
	 * Alias of ibase_add_user()
	 * <p>This function is an alias of: <code>ibase_add_user()</code>.</p>
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the new database user.</p>
	 * @param string $password <p>The password of the new user.</p>
	 * @param string $first_name <p>The first name of the new database user.</p>
	 * @param string $middle_name <p>The middle name of the new database user.</p>
	 * @param string $last_name <p>The last name of the new database user.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-add-user.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_add_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool {}

	/**
	 * Alias of ibase_affected_rows()
	 * <p>This function is an alias of: <code>ibase_affected_rows()</code>.</p>
	 * @param resource $link_identifier <p>A transaction context. If <code>link_identifier</code> is a connection resource, its default transaction is used.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.fbird-affected-rows.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_affected_rows($link_identifier = null): int {}

	/**
	 * Alias of ibase_backup()
	 * <p>This function is an alias of: <code>ibase_backup()</code>.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_db <p>The absolute file path to the database on the database server. You can also use a database alias.</p>
	 * @param string $dest_file <p>The path to the backup file on the database server.</p>
	 * @param int $options <p>Additional options to pass to the database server for backup. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_BKP_IGNORE_CHECKSUMS</code></b>, <b><code>IBASE_BKP_IGNORE_LIMBO</code></b>, <b><code>IBASE_BKP_METADATA_ONLY</code></b>, <b><code>IBASE_BKP_NO_GARBAGE_COLLECT</code></b>, <b><code>IBASE_BKP_OLD_DESCRIPTIONS</code></b>, <b><code>IBASE_BKP_NON_TRANSPORTABLE</code></b> or <b><code>IBASE_BKP_CONVERT</code></b>. Read the section about Predefined Constants for further information.</p>
	 * @param bool $verbose <p>Since the backup process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed
	 * @link https://php.net/manual/en/function.fbird-backup.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = false): mixed {}

	/**
	 * Alias of ibase_blob_add()
	 * <p>This function is an alias of: <code>ibase_blob_add()</code>.</p>
	 * @param resource $blob_handle <p>A blob handle opened with <code>ibase_blob_create()</code>.</p>
	 * @param string $data <p>The data to be added.</p>
	 * @return void
	 * @link https://php.net/manual/en/function.fbird-blob-add.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_add($blob_handle, string $data): void {}

	/**
	 * Cancel creating blob
	 * <p>This function will discard a BLOB if it has not yet been closed by <code>fbird_blob_close()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>fbird_blob_create()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fbird-blob-cancel.php
	 * @see fbird_blob_close(), fbird_blob_create(), fbird_blob_import()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_cancel($blob_handle): bool {}

	/**
	 * Alias of ibase_blob_close()
	 * <p>This function is an alias of: <code>ibase_blob_close()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_create()</code> or <code>ibase_blob_open()</code>.</p>
	 * @return mixed
	 * @link https://php.net/manual/en/function.fbird-blob-close.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_close($blob_handle): mixed {}

	/**
	 * Alias of ibase_blob_create()
	 * <p>This function is an alias of: <code>ibase_blob_create()</code>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return resource|false
	 * @link https://php.net/manual/en/function.fbird-blob-create.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_create($link_identifier = null) {}

	/**
	 * Alias of ibase_blob_echo()
	 * <p>This function is an alias of: <code>ibase_blob_echo()</code>.</p>
	 * @param string $blob_id
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-blob-echo.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_echo(string $blob_id): bool {}

	/**
	 * Alias of ibase_blob_get()
	 * <p>This function is an alias of: <code>ibase_blob_get()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_open()</code>.</p>
	 * @param int $len <p>Size of returned data.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.fbird-blob-get.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_get($blob_handle, int $len): string {}

	/**
	 * Alias of ibase_blob_import()
	 * <p>This function is an alias of: <code>ibase_blob_import()</code>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param resource $file_handle <p>The file handle is a handle returned by <code>fopen()</code>.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.fbird-blob-import.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_import($link_identifier, $file_handle): string {}

	/**
	 * Alias of ibase_blob_info()
	 * <p>This function is an alias of: <code>ibase_blob_info()</code>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $blob_id <p>A BLOB id.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.fbird-blob-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_info($link_identifier, string $blob_id): array {}

	/**
	 * Alias of ibase_blob_open()
	 * <p>This function is an alias of: <code>ibase_blob_open()</code>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $blob_id <p>A BLOB id.</p>
	 * @return resource|false
	 * @link https://php.net/manual/en/function.fbird-blob-open.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_blob_open($link_identifier, string $blob_id) {}

	/**
	 * Alias of ibase_close()
	 * <p>This function is an alias of: <code>ibase_close()</code>.</p>
	 * @param resource $connection_id <p>An InterBase link identifier returned from <code>ibase_connect()</code>. If omitted, the last opened link is assumed.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-close.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_close($connection_id = null): bool {}

	/**
	 * Alias of ibase_commit()
	 * <p>This function is an alias of: <code>ibase_commit()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function commits the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be committed. If the argument is a transaction identifier, the corresponding transaction will be committed.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-commit.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_commit($link_or_trans_identifier = null): bool {}

	/**
	 * Alias of ibase_commit_ret()
	 * <p>This function is an alias of: <code>ibase_commit_ret()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function commits the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be committed. If the argument is a transaction identifier, the corresponding transaction will be committed. The transaction context will be retained, so statements executed from within this transaction will not be invalidated.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-commit-ret.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_commit_ret($link_or_trans_identifier = null): bool {}

	/**
	 * Alias of ibase_connect()
	 * <p>This function is an alias of: <code>ibase_connect()</code>.</p>
	 * @param string $database <p>The <code>database</code> argument has to be a valid path to database file on the server it resides on. If the server is not local, it must be prefixed with either 'hostname:' (TCP/IP), 'hostname/port:' (TCP/IP with interbase server on custom TCP port), '//hostname/' (NetBEUI), depending on the connection protocol used.</p>
	 * @param string $username <p>The user name. Can be set with the <code>ibase.default_user</code> php.ini directive.</p>
	 * @param string $password <p>The password for <code>username</code>. Can be set with the <code>ibase.default_password</code> php.ini directive.</p>
	 * @param string $charset <p><code>charset</code> is the default character set for a database.</p>
	 * @param int $buffers <p><code>buffers</code> is the number of database buffers to allocate for the server-side cache. If 0 or omitted, server chooses its own default.</p>
	 * @param int $dialect <p><code>dialect</code> selects the default SQL dialect for any statement executed within a connection, and it defaults to the highest one supported by client libraries.</p>
	 * @param string $role <p>Functional only with InterBase 5 and up.</p>
	 * @param int $sync
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-connect.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_connect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) {}

	/**
	 * Alias of ibase_db_info()
	 * <p>This function is an alias of: <code>ibase_db_info()</code>.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return string
	 * @link https://php.net/manual/en/function.fbird-db-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_db_info($service_handle, string $db, int $action, int $argument = 0): string {}

	/**
	 * Alias of ibase_delete_user()
	 * <p>This function is an alias of: <code>ibase_delete_user()</code>.</p>
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the user you want to delete from the database.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-delete-user.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_delete_user($service_handle, string $user_name): bool {}

	/**
	 * Alias of ibase_drop_db()
	 * <p>This function is an alias of: <code>ibase_drop_db()</code>.</p>
	 * @param resource $connection <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-drop-db.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_drop_db($connection = null): bool {}

	/**
	 * Alias of ibase_errcode()
	 * <p>This function is an alias of: <code>ibase_errcode()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.fbird-errcode.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_errcode(): int {}

	/**
	 * Alias of ibase_errmsg()
	 * <p>This function is an alias of: <code>ibase_errmsg()</code>.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.fbird-errmsg.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_errmsg(): string {}

	/**
	 * Alias of ibase_execute()
	 * <p>This function is an alias of: <code>ibase_execute()</code>.</p>
	 * @param resource $query <p>An InterBase query prepared by <code>ibase_prepare()</code>.</p>
	 * @param mixed ...$values
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-execute.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_execute($query, mixed ...$values) {}

	/**
	 * Alias of ibase_fetch_assoc()
	 * <p>This function is an alias of: <code>ibase_fetch_assoc()</code>.</p>
	 * @param resource $result <p>The result handle.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.fbird-fetch-assoc.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_fetch_assoc($result, int $fetch_flag = 0): array {}

	/**
	 * Alias of ibase_fetch_object()
	 * <p>This function is an alias of: <code>ibase_fetch_object()</code>.</p>
	 * @param resource $result_id <p>An InterBase result identifier obtained either by <code>ibase_query()</code> or <code>ibase_execute()</code>.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return object
	 * @link https://php.net/manual/en/function.fbird-fetch-object.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_fetch_object($result_id, int $fetch_flag = 0): object {}

	/**
	 * Alias of ibase_fetch_row()
	 * <p>This function is an alias of: <code>ibase_fetch_row()</code>.</p>
	 * @param resource $result_identifier <p>An InterBase result identifier.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.fbird-fetch-row.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_fetch_row($result_identifier, int $fetch_flag = 0): array {}

	/**
	 * Alias of ibase_field_info()
	 * <p>This function is an alias of: <code>ibase_field_info()</code>.</p>
	 * @param resource $result <p>An InterBase result identifier.</p>
	 * @param int $field_number <p>Field offset.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.fbird-field-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_field_info($result, int $field_number): array {}

	/**
	 * Alias of ibase_free_event_handler()
	 * <p>This function is an alias of: <code>ibase_free_event_handler()</code>.</p>
	 * @param resource $event <p>An event resource, created by <code>ibase_set_event_handler()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-free-event-handler.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_free_event_handler($event): bool {}

	/**
	 * Alias of ibase_free_query()
	 * <p>This function is an alias of: <code>ibase_free_query()</code>.</p>
	 * @param resource $query <p>A query prepared with <code>ibase_prepare()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-free-query.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_free_query($query): bool {}

	/**
	 * Alias of ibase_free_result()
	 * <p>This function is an alias of: <code>ibase_free_result()</code>.</p>
	 * @param resource $result_identifier <p>A result set created by <code>ibase_query()</code> or <code>ibase_execute()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-free-result.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_free_result($result_identifier): bool {}

	/**
	 * Alias of ibase_gen_id()
	 * <p>This function is an alias of: <code>ibase_gen_id()</code>.</p>
	 * @param string $generator
	 * @param int $increment
	 * @param resource $link_identifier
	 * @return mixed
	 * @link https://php.net/manual/en/function.fbird-gen-id.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_gen_id(string $generator, int $increment = 1, $link_identifier = null): mixed {}

	/**
	 * Alias of ibase_maintain_db()
	 * <p>This function is an alias of: <code>ibase_maintain_db()</code>.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-maintain-db.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool {}

	/**
	 * Alias of ibase_modify_user()
	 * <p>This function is an alias of: <code>ibase_modify_user()</code>.</p>
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the database user to modify.</p>
	 * @param string $password <p>The user's new password.</p>
	 * @param string $first_name <p>The user's new first name.</p>
	 * @param string $middle_name <p>The user's new middle name.</p>
	 * @param string $last_name <p>The user's new last name.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-modify-user.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_modify_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool {}

	/**
	 * Alias of ibase_name_result()
	 * <p>This function is an alias of: <code>ibase_name_result()</code>.</p>
	 * @param resource $result <p>An InterBase result set.</p>
	 * @param string $name <p>The name to be assigned.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-name-result.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_name_result($result, string $name): bool {}

	/**
	 * Alias of ibase_num_fields()
	 * <p>This function is an alias of: <code>ibase_num_fields()</code>.</p>
	 * @param resource $result_id <p>An InterBase result identifier.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.fbird-num-fields.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_num_fields($result_id): int {}

	/**
	 * Alias of ibase_num_params()
	 * <p>This function is an alias of: <code>ibase_num_params()</code>.</p>
	 * @param resource $query <p>The prepared query handle.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.fbird-num-params.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_num_params($query): int {}

	/**
	 * Alias of ibase_param_info()
	 * <p>This function is an alias of: <code>ibase_param_info()</code>.</p>
	 * @param resource $query <p>An InterBase prepared query handle.</p>
	 * @param int $param_number <p>Parameter offset.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.fbird-param-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_param_info($query, int $param_number): array {}

	/**
	 * Alias of ibase_pconnect()
	 * <p>This function is an alias of: <code>ibase_pconnect()</code>.</p>
	 * @param string $database <p>The <code>database</code> argument has to be a valid path to database file on the server it resides on. If the server is not local, it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/' (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection protocol used.</p>
	 * @param string $username <p>The user name. Can be set with the <code>ibase.default_user</code> php.ini directive.</p>
	 * @param string $password <p>The password for <code>username</code>. Can be set with the <code>ibase.default_password</code> php.ini directive.</p>
	 * @param string $charset <p><code>charset</code> is the default character set for a database.</p>
	 * @param int $buffers <p><code>buffers</code> is the number of database buffers to allocate for the server-side cache. If 0 or omitted, server chooses its own default.</p>
	 * @param int $dialect <p><code>dialect</code> selects the default SQL dialect for any statement executed within a connection, and it defaults to the highest one supported by client libraries. Functional only with InterBase 6 and up.</p>
	 * @param string $role <p>Functional only with InterBase 5 and up.</p>
	 * @param int $sync
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-pconnect.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_pconnect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) {}

	/**
	 * Alias of ibase_prepare()
	 * <p>This function is an alias of: <code>ibase_prepare()</code>.</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-prepare.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_prepare(string $query) {}

	/**
	 * Alias of ibase_query()
	 * <p>This function is an alias of: <code>ibase_query()</code>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @param int $bind_args
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-query.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_query($link_identifier = null, string $query, int $bind_args = null) {}

	/**
	 * Alias of ibase_restore()
	 * <p>This function is an alias of: <code>ibase_restore()</code>.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_file <p>The absolute path on the server where the backup file is located.</p>
	 * @param string $dest_db <p>The path to create the new database on the server. You can also use database alias.</p>
	 * @param int $options <p>Additional options to pass to the database server for restore. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_RES_DEACTIVATE_IDX</code></b>, <b><code>IBASE_RES_NO_SHADOW</code></b>, <b><code>IBASE_RES_NO_VALIDITY</code></b>, <b><code>IBASE_RES_ONE_AT_A_TIME</code></b>, <b><code>IBASE_RES_REPLACE</code></b>, <b><code>IBASE_RES_CREATE</code></b>, <b><code>IBASE_RES_USE_ALL_SPACE</code></b>, <b><code>IBASE_PRP_PAGE_BUFFERS</code></b>, <b><code>IBASE_PRP_SWEEP_INTERVAL</code></b>, <b><code>IBASE_RES_CREATE</code></b>. Read the section about Predefined Constants for further information.</p>
	 * @param bool $verbose <p>Since the restore process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed
	 * @link https://php.net/manual/en/function.fbird-restore.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = false): mixed {}

	/**
	 * Alias of ibase_rollback()
	 * <p>This function is an alias of: <code>ibase_rollback()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function rolls back the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be rolled back. If the argument is a transaction identifier, the corresponding transaction will be rolled back.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-rollback.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_rollback($link_or_trans_identifier = null): bool {}

	/**
	 * Alias of ibase_rollback_ret()
	 * <p>This function is an alias of: <code>ibase_rollback_ret()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function rolls back the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be rolled back. If the argument is a transaction identifier, the corresponding transaction will be rolled back. The transaction context will be retained, so statements executed from within this transaction will not be invalidated.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-rollback-ret.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_rollback_ret($link_or_trans_identifier = null): bool {}

	/**
	 * Alias of ibase_server_info()
	 * <p>This function is an alias of: <code>ibase_server_info()</code>.</p>
	 * @param resource $service_handle <p>A previously created connection to the database server.</p>
	 * @param int $action <p>A valid constant.</p>
	 * @return string
	 * @link https://php.net/manual/en/function.fbird-server-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_server_info($service_handle, int $action): string {}

	/**
	 * Alias of ibase_service_attach()
	 * <p>This function is an alias of: <code>ibase_service_attach()</code>.</p>
	 * @param string $host <p>The name or ip address of the database host. You can define the port by adding '/' and port number. If no port is specified, port 3050 will be used.</p>
	 * @param string $dba_username <p>The name of any valid user.</p>
	 * @param string $dba_password <p>The user's password.</p>
	 * @return resource|false
	 * @link https://php.net/manual/en/function.fbird-service-attach.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_service_attach(string $host, string $dba_username, string $dba_password) {}

	/**
	 * Alias of ibase_service_detach()
	 * <p>This function is an alias of: <code>ibase_service_detach()</code>.</p>
	 * @param resource $service_handle <p>A previously created connection to the database server.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.fbird-service-detach.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_service_detach($service_handle): bool {}

	/**
	 * Alias of ibase_set_event_handler()
	 * <p>This function is an alias of: <code>ibase_set_event_handler()</code>.</p>
	 * @param callable $event_handler <p>The callback is called with the event name and the link resource as arguments whenever one of the specified events is posted by the database.</p> <p>The callback must return <b><code>false</code></b> if the event handler should be canceled. Any other return value is ignored. This function accepts up to 15 event arguments.</p>
	 * @param string $event_name <p>An event name.</p>
	 * @param string ...$even_names
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-set-event-handler.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_set_event_handler(callable $event_handler, string $event_name, string ...$even_names) {}

	/**
	 * Alias of ibase_trans()
	 * <p>This function is an alias of: <code>ibase_trans()</code>.</p>
	 * @param int $trans_args <p><code>trans_args</code> can be a combination of <b><code>IBASE_READ</code></b>, <b><code>IBASE_WRITE</code></b>, <b><code>IBASE_COMMITTED</code></b>, <b><code>IBASE_CONSISTENCY</code></b>, <b><code>IBASE_CONCURRENCY</code></b>, <b><code>IBASE_REC_VERSION</code></b>, <b><code>IBASE_REC_NO_VERSION</code></b>, <b><code>IBASE_WAIT</code></b> and <b><code>IBASE_NOWAIT</code></b>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return resource
	 * @link https://php.net/manual/en/function.fbird-trans.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_trans(int $trans_args = null, $link_identifier = null) {}

	/**
	 * Alias of ibase_wait_event()
	 * <p>This function is an alias of: <code>ibase_wait_event()</code>.</p>
	 * @param string $event_name <p>The event name.</p>
	 * @param string ...$event_names
	 * @return string
	 * @link https://php.net/manual/en/function.fbird-wait-event.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function fbird_wait_event(string $event_name, string ...$event_names): string {}

	/**
	 * Add a user to a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the new database user.</p>
	 * @param string $password <p>The password of the new user.</p>
	 * @param string $first_name <p>The first name of the new database user.</p>
	 * @param string $middle_name <p>The middle name of the new database user.</p>
	 * @param string $last_name <p>The last name of the new database user.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-add-user.php
	 * @see ibase_modify_user(), ibase_delete_user()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_add_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool {}

	/**
	 * Return the number of rows that were affected by the previous query
	 * <p>This function returns the number of rows that were affected by the previous query (INSERT, UPDATE or DELETE) that was executed from within the specified transaction context.</p>
	 * @param resource $link_identifier <p>A transaction context. If <code>link_identifier</code> is a connection resource, its default transaction is used.</p>
	 * @return int <p>Returns the number of rows as an integer.</p>
	 * @link https://php.net/manual/en/function.ibase-affected-rows.php
	 * @see ibase_query(), ibase_execute()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_affected_rows($link_identifier = null): int {}

	/**
	 * Initiates a backup task in the service manager and returns immediately
	 * <p>This function passes the arguments to the (remote) database server. There it starts a new backup process. Therefore you won't get any responses.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_db <p>The absolute file path to the database on the database server. You can also use a database alias.</p>
	 * @param string $dest_file <p>The path to the backup file on the database server.</p>
	 * @param int $options <p>Additional options to pass to the database server for backup. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_BKP_IGNORE_CHECKSUMS</code></b>, <b><code>IBASE_BKP_IGNORE_LIMBO</code></b>, <b><code>IBASE_BKP_METADATA_ONLY</code></b>, <b><code>IBASE_BKP_NO_GARBAGE_COLLECT</code></b>, <b><code>IBASE_BKP_OLD_DESCRIPTIONS</code></b>, <b><code>IBASE_BKP_NON_TRANSPORTABLE</code></b> or <b><code>IBASE_BKP_CONVERT</code></b>. Read the section about Predefined Constants for further information.</p>
	 * @param bool $verbose <p>Since the backup process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Since the backup process is done on the (remote) server, this function just passes the arguments to it. While the arguments are legal, you won't get <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.ibase-backup.php
	 * @see ibase_restore()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = false): mixed {}

	/**
	 * Add data into a newly created blob
	 * <p><b>ibase_blob_add()</b> adds data into a blob created with <code>ibase_blob_create()</code>.</p>
	 * @param resource $blob_handle <p>A blob handle opened with <code>ibase_blob_create()</code>.</p>
	 * @param string $data <p>The data to be added.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-add.php
	 * @see ibase_blob_cancel(), ibase_blob_close(), ibase_blob_create(), ibase_blob_import()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_add($blob_handle, string $data): void {}

	/**
	 * Cancel creating blob
	 * <p>This function will discard a BLOB if it has not yet been closed by <code>ibase_blob_close()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_create()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-cancel.php
	 * @see ibase_blob_close(), ibase_blob_create(), ibase_blob_import()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_cancel($blob_handle): bool {}

	/**
	 * Close blob
	 * <p>This function closes a BLOB that has either been opened for reading by <code>ibase_blob_open()</code> or has been opened for writing by <code>ibase_blob_create()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_create()</code> or <code>ibase_blob_open()</code>.</p>
	 * @return mixed <p>If the BLOB was being read, this function returns <b><code>true</code></b> on success, if the BLOB was being written to, this function returns a string containing the BLOB id that has been assigned to it by the database. On failure, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-close.php
	 * @see ibase_blob_cancel(), ibase_blob_open()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_close($blob_handle): mixed {}

	/**
	 * Create a new blob for adding data
	 * <p><b>ibase_blob_create()</b> creates a new BLOB for filling with data.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return resource|false <p>Returns a BLOB handle for later use with <code>ibase_blob_add()</code> or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-create.php
	 * @see ibase_blob_add(), ibase_blob_cancel(), ibase_blob_close(), ibase_blob_import()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_create($link_identifier = null) {}

	/**
	 * Output blob contents to browser
	 * <p>This function opens a BLOB for reading and sends its contents directly to standard output (the browser, in most cases).</p>
	 * @param string $blob_id
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-echo.php
	 * @see ibase_blob_open(), ibase_blob_close(), ibase_blob_get()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_echo(string $blob_id): bool {}

	/**
	 * Get len bytes data from open blob
	 * <p>This function returns at most <code>len</code> bytes from a BLOB that has been opened for reading by <code>ibase_blob_open()</code>.</p><p><b>Note</b>:</p><p>It is not possible to read from a BLOB that has been opened for writing by <code>ibase_blob_create()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>ibase_blob_open()</code>.</p>
	 * @param int $len <p>Size of returned data.</p>
	 * @return string <p>Returns at most <code>len</code> bytes from the BLOB, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-get.php
	 * @see ibase_blob_open(), ibase_blob_close(), ibase_blob_echo()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_get($blob_handle, int $len): string {}

	/**
	 * Create blob, copy file in it, and close it
	 * <p>This function creates a BLOB, reads an entire file into it, closes it and returns the assigned BLOB id.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param resource $file_handle <p>The file handle is a handle returned by <code>fopen()</code>.</p>
	 * @return string <p>Returns the BLOB id on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-import.php
	 * @see ibase_blob_add(), ibase_blob_cancel(), ibase_blob_close(), ibase_blob_create()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_import($link_identifier, $file_handle): string {}

	/**
	 * Return blob length and other useful info
	 * <p>Returns the BLOB length and other useful information.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $blob_id <p>A BLOB id.</p>
	 * @return array <p>Returns an array containing information about a BLOB. The information returned consists of the length of the BLOB, the number of segments it contains, the size of the largest segment, and whether it is a stream BLOB or a segmented BLOB.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_info($link_identifier, string $blob_id): array {}

	/**
	 * Open blob for retrieving data parts
	 * <p>Opens an existing BLOB for reading.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $blob_id <p>A BLOB id.</p>
	 * @return resource|false <p>Returns a BLOB handle for later use with <code>ibase_blob_get()</code> or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-blob-open.php
	 * @see ibase_blob_close(), ibase_blob_echo(), ibase_blob_get()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_blob_open($link_identifier, string $blob_id) {}

	/**
	 * Close a connection to an InterBase database
	 * <p>Closes the link to an InterBase database that's associated with a connection id returned from <code>ibase_connect()</code>. Default transaction on link is committed, other transactions are rolled back.</p>
	 * @param resource $connection_id <p>An InterBase link identifier returned from <code>ibase_connect()</code>. If omitted, the last opened link is assumed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-close.php
	 * @see ibase_connect(), ibase_pconnect()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_close($connection_id = null): bool {}

	/**
	 * Commit a transaction
	 * <p>Commits a transaction.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function commits the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be committed. If the argument is a transaction identifier, the corresponding transaction will be committed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-commit.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_commit($link_or_trans_identifier = null): bool {}

	/**
	 * Commit a transaction without closing it
	 * <p>Commits a transaction without closing it.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function commits the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be committed. If the argument is a transaction identifier, the corresponding transaction will be committed. The transaction context will be retained, so statements executed from within this transaction will not be invalidated.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-commit-ret.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_commit_ret($link_or_trans_identifier = null): bool {}

	/**
	 * Open a connection to a database
	 * <p>Establishes a connection to an Firebird/InterBase server.</p><p>In case a second call is made to <b>ibase_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned. The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling <code>ibase_close()</code>.</p>
	 * @param string $database <p>The <code>database</code> argument has to be a valid path to database file on the server it resides on. If the server is not local, it must be prefixed with either 'hostname:' (TCP/IP), 'hostname/port:' (TCP/IP with interbase server on custom TCP port), '//hostname/' (NetBEUI), depending on the connection protocol used.</p>
	 * @param string $username <p>The user name. Can be set with the <code>ibase.default_user</code> php.ini directive.</p>
	 * @param string $password <p>The password for <code>username</code>. Can be set with the <code>ibase.default_password</code> php.ini directive.</p>
	 * @param string $charset <p><code>charset</code> is the default character set for a database.</p>
	 * @param int $buffers <p><code>buffers</code> is the number of database buffers to allocate for the server-side cache. If 0 or omitted, server chooses its own default.</p>
	 * @param int $dialect <p><code>dialect</code> selects the default SQL dialect for any statement executed within a connection, and it defaults to the highest one supported by client libraries.</p>
	 * @param string $role <p>Functional only with InterBase 5 and up.</p>
	 * @param int $sync
	 * @return resource <p>Returns an Firebird/InterBase link identifier on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ibase-connect.php
	 * @see ibase_pconnect(), ibase_close()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_connect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) {}

	/**
	 * Request statistics about a database
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return string
	 * @link https://php.net/manual/en/function.ibase-db-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_db_info($service_handle, string $db, int $action, int $argument = 0): string {}

	/**
	 * Delete a user from a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the user you want to delete from the database.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-delete-user.php
	 * @see ibase_add_user(), ibase_modify_user()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_delete_user($service_handle, string $user_name): bool {}

	/**
	 * Drops a database
	 * <p>This functions drops a database that was opened by either <code>ibase_connect()</code> or <code>ibase_pconnect()</code>. The database is closed and deleted from the server.</p>
	 * @param resource $connection <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-drop-db.php
	 * @see ibase_connect(), ibase_pconnect()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_drop_db($connection = null): bool {}

	/**
	 * Return an error code
	 * <p>Returns the error code that resulted from the most recent InterBase function call.</p>
	 * @return int <p>Returns the error code as an integer, or <b><code>false</code></b> if no error occurred.</p>
	 * @link https://php.net/manual/en/function.ibase-errcode.php
	 * @see ibase_errmsg()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_errcode(): int {}

	/**
	 * Return error messages
	 * <p>Returns the error message that resulted from the most recent InterBase function call.</p>
	 * @return string <p>Returns the error message as a string, or <b><code>false</code></b> if no error occurred.</p>
	 * @link https://php.net/manual/en/function.ibase-errmsg.php
	 * @see ibase_errcode()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_errmsg(): string {}

	/**
	 * Execute a previously prepared query
	 * <p>Execute a query prepared by <code>ibase_prepare()</code>.</p><p>This is a lot more effective than using <code>ibase_query()</code> if you are repeating a same kind of query several times with only some parameters changing.</p>
	 * @param resource $query <p>An InterBase query prepared by <code>ibase_prepare()</code>.</p>
	 * @param mixed $values
	 * @return resource <p>If the query raises an error, returns <b><code>false</code></b>. If it is successful and there is a (possibly empty) result set (such as with a SELECT query), returns a result identifier. If the query was successful and there were no results, returns <b><code>true</code></b>.</p><p><b>Note</b>:</p><p>This function returns the number of rows affected by the query (if &gt; 0 and applicable to the statement type). A query that succeeded, but did not affect any rows (e.g. an UPDATE of a non-existent record) will return <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.ibase-execute.php
	 * @see ibase_query()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_execute($query, mixed ...$values) {}

	/**
	 * Fetch a result row from a query as an associative array
	 * <p>Fetch a result row from a query as an associative array.</p><p><b>ibase_fetch_assoc()</b> fetches one row of data from the <code>result</code>. If two or more columns of the result have the same field names, the last column will take precedence. To access the other column(s) of the same name, you either need to access the result with numeric indices by using <code>ibase_fetch_row()</code> or use alias names in your query.</p>
	 * @param resource $result <p>The result handle.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return array <p>Returns an associative array that corresponds to the fetched row. Subsequent calls will return the next row in the result set, or <b><code>false</code></b> if there are no more rows.</p>
	 * @link https://php.net/manual/en/function.ibase-fetch-assoc.php
	 * @see ibase_fetch_row(), ibase_fetch_object()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_fetch_assoc($result, int $fetch_flag = 0): array {}

	/**
	 * Get an object from a InterBase database
	 * <p>Fetches a row as a pseudo-object from a given result identifier.</p><p>Subsequent calls to <b>ibase_fetch_object()</b> return the next row in the result set.</p>
	 * @param resource $result_id <p>An InterBase result identifier obtained either by <code>ibase_query()</code> or <code>ibase_execute()</code>.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return object <p>Returns an object with the next row information, or <b><code>false</code></b> if there are no more rows.</p>
	 * @link https://php.net/manual/en/function.ibase-fetch-object.php
	 * @see ibase_fetch_row(), ibase_fetch_assoc()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_fetch_object($result_id, int $fetch_flag = 0): object {}

	/**
	 * Fetch a row from an InterBase database
	 * <p><b>ibase_fetch_row()</b> fetches one row of data from the given result set.</p><p>Subsequent calls to <b>ibase_fetch_row()</b> return the next row in the result set, or <b><code>false</code></b> if there are no more rows.</p>
	 * @param resource $result_identifier <p>An InterBase result identifier.</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> is a combination of the constants <b><code>IBASE_TEXT</code></b> and <b><code>IBASE_UNIXTIME</code></b> ORed together. Passing <b><code>IBASE_TEXT</code></b> will cause this function to return BLOB contents instead of BLOB ids. Passing <b><code>IBASE_UNIXTIME</code></b> will cause this function to return date/time values as Unix timestamps instead of as formatted strings.</p>
	 * @return array <p>Returns an array that corresponds to the fetched row, or <b><code>false</code></b> if there are no more rows. Each result column is stored in an array offset, starting at offset 0.</p>
	 * @link https://php.net/manual/en/function.ibase-fetch-row.php
	 * @see ibase_fetch_assoc(), ibase_fetch_object()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_fetch_row($result_identifier, int $fetch_flag = 0): array {}

	/**
	 * Get information about a field
	 * <p>Returns an array with information about a field after a select query has been run.</p>
	 * @param resource $result <p>An InterBase result identifier.</p>
	 * @param int $field_number <p>Field offset.</p>
	 * @return array <p>Returns an array with the following keys: <code>name</code>, <code>alias</code>, <code>relation</code>, <code>length</code> and <code>type</code>.</p>
	 * @link https://php.net/manual/en/function.ibase-field-info.php
	 * @see ibase_num_fields()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_field_info($result, int $field_number): array {}

	/**
	 * Cancels a registered event handler
	 * <p>This function causes the registered event handler specified by <code>event</code> to be cancelled. The callback function will no longer be called for the events it was registered to handle.</p>
	 * @param resource $event <p>An event resource, created by <code>ibase_set_event_handler()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-free-event-handler.php
	 * @see ibase_set_event_handler()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_free_event_handler($event): bool {}

	/**
	 * Free memory allocated by a prepared query
	 * <p>Frees a prepared query.</p>
	 * @param resource $query <p>A query prepared with <code>ibase_prepare()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-free-query.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_free_query($query): bool {}

	/**
	 * Free a result set
	 * <p>Frees a result set.</p>
	 * @param resource $result_identifier <p>A result set created by <code>ibase_query()</code> or <code>ibase_execute()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-free-result.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_free_result($result_identifier): bool {}

	/**
	 * Increments the named generator and returns its new value
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $generator
	 * @param int $increment
	 * @param resource $link_identifier
	 * @return mixed <p>Returns new generator value as integer, or as string if the value is too big.</p>
	 * @link https://php.net/manual/en/function.ibase-gen-id.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_gen_id(string $generator, int $increment = 1, $link_identifier = null): mixed {}

	/**
	 * Execute a maintenance command on the database server
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-maintain-db.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool {}

	/**
	 * Modify a user to a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the database user to modify.</p>
	 * @param string $password <p>The user's new password.</p>
	 * @param string $first_name <p>The user's new first name.</p>
	 * @param string $middle_name <p>The user's new middle name.</p>
	 * @param string $last_name <p>The user's new last name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-modify-user.php
	 * @see ibase_add_user(), ibase_delete_user()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_modify_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool {}

	/**
	 * Assigns a name to a result set
	 * <p>This function assigns a name to a result set. This name can be used later in UPDATE|DELETE ... WHERE CURRENT OF <code>name</code> statements.</p>
	 * @param resource $result <p>An InterBase result set.</p>
	 * @param string $name <p>The name to be assigned.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-name-result.php
	 * @see ibase_prepare(), ibase_execute()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_name_result($result, string $name): bool {}

	/**
	 * Get the number of fields in a result set
	 * <p>Get the number of fields in a result set.</p>
	 * @param resource $result_id <p>An InterBase result identifier.</p>
	 * @return int <p>Returns the number of fields as an integer.</p>
	 * @link https://php.net/manual/en/function.ibase-num-fields.php
	 * @see ibase_field_info()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_num_fields($result_id): int {}

	/**
	 * Return the number of parameters in a prepared query
	 * <p>This function returns the number of parameters in the prepared query specified by <code>query</code>. This is the number of binding arguments that must be present when calling <code>ibase_execute()</code>.</p>
	 * @param resource $query <p>The prepared query handle.</p>
	 * @return int <p>Returns the number of parameters as an integer.</p>
	 * @link https://php.net/manual/en/function.ibase-num-params.php
	 * @see ibase_prepare(), ibase_param_info()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_num_params($query): int {}

	/**
	 * Return information about a parameter in a prepared query
	 * <p>Returns an array with information about a parameter after a query has been prepared.</p>
	 * @param resource $query <p>An InterBase prepared query handle.</p>
	 * @param int $param_number <p>Parameter offset.</p>
	 * @return array <p>Returns an array with the following keys: <code>name</code>, <code>alias</code>, <code>relation</code>, <code>length</code> and <code>type</code>.</p>
	 * @link https://php.net/manual/en/function.ibase-param-info.php
	 * @see ibase_field_info(), ibase_num_params()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_param_info($query, int $param_number): array {}

	/**
	 * Open a persistent connection to an InterBase database
	 * <p>Opens a persistent connection to an InterBase database.</p><p><b>ibase_pconnect()</b> acts very much like <code>ibase_connect()</code> with two major differences.</p><p>First, when connecting, the function will first try to find a (persistent) link that's already opened with the same parameters. If one is found, an identifier for it will be returned instead of opening a new connection.</p><p>Second, the connection to the InterBase server will not be closed when the execution of the script ends. Instead, the link will remain open for future use (<code>ibase_close()</code> will not close links established by <b>ibase_pconnect()</b>). This type of link is therefore called 'persistent'.</p>
	 * @param string $database <p>The <code>database</code> argument has to be a valid path to database file on the server it resides on. If the server is not local, it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/' (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection protocol used.</p>
	 * @param string $username <p>The user name. Can be set with the <code>ibase.default_user</code> php.ini directive.</p>
	 * @param string $password <p>The password for <code>username</code>. Can be set with the <code>ibase.default_password</code> php.ini directive.</p>
	 * @param string $charset <p><code>charset</code> is the default character set for a database.</p>
	 * @param int $buffers <p><code>buffers</code> is the number of database buffers to allocate for the server-side cache. If 0 or omitted, server chooses its own default.</p>
	 * @param int $dialect <p><code>dialect</code> selects the default SQL dialect for any statement executed within a connection, and it defaults to the highest one supported by client libraries. Functional only with InterBase 6 and up.</p>
	 * @param string $role <p>Functional only with InterBase 5 and up.</p>
	 * @param int $sync
	 * @return resource <p>Returns an InterBase link identifier on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ibase-pconnect.php
	 * @see ibase_close(), ibase_connect()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_pconnect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) {}

	/**
	 * Prepare a query for later binding of parameter placeholders and execution
	 * <p>Prepare a query for later binding of parameter placeholders and execution (via <code>ibase_execute()</code>).</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @return resource <p>Returns a prepared query handle, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ibase-prepare.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_prepare(string $query) {}

	/**
	 * Execute a query on an InterBase database
	 * <p>Performs a query on an InterBase database.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @param int $bind_args
	 * @return resource <p>If the query raises an error, returns <b><code>false</code></b>. If it is successful and there is a (possibly empty) result set (such as with a SELECT query), returns a result identifier. If the query was successful and there were no results, returns <b><code>true</code></b>.</p><p><b>Note</b>:</p><p>In PHP 5.0.0 and up, this function will return the number of rows affected by the query for INSERT, UPDATE and DELETE statements. In order to retain backward compatibility, it will return <b><code>true</code></b> for these statements if the query succeeded without affecting any rows.</p>
	 * @link https://php.net/manual/en/function.ibase-query.php
	 * @see ibase_errmsg(), ibase_fetch_row(), ibase_fetch_object(), ibase_free_result()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_query($link_identifier = null, string $query, int $bind_args = null) {}

	/**
	 * Initiates a restore task in the service manager and returns immediately
	 * <p>This function passes the arguments to the (remote) database server. There it starts a new restore process. Therefore you won't get any responses.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_file <p>The absolute path on the server where the backup file is located.</p>
	 * @param string $dest_db <p>The path to create the new database on the server. You can also use database alias.</p>
	 * @param int $options <p>Additional options to pass to the database server for restore. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_RES_DEACTIVATE_IDX</code></b>, <b><code>IBASE_RES_NO_SHADOW</code></b>, <b><code>IBASE_RES_NO_VALIDITY</code></b>, <b><code>IBASE_RES_ONE_AT_A_TIME</code></b>, <b><code>IBASE_RES_REPLACE</code></b>, <b><code>IBASE_RES_CREATE</code></b>, <b><code>IBASE_RES_USE_ALL_SPACE</code></b>, <b><code>IBASE_PRP_PAGE_BUFFERS</code></b>, <b><code>IBASE_PRP_SWEEP_INTERVAL</code></b>, <b><code>IBASE_RES_CREATE</code></b>. Read the section about Predefined Constants for further information.</p>
	 * @param bool $verbose <p>Since the restore process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Since the restore process is done on the (remote) server, this function just passes the arguments to it. While the arguments are legal, you won't get <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.ibase-restore.php
	 * @see ibase_backup()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = false): mixed {}

	/**
	 * Roll back a transaction
	 * <p>Rolls back a transaction.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function rolls back the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be rolled back. If the argument is a transaction identifier, the corresponding transaction will be rolled back.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-rollback.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_rollback($link_or_trans_identifier = null): bool {}

	/**
	 * Roll back a transaction without closing it
	 * <p>Rolls back a transaction without closing it.</p>
	 * @param resource $link_or_trans_identifier <p>If called without an argument, this function rolls back the default transaction of the default link. If the argument is a connection identifier, the default transaction of the corresponding connection will be rolled back. If the argument is a transaction identifier, the corresponding transaction will be rolled back. The transaction context will be retained, so statements executed from within this transaction will not be invalidated.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-rollback-ret.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_rollback_ret($link_or_trans_identifier = null): bool {}

	/**
	 * Request information about a database server
	 * @param resource $service_handle <p>A previously created connection to the database server.</p>
	 * @param int $action <p>A valid constant.</p>
	 * @return string <p>Returns mixed types depending on context.</p>
	 * @link https://php.net/manual/en/function.ibase-server-info.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_server_info($service_handle, int $action): string {}

	/**
	 * Connect to the service manager
	 * @param string $host <p>The name or ip address of the database host. You can define the port by adding '/' and port number. If no port is specified, port 3050 will be used.</p>
	 * @param string $dba_username <p>The name of any valid user.</p>
	 * @param string $dba_password <p>The user's password.</p>
	 * @return resource|false <p>Returns a Interbase / Firebird link identifier on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-service-attach.php
	 * @see ibase_service_detach()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_service_attach(string $host, string $dba_username, string $dba_password) {}

	/**
	 * Disconnect from the service manager
	 * @param resource $service_handle <p>A previously created connection to the database server.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ibase-service-detach.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_service_detach($service_handle): bool {}

	/**
	 * Register a callback function to be called when events are posted
	 * <p>This function registers a PHP user function as event handler for the specified events.</p>
	 * @param callable $event_handler <p>The callback is called with the event name and the link resource as arguments whenever one of the specified events is posted by the database.</p> <p>The callback must return <b><code>false</code></b> if the event handler should be canceled. Any other return value is ignored. This function accepts up to 15 event arguments.</p>
	 * @param string $event_name <p>An event name.</p>
	 * @param string $even_names
	 * @return resource <p>The return value is an event resource. This resource can be used to free the event handler using <code>ibase_free_event_handler()</code>.</p>
	 * @link https://php.net/manual/en/function.ibase-set-event-handler.php
	 * @see ibase_free_event_handler(), ibase_wait_event()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_set_event_handler(callable $event_handler, string $event_name, string ...$even_names) {}

	/**
	 * Begin a transaction
	 * <p>Begins a transaction.</p><p><b>Note</b>:</p><p>The first call to <b>ibase_trans()</b> will not return the default transaction of a connection. All transactions started by <b>ibase_trans()</b> will be rolled back at the end of the script if they were not committed or rolled back by either <code>ibase_commit()</code> or <code>ibase_rollback()</code>.</p><p><b>Note</b>:</p><p>This function will accept multiple <code>trans_args</code> and <code>link_identifier</code> arguments. This allows transactions over multiple database connections, which are committed using a 2-phase commit algorithm. This means you can rely on the updates to either succeed in every database, or fail in every database. It does NOT mean you can use tables from different databases in the same query!</p><p>If you use transactions over multiple databases, you will have to specify both the <code>link_id</code> and <code>transaction_id</code> in calls to <code>ibase_query()</code> and <code>ibase_prepare()</code>.</p>
	 * @param int $trans_args <p><code>trans_args</code> can be a combination of <b><code>IBASE_READ</code></b>, <b><code>IBASE_WRITE</code></b>, <b><code>IBASE_COMMITTED</code></b>, <b><code>IBASE_CONSISTENCY</code></b>, <b><code>IBASE_CONCURRENCY</code></b>, <b><code>IBASE_REC_VERSION</code></b>, <b><code>IBASE_REC_NO_VERSION</code></b>, <b><code>IBASE_WAIT</code></b> and <b><code>IBASE_NOWAIT</code></b>.</p>
	 * @param resource $link_identifier <p>An InterBase link identifier. If omitted, the last opened link is assumed.</p>
	 * @return resource <p>Returns a transaction handle, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ibase-trans.php
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_trans(int $trans_args = null, $link_identifier = null) {}

	/**
	 * Wait for an event to be posted by the database
	 * <p>This function suspends execution of the script until one of the specified events is posted by the database. The name of the event that was posted is returned. This function accepts up to 15 event arguments.</p>
	 * @param string $event_name <p>The event name.</p>
	 * @param string $event_names
	 * @return string <p>Returns the name of the event that was posted.</p>
	 * @link https://php.net/manual/en/function.ibase-wait-event.php
	 * @see ibase_set_event_handler(), ibase_free_event_handler()
	 * @since PHP 5, PHP 7 < 7.4.0
	 */
	function ibase_wait_event(string $event_name, string ...$event_names): string {}

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_CONVERT', null);

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_IGNORE_CHECKSUMS', null);

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_IGNORE_LIMBO', null);

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_METADATA_ONLY', null);

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_NO_GARBAGE_COLLECT', null);

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_NON_TRANSPORTABLE', null);

	/**
	 * Options to <code>ibase_backup()</code>
	 */
	define('IBASE_BKP_OLD_DESCRIPTIONS', null);

	/**
	 * Starts a transaction with the isolation level set to 'read committed'. This flag should be combined with either <b><code>IBASE_REC_VERSION</code></b> or <b><code>IBASE_REC_NO_VERSION</code></b>. This isolation level allows access to changes that were committed after the transaction was started. If <b><code>IBASE_REC_NO_VERSION</code></b> was specified, only the latest version of a row can be read. If <b><code>IBASE_REC_VERSION</code></b> was specified, a row can even be read when a modification to it is pending in a concurrent transaction.
	 */
	define('IBASE_COMMITTED', null);

	/**
	 * Starts a transaction with the isolation level set to 'concurrency' (or 'snapshot'), which means the transaction has access to all tables, but cannot see changes that were committed by other transactions after the transaction was started.
	 */
	define('IBASE_CONCURRENCY', null);

	/**
	 * Starts a transaction with the isolation level set to 'consistency', which means the transaction cannot read from tables that are being modified by other concurrent transactions.
	 */
	define('IBASE_CONSISTENCY', null);

	/**
	 * The default transaction settings are to be used. This default is determined by the client library, which defines it as IBASE_WRITE|IBASE_CONCURRENCY|IBASE_WAIT in most cases.
	 */
	define('IBASE_DEFAULT', null);

	/**
	 * Causes arrays to be fetched inline. Otherwise, array identifiers are returned. Array identifiers can only be used as arguments to INSERT operations, as no functions to handle array identifiers are currently available.
	 */
	define('IBASE_FETCH_ARRAYS', null);

	/**
	 * Also available as <b><code>IBASE_TEXT</code></b>for backward compatibility. Causes BLOB contents to be fetched inline, instead of being fetched as BLOB identifiers.
	 */
	define('IBASE_FETCH_BLOBS', null);

	/**
	 * Indicated that a transaction should fail immediately when a conflict occurs.
	 */
	define('IBASE_NOWAIT', null);

	define('IBASE_PRP_ACCESS_MODE', null);

	define('IBASE_PRP_ACTIVATE', null);

	define('IBASE_PRP_AM_READONLY', null);

	define('IBASE_PRP_AM_READWRITE', null);

	define('IBASE_PRP_DB_ONLINE', null);

	define('IBASE_PRP_DENY_NEW_ATTACHMENTS', null);

	define('IBASE_PRP_DENY_NEW_TRANSACTIONS', null);

	define('IBASE_PRP_PAGE_BUFFERS', null);

	define('IBASE_PRP_RES', null);

	define('IBASE_PRP_RES_USE_FULL', null);

	define('IBASE_PRP_RESERVE_SPACE', null);

	define('IBASE_PRP_SET_SQL_DIALECT', null);

	define('IBASE_PRP_SHUTDOWN_DB', null);

	define('IBASE_PRP_SWEEP_INTERVAL', null);

	define('IBASE_PRP_WM_ASYNC', null);

	define('IBASE_PRP_WM_SYNC', null);

	define('IBASE_PRP_WRITE_MODE', null);

	/**
	 * Starts a read-only transaction.
	 */
	define('IBASE_READ', null);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_CREATE', null);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_DEACTIVATE_IDX', null);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_NO_SHADOW', null);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_NO_VALIDITY', null);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_ONE_AT_A_TIME', null);

	define('IBASE_RES_REPLACE', null);

	/**
	 * Options to <code>ibase_restore()</code>
	 */
	define('IBASE_RES_USE_ALL_SPACE', null);

	define('IBASE_RPR_CHECK_DB', null);

	define('IBASE_RPR_FULL', null);

	define('IBASE_RPR_IGNORE_CHECKSUM', null);

	define('IBASE_RPR_KILL_SHADOWS', null);

	define('IBASE_RPR_MEND_DB', null);

	/**
	 * Options to <code>ibase_maintain_db()</code>
	 */
	define('IBASE_RPR_SWEEP_DB', null);

	define('IBASE_RPR_VALIDATE_DB', null);

	define('IBASE_STS_DATA_PAGES', null);

	define('IBASE_STS_DB_LOG', null);

	define('IBASE_STS_HDR_PAGES', null);

	define('IBASE_STS_IDX_PAGES', null);

	/**
	 * Options to <code>ibase_db_info()</code>
	 */
	define('IBASE_STS_SYS_RELATIONS', null);

	/**
	 * Options to <code>ibase_server_info()</code>
	 */
	define('IBASE_SVC_GET_ENV', null);

	define('IBASE_SVC_GET_ENV_LOCK', null);

	define('IBASE_SVC_GET_ENV_MSG', null);

	/**
	 * Options to <code>ibase_server_info()</code>
	 */
	define('IBASE_SVC_GET_USERS', null);

	/**
	 * Options to <code>ibase_server_info()</code>
	 */
	define('IBASE_SVC_IMPLEMENTATION', null);

	/**
	 * Options to <code>ibase_server_info()</code>
	 */
	define('IBASE_SVC_SERVER_VERSION', null);

	define('IBASE_SVC_SVR_DB_INFO', null);

	define('IBASE_SVC_USER_DBPATH', null);

	/**
	 * Causes date and time fields not to be returned as strings, but as UNIX timestamps (the number of seconds since the epoch, which is 1-Jan-1970 0:00 UTC). Might be problematic if used with dates before 1970 on some systems.
	 */
	define('IBASE_UNIXTIME', null);

	/**
	 * Indicated that a transaction should wait and retry when a conflict occurs.
	 */
	define('IBASE_WAIT', null);

	/**
	 * Starts a read-write transaction.
	 */
	define('IBASE_WRITE', null);

}
