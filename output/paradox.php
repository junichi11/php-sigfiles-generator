<?php



namespace {

	/**
	 * Closes a paradox database
	 * <p>Closes the paradox database. This function will not close the file. You will have to call <code>fclose()</code> afterwards.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-close.php
	 * @see px_open_fp(), px_new()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_close($pxdoc): bool {}

	/**
	 * Create a new paradox database
	 * <p>Create a new paradox database file. The actual file has to be opened before with <code>fopen()</code>. Make sure the file is writable.</p><p><b>Note</b>:</p><p>Calling this functions issues a warning about an empty tablename which can be safely ignored. Just set the tablename afterwards with <code>px_set_parameter()</code>.</p><p><b>Note</b>:</p><p>This function is highly experimental, due to insufficient documentation of the paradox file format. Database files created with this function can be opened by <code>px_open_fp()</code> and has been successfully opened by the Paradox software, but your milage may vary.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param resource $file <p>File handle as returned by <code>fopen()</code>.</p>
	 * @param array $fielddesc <p><b>fielddesc</b> is an array containing one element for each field specification. A field specification is an array itself with either two or three elements.The first element is always a string value used as the name of the field. It may not be larger than ten characters. The second element contains the field type which is one of the constants listed in the table Constants for field types. In the case of a character field or bcd field, you will have to provide a third element specifying the length respectively the precesion of the field. If your field specification contains blob fields, you will have to make sure to either make the field large enough for all field values to fit or specify a blob file with <code>px_set_blob_file()</code> for storing the blobs. If this is not done the field data is truncated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-create-fp.php
	 * @see px_new(), px_put_record(), fopen()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_create_fp($pxdoc, $file, array $fielddesc): bool {}

	/**
	 * Converts a date into a string
	 * <p>Turns a date as it stored in the paradox file into human readable format. Paradox dates are the number of days since 1.1.0000. This function is just for convenience. It can be easily replaced by some math and the calendar functions as demonstrated in the example below.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param int $value <p>Value as stored in paradox database field of type PX_FIELD_DATE.</p>
	 * @param string $format <p>String format similar to the format used by <code>date()</code>. The placeholders support by this function is a subset of those supported by <code>date()</code> (Y, y, m, n, d, j, L).</p>
	 * @return string <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-date2string.php
	 * @see px_timestamp2string(), jdtogregorian()
	 * @since PECL paradox >= 1.4.0
	 */
	function px_date2string($pxdoc, int $value, string $format): string {}

	/**
	 * Deletes resource of paradox database
	 * <p>Deletes the resource of the paradox file and frees all memory.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-delete.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_delete($pxdoc): bool {}

	/**
	 * Deletes record from paradox database
	 * <p>This function deletes a record from the database. It does not free the space in the database file but just marks it as deleted. Inserting a new record afterwards will reuse the space.</p><p><b>Note</b>:</p><p>This function is only available if pxlib &gt;= 0.6.0 is used.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param int $num <p>The record number is an artificial number counting records in the order as they are stored in the database. The first record has number 0.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-delete-record.php
	 * @since PECL paradox >= 1.4.0
	 */
	function px_delete_record($pxdoc, int $num): bool {}

