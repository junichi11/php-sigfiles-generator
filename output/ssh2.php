<?php



namespace {

	/**
	 * Authenticate over SSH using the ssh agent
	 * <p>Authenticate over SSH using the ssh agent</p><p><b>Note</b>:  The <b>ssh2_auth_agent()</b> function will only be available when the ssh2 extension is compiled with libssh &gt;= 1.2.3. </p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $username <p>Remote user name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-auth-agent.php
	 * @since PECL ssh2 >= 0.12
	 */
	function ssh2_auth_agent($session, string $username): bool {}

	/**
	 * Authenticate using a public hostkey
	 * <p>Authenticate using a public hostkey read from a file.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $username
	 * @param string $hostname
	 * @param string $pubkeyfile
	 * @param string $privkeyfile
	 * @param string $passphrase <p>If <code>privkeyfile</code> is encrypted (which it should be), the passphrase must be provided.</p>
	 * @param string $local_username <p>If <code>local_username</code> is omitted, then the value for <code>username</code> will be used for it.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-auth-hostbased-file.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_hostbased_file($session, string $username, string $hostname, string $pubkeyfile, string $privkeyfile, string $passphrase = NULL, string $local_username = NULL): bool {}

	/**
	 * Authenticate as "none"
	 * <p>Attempt "none" authentication which usually will (and should) fail. As part of the failure, this function will return an array of accepted authentication methods.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $username <p>Remote user name.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> if the server does accept "none" as an authentication method, or an array of accepted authentication methods on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-auth-none.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_none($session, string $username): mixed {}

	/**
	 * Authenticate over SSH using a plain password
	 * <p>Authenticate over SSH using a plain password. Since version 0.12 this function also supports keyboard_interactive method.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $username <p>Remote user name.</p>
	 * @param string $password <p>Password for <code>username</code></p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-auth-password.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_password($session, string $username, string $password): bool {}

	/**
	 * Authenticate using a public key
	 * <p>Authenticate using a public key read from a file.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $username
	 * @param string $pubkeyfile <p>The public key file needs to be in OpenSSH's format. It should look something like:</p> <p>ssh-rsa AAAAB3NzaC1yc2EAAA....NX6sqSnHA8= rsa-key-20121110</p>
	 * @param string $privkeyfile
	 * @param string $passphrase <p>If <code>privkeyfile</code> is encrypted (which it should be), the <code>passphrase</code> must be provided.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-auth-pubkey-file.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_pubkey_file($session, string $username, string $pubkeyfile, string $privkeyfile, string $passphrase = NULL): bool {}

	/**
	 * Connect to an SSH server
	 * <p>Establish a connection to a remote SSH server.</p><p>Once connected, the client should verify the server's hostkey using <code>ssh2_fingerprint()</code>, then authenticate using either password or public key.</p>
	 * @param string $host
	 * @param int $port
	 * @param array $methods <p><code>methods</code> may be an associative array with up to four parameters as described below.</p> <p></p> <b><code>methods</code> may be an associative array with any or all of the following parameters.</b>   Index Meaning Supported Values&#42;     kex  List of key exchange methods to advertise, comma separated in order of preference.   <code>diffie-hellman-group1-sha1</code>, <code>diffie-hellman-group14-sha1</code>, and <code>diffie-hellman-group-exchange-sha1</code>    hostkey  List of hostkey methods to advertise, comma separated in order of preference.   <code>ssh-rsa</code> and <code>ssh-dss</code>    client_to_server  Associative array containing crypt, compression, and message authentication code (MAC) method preferences for messages sent from client to server.  &nbsp;   server_to_client  Associative array containing crypt, compression, and message authentication code (MAC) method preferences for messages sent from server to client.  &nbsp;    <p>&#42; - Supported Values are dependent on methods supported by underlying library. See libssh2 documentation for additional information.</p> <p></p> <b> <code>client_to_server</code> and <code>server_to_client</code> may be an associative array with any or all of the following parameters. </b>   Index Meaning Supported Values&#42;     crypt List of crypto methods to advertise, comma separated in order of preference.  <code>rijndael-cbc@lysator.liu.se</code>, <code>aes256-cbc</code>, <code>aes192-cbc</code>, <code>aes128-cbc</code>, <code>3des-cbc</code>, <code>blowfish-cbc</code>, <code>cast128-cbc</code>, <code>arcfour</code>, and <code>none&#42;&#42;</code>    comp List of compression methods to advertise, comma separated in order of preference.  <code>zlib</code> and <code>none</code>    mac List of MAC methods to advertise, comma separated in order of preference.  <code>hmac-sha1</code>, <code>hmac-sha1-96</code>, <code>hmac-ripemd160</code>, <code>hmac-ripemd160@openssh.com</code>, and <code>none&#42;&#42;</code>     <p></p><p><b>Note</b>: <b>Crypt and MAC method "<code>none</code>"</b><br></p><p>For security reasons, <code>none</code> is disabled by the underlying libssh2 library unless explicitly enabled during build time by using the appropriate ./configure options. See documentation for the underlying library for more information.</p>
	 * @param array $callbacks <p><code>callbacks</code> may be an associative array with any or all of the following parameters.</p> <b> Callbacks parameters </b>   Index Meaning Prototype     ignore  Name of function to call when an <b><code>SSH2_MSG_IGNORE</code></b> packet is received  void ignore_cb($message)   debug  Name of function to call when an <b><code>SSH2_MSG_DEBUG</code></b> packet is received  void debug_cb($message, $language, $always_display)   macerror  Name of function to call when a packet is received but the message authentication code failed. If the callback returns <b><code>TRUE</code></b>, the mismatch will be ignored, otherwise the connection will be terminated.  bool macerror_cb($packet)   disconnect  Name of function to call when an <b><code>SSH2_MSG_DISCONNECT</code></b> packet is received  void disconnect_cb($reason, $message, $language)
	 * @return resource <p>Returns a resource on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.ssh2-connect.php
	 * @see ssh2_fingerprint(), ssh2_auth_none(), ssh2_auth_password(), ssh2_auth_pubkey_file(), ssh2_disconnect()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_connect(string $host, int $port = 22, array $methods = NULL, array $callbacks = NULL) {}

	/**
	 * Close a connection to a remote SSH server
	 * <p>Close a connection to a remote SSH server.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-disconnect.php
	 * @see ssh2_connect()
	 * @since PECL ssh2 >= 1.0
	 */
	function ssh2_disconnect($session): bool {}

