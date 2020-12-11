<?php



namespace {

	/**
	 * Import new class method definitions from a file
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $filename <p>The filename of the class method definitions to import</p>
	 * @return array <p>Associative array of imported methods</p>
	 * @link https://php.net/manual/en/function.classkit-import.php
	 * @see classkit_method_add(), classkit_method_copy()
	 * @since PECL classkit >= 0.3
	 */
	function classkit_import(string $filename): array {}

	/**
	 * Dynamically adds a new method to a given class
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $classname <p>The class to which this method will be added</p>
	 * @param string $methodname <p>The name of the method to add</p>
	 * @param string $args <p>Comma-delimited list of arguments for the newly-created method</p>
	 * @param string $code <p>The code to be evaluated when <code>methodname</code> is called</p>
	 * @param int $flags <p>The type of method to create, can be <b><code>CLASSKIT_ACC_PUBLIC</code></b>, <b><code>CLASSKIT_ACC_PROTECTED</code></b> or <b><code>CLASSKIT_ACC_PRIVATE</code></b></p> <p><b>Note</b>:</p><p>This parameter is only used as of PHP 5, because, prior to this, all methods were public.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.classkit-method-add.php
	 * @see classkit_method_copy(), classkit_method_redefine(), classkit_method_remove(), classkit_method_rename(), create_function()
	 * @since PECL classkit >= 0.1
	 */
	function classkit_method_add(string $classname, string $methodname, string $args, string $code, int $flags = CLASSKIT_ACC_PUBLIC): bool {}

	/**
	 * Copies a method from class to another
	 * <p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $dClass <p>Destination class for copied method</p>
	 * @param string $dMethod <p>Destination method name</p>
	 * @param string $sClass <p>Source class of the method to copy</p>
	 * @param string $sMethod <p>Name of the method to copy from the source class. If this parameter is omitted, the value of <code>dMethod</code> is assumed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.classkit-method-copy.php
	 * @see classkit_method_add(), classkit_method_redefine(), classkit_method_remove(), classkit_method_rename()
	 * @since PECL classkit >= 0.2
	 */
	function classkit_method_copy(string $dClass, string $dMethod, string $sClass, string $sMethod = NULL): bool {}

	/**
	 * Dynamically changes the code of the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $classname <p>The class in which to redefine the method</p>
	 * @param string $methodname <p>The name of the method to redefine</p>
	 * @param string $args <p>Comma-delimited list of arguments for the redefined method</p>
	 * @param string $code <p>The new code to be evaluated when <code>methodname</code> is called</p>
	 * @param int $flags <p>The redefined method can be <b><code>CLASSKIT_ACC_PUBLIC</code></b>, <b><code>CLASSKIT_ACC_PROTECTED</code></b> or <b><code>CLASSKIT_ACC_PRIVATE</code></b></p> <p><b>Note</b>:</p><p>This parameter is only used as of PHP 5, because, prior to this, all methods were public.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.classkit-method-redefine.php
	 * @see classkit_method_add(), classkit_method_copy(), classkit_method_remove(), classkit_method_rename()
	 * @since PECL classkit >= 0.1
	 */
	function classkit_method_redefine(string $classname, string $methodname, string $args, string $code, int $flags = CLASSKIT_ACC_PUBLIC): bool {}

	/**
	 * Dynamically removes the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $classname <p>The class in which to remove the method</p>
	 * @param string $methodname <p>The name of the method to remove</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.classkit-method-remove.php
	 * @see classkit_method_add(), classkit_method_copy(), classkit_method_redefine(), classkit_method_rename()
	 * @since PECL classkit >= 0.1
	 */
	function classkit_method_remove(string $classname, string $methodname): bool {}

	/**
	 * Dynamically changes the name of the given method
	 * <p><b>Note</b>: This function cannot be used to manipulate the currently running (or chained) method.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param string $classname <p>The class in which to rename the method</p>
	 * @param string $methodname <p>The name of the method to rename</p>
	 * @param string $newname <p>The new name to give to the renamed method</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.classkit-method-rename.php
	 * @see classkit_method_add(), classkit_method_copy(), classkit_method_redefine(), classkit_method_remove()
	 * @since PECL classkit >= 0.1
	 */
	function classkit_method_rename(string $classname, string $methodname, string $newname): bool {}

	/**
	 * Marks the method <code>private</code>
	 */
	define('CLASSKIT_ACC_PRIVATE', null);

	/**
	 * Marks the method <code>protected</code>
	 */
	define('CLASSKIT_ACC_PROTECTED', null);

	/**
	 * Marks the method <code>public</code>
	 */
	define('CLASSKIT_ACC_PUBLIC', null);

}
