<?php



namespace {

	/**
	 * Generates a compact, storable binary representation of a value
	 * <p>Generates a storable representation of a value.</p><p>This is useful for storing or passing PHP values around without losing their type and structure.</p><p>To make the serialized string into a PHP value again, <code>igbinary_unserialize()</code> can be used.</p>
	 * @param mixed $value <p>The value to be serialized. <b>igbinary_serialize()</b> handles all types, except the <code>resource</code>-type and some <code>object</code>s (see note below). Even <code>array</code>s that contain references to itself can be <b>igbinary_serialize()</b>d. Circular references inside the <code>array</code> or <code>object</code> that is being serializend will also be stored. Any other reference will be lost.</p> <p>When serializing objects, igbinary will attempt to call the member functions __serialize() or __sleep() prior to serialization. This is to allow the object to do any last minute clean-up, etc. prior to being serialized. Likewise, when the object is restored using <code>igbinary_unserialize()</code> the __unserialize() or __wakeup() member function is called.</p> <p><b>Note</b>:</p><p>Private members of <code>object</code>s have the class name prepended to the member name; protected members have a <code>'&#42;'</code> prepended to the member name. These prepended values have null bytes on either side.</p>
	 * @return string|false <p>Returns a string containing a byte-stream representation of <code>value</code> that can be stored anywhere.</p><p>Note that this is a binary string which can include any byte value, and needs to be stored and handled as such. For example, <b>igbinary_serialize()</b> output should generally be stored in a <code>BLOB</code> field in a database, rather than a <code>CHAR</code> or <code>TEXT</code> field.</p>
	 * @link https://php.net/manual/en/function.igbinary-serialize.php
	 * @see serialize(), igbinary_unserialize(), var_export(), json_encode()
	 * @since PECL igbinary >= 1.1.1
	 */
	function igbinary_serialize(mixed $value): string|false {}

	/**
	 * Creates a PHP value from a stored representation from igbinary_serialize()
	 * <p><b>igbinary_unserialize()</b> takes a single serialized variable from <code>igbinary_serialize()</code> and converts it back into a PHP value.</p><p>Untrusted user input must not be passed to <b>igbinary_unserialize()</b>. Unserialization can result in code being loaded and executed due to object instantiation and autoloading, and a malicious user may be able to exploit this. Instead a safe, standard data interchange format such as JSON (via <code>json_decode()</code> and <code>json_encode()</code>) should be used, if serialized data needs to be passed to a client.</p><p>If there is the need to unserialize externally-stored serialized data, <code>hash_hmac()</code> can be used for data validation. It is important to ensure that nobody has tampered with the data.</p><p>The igbinary serialization format does not provide a way to distinguish between different reference groups for the same value. All PHP references to a given value as treated as part of the same reference group when unserialized, even if they were parts of difference reference groups when serialized.</p>
	 * @param string $str <p>The serialized string generated by <code>igbinary_serialize()</code>.</p> <p>If the value being unserialized is an <code>object</code>, after successfully reconstructing the object igbinary will automatically attempt to call the __unserialize() or __wakeup() methods (if one exists).</p> <p></p><p><b>Note</b>: <b>unserialize_callback_func directive</b><br></p><p>It is possible to set a callback function which will be called, if an undefined class should be instantiated during unserializing. (to prevent getting an incomplete <code>object</code> <code>__PHP_Incomplete_Class</code>.) The php.ini, <code>ini_set()</code> or .htaccess can be used to define unserialize_callback_func. Everytime an undefined class should be instantiated, it will be called. To disable this feature this setting should be emptied.</p>
	 * @return mixed <p>The converted value is returned, and can be a <code>bool</code>, <code>int</code>, <code>float</code>, <code>string</code>, <code>array</code>, <code>object</code>, or <code>null</code>.</p><p>In case the passed string is not unserializeable, <b><code>false</code></b> is returned and <b><code>E_NOTICE</code></b> or <b><code>E_WARNING</code></b> is issued.</p>
	 * @link https://php.net/manual/en/function.igbinary-unserialize.php
	 * @see unserialize(), json_encode(), json_decode(), hash_hmac(), igbinary_serialize()
	 * @since PECL igbinary >= 1.1.1
	 */
	function igbinary_unserialize(string $str): mixed {}

}
