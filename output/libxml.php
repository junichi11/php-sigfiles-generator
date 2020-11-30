<?php



namespace {

	/**
	 * <p>Contains various information about errors thrown by libxml. The error codes are described within the official xmlError API documentation.</p>
	 * @link http://php.net/manual/en/class.libxmlerror.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class libXMLError {

		/**
		 * @var int <p>the severity of the error (one of the following constants: <b><code>LIBXML_ERR_WARNING</code></b>, <b><code>LIBXML_ERR_ERROR</code></b> or <b><code>LIBXML_ERR_FATAL</code></b>)</p>
		 * @link http://php.net/manual/en/class.libxmlerror.php#libxmlerror.props.level
		 */
		public $level;

		/**
		 * @var int <p>The error's code.</p>
		 * @link http://php.net/manual/en/class.libxmlerror.php#libxmlerror.props.code
		 */
		public $code;

		/**
		 * @var int <p>The column where the error occurred.</p> <p><b>Note</b>:</p><p>This property isn't entirely implemented in libxml and therefore <i>0</i> is often returned.</p>
		 * @link http://php.net/manual/en/class.libxmlerror.php#libxmlerror.props.column
		 */
		public $column;

		/**
		 * @var string <p>The error message, if any.</p>
		 * @link http://php.net/manual/en/class.libxmlerror.php#libxmlerror.props.message
		 */
		public $message;

		/**
		 * @var string <p>The filename, or empty if the XML was loaded from a string.</p>
		 * @link http://php.net/manual/en/class.libxmlerror.php#libxmlerror.props.file
		 */
		public $file;

