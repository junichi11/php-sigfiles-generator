<?php



namespace {

	/**
	 * Bind prepared statement variables as parameters
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $expression
	 * @return object
	 * @link https://php.net/manual/en/function.mysql-xdevapi-expression.php
	 * @since No version information available, might only be in Git
	 */
	function expression(string $expression): object {}

	/**
	 * Connect to a MySQL server
	 * <p>Connects to the MySQL server.</p>
	 * @param string $uri <p>The URI to the MySQL server, such as <code>mysqlx://user:password@host</code>.</p> <p>URI format:</p> <p><code>scheme://[user[:[password]]@]target[:port][&#63;attribute1=value1&amp;attribute2=value2...</code></p> <ul> <li> <p><code>scheme</code>: required, the connection protocol</p> <p>In mysql_xdevapi it is always 'mysqlx' (for X Protocol)</p> </li> <li> <p><code>user</code>: optional, the MySQL user account for authentication</p> </li> <li> <p><code>password</code>: optional, the MySQL user's password for authentication</p> </li> <li> <p><code>target</code>: required, the server instance the connection refers to:</p> <p>&#42; TCP connection (host name, IPv4 address, or IPv6 address)</p> <p>&#42; Unix socket path (local file path)</p> <p>&#42; Windows named-pipe (local file path)</p> </li> <li> <p><code>port</code>: optional, network port of MySQL server.</p> <p>by default port for X Protocol is 33060</p> </li> <li> <p><code>&#63;attribute=value</code>: this element is optional and specifies a data dictionary that contains different options, including:</p> <ul> <li> <p>The <code>auth</code> (authentication mechanism) attribute as it relates to encrypted connections. For additional information, see Command Options for Encrypted Connections. The following 'auth' values are supported: <code>plain</code>, <code>mysql41</code>, <code>external</code>, and <code>sha256_mem</code>.</p> </li> <li> <p>The <code>connect-timeout</code> attribute affects the connection and not subsequent operations. It is set per connection whether on a single or multiple hosts.</p> <p>Pass in a positive integer to define the connection timeout in seconds, or pass in 0 (zero) to disable the timeout (infinite). Not defining connect-timeout uses the default value of 10.</p> <p>Related, the MYSQLX_CONNECTION_TIMEOUT (timeout in seconds) and MYSQLX_TEST_CONNECTION_TIMEOUT (used while running tests) environment variables can be set and used instead of connect-timeout in the URI. The connect-timeout URI option has precedence over these environment variables.</p> </li> <li> <p>The optional <code>compression</code> attribute accepts these values: <code>preferred</code> (client negotiates with server to find a supported algorithm; connection is uncompressed if a mutually supported algorithm is not found), <code>required</code> (like "preferred", but connection is terminated if a mutually supported algorithm is not found), or <code>disabled</code> (connection is uncompressed). Defaults to <code>preferred</code>.</p> <p>This option was added in version 8.0.20.</p> </li> <li> <p>The optional <code>compression-algorithms</code> attribute defines the desired compression algorithms (and their preferred usage order): <code>zstd_stream</code> (alias: zstd), <code>lz4_message</code> (alias: lz4), or <code>deflate_stream</code> (aliases: deflate or zlib). By default, the order used (depending on system availability) is lz4_message, zstd_stream, then deflate_stream. For example, passing in compression-algorithms=[lz4,zstd_stream] uses lz4 if it's available, otherwise zstd_stream is used. If both are unavailable then behavior depends on the compression value e.g., if compression=required then it'll fail with an error.</p> <p>This option was added in version 8.0.22.</p> </li> </ul> </li> </ul>  <p><b>Example #1 URI examples</b></p> <code> mysqlx://foobar<br>mysqlx://root@localhost&#63;socket=%2Ftmp%2Fmysqld.sock%2F<br>mysqlx://foo:bar@localhost:33060<br>mysqlx://foo:bar@localhost:33160&#63;ssl-mode=disabled<br>mysqlx://foo:bar@localhost:33260&#63;ssl-mode=required<br>mysqlx://foo:bar@localhost:33360&#63;ssl-mode=required&amp;auth=mysql41<br>mysqlx://foo:bar@(/path/to/socket)<br>mysqlx://foo:bar@(/path/to/socket)&#63;auth=sha256_mem<br>mysqlx://foo:bar@[localhost:33060,&nbsp;127.0.0.1:33061]<br>mysqlx://foobar&#63;ssl-ca=(/path/to/ca.pem)&amp;ssl-crl=(/path/to/crl.pem)<br>mysqlx://foo:bar@[localhost:33060,&nbsp;127.0.0.1:33061]&#63;ssl-mode=disabled<br>mysqlx://foo:bar@localhost:33160/&#63;connect-timeout=0<br>mysqlx://foo:bar@localhost:33160/&#63;connect-timeout=10&amp;compression=required<br>mysqlx://foo:bar@localhost:33160/&#63;connect-timeout=10&amp;compression=required&amp;compression-algorithms=[lz4,zstd_stream] </code>  <p>For related information, see MySQL Shell's Connecting using a URI String.</p>
	 * @return mysql_xdevapi\Session <p>A <b>Session</b> object.</p>
	 * @link https://php.net/manual/en/function.mysql-xdevapi-getsession.php
	 * @since No version information available, might only be in Git
	 */
	function getSession(string $uri): \mysql_xdevapi\Session {}

	define('MYSQLX_CLIENT_SSL', null);

	define('MYSQLX_LOCK_DEFAULT', null);

	define('MYSQLX_LOCK_NOWAIT', null);

	define('MYSQLX_LOCK_SKIP_LOCKED', null);

	define('MYSQLX_TYPE_BIGINT', null);

	define('MYSQLX_TYPE_BIT', null);

	define('MYSQLX_TYPE_BLOB', null);

	define('MYSQLX_TYPE_BYTES', null);

	define('MYSQLX_TYPE_CHAR', null);

	define('MYSQLX_TYPE_DATE', null);

	define('MYSQLX_TYPE_DATETIME', null);

	define('MYSQLX_TYPE_DECIMAL', null);

	define('MYSQLX_TYPE_DOUBLE', null);

	define('MYSQLX_TYPE_ENUM', null);

	define('MYSQLX_TYPE_FLOAT', null);

	define('MYSQLX_TYPE_GEOMETRY', null);

	define('MYSQLX_TYPE_INT', null);

	define('MYSQLX_TYPE_INT24', null);

	define('MYSQLX_TYPE_INTERVAL', null);

	define('MYSQLX_TYPE_JSON', null);

	define('MYSQLX_TYPE_LONG', null);

	define('MYSQLX_TYPE_LONG_BLOB', null);

	define('MYSQLX_TYPE_LONGLONG', null);

	define('MYSQLX_TYPE_MEDIUM_BLOB', null);

	define('MYSQLX_TYPE_MEDIUMINT', null);

	define('MYSQLX_TYPE_NEWDATE', null);

	define('MYSQLX_TYPE_NEWDECIMAL', null);

	define('MYSQLX_TYPE_NULL', null);

	define('MYSQLX_TYPE_SET', null);

	define('MYSQLX_TYPE_SHORT', null);

	define('MYSQLX_TYPE_SMALLINT', null);

	define('MYSQLX_TYPE_STRING', null);

	define('MYSQLX_TYPE_TIME', null);

	define('MYSQLX_TYPE_TIMESTAMP', null);

	define('MYSQLX_TYPE_TINY', null);

	define('MYSQLX_TYPE_TINY_BLOB', null);

	define('MYSQLX_TYPE_VAR_STRING', null);

	define('MYSQLX_TYPE_YEAR', null);

}
