<?php



namespace {

	/**
	 * Get the boolean value of a variable
	 * <p>Returns the <code>bool</code> value of <code>var</code>.</p>
	 * @param mixed $var <p>The scalar value being converted to a <code>bool</code>.</p>
	 * @return bool <p>The <code>bool</code> value of <code>var</code>.</p>
	 * @link https://php.net/manual/en/function.boolval.php
	 * @see floatval(), intval(), strval(), settype(), is_bool()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function boolval($var): bool {}

	/**
	 * Dumps a string representation of an internal zend value to output
	 * <p>Dumps a string representation of an internal zend value to output.</p>
	 * @param mixed $variable <p>The variable to dump.</p>
	 * @param mixed $variables <p>Further variables to dump.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.debug-zval-dump.php
	 * @see var_dump(), debug_backtrace()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function debug_zval_dump($variable, ...$variables): void {}

	/**
	 * Alias of floatval()
	 * <p>This function is an alias of: <code>floatval()</code>.</p>
	 * @param mixed $var <p>May be any scalar type. <b>floatval()</b> should not be used on objects, as doing so will emit an <b><code>E_NOTICE</code></b> level error and return 1.</p>
	 * @return float
	 * @link https://php.net/manual/en/function.doubleval.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function doubleval($var): float {}

	/**
	 * Get float value of a variable
	 * <p>Gets the <code>float</code> value of <code>var</code>.</p>
	 * @param mixed $var <p>May be any scalar type. <b>floatval()</b> should not be used on objects, as doing so will emit an <b><code>E_NOTICE</code></b> level error and return 1.</p>
	 * @return float <p>The float value of the given variable. Empty arrays return 0, non-empty arrays return 1.</p><p>Strings will most likely return 0 although this depends on the leftmost characters of the string. The common rules of float casting apply.</p>
	 * @link https://php.net/manual/en/function.floatval.php
	 * @see boolval(), intval(), strval(), settype()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function floatval($var): float {}

	/**
	 * Returns an array of all defined variables
	 * <p>This function returns a multidimensional array containing a list of all defined variables, be them environment, server or user-defined variables, within the scope that <b>get_defined_vars()</b> is called.</p>
	 * @return array <p>A multidimensional array with all the variables.</p>
	 * @link https://php.net/manual/en/function.get-defined-vars.php
	 * @see isset(), get_defined_functions(), get_defined_constants()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function get_defined_vars(): array {}

	/**
	 * Returns an integer identifier for the given resource
	 * <p>This function provides a type-safe way for generating the integer identifier for a resource.</p>
	 * @param resource $res <p>The evaluated resource handle.</p>
	 * @return int <p>The <code>int</code> identifier for the given <code>res</code>.</p><p>This function is essentially an <code>int</code> cast of <code>res</code> to make it easier to retrieve the resource ID.</p>
	 * @link https://php.net/manual/en/function.get-resource-id.php
	 * @see get_resource_type()
	 * @since PHP 8
	 */
	function get_resource_id($res): int {}

