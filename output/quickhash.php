<?php



namespace {

	/**
	 * <p>This class wraps around a hash containing integer numbers, where the values are also integer numbers. Hashes are also available as implementation of the ArrayAccess interface.</p>
	 * <p>Hashes can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.</p>
	 * @link https://php.net/manual/en/class.quickhashinthash.php
	 * @since PECL quickhash >= Unknown
	 */
	class QuickHashIntHash {

		/**
		 * @var int <p>If enabled, adding duplicate elements to a set (through either add() or loadFromFile()) will result in those elements to be dropped from the set. This will take up extra time, so only used when it is required.</p>
		 * @link https://php.net/manual/en/class.quickhashinthash.php
		 */
		const CHECK_FOR_DUPES = 1;

		/**
		 * @var int <p>Disables the use of PHP's internal memory manager for internal set structures. With this option enabled, internal allocations will not count towards the memory_limit settings.</p>
		 * @link https://php.net/manual/en/class.quickhashinthash.php
		 */
		const DO_NOT_USE_ZEND_ALLOC = 2;

		/**
		 * @var int <p>Selects to not use a hashing function, but merely use a modulo to find the bucket list index. This is not faster than normal hashing, and gives more collisions.</p>
		 * @link https://php.net/manual/en/class.quickhashinthash.php
		 */
		const HASHER_NO_HASH = 256;

		/**
		 * @var int <p>This is the default hashing function to turn the integer hashes into bucket list indexes.</p>
		 * @link https://php.net/manual/en/class.quickhashinthash.php
		 */
		const HASHER_JENKINS1 = 512;

		/**
		 * @var int <p>Selects a variant hashing algorithm.</p>
		 * @link https://php.net/manual/en/class.quickhashinthash.php
		 */
		const HASHER_JENKINS2 = 1024;

		/**
		 * Creates a new QuickHashIntHash object
		 * <p>This constructor creates a new QuickHashIntHash. The size is the amount of bucket lists to create. The more lists there are, the less collisions you will have. Options are also supported.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 64 to 4194304.</p>
		 * @param int $options <p>The options that you can pass in are: QuickHashIntHash::CHECK_FOR_DUPES, which makes sure no duplicate entries are added to the hash; QuickHashIntHash::DO_NOT_USE_ZEND_ALLOC to not use PHP's internal memory manager as well as one of QuickHashIntHash::HASHER_NO_HASH, QuickHashIntHash::HASHER_JENKINS1 or QuickHashIntHash::HASHER_JENKINS2. These last three configure which hashing algorithm to use. All options can be combined using bitmasks.</p>
		 * @return self <p>Returns a new QuickHashIntHash object.</p>
		 * @link https://php.net/manual/en/quickhashinthash.construct.php
		 * @since PECL quickhash >= Unknown
		 */
		public function __construct(int $size, int $options = NULL) {}

		/**
		 * This method adds a new entry to the hash
		 * <p>This method adds a new entry to the hash, and returns whether the entry was added. Entries are by default always added unless QuickHashIntHash::CHECK_FOR_DUPES has been passed when the hash was created.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @param int $value <p>The optional value of the entry to add. If no value is specified, <code>1</code> will be used.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was added, and <b><code>FALSE</code></b> if the entry was not added.</p>
		 * @link https://php.net/manual/en/quickhashinthash.add.php
		 * @since PECL quickhash >= Unknown
		 */
		public function add(int $key, int $value = NULL): bool {}

		/**
		 * This method deletes am entry from the hash
		 * <p>This method deletes an entry from the hash, and returns whether the entry was deleted or not. Associated memory structures will not be freed immediately, but rather when the hash itself is freed.</p><p>Elements can not be deleted when the hash is used in an iterator. The method will not throw an exception, but simply return <b><code>FALSE</code></b> like would happen with any other deletion failure.</p>
		 * @param int $key <p>The key of the entry to delete.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was deleted, and <b><code>FALSE</code></b> if the entry was not deleted.</p>
		 * @link https://php.net/manual/en/quickhashinthash.delete.php
		 * @since PECL quickhash >= Unknown
		 */
		public function delete(int $key): bool {}

