<?php



namespace {

	/**
	 * <p>The main Tokyo Tyrant class</p>
	 * @link https://php.net/manual/en/class.tokyotyrant.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class TokyoTyrant {

		/**
		 * @var int <p>The default port of the Tokyo Tyrant database</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBDEF_PORT = 1978;

		/**
		 * @var int <p>string is equal to</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STREQ = 0;

		/**
		 * @var int <p>string is included in</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STRINC = 1;

		/**
		 * @var int <p>string begins with</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STRBW = 2;

		/**
		 * @var int <p>string ends with</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STREW = 3;

		/**
		 * @var int <p>string includes all tokens in</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STRAND = 4;

		/**
		 * @var int <p>string includes at least one token in</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STROR = 5;

		/**
		 * @var int <p>string is equal to at least one token in</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STROREQ = 6;

		/**
		 * @var int <p>string matches regular expressions of</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_STRRX = 7;

		/**
		 * @var int <p>number is equal to</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMEQ = 8;

		/**
		 * @var int <p>number is greater than</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMGT = 9;

		/**
		 * @var int <p>number is greater than or equal to</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMGE = 10;

		/**
		 * @var int <p>number is less than</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMLT = 11;

		/**
		 * @var int <p>number is less than or equal to</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMLE = 12;

		/**
		 * @var int <p>number is between two tokens of</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMBT = 13;

		/**
		 * @var int <p>number is equal to at least one token in</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NUMOREQ = 14;

		/**
		 * @var int <p>negation flag</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NEGATE = 16777216;

		/**
		 * @var int <p>no index flag</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQC_NOIDX = 33554432;

		/**
		 * @var int <p>string ascending</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQO_STRASC = 0;

		/**
		 * @var int <p>string descending</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQO_STRDESC = 1;

		/**
		 * @var int <p>number ascending</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQO_NUMASC = 2;

		/**
		 * @var int <p>number descending</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQO_NUMDESC = 3;

		/**
		 * @var int <p>lexical string</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_LEXICAL = 0;

		/**
		 * @var int <p>decimal string</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_DECIMAL = 1;

		/**
		 * @var int <p>token inverted index (Tokyo Tyrant &gt;= 1.1.29)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_TOKEN = 2;

		/**
		 * @var int <p>QGRAM inverted index (Tokyo Tyrant &gt;= 1.1.29)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_QGRAM = 3;

		/**
		 * @var int <p>optimize</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_OPT = 9998;

		/**
		 * @var int <p>void</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_VOID = 9999;

		/**
		 * @var int <p>keep existing index</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBIT_KEEP = 16777216;

		/**
		 * @var int <p>full-text search with the phrase of (Tokyo Tyrant &gt;= 1.1.29)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQCFTS_PH = 15;

		/**
		 * @var int <p>Metasearch union between records (Tokyo Tyrant &gt;= 1.1.33)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQCFTS_AND = 16;

		/**
		 * @var int <p>Metasearch intersection between records (Tokyo Tyrant &gt;= 1.1.33)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQCFTS_OR = 17;

		/**
		 * @var int <p>Metasearch difference between records (Tokyo Tyrant &gt;= 1.1.33)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBQCFTS_EX = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBXO_LCKREC = 1;

		/**
		 * @var int <p>global locking</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBXOLCK_GLB = 2;

		/**
		 * @var int <p>record type int</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBREC_INT = 1;

		/**
		 * @var int <p>record type float (double)</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBREC_DBL = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBMS_UNION = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBMS_ISECT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBMS_DIFF = 2;

		/**
		 * @var int <p>Whether to reconnect on connection failure. It is recommended to have this parameter on for persistent connections</p>
		 * @link https://php.net/manual/en/class.tokyotyrant.php
		 */
		const RDBT_RECON = 1;

