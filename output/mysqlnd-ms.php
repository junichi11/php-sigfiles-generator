<?php



namespace {

	/**
	 * Returns a list of currently configured servers
	 * <p>Returns a list of currently configured servers.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @return array <p><b><code>false</code></b> on error. Otherwise, returns an array with two entries <code>masters</code> and <code>slaves</code> each of which contains an array listing all corresponding servers.</p><p>The function can be used to check and debug the list of servers currently used by the plugin. It is mostly useful when the list of servers changes at runtime, for example, when using MySQL Fabric.</p><p><code>masters</code> and <code>slaves</code> server entries</p>      Key Description Version      <code>name_from_config</code>   <p>Server entry name from config, if appliciable. NULL if no configuration name is available.</p>  Since 1.6.0.    <code>hostname</code>   <p>Host name of the server.</p>  Since 1.6.0.    <code>user</code>   <p>Database user used to authenticate against the server.</p>  Since 1.6.0.    <code>port</code>   <p>TCP/IP port of the server.</p>  Since 1.6.0.    <code>socket</code>   <p>Unix domain socket of the server.</p>  Since 1.6.0.
	 * @link https://php.net/manual/en/function.mysqlnd-ms-dump-servers.php
	 * @since No version information available, might only be in Git
	 */
	function mysqlnd_ms_dump_servers(mixed $connection): array {}

	/**
	 * Switch to global sharding server for a given table
	 * <p>This function is currently not documented; only its argument list is available.</p><p>MySQL Fabric related.</p><p>Switch the connection to the nodes handling global sharding queries for the given table name.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @param mixed $table_name <p>The table name to ask Fabric about.</p>
	 * @return array <p><b><code>false</code></b> on error. Otherwise, <b><code>true</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-fabric-select-global.php
	 * @since No version information available, might only be in Git
	 */
	function mysqlnd_ms_fabric_select_global(mixed $connection, mixed $table_name): array {}

	/**
	 * Switch to shard
	 * <p>This function is currently not documented; only its argument list is available.</p><p>MySQL Fabric related.</p><p>Switch the connection to the shards responsible for the given table name and shard key.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @param mixed $table_name <p>The table name to ask Fabric about.</p>
	 * @param mixed $shard_key <p>The shard key to ask Fabric about.</p>
	 * @return array <p><b><code>false</code></b> on error. Otherwise, <b><code>true</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-fabric-select-shard.php
	 * @since No version information available, might only be in Git
	 */
	function mysqlnd_ms_fabric_select_shard(mixed $connection, mixed $table_name, mixed $shard_key): array {}

	/**
	 * Returns the latest global transaction ID
	 * <p>Returns a global transaction identifier which belongs to a write operation no older than the last write performed by the client. It is not guaranteed that the global transaction identifier is identical to that one created for the last write transaction performed by the client.</p>
	 * @param mixed $connection <p>A PECL/mysqlnd_ms connection handle to a MySQL server of the type PDO_MYSQL, mysqli&gt; or ext/mysql. The connection handle is obtained when opening a connection with a host name that matches a mysqlnd_ms configuration file entry using any of the above three MySQL driver extensions.</p>
	 * @return string <p>Returns a global transaction ID (GTID) on success. Otherwise, returns <b><code>false</code></b>.</p><p>The function <b>mysqlnd_ms_get_last_gtid()</b> returns the GTID obtained when executing the SQL statement from the <code>fetch_last_gtid</code> entry of the <code>global_transaction_id_injection</code> section from the plugins configuration file.</p><p>The function may be called after the GTID has been incremented.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-get-last-gtid.php
	 * @since PECL mysqlnd_ms >= 1.2.0
	 */
	function mysqlnd_ms_get_last_gtid(mixed $connection): string {}

	/**
	 * Returns an array which describes the last used connection
	 * <p>Returns an array which describes the last used connection from the plugins connection pool currently pointed to by the user connection handle. If using the plugin, a user connection handle represents a pool of database connections. It is not possible to tell from the user connection handles properties to which database server from the pool the user connection handle points.</p><p>The function can be used to debug or monitor PECL mysqlnd_ms.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @return array <p><b><code>false</code></b> on error. Otherwise, an array which describes the connection used to execute the last statement on.</p><p>Array which describes the connection.</p>      Property Description Version      <code>scheme</code>   Connection scheme. Either <code>tcp://host:port</code> or <code>unix://host:socket</code>. If you want to distinguish connections from each other use a combination of <code>scheme</code> and <code>thread_id</code> as a unique key. Neither <code>scheme</code> nor <code>thread_id</code> alone are sufficient to distinguish two connections from each other. Two servers may assign the same <code>thread_id</code> to two different connections. Thus, connections in the pool may have the same <code>thread_id</code>. Also, do not rely on uniqueness of <code>scheme</code> in a pool. Your QA engineers may use the same MySQL server instance for two distinct logical roles and add it multiple times to the pool. This hack is used, for example, in the test suite.  Since 1.1.0.    <code>host</code>   Database server host used with the connection. The host is only set with TCP/IP connections. It is empty with Unix domain or Windows named pipe connections,  Since 1.1.0.    <code>host_info</code>   A character string representing the server hostname and the connection type.  Since 1.1.2.    <code>port</code>   Database server port used with the connection.  Since 1.1.0.    <code>socket_or_pipe</code>   Unix domain socket or Windows named pipe used with the connection. The value is empty for TCP/IP connections.  Since 1.1.2.    <code>thread_id</code>   Connection thread id.  Since 1.1.0.    <code>last_message</code>   Info message obtained from the MySQL C API function mysql_info(). Please, see <code>mysqli_info()</code> for a description.  Since 1.1.0.    <code>errno</code>   Error code.  Since 1.1.0.    <code>error</code>   Error message.  Since 1.1.0.    <code>sqlstate</code>   Error SQLstate code.  Since 1.1.0.
	 * @link https://php.net/manual/en/function.mysqlnd-ms-get-last-used-connection.php
	 * @since PECL mysqlnd_ms >= 1.1.0
	 */
	function mysqlnd_ms_get_last_used_connection(mixed $connection): array {}

