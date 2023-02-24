<?php



namespace {

	/**
	 * <p>This attribute is used to mark a parameter that is sensitive and should have its value redacted if present in a stack trace.</p>
	 * @link https://php.net/manual/en/class.sensitiveparameter.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class SensitiveParameter {

		/**
		 * Construct a new SensitiveParameter attribute instance
		 * <p>Constructs a new <code>SensitiveParameter</code> instance.</p>
		 * @return self
		 * @link https://php.net/manual/en/sensitiveparameter.construct.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __construct() {}
	}

}
