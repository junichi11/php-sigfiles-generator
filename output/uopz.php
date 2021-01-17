<?php



namespace {

	/**
	 * Adds non-existent function or method
	 * <p>Adds a non-existent function or method.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @param \Closure $handler <p>The Closure that defines the new function or method.</p>
	 * @param int $flags <p>Flags to set for the new function or method.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-add-function.php
	 * @see uopz_del_function(), uopz_set_return()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_add_function(string $function, \Closure $handler, int &$flags = ZEND_ACC_PUBLIC): bool {}

	/**
	 * Allows control over disabled exit opcode
	 * <p>By default uopz disables the exit opcode, so <code>exit()</code> calls are practically ignored. <b>uopz_allow_exit()</b> allows to control this behavior.</p>
	 * @param bool $allow <p>Whether to allow the execution of exit opcodes or not.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.uopz-allow-exit.php
	 * @see uopz_get_exit_status()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_allow_exit(bool $allow): void {}

	/**
	 * Backup a function
	 * <p>Backup a function at runtime, to be restored on shutdown</p>
	 * @param string $function <p>The name of the function</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-backup.php
	 * @since PECL uopz 1 >= 1.0.3, PECL uopz 2
	 */
	function uopz_backup(string $function): void {}

	/**
	 * Compose a class
	 * <p>Creates a new class of the given name that implements, extends, or uses all of the provided classes</p>
	 * @param string $name <p>A legal class name</p>
	 * @param array $classes <p>An array of class, interface and trait names</p>
	 * @param array $methods <p>An associative array of methods, values are either closures or [modifiers =&gt; closure]</p>
	 * @param array $properties <p>An associative array of properties, keys are names, values are modifiers</p>
	 * @param int $flags <p>Entry type, by default ZEND_ACC_CLASS</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-compose.php
	 * @since PECL uopz 1, PECL uopz 2
	 */
	function uopz_compose(string $name, array $classes, array $methods = null, array $properties = null, int $flags = null): void {}

	/**
	 * Copy a function
	 * <p>Copy a function by name</p>
	 * @param string $function <p>The name of the function</p>
	 * @return Closure <p>A Closure for the specified function</p>
	 * @link https://php.net/manual/en/function.uopz-copy.php
	 * @since PECL uopz 1 >= 1.0.4, PECL uopz 2
	 */
	function uopz_copy(string $function): \Closure {}

	/**
	 * Deletes previously added function or method
	 * <p>Deletes a previously added function or method.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-del-function.php
	 * @see uopz_add_function(), uopz_unset_return()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_del_function(string $function): bool {}

	/**
	 * Delete a function
	 * <p>Deletes a function or method</p>
	 * @param string $function
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-delete.php
	 * @since PECL uopz 1, PECL uopz 2
	 */
	function uopz_delete(string $function): void {}

	/**
	 * Extend a class at runtime
	 * <p>Makes <code>class</code> extend <code>parent</code></p>
	 * @param string $class <p>The name of the class to extend</p>
	 * @param string $parent <p>The name of the class to inherit</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-extend.php
	 * @since PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6
	 */
	function uopz_extend(string $class, string $parent): bool {}

	/**
	 * Get or set flags on function or class
	 * <p>Get or set the flags on a class or function entry at runtime</p>
	 * @param string $function <p>The name of the function. If <code>class</code> is given and an empty string is passed as <code>function</code>, <b>uopz_flags()</b> gets or sets the flags of the class entry.</p>
	 * @param int $flags <p>A valid set of ZEND_ACC_ flags. If omitted, <b>uopz_flags()</b> acts as getter.</p>
	 * @return int <p>If setting, returns old flags, else returns flags</p>
	 * @link https://php.net/manual/en/function.uopz-flags.php
	 * @since PECL uopz 2 >= 2.0.2, PECL uopz 5, PECL uopz 6
	 */
	function uopz_flags(string $function, int $flags = PHP_INT_MAX): int {}