	/**
	 * Returns query distribution and connection statistics
	 * <p>Returns an array of statistics collected by the replication and load balancing plugin.</p><p>The PHP configuration setting <code>mysqlnd_ms.collect_statistics</code> controls the collection of statistics. The collection of statistics is disabled by default for performance reasons.</p><p>The scope of the statistics is the <code>PHP</code> process. Depending on your deployment model a <code>PHP</code> process may handle one or multiple requests.</p><p>Statistics are aggregated for all connections and all storage handler. It is not possible to tell how much queries originating from <code>mysqli</code>, <code>PDO_MySQL</code> or <code>mysql</code> API calls have contributed to the aggregated data values.</p>
	 * @return array <p>Returns <b><code>null</code></b> if the PHP configuration directive <code>mysqlnd_ms.enable</code> has disabled the plugin. Otherwise, returns array of statistics.</p><p>Array of statistics</p>      Statistic Description Version      <code>use_slave</code>   <p>The semantics of this statistic has changed between 1.0.1 - 1.1.0.</p> <p>The meaning for version 1.0.1 is as follows. Number of statements considered as read-only by the built-in query analyzer. Neither statements which begin with a SQL hint to force use of slave nor statements directed to a slave by an user-defined callback are included. The total number of statements sent to the slaves is <code>use_slave</code> + <code>use_slave_sql_hint</code> + <code>use_slave_callback</code>.</p> <p>PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The statistics is now set by the internal load balancing filter. With version 1.1.0 the load balancing filter is always the last in the filter chain, if used. In future versions a load balancing filter may be followed by other filters causing another change in the meaning of the statistic. If, in the future, a load balancing filter is followed by another filter it is no longer guaranteed that the statement, which increments <code>use_slave</code>, will be executed on the slaves.</p> <p>The meaning for version 1.1.0 is as follows. Number of statements sent to the slaves. Statements directed to a slave by the user filter (an user-defined callback) are not included. The latter are counted by <code>use_slave_callback</code>.</p>  Since 1.0.0.    <code>use_master</code>   <p>The semantics of this statistic has changed between 1.0.1 - 1.1.0.</p> <p>The meaning for version 1.0.1 is as follows. Number of statements not considered as read-only by the built-in query analyzer. Neither statements which begin with a SQL hint to force use of master nor statements directed to a master by an user-defined callback are included. The total number of statements sent to the master is <code>use_master</code> + <code>use_master_sql_hint</code> + <code>use_master_callback</code>.</p> <p>PECL/mysqlnd_ms 1.1.0 introduces a new concept of chained filters. The statictics is now set by the internal load balancing filter. With version 1.1.0 the load balancing filter is always the last in the filter chain, if used. In future versions a load balancing filter may be followed by other filters causing another change in the meaning of the statistic. If, in the future, a load balancing filter is followed by another filter it is no longer guaranteed that the statement, which increments <code>use_master</code>, will be executed on the slaves.</p> <p>The meaning for version 1.1.0 is as follows. Number of statements sent to the masters. Statements directed to a master by the user filter (an user-defined callback) are not included. The latter are counted by <code>use_master_callback</code>.</p>  Since 1.0.0.    <code>use_slave_guess</code>   Number of statements the built-in query analyzer recommends sending to a slave because they contain no SQL hint to force use of a certain server. The recommendation may be overruled in the following. It is not guaranteed whether the statement will be executed on a slave or not. This is how often the internal <code>is_select</code> function has guessed that a slave shall be used. Please, see also the user space function <code>mysqlnd_ms_query_is_select()</code>.  Since 1.1.0.    <code>use_master_guess</code>   Number of statements the built-in query analyzer recommends sending to a master because they contain no SQL hint to force use of a certain server. The recommendation may be overruled in the following. It is not guaranteed whether the statement will be executed on a slave or not. This is how often the internal <code>is_select</code> function has guessed that a master shall be used. Please, see also the user space function <code>mysqlnd_ms_query_is_select()</code>.  Since 1.1.0.    <code>use_slave_sql_hint</code>   Number of statements sent to a slave because statement begins with the SQL hint to force use of slave.  Since 1.0.0.    <code>use_master_sql_hint</code>   Number of statements sent to a master because statement begins with the SQL hint to force use of master.  Since 1.0.0.    <code>use_last_used_sql_hint</code>   Number of statements sent to server which has run the previous statement, because statement begins with the SQL hint to force use of previously used server.  Since 1.0.0.    <code>use_slave_callback</code>   Number of statements sent to a slave because an user-defined callback has chosen a slave server for statement execution.  Since 1.0.0.    <code>use_master_callback</code>   Number of statements sent to a master because an user-defined callback has chosen a master server for statement execution.  Since 1.0.0.    <code>non_lazy_connections_slave_success</code>   Number of successfully opened slave connections from configurations not using <code>lazy connections</code>. The total number of successfully opened slave connections is <code>non_lazy_connections_slave_success</code> + <code>lazy_connections_slave_success</code>  Since 1.0.0.    <code>non_lazy_connections_slave_failure</code>   Number of failed slave connection attempts from configurations not using <code>lazy connections</code>. The total number of failed slave connection attempts is <code>non_lazy_connections_slave_failure</code> + <code>lazy_connections_slave_failure</code>  Since 1.0.0.    <code>non_lazy_connections_master_success</code>   Number of successfully opened master connections from configurations not using <code>lazy connections</code>. The total number of successfully opened master connections is <code>non_lazy_connections_master_success</code> + <code>lazy_connections_master_success</code>  Since 1.0.0.    <code>non_lazy_connections_master_failure</code>   Number of failed master connection attempts from configurations not using <code>lazy connections</code>. The total number of failed master connection attempts is <code>non_lazy_connections_master_failure</code> + <code>lazy_connections_master_failure</code>  Since 1.0.0.    <code>lazy_connections_slave_success</code>   Number of successfully opened slave connections from configurations using <code>lazy connections</code>.  Since 1.0.0.    <code>lazy_connections_slave_failure</code>   Number of failed slave connection attempts from configurations using <code>lazy connections</code>.  Since 1.0.0.    <code>lazy_connections_master_success</code>   Number of successfully opened master connections from configurations using <code>lazy connections</code>.  Since 1.0.0.    <code>lazy_connections_master_failure</code>   Number of failed master connection attempts from configurations using <code>lazy connections</code>.  Since 1.0.0.    <code>trx_autocommit_on</code>   Number of <code>autocommit</code> mode activations via API calls. This figure may be used to monitor activity related to the plugin configuration setting <code>trx_stickiness</code>. If, for example, you want to know if a certain API call invokes the <code>mysqlnd</code> library function <code>trx_autocommit()</code>, which is a requirement for <code>trx_stickiness</code>, you may call the user API function in question and check if the statistic has changed. The statistic is modified only by the plugins internal subclassed <code>trx_autocommit()</code> method.  Since 1.0.0.    <code>trx_autocommit_off</code>   Number of <code>autocommit</code> mode deactivations via API calls.  Since 1.0.0.    <code>trx_master_forced</code>   Number of statements redirected to the master while <code>trx_stickiness=master</code> and <code>autocommit</code> mode is disabled.  Since 1.0.0.    <code>gtid_autocommit_injections_success</code>   Number of successful SQL injections in autocommit mode as part of the plugins client-side global transaction id emulation.  Since 1.2.0.    <code>gtid_autocommit_injections_failure</code>   Number of failed SQL injections in autocommit mode as part of the plugins client-side global transaction id emulation.  Since 1.2.0.    <code>gtid_commit_injections_success</code>   Number of successful SQL injections in commit mode as part of the plugins client-side global transaction id emulation.  Since 1.2.0.    <code>gtid_commit_injections_failure</code>   Number of failed SQL injections in commit mode as part of the plugins client-side global transaction id emulation.  Since 1.2.0.    <code>gtid_implicit_commit_injections_success</code>   Number of successful SQL injections when implicit commit is detected as part of the plugins client-side global transaction id emulation. Implicit commit happens, for example, when autocommit has been turned off, a query is executed and autocommit is enabled again. In that case, the statement will be committed by the server and SQL to maintain is injected before the autocommit is re-enabled. Another sequence causing an implicit commit is <code>begin()</code>, <code>query()</code>, <code>begin()</code>. The second call to <code>begin()</code> will implicitly commit the transaction started by the first call to <code>begin()</code>. <code>begin()</code> refers to internal library calls not actual PHP user API calls.  Since 1.2.0.    <code>gtid_implicit_commit_injections_failure</code>   Number of failed SQL injections when implicit commit is detected as part of the plugins client-side global transaction id emulation. Implicit commit happens, for example, when autocommit has been turned off, a query is executed and autocommit is enabled again. In that case, the statement will be committed by the server and SQL to maintain is injected before the autocommit is re-enabled.  Since 1.2.0.    <code>transient_error_retries</code>   How often an operation has been retried when a transient error was detected. See also, <code>transient_error</code> plugin configuration file setting.  Since 1.6.0.    <code>fabric_sharding_lookup_servers_success</code>   Number of successful <code>sharding.lookup_servers</code> remote procedure calls to MySQL Fabric. A call is considered successful if the plugin could reach MySQL Fabric and got any reply. The reply itself may or may not be understood by the plugin. Success refers to the network transport only. If the reply was not understood or indicates a valid error condition, <code>fabric_sharding_lookup_servers_xml_failure</code> gets incremented.  Since 1.6.0.    <code>fabric_sharding_lookup_servers_failure</code>   Number of failed <code>sharding.lookup_servers</code> remote procedure calls to MySQL Fabric. A remote procedure call is considered failed if there was a network error in connecting to, writing to or reading from MySQL Fabric.  Since 1.6.0.    <code>fabric_sharding_lookup_servers_time_total</code>   Time spent connecting to,writing to and reading from MySQL Fabrich during the <code>sharding.lookup_servers</code> remote procedure call. The value is aggregated for all calls. Time is measured in microseconds.  Since 1.6.0.    <code>fabric_sharding_lookup_servers_bytes_total</code>   Total number of bytes received from MySQL Fabric in reply to <code>sharding.lookup_servers</code> calls.  Since 1.6.0.    <code>fabric_sharding_lookup_servers_xml_failure</code>   How often a reply from MySQL Fabric to <code>sharding.lookup_servers</code> calls was not understood. Please note, the current experimental implementation does not distinguish between valid errors returned and malformed replies.  Since 1.6.0.    <code>xa_begin</code>   How many XA/distributed transactions have been started using <code>mysqlnd_ms_xa_begin()</code>.  Since 1.6.0.    <code>xa_commit_success</code>   How many XA/distributed transactions have been successfully committed using <code>mysqlnd_ms_xa_commit()</code>.  Since 1.6.0.    <code>xa_commit_failure</code>   How many XA/distributed transactions failed to commit during <code>mysqlnd_ms_xa_commit()</code>.  Since 1.6.0.    <code>xa_rollback_success</code>   How many XA/distributed transactions have been successfully rolled back using <code>mysqlnd_ms_xa_rollback()</code>. The figure does not include implict rollbacks performed as a result of <code>mysqlnd_ms_xa_commit()</code> failure.  Since 1.6.0.    <code>xa_rollback_failure</code>   How many XA/distributed transactions could not be rolled back. This includes failures of <code>mysqlnd_ms_xa_rollback()</code> but also failured during rollback when closing a connection, if <code>rollback_on_close</code> is set. Please, see also <code>xa_rollback_on_close</code> below.  Since 1.6.0.    <code>xa_participants</code>   Total number of participants in any XA transaction started with <code>mysqlnd_ms_xa_begin()</code>.  Since 1.6.0.    <code>xa_rollback_on_close</code>   How many XA transactions have been rolled back implicitly when a connection was close and <code>rollback_on_close</code> is set. Depending on your coding policies, this may hint a flaw in your code as you may prefer to explicitly clean up resources.  Since 1.6.0.    <code>pool_masters_total</code>   Number of master servers (connections) in the internal connection pool.  Since 1.6.0.    <code>pool_slaves_total</code>   Number of slave servers (connections) in the internal connection pool.  Since 1.6.0.    <code>pool_masters_active</code>   Number of master servers (connections) from the internal connection pool which are currently used for picking a connection.  Since 1.6.0.    <code>pool_slaves_active</code>   Number of slave servers (connections) from the internal connection pool which are currently used for picking a connection.  Since 1.6.0.    <code>pool_updates</code>   How often the active connection list has been replaced and a new set of master and slave servers had been installed.  Since 1.6.0.    <code>pool_master_reactivated</code>   How often a master connection has been reused after being flushed from the active list.  Since 1.6.0.    <code>pool_slave_reactivated</code>   How often a slave connection has been reused after being flushed from the active list.  Since 1.6.0.
	 * @link https://php.net/manual/en/function.mysqlnd-ms-get-stats.php
	 * @since PECL mysqlnd_ms >= 1.0.0
	 */
	function mysqlnd_ms_get_stats(): array {}

