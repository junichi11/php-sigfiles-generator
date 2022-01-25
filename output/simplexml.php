<?php



namespace {

	/**
	 * <p>Represents an element in an XML document.</p>
	 * @link https://php.net/manual/en/class.simplexmlelement.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SimpleXMLElement implements \Stringable, \Countable, \RecursiveIterator {

		/**
		 * Creates a new SimpleXMLElement object
		 * <p>Creates a new <code>SimpleXMLElement</code> object.</p>
		 * @param string $data <p>A well-formed XML string or the path or URL to an XML document if <code>dataIsURL</code> is <b><code>true</code></b>.</p>
		 * @param int $options <p>Optionally used to specify additional Libxml parameters, which affect reading of XML documents. Options which affect the output of XML documents (e.g. <b><code>LIBXML_NOEMPTYTAG</code></b>) are silently ignored.</p> <p><b>Note</b>:</p><p>It may be necessary to pass <b><code>LIBXML_PARSEHUGE</code></b> to be able to process deeply nested XML or very large text nodes.</p>
		 * @param bool $dataIsURL <p>By default, <code>dataIsURL</code> is <b><code>false</code></b>. Use <b><code>true</code></b> to specify that <code>data</code> is a path or URL to an XML document instead of <code>string</code> data.</p>
		 * @param string $namespaceOrPrefix <p>Namespace prefix or URI.</p>
		 * @param bool $isPrefix <p><b><code>true</code></b> if <code>namespaceOrPrefix</code> is a prefix, <b><code>false</code></b> if it's a URI; defaults to <b><code>false</code></b>.</p>
		 * @return self <p>Returns a <code>SimpleXMLElement</code> object representing <code>data</code>.</p>
		 * @link https://php.net/manual/en/simplexmlelement.construct.php
		 * @see simplexml_load_string(), simplexml_load_file(), libxml_use_internal_errors(), libxml_set_streams_context()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $data, int $options = 0, bool $dataIsURL = false, string $namespaceOrPrefix = "", bool $isPrefix = false) {}

		/**
		 * Returns the string content
		 * <p>Returns text content that is directly in this element. Does not return text content that is inside this element's children.</p>
		 * @return string <p>Returns the string content on success or an empty string on failure.</p>
		 * @link https://php.net/manual/en/simplexmlelement.tostring.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Adds an attribute to the SimpleXML element
		 * <p>Adds an attribute to the SimpleXML element.</p>
		 * @param string $qualifiedName <p>The name of the attribute to add.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @param ?string $namespace <p>If specified, the namespace to which the attribute belongs.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/simplexmlelement.addattribute.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function addAttribute(string $qualifiedName, string $value, ?string $namespace = null): void {}

		/**
		 * Adds a child element to the XML node
		 * <p>Adds a child element to the node and returns a SimpleXMLElement of the child.</p>
		 * @param string $qualifiedName <p>The name of the child element to add.</p>
		 * @param ?string $value <p>If specified, the value of the child element.</p>
		 * @param ?string $namespace <p>If specified, the namespace to which the child element belongs.</p>
		 * @return ?SimpleXMLElement <p>The <code>addChild</code> method returns a <code>SimpleXMLElement</code> object representing the child added to the XML node on success; <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/simplexmlelement.addchild.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function addChild(string $qualifiedName, ?string $value = null, ?string $namespace = null): ?\SimpleXMLElement {}

		/**
		 * Return a well-formed XML string based on SimpleXML element
		 * <p>The <code>asXML</code> method formats the parent object's data in XML version 1.0.</p>
		 * @param ?string $filename <p>If a <code>string</code> value is provided, the function writes the data to the file rather than returning it.</p>
		 * @return string|bool <p>If the <code>filename</code> isn't specified, this function returns a <code>string</code> on success and <b><code>false</code></b> on error. If the parameter is specified, it returns <b><code>true</code></b> if the file was written successfully and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/simplexmlelement.asxml.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function asXML(?string $filename = null): string|bool {}

		/**
		 * Identifies an element's attributes
		 * <p>This function provides the attributes and values defined within an xml tag.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param ?string $namespaceOrPrefix <p>An optional namespace for the retrieved attributes</p>
		 * @param bool $isPrefix <p>Default to <b><code>false</code></b></p>
		 * @return ?SimpleXMLElement <p>Returns a <code>SimpleXMLElement</code> object that can be iterated over to loop through the attributes on the tag.</p><p>Returns <b><code>null</code></b> if called on a <code>SimpleXMLElement</code> object that already represents an attribute and not a tag.</p>
		 * @link https://php.net/manual/en/simplexmlelement.attributes.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function attributes(?string $namespaceOrPrefix = null, bool $isPrefix = false): ?\SimpleXMLElement {}

		/**
		 * Finds children of given node
		 * <p>This method finds the children of an element. The result follows normal iteration rules.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param ?string $namespaceOrPrefix <p>An XML namespace.</p>
		 * @param bool $isPrefix <p>If <code>isPrefix</code> is <b><code>true</code></b>, <code>namespaceOrPrefix</code> will be regarded as a prefix. If <b><code>false</code></b>, <code>namespaceOrPrefix</code> will be regarded as a namespace URL.</p>
		 * @return ?SimpleXMLElement <p>Returns a <code>SimpleXMLElement</code> element, whether the node has children or not, unless the node represents an attribute, in which case <b><code>null</code></b> is returned.</p>
		 * @link https://php.net/manual/en/simplexmlelement.children.php
		 * @see count()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function children(?string $namespaceOrPrefix = null, bool $isPrefix = false): ?\SimpleXMLElement {}

		/**
		 * Counts the children of an element
		 * <p>This method counts the number of children of an element.</p>
		 * @return int <p>Returns the number of elements of an element.</p>
		 * @link https://php.net/manual/en/simplexmlelement.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Returns namespaces declared in document
		 * <p>Returns namespaces declared in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces declared in parent and child nodes. Otherwise, returns only namespaces declared in root node.</p>
		 * @param bool $fromRoot <p>Allows you to recursively check namespaces under a child node instead of from the root of the XML doc.</p>
		 * @return array|false <p>The <code>getDocNamespaces</code> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link https://php.net/manual/en/simplexmlelement.getdocnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getDocNamespaces(bool $recursive = false, bool $fromRoot = true): array|false {}

		/**
		 * Gets the name of the XML element
		 * <p>Gets the name of the XML element.</p>
		 * @return string <p>The <code>getName</code> method returns as a <code>string</code> the name of the XML tag referenced by the SimpleXMLElement object.</p>
		 * @link https://php.net/manual/en/simplexmlelement.getname.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function getName(): string {}

		/**
		 * Returns namespaces used in document
		 * <p>Returns namespaces used in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces used in parent and child nodes. Otherwise, returns only namespaces used in root node.</p>
		 * @return array <p>The <code>getNamespaces</code> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link https://php.net/manual/en/simplexmlelement.getnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getNamespaces(bool $recursive = false): array {}

		/**
		 * Creates a prefix/ns context for the next XPath query
		 * <p>Creates a prefix/ns context for the next XPath query. In particular, this is helpful if the provider of the given XML document alters the namespace prefixes. <code>registerXPathNamespace</code> will create a prefix for the associated namespace, allowing one to access nodes in that namespace without the need to change code to allow for the new prefixes dictated by the provider.</p>
		 * @param string $prefix <p>The namespace prefix to use in the XPath query for the namespace given in <code>namespace</code>.</p>
		 * @param string $namespace <p>The namespace to use for the XPath query. This must match a namespace in use by the XML document or the XPath query using <code>prefix</code> will not return any results.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function registerXPathNamespace(string $prefix, string $namespace): bool {}

		/**
		 * Runs XPath query on XML data
		 * <p>The <code>xpath</code> method searches the SimpleXML node for children matching the XPath <code>expression</code>.</p>
		 * @param string $expression <p>An XPath path</p>
		 * @return array|null|false <p>Returns an <code>array</code> of SimpleXMLElement objects on success; or <b><code>null</code></b> or <b><code>false</code></b> in case of an error.</p>
		 * @link https://php.net/manual/en/simplexmlelement.xpath.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function xpath(string $expression): array|null|false {}
	}

	/**
	 * <p>The SimpleXMLIterator provides recursive iteration over all nodes of a <code>SimpleXMLElement</code> object.</p>
	 * @link https://php.net/manual/en/class.simplexmliterator.php
	 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
	 */
	class SimpleXMLIterator extends \SimpleXMLElement {

