<?php



namespace {

	/**
	 * End attribute
	 * <p>Ends the current attribute.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_attribute($xmlwriter): bool {}

	/**
	 * End current CDATA
	 * <p>Ends the current CDATA section.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_cdata($xmlwriter): bool {}

	/**
	 * Create end comment
	 * <p>Ends the current comment.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_end_comment($xmlwriter): bool {}

	/**
	 * End current document
	 * <p>Ends the current document.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-document.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_document($xmlwriter): bool {}

	/**
	 * End current DTD
	 * <p>Ends the DTD of the document.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd($xmlwriter): bool {}

	/**
	 * End current DTD AttList
	 * <p>Ends the current DTD attribute list.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_attlist($xmlwriter): bool {}

	/**
	 * End current DTD element
	 * <p>Ends the current DTD element.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_element($xmlwriter): bool {}

	/**
	 * End current DTD Entity
	 * <p>Ends the current DTD entity.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-entity.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_entity($xmlwriter): bool {}

	/**
	 * End current element
	 * <p>Ends the current element.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_element($xmlwriter): bool {}

	/**
	 * End current PI
	 * <p>Ends the current processing instruction.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-end-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_pi($xmlwriter): bool {}

	/**
	 * Flush current buffer
	 * <p>Flushes the current buffer.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $empty <p>Whether to empty the buffer or not. Default is <b><code>TRUE</code></b>.</p>
	 * @return mixed <p>If you opened the writer in memory, this function returns the generated XML buffer, Else, if using URI, this function will write the buffer and return the number of written bytes.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-flush.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_flush($xmlwriter, bool $empty = TRUE) {}

	/**
	 * End current element
	 * <p>End the current xml element. Writes an end tag even if the element is empty.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-full-end-element.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_full_end_element($xmlwriter): bool {}

	/**
	 * Create new xmlwriter using memory for string output
	 * <p>Creates a new <b>XMLWriter</b> using memory for string output.</p>
	 * @return resource <p>Object oriented style: Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Procedural style: Returns a new xmlwriter resource for later use with the xmlwriter functions on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-open-memory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_memory() {}

	/**
	 * Create new xmlwriter using source uri for output
	 * <p>Creates a new <b>XMLWriter</b> using <code>uri</code> for the output.</p>
	 * @param string $uri <p>The URI of the resource for the output.</p>
	 * @return resource <p>Object oriented style: Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Procedural style: Returns a new xmlwriter resource for later use with the xmlwriter functions on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-open-uri.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_uri(string $uri) {}

	/**
	 * Returns current buffer
	 * <p>Returns the current buffer.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $flush <p>Whether to flush the output buffer or not. Default is <b><code>TRUE</code></b>.</p>
	 * @return string <p>Returns the current buffer as a string.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-output-memory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_output_memory($xmlwriter, bool $flush = TRUE): string {}

	/**
	 * Toggle indentation on/off
	 * <p>Toggles indentation on or off.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $indent <p>Whether indentation is enabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-set-indent.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent($xmlwriter, bool $indent): bool {}

	/**
	 * Set string used for indenting
	 * <p>Sets the string which will be used to indent each element/attribute of the resulting xml.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $indentString <p>The indentation string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-set-indent-string.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent_string($xmlwriter, string $indentString): bool {}

	/**
	 * Create start attribute
	 * <p>Starts an attribute.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute($xmlwriter, string $name): bool {}

	/**
	 * Create start namespaced attribute
	 * <p>Starts a namespaced attribute.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $prefix <p>The namespace prefix.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param string $uri <p>The namespace URI.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-attribute-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute_ns($xmlwriter, string $prefix, string $name, string $uri): bool {}

	/**
	 * Create start CDATA tag
	 * <p>Starts a CDATA.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_cdata($xmlwriter): bool {}

	/**
	 * Create start comment
	 * <p>Starts a comment.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_start_comment($xmlwriter): bool {}

	/**
	 * Create document tag
	 * <p>Starts a document.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $version <p>The version number of the document as part of the XML declaration.</p>
	 * @param string $encoding <p>The encoding of the document as part of the XML declaration.</p>
	 * @param string $standalone <p><i>yes</i> or <i>no</i>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-document.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_document($xmlwriter, string $version = '1.0', string $encoding = NULL, string $standalone = NULL): bool {}

	/**
	 * Create start DTD tag
	 * <p>Starts a DTD.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
	 * @param string $publicId <p>The external subset public identifier.</p>
	 * @param string $systemId <p>The external subset system identifier.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd($xmlwriter, string $qualifiedName, string $publicId = NULL, string $systemId = NULL): bool {}

	/**
	 * Create start DTD AttList
	 * <p>Starts a DTD attribute list.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The attribute list name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_attlist($xmlwriter, string $name): bool {}

	/**
	 * Create start DTD element
	 * <p>Starts a DTD element.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_element($xmlwriter, string $qualifiedName): bool {}

	/**
	 * Create start DTD Entity
	 * <p>Starts a DTD entity.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the entity.</p>
	 * @param bool $isparam
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-entity.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_entity($xmlwriter, string $name, bool $isparam): bool {}

	/**
	 * Create start element tag
	 * <p>Starts an element.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The element name.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element($xmlwriter, string $name): bool {}

	/**
	 * Create start namespaced element tag
	 * <p>Starts a namespaced element.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $prefix <p>The namespace prefix.</p>
	 * @param string $name <p>The element name.</p>
	 * @param string $uri <p>The namespace URI.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-element-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element_ns($xmlwriter, string $prefix, string $name, string $uri): bool {}

	/**
	 * Create start PI tag
	 * <p>Starts a processing instruction tag.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $target <p>The target of the processing instruction.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-start-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_pi($xmlwriter, string $target): bool {}

	/**
	 * Write text
	 * <p>Writes a text.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the text.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-text.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_text($xmlwriter, string $content): bool {}

	/**
	 * Write full attribute
	 * <p>Writes a full attribute.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the attribute.</p>
	 * @param string $value <p>The value of the attribute.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute($xmlwriter, string $name, string $value): bool {}

	/**
	 * Write full namespaced attribute
	 * <p>Writes a full namespaced attribute.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $prefix <p>The namespace prefix.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param string $uri <p>The namespace URI.</p>
	 * @param string $content <p>The attribute value.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-attribute-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute_ns($xmlwriter, string $prefix, string $name, string $uri, string $content): bool {}

	/**
	 * Write full CDATA tag
	 * <p>Writes a full CDATA.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the CDATA.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_cdata($xmlwriter, string $content): bool {}

	/**
	 * Write full comment tag
	 * <p>Writes a full comment.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the comment.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_comment($xmlwriter, string $content): bool {}

	/**
	 * Write full DTD tag
	 * <p>Writes a full DTD.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The DTD name.</p>
	 * @param string $publicId <p>The external subset public identifier.</p>
	 * @param string $systemId <p>The external subset system identifier.</p>
	 * @param string $subset <p>The content of the DTD.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd($xmlwriter, string $name, string $publicId = NULL, string $systemId = NULL, string $subset = NULL): bool {}

	/**
	 * Write full DTD AttList tag
	 * <p>Writes a DTD attribute list.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the DTD attribute list.</p>
	 * @param string $content <p>The content of the DTD attribute list.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_attlist($xmlwriter, string $name, string $content): bool {}

	/**
	 * Write full DTD element tag
	 * <p>Writes a full DTD element.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the DTD element.</p>
	 * @param string $content <p>The content of the element.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_element($xmlwriter, string $name, string $content): bool {}

	/**
	 * Write full DTD Entity tag
	 * <p>Writes a full DTD entity.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the entity.</p>
	 * @param string $content <p>The content of the entity.</p>
	 * @param bool $pe
	 * @param string $pubid
	 * @param string $sysid
	 * @param string $ndataid
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-entity.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_entity($xmlwriter, string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid): bool {}

	/**
	 * Write full element tag
	 * <p>Writes a full element tag.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The element name.</p>
	 * @param string $content <p>The element contents.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element($xmlwriter, string $name, string $content = NULL): bool {}

	/**
	 * Write full namespaced element tag
	 * <p>Writes a full namespaced element tag.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $prefix <p>The namespace prefix.</p>
	 * @param string $name <p>The element name.</p>
	 * @param string $uri <p>The namespace URI.</p>
	 * @param string $content <p>The element contents.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-element-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element_ns($xmlwriter, string $prefix, string $name, string $uri, string $content = NULL): bool {}

	/**
	 * Writes a PI
	 * <p>Writes a processing instruction.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $target <p>The target of the processing instruction.</p>
	 * @param string $content <p>The content of the processing instruction.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_pi($xmlwriter, string $target, string $content): bool {}

	/**
	 * Write a raw XML text
	 * <p>Writes a raw xml text.</p>
	 * @param resource $xmlwriter <p>The XMLWriter <code>resource</code> that is being modified. This resource comes from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The text string to write.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.xmlwriter-write-raw.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_write_raw($xmlwriter, string $content): bool {}

}