		/**
		 * Construct a new TokyoTyrant object
		 * <p>Constructs a new TokyoTyrant object and optionally connects to the database</p>
		 * @param string $host <p>The hostname. Default: <b><code>NULL</code></b></p>
		 * @param int $port <p>port number. Default: 1978</p>
		 * @param array $options <p>Connection options: timeout (default: 5.0), reconnect (default: <b><code>TRUE</code></b>) and persistent (default: <b><code>TRUE</code></b>)</p>
		 * @return self <p>Throws TokyoTyrantException if connection to database fails</p>
		 * @link https://php.net/manual/en/tokyotyrant.construct.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function __construct(string $host = NULL, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL) {}

		/**
		 * Adds to a numeric key
		 * <p>Adds to an int or double value. This increments the value by the given amount and returns the new value. If the key does not exist a new key is created with initial value of the increment parameter.</p>
		 * @param string $key <p>The string key</p>
		 * @param int|float $increment <p>The amount to increment</p>
		 * @param int $type <p><b><code>TokyoTyrant::RDBREC_INT</code></b> or <b><code>TokyoTyrant::RDBREC_DBL</code></b> constant. If this parameter is omitted the type is guessed from the <code>increment</code> parameters type.</p>
		 * @return int|float <p>Returns the new value on success</p>
		 * @link https://php.net/manual/en/tokyotyrant.add.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function add(string $key, $increment, int $type = 0) {}

		/**
		 * Connect to a database
		 * <p>Connects to a remote database</p>
		 * @param string $host <p>The hostname</p>
		 * @param int $port <p>The port. Default: 1978</p>
		 * @param array $options <p>Connection options: timeout (default: 5.0), reconnect (default: <b><code>TRUE</code></b>) and persistent (default: <b><code>TRUE</code></b>)</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.connect.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connect(string $host, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL): \TokyoTyrant {}

		/**
		 * Connects to a database
		 * <p>Connects to a database using an uri</p>
		 * @param string $uri <p>An URI to the database. For example <code>tcp://localhost:1979/</code></p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.connecturi.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connectUri(string $uri): \TokyoTyrant {}

		/**
		 * Copies the database
		 * <p>Makes a copy of the current database</p>
		 * @param string $path <p>Path to where to copy the database. The user running the remote database must have a write access to the directory.</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.copy.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function copy(string $path): \TokyoTyrant {}

		/**
		 * Execute a remote script
		 * <p>Executes a remote script extension.</p>
		 * @param string $name <p>Name of the function to execute</p>
		 * @param int $options <p>Either <b><code>TokyoTyrant::RDBXO_LCKREC</code></b> for record locking and <b><code>TokyoTyrant::RDBXO_LCKGLB</code></b> for global locking.</p>
		 * @param string $key <p>The key to pass to the function</p>
		 * @param string $value <p>The value to pass to the function</p>
		 * @return string <p>Returns the result of the script function</p>
		 * @link https://php.net/manual/en/tokyotyrant.ext.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function ext(string $name, int $options, string $key, string $value): string {}

		/**
		 * Returns the forward matching keys
		 * <p>Returns the forward matching keys from the database</p>
		 * @param string $prefix <p>Prefix of the keys</p>
		 * @param int $max_recs <p>Maximum records to return</p>
		 * @return array <p>Returns an array of matching keys. The values are not returned</p>
		 * @link https://php.net/manual/en/tokyotyrant.fwmkeys.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function fwmKeys(string $prefix, int $max_recs): array {}

		/**
		 * The get purpose
		 * <p>This method is used to return a value or multiple values. This method accepts a <code>string</code> or an <code>array</code> as a value.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of <code>string</code> keys</p>
		 * @return mixed <p>Returns a string or an array based on the given parameters. Throws a TokyoTyrantException on error. If string is passed null is returned if the key is not found. In case an array is given as an parameter only existing keys will be returned. It is not an error to pass a key that does not exist.</p>
		 * @link https://php.net/manual/en/tokyotyrant.get.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function get($keys) {}

		/**
		 * Get an iterator
		 * <p>Gets an iterator for iterating all keys / values in the database.</p>
		 * @return TokyoTyrantIterator <p>This method returns TokyoTyrantIterator object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.getiterator.php
		 * @since No version information available, might only be in Git
		 */
		public function getIterator(): \TokyoTyrantIterator {}

