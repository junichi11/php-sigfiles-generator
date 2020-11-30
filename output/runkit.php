<?php



namespace {

	/**
	 * Convert a base class to an inherited class, add ancestral methods when appropriate
	 * @param string $classname <p>Name of class to be adopted</p>
	 * @param string $parentname <p>Parent class which child class is extending</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-class-adopt.php
	 * @see runkit_class_emancipate()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_class_adopt(string $classname, string $parentname): bool {}

	/**
	 * Convert an inherited class to a base class, removes any method whose scope is ancestral
	 * @param string $classname <p>Name of class to emancipate</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-class-emancipate.php
	 * @see runkit_class_adopt()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_class_emancipate(string $classname): bool {}

	/**
	 * Similar to define(), but allows defining in class definitions as well
	 * @param string $constname <p>Name of constant to declare. Either a string to indicate a global constant, or <i>classname::constname</i> to indicate a class constant.</p>
	 * @param mixed $value <p>NULL, Bool, Long, Double, String, or Resource value to store in the new constant.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-constant-add.php
	 * @see define(), runkit_constant_redefine(), runkit_constant_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_constant_add(string $constname, $value): bool {}

	/**
	 * Redefine an already defined constant
	 * @param string $constname <p>Constant to redefine. Either string indicating global constant, or <i>classname::constname</i> indicating class constant.</p>
	 * @param mixed $newvalue <p>New value to assign to constant.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-constant-redefine.php
	 * @see runkit_constant_add(), runkit_constant_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_constant_redefine(string $constname, $newvalue): bool {}

	/**
	 * Remove/Delete an already defined constant
	 * @param string $constname <p>Name of constant to remove. Either a string indicating a global constant, or <i>classname::constname</i> indicating a class constant.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-constant-remove.php
	 * @see define(), runkit_constant_add(), runkit_constant_redefine()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_constant_remove(string $constname): bool {}

	/**
	 * Add a new function, similar to create_function()
	 * @param string $funcname <p>Name of function to be created</p>
	 * @param string $arglist <p>Comma separated argument list</p>
	 * @param string $code <p>Code making up the function</p>
	 * @param bool $return_by_reference <p>Whether the function should return by reference.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-function-add.php
	 * @see create_function(), runkit_function_redefine(), runkit_function_copy(), runkit_function_rename(), runkit_function_remove(), runkit_method_add()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_add(string $funcname, string $arglist, string $code, bool $return_by_reference = NULL, string $doc_comment = NULL): bool {}

	/**
	 * Copy a function to a new function name
	 * @param string $funcname <p>Name of existing function</p>
	 * @param string $targetname <p>Name of new function to copy definition to</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-function-copy.php
	 * @see runkit_function_add(), runkit_function_redefine(), runkit_function_rename(), runkit_function_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_copy(string $funcname, string $targetname): bool {}

	/**
	 * Replace a function definition with a new implementation
	 * <p><b>Note</b>: By default, only userspace functions may be removed, renamed, or modified. In order to override internal functions, you must enable the <i>runkit.internal_override</i> setting in php.ini.</p>
	 * @param string $funcname <p>Name of function to redefine</p>
	 * @param string $arglist <p>New list of arguments to be accepted by function</p>
	 * @param string $code <p>New code implementation</p>
	 * @param bool $return_by_reference <p>Whether the function should return by reference.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-function-redefine.php
	 * @see runkit_function_add(), runkit_function_copy(), runkit_function_rename(), runkit_function_remove(), runkit_method_redefine()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_redefine(string $funcname, string $arglist, string $code, bool $return_by_reference = NULL, string $doc_comment = NULL): bool {}

	/**
	 * Remove a function definition
	 * <p><b>Note</b>: By default, only userspace functions may be removed, renamed, or modified. In order to override internal functions, you must enable the <i>runkit.internal_override</i> setting in php.ini.</p>
	 * @param string $funcname <p>Name of function to be deleted</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-function-remove.php
	 * @see runkit_function_add(), runkit_function_copy(), runkit_function_redefine(), runkit_function_rename()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_remove(string $funcname): bool {}

	/**
	 * Change a function's name
	 * <p><b>Note</b>: By default, only userspace functions may be removed, renamed, or modified. In order to override internal functions, you must enable the <i>runkit.internal_override</i> setting in php.ini.</p>
	 * @param string $funcname <p>Current function name</p>
	 * @param string $newname <p>New function name</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-function-rename.php
	 * @see runkit_function_add(), runkit_function_copy(), runkit_function_redefine(), runkit_function_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_rename(string $funcname, string $newname): bool {}

	/**
	 * Process a PHP file importing function and class definitions, overwriting where appropriate
	 * <p>Similar to <code>include</code> however any code residing outside of a function or class is simply ignored. Additionally, depending on the value of <code>flags</code>, any functions or classes which already exist in the currently running environment may be automatically overwritten by their new definitions.</p>
	 * @param string $filename <p>Filename to import function and class definitions from</p>
	 * @param int $flags <p>Bitwise OR of the <i>RUNKIT_IMPORT_&#42;</i> family of constants.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-import.php
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_import(string $filename, int $flags = RUNKIT_IMPORT_CLASS_METHODS): bool {}

	/**
	 * Check the PHP syntax of the specified php code
	 * <p>The <b>runkit_lint()</b> function performs a syntax (lint) check on the specified php code testing for scripting errors. This is similar to using <i>php -l</i> from the command line except <b>runkit_lint()</b> accepts actual code rather than a filename.</p><p><b>Note</b>: Sandbox support (required for <b>runkit_lint()</b>, <code>runkit_lint_file()</code>, and the <b>Runkit_Sandbox</b> class) is only available as of PHP 5.1.0 or specially patched versions of PHP 5.0, and requires that thread safety be enabled. See the README file included in the runkit package for more information.</p>
	 * @param string $code <p>PHP Code to be lint checked</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-lint.php
	 * @see runkit_lint_file()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_lint(string $code): bool {}

	/**
	 * Check the PHP syntax of the specified file
	 * <p>The <b>runkit_lint_file()</b> function performs a syntax (lint) check on the specified filename testing for scripting errors. This is similar to using php -l from the commandline.</p><p><b>Note</b>: Sandbox support (required for <code>runkit_lint()</code>, <b>runkit_lint_file()</b>, and the <b>Runkit_Sandbox</b> class) is only available as of PHP 5.1.0 or specially patched versions of PHP 5.0, and requires that thread safety be enabled. See the README file included in the runkit package for more information.</p>
	 * @param string $filename <p>File containing PHP Code to be lint checked</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-lint-file.php
	 * @see runkit_lint()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_lint_file(string $filename): bool {}

	/**
	 * Dynamically adds a new method to a given class
	 * @param string $classname <p>The class to which this method will be added</p>
	 * @param string $methodname <p>The name of the method to add</p>
	 * @param string $args <p>Comma-delimited list of arguments for the newly-created method</p>
	 * @param string $code <p>The code to be evaluated when <code>methodname</code> is called</p>
	 * @param int $flags <p>The type of method to create, can be <b><code>RUNKIT_ACC_PUBLIC</code></b>, <b><code>RUNKIT_ACC_PROTECTED</code></b> or <b><code>RUNKIT_ACC_PRIVATE</code></b> optionally combined via bitwise OR with <b><code>RUNKIT_ACC_STATIC</code></b> (since 1.0.1)</p> <p><b>Note</b>:</p><p>This parameter is only used as of PHP 5, because, prior to this, all methods were public.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-method-add.php
	 * @see runkit_method_copy(), runkit_method_redefine(), runkit_method_remove(), runkit_method_rename(), runkit_function_add()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_add(string $classname, string $methodname, string $args, string $code, int $flags = RUNKIT_ACC_PUBLIC, string $doc_comment = NULL): bool {}

	/**
	 * Copies a method from class to another
	 * @param string $dClass <p>Destination class for copied method</p>
	 * @param string $dMethod <p>Destination method name</p>
	 * @param string $sClass <p>Source class of the method to copy</p>
	 * @param string $sMethod <p>Name of the method to copy from the source class. If this parameter is omitted, the value of <code>dMethod</code> is assumed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-method-copy.php
	 * @see runkit_method_add(), runkit_method_redefine(), runkit_method_remove(), runkit_method_rename(), runkit_function_copy()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_copy(string $dClass, string $dMethod, string $sClass, string $sMethod = NULL): bool {}

	/**
	 * Dynamically changes the code of the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p>
	 * @param string $classname <p>The class in which to redefine the method</p>
	 * @param string $methodname <p>The name of the method to redefine</p>
	 * @param string $args <p>Comma-delimited list of arguments for the redefined method</p>
	 * @param string $code <p>The new code to be evaluated when <code>methodname</code> is called</p>
	 * @param int $flags <p>The redefined method can be <b><code>RUNKIT_ACC_PUBLIC</code></b>, <b><code>RUNKIT_ACC_PROTECTED</code></b> or <b><code>RUNKIT_ACC_PRIVATE</code></b> optionally combined via bitwise OR with <b><code>RUNKIT_ACC_STATIC</code></b> (since 1.0.1)</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-method-redefine.php
	 * @see runkit_method_add(), runkit_method_copy(), runkit_method_remove(), runkit_method_rename(), runkit_function_redefine()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_redefine(string $classname, string $methodname, string $args, string $code, int $flags = RUNKIT_ACC_PUBLIC, string $doc_comment = NULL): bool {}

	/**
	 * Dynamically removes the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p>
	 * @param string $classname <p>The class in which to remove the method</p>
	 * @param string $methodname <p>The name of the method to remove</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-method-remove.php
	 * @see runkit_method_add(), runkit_method_copy(), runkit_method_redefine(), runkit_method_rename(), runkit_function_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_remove(string $classname, string $methodname): bool {}

	/**
	 * Dynamically changes the name of the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p>
	 * @param string $classname <p>The class in which to rename the method</p>
	 * @param string $methodname <p>The name of the method to rename</p>
	 * @param string $newname <p>The new name to give to the renamed method</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.runkit-method-rename.php
	 * @see runkit_method_add(), runkit_method_copy(), runkit_method_redefine(), runkit_method_remove(), runkit_function_rename()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_rename(string $classname, string $methodname, string $newname): bool {}

	/**
	 * Determines if the current functions return value will be used
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the function's return value is used by the calling scope, otherwise <b><code>FALSE</code></b></p>
	 * @link http://php.net/manual/en/function.runkit-return-value-used.php
	 * @since PECL runkit >= 0.8.0
	 */
	function runkit_return_value_used(): bool {}

