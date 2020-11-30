<?php



namespace {

	/**
	 * <p>Represents an element in an XML document.</p>
	 * @link http://php.net/manual/en/class.simplexmlelement.php
	 * @since PHP 5, PHP 7
	 */
	class SimpleXMLElement implements \Traversable {

		/**
		 * Creates a new SimpleXMLElement object
		 * <p>Creates a new SimpleXMLElement object.</p>
		 * @param string $data <p>A well-formed XML string or the path or URL to an XML document if <code>data_is_url</code> is <b><code>TRUE</code></b>.</p>
		 * @param int $options <p>Optionally used to specify additional Libxml parameters.</p> <p><b>Note</b>:</p><p>It may be necessary to pass <b><code>LIBXML_PARSEHUGE</code></b> to be able to process deeply nested XML or very large text nodes.</p>
		 * @param bool $data_is_url <p>By default, <code>data_is_url</code> is <b><code>FALSE</code></b>. Use <b><code>TRUE</code></b> to specify that <code>data</code> is a path or URL to an XML document instead of <code>string</code> data.</p>
		 * @param string $ns <p>Namespace prefix or URI.</p>
		 * @param bool $is_prefix <p><b><code>TRUE</code></b> if <code>ns</code> is a prefix, <b><code>FALSE</code></b> if it's a URI; defaults to <b><code>FALSE</code></b>.</p>
		 * @return self <p>Returns a <code>SimpleXMLElement</code> object representing <code>data</code>.</p>
		 * @link http://php.net/manual/en/simplexmlelement.construct.php
		 * @see simplexml_load_string(), simplexml_load_file(), libxml_use_internal_errors()
		 * @since PHP 5, PHP 7
		 */
		final public function __construct(string $data, int $options = 0, bool $data_is_url = FALSE, string $ns = "", bool $is_prefix = FALSE) {}

		/**
		 * Returns the string content
		 * <p>Returns text content that is directly in this element. Does not return text content that is inside this element's children.</p>
		 * @return string <p>Returns the string content on success or an empty string on failure.</p>
		 * @link http://php.net/manual/en/simplexmlelement.tostring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Adds an attribute to the SimpleXML element
		 * <p>Adds an attribute to the SimpleXML element.</p>
		 * @param string $name <p>The name of the attribute to add.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @param string $namespace <p>If specified, the namespace to which the attribute belongs.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/simplexmlelement.addattribute.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function addAttribute(string $name, string $value = NULL, string $namespace = NULL): void {}

		/**
		 * Adds a child element to the XML node
		 * <p>Adds a child element to the node and returns a SimpleXMLElement of the child.</p>
		 * @param string $name <p>The name of the child element to add.</p>
		 * @param string $value <p>If specified, the value of the child element.</p>
		 * @param string $namespace <p>If specified, the namespace to which the child element belongs.</p>
		 * @return SimpleXMLElement <p>The <i>addChild</i> method returns a <code>SimpleXMLElement</code> object representing the child added to the XML node.</p>
		 * @link http://php.net/manual/en/simplexmlelement.addchild.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function addChild(string $name, string $value = NULL, string $namespace = NULL): \SimpleXMLElement {}

		/**
		 * Return a well-formed XML string based on SimpleXML element
		 * <p>The <i>asXML</i> method formats the parent object's data in XML version 1.0.</p>
		 * @param string $filename <p>If specified, the function writes the data to the file rather than returning it.</p>
		 * @return mixed <p>If the <code>filename</code> isn't specified, this function returns a <code>string</code> on success and <b><code>FALSE</code></b> on error. If the parameter is specified, it returns <b><code>TRUE</code></b> if the file was written successfully and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/simplexmlelement.asxml.php
		 * @since PHP 5, PHP 7
		 */
		public function asXML(string $filename = NULL) {}

		/**
		 * Identifies an element's attributes
		 * <p>This function provides the attributes and values defined within an xml tag.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param string $ns <p>An optional namespace for the retrieved attributes</p>
		 * @param bool $is_prefix <p>Default to <b><code>FALSE</code></b></p>
		 * @return SimpleXMLElement <p>Returns a SimpleXMLElement object that can be iterated over to loop through the attributes on the tag.</p><p>Returns <b><code>NULL</code></b> if called on a SimpleXMLElement object that already represents an attribute and not a tag.</p>
		 * @link http://php.net/manual/en/simplexmlelement.attributes.php
		 * @since PHP 5, PHP 7
		 */
		public function attributes(string $ns = NULL, bool $is_prefix = FALSE): \SimpleXMLElement {}