		/**
		 * Number of records in the database
		 * <p>Returns the number of records in the database</p>
		 * @return int <p>Returns number of records in the database</p>
		 * @link https://php.net/manual/en/tokyotyrant.num.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function num(): int {}

		/**
		 * Removes records
		 * <p>Removes a record or multiple records. This method accepts a <code>string</code> for a single key or an array of keys for multiple records.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of <code>string</code> keys</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out($keys): \TokyoTyrant {}

		/**
		 * Puts values
		 * <p>Puts a key-value pair into the database or multiple key-value pairs. If <code>keys</code> is string then the second parameter value defines the value. The second parameter is mandatory if <code>keys</code> is a string. If the key exists the value will be replaced with new value.</p>
		 * @param mixed $keys <p>A string key or an array of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.put.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function put($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Concatenates to a record
		 * <p>Appends a value into existing key or multiple values if <code>keys</code> is an array. The second parameter is mandatory if <code>keys</code> is a string. If the record does not exist a new record is created.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putcat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putCat($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Puts a record
		 * <p>Puts a key-value pair into the database or multiple key-value pairs. If <code>keys</code> is string then the second parameter value defines the value. The second parameter is mandatory if <code>keys</code> is a string. If the key already exists this method throws an exception indicating that the records exists.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of key-value pairs</p>
		 * @param string $value <p>The <code>string</code> value</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putkeep.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putKeep($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Puts value
		 * <p>Puts a key-value pair into the database or multiple key-value pairs. If <code>keys</code> is string then the second parameter value defines the value. The second parameter is mandatory if <code>keys</code> is a string. This method does not wait for the response from the server.</p>
		 * @param mixed $keys <p>A string key or an array of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putnr.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putNr($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Concatenates to a record
		 * <p>Concatenate to a record and shift to left.</p>
		 * @param string $key <p>A string key</p>
		 * @param string $value <p>The value to concatenate</p>
		 * @param int $width <p>The width of the record</p>
		 * @return mixed <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putshl.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putShl(string $key, string $value, int $width) {}

		/**
		 * Restore the database
		 * <p>Restore the database from the update log.</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $log_dir <p>Directory where the log is</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency: Default: <b><code>TRUE</code></b></p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.restore.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function restore(string $log_dir, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Set the replication master
		 * <p>Sets the replication master of the database</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $host <p>Hostname of the replication master. If <b><code>NULL</code></b> the replication is disabled.</p>
		 * @param int $port <p>Port of the replication master</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency.</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.setmaster.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Returns the size of the value
		 * <p>Returns the size of a value by key</p>
		 * @param string $key <p>The key of which size to fetch</p>
		 * @return int <p>Returns the size of the key or throw TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrant.size.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function size(string $key): int {}

		/**
		 * Get statistics
		 * <p>Returns statistics of the remote database</p>
		 * @return array <p>Returns an array of key value pairs describing the statistics</p>
		 * @link https://php.net/manual/en/tokyotyrant.stat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function stat(): array {}

		/**
		 * Synchronize the database
		 * <p>Synchronizes the database on to the physical device</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.sync.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function sync() {}

		/**
		 * Tunes connection values
		 * <p>Tunes database connection options.</p>
		 * @param float $timeout <p>The objects timeout value (default: 5.0)</p>
		 * @param int $options <p>Bitmask of options to tune. This can be either 0 or <b><code>TokyoTyrant::RDBT_RECON</code></b>. It is recommended not to change the second parameter.</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.tune.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function tune(float $timeout, int $options = TokyoTyrant::RDBT_RECON): \TokyoTyrant {}

		/**
		 * Empties the database
		 * <p>Empties a remote database</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.vanish.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function vanish() {}
	}

	/**
	 * <p>TokyoTyrantException</p>
	 * @link https://php.net/manual/en/class.tokyotyrantexception.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class tokyotyrantexception extends \Exception {

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Provides an iterator for TokyoTyrant and TokyoTyrantTable objects. The iterator iterates over all keys and values in the database. TokyoTyrantIterator was added in version 0.2.0.</p>
	 * @link https://php.net/manual/en/class.tokyotyrantiterator.php
	 * @since PECL tokyo_tyrant >= 0.2.0
	 */
	class TokyoTyrantIterator implements \Iterator {