	/**
	 * Creates a function at runtime
	 * <p>Creates a function at runtime</p>
	 * @param string $function <p>The name of the function</p>
	 * @param \Closure $handler <p>The Closure for the function</p>
	 * @param int $modifiers <p>The modifiers for the function, by default copied or ZEND_ACC_PUBLIC</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-function.php
	 * @since PECL uopz 1, PECL uopz 2
	 */
	function uopz_function(string $function, \Closure $handler, int $modifiers = null): void {}

	/**
	 * Retrieve the last set exit status
	 * <p>Retrieves the last set exit status, i.e. the value passed to <code>exit()</code>.</p>
	 * @return mixed <p>This function returns the last exit status, or <b><code>null</code></b> if <code>exit()</code> has not been called.</p>
	 * @link https://php.net/manual/en/function.uopz-get-exit-status.php
	 * @see uopz_allow_exit()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_get_exit_status(): mixed {}

	/**
	 * Gets previously set hook on function or method
	 * <p>Gets the previously set hook on a function or method.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @return Closure <p>Returns the previously set hook on a function or method, or <b><code>null</code></b> if no hook has been set.</p>
	 * @link https://php.net/manual/en/function.uopz-get-hook.php
	 * @see uopz_set_hook(), uopz_unset_hook()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_get_hook(string $function): \Closure {}

	/**
	 * Get the current mock for a class
	 * <p>Returns the current mock for <code>class</code>.</p>
	 * @param string $class <p>The name of the mocked class.</p>
	 * @return mixed <p>Either a string containing the name of the mock, or an object, or <b><code>null</code></b> if no mock has been set.</p>
	 * @link https://php.net/manual/en/function.uopz-get-mock.php
	 * @see uopz_set_mock(), uopz_unset_mock()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_get_mock(string $class): mixed {}

	/**
	 * Gets value of class or instance property
	 * <p>Gets the value of a static class property, if <code>class</code> is given, or the value of an instance property, if <code>instance</code> is given.</p>
	 * @param string $class <p>The name of the class.</p>
	 * @param string $property <p>The name of the property.</p>
	 * @return mixed <p>Returns the value of the class or instance property, or <b><code>null</code></b> if the property is not defined.</p>
	 * @link https://php.net/manual/en/function.uopz-get-property.php
	 * @see uopz_set_property()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_get_property(string $class, string $property): mixed {}

	/**
	 * Gets a previous set return value for a function
	 * <p>Gets the return value of the <code>function</code> previously set by <code>uopz_set_return()</code>.</p>
	 * @param string $function <p>The name of the function</p>
	 * @return mixed <p>The return value or Closure previously set.</p>
	 * @link https://php.net/manual/en/function.uopz-get-return.php
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_get_return(string $function): mixed {}

	/**
	 * Gets the static variables from function or method scope
	 * <p>Gets the static variables from function or method scope.</p>
	 * @param string $class <p>The name of the class.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @return array <p>Returns an associative <code>array</code> of variable names mapped to their current values on success, or <b><code>null</code></b> if the function or method does not exist.</p>
	 * @link https://php.net/manual/en/function.uopz-get-static.php
	 * @see uopz_set_static()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_get_static(string $class, string $function): array {}

	/**
	 * Implements an interface at runtime
	 * <p>Makes <code>class</code> implement <code>interface</code></p>
	 * @param string $class
	 * @param string $interface
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-implement.php
	 * @since PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6
	 */
	function uopz_implement(string $class, string $interface): bool {}

	/**
	 * Overload a VM opcode
	 * <p>Overloads the specified <code>opcode</code> with the user defined function</p>
	 * @param int $opcode <p>A valid opcode, see constants for details of supported codes</p>
	 * @param Callable $callable
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-overload.php
	 * @since PECL uopz 1, PECL uopz 2
	 */
	function uopz_overload(int $opcode, Callable $callable): void {}

	/**
	 * Redefine a constant
	 * <p>Redefines the given <code>constant</code> as <code>value</code></p>
	 * @param string $constant <p>The name of the constant</p>
	 * @param mixed $value <p>The new value for the constant, must be a valid type for a constant variable</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-redefine.php
	 * @since PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6
	 */
	function uopz_redefine(string $constant, mixed $value): bool {}