	/**
	 * Finds whether a table name matches a wildcard pattern or not
	 * <p>Finds whether a table name matches a wildcard pattern or not.</p><p>This function is not of much practical relevance with PECL mysqlnd_ms 1.1.0 because the plugin does not support MySQL replication table filtering yet.</p>
	 * @param string $table_name <p>The table name to check if it is matched by the wildcard.</p>
	 * @param string $wildcard <p>The wildcard pattern to check against the table name. The wildcard pattern supports the same placeholders as MySQL replication filters do.</p> <p>MySQL replication filters can be configured by using the MySQL Server configuration options <code>--replicate-wild-do-table</code> and <code>--replicate-wild-do-db</code>. Please, consult the MySQL Reference Manual to learn more about this MySQL Server feature.</p> <p>The supported placeholders are:</p><ul> <li>  <code>%</code> - zero or more literals  </li> <li>  <code>_</code> - one literal  </li> </ul> <p>Placeholders can be escaped using <code>\</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> <code>table_name</code> is matched by <code>wildcard</code>. Otherwise, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-match-wild.php
	 * @since PECL mysqlnd_ms >= 1.1.0
	 */
	function mysqlnd_ms_match_wild(string $table_name, string $wildcard): bool {}

	/**
	 * Find whether to send the query to the master, the slave or the last used MySQL server
	 * <p>Finds whether to send the query to the master, the slave or the last used MySQL server.</p><p>The plugins built-in read/write split mechanism will be used to analyze the query string to make a recommendation where to send the query. The built-in read/write split mechanism is very basic and simple. The plugin will recommend sending all queries to the MySQL replication master server but those which begin with <code>SELECT</code>, or begin with a SQL hint which enforces sending the query to a slave server. Due to the basic but fast algorithm the plugin may propose to run some read-only statements such as <code>SHOW TABLES</code> on the replication master.</p>
	 * @param string $query <p>Query string to test.</p>
	 * @return int <p>A return value of <b><code>MYSQLND_MS_QUERY_USE_MASTER</code></b> indicates that the query should be send to the MySQL replication master server. The function returns a value of <b><code>MYSQLND_MS_QUERY_USE_SLAVE</code></b> if the query can be run on a slave because it is considered read-only. A value of <b><code>MYSQLND_MS_QUERY_USE_LAST_USED</code></b> is returned to recommend running the query on the last used server. This can either be a MySQL replication master server or a MySQL replication slave server.</p><p>If read write splitting has been disabled by setting <code>mysqlnd_ms.disable_rw_split</code>, the function will always return <b><code>MYSQLND_MS_QUERY_USE_MASTER</code></b> or <b><code>MYSQLND_MS_QUERY_USE_LAST_USED</code></b>.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-query-is-select.php
	 * @since PECL mysqlnd_ms >= 1.0.0
	 */
	function mysqlnd_ms_query_is_select(string $query): int {}

