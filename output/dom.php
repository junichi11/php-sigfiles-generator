<?php



namespace {

	/**
	 * <p><b>DOMAttr</b> represents an attribute in the DOMElement object.</p>
	 * @link http://php.net/manual/en/class.domattr.php
	 * @since PHP 5, PHP 7
	 */
	class DOMAttr extends \DOMNode {

		/**
		 * @var string <p>The name of the attribute</p>
		 * @link http://php.net/manual/en/class.domattr.php#domattr.props.name
		 */
		public $name;

		/**
		 * @var DOMElement <p>The element which contains the attribute</p>
		 * @link http://php.net/manual/en/class.domattr.php#domattr.props.ownerelement
		 */
		public $ownerElement;

		/**
		 * @var bool <p>Not implemented yet, always is <b><code>NULL</code></b></p>
		 * @link http://php.net/manual/en/class.domattr.php#domattr.props.schematypeinfo
		 */
		public $schemaTypeInfo;

		/**
		 * @var bool <p>Not implemented yet, always is <b><code>NULL</code></b></p>
		 * @link http://php.net/manual/en/class.domattr.php#domattr.props.specified
		 */
		public $specified;

		/**
		 * @var string <p>The value of the attribute</p>
		 * @link http://php.net/manual/en/class.domattr.php#domattr.props.value
		 */
		public $value;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMAttr object
		 * <p>Creates a new DOMAttr object. This object is read only. It may be appended to a document, but additional nodes may not be appended to this node until the node is associated with a document. To create a writable node, use DOMDocument::createAttribute.</p>
		 * @param string $name <p>The tag name of the attribute.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @return self
		 * @link http://php.net/manual/en/domattr.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $name, string $value = NULL) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Checks if attribute is a defined ID
		 * <p>This function checks if the attribute is a defined ID.</p><p>According to the DOM standard this requires a DTD which defines the attribute ID to be of type ID. You need to validate your document with DOMDocument::validate or <i>DOMDocument::validateOnParse</i> before using this function.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domattr.isid.php
		 * @since PHP 5, PHP 7
		 */
		public function isId(): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * <p>The <b>DOMCdataSection</b> inherits from DOMText for textural representation of CData constructs.</p>
	 * @link http://php.net/manual/en/class.domcdatasection.php
	 * @since PHP 5, PHP 7
	 */
	class DOMCdataSection extends \DOMText {

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Constructs a new DOMCdataSection object
		 * <p>Constructs a new CDATA node. This works like the DOMText class.</p>
		 * @param string $value <p>The value of the CDATA node. If not supplied, an empty CDATA node is created.</p>
		 * @return self
		 * @link http://php.net/manual/en/domcdatasection.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $value) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Append the string to the end of the character data of the node
		 * <p>Append the string <code>data</code> to the end of the character data of the node.</p>
		 * @param string $data <p>The string to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.appenddata.php
		 * @since PHP 5, PHP 7
		 */
		public function appendData(string $data): void {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Remove a range of characters from the node
		 * <p>Deletes <code>count</code> characters starting from position <code>offset</code>.</p>
		 * @param int $offset <p>The offset from which to start removing.</p>
		 * @param int $count <p>The number of characters to delete. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are deleted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.deletedata.php
		 * @since PHP 5, PHP 7
		 */
		public function deleteData(int $offset, int $count): void {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Insert a string at the specified 16-bit unit offset
		 * <p>Inserts string <code>data</code> at position <code>offset</code>.</p>
		 * @param int $offset <p>The character offset at which to insert.</p>
		 * @param string $data <p>The string to insert.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.insertdata.php
		 * @since PHP 5, PHP 7
		 */
		public function insertData(int $offset, string $data): void {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Returns whether this text node contains whitespace in element content
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domtext.iselementcontentwhitespace.php
		 * @since No version information available, might only be in Git
		 */
		public function isElementContentWhitespace(): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Indicates whether this text node contains whitespace
		 * <p>Indicates whether this text node contains only whitespace or it is empty. The text node is determined to contain whitespace in element content during the load of the document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if node contains zero or more whitespace characters and nothing else. Returns <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domtext.iswhitespaceinelementcontent.php
		 * @since PHP 5, PHP 7
		 */
		public function isWhitespaceInElementContent(): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

		/**
		 * Replace a substring within the DOMCharacterData node
		 * <p>Replace <code>count</code> characters starting from position <code>offset</code> with <code>data</code>.</p>
		 * @param int $offset <p>The offset from which to start replacing.</p>
		 * @param int $count <p>The number of characters to replace. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are replaced.</p>
		 * @param string $data <p>The string with which the range must be replaced.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.replacedata.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceData(int $offset, int $count, string $data): void {}

		/**
		 * Breaks this node into two nodes at the specified offset
		 * <p>Breaks this node into two nodes at the specified <code>offset</code>, keeping both in the tree as siblings.</p><p>After being split, this node will contain all the content up to the <code>offset</code>. If the original node had a parent node, the new node is inserted as the next sibling of the original node. When the <code>offset</code> is equal to the length of this node, the new node has no data.</p>
		 * @param int $offset <p>The offset at which to split, starting from 0.</p>
		 * @return DOMText <p>The new node of the same type, which contains all the content at and after the <code>offset</code>.</p>
		 * @link http://php.net/manual/en/domtext.splittext.php
		 * @since PHP 5, PHP 7
		 */
		public function splitText(int $offset): \DOMText {}

		/**
		 * Extracts a range of data from the node
		 * <p>Returns the specified substring.</p>
		 * @param int $offset <p>Start offset of substring to extract.</p>
		 * @param int $count <p>The number of characters to extract.</p>
		 * @return string <p>The specified substring. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all 16-bit units to the end of the data are returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.substringdata.php
		 * @since PHP 5, PHP 7
		 */
		public function substringData(int $offset, int $count): string {}
	}

	/**
	 * <p>Represents nodes with character data. No nodes directly correspond to this class, but other nodes do inherit from it.</p>
	 * @link http://php.net/manual/en/class.domcharacterdata.php
	 * @since PHP 5, PHP 7
	 */
	class DOMCharacterData extends \DOMNode {

		/**
		 * @var string <p>The contents of the node.</p>
		 * @link http://php.net/manual/en/class.domcharacterdata.php#domcharacterdata.props.data
		 */
		public $data;

		/**
		 * @var int <p>The length of the contents.</p>
		 * @link http://php.net/manual/en/class.domcharacterdata.php#domcharacterdata.props.length
		 */
		public $length;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Append the string to the end of the character data of the node
		 * <p>Append the string <code>data</code> to the end of the character data of the node.</p>
		 * @param string $data <p>The string to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.appenddata.php
		 * @since PHP 5, PHP 7
		 */
		public function appendData(string $data): void {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Remove a range of characters from the node
		 * <p>Deletes <code>count</code> characters starting from position <code>offset</code>.</p>
		 * @param int $offset <p>The offset from which to start removing.</p>
		 * @param int $count <p>The number of characters to delete. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are deleted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.deletedata.php
		 * @since PHP 5, PHP 7
		 */
		public function deleteData(int $offset, int $count): void {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Insert a string at the specified 16-bit unit offset
		 * <p>Inserts string <code>data</code> at position <code>offset</code>.</p>
		 * @param int $offset <p>The character offset at which to insert.</p>
		 * @param string $data <p>The string to insert.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.insertdata.php
		 * @since PHP 5, PHP 7
		 */
		public function insertData(int $offset, string $data): void {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

		/**
		 * Replace a substring within the DOMCharacterData node
		 * <p>Replace <code>count</code> characters starting from position <code>offset</code> with <code>data</code>.</p>
		 * @param int $offset <p>The offset from which to start replacing.</p>
		 * @param int $count <p>The number of characters to replace. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are replaced.</p>
		 * @param string $data <p>The string with which the range must be replaced.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.replacedata.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceData(int $offset, int $count, string $data): void {}

		/**
		 * Extracts a range of data from the node
		 * <p>Returns the specified substring.</p>
		 * @param int $offset <p>Start offset of substring to extract.</p>
		 * @param int $count <p>The number of characters to extract.</p>
		 * @return string <p>The specified substring. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all 16-bit units to the end of the data are returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.substringdata.php
		 * @since PHP 5, PHP 7
		 */
		public function substringData(int $offset, int $count): string {}
	}

	/**
	 * <p>Represents comment nodes, characters delimited by <code>&lt;!--</code> and <code>--&gt;</code>.</p>
	 * @link http://php.net/manual/en/class.domcomment.php
	 * @since PHP 5, PHP 7
	 */
	class DOMComment extends \DOMCharacterData {

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMComment object
		 * <p>Creates a new DOMComment object. This object is read only. It may be appended to a document, but additional nodes may not be appended to this node until the node is associated with a document. To create a writeable node, use DOMDocument::createComment.</p>
		 * @param string $value <p>The value of the comment.</p>
		 * @return self
		 * @link http://php.net/manual/en/domcomment.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $value = NULL) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Append the string to the end of the character data of the node
		 * <p>Append the string <code>data</code> to the end of the character data of the node.</p>
		 * @param string $data <p>The string to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.appenddata.php
		 * @since PHP 5, PHP 7
		 */
		public function appendData(string $data): void {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Remove a range of characters from the node
		 * <p>Deletes <code>count</code> characters starting from position <code>offset</code>.</p>
		 * @param int $offset <p>The offset from which to start removing.</p>
		 * @param int $count <p>The number of characters to delete. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are deleted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.deletedata.php
		 * @since PHP 5, PHP 7
		 */
		public function deleteData(int $offset, int $count): void {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Insert a string at the specified 16-bit unit offset
		 * <p>Inserts string <code>data</code> at position <code>offset</code>.</p>
		 * @param int $offset <p>The character offset at which to insert.</p>
		 * @param string $data <p>The string to insert.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.insertdata.php
		 * @since PHP 5, PHP 7
		 */
		public function insertData(int $offset, string $data): void {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

		/**
		 * Replace a substring within the DOMCharacterData node
		 * <p>Replace <code>count</code> characters starting from position <code>offset</code> with <code>data</code>.</p>
		 * @param int $offset <p>The offset from which to start replacing.</p>
		 * @param int $count <p>The number of characters to replace. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are replaced.</p>
		 * @param string $data <p>The string with which the range must be replaced.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.replacedata.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceData(int $offset, int $count, string $data): void {}

		/**
		 * Extracts a range of data from the node
		 * <p>Returns the specified substring.</p>
		 * @param int $offset <p>Start offset of substring to extract.</p>
		 * @param int $count <p>The number of characters to extract.</p>
		 * @return string <p>The specified substring. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all 16-bit units to the end of the data are returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.substringdata.php
		 * @since PHP 5, PHP 7
		 */
		public function substringData(int $offset, int $count): string {}
	}

	/**
	 * <p>Represents an entire HTML or XML document; serves as the root of the document tree.</p>
	 * @link http://php.net/manual/en/class.domdocument.php
	 * @since PHP 5, PHP 7
	 */
	class DOMDocument extends \DOMNode {

		/**
		 * @var string <p><i>Deprecated</i>. Actual encoding of the document, is a readonly equivalent to encoding.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.actualencoding
		 */
		public $actualEncoding;

		/**
		 * @var DOMConfiguration <p><i>Deprecated</i>. Configuration used when <code>DOMDocument::normalizeDocument()</code> is invoked.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.config
		 */
		public $config;

		/**
		 * @var DOMDocumentType <p>The Document Type Declaration associated with this document.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.doctype
		 */
		public $doctype;

		/**
		 * @var DOMElement <p>This is a convenience attribute that allows direct access to the child node that is the document element of the document.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.documentelement
		 */
		public $documentElement;

		/**
		 * @var string <p>The location of the document or <b><code>NULL</code></b> if undefined.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.documenturi
		 */
		public $documentURI;

		/**
		 * @var string <p>Encoding of the document, as specified by the XML declaration. This attribute is not present in the final DOM Level 3 specification, but is the only way of manipulating XML document encoding in this implementation.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.encoding
		 */
		public $encoding;

		/**
		 * @var bool <p>Nicely formats output with indentation and extra space.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.formatoutput
		 */
		public $formatOutput;

		/**
		 * @var DOMImplementation <p>The DOMImplementation object that handles this document.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.implementation
		 */
		public $implementation;

		/**
		 * @var bool <p>Do not remove redundant white space. Default to <b><code>TRUE</code></b>.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.preservewhitespace
		 */
		public $preserveWhiteSpace = TRUE;

		/**
		 * @var bool <p><i>Proprietary</i>. Enables recovery mode, i.e. trying to parse non-well formed documents. This attribute is not part of the DOM specification and is specific to libxml.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.recover
		 */
		public $recover;

		/**
		 * @var bool <p>Set it to <b><code>TRUE</code></b> to load external entities from a doctype declaration. This is useful for including character entities in your XML document.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.resolveexternals
		 */
		public $resolveExternals;

		/**
		 * @var bool <p><i>Deprecated</i>. Whether or not the document is standalone, as specified by the XML declaration, corresponds to xmlStandalone.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.standalone
		 */
		public $standalone;

		/**
		 * @var bool <p>Throws DOMException on errors. Default to <b><code>TRUE</code></b>.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.stricterrorchecking
		 */
		public $strictErrorChecking = TRUE;

		/**
		 * @var bool <p><i>Proprietary</i>. Whether or not to substitute entities. This attribute is not part of the DOM specification and is specific to libxml.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.substituteentities
		 */
		public $substituteEntities;

		/**
		 * @var bool <p>Loads and validates against the DTD. Default to <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.validateonparse
		 */
		public $validateOnParse = FALSE;

		/**
		 * @var string <p><i>Deprecated</i>. Version of XML, corresponds to xmlVersion.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.version
		 */
		public $version;

		/**
		 * @var string <p>An attribute specifying, as part of the XML declaration, the encoding of this document. This is <b><code>NULL</code></b> when unspecified or when it is not known, such as when the Document was created in memory.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.xmlencoding
		 */
		public $xmlEncoding;

		/**
		 * @var bool <p>An attribute specifying, as part of the XML declaration, whether this document is standalone. This is <b><code>FALSE</code></b> when unspecified.</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.xmlstandalone
		 */
		public $xmlStandalone;

		/**
		 * @var string <p>An attribute specifying, as part of the XML declaration, the version number of this document. If there is no declaration and if this document supports the "XML" feature, the value is "1.0".</p>
		 * @link http://php.net/manual/en/class.domdocument.php#domdocument.props.xmlversion
		 */
		public $xmlVersion;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMDocument object
		 * <p>Creates a new DOMDocument object.</p>
		 * @param string $version <p>The version number of the document as part of the XML declaration.</p>
		 * @param string $encoding <p>The encoding of the document as part of the XML declaration.</p>
		 * @return self
		 * @link http://php.net/manual/en/domdocument.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $version = NULL, string $encoding = NULL) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Create new attribute
		 * <p>This function creates a new instance of class DOMAttr. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @return DOMAttr <p>The new DOMAttr or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createattribute.php
		 * @since PHP 5, PHP 7
		 */
		public function createAttribute(string $name): \DOMAttr {}

		/**
		 * Create new attribute node with an associated namespace
		 * <p>This function creates a new instance of class DOMAttr. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $namespaceURI <p>The URI of the namespace.</p>
		 * @param string $qualifiedName <p>The tag name and prefix of the attribute, as <i>prefix:tagname</i>.</p>
		 * @return DOMAttr <p>The new DOMAttr or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createattributens.php
		 * @since PHP 5, PHP 7
		 */
		public function createAttributeNS(string $namespaceURI, string $qualifiedName): \DOMAttr {}

		/**
		 * Create new cdata node
		 * <p>This function creates a new instance of class DOMCDATASection. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $data <p>The content of the cdata.</p>
		 * @return DOMCDATASection <p>The new DOMCDATASection or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createcdatasection.php
		 * @since PHP 5, PHP 7
		 */
		public function createCDATASection(string $data): \DOMCDATASection {}

		/**
		 * Create new comment node
		 * <p>This function creates a new instance of class DOMComment. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $data <p>The content of the comment.</p>
		 * @return DOMComment <p>The new DOMComment or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createcomment.php
		 * @since PHP 5, PHP 7
		 */
		public function createComment(string $data): \DOMComment {}

		/**
		 * Create new document fragment
		 * <p>This function creates a new instance of class DOMDocumentFragment. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @return DOMDocumentFragment <p>The new DOMDocumentFragment or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createdocumentfragment.php
		 * @since PHP 5, PHP 7
		 */
		public function createDocumentFragment(): \DOMDocumentFragment {}

		/**
		 * Create new element node
		 * <p>This function creates a new instance of class DOMElement. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $name <p>The tag name of the element.</p>
		 * @param string $value <p>The value of the element. By default, an empty element will be created. The value can also be set later with DOMElement::$nodeValue.</p> <p>The value is used verbatim except that the &lt; and &gt; entity references will escaped. Note that &amp; has to be manually escaped; otherwise it is regarded as starting an entity reference. Also " won't be escaped.</p>
		 * @return DOMElement <p>Returns a new instance of class DOMElement or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createelement.php
		 * @since PHP 5, PHP 7
		 */
		public function createElement(string $name, string $value = NULL): \DOMElement {}

		/**
		 * Create new element node with an associated namespace
		 * <p>This function creates a new element node with an associated namespace. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $namespaceURI <p>The URI of the namespace.</p>
		 * @param string $qualifiedName <p>The qualified name of the element, as <i>prefix:tagname</i>.</p>
		 * @param string $value <p>The value of the element. By default, an empty element will be created. You can also set the value later with DOMElement::$nodeValue.</p>
		 * @return DOMElement <p>The new DOMElement or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createelementns.php
		 * @since PHP 5, PHP 7
		 */
		public function createElementNS(string $namespaceURI, string $qualifiedName, string $value = NULL): \DOMElement {}

		/**
		 * Create new entity reference node
		 * <p>This function creates a new instance of class DOMEntityReference. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $name <p>The content of the entity reference, e.g. the entity reference minus the leading <i>&amp;</i> and the trailing <i>;</i> characters.</p>
		 * @return DOMEntityReference <p>The new DOMEntityReference or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createentityreference.php
		 * @since PHP 5, PHP 7
		 */
		public function createEntityReference(string $name): \DOMEntityReference {}

		/**
		 * Creates new PI node
		 * <p>This function creates a new instance of class DOMProcessingInstruction. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $target <p>The target of the processing instruction.</p>
		 * @param string $data <p>The content of the processing instruction.</p>
		 * @return DOMProcessingInstruction <p>The new DOMProcessingInstruction or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createprocessinginstruction.php
		 * @since PHP 5, PHP 7
		 */
		public function createProcessingInstruction(string $target, string $data = NULL): \DOMProcessingInstruction {}

		/**
		 * Create new text node
		 * <p>This function creates a new instance of class DOMText. This node will not show up in the document unless it is inserted with (e.g.) <code>DOMNode::appendChild()</code>.</p>
		 * @param string $content <p>The content of the text.</p>
		 * @return DOMText <p>The new DOMText or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.createtextnode.php
		 * @since PHP 5, PHP 7
		 */
		public function createTextNode(string $content): \DOMText {}

		/**
		 * Searches for an element with a certain id
		 * <p>This function is similar to DOMDocument::getElementsByTagName but searches for an element with a given id.</p><p>For this function to work, you will need either to set some ID attributes with DOMElement::setIdAttribute or a DTD which defines an attribute to be of type ID. In the later case, you will need to validate your document with DOMDocument::validate or DOMDocument::$validateOnParse before using this function.</p>
		 * @param string $elementId <p>The unique id value for an element.</p>
		 * @return DOMElement <p>Returns the DOMElement or <b><code>NULL</code></b> if the element is not found.</p>
		 * @link http://php.net/manual/en/domdocument.getelementbyid.php
		 * @since PHP 5, PHP 7
		 */
		public function getElementById(string $elementId): \DOMElement {}

		/**
		 * Searches for all elements with given local tag name
		 * <p>This function returns a new instance of class DOMNodeList containing all the elements with a given local tag name.</p>
		 * @param string $name <p>The local name (without namespace) of the tag to match on. The special value <i>&#42;</i> matches all tags.</p>
		 * @return DOMNodeList <p>A new DOMNodeList object containing all the matched elements.</p>
		 * @link http://php.net/manual/en/domdocument.getelementsbytagname.php
		 * @since PHP 5, PHP 7
		 */
		public function getElementsByTagName(string $name): \DOMNodeList {}

		/**
		 * Searches for all elements with given tag name in specified namespace
		 * <p>Returns a DOMNodeList of all elements with a given local name and a namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI of the elements to match on. The special value <i>&#42;</i> matches all namespaces.</p>
		 * @param string $localName <p>The local name of the elements to match on. The special value <i>&#42;</i> matches all local names.</p>
		 * @return DOMNodeList <p>A new DOMNodeList object containing all the matched elements.</p>
		 * @link http://php.net/manual/en/domdocument.getelementsbytagnamens.php
		 * @since PHP 5, PHP 7
		 */
		public function getElementsByTagNameNS(string $namespaceURI, string $localName): \DOMNodeList {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Import node into current document
		 * <p>This function returns a copy of the node to import and associates it with the current document.</p>
		 * @param \DOMNode $importedNode <p>The node to import.</p>
		 * @param bool $deep <p>If set to <b><code>TRUE</code></b>, this method will recursively import the subtree under the <code>importedNode</code>.</p> <p><b>Note</b>:</p><p>To copy the nodes attributes <code>deep</code> needs to be set to <b><code>TRUE</code></b></p>
		 * @return DOMNode <p>The copied node or <b><code>FALSE</code></b>, if it cannot be copied.</p>
		 * @link http://php.net/manual/en/domdocument.importnode.php
		 * @since PHP 5, PHP 7
		 */
		public function importNode(\DOMNode $importedNode, bool $deep = NULL): \DOMNode {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Load XML from a file
		 * <p>Loads an XML document from a file.</p><p>Unix style paths with forward slashes can cause significant performance degradation on Windows systems; be sure to call <code>realpath()</code> in such a case.</p>
		 * @param string $filename <p>The path to the XML document.</p>
		 * @param int $options <p>Bitwise <i>OR</i> of the libxml option constants.</p>
		 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If called statically, returns a DOMDocument or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.load.php
		 * @since PHP 5, PHP 7
		 */
		public function load(string $filename, int $options = 0) {}

		/**
		 * Load HTML from a string
		 * <p>The function parses the HTML contained in the string <code>source</code>. Unlike loading XML, HTML does not have to be well-formed to load. This function may also be called statically to load and create a DOMDocument object. The static invocation may be used when no DOMDocument properties need to be set prior to loading.</p>
		 * @param string $source <p>The HTML string.</p>
		 * @param int $options <p>Since PHP 5.4.0 and Libxml 2.6.0, you may also use the <code>options</code> parameter to specify additional Libxml parameters.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If called statically, returns a DOMDocument or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.loadhtml.php
		 * @since PHP 5, PHP 7
		 */
		public function loadHTML(string $source, int $options = 0): bool {}

		/**
		 * Load HTML from a file
		 * <p>The function parses the HTML document in the file named <code>filename</code>. Unlike loading XML, HTML does not have to be well-formed to load.</p>
		 * @param string $filename <p>The path to the HTML file.</p>
		 * @param int $options <p>Since PHP 5.4.0 and Libxml 2.6.0, you may also use the <code>options</code> parameter to specify additional Libxml parameters.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If called statically, returns a DOMDocument or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.loadhtmlfile.php
		 * @since PHP 5, PHP 7
		 */
		public function loadHTMLFile(string $filename, int $options = 0): bool {}

		/**
		 * Load XML from a string
		 * <p>Loads an XML document from a string.</p>
		 * @param string $source <p>The string containing the XML.</p>
		 * @param int $options <p>Bitwise <i>OR</i> of the libxml option constants.</p>
		 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If called statically, returns a DOMDocument or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.loadxml.php
		 * @since PHP 5, PHP 7
		 */
		public function loadXML(string $source, int $options = 0) {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Normalizes the document
		 * <p>This method acts as if you saved and then loaded the document, putting the document in a "normal" form.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domdocument.normalizedocument.php
		 * @since PHP 5, PHP 7
		 */
		public function normalizeDocument(): void {}

		/**
		 * Register extended class used to create base node type
		 * <p>This method allows you to register your own extended DOM class to be used afterward by the PHP DOM extension.</p><p>This method is not part of the DOM standard.</p>
		 * @param string $baseclass <p>The DOM class that you want to extend. You can find a list of these classes in the chapter introduction.</p>
		 * @param string $extendedclass <p>Your extended class name. If <b><code>NULL</code></b> is provided, any previously registered class extending <code>baseclass</code> will be removed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.registernodeclass.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function registerNodeClass(string $baseclass, string $extendedclass): bool {}

		/**
		 * Performs relaxNG validation on the document
		 * <p>Performs relaxNG validation on the document based on the given RNG schema.</p>
		 * @param string $filename <p>The RNG file.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.relaxngvalidate.php
		 * @since PHP 5, PHP 7
		 */
		public function relaxNGValidate(string $filename): bool {}

		/**
		 * Performs relaxNG validation on the document
		 * <p>Performs relaxNG validation on the document based on the given RNG source.</p>
		 * @param string $source <p>A string containing the RNG schema.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.relaxngvalidatesource.php
		 * @since PHP 5, PHP 7
		 */
		public function relaxNGValidateSource(string $source): bool {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

		/**
		 * Dumps the internal XML tree back into a file
		 * <p>Creates an XML document from the DOM representation. This function is usually called after building a new dom document from scratch as in the example below.</p>
		 * @param string $filename <p>The path to the saved XML document.</p>
		 * @param int $options <p>Additional Options. Currently only LIBXML_NOEMPTYTAG is supported.</p>
		 * @return int <p>Returns the number of bytes written or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.save.php
		 * @since PHP 5, PHP 7
		 */
		public function save(string $filename, int $options = NULL): int {}

		/**
		 * Dumps the internal document into a string using HTML formatting
		 * <p>Creates an HTML document from the DOM representation. This function is usually called after building a new dom document from scratch as in the example below.</p>
		 * @param \DOMNode $node <p>Optional parameter to output a subset of the document.</p>
		 * @return string <p>Returns the HTML, or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.savehtml.php
		 * @since PHP 5, PHP 7
		 */
		public function saveHTML(\DOMNode $node = NULL): string {}

		/**
		 * Dumps the internal document into a file using HTML formatting
		 * <p>Creates an HTML document from the DOM representation. This function is usually called after building a new dom document from scratch as in the example below.</p>
		 * @param string $filename <p>The path to the saved HTML document.</p>
		 * @return int <p>Returns the number of bytes written or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.savehtmlfile.php
		 * @since PHP 5, PHP 7
		 */
		public function saveHTMLFile(string $filename): int {}

		/**
		 * Dumps the internal XML tree back into a string
		 * <p>Creates an XML document from the DOM representation. This function is usually called after building a new dom document from scratch as in the example below.</p>
		 * @param \DOMNode $node <p>Use this parameter to output only a specific node without XML declaration rather than the entire document.</p>
		 * @param int $options <p>Additional Options. Currently only LIBXML_NOEMPTYTAG is supported.</p>
		 * @return string <p>Returns the XML, or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domdocument.savexml.php
		 * @since PHP 5, PHP 7
		 */
		public function saveXML(\DOMNode $node = NULL, int $options = NULL): string {}

		/**
		 * Validates a document based on a schema
		 * <p>Validates a document based on the given schema file.</p>
		 * @param string $filename <p>The path to the schema.</p>
		 * @param int $flags <p>A bitmask of Libxml schema validation flags. Currently the only supported value is LIBXML_SCHEMA_CREATE. Available since PHP 5.5.2 and Libxml 2.6.14.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.schemavalidate.php
		 * @since PHP 5, PHP 7
		 */
		public function schemaValidate(string $filename, int $flags = NULL): bool {}

		/**
		 * Validates a document based on a schema
		 * <p>Validates a document based on a schema defined in the given string.</p>
		 * @param string $source <p>A string containing the schema.</p>
		 * @param int $flags <p>A bitmask of Libxml schema validation flags. Currently the only supported value is LIBXML_SCHEMA_CREATE. Available since PHP 5.5.2 and Libxml 2.6.14.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocument.schemavalidatesource.php
		 * @since PHP 5, PHP 7
		 */
		public function schemaValidateSource(string $source, int $flags = NULL): bool {}

		/**
		 * Validates the document based on its DTD
		 * <p>Validates the document based on its DTD.</p><p>You can also use the <i>validateOnParse</i> property of DOMDocument to make a DTD validation.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. If the document have no DTD attached, this method will return <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/domdocument.validate.php
		 * @since PHP 5, PHP 7
		 */
		public function validate(): bool {}

		/**
		 * Substitutes XIncludes in a DOMDocument Object
		 * <p>This method substitutes XIncludes in a DOMDocument object.</p><p><b>Note</b>:</p><p>Due to libxml2 automatically resolving entities, this method will produce unexpected results if the included XML file have an attached DTD.</p>
		 * @param int $options <p>libxml parameters. Available since PHP 5.1.0 and Libxml 2.6.7.</p>
		 * @return int <p>Returns the number of XIncludes in the document, -1 if some processing failed, or <b><code>FALSE</code></b> if there were no substitutions.</p>
		 * @link http://php.net/manual/en/domdocument.xinclude.php
		 * @since PHP 5, PHP 7
		 */
		public function xinclude(int $options = NULL): int {}
	}

	/**
	 * @link http://php.net/manual/en/class.domdocumentfragment.php
	 * @since PHP 5, PHP 7
	 */
	class DOMDocumentFragment extends \DOMNode {

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Append raw XML data
		 * <p>Appends raw XML data to a DOMDocumentFragment.</p><p>This method is not part of the DOM standard. It was created as a simpler approach for appending an XML DocumentFragment in a DOMDocument.</p><p>If you want to stick to the standards, you will have to create a temporary DOMDocument with a dummy root and then loop through the child nodes of the root of your XML data to append them.</p>
		 * @param string $data <p>XML to append.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domdocumentfragment.appendxml.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function appendXML(string $data): bool {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * <p>Each DOMDocument has a <i>doctype</i> attribute whose value is either <b><code>NULL</code></b> or a <b>DOMDocumentType</b> object.</p>
	 * @link http://php.net/manual/en/class.domdocumenttype.php
	 * @since PHP 5, PHP 7
	 */
	class DOMDocumentType extends \DOMNode {

		/**
		 * @var string <p>The public identifier of the external subset.</p>
		 * @link http://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.publicid
		 */
		public $publicId;

		/**
		 * @var string <p>The system identifier of the external subset. This may be an absolute URI or not.</p>
		 * @link http://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.systemid
		 */
		public $systemId;

		/**
		 * @var string <p>The name of DTD; i.e., the name immediately following the <i>DOCTYPE</i> keyword.</p>
		 * @link http://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.name
		 */
		public $name;

		/**
		 * @var DOMNamedNodeMap <p>A DOMNamedNodeMap containing the general entities, both external and internal, declared in the DTD.</p>
		 * @link http://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.entities
		 */
		public $entities;

		/**
		 * @var DOMNamedNodeMap <p>A DOMNamedNodeMap containing the notations declared in the DTD.</p>
		 * @link http://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.notations
		 */
		public $notations;

		/**
		 * @var string <p>The internal subset as a string, or null if there is none. This does not contain the delimiting square brackets.</p>
		 * @link http://php.net/manual/en/class.domdocumenttype.php#domdocumenttype.props.internalsubset
		 */
		public $internalSubset;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * @link http://php.net/manual/en/class.domelement.php
	 * @since PHP 5, PHP 7
	 */
	class DOMElement extends \DOMNode {

		/**
		 * @var bool <p>Not implemented yet, always return <b><code>NULL</code></b></p>
		 * @link http://php.net/manual/en/class.domelement.php#domelement.props.schematypeinfo
		 */
		public $schemaTypeInfo;

		/**
		 * @var string <p>The element name</p>
		 * @link http://php.net/manual/en/class.domelement.php#domelement.props.tagname
		 */
		public $tagName;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMElement object
		 * <p>Creates a new DOMElement object. This object is read only. It may be appended to a document, but additional nodes may not be appended to this node until the node is associated with a document. To create a writeable node, use DOMDocument::createElement or DOMDocument::createElementNS.</p>
		 * @param string $name <p>The tag name of the element. When also passing in namespaceURI, the element name may take a prefix to be associated with the URI.</p>
		 * @param string $value <p>The value of the element.</p>
		 * @param string $namespaceURI <p>A namespace URI to create the element within a specific namespace.</p>
		 * @return self
		 * @link http://php.net/manual/en/domelement.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $name, string $value = NULL, string $namespaceURI = NULL) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Returns value of attribute
		 * <p>Gets the value of the attribute with name <code>name</code> for the current node.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @return string <p>The value of the attribute, or an empty string if no attribute with the given <code>name</code> is found.</p>
		 * @link http://php.net/manual/en/domelement.getattribute.php
		 * @since PHP 5, PHP 7
		 */
		public function getAttribute(string $name): string {}

		/**
		 * Returns value of attribute
		 * <p>Gets the value of the attribute in namespace <code>namespaceURI</code> with local name <code>localName</code> for the current node.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @param string $localName <p>The local name.</p>
		 * @return string <p>The value of the attribute, or an empty string if no attribute with the given <code>localName</code> and <code>namespaceURI</code> is found.</p>
		 * @link http://php.net/manual/en/domelement.getattributens.php
		 * @since PHP 5, PHP 7
		 */
		public function getAttributeNS(string $namespaceURI, string $localName): string {}

		/**
		 * Returns attribute node
		 * <p>Returns the attribute node with name <code>name</code> for the current element.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @return DOMAttr <p>The attribute node. Note that for XML namespace declarations (<i>xmlns</i> and <i>xmlns:&#42;</i> attributes) an instance of <b>DOMNameSpaceNode</b> is returned instead of a DOMAttr.</p>
		 * @link http://php.net/manual/en/domelement.getattributenode.php
		 * @since PHP 5, PHP 7
		 */
		public function getAttributeNode(string $name): \DOMAttr {}

		/**
		 * Returns attribute node
		 * <p>Returns the attribute node in namespace <code>namespaceURI</code> with local name <code>localName</code> for the current node.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @param string $localName <p>The local name.</p>
		 * @return DOMAttr <p>The attribute node. Note that for XML namespace declarations (<i>xmlns</i> and <i>xmlns:&#42;</i> attributes) an instance of <b>DOMNameSpaceNode</b> is returned instead of a DOMAttr object.</p>
		 * @link http://php.net/manual/en/domelement.getattributenodens.php
		 * @since PHP 5, PHP 7
		 */
		public function getAttributeNodeNS(string $namespaceURI, string $localName): \DOMAttr {}

		/**
		 * Gets elements by tagname
		 * <p>This function returns a new instance of the class DOMNodeList of all descendant elements with a given tag <code>name</code>, in the order in which they are encountered in a preorder traversal of this element tree.</p>
		 * @param string $name <p>The tag name. Use <i>&#42;</i> to return all elements within the element tree.</p>
		 * @return DOMNodeList <p>This function returns a new instance of the class DOMNodeList of all matched elements.</p>
		 * @link http://php.net/manual/en/domelement.getelementsbytagname.php
		 * @since PHP 5, PHP 7
		 */
		public function getElementsByTagName(string $name): \DOMNodeList {}

		/**
		 * Get elements by namespaceURI and localName
		 * <p>This function fetch all the descendant elements with a given <code>localName</code> and <code>namespaceURI</code>.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @param string $localName <p>The local name. Use <i>&#42;</i> to return all elements within the element tree.</p>
		 * @return DOMNodeList <p>This function returns a new instance of the class DOMNodeList of all matched elements in the order in which they are encountered in a preorder traversal of this element tree.</p>
		 * @link http://php.net/manual/en/domelement.getelementsbytagnamens.php
		 * @since PHP 5, PHP 7
		 */
		public function getElementsByTagNameNS(string $namespaceURI, string $localName): \DOMNodeList {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks to see if attribute exists
		 * <p>Indicates whether attribute named <code>name</code> exists as a member of the element.</p>
		 * @param string $name <p>The attribute name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domelement.hasattribute.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttribute(string $name): bool {}

		/**
		 * Checks to see if attribute exists
		 * <p>Indicates whether attribute in namespace <code>namespaceURI</code> named <code>localName</code> exists as a member of the element.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @param string $localName <p>The local name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domelement.hasattributens.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributeNS(string $namespaceURI, string $localName): bool {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes attribute
		 * <p>Removes attribute named <code>name</code> from the element.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domelement.removeattribute.php
		 * @since PHP 5, PHP 7
		 */
		public function removeAttribute(string $name): bool {}

		/**
		 * Removes attribute
		 * <p>Removes attribute <code>localName</code> in namespace <code>namespaceURI</code> from the element.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @param string $localName <p>The local name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domelement.removeattributens.php
		 * @since PHP 5, PHP 7
		 */
		public function removeAttributeNS(string $namespaceURI, string $localName): bool {}

		/**
		 * Removes attribute
		 * <p>Removes attribute <code>oldnode</code> from the element.</p>
		 * @param \DOMAttr $oldnode <p>The attribute node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domelement.removeattributenode.php
		 * @since PHP 5, PHP 7
		 */
		public function removeAttributeNode(\DOMAttr $oldnode): bool {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

		/**
		 * Adds new attribute
		 * <p>Sets an attribute with name <code>name</code> to the given value. If the attribute does not exist, it will be created.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @return DOMAttr <p>The new DOMAttr or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link http://php.net/manual/en/domelement.setattribute.php
		 * @since PHP 5, PHP 7
		 */
		public function setAttribute(string $name, string $value): \DOMAttr {}

		/**
		 * Adds new attribute
		 * <p>Sets an attribute with namespace <code>namespaceURI</code> and name <code>name</code> to the given value. If the attribute does not exist, it will be created.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @param string $qualifiedName <p>The qualified name of the attribute, as <i>prefix:tagname</i>.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domelement.setattributens.php
		 * @since PHP 5, PHP 7
		 */
		public function setAttributeNS(string $namespaceURI, string $qualifiedName, string $value): void {}

		/**
		 * Adds new attribute node to element
		 * <p>Adds new attribute node <code>attr</code> to element.</p>
		 * @param \DOMAttr $attr <p>The attribute node.</p>
		 * @return DOMAttr <p>Returns old node if the attribute has been replaced or <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/domelement.setattributenode.php
		 * @since PHP 5, PHP 7
		 */
		public function setAttributeNode(\DOMAttr $attr): \DOMAttr {}

		/**
		 * Adds new attribute node to element
		 * <p>Adds new attribute node <code>attr</code> to element.</p>
		 * @param \DOMAttr $attr <p>The attribute node.</p>
		 * @return DOMAttr <p>Returns the old node if the attribute has been replaced.</p>
		 * @link http://php.net/manual/en/domelement.setattributenodens.php
		 * @since PHP 5, PHP 7
		 */
		public function setAttributeNodeNS(\DOMAttr $attr): \DOMAttr {}

		/**
		 * Declares the attribute specified by name to be of type ID
		 * <p>Declares the attribute <code>name</code> to be of type ID.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @param bool $isId <p>Set it to <b><code>TRUE</code></b> if you want <code>name</code> to be of type ID, <b><code>FALSE</code></b> otherwise.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domelement.setidattribute.php
		 * @since PHP 5, PHP 7
		 */
		public function setIdAttribute(string $name, bool $isId): void {}

		/**
		 * Declares the attribute specified by local name and namespace URI to be of type ID
		 * <p>Declares the attribute specified by <code>localName</code> and <code>namespaceURI</code> to be of type ID.</p>
		 * @param string $namespaceURI <p>The namespace URI of the attribute.</p>
		 * @param string $localName <p>The local name of the attribute, as <i>prefix:tagname</i>.</p>
		 * @param bool $isId <p>Set it to <b><code>TRUE</code></b> if you want <code>name</code> to be of type ID, <b><code>FALSE</code></b> otherwise.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domelement.setidattributens.php
		 * @since PHP 5, PHP 7
		 */
		public function setIdAttributeNS(string $namespaceURI, string $localName, bool $isId): void {}

		/**
		 * Declares the attribute specified by node to be of type ID
		 * <p>Declares the attribute specified by <code>attr</code> to be of type ID.</p>
		 * @param \DOMAttr $attr <p>The attribute node.</p>
		 * @param bool $isId <p>Set it to <b><code>TRUE</code></b> if you want <code>name</code> to be of type ID, <b><code>FALSE</code></b> otherwise.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domelement.setidattributenode.php
		 * @since PHP 5, PHP 7
		 */
		public function setIdAttributeNode(\DOMAttr $attr, bool $isId): void {}
	}

	/**
	 * <p>This interface represents a known entity, either parsed or unparsed, in an XML document.</p>
	 * @link http://php.net/manual/en/class.domentity.php
	 * @since PHP 5, PHP 7
	 */
	class DOMEntity extends \DOMNode {

		/**
		 * @var string <p>The public identifier associated with the entity if specified, and <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.domentity.php#domentity.props.publicid
		 */
		public $publicId;

		/**
		 * @var string <p>The system identifier associated with the entity if specified, and <b><code>NULL</code></b> otherwise. This may be an absolute URI or not.</p>
		 * @link http://php.net/manual/en/class.domentity.php#domentity.props.systemid
		 */
		public $systemId;

		/**
		 * @var string <p>For unparsed entities, the name of the notation for the entity. For parsed entities, this is <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domentity.php#domentity.props.notationname
		 */
		public $notationName;

		/**
		 * @var string <p>An attribute specifying the encoding used for this entity at the time of parsing, when it is an external parsed entity. This is <b><code>NULL</code></b> if it an entity from the internal subset or if it is not known.</p>
		 * @link http://php.net/manual/en/class.domentity.php#domentity.props.actualencoding
		 */
		public $actualEncoding;

		/**
		 * @var string <p>An attribute specifying, as part of the text declaration, the encoding of this entity, when it is an external parsed entity. This is <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.domentity.php#domentity.props.encoding
		 */
		public $encoding;

		/**
		 * @var string <p>An attribute specifying, as part of the text declaration, the version number of this entity, when it is an external parsed entity. This is <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.domentity.php#domentity.props.version
		 */
		public $version;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * @link http://php.net/manual/en/class.domentityreference.php
	 * @since PHP 5, PHP 7
	 */
	class DOMEntityReference extends \DOMNode {

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMEntityReference object
		 * <p>Creates a new DOMEntityReference object.</p>
		 * @param string $name <p>The name of the entity reference.</p>
		 * @return self
		 * @link http://php.net/manual/en/domentityreference.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $name) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * <p>DOM operations raise exceptions under particular circumstances, i.e., when an operation is impossible to perform for logical reasons.</p>
	 * <p>See also Exceptions.</p>
	 * @link http://php.net/manual/en/class.domexception.php
	 * @since PHP 5, PHP 7
	 */
	class DOMException extends \Exception {

		/**
		 * @var int <p>An integer indicating the type of error generated</p>
		 * @link http://php.net/manual/en/class.domexception.php#domexception.props.code
		 */
		public $code;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>The <b>DOMImplementation</b> interface provides a number of methods for performing operations that are independent of any particular instance of the document object model.</p>
	 * @link http://php.net/manual/en/class.domimplementation.php
	 * @since PHP 5, PHP 7
	 */
	class DOMImplementation {

		/**
		 * Creates a new DOMImplementation object
		 * <p>Creates a new DOMImplementation object.</p>
		 * @return self
		 * @link http://php.net/manual/en/domimplementation.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct() {}

		/**
		 * Creates a DOMDocument object of the specified type with its document element
		 * <p>Creates a DOMDocument object of the specified type with its document element.</p>
		 * @param string $namespaceURI <p>The namespace URI of the document element to create.</p>
		 * @param string $qualifiedName <p>The qualified name of the document element to create.</p>
		 * @param \DOMDocumentType $doctype <p>The type of document to create or <b><code>NULL</code></b>.</p>
		 * @return DOMDocument <p>A new DOMDocument object. If <code>namespaceURI</code>, <code>qualifiedName</code>, and <code>doctype</code> are null, the returned DOMDocument is empty with no document element</p>
		 * @link http://php.net/manual/en/domimplementation.createdocument.php
		 * @since PHP 5, PHP 7
		 */
		public function createDocument(string $namespaceURI = NULL, string $qualifiedName = NULL, \DOMDocumentType $doctype = NULL): \DOMDocument {}

		/**
		 * Creates an empty DOMDocumentType object
		 * <p>Creates an empty DOMDocumentType object. Entity declarations and notations are not made available. Entity reference expansions and default attribute additions do not occur.</p>
		 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
		 * @param string $publicId <p>The external subset public identifier.</p>
		 * @param string $systemId <p>The external subset system identifier.</p>
		 * @return DOMDocumentType <p>A new DOMDocumentType node with its <i>ownerDocument</i> set to <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/domimplementation.createdocumenttype.php
		 * @since PHP 5, PHP 7
		 */
		public function createDocumentType(string $qualifiedName = NULL, string $publicId = NULL, string $systemId = NULL): \DOMDocumentType {}

		/**
		 * Test if the DOM implementation implements a specific feature
		 * <p>Test if the DOM implementation implements a specific <code>feature</code>.</p><p>You can find a list of all features in the Conformance section of the DOM specification.</p>
		 * @param string $feature <p>The feature to test.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test. In level 2, this can be either <i>2.0</i> or <i>1.0</i>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domimplementation.hasfeature.php
		 * @since PHP 5, PHP 7
		 */
		public function hasFeature(string $feature, string $version): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.domnamednodemap.php
	 * @since PHP 5, PHP 7
	 */
	class DOMNamedNodeMap implements \Traversable, \Countable {

		/**
		 * @var int <p>The number of nodes in the map. The range of valid child node indices is <i>0</i> to <i>length - 1</i> inclusive.</p>
		 * @link http://php.net/manual/en/class.domnamednodemap.php#domnamednodemap.props.length
		 */
		public $length;

		/**
		 * Retrieves a node specified by name
		 * <p>Retrieves a node specified by its <i>nodeName</i>.</p>
		 * @param string $name <p>The <i>nodeName</i> of the node to retrieve.</p>
		 * @return DOMNode <p>A node (of any type) with the specified <i>nodeName</i>, or <b><code>NULL</code></b> if no node is found.</p>
		 * @link http://php.net/manual/en/domnamednodemap.getnameditem.php
		 * @since PHP 5, PHP 7
		 */
		public function getNamedItem(string $name): \DOMNode {}

		/**
		 * Retrieves a node specified by local name and namespace URI
		 * <p>Retrieves a node specified by <code>localName</code> and <code>namespaceURI</code>.</p>
		 * @param string $namespaceURI <p>The namespace URI of the node to retrieve.</p>
		 * @param string $localName <p>The local name of the node to retrieve.</p>
		 * @return DOMNode <p>A node (of any type) with the specified local name and namespace URI, or <b><code>NULL</code></b> if no node is found.</p>
		 * @link http://php.net/manual/en/domnamednodemap.getnameditemns.php
		 * @since PHP 5, PHP 7
		 */
		public function getNamedItemNS(string $namespaceURI, string $localName): \DOMNode {}

		/**
		 * Retrieves a node specified by index
		 * <p>Retrieves a node specified by <code>index</code> within the DOMNamedNodeMap object.</p>
		 * @param int $index <p>Index into this map.</p>
		 * @return DOMNode <p>The node at the <code>index</code>th position in the map, or <b><code>NULL</code></b> if that is not a valid index (greater than or equal to the number of nodes in this map).</p>
		 * @link http://php.net/manual/en/domnamednodemap.item.php
		 * @since PHP 5, PHP 7
		 */
		public function item(int $index): \DOMNode {}
	}

	/**
	 * @link http://php.net/manual/en/class.domnode.php
	 * @since PHP 5, PHP 7
	 */
	class DOMNode {

		/**
		 * @var string <p>Returns the most accurate name for the current node type</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.nodename
		 */
		public $nodeName;

		/**
		 * @var string <p>The value of this node, depending on its type. Contrary to the W3C specification, the node value of DOMElement nodes is equal to DOMNode::textContent instead of <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.nodevalue
		 */
		public $nodeValue;

		/**
		 * @var int <p>Gets the type of the node. One of the predefined XML_xxx_NODE constants</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.nodetype
		 */
		public $nodeType;

		/**
		 * @var DOMNode <p>The parent of this node. If there is no such node, this returns <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.parentnode
		 */
		public $parentNode;

		/**
		 * @var DOMNodeList <p>A DOMNodeList that contains all children of this node. If there are no children, this is an empty DOMNodeList.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.childnodes
		 */
		public $childNodes;

		/**
		 * @var DOMNode <p>The first child of this node. If there is no such node, this returns <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.firstchild
		 */
		public $firstChild;

		/**
		 * @var DOMNode <p>The last child of this node. If there is no such node, this returns <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.lastchild
		 */
		public $lastChild;

		/**
		 * @var DOMNode <p>The node immediately preceding this node. If there is no such node, this returns <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.previoussibling
		 */
		public $previousSibling;

		/**
		 * @var DOMNode <p>The node immediately following this node. If there is no such node, this returns <b><code>NULL</code></b>.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.nextsibling
		 */
		public $nextSibling;

		/**
		 * @var DOMNamedNodeMap <p>A DOMNamedNodeMap containing the attributes of this node (if it is a DOMElement) or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.attributes
		 */
		public $attributes;

		/**
		 * @var DOMDocument <p>The DOMDocument object associated with this node.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.ownerdocument
		 */
		public $ownerDocument;

		/**
		 * @var string <p>The namespace URI of this node, or <b><code>NULL</code></b> if it is unspecified.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.namespaceuri
		 */
		public $namespaceURI;

		/**
		 * @var string <p>The namespace prefix of this node, or <b><code>NULL</code></b> if it is unspecified.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.prefix
		 */
		public $prefix;

		/**
		 * @var string <p>Returns the local part of the qualified name of this node.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.localname
		 */
		public $localName;

		/**
		 * @var string <p>The absolute base URI of this node or <b><code>NULL</code></b> if the implementation wasn't able to obtain an absolute URI.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.baseuri
		 */
		public $baseURI;

		/**
		 * @var string <p>The text content of this node and its descendants.</p>
		 * @link http://php.net/manual/en/class.domnode.php#domnode.props.textcontent
		 */
		public $textContent;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * @link http://php.net/manual/en/class.domnodelist.php
	 * @since PHP 5, PHP 7
	 */
	class DOMNodeList implements \Traversable, \Countable {

		/**
		 * @var int <p>The number of nodes in the list. The range of valid child node indices is 0 to <i>length - 1</i> inclusive.</p>
		 * @link http://php.net/manual/en/class.domnodelist.php#domnodelist.props.length
		 */
		public $length;

		/**
		 * Get number of nodes in the list
		 * @return int <p>Returns number of nodes in the list or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnodelist.count.php
		 * @since No version information available, might only be in Git
		 */
		public function count(): int {}

		/**
		 * Retrieves a node specified by index
		 * <p>Retrieves a node specified by <code>index</code> within the DOMNodeList object.</p><p>If you need to know the number of nodes in the collection, use the <i>length</i> property of the DOMNodeList object.</p>
		 * @param int $index <p>Index of the node into the collection.</p>
		 * @return DOMNode <p>The node at the <code>index</code>th position in the DOMNodeList, or <b><code>NULL</code></b> if that is not a valid index.</p>
		 * @link http://php.net/manual/en/domnodelist.item.php
		 * @since PHP 5, PHP 7
		 */
		public function item(int $index): \DOMNode {}
	}

	/**
	 * @link http://php.net/manual/en/class.domnotation.php
	 * @since PHP 5, PHP 7
	 */
	class DOMNotation extends \DOMNode {

		/**
		 * @var string
		 * @link http://php.net/manual/en/class.domnotation.php#domnotation.props.publicid
		 */
		public $publicId;

		/**
		 * @var string
		 * @link http://php.net/manual/en/class.domnotation.php#domnotation.props.systemid
		 */
		public $systemId;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * @link http://php.net/manual/en/class.domprocessinginstruction.php
	 * @since PHP 5, PHP 7
	 */
	class DOMProcessingInstruction extends \DOMNode {

		/**
		 * @var string
		 * @link http://php.net/manual/en/class.domprocessinginstruction.php#domprocessinginstruction.props.target
		 */
		public $target;

		/**
		 * @var string
		 * @link http://php.net/manual/en/class.domprocessinginstruction.php#domprocessinginstruction.props.data
		 */
		public $data;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMProcessingInstruction object
		 * <p>Creates a new DOMProcessingInstruction object. This object is read only. It may be appended to a document, but additional nodes may not be appended to this node until the node is associated with a document. To create a writeable node, use DOMDocument::createProcessingInstruction.</p>
		 * @param string $name <p>The tag name of the processing instruction.</p>
		 * @param string $value <p>The value of the processing instruction.</p>
		 * @return self
		 * @link http://php.net/manual/en/domprocessinginstruction.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $name, string $value = NULL) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
	}

	/**
	 * <p>The <b>DOMText</b> class inherits from DOMCharacterData and represents the textual content of a DOMElement or DOMAttr.</p>
	 * @link http://php.net/manual/en/class.domtext.php
	 * @since PHP 5, PHP 7
	 */
	class DOMText extends \DOMCharacterData {

		/**
		 * @var string <p>Holds all the text of logically-adjacent (not separated by Element, Comment or Processing Instruction) Text nodes.</p>
		 * @link http://php.net/manual/en/class.domtext.php#domtext.props.wholetext
		 */
		public $wholeText;

		/**
		 * Canonicalize nodes to a string
		 * <p>Canonicalize nodes to a string</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return string <p>Returns canonicalized nodes as a string or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14n.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

		/**
		 * Canonicalize nodes to a file
		 * <p>Canonicalize nodes to a file.</p>
		 * @param string $uri <p>Path to write the output to.</p>
		 * @param bool $exclusive <p>Enable exclusive parsing of only the nodes matched by the provided xpath or namespace prefixes.</p>
		 * @param bool $with_comments <p>Retain comments in output.</p>
		 * @param array $xpath <p>An array of <i>xpath</i>s to filter the nodes by.</p>
		 * @param array $ns_prefixes <p>An array of namespace prefixes to filter the nodes by.</p>
		 * @return int <p>Number of bytes written or <b><code>FALSE</code></b> on failure</p>
		 * @link http://php.net/manual/en/domnode.c14nfile.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function C14NFile(string $uri, bool $exclusive = FALSE, bool $with_comments = FALSE, array $xpath = NULL, array $ns_prefixes = NULL): int {}

		/**
		 * Creates a new DOMText object
		 * <p>Creates a new DOMText object.</p>
		 * @param string $value <p>The value of the text node. If not supplied an empty text node is created.</p>
		 * @return self
		 * @link http://php.net/manual/en/domtext.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $value = NULL) {}

		/**
		 * Adds new child at the end of the children
		 * <p>This function appends a child to an existing list of children or creates a new list of children. The child can be created with e.g. <code>DOMDocument::createElement()</code>, <code>DOMDocument::createTextNode()</code> etc. or simply by using any other node.</p>
		 * @param \DOMNode $newnode <p>The appended child.</p>
		 * @return DOMNode <p>The node added.</p>
		 * @link http://php.net/manual/en/domnode.appendchild.php
		 * @since PHP 5, PHP 7
		 */
		public function appendChild(\DOMNode $newnode): \DOMNode {}

		/**
		 * Append the string to the end of the character data of the node
		 * <p>Append the string <code>data</code> to the end of the character data of the node.</p>
		 * @param string $data <p>The string to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.appenddata.php
		 * @since PHP 5, PHP 7
		 */
		public function appendData(string $data): void {}

		/**
		 * Clones a node
		 * <p>Creates a copy of the node.</p>
		 * @param bool $deep <p>Indicates whether to copy all descendant nodes. This parameter is defaulted to <b><code>FALSE</code></b>.</p>
		 * @return DOMNode <p>The cloned node.</p>
		 * @link http://php.net/manual/en/domnode.clonenode.php
		 * @since PHP 5, PHP 7
		 */
		public function cloneNode(bool $deep = NULL): \DOMNode {}

		/**
		 * Remove a range of characters from the node
		 * <p>Deletes <code>count</code> characters starting from position <code>offset</code>.</p>
		 * @param int $offset <p>The offset from which to start removing.</p>
		 * @param int $count <p>The number of characters to delete. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are deleted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.deletedata.php
		 * @since PHP 5, PHP 7
		 */
		public function deleteData(int $offset, int $count): void {}

		/**
		 * Get line number for a node
		 * <p>Gets line number for where the node is defined.</p>
		 * @return int <p>Always returns the line number where the node was defined in.</p>
		 * @link http://php.net/manual/en/domnode.getlineno.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLineNo(): int {}

		/**
		 * Get an XPath for a node
		 * <p>Gets an XPath location path for the node.</p>
		 * @return string <p>Returns a <code>string</code> containing the XPath, or <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/domnode.getnodepath.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getNodePath(): string {}

		/**
		 * Checks if node has attributes
		 * <p>This method checks if the node has attributes. The tested node has to be an <b><code>XML_ELEMENT_NODE</code></b>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.hasattributes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasAttributes(): bool {}

		/**
		 * Checks if node has children
		 * <p>This function checks if the node has children.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.haschildnodes.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildNodes(): bool {}

		/**
		 * Adds a new child before a reference node
		 * <p>This function inserts a new node right before the reference node. If you plan to do further modifications on the appended child you must use the returned node.</p>
		 * @param \DOMNode $newnode <p>The new node.</p>
		 * @param \DOMNode $refnode <p>The reference node. If not supplied, <code>newnode</code> is appended to the children.</p>
		 * @return DOMNode <p>The inserted node.</p>
		 * @link http://php.net/manual/en/domnode.insertbefore.php
		 * @since PHP 5, PHP 7
		 */
		public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

		/**
		 * Insert a string at the specified 16-bit unit offset
		 * <p>Inserts string <code>data</code> at position <code>offset</code>.</p>
		 * @param int $offset <p>The character offset at which to insert.</p>
		 * @param string $data <p>The string to insert.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.insertdata.php
		 * @since PHP 5, PHP 7
		 */
		public function insertData(int $offset, string $data): void {}

		/**
		 * Checks if the specified namespaceURI is the default namespace or not
		 * <p>Tells whether <code>namespaceURI</code> is the default namespace.</p>
		 * @param string $namespaceURI <p>The namespace URI to look for.</p>
		 * @return bool <p>Return <b><code>TRUE</code></b> if <code>namespaceURI</code> is the default namespace, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domnode.isdefaultnamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefaultNamespace(string $namespaceURI): bool {}

		/**
		 * Returns whether this text node contains whitespace in element content
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domtext.iselementcontentwhitespace.php
		 * @since No version information available, might only be in Git
		 */
		public function isElementContentWhitespace(): bool {}

		/**
		 * Indicates if two nodes are the same node
		 * <p>This function indicates if two nodes are the same node. The comparison is <i>not</i> based on content</p>
		 * @param \DOMNode $node <p>The compared node.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issamenode.php
		 * @since PHP 5, PHP 7
		 */
		public function isSameNode(\DOMNode $node): bool {}

		/**
		 * Checks if feature is supported for specified version
		 * <p>Checks if the asked <code>feature</code> is supported for the specified <code>version</code>.</p>
		 * @param string $feature <p>The feature to test. See the example of <code>DOMImplementation::hasFeature()</code> for a list of features.</p>
		 * @param string $version <p>The version number of the <code>feature</code> to test.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domnode.issupported.php
		 * @since PHP 5, PHP 7
		 */
		public function isSupported(string $feature, string $version): bool {}

		/**
		 * Indicates whether this text node contains whitespace
		 * <p>Indicates whether this text node contains only whitespace or it is empty. The text node is determined to contain whitespace in element content during the load of the document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if node contains zero or more whitespace characters and nothing else. Returns <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/domtext.iswhitespaceinelementcontent.php
		 * @since PHP 5, PHP 7
		 */
		public function isWhitespaceInElementContent(): bool {}

		/**
		 * Gets the namespace URI of the node based on the prefix
		 * <p>Gets the namespace URI of the node based on the <code>prefix</code>.</p>
		 * @param string $prefix <p>The prefix of the namespace.</p>
		 * @return string <p>The namespace URI of the node.</p>
		 * @link http://php.net/manual/en/domnode.lookupnamespaceuri.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupNamespaceUri(string $prefix): string {}

		/**
		 * Gets the namespace prefix of the node based on the namespace URI
		 * <p>Gets the namespace prefix of the node based on the namespace URI.</p>
		 * @param string $namespaceURI <p>The namespace URI.</p>
		 * @return string <p>The prefix of the namespace.</p>
		 * @link http://php.net/manual/en/domnode.lookupprefix.php
		 * @since PHP 5, PHP 7
		 */
		public function lookupPrefix(string $namespaceURI): string {}

		/**
		 * Normalizes the node
		 * <p>Remove empty text nodes and merge adjacent text nodes in this node and all its children.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domnode.normalize.php
		 * @since PHP 5, PHP 7
		 */
		public function normalize(): void {}

		/**
		 * Removes child from list of children
		 * <p>This functions removes a child from a list of children.</p>
		 * @param \DOMNode $oldnode <p>The removed child.</p>
		 * @return DOMNode <p>If the child could be removed the function returns the old child.</p>
		 * @link http://php.net/manual/en/domnode.removechild.php
		 * @since PHP 5, PHP 7
		 */
		public function removeChild(\DOMNode $oldnode): \DOMNode {}

		/**
		 * Replaces a child
		 * <p>This function replaces the child <code>oldnode</code> with the passed new node. If the <code>newnode</code> is already a child it will not be added a second time. If the replacement succeeds the old node is returned.</p>
		 * @param \DOMNode $newnode <p>The new node. It must be a member of the target document, i.e. created by one of the DOMDocument-&gt;createXXX() methods or imported in the document by DOMDocument::importNode.</p>
		 * @param \DOMNode $oldnode <p>The old node.</p>
		 * @return DOMNode <p>The old node or <b><code>FALSE</code></b> if an error occur.</p>
		 * @link http://php.net/manual/en/domnode.replacechild.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

		/**
		 * Replace a substring within the DOMCharacterData node
		 * <p>Replace <code>count</code> characters starting from position <code>offset</code> with <code>data</code>.</p>
		 * @param int $offset <p>The offset from which to start replacing.</p>
		 * @param int $count <p>The number of characters to replace. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all characters to the end of the data are replaced.</p>
		 * @param string $data <p>The string with which the range must be replaced.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.replacedata.php
		 * @since PHP 5, PHP 7
		 */
		public function replaceData(int $offset, int $count, string $data): void {}

		/**
		 * Breaks this node into two nodes at the specified offset
		 * <p>Breaks this node into two nodes at the specified <code>offset</code>, keeping both in the tree as siblings.</p><p>After being split, this node will contain all the content up to the <code>offset</code>. If the original node had a parent node, the new node is inserted as the next sibling of the original node. When the <code>offset</code> is equal to the length of this node, the new node has no data.</p>
		 * @param int $offset <p>The offset at which to split, starting from 0.</p>
		 * @return DOMText <p>The new node of the same type, which contains all the content at and after the <code>offset</code>.</p>
		 * @link http://php.net/manual/en/domtext.splittext.php
		 * @since PHP 5, PHP 7
		 */
		public function splitText(int $offset): \DOMText {}

		/**
		 * Extracts a range of data from the node
		 * <p>Returns the specified substring.</p>
		 * @param int $offset <p>Start offset of substring to extract.</p>
		 * @param int $count <p>The number of characters to extract.</p>
		 * @return string <p>The specified substring. If the sum of <code>offset</code> and <code>count</code> exceeds the length, then all 16-bit units to the end of the data are returned.</p>
		 * @link http://php.net/manual/en/domcharacterdata.substringdata.php
		 * @since PHP 5, PHP 7
		 */
		public function substringData(int $offset, int $count): string {}
	}

	/**
	 * <p>Supports XPath 1.0</p>
	 * @link http://php.net/manual/en/class.domxpath.php
	 * @since PHP 5, PHP 7
	 */
	class DOMXPath {

		/**
		 * @var DOMDocument
		 * @link http://php.net/manual/en/class.domxpath.php#domxpath.props.document
		 */
		public $document;

		/**
		 * Creates a new DOMXPath object
		 * <p>Creates a new DOMXPath object.</p>
		 * @param \DOMDocument $doc <p>The DOMDocument associated with the DOMXPath.</p>
		 * @return self
		 * @link http://php.net/manual/en/domxpath.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(\DOMDocument $doc) {}

		/**
		 * Evaluates the given XPath expression and returns a typed result if possible
		 * <p>Executes the given XPath <code>expression</code> and returns a typed result if possible.</p>
		 * @param string $expression <p>The XPath expression to execute.</p>
		 * @param \DOMNode $contextnode <p>The optional <code>contextnode</code> can be specified for doing relative XPath queries. By default, the queries are relative to the root element.</p>
		 * @param bool $registerNodeNS <p>The optional <code>registerNodeNS</code> can be specified to disable automatic registration of the context node.</p>
		 * @return mixed <p>Returns a typed result if possible or a DOMNodeList containing all nodes matching the given XPath <code>expression</code>.</p><p>If the <code>expression</code> is malformed or the <code>contextnode</code> is invalid, <b>DOMXPath::evaluate()</b> returns <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/domxpath.evaluate.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function evaluate(string $expression, \DOMNode $contextnode = NULL, bool $registerNodeNS = TRUE) {}

		/**
		 * Evaluates the given XPath expression
		 * <p>Executes the given XPath <code>expression</code>.</p>
		 * @param string $expression <p>The XPath expression to execute.</p>
		 * @param \DOMNode $contextnode <p>The optional <code>contextnode</code> can be specified for doing relative XPath queries. By default, the queries are relative to the root element.</p>
		 * @param bool $registerNodeNS <p>The optional <code>registerNodeNS</code> can be specified to disable automatic registration of the context node.</p>
		 * @return DOMNodeList <p>Returns a DOMNodeList containing all nodes matching the given XPath <code>expression</code>. Any expression which does not return nodes will return an empty DOMNodeList.</p><p>If the <code>expression</code> is malformed or the <code>contextnode</code> is invalid, <b>DOMXPath::query()</b> returns <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/domxpath.query.php
		 * @since PHP 5, PHP 7
		 */
		public function query(string $expression, \DOMNode $contextnode = NULL, bool $registerNodeNS = TRUE): \DOMNodeList {}

		/**
		 * Registers the namespace with the DOMXPath object
		 * <p>Registers the <code>namespaceURI</code> and <code>prefix</code> with the DOMXPath object.</p>
		 * @param string $prefix <p>The prefix.</p>
		 * @param string $namespaceURI <p>The URI of the namespace.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/domxpath.registernamespace.php
		 * @since PHP 5, PHP 7
		 */
		public function registerNamespace(string $prefix, string $namespaceURI): bool {}

		/**
		 * Register PHP functions as XPath functions
		 * <p>This method enables the ability to use PHP functions within XPath expressions.</p>
		 * @param mixed $restrict <p>Use this parameter to only allow certain functions to be called from XPath.</p> <p>This parameter can be either a <code>string</code> (a function name) or an <code>array</code> of function names.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/domxpath.registerphpfunctions.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function registerPhpFunctions($restrict = NULL): void {}
	}

	/**
	 * Gets a DOMElement object from a SimpleXMLElement object
	 * <p>This function takes the node <code>node</code> of class SimpleXML and makes it into a DOMElement node. This new object can then be used as a native DOMElement node.</p>
	 * @param \SimpleXMLElement $node <p>The SimpleXMLElement node.</p>
	 * @return DOMElement <p>The DOMElement node added or <b><code>FALSE</code></b> if any errors occur.</p>
	 * @link http://php.net/manual/en/function.dom-import-simplexml.php
	 * @see simplexml_import_dom()
	 * @since PHP 5, PHP 7
	 */
	function dom_import_simplexml(\SimpleXMLElement $node): \DOMElement {}

	/**
	 * If any node is inserted somewhere it doesn't belong
	 */
	define('DOM_HIERARCHY_REQUEST_ERR', 3);

	/**
	 * If index or size is negative, or greater than the allowed value.
	 */
	define('DOM_INDEX_SIZE_ERR', 1);

	/**
	 * If an attempt is made to add an attribute that is already in use elsewhere.
	 */
	define('DOM_INUSE_ATTRIBUTE_ERR', 10);

	/**
	 * If a parameter or an operation is not supported by the underlying object.
	 */
	define('DOM_INVALID_ACCESS_ERR', 15);

	/**
	 * If an invalid or illegal character is specified, such as in a name.
	 */
	define('DOM_INVALID_CHARACTER_ERR', 5);

	/**
	 * If an attempt is made to modify the type of the underlying object.
	 */
	define('DOM_INVALID_MODIFICATION_ERR', 13);

	/**
	 * If an attempt is made to use an object that is not, or is no longer, usable.
	 */
	define('DOM_INVALID_STATE_ERR', 11);

	/**
	 * If an attempt is made to create or change an object in a way which is incorrect with regard to namespaces.
	 */
	define('DOM_NAMESPACE_ERR', 14);

	/**
	 * If data is specified for a node which does not support data.
	 */
	define('DOM_NO_DATA_ALLOWED_ERR', 6);

	/**
	 * If an attempt is made to modify an object where modifications are not allowed.
	 */
	define('DOM_NO_MODIFICATION_ALLOWED_ERR', 7);

	/**
	 * If an attempt is made to reference a node in a context where it does not exist.
	 */
	define('DOM_NOT_FOUND_ERR', 8);

	/**
	 * If the implementation does not support the requested type of object or operation.
	 */
	define('DOM_NOT_SUPPORTED_ERR', 9);

	/**
	 * Error code not part of the DOM specification. Meant for PHP errors.
	 */
	define('DOM_PHP_ERR', 0);

	/**
	 * If an invalid or illegal string is specified.
	 */
	define('DOM_SYNTAX_ERR', 12);

	/**
	 * If a call to a method such as insertBefore or removeChild would make the Node invalid with respect to "partial validity", this exception would be raised and the operation would not be done.
	 */
	define('DOM_VALIDATION_ERR', 16);

	/**
	 * If a node is used in a different document than the one that created it.
	 */
	define('DOM_WRONG_DOCUMENT_ERR', 4);

	/**
	 * If the specified range of text does not fit into a <b>DOMString</b>.
	 */
	define('DOMSTRING_SIZE_ERR', 2);

	/**
	 * 1
	 */
	define('XML_ATTRIBUTE_CDATA', 1);

	/**
	 * 16
	 */
	define('XML_ATTRIBUTE_DECL_NODE', 16);

	/**
	 * 5
	 */
	define('XML_ATTRIBUTE_ENTITY', 6);

	/**
	 * 9
	 */
	define('XML_ATTRIBUTE_ENUMERATION', 9);

	/**
	 * 2
	 */
	define('XML_ATTRIBUTE_ID', 2);

	/**
	 * 3
	 */
	define('XML_ATTRIBUTE_IDREF', 3);

	/**
	 * 4
	 */
	define('XML_ATTRIBUTE_IDREFS', 4);

	/**
	 * 7
	 */
	define('XML_ATTRIBUTE_NMTOKEN', 7);

	/**
	 * 8
	 */
	define('XML_ATTRIBUTE_NMTOKENS', 8);

	/**
	 * Node is a DOMAttr
	 */
	define('XML_ATTRIBUTE_NODE', 2);

	/**
	 * 10
	 */
	define('XML_ATTRIBUTE_NOTATION', 10);

	/**
	 * Node is a DOMCharacterData
	 */
	define('XML_CDATA_SECTION_NODE', 4);

	/**
	 * Node is a DOMComment
	 */
	define('XML_COMMENT_NODE', 8);

	/**
	 * Node is a DOMDocumentFragment
	 */
	define('XML_DOCUMENT_FRAG_NODE', 11);

	/**
	 * Node is a DOMDocument
	 */
	define('XML_DOCUMENT_NODE', 9);

	/**
	 * Node is a DOMDocumentType
	 */
	define('XML_DOCUMENT_TYPE_NODE', 10);

	/**
	 * 14
	 */
	define('XML_DTD_NODE', 14);

	/**
	 * 15
	 */
	define('XML_ELEMENT_DECL_NODE', 15);

	/**
	 * Node is a DOMElement
	 */
	define('XML_ELEMENT_NODE', 1);

	/**
	 * 17
	 */
	define('XML_ENTITY_DECL_NODE', 17);

	/**
	 * Node is a DOMEntity
	 */
	define('XML_ENTITY_NODE', 6);

	/**
	 * Node is a DOMEntityReference
	 */
	define('XML_ENTITY_REF_NODE', 5);

	/**
	 * 13
	 */
	define('XML_HTML_DOCUMENT_NODE', 13);

	/**
	 * 18
	 */
	define('XML_NAMESPACE_DECL_NODE', 18);

	/**
	 * Node is a DOMNotation
	 */
	define('XML_NOTATION_NODE', 12);

	/**
	 * Node is a DOMProcessingInstruction
	 */
	define('XML_PI_NODE', 7);

	/**
	 * Node is a DOMText
	 */
	define('XML_TEXT_NODE', 3);

}
