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
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
		 * @return array <p>Returns an array of configuration options.</p><p>For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.</p>
		 * @link http://php.net/manual/en/tidy.getconfig.php
		 * @see tidy_reset_config(), tidy_save_config()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function getConfig(): array {}

		/**
		 * Get the Detected HTML version for the specified document
		 * <p>Returns the detected HTML version for the specified tidy <code>object</code>.</p>
		 * @return int <p>Returns the detected HTML version.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <i>0</i>.</p>
		 * @link http://php.net/manual/en/tidy.gethtmlver.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getHtmlVer(): int {}

		/**
		 * Returns the value of the specified configuration option for the tidy document
		 * <p>Returns the value of the specified <code>option</code> for the specified tidy <code>object</code>.</p>
		 * @param string $option <p>You will find a list with each configuration option and their types at: http://tidy.sourceforge.net/docs/quickref.html.</p>
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
		 * @return string <p>Returns a string with the release date of the Tidy library.</p>
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
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, see http://tidy.sourceforge.net/docs/quickref.html.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
		 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>Check http://tidy.sourceforge.net/docs/quickref.html for an explanation about each option.</p>
		 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
	class tidyNode {

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
		 * @var int <p>The type of the tag (one of the constants above, e.g. <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
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
		 * @var int <p>The ID of the tag (one of the constants above, e.g. <b><code>TIDY_TAG_FRAME</code></b>)</p>
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
		 * Checks if a node is part of a HTML document
		 * <p>Tells if the node is part of HTML document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the node is part of a HTML document, <b><code>FALSE</code></b> otherwise.</p>
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
	 * @return array <p>Returns an array of configuration options.</p><p>For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.</p>
	 * @link http://php.net/manual/en/tidy.getconfig.php
	 * @see tidy_reset_config(), tidy_save_config()
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
	 * @return int <p>Returns the detected HTML version.</p><p><b>Warning</b></p> <p>This function is not yet implemented in the Tidylib itself, so it always return <i>0</i>.</p>
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
	 * @return string <p>Returns a string with the release date of the Tidy library.</p>
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
	 * @param string $option <p>You will find a list with each configuration option and their types at: http://tidy.sourceforge.net/docs/quickref.html.</p>
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
	 * Load an ASCII Tidy configuration file with the specified encoding
	 * <p>Loads a Tidy configuration file, with the specified <code>encoding</code>.</p>
	 * @param string $filename
	 * @param string $encoding
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.tidy-load-config.php
	 * @since PECL tidy >= 0.5.2
	 */
	function tidy_load_config(string $filename, string $encoding): void {}

	/**
	 * Parse markup in file or URI
	 * <p>Parses the given file.</p>
	 * @param string $filename <p>If the <code>filename</code> parameter is given, this function will also read that file and initialize the object with the file, acting like <b>tidy_parse_file()</b>.</p>
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, see http://tidy.sourceforge.net/docs/quickref.html.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
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
	 * @param mixed $config <p>The config <code>config</code> can be passed either as an array or as a string. If a string is passed, it is interpreted as the name of the configuration file, otherwise, it is interpreted as the options themselves.</p> <p>Check http://tidy.sourceforge.net/docs/quickref.html for an explanation about each option.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
	 * @return string <p>Returns the repaired string.</p>
	 * @link http://php.net/manual/en/tidy.repairstring.php
	 * @see tidy::parseFile(), tidy::parseString(), tidy::repairFile()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_repair_string(string $data, $config = NULL, string $encoding = NULL): string {}

	/**
	 * Restore Tidy configuration to default values
	 * <p>This function restores the Tidy configuration to the default values.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.tidy-reset-config.php
	 * @since PHP 5 < 5.2.0, PECL tidy >= 0.7.0
	 */
	function tidy_reset_config(): bool {}

	/**
	 * Save current settings to named file
	 * <p>Saves current settings to the specified file. Only non-default values are written.</p>
	 * @param string $filename <p>Path to the config file.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.tidy-save-config.php
	 * @see tidy_get_config(), tidy_getopt(), tidy_reset_config(), tidy_setopt()
	 * @since PECL tidy >= 0.5.2
	 */
	function tidy_save_config(string $filename): bool {}

	/**
	 * Set the input/output character encoding for parsing markup
	 * <p>Sets the encoding for input/output documents.</p>
	 * @param string $encoding <p>The <code>encoding</code> parameter sets the encoding for input/output documents. The possible values for encoding are: <i>ascii</i>, <i>latin0</i>, <i>latin1</i>, <i>raw</i>, <i>utf8</i>, <i>iso2022</i>, <i>mac</i>, <i>win1252</i>, <i>ibm858</i>, <i>utf16</i>, <i>utf16le</i>, <i>utf16be</i>, <i>big5</i>, and <i>shiftjis</i>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.tidy-set-encoding.php
	 * @since PECL tidy >= 0.5.2
	 */
	function tidy_set_encoding(string $encoding): bool {}

	/**
	 * Updates the configuration settings for the specified tidy document
	 * <p><b>tidy_setopt()</b> updates the specified <code>option</code> with a new <code>value</code>.</p>
	 * @param string $option <p>The tidy option name. A list of available configuration options may be found at: http://tidy.sourceforge.net/docs/quickref.html.</p>
	 * @param mixed $value <p>The tidy option name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.tidy-setopt.php
	 * @see tidy_getopt(), tidy_get_config(), tidy_reset_config(), tidy_save_config()
	 * @since PECL tidy >= 0.5.2
	 */
	function tidy_setopt(string $option, $value): bool {}

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
	 * <b><code>TIDY_ATTR_ABBR</code></b>
	 */
	define('TIDY_ATTR_ABBR', null);

	/**
	 * <b><code>TIDY_ATTR_ACCEPT</code></b>
	 */
	define('TIDY_ATTR_ACCEPT', null);

	/**
	 * <b><code>TIDY_ATTR_ACCEPT_CHARSET</code></b>
	 */
	define('TIDY_ATTR_ACCEPT_CHARSET', null);

	/**
	 * <b><code>TIDY_ATTR_ACCESSKEY</code></b>
	 */
	define('TIDY_ATTR_ACCESSKEY', null);

	/**
	 * <b><code>TIDY_ATTR_ACTION</code></b>
	 */
	define('TIDY_ATTR_ACTION', null);

	/**
	 * <b><code>TIDY_ATTR_ADD_DATE</code></b>
	 */
	define('TIDY_ATTR_ADD_DATE', null);

	/**
	 * <b><code>TIDY_ATTR_ALIGN</code></b>
	 */
	define('TIDY_ATTR_ALIGN', null);

	/**
	 * <b><code>TIDY_ATTR_ALINK</code></b>
	 */
	define('TIDY_ATTR_ALINK', null);

	/**
	 * <b><code>TIDY_ATTR_ALT</code></b>
	 */
	define('TIDY_ATTR_ALT', null);

	/**
	 * <b><code>TIDY_ATTR_ARCHIVE</code></b>
	 */
	define('TIDY_ATTR_ARCHIVE', null);

	/**
	 * <b><code>TIDY_ATTR_AXIS</code></b>
	 */
	define('TIDY_ATTR_AXIS', null);

	/**
	 * <b><code>TIDY_ATTR_BACKGROUND</code></b>
	 */
	define('TIDY_ATTR_BACKGROUND', null);

	/**
	 * <b><code>TIDY_ATTR_BGCOLOR</code></b>
	 */
	define('TIDY_ATTR_BGCOLOR', null);

	/**
	 * <b><code>TIDY_ATTR_BGPROPERTIES</code></b>
	 */
	define('TIDY_ATTR_BGPROPERTIES', null);

	/**
	 * <b><code>TIDY_ATTR_BORDER</code></b>
	 */
	define('TIDY_ATTR_BORDER', null);

	/**
	 * <b><code>TIDY_ATTR_BORDERCOLOR</code></b>
	 */
	define('TIDY_ATTR_BORDERCOLOR', null);

	/**
	 * <b><code>TIDY_ATTR_BOTTOMMARGIN</code></b>
	 */
	define('TIDY_ATTR_BOTTOMMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_CELLPADDING</code></b>
	 */
	define('TIDY_ATTR_CELLPADDING', null);

	/**
	 * <b><code>TIDY_ATTR_CELLSPACING</code></b>
	 */
	define('TIDY_ATTR_CELLSPACING', null);

	/**
	 * <b><code>TIDY_ATTR_CHAR</code></b>
	 */
	define('TIDY_ATTR_CHAR', null);

	/**
	 * <b><code>TIDY_ATTR_CHAROFF</code></b>
	 */
	define('TIDY_ATTR_CHAROFF', null);

	/**
	 * <b><code>TIDY_ATTR_CHARSET</code></b>
	 */
	define('TIDY_ATTR_CHARSET', null);

	/**
	 * <b><code>TIDY_ATTR_CHECKED</code></b>
	 */
	define('TIDY_ATTR_CHECKED', null);

	/**
	 * <b><code>TIDY_ATTR_CITE</code></b>
	 */
	define('TIDY_ATTR_CITE', null);

	/**
	 * <b><code>TIDY_ATTR_CLASS</code></b>
	 */
	define('TIDY_ATTR_CLASS', null);

	/**
	 * <b><code>TIDY_ATTR_CLASSID</code></b>
	 */
	define('TIDY_ATTR_CLASSID', null);

	/**
	 * <b><code>TIDY_ATTR_CLEAR</code></b>
	 */
	define('TIDY_ATTR_CLEAR', null);

	/**
	 * <b><code>TIDY_ATTR_CODE</code></b>
	 */
	define('TIDY_ATTR_CODE', null);

	/**
	 * <b><code>TIDY_ATTR_CODEBASE</code></b>
	 */
	define('TIDY_ATTR_CODEBASE', null);

	/**
	 * <b><code>TIDY_ATTR_CODETYPE</code></b>
	 */
	define('TIDY_ATTR_CODETYPE', null);

	/**
	 * <b><code>TIDY_ATTR_COLOR</code></b>
	 */
	define('TIDY_ATTR_COLOR', null);

	/**
	 * <b><code>TIDY_ATTR_COLS</code></b>
	 */
	define('TIDY_ATTR_COLS', null);

	/**
	 * <b><code>TIDY_ATTR_COLSPAN</code></b>
	 */
	define('TIDY_ATTR_COLSPAN', null);

	/**
	 * <b><code>TIDY_ATTR_COMPACT</code></b>
	 */
	define('TIDY_ATTR_COMPACT', null);

	/**
	 * <b><code>TIDY_ATTR_CONTENT</code></b>
	 */
	define('TIDY_ATTR_CONTENT', null);

	/**
	 * <b><code>TIDY_ATTR_COORDS</code></b>
	 */
	define('TIDY_ATTR_COORDS', null);

	/**
	 * <b><code>TIDY_ATTR_DATA</code></b>
	 */
	define('TIDY_ATTR_DATA', null);

	/**
	 * <b><code>TIDY_ATTR_DATAFLD</code></b>
	 */
	define('TIDY_ATTR_DATAFLD', null);

	/**
	 * <b><code>TIDY_ATTR_DATAPAGESIZE</code></b>
	 */
	define('TIDY_ATTR_DATAPAGESIZE', null);

	/**
	 * <b><code>TIDY_ATTR_DATASRC</code></b>
	 */
	define('TIDY_ATTR_DATASRC', null);

	/**
	 * <b><code>TIDY_ATTR_DATETIME</code></b>
	 */
	define('TIDY_ATTR_DATETIME', null);

	/**
	 * <b><code>TIDY_ATTR_DECLARE</code></b>
	 */
	define('TIDY_ATTR_DECLARE', null);

	/**
	 * <b><code>TIDY_ATTR_DEFER</code></b>
	 */
	define('TIDY_ATTR_DEFER', null);

	/**
	 * <b><code>TIDY_ATTR_DIR</code></b>
	 */
	define('TIDY_ATTR_DIR', null);

	/**
	 * <b><code>TIDY_ATTR_DISABLED</code></b>
	 */
	define('TIDY_ATTR_DISABLED', null);

	/**
	 * <b><code>TIDY_ATTR_ENCODING</code></b>
	 */
	define('TIDY_ATTR_ENCODING', null);

	/**
	 * <b><code>TIDY_ATTR_ENCTYPE</code></b>
	 */
	define('TIDY_ATTR_ENCTYPE', null);

	/**
	 * <b><code>TIDY_ATTR_FACE</code></b>
	 */
	define('TIDY_ATTR_FACE', null);

	/**
	 * <b><code>TIDY_ATTR_FOR</code></b>
	 */
	define('TIDY_ATTR_FOR', null);

	/**
	 * <b><code>TIDY_ATTR_FRAME</code></b>
	 */
	define('TIDY_ATTR_FRAME', null);

	/**
	 * <b><code>TIDY_ATTR_FRAMEBORDER</code></b>
	 */
	define('TIDY_ATTR_FRAMEBORDER', null);

	/**
	 * <b><code>TIDY_ATTR_FRAMESPACING</code></b>
	 */
	define('TIDY_ATTR_FRAMESPACING', null);

	/**
	 * <b><code>TIDY_ATTR_GRIDX</code></b>
	 */
	define('TIDY_ATTR_GRIDX', null);

	/**
	 * <b><code>TIDY_ATTR_GRIDY</code></b>
	 */
	define('TIDY_ATTR_GRIDY', null);

	/**
	 * <b><code>TIDY_ATTR_HEADERS</code></b>
	 */
	define('TIDY_ATTR_HEADERS', null);

	/**
	 * <b><code>TIDY_ATTR_HEIGHT</code></b>
	 */
	define('TIDY_ATTR_HEIGHT', null);

	/**
	 * <b><code>TIDY_ATTR_HREF</code></b>
	 */
	define('TIDY_ATTR_HREF', null);

	/**
	 * <b><code>TIDY_ATTR_HREFLANG</code></b>
	 */
	define('TIDY_ATTR_HREFLANG', null);

	/**
	 * <b><code>TIDY_ATTR_HSPACE</code></b>
	 */
	define('TIDY_ATTR_HSPACE', null);

	/**
	 * <b><code>TIDY_ATTR_HTTP_EQUIV</code></b>
	 */
	define('TIDY_ATTR_HTTP_EQUIV', null);

	/**
	 * <b><code>TIDY_ATTR_ID</code></b>
	 */
	define('TIDY_ATTR_ID', null);

	/**
	 * <b><code>TIDY_ATTR_ISMAP</code></b>
	 */
	define('TIDY_ATTR_ISMAP', null);

	/**
	 * <b><code>TIDY_ATTR_LABEL</code></b>
	 */
	define('TIDY_ATTR_LABEL', null);

	/**
	 * <b><code>TIDY_ATTR_LANG</code></b>
	 */
	define('TIDY_ATTR_LANG', null);

	/**
	 * <b><code>TIDY_ATTR_LANGUAGE</code></b>
	 */
	define('TIDY_ATTR_LANGUAGE', null);

	/**
	 * <b><code>TIDY_ATTR_LAST_MODIFIED</code></b>
	 */
	define('TIDY_ATTR_LAST_MODIFIED', null);

	/**
	 * <b><code>TIDY_ATTR_LAST_VISIT</code></b>
	 */
	define('TIDY_ATTR_LAST_VISIT', null);

	/**
	 * <b><code>TIDY_ATTR_LEFTMARGIN</code></b>
	 */
	define('TIDY_ATTR_LEFTMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_LINK</code></b>
	 */
	define('TIDY_ATTR_LINK', null);

	/**
	 * <b><code>TIDY_ATTR_LONGDESC</code></b>
	 */
	define('TIDY_ATTR_LONGDESC', null);

	/**
	 * <b><code>TIDY_ATTR_LOWSRC</code></b>
	 */
	define('TIDY_ATTR_LOWSRC', null);

	/**
	 * <b><code>TIDY_ATTR_MARGINHEIGHT</code></b>
	 */
	define('TIDY_ATTR_MARGINHEIGHT', null);

	/**
	 * <b><code>TIDY_ATTR_MARGINWIDTH</code></b>
	 */
	define('TIDY_ATTR_MARGINWIDTH', null);

	/**
	 * <b><code>TIDY_ATTR_MAXLENGTH</code></b>
	 */
	define('TIDY_ATTR_MAXLENGTH', null);

	/**
	 * <b><code>TIDY_ATTR_MEDIA</code></b>
	 */
	define('TIDY_ATTR_MEDIA', null);

	/**
	 * <b><code>TIDY_ATTR_METHOD</code></b>
	 */
	define('TIDY_ATTR_METHOD', null);

	/**
	 * <b><code>TIDY_ATTR_MULTIPLE</code></b>
	 */
	define('TIDY_ATTR_MULTIPLE', null);

	/**
	 * <b><code>TIDY_ATTR_NAME</code></b>
	 */
	define('TIDY_ATTR_NAME', null);

	/**
	 * <b><code>TIDY_ATTR_NOHREF</code></b>
	 */
	define('TIDY_ATTR_NOHREF', null);

	/**
	 * <b><code>TIDY_ATTR_NORESIZE</code></b>
	 */
	define('TIDY_ATTR_NORESIZE', null);

	/**
	 * <b><code>TIDY_ATTR_NOSHADE</code></b>
	 */
	define('TIDY_ATTR_NOSHADE', null);

	/**
	 * <b><code>TIDY_ATTR_NOWRAP</code></b>
	 */
	define('TIDY_ATTR_NOWRAP', null);

	/**
	 * <b><code>TIDY_ATTR_OBJECT</code></b>
	 */
	define('TIDY_ATTR_OBJECT', null);

	/**
	 * <b><code>TIDY_ATTR_OnAFTERUPDATE</code></b>
	 */
	define('TIDY_ATTR_OnAFTERUPDATE', null);

	/**
	 * <b><code>TIDY_ATTR_OnBEFOREUNLOAD</code></b>
	 */
	define('TIDY_ATTR_OnBEFOREUNLOAD', null);

	/**
	 * <b><code>TIDY_ATTR_OnBEFOREUPDATE</code></b>
	 */
	define('TIDY_ATTR_OnBEFOREUPDATE', null);

	/**
	 * <b><code>TIDY_ATTR_OnBLUR</code></b>
	 */
	define('TIDY_ATTR_OnBLUR', null);

	/**
	 * <b><code>TIDY_ATTR_OnCHANGE</code></b>
	 */
	define('TIDY_ATTR_OnCHANGE', null);

	/**
	 * <b><code>TIDY_ATTR_OnCLICK</code></b>
	 */
	define('TIDY_ATTR_OnCLICK', null);

	/**
	 * <b><code>TIDY_ATTR_OnDATAAVAILABLE</code></b>
	 */
	define('TIDY_ATTR_OnDATAAVAILABLE', null);

	/**
	 * <b><code>TIDY_ATTR_OnDATASETCHANGED</code></b>
	 */
	define('TIDY_ATTR_OnDATASETCHANGED', null);

	/**
	 * <b><code>TIDY_ATTR_OnDATASETCOMPLETE</code></b>
	 */
	define('TIDY_ATTR_OnDATASETCOMPLETE', null);

	/**
	 * <b><code>TIDY_ATTR_OnDBLCLICK</code></b>
	 */
	define('TIDY_ATTR_OnDBLCLICK', null);

	/**
	 * <b><code>TIDY_ATTR_OnERRORUPDATE</code></b>
	 */
	define('TIDY_ATTR_OnERRORUPDATE', null);

	/**
	 * <b><code>TIDY_ATTR_OnFOCUS</code></b>
	 */
	define('TIDY_ATTR_OnFOCUS', null);

	/**
	 * <b><code>TIDY_ATTR_OnKEYDOWN</code></b>
	 */
	define('TIDY_ATTR_OnKEYDOWN', null);

	/**
	 * <b><code>TIDY_ATTR_OnKEYPRESS</code></b>
	 */
	define('TIDY_ATTR_OnKEYPRESS', null);

	/**
	 * <b><code>TIDY_ATTR_OnKEYUP</code></b>
	 */
	define('TIDY_ATTR_OnKEYUP', null);

	/**
	 * <b><code>TIDY_ATTR_OnLOAD</code></b>
	 */
	define('TIDY_ATTR_OnLOAD', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEDOWN</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEDOWN', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEMOVE</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEMOVE', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEOUT</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEOUT', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEOVER</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEOVER', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEUP</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEUP', null);

	/**
	 * <b><code>TIDY_ATTR_OnRESET</code></b>
	 */
	define('TIDY_ATTR_OnRESET', null);

	/**
	 * <b><code>TIDY_ATTR_OnROWENTER</code></b>
	 */
	define('TIDY_ATTR_OnROWENTER', null);

	/**
	 * <b><code>TIDY_ATTR_OnROWEXIT</code></b>
	 */
	define('TIDY_ATTR_OnROWEXIT', null);

	/**
	 * <b><code>TIDY_ATTR_OnSELECT</code></b>
	 */
	define('TIDY_ATTR_OnSELECT', null);

	/**
	 * <b><code>TIDY_ATTR_OnSUBMIT</code></b>
	 */
	define('TIDY_ATTR_OnSUBMIT', null);

	/**
	 * <b><code>TIDY_ATTR_OnUNLOAD</code></b>
	 */
	define('TIDY_ATTR_OnUNLOAD', null);

	/**
	 * <b><code>TIDY_ATTR_PROFILE</code></b>
	 */
	define('TIDY_ATTR_PROFILE', null);

	/**
	 * <b><code>TIDY_ATTR_PROMPT</code></b>
	 */
	define('TIDY_ATTR_PROMPT', null);

	/**
	 * <b><code>TIDY_ATTR_RBSPAN</code></b>
	 */
	define('TIDY_ATTR_RBSPAN', null);

	/**
	 * <b><code>TIDY_ATTR_READONLY</code></b>
	 */
	define('TIDY_ATTR_READONLY', null);

	/**
	 * <b><code>TIDY_ATTR_REL</code></b>
	 */
	define('TIDY_ATTR_REL', null);

	/**
	 * <b><code>TIDY_ATTR_REV</code></b>
	 */
	define('TIDY_ATTR_REV', null);

	/**
	 * <b><code>TIDY_ATTR_RIGHTMARGIN</code></b>
	 */
	define('TIDY_ATTR_RIGHTMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_ROWS</code></b>
	 */
	define('TIDY_ATTR_ROWS', null);

	/**
	 * <b><code>TIDY_ATTR_ROWSPAN</code></b>
	 */
	define('TIDY_ATTR_ROWSPAN', null);

	/**
	 * <b><code>TIDY_ATTR_RULES</code></b>
	 */
	define('TIDY_ATTR_RULES', null);

	/**
	 * <b><code>TIDY_ATTR_SCHEME</code></b>
	 */
	define('TIDY_ATTR_SCHEME', null);

	/**
	 * <b><code>TIDY_ATTR_SCOPE</code></b>
	 */
	define('TIDY_ATTR_SCOPE', null);

	/**
	 * <b><code>TIDY_ATTR_SCROLLING</code></b>
	 */
	define('TIDY_ATTR_SCROLLING', null);

	/**
	 * <b><code>TIDY_ATTR_SELECTED</code></b>
	 */
	define('TIDY_ATTR_SELECTED', null);

	/**
	 * <b><code>TIDY_ATTR_SHAPE</code></b>
	 */
	define('TIDY_ATTR_SHAPE', null);

	/**
	 * <b><code>TIDY_ATTR_SHOWGRID</code></b>
	 */
	define('TIDY_ATTR_SHOWGRID', null);

	/**
	 * <b><code>TIDY_ATTR_SHOWGRIDX</code></b>
	 */
	define('TIDY_ATTR_SHOWGRIDX', null);

	/**
	 * <b><code>TIDY_ATTR_SHOWGRIDY</code></b>
	 */
	define('TIDY_ATTR_SHOWGRIDY', null);

	/**
	 * <b><code>TIDY_ATTR_SIZE</code></b>
	 */
	define('TIDY_ATTR_SIZE', null);

	/**
	 * <b><code>TIDY_ATTR_SPAN</code></b>
	 */
	define('TIDY_ATTR_SPAN', null);

	/**
	 * <b><code>TIDY_ATTR_SRC</code></b>
	 */
	define('TIDY_ATTR_SRC', null);

	/**
	 * <b><code>TIDY_ATTR_STANDBY</code></b>
	 */
	define('TIDY_ATTR_STANDBY', null);

	/**
	 * <b><code>TIDY_ATTR_START</code></b>
	 */
	define('TIDY_ATTR_START', null);

	/**
	 * <b><code>TIDY_ATTR_STYLE</code></b>
	 */
	define('TIDY_ATTR_STYLE', null);

	/**
	 * <b><code>TIDY_ATTR_SUMMARY</code></b>
	 */
	define('TIDY_ATTR_SUMMARY', null);

	/**
	 * <b><code>TIDY_ATTR_TABINDEX</code></b>
	 */
	define('TIDY_ATTR_TABINDEX', null);

	/**
	 * <b><code>TIDY_ATTR_TARGET</code></b>
	 */
	define('TIDY_ATTR_TARGET', null);

	/**
	 * <b><code>TIDY_ATTR_TEXT</code></b>
	 */
	define('TIDY_ATTR_TEXT', null);

	/**
	 * <b><code>TIDY_ATTR_TITLE</code></b>
	 */
	define('TIDY_ATTR_TITLE', null);

	/**
	 * <b><code>TIDY_ATTR_TOPMARGIN</code></b>
	 */
	define('TIDY_ATTR_TOPMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_TYPE</code></b>
	 */
	define('TIDY_ATTR_TYPE', null);

	/**
	 * <b><code>TIDY_ATTR_UNKNOWN</code></b>
	 */
	define('TIDY_ATTR_UNKNOWN', null);

	/**
	 * <b><code>TIDY_ATTR_USEMAP</code></b>
	 */
	define('TIDY_ATTR_USEMAP', null);

	/**
	 * <b><code>TIDY_ATTR_VALIGN</code></b>
	 */
	define('TIDY_ATTR_VALIGN', null);

	/**
	 * <b><code>TIDY_ATTR_VALUE</code></b>
	 */
	define('TIDY_ATTR_VALUE', null);

	/**
	 * <b><code>TIDY_ATTR_VALUETYPE</code></b>
	 */
	define('TIDY_ATTR_VALUETYPE', null);

	/**
	 * <b><code>TIDY_ATTR_VERSION</code></b>
	 */
	define('TIDY_ATTR_VERSION', null);

	/**
	 * <b><code>TIDY_ATTR_VLINK</code></b>
	 */
	define('TIDY_ATTR_VLINK', null);

	/**
	 * <b><code>TIDY_ATTR_VSPACE</code></b>
	 */
	define('TIDY_ATTR_VSPACE', null);

	/**
	 * <b><code>TIDY_ATTR_WIDTH</code></b>
	 */
	define('TIDY_ATTR_WIDTH', null);

	/**
	 * <b><code>TIDY_ATTR_WRAP</code></b>
	 */
	define('TIDY_ATTR_WRAP', null);

	/**
	 * <b><code>TIDY_ATTR_XML_LANG</code></b>
	 */
	define('TIDY_ATTR_XML_LANG', null);

	/**
	 * <b><code>TIDY_ATTR_XML_SPACE</code></b>
	 */
	define('TIDY_ATTR_XML_SPACE', null);

	/**
	 * <b><code>TIDY_ATTR_XMLNS</code></b>
	 */
	define('TIDY_ATTR_XMLNS', null);

	/**
	 * ASP code
	 */
	define('TIDY_NODETYPE_ASP', 10);

	/**
	 * CDATA
	 */
	define('TIDY_NODETYPE_CDATA', 8);

	/**
	 * HTML comment
	 */
	define('TIDY_NODETYPE_COMMENT', 2);

	/**
	 * doctype
	 */
	define('TIDY_NODETYPE_DOCTYPE', 1);

	/**
	 * end tag
	 */
	define('TIDY_NODETYPE_END', 6);

	/**
	 * JSTE code
	 */
	define('TIDY_NODETYPE_JSTE', 11);

	/**
	 * PHP code
	 */
	define('TIDY_NODETYPE_PHP', 12);

	/**
	 * Processing Instruction
	 */
	define('TIDY_NODETYPE_PROCINS', 3);

	/**
	 * root node
	 */
	define('TIDY_NODETYPE_ROOT', 0);

	/**
	 * XML section
	 */
	define('TIDY_NODETYPE_SECTION', 9);

	/**
	 * start tag
	 */
	define('TIDY_NODETYPE_START', 5);

	/**
	 * empty tag
	 */
	define('TIDY_NODETYPE_STARTEND', 7);

	/**
	 * Text
	 */
	define('TIDY_NODETYPE_TEXT', 4);

	/**
	 * XML declaration
	 */
	define('TIDY_NODETYPE_XMLDECL', 13);

	/**
	 * <b><code>TIDY_TAG_A</code></b>
	 */
	define('TIDY_TAG_A', 1);

	/**
	 * <b><code>TIDY_TAG_ABBR</code></b>
	 */
	define('TIDY_TAG_ABBR', 2);

	/**
	 * <b><code>TIDY_TAG_ACRONYM</code></b>
	 */
	define('TIDY_TAG_ACRONYM', 3);

	/**
	 * <b><code>TIDY_TAG_ALIGN</code></b>
	 */
	define('TIDY_TAG_ALIGN', 5);

	/**
	 * <b><code>TIDY_TAG_APPLET</code></b>
	 */
	define('TIDY_TAG_APPLET', 6);

	/**
	 * <b><code>TIDY_TAG_AREA</code></b>
	 */
	define('TIDY_TAG_AREA', 7);

	/**
	 * <b><code>TIDY_TAG_B</code></b>
	 */
	define('TIDY_TAG_B', 8);

	/**
	 * <b><code>TIDY_TAG_BASE</code></b>
	 */
	define('TIDY_TAG_BASE', 9);

	/**
	 * <b><code>TIDY_TAG_BASEFONT</code></b>
	 */
	define('TIDY_TAG_BASEFONT', 10);

	/**
	 * <b><code>TIDY_TAG_BDO</code></b>
	 */
	define('TIDY_TAG_BDO', 11);

	/**
	 * <b><code>TIDY_TAG_BGSOUND</code></b>
	 */
	define('TIDY_TAG_BGSOUND', 12);

	/**
	 * <b><code>TIDY_TAG_BIG</code></b>
	 */
	define('TIDY_TAG_BIG', 13);

	/**
	 * <b><code>TIDY_TAG_BLINK</code></b>
	 */
	define('TIDY_TAG_BLINK', 14);

	/**
	 * <b><code>TIDY_TAG_BLOCKQUOTE</code></b>
	 */
	define('TIDY_TAG_BLOCKQUOTE', 15);

	/**
	 * <b><code>TIDY_TAG_BODY</code></b>
	 */
	define('TIDY_TAG_BODY', 16);

	/**
	 * <b><code>TIDY_TAG_BR</code></b>
	 */
	define('TIDY_TAG_BR', 17);

	/**
	 * <b><code>TIDY_TAG_BUTTON</code></b>
	 */
	define('TIDY_TAG_BUTTON', 18);

	/**
	 * <b><code>TIDY_TAG_CAPTION</code></b>
	 */
	define('TIDY_TAG_CAPTION', 19);

	/**
	 * <b><code>TIDY_TAG_CENTER</code></b>
	 */
	define('TIDY_TAG_CENTER', 20);

	/**
	 * <b><code>TIDY_TAG_CITE</code></b>
	 */
	define('TIDY_TAG_CITE', 21);

	/**
	 * <b><code>TIDY_TAG_CODE</code></b>
	 */
	define('TIDY_TAG_CODE', 22);

	/**
	 * <b><code>TIDY_TAG_COL</code></b>
	 */
	define('TIDY_TAG_COL', 23);

	/**
	 * <b><code>TIDY_TAG_COLGROUP</code></b>
	 */
	define('TIDY_TAG_COLGROUP', 24);

	/**
	 * <b><code>TIDY_TAG_COMMENT</code></b>
	 */
	define('TIDY_TAG_COMMENT', 25);

	/**
	 * <b><code>TIDY_TAG_DD</code></b>
	 */
	define('TIDY_TAG_DD', 26);

	/**
	 * <b><code>TIDY_TAG_DEL</code></b>
	 */
	define('TIDY_TAG_DEL', 27);

	/**
	 * <b><code>TIDY_TAG_DFN</code></b>
	 */
	define('TIDY_TAG_DFN', 28);

	/**
	 * <b><code>TIDY_TAG_DIR</code></b>
	 */
	define('TIDY_TAG_DIR', 29);

	/**
	 * <b><code>TIDY_TAG_DIV</code></b>
	 */
	define('TIDY_TAG_DIV', 30);

	/**
	 * <b><code>TIDY_TAG_DL</code></b>
	 */
	define('TIDY_TAG_DL', 31);

	/**
	 * <b><code>TIDY_TAG_DT</code></b>
	 */
	define('TIDY_TAG_DT', 32);

	/**
	 * <b><code>TIDY_TAG_EM</code></b>
	 */
	define('TIDY_TAG_EM', 33);

	/**
	 * <b><code>TIDY_TAG_EMBED</code></b>
	 */
	define('TIDY_TAG_EMBED', 34);

	/**
	 * <b><code>TIDY_TAG_FIELDSET</code></b>
	 */
	define('TIDY_TAG_FIELDSET', 35);

	/**
	 * <b><code>TIDY_TAG_FONT</code></b>
	 */
	define('TIDY_TAG_FONT', 36);

	/**
	 * <b><code>TIDY_TAG_FORM</code></b>
	 */
	define('TIDY_TAG_FORM', 37);

	/**
	 * <b><code>TIDY_TAG_FRAME</code></b>
	 */
	define('TIDY_TAG_FRAME', 38);

	/**
	 * <b><code>TIDY_TAG_FRAMESET</code></b>
	 */
	define('TIDY_TAG_FRAMESET', 39);

	/**
	 * <b><code>TIDY_TAG_H1</code></b>
	 */
	define('TIDY_TAG_H1', 40);

	/**
	 * <b><code>TIDY_TAG_H2</code></b>
	 */
	define('TIDY_TAG_H2', 41);

	/**
	 * <b><code>TIDY_TAG_H3</code></b>
	 */
	define('TIDY_TAG_H3', 42);

	/**
	 * <b><code>TIDY_TAG_H4</code></b>
	 */
	define('TIDY_TAG_H4', 43);

	/**
	 * <b><code>TIDY_TAG_H5</code></b>
	 */
	define('TIDY_TAG_H5', 44);

	/**
	 * <b><code>TIDY_TAG_H6</code></b>
	 */
	define('TIDY_TAG_H6', 45);

	/**
	 * <b><code>TIDY_TAG_HEAD</code></b>
	 */
	define('TIDY_TAG_HEAD', 46);

	/**
	 * <b><code>TIDY_TAG_HR</code></b>
	 */
	define('TIDY_TAG_HR', 47);

	/**
	 * <b><code>TIDY_TAG_HTML</code></b>
	 */
	define('TIDY_TAG_HTML', 48);

	/**
	 * <b><code>TIDY_TAG_I</code></b>
	 */
	define('TIDY_TAG_I', 49);

	/**
	 * <b><code>TIDY_TAG_IFRAME</code></b>
	 */
	define('TIDY_TAG_IFRAME', 50);

	/**
	 * <b><code>TIDY_TAG_ILAYER</code></b>
	 */
	define('TIDY_TAG_ILAYER', 51);

	/**
	 * <b><code>TIDY_TAG_IMG</code></b>
	 */
	define('TIDY_TAG_IMG', 52);

	/**
	 * <b><code>TIDY_TAG_INPUT</code></b>
	 */
	define('TIDY_TAG_INPUT', 53);

	/**
	 * <b><code>TIDY_TAG_INS</code></b>
	 */
	define('TIDY_TAG_INS', 54);

	/**
	 * <b><code>TIDY_TAG_ISINDEX</code></b>
	 */
	define('TIDY_TAG_ISINDEX', 55);

	/**
	 * <b><code>TIDY_TAG_KBD</code></b>
	 */
	define('TIDY_TAG_KBD', 56);

	/**
	 * <b><code>TIDY_TAG_KEYGEN</code></b>
	 */
	define('TIDY_TAG_KEYGEN', 57);

	/**
	 * <b><code>TIDY_TAG_LABEL</code></b>
	 */
	define('TIDY_TAG_LABEL', 58);

	/**
	 * <b><code>TIDY_TAG_LAYER</code></b>
	 */
	define('TIDY_TAG_LAYER', 59);

	/**
	 * <b><code>TIDY_TAG_LEGEND</code></b>
	 */
	define('TIDY_TAG_LEGEND', 60);

	/**
	 * <b><code>TIDY_TAG_LI</code></b>
	 */
	define('TIDY_TAG_LI', 61);

	/**
	 * <b><code>TIDY_TAG_LINK</code></b>
	 */
	define('TIDY_TAG_LINK', 62);

	/**
	 * <b><code>TIDY_TAG_LISTING</code></b>
	 */
	define('TIDY_TAG_LISTING', 63);

	/**
	 * <b><code>TIDY_TAG_MAP</code></b>
	 */
	define('TIDY_TAG_MAP', 64);

	/**
	 * <b><code>TIDY_TAG_MARQUEE</code></b>
	 */
	define('TIDY_TAG_MARQUEE', 66);

	/**
	 * <b><code>TIDY_TAG_MENU</code></b>
	 */
	define('TIDY_TAG_MENU', 67);

	/**
	 * <b><code>TIDY_TAG_META</code></b>
	 */
	define('TIDY_TAG_META', 68);

	/**
	 * <b><code>TIDY_TAG_MULTICOL</code></b>
	 */
	define('TIDY_TAG_MULTICOL', 69);

	/**
	 * <b><code>TIDY_TAG_NOBR</code></b>
	 */
	define('TIDY_TAG_NOBR', 70);

	/**
	 * <b><code>TIDY_TAG_NOEMBED</code></b>
	 */
	define('TIDY_TAG_NOEMBED', 71);

	/**
	 * <b><code>TIDY_TAG_NOFRAMES</code></b>
	 */
	define('TIDY_TAG_NOFRAMES', 72);

	/**
	 * <b><code>TIDY_TAG_NOLAYER</code></b>
	 */
	define('TIDY_TAG_NOLAYER', 73);

	/**
	 * <b><code>TIDY_TAG_NOSAVE</code></b>
	 */
	define('TIDY_TAG_NOSAVE', 74);

	/**
	 * <b><code>TIDY_TAG_NOSCRIPT</code></b>
	 */
	define('TIDY_TAG_NOSCRIPT', 75);

	/**
	 * <b><code>TIDY_TAG_OBJECT</code></b>
	 */
	define('TIDY_TAG_OBJECT', 76);

	/**
	 * <b><code>TIDY_TAG_OL</code></b>
	 */
	define('TIDY_TAG_OL', 77);

	/**
	 * <b><code>TIDY_TAG_OPTGROUP</code></b>
	 */
	define('TIDY_TAG_OPTGROUP', 78);

	/**
	 * <b><code>TIDY_TAG_OPTION</code></b>
	 */
	define('TIDY_TAG_OPTION', 79);

	/**
	 * <b><code>TIDY_TAG_P</code></b>
	 */
	define('TIDY_TAG_P', 80);

	/**
	 * <b><code>TIDY_TAG_PARAM</code></b>
	 */
	define('TIDY_TAG_PARAM', 81);

	/**
	 * <b><code>TIDY_TAG_PLAINTEXT</code></b>
	 */
	define('TIDY_TAG_PLAINTEXT', 83);

	/**
	 * <b><code>TIDY_TAG_PRE</code></b>
	 */
	define('TIDY_TAG_PRE', 84);

	/**
	 * <b><code>TIDY_TAG_Q</code></b>
	 */
	define('TIDY_TAG_Q', 85);

	/**
	 * <b><code>TIDY_TAG_RP</code></b>
	 */
	define('TIDY_TAG_RP', 88);

	/**
	 * <b><code>TIDY_TAG_RT</code></b>
	 */
	define('TIDY_TAG_RT', 89);

	/**
	 * <b><code>TIDY_TAG_RTC</code></b>
	 */
	define('TIDY_TAG_RTC', 90);

	/**
	 * <b><code>TIDY_TAG_RUBY</code></b>
	 */
	define('TIDY_TAG_RUBY', 91);

	/**
	 * <b><code>TIDY_TAG_S</code></b>
	 */
	define('TIDY_TAG_S', 92);

	/**
	 * <b><code>TIDY_TAG_SAMP</code></b>
	 */
	define('TIDY_TAG_SAMP', 93);

	/**
	 * <b><code>TIDY_TAG_SCRIPT</code></b>
	 */
	define('TIDY_TAG_SCRIPT', 94);

	/**
	 * <b><code>TIDY_TAG_SELECT</code></b>
	 */
	define('TIDY_TAG_SELECT', 95);

	/**
	 * <b><code>TIDY_TAG_SERVER</code></b>
	 */
	define('TIDY_TAG_SERVER', 96);

	/**
	 * <b><code>TIDY_TAG_SERVLET</code></b>
	 */
	define('TIDY_TAG_SERVLET', 97);

	/**
	 * <b><code>TIDY_TAG_SMALL</code></b>
	 */
	define('TIDY_TAG_SMALL', 98);

	/**
	 * <b><code>TIDY_TAG_SPACER</code></b>
	 */
	define('TIDY_TAG_SPACER', 99);

	/**
	 * <b><code>TIDY_TAG_SPAN</code></b>
	 */
	define('TIDY_TAG_SPAN', 100);

	/**
	 * <b><code>TIDY_TAG_STRIKE</code></b>
	 */
	define('TIDY_TAG_STRIKE', 101);

	/**
	 * <b><code>TIDY_TAG_STRONG</code></b>
	 */
	define('TIDY_TAG_STRONG', 102);

	/**
	 * <b><code>TIDY_TAG_STYLE</code></b>
	 */
	define('TIDY_TAG_STYLE', 103);

	/**
	 * <b><code>TIDY_TAG_SUB</code></b>
	 */
	define('TIDY_TAG_SUB', 104);

	/**
	 * <b><code>TIDY_TAG_TABLE</code></b>
	 */
	define('TIDY_TAG_TABLE', 107);

	/**
	 * <b><code>TIDY_TAG_TBODY</code></b>
	 */
	define('TIDY_TAG_TBODY', 108);

	/**
	 * <b><code>TIDY_TAG_TD</code></b>
	 */
	define('TIDY_TAG_TD', 109);

	/**
	 * <b><code>TIDY_TAG_TEXTAREA</code></b>
	 */
	define('TIDY_TAG_TEXTAREA', 110);

	/**
	 * <b><code>TIDY_TAG_TFOOT</code></b>
	 */
	define('TIDY_TAG_TFOOT', 111);

	/**
	 * <b><code>TIDY_TAG_TH</code></b>
	 */
	define('TIDY_TAG_TH', 112);

	/**
	 * <b><code>TIDY_TAG_THEAD</code></b>
	 */
	define('TIDY_TAG_THEAD', 113);

	/**
	 * <b><code>TIDY_TAG_TITLE</code></b>
	 */
	define('TIDY_TAG_TITLE', 114);

	/**
	 * <b><code>TIDY_TAG_TR</code></b>
	 */
	define('TIDY_TAG_TR', 115);

	/**
	 * <b><code>TIDY_TAG_TT</code></b>
	 */
	define('TIDY_TAG_TT', 116);

	/**
	 * <b><code>TIDY_TAG_U</code></b>
	 */
	define('TIDY_TAG_U', 117);

	/**
	 * <b><code>TIDY_TAG_UL</code></b>
	 */
	define('TIDY_TAG_UL', 118);

	/**
	 * <b><code>TIDY_TAG_UNKNOWN</code></b>
	 */
	define('TIDY_TAG_UNKNOWN', 0);

	/**
	 * <b><code>TIDY_TAG_VAR</code></b>
	 */
	define('TIDY_TAG_VAR', 119);

	/**
	 * <b><code>TIDY_TAG_WBR</code></b>
	 */
	define('TIDY_TAG_WBR', 120);

	/**
	 * <b><code>TIDY_TAG_XMP</code></b>
	 */
	define('TIDY_TAG_XMP', 121);

}
