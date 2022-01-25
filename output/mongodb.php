<?php



namespace {

	/**
	 * Current stability (alpha/beta/stable)
	 */
	define('MONGODB_STABILITY', null);

	/**
	 * x.y.z style version number of the extension
	 */
	define('MONGODB_VERSION', null);

}

namespace MongoDB\BSON {

	/**
	 * <p>BSON type for binary data (i.e. array of bytes). Binary values also have a subtype, which is used to indicate what kind of data is in the byte array. Subtypes from zero to 127 are predefined or reserved. Subtypes from 128-255 are user-defined.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
	 * @since mongodb >=1.0.0
	 */
	final class Binary implements \MongoDB\BSON\BinaryInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * @var int <p>Generic binary data.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_GENERIC = 0;

		/**
		 * @var int <p>Function.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_FUNCTION = 1;

		/**
		 * @var int <p>Generic binary data (deprecated in favor of <b><code>MongoDB\BSON\Binary::TYPE_GENERIC</code></b>).</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_OLD_BINARY = 2;

		/**
		 * @var int <p>Universally unique identifier (deprecated in favor of <b><code>MongoDB\BSON\Binary::TYPE_UUID</code></b>). When using this type, the Binary's data should be 16 bytes in length.</p> <p>Historically, other drivers encoded values with this type based on their language conventions (e.g. varying endianness), which makes it non-portable. The PHP driver applies no special handling for encoding or decoding data with this type.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_OLD_UUID = 3;

		/**
		 * @var int <p>Universally unique identifier. When using this type, the Binary's data should be 16 bytes in length and encoded according to RFC 4122.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_UUID = 4;

		/**
		 * @var int <p>MD5 hash. When using this type, the Binary's data should be 16 bytes in length.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_MD5 = 5;

		/**
		 * @var int <p>Encrypted value. This subtype is used for client-side encryption.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_ENCRYPTED = 6;

		/**
		 * @var int <p>Column data. This subtype is used for time-series collections.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_COLUMN = 7;

		/**
		 * @var int <p>User-defined type. While types between 0 and 127 are predefined or reserved, types between 128 and 255 are user-defined and may be used for anything.</p>
		 * @link https://php.net/manual/en/class.mongodb-bson-binary.php
		 */
		const TYPE_USER_DEFINED = 128;

		/**
		 * Construct a new Binary
		 * @param string $data <p>Binary data.</p>
		 * @param int $type <p>Unsigned 8-bit integer denoting the data's type.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-binary.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $data, int $type) {}

		/**
		 * Returns the Binary's data
		 * <p>This method is an alias of: <code>MongoDB\BSON\Binary::getData()</code>.</p>
		 * @return string <p>Returns the Binary's data.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binary.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Binary's data
		 * @return string <p>Returns the Binary's data.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binary.getdata.php
		 * @since mongodb >=1.0.0
		 */
		final public function getData(): string {}

