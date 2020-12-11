<?php



namespace {

	/**
	 * Add a tuple to a relation
	 * <p>Adds a tuple to a <code>relation</code>.</p>
	 * @param resource $relation
	 * @param array $tuple <p>An array of attribute/value pairs to be inserted into the given <code>relation</code>.</p> <p>After successful execution this array will contain the complete data of the newly created tuple, including all implicitly set domain fields like sequences.</p>
	 * @return int <p>The function will return <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-add.php
	 * @see dbplus_errcode()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_add($relation, array $tuple): int {}

	/**
	 * Perform AQL query
	 * <p>Executes an AQL <code>query</code> on the given <code>server</code> and <code>dbpath</code>.</p>
	 * @param string $query <p>The AQL query to be executed. Further information on the AQL (Algebraic Query Language) is provided in the original db++ manual.</p>
	 * @param string $server
	 * @param string $dbpath
	 * @return resource <p>Returns a relation handle on success. The result data may be fetched from this relation by calling <code>dbplus_next()</code> and <code>dbplus_curr()</code>. Other relation access functions will not work on a result relation.</p>
	 * @link https://php.net/manual/en/function.dbplus-aql.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_aql(string $query, string $server = NULL, string $dbpath = NULL) {}

	/**
	 * Get/Set database virtual current directory
	 * <p>Changes the virtual current directory where relation files will be looked for by <code>dbplus_open()</code>.</p>
	 * @param string $newdir <p>The new directory for relation files. You can omit this parameter to query the current working directory.</p>
	 * @return string <p>Returns the absolute path of the current directory.</p>
	 * @link https://php.net/manual/en/function.dbplus-chdir.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_chdir(string $newdir = NULL): string {}

	/**
	 * Close a relation
	 * <p>Closes a relation previously opened by <code>dbplus_open()</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>DBPLUS_ERR_UNKNOWN</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-close.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_close($relation) {}

	/**
	 * Get current tuple from relation
	 * <p>Reads the data for the current tuple for the given <code>relation</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple <p>The data will be passed back in this parameter, as an associative array.</p>
	 * @return int <p>The function will return zero (aka. <b><code>DBPLUS_ERR_NOERR</code></b>) on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-curr.php
	 * @see dbplus_first(), dbplus_prev(), dbplus_next(), dbplus_last(), dbplus_errcode()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_curr($relation, array &$tuple): int {}

	/**
	 * Get error string for given errorcode or last error
	 * <p>Returns a clear error string for the given error code.</p>
	 * @param int $errno <p>The error code. If not provided, the result code of the last db++ operation is assumed.</p>
	 * @return string <p>Returns the error message.</p>
	 * @link https://php.net/manual/en/function.dbplus-errcode.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_errcode(int $errno = NULL): string {}

	/**
	 * Get error code for last operation
	 * <p>Returns the error code returned by the last db++ operation.</p>
	 * @return int <p>Returns the error code, as an integer.</p>
	 * @link https://php.net/manual/en/function.dbplus-errno.php
	 * @see dbplus_errcode()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_errno(): int {}

	/**
	 * Set a constraint on a relation
	 * <p>Places a constraint on the given <code>relation</code>.</p><p>Further calls to functions like <code>dbplus_curr()</code> or <code>dbplus_next()</code> will only return tuples matching the given constraints.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $constraints <p>Constraints are triplets of strings containing of a domain name, a comparison operator and a comparison value. The <code>constraints</code> parameter array may consist of a collection of string arrays, each of which contains a domain, an operator and a value, or of a single string array containing a multiple of three elements.</p> <p>The comparison operator may be one of the following strings: '==', '&gt;', '&gt;=', '&lt;', '&lt;=', '!=', '~' for a regular expression match and 'BAND' or 'BOR' for bitwise operations.</p>
	 * @param mixed $tuple
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-find.php
	 * @see dbplus_unselect()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_find($relation, array $constraints, $tuple): int {}

	/**
	 * Get first tuple from relation
	 * <p>Reads the data for the first tuple for the given <code>relation</code>, makes it the current tuple and pass it back as an associative array in <code>tuple</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple
	 * @return int <p>Returns <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-first.php
	 * @see dbplus_curr(), dbplus_prev(), dbplus_next(), dbplus_last(), dbplus_errcode()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_first($relation, array &$tuple): int {}

	/**
	 * Flush all changes made on a relation
	 * <p>Writes all changes applied to <code>relation</code> since the last flush to disk.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int <p>Returns <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-flush.php
	 * @see dbplus_errcode()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_flush($relation): int {}

	/**
	 * Free all locks held by this client
	 * <p>Frees all tuple locks held by this client.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-freealllocks.php
	 * @see dbplus_getlock(), dbplus_freelock(), dbplus_freerlocks()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_freealllocks(): int {}

	/**
	 * Release write lock on tuple
	 * <p>Releases a write lock on the given <code>tuple</code> previously obtained by <code>dbplus_getlock()</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param string $tuple
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-freelock.php
	 * @see dbplus_getlock(), dbplus_freerlocks(), dbplus_freealllocks()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_freelock($relation, string $tuple): int {}

	/**
	 * Free all tuple locks on given relation
	 * <p>Frees all tuple locks held on the given <code>relation</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-freerlocks.php
	 * @see dbplus_getlock(), dbplus_freelock(), dbplus_freealllocks()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_freerlocks($relation): int {}

	/**
	 * Get a write lock on a tuple
	 * <p>Requests a write lock on the specified <code>tuple</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param string $tuple
	 * @return int <p>Returns zero on success or a non-zero error code, especially <b><code>DBPLUS_ERR_WLOCKED</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-getlock.php
	 * @see dbplus_freelock(), dbplus_freerlocks(), dbplus_freealllocks()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_getlock($relation, string $tuple): int {}

	/**
	 * Get an id number unique to a relation
	 * <p>Obtains a number guaranteed to be unique for the given <code>relation</code> and will pass it back in the variable given as <code>uniqueid</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param int $uniqueid
	 * @return int <p>Returns <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-getunique.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_getunique($relation, int $uniqueid): int {}

	/**
	 * Get information about a relation
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param string $key
	 * @param array $result
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-info.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_info($relation, string $key, array &$result): int {}

	/**
	 * Get last tuple from relation
	 * <p>Reads the data for the last tuple for the given <code>relation</code>, makes it the current tuple and pass it back as an associative array in <code>tuple</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple
	 * @return int <p>Returns <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-last.php
	 * @see dbplus_first(), dbplus_curr(), dbplus_prev(), dbplus_next()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_last($relation, array &$tuple): int {}

	/**
	 * Request write lock on relation
	 * <p>Requests a write lock on the given <code>relation</code>.</p><p>Other clients may still query the relation, but can't alter it while it is locked.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-lockrel.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_lockrel($relation): int {}

	/**
	 * Get next tuple from relation
	 * <p>Reads the data for the next tuple for the given <code>relation</code>, makes it the current tuple and will pass it back as an associative array in <code>tuple</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple
	 * @return int <p>Returns <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-next.php
	 * @see dbplus_first(), dbplus_curr(), dbplus_prev(), dbplus_last()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_next($relation, array &$tuple): int {}

	/**
	 * Open relation file
	 * <p>Opens the given relation file.</p>
	 * @param string $name <p>Can be either a file name or a relative or absolute path name. This will be mapped in any case to an absolute relation file path on a specific host machine and server.</p>
	 * @return resource <p>On success a relation file resource (cursor) is returned which must be used in any subsequent commands referencing the relation. Failure leads to a zero return value, the actual error code may be asked for by calling <code>dbplus_errno()</code>.</p>
	 * @link https://php.net/manual/en/function.dbplus-open.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_open(string $name) {}

	/**
	 * Get previous tuple from relation
	 * <p>Reads the data for the previous tuple for the given <code>relation</code>, makes it the current tuple and will pass it back as an associative array in <code>tuple</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple
	 * @return int <p>Returns <b><code>DBPLUS_ERR_NOERR</code></b> on success or a db++ error code on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-prev.php
	 * @see dbplus_first(), dbplus_curr(), dbplus_next(), dbplus_last()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_prev($relation, array &$tuple): int {}

	/**
	 * Change relation permissions
	 * <p>Changes access permissions as specified by <code>mask</code>, <code>user</code> and <code>group</code>. The values for these are operating system specific.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param int $mask
	 * @param string $user
	 * @param string $group
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-rchperm.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rchperm($relation, int $mask, string $user, string $group): int {}

	/**
	 * Creates a new DB++ relation
	 * <p>Creates a new relation. Any existing relation sharing the same <code>name</code> will be overwritten if the relation is currently not in use and <code>overwrite</code> is set to TRUE.</p>
	 * @param string $name
	 * @param mixed $domlist <p>A combination of domains. May be passed as a single domain name string or as an array of domain names.</p> <p>This parameter should contain the domain specification for the new relation within an array of domain description strings. A domain description string consists of a domain name unique to this relation, a slash and a type specification character. See the db++ documentation, especially the dbcreate(1) manpage, for a description of available type specifiers and their meanings.</p> <p><b>Note</b>:</p><p>This function will also accept a string with space delimited domain description strings, but it is recommended to use an array</p>
	 * @param bool $overwrite
	 * @return resource
	 * @link https://php.net/manual/en/function.dbplus-rcreate.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rcreate(string $name, $domlist, bool $overwrite = NULL) {}

	/**
	 * Creates an exact but empty copy of a relation including indices
	 * <p><b>dbplus_rcrtexact()</b> will create an exact but empty copy of the given <code>relation</code> under a new <code>name</code>.</p>
	 * @param string $name
	 * @param resource $relation <p>The copied relation, opened by <code>dbplus_open()</code>.</p>
	 * @param bool $overwrite <p>An existing relation by the same <code>name</code> will only be overwritten if this parameter is set to <b><code>TRUE</code></b> and no other process is currently using the relation.</p>
	 * @return mixed <p>Returns resource on success or <b><code>DBPLUS_ERR_UNKNOWN</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-rcrtexact.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rcrtexact(string $name, $relation, bool $overwrite = NULL) {}

	/**
	 * Creates an empty copy of a relation with default indices
	 * <p><code>dbplus_rcrtexact()</code> will create an empty copy of the given <code>relation</code> under a new <code>name</code>, but with default indices.</p>
	 * @param string $name
	 * @param resource $relation <p>The copied relation, opened by <code>dbplus_open()</code>.</p>
	 * @param int $overwrite <p>An existing relation by the same <code>name</code> will only be overwritten if this parameter is set to <b><code>TRUE</code></b> and no other process is currently using the relation.</p>
	 * @return mixed <p>Returns resource on success or <b><code>DBPLUS_ERR_UNKNOWN</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-rcrtlike.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rcrtlike(string $name, $relation, int $overwrite = NULL) {}

	/**
	 * Resolve host information for relation
	 * <p><b>dbplus_resolve()</b> will try to resolve the given <code>relation_name</code> and find out internal server id, real hostname and the database path on this host.</p>
	 * @param string $relation_name <p>The relation name.</p>
	 * @return array <p>Returns an array containing these values under the keys <code>sid</code>, <code>host</code> and <code>host_path</code> or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.dbplus-resolve.php
	 * @see dbplus_tcl()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_resolve(string $relation_name): array {}

	/**
	 * Restore position
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-restorepos.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_restorepos($relation, array $tuple): int {}

	/**
	 * Specify new primary key for a relation
	 * <p><b>dbplus_rkeys()</b> will replace the current primary key for <code>relation</code> with the combination of domains specified by <code>domlist</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param mixed $domlist <p>A combination of domains. May be passed as a single domain name string or as an array of domain names.</p>
	 * @return mixed <p>Returns resource on success or <b><code>DBPLUS_ERR_UNKNOWN</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-rkeys.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rkeys($relation, $domlist) {}

	/**
	 * Open relation file local
	 * <p><b>dbplus_ropen()</b> will open the relation <code>file</code> locally for quick access without any client/server overhead. Access is read only and only <code>dbplus_curr()</code> and <code>dbplus_next()</code> may be applied to the returned relation.</p>
	 * @param string $name
	 * @return resource
	 * @link https://php.net/manual/en/function.dbplus-ropen.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_ropen(string $name) {}

	/**
	 * Perform local (raw) AQL query
	 * <p><b>dbplus_rquery()</b> performs a local (raw) AQL query using an AQL interpreter embedded into the db++ client library. <b>dbplus_rquery()</b> is faster than <code>dbplus_aql()</code> but will work on local data only.</p>
	 * @param string $query
	 * @param string $dbpath
	 * @return resource
	 * @link https://php.net/manual/en/function.dbplus-rquery.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rquery(string $query, string $dbpath = NULL) {}

	/**
	 * Rename a relation
	 * <p><b>dbplus_rrename()</b> will change the name of <code>relation</code> to <code>name</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param string $name
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-rrename.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rrename($relation, string $name): int {}

	/**
	 * Create a new secondary index for a relation
	 * <p><b>dbplus_rsecindex()</b> will create a new secondary index for <code>relation</code> with consists of the domains specified by <code>domlist</code> and is of type <code>type</code></p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param mixed $domlist <p>A combination of domains. May be passed as a single domain name string or as an array of domain names.</p>
	 * @param int $type
	 * @return mixed <p>Returns resource on success or <b><code>DBPLUS_ERR_UNKNOWN</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dbplus-rsecindex.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rsecindex($relation, $domlist, int $type) {}

	/**
	 * Remove relation from filesystem
	 * <p><b>dbplus_runlink()</b> will close and remove the <code>relation</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-runlink.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_runlink($relation): int {}

	/**
	 * Remove all tuples from relation
	 * <p><b>dbplus_rzap()</b> will remove all tuples from <code>relation</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-rzap.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_rzap($relation): int {}

	/**
	 * Save position
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-savepos.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_savepos($relation): int {}

	/**
	 * Set index
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param string $idx_name
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-setindex.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_setindex($relation, string $idx_name): int {}

	/**
	 * Set index by number
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param int $idx_number
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-setindexbynumber.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_setindexbynumber($relation, int $idx_number): int {}

	/**
	 * Perform SQL query
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $query
	 * @param string $server
	 * @param string $dbpath
	 * @return resource
	 * @link https://php.net/manual/en/function.dbplus-sql.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_sql(string $query, string $server = NULL, string $dbpath = NULL) {}

	/**
	 * Execute TCL code on server side
	 * <p>A db++ server will prepare a TCL interpreter for each client connection. This interpreter will enable the server to execute TCL code provided by the client as a sort of stored procedures to improve the performance of database operations by avoiding client/server data transfers and context switches.</p><p><b>dbplus_tcl()</b> needs to pass the client connection id the TCL <code>script</code> code should be executed by. <code>dbplus_resolve()</code> will provide this connection id. The function will return whatever the TCL code returns or a TCL error message if the TCL code fails.</p>
	 * @param int $sid
	 * @param string $script
	 * @return string
	 * @link https://php.net/manual/en/function.dbplus-tcl.php
	 * @see dbplus_resolve()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_tcl(int $sid, string $script): string {}

	/**
	 * Remove tuple and return new current tuple
	 * <p><b>dbplus_tremove()</b> removes <code>tuple</code> from <code>relation</code> if it perfectly matches a tuple within the relation. <code>current</code>, if given, will contain the data of the new current tuple after calling <b>dbplus_tremove()</b>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $tuple
	 * @param array $current
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-tremove.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_tremove($relation, array $tuple, array &$current = NULL): int {}

	/**
	 * Undo
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-undo.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_undo($relation): int {}

	/**
	 * Prepare undo
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-undoprepare.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_undoprepare($relation): int {}

	/**
	 * Give up write lock on relation
	 * <p>Release a write lock previously obtained by <code>dbplus_lockrel()</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-unlockrel.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_unlockrel($relation): int {}

	/**
	 * Remove a constraint from relation
	 * <p>Calling <b>dbplus_unselect()</b> will remove a constraint previously set by <code>dbplus_find()</code> on <code>relation</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-unselect.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_unselect($relation): int {}

	/**
	 * Update specified tuple in relation
	 * <p><b>dbplus_update()</b> replaces the <code>old</code> tuple with the data from the <code>new</code> one, only if the <code>old</code> completely matches a tuple within <code>relation</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @param array $old <p>The old tuple.</p>
	 * @param array $new <p>The new tuple.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-update.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_update($relation, array $old, array $new): int {}

	/**
	 * Request exclusive lock on relation
	 * <p>Request an exclusive lock on <code>relation</code> preventing even read access from other clients.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-xlockrel.php
	 * @see dbplus_xunlockrel()
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_xlockrel($relation): int {}

	/**
	 * Free exclusive lock on relation
	 * <p>Releases an exclusive lock previously obtained by <code>dbplus_xlockrel()</code>.</p>
	 * @param resource $relation <p>A relation opened by <code>dbplus_open()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.dbplus-xunlockrel.php
	 * @since PHP 4 <= 4.3.0, PECL dbplus >= 0.9
	 */
	function dbplus_xunlockrel($relation): int {}

}