		/**
		 * Finds children of given node
		 * <p>This method finds the children of an element. The result follows normal iteration rules.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param string $ns <p>An XML namespace.</p>
		 * @param bool $is_prefix <p>If <code>is_prefix</code> is <b><code>TRUE</code></b>, <code>ns</code> will be regarded as a prefix. If <b><code>FALSE</code></b>, <code>ns</code> will be regarded as a namespace URL.</p>
		 * @return SimpleXMLElement <p>Returns a SimpleXMLElement element, whether the node has children or not.</p>
		 * @link http://php.net/manual/en/simplexmlelement.children.php
		 * @see count()
		 * @since PHP 5, PHP 7
		 */
		public function children(string $ns = NULL, bool $is_prefix = FALSE): \SimpleXMLElement {}

		/**
		 * Counts the children of an element
		 * <p>This method counts the number of children of an element.</p>
		 * @return int <p>Returns the number of elements of an element.</p>
		 * @link http://php.net/manual/en/simplexmlelement.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * Returns namespaces declared in document
		 * <p>Returns namespaces declared in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces declared in parent and child nodes. Otherwise, returns only namespaces declared in root node.</p>
		 * @param bool $from_root <p>Allows you to recursively check namespaces under a child node instead of from the root of the XML doc.</p>
		 * @return array <p>The <i>getDocNamespaces</i> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link http://php.net/manual/en/simplexmlelement.getdocnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getDocNamespaces(bool $recursive = FALSE, bool $from_root = TRUE): array {}

		/**
		 * Gets the name of the XML element
		 * <p>Gets the name of the XML element.</p>
		 * @return string <p>The <i>getName</i> method returns as a <code>string</code> the name of the XML tag referenced by the SimpleXMLElement object.</p>
		 * @link http://php.net/manual/en/simplexmlelement.getname.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Returns namespaces used in document
		 * <p>Returns namespaces used in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces used in parent and child nodes. Otherwise, returns only namespaces used in root node.</p>
		 * @return array <p>The <i>getNamespaces</i> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link http://php.net/manual/en/simplexmlelement.getnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getNamespaces(bool $recursive = FALSE): array {}

		/**
		 * Creates a prefix/ns context for the next XPath query
		 * <p>Creates a prefix/ns context for the next XPath query. In particular, this is helpful if the provider of the given XML document alters the namespace prefixes. <i>registerXPathNamespace</i> will create a prefix for the associated namespace, allowing one to access nodes in that namespace without the need to change code to allow for the new prefixes dictated by the provider.</p>
		 * @param string $prefix <p>The namespace prefix to use in the XPath query for the namespace given in <code>ns</code>.</p>
		 * @param string $ns <p>The namespace to use for the XPath query. This must match a namespace in use by the XML document or the XPath query using <code>prefix</code> will not return any results.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function registerXPathNamespace(string $prefix, string $ns): bool {}

		/**
		 * Runs XPath query on XML data
		 * <p>The <i>xpath</i> method searches the SimpleXML node for children matching the XPath <code>path</code>.</p>
		 * @param string $path <p>An XPath path</p>
		 * @return array <p>Returns an <code>array</code> of SimpleXMLElement objects or <b><code>FALSE</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/simplexmlelement.xpath.php
		 * @since PHP 5, PHP 7
		 */
		public function xpath(string $path): array {}
	}