		/**
		 * Construct an iterator
		 * <p>Construct a new TokyoTyrantIterator object. One connection can have multiple iterators but it is not quaranteed that all items are traversed in that case. <code>object</code> parameter can be either an of instance TokyoTyrant or TokyoTyrantTable.</p>
		 * @param mixed $object
		 * @return self <p>Throws an exception if iterator initialization fails.</p>
		 * @link https://php.net/manual/en/tokyotyrantiterator.construct.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function __construct($object) {}

		/**
		 * Adds to a numeric key
		 * <p>Adds to an int or double value. This increments the value by the given amount and returns the new value. If the key does not exist a new key is created with initial value of the increment parameter.</p>
		 * @param string $key <p>The string key</p>
		 * @param int|float $increment <p>The amount to increment</p>
		 * @param int $type <p><b><code>TokyoTyrant::RDBREC_INT</code></b> or <b><code>TokyoTyrant::RDBREC_DBL</code></b> constant. If this parameter is omitted the type is guessed from the <code>increment</code> parameters type.</p>
		 * @return int|float <p>Returns the new value on success</p>
		 * @link https://php.net/manual/en/tokyotyrant.add.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function add(string $key, $increment, int $type = 0) {}

		/**
		 * Connect to a database
		 * <p>Connects to a remote database</p>
		 * @param string $host <p>The hostname</p>
		 * @param int $port <p>The port. Default: 1978</p>
		 * @param array $options <p>Connection options: timeout (default: 5.0), reconnect (default: <b><code>TRUE</code></b>) and persistent (default: <b><code>TRUE</code></b>)</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.connect.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connect(string $host, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL): \TokyoTyrant {}

		/**
		 * Connects to a database
		 * <p>Connects to a database using an uri</p>
		 * @param string $uri <p>An URI to the database. For example <code>tcp://localhost:1979/</code></p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.connecturi.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connectUri(string $uri): \TokyoTyrant {}

		/**
		 * Copies the database
		 * <p>Makes a copy of the current database</p>
		 * @param string $path <p>Path to where to copy the database. The user running the remote database must have a write access to the directory.</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.copy.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function copy(string $path): \TokyoTyrant {}

		/**
		 * Get the current value
		 * <p>Returns the current value during iteration.</p>
		 * @return mixed <p>Returns the current value on success and false on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrantiterator.current.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function current() {}

		/**
		 * Execute a remote script
		 * <p>Executes a remote script extension.</p>
		 * @param string $name <p>Name of the function to execute</p>
		 * @param int $options <p>Either <b><code>TokyoTyrant::RDBXO_LCKREC</code></b> for record locking and <b><code>TokyoTyrant::RDBXO_LCKGLB</code></b> for global locking.</p>
		 * @param string $key <p>The key to pass to the function</p>
		 * @param string $value <p>The value to pass to the function</p>
		 * @return string <p>Returns the result of the script function</p>
		 * @link https://php.net/manual/en/tokyotyrant.ext.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function ext(string $name, int $options, string $key, string $value): string {}

		/**
		 * Returns the forward matching keys
		 * <p>Returns the forward matching keys from the database</p>
		 * @param string $prefix <p>Prefix of the keys</p>
		 * @param int $max_recs <p>Maximum records to return</p>
		 * @return array <p>Returns an array of matching keys. The values are not returned</p>
		 * @link https://php.net/manual/en/tokyotyrant.fwmkeys.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function fwmKeys(string $prefix, int $max_recs): array {}

		/**
		 * The get purpose
		 * <p>This method is used to return a value or multiple values. This method accepts a <code>string</code> or an <code>array</code> as a value.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of <code>string</code> keys</p>
		 * @return mixed <p>Returns a string or an array based on the given parameters. Throws a TokyoTyrantException on error. If string is passed null is returned if the key is not found. In case an array is given as an parameter only existing keys will be returned. It is not an error to pass a key that does not exist.</p>
		 * @link https://php.net/manual/en/tokyotyrant.get.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function get($keys) {}

		/**
		 * Get an iterator
		 * <p>Gets an iterator for iterating all keys / values in the database.</p>
		 * @return TokyoTyrantIterator <p>This method returns TokyoTyrantIterator object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.getiterator.php
		 * @since No version information available, might only be in Git
		 */
		public function getIterator(): \TokyoTyrantIterator {}

