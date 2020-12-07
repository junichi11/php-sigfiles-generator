<?php



namespace {

	/**
	 * <p>An HTML node in an HTML file, as detected by tidy.</p>
	 * @link http://php.net/manual/en/class.tidy.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	class tidy {

		/**
		 * Return warnings and errors which occurred parsing the specified document
		 * <p>Returns warnings and errors which occurred parsing the specified document.</p>
		 * @var string <p>Returns the error buffer as a string.</p>
		 * @link http://php.net/manual/en/tidy.props.errorbuffer.php
		 * @see tidy_access_count(), tidy_error_count(), tidy_warning_count()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public $errorBuffer;

		/**
		 * Constructs a new tidy object
		 * <p>Constructs a new tidy object.</p>
		 * @param string $filename <p>If the <code>filename</code> parameter is given, this function will also read that file and initialize the object with the file, acting like <code>tidy_parse_file()</code>.</p>
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, visit http://api.html-tidy.org/#quick-reference.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
		 * @param bool $use_include_path <p>Search for the file in the include_path.</p>
		 * @return self <p>Returns the new tidy instance.</p>
		 * @link http://php.net/manual/en/tidy.construct.php
		 * @see tidy::parseFile(), tidy::parseString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function __construct(string $filename = NULL, $config = NULL, string $encoding = NULL, bool $use_include_path = NULL) {}

		/**
		 * Returns a tidyNode object starting from the  tag of the tidy parse tree
		 * <p>Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree.</p>
		 * @return tidyNode <p>Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree.</p>
		 * @link http://php.net/manual/en/tidy.body.php
		 * @see tidy::head(), tidy::html()
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0
		 */
		public function body(): \tidyNode {}

		/**
		 * Execute configured cleanup and repair operations on parsed markup
		 * <p>This function cleans and repairs the given tidy <code>object</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/tidy.cleanrepair.php
		 * @see tidy::repairFile(), tidy::repairString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function cleanRepair(): bool {}

		/**
		 * Run configured diagnostics on parsed and repaired markup
		 * <p>Runs diagnostic tests on the given tidy <code>object</code>, adding some more information about the document in the error buffer.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/tidy.diagnose.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function diagnose(): bool {}

		/**
		 * Get current Tidy configuration
		 * <p>Gets the list of the configuration options in use by the given tidy <code>object</code>.</p>
		 * @return array <p>Returns an array of configuration options.</p><p>For an explanation about each option, visit http://api.html-tidy.org/#quick-reference.</p>
		 * @link http://php.net/manual/en/tidy.getconfig.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function getConfig(): array {}

		/**
		 * Get the Detected HTML version for the specified document
		 * <p>Returns the detected HTML version for the specified tidy <code>object</code>.</p>
		 * @return int <p>Returns the detected HTML version.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <code>0</code>.</p>
		 * @link http://php.net/manual/en/tidy.gethtmlver.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getHtmlVer(): int {}

		/**
		 * Returns the value of the specified configuration option for the tidy document
		 * <p>Returns the value of the specified <code>option</code> for the specified tidy <code>object</code>.</p>
		 * @param string $option <p>You will find a list with each configuration option and their types at: http://api.html-tidy.org/#quick-reference.</p>
		 * @return mixed <p>Returns the value of the specified <code>option</code>. The return type depends on the type of the specified one.</p>
		 * @link http://php.net/manual/en/tidy.getopt.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getOpt(string $option) {}

		/**
		 * Returns the documentation for the given option name
		 * <p><b>tidy_get_opt_doc()</b> returns the documentation for the given option name.</p><p><b>Note</b>:</p><p>You need at least libtidy from 25 April, 2005 for this function be available.</p>
		 * @param string $optname <p>The option name</p>
		 * @return string <p>Returns a string if the option exists and has documentation available, or <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidy.getoptdoc.php
		 * @see tidy::getconfig(), tidy::getopt()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getOptDoc(string $optname): string {}

		/**
		 * Get release date (version) for Tidy library
		 * <p>Gets the release date of the Tidy library.</p>
		 * @return string <p>Returns a string with the release date of the Tidy library, which may be <code>'unknown'</code>.</p>
		 * @link http://php.net/manual/en/tidy.getrelease.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getRelease(): string {}

		/**
		 * Get status of specified document
		 * <p>Returns the status for the specified tidy <code>object</code>.</p>
		 * @return int <p>Returns 0 if no error/warning was raised, 1 for warnings or accessibility errors, or 2 for errors.</p>
		 * @link http://php.net/manual/en/tidy.getstatus.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getStatus(): int {}

		/**
		 * Returns a tidyNode object starting from the  tag of the tidy parse tree
		 * <p>Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree.</p>
		 * @return tidyNode <p>Returns the tidyNode object.</p>
		 * @link http://php.net/manual/en/tidy.head.php
		 * @see tidy::body(), tidy::html()
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
		 */
		public function head(): \tidyNode {}

