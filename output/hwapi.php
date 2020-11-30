<?php



namespace {

	/**
	 * Creates instance of class hw_api_attribute
	 * <p>Creates a new instance of hw_api_attribute with the given name and value.</p>
	 * @param string $name <p>The attribute name.</p>
	 * @param string $value <p>The attribute value.</p>
	 * @return HW_API_Attribute <p>Returns an instance of <b>hw_api_attribute</b>.</p>
	 * @link http://php.net/manual/en/function.hwapi-attribute-new.php
	 * @since PHP 5 < 5.2.0
	 */
	function hwapi_attribute_new(string $name = NULL, string $value = NULL): \HW_API_Attribute {}

	/**
	 * Create new instance of class hw_api_content
	 * <p>Creates a new content object from the string <code>content</code>.</p>
	 * @param string $content
	 * @param string $mimetype <p>The mimetype for the contents.</p>
	 * @return HW_API_Content
	 * @link http://php.net/manual/en/function.hwapi-content-new.php
	 * @since PHP 5 < 5.2.0
	 */
	function hwapi_content_new(string $content, string $mimetype): \HW_API_Content {}

	/**
	 * Returns object of class hw_api
	 * <p>Opens a connection to the Hyperwave server on host <code>hostname</code>. The protocol used is HGCSP.</p>
	 * @param string $hostname <p>The host name.</p>
	 * @param int $port <p>If you do not pass a port number, 418 is used.</p>
	 * @return HW_API <p>Returns an instance of <b>HW_API</b>.</p>
	 * @link http://php.net/manual/en/function.hwapi-hgcsp.php
	 * @since PHP 4, PHP 5 < 5.2.0, PECL hwapi SVN
	 */
	function hwapi_hgcsp(string $hostname, int $port = NULL): \HW_API {}

	/**
	 * Creates a new instance of class hwapi_object_new
	 * <p>Creates a new instance of the class <b>hw_api_object</b>.</p>
	 * @param array $parameter
	 * @return hw_api_object
	 * @link http://php.net/manual/en/function.hwapi-object-new.php
	 * @since PHP 5 < 5.2.0
	 */
	function hwapi_object_new(array $parameter): \hw_api_object {}

}
