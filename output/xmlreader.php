<?php



namespace {

	/**
	 * <p>The XMLReader extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.</p>
	 * @link http://php.net/manual/en/class.xmlreader.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class XMLReader {

		/**
		 * @var int <p>No node type</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const NONE = 0;

		/**
		 * @var int <p>Start element</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const ELEMENT = 1;

		/**
		 * @var int <p>Attribute node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const ATTRIBUTE = 2;

		/**
		 * @var int <p>Text node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const TEXT = 3;

		/**
		 * @var int <p>CDATA node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const CDATA = 4;

		/**
		 * @var int <p>Entity Reference node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const ENTITY_REF = 5;

		/**
		 * @var int <p>Entity Declaration node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const ENTITY = 6;

		/**
		 * @var int <p>Processing Instruction node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const PI = 7;

		/**
		 * @var int <p>Comment node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const COMMENT = 8;

		/**
		 * @var int <p>Document node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const DOC = 9;

		/**
		 * @var int <p>Document Type node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const DOC_TYPE = 10;

		/**
		 * @var int <p>Document Fragment node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const DOC_FRAGMENT = 11;

		/**
		 * @var int <p>Notation node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const NOTATION = 12;

		/**
		 * @var int <p>Whitespace node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const WHITESPACE = 13;

		/**
		 * @var int <p>Significant Whitespace node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const SIGNIFICANT_WHITESPACE = 14;

		/**
		 * @var int <p>End Element</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const END_ELEMENT = 15;

		/**
		 * @var int <p>End Entity</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const END_ENTITY = 16;

		/**
		 * @var int <p>XML Declaration node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const XML_DECLARATION = 17;

		/**
		 * @var int <p>Load DTD but do not validate</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const LOADDTD = 1;

		/**
		 * @var int <p>Load DTD and default attributes but do not validate</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const DEFAULTATTRS = 2;

		/**
		 * @var int <p>Load DTD and validate while parsing</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const VALIDATE = 3;

		/**
		 * @var int <p>Substitute entities and expand references</p>
		 * @link http://php.net/manual/en/class.xmlreader.php
		 */
		const SUBST_ENTITIES = 4;

		/**
		 * @var int <p>The number of attributes on the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.attributecount
		 */
		public $attributeCount;

		/**
		 * @var string <p>The base URI of the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.baseuri
		 */
		public $baseURI;

		/**
		 * @var int <p>Depth of the node in the tree, starting at 0</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.depth
		 */
		public $depth;

		/**
		 * @var bool <p>Indicates if node has attributes</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.hasattributes
		 */
		public $hasAttributes;

		/**
		 * @var bool <p>Indicates if node has a text value</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.hasvalue
		 */
		public $hasValue;

		/**
		 * @var bool <p>Indicates if attribute is defaulted from DTD</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.isdefault
		 */
		public $isDefault;

		/**
		 * @var bool <p>Indicates if node is an empty element tag</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.isemptyelement
		 */
		public $isEmptyElement;

		/**
		 * @var string <p>The local name of the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.localname
		 */
		public $localName;

		/**
		 * @var string <p>The qualified name of the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.name
		 */
		public $name;

		/**
		 * @var string <p>The URI of the namespace associated with the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.namespaceuri
		 */
		public $namespaceURI;

		/**
		 * @var int <p>The node type for the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.nodetype
		 */
		public $nodeType;

		/**
		 * @var string <p>The prefix of the namespace associated with the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.prefix
		 */
		public $prefix;

		/**
		 * @var string <p>The text value of the node</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.value
		 */
		public $value;

		/**
		 * @var string <p>The xml:lang scope which the node resides</p>
		 * @link http://php.net/manual/en/class.xmlreader.php#xmlreader.props.xmllang
		 */
		public $xmlLang;