		/**
		 * Returns a tidyNode object starting from the  tag of the tidy parse tree
		 * <p>Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree.</p>
		 * @return tidyNode <p>Returns the tidyNode object.</p>
		 * @link http://php.net/manual/en/tidy.php.php
		 * @see tidy::body(), tidy::head()
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
		 */
		public function html(): \tidyNode {}

		/**
		 * Indicates if the document is a XHTML document
		 * <p>Tells if the document is a XHTML document.</p>
		 * @return bool <p>This function returns <b><code>TRUE</code></b> if the specified tidy <code>object</code> is a XHTML document, or <b><code>FALSE</code></b> otherwise.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/tidy.isxhtml.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function isXhtml(): bool {}

		/**
		 * Indicates if the document is a generic (non HTML/XHTML) XML document
		 * <p>Tells if the document is a generic (non HTML/XHTML) XML document.</p>
		 * @return bool <p>This function returns <b><code>TRUE</code></b> if the specified tidy <code>object</code> is a generic XML document (non HTML/XHTML), or <b><code>FALSE</code></b> otherwise.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/tidy.isxml.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function isXml(): bool {}

		/**
		 * Parse markup in file or URI
		 * <p>Parses the given file.</p>
		 * @param string $filename <p>If the <code>filename</code> parameter is given, this function will also read that file and initialize the object with the file, acting like <b>tidy_parse_file()</b>.</p>
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, see http://api.html-tidy.org/#quick-reference.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
		 * @param bool $use_include_path <p>Search for the file in the include_path.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/tidy.parsefile.php
		 * @see tidy::parsestring(), tidy::repairfile(), tidy::repairstring()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function parseFile(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): bool {}

		/**
		 * Parse a document stored in a string
		 * <p>Parses a document stored in a string.</p>
		 * @param string $input <p>The data to be parsed.</p>
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, visit http://api.html-tidy.org/#quick-reference.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
		 * @return bool <p>Returns a new tidy instance.</p>
		 * @link http://php.net/manual/en/tidy.parsestring.php
		 * @see tidy::parseFile(), tidy::repairFile(), tidy::repairString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function parseString(string $input, $config = NULL, string $encoding = NULL): bool {}

		/**
		 * Repair a file and return it as a string
		 * <p>Repairs the given file and returns it as a string.</p>
		 * @param string $filename <p>The file to be repaired.</p>
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>Check http://tidy.sourceforge.net/docs/quickref.html for an explanation about each option.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
		 * @param bool $use_include_path <p>Search for the file in the include_path.</p>
		 * @return string <p>Returns the repaired contents as a string.</p>
		 * @link http://php.net/manual/en/tidy.repairfile.php
		 * @see tidy::parseFile(), tidy::parseString(), tidy::repairString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function repairFile(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): string {}

		/**
		 * Repair a string using an optionally provided configuration file
		 * <p>Repairs the given string.</p>
		 * @param string $data <p>The data to be repaired.</p>
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>Check http://api.html-tidy.org/#quick-reference for an explanation about each option.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
		 * @return string <p>Returns the repaired string.</p>
		 * @link http://php.net/manual/en/tidy.repairstring.php
		 * @see tidy::parseFile(), tidy::parseString(), tidy::repairFile()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function repairString(string $data, $config = NULL, string $encoding = NULL): string {}

		/**
		 * Returns a tidyNode object representing the root of the tidy parse tree
		 * <p>Returns a tidyNode object representing the root of the tidy parse tree.</p>
		 * @return tidyNode <p>Returns the tidyNode object.</p>
		 * @link http://php.net/manual/en/tidy.root.php
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
		 */
		public function root(): \tidyNode {}
	}

	/**
	 * <p>An HTML node in an HTML file, as detected by tidy.</p>
	 * @link http://php.net/manual/en/class.tidynode.php
	 * @since PHP 5, PHP 7
	 */
	final class tidyNode {

		/**
		 * @var string <p>The HTML representation of the node, including the surrounding tags.</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.value
		 */
		public $value;

		/**
		 * @var string <p>The name of the HTML node</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.name
		 */
		public $name;

		/**
		 * @var int <p>The type of the node (one of the nodetype constants, e.g. <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.type
		 */
		public $type;

		/**
		 * @var int <p>The line number at which the tags is located in the file</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.line
		 */
		public $line;

		/**
		 * @var int <p>The column number at which the tags is located in the file</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.column
		 */
		public $column;

		/**
		 * @var bool <p>Indicates if the node is a proprietary tag</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.proprietary
		 */
		public $proprietary;

		/**
		 * @var int <p>The ID of the node (one of the tag constants, e.g. <b><code>TIDY_TAG_FRAME</code></b>)</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.id
		 */
		public $id;

		/**
		 * @var array <p>An array of string, representing the attributes names (as keys) of the current node.</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.attribute
		 */
		public $attribute;

		/**
		 * @var array <p>An array of <b>tidyNode</b>, representing the children of the current node.</p>
		 * @link http://php.net/manual/en/class.tidynode.php#tidynode.props.child
		 */
		public $child;

		/**
		 * Private constructor to disallow direct instantiation
		 * @return self
		 * @link http://php.net/manual/en/tidynode.construct.php
		 * @since PHP 5, PHP 7
		 */
		private function __construct() {}

		/**
		 * Returns the parent node of the current node
		 * <p>Returns the parent node of the current node.</p>
		 * @return tidyNode <p>Returns a <code>tidyNode</code> if the node has a parent, or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.getparent.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getParent(): \tidyNode {}

		/**
		 * Checks if a node has children
		 * <p>Tells if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node has children, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.haschildren.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * Checks if a node has siblings
		 * <p>Tells if the node has siblings.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node has siblings, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.hassiblings.php
		 * @since PHP 5, PHP 7
		 */
		public function hasSiblings(): bool {}

		/**
		 * Checks if this node is ASP
		 * <p>Tells whether the current node is ASP.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node is ASP, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.isasp.php
		 * @since PHP 5, PHP 7
		 */
		public function isAsp(): bool {}

		/**
		 * Checks if a node represents a comment
		 * <p>Tells if the node is a comment.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node is a comment, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.iscomment.php
		 * @since PHP 5, PHP 7
		 */
		public function isComment(): bool {}

		/**
		 * Checks if a node is an element node
		 * <p>Tells if the node is an element node, but not the root node of the document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node is an element node, but not the root node of the document, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.ishtml.php
		 * @since PHP 5, PHP 7
		 */
		public function isHtml(): bool {}

		/**
		 * Checks if this node is JSTE
		 * <p>Tells if the node is JSTE.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node is JSTE, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.isjste.php
		 * @since PHP 5, PHP 7
		 */
		public function isJste(): bool {}

		/**
		 * Checks if a node is PHP
		 * <p>Tells if the node is PHP.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the current node is PHP code, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.isphp.php
		 * @since PHP 5, PHP 7
		 */
		public function isPhp(): bool {}

		/**
		 * Checks if a node represents text (no markup)
		 * <p>Tells if the node represents a text (without any markup).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node represent a text, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/tidynode.istext.php
		 * @since PHP 5, PHP 7
		 */
		public function isText(): bool {}
	}

	/**
	 * ob_start callback function to repair the buffer
	 * <p>Callback function for <code>ob_start()</code> to repair the buffer.</p>
	 * @param string $input <p>The buffer.</p>
	 * @param int $mode <p>The buffer mode.</p>
	 * @return string <p>Returns the modified buffer.</p>
	 * @link http://php.net/manual/en/function.ob-tidyhandler.php
	 * @see ob_start()
	 * @since PHP 5, PHP 7
	 */
	function ob_tidyhandler(string $input, int $mode = NULL): string {}

	/**
	 * Returns the Number of Tidy accessibility warnings encountered for specified document
	 * <p><b>tidy_access_count()</b> returns the number of accessibility warnings found for the specified document.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return int <p>Returns the number of warnings.</p>
	 * @link http://php.net/manual/en/function.tidy-access-count.php
	 * @see tidy_error_count(), tidy_warning_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_access_count(\tidy $object): int {}

	/**
	 * Execute configured cleanup and repair operations on parsed markup
	 * <p>This function cleans and repairs the given tidy <code>object</code>.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/tidy.cleanrepair.php
	 * @see tidy::repairFile(), tidy::repairString()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_clean_repair(\tidy $object): bool {}

	/**
	 * Returns the Number of Tidy configuration errors encountered for specified document
	 * <p>Returns the number of errors encountered in the configuration of the specified tidy <code>object</code>.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return int <p>Returns the number of errors.</p>
	 * @link http://php.net/manual/en/function.tidy-config-count.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_config_count(\tidy $object): int {}

	/**
	 * Run configured diagnostics on parsed and repaired markup
	 * <p>Runs diagnostic tests on the given tidy <code>object</code>, adding some more information about the document in the error buffer.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/tidy.diagnose.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_diagnose(\tidy $object): bool {}

	/**
	 * Returns the Number of Tidy errors encountered for specified document
	 * <p>Returns the number of Tidy errors encountered for the specified document.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return int <p>Returns the number of errors.</p>
	 * @link http://php.net/manual/en/function.tidy-error-count.php
	 * @see tidy_access_count(), tidy_warning_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_error_count(\tidy $object): int {}

	/**
	 * Returns a tidyNode object starting from the  tag of the tidy parse tree
	 * <p>Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return tidyNode <p>Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree.</p>
	 * @link http://php.net/manual/en/tidy.body.php
	 * @see tidy::head(), tidy::html()
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0
	 */
	function tidy_get_body(\tidy $object): \tidyNode {}

	/**
	 * Get current Tidy configuration
	 * <p>Gets the list of the configuration options in use by the given tidy <code>object</code>.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return array <p>Returns an array of configuration options.</p><p>For an explanation about each option, visit http://api.html-tidy.org/#quick-reference.</p>
	 * @link http://php.net/manual/en/tidy.getconfig.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_get_config(\tidy $object): array {}

	/**
	 * Return warnings and errors which occurred parsing the specified document
	 * <p>Returns warnings and errors which occurred parsing the specified document.</p>
	 * @param \tidy $tidy <p>The Tidy object.</p>
	 * @return string <p>Returns the error buffer as a string.</p>
	 * @link http://php.net/manual/en/tidy.props.errorbuffer.php
	 * @see tidy_access_count(), tidy_error_count(), tidy_warning_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_error_buffer(\tidy $tidy): string {}

	/**
	 * Returns a tidyNode object starting from the  tag of the tidy parse tree
	 * <p>Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return tidyNode <p>Returns the tidyNode object.</p>
	 * @link http://php.net/manual/en/tidy.head.php
	 * @see tidy::body(), tidy::html()
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
	 */
	function tidy_get_head(\tidy $object): \tidyNode {}

	/**
	 * Returns a tidyNode object starting from the  tag of the tidy parse tree
	 * <p>Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return tidyNode <p>Returns the tidyNode object.</p>
	 * @link http://php.net/manual/en/tidy.php.php
	 * @see tidy::body(), tidy::head()
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
	 */
	function tidy_get_html(\tidy $object): \tidyNode {}

	/**
	 * Get the Detected HTML version for the specified document
	 * <p>Returns the detected HTML version for the specified tidy <code>object</code>.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return int <p>Returns the detected HTML version.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <code>0</code>.</p>
	 * @link http://php.net/manual/en/tidy.gethtmlver.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_html_ver(\tidy $object): int {}

	/**
	 * Returns the documentation for the given option name
	 * <p><b>tidy_get_opt_doc()</b> returns the documentation for the given option name.</p><p><b>Note</b>:</p><p>You need at least libtidy from 25 April, 2005 for this function be available.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @param string $optname <p>The option name</p>
	 * @return string <p>Returns a string if the option exists and has documentation available, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/tidy.getoptdoc.php
	 * @see tidy::getconfig(), tidy::getopt()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function tidy_get_opt_doc(\tidy $object, string $optname): string {}

	/**
	 * Return a string representing the parsed tidy markup
	 * <p>Gets a string with the repaired html.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return string <p>Returns the parsed tidy markup.</p>
	 * @link http://php.net/manual/en/function.tidy-get-output.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_output(\tidy $object): string {}

	/**
	 * Get release date (version) for Tidy library
	 * <p>Gets the release date of the Tidy library.</p>
	 * @return string <p>Returns a string with the release date of the Tidy library, which may be <code>'unknown'</code>.</p>
	 * @link http://php.net/manual/en/tidy.getrelease.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_release(): string {}

	/**
	 * Returns a tidyNode object representing the root of the tidy parse tree
	 * <p>Returns a tidyNode object representing the root of the tidy parse tree.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return tidyNode <p>Returns the tidyNode object.</p>
	 * @link http://php.net/manual/en/tidy.root.php
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
	 */
	function tidy_get_root(\tidy $object): \tidyNode {}

	/**
	 * Get status of specified document
	 * <p>Returns the status for the specified tidy <code>object</code>.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return int <p>Returns 0 if no error/warning was raised, 1 for warnings or accessibility errors, or 2 for errors.</p>
	 * @link http://php.net/manual/en/tidy.getstatus.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_status(\tidy $object): int {}

	/**
	 * Returns the value of the specified configuration option for the tidy document
	 * <p>Returns the value of the specified <code>option</code> for the specified tidy <code>object</code>.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @param string $option <p>You will find a list with each configuration option and their types at: http://api.html-tidy.org/#quick-reference.</p>
	 * @return mixed <p>Returns the value of the specified <code>option</code>. The return type depends on the type of the specified one.</p>
	 * @link http://php.net/manual/en/tidy.getopt.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_getopt(\tidy $object, string $option) {}

	/**
	 * Indicates if the document is a XHTML document
	 * <p>Tells if the document is a XHTML document.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if the specified tidy <code>object</code> is a XHTML document, or <b><code>FALSE</code></b> otherwise.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/tidy.isxhtml.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_is_xhtml(\tidy $object): bool {}

	/**
	 * Indicates if the document is a generic (non HTML/XHTML) XML document
	 * <p>Tells if the document is a generic (non HTML/XHTML) XML document.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if the specified tidy <code>object</code> is a generic XML document (non HTML/XHTML), or <b><code>FALSE</code></b> otherwise.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/tidy.isxml.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_is_xml(\tidy $object): bool {}

	/**
	 * Parse markup in file or URI
	 * <p>Parses the given file.</p>
	 * @param string $filename <p>If the <code>filename</code> parameter is given, this function will also read that file and initialize the object with the file, acting like <b>tidy_parse_file()</b>.</p>
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, see http://api.html-tidy.org/#quick-reference.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
	 * @param bool $use_include_path <p>Search for the file in the include_path.</p>
	 * @return tidy <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/tidy.parsefile.php
	 * @see tidy::parsestring(), tidy::repairfile(), tidy::repairstring()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_parse_file(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): \tidy {}

	/**
	 * Parse a document stored in a string
	 * <p>Parses a document stored in a string.</p>
	 * @param string $input <p>The data to be parsed.</p>
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, visit http://api.html-tidy.org/#quick-reference.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
	 * @return tidy <p>Returns a new tidy instance.</p>
	 * @link http://php.net/manual/en/tidy.parsestring.php
	 * @see tidy::parseFile(), tidy::repairFile(), tidy::repairString()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_parse_string(string $input, $config = NULL, string $encoding = NULL): \tidy {}

	/**
	 * Repair a file and return it as a string
	 * <p>Repairs the given file and returns it as a string.</p>
	 * @param string $filename <p>The file to be repaired.</p>
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>Check http://tidy.sourceforge.net/docs/quickref.html for an explanation about each option.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
	 * @param bool $use_include_path <p>Search for the file in the include_path.</p>
	 * @return string <p>Returns the repaired contents as a string.</p>
	 * @link http://php.net/manual/en/tidy.repairfile.php
	 * @see tidy::parseFile(), tidy::parseString(), tidy::repairString()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_repair_file(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): string {}

	/**
	 * Repair a string using an optionally provided configuration file
	 * <p>Repairs the given string.</p>
	 * @param string $data <p>The data to be repaired.</p>
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>Check http://api.html-tidy.org/#quick-reference for an explanation about each option.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <code>ascii</code>, <code>latin0</code>, <code>latin1</code>, <code>raw</code>, <code>utf8</code>, <code>iso2022</code>, <code>mac</code>, <code>win1252</code>, <code>ibm858</code>, <code>utf16</code>, <code>utf16le</code>, <code>utf16be</code>, <code>big5</code>, and <code>shiftjis</code>.</p>
	 * @return string <p>Returns the repaired string.</p>
	 * @link http://php.net/manual/en/tidy.repairstring.php
	 * @see tidy::parseFile(), tidy::parseString(), tidy::repairFile()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_repair_string(string $data, $config = NULL, string $encoding = NULL): string {}

	/**
	 * Returns the Number of Tidy warnings encountered for specified document
	 * <p>Returns the number of Tidy warnings encountered for the specified document.</p>
	 * @param \tidy $object <p>The Tidy object.</p>
	 * @return int <p>Returns the number of warnings.</p>
	 * @link http://php.net/manual/en/function.tidy-warning-count.php
	 * @see tidy_error_count(), tidy_access_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_warning_count(\tidy $object): int {}

	/**
	 * ASP code
	 */
	define('TIDY_NODETYPE_ASP', null);

	/**
	 * CDATA
	 */
	define('TIDY_NODETYPE_CDATA', null);

	/**
	 * HTML comment
	 */
	define('TIDY_NODETYPE_COMMENT', null);

	/**
	 * doctype
	 */
	define('TIDY_NODETYPE_DOCTYPE', null);

	/**
	 * end tag
	 */
	define('TIDY_NODETYPE_END', null);

	/**
	 * JSTE code
	 */
	define('TIDY_NODETYPE_JSTE', null);

	/**
	 * PHP code
	 */
	define('TIDY_NODETYPE_PHP', null);

	/**
	 * Processing Instruction
	 */
	define('TIDY_NODETYPE_PROCINS', null);

	/**
	 * root node
	 */
	define('TIDY_NODETYPE_ROOT', null);

	/**
	 * XML section
	 */
	define('TIDY_NODETYPE_SECTION', null);

	/**
	 * start tag
	 */
	define('TIDY_NODETYPE_START', null);

	/**
	 * empty tag
	 */
	define('TIDY_NODETYPE_STARTEND', null);

	/**
	 * Text
	 */
	define('TIDY_NODETYPE_TEXT', null);

	/**
	 * XML declaration
	 */
	define('TIDY_NODETYPE_XMLDECL', null);

	/**
	 * <b><code>TIDY_TAG_A</code></b>
	 */
	define('TIDY_TAG_A', null);

	/**
	 * <b><code>TIDY_TAG_ABBR</code></b>
	 */
	define('TIDY_TAG_ABBR', null);

	/**
	 * <b><code>TIDY_TAG_ACRONYM</code></b>
	 */
	define('TIDY_TAG_ACRONYM', null);

	/**
	 * <b><code>TIDY_TAG_ALIGN</code></b>
	 */
	define('TIDY_TAG_ALIGN', null);

	/**
	 * <b><code>TIDY_TAG_APPLET</code></b>
	 */
	define('TIDY_TAG_APPLET', null);

	/**
	 * <b><code>TIDY_TAG_AREA</code></b>
	 */
	define('TIDY_TAG_AREA', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_ARTICLE', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_ASIDE', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_AUDIO', null);

	/**
	 * <b><code>TIDY_TAG_B</code></b>
	 */
	define('TIDY_TAG_B', null);

	/**
	 * <b><code>TIDY_TAG_BASE</code></b>
	 */
	define('TIDY_TAG_BASE', null);

	/**
	 * <b><code>TIDY_TAG_BASEFONT</code></b>
	 */
	define('TIDY_TAG_BASEFONT', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_BDI', null);

	/**
	 * <b><code>TIDY_TAG_BDO</code></b>
	 */
	define('TIDY_TAG_BDO', null);

	/**
	 * <b><code>TIDY_TAG_BGSOUND</code></b>
	 */
	define('TIDY_TAG_BGSOUND', null);

	/**
	 * <b><code>TIDY_TAG_BIG</code></b>
	 */
	define('TIDY_TAG_BIG', null);

	/**
	 * <b><code>TIDY_TAG_BLINK</code></b>
	 */
	define('TIDY_TAG_BLINK', null);

	/**
	 * <b><code>TIDY_TAG_BLOCKQUOTE</code></b>
	 */
	define('TIDY_TAG_BLOCKQUOTE', null);

	/**
	 * <b><code>TIDY_TAG_BODY</code></b>
	 */
	define('TIDY_TAG_BODY', null);

	/**
	 * <b><code>TIDY_TAG_BR</code></b>
	 */
	define('TIDY_TAG_BR', null);

	/**
	 * <b><code>TIDY_TAG_BUTTON</code></b>
	 */
	define('TIDY_TAG_BUTTON', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_CANVAS', null);

	/**
	 * <b><code>TIDY_TAG_CAPTION</code></b>
	 */
	define('TIDY_TAG_CAPTION', null);

	/**
	 * <b><code>TIDY_TAG_CENTER</code></b>
	 */
	define('TIDY_TAG_CENTER', null);

	/**
	 * <b><code>TIDY_TAG_CITE</code></b>
	 */
	define('TIDY_TAG_CITE', null);

	/**
	 * <b><code>TIDY_TAG_CODE</code></b>
	 */
	define('TIDY_TAG_CODE', null);

	/**
	 * <b><code>TIDY_TAG_COL</code></b>
	 */
	define('TIDY_TAG_COL', null);

	/**
	 * <b><code>TIDY_TAG_COLGROUP</code></b>
	 */
	define('TIDY_TAG_COLGROUP', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_COMMAND', null);

	/**
	 * <b><code>TIDY_TAG_COMMENT</code></b>
	 */
	define('TIDY_TAG_COMMENT', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_DATALIST', null);

	/**
	 * <b><code>TIDY_TAG_DD</code></b>
	 */
	define('TIDY_TAG_DD', null);

	/**
	 * <b><code>TIDY_TAG_DEL</code></b>
	 */
	define('TIDY_TAG_DEL', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_DETAILS', null);

	/**
	 * <b><code>TIDY_TAG_DFN</code></b>
	 */
	define('TIDY_TAG_DFN', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_DIALOG', null);

	/**
	 * <b><code>TIDY_TAG_DIR</code></b>
	 */
	define('TIDY_TAG_DIR', null);

	/**
	 * <b><code>TIDY_TAG_DIV</code></b>
	 */
	define('TIDY_TAG_DIV', null);

	/**
	 * <b><code>TIDY_TAG_DL</code></b>
	 */
	define('TIDY_TAG_DL', null);

	/**
	 * <b><code>TIDY_TAG_DT</code></b>
	 */
	define('TIDY_TAG_DT', null);

	/**
	 * <b><code>TIDY_TAG_EM</code></b>
	 */
	define('TIDY_TAG_EM', null);

	/**
	 * <b><code>TIDY_TAG_EMBED</code></b>
	 */
	define('TIDY_TAG_EMBED', null);

	/**
	 * <b><code>TIDY_TAG_FIELDSET</code></b>
	 */
	define('TIDY_TAG_FIELDSET', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_FIGCAPTION', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_FIGURE', null);

	/**
	 * <b><code>TIDY_TAG_FONT</code></b>
	 */
	define('TIDY_TAG_FONT', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_FOOTER', null);

	/**
	 * <b><code>TIDY_TAG_FORM</code></b>
	 */
	define('TIDY_TAG_FORM', null);

	/**
	 * <b><code>TIDY_TAG_FRAME</code></b>
	 */
	define('TIDY_TAG_FRAME', null);

	/**
	 * <b><code>TIDY_TAG_FRAMESET</code></b>
	 */
	define('TIDY_TAG_FRAMESET', null);

	/**
	 * <b><code>TIDY_TAG_H1</code></b>
	 */
	define('TIDY_TAG_H1', null);

	/**
	 * <b><code>TIDY_TAG_H2</code></b>
	 */
	define('TIDY_TAG_H2', null);

	/**
	 * <b><code>TIDY_TAG_H3</code></b>
	 */
	define('TIDY_TAG_H3', null);

	/**
	 * <b><code>TIDY_TAG_H4</code></b>
	 */
	define('TIDY_TAG_H4', null);

	/**
	 * <b><code>TIDY_TAG_H5</code></b>
	 */
	define('TIDY_TAG_H5', null);

	/**
	 * <b><code>TIDY_TAG_H6</code></b>
	 */
	define('TIDY_TAG_H6', null);

	/**
	 * <b><code>TIDY_TAG_HEAD</code></b>
	 */
	define('TIDY_TAG_HEAD', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_HEADER', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_HGROUP', null);

	/**
	 * <b><code>TIDY_TAG_HR</code></b>
	 */
	define('TIDY_TAG_HR', null);

	/**
	 * <b><code>TIDY_TAG_HTML</code></b>
	 */
	define('TIDY_TAG_HTML', null);

	/**
	 * <b><code>TIDY_TAG_I</code></b>
	 */
	define('TIDY_TAG_I', null);

	/**
	 * <b><code>TIDY_TAG_IFRAME</code></b>
	 */
	define('TIDY_TAG_IFRAME', null);

	/**
	 * <b><code>TIDY_TAG_ILAYER</code></b>
	 */
	define('TIDY_TAG_ILAYER', null);

	/**
	 * <b><code>TIDY_TAG_IMG</code></b>
	 */
	define('TIDY_TAG_IMG', null);

	/**
	 * <b><code>TIDY_TAG_INPUT</code></b>
	 */
	define('TIDY_TAG_INPUT', null);

	/**
	 * <b><code>TIDY_TAG_INS</code></b>
	 */
	define('TIDY_TAG_INS', null);

	/**
	 * <b><code>TIDY_TAG_ISINDEX</code></b>
	 */
	define('TIDY_TAG_ISINDEX', null);

	/**
	 * <b><code>TIDY_TAG_KBD</code></b>
	 */
	define('TIDY_TAG_KBD', null);

	/**
	 * <b><code>TIDY_TAG_KEYGEN</code></b>
	 */
	define('TIDY_TAG_KEYGEN', null);

	/**
	 * <b><code>TIDY_TAG_LABEL</code></b>
	 */
	define('TIDY_TAG_LABEL', null);

	/**
	 * <b><code>TIDY_TAG_LAYER</code></b>
	 */
	define('TIDY_TAG_LAYER', null);

	/**
	 * <b><code>TIDY_TAG_LEGEND</code></b>
	 */
	define('TIDY_TAG_LEGEND', null);

	/**
	 * <b><code>TIDY_TAG_LI</code></b>
	 */
	define('TIDY_TAG_LI', null);

	/**
	 * <b><code>TIDY_TAG_LINK</code></b>
	 */
	define('TIDY_TAG_LINK', null);

	/**
	 * <b><code>TIDY_TAG_LISTING</code></b>
	 */
	define('TIDY_TAG_LISTING', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_MAIN', null);

	/**
	 * <b><code>TIDY_TAG_MAP</code></b>
	 */
	define('TIDY_TAG_MAP', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_MARK', null);

	/**
	 * <b><code>TIDY_TAG_MARQUEE</code></b>
	 */
	define('TIDY_TAG_MARQUEE', null);

	/**
	 * <b><code>TIDY_TAG_MENU</code></b>
	 */
	define('TIDY_TAG_MENU', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_MENUITEM', null);

	/**
	 * <b><code>TIDY_TAG_META</code></b>
	 */
	define('TIDY_TAG_META', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_METER', null);

	/**
	 * <b><code>TIDY_TAG_MULTICOL</code></b>
	 */
	define('TIDY_TAG_MULTICOL', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_NAV', null);

	/**
	 * <b><code>TIDY_TAG_NOBR</code></b>
	 */
	define('TIDY_TAG_NOBR', null);

	/**
	 * <b><code>TIDY_TAG_NOEMBED</code></b>
	 */
	define('TIDY_TAG_NOEMBED', null);

	/**
	 * <b><code>TIDY_TAG_NOFRAMES</code></b>
	 */
	define('TIDY_TAG_NOFRAMES', null);

	/**
	 * <b><code>TIDY_TAG_NOLAYER</code></b>
	 */
	define('TIDY_TAG_NOLAYER', null);

	/**
	 * <b><code>TIDY_TAG_NOSAVE</code></b>
	 */
	define('TIDY_TAG_NOSAVE', null);

	/**
	 * <b><code>TIDY_TAG_NOSCRIPT</code></b>
	 */
	define('TIDY_TAG_NOSCRIPT', null);

	/**
	 * <b><code>TIDY_TAG_OBJECT</code></b>
	 */
	define('TIDY_TAG_OBJECT', null);

	/**
	 * <b><code>TIDY_TAG_OL</code></b>
	 */
	define('TIDY_TAG_OL', null);

	/**
	 * <b><code>TIDY_TAG_OPTGROUP</code></b>
	 */
	define('TIDY_TAG_OPTGROUP', null);

	/**
	 * <b><code>TIDY_TAG_OPTION</code></b>
	 */
	define('TIDY_TAG_OPTION', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_OUTPUT', null);

	/**
	 * <b><code>TIDY_TAG_P</code></b>
	 */
	define('TIDY_TAG_P', null);

	/**
	 * <b><code>TIDY_TAG_PARAM</code></b>
	 */
	define('TIDY_TAG_PARAM', null);

	/**
	 * <b><code>TIDY_TAG_PLAINTEXT</code></b>
	 */
	define('TIDY_TAG_PLAINTEXT', null);

	/**
	 * <b><code>TIDY_TAG_PRE</code></b>
	 */
	define('TIDY_TAG_PRE', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_PROGRESS', null);

	/**
	 * <b><code>TIDY_TAG_Q</code></b>
	 */
	define('TIDY_TAG_Q', null);

	/**
	 * <b><code>TIDY_TAG_RB</code></b>
	 */
	define('TIDY_TAG_RB', null);

	/**
	 * <b><code>TIDY_TAG_RBC</code></b>
	 */
	define('TIDY_TAG_RBC', null);

	/**
	 * <b><code>TIDY_TAG_RP</code></b>
	 */
	define('TIDY_TAG_RP', null);

	/**
	 * <b><code>TIDY_TAG_RT</code></b>
	 */
	define('TIDY_TAG_RT', null);

	/**
	 * <b><code>TIDY_TAG_RTC</code></b>
	 */
	define('TIDY_TAG_RTC', null);

	/**
	 * <b><code>TIDY_TAG_RUBY</code></b>
	 */
	define('TIDY_TAG_RUBY', null);

	/**
	 * <b><code>TIDY_TAG_S</code></b>
	 */
	define('TIDY_TAG_S', null);

	/**
	 * <b><code>TIDY_TAG_SAMP</code></b>
	 */
	define('TIDY_TAG_SAMP', null);

	/**
	 * <b><code>TIDY_TAG_SCRIPT</code></b>
	 */
	define('TIDY_TAG_SCRIPT', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_SECTION', null);

	/**
	 * <b><code>TIDY_TAG_SELECT</code></b>
	 */
	define('TIDY_TAG_SELECT', null);

	/**
	 * <b><code>TIDY_TAG_SERVER</code></b>
	 */
	define('TIDY_TAG_SERVER', null);

	/**
	 * <b><code>TIDY_TAG_SERVLET</code></b>
	 */
	define('TIDY_TAG_SERVLET', null);

	/**
	 * <b><code>TIDY_TAG_SMALL</code></b>
	 */
	define('TIDY_TAG_SMALL', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_SOURCE', null);

	/**
	 * <b><code>TIDY_TAG_SPACER</code></b>
	 */
	define('TIDY_TAG_SPACER', null);

	/**
	 * <b><code>TIDY_TAG_SPAN</code></b>
	 */
	define('TIDY_TAG_SPAN', null);

	/**
	 * <b><code>TIDY_TAG_STRIKE</code></b>
	 */
	define('TIDY_TAG_STRIKE', null);

	/**
	 * <b><code>TIDY_TAG_STRONG</code></b>
	 */
	define('TIDY_TAG_STRONG', null);

	/**
	 * <b><code>TIDY_TAG_STYLE</code></b>
	 */
	define('TIDY_TAG_STYLE', null);

	/**
	 * <b><code>TIDY_TAG_SUB</code></b>
	 */
	define('TIDY_TAG_SUB', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_SUMMARY', null);

	/**
	 * <b><code>TIDY_TAG_SUP</code></b>
	 */
	define('TIDY_TAG_SUP', null);

	/**
	 * <b><code>TIDY_TAG_TABLE</code></b>
	 */
	define('TIDY_TAG_TABLE', null);

	/**
	 * <b><code>TIDY_TAG_TBODY</code></b>
	 */
	define('TIDY_TAG_TBODY', null);

	/**
	 * <b><code>TIDY_TAG_TD</code></b>
	 */
	define('TIDY_TAG_TD', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_TEMPLATE', null);

	/**
	 * <b><code>TIDY_TAG_TEXTAREA</code></b>
	 */
	define('TIDY_TAG_TEXTAREA', null);

	/**
	 * <b><code>TIDY_TAG_TFOOT</code></b>
	 */
	define('TIDY_TAG_TFOOT', null);

	/**
	 * <b><code>TIDY_TAG_TH</code></b>
	 */
	define('TIDY_TAG_TH', null);

	/**
	 * <b><code>TIDY_TAG_THEAD</code></b>
	 */
	define('TIDY_TAG_THEAD', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_TIME', null);

	/**
	 * <b><code>TIDY_TAG_TITLE</code></b>
	 */
	define('TIDY_TAG_TITLE', null);

	/**
	 * <b><code>TIDY_TAG_TR</code></b>
	 */
	define('TIDY_TAG_TR', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_TRACK', null);

	/**
	 * <b><code>TIDY_TAG_TT</code></b>
	 */
	define('TIDY_TAG_TT', null);

	/**
	 * <b><code>TIDY_TAG_U</code></b>
	 */
	define('TIDY_TAG_U', null);

	/**
	 * <b><code>TIDY_TAG_UL</code></b>
	 */
	define('TIDY_TAG_UL', null);

	/**
	 * <b><code>TIDY_TAG_UNKNOWN</code></b>
	 */
	define('TIDY_TAG_UNKNOWN', null);

	/**
	 * <b><code>TIDY_TAG_VAR</code></b>
	 */
	define('TIDY_TAG_VAR', null);

	/**
	 * Added in libtidy 5.0.0. Available as of PHP 7.4.0.
	 */
	define('TIDY_TAG_VIDEO', null);

	/**
	 * <b><code>TIDY_TAG_WBR</code></b>
	 */
	define('TIDY_TAG_WBR', null);

	/**
	 * <b><code>TIDY_TAG_XMP</code></b>
	 */
	define('TIDY_TAG_XMP', null);

}
