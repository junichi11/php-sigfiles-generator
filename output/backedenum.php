<?php



namespace {

	/**
	 * <p>The <b>BackedEnum</b> interface is automatically applied to backed enumerations by the engine. It may not be implemented by user-defined classes. Enumerations may not override its methods, as default implementations are provided by the engine. It is available only for type checks.</p>
	 * @link https://php.net/manual/en/class.backedenum.php
	 * @since PHP 8 >= 8.1.0
	 */
	interface BackedEnum extends UnitEnum {

		/**
		 * Generates a list of cases on an enum
		 * <p>This method will return a packed array of all cases in an enumeration, in lexical order.</p>
		 * @return array <p>An array of all defined cases of this enumeration, in lexical order.</p>
		 * @link https://php.net/manual/en/unitenum.cases.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function cases(): array;

		/**
		 * Maps a scalar to an enum instance
		 * <p>The <b>from()</b> method translates a <code>string</code> or <code>int</code> into the corresponding Enum case, if any. If there is no matching case defined, it will throw a <code>ValueError</code>.</p>
		 * @param int|string $value <p>The scalar value to map to an enum case.</p>
		 * @return static <p>A case instance of this enumeration.</p>
		 * @link https://php.net/manual/en/backedenum.from.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function from(int|string $value): static;

		/**
		 * Maps a scalar to an enum instance or null
		 * <p>The <b>tryFrom()</b> method translates a <code>string</code> or <code>int</code> into the corresponding Enum case, if any. If there is no matching case defined, it will return null.</p>
		 * @param int|string $value <p>The scalar value to map to an enum case.</p>
		 * @return ?static <p>A case instance of this enumeration, or <code>null</code> if not found.</p>
		 * @link https://php.net/manual/en/backedenum.tryfrom.php
		 * @since PHP 8 >= 8.1.0
		 */
		public static function tryFrom(int|string $value): ?static;
	}

}
