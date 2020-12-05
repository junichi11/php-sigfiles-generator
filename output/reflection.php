<?php



namespace {

	/**
	 * <p>The reflection class.</p>
	 * @link http://php.net/manual/en/class.reflection.php
	 * @since PHP 5, PHP 7
	 */
	class Reflection {

		/**
		 * Exports
		 * <p>Exports a reflection.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Reflector $reflector <p>The reflection to export.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>If the <code>return</code> parameter is set to <b><code>TRUE</code></b>, then the export is returned as a <code>string</code>, otherwise <b><code>NULL</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflection.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(\Reflector $reflector, bool $return = FALSE): string {}

		/**
		 * Gets modifier names
		 * <p>Gets modifier names.</p>
		 * @param int $modifiers <p>Bitfield of the modifiers to get.</p>
		 * @return array <p>An array of modifier names.</p>
		 * @link http://php.net/manual/en/reflection.getmodifiernames.php
		 * @since PHP 5, PHP 7
		 */
		public static function getModifierNames(int $modifiers): array {}
	}

	/**
	 * <p>The <b>ReflectionClass</b> class reports information about a class.</p>
	 * @link http://php.net/manual/en/class.reflectionclass.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionClass implements \Reflector {

		/**
		 * @var int <p>Indicates class that is  abstract because it has some abstract methods.</p>
		 * @link http://php.net/manual/en/class.reflectionclass.php
		 */
		const IS_IMPLICIT_ABSTRACT = 16;

		/**
		 * @var int <p>Indicates class that is  abstract because of its definition.</p>
		 * @link http://php.net/manual/en/class.reflectionclass.php
		 */
		const IS_EXPLICIT_ABSTRACT = 32;

		/**
		 * @var int <p>Indicates final class.</p>
		 * @link http://php.net/manual/en/class.reflectionclass.php
		 */
		const IS_FINAL = 64;

		/**
		 * @var mixed <p>Name of the class. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionclass.php#reflectionclass.props.name
		 */
		public $name;

		/**
		 * Constructs a ReflectionClass
		 * <p>Constructs a new ReflectionClass object.</p>
		 * @param mixed $argument <p>Either a <code>string</code> containing the name of the class to reflect, or an <code>object</code>.</p>
		 * @return self <p>Returns constructed ReflectionClass instance.</p>
		 * @link http://php.net/manual/en/reflectionclass.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($argument) {}

		/**
		 * Returns the string representation of the ReflectionClass object
		 * <p>Returns the string representation of the ReflectionClass object.</p>
		 * @return string <p>A string representation of this ReflectionClass instance.</p>
		 * @link http://php.net/manual/en/reflectionclass.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Exports a class
		 * <p>Exports a reflected class.</p>
		 * @param mixed $argument <p>The reflection to export.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>If the <code>return</code> parameter is set to <b><code>TRUE</code></b>, then the export is returned as a <code>string</code>, otherwise <b><code>NULL</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionclass.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export($argument, bool $return = FALSE): string {}

		/**
		 * Gets defined constant
		 * <p>Gets the defined constant.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name <p>The name of the class constant to get.</p>
		 * @return mixed <p>Value of the constant with the name <code>name</code>. Returns <b><code>FALSE</code></b> if the constant was not found in the class.</p>
		 * @link http://php.net/manual/en/reflectionclass.getconstant.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstant(string $name) {}

		/**
		 * Gets constants
		 * <p>Gets all defined constants from a class, regardless of their visibility.</p>
		 * @return array <p>An <code>array</code> of constants, where the keys hold the name and the values the value of the constants.</p>
		 * @link http://php.net/manual/en/reflectionclass.getconstants.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstants(): array {}

		/**
		 * Gets the constructor of the class
		 * <p>Gets the constructor of the reflected class.</p>
		 * @return ReflectionMethod <p>A ReflectionMethod object reflecting the class' constructor, or <b><code>NULL</code></b> if the class has no constructor.</p>
		 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstructor(): \ReflectionMethod {}

		/**
		 * Gets default properties
		 * <p>Gets default properties from a class (including inherited properties).</p><p><b>Note</b>:</p><p>This method only works for static properties when used on internal classes. The default value of a static class property can not be tracked when using this method on user defined classes.</p>
		 * @return array <p>An <code>array</code> of default properties, with the key being the name of the property and the value being the default value of the property or <b><code>NULL</code></b> if the property doesn't have a default value. The function does not distinguish between static and non static properties and does not take visibility modifiers into account.</p>
		 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getDefaultProperties(): array {}

		/**
		 * Gets doc comments
		 * <p>Gets doc comments from a class. Doc comments start with /&#42;&#42;. If there are multiple doc comments above the class definition, the one closest to the class will be taken.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
		 * @since PHP 5, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets end line
		 * <p>Gets end line number from a user-defined class definition.</p>
		 * @return int <p>The ending line number of the user defined class, or <b><code>FALSE</code></b> if unknown.</p>
		 * @link http://php.net/manual/en/reflectionclass.getendline.php
		 * @since PHP 5, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * Gets a ReflectionExtension object for the extension which defined the class
		 * <p>Gets a ReflectionExtension object for the extension which defined the class.</p>
		 * @return ReflectionExtension <p>A ReflectionExtension object representing the extension which defined the class, or <b><code>NULL</code></b> for user-defined classes.</p>
		 * @link http://php.net/manual/en/reflectionclass.getextension.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * Gets the name of the extension which defined the class
		 * <p>Gets the name of the extension which defined the class.</p>
		 * @return string <p>The name of the extension which defined the class, or <b><code>FALSE</code></b> for user-defined classes.</p>
		 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * Gets the filename of the file in which the class has been defined
		 * <p>Gets the filename of the file in which the class has been defined.</p>
		 * @return string <p>Returns the filename of the file in which the class has been defined. If the class is defined in the PHP core or in a PHP extension, <b><code>FALSE</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionclass.getfilename.php
		 * @since PHP 5, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * Gets the interface names
		 * <p>Get the interface names.</p>
		 * @return array <p>A numerical array with interface names as the values.</p>
		 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getInterfaceNames(): array {}

		/**
		 * Gets the interfaces
		 * <p>Gets the interfaces.</p>
		 * @return array <p>An associative <code>array</code> of interfaces, with keys as interface names and the array values as ReflectionClass objects.</p>
		 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
		 * @since PHP 5, PHP 7
		 */
		public function getInterfaces(): array {}

		/**
		 * Gets a ReflectionMethod for a class method
		 * <p>Gets a ReflectionMethod for a class method.</p>
		 * @param string $name <p>The method name to reflect.</p>
		 * @return ReflectionMethod <p>A ReflectionMethod.</p>
		 * @link http://php.net/manual/en/reflectionclass.getmethod.php
		 * @since PHP 5, PHP 7
		 */
		public function getMethod(string $name): \ReflectionMethod {}

		/**
		 * Gets an array of methods
		 * <p>Gets an array of methods for the class.</p>
		 * @param int $filter <p>Filter the results to include only methods with certain attributes. Defaults to no filtering.</p> <p>Any bitwise disjunction of <b><code>ReflectionMethod::IS_STATIC</code></b>, <b><code>ReflectionMethod::IS_PUBLIC</code></b>, <b><code>ReflectionMethod::IS_PROTECTED</code></b>, <b><code>ReflectionMethod::IS_PRIVATE</code></b>, <b><code>ReflectionMethod::IS_ABSTRACT</code></b>, <b><code>ReflectionMethod::IS_FINAL</code></b>, so that all methods with <i>any</i> of the given attributes will be returned.</p> <p><b>Note</b>:  Note that other bitwise operations, for instance <code>~</code> will not work as expected. In other words, it is not possible to retrieve all non-static methods, for example. </p>
		 * @return array <p>An <code>array</code> of ReflectionMethod objects reflecting each method.</p>
		 * @link http://php.net/manual/en/reflectionclass.getmethods.php
		 * @see get_class_methods()
		 * @since PHP 5, PHP 7
		 */
		public function getMethods(int $filter = NULL): array {}

