<?php



namespace {

	/**
	 * <p>The SplBool class is used to enforce strong typing of the bool type.</p>
	 * @link http://php.net/manual/en/class.splbool.php
	 * @since PECL spl_types >= 0.1.0
	 */
	class SplBool extends \SplEnum {

		/**
		 * @var bool
		 * @link http://php.net/manual/en/class.splbool.php
		 */
		const __default = FALSE;

		/**
		 * @var bool
		 * @link http://php.net/manual/en/class.splbool.php
		 */
		const false = FALSE;

		/**
		 * @var bool
		 * @link http://php.net/manual/en/class.splbool.php
		 */
		const true = TRUE;

		/**
		 * Returns all consts (possible values) as an array
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $include_default <p>Whether to include <code>__default</code> property.</p>
		 * @return array
		 * @link http://php.net/manual/en/splenum.getconstlist.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function getConstList(bool $include_default = FALSE): array {}
	}

	/**
	 * <p>SplEnum gives the ability to emulate and create enumeration objects natively in PHP.</p>
	 * @link http://php.net/manual/en/class.splenum.php
	 * @since PECL spl_types >= 0.1.0
	 */
	class SplEnum extends \SplType {

		/**
		 * @var NULL
		 * @link http://php.net/manual/en/class.splenum.php
		 */
		const __default = NULL;

		/**
		 * Creates a new value of some type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $initial_value <p>Type and default value depends on the extension class.</p>
		 * @param bool $strict <p>Whether to set the object's strictness.</p>
		 * @return self
		 * @link http://php.net/manual/en/spltype.construct.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function __construct($initial_value = NULL, bool $strict = NULL) {}

		/**
		 * Returns all consts (possible values) as an array
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $include_default <p>Whether to include <code>__default</code> property.</p>
		 * @return array
		 * @link http://php.net/manual/en/splenum.getconstlist.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function getConstList(bool $include_default = FALSE): array {}
	}

	/**
	 * <p>The SplFloat class is used to enforce strong typing of the float type.</p>
	 * @link http://php.net/manual/en/class.splfloat.php
	 * @since PECL spl_types >= 0.1.0
	 */
	class SplFloat extends \SplType {

		/**
		 * @var float
		 * @link http://php.net/manual/en/class.splfloat.php
		 */
		const __default = 0;

		/**
		 * Creates a new value of some type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $initial_value <p>Type and default value depends on the extension class.</p>
		 * @param bool $strict <p>Whether to set the object's strictness.</p>
		 * @return self
		 * @link http://php.net/manual/en/spltype.construct.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function __construct($initial_value = NULL, bool $strict = NULL) {}
	}

	/**
	 * <p>The SplInt class is used to enforce strong typing of the integer type.</p>
	 * @link http://php.net/manual/en/class.splint.php
	 * @since PECL spl_types >= 0.1.0
	 */
	class SplInt extends \SplType {

		/**
		 * @var int
		 * @link http://php.net/manual/en/class.splint.php
		 */
		const __default = 0;

		/**
		 * Creates a new value of some type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $initial_value <p>Type and default value depends on the extension class.</p>
		 * @param bool $strict <p>Whether to set the object's strictness.</p>
		 * @return self
		 * @link http://php.net/manual/en/spltype.construct.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function __construct($initial_value = NULL, bool $strict = NULL) {}
	}

	/**
	 * <p>The SplString class is used to enforce strong typing of the string type.</p>
	 * @link http://php.net/manual/en/class.splstring.php
	 * @since PECL spl_types >= 0.1.0
	 */
	class SplString extends \SplType {

		/**
		 * @var string
		 * @link http://php.net/manual/en/class.splstring.php
		 */
		const __default = '';

		/**
		 * Creates a new value of some type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $initial_value <p>Type and default value depends on the extension class.</p>
		 * @param bool $strict <p>Whether to set the object's strictness.</p>
		 * @return self
		 * @link http://php.net/manual/en/spltype.construct.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function __construct($initial_value = NULL, bool $strict = NULL) {}
	}

	/**
	 * <p>Parent class for all SPL types.</p>
	 * @link http://php.net/manual/en/class.spltype.php
	 * @since PECL spl_types >= 0.1.0
	 */
	abstract class SplType {

		/**
		 * @var NULL
		 * @link http://php.net/manual/en/class.spltype.php
		 */
		const __default = NULL;

		/**
		 * Creates a new value of some type
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $initial_value <p>Type and default value depends on the extension class.</p>
		 * @param bool $strict <p>Whether to set the object's strictness.</p>
		 * @return self
		 * @link http://php.net/manual/en/spltype.construct.php
		 * @since PECL spl_types >= 0.1.0
		 */
		public function __construct($initial_value = NULL, bool $strict = NULL) {}
	}

}
