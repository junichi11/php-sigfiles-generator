<?php



namespace {

	/**
	 * Traverse the map and call a function on each entry
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param string $domain <p>The NIS domain name.</p>
	 * @param string $map <p>The NIS map.</p>
	 * @param string $callback
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yp-all.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
	 */
	function yp_all(string $domain, string $map, string $callback): void {}

	/**
	 * Return an array containing the entire map
	 * <p>Returns all map entries.</p>
	 * @param string $domain <p>The NIS domain name.</p>
	 * @param string $map <p>The NIS map.</p>
	 * @return array <p>Returns an array of all map entries, the maps key values as array indices and the maps entries as array data.</p>
	 * @link http://php.net/manual/en/function.yp-cat.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
	 */
	function yp_cat(string $domain, string $map): array {}

	/**
	 * Returns the error string associated with the given error code
	 * <p>Returns the error message associated with the given error code. Useful to indicate what exactly went wrong.</p>
	 * @param int $errorcode <p>The error code.</p>
	 * @return string <p>Returns the error message, as a string.</p>
	 * @link http://php.net/manual/en/function.yp-err-string.php
	 * @see yp_errno()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
	 */
	function yp_err_string(int $errorcode): string {}

	/**
	 * Returns the error code of the previous operation
	 * <p>Returns the error code of the previous operation.</p>
	 * @return int <p>Returns one of the <i>YPERR_XXX</i> error constants.</p>
	 * @link http://php.net/manual/en/function.yp-errno.php
	 * @see yp_err_string()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
	 */
	function yp_errno(): int {}

	/**
	 * Returns the first key-value pair from the named map
	 * <p>Gets the first key-value pair from the named <code>map</code> in the named <code>domain</code>.</p>
	 * @param string $domain <p>The NIS domain name.</p>
	 * @param string $map <p>The NIS map.</p>
	 * @return array <p>Returns the first key-value pair as an array on success, or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.yp-first.php
	 * @see yp_next(), yp_get_default_domain()
	 * @since PHP 4, PHP 5 < 5.1.0
	 */
	function yp_first(string $domain, string $map): array {}

	/**
	 * Fetches the machine's default NIS domain
	 * <p>Returns the default domain of the node. Can be used as the domain parameter for successive NIS calls.</p><p>A NIS domain can be described a group of NIS maps. Every host that needs to look up information binds itself to a certain domain. Refer to the documents mentioned at the beginning for more detailed information.</p>
	 * @return string <p>Returns the default domain of the node or <b><code>FALSE</code></b>. Can be used as the domain parameter for successive NIS calls.</p>
	 * @link http://php.net/manual/en/function.yp-get-default-domain.php
	 * @since PHP 4, PHP 5 < 5.1.0
	 */
	function yp_get_default_domain(): string {}

	/**
	 * Returns the machine name of the master NIS server for a map
	 * <p>Returns the machine name of the master NIS server for a <code>map</code>.</p>
	 * @param string $domain <p>The NIS domain name.</p>
	 * @param string $map <p>The NIS map.</p>
	 * @return string
	 * @link http://php.net/manual/en/function.yp-master.php
	 * @see yp_get_default_domain()
	 * @since PHP 4, PHP 5 < 5.1.0
	 */
	function yp_master(string $domain, string $map): string {}

	/**
	 * Returns the matched line
	 * <p>Returns the value associated with the passed <code>key</code> out of the specified <code>map</code>.</p>
	 * @param string $domain <p>The NIS domain name.</p>
	 * @param string $map <p>The NIS map.</p>
	 * @param string $key <p>This key must be exact.</p>
	 * @return string <p>Returns the value, or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.yp-match.php
	 * @see yp_get_default_domain()
	 * @since PHP 4, PHP 5 < 5.1.0
	 */
	function yp_match(string $domain, string $map, string $key): string {}

	/**
	 * Returns the next key-value pair in the named map
	 * <p>Returns the next key-value pair in the named <code>map</code> after the specified <code>key</code>.</p>
	 * @param string $domain
	 * @param string $map
	 * @param string $key
	 * @return array <p>Returns the next key-value pair as an array, or <b><code>FALSE</code></b> on errors.</p>
	 * @link http://php.net/manual/en/function.yp-next.php
	 * @see yp_first(), yp_get_default_domain()
	 * @since PHP 4, PHP 5 < 5.1.0
	 */
	function yp_next(string $domain, string $map, string $key): array {}

	/**
	 * Returns the order number for a map
	 * <p>Gets the order number for a map.</p>
	 * @param string $domain
	 * @param string $map
	 * @return int <p>Returns the order number for a map or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.yp-order.php
	 * @see yp_get_default_domain()
	 * @since PHP 4, PHP 5 < 5.1.0
	 */
	function yp_order(string $domain, string $map): int {}

	/**
	 * access violation (this has only been added recently and is only available from PECL SVN for now)
	 */
	define('YPERR_ACCESS', null);

	/**
	 * The function arguments are bad
	 */
	define('YPERR_BADARGS', null);

	/**
	 * YP database is bad
	 */
	define('YPERR_BADDB', null);

	/**
	 * Database busy
	 */
	define('YPERR_BUSY', null);

	/**
	 * cannot bind to server in this domain
	 */
	define('YPERR_DOMAIN', null);

	/**
	 * no such key in map
	 */
	define('YPERR_KEY', null);

	/**
	 * no such map in server's domain
	 */
	define('YPERR_MAP', null);

	/**
	 * Local domain name not set
	 */
	define('YPERR_NODOM', null);

	/**
	 * No more records in map database
	 */
	define('YPERR_NOMORE', null);

	/**
	 * Can't communicate with portmapper
	 */
	define('YPERR_PMAP', null);

	/**
	 * resource allocation failure
	 */
	define('YPERR_RESRC', null);

	/**
	 * RPC failure - domain has been unbound
	 */
	define('YPERR_RPC', null);

	/**
	 * YP version mismatch
	 */
	define('YPERR_VERS', null);

	/**
	 * Can't communicate with ypbind
	 */
	define('YPERR_YPBIND', null);

	/**
	 * internal yp server or client error
	 */
	define('YPERR_YPERR', null);

	/**
	 * Can't communicate with ypserv
	 */
	define('YPERR_YPSERV', null);

}
