<?php



namespace {

	/**
	 * Read and verify the map file
	 * <p>This reads and verifies the map file, storing the field count and info.</p><p>No locking is done, so you should avoid modifying your filePro database while it may be opened in PHP.</p>
	 * @param string $directory <p>The map directory.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.filepro.php
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro(string $directory): bool {}

	/**
	 * Find out how many fields are in a filePro database
	 * <p>Returns the number of fields (columns) in the opened filePro database.</p>
	 * @return int <p>Returns the number of fields in the opened filePro database, or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.filepro-fieldcount.php
	 * @see filepro()
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro_fieldcount(): int {}

	/**
	 * Gets the name of a field
	 * <p>Returns the name of the field corresponding to <code>field_number</code>.</p>
	 * @param int $field_number <p>The field number.</p>
	 * @return string <p>Returns the name of the field as a string, or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.filepro-fieldname.php
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro_fieldname(int $field_number): string {}

	/**
	 * Gets the type of a field
	 * <p>Returns the edit type of the field corresponding to <code>field_number</code>.</p>
	 * @param int $field_number <p>The field number.</p>
	 * @return string <p>Returns the edit type of the field as a string, or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.filepro-fieldtype.php
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro_fieldtype(int $field_number): string {}

	/**
	 * Gets the width of a field
	 * <p>Returns the width of the field corresponding to <code>field_number</code>.</p>
	 * @param int $field_number <p>The field number.</p>
	 * @return int <p>Returns the width of the field as a integer, or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.filepro-fieldwidth.php
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro_fieldwidth(int $field_number): int {}

	/**
	 * Retrieves data from a filePro database
	 * <p>Returns the data from the specified location in the database.</p>
	 * @param int $row_number <p>The row number. Must be between zero and the total number of rows minus one (0..<code>filepro_rowcount()</code> - 1)</p>
	 * @param int $field_number <p>The field number. Accepts values between zero and the total number of fields minus one (0..<code>filepro_fieldcount()</code> - 1)</p>
	 * @return string <p>Returns the specified data, or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.filepro-retrieve.php
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro_retrieve(int $row_number, int $field_number): string {}

	/**
	 * Find out how many rows are in a filePro database
	 * <p>Returns the number of rows in the opened filePro database.</p>
	 * @return int <p>Returns the number of rows in the opened filePro database, or <b><code>FALSE</code></b> on errors.</p>
	 * @link https://php.net/manual/en/function.filepro-rowcount.php
	 * @see filepro()
	 * @since PHP 4, PHP 5 < 5.2.0, PECL filepro SVN
	 */
	function filepro_rowcount(): int {}

}