	/**
	 * Rename a function at runtime
	 * <p>Renames <code>function</code> to <code>rename</code></p><p><b>Note</b>:</p><p>If both functions exist, this effectively swaps their names</p>
	 * @param string $function <p>The name of an existing function</p>
	 * @param string $rename <p>The new name for the function</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-rename.php
	 * @since PECL uopz 1, PECL uopz 2
	 */
	function uopz_rename(string $function, string $rename): void {}

	/**
	 * Restore a previously backed up function
	 * <p>Restore a previously backed up function</p>
	 * @param string $function <p>The name of the function</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-restore.php
	 * @since PECL uopz 1 >= 1.0.3, PECL uopz 2
	 */
	function uopz_restore(string $function): void {}

	/**
	 * Sets hook to execute when entering a function or method
	 * <p>Sets a hook to execute when entering a function or method.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @param \Closure $hook <p>A closure to execute when entering the function or method.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-set-hook.php
	 * @see uopz_get_hook(), uopz_unset_hook()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_set_hook(string $function, \Closure $hook): bool {}

	/**
	 * Use mock instead of class for new objects
	 * <p>If <code>mock</code> is a string containing the name of a class then it will be instantiated instead of <code>class</code>. <code>mock</code> can also be an object.</p><p><b>Note</b>:</p><p>Only dynamic access to properties and methods will use the <code>mock</code> object. Static access still uses the original <code>class</code>. See example below.</p>
	 * @param string $class <p>The name of the class to be mocked.</p>
	 * @param mixed $mock <p>The mock to use in the form of a string containing the name of the class to use or an object. If a string is passed, it has to be the fully qualified class name. It is recommended to use the <code>::class</code> magic constant in this case.</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-set-mock.php
	 * @see uopz_get_mock(), uopz_unset_mock()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_set_mock(string $class, mixed $mock): void {}

	/**
	 * Sets value of existing class or instance property
	 * <p>Sets the value of an existing static class property, if <code>class</code> is given, or the value of an instance property (regardless whether the instance property already exists), if <code>instance</code> is given.</p>
	 * @param string $class <p>The name of the class.</p>
	 * @param string $property <p>The name of the property.</p>
	 * @param mixed $value <p>The value to assign to the property.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.uopz-set-property.php
	 * @see uopz_get_property()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_set_property(string $class, string $property, mixed $value): void {}

	/**
	 * Provide a return value for an existing function
	 * <p>Sets the return value of the <code>function</code> to <code>value</code>. If <code>value</code> is a Closure and <code>execute</code> is set, the Closure will be executed in place of the original function. It is possible to call the original function from the Closure.</p><p><b>Note</b>:</p><p>This function replaces <code>uopz_rename()</code>.</p>
	 * @param string $function <p>The name of an existing function</p>
	 * @param mixed $value <p>The value the function should return. If a Closure is provided and the execute flag is set, the Closure will be executed in place of the original function.</p>
	 * @param bool $execute <p>If true, and a Closure was provided as the value, the Closure will be executed in place of the original function.</p>
	 * @return bool <p>True if succeeded, false otherwise.</p>
	 * @link https://php.net/manual/en/function.uopz-set-return.php
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_set_return(string $function, mixed $value, bool $execute = false): bool {}

	/**
	 * Sets the static variables in function or method scope
	 * <p>Sets the static variables in function or method scope.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @param array $static <p>The associative <code>array</code> of variable names mapped to their values.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.uopz-set-static.php
	 * @see uopz_get_static()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_set_static(string $function, array $static): void {}

	/**
	 * Undefine a constant
	 * <p>Removes the constant at runtime</p>
	 * @param string $constant <p>The name of an existing constant</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-undefine.php
	 * @since PECL uopz 1, PECL uopz 2, PECL uopz 5, PECL uopz 6
	 */
	function uopz_undefine(string $constant): bool {}

