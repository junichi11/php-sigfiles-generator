<?php



namespace {

	/**
	 * Returns information about the plugin configuration
	 * <p>This function returns an array of all mysqlnd_memcache related configuration information that is attached to the MySQL connection. This includes MySQL, the Memcache object provided via <code>mysqlnd_memcache_set()</code>, and the table mapping configuration that was automatically collected from the MySQL Server.</p>
	 * @param mixed $connection <p>A handle to a MySQL Server using one of the MySQL API extensions for PHP, which are PDO_MYSQL, mysqli or ext/mysql.</p>
	 * @return array <p>An array of mysqlnd_memcache configuration information on success, otherwise <b><code>FALSE</code></b>.</p><p>The returned array has these elements:</p> <b><b>mysqlnd_memcache_get_config()</b> array structure</b>   Array Key Description     memcached  Instance of Memcached associated to this MySQL connection by <code>mysqlnd_memcache_set()</code>. You can use this to change settings of the memcache connection, or directly by querying the server on this connection.    pattern  The PCRE regular expression used to match the SQL query sent to the server. Queries matching this pattern will be further analyzed to decide whether the query can be intercepted and sent via the memcache interface or whether the query is sent using the general MySQL protocol to the server. The pattern is either the default pattern (<code>MYSQLND_MEMCACHE_DEFAULT_REGEXP</code>) or it is set via <code>mysqlnd_memcache_set()</code>.    mappings  An associative array with a list of all configured containers as they were discovered by this plugin. The key for these elements is the name of the container in the MySQL configuration. The value is described below. The contents of this field is created by querying the MySQL Server during association to MySQL and a memcache connection using <code>mysqlnd_memcache_set()</code>.    mapping_query An SQL query used during <code>mysqlnd_memcache_set()</code> to identify the available containers and mappings. The result of that query is provided in the mappings element.     <b>Mapping entry structure</b>   Array Key Description     prefix  A prefix used while accessing data via memcache. With the MySQL InnoDB Memcache Deamon plugin, this usually begins with @@ and ends with a configurable separator. This prefix is placed in front of the key value while using the memcache protocol.    schema_name  Name of the schema (database) which contains the table being accessed.    table_name  Name of the table which contains the data accessible via memcache protocol.    id_field_name  Name of the database field (column) with the id used as key when accessing the table via memcache. Often this is the database field having a primary key.    separator  The separator used to split the different field values. This is needed as memcache only provides access to a single value while MySQL can map multiple columns to this value. <p><b>Note</b>:</p><p>The separator, which can be set in the MySQL Server configuration, should not be part of any value retrieved via memcache because proper mapping can't be guaranteed.</p>     fields  An array with the name of all fields available for this mapping.
	 * @link http://php.net/manual/en/function.mysqlnd-memcache-get-config.php
	 * @since PECL mysqlnd_memcache >= 1.0.0
	 */
	function mysqlnd_memcache_get_config($connection): array {}

	/**
	 * Associate a MySQL connection with a Memcache connection
	 * <p>Associate <code>mysql_connection</code> with <code>memcache_connection</code> using <code>pattern</code> as a PCRE regular expression, and <code>callback</code> as a notification callback or to unset the association of <code>mysql_connection</code>.</p><p>While associating a MySQL connection with a Memcache connection, this function will query the MySQL Server for its configuration. It will automatically detect whether the server is configured to use the InnoDB Memcache Daemon Plugin or MySQL Cluster NDB Memcache support. It will also query the server to automatically identify exported tables and other configuration options. The results of this automatic configuration can be retrieved using <code>mysqlnd_memcache_get_config()</code>.</p>
	 * @param mixed $mysql_connection <p>A handle to a MySQL Server using one of the MySQL API extensions for PHP, which are PDO_MYSQL, mysqli or ext/mysql.</p>
	 * @param \Memcached $memcache_connection <p>A Memcached instance with a connection to the MySQL Memcache Daemon plugin. If this parameter is omitted, then <code>mysql_connection</code> will be unassociated from any memcache connection. And if a previous association exists, then it will be replaced.</p>
	 * @param string $pattern <p>A regular expression in Perl Compatible Regular Expression syntax used to identify potential Memcache-queries. The query should have three sub patterns. The first subpattern contains the requested field list, the second the name of the ID column from the query and the third the requested value. If this parameter is omitted or os set to <b><code>NULL</code></b>, then a default pattern will be used.</p>
	 * @param callable $callback <p>A callback which will be used whenever a query is being sent to MySQL. The callback will receive a single <code>bool</code> parameter telling if a query was sent via Memcache.</p>
	 * @return bool <p><b><code>TRUE</code></b> if the association or disassociation is successful, otherwise <b><code>FALSE</code></b> if there is an error.</p>
	 * @link http://php.net/manual/en/function.mysqlnd-memcache-set.php
	 * @see mysqlnd_memcache_get_config()
	 * @since PECL mysqlnd_memcache >= 1.0.0
	 */
	function mysqlnd_memcache_set($mysql_connection, \Memcached $memcache_connection = NULL, string $pattern = NULL, callable $callback = NULL): bool {}

	/**
	 * Default regular expression (PCRE style) used for matching <code>SELECT</code> statements that will be mapped into a MySQL Memcache Plugin access point, if possible.   It is also possible to use <code>mysqlnd_memcache_set()</code>, but the default approach is using this regular expression for pattern matching.
	 */
	define('MYSQLND_MEMCACHE_DEFAULT_REGEXP', null);

	/**
	 * Plugin version string, for example, 1.0.0-alpha.
	 */
	define('MYSQLND_MEMCACHE_VERSION', null);

	/**
	 * Plugin version number, for example, 10000.
	 */
	define('MYSQLND_MEMCACHE_VERSION_ID', null);

}