		/**
		 * Returns the Binary's type
		 * @return int <p>Returns the Binary's type.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binary.gettype.php
		 * @since mongodb >=1.0.0
		 */
		final public function getType(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Binary</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-binary.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Binary
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Binary</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binary.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Binary
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Binary</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Binary</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binary.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\Binary</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-binaryinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface BinaryInterface {

		/**
		 * Returns the BinaryInterface's data
		 * <p>This method is an alias of: <code>MongoDB\BSON\BinaryInterface::getData()</code>.</p>
		 * @return string <p>Returns the BinaryInterface's data.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binaryinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the BinaryInterface's data
		 * @return string <p>Returns the BinaryInterface's data.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binaryinterface.getdata.php
		 * @since mongodb >=1.3.0
		 */
		public function getData(): string;

		/**
		 * Returns the BinaryInterface's type
		 * @return int <p>Returns the BinaryInterface's type.</p>
		 * @link https://php.net/manual/en/mongodb-bson-binaryinterface.gettype.php
		 * @since mongodb >=1.3.0
		 */
		public function getType(): int;
	}

	/**
	 * <p>BSON type for the "DBPointer" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON DBPointer type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-dbpointer.php
	 * @since mongodb >=1.4.0
	 */
	final class DBPointer implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new DBPointer (unused)
		 * <p><code>MongoDB\BSON\DBPointer</code> objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-dbpointer.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns an empty string
		 * @return string <p>Returns an empty string.</p>
		 * @link https://php.net/manual/en/mongodb-bson-dbpointer.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\DBPointer</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-dbpointer.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a DBPointer
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\DBPointer</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-dbpointer.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a DBPointer
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\DBPointer</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\DBPointer</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-dbpointer.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>BSON type for the Decimal128 floating-point format, which supports numbers with up to 34 decimal digits (i.e. significant digits) and an exponent range of &minus;6143 to +6144.</p>
	 * <p>Unlike the double BSON type (i.e. <code>float</code> in PHP), which only stores an approximation of the decimal values, the decimal data type stores the exact value. For example, <code>MongoDB\BSON\Decimal128('9.99')</code> has a precise value of 9.99 where as a double 9.99 would have an approximate value of 9.9900000000000002131628&hellip;.</p>
	 * <p><b>Note</b>:  <b>MongoDB\BSON\Decimal128</b> is only compatible with MongoDB 3.4+. Attempting to use the BSON type with an earlier version of MongoDB will result in an error. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-decimal128.php
	 * @since mongodb >=1.2.0
	 */
	final class Decimal128 implements \MongoDB\BSON\Decimal128Interface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Decimal128
		 * <p><b>Note</b>:  <code>MongoDB\BSON\Decimal128</code> is only compatible with MongoDB 3.4+. Attempting to use the BSON type with an earlier version of MongoDB will result in an error. </p>
		 * @param string $value <p>A decimal string.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-decimal128.construct.php
		 * @since mongodb >=1.2.0
		 */
		final public function __construct(string $value = null) {}

		/**
		 * Returns the string representation of this Decimal128
		 * @return string <p>Returns the string representation of this Decimal128.</p>
		 * @link https://php.net/manual/en/mongodb-bson-decimal128.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Decimal128</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-decimal128.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Decimal128
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Decimal128</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-decimal128.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Decimal128
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Decimal128</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Decimal128</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-decimal128.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\Decimal128</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-decimal128interface.php
	 * @since mongodb >=1.3.0
	 */
	interface Decimal128Interface {

		/**
		 * Returns the string representation of this Decimal128Interface
		 * @return string <p>Returns the string representation of this Decimal128Interface.</p>
		 * @link https://php.net/manual/en/mongodb-bson-decimal128interface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;
	}

	/**
	 * <p>BSON type for a 64-bit integer. This class cannot be instantiated and is only created during BSON decoding when a 64-bit integer cannot be represented as a PHP integer on a 32-bit platform. Versions of the driver before 1.5.0 would throw an exception when attempting to decode a 64-bit integer on a 32-bit platform.</p>
	 * <p>During BSON encoding, objects of this class will convert back to a 64-bit integer type. This allows 64-bit integers to be roundtripped through a 32-bit PHP environment without any loss of precision. The __toString() method allows the 64-bit integer value to be accessed as a string.</p>
	 * <p><b>Note</b>:  This class exists purely for 32-bit platforms. Applications on 64-bit platforms (i.e. <b><code>PHP_INT_SIZE</code></b> is 8) should never encounter this class during normal operation. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-int64.php
	 * @since mongodb >=1.5.0
	 */
	final class Int64 implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Int64 (unused)
		 * <p><code>MongoDB\BSON\Int64</code> objects are created through conversion from a 64-bit integer BSON type on a 32-bit platform and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-int64.construct.php
		 * @since mongodb >=1.5.0
		 */
		final private function __construct() {}

		/**
		 * Returns the string representation of this Int64
		 * @return string <p>Returns the string representation of this Int64.</p>
		 * @link https://php.net/manual/en/mongodb-bson-int64.tostring.php
		 * @since mongodb >=1.5.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Int64</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> function, which uses the canonical extended JSON format. This differs from other BSON classes, which use the driver-specific legacy extended JSON format (<code>MongoDB\BSON\toJSON()</code>), in order to ensure that the 64-bit integer value is correctly represented on 32-bit platforms. </p>
		 * @link https://php.net/manual/en/mongodb-bson-int64.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.5.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize an Int64
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Int64</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-int64.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.5.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize an Int64
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Int64</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Int64</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-int64.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.5.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>BSON type for Javascript code. An optional scope document may be specified that maps identifiers to values and defines the scope in which the code should be evaluated by the server.</p>
	 * <p><b>Note</b>:  This BSON type is mainly used when executing database commands that take a Javascript function as a parameter, such as mapReduce. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-javascript.php
	 * @since mongodb >=1.0.0
	 */
	final class Javascript implements \MongoDB\BSON\JavascriptInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Javascript
		 * @param string $code <p>Javascript code.</p>
		 * @param array|object $scope
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-javascript.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $code, array|object $scope = null) {}

		/**
		 * Returns the Javascript's code
		 * <p>This method is an alias of: <code>MongoDB\BSON\Javascript::getCode()</code>.</p>
		 * @return string <p>Returns the Javascript's code.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascript.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Javascript's code
		 * @return string <p>Returns the Javascript's code.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascript.getcode.php
		 * @since mongodb >=1.2.0
		 */
		final public function getCode(): string {}

		/**
		 * Returns the Javascript's scope document
		 * @return ?object <p>Returns the Javascript's scope document, or <b><code>null</code></b> if the is no scope.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascript.getscope.php
		 * @since mongodb >=1.2.0
		 */
		final public function getScope(): ?object {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Javascript</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-javascript.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Javascript
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Javascript</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascript.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Javascript
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Javascript</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Javascript</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascript.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\Javascript</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-javascriptinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface JavascriptInterface {

		/**
		 * Returns the JavascriptInterface's code
		 * <p>This method is an alias of: <code>MongoDB\BSON\JavascriptInterface::getCode()</code>.</p>
		 * @return string <p>Returns the JavascriptInterface's code.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascriptinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the JavascriptInterface's code
		 * @return string <p>Returns the JavascriptInterface's code.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascriptinterface.getcode.php
		 * @since mongodb >=1.3.0
		 */
		public function getCode(): string;

		/**
		 * Returns the JavascriptInterface's scope document
		 * @return ?object <p>Returns the JavascriptInterface's scope document.</p>
		 * @link https://php.net/manual/en/mongodb-bson-javascriptinterface.getscope.php
		 * @since mongodb >=1.3.0
		 */
		public function getScope(): ?object;
	}

	/**
	 * <p>Special BSON type which compares higher than all other possible BSON element values.</p>
	 * <p><b>Note</b>:  This is an internal MongoDB type used for indexing and sharding. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-maxkey.php
	 * @since mongodb >=1.0.0
	 */
	final class MaxKey implements \MongoDB\BSON\MaxKeyInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new MaxKey
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-maxkey.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\MaxKey</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-maxkey.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a MaxKey
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\MaxKey</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-maxkey.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a MaxKey
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\MaxKey</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\MaxKey</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-maxkey.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\MaxKey</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-maxkeyinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface MaxKeyInterface {
	}

	/**
	 * <p>Special BSON type which compares lower than all other possible BSON element values.</p>
	 * <p><b>Note</b>:  This is an internal MongoDB type used for indexing and sharding. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-minkey.php
	 * @since mongodb >=1.0.0
	 */
	final class MinKey implements \MongoDB\BSON\MinKeyInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new MinKey
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-minkey.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\MinKey</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-minkey.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a MinKey
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\MinKey</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-minkey.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a MinKey
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\MinKey</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\MinKey</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-minkey.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\MinKey</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-minkeyinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface MinKeyInterface {
	}

	/**
	 * <p>BSON type for an ObjectId. The value consists of 12 bytes, where the first four bytes are a timestamp that reflect the ObjectId's creation. Specifically, the value consists of:</p>
	 * <p>In MongoDB, each document stored in a collection requires a unique <code>_id</code> field that acts as a primary key. If an inserted document omits the <code>_id</code> field, the driver automatically generates an ObjectId for the <code>_id</code> field.</p>
	 * <p>Using ObjectIds for the <code>_id</code> field provides the following additional benefits:</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-objectid.php
	 * @since mongodb >=1.0.0
	 */
	final class ObjectId implements \MongoDB\BSON\ObjectIdInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new ObjectId
		 * @param string $id <p>A 24-character hexadecimal string. If not provided, the driver will generate an ObjectId.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-objectid.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $id = null) {}

		/**
		 * Returns the hexidecimal representation of this ObjectId
		 * @return string <p>Returns the hexidecimal representation of this ObjectId.</p>
		 * @link https://php.net/manual/en/mongodb-bson-objectid.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the timestamp component of this ObjectId
		 * <p>The timestamp component of an ObjectId is its most significant 32 bits, which denotes the number of seconds since the Unix epoch. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>Note</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <code>"%u"</code> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the timestamp component of this ObjectId.</p>
		 * @link https://php.net/manual/en/mongodb-bson-objectid.gettimestamp.php
		 * @since mongodb >=1.2.0
		 */
		final public function getTimestamp(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\ObjectId</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-objectid.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize an ObjectId
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\ObjectId</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-objectid.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize an ObjectId
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\ObjectId</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\ObjectId</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-objectid.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\ObjectId</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-objectidinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface ObjectIdInterface {

		/**
		 * Returns the hexidecimal representation of this ObjectIdInterface
		 * @return string <p>Returns the hexidecimal representation of this ObjectIdInterface.</p>
		 * @link https://php.net/manual/en/mongodb-bson-objectidinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the timestamp component of this ObjectIdInterface
		 * @return int <p>Returns the timestamp component of this ObjectIdInterface.</p>
		 * @link https://php.net/manual/en/mongodb-bson-objectidinterface.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		public function getTimestamp(): int;
	}

	/**
	 * <p>Classes may implement this interface to take advantage of automatic ODM (object document mapping) behavior in the driver. During serialization, the driver will inject a __pclass property containing the PHP class name into the data returned by <code>MongoDB\BSON\Serializable::bsonSerialize()</code>. During unserialization, the same __pclass property will then be used to infer the PHP class (independent of any type map configuration) to be constructed before <code>MongoDB\BSON\Unserializable::bsonUnserialize()</code> is invoked. See Persisting Data for additional information.</p>
	 * <p><b>Note</b>:  Even if <code>MongoDB\BSON\Serializable::bsonSerialize()</code> would return a sequential array, injection of the __pclass property will cause the object to be serialized as a BSON document. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-persistable.php
	 * @since mongodb >=1.0.0
	 */
	interface Persistable {

		/**
		 * Provides an array or document to serialize as BSON
		 * <p>Called during serialization of the object to BSON. The method must return an <code>array</code> or <b>stdClass</b>.</p><p>Root documents (e.g. a <code>MongoDB\BSON\Serializable</code> passed to <code>MongoDB\BSON\fromPHP()</code>) will always be serialized as a BSON document. For field values, associative arrays and <b>stdClass</b> instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at <code>0</code>) will be serialized as a BSON array.</p><p>Users are encouraged to include an _id property (e.g. a <code>MongoDB\BSON\ObjectId</code> initialized in your constructor) when returning data for a BSON root document; otherwise, the driver or database will need to generate a <code>MongoDB\BSON\ObjectId</code> when inserting or upserting the document, respectively.</p>
		 * @return array|object <p>An <code>array</code> or <b>stdClass</b> to be serialized as a BSON array or document.</p>
		 * @link https://php.net/manual/en/mongodb-bson-serializable.bsonserialize.php
		 * @see MongoDB\BSON\Unserializable::bsonUnserialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonSerialize(): array|object;

		/**
		 * Constructs the object from a BSON array or document
		 * <p>Called during unserialization of the object from BSON. The properties of the BSON array or document will be passed to the method as an <code>array</code>.</p><p>Remember to check for an _id property when handling data from a BSON document.</p><p><b>Note</b>:  This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method. </p>
		 * @param array $data <p>Properties within the BSON array or document.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link https://php.net/manual/en/mongodb-bson-unserializable.bsonunserialize.php
		 * @see MongoDB\BSON\Serializable::bsonSerialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonUnserialize(array $data): void;
	}

	/**
	 * <p>BSON type for a regular expression pattern and optional flags.</p>
	 * <p><b>Note</b>:  This BSON type is mainly used when querying the database. Alternatively, the $regex query operator may be used. </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-regex.php
	 * @since mongodb >=1.0.0
	 */
	final class Regex implements \MongoDB\BSON\RegexInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Regex
		 * @param string $pattern <p>The regular expression pattern.</p> <p><b>Note</b>:  The pattern should not be wrapped with delimiter characters. </p>
		 * @param string $flags <p>The regular expression flags. Characters in this argument will be sorted alphabetically.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-regex.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $pattern, string $flags = "") {}

		/**
		 * Returns the string representation of this Regex
		 * @return string <p>Returns the string representation of this Regex.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regex.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Regex's flags
		 * @return string <p>Returns the Regex's flags.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regex.getflags.php
		 * @since mongodb >=1.0.0
		 */
		final public function getFlags(): string {}

		/**
		 * Returns the Regex's pattern
		 * @return string <p>Returns the Regex's pattern.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regex.getpattern.php
		 * @since mongodb >=1.0.0
		 */
		final public function getPattern(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Regex</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-regex.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Regex
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Regex</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regex.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Regex
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Regex</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Regex</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regex.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\Regex</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-regexinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface RegexInterface {

		/**
		 * Returns the string representation of this RegexInterface
		 * @return string <p>Returns the string representation of this RegexInterface.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regexinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the RegexInterface's flags
		 * @return string <p>Returns the RegexInterface's flags.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regexinterface.getflags.php
		 * @since mongodb >=1.3.0
		 */
		public function getFlags(): string;

		/**
		 * Returns the RegexInterface's pattern
		 * @return string <p>Returns the RegexInterface's pattern.</p>
		 * @link https://php.net/manual/en/mongodb-bson-regexinterface.getpattern.php
		 * @since mongodb >=1.3.0
		 */
		public function getPattern(): string;
	}

	/**
	 * <p>Classes that implement this interface may return data to be serialized as a BSON array or document in lieu of the object's public properties.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-serializable.php
	 * @since mongodb >=1.0.0
	 */
	interface Serializable {

		/**
		 * Provides an array or document to serialize as BSON
		 * <p>Called during serialization of the object to BSON. The method must return an <code>array</code> or <b>stdClass</b>.</p><p>Root documents (e.g. a <code>MongoDB\BSON\Serializable</code> passed to <code>MongoDB\BSON\fromPHP()</code>) will always be serialized as a BSON document. For field values, associative arrays and <b>stdClass</b> instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at <code>0</code>) will be serialized as a BSON array.</p><p>Users are encouraged to include an _id property (e.g. a <code>MongoDB\BSON\ObjectId</code> initialized in your constructor) when returning data for a BSON root document; otherwise, the driver or database will need to generate a <code>MongoDB\BSON\ObjectId</code> when inserting or upserting the document, respectively.</p>
		 * @return array|object <p>An <code>array</code> or <b>stdClass</b> to be serialized as a BSON array or document.</p>
		 * @link https://php.net/manual/en/mongodb-bson-serializable.bsonserialize.php
		 * @see MongoDB\BSON\Unserializable::bsonUnserialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonSerialize(): array|object;
	}

	/**
	 * <p>BSON type for the "Symbol" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON symbol type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-symbol.php
	 * @since mongodb >=1.4.0
	 */
	final class Symbol implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Symbol (unused)
		 * <p><code>MongoDB\BSON\Symbol</code> objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-symbol.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns the Symbol as a string
		 * @return string <p>Returns the string representation of this Symbol.</p>
		 * @link https://php.net/manual/en/mongodb-bson-symbol.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Symbol</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-symbol.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Symbol
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Symbol</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-symbol.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Symbol
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Symbol</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Symbol</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-symbol.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Represents a BSON timestamp, The value consists of a 4-byte timestamp (i.e. seconds since the epoch) and a 4-byte increment.</p>
	 * <p><b>Note</b>:  This is an internal MongoDB type used for replication and sharding. It is not intended for general date storage (<code>MongoDB\BSON\UTCDateTime</code> should be used instead). </p>
	 * @link https://php.net/manual/en/class.mongodb-bson-timestamp.php
	 * @since mongodb >=1.0.0
	 */
	final class Timestamp implements \MongoDB\BSON\TimestampInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Timestamp
		 * @param int $increment <p>32-bit integer denoting the incrementing ordinal for operations within a given second.</p>
		 * @param int $timestamp <p>32-bit integer denoting seconds since the Unix epoch.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(int $increment, int $timestamp) {}

		/**
		 * Returns the string representation of this Timestamp
		 * @return string <p>Returns the string representation of this Timestamp.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the increment component of this Timestamp
		 * <p>The increment component of a Timestamp is its least significant 32 bits, whichs denotes the incrementing ordinal for operations within a given second. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>Note</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <code>"%u"</code> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the increment component of this Timestamp.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.getincrement.php
		 * @since mongodb >=1.3.0
		 */
		final public function getIncrement(): int {}

		/**
		 * Returns the timestamp component of this Timestamp
		 * <p>The timestamp component of a Timestamp is its most significant 32 bits, which denotes the number of seconds since the Unix epoch. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>Note</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <code>"%u"</code> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the timestamp component of this Timestamp.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		final public function getTimestamp(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Timestamp</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Timestamp
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Timestamp</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Timestamp
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Timestamp</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Timestamp</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestamp.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\Timestamp</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-timestampinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface TimestampInterface {

		/**
		 * Returns the string representation of this TimestampInterface
		 * @return string <p>Returns the string representation of this TimestampInterface.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestampinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the increment component of this TimestampInterface
		 * @return int <p>Returns the increment component of this TimestampInterface.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestampinterface.getincrement.php
		 * @since mongodb >=1.3.0
		 */
		public function getIncrement(): int;

		/**
		 * Returns the timestamp component of this TimestampInterface
		 * @return int <p>Returns the timestamp component of this TimestampInterface.</p><p><b>Warning</b></p> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/en/mongodb-bson-timestampinterface.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		public function getTimestamp(): int;
	}

	/**
	 * <p>Abstract base interface that should not be implemented directly.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-type.php
	 * @since mongodb >=1.0.0
	 */
	interface Type {
	}

	/**
	 * <p>BSON type for the "Undefined" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON undefined type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-undefined.php
	 * @since mongodb >=1.4.0
	 */
	final class Undefined implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new Undefined (unused)
		 * <p><code>MongoDB\BSON\Undefined</code> objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-undefined.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns an empty string
		 * @return string <p>Returns an empty string.</p>
		 * @link https://php.net/manual/en/mongodb-bson-undefined.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\Undefined</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-undefined.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a Undefined
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\Undefined</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-undefined.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Undefined
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\Undefined</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\Undefined</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-undefined.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Classes that implement this interface may be specified in a type map for unserializing BSON arrays and documents (both root and embedded).</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-unserializable.php
	 * @since mongodb >=1.0.0
	 */
	interface Unserializable {

		/**
		 * Constructs the object from a BSON array or document
		 * <p>Called during unserialization of the object from BSON. The properties of the BSON array or document will be passed to the method as an <code>array</code>.</p><p>Remember to check for an _id property when handling data from a BSON document.</p><p><b>Note</b>:  This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method. </p>
		 * @param array $data <p>Properties within the BSON array or document.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link https://php.net/manual/en/mongodb-bson-unserializable.bsonunserialize.php
		 * @see MongoDB\BSON\Serializable::bsonSerialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonUnserialize(array $data): void;
	}

	/**
	 * <p>Represents a BSON date. The value is a 64-bit integer that represents the number of milliseconds since the Unix epoch (Jan 1, 1970). Negative values represent dates before 1970.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-utcdatetime.php
	 * @since mongodb >=1.0.0
	 */
	final class UTCDateTime implements \MongoDB\BSON\UTCDateTimeInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable, \Stringable {

		/**
		 * Construct a new UTCDateTime
		 * @param int|float|string|\DateTimeInterface $milliseconds
		 * @return self
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetime.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(int|float|string|\DateTimeInterface $milliseconds = null) {}

		/**
		 * Returns the string representation of this UTCDateTime
		 * @return string <p>Returns the string representation of this UTCDateTime.</p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetime.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the <code>MongoDB\BSON\UTCDateTime</code>.</p><p><b>Note</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the relaxed or canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetime.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize(): mixed {}

		/**
		 * Serialize a UTCDateTime
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\BSON\UTCDateTime</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetime.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Returns the DateTime representation of this UTCDateTime
		 * @return DateTime <p>Returns the <code>DateTime</code> representation of this UTCDateTime. The returned <code>DateTime</code> will use the UTC time zone.</p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetime.todatetime.php
		 * @since mongodb >=1.0.0
		 */
		final public function toDateTime(): \DateTime {}

		/**
		 * Unserialize a UTCDateTime
		 * @param string $serialized <p>The serialized <code>MongoDB\BSON\UTCDateTime</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\BSON\UTCDateTime</code>.</p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetime.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\BSON\UTCDateTime</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-bson-utcdatetimeinterface.php
	 * @since mongodb >=1.3.0
	 */
	interface UTCDateTimeInterface {

		/**
		 * Returns the string representation of this UTCDateTimeInterface
		 * @return string <p>Returns the string representation of this UTCDateTimeInterface.</p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetimeinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		public function __toString(): string;

		/**
		 * Returns the DateTime representation of this UTCDateTimeInterface
		 * @return DateTime <p>Returns the <code>DateTime</code> representation of this UTCDateTimeInterface. The returned <code>DateTime</code> should use the UTC time zone.</p>
		 * @link https://php.net/manual/en/mongodb-bson-utcdatetimeinterface.todatetime.php
		 * @since mongodb >=1.3.0
		 */
		public function toDateTime(): \DateTime;
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\BulkWrite</b> collects one or more write operations that should be sent to the server. After adding any number of insert, update, and delete operations, the collection may be executed via <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
	 * <p>Write operations may either be ordered (default) or unordered. Ordered write operations are sent to the server, in the order provided, for serial execution. If a write fails, any remaining operations will be aborted. Unordered operations are sent to the server in an arbitrary order where they may be executed in parallel. Any errors that occur are reported after all operations have been attempted.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-bulkwrite.php
	 * @since mongodb >=1.0.0
	 */
	final class BulkWrite implements \Countable {

		/**
		 * Create a new BulkWrite
		 * <p>Constructs a new <code>MongoDB\Driver\BulkWrite</code>, which is a mutable object to which one or more write operations may be added. The write(s) may then be executed with <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     bypassDocumentValidation <code>bool</code>  <p>If <b><code>true</code></b>, allows insert and update operations to circumvent document level validation.</p> <p>This option is available in MongoDB 3.2+ and is ignored for older server versions, which do not support document level validation.</p>  <b><code>false</code></b>   ordered <code>bool</code>  Ordered operations (<b><code>true</code></b>) are executed serially on the MongoDB server, while unordered operations (<b><code>false</code></b>) are sent to the server in an arbitrary order and may be executed in parallel.  <b><code>true</code></b>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-bulkwrite.construct.php
		 * @since mongodb >=1.0.0
		 */
		public function __construct(array $options = null) {}

		/**
		 * Count number of write operations in the bulk
		 * <p>Returns the number of write operations added to the <code>MongoDB\Driver\BulkWrite</code> object.</p>
		 * @return int <p>Returns number of write operations added to the <code>MongoDB\Driver\BulkWrite</code> object.</p>
		 * @link https://php.net/manual/en/mongodb-driver-bulkwrite.count.php
		 * @since mongodb >=1.0.0
		 */
		public function count(): int {}

		/**
		 * Add a delete operation to the bulk
		 * <p>Adds a delete operation to the <code>MongoDB\Driver\BulkWrite</code>.</p>
		 * @param array|object $filter
		 * @param array $deleteOptions <p></p> <b>deleteOptions</b>   Option Type Description Default     collation <code>array</code>|<code>object</code>  <p>Collation allows users to specify language-specific rules for string comparison, such as rules for lettercase and accent marks. When specifying collation, the <code>"locale"</code> field is mandatory; all other collation fields are optional. For descriptions of the fields, see Collation Document.</p> <p>If the collation is unspecified but the collection has a default collation, the operation uses the collation specified for the collection. If no collation is specified for the collection or for the operation, MongoDB uses the simple binary comparison used in prior versions for string comparisons.</p> <p>This option is available in MongoDB 3.4+ and will result in an exception at execution time if specified for an older server version.</p>    hint <code>string</code>|<code>array</code>|<code>object</code>  <p>Index specification. Specify either the index name as a string or the index key pattern. If specified, then the query system will only consider plans using the hinted index.</p> <p>This option is available in MongoDB 4.4+ and will result in an exception at execution time if specified for an older server version.</p>    limit <code>bool</code> Delete all matching documents (<b><code>false</code></b>), or only the first matching document (<b><code>true</code></b>) <b><code>false</code></b>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-bulkwrite.delete.php
		 * @since mongodb >=1.0.0
		 */
		public function delete(array|object $filter, array $deleteOptions = null): void {}

		/**
		 * Add an insert operation to the bulk
		 * <p>Adds an insert operation to the <code>MongoDB\Driver\BulkWrite</code>.</p>
		 * @param array|object $document
		 * @return mixed <p>Returns the <code>_id</code> of the inserted document. If the <code>document</code> did not have an <code>_id</code>, the <code>MongoDB\BSON\ObjectId</code> generated for the insert will be returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-bulkwrite.insert.php
		 * @since mongodb >=1.0.0
		 */
		public function insert(array|object $document): mixed {}

		/**
		 * Add an update operation to the bulk
		 * <p>Adds an update operation to the <code>MongoDB\Driver\BulkWrite</code>.</p>
		 * @param array|object $filter
		 * @param array|object $newObj
		 * @param array $updateOptions <p></p> <b>updateOptions</b>   Option Type Description Default     arrayFilters <code>array</code>  <p>An array of filter documents that determines which array elements to modify for an update operation on an array field. See Specify arrayFilters for Array Update Operations in the MongoDB manual for more information.</p> <p>This option is available in MongoDB 3.6+ and will result in an exception at execution time if specified for an older server version.</p>    collation <code>array</code>|<code>object</code>  <p>Collation allows users to specify language-specific rules for string comparison, such as rules for lettercase and accent marks. When specifying collation, the <code>"locale"</code> field is mandatory; all other collation fields are optional. For descriptions of the fields, see Collation Document.</p> <p>If the collation is unspecified but the collection has a default collation, the operation uses the collation specified for the collection. If no collation is specified for the collection or for the operation, MongoDB uses the simple binary comparison used in prior versions for string comparisons.</p> <p>This option is available in MongoDB 3.4+ and will result in an exception at execution time if specified for an older server version.</p>    hint <code>string</code>|<code>array</code>|<code>object</code>  <p>Index specification. Specify either the index name as a string or the index key pattern. If specified, then the query system will only consider plans using the hinted index.</p> <p>This option is available in MongoDB 4.2+ and will result in an exception at execution time if specified for an older server version.</p>    multi <code>bool</code>  Update only the first matching document if <b><code>false</code></b>, or all matching documents <b><code>true</code></b>. This option cannot be <b><code>true</code></b> if <code>newObj</code> is a replacement document.  <b><code>false</code></b>   upsert <code>bool</code>  If <code>filter</code> does not match an existing document, insert a <i>single</i> document. The document will be created from <code>newObj</code> if it is a replacement document (i.e. no update operators); otherwise, the operators in <code>newObj</code> will be applied to <code>filter</code> to create the new document.  <b><code>false</code></b>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-bulkwrite.update.php
		 * @since mongodb >=1.0.0
		 */
		public function update(array|object $filter, array|object $newObj, array $updateOptions = null): void {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\ClientEncryption</b> class handles creation of data keys for client-side encryption, as well as manually encrypting and decrypting values.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-clientencryption.php
	 * @since mongodb >=1.7.0
	 */
	final class ClientEncryption {

		/**
		 * @var string <p>Uses randomized encryption.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-clientencryption.php
		 */
		const AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC = 'AEAD_AES_256_CBC_HMAC_SHA_512-Deterministic';

		/**
		 * @var string <p>Uses deterministic (queryable) encryption.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-clientencryption.php
		 */
		const AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM = 'AEAD_AES_256_CBC_HMAC_SHA_512-Random';

		/**
		 * Create a new encryption data key
		 * <p>Creates a new key document and inserts it into the key vault collection.</p>
		 * @param string $kmsProvider <p>The KMS provider (e.g. <code>"local"</code>, <code>"aws"</code>, <code>"azure"</code>, <code>"gcp"</code>) that will be used to encrypt the new encryption key.</p>
		 * @param array $options <p></p> <b>Data key options</b>   Option Type Description     masterKey <code>array</code>  <p>The masterKey identifies a KMS-specific key used to encrypt the new data key. This option is required unless <code>kmsProvider</code> is <code>"local"</code>.</p> <p>If <code>kmsProvider</code> is <code>"aws"</code>, this option is required and has the following fields:</p> <b>AWS masterKey options</b>   Option Type Description     region string Required.   key string Required. The Amazon Resource Name (ARN) to the AWS customer master key (CMK).   endpoint string Optional. An alternate host identifier to send KMS requests to. May include port number.    <p>If <code>kmsProvider</code> is <code>"azure"</code>, this option is required and has the following fields:</p> <b>Azure masterKey options</b>   Option Type Description     keyVaultEndpoint string Required. Host with optional port (e.g. "example.vault.azure.net").   keyName string Required.   keyVersion string Optional. A specific version of the named key. Defaults to using the key's primary version.    <p>If <code>kmsProvider</code> is <code>"gcp"</code>, this option is required and has the following fields:</p> <b>GCP masterKey options</b>   Option Type Description     projectId string Required.   location string Required.   keyRing string Required.   keyName string Required.   keyVersion string Optional. A specific version of the named key. Defaults to using the key's primary version.   endpoint string Optional. Host with optional port. Defaults to "cloudkms.googleapis.com".       keyAltNames <code>array</code>  <p>An optional list of string alternate names used to reference a key. If a key is created with alternate names, then encryption may refer to the key by the unique alternate name instead of by <code>_id</code>.</p>
		 * @return MongoDB\BSON\Binary <p>Returns the identifier of the new key as a <code>MongoDB\BSON\Binary</code> object with subtype 4 (UUID).</p>
		 * @link https://php.net/manual/en/mongodb-driver-clientencryption.createdatakey.php
		 * @since mongodb >=1.7.0
		 */
		final public function createDataKey(string $kmsProvider, array $options = null): \MongoDB\BSON\Binary {}

		/**
		 * Decrypt a value
		 * <p>Decrypts the value.</p>
		 * @param \MongoDB\BSON\Binary $value <p>A <code>MongoDB\BSON\Binary</code> instance with subtype 6 containing the encrypted value.</p>
		 * @return mixed <p>Returns the decrypted value as it was passed to <code>MongoDB\Driver\ClientEncryption::encrypt()</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-clientencryption.decrypt.php
		 * @see MongoDB\Driver\ClientEncryption::encrypt()
		 * @since mongodb >=1.7.0
		 */
		final public function decrypt(\MongoDB\BSON\Binary $value): mixed {}

		/**
		 * Encrypt a value
		 * <p>Encrypts the value.</p>
		 * @param mixed $value <p>The value to be encrypted. Any value that can be inserted into MongoDB can be encrypted using this method.</p>
		 * @param array $options <p></p> <b>Encryption options</b>   Option Type Description     algorithm <code>string</code>  <p>The encryption algorithm to be used. Use the constants defined in <code>MongoDB\Driver\ClientEncryption</code>.</p>    keyAltName <code>string</code>  <p>Identifies a key vault collection document by <code>keyAltName</code>.</p>    keyId <code>MongoDB\BSON\Binary</code>  <p>Identifies a data key by <code>_id</code>. The value is a UUID (binary subtype 4).</p>     <p><b>Note</b>:  Exactly one of <code>keyId</code> and <code>keyAltName</code> must be provided. The <code>algorithm</code> option is required. </p>
		 * @return MongoDB\BSON\Binary <p>Returns the encrypted value as <code>MongoDB\BSON\Binary</code> object with subtype 6.</p>
		 * @link https://php.net/manual/en/mongodb-driver-clientencryption.encrypt.php
		 * @see MongoDB\Driver\ClientEncryption::decrypt()
		 * @since mongodb >=1.7.0
		 */
		final public function encrypt(mixed $value, array $options = null): \MongoDB\BSON\Binary {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Command</b> class is a value object that represents a database command.</p>
	 * <p>To provide Command Helpers the <b>MongoDB\Driver\Command</b> object should be composed.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-command.php
	 * @since mongodb >=1.0.0
	 */
	final class Command {

		/**
		 * Create a new Command
		 * <p>Constructs a new <code>MongoDB\Driver\Command</code>, which is an immutable value object that represents a database command. The command may then be executed with <code>MongoDB\Driver\Manager::executeCommand()</code>.</p><p>The complete command document, which includes the command name and its options, should be expressed in the <code>document</code> parameter. The <code>commandOptions</code> parameter is only used to specify options related to the execution of the command and the resulting <code>MongoDB\Driver\Cursor</code>.</p>
		 * @param array|object $document <p>The complete command document, which will be sent to the server.</p>
		 * @param array $commandOptions <p><b>Note</b>:  Do not use this parameter to specify options described in the command's reference in the MongoDB manual. This parameter should only be used for the options explicitly listed below. </p> <p></p> <b>commandOptions</b>   Option Type Description     maxAwaitTimeMS <code>int</code>  <p>Positive integer denoting the time limit in milliseconds for the server to block a getMore operation if no data is available. This option should only be used in conjunction with commands that return a tailable cursor (e.g. Change Streams).</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-command.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(array|object $document, array $commandOptions = null) {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Cursor</b> class encapsulates the results of a MongoDB command or query and may be returned by <code>MongoDB\Driver\Manager::executeCommand()</code> or <code>MongoDB\Driver\Manager::executeQuery()</code>, respectively.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-cursor.php
	 * @since mongodb >=1.0.0
	 */
	final class Cursor implements \MongoDB\Driver\CursorInterface, \Iterator {

		/**
		 * Create a new Cursor (not used)
		 * <p><code>MongoDB\Driver\Cursor</code> objects are returned as the result of an executed command or query and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-cursor.construct.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeQuery(), MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * Returns the current element
		 * @return array|object <p>Returns the current result document as an array or object, depending on the cursor's type map. If iteration has not started or the current position is not valid, <b><code>null</code></b> will be returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.current.php
		 * @since mongodb >=1.9.0
		 */
		public function current(): array|object {}

		/**
		 * Returns the ID for this cursor
		 * <p>Returns the <code>MongoDB\Driver\CursorId</code> associated with this cursor. A cursor ID uniquely identifies the cursor on the server.</p>
		 * @return MongoDB\Driver\CursorId <p>Returns the <code>MongoDB\Driver\CursorId</code> for this cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.getid.php
		 * @see MongoDB\Driver\CursorId::__toString()
		 * @since mongodb >=1.0.0
		 */
		final public function getId(): \MongoDB\Driver\CursorId {}

		/**
		 * Returns the server associated with this cursor
		 * <p>Returns the <code>MongoDB\Driver\Server</code> associated with this cursor. This is the server that executed the <code>MongoDB\Driver\Query</code> or <code>MongoDB\Driver\Command</code>.</p>
		 * @return MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> associated with this cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.getserver.php
		 * @since mongodb >=1.0.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Checks if the cursor is exhausted or may have additional results
		 * <p>Checks whether there are definitely no additional results available on the cursor. This method is similar to the cursor.isExhausted() method in the MongoDB shell and is primarily useful when iterating tailable cursors.</p><p>A cursor has no additional results and is considered "dead" when one of the following is true:</p><p>By design, it is not possible to always determine whether a cursor has additional results. The cases where a cursor <i>may</i> have more data available is as follows:</p>
		 * @return bool <p>Returns <b><code>true</code></b> if there are definitely no additional results available on the cursor, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.isdead.php
		 * @since mongodb >=1.0.0
		 */
		final public function isDead(): bool {}

		/**
		 * Returns the current result's index within the cursor
		 * @return int <p>The current result's numeric index within the cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.key.php
		 * @since mongodb >=1.9.0
		 */
		public function key(): int {}

		/**
		 * Advances the cursor to the next result
		 * @return void <p>Moves the current position to the next element in the cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.next.php
		 * @since mongodb >=1.9.0
		 */
		public function next(): void {}

		/**
		 * Rewind the cursor to the first result
		 * <p>If the cursor has advanced beyond its first position, it can no longer be rewound.</p>
		 * @return void <p><b><code>null</code></b>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.rewind.php
		 * @since mongodb >=1.9.0
		 */
		public function rewind(): void {}

		/**
		 * Sets a type map to use for BSON unserialization
		 * <p>Sets the type map configuration to use when unserializing the BSON results into PHP values.</p>
		 * @param array $typemap
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.settypemap.php
		 * @since mongodb >=1.0.0
		 */
		final public function setTypeMap(array $typemap): void {}

		/**
		 * Returns an array containing all results for this cursor
		 * <p>Iterates the cursor and returns its results in an array. <code>MongoDB\Driver\Cursor::setTypeMap()</code> may be used to control how documents are unserialized into PHP values.</p>
		 * @return array <p>Returns an <code>array</code> containing all results for this cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.toarray.php
		 * @see MongoDB\Driver\Cursor::setTypeMap()
		 * @since mongodb >=1.0.0
		 */
		final public function toArray(): array {}

		/**
		 * Checks if the current position in the cursor is valid
		 * @return bool <p><b><code>true</code></b> if the current cursor position is valid, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursor.valid.php
		 * @since mongodb >=1.9.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\CursorID</b> class is a value object that represents a cursor ID. Instances of this class are returned by <code>MongoDB\Driver\Cursor::getId()</code>.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-cursorid.php
	 * @since mongodb >=1.0.0
	 */
	final class CursorId implements \Serializable, \Stringable {

		/**
		 * Create a new CursorId (not used)
		 * <p><code>MongoDB\Driver\CursorId</code> objects are returned from <code>MongoDB\Driver\Cursor::getId()</code> and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-cursorid.construct.php
		 * @see MongoDB\Driver\Cursor::getId()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * String representation of the cursor ID
		 * <p>Returns the <code>string</code> representation of the cursor ID.</p>
		 * @return string <p>Returns the <code>string</code> representation of the cursor ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorid.tostring.php
		 * @see MongoDB\Driver\Cursor::getId()
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Serialize a CursorId
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\Driver\CursorId</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorid.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.7.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a CursorId
		 * @param string $serialized <p>The serialized <code>MongoDB\Driver\CursorId</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\Driver\CursorId</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorid.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.7.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by <code>MongoDB\Driver\Cursor</code> to be used as a parameter, return, or property type in userland classes.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-cursorinterface.php
	 * @since mongodb >=1.6.0
	 */
	interface CursorInterface {

		/**
		 * Returns the ID for this cursor
		 * <p>Returns the <code>MongoDB\Driver\CursorId</code> associated with this cursor. A cursor ID uniquely identifies the cursor on the server.</p>
		 * @return MongoDB\Driver\CursorId <p>Returns the <code>MongoDB\Driver\CursorId</code> for this cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorinterface.getid.php
		 * @see MongoDB\Driver\CursorId::__toString()
		 * @since mongodb >=1.6.0
		 */
		public function getId(): \MongoDB\Driver\CursorId;

		/**
		 * Returns the server associated with this cursor
		 * <p>Returns the <code>MongoDB\Driver\Server</code> associated with this cursor. This is the server that executed the <code>MongoDB\Driver\Query</code> or <code>MongoDB\Driver\Command</code>.</p>
		 * @return MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> associated with this cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorinterface.getserver.php
		 * @since mongodb >=1.6.0
		 */
		public function getServer(): \MongoDB\Driver\Server;

		/**
		 * Checks if the cursor may have additional results
		 * <p>Checks whether the cursor may have additional results available to read. A cursor is initially "alive" but may become "dead" for any of the following reasons:</p>
		 * @return bool <p>Returns <b><code>true</code></b> if additional results are not available, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorinterface.isdead.php
		 * @since mongodb >=1.6.0
		 */
		public function isDead(): bool;

		/**
		 * Sets a type map to use for BSON unserialization
		 * <p>Sets the type map configuration to use when unserializing the BSON results into PHP values.</p>
		 * @param array $typemap
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorinterface.settypemap.php
		 * @since mongodb >=1.6.0
		 */
		public function setTypeMap(array $typemap): void;

		/**
		 * Returns an array containing all results for this cursor
		 * <p>Iterates the cursor and returns its results in an array. <code>MongoDB\Driver\CursorInterface::setTypeMap()</code> may be used to control how documents are unserialized into PHP values.</p>
		 * @return array <p>Returns an <code>array</code> containing all results for this cursor.</p>
		 * @link https://php.net/manual/en/mongodb-driver-cursorinterface.toarray.php
		 * @see MongoDB\Driver\CursorInterface::setTypeMap()
		 * @since mongodb >=1.6.0
		 */
		public function toArray(): array;
	}

}

namespace MongoDB\Driver\Exception {

	/**
	 * <p>Thrown when the driver fails to authenticate with the server.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-authenticationexception.php
	 * @since mongodb >= 1.0.0
	 */
	class AuthenticationException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a bulk write operation fails.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-bulkwriteexception.php
	 * @since mongodb >= 1.0.0
	 */
	class BulkWriteException extends \MongoDB\Driver\Exception\WriteException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var MongoDB\Driver\WriteResult <p>The <code>MongoDB\Driver\WriteResult</code> associated with the failed write operation.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-writeexception.php#mongodb-driver-exception-writeexception.props.writeresult
		 */
		protected $writeResult;

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns the WriteResult for the failed write operation
		 * <p>Returns the <code>MongoDB\Driver\WriteResult</code> for the failed write operation. The <code>MongoDB\Driver\WriteResult::getWriteErrors()</code> and <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code> methods may be used to get more details about the failure.</p>
		 * @return MongoDB\Driver\WriteResult <p>The <code>MongoDB\Driver\WriteResult</code> for the failed write operation.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeexception.getwriteresult.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >= 1.0.0
		 */
		final public function getWriteResult(): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a command fails.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-commandexception.php
	 * @since mongodb >= 1.5.0
	 */
	class CommandException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var object <p>The result document associated with the failed command.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-commandexception.php#mongodb-driver-exception-commandexception.props.resultdocument
		 */
		protected $resultDocument;

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Returns the result document for the failed command
		 * <p>Returns the result document for the failed command.</p>
		 * @return object <p>The result document for the failed command.</p>
		 * @link https://php.net/manual/en/mongodb-driver-commandexception.getresultdocument.php
		 * @see MongoDB\Driver\Manager::executeCommand()
		 * @since mongodb >= 1.5.0
		 */
		final public function getResultDocument(): object {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown when the driver fails to establish a database connection.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-connectionexception.php
	 * @since mongodb >= 1.0.0
	 */
	class ConnectionException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to establish a database connection within a specified time limit (connectTimeoutMS) or server selection fails (serverSelectionTimeoutMS).</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-connectiontimeoutexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class ConnectionTimeoutException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown during client-side encryption.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-encryptionexception.php
	 * @since mongodb >= 1.7.0
	 */
	class EncryptionException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Common interface for all driver exceptions. This may be used to catch only exceptions originating from the driver itself.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-exception.php
	 * @since mongodb >= 1.0.0
	 */
	interface Exception {
	}

	/**
	 * <p>Thrown when a query or command fails to complete within a specified time limit (e.g. maxTimeMS).</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-executiontimeoutexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class ExecutionTimeoutException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a driver method is given invalid arguments (e.g. invalid option types).</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-invalidargumentexception.php
	 * @since mongodb >= 1.0.0
	 */
	class InvalidArgumentException extends \InvalidArgumentException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Thrown when the driver is incorrectly used (e.g. rewinding a cursor).</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-logicexception.php
	 * @since mongodb >= 1.0.0
	 */
	class LogicException extends \LogicException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Thrown when the driver encounters a runtime error (e.g. internal error from libmongoc).</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php
	 * @since mongodb >= 1.0.0
	 */
	class RuntimeException extends \RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown by the server. The code of this exception and its subclasses will correspond to the original error code from the server.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-serverexception.php
	 * @since mongodb >= 1.5.0
	 */
	class ServerException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to establish an SSL connection with the server.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-sslconnectionexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class SSLConnectionException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver encounters an unexpected value (e.g. during BSON serialization or deserialization).</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-unexpectedvalueexception.php
	 * @since mongodb >= 1.0.0
	 */
	class UnexpectedValueException extends \UnexpectedValueException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Base class for exceptions thrown by a failed write operation. The exception encapsulates a <code>MongoDB\Driver\WriteResult</code> object.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-exception-writeexception.php
	 * @since mongodb >= 1.0.0
	 */
	abstract class WriteException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var MongoDB\Driver\WriteResult <p>The <code>MongoDB\Driver\WriteResult</code> associated with the failed write operation.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-writeexception.php#mongodb-driver-exception-writeexception.props.writeresult
		 */
		protected $writeResult;

		/**
		 * @var ?array <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <code>TransientTransactionError</code> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <code>errorLabels</code> property manually.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}

		/**
		 * Returns the WriteResult for the failed write operation
		 * <p>Returns the <code>MongoDB\Driver\WriteResult</code> for the failed write operation. The <code>MongoDB\Driver\WriteResult::getWriteErrors()</code> and <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code> methods may be used to get more details about the failure.</p>
		 * @return MongoDB\Driver\WriteResult <p>The <code>MongoDB\Driver\WriteResult</code> for the failed write operation.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeexception.getwriteresult.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >= 1.0.0
		 */
		final public function getWriteResult(): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <code>TransientTransactionError</code> and <code>UnknownTransactionCommitResult</code>.</p>
		 * @param string $errorLabel <p>The name of the <code>errorLabel</code> to test for.</p>
		 * @return bool <p>Whether the given <code>errorLabel</code> is associated with this exception.</p>
		 * @link https://php.net/manual/en/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\Manager</b> is the main entry point to the extension. It is responsible for maintaining connections to MongoDB (be it standalone server, replica set, or sharded cluster).</p>
	 * <p>No connection to MongoDB is made upon instantiating the Manager. This means the <b>MongoDB\Driver\Manager</b> can always be constructed, even though one or more MongoDB servers are down.</p>
	 * <p>Any write or query can throw connection exceptions as connections are created lazily. A MongoDB server may also become unavailable during the life time of the script. It is therefore important that all actions on the Manager to be wrapped in try/catch statements.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-manager.php
	 * @since mongodb >=1.0.0
	 */
	final class Manager {

		/**
		 * Create new MongoDB Manager
		 * <p>Constructs a new <code>MongoDB\Driver\Manager</code> object with the specified options.</p><p><b>Note</b>:  Per the Server Discovery and Monitoring Specification, this constructor performs no I/O. Connections will be initialized on demand, when the first operation is executed. </p><p><b>Note</b>:  When specifying any SSL or TLS URI options via the connection string or <code>uriOptions</code> parameter, the driver will implicitly enable TLS for its connections. To avoid this, either explicitly disable the <code>tls</code> option or don't specify any TLS options. </p><p><b>Note</b>:  On Unix platforms, the MongoDB driver is sensitive to scripts that use the fork() system call without also calling exec(). Users are advised not to re-use <code>MongoDB\Driver\Manager</code> instances in a forked child process. </p>
		 * @param string $uri <p>A mongodb:// connection URI:</p> <pre>mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[defaultAuthDb][&#63;options]]</pre>   <p>For details on supported URI options, see Connection String Options in the MongoDB manual. Connection pool options are not supported, as the PHP driver does not implement connection pools.</p> <p>The <code>uri</code> is a URL, hence any special characters in its components need to be URL encoded according to RFC 3986. This is particularly relevant to the username and password, which can often include special characters such as <code>@</code>, <code>:</code>, or <code>%</code>. When connecting via a Unix domain socket, the socket path may contain special characters such as slashes and must be encoded. The <code>rawurlencode()</code> function may be used to encode constituent parts of the URI.</p> <p>The <code>defaultAuthDb</code> component may be used to specify the database name associated with the user's credentials; however the <code>authSource</code> URI option will take priority if specified. If neither <code>defaultAuthDb</code> nor <code>authSource</code> are specified, the <code>admin</code> database will be used by default. The <code>defaultAuthDb</code> component has no effect in the absence of user credentials.</p>
		 * @param array $uriOptions <p>Additional connection string options, which will overwrite any options with the same name in the <code>uri</code> parameter.</p> <p></p> <b>uriOptions</b>   Option Type Description     appname <code>string</code>  <p>MongoDB 3.4+ has the ability to annotate connections with metadata provided by the connecting client. This metadata is included in the server's logs upon establishing a connection and also recorded in slow query logs when database profiling is enabled.</p> <p>This option may be used to specify an application name, which will be included in the metadata. The value cannot exceed 128 characters in length.</p>    authMechanism <code>string</code>  <p>The authentication mechanism that MongoDB will use to authenticate the connection. For additional details and a list of supported values, see Authentication Options in the MongoDB manual.</p>    authMechanismProperties <code>array</code>  <p>Properties for the selected authentication mechanism. For additional details and a list of supported properties, see the Driver Authentication Specification.</p> <p><b>Note</b>:  When not specified in the URI string, this option is expressed as an array of key/value pairs. The keys and values in this array should be strings. </p>    authSource <code>string</code>  <p>The database name associated with the user's credentials. Defaults to the database component of the connection URI, or the <code>admin</code> database if both are unspecified.</p> <p>For authentication mechanisms that delegate credential storage to other services (e.g. GSSAPI), this should be <code>"$external"</code>.</p>    canonicalizeHostname <code>bool</code>  <p>If <b><code>true</code></b>, the driver will resolve the real hostname for the server IP address before authenticating via SASL. Some underlying GSSAPI layers already do this, but the functionality may be disabled in their config (e.g. <code>krb.conf</code>). Defaults to <b><code>false</code></b>.</p> <p>This option is a deprecated alias for the <code>"CANONICALIZE_HOST_NAME"</code> property of the <code>"authMechanismProperties"</code> URI option.</p>    compressors <code>string</code>  <p>A prioritized, comma-delimited list of compressors that the client wants to use. Messages are only compressed if the client and server share any compressors in common, and the compressor used in each direction will depend on the individual configuration of the server or driver. See the Driver Compression Specification for more information.</p>    connectTimeoutMS <code>int</code>  <p>The time in milliseconds to attempt a connection before timing out. Defaults to 10,000 milliseconds.</p>    directConnection <code>bool</code>  <p>This option can be used to control replica set discovery behavior when only a single host is provided in the connection string. By default, providing a single member in the connection string will establish a direct connection or discover additional members depending on whether the <code>"replicaSet"</code> URI option is omitted or present, respectively. Specify <b><code>false</code></b> to force discovery to occur (if <code>"replicaSet"</code> is omitted) or specify <b><code>true</code></b> to force a direct connection (if <code>"replicaSet"</code> is present).</p>    gssapiServiceName <code>string</code>  <p>Set the Kerberos service name when connecting to Kerberized MongoDB instances. This value must match the service name set on MongoDB instances (i.e. saslServiceName server parameter). Defaults to <code>"mongodb"</code>.</p> <p>This option is a deprecated alias for the <code>"SERVICE_NAME"</code> property of the <code>"authMechanismProperties"</code> URI option.</p>    heartbeatFrequencyMS <code>int</code>  <p>Specifies the interval in milliseconds between the driver's checks of the MongoDB topology, counted from the end of the previous check until the beginning of the next one. Defaults to 60,000 milliseconds.</p> <p>Per the Server Discovery and Monitoring Specification, this value cannot be less than 500 milliseconds.</p>    journal <code>bool</code>  <p>Corresponds to the default write concern's <code>journal</code> parameter. If <b><code>true</code></b>, writes will require acknowledgement from MongoDB that the operation has been written to the journal. For details, see <code>MongoDB\Driver\WriteConcern</code>.</p>    loadBalanced <code>bool</code>  <p>Specifies whether the driver is connecting to a MongoDB cluster through a load balancer. If <b><code>true</code></b>, the driver may only connect to a single host (specified by either the connection string or SRV lookup), the <code>"directConnection"</code> URI option cannot be <b><code>true</code></b>, and the <code>"replicaSet"</code> URI option must be omitted. Defaults to <b><code>false</code></b>.</p>    localThresholdMS <code>int</code>  <p>The size in milliseconds of the latency window for selecting among multiple suitable MongoDB instances while resolving a read preference. Defaults to 15 milliseconds.</p>    maxStalenessSeconds <code>int</code>  <p>Corresponds to the read preference's <code>"maxStalenessSeconds"</code>. Specifies, in seconds, how stale a secondary can be before the client stops using it for read operations. By default, there is no maximum staleness and clients will not consider a secondary&rsquo;s lag when choosing where to direct a read operation. For details, see <code>MongoDB\Driver\ReadPreference</code>.</p> <p>If specified, the max staleness must be a signed 32-bit integer greater than or equal to <b><code>MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</code></b> (i.e. 90 seconds).</p>    password <code>string</code>  The password for the user being authenticated. This option is useful if the password contains special characters, which would otherwise need to be URL encoded for the connection URI.    readConcernLevel <code>string</code>  Corresponds to the read concern's <code>level</code> parameter. Specifies the level of read isolation. For details, see <code>MongoDB\Driver\ReadConcern</code>.    readPreference <code>string</code>  <p>Corresponds to the read preference's <code>mode</code> parameter. Defaults to <code>"primary"</code>. For details, see <code>MongoDB\Driver\ReadPreference</code>.</p>    readPreferenceTags <code>array</code>  <p>Corresponds to the read preference's <code>tagSets</code> parameter. Tag sets allow you to target read operations to specific members of a replica set. For details, see <code>MongoDB\Driver\ReadPreference</code>.</p> <p><b>Note</b>:  When not specified in the URI string, this option is expressed as an array consistent with the format expected by <code>MongoDB\Driver\ReadPreference::__construct()</code>. </p>    replicaSet <code>string</code>  <p>Specifies the name of the replica set.</p>    retryReads <code>bool</code>  <p>Specifies whether or not the driver should automatically retry certain read operations that fail due to transient network errors or replica set elections. This functionality requires MongoDB 3.6+. Defaults to <b><code>true</code></b>.</p> <p>See the Retryable Reads Specification for more information.</p>    retryWrites <code>bool</code>  <p>Specifies whether or not the driver should automatically retry certain write operations that fail due to transient network errors or replica set elections. This functionality requires MongoDB 3.6+. Defaults to <b><code>true</code></b>.</p> <p>See Retryable Writes in the MongoDB manual for more information.</p>    safe <code>bool</code>  <p>If <b><code>true</code></b>, specifies <code>1</code> for the default write concern's <code>w</code> parameter. If <b><code>false</code></b>, <code>0</code> is specified. For details, see <code>MongoDB\Driver\WriteConcern</code>.</p> <p>This option is deprecated and should not be used.</p>    serverSelectionTimeoutMS <code>int</code>  <p>Specifies how long in milliseconds to block for server selection before throwing an exception. Defaults to 30,000 milliseconds.</p>    serverSelectionTryOnce <code>bool</code>  <p>When <b><code>true</code></b>, instructs the driver to scan the MongoDB deployment exactly once after server selection fails and then either select a server or raise an error. When <b><code>false</code></b>, the driver blocks and searches for a server up to the <code>"serverSelectionTimeoutMS"</code> value. Defaults to <b><code>true</code></b>.</p>    socketCheckIntervalMS <code>int</code>  <p>If a socket has not been used recently, the driver must check it via a <code>hello</code> command before using it for any operation. Defaults to 5,000 milliseconds.</p>    socketTimeoutMS <code>int</code>  <p>The time in milliseconds to attempt a send or receive on a socket before timing out. Defaults to 300,000 milliseconds (i.e. five minutes).</p>    ssl <code>bool</code>  <p>Initiates the connection with TLS/SSL if <b><code>true</code></b>. Defaults to <b><code>false</code></b>.</p> <p>This option is a deprecated alias for the <code>"tls"</code> URI option.</p>    tls <code>bool</code>  <p>Initiates the connection with TLS/SSL if <b><code>true</code></b>. Defaults to <b><code>false</code></b>.</p>    tlsAllowInvalidCertificates <code>bool</code>  <p>Specifies whether or not the driver should error when the server's TLS certificate is invalid. Defaults to <b><code>false</code></b>.</p> <p><b>Warning</b></p> <p>Disabling certificate validation creates a vulnerability.</p>     tlsAllowInvalidHostnames <code>bool</code>  <p>Specifies whether or not the driver should error when there is a mismatch between the server's hostname and the hostname specified by the TLS certificate. Defaults to <b><code>false</code></b>.</p> <p><b>Warning</b></p> <p>Disabling certificate validation creates a vulnerability. Allowing invalid hostnames may expose the driver to a man-in-the-middle attack.</p>     tlsCAFile <code>string</code>  <p>Path to file with either a single or bundle of certificate authorities to be considered trusted when making a TLS connection. The system certificate store will be used by default.</p>    tlsCertificateKeyFile <code>string</code>  <p>Path to the client certificate file or the client private key file; in the case that they both are needed, the files should be concatenated.</p>    tlsCertificateKeyFilePassword <code>string</code>  <p>Password to decrypt the client private key (i.e. <code>"tlsCertificateKeyFile"</code> URI option) to be used for TLS connections.</p>    tlsDisableCertificateRevocationCheck <code>bool</code>  <p>If <b><code>true</code></b>, the driver will not attempt to check certificate revocation status (e.g. OCSP, CRL). Defaults to <b><code>false</code></b>.</p>    tlsDisableOCSPEndpointCheck <code>bool</code>  <p>If <b><code>true</code></b>, the driver will not attempt to contact an OCSP responder endpoint if needed (i.e. an OCSP response is not stapled). Defaults to <b><code>false</code></b>.</p>    tlsInsecure <code>bool</code>  <p>Relax TLS constraints as much as possible. Specifying <b><code>true</code></b> for this option has the same effect as specifying <b><code>true</code></b> for both the <code>"tlsAllowInvalidCertificates"</code> and <code>"tlsAllowInvalidHostnames"</code> URI options. Defaults to <b><code>false</code></b>.</p> <p><b>Warning</b></p> <p>Disabling certificate validation creates a vulnerability. Allowing invalid hostnames may expose the driver to a man-in-the-middle attack.</p>     username <code>string</code>  The username for the user being authenticated. This option is useful if the username contains special characters, which would otherwise need to be URL encoded for the connection URI.    w <code>int</code>|<code>string</code>  <p>Corresponds to the default write concern's <code>w</code> parameter. For details, see <code>MongoDB\Driver\WriteConcern</code>.</p>    wTimeoutMS <code>int</code>|<code>string</code>  <p>Corresponds to the default write concern's <code>wtimeout</code> parameter. Specifies a time limit, in milliseconds, for the write concern. For details, see <code>MongoDB\Driver\WriteConcern</code>.</p> <p>If specified, <code>wTimeoutMS</code> must be a signed 32-bit integer greater than or equal to zero.</p>    zlibCompressionLevel <code>int</code>  <p>Specifies the compression level to use for the zlib compressor. This option has no effect if <code>zlib</code> is not included in the <code>"compressors"</code> URI option. See the Driver Compression Specification for more information.</p>
		 * @param array $driverOptions <p></p> <b>driverOptions</b>   Option Type Description     allow_invalid_hostname <code>bool</code>  <p>Disables hostname validation if <b><code>true</code></b>. Defaults to <b><code>false</code></b>.</p> <p>Allowing invalid hostnames may expose the driver to a man-in-the-middle attack.</p> <p>This option is a deprecated alias for the <code>"tlsAllowInvalidHostnames"</code> URI option.</p>    autoEncryption <code>array</code>  <p>Provides options to enable automatic client-side field level encryption. The following options are supported:</p> <b>Options for automatic encryption</b>   Option Type Description     keyVaultClient <code>MongoDB\Driver\Manager</code> The Manager used to route data key queries to a separate MongoDB cluster. By default, the current Manager and cluster is used.   keyVaultNamespace <code>string</code> A fully qualified namespace (e.g. <code>"databaseName.collectionName"</code>) denoting the collection that contains all data keys used for encryption and decryption.   kmsProviders <code>array</code>  <p>A document containing the configuration for one or more KMS providers, which are used to encrypt data keys. Supported providers include <code>"aws"</code>, <code>"azure"</code>, <code>"gcp"</code>, <code>"kmip"</code>, and <code>"local"</code> and at least one must be specified.</p> <p>The format for <code>"aws"</code> is as follows:</p>  <pre>aws: { accessKeyId: &lt;string&gt;, secretAccessKey: &lt;string&gt; }</pre>   <p>The format for <code>"azure"</code> is as follows:</p>  <pre>azure: { tenantId: &lt;string&gt;, clientId: &lt;string&gt;, clientSecret: &lt;string&gt;, identityPlatformEndpoint: &lt;optional string&gt; // Defaults to "login.microsoftonline.com" }</pre>   <p>The format for <code>"gcp"</code> is as follows:</p>  <pre>gcp: { email: &lt;string&gt;, privateKey: &lt;base64 string&gt;|&lt;MongoDB\BSON\Binary&gt;, endpoint: &lt;optional string&gt; // Defaults to "oauth2.googleapis.com" }</pre>   <p>The format for <code>"kmip"</code> is as follows:</p>  <pre>kmip: { endpoint: &lt;string&gt; }</pre>   <p>The format for <code>"local"</code> is as follows:</p>  <pre>local: { // 96-byte master key used to encrypt/decrypt data keys key: &lt;base64 string&gt;|&lt;MongoDB\BSON\Binary&gt; }</pre>      tlsOptions <code>array</code>  <p>A document containing the TLS configuration for one or more KMS providers. Supported providers include <code>"aws"</code>, <code>"azure"</code>, <code>"gcp"</code>, and <code>"kmip"</code>. All providers support the following options:</p>  <pre>&lt;provider&gt;: { tlsCaFile: &lt;optional string&gt;, tlsCertificateKeyFile: &lt;optional string&gt;, tlsCertificateKeyFilePassword: &lt;optional string&gt; }</pre>      schemaMap <code>array</code>  <p>Allows specifying a local JSON schema that is used to configure encryption.</p> <p><b>Note</b>:  Supplying a <code>schemaMap</code> provides more security than relying on JSON schemas obtained from the server. It protects against a malicious server advertising a false JSON schema, which could trick the client into sending unencrypted data that should be encrypted. </p> <p><b>Note</b>:  Schemas supplied in the <code>schemaMap</code> only apply to configuring automatic encryption for client side encryption. Other validation rules in the JSON schema will not be enforced by the driver and will result in an error. </p>    bypassAutoEncryption <code>bool</code>  With this option set to <b><code>true</code></b>, <code>mongocryptd</code> will not be spawned automatically. This is used to disable automatic encryption.    extraOptions <code>array</code>  <p>The <code>extraOptions</code> relate to the <code>mongocryptd</code> process. The following options are supported:</p>  <pre>&lt;provider&gt;: { mongocryptdURI: &lt;optional string&gt;, // Defaults to "mongodb://localhost:27027" mongocryptdBypassSpawn: &lt;optional string&gt;, // Defaults to false mongocryptdSpawnPath: &lt;optional string&gt;, // Defaults to empty string and uses default system paths mongocryptdSpawnArgs: &lt;optional array of strings&gt; // Defaults to [ "--idleShutdownTimeoutSecs=60" ] }</pre>   <p>See the Client-Side Encryption Specification for more information.</p>     <p><b>Note</b>:  Automatic encryption is an enterprise only feature that only applies to operations on a collection. Automatic encryption is not supported for operations on a database or view, and operations that are not bypassed will result in error. To bypass automatic encryption for all operations, set <code>bypassAutoEncryption=true</code> in <code>autoEncryption</code>. For more information on allowed operations, see the Client-Side Encryption Specification. </p>    ca_dir <code>string</code>  <p>Path to a correctly hashed certificate directory. The system certificate store will be used by default.</p>    ca_file <code>string</code>  <p>Path to file with either a single or bundle of certificate authorities to be considered trusted when making a TLS connection. The system certificate store will be used by default.</p> <p>This option is a deprecated alias for the <code>"tlsCAFile"</code> URI option.</p>    context <code>resource</code>  <p>SSL context options to be used as fallbacks if a driver option or its equivalent URI option, if any, is not specified. Note that the driver does not consult the default stream context (i.e. <code>stream_context_get_default()</code>). The following context options are supported:</p>  <b>SSL context option fallbacks</b>   Driver option Context option (fallback)     ca_dir capath   ca_file cafile   pem_file local_cert   pem_pwd passphrase   weak_cert_validation allow_self_signed    <p>This option is supported for backwards compatibility, but should be considered deprecated.</p>    crl_file <code>string</code> Path to a certificate revocation list file.   disableClientPersistence <code>bool</code>  <p>If <b><code>true</code></b>, this Manager will use a new libmongoc client, which will not be persisted or shared with other Manager objects. When this Manager object is freed, its client will be destroyed and any connections will be closed. Defaults to <b><code>false</code></b>.</p> <p><b>Note</b>:  Disabling client persistence is not generally recommended. </p>    driver <code>array</code>  <p>Allows custom drivers to append their own metadata to the server handshake. By default, the driver submits its own name, version, and platform (i.e. PHP version) in the handshake. Custom drivers can specify strings for the <code>"name"</code>, <code>"version"</code>, and <code>"platform"</code> keys of this array, which will be appended to the respective field(s) in the handshake document.</p> <p><b>Note</b>:  Handshake information is limited to 512 bytes. The driver will truncate handshake data to fit within this 512-byte string. Drivers and ODMs are encouraged to keep their own metadata concise. </p>    pem_file <code>string</code>  <p>Path to a PEM encoded certificate to use for client authentication.</p> <p>This option is a deprecated alias for the <code>"tlsCertificateKeyFile"</code> URI option.</p>    pem_pwd <code>string</code>  <p>Passphrase for the PEM encoded certificate (if applicable).</p> <p>This option is a deprecated alias for the <code>"tlsCertificateKeyFilePassword"</code> URI option.</p>    serverApi <code>MongoDB\Driver\ServerApi</code>  <p>This option is used to declare a server API version for the manager. If omitted, no API version is declared.</p>    weak_cert_validation <code>bool</code>  <p>Disables certificate validation if <b><code>true</code></b>. Defaults to <b><code>false</code></b></p> <p>This option is a deprecated alias for the <code>"tlsAllowInvalidCertificates"</code> URI option.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-manager.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $uri = "mongodb://127.0.0.1/", array $uriOptions = array(), array $driverOptions = array()) {}

		/**
		 * Registers a monitoring event subscriber with this Manager
		 * <p>Registers a monitoring event subscriber with this Manager. The subscriber will be notified of all events for this Manager.</p><p><b>Note</b>:  If <code>subscriber</code> is already registered with this Manager, this function is a no-op. If <code>subscriber</code> is also registered globally, it will still only be notified once of each event for this Manager. </p>
		 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber to register with this Manager.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.addsubscriber.php
		 * @see MongoDB\Driver\Manager::removeSubscriber(), MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.10.0
		 */
		final public function addSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

		/**
		 * Create a new ClientEncryption object
		 * <p>Constructs a new <code>MongoDB\Driver\ClientEncryption</code> object with the specified options.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     keyVaultClient <code>MongoDB\Driver\Manager</code> The Manager used to route data key queries to a separate MongoDB cluster. By default, the current Manager and cluster is used.   keyVaultNamespace <code>string</code> A fully qualified namespace (e.g. <code>"databaseName.collectionName"</code>) denoting the collection that contains all data keys used for encryption and decryption.   kmsProviders <code>array</code>  <p>A document containing the configuration for one or more KMS providers, which are used to encrypt data keys. Supported providers include <code>"aws"</code>, <code>"azure"</code>, <code>"gcp"</code>, <code>"kmip"</code>, and <code>"local"</code> and at least one must be specified.</p> <p>The format for <code>"aws"</code> is as follows:</p>  <pre>aws: { accessKeyId: &lt;string&gt;, secretAccessKey: &lt;string&gt; }</pre>   <p>The format for <code>"azure"</code> is as follows:</p>  <pre>azure: { tenantId: &lt;string&gt;, clientId: &lt;string&gt;, clientSecret: &lt;string&gt;, identityPlatformEndpoint: &lt;optional string&gt; // Defaults to "login.microsoftonline.com" }</pre>   <p>The format for <code>"gcp"</code> is as follows:</p>  <pre>gcp: { email: &lt;string&gt;, privateKey: &lt;base64 string&gt;|&lt;MongoDB\BSON\Binary&gt;, endpoint: &lt;optional string&gt; // Defaults to "oauth2.googleapis.com" }</pre>   <p>The format for <code>"kmip"</code> is as follows:</p>  <pre>kmip: { endpoint: &lt;string&gt; }</pre>   <p>The format for <code>"local"</code> is as follows:</p>  <pre>local: { // 96-byte master key used to encrypt/decrypt data keys key: &lt;base64 string&gt;|&lt;MongoDB\BSON\Binary&gt; }</pre>      tlsOptions <code>array</code>  <p>A document containing the TLS configuration for one or more KMS providers. Supported providers include <code>"aws"</code>, <code>"azure"</code>, <code>"gcp"</code>, and <code>"kmip"</code>. All providers support the following options:</p>  <pre>&lt;provider&gt;: { tlsCaFile: &lt;optional string&gt;, tlsCertificateKeyFile: &lt;optional string&gt;, tlsCertificateKeyFilePassword: &lt;optional string&gt; }</pre>
		 * @return MongoDB\Driver\ClientEncryption <p>Returns a new <code>MongoDB\Driver\ClientEncryption</code> instance.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.createclientencryption.php
		 * @since mongodb >=1.7.0
		 */
		final public function createClientEncryption(array $options): \MongoDB\Driver\ClientEncryption {}

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A <code>MongoDB\Driver\BulkWrite</code> can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <code>"databaseName.collectionName"</code>).</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>The write(s) to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>Returns <code>MongoDB\Driver\WriteResult</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Execute a database command
		 * <p>Selects a server according to the <code>"readPreference"</code> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method applies no special logic to the command. Although this method accepts <code>"readConcern"</code> and <code>"writeConcern"</code> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.executecommand.php
		 * @see MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query
		 * <p>Selects a server according to the <code>"readPreference"</code> option and executes the query on that server. By default, the read preference from the MongoDB Connection URI will be used.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <code>"databaseName.collectionName"</code>).</p>
		 * @param \MongoDB\Driver\Query $query <p>The query to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.executequery.php
		 * @see MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads
		 * <p>Selects a server according to the <code>"readPreference"</code> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method will apply logic that is specific to commands that read (e.g. count) and take the MongoDB server version into account. The <code>"readConcern"</code> option will default to the corresponding value from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.executereadcommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeReadCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads and writes
		 * <p>Executes the command on the primary server.</p><p>This method will apply logic that is specific to commands that read and write (e.g. aggregate) and take the MongoDB server version into account. The <code>"readConcern"</code> and <code>"writeConcern"</code> options will default to the corresponding values from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.executereadwritecommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeReadWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that writes
		 * <p>Executes the command on the primary server.</p><p>This method will apply logic that is specific to commands that write (e.g. drop) and take the MongoDB server version into account. The <code>"writeConcern"</code> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>Note</b>:  This method is not intended to be used to execute insert, update, or delete commands. Users are encouraged to use <code>MongoDB\Driver\Manager::executeBulkWrite()</code> for those commands. </p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.executewritecommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Return the ReadConcern for the Manager
		 * <p>Returns the <code>MongoDB\Driver\ReadConcern</code> for the Manager, which is derived from its URI options. This is the default read concern for queries and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\ReadConcern <p>The <code>MongoDB\Driver\ReadConcern</code> for the Manager.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.getreadconcern.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.1.0
		 */
		final public function getReadConcern(): \MongoDB\Driver\ReadConcern {}

		/**
		 * Return the ReadPreference for the Manager
		 * <p>Returns the <code>MongoDB\Driver\ReadPreference</code> for the Manager, which is derived from its URI options. This is the default read preference for queries and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\ReadPreference <p>The <code>MongoDB\Driver\ReadPreference</code> for the Manager.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.getreadpreference.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.0.0
		 */
		final public function getReadPreference(): \MongoDB\Driver\ReadPreference {}

		/**
		 * Return the servers to which this manager is connected
		 * <p>Returns an <code>array</code> of <code>MongoDB\Driver\Server</code> instances to which this manager is connected.</p><p><b>Note</b>:  Since the driver connects to the database lazily, this method may return an empty <code>array</code> if called before executing an operation on the <code>MongoDB\Driver\Manager</code>. </p>
		 * @return array <p>Returns an <code>array</code> of <code>MongoDB\Driver\Server</code> instances to which this manager is connected.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.getservers.php
		 * @see MongoDB\Driver\Manager::selectServer()
		 * @since mongodb >=1.0.0
		 */
		final public function getServers(): array {}

		/**
		 * Return the WriteConcern for the Manager
		 * <p>Returns the <code>MongoDB\Driver\WriteConcern</code> for the Manager, which is derived from its URI options. This is the default write concern for writes and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\WriteConcern <p>The <code>MongoDB\Driver\WriteConcern</code> for the Manager.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.getwriteconcern.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcern(): \MongoDB\Driver\WriteConcern {}

		/**
		 * Unregisters a monitoring event subscriber with this Manager
		 * <p>Unregisters a monitoring event subscriber with this Manager.</p><p><b>Note</b>:  If <code>subscriber</code> is not already registered with this Manager, this function is a no-op. </p>
		 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber to unregister with this Manager.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.removesubscriber.php
		 * @see MongoDB\Driver\Manager::addSubscriber(), MongoDB\Driver\Monitoring\removeSubscriber()
		 * @since mongodb >=1.10.0
		 */
		final public function removeSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

		/**
		 * Select a server matching a read preference
		 * <p>Selects a <code>MongoDB\Driver\Server</code> matching <code>readPreference</code>. If <code>readPreference</code> is <b><code>null</code></b> or omitted, the primary server will be selected by default. This may be used to preselect a server in order to perform version checking before executing an operation.</p><p><b>Note</b>:  Unlike <code>MongoDB\Driver\Manager::getServers()</code>, this method will initialize database connections and perform server discovery if necessary. See the Server Selection Specification for additional information. </p>
		 * @param ?\MongoDB\Driver\ReadPreference $readPreference <p>The read preference to use for selecting a server. If <b><code>null</code></b> or omitted, the primary server will be selected by default.</p>
		 * @return MongoDB\Driver\Server <p>Returns a <code>MongoDB\Driver\Server</code> matching the read preference.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.selectserver.php
		 * @see MongoDB\Driver\Manager::getServers()
		 * @since mongodb >=1.0.0
		 */
		final public function selectServer(?\MongoDB\Driver\ReadPreference $readPreference = null): \MongoDB\Driver\Server {}

		/**
		 * Start a new client session for use with this client
		 * <p>Creates a <code>MongoDB\Driver\Session</code> for the given options. The session may then be specified when executing commands, queries, and write operations.</p><p><b>Note</b>:  A <code>MongoDB\Driver\Session</code> can only be used with the <code>MongoDB\Driver\Manager</code> from which it was created. </p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     causalConsistency <code>bool</code>  <p>Configure causal consistency in a session. If <b><code>true</code></b>, each operation in the session will be causally ordered after the previous read or write operation. Set to <b><code>false</code></b> to disable causal consistency.</p> <p>See Casual Consistency in the MongoDB manual for more information.</p>  <b><code>true</code></b>   defaultTransactionOptions <code>array</code>  <p>Default options to apply to newly created transactions. These options are used unless they are overridden when a transaction is started with different value for each option.</p> <p></p> <b>options</b>   Option Type Description     maxCommitTimeMS integer  <p>The maximum amount of time in milliseconds to allow a single <code>commitTransaction</code> command to run.</p> <p>If specified, <code>maxCommitTimeMS</code> must be a signed 32-bit integer greater than or equal to zero.</p>    readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p>This option is available in MongoDB 4.0+.</p>  <code>[]</code>   snapshot <code>bool</code>  <p>Configure snapshot reads in a session. If <b><code>true</code></b>, a timestamp will be obtained from the first supported read operation in the session (i.e. <code>find</code>, <code>aggregate</code>, or unsharded <code>distinct</code>). Subsequent read operations within the session will then utilize a <code>"snapshot"</code> read concern level to read majority-committed data from that timestamp. Set to <b><code>false</code></b> to disable snapshot reads.</p> <p>Snapshot reads require MongoDB 5.0+ and cannot be used with causal consistency, transactions, or write operations. If <code>"snapshot"</code> is <b><code>true</code></b>, <code>"causalConsistency"</code> will default to <b><code>false</code></b>.</p> <p>See Read Concern "snapshot" in the MongoDB manual for more information.</p>  <b><code>false</code></b>
		 * @return MongoDB\Driver\Session <p>Returns a <code>MongoDB\Driver\Session</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-manager.startsession.php
		 * @since mongodb >=1.4.0
		 */
		final public function startSession(array $options = null): \MongoDB\Driver\Session {}
	}

}

namespace MongoDB\Driver\Monitoring {

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandFailedEvent</b> class encapsulates information about a failed command.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-monitoring-commandfailedevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandFailedEvent {

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <code>"find"</code>, <code>"aggregate"</code>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the command's duration in microseconds
		 * <p>The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.</p>
		 * @return int <p>Returns the command's duration in microseconds.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getdurationmicros.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDurationMicros(): int {}

		/**
		 * Returns the Exception associated with the failed command
		 * @return Exception <p>Returns the <code>Exception</code> associated with the failed command.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.geterror.php
		 * @since mongodb >=1.3.0
		 */
		final public function getError(): \Exception {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>Note</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command reply document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command reply document as a <b>stdClass</b> object.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getreply.php
		 * @since mongodb >=1.5.0
		 */
		final public function getReply(): object {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this <code>MongoDB\Driver\Monitoring\CommandFailedEvent</code> with a previous <code>MongoDB\Driver\Monitoring\CommandStartedEvent</code>.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the <code>MongoDB\Driver\Server</code> on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> on which the command was executed.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Returns the load balancer service ID for the command
		 * <p>When the driver is connected to a MongoDB cluster through a load balancer, the service ID corresponds to the <code>serviceId</code> field in the <code>hello</code> command response.</p>
		 * @return ?MongoDB\BSON\ObjectId <p>Returns the load balancer service ID, or <b><code>null</code></b> if the driver is not connected to a load balancer.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandfailedevent.getserviceid.php
		 * @since mongodb >=1.11.0
		 */
		final public function getServiceId(): ?\MongoDB\BSON\ObjectId {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandStartedEvent</b> class encapsulates information about a started command.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-monitoring-commandstartedevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandStartedEvent {

		/**
		 * Returns the command document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command document as a <b>stdClass</b> object.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getcommand.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommand(): object {}

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <code>"find"</code>, <code>"aggregate"</code>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the database on which the command was executed
		 * @return string <p>Returns the database on which the command was executed.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getdatabasename.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDatabaseName(): string {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>Note</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandStartedEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this <code>MongoDB\Driver\Monitoring\CommandStartedEvent</code> with a later <code>MongoDB\Driver\Monitoring\CommandFailedEvent</code> or <code>MongoDB\Driver\Monitoring\CommandSucceededEvent</code>.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the <code>MongoDB\Driver\Server</code> on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> on which the command was executed.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Returns the load balancer service ID for the command
		 * <p>When the driver is connected to a MongoDB cluster through a load balancer, the service ID corresponds to the <code>serviceId</code> field in the <code>hello</code> command response.</p>
		 * @return ?MongoDB\BSON\ObjectId <p>Returns the load balancer service ID, or <b><code>null</code></b> if the driver is not connected to a load balancer.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandstartedevent.getserviceid.php
		 * @since mongodb >=1.11.0
		 */
		final public function getServiceId(): ?\MongoDB\BSON\ObjectId {}
	}

	/**
	 * <p>Classes may implement this interface to register an event subscriber that is notified for each started, successful, and failed command event. See Application Performance Monitoring (APM) for additional information.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-monitoring-commandsubscriber.php
	 * @since mongodb >=1.3.0
	 */
	interface CommandSubscriber {

		/**
		 * Notification method for a failed command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has failed.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandFailedEvent $event <p>An event object encapsulating information about the failed command.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandfailed.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandFailed(\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void;

		/**
		 * Notification method for a started command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has started.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandStartedEvent $event <p>An event object encapsulating information about the started command.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandstarted.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandStarted(\MongoDB\Driver\Monitoring\CommandStartedEvent $event): void;

		/**
		 * Notification method for a successful command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has succeeded.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandSucceededEvent $event <p>An event object encapsulating information about the successful command.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsubscriber.commandsucceeded.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandSucceeded(\MongoDB\Driver\Monitoring\CommandSucceededEvent $event): void;
	}

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandSucceededEvent</b> class encapsulates information about a successful command.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-monitoring-commandsucceededevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandSucceededEvent {

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <code>"find"</code>, <code>"aggregate"</code>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the command's duration in microseconds
		 * <p>The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.</p>
		 * @return int <p>Returns the command's duration in microseconds.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getdurationmicros.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDurationMicros(): int {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>Note</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command reply document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command reply document as a <b>stdClass</b> object.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getreply.php
		 * @since mongodb >=1.3.0
		 */
		final public function getReply(): object {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this <code>MongoDB\Driver\Monitoring\CommandSucceededEvent</code> with a previous <code>MongoDB\Driver\Monitoring\CommandStartedEvent</code>.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the <code>MongoDB\Driver\Server</code> on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> on which the command was executed.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Returns the load balancer service ID for the command
		 * <p>When the driver is connected to a MongoDB cluster through a load balancer, the service ID corresponds to the <code>serviceId</code> field in the <code>hello</code> command response.</p>
		 * @return ?MongoDB\BSON\ObjectId <p>Returns the load balancer service ID, or <b><code>null</code></b> if the driver is not connected to a load balancer.</p>
		 * @link https://php.net/manual/en/mongodb-driver-monitoring-commandsucceededevent.getserviceid.php
		 * @since mongodb >=1.11.0
		 */
		final public function getServiceId(): ?\MongoDB\BSON\ObjectId {}
	}

	/**
	 * <p>Base interface for event subscribers. This is used as a parameter type in the functions <code>MongoDB\Driver\Monitoring\addSubscriber()</code> and <code>MongoDB\Driver\Monitoring\removeSubscriber()</code> and should not be implemented directly.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-monitoring-subscriber.php
	 * @since mongodb >=1.3.0
	 */
	interface Subscriber {
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\Query</b> class is a value object that represents a database query.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-query.php
	 * @since mongodb >=1.0.0
	 */
	final class Query {

		/**
		 * Create a new Query
		 * <p>Constructs a new <code>MongoDB\Driver\Query</code>, which is an immutable value object that represents a database query. The query may then be executed with <code>MongoDB\Driver\Manager::executeQuery()</code>.</p>
		 * @param array|object $filter
		 * @param array $queryOptions <p></p> <b>queryOptions</b>   Option Type Description     allowDiskUse <code>bool</code>  <p>Allows MongoDB to use temporary disk files to store data exceeding the 100 megabyte system memory limit while processing a blocking sort operation.</p>    allowPartialResults <code>bool</code>  <p>For queries against a sharded collection, returns partial results from the mongos if some shards are unavailable instead of throwing an error.</p> <p>Falls back to the deprecated <code>"partial"</code> option if not specified.</p>    awaitData <code>bool</code>  Use in conjunction with the <code>"tailable"</code> option to block a getMore operation on the cursor temporarily if at the end of data rather than returning no data. After a timeout period, the query returns as normal.    batchSize <code>int</code>  <p>The number of documents to return in the first batch. Defaults to 101. A batch size of 0 means that the cursor will be established, but no documents will be returned in the first batch.</p> <p>In versions of MongoDB before 3.2, where queries use the legacy wire protocol OP_QUERY, a batch size of 1 will close the cursor irrespective of the number of matched documents.</p>    collation <code>array</code>|<code>object</code>  <p>Collation allows users to specify language-specific rules for string comparison, such as rules for lettercase and accent marks. When specifying collation, the <code>"locale"</code> field is mandatory; all other collation fields are optional. For descriptions of the fields, see Collation Document.</p> <p>If the collation is unspecified but the collection has a default collation, the operation uses the collation specified for the collection. If no collation is specified for the collection or for the operation, MongoDB uses the simple binary comparison used in prior versions for string comparisons.</p> <p>This option is available in MongoDB 3.4+ and will result in an exception at execution time if specified for an older server version.</p>    comment <code>string</code>  <p>A comment to attach to the query to help interpret and trace query profile data.</p> <p>Falls back to the deprecated <code>"$comment"</code> modifier if not specified.</p>    exhaust <code>bool</code>  <p>Stream the data down full blast in multiple "more" packages, on the assumption that the client will fully read all data queried. Faster when you are pulling a lot of data and know you want to pull it all down. Note: the client is not allowed to not read all the data unless it closes the connection.</p> <p>This option is not supported by the find command in MongoDB 3.2+ and will force the driver to use the legacy wire protocol version (i.e. OP_QUERY).</p>    explain <code>bool</code>  <p>If <b><code>true</code></b>, the returned <code>MongoDB\Driver\Cursor</code> will contain a single document that describes the process and indexes used to return the query.</p> <p>Falls back to the deprecated <code>"$explain"</code> modifier if not specified.</p> <p>This option is not supported by the find command in MongoDB 3.2+ and will only be respected when using the legacy wire protocol version (i.e. OP_QUERY). The explain command should be used on MongoDB 3.0+.</p>    hint <code>string</code>|<code>array</code>|<code>object</code>  <p>Index specification. Specify either the index name as a string or the index key pattern. If specified, then the query system will only consider plans using the hinted index.</p> <p>Falls back to the deprecated <code>"hint"</code> option if not specified.</p>    limit <code>int</code>  <p>The maximum number of documents to return. If unspecified, then defaults to no limit. A limit of 0 is equivalent to setting no limit.</p> <p>A negative limit is will be interpreted as a positive limit with the <code>"singleBatch"</code> option set to <b><code>true</code></b>. This behavior is supported for backwards compatibility, but should be considered deprecated.</p>    max <code>array</code>|<code>object</code>  <p>The <i>exclusive</i> upper bound for a specific index.</p> <p>Falls back to the deprecated <code>"$max"</code> modifier if not specified.</p>    maxAwaitTimeMS <code>int</code>  <p>Positive integer denoting the time limit in milliseconds for the server to block a getMore operation if no data is available. This option should only be used in conjunction with the <code>"tailable"</code> and <code>"awaitData"</code> options.</p>    maxScan <code>int</code>  <p><b>Warning</b></p> <p>This option is deprecated and should not be used.</p>  <p>Positive integer denoting the maximum number of documents or index keys to scan when executing the query.</p> <p>Falls back to the deprecated <code>"$maxScan"</code> modifier if not specified.</p>    maxTimeMS <code>int</code>  <p>The cumulative time limit in milliseconds for processing operations on the cursor. MongoDB aborts the operation at the earliest following interrupt point.</p> <p>Falls back to the deprecated <code>"$maxTimeMS"</code> modifier if not specified.</p>    min <code>array</code>|<code>object</code>  <p>The <i>inclusive</i> lower bound for a specific index.</p> <p>Falls back to the deprecated <code>"$min"</code> modifier if not specified.</p>    modifiers <code>array</code>  Meta operators modifying the output or behavior of a query. Use of these operators is deprecated in favor of named options.    noCursorTimeout <code>bool</code>  Prevents the server from timing out idle cursors after an inactivity period (10 minutes).    oplogReplay <code>bool</code>  <p>Internal use for replica sets. To use oplogReplay, you must include the following condition in the filter:</p> <p></p> <pre>[ 'ts' =&gt; [ '$gte' =&gt; &lt;timestamp&gt; ] ]</pre>   <p><b>Note</b>: This option is deprecated as of the 1.8.0 release.</p>    projection <code>array</code>|<code>object</code>  <p>The projection specification to determine which fields to include in the returned documents.</p> <p>If you are using the ODM functionality to deserialise documents as their original PHP class, make sure that you include the __pclass field in the projection. This is required for the deserialization to work and without it, the driver will return (by default) a <b>stdClass</b> object instead.</p>    readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation. By default, the read concern from the MongoDB Connection URI will be used.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    returnKey <code>bool</code>  <p>If <b><code>true</code></b>, returns only the index keys in the resulting documents. Default value is <b><code>false</code></b>. If <b><code>true</code></b> and the find command does not use an index, the returned documents will be empty.</p> <p>Falls back to the deprecated <code>"$returnKey"</code> modifier if not specified.</p>    showRecordId <code>bool</code>  <p>Determines whether to return the record identifier for each document. If <b><code>true</code></b>, adds a top-level <code>"$recordId"</code> field to the returned documents.</p> <p>Falls back to the deprecated <code>"$showDiskLoc"</code> modifier if not specified.</p>    singleBatch <code>bool</code>  Determines whether to close the cursor after the first batch. Defaults to <b><code>false</code></b>.    skip <code>int</code> Number of documents to skip. Defaults to 0.   snapshot <code>bool</code>  <p><b>Warning</b></p> <p>This option is deprecated and should not be used.</p>  <p>Prevents the cursor from returning a document more than once because of an intervening write operation.</p> <p>Falls back to the deprecated <code>"$snapshot"</code> modifier if not specified.</p>    sort <code>array</code>|<code>object</code>  <p>The sort specification for the ordering of the results.</p> <p>Falls back to the deprecated <code>"$orderby"</code> modifier if not specified.</p>    tailable <code>bool</code> Returns a tailable cursor for a capped collection.
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-query.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(array|object $filter, array $queryOptions = null) {}
	}

	/**
	 * <p><b>MongoDB\Driver\ReadConcern</b> controls the level of isolation for read operations for replica sets and replica set shards. This option requires MongoDB 3.2 or later.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-readconcern.php
	 * @since mongodb >=1.1.0
	 */
	final class ReadConcern implements \MongoDB\BSON\Serializable, \Serializable {

		/**
		 * @var string <p>Default for reads against secondaries when <code>afterClusterTime</code>and <code>level</code> are unspecified.</p> <p>The query returns the instance's most recent data. Provides no guarantee that the data has been written to a majority of the replica set members (i.e. may be rolled back).</p> <p>For unsharded collections (including collections in a standalone deployment or a replica set deployment), <code>"local"</code> and <code>"available"</code> read concerns behave identically.</p> <p>For a sharded cluster, <code>"available"</code> read concern provides greater tolerance for partitions since it does not wait to ensure consistency guarantees. However, a query with <code>"available"</code> read concern may return orphan documents if the shard is undergoing chunk migrations since the <code>"available"</code> read concern, unlike <code>"local"</code> read concern, does not contact the shard's primary nor the config servers for updated metadata.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const AVAILABLE = "available";

		/**
		 * @var string <p>The query returns data that reflects all successful writes issued with a write concern of <code>"majority"</code> <i>and</i> acknowledged prior to the start of the read operation. For replica sets that run with <code>writeConcernMajorityJournalDefault</code> set to <b><code>true</code></b>, linearizable read concern returns data that will never be rolled back.</p> <p>With <code>writeConcernMajorityJournalDefault</code> set to <b><code>false</code></b>, MongoDB will not wait for <code>w: "majority"</code> writes to be durable before acknowledging the writes. As such, <code>"majority"</code> write operations could possibly roll back in the event of a loss of a replica set member.</p> <p>You can specify linearizable read concern for read operations on the primary only.</p> <p>Linearizable read concern guarantees only apply if read operations specify a query filter that uniquely identifies a single document.</p> <b>Tip</b> <p>Always use <code>maxTimeMS</code> with linearizable read concern in case a majority of data bearing members are unavailable. <code>maxTimeMS</code> ensures that the operation does not block indefinitely and instead ensures that the operation returns an error if the read concern cannot be fulfilled.</p>  <p>Linearizable read concern requires MongoDB 3.4.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const LINEARIZABLE = "linearizable";

		/**
		 * @var string <p>Default for reads against primary if <code>level</code> is unspecified and for reads against secondaries if <code>level</code> is unspecified but <code>afterClusterTime</code> is specified.</p> <p>The query returns the instance's most recent data. Provides no guarantee that the data has been written to a majority of the replica set members (i.e. may be rolled back).</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const LOCAL = "local";

		/**
		 * @var string <p>The query returns the instance's most recent data acknowledged as having been written to a majority of members in the replica set.</p> <p>To use read concern level of <code>"majority"</code>, replica sets must use WiredTiger storage engine and election protocol version 1.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const MAJORITY = "majority";

		/**
		 * @var string <p>Read concern <code>"snapshot"</code> is available for multi-document transactions, and starting in MongoDB 5.0, certain read operations outside of multi-document transactions.</p> <p>If the transaction is not part of a causally consistent session, upon transaction commit with write concern <code>"majority"</code>, the transaction operations are guaranteed to have read from a snapshot of majority-committed data.</p> <p>If the transaction is part of a causally consistent session, upon transaction commit with write concern <code>"majority"</code>, the transaction operations are guaranteed to have read from a snapshot of majority-committed data that provides causal consistency with the operation immediately preceding the transaction start.</p> <p>Outside of multi-document transactions, read concern <code>"snapshot"</code> is available on primaries and secondaries for the following read operations: <code>find</code>, <code>aggregate</code>, and <code>distinct</code> (on unsharded collections). All other read commands prohibit <code>"snapshot"</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readconcern.php
		 */
		const SNAPSHOT = "snapshot";

		/**
		 * Create a new ReadConcern
		 * <p>Constructs a new <code>MongoDB\Driver\ReadConcern</code>, which is an immutable value object.</p>
		 * @param string $level <p>The read concern level. You may use, but are not limited to, one of the class constants.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-readconcern.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $level = null) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ReadConcern as BSON.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readconcern.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the ReadConcern's "level" option
		 * @return ?string <p>Returns the ReadConcern's "level" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readconcern.getlevel.php
		 * @since mongodb >=1.0.0
		 */
		final public function getLevel(): ?string {}

		/**
		 * Checks if this is the default read concern
		 * <p>Returns whether this is the default read concern (i.e. no options are specified). This method is primarily intended to be used in conjunction with <code>MongoDB\Driver\Manager::getReadConcern()</code> to determine whether the Manager has been constructed without any read concern options.</p><p>The driver will not include a default read concern in its read operations (e.g. <code>MongoDB\Driver\Manager::executeQuery()</code>) in order order to allow the server to apply its own default. Libraries that access the Manager's read concern to include it in their own read commands should use this method to ensure that default read concerns are left unset.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this is the default read concern and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readconcern.isdefault.php
		 * @since mongodb >=1.3.0
		 */
		final public function isDefault(): bool {}

		/**
		 * Serialize a ReadConcern
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\Driver\ReadConcern</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readconcern.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.7.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a ReadConcern
		 * @param string $serialized <p>The serialized <code>MongoDB\Driver\ReadConcern</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\Driver\ReadConcern</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readconcern.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.7.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
	 * @since mongodb >=1.0.0
	 */
	final class ReadPreference implements \MongoDB\BSON\Serializable, \Serializable {

		/**
		 * @var int <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_PRIMARY = 1;

		/**
		 * @var int <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_PRIMARY_PREFERRED = 5;

		/**
		 * @var int <p>All operations read from the secondary members of the replica set.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_SECONDARY = 2;

		/**
		 * @var int <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_SECONDARY_PREFERRED = 6;

		/**
		 * @var int <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const RP_NEAREST = 10;

		/**
		 * @var string <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const PRIMARY = 'primary';

		/**
		 * @var string <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const PRIMARY_PREFERRED = 'primaryPreferred';

		/**
		 * @var string <p>All operations read from the secondary members of the replica set.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const SECONDARY = 'secondary';

		/**
		 * @var string <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const SECONDARY_PREFERRED = 'secondaryPreferred';

		/**
		 * @var string <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const NEAREST = 'nearest';

		/**
		 * @var int <p>The default value for the <code>"maxStalenessSeconds"</code> option is to specify no limit on maximum staleness, which means that the driver will not consider a secondary's lag when choosing where to direct a read operation.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const NO_MAX_STALENESS = -1;

		/**
		 * @var int <p>The minimum value for the <code>"maxStalenessSeconds"</code> option is 90 seconds. The driver estimates secondaries' staleness by periodically checking the latest write date of each replica set member. Since these checks are infrequent, the staleness estimate is coarse. Thus, the driver cannot enforce a max staleness value of less than 90 seconds.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
		 */
		const SMALLEST_MAX_STALENESS_SECONDS = 90;

		/**
		 * Create a new ReadPreference
		 * <p>Constructs a new <code>MongoDB\Driver\ReadPreference</code>, which is an immutable value object.</p>
		 * @param string|int $mode <p></p> <b>Read preference mode</b>   Value Description     <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> or <code>"primary"</code>  <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY_PREFERRED</code></b> or <code>"primaryPreferred"</code>  <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_SECONDARY</code></b> or <code>"secondary"</code>  <p>All operations read from the secondary members of the replica set.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_SECONDARY_PREFERRED</code></b> or <code>"secondaryPreferred"</code>  <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>    <b><code>MongoDB\Driver\ReadPreference::RP_NEAREST</code></b> or <code>"nearest"</code>  <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @param array $tagSets <p>Tag sets allow you to target read operations to specific members of a replica set. This parameter should be an array of associative arrays, each of which contain zero or more key/value pairs. When selecting a server for a read operation, the driver attempt to select a node having all tags in a set (i.e. the associative array of key/value pairs). If selection fails, the driver will attempt subsequent sets. An empty tag set (<code>array()</code>) will match any node and may be used as a fallback.</p> <p>Tags are not compatible with the <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> mode and, in general, only apply when selecting a secondary member of a set for a read operation. However, the <b><code>MongoDB\Driver\ReadPreference::RP_NEAREST</code></b> mode, when combined with a tag set, selects the matching member with the lowest network latency. This member may be a primary or secondary.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     hedge <code>object</code>|<code>array</code>  <p>Specifies whether to use hedged reads, which are supported by MongoDB 4.4+ for sharded queries.</p> <p>Server hedged reads are available for all non-primary read preferences and are enabled by default when using the <code>"nearest"</code> mode. This option allows explicitly enabling server hedged reads for non-primary read preferences by specifying <code>['enabled' =&gt; true]</code>, or explicitly disabling server hedged reads for the <code>"nearest"</code> read preference by specifying <code>['enabled' =&gt; false]</code>.</p>    maxStalenessSeconds <code>int</code>  <p>Specifies a maximum replication lag, or "staleness", for reads from secondaries. When a secondary's estimated staleness exceeds this value, the driver stops using it for read operations.</p> <p>If specified, the max staleness must be a signed 32-bit integer greater than or equal to <b><code>MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</code></b>.</p> <p>Defaults to <b><code>MongoDB\Driver\ReadPreference::NO_MAX_STALENESS</code></b>, which means that the driver will not consider a secondary's lag when choosing where to direct a read operation.</p> <p>This option is not compatible with the <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> mode. Specifying a max staleness also requires all MongoDB instances in the deployment to be using MongoDB 3.4+. An exception will be thrown at execution time if any MongoDB instances in the deployment are of an older server version.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string|int $mode, array $tagSets = null, array $options = array()) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ReadPreference as BSON.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the ReadPreference's "hedge" option
		 * @return ?object <p>Returns the ReadPreference's "hedge" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.gethedge.php
		 * @since mongodb >=1.8.0
		 */
		final public function getHedge(): ?object {}

		/**
		 * Returns the ReadPreference's "maxStalenessSeconds" option
		 * @return int <p>Returns the ReadPreference's "maxStalenessSeconds" option. If no max staleness has been specified, <b><code>MongoDB\Driver\ReadPreference::NO_MAX_STALENESS</code></b> will be returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.getmaxstalenessseconds.php
		 * @since mongodb >=1.2.0
		 */
		final public function getMaxStalenessSeconds(): int {}

		/**
		 * Returns the ReadPreference's "mode" option
		 * @return int <p>Returns the ReadPreference's "mode" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.getmode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMode(): int {}

		/**
		 * Returns the ReadPreference's "mode" option as a string
		 * @return string <p>Returns the ReadPreference's "mode" option as a string.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.getmodestring.php
		 * @since mongodb >=1.7.0
		 */
		final public function getModeString(): string {}

		/**
		 * Returns the ReadPreference's "tagSets" option
		 * @return array <p>Returns the ReadPreference's "tagSets" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.gettagsets.php
		 * @since mongodb >=1.0.0
		 */
		final public function getTagSets(): array {}

		/**
		 * Serialize a ReadPreference
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\Driver\ReadPreference</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.7.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a ReadPreference
		 * @param string $serialized <p>The serialized <code>MongoDB\Driver\ReadPreference</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\Driver\ReadPreference</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-readpreference.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.7.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * @link https://php.net/manual/en/class.mongodb-driver-server.php
	 * @since mongodb >=1.0.0
	 */
	final class Server {

		/**
		 * @var int <p>Unknown server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_UNKNOWN = 0;

		/**
		 * @var int <p>Standalone server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_STANDALONE = 1;

		/**
		 * @var int <p>Mongos server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_MONGOS = 2;

		/**
		 * @var int <p>Replica set possible primary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>A server may be identified as a possible primary if it has not yet been checked but another memory of the replica set thinks it is the primary.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_POSSIBLE_PRIMARY = 3;

		/**
		 * @var int <p>Replica set primary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_PRIMARY = 4;

		/**
		 * @var int <p>Replica set secondary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_SECONDARY = 5;

		/**
		 * @var int <p>Replica set arbiter server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_ARBITER = 6;

		/**
		 * @var int <p>Replica set other server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>Such servers may be hidden, starting up, or recovering. They cannot be queried, but their hosts lists are useful for discovering the current replica set configuration.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_OTHER = 7;

		/**
		 * @var int <p>Replica set ghost server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>Servers may be identified as such in at least three situations: briefly during server startup; in an uninitialized replica set; or when the server is shunned (i.e. removed from the replica set config). They cannot be queried, nor can their host list be used to discover the current replica set configuration; however, the client may monitor this server in hope that it transitions to a more useful state.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_RS_GHOST = 8;

		/**
		 * @var int <p>Load balancer server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-server.php
		 */
		const TYPE_LOAD_BALANCER = 9;

		/**
		 * Create a new Server (not used)
		 * <p><code>MongoDB\Driver\Server</code> objects are created internally by <code>MongoDB\Driver\Manager</code> when a database connection is established and may be returned by <code>MongoDB\Driver\Manager::getServers()</code> and <code>MongoDB\Driver\Manager::selectServer()</code>.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-server.construct.php
		 * @see MongoDB\Driver\Manager::getServers(), MongoDB\Driver\Manager::selectServer()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * Execute one or more write operations on this server
		 * <p>Executes one or more write operations on this server.</p><p>A <code>MongoDB\Driver\BulkWrite</code> can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <code>"databaseName.collectionName"</code>).</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>The write(s) to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>Returns <code>MongoDB\Driver\WriteResult</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.executebulkwrite.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Execute a database command on this server
		 * <p>Executes the command on this server.</p><p>This method applies no special logic to the command. Although this method accepts <code>"readConcern"</code> and <code>"writeConcern"</code> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p><p><b>Note</b>:  The <code>"readPreference"</code> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.executecommand.php
		 * @see MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query on this server
		 * <p>Executes the query on this server.</p><p><b>Note</b>:  The <code>"readPreference"</code> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $namespace <p>A fully qualified namespace (e.g. <code>"databaseName.collectionName"</code>).</p>
		 * @param \MongoDB\Driver\Query $query <p>The query to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.executequery.php
		 * @see MongoDB\Driver\Manager::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that read (e.g. count) and take the MongoDB server version into account. The <code>"readConcern"</code> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>Note</b>:  The <code>"readPreference"</code> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.executereadcommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeReadCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads and writes on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that read and write (e.g. aggregate) and take the MongoDB server version into account. The <code>"readConcern"</code> and <code>"writeConcern"</code> options will default to the corresponding values from the MongoDB Connection URI.</p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.executereadwritecommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeReadWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that writes on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that write (e.g. drop) and take the MongoDB server version into account. The <code>"writeConcern"</code> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>Note</b>:  This method is not intended to be used to execute insert, update, or delete commands. Users are encouraged to use <code>MongoDB\Driver\Server::executeBulkWrite()</code> for those commands. </p>
		 * @param string $db <p>The name of the database on which to execute the command.</p>
		 * @param \MongoDB\Driver\Command $command <p>The command to execute.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session <code>MongoDB\Driver\Session</code>  <p>A session to associate with the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>     <p><b>Warning</b></p> <p>If you are using a <code>"session"</code> which has a transaction in progress, you cannot specify a <code>"readConcern"</code> or <code>"writeConcern"</code> option. This will result in an <code>MongoDB\Driver\Exception\InvalidArgumentException</code> being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>Returns <code>MongoDB\Driver\Cursor</code> on success.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.executewritecommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Returns the hostname of this server
		 * <p>Returns the hostname of this server.</p>
		 * @return string <p>Returns the hostname of this server.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.gethost.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getHost(): string {}

		/**
		 * Returns an array of information describing this server
		 * <p>Returns an array of information describing the server. This array is derived from the most recent hello command response obtained through server monitoring.</p><p><b>Note</b>:</p><p>When the driver is connected to a load balancer, this method will return the backing server's hello command response from the initial connection handshake. This is in contrast to other methods (e.g. <code>MongoDB\Driver\Server::getType()</code>), which will return information about the load balancer itself.</p>
		 * @return array <p>Returns an array of information describing this server.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo(): array {}

		/**
		 * Returns the latency of this server in milliseconds
		 * <p>Returns the latency of this server in milliseconds. This is the client's measured round trip time of a <code>hello</code> command.</p>
		 * @return ?integer <p>Returns the latency of this server in milliseconds, or <b><code>null</code></b> if no latency has been measured (e.g. client is connected to a load balancer).</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.getlatency.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getLatency(): ?int {}

		/**
		 * Returns the port on which this server is listening
		 * <p>Returns the port on which this server is listening.</p>
		 * @return int <p>Returns the port on which this server is listening.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.getport.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getPort(): int {}

		/**
		 * Returns an array of tags describing this server in a replica set
		 * <p>Returns an <code>array</code> of tags used to describe this server in a replica set. The array will contain zero or more <code>string</code> key and value pairs.</p>
		 * @return array <p>Returns an <code>array</code> of tags used to describe this server in a replica set.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.gettags.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getTags(): array {}

		/**
		 * Returns an integer denoting the type of this server
		 * <p>Returns an <code>int</code> denoting the type of this server. The value will correlate with a <code>MongoDB\Driver\Server</code> constant.</p>
		 * @return int <p>Returns an <code>int</code> denoting the type of this server.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.gettype.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getType(): int {}

		/**
		 * Checks if this server is an arbiter member of a replica set
		 * <p>Returns whether this server is an arbiter member of a replica set.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this server is an arbiter member of a replica set, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.isarbiter.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isArbiter(): bool {}

		/**
		 * Checks if this server is a hidden member of a replica set
		 * <p>Returns whether this server is a hidden member of a replica set.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this server is a hidden member of a replica set, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.ishidden.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isHidden(): bool {}

		/**
		 * Checks if this server is a passive member of a replica set
		 * <p>Returns whether this server is a passive member of a replica set (i.e. its priority is <code>0</code>).</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this server is a passive member of a replica set, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.ispassive.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isPassive(): bool {}

		/**
		 * Checks if this server is a primary member of a replica set
		 * <p>Returns whether this server is a primary member of a replica set.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this server is a primary member of a replica set, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.isprimary.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isPrimary(): bool {}

		/**
		 * Checks if this server is a secondary member of a replica set
		 * <p>Returns whether this server is a secondary member of a replica set.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this server is a secondary member of a replica set, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-server.issecondary.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isSecondary(): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.mongodb-driver-serverapi.php
	 * @since mongodb >=1.10.0
	 */
	final class ServerApi implements \MongoDB\BSON\Serializable, \Serializable {

		/**
		 * Create a new ServerApi instance
		 * <p>Creates a new <code>MongoDB\Driver\ServerApi</code> instance used to declare an API version when creating a <code>MongoDB\Driver\Manager</code>.</p>
		 * @param string $version
		 * @param bool $strict
		 * @param bool $deprecationErrors
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-serverapi.construct.php
		 * @since mongodb >=1.10.0
		 */
		final public function __construct(string $version, bool $strict = null, bool $deprecationErrors = null) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ServerApi as BSON.</p>
		 * @link https://php.net/manual/en/mongodb-driver-serverapi.bsonserialize.php
		 * @since mongodb >=1.10.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Serialize a ServerApi
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\Driver\ServerApi</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-serverapi.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.10.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a ServerApi
		 * @param string $serialized <p>The serialized <code>MongoDB\Driver\ServerApi</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\Driver\ServerApi</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-serverapi.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.10.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Session</b> class represents a client session and is returned by <code>MongoDB\Driver\Manager::startSession()</code>. Commands, queries, and write operations may then be associated the session.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-session.php
	 * @since mongodb >=1.4.0
	 */
	final class Session {

		/**
		 * @var string <p>There is no transaction in progress.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-session.php
		 */
		const TRANSACTION_NONE = 'none';

		/**
		 * @var string <p>A transaction has been started, but no operation has been sent to the server.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-session.php
		 */
		const TRANSACTION_STARTING = 'starting';

		/**
		 * @var string <p>A transaction is in progress.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-session.php
		 */
		const TRANSACTION_IN_PROGRESS = 'in_progress';

		/**
		 * @var string <p>The transaction was committed.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-session.php
		 */
		const TRANSACTION_COMMITTED = 'committed';

		/**
		 * @var string <p>The transaction was aborted.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-session.php
		 */
		const TRANSACTION_ABORTED = 'aborted';

		/**
		 * Create a new Session (not used)
		 * <p><code>MongoDB\Driver\Session</code> objects are returned by <code>MongoDB\Driver\Manager::startSession()</code> and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-session.construct.php
		 * @see MongoDB\Driver\Manager::startSession()
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Aborts a transaction
		 * <p>Terminates the multi-document transaction and rolls back any data changes made by the operations within the transaction. That is, the transaction ends without saving any of the changes made by the operations in the transaction.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.aborttransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function abortTransaction(): void {}

		/**
		 * Advances the cluster time for this session
		 * <p>Advances the cluster time for this session. If the cluster time is less than or equal to the session's current cluster time, this function is a no-op.</p><p>By using this method in conjunction with <code>MongoDB\Driver\Session::advanceOperationTime()</code> to copy the cluster and operation times from another session, you can ensure that operations in this session are causally consistent with the last operation in the other session.</p>
		 * @param array|object $clusterTime <p>The cluster time is a document containing a logical timestamp and server signature. Typically, this value will be obtained by calling <code>MongoDB\Driver\Session::getClusterTime()</code> on another session object.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.advanceclustertime.php
		 * @since mongodb >=1.4.0
		 */
		final public function advanceClusterTime(array|object $clusterTime): void {}

		/**
		 * Advances the operation time for this session
		 * <p>Advances the operation time for this session. If the operation time is less than or equal to the session's current operation time, this function is a no-op.</p><p>By using this method in conjunction with <code>MongoDB\Driver\Session::advanceClusterTime()</code> to copy the operation and cluster times from another session, you can ensure that operations in this session are causally consistent with the last operation in the other session.</p>
		 * @param \MongoDB\BSON\TimestampInterface $operationTime <p>The operation time is a logical timestamp. Typically, this value will be obtained by calling <code>MongoDB\Driver\Session::getOperationTime()</code> on another session object.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.advanceoperationtime.php
		 * @since mongodb >=1.4.0
		 */
		final public function advanceOperationTime(\MongoDB\BSON\TimestampInterface $operationTime): void {}

		/**
		 * Commits a transaction
		 * <p>Saves the changes made by the operations in the multi-document transaction and ends the transaction. Until the commit, none of the data changes made from within the transaction are visible outside the transaction.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.committransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function commitTransaction(): void {}

		/**
		 * Terminates a session
		 * <p>This method closes an existing session. If a transaction was associated with this session, the transaction will be aborted. After calling this method, applications should not invoke other methods on the session.</p><p><b>Note</b>:  Sessions are also closed during garbage collection. It should not be necessary to call this method under normal circumstances. </p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.endsession.php
		 * @since mongodb >=1.5.0
		 */
		final public function endSession(): void {}

		/**
		 * Returns the cluster time for this session
		 * <p>Returns the cluster time for this session. If the session has not been used for any operation and <code>MongoDB\Driver\Session::advanceClusterTime()</code> has not been called, the cluster time will be <b><code>null</code></b>.</p>
		 * @return ?object <p>Returns the cluster time for this session, or <b><code>null</code></b> if the session has no cluster time.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.getclustertime.php
		 * @since mongodb >=1.4.0
		 */
		final public function getClusterTime(): ?object {}

		/**
		 * Returns the logical session ID for this session
		 * <p>Returns the logical session ID for this session, which may be used to identify this session's operations on the server.</p>
		 * @return object <p>Returns the logical session ID for this session.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.getlogicalsessionid.php
		 * @since mongodb >=1.4.0
		 */
		final public function getLogicalSessionId(): object {}

		/**
		 * Returns the operation time for this session
		 * <p>Returns the operation time for this session. If the session has not been used for any operation and <code>MongoDB\Driver\Session::advanceOperationTime()</code> has not been called, the operation time will be <b><code>null</code></b></p>
		 * @return ?MongoDB\BSON\Timestamp <p>Returns the operation time for this session, or <b><code>null</code></b> if the session has no operation time.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.getoperationtime.php
		 * @since mongodb >=1.4.0
		 */
		final public function getOperationTime(): ?\MongoDB\BSON\Timestamp {}

		/**
		 * Returns the server to which this session is pinned
		 * <p>Returns the <code>MongoDB\Driver\Server</code> to which this session is pinned. If the session is not pinned to a server, <b><code>null</code></b> will be returned.</p><p>Session pinning is primarily used for sharded transactions, as all commands within a sharded transaction must be sent to the same mongos instance. This method is intended to be used by libraries built atop the extension to allow use of a pinned server instead of invoking server selection.</p>
		 * @return ?MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> to which this session is pinned, or <b><code>null</code></b> if the session is not pinned to any server.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.getserver.php
		 * @since mongodb >=1.6.0
		 */
		final public function getServer(): ?\MongoDB\Driver\Server {}

		/**
		 * Returns options for the currently running transaction
		 * <p>Returns options for the currently running transaction.</p>
		 * @return ?array <p>Returns a <code>array</code> containing current transaction options, or <b><code>null</code></b> if no transaction is running.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.gettransactionoptions.php
		 * @since mongodb >=1.7.0
		 */
		final public function getTransactionOptions(): ?array {}

		/**
		 * Returns the current transaction state for this session
		 * <p>Returns the transaction state for this session.</p>
		 * @return string <p>Returns the current transaction state for this session.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.gettransactionstate.php
		 * @since mongodb >=1.7.0
		 */
		final public function getTransactionState(): string {}

		/**
		 * Returns whether a multi-document transaction is in progress
		 * <p>Returns whether a multi-document transaction is currently in progress for this session. A transaction is considered "in progress" if it has been started but has not been committed or aborted.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if a transaction is currently in progress for this session, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.isintransaction.php
		 * @since mongodb >=1.6.0
		 */
		final public function isInTransaction(): bool {}

		/**
		 * Starts a transaction
		 * <p>Starts a multi-document transaction associated with the session. At any given time, you can have at most one open transaction for a session. After starting a transaction, the session object must be passed to each operation via the <code>"session"</code> option (e.g. <code>MongoDB\Driver\Manager::executeBulkWrite()</code>) in order to associate that operation with the transaction.</p><p>Transactions can be committed through <code>MongoDB\Driver\Session::commitTransaction()</code>, and aborted with <code>MongoDB\Driver\Session::abortTransaction()</code>. Transactions are also automatically aborted when the session is closed from garbage collection or by explicitly calling <code>MongoDB\Driver\Session::endSession()</code>.</p>
		 * @param array $options <p>Options can be passed as argument to this method. Each element in this options array overrides the corresponding option from the <code>"defaultTransactionOptions"</code> option, if set when starting the session with <code>MongoDB\Driver\Manager::startSession()</code>.</p> <p></p> <b>options</b>   Option Type Description     maxCommitTimeMS integer  <p>The maximum amount of time in milliseconds to allow a single <code>commitTransaction</code> command to run.</p> <p>If specified, <code>maxCommitTimeMS</code> must be a signed 32-bit integer greater than or equal to zero.</p>    readConcern <code>MongoDB\Driver\ReadConcern</code>  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference <code>MongoDB\Driver\ReadPreference</code>  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern <code>MongoDB\Driver\WriteConcern</code>  <p>A write concern to apply to the operation.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/mongodb-driver-session.starttransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function startTransaction(array $options = null): void {}
	}

	/**
	 * <p><b>MongoDB\Driver\WriteConcern</b> describes the level of acknowledgement requested from MongoDB for write operations to a standalone <code>mongod</code> or to replica sets or to sharded clusters. In sharded clusters, <code>mongos</code> instances will pass the write concern on to the shards.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-writeconcern.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteConcern implements \MongoDB\BSON\Serializable, \Serializable {

		/**
		 * @var string <p>Majority of all the members in the set; arbiters, non-voting members, passive members, hidden members and delayed members are all included in the definition of majority write concern.</p>
		 * @link https://php.net/manual/en/class.mongodb-driver-writeconcern.php
		 */
		const MAJORITY = "majority";

		/**
		 * Create a new WriteConcern
		 * <p>Constructs a new <code>MongoDB\Driver\WriteConcern</code>, which is an immutable value object.</p>
		 * @param string|int $w <p></p> <b>Write concern</b>   Value Description     1  Requests acknowledgement that the write operation has propagated to the standalone <code>mongod</code> or the primary in a replica set. This is the default write concern for MongoDB.    0  Requests no acknowledgment of the write operation. However, this may return information about socket exceptions and networking errors to the application.    &lt;integer greater than 1&gt;  Numbers greater than 1 are valid only for replica sets to request acknowledgement from specified number of members, including the primary.    <b><code>MongoDB\Driver\WriteConcern::MAJORITY</code></b>  <p>Requests acknowledgment that write operations have propagated to the majority of voting nodes, including the primary, and have been written to the on-disk journal for these nodes.</p> <p>Prior to MongoDB 3.0, this refers to the majority of replica set members (not just voting nodes).</p>    string  A string value is interpereted as a tag set. Requests acknowledgement that the write operations have propagated to a replica set member with the specified tag.
		 * @param int $wtimeout <p>How long to wait (in milliseconds) for secondaries before failing.</p> <p><code>wtimeout</code> causes write operations to return with an error (<b>WriteConcernError</b>) after the specified limit, even if the required write concern will eventually succeed. When these write operations return, MongoDB does not undo successful data modifications performed before the write concern exceeded the <code>wtimeout</code> time limit.</p> <p>If specified, <code>wtimeout</code> must be a signed 64-bit integer greater than or equal to zero.</p> <p></p> <b>Write concern timeout</b>   Value Description     0 Block indefinitely. This is the default.   &lt;integer greater than 0&gt;  Milliseconds to wait until returning.
		 * @param bool $journal <p>Wait until mongod has applied the write to the journal.</p>
		 * @return self
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string|int $w, int $wtimeout = null, bool $journal = null) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the WriteConcern as BSON.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the WriteConcern's "journal" option
		 * @return ?bool <p>Returns the WriteConcern's "journal" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.getjournal.php
		 * @since mongodb >=1.0.0
		 */
		final public function getJournal(): ?bool {}

		/**
		 * Returns the WriteConcern's "w" option
		 * @return string|int|null <p>Returns the WriteConcern's "w" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.getw.php
		 * @since mongodb >=1.0.0
		 */
		final public function getW(): string|int|null {}

		/**
		 * Returns the WriteConcern's "wtimeout" option
		 * @return int|MongoDB\BSON\Int64 <p>Returns the WriteConcern's "wtimeout" option.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.getwtimeout.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWtimeout(): int|\MongoDB\BSON\Int64 {}

		/**
		 * Checks if this is the default write concern
		 * <p>Returns whether this is the default write concern (i.e. no options are specified). This method is primarily intended to be used in conjunction with <code>MongoDB\Driver\Manager::getWriteConcern()</code> to determine whether the Manager has been constructed without any write concern options.</p><p>The driver will not include a default write concern in its write operations (e.g. <code>MongoDB\Driver\Manager::executeBulkWrite()</code>) in order to allow the server to apply its own default, which may have been modified. Libraries that access the Manager's write concern to include it in their own write commands should use this method to ensure that default write concerns are left unset.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if this is the default write concern and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.isdefault.php
		 * @since mongodb >=1.3.0
		 */
		final public function isDefault(): bool {}

		/**
		 * Serialize a WriteConcern
		 * @return string <p>Returns the serialized representation of the <code>MongoDB\Driver\WriteConcern</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.7.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a WriteConcern
		 * @param string $serialized <p>The serialized <code>MongoDB\Driver\WriteConcern</code>.</p>
		 * @return void <p>Returns the unserialized <code>MongoDB\Driver\WriteConcern</code>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcern.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.7.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteConcernError</b> class encapsulates information about a write concern error and may be returned by <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code>.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-writeconcernerror.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteConcernError {

		/**
		 * Returns the WriteConcernError's error code
		 * @return int <p>Returns the WriteConcernError's error code.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcernerror.getcode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getCode(): int {}

		/**
		 * Returns metadata document for the WriteConcernError
		 * @return ?object <p>Returns the metadata document for the WriteConcernError, or <b><code>null</code></b> if no metadata is available.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcernerror.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo(): ?object {}

		/**
		 * Returns the WriteConcernError's error message
		 * @return string <p>Returns the WriteConcernError's error message.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeconcernerror.getmessage.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMessage(): string {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteError</b> class encapsulates information about a write error and may be returned as an array element from <code>MongoDB\Driver\WriteResult::getWriteErrors()</code>.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-writeerror.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteError {

		/**
		 * Returns the WriteError's error code
		 * @return int <p>Returns the WriteError's error code.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeerror.getcode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getCode(): int {}

		/**
		 * Returns the index of the write operation corresponding to this WriteError
		 * @return int <p>Returns the index of the write operation (from <code>MongoDB\Driver\BulkWrite</code>) corresponding to this WriteError.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeerror.getindex.php
		 * @since mongodb >=1.0.0
		 */
		final public function getIndex(): int {}

		/**
		 * Returns metadata document for the WriteError
		 * @return ?object <p>Returns the metadata document for the WriteError, or <b><code>null</code></b> if no metadata is available.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeerror.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo(): ?object {}

		/**
		 * Returns the WriteError's error message
		 * @return string <p>Returns the WriteError's error message.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeerror.getmessage.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMessage(): string {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteResult</b> class encapsulates information about an executed <code>MongoDB\Driver\BulkWrite</code> and may be returned by <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
	 * @link https://php.net/manual/en/class.mongodb-driver-writeresult.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteResult {

		/**
		 * Returns the number of documents deleted
		 * @return ?int <p>Returns the number of documents deleted, or <b><code>null</code></b> if the write was not acknowledged.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getdeletedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getDeletedCount(): ?int {}

		/**
		 * Returns the number of documents inserted (excluding upserts)
		 * @return ?int <p>Returns the number of documents inserted (excluding upserts), or <b><code>null</code></b> if the write was not acknowledged.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getinsertedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInsertedCount(): ?int {}

		/**
		 * Returns the number of documents selected for update
		 * <p>If the update operation results in no change to the document (e.g. setting the value of a field to its current value), the matched count may be greater than the value returned by <code>MongoDB\Driver\WriteResult::getModifiedCount()</code>.</p>
		 * @return ?int <p>Returns the number of documents selected for update, or <b><code>null</code></b> if the write was not acknowledged.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getmatchedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMatchedCount(): ?int {}

		/**
		 * Returns the number of existing documents updated
		 * <p>If the update operation results in no change to the document (e.g. setting the value of a field to its current value), the modified count may be less than the value returned by <code>MongoDB\Driver\WriteResult::getMatchedCount()</code>.</p>
		 * @return ?int <p>Returns the number of existing documents updated, or <b><code>null</code></b> if the write was not acknowledged.</p><p>The modified count is not available on versions of MongoDB before 2.6, which used the legacy wire protocol version (i.e. OP_UPDATE). If this is the case, the modified count will also be <b><code>null</code></b>.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getmodifiedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getModifiedCount(): ?int {}

		/**
		 * Returns the server associated with this write result
		 * <p>Returns the <code>MongoDB\Driver\Server</code> associated with this write result. This is the server that executed the <code>MongoDB\Driver\BulkWrite</code>.</p>
		 * @return MongoDB\Driver\Server <p>Returns the <code>MongoDB\Driver\Server</code> associated with this write result.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getserver.php
		 * @since mongodb >=1.0.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Returns the number of documents inserted by an upsert
		 * @return ?int <p>Returns the number of documents inserted by an upsert.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getupsertedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getUpsertedCount(): ?int {}

		/**
		 * Returns an array of identifiers for upserted documents
		 * @return array <p>Returns an array of identifiers (i.e. <code>"_id"</code> field values) for upserted documents. The array keys will correspond to the index of the write operation (from <code>MongoDB\Driver\BulkWrite</code>) responsible for the upsert.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getupsertedids.php
		 * @since mongodb >=1.0.0
		 */
		final public function getUpsertedIds(): array {}

		/**
		 * Returns any write concern error that occurred
		 * @return ?MongoDB\Driver\WriteConcernError <p>Returns a <code>MongoDB\Driver\WriteConcernError</code> if a write concern error was encountered during the write operation, and <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getwriteconcernerror.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcernError(): ?\MongoDB\Driver\WriteConcernError {}

		/**
		 * Returns any write errors that occurred
		 * @return array <p>Returns an array of <code>MongoDB\Driver\WriteError</code> objects for any write errors encountered during the write operation. The array will be empty if no write errors occurred.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.getwriteerrors.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteErrors(): array {}

		/**
		 * Returns whether the write was acknowledged
		 * <p>If the write is acknowledged, other count fields will be available on the <code>MongoDB\Driver\WriteResult</code> object.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the write was acknowledged, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/mongodb-driver-writeresult.isacknowledged.php
		 * @since mongodb >=1.0.0
		 */
		final public function isAcknowledged(): bool {}
	}

}

namespace MongoDB\BSON {

	/**
	 * Returns the BSON representation of a JSON value
	 * <p>Converts an extended JSON string to its BSON representation.</p>
	 * @param string $json <p>JSON value to be converted.</p>
	 * @return string <p>The serialized BSON document as a binary string.</p>
	 * @link https://php.net/manual/en/function.mongodb.bson-fromjson.php
	 * @see MongoDB\BSON\toJSON()
	 * @since mongodb >=1.0.0
	 */
	function fromJSON(string $json): string {}

	/**
	 * Returns the BSON representation of a PHP value
	 * <p>Serializes a PHP array or object (e.g. document) to its BSON representation. The returned binary string will describe a BSON document.</p>
	 * @param array|object $value
	 * @return string <p>The serialized BSON document as a binary string.</p>
	 * @link https://php.net/manual/en/function.mongodb.bson-fromphp.php
	 * @see MongoDB\BSON\toPHP()
	 * @since mongodb >=1.0.0
	 */
	function fromPHP(array|object $value): string {}

	/**
	 * Returns the Canonical Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its Canonical Extended JSON representation. The canonical format prefers type fidelity at the expense of concise output and is most suited for producing output that can be converted back to BSON without any loss of type information (e.g. numeric types will remain differentiated).</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link https://php.net/manual/en/function.mongodb.bson-tocanonicalextendedjson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
	 * @since mongodb >=1.3.0
	 */
	function toCanonicalExtendedJSON(string $bson): string {}

	/**
	 * Returns the Legacy Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its Legacy Extended JSON representation.</p><p><b>Note</b>:  There exist several JSON formats for representing BSON. This function implements the "strict mode" defined in MongoDB Extended JSON, which has been superseded by the canonical and relaxed formats defined in the Extended JSON Specification and implemented by <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> and <code>MongoDB\BSON\toRelaxedExtendedJSON()</code>, respectively. </p><p>JSON does not support <b><code>NAN</code></b> and <b><code>INF</code></b> and MongoDB's Legacy Extended JSON format does not define an alternative representation for these values (libbson will output <code>nan</code> and <code>inf</code> literals, which may not be parsed as valid JSON). If you are working with BSON that may contain non-finite numbers, please use <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> or <code>MongoDB\BSON\toRelaxedExtendedJSON()</code>.</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link https://php.net/manual/en/function.mongodb.bson-tojson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
	 * @since mongodb >=1.0.0
	 */
	function toJSON(string $bson): string {}

	/**
	 * Returns the PHP representation of a BSON value
	 * <p>Unserializes a BSON document (i.e. binary string) to its PHP representation. The <code>typeMap</code> paramater may be used to control the PHP types used for converting BSON arrays and documents (both root and embedded).</p><p>BSON documents can technically contain duplicate keys because documents are stored as a list of key-value pairs; however, applications should refrain from generating documents with duplicate keys as server and driver behavior may be undefined. Since PHP objects and arrays cannot have duplicate keys, data could also be lost when decoding a BSON document with duplicate keys.</p>
	 * @param string $bson <p>BSON value to be unserialized.</p>
	 * @param array $typeMap <p>Type map configuration.</p>
	 * @return array|object <p>The unserialized PHP value.</p>
	 * @link https://php.net/manual/en/function.mongodb.bson-tophp.php
	 * @see MongoDB\BSON\fromPHP()
	 * @since mongodb >=1.0.0
	 */
	function toPHP(string $bson, array $typeMap = array()): array|object {}

	/**
	 * Returns the Relaxed Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its Relaxed Extended JSON representation. The relaxed format prefers use of JSON type primitives at the expense of type fidelity and is most suited for producing output that can be easily consumed by web APIs and humans.</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link https://php.net/manual/en/function.mongodb.bson-torelaxedextendedjson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toCanonicalExtendedJSON()
	 * @since mongodb >=1.3.0
	 */
	function toRelaxedExtendedJSON(string $bson): string {}

}

namespace MongoDB\Driver\Monitoring {

	/**
	 * Registers a monitoring event subscriber globally
	 * <p>Registers a monitoring event subscriber globally. The subscriber will be notified of all events in the driver for any Manager.</p><p><b>Note</b>:  If <code>subscriber</code> is already registered globally, this function is a no-op. If <code>subscriber</code> is also registered with one or more Managers, it will still only be notified once of each event for each Manager. </p>
	 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber to register globally.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.mongodb.driver.monitoring.addsubscriber.php
	 * @see MongoDB\Driver\Monitoring\removeSubscriber(), MongoDB\Driver\Manager::addSubscriber()
	 * @since mongodb >=1.3.0
	 */
	function addSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

	/**
	 * Unregisters a monitoring event subscriber globally
	 * <p>Unregisters a monitoring event subscriber globally.</p><p><b>Note</b>:  If <code>subscriber</code> is not already registered globally, this function is a no-op. </p>
	 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber to unregister globally.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.mongodb.driver.monitoring.removesubscriber.php
	 * @see MongoDB\Driver\Monitoring\addSubscriber(), MongoDB\Driver\Manager::removeSubscriber()
	 * @since mongodb >=1.3.0
	 */
	function removeSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

}