	/**
	 * Execute a command on a remote server
	 * <p>Execute a command at the remote end and allocate a channel for it.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $command
	 * @param string $pty
	 * @param array $env <p><code>env</code> may be passed as an associative array of name/value pairs to set in the target environment.</p>
	 * @param int $width <p>Width of the virtual terminal.</p>
	 * @param int $height <p>Height of the virtual terminal.</p>
	 * @param int $width_height_type <p><code>width_height_type</code> should be one of <b><code>SSH2_TERM_UNIT_CHARS</code></b> or <b><code>SSH2_TERM_UNIT_PIXELS</code></b>.</p>
	 * @return resource|false <p>Returns a stream on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-exec.php
	 * @see ssh2_connect(), ssh2_shell(), ssh2_tunnel()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_exec($session, string $command, string $pty = NULL, array $env = NULL, int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS) {}

	/**
	 * Fetch an extended data stream
	 * <p>Fetches an alternate substream associated with an SSH2 channel stream. The SSH2 protocol currently defines only one substream, STDERR, which has a substream ID of <b><code>SSH2_STREAM_STDERR</code></b> (defined as 1).</p>
	 * @param resource $channel
	 * @param int $streamid <p>An SSH2 channel stream.</p>
	 * @return resource <p>Returns the requested stream resource.</p>
	 * @link https://php.net/manual/en/function.ssh2-fetch-stream.php
	 * @see ssh2_shell(), ssh2_exec(), ssh2_connect()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_fetch_stream($channel, int $streamid) {}

	/**
	 * Retrieve fingerprint of remote server
	 * <p>Returns a server hostkey hash from an active session.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param int $flags <p><code>flags</code> may be either of <b><code>SSH2_FINGERPRINT_MD5</code></b> or <b><code>SSH2_FINGERPRINT_SHA1</code></b> logically ORed with <b><code>SSH2_FINGERPRINT_HEX</code></b> or <b><code>SSH2_FINGERPRINT_RAW</code></b>.</p>
	 * @return string <p>Returns the hostkey hash as a string.</p>
	 * @link https://php.net/manual/en/function.ssh2-fingerprint.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_fingerprint($session, int $flags = SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX): string {}

	/**
	 * Return list of negotiated methods
	 * <p>Returns list of negotiated methods.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.ssh2-methods-negotiated.php
	 * @see ssh2_connect()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_methods_negotiated($session): array {}

	/**
	 * Add an authorized publickey
	 * <p><b>Note</b>: The public key subsystem is used for managing public keys on a server to which the client is <i>already</i> authenticated. To authenticate to a remote system using public key authentication, use the <code>ssh2_auth_pubkey_file()</code> function instead.</p>
	 * @param resource $pkey <p>Publickey Subsystem resource created by <code>ssh2_publickey_init()</code>.</p>
	 * @param string $algoname <p>Publickey algorithm (e.g.): ssh-dss, ssh-rsa</p>
	 * @param string $blob <p>Publickey blob as raw binary data</p>
	 * @param bool $overwrite <p>If the specified key already exists, should it be overwritten&#63;</p>
	 * @param array $attributes <p>Associative array of attributes to assign to this public key. Refer to ietf-secsh-publickey-subsystem for a list of supported attributes. To mark an attribute as mandatory, precede its name with an asterisk. If the server is unable to support an attribute marked mandatory, it will abort the add process.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-publickey-add.php
	 * @see ssh2_publickey_init(), ssh2_publickey_remove(), ssh2_publickey_list()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_add($pkey, string $algoname, string $blob, bool $overwrite = FALSE, array $attributes = NULL): bool {}

	/**
	 * Initialize Publickey subsystem
	 * <p>Request the Publickey subsystem from an already connected SSH2 server.</p><p>The publickey subsystem allows an already connected and authenticated client to manage the list of authorized public keys stored on the target server in an implementation agnostic manner. If the remote server does not support the publickey subsystem, the <b>ssh2_publickey_init()</b> function will return <b><code>FALSE</code></b>.</p>
	 * @param resource $session
	 * @return resource|false <p>Returns an <code>SSH2 Publickey Subsystem</code> resource for use with all other ssh2_publickey_&#42;() methods or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-publickey-init.php
	 * @see ssh2_publickey_add(), ssh2_publickey_remove(), ssh2_publickey_list()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_init($session) {}

	/**
	 * List currently authorized publickeys
	 * <p>List currently authorized publickeys.</p>
	 * @param resource $pkey <p>Publickey Subsystem resource</p>
	 * @return array <p>Returns a numerically indexed array of keys, each of which is an associative array containing: name, blob, and attrs elements.</p> <b>Publickey elements</b>   Array Key Meaning     name Name of algorithm used by this publickey, for example: <code>ssh-dss</code> or <code>ssh-rsa</code>.   blob Publickey blob as raw binary data.   attrs Attributes assigned to this publickey. The most common attribute, and the only one supported by publickey version 1 servers, is <code>comment</code>, which may be any freeform string.
	 * @link https://php.net/manual/en/function.ssh2-publickey-list.php
	 * @see ssh2_publickey_init(), ssh2_publickey_add(), ssh2_publickey_remove()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_list($pkey): array {}

	/**
	 * Remove an authorized publickey
	 * <p>Removes an authorized publickey.</p>
	 * @param resource $pkey <p>Publickey Subsystem Resource</p>
	 * @param string $algoname <p>Publickey algorithm (e.g.): ssh-dss, ssh-rsa</p>
	 * @param string $blob <p>Publickey blob as raw binary data</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-publickey-remove.php
	 * @see ssh2_publickey_init(), ssh2_publickey_add(), ssh2_publickey_list()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_remove($pkey, string $algoname, string $blob): bool {}

	/**
	 * Request a file via SCP
	 * <p>Copy a file from the remote server to the local filesystem using the SCP protocol.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $remote_file <p>Path to the remote file.</p>
	 * @param string $local_file <p>Path to the local file.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-scp-recv.php
	 * @see ssh2_scp_send(), copy()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_scp_recv($session, string $remote_file, string $local_file): bool {}

	/**
	 * Send a file via SCP
	 * <p>Copy a file from the local filesystem to the remote server using the SCP protocol.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $local_file <p>Path to the local file.</p>
	 * @param string $remote_file <p>Path to the remote file.</p>
	 * @param int $create_mode <p>The file will be created with the mode specified by <code>create_mode</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-scp-send.php
	 * @see ssh2_scp_recv(), copy()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_scp_send($session, string $local_file, string $remote_file, int $create_mode = 0644): bool {}

	/**
	 * Initialize SFTP subsystem
	 * <p>Request the SFTP subsystem from an already connected SSH2 server.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @return resource|false <p>This method returns an <code>SSH2 SFTP</code> resource for use with all other ssh2_sftp_&#42;() methods and the ssh2.sftp:// fopen wrapper, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp.php
	 * @see ssh2_scp_recv(), ssh2_scp_send()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp($session) {}

	/**
	 * Changes file mode
	 * <p>Attempts to change the mode of the specified file to that given in <code>mode</code>.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param int $mode <p>Permissions on the file. See the <code>chmod()</code> for more details on this parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-chmod.php
	 * @see chmod(), ssh2_sftp(), ssh2_connect()
	 * @since PECL ssh2 >= 0.12
	 */
	function ssh2_sftp_chmod($sftp, string $filename, int $mode): bool {}