	/**
	 * Sets the quality of service needed from the cluster
	 * <p>Sets the quality of service needed from the cluster. A database cluster delivers a certain quality of service to the user depending on its architecture. A major aspect of the quality of service is the consistency level the cluster can offer. An asynchronous MySQL replication cluster defaults to eventual consistency for slave reads: a slave may serve stale data, current data, or it may have not the requested data at all, because it is not synchronous to the master. In a MySQL replication cluster, only master accesses can give strong consistency, which promises that all clients see each others changes.</p><p>PECL/mysqlnd_ms hides the complexity of choosing appropriate nodes to achieve a certain level of service from the cluster. The "Quality of Service" filter implements the necessary logic. The filter can either be configured in the plugins configuration file, or at runtime using <b>mysqlnd_ms_set_qos()</b>.</p><p>Similar results can be achieved with PECL mysqlnd_ms &lt; 1.2.0, if using SQL hints to force the use of a certain type of node or using the <code>master_on_write</code> plugin configuration option. The first requires more code and causes more work on the application side. The latter is less refined than using the quality of service filter. Settings made through the function call can be reversed, as shown in the example below. The example temporarily switches to a higher service level (session consistency, read your writes) and returns back to the clusters default after it has performed all operations that require the better service. This way, read load on the master can be minimized compared to using <code>master_on_write</code>, which would continue using the master after the first write.</p><p>Since 1.5.0 calls will fail when done in the middle of a transaction if transaction stickiness is enabled and transaction boundaries have been detected. properly.</p>
	 * @param mixed $connection <p>A PECL/mysqlnd_ms connection handle to a MySQL server of the type PDO_MYSQL, mysqli or ext/mysql for which a service level is to be set. The connection handle is obtained when opening a connection with a host name that matches a mysqlnd_ms configuration file entry using any of the above three MySQL driver extensions.</p>
	 * @param int $service_level <p>The requested service level: <b><code>MYSQLND_MS_QOS_CONSISTENCY_EVENTUAL</code></b>, <b><code>MYSQLND_MS_QOS_CONSISTENCY_SESSION</code></b> or <b><code>MYSQLND_MS_QOS_CONSISTENCY_STRONG</code></b>.</p>
	 * @param int $service_level_option <p>An option to parameterize the requested service level. The option can either be <b><code>MYSQLND_MS_QOS_OPTION_GTID</code></b> or <b><code>MYSQLND_MS_QOS_OPTION_AGE</code></b>.</p> <p>The option <b><code>MYSQLND_MS_QOS_OPTION_GTID</code></b> can be used to refine the service level <b><code>MYSQLND_MS_QOS_CONSISTENCY_SESSION</code></b>. It must be combined with a fourth function parameter, the <code>option_value</code>. The <code>option_value</code> shall be a global transaction ID obtained from <code>mysqlnd_ms_get_last_gtid()</code>. If set, the plugin considers both master servers and asynchronous slaves for session consistency (read your writes). Otherwise, only masters are used to achieve session consistency. A slave is considered up-to-date and checked if it has already replicated the global transaction ID from <code>option_value</code>. Please note, searching appropriate slaves is an expensive and slow operation. Use the feature sparsely, if the master cannot handle the read load alone.</p> <p>The <b><code>MYSQLND_MS_QOS_OPTION_AGE</code></b> option can be combined with the <b><code>MYSQLND_MS_QOS_CONSISTENCY_EVENTUAL</code></b> service level, to filter out asynchronous slaves that lag more seconds behind the master than <code>option_value</code>. If set, the plugin will only consider slaves for reading if <code>SHOW SLAVE STATUS</code> reports <code>Slave_IO_Running=Yes</code>, <code>Slave_SQL_Running=Yes</code> and <code>Seconds_Behind_Master &lt;= option_value</code>. Please note, searching appropriate slaves is an expensive and slow operation. Use the feature sparsely in version 1.2.0. Future versions may improve the algorithm used to identify candidates. Please, see the MySQL reference manual about the precision, accuracy and limitations of the MySQL administrative command <code>SHOW SLAVE STATUS</code>.</p>
	 * @param mixed $option_value <p>Parameter value for the service level option. See also the <code>service_level_option</code> parameter.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the connections service level has been switched to the requested. Otherwise, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-set-qos.php
	 * @see mysqlnd_ms_get_last_gtid()
	 * @since PECL mysqlnd_ms < 1.2.0
	 */
	function mysqlnd_ms_set_qos(mixed $connection, int $service_level, int $service_level_option = null, mixed $option_value = null): bool {}