	/**
	 * Returns the specification of a single field
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param int $fieldno <p>Number of the field. The first field has number 0. Specifying a field number less than 0 and greater or equal the number of fields will trigger an error.</p>
	 * @return array <p>Returns the specification of the <b>fieldno</b>'th database field as an associated array. The array contains three fields named <code>name</code>, <code>type</code>, and <code>size</code>.</p>
	 * @link https://php.net/manual/en/function.px-get-field.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_field($pxdoc, int $fieldno): array {}

	/**
	 * Return lots of information about a paradox file
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @return array <p>Returns an associated array with lots of information about a paradox file. This array is likely to be extended in the future.</p>  fileversion  <p>Version of file multiplied by 10, e.g. 70.</p>   tablename  <p>Name of table as stored in the file. If the database was created by pxlib, then this will be the name of the file without the extension.</p>   numrecords  <p>Number of records in this table.</p>   numfields  <p>Number of fields in this table.</p>   headersize  <p>Number of bytes used for the header. This is usually 0x800.</p>   recordsize  <p>Number of bytes used for each record. This is the sum of all field sizes (available since version 1.4.2).</p>   maxtablesize  <p>This value multiplied by 0x400 is the size of a data block in bytes. The maximum number of records in a datablock is the integer part of (maxtablesize &#42; 0x400 - 8) / recordsize.</p>   numdatablocks  <p>The number of data blocks in the file. Each data block contains a certain number of records which depends on the record size and the data block size (maxtablesize). Data blocks may not necessarily be completely filled.</p>   numindexfields  <p>Number of fields used for the primary index. The fields do always start with field number 1.</p>   codepage  <p>The DOS codepage which was used for encoding fields with character data. If the target encoding is not set with <code>px_set_targetencoding()</code> this will be the encoding for character fields when records are being accessed with <code>px_get_record()</code> or <code>px_retrieve_record()</code>.</p>
	 * @link https://php.net/manual/en/function.px-get-info.php
	 * @see px_numfields(), px_numrecords()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_info($pxdoc): array {}

	/**
	 * Gets a parameter
	 * <p>Gets various parameters.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $name <p>The <code>name</code> can be one of the following:</p>   tablename  <p>The name of the table as it will be stored in the database header.</p>   targetencoding  <p>The encoding for the output. Data which is being read from character fields with <code>px_get_record()</code> or <code>px_retrieve_record()</code> is recoded into the targetencoding. If it is not set, then the data will be delivered as stored in the database file.</p>   inputencoding  <p>The encoding of the input data which is to be stored into the database. When storing data of character fields in the database, the data is expected to be delivered in this encoding.</p>
	 * @return string|false <p>Returns the value of the parameter or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-get-parameter.php
	 * @since PECL paradox >= 1.1.0
	 */
	function px_get_parameter($pxdoc, string $name): string|false {}

	/**
	 * Returns record of paradox database
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param int $num <p>The record number is an artificial number counting records in the order as they are stored in the database. The first record has number 0.</p>
	 * @param int $mode <p>The optional <code>mode</code> can be <b><code>PX_KEYTOLOWER</code></b> or <b><code>PX_KEYTOUPPER</code></b> in order to convert the keys of the returned array into lower or upper case. If <code>mode</code> is not passed or is 0, then the key will be exactly like the field name. The element values will contain the field values. NULL values will be retained and are different from 0.0, 0 or the empty string. Fields of type <b><code>PX_FIELD_TIME</code></b> will be returned as an integer counting the number of milliseconds starting at midnight. A timestamp (<b><code>PX_FIELD_TIMESTAMP</code></b>) and date (<b><code>PX_FIELD_DATE</code></b>) are floating point respectively int values counting milliseconds respectively days starting at the beginning of julian calendar. Use the functions <code>px-timestamp2string()</code> and <code>px-date2string()</code> to convert them into a character representation.</p>
	 * @return array <p>Returns the <code>num</code>'th record from the paradox database. The record is returned as an associated array with its keys being the field names.</p>
	 * @link https://php.net/manual/en/function.px-get-record.php
	 * @see px_retrieve_record()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_record($pxdoc, int $num, int $mode = 0): array {}

	/**
	 * Returns the database schema
	 * <p><b>px_get_schema()</b> returns the database schema.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param int $mode <p>If the optional <code>mode</code> is <b><code>PX_KEYTOLOWER</code></b> or <b><code>PX_KEYTOUPPER</code></b> the keys of the returned array will be converted to lower or upper case. If <code>mode</code> is 0 or not passed at all, then the key name will be identical to the field name.</p>
	 * @return array <p>Returns the schema of a database file as an associated array. The key name is equal to the field name. Each array element is itself an associated array containing the two fields <code>type</code> and <code>size</code>. <code>type</code> is one of the constants in table Constants for field types. <code>size</code> is the number of bytes this field consumes in the record. The total of all field sizes is equal to the record size as it can be retrieved with <code>px-get-info()</code>.</p>
	 * @link https://php.net/manual/en/function.px-get-schema.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_get_schema($pxdoc, int $mode = 0): array {}

	/**
	 * Gets a value
	 * <p>Gets various values.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $name <p><code>name</code> can be one of the following.</p>  numprimkeys  <p>The number of primary keys. Paradox databases always use the first <code>numprimkeys</code> fields for the primary index.</p>
	 * @return float|false <p>Returns the value of the parameter or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-get-value.php
	 * @since PECL paradox >= 1.1.0
	 */
	function px_get_value($pxdoc, string $name): float|false {}