		/**
		 * Gets the class modifiers
		 * <p>Returns a bitfield of the access modifiers for this class.</p>
		 * @return int <p>Returns bitmask of  modifier constants.</p>
		 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * Gets class name
		 * <p>Gets the class name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The class name.</p>
		 * @link http://php.net/manual/en/reflectionclass.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets namespace name
		 * <p>Gets the namespace name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The namespace name.</p>
		 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * Gets parent class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>A ReflectionClass or <b><code>FALSE</code></b> if there's no parent.</p>
		 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getParentClass(): \ReflectionClass {}

		/**
		 * Gets properties
		 * <p>Retrieves reflected properties.</p>
		 * @param int $filter <p>The optional filter, for filtering desired property types. It's configured using the ReflectionProperty constants, and defaults to all property types.</p>
		 * @return array <p>An array of ReflectionProperty objects.</p>
		 * @link http://php.net/manual/en/reflectionclass.getproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperties(int $filter = NULL): array {}

		/**
		 * Gets a ReflectionProperty for a class's property
		 * <p>Gets a ReflectionProperty for a class's property.</p>
		 * @param string $name <p>The property name.</p>
		 * @return ReflectionProperty <p>A ReflectionProperty.</p>
		 * @link http://php.net/manual/en/reflectionclass.getproperty.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperty(string $name): \ReflectionProperty {}

		/**
		 * Gets a ReflectionClassConstant for a class's constant
		 * <p>Gets a ReflectionClassConstant for a class's property.</p>
		 * @param string $name <p>The class constant name.</p>
		 * @return ReflectionClassConstant|false <p>A ReflectionClassConstant, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.getreflectionconstant.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstant(string $name) {}

		/**
		 * Gets class constants
		 * <p>Retrieves reflected constants.</p>
		 * @return array <p>An array of ReflectionClassConstant objects.</p>
		 * @link http://php.net/manual/en/reflectionclass.getreflectionconstants.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstants(): array {}

		/**
		 * Gets short name
		 * <p>Gets the short name of the class, the part without the namespace.</p>
		 * @return string <p>The class short name.</p>
		 * @link http://php.net/manual/en/reflectionclass.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * Gets starting line number
		 * <p>Get the starting line number.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The starting line number, as an <code>int</code>.</p>
		 * @link http://php.net/manual/en/reflectionclass.getstartline.php
		 * @since PHP 5, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * Gets static properties
		 * <p>Get the static properties.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>The static properties, as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getStaticProperties(): array {}

		/**
		 * Gets static property value
		 * <p>Gets the value of a static property on this class.</p>
		 * @param string $name <p>The name of the static property for which to return a value.</p>
		 * @param mixed $def_value <p>A default value to return in case the class does not declare a static property with the given <code>name</code>. If the property does not exist and this argument is omitted, a ReflectionException is thrown.</p>
		 * @return mixed <p>The value of the static property.</p>
		 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getStaticPropertyValue(string $name, &$def_value = NULL) {}

		/**
		 * Returns an array of trait aliases
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with new method names in keys and original names (in the format <code>"TraitName::original"</code>) in values. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.gettraitaliases.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitAliases(): array {}

		/**
		 * Returns an array of names of traits used by this class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with trait names in values. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.gettraitnames.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitNames(): array {}

		/**
		 * Returns an array of traits used by this class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with trait names in keys and instances of trait's ReflectionClass in values. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.gettraits.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraits(): array {}

		/**
		 * Checks if constant is defined
		 * <p>Checks whether the class has a specific constant defined or not.</p>
		 * @param string $name <p>The name of the constant being checked for.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the constant is defined, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasConstant(string $name): bool {}

		/**
		 * Checks if method is defined
		 * <p>Checks whether a specific method is defined in a class.</p>
		 * @param string $name <p>Name of the method being checked for.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it has the method, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasMethod(string $name): bool {}

		/**
		 * Checks if property is defined
		 * <p>Checks whether the specified property is defined.</p>
		 * @param string $name <p>Name of the property being checked for.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it has the property, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasProperty(string $name): bool {}

		/**
		 * Implements interface
		 * <p>Checks whether it implements an interface.</p>
		 * @param \ReflectionClass|string $interface <p>The interface name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
		 * @see interface_exists()
		 * @since PHP 5, PHP 7
		 */
		public function implementsInterface($interface): bool {}

		/**
		 * Checks if in namespace
		 * <p>Checks if this class is defined in a namespace.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * Checks if class is abstract
		 * <p>Checks if the class is abstract.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isabstract.php
		 * @since PHP 5, PHP 7
		 */
		public function isAbstract(): bool {}

		/**
		 * Checks if class is anonymous
		 * <p>Checks if a class is an anonymous class.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isanonymous.php
		 * @since PHP 7
		 */
		public function isAnonymous(): bool {}

		/**
		 * Returns whether this class is cloneable
		 * <p>Returns whether this class is cloneable.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the class is cloneable, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionclass.iscloneable.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isCloneable(): bool {}

		/**
		 * Checks if class is final
		 * <p>Checks if a class is final.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isfinal.php
		 * @since PHP 5, PHP 7
		 */
		public function isFinal(): bool {}

		/**
		 * Checks class for instance
		 * <p>Checks if an object is an instance of a class.</p>
		 * @param object $object <p>The object being compared to.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinstance.php
		 * @see is_a()
		 * @since PHP 5, PHP 7
		 */
		public function isInstance(object $object): bool {}

		/**
		 * Checks if the class is instantiable
		 * <p>Checks if the class is instantiable.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
		 * @since PHP 5, PHP 7
		 */
		public function isInstantiable(): bool {}

		/**
		 * Checks if the class is an interface
		 * <p>Checks whether the class is an interface.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinterface.php
		 * @since PHP 5, PHP 7
		 */
		public function isInterface(): bool {}

		/**
		 * Checks if class is defined internally by an extension, or the core
		 * <p>Checks if the class is defined internally by an extension, or the core, as opposed to user-defined.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinternal.php
		 * @since PHP 5, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Check whether this class is iterable
		 * <p>Check whether this class is iterable (i.e. can be used inside foreach).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isiterable.php
		 * @since PHP 7 >= 7.2.0
		 */
		public function isIterable(): bool {}

		/**
		 * Checks if a subclass
		 * <p>Checks if the class is a subclass of a specified class or implements a specified interface.</p>
		 * @param mixed $class <p>Either the name of the class as <code>string</code> or a <code>ReflectionClass</code> object of the class to check against.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
		 * @see is_subclass_of(), get_parent_class()
		 * @since PHP 5, PHP 7
		 */
		public function isSubclassOf($class): bool {}

		/**
		 * Returns whether this is a trait
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this is a trait, <b><code>FALSE</code></b> otherwise. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.istrait.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isTrait(): bool {}

		/**
		 * Checks if user defined
		 * <p>Checks whether the class is user-defined, as opposed to internal.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
		 * @since PHP 5, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Creates a new class instance from given arguments
		 * <p>Creates a new instance of the class. The given arguments are passed to the class constructor.</p>
		 * @param mixed $_$args
		 * @return object
		 * @link http://php.net/manual/en/reflectionclass.newinstance.php
		 * @since PHP 5, PHP 7
		 */
		public function newInstance($_$args): object {}

		/**
		 * Creates a new class instance from given arguments
		 * <p>Creates a new instance of the class, the given arguments are passed to the class constructor.</p>
		 * @param array $args <p>The parameters to be passed to the class constructor as an <code>array</code>.</p>
		 * @return object <p>Returns a new instance of the class.</p>
		 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function newInstanceArgs(array $args = NULL): object {}

		/**
		 * Creates a new class instance without invoking the constructor
		 * <p>Creates a new instance of the class without invoking the constructor.</p>
		 * @return object
		 * @link http://php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function newInstanceWithoutConstructor(): object {}

		/**
		 * Sets static property value
		 * <p>Sets static property value.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name <p>Property name.</p>
		 * @param mixed $value <p>New property value.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setStaticPropertyValue(string $name, $value): void {}
	}

	/**
	 * <p>The <b>ReflectionClassConstant</b> class reports information about a class constant.</p>
	 * @link http://php.net/manual/en/class.reflectionclassconstant.php
	 * @since PHP 7 >= 7.1.0
	 */
	class ReflectionClassConstant implements \Reflector {

		/**
		 * @var mixed <p>Name of the class constant. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionclassconstant.php#reflectionclassconstant.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>Name of the class where the class constant is defined. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionclassconstant.php#reflectionclassconstant.props.class
		 */
		public $class;

		/**
		 * Constructs a ReflectionClassConstant
		 * <p>Constructs a new ReflectionClassConstant object.</p>
		 * @param mixed $class <p>Either a <code>string</code> containing the name of the class to reflect, or an <code>object</code>.</p>
		 * @param string $name <p>The name of the class constant.</p>
		 * @return self <p>Returns constructed ReflectionClassConstant instance.</p>
		 * @link http://php.net/manual/en/reflectionclassconstant.construct.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function __construct($class, string $name) {}

		/**
		 * Returns the string representation of the ReflectionClassConstant object
		 * <p>Returns the string representation of the ReflectionClassConstant object.</p>
		 * @return string <p>A string representation of this ReflectionClassConstant instance.</p>
		 * @link http://php.net/manual/en/reflectionclassconstant.tostring.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function __toString(): string {}

		/**
		 * Export
		 * <p>Exports a reflection.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $class <p>The reflection to export.</p>
		 * @param string $name <p>The class constant name.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionclassconstant.export.php
		 * @since PHP 7 >= 7.1.0
		 */
		public static function export($class, string $name, bool $return = NULL): string {}

		/**
		 * Gets declaring class
		 * <p>Gets the declaring class.</p>
		 * @return ReflectionClass <p>A ReflectionClass object.</p>
		 * @link http://php.net/manual/en/reflectionclassconstant.getdeclaringclass.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * Gets doc comments
		 * <p>Gets doc comments from a class constant.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclassconstant.getdoccomment.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getDocComment(): string {}

		/**
		 * Gets the class constant modifiers
		 * <p>Returns a bitfield of the access modifiers for this class constant.</p>
		 * @return int <p>A numeric representation of the modifiers. The actual meanings of these modifiers are described in the predefined constants.</p>
		 * @link http://php.net/manual/en/reflectionclassconstant.getmodifiers.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getModifiers(): int {}

		/**
		 * Get name of the constant
		 * @return string <p>Returns the constant's name.</p>
		 * @link http://php.net/manual/en/reflectionclassconstant.getname.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getName(): string {}

		/**
		 * Gets value
		 * <p>Gets the class constant's value.</p>
		 * @return mixed <p>The value of the class constant.</p>
		 * @link http://php.net/manual/en/reflectionclassconstant.getvalue.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getValue() {}

		/**
		 * Checks if class constant is private
		 * <p>Checks if the class constant is private.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the class constant is private, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclassconstant.isprivate.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function isPrivate(): bool {}

		/**
		 * Checks if class constant is protected
		 * <p>Checks if the class constant is protected.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the class constant is protected, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclassconstant.isprotected.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function isProtected(): bool {}

		/**
		 * Checks if class constant is public
		 * <p>Checks if the class constant is public.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the class constant is public, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclassconstant.ispublic.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function isPublic(): bool {}
	}

	/**
	 * <p>The ReflectionException class.</p>
	 * @link http://php.net/manual/en/class.reflectionexception.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionException extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>The <b>ReflectionExtension</b> class reports information about an extension.</p>
	 * @link http://php.net/manual/en/class.reflectionextension.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionExtension implements \Reflector {

		/**
		 * @var mixed <p>Name of the extension, same as calling the <code>ReflectionExtension::getName()</code> method.</p>
		 * @link http://php.net/manual/en/class.reflectionextension.php#reflectionextension.props.name
		 */
		public $name;

