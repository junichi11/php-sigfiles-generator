<?php



namespace {

	/**
	 * <p>Represents ZooKeeper session.</p>
	 * @link http://php.net/manual/en/class.zookeeper.php
	 * @since PECL zookeeper >= 0.1.0
	 */
	class Zookeeper {

		/**
		 * @var integer <p>Can read nodes value and list its children</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const PERM_READ = 1;

		/**
		 * @var integer <p>Can set the nodes value</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const PERM_WRITE = 2;

		/**
		 * @var integer <p>Can create children</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const PERM_CREATE = 4;

		/**
		 * @var integer <p>Can delete children</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const PERM_DELETE = 8;

		/**
		 * @var integer <p>Can execute set_acl()</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const PERM_ADMIN = 16;

		/**
		 * @var integer <p>All of the above flags ORd together</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const PERM_ALL = 31;

		/**
		 * @var integer <p>Outputs only error mesages</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const LOG_LEVEL_ERROR = 1;

		/**
		 * @var integer <p>Outputs errors/warnings</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const LOG_LEVEL_WARN = 2;

		/**
		 * @var integer <p>Outputs big action messages besides errors/warnings</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const LOG_LEVEL_INFO = 3;

		/**
		 * @var integer <p>Outputs all</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const LOG_LEVEL_DEBUG = 4;

		/**
		 * @var integer <p>Connected but session expired</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const EXPIRED_SESSION_STATE = -112;

		/**
		 * @var integer <p>Connected but auth failed</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const AUTH_FAILED_STATE = -113;

		/**
		 * @var integer <p>Connecting</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const CONNECTING_STATE = 1;

		/**
		 * @var integer <p>Associating</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const ASSOCIATING_STATE = 2;

		/**
		 * @var integer <p>Connected</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const CONNECTED_STATE = 3;

		/**
		 * @var integer <p>TODO: help us improve this extension.</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const READONLY_STATE = 5;

		/**
		 * @var integer <p>Connection failed</p>
		 * @link http://php.net/manual/en/class.zookeeper.php
		 */
		const NOTCONNECTED_STATE = 999;

		/**
		 * Create a handle to used communicate with zookeeper
		 * <p>This method creates a new handle and a zookeeper session that corresponds to that handle. Session establishment is asynchronous, meaning that the session should not be considered established until (and unless) an event of state ZOO_CONNECTED_STATE is received.</p>
		 * @param string $host <p>comma separated host:port pairs, each corresponding to a zk server. e.g. "127.0.0.1:3000,127.0.0.1:3001,127.0.0.1:3002"</p>
		 * @param callable $watcher_cb <p>the global watcher callback function. When notifications are triggered this function will be invoked.</p>
		 * @param int $recv_timeout <p>the timeout for this session, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE).</p>
		 * @return self
		 * @link http://php.net/manual/en/zookeeper.construct.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function __construct(string $host = '', callable $watcher_cb = NULL, int $recv_timeout = 10000) {}

		/**
		 * Specify application credentials
		 * <p>The application calls this function to specify its credentials for purposes of authentication. The server will use the security provider specified by the scheme parameter to authenticate the client connection. If the authentication request has failed: - the server connection is dropped. - the watcher is called with the ZOO_AUTH_FAILED_STATE value as the state parameter.</p>
		 * @param string $scheme <p>The id of authentication scheme. Natively supported: "digest" password-based authentication</p>
		 * @param string $cert <p>Application credentials. The actual value depends on the scheme.</p>
		 * @param callable $completion_cb <p>The routine to invoke when the request completes. One of the following result codes may be passed into the completion callback: - ZOK operation completed successfully - ZAUTHFAILED authentication failed</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.addauth.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function addAuth(string $scheme, string $cert, callable $completion_cb = NULL): bool {}

		/**
		 * Close the zookeeper handle and free up any resources
		 * @return void
		 * @link http://php.net/manual/en/zookeeper.close.php
		 * @since PECL zookeeper >= 0.5.0
		 */
		public function close(): void {}

		/**
		 * Create a handle to used communicate with zookeeper
		 * <p>This method creates a new handle and a zookeeper session that corresponds to that handle. Session establishment is asynchronous, meaning that the session should not be considered established until (and unless) an event of state ZOO_CONNECTED_STATE is received.</p>
		 * @param string $host <p>Comma separated host:port pairs, each corresponding to a zk server. e.g. "127.0.0.1:3000,127.0.0.1:3001,127.0.0.1:3002"</p>
		 * @param callable $watcher_cb <p>The global watcher callback function. When notifications are triggered this function will be invoked.</p>
		 * @param int $recv_timeout <p>The timeout for this session, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE).</p>
		 * @return void
		 * @link http://php.net/manual/en/zookeeper.connect.php
		 * @since PECL zookeeper >= 0.2.0
		 */
		public function connect(string $host, callable $watcher_cb = NULL, int $recv_timeout = 10000): void {}

