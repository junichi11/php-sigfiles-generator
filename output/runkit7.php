<?php



namespace {

	/**
	 * Similar to define(), but allows defining in class definitions as well
	 * @param string $constant_name <p>Name of constant to declare. Either a string to indicate a global constant, or <code>classname::constname</code> to indicate a class constant.</p>
	 * @param mixed $value <p>NULL, Bool, Long, Double, String, Array, or Resource value to store in the new constant.</p>
	 * @param int $newVisibility <p>Visibility of the constant, for class constants. Public by default. One of the <b><code>RUNKIT7_ACC_&#42;</code></b> constants.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-constant-add.php
	 * @see define(), runkit7_constant_redefine(), runkit7_constant_remove()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_constant_add(string $constant_name, mixed $value, int $newVisibility = null): bool {}

	/**
	 * Redefine an already defined constant
	 * @param string $constant_name <p>Constant to redefine. Either the name of a global constant, or <code>classname::constname</code> indicating class constant.</p>
	 * @param mixed $value <p>Value to assign to the constant.</p>
	 * @param int $new_visibility <p>The new visibility of the constant, for class constants. Unchanged by default. One of the <b><code>RUNKIT7_ACC_&#42;</code></b> constants.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-constant-redefine.php
	 * @see runkit7_constant_add(), runkit7_constant_remove()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_constant_redefine(string $constant_name, mixed $value, int $new_visibility = null): bool {}

	/**
	 * Remove/Delete an already defined constant
	 * @param string $constant_name <p>Name of the constant to remove. Either the name of a global constant, or <code>classname::constname</code> indicating a class constant.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-constant-remove.php
	 * @see define(), runkit7_constant_add(), runkit7_constant_redefine()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_constant_remove(string $constant_name): bool {}

	/**
	 * Add a new function, similar to create_function()
	 * @param string $function_name <p>Name of the function to be created</p>
	 * @param string $argument_list <p>Comma separated argument list</p>
	 * @param string $code <p>Code making up the function</p>
	 * @param bool $return_by_reference <p>Whether the function should return by reference.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @param string $return_type <p>The return type of the function.</p>
	 * @param bool $is_strict <p>Whether the function should behave as if it were declared in a file with <code>strict_types=1</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-function-add.php
	 * @see create_function(), runkit7_function_redefine(), runkit7_function_copy(), runkit7_function_rename(), runkit7_function_remove(), runkit7_method_add()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_function_add(string $function_name, string $argument_list, string $code, bool $return_by_reference = null, string $doc_comment = null, string $return_type = null, bool $is_strict = null): bool {}

	/**
	 * Copy a function to a new function name
	 * @param string $source_name <p>Name of the existing function</p>
	 * @param string $target_name <p>Name of the new function to copy the definition to</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-function-copy.php
	 * @see runkit7_function_add(), runkit7_function_redefine(), runkit7_function_rename(), runkit7_function_remove()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_function_copy(string $source_name, string $target_name): bool {}

	/**
	 * Replace a function definition with a new implementation
	 * <p><b>Note</b>: By default, only userspace functions may be removed, renamed, or modified. In order to override internal functions, you must enable the <code>runkit.internal_override</code> setting in php.ini.</p>
	 * @param string $function_name <p>Name of function to redefine</p>
	 * @param string $argument_list <p>New list of arguments to be accepted by function</p>
	 * @param string $code <p>New code implementation</p>
	 * @param bool $return_by_reference <p>Whether the function should return by reference.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @param string $return_type <p>The return type of the function.</p>
	 * @param bool $is_strict <p>Whether the function behaves as if it was declared in a file with <code>strict_types=1</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-function-redefine.php
	 * @see runkit7_function_add(), runkit7_function_copy(), runkit7_function_rename(), runkit7_function_remove(), runkit7_method_redefine()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_function_redefine(string $function_name, string $argument_list, string $code, bool $return_by_reference = null, string $doc_comment = null, string $return_type = null, bool $is_strict = null): bool {}

	/**
	 * Remove a function definition
	 * <p><b>Note</b>: By default, only userspace functions may be removed, renamed, or modified. In order to override internal functions, you must enable the <code>runkit.internal_override</code> setting in php.ini.</p>
	 * @param string $function_name <p>Name of the function to be deleted</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-function-remove.php
	 * @see runkit7_function_add(), runkit7_function_copy(), runkit7_function_redefine(), runkit7_function_rename()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_function_remove(string $function_name): bool {}

	/**
	 * Change a function's name
	 * <p><b>Note</b>: By default, only userspace functions may be removed, renamed, or modified. In order to override internal functions, you must enable the <code>runkit.internal_override</code> setting in php.ini.</p>
	 * @param string $source_name <p>Current function name</p>
	 * @param string $target_name <p>New function name</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-function-rename.php
	 * @see runkit7_function_add(), runkit7_function_copy(), runkit7_function_redefine(), runkit7_function_remove()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_function_rename(string $source_name, string $target_name): bool {}

	/**
	 * Process a PHP file importing function and class definitions, overwriting where appropriate
	 * <p>Similar to <code>include</code>. However, any code residing outside of a function or class is simply ignored. Additionally, depending on the value of <code>flags</code>, any functions or classes which already exist in the currently running environment may be automatically overwritten by their new definitions.</p>
	 * @param string $filename <p>Filename to import function and class definitions from</p>
	 * @param int $flags <p>Bitwise OR of the <code>RUNKIT7_IMPORT_&#42;</code> family of constants.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-import.php
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_import(string $filename, int $flags = null): bool {}

	/**
	 * Dynamically adds a new method to a given class
	 * @param string $class_name <p>The class to which this method will be added</p>
	 * @param string $method_name <p>The name of the method to add</p>
	 * @param string $argument_list <p>Comma-delimited list of arguments for the newly-created method</p>
	 * @param string $code <p>The code to be evaluated when <code>method_name</code> is called</p>
	 * @param int $flags <p>The type of method to create, can be <b><code>RUNKIT7_ACC_PUBLIC</code></b>, <b><code>RUNKIT7_ACC_PROTECTED</code></b> or <b><code>RUNKIT7_ACC_PRIVATE</code></b> optionally combined via bitwise OR with <b><code>RUNKIT7_ACC_STATIC</code></b></p>
	 * @param string $doc_comment <p>The doc comment of the method.</p>
	 * @param string $return_type <p>The return type of the method.</p>
	 * @param bool $is_strict <p>Whether the method behaves as if it were declared in a file with <code>strict_types=1</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-method-add.php
	 * @see runkit7_method_copy(), runkit7_method_redefine(), runkit7_method_remove(), runkit7_method_rename(), runkit7_function_add()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_method_add(string $class_name, string $method_name, string $argument_list, string $code, int $flags = RUNKIT7_ACC_PUBLIC, string $doc_comment = null, string $return_type = null, bool $is_strict = null): bool {}

	/**
	 * Copies a method from class to another
	 * @param string $destination_class <p>Destination class for copied method</p>
	 * @param string $destination_method_name <p>Destination method name</p>
	 * @param string $source_class <p>Source class of the method to copy</p>
	 * @param string $source_method_name <p>Name of the method to copy from the source class. If this parameter is omitted, the value of <code>destination_method_name</code> is assumed.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.runkit7-method-copy.php
	 * @see runkit7_method_add(), runkit7_method_redefine(), runkit7_method_remove(), runkit7_method_rename(), runkit7_function_copy()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_method_copy(string $destination_class, string $destination_method_name, string $source_class, string $source_method_name = null): bool {}

	/**
	 * Dynamically changes the code of the given method
	 * @param string $class_name <p>The class in which to redefine the method</p>
	 * @param string $method_name <p>The name of the method to redefine</p>
	 * @param string $argument_list <p>Comma-delimited list of arguments for the redefined method</p>
	 * @param string $code <p>The new code to be evaluated when <code>method_name</code> is called</p>
	 * @param int $flags <p>The redefined method can be <b><code>RUNKIT7_ACC_PUBLIC</code></b>, <b><code>RUNKIT7_ACC_PROTECTED</code></b> or <b><code>RUNKIT7_ACC_PRIVATE</code></b> optionally combined via bitwise OR with <b><code>RUNKIT7_ACC_STATIC</code></b></p>
	 * @param string $doc_comment <p>The doc comment of the method.</p>
	 * @param string $return_type <p>The return type of the method.</p>
	 * @param bool $is_strict <p>Whether the method behaves as if it was declared in a file with <code>strict_types=1</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-method-redefine.php
	 * @see runkit7_method_add(), runkit7_method_copy(), runkit7_method_remove(), runkit7_method_rename(), runkit7_function_redefine()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_method_redefine(string $class_name, string $method_name, string $argument_list, string $code, int $flags = RUNKIT7_ACC_PUBLIC, string $doc_comment = null, string $return_type = null, bool $is_strict = null): bool {}

	/**
	 * Dynamically removes the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p>
	 * @param string $class_name <p>The class in which to remove the method</p>
	 * @param string $method_name <p>The name of the method to remove</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-method-remove.php
	 * @see runkit7_method_add(), runkit7_method_copy(), runkit7_method_redefine(), runkit7_method_rename(), runkit7_function_remove()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_method_remove(string $class_name, string $method_name): bool {}

	/**
	 * Dynamically changes the name of the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p>
	 * @param string $class_name <p>The class in which to rename the method</p>
	 * @param string $source_method_name <p>The name of the method to rename</p>
	 * @param string $target_method_name <p>The new name to give to the renamed method</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.runkit7-method-rename.php
	 * @see runkit7_method_add(), runkit7_method_copy(), runkit7_method_redefine(), runkit7_method_remove(), runkit7_function_rename()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_method_rename(string $class_name, string $source_method_name, string $target_method_name): bool {}

	/**
	 * Return the integer object handle for given object
	 * <p>This function is equivalent to <code>spl_object_id()</code>.</p><p>This function returns a unique identifier for the object. The object id is unique for the lifetime of the object. Once the object is destroyed, its id may be reused for other objects. This behavior is similar to <code>spl_object_hash()</code>.</p>
	 * @param object $obj <p>Any object.</p>
	 * @return int <p>An integer identifier that is unique for each currently existing object and is always the same for each object.</p>
	 * @link https://php.net/manual/en/function.runkit7-object-id.php
	 * @see spl_object_id()
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_object_id(object $obj): int {}

	/**
	 * Return numerically indexed array of registered superglobals
	 * @return array <p>Returns a numerically indexed array of the currently registered superglobals. i.e. _GET, _POST, _REQUEST, _COOKIE, _SESSION, _SERVER, _ENV, _FILES</p>
	 * @link https://php.net/manual/en/function.runkit7-superglobals.php
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_superglobals(): array {}

	/**
	 * Returns information about the passed in value with data types, reference counts, etc
	 * @param string $value <p>The value to return the representation of</p>
	 * @return array <p>The array returned by this function contains the following elements:</p><ul> <li><code>address</code></li> <li><code>refcount</code> (optional)</li> <li><code>is_ref</code> (optional)</li> <li><code>type</code></li> </ul>
	 * @link https://php.net/manual/en/function.runkit7-zval-inspect.php
	 * @since PECL runkit7 >= Unknown
	 */
	function runkit7_zval_inspect(string $value): array {}

