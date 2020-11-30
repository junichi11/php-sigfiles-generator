<?php



namespace {

	/**
	 * <p>A connection between PHP and MongoDB.</p>
	 * <p>This class extends MongoClient and provides access to several deprecated methods.</p>
	 * <p>For backwards compatibility, it also defaults the <i>"w"</i> option of its constructor argument to <i>0</i>, which does not require write operations to be acknowledged by the server. See <code>MongoClient::__construct()</code> for more information.</p>
	 * <p>This class has been <i>DEPRECATED</i> as of version 1.3.0. Relying on this feature is highly discouraged. Please use MongoClient instead.</p>
	 * @link http://php.net/manual/en/class.mongo.php
	 * @since PECL mongo >=0.9.0
	 */
	class Mongo extends \MongoClient {

		/**
		 * Gets a database
		 * <p>This is the cleanest way of getting a database. If the database name has any special characters, <code>MongoClient::selectDB()</code> will need to be used; however, this should be sufficient for most cases.</p>
		 * @param string $dbname <p>The database name.</p>
		 * @return MongoDB <p>Returns a new db object.</p>
		 * @link http://php.net/manual/en/mongoclient.get.php
		 * @since PECL mongo >=1.3.0
		 */
		public function __get(string $dbname): \MongoDB {}

		/**
		 * String representation of this connection
		 * @return string <p>Returns hostname and port for this connection.</p>
		 * @link http://php.net/manual/en/mongoclient.tostring.php
		 * @since PECL mongo >=1.3.0
		 */
		public function __toString(): string {}

		/**
		 * Closes this connection
		 * <p>The <b>MongoClient::close()</b> method forcefully closes a connection to the database, even if persistent connections are being used. You should <i>never</i> have to do this under normal circumstances.</p><p></p>
		 * @param bool|string $connection <p>If connection is not given, or <b><code>FALSE</code></b> then connection that would be selected for writes would be closed. In a single-node configuration, that is then the whole connection, but if you are connected to a replica set, close() will <i>only</i> close the connection to the primary server.</p> <p>If connection is <b><code>TRUE</code></b> then all connections as known by the connection manager will be closed. This can include connections that are not referenced in the connection string used to create the object that you are calling close on.</p> <p>If connection is a string argument, then it will only close the connection identified by this hash. Hashes are identifiers for a connection and can be obtained by calling <code>MongoClient::getConnections()</code>.</p>
		 * @return bool <p>Returns if the connection was successfully closed.</p>
		 * @link http://php.net/manual/en/mongoclient.close.php
		 * @see MongoClient::getConnections()
		 * @since PECL mongo >=1.3.0
		 */
		public function close($connection = NULL): bool {}

		/**
		 * Connects to a database server
		 * @return bool <p>If the connection was successful.</p>
		 * @link http://php.net/manual/en/mongoclient.connect.php
		 * @since PECL mongo >=1.3.0
		 */
		public function connect(): bool {}

		/**
		 * Connects with a database server
		 * <p>This is an internal function that you should <i>never</i> call yourself.</p>
		 * @return bool <p>If the connection was successful.</p>
		 * @link http://php.net/manual/en/mongo.connectutil.php
		 * @since PECL mongo >=0.9.0
		 */
		protected function connectUtil(): bool {}

		/**
		 * Drops a database [deprecated]
		 * <p>Use <code>MongoDB::drop()</code> instead.</p>
		 * @param mixed $db <p>The database to drop. Can be a MongoDB object or the name of the database.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongoclient.dropdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function dropDB($db): array {}

		/**
		 * Return info about all open connections
		 * <p>Returns an array of all open connections, and information about each of the servers</p>
		 * @return array <p>An <code>array</code> of open connections.</p>
		 * @link http://php.net/manual/en/mongoclient.getconnections.php
		 * @since PECL mongo >=1.3.0
		 */
		public static function getConnections(): array {}

		/**
		 * Updates status for all associated hosts
		 * <p>This method is only useful with a connection to a replica set. It returns the status of all of the hosts in the set. Without a replica set, it will just return an array with one element containing the host that you are connected to.</p><p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return array <p>Returns an array of information about the hosts in the set. Includes each host's hostname, its health (1 is healthy), its state (1 is primary, 2 is secondary, 0 is anything else), the amount of time it took to ping the server, and when the last ping occurred. For example, on a three-member replica set, it might look something like:</p> <pre>array(3) { ["A:27017"]=&gt; array(4) { ["host"]=&gt; "A" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(369) ["lastPing"]=&gt; int(1309470644) } ["B:27017"]=&gt; array(4) { ["host"]=&gt; "B" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(1) ["ping"]=&gt; int(139) ["lastPing"]=&gt; int(1309470644) } ["C:27017"]=&gt; array(4) { ["host"]=&gt; "C" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(1012) ["lastPing"]=&gt; int(1309470644) } }</pre>
		 * @link http://php.net/manual/en/mongoclient.gethosts.php
		 * @see MongoClient::getConnections()
		 * @since PECL mongo >=1.3.0
		 */
		public function getHosts(): array {}

		/**
		 * Get pool size for connection pools
		 * <p>This feature has been <i>DEPRECATED</i> as of version 1.2.3. Relying on this feature is highly discouraged. Please use <code>MongoPool::getSize()</code> instead.</p>
		 * @return int <p>Returns the current pool size.</p>
		 * @link http://php.net/manual/en/mongo.getpoolsize.php
		 * @see Mongo::setPoolSize(), Mongo::poolDebug()
		 * @since PECL mongo >=1.2.0
		 */
		public static function getPoolSize(): int {}

		/**
		 * Get the read preference for this connection
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongoclient.getreadpreference.php
		 * @see MongoClient::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Returns the address being used by this for slaveOkay reads
		 * <p>This finds the address of the secondary currently being used for reads. It is a read-only method: it does not change anything about the internal state of the object.</p><p>When you create a connection to the database, the driver will not immediately decide on a secondary to use. Thus, after you connect, this function will return <b><code>NULL</code></b> even if there are secondaries available. When you first do a query with slaveOkay set, at that point the driver will choose a secondary for this connection. At that point, this function will return the chosen secondary.</p><p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return string <p>The address of the secondary this connection is using for reads.</p><p>This returns <b><code>NULL</code></b> if this is not connected to a replica set or not yet initialized.</p>
		 * @link http://php.net/manual/en/mongo.getslave.php
		 * @see MongoCursor::info()
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlave(): string {}

		/**
		 * Get slaveOkay setting for this connection
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return bool <p>Returns the value of slaveOkay for this instance.</p>
		 * @link http://php.net/manual/en/mongo.getslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlaveOkay(): bool {}

		/**
		 * Get the write concern for this connection
		 * @return array <p>This function returns an array describing the write concern. The array contains the values <i>w</i> for an integer acknowledgement level or string mode, and <i>wtimeout</i> denoting the maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @link http://php.net/manual/en/mongoclient.getwriteconcern.php
		 * @see MongoClient::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * Kills a specific cursor on the server
		 * <p>In certain situations it might be needed to kill a cursor on the server. Usually cursors time out after 10 minutes of inactivity, but it is possible to create an immortal cursor with <code>MongoCursor::immortal()</code> that never times out. In order to be able to kill such an immortal cursor, you can call this method with the information supplied by <code>MongoCursor::info()</code>.</p>
		 * @param string $server_hash <p>The server hash that has the cursor. This can be obtained through <code>MongoCursor::info()</code>.</p>
		 * @param int|\MongoInt64 $id <p>The ID of the cursor to kill. You can either supply an <code>int</code> containing the 64 bit cursor ID, or an object of the MongoInt64 class. The latter is necessary on 32 bit platforms (and Windows).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the method attempted to kill a cursor, and <b><code>FALSE</code></b> if there was something wrong with the arguments (such as a wrong <code>server_hash</code>). The return status does <i>not reflect</i> where the cursor was actually killed as the server does not provide that information.</p>
		 * @link http://php.net/manual/en/mongoclient.killcursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function killCursor(string $server_hash, $id): bool {}

		/**
		 * Lists all of the databases available
		 * @return array <p>Returns an associative array containing three fields. The first field is <i>databases</i>, which in turn contains an array. Each element of the array is an associative array corresponding to a database, giving th database's name, size, and if it's empty. The other two fields are <i>totalSize</i> (in bytes) and <i>ok</i>, which is 1 if this method ran successfully.</p>
		 * @link http://php.net/manual/en/mongoclient.listdbs.php
		 * @since PECL mongo >=1.3.0
		 */
		public function listDBs(): array {}

		/**
		 * Returns information about all connection pools
		 * <p>This feature has been <i>DEPRECATED</i> as of version 1.2.3. Relying on this feature is highly discouraged. Please use <code>MongoPool::info()</code> instead.</p><p>Returns an array of information about all connection pools.</p>
		 * @return array <p>Each connection pool has an identifier, which starts with the host. For each pool, this function shows the following fields:</p>  <code>in use</code>   <p>The number of connections currently being used by MongoClient instances.</p>   <code>in pool</code>   <p>The number of connections currently in the pool (not being used).</p>   <code>remaining</code>   <p>The number of connections that could be created by this pool. For example, suppose a pool had 5 connections remaining and 3 connections in the pool. We could create 8 new instances of MongoClient before we exhausted this pool (assuming no instances of MongoClient went out of scope, returning their connections to the pool).</p> <p>A negative number means that this pool will spawn unlimited connections.</p> <p>Before a pool is created, you can change the max number of connections by calling <code>Mongo::setPoolSize()</code>. Once a pool is showing up in the output of this function, its size cannot be changed.</p>   <code>timeout</code>   <p>The socket timeout for connections in this pool. This is how long connections in this pool will attempt to connect to a server before giving up.</p>
		 * @link http://php.net/manual/en/mongo.pooldebug.php
		 * @since PECL mongo >=1.2.0
		 */
		public function poolDebug(): array {}

		/**
		 * Gets a database collection
		 * @param string $db <p>The database name.</p>
		 * @param string $collection <p>The collection name.</p>
		 * @return MongoCollection <p>Returns a new collection object.</p>
		 * @link http://php.net/manual/en/mongoclient.selectcollection.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectCollection(string $db, string $collection): \MongoCollection {}

		/**
		 * Gets a database
		 * @param string $name <p>The database name.</p>
		 * @return MongoDB <p>Returns a new database object.</p>
		 * @link http://php.net/manual/en/mongoclient.selectdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectDB(string $name): \MongoDB {}

		/**
		 * Set the size for future connection pools
		 * <p>This method has been <i>DEPRECATED</i> as of version 1.2.3. Relying on this feature is highly discouraged. Please use <code>MongoPool::setSize()</code> instead.</p><p>Sets the max number of connections new pools will be able to create.</p>
		 * @param int $size <p>The max number of connections future pools will be able to create. Negative numbers mean that the pool will spawn an infinite number of connections.</p>
		 * @return bool <p>Returns the former value of pool size.</p>
		 * @link http://php.net/manual/en/mongo.setpoolsize.php
		 * @see Mongo::getPoolSize(), Mongo::poolDebug()
		 * @since PECL mongo >=1.2.0
		 */
		public static function setPoolSize(int $size): bool {}

		/**
		 * Set the read preference for this connection
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongoclient.setreadpreference.php
		 * @see MongoClient::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Change slaveOkay setting for this connection
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @param bool $ok <p>If reads should be sent to secondary members of a replica set for all possible queries using this MongoClient instance.</p>
		 * @return bool <p>Returns the former value of slaveOkay for this instance.</p>
		 * @link http://php.net/manual/en/mongo.setslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function setSlaveOkay(bool $ok = TRUE): bool {}

		/**
		 * Set the write concern for this connection
		 * @param mixed $w <p>The write concern. This may be an integer denoting the number of servers required to acknowledge the write, or a string mode (e.g. "majority").</p>
		 * @param int $wtimeout <p>The maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongoclient.setwriteconcern.php
		 * @see MongoClient::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}

		/**
		 * Choose a new secondary for slaveOkay reads
		 * <p>This choses a random secondary for a connection to read from. It is called automatically by the driver and should not need to be used. It calls <code>MongoClient::getHosts()</code> (to refresh the status of hosts) and <code>Mongo::getSlave()</code> (to get the return value).</p><p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return string <p>The address of the secondary this connection is using for reads. This may be the same as the previous address as addresses are randomly chosen. It may return only one address if only one secondary (or only the primary) is available.</p><p>For example, if we had a three member replica set with a primary, secondary, and arbiter this method would always return the address of the secondary. If the secondary became unavailable, this method would always return the address of the primary. If the primary also became unavailable, this method would throw an exception, as an arbiter cannot handle reads.</p>
		 * @link http://php.net/manual/en/mongo.switchslave.php
		 * @since PECL mongo >=1.1.0
		 */
		public function switchSlave(): string {}
	}

	/**
	 * <p>An object that can be used to store or retrieve binary data from the database.</p>
	 * <p>The maximum size of a single object that can be inserted into the database is 16MB. For data that is larger than this (movies, music, Henry Kissinger's autobiography), use MongoGridFS. For data that is smaller than 16MB, you may find it easier to embed it within the document using <b>MongoBinData</b>.</p>
	 * <p>For example, to embed an image in a document, one could write:</p>
	 * <p>This class contains a type field, which currently gives no additional functionality in the PHP driver or the database. There are seven predefined types, which are defined as class constants below. For backwards compatibility, the PHP driver uses <b><code>MongoBinData::BYTE_ARRAY</code></b> as the default; however, this may change to <b><code>MongoBinData::GENERIC</code></b> in the future. Users are encouraged to specify a type in <code>MongoBinData::__construct()</code>.</p>
	 * @link http://php.net/manual/en/class.mongobindata.php
	 * @since PECL mongo >= 0.8.1
	 */
	class MongoBinData {

		/**
		 * @var int Generic binary data.
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const GENERIC = 0;

		/**
		 * @var int Function.
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const FUNC = 1;

		/**
		 * @var int Generic binary data (deprecated in favor of <b><code>MongoBinData::GENERIC</code></b>).
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const BYTE_ARRAY = 2;

		/**
		 * @var int Universally unique identifier (deprecated in favor of <b><code>MongoBinData::UUID_RFC4122</code></b>).
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const UUID = 3;

		/**
		 * @var int Universally unique identifier (according to RFC 4122).
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const UUID_RFC4122 = 4;

		/**
		 * @var int MD5.
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const MD5 = 5;

		/**
		 * @var int User-defined type.
		 * @link http://php.net/manual/en/class.mongobindata.php
		 */
		const CUSTOM = 128;

		public $bin;

		public $type = 2;

		/**
		 * Creates a new binary data object
		 * <p>Creates a new binary data object.</p><p>There are seven types of binary data currently recognized by the BSON spec, which are defined as class constants. For backwards compatibility, the PHP driver uses <b><code>MongoBinData::BYTE_ARRAY</code></b> as the default; however, this may change to <b><code>MongoBinData::GENERIC</code></b> in the future. Users are encouraged to specify a type instead of relying on the default.</p>
		 * @param string $data <p>Binary data.</p>
		 * @param int $type <p>Data type.</p>
		 * @return self <p>Returns a new binary data object.</p>
		 * @link http://php.net/manual/en/mongobindata.construct.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __construct(string $data, int $type = 0) {}

		/**
		 * The string representation of this binary data object
		 * @return string <p>Returns the string "&lt;Mongo Binary Data&gt;". To access the contents of a MongoBinData, use the <i>bin</i> field.</p>
		 * @link http://php.net/manual/en/mongobindata.tostring.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>A connection manager for PHP and MongoDB.</p>
	 * <p>This class is used to create and manage connections. A typical use is:</p>
	 * <p><b>Example #1 <b>MongoClient</b> basic usage</b></p>
	 * <p>See <code>MongoClient::__construct()</code> and the section on connecting for more information about creating connections.</p>
	 * @link http://php.net/manual/en/class.mongoclient.php
	 * @since PECL mongo >=1.3.0
	 */
	class MongoClient {

		/**
		 * @var string PHP driver version. May be suffixed with "dev", "+" or "-" if it is in-between versions.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const VERSION = null;

		/**
		 * @var string Host to connect to if no host is given.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const DEFAULT_HOST = "localhost";

		/**
		 * @var int Port to connect to if no port is given.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const DEFAULT_PORT = 27017;

		/**
		 * @var string Read preference for the primary replica set member.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const RP_PRIMARY = "primary";

		/**
		 * @var string Read preference for preferring the primary replica set member.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const RP_PRIMARY_PREFERRED = "primaryPreferred";

		/**
		 * @var string Read preference for a secondary replica set member.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const RP_SECONDARY = "secondary";

		/**
		 * @var string Read preference for preferring a secondary replica set member.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const RP_SECONDARY_PREFERRED = "secondaryPreferred";

		/**
		 * @var string Read preference for the nearest replica set member.
		 * @link http://php.net/manual/en/class.mongoclient.php
		 */
		const RP_NEAREST = "nearest";

		/**
		 * @var boolean <p>This property will be set to <b><code>TRUE</code></b> if we have a open connection to the database, <b><code>FALSE</code></b> otherwise. If the connection is to a replica set, this property will only be <b><code>TRUE</code></b> if the driver has a connection to a node matching the current read preference. This property does not take authentication into account.</p> <p>This property is <i>deprecated</i> since version 1.5.0.</p>
		 * @link http://php.net/manual/en/class.mongoclient.php#mongoclient.props.connected
		 */
		public $connected = FALSE;

		/**
		 * @var string <p>This property is no longer used and will be set to <b><code>NULL</code></b> In driver versions 1.1.x and earlier, this may be set to a string value (e.g. <i>"recycled"</i>, <i>"new"</i>) when persistent connections are used.</p> <p>This property is <i>deprecated</i> since version 1.5.0.</p>
		 * @link http://php.net/manual/en/class.mongoclient.php#mongoclient.props.status
		 */
		public $status = NULL;

		protected $server = NULL;

		protected $persistent = NULL;

		/**
		 * Creates a new database connection object
		 * <p>If no parameters are passed, this connects to "localhost:27017" (or whatever was specified in php.ini for mongo.default_host and mongo.default_port).</p><p><code>server</code> should have the form:</p><p>The connection string always starts with <i>mongodb://</i>, to indicate it is a connection string in this form.</p><p>If <i>username</i> and <i>password</i> are specified, the constructor will attempt to authenticate the connection with the database before returning. Username and password are optional and must be followed by an <i>@</i>, if specified.</p><p>At least one host must be given (port optional, always defaulting to 27017) and as many hosts as desired may be connected to. Host names are comma-separated and the constructor will return successfully if it connected to at least one host. If it could not connect to any of the hosts, it will throw a MongoConnectionException. Please see the Replica Sets section for information on how to connect to Replica Sets.</p><p>If you specified a username and password, you may specify a database to authenticate with. If <i>db</i> is not specified, "admin" will be used.</p><p>An optional query string may be used to specify extra options. The same options are supported through the <code>options</code> array as well, and are therefore redescribed there. See the examples below on how to set those options.</p><p>One part of the options governs how the driver reads from secondary nodes in a replica set environment. Extra information on how these read preferences work is available as well through the read preferences documentation page.</p>
		 * @param string $server <p>The server name.</p>
		 * @param array $options <p>An array of options for the connection. Currently available options include:</p><ul> <li> <p><i>"authMechanism"</i></p> <p>Available mechanisms are:</p>   authMechanism Description Availability     MONGODB-CR Authenticate using Challenge Response mechanism. This is the default value. All MongoDB versions   MONGODB-X509 Authenticates using X509 certificates MongoDB 2.6. Only available when OpenSSL is enabled   PLAIN Authenticates using unencrypted plain username+password. Must be used over SSL connections. Generally used by MongoDB to login via 3rd party LDAP server MongoDB Enterprise 2.4. The Driver must be compiled against CyrusSASL2   GSSAPI Authenticates via kerberos systems MongoDB Enterprise 2.4. The Driver must be compiled against CyrusSASL2   SCRAM-SHA-1 Authenticates using SCRAM-SHA-1 MongoDB 3.0.    </li> <li> <p><i>"authSource"</i></p> <p>Should be set to the database name where the user is defined it.</p> </li> <li> <p><i>"connect"</i></p> <p>If the constructor should connect before returning. Default is <b><code>TRUE</code></b>. When set to <b><code>FALSE</code></b> the driver will <i>automatically</i> connect to the server whenever it is necessary to do a query. Alternatively, you can run <code>MongoClient::connect()</code> manually.</p> <p><b>Warning</b></p> <p>This option is not supported through the connection string.</p>  </li> <li> <p><i>"connectTimeoutMS"</i></p> <p>How long a connection can take to be opened before timing out in milliseconds. Defaults to <i>60000</i> (60 seconds).</p> <p>If <i>-1</i> is specified, no connection timeout will be applied and PHP will use default_socket_timeout.</p> </li> <li> <p><i>"db"</i></p> <p>The database to authenticate against can be specified here, instead of including it in the host list. This overrides a database given in the host list.</p> </li> <li> <p><i>"fsync"</i></p> <p>When <i>"fsync"</i> is set, all write operations will block until the database has flushed the changes to disk. This makes the write operations slower, but it guarantees that writes have succeeded and that the operations can be recovered in case of total system failure.</p> <p>If the MongoDB server has journaling enabled, this option is identical to <i>"journal"</i>. If journaling is not enabled, this option ensures that write operations will be synced to database files on disk.</p> <p><b>Note</b>:  If journaling is enabled, users are strongly encouraged to use the <i>"journal"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"journal"</i> simultaneously, as that will result in an error. </p> </li> <li> <p><i>"journal"</i></p> <p>When <i>"journal"</i> is set, all write operations will block until the database has flushed the changes to the journal on disk. This makes the write operations slower, but it guarantees that writes have succeeded and that the operations can be recovered in case of total system failure.</p> <p><b>Note</b>:  If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option. </p> </li> <li> <p><i>"gssapiServiceName"</i></p> <p>Sets the Kerberos service principal. Only applicable when authMechanism=GSSAPI. Defaults to "mongodb".</p> </li> <li> <p><i>"password"</i></p> <p>The password can be specified here, instead of including it in the host list. This is especially useful if a password has a "@" in it. This overrides a password set in the host list.</p> </li> <li> <p><i>"readPreference"</i></p> <p>Specifies the read preference type. Read preferences provide you with control from which secondaries data can be read from.</p> <p>Allowed values are: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> and <b><code>MongoClient::RP_NEAREST</code></b>.</p> <p>See the documentation on read preferences for more information.</p> </li> <li> <p><i>"readPreferenceTags"</i></p> <p>Specifies the read preference tags as an array of strings. Tags can be used in combination with the <i>readPreference</i> option to further control which secondaries data might be read from.</p> <p>See the documentation on read preferences for more information.</p> </li> <li> <p><i>"replicaSet"</i></p> <p>The name of the replica set to connect to. If this is given, the primary will be automatically be determined. This means that the driver may end up connecting to a server that was not even listed. See the replica set example below for details.</p> </li> <li> <p><i>"secondaryAcceptableLatencyMS"</i></p> <p>When reading from a secondary (using ReadPreferences), do not read from secondaries known to be more then <i>secondaryAcceptableLatencyMS</i> away from us. Defaults to <i>15</i></p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>How long a socket operation (read or write) can take before timing out in milliseconds. Defaults to <i>30000</i> (30 seconds).</p> <p>If <i>-1</i> is specified, socket operations may block indefinitely. This option may also be set on a per-operation basis using <code>MongoCursor::timeout()</code> for queries or the <i>"socketTimeoutMS"</i> option for write methods.</p> <p><b>Note</b>:  This is a client-side timeout. If a write operation times out, there is no way to know if the server actually handled the write or not, as a MongoCursorTimeoutException will be thrown in lieu of returning a write result. </p> </li> <li> <p><i>"ssl"</i></p> <p>A boolean to specify whether you want to enable SSL for the connections to MongoDB. Extra options such as certificates can be set with SSL context options.</p> </li> <li> <p><i>"username"</i></p> <p>The username can be specified here, instead of including it in the host list. This is especially useful if a username has a ":" in it. This overrides a username set in the host list.</p> </li> <li> <p><i>"w"</i></p> <p>The <i>w</i> option specifies the Write Concern for the driver, which determines how long the driver blocks when writing. The default value is <i>1</i>.</p> <p>This option is applicable when connecting to both single servers and replica sets. A positive value controls how <i>many</i> nodes must acknowledge the write instruction before the driver continues. A value of <i>1</i> would require the single server or primary (in a replica set) to acknowledge the write operation. A value of <i>3</i> would cause the driver to block until the write has been applied to the primary as well as two secondary servers (in a replica set).</p> <p>A string value is used to control which tag sets are taken into account for write concerns. <i>"majority"</i> is special and ensures that the write operation has been applied to the majority (more than 50%) of the participating nodes.</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable for write operations where <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value is <i>10000</i> (ten seconds).</p> </li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li> <p><i>"slaveOkay"</i></p> <p>Deprecated. Please use the read preference options.</p> </li> <li> <p><i>"timeout"</i></p> <p>Deprecated alias for <i>"connectTimeoutMS"</i>.</p> </li> <li> <p><i>"wTimeout"</i></p> <p>Deprecated alias for <i>"wTimeoutMS"</i>.</p> </li> </ul>
		 * @param array $driver_options <p>An array of options for the MongoDB driver. Options include setting connection context options for SSL or logging callbacks.</p><ul> <li> <p><i>"context"</i></p> <p>The Stream Context to attach to all new connections. This allows you for example to configure SSL certificates and are described at SSL context options. See the Connecting over SSL tutorial.</p> </li> </ul>
		 * @return self <p>Returns a new database connection object.</p>
		 * @link http://php.net/manual/en/mongoclient.construct.php
		 * @since PECL mongo >=1.3.0
		 */
		public function __construct(string $server = "mongodb://localhost:27017", array $options  = 'array("connect" => TRUE)', array $driver_options = NULL) {}

		/**
		 * Gets a database
		 * <p>This is the cleanest way of getting a database. If the database name has any special characters, <code>MongoClient::selectDB()</code> will need to be used; however, this should be sufficient for most cases.</p>
		 * @param string $dbname <p>The database name.</p>
		 * @return MongoDB <p>Returns a new db object.</p>
		 * @link http://php.net/manual/en/mongoclient.get.php
		 * @since PECL mongo >=1.3.0
		 */
		public function __get(string $dbname): \MongoDB {}

		/**
		 * String representation of this connection
		 * @return string <p>Returns hostname and port for this connection.</p>
		 * @link http://php.net/manual/en/mongoclient.tostring.php
		 * @since PECL mongo >=1.3.0
		 */
		public function __toString(): string {}

		/**
		 * Closes this connection
		 * <p>The <b>MongoClient::close()</b> method forcefully closes a connection to the database, even if persistent connections are being used. You should <i>never</i> have to do this under normal circumstances.</p><p></p>
		 * @param bool|string $connection <p>If connection is not given, or <b><code>FALSE</code></b> then connection that would be selected for writes would be closed. In a single-node configuration, that is then the whole connection, but if you are connected to a replica set, close() will <i>only</i> close the connection to the primary server.</p> <p>If connection is <b><code>TRUE</code></b> then all connections as known by the connection manager will be closed. This can include connections that are not referenced in the connection string used to create the object that you are calling close on.</p> <p>If connection is a string argument, then it will only close the connection identified by this hash. Hashes are identifiers for a connection and can be obtained by calling <code>MongoClient::getConnections()</code>.</p>
		 * @return bool <p>Returns if the connection was successfully closed.</p>
		 * @link http://php.net/manual/en/mongoclient.close.php
		 * @see MongoClient::getConnections()
		 * @since PECL mongo >=1.3.0
		 */
		public function close($connection = NULL): bool {}

		/**
		 * Connects to a database server
		 * @return bool <p>If the connection was successful.</p>
		 * @link http://php.net/manual/en/mongoclient.connect.php
		 * @since PECL mongo >=1.3.0
		 */
		public function connect(): bool {}

		/**
		 * Drops a database [deprecated]
		 * <p>Use <code>MongoDB::drop()</code> instead.</p>
		 * @param mixed $db <p>The database to drop. Can be a MongoDB object or the name of the database.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongoclient.dropdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function dropDB($db): array {}

		/**
		 * Return info about all open connections
		 * <p>Returns an array of all open connections, and information about each of the servers</p>
		 * @return array <p>An <code>array</code> of open connections.</p>
		 * @link http://php.net/manual/en/mongoclient.getconnections.php
		 * @since PECL mongo >=1.3.0
		 */
		public static function getConnections(): array {}

		/**
		 * Updates status for all associated hosts
		 * <p>This method is only useful with a connection to a replica set. It returns the status of all of the hosts in the set. Without a replica set, it will just return an array with one element containing the host that you are connected to.</p><p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return array <p>Returns an array of information about the hosts in the set. Includes each host's hostname, its health (1 is healthy), its state (1 is primary, 2 is secondary, 0 is anything else), the amount of time it took to ping the server, and when the last ping occurred. For example, on a three-member replica set, it might look something like:</p> <pre>array(3) { ["A:27017"]=&gt; array(4) { ["host"]=&gt; "A" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(369) ["lastPing"]=&gt; int(1309470644) } ["B:27017"]=&gt; array(4) { ["host"]=&gt; "B" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(1) ["ping"]=&gt; int(139) ["lastPing"]=&gt; int(1309470644) } ["C:27017"]=&gt; array(4) { ["host"]=&gt; "C" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(1012) ["lastPing"]=&gt; int(1309470644) } }</pre>
		 * @link http://php.net/manual/en/mongoclient.gethosts.php
		 * @see MongoClient::getConnections()
		 * @since PECL mongo >=1.3.0
		 */
		public function getHosts(): array {}

		/**
		 * Get the read preference for this connection
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongoclient.getreadpreference.php
		 * @see MongoClient::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Get the write concern for this connection
		 * @return array <p>This function returns an array describing the write concern. The array contains the values <i>w</i> for an integer acknowledgement level or string mode, and <i>wtimeout</i> denoting the maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @link http://php.net/manual/en/mongoclient.getwriteconcern.php
		 * @see MongoClient::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * Kills a specific cursor on the server
		 * <p>In certain situations it might be needed to kill a cursor on the server. Usually cursors time out after 10 minutes of inactivity, but it is possible to create an immortal cursor with <code>MongoCursor::immortal()</code> that never times out. In order to be able to kill such an immortal cursor, you can call this method with the information supplied by <code>MongoCursor::info()</code>.</p>
		 * @param string $server_hash <p>The server hash that has the cursor. This can be obtained through <code>MongoCursor::info()</code>.</p>
		 * @param int|\MongoInt64 $id <p>The ID of the cursor to kill. You can either supply an <code>int</code> containing the 64 bit cursor ID, or an object of the MongoInt64 class. The latter is necessary on 32 bit platforms (and Windows).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the method attempted to kill a cursor, and <b><code>FALSE</code></b> if there was something wrong with the arguments (such as a wrong <code>server_hash</code>). The return status does <i>not reflect</i> where the cursor was actually killed as the server does not provide that information.</p>
		 * @link http://php.net/manual/en/mongoclient.killcursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function killCursor(string $server_hash, $id): bool {}

		/**
		 * Lists all of the databases available
		 * @return array <p>Returns an associative array containing three fields. The first field is <i>databases</i>, which in turn contains an array. Each element of the array is an associative array corresponding to a database, giving th database's name, size, and if it's empty. The other two fields are <i>totalSize</i> (in bytes) and <i>ok</i>, which is 1 if this method ran successfully.</p>
		 * @link http://php.net/manual/en/mongoclient.listdbs.php
		 * @since PECL mongo >=1.3.0
		 */
		public function listDBs(): array {}

		/**
		 * Gets a database collection
		 * @param string $db <p>The database name.</p>
		 * @param string $collection <p>The collection name.</p>
		 * @return MongoCollection <p>Returns a new collection object.</p>
		 * @link http://php.net/manual/en/mongoclient.selectcollection.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectCollection(string $db, string $collection): \MongoCollection {}

		/**
		 * Gets a database
		 * @param string $name <p>The database name.</p>
		 * @return MongoDB <p>Returns a new database object.</p>
		 * @link http://php.net/manual/en/mongoclient.selectdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectDB(string $name): \MongoDB {}

		/**
		 * Set the read preference for this connection
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongoclient.setreadpreference.php
		 * @see MongoClient::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Set the write concern for this connection
		 * @param mixed $w <p>The write concern. This may be an integer denoting the number of servers required to acknowledge the write, or a string mode (e.g. "majority").</p>
		 * @param int $wtimeout <p>The maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongoclient.setwriteconcern.php
		 * @see MongoClient::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}
	}

	/**
	 * <p>Represents JavaScript code for the database.</p>
	 * <p>MongoCode objects are composed of two parts: a string of code and an optional scope. The string of code must be valid JavaScript. The scope is a associative array of variable name/value pairs.</p>
	 * @link http://php.net/manual/en/class.mongocode.php
	 * @since PECL mongo >=0.8.3
	 */
	class MongoCode {

		/**
		 * Creates a new code object
		 * @param string $code <p>A string of code.</p>
		 * @param array $scope <p>The scope to use for the code.</p>
		 * @return self <p>Returns a new code object.</p>
		 * @link http://php.net/manual/en/mongocode.construct.php
		 * @since PECL mongo >= 0.8.3
		 */
		public function __construct(string $code, array $scope = array()) {}

		/**
		 * Returns this code as a string
		 * @return string <p>This code, the scope is not returned.</p>
		 * @link http://php.net/manual/en/mongocode.tostring.php
		 * @since PECL mongo >= 0.8.3
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>Represents a MongoDB collection.</p>
	 * <p>Collection names can use any character in the ASCII set. Some valid collection names are "", "...", "my collection", and "&#42;&amp;#@".</p>
	 * <p>User-defined collection names cannot contain the $ symbol. There are certain system collections which use a $ in their names (e.g., local.oplog.$main), but it is a reserved character. If you attempt to create and use a collection with a $ in the name, MongoDB will assert.</p>
	 * @link http://php.net/manual/en/class.mongocollection.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoCollection {

		/**
		 * @var int Ascending direction for sorts and index creation.
		 * @link http://php.net/manual/en/class.mongocollection.php
		 */
		const ASCENDING = 1;

		/**
		 * @var int Descending direction for sorts and index creation.
		 * @link http://php.net/manual/en/class.mongocollection.php
		 */
		const DESCENDING = -1;

		/**
		 * @var MongoDB <p>The "parent" database for this collection.</p>
		 * @link http://php.net/manual/en/class.mongocollection.php#mongocollection.props.db
		 */
		public $db = NULL;

		/**
		 * @var integer <p>The number of servers to replicate a change to before returning success. Value is inherited from the parent database. The MongoDB class has a more detailed description of how <i>w</i> works.</p>
		 * @link http://php.net/manual/en/class.mongocollection.php#mongocollection.props.w
		 */
		public $w;

		/**
		 * @var integer <p>The number of milliseconds to wait for <i>$this-&gt;w</i> replications to take place. Value is inherited from the parent database. The MongoDB class has a more detailed description of how <i>wtimeout</i> works.</p>
		 * @link http://php.net/manual/en/class.mongocollection.php#mongocollection.props.wtimeout
		 */
		public $wtimeout;

		/**
		 * Creates a new collection
		 * @param \MongoDB $db
		 * @param string $name
		 * @return self <p>Returns a new collection object.</p>
		 * @link http://php.net/manual/en/mongocollection.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoDB $db, string $name) {}

		/**
		 * Gets a collection
		 * <p>A concise syntax for getting a collection with a dot-separated name. If a collection name contains strange characters, you may have to use <code>MongoDB::selectCollection()</code> instead.</p>
		 * @param string $name <p>The next string in the collection name.</p>
		 * @return MongoCollection <p>Returns the collection.</p>
		 * @link http://php.net/manual/en/mongocollection.get.php
		 * @since PECL mongo >=1.0.2
		 */
		public function __get(string $name): \MongoCollection {}