		/**
		 * Create a node synchronously
		 * <p>This method will create a node in ZooKeeper. A node can only be created if it does not already exists. The Create Flags affect the creation of nodes. If ZOO_EPHEMERAL flag is set, the node will automatically get removed if the client session goes away. If the ZOO_SEQUENCE flag is set, a unique monotonically increasing sequence number is appended to the path name.</p>
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param string $value <p>The data to be stored in the node.</p>
		 * @param array $acls <p>The initial ACL of the node. The ACL must not be null or empty.</p>
		 * @param int $flags <p>this parameter can be set to 0 for normal create or an OR of the Create Flags</p>
		 * @return string <p>Returns the path of the new node (this might be different than the supplied path because of the ZOO_SEQUENCE flag) on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.create.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function create(string $path, string $value, array $acls, int $flags = NULL): string {}

		/**
		 * Delete a node in zookeeper synchronously
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param int $version <p>The expected version of the node. The function will fail if the actual version of the node does not match the expected version. If -1 is used the version check will not take place.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.delete.php
		 * @since PECL zookeeper >= 0.2.0
		 */
		public function delete(string $path, int $version = -1): bool {}

		/**
		 * Checks the existence of a node in zookeeper synchronously
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param callable $watcher_cb <p>if nonzero, a watch will be set at the server to notify the client if the node changes. The watch will be set even if the node does not</p>
		 * @return bool <p>Returns true/false on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.exists.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function exists(string $path, callable $watcher_cb = NULL): bool {}

		/**
		 * Gets the data associated with a node synchronously
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param callable $watcher_cb <p>If nonzero, a watch will be set at the server to notify the client if the node changes.</p>
		 * @param array $stat <p>If not NULL, will hold the value of stat for the path on return.</p>
		 * @param int $max_size <p>Max size of the data. If 0 is used, this method will return the whole data.</p>
		 * @return string <p>Returns the data on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.get.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function get(string $path, callable $watcher_cb = NULL, array &$stat = NULL, int $max_size = 0): string {}

		/**
		 * Gets the acl associated with a node synchronously
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @return array <p>Return acl array on success and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.getacl.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function getAcl(string $path): array {}

		/**
		 * Lists the children of a node synchronously
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param callable $watcher_cb <p>If nonzero, a watch will be set at the server to notify the client if the node changes.</p>
		 * @return array <p>Returns an array with children paths on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.getchildren.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function getChildren(string $path, callable $watcher_cb = NULL): array {}

		/**
		 * Return the client session id, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE)
		 * @return int <p>Returns the client session id on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.getclientid.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function getClientId(): int {}

		/**
		 * Get instance of ZookeeperConfig
		 * @return ZookeeperConfig <p>Returns instance of ZookeeperConfig.</p>
		 * @link http://php.net/manual/en/zookeeper.getconfig.php
		 * @since PECL zookeeper >= 0.6.0, ZooKeeper >= 3.5.0
		 */
		public function getConfig(): \ZookeeperConfig {}

		/**
		 * Return the timeout for this session, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE). This value may change after a server re-connect
		 * @return int <p>Returns the timeout for this session on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.getrecvtimeout.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function getRecvTimeout(): int {}

		/**
		 * Get the state of the zookeeper connection
		 * @return int <p>Returns the state of zookeeper connection on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.getstate.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function getState(): int {}

		/**
		 * Checks if the current zookeeper connection state can be recovered
		 * <p>The application must close the handle and try to reconnect.</p>
		 * @return bool <p>Returns true/false on success, and false on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.isrecoverable.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function isRecoverable(): bool {}

		/**
		 * Sets the data associated with a node
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param string $value <p>The data to be stored in the node.</p>
		 * @param int $version <p>The expected version of the node. The function will fail if the actual version of the node does not match the expected version. If -1 is used the version check will not take place.</p>
		 * @param array $stat <p>If not NULL, will hold the value of stat for the path on return.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.set.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function set(string $path, string $value, int $version = -1, array &$stat = NULL): bool {}

		/**
		 * Sets the acl associated with a node synchronously
		 * @param string $path <p>The name of the node. Expressed as a file name with slashes separating ancestors of the node.</p>
		 * @param int $version <p>The expected version of the path.</p>
		 * @param array $acl <p>The acl to be set on the path.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.setacl.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function setAcl(string $path, int $version, array $acl): bool {}

		/**
		 * Sets the debugging level for the library
		 * @param int $logLevel <p>ZooKeeper log level constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.setdebuglevel.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public static function setDebugLevel(int $logLevel): bool {}

		/**
		 * Enable/disable quorum endpoint order randomization
		 * <p>If passed a non-zero value, will make the client connect to quorum peers in the order as specified in the zookeeper_init() call. A zero value causes zookeeper_init() to permute the peer endpoints which is good for more even client connection distribution among the quorum peers.</p>
		 * @param bool $yesOrNo <p>Enable/disable quorum endpoint order randomization.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.setdeterministicconnorder.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public static function setDeterministicConnOrder(bool $yesOrNo): bool {}

		/**
		 * Sets the stream to be used by the library for logging
		 * <p>The zookeeper library uses stderr as its default log stream. Application must make sure the stream is writable. Passing in NULL resets the stream to its default value (stderr).</p>
		 * @param resource $stream <p>The stream to be used by the library for logging.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.setlogstream.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function setLogStream($stream): bool {}

		/**
		 * Set a watcher function
		 * @param callable $watcher_cb <p>A watch will be set at the server to notify the client if the node changes.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/zookeeper.setwatcher.php
		 * @since PECL zookeeper >= 0.1.0
		 */
		public function setWatcher(callable $watcher_cb): bool {}
	}

}
