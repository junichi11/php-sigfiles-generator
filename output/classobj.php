<?php



namespace {

	/**
	 * Attempt to load undefined class
	 * <p>You can define this function to enable classes autoloading.</p>
	 * @param string $class <p>Name of the class to load</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.autoload.php
	 * @see spl_autoload_register()
	 * @since PHP 5, PHP 7
	 */
	function __autoload(string $class): void {}

	/**
	 * Creates an alias for a class
	 * <p>Creates an alias named <code>alias</code> based on the user defined class <code>original</code>. The aliased class is exactly the same as the original class.</p>
	 * @param string $original <p>The original class.</p>
	 * @param string $alias <p>The alias name for the class.</p>
	 * @param bool $autoload <p>Whether to autoload if the original class is not found.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.class-alias.php
	 * @see get_parent_class(), is_subclass_of()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function class_alias(string $original, string $alias, bool $autoload = TRUE): bool {}

	/**
	 * Checks if the class has been defined
	 * <p>This function checks whether or not the given class has been defined.</p>
	 * @param string $class_name <p>The class name. The name is matched in a case-insensitive manner.</p>
	 * @param bool $autoload <p>Whether or not to call __autoload by default.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>class_name</code> is a defined class, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.class-exists.php
	 * @see function_exists(), interface_exists(), get_declared_classes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function class_exists(string $class_name, bool $autoload = TRUE): bool {}

	/**
	 * The "Late Static Binding" class name
	 * <p>Gets the name of the class the static method is called in.</p>
	 * @return string <p>Returns the class name. Returns <b><code>FALSE</code></b> if called from outside a class.</p>
	 * @link http://php.net/manual/en/function.get-called-class.php
	 * @see get_parent_class(), get_class(), is_subclass_of()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function get_called_class(): string {}

	/**
	 * Returns the name of the class of an object
	 * <p>Gets the name of the class of the given <code>object</code>.</p>
	 * @param object $object <p>The tested object. This parameter may be omitted when inside a class.</p> <p><b>Note</b>:  Explicitly passing <b><code>NULL</code></b> as the <code>object</code> is no longer allowed as of PHP 7.2.0.   The parameter is still optional and calling <b>get_class()</b> without a parameter from inside a class will work, but passing <b><code>NULL</code></b> now emits an <b><code>E_WARNING</code></b> notice. </p>
	 * @return string <p>Returns the name of the class of which <code>object</code> is an instance. Returns <b><code>FALSE</code></b> if <code>object</code> is not an object.</p><p>If <code>object</code> is omitted when inside a class, the name of that class is returned.</p><p>If the <code>object</code> is an instance of a class which exists in a namespace, the qualified namespaced name of that class is returned.</p>
	 * @link http://php.net/manual/en/function.get-class.php
	 * @see get_called_class(), get_parent_class(), gettype(), is_subclass_of()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_class(object $object = NULL): string {}

	/**
	 * Gets the class methods' names
	 * <p>Gets the class methods names.</p>
	 * @param mixed $class_name <p>The class name or an object instance</p>
	 * @return array <p>Returns an array of method names defined for the class specified by <code>class_name</code>. In case of an error, it returns <b><code>NULL</code></b>.</p>
	 * @link http://php.net/manual/en/function.get-class-methods.php
	 * @see get_class(), get_class_vars(), get_object_vars()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_class_methods($class_name): array {}

	/**
	 * Get the default properties of the class
	 * <p>Get the default properties of the given class.</p>
	 * @param string $class_name <p>The class name</p>
	 * @return array <p>Returns an associative array of declared properties visible from the current scope, with their default value. The resulting array elements are in the form of <code>varname =&gt; value</code>. In case of an error, it returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.get-class-vars.php
	 * @see get_class_methods(), get_object_vars()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_class_vars(string $class_name): array {}

	/**
	 * Returns an array with the name of the defined classes
	 * <p>Gets the declared classes.</p>
	 * @return array <p>Returns an array of the names of the declared classes in the current script.</p><p><b>Note</b>:</p><p>Note that depending on what extensions you have compiled or loaded into PHP, additional classes could be present. This means that you will not be able to define your own classes using these names. There is a list of predefined classes in the Predefined Classes section of the appendices.</p>
	 * @link http://php.net/manual/en/function.get-declared-classes.php
	 * @see class_exists(), get_declared_interfaces(), get_defined_functions()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_declared_classes(): array {}

	/**
	 * Returns an array of all declared interfaces
	 * <p>Gets the declared interfaces.</p>
	 * @return array <p>Returns an array of the names of the declared interfaces in the current script.</p>
	 * @link http://php.net/manual/en/function.get-declared-interfaces.php
	 * @see interface_exists(), get_declared_classes(), class_implements()
	 * @since PHP 5, PHP 7
	 */
	function get_declared_interfaces(): array {}

