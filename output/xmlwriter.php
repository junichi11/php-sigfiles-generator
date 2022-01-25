<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.xmlwriter.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	class XMLWriter {

		/**
		 * End attribute
		 * <p>Object-oriented style</p><p>Ends the current attribute.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.endattribute.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endAttribute(): bool {}

		/**
		 * End current CDATA
		 * <p>Object-oriented style</p><p>Ends the current CDATA section.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.endcdata.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endCdata(): bool {}

		/**
		 * Create end comment
		 * <p>Object-oriented style</p><p>Ends the current comment.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.endcomment.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0
		 */
		public function endComment(): bool {}

		/**
		 * End current document
		 * <p>Object-oriented style</p><p>Ends the current document.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.enddocument.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endDocument(): bool {}

		/**
		 * End current DTD
		 * <p>Object-oriented style</p><p>Ends the DTD of the document.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.enddtd.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endDtd(): bool {}

		/**
		 * End current DTD AttList
		 * <p>Object-oriented style</p><p>Ends the current DTD attribute list.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.enddtdattlist.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endDtdAttlist(): bool {}

		/**
		 * End current DTD element
		 * <p>Object-oriented style</p><p>Ends the current DTD element.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.enddtdelement.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endDtdElement(): bool {}

		/**
		 * End current DTD Entity
		 * <p>Object-oriented style</p><p>Ends the current DTD entity.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.enddtdentity.php
		 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endDtdEntity(): bool {}

		/**
		 * End current element
		 * <p>Object-oriented style</p><p>Ends the current element.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.endelement.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endElement(): bool {}

		/**
		 * End current PI
		 * <p>Object-oriented style</p><p>Ends the current processing instruction.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.endpi.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function endPi(): bool {}

		/**
		 * Flush current buffer
		 * <p>Object-oriented style</p><p>Flushes the current buffer.</p>
		 * @param bool $empty <p>Whether to empty the buffer or not. Default is <b><code>true</code></b>.</p>
		 * @return string|int <p>If you opened the writer in memory, this function returns the generated XML buffer, Else, if using URI, this function will write the buffer and return the number of written bytes.</p>
		 * @link https://php.net/manual/en/xmlwriter.flush.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0
		 */
		public function flush(bool $empty = true): string|int {}

		/**
		 * End current element
		 * <p>Object-oriented style</p><p>End the current xml element. Writes an end tag even if the element is empty.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.fullendelement.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL xmlwriter >= 2.0.4
		 */
		public function fullEndElement(): bool {}

		/**
		 * Create new xmlwriter using memory for string output
		 * <p>Object-oriented style</p><p>Creates a new <code>XMLWriter</code> using memory for string output.</p>
		 * @return bool <p>Object-oriented style: Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Procedural style: Returns a new <code>XMLWriter</code> for later use with the xmlwriter functions on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.openmemory.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function openMemory(): bool {}

		/**
		 * Create new xmlwriter using source uri for output
		 * <p>Object-oriented style</p><p>Creates a new <code>XMLWriter</code> using <code>uri</code> for the output.</p>
		 * @param string $uri <p>The URI of the resource for the output.</p>
		 * @return bool <p>Object-oriented style: Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Procedural style: Returns a new <code>XMLWriter</code> instance for later use with the xmlwriter functions on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.openuri.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function openUri(string $uri): bool {}

		/**
		 * Returns current buffer
		 * <p>Object-oriented style</p><p>Returns the current buffer.</p>
		 * @param bool $flush <p>Whether to flush the output buffer or not. Default is <b><code>true</code></b>.</p>
		 * @return string <p>Returns the current buffer as a string.</p>
		 * @link https://php.net/manual/en/xmlwriter.outputmemory.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function outputMemory(bool $flush = true): string {}

		/**
		 * Toggle indentation on/off
		 * <p>Object-oriented style</p><p>Toggles indentation on or off.</p>
		 * @param bool $enable <p>Whether indentation is enabled.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.setindent.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function setIndent(bool $enable): bool {}

		/**
		 * Set string used for indenting
		 * <p>Object-oriented style</p><p>Sets the string which will be used to indent each element/attribute of the resulting xml.</p>
		 * @param string $indentation <p>The indentation string.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.setindentstring.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function setIndentString(string $indentation): bool {}

		/**
		 * Create start attribute
		 * <p>Object-oriented style</p><p>Starts an attribute.</p>
		 * @param string $name <p>The attribute name.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startattribute.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startAttribute(string $name): bool {}

		/**
		 * Create start namespaced attribute
		 * <p>Object-oriented style</p><p>Starts a namespaced attribute.</p>
		 * @param ?string $prefix <p>The namespace prefix.</p>
		 * @param string $name <p>The attribute name.</p>
		 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startattributens.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startAttributeNs(?string $prefix, string $name, ?string $namespace): bool {}

		/**
		 * Create start CDATA tag
		 * <p>Object-oriented style</p><p>Starts a CDATA.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startcdata.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startCdata(): bool {}

		/**
		 * Create start comment
		 * <p>Object-oriented style</p><p>Starts a comment.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startcomment.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0
		 */
		public function startComment(): bool {}

		/**
		 * Create document tag
		 * <p>Object-oriented style</p><p>Starts a document.</p>
		 * @param ?string $version <p>The version number of the document as part of the XML declaration.</p>
		 * @param ?string $encoding <p>The encoding of the document as part of the XML declaration.</p>
		 * @param ?string $standalone <p><code>yes</code> or <code>no</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startdocument.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startDocument(?string $version = "1.0", ?string $encoding = null, ?string $standalone = null): bool {}

		/**
		 * Create start DTD tag
		 * <p>Object-oriented style</p><p>Starts a DTD.</p>
		 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
		 * @param ?string $publicId <p>The external subset public identifier.</p>
		 * @param ?string $systemId <p>The external subset system identifier.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startdtd.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startDtd(string $qualifiedName, ?string $publicId = null, ?string $systemId = null): bool {}

		/**
		 * Create start DTD AttList
		 * <p>Object-oriented style</p><p>Starts a DTD attribute list.</p>
		 * @param string $name <p>The attribute list name.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startdtdattlist.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startDtdAttlist(string $name): bool {}

		/**
		 * Create start DTD element
		 * <p>Object-oriented style</p><p>Starts a DTD element.</p>
		 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startdtdelement.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startDtdElement(string $qualifiedName): bool {}

		/**
		 * Create start DTD Entity
		 * <p>Object-oriented style</p><p>Starts a DTD entity.</p>
		 * @param string $name <p>The name of the entity.</p>
		 * @param bool $isParam
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startdtdentity.php
		 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startDtdEntity(string $name, bool $isParam): bool {}

		/**
		 * Create start element tag
		 * <p>Object-oriented style</p><p>Starts an element.</p>
		 * @param string $name <p>The element name.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startelement.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startElement(string $name): bool {}

		/**
		 * Create start namespaced element tag
		 * <p>Object-oriented style</p><p>Starts a namespaced element.</p>
		 * @param ?string $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>null</code></b>, the namespace will be omitted.</p>
		 * @param string $name <p>The element name.</p>
		 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startelementns.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startElementNs(?string $prefix, string $name, ?string $namespace): bool {}

		/**
		 * Create start PI tag
		 * <p>Object-oriented style</p><p>Starts a processing instruction tag.</p>
		 * @param string $target <p>The target of the processing instruction.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.startpi.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function startPi(string $target): bool {}

		/**
		 * Write text
		 * <p>Object-oriented style</p><p>Writes a text.</p>
		 * @param string $content <p>The contents of the text. The characters <code>&lt;</code>, <code>&gt;</code>, <code>&amp;</code> and <code>"</code> are written as entity references (i.e. <code>&amp;lt;</code>, <code>&amp;gt;</code>, <code>&amp;amp;</code> and <code>&amp;quot;</code>, respectively). All other characters including <code>'</code> are written literally. To write the special XML characters literally, or to write literal entity references, <code>xmlwriter_write_raw()</code> has to be used.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.text.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function text(string $content): bool {}

		/**
		 * Write full attribute
		 * <p>Object-oriented style</p><p>Writes a full attribute.</p>
		 * @param string $name <p>The name of the attribute.</p>
		 * @param string $value <p>The value of the attribute.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writeattribute.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeAttribute(string $name, string $value): bool {}

		/**
		 * Write full namespaced attribute
		 * <p>Object-oriented style</p><p>Writes a full namespaced attribute.</p>
		 * @param ?string $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>null</code></b>, the namespace will be omitted.</p>
		 * @param string $name <p>The attribute name.</p>
		 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
		 * @param string $value <p>The attribute value.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writeattributens.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeAttributeNs(?string $prefix, string $name, ?string $namespace, string $value): bool {}

		/**
		 * Write full CDATA tag
		 * <p>Object-oriented style</p><p>Writes a full CDATA.</p>
		 * @param string $content <p>The contents of the CDATA.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writecdata.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeCdata(string $content): bool {}

		/**
		 * Write full comment tag
		 * <p>Object-oriented style</p><p>Writes a full comment.</p>
		 * @param string $content <p>The contents of the comment.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writecomment.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeComment(string $content): bool {}

		/**
		 * Write full DTD tag
		 * <p>Object-oriented style</p><p>Writes a full DTD.</p>
		 * @param string $name <p>The DTD name.</p>
		 * @param ?string $publicId <p>The external subset public identifier.</p>
		 * @param ?string $systemId <p>The external subset system identifier.</p>
		 * @param ?string $content <p>The content of the DTD.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writedtd.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeDtd(string $name, ?string $publicId = null, ?string $systemId = null, ?string $content = null): bool {}

		/**
		 * Write full DTD AttList tag
		 * <p>Object-oriented style</p><p>Writes a DTD attribute list.</p>
		 * @param string $name <p>The name of the DTD attribute list.</p>
		 * @param string $content <p>The content of the DTD attribute list.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writedtdattlist.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeDtdAttlist(string $name, string $content): bool {}

		/**
		 * Write full DTD element tag
		 * <p>Object-oriented style</p><p>Writes a full DTD element.</p>
		 * @param string $name <p>The name of the DTD element.</p>
		 * @param string $content <p>The content of the element.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writedtdelement.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeDtdElement(string $name, string $content): bool {}

		/**
		 * Write full DTD Entity tag
		 * <p>Object-oriented style</p><p>Writes a full DTD entity.</p>
		 * @param string $name <p>The name of the entity.</p>
		 * @param string $content <p>The content of the entity.</p>
		 * @param bool $isParam
		 * @param ?string $publicId
		 * @param ?string $systemId
		 * @param ?string $notationData
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writedtdentity.php
		 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeDtdEntity(string $name, string $content, bool $isParam = false, ?string $publicId = null, ?string $systemId = null, ?string $notationData = null): bool {}

		/**
		 * Write full element tag
		 * <p>Object-oriented style</p><p>Writes a full element tag.</p>
		 * @param string $name <p>The element name.</p>
		 * @param ?string $content <p>The element contents.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writeelement.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeElement(string $name, ?string $content = null): bool {}

		/**
		 * Write full namespaced element tag
		 * <p>Object-oriented style</p><p>Writes a full namespaced element tag.</p>
		 * @param ?string $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>null</code></b>, the namespace will be omitted.</p>
		 * @param string $name <p>The element name.</p>
		 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
		 * @param ?string $content <p>The element contents.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writeelementns.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writeElementNs(?string $prefix, string $name, ?string $namespace, ?string $content = null): bool {}

		/**
		 * Writes a PI
		 * <p>Object-oriented style</p><p>Writes a processing instruction.</p>
		 * @param string $target <p>The target of the processing instruction.</p>
		 * @param string $content <p>The content of the processing instruction.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writepi.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
		 */
		public function writePi(string $target, string $content): bool {}

		/**
		 * Write a raw XML text
		 * <p>Object-oriented style</p><p>Writes a raw xml text.</p>
		 * @param string $content <p>The text string to write.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/xmlwriter.writeraw.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL xmlwriter >= 2.0.4
		 */
		public function writeRaw(string $content): bool {}
	}

	/**
	 * End attribute
	 * <p>Object-oriented style</p><p>Ends the current attribute.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.endattribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_attribute(\XMLWriter $writer): bool {}

	/**
	 * End current CDATA
	 * <p>Object-oriented style</p><p>Ends the current CDATA section.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.endcdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_cdata(\XMLWriter $writer): bool {}

	/**
	 * Create end comment
	 * <p>Object-oriented style</p><p>Ends the current comment.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.endcomment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_end_comment(\XMLWriter $writer): bool {}

	/**
	 * End current document
	 * <p>Object-oriented style</p><p>Ends the current document.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.enddocument.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_document(\XMLWriter $writer): bool {}

	/**
	 * End current DTD
	 * <p>Object-oriented style</p><p>Ends the DTD of the document.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.enddtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd(\XMLWriter $writer): bool {}

	/**
	 * End current DTD AttList
	 * <p>Object-oriented style</p><p>Ends the current DTD attribute list.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.enddtdattlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_attlist(\XMLWriter $writer): bool {}

	/**
	 * End current DTD element
	 * <p>Object-oriented style</p><p>Ends the current DTD element.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.enddtdelement.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_element(\XMLWriter $writer): bool {}

	/**
	 * End current DTD Entity
	 * <p>Object-oriented style</p><p>Ends the current DTD entity.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.enddtdentity.php
	 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_entity(\XMLWriter $writer): bool {}

	/**
	 * End current element
	 * <p>Object-oriented style</p><p>Ends the current element.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.endelement.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_element(\XMLWriter $writer): bool {}

	/**
	 * End current PI
	 * <p>Object-oriented style</p><p>Ends the current processing instruction.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.endpi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_pi(\XMLWriter $writer): bool {}

	/**
	 * Flush current buffer
	 * <p>Object-oriented style</p><p>Flushes the current buffer.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $empty <p>Whether to empty the buffer or not. Default is <b><code>true</code></b>.</p>
	 * @return string|int <p>If you opened the writer in memory, this function returns the generated XML buffer, Else, if using URI, this function will write the buffer and return the number of written bytes.</p>
	 * @link https://php.net/manual/en/xmlwriter.flush.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_flush(\XMLWriter $writer, bool $empty = true): string|int {}

	/**
	 * End current element
	 * <p>Object-oriented style</p><p>End the current xml element. Writes an end tag even if the element is empty.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.fullendelement.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_full_end_element(\XMLWriter $writer): bool {}

	/**
	 * Create new xmlwriter using memory for string output
	 * <p>Object-oriented style</p><p>Creates a new <code>XMLWriter</code> using memory for string output.</p>
	 * @return XMLWriter|false <p>Object-oriented style: Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Procedural style: Returns a new <code>XMLWriter</code> for later use with the xmlwriter functions on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.openmemory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_memory(): \XMLWriter|false {}

	/**
	 * Create new xmlwriter using source uri for output
	 * <p>Object-oriented style</p><p>Creates a new <code>XMLWriter</code> using <code>uri</code> for the output.</p>
	 * @param string $uri <p>The URI of the resource for the output.</p>
	 * @return XMLWriter|false <p>Object-oriented style: Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Procedural style: Returns a new <code>XMLWriter</code> instance for later use with the xmlwriter functions on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.openuri.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_uri(string $uri): \XMLWriter|false {}

	/**
	 * Returns current buffer
	 * <p>Object-oriented style</p><p>Returns the current buffer.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $flush <p>Whether to flush the output buffer or not. Default is <b><code>true</code></b>.</p>
	 * @return string <p>Returns the current buffer as a string.</p>
	 * @link https://php.net/manual/en/xmlwriter.outputmemory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_output_memory(\XMLWriter $writer, bool $flush = true): string {}

	/**
	 * Toggle indentation on/off
	 * <p>Object-oriented style</p><p>Toggles indentation on or off.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param bool $enable <p>Whether indentation is enabled.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.setindent.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent(\XMLWriter $writer, bool $enable): bool {}

	/**
	 * Set string used for indenting
	 * <p>Object-oriented style</p><p>Sets the string which will be used to indent each element/attribute of the resulting xml.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $indentation <p>The indentation string.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.setindentstring.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent_string(\XMLWriter $writer, string $indentation): bool {}

	/**
	 * Create start attribute
	 * <p>Object-oriented style</p><p>Starts an attribute.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startattribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute(\XMLWriter $writer, string $name): bool {}

	/**
	 * Create start namespaced attribute
	 * <p>Object-oriented style</p><p>Starts a namespaced attribute.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param ?string $prefix <p>The namespace prefix.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startattributens.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace): bool {}

	/**
	 * Create start CDATA tag
	 * <p>Object-oriented style</p><p>Starts a CDATA.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startcdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_cdata(\XMLWriter $writer): bool {}

	/**
	 * Create start comment
	 * <p>Object-oriented style</p><p>Starts a comment.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startcomment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_start_comment(\XMLWriter $writer): bool {}

	/**
	 * Create document tag
	 * <p>Object-oriented style</p><p>Starts a document.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param ?string $version <p>The version number of the document as part of the XML declaration.</p>
	 * @param ?string $encoding <p>The encoding of the document as part of the XML declaration.</p>
	 * @param ?string $standalone <p><code>yes</code> or <code>no</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startdocument.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_document(\XMLWriter $writer, ?string $version = "1.0", ?string $encoding = null, ?string $standalone = null): bool {}

	/**
	 * Create start DTD tag
	 * <p>Object-oriented style</p><p>Starts a DTD.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
	 * @param ?string $publicId <p>The external subset public identifier.</p>
	 * @param ?string $systemId <p>The external subset system identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startdtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd(\XMLWriter $writer, string $qualifiedName, ?string $publicId = null, ?string $systemId = null): bool {}

	/**
	 * Create start DTD AttList
	 * <p>Object-oriented style</p><p>Starts a DTD attribute list.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The attribute list name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startdtdattlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_attlist(\XMLWriter $writer, string $name): bool {}

	/**
	 * Create start DTD element
	 * <p>Object-oriented style</p><p>Starts a DTD element.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $qualifiedName <p>The qualified name of the document type to create.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startdtdelement.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_element(\XMLWriter $writer, string $qualifiedName): bool {}

	/**
	 * Create start DTD Entity
	 * <p>Object-oriented style</p><p>Starts a DTD entity.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the entity.</p>
	 * @param bool $isParam
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startdtdentity.php
	 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_entity(\XMLWriter $writer, string $name, bool $isParam): bool {}

	/**
	 * Create start element tag
	 * <p>Object-oriented style</p><p>Starts an element.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The element name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startelement.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element(\XMLWriter $writer, string $name): bool {}

	/**
	 * Create start namespaced element tag
	 * <p>Object-oriented style</p><p>Starts a namespaced element.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param ?string $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>null</code></b>, the namespace will be omitted.</p>
	 * @param string $name <p>The element name.</p>
	 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startelementns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace): bool {}

	/**
	 * Create start PI tag
	 * <p>Object-oriented style</p><p>Starts a processing instruction tag.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $target <p>The target of the processing instruction.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.startpi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_pi(\XMLWriter $writer, string $target): bool {}

	/**
	 * Write text
	 * <p>Object-oriented style</p><p>Writes a text.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the text. The characters <code>&lt;</code>, <code>&gt;</code>, <code>&amp;</code> and <code>"</code> are written as entity references (i.e. <code>&amp;lt;</code>, <code>&amp;gt;</code>, <code>&amp;amp;</code> and <code>&amp;quot;</code>, respectively). All other characters including <code>'</code> are written literally. To write the special XML characters literally, or to write literal entity references, <code>xmlwriter_write_raw()</code> has to be used.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.text.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_text(\XMLWriter $writer, string $content): bool {}

	/**
	 * Write full attribute
	 * <p>Object-oriented style</p><p>Writes a full attribute.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the attribute.</p>
	 * @param string $value <p>The value of the attribute.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writeattribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute(\XMLWriter $writer, string $name, string $value): bool {}

	/**
	 * Write full namespaced attribute
	 * <p>Object-oriented style</p><p>Writes a full namespaced attribute.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param ?string $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>null</code></b>, the namespace will be omitted.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
	 * @param string $value <p>The attribute value.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writeattributens.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace, string $value): bool {}

	/**
	 * Write full CDATA tag
	 * <p>Object-oriented style</p><p>Writes a full CDATA.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the CDATA.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writecdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_cdata(\XMLWriter $writer, string $content): bool {}

	/**
	 * Write full comment tag
	 * <p>Object-oriented style</p><p>Writes a full comment.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The contents of the comment.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writecomment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_comment(\XMLWriter $writer, string $content): bool {}

	/**
	 * Write full DTD tag
	 * <p>Object-oriented style</p><p>Writes a full DTD.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The DTD name.</p>
	 * @param ?string $publicId <p>The external subset public identifier.</p>
	 * @param ?string $systemId <p>The external subset system identifier.</p>
	 * @param ?string $content <p>The content of the DTD.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writedtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd(\XMLWriter $writer, string $name, ?string $publicId = null, ?string $systemId = null, ?string $content = null): bool {}

	/**
	 * Write full DTD AttList tag
	 * <p>Object-oriented style</p><p>Writes a DTD attribute list.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the DTD attribute list.</p>
	 * @param string $content <p>The content of the DTD attribute list.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writedtdattlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_attlist(\XMLWriter $writer, string $name, string $content): bool {}

	/**
	 * Write full DTD element tag
	 * <p>Object-oriented style</p><p>Writes a full DTD element.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the DTD element.</p>
	 * @param string $content <p>The content of the element.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writedtdelement.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_element(\XMLWriter $writer, string $name, string $content): bool {}

	/**
	 * Write full DTD Entity tag
	 * <p>Object-oriented style</p><p>Writes a full DTD entity.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The name of the entity.</p>
	 * @param string $content <p>The content of the entity.</p>
	 * @param bool $isParam
	 * @param ?string $publicId
	 * @param ?string $systemId
	 * @param ?string $notationData
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writedtdentity.php
	 * @since PHP 5 >= 5.2.1, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_entity(\XMLWriter $writer, string $name, string $content, bool $isParam = false, ?string $publicId = null, ?string $systemId = null, ?string $notationData = null): bool {}

	/**
	 * Write full element tag
	 * <p>Object-oriented style</p><p>Writes a full element tag.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $name <p>The element name.</p>
	 * @param ?string $content <p>The element contents.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writeelement.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element(\XMLWriter $writer, string $name, ?string $content = null): bool {}

	/**
	 * Write full namespaced element tag
	 * <p>Object-oriented style</p><p>Writes a full namespaced element tag.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param ?string $prefix <p>The namespace prefix. If <code>prefix</code> is <b><code>null</code></b>, the namespace will be omitted.</p>
	 * @param string $name <p>The element name.</p>
	 * @param ?string $namespace <p>The namespace URI. If <code>namespace</code> is <b><code>null</code></b>, the namespace declaration will be omitted.</p>
	 * @param ?string $content <p>The element contents.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writeelementns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element_ns(\XMLWriter $writer, ?string $prefix, string $name, ?string $namespace, ?string $content = null): bool {}

	/**
	 * Writes a PI
	 * <p>Object-oriented style</p><p>Writes a processing instruction.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $target <p>The target of the processing instruction.</p>
	 * @param string $content <p>The content of the processing instruction.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writepi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_pi(\XMLWriter $writer, string $target, string $content): bool {}

	/**
	 * Write a raw XML text
	 * <p>Object-oriented style</p><p>Writes a raw xml text.</p>
	 * @param \XMLWriter $writer <p>The <code>XMLWriter</code> instance that is being modified. This object is returned from a call to <code>xmlwriter_open_uri()</code> or <code>xmlwriter_open_memory()</code>.</p>
	 * @param string $content <p>The text string to write.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/xmlwriter.writeraw.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_write_raw(\XMLWriter $writer, string $content): bool {}

}
