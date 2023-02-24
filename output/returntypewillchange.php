<?php



namespace {

	/**
	 * <p>Most non-final internal methods now require overriding methods to declare a compatible return type, otherwise a deprecated notice is emitted during inheritance validation. In case the return type cannot be declared for an overriding method due to PHP cross-version compatibility concerns, a <code>#[\ReturnTypeWillChange]</code> attribute can be added to silence the deprecation notice.</p>
	 * @link https://php.net/manual/en/class.returntypewillchange.php
	 * @since PHP 8 >= 8.1.0
	 */
	final class ReturnTypeWillChange {

		/**
		 * Construct a new ReturnTypeWillChange attribute instance
		 * <p>Constructs a new <code>ReturnTypeWillChange</code> instance.</p>
		 * @return self
		 * @link https://php.net/manual/en/returntypewillchange.construct.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function __construct() {}
	}

}
