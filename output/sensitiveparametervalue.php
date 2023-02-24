<?php



namespace {

	/**
	 * <p>The <b>SensitiveParameterValue</b> class allows wrapping sensitive values to protect them against accidental exposure.</p>
	 * <p>Values of parameters having the <code>SensitiveParameter</code> attribute will automatically be wrapped inside of a <b>SensitiveParameterValue</b> object within stack traces.</p>
	 * @link https://php.net/manual/en/class.sensitiveparametervalue.php
	 * @since PHP 8 >= 8.2.0
	 */
	final class SensitiveParameterValue {

		/**
		 * @var mixed <p>The sensitive value to be protected against accidental exposure.</p>
		 * @link https://php.net/manual/en/class.sensitiveparametervalue.php#sensitiveparametervalue.props.value
		 */
		private $value;

		/**
		 * Constructs a new SensitiveParameterValue object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $value <p>An arbitrary value that should be stored inside the <code>SensitiveParameterValue</code> object.</p>
		 * @return self
		 * @link https://php.net/manual/en/sensitiveparametervalue.construct.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __construct(mixed $value) {}

		/**
		 * Protects the sensitive value against accidental exposure
		 * <p>Returns an empty <code>array</code> to protect the sensitive value against accidental exposure when using <code>var_dump()</code>.</p>
		 * @return array <p>An empty <code>array</code>.</p>
		 * @link https://php.net/manual/en/sensitiveparametervalue.debuginfo.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function __debugInfo(): array {}

		/**
		 * Returns the sensitive value
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>The sensitive value.</p>
		 * @link https://php.net/manual/en/sensitiveparametervalue.getvalue.php
		 * @since PHP 8 >= 8.2.0
		 */
		public function getValue(): mixed {}
	}

}