		/**
		 * Clones
		 * <p>The clone method prevents an object from being cloned. Reflection objects cannot be cloned.</p>
		 * @return void <p>No value is returned, if called a fatal error will occur.</p>
		 * @link http://php.net/manual/en/reflectionextension.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * Constructs a ReflectionExtension
		 * <p>Construct a ReflectionExtension <code>object</code>.</p>
		 * @param string $name <p>Name of the extension.</p>
		 * @return self <p>A ReflectionExtension <code>object</code>.</p>
		 * @link http://php.net/manual/en/reflectionextension.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(string $name) {}

		/**
		 * To string
		 * <p>Exports a reflected extension and returns it as a <code>string</code>. This is the same as the <code>ReflectionExtension::export()</code> with the <code>return</code> set to <b><code>TRUE</code></b>.</p>
		 * @return string <p>Returns the exported extension as a string, in the same way as the <code>ReflectionExtension::export()</code>.</p>
		 * @link http://php.net/manual/en/reflectionextension.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Export
		 * <p>Exports a reflected extension. The output format of this function is the same as the CLI argument <code>--re [extension]</code>.</p>
		 * @param string $name <p>The reflection to export.</p>
		 * @param string $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>If the <code>return</code> parameter is set to <b><code>TRUE</code></b>, then the export is returned as a <code>string</code>, otherwise <b><code>NULL</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionextension.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $name, string $return = 'FALSE'): string {}

		/**
		 * Gets class names
		 * <p>Gets a listing of class names as defined in the extension.</p>
		 * @return array <p>An <code>array</code> of class names, as defined in the extension. If no classes are defined, an empty array is returned.</p>
		 * @link http://php.net/manual/en/reflectionextension.getclassnames.php
		 * @since PHP 5, PHP 7
		 */
		public function getClassNames(): array {}

		/**
		 * Gets classes
		 * <p>Gets a list of classes from an extension.</p>
		 * @return array <p>An array of ReflectionClass objects, one for each class within the extension. If no classes are defined, an empty array is returned.</p>
		 * @link http://php.net/manual/en/reflectionextension.getclasses.php
		 * @since PHP 5, PHP 7
		 */
		public function getClasses(): array {}

		/**
		 * Gets constants
		 * <p>Get defined constants from an extension.</p>
		 * @return array <p>An associative array with constant names as keys.</p>
		 * @link http://php.net/manual/en/reflectionextension.getconstants.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstants(): array {}

		/**
		 * Gets dependencies
		 * <p>Gets dependencies, by listing both required and conflicting dependencies.</p>
		 * @return array <p>An associative <code>array</code> with dependencies as keys and either <code>Required</code>, <code>Optional</code> or <code>Conflicts</code> as the values.</p>
		 * @link http://php.net/manual/en/reflectionextension.getdependencies.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getDependencies(): array {}

		/**
		 * Gets extension functions
		 * <p>Get defined functions from an extension.</p>
		 * @return array <p>An associative array of ReflectionFunction objects, for each function defined in the extension with the keys being the function names. If no function are defined, an empty array is returned.</p>
		 * @link http://php.net/manual/en/reflectionextension.getfunctions.php
		 * @see get_extension_funcs()
		 * @since PHP 5, PHP 7
		 */
		public function getFunctions(): array {}

		/**
		 * Gets extension ini entries
		 * <p>Get the ini entries for an extension.</p>
		 * @return array <p>An associative <code>array</code> with the ini entries as keys, with their defined values as values.</p>
		 * @link http://php.net/manual/en/reflectionextension.getinientries.php
		 * @see ini_get_all()
		 * @since PHP 5, PHP 7
		 */
		public function getINIEntries(): array {}

		/**
		 * Gets extension name
		 * <p>Gets the extensions name.</p>
		 * @return string <p>The extensions name.</p>
		 * @link http://php.net/manual/en/reflectionextension.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets extension version
		 * <p>Gets the version of the extension.</p>
		 * @return string <p>The version of the extension.</p>
		 * @link http://php.net/manual/en/reflectionextension.getversion.php
		 * @since PHP 5, PHP 7
		 */
		public function getVersion(): string {}

		/**
		 * Print extension info
		 * <p>Prints out the "<code>phpinfo()</code>" snippet for the given extension.</p>
		 * @return void <p>Information about the extension.</p>
		 * @link http://php.net/manual/en/reflectionextension.info.php
		 * @see phpinfo()
		 * @since PHP 5 >= 5.2.4, PHP 7
		 */
		public function info(): void {}

		/**
		 * Returns whether this extension is persistent
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> for extensions loaded by <code>extension</code>, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionextension.ispersistent.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isPersistent(): void {}

		/**
		 * Returns whether this extension is temporary
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> for extensions loaded by <code>dl()</code>, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionextension.istemporary.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isTemporary(): void {}
	}

	/**
	 * <p>The <b>ReflectionFunction</b> class reports information about a function.</p>
	 * @link http://php.net/manual/en/class.reflectionfunction.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionFunction extends \ReflectionFunctionAbstract implements \Reflector {

		/**
		 * @var int <p>Indicates deprecated functions.</p>
		 * @link http://php.net/manual/en/class.reflectionfunction.php
		 */
		const IS_DEPRECATED = 262144;

		/**
		 * @var mixed <p>Name of the function. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionfunction.php#reflectionfunction.props.name
		 */
		public $name;

		/**
		 * Clones function
		 * <p>Clones a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * Constructs a ReflectionFunction object
		 * <p>Constructs a ReflectionFunction object.</p>
		 * @param mixed $name <p>The name of the function to reflect or a closure.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionfunction.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($name) {}

		/**
		 * To string
		 * <p>To string.</p>
		 * @return string <p>Returns <code>ReflectionFunction::export()</code>-like output for the function.</p>
		 * @link http://php.net/manual/en/reflectionfunction.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Exports function
		 * <p>Exports a Reflected function.</p>
		 * @param string $name <p>The reflection to export.</p>
		 * @param string $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>If the <code>return</code> parameter is set to <b><code>TRUE</code></b>, then the export is returned as a <code>string</code>, otherwise <b><code>NULL</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionfunction.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $name, string $return = NULL): string {}

		/**
		 * Returns a dynamically created closure for the function
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return Closure <p>Returns Closure. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionfunction.getclosure.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosure(): \Closure {}

		/**
		 * Returns the scope associated to the closure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>Returns the class on success or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureScopeClass(): \ReflectionClass {}

		/**
		 * Returns this pointer bound to closure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return object <p>Returns $this pointer. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureThis(): object {}

		/**
		 * Gets doc comment
		 * <p>Get a Doc comment from a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets end line number
		 * <p>Get the ending line number.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The ending line number of the user defined function, or <b><code>FALSE</code></b> if unknown.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * Gets extension info
		 * <p>Get the extension information of a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionExtension <p>The extension information, as a ReflectionExtension object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * Gets extension name
		 * <p>Get the extensions name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The extensions name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * Gets file name
		 * <p>Gets the file name from a user-defined function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The file name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * Gets function name
		 * <p>Get the name of the function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The name of the function.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets namespace name
		 * <p>Get the namespace name where the class is defined.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The namespace name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * Gets number of parameters
		 * <p>Get the number of parameters that a function defines, both optional and required.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of parameters.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
		 * @see func_num_args()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfParameters(): int {}

		/**
		 * Gets number of required parameters
		 * <p>Get the number of required parameters that a function defines.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of required parameters.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfRequiredParameters(): int {}

		/**
		 * Gets parameters
		 * <p>Get the parameters as an array of <code>ReflectionParameter</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>The parameters, as a ReflectionParameter object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * Gets the specified return type of a function
		 * <p>Gets the specified return type of a reflected function.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a return type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
		 * @since PHP 7
		 */
		public function getReturnType(): \ReflectionType {}

		/**
		 * Gets function short name
		 * <p>Get the short name of the function (without the namespace part).</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The short name of the function.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * Gets starting line number
		 * <p>Gets the starting line number of the function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The starting line number.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * Gets static variables
		 * <p>Get the static variables.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>An <code>array</code> of static variables.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStaticVariables(): array {}

		/**
		 * Checks if the function has a specified return type
		 * <p>Checks whether the reflected function has a return type specified.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a specified return type, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
		 * @since PHP 7
		 */
		public function hasReturnType(): bool {}

		/**
		 * Checks if function in namespace
		 * <p>Checks whether a function is defined in a namespace.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's in a namespace, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * Invokes function
		 * <p>Invokes a reflected function.</p>
		 * @param mixed $_$args
		 * @return mixed <p>Returns the result of the invoked function call.</p>
		 * @link http://php.net/manual/en/reflectionfunction.invoke.php
		 * @see call_user_func()
		 * @since PHP 5, PHP 7
		 */
		public function invoke($_$args) {}

		/**
		 * Invokes function args
		 * <p>Invokes the function and pass its arguments as array.</p>
		 * @param array $args <p>The passed arguments to the function as an array, much like <code>call_user_func_array()</code> works.</p>
		 * @return mixed <p>Returns the result of the invoked function</p>
		 * @link http://php.net/manual/en/reflectionfunction.invokeargs.php
		 * @see call_user_func_array()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function invokeArgs(array $args) {}

		/**
		 * Checks if closure
		 * <p>Checks whether the reflected function is a Closure.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a Closure, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isClosure(): bool {}

		/**
		 * Checks if deprecated
		 * <p>Checks whether the function is deprecated.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's deprecated, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDeprecated(): bool {}

		/**
		 * Checks if function is disabled
		 * <p>Checks if the function is disabled, via the disable_functions directive.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's disable, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunction.isdisabled.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDisabled(): bool {}

		/**
		 * Returns whether this function is a generator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is generator, <b><code>FALSE</code></b> if it is not or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function isGenerator(): bool {}

		/**
		 * Checks if is internal
		 * <p>Checks whether the function is internal, as opposed to user-defined.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's internal, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Checks if user defined
		 * <p>Checks whether the function is user-defined, as opposed to internal.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's user-defined, otherwise false;</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Checks if the function is variadic
		 * <p>Checks if the function is variadic.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}

		/**
		 * Checks if returns reference
		 * <p>Checks whether the function returns a reference.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it returns a reference, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function returnsReference(): bool {}
	}

	/**
	 * <p>A parent class to ReflectionFunction, read its description for details.</p>
	 * @link http://php.net/manual/en/class.reflectionfunctionabstract.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class ReflectionFunctionAbstract implements \Reflector {

		/**
		 * @var mixed <p>Name of the function. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionfunctionabstract.php#reflectionfunctionabstract.props.name
		 */
		public $name;