		/**
		 * Returns the current key
		 * <p>Returns the current key.</p>
		 * @return mixed <p>Returns the current key on success and false on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrantiterator.key.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function key() {}

		/**
		 * Move to next key
		 * <p>Move to next key during iteration and return it's value.</p>
		 * @return mixed <p>Returns the next value on success and false on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrantiterator.next.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function next() {}

		/**
		 * Number of records in the database
		 * <p>Returns the number of records in the database</p>
		 * @return int <p>Returns number of records in the database</p>
		 * @link https://php.net/manual/en/tokyotyrant.num.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function num(): int {}

		/**
		 * Removes records
		 * <p>Removes a record or multiple records. This method accepts a <code>string</code> for a single key or an array of keys for multiple records.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of <code>string</code> keys</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out($keys): \TokyoTyrant {}

		/**
		 * Puts values
		 * <p>Puts a key-value pair into the database or multiple key-value pairs. If <code>keys</code> is string then the second parameter value defines the value. The second parameter is mandatory if <code>keys</code> is a string. If the key exists the value will be replaced with new value.</p>
		 * @param mixed $keys <p>A string key or an array of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.put.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function put($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Concatenates to a record
		 * <p>Appends a value into existing key or multiple values if <code>keys</code> is an array. The second parameter is mandatory if <code>keys</code> is a string. If the record does not exist a new record is created.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putcat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putCat($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Puts a record
		 * <p>Puts a key-value pair into the database or multiple key-value pairs. If <code>keys</code> is string then the second parameter value defines the value. The second parameter is mandatory if <code>keys</code> is a string. If the key already exists this method throws an exception indicating that the records exists.</p>
		 * @param mixed $keys <p>A <code>string</code> key or an <code>array</code> of key-value pairs</p>
		 * @param string $value <p>The <code>string</code> value</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putkeep.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putKeep($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Puts value
		 * <p>Puts a key-value pair into the database or multiple key-value pairs. If <code>keys</code> is string then the second parameter value defines the value. The second parameter is mandatory if <code>keys</code> is a string. This method does not wait for the response from the server.</p>
		 * @param mixed $keys <p>A string key or an array of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putnr.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putNr($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * Concatenates to a record
		 * <p>Concatenate to a record and shift to left.</p>
		 * @param string $key <p>A string key</p>
		 * @param string $value <p>The value to concatenate</p>
		 * @param int $width <p>The width of the record</p>
		 * @return mixed <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.putshl.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putShl(string $key, string $value, int $width) {}

		/**
		 * Restore the database
		 * <p>Restore the database from the update log.</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $log_dir <p>Directory where the log is</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency: Default: <b><code>TRUE</code></b></p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.restore.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function restore(string $log_dir, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Rewinds the iterator
		 * <p>Rewinds the iterator for new iteration. Called automatically at the beginning of foreach.</p>
		 * @return void <p>Throws TokyoTyrantException if iterator initialization fails.</p>
		 * @link https://php.net/manual/en/tokyotyrantiterator.rewind.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function rewind(): void {}

		/**
		 * Set the replication master
		 * <p>Sets the replication master of the database</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $host <p>Hostname of the replication master. If <b><code>NULL</code></b> the replication is disabled.</p>
		 * @param int $port <p>Port of the replication master</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency.</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.setmaster.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Returns the size of the value
		 * <p>Returns the size of a value by key</p>
		 * @param string $key <p>The key of which size to fetch</p>
		 * @return int <p>Returns the size of the key or throw TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrant.size.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function size(string $key): int {}

		/**
		 * Get statistics
		 * <p>Returns statistics of the remote database</p>
		 * @return array <p>Returns an array of key value pairs describing the statistics</p>
		 * @link https://php.net/manual/en/tokyotyrant.stat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function stat(): array {}

		/**
		 * Synchronize the database
		 * <p>Synchronizes the database on to the physical device</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.sync.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function sync() {}

		/**
		 * Tunes connection values
		 * <p>Tunes database connection options.</p>
		 * @param float $timeout <p>The objects timeout value (default: 5.0)</p>
		 * @param int $options <p>Bitmask of options to tune. This can be either 0 or <b><code>TokyoTyrant::RDBT_RECON</code></b>. It is recommended not to change the second parameter.</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.tune.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function tune(float $timeout, int $options = TokyoTyrant::RDBT_RECON): \TokyoTyrant {}

		/**
		 * Rewinds the iterator
		 * <p>Checks whether the internal pointer points to valid element.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the current item is valid and <b><code>FALSE</code></b> if not.</p>
		 * @link https://php.net/manual/en/tokyotyrantiterator.valid.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function valid(): bool {}

		/**
		 * Empties the database
		 * <p>Empties a remote database</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.vanish.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function vanish() {}
	}

	/**
	 * <p>This class is used to query the table databases</p>
	 * @link https://php.net/manual/en/class.tokyotyrantquery.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class TokyoTyrantQuery implements \Iterator {

		/**
		 * Construct a new query
		 * <p>Construct a new query object</p>
		 * @param \TokyoTyrantTable $table <p>TokyoTyrantTable object with active database connection</p>
		 * @return self <p>Returns a new TokyoTyrantQuery object and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.construct.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function __construct(\TokyoTyrantTable $table) {}

		/**
		 * Adds a condition to the query
		 * <p>Adds a condition to the query. Condition can be something like: get all keys which value matches expr.</p>
		 * @param string $name <p>Name of the column in the condition</p>
		 * @param int $op <p>The operator. One of the <b><code>TokyoTyrant::RDBQC_&#42;</code></b> constants</p>
		 * @param string $expr <p>The expression</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.addcond.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function addCond(string $name, int $op, string $expr) {}

		/**
		 * Counts records
		 * <p>Returns a count of how many records a query returns.</p>
		 * @return int <p>Returns a count of matching rows and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.count.php
		 * @since No version information available, might only be in Git
		 */
		public function count(): int {}

