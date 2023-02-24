<?php



namespace {

	/**
	 * <p>Attributes offer the ability to add structured, machine-readable metadata information on declarations in code: Classes, methods, functions, parameters, properties and class constants can be the target of an attribute. The metadata defined by attributes can then be inspected at runtime using the Reflection APIs. Attributes could therefore be thought of as a configuration language embedded directly into code.</p>
	 * @link https://php.net/manual/en/class.attribute.php
	 * @since PHP 8
	 */
	final class Attribute {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_CLASS = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_FUNCTION = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_METHOD = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_PROPERTY = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_CLASS_CONSTANT = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_PARAMETER = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const TARGET_ALL = 63;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php
		 */
		const IS_REPEATABLE = 64;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.attribute.php#attribute.props.flags
		 */
		public $flags;

		/**
		 * Construct a new Attribute instance
		 * <p>Constructs a new <code>Attribute</code> instance.</p>
		 * @param int $flags
		 * @return self
		 * @link https://php.net/manual/en/attribute.construct.php
		 * @since PHP 8
		 */
		public function __construct(int $flags = Attribute::TARGET_ALL) {}
	}

}