		/**
		 * String representation of this collection
		 * @return string <p>Returns the full name of this collection.</p>
		 * @link http://php.net/manual/en/mongocollection.--tostring.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __toString(): string {}

		/**
		 * Perform an aggregation using the aggregation framework
		 * <p>The MongoDB aggregation framework provides a means to calculate aggregated values without having to use MapReduce. While MapReduce is powerful, it is often more difficult than necessary for many simple aggregation tasks, such as totaling or averaging field values.</p><p>This method accepts either a variable amount of pipeline operators, or a single array of operators constituting the pipeline.</p>
		 * @param array $pipeline <p>An array of pipeline operators.</p>
		 * @param array $options <p>Options for the aggregation command. Valid options include:</p> <ul> <li> <p><i>"allowDiskUse"</i></p> <p>Allow aggregation stages to write to temporary files</p> </li> <li> <p><i>"cursor"</i></p> <p>Options controlling the creation of the cursor object. This option causes the command to return a result document suitable for constructing a MongoCommandCursor. If you need to use this option, you should consider using <code>MongoCollection::aggregateCursor()</code>.</p> </li> <li> <p><i>"explain"</i></p> <p>Return information on the processing of the pipeline.</p> </li> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return array <p>The result of the aggregation as an array. The ok will be set to <i>1</i> on success, <i>0</i> on failure.</p>
		 * @link http://php.net/manual/en/mongocollection.aggregate.php
		 * @since PECL mongo >=1.3.0
		 */
		public function aggregate(array $pipeline, array $options = NULL): array {}

		/**
		 * Execute an aggregation pipeline command and retrieve results through a cursor
		 * <p>With this method you can execute Aggregation Framework pipelines and retrieve the results through a cursor, instead of getting just one document back as you would with <code>MongoCollection::aggregate()</code>. This method returns a MongoCommandCursor object. This cursor object implements the Iterator interface just like the MongoCursor objects that are returned by the <code>MongoCollection::find()</code> method.</p><p><b>Note</b>:  The resulting MongoCommandCursor will inherit this collection's read preference. <code>MongoCommandCursor::setReadPreference()</code> may be used to change the read preference before iterating on the cursor. </p>
		 * @param array $command
		 * @param array $options <p>Options for the aggregation command. Valid options include:</p> <ul> <li> <p><i>"allowDiskUse"</i></p> <p>Allow aggregation stages to write to temporary files</p> </li> <li> <p><i>"cursor"</i></p> <p>It is possible to configure how many initial documents the server should return with the first result set. The default initial batch size is <i>101</i>. You can change it by adding the <i>batchSize</i> option:</p>  <code> &lt;&#63;php<br>$collection-&gt;aggregateCursor(&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;$pipeline,<br>&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;"cursor"&nbsp;=&gt;&nbsp;[&nbsp;"batchSize"&nbsp;=&gt;&nbsp;4&nbsp;]&nbsp;]<br>);  </code>  <p>This option only configures the size of the first batch. To configure the size of future batches, please use the <code>MongoCommandCursor::batchSize()</code> method on the returned MongoCommandCursor object.</p> </li> <li> <p><i>"explain"</i></p> <p>Return information on the processing of the pipeline. This option may cause the command to return a result document that is unsuitable for constructing a MongoCommandCursor. If you need to use this option, you should consider using <code>MongoCollection::aggregate()</code>.</p> </li> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return MongoCommandCursor <p>Returns a MongoCommandCursor object. Because this implements the Iterator interface you can iterate over each of the results as returned by the command query. The MongoCommandCursor also implements the MongoCursorInterface interface which adds the <code>MongoCommandCursor::batchSize()</code>, <code>MongoCommandCursor::dead()</code>, <code>MongoCommandCursor::info()</code> methods.</p>
		 * @link http://php.net/manual/en/mongocollection.aggregatecursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function aggregateCursor(array $command, array $options = NULL): \MongoCommandCursor {}

		/**
		 * Inserts multiple documents into this collection
		 * @param array $a <p>An array of arrays or objects. If any objects are used, they may not have protected or private properties.</p> <p><b>Note</b>:</p><p>If the documents to insert do not have an <i>_id</i> key or property, a new MongoId instance will be created and assigned to it. See <code>MongoCollection::insert()</code> for additional information on this behavior.</p>
		 * @param array $options <p>An array of options for the batch of insert operations. Currently available options include:</p><ul> <li> <p><i>"continueOnError"</i></p> <p>Boolean, defaults to <b><code>FALSE</code></b>. If set, the database will not stop processing a bulk insert if one fails (eg due to duplicate IDs). This makes bulk insert behave similarly to a series of single inserts, except that calling <code>MongoDB::lastError()</code> will have an error set if any insert fails, not just the last one. If multiple errors occur, only the most recent will be reported by <code>MongoDB::lastError()</code>.</p> <p><b>Note</b>:</p><p>Please note that <i>continueOnError</i> affects errors on the database side only. If you try to insert a document that has errors (for example it contains a key with an empty name), then the document is not even transferred to the database as the driver detects this error and bails out. <i>continueOnError</i> has no effect on errors detected in the documents by the driver.</p>  </li> <li><p><i>"fsync"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. If journaling is enabled, it works exactly like <i>"j"</i>. If journaling is not enabled, the write operation blocks until it is synced to database files on disk. If <b><code>TRUE</code></b>, an acknowledged insert is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If journaling is enabled, users are strongly encouraged to use the <i>"j"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"j"</i> simultaneously, as that will result in an error.</p></li> <li><p><i>"j"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Forces the write operation to block until it is synced to the journal on disk. If <b><code>TRUE</code></b>, an acknowledged write is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return mixed <p>If the <i>w</i> parameter is set to acknowledge the write, returns an associative array with the status of the inserts ("ok") and any error that may have occurred ("err"). Otherwise, returns <b><code>TRUE</code></b> if the batch insert was successfully sent, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocollection.batchinsert.php
		 * @see MongoCollection::insert(), MongoCollection::update(), MongoCollection::find(), MongoCollection::remove()
		 * @since PECL mongo >=0.9.0
		 */
		public function batchInsert(array $a, array $options = array()) {}

		/**
		 * Counts the number of documents in this collection
		 * @param array $query <p>Associative array or object with fields to match.</p>
		 * @param array $options <p>An array of options for the index creation. Currently available options include:</p>   Name Type Description     hint <code>mixed</code>  <p>Index to use for the query. If a string is passed, it should correspond to an index name. If an array or object is passed, it should correspond to the specification used to create the index (i.e. the first argument to <code>MongoCollection::createIndex()</code>).</p> This option is only supported in MongoDB 2.6+.    limit <code>integer</code> The maximum number of matching documents to return.   maxTimeMS <code>integer</code>  <p>Specifies a cumulative time limit in milliseconds for processing the operation (does not include idle time). If the operation is not completed within the timeout period, a MongoExecutionTimeoutException will be thrown.</p> This option is only supported in MongoDB 2.6+.    skip <code>integer</code> The number of matching documents to skip before returning results.
		 * @return int <p>Returns the number of documents matching the query.</p>
		 * @link http://php.net/manual/en/mongocollection.count.php
		 * @since PECL mongo >=0.9.0
		 */
		public function count(array $query = array(), array $options = array()): int {}

		/**
		 * Creates a database reference
		 * @param mixed $document_or_id <p>If an array or object is given, its <i>_id</i> field will be used as the reference ID. If a MongoId or scalar is given, it will be used as the reference ID.</p>
		 * @return array <p>Returns a database reference array.</p><p>If an array without an <i>_id</i> field was provided as the <i>document_or_id</i> parameter, <b><code>NULL</code></b> will be returned.</p>
		 * @link http://php.net/manual/en/mongocollection.createdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function createDBRef($document_or_id): array {}

		/**
		 * Creates an index on the specified field(s) if it does not already exist
		 * <p>Creates an index on the specified field(s) if it does not already exist. Fields may be indexed with a direction (e.g. ascending or descending) or a special type (e.g. text, geospatial, hashed).</p><p><b>Note</b>:</p><p>This method will use the createIndexes database command when communicating with MongoDB 2.6+. For previous database versions, the method will perform an insert operation on the special <i>system.indexes</i> collection.</p>
		 * @param array $keys <p>An array specifying the index's fields as its keys. For each field, the value is either the index direction or index type. If specifying direction, specify <i>1</i> for ascending or <i>-1</i> for descending.</p>
		 * @param array $options <p>An array of options for the index creation. We pass all given options straight to the server, but a non-exhaustive list of currently available options include:</p><ul> <li><p><i>"unique"</i></p><p>Specify <b><code>TRUE</code></b> to create a unique index. The default value is <b><code>FALSE</code></b>. This option applies only to ascending/descending indexes.</p><p><b>Note</b>:</p><p>When MongoDB indexes a field, if a document does not have a value for the field, a <b><code>NULL</code></b> value is indexed. If multiple documents do not contain a field, a unique index will reject all but the first of those documents. The <i>"sparse"</i> option may be used to overcome this, since it will prevent documents without the field from being indexed.</p></li> <li><p><i>"sparse"</i></p><p>Specify <b><code>TRUE</code></b> to create a sparse index, which only indexes documents containing a specified field. The default value is <b><code>FALSE</code></b>.</p></li> <li><p><i>"expireAfterSeconds"</i></p><p>The value of this option should specify the number of seconds after which a document should be considered expired and automatically removed from the collection. This option is only compatible with single-field indexes where the field will contain MongoDate values.</p><p><b>Note</b>:</p><p>This feature is available in MongoDB 2.2+. See Expire Data from Collections by Setting TTL for more information.</p></li> <li><p><i>"name"</i></p><p>A optional name that uniquely identifies the index.</p><p><b>Note</b>:</p><p>By default, the driver will generate an index name based on the index's field(s) and ordering or type. For example, a compound index <i>array("x" =&gt; 1, "y" =&gt; -1)</i> would be named <i>"x_1_y_-1"</i> and a geospatial index <i>array("loc" =&gt; "2dsphere")</i> would be named <i>"loc_2dsphere"</i>. For indexes with many fields, it is possible that the generated name might exceed MongoDB's limit for index names. The <i>"name"</i> option may be used in that case to supply a shorter name.</p></li> <li><p><i>"background"</i></p><p>Builds the index in the background so that building an index does <i>not</i> block other database activities. Specify <b><code>TRUE</code></b> to build in the background. The default value is <b><code>FALSE</code></b>.</p><p><b>Warning</b></p><p>Prior to MongoDB 2.6.0, index builds on secondaries were executed as foreground operations, irrespective of this option. See Building Indexes with Replica Sets for more information.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> </ul> <p>The following option may be used with MongoDB 2.6+:</p><ul> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul> <p>The following options may be used with MongoDB versions before 2.8:</p><ul> <li><p><i>"dropDups"</i></p><p>Specify <b><code>TRUE</code></b> to force creation of a unique index where the collection may contain duplicate values for a key. MongoDB will index the first occurrence of a key and delete all subsequent documents from the collection that contain a duplicate value for that key. The default value is <b><code>FALSE</code></b>.</p><p><b>Warning</b></p><p><i>"dropDups"</i> may delete data from your database. Use with extreme caution.</p><p><b>Note</b>:</p><p>This option is not supported on MongoDB 2.8+. Index creation will fail if the collection contains duplicate values.</p></li> </ul> <p>The following options may be used with MongoDB versions before 2.6:</p><ul> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return bool <p>Returns an array containing the status of the index creation. The array contains whether the operation succeeded (<i>"ok"</i>), the number of indexes before and after the operation (<i>"numIndexesBefore"</i> and <i>"numIndexesAfter"</i>), and whether the collection that the index belongs to has been created (<i>"createdCollectionAutomatically"</i>). If the index already existed and did not need to be created, a <i>"note"</i> field may be present in lieu of <i>"numIndexesAfter"</i>.</p><p>With MongoDB 2.4 and earlier, a status document is only returned if the write concern is at least <i>1</i>. Otherwise, <b><code>TRUE</code></b> is returned. The fields in the status document are different, except for the <i>"ok"</i> field, which signals whether the index creation was successful. Additional fields are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link http://php.net/manual/en/mongocollection.createindex.php
		 * @since PECL mongo >=1.5.0
		 */
		public function createIndex(array $keys, array $options = array()): bool {}

		/**
		 * Deletes an index from this collection
		 * <p>This method is identical to:</p><p>Each index is given a unique name when it is created. This is often generated by the driver based on the index key(s) and order/type, but custom names may also be specified with <code>MongoCollection::createIndex()</code>'s <i>"name"</i> option).</p><p>Unfortunately, <b>MongoCollection::deleteIndex()</b> cannot delete custom-named indexes due to a backwards compatibility issue. When a string argument is provided, it is assumed to be the single field name in an ascending index (e.g. the name <i>"x_1"</i> would be used for the argument <i>"x"</i>). If an array or object is provided, an index name is generated just as if that argument was passed to <code>MongoCollection::createIndex()</code>.</p><p>In order to delete a custom-named index with the PHP driver, the <i>deleteIndexes</i> database command must be used. For instance, an index named "myIndex" could be deleted with the PHP driver by running:</p><p>To determine the name of an index with the PHP driver, you can query the <i>system.indexes</i> collection of a database and look for the <i>"name"</i> field of each result. The <i>"ns"</i> field will indicate the collection to which each index belongs.</p>
		 * @param string|array $keys <p>An array specifying the index's fields as its keys. For each field, the value is either the index direction or index type. If specifying direction, specify <i>1</i> for ascending or <i>-1</i> for descending.</p> <p>If a string is provided, it is assumed to be the single field name in an ascending index.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongocollection.deleteindex.php
		 * @since PECL mongo >=0.9.0
		 */
		public function deleteIndex($keys): array {}

		/**
		 * Delete all indices for this collection
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongocollection.deleteindexes.php
		 * @since PECL mongo >=0.9.0
		 */
		public function deleteIndexes(): array {}

		/**
		 * Retrieve a list of distinct values for the given key across a collection
		 * <p>The distinct command returns a list of distinct values for the given key across a collection.</p>
		 * @param string $key <p>The key to use.</p>
		 * @param array $query <p>An optional query parameters</p>
		 * @return array <p>Returns an array of distinct values, or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/mongocollection.distinct.php
		 * @since PECL mongo >=1.2.11
		 */
		public function distinct(string $key, array $query = NULL): array {}

		/**
		 * Drops this collection
		 * <p>Drops this collection and deletes its indices.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongocollection.drop.php
		 * @since PECL mongo >=0.9.0
		 */
		public function drop(): array {}

		/**
		 * Creates an index on the specified field(s) if it does not already exist
		 * <p>This method is deprecated since version 1.5.0. Please use <code>MongoCollection::createIndex()</code> instead.</p><p>Creates an index on the specified field(s) if it does not already exist. Fields may be indexed with a direction (e.g. ascending or descending) or a special type (e.g. text, geospatial, hashed).</p><p><b>Note</b>:</p><p>This method will use the createIndexes database command when communicating with MongoDB 2.6+. For previous database versions, the method will perform an insert operation on the special <i>system.indexes</i> collection.</p>
		 * @param string|array $keys <p>An array specifying the index's fields as its keys. For each field, the value is either the index direction or index type. If specifying direction, specify <i>1</i> for ascending or <i>-1</i> for descending.</p>
		 * @param array $options <p>An array of options for the index creation. Currently available options include:</p><ul> <li><p><i>"unique"</i></p><p>Specify <b><code>TRUE</code></b> to create a unique index. The default value is <b><code>FALSE</code></b>. This option applies only to ascending/descending indexes.</p><p><b>Note</b>:</p><p>When MongoDB indexes a field, if a document does not have a value for the field, a <b><code>NULL</code></b> value is indexed. If multiple documents do not contain a field, a unique index will reject all but the first of those documents. The <i>"sparse"</i> option may be used to overcome this, since it will prevent documents without the field from being indexed.</p></li> <li><p><i>"sparse"</i></p><p>Specify <b><code>TRUE</code></b> to create a sparse index, which only indexes documents containing a specified field. The default value is <b><code>FALSE</code></b>.</p></li> <li><p><i>"expireAfterSeconds"</i></p><p>The value of this option should specify the number of seconds after which a document should be considered expired and automatically removed from the collection. This option is only compatible with single-field indexes where the field will contain MongoDate values.</p><p><b>Note</b>:</p><p>This feature is available in MongoDB 2.2+. See Expire Data from Collections by Setting TTL for more information.</p></li> <li><p><i>"name"</i></p><p>A optional name that uniquely identifies the index.</p><p><b>Note</b>:</p><p>By default, the driver will generate an index name based on the index's field(s) and ordering or type. For example, a compound index <i>array("x" =&gt; 1, "y" =&gt; -1)</i> would be named <i>"x_1_y_-1"</i> and a geospatial index <i>array("loc" =&gt; "2dsphere")</i> would be named <i>"loc_2dsphere"</i>. For indexes with many fields, it is possible that the generated name might exceed MongoDB's limit for index names. The <i>"name"</i> option may be used in that case to supply a shorter name.</p></li> <li><p><i>"background"</i></p><p>Builds the index in the background so that building an index does <i>not</i> block other database activities. Specify <b><code>TRUE</code></b> to build in the background. The default value is <b><code>FALSE</code></b>.</p><p><b>Warning</b></p><p>Prior to MongoDB 2.6.0, index builds on secondaries were executed as foreground operations, irrespective of this option. See Building Indexes with Replica Sets for more information.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> </ul> <p>The following option may be used with MongoDB 2.6+:</p><ul> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul> <p>The following options may be used with MongoDB versions before 2.8:</p><ul> <li><p><i>"dropDups"</i></p><p>Specify <b><code>TRUE</code></b> to force creation of a unique index where the collection may contain duplicate values for a key. MongoDB will index the first occurrence of a key and delete all subsequent documents from the collection that contain a duplicate value for that key. The default value is <b><code>FALSE</code></b>.</p><p><b>Warning</b></p><p><i>"dropDups"</i> may delete data from your database. Use with extreme caution.</p><p><b>Note</b>:</p><p>This option is not supported on MongoDB 2.8+. Index creation will fail if the collection contains duplicate values.</p></li> </ul> <p>The following options may be used with MongoDB versions before 2.6:</p><ul> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return bool <p>Returns an array containing the status of the index creation. The array contains whether the operation succeeded (<i>"ok"</i>), the number of indexes before and after the operation (<i>"numIndexesBefore"</i> and <i>"numIndexesAfter"</i>), and whether the collection that the index belongs to has been created (<i>"createdCollectionAutomatically"</i>). If the index already existed and did not need to be created, a <i>"note"</i> field may be present in lieu of <i>"numIndexesAfter"</i>.</p><p>With MongoDB 2.4 and earlier, a status document is only returned if the write concern is at least <i>1</i>. Otherwise, <b><code>TRUE</code></b> is returned. The fields in the status document are different, except for the <i>"ok"</i> field, which signals whether the index creation was successful. Additional fields are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link http://php.net/manual/en/mongocollection.ensureindex.php
		 * @since PECL mongo >=0.9.0
		 */
		public function ensureIndex($keys, array $options = array()): bool {}

		/**
		 * Queries this collection, returning a MongoCursor for the result set
		 * @param array $query <p>The fields for which to search. MongoDB's query language is quite extensive. The PHP driver will in almost all cases pass the query straight through to the server, so reading the MongoDB core docs on find is a good idea.</p> <p><b>Warning</b></p> <p>Please make sure that for all special query operators (starting with <i>$</i>) you use single quotes so that PHP doesn't try to replace <i>"$exists"</i> with the value of the variable <i>$exists</i>.</p>
		 * @param array $fields <p>Fields of the results to return. The array is in the format <i>array('fieldname' =&gt; true, 'fieldname2' =&gt; true)</i>. The <i>_id</i> field is always returned.</p>
		 * @return MongoCursor <p>Returns a cursor for the search results.</p>
		 * @link http://php.net/manual/en/mongocollection.find.php
		 * @see MongoCollection::findOne(), MongoCollection::insert()
		 * @since PECL mongo >=0.9.0
		 */
		public function find(array $query = array(), array $fields = array()): \MongoCursor {}

		/**
		 * Update a document and return it
		 * <p>The findAndModify command atomically modifies and returns a single document. By default, the returned document does not include the modifications made on the update. To return the document with the modifications made on the update, use the new option.</p>
		 * @param array $query <p>The query criteria to search for.</p>
		 * @param array $update <p>The update criteria.</p>
		 * @param array $fields <p>Optionally only return these fields.</p>
		 * @param array $options <p>An array of options to apply, such as remove the match document from the DB and return it.</p>   Option Description     sort <code>array</code>  Determines which document the operation will modify if the query selects multiple documents. findAndModify will modify the first document in the sort order specified by this argument.    remove <code>boolean</code>  Optional if update field exists. When <b><code>TRUE</code></b>, removes the selected document. The default is <b><code>FALSE</code></b>.    update <code>array</code>  Optional if remove field exists. Performs an update of the selected document.    new <code>boolean</code>  Optional. When <b><code>TRUE</code></b>, returns the modified document rather than the original. The findAndModify method ignores the new option for remove operations. The default is <b><code>FALSE</code></b>.    upsert <code>boolean</code>  Optional. Used in conjunction with the update field. When <b><code>TRUE</code></b>, the findAndModify command creates a new document if the query returns no documents. The default is false. In MongoDB 2.2, the findAndModify command returns <b><code>NULL</code></b> when upsert is <b><code>TRUE</code></b>.
		 * @return array <p>Returns the original document, or the modified document when new is set.</p>
		 * @link http://php.net/manual/en/mongocollection.findandmodify.php
		 * @since PECL mongo >=1.3.0
		 */
		public function findAndModify(array $query, array $update = NULL, array $fields = NULL, array $options = NULL): array {}

		/**
		 * Queries this collection, returning a single element
		 * <p>As opposed to <code>MongoCollection::find()</code>, this method will return only the <i>first</i> result from the result set, and not a MongoCursor that can be iterated over.</p>
		 * @param array $query <p>The fields for which to search. MongoDB's query language is quite extensive. The PHP driver will in almost all cases pass the query straight through to the server, so reading the MongoDB core docs on find is a good idea.</p> <p><b>Warning</b></p> <p>Please make sure that for all special query operaters (starting with <i>$</i>) you use single quotes so that PHP doesn't try to replace <i>"$exists"</i> with the value of the variable <i>$exists</i>.</p>
		 * @param array $fields <p>Fields of the results to return. The array is in the format <i>array('fieldname' =&gt; true, 'fieldname2' =&gt; true)</i>. The <i>_id</i> field is always returned.</p>
		 * @param array $options <p>This parameter is an associative array of the form <i>array("name" =&gt; &lt;value&gt;, ...)</i>. Currently supported options are:</p> <ul> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return array <p>Returns record matching the search or <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongocollection.findone.php
		 * @see MongoCollection::find(), MongoCollection::insert()
		 * @since PECL mongo >=0.9.0
		 */
		public function findOne(array $query = array(), array $fields = array(), array $options = array()): array {}

		/**
		 * Fetches the document pointed to by a database reference
		 * @param array $ref <p>A database reference.</p>
		 * @return array <p>Returns the database document pointed to by the reference.</p>
		 * @link http://php.net/manual/en/mongocollection.getdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getDBRef(array $ref): array {}

		/**
		 * Returns information about indexes on this collection
		 * @return array <p>This function returns an array in which each element describes an index. Elements will contain the values <i>name</i> for the name of the index, <i>ns</i> for the namespace (a combination of the database and collection name), and <i>key</i> for a list of all fields in the index and their ordering. Additional values may be present for special indexes, such as <i>unique</i> or <i>sparse</i>.</p>
		 * @link http://php.net/manual/en/mongocollection.getindexinfo.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getIndexInfo(): array {}

		/**
		 * Returns this collection's name
		 * @return string <p>Returns the name of this collection.</p>
		 * @link http://php.net/manual/en/mongocollection.getname.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getName(): string {}

		/**
		 * Get the read preference for this collection
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongocollection.getreadpreference.php
		 * @see MongoCollection::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Get slaveOkay setting for this collection
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return bool <p>Returns the value of slaveOkay for this instance.</p>
		 * @link http://php.net/manual/en/mongocollection.getslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlaveOkay(): bool {}

		/**
		 * Get the write concern for this collection
		 * @return array <p>This function returns an array describing the write concern. The array contains the values <i>w</i> for an integer acknowledgement level or string mode, and <i>wtimeout</i> denoting the maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @link http://php.net/manual/en/mongocollection.getwriteconcern.php
		 * @see MongoCollection::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * Performs an operation similar to SQL's GROUP BY command
		 * @param mixed $keys <p>Fields to group by. If an array or non-code object is passed, it will be the key used to group results.</p> <p>1.0.4+: If <code>keys</code> is an instance of MongoCode, <code>keys</code> will be treated as a function that returns the key to group by (see the "Passing a <code>keys</code> function" example below).</p>
		 * @param array $initial <p>Initial value of the aggregation counter object.</p>
		 * @param \MongoCode $reduce <p>A function that takes two arguments (the current document and the aggregation to this point) and does the aggregation.</p>
		 * @param array $options <p>Optional parameters to the group command. Valid options include:</p> <ul> <li> <p><i>"condition"</i></p> <p>Criteria for including a document in the aggregation.</p> </li> <li> <p><i>"finalize"</i></p> <p>Function called once per unique key that takes the final output of the reduce function.</p> </li> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return array <p>Returns an array containing the result.</p>
		 * @link http://php.net/manual/en/mongocollection.group.php
		 * @since PECL mongo >=0.9.2
		 */
		public function group($keys, array $initial, \MongoCode $reduce, array $options = array()): array {}

		/**
		 * Inserts a document into the collection
		 * <p>All strings sent to the database must be UTF-8. If a string is not UTF-8, a MongoException will be thrown. To insert (or query for) a non-UTF-8 string, use MongoBinData.</p>
		 * @param array|object $document <p>An array or object. If an object is used, it may not have protected or private properties.</p> <p><b>Note</b>:</p><p>If the parameter does not have an <i>_id</i> key or property, a new MongoId instance will be created and assigned to it. This special behavior does not mean that the parameter is passed by reference.</p>
		 * @param array $options <p>An array of options for the insert operation. Currently available options include:</p><ul> <li><p><i>"fsync"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. If journaling is enabled, it works exactly like <i>"j"</i>. If journaling is not enabled, the write operation blocks until it is synced to database files on disk. If <b><code>TRUE</code></b>, an acknowledged insert is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If journaling is enabled, users are strongly encouraged to use the <i>"j"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"j"</i> simultaneously, as that will result in an error.</p></li> <li><p><i>"j"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Forces the write operation to block until it is synced to the journal on disk. If <b><code>TRUE</code></b>, an acknowledged write is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return bool|array <p>Returns an array containing the status of the insertion if the <i>"w"</i> option is set. Otherwise, returns <b><code>TRUE</code></b> if the inserted array is not empty (a MongoException will be thrown if the inserted array is empty).</p><p>If an array is returned, the following keys may be present:</p>  <code>ok</code>   <p>This should almost always be 1 (unless last_error itself failed).</p>   <code>err</code>   <p>If this field is non-null, an error occurred on the previous operation. If this field is set, it will be a string describing the error that occurred.</p>   <code>code</code>   <p>If a database error occurred, the relevant error code will be passed back to the client.</p>   <code>errmsg</code>   <p>This field is set if something goes wrong with a database command. It is coupled with <i>ok</i> being 0. For example, if <i>w</i> is set and times out, errmsg will be set to "timed out waiting for slaves" and <i>ok</i> will be 0. If this field is set, it will be a string describing the error that occurred.</p>   <code>n</code>   <p>If the last operation was an update, upsert, or a remove, the number of documents affected will be returned. For insert operations, this value is always <i>0</i>.</p>   <code>wtimeout</code>   <p>If the previous option timed out waiting for replication.</p>   <code>waited</code>   <p>How long the operation waited before timing out.</p>   <code>wtime</code>   <p>If <i>w</i> was set and the operation succeeded, how long it took to replicate to <i>w</i> servers.</p>   <code>upserted</code>   <p>If an upsert occurred, this field will contain the new record's <i>_id</i> field. For upserts, either this field or <i>updatedExisting</i> will be present (unless an error occurred).</p>   <code>updatedExisting</code>   <p>If an upsert updated an existing element, this field will be true. For upserts, either this field or upserted will be present (unless an error occurred).</p>
		 * @link http://php.net/manual/en/mongocollection.insert.php
		 * @see MongoCollection::batchInsert(), MongoCollection::update(), MongoCollection::find(), MongoCollection::remove()
		 * @since PECL mongo >=0.9.0
		 */
		public function insert($document, array $options = array()) {}

		/**
		 * Returns an array of cursors to iterator over a full collection in parallel
		 * <p>This method returns an array of a maximum of <i>num_cursors</i> cursors. An iteration over one of the returned cursors results in a partial set of documents for a collection. Iteration over all the returned cursors results in getting every document back from the collection.</p><p>This method is a wrapper for the <i>parallelCollectionScan</i> MongoDB command.</p>
		 * @param int $num_cursors <p>The number of cursors to request from the server. Please note, that the server can return less cursors than you requested.</p>
		 * @return array[MongoCommandCursor] <p>Returns an array of MongoCommandCursor objects.</p>
		 * @link http://php.net/manual/en/mongocollection.parallelcollectionscan.php
		 * @since PECL mongo >=1.5.0
		 */
		public function parallelCollectionScan(int $num_cursors): array {}

		/**
		 * Remove records from this collection
		 * @param array $criteria <p>Query criteria for the documents to delete.</p>
		 * @param array $options <p>An array of options for the remove operation. Currently available options include:</p><ul> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li> <p><i>"justOne"</i></p> <p>Specify <b><code>TRUE</code></b> to limit deletion to just one document. If <b><code>FALSE</code></b> or omitted, all documents matching the criteria will be deleted.</p> </li> <li><p><i>"fsync"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. If journaling is enabled, it works exactly like <i>"j"</i>. If journaling is not enabled, the write operation blocks until it is synced to database files on disk. If <b><code>TRUE</code></b>, an acknowledged insert is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If journaling is enabled, users are strongly encouraged to use the <i>"j"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"j"</i> simultaneously, as that will result in an error.</p></li> <li><p><i>"j"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Forces the write operation to block until it is synced to the journal on disk. If <b><code>TRUE</code></b>, an acknowledged write is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return bool|array <p>Returns an array containing the status of the removal if the <i>"w"</i> option is set. Otherwise, returns <b><code>TRUE</code></b>.</p><p>Fields in the status array are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link http://php.net/manual/en/mongocollection.remove.php
		 * @see MongoCollection::insert(), MongoCollection::update()
		 * @since PECL mongo >=0.9.0
		 */
		public function remove(array $criteria = array(), array $options = array()) {}

		/**
		 * Saves a document to this collection
		 * <p>If the object is from the database, update the existing database object, otherwise insert this object.</p>
		 * @param array|object $document <p>Array or object to save. If an object is used, it may not have protected or private properties.</p> <p><b>Note</b>:</p><p>If the parameter does not have an <i>_id</i> key or property, a new MongoId instance will be created and assigned to it. See <code>MongoCollection::insert()</code> for additional information on this behavior.</p>
		 * @param array $options <p>Options for the save.</p><ul> <li><p><i>"fsync"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. If journaling is enabled, it works exactly like <i>"j"</i>. If journaling is not enabled, the write operation blocks until it is synced to database files on disk. If <b><code>TRUE</code></b>, an acknowledged insert is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If journaling is enabled, users are strongly encouraged to use the <i>"j"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"j"</i> simultaneously, as that will result in an error.</p></li> <li><p><i>"j"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Forces the write operation to block until it is synced to the journal on disk. If <b><code>TRUE</code></b>, an acknowledged write is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> </ul>
		 * @return mixed <p>If <code>w</code> was set, returns an array containing the status of the save. Otherwise, returns a boolean representing if the array was not empty (an empty array will not be inserted).</p>
		 * @link http://php.net/manual/en/mongocollection.save.php
		 * @since PECL mongo >=0.9.0
		 */
		public function save($document, array $options = array()) {}

		/**
		 * Set the read preference for this collection
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocollection.setreadpreference.php
		 * @see MongoCollection::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Change slaveOkay setting for this collection
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @param bool $ok <p>If reads should be sent to secondary members of a replica set for all possible queries using this MongoCollection instance.</p>
		 * @return bool <p>Returns the former value of slaveOkay for this instance.</p>
		 * @link http://php.net/manual/en/mongocollection.setslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function setSlaveOkay(bool $ok = TRUE): bool {}

		/**
		 * Set the write concern for this database
		 * @param mixed $w <p>The write concern. This may be an integer denoting the number of servers required to acknowledge the write, or a string mode (e.g. "majority").</p>
		 * @param int $wtimeout <p>The maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocollection.setwriteconcern.php
		 * @see MongoCollection::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}

		/**
		 * Converts keys specifying an index to its identifying string
		 * <p>This method is deprecated since version 1.5.0.</p>
		 * @param mixed $keys <p>Field or fields to convert to the identifying string</p>
		 * @return string <p>Returns a string that describes the index.</p>
		 * @link http://php.net/manual/en/mongocollection.toindexstring.php
		 * @since PECL mongo >=0.9.0
		 */
		static protected function toIndexString($keys): string {}

		/**
		 * Update records based on a given criteria
		 * @param array $criteria <p>Query criteria for the documents to update.</p>
		 * @param array $new_object <p>The object used to update the matched documents. This may either contain update operators (for modifying specific fields) or be a replacement document.</p>
		 * @param array $options <p>An array of options for the update operation. Currently available options include:</p><ul> <li> <p><i>"upsert"</i></p> <p>If no document matches <code>$criteria</code>, a new document will be inserted.</p> <p>If a new document would be inserted and <code>$new_object</code> contains atomic modifiers (i.e. <i>$</i> operators), those operations will be applied to the <code>$criteria</code> parameter to create the new document. If <code>$new_object</code> does not contain atomic modifiers, it will be used as-is for the inserted document. See the upsert examples below for more information.</p> </li> <li> <p><i>"multiple"</i></p> <p>All documents matching $criteria will be updated. <b>MongoCollection::update()</b> has exactly the opposite behavior of <code>MongoCollection::remove()</code>: it updates one document by default, not all matching documents. <i>It is recommended that you always specify whether you want to update multiple documents or a single document</i>, as the database may change its default behavior at some point in the future.</p> </li> <li><p><i>"fsync"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. If journaling is enabled, it works exactly like <i>"j"</i>. If journaling is not enabled, the write operation blocks until it is synced to database files on disk. If <b><code>TRUE</code></b>, an acknowledged insert is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If journaling is enabled, users are strongly encouraged to use the <i>"j"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"j"</i> simultaneously, as that will result in an error.</p></li> <li><p><i>"j"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Forces the write operation to block until it is synced to the journal on disk. If <b><code>TRUE</code></b>, an acknowledged write is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return bool|array <p>Returns an array containing the status of the update if the <i>"w"</i> option is set. Otherwise, returns <b><code>TRUE</code></b>.</p><p>Fields in the status array are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link http://php.net/manual/en/mongocollection.update.php
		 * @since PECL mongo >=0.9.0
		 */
		public function update(array $criteria, array $new_object, array $options = array()) {}

		/**
		 * Validates this collection
		 * @param bool $scan_data <p>Only validate indices, not the base collection.</p>
		 * @return array <p>Returns the database's evaluation of this object.</p>
		 * @link http://php.net/manual/en/mongocollection.validate.php
		 * @since PECL mongo >=0.9.0
		 */
		public function validate(bool $scan_data = FALSE): array {}
	}