		/**
		 * Clones function
		 * <p>Clones a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * To string
		 * <p>To string.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>The string.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.tostring.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		abstract public function __toString(): void;

		/**
		 * Returns the scope associated to the closure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>Returns the class on success or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureScopeClass(): \ReflectionClass {}

		/**
		 * Returns this pointer bound to closure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return object <p>Returns $this pointer. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureThis(): object {}

		/**
		 * Gets doc comment
		 * <p>Get a Doc comment from a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets end line number
		 * <p>Get the ending line number.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The ending line number of the user defined function, or <b><code>FALSE</code></b> if unknown.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * Gets extension info
		 * <p>Get the extension information of a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionExtension <p>The extension information, as a ReflectionExtension object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * Gets extension name
		 * <p>Get the extensions name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The extensions name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * Gets file name
		 * <p>Gets the file name from a user-defined function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The file name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * Gets function name
		 * <p>Get the name of the function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The name of the function.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets namespace name
		 * <p>Get the namespace name where the class is defined.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The namespace name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * Gets number of parameters
		 * <p>Get the number of parameters that a function defines, both optional and required.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of parameters.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
		 * @see func_num_args()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfParameters(): int {}

		/**
		 * Gets number of required parameters
		 * <p>Get the number of required parameters that a function defines.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of required parameters.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfRequiredParameters(): int {}

		/**
		 * Gets parameters
		 * <p>Get the parameters as an array of <code>ReflectionParameter</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>The parameters, as a ReflectionParameter object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * Gets the specified return type of a function
		 * <p>Gets the specified return type of a reflected function.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a return type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
		 * @since PHP 7
		 */
		public function getReturnType(): \ReflectionType {}

		/**
		 * Gets function short name
		 * <p>Get the short name of the function (without the namespace part).</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The short name of the function.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * Gets starting line number
		 * <p>Gets the starting line number of the function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The starting line number.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * Gets static variables
		 * <p>Get the static variables.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>An <code>array</code> of static variables.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStaticVariables(): array {}

		/**
		 * Checks if the function has a specified return type
		 * <p>Checks whether the reflected function has a return type specified.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a specified return type, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
		 * @since PHP 7
		 */
		public function hasReturnType(): bool {}

		/**
		 * Checks if function in namespace
		 * <p>Checks whether a function is defined in a namespace.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's in a namespace, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * Checks if closure
		 * <p>Checks whether the reflected function is a Closure.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a Closure, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isClosure(): bool {}

		/**
		 * Checks if deprecated
		 * <p>Checks whether the function is deprecated.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's deprecated, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDeprecated(): bool {}

		/**
		 * Returns whether this function is a generator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is generator, <b><code>FALSE</code></b> if it is not or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function isGenerator(): bool {}

		/**
		 * Checks if is internal
		 * <p>Checks whether the function is internal, as opposed to user-defined.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's internal, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Checks if user defined
		 * <p>Checks whether the function is user-defined, as opposed to internal.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's user-defined, otherwise false;</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Checks if the function is variadic
		 * <p>Checks if the function is variadic.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}

		/**
		 * Checks if returns reference
		 * <p>Checks whether the function returns a reference.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it returns a reference, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function returnsReference(): bool {}
	}

	/**
	 * <p>The <b>ReflectionGenerator</b> class reports information about a generator.</p>
	 * @link http://php.net/manual/en/class.reflectiongenerator.php
	 * @since PHP 7
	 */
	class ReflectionGenerator {

		/**
		 * Constructs a ReflectionGenerator object
		 * <p>Constructs a ReflectionGenerator object.</p>
		 * @param \Generator $generator <p>A generator object.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.construct.php
		 * @since PHP 7
		 */
		public function __construct(\Generator $generator) {}

		/**
		 * Gets the file name of the currently executing generator
		 * <p>Get the full path and file name of the currently executing generator.</p>
		 * @return string <p>Returns the full path and file name of the currently executing generator.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.getexecutingfile.php
		 * @since PHP 7
		 */
		public function getExecutingFile(): string {}

		/**
		 * Gets the executing Generator object
		 * <p>Get the executing Generator object</p>
		 * @return Generator <p>Returns the currently executing Generator object.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.getexecutinggenerator.php
		 * @since PHP 7
		 */
		public function getExecutingGenerator(): \Generator {}

		/**
		 * Gets the currently executing line of the generator
		 * <p>Get the currently executing line number of the generator.</p>
		 * @return int <p>Returns the line number of the currently executing statement in the generator.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.getexecutingline.php
		 * @since PHP 7
		 */
		public function getExecutingLine(): int {}

		/**
		 * Gets the function name of the generator
		 * <p>Enables the function name of the generator to be obtained by returning a class derived from ReflectionFunctionAbstract.</p>
		 * @return ReflectionFunctionAbstract <p>Returns a ReflectionFunctionAbstract class. This will be ReflectionFunction for functions, or ReflectionMethod for methods.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.getfunction.php
		 * @since PHP 7
		 */
		public function getFunction(): \ReflectionFunctionAbstract {}

		/**
		 * Gets the $this value of the generator
		 * <p>Get the <code>$this</code> value that the generator has access to.</p>
		 * @return object <p>Returns the <code>$this</code> value, or <b><code>NULL</code></b> if the generator was not created in a class context.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.getthis.php
		 * @since PHP 7
		 */
		public function getThis(): object {}

		/**
		 * Gets the trace of the executing generator
		 * <p>Get the trace of the currently executing generator.</p>
		 * @param int $options <p>The value of <code>options</code> can be any of the following flags.</p> <p></p> <b>Available options</b>   Option Description      <b><code>DEBUG_BACKTRACE_PROVIDE_OBJECT</code></b>   Default.     <b><code>DEBUG_BACKTRACE_IGNORE_ARGS</code></b>   Don't include the argument information for functions in the stack trace.
		 * @return array <p>Returns the trace of the currently executing generator.</p>
		 * @link http://php.net/manual/en/reflectiongenerator.gettrace.php
		 * @since PHP 7
		 */
		public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array {}
	}

	/**
	 * <p>The <b>ReflectionMethod</b> class reports information about a method.</p>
	 * @link http://php.net/manual/en/class.reflectionmethod.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionMethod extends \ReflectionFunctionAbstract implements \Reflector {

		/**
		 * @var int <p>Indicates that the method is static.</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php
		 */
		const IS_STATIC = 1;

		/**
		 * @var int <p>Indicates that the method is public.</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php
		 */
		const IS_PUBLIC = 256;

		/**
		 * @var int <p>Indicates that the method is protected.</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php
		 */
		const IS_PROTECTED = 512;

		/**
		 * @var int <p>Indicates that the method is private.</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php
		 */
		const IS_PRIVATE = 1024;

		/**
		 * @var int <p>Indicates that the method is abstract.</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php
		 */
		const IS_ABSTRACT = 2;

		/**
		 * @var int <p>Indicates that the method is final.</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php
		 */
		const IS_FINAL = 4;

		/**
		 * @var mixed <p>Method name</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php#reflectionmethod.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>Class name</p>
		 * @link http://php.net/manual/en/class.reflectionmethod.php#reflectionmethod.props.class
		 */
		public $class;

		/**
		 * Clones function
		 * <p>Clones a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * Constructs a ReflectionMethod
		 * <p>Constructs a new ReflectionMethod.</p>
		 * @param string|object $class <p>Classname or object (instance of the class) that contains the method.</p>
		 * @param string $name <p>Name of the method.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionmethod.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($class, string $name) {}

		/**
		 * Returns the string representation of the Reflection method object
		 * <p>Returns the string representation of the Reflection method object.</p>
		 * @return string <p>A string representation of this ReflectionMethod instance.</p>
		 * @link http://php.net/manual/en/reflectionmethod.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Export a reflection method
		 * <p>Exports a ReflectionMethod.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $class <p>The class name.</p>
		 * @param string $name <p>The name of the method.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>If the <code>return</code> parameter is set to <b><code>TRUE</code></b>, then the export is returned as a <code>string</code>, otherwise <b><code>NULL</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionmethod.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $class, string $name, bool $return = FALSE): string {}

		/**
		 * Returns a dynamically created closure for the method
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param object $object <p>Forbidden for static methods, required for other methods.</p>
		 * @return Closure <p>Returns Closure. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionmethod.getclosure.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosure(object $object): \Closure {}

		/**
		 * Returns the scope associated to the closure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>Returns the class on success or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureScopeClass(): \ReflectionClass {}

		/**
		 * Returns this pointer bound to closure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return object <p>Returns $this pointer. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getClosureThis(): object {}

		/**
		 * Gets declaring class for the reflected method
		 * <p>Gets the declaring class for the reflected method.</p>
		 * @return ReflectionClass <p>A ReflectionClass object of the class that the reflected method is part of.</p>
		 * @link http://php.net/manual/en/reflectionmethod.getdeclaringclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * Gets doc comment
		 * <p>Get a Doc comment from a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets end line number
		 * <p>Get the ending line number.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The ending line number of the user defined function, or <b><code>FALSE</code></b> if unknown.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * Gets extension info
		 * <p>Get the extension information of a function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionExtension <p>The extension information, as a ReflectionExtension object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * Gets extension name
		 * <p>Get the extensions name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The extensions name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * Gets file name
		 * <p>Gets the file name from a user-defined function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The file name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * Gets the method modifiers
		 * <p>Returns a bitfield of the access modifiers for this method.</p>
		 * @return int <p>A numeric representation of the modifiers. The modifiers are listed below. The actual meanings of these modifiers are described in the predefined constants.</p>
		 * @link http://php.net/manual/en/reflectionmethod.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * Gets function name
		 * <p>Get the name of the function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The name of the function.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets namespace name
		 * <p>Get the namespace name where the class is defined.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The namespace name.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * Gets number of parameters
		 * <p>Get the number of parameters that a function defines, both optional and required.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of parameters.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
		 * @see func_num_args()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfParameters(): int {}

		/**
		 * Gets number of required parameters
		 * <p>Get the number of required parameters that a function defines.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of required parameters.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNumberOfRequiredParameters(): int {}

		/**
		 * Gets parameters
		 * <p>Get the parameters as an array of <code>ReflectionParameter</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>The parameters, as a ReflectionParameter object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * Gets the method prototype (if there is one)
		 * <p>Returns the methods prototype.</p>
		 * @return ReflectionMethod <p>A ReflectionMethod instance of the method prototype.</p>
		 * @link http://php.net/manual/en/reflectionmethod.getprototype.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getPrototype(): \ReflectionMethod {}

		/**
		 * Gets the specified return type of a function
		 * <p>Gets the specified return type of a reflected function.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a return type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
		 * @since PHP 7
		 */
		public function getReturnType(): \ReflectionType {}