	/**
	 * Flag for <code>runkit7_method_add()</code> and <code>runkit7_method_redefine()</code> to make the method private.
	 */
	define('RUNKIT7_ACC_PRIVATE', null);

	/**
	 * Flag for <code>runkit7_method_add()</code> and <code>runkit7_method_redefine()</code> to make the method protected.
	 */
	define('RUNKIT7_ACC_PROTECTED', null);

	/**
	 * Flag for <code>runkit7_method_add()</code> and <code>runkit7_method_redefine()</code> to make the method public.
	 */
	define('RUNKIT7_ACC_PUBLIC', null);

	/**
	 * Include this flag to make the function or method being created or redeclared return a reference.
	 */
	define('RUNKIT7_ACC_RETURN_REFERENCE', null);

	/**
	 * Flag for <code>runkit7_method_add()</code> and <code>runkit7_method_redefine()</code> to make the method static.
	 */
	define('RUNKIT7_ACC_STATIC', null);

	/**
	 * Equal to 1 if runtime manipulation is enabled, and 0 otherwise.
	 */
	define('RUNKIT7_FEATURE_MANIPULATION', null);

	/**
	 * Always 0, it's impractical to implement the sandbox feature in php 7.
	 */
	define('RUNKIT7_FEATURE_SANDBOX', null);