	/**
	 * Stat a symbolic link
	 * <p>Stats a symbolic link on the remote filesystem <i>without</i> following the link.</p><p>This function is similar to using the <code>lstat()</code> function with the ssh2.sftp:// wrapper in PHP 5 and returns the same values.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $path <p>Path to the remote symbolic link.</p>
	 * @return array <p>See the documentation for <code>stat()</code> for details on the values which may be returned.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-lstat.php
	 * @see ssh2_sftp_stat(), lstat(), stat()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_lstat($sftp, string $path): array {}

	/**
	 * Create a directory
	 * <p>Creates a directory on the remote file server with permissions set to <code>mode</code>.</p><p>This function is similar to using <code>mkdir()</code> with the ssh2.sftp:// wrapper.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $dirname <p>Path of the new directory.</p>
	 * @param int $mode <p>Permissions on the new directory.</p>
	 * @param bool $recursive <p>If <code>recursive</code> is <b><code>TRUE</code></b> any parent directories required for <code>dirname</code> will be automatically created as well.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-mkdir.php
	 * @see mkdir(), ssh2_sftp_rmdir()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_mkdir($sftp, string $dirname, int $mode = 0777, bool $recursive = FALSE): bool {}

	/**
	 * Return the target of a symbolic link
	 * <p>Returns the target of a symbolic link.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $link <p>Path of the symbolic link.</p>
	 * @return string <p>Returns the target of the symbolic <code>link</code>.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-readlink.php
	 * @see readlink(), ssh2_sftp_symlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_readlink($sftp, string $link): string {}

	/**
	 * Resolve the realpath of a provided path string
	 * <p>Translates <code>filename</code> into the effective real path on the remote filesystem.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $filename
	 * @return string <p>Returns the real path as a string.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-realpath.php
	 * @see realpath(), ssh2_sftp_symlink(), ssh2_sftp_readlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_realpath($sftp, string $filename): string {}

	/**
	 * Rename a remote file
	 * <p>Renames a file on the remote filesystem.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $from <p>The current file that is being renamed.</p>
	 * @param string $to <p>The new file name that replaces <code>from</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-rename.php
	 * @see rename()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_rename($sftp, string $from, string $to): bool {}

	/**
	 * Remove a directory
	 * <p>Removes a directory from the remote file server.</p><p>This function is similar to using <code>rmdir()</code> with the ssh2.sftp:// wrapper.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $dirname
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-rmdir.php
	 * @see rmdir(), ssh2_sftp_mkdir()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_rmdir($sftp, string $dirname): bool {}

	/**
	 * Stat a file on a remote filesystem
	 * <p>Stats a file on the remote filesystem following any symbolic links.</p><p>This function is similar to using the <code>stat()</code> function with the ssh2.sftp:// wrapper in PHP 5 and returns the same values.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $path
	 * @return array <p>See the documentation for <code>stat()</code> for details on the values which may be returned.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-stat.php
	 * @see ssh2_sftp_lstat(), lstat(), stat()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_stat($sftp, string $path): array {}

	/**
	 * Create a symlink
	 * <p>Creates a symbolic link named <code>link</code> on the remote filesystem pointing to <code>target</code>.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $target <p>Target of the symbolic link.</p>
	 * @param string $link
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-symlink.php
	 * @see ssh2_sftp_readlink(), symlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_symlink($sftp, string $target, string $link): bool {}

	/**
	 * Delete a file
	 * <p>Deletes a file on the remote filesystem.</p>
	 * @param resource $sftp <p>An SSH2 SFTP resource opened by <code>ssh2_sftp()</code>.</p>
	 * @param string $filename
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.ssh2-sftp-unlink.php
	 * @see unlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_unlink($sftp, string $filename): bool {}

	/**
	 * Request an interactive shell
	 * <p>Open a shell at the remote end and allocate a stream for it.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $term_type <p><code>term_type</code> should correspond to one of the entries in the target system's <code>/etc/termcap</code> file.</p>
	 * @param array $env <p><code>env</code> may be passed as an associative array of name/value pairs to set in the target environment.</p>
	 * @param int $width <p>Width of the virtual terminal.</p>
	 * @param int $height <p>Height of the virtual terminal.</p>
	 * @param int $width_height_type <p><code>width_height_type</code> should be one of <b><code>SSH2_TERM_UNIT_CHARS</code></b> or <b><code>SSH2_TERM_UNIT_PIXELS</code></b>.</p>
	 * @return resource
	 * @link https://php.net/manual/en/function.ssh2-shell.php
	 * @see ssh2_exec(), ssh2_tunnel(), ssh2_fetch_stream()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_shell($session, string $term_type = "vanilla", array $env = NULL, int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS) {}

	/**
	 * Open a tunnel through a remote server
	 * <p>Open a socket stream to an arbitrary host/port by way of the currently connected SSH server.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @param string $host
	 * @param int $port
	 * @return resource
	 * @link https://php.net/manual/en/function.ssh2-tunnel.php
	 * @see ssh2_connect(), fsockopen()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_tunnel($session, string $host, int $port) {}

	/**
	 * Default terminal height requested by <code>ssh2_shell()</code>.
	 */
	define('SSH2_DEFAULT_TERM_HEIGHT', null);