	/**
	 * Sets a callback for user-defined read/write splitting
	 * <p>Sets a callback for user-defined read/write splitting. The plugin will call the callback only if <code>pick[]=user</code> is the default rule for server picking in the relevant section of the plugins configuration file.</p><p>The plugins built-in read/write query split mechanism decisions can be overwritten in two ways. The easiest way is to prepend the query string with the SQL hints <b><code>MYSQLND_MS_MASTER_SWITCH</code></b>, <b><code>MYSQLND_MS_SLAVE_SWITCH</code></b> or <b><code>MYSQLND_MS_LAST_USED_SWITCH</code></b>. Using SQL hints one can control, for example, whether a query shall be send to the MySQL replication master server or one of the slave servers. By help of SQL hints it is not possible to pick a certain slave server for query execution.</p><p>Full control on server selection can be gained using a callback function. Use of a callback is recommended to expert users only because the callback has to cover all cases otherwise handled by the plugin.</p><p>The plugin will invoke the callback function for selecting a server from the lists of configured master and slave servers. The callback function inspects the query to run and picks a server for query execution by returning the hosts URI, as found in the master and slave list.</p><p>If the lazy connections are enabled and the callback chooses a slave server for which no connection has been established so far and establishing the connection to the slave fails, the plugin will return an error upon the next action on the failed connection, for example, when running a query. It is the responsibility of the application developer to handle the error. For example, the application can re-run the query to trigger a new server selection and callback invocation. If so, the callback must make sure to select a different slave, or check slave availability, before returning to the plugin to prevent an endless loop.</p>
	 * @param string $function <p>The function to be called. Class methods may also be invoked statically using this function by passing <code>array($classname, $methodname)</code> to this parameter. Additionally class methods of an object instance may be called by passing <code>array($objectinstance, $methodname)</code> to this parameter.</p>
	 * @return bool <p>Host to run the query on. The host URI is to be taken from the master and slave connection lists passed to the callback function. If callback returns a value neither found in the master nor in the slave connection lists the plugin will fallback to the second pick method configured via the <code>pick[]</code> setting in the plugin configuration file. If not second pick method is given, the plugin falls back to the build-in default pick method for server selection.</p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-set-user-pick-server.php
	 * @see mysqlnd_ms_query_is_select()
	 * @since PECL mysqlnd_ms < 1.1.0
	 */
	function mysqlnd_ms_set_user_pick_server(string $function): bool {}