		/**
		 * Returns the current element
		 * <p>Returns the current element. Part of Iterator interface</p>
		 * @return array <p>Returns the current row</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.current.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function current(): array {}

		/**
		 * Get the hint string of the query
		 * <p>Get the hint string of the query. The hint string contains information about an executed query and it could be compared to for example MySQL EXPLAIN statement.</p>
		 * @return string <p>This method always returns a string</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.hint.php
		 * @since No version information available, might only be in Git
		 */
		public function hint(): string {}

		/**
		 * Returns the current key
		 * <p>Returns the current key. Part of the Iterator interface</p>
		 * @return string <p>Returns the current key and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.key.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function key(): string {}

		/**
		 * Retrieve records with multiple queries
		 * <p>Executes multiple queries on a database and returns matching records. The current object is always the left most object in the search.</p>
		 * @param array $queries <p>Array of TokyoTyrantQuery objects</p>
		 * @param int $type <p>One of the <b><code>TokyoTyrant::RDBMS_&#42;</code></b> constants</p>
		 * @return array <p>Returns the matching rows and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.metasearch.php
		 * @since No version information available, might only be in Git
		 */
		public function metaSearch(array $queries, int $type): array {}

		/**
		 * Moves the iterator to next entry
		 * <p>Returns the next result in the resultset. Part of the Iterator interface.</p>
		 * @return array <p>Returns the next row and throws TokyoTyrantException on error.</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.next.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function next(): array {}

		/**
		 * Removes records based on query
		 * <p>Removes all records that match the query. Works exactly like search but removes the records instead of returning them.</p>
		 * @return TokyoTyrantQuery <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out(): \TokyoTyrantQuery {}

		/**
		 * Rewinds the iterator
		 * <p>Rewind the resultset and executes the query if it has not been executed. Part of the Iterator interface.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b></p>
		 * @link https://php.net/manual/en/tokyotyrantquery.rewind.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function rewind(): bool {}

		/**
		 * Searches records
		 * <p>Executes a search on the table database. Returns an array of arrays containing the matching records. In the returned array the first level is the primary key of the data and the second level is the row data.</p>
		 * @return array <p>Returns the matching rows and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.search.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function search(): array {}

		/**
		 * Limit results
		 * <p>Set the maximum amount of records to return on a query.</p>
		 * @param int $max <p>Maximum amount of records. Default: -1</p>
		 * @param int $skip <p>How many records to skip from the start. Default: -1</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.setlimit.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setLimit(int $max = NULL, int $skip = NULL) {}

		/**
		 * Orders results
		 * <p>Sets the order of a query</p>
		 * @param string $name <p>The column name to apply the ordering on.</p>
		 * @param int $type <p>The <code>type</code> can be one of the following constants:</p> <ul> <li>  <b><code>TokyoTyrant::RDBQO_STRASC</code></b> - String ascending  </li> <li>  <b><code>TokyoTyrant::RDBQO_STRDESC</code></b> - String descending  </li> <li>  <b><code>TokyoTyrant::RDBQO_NUMASC</code></b> - Numberic ascending  </li> <li>  <b><code>TokyoTyrant::RDBQO_NUMDESC</code></b> - String descending  </li> </ul>
		 * @return mixed <p>This method returns the current object.</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.setorder.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setOrder(string $name, int $type) {}

		/**
		 * Checks the validity of current item
		 * <p>Checks if the current item is valid. Part of the Iterator interface</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the current item is valid and <b><code>FALSE</code></b> if not.</p>
		 * @link https://php.net/manual/en/tokyotyrantquery.valid.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Provides an API to the table databases. A table database can be create using the following command: <code>ttserver -port 1979 /tmp/tt_table.tct</code>. In Tokyo Tyrant the table API is a schemaless database which can store arbitrary amount of key-value pairs under a single primary key.</p>
	 * @link https://php.net/manual/en/class.tokyotyranttable.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class TokyoTyrantTable extends \TokyoTyrant {

		/**
		 * Construct a new TokyoTyrant object
		 * <p>Constructs a new TokyoTyrant object and optionally connects to the database</p>
		 * @param string $host <p>The hostname. Default: <b><code>NULL</code></b></p>
		 * @param int $port <p>port number. Default: 1978</p>
		 * @param array $options <p>Connection options: timeout (default: 5.0), reconnect (default: <b><code>TRUE</code></b>) and persistent (default: <b><code>TRUE</code></b>)</p>
		 * @return self <p>Throws TokyoTyrantException if connection to database fails</p>
		 * @link https://php.net/manual/en/tokyotyrant.construct.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function __construct(string $host = NULL, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL) {}

		/**
		 * Adds a record
		 * <p>This method is not supported with table databases.</p>
		 * @param string $key <p>The string key</p>
		 * @param mixed $increment <p>The amount to increment</p>
		 * @param string $type <p><b><code>TokyoTyrant::RDB_RECINT</code></b> or <b><code>TokyoTyrant::RDB_RECDBL</code></b> constant. If this parameter is omitted the type is guessed from the <code>increment</code> parameters type.</p>
		 * @return void <p>This method throws an TokyoTyrantException if used through this class.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.add.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function add(string $key, $increment, string $type = NULL): void {}

		/**
		 * Connect to a database
		 * <p>Connects to a remote database</p>
		 * @param string $host <p>The hostname</p>
		 * @param int $port <p>The port. Default: 1978</p>
		 * @param array $options <p>Connection options: timeout (default: 5.0), reconnect (default: <b><code>TRUE</code></b>) and persistent (default: <b><code>TRUE</code></b>)</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.connect.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connect(string $host, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL): \TokyoTyrant {}

		/**
		 * Connects to a database
		 * <p>Connects to a database using an uri</p>
		 * @param string $uri <p>An URI to the database. For example <code>tcp://localhost:1979/</code></p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.connecturi.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connectUri(string $uri): \TokyoTyrant {}

		/**
		 * Copies the database
		 * <p>Makes a copy of the current database</p>
		 * @param string $path <p>Path to where to copy the database. The user running the remote database must have a write access to the directory.</p>
		 * @return TokyoTyrant <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.copy.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function copy(string $path): \TokyoTyrant {}

		/**
		 * Execute a remote script
		 * <p>Executes a remote script extension.</p>
		 * @param string $name <p>Name of the function to execute</p>
		 * @param int $options <p>Either <b><code>TokyoTyrant::RDBXO_LCKREC</code></b> for record locking and <b><code>TokyoTyrant::RDBXO_LCKGLB</code></b> for global locking.</p>
		 * @param string $key <p>The key to pass to the function</p>
		 * @param string $value <p>The value to pass to the function</p>
		 * @return string <p>Returns the result of the script function</p>
		 * @link https://php.net/manual/en/tokyotyrant.ext.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function ext(string $name, int $options, string $key, string $value): string {}

		/**
		 * Returns the forward matching keys
		 * <p>Returns the forward matching keys from the database</p>
		 * @param string $prefix <p>Prefix of the keys</p>
		 * @param int $max_recs <p>Maximum records to return</p>
		 * @return array <p>Returns an array of matching keys. The values are not returned</p>
		 * @link https://php.net/manual/en/tokyotyrant.fwmkeys.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function fwmKeys(string $prefix, int $max_recs): array {}

		/**
		 * Generate unique id
		 * <p>Generates an unique id inside the table database. In table databases rows are referenced using a numeric primary key.</p>
		 * @return int <p>Returns an unique id or throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyranttable.genuid.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function genUid(): int {}

		/**
		 * Get a row
		 * <p>Gets a row from table database. <code>keys</code> is a single integer for the primary key of the row or an array of integers for multiple rows.</p>
		 * @param mixed $keys <p>The primary key, can be a string or an integer</p>
		 * @return array <p>Returns the row as an array</p>
		 * @link https://php.net/manual/en/tokyotyranttable.get.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function get($keys): array {}

		/**
		 * Get an iterator
		 * <p>Gets an iterator for iterating all keys / values in the database.</p>
		 * @return TokyoTyrantIterator <p>This method returns TokyoTyrantIterator object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.getiterator.php
		 * @since No version information available, might only be in Git
		 */
		public function getIterator(): \TokyoTyrantIterator {}