	/**
	 * Inserts record into paradox database
	 * <p>Inserts a new record into the database. The record is not necessarily inserted at the end of the database, but may be inserted at any position depending on where the first free slot is found.</p><p>The record data is passed as an array of field values. The elements in the array must correspond to the fields in the database. If the array has less elements than fields in the database, the remaining fields will be set to null.</p><p>Most field values can be passed as its equivalent php type e.g. a long value is used for fields of type PX_FIELD_LONG, PX_FIELD_SHORT and PX_FIELD_AUTOINC, a double values is used for fields of type PX_FIELD_CURRENCY and PX_FIELD_NUMBER. Field values for blob and alpha fields are passed as strings.</p><p>Fields of type PX_FIELD_TIME and PX_FIELD_DATE both require a long value. In the first case this is the number of milliseconds since midnight. In the second case this is the number of days since 1.1.0000. Below there are two examples to convert the current date or timestamp into a value suitable for one of paradox's date/time fields.</p><p><b>Note</b>:</p><p>This function is only available if pxlib &gt;= 0.6.0 is used.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param array $data <p>Associated or indexed array containing the field values as e.g. returned by <code>px_retrieve_record()</code>.</p>
	 * @return int <p>Returns <b><code>FALSE</code></b> on failure or the record number in case of success.</p>
	 * @link https://php.net/manual/en/function.px-insert-record.php
	 * @since PECL paradox >= 1.4.0
	 */
	function px_insert_record($pxdoc, array $data): int {}

	/**
	 * Create a new paradox object
	 * <p>Create a new paradox object. You will have to call this function before any further functions. <b>px_new()</b> does not create any file on the disk, it just creates an instance of a paradox object. This function must not be called if the object oriented interface is used. Use <code>new paradox_db()</code> instead.</p>
	 * @return resource <p>Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-new.php
	 * @see px_delete(), px_open_fp()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_new() {}

	/**
	 * Returns number of fields in a database
	 * <p>Get the number of fields in a database file.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @return int <p>Returns the number of fields in a database file. The return value of this function is identical to the element <code>numfields</code> in the array returned by <code>px_get_info()</code>.</p>
	 * @link https://php.net/manual/en/function.px-numfields.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_numfields($pxdoc): int {}

	/**
	 * Returns number of records in a database
	 * <p>Get the number of records in a database file.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @return int <p>Returns the number of records in a database file. The return value of this function is identical to the element <code>numrecords</code> in the array returned by <code>px_get_info()</code>.</p>
	 * @link https://php.net/manual/en/function.px-numrecords.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_numrecords($pxdoc): int {}

	/**
	 * Open paradox database
	 * <p>Open an existing paradox database file. The actual file has to be opened before with <code>fopen()</code>. This function can also be used to open primary index files and tread them like a paradox database. This is supported for those who would like to investigate a primary index. It cannot be used to accelerate access to a database file.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param resource $file <p><code>file</code> is the return value from <code>fopen()</code> with the actual database file as parameter. Make sure the database is writable if you plan to update or insert records.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-open-fp.php
	 * @see fopen(), px_new()
	 * @since PECL paradox >= 1.0.0
	 */
	function px_open_fp($pxdoc, $file): bool {}

	/**
	 * Stores record into paradox database
	 * <p>Stores a record into a paradox database. The record is always added at the end of the database, regardless of any free slots. Use <code>px_insert_record()</code> to add a new record into the first free slot found in the database.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param array $record <p>Associated or indexed array containing the field values as e.g. returned by <code>px_retrieve_record()</code>.</p>
	 * @param int $recpos <p>This optional parameter may be used to specify a record number greater than the current number of records in the database. The function will add as many empty records as needed. There is hardly any need for this parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-put-record.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_put_record($pxdoc, array $record, int $recpos = -1): bool {}

	/**
	 * Returns record of paradox database
	 * <p>This function is very similar to <code>px_get_record()</code> but uses internally a different approach to retrieve the data. It relies on pxlib for reading each single field value, which usually results in support for more field types.</p><p><b>Note</b>:</p><p>This function is only available if pxlib &gt;= 0.6.0 is used.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param int $num <p>The record number is an artificial number counting records in the order as they are stored in the database. The first record has number 0.</p>
	 * @param int $mode <p>The optional <code>mode</code> can be <b><code>PX_KEYTOLOWER</code></b> or <b><code>PX_KEYTOUPPER</code></b> in order to convert the keys into lower or upper case. If <code>mode</code> is not passed or is 0, then the key will be exactly like the field name. The element values will contain the field values. NULL values will be retained and are different from 0.0, 0 or the empty string. Fields of type <b><code>PX_FIELD_TIME</code></b> will be returned as an integer counting the number of milliseconds starting at midnight. A timestamp is a floating point value also counting milliseconds starting at the beginning of julian calendar.</p>
	 * @return array <p>Returns the <code>num</code>'th record from the paradox database. The record is returned as an associated array with its keys being the field names.</p>
	 * @link https://php.net/manual/en/function.px-retrieve-record.php
	 * @see px_get_record()
	 * @since PECL paradox >= 1.4.0
	 */
	function px_retrieve_record($pxdoc, int $num, int $mode = 0): array {}

