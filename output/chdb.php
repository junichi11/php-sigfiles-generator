<?php



namespace {

	/**
	 * <p>Represents a loaded chdb file.</p>
	 * @link http://php.net/manual/en/class.chdb.php
	 * @since PECL chdb >= 0.1.0
	 */
	class chdb {

		/**
		 * Creates a chdb instance
		 * <p>Loads a chdb file, by mapping it into memory.</p><p><b>Note</b>:</p><p>While some validity checks are performed on the specified file, they are mostly there to avoid the possibility of common mistakes (for example, loading a file which is not a chdb database, or that is somehow incompatible with the current system). A maliciously crafted chdb file can thus be dangerous if loaded, so chdb files should be trusted and treated with the same security protections used for PHP shared libraries.</p>
		 * @param string $pathname <p>The name of the file to load.</p>
		 * @return self
		 * @link http://php.net/manual/en/chdb.construct.php
		 * @since PECL chdb >= 0.1.0
		 */
		public function __construct(string $pathname) {}

		/**
		 * Gets the value associated with a key
		 * <p>Gets the value associated with a key from a chdb database.</p>
		 * @param string $key <p>The key for which to get the value.</p>
		 * @return string <p>Returns a string containing the value associated with the given <code>key</code>, or <b><code>NULL</code></b> if not found.</p>
		 * @link http://php.net/manual/en/chdb.get.php
		 * @since PECL chdb >= 0.1.0
		 */
		public function get(string $key): string {}
	}

	/**
	 * Creates a chdb file
	 * <p><b>chdb_create()</b> creates a chdb file containing the specified key-value pairs.</p><p><b>Note</b>:</p><p>chdb files are not portable across little-endian and big-endian environments. Except for that, they are portable across different architectures. Also compatibility across different versions of chdb is not guaranteed.</p>
	 * @param string $pathname <p>The name of the file to create.</p> <p>If a file with the same name already exists, it is overwritten.</p>
	 * @param array $data <p>An array containing the key-value pairs to store in the chdb file.</p> <p>Keys and values are converted to strings before being written to the file, as chdb only support the string type. Note that binary strings are supported as well, both as keys and values.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.chdb-create.php
	 * @since PECL chdb >= 0.1.0
	 */
	function chdb_create(string $pathname, array $data): bool {}

}