	/**
	 * <p>A command cursor is similar to a MongoCursor except that you use it for iterating through the results of a database command instead of a normal query. Command cursors are useful for iterating over large result sets that might exceed the document size limit (currently 16MB) of a single <code>MongoDB::command()</code> response.</p>
	 * <p>While you can create command cursors using <code>MongoCommandCursor::__construct()</code> or the <code>MongoCommandCursor::createFromDocument()</code> factory method, you will generally want to use command-specific helpers such as <code>MongoCollection::aggregateCursor()</code>.</p>
	 * <p>Note that the cursor does not "contain" the database command's results; it just manages iteration through them. Thus, if you print a cursor (f.e. with <code>var_dump()</code> or <code>print_r()</code>), you will see the cursor object but not the result documents.</p>
	 * @link http://php.net/manual/en/class.mongocommandcursor.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoCommandCursor implements \MongoCursorInterface, \Iterator {

		/**
		 * Create a new command cursor
		 * <p>Generally, you should not have to construct a MongoCommandCursor manually, as there are helper functions such as <code>MongoCollection::aggregateCursor()</code> and <code>MongoCollection::parallelCollectionScan()</code>; however, if the server introduces new commands that can return cursors, this constructor will be useful in the absence of specific helper methods. You may also consider using <code>MongoCommandCursor::createFromDocument()</code>.</p>
		 * @param \MongoClient $connection <p>Database connection.</p>
		 * @param string $ns <p>Full name of the database and collection (e.g. <i>"test.foo"</i>)</p>
		 * @param array $command <p>Database command.</p>
		 * @return self <p>Returns the new cursor.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.construct.php
		 * @see MongoCommandCursor::createFromDocument(), MongoCollection::aggregateCursor(), MongoCollection::parallelCollectionScan()
		 * @since PECL mongo >=1.5.0
		 */
		public function __construct(\MongoClient $connection, string $ns, array $command = array()) {}

		/**
		 * Execute an aggregation pipeline command and retrieve results through a cursor
		 * <p>With this method you can execute Aggregation Framework pipelines and retrieve the results through a cursor, instead of getting just one document back as you would with <code>MongoCollection::aggregate()</code>. This method returns a MongoCommandCursor object. This cursor object implements the Iterator interface just like the MongoCursor objects that are returned by the <code>MongoCollection::find()</code> method.</p><p><b>Note</b>:  The resulting MongoCommandCursor will inherit this collection's read preference. <code>MongoCommandCursor::setReadPreference()</code> may be used to change the read preference before iterating on the cursor. </p>
		 * @param array $command
		 * @param array $options <p>Options for the aggregation command. Valid options include:</p> <ul> <li> <p><i>"allowDiskUse"</i></p> <p>Allow aggregation stages to write to temporary files</p> </li> <li> <p><i>"cursor"</i></p> <p>It is possible to configure how many initial documents the server should return with the first result set. The default initial batch size is <i>101</i>. You can change it by adding the <i>batchSize</i> option:</p>  <code> &lt;&#63;php<br>$collection-&gt;aggregateCursor(&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;$pipeline,<br>&nbsp;&nbsp;&nbsp;&nbsp;[&nbsp;"cursor"&nbsp;=&gt;&nbsp;[&nbsp;"batchSize"&nbsp;=&gt;&nbsp;4&nbsp;]&nbsp;]<br>);  </code>  <p>This option only configures the size of the first batch. To configure the size of future batches, please use the <code>MongoCommandCursor::batchSize()</code> method on the returned MongoCommandCursor object.</p> </li> <li> <p><i>"explain"</i></p> <p>Return information on the processing of the pipeline. This option may cause the command to return a result document that is unsuitable for constructing a MongoCommandCursor. If you need to use this option, you should consider using <code>MongoCollection::aggregate()</code>.</p> </li> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return MongoCommandCursor <p>Returns a MongoCommandCursor object. Because this implements the Iterator interface you can iterate over each of the results as returned by the command query. The MongoCommandCursor also implements the MongoCursorInterface interface which adds the <code>MongoCommandCursor::batchSize()</code>, <code>MongoCommandCursor::dead()</code>, <code>MongoCommandCursor::info()</code> methods.</p>
		 * @link http://php.net/manual/en/mongocollection.aggregatecursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function aggregateCursor(array $command, array $options = NULL): \MongoCommandCursor {}

		/**
		 * Limits the number of elements returned in one batch
		 * <p>A cursor typically fetches a batch of result objects and store them locally. This method sets the batchSize value to configure the amount of documents retrieved from the server in one round trip.</p>
		 * @param int $batchSize <p>The number of results to return per batch. Each batch requires a round-trip to the server.</p> <p>This cannot override MongoDB's limit on the amount of data it will return to the client (i.e., if you set batch size to 1,000,000,000, MongoDB will still only return 4-16MB of results per batch).</p>
		 * @return MongoCommandCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.batchsize.php
		 * @since PECL mongo >=1.5.0
		 */
		public function batchSize(int $batchSize): \MongoCommandCursor {}

		/**
		 * Execute a database command
		 * <p>Almost everything that is not a CRUD operation can be done with a database command. Need to know the database version&#63; There's a command for that. Need to do aggregation&#63; There's a command for that. Need to turn up logging&#63; You get the idea.</p><p>This method is identical to:</p>
		 * @param array $command <p>The query to send.</p>
		 * @param array $options <p>An array of options for the index creation. Currently available options include:</p><ul> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> </ul>
		 * @param string $hash <p>Set to the connection hash of the server that executed the command. When the command result is suitable for creating a MongoCommandCursor, the hash is intended to be passed to <code>MongoCommandCursor::createFromDocument()</code>.</p> <p>The hash will also correspond to a connection returned from <code>MongoClient::getConnections()</code>.</p>
		 * @return array <p>Returns database response. Every database response is always maximum one document, which means that the result of a database command can never exceed 16MB. The resulting document's structure depends on the command, but most results will have the <i>ok</i> field to indicate success or failure and <i>results</i> containing an array of each of the resulting documents.</p>
		 * @link http://php.net/manual/en/mongodb.command.php
		 * @since PECL mongo >=0.9.2
		 */
		public function command(array $command, array $options = array(), string &$hash = NULL): array {}

		/**
		 * Create a new command cursor from an existing command response document
		 * <p>Use this method if you have a raw command result with cursor information in it. Note that cursors created with this method cannot be iterated multiple times, as they will lack the original command necessary for re-execution.</p>
		 * @param \MongoClient $connection <p>Database connection.</p>
		 * @param string $hash <p>The connection hash, as obtained through the third by-reference argument to <code>MongoDB::command()</code>.</p>
		 * @param array $document <p>Document with cursor information in it. This document needs to contain the <i>id</i>, <i>ns</i> and <i>firstBatch</i> fields. Such a document is obtained by calling the <code>MongoDB::command()</code> with appropriate arguments to return a cursor, and not just an inline result. See the example below.</p>
		 * @return MongoCommandCursor <p>Returns the new cursor.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.createfromdocument.php
		 * @see MongoCommandCursor::__construct()
		 * @since PECL mongo >=1.5.0
		 */
		public static function createFromDocument(\MongoClient $connection, string $hash, array $document): \MongoCommandCursor {}

		/**
		 * Returns the current element
		 * <p>This returns <b><code>NULL</code></b> until <code>MongoCommandCursor::rewind()</code> is called.</p>
		 * @return array <p>The current result document as an associative array. <b><code>NULL</code></b> will be returned if there is no result.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.current.php
		 * @since PECL mongo >=1.5.0
		 */
		public function current(): array {}

		/**
		 * Checks if there are results that have not yet been sent from the database
		 * <p>This method checks whether the MongoCommandCursor cursor has been exhausted and the database has no more results to send to the client. A cursor being "dead" does not necessarily mean that there are no more results available for iteration.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more results that have not yet been sent to the client, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.dead.php
		 * @since PECL mongo >=1.5.0
		 */
		public function dead(): bool {}

		/**
		 * Get the read preference for this command
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.getreadpreference.php
		 * @see MongoCommandCursor::setReadPreference(), MongoCursorInterface::getReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Gets information about the cursor's creation and iteration
		 * <p>This can be called before or after the cursor has started iterating.</p>
		 * @return array <p>Returns the namespace, batch size, limit, skip, flags, query, and projected fields for this cursor. If the cursor has started iterating, additional information about iteration and the connection will be included.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.info.php
		 * @since PECL mongo >=1.5.0
		 */
		public function info(): array {}

		/**
		 * Returns the current result's index within the result set
		 * @return int <p>The current result's index within the result set.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.key.php
		 * @since PECL mongo >=1.5.0
		 */
		public function key(): int {}

		/**
		 * Advances the cursor to the next result
		 * @return void <p><b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.next.php
		 * @since PECL mongo >=1.5.0
		 */
		public function next(): void {}

		/**
		 * Executes the command and resets the cursor to the start of the result set
		 * <p>If the cursor has already started iteration, the command will be re-executed.</p>
		 * @return array <p>The raw server result document.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.rewind.php
		 * @since PECL mongo >=1.5.0
		 */
		public function rewind(): array {}

		/**
		 * Set the read preference for this command
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return MongoCommandCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.setreadpreference.php
		 * @see MongoCommandCursor::getReadPreference(), MongoCursorInterface::setReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): \MongoCommandCursor {}

		/**
		 * Sets a client-side timeout for this command
		 * <p>A timeout can be set at any time and will affect subsequent data retrieval associated with this cursor, including fetching more results from the database.</p>
		 * @param int $ms <p>The number of milliseconds for the cursor to wait for a response. Use <i>-1</i> to wait forever. By default, the cursor will wait 30000 milliseconds (30 seconds).</p>
		 * @return MongoCommandCursor <p>This cursor.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.timeout.php
		 * @see MongoCollection::aggregateCursor(), MongoClient::__construct()
		 * @since PECL mongo >=1.6.0
		 */
		public function timeout(int $ms): \MongoCommandCursor {}

		/**
		 * Checks if the cursor is reading a valid result
		 * @return bool <p><b><code>TRUE</code></b> if the current result is not null, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocommandcursor.valid.php
		 * @since PECL mongo >=1.5.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to connect to the database.</p>
	 * <p>There are a number of possible error messages to help you diagnose the connection problem. These are:</p>
	 * <p><i>No candidate servers found</i></p>
	 * <p>Thrown when the driver cannot establish a connection to MongoDB (fulfilling the ReadPreferences, if specified).</p>
	 * <p><i>No server name given.</i></p>
	 * <p>This error occurs if you pass in "" as the server name, probably because of an typo with string interpolation, e.g., "$servr" instead of "$server".</p>
	 * <p><i> failed to get host [hostname] or port [portnum] from [server]. </i></p>
	 * <p>This indicated that the server string was malformed. "[hostname]" and "[portnum]" will be as much as the driver could dicipher of it.</p>
	 * <p><i>Operation in progress</i></p>
	 * <p>Connecting to the database timed out.</p>
	 * <p><i>Transport endpoint is not connected</i></p>
	 * <p>Generally means that the connection string isn't correct, the driver couldn't even find the database server.</p>
	 * <p><i>couldn't determine master</i></p>
	 * <p>No server in a replica set connection was identified as the primary.</p>
	 * <p><i>couldn't get host info for [server]</i></p>
	 * <p>This indicated that DNS could not resolve the server address you gave. This could easily be caused by a typo, for example, "server" instead of "$server".</p>
	 * <p><i>Invalid Argument</i></p>
	 * <p>This can be caused by attempting to connect to a machine that is up but that the database isn't actually running on. Make sure that you've started the database server before connecting.</p>
	 * <p><i>Permission denied</i></p>
	 * <p>This means that the socket could not be opened due to permissions issues. On Red Hat variants, this can be caused by a default setting that does not allow Apache to create network connections. You can override this setting by running:</p>
	 * <p>If the error message is not listed above, it is probably an error from the C socket, and you can search the web for its usual cause.</p>
	 * @link http://php.net/manual/en/class.mongoconnectionexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoConnectionException extends \MongoException {
	}

	/**
	 * <p>A cursor is used to iterate through the results of a database query. For example, to query the database and see all results, you could do:</p>
	 * <p><b>Example #1 <b>MongoCursor</b> basic usage</b></p>
	 * <p>You don't generally create cursors using the <b>MongoCursor</b> constructor, you get a new cursor by calling <code>MongoCollection::find()</code> (as shown above).</p>
	 * <p>Suppose that, in the example above, <i>$collection</i> was a 50GB collection. We certainly wouldn't want to load that into memory all at once, which is what a cursor is for: allowing the client to access the collection in dribs and drabs.</p>
	 * <p>If we have a large result set, we can iterate through it, loading a few megabytes of results into memory at a time. For example, we could do:</p>
	 * <p><b>Example #2 Iterating over <b>MongoCursor</b></b></p>
	 * <p>Note that this means that a cursor does not "contain" the database results, it just manages them. Thus, if you print a cursor (with, say, <code>var_dump()</code> or <code>print_r()</code>), you'll just get the cursor object, not your documents. To get the documents themselves, you can use one of the methods shown above.</p>
	 * @link http://php.net/manual/en/class.mongocursor.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoCursor implements \MongoCursorInterface, \Iterator {

		/**
		 * @var boolean <p>If the query should have the "slaveOkay" flag set, which allows reads on the secondary (secondaries are, by default, just for backup and not queried). Can be overridden with <code>MongoCursor::slaveOkay()</code>.</p> <p>This functionality is <i>deprecated</i>. Please use Read Preferences instead.</p>
		 * @link http://php.net/manual/en/class.mongocursor.php#mongocursor.props.slaveokay
		 */
		static $slaveOkay = FALSE;

		/**
		 * @var integer <p>Set timeout in milliseconds for all database responses. Use <i>-1</i> to wait forever. Can be overridden with <code>MongoCursor::timeout()</code>. This does not cause the MongoDB server to cancel the operation; it only instructs the driver to stop waiting for a response and throw a MongoCursorTimeoutException after a set time.</p>
		 * @link http://php.net/manual/en/class.mongocursor.php#mongocursor.props.timeout
		 */
		static $timeout = 30000;

		/**
		 * Create a new cursor
		 * @param \MongoClient $connection <p>Database connection.</p>
		 * @param string $ns <p>Full name of database and collection.</p>
		 * @param array $query <p>Database query.</p>
		 * @param array $fields <p>Fields to return.</p>
		 * @return self <p>Returns the new cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoClient $connection, string $ns, array $query = array(), array $fields = array()) {}

		/**
		 * Adds a top-level key/value pair to a query
		 * <p>This is an advanced function and should not be used unless you know what you're doing.</p><p>A query can optionally be nested in a "query" field if other options, such as a sort or hint, are given. For instance, adding a sort causes the query to become a subfield of a bigger query object, like:</p><p>This method is for adding a top-level field to a query. It makes the query a subobject (if it isn't already) and adds the key/value pair of your chosing to the top level.</p><p>It cannot be used to add extra criteria to a query on the fly. For instance, this <i>will not</i> work:</p>
		 * @param string $key <p>Fieldname to add.</p>
		 * @param mixed $value <p>Value to add.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.addoption.php
		 * @since PECL mongo >=1.0.4
		 */
		public function addOption(string $key, $value): \MongoCursor {}

		/**
		 * Sets whether this cursor will wait for a while for a tailable cursor to return more data
		 * <p>This method is to be used with tailable cursors. If we are at the end of the data, block for a while rather than returning no data. After a timeout period, we do return as normal.</p>
		 * @param bool $wait <p>If the cursor should wait for more data to become available.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.awaitdata.php
		 * @see MongoCursor::tailable()
		 * @since PECL mongo >=1.2.11
		 */
		public function awaitData(bool $wait = TRUE): \MongoCursor {}

		/**
		 * Limits the number of elements returned in one batch
		 * <p>A cursor typically fetches a batch of result objects and store them locally. This method sets the batchSize value to configure the amount of documents retrieved from the server in one round trip. However, it will never return more documents than fit in the max batch size limit (usually 4MB).</p>
		 * @param int $batchSize <p>The number of results to return per batch. Each batch requires a round-trip to the server.</p> <p>If <code>batchSize</code> is <i>2 or more</i>, it represents the size of each batch of objects retrieved. It can be adjusted to optimize performance and limit data transfer.</p> <p>If <code>batchSize</code> is <i>1</i> or negative, it will limit of number returned documents to the absolute value of batchSize, and the cursor will be closed. For example if batchSize is <i>-10</i>, then the server will return a maximum of 10 documents and as many as can fit in 4MB, then close the cursor.</p> <p><b>Warning</b></p> <p>A <code>batchSize</code> of <i>1</i> is special, and means the same as <i>-1</i>, i.e. a value of <i>1</i> makes the cursor only capable of returning <i>one</i> document.</p>  <p>Note that this feature is different from <code>MongoCursor::limit()</code> in that documents must fit within a maximum size, and it removes the need to send a request to close the cursor server-side. The batch size can be changed even after a cursor is iterated, in which case the setting will apply on the next batch retrieval.</p> <p>This cannot override MongoDB's limit on the amount of data it will return to the client (i.e., if you set batch size to 1,000,000,000, MongoDB will still only return 4-16MB of results per batch).</p> <p>To ensure consistent behavior, the rules of <b>MongoCursor::batchSize()</b> and <code>MongoCursor::limit()</code> behave a little complex but work "as expected". The rules are: hard limits override soft limits with preference given to <code>MongoCursor::limit()</code> over <b>MongoCursor::batchSize()</b>. After that, whichever is set and lower than the other will take precedence. See below. section for some examples.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.batchsize.php
		 * @see MongoCursor::limit()
		 * @since PECL mongo >=1.0.11
		 */
		public function batchSize(int $batchSize): \MongoCursor {}

		/**
		 * Counts the number of results for this query
		 * <p>This method does not affect the state of the cursor: if you haven't queried yet, you can still apply limits, skips, etc. If you have started iterating through results, it will not move the current position of the cursor. If you have exhausted the cursor, it will not reset it.</p>
		 * @param bool $foundOnly <p>Send cursor limit and skip information to the count function, if applicable.</p>
		 * @return int <p>The number of documents returned by this cursor's query.</p>
		 * @link http://php.net/manual/en/mongocursor.count.php
		 * @since PECL mongo >=0.9.2
		 */
		public function count(bool $foundOnly = FALSE): int {}

		/**
		 * Returns the current element
		 * <p>This returns <b><code>NULL</code></b> until <code>MongoCursor::next()</code> is called.</p>
		 * @return array <p>The current result document as an associative array. <b><code>NULL</code></b> will be returned if there is no result.</p>
		 * @link http://php.net/manual/en/mongocursor.current.php
		 * @since PECL mongo >=0.9.0
		 */
		public function current(): array {}

		/**
		 * Checks if there are results that have not yet been sent from the database
		 * <p>The database sends responses in batches of documents, up to 4MB of documents per response. This method checks if the database has more batches or if the result set has been exhausted.</p><p>A cursor being "dead" does not mean that <code>MongoCursor::hasNext()</code> will return <b><code>FALSE</code></b>, it only means that the database is done sending results to the client. The client should continue iterating through results until <code>MongoCursor::hasNext()</code> is <b><code>FALSE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more results that have not yet been sent to the client, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocursor.dead.php
		 * @since PECL mongo >=0.9.6
		 */
		public function dead(): bool {}

		/**
		 * Execute the query
		 * <p>Please do not use me.</p><p>This function actually queries the database. All queries and commands go through this function. Thus, this function can be overridden to provide custom query handling.</p><p>This handles serializing your query, sending it to the database, receiving a response, and deserializing it. Thus, if you are planning to override this, your code should probably call out to the original to use the existing functionality (see the example below).</p>
		 * @return void <p><b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongocursor.doquery.php
		 * @since PECL mongo >=0.9.0 <1.6.0
		 */
		protected function doQuery(): void {}

		/**
		 * Return an explanation of the query, often useful for optimization and debugging
		 * @return array <p>Returns an explanation of the query.</p>
		 * @link http://php.net/manual/en/mongocursor.explain.php
		 * @since PECL mongo >=0.9.2
		 */
		public function explain(): array {}

		/**
		 * Sets the fields for a query
		 * <p>Fields are specified by <i>"fieldname" : bool</i>. <b><code>TRUE</code></b> indicates that a field should be returned, <b><code>FALSE</code></b> indicates that it should not be returned. You can also use 1 and 0 instead of <b><code>TRUE</code></b> and <b><code>FALSE</code></b>.</p><p>Thus, to return only the "summary" field, one could say:</p><p>To return all fields except the "hidden" field:</p>
		 * @param array $f <p>Fields to return (or not return).</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.fields.php
		 * @since PECL mongo >=1.0.6
		 */
		public function fields(array $f): \MongoCursor {}

		/**
		 * Advances the cursor to the next result, and returns that result
		 * <p><b>Note</b>:</p><p><b>MongoCursor::getNext()</b> is an alias of <code>MongoCursor::next()</code>.</p>
		 * @return array
		 * @link http://php.net/manual/en/mongocursor.getnext.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getNext(): array {}

		/**
		 * Get the read preference for this query
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongocursor.getreadpreference.php
		 * @see MongoCursor::setReadPreference(), MongoCursorInterface::getReadPreference()
		 * @since PECL mongo >=1.3.3
		 */
		public function getReadPreference(): array {}

		/**
		 * Checks if there are any more elements in this cursor
		 * @return bool <p>Returns if there is another element.</p>
		 * @link http://php.net/manual/en/mongocursor.hasnext.php
		 * @since PECL mongo >=0.9.0
		 */
		public function hasNext(): bool {}

		/**
		 * Gives the database a hint about the query
		 * @param mixed $index <p>Index to use for the query. If a string is passed, it should correspond to an index name. If an array or object is passed, it should correspond to the specification used to create the index (i.e. the first argument to <code>MongoCollection::ensureIndex()</code>).</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.hint.php
		 * @since PECL mongo >=0.9.0
		 */
		public function hint($index): \MongoCursor {}

		/**
		 * Sets whether this cursor will timeout
		 * <p>After remaining idle on the server for some amount of time, cursors, by default, "die." This is generally the behavior one wants. The database cleans up a cursor once all of its results have been sent to the client, but if the client doesn't request all of the results, the cursor will languish there, taking up resources. Thus, after a few minutes, the cursor "times out" and the database assumes the client has gotten everything it needs and cleans up its the cursor's resources.</p><p>If, for some reason, you need a cursor to hang around for a long time, you can prevent the database from cleaning it up by using this method. However, if you make a cursor immortal, you need to iterate through all of its results (or at least until <code>MongoCursor::dead()</code> returns <b><code>TRUE</code></b>) or the cursor will hang around the database <i>forever</i>, taking up resources.</p>
		 * @param bool $liveForever <p>If the cursor should be immortal.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.immortal.php
		 * @since PECL mongo >=1.0.1
		 */
		public function immortal(bool $liveForever = TRUE): \MongoCursor {}

		/**
		 * Gets information about the cursor's creation and iteration
		 * <p>This can be called before or after the cursor has started iterating.</p>
		 * @return array <p>Returns the namespace, batch size, limit, skip, flags, query, and projected fields for this cursor. If the cursor has started iterating, additional information about iteration and the connection will be included.</p>
		 * @link http://php.net/manual/en/mongocursor.info.php
		 * @since PECL mongo >=1.0.5
		 */
		public function info(): array {}

		/**
		 * Returns the current result's _id, or its index within the result set
		 * @return string|int <p>The current result's <i>_id</i> as a string. If the result has no <i>_id</i>, its numeric index within the result set will be returned as an integer.</p>
		 * @link http://php.net/manual/en/mongocursor.key.php
		 * @since PECL mongo >=0.9.0
		 */
		public function key() {}

		/**
		 * Limits the number of results returned
		 * @param int $num <p>The number of results to return.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.limit.php
		 * @see MongoCursor::batchSize()
		 * @since PECL mongo >=0.9.0
		 */
		public function limit(int $num): \MongoCursor {}

		/**
		 * Sets a server-side timeout for this query
		 * <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @param int $ms <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @return MongoCursor <p>This cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.maxtimems.php
		 * @since PECL mongo >=1.5.0
		 */
		public function maxTimeMS(int $ms): \MongoCursor {}

		/**
		 * Advances the cursor to the next result, and returns that result
		 * @return array <p>Returns the next document.</p>
		 * @link http://php.net/manual/en/mongocursor.next.php
		 * @since PECL mongo >=0.9.0
		 */
		public function next(): array {}

		/**
		 * If this query should fetch partial results from mongos if a shard is down
		 * <p>This option allows <i>mongos</i> to send partial query results if a shard is unreachable. This is only applicable when running a sharded MongoDB cluster and connecting to a <i>mongos</i>.</p><p>If a shard goes down and a query needs to be sent to that shard, <i>mongos</i> will return the results (if any) from shards it already contacted, then an error message that it could not reach the shard (a MongoCursorException in PHP). If you would like to get whatever results <i>mongos</i> can provide and no exception, you can use this method. Note that this means that you won't have an indication that a shard is down in your query response.</p><p>This has no effect on the query if all shards are reachable. This flag was implemented in MongoDB version 1.7.5, so will only work with that version and higher.</p>
		 * @param bool $okay <p>If receiving partial results is okay.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.partial.php
		 * @since PECL mongo >=1.2.0
		 */
		public function partial(bool $okay = TRUE): \MongoCursor {}

		/**
		 * Clears the cursor
		 * @return void <p><b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongocursor.reset.php
		 * @since PECL mongo >=0.9.0
		 */
		public function reset(): void {}

		/**
		 * Returns the cursor to the beginning of the result set
		 * <p>This is identical to the function:</p>
		 * @return void <p><b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongocursor.rewind.php
		 * @since PECL mongo >=0.9.0
		 */
		public function rewind(): void {}

		/**
		 * Sets arbitrary flags in case there is no method available the specific flag
		 * <p>The MongoCursor class has several methods for setting flags on the query object. This method is available in case the MongoDB wire protocol has acquired a new flag, and the driver has not been updated with a method for this new flag. In all other cases, the method should be used. See the "See also" section for available methods.</p>
		 * @param int $flag <p>Which flag to set. You can not set flag 6 (EXHAUST) as the driver does not know how to handle them. You will get a warning if you try to use this flag. For available flags, please refer to the wire protocol documentation.</p>
		 * @param bool $set <p>Whether the flag should be set (<b><code>TRUE</code></b>) or unset (<b><code>FALSE</code></b>).</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.setflag.php
		 * @see MongoCursor::tailable(), MongoCursor::immortal(), MongoCursor::awaitData(), MongoCursor::partial()
		 * @since PECL mongo >=1.2.11
		 */
		public function setFlag(int $flag, bool $set = TRUE): \MongoCursor {}

		/**
		 * Set the read preference for this query
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.setreadpreference.php
		 * @see MongoCursor::getReadPreference(), MongoCursorInterface::setReadPreference()
		 * @since PECL mongo >=1.3.3
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): \MongoCursor {}

		/**
		 * Skips a number of results
		 * @param int $num <p>The number of results to skip.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.skip.php
		 * @since PECL mongo >=0.9.0
		 */
		public function skip(int $num): \MongoCursor {}

		/**
		 * Sets whether this query can be done on a secondary [deprecated]
		 * <p>This method is deprecated since version 1.5.0. Instead, please use <code>MongoCursor::setReadPreference()</code> and Read Preferences.</p><p>Calling this will make the driver route reads to secondaries if:</p><p>Note that you should use this function even if you do not use the automatic routing to secondaries. If you connect directly to a secondary in a replica set, you still need to call this function, which basically tells the database that you are aware that you might be getting older data and you're okay with that. If you do not call this, you'll get "not master" errors when you try to query.</p><p>This method will override the static class variable MongoCursor::$slaveOkay. It will also override <code>Mongo::setSlaveOkay()</code>, <code>MongoDB::setSlaveOkay()</code> and <code>MongoCollection::setSlaveOkay()</code>.</p>
		 * @param bool $okay <p>If it is okay to query the secondary.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.slaveokay.php
		 * @since PECL mongo >=0.9.4
		 */
		public function slaveOkay(bool $okay = TRUE): \MongoCursor {}

		/**
		 * Use snapshot mode for the query
		 * <p>Use snapshot mode for the query. Snapshot mode ensures that a document will not be returned more than once because an intervening write operation results in a move of the document. Documents inserted or deleted during the lifetime of the cursor may or may not be returned, irrespective of snapshot mode.</p><p>Queries with short responses (less than 1MB) are always effectively snapshotted.</p><p>Snapshot mode may not be used with sorting, explicit hints, or queries on sharded collections.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.snapshot.php
		 * @since PECL mongo >=0.9.4
		 */
		public function snapshot(): \MongoCursor {}

		/**
		 * Sorts the results by given fields
		 * @param array $fields <p>An array of fields by which to sort. Each element in the array has as key the field name, and as value either <i>1</i> for ascending sort, or <i>-1</i> for descending sort.</p> <p>Each result is first sorted on the first field in the array, then (if it exists) on the second field in the array, etc. This means that the order of the fields in the <code>fields</code> array is important. See also the examples section.</p>
		 * @return MongoCursor <p>Returns the same cursor that this method was called on.</p>
		 * @link http://php.net/manual/en/mongocursor.sort.php
		 * @since PECL mongo >=0.9.0
		 */
		public function sort(array $fields): \MongoCursor {}

		/**
		 * Sets whether this cursor will be left open after fetching the last results
		 * <p>Mongo has a feature known as tailable cursors which are similar to the Unix "tail -f" command.</p><p>Tailable means cursor is not closed when the last data is retrieved. Rather, the cursor marks the final object's position. you can resume using the cursor later, from where it was located, if more data were received.</p><p>Like any "latent cursor", the cursor may become invalid at some point -- for example if that final object it references were deleted. Thus, you should be prepared to requery if the cursor is <code>MongoCursor::dead()</code>.</p>
		 * @param bool $tail <p>If the cursor should be tailable.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.tailable.php
		 * @see MongoCursor::awaitData()
		 * @since PECL mongo >=0.9.4
		 */
		public function tailable(bool $tail = TRUE): \MongoCursor {}

		/**
		 * Sets a client-side timeout for this query
		 * <p>A timeout can be set at any time and will affect subsequent queries on the cursor, including fetching more results from the database.</p>
		 * @param int $ms <p>The number of milliseconds for the cursor to wait for a response. Use <i>-1</i> to wait forever. By default, the cursor will wait 30000 milliseconds (30 seconds).</p>
		 * @return MongoCursor <p>This cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.timeout.php
		 * @see MongoClient::__construct()
		 * @since PECL mongo >=1.0.3
		 */
		public function timeout(int $ms): \MongoCursor {}

		/**
		 * Checks if the cursor is reading a valid result
		 * @return bool <p><b><code>TRUE</code></b> if the current result is not null, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocursor.valid.php
		 * @since PECL mongo >=0.9.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Caused by accessing a cursor incorrectly or a error receiving a reply. Note that this can be thrown by any database request that receives a reply, not just queries. Writes, commands, and any other operation that sends information to the database and waits for a response can throw a <b>MongoCursorException</b>. The only exception is <i>new MongoClient()</i> (creating a new connection), which will only throw MongoConnectionExceptions.</p>
	 * <p>This returns a specific error message to help diagnose the problem and a numeric error code associated with the cause of the exception.</p>
	 * <p>For example, suppose you tried to insert two documents with the same _id:</p>
	 * <p>The following is a list of common errors, codes, and causes. Exact errors are in italics, errors where the message can vary are described in obliques.</p>
	 * <p><i>cannot modify cursor after beginning iteration</i></p>
	 * <p>Code: 0</p>
	 * <p>You are calling a method that sets up the query after executing the query. Reset the cursor and try again.</p>
	 * <p>An example:</p>
	 * <p>Get next batch send errors</p>
	 * <p>Code: 1</p>
	 * <p>Could not send the query to the database. Make sure the database is still up and the network is okay.</p>
	 * <p><i>cursor not found</i></p>
	 * <p>Code: 2</p>
	 * <p>The driver was trying to fetch more results from the database, but the database did not have a record of the query. This usually means that the cursor timed out on the server side: after a few minutes of inactivity, the database will kill a cursor (see <code>MongoCursor::immortal()</code> for information on preventing this).</p>
	 * <p>An example:</p>
	 * <p><i>cursor-&gt;buf.pos is null</i></p>
	 * <p>Code: 3</p>
	 * <p>This may indicate you are out of RAM or some other extraordinary circumstance.</p>
	 * <p><i>couldn't get response header</i></p>
	 * <p>Code: 4</p>
	 * <p>A common error if the database or network goes down. This means that the driver couldn't get a response from the connection.</p>
	 * <p><i>no db response</i></p>
	 * <p>Code: 5</p>
	 * <p>This may not even be an error, for example, the database command "shutdown" returns no response. However, if you were expecting a response, this means the database didn't give one.</p>
	 * <p><i>bad response length: %d, did the db assert&#63;</i></p>
	 * <p>Code: 6</p>
	 * <p>This means that the database said that its response was less than 0. This error probably indicates a network error or database corruption.</p>
	 * <p><i>incomplete header</i></p>
	 * <p>Code: 7</p>
	 * <p>Highly unusual. Occurs if the database response started out correctly, but broke off in the middle. Probably indicates a network problem.</p>
	 * <p><i>incomplete response</i></p>
	 * <p>Code: 8</p>
	 * <p>Highly unusual. Occurs if the database response started out correctly, but broke off in the middle. Probably indicates a network problem.</p>
	 * <p><i>couldn't find a response</i></p>
	 * <p>Code: 9</p>
	 * <p>If the response was cached and now cannot be located.</p>
	 * <p><i>error getting socket</i></p>
	 * <p>Code: 10</p>
	 * <p>The socket was closed or encountered an error. The driver should automatically reconnect (if possible) on the next operation.</p>
	 * <p><i>couldn't find reply, please try again</i></p>
	 * <p>Code: 11</p>
	 * <p>The driver saves any database responses it cannot immediately match with a request. This exception occurs if the driver has already passed your request's response and cannot find your response in its cache.</p>
	 * <p><i>error getting database response: errstr</i></p>
	 * <p><i>WSA error getting database response: errstr</i></p>
	 * <p>"errstr" is an io error reported directly from the C socket subsystem. On Windows, the error message is prefixed with "WSA".</p>
	 * <p><i>Timeout error</i></p>
	 * <p>Code: 13</p>
	 * <p>If there was an error while waiting for a query to complete.</p>
	 * <p><i>couldn't send query: &lt;various&gt;</i></p>
	 * <p>Code: 14</p>
	 * <p>C socket error on send.</p>
	 * <p><i>max number of retries exhausted, couldn't send query</i></p>
	 * <p>Code: 19</p>
	 * <p>The driver will automatically retry "plain" queries (not commands) a couple of times if the first attempt failed for certain reasons. This is to cause fewer exceptions during replica set failover (although you will probably still have to deal with some) and gloss over transient network issues.</p>
	 * <p>This can also be caused by the driver not being able to reconnect at all to the database (if, for example, the database is unreachable).</p>
	 * <p>Version 1.2.2+.</p>
	 * @link http://php.net/manual/en/class.mongocursorexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoCursorException extends \MongoException {
	}

	/**
	 * <p>Interface for cursors, which can be used to iterate through results of a database query or command. This interface is implemented by the MongoCursor and MongoCommandCursor classes.</p>
	 * <p><b>Note</b>:  Similar to Traversable, this interface cannot be implemented in PHP scripts. </p>
	 * @link http://php.net/manual/en/class.mongocursorinterface.php
	 * @since PECL mongo >=1.5.0
	 */
	interface MongoCursorInterface extends Iterator {

		/**
		 * Limits the number of elements returned in one batch
		 * <p>A cursor typically fetches a batch of result objects and stores them locally. This method sets the batch size value to configure the amount of documents retrieved from the server in one round trip.</p>
		 * @param int $batchSize <p>The number of results to return per batch.</p>
		 * @return MongoCursorInterface <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursorinterface.batchsize.php
		 * @since PECL mongo >=1.5.0
		 */
		public function batchSize(int $batchSize): \MongoCursorInterface;

		/**
		 * Return the current element
		 * <p>Returns the current element.</p>
		 * @return mixed <p>Can return any type.</p>
		 * @link http://php.net/manual/en/iterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current();

		/**
		 * Checks if there are results that have not yet been sent from the database
		 * <p>This method checks whether the cursor has been exhausted and the database has no more results to send to the client. A cursor being "dead" does not necessarily mean that there are no more results available for iteration.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more results that have not yet been sent to the client, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocursorinterface.dead.php
		 * @since PECL mongo >=1.5.0
		 */
		public function dead(): bool;

