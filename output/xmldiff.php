<?php



namespace XMLDiff {

	/**
	 * <p>Base abstract class for all the comparsion classes in the extension.</p>
	 * @link https://php.net/manual/en/class.xmldiff-base.php
	 * @since PECL xmldiff >= 0.8.0
	 */
	class Base {

		/**
		 * Constructor
		 * <p>Base constructor for all the worker classes in the xmldiff extension.</p>
		 * @param string $nsname <p>Custom namespace name for the diff document. The default namespace is http://www.locus.cz/diffmark and that's enough to avoid namespace conflicts. Use this parameter if you want to change it for some reason.</p>
		 * @return self
		 * @link https://php.net/manual/en/xmldiff-base.construct.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function __construct(string $nsname) {}

		/**
		 * Produce diff of two XML documents
		 * <p>Abstract diff method to be implemented by inheriting classes.</p><p>The basic purpose of this method is to produce diff of the two documents. The param order matters and will produce different output.</p>
		 * @param mixed $from <p>Source XML document.</p>
		 * @param mixed $to <p>Target XML document.</p>
		 * @return mixed <p>Implementation dependent.</p>
		 * @link https://php.net/manual/en/xmldiff-base.diff.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		abstract public function diff($from, $to);

		/**
		 * Produce new XML document based on diff
		 * <p>Abstract merge method to be implemented by inheriting classes.</p><p>Basically the method purpose is to produce a new XML document based on the diff information.</p>
		 * @param mixed $src <p>Source XML document.</p>
		 * @param mixed $diff <p>Document produced by the diff method.</p>
		 * @return mixed <p>Implementation dependent.</p>
		 * @link https://php.net/manual/en/xmldiff-base.merge.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		abstract public function merge($src, $diff);
	}

	/**
	 * @link https://php.net/manual/en/class.xmldiff-dom.php
	 * @since PECL xmldiff >= 0.8.0
	 */
	class DOM extends \XMLDiff\Base {

		/**
		 * Constructor
		 * <p>Base constructor for all the worker classes in the xmldiff extension.</p>
		 * @param string $nsname <p>Custom namespace name for the diff document. The default namespace is http://www.locus.cz/diffmark and that's enough to avoid namespace conflicts. Use this parameter if you want to change it for some reason.</p>
		 * @return self
		 * @link https://php.net/manual/en/xmldiff-base.construct.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function __construct(string $nsname) {}

		/**
		 * Diff two DOMDocument objects
		 * <p>Diff two DOMDocument instances and produce the new one containing the diff information.</p>
		 * @param \DOMDocument $from <p>Source DOMDocument object.</p>
		 * @param \DOMDocument $to <p>Target DOMDocument object.</p>
		 * @return DOMDocument <p>DOMDocument with the diff information or NULL.</p>
		 * @link https://php.net/manual/en/xmldiff-dom.diff.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function diff(\DOMDocument $from, \DOMDocument $to): \DOMDocument {}

		/**
		 * Produce merged DOMDocument
		 * <p>Create new DOMDocument based on the diff.</p>
		 * @param \DOMDocument $src <p>Source DOMDocument object.</p>
		 * @param \DOMDocument $diff <p>DOMDocument object containing the diff information.</p>
		 * @return DOMDocument <p>Merged DOMDocument or NULL.</p>
		 * @link https://php.net/manual/en/xmldiff-dom.merge.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function merge(\DOMDocument $src, \DOMDocument $diff): \DOMDocument {}
	}

	/**
	 * @link https://php.net/manual/en/class.xmldiff-file.php
	 * @since PECL xmldiff >= 0.8.0
	 */
	class File extends \XMLDiff\Base {

		/**
		 * Constructor
		 * <p>Base constructor for all the worker classes in the xmldiff extension.</p>
		 * @param string $nsname <p>Custom namespace name for the diff document. The default namespace is http://www.locus.cz/diffmark and that's enough to avoid namespace conflicts. Use this parameter if you want to change it for some reason.</p>
		 * @return self
		 * @link https://php.net/manual/en/xmldiff-base.construct.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function __construct(string $nsname) {}

		/**
		 * Diff two XML files
		 * <p>Diff two local XML files and produce string with the diff information.</p>
		 * @param string $from <p>Path to the source document.</p>
		 * @param string $to <p>Path to the target document.</p>
		 * @return string <p>String with the XML document containing the diff information or NULL.</p>
		 * @link https://php.net/manual/en/xmldiff-file.diff.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function diff(string $from, string $to): string {}

		/**
		 * Produce merged XML document
		 * <p>Create new XML document based on diffs and source document.</p>
		 * @param string $src <p>Path to the source XML document.</p>
		 * @param string $diff <p>Path to the XML document with the diff information.</p>
		 * @return string <p>String with the new XML document or NULL.</p>
		 * @link https://php.net/manual/en/xmldiff-file.merge.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function merge(string $src, string $diff): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.xmldiff-memory.php
	 * @since PECL xmldiff >= 0.8.0
	 */
	class Memory extends \XMLDiff\Base {

		/**
		 * Constructor
		 * <p>Base constructor for all the worker classes in the xmldiff extension.</p>
		 * @param string $nsname <p>Custom namespace name for the diff document. The default namespace is http://www.locus.cz/diffmark and that's enough to avoid namespace conflicts. Use this parameter if you want to change it for some reason.</p>
		 * @return self
		 * @link https://php.net/manual/en/xmldiff-base.construct.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function __construct(string $nsname) {}

		/**
		 * Diff two XML documents
		 * <p>Diff two strings containing XML documents and produce the diff information.</p>
		 * @param string $from <p>Source XML document.</p>
		 * @param string $to <p>Target XML document.</p>
		 * @return string <p>String with the XML document containing the diff information or NULL.</p>
		 * @link https://php.net/manual/en/xmldiff-memory.diff.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function diff(string $from, string $to): string {}

		/**
		 * Produce merged XML document
		 * <p>Create new XML document based on diffs and source document.</p>
		 * @param string $src <p>Source XML document.</p>
		 * @param string $diff <p>XML document containing diff information.</p>
		 * @return string <p>String with the new XML document or NULL.</p>
		 * @link https://php.net/manual/en/xmldiff-memory.merge.php
		 * @since PECL xmldiff >= 0.8.0
		 */
		public function merge(string $src, string $diff): string {}
	}

}
