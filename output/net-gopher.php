<?php



namespace {

	/**
	 * Translate a gopher formatted directory entry into an associative array
	 * <p><b>gopher_parsedir()</b> parses a gopher formatted directory entry into an associative array.</p><p>While gopher returns <i>text/plain</i> documents for actual document requests. A request to a directory (such as /) will return specially encoded series of lines with each line being one directory entry or information line.</p>
	 * @param string $dirent <p>The directory entry.</p>
	 * @return array <p>Returns an associative array whose components are:</p><ul> <li>  <i>type</i> - One of the <i>GOPHER_XXX</i> constants.  </li> <li>  <i>title</i> - The name of the resource.  </li> <li>  <i>path</i> - The path of the resource.  </li> <li>  <i>host</i> - The domain name of the host that has this document (or directory).  </li> <li>  <i>port</i> - The port at which to connect on <i>host</i>.  </li> </ul><p>Upon failure, the additional <i>data</i> entry of the returned array will hold the parsed line.</p>
	 * @link http://php.net/manual/en/function.gopher-parsedir.php
	 * @since PECL net_gopher >= 0.1
	 */
	function gopher_parsedir(string $dirent): array {}

	/**
	 * A generic binary file.
	 */
	define('GOPHER_BINARY', null);

	/**
	 * A BinHex encoded binary file.
	 */
	define('GOPHER_BINHEX', null);

	/**
	 * A resource containing a gopher formatted directory listing.
	 */
	define('GOPHER_DIRECTORY', null);

	/**
	 * Standard <i>text/plain</i> document.
	 */
	define('GOPHER_DOCUMENT', null);

	/**
	 * A DOS formatted binary archive.
	 */
	define('GOPHER_DOSBINARY', null);

	/**
	 * A reference to an HTTP resource.
	 */
	define('GOPHER_HTTP', null);

	/**
	 * An Informational entry
	 */
	define('GOPHER_INFO', null);

	/**
	 * An unrecognized entry.
	 */
	define('GOPHER_UNKNOWN', null);

	/**
	 * A UUEncoded file.
	 */
	define('GOPHER_UUENCODED', null);

}