	/**
	 * Sets the file where blobs are read from
	 * <p>Sets the name of the file where blobs are going to be read from or written into. Without calling this function, <code>px_get_record()</code> or <code>px_retrieve_record()</code> will only return data in blob fields if the data is part of the record and not stored in the blob file. Blob data is stored in the record if it is small enough to fit in the size of the blob field.</p><p>Calling <code>px_put_record()</code>, <code>px_insert_record()</code>, or <code>px_update_record()</code> without calling <b>px_set_blob_file()</b> will result in truncated blob fields unless the data fits into the database file.</p><p>Calling this function twice will close the first blob file and open the new one.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $filename <p>The name of the file. Its extension should be <code>.MB</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-set-blob-file.php
	 * @since PECL paradox >= 1.3.0
	 */
	function px_set_blob_file($pxdoc, string $filename): bool {}

	/**
	 * Sets a parameter
	 * <p>Sets various parameters.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $name <p>Depending on the parameter you want to set, <code>name</code> can be one of the following.</p>   tablename  <p>The name of the table as it will be stored in the database header.</p>   targetencoding  <p>The encoding for the output. Data which is being read from character fields is recoded into the targetencoding.</p>   inputencoding  <p>The encoding of the input data which is to be stored into the database.</p>
	 * @param string $value <p>The value of parameter to set. For inputencoding and targetencoding this must be the name of the encoding as understood by iconv or recode, e.g. iso-8859-1, utf-8, cp850.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-set-parameter.php
	 * @see px_get_info()
	 * @since PECL paradox >= 1.1.0
	 */
	function px_set_parameter($pxdoc, string $name, string $value): bool {}

	/**
	 * Sets the name of a table (deprecated)
	 * <p>Sets the table name of a paradox database, which was created with <code>px_create_fp()</code>. This function is deprecated use <code>px_set_parameter()</code> instead.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $name
	 * @return void|false <p>Returns <b><code>NULL</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-set-tablename.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_set_tablename($pxdoc, string $name): void {}

	/**
	 * Sets the encoding for character fields (deprecated)
	 * <p>Set the encoding for data retrieved from a character field. All character fields will be recoded to the encoding set by this function. If the encoding is not set, the character data will be returned in the DOS code page encoding as specified in the database file. The <code>encoding</code> can be any string identifier known to iconv or recode. On Unix systems run <code>iconv -l</code> for a list of available encodings.</p><p>This function is deprecated and should be replaced by calling <code>px_set_parameter()</code>.</p><p>See also <code>px_get_info()</code> to determine the DOS code page as stored in the database file.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $encoding <p>The encoding for the output. Data which is being read from character fields is recoded into the targetencoding.</p>
	 * @return bool <p>Returns <b><code>FALSE</code></b> if the encoding could not be set, e.g. the encoding is unknown, or pxlib does not support recoding at all. In the second case a warning will be issued.</p>
	 * @link https://php.net/manual/en/function.px-set-targetencoding.php
	 * @since PECL paradox >= 1.0.0
	 */
	function px_set_targetencoding($pxdoc, string $encoding): bool {}

	/**
	 * Sets a value
	 * <p>Sets various values.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param string $name <p><code>name</code> can be one of the following.</p>   numprimkeys  <p>The number of primary keys. Paradox databases always use the first <b>numprimkeys</b> fields for the primary index.</p>
	 * @param float $value
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-set-value.php
	 * @since PECL paradox >= 1.1.0
	 */
	function px_set_value($pxdoc, string $name, float $value): bool {}