	/**
	 * Starts a distributed/XA transaction among MySQL servers
	 * <p>Starts a XA transaction among MySQL servers. PECL/mysqlnd_ms acts as a transaction coordinator the distributed transaction.</p><p>Once a global transaction has been started, the plugin injects appropriate <code>XA BEGIN</code> SQL statements on all MySQL servers used in the following. The global transaction is either ended by calling <code>mysqlnd_ms_xa_commit()</code>, <code>mysqlnd_ms_xa_rollback()</code> or by an implicit rollback in case of an error.</p><p>During a global transaction, the plugin tracks all server switches, for example, when switching from one MySQL shard to another MySQL shard. Immediately before a query is run on a server that has not been participating in the global transaction yet, <code>XA BEGIN</code> is executed on the server. From a users perspective the injection happens during a call to a query execution function such as <code>mysqli_query()</code>. Should the injection fail an error is reported to the caller of the query execution function. The failing server does not become a participant in the global transaction. The user may retry executing a query on the server and hereby retry injecting <code>XA BEGIN</code>, abort the global transaction because not all required servers can participate, or ignore and continue the global without the failed server.</p><p>Reasons to fail executing <code>XA BEGIN</code> include but are not limited to a server being unreachable or the server having an open, concurrent XA transaction using the same xid.</p><p>Please note, global and local transactions are mutually exclusive. You cannot start a XA transaction when you have a local transaction open. The local transaction must be ended first. The plugin tries to detect this conflict as early as possible. It monitors API calls for controlling local transactions to learn about the current state. However, if using SQL statements for local transactions such as <code>BEGIN</code>, the plugin may not know the current state and the conflict is not detected before <code>XA BEGIN</code> is injected and executed.</p><p>The use of other XA resources but MySQL servers is not supported by the function. To carry out a global transaction among, for example, a MySQL server and another vendors database system, you should issue the systems SQL commands yourself.</p><p><b>Note</b>: <b>Experimental</b><br></p><p>The feature is currently under development. There may be issues and/or feature limitations. Do not use in production environments.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @param string $gtrid <p>Global transaction identifier (gtrid). The gtrid is a binary string up to 64 bytes long. Please note, depending on your character set settings, 64 characters may require more than 64 bytes to store.</p> <p>In accordance with the MySQL SQL syntax, XA transactions use identifiers made of three parts. An xid consists of a global transaction identifier (gtrid), a branch qualifier (bqual) and a format identifier (formatID). Only the global transaction identifier can and needs to be set.</p> <p>The branch qualifier and format identifier are set automatically. The details should be considered implementation dependent, which may change without prior notice. In version 1.6 the branch qualifier is consecutive number which is incremented whenever a participant joins the global transaction.</p>
	 * @param int $timeout <p>Timeout in seconds. The default value is 60 seconds.</p> <p>The timeout is a hint to the garbage collection. If a transaction is recorded to take longer than expected, the garbage collection begins checking the transactions status.</p> <p>Setting a low value may make the garbage collection check the progress too often. Please note, checking the status of a global transaction may involve connecting to all recorded participants and possibly issuing queries on the servers.</p>
	 * @return int <p>Returns <b><code>true</code></b> if there is no open local or global transaction and a new global transaction can be started. Otherwise, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-xa-begin.php
	 * @see mysqlnd_ms_get_stats()
	 * @since PECL mysqlnd_ms < 1.6.0
	 */
	function mysqlnd_ms_xa_begin(mixed $connection, string $gtrid, int $timeout = null): int {}