		/**
		 * Gets function short name
		 * <p>Get the short name of the function (without the namespace part).</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The short name of the function.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * Gets starting line number
		 * <p>Gets the starting line number of the function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The starting line number.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * Gets static variables
		 * <p>Get the static variables.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>An <code>array</code> of static variables.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getStaticVariables(): array {}

		/**
		 * Checks if the function has a specified return type
		 * <p>Checks whether the reflected function has a return type specified.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a specified return type, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
		 * @since PHP 7
		 */
		public function hasReturnType(): bool {}

		/**
		 * Checks if function in namespace
		 * <p>Checks whether a function is defined in a namespace.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's in a namespace, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * Invoke
		 * <p>Invokes a reflected method.</p>
		 * @param object $object <p>The object to invoke the method on. For static methods, pass <code>null</code> to this parameter.</p>
		 * @param mixed $_$args
		 * @return mixed <p>Returns the method result.</p>
		 * @link http://php.net/manual/en/reflectionmethod.invoke.php
		 * @see call_user_func()
		 * @since PHP 5, PHP 7
		 */
		public function invoke(object $object, $_$args) {}

		/**
		 * Invoke args
		 * <p>Invokes the reflected method and pass its arguments as array.</p>
		 * @param object $object <p>The object to invoke the method on. In case of static methods, you can pass <code>null</code> to this parameter.</p>
		 * @param array $args <p>The parameters to be passed to the function, as an <code>array</code>.</p>
		 * @return mixed <p>Returns the method result.</p>
		 * @link http://php.net/manual/en/reflectionmethod.invokeargs.php
		 * @see call_user_func_array()
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function invokeArgs(object $object, array $args) {}

		/**
		 * Checks if method is abstract
		 * <p>Checks if the method is abstract.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is abstract, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isabstract.php
		 * @since PHP 5, PHP 7
		 */
		public function isAbstract(): bool {}

		/**
		 * Checks if closure
		 * <p>Checks whether the reflected function is a Closure.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is a Closure, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function isClosure(): bool {}

		/**
		 * Checks if method is a constructor
		 * <p>Checks if the method is a constructor.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is a constructor, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isconstructor.php
		 * @since PHP 5, PHP 7
		 */
		public function isConstructor(): bool {}

		/**
		 * Checks if deprecated
		 * <p>Checks whether the function is deprecated.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's deprecated, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isDeprecated(): bool {}

		/**
		 * Checks if method is a destructor
		 * <p>Checks if the method is a destructor.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is a destructor, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isdestructor.php
		 * @since PHP 5, PHP 7
		 */
		public function isDestructor(): bool {}

		/**
		 * Checks if method is final
		 * <p>Checks if the method is final.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is final, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isfinal.php
		 * @since PHP 5, PHP 7
		 */
		public function isFinal(): bool {}

		/**
		 * Returns whether this function is a generator
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is generator, <b><code>FALSE</code></b> if it is not or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function isGenerator(): bool {}

		/**
		 * Checks if is internal
		 * <p>Checks whether the function is internal, as opposed to user-defined.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's internal, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Checks if method is private
		 * <p>Checks if the method is private.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is private, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isprivate.php
		 * @since PHP 5, PHP 7
		 */
		public function isPrivate(): bool {}

		/**
		 * Checks if method is protected
		 * <p>Checks if the method is protected.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is protected, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isprotected.php
		 * @since PHP 5, PHP 7
		 */
		public function isProtected(): bool {}

		/**
		 * Checks if method is public
		 * <p>Checks if the method is public.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is public, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.ispublic.php
		 * @since PHP 5, PHP 7
		 */
		public function isPublic(): bool {}

		/**
		 * Checks if method is static
		 * <p>Checks if the method is static.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the method is static, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionmethod.isstatic.php
		 * @since PHP 5, PHP 7
		 */
		public function isStatic(): bool {}

		/**
		 * Checks if user defined
		 * <p>Checks whether the function is user-defined, as opposed to internal.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's user-defined, otherwise false;</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Checks if the function is variadic
		 * <p>Checks if the function is variadic.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the function is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}

		/**
		 * Checks if returns reference
		 * <p>Checks whether the function returns a reference.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it returns a reference, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function returnsReference(): bool {}

		/**
		 * Set method accessibility
		 * <p>Sets a method to be accessible. For example, it may allow protected and private methods to be invoked.</p>
		 * @param bool $accessible <p><b><code>TRUE</code></b> to allow accessibility, or <b><code>FALSE</code></b>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionmethod.setaccessible.php
		 * @since PHP 5 >= 5.3.2, PHP 7
		 */
		public function setAccessible(bool $accessible): void {}
	}

	/**
	 * @link http://php.net/manual/en/class.reflectionnamedtype.php
	 * @since PHP 7 >= 7.1.0
	 */
	class ReflectionNamedType extends \ReflectionType {

		/**
		 * To string
		 * <p>Gets the parameter type name.</p>
		 * @return string <p>Returns the type of the parameter.</p>
		 * @link http://php.net/manual/en/reflectiontype.tostring.php
		 * @since PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Checks if null is allowed
		 * <p>Checks whether the parameter allows <b><code>NULL</code></b>.</p>
		 * @return bool <p><b><code>TRUE</code></b> if <b><code>NULL</code></b> is allowed, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectiontype.allowsnull.php
		 * @since PHP 7
		 */
		public function allowsNull(): bool {}

		/**
		 * Get the text of the type hint
		 * @return string <p>Returns the text of the type hint.</p>
		 * @link http://php.net/manual/en/reflectionnamedtype.getname.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getName(): string {}

		/**
		 * Checks if it is a built-in type
		 * <p>Checks if the type is a built-in type in PHP.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's a built-in type, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectiontype.isbuiltin.php
		 * @since PHP 7
		 */
		public function isBuiltin(): bool {}
	}

	/**
	 * <p>The <b>ReflectionObject</b> class reports information about an <code>object</code>.</p>
	 * @link http://php.net/manual/en/class.reflectionobject.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionObject extends \ReflectionClass implements \Reflector {

		/**
		 * @var mixed <p>Name of the object's class. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionobject.php#reflectionobject.props.name
		 */
		public $name;

		/**
		 * Constructs a ReflectionObject
		 * <p>Constructs a ReflectionObject.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param object $argument <p>An object instance.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionobject.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(object $argument) {}

		/**
		 * Returns the string representation of the ReflectionClass object
		 * <p>Returns the string representation of the ReflectionClass object.</p>
		 * @return string <p>A string representation of this ReflectionClass instance.</p>
		 * @link http://php.net/manual/en/reflectionclass.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Export
		 * <p>Exports a reflection.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $argument <p>The reflection to export.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>If the <code>return</code> parameter is set to <b><code>TRUE</code></b>, then the export is returned as a <code>string</code>, otherwise <b><code>NULL</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionobject.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $argument, bool $return = NULL): string {}

		/**
		 * Gets defined constant
		 * <p>Gets the defined constant.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name <p>The name of the class constant to get.</p>
		 * @return mixed <p>Value of the constant with the name <code>name</code>. Returns <b><code>FALSE</code></b> if the constant was not found in the class.</p>
		 * @link http://php.net/manual/en/reflectionclass.getconstant.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstant(string $name) {}

		/**
		 * Gets constants
		 * <p>Gets all defined constants from a class, regardless of their visibility.</p>
		 * @return array <p>An <code>array</code> of constants, where the keys hold the name and the values the value of the constants.</p>
		 * @link http://php.net/manual/en/reflectionclass.getconstants.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstants(): array {}

		/**
		 * Gets the constructor of the class
		 * <p>Gets the constructor of the reflected class.</p>
		 * @return ReflectionMethod <p>A ReflectionMethod object reflecting the class' constructor, or <b><code>NULL</code></b> if the class has no constructor.</p>
		 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
		 * @since PHP 5, PHP 7
		 */
		public function getConstructor(): \ReflectionMethod {}

		/**
		 * Gets default properties
		 * <p>Gets default properties from a class (including inherited properties).</p><p><b>Note</b>:</p><p>This method only works for static properties when used on internal classes. The default value of a static class property can not be tracked when using this method on user defined classes.</p>
		 * @return array <p>An <code>array</code> of default properties, with the key being the name of the property and the value being the default value of the property or <b><code>NULL</code></b> if the property doesn't have a default value. The function does not distinguish between static and non static properties and does not take visibility modifiers into account.</p>
		 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getDefaultProperties(): array {}

		/**
		 * Gets doc comments
		 * <p>Gets doc comments from a class. Doc comments start with /&#42;&#42;. If there are multiple doc comments above the class definition, the one closest to the class will be taken.</p>
		 * @return string <p>The doc comment if it exists, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
		 * @since PHP 5, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets end line
		 * <p>Gets end line number from a user-defined class definition.</p>
		 * @return int <p>The ending line number of the user defined class, or <b><code>FALSE</code></b> if unknown.</p>
		 * @link http://php.net/manual/en/reflectionclass.getendline.php
		 * @since PHP 5, PHP 7
		 */
		public function getEndLine(): int {}

