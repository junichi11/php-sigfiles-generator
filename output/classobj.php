<?php



namespace {

	/**
	 * Attempt to load undefined class
	 * <p>You can define this function to enable classes autoloading.</p>
	 * @param string $class <p>Name of the class to load</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.autoload.php
	 * @see spl_autoload_register()
	 * @since PHP 5, PHP 7
	 */
	function __autoload(string $class): void {}

	/**
	 * Creates an alias for a class
	 * <p>Creates an alias named <code>alias</code> based on the user defined class <code>class</code>. The aliased class is exactly the same as the original class.</p>
	 * @param string $class <p>The original class.</p>
	 * @param string $alias <p>The alias name for the class.</p>
	 * @param bool $autoload <p>Whether to autoload if the original class is not found.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.class-alias.php
	 * @see get_parent_class(), is_subclass_of()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function class_alias(string $class, string $alias, bool $autoload = true): bool {}

	/**
	 * Checks if the class has been defined
	 * <p>This function checks whether or not the given class has been defined.</p>
	 * @param string $class <p>The class name. The name is matched in a case-insensitive manner.</p>
	 * @param bool $autoload <p>Whether to call __autoload by default.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>class</code> is a defined class, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.class-exists.php
	 * @see function_exists(), enum_exists(), interface_exists(), get_declared_classes()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function class_exists(string $class, bool $autoload = true): bool {}

	/**
	 * Checks if the enum has been defined
	 * <p>This function checks whether or not the given enum has been defined.</p>
	 * @param string $enum <p>The enum name. The name is matched in a case-insensitive manner.</p>
	 * @param bool $autoload <p>Whether to call __autoload by default.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>enum</code> is a defined enum, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.enum-exists.php
	 * @see function_exists(), class_exists(), interface_exists(), get_declared_classes()
	 * @since PHP 8 >= 8.1.0
	 */
	function enum_exists(string $enum, bool $autoload = true): bool {}

	/**
	 * The "Late Static Binding" class name
	 * <p>Gets the name of the class the static method is called in.</p>
	 * @return string <p>Returns the class name. Returns <b><code>false</code></b> if called from outside a class.</p>
	 * @link https://php.net/manual/en/function.get-called-class.php
	 * @see get_parent_class(), get_class(), is_subclass_of()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function get_called_class(): string {}

	/**
	 * Returns the name of the class of an object
	 * <p>Gets the name of the class of the given <code>object</code>.</p>
	 * @param object $object <p>The tested object. This parameter may be omitted when inside a class.</p> <p><b>Note</b>:  Explicitly passing <b><code>null</code></b> as the <code>object</code> is no longer allowed as of PHP 7.2.0 and emits an <b><code>E_WARNING</code></b>. As of PHP 8.0.0, a <code>TypeError</code> is emitted when <b><code>null</code></b> is used. </p>
	 * @return string <p>Returns the name of the class of which <code>object</code> is an instance.</p><p>If <code>object</code> is omitted when inside a class, the name of that class is returned.</p><p>If the <code>object</code> is an instance of a class which exists in a namespace, the qualified namespaced name of that class is returned.</p>
	 * @link https://php.net/manual/en/function.get-class.php
	 * @see get_called_class(), get_parent_class(), gettype(), get_debug_type(), is_subclass_of()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_class(object $object = null): string {}

	/**
	 * Gets the class methods' names
	 * <p>Gets the class methods names.</p>
	 * @param object|string $object_or_class <p>The class name or an object instance</p>
	 * @return array <p>Returns an array of method names defined for the class specified by <code>object_or_class</code>.</p>
	 * @link https://php.net/manual/en/function.get-class-methods.php
	 * @see get_class(), get_class_vars(), get_object_vars()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_class_methods(object|string $object_or_class): array {}

	/**
	 * Get the default properties of the class
	 * <p>Get the default properties of the given class.</p>
	 * @param string $class <p>The class name</p>
	 * @return array <p>Returns an associative array of declared properties visible from the current scope, with their default value. The resulting array elements are in the form of <code>varname =&gt; value</code>. In case of an error, it returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.get-class-vars.php
	 * @see get_class_methods(), get_object_vars()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_class_vars(string $class): array {}

	/**
	 * Returns an array with the name of the defined classes
	 * <p>Gets the declared classes.</p>
	 * @return array <p>Returns an array of the names of the declared classes in the current script.</p><p><b>Note</b>:</p><p>Note that depending on what extensions you have compiled or loaded into PHP, additional classes could be present. This means that you will not be able to define your own classes using these names. There is a list of predefined classes in the Predefined Classes section of the appendices.</p>
	 * @link https://php.net/manual/en/function.get-declared-classes.php
	 * @see class_exists(), get_declared_interfaces(), get_defined_functions()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_declared_classes(): array {}

	/**
	 * Returns an array of all declared interfaces
	 * <p>Gets the declared interfaces.</p>
	 * @return array <p>Returns an array of the names of the declared interfaces in the current script.</p>
	 * @link https://php.net/manual/en/function.get-declared-interfaces.php
	 * @see interface_exists(), get_declared_classes(), class_implements()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function get_declared_interfaces(): array {}

	/**
	 * Returns an array of all declared traits
	 * @return array <p>Returns an array with names of all declared traits in values. Returns <b><code>null</code></b> in case of a failure.</p>
	 * @link https://php.net/manual/en/function.get-declared-traits.php
	 * @see class_uses(), trait_exists()
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function get_declared_traits(): array {}

	/**
	 * Returns an array of mangled object properties
	 * <p>Returns an <code>array</code> whose elements are the <code>object</code>'s properties. The keys are the member variable names, with a few notable exceptions: private variables have the class name prepended to the variable name, and protected variables have a <code>&#42;</code> prepended to the variable name. These prepended values have <code>NUL</code> bytes on either side. Uninitialized typed properties are silently discarded.</p>
	 * @param object $object <p>An object instance.</p>
	 * @return array <p>Returns an <code>array</code> containing all properties, regardless of visibility, of <code>object</code>.</p>
	 * @link https://php.net/manual/en/function.get-mangled-object-vars.php
	 * @see get_class_vars(), get_object_vars()
	 * @since PHP 7 >= 7.4.0, PHP 8
	 */
	function get_mangled_object_vars(object $object): array {}