	/**
	 * Commits a distributed/XA transaction among MySQL servers
	 * <p>Commits a global transaction among MySQL servers started by <code>mysqlnd_ms_xa_begin()</code>.</p><p>If any of the global transaction participants fails to commit an implicit rollback is performed. It may happen that not all cases can be handled during the rollback. For example, no attempts will be made to reconnect to a participant after the connection to the participant has been lost. Solving cases that cannot easily be rolled back is left to the garbage collection.</p><p><b>Note</b>: <b>Experimental</b><br></p><p>The feature is currently under development. There may be issues and/or feature limitations. Do not use in production environments.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @param string $gtrid <p>Global transaction identifier (gtrid).</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the global transaction has been committed. Otherwise, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-xa-commit.php
	 * @see mysqlnd_ms_get_stats()
	 * @since PECL mysqlnd_ms < 1.6.0
	 */
	function mysqlnd_ms_xa_commit(mixed $connection, string $gtrid): bool {}

	/**
	 * Garbage collects unfinished XA transactions after severe errors
	 * <p>Garbage collects unfinished XA transactions.</p><p>The XA protocol is a blocking protocol. There exist cases when servers participating in a global transaction cannot make progress when the transaction coordinator crashes or disconnects. In such a case, the MySQL servers keep waiting for instructions to finish the XA transaction in question. Because transactions occupy resources, transactions should always be terminated properly.</p><p>Garbage collection requires configuring a state store to track global transactions. Should a PHP client crash in the middle of a transaction and a new PHP client be started, then the built-in garbage collection can learn about the aborted global transaction and terminate it. If you do not configure a state store, the garbage collection cannot perform any cleanup tasks.</p><p>The state store should be crash-safe and be highly available to survive its own crash. Currently, only MySQL is supported as a state store.</p><p>Garbage collection can also be performed automatically in the background. See the plugin configuration directive <code>garbage_collection</code> for details.</p><p><b>Note</b>: <b>Experimental</b><br></p><p>The feature is currently under development. There may be issues and/or feature limitations. Do not use in production environments.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @param string $gtrid <p>Global transaction identifier (gtrid). If given, the garbage collection considers the transaction only. Otherwise, the state store is scanned for any unfinished transaction.</p>
	 * @param bool $ignore_max_retries <p>Whether to ignore the plugin configuration <code>max_retries</code> setting. If garbage collection continuously fails and the <code>max_retries</code> limit is reached prior to finishing the failed global transaction, you can attempt further runs prior to investigating the cause and solving the issue manually by issuing appropriate SQL statements on the participants. Setting the parameter has the same effect as temporarily setting <code>max_retries = 0</code>.</p>
	 * @return int <p>Returns <b><code>true</code></b> if garbage collection was successful. Otherwise, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-xa-gc.php
	 * @see mysqlnd_ms_get_stats()
	 * @since PECL mysqlnd_ms < 1.6.0
	 */
	function mysqlnd_ms_xa_gc(mixed $connection, string $gtrid = null, bool $ignore_max_retries = null): int {}