	/**
	 * Returns the resource type
	 * <p>This function gets the type of the given resource.</p>
	 * @param resource $handle <p>The evaluated resource handle.</p>
	 * @return string <p>If the given <code>handle</code> is a resource, this function will return a string representing its type. If the type is not identified by this function, the return value will be the string <code>Unknown</code>.</p><p>This function will return <b><code>NULL</code></b> and generate an error if <code>handle</code> is not a <code>resource</code>.</p>
	 * @link https://php.net/manual/en/function.get-resource-type.php
	 * @see get_resource_id()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function get_resource_type($handle): string {}

	/**
	 * Get the type of a variable
	 * <p>Returns the type of the PHP variable <code>var</code>. For type checking, use <code>is_&#42;</code> functions.</p>
	 * @param mixed $var <p>The variable being type checked.</p>
	 * @return string <p>Possible values for the returned string are:</p><ul> <li> <code>"boolean"</code> </li> <li> <code>"integer"</code> </li> <li> <code>"double"</code> (for historical reasons <code>"double"</code> is returned in case of a <code>float</code>, and not simply <code>"float"</code>) </li> <li> <code>"string"</code> </li> <li> <code>"array"</code> </li> <li> <code>"object"</code> </li> <li> <code>"resource"</code> </li> <li> <code>"resource (closed)"</code> as of PHP 7.2.0 </li> <li> <code>"NULL"</code> </li> <li> <code>"unknown type"</code> </li> </ul>
	 * @link https://php.net/manual/en/function.gettype.php
	 * @see settype(), get_class(), is_array(), is_bool(), is_callable(), is_float(), is_int(), is_null(), is_numeric(), is_object(), is_resource(), is_scalar(), is_string(), function_exists(), method_exists()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gettype($var): string {}

	/**
	 * Get the integer value of a variable
	 * <p>Returns the <code>int</code> value of <code>var</code>, using the specified <code>base</code> for the conversion (the default is base 10). <b>intval()</b> should not be used on objects, as doing so will emit an <b><code>E_NOTICE</code></b> level error and return 1.</p>
	 * @param mixed $var <p>The scalar value being converted to an integer</p>
	 * @param int $base <p>The base for the conversion</p> <p><b>Note</b>:</p><p>If <code>base</code> is 0, the base used is determined by the format of <code>var</code>:</p><ul> <li>  if string includes a "0x" (or "0X") prefix, the base is taken as 16 (hex); otherwise,  </li> <li>  if string starts with "0", the base is taken as 8 (octal); otherwise,  </li> <li>  the base is taken as 10 (decimal).  </li> </ul>
	 * @return int <p>The integer value of <code>var</code> on success, or 0 on failure. Empty arrays return 0, non-empty arrays return 1.</p><p>The maximum value depends on the system. 32 bit systems have a maximum signed integer range of -2147483648 to 2147483647. So for example on such a system, <code>intval('1000000000000')</code> will return 2147483647. The maximum signed integer value for 64 bit systems is 9223372036854775807.</p><p>Strings will most likely return 0 although this depends on the leftmost characters of the string. The common rules of integer casting apply.</p>
	 * @link https://php.net/manual/en/function.intval.php
	 * @see boolval(), floatval(), strval(), settype(), is_numeric()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function intval($var, int $base = 10): int {}

	/**
	 * Finds whether a variable is an array
	 * <p>Finds whether the given variable is an array.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is an <code>array</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-array.php
	 * @see is_float(), is_int(), is_string(), is_object()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_array($var): bool {}

	/**
	 * Finds out whether a variable is a boolean
	 * <p>Finds whether the given variable is a boolean.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is a <code>bool</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-bool.php
	 * @see is_float(), is_int(), is_string(), is_object(), is_array()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_bool($var): bool {}

	/**
	 * Verify that the contents of a variable can be called as a function
	 * <p>Verify that a value is a <code>callable</code>.</p>
	 * @param mixed $var <p>The value to check</p>
	 * @param bool $syntax_only <p>If set to <b><code>TRUE</code></b> the function only verifies that <code>var</code> might be a function or method. It will only reject simple variables that are not strings, or an array that does not have a valid structure to be used as a callback. The valid ones are supposed to have only 2 entries, the first of which is an object or a string, and the second a string.</p>
	 * @param string $callable_name <p>Receives the "callable name". In the example below it is "someClass::someMethod". Note, however, that despite the implication that someClass::SomeMethod() is a callable static method, this is not the case.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is callable, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-callable.php
	 * @see function_exists(), method_exists()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function is_callable($var, bool $syntax_only = FALSE, string &$callable_name = NULL): bool {}

	/**
	 * Verify that the contents of a variable is a countable value
	 * <p>Verify that the contents of a variable is an <code>array</code> or an object implementing Countable</p>
	 * @param mixed $var <p>The value to check</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is countable, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-countable.php
	 * @see is_array(), is_object(), is_iterable(), is_bool()
	 * @since PHP 7 >= 7.3.0
	 */
	function is_countable($var): bool {}