	/**
	 * Specify a function to capture and/or process output from a runkit sandbox
	 * <p>Ordinarily, anything output (such as with <code>echo</code> or <code>print</code>) will be output as though it were printed from the parent's scope. Using <b>runkit_sandbox_output_handler()</b> however, output generated by the sandbox (including errors), can be captured by a function outside of the sandbox.</p><p><b>Note</b>: Sandbox support (required for <code>runkit_lint()</code>, <code>runkit_lint_file()</code>, and the <b>Runkit_Sandbox</b> class) is only available as of PHP 5.1.0 or specially patched versions of PHP 5.0, and requires that thread safety be enabled. See the README file included in the runkit package for more information.</p><p><b>Note</b>: <b>Deprecated</b><br></p><p>As of runkit version 0.5, this function is deprecated and is scheduled to be removed from the package prior to a 1.0 release. The output handler for a given Runkit_Sandbox instance may be read/set using the array offset syntax shown on the Runkit_Sandbox class definition page.</p>
	 * @param object $sandbox <p>Object instance of Runkit_Sandbox class on which to set output handling.</p>
	 * @param mixed $callback <p>Name of a function which expects one parameter. Output generated by <code>sandbox</code> will be passed to this callback. Anything returned by the callback will be displayed normally. If this parameter is not passed then output handling will not be changed. If a non-truth value is passed, output handling will be disabled and will revert to direct display.</p>
	 * @return mixed <p>Returns the name of the previously defined output handler callback, or <b><code>FALSE</code></b> if no handler was previously defined.</p>
	 * @link http://php.net/manual/en/function.runkit-sandbox-output-handler.php
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_sandbox_output_handler(object $sandbox, $callback = NULL) {}

	/**
	 * Return numerically indexed array of registered superglobals
	 * @return array <p>Returns a numerically indexed array of the currently registered superglobals. i.e. _GET, _POST, _REQUEST, _COOKIE, _SESSION, _SERVER, _ENV, _FILES</p>
	 * @link http://php.net/manual/en/function.runkit-superglobals.php
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_superglobals(): array {}

	/**
	 * PHP 5 specific flag to <code>classkit_import()</code> Only defined when classkit compatibility is enabled.
	 */
	define('CLASSKIT_AGGREGATE_OVERRIDE', null);

