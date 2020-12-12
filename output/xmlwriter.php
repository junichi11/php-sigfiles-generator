<?php



namespace {

	/**
	 * End attribute
	 * <p>Ends the current attribute.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_attribute(\XMLWriter $writer): bool {}

	/**
	 * End current CDATA
	 * <p>Ends the current CDATA section.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_cdata(\XMLWriter $writer): bool {}

	/**
	 * Create end comment
	 * <p>Ends the current comment.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_end_comment(\XMLWriter $writer): bool {}

	/**
	 * End current document
	 * <p>Ends the current document.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-document.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_document(\XMLWriter $writer): bool {}

	/**
	 * End current DTD
	 * <p>Ends the DTD of the document.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd(\XMLWriter $writer): bool {}

	/**
	 * End current DTD AttList
	 * <p>Ends the current DTD attribute list.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_attlist(\XMLWriter $writer): bool {}

	/**
	 * End current DTD element
	 * <p>Ends the current DTD element.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_element(\XMLWriter $writer): bool {}

	/**
	 * End current DTD Entity
	 * <p>Ends the current DTD entity.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-dtd-entity.php
	 * @since PHP 5 >= 5.2.1, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_entity(\XMLWriter $writer): bool {}

	/**
	 * End current element
	 * <p>Ends the current element.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_element(\XMLWriter $writer): bool {}

	/**
	 * End current PI
	 * <p>Ends the current processing instruction.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-end-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_pi(\XMLWriter $writer): bool {}

	/**
	 * Flush current buffer
	 * <p>Flushes the current buffer.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $empty <p>Whether to empty the buffer or not. Default is <b><code>TRUE</code></b>.</p>
	 * @return string|int <p>If you opened the writer in memory, this function returns the generated XML buffer, Else, if using URI, this function will write the buffer and return the number of written bytes.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-flush.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_flush(\XMLWriter $writer, bool $empty = TRUE): string|int {}

	/**
	 * End current element
	 * <p>End the current xml element. Writes an end tag even if the element is empty.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-full-end-element.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_full_end_element(\XMLWriter $writer): bool {}

	/**
	 * Create new xmlwriter using memory for string output
	 * <p>Creates a new <b>XMLWriter</b> using memory for string output.</p>
	 * @return XMLWriter|false <p>Object oriented style: Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Procedural style: Returns a new <b>XMLWriter</b> for later use with the xmlwriter functions on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-open-memory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_memory(): \XMLWriter|false {}

	/**
	 * Create new xmlwriter using source uri for output
	 * <p>Creates a new <b>XMLWriter</b> using <code>uri</code> for the output.</p>
	 * @param string $uri <p>The URI of the resource for the output.</p>
	 * @return XMLWriter|false <p>Object oriented style: Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Procedural style: Returns a new <b>XMLWriter</b> instance for later use with the xmlwriter functions on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-open-uri.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_uri(string $uri): \XMLWriter|false {}

	/**
	 * Returns current buffer
	 * <p>Returns the current buffer.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $flush <p>Whether to flush the output buffer or not. Default is <b><code>TRUE</code></b>.</p>
	 * @return string <p>Returns the current buffer as a string.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-output-memory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_output_memory(\XMLWriter $writer, bool $flush = TRUE): string {}

	/**
	 * Toggle indentation on/off
	 * <p>Toggles indentation on or off.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $enable <p>Whether indentation is enabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-set-indent.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent(\XMLWriter $writer, bool $enable): bool {}

	/**
	 * Set string used for indenting
	 * <p>Sets the string which will be used to indent each element/attribute of the resulting xml.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $indentation <p>The indentation string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-set-indent-string.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent_string(\XMLWriter $writer, string $indentation): bool {}

	/**
	 * Create start attribute
	 * <p>Starts an attribute.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute(\XMLWriter $writer, string $name): bool {}

	/**
	 * Create start namespaced attribute
	 * <p>Starts a namespaced attribute.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string|null $prefix <p>The namespace prefix.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param string|null $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>NULL</code></b>, the namespace declaration will be omitted.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-attribute-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute_ns(\XMLWriter $writer, string|null $prefix, string $name, string|null $namespace): bool {}

	/**
	 * Create start CDATA tag
	 * <p>Starts a CDATA.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_cdata(\XMLWriter $writer): bool {}

	/**
	 * Create start comment
	 * <p>Starts a comment.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_start_comment(\XMLWriter $writer): bool {}

	/**
	 * Create document tag
	 * <p>Starts a document.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string|null $version <p>The version number of the document as part of the XML declaration.</p>
	 * @param string|null $encoding <p>The encoding of the document as part of the XML declaration.</p>
	 * @param string|null $standalone <p><code>yes</code> or <code>no</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-document.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_document(\XMLWriter $writer, string|null $version = "1.0", string|null $encoding = NULL, string|null $standalone = NULL): bool {}

	/**
	 * Create start DTD tag
	 * <p>Starts a DTD.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
	 * @param string|null $publicId <p>The external subset public identifier.</p>
	 * @param string|null $systemId <p>The external subset system identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd(\XMLWriter $writer, string $qualifiedName, string|null $publicId = NULL, string|null $systemId = NULL): bool {}

	/**
	 * Create start DTD AttList
	 * <p>Starts a DTD attribute list.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The attribute list name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_attlist(\XMLWriter $writer, string $name): bool {}

	/**
	 * Create start DTD element
	 * <p>Starts a DTD element.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_element(\XMLWriter $writer, string $qualifiedName): bool {}

	/**
	 * Create start DTD Entity
	 * <p>Starts a DTD entity.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the entity.</p>
	 * @param bool $isParam
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-dtd-entity.php
	 * @since PHP 5 >= 5.2.1, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_entity(\XMLWriter $writer, string $name, bool $isParam): bool {}

	/**
	 * Create start element tag
	 * <p>Starts an element.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The element name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element(\XMLWriter $writer, string $name): bool {}

	/**
	 * Create start namespaced element tag
	 * <p>Starts a namespaced element.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string|null $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>NULL</code></b>, the namespace will be omitted.</p>
	 * @param string $name <p>The element name.</p>
	 * @param string|null $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>NULL</code></b>, the namespace declaration will be omitted.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-element-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element_ns(\XMLWriter $writer, string|null $prefix, string $name, string|null $namespace): bool {}

	/**
	 * Create start PI tag
	 * <p>Starts a processing instruction tag.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $target <p>The target of the processing instruction.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-start-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_pi(\XMLWriter $writer, string $target): bool {}

	/**
	 * Write text
	 * <p>Writes a text.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the text. The characters <code>&lt;</code>, <code>&gt;</code>, <code>&amp;</code> and <code>"</code> are written as entity references (i.e. <code>&amp;lt;</code>, <code>&amp;gt;</code>, <code>&amp;amp;</code> and <code>&amp;quot;</code>, respectively). All other characters including <code>'</code> are written literally. To write the special XML characters literally, or to write literal entity references, <code>xmlwriter_write_raw()</code> has to be used.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-text.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_text(\XMLWriter $writer, string $content): bool {}

	/**
	 * Write full attribute
	 * <p>Writes a full attribute.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the attribute.</p>
	 * @param string $value <p>The value of the attribute.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute(\XMLWriter $writer, string $name, string $value): bool {}

	/**
	 * Write full namespaced attribute
	 * <p>Writes a full namespaced attribute.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string|null $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>NULL</code></b>, the namespace will be omitted.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param string|null $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>NULL</code></b>, the namespace declaration will be omitted.</p>
	 * @param string $value <p>The attribute value.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-attribute-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute_ns(\XMLWriter $writer, string|null $prefix, string $name, string|null $namespace, string $value): bool {}

	/**
	 * Write full CDATA tag
	 * <p>Writes a full CDATA.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the CDATA.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_cdata(\XMLWriter $writer, string $content): bool {}

	/**
	 * Write full comment tag
	 * <p>Writes a full comment.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the comment.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_comment(\XMLWriter $writer, string $content): bool {}

	/**
	 * Write full DTD tag
	 * <p>Writes a full DTD.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The DTD name.</p>
	 * @param string|null $publicId <p>The external subset public identifier.</p>
	 * @param string|null $systemId <p>The external subset system identifier.</p>
	 * @param string|null $content <p>The content of the DTD.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd(\XMLWriter $writer, string $name, string|null $publicId = NULL, string|null $systemId = NULL, string|null $content = NULL): bool {}

	/**
	 * Write full DTD AttList tag
	 * <p>Writes a DTD attribute list.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the DTD attribute list.</p>
	 * @param string $content <p>The content of the DTD attribute list.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_attlist(\XMLWriter $writer, string $name, string $content): bool {}

	/**
	 * Write full DTD element tag
	 * <p>Writes a full DTD element.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the DTD element.</p>
	 * @param string $content <p>The content of the element.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_element(\XMLWriter $writer, string $name, string $content): bool {}

	/**
	 * Write full DTD Entity tag
	 * <p>Writes a full DTD entity.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the entity.</p>
	 * @param string $content <p>The content of the entity.</p>
	 * @param bool $isParam
	 * @param string|null $publicId
	 * @param string|null $systemId
	 * @param string|null $notationData
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-dtd-entity.php
	 * @since PHP 5 >= 5.2.1, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_entity(\XMLWriter $writer, string $name, string $content, bool $isParam = FALSE, string|null $publicId = NULL, string|null $systemId = NULL, string|null $notationData = NULL): bool {}

	/**
	 * Write full element tag
	 * <p>Writes a full element tag.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The element name.</p>
	 * @param string|null $content <p>The element contents.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element(\XMLWriter $writer, string $name, string|null $content = NULL): bool {}

	/**
	 * Write full namespaced element tag
	 * <p>Writes a full namespaced element tag.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string|null $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>NULL</code></b>, the namespace will be omitted.</p>
	 * @param string $name <p>The element name.</p>
	 * @param string|null $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>NULL</code></b>, the namespace declaration will be omitted.</p>
	 * @param string|null $content <p>The element contents.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-element-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element_ns(\XMLWriter $writer, string|null $prefix, string $name, string|null $namespace, string|null $content = NULL): bool {}

	/**
	 * Writes a PI
	 * <p>Writes a processing instruction.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $target <p>The target of the processing instruction.</p>
	 * @param string $content <p>The content of the processing instruction.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_pi(\XMLWriter $writer, string $target, string $content): bool {}

	/**
	 * Write a raw XML text
	 * <p>Writes a raw xml text.</p>
	 * @param \XMLWriter $writer <p>The <b>XMLWriter</b> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The text string to write.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xmlwriter-write-raw.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_write_raw(\XMLWriter $writer, string $content): bool {}

}