	/**
	 * Converts the timestamp into a string
	 * <p>Turns a timestamp as it stored in the paradox file into human readable format. Paradox timestamps are the number of miliseconds since 0001-01-02. This function is just for convenience. It can be easily replaced by some math and the calendar functions as demonstrated in the following example.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database.</p>
	 * @param float $value <p>Value as stored in paradox database field of type PX_FIELD_TIME, or PX_FIELD_TIMESTAMP.</p>
	 * @param string $format <p>String format similar to the format used by <code>date()</code>. The placeholders support by this function is a subset of those supported by <code>date()</code> (Y, y, m, n, d, j, H, h, G, g, i, s, A, a, L).</p>
	 * @return string <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-timestamp2string.php
	 * @see px_date2string(), jdtogregorian()
	 * @since PECL paradox >= 1.4.0
	 */
	function px_timestamp2string($pxdoc, float $value, string $format): string {}

	/**
	 * Updates record in paradox database
	 * <p>Updates an exiting record in the database. The record starts at 0.</p><p>The record data is passed as an array of field values. The elements in the array must correspond to the fields in the database. If the array has less elements than fields in the database, the remaining fields will be set to null.</p><p><b>Note</b>:</p><p>This function is only available if pxlib &gt;= 0.6.0 is used.</p>
	 * @param resource $pxdoc <p>Resource identifier of the paradox database as returned by <code>px_new()</code>.</p>
	 * @param array $data <p>Associated array containing the field values as returned by <code>px_retrieve_record()</code>.</p>
	 * @param int $num <p>The record number is an artificial number counting records in the order as they are stored in the database. The first record has number 0.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.px-update-record.php
	 * @since PECL paradox >= 1.4.0
	 */
	function px_update_record($pxdoc, array $data, int $num): bool {}

	/**
	 * Character data with fixed length
	 */
	define('PX_FIELD_ALPHA', null);

	/**
	 * Auto incrementing interger (like PX_FIELD_LONG)
	 */
	define('PX_FIELD_AUTOINC', null);

	/**
	 * Decimal number stored in bcd format (not supported)
	 */
	define('PX_FIELD_BCD', null);

	/**
	 * Binary large object (not supported)
	 */
	define('PX_FIELD_BLOB', null);

	/**
	 * Array of Bytes with not more than 255 bytes (not supported)
	 */
	define('PX_FIELD_BYTES', null);

	/**
	 * same as PX_FIELD_NUMBER
	 */
	define('PX_FIELD_CURRENCY', null);

	/**
	 * Date, number of days since 1.1.0000
	 */
	define('PX_FIELD_DATE', null);

	/**
	 * Binary large object
	 */
	define('PX_FIELD_FMTMEMOBLOB', null);

	/**
	 * Graphic (basically a blob, not supported)
	 */
	define('PX_FIELD_GRAPHIC', null);

	/**
	 * Boolean
	 */
	define('PX_FIELD_LOGICAL', null);

	/**
	 * Long integer (4 Bytes)
	 */
	define('PX_FIELD_LONG', null);

	/**
	 * Binary large object
	 */
	define('PX_FIELD_MEMOBLOB', null);

	/**
	 * Double
	 */
	define('PX_FIELD_NUMBER', null);

	/**
	 * OLE object (basically a blob, not supported)
	 */
	define('PX_FIELD_OLE', null);

	/**
	 * Short integer (2 Bytes)
	 */
	define('PX_FIELD_SHORT', null);

	/**
	 * time, number of milli seconds since midnight
	 */
	define('PX_FIELD_TIME', null);

	/**
	 * timestamp, number of milli seconds since 1.1.0000
	 */
	define('PX_FIELD_TIMESTAMP', null);

	/**
	 * Incremental secondary index
	 */
	define('PX_FILE_INC_SEC_INDEX', null);

	/**
	 * Non incremental secondary index
	 */
	define('PX_FILE_INC_SEC_INDEX_G', null);

	/**
	 * Indexed database
	 */
	define('PX_FILE_INDEX_DB', null);

	/**
	 * None incremental secondary index
	 */
	define('PX_FILE_NON_INC_SEC_INDEX', null);

	/**
	 * Non incremental secondary index
	 */
	define('PX_FILE_NON_INC_SEC_INDEX_G', null);

	/**
	 * None indexed database
	 */
	define('PX_FILE_NON_INDEX_DB', null);

	/**
	 * Primary index
	 */
	define('PX_FILE_PRIM_INDEX', null);

	/**
	 * Secondary index
	 */
	define('PX_FILE_SEC_INDEX', null);

	/**
	 * Secondary index
	 */
	define('PX_FILE_SEC_INDEX_G', null);

	/**
	 * Turn all field names into lower case
	 */
	define('PX_KEYTOLOWER', null);

	/**
	 * Turn all field names into upper case
	 */
	define('PX_KEYTOUPPER', null);

}