		/**
		 * This method checks whether a key is part of the hash
		 * <p>This method checks whether an entry with the provided key exists in the hash.</p>
		 * @param int $key <p>The key of the entry to check for whether it exists in the hash.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> when the entry was found, or <b><code>FALSE</code></b> when the entry is not found.</p>
		 * @link https://php.net/manual/en/quickhashinthash.exists.php
		 * @since PECL quickhash >= Unknown
		 */
		public function exists(int $key): bool {}

		/**
		 * This method retrieves a value from the hash by its key
		 * <p>This method retrieves a value from the hash by its key.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @return int <p>The value if the key exists, or <b><code>NULL</code></b> if the key wasn't part of the hash.</p>
		 * @link https://php.net/manual/en/quickhashinthash.get.php
		 * @since PECL quickhash >= Unknown
		 */
		public function get(int $key): int {}

		/**
		 * Returns the number of elements in the hash
		 * <p>Returns the number of elements in the hash.</p>
		 * @return int <p>The number of elements in the hash.</p>
		 * @link https://php.net/manual/en/quickhashinthash.getsize.php
		 * @since PECL quickhash >= Unknown
		 */
		public function getSize(): int {}

		/**
		 * This factory method creates a hash from a file
		 * <p>This factory method creates a new hash from a definition file on disk. The file format consists of a signature 'QH\0x11\0', the number of elements as a 32 bit signed integer in system Endianness, followed by 32 bit signed integers packed together in the Endianness that the system that the code runs on uses. For each hash element there are two 32 bit signed integers stored. The first of each element is the key, and the second is the value belonging to the key. An example could be:</p><p></p><p><b>Example #1 QuickHash IntHash file format</b></p><p></p><p><b>Example #2 QuickHash IntHash file format</b></p>
		 * @param string $filename <p>The filename of the file to read the hash from.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the hash, rounded up to the nearest power of two with a maximum limit of 4194304.</p>
		 * @return QuickHashIntHash <p>Returns a new QuickHashIntHash.</p>
		 * @link https://php.net/manual/en/quickhashinthash.loadfromfile.php
		 * @since PECL quickhash >= Unknown
		 */
		public static function loadFromFile(string $filename, int $options = NULL): \QuickHashIntHash {}

		/**
		 * This factory method creates a hash from a string
		 * <p>This factory method creates a new hash from a definition in a string. The file format consists of 32 bit signed integers packed together in the Endianness that the system that the code runs on uses. For each element there are two 32 bit signed integers stored. The first of each element is the key, and the second is the value belonging to the key.</p>
		 * @param string $contents <p>The string containing a serialized format of the hash.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the hash, rounded up to the nearest power of two with a maximum limit of 4194304.</p>
		 * @return QuickHashIntHash <p>Returns a new QuickHashIntHash.</p>
		 * @link https://php.net/manual/en/quickhashinthash.loadfromstring.php
		 * @since PECL quickhash >= Unknown
		 */
		public static function loadFromString(string $contents, int $options = NULL): \QuickHashIntHash {}

		/**
		 * This method stores an in-memory hash to disk
		 * <p>This method stores an existing hash to a file on disk, in the same format that loadFromFile() can read.</p>
		 * @param string $filename <p>The filename of the file to store the hash in.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/quickhashinthash.savetofile.php
		 * @since PECL quickhash >= Unknown
		 */
		public function saveToFile(string $filename): void {}

		/**
		 * This method returns a serialized version of the hash
		 * <p>This method returns a serialized version of the hash in the same format that loadFromString() can read.</p>
		 * @return string <p>This method returns a string containing a serialized format of the hash. Each element is stored as a four byte value in the Endianness that the current system uses.</p>
		 * @link https://php.net/manual/en/quickhashinthash.savetostring.php
		 * @since PECL quickhash >= Unknown
		 */
		public function saveToString(): string {}

		/**
		 * This method updates an entry in the hash with a new value, or adds a new one if the entry doesn't exist
		 * <p>This method tries to update an entry with a new value. In case the entry did not yet exist, it will instead add a new entry. It returns whether the entry was added or update. If there are duplicate keys, only the first found element will get an updated value. Use QuickHashIntHash::CHECK_FOR_DUPES during hash creation to prevent duplicate keys from being part of the hash.</p>
		 * @param int $key <p>The key of the entry to add or update.</p>
		 * @param int $value <p>The new value to set the entry with.</p>
		 * @return bool <p>2 if the entry was found and updated, 1 if the entry was newly added or 0 if there was an error.</p>
		 * @link https://php.net/manual/en/quickhashinthash.set.php
		 * @since PECL quickhash >= Unknown
		 */
		public function set(int $key, int $value): bool {}