		/**
		 * Get the read preference for this query
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongocursorinterface.getreadpreference.php
		 * @see MongoCursorInterface::setReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		public function getReadPreference(): array;

		/**
		 * Gets information about the cursor's creation and iteration
		 * <p>Returns information about the cursor's creation and iteration. This can be called before or after the cursor has started iterating.</p>
		 * @return array <p>Returns the namespace, batch size, limit, skip, flags, query, and projected fields for this cursor. If the cursor has started iterating, additional information about iteration and the connection will be included.</p>
		 * @link http://php.net/manual/en/mongocursorinterface.info.php
		 * @since PECL mongo >=1.5.0
		 */
		public function info(): array;

		/**
		 * Return the key of the current element
		 * <p>Returns the key of the current element.</p>
		 * @return scalar <p>Returns scalar on success, or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/iterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key(): \scalar;

		/**
		 * Move forward to next element
		 * <p>Moves the current position to the next element.</p><p><b>Note</b>:</p><p>This method is called <i>after</i> each foreach loop.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link http://php.net/manual/en/iterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void;

		/**
		 * Rewind the Iterator to the first element
		 * <p>Rewinds back to the first element of the Iterator.</p><p><b>Note</b>:</p><p>This is the <i>first</i> method called when starting a foreach loop. It will <i>not</i> be executed <i>after</i> foreach loops.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link http://php.net/manual/en/iterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void;

		/**
		 * Set the read preference for this query
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return MongoCursorInterface <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursorinterface.setreadpreference.php
		 * @see MongoCursorInterface::getReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): \MongoCursorInterface;

		/**
		 * Sets a client-side timeout for this query
		 * <p>A timeout can be set at any time and will affect subsequent data retrieval associated with this cursor, including fetching more results from the database.</p>
		 * @param int $ms <p>The number of milliseconds for the cursor to wait for a response. Use <i>-1</i> to wait forever. By default, the cursor will wait 30000 milliseconds (30 seconds).</p>
		 * @return MongoCursorInterface <p>Returns this cursor.</p>
		 * @link http://php.net/manual/en/mongocursorinterface.timeout.php
		 * @see MongoClient::__construct()
		 * @since PECL mongo >=1.5.0
		 */
		public function timeout(int $ms): \MongoCursorInterface;

		/**
		 * Checks if current position is valid
		 * <p>This method is called after <code>Iterator::rewind()</code> and <code>Iterator::next()</code> to check if the current position is valid.</p>
		 * @return bool <p>The return value will be casted to <code>boolean</code> and then evaluated. Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/iterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool;
	}

	/**
	 * <p>Caused by a query timing out. You can set the length of time to wait before this exception is thrown by calling <code>MongoCursor::timeout()</code> on the cursor or setting <i>MongoCursor::$timeout</i>. The static variable is useful for queries such as database commands and <code>MongoCollection::findOne()</code>, both of which implicitly use cursors.</p>
	 * @link http://php.net/manual/en/class.mongocursortimeoutexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoCursorTimeoutException extends \MongoCursorException {
	}

	/**
	 * <p>Represent date objects for the database. This class should be used to save dates to the database and to query for dates. For example:</p>
	 * <p><b>Example #1 Storing dates with <b>MongoDate</b></b></p>
	 * <p>MongoDB stores dates as milliseconds past the epoch. This means that dates <i>do not</i> contain timezone information. Timezones must be stored in a separate field if needed. Second, this means that any precision beyond milliseconds will be lost when the document is sent to/from the database.</p>
	 * @link http://php.net/manual/en/class.mongodate.php
	 * @since PECL mongo >=0.8.1
	 */
	class MongoDate {

		public $sec;

		public $usec;

		/**
		 * Creates a new date
		 * <p>Creates a new date. If no parameters are given, the current time is used.</p>
		 * @param int $sec <p>Number of seconds since the epoch (i.e. 1 Jan 1970 00:00:00.000 UTC).</p>
		 * @param int $usec <p>Microseconds. Please be aware though that MongoDB's resolution is <i>milliseconds</i> and not microseconds, which means this value will be truncated to millisecond resolution.</p>
		 * @return self <p>Returns this new date.</p>
		 * @link http://php.net/manual/en/mongodate.construct.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __construct(int $sec  = 'time()', int $usec = 0) {}

		/**
		 * Returns a string representation of this date
		 * <p>Returns a string representation of this date, similar to the representation returned by <code>microtime()</code>.</p>
		 * @return string <p>This date.</p>
		 * @link http://php.net/manual/en/mongodate.tostring.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __toString(): string {}

		/**
		 * Returns a DateTime object representing this date
		 * <p>Returns a DateTime object representation of this date.</p>
		 * @return DateTime <p>This date as a DateTime object.</p>
		 * @link http://php.net/manual/en/mongodate.todatetime.php
		 * @since PECL mongo >= 1.6.0
		 */
		public function toDateTime(): \DateTime {}
	}

	/**
	 * <p>Instances of this class are used to interact with a database. To get a database:</p>
	 * <p><b>Example #1 Selecting a database</b></p>
	 * <p>A few unusual, but valid, database names: "null", "[x,y]", "3", "\"", "/".</p>
	 * <p>Unlike collection names, database names may contain "$".</p>
	 * @link http://php.net/manual/en/class.mongodb.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoDB {

		/**
		 * @var int Profiling is off.
		 * @link http://php.net/manual/en/class.mongodb.php
		 */
		const PROFILING_OFF = 0;

		/**
		 * @var int Profiling is on for slow operations (&gt;100 ms).
		 * @link http://php.net/manual/en/class.mongodb.php
		 */
		const PROFILING_SLOW = 1;

		/**
		 * @var int Profiling is on for all operations.
		 * @link http://php.net/manual/en/class.mongodb.php
		 */
		const PROFILING_ON = 2;

		/**
		 * @var integer
		 * @link http://php.net/manual/en/class.mongodb.php#mongodb.props.w
		 */
		public $w = 1;

		/**
		 * @var integer
		 * @link http://php.net/manual/en/class.mongodb.php#mongodb.props.wtimeout
		 */
		public $wtimeout = 10000;

		/**
		 * Creates a new database
		 * <p>This method is not meant to be called directly. The preferred way to create an instance of MongoDB is through <code>MongoClient::__get()</code> or <code>MongoClient::selectDB()</code>.</p><p>If you're ignoring the previous paragraph and want to call it directly you can do so:</p><p>But don't. Isn't this much nicer:</p>
		 * @param \MongoClient $conn
		 * @param string $name <p>Database name.</p>
		 * @return self <p>Returns the database.</p>
		 * @link http://php.net/manual/en/mongodb.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoClient $conn, string $name) {}

		/**
		 * Gets a collection
		 * <p>This is the easiest way of getting a collection from a database object. If a collection name contains strange characters, you may have to use <code>MongoDB::selectCollection()</code> instead.</p>
		 * @param string $name <p>The name of the collection.</p>
		 * @return MongoCollection <p>Returns the collection.</p>
		 * @link http://php.net/manual/en/mongodb.get.php
		 * @since PECL mongo >=1.0.2
		 */
		public function __get(string $name): \MongoCollection {}

		/**
		 * The name of this database
		 * @return string <p>Returns this database's name.</p>
		 * @link http://php.net/manual/en/mongodb.--tostring.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __toString(): string {}

		/**
		 * Log in to this database
		 * <p>This method causes its connection to be authenticated. If authentication is enabled for the database server (it's not, by default), you need to log in before the database will allow you to do anything.</p><p>In general, you should use the authenticate built into <code>MongoClient::__construct()</code> in preference to this method. If you authenticate on connection and the connection drops and reconnects during your session, you'll be reauthenticated. If you manually authenticated using this method and the connection drops, you'll have to call this method again once you're reconnected.</p><p>This method is identical to running:</p><p>Once a connection has been authenticated, it can only be un-authenticated by using the "logout" database command:</p>
		 * @param string $username <p>The username.</p>
		 * @param string $password <p>The password (in plaintext).</p>
		 * @return array <p>Returns database response. If the login was successful, it will return</p> <code> &lt;&#63;php<br>array("ok"&nbsp;=&gt;&nbsp;1);<br>&#63;&gt;  </code>  If something went wrong, it will return  <code> &lt;&#63;php<br>array("ok"&nbsp;=&gt;&nbsp;0,&nbsp;"errmsg"&nbsp;=&gt;&nbsp;"auth&nbsp;fails");<br>&#63;&gt;  </code>  ("auth fails" could be another message, depending on database version and what when wrong).
		 * @link http://php.net/manual/en/mongodb.authenticate.php
		 * @since PECL mongo >=1.0.1
		 */
		public function authenticate(string $username, string $password): array {}

		/**
		 * Execute a database command
		 * <p>Almost everything that is not a CRUD operation can be done with a database command. Need to know the database version&#63; There's a command for that. Need to do aggregation&#63; There's a command for that. Need to turn up logging&#63; You get the idea.</p><p>This method is identical to:</p>
		 * @param array $command <p>The query to send.</p>
		 * @param array $options <p>An array of options for the index creation. Currently available options include:</p><ul> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> </ul>
		 * @param string $hash <p>Set to the connection hash of the server that executed the command. When the command result is suitable for creating a MongoCommandCursor, the hash is intended to be passed to <code>MongoCommandCursor::createFromDocument()</code>.</p> <p>The hash will also correspond to a connection returned from <code>MongoClient::getConnections()</code>.</p>
		 * @return array <p>Returns database response. Every database response is always maximum one document, which means that the result of a database command can never exceed 16MB. The resulting document's structure depends on the command, but most results will have the <i>ok</i> field to indicate success or failure and <i>results</i> containing an array of each of the resulting documents.</p>
		 * @link http://php.net/manual/en/mongodb.command.php
		 * @since PECL mongo >=0.9.2
		 */
		public function command(array $command, array $options = array(), string &$hash = NULL): array {}

		/**
		 * Creates a collection
		 * <p>This method is used to create capped collections and other collections requiring special options. It is identical to running:</p>
		 * @param string $name <p>The name of the collection.</p>
		 * @param array $options <p>An array containing options for the collections. Each option is its own element in the options array, with the option name listed below being the key of the element. The supported options depend on the MongoDB server version and storage engine, and the driver passes any option that you give it straight to the server. A few of the supported options are, but you can find a full list in the MongoDB core docs on createCollection:</p> <p></p>  <code>capped</code>   <p>If the collection should be a fixed size.</p>   <code>size</code>   <p>If the collection is fixed size, its size in bytes.</p>   <code>max</code>   <p>If the collection is fixed size, the maximum number of elements to store in the collection.</p>   <code>autoIndexId</code>   <p>If capped is <b><code>TRUE</code></b> you can specify <b><code>FALSE</code></b> to disable the automatic index created on the <i>_id</i> field. Before MongoDB 2.2, the default value for <i>autoIndexId</i> was <b><code>FALSE</code></b>.</p>
		 * @return MongoCollection <p>Returns a collection object representing the new collection.</p>
		 * @link http://php.net/manual/en/mongodb.createcollection.php
		 * @since PECL mongo >=0.9.0
		 */
		public function createCollection(string $name, array $options = NULL): \MongoCollection {}

		/**
		 * Creates a database reference
		 * <p>This method is a flexible interface for creating database refrences (see MongoDBRef).</p>
		 * @param string $collection <p>The collection to which the database reference will point.</p>
		 * @param mixed $document_or_id <p>If an array or object is given, its <i>_id</i> field will be used as the reference ID. If a MongoId or scalar is given, it will be used as the reference ID.</p>
		 * @return array <p>Returns a database reference array.</p><p>If an array without an <i>_id</i> field was provided as the <i>document_or_id</i> parameter, <b><code>NULL</code></b> will be returned.</p>
		 * @link http://php.net/manual/en/mongodb.createdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function createDBRef(string $collection, $document_or_id): array {}

		/**
		 * Drops this database
		 * <p>This drops the database currently being used.</p><p>This is identical to running:</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongodb.drop.php
		 * @since PECL mongo >=0.9.0
		 */
		public function drop(): array {}

		/**
		 * Drops a collection [deprecated]
		 * <p>Use <code>MongoCollection::drop()</code> instead.</p><p><i> This function leaks memory in version 1.0.7 and earlier! </i></p>
		 * @param mixed $coll <p>MongoCollection or name of collection to drop.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongodb.dropcollection.php
		 * @since PECL mongo >=0.9.0
		 */
		public function dropCollection($coll): array {}

		/**
		 * Runs JavaScript code on the database server [deprecated]
		 * <p>The eval command, which this method invokes, is deprecated in MongoDB 3.0+.</p><p>The Mongo database server runs a JavaScript engine. This method allows you to run arbitary JavaScript on the database. This can be useful if you want touch a number of collections lightly, or process some results on the database side to reduce the amount that has to be sent to the client.</p><p>Running JavaScript in the database takes a write lock, meaning it blocks other operations. Make sure you consider this before running a long script.</p><p>This is a wrapper for the eval database command. This method is basically:</p><p>MongoDB implies a return statement if you have a single statement on a single line. This can cause some unintuitive behavior. For example, this returns "foo":</p><p>However, these return <b><code>NULL</code></b>:</p><p>To avoid surprising behavior, it is best not to depend on MongoDB to decide what to return, but to explicitly state a return value. In the examples above, we can change them to:</p><p>Now the first statement will return "foo" and the second statement will return a count of the "foo" collection.</p>
		 * @param mixed $code <p>MongoCode or string to execute.</p>
		 * @param array $args <p>Arguments to be passed to <i>code</i>.</p>
		 * @return array <p>Returns the result of the evaluation.</p>
		 * @link http://php.net/manual/en/mongodb.execute.php
		 * @since PECL mongo >=0.9.3
		 */
		public function execute($code, array $args = array()): array {}

		/**
		 * Creates a database error
		 * <p>This method is not very useful for normal MongoDB use. It forces a database error to occur. This means that <code>MongoDB::lastError()</code> will return a generic database error after running this command.</p><p>This command is identical to running:</p>
		 * @return bool <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongodb.forceerror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function forceError(): bool {}

		/**
		 * Returns information about collections in this database
		 * <p>Gets a list of all collections in the database and returns them as an array of documents, which contain their names and options.</p><p><b>Note</b>: This method will use the listCollections database command when communicating with MongoDB 2.8+. For previous database versions, the method will query the special <i>system.namespaces</i> collection.</p>
		 * @param array $options <p>An array of options for listing the collections. Currently available options include:</p><ul> <li><p><i>"filter"</i></p><p>Optional query criteria. If provided, this criteria will be used to filter the collections included in the result.</p><p>Relevant fields that may be queried include <i>"name"</i> (collection name as a string, without the database name prefix) and <i>"options" (object containing options used to create the collection).</i>.</p><p><b>Note</b>: MongoDB 2.6 and earlier versions require the <i>"name"</i> criteria, if specified, to be a string value (i.e. equality match). This is because the driver must prefix the value with the database name in order to query the <i>system.namespaces</i> collection. Later versions of MongoDB do not have this limitation, as the driver will use the listCollections command.</p></li> <li><p><i>"includeSystemCollections"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Determines whether system collections should be included in the result.</p></li> </ul> <p>The following option may be used with MongoDB 2.8+:</p><ul> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return array <p>This function returns an array where each element is an array describing a collection. Elements will contain a <i>name</i> key denoting the name of the collection, and optionally contain an <i>options</i> key denoting an array of objects used to create the collection. For example, capped collections will include <i>capped</i> and <i>size</i> options.</p>
		 * @link http://php.net/manual/en/mongodb.getcollectioninfo.php
		 * @see MongoDB::getCollectionNames(), MongoDB::listCollections()
		 * @since PECL mongo >=1.6.0
		 */
		public function getCollectionInfo(array $options = array()): array {}

		/**
		 * Gets an array of names for all collections in this database
		 * <p>Gets a list of all collections in the database and returns their names as an array of strings.</p><p><b>Note</b>: This method will use the listCollections database command when communicating with MongoDB 2.8+. For previous database versions, the method will query the special <i>system.namespaces</i> collection.</p>
		 * @param array $options <p>An array of options for listing the collections. Currently available options include:</p><ul> <li><p><i>"filter"</i></p><p>Optional query criteria. If provided, this criteria will be used to filter the collections included in the result.</p><p>Relevant fields that may be queried include <i>"name"</i> (collection name as a string, without the database name prefix) and <i>"options" (object containing options used to create the collection).</i>.</p><p><b>Note</b>: MongoDB 2.6 and earlier versions require the <i>"name"</i> criteria, if specified, to be a string value (i.e. equality match). This is because the driver must prefix the value with the database name in order to query the <i>system.namespaces</i> collection. Later versions of MongoDB do not have this limitation, as the driver will use the listCollections command.</p></li> <li><p><i>"includeSystemCollections"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Determines whether system collections should be included in the result.</p></li> </ul> <p>The following option may be used with MongoDB 2.8+:</p><ul> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return array <p>Returns the collection names as an array of strings.</p>
		 * @link http://php.net/manual/en/mongodb.getcollectionnames.php
		 * @see MongoDB::listCollections(), MongoDB::getCollectionInfo()
		 * @since PECL mongo >=1.3.0
		 */
		public function getCollectionNames(array $options = array()): array {}

		/**
		 * Fetches the document pointed to by a database reference
		 * @param array $ref <p>A database reference.</p>
		 * @return array <p>Returns the document pointed to by the reference.</p>
		 * @link http://php.net/manual/en/mongodb.getdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getDBRef(array $ref): array {}

		/**
		 * Fetches toolkit for dealing with files stored in this database
		 * @param string $prefix <p>The prefix for the files and chunks collections.</p>
		 * @return MongoGridFS <p>Returns a new gridfs object for this database.</p>
		 * @link http://php.net/manual/en/mongodb.getgridfs.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getGridFS(string $prefix = "fs"): \MongoGridFS {}

		/**
		 * Gets this database's profiling level
		 * <p>This returns the current database profiling level.</p><p>The database profiler tracks query execution times. If you turn it on (say, using <code>MongoDB::setProfilingLevel()</code> or the shell), you can see how many queries took longer than a given number of milliseconds or the timing for all queries.</p><p>Note that profiling slows down queries, so it is better to use in development or testing than in a time-sensitive application.</p><p>This function is equivalent to running:</p>
		 * @return int <p>Returns the profiling level.</p>
		 * @link http://php.net/manual/en/mongodb.getprofilinglevel.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getProfilingLevel(): int {}

		/**
		 * Get the read preference for this database
		 * @return array <p>This function returns an array describing the read preference. The array contains the values <i>type</i> for the string read preference mode (corresponding to the MongoClient constants), and <i>tagsets</i> containing a list of all tag set criteria. If no tag sets were specified, <i>tagsets</i> will not be present in the array.</p>
		 * @link http://php.net/manual/en/mongodb.getreadpreference.php
		 * @see MongoDB::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Get slaveOkay setting for this database
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @return bool <p>Returns the value of slaveOkay for this instance.</p>
		 * @link http://php.net/manual/en/mongodb.getslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlaveOkay(): bool {}

		/**
		 * Get the write concern for this database
		 * @return array <p>This function returns an array describing the write concern. The array contains the values <i>w</i> for an integer acknowledgement level or string mode, and <i>wtimeout</i> denoting the maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @link http://php.net/manual/en/mongodb.getwriteconcern.php
		 * @see MongoDB::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * Check if there was an error on the most recent db operation performed
		 * <p>This method is equivalent to:</p>
		 * @return array <p>Returns the error, if there was one.</p>
		 * @link http://php.net/manual/en/mongodb.lasterror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function lastError(): array {}

		/**
		 * Gets an array of MongoCollection objects for all collections in this database
		 * <p>Gets a list of all collections in the database and returns them as an array of MongoCollection objects.</p><p><b>Note</b>: This method will use the listCollections database command when communicating with MongoDB 2.8+. For previous database versions, the method will query the special <i>system.namespaces</i> collection.</p>
		 * @param array $options <p>An array of options for listing the collections. Currently available options include:</p><ul> <li><p><i>"filter"</i></p><p>Optional query criteria. If provided, this criteria will be used to filter the collections included in the result.</p><p>Relevant fields that may be queried include <i>"name"</i> (collection name as a string, without the database name prefix) and <i>"options" (object containing options used to create the collection).</i>.</p><p><b>Note</b>: MongoDB 2.6 and earlier versions require the <i>"name"</i> criteria, if specified, to be a string value (i.e. equality match). This is because the driver must prefix the value with the database name in order to query the <i>system.namespaces</i> collection. Later versions of MongoDB do not have this limitation, as the driver will use the listCollections command.</p></li> <li><p><i>"includeSystemCollections"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Determines whether system collections should be included in the result.</p></li> </ul> <p>The following option may be used with MongoDB 2.8+:</p><ul> <li><p><i>"maxTimeMS"</i></p><p>Specifies a cumulative time limit in milliseconds for processing the operation on the server (does not include idle time). If the operation is not completed by the server within the timeout period, a MongoExecutionTimeoutException will be thrown.</p></li> </ul>
		 * @return array <p>Returns an array of MongoCollection objects.</p>
		 * @link http://php.net/manual/en/mongodb.listcollections.php
		 * @see MongoDB::getCollectionNames(), MongoDB::getCollectionInfo()
		 * @since PECL mongo >=0.9.0
		 */
		public function listCollections(array $options = array()): array {}

		/**
		 * Checks for the last error thrown during a database operation
		 * <p><code>MongoDB::lastError()</code> is usually preferred to this. This method returns the last database error that occurred and how many operations ago it occurred. It is mostly deprecated.</p>
		 * @return array <p>Returns the error and the number of operations ago it occurred.</p>
		 * @link http://php.net/manual/en/mongodb.preverror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function prevError(): array {}

		/**
		 * Repairs and compacts this database
		 * <p>This creates a fresh copy of all database data. It will remove any corrupt data and compact and large stretches of free space it finds. This is a very slow operation on a large database.</p><p>This is usually run from the shell or the command line, not the driver.</p><p>It is equivalent to the function:</p>
		 * @param bool $preserve_cloned_files <p>If cloned files should be kept if the repair fails.</p>
		 * @param bool $backup_original_files <p>If original files should be backed up.</p>
		 * @return array <p>Returns db response.</p>
		 * @link http://php.net/manual/en/mongodb.repair.php
		 * @since PECL mongo >=0.9.0
		 */
		public function repair(bool $preserve_cloned_files = FALSE, bool $backup_original_files = FALSE): array {}

		/**
		 * Clears any flagged errors on the database
		 * <p>This method is not used in normal operations. It resets the database error tracker (which can be incremented with <code>MongoDB::forceError()</code>, also not normally used).</p><p>It is equivalent to running:</p>
		 * @return array <p>Returns the database response.</p>
		 * @link http://php.net/manual/en/mongodb.reseterror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function resetError(): array {}

		/**
		 * Gets a collection
		 * @param string $name <p>The collection name.</p>
		 * @return MongoCollection <p>Returns a new collection object.</p>
		 * @link http://php.net/manual/en/mongodb.selectcollection.php
		 * @since PECL mongo >=0.9.0
		 */
		public function selectCollection(string $name): \MongoCollection {}

		/**
		 * Sets this database's profiling level
		 * <p>This changes the current database profiling level.</p><p>This function is equivalent to running:</p><p>The options for level are 0 (off), 1 (queries &gt; 100ms), and 2 (all queries). If you would like to profile queries that take longer than another time period, use the database command and pass it a second option, the number of milliseconds. For example, to profile all queries that take longer than one second, run:</p><p>Profiled queries will appear in the <i>system.profile</i> collection of this database.</p>
		 * @param int $level <p>Profiling level.</p>
		 * @return int <p>Returns the previous profiling level.</p>
		 * @link http://php.net/manual/en/mongodb.setprofilinglevel.php
		 * @since PECL mongo >=0.9.0
		 */
		public function setProfilingLevel(int $level): int {}

		/**
		 * Set the read preference for this database
		 * @param string $read_preference <p>The read preference mode: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b>, or <b><code>MongoClient::RP_NEAREST</code></b>.</p>
		 * @param array $tags <p>An array of zero or more tag sets, where each tag set is itself an array of criteria used to match tags on replica set members.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb.setreadpreference.php
		 * @see MongoDB::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Change slaveOkay setting for this database
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @param bool $ok <p>If reads should be sent to secondary members of a replica set for all possible queries using this MongoDB instance.</p>
		 * @return bool <p>Returns the former value of slaveOkay for this instance.</p>
		 * @link http://php.net/manual/en/mongodb.setslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function setSlaveOkay(bool $ok = TRUE): bool {}

		/**
		 * Set the write concern for this database
		 * @param mixed $w <p>The write concern. This may be an integer denoting the number of servers required to acknowledge the write, or a string mode (e.g. "majority").</p>
		 * @param int $wtimeout <p>The maximum number of milliseconds to wait for the server to satisfy the write concern.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb.setwriteconcern.php
		 * @see MongoDB::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}
	}

	/**
	 * <p>This class can be used to create lightweight links between objects in different collections.</p>
	 * <p><i>Motivation</i>: Suppose we need to refer to a document in another collection. The easiest way is to create a field in the current document. For example, if we had a "people" collection and an "addresses" collection, we might want to create a link between each person document and an address document:</p>
	 * <p><b>Example #1 Linking documents</b></p>
	 * <p>Then, later on, we can find the person's address by querying the "addresses" collection with the MongoId we saved in the "people" collection.</p>
	 * <p>Suppose now that we have a more general case, where we don't know which collection (or even which database) contains the referenced document. <b>MongoDBRef</b> is a good choice for this case, as it is a common format that all of the drivers and the database understand.</p>
	 * <p>If each person had a list of things they liked which could come from multiple collections, such as "hobbies", "sports", "books", etc., we could use <b>MongoDBRef</b>s to keep track of what "like" went with what collection:</p>
	 * <p><b>Example #2 Creating MongoDBRef links</b></p>
	 * <p>Database references can be thought of as hyperlinks: they give the unique address of another document, but they do not load it or automatically follow the link/reference.</p>
	 * <p>A database reference is just a normal associative array, not an instance of <b>MongoDBRef</b>, so this class is a little different than the other data type classes. This class contains exclusively static methods for manipulating database references.</p>
	 * @link http://php.net/manual/en/class.mongodbref.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoDBRef {

		/**
		 * Creates a new database reference
		 * <p>If no database is given, the current database is used.</p>
		 * @param string $collection <p>Collection name (without the database name).</p>
		 * @param mixed $id <p>The _id field of the object to which to link.</p>
		 * @param string $database <p>Database name.</p>
		 * @return array <p>Returns the reference.</p>
		 * @link http://php.net/manual/en/mongodbref.create.php
		 * @since PECL mongo >= 0.9.0
		 */
		public static function create(string $collection, $id, string $database = NULL): array {}

		/**
		 * Fetches the object pointed to by a reference
		 * @param \MongoDB $db <p>Database to use.</p>
		 * @param array $ref <p>Reference to fetch.</p>
		 * @return array <p>Returns the document to which the reference refers or <b><code>NULL</code></b> if the document does not exist (the reference is broken).</p>
		 * @link http://php.net/manual/en/mongodbref.get.php
		 * @since PECL mongo >= 0.9.0
		 */
		public static function get(\MongoDB $db, array $ref): array {}

		/**
		 * Checks if an array is a database reference
		 * <p>This method does not actually follow the reference, so it does not determine if it is broken or not. It merely checks that <code>ref</code> is in valid database reference format (in that it is an object or array with $ref and $id fields).</p>
		 * @param mixed $ref <p>Array or object to check.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/mongodbref.isref.php
		 * @since PECL mongo >= 0.9.0
		 */
		public static function isRef($ref): bool {}
	}

	/**
	 * <p>Constructs a batch of DELETE operations. See MongoWriteBatch.</p>
	 * @link http://php.net/manual/en/class.mongodeletebatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoDeleteBatch extends \MongoWriteBatch {

		/**
		 * Description
		 * <p>Constructs a batch of DELETE operations. See MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>The MongoCollection to execute the batch on. Its write concern will be copied and used as the default write concern if none is given as <code>$write_options</code> or during <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $write_options <p>An array of Write Options.</p>keyvalue meaning  w (int|string)Write concern value wtimeout (int)Maximum time to wait for replication orderedDetermines if MongoDB must apply this batch in order. Ordered writes execute serially (i.e. one at a time) and execution will stop after the first error. Unordered writes may execute in parallel and execution will not stop after the first error. Defaults to <b><code>TRUE</code></b> j (bool)Wait for journaling on the primary. This value is discouraged, use WriteConcern instead fsync (bool)Wait for fsync on the primary. This value is discouraged, use WriteConcern instead
		 * @return self <p>A new MongoDeleteBatch.</p>
		 * @link http://php.net/manual/en/mongodeletebatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function __construct(\MongoCollection $collection, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link http://php.net/manual/en/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>Thrown when attempting to insert a document into a collection which already contains the same values for the unique keys.</p>
	 * @link http://php.net/manual/en/class.mongoduplicatekeyexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoDuplicateKeyException extends \MongoWriteConcernException {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Get the error document
		 * <p>Returns the actual response from the server that was interperated as an error.</p>
		 * @return array <p>A MongoDB document, if available, as an array.</p>
		 * @link http://php.net/manual/en/mongowriteconcernexception.getdocument.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function getDocument(): array {}
	}

	/**
	 * <p>Default Mongo exception.</p>
	 * <p>This covers a bunch of different error conditions that may eventually be moved to more specific exceptions, but will always extend <b>MongoException</b>.</p>
	 * <p><i>The MongoSomething object has not been correctly initialized by its constructor</i></p>
	 * <p>Code: 0</p>
	 * <p>Probably your Mongo object is not connected to a database server.</p>
	 * <p><i>zero-length keys are not allowed, did you use $ with double quotes&#63;</i></p>
	 * <p>Code: 1</p>
	 * <p>You tried to save "" as a key. You generally should not do this. "" can mess up subobject access and is used by MongoDB internally. However, if you really want, you can set mongo.allow_empty_keys to true in your php.ini file to override this sanity check. If you override this, it is highly recommended that you set error checking to strict to avoid string interpolation errors.</p>
	 * <p><i>'.' not allowed in key: &lt;key&gt;</i></p>
	 * <p>Code: 2</p>
	 * <p>You attempted to write a key with '.' in it, which is prohibited.</p>
	 * <p><i>insert too large: &lt;size&gt;, max: &lt;max&gt;</i></p>
	 * <p>Code: 3</p>
	 * <p>You're attempting to send too much data to the database at once: the database will only accept inserts up to a certain size (currently 16 MB).</p>
	 * <p><i>no elements in doc</i></p>
	 * <p>Code: 4</p>
	 * <p>You're attempting to save a document with no fields.</p>
	 * <p><i>size of BSON doc is &lt;size&gt; bytes, max &lt;max&gt;MB</i></p>
	 * <p>Code: 5</p>
	 * <p>You're attempting to save a document that is larger than MongoDB can save.</p>
	 * <p><i>no documents given</i></p>
	 * <p>Code: 6</p>
	 * <p>You're attempting to batch insert an empty array of documents.</p>
	 * <p><i>MongoCollection::group takes an array, object, or MongoCode key</i></p>
	 * <p>Code: 7</p>
	 * <p>Wrong type parameter send to <code>MongoCollection::group()</code>.</p>
	 * <p><i>field names must be strings</i></p>
	 * <p>Code: 8</p>
	 * <p>You should format field selectors as <i>array("field1" =&gt; 1, "field2" =&gt; 1, ..., "fieldN" =&gt; 1)</i>.</p>
	 * <p><i>invalid regex</i></p>
	 * <p>Code: 9</p>
	 * <p>The regex passed to MongoRegex is not of the correct form.</p>
	 * <p><i>MongoDBRef::get: $ref field must be a string</i></p>
	 * <p>Code: 10</p>
	 * <p><i>MongoDBRef::get: $db field must be a string</i></p>
	 * <p>Code: 11</p>
	 * <p><i>non-utf8 string: &lt;str&gt;</i></p>
	 * <p>Code: 12</p>
	 * <p>This error occurs if you attempt to send a non-utf8 string to the database. All strings going into the database should be UTF8. See php.ini options for the transition option of quieting this exception.</p>
	 * <p><i>mutex error: &lt;err&gt;</i></p>
	 * <p>Code: 13</p>
	 * <p>The driver uses mutexes for synchronizing requests and responses in multithreaded environments. This is a fairly serious error and may not have a stack trace. It's unusual and should be reported to maintainers with any system information and steps to reproduce that you can provide.</p>
	 * <p><i>index name too long: &lt;len&gt;, max &lt;max&gt; characters</i></p>
	 * <p>Code: 14</p>
	 * <p>Indexes with names longer than 128 characters cannot be created. If you get this error, you should use <code>MongoCollection::ensureIndex()</code>'s "name" option to create a shorter name for your index.</p>
	 * @link http://php.net/manual/en/class.mongoexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoException extends \Exception {
	}

	/**
	 * <p>Thrown when a operation times out server side (i.e. in MongoDB).</p>
	 * <p>To configure the operation timeout threshold, use <code>MongoCursor::maxTimeMS()</code> or the <i>"maxTimeMS"</i> command option.</p>
	 * @link http://php.net/manual/en/class.mongoexecutiontimeoutexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoExecutionTimeoutException extends \MongoException {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Sets a server-side timeout for this query
		 * <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @param int $ms <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @return MongoCursor <p>This cursor.</p>
		 * @link http://php.net/manual/en/mongocursor.maxtimems.php
		 * @since PECL mongo >=1.5.0
		 */
		public function maxTimeMS(int $ms): \MongoCursor {}
	}

	/**
	 * <p>Utilities for storing and retrieving files from the database.</p>
	 * <p>GridFS is a storage specification all supported drivers implement. Basically, it defines two collections: <i>files</i>, for file metadata, and <i>chunks</i>, for file content. If the file is large, it will automatically be split into smaller chunks and each chunk will be saved as a document in the chunks collection.</p>
	 * <p>Each document in the files collection contains the filename, upload date, and md5 hash. It also contains a unique <i>_id</i> field, which can be used to query the chunks collection for the file's content. Each document in the chunks collection contains a chunk of binary data, a <i>files_id</i> field that matches its file's <i>_id</i>, and the position of this chunk in the overall file.</p>
	 * <p>For example, the files document is something like:</p>
	 * @link http://php.net/manual/en/class.mongogridfs.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoGridFS extends \MongoCollection {

		public $chunks = NULL;

		protected $filesName = NULL;

		protected $chunksName = NULL;

		/**
		 * Creates new file collections
		 * <p>Files as stored across two collections, the first containing file meta information, the second containing chunks of the actual file. By default, fs.files and fs.chunks are the collection names used.</p><p>Use one argument to specify a prefix other than "fs":</p>
		 * @param \MongoDB $db <p>Database.</p>
		 * @param string $prefix
		 * @param mixed $chunks
		 * @return self
		 * @link http://php.net/manual/en/mongogridfs.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoDB $db, string $prefix = "fs", $chunks = "fs") {}

		/**
		 * Remove a file and its chunks from the database
		 * <p><b>Note</b>:</p><p><b>MongoGridFS::delete()</b> is a convenience method for calling <code>MongoGridFS::remove()</code> with specific <code>criteria</code> and default <code>options</code> parameters.</p>
		 * @param mixed $id <p><i>_id</i> of the file to remove.</p>
		 * @return bool|array <p>Returns an array containing the status of the removal (with respect to the <i>files</i> collection) if a write concern is applied. Otherwise, returns <b><code>TRUE</code></b>.</p><p>Fields in the status array are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link http://php.net/manual/en/mongogridfs.delete.php
		 * @since PECL mongo >=1.0.8
		 */
		public function delete($id) {}

		/**
		 * Drops the files and chunks collections
		 * @return array <p>The database response.</p>
		 * @link http://php.net/manual/en/mongogridfs.drop.php
		 * @since PECL mongo >=0.9.0
		 */
		public function drop(): array {}

		/**
		 * Queries for files
		 * @param array $query <p>The query.</p>
		 * @param array $fields <p>Fields to return.</p>
		 * @return MongoGridFSCursor <p>A MongoGridFSCursor.</p>
		 * @link http://php.net/manual/en/mongogridfs.find.php
		 * @since PECL mongo >=0.9.0
		 */
		public function find(array $query = array(), array $fields = array()): \MongoGridFSCursor {}