		/**
		 * Gets a ReflectionExtension object for the extension which defined the class
		 * <p>Gets a ReflectionExtension object for the extension which defined the class.</p>
		 * @return ReflectionExtension <p>A ReflectionExtension object representing the extension which defined the class, or <b><code>NULL</code></b> for user-defined classes.</p>
		 * @link http://php.net/manual/en/reflectionclass.getextension.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtension(): \ReflectionExtension {}

		/**
		 * Gets the name of the extension which defined the class
		 * <p>Gets the name of the extension which defined the class.</p>
		 * @return string <p>The name of the extension which defined the class, or <b><code>FALSE</code></b> for user-defined classes.</p>
		 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
		 * @since PHP 5, PHP 7
		 */
		public function getExtensionName(): string {}

		/**
		 * Gets the filename of the file in which the class has been defined
		 * <p>Gets the filename of the file in which the class has been defined.</p>
		 * @return string <p>Returns the filename of the file in which the class has been defined. If the class is defined in the PHP core or in a PHP extension, <b><code>FALSE</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionclass.getfilename.php
		 * @since PHP 5, PHP 7
		 */
		public function getFileName(): string {}

		/**
		 * Gets the interface names
		 * <p>Get the interface names.</p>
		 * @return array <p>A numerical array with interface names as the values.</p>
		 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getInterfaceNames(): array {}

		/**
		 * Gets the interfaces
		 * <p>Gets the interfaces.</p>
		 * @return array <p>An associative <code>array</code> of interfaces, with keys as interface names and the array values as ReflectionClass objects.</p>
		 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
		 * @since PHP 5, PHP 7
		 */
		public function getInterfaces(): array {}

		/**
		 * Gets a ReflectionMethod for a class method
		 * <p>Gets a ReflectionMethod for a class method.</p>
		 * @param string $name <p>The method name to reflect.</p>
		 * @return ReflectionMethod <p>A ReflectionMethod.</p>
		 * @link http://php.net/manual/en/reflectionclass.getmethod.php
		 * @since PHP 5, PHP 7
		 */
		public function getMethod(string $name): \ReflectionMethod {}

		/**
		 * Gets an array of methods
		 * <p>Gets an array of methods for the class.</p>
		 * @param int $filter <p>Filter the results to include only methods with certain attributes. Defaults to no filtering.</p> <p>Any bitwise disjunction of <b><code>ReflectionMethod::IS_STATIC</code></b>, <b><code>ReflectionMethod::IS_PUBLIC</code></b>, <b><code>ReflectionMethod::IS_PROTECTED</code></b>, <b><code>ReflectionMethod::IS_PRIVATE</code></b>, <b><code>ReflectionMethod::IS_ABSTRACT</code></b>, <b><code>ReflectionMethod::IS_FINAL</code></b>, so that all methods with <i>any</i> of the given attributes will be returned.</p> <p><b>Note</b>:  Note that other bitwise operations, for instance <code>~</code> will not work as expected. In other words, it is not possible to retrieve all non-static methods, for example. </p>
		 * @return array <p>An <code>array</code> of ReflectionMethod objects reflecting each method.</p>
		 * @link http://php.net/manual/en/reflectionclass.getmethods.php
		 * @see get_class_methods()
		 * @since PHP 5, PHP 7
		 */
		public function getMethods(int $filter = NULL): array {}

		/**
		 * Gets the class modifiers
		 * <p>Returns a bitfield of the access modifiers for this class.</p>
		 * @return int <p>Returns bitmask of  modifier constants.</p>
		 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * Gets class name
		 * <p>Gets the class name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The class name.</p>
		 * @link http://php.net/manual/en/reflectionclass.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets namespace name
		 * <p>Gets the namespace name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The namespace name.</p>
		 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getNamespaceName(): string {}

		/**
		 * Gets parent class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>A ReflectionClass or <b><code>FALSE</code></b> if there's no parent.</p>
		 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getParentClass(): \ReflectionClass {}

		/**
		 * Gets properties
		 * <p>Retrieves reflected properties.</p>
		 * @param int $filter <p>The optional filter, for filtering desired property types. It's configured using the ReflectionProperty constants, and defaults to all property types.</p>
		 * @return array <p>An array of ReflectionProperty objects.</p>
		 * @link http://php.net/manual/en/reflectionclass.getproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperties(int $filter = NULL): array {}

		/**
		 * Gets a ReflectionProperty for a class's property
		 * <p>Gets a ReflectionProperty for a class's property.</p>
		 * @param string $name <p>The property name.</p>
		 * @return ReflectionProperty <p>A ReflectionProperty.</p>
		 * @link http://php.net/manual/en/reflectionclass.getproperty.php
		 * @since PHP 5, PHP 7
		 */
		public function getProperty(string $name): \ReflectionProperty {}

		/**
		 * Gets a ReflectionClassConstant for a class's constant
		 * <p>Gets a ReflectionClassConstant for a class's property.</p>
		 * @param string $name <p>The class constant name.</p>
		 * @return ReflectionClassConstant|false <p>A ReflectionClassConstant, or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.getreflectionconstant.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstant(string $name) {}

		/**
		 * Gets class constants
		 * <p>Retrieves reflected constants.</p>
		 * @return array <p>An array of ReflectionClassConstant objects.</p>
		 * @link http://php.net/manual/en/reflectionclass.getreflectionconstants.php
		 * @since PHP 7 >= 7.1.0
		 */
		public function getReflectionConstants(): array {}

		/**
		 * Gets short name
		 * <p>Gets the short name of the class, the part without the namespace.</p>
		 * @return string <p>The class short name.</p>
		 * @link http://php.net/manual/en/reflectionclass.getshortname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getShortName(): string {}

		/**
		 * Gets starting line number
		 * <p>Get the starting line number.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The starting line number, as an <code>int</code>.</p>
		 * @link http://php.net/manual/en/reflectionclass.getstartline.php
		 * @since PHP 5, PHP 7
		 */
		public function getStartLine(): int {}

		/**
		 * Gets static properties
		 * <p>Get the static properties.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>The static properties, as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
		 * @since PHP 5, PHP 7
		 */
		public function getStaticProperties(): array {}

		/**
		 * Gets static property value
		 * <p>Gets the value of a static property on this class.</p>
		 * @param string $name <p>The name of the static property for which to return a value.</p>
		 * @param mixed $def_value <p>A default value to return in case the class does not declare a static property with the given <code>name</code>. If the property does not exist and this argument is omitted, a ReflectionException is thrown.</p>
		 * @return mixed <p>The value of the static property.</p>
		 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function getStaticPropertyValue(string $name, &$def_value = NULL) {}

		/**
		 * Returns an array of trait aliases
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with new method names in keys and original names (in the format <code>"TraitName::original"</code>) in values. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.gettraitaliases.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitAliases(): array {}

		/**
		 * Returns an array of names of traits used by this class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with trait names in values. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.gettraitnames.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraitNames(): array {}

		/**
		 * Returns an array of traits used by this class
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array with trait names in keys and instances of trait's ReflectionClass in values. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.gettraits.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getTraits(): array {}

		/**
		 * Checks if constant is defined
		 * <p>Checks whether the class has a specific constant defined or not.</p>
		 * @param string $name <p>The name of the constant being checked for.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the constant is defined, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasConstant(string $name): bool {}

		/**
		 * Checks if method is defined
		 * <p>Checks whether a specific method is defined in a class.</p>
		 * @param string $name <p>Name of the method being checked for.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it has the method, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasMethod(string $name): bool {}

		/**
		 * Checks if property is defined
		 * <p>Checks whether the specified property is defined.</p>
		 * @param string $name <p>Name of the property being checked for.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it has the property, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function hasProperty(string $name): bool {}

		/**
		 * Implements interface
		 * <p>Checks whether it implements an interface.</p>
		 * @param \ReflectionClass|string $interface <p>The interface name.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
		 * @see interface_exists()
		 * @since PHP 5, PHP 7
		 */
		public function implementsInterface($interface): bool {}

		/**
		 * Checks if in namespace
		 * <p>Checks if this class is defined in a namespace.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.innamespace.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function inNamespace(): bool {}

		/**
		 * Checks if class is abstract
		 * <p>Checks if the class is abstract.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isabstract.php
		 * @since PHP 5, PHP 7
		 */
		public function isAbstract(): bool {}

		/**
		 * Checks if class is anonymous
		 * <p>Checks if a class is an anonymous class.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isanonymous.php
		 * @since PHP 7
		 */
		public function isAnonymous(): bool {}

		/**
		 * Returns whether this class is cloneable
		 * <p>Returns whether this class is cloneable.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the class is cloneable, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionclass.iscloneable.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isCloneable(): bool {}

		/**
		 * Checks if class is final
		 * <p>Checks if a class is final.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isfinal.php
		 * @since PHP 5, PHP 7
		 */
		public function isFinal(): bool {}

		/**
		 * Checks class for instance
		 * <p>Checks if an object is an instance of a class.</p>
		 * @param object $object <p>The object being compared to.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinstance.php
		 * @see is_a()
		 * @since PHP 5, PHP 7
		 */
		public function isInstance(object $object): bool {}

		/**
		 * Checks if the class is instantiable
		 * <p>Checks if the class is instantiable.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
		 * @since PHP 5, PHP 7
		 */
		public function isInstantiable(): bool {}

		/**
		 * Checks if the class is an interface
		 * <p>Checks whether the class is an interface.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinterface.php
		 * @since PHP 5, PHP 7
		 */
		public function isInterface(): bool {}

		/**
		 * Checks if class is defined internally by an extension, or the core
		 * <p>Checks if the class is defined internally by an extension, or the core, as opposed to user-defined.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isinternal.php
		 * @since PHP 5, PHP 7
		 */
		public function isInternal(): bool {}

		/**
		 * Check whether this class is iterable
		 * <p>Check whether this class is iterable (i.e. can be used inside foreach).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isiterable.php
		 * @since PHP 7 >= 7.2.0
		 */
		public function isIterable(): bool {}