	/**
	 * <p>The SimpleXMLIterator provides recursive iteration over all nodes of a SimpleXMLElement object.</p>
	 * @link http://php.net/manual/en/class.simplexmliterator.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	class SimpleXMLIterator extends \SimpleXMLElement implements \RecursiveIterator, \Countable {

		/**
		 * Creates a new SimpleXMLElement object
		 * <p>Creates a new SimpleXMLElement object.</p>
		 * @param string $data <p>A well-formed XML string or the path or URL to an XML document if <code>data_is_url</code> is <b><code>TRUE</code></b>.</p>
		 * @param int $options <p>Optionally used to specify additional Libxml parameters.</p> <p><b>Note</b>:</p><p>It may be necessary to pass <b><code>LIBXML_PARSEHUGE</code></b> to be able to process deeply nested XML or very large text nodes.</p>
		 * @param bool $data_is_url <p>By default, <code>data_is_url</code> is <b><code>FALSE</code></b>. Use <b><code>TRUE</code></b> to specify that <code>data</code> is a path or URL to an XML document instead of <code>string</code> data.</p>
		 * @param string $ns <p>Namespace prefix or URI.</p>
		 * @param bool $is_prefix <p><b><code>TRUE</code></b> if <code>ns</code> is a prefix, <b><code>FALSE</code></b> if it's a URI; defaults to <b><code>FALSE</code></b>.</p>
		 * @return self <p>Returns a <code>SimpleXMLElement</code> object representing <code>data</code>.</p>
		 * @link http://php.net/manual/en/simplexmlelement.construct.php
		 * @see simplexml_load_string(), simplexml_load_file(), libxml_use_internal_errors()
		 * @since PHP 5, PHP 7
		 */
		final public function __construct(string $data, int $options = 0, bool $data_is_url = FALSE, string $ns = "", bool $is_prefix = FALSE) {}

		/**
		 * Returns the string content
		 * <p>Returns text content that is directly in this element. Does not return text content that is inside this element's children.</p>
		 * @return string <p>Returns the string content on success or an empty string on failure.</p>
		 * @link http://php.net/manual/en/simplexmlelement.tostring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Adds an attribute to the SimpleXML element
		 * <p>Adds an attribute to the SimpleXML element.</p>
		 * @param string $name <p>The name of the attribute to add.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @param string $namespace <p>If specified, the namespace to which the attribute belongs.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/simplexmlelement.addattribute.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function addAttribute(string $name, string $value = NULL, string $namespace = NULL): void {}

		/**
		 * Adds a child element to the XML node
		 * <p>Adds a child element to the node and returns a SimpleXMLElement of the child.</p>
		 * @param string $name <p>The name of the child element to add.</p>
		 * @param string $value <p>If specified, the value of the child element.</p>
		 * @param string $namespace <p>If specified, the namespace to which the child element belongs.</p>
		 * @return SimpleXMLElement <p>The <i>addChild</i> method returns a <code>SimpleXMLElement</code> object representing the child added to the XML node.</p>
		 * @link http://php.net/manual/en/simplexmlelement.addchild.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function addChild(string $name, string $value = NULL, string $namespace = NULL): \SimpleXMLElement {}

		/**
		 * Return a well-formed XML string based on SimpleXML element
		 * <p>The <i>asXML</i> method formats the parent object's data in XML version 1.0.</p>
		 * @param string $filename <p>If specified, the function writes the data to the file rather than returning it.</p>
		 * @return mixed <p>If the <code>filename</code> isn't specified, this function returns a <code>string</code> on success and <b><code>FALSE</code></b> on error. If the parameter is specified, it returns <b><code>TRUE</code></b> if the file was written successfully and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/simplexmlelement.asxml.php
		 * @since PHP 5, PHP 7
		 */
		public function asXML(string $filename = NULL) {}

		/**
		 * Identifies an element's attributes
		 * <p>This function provides the attributes and values defined within an xml tag.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param string $ns <p>An optional namespace for the retrieved attributes</p>
		 * @param bool $is_prefix <p>Default to <b><code>FALSE</code></b></p>
		 * @return SimpleXMLElement <p>Returns a SimpleXMLElement object that can be iterated over to loop through the attributes on the tag.</p><p>Returns <b><code>NULL</code></b> if called on a SimpleXMLElement object that already represents an attribute and not a tag.</p>
		 * @link http://php.net/manual/en/simplexmlelement.attributes.php
		 * @since PHP 5, PHP 7
		 */
		public function attributes(string $ns = NULL, bool $is_prefix = FALSE): \SimpleXMLElement {}

		/**
		 * Finds children of given node
		 * <p>This method finds the children of an element. The result follows normal iteration rules.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param string $ns <p>An XML namespace.</p>
		 * @param bool $is_prefix <p>If <code>is_prefix</code> is <b><code>TRUE</code></b>, <code>ns</code> will be regarded as a prefix. If <b><code>FALSE</code></b>, <code>ns</code> will be regarded as a namespace URL.</p>
		 * @return SimpleXMLElement <p>Returns a SimpleXMLElement element, whether the node has children or not.</p>
		 * @link http://php.net/manual/en/simplexmlelement.children.php
		 * @see count()
		 * @since PHP 5, PHP 7
		 */
		public function children(string $ns = NULL, bool $is_prefix = FALSE): \SimpleXMLElement {}

