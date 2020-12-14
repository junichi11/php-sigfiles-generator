<?php



namespace {

	/**
	 * Adds javascript code to the FDF document
	 * <p>Adds a script to the FDF, which Acrobat then adds to the doc-level scripts of a document, once the FDF is imported into it.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $script_name <p>The script name.</p>
	 * @param string $script_code <p>The script code. It is strongly suggested to use <code>\r</code> for linebreaks within the script code.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-add-doc-javascript.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_add_doc_javascript($fdf_document, string $script_name, string $script_code): bool {}

	/**
	 * Adds a template into the FDF document
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $fdf_document
	 * @param int $newpage
	 * @param string $filename
	 * @param string $template
	 * @param int $rename
	 * @return bool
	 * @link https://php.net/manual/en/function.fdf-add-template.php
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_add_template($fdf_document, int $newpage, string $filename, string $template, int $rename): bool {}

	/**
	 * Close an FDF document
	 * <p>Closes the FDF document.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.fdf-close.php
	 * @see fdf_open()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_close($fdf_document): void {}

	/**
	 * Create a new FDF document
	 * <p>Creates a new FDF document.</p><p>This function is needed if one would like to populate input fields in a PDF document with data.</p>
	 * @return resource <p>Returns a FDF document handle, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fdf-create.php
	 * @see fdf_close(), fdf_save(), fdf_open()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_create() {}

	/**
	 * Call a user defined function for each document value
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $fdf_document
	 * @param callable $function
	 * @param mixed $userdata
	 * @return bool
	 * @link https://php.net/manual/en/function.fdf-enum-values.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_enum_values($fdf_document, callable $function, mixed $userdata = NULL): bool {}

	/**
	 * Return error code for last fdf operation
	 * <p>Gets the error code set by the last FDF function call.</p><p>A textual description of the error may be obtained using with <code>fdf_error()</code>.</p>
	 * @return int <p>Returns the error code as an integer, or zero if there was no errors.</p>
	 * @link https://php.net/manual/en/function.fdf-errno.php
	 * @see fdf_error()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_errno(): int {}

	/**
	 * Return error description for FDF error code
	 * <p>Gets a textual description for the FDF error code given in <code>error_code</code>.</p>
	 * @param int $error_code <p>An error code obtained with <code>fdf_errno()</code>. If not provided, this function uses the internal error code set by the last operation.</p>
	 * @return string <p>Returns the error message as a string, or the string <code>no error</code> if nothing went wrong.</p>
	 * @link https://php.net/manual/en/function.fdf-error.php
	 * @see fdf_errno()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_error(int $error_code = -1): string {}

	/**
	 * Get the appearance of a field
	 * <p>Gets the appearance of a <code>field</code> (i.e. the value of the /AP key) and stores it in a file.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $field
	 * @param int $face <p>The possible values are <b><code>FDFNormalAP</code></b>, <b><code>FDFRolloverAP</code></b> and <b><code>FDFDownAP</code></b>.</p>
	 * @param string $filename <p>The appearance will be stored in this parameter.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-get-ap.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_ap($fdf_document, string $field, int $face, string $filename): bool {}

	/**
	 * Extracts uploaded file embedded in the FDF
	 * <p>Extracts a file uploaded by means of the "file selection" field <code>fieldname</code> and stores it under <code>savepath</code>.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname
	 * @param string $savepath <p>May be the name of a plain file or an existing directory in which the file is to be created under its original name. Any existing file under the same name will be overwritten.</p> <p><b>Note</b>:</p><p>There seems to be no other way to find out the original filename but to store the file using a directory as <code>savepath</code> and check for the basename it was stored under.</p>
	 * @return array <p>The returned array contains the following fields:</p><ul> <li> <code>path</code> - path were the file got stored </li> <li> <code>size</code> - size of the stored file in bytes </li> <li> <code>type</code> - mimetype if given in the FDF </li> </ul>
	 * @link https://php.net/manual/en/function.fdf-get-attachment.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_attachment($fdf_document, string $fieldname, string $savepath): array {}

	/**
	 * Get the value of the /Encoding key
	 * <p>Gets the value of the <code>/Encoding</code> key.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @return string <p>Returns the encoding as a string. An empty string is returned if the default <code>PDFDocEncoding/Unicode</code> scheme is used.</p>
	 * @link https://php.net/manual/en/function.fdf-get-encoding.php
	 * @see fdf_set_encoding()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_encoding($fdf_document): string {}

	/**
	 * Get the value of the /F key
	 * <p>Gets the value of the <code>/F</code> key.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @return string <p>Returns the key value, as a string.</p>
	 * @link https://php.net/manual/en/function.fdf-get-file.php
	 * @see fdf_set_file()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_file($fdf_document): string {}

	/**
	 * Gets the flags of a field
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $fdf_document
	 * @param string $fieldname
	 * @param int $whichflags
	 * @return int
	 * @link https://php.net/manual/en/function.fdf-get-flags.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_flags($fdf_document, string $fieldname, int $whichflags): int {}

	/**
	 * Gets a value from the opt array of a field
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $fdf_document
	 * @param string $fieldname
	 * @param int $element
	 * @return mixed
	 * @link https://php.net/manual/en/function.fdf-get-opt.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECLv
	 */
	function fdf_get_opt($fdf_document, string $fieldname, int $element = -1): mixed {}