		/**
		 * This method updates an entry in the hash with a new value
		 * <p>This method updates an entry with a new value, and returns whether the entry was update. If there are duplicate keys, only the first found element will get an updated value. Use QuickHashIntHash::CHECK_FOR_DUPES during hash creation to prevent duplicate keys from being part of the hash.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @param int $value <p>The new value to update the entry with.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was found and updated, and <b><code>FALSE</code></b> if the entry was not part of the hash already.</p>
		 * @link https://php.net/manual/en/quickhashinthash.update.php
		 * @since PECL quickhash >= Unknown
		 */
		public function update(int $key, int $value): bool {}
	}

	/**
	 * <p>This class wraps around a set containing integer numbers.</p>
	 * <p>Sets can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.</p>
	 * @link https://php.net/manual/en/class.quickhashintset.php
	 * @since PECL quickhash >= Unknown
	 */
	class QuickHashIntSet {

		/**
		 * @var int <p>If enabled, adding duplicate elements to a set (through either add() or loadFromFile()) will result in those elements to be dropped from the set. This will take up extra time, so only used when it is required.</p>
		 * @link https://php.net/manual/en/class.quickhashintset.php
		 */
		const CHECK_FOR_DUPES = 1;

		/**
		 * @var int <p>Disables the use of PHP's internal memory manager for internal set structures. With this option enabled, internal allocations will not count towards the memory_limit settings.</p>
		 * @link https://php.net/manual/en/class.quickhashintset.php
		 */
		const DO_NOT_USE_ZEND_ALLOC = 2;

		/**
		 * @var int <p>Selects to not use a hashing function, but merely use a modulo to find the bucket list index. This is not faster than normal hashing, and gives more collisions.</p>
		 * @link https://php.net/manual/en/class.quickhashintset.php
		 */
		const HASHER_NO_HASH = 256;

		/**
		 * @var int <p>This is the default hashing function to turn the integer hashes into bucket list indexes.</p>
		 * @link https://php.net/manual/en/class.quickhashintset.php
		 */
		const HASHER_JENKINS1 = 512;

		/**
		 * @var int <p>Selects a variant hashing algorithm.</p>
		 * @link https://php.net/manual/en/class.quickhashintset.php
		 */
		const HASHER_JENKINS2 = 1024;

		/**
		 * Creates a new QuickHashIntSet object
		 * <p>This constructor creates a new QuickHashIntSet. The size is the amount of bucket lists to create. The more lists there are, the less collisions you will have. Options are also supported.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The options that you can pass in are: QuickHashIntSet::CHECK_FOR_DUPES, which makes sure no duplicate entries are added to the set; QuickHashIntSet::DO_NOT_USE_ZEND_ALLOC to not use PHP's internal memory manager as well as one of QuickHashIntSet::HASHER_NO_HASH, QuickHashIntSet::HASHER_JENKINS1 or QuickHashIntSet::HASHER_JENKINS2. These last three configure which hashing algorithm to use. All options can be combined using bitmasks.</p>
		 * @return self <p>Returns a new QuickHashIntSet object.</p>
		 * @link https://php.net/manual/en/quickhashintset.construct.php
		 * @since PECL quickhash >= Unknown
		 */
		public function __construct(int $size, int $options = NULL) {}

		/**
		 * This method adds a new entry to the set
		 * <p>This method adds a new entry to the set, and returns whether the entry was added. Entries are by default always added unless QuickHashIntSet::CHECK_FOR_DUPES has been passed when the set was created.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was added, and <b><code>FALSE</code></b> if the entry was not added.</p>
		 * @link https://php.net/manual/en/quickhashintset.add.php
		 * @since PECL quickhash >= Unknown
		 */
		public function add(int $key): bool {}