	/**
	 * Returns an array of all declared traits
	 * @return array <p>Returns an array with names of all declared traits in values. Returns <b><code>NULL</code></b> in case of a failure.</p>
	 * @link http://php.net/manual/en/function.get-declared-traits.php
	 * @see class_uses(), trait_exists()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function get_declared_traits(): array {}

	/**
	 * Gets the properties of the given object
	 * <p>Gets the accessible non-static properties of the given <code>object</code> according to scope.</p>
	 * @param object $object <p>An object instance.</p>
	 * @return array <p>Returns an associative array of defined object accessible non-static properties for the specified <code>object</code> in scope.</p>
	 * @link http://php.net/manual/en/function.get-object-vars.php
	 * @see get_class_methods(), get_class_vars()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_object_vars(object $object): array {}

	/**
	 * Retrieves the parent class name for object or class
	 * <p>Retrieves the parent class name for object or class.</p>
	 * @param mixed $object <p>The tested object or class name. This parameter is optional if called from the object's method.</p>
	 * @return string <p>Returns the name of the parent class of the class of which <code>object</code> is an instance or the name.</p><p><b>Note</b>:</p><p>If the object does not have a parent or the class given does not exist <b><code>FALSE</code></b> will be returned.</p> <p>If called without parameter outside object, this function returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.get-parent-class.php
	 * @see get_class(), is_subclass_of(), class_parents()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_parent_class($object = NULL): string {}

	/**
	 * Checks if the interface has been defined
	 * <p>Checks if the given interface has been defined.</p>
	 * @param string $interface_name <p>The interface name</p>
	 * @param bool $autoload <p>Whether to call __autoload or not by default.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the interface given by <code>interface_name</code> has been defined, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.interface-exists.php
	 * @see get_declared_interfaces(), class_implements(), class_exists()
	 * @since PHP 5 >= 5.0.2, PHP 7
	 */
	function interface_exists(string $interface_name, bool $autoload = TRUE): bool {}

	/**
	 * Checks if the object is of this class or has this class as one of its parents
	 * <p>Checks if the given <code>object</code> is of this class or has this class as one of its parents.</p>
	 * @param mixed $object <p>A class name or an object instance.</p>
	 * @param string $class_name <p>The class name</p>
	 * @param bool $allow_string <p>If this parameter set to <b><code>FALSE</code></b>, string class name as <code>object</code> is not allowed. This also prevents from calling autoloader if the class doesn't exist.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the object is of this class or has this class as one of its parents, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.is-a.php
	 * @see get_class(), get_parent_class(), is_subclass_of()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function is_a($object, string $class_name, bool $allow_string = FALSE): bool {}

	/**
	 * Checks if the object has this class as one of its parents or implements it
	 * <p>Checks if the given <code>object</code> has the class <code>class_name</code> as one of its parents or implements it.</p>
	 * @param mixed $object <p>A class name or an object instance. No error is generated if the class does not exist.</p>
	 * @param string $class_name <p>The class name</p>
	 * @param bool $allow_string <p>If this parameter set to false, string class name as <code>object</code> is not allowed. This also prevents from calling autoloader if the class doesn't exist.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if the object <code>object</code>, belongs to a class which is a subclass of <code>class_name</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.is-subclass-of.php
	 * @see get_class(), get_parent_class(), is_a(), class_parents()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function is_subclass_of($object, string $class_name, bool $allow_string = TRUE): bool {}

	/**
	 * Checks if the class method exists
	 * <p>Checks if the class method exists in the given <code>object</code>.</p>
	 * @param string|object $object <p>An object instance or a class name</p>
	 * @param string $method_name <p>The method name</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the method given by <code>method_name</code> has been defined for the given <code>object</code>, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.method-exists.php
	 * @see function_exists(), is_callable(), class_exists()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function method_exists($object, string $method_name): bool {}

	/**
	 * Checks if the object or class has a property
	 * <p>This function checks if the given <code>property</code> exists in the specified class.</p><p><b>Note</b>:</p><p>As opposed with <code>isset()</code>, <b>property_exists()</b> returns <b><code>TRUE</code></b> even if the property has the value <b><code>NULL</code></b>.</p>
	 * @param mixed $class <p>The class name or an object of the class to test for</p>
	 * @param string $property <p>The name of the property</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the property exists, <b><code>FALSE</code></b> if it doesn't exist or <b><code>NULL</code></b> in case of an error.</p>
	 * @link http://php.net/manual/en/function.property-exists.php
	 * @see method_exists()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function property_exists($class, string $property): bool {}

	/**
	 * Checks if the trait exists
	 * @param string $traitname <p>Name of the trait to check</p>
	 * @param bool $autoload <p>Whether to autoload if not already loaded.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if trait exists, <b><code>FALSE</code></b> if not, <b><code>NULL</code></b> in case of an error.</p>
	 * @link http://php.net/manual/en/function.trait-exists.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function trait_exists(string $traitname, bool $autoload = NULL): bool {}

}