	/**
	 * Default terminal units requested by <code>ssh2_shell()</code>.
	 */
	define('SSH2_DEFAULT_TERM_UNIT', null);

	/**
	 * Default terminal width requested by <code>ssh2_shell()</code>.
	 */
	define('SSH2_DEFAULT_TERM_WIDTH', null);

	/**
	 * Default terminal type (e.g. vt102, ansi, xterm, vanilla) requested by <code>ssh2_shell()</code>.
	 */
	define('SSH2_DEFAULT_TERMINAL', null);

	/**
	 * Flag to <code>ssh2_fingerprint()</code> requesting hostkey fingerprint as a string of hexits.
	 */
	define('SSH2_FINGERPRINT_HEX', null);

	/**
	 * Flag to <code>ssh2_fingerprint()</code> requesting hostkey fingerprint as an MD5 hash.
	 */
	define('SSH2_FINGERPRINT_MD5', null);

	/**
	 * Flag to <code>ssh2_fingerprint()</code> requesting hostkey fingerprint as a raw string of 8-bit characters.
	 */
	define('SSH2_FINGERPRINT_RAW', null);

	/**
	 * Flag to <code>ssh2_fingerprint()</code> requesting hostkey fingerprint as an SHA1 hash.
	 */
	define('SSH2_FINGERPRINT_SHA1', null);

	/**
	 * Flag to <code>ssh2_fetch_stream()</code> requesting STDERR subchannel.
	 */
	define('SSH2_STREAM_STDERR', null);

	/**
	 * Flag to <code>ssh2_fetch_stream()</code> requesting STDIO subchannel.
	 */
	define('SSH2_STREAM_STDIO', null);

	/**
	 * Flag to <code>ssh2_shell()</code> specifying that <code>width</code> and <code>height</code> are provided as character sizes.
	 */
	define('SSH2_TERM_UNIT_CHARS', null);

	/**
	 * Flag to <code>ssh2_shell()</code> specifying that <code>width</code> and <code>height</code> are provided in pixel units.
	 */
	define('SSH2_TERM_UNIT_PIXELS', null);

}
