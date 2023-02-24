<?php



namespace {

	/**
	 * <p>OCI8 Collection functionality.</p>
	 * <p><b>Note</b>:</p>
	 * <p>The <b>OCI-Collection</b> class was renamed to <b>OCICollection</b> in PHP 8 OCI8 3.0.0 to align with PHP naming standards.</p>
	 * @link https://php.net/manual/en/class.ocicollection.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	class OCICollection {

		/**
		 * Appends element to the collection
		 * <p>Appends element to the end of the collection.</p>
		 * @param string $value <p>The value to be added to the collection.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocicollection.append.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function append(string $value): bool {}

		/**
		 * Assigns a value to the collection from another existing collection
		 * <p>Assigns a value to the collection from another, previously created collection. Both collections must be created with <code>oci_new_collection()</code> prior to using them.</p>
		 * @param \OCICollection $from <p>An instance of OCICollection.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocicollection.assign.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function assign(\OCICollection $from): bool {}

		/**
		 * Assigns a value to the element of the collection
		 * <p>Assigns a value to the element with index <code>index</code>.</p>
		 * @param int $index <p>The element index. First index is 0.</p>
		 * @param string $value <p>Can be a string or a number.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocicollection.assignelem.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function assignElem(int $index, string $value): bool {}

		/**
		 * Frees the resources associated with the collection object
		 * <p>Frees the resources associated with the collection object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocicollection.free.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function free(): bool {}

		/**
		 * Returns value of the element
		 * <p>Returns element's value with the index <code>index</code> (0-based).</p>
		 * @param int $index <p>The element index. First index is 0.</p>
		 * @return string|float|null|false <p>Returns <b><code>false</code></b> if such element doesn't exist; <b><code>null</code></b> if element is <b><code>null</code></b>; string if element is column of a string datatype or number if element is numeric field.</p>
		 * @link https://php.net/manual/en/ocicollection.getelem.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function getElem(int $index): string|float|null|false {}

		/**
		 * Returns the maximum number of elements in the collection
		 * <p>Returns the maximum number of elements in the collection.</p>
		 * @return int|false <p>Returns the maximum number as an integer, or <b><code>false</code></b> on errors.</p><p>If the returned value is 0, then the number of elements is not limited.</p>
		 * @link https://php.net/manual/en/ocicollection.max.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function max(): int|false {}

		/**
		 * Returns size of the collection
		 * <p>Returns the size of the collection.</p>
		 * @return int|false <p>Returns the number of elements in the collection or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/ocicollection.size.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function size(): int|false {}

		/**
		 * Trims elements from the end of the collection
		 * <p>Trims <code>num</code> of elements from the end of the collection.</p>
		 * @param int $num <p>The number of elements to be trimmed.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocicollection.trim.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function trim(int $num): bool {}
	}

	/**
	 * <p>OCI8 LOB functionality for large binary (BLOB) and character (CLOB) objects.</p>
	 * <p><b>Note</b>:</p>
	 * <p>The <b>OCI-Lob</b> class was renamed to <b>OCILob</b> in PHP 8 and PECL OCI8 3.0.0 to align with PHP naming standards.</p>
	 * @link https://php.net/manual/en/class.ocilob.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	class OCILob {

		/**
		 * Appends data from the large object to another large object
		 * <p>Appends data from the large object to the end of another large object.</p><p>Writing to the large object with this method will fail if buffering was previously enabled. You must disable buffering before appending. You may need to flush buffers with OCILob::flush before disabling buffering.</p>
		 * @param \OCILob $from <p>The copied LOB.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.append.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function append(\OCILob $from): bool {}

		/**
		 * Closes LOB descriptor
		 * <p>Closes descriptor of LOB or FILE. This function should be used only with OCILob::writeTemporary.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.close.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function close(): bool {}

		/**
		 * Tests for end-of-file on a large object's descriptor
		 * <p>Tells whether the internal pointer of large object is at the end of LOB.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if internal pointer of large object is at the end of LOB. Otherwise returns <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/ocilob.eof.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function eof(): bool {}

		/**
		 * Erases a specified portion of the internal LOB data
		 * <p>Erases a specified portion of the internal LOB data starting at a specified <code>offset</code>. If called without parameters, it erases all LOB data.</p><p>For BLOBs, erasing means that the existing LOB value is overwritten with zero-bytes. For CLOBs, the existing LOB value is overwritten with spaces.</p>
		 * @param ?int $offset
		 * @param ?int $length
		 * @return int|false <p>Returns the actual number of characters/bytes erased or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.erase.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function erase(?int $offset = null, ?int $length = null): int|false {}

		/**
		 * Exports LOB's contents to a file
		 * <p>Exports LOB contents to a file.</p>
		 * @param string $filename <p>Path to the file.</p>
		 * @param ?int $offset <p>Indicates from where to start exporting.</p>
		 * @param ?int $length <p>Indicates the length of data to be exported.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.export.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function export(string $filename, ?int $offset = null, ?int $length = null): bool {}

		/**
		 * Flushes/writes buffer of the LOB to the server
		 * <p><b>OCILob::flush()</b> actually writes data to the server.</p>
		 * @param int $flag <p>By default, resources are not freed, but using flag <b><code>OCI_LOB_BUFFER_FREE</code></b> you can do it explicitly. Be sure you know what you're doing - next read/write operation to the same part of LOB will involve a round-trip to the server and initialize new buffer resources. It is recommended to use <b><code>OCI_LOB_BUFFER_FREE</code></b> flag only when you are not going to work with the LOB anymore.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>Returns <b><code>false</code></b> if buffering was not enabled or an error occurred.</p>
		 * @link https://php.net/manual/en/ocilob.flush.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function flush(int $flag = 0): bool {}

		/**
		 * Frees resources associated with the LOB descriptor
		 * <p>Frees resources associated with the descriptor, previously allocated with <code>oci_new_descriptor()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.free.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function free(): bool {}

		/**
		 * Returns current state of buffering for the large object
		 * <p>Tells whether the buffering for the large object is on or off.</p>
		 * @return bool <p>Returns <b><code>false</code></b> if buffering for the large object is off and <b><code>true</code></b> if buffering is used.</p>
		 * @link https://php.net/manual/en/ocilob.getbuffering.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function getBuffering(): bool {}

		/**
		 * Imports file data to the LOB
		 * <p>Writes data from the <code>filename</code> in to the current position of large object.</p>
		 * @param string $filename <p>Path to the file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.import.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function import(string $filename): bool {}

		/**
		 * Returns large object's contents
		 * <p>Returns large object's contents. As script execution is terminated when the memory_limit is reached, ensure that the LOB does not exceed this limit. In most cases it's recommended to use OCILob::read instead.</p>
		 * @return string|false <p>Returns the contents of the object, or <b><code>false</code></b> on errors.</p>
		 * @link https://php.net/manual/en/ocilob.load.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function load(): string|false {}

		/**
		 * Reads part of the large object
		 * <p>Reads <code>length</code> bytes from the current position of LOB's internal pointer.</p><p>Reading stops when <code>length</code> bytes have been read or end of the large object is reached. Internal pointer of the large object will be shifted on the amount of bytes read.</p>
		 * @param int $length <p>The length of data to read, in bytes. Large values will be rounded down to 1 MB.</p>
		 * @return string|false <p>Returns the contents as a string, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.read.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function read(int $length): string|false {}

		/**
		 * Moves the internal pointer to the beginning of the large object
		 * <p>Sets the internal pointer to the beginning of the large object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.rewind.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function rewind(): bool {}

		/**
		 * Saves data to the large object
		 * <p>Saves <code>data</code> to the large object.</p>
		 * @param string $data <p>The data to be saved.</p>
		 * @param int $offset <p>Can be used to indicate offset from the beginning of the large object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.save.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function save(string $data, int $offset = 0): bool {}

		/**
		 * Sets the internal pointer of the large object
		 * <p>Sets the internal pointer of the large object.</p>
		 * @param int $offset <p>Indicates the amount of bytes, on which internal pointer should be moved from the position, pointed by <code>whence</code>.</p>
		 * @param int $whence <p>May be one of:</p><ul> <li> <b><code>OCI_SEEK_SET</code></b> - sets the position equal to <code>offset</code> </li> <li> <b><code>OCI_SEEK_CUR</code></b> - adds <code>offset</code> bytes to the current position </li> <li> <b><code>OCI_SEEK_END</code></b> - adds <code>offset</code> bytes to the end of large object (use negative value to move to a position before the end of large object) </li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.seek.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function seek(int $offset, int $whence = OCI_SEEK_SET): bool {}

		/**
		 * Changes current state of buffering for the large object
		 * <p>Sets the buffering for the large object, depending on the value of the <code>mode</code> parameter.</p><p>Use of this function may provide performance improvements by buffering small reads and writes of LOBs by reducing the number of network round-trips and LOB versions. <code>OCILob::flush()</code> should be used to flush buffers, when you have finished working with the large object.</p>
		 * @param bool $mode <p><b><code>true</code></b> for on and <b><code>false</code></b> for off.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. Repeated calls to this method with the same flag will return <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/ocilob.setbuffering.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function setBuffering(bool $mode): bool {}

		/**
		 * Returns size of large object
		 * <p>Gets the size of the large object.</p>
		 * @return int|false <p>Returns length of large object value or <b><code>false</code></b> on failure. Empty objects have zero length.</p>
		 * @link https://php.net/manual/en/ocilob.size.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function size(): int|false {}

		/**
		 * Returns the current position of internal pointer of large object
		 * <p>Gets the current position of a LOB's internal pointer.</p>
		 * @return int|false <p>Returns current position of a LOB's internal pointer or <b><code>false</code></b> if an error occurred.</p>
		 * @link https://php.net/manual/en/ocilob.tell.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function tell(): int|false {}

		/**
		 * Truncates large object
		 * <p>Truncates the LOB.</p>
		 * @param int $length <p>If provided, this method will truncate the LOB to <code>length</code> bytes. Otherwise, it will completely purge the LOB.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.truncate.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function truncate(int $length = 0): bool {}

		/**
		 * Writes data to the large object
		 * <p>Writes data from the parameter <code>data</code> into the current position of LOB's internal pointer.</p>
		 * @param string $data <p>The data to write in the LOB.</p>
		 * @param ?int $length <p>If this parameter is an integer, writing will stop after <code>length</code> bytes have been written or the end of <code>data</code> is reached, whichever comes first.</p>
		 * @return int|false <p>Returns the number of bytes written or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.write.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function write(string $data, ?int $length = null): int|false {}

		/**
		 * Writes a temporary large object
		 * <p>Creates a temporary large object and writes <code>data</code> to it.</p><p>You should use OCILob::close when you are done with this object.</p>
		 * @param string $data <p>The data to write.</p>
		 * @param int $type <p>Can be one of the following:</p><ul> <li> <b><code>OCI_TEMP_BLOB</code></b> is used to create temporary BLOBs </li> <li> <b><code>OCI_TEMP_CLOB</code></b> is used to create temporary CLOBs </li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/ocilob.writetemporary.php
		 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
		 */
		public function writeTemporary(string $data, int $type = OCI_TEMP_CLOB): bool {}
	}

	/**
	 * Binds a PHP array to an Oracle PL/SQL array parameter
	 * <p>Binds the PHP array <code>var</code> to the Oracle placeholder <code>param</code>, which points to an Oracle PL/SQL array. Whether it will be used for input or output will be determined at run-time.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string $param <p>The Oracle placeholder.</p>
	 * @param array $var <p>An array.</p>
	 * @param int $max_array_length <p>Sets the maximum length both for incoming and result arrays.</p>
	 * @param int $max_item_length <p>Sets maximum length for array items. If not specified or equals to -1, <b>oci_bind_array_by_name()</b> will find the longest element in the incoming array and will use it as the maximum length.</p>
	 * @param int $type <p>Should be used to set the type of PL/SQL array items. See list of available types below:</p> <p></p><ul> <li> <p><b><code>SQLT_NUM</code></b> - for arrays of NUMBER.</p> </li> <li> <p><b><code>SQLT_INT</code></b> - for arrays of INTEGER (Note: INTEGER it is actually a synonym for NUMBER(38), but <b><code>SQLT_NUM</code></b> type won't work in this case even though they are synonyms).</p> </li> <li> <p><b><code>SQLT_FLT</code></b> - for arrays of FLOAT.</p> </li> <li> <p><b><code>SQLT_AFC</code></b> - for arrays of CHAR.</p> </li> <li> <p><b><code>SQLT_CHR</code></b> - for arrays of VARCHAR2.</p> </li> <li> <p><b><code>SQLT_VCS</code></b> - for arrays of VARCHAR.</p> </li> <li> <p><b><code>SQLT_AVC</code></b> - for arrays of CHARZ.</p> </li> <li> <p><b><code>SQLT_STR</code></b> - for arrays of STRING.</p> </li> <li> <p><b><code>SQLT_LVC</code></b> - for arrays of LONG VARCHAR.</p> </li> <li> <p><b><code>SQLT_ODT</code></b> - for arrays of DATE.</p> </li> </ul>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-bind-array-by-name.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL OCI8 >= 1.2.0
	 */
	function oci_bind_array_by_name($statement, string $param, array &$var, int $max_array_length, int $max_item_length = -1, int $type = SQLT_AFC): bool {}

	/**
	 * Binds a PHP variable to an Oracle placeholder
	 * <p>Binds a PHP variable <code>var</code> to the Oracle bind variable placeholder <code>param</code>. Binding is important for Oracle database performance and also as a way to avoid SQL Injection security issues.</p><p>Binding allows the database to reuse the statement context and caches from previous executions of the statement, even if another user or process originally executed it. Binding reduces SQL Injection concerns because the data associated with a bind variable is never treated as part of the SQL statement. It does not need quoting or escaping.</p><p>PHP variables that have been bound can be changed and the statement re-executed without needing to re-parse the statement or re-bind.</p><p>In Oracle, bind variables are commonly divided into <code>IN</code> binds for values that are passed into the database, and <code>OUT</code> binds for values that are returned to PHP. A bind variable may be both <code>IN</code> and <code>OUT</code>. Whether a bind variable will be used for input or output is determined at run-time.</p><p>You must specify <code>max_length</code> when using an <code>OUT</code> bind so that PHP allocates enough memory to hold the returned value.</p><p>For <code>IN</code> binds it is recommended to set the <code>max_length</code> length if the statement is re-executed multiple times with different values for the PHP variable. Otherwise Oracle may truncate data to the length of the initial PHP variable value. If you don't know what the maximum length will be, then re-call <b>oci_bind_by_name()</b> with the current data size prior to each <code>oci_execute()</code> call. Binding an unnecessarily large length will have an impact on process memory in the database.</p><p>A bind call tells Oracle which memory address to read data from. For <code>IN</code> binds that address needs to contain valid data when <code>oci_execute()</code> is called. This means that the variable bound must remain in scope until execution. If it doesn't, unexpected results or errors such as "ORA-01460: unimplemented or unreasonable conversion requested" may occur. For <code>OUT</code> binds one symptom is no value being set in the PHP variable.</p><p>For a statement that is repeatedly executed, binding values that never change may reduce the ability of the Oracle optimizer to choose the best statement execution plan. Long running statements that are rarely re-executed may not benefit from binding. However in both cases, binding might be safer than joining strings into a SQL statement, as this can be a security risk if unfiltered user text is concatenated.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier.</p>
	 * @param string $param <p>The colon-prefixed bind variable placeholder used in the statement. The colon is optional in <code>param</code>. Oracle does not use question marks for placeholders.</p>
	 * @param mixed $var <p>The PHP variable to be associated with <code>param</code></p>
	 * @param int $max_length <p>Sets the maximum length for the data. If you set it to -1, this function will use the current length of <code>var</code> to set the maximum length. In this case the <code>var</code> must exist and contain data when <b>oci_bind_by_name()</b> is called.</p>
	 * @param int $type <p>The datatype that Oracle will treat the data as. The default <code>type</code> used is <b><code>SQLT_CHR</code></b>. Oracle will convert the data between this type and the database column (or PL/SQL variable type), when possible.</p> <p>If you need to bind an abstract datatype (LOB/ROWID/BFILE) you need to allocate it first using the <code>oci_new_descriptor()</code> function. The <code>length</code> is not used for abstract datatypes and should be set to -1.</p> <p>Possible values for <code>type</code> are:</p><ul> <li> <p><b><code>SQLT_BFILEE</code></b> or <b><code>OCI_B_BFILE</code></b> - for BFILEs;</p> </li> <li> <p><b><code>SQLT_CFILEE</code></b> or <b><code>OCI_B_CFILEE</code></b> - for CFILEs;</p> </li> <li> <p><b><code>SQLT_CLOB</code></b> or <b><code>OCI_B_CLOB</code></b> - for CLOBs;</p> </li> <li> <p><b><code>SQLT_BLOB</code></b> or <b><code>OCI_B_BLOB</code></b> - for BLOBs;</p> </li> <li> <p><b><code>SQLT_RDD</code></b> or <b><code>OCI_B_ROWID</code></b> - for ROWIDs;</p> </li> <li> <p><b><code>SQLT_NTY</code></b> or <b><code>OCI_B_NTY</code></b> - for named datatypes;</p> </li> <li> <p><b><code>SQLT_INT</code></b> or <b><code>OCI_B_INT</code></b> - for integers;</p> </li> <li> <p><b><code>SQLT_CHR</code></b> - for VARCHARs;</p> </li> <li> <p><b><code>SQLT_BIN</code></b> or <b><code>OCI_B_BIN</code></b> - for RAW columns;</p> </li> <li> <p><b><code>SQLT_LNG</code></b> - for LONG columns;</p> </li> <li> <p><b><code>SQLT_LBI</code></b> - for LONG RAW columns;</p> </li> <li> <p><b><code>SQLT_RSET</code></b> - for cursors created with <code>oci_new_cursor()</code>;</p> </li> <li> <p><b><code>SQLT_BOL</code></b> or <b><code>OCI_B_BOL</code></b> - for PL/SQL BOOLEANs (Requires OCI8 2.0.7 and Oracle Database 12c)</p> </li> </ul>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-bind-by-name.php
	 * @see oci_bind_array_by_name(), oci_parse()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_bind_by_name($statement, string $param, mixed &$var, int $max_length = -1, int $type = 0): bool {}

	/**
	 * Cancels reading from cursor
	 * <p>Invalidates a cursor, freeing all associated resources and cancels the ability to read from it.</p>
	 * @param resource $statement <p>An OCI statement.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-cancel.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_cancel($statement): bool {}

	/**
	 * Returns the Oracle client library version
	 * <p>Returns a string containing the version number of the Oracle C client library that PHP is linked with.</p>
	 * @return string <p>Returns the version number as a <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.oci-client-version.php
	 * @see oci_server_version()
	 * @since PHP 5 >= 5.3.7, PHP 7, PHP 8, PECL OCI8 >= 1.4.6
	 */
	function oci_client_version(): string {}

	/**
	 * Closes an Oracle connection
	 * <p>Unsets <code>connection</code>. The underlying database connection is closed if no other resources are using it and if it was created with <code>oci_connect()</code> or <code>oci_new_connect()</code>.</p><p>It is recommended to close connections that are no longer needed because this makes database resources available for other users.</p>
	 * @param resource $connection <p>An Oracle connection identifier returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @return ?bool <p>Returns <b><code>null</code></b> when oci8.old_oci_close_semantics is enabled, or <b><code>true</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.oci-close.php
	 * @see oci_connect(), oci_free_statement()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_close($connection): ?bool {}

	/**
	 * Commits the outstanding database transaction
	 * <p>Commits the outstanding transaction for the Oracle <code>connection</code>. A commit ends the current transaction and makes permanent all changes. It releases all locks held.</p><p>A transaction begins when the first SQL statement that changes data is executed with <code>oci_execute()</code> using the <b><code>OCI_NO_AUTO_COMMIT</code></b> flag. Further data changes made by other statements become part of the same transaction. Data changes made in a transaction are temporary until the transaction is committed or rolled back. Other users of the database will not see the changes until they are committed.</p><p>When inserting or updating data, using transactions is recommended for relational data consistency and for performance reasons.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-commit.php
	 * @see oci_execute(), oci_rollback()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_commit($connection): bool {}

	/**
	 * Connect to an Oracle database
	 * <p>Returns a connection identifier needed for most other OCI8 operations.</p><p>For performance, most applications should use persistent connections with <code>oci_pconnect()</code> instead of <b>oci_connect()</b>. See Connection Handling for general information on connection management and connection pooling.</p><p>From PHP 5.1.2 (PECL OCI8 1.1) <code>oci_close()</code> can be used to close the connection.</p><p>The second and subsequent calls to <b>oci_connect()</b> with the same parameters will return the connection handle returned from the first call. This means that transactions in one handle are also in the other handles, because they use the <i>same</i> underlying database connection. If two handles need to be transactionally isolated from each other, use <code>oci_new_connect()</code> instead.</p>
	 * @param string $username <p>The Oracle user name.</p>
	 * @param string $password <p>The password for <code>username</code>.</p>
	 * @param ?string $connection_string <p>Contains the <code>Oracle instance</code> to connect to. It can be an &#xBB;&#xA0;Easy Connect string, or a Connect Name from the tnsnames.ora file, or the name of a local Oracle instance.</p> <p>If not specified or <b><code>null</code></b>, PHP uses environment variables such as <b><code>TWO_TASK</code></b> (on Linux) or <b><code>LOCAL</code></b> (on Windows) and <b><code>ORACLE_SID</code></b> to determine the <code>Oracle instance</code> to connect to.</p> <p>To use the Easy Connect naming method, PHP must be linked with Oracle 10<i>g</i> or greater Client libraries. The Easy Connect string for Oracle 10<i>g</i> is of the form: <i>[//]host_name[:port][/service_name]</i>. From Oracle 11<i>g</i>, the syntax is: <i>[//]host_name[:port][/service_name][:server_type][/instance_name]</i>. Further options were introduced with Oracle 19c, including timeout and keep-alive settings. Refer to Oracle documentation. Service names can be found by running the Oracle utility <code>lsnrctl status</code> on the database server machine.</p> <p>The tnsnames.ora file can be in the Oracle Net search path, which includes /your/path/to/instantclient/network/admin, $ORACLE_HOME/network/admin and /etc. Alternatively set <code>TNS_ADMIN</code> so that $TNS_ADMIN/tnsnames.ora is read. Make sure the web daemon has read access to the file.</p>
	 * @param string $encoding <p>Determines the character set used by the Oracle Client libraries. The character set does not need to match the character set used by the database. If it doesn't match, Oracle will do its best to convert data to and from the database character set. Depending on the character sets this may not give usable results. Conversion also adds some time overhead.</p> <p>If not specified, the Oracle Client libraries determine a character set from the <b><code>NLS_LANG</code></b> environment variable.</p> <p>Passing this parameter can reduce the time taken to connect.</p>
	 * @param int $session_mode <p>This parameter is available since version PHP 5 (PECL OCI8 1.1) and accepts the following values: <b><code>OCI_DEFAULT</code></b>, <b><code>OCI_SYSOPER</code></b> and <b><code>OCI_SYSDBA</code></b>. If either <b><code>OCI_SYSOPER</code></b> or <b><code>OCI_SYSDBA</code></b> were specified, this function will try to establish privileged connection using external credentials. Privileged connections are disabled by default. To enable them you need to set oci8.privileged_connect to <code>On</code>.</p> <p>PHP 5.3 (PECL OCI8 1.3.4) introduced the <b><code>OCI_CRED_EXT</code></b> mode value. This tells Oracle to use External or OS authentication, which must be configured in the database. The <b><code>OCI_CRED_EXT</code></b> flag can only be used with username of "/" and a empty password. oci8.privileged_connect may be <code>On</code> or <code>Off</code>.</p> <p><b><code>OCI_CRED_EXT</code></b> may be combined with the <b><code>OCI_SYSOPER</code></b> or <b><code>OCI_SYSDBA</code></b> modes.</p> <p><b><code>OCI_CRED_EXT</code></b> is not supported on Windows for security reasons.</p>
	 * @return resource|false <p>Returns a connection identifier or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-connect.php
	 * @see oci_pconnect(), oci_new_connect(), oci_close()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_connect(string $username, string $password, ?string $connection_string = null, string $encoding = "", int $session_mode = OCI_DEFAULT) {}

	/**
	 * Associates a PHP variable with a column for query fetches
	 * <p>Associates a PHP variable with a column for query fetches using <code>oci_fetch()</code>.</p><p>The <b>oci_define_by_name()</b> call must occur before executing <code>oci_execute()</code>.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @param string $column <p>The column name used in the query.</p> <p>Use uppercase for Oracle's default, non-case sensitive column names. Use the exact column name case for case-sensitive column names.</p>
	 * @param mixed $var <p>The PHP variable that will contain the returned column value.</p>
	 * @param int $type <p>The data type to be returned. Generally not needed. Note that Oracle-style data conversions are not performed. For example, <code>SQLT_INT</code> will be ignored and the returned data type will still be <code>SQLT_CHR</code>.</p> <p>You can optionally use <code>oci_new_descriptor()</code> to allocate LOB/ROWID/BFILE descriptors.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-define-by-name.php
	 * @see oci_fetch(), oci_new_descriptor()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_define_by_name($statement, string $column, mixed &$var, int $type = 0): bool {}

	/**
	 * Returns the last error found
	 * <p>Returns the last error found.</p><p>The function should be called immediately after an error occurs. Errors are cleared by a successful statement.</p>
	 * @param ?resource $connection_or_statement <p>For most errors, <code>connection_or_statement</code> is the resource handle that was passed to the failing function call. For connection errors with <code>oci_connect()</code>, <code>oci_new_connect()</code> or <code>oci_pconnect()</code> <b><code>null</code></b> should be passed.</p>
	 * @return array|false <p>If no error is found, <b>oci_error()</b> returns <b><code>false</code></b>. Otherwise, <b>oci_error()</b> returns the error information as an associative array.</p> <b><b>oci_error()</b> Array Description</b>   Array key Type Description     <code>code</code> <code>int</code>  The Oracle error number.    <code>message</code> <code>string</code>  The Oracle error text.    <code>offset</code> <code>int</code>  The byte position of an error in the SQL statement. If there was no statement, this is <code>0</code>    <code>sqltext</code> <code>string</code>  The SQL statement text. If there was no statement, this is an empty string.
	 * @link https://php.net/manual/en/function.oci-error.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_error(?resource $connection_or_statement = null): array|false {}

	/**
	 * Executes a statement
	 * <p>Executes a <code>statement</code> previously returned from <code>oci_parse()</code>.</p><p>After execution, statements like <code>INSERT</code> will have data committed to the database by default. For statements like <code>SELECT</code>, execution performs the logic of the query. Query results can subsequently be fetched in PHP with functions like <code>oci_fetch_array()</code>.</p><p>Each parsed statement may be executed multiple times, saving the cost of re-parsing. This is commonly used for <code>INSERT</code> statements when data is bound with <code>oci_bind_by_name()</code>.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param int $mode <p>An optional second parameter can be one of the following constants:</p> <b>Execution Modes</b>   Constant Description     <b><code>OCI_COMMIT_ON_SUCCESS</code></b> Automatically commit all outstanding changes for this connection when the statement has succeeded. This is the default.   <b><code>OCI_DESCRIBE_ONLY</code></b> Make query meta data available to functions like <code>oci_field_name()</code> but do not create a result set. Any subsequent fetch call such as <code>oci_fetch_array()</code> will fail.   <b><code>OCI_NO_AUTO_COMMIT</code></b> Do not automatically commit changes. Prior to PHP 5.3.2 (PECL OCI8 1.4) use <b><code>OCI_DEFAULT</code></b> which is equivalent to <b><code>OCI_NO_AUTO_COMMIT</code></b>.    <p>Using <b><code>OCI_NO_AUTO_COMMIT</code></b> mode starts or continues a transaction. Transactions are automatically rolled back when the connection is closed, or when the script ends. Explicitly call <code>oci_commit()</code> to commit a transaction, or <code>oci_rollback()</code> to abort it.</p> <p>When inserting or updating data, using transactions is recommended for relational data consistency and for performance reasons.</p> <p>If <b><code>OCI_NO_AUTO_COMMIT</code></b> mode is used for any statement including queries, and <code>oci_commit()</code> or <code>oci_rollback()</code> is not subsequently called, then OCI8 will perform a rollback at the end of the script even if no data was changed. To avoid an unnecessary rollback, many scripts do not use <b><code>OCI_NO_AUTO_COMMIT</code></b> mode for queries or PL/SQL. Be careful to ensure the appropriate transactional consistency for the application when using <b>oci_execute()</b> with different modes in the same script.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-execute.php
	 * @see oci_parse()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_execute($statement, int $mode = OCI_COMMIT_ON_SUCCESS): bool {}

	/**
	 * Fetches the next row from a query into internal buffers
	 * <p>Fetches the next row from a query into internal buffers accessible either with <code>oci_result()</code>, or by using variables previously defined with <code>oci_define_by_name()</code>.</p><p>See <code>oci_fetch_array()</code> for general information about fetching data.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> if there are no more rows in the <code>statement</code>.</p>
	 * @link https://php.net/manual/en/function.oci-fetch.php
	 * @see oci_define_by_name(), oci_fetch_all(), oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_result()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch($statement): bool {}

	/**
	 * Fetches multiple rows from a query into a two-dimensional array
	 * <p>Fetches multiple rows from a query into a two-dimensional array. By default, all rows are returned.</p><p>This function can be called only once for each query executed with <code>oci_execute()</code>.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @param array $output <p>The variable to contain the returned rows.</p> <p>LOB columns are returned as strings, where Oracle supports conversion.</p> <p>See <code>oci_fetch_array()</code> for more information on how data and types are fetched.</p>
	 * @param int $offset <p>The number of initial rows to discard when fetching the result. The default value is 0, so the first row onwards is returned.</p>
	 * @param int $limit <p>The number of rows to return. The default is -1 meaning return all the rows from <code>offset</code> + 1 onwards.</p>
	 * @param int $flags <p>Parameter <code>flags</code> indicates the array structure and whether associative arrays should be used.</p> <b><b>oci_fetch_all()</b> Array Structure Modes</b>   Constant Description     <b><code>OCI_FETCHSTATEMENT_BY_ROW</code></b> The outer array will contain one sub-array per query row.   <b><code>OCI_FETCHSTATEMENT_BY_COLUMN</code></b> The outer array will contain one sub-array per query column. This is the default.    <p>Arrays can be indexed either by column heading or numerically. Only one index mode will be returned.</p> <b><b>oci_fetch_all()</b> Array Index Modes</b>   Constant Description     <b><code>OCI_NUM</code></b> Numeric indexes are used for each column's array.   <b><code>OCI_ASSOC</code></b> Associative indexes are used for each column's array. This is the default.    <p>Use the addition operator "+" to choose a combination of array structure and index modes.</p> <p>Oracle's default, non-case sensitive column names will have uppercase array keys. Case-sensitive column names will have array keys using the exact column case. Use <code>var_dump()</code> on <code>output</code> to verify the appropriate case to use for each query.</p> <p>Queries that have more than one column with the same name should use column aliases. Otherwise only one of the columns will appear in an associative array.</p>
	 * @return int <p>Returns the number of rows in <code>output</code>, which may be 0 or more.</p>
	 * @link https://php.net/manual/en/function.oci-fetch-all.php
	 * @see oci_fetch(), oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_set_prefetch()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_all($statement, array &$output, int $offset = 0, int $limit = -1, int $flags = OCI_FETCHSTATEMENT_BY_COLUMN | OCI_ASSOC): int {}

	/**
	 * Returns the next row from a query as an associative or numeric array
	 * <p>Returns an array containing the next result-set row of a query. Each array entry corresponds to a column of the row. This function is typically called in a loop until it returns <b><code>false</code></b>, indicating no more rows exist.</p><p>If <code>statement</code> corresponds to a PL/SQL block returning Oracle Database Implicit Result Sets, then rows from all sets are consecutively fetched. If <code>statement</code> is returned by <code>oci_get_implicit_resultset()</code>, then only the subset of rows for one child query are returned.</p><p>For details on the data type mapping performed by the OCI8 extension, see the datatypes supported by the driver</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p> <p>Can also be a statement identifier returned by <code>oci_get_implicit_resultset()</code>.</p>
	 * @param int $mode <p>An optional second parameter can be any combination of the following constants:</p> <b><b>oci_fetch_array()</b> Modes</b>   Constant Description     <b><code>OCI_BOTH</code></b> Returns an array with both associative and numeric indices. This is the same as <b><code>OCI_ASSOC</code></b> + <b><code>OCI_NUM</code></b> and is the default behavior.   <b><code>OCI_ASSOC</code></b> Returns an associative array.   <b><code>OCI_NUM</code></b> Returns a numeric array.   <b><code>OCI_RETURN_NULLS</code></b> Creates elements for <b><code>null</code></b> fields. The element values will be a PHP <b><code>null</code></b>.    <b><code>OCI_RETURN_LOBS</code></b> Returns the contents of LOBs instead of the LOB descriptors.    <p>The default <code>mode</code> is <b><code>OCI_BOTH</code></b>.</p> <p>Use the addition operator "+" to specify more than one mode at a time.</p>
	 * @return array|false <p>Returns an array with associative and/or numeric indices. If there are no more rows in the <code>statement</code> then <b><code>false</code></b> is returned.</p><p>By default, <code>LOB</code> columns are returned as LOB descriptors.</p><p><code>DATE</code> columns are returned as strings formatted to the current date format. The default format can be changed with Oracle environment variables such as <code>NLS_LANG</code> or by a previously executed <code>ALTER SESSION SET NLS_DATE_FORMAT</code> command.</p><p>Oracle's default, non-case sensitive column names will have uppercase associative indices in the result array. Case-sensitive column names will have array indices using the exact column case. Use <code>var_dump()</code> on the result array to verify the appropriate case to use for each query.</p><p>The table name is not included in the array index. If your query contains two different columns with the same name, use <b><code>OCI_NUM</code></b> or add a column alias to the query to ensure name uniqueness, see example #7. Otherwise only one column will be returned via PHP.</p>
	 * @link https://php.net/manual/en/function.oci-fetch-array.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_set_prefetch()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_array($statement, int $mode = OCI_BOTH | OCI_RETURN_NULLS): array|false {}

	/**
	 * Returns the next row from a query as an associative array
	 * <p>Returns an associative array containing the next result-set row of a query. Each array entry corresponds to a column of the row. This function is typically called in a loop until it returns <b><code>false</code></b>, indicating no more rows exist.</p><p>Calling <b>oci_fetch_assoc()</b> is identical to calling <code>oci_fetch_array()</code> with <b><code>OCI_ASSOC</code></b> + <b><code>OCI_RETURN_NULLS</code></b>.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @return array|false <p>Returns an associative array. If there are no more rows in the <code>statement</code> then <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.oci-fetch-assoc.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_array(), oci_fetch_object(), oci_fetch_row()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_assoc($statement): array|false {}

	/**
	 * Returns the next row from a query as an object
	 * <p>Returns an object containing the next result-set row of a query. Each attribute of the object corresponds to a column of the row. This function is typically called in a loop until it returns <b><code>false</code></b>, indicating no more rows exist.</p><p>For details on the data type mapping performed by the OCI8 extension, see the datatypes supported by the driver</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @param int $mode
	 * @return stdClass|false <p>Returns an object. Each attribute of the object corresponds to a column of the row. If there are no more rows in the <code>statement</code> then <b><code>false</code></b> is returned.</p><p>Any <code>LOB</code> columns are returned as LOB descriptors.</p><p><code>DATE</code> columns are returned as strings formatted to the current date format. The default format can be changed with Oracle environment variables such as <code>NLS_LANG</code> or by a previously executed <code>ALTER SESSION SET NLS_DATE_FORMAT</code> command.</p><p>Oracle's default, non-case sensitive column names will have uppercase attribute names. Case-sensitive column names will have attribute names using the exact column case. Use <code>var_dump()</code> on the result object to verify the appropriate case for attribute access.</p><p>Attribute values will be <b><code>null</code></b> for any <code>NULL</code> data fields.</p>
	 * @link https://php.net/manual/en/function.oci-fetch-object.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_assoc(), oci_fetch_array(), oci_fetch_row()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_object($statement, int $mode = OCI_ASSOC | OCI_RETURN_NULLS): \stdClass|false {}

	/**
	 * Returns the next row from a query as a numeric array
	 * <p>Returns a numerically indexed array containing the next result-set row of a query. Each array entry corresponds to a column of the row. This function is typically called in a loop until it returns <b><code>false</code></b>, indicating no more rows exist.</p><p>Calling <b>oci_fetch_row()</b> is identical to calling <code>oci_fetch_array()</code> with <b><code>OCI_NUM</code></b> + <b><code>OCI_RETURN_NULLS</code></b>.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @return array|false <p>Returns a numerically indexed array. If there are no more rows in the <code>statement</code> then <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.oci-fetch-row.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_row($statement): array|false {}

	/**
	 * Checks if a field in the currently fetched row is null
	 * <p>Checks if the given <code>column</code> from the current row of <code>statement</code> is <b><code>null</code></b>.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>column</code> is <b><code>null</code></b>, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.oci-field-is-null.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_is_null($statement, string|int $column): bool {}

	/**
	 * Returns the name of a field from the statement
	 * <p>Returns the name of the <code>column</code>.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return string|false <p>Returns the name as a string, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-field-name.php
	 * @see oci_num_fields(), oci_field_type(), oci_field_size()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_name($statement, string|int $column): string|false {}

	/**
	 * Tell the precision of a field
	 * <p>Returns precision of the <code>column</code>.</p><p>For FLOAT columns, precision is nonzero and scale is -127. If precision is 0, then column is NUMBER. Else it's NUMBER(precision, scale).</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return int|false <p>Returns the precision as an integer, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-field-precision.php
	 * @see oci_field_scale(), oci_field_type()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_precision($statement, string|int $column): int|false {}

	/**
	 * Tell the scale of the field
	 * <p>Returns the scale of the column with <code>column</code> index.</p><p>For FLOAT columns, precision is nonzero and scale is -127. If precision is 0, then column is NUMBER. Else it's NUMBER(precision, scale).</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return int|false <p>Returns the scale as an integer, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-field-scale.php
	 * @see oci_field_precision(), oci_field_type()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_scale($statement, string|int $column): int|false {}

	/**
	 * Returns field's size
	 * <p>Returns the size of a <code>column</code>.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return int|false <p>Returns the size of a <code>column</code> in bytes, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-field-size.php
	 * @see oci_num_fields(), oci_field_name()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_size($statement, string|int $column): int|false {}

	/**
	 * Returns a field's data type name
	 * <p>Returns a field's data type name.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return string|int|false <p>Returns the field data type as a <code>string</code> or an <code>int</code>, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-field-type.php
	 * @see oci_num_fields(), oci_field_name(), oci_field_size()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_type($statement, string|int $column): string|int|false {}

	/**
	 * Tell the raw Oracle data type of the field
	 * <p>Returns Oracle's raw "SQLT" data type of the <code>column</code>.</p><p>If you want a field's type name, then use <code>oci_field_type()</code> instead.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @param string|int $column <p>Can be the field's index (1-based) or name.</p>
	 * @return int|false <p>Returns Oracle's raw data type as a number, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-field-type-raw.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_field_type_raw($statement, string|int $column): int|false {}

	/**
	 * Frees a descriptor
	 * <p>Frees a descriptor allocated by <code>oci_new_descriptor()</code>.</p>
	 * @param \OCILob $lob
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-free-descriptor.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_free_descriptor(\OCILob $lob): bool {}

	/**
	 * Frees all resources associated with statement or cursor
	 * <p>Frees resources associated with Oracle's cursor or statement, which was received from as a result of <code>oci_parse()</code> or obtained from Oracle.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-free-statement.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_free_statement($statement): bool {}

	/**
	 * Returns the next child statement resource from a parent statement resource that has Oracle Database Implicit Result Sets
	 * <p>Used to fetch consectutive sets of query results after the execution of a stored or anonymous Oracle PL/SQL block where that block returns query results with the Oracle Database 12 (or later) <i>DBMS_SQL.RETURN_RESULT</i> PL/SQL function. This allows PL/SQL blocks to easily return query results.</p><p>The child statement can be used with any of the OCI8 fetching functions: <code>oci_fetch()</code>, <code>oci_fetch_all()</code>, <code>oci_fetch_array()</code>, <code>oci_fetch_object()</code>, <code>oci_fetch_assoc()</code> or <code>oci_fetch_row()</code></p><p>Child statements inherit their parent statement's prefetch value, or it can be explicitly set with <code>oci_set_prefetch()</code>.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>. The statement identifier may or may not be associated with a SQL statement that returns Implicit Result Sets.</p>
	 * @return resource|false <p>Returns a statement handle for the next child statement available on <code>statement</code>. Returns <b><code>false</code></b> when child statements do not exist, or all child statements have been returned by previous calls to <b>oci_get_implicit_resultset()</b>.</p>
	 * @link https://php.net/manual/en/function.oci-get-implicit-resultset.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL OCI8 >= 2.0.0
	 */
	function oci_get_implicit_resultset($statement) {}

	/**
	 * Copies large object
	 * <p>Copies a large object or a part of a large object to another large object. Old LOB-recipient data will be overwritten.</p><p>If you need to copy a particular part of a LOB to a particular position of a LOB, use <code>OCILob::seek()</code> to move LOB internal pointers.</p>
	 * @param \OCILob $to <p>The destination LOB.</p>
	 * @param \OCILob $from <p>The copied LOB.</p>
	 * @param ?int $length <p>Indicates the length of data to be copied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-lob-copy.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_lob_copy(\OCILob $to, \OCILob $from, ?int $length = null): bool {}

	/**
	 * Compares two LOB/FILE locators for equality
	 * <p>Compares two LOB/FILE locators.</p>
	 * @param \OCILob $lob1 <p>A LOB identifier.</p>
	 * @param \OCILob $lob2 <p>A LOB identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if these objects are equal, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.oci-lob-is-equal.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_lob_is_equal(\OCILob $lob1, \OCILob $lob2): bool {}

	/**
	 * Allocates new collection object
	 * <p>Allocates a new collection object.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code> or <code>oci_pconnect()</code>.</p>
	 * @param string $type_name <p>Should be a valid named type (uppercase).</p>
	 * @param ?string $schema <p>Should point to the scheme, where the named type was created. The name of the current user is used when <b><code>null</code></b> is passed.</p>
	 * @return OCICollection|false <p>Returns a new <code>OCICollection</code> object or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-new-collection.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_new_collection($connection, string $type_name, ?string $schema = null): \OCICollection|false {}

	/**
	 * Connect to the Oracle server using a unique connection
	 * <p>Establishes a new connection to an Oracle server and logs on.</p><p>Unlike <code>oci_connect()</code> and <code>oci_pconnect()</code>, <b>oci_new_connect()</b> does not cache connections and will always return a brand-new freshly opened connection handle. This is useful if your application needs transactional isolation between two sets of queries.</p>
	 * @param string $username <p>The Oracle user name.</p>
	 * @param string $password <p>The password for <code>username</code>.</p>
	 * @param ?string $connection_string <p>Contains the <code>Oracle instance</code> to connect to. It can be an &#xBB;&#xA0;Easy Connect string, or a Connect Name from the tnsnames.ora file, or the name of a local Oracle instance.</p> <p>If not specified or <b><code>null</code></b>, PHP uses environment variables such as <b><code>TWO_TASK</code></b> (on Linux) or <b><code>LOCAL</code></b> (on Windows) and <b><code>ORACLE_SID</code></b> to determine the <code>Oracle instance</code> to connect to.</p> <p>To use the Easy Connect naming method, PHP must be linked with Oracle 10<i>g</i> or greater Client libraries. The Easy Connect string for Oracle 10<i>g</i> is of the form: <i>[//]host_name[:port][/service_name]</i>. From Oracle 11<i>g</i>, the syntax is: <i>[//]host_name[:port][/service_name][:server_type][/instance_name]</i>. Further options were introduced with Oracle 19c, including timeout and keep-alive settings. Refer to Oracle documentation. Service names can be found by running the Oracle utility <code>lsnrctl status</code> on the database server machine.</p> <p>The tnsnames.ora file can be in the Oracle Net search path, which includes /your/path/to/instantclient/network/admin, $ORACLE_HOME/network/admin and /etc. Alternatively set <code>TNS_ADMIN</code> so that $TNS_ADMIN/tnsnames.ora is read. Make sure the web daemon has read access to the file.</p>
	 * @param string $encoding <p>Determines the character set used by the Oracle Client libraries. The character set does not need to match the character set used by the database. If it doesn't match, Oracle will do its best to convert data to and from the database character set. Depending on the character sets this may not give usable results. Conversion also adds some time overhead.</p> <p>If not specified, the Oracle Client libraries determine a character set from the <b><code>NLS_LANG</code></b> environment variable.</p> <p>Passing this parameter can reduce the time taken to connect.</p>
	 * @param int $session_mode <p>This parameter is available since version PHP 5 (PECL OCI8 1.1) and accepts the following values: <b><code>OCI_DEFAULT</code></b>, <b><code>OCI_SYSOPER</code></b> and <b><code>OCI_SYSDBA</code></b>. If either <b><code>OCI_SYSOPER</code></b> or <b><code>OCI_SYSDBA</code></b> were specified, this function will try to establish privileged connection using external credentials. Privileged connections are disabled by default. To enable them you need to set oci8.privileged_connect to <code>On</code>.</p> <p>PHP 5.3 (PECL OCI8 1.3.4) introduced the <b><code>OCI_CRED_EXT</code></b> mode value. This tells Oracle to use External or OS authentication, which must be configured in the database. The <b><code>OCI_CRED_EXT</code></b> flag can only be used with username of "/" and a empty password. oci8.privileged_connect may be <code>On</code> or <code>Off</code>.</p> <p><b><code>OCI_CRED_EXT</code></b> may be combined with the <b><code>OCI_SYSOPER</code></b> or <b><code>OCI_SYSDBA</code></b> modes.</p> <p><b><code>OCI_CRED_EXT</code></b> is not supported on Windows for security reasons.</p>
	 * @return resource|false <p>Returns a connection identifier or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-new-connect.php
	 * @see oci_connect(), oci_pconnect()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_new_connect(string $username, string $password, ?string $connection_string = null, string $encoding = "", int $session_mode = OCI_DEFAULT) {}

	/**
	 * Allocates and returns a new cursor (statement handle)
	 * <p>Allocates a new statement handle on the specified connection.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code> or <code>oci_pconnect()</code>.</p>
	 * @return resource|false <p>Returns a new statement handle, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-new-cursor.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_new_cursor($connection) {}

	/**
	 * Initializes a new empty LOB or FILE descriptor
	 * <p>Allocates resources to hold descriptor or LOB locator.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code> or <code>oci_pconnect()</code>.</p>
	 * @param int $type <p>Valid values for <code>type</code> are: <b><code>OCI_DTYPE_FILE</code></b>, <b><code>OCI_DTYPE_LOB</code></b> and <b><code>OCI_DTYPE_ROWID</code></b>.</p>
	 * @return ?OCILob <p>Returns a new LOB or FILE descriptor on success, or <b><code>null</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-new-descriptor.php
	 * @see oci_bind_by_name()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_new_descriptor($connection, int $type = OCI_DTYPE_LOB): ?\OCILob {}

	/**
	 * Returns the number of result columns in a statement
	 * <p>Gets the number of columns in the given <code>statement</code>.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @return int <p>Returns the number of columns as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.oci-num-fields.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_num_fields($statement): int {}

	/**
	 * Returns number of rows affected during statement execution
	 * <p>Gets the number of rows affected during statement execution.</p>
	 * @param resource $statement <p>A valid OCI statement identifier.</p>
	 * @return int|false <p>Returns the number of rows affected as an integer, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-num-rows.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_num_rows($statement): int|false {}

	/**
	 * Prepares an Oracle statement for execution
	 * <p>Prepares <code>sql</code> using <code>connection</code> and returns the statement identifier, which can be used with <code>oci_bind_by_name()</code>, <code>oci_execute()</code> and other functions.</p><p>Statement identifiers can be freed with <code>oci_free_statement()</code> or by setting the variable to <b><code>null</code></b>.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param string $sql <p>The SQL or PL/SQL statement.</p> <p>SQL statements <i>should not</i> end with a semi-colon (";"). PL/SQL statements <i>should</i> end with a semi-colon (";").</p>
	 * @return resource|false <p>Returns a statement handle on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-parse.php
	 * @see oci_execute(), oci_free_statement()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_parse($connection, string $sql) {}

	/**
	 * Changes password of Oracle's user
	 * <p>Changes password for user with <code>username</code>.</p><p>The <b>oci_password_change()</b> function is most useful for PHP command-line scripts, or when non-persistent connections are used throughout the PHP application.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code> or <code>oci_pconnect()</code>.</p>
	 * @param string $username <p>The Oracle user name.</p>
	 * @param string $old_password <p>The old password.</p>
	 * @param string $new_password <p>The new password to be set.</p>
	 * @return bool <p>When <code>connection</code> is provided, <b>oci_password_change()</b> returns <b><code>true</code></b> on success, or <b><code>false</code></b> on failure When <code>connection</code> is provided, <b>oci_password_change()</b> returns the connection resource on success, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.oci-password-change.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_password_change($connection, string $username, string $old_password, string $new_password): bool {}

	/**
	 * Connect to an Oracle database using a persistent connection
	 * <p>Creates a persistent connection to an Oracle server and logs on.</p><p>Persistent connections are cached and re-used between requests, resulting in reduced overhead on each page load; a typical PHP application will have a single persistent connection open against an Oracle server per Apache child process (or PHP FPM process). See the OCI8 Connection Handling and Connection Pooling section for more information.</p>
	 * @param string $username <p>The Oracle user name.</p>
	 * @param string $password <p>The password for <code>username</code>.</p>
	 * @param ?string $connection_string <p>Contains the <code>Oracle instance</code> to connect to. It can be an &#xBB;&#xA0;Easy Connect string, or a Connect Name from the tnsnames.ora file, or the name of a local Oracle instance.</p> <p>If not specified or <b><code>null</code></b>, PHP uses environment variables such as <b><code>TWO_TASK</code></b> (on Linux) or <b><code>LOCAL</code></b> (on Windows) and <b><code>ORACLE_SID</code></b> to determine the <code>Oracle instance</code> to connect to.</p> <p>To use the Easy Connect naming method, PHP must be linked with Oracle 10<i>g</i> or greater Client libraries. The Easy Connect string for Oracle 10<i>g</i> is of the form: <i>[//]host_name[:port][/service_name]</i>. From Oracle 11<i>g</i>, the syntax is: <i>[//]host_name[:port][/service_name][:server_type][/instance_name]</i>. Further options were introduced with Oracle 19c, including timeout and keep-alive settings. Refer to Oracle documentation. Service names can be found by running the Oracle utility <code>lsnrctl status</code> on the database server machine.</p> <p>The tnsnames.ora file can be in the Oracle Net search path, which includes /your/path/to/instantclient/network/admin, $ORACLE_HOME/network/admin and /etc. Alternatively set <code>TNS_ADMIN</code> so that $TNS_ADMIN/tnsnames.ora is read. Make sure the web daemon has read access to the file.</p>
	 * @param string $encoding <p>Determines the character set used by the Oracle Client libraries. The character set does not need to match the character set used by the database. If it doesn't match, Oracle will do its best to convert data to and from the database character set. Depending on the character sets this may not give usable results. Conversion also adds some time overhead.</p> <p>If not specified, the Oracle Client libraries determine a character set from the <b><code>NLS_LANG</code></b> environment variable.</p> <p>Passing this parameter can reduce the time taken to connect.</p>
	 * @param int $session_mode <p>This parameter is available since version PHP 5 (PECL OCI8 1.1) and accepts the following values: <b><code>OCI_DEFAULT</code></b>, <b><code>OCI_SYSOPER</code></b> and <b><code>OCI_SYSDBA</code></b>. If either <b><code>OCI_SYSOPER</code></b> or <b><code>OCI_SYSDBA</code></b> were specified, this function will try to establish privileged connection using external credentials. Privileged connections are disabled by default. To enable them you need to set oci8.privileged_connect to <code>On</code>.</p> <p>PHP 5.3 (PECL OCI8 1.3.4) introduced the <b><code>OCI_CRED_EXT</code></b> mode value. This tells Oracle to use External or OS authentication, which must be configured in the database. The <b><code>OCI_CRED_EXT</code></b> flag can only be used with username of "/" and a empty password. oci8.privileged_connect may be <code>On</code> or <code>Off</code>.</p> <p><b><code>OCI_CRED_EXT</code></b> may be combined with the <b><code>OCI_SYSOPER</code></b> or <b><code>OCI_SYSDBA</code></b> modes.</p> <p><b><code>OCI_CRED_EXT</code></b> is not supported on Windows for security reasons.</p>
	 * @return resource|false <p>Returns a connection identifier or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-pconnect.php
	 * @see oci_connect(), oci_new_connect()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_pconnect(string $username, string $password, ?string $connection_string = null, string $encoding = "", int $session_mode = OCI_DEFAULT) {}

	/**
	 * Register a user-defined callback function for Oracle Database TAF
	 * <p>Registers a user-defined callback function to <code>connection</code>. If <code>connection</code> fails due to instance or network failure, the registered callback function will be invoked for several times during failover. See OCI8 Transparent Application Failover (TAF) Support for information.</p><p>When <b>oci_register_taf_callback()</b> is called multiple times, each registration overwrites the previous one.</p><p>Use <code>oci_unregister_taf_callback()</code> to explicitly unregister a user-defined callback.</p><p>TAF callback registration will NOT be saved across persistent connections, therefore the callback needs to be re-registered for a new persistent connection.</p>
	 * @param resource $connection <p>An Oracle connection identifier.</p>
	 * @param ?callable $callback <p>A user-defined callback to register for Oracle TAF. It can be a string of the function name or a Closure (anonymous function).</p> <p>The interface of a TAF user-defined callback function is as follows:</p>  <b>userCallbackFn</b>(<code>resource</code> <code>$connection</code>, <code>int</code> <code>$event</code>, <code>int</code> <code>$type</code>): <code>int</code> <p>See the parameter description and an example on  OCI8 Transparent Application Failover (TAF) Support page.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-register-taf-callback.php
	 * @see oci_unregister_taf_callback()
	 * @since PHP 7.0 >= 7.0.21, PHP 8, PHP 7 >= 7.1.7, PHP 8, PECL OCI8 >= 2.1.7
	 */
	function oci_register_taf_callback($connection, ?callable $callback): bool {}

	/**
	 * Returns field's value from the fetched row
	 * <p>Returns the data from <code>column</code> in the current row, fetched by <code>oci_fetch()</code>.</p><p>For details on the data type mapping performed by the OCI8 extension, see the datatypes supported by the driver</p>
	 * @param resource $statement
	 * @param string|int $column <p>Can be either use the column number (1-based) or the column name. The case of the column name must be the case that Oracle meta data describes the column as, which is uppercase for columns created case insensitively.</p>
	 * @return mixed <p>Returns everything as strings except for abstract types (ROWIDs, LOBs and FILEs). Returns <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-result.php
	 * @see oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_fetch_all()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_result($statement, string|int $column): mixed {}

	/**
	 * Rolls back the outstanding database transaction
	 * <p>Reverts all uncommitted changes for the Oracle <code>connection</code> and ends the transaction. It releases all locks held. All Oracle <code>SAVEPOINTS</code> are erased.</p><p>A transaction begins when the first SQL statement that changes data is executed with <code>oci_execute()</code> using the <b><code>OCI_NO_AUTO_COMMIT</code></b> flag. Further data changes made by other statements become part of the same transaction. Data changes made in a transaction are temporary until the transaction is committed or rolled back. Other users of the database will not see the changes until they are committed.</p><p>When inserting or updating data, using transactions is recommended for relational data consistency and for performance reasons.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code> or <code>oci_new_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-rollback.php
	 * @see oci_commit(), oci_execute()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_rollback($connection): bool {}

	/**
	 * Returns the Oracle Database version
	 * <p>Returns a string with the Oracle Database version and available options</p>
	 * @param resource $connection
	 * @return string|false <p>Returns the version information as a string or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-server-version.php
	 * @see oci_client_version()
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_server_version($connection): string|false {}

	/**
	 * Sets the action name
	 * <p>Sets the action name for Oracle tracing.</p><p>The action name is registered with the database when the next 'round-trip' from PHP to the database occurs, typically when an SQL statement is executed.</p><p>The action name can subsequently be queried from database administration views such as <code>V$SESSION</code>. It can be used for tracing and monitoring such as with <code>V$SQLAREA</code> and <code>DBMS_MONITOR.SERV_MOD_ACT_STAT_ENABLE</code>.</p><p>The value may be retained across persistent connections.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param string $action <p>User chosen string up to 32 bytes long.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-action.php
	 * @see oci_set_module_name(), oci_set_client_info(), oci_set_client_identifier(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0
	 */
	function oci_set_action($connection, string $action): bool {}

	/**
	 * Sets a millisecond timeout for database calls
	 * <p>Sets a timeout limiting the maxium time a database round-trip using this connection may take.</p><p>Each OCI8 operation may make zero or more calls to Oracle's client library. These internal calls may then may make zero or more round-trips to Oracle Database. If any one of those round-trips takes more than <code>time_out</code> milliseconds, then the operation is cancelled and an error is returned to the application.</p><p>The <code>time_out</code> value applies to each round-trip individually, not to the sum of all round-trips. Time spent processing in PHP OCI8 before or after the completion of each round-trip is not counted.</p><p>When a call is interrupted, Oracle will attempt to clean up the connection for reuse. This operation is allowed to run for another <code>time_out</code> period. Depending on the outcome of the cleanup, the connection may or may not be reusable.</p><p>When persistent connections are used, the timeout value will be retained across PHP requests.</p><p>The <b>oci_set_call_timeout()</b> function is available when OCI8 uses Oracle 18 (or later) Client libraries.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param int $timeout <p>The maximum time in milliseconds that any single round-trip between PHP and Oracle Database may take.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-call-timout.php
	 * @since PHP 7.2 >= 7.2.14, PHP 8, PHP 7 >= 7.3.1, PHP 8, PECL OCI8 >= 2.2.0
	 */
	function oci_set_call_timeout($connection, int $timeout): bool {}

	/**
	 * Sets the client identifier
	 * <p>Sets the client identifier used by various database components to identify lightweight application users who authenticate as the same database user.</p><p>The client identifier is registered with the database when the next 'round-trip' from PHP to the database occurs, typically when an SQL statement is executed.</p><p>The identifier can subsequently be queried, for example with <code>SELECT SYS_CONTEXT('USERENV','CLIENT_IDENTIFIER') FROM DUAL</code>. Database administration views such as <code>V$SESSION</code> will also contain the value. It can be used with <code>DBMS_MONITOR.CLIENT_ID_TRACE_ENABLE</code> for tracing and can also be used for auditing.</p><p>The value may be retained across page requests that use the same persistent connection.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param string $client_id <p>User chosen string up to 64 bytes long.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-client-identifier.php
	 * @see oci_set_module_name(), oci_set_action(), oci_set_client_info(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0
	 */
	function oci_set_client_identifier($connection, string $client_id): bool {}

	/**
	 * Sets the client information
	 * <p>Sets the client information for Oracle tracing.</p><p>The client information is registered with the database when the next 'round-trip' from PHP to the database occurs, typically when an SQL statement is executed.</p><p>The client information can subsequently be queried from database administration views such as <code>V$SESSION</code>.</p><p>The value may be retained across persistent connections.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param string $client_info <p>User chosen string up to 64 bytes long.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-client-info.php
	 * @see oci_set_module_name(), oci_set_action(), oci_set_client_identifier(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0
	 */
	function oci_set_client_info($connection, string $client_info): bool {}

	/**
	 * Sets the database operation
	 * <p>Sets the DBOP for Oracle tracing.</p><p>The database operation name is registered with the database when the next 'round-trip' from PHP to the database occurs, typically when a SQL statement is executed.</p><p>The database operation can subsequently be queried from database administration views such as <code>V$SQL_MONITOR</code>.</p><p>The <b>oci_set_db_operation()</b> function is available when OCI8 uses Oracle 12 (or later) Client libraries and Oracle Database 12 (or later).</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param string $action <p>User chosen string.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-db-operation.php
	 * @see oci_set_action(), oci_set_module_name(), oci_set_client_info(), oci_set_client_identifier()
	 * @since PHP 7 >= 7.2.14, PHP 8, PHP 7 >= 7.3.1, PHP 8, PECL OCI8 >= 2.2.0
	 */
	function oci_set_db_operation($connection, string $action): bool {}

	/**
	 * Sets the database edition
	 * <p>Sets the database "edition" of objects to be used by a subsequent connections.</p><p>Oracle Editions allow concurrent versions of applications to run using the same schema and object names. This is useful for upgrading live systems.</p><p>Call <b>oci_set_edition()</b> before calling <code>oci_connect()</code>, <code>oci_pconnect()</code> or <code>oci_new_connect()</code>.</p><p>If an edition is set that is not valid in the database, connection will fail even if <b>oci_set_edition()</b> returns success.</p><p>When using persistent connections, if a connection with the requested edition setting already exists, it is reused. Otherwise, a different persistent connection is created</p>
	 * @param string $edition <p>Oracle Database edition name previously created with the SQL "<code>CREATE EDITION</code>" command.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-edition.php
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0
	 */
	function oci_set_edition(string $edition): bool {}

	/**
	 * Sets the module name
	 * <p>Sets the module name for Oracle tracing.</p><p>The module name is registered with the database when the next 'round-trip' from PHP to the database occurs, typically when an SQL statement is executed.</p><p>The name can subsequently be queried from database administration views such as <code>V$SESSION</code>. It can be used for tracing and monitoring such as with <code>V$SQLAREA</code> and <code>DBMS_MONITOR.SERV_MOD_ACT_STAT_ENABLE</code>.</p><p>The value may be retained across persistent connections.</p>
	 * @param resource $connection <p>An Oracle connection identifier, returned by <code>oci_connect()</code>, <code>oci_pconnect()</code>, or <code>oci_new_connect()</code>.</p>
	 * @param string $name <p>User chosen <code>string</code> up to 48 bytes long.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-module-name.php
	 * @see oci_set_action(), oci_set_client_info(), oci_set_client_identifier(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PHP 8, PECL OCI8 >= 1.4.0
	 */
	function oci_set_module_name($connection, string $name): bool {}

	/**
	 * Sets number of rows to be prefetched by queries
	 * <p>Sets the number of rows to be buffered by the Oracle Client libraries after a successful query call to <code>oci_execute()</code> and for each subsequent internal fetch request to the database. For queries returning a large number of rows, performance can be significantly improved by increasing the prefetch count above the default oci8.default_prefetch value.</p><p>Prefetching is Oracle's efficient way of returning more than one data row from the database in each network request. This can result in better network and CPU utilization. The buffering of rows is internal to OCI8 and the behavior of OCI8 fetching functions is unchanged regardless of the prefetch count. For example, <code>oci_fetch_row()</code> will always return one row. The prefetch buffer is per-statement and is not used by re-executed statements or by other connections.</p><p>Call <b>oci_set_prefetch()</b> before calling <code>oci_execute()</code>.</p><p>A tuning goal is to set the prefetch value to a reasonable size for the network and database to handle. For queries returning a very large number of rows, overall system efficiency might be better if rows are retrieved from the database in several chunks (i.e set the prefetch value smaller than the number of rows). This allows the database to handle other users' statements while the PHP script is processing the current set of rows.</p><p>Query prefetching was introduced in Oracle 8<i>i</i>. REF CURSOR prefetching was introduced in Oracle 11<i>g</i>R2 and occurs when PHP is linked with Oracle 11<i>g</i>R2 (or later) Client libraries. Nested cursor prefetching was introduced in Oracle 11<i>g</i>R2 and requires both the Oracle Client libraries and the database to be version 11<i>g</i>R2 or greater.</p><p>Prefetching is not supported when queries contain LONG or LOB columns. The prefetch value is ignored and single-row fetches will be used in all the situations when prefetching is not supported.</p><p>When using Oracle Database 12<i>c</i>, the prefetch value set by PHP can be overridden by Oracle's client <code>oraaccess.xml</code> configuration file. Refer to Oracle documentation for more detail.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @param int $rows <p>The number of rows to be prefetched, &gt;= 0</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-prefetch.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_set_prefetch($statement, int $rows): bool {}

	/**
	 * Sets the amount of data prefetched for each CLOB or BLOB.
	 * <p>Sets the internal buffer size used to fetch each CLOB or BLOB value when the implementation gets the internal Oracle LOB locator from the database after a successful query call to <code>oci_execute()</code> and for each subsequent internal fetch request to the database. Increasing this value can improve the performance of fetching smaller LOBs by reducing round-trips between PHP and the database. Memory usage will change.</p><p>The value affects LOBs returned as OCILob instances and also those returned using <b><code>OCI_RETURN_LOBS</code></b>.</p><p>Call <b>oci_set_prefetch_lob()</b> before calling <code>oci_execute()</code>. If it is not called, the value of oci8.prefetch_lob_size is used.</p><p>The LOB prefetch value should only be set with Oracle Database 12.2 or later.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier created by <code>oci_parse()</code> and executed by <code>oci_execute()</code>, or a <code>REF CURSOR</code> statement identifier.</p>
	 * @param int $prefetch_lob_size <p>The number of bytes of each LOB to be prefetched, &gt;= 0</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-set-prefetch-lob.php
	 * @since PHP 8.2, PECL OCI8 >= 3.2
	 */
	function oci_set_prefetch_lob($statement, int $prefetch_lob_size): bool {}

	/**
	 * Returns the type of a statement
	 * <p>Returns a keyword identifying the type of the OCI8 <code>statement</code>.</p>
	 * @param resource $statement <p>A valid OCI8 statement identifier from <code>oci_parse()</code>.</p>
	 * @return string|false <p>Returns the type of <code>statement</code> as one of the following strings.</p> <b>Statement type</b>   Return String Notes     <code>ALTER</code> &#xA0;   <code>BEGIN</code> &#xA0;   <code>CALL</code> Introduced in PHP 5.2.1 (PECL OCI8 1.2.3)   <code>CREATE</code> &#xA0;   <code>DECLARE</code> &#xA0;   <code>DELETE</code> &#xA0;   <code>DROP</code> &#xA0;   <code>INSERT</code> &#xA0;   <code>SELECT</code> &#xA0;   <code>UPDATE</code> &#xA0;   <code>UNKNOWN</code> &#xA0;   <p>Returns <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.oci-statement-type.php
	 * @since PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0
	 */
	function oci_statement_type($statement): string|false {}

	/**
	 * Unregister a user-defined callback function for Oracle Database TAF
	 * <p>Unregister the user-defined callback function registered to <code>connection </code> by <code>oci_register_taf_callback()</code>. See OCI8 Transparent Application Failover (TAF) Support  for information.</p>
	 * @param resource $connection <p>An Oracle connection identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.oci-unregister-taf-callback.php
	 * @see oci_register_taf_callback()
	 * @since PHP 7.0 >= 7.0.23, PHP 8, PHP 7 >= 7.1.9, PHP 8, PECL OCI8 >= 2.1.7
	 */
	function oci_unregister_taf_callback($connection): bool {}

	/**
	 * Used with <code>oci_fetch_all()</code> and <code>oci_fetch_array()</code> to get results as an associative array.
	 */
	define('OCI_ASSOC', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding BFILEs.
	 */
	define('OCI_B_BFILE', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> to bind RAW values.
	 */
	define('OCI_B_BIN', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding BLOBs.
	 */
	define('OCI_B_BLOB', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> to bind a PL/SQL BOOLEAN variable.
	 */
	define('OCI_B_BOL', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding CFILEs.
	 */
	define('OCI_B_CFILEE', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding CLOBs.
	 */
	define('OCI_B_CLOB', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding cursors, previously allocated with <code>oci_new_descriptor()</code>.
	 */
	define('OCI_B_CURSOR', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of INTEGER.
	 */
	define('OCI_B_INT', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding named data types. Note: in PHP &lt; 5.0 it was called <b><code>OCI_B_SQLT_NTY</code></b>.
	 */
	define('OCI_B_NTY', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of NUMBER.
	 */
	define('OCI_B_NUM', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> when binding ROWIDs.
	 */
	define('OCI_B_ROWID', null);

	/**
	 * Used with <code>oci_fetch_all()</code> and <code>oci_fetch_array()</code> to get results as an array with both associative and number indices.
	 */
	define('OCI_BOTH', null);

	/**
	 * Statement execution mode for <code>oci_execute()</code> call. Automatically commit changes when the statement has succeeded.
	 */
	define('OCI_COMMIT_ON_SUCCESS', null);

	/**
	 * Used with <code>oci_connect()</code> for using Oracles' External or OS authentication. Introduced in PHP 5.3 and PECL OCI8 1.3.4.
	 */
	define('OCI_CRED_EXT', null);

	/**
	 * The same as <b><code>OCI_DTYPE_FILE</code></b>.
	 */
	define('OCI_D_FILE', null);

	/**
	 * The same as <b><code>OCI_DTYPE_LOB</code></b>.
	 */
	define('OCI_D_LOB', null);

	/**
	 * The same as <b><code>OCI_DTYPE_ROWID</code></b>.
	 */
	define('OCI_D_ROWID', null);

	/**
	 * See <b><code>OCI_NO_AUTO_COMMIT</code></b>.
	 */
	define('OCI_DEFAULT', null);

	/**
	 * Statement execution mode for <code>oci_execute()</code>. Use this mode if you want meta data such as the column names but don't want to fetch rows from the query.
	 */
	define('OCI_DESCRIBE_ONLY', null);

	/**
	 * This flag tells <code>oci_new_descriptor()</code> to initialize a new FILE descriptor.
	 */
	define('OCI_DTYPE_FILE', null);

	/**
	 * This flag tells <code>oci_new_descriptor()</code> to initialize a new LOB descriptor.
	 */
	define('OCI_DTYPE_LOB', null);

	/**
	 * This flag tells <code>oci_new_descriptor()</code> to initialize a new ROWID descriptor.
	 */
	define('OCI_DTYPE_ROWID', null);

	/**
	 * Obsolete. Statement fetch mode. Used when the application knows in advance exactly how many rows it will be fetching. This mode turns prefetching off for Oracle release 8 or later mode. The cursor is canceled after the desired rows are fetched which may result in reduced server-side resource usage.
	 */
	define('OCI_EXACT_FETCH', null);

	/**
	 * Default mode of <code>oci_fetch_all()</code>.
	 */
	define('OCI_FETCHSTATEMENT_BY_COLUMN', null);

	/**
	 * Alternative mode of <code>oci_fetch_all()</code>.
	 */
	define('OCI_FETCHSTATEMENT_BY_ROW', null);

	/**
	 * Used with OCILob::flush to free buffers used.
	 */
	define('OCI_LOB_BUFFER_FREE', null);

	/**
	 * Statement execution mode for <code>oci_execute()</code>. The transaction is not automatically committed when using this mode. For readability in new code, use this value instead of the older, equivalent <b><code>OCI_DEFAULT</code></b> constant. Introduced in PHP 5.3.2 (PECL OCI8 1.4).
	 */
	define('OCI_NO_AUTO_COMMIT', null);

	/**
	 * Used with <code>oci_fetch_all()</code> and <code>oci_fetch_array()</code> to get results as an enumerated array.
	 */
	define('OCI_NUM', null);

	/**
	 * Used with <code>oci_fetch_array()</code> to get the data value of the LOB instead of the descriptor.
	 */
	define('OCI_RETURN_LOBS', null);

	/**
	 * Used with <code>oci_fetch_array()</code> to get empty array elements if the row items value is <b><code>null</code></b>.
	 */
	define('OCI_RETURN_NULLS', null);

	/**
	 * Used with OCILob::seek to set the seek position.
	 */
	define('OCI_SEEK_CUR', null);

	/**
	 * Used with OCILob::seek to set the seek position.
	 */
	define('OCI_SEEK_END', null);

	/**
	 * Used with OCILob::seek to set the seek position.
	 */
	define('OCI_SEEK_SET', null);

	/**
	 * Obsolete.
	 */
	define('OCI_SYSDATE', null);

	/**
	 * Used with <code>oci_connect()</code> to connect with the SYSDBA privilege. The php.ini setting oci8.privileged_connect should be enabled to use this.
	 */
	define('OCI_SYSDBA', null);

	/**
	 * Used with <code>oci_connect()</code> to connect with the SYSOPER privilege. The php.ini setting oci8.privileged_connect should be enabled to use this.
	 */
	define('OCI_SYSOPER', null);

	/**
	 * Used with OCILob::writeTemporary to indicate that a temporary BLOB should be created.
	 */
	define('OCI_TEMP_BLOB', null);

	/**
	 * Used with OCILob::writeTemporary to indicate that a temporary CLOB should be created.
	 */
	define('OCI_TEMP_CLOB', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of CHAR.
	 */
	define('SQLT_AFC', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of VARCHAR2.
	 */
	define('SQLT_AVC', null);

	/**
	 * Not supported.
	 */
	define('SQLT_BDOUBLE', null);

	/**
	 * The same as <b><code>OCI_B_BFILE</code></b>.
	 */
	define('SQLT_BFILEE', null);

	/**
	 * Not supported.
	 */
	define('SQLT_BFLOAT', null);

	/**
	 * The same as <b><code>OCI_B_BIN</code></b>.
	 */
	define('SQLT_BIN', null);

	/**
	 * The same as <b><code>OCI_B_BLOB</code></b>.
	 */
	define('SQLT_BLOB', null);

	/**
	 * The same as <b><code>OCI_B_BOL</code></b>.
	 */
	define('SQLT_BOL', null);

	/**
	 * The same as <b><code>OCI_B_CFILEE</code></b>.
	 */
	define('SQLT_CFILEE', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of VARCHAR2. Also used with <code>oci_bind_by_name()</code>.
	 */
	define('SQLT_CHR', null);

	/**
	 * The same as <b><code>OCI_B_CLOB</code></b>.
	 */
	define('SQLT_CLOB', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of FLOAT.
	 */
	define('SQLT_FLT', null);

	/**
	 * The same as <b><code>OCI_B_INT</code></b>.
	 */
	define('SQLT_INT', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> to bind LONG RAW values.
	 */
	define('SQLT_LBI', null);

	/**
	 * Used with <code>oci_bind_by_name()</code> to bind LONG values.
	 */
	define('SQLT_LNG', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of LONG VARCHAR.
	 */
	define('SQLT_LVC', null);

	/**
	 * The same as <b><code>OCI_B_NTY</code></b>.
	 */
	define('SQLT_NTY', null);

	/**
	 * The same as <b><code>OCI_B_NUM</code></b>.
	 */
	define('SQLT_NUM', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of LONG.
	 */
	define('SQLT_ODT', null);

	/**
	 * The same as <b><code>OCI_B_ROWID</code></b>.
	 */
	define('SQLT_RDD', null);

	/**
	 * The same as <b><code>OCI_B_CURSOR</code></b>.
	 */
	define('SQLT_RSET', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of STRING.
	 */
	define('SQLT_STR', null);

	/**
	 * Not supported.
	 */
	define('SQLT_UIN', null);

	/**
	 * Used with <code>oci_bind_array_by_name()</code> to bind arrays of VARCHAR.
	 */
	define('SQLT_VCS', null);

}