		/**
		 * Returns the string content
		 * <p>Returns text content that is directly in this element. Does not return text content that is inside this element's children.</p>
		 * @return string <p>Returns the string content on success or an empty string on failure.</p>
		 * @link https://php.net/manual/en/simplexmlelement.tostring.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Adds an attribute to the SimpleXML element
		 * <p>Adds an attribute to the SimpleXML element.</p>
		 * @param string $qualifiedName <p>The name of the attribute to add.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @param ?string $namespace <p>If specified, the namespace to which the attribute belongs.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/simplexmlelement.addattribute.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function addAttribute(string $qualifiedName, string $value, ?string $namespace = null): void {}

		/**
		 * Adds a child element to the XML node
		 * <p>Adds a child element to the node and returns a SimpleXMLElement of the child.</p>
		 * @param string $qualifiedName <p>The name of the child element to add.</p>
		 * @param ?string $value <p>If specified, the value of the child element.</p>
		 * @param ?string $namespace <p>If specified, the namespace to which the child element belongs.</p>
		 * @return ?SimpleXMLElement <p>The <code>addChild</code> method returns a <code>SimpleXMLElement</code> object representing the child added to the XML node on success; <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/simplexmlelement.addchild.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function addChild(string $qualifiedName, ?string $value = null, ?string $namespace = null): ?\SimpleXMLElement {}

		/**
		 * Return a well-formed XML string based on SimpleXML element
		 * <p>The <code>asXML</code> method formats the parent object's data in XML version 1.0.</p>
		 * @param ?string $filename <p>If a <code>string</code> value is provided, the function writes the data to the file rather than returning it.</p>
		 * @return string|bool <p>If the <code>filename</code> isn't specified, this function returns a <code>string</code> on success and <b><code>false</code></b> on error. If the parameter is specified, it returns <b><code>true</code></b> if the file was written successfully and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/simplexmlelement.asxml.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function asXML(?string $filename = null): string|bool {}

		/**
		 * Identifies an element's attributes
		 * <p>This function provides the attributes and values defined within an xml tag.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param ?string $namespaceOrPrefix <p>An optional namespace for the retrieved attributes</p>
		 * @param bool $isPrefix <p>Default to <b><code>false</code></b></p>
		 * @return ?SimpleXMLElement <p>Returns a <code>SimpleXMLElement</code> object that can be iterated over to loop through the attributes on the tag.</p><p>Returns <b><code>null</code></b> if called on a <code>SimpleXMLElement</code> object that already represents an attribute and not a tag.</p>
		 * @link https://php.net/manual/en/simplexmlelement.attributes.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function attributes(?string $namespaceOrPrefix = null, bool $isPrefix = false): ?\SimpleXMLElement {}

		/**
		 * Finds children of given node
		 * <p>This method finds the children of an element. The result follows normal iteration rules.</p><p><b>Note</b>: SimpleXML has made a rule of adding iterative properties to most methods. They cannot be viewed using <code>var_dump()</code> or anything else which can examine objects.</p>
		 * @param ?string $namespaceOrPrefix <p>An XML namespace.</p>
		 * @param bool $isPrefix <p>If <code>isPrefix</code> is <b><code>true</code></b>, <code>namespaceOrPrefix</code> will be regarded as a prefix. If <b><code>false</code></b>, <code>namespaceOrPrefix</code> will be regarded as a namespace URL.</p>
		 * @return ?SimpleXMLElement <p>Returns a <code>SimpleXMLElement</code> element, whether the node has children or not, unless the node represents an attribute, in which case <b><code>null</code></b> is returned.</p>
		 * @link https://php.net/manual/en/simplexmlelement.children.php
		 * @see count()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function children(?string $namespaceOrPrefix = null, bool $isPrefix = false): ?\SimpleXMLElement {}

		/**
		 * Counts the children of an element
		 * <p>This method counts the number of children of an element.</p>
		 * @return int <p>Returns the number of elements of an element.</p>
		 * @link https://php.net/manual/en/simplexmlelement.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Returns the current element
		 * <p>This method returns the current element as a <code>SimpleXMLIterator</code> object or <b><code>null</code></b>.</p>
		 * @return mixed <p>Returns the current element as a <code>SimpleXMLIterator</code> object or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/simplexmliterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Returns the sub-elements of the current element
		 * <p>This method returns a <code>SimpleXMLIterator</code> object containing sub-elements of the current <code>SimpleXMLIterator</code> element.</p>
		 * @return SimpleXMLIterator <p>Returns a <code>SimpleXMLIterator</code> object containing the sub-elements of the current element.</p>
		 * @link https://php.net/manual/en/simplexmliterator.getchildren.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getChildren(): \SimpleXMLIterator {}

		/**
		 * Returns namespaces declared in document
		 * <p>Returns namespaces declared in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces declared in parent and child nodes. Otherwise, returns only namespaces declared in root node.</p>
		 * @param bool $fromRoot <p>Allows you to recursively check namespaces under a child node instead of from the root of the XML doc.</p>
		 * @return array|false <p>The <code>getDocNamespaces</code> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link https://php.net/manual/en/simplexmlelement.getdocnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getDocNamespaces(bool $recursive = false, bool $fromRoot = true): array|false {}

		/**
		 * Gets the name of the XML element
		 * <p>Gets the name of the XML element.</p>
		 * @return string <p>The <code>getName</code> method returns as a <code>string</code> the name of the XML tag referenced by the SimpleXMLElement object.</p>
		 * @link https://php.net/manual/en/simplexmlelement.getname.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function getName(): string {}

		/**
		 * Returns namespaces used in document
		 * <p>Returns namespaces used in document</p>
		 * @param bool $recursive <p>If specified, returns all namespaces used in parent and child nodes. Otherwise, returns only namespaces used in root node.</p>
		 * @return array <p>The <code>getNamespaces</code> method returns an <code>array</code> of namespace names with their associated URIs.</p>
		 * @link https://php.net/manual/en/simplexmlelement.getnamespaces.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getNamespaces(bool $recursive = false): array {}

		/**
		 * Checks whether the current element has sub elements
		 * <p>This method checks whether the current <code>SimpleXMLIterator</code> element has sub-elements.</p>
		 * @return bool <p><b><code>true</code></b> if the current element has sub-elements, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/simplexmliterator.haschildren.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Return current key
		 * <p>This method gets the XML tag name of the current element.</p>
		 * @return mixed <p>Returns the XML tag name of the element referenced by the current <code>SimpleXMLIterator</code> object or <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/simplexmliterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move to next element
		 * <p>This method moves the <code>SimpleXMLIterator</code> to the next element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/simplexmliterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Creates a prefix/ns context for the next XPath query
		 * <p>Creates a prefix/ns context for the next XPath query. In particular, this is helpful if the provider of the given XML document alters the namespace prefixes. <code>registerXPathNamespace</code> will create a prefix for the associated namespace, allowing one to access nodes in that namespace without the need to change code to allow for the new prefixes dictated by the provider.</p>
		 * @param string $prefix <p>The namespace prefix to use in the XPath query for the namespace given in <code>namespace</code>.</p>
		 * @param string $namespace <p>The namespace to use for the XPath query. This must match a namespace in use by the XML document or the XPath query using <code>prefix</code> will not return any results.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function registerXPathNamespace(string $prefix, string $namespace): bool {}

		/**
		 * Rewind to the first element
		 * <p>This method rewinds the <code>SimpleXMLIterator</code> to the first element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/simplexmliterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This method checks if the current element is valid after calls to <code>SimpleXMLIterator::rewind()</code> or <code>SimpleXMLIterator::next()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/simplexmliterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}

		/**
		 * Runs XPath query on XML data
		 * <p>The <code>xpath</code> method searches the SimpleXML node for children matching the XPath <code>expression</code>.</p>
		 * @param string $expression <p>An XPath path</p>
		 * @return array|null|false <p>Returns an <code>array</code> of SimpleXMLElement objects on success; or <b><code>null</code></b> or <b><code>false</code></b> in case of an error.</p>
		 * @link https://php.net/manual/en/simplexmlelement.xpath.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function xpath(string $expression): array|null|false {}
	}

	/**
	 * Get a SimpleXMLElement object from a DOM node
	 * <p>This function takes a node of a DOM document and makes it into a SimpleXML node. This new object can then be used as a native SimpleXML element.</p>
	 * @param \SimpleXMLElement|\DOMNode $node <p>A DOM Element node</p>
	 * @param ?string $class_name <p>You may use this optional parameter so that <b>simplexml_import_dom()</b> will return an object of the specified class. That class should extend the <code>SimpleXMLElement</code> class.</p>
	 * @return ?SimpleXMLElement <p>Returns a <code>SimpleXMLElement</code> or <b><code>null</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.simplexml-import-dom.php
	 * @see dom_import_simplexml()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function simplexml_import_dom(\SimpleXMLElement|\DOMNode $node, ?string $class_name = SimpleXMLElement::class): ?\SimpleXMLElement {}

	/**
	 * Interprets an XML file into an object
	 * <p>Convert the well-formed XML document in the given file to an object.</p>
	 * @param string $filename <p>Path to the XML file</p>
	 * @param ?string $class_name <p>You may use this optional parameter so that <b>simplexml_load_file()</b> will return an object of the specified class. That class should extend the <code>SimpleXMLElement</code> class.</p>
	 * @param int $options <p>Since Libxml 2.6.0, you may also use the <code>options</code> parameter to specify additional Libxml parameters.</p>
	 * @param string $namespace_or_prefix <p>Namespace prefix or URI.</p>
	 * @param bool $is_prefix <p><b><code>true</code></b> if <code>namespace_or_prefix</code> is a prefix, <b><code>false</code></b> if it's a URI; defaults to <b><code>false</code></b>.</p>
	 * @return SimpleXMLElement|false <p>Returns an <code>object</code> of class <code>SimpleXMLElement</code> with properties containing the data held within the XML document, or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.simplexml-load-file.php
	 * @see simplexml_load_string(), libxml_use_internal_errors(), libxml_set_streams_context()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function simplexml_load_file(string $filename, ?string $class_name = SimpleXMLElement::class, int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): \SimpleXMLElement|false {}

	/**
	 * Interprets a string of XML into an object
	 * <p>Takes a well-formed XML string and returns it as an object.</p>
	 * @param string $data <p>A well-formed XML string</p>
	 * @param ?string $class_name <p>You may use this optional parameter so that <b>simplexml_load_string()</b> will return an object of the specified class. That class should extend the <code>SimpleXMLElement</code> class.</p>
	 * @param int $options <p>Since Libxml 2.6.0, you may also use the <code>options</code> parameter to specify additional Libxml parameters.</p>
	 * @param string $namespace_or_prefix <p>Namespace prefix or URI.</p>
	 * @param bool $is_prefix <p><b><code>true</code></b> if <code>namespace_or_prefix</code> is a prefix, <b><code>false</code></b> if it's a URI; defaults to <b><code>false</code></b>.</p>
	 * @return SimpleXMLElement|false <p>Returns an <code>object</code> of class <code>SimpleXMLElement</code> with properties containing the data held within the xml document, or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.simplexml-load-string.php
	 * @see simplexml_load_file(), libxml_use_internal_errors()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function simplexml_load_string(string $data, ?string $class_name = SimpleXMLElement::class, int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): \SimpleXMLElement|false {}

}