		/**
		 * This method deletes an entry from the set
		 * <p>This method deletes an entry from the set, and returns whether the entry was deleted or not. Associated memory structures will not be freed immediately, but rather when the set itself is freed.</p>
		 * @param int $key <p>The key of the entry to delete.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was deleted, and <b><code>FALSE</code></b> if the entry was not deleted.</p>
		 * @link https://php.net/manual/en/quickhashintset.delete.php
		 * @since PECL quickhash >= Unknown
		 */
		public function delete(int $key): bool {}

		/**
		 * This method checks whether a key is part of the set
		 * <p>This method checks whether an entry with the provided key exists in the set.</p>
		 * @param int $key <p>The key of the entry to check for whether it exists in the set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> when the entry was found, or <b><code>FALSE</code></b> when the entry is not found.</p>
		 * @link https://php.net/manual/en/quickhashintset.exists.php
		 * @since PECL quickhash >= Unknown
		 */
		public function exists(int $key): bool {}

		/**
		 * Returns the number of elements in the set
		 * <p>Returns the number of elements in the set.</p>
		 * @return int <p>The number of elements in the set.</p>
		 * @link https://php.net/manual/en/quickhashintset.getsize.php
		 * @since PECL quickhash >= Unknown
		 */
		public function getSize(): int {}

		/**
		 * This factory method creates a set from a file
		 * <p>This factory method creates a new set from a definition file on disk. The file format consists of 32 bit signed integers packed together in the Endianness that the system that the code runs on uses.</p>
		 * @param string $filename <p>The filename of the file to read the set from.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the set, rounded up to the nearest power of two with a maximum limit of 4194304.</p>
		 * @return QuickHashIntSet <p>Returns a new QuickHashIntSet.</p>
		 * @link https://php.net/manual/en/quickhashintset.loadfromfile.php
		 * @since PECL quickhash >= Unknown
		 */
		public static function loadFromFile(string $filename, int $size = NULL, int $options = NULL): \QuickHashIntSet {}

		/**
		 * This factory method creates a set from a string
		 * <p>This factory method creates a new set from a definition in a string. The file format consists of 32 bit signed integers packed together in the Endianness that the system that the code runs on uses.</p>
		 * @param string $contents <p>The string containing a serialized format of the set.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the set, rounded up to the nearest power of two automatically limited from 64 to 4194304.</p>
		 * @return QuickHashIntSet <p>Returns a new QuickHashIntSet.</p>
		 * @link https://php.net/manual/en/quickhashintset.loadfromstring.php
		 * @since PECL quickhash >= Unknown
		 */
		public static function loadFromString(string $contents, int $size = NULL, int $options = NULL): \QuickHashIntSet {}

		/**
		 * This method stores an in-memory set to disk
		 * <p>This method stores an existing set to a file on disk, in the same format that loadFromFile() can read.</p>
		 * @param string $filename <p>The filename of the file to store the hash in.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/quickhashintset.savetofile.php
		 * @since PECL quickhash >= Unknown
		 */
		public function saveToFile(string $filename): void {}

		/**
		 * This method returns a serialized version of the set
		 * <p>This method returns a serialized version of the set in the same format that loadFromString() can read.</p>
		 * @return string <p>This method returns a string containing a serialized format of the set. Each element is stored as a four byte value in the Endianness that the current system uses.</p>
		 * @link https://php.net/manual/en/quickhashintset.savetostring.php
		 * @since PECL quickhash >= Unknown
		 */
		public function saveToString(): string {}
	}

	/**
	 * <p>This class wraps around a hash containing integer numbers, where the values are strings. Hashes are also available as implementation of the ArrayAccess interface.</p>
	 * <p>Hashes can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.</p>
	 * @link https://php.net/manual/en/class.quickhashintstringhash.php
	 * @since PECL quickhash >= Unknown
	 */
	class QuickHashIntStringHash {

		/**
		 * @var int <p>If enabled, adding duplicate elements to a set (through either add() or loadFromFile()) will result in those elements to be dropped from the set. This will take up extra time, so only used when it is required.</p>
		 * @link https://php.net/manual/en/class.quickhashintstringhash.php
		 */
		const CHECK_FOR_DUPES = 1;