	/**
	 * Defined to the current version of the runkit package. Only defined when classkit compatibility is enabled.
	 */
	define('CLASSKIT_VERSION', null);

	/**
	 * PHP 5 specific flag to <code>runkit_method_add()</code> and <code>runkit_method_redefine()</code>
	 */
	define('RUNKIT_ACC_PRIVATE', null);

	/**
	 * PHP 5 specific flag to <code>runkit_method_add()</code> and <code>runkit_method_redefine()</code>
	 */
	define('RUNKIT_ACC_PROTECTED', null);

	/**
	 * PHP 5 specific flag to <code>runkit_method_add()</code> and <code>runkit_method_redefine()</code>
	 */
	define('RUNKIT_ACC_PUBLIC', null);

	/**
	 * PHP 5 specific flag to <code>runkit_method_add()</code> and <code>runkit_method_redefine()</code>. Available since Runkit 1.0.1.
	 */
	define('RUNKIT_ACC_STATIC', null);

	/**
	 * <code>runkit_import()</code> flag indicating that class constants should be imported from the specified file. Note that this flag is only meaningful in PHP versions 5.1.0 and above.
	 */
	define('RUNKIT_IMPORT_CLASS_CONSTS', null);

	/**
	 * <code>runkit_import()</code> flag indicating that class methods should be imported from the specified file.
	 */
	define('RUNKIT_IMPORT_CLASS_METHODS', null);

	/**
	 * <code>runkit_import()</code> flag indicating that class standard properties should be imported from the specified file.
	 */
	define('RUNKIT_IMPORT_CLASS_PROPS', null);

	/**
	 * <code>runkit_import()</code> flag indicating that class static properties should be imported from the specified file. Available since Runkit 1.0.1.
	 */
	define('RUNKIT_IMPORT_CLASS_STATIC_PROPS', null);

	/**
	 * <code>runkit_import()</code> flag representing a bitwise OR of the <b><code>RUNKIT_IMPORT_CLASS_&#42;</code></b> constants.
	 */
	define('RUNKIT_IMPORT_CLASSES', null);

	/**
	 * <code>runkit_import()</code> flag indicating that normal functions should be imported from the specified file.
	 */
	define('RUNKIT_IMPORT_FUNCTIONS', null);

	/**
	 * <code>runkit_import()</code> flag indicating that if any of the imported functions, methods, constants, or properties already exist, they should be replaced with the new definitions. If this flag is not set, then any imported definitions which already exist will be discarded.
	 */
	define('RUNKIT_IMPORT_OVERRIDE', null);

	/**
	 * Defined to the current version of the runkit package.
	 */
	define('RUNKIT_VERSION', null);

}