	/**
	 * Get the value of the /STATUS key
	 * <p>Gets the value of the <code>/STATUS</code> key.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @return string <p>Returns the key value, as a string.</p>
	 * @link https://php.net/manual/en/function.fdf-get-status.php
	 * @see fdf_set_status()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_status($fdf_document): string {}

	/**
	 * Get the value of a field
	 * <p>Gets the value for the requested field.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string.</p>
	 * @param int $which <p>Elements of an array field can be retrieved by passing this optional parameter, starting at zero. For non-array fields, this parameter will be ignored.</p>
	 * @return mixed <p>Returns the field value.</p>
	 * @link https://php.net/manual/en/function.fdf-get-value.php
	 * @see fdf_set_value()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_value($fdf_document, string $fieldname, int $which = -1): mixed {}

	/**
	 * Gets version number for FDF API or file
	 * <p>Return the FDF version for the given document, or the toolkit API version number if no parameter is given.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @return string <p>Returns the version as a string. For the current FDF toolkit 5.0 the API version number is <code>5.0</code> and the document version number is either <code>1.2</code>, <code>1.3</code> or <code>1.4</code>.</p>
	 * @link https://php.net/manual/en/function.fdf-get-version.php
	 * @see fdf_set_version()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_get_version($fdf_document = NULL): string {}

	/**
	 * Sets FDF-specific output headers
	 * <p>This is a convenience function to set appropriate HTTP headers for FDF output. It sets the <code>Content-type:</code> to <code>application/vnd.fdf</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.fdf-header.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVNf
	 */
	function fdf_header(): void {}