		/**
		 * @var int <p>Disables the use of PHP's internal memory manager for internal set structures. With this option enabled, internal allocations will not count towards the memory_limit settings.</p>
		 * @link https://php.net/manual/en/class.quickhashintstringhash.php
		 */
		const DO_NOT_USE_ZEND_ALLOC = 2;

		/**
		 * @var int <p>Selects to not use a hashing function, but merely use a modulo to find the bucket list index. This is not faster than normal hashing, and gives more collisions.</p>
		 * @link https://php.net/manual/en/class.quickhashintstringhash.php
		 */
		const HASHER_NO_HASH = 256;

		/**
		 * @var int <p>This is the default hashing function to turn the integer hashes into bucket list indexes.</p>
		 * @link https://php.net/manual/en/class.quickhashintstringhash.php
		 */
		const HASHER_JENKINS1 = 512;

		/**
		 * @var int <p>Selects a variant hashing algorithm.</p>
		 * @link https://php.net/manual/en/class.quickhashintstringhash.php
		 */
		const HASHER_JENKINS2 = 1024;

		/**
		 * Creates a new QuickHashIntStringHash object
		 * <p>This constructor creates a new QuickHashIntStringHash. The size is the amount of bucket lists to create. The more lists there are, the less collisions you will have. Options are also supported.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 64 to 4194304.</p>
		 * @param int $options <p>The options that you can pass in are: QuickHashIntStringHash::CHECK_FOR_DUPES, which makes sure no duplicate entries are added to the hash; QuickHashIntStringHash::DO_NOT_USE_ZEND_ALLOC to not use PHP's internal memory manager as well as one of QuickHashIntStringHash::HASHER_NO_HASH, QuickHashIntStringHash::HASHER_JENKINS1 or QuickHashIntStringHash::HASHER_JENKINS2. These last three configure which hashing algorithm to use. All options can be combined using bitmasks.</p>
		 * @return self <p>Returns a new QuickHashIntStringHash object.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.construct.php
		 * @since PECL quickhash >= Unknown
		 */
		public function __construct(int $size, int $options = 0) {}

		/**
		 * This method adds a new entry to the hash
		 * <p>This method adds a new entry to the hash, and returns whether the entry was added. Entries are by default always added unless QuickHashIntStringHash::CHECK_FOR_DUPES has been passed when the hash was created.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @param string $value <p>The value of the entry to add. If a non-string is passed, it will be converted to a string automatically if possible.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was added, and <b><code>FALSE</code></b> if the entry was not added.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.add.php
		 * @since PECL quickhash >= Unknown
		 */
		public function add(int $key, string $value): bool {}

		/**
		 * This method deletes am entry from the hash
		 * <p>This method deletes an entry from the hash, and returns whether the entry was deleted or not. Associated memory structures will not be freed immediately, but rather when the hash itself is freed.</p><p>Elements can not be deleted when the hash is used in an iterator. The method will not throw an exception, but simply return <b><code>FALSE</code></b> like would happen with any other deletion failure.</p>
		 * @param int $key <p>The key of the entry to delete.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was deleted, and <b><code>FALSE</code></b> if the entry was not deleted.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.delete.php
		 * @since PECL quickhash >= Unknown
		 */
		public function delete(int $key): bool {}

		/**
		 * This method checks whether a key is part of the hash
		 * <p>This method checks whether an entry with the provided key exists in the hash.</p>
		 * @param int $key <p>The key of the entry to check for whether it exists in the hash.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> when the entry was found, or <b><code>FALSE</code></b> when the entry is not found.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.exists.php
		 * @since PECL quickhash >= Unknown
		 */
		public function exists(int $key): bool {}

		/**
		 * This method retrieves a value from the hash by its key
		 * <p>This method retrieves a value from the hash by its key.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @return mixed <p>The value if the key exists, or <b><code>NULL</code></b> if the key wasn't part of the hash.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.get.php
		 * @since PECL quickhash >= Unknown
		 */
		public function get(int $key) {}

		/**
		 * Returns the number of elements in the hash
		 * <p>Returns the number of elements in the hash.</p>
		 * @return int <p>The number of elements in the hash.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.getsize.php
		 * @since PECL quickhash >= Unknown
		 */
		public function getSize(): int {}

