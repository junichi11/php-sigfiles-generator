<?php



namespace {

	/**
	 * <p>The <b>UnitEnum</b> interface is automatically applied to all enumerations by the engine. It may not be implemented by user-defined classes. Enumerations may not override its methods, as default implementations are provided by the engine. It is available only for type checks.</p>
	 * @link https://php.net/manual/en/class.unitenum.php
	 * @since PHP 8 >= 8.1.0
	 */
	interface UnitEnum {

		/**
		 * Generates a list of cases on an enum
		 * <p>This method will return a packed array of all cases in an enumeration, in lexical order.</p>
		 * @return array <p>An array of all defined cases of this enumeration, in lexical order.</p>
		 * @link https://php.net/manual/en/unitenum.cases.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function cases(): array;
	}

}
