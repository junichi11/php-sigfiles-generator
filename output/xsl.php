<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.xsltprocessor.php
	 * @since PHP 5, PHP 7
	 */
	class XSLTProcessor {

		/**
		 * Get value of a parameter
		 * <p>Gets a parameter if previously set by <code>XSLTProcessor::setParameter()</code>.</p>
		 * @param string $namespace <p>The namespace URI of the XSLT parameter.</p>
		 * @param string $name <p>The local name of the XSLT parameter.</p>
		 * @return string|false <p>The value of the parameter (as a string), or <b><code>FALSE</code></b> if it's not set.</p>
		 * @link https://php.net/manual/en/xsltprocessor.getparameter.php
		 * @see XSLTProcessor::setParameter(), XSLTProcessor::removeParameter()
		 * @since PHP 5, PHP 7
		 */
		public function getParameter(string $namespace, string $name) {}

		/**
		 * Get security preferences
		 * <p>Gets the security preferences.</p>
		 * @return int <p>A bitmask consisting of <b><code>XSL_SECPREF_READ_FILE</code></b>, <b><code>XSL_SECPREF_WRITE_FILE</code></b>, <b><code>XSL_SECPREF_CREATE_DIRECTORY</code></b>, <b><code>XSL_SECPREF_READ_NETWORK</code></b>, <b><code>XSL_SECPREF_WRITE_NETWORK</code></b>.</p>
		 * @link https://php.net/manual/en/xsltprocessor.getsecurityprefs.php
		 * @since PHP >= 5.4.0
		 */
		public function getSecurityPrefs(): int {}

		/**
		 * Determine if PHP has EXSLT support
		 * <p>This method determines if PHP was built with the EXSLT library.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xsltprocessor.hasexsltsupport.php
		 * @since PHP 5 >= 5.0.4, PHP 7
		 */
		public function hasExsltSupport(): bool {}

		/**
		 * Import stylesheet
		 * <p>This method imports the stylesheet into the XSLTProcessor for transformations.</p>
		 * @param object $stylesheet <p>The imported style sheet as a DOMDocument or SimpleXMLElement object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xsltprocessor.importstylesheet.php
		 * @since PHP 5, PHP 7
		 */
		public function importStylesheet(object $stylesheet): bool {}

		/**
		 * Enables the ability to use PHP functions as XSLT functions
		 * <p>This method enables the ability to use PHP functions as XSLT functions within XSL stylesheets.</p>
		 * @param array|string|null $functions <p>Use this parameter to only allow certain functions to be called from XSLT.</p> <p>This parameter can be either a string (a function name) or an array of functions.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/xsltprocessor.registerphpfunctions.php
		 * @since PHP 5 >= 5.0.4, PHP 7
		 */
		public function registerPHPFunctions($functions = NULL): void {}

		/**
		 * Remove parameter
		 * <p>Removes a parameter, if set. This will make the processor use the default value for the parameter as specified in the stylesheet.</p>
		 * @param string $namespace <p>The namespace URI of the XSLT parameter.</p>
		 * @param string $name <p>The local name of the XSLT parameter.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xsltprocessor.removeparameter.php
		 * @see XSLTProcessor::setParameter(), XSLTProcessor::getParameter()
		 * @since PHP 5, PHP 7
		 */
		public function removeParameter(string $namespace, string $name): bool {}

		/**
		 * Set value for a parameter
		 * <p>Sets the value of one or more parameters to be used in subsequent transformations with XSLTProcessor. If the parameter doesn't exist in the stylesheet it will be ignored.</p>
		 * @param string $namespace <p>The namespace URI of the XSLT parameter.</p>
		 * @param string $name <p>The local name of the XSLT parameter.</p>
		 * @param string $value <p>The new value of the XSLT parameter.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xsltprocessor.setparameter.php
		 * @see XSLTProcessor::getParameter(), XSLTProcessor::removeParameter()
		 * @since PHP 5, PHP 7
		 */
		public function setParameter(string $namespace, string $name, string $value): bool {}

		/**
		 * Sets profiling output file
		 * <p>Sets the file to output profiling information when processing a stylesheet.</p>
		 * @param string|null $filename <p>Path to the file to dump profiling information.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xsltprocessor.setprofiling.php
		 * @since PHP >= 5.3.0
		 */
		public function setProfiling($filename): bool {}

		/**
		 * Set security preferences
		 * <p>Sets the security preferences.</p>
		 * @param int $preferences <p>The new security preferences. The following constants can be ORed: <b><code>XSL_SECPREF_READ_FILE</code></b>, <b><code>XSL_SECPREF_WRITE_FILE</code></b>, <b><code>XSL_SECPREF_CREATE_DIRECTORY</code></b>, <b><code>XSL_SECPREF_READ_NETWORK</code></b>, <b><code>XSL_SECPREF_WRITE_NETWORK</code></b>. Alternatively, <b><code>XSL_SECPREF_NONE</code></b> or <b><code>XSL_SECPREF_DEFAULT</code></b> can be passed.</p>
		 * @return int <p>Returns the old security preferences.</p>
		 * @link https://php.net/manual/en/xsltprocessor.setsecurityprefs.php
		 * @since PHP >= 5.4.0
		 */
		public function setSecurityPrefs(int $preferences): int {}

		/**
		 * Transform to a DOMDocument
		 * <p>Transforms the source node to a DOMDocument applying the stylesheet given by the <code>XSLTProcessor::importStylesheet()</code> method.</p>
		 * @param object $document <p>The node to be transformed.</p>
		 * @param string|null $returnClass
		 * @return DOMDocument|false <p>The resulting DOMDocument or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/xsltprocessor.transformtodoc.php
		 * @see XSLTProcessor::transformToUri(), XSLTProcessor::transformToXml()
		 * @since PHP 5, PHP 7
		 */
		public function transformToDoc(object $document, $returnClass = NULL) {}

		/**
		 * Transform to URI
		 * <p>Transforms the source node to an URI applying the stylesheet given by the <code>XSLTProcessor::importStylesheet()</code> method.</p>
		 * @param \DOMDocument $doc <p>The document to transform.</p>
		 * @param string $uri <p>The target URI for the transformation.</p>
		 * @return int <p>Returns the number of bytes written or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/xsltprocessor.transformtouri.php
		 * @see XSLTProcessor::transformToDoc(), XSLTProcessor::transformToXml()
		 * @since PHP 5, PHP 7
		 */
		public function transformToUri(\DOMDocument $doc, string $uri): int {}

		/**
		 * Transform to XML
		 * <p>Transforms the source node to a string applying the stylesheet given by the <code>xsltprocessor::importStylesheet()</code> method.</p>
		 * @param object $document <p>The <code>DOMDocument</code> or <code>SimpleXMLElement</code> object to be transformed.</p>
		 * @return string|false|null <p>The result of the transformation as a string or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/xsltprocessor.transformtoxml.php
		 * @see XSLTProcessor::transformToDoc(), XSLTProcessor::transformToUri()
		 * @since PHP 5, PHP 7
		 */
		public function transformToXml(object $document) {}
	}

	/**
	 * libexslt version like 1.1.17. Available as of PHP 5.1.2.
	 */
	define('LIBEXSLT_DOTTED_VERSION', '1.1.34');

	/**
	 * libexslt version like 813. Available as of PHP 5.1.2.
	 */
	define('LIBEXSLT_VERSION', 820);

	/**
	 * libxslt version like 1.1.17. Available as of PHP 5.1.2.
	 */
	define('LIBXSLT_DOTTED_VERSION', '1.1.34');

	/**
	 * libxslt version like 10117. Available as of PHP 5.1.2.
	 */
	define('LIBXSLT_VERSION', 10134);

	define('XSL_CLONE_ALWAYS', 1);

	define('XSL_CLONE_AUTO', 0);

	define('XSL_CLONE_NEVER', -1);

	/**
	 * Disallows creating directories.
	 */
	define('XSL_SECPREF_CREATE_DIRECTORY', 8);

	/**
	 * Disallows all write access, i.e. a bitmask of <b><code>XSL_SECPREF_WRITE_NETWORK</code></b> | <b><code>XSL_SECPREF_CREATE_DIRECTORY</code></b> | <b><code>XSL_SECPREF_WRITE_FILE</code></b>.
	 */
	define('XSL_SECPREF_DEFAULT', 44);

	/**
	 * Deactivate all security restrictions.
	 */
	define('XSL_SECPREF_NONE', 0);

	/**
	 * Disallows reading files.
	 */
	define('XSL_SECPREF_READ_FILE', 2);

	/**
	 * Disallows reading network files.
	 */
	define('XSL_SECPREF_READ_NETWORK', 16);

	/**
	 * Disallows writing files.
	 */
	define('XSL_SECPREF_WRITE_FILE', 4);

	/**
	 * Disallows writing network files.
	 */
	define('XSL_SECPREF_WRITE_NETWORK', 32);

}
