<?php



namespace {

	/**
	 * Close a DBA database
	 * <p><b>dba_close()</b> closes the established database and frees all resources of the specified database handle.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.dba-close.php
	 * @see dba_open(), dba_popen()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_close($dba): void {}

	/**
	 * Delete DBA entry specified by key
	 * <p><b>dba_delete()</b> deletes the specified entry from the database.</p>
	 * @param string|array $key <p>The key of the entry which is deleted.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-delete.php
	 * @see dba_exists(), dba_fetch(), dba_insert(), dba_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_delete(string|array $key, $dba): bool {}

	/**
	 * Check whether key exists
	 * <p><b>dba_exists()</b> checks whether the specified <code>key</code> exists in the database.</p>
	 * @param string|array $key <p>The key the check is performed for.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the key exists, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.dba-exists.php
	 * @see dba_delete(), dba_fetch(), dba_insert(), dba_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_exists(string|array $key, $dba): bool {}

	/**
	 * Fetch data specified by key
	 * <p><b>dba_fetch()</b> fetches the data specified by <code>key</code> from the database specified with <code>handle</code>.</p>
	 * @param string $key <p>The key the data is specified by.</p> <p><b>Note</b>:</p><p>When working with inifiles this function accepts arrays as keys where index 0 is the group and index 1 is the value name. See: <code>dba_key_split()</code>.</p>
	 * @param resource $handle <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return string <p>Returns the associated string if the key/data pair is found, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.dba-fetch.php
	 * @see dba_exists(), dba_delete(), dba_insert(), dba_replace(), dba_key_split()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_fetch(string $key, $handle): string {}

	/**
	 * Fetch first key
	 * <p><b>dba_firstkey()</b> returns the first key of the database and resets the internal key pointer. This permits a linear search through the whole database.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return string|false <p>Returns the key on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-firstkey.php
	 * @see dba_nextkey(), dba_key_split()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_firstkey($dba): string|false {}

	/**
	 * List all the handlers available
	 * <p><b>dba_handlers()</b> list all the handlers supported by this extension.</p>
	 * @param bool $full_info <p>Turns on/off full information display in the result.</p>
	 * @return array <p>Returns an array of database handlers. If <code>full_info</code> is set to <b><code>true</code></b>, the array will be associative with the handlers names as keys, and their version information as value. Otherwise, the result will be an indexed array of handlers names.</p><p><b>Note</b>:</p><p>When the internal cdb library is used you will see <code>cdb</code> and <code>cdb_make</code>.</p>
	 * @link https://php.net/manual/en/function.dba-handlers.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function dba_handlers(bool $full_info = false): array {}

	/**
	 * Insert entry
	 * <p><b>dba_insert()</b> inserts the entry described with <code>key</code> and <code>value</code> into the database.</p>
	 * @param string|array $key <p>The key of the entry to be inserted. If this key already exist in the database, this function will fail. Use <code>dba_replace()</code> if you need to replace an existent key.</p>
	 * @param string $value <p>The value to be inserted.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-insert.php
	 * @see dba_exists(), dba_delete(), dba_fetch(), dba_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_insert(string|array $key, string $value, $dba): bool {}

	/**
	 * Splits a key in string representation into array representation
	 * <p><b>dba_key_split()</b> splits a key (string representation) into an array representation.</p>
	 * @param string|false|null $key <p>The key in string representation.</p>
	 * @return array|false <p>Returns an array of the form <code>array(0 =&gt; group, 1 =&gt; value_name)</code>. This function will return <b><code>false</code></b> if <code>key</code> is <b><code>null</code></b> or <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.dba-key-split.php
	 * @see dba_firstkey(), dba_nextkey(), dba_fetch()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function dba_key_split(string|false|null $key): array|false {}

	/**
	 * List all open database files
	 * <p><b>dba_list()</b> list all open database files.</p>
	 * @return array <p>An associative array, in the form <code>resourceid =&gt; filename</code>.</p>
	 * @link https://php.net/manual/en/function.dba-list.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function dba_list(): array {}

	/**
	 * Fetch next key
	 * <p><b>dba_nextkey()</b> returns the next key of the database and advances the internal key pointer.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return string|false <p>Returns the key on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-nextkey.php
	 * @see dba_firstkey(), dba_key_split()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_nextkey($dba): string|false {}

	/**
	 * Open database
	 * <p><b>dba_open()</b> establishes a database instance for <code>path</code> with <code>mode</code> using <code>handler</code>.</p>
	 * @param string $path <p>Commonly a regular path in your filesystem.</p>
	 * @param string $mode <p>It is <code>r</code> for read access, <code>w</code> for read/write access to an already existing database, <code>c</code> for read/write access and database creation if it doesn't currently exist, and <code>n</code> for create, truncate and read/write access. The database is created in BTree mode, other modes (like Hash or Queue) are not supported.</p> <p>Additionally you can set the database lock method with the next char. Use <code>l</code> to lock the database with a .lck file or <code>d</code> to lock the databasefile itself. It is important that all of your applications do this consistently.</p> <p>If you want to test the access and do not want to wait for the lock you can add <code>t</code> as third character. When you are absolutely sure that you do not require database locking you can do so by using <code>-</code> instead of <code>l</code> or <code>d</code>. When none of <code>d</code>, <code>l</code> or <code>-</code> is used, dba will lock on the database file as it would with <code>d</code>.</p> <p><b>Note</b>:</p><p>There can only be one writer for one database file. When you use dba on a web server and more than one request requires write operations they can only be done one after another. Also read during write is not allowed. The dba extension uses locks to prevent this. See the following table:</p> <b>DBA locking</b>   already open <code>mode</code> = "rl" <code>mode</code> = "rlt" <code>mode</code> = "wl" <code>mode</code> = "wlt" <code>mode</code> = "rd" <code>mode</code> = "rdt" <code>mode</code> = "wd" <code>mode</code> = "wdt"     not open ok ok ok ok ok ok ok ok   <code>mode</code> = "rl" ok ok wait false illegal illegal illegal illegal   <code>mode</code> = "wl" wait false wait false illegal illegal illegal illegal   <code>mode</code> = "rd" illegal illegal illegal illegal ok ok wait false   <code>mode</code> = "wd" illegal illegal illegal illegal wait false wait false    <ul> <li>ok: the second call will be successful.</li> <li>wait: the second call waits until <code>dba_close()</code> is called for the first.</li> <li>false: the second call returns false.</li> <li>illegal: you must not mix <code>"l"</code> and <code>"d"</code> modifiers for <code>mode</code> parameter.</li> </ul>
	 * @param string $handler <p>The name of the handler which shall be used for accessing <code>path</code>. It is passed all optional parameters given to <b>dba_open()</b> and can act on behalf of them.</p>
	 * @param string $args <p>Optional <code>string</code> parameters which are passed to the driver.</p> <p>The <code>cdb</code>, <code>cdb_make</code>, <code>flatfile</code>, <code>inifile</code>, <code>qdbm</code> and <code>tcadb</code> drivers do not support additional parameters.</p> <p>The <code>db1</code>, <code>db2</code>, <code>db3</code>, <code>db4</code>, <code>dbm</code>, <code>gdbm</code>, and <code>ndbm</code> drivers supports a single additional parameter <code>$filemode</code>, which has the same meaning as the <code>$mode</code> parameter of <code>chmod()</code>, and defaults to <code>0644</code>.</p> <p>The <code>lmdb</code> driver accepts two additional parameters. The first allows to specify the <code>$filemode</code> (see description above), and the second to specify the <code>$mapsize</code>, where the value should be a multiple of the page size of the OS, or zero, to use the default mapsize. The <code>$mapsize</code> parameter is supported as of PHP 7.3.14 and 7.4.2, respectively.</p>
	 * @return resource|false <p>Returns a positive handle on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-open.php
	 * @see dba_popen(), dba_close()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_open(string $path, string $mode, string $handler = null, string ...$args) {}

	/**
	 * Optimize database
	 * <p><b>dba_optimize()</b> optimizes the underlying database.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-optimize.php
	 * @see dba_sync()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_optimize($dba): bool {}

	/**
	 * Open database persistently
	 * <p><b>dba_popen()</b> establishes a persistent database instance for <code>path</code> with <code>mode</code> using <code>handler</code>.</p>
	 * @param string $path <p>Commonly a regular path in your filesystem.</p>
	 * @param string $mode <p>It is <code>r</code> for read access, <code>w</code> for read/write access to an already existing database, <code>c</code> for read/write access and database creation if it doesn't currently exist, and <code>n</code> for create, truncate and read/write access.</p>
	 * @param string $handler <p>The name of the handler which shall be used for accessing <code>path</code>. It is passed all optional parameters given to <b>dba_popen()</b> and can act on behalf of them.</p>
	 * @param mixed $args <p>Optional <code>string</code> parameters which are passed to the driver.</p> <p>The <code>cdb</code>, <code>cdb_make</code>, <code>flatfile</code>, <code>inifile</code>, <code>qdbm</code> and <code>tcadb</code> drivers do not support additional parameters.</p> <p>The <code>db1</code>, <code>db2</code>, <code>db3</code>, <code>db4</code>, <code>dbm</code>, <code>gdbm</code>, and <code>ndbm</code> drivers supports a single additional parameter <code>$filemode</code>, which has the same meaning as the <code>$mode</code> parameter of <code>chmod()</code>, and defaults to <code>0644</code>.</p> <p>The <code>lmdb</code> driver accepts two additional parameters. The first allows to specify the <code>$filemode</code> (see description above), and the second to specify the <code>$mapsize</code>, where the value should be a multiple of the page size of the OS, or zero, to use the default mapsize. The <code>$mapsize</code> parameter is supported as of PHP 7.3.14 and 7.4.2, respectively.</p>
	 * @return resource|false <p>Returns a positive handle on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-popen.php
	 * @see dba_open(), dba_close()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_popen(string $path, string $mode, string $handler = null, mixed ...$args) {}

	/**
	 * Replace or insert entry
	 * <p><b>dba_replace()</b> replaces or inserts the entry described with <code>key</code> and <code>value</code> into the database specified by <code>dba</code>.</p>
	 * @param string|array $key <p>The key of the entry to be replaced.</p>
	 * @param string $value <p>The value to be replaced.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-replace.php
	 * @see dba_exists(), dba_delete(), dba_fetch(), dba_insert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_replace(string|array $key, string $value, $dba): bool {}

	/**
	 * Synchronize database
	 * <p><b>dba_sync()</b> synchronizes the database. This will probably trigger a physical write to the disk, if supported.</p>
	 * @param resource $dba <p>The database handler, returned by <code>dba_open()</code> or <code>dba_popen()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.dba-sync.php
	 * @see dba_optimize()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dba_sync($dba): bool {}

}