		/**
		 * Checks if a subclass
		 * <p>Checks if the class is a subclass of a specified class or implements a specified interface.</p>
		 * @param mixed $class <p>Either the name of the class as <code>string</code> or a <code>ReflectionClass</code> object of the class to check against.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
		 * @see is_subclass_of(), get_parent_class()
		 * @since PHP 5, PHP 7
		 */
		public function isSubclassOf($class): bool {}

		/**
		 * Returns whether this is a trait
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this is a trait, <b><code>FALSE</code></b> otherwise. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionclass.istrait.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isTrait(): bool {}

		/**
		 * Checks if user defined
		 * <p>Checks whether the class is user-defined, as opposed to internal.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
		 * @since PHP 5, PHP 7
		 */
		public function isUserDefined(): bool {}

		/**
		 * Creates a new class instance from given arguments
		 * <p>Creates a new instance of the class. The given arguments are passed to the class constructor.</p>
		 * @param mixed $_$args
		 * @return object
		 * @link http://php.net/manual/en/reflectionclass.newinstance.php
		 * @since PHP 5, PHP 7
		 */
		public function newInstance($_$args): object {}

		/**
		 * Creates a new class instance from given arguments
		 * <p>Creates a new instance of the class, the given arguments are passed to the class constructor.</p>
		 * @param array $args <p>The parameters to be passed to the class constructor as an <code>array</code>.</p>
		 * @return object <p>Returns a new instance of the class.</p>
		 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function newInstanceArgs(array $args = NULL): object {}

		/**
		 * Creates a new class instance without invoking the constructor
		 * <p>Creates a new instance of the class without invoking the constructor.</p>
		 * @return object
		 * @link http://php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function newInstanceWithoutConstructor(): object {}

		/**
		 * Sets static property value
		 * <p>Sets static property value.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name <p>Property name.</p>
		 * @param mixed $value <p>New property value.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function setStaticPropertyValue(string $name, $value): void {}
	}

	/**
	 * <p>The <b>ReflectionParameter</b> class retrieves information about function's or method's parameters.</p>
	 * <p>To introspect function parameters, first create an instance of the ReflectionFunction or ReflectionMethod classes and then use their <code>ReflectionFunctionAbstract::getParameters()</code> method to retrieve an array of parameters.</p>
	 * @link http://php.net/manual/en/class.reflectionparameter.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionParameter implements \Reflector {

		/**
		 * @var mixed <p>Name of the parameter. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionparameter.php#reflectionparameter.props.name
		 */
		public $name;

		/**
		 * Clone
		 * <p>Clones.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link http://php.net/manual/en/reflectionparameter.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * Construct
		 * <p>Constructs a ReflectionParameter instance.</p>
		 * @param callable $function <p>The function to reflect parameters from.</p>
		 * @param mixed $parameter <p>Either an <code>int</code> specifying the position of the parameter (starting with zero), or a the parameter name as <code>string</code>.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionparameter.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct(callable $function, $parameter) {}

		/**
		 * To string
		 * <p>To string.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionparameter.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Checks if null is allowed
		 * <p>Checks whether the parameter allows <b><code>NULL</code></b>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if <b><code>NULL</code></b> is allowed, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionparameter.allowsnull.php
		 * @since PHP 5, PHP 7
		 */
		public function allowsNull(): bool {}

		/**
		 * Returns whether this parameter can be passed by value
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the parameter can be passed by value, <b><code>FALSE</code></b> otherwise. Returns <b><code>NULL</code></b> in case of an error.</p>
		 * @link http://php.net/manual/en/reflectionparameter.canbepassedbyvalue.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function canBePassedByValue(): bool {}

		/**
		 * Exports
		 * <p>Exports.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $function <p>The function name.</p>
		 * @param string $parameter <p>The parameter name.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string <p>The exported reflection.</p>
		 * @link http://php.net/manual/en/reflectionparameter.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(string $function, string $parameter, bool $return = NULL): string {}

		/**
		 * Get the type hinted class
		 * <p>Gets the class type hinted for the parameter as a ReflectionClass object.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>A ReflectionClass object.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getClass(): \ReflectionClass {}

		/**
		 * Gets declaring class
		 * <p>Gets the declaring class.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>A ReflectionClass object or <b><code>NULL</code></b> if called on function.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getdeclaringclass.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * Gets declaring function
		 * <p>Gets the declaring function.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionFunctionAbstract <p>A ReflectionFunction object.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getdeclaringfunction.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getDeclaringFunction(): \ReflectionFunctionAbstract {}

		/**
		 * Gets default parameter value
		 * <p>Gets the default value of the parameter for any user-defined or internal function or method. If the parameter is not optional a ReflectionException will be thrown.</p>
		 * @return mixed <p>The parameters default value.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getdefaultvalue.php
		 * @since PHP 5 >= 5.0.3, PHP 7
		 */
		public function getDefaultValue() {}

		/**
		 * Returns the default value's constant name if default value is constant or null
		 * <p>Returns the default value's constant name of the parameter of any user-defined or internal function or method, if default value is constant or null. If the parameter is not optional a ReflectionException will be thrown.</p>
		 * @return string <p>Returns string on success or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getdefaultvalueconstantname.php
		 * @since PHP 5 >= 5.4.6, PHP 7
		 */
		public function getDefaultValueConstantName(): string {}

		/**
		 * Gets parameter name
		 * <p>Gets the name of the parameter.</p>
		 * @return string <p>The name of the reflected parameter.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets parameters
		 * <p>Get the parameters as an array of <code>ReflectionParameter</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>The parameters, as a ReflectionParameter object.</p>
		 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
		 * @see func_get_args()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getParameters(): array {}

		/**
		 * Gets parameter position
		 * <p>Gets the position of the parameter.</p>
		 * @return int <p>The position of the parameter, left to right, starting at position #0.</p>
		 * @link http://php.net/manual/en/reflectionparameter.getposition.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function getPosition(): int {}

		/**
		 * Gets a parameter's type
		 * <p>Gets the associated type of a parameter.</p>
		 * @return ReflectionType <p>Returns a ReflectionType object if a parameter type is specified, <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionparameter.gettype.php
		 * @since PHP 7
		 */
		public function getType(): \ReflectionType {}

		/**
		 * Checks if parameter has a type
		 * <p>Checks if the parameter has a type associated with it.</p>
		 * @return bool <p><b><code>TRUE</code></b> if a type is specified, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionparameter.hastype.php
		 * @since PHP 7
		 */
		public function hasType(): bool {}

		/**
		 * Checks if parameter expects an array
		 * <p>Checks if the parameter expects an array.</p>
		 * @return bool <p><b><code>TRUE</code></b> if an <code>array</code> is expected, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionparameter.isarray.php
		 * @since PHP 5 >= 5.1.2, PHP 7
		 */
		public function isArray(): bool {}

		/**
		 * Returns whether parameter MUST be callable
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the parameter is <code>callable</code>, <b><code>FALSE</code></b> if it is not or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/reflectionparameter.iscallable.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function isCallable(): bool {}

		/**
		 * Checks if a default value is available
		 * <p>Checks if a default value for the parameter is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if a default value is available, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionparameter.isdefaultvalueavailable.php
		 * @since PHP 5 >= 5.0.3, PHP 7
		 */
		public function isDefaultValueAvailable(): bool {}

		/**
		 * Returns whether the default value of this parameter is a constant
		 * <p>Returns whether the default value of this parameter is a constant.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the default value is constant, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionparameter.isdefaultvalueconstant.php
		 * @since PHP 5 >= 5.4.6, PHP 7
		 */
		public function isDefaultValueConstant(): bool {}

		/**
		 * Checks if optional
		 * <p>Checks if the parameter is optional.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the parameter is optional, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionparameter.isoptional.php
		 * @since PHP 5 >= 5.0.3, PHP 7
		 */
		public function isOptional(): bool {}

		/**
		 * Checks if passed by reference
		 * <p>Checks if the parameter is passed in by reference.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the parameter is passed in by reference, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectionparameter.ispassedbyreference.php
		 * @since PHP 5, PHP 7
		 */
		public function isPassedByReference(): bool {}

		/**
		 * Checks if the parameter is variadic
		 * <p>Checks if the parameter was declared as a variadic parameter.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the parameter is variadic, otherwise <b><code>FALSE</code></b>.</p>
		 * @link http://php.net/manual/en/reflectionparameter.isvariadic.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public function isVariadic(): bool {}
	}

	/**
	 * <p>The <b>ReflectionProperty</b> class reports information about class properties.</p>
	 * @link http://php.net/manual/en/class.reflectionproperty.php
	 * @since PHP 5, PHP 7
	 */
	class ReflectionProperty implements \Reflector {

		/**
		 * @var int <p>Indicates static properties.</p>
		 * @link http://php.net/manual/en/class.reflectionproperty.php
		 */
		const IS_STATIC = 1;

		/**
		 * @var int <p>Indicates public properties.</p>
		 * @link http://php.net/manual/en/class.reflectionproperty.php
		 */
		const IS_PUBLIC = 256;

		/**
		 * @var int <p>Indicates protected properties.</p>
		 * @link http://php.net/manual/en/class.reflectionproperty.php
		 */
		const IS_PROTECTED = 512;

		/**
		 * @var int <p>Indicates private properties.</p>
		 * @link http://php.net/manual/en/class.reflectionproperty.php
		 */
		const IS_PRIVATE = 1024;

		/**
		 * @var mixed <p>Name of the property. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionproperty.php#reflectionproperty.props.name
		 */
		public $name;

		/**
		 * @var mixed <p>Name of the class where the property is defined. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionproperty.php#reflectionproperty.props.class
		 */
		public $class;

		/**
		 * Clone
		 * <p>Clones.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link http://php.net/manual/en/reflectionproperty.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * Construct a ReflectionProperty object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $class <p>The class name, that contains the property.</p>
		 * @param string $name <p>The name of the property being reflected.</p>
		 * @return self <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionproperty.construct.php
		 * @since PHP 5, PHP 7
		 */
		public function __construct($class, string $name) {}