		/**
		 * Get a query object
		 * <p>Get a query object to execute searches on the database</p>
		 * @return TokyoTyrantQuery <p>Returns TokyoTyrantQuery on success and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyranttable.getquery.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function getQuery(): \TokyoTyrantQuery {}

		/**
		 * Number of records in the database
		 * <p>Returns the number of records in the database</p>
		 * @return int <p>Returns number of records in the database</p>
		 * @link https://php.net/manual/en/tokyotyrant.num.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function num(): int {}

		/**
		 * Remove records
		 * <p>Removes records from a table database.</p>
		 * @param mixed $keys <p>A single integer key or an array of integers</p>
		 * @return void <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out($keys): void {}

		/**
		 * Store a row
		 * <p>Puts a new row into the database. This method parameters are <code>key</code> which is the primary key of the row, passing <b><code>NULL</code></b> will generate a new unique id. <code>value</code> is an array containing the row contents which is usually key value pairs.</p>
		 * @param string $key <p>The primary key of the row</p>
		 * @param array $columns <p>The row contents</p>
		 * @return int <p>Returns the primary key on success and throws TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyranttable.put.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function put(string $key, array $columns): int {}

		/**
		 * Concatenates to a row
		 * <p>This method can be used to add new columns to existing records. Existing keys will be left unmodified but any new columns will be appended to the row. Passing null as key will generate a new row.</p>
		 * @param string $key <p>The primary key of the row or <b><code>NULL</code></b></p>
		 * @param array $columns <p>Array of row contents</p>
		 * @return void <p>Returns the primary key and throws TokyoTyrantException on error.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.putcat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putCat(string $key, array $columns): void {}

		/**
		 * Put a new record
		 * <p>Puts a new record into the database. If the key already exists this method throws an exception indicating that the records exists.</p>
		 * @param string $key <p>The primary key of the row or <b><code>NULL</code></b></p>
		 * @param array $columns <p>Array of the row contents</p>
		 * @return void <p>Returns the primary key and throws TokyoTyrantException on error.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.putkeep.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putKeep(string $key, array $columns): void {}

		/**
		 * Puts value
		 * <p>This method is not supported on table databases. Calling this method through TokyoTyrantTable is considered an error and an TokyoTyrantException will be thrown.</p>
		 * @param mixed $keys <p>A string key or an array of key-value pairs</p>
		 * @param string $value <p>The value in case a string key is used</p>
		 * @return void <p>This method is not supported on table databases. Calling this method through TokyoTyrantTable is considered an error and an TokyoTyrantException will be thrown.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.putnr.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putNr($keys, string $value = NULL): void {}

		/**
		 * Concatenates to a record
		 * <p>This method is not supported on table databases. Calling this method through TokyoTyrantTable is considered an error and an TokyoTyrantException will be thrown.</p>
		 * @param string $key <p>A string key</p>
		 * @param string $value <p>The value to concatenate</p>
		 * @param int $width <p>The width of the record</p>
		 * @return void <p>This method is not supported on table databases.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.putshl.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putShl(string $key, string $value, int $width): void {}

		/**
		 * Restore the database
		 * <p>Restore the database from the update log.</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $log_dir <p>Directory where the log is</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency: Default: <b><code>TRUE</code></b></p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.restore.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function restore(string $log_dir, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Sets index
		 * <p>Sets an index on a specified column. The index type is one of the <b><code>TokyoTyrant::RDBIT_&#42;</code></b> constants. Passing <b><code>TokyoTyrant::RDBIT_VOID</code></b> removes the index.</p>
		 * @param string $column <p>The name of the column</p>
		 * @param int $type <p>The index type</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyranttable.setindex.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setIndex(string $column, int $type) {}

		/**
		 * Set the replication master
		 * <p>Sets the replication master of the database</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $host <p>Hostname of the replication master. If <b><code>NULL</code></b> the replication is disabled.</p>
		 * @param int $port <p>Port of the replication master</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency.</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.setmaster.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Returns the size of the value
		 * <p>Returns the size of a value by key</p>
		 * @param string $key <p>The key of which size to fetch</p>
		 * @return int <p>Returns the size of the key or throw TokyoTyrantException on error</p>
		 * @link https://php.net/manual/en/tokyotyrant.size.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function size(string $key): int {}

		/**
		 * Get statistics
		 * <p>Returns statistics of the remote database</p>
		 * @return array <p>Returns an array of key value pairs describing the statistics</p>
		 * @link https://php.net/manual/en/tokyotyrant.stat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function stat(): array {}

		/**
		 * Synchronize the database
		 * <p>Synchronizes the database on to the physical device</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.sync.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function sync() {}

		/**
		 * Tunes connection values
		 * <p>Tunes database connection options.</p>
		 * @param float $timeout <p>The objects timeout value (default: 5.0)</p>
		 * @param int $options <p>Bitmask of options to tune. This can be either 0 or <b><code>TokyoTyrant::RDBT_RECON</code></b>. It is recommended not to change the second parameter.</p>
		 * @return TokyoTyrant <p>This method returns a reference to the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.tune.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function tune(float $timeout, int $options = TokyoTyrant::RDBT_RECON): \TokyoTyrant {}

		/**
		 * Empties the database
		 * <p>Empties a remote database</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/en/tokyotyrant.vanish.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function vanish() {}
	}

}
