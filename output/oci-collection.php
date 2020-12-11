<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.OCI-Collection.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	class OCICollection {

		/**
		 * Appends element to the collection
		 * <p>Appends element to the end of the collection.</p>
		 * @param mixed $value <p>The value to be added to the collection. Can be a string or a number.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-collection.append.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function append($value): bool {}

		/**
		 * Assigns a value to the collection from another existing collection
		 * <p>Assigns a value to the collection from another, previously created collection. Both collections must be created with <code>oci_new_collection()</code> prior to using them.</p>
		 * @param \OCICollection $from <p>An instance of OCI-Collection.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-collection.assign.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function assign(\OCICollection $from): bool {}

		/**
		 * Assigns a value to the element of the collection
		 * <p>Assigns a value to the element with index <code>index</code>.</p>
		 * @param int $index <p>The element index. First index is 0.</p>
		 * @param mixed $value <p>Can be a string or a number.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-collection.assignelem.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function assignElem(int $index, $value): bool {}

		/**
		 * Frees the resources associated with the collection object
		 * <p>Frees the resources associated with the collection object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-collection.free.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function free(): bool {}

		/**
		 * Returns value of the element
		 * <p>Returns element's value with the index <code>index</code> (0-based).</p>
		 * @param int $index <p>The element index. First index is 0.</p>
		 * @return mixed <p>Returns <b><code>FALSE</code></b> if such element doesn't exist; <b><code>NULL</code></b> if element is <b><code>NULL</code></b>; string if element is column of a string datatype or number if element is numeric field.</p>
		 * @link https://php.net/manual/en/oci-collection.getelem.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function getElem(int $index) {}

		/**
		 * Returns the maximum number of elements in the collection
		 * <p>Returns the maximum number of elements in the collection.</p>
		 * @return int <p>Returns the maximum number as an integer, or <b><code>FALSE</code></b> on errors.</p><p>If the returned value is 0, then the number of elements is not limited.</p>
		 * @link https://php.net/manual/en/oci-collection.max.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function max(): int {}

		/**
		 * Returns size of the collection
		 * <p>Returns the size of the collection.</p>
		 * @return int <p>Returns the number of elements in the collection or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/oci-collection.size.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function size(): int {}

		/**
		 * Trims elements from the end of the collection
		 * <p>Trims <code>num</code> of elements from the end of the collection.</p>
		 * @param int $num <p>The number of elements to be trimmed.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-collection.trim.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function trim(int $num): bool {}
	}

}