	/**
	 * Alias of is_float()
	 * <p>This function is an alias of: <code>is_float()</code>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.is-double.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_double($var): bool {}

	/**
	 * Finds whether the type of a variable is float
	 * <p>Finds whether the type of the given variable is float.</p><p><b>Note</b>:</p><p>To test if a variable is a number or a numeric string (such as form input, which is always a string), you must use <code>is_numeric()</code>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is a <code>float</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-float.php
	 * @see is_bool(), is_int(), is_numeric(), is_string(), is_array(), is_object()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_float($var): bool {}

	/**
	 * Find whether the type of a variable is integer
	 * <p>Finds whether the type of the given variable is integer.</p><p><b>Note</b>:</p><p>To test if a variable is a number or a numeric string (such as form input, which is always a string), you must use <code>is_numeric()</code>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is an <code>int</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-int.php
	 * @see is_bool(), is_float(), is_numeric(), is_string(), is_array(), is_object()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_int($var): bool {}

	/**
	 * Alias of is_int()
	 * <p>This function is an alias of: <code>is_int()</code>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.is-integer.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_integer($var): bool {}

	/**
	 * Verify that the contents of a variable is an iterable value
	 * <p>Verify that the contents of a variable is accepted by the <code>iterable</code> pseudo-type, i.e. that it is either an <code>array</code> or an object implementing Traversable</p>
	 * @param mixed $var <p>The value to check</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is iterable, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-iterable.php
	 * @see is_array()
	 * @since PHP 7 >= 7.1.0
	 */
	function is_iterable($var): bool {}

