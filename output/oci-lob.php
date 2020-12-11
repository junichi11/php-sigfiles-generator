<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.OCI-Lob.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	class OCILob {

		/**
		 * Appends data from the large object to another large object
		 * <p>Appends data from the large object to the end of another large object.</p><p>Writing to the large object with this method will fail if buffering was previously enabled. You must disable buffering before appending. You may need to flush buffers with OCILob::flush before disabling buffering.</p>
		 * @param \OCILob $lob_from <p>The copied LOB.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.append.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function append(\OCILob $lob_from): bool {}

		/**
		 * Closes LOB descriptor
		 * <p>Closes descriptor of LOB or FILE. This function should be used only with OCILob::writeTemporary.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.close.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function close(): bool {}

		/**
		 * Tests for end-of-file on a large object's descriptor
		 * <p>Tells whether the internal pointer of large object is at the end of LOB.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if internal pointer of large object is at the end of LOB. Otherwise returns <b><code>FALSE</code></b>.</p>
		 * @link https://php.net/manual/en/oci-lob.eof.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function eof(): bool {}

		/**
		 * Erases a specified portion of the internal LOB data
		 * <p>Erases a specified portion of the internal LOB data starting at a specified <code>offset</code>. If called without parameters, it erases all LOB data.</p><p>For BLOBs, erasing means that the existing LOB value is overwritten with zero-bytes. For CLOBs, the existing LOB value is overwritten with spaces.</p>
		 * @param int $offset
		 * @param int $length
		 * @return int|false <p>Returns the actual number of characters/bytes erased or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.erase.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function erase(int $offset = NULL, int $length = NULL) {}

		/**
		 * Exports LOB's contents to a file
		 * <p>Exports LOB contents to a file.</p>
		 * @param string $filename <p>Path to the file.</p>
		 * @param int $start <p>Indicates from where to start exporting.</p>
		 * @param int $length <p>Indicates the length of data to be exported.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.export.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function export(string $filename, int $start = NULL, int $length = NULL): bool {}

		/**
		 * Flushes/writes buffer of the LOB to the server
		 * <p><b>OCILob::flush()</b> actually writes data to the server.</p>
		 * @param int $flag <p>By default, resources are not freed, but using flag <b><code>OCI_LOB_BUFFER_FREE</code></b> you can do it explicitly. Be sure you know what you're doing - next read/write operation to the same part of LOB will involve a round-trip to the server and initialize new buffer resources. It is recommended to use <b><code>OCI_LOB_BUFFER_FREE</code></b> flag only when you are not going to work with the LOB anymore.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Returns <b><code>FALSE</code></b> if buffering was not enabled or an error occurred.</p>
		 * @link https://php.net/manual/en/oci-lob.flush.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function flush(int $flag = NULL): bool {}

		/**
		 * Frees resources associated with the LOB descriptor
		 * <p>Frees resources associated with the descriptor, previously allocated with <code>oci_new_descriptor()</code>.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.free.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function free(): bool {}

		/**
		 * Returns current state of buffering for the large object
		 * <p>Tells whether the buffering for the large object is on or off.</p>
		 * @return bool <p>Returns <b><code>FALSE</code></b> if buffering for the large object is off and <b><code>TRUE</code></b> if buffering is used.</p>
		 * @link https://php.net/manual/en/oci-lob.getbuffering.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function getBuffering(): bool {}

		/**
		 * Imports file data to the LOB
		 * <p>Writes data from the <code>filename</code> in to the current position of large object.</p>
		 * @param string $filename <p>Path to the file.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.import.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function import(string $filename): bool {}

		/**
		 * Returns large object's contents
		 * <p>Returns large object's contents. As script execution is terminated when the memory_limit is reached, ensure that the LOB does not exceed this limit. In most cases it's recommended to use OCILob::read instead.</p>
		 * @return string <p>Returns the contents of the object, or <b><code>FALSE</code></b> on errors.</p>
		 * @link https://php.net/manual/en/oci-lob.load.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function load(): string {}

		/**
		 * Reads part of the large object
		 * <p>Reads <code>length</code> bytes from the current position of LOB's internal pointer.</p><p>Reading stops when <code>length</code> bytes have been read or end of the large object is reached. Internal pointer of the large object will be shifted on the amount of bytes read.</p>
		 * @param int $length <p>The length of data to read, in bytes. Large values will be rounded down to 1 MB.</p>
		 * @return string|false <p>Returns the contents as a string, or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.read.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function read(int $length) {}

		/**
		 * Moves the internal pointer to the beginning of the large object
		 * <p>Sets the internal pointer to the beginning of the large object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.rewind.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function rewind(): bool {}

		/**
		 * Saves data to the large object
		 * <p>Saves <code>data</code> to the large object.</p>
		 * @param string $data <p>The data to be saved.</p>
		 * @param int $offset <p>Can be used to indicate offset from the beginning of the large object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.save.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function save(string $data, int $offset = NULL): bool {}

		/**
		 * Sets the internal pointer of the large object
		 * <p>Sets the internal pointer of the large object.</p>
		 * @param int $offset <p>Indicates the amount of bytes, on which internal pointer should be moved from the position, pointed by <code>whence</code>.</p>
		 * @param int $whence <p>May be one of:</p><ul> <li> <b><code>OCI_SEEK_SET</code></b> - sets the position equal to <code>offset</code> </li> <li> <b><code>OCI_SEEK_CUR</code></b> - adds <code>offset</code> bytes to the current position </li> <li> <b><code>OCI_SEEK_END</code></b> - adds <code>offset</code> bytes to the end of large object (use negative value to move to a position before the end of large object) </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.seek.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function seek(int $offset, int $whence = OCI_SEEK_SET): bool {}

		/**
		 * Changes current state of buffering for the large object
		 * <p>Sets the buffering for the large object, depending on the value of the <code>on_off</code> parameter.</p><p>Use of this function may provide performance improvements by buffering small reads and writes of LOBs by reducing the number of network round-trips and LOB versions. <code>OCILob::flush()</code> should be used to flush buffers, when you have finished working with the large object.</p>
		 * @param bool $on_off <p><b><code>TRUE</code></b> for on and <b><code>FALSE</code></b> for off.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. Repeated calls to this method with the same flag will return <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/en/oci-lob.setbuffering.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function setBuffering(bool $on_off): bool {}

		/**
		 * Returns size of large object
		 * <p>Gets the size of the large object.</p>
		 * @return int|false <p>Returns length of large object value or <b><code>FALSE</code></b> on failure. Empty objects have zero length.</p>
		 * @link https://php.net/manual/en/oci-lob.size.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function size() {}

		/**
		 * Returns the current position of internal pointer of large object
		 * <p>Gets the current position of a LOB's internal pointer.</p>
		 * @return int <p>Returns current position of a LOB's internal pointer or <b><code>FALSE</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/oci-lob.tell.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function tell(): int {}

		/**
		 * Writes data to the large object
		 * <p>Writes data from the parameter <code>data</code> into the current position of LOB's internal pointer.</p>
		 * @param string $data <p>The data to write in the LOB.</p>
		 * @param int $length <p>If this parameter is given, writing will stop after <code>length</code> bytes have been written or the end of <code>data</code> is reached, whichever comes first.</p>
		 * @return int|false <p>Returns the number of bytes written or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.write.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function write(string $data, int $length = NULL) {}

		/**
		 * Writes a temporary large object
		 * <p>Creates a temporary large object and writes <code>data</code> to it.</p><p>You should use OCILob::close when you are done with this object.</p>
		 * @param string $data <p>The data to write.</p>
		 * @param int $lob_type <p>Can be one of the following:</p><ul> <li> <b><code>OCI_TEMP_BLOB</code></b> is used to create temporary BLOBs </li> <li> <b><code>OCI_TEMP_CLOB</code></b> is used to create temporary CLOBs </li> </ul>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oci-lob.writetemporary.php
		 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
		 */
		public function writeTemporary(string $data, int $lob_type = OCI_TEMP_CLOB): bool {}
	}

}
