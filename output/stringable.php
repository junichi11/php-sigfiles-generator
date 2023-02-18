<?php



namespace {

	/**
	 * <p>The <b>Stringable</b> interface denotes a class as having a __toString() method. Unlike most interfaces, <b>Stringable</b> is implicitly present on any class that has the magic __toString() method defined, although it can and should be declared explicitly.</p>
	 * <p>Its primary value is to allow functions to type check against the union type <code>string|Stringable</code> to accept either a string primitive or an object that can be cast to a string.</p>
	 * @link https://php.net/manual/en/class.stringable.php
	 * @since PHP 8
	 */
	interface Stringable {

		/**
		 * Gets a string representation of the object
		 * @return string <p>Returns the <code>string</code> representation of the object.</p>
		 * @link https://php.net/manual/en/stringable.tostring.php
		 * @since PHP 8
		 */
		public function __toString(): string;
	}

}