		/**
		 * @var int <p>The line where the error occurred.</p>
		 * @link http://php.net/manual/en/class.libxmlerror.php#libxmlerror.props.line
		 */
		public $line;
	}

	/**
	 * Clear libxml error buffer
	 * <p><b>libxml_clear_errors()</b> clears the libxml error buffer.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.libxml-clear-errors.php
	 * @see libxml_get_errors(), libxml_get_last_error()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_clear_errors(): void {}

	/**
	 * Disable the ability to load external entities
	 * <p>Disable/enable the ability to load external entities.</p>
	 * @param bool $disable <p>Disable (<b><code>TRUE</code></b>) or enable (<b><code>FALSE</code></b>) libxml extensions (such as DOM, XMLWriter and XMLReader) to load external entities.</p>
	 * @return bool <p>Returns the previous value.</p>
	 * @link http://php.net/manual/en/function.libxml-disable-entity-loader.php
	 * @see libxml_use_internal_errors()
	 * @since PHP 5 >= 5.2.11, PHP 7
	 */
	function libxml_disable_entity_loader(bool $disable = TRUE): bool {}

	/**
	 * Retrieve array of errors
	 * <p>Retrieve array of errors.</p>
	 * @return array <p>Returns an array with <code>LibXMLError</code> objects if there are any errors in the buffer, or an empty array otherwise.</p>
	 * @link http://php.net/manual/en/function.libxml-get-errors.php
	 * @see libxml_get_last_error(), libxml_clear_errors()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_get_errors(): array {}

	/**
	 * Retrieve last error from libxml
	 * <p>Retrieve last error from libxml.</p>
	 * @return LibXMLError <p>Returns a <code>LibXMLError</code> object if there is any error in the buffer, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.libxml-get-last-error.php
	 * @see libxml_get_errors(), libxml_clear_errors()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_get_last_error(): \LibXMLError {}

	/**
	 * Changes the default external entity loader
	 * <p>Changes the default external entity loader.</p>
	 * @param callable $resolver_function <p>A <code>callable</code> that takes three arguments. Two strings, a public id and system id, and a context (an array with four keys) as the third argument. This callback should return a resource, a string from which a resource can be opened, or <b><code>NULL</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.libxml-set-external-entity-loader.php
	 * @see libxml_disable_entity_loader()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function libxml_set_external_entity_loader(callable $resolver_function): bool {}

	/**
	 * Set the streams context for the next libxml document load or write
	 * <p>Sets the streams context for the next libxml document load or write.</p>
	 * @param resource $streams_context <p>The stream context resource (created with <code>stream_context_create()</code>)</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.libxml-set-streams-context.php
	 * @see stream_context_create()
	 * @since PHP 5, PHP 7
	 */
	function libxml_set_streams_context($streams_context): void {}

	/**
	 * Disable libxml errors and allow user to fetch error information as needed
	 * <p><b>libxml_use_internal_errors()</b> allows you to disable standard libxml errors and enable user error handling.</p>
	 * @param bool $use_errors <p>Enable (<b><code>TRUE</code></b>) user error handling or disable (<b><code>FALSE</code></b>) user error handling. Disabling will also clear any existing libxml errors.</p>
	 * @return bool <p>This function returns the previous value of <code>use_errors</code>.</p>
	 * @link http://php.net/manual/en/function.libxml-use-internal-errors.php
	 * @see libxml_clear_errors(), libxml_get_errors()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_use_internal_errors(bool $use_errors = FALSE): bool {}

	/**
	 * Allows line numbers greater than 65535 to be reported correctly.  <p><b>Note</b>:</p><p>Only available as of PHP 7.0.0 with Libxml &gt;= 2.9.0</p>
	 */
	define('LIBXML_BIGLINES', 4194304);

	/**
	 * Activate small nodes allocation optimization. This may speed up your application without needing to change the code.  <p><b>Note</b>:</p><p>Only available in Libxml &gt;= 2.6.21</p>
	 */
	define('LIBXML_COMPACT', 65536);

	/**
	 * libxml version like 2.6.5 or 2.6.17
	 */
	define('LIBXML_DOTTED_VERSION', '2.9.4');

	/**
	 * Default DTD attributes
	 */
	define('LIBXML_DTDATTR', 8);

	/**
	 * Load the external subset
	 */
	define('LIBXML_DTDLOAD', 4);

	/**
	 * Validate with the DTD
	 */
	define('LIBXML_DTDVALID', 16);

	/**
	 * A recoverable error
	 */
	define('LIBXML_ERR_ERROR', 2);

	/**
	 * A fatal error
	 */
	define('LIBXML_ERR_FATAL', 3);

	/**
	 * No errors
	 */
	define('LIBXML_ERR_NONE', 0);

	/**
	 * A simple warning
	 */
	define('LIBXML_ERR_WARNING', 1);

	/**
	 * Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype being added when one is not found.  <p><b>Note</b>:</p><p>Only available in Libxml &gt;= 2.7.8 (as of PHP &gt;= 5.4.0)</p>
	 */
	define('LIBXML_HTML_NODEFDTD', 4);

	/**
	 * Sets HTML_PARSE_NOIMPLIED flag, which turns off the automatic adding of implied html/body... elements.  <p><b>Note</b>:</p><p>Only available in Libxml &gt;= 2.7.7 (as of PHP &gt;= 5.4.0)</p>
	 */
	define('LIBXML_HTML_NOIMPLIED', 8192);

	/**
	 * Remove blank nodes
	 */
	define('LIBXML_NOBLANKS', 256);

	/**
	 * Merge CDATA as text nodes
	 */
	define('LIBXML_NOCDATA', 16384);

	/**
	 * Expand empty tags (e.g. <i>&lt;br/&gt;</i> to <i>&lt;br&gt;&lt;/br&gt;</i>)  <p><b>Note</b>:</p><p>This option is currently just available in the DOMDocument::save and DOMDocument::saveXML functions.</p>
	 */
	define('LIBXML_NOEMPTYTAG', 4);

	/**
	 * Substitute entities
	 */
	define('LIBXML_NOENT', 2);

	/**
	 * Suppress error reports
	 */
	define('LIBXML_NOERROR', 32);

	/**
	 * Disable network access when loading documents
	 */
	define('LIBXML_NONET', 2048);

	/**
	 * Suppress warning reports
	 */
	define('LIBXML_NOWARNING', 64);

	/**
	 * Drop the XML declaration when saving a document  <p><b>Note</b>:</p><p>Only available in Libxml &gt;= 2.6.21</p>
	 */
	define('LIBXML_NOXMLDECL', 2);

	/**
	 * Remove redundant namespace declarations
	 */
	define('LIBXML_NSCLEAN', 8192);

	/**
	 * Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects limits like maximum depth of a document or the entity recursion, as well as limits of the size of text nodes.  <p><b>Note</b>:</p><p>Only available in Libxml &gt;= 2.7.0 (as of PHP &gt;= 5.3.2 and PHP &gt;= 5.2.12)</p>
	 */
	define('LIBXML_PARSEHUGE', 524288);

	/**
	 * Sets XML_PARSE_PEDANTIC flag, which enables pedantic error reporting.  <p><b>Note</b>:</p><p>Available as of PHP &gt;= 5.4.0</p>
	 */
	define('LIBXML_PEDANTIC', 128);

	/**
	 * Create default/fixed value nodes during XSD schema validation  <p><b>Note</b>:</p><p>Only available in Libxml &gt;= 2.6.14 (as of PHP &gt;= 5.5.2)</p>
	 */
	define('LIBXML_SCHEMA_CREATE', 1);

	/**
	 * libxml version like 20605 or 20617
	 */
	define('LIBXML_VERSION', 20904);

	/**
	 * Implement XInclude substitution
	 */
	define('LIBXML_XINCLUDE', 1024);

}