	/**
	 * Removes previously set hook on function or method
	 * <p>Removes the previously set hook on a function or method.</p>
	 * @param string $function <p>The name of the function or method.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.uopz-unset-hook.php
	 * @see uopz_set_hook(), uopz_get_hook()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_unset_hook(string $function): bool {}

	/**
	 * Unset previously set mock
	 * <p>Unsets the previously set mock for <code>class</code>.</p>
	 * @param string $class <p>The name of the mocked class.</p>
	 * @return void
	 * @link https://php.net/manual/en/function.uopz-unset-mock.php
	 * @see uopz_set_mock(), uopz_get_mock()
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_unset_mock(string $class): void {}

	/**
	 * Unsets a previously set return value for a function
	 * <p>Unsets the return value of the <code>function</code> previously set by <code>uopz_set_return()</code>.</p>
	 * @param string $function <p>The name of the function</p>
	 * @return bool <p>True on success</p>
	 * @link https://php.net/manual/en/function.uopz-unset-return.php
	 * @since PECL uopz 5, PECL uopz 6
	 */
	function uopz_unset_return(string $function): bool {}

	/**
	 * Mark function as abstract
	 */
	define('ZEND_ACC_ABSTRACT', null);

	/**
	 * Dummy registered for consistency, the default kind of class entry. Removed as of uopz 5.0.0.
	 */
	define('ZEND_ACC_CLASS', null);

	/**
	 * Used for getting flags only. Removed as of uopz 5.0.0.
	 */
	define('ZEND_ACC_FETCH', null);

	/**
	 * Mark function as final
	 */
	define('ZEND_ACC_FINAL', null);

	/**
	 * Mark class as interface. Removed as of uopz 5.0.0.
	 */
	define('ZEND_ACC_INTERFACE', null);

	/**
	 * Mark function as private
	 */
	define('ZEND_ACC_PRIVATE', null);

	/**
	 * Mark function as protected
	 */
	define('ZEND_ACC_PROTECTED', null);

	/**
	 * Mark function as public, the default
	 */
	define('ZEND_ACC_PUBLIC', null);

	/**
	 * Mark function as static
	 */
	define('ZEND_ACC_STATIC', null);

	/**
	 * Mark class as trait. Removed as of uopz 5.0.0.
	 */
	define('ZEND_ACC_TRAIT', null);

	/**
	 * Invoked upon composure, receives the class the interface is being added to as the first argument, and the name of the interface as the second argument
	 */
	define('ZEND_ADD_INTERFACE', null);

	/**
	 * Invoked upon composure, receives the class the trait is being added to as the first argument, and the name of the trait as the second argument
	 */
	define('ZEND_ADD_TRAIT', null);

	/**
	 * Invoked by exit() and die(), receives no arguments. Return boolean <b><code>true</code></b> to exit, <b><code>false</code></b> to continue
	 */
	define('ZEND_EXIT', null);

	/**
	 * Invoked upon composure, receives the class the name of the class being fetched as the only argument
	 */
	define('ZEND_FETCH_CLASS', null);

	/**
	 * Invoked by instanceof operator, receives the object being verified as the first argument, and the name of the class which that object should be as the second argument
	 */
	define('ZEND_INSTANCEOF', null);

	/**
	 * Invoked by object construction, receives the class of object being created as the only argument
	 */
	define('ZEND_NEW', null);

	/**
	 * Invoked by the throw construct, receives the class of exception being thrown as the only argument
	 */
	define('ZEND_THROW', null);

	/**
	 * Advance 1 opcode and continuue
	 */
	define('ZEND_USER_OPCODE_CONTINUE', null);

	/**
	 * Dispatch to original opcode handler
	 */
	define('ZEND_USER_OPCODE_DISPATCH', null);

	/**
	 * Dispatch to a specific handler (OR'd with ZEND opcode constant)
	 */
	define('ZEND_USER_OPCODE_DISPATCH_TO', null);

	/**
	 * Enter into new op_array without recursion
	 */
	define('ZEND_USER_OPCODE_ENTER', null);

	/**
	 * Return to calling op_array within the same executor
	 */
	define('ZEND_USER_OPCODE_LEAVE', null);

	/**
	 * Exit from executor (return from function)
	 */
	define('ZEND_USER_OPCODE_RETURN', null);

}