		/**
		 * Returns a single file matching the criteria
		 * @param mixed $query <p>The filename or criteria for which to search.</p>
		 * @param mixed $fields
		 * @return MongoGridFSFile <p>Returns a MongoGridFSFile or <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongogridfs.findone.php
		 * @since PECL mongo >=0.9.0
		 */
		public function findOne($query = array(), $fields = array()): \MongoGridFSFile {}

		/**
		 * Retrieve a file from the database
		 * @param mixed $id <p><i>_id</i> of the file to find.</p>
		 * @return MongoGridFSFile <p>Returns the file, if found, or <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongogridfs.get.php
		 * @since PECL mongo >=1.0.8
		 */
		public function get($id): \MongoGridFSFile {}

		/**
		 * Stores a file in the database
		 * <p><b>Note</b>:</p><p><b>MongoGridFS::put()</b> is an alias of <code>MongoGridFS::storeFile()</code>.</p>
		 * @param string $filename <p>Name of the file to store.</p>
		 * @param array $metadata <p>Other metadata fields to include in the file document.</p> <p><b>Note</b>:</p><p>These fields may also overwrite those that would be created automatically by the driver, as described in the MongoDB core documentation for the files collection. Some practical use cases for this behavior would be to specify a custom <i>chunkSize</i> or <i>_id</i> for the file.</p>
		 * @param array $options <p>An array of options for the insert operations executed against the <i>chunks</i> and <i>files</i> collections. See <code>MongoCollection::insert()</code> for documentation on these these options.</p>
		 * @return mixed <p>Returns the <i>_id</i> of the saved file document. This will be a generated MongoId unless an <i>_id</i> was explicitly specified in the <code>metadata</code> parameter.</p>
		 * @link http://php.net/manual/en/mongogridfs.put.php
		 * @see MongoGridFS::storeBytes(), MongoGridFS::storeFile(), MongoGridFS::storeUpload()
		 * @since PECL mongo >=1.0.8
		 */
		public function put(string $filename, array $metadata = array(), array $options = array()) {}

		/**
		 * Remove files and their chunks from the database
		 * @param array $criteria <p>The filename or criteria for which to search.</p>
		 * @param array $options <p>An array of options for the remove operations executed against the <i>chunks</i> and <i>files</i> collections. See <code>MongoCollection::remove()</code> for documentation on these options.</p>
		 * @return bool|array <p>Returns an array containing the status of the removal (with respect to the <i>files</i> collection) if the <i>"w"</i> option is set. Otherwise, returns <b><code>TRUE</code></b>.</p><p>Fields in the status array are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link http://php.net/manual/en/mongogridfs.remove.php
		 * @since PECL mongo >=0.9.0
		 */
		public function remove(array $criteria = array(), array $options = array()) {}

		/**
		 * Stores a string of bytes in the database
		 * @param string $bytes <p>String of bytes to store.</p>
		 * @param array $metadata <p>Other metadata fields to include in the file document.</p> <p><b>Note</b>:</p><p>These fields may also overwrite those that would be created automatically by the driver, as described in the MongoDB core documentation for the files collection. Some practical use cases for this behavior would be to specify a custom <i>chunkSize</i> or <i>_id</i> for the file.</p>
		 * @param array $options <p>An array of options for the insert operations executed against the <i>chunks</i> and <i>files</i> collections. See <code>MongoCollection::insert()</code> for documentation on these these options.</p>
		 * @return mixed <p>Returns the <i>_id</i> of the saved file document. This will be a generated MongoId unless an <i>_id</i> was explicitly specified in the <code>metadata</code> parameter.</p>
		 * @link http://php.net/manual/en/mongogridfs.storebytes.php
		 * @see MongoGridFS::put(), MongoGridFS::storeFile(), MongoGridFS::storeUpload()
		 * @since PECL mongo >=0.9.2
		 */
		public function storeBytes(string $bytes, array $metadata = array(), array $options = array()) {}

		/**
		 * Stores a file in the database
		 * @param string|resource $filename <p>Name of the file or a readable stream to store.</p>
		 * @param array $metadata <p>Other metadata fields to include in the file document.</p> <p><b>Note</b>:</p><p>These fields may also overwrite those that would be created automatically by the driver, as described in the MongoDB core documentation for the files collection. Some practical use cases for this behavior would be to specify a custom <i>chunkSize</i> or <i>_id</i> for the file.</p>
		 * @param array $options <p>An array of options for the insert operations executed against the <i>chunks</i> and <i>files</i> collections. See <code>MongoCollection::insert()</code> for documentation on these these options.</p>
		 * @return mixed <p>Returns the <i>_id</i> of the saved file document. This will be a generated MongoId unless an <i>_id</i> was explicitly specified in the <code>metadata</code> parameter.</p>
		 * @link http://php.net/manual/en/mongogridfs.storefile.php
		 * @see MongoGridFS::put(), MongoGridFS::storeBytes(), MongoGridFS::storeUpload()
		 * @since PECL mongo >=0.9.0
		 */
		public function storeFile($filename, array $metadata = array(), array $options = array()) {}

		/**
		 * Stores an uploaded file in the database
		 * @param string $name <p>The name of the uploaded file(s) to store. This should correspond to the file field's <i>name</i> attribute in the HTML form.</p>
		 * @param array $metadata <p>Other metadata fields to include in the file document.</p> <p><b>Note</b>:</p><p>These fields may also overwrite those that would be created automatically by the driver, as described in the MongoDB core documentation for the files collection. Some practical use cases for this behavior would be to specify a custom <i>chunkSize</i> or <i>_id</i> for the file.</p> <p><b>Note</b>:</p><p>The <i>filename</i> field will be populated with the client's filename (e.g. <i>$_FILES['foo']['name']</i>).</p>
		 * @return mixed <p>Returns the <i>_id</i> of the saved file document. This will be a generated MongoId unless an <i>_id</i> was explicitly specified in the <code>metadata</code> parameter.</p><p><b>Note</b>:</p><p>If multiple files are uploaded using the same field name, this method will not return anything; however, the files themselves will still be processed.</p>
		 * @link http://php.net/manual/en/mongogridfs.storeupload.php
		 * @see MongoGridFS::put(), MongoGridFS::storeBytes(), MongoGridFS::storeFile()
		 * @since PECL mongo >=0.9.0
		 */
		public function storeUpload(string $name, array $metadata = NULL) {}
	}

	/**
	 * <p>Cursor for database file results.</p>
	 * @link http://php.net/manual/en/class.mongogridfscursor.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoGridFSCursor extends \MongoCursor {

		protected $gridfs = NULL;

		/**
		 * Create a new cursor
		 * @param \MongoGridFS $gridfs <p>Related GridFS collection.</p>
		 * @param resource $connection <p>Database connection.</p>
		 * @param string $ns <p>Full name of database and collection.</p>
		 * @param array $query <p>Database query.</p>
		 * @param array $fields <p>Fields to return.</p>
		 * @return self <p>Returns the new cursor.</p>
		 * @link http://php.net/manual/en/mongogridfscursor.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoGridFS $gridfs, $connection, string $ns, array $query, array $fields) {}

		/**
		 * Returns the current file
		 * @return MongoGridFSFile <p>The current file.</p>
		 * @link http://php.net/manual/en/mongogridfscursor.current.php
		 * @since PECL mongo >=0.9.0
		 */
		public function current(): \MongoGridFSFile {}