	/**
	 * Gets the properties of the given object
	 * <p>Gets the accessible non-static properties of the given <code>object</code> according to scope.</p>
	 * @param object $object <p>An object instance.</p>
	 * @return array <p>Returns an associative array of defined object accessible non-static properties for the specified <code>object</code> in scope.</p>
	 * @link https://php.net/manual/en/function.get-object-vars.php
	 * @see get_class_methods(), get_class_vars()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_object_vars(object $object): array {}

	/**
	 * Retrieves the parent class name for object or class
	 * <p>Retrieves the parent class name for object or class.</p>
	 * @param object|string $object_or_class <p>The tested object or class name. This parameter is optional if called from the object's method.</p>
	 * @return string <p>Returns the name of the parent class of the class of which <code>object</code> is an instance or the name.</p><p><b>Note</b>:</p><p>If the object does not have a parent or the class given does not exist <b><code>false</code></b> will be returned.</p> <p>If called without parameter outside object, this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.get-parent-class.php
	 * @see get_class(), is_subclass_of(), class_parents()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function get_parent_class(object|string $object_or_class = null): string {}

	/**
	 * Checks if the interface has been defined
	 * <p>Checks if the given interface has been defined.</p>
	 * @param string $interface <p>The interface name</p>
	 * @param bool $autoload <p>Whether to call __autoload or not by default.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the interface given by <code>interface</code> has been defined, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.interface-exists.php
	 * @see get_declared_interfaces(), class_implements(), class_exists(), enum_exists()
	 * @since PHP 5 >= 5.0.2, PHP 7, PHP 8
	 */
	function interface_exists(string $interface, bool $autoload = true): bool {}

	/**
	 * Checks if the object is of this class or has this class as one of its parents
	 * <p>Checks if the given <code>object_or_class</code> is of this class or has this class as one of its parents.</p>
	 * @param mixed $object_or_class <p>A class name or an object instance.</p>
	 * @param string $class <p>The class name</p>
	 * @param bool $allow_string <p>If this parameter set to <b><code>false</code></b>, string class name as <code>object_or_class</code> is not allowed. This also prevents from calling autoloader if the class doesn't exist.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the object is of this class or has this class as one of its parents, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-a.php
	 * @see get_class(), get_parent_class(), is_subclass_of()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function is_a(mixed $object_or_class, string $class, bool $allow_string = false): bool {}

	/**
	 * Checks if the object has this class as one of its parents or implements it
	 * <p>Checks if the given <code>object_or_class</code> has the class <code>class</code> as one of its parents or implements it.</p>
	 * @param mixed $object_or_class <p>A class name or an object instance. No error is generated if the class does not exist.</p>
	 * @param string $class <p>The class name</p>
	 * @param bool $allow_string <p>If this parameter set to false, string class name as <code>object_or_class</code> is not allowed. This also prevents from calling autoloader if the class doesn't exist.</p>
	 * @return bool <p>This function returns <b><code>true</code></b> if the object <code>object_or_class</code>, belongs to a class which is a subclass of <code>class</code>, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-subclass-of.php
	 * @see get_class(), get_parent_class(), is_a(), class_parents()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function is_subclass_of(mixed $object_or_class, string $class, bool $allow_string = true): bool {}

	/**
	 * Checks if the class method exists
	 * <p>Checks if the class method exists in the given <code>object_or_class</code>.</p>
	 * @param object|string $object_or_class <p>An object instance or a class name</p>
	 * @param string $method <p>The method name</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the method given by <code>method</code> has been defined for the given <code>object_or_class</code>, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.method-exists.php
	 * @see function_exists(), is_callable(), class_exists()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function method_exists(object|string $object_or_class, string $method): bool {}

	/**
	 * Checks if the object or class has a property
	 * <p>This function checks if the given <code>property</code> exists in the specified class.</p><p><b>Note</b>:</p><p>As opposed with <code>isset()</code>, <b>property_exists()</b> returns <b><code>true</code></b> even if the property has the value <b><code>null</code></b>.</p>
	 * @param object|string $object_or_class <p>The class name or an object of the class to test for</p>
	 * @param string $property <p>The name of the property</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the property exists, <b><code>false</code></b> if it doesn't exist or <b><code>null</code></b> in case of an error.</p>
	 * @link https://php.net/manual/en/function.property-exists.php
	 * @see method_exists()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function property_exists(object|string $object_or_class, string $property): bool {}

	/**
	 * Checks if the trait exists
	 * @param string $trait <p>Name of the trait to check</p>
	 * @param bool $autoload <p>Whether to autoload if not already loaded.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if trait exists, <b><code>false</code></b> if not, <b><code>null</code></b> in case of an error.</p>
	 * @link https://php.net/manual/en/function.trait-exists.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function trait_exists(string $trait, bool $autoload = true): bool {}

}