	/**
	 * Get the next field name
	 * <p>Gets the name of the field after the given field. This name can be used with several functions.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string. If not given, the first field will be assumed.</p>
	 * @return string <p>Returns the field name as a string.</p>
	 * @link https://php.net/manual/en/function.fdf-next-field-name.php
	 * @see fdf_get_value()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_next_field_name($fdf_document, string $fieldname = NULL): string {}

	/**
	 * Open a FDF document
	 * <p>Opens a file with form data.</p><p>You can also use <code>fdf_open_string()</code> to process the results of a PDF form POST request.</p>
	 * @param string $filename <p>Path to the FDF file. This file must contain the data as returned from a PDF form or created using <code>fdf_create()</code> and <code>fdf_save()</code>.</p>
	 * @return resource <p>Returns a FDF document handle, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fdf-open.php
	 * @see fdf_open_string(), fdf_close(), fdf_create(), fdf_save()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_open(string $filename) {}

	/**
	 * Read a FDF document from a string
	 * <p>Reads form data from a string.</p><p>You can use <b>fdf_open_string()</b> together with $HTTP_FDF_DATA to process FDF form input from a remote client.</p>
	 * @param string $fdf_data <p>The data as returned from a PDF form or created using <code>fdf_create()</code> and <code>fdf_save_string()</code>.</p>
	 * @return resource <p>Returns a FDF document handle, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fdf-open-string.php
	 * @see fdf_open(), fdf_close(), fdf_create(), fdf_save_string()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_open_string(string $fdf_data) {}

	/**
	 * Sets target frame for form
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $fdf_document
	 * @param string $fieldname
	 * @param int $item
	 * @return bool
	 * @link https://php.net/manual/en/function.fdf-remove-item.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_remove_item($fdf_document, string $fieldname, int $item): bool {}

	/**
	 * Save a FDF document
	 * <p>Saves a FDF document.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $filename <p>If provided, the resulting FDF will be written in this parameter. Otherwise, this function will write the FDF to the default PHP output stream.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-save.php
	 * @see fdf_close(), fdf_create(), fdf_save_string()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_save($fdf_document, string $filename = NULL): bool {}

	/**
	 * Returns the FDF document as a string
	 * <p>Returns the FDF document as a string.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @return string <p>Returns the document as a string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fdf-save-string.php
	 * @see fdf_open_string(), fdf_close(), fdf_create(), fdf_save()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_save_string($fdf_document): string {}

	/**
	 * Set the appearance of a field
	 * <p>Sets the appearance of a field (i.e. the value of the <code>/AP</code> key).</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $field_name
	 * @param int $face <p>The possible values <b><code>FDFNormalAP</code></b>, <b><code>FDFRolloverAP</code></b> and <b><code>FDFDownAP</code></b>.</p>
	 * @param string $filename
	 * @param int $page_number
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-ap.php
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_ap($fdf_document, string $field_name, int $face, string $filename, int $page_number): bool {}

	/**
	 * Sets FDF character encoding
	 * <p>Sets the character encoding for the FDF document.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $encoding <p>The encoding name. The following values are supported: "<code>Shift-JIS</code>", "<code>UHC</code>", "<code>GBK</code>" and "<code>BigFive</code>".</p> <p>An empty string resets the encoding to the default <code>PDFDocEncoding/Unicode</code> scheme.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-encoding.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_encoding($fdf_document, string $encoding): bool {}

	/**
	 * Set PDF document to display FDF data in
	 * <p>Selects a different PDF document to display the form results in then the form it originated from.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $url <p>Should be given as an absolute URL.</p>
	 * @param string $target_frame <p>Use this parameter to specify the frame in which the document will be displayed. You can also set the default value for this parameter using <code>fdf_set_target_frame()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-file.php
	 * @see fdf_get_file(), fdf_set_target_frame()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_file($fdf_document, string $url, string $target_frame = NULL): bool {}

	/**
	 * Sets a flag of a field
	 * <p>Sets certain flags of the given field.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string.</p>
	 * @param int $whichFlags
	 * @param int $newFlags
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-flags.php
	 * @see fdf_set_opt()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_flags($fdf_document, string $fieldname, int $whichFlags, int $newFlags): bool {}

	/**
	 * Sets an javascript action of a field
	 * <p>Sets a javascript action for the given field.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string.</p>
	 * @param int $trigger
	 * @param string $script
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-javascript-action.php
	 * @see fdf_set_submit_form_action()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_javascript_action($fdf_document, string $fieldname, int $trigger, string $script): bool {}

	/**
	 * Adds javascript code to be executed when Acrobat opens the FDF
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $fdf_document
	 * @param string $script
	 * @param bool $before_data_import
	 * @return bool
	 * @link https://php.net/manual/en/function.fdf-set-on-import-javascript.php
	 * @see fdf_add_doc_javascript(), fdf_set_javascript_action()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_on_import_javascript($fdf_document, string $script, bool $before_data_import): bool {}

	/**
	 * Sets an option of a field
	 * <p>Sets options of the given field.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string.</p>
	 * @param int $element
	 * @param string $str1
	 * @param string $str2
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-opt.php
	 * @see fdf_set_flags()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_opt($fdf_document, string $fieldname, int $element, string $str1, string $str2): bool {}

	/**
	 * Set the value of the /STATUS key
	 * <p>Sets the value of the <code>/STATUS</code> key. When a client receives a FDF with a status set it will present the value in an alert box.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $status
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-status.php
	 * @see fdf_get_status()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_status($fdf_document, string $status): bool {}

	/**
	 * Sets a submit form action of a field
	 * <p>Sets a submit form action for the given field.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string.</p>
	 * @param int $trigger
	 * @param string $script
	 * @param int $flags
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-submit-form-action.php
	 * @see fdf_set_javascript_action()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_submit_form_action($fdf_document, string $fieldname, int $trigger, string $script, int $flags): bool {}

	/**
	 * Set target frame for form display
	 * <p>Sets the target frame to display a result PDF defined with <b>fdf_save_file()</b> in.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $frame_name <p>The frame name, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-target-frame.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_target_frame($fdf_document, string $frame_name): bool {}

	/**
	 * Set the value of a field
	 * <p>Sets the <code>value</code> for the given field.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $fieldname <p>Name of the FDF field, as a string.</p>
	 * @param mixed $value <p>This parameter will be stored as a string unless it is an array. In this case all array elements will be stored as a value array.</p>
	 * @param int $isName <p><b>Note</b>:</p><p>In older versions of the FDF toolkit last parameter determined if the field value was to be converted to a PDF Name (= 1) or set to a PDF String (= 0).</p> <p>The value is no longer used in the current toolkit version 5.0. For compatibility reasons it is still supported as an optional parameter beginning with PHP 4.3, but ignored internally.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-value.php
	 * @see fdf_get_value(), fdf_remove_item()
	 * @since PHP 4, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_value($fdf_document, string $fieldname, mixed $value, int $isName = NULL): bool {}

	/**
	 * Sets version number for a FDF file
	 * <p>Sets the FDF <code>version</code> for the given document.</p><p>Some features supported by this extension are only available in newer FDF versions.</p>
	 * @param resource $fdf_document <p>The FDF document handle, returned by <code>fdf_create()</code>, <code>fdf_open()</code> or <code>fdf_open_string()</code>.</p>
	 * @param string $version <p>The version number. For the current FDF toolkit 5.0, this may be either <code>1.2</code>, <code>1.3</code> or <code>1.4</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.fdf-set-version.php
	 * @see fdf_get_version()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN
	 */
	function fdf_set_version($fdf_document, string $version): bool {}

	define('FDFAA', null);

	define('FDFAction', null);

	define('FDFAP', null);

	define('FDFAPRef', null);

	define('FDFAS', null);

	define('FDFCalculate', null);

	define('FDFClearFf', null);

	define('FDFClrF', null);

	define('FDFDown', null);

	define('FDFDownAP', null);

	define('FDFEnter', null);

	define('FDFExit', null);

	define('FDFFf', null);

	define('FDFFile', null);

	define('FDFFlags', null);

	define('FDFFormat', null);

	define('FDFID', null);

	define('FDFIF', null);

	define('FDFKeystroke', null);

	define('FDFNormalAP', null);

	define('FDFRolloverAP', null);

	define('FDFSetF', null);

	define('FDFSetFf', null);

	define('FDFStatus', null);

	define('FDFUp', null);

	define('FDFValidate', null);

	define('FDFValue', null);

}