		/**
		 * This factory method creates a hash from a file
		 * <p>This factory method creates a new hash from a definition file on disk. The file format consists of a signature 'QH\0x12\0', the number of elements as a 32 bit signed integer in system Endianness, an unsigned 32 bit integer containing the number of element data to follow in characters. This element data contains all the strings. After the header and the strings, the elements follow in pairs of two unsigned 32 bit integers where the first one is the key, and the second one the index in the element data string. An example could be:</p><p></p><p><b>Example #1 QuickHash IntString file format</b></p><p></p><p><b>Example #2 QuickHash IntString file format</b></p>
		 * @param string $filename <p>The filename of the file to read the hash from.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the hash, rounded up to the nearest power of two with a maximum limit of 4194304.</p>
		 * @return QuickHashIntStringHash <p>Returns a new QuickHashIntStringHash.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.loadfromfile.php
		 * @since PECL quickhash >= Unknown
		 */
		public static function loadFromFile(string $filename, int $size = 0, int $options = 0): \QuickHashIntStringHash {}

		/**
		 * This factory method creates a hash from a string
		 * <p>This factory method creates a new hash from a definition in a string. The format is the same as the one used in "loadFromFile".</p>
		 * @param string $contents <p>The string containing a serialized format of the hash.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the hash, rounded up to the nearest power of two with a maximum limit of 4194304.</p>
		 * @return QuickHashIntStringHash <p>Returns a new QuickHashIntStringHash.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.loadfromstring.php
		 * @since PECL quickhash >= Unknown
		 */
		public static function loadFromString(string $contents, int $size = 0, int $options = 0): \QuickHashIntStringHash {}

		/**
		 * This method stores an in-memory hash to disk
		 * <p>This method stores an existing hash to a file on disk, in the same format that loadFromFile() can read.</p>
		 * @param string $filename <p>The filename of the file to store the hash in.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.savetofile.php
		 * @since PECL quickhash >= Unknown
		 */
		public function saveToFile(string $filename): void {}

		/**
		 * This method returns a serialized version of the hash
		 * <p>This method returns a serialized version of the hash in the same format that loadFromString() can read.</p>
		 * @return string <p>This method returns a string containing a serialized format of the hash. Each element is stored as a four byte value in the Endianness that the current system uses.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.savetostring.php
		 * @since PECL quickhash >= Unknown
		 */
		public function saveToString(): string {}

		/**
		 * This method updates an entry in the hash with a new value, or adds a new one if the entry doesn't exist
		 * <p>This method tries to update an entry with a new value. In case the entry did not yet exist, it will instead add a new entry. It returns whether the entry was added or update. If there are duplicate keys, only the first found element will get an updated value. Use QuickHashIntStringHash::CHECK_FOR_DUPES during hash creation to prevent duplicate keys from being part of the hash.</p>
		 * @param int $key <p>The key of the entry to add or update.</p>
		 * @param string $value <p>The value of the entry to add. If a non-string is passed, it will be converted to a string automatically if possible.</p>
		 * @return int <p>2 if the entry was found and updated, 1 if the entry was newly added or 0 if there was an error.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.set.php
		 * @since PECL quickhash >= Unknown
		 */
		public function set(int $key, string $value): int {}

		/**
		 * This method updates an entry in the hash with a new value
		 * <p>This method updates an entry with a new value, and returns whether the entry was update. If there are duplicate keys, only the first found element will get an updated value. Use QuickHashIntStringHash::CHECK_FOR_DUPES during hash creation to prevent duplicate keys from being part of the hash.</p>
		 * @param int $key <p>The key of the entry to add.</p>
		 * @param string $value <p>The new value for the entry. If a non-string is passed, it will be converted to a string automatically if possible.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was found and updated, and <b><code>FALSE</code></b> if the entry was not part of the hash already.</p>
		 * @link https://php.net/manual/en/quickhashintstringhash.update.php
		 * @since PECL quickhash >= Unknown
		 */
		public function update(int $key, string $value): bool {}
	}

	/**
	 * <p>This class wraps around a hash containing strings, where the values are integer numbers. Hashes are also available as implementation of the ArrayAccess interface.</p>
	 * <p>Hashes can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.</p>
	 * @link https://php.net/manual/en/class.quickhashstringinthash.php
	 * @since No version information available, might only be in Git
	 */
	class QuickHashStringIntHash {