	/**
	 * Rolls back a distributed/XA transaction among MySQL servers
	 * <p>Rolls back a global transaction among MySQL servers started by <code>mysqlnd_ms_xa_begin()</code>.</p><p>If any of the global transaction participants fails to rollback the situation is left to be solved by the garbage collection.</p><p><b>Note</b>: <b>Experimental</b><br></p><p>The feature is currently under development. There may be issues and/or feature limitations. Do not use in production environments.</p>
	 * @param mixed $connection <p>A MySQL connection handle obtained from any of the connect functions of the mysqli, mysql or PDO_MYSQL extensions.</p>
	 * @param string $gtrid <p>Global transaction identifier (gtrid).</p>
	 * @return int <p>Returns <b><code>true</code></b> if the global transaction has been rolled back. Otherwise, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.mysqlnd-ms-xa-rollback.php
	 * @see mysqlnd_ms_get_stats()
	 * @since PECL mysqlnd_ms < 1.6.0
	 */
	function mysqlnd_ms_xa_rollback(mixed $connection, string $gtrid): int {}

	/**
	 * SQL hint used to send a query to the last used MySQL server. The last used MySQL server can either be a master or a slave server in a MySQL replication setup.
	 */
	define('MYSQLND_MS_LAST_USED_SWITCH', null);

	/**
	 * SQL hint used to send a query to the MySQL replication master server.
	 */
	define('MYSQLND_MS_MASTER_SWITCH', null);

	/**
	 * Use to request the service level eventual consistency from the <code>mysqlnd_ms_set_qos()</code>. Eventual consistency is the default quality of service when reading from an asynchronous MySQL replication slave. Data returned in this service level may or may not be stale, depending on whether the selected slaves happen to have replicated the latest changes from the MySQL replication master or not.
	 */
	define('MYSQLND_MS_QOS_CONSISTENCY_EVENTUAL', null);

	/**
	 * Use to request the service level session consistency from the <code>mysqlnd_ms_set_qos()</code>. Session consistency is defined as read your writes. The client is guaranteed to see his latest changes.
	 */
	define('MYSQLND_MS_QOS_CONSISTENCY_SESSION', null);

	/**
	 * Use to request the service level strong consistency from the <code>mysqlnd_ms_set_qos()</code>. Strong consistency is used to ensure all clients see each others changes.
	 */
	define('MYSQLND_MS_QOS_CONSISTENCY_STRONG', null);

	/**
	 * Used as a service level option with <code>mysqlnd_ms_set_qos()</code> to parameterize eventual consistency.
	 */
	define('MYSQLND_MS_QOS_OPTION_AGE', null);

	/**
	 * Used as a service level option with <code>mysqlnd_ms_set_qos()</code> to parameterize session consistency.
	 */
	define('MYSQLND_MS_QOS_OPTION_GTID', null);

	/**
	 * If <b>mysqlnd_ms_is_select()</b> returns <b><code>MYSQLND_MS_QUERY_USE_LAST_USED</code></b> for a given query, the built-in read/write split mechanism recommends sending the query to the last used server.
	 */
	define('MYSQLND_MS_QUERY_USE_LAST_USED', null);

	/**
	 * If <b>mysqlnd_ms_is_select()</b> returns <b><code>MYSQLND_MS_QUERY_USE_MASTER</code></b> for a given query, the built-in read/write split mechanism recommends sending the query to a MySQL replication master server.
	 */
	define('MYSQLND_MS_QUERY_USE_MASTER', null);

	/**
	 * If <b>mysqlnd_ms_is_select()</b> returns <b><code>MYSQLND_MS_QUERY_USE_SLAVE</code></b> for a given query, the built-in read/write split mechanism recommends sending the query to a MySQL replication slave server.
	 */
	define('MYSQLND_MS_QUERY_USE_SLAVE', null);

	/**
	 * SQL hint used to send a query to one of the MySQL replication slave servers.
	 */
	define('MYSQLND_MS_SLAVE_SWITCH', null);

	/**
	 * Plugin version string, for example, 1.0.0-prototype.
	 */
	define('MYSQLND_MS_VERSION', null);

	/**
	 * Plugin version number, for example, 10000.
	 */
	define('MYSQLND_MS_VERSION_ID', null);

}