		/**
		 * To string
		 * <p>To string.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionproperty.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Export
		 * <p>Exports a reflection.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $class
		 * @param string $name <p>The property name.</p>
		 * @param bool $return <p>Setting to <b><code>TRUE</code></b> will return the export, as opposed to emitting it. Setting to <b><code>FALSE</code></b> (the default) will do the opposite.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionproperty.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export($class, string $name, bool $return = NULL): string {}

		/**
		 * Gets declaring class
		 * <p>Gets the declaring class.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ReflectionClass <p>A ReflectionClass object.</p>
		 * @link http://php.net/manual/en/reflectionproperty.getdeclaringclass.php
		 * @since PHP 5, PHP 7
		 */
		public function getDeclaringClass(): \ReflectionClass {}

		/**
		 * Returns the default value declared for a property
		 * <p>Gets the implicit or explicitly declared default value for a property.</p>
		 * @return mixed <p>The default value if the property has any default value (including <b><code>NULL</code></b>). If there is no default value, then <b><code>NULL</code></b> is returned. It is not possible to differentiate between a <b><code>NULL</code></b> default value and an unitialized typed property. Use <b>ReflectionClass::hasDefaultValue()</b> to detect the difference.</p>
		 * @link http://php.net/manual/en/reflectionproperty.getdefaultvalue.php
		 * @since PHP 8
		 */
		public function getDefaultValue() {}

		/**
		 * Gets the property doc comment
		 * <p>Gets the doc comment for a property.</p>
		 * @return string <p>The property doc comment.</p>
		 * @link http://php.net/manual/en/reflectionproperty.getdoccomment.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getDocComment(): string {}

		/**
		 * Gets the property modifiers
		 * <p>Gets the modifiers.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>A numeric representation of the modifiers.</p>
		 * @link http://php.net/manual/en/reflectionproperty.getmodifiers.php
		 * @since PHP 5, PHP 7
		 */
		public function getModifiers(): int {}

		/**
		 * Gets property name
		 * <p>Gets the properties name.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The name of the reflected property.</p>
		 * @link http://php.net/manual/en/reflectionproperty.getname.php
		 * @since PHP 5, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets a property's type
		 * <p>Gets the associated type of a property.</p>
		 * @return ReflectionType|null <p>Returns a ReflectionType if the property has a type, and <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionproperty.gettype.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function getType() {}

		/**
		 * Gets value
		 * <p>Gets the property's value.</p>
		 * @param object $object <p>If the property is non-static an object must be provided to fetch the property from. If you want to fetch the default property without providing an object use <code>ReflectionClass::getDefaultProperties()</code> instead.</p>
		 * @return mixed <p>The current value of the property.</p>
		 * @link http://php.net/manual/en/reflectionproperty.getvalue.php
		 * @since PHP 5, PHP 7
		 */
		public function getValue(object $object = NULL) {}

		/**
		 * Checks if property has a default value declared
		 * <p>Checks whether the property was declared with a default value, including an implicit <b><code>NULL</code></b> default value. Only returns <b><code>FALSE</code></b> for typed properties without default value (or dynamic properties).</p>
		 * @return bool <p>If the property has any default value (including <b><code>NULL</code></b>) <b><code>TRUE</code></b> is returned; if the property is typed without a default value declared or is a dynamic property, <b><code>FALSE</code></b> is returned.</p>
		 * @link http://php.net/manual/en/reflectionproperty.hasdefaultvalue.php
		 * @since PHP 8
		 */
		public function hasDefaultValue(): bool {}

		/**
		 * Checks if property has a type
		 * <p>Checks if the property has a type associated with it.</p>
		 * @return bool <p><b><code>TRUE</code></b> if a type is specified, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionproperty.hastype.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function hasType(): bool {}

		/**
		 * Checks if property is a default property
		 * <p>Checks whether the property was declared at compile-time, or whether the property was dynamically declared at run-time.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the property was declared at compile-time, or <b><code>FALSE</code></b> if it was created at run-time.</p>
		 * @link http://php.net/manual/en/reflectionproperty.isdefault.php
		 * @since PHP 5, PHP 7
		 */
		public function isDefault(): bool {}

		/**
		 * Checks whether a property is initialized
		 * <p>Checks whether a property is initialized.</p>
		 * @param object $object <p>If the property is non-static an object must be provided to fetch the property from.</p>
		 * @return bool <p>Returns <b><code>FALSE</code></b> for typed properties prior to initialization, and for properties that have been explicitly <code>unset()</code>. For all other properties <b><code>TRUE</code></b> will be returned.</p>
		 * @link http://php.net/manual/en/reflectionproperty.isinitialized.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function isInitialized(object $object = NULL): bool {}

		/**
		 * Checks if property is private
		 * <p>Checks whether the property is private.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the property is private, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionproperty.isprivate.php
		 * @since PHP 5, PHP 7
		 */
		public function isPrivate(): bool {}

		/**
		 * Checks if property is protected
		 * <p>Checks whether the property is protected.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the property is protected, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionproperty.isprotected.php
		 * @since PHP 5, PHP 7
		 */
		public function isProtected(): bool {}

		/**
		 * Checks if property is public
		 * <p>Checks whether the property is public.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the property is public, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionproperty.ispublic.php
		 * @since PHP 5, PHP 7
		 */
		public function isPublic(): bool {}

		/**
		 * Checks if property is static
		 * <p>Checks whether the property is static.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the property is static, <b><code>FALSE</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionproperty.isstatic.php
		 * @since PHP 5, PHP 7
		 */
		public function isStatic(): bool {}

		/**
		 * Set property accessibility
		 * <p>Sets a property to be accessible. For example, it may allow protected and private properties to be accessed.</p>
		 * @param bool $accessible <p><b><code>TRUE</code></b> to allow accessibility, or <b><code>FALSE</code></b>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionproperty.setaccessible.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setAccessible(bool $accessible): void {}

		/**
		 * Set property value
		 * <p>Sets (changes) the property's value.</p>
		 * @param object $object <p>If the property is non-static an object must be provided to change the property on. If the property is static this parameter is left out and only <code>value</code> needs to be provided.</p>
		 * @param mixed $value <p>The new value.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/reflectionproperty.setvalue.php
		 * @since PHP 5, PHP 7
		 */
		public function setValue(object $object, $value): void {}
	}

	/**
	 * <p>The <b>ReflectionReference</b> class provides information about a reference.</p>
	 * @link http://php.net/manual/en/class.reflectionreference.php
	 * @since PHP 7 >= 7.4.0
	 */
	final class ReflectionReference {

		/**
		 * Create a ReflectionReference from an array element
		 * <p>Creates a ReflectionReference from an array element.</p>
		 * @param array $array <p>The <code>array</code> which contains the potential reference.</p>
		 * @param mixed $key <p>The key; either an <code>int</code> or a <code>string</code>.</p>
		 * @return ReflectionReference <p>Returns a <b>ReflectionReference </b> instance if <code>$array[$key]</code> is a reference, or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/reflectionreference.fromarrayelement.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function fromArrayElement(array $array, $key): \ReflectionReference {}

		/**
		 * Get unique ID of a reference
		 * <p>Returns an ID which is unique for the reference for the lifetime of that reference. This ID can be used to compare references for equality, or to maintain a map of known references.</p>
		 * @return mixed <p>Returns an <code>int</code> or <code>string</code> of unspecified format.</p>
		 * @link http://php.net/manual/en/reflectionreference.getid.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function getId() {}
	}

	/**
	 * <p>The <b>ReflectionType</b> class reports information about a function's return type.</p>
	 * @link http://php.net/manual/en/class.reflectiontype.php
	 * @since PHP 7
	 */
	class ReflectionType {

		/**
		 * To string
		 * <p>Gets the parameter type name.</p>
		 * @return string <p>Returns the type of the parameter.</p>
		 * @link http://php.net/manual/en/reflectiontype.tostring.php
		 * @since PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Checks if null is allowed
		 * <p>Checks whether the parameter allows <b><code>NULL</code></b>.</p>
		 * @return bool <p><b><code>TRUE</code></b> if <b><code>NULL</code></b> is allowed, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectiontype.allowsnull.php
		 * @since PHP 7
		 */
		public function allowsNull(): bool {}

		/**
		 * Checks if it is a built-in type
		 * <p>Checks if the type is a built-in type in PHP.</p>
		 * @return bool <p><b><code>TRUE</code></b> if it's a built-in type, otherwise <b><code>FALSE</code></b></p>
		 * @link http://php.net/manual/en/reflectiontype.isbuiltin.php
		 * @since PHP 7
		 */
		public function isBuiltin(): bool {}
	}

	/**
	 * @link http://php.net/manual/en/class.reflectionzendextension.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class ReflectionZendExtension implements \Reflector {

		/**
		 * @var mixed <p>Name of the extension. Read-only, throws ReflectionException in attempt to write.</p>
		 * @link http://php.net/manual/en/class.reflectionzendextension.php#reflectionzendextension.props.name
		 */
		public $name;

		/**
		 * Clone handler
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link http://php.net/manual/en/reflectionzendextension.clone.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		final private function __clone() {}

		/**
		 * Constructor
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @return self
		 * @link http://php.net/manual/en/reflectionzendextension.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __construct(string $name) {}

		/**
		 * To string handler
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.tostring.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Export
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param bool $return
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.export.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public static function export(string $name, bool $return = NULL): string {}

		/**
		 * Gets author
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.getauthor.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getAuthor(): string {}

		/**
		 * Gets copyright
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.getcopyright.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getCopyright(): string {}

		/**
		 * Gets name
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.getname.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Gets URL
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.geturl.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getURL(): string {}

		/**
		 * Gets version
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflectionzendextension.getversion.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getVersion(): string {}
	}

	/**
	 * <p><b>Reflector</b> is an interface implemented by all exportable Reflection classes.</p>
	 * @link http://php.net/manual/en/class.reflector.php
	 * @since PHP 5, PHP 7
	 */
	interface Reflector {

		/**
		 * To string
		 * <p>To string.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflector.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string;

		/**
		 * Exports
		 * <p>Exports.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link http://php.net/manual/en/reflector.export.php
		 * @since PHP 5, PHP 7
		 */
		public static function export(): string;
	}

}