		/**
		 * Set the data containing the XML to parse
		 * <p>Set the data containing the XML to parse.</p>
		 * @param string $source <p>String containing the XML to be parsed.</p>
		 * @param string|null $encoding <p>The document encoding or <b><code>NULL</code></b>.</p>
		 * @param int $flags <p>A bitmask of the LIBXML_&#42; constants.</p>
		 * @return bool|XMLReader <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If called statically, returns an XMLReader or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.xml.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function XML(string $source, $encoding = NULL, int $flags = 0) {}

		/**
		 * Close the XMLReader input
		 * <p>Closes the input the XMLReader object is currently parsing.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.close.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Returns a copy of the current node as a DOM object
		 * <p>This method copies the current node and returns the appropriate DOM object.</p>
		 * @param \DOMNode|null $baseNode <p>A DOMNode defining the target DOMDocument for the created DOM object.</p>
		 * @return DOMNode|false <p>The resulting DOMNode or <b><code>FALSE</code></b> on error.</p>
		 * @link http://php.net/manual/en/xmlreader.expand.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function expand($baseNode = NULL) {}

		/**
		 * Get the value of a named attribute
		 * <p>Returns the value of a named attribute or <b><code>NULL</code></b> if the attribute does not exist or not positioned on an element node.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @return string|null <p>The value of the attribute, or <b><code>NULL</code></b> if no attribute with the given <code>name</code> is found or not positioned on an element node.</p>
		 * @link http://php.net/manual/en/xmlreader.getattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getAttribute(string $name) {}

		/**
		 * Get the value of an attribute by index
		 * <p>Returns the value of an attribute based on its position or an empty string if attribute does not exist or not positioned on an element node.</p>
		 * @param int $index <p>The position of the attribute.</p>
		 * @return string|null <p>The value of the attribute, or an empty string (before PHP 5.6) or <b><code>NULL</code></b> (from PHP 5.6 onwards) if no attribute exists at <code>index</code> or is not positioned on the element.</p>
		 * @link http://php.net/manual/en/xmlreader.getattributeno.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getAttributeNo(int $index) {}

		/**
		 * Get the value of an attribute by localname and URI
		 * <p>Returns the value of an attribute by name and namespace URI or an empty string if attribute does not exist or not positioned on an element node.</p>
		 * @param string $name <p>The local name.</p>
		 * @param string $namespace <p>The namespace URI.</p>
		 * @return string|null <p>The value of the attribute, or an empty string (before PHP 5.6) or <b><code>NULL</code></b> (from PHP 5.6 onwards) if no attribute with the given <code>name</code> and <code>namespace</code> is found or not positioned of element.</p>
		 * @link http://php.net/manual/en/xmlreader.getattributens.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getAttributeNs(string $name, string $namespace) {}

		/**
		 * Indicates if specified property has been set
		 * <p>Indicates if specified property has been set.</p>
		 * @param int $property <p>One of the parser option constants.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.getparserproperty.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getParserProperty(int $property): bool {}

		/**
		 * Indicates if the parsed document is valid
		 * <p>Returns a boolean indicating if the document being parsed is currently valid.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.isvalid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function isValid(): bool {}

		/**
		 * Lookup namespace for a prefix
		 * <p>Lookup in scope namespace for a given prefix.</p>
		 * @param string $prefix <p>String containing the prefix.</p>
		 * @return string|null <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.lookupnamespace.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function lookupNamespace(string $prefix) {}

		/**
		 * Move cursor to a named attribute
		 * <p>Positions cursor on the named attribute.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.movetoattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToAttribute(string $name): bool {}

		/**
		 * Move cursor to an attribute by index
		 * <p>Positions cursor on attribute based on its position.</p>
		 * @param int $index <p>The position of the attribute.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.movetoattributeno.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToAttributeNo(int $index): bool {}

		/**
		 * Move cursor to a named attribute
		 * <p>Positions cursor on the named attribute in specified namespace.</p>
		 * @param string $name <p>The local name.</p>
		 * @param string $namespace <p>The namespace URI.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.movetoattributens.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToAttributeNs(string $name, string $namespace): bool {}

		/**
		 * Position cursor on the parent Element of current Attribute
		 * <p>Moves cursor to the parent Element of current Attribute.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if successful and <b><code>FALSE</code></b> if it fails or not positioned on Attribute when this method is called.</p>
		 * @link http://php.net/manual/en/xmlreader.movetoelement.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToElement(): bool {}

		/**
		 * Position cursor on the first Attribute
		 * <p>Moves cursor to the first Attribute.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.movetofirstattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToFirstAttribute(): bool {}

		/**
		 * Position cursor on the next Attribute
		 * <p>Moves cursor to the next Attribute if positioned on an Attribute or moves to first attribute if positioned on an Element.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.movetonextattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToNextAttribute(): bool {}

		/**
		 * Move cursor to next node skipping all subtrees
		 * <p>Positions cursor on the next node skipping all subtrees.</p>
		 * @param string|null $name <p>The name of the next node to move to.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next($name = NULL): bool {}

		/**
		 * Set the URI containing the XML to parse
		 * <p>Set the URI containing the XML document to be parsed.</p>
		 * @param string $uri <p>URI pointing to the document.</p>
		 * @param string|null $encoding <p>The document encoding or <b><code>NULL</code></b>.</p>
		 * @param int $flags <p>A bitmask of the LIBXML_&#42; constants.</p>
		 * @return bool|XMLReader <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If called statically, returns an XMLReader or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.open.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public static function open(string $uri, $encoding = NULL, int $flags = 0) {}

		/**
		 * Move to next node in document
		 * <p>Moves cursor to the next node in the document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.read.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function read(): bool {}

		/**
		 * Retrieve XML from current node
		 * <p>Reads the contents of the current node, including child nodes and markup.</p>
		 * @return string <p>Returns the contents of the current node as a string. Empty string on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.readinnerxml.php
		 * @see XMLReader::readString(), XMLReader::readOuterXml(), XMLReader::expand()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function readInnerXml(): string {}

		/**
		 * Retrieve XML from current node, including itself
		 * <p>Reads the contents of the current node, including the node itself.</p>
		 * @return string <p>Returns the contents of current node, including itself, as a string. Empty string on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.readouterxml.php
		 * @see XMLReader::readString(), XMLReader::readInnerXml(), XMLReader::expand()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function readOuterXml(): string {}

		/**
		 * Reads the contents of the current node as a string
		 * <p>Reads the contents of the current node as a string.</p>
		 * @return string <p>Returns the content of the current node as a string. Empty string on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.readstring.php
		 * @see XMLReader::readOuterXml(), XMLReader::readInnerXml(), XMLReader::expand()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function readString(): string {}

		/**
		 * Set parser options
		 * <p>Set parser options. The options must be set after <code>XMLReader::open()</code> or <code>XMLReader::xml()</code> are called and before the first <code>XMLReader::read()</code> call.</p>
		 * @param int $property <p>One of the parser option constants.</p>
		 * @param bool $value <p>If set to <b><code>TRUE</code></b> the option will be enabled otherwise will be disabled.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.setparserproperty.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setParserProperty(int $property, bool $value): bool {}

		/**
		 * Set the filename or URI for a RelaxNG Schema
		 * <p>Set the filename or URI for the RelaxNG Schema to use for validation.</p>
		 * @param string|null $filename <p>filename or URI pointing to a RelaxNG Schema.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.setrelaxngschema.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setRelaxNGSchema($filename): bool {}

		/**
		 * Set the data containing a RelaxNG Schema
		 * <p>Set the data containing a RelaxNG Schema to use for validation.</p>
		 * @param string|null $source <p>String containing the RelaxNG Schema.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.setrelaxngschemasource.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setRelaxNGSchemaSource($source): bool {}

		/**
		 * Validate document against XSD
		 * <p>Use W3C XSD schema to validate the document as it is processed. Activation is only possible before the first Read().</p>
		 * @param string|null $filename <p>The filename of the XSD schema.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/xmlreader.setschema.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setSchema($filename): bool {}
	}

}