		/**
		 * Counts the children of an element
		 * <p>This method counts the number of children of an element.</p>
		 * @return int <p>Returns the number of elements of an element.</p>
		 * @link http://php.net/manual/en/simplexmlelement.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function count(): int {}

		/**
		 * Returns the current element
		 * <p>This method returns the current element as a SimpleXMLIterator object or <b><code>NULL</code></b>.</p>
		 * @return mixed <p>Returns the current element as a SimpleXMLIterator object or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/simplexmliterator.current.php
		 * @since PHP 5, PHP 7
		 */
		public function current() {}

		/**
		 * Returns the sub-elements of the current element
		 * <p>This method returns a SimpleXMLIterator object containing sub-elements of the current SimpleXMLIterator element.</p>
		 * @return SimpleXMLIterator <p>Returns a SimpleXMLIterator object containing the sub-elements of the current element.</p>
		 * @link http://php.net/manual/en/simplexmliterator.getchildren.php
		 * @since PHP 5, PHP 7
		 */
		public function getChildren(): \SimpleXMLIterator {}

		/**
		 * Returns namespaces declared in document
		 * <p>Returns namespaces declared in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces declared in parent and child nodes. Otherwise, returns only namespaces declared in root node.</p>
		 * @param bool $from_root <p>Allows you to recursively check namespaces under a child node instead of from the root of the XML doc.</p>
		 * @return array <p>The <i>getDocNamespaces</i> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link http://php.net/manual/en/simplexmlelement.getdocnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getDocNamespaces(bool $recursive = FALSE, bool $from_root = TRUE): array {}

		/**
		 * Gets the name of the XML element
		 * <p>Gets the name of the XML element.</p>
		 * @return string <p>The <i>getName</i> method returns as a <code>string</code> the name of the XML tag referenced by the SimpleXMLElement object.</p>
		 * @link http://php.net/manual/en/simplexmlelement.getname.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Returns namespaces used in document
		 * <p>Returns namespaces used in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces used in parent and child nodes. Otherwise, returns only namespaces used in root node.</p>
		 * @return array <p>The <i>getNamespaces</i> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link http://php.net/manual/en/simplexmlelement.getnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getNamespaces(bool $recursive = FALSE): array {}

		/**
		 * Checks whether the current element has sub elements
		 * <p>This method checks whether the current SimpleXMLIterator element has sub-elements.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the current element has sub-elements, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/simplexmliterator.haschildren.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * Return current key
		 * <p>This method gets the XML tag name of the current element.</p>
		 * @return mixed <p>Returns the XML tag name of the element referenced by the current SimpleXMLIterator object or <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/simplexmliterator.key.php
		 * @since PHP 5, PHP 7
		 */
		public function key() {}

		/**
		 * Move to next element
		 * <p>This method moves the SimpleXMLIterator to the next element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/simplexmliterator.next.php
		 * @since PHP 5, PHP 7
		 */
		public function next(): void {}

