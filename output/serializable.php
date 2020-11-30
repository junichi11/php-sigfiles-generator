<?php



namespace {

	/**
	 * <p>Interface for customized serializing.</p>
	 * <p>Classes that implement this interface no longer support __sleep() and __wakeup(). The method serialize is called whenever an instance needs to be serialized. This does not invoke __destruct() or have any other side effect unless programmed inside the method. When the data is unserialized the class is known and the appropriate unserialize() method is called as a constructor instead of calling __construct(). If you need to execute the standard constructor you may do so in the method.</p>
	 * @link http://php.net/manual/en/class.serializable.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	interface Serializable {

		/**
		 * String representation of object
		 * <p>Should return the string representation of the object.</p><p><b>Note</b>:</p><p>This method acts as the destructor of the object. The __destruct() method will <i>not</i> be called after this method.</p>
		 * @return string <p>Returns the string representation of the object or <b><code>NULL</code></b></p>
		 * @link http://php.net/manual/en/serializable.serialize.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function serialize(): string;

		/**
		 * Constructs the object
		 * <p>Called during unserialization of the object.</p><p><b>Note</b>:</p><p>This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method.</p>
		 * @param string $serialized <p>The string representation of the object.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link http://php.net/manual/en/serializable.unserialize.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function unserialize(string $serialized): void;
	}

}