		/**
		 * @var int <p>If enabled, adding duplicate elements to a set (through either add() or loadFromFile()) will result in those elements to be dropped from the set. This will take up extra time, so only used when it is required.</p>
		 * @link https://php.net/manual/en/class.quickhashstringinthash.php
		 */
		const CHECK_FOR_DUPES = 1;

		/**
		 * @var int <p>Disables the use of PHP's internal memory manager for internal set structures. With this option enabled, internal allocations will not count towards the memory_limit settings.</p>
		 * @link https://php.net/manual/en/class.quickhashstringinthash.php
		 */
		const DO_NOT_USE_ZEND_ALLOC = 2;

		/**
		 * Creates a new QuickHashStringIntHash object
		 * <p>This constructor creates a new QuickHashStringIntHash. The size is the amount of bucket lists to create. The more lists there are, the less collisions you will have. Options are also supported.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 64 to 4194304.</p>
		 * @param int $options <p>The options that you can pass in are: QuickHashStringIntHash::CHECK_FOR_DUPES, which makes sure no duplicate entries are added to the hash and QuickHashStringIntHash::DO_NOT_USE_ZEND_ALLOC to not use PHP's internal memory manager.</p>
		 * @return self <p>Returns a new QuickHashStringIntHash object.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.construct.php
		 * @since No version information available, might only be in Git
		 */
		public function __construct(int $size, int $options = 0) {}

		/**
		 * This method adds a new entry to the hash
		 * <p>This method adds a new entry to the hash, and returns whether the entry was added. Entries are by default always added unless QuickHashStringIntHash::CHECK_FOR_DUPES has been passed when the hash was created.</p>
		 * @param string $key <p>The key of the entry to add.</p>
		 * @param int $value <p>The value of the entry to add.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was added, and <b><code>FALSE</code></b> if the entry was not added.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.add.php
		 * @since No version information available, might only be in Git
		 */
		public function add(string $key, int $value): bool {}

		/**
		 * This method deletes am entry from the hash
		 * <p>This method deletes an entry from the hash, and returns whether the entry was deleted or not. Associated memory structures will not be freed immediately, but rather when the hash itself is freed.</p><p>Elements can not be deleted when the hash is used in an iterator. The method will not throw an exception, but simply return <b><code>FALSE</code></b> like would happen with any other deletion failure.</p>
		 * @param string $key <p>The key of the entry to delete.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was deleted, and <b><code>FALSE</code></b> if the entry was not deleted.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.delete.php
		 * @since No version information available, might only be in Git
		 */
		public function delete(string $key): bool {}

		/**
		 * This method checks whether a key is part of the hash
		 * <p>This method checks whether an entry with the provided key exists in the hash.</p>
		 * @param string $key <p>The key of the entry to check for whether it exists in the hash.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> when the entry was found, or <b><code>FALSE</code></b> when the entry is not found.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.exists.php
		 * @since No version information available, might only be in Git
		 */
		public function exists(string $key): bool {}

		/**
		 * This method retrieves a value from the hash by its key
		 * <p>This method retrieves a value from the hash by its key.</p>
		 * @param string $key <p>The key of the entry to add.</p>
		 * @return mixed <p>The value if the key exists, or <b><code>NULL</code></b> if the key wasn't part of the hash.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.get.php
		 * @since No version information available, might only be in Git
		 */
		public function get(string $key) {}

		/**
		 * Returns the number of elements in the hash
		 * <p>Returns the number of elements in the hash.</p>
		 * @return int <p>The number of elements in the hash.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.getsize.php
		 * @since No version information available, might only be in Git
		 */
		public function getSize(): int {}