		/**
		 * Creates a prefix/ns context for the next XPath query
		 * <p>Creates a prefix/ns context for the next XPath query. In particular, this is helpful if the provider of the given XML document alters the namespace prefixes. <i>registerXPathNamespace</i> will create a prefix for the associated namespace, allowing one to access nodes in that namespace without the need to change code to allow for the new prefixes dictated by the provider.</p>
		 * @param string $prefix <p>The namespace prefix to use in the XPath query for the namespace given in <code>ns</code>.</p>
		 * @param string $ns <p>The namespace to use for the XPath query. This must match a namespace in use by the XML document or the XPath query using <code>prefix</code> will not return any results.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function registerXPathNamespace(string $prefix, string $ns): bool {}

		/**
		 * Rewind to the first element
		 * <p>This method rewinds the SimpleXMLIterator to the first element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/simplexmliterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This method checks if the current element is valid after calls to <code>SimpleXMLIterator::rewind()</code> or <code>SimpleXMLIterator::next()</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the current element is valid, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/simplexmliterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		public function valid(): bool {}

		/**
		 * Runs XPath query on XML data
		 * <p>The <i>xpath</i> method searches the SimpleXML node for children matching the XPath <code>path</code>.</p>
		 * @param string $path <p>An XPath path</p>
		 * @return array <p>Returns an <code>array</code> of SimpleXMLElement objects or <b><code>FALSE</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/simplexmlelement.xpath.php
		 * @since PHP 5, PHP 7
		 */
		public function xpath(string $path): array {}
	}

	/**
	 * Get a SimpleXMLElement object from a DOM node
	 * <p>This function takes a node of a DOM document and makes it into a SimpleXML node. This new object can then be used as a native SimpleXML element.</p>
	 * @param \DOMNode $node <p>A DOM Element node</p>
	 * @param string $class_name <p>You may use this optional parameter so that <b>simplexml_import_dom()</b> will return an object of the specified class. That class should extend the <code>SimpleXMLElement</code> class.</p>
	 * @return SimpleXMLElement <p>Returns a <code>SimpleXMLElement</code> or <b><code>FALSE</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link http://php.net/manual/en/function.simplexml-import-dom.php
	 * @see dom_import_simplexml()
	 * @since PHP 5, PHP 7
	 */
	function simplexml_import_dom(\DOMNode $node, string $class_name = "SimpleXMLElement"): \SimpleXMLElement {}

	/**
	 * Interprets an XML file into an object
	 * <p>Convert the well-formed XML document in the given file to an object.</p>
	 * @param string $filename <p>Path to the XML file</p> <p><b>Note</b>:</p><p>Libxml 2 unescapes the URI, so if you want to pass e.g. <i>b&amp;c</i> as the URI parameter <i>a</i>, you have to call <i>simplexml_load_file(rawurlencode('http://example.com/&#63;a=' . urlencode('b&amp;c')))</i>. Since PHP 5.1.0 you don't need to do this because PHP will do it for you.</p>
	 * @param string $class_name <p>You may use this optional parameter so that <b>simplexml_load_file()</b> will return an object of the specified class. That class should extend the <code>SimpleXMLElement</code> class.</p>
	 * @param int $options <p>Since PHP 5.1.0 and Libxml 2.6.0, you may also use the <code>options</code> parameter to specify additional Libxml parameters.</p>
	 * @param string $ns <p>Namespace prefix or URI.</p>
	 * @param bool $is_prefix <p><b><code>TRUE</code></b> if <code>ns</code> is a prefix, <b><code>FALSE</code></b> if it's a URI; defaults to <b><code>FALSE</code></b>.</p>
	 * @return SimpleXMLElement <p>Returns an <code>object</code> of class <code>SimpleXMLElement</code> with properties containing the data held within the XML document, or <b><code>FALSE</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link http://php.net/manual/en/function.simplexml-load-file.php
	 * @see simplexml_load_string(), libxml_use_internal_errors()
	 * @since PHP 5, PHP 7
	 */
	function simplexml_load_file(string $filename, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = "", bool $is_prefix = FALSE): \SimpleXMLElement {}

	/**
	 * Interprets a string of XML into an object
	 * <p>Takes a well-formed XML string and returns it as an object.</p>
	 * @param string $data <p>A well-formed XML string</p>
	 * @param string $class_name <p>You may use this optional parameter so that <b>simplexml_load_string()</b> will return an object of the specified class. That class should extend the <code>SimpleXMLElement</code> class.</p>
	 * @param int $options <p>Since PHP 5.1.0 and Libxml 2.6.0, you may also use the <code>options</code> parameter to specify additional Libxml parameters.</p>
	 * @param string $ns <p>Namespace prefix or URI.</p>
	 * @param bool $is_prefix <p><b><code>TRUE</code></b> if <code>ns</code> is a prefix, <b><code>FALSE</code></b> if it's a URI; defaults to <b><code>FALSE</code></b>.</p>
	 * @return SimpleXMLElement <p>Returns an <code>object</code> of class <code>SimpleXMLElement</code> with properties containing the data held within the xml document, or <b><code>FALSE</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>FALSE</code></b>, but may also return a non-Boolean value which evaluates to <b><code>FALSE</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link http://php.net/manual/en/function.simplexml-load-string.php
	 * @see simplexml_load_file(), libxml_use_internal_errors()
	 * @since PHP 5, PHP 7
	 */
	function simplexml_load_string(string $data, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = "", bool $is_prefix = FALSE): \SimpleXMLElement {}

}