	/**
	 * Alias of is_int()
	 * <p>This function is an alias of: <code>is_int()</code>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.is-long.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_long($var): bool {}

	/**
	 * Finds whether a variable is NULL
	 * <p>Finds whether the given variable is <b><code>NULL</code></b>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is <code>null</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-null.php
	 * @see isset(), is_bool(), is_numeric(), is_float(), is_int(), is_string(), is_object(), is_array()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function is_null($var): bool {}

	/**
	 * Finds whether a variable is a number or a numeric string
	 * <p>Determines if the given variable is a number or a numeric string.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is a number or a numeric string, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-numeric.php
	 * @see ctype_digit(), is_bool(), is_null(), is_float(), is_int(), is_string(), is_object(), is_array()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_numeric($var): bool {}

	/**
	 * Finds whether a variable is an object
	 * <p>Finds whether the given variable is an object.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is an <code>object</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-object.php
	 * @see is_bool(), is_int(), is_float(), is_string(), is_array()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_object($var): bool {}

	/**
	 * Alias of is_float()
	 * <p>This function is an alias of: <code>is_float()</code>.</p><p>This alias was <i>DEPRECATED</i> in PHP 7.4.0, and <i>REMOVED</i> as of PHP 8.0.0.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.is-real.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_real($var): bool {}

	/**
	 * Finds whether a variable is a resource
	 * <p>Finds whether the given variable is a <code>resource</code>.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is a <code>resource</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-resource.php
	 * @see get_resource_type()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_resource($var): bool {}

	/**
	 * Finds whether a variable is a scalar
	 * <p>Finds whether the given variable is a scalar.</p><p>Scalar variables are those containing an <code>int</code>, <code>float</code>, <code>string</code> or <code>bool</code>. Types <code>array</code>, <code>object</code> and <code>resource</code> are not scalar.</p><p><b>Note</b>:</p><p><b>is_scalar()</b> does not consider <code>resource</code> type values to be scalar as resources are abstract datatypes which are currently based on integers. This implementation detail should not be relied upon, as it may change.</p><p><b>Note</b>:</p><p><b>is_scalar()</b> does not consider NULL to be scalar.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is a scalar, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-scalar.php
	 * @see is_float(), is_int(), is_numeric(), is_real(), is_string(), is_bool(), is_object(), is_array()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function is_scalar($var): bool {}

	/**
	 * Find whether the type of a variable is string
	 * <p>Finds whether the type of the given variable is string.</p>
	 * @param mixed $var <p>The variable being evaluated.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>var</code> is of type <code>string</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-string.php
	 * @see is_float(), is_int(), is_bool(), is_object(), is_array()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_string($var): bool {}

	/**
	 * Prints human-readable information about a variable
	 * <p><b>print_r()</b> displays information about a variable in a way that's readable by humans.</p><p><b>print_r()</b>, <code>var_dump()</code> and <code>var_export()</code> will also show protected and private properties of objects. Static class members will not be shown.</p>
	 * @param mixed $expression <p>The expression to be printed.</p>
	 * @param bool $return <p>If you would like to capture the output of <b>print_r()</b>, use the <code>return</code> parameter. When this parameter is set to <b><code>TRUE</code></b>, <b>print_r()</b> will return the information rather than print it.</p>
	 * @return mixed <p>If given a <code>string</code>, <code>int</code> or <code>float</code>, the value itself will be printed. If given an <code>array</code>, values will be presented in a format that shows keys and elements. Similar notation is used for <code>object</code>s.</p><p>When the <code>return</code> parameter is <b><code>TRUE</code></b>, this function will return a <code>string</code>. Otherwise, the return value is <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/en/function.print-r.php
	 * @see ob_start(), var_dump(), var_export()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function print_r($expression, bool $return = FALSE) {}

	/**
	 * Generates a storable representation of a value
	 * <p>Generates a storable representation of a value.</p><p>This is useful for storing or passing PHP values around without losing their type and structure.</p><p>To make the serialized string into a PHP value again, use <code>unserialize()</code>.</p>
	 * @param mixed $value <p>The value to be serialized. <b>serialize()</b> handles all types, except the <code>resource</code>-type and some <code>object</code>s (see note below). You can even <b>serialize()</b> arrays that contain references to itself. Circular references inside the array/object you are serializing will also be stored. Any other reference will be lost.</p> <p>When serializing objects, PHP will attempt to call the member functions __serialize() or __sleep() prior to serialization. This is to allow the object to do any last minute clean-up, etc. prior to being serialized. Likewise, when the object is restored using <code>unserialize()</code> the __unserialize() or __wakeup() member function is called.</p> <p><b>Note</b>:</p><p>Object's private members have the class name prepended to the member name; protected members have a '&#42;' prepended to the member name. These prepended values have null bytes on either side.</p>
	 * @return string <p>Returns a string containing a byte-stream representation of <code>value</code> that can be stored anywhere.</p><p>Note that this is a binary string which may include null bytes, and needs to be stored and handled as such. For example, <b>serialize()</b> output should generally be stored in a BLOB field in a database, rather than a CHAR or TEXT field.</p>
	 * @link https://php.net/manual/en/function.serialize.php
	 * @see unserialize(), var_export(), json_encode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function serialize($value): string {}

	/**
	 * Set the type of a variable
	 * <p>Set the type of variable <code>var</code> to <code>type</code>.</p>
	 * @param mixed $var <p>The variable being converted.</p>
	 * @param string $type <p>Possibles values of <code>type</code> are:</p><ul> <li>  "boolean" or "bool"  </li> <li>  "integer" or "int"  </li> <li>  "float" or "double"  </li> <li>  "string"  </li> <li>  "array"  </li> <li>  "object"  </li> <li>  "null"  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.settype.php
	 * @see gettype()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function settype(&$var, string $type): bool {}

	/**
	 * Get string value of a variable
	 * <p>Get the string value of a variable. See the documentation on <code>string</code> for more information on converting to string.</p><p>This function performs no formatting on the returned value. If you are looking for a way to format a numeric value as a string, please see <code>sprintf()</code> or <code>number_format()</code>.</p>
	 * @param mixed $var <p>The variable that is being converted to a <code>string</code>.</p> <p><code>var</code> may be any scalar type or an object that implements the __toString() method. You cannot use <b>strval()</b> on arrays or on objects that do not implement the __toString() method.</p>
	 * @return string <p>The <code>string</code> value of <code>var</code>.</p>
	 * @link https://php.net/manual/en/function.strval.php
	 * @see boolval(), floatval(), intval(), settype(), sprintf(), number_format()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function strval($var): string {}

	/**
	 * Creates a PHP value from a stored representation
	 * <p><b>unserialize()</b> takes a single serialized variable and converts it back into a PHP value.</p><p>Do not pass untrusted user input to <b>unserialize()</b> regardless of the <code>options</code> value of <code>allowed_classes</code>. Unserialization can result in code being loaded and executed due to object instantiation and autoloading, and a malicious user may be able to exploit this. Use a safe, standard data interchange format such as JSON (via <code>json_decode()</code> and <code>json_encode()</code>) if you need to pass serialized data to the user.</p><p>If you need to unserialize externally-stored serialized data, consider using <code>hash_hmac()</code> for data validation. Make sure data is not modified by anyone but you.</p>
	 * @param string $str <p>The serialized string.</p> <p>If the variable being unserialized is an object, after successfully reconstructing the object PHP will automatically attempt to call the __unserialize() or __wakeup() methods (if one exists).</p> <p></p><p><b>Note</b>: <b>unserialize_callback_func directive</b><br></p><p>It's possible to set a callback-function which will be called, if an undefined class should be instantiated during unserializing. (to prevent getting an incomplete <code>object</code> "__PHP_Incomplete_Class".) Use your php.ini, <code>ini_set()</code> or .htaccess to define unserialize_callback_func. Everytime an undefined class should be instantiated, it'll be called. To disable this feature just empty this setting.</p>
	 * @param array $options <p>Any options to be provided to <b>unserialize()</b>, as an associative array.</p>  <b>Valid options</b>   Name Type Description     <code>allowed_classes</code> <code>mixed</code>   Either an <code>array</code> of class names which should be accepted, <b><code>FALSE</code></b> to accept no classes, or <b><code>TRUE</code></b> to accept all classes. If this option is defined and <b>unserialize()</b> encounters an object of a class that isn't to be accepted, then the object will be instantiated as <b>__PHP_Incomplete_Class</b> instead.   Omitting this option is the same as defining it as <b><code>TRUE</code></b>: PHP will attempt to instantiate objects of any class.
	 * @return mixed <p>The converted value is returned, and can be a <code>bool</code>, <code>int</code>, <code>float</code>, <code>string</code>, <code>array</code> or <code>object</code>.</p><p>In case the passed string is not unserializeable, <b><code>FALSE</code></b> is returned and <b><code>E_NOTICE</code></b> is issued.</p>
	 * @link https://php.net/manual/en/function.unserialize.php
	 * @see json_encode(), json_decode(), hash_hmac(), serialize()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function unserialize(string $str, array $options = NULL) {}

	/**
	 * Dumps information about a variable
	 * <p>This function displays structured information about one or more expressions that includes its type and value. Arrays and objects are explored recursively with values indented to show structure.</p><p>All public, private and protected properties of objects will be returned in the output unless the object implements a __debugInfo() method (implemented in PHP 5.6.0).</p><p>As with anything that outputs its result directly to the browser, the output-control functions can be used to capture the output of this function, and save it in a <code>string</code> (for example).</p>
	 * @param mixed $expression <p>The expression to dump.</p>
	 * @param mixed $expressions <p>Further expressions to dump.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.var-dump.php
	 * @see print_r(), debug_zval_dump(), var_export()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function var_dump($expression, ...$expressions): void {}

	/**
	 * Outputs or returns a parsable string representation of a variable
	 * <p><b>var_export()</b> gets structured information about the given variable. It is similar to <code>var_dump()</code> with one exception: the returned representation is valid PHP code.</p>
	 * @param mixed $expression <p>The variable you want to export.</p>
	 * @param bool $return <p>If used and set to <b><code>TRUE</code></b>, <b>var_export()</b> will return the variable representation instead of outputting it.</p>
	 * @return mixed <p>Returns the variable representation when the <code>return</code> parameter is used and evaluates to <b><code>TRUE</code></b>. Otherwise, this function will return <b><code>NULL</code></b>.</p>
	 * @link https://php.net/manual/en/function.var-export.php
	 * @see print_r(), serialize(), var_dump()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function var_export($expression, bool $return = FALSE) {}

}