	/**
	 * Equal to 1 if custom superglobals are enabled, and 0 otherwise.
	 */
	define('RUNKIT7_FEATURE_SUPERGLOBALS', null);

	/**
	 * <code>runkit7_import()</code> flag indicating that class constants should be imported from the specified file.
	 */
	define('RUNKIT7_IMPORT_CLASS_CONSTS', null);

	/**
	 * <code>runkit7_import()</code> flag indicating that class methods should be imported from the specified file.
	 */
	define('RUNKIT7_IMPORT_CLASS_METHODS', null);

	/**
	 * <code>runkit7_import()</code> flag indicating that class standard properties should be imported from the specified file.
	 */
	define('RUNKIT7_IMPORT_CLASS_PROPS', null);

	/**
	 * <code>runkit7_import()</code> flag indicating that class static properties should be imported from the specified file. Available since Runkit 1.0.1.
	 */
	define('RUNKIT7_IMPORT_CLASS_STATIC_PROPS', null);

	/**
	 * <code>runkit7_import()</code> flag representing a bitwise OR of the <b><code>RUNKIT7_IMPORT_CLASS_&#42;</code></b> constants.
	 */
	define('RUNKIT7_IMPORT_CLASSES', null);

	/**
	 * <code>runkit7_import()</code> flag indicating that normal functions should be imported from the specified file.
	 */
	define('RUNKIT7_IMPORT_FUNCTIONS', null);

	/**
	 * <code>runkit7_import()</code> flag indicating that if any of the imported functions, methods, constants, or properties already exist, they should be replaced with the new definitions. If this flag is not set, then any imported definitions which already exist will be discarded.
	 */
	define('RUNKIT7_IMPORT_OVERRIDE', null);

}