		/**
		 * This factory method creates a hash from a file
		 * <p>This factory method creates a new hash from a definition file on disk. The file format consists of a signature 'QH\0x21\0', the number of elements as a 32 bit signed integer in system Endianness, an unsigned 32 bit integer containing the number of element data to follow in characters. This element data contains all the strings. The follows another signed 32 bit integer containing the number of bucket lists. After the header and the strings, the elements follow. They are ordered by bucket list so that the keys don't have to be hashed in order to restore the hash. For each bucket list, the following information is stored (all as 32 bit integers): the bucket list index, the number of elements in that list, and then in pairs of two unsigned 32 bit integers the elements, where the first one is the index into the string list containing the keys, and the second one the value. An example could be:</p><p></p><p><b>Example #1 QuickHash StringIntHash file format</b></p><p></p><p><b>Example #2 QuickHash IntHash file format</b></p>
		 * @param string $filename <p>The filename of the file to read the hash from.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is read from the file format (unlike the QuickHashIntHash and QuickHashIntStringHash classes, where it is automatically calculated from the number of entries in the hash.)</p>
		 * @return QuickHashStringIntHash <p>Returns a new QuickHashStringIntHash.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.loadfromfile.php
		 * @since No version information available, might only be in Git
		 */
		public static function loadFromFile(string $filename, int $size = 0, int $options = 0): \QuickHashStringIntHash {}

		/**
		 * This factory method creates a hash from a string
		 * <p>This factory method creates a new hash from a definition in a string. The format is the same as the one used in "loadFromFile".</p>
		 * @param string $contents <p>The string containing a serialized format of the hash.</p>
		 * @param int $size <p>The amount of bucket lists to configure. The number you pass in will be automatically rounded up to the next power of two. It is also automatically limited from 4 to 4194304.</p>
		 * @param int $options <p>The same options that the class' constructor takes; except that the size option is ignored. It is automatically calculated to be the same as the number of entries in the hash, rounded up to the nearest power of two with a maximum limit of 4194304.</p>
		 * @return QuickHashStringIntHash <p>Returns a new QuickHashStringIntHash.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.loadfromstring.php
		 * @since No version information available, might only be in Git
		 */
		public static function loadFromString(string $contents, int $size = 0, int $options = 0): \QuickHashStringIntHash {}

		/**
		 * This method stores an in-memory hash to disk
		 * <p>This method stores an existing hash to a file on disk, in the same format that loadFromFile() can read.</p>
		 * @param string $filename <p>The filename of the file to store the hash in.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.savetofile.php
		 * @since No version information available, might only be in Git
		 */
		public function saveToFile(string $filename): void {}

		/**
		 * This method returns a serialized version of the hash
		 * <p>This method returns a serialized version of the hash in the same format that loadFromString() can read.</p>
		 * @return string <p>This method returns a serialized format of an existing hash, in the same format that loadFromString() can read.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.savetostring.php
		 * @since No version information available, might only be in Git
		 */
		public function saveToString(): string {}

		/**
		 * This method updates an entry in the hash with a new value, or adds a new one if the entry doesn't exist
		 * <p>This method tries to update an entry with a new value. In case the entry did not yet exist, it will instead add a new entry. It returns whether the entry was added or update. If there are duplicate keys, only the first found element will get an updated value. Use QuickHashStringIntHash::CHECK_FOR_DUPES during hash creation to prevent duplicate keys from being part of the hash.</p>
		 * @param string $key <p>The key of the entry to add or update.</p>
		 * @param int $value <p>The value of the entry to add. If a non-string is passed, it will be converted to a string automatically if possible.</p>
		 * @return int <p>2 if the entry was found and updated, 1 if the entry was newly added or 0 if there was an error.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.set.php
		 * @since No version information available, might only be in Git
		 */
		public function set(string $key, int $value): int {}

		/**
		 * This method updates an entry in the hash with a new value
		 * <p>This method updates an entry with a new value, and returns whether the entry was update. If there are duplicate keys, only the first found element will get an updated value. Use QuickHashStringIntHash::CHECK_FOR_DUPES during hash creation to prevent duplicate keys from being part of the hash.</p>
		 * @param string $key <p>The key of the entry to add.</p>
		 * @param int $value <p>The new value for the entry. If a non-string is passed, it will be converted to a string automatically if possible.</p>
		 * @return bool <p><b><code>TRUE</code></b> when the entry was found and updated, and <b><code>FALSE</code></b> if the entry was not part of the hash already.</p>
		 * @link https://php.net/manual/en/quickhashstringinthash.update.php
		 * @since No version information available, might only be in Git
		 */
		public function update(string $key, int $value): bool {}
	}

}