		/**
		 * Return the next file to which this cursor points, and advance the cursor
		 * @return MongoGridFSFile <p>Returns the next file.</p>
		 * @link http://php.net/manual/en/mongogridfscursor.getnext.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getNext(): \MongoGridFSFile {}

		/**
		 * Returns the current result's filename
		 * @return string <p>The current result's _id as a string.</p>
		 * @link http://php.net/manual/en/mongogridfscursor.key.php
		 * @since PECL mongo >=0.9.0
		 */
		public function key(): string {}
	}

	/**
	 * <p>Thrown when there are errors reading or writing files to or from the database.</p>
	 * @link http://php.net/manual/en/class.mongogridfsexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoGridFSException extends \MongoException {
	}

	/**
	 * <p>A database file object.</p>
	 * @link http://php.net/manual/en/class.mongogridfsfile.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoGridFSFile {

		public $file = NULL;

		protected $gridfs = NULL;

		/**
		 * Create a new GridFS file
		 * @param \MongoGridFS $gridfs <p>The parent MongoGridFS instance.</p>
		 * @param array $file <p>A file from the database.</p>
		 * @return self <p>Returns a new MongoGridFSFile.</p>
		 * @link http://php.net/manual/en/mongogridfsfile.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoGridFS $gridfs, array $file) {}

		/**
		 * Returns this file's contents as a string of bytes
		 * <p>Warning: this will load the file into memory. If the file is bigger than your memory, this will cause problems!</p>
		 * @return string <p>Returns a string of the bytes in the file.</p>
		 * @link http://php.net/manual/en/mongogridfsfile.getbytes.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getBytes(): string {}

		/**
		 * Returns this file's filename
		 * @return string <p>Returns the filename.</p>
		 * @link http://php.net/manual/en/mongogridfsfile.getfilename.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getFilename(): string {}

		/**
		 * Returns a resource that can be used to read the stored file
		 * <p>This method returns a stream resource that can be used with all file functions in PHP that deal with reading files. The contents of the file are pulled out of MongoDB on the fly, so that the whole file does not have to be loaded into memory first.</p><p>At most two GridFSFile chunks will be loaded in memory.</p>
		 * @return resource <p>Returns a resource that can be used to read the file with</p>
		 * @link http://php.net/manual/en/mongogridfsfile.getresource.php
		 * @since PECL mongo >=1.3.0
		 */
		public function getResource() {}

		/**
		 * Returns this file's size
		 * @return int <p>Returns this file's size</p>
		 * @link http://php.net/manual/en/mongogridfsfile.getsize.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getSize(): int {}

		/**
		 * Writes this file to the filesystem
		 * @param string $filename <p>The location to which to write the file. If none is given, the stored filename will be used.</p>
		 * @return int <p>Returns the number of bytes written.</p>
		 * @link http://php.net/manual/en/mongogridfsfile.write.php
		 * @since PECL mongo >=0.9.0
		 */
		public function write(string $filename = NULL): int {}
	}

	/**
	 * <p>A unique identifier created for database objects. If an object is inserted into the database without an _id field, an _id field will be added to it with a <b>MongoId</b> instance as its value. If the data has a naturally occuring unique field (e.g. username or timestamp) it is fine to use this as the _id field instead, and it will not be replaced with a <b>MongoId</b>.</p>
	 * <p>Instances of the <b>MongoId</b> class fulfill the role that autoincrementing does in a relational database: to provide a unique key if the data does not naturally have one. Autoincrementing does not work well with a sharded database, as it is difficult to determine the next number in the sequence. This class fulfills the constraints of quickly generating a value that is unique across shards.</p>
	 * <p>Each MongoId is 12 bytes (making its string form 24 hexadecimal characters). The first four bytes are a timestamp, the next three are a hash of the client machine's hostname, the next two are the two least significant bytes of the process id running the script, and the last three bytes are an incrementing value.</p>
	 * <p><b>MongoId</b>s are serializable/unserializable. Their serialized form is similar to their string form:</p>
	 * @link http://php.net/manual/en/class.mongoid.php
	 * @since PECL mongo >=0.8.0
	 */
	class MongoId {

		/**
		 * @var string This field contains the string representation of this object.  <p><b>Note</b>:  The property name begins with a <i>$</i> character. It may be accessed using complex variable parsed syntax (e.g. <i>$mongoId-&gt;{'$id'}</i>). </p>
		 * @link http://php.net/manual/en/class.mongoid.php#mongoid.props.id
		 */
		public $id = NULL;

		/**
		 * Creates a new id
		 * @param string|\MongoId $id <p>A string (must be 24 hexadecimal characters) or a MongoId instance.</p>
		 * @return self <p>Returns a new id.</p>
		 * @link http://php.net/manual/en/mongoid.construct.php
		 * @since PECL mongo >= 0.8.0
		 */
		public function __construct($id = NULL) {}

		/**
		 * Create a dummy MongoId
		 * <p>This function is only used by PHP internally, it shouldn't need to ever be called by the user.</p><p>It is identical to the function:</p>
		 * @param array $props <p>Theoretically, an array of properties used to create the new id. However, as MongoId instances have no properties, this is not used.</p>
		 * @return MongoId <p>A new id with the value "000000000000000000000000".</p>
		 * @link http://php.net/manual/en/mongoid.set-state.php
		 * @since PECL mongo >= 1.0.8
		 */
		public static function __set_state(array $props): \MongoId {}

		/**
		 * Returns a hexidecimal representation of this id
		 * @return string <p>This id.</p>
		 * @link http://php.net/manual/en/mongoid.tostring.php
		 * @since PECL mongo >= 0.8.0
		 */
		public function __toString(): string {}

		/**
		 * Gets the hostname being used for this machine's ids
		 * <p>This returns the hostname MongoId is using to generate unique ids. This should be the same value <code>gethostname()</code> returns.</p><p>It is identical to the function:</p>
		 * @return string <p>Returns the hostname.</p>
		 * @link http://php.net/manual/en/mongoid.gethostname.php
		 * @since PECL mongo >= 1.0.8
		 */
		public static function getHostname(): string {}

		/**
		 * Gets the incremented value to create this id
		 * @return int <p>Returns the incremented value used to create this MongoId.</p>
		 * @link http://php.net/manual/en/mongoid.getinc.php
		 * @since PECL mongo >= 1.0.11
		 */
		public function getInc(): int {}

		/**
		 * Gets the process ID
		 * <p>Extracts the pid from the Mongo ID</p>
		 * @return int <p>Returns the PID of the MongoId.</p>
		 * @link http://php.net/manual/en/mongoid.getpid.php
		 * @since PECL mongo >= 1.0.11
		 */
		public function getPID(): int {}

		/**
		 * Gets the number of seconds since the epoch that this id was created
		 * <p>This returns the same thing as running <code>time()</code> when the id is created.</p>
		 * @return int <p>Returns the number of seconds since the epoch that this id was created. There are only four bytes of timestamp stored, so MongoDate is a better choice for storing exact or wide-ranging times.</p>
		 * @link http://php.net/manual/en/mongoid.gettimestamp.php
		 * @since PECL mongo >= 1.0.1
		 */
		public function getTimestamp(): int {}

		/**
		 * Check if a value is a valid ObjectId
		 * <p>This method may be used to check a variable before passing it as an argument to <code>MongoId::__construct()</code>.</p>
		 * @param mixed $value <p>The value to check for validity.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>value</code> is a MongoId instance or a string consisting of exactly 24 hexadecimal characters; otherwise, <b><code>FALSE</code></b> is returned.</p>
		 * @link http://php.net/manual/en/mongoid.isvalid.php
		 * @since PECL mongo >= 1.5.0
		 */
		public static function isValid($value): bool {}
	}

	/**
	 * <p>Constructs a batch of INSERT operations. See MongoWriteBatch.</p>
	 * @link http://php.net/manual/en/class.mongoinsertbatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoInsertBatch extends \MongoWriteBatch {

		/**
		 * Description
		 * <p>Constructs a batch of INSERT operations. See MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>The MongoCollection to execute the batch on. Its write concern will be copied and used as the default write concern if none is given as <code>$write_options</code> or during <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $write_options <p>An array of Write Options.</p>keyvalue meaning  w (int|string)Write concern value wtimeout (int)Maximum time to wait for replication orderedDetermines if MongoDB must apply this batch in order. Ordered writes execute serially (i.e. one at a time) and execution will stop after the first error. Unordered writes may execute in parallel and execution will not stop after the first error. Defaults to <b><code>TRUE</code></b> j (bool)Wait for journaling on the primary. This value is discouraged, use WriteConcern instead fsync (bool)Wait for fsync on the primary. This value is discouraged, use WriteConcern instead
		 * @return self <p>A new MongoInsertBatch.</p>
		 * @link http://php.net/manual/en/mongoinsertbatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function __construct(\MongoCollection $collection, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link http://php.net/manual/en/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>The class can be used to save 32-bit integers to the database on a 64-bit system.</p>
	 * @link http://php.net/manual/en/class.mongoint32.php
	 * @since PECL mongo >=1.0.9
	 */
	class MongoInt32 {

		/**
		 * @var string This is the string value of the 32-bit number. For instance, 123's value would be "123".
		 * @link http://php.net/manual/en/class.mongoint32.php#mongoint32.props.value
		 */
		public $value;

		/**
		 * Creates a new 32-bit integer
		 * <p>Creates a new 32-bit number with the given value.</p>
		 * @param string $value <p>A number.</p>
		 * @return self <p>Returns a new integer.</p>
		 * @link http://php.net/manual/en/mongoint32.construct.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __construct(string $value) {}

		/**
		 * Returns the string representation of this 32-bit integer
		 * @return string <p>Returns the string representation of this integer.</p>
		 * @link http://php.net/manual/en/mongoint32.tostring.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>The class can be used to save 64-bit integers to the database on a 32-bit system.</p>
	 * @link http://php.net/manual/en/class.mongoint64.php
	 * @since PECL mongo >=1.0.9
	 */
	class MongoInt64 {

		/**
		 * @var string This is the string value of the 64-bit number. For instance, 123's value would be "123".
		 * @link http://php.net/manual/en/class.mongoint64.php#mongoint64.props.value
		 */
		public $value;

		/**
		 * Creates a new 64-bit integer
		 * <p>Creates a new 64-bit number with the given value.</p>
		 * @param string $value <p>A number.</p>
		 * @return self <p>Returns a new integer.</p>
		 * @link http://php.net/manual/en/mongoint64.construct.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __construct(string $value) {}

		/**
		 * Returns the string representation of this 64-bit integer
		 * @return string <p>Returns the string representation of this integer.</p>
		 * @link http://php.net/manual/en/mongoint64.tostring.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>Logging can be used to get detailed information about what the driver is doing. Logging is disabled by default, but this class allows you to activate specific levels of logging for various parts of the driver. Some examples:</p>
	 * <p><b>Note</b>:</p>
	 * <p>By default, MongoLog emits all log messages as PHP notices. Depending on the SAPI you use, messages may be sent to <i>stderr</i> (for CLI) or the web server's error log. If, after configuring MongoLog, log messages are not appearing as expected, ensure that the <b><code>E_NOTICE</code></b> bit is included in error_reporting and that display_errors is on.</p>
	 * @link http://php.net/manual/en/class.mongolog.php
	 * @since PECL mongo >=1.2.3
	 */
	class MongoLog {

		/**
		 * @var int Log nothing.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const NONE = 0;

		/**
		 * @var int Log everything.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const ALL = 31;

		/**
		 * @var int Log events that are somewhat exceptional, but not quite worthy of an actual exception (e.g. recoverable connection errors).
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const WARNING = 1;

		/**
		 * @var int Log events that may be of interest to administrators, but are not particularly noteworthy (e.g. option parsing, authentication steps).
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const INFO = 2;

		/**
		 * @var int Log most events that the driver performs (e.g. server selection, socket communication). Depending on the module being logged, this can be extremely noisy and is primarily useful for debugging.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const FINE = 4;

		/**
		 * @var int Log replica set activity. Failovers, read preference selection, etc.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const RS = 1;

		/**
		 * @var int Previously used to log connection pool activity. This option is now a deprecated alias of <b><code>MongoLog::RS</code></b>.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const POOL = 1;

		/**
		 * @var int Log connection activity. Creating new connections, authentication, pinging, timeouts, etc.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const CON = 2;

		/**
		 * @var int Log traffic to/from the database. Unless your program is trivial, this will create an enormous number of log messages.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const IO = 4;

		/**
		 * @var int Previously used to log server status changes. This option is deprecated in favor of <b><code>MongoLog::RS</code></b>.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const SERVER = 8;

		/**
		 * @var int Log parsing of the connection string and options when constructing MongoClient.
		 * @link http://php.net/manual/en/class.mongolog.php
		 */
		const PARSE = 16;

		private static $callback;

		private static $level;

		private static $module;

		/**
		 * Gets the previously set callback function
		 * <p>Retrieves the callback function.</p>
		 * @return callable <p>Returns the callback function, or <b><code>FALSE</code></b> if not set yet.</p>
		 * @link http://php.net/manual/en/mongolog.getcallback.php
		 * @since PECL mongo >= 1.3.0
		 */
		public static function getCallback(): callable {}

		/**
		 * Gets the level(s) currently being logged
		 * <p>This function can be used to see which log levels are currently enabled. The returned integer may be compared with the MongoLog level constants using bitwise operators to check for specific log levels.</p>
		 * @return int <p>Returns the level(s) currently being logged.</p>
		 * @link http://php.net/manual/en/mongolog.getlevel.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function getLevel(): int {}

		/**
		 * Gets the module(s) currently being logged
		 * <p>This function can be used to see which driver modules are currently being logged. The returned integer may be compared with the MongoLog module constants using bitwise operators to check if specific modules are being logged.</p>
		 * @return int <p>Returns the module(s) currently being logged.</p>
		 * @link http://php.net/manual/en/mongolog.getmodule.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function getModule(): int {}

		/**
		 * Sets a callback function to be invoked for events
		 * <p>This function will set a callback function to be invoked for events in lieu of emitting of PHP notice.</p>
		 * @param callable $log_function <p>The callback function to be invoked on events. It should have the following prototype:</p> <p></p> log_function ( int <code>$module</code> , int <code>$level</code> , string <code>$message</code> )   <code>module</code>   One of the MongoLog module constants.    <code>level</code>   One of the MongoLog level constants.    <code>message</code>   The log message itself.
		 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/mongolog.setcallback.php
		 * @since PECL mongo >= 1.3.0
		 */
		public static function setCallback(callable $log_function): void {}

		/**
		 * Sets the level(s) to be logged
		 * <p>This function can be used to control logging verbosity and the types of activities that should be logged. The MongoLog level constants may be used with bitwise operators to specify multiple levels.</p><p>Note that you must also call <code>MongoLog::setModule()</code> to specify which modules(s) of the driver should log.</p>
		 * @param int $level <p>The level(s) you would like to log.</p>
		 * @return void
		 * @link http://php.net/manual/en/mongolog.setlevel.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function setLevel(int $level): void {}

		/**
		 * Sets the module(s) to be logged
		 * <p>This function can be used to set which driver modules should be logged. The MongoLog module constants may be used with bitwise operators to specify multiple modules.</p><p>Note that you must also call <code>MongoLog::setLevel()</code> to enable logging.</p>
		 * @param int $module <p>The module(s) you would like to log.</p>
		 * @return void
		 * @link http://php.net/manual/en/mongolog.setmodule.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function setModule(int $module): void {}
	}

	/**
	 * <p><b>MongoMaxKey</b> is an special type used by the database that compares greater than all other possible BSON values. Thus, if a query is sorted by a given field in ascending order, any document with a <b>MongoMaxKey</b> as its value will be returned last.</p>
	 * <p><b>MongoMaxKey</b> has no associated fields, methods, or constants. It is merely the "greatest" value that can be represented in the database.</p>
	 * <p><b>Note</b>:  <b>MongoMaxKey</b> is used internally by MongoDB for indexing and sharding. There is generally no reason to use this class in an application. </p>
	 * @link http://php.net/manual/en/class.mongomaxkey.php
	 * @since PECL mongo >= 1.0.2
	 */
	class MongoMaxKey {
	}

	/**
	 * <p><b>MongoMinKey</b> is an special type used by the database that compares less than all other possible BSON values. Thus, if a query is sorted by a given field in ascending order, any document with a <b>MongoMinKey</b> as its value will be returned first.</p>
	 * <p><b>MongoMinKey</b> has no associated fields, methods, or constants. It is merely the "smallest" value that can be represented in the database.</p>
	 * <p><b>Note</b>:  <b>MongoMinKey</b> is used internally by MongoDB for indexing and sharding. There is generally no reason to use this class in an application. </p>
	 * @link http://php.net/manual/en/class.mongominkey.php
	 * @since PECL mongo >= 1.0.2
	 */
	class MongoMinKey {
	}

	/**
	 * <p>The current (1.3.0+) releases of the driver no longer implements pooling. This class and its methods are therefore deprecated and should not be used.</p>
	 * @link http://php.net/manual/en/class.mongopool.php
	 * @since PECL mongo >= 1.2.3
	 */
	class MongoPool {

		/**
		 * Get pool size for connection pools
		 * @return int <p>Returns the current pool size.</p>
		 * @link http://php.net/manual/en/mongopool.getsize.php
		 * @see MongoPool::setSize(), MongoPool::info()
		 * @since PECL mongo >= 1.2.3
		 */
		public static function getSize(): int {}

		/**
		 * Returns information about all connection pools
		 * <p>Returns an array of information about all connection pools.</p>
		 * @return array <p>Each connection pool has an identifier, which starts with the host. For each pool, this function shows the following fields:</p>  <code>in use</code>   <p>The number of connections currently being used by Mongo instances.</p>   <code>in pool</code>   <p>The number of connections currently in the pool (not being used).</p>   <code>remaining</code>   <p>The number of connections that could be created by this pool. For example, suppose a pool had 5 connections remaining and 3 connections in the pool. We could create 8 new instances of MongoClient before we exhausted this pool (assuming no instances of MongoClient went out of scope, returning their connections to the pool).</p> <p>A negative number means that this pool will spawn unlimited connections.</p> <p>Before a pool is created, you can change the max number of connections by calling <code>Mongo::setPoolSize()</code>. Once a pool is showing up in the output of this function, its size cannot be changed.</p>   <code>total</code>   <p>The total number of connections allowed for this pool. This should be greater than or equal to "in use" + "in pool" (or -1).</p>   <code>timeout</code>   <p>The socket timeout for connections in this pool. This is how long connections in this pool will attempt to connect to a server before giving up.</p>   <code>waiting</code>   <p>If you have capped the pool size, workers requesting connections from the pool may block until other workers return their connections. This field shows how many milliseconds workers have blocked for connections to be released. If this number keeps increasing, you may want to use <code>MongoPool::setSize()</code> to add more connections to your pool.</p>
		 * @link http://php.net/manual/en/mongopool.info.php
		 * @since PECL mongo >= 1.2.3
		 */
		public function info(): array {}

		/**
		 * Set the size for future connection pools
		 * <p>Sets the max number of connections new pools will be able to create.</p>
		 * @param int $size <p>The max number of connections future pools will be able to create. Negative numbers mean that the pool will spawn an infinite number of connections.</p>
		 * @return bool <p>Returns the former value of pool size.</p>
		 * @link http://php.net/manual/en/mongopool.setsize.php
		 * @see MongoPool::getSize(), MongoPool::info()
		 * @since PECL mongo >= 1.2.3
		 */
		public static function setSize(int $size): bool {}
	}

	/**
	 * <p>When talking to MongoDB 2.6.0, and later, certain operations (such as writes) may throw MongoProtocolException when the response from the server did not make sense - for example during network failure (we could read the entire response) or data corruption.</p>
	 * <p>This exception is also thrown when attempting to talk newer protocols then the server supports, for example using the MongoWriteBatch when talking to a MongoDB server prior to 2.6.0.</p>
	 * @link http://php.net/manual/en/class.mongoprotocolexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoProtocolException extends \MongoException {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;
	}

	/**
	 * <p>This class can be used to create regular expressions. Typically, these expressions will be used to query the database and find matching strings. More unusually, they can be saved to the database and retrieved.</p>
	 * <p>Regular expressions consist of four parts. First a <i>/</i> as starting delimiter, then the pattern, another <i>/</i> and finally a string containing flags.</p>
	 * <p><b>Example #1 Regular expression pattern</b></p>
	 * <p>MongoDB recognizes six regular expression flags:</p>
	 * <p><i>i</i>: Case insensitive</p>
	 * <p><i>m</i>: Multiline</p>
	 * <p><i>x</i>: Can contain comments</p>
	 * <p><i>l</i>: locale</p>
	 * <p><i>s</i>: dotall, "." matches everything, including newlines</p>
	 * <p><i>u</i>: match unicode</p>
	 * @link http://php.net/manual/en/class.mongoregex.php
	 * @since PECL mongo >=0.8.1
	 */
	class MongoRegex {

		public $regex;

		public $flags;

		/**
		 * Creates a new regular expression
		 * <p>Creates a new regular expression.</p>
		 * @param string $regex <p>Regular expression string of the form <i>/expr/flags</i>.</p>
		 * @return self <p>Returns a new regular expression.</p>
		 * @link http://php.net/manual/en/mongoregex.construct.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __construct(string $regex) {}

		/**
		 * A string representation of this regular expression
		 * <p>Returns a string representation of this regular expression.</p>
		 * @return string <p>This regular expression in the form "/expr/flags".</p>
		 * @link http://php.net/manual/en/mongoregex.tostring.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>The MongoResultException is thrown by several command helpers (such as <code>MongoCollection::findAndModify()</code>) in the event of failure. The original result document is available through <code>MongoResultException::getDocument()</code>.</p>
	 * @link http://php.net/manual/en/class.mongoresultexception.php
	 * @since PECL mongo >=1.3.0
	 */
	class MongoResultException extends \MongoException {

		/**
		 * @var mixed <p>The raw result document as an array.</p>
		 * @link http://php.net/manual/en/class.mongoresultexception.php#mongoresultexception.props.document
		 */
		public $document;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Update a document and return it
		 * <p>The findAndModify command atomically modifies and returns a single document. By default, the returned document does not include the modifications made on the update. To return the document with the modifications made on the update, use the new option.</p>
		 * @param array $query <p>The query criteria to search for.</p>
		 * @param array $update <p>The update criteria.</p>
		 * @param array $fields <p>Optionally only return these fields.</p>
		 * @param array $options <p>An array of options to apply, such as remove the match document from the DB and return it.</p>   Option Description     sort <code>array</code>  Determines which document the operation will modify if the query selects multiple documents. findAndModify will modify the first document in the sort order specified by this argument.    remove <code>boolean</code>  Optional if update field exists. When <b><code>TRUE</code></b>, removes the selected document. The default is <b><code>FALSE</code></b>.    update <code>array</code>  Optional if remove field exists. Performs an update of the selected document.    new <code>boolean</code>  Optional. When <b><code>TRUE</code></b>, returns the modified document rather than the original. The findAndModify method ignores the new option for remove operations. The default is <b><code>FALSE</code></b>.    upsert <code>boolean</code>  Optional. Used in conjunction with the update field. When <b><code>TRUE</code></b>, the findAndModify command creates a new document if the query returns no documents. The default is false. In MongoDB 2.2, the findAndModify command returns <b><code>NULL</code></b> when upsert is <b><code>TRUE</code></b>.
		 * @return array <p>Returns the original document, or the modified document when new is set.</p>
		 * @link http://php.net/manual/en/mongocollection.findandmodify.php
		 * @since PECL mongo >=1.3.0
		 */
		public function findAndModify(array $query, array $update = NULL, array $fields = NULL, array $options = NULL): array {}

		/**
		 * Retrieve the full result document
		 * <p>Retrieves the full error result document.</p>
		 * @return array <p>The full result document as an array, including partial data if available and additional keys.</p>
		 * @link http://php.net/manual/en/mongoresultexception.getdocument.php
		 * @since PECL mongo >=1.3.0
		 */
		public function getDocument(): array {}
	}

	/**
	 * <p><b>MongoTimestamp</b> is an internal type used by MongoDB for replication and sharding. It consists of a 4-byte timestamp (i.e. seconds since the epoch) and a 4-byte increment. This type is not intended for storing time or date values (e.g. a "createdAt" field on a document).</p>
	 * <p><b>Note</b>:  Unless you are writing an application that interacts with MongoDB's replication oplog or sharding internals: stop, go directly to MongoDate, do not pass go, and do not collect 200 dollars. This is not the class you are looking for. </p>
	 * @link http://php.net/manual/en/class.mongotimestamp.php
	 * @since PECL mongo >=1.0.1
	 */
	class MongoTimestamp {

		public $sec = 0;

		public $inc = 0;

		/**
		 * Creates a new timestamp
		 * <p>Creates a new timestamp. If no parameters are given, the current time is used and the increment is automatically provided. The increment is set to 0 when the module is loaded and is incremented every time this constructor is called (without the $inc parameter passed in).</p>
		 * @param int $sec <p>Number of seconds since the epoch (i.e. 1 Jan 1970 00:00:00.000 UTC).</p>
		 * @param int $inc <p>Increment.</p>
		 * @return self <p>Returns this new timestamp.</p>
		 * @link http://php.net/manual/en/mongotimestamp.construct.php
		 * @since PECL mongo >= 1.0.1
		 */
		public function __construct(int $sec  = 'time()', int $inc = NULL) {}

		/**
		 * Returns a string representation of this timestamp
		 * <p>Returns the "sec" field of this timestamp.</p>
		 * @return string <p>The seconds since epoch represented by this timestamp.</p>
		 * @link http://php.net/manual/en/mongotimestamp.tostring.php
		 * @since PECL mongo >= 1.0.1
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>Constructs a batch of UPDATE operations. See MongoWriteBatch.</p>
	 * @link http://php.net/manual/en/class.mongoupdatebatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoUpdateBatch extends \MongoWriteBatch {

		/**
		 * Description
		 * <p>Constructs a batch of UPDATE operations. See MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>The MongoCollection to execute the batch on. Its write concern will be copied and used as the default write concern if none is given as <code>$write_options</code> or during <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $write_options <p>An array of Write Options.</p>keyvalue meaning  w (int|string)Write concern value wtimeout (int)Maximum time to wait for replication orderedDetermines if MongoDB must apply this batch in order. Ordered writes execute serially (i.e. one at a time) and execution will stop after the first error. Unordered writes may execute in parallel and execution will not stop after the first error. Defaults to <b><code>TRUE</code></b> j (bool)Wait for journaling on the primary. This value is discouraged, use WriteConcern instead fsync (bool)Wait for fsync on the primary. This value is discouraged, use WriteConcern instead
		 * @return self <p>A new MongoUpdateBatch.</p>
		 * @link http://php.net/manual/en/mongoupdatebatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function __construct(\MongoCollection $collection, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link http://php.net/manual/en/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>MongoWriteBatch is the base class for the MongoInsertBatch, MongoUpdateBatch and MongoDeleteBatch classes.</p>
	 * <p>MongoWriteBatch allows you to "batch up" multiple operations (of same type) and shipping them all to MongoDB at the same time. This can be especially useful when operating on many documents at the same time to reduce roundtrips.</p>
	 * <p>Prior to version 1.5.0 of the driver it was possible to use <code>MongoCollection::batchInsert()</code>, however, as of 1.5.0 that method is now discouraged.</p>
	 * <p>Note: This class is only available when talking to MongoDB 2.6.0 (and later) servers. It will throw MongoProtocolException if attempting to use it on older MongoDB servers.</p>
	 * @link http://php.net/manual/en/class.mongowritebatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoWriteBatch {

		/**
		 * @var int <p>Create an Insert Write Batch</p>
		 * @link http://php.net/manual/en/class.mongowritebatch.php
		 */
		const COMMAND_INSERT = 1;

		/**
		 * @var int <p>Create an Update Write Batch</p>
		 * @link http://php.net/manual/en/class.mongowritebatch.php
		 */
		const COMMAND_UPDATE = 2;

		/**
		 * @var int <p>Create an Delete Write Batch</p>
		 * @link http://php.net/manual/en/class.mongowritebatch.php
		 */
		const COMMAND_DELETE = 3;

		/**
		 * Creates a new batch of write operations
		 * <p>Constructs a new MongoWriteBatch.</p><p><b>Note</b>:</p><p>This is a protected constructor. Please use one of the classes inheriting MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>The MongoCollection to execute the batch on. Its write concern will be copied and used as the default write concern if none is given as <code>$write_options</code> or during <code>MongoWriteBatch::execute()</code>.</p>
		 * @param string $batch_type <p>One of:</p><ul> <li><i>0</i> - make an MongoWriteBatch::COMMAND_INSERT batch</li> <li><i>1</i> - make an MongoWriteBatch::COMMAND_UPDATE batch</li> <li><i>2</i> - make a MongoWriteBatch::COMMAND_DELETE batch</li> </ul>
		 * @param array $write_options <p>An array of Write Options.</p>keyvalue meaning  w (int|string)Write concern value wtimeout (int)Maximum time to wait for replication orderedDetermines if MongoDB must apply this batch in order. Ordered writes execute serially (i.e. one at a time) and execution will stop after the first error. Unordered writes may execute in parallel and execution will not stop after the first error. Defaults to <b><code>TRUE</code></b> j (bool)Wait for journaling on the primary. This value is discouraged, use WriteConcern instead fsync (bool)Wait for fsync on the primary. This value is discouraged, use WriteConcern instead
		 * @return self <p>A new MongoWriteBatch of type <code>batch_type</code>.</p>
		 * @link http://php.net/manual/en/mongowritebatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		protected function __construct(\MongoCollection $collection, string $batch_type = NULL, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link http://php.net/manual/en/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Inserts multiple documents into this collection
		 * @param array $a <p>An array of arrays or objects. If any objects are used, they may not have protected or private properties.</p> <p><b>Note</b>:</p><p>If the documents to insert do not have an <i>_id</i> key or property, a new MongoId instance will be created and assigned to it. See <code>MongoCollection::insert()</code> for additional information on this behavior.</p>
		 * @param array $options <p>An array of options for the batch of insert operations. Currently available options include:</p><ul> <li> <p><i>"continueOnError"</i></p> <p>Boolean, defaults to <b><code>FALSE</code></b>. If set, the database will not stop processing a bulk insert if one fails (eg due to duplicate IDs). This makes bulk insert behave similarly to a series of single inserts, except that calling <code>MongoDB::lastError()</code> will have an error set if any insert fails, not just the last one. If multiple errors occur, only the most recent will be reported by <code>MongoDB::lastError()</code>.</p> <p><b>Note</b>:</p><p>Please note that <i>continueOnError</i> affects errors on the database side only. If you try to insert a document that has errors (for example it contains a key with an empty name), then the document is not even transferred to the database as the driver detects this error and bails out. <i>continueOnError</i> has no effect on errors detected in the documents by the driver.</p>  </li> <li><p><i>"fsync"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. If journaling is enabled, it works exactly like <i>"j"</i>. If journaling is not enabled, the write operation blocks until it is synced to database files on disk. If <b><code>TRUE</code></b>, an acknowledged insert is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If journaling is enabled, users are strongly encouraged to use the <i>"j"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"j"</i> simultaneously, as that will result in an error.</p></li> <li><p><i>"j"</i></p><p>Boolean, defaults to <b><code>FALSE</code></b>. Forces the write operation to block until it is synced to the journal on disk. If <b><code>TRUE</code></b>, an acknowledged write is implied and this option will override setting <i>"w"</i> to <i>0</i>.</p><p><b>Note</b>: If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option.</p></li> <li><p><i>"socketTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for socket communication. If the server does not respond within the timeout period, a MongoCursorTimeoutException will be thrown and there will be no way to determine if the server actually handled the write or not. A value of <i>-1</i> may be specified to block indefinitely. The default value for MongoClient is <i>30000</i> (30 seconds).</p></li> <li><p><i>"w"</i></p><p>See Write Concerns. The default value for MongoClient is <i>1</i>.</p></li> <li><p><i>"wTimeoutMS"</i></p><p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable when <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value for MongoClient is <i>10000</i> (ten seconds).</p></li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li><p><i>"safe"</i></p><p>Deprecated. Please use the write concern <i>"w"</i> option.</p></li> <li><p><i>"timeout"</i></p><p>Deprecated alias for <i>"socketTimeoutMS"</i>.</p></li> <li><p><i>"wtimeout"</i></p><p>Deprecated alias for <i>"wTimeoutMS"</i>.</p></li> </ul>
		 * @return mixed <p>If the <i>w</i> parameter is set to acknowledge the write, returns an associative array with the status of the inserts ("ok") and any error that may have occurred ("err"). Otherwise, returns <b><code>TRUE</code></b> if the batch insert was successfully sent, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongocollection.batchinsert.php
		 * @see MongoCollection::insert(), MongoCollection::update(), MongoCollection::find(), MongoCollection::remove()
		 * @since PECL mongo >=0.9.0
		 */
		public function batchInsert(array $a, array $options = array()) {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link http://php.net/manual/en/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>MongoWriteConcernException is thrown when a write fails. See Write Concerns for how to set failure thresholds.</p>
	 * <p>Prior to MongoDB 2.6.0, the getLastError command would determine whether a write failed.</p>
	 * @link http://php.net/manual/en/class.mongowriteconcernexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoWriteConcernException extends \MongoCursorException {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Get the error document
		 * <p>Returns the actual response from the server that was interperated as an error.</p>
		 * @return array <p>A MongoDB document, if available, as an array.</p>
		 * @link http://php.net/manual/en/mongowriteconcernexception.getdocument.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function getDocument(): array {}

		/**
		 * The hostname of the server that encountered the error
		 * <p>Returns the hostname of the server the query was sent too.</p>
		 * @return string <p>Returns the hostname, or <code>NULL</code> if the hostname is unknown.</p>
		 * @link http://php.net/manual/en/mongocursorexception.gethost.php
		 * @since PECL mongo >= 1.0.0
		 */
		public function getHost(): string {}
	}

	/**
	 * Deserializes a BSON object into a PHP array
	 * <p>This function is very beta and entirely useless for 99% of users. It is only useful if you're doing something weird, such as writing your own driver on top of the PHP driver.</p>
	 * @param string $bson <p>The BSON to be deserialized.</p>
	 * @return array <p>Returns the deserialized BSON object.</p>
	 * @link http://php.net/manual/en/function.bson-decode.php
	 * @since PECL mongo >=1.0.1
	 */
	function bson_decode(string $bson): array {}

	/**
	 * Serializes a PHP variable into a BSON string
	 * <p>This function is very beta and entirely useless for 99% of users. It is only useful if you're doing something weird, such as writing your own driver on top of the PHP driver.</p>
	 * @param mixed $anything <p>The variable to be serialized.</p>
	 * @return string <p>Returns the serialized string.</p>
	 * @link http://php.net/manual/en/function.bson-encode.php
	 * @since PECL mongo >=1.0.1
	 */
	function bson_encode($anything): string {}

	define('MONGO_STREAM_NOTIFY_IO_COMPLETED', null);

	define('MONGO_STREAM_NOTIFY_IO_PROGRESS', null);

	define('MONGO_STREAM_NOTIFY_IO_READ', null);

	define('MONGO_STREAM_NOTIFY_IO_WRITE', null);

	define('MONGO_STREAM_NOTIFY_LOG_BATCHINSERT', null);

	define('MONGO_STREAM_NOTIFY_LOG_CMD_DELETE', null);

	define('MONGO_STREAM_NOTIFY_LOG_CMD_INSERT', null);

	define('MONGO_STREAM_NOTIFY_LOG_CMD_UPDATE', null);

	define('MONGO_STREAM_NOTIFY_LOG_DELETE', null);

	define('MONGO_STREAM_NOTIFY_LOG_GETMORE', null);

	define('MONGO_STREAM_NOTIFY_LOG_INSERT', null);

	define('MONGO_STREAM_NOTIFY_LOG_KILLCURSOR', null);

	define('MONGO_STREAM_NOTIFY_LOG_QUERY', null);

	define('MONGO_STREAM_NOTIFY_LOG_RESPONSE_HEADER', null);

	define('MONGO_STREAM_NOTIFY_LOG_UPDATE', null);

	define('MONGO_STREAM_NOTIFY_LOG_WRITE_BATCH', null);

	define('MONGO_STREAM_NOTIFY_LOG_WRITE_REPLY', null);

	define('MONGO_STREAM_NOTIFY_TYPE_IO_INIT', null);

	define('MONGO_STREAM_NOTIFY_TYPE_LOG', null);

	/**
	 * Alias of <b><code>MONGO_SUPPORTS_STREAMS</code></b>
	 */
	define('MONGO_STREAMS', null);

	/**
	 * 1 when GSSAPI authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_GSSAPI', null);

	/**
	 * 1 when MongoDB-Challenge/Reponse authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_MONGODB_CR', null);

	/**
	 * 1 when x.509 authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_MONGODB_X509', null);

	/**
	 * 1 when PLAIN authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_PLAIN', null);

	/**
	 * 1 when OpenSSL is enabled and available.
	 */
	define('MONGO_SUPPORTS_SSL', null);

	/**
	 * 1 when compiled against PHP Streams (default since 1.4.0).
	 */
	define('MONGO_SUPPORTS_STREAMS', null);

	/**
	 * Current stability (alpha/beta/stable)
	 */
	define('MONGODB_STABILITY', null);

	/**
	 * x.y.z style version number of the extension
	 */
	define('MONGODB_VERSION', null);

}

namespace MongoDB\BSON {

	/**
	 * <p>BSON type for binary data (i.e. array of bytes). Binary values also have a subtype, which is used to indicate what kind of data is in the byte array. Subtypes from zero to 127 are predefined or reserved. Subtypes from 128-255 are user-defined.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
	 * @since mongodb >=1.0.0
	 */
	final class Binary implements \MongoDB\BSON\BinaryInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * @var integer <p>Generic binary data.</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_GENERIC = 0;

		/**
		 * @var integer <p>Function.</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_FUNCTION = 1;

		/**
		 * @var integer <p>Generic binary data (deprecated in favor of <b><code>MongoDB\BSON\Binary::TYPE_GENERIC</code></b>).</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_OLD_BINARY = 2;

		/**
		 * @var integer <p>Universally unique identifier (deprecated in favor of <b><code>MongoDB\BSON\Binary::TYPE_UUID</code></b>). When using this type, the Binary's data should be 16 bytes in length.</p> <p>Historically, other drivers encoded values with this type based on their language conventions (e.g. varying endianness), which makes it non-portable. The PHP driver applies no special handling for encoding or decoding data with this type.</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_OLD_UUID = 3;

		/**
		 * @var integer <p>Universally unique identifier. When using this type, the Binary's data should be 16 bytes in length and encoded according to RFC 4122.</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_UUID = 4;

		/**
		 * @var integer <p>MD5 hash. When using this type, the Binary's data should be 16 bytes in length.</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_MD5 = 5;

		/**
		 * @var integer <p>User-defined type. While types between 0 and 127 are predefined or reserved, types between 128 and 255 are user-defined and may be used for anything.</p>
		 * @link http://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_USER_DEFINED = 128;

		/**
		 * Construct a new Binary
		 * @param string $data <p>Binary data.</p>
		 * @param int $type <p>Unsigned 8-bit integer denoting the data's type.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-binary.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $data, int $type) {}

		/**
		 * Returns the Binary's data
		 * <p>This method is an alias of: <code>MongoDB\BSON\Binary::getData()</code>.</p>
		 * @return string <p>Returns the Binary's data.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binary.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Binary's data
		 * @return string <p>Returns the Binary's data.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binary.getdata.php
		 * @since mongodb >=1.0.0
		 */
		final public function getData(): string {}

		/**
		 * Returns the Binary's type
		 * @return int <p>Returns the Binary's type.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binary.gettype.php
		 * @since mongodb >=1.0.0
		 */
		final public function getType(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Binary.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-binary.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Binary
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Binary.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binary.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Binary
		 * @param string $serialized <p>The serialized MongoDB\BSON\Binary.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Binary.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binary.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Binary but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-binaryinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface BinaryInterface {

		/**
		 * Returns the BinaryInterface's data
		 * <p>This method is an alias of: <code>MongoDB\BSON\BinaryInterface::getData()</code>.</p>
		 * @return string <p>Returns the BinaryInterface's data.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binaryinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the BinaryInterface's data
		 * @return string <p>Returns the BinaryInterface's data.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binaryinterface.getdata.php
		 * @since mongodb >=1.3.0
		 */
		public function getData(): string;

		/**
		 * Returns the BinaryInterface's type
		 * @return int <p>Returns the BinaryInterface's type.</p>
		 * @link http://php.net/manual/en/mongodb-bson-binaryinterface.gettype.php
		 * @since mongodb >=1.3.0
		 */
		public function getType(): int;
	}

	/**
	 * <p>BSON type for the "DBPointer" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON DBPointer type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-dbpointer.php
	 * @since mongodb >=1.4.0
	 */
	final class DBPointer implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new DBPointer (unused)
		 * <p>MongoDB\BSON\DBPointer objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-dbpointer.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns an empty string
		 * @return string <p>Returns an empty string.</p>
		 * @link http://php.net/manual/en/mongodb-bson-dbpointer.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\DBPointer.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-dbpointer.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a DBPointer
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\DBPointer.</p>
		 * @link http://php.net/manual/en/mongodb-bson-dbpointer.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a DBPointer
		 * @param string $serialized <p>The serialized MongoDB\BSON\DBPointer.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\DBPointer.</p>
		 * @link http://php.net/manual/en/mongodb-bson-dbpointer.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>BSON type for the Decimal128 floating-point format, which supports numbers with up to 34 decimal digits (i.e. significant digits) and an exponent range of &minus;6143 to +6144.</p>
	 * <p>Unlike the double BSON type (i.e. <code>float</code> in PHP), which only stores an approximation of the decimal values, the decimal data type stores the exact value. For example, <i>MongoDB\BSON\Decimal128('9.99')</i> has a precise value of 9.99 where as a double 9.99 would have an approximate value of 9.9900000000000002131628&hellip;.</p>
	 * <p><b>Note</b>:  <b>MongoDB\BSON\Decimal128</b> is only compatible with MongoDB 3.4+. Attempting to use the BSON type with an earlier version of MongoDB will result in an error. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-decimal128.php
	 * @since mongodb >=1.2.0
	 */
	final class Decimal128 implements \MongoDB\BSON\Decimal128Interface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Decimal128
		 * <p><b>Note</b>:  MongoDB\BSON\Decimal128 is only compatible with MongoDB 3.4+. Attempting to use the BSON type with an earlier version of MongoDB will result in an error. </p>
		 * @param string $value <p>A decimal string.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-decimal128.construct.php
		 * @since mongodb >=1.2.0
		 */
		final public function __construct(string $value = NULL) {}

		/**
		 * Returns the string representation of this Decimal128
		 * @return string <p>Returns the string representation of this Decimal128.</p>
		 * @link http://php.net/manual/en/mongodb-bson-decimal128.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Decimal128.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-decimal128.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Decimal128
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Decimal128.</p>
		 * @link http://php.net/manual/en/mongodb-bson-decimal128.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Decimal128
		 * @param string $serialized <p>The serialized MongoDB\BSON\Decimal128.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Decimal128.</p>
		 * @link http://php.net/manual/en/mongodb-bson-decimal128.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Decimal128 but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-decimal128interface.php
	 * @since mongodb >=1.3.0
	 */
	interface Decimal128Interface {

		/**
		 * Returns the string representation of this Decimal128Interface
		 * @return string <p>Returns the string representation of this Decimal128Interface.</p>
		 * @link http://php.net/manual/en/mongodb-bson-decimal128interface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;
	}

	/**
	 * <p>BSON type for a 64-bit integer. This class cannot be instantiated and is only created during BSON decoding when a 64-bit integer cannot be represented as a PHP integer on a 32-bit platform. Versions of the driver before 1.5.0 would throw an exception when attempting to decode a 64-bit integer on a 32-bit platform.</p>
	 * <p>During BSON encoding, objects of this class will convert back to a 64-bit integer type. This allows 64-bit integers to be roundtripped through a 32-bit PHP environment without any loss of precision. The __toString() method allows the 64-bit integer value to be accessed as a string.</p>
	 * <p><b>Note</b>:  This class exists purely for 32-bit platforms. Applications on 64-bit platforms (i.e. <b><code>PHP_INT_SIZE</code></b> is 8) should never encounter this class during normal operation. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-int64.php
	 * @since mongodb >=1.5.0
	 */
	final class Int64 implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Int64 (unused)
		 * <p>MongoDB\BSON\Int64 objects are created through conversion from a 64-bit integer BSON type on a 32-bit platform and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-int64.construct.php
		 * @since mongodb >=1.5.0
		 */
		final private function __construct() {}

		/**
		 * Returns the string representation of this Int64
		 * @return string <p>Returns the string representation of this Int64.</p>
		 * @link http://php.net/manual/en/mongodb-bson-int64.tostring.php
		 * @since mongodb >=1.5.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Int64.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> function, which uses the canonical extended JSON format. This differs from other BSON classes, which use the driver-specific legacy extended JSON format (<code>MongoDB\BSON\toJSON()</code>), in order to ensure that the 64-bit integer value is correctly represented on 32-bit platforms. </p>
		 * @link http://php.net/manual/en/mongodb-bson-int64.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.5.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize an Int64
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Int64.</p>
		 * @link http://php.net/manual/en/mongodb-bson-int64.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.5.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize an Int64
		 * @param string $serialized <p>The serialized MongoDB\BSON\Int64.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Int64.</p>
		 * @link http://php.net/manual/en/mongodb-bson-int64.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.5.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>BSON type for Javascript code. An optional scope document may be specified that maps identifiers to values and defines the scope in which the code should be evaluated by the server.</p>
	 * <p><b>Note</b>:  This BSON type is mainly used when executing database commands that take a Javascript function as a parameter, such as mapReduce. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-javascript.php
	 * @since mongodb >=1.0.0
	 */
	final class Javascript implements \MongoDB\BSON\JavascriptInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Javascript
		 * @param string $code <p>Javascript code.</p>
		 * @param array|object $scope
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-javascript.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $code, $scope = NULL) {}

		/**
		 * Returns the Javascript's code
		 * <p>This method is an alias of: <code>MongoDB\BSON\Javascript::getCode()</code>.</p>
		 * @return string <p>Returns the Javascript's code.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascript.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Javascript's code
		 * @return string <p>Returns the Javascript's code.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascript.getcode.php
		 * @since mongodb >=1.2.0
		 */
		final public function getCode(): string {}

		/**
		 * Returns the Javascript's scope document
		 * @return object|null <p>Returns the Javascript's scope document.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascript.getscope.php
		 * @since mongodb >=1.2.0
		 */
		final public function getScope() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Javascript.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-javascript.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Javascript
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Javascript.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascript.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Javascript
		 * @param string $serialized <p>The serialized MongoDB\BSON\Javascript.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Javascript.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascript.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Javascript but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-javascriptinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface JavascriptInterface {

		/**
		 * Returns the JavascriptInterface's code
		 * <p>This method is an alias of: <code>MongoDB\BSON\JavascriptInterface::getCode()</code>.</p>
		 * @return string <p>Returns the JavascriptInterface's code.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascriptinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the JavascriptInterface's code
		 * @return string <p>Returns the JavascriptInterface's code.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascriptinterface.getcode.php
		 * @since mongodb >=1.3.0
		 */
		public function getCode(): string;

		/**
		 * Returns the JavascriptInterface's scope document
		 * @return object|null <p>Returns the JavascriptInterface's scope document.</p>
		 * @link http://php.net/manual/en/mongodb-bson-javascriptinterface.getscope.php
		 * @since mongodb >=1.3.0
		 */
		public function getScope();
	}

	/**
	 * <p>Special BSON type which compares higher than all other possible BSON element values.</p>
	 * <p><b>Note</b>:  This is an internal MongoDB type used for indexing and sharding. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-maxkey.php
	 * @since mongodb >=1.0.0
	 */
	final class MaxKey implements \MongoDB\BSON\MaxKeyInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new MaxKey
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-maxkey.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\MaxKey.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-maxkey.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a MaxKey
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\MaxKey.</p>
		 * @link http://php.net/manual/en/mongodb-bson-maxkey.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a MaxKey
		 * @param string $serialized <p>The serialized MongoDB\BSON\MaxKey.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\MaxKey.</p>
		 * @link http://php.net/manual/en/mongodb-bson-maxkey.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\MaxKey but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-maxkeyinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface MaxKeyInterface {
	}

	/**
	 * <p>Special BSON type which compares lower than all other possible BSON element values.</p>
	 * <p><b>Note</b>:  This is an internal MongoDB type used for indexing and sharding. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-minkey.php
	 * @since mongodb >=1.0.0
	 */
	final class MinKey implements \MongoDB\BSON\MinKeyInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new MinKey
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-minkey.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\MinKey.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-minkey.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a MinKey
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\MinKey.</p>
		 * @link http://php.net/manual/en/mongodb-bson-minkey.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a MinKey
		 * @param string $serialized <p>The serialized MongoDB\BSON\MinKey.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\MinKey.</p>
		 * @link http://php.net/manual/en/mongodb-bson-minkey.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\MinKey but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-minkeyinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface MinKeyInterface {
	}

	/**
	 * <p>BSON type for an ObjectId. The value consists of 12 bytes, where the first four bytes are a timestamp that reflect the ObjectId's creation. Specifically, the value consists of:</p>
	 * <p>In MongoDB, each document stored in a collection requires a unique <i>_id</i> field that acts as a primary key. If an inserted document omits the <i>_id</i> field, the driver automatically generates an ObjectId for the <i>_id</i> field.</p>
	 * <p>Using ObjectIds for the <i>_id</i> field provides the following additional benefits:</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-objectid.php
	 * @since mongodb >=1.0.0
	 */
	final class ObjectId implements \MongoDB\BSON\ObjectIdInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new ObjectId
		 * @param string $id <p>A 24-character hexadecimal string. If not provided, the driver will generate an ObjectId.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-objectid.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $id = NULL) {}

		/**
		 * Returns the hexidecimal representation of this ObjectId
		 * @return string <p>Returns the hexidecimal representation of this ObjectId.</p>
		 * @link http://php.net/manual/en/mongodb-bson-objectid.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the timestamp component of this ObjectId
		 * <p>The timestamp component of an ObjectId is its most significant 32 bits, which denotes the number of seconds since the Unix epoch. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>Note</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <i>"%u"</i> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the timestamp component of this ObjectId.</p>
		 * @link http://php.net/manual/en/mongodb-bson-objectid.gettimestamp.php
		 * @since mongodb >=1.2.0
		 */
		final public function getTimestamp(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\ObjectId.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-objectid.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize an ObjectId
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\ObjectId.</p>
		 * @link http://php.net/manual/en/mongodb-bson-objectid.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize an ObjectId
		 * @param string $serialized <p>The serialized MongoDB\BSON\ObjectId.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\ObjectId.</p>
		 * @link http://php.net/manual/en/mongodb-bson-objectid.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\ObjectId but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-objectidinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface ObjectIdInterface {

		/**
		 * Returns the hexidecimal representation of this ObjectIdInterface
		 * @return string <p>Returns the hexidecimal representation of this ObjectIdInterface.</p>
		 * @link http://php.net/manual/en/mongodb-bson-objectidinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the timestamp component of this ObjectIdInterface
		 * @return int <p>Returns the timestamp component of this ObjectIdInterface.</p>
		 * @link http://php.net/manual/en/mongodb-bson-objectidinterface.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		public function getTimestamp(): int;
	}

	/**
	 * <p>Classes may implement this interface to take advantage of automatic ODM (object document mapping) behavior in the driver. During serialization, the driver will inject a __pclass property containing the PHP class name into the data returned by <code>MongoDB\BSON\Serializable::bsonSerialize()</code>. During unserialization, the same __pclass property will then be used to infer the PHP class (independent of any type map configuration) to be constructed before <code>MongoDB\BSON\Unserializable::bsonUnserialize()</code> is invoked. See Persisting Data for additional information.</p>
	 * <p><b>Note</b>:  Even if <code>MongoDB\BSON\Serializable::bsonSerialize()</code> would return a sequential array, injection of the __pclass property will cause the object to be serialized as a BSON document. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-persistable.php
	 * @since mongodb >=1.0.0
	 */
	interface Persistable {

		/**
		 * Provides an array or document to serialize as BSON
		 * <p>Called during serialization of the object to BSON. The method must return an <code>array</code> or <b>stdClass</b>.</p><p>Root documents (e.g. a <code>MongoDB\BSON\Serializable</code> passed to <code>MongoDB\BSON\fromPHP()</code>) will always be serialized as a BSON document. For field values, associative arrays and <b>stdClass</b> instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at <i>0</i>) will be serialized as a BSON array.</p><p>Users are encouraged to include an _id property (e.g. a MongoDB\BSON\ObjectId initialized in your constructor) when returning data for a BSON root document; otherwise, the driver or database will need to generate a MongoDB\BSON\ObjectId when inserting or upserting the document, respectively.</p>
		 * @return array|object <p>An <code>array</code> or <b>stdClass</b> to be serialized as a BSON array or document.</p>
		 * @link http://php.net/manual/en/mongodb-bson-serializable.bsonserialize.php
		 * @see MongoDB\BSON\Unserializable::bsonUnserialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonSerialize();

		/**
		 * Constructs the object from a BSON array or document
		 * <p>Called during unserialization of the object from BSON. The properties of the BSON array or document will be passed to the method as an <code>array</code>.</p><p>Remember to check for an _id property when handling data from a BSON document.</p><p><b>Note</b>:  This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method. </p>
		 * @param array $data <p>Properties within the BSON array or document.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link http://php.net/manual/en/mongodb-bson-unserializable.bsonunserialize.php
		 * @see MongoDB\BSON\Serializable::bsonSerialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonUnserialize(array $data): void;
	}

	/**
	 * <p>BSON type for a regular expression pattern and optional flags.</p>
	 * <p><b>Note</b>:  This BSON type is mainly used when querying the database. Alternatively, the $regex query operator may be used. </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-regex.php
	 * @since mongodb >=1.0.0
	 */
	final class Regex implements \MongoDB\BSON\RegexInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Regex
		 * @param string $pattern <p>The regular expression pattern.</p> <p><b>Note</b>:  The pattern should not be wrapped with delimiter characters. </p>
		 * @param string $flags <p>The regular expression flags. Characters in this argument will be sorted alphabetically.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-regex.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $pattern, string $flags = "") {}

		/**
		 * Returns the string representation of this Regex
		 * @return string <p>Returns the string representation of this Regex.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regex.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Regex's flags
		 * @return string <p>Returns the Regex's flags.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regex.getflags.php
		 * @since mongodb >=1.0.0
		 */
		final public function getFlags(): string {}

		/**
		 * Returns the Regex's pattern
		 * @return string <p>Returns the Regex's pattern.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regex.getpattern.php
		 * @since mongodb >=1.0.0
		 */
		final public function getPattern(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Regex.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-regex.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Regex
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Regex.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regex.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Regex
		 * @param string $serialized <p>The serialized MongoDB\BSON\Regex.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Regex.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regex.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Regex but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-regexinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface RegexInterface {

		/**
		 * Returns the string representation of this RegexInterface
		 * @return string <p>Returns the string representation of this RegexInterface.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regexinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the RegexInterface's flags
		 * @return string <p>Returns the RegexInterface's flags.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regexinterface.getflags.php
		 * @since mongodb >=1.3.0
		 */
		public function getFlags(): string;

		/**
		 * Returns the RegexInterface's pattern
		 * @return string <p>Returns the RegexInterface's pattern.</p>
		 * @link http://php.net/manual/en/mongodb-bson-regexinterface.getpattern.php
		 * @since mongodb >=1.3.0
		 */
		public function getPattern(): string;
	}

	/**
	 * <p>Classes that implement this interface may return data to be serialized as a BSON array or document in lieu of the object's public properties.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-serializable.php
	 * @since mongodb >=1.0.0
	 */
	interface Serializable {

		/**
		 * Provides an array or document to serialize as BSON
		 * <p>Called during serialization of the object to BSON. The method must return an <code>array</code> or <b>stdClass</b>.</p><p>Root documents (e.g. a <code>MongoDB\BSON\Serializable</code> passed to <code>MongoDB\BSON\fromPHP()</code>) will always be serialized as a BSON document. For field values, associative arrays and <b>stdClass</b> instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at <i>0</i>) will be serialized as a BSON array.</p><p>Users are encouraged to include an _id property (e.g. a MongoDB\BSON\ObjectId initialized in your constructor) when returning data for a BSON root document; otherwise, the driver or database will need to generate a MongoDB\BSON\ObjectId when inserting or upserting the document, respectively.</p>
		 * @return array|object <p>An <code>array</code> or <b>stdClass</b> to be serialized as a BSON array or document.</p>
		 * @link http://php.net/manual/en/mongodb-bson-serializable.bsonserialize.php
		 * @see MongoDB\BSON\Unserializable::bsonUnserialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonSerialize();
	}

	/**
	 * <p>BSON type for the "Symbol" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON symbol type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-symbol.php
	 * @since mongodb >=1.4.0
	 */
	final class Symbol implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Symbol (unused)
		 * <p>MongoDB\BSON\Symbol objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-symbol.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns the Symbol as a string
		 * @return string <p>Returns the string representation of this Symbol.</p>
		 * @link http://php.net/manual/en/mongodb-bson-symbol.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Symbol.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-symbol.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Symbol
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Symbol.</p>
		 * @link http://php.net/manual/en/mongodb-bson-symbol.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Symbol
		 * @param string $serialized <p>The serialized MongoDB\BSON\Symbol.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Symbol.</p>
		 * @link http://php.net/manual/en/mongodb-bson-symbol.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Represents a BSON timestamp, The value consists of a 4-byte timestamp (i.e. seconds since the epoch) and a 4-byte increment.</p>
	 * <p><b>Note</b>:  This is an internal MongoDB type used for replication and sharding. It is not intended for general date storage (MongoDB\BSON\UTCDateTime should be used instead). </p>
	 * @link http://php.net/manual/en/class.mongodb-bson-timestamp.php
	 * @since mongodb >=1.0.0
	 */
	final class Timestamp implements \MongoDB\BSON\TimestampInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Timestamp
		 * @param int $increment <p>32-bit integer denoting the incrementing ordinal for operations within a given second.</p>
		 * @param int $timestamp <p>32-bit integer denoting seconds since the Unix epoch.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(int $increment, int $timestamp) {}

		/**
		 * Returns the string representation of this Timestamp
		 * @return string <p>Returns the string representation of this Timestamp.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the increment component of this Timestamp
		 * <p>The increment component of a Timestamp is its least significant 32 bits, whichs denotes the incrementing ordinal for operations within a given second. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>Note</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <i>"%u"</i> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the increment component of this Timestamp.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.getincrement.php
		 * @since mongodb >=1.3.0
		 */
		final public function getIncrement(): int {}

		/**
		 * Returns the timestamp component of this Timestamp
		 * <p>The timestamp component of a Timestamp is its most significant 32 bits, which denotes the number of seconds since the Unix epoch. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>Note</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <i>"%u"</i> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the timestamp component of this Timestamp.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		final public function getTimestamp(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Timestamp.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Timestamp
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Timestamp.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Timestamp
		 * @param string $serialized <p>The serialized MongoDB\BSON\Timestamp.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Timestamp.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestamp.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Timestamp but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-timestampinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface TimestampInterface {

		/**
		 * Returns the string representation of this TimestampInterface
		 * @return string <p>Returns the string representation of this TimestampInterface.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestampinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the increment component of this TimestampInterface
		 * @return int <p>Returns the increment component of this TimestampInterface.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestampinterface.getincrement.php
		 * @since mongodb >=1.3.0
		 */
		public function getIncrement(): int;

		/**
		 * Returns the timestamp component of this TimestampInterface
		 * @return int <p>Returns the timestamp component of this TimestampInterface.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link http://php.net/manual/en/mongodb-bson-timestampinterface.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		public function getTimestamp(): int;
	}

	/**
	 * <p>Abstract base interface that should not be implemented directly.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-type.php
	 * @since mongodb >=1.0.0
	 */
	interface Type {
	}

	/**
	 * <p>BSON type for the "Undefined" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON undefined type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-undefined.php
	 * @since mongodb >=1.4.0
	 */
	final class Undefined implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Undefined (unused)
		 * <p>MongoDB\BSON\Undefined objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-undefined.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns an empty string
		 * @return string <p>Returns an empty string.</p>
		 * @link http://php.net/manual/en/mongodb-bson-undefined.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Undefined.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-undefined.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Undefined
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Undefined.</p>
		 * @link http://php.net/manual/en/mongodb-bson-undefined.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Undefined
		 * @param string $serialized <p>The serialized MongoDB\BSON\Undefined.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Undefined.</p>
		 * @link http://php.net/manual/en/mongodb-bson-undefined.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Classes that implement this interface may be specified in a type map for unserializing BSON arrays and documents (both root and embedded).</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-unserializable.php
	 * @since mongodb >=1.0.0
	 */
	interface Unserializable {

		/**
		 * Constructs the object from a BSON array or document
		 * <p>Called during unserialization of the object from BSON. The properties of the BSON array or document will be passed to the method as an <code>array</code>.</p><p>Remember to check for an _id property when handling data from a BSON document.</p><p><b>Note</b>:  This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method. </p>
		 * @param array $data <p>Properties within the BSON array or document.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link http://php.net/manual/en/mongodb-bson-unserializable.bsonunserialize.php
		 * @see MongoDB\BSON\Serializable::bsonSerialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonUnserialize(array $data): void;
	}

	/**
	 * <p>Represents a BSON date. The value is a 64-bit integer that represents the number of milliseconds since the Unix epoch (Jan 1, 1970). Negative values represent dates before 1970.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-utcdatetime.php
	 * @since mongodb >=1.0.0
	 */
	final class UTCDateTime implements \MongoDB\BSON\UTCDateTimeInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new UTCDateTime
		 * @param int|float|string|\DateTimeInterface $milliseconds
		 * @return self
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetime.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($milliseconds = NULL) {}

		/**
		 * Returns the string representation of this UTCDateTime
		 * @return string <p>Returns the string representation of this UTCDateTime.</p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetime.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\UTCDateTime.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetime.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a UTCDateTime
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\UTCDateTime.</p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetime.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Returns the DateTime representation of this UTCDateTime
		 * @return DateTime <p>Returns the DateTime representation of this UTCDateTime. The returned DateTime will use the UTC time zone.</p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetime.todatetime.php
		 * @since mongodb >=1.0.0
		 */
		final public function toDateTime(): \DateTime {}

		/**
		 * Unserialize a UTCDateTime
		 * @param string $serialized <p>The serialized MongoDB\BSON\UTCDateTime.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\UTCDateTime.</p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetime.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\UTCDateTime but may also be used for type-hinting and userland classes.</p>
	 * @link http://php.net/manual/en/class.mongodb-bson-utcdatetimeinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface UTCDateTimeInterface {

		/**
		 * Returns the string representation of this UTCDateTimeInterface
		 * @return string <p>Returns the string representation of this UTCDateTimeInterface.</p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetimeinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the DateTime representation of this UTCDateTimeInterface
		 * @return DateTime <p>Returns the DateTime representation of this UTCDateTimeInterface. The returned DateTime should use the UTC time zone.</p>
		 * @link http://php.net/manual/en/mongodb-bson-utcdatetimeinterface.todatetime.php
		 * @since mongodb >=1.3.0
		 */
		public function toDateTime(): \DateTime;
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\BulkWrite</b> collects one or more write operations that should be sent to the server. After adding any number of insert, update, and delete operations, the collection may be executed via <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
	 * <p>Write operations may either be ordered (default) or unordered. Ordered write operations are sent to the server, in the order provided, for serial execution. If a write fails, any remaining operations will be aborted. Unordered operations are sent to the server in an arbitrary order where they may be executed in parallel. Any errors that occur are reported after all operations have been attempted.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-bulkwrite.php
	 * @since mongodb >=1.0.0
	 */
	final class BulkWrite implements \Countable {

		/**
		 * Create a new BulkWrite
		 * <p>Constructs a new MongoDB\Driver\BulkWrite, which is a mutable object to which one or more write operations may be added. The write(s) may then be executed with <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     bypassDocumentValidation <code>boolean</code>  <p>If <b><code>TRUE</code></b>, allows insert and update operations to circumvent document level validation.</p> <p>This option is available in MongoDB 3.2+ and is ignored for older server versions, which do not support document level validation.</p>  <b><code>FALSE</code></b>   ordered <code>boolean</code>  Ordered operations (<b><code>TRUE</code></b>) are executed serially on the MongoDB server, while unordered operations (<b><code>FALSE</code></b>) are sent to the server in an arbitrary order and may be executed in parallel.  <b><code>TRUE</code></b>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-bulkwrite.construct.php
		 * @since mongodb >=1.0.0
		 */
		public function __construct(array $options = NULL) {}

		/**
		 * Count number of write operations in the bulk
		 * <p>Returns the number of write operations added to the MongoDB\Driver\BulkWrite object.</p>
		 * @return int <p>Returns number of write operations added to the MongoDB\Driver\BulkWrite object.</p>
		 * @link http://php.net/manual/en/mongodb-driver-bulkwrite.count.php
		 * @since mongodb >=1.0.0
		 */
		public function count(): int {}

		/**
		 * Add a delete operation to the bulk
		 * <p>Adds a delete operation to the MongoDB\Driver\BulkWrite.</p>
		 * @param array|object $filter
		 * @param array $deleteOptions <p></p> <b>deleteOptions</b>   Option Type Description Default     collation array|object  <p>Collation allows users to specify language-specific rules for string comparison, such as rules for lettercase and accent marks. When specifying collation, the <i>"locale"</i> field is mandatory; all other collation fields are optional. For descriptions of the fields, see Collation Document.</p> <p>If the collation is unspecified but the collection has a default collation, the operation uses the collation specified for the collection. If no collation is specified for the collection or for the operation, MongoDB uses the simple binary comparison used in prior versions for string comparisons.</p> <p>This option is available in MongoDB 3.4+ and will result in an exception at execution time if specified for an older server version.</p>    limit <code>boolean</code> Delete all matching documents (<b><code>FALSE</code></b>), or only the first matching document (<b><code>TRUE</code></b>) <b><code>FALSE</code></b>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-bulkwrite.delete.php
		 * @since mongodb >=1.0.0
		 */
		public function delete($filter, array $deleteOptions = NULL): void {}

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>The write(s) to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>Returns MongoDB\Driver\WriteResult on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Add an insert operation to the bulk
		 * <p>Adds an insert operation to the MongoDB\Driver\BulkWrite.</p>
		 * @param array|object $document
		 * @return mixed <p>Returns the <i>_id</i> of the inserted document. If the <code>document</code> did not have an <i>_id</i>, the MongoDB\BSON\ObjectId generated for the insert will be returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-bulkwrite.insert.php
		 * @since mongodb >=1.0.0
		 */
		public function insert($document) {}

		/**
		 * Add an update operation to the bulk
		 * <p>Adds an update operation to the MongoDB\Driver\BulkWrite.</p>
		 * @param array|object $filter
		 * @param array|object $newObj
		 * @param array $updateOptions <p></p> <b>updateOptions</b>   Option Type Description Default     arrayFilters array|object  <p>An array of filter documents that determines which array elements to modify for an update operation on an array field. See Specify arrayFilters for Array Update Operations in the MongoDB manual for more information.</p> <p>This option is available in MongoDB 3.6+ and will result in an exception at execution time if specified for an older server version.</p>    collation array|object  <p>Collation allows users to specify language-specific rules for string comparison, such as rules for lettercase and accent marks. When specifying collation, the <i>"locale"</i> field is mandatory; all other collation fields are optional. For descriptions of the fields, see Collation Document.</p> <p>If the collation is unspecified but the collection has a default collation, the operation uses the collation specified for the collection. If no collation is specified for the collection or for the operation, MongoDB uses the simple binary comparison used in prior versions for string comparisons.</p> <p>This option is available in MongoDB 3.4+ and will result in an exception at execution time if specified for an older server version.</p>    multi <code>boolean</code>  Update only the first matching document if <b><code>FALSE</code></b>, or all matching documents <b><code>TRUE</code></b>. This option cannot be <b><code>TRUE</code></b> if <code>newObj</code> is a replacement document.  <b><code>FALSE</code></b>   upsert <code>boolean</code>  If <code>filter</code> does not match an existing document, insert a <i>single</i> document. The document will be created from <code>newObj</code> if it is a replacement document (i.e. no update operators); otherwise, the operators in <code>newObj</code> will be applied to <code>filter</code> to create the new document.  <b><code>FALSE</code></b>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-bulkwrite.update.php
		 * @since mongodb >=1.0.0
		 */
		public function update($filter, $newObj, array $updateOptions = NULL): void {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Command</b> class is a value object that represents a database command.</p>
	 * <p>To provide "Command Helpers" the <b>MongoDB\Driver\Command</b> object should be composed.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-command.php
	 * @since mongodb >=1.0.0
	 */
	final class Command {

		/**
		 * Create a new Command
		 * <p>Constructs a new MongoDB\Driver\Command, which is an immutable value object that represents a database command. The command may then be executed with <code>MongoDB\Driver\Manager::executeCommand()</code>.</p><p>The complete command document, which includes the command name and its options, should be expressed in the <code>document</code> parameter. The <code>commandOptions</code> parameter is only used to specify options related to the execution of the command and the resulting MongoDB\Driver\Cursor.</p>
		 * @param array|object $document <p>The complete command document, which will be sent to the server.</p>
		 * @param array $commandOptions <p><b>Note</b>:  Do not use this parameter to specify options described in the command's reference in the MongoDB manual. This parameter should only be used for the options explicitly listed below. </p> <p></p> <b>commandOptions</b>   Option Type Description     maxAwaitTimeMS <code>integer</code>  <p>Positive integer denoting the time limit in milliseconds for the server to block a getMore operation if no data is available. This option should only be used in conjunction with commands that return a tailable cursor (e.g. Change Streams).</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-command.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($document, array $commandOptions = NULL) {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Cursor</b> class encapsulates the results of a MongoDB command or query and may be returned by <code>MongoDB\Driver\Manager::executeCommand()</code> or <code>MongoDB\Driver\Manager::executeQuery()</code>, respectively.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-cursor.php
	 * @since mongodb >=1.0.0
	 */
	final class Cursor implements \Traversable {

		/**
		 * Create a new Cursor (not used)
		 * <p>MongoDB\Driver\Cursor objects are returned as the result of an executed command or query and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-cursor.construct.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeQuery(), MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * Execute a database command
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method applies no special logic to the command. Although this method accepts <i>"readConcern"</i> and <i>"writeConcern"</i> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executecommand.php
		 * @see MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the query on that server. By default, the read preference from the MongoDB Connection URI will be used.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\Query $query <p>The query to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executequery.php
		 * @see MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Returns the ID for this cursor
		 * <p>Returns the MongoDB\Driver\CursorId associated with this cursor. A cursor ID uniquely identifies the cursor on the server.</p>
		 * @return MongoDB\Driver\CursorId <p>Returns the MongoDB\Driver\CursorId for this cursor.</p>
		 * @link http://php.net/manual/en/mongodb-driver-cursor.getid.php
		 * @see MongoDB\Driver\CursorId::__toString()
		 * @since mongodb >=1.0.0
		 */
		final public function getId(): \MongoDB\Driver\CursorId {}

		/**
		 * Returns the server associated with this cursor
		 * <p>Returns the MongoDB\Driver\Server associated with this cursor. This is the server that executed the MongoDB\Driver\Query or MongoDB\Driver\Command.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server associated with this cursor.</p>
		 * @link http://php.net/manual/en/mongodb-driver-cursor.getserver.php
		 * @since mongodb >=1.0.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Checks if the cursor may have additional results
		 * <p>Checks whether the cursor may have additional results available to read. A cursor is initially "alive" but may become "dead" for any of the following reasons:</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if additional results are not available, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-cursor.isdead.php
		 * @since mongodb >=1.0.0
		 */
		final public function isDead(): bool {}

		/**
		 * Sets a type map to use for BSON unserialization
		 * <p>Sets the type map configuration to use when unserializing the BSON results into PHP values.</p>
		 * @param array $typemap
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-cursor.settypemap.php
		 * @since mongodb >=1.0.0
		 */
		final public function setTypeMap(array $typemap): void {}

		/**
		 * Returns an array containing all results for this cursor
		 * <p>Iterates the cursor and returns its results in an array. <code>MongoDB\Driver\Cursor::setTypeMap()</code> may be used to control how documents are unserialized into PHP values.</p>
		 * @return array <p>Returns an <code>array</code> containing all results for this cursor.</p>
		 * @link http://php.net/manual/en/mongodb-driver-cursor.toarray.php
		 * @see MongoDB\Driver\Cursor::setTypeMap()
		 * @since mongodb >=1.0.0
		 */
		final public function toArray(): array {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\CursorID</b> class is a value object that represents a cursor ID. Instances of this class are returned by <code>MongoDB\Driver\Cursor::getId()</code>.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-cursorid.php
	 * @since mongodb >=1.0.0
	 */
	final class CursorId {

		/**
		 * Create a new CursorId (not used)
		 * <p>MongoDB\Driver\CursorId objects are returned from <code>MongoDB\Driver\Cursor::getId()</code> and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-cursorid.construct.php
		 * @see MongoDB\Driver\Cursor::getId()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * String representation of the cursor ID
		 * <p>Returns the <code>string</code> representation of the cursor ID.</p>
		 * @return string <p>Returns the <code>string</code> representation of the cursor ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-cursorid.tostring.php
		 * @see MongoDB\Driver\Cursor::getId()
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}
	}

}

namespace MongoDB\Driver\Exception {

	/**
	 * <p>Thrown when the driver fails to authenticate with the server.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-authenticationexception.php
	 * @since mongodb >= 1.0.0
	 */
	class AuthenticationException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a bulk write operation fails.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-bulkwriteexception.php
	 * @since mongodb >= 1.0.0
	 */
	class BulkWriteException extends \MongoDB\Driver\Exception\WriteException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult associated with the failed write operation.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-writeexception.php#mongodb-driver-exception-writeexception.props.writeresult
		 */
		protected $writeResult;

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns the WriteResult for the failed write operation
		 * <p>Returns the MongoDB\Driver\WriteResult for the failed write operation. The <code>MongoDB\Driver\WriteResult::getWriteErrors()</code> and <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code> methods may be used to get more details about the failure.</p>
		 * @return MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult for the failed write operation.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeexception.getwriteresult.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >= 1.0.0
		 */
		final public function getWriteResult(): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a command fails.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-commandexception.php
	 * @since mongodb >= 1.5.0
	 */
	class CommandException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var object <p>The result document associated with the failed command.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-commandexception.php#mongodb-driver-exception-commandexception.props.resultdocument
		 */
		protected $resultDocument;

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Returns the result document for the failed command
		 * <p>Returns the result document for the failed command.</p>
		 * @return object <p>The result document for the failed command.</p>
		 * @link http://php.net/manual/en/mongodb-driver-commandexception.getresultdocument.php
		 * @see MongoDB\Driver\Manager::executeCommand()
		 * @since mongodb >= 1.5.0
		 */
		final public function getResultDocument(): object {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown when the driver fails to establish a database connection.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-connectionexception.php
	 * @since mongodb >= 1.0.0
	 */
	class ConnectionException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to establish a database connection within a specified time limit (connectTimeoutMS) or server selection fails (serverSelectionTimeoutMS).</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-connectiontimeoutexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class ConnectionTimeoutException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Common interface for all driver exceptions. This may be used to catch only exceptions originating from the driver itself.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-exception.php
	 * @since mongodb >= 1.0.0
	 */
	interface Exception {
	}

	/**
	 * <p>Thrown when a query or command fails to complete within a specified time limit (e.g. maxTimeMS).</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-executiontimeoutexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class ExecutionTimeoutException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a driver method is given invalid arguments (e.g. invalid option types).</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-invalidargumentexception.php
	 * @since mongodb >= 1.0.0
	 */
	class InvalidArgumentException extends \InvalidArgumentException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Thrown when the driver is incorrectly used (e.g. rewinding a cursor).</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-logicexception.php
	 * @since mongodb >= 1.0.0
	 */
	class LogicException extends \LogicException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Thrown when the driver encounters a runtime error (e.g. internal error from libmongoc).</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php
	 * @since mongodb >= 1.0.0
	 */
	class RuntimeException extends \RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown by the server. The code of this exception and its subclasses will correspond to the original error code from the server.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-serverexception.php
	 * @since mongodb >= 1.5.0
	 */
	class ServerException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to establish an SSL connection with the server.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-sslconnectionexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class SSLConnectionException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver encounters an unexpected value (e.g. during BSON serialization or deserialization).</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-unexpectedvalueexception.php
	 * @since mongodb >= 1.0.0
	 */
	class UnexpectedValueException extends \UnexpectedValueException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Base class for exceptions thrown by a failed write operation. The exception encapsulates a MongoDB\Driver\WriteResult object.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-exception-writeexception.php
	 * @since mongodb >= 1.0.0
	 */
	abstract class WriteException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult associated with the failed write operation.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-writeexception.php#mongodb-driver-exception-writeexception.props.writeresult
		 */
		protected $writeResult;

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns the WriteResult for the failed write operation
		 * <p>Returns the MongoDB\Driver\WriteResult for the failed write operation. The <code>MongoDB\Driver\WriteResult::getWriteErrors()</code> and <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code> methods may be used to get more details about the failure.</p>
		 * @return MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult for the failed write operation.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeexception.getwriteresult.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >= 1.0.0
		 */
		final public function getWriteResult(): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link http://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\Manager</b> is the main entry point to the extension. It is responsible for maintaining connections to MongoDB (be it standalone server, replica set, or sharded cluster).</p>
	 * <p>No connection to MongoDB is made upon instantiating the Manager. This means the <b>MongoDB\Driver\Manager</b> can always be constructed, even though one or more MongoDB servers are down.</p>
	 * <p>Any write or query can throw connection exceptions as connections are created lazily. A MongoDB server may also become unavailable during the life time of the script. It is therefore important that all actions on the Manager to be wrapped in try/catch statements.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-manager.php
	 * @since mongodb >=1.0.0
	 */
	final class Manager {

		/**
		 * Create new MongoDB Manager
		 * <p>Constructs a new MongoDB\Driver\Manager object with the specified options.</p><p><b>Note</b>:  Per the Server Discovery and Monitoring Specification, this constructor performs no I/O. Connections will be initialized on demand, when the first operation is executed. </p><p><b>Note</b>:  On Unix platforms, the MongoDB driver is sensitive to scripts that use the fork() system call without also calling exec(). Users are advised not to re-use MongoDB\Driver\Manager instances in a forked child process. </p>
		 * @param string $uri <p>A mongodb:// connection URI:</p> <pre>mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[database][&#63;options]]</pre>   <p>For details on supported options, see Connection String Options in the MongoDB manual. Connection pool options are not supported, as the PHP driver does not implement connection pools.</p> <p>The <code>uri</code> is a URL, hence any special characters in its components need to be URL encoded according to RFC 3986. This is particularly relevant to the username and password, which can often include special characters such as <i>@</i>, <i>:</i>, or <i>%</i>. When connecting via a Unix domain socket, the socket path may contain special characters such as slashes and must be encoded. The <code>rawurlencode()</code> function may be used to encode constituent parts of the URI.</p>
		 * @param array $uriOptions <p>Additional connection string options, which will overwrite any options with the same name in the <code>uri</code> parameter.</p> <p></p> <b>uriOptions</b>   Option Type Description     appname <code>string</code>  <p>MongoDB 3.4+ has the ability to annotate connections with metadata provided by the connecting client. This metadata is included in the server's logs upon establishing a connection and also recorded in slow query logs when database profiling is enabled.</p> <p>This option may be used to specify an application name, which will be included in the metadata. The value cannot exceed 128 characters in length.</p>    authMechanism <code>string</code>  <p>The authentication mechanism that MongoDB will use to authenticate the connection. For additional details and a list of supported values, see Authentication Options in the MongoDB manual.</p>    authMechanismProperties <code>array</code>  <p>Properties for the selected authentication mechanism. For additional details and a list of supported properties, see the Driver Authentication Specification.</p> <p><b>Note</b>:  When not specified in the URI string, this option is expressed as an array of key/value pairs. The keys and values in this array should be strings. </p>    authSource <code>string</code>  <p>The database name associated with the user's credentials. Defaults to the database component of the connection URI.</p> <p>For authentication mechanisms that delegate credential storage to other services (e.g. GSSAPI), this should be <i>"$external"</i>.</p>    canonicalizeHostname <code>boolean</code>  <p>If <b><code>TRUE</code></b>, the driver will resolve the real hostname for the server IP address before authenticating via SASL. Some underlying GSSAPI layers already do this, but the functionality may be disabled in their config (e.g. <i>krb.conf</i>). Defaults to <b><code>FALSE</code></b>.</p> <p>This option is a deprecated alias for the <i>"CANONICALIZE_HOST_NAME"</i> property of the <i>"authMechanismProperties"</i> URI option.</p>    compressors <code>string</code>  <p>A prioritized, comma-delimited list of compressors that the client wants to use. Messages are only compressed if the client and server share any compressors in common, and the compressor used in each direction will depend on the individual configuration of the server or driver. See the Driver Compression Specification for more information.</p>    connectTimeoutMS <code>integer</code>  <p>The time in milliseconds to attempt a connection before timing out. Defaults to 10,000 milliseconds.</p>    gssapiServiceName <code>string</code>  <p>Set the Kerberos service name when connecting to Kerberized MongoDB instances. This value must match the service name set on MongoDB instances (i.e. saslServiceName server parameter). Defaults to <i>"mongodb"</i>.</p> <p>This option is a deprecated alias for the <i>"SERVICE_NAME"</i> property of the <i>"authMechanismProperties"</i> URI option.</p>    heartbeatFrequencyMS <code>integer</code>  <p>Specifies the interval in milliseconds between the driver's checks of the MongoDB topology, counted from the end of the previous check until the beginning of the next one. Defaults to 60,000 milliseconds.</p> <p>Per the Server Discovery and Monitoring Specification, this value cannot be less than 500 milliseconds.</p>    journal <code>boolean</code>  <p>Corresponds to the default write concern's <code>journal</code> parameter. If <b><code>TRUE</code></b>, writes will require acknowledgement from MongoDB that the operation has been written to the journal. For details, see MongoDB\Driver\WriteConcern.</p>    localThresholdMS <code>integer</code>  <p>The size in milliseconds of the latency window for selecting among multiple suitable MongoDB instances while resolving a read preference. Defaults to 15 milliseconds.</p>    maxStalenessSeconds <code>integer</code>  <p>Corresponds to the read preference's <i>"maxStalenessSeconds"</i>. Specifies, in seconds, how stale a secondary can be before the client stops using it for read operations. By default, there is no maximum staleness and clients will not consider a secondary&rsquo;s lag when choosing where to direct a read operation. For details, see MongoDB\Driver\ReadPreference.</p> <p>If specified, the max staleness must be a signed 32-bit integer greater than or equal to <b><code>MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</code></b> (i.e. 90 seconds).</p>    password <code>string</code>  The password for the user being authenticated. This option is useful if the password contains special characters, which would otherwise need to be URL encoded for the connection URI.    readConcernLevel <code>string</code>  Corresponds to the read concern's <code>level</code> parameter. Specifies the level of read isolation. For details, see MongoDB\Driver\ReadConcern.    readPreference <code>string</code>  <p>Corresponds to the read preferences's <code>mode</code> parameter. Defaults to <i>"primary"</i>. For details, see MongoDB\Driver\ReadPreference.</p>    readPreferenceTags <code>array</code>  <p>Corresponds to the read preferences's <code>tagSets</code> parameter. Tag sets allow you to target read operations to specific members of a replica set. For details, see MongoDB\Driver\ReadPreference.</p> <p><b>Note</b>:  When not specified in the URI string, this option is expressed as an array consistent with the format expected by <code>MongoDB\Driver\ReadPreference::__construct()</code>. </p>    replicaSet <code>string</code>  <p>Specifies the name of the replica set.</p>    retryWrites <code>boolean</code>  <p>If <b><code>TRUE</code></b>, the driver will automatically retry certain write operations that fail due to transient network errors or replica set elections. Defaults to <b><code>FALSE</code></b>.</p> <p>See Retryable Writes in the MongoDB manual for more information.</p>    safe <code>boolean</code>  <p>If <b><code>TRUE</code></b>, specifies <i>1</i> for the default write concern's <code>w</code> parameter. If <b><code>FALSE</code></b>, <i>0</i> is specified. For details, see MongoDB\Driver\WriteConcern.</p> <p>This option is deprecated and should not be used.</p>    serverSelectionTimeoutMS <code>integer</code>  <p>Specifies how long in milliseconds to block for server selection before throwing an exception. Defaults to 30,000 milliseconds.</p>    serverSelectionTryOnce <code>boolean</code>  <p>When <b><code>TRUE</code></b>, instructs the driver to scan the MongoDB deployment exactly once after server selection fails and then either select a server or raise an error. When <b><code>FALSE</code></b>, the driver blocks and searches for a server up to the <i>"serverSelectionTimeoutMS"</i> value. Defaults to <b><code>TRUE</code></b>.</p>    slaveOk <code>boolean</code>  <p>Specifies <i>"secondaryPreferred"</i> for the read preference mode if <b><code>TRUE</code></b>. For details, see MongoDB\Driver\ReadPreference.</p> <p>This option is deprecated and should not be used.</p>    socketCheckIntervalMS <code>integer</code>  <p>If a socket has not been used recently, the driver must check it via an <i>isMaster</i> command before using it for any operation. Defaults to 5,000 milliseconds.</p>    socketTimeoutMS <code>integer</code>  <p>The time in milliseconds to attempt a send or receive on a socket before timing out. Defaults to 300,000 milliseconds (i.e. five minutes).</p>    ssl <code>boolean</code>  <p>Initiates the connection with TLS/SSL if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b>.</p>    username <code>string</code>  The username for the user being authenticated. This option is useful if the username contains special characters, which would otherwise need to be URL encoded for the connection URI.    w integer|string  <p>Corresponds to the default write concern's <code>w</code> parameter. For details, see MongoDB\Driver\WriteConcern.</p>    wTimeoutMS integer|string  <p>Corresponds to the default write concern's <code>wtimeout</code> parameter. Specifies a time limit, in milliseconds, for the write concern. For details, see MongoDB\Driver\WriteConcern.</p> <p>If specified, <i>wTimeoutMS</i> must be a signed 32-bit integer greater than or equal to zero.</p>    zlibCompressionLevel <code>integer</code>  <p>Specifies the compression level to use for the zlib compressor. This option has no effect if <i>zlib</i> is not included in the <i>"compressors"</i> URI option. See the Driver Compression Specification for more information.</p>
		 * @param array $driverOptions <p></p> <b>driverOptions</b>   Option Type Description     allow_invalid_hostname <code>boolean</code>  <p>Disables hostname validation if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b>.</p> <p>Allowing invalid hostnames may expose the driver to a man-in-the-middle attack.</p>    ca_dir <code>string</code>  <p>Path to a correctly hashed certificate directory. The system certificate store will be used by default.</p> <p>Falls back to the deprecated <i>"capath"</i> SSL context option if not specified.</p>    ca_file <code>string</code>  <p>Path to a certificate authority file. The system certificate store will be used by default.</p> <p>Falls back to the deprecated <i>"cafile"</i> SSL context option if not specified.</p>    crl_file <code>string</code> Path to a certificate revocation list file.   pem_file <code>string</code>  <p>Path to a PEM encoded certificate to use for client authentication.</p> <p>Falls back to the deprecated <i>"local_cert"</i> SSL context option if not specified.</p>    pem_pwd <code>string</code>  <p>Passphrase for the PEM encoded certificate (if applicable).</p> <p>Falls back to the deprecated <i>"passphrase"</i> SSL context option if not specified.</p>    context <code>resource</code>  <p>SSL context options to be used as fallbacks for other driver options (as specified). Note that the driver does not consult the default stream context.</p> <p>This option is supported for backwards compatibility, but should be considered deprecated.</p>    weak_cert_validation <code>boolean</code>  <p>Disables certificate validation if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b></p> <p>Falls back to the deprecated <i>"allow_self_signed"</i> SSL context option if not specified.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-manager.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $uri = '"mongodb://127.0.0.1/', array $uriOptions = array(), array $driverOptions = array()) {}

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>The write(s) to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>Returns MongoDB\Driver\WriteResult on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Execute a database command
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method applies no special logic to the command. Although this method accepts <i>"readConcern"</i> and <i>"writeConcern"</i> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executecommand.php
		 * @see MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the query on that server. By default, the read preference from the MongoDB Connection URI will be used.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\Query $query <p>The query to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executequery.php
		 * @see MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method will apply logic that is specific to commands that read (e.g. count) and take the MongoDB server version into account. The <i>"readConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executereadcommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeReadCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads and writes
		 * <p>Executes the command on the primary server.</p><p>This method will apply logic that is specific to commands that read and write (e.g. findAndModify) and take the MongoDB server version into account. The <i>"readConcern"</i> and <i>"writeConcern"</i> options will default to the corresponding values from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executereadwritecommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeReadWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that writes
		 * <p>Executes the command on the primary server.</p><p>This method will apply logic that is specific to commands that write (e.g. drop) and take the MongoDB server version into account. The <i>"writeConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executewritecommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Return the ReadConcern for the Manager
		 * <p>Returns the MongoDB\Driver\ReadConcern for the Manager, which is derived from its URI options. This is the default read concern for queries and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\ReadConcern <p>The MongoDB\Driver\ReadConcern for the Manager.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.getreadconcern.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.1.0
		 */
		final public function getReadConcern(): \MongoDB\Driver\ReadConcern {}

		/**
		 * Return the ReadPreference for the Manager
		 * <p>Returns the MongoDB\Driver\ReadPreference for the Manager, which is derived from its URI options. This is the default read preference for queries and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\ReadPreference <p>The MongoDB\Driver\ReadPreference for the Manager.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.getreadpreference.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.0.0
		 */
		final public function getReadPreference(): \MongoDB\Driver\ReadPreference {}

		/**
		 * Return the servers to which this manager is connected
		 * <p>Returns an <code>array</code> of MongoDB\Driver\Server instances to which this manager is connected.</p><p><b>Note</b>:  Since the driver connects to the database lazily, this method may return an empty <code>array</code> if called before executing an operation on the MongoDB\Driver\Manager. </p>
		 * @return array <p>Returns an <code>array</code> of MongoDB\Driver\Server instances to which this manager is connected.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.getservers.php
		 * @see MongoDB\Driver\Manager::selectServer()
		 * @since mongodb >=1.0.0
		 */
		final public function getServers(): array {}

		/**
		 * Return the WriteConcern for the Manager
		 * <p>Returns the MongoDB\Driver\WriteConcern for the Manager, which is derived from its URI options. This is the default write concern for writes and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\WriteConcern <p>The MongoDB\Driver\WriteConcern for the Manager.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.getwriteconcern.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcern(): \MongoDB\Driver\WriteConcern {}

		/**
		 * Select a server matching a read preference
		 * <p>Selects a MongoDB\Driver\Server matching <code>readPreference</code>. This may be used to preselect a server in order to perform version checking before executing an operation.</p><p><b>Note</b>:  Unlike <code>MongoDB\Driver\Manager::getServers()</code>, this method will initialize database connections and perform server discovery if necessary. See the Server Selection Specification for additional information. </p>
		 * @param \MongoDB\Driver\ReadPreference $readPreference <p>The read preference to use for selecting a server.</p>
		 * @return MongoDB\Driver\Server <p>Returns a MongoDB\Driver\Server matching the read preference.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.selectserver.php
		 * @see MongoDB\Driver\Manager::getServers()
		 * @since mongodb >=1.0.0
		 */
		final public function selectServer(\MongoDB\Driver\ReadPreference $readPreference): \MongoDB\Driver\Server {}

		/**
		 * Start a new client session for use with this client
		 * <p>Creates a MongoDB\Driver\Session for the given options. The session may then be specified when executing commands, queries, and write operations.</p><p><b>Note</b>:  A MongoDB\Driver\Session can only be used with the MongoDB\Driver\Manager from which it was created. </p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     causalConsistency <code>boolean</code>  <p>Configure causal consistency in a session. If <b><code>TRUE</code></b>, each operation in the session will be causally ordered after the previous read or write operation. Set to <b><code>FALSE</code></b> to disable causal consistency.</p> <p>See Casual Consistency in the MongoDB manual for more information.</p>  <b><code>TRUE</code></b>   defaultTransactionOptions <code>array</code>  <p>Default options to apply to newly created transactions. These options are used unless they are overridden when a transaction is started with different value for each option.</p> <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p>This option is available in MongoDB 4.0+.</p>  <i>[]</i>
		 * @return MongoDB\Driver\Session <p>Returns a MongoDB\Driver\Session.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.startsession.php
		 * @since mongodb >=1.4.0
		 */
		final public function startSession(array $options = NULL): \MongoDB\Driver\Session {}
	}

}

namespace MongoDB\Driver\Monitoring {

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandFailedEvent</b> class encapsulates information about a failed command.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-monitoring-commandfailedevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandFailedEvent {

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <i>"find"</i>, <i>"aggregate"</i>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the command's duration in microseconds
		 * <p>The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.</p>
		 * @return int <p>Returns the command's duration in microseconds.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getdurationmicros.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDurationMicros(): int {}

		/**
		 * Returns the Exception associated with the failed command
		 * @return Exception <p>Returns the Exception associated with the failed command.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.geterror.php
		 * @since mongodb >=1.3.0
		 */
		final public function getError(): \Exception {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>Note</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command reply document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command reply document as a <b>stdClass</b> object.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getreply.php
		 * @since mongodb >=1.5.0
		 */
		final public function getReply(): object {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this MongoDB\Driver\Monitoring\CommandFailedEvent with a previous MongoDB\Driver\Monitoring\CommandStartedEvent.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandStartedEvent</b> class encapsulates information about a started command.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-monitoring-commandstartedevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandStartedEvent {

		/**
		 * Returns the command document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command document as a <b>stdClass</b> object.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getcommand.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommand(): object {}

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <i>"find"</i>, <i>"aggregate"</i>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the database on which the command was executed
		 * @return string <p>Returns the database on which the command was executed.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getdatabasename.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDatabaseName(): string {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>Note</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandStartedEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this MongoDB\Driver\Monitoring\CommandStartedEvent with a later MongoDB\Driver\Monitoring\CommandFailedEvent or MongoDB\Driver\Monitoring\CommandSucceededEvent.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}
	}

	/**
	 * <p>Classes may implement this interface to register an event subscriber that is notified for each started, successful, and failed command event. See Application Performance Monitoring (APM) for additional information.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-monitoring-commandsubscriber.php
	 * @since mongodb >=1.3.0
	 */
	interface CommandSubscriber {

		/**
		 * Notification method for a failed command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has failed.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandFailedEvent $event <p>An event object encapsulating information about the failed command.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandfailed.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandFailed(\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void;

		/**
		 * Notification method for a started command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has started.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandStartedEvent $event <p>An event object encapsulating information about the started command.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandstarted.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandStarted(\MongoDB\Driver\Monitoring\CommandStartedEvent $event): void;

		/**
		 * Notification method for a successful command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has succeeded.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandSucceededEvent $event <p>An event object encapsulating information about the successful command.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandsucceeded.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandSucceeded(\MongoDB\Driver\Monitoring\CommandSucceededEvent $event): void;
	}

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandSucceededEvent</b> class encapsulates information about a successful command.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-monitoring-commandsucceededevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandSucceededEvent {

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <i>"find"</i>, <i>"aggregate"</i>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the command's duration in microseconds
		 * <p>The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.</p>
		 * @return int <p>Returns the command's duration in microseconds.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getdurationmicros.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDurationMicros(): int {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>Note</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command reply document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command reply document as a <b>stdClass</b> object.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getreply.php
		 * @since mongodb >=1.3.0
		 */
		final public function getReply(): object {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this MongoDB\Driver\Monitoring\CommandSucceededEvent with a previous MongoDB\Driver\Monitoring\CommandStartedEvent.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @link http://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}
	}

	/**
	 * <p>Base interface for event subscribers. This is used for type-hinting <code>MongoDB\Driver\Monitoring\addSubscriber()</code> and <code>MongoDB\Driver\Monitoring\removeSubscriber()</code> and should not be implemented directly.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-monitoring-subscriber.php
	 * @since mongodb >=1.3.0
	 */
	interface Subscriber {
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\Query</b> class is a value object that represents a database query.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-query.php
	 * @since mongodb >=1.0.0
	 */
	final class Query {

		/**
		 * Create a new Query
		 * <p>Constructs a new MongoDB\Driver\Query, which is an immutable value object that represents a database query. The query may then be executed with <code>MongoDB\Driver\Manager::executeQuery()</code>.</p>
		 * @param array|object $filter
		 * @param array $queryOptions <p></p> <b>queryOptions</b>   Option Type Description     allowPartialResults <code>boolean</code>  <p>For queries against a sharded collection, returns partial results from the mongos if some shards are unavailable instead of throwing an error.</p> <p>Falls back to the deprecated <i>"partial"</i> option if not specified.</p>    awaitData <code>boolean</code>  Use in conjunction with the <i>"tailable"</i> option to block a getMore operation on the cursor temporarily if at the end of data rather than returning no data. After a timeout period, the query returns as normal.    batchSize <code>integer</code>  <p>The number of documents to return in the first batch. Defaults to 101. A batch size of 0 means that the cursor will be established, but no documents will be returned in the first batch.</p> <p>In versions of MongoDB before 3.2, where queries use the legacy wire protocol OP_QUERY, a batch size of 1 will close the cursor irrespective of the number of matched documents.</p>    collation array|object  <p>Collation allows users to specify language-specific rules for string comparison, such as rules for lettercase and accent marks. When specifying collation, the <i>"locale"</i> field is mandatory; all other collation fields are optional. For descriptions of the fields, see Collation Document.</p> <p>If the collation is unspecified but the collection has a default collation, the operation uses the collation specified for the collection. If no collation is specified for the collection or for the operation, MongoDB uses the simple binary comparison used in prior versions for string comparisons.</p> <p>This option is available in MongoDB 3.4+ and will result in an exception at execution time if specified for an older server version.</p>    comment <code>string</code>  <p>A comment to attach to the query to help interpret and trace query profile data.</p> <p>Falls back to the deprecated <i>"$comment"</i> modifier if not specified.</p>    exhaust <code>boolean</code>  <p>Stream the data down full blast in multiple "more" packages, on the assumption that the client will fully read all data queried. Faster when you are pulling a lot of data and know you want to pull it all down. Note: the client is not allowed to not read all the data unless it closes the connection.</p> <p>This option is not supported by the find command in MongoDB 3.2+ and will force the driver to use the legacy wire protocol version (i.e. OP_QUERY).</p>    explain <code>boolean</code>  <p>If <b><code>TRUE</code></b>, the returned MongoDB\Driver\Cursor will contain a single document that describes the process and indexes used to return the query.</p> <p>Falls back to the deprecated <i>"$explain"</i> modifier if not specified.</p> <p>This option is not supported by the find command in MongoDB 3.2+ and will only be respected when using the legacy wire protocol version (i.e. OP_QUERY). The explain command should be used on MongoDB 3.0+.</p>    hint string|array|object  <p>Index specification. Specify either the index name as a string or the index key pattern. If specified, then the query system will only consider plans using the hinted index.</p> <p>Falls back to the deprecated <i>"hint"</i> option if not specified.</p>    limit <code>integer</code>  <p>The maximum number of documents to return. If unspecified, then defaults to no limit. A limit of 0 is equivalent to setting no limit.</p> <p>A negative limit is will be interpreted as a positive limit with the <i>"singleBatch"</i> option set to <b><code>TRUE</code></b>. This behavior is supported for backwards compatibility, but should be considered deprecated.</p>    max array|object  <p>The <i>exclusive</i> upper bound for a specific index.</p> <p>Falls back to the deprecated <i>"$max"</i> modifier if not specified.</p>    maxAwaitTimeMS <code>integer</code>  <p>Positive integer denoting the time limit in milliseconds for the server to block a getMore operation if no data is available. This option should only be used in conjunction with the <i>"tailable"</i> and <i>"awaitData"</i> options.</p>    maxScan <code>integer</code>  <p><b>Warning</b></p> <p>This option is deprecated and should not be used.</p>  <p>Positive integer denoting the maximum number of documents or index keys to scan when executing the query.</p> <p>Falls back to the deprecated <i>"$maxScan"</i> modifier if not specified.</p>    maxTimeMS <code>integer</code>  <p>The cumulative time limit in milliseconds for processing operations on the cursor. MongoDB aborts the operation at the earliest following interrupt point.</p> <p>Falls back to the deprecated <i>"$maxTimeMS"</i> modifier if not specified.</p>    min array|object  <p>The <i>inclusive</i> lower bound for a specific index.</p> <p>Falls back to the deprecated <i>"$min"</i> modifier if not specified.</p>    modifiers <code>array</code>  Meta operators modifying the output or behavior of a query. Use of these operators is deprecated in favor of named options.    noCursorTimeout <code>boolean</code>  Prevents the server from timing out idle cursors after an inactivity period (10 minutes).    oplogReplay <code>boolean</code>  <p>Internal use for replica sets. To use oplogReplay, you must include the following condition in the filter:</p> <p></p> <pre>[ 'ts' =&gt; [ '$gte' =&gt; &lt;timestamp&gt; ] ]</pre>      projection array|object  <p>The projection specification to determine which fields to include in the returned documents.</p> <p>If you are using the ODM functionality to deserialise documents as their original PHP class, make sure that you include the __pclass field in the projection. This is required for the deserialization to work and without it, the driver will return (by default) a <b>stdClass</b> object instead.</p>    readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation. By default, the read concern from the MongoDB Connection URI will be used.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    returnKey <code>boolean</code>  <p>If <b><code>TRUE</code></b>, returns only the index keys in the resulting documents. Default value is <b><code>FALSE</code></b>. If <b><code>TRUE</code></b> and the find command does not use an index, the returned documents will be empty.</p> <p>Falls back to the deprecated <i>"$returnKey"</i> modifier if not specified.</p>    showRecordId <code>boolean</code>  <p>Determines whether to return the record identifier for each document. If <b><code>TRUE</code></b>, adds a top-level <i>"$recordId"</i> field to the returned documents.</p> <p>Falls back to the deprecated <i>"$showDiskLoc"</i> modifier if not specified.</p>    singleBatch <code>boolean</code>  Determines whether to close the cursor after the first batch. Defaults to <b><code>FALSE</code></b>.    skip <code>integer</code> Number of documents to skip. Defaults to 0.   slaveOk <code>boolean</code> Allow query of replica set secondaries   snapshot <code>boolean</code>  <p><b>Warning</b></p> <p>This option is deprecated and should not be used.</p>  <p>Prevents the cursor from returning a document more than once because of an intervening write operation.</p> <p>Falls back to the deprecated <i>"$snapshot"</i> modifier if not specified.</p>    sort array|object  <p>The sort specification for the ordering of the results.</p> <p>Falls back to the deprecated <i>"$orderby"</i> modifier if not specified.</p>    tailable <code>boolean</code> Returns a tailable cursor for a capped collection.
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-query.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($filter, array $queryOptions = NULL) {}
	}

	/**
	 * <p><b>MongoDB\Driver\ReadConcern</b> controls the level of isolation for read operations for replica sets and replica set shards. This option requires MongoDB 3.2 or later.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-readconcern.php
	 * @since mongodb >=1.1.0
	 */
	final class ReadConcern implements \MongoDB\BSON\Serializable {

		/**
		 * @var string <p>Default for reads against secondaries when <i>afterClusterTime</i>and <i>level</i> are unspecified.</p> <p>The query returns the instance's most recent data. Provides no guarantee that the data has been written to a majority of the replica set members (i.e. may be rolled back).</p> <p>For unsharded collections (including collections in a standalone deployment or a replica set deployment), <i>"local"</i> and <i>"available"</i> read concerns behave identically.</p> <p>For a sharded cluster, <i>"available"</i> read concern provides greater tolerance for partitions since it does not wait to ensure consistency guarantees. However, a query with <i>"available"</i> read concern may return orphan documents if the shard is undergoing chunk migrations since the <i>"available"</i> read concern, unlike <i>"local"</i> read concern, does not contact the shard's primary nor the config servers for updated metadata.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const AVAILABLE = "available";

		/**
		 * @var string <p>The query returns data that reflects all successful writes issued with a write concern of <i>"majority"</i> <i>and</i> acknowledged prior to the start of the read operation. For replica sets that run with <i>writeConcernMajorityJournalDefault</i> set to <b><code>TRUE</code></b>, linearizable read concern returns data that will never be rolled back.</p> <p>With <i>writeConcernMajorityJournalDefault</i> set to <b><code>FALSE</code></b>, MongoDB will not wait for <i>w: "majority"</i> writes to be durable before acknowledging the writes. As such, <i>"majority"</i> write operations could possibly roll back in the event of a loss of a replica set member.</p> <p>You can specify linearizable read concern for read operations on the primary only.</p> <p>Linearizable read concern guarantees only apply if read operations specify a query filter that uniquely identifies a single document.</p> <b>Tip</b> <p>Always use <i>maxTimeMS</i> with linearizable read concern in case a majority of data bearing members are unavailable. <i>maxTimeMS</i> ensures that the operation does not block indefinitely and instead ensures that the operation returns an error if the read concern cannot be fulfilled.</p>  <p>Linearizable read concern requires MongoDB 3.4.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const LINEARIZABLE = "linearizable";

		/**
		 * @var string <p>Default for reads against primary if <i>level</i> is unspecified and for reads against secondaries if <i>level</i> is unspecified but <i>afterClusterTime</i> is specified.</p> <p>The query returns the instance's most recent data. Provides no guarantee that the data has been written to a majority of the replica set members (i.e. may be rolled back).</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const LOCAL = "local";

		/**
		 * @var string <p>The query returns the instance's most recent data acknowledged as having been written to a majority of members in the replica set.</p> <p>To use read concern level of <i>"majority"</i>, replica sets must use WiredTiger storage engine and election protocol version 1.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const MAJORITY = "majority";

		/**
		 * Create a new ReadConcern
		 * <p>Constructs a new MongoDB\Driver\ReadConcern, which is an immutable value object.</p>
		 * @param string $level <p>The read concern level. You may use, but are not limited to, one of the class constants.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-readconcern.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $level = NULL) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ReadConcern as BSON.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readconcern.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the ReadConcern's "level" option
		 * @return string|null <p>Returns the ReadConcern's "level" option.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readconcern.getlevel.php
		 * @since mongodb >=1.0.0
		 */
		final public function getLevel() {}

		/**
		 * Checks if this is the default read concern
		 * <p>Returns whether this is the default read concern (i.e. no options are specified). This method is primarily intended to be used in conjunction with <code>MongoDB\Driver\Manager::getReadConcern()</code> to determine whether the Manager has been constructed without any read concern options.</p><p>The driver will not include a default read concern in its read operations (e.g. <code>MongoDB\Driver\Manager::executeQuery()</code>) in order order to allow the server to apply its own default. Libraries that access the Manager's read concern to include it in their own read commands should use this method to ensure that default read concerns are left unset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this is the default read concern and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readconcern.isdefault.php
		 * @since mongodb >=1.3.0
		 */
		final public function isDefault(): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
	 * @since mongodb >=1.0.0
	 */
	final class ReadPreference implements \MongoDB\BSON\Serializable {

		/**
		 * @var integer <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_PRIMARY = 1;

		/**
		 * @var integer <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_PRIMARY_PREFERRED = 5;

		/**
		 * @var integer <p>All operations read from the secondary members of the replica set.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_SECONDARY = 2;

		/**
		 * @var integer <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_SECONDARY_PREFERRED = 6;

		/**
		 * @var integer <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_NEAREST = 10;

		/**
		 * @var integer <p>The default value for the <i>"maxStalenessSeconds"</i> option is to specify no limit on maximum staleness, which means that the driver will not consider a secondary's lag when choosing where to direct a read operation.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const NO_MAX_STALENESS = -1;

		/**
		 * @var integer <p>The minimum value for the <i>"maxStalenessSeconds"</i> option is 90 seconds. The driver estimates secondaries' staleness by periodically checking the latest write date of each replica set member. Since these checks are infrequent, the staleness estimate is coarse. Thus, the driver cannot enforce a max staleness value of less than 90 seconds.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const SMALLEST_MAX_STALENESS_SECONDS = 90;

		/**
		 * Create a new ReadPreference
		 * <p>Constructs a new MongoDB\Driver\ReadPreference, which is an immutable value object.</p>
		 * @param string|int $mode <p></p> <b>Read preference mode</b>   Value Description     <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> or <i>"primary"</i>  <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY_PREFERRED</code></b> or <i>"primaryPreferred"</i>  <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_SECONDARY</code></b> or <i>"secondary"</i>  <p>All operations read from the secondary members of the replica set.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_SECONDARY_PREFERRED</code></b> or <i>"secondaryPreferred"</i>  <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_NEAREST</code></b> or <i>"nearest"</i>  <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @param array $tagSets <p>Tag sets allow you to target read operations to specific members of a replica set. This parameter should be an array of associative arrays, each of which contain zero or more key/value pairs. When selecting a server for a read operation, the driver attempt to select a node having all tags in a set (i.e. the associative array of key/value pairs). If selection fails, the driver will attempt subsequent sets. An empty tag set (<i>array()</i>) will match any node and may be used as a fallback.</p> <p>Tags are not compatible with the <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> mode and, in general, only apply when selecting a secondary member of a set for a read operation. However, the <b><code>MongoDB\Driver\ReadPreference::RP_NEAREST</code></b> mode, when combined with a tag set, selects the matching member with the lowest network latency. This member may be a primary or secondary.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     maxStalenessSeconds <code>integer</code>  <p>Specifies a maximum replication lag, or "staleness", for reads from secondaries. When a secondary's estimated staleness exceeds this value, the driver stops using it for read operations.</p> <p>If specified, the max staleness must be a signed 32-bit integer greater than or equal to <b><code>MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</code></b>.</p> <p>Defaults to <b><code>MongoDB\Driver\ReadPreference::NO_MAX_STALENESS</code></b>, which means that the driver will not consider a secondary's lag when choosing where to direct a read operation.</p> <p>This option is not compatible with the <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> mode. Specifying a max staleness also requires all MongoDB instances in the deployment to be using MongoDB 3.4+. An exception will be thrown at execution time if any MongoDB instances in the deployment are of an older server version.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-readpreference.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($mode, array $tagSets = NULL, array $options = array()) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ReadPreference as BSON.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readpreference.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the ReadPreference's "maxStalenessSeconds" option
		 * @return int <p>Returns the ReadPreference's "maxStalenessSeconds" option. If no max staleness has been specified, <b><code>MongoDB\Driver\ReadPreference::NO_MAX_STALENESS</code></b> will be returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readpreference.getmaxstalenessseconds.php
		 * @since mongodb >=1.2.0
		 */
		final public function getMaxStalenessSeconds(): int {}

		/**
		 * Returns the ReadPreference's "mode" option
		 * @return int <p>Returns the ReadPreference's "mode" option.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readpreference.getmode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMode(): int {}

		/**
		 * Returns the ReadPreference's "tagSets" option
		 * @return array <p>Returns the ReadPreference's "tagSets" option.</p>
		 * @link http://php.net/manual/en/mongodb-driver-readpreference.gettagsets.php
		 * @since mongodb >=1.0.0
		 */
		final public function getTagSets(): array {}
	}

	/**
	 * @link http://php.net/manual/en/class.mongodb-driver-server.php
	 * @since mongodb >=1.0.0
	 */
	final class Server {

		/**
		 * @var integer <p>Unknown server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_UNKNOWN = 0;

		/**
		 * @var integer <p>Standalone server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_STANDALONE = 1;

		/**
		 * @var integer <p>Mongos server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_MONGOS = 2;

		/**
		 * @var integer <p>Replica set possible primary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>A server may be identified as a possible primary if it has not yet been checked but another memory of the replica set thinks it is the primary.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_POSSIBLE_PRIMARY = 3;

		/**
		 * @var integer <p>Replica set primary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_PRIMARY = 4;

		/**
		 * @var integer <p>Replica set secondary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_SECONDARY = 5;

		/**
		 * @var integer <p>Replica set arbiter server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_ARBITER = 6;

		/**
		 * @var integer <p>Replica set other server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>Such servers may be hidden, starting up, or recovering. They cannot be queried, but their hosts lists are useful for discovering the current replica set configuration.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_OTHER = 7;

		/**
		 * @var integer <p>Replica set ghost server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>Servers may be identified as such in at least three situations: briefly during server startup; in an uninitialized replica set; or when the server is shunned (i.e. removed from the replica set config). They cannot be queried, nor can their host list be used to discover the current replica set configuration; however, the client may monitor this server in hope that it transitions to a more useful state.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_GHOST = 8;

		/**
		 * Create a new Server (not used)
		 * <p>MongoDB\Driver\Server objects are created internally by MongoDB\Driver\Manager when a database connection is established and may be returned by <code>MongoDB\Driver\Manager::getServers()</code> and <code>MongoDB\Driver\Manager::selectServer()</code>.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-server.construct.php
		 * @see MongoDB\Driver\Manager::getServers(), MongoDB\Driver\Manager::selectServer()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * Execute one or more write operations on this server
		 * <p>Executes one or more write operations on this server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>The write(s) to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>Returns MongoDB\Driver\WriteResult on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Execute a database command on this server
		 * <p>Executes the command on this server.</p><p>This method applies no special logic to the command. Although this method accepts <i>"readConcern"</i> and <i>"writeConcern"</i> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p><p><b>Note</b>:  The <i>"readPreference"</i> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.executecommand.php
		 * @see MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query on this server
		 * <p>Executes the query on this server.</p><p><b>Note</b>:  The <i>"readPreference"</i> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\Query $query <p>The query to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.executequery.php
		 * @see MongoDB\Driver\Manager::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that read (e.g. count) and take the MongoDB server version into account. The <i>"readConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>Note</b>:  The <i>"readPreference"</i> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.executereadcommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeReadCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads and writes on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that read and write (e.g. findAndModify) and take the MongoDB server version into account. The <i>"readConcern"</i> and <i>"writeConcern"</i> options will default to the corresponding values from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.executereadwritecommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeReadWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that writes on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that write (e.g. drop) and take the MongoDB server version into account. The <i>"writeConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns MongoDB\Driver\Cursor on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.executewritecommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Returns the hostname of this server
		 * <p>Returns the hostname of this server.</p>
		 * @return string <p>Returns the hostname of this server.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.gethost.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getHost(): string {}

		/**
		 * Returns an array of information about this server
		 * <p>Returns an array of information about this server.</p>
		 * @return array <p>Returns an array of information about this server.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo(): array {}

		/**
		 * Returns the latency of this server
		 * <p>Returns the latency of this server (i.e. the client's measured round trip time of an <i>ismaster</i> command).</p>
		 * @return string <p>Returns the latency of this server.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.getlatency.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getLatency(): string {}

		/**
		 * Returns the port on which this server is listening
		 * <p>Returns the port on which this server is listening.</p>
		 * @return int <p>Returns the port on which this server is listening.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.getport.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getPort(): int {}

		/**
		 * Returns an array of tags describing this server in a replica set
		 * <p>Returns an <code>array</code> of tags used to describe this server in a replica set. The array will contain zero or more <code>string</code> key and value pairs.</p>
		 * @return array <p>Returns an <code>array</code> of tags used to describe this server in a replica set.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.gettags.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getTags(): array {}

		/**
		 * Returns an integer denoting the type of this server
		 * <p>Returns an <code>integer</code> denoting the type of this server. The value will correlate with a MongoDB\Driver\Server constant.</p>
		 * @return int <p>Returns an <code>integer</code> denoting the type of this server.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.gettype.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getType(): int {}

		/**
		 * Checks if this server is an arbiter member of a replica set
		 * <p>Returns whether this server is an arbiter member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is an arbiter member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.isarbiter.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isArbiter(): bool {}

		/**
		 * Checks if this server is a hidden member of a replica set
		 * <p>Returns whether this server is a hidden member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a hidden member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.ishidden.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isHidden(): bool {}

		/**
		 * Checks if this server is a passive member of a replica set
		 * <p>Returns whether this server is a passive member of a replica set (i.e. its priority is <i>0</i>).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a passive member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.ispassive.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isPassive(): bool {}

		/**
		 * Checks if this server is a primary member of a replica set
		 * <p>Returns whether this server is a primary member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a primary member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.isprimary.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isPrimary(): bool {}

		/**
		 * Checks if this server is a secondary member of a replica set
		 * <p>Returns whether this server is a secondary member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a secondary member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-server.issecondary.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isSecondary(): bool {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Session</b> class represents a client session and is returned by <code>MongoDB\Driver\Manager::startSession()</code>. Commands, queries, and write operations may then be associated the session.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-session.php
	 * @since mongodb >=1.4.0
	 */
	final class Session {

		/**
		 * Create a new Session (not used)
		 * <p>MongoDB\Driver\Session objects are returned by <code>MongoDB\Driver\Manager::startSession()</code> and cannot be constructed directly.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-session.construct.php
		 * @see MongoDB\Driver\Manager::startSession()
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Aborts a transaction
		 * <p>This method aborts an existing transaction and all the associated operations are rolled back. It is like all operations that were part of this transaction never existed.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.aborttransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function abortTransaction(): void {}

		/**
		 * Advances the cluster time for this session
		 * <p>Advances the cluster time for this session. If the cluster time is less than or equal to the session's current cluster time, this function is a no-op.</p><p>By using this method in conjunction with <code>MongoDB\Driver\Session::advanceOperationTime()</code> to copy the cluster and operation times from another session, you can ensure that operations in this session are causally consistent with the last operation in the other session.</p>
		 * @param array|object $clusterTime <p>The cluster time is a document containing a logical timestamp and server signature. Typically, this value will be obtained by calling <code>MongoDB\Driver\Session::getClusterTime()</code> on another session object.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.advanceclustertime.php
		 * @since mongodb >=1.4.0
		 */
		final public function advanceClusterTime($clusterTime): void {}

		/**
		 * Advances the operation time for this session
		 * <p>Advances the operation time for this session. If the operation time is less than or equal to the session's current operation time, this function is a no-op.</p><p>By using this method in conjunction with <code>MongoDB\Driver\Session::advanceClusterTime()</code> to copy the operation and cluster times from another session, you can ensure that operations in this session are causally consistent with the last operation in the other session.</p>
		 * @param \MongoDB\BSON\TimestampInterface $operationTime <p>The operation time is a logical timestamp. Typically, this value will be obtained by calling <code>MongoDB\Driver\Session::getOperationTime()</code> on another session object.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.advanceoperationtime.php
		 * @since mongodb >=1.4.0
		 */
		final public function advanceOperationTime(\MongoDB\BSON\TimestampInterface $operationTime): void {}

		/**
		 * Commits a transaction
		 * <p>This method commits an existing transaction and all the associated operations are persisted in the database.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.committransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function commitTransaction(): void {}

		/**
		 * Terminates a session
		 * <p>This method closes an existing session. If a transaction was associated with this session, this transaction is also aborted, and all its operations are rolled back.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.endsession.php
		 * @since mongodb >=1.5.0
		 */
		final public function endSession(): void {}

		/**
		 * Returns the cluster time for this session
		 * <p>Returns the cluster time for this session. If the session has not been used for any operation and <code>MongoDB\Driver\Session::advanceClusterTime()</code> has not been called, the cluster time will be <b><code>NULL</code></b>.</p>
		 * @return object|null <p>Returns the cluster time for this session, or <b><code>NULL</code></b> if the session has no cluster time.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.getclustertime.php
		 * @since mongodb >=1.4.0
		 */
		final public function getClusterTime() {}

		/**
		 * Returns the logical session ID for this session
		 * <p>Returns the logical session ID for this session, which may be used to identify this session's operations on the server.</p>
		 * @return object <p>Returns the logical session ID for this session.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.getlogicalsessionid.php
		 * @since mongodb >=1.4.0
		 */
		final public function getLogicalSessionId(): object {}

		/**
		 * Returns the operation time for this session
		 * <p>Returns the operation time for this session. If the session has not been used for any operation and <code>MongoDB\Driver\Session::advanceOperationTime()</code> has not been called, the operation time will be <b><code>NULL</code></b></p>
		 * @return MongoDB\BSON\Timestamp|null <p>Returns the operation time for this session, or <b><code>NULL</code></b> if the session has no operation time.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.getoperationtime.php
		 * @since mongodb >=1.4.0
		 */
		final public function getOperationTime() {}

		/**
		 * Start a new client session for use with this client
		 * <p>Creates a MongoDB\Driver\Session for the given options. The session may then be specified when executing commands, queries, and write operations.</p><p><b>Note</b>:  A MongoDB\Driver\Session can only be used with the MongoDB\Driver\Manager from which it was created. </p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     causalConsistency <code>boolean</code>  <p>Configure causal consistency in a session. If <b><code>TRUE</code></b>, each operation in the session will be causally ordered after the previous read or write operation. Set to <b><code>FALSE</code></b> to disable causal consistency.</p> <p>See Casual Consistency in the MongoDB manual for more information.</p>  <b><code>TRUE</code></b>   defaultTransactionOptions <code>array</code>  <p>Default options to apply to newly created transactions. These options are used unless they are overridden when a transaction is started with different value for each option.</p> <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p>This option is available in MongoDB 4.0+.</p>  <i>[]</i>
		 * @return MongoDB\Driver\Session <p>Returns a MongoDB\Driver\Session.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.startsession.php
		 * @since mongodb >=1.4.0
		 */
		final public function startSession(array $options = NULL): \MongoDB\Driver\Session {}

		/**
		 * Starts a transaction
		 * <p>This method starts a new transaction within this session. When the session is attached to operations through the <i>"session"</i> argument, these operations become of the started transaction.</p><p>Transactions can be committed through <code>MongoDB\Driver\Session::commitTransaction()</code>, and aborted with <code>MongoDB\Driver\Session::abortTransaction()</code>.</p><p>Transactions are also automatically aborted when the session is terminated through <code>MongoDB\Driver\Session::endSession()</code>.</p>
		 * @param array|object $options <p>Options can be passed as argument to this method. Each element in this options array overrides the corresponding option from the <i>"defaultTransactionOptions"</i> option, if set when starting the session with <code>MongoDB\Driver\Manager::startSession()</code>.</p> <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/mongodb-driver-session.starttransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function startTransaction($options): void {}
	}

	/**
	 * <p><b>MongoDB\Driver\WriteConcern</b> describes the level of acknowledgement requested from MongoDB for write operations to a standalone <i>mongod</i> or to replica sets or to sharded clusters. In sharded clusters, <i>mongos</i> instances will pass the write concern on to the shards.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-writeconcern.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteConcern implements \MongoDB\BSON\Serializable {

		/**
		 * @var string <p>Majority of all the members in the set; arbiters, non-voting members, passive members, hidden members and delayed members are all included in the definition of majority write concern.</p>
		 * @link http://php.net/manual/en/class.mongodb-driver-writeconcern.php
		 */
		const MAJORITY = "majority";

		/**
		 * Create a new WriteConcern
		 * <p>Constructs a new MongoDB\Driver\WriteConcern, which is an immutable value object.</p>
		 * @param string|int $w <p></p> <b>Write concern</b>   Value Description     1  Requests acknowledgement that the write operation has propagated to the standalone <i>mongod</i> or the primary in a replica set. This is the default write concern for MongoDB.    0  Requests no acknowledgment of the write operation. However, this may return information about socket exceptions and networking errors to the application.    &lt;integer greater than 1&gt;  Numbers greater than 1 are valid only for replica sets to request acknowledgement from specified number of members, including the primary.    <b><code>MongoDB\Driver\WriteConcern::MAJORITY</code></b>  <p>Requests acknowledgment that write operations have propagated to the majority of voting nodes, including the primary, and have been written to the on-disk journal for these nodes.</p> <p>Prior to MongoDB 3.0, this refers to the majority of replica set members (not just voting nodes).</p>    string  A string value is interpereted as a tag set. Requests acknowledgement that the write operations have propagated to a replica set member with the specified tag.
		 * @param int $wtimeout <p>How long to wait (in milliseconds) for secondaries before failing.</p> <p><i>wtimeout</i> causes write operations to return with an error (<b>WriteConcernError</b>) after the specified limit, even if the required write concern will eventually succeed. When these write operations return, MongoDB does not undo successful data modifications performed before the write concern exceeded the <i>wtimeout</i> time limit.</p> <p>If specified, <i>wtimeout</i> must be a signed 32-bit integer greater than or equal to zero.</p> <p></p> <b>Write concern timeout</b>   Value Description     0 Block indefinitely. This is the default.   &lt;integer greater than 0&gt;  Milliseconds to wait until returning.
		 * @param bool $journal <p>Wait until mongod has applied the write to the journal.</p>
		 * @return self
		 * @link http://php.net/manual/en/mongodb-driver-writeconcern.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($w, int $wtimeout = NULL, bool $journal = NULL) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the WriteConcern as BSON.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcern.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the WriteConcern's "journal" option
		 * @return boolean|null <p>Returns the WriteConcern's "journal" option.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcern.getjournal.php
		 * @since mongodb >=1.0.0
		 */
		final public function getJournal() {}

		/**
		 * Returns the WriteConcern's "w" option
		 * @return string|integer|null <p>Returns the WriteConcern's "w" option.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcern.getw.php
		 * @since mongodb >=1.0.0
		 */
		final public function getW() {}

		/**
		 * Returns the WriteConcern's "wtimeout" option
		 * @return int <p>Returns the WriteConcern's "wtimeout" option.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcern.getwtimeout.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWtimeout(): int {}

		/**
		 * Checks if this is the default write concern
		 * <p>Returns whether this is the default write concern (i.e. no options are specified). This method is primarily intended to be used in conjunction with <code>MongoDB\Driver\Manager::getWriteConcern()</code> to determine whether the Manager has been constructed without any write concern options.</p><p>The driver will not include a default write concern in its write operations (e.g. <code>MongoDB\Driver\Manager::executeBulkWrite()</code>) in order to allow the server to apply its own default, which may have been modified. Libraries that access the Manager's write concern to include it in their own write commands should use this method to ensure that default write concerns are left unset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this is the default write concern and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php
		 * @since mongodb >=1.3.0
		 */
		final public function isDefault(): bool {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteConcernError</b> class encapsulates information about a write concern error and may be returned by <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code>.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-writeconcernerror.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteConcernError {

		/**
		 * Returns the WriteConcernError's error code
		 * @return int <p>Returns the WriteConcernError's error code.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcernerror.getcode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getCode(): int {}

		/**
		 * Returns additional metadata for the WriteConcernError
		 * @return mixed <p>Returns additional metadata for the WriteConcernError, or <b><code>NULL</code></b> if no metadata is available.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcernerror.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo() {}

		/**
		 * Returns the WriteConcernError's error message
		 * @return string <p>Returns the WriteConcernError's error message.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeconcernerror.getmessage.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMessage(): string {}

		/**
		 * Returns any write concern error that occurred
		 * @return MongoDB\Driver\WriteConcernError|null <p>Returns a MongoDB\Driver\WriteConcernError if a write concern error was encountered during the write operation, and <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getwriteconcernerror.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcernError() {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteError</b> class encapsulates information about a write error and may be returned as an array element from <code>MongoDB\Driver\WriteResult::getWriteErrors()</code>.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-writeerror.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteError {

		/**
		 * Returns the WriteError's error code
		 * @return int <p>Returns the WriteError's error code.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeerror.getcode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getCode(): int {}

		/**
		 * Returns the index of the write operation corresponding to this WriteError
		 * @return int <p>Returns the index of the write operation (from MongoDB\Driver\BulkWrite) corresponding to this WriteError.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeerror.getindex.php
		 * @since mongodb >=1.0.0
		 */
		final public function getIndex(): int {}

		/**
		 * Returns additional metadata for the WriteError
		 * @return mixed <p>Returns additional metadata for the WriteError, or <b><code>NULL</code></b> if no metadata is available.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeerror.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo() {}

		/**
		 * Returns the WriteError's error message
		 * @return string <p>Returns the WriteError's error message.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeerror.getmessage.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMessage(): string {}

		/**
		 * Returns any write errors that occurred
		 * @return array <p>Returns an array of MongoDB\Driver\WriteError objects for any write errors encountered during the write operation. The array will be empty if no write errors occurred.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getwriteerrors.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteErrors(): array {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteResult</b> class encapsulates information about an executed MongoDB\Driver\BulkWrite and may be returned by <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
	 * @link http://php.net/manual/en/class.mongodb-driver-writeresult.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteResult {

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <i>"databaseName.collectionName"</i>).</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>The write(s) to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>Returns MongoDB\Driver\WriteResult on success.</p>
		 * @link http://php.net/manual/en/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns the number of documents deleted
		 * @return integer|null <p>Returns the number of documents deleted, or <b><code>NULL</code></b> if the write was not acknowledged.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getdeletedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getDeletedCount() {}

		/**
		 * Returns the number of documents inserted (excluding upserts)
		 * @return integer|null <p>Returns the number of documents inserted (excluding upserts), or <b><code>NULL</code></b> if the write was not acknowledged.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getinsertedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInsertedCount() {}

		/**
		 * Returns the number of documents selected for update
		 * <p>If the update operation results in no change to the document (e.g. setting the value of a field to its current value), the matched count may be greater than the value returned by <code>MongoDB\Driver\WriteResult::getModifiedCount()</code>.</p>
		 * @return integer|null <p>Returns the number of documents selected for update, or <b><code>NULL</code></b> if the write was not acknowledged.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getmatchedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMatchedCount() {}

		/**
		 * Returns the number of existing documents updated
		 * <p>If the update operation results in no change to the document (e.g. setting the value of a field to its current value), the modified count may be less than the value returned by <code>MongoDB\Driver\WriteResult::getMatchedCount()</code>.</p>
		 * @return integer|null <p>Returns the number of existing documents updated, or <b><code>NULL</code></b> if the write was not acknowledged.</p><p>The modified count is not available on versions of MongoDB before 2.6, which used the legacy wire protocol version (i.e. OP_UPDATE). If this is the case, the modified count will also be <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getmodifiedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getModifiedCount() {}

		/**
		 * Returns the server associated with this write result
		 * <p>Returns the MongoDB\Driver\Server associated with this write result. This is the server that executed the MongoDB\Driver\BulkWrite.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server associated with this write result.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getserver.php
		 * @since mongodb >=1.0.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Returns the number of documents inserted by an upsert
		 * @return integer|null <p>Returns the number of documents inserted by an upsert.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getupsertedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getUpsertedCount() {}

		/**
		 * Returns an array of identifiers for upserted documents
		 * @return array <p>Returns an array of identifiers (i.e. <i>"_id"</i> field values) for upserted documents. The array keys will correspond to the index of the write operation (from MongoDB\Driver\BulkWrite) responsible for the upsert.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getupsertedids.php
		 * @since mongodb >=1.0.0
		 */
		final public function getUpsertedIds(): array {}

		/**
		 * Returns any write concern error that occurred
		 * @return MongoDB\Driver\WriteConcernError|null <p>Returns a MongoDB\Driver\WriteConcernError if a write concern error was encountered during the write operation, and <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getwriteconcernerror.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcernError() {}

		/**
		 * Returns any write errors that occurred
		 * @return array <p>Returns an array of MongoDB\Driver\WriteError objects for any write errors encountered during the write operation. The array will be empty if no write errors occurred.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.getwriteerrors.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteErrors(): array {}

		/**
		 * Returns whether the write was acknowledged
		 * <p>If the write is acknowledged, other count fields will be available on the MongoDB\Driver\WriteResult object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the write was acknowledged, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/mongodb-driver-writeresult.isacknowledged.php
		 * @since mongodb >=1.0.0
		 */
		final public function isAcknowledged(): bool {}
	}

}

namespace MongoDB\BSON {

	/**
	 * Returns the BSON representation of a JSON value
	 * <p>Converts an extended JSON string to its BSON representation.</p>
	 * @param string $json <p>JSON value to be converted.</p>
	 * @return string <p>The serialized BSON document as a binary string.</p>
	 * @link http://php.net/manual/en/function.mongodb.bson-fromjson.php
	 * @see MongoDB\BSON\toJSON()
	 * @since mongodb >=1.0.0
	 */
	function fromJSON(string $json): string {}

	/**
	 * Returns the BSON representation of a PHP value
	 * <p>Serializes a PHP array or object (e.g. document) to its BSON representation. The returned binary string will describe a BSON document.</p>
	 * @param array|object $value
	 * @return string <p>The serialized BSON document as a binary string.</p>
	 * @link http://php.net/manual/en/function.mongodb.bson-fromphp.php
	 * @see MongoDB\BSON\toPHP()
	 * @since mongodb >=1.0.0
	 */
	function fromPHP($value): string {}

	/**
	 * Returns the Canonical Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its Canonical Extended JSON representation. The canonical format prefers type fidelity at the expense of concise output and is most suited for producing output that can be converted back to BSON without any loss of type information (e.g. numeric types will remain differentiated).</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link http://php.net/manual/en/function.mongodb.bson-tocanonicalextendedjson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
	 * @since mongodb >=1.3.0
	 */
	function toCanonicalExtendedJSON(string $bson): string {}

	/**
	 * Returns the Legacy Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its Legacy Extended JSON representation.</p><p><b>Note</b>:  There exist several JSON formats for representing BSON. This function implements the "strict mode" defined in MongoDB Extended JSON, which has been superseded by the canonical and relaxed formats defined in the Extended JSON Specification and implemented by <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> and <code>MongoDB\BSON\toRelaxedExtendedJSON()</code>, respectively. </p><p>JSON does not support <b><code>NAN</code></b> and <b><code>INF</code></b> and MongoDB's Legacy Extended JSON format does not define an alternative representation for these values (libbson will output <i>nan</i> and <i>inf</i> literals, which may not be parsed as valid JSON). If you are working with BSON that may contain non-finite numbers, please use <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> or <code>MongoDB\BSON\toRelaxedExtendedJSON()</code>.</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link http://php.net/manual/en/function.mongodb.bson-tojson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
	 * @since mongodb >=1.0.0
	 */
	function toJSON(string $bson): string {}

	/**
	 * Returns the PHP representation of a BSON value
	 * <p>Unserializes a BSON document (i.e. binary string) to its PHP representation. The <code>typeMap</code> paramater may be used to control the PHP types used for converting BSON arrays and documents (both root and embedded).</p><p>Fields containing deprecated BSON types (i.e. undefined, symbol, DBPointer) are represented only by bare-bones objects of the classes MongoDB\BSON\Undefined, MongoDB\BSON\Symbol, and MongoDB\BSON\DBPointer, when converting BSON to PHP. These objects are created from BSON data and used for storing these types back into the database, but can not be instantiated as they have a private constructor.</p>
	 * @param string $bson <p>BSON value to be unserialized.</p>
	 * @param array $typeMap <p>Type map configuration.</p>
	 * @return array|object <p>The unserialized PHP value.</p>
	 * @link http://php.net/manual/en/function.mongodb.bson-tophp.php
	 * @see MongoDB\BSON\fromPHP()
	 * @since mongodb >=1.0.0
	 */
	function toPHP(string $bson, array $typeMap = array()) {}

	/**
	 * Returns the Relaxed Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its Relaxed Extended JSON representation. The relaxed format prefers use of JSON type primitives at the expense of type fidelity and is most suited for producing output that can be easily consumed by web APIs and humans.</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link http://php.net/manual/en/function.mongodb.bson-torelaxedextendedjson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toCanonicalExtendedJSON()
	 * @since mongodb >=1.3.0
	 */
	function toRelaxedExtendedJSON(string $bson): string {}

}

namespace MongoDB\Driver\Monitoring {

	/**
	 * Registers a new monitoring event subscriber
	 * <p>Registers a new monitoring event subscriber with the driver. Registered subscribers will be notified of monitoring events through specific methods.</p><p><b>Note</b>:  If the object is already registered, this function is a no-op. </p>
	 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber object to register.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mongodb.driver.monitoring.addsubscriber.php
	 * @see MongoDB\Driver\Monitoring\removeSubscriber()
	 * @since mongodb >=1.3.0
	 */
	function addSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

	/**
	 * Unregisters an existing monitoring event subscriber
	 * <p>Unregisters an existing monitoring event subscriber from the driver. Unregistered subscribers will no longer be notified of monitoring events.</p><p><b>Note</b>:  If the object is not registered, this function is a no-op. </p>
	 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber object to unregister.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mongodb.driver.monitoring.removesubscriber.php
	 * @see MongoDB\Driver\Monitoring\addSubscriber()
	 * @since mongodb >=1.3.0
	 */
	function removeSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

}
