<?php



namespace {

	/**
	 * <p>An Iterator that iterates over several iterators one after the other.</p>
	 * @link https://php.net/manual/en/class.appenditerator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class AppendIterator extends \IteratorIterator {

		/**
		 * Constructs an AppendIterator
		 * <p>Constructs an AppendIterator.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/appenditerator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct() {}

		/**
		 * Appends an iterator
		 * <p>Appends an iterator.</p>
		 * @param \Iterator $iterator <p>The iterator to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/appenditerator.append.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function append(\Iterator $iterator): void {}

		/**
		 * Gets the current value
		 * <p>Gets the current value.</p>
		 * @return mixed <p>The current value if it is valid or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/appenditerator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Gets the ArrayIterator
		 * <p>This method gets the <code>ArrayIterator</code> that is used to store the iterators added with <code>AppendIterator::append()</code>.</p>
		 * @return ArrayIterator <p>Returns an <code>ArrayIterator</code> containing the appended iterators.</p>
		 * @link https://php.net/manual/en/appenditerator.getarrayiterator.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getArrayIterator(): \ArrayIterator {}

		/**
		 * Gets the inner iterator
		 * <p>This method returns the current inner iterator.</p>
		 * @return Iterator <p>The current inner iterator, or <b><code>null</code></b> if there is not one.</p>
		 * @link https://php.net/manual/en/appenditerator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Gets an index of iterators
		 * <p>Gets the index of the current inner iterator.</p>
		 * @return ?int <p>Returns the zero-based, integer index of the current inner iterator if it exists, or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/appenditerator.getiteratorindex.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getIteratorIndex(): ?int {}

		/**
		 * Gets the current key
		 * <p>Get the current key.</p>
		 * @return scalar <p>The current key if it is valid or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/appenditerator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): \scalar {}

		/**
		 * Moves to the next element
		 * <p>Moves to the next element. If this means to another Iterator then it rewinds that Iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/appenditerator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewinds the Iterator
		 * <p>Rewind to the first element of the first inner Iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/appenditerator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Checks validity of the current element
		 * <p>Checks validity of the current element.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current iteration is valid, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/appenditerator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This iterator allows to unset and modify values and keys while iterating over Arrays and Objects.</p>
	 * <p>When you want to iterate over the same array multiple times you need to instantiate ArrayObject and let it create ArrayIterator instances that refer to it either by using foreach or by calling its getIterator() method manually.</p>
	 * @link https://php.net/manual/en/class.arrayiterator.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class ArrayIterator implements \SeekableIterator, \ArrayAccess, \Serializable, \Countable {

		/**
		 * @var int <p>Properties of the object have their normal functionality when accessed as list (var_dump, foreach, etc.).</p>
		 * @link https://php.net/manual/en/class.arrayiterator.php
		 */
		const STD_PROP_LIST = 1;

		/**
		 * @var int <p>Entries can be accessed as properties (read and write).</p>
		 * @link https://php.net/manual/en/class.arrayiterator.php
		 */
		const ARRAY_AS_PROPS = 2;

		/**
		 * Construct an ArrayIterator
		 * <p>Constructs an <code>ArrayIterator</code> <code>object</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array|object $array <p>The array or object to be iterated on.</p>
		 * @param int $flags <p>Flags to control the behaviour of the <code>ArrayIterator</code> object. See <code>ArrayIterator::setFlags()</code>.</p>
		 * @return self <p>An <code>ArrayIterator</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(array|object $array = [], int $flags = 0) {}

		/**
		 * Append an element
		 * <p>Appends value as the last element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $value <p>The value to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.append.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function append(mixed $value): void {}

		/**
		 * Sort entries by values
		 * <p>Sorts entries by their values.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.asort.php
		 * @see asort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function asort(int $flags = SORT_REGULAR): bool {}

		/**
		 * Count elements
		 * <p>Gets the number of elements in the <code>array</code>, or the number of public properties in the <code>object</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of elements or public properties in the associated <code>array</code> or <code>object</code>, respectively.</p>
		 * @link https://php.net/manual/en/arrayiterator.count.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current array entry
		 * <p>Get the current <code>array</code> entry.</p>
		 * @return mixed <p>The current <code>array</code> entry.</p>
		 * @link https://php.net/manual/en/arrayiterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get array copy
		 * <p>Get a copy of an array.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>A copy of the <code>array</code>, or array of public properties if ArrayIterator refers to an <code>object</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.getarraycopy.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getArrayCopy(): array {}

		/**
		 * Get behavior flags
		 * <p>Gets the behavior flags of the <code>ArrayIterator</code>. See the ArrayIterator::setFlags method for a list of the available flags.</p>
		 * @return int <p>Returns the behavior flags of the ArrayIterator.</p>
		 * @link https://php.net/manual/en/arrayiterator.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Return current array key
		 * <p>This function returns the current array key</p>
		 * @return string|int|null <p>The current <code>array</code> key.</p>
		 * @link https://php.net/manual/en/arrayiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): string|int|null {}

		/**
		 * Sort entries by keys
		 * <p>Sorts entries by their keys.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.ksort.php
		 * @see ksort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function ksort(int $flags = SORT_REGULAR): bool {}

		/**
		 * Sort entries naturally, case insensitive
		 * <p>Sort the entries by values using a case insensitive "natural order" algorithm.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.natcasesort.php
		 * @see natcasesort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function natcasesort(): bool {}

		/**
		 * Sort entries naturally
		 * <p>Sort the entries by values using a "natural order" algorithm.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.natsort.php
		 * @see natsort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function natsort(): bool {}

		/**
		 * Move to next entry
		 * <p>The iterator to the next entry.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Check if offset exists
		 * <p>Checks if the offset exists.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $key <p>The offset being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the offset exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/arrayiterator.offsetexists.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetExists(mixed $key): bool {}

		/**
		 * Get value for an offset
		 * <p>Gets the value from the provided offset.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $key <p>The offset to get the value from.</p>
		 * @return mixed <p>The value at offset <code>key</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.offsetget.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetGet(mixed $key): mixed {}

		/**
		 * Set value for an offset
		 * <p>Sets a value for a given offset.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $key <p>The index to set for.</p>
		 * @param mixed $value <p>The new value to store at the index.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.offsetset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetSet(mixed $key, mixed $value): void {}

		/**
		 * Unset value for an offset
		 * <p>Unsets a value for an offset.</p><p>If iteration is in progress, and <b>ArrayIterator::offsetUnset()</b> is used to unset the current index of iteration, the iteration position will be advanced to the next index. Since the iteration position is also advanced at the end of a foreach loop body, use of <b>ArrayIterator::offsetUnset()</b> inside a <code>foreach</code> loop may result in indices being skipped.</p>
		 * @param mixed $key <p>The offset to unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.offsetunset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetUnset(mixed $key): void {}

		/**
		 * Rewind array back to the start
		 * <p>This rewinds the iterator to the beginning.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to position
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset <p>The position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.seek.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Serialize
		 * <p>Serialize.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The serialized <code>ArrayIterator</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.serialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Set behaviour flags
		 * <p>Set the flags that change the behavior of the ArrayIterator.</p>
		 * @param int $flags <p>The new ArrayIterator behavior. It takes on either a bitmask, or named constants. Using named constants is strongly encouraged to ensure compatibility for future versions.</p> <p>The available behavior flags are listed below. The actual meanings of these flags are described in the predefined constants.</p> <b>ArrayIterator behavior flags</b>   value constant     1  ArrayIterator::STD_PROP_LIST    2  ArrayIterator::ARRAY_AS_PROPS
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sort with a user-defined comparison function and maintain index association
		 * <p>This method sorts the elements such that indices maintain their correlation with the values they are associated with, using a user-defined comparison function.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.uasort.php
		 * @see uasort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function uasort(callable $callback): bool {}

		/**
		 * Sort by keys using a user-defined comparison function
		 * <p>This method sorts the elements by keys using a user-supplied comparison function.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.uksort.php
		 * @see uksort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function uksort(callable $callback): bool {}

		/**
		 * Unserialize
		 * <p>Unserialize.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data <p>The serialized ArrayIterator object to be unserialized.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.unserialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}

		/**
		 * Check whether array contains more entries
		 * <p>Checks if the <code>array</code> contains any more entries.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the iterator is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/arrayiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This class allows objects to work as arrays.</p>
	 * @link https://php.net/manual/en/class.arrayobject.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class ArrayObject implements \IteratorAggregate, \ArrayAccess, \Serializable, \Countable {

		/**
		 * @var int <p>Properties of the object have their normal functionality when accessed as list (var_dump, foreach, etc.).</p>
		 * @link https://php.net/manual/en/class.arrayobject.php
		 */
		const STD_PROP_LIST = 1;

		/**
		 * @var int <p>Entries can be accessed as properties (read and write).</p>
		 * @link https://php.net/manual/en/class.arrayobject.php
		 */
		const ARRAY_AS_PROPS = 2;

		/**
		 * Construct a new array object
		 * <p>This constructs a new array <code>object</code>.</p>
		 * @param array|object $array <p>The <code>array</code> parameter accepts an <code>array</code> or an <code>Object</code>.</p>
		 * @param int $flags <p>Flags to control the behaviour of the <code>ArrayObject</code> object. See <code>ArrayObject::setFlags()</code>.</p>
		 * @param string $iteratorClass <p>Specify the class that will be used for iteration of the <code>ArrayObject</code> object.</p>
		 * @return self <p>Returns an ArrayObject object on success.</p>
		 * @link https://php.net/manual/en/arrayobject.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(array|object $array = [], int $flags = 0, string $iteratorClass = 'ArrayIterator::class') {}

		/**
		 * Appends the value
		 * <p>Appends a new value as the last element.</p><p><b>Note</b>:</p><p>This method cannot be called when the <code>ArrayObject</code> was constructed from an object. Use <code>ArrayObject::offsetSet()</code> instead.</p>
		 * @param mixed $value <p>The value being appended.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.append.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function append(mixed $value): void {}

		/**
		 * Sort the entries by value
		 * <p>Sorts the entries in ascending order, such that its keys maintain their correlation with the values they are associated with.</p><p>This is used mainly when sorting associative arrays where the actual element order is significant.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayobject.asort.php
		 * @see asort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function asort(int $flags = SORT_REGULAR): bool {}

		/**
		 * Get the number of public properties in the ArrayObject
		 * <p>Get the number of public properties in the <code>ArrayObject</code>.</p>
		 * @return int <p>The number of public properties in the <code>ArrayObject</code>.</p><p><b>Note</b>:</p><p>When the <code>ArrayObject</code> is constructed from an array all properties are public.</p>
		 * @link https://php.net/manual/en/arrayobject.count.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Exchange the array for another one
		 * <p>Exchange the current <code>array</code> with another <code>array</code> or <code>object</code>.</p>
		 * @param array|object $array <p>The new <code>array</code> or <code>object</code> to exchange with the current array.</p>
		 * @return array <p>Returns the old <code>array</code>.</p>
		 * @link https://php.net/manual/en/arrayobject.exchangearray.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function exchangeArray(array|object $array): array {}

		/**
		 * Creates a copy of the ArrayObject
		 * <p>Exports the <code>ArrayObject</code> to an array.</p>
		 * @return array <p>Returns a copy of the array. When the <code>ArrayObject</code> refers to an object, an array of the properties of that object will be returned.</p>
		 * @link https://php.net/manual/en/arrayobject.getarraycopy.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getArrayCopy(): array {}

		/**
		 * Gets the behavior flags
		 * <p>Gets the behavior flags of the <code>ArrayObject</code>. See the ArrayObject::setFlags method for a list of the available flags.</p>
		 * @return int <p>Returns the behavior flags of the ArrayObject.</p>
		 * @link https://php.net/manual/en/arrayobject.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Create a new iterator from an ArrayObject instance
		 * <p>Create a new iterator from an <code>ArrayObject</code> instance.</p>
		 * @return Iterator <p>An iterator from an <code>ArrayObject</code>.</p>
		 * @link https://php.net/manual/en/arrayobject.getiterator.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getIterator(): \Iterator {}

		/**
		 * Gets the iterator classname for the ArrayObject
		 * <p>Gets the class name of the array iterator that is used by ArrayObject::getIterator().</p>
		 * @return string <p>Returns the iterator class name that is used to iterate over this object.</p>
		 * @link https://php.net/manual/en/arrayobject.getiteratorclass.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getIteratorClass(): string {}

		/**
		 * Sort the entries by key
		 * <p>Sorts the entries by key, maintaining key to entry correlations. This is useful mainly for associative arrays.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayobject.ksort.php
		 * @see ksort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function ksort(int $flags = SORT_REGULAR): bool {}

		/**
		 * Sort an array using a case insensitive "natural order" algorithm
		 * <p>This method is a case insensitive version of ArrayObject::natsort.</p><p>This method implements a sort algorithm that orders alphanumeric strings in the way a human being would while maintaining key/value associations. This is described as a "natural ordering".</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.natcasesort.php
		 * @see natcasesort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function natcasesort(): bool {}

		/**
		 * Sort entries using a "natural order" algorithm
		 * <p>This method implements a sort algorithm that orders alphanumeric strings in the way a human being would while maintaining key/value associations. This is described as a "natural ordering". An example of the difference between this algorithm and the regular computer string sorting algorithms (used in ArrayObject::asort) method can be seen in the example below.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @return bool <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.natsort.php
		 * @see natsort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function natsort(): bool {}

		/**
		 * Returns whether the requested index exists
		 * @param mixed $key <p>The index being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the requested index exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/arrayobject.offsetexists.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetExists(mixed $key): bool {}

		/**
		 * Returns the value at the specified index
		 * @param mixed $key <p>The index with the value.</p>
		 * @return mixed <p>The value at the specified index or <b><code>null</code></b>.</p>
		 * @link https://php.net/manual/en/arrayobject.offsetget.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetGet(mixed $key): mixed {}

		/**
		 * Sets the value at the specified index to newval
		 * <p>Sets the value at the specified index to newval.</p>
		 * @param mixed $key <p>The index being set.</p>
		 * @param mixed $value <p>The new value for the <code>key</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.offsetset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetSet(mixed $key, mixed $value): void {}

		/**
		 * Unsets the value at the specified index
		 * <p>Unsets the value at the specified index.</p>
		 * @param mixed $key <p>The index being unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.offsetunset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetUnset(mixed $key): void {}

		/**
		 * Serialize an ArrayObject
		 * <p>Serializes an <code>ArrayObject</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The serialized representation of the <code>ArrayObject</code>.</p>
		 * @link https://php.net/manual/en/arrayobject.serialize.php
		 * @see serialize()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Sets the behavior flags
		 * <p>Set the flags that change the behavior of the ArrayObject.</p>
		 * @param int $flags <p>The new ArrayObject behavior. It takes on either a bitmask, or named constants. Using named constants is strongly encouraged to ensure compatibility for future versions.</p> <p>The available behavior flags are listed below. The actual meanings of these flags are described in the predefined constants.</p> <b>ArrayObject behavior flags</b>   value constant     1  ArrayObject::STD_PROP_LIST    2  ArrayObject::ARRAY_AS_PROPS
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the iterator classname for the ArrayObject
		 * <p>Sets the classname of the array iterator that is used by ArrayObject::getIterator().</p>
		 * @param string $iteratorClass <p>The classname of the array iterator to use when iterating over this object.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.setiteratorclass.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setIteratorClass(string $iteratorClass): void {}

		/**
		 * Sort the entries with a user-defined comparison function and maintain key association
		 * <p>This function sorts the entries such that keys maintain their correlation with the entry that they are associated with, using a user-defined comparison function.</p><p>This is used mainly when sorting associative arrays where the actual element order is significant.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayobject.uasort.php
		 * @see uasort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function uasort(callable $callback): bool {}

		/**
		 * Sort the entries by keys using a user-defined comparison function
		 * <p>This function sorts the keys of the entries using a user-supplied comparison function. The key to entry correlations will be maintained.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayobject.uksort.php
		 * @see uksort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function uksort(callable $callback): bool {}

		/**
		 * Unserialize an ArrayObject
		 * <p>Unserializes a serialized <code>ArrayObject</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data <p>The serialized <code>ArrayObject</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayobject.unserialize.php
		 * @see unserialize()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}
	}

	/**
	 * <p>Exception thrown if a callback refers to an undefined function or if some arguments are missing.</p>
	 * @link https://php.net/manual/en/class.badfunctioncallexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class BadFunctionCallException extends \LogicException {

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
	 * <p>Exception thrown if a callback refers to an undefined method or if some arguments are missing.</p>
	 * @link https://php.net/manual/en/class.badmethodcallexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class BadMethodCallException extends \BadFunctionCallException {

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
	 * <p>This object supports cached iteration over another iterator.</p>
	 * @link https://php.net/manual/en/class.cachingiterator.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class CachingIterator extends \IteratorIterator implements \ArrayAccess, \Countable, \Stringable {

		/**
		 * @var int <p>Convert every element to string.</p>
		 * @link https://php.net/manual/en/class.cachingiterator.php
		 */
		const CALL_TOSTRING = 1;

		/**
		 * @var int <p>Don't throw exception in accessing children.</p>
		 * @link https://php.net/manual/en/class.cachingiterator.php
		 */
		const CATCH_GET_CHILD = 16;

		/**
		 * @var int <p>Use key for conversion to string.</p>
		 * @link https://php.net/manual/en/class.cachingiterator.php
		 */
		const TOSTRING_USE_KEY = 2;

		/**
		 * @var int <p>Use current for conversion to string.</p>
		 * @link https://php.net/manual/en/class.cachingiterator.php
		 */
		const TOSTRING_USE_CURRENT = 4;

		/**
		 * @var int <p>Use inner for conversion to string.</p>
		 * @link https://php.net/manual/en/class.cachingiterator.php
		 */
		const TOSTRING_USE_INNER = 8;

		/**
		 * @var int <p>Cache all read data.</p>
		 * @link https://php.net/manual/en/class.cachingiterator.php
		 */
		const FULL_CACHE = 256;

		/**
		 * Construct a new CachingIterator object for the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Iterator $iterator <p>Iterator to cache</p>
		 * @param int $flags <p>Bitmask of flags.</p>
		 * @return self
		 * @link https://php.net/manual/en/cachingiterator.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator, int $flags = CachingIterator::CALL_TOSTRING) {}

		/**
		 * Return the string representation of the current element
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the string representation of the current element.</p>
		 * @return string <p>The <code>string</code> representation of the current element.</p>
		 * @link https://php.net/manual/en/cachingiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * The number of elements in the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>May return the number of elements in the iterator.</p>
		 * @return int <p>The count of the elements iterated over.</p>
		 * @link https://php.net/manual/en/cachingiterator.count.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return the current element
		 * <p>This function is currently not documented; only its argument list is available.</p><p>May return the current element in the iteration.</p>
		 * @return mixed <p>Mixed</p>
		 * @link https://php.net/manual/en/cachingiterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Retrieve the contents of the cache
		 * <p>Retrieve the contents of the cache.</p><p><b>Note</b>:</p><p>The <b><code>CachingIterator::FULL_CACHE</code></b> flag must be being used.</p>
		 * @return array <p>An <code>array</code> containing the cache items.</p>
		 * @link https://php.net/manual/en/cachingiterator.getcache.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getCache(): array {}

		/**
		 * Get flags used
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the bitmask of the flags used for this CachingIterator instance.</p>
		 * @return int <p>Description...</p>
		 * @link https://php.net/manual/en/cachingiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Returns the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the iterator sent to the constructor.</p>
		 * @return Iterator <p>Returns an object implementing the Iterator interface.</p>
		 * @link https://php.net/manual/en/cachingiterator.getinneriterator.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Check whether the inner iterator has a valid next element
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/cachingiterator.hasnext.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function hasNext(): bool {}

		/**
		 * Return the key for the current element
		 * <p>This function is currently not documented; only its argument list is available.</p><p>This method may return a key for the current element.</p>
		 * @return scalar
		 * @link https://php.net/manual/en/cachingiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): \scalar {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>The index being checked.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if an entry referenced by the offset exists, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetexists.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetExists(string $key): bool {}

		/**
		 * The offsetGet purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>Description...</p>
		 * @return mixed <p>Description...</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetget.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetGet(string $key): mixed {}

		/**
		 * The offsetSet purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>The index of the element to be set.</p>
		 * @param mixed $value <p>The new value for the <code>key</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetSet(string $key, mixed $value): void {}

		/**
		 * The offsetUnset purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>The index of the element to be unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetunset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetUnset(string $key): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * The setFlags purpose
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Set the flags for the CachingIterator object.</p>
		 * @param int $flags <p>Bitmask of the flags to set.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Check whether the current element is valid.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/cachingiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.callbackfilteriterator.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	class CallbackFilterIterator extends \FilterIterator {

		/**
		 * Create a filtered iterator from another iterator
		 * <p>Creates a filtered iterator using the <code>callback</code> to determine which items are accepted or rejected.</p>
		 * @param \Iterator $iterator <p>The iterator to be filtered.</p>
		 * @param callable $callback <p>The callback, which should return <b><code>true</code></b> to accept the current item or <b><code>false</code></b> otherwise. See Examples.</p> <p>May be any valid <code>callable</code> value.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/callbackfilteriterator.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator, callable $callback) {}

		/**
		 * Calls the callback with the current value, the current key and the inner iterator as arguments
		 * <p>This method calls the callback with the current value, current key and the inner iterator.</p><p>The callback is expected to return <b><code>true</code></b> if the current item is to be accepted, or <b><code>false</code></b> otherwise.</p>
		 * @return bool <p>Returns <b><code>true</code></b> to accept the current item, or <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/callbackfilteriterator.accept.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.next.php
		 * @see FilterIterator::current(), FilterIterator::key()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Classes implementing <b>Countable</b> can be used with the <code>count()</code> function.</p>
	 * @link https://php.net/manual/en/class.countable.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	interface Countable {

		/**
		 * Count elements of an object
		 * <p>This method is executed when using the <code>count()</code> function on an object implementing <code>Countable</code>.</p>
		 * @return int <p>The custom count as an <code>int</code>.</p><p><b>Note</b>:</p><p>The return value is cast to an <code>int</code>.</p>
		 * @link https://php.net/manual/en/countable.count.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function count(): int;
	}

	/**
	 * <p>The DirectoryIterator class provides a simple interface for viewing the contents of filesystem directories.</p>
	 * @link https://php.net/manual/en/class.directoryiterator.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class DirectoryIterator extends \SplFileInfo implements \SeekableIterator {

		/**
		 * Constructs a new directory iterator from a path
		 * <p>Constructs a new directory iterator from a path.</p>
		 * @param string $directory <p>The path of the directory to traverse.</p>
		 * @return self
		 * @link https://php.net/manual/en/directoryiterator.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $directory) {}

		/**
		 * Get file name as a string
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Return the current DirectoryIterator item
		 * <p>Get the current <code>DirectoryIterator</code> item.</p>
		 * @return DirectoryIterator <p>The current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): \DirectoryIterator {}

		/**
		 * Get last access time of the current DirectoryIterator item
		 * <p>Get the last access time of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the time the file was last accessed, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getATime(): int {}

		/**
		 * Get base name of current DirectoryIterator item
		 * <p>Get the base name of the current <code>DirectoryIterator</code> item.</p>
		 * @param string $suffix <p>If the base name ends in <code>suffix</code>, this will be cut.</p>
		 * @return string <p>The base name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Get inode change time of the current DirectoryIterator item
		 * <p>Get the inode change time for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the last change time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getCTime(): int {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Return file name of current DirectoryIterator item
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get group for the current DirectoryIterator item
		 * <p>Get the group id of the file.</p>
		 * @return int <p>Returns the group id of the current <code>DirectoryIterator</code> item in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getGroup(): int {}

		/**
		 * Get inode for the current DirectoryIterator item
		 * <p>Get the inode number for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the inode number for the file.</p>
		 * @link https://php.net/manual/en/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInode(): int {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Get last modification time of current DirectoryIterator item
		 * <p>Get the last modification time of the current <code>DirectoryIterator</code> item, as a Unix timestamp.</p>
		 * @return int <p>The last modification time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getMTime(): int {}

		/**
		 * Get owner of current DirectoryIterator item
		 * <p>Get the owner of the current <code>DirectoryIterator</code> item, in numerical format.</p>
		 * @return int <p>The file owner of the file, in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getOwner(): int {}

		/**
		 * Get path of current Iterator item without filename
		 * <p>Get the path to the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the path to the file, omitting the file name and any trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Return path and file name of current DirectoryIterator item
		 * <p>Get the path and file name of the current file.</p>
		 * @return string <p>Returns the path and file name of current file. Directories do not have a trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Get the permissions of current DirectoryIterator item
		 * <p>Get the permissions of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the permissions of the file, as a decimal <code>int</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPerms(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Get size of current DirectoryIterator item
		 * <p>Get the file size for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the size of the file, in bytes.</p>
		 * @link https://php.net/manual/en/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Determine the type of the current DirectoryIterator item
		 * <p>Determines which file type the current <code>DirectoryIterator</code> item belongs to. One of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @return string <p>Returns a <code>string</code> representing the type of the file. May be one of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getType(): string {}

		/**
		 * Determine if current DirectoryIterator item is a directory
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if it is a directory, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Determine if current DirectoryIterator item is '.' or '..'
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory and either <code>.</code> or <code>..</code></p>
		 * @return bool <p><b><code>true</code></b> if the entry is <code>.</code> or <code>..</code>, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDot(): bool {}

		/**
		 * Determine if current DirectoryIterator item is executable
		 * <p>Determines if the current <code>DirectoryIterator</code> item is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the entry is executable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a regular file
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a <code>link</code> or <code>dir</code>), otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a symbolic link
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a symbolic link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the item is a symbolic link, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.islink.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be read
		 * <p>Determines if the current <code>DirectoryIterator</code> item is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is readable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be written to
		 * <p>Determines if the current <code>DirectoryIterator</code> item is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file/directory is writable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.iswritable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Return the key for the current DirectoryIterator item
		 * <p>Get the key for the current <code>DirectoryIterator</code> item.</p>
		 * @return int|false <p>The key for the current <code>DirectoryIterator</code> item on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/directoryiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): int|false {}

		/**
		 * Move forward to next DirectoryIterator item
		 * <p>Move forward to the next <code>DirectoryIterator</code> item.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewind the DirectoryIterator back to the start
		 * <p>Rewind the <code>DirectoryIterator</code> back to the start.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to a DirectoryIterator item
		 * <p>Seek to a given position in the <code>DirectoryIterator</code>.</p>
		 * @param int $offset <p>The zero-based numeric position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Check whether current DirectoryIterator position is a valid file
		 * <p>Check whether current <code>DirectoryIterator</code> position is a valid file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception thrown if a value does not adhere to a defined valid data domain.</p>
	 * @link https://php.net/manual/en/class.domainexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class DomainException extends \LogicException {

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
	 * <p>The EmptyIterator class for an empty iterator.</p>
	 * @link https://php.net/manual/en/class.emptyiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class EmptyIterator implements \Iterator {

		/**
		 * The current() method
		 * <p>This function must not be called. It throws an exception upon access.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return never <p>No value is returned.</p>
		 * @link https://php.net/manual/en/emptyiterator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): \never {}

		/**
		 * The key() method
		 * <p>This function must not be called. It throws an exception upon access.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return never <p>No value is returned.</p>
		 * @link https://php.net/manual/en/emptyiterator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): \never {}

		/**
		 * The next() method
		 * <p>No operation, nothing to do.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/emptyiterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * The rewind() method
		 * <p>No operation, nothing to do.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/emptyiterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * The valid() method
		 * <p>The EmptyIterator valid() method.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>false</code></b></p>
		 * @link https://php.net/manual/en/emptyiterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The Filesystem iterator</p>
	 * @link https://php.net/manual/en/class.filesystemiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class FilesystemIterator extends \DirectoryIterator {

		/**
		 * @var int <p>Makes <code>FilesystemIterator::current()</code> return the pathname.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const CURRENT_AS_PATHNAME = 32;

		/**
		 * @var int <p>Makes <code>FilesystemIterator::current()</code> return an <code>SplFileInfo</code> instance.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const CURRENT_AS_FILEINFO = 0;

		/**
		 * @var int <p>Makes <code>FilesystemIterator::current()</code> return $this (the FilesystemIterator).</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const CURRENT_AS_SELF = 16;

		/**
		 * @var int <p>Masks <code>FilesystemIterator::current()</code></p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const CURRENT_MODE_MASK = 240;

		/**
		 * @var int <p>Makes <code>FilesystemIterator::key()</code> return the pathname.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const KEY_AS_PATHNAME = 0;

		/**
		 * @var int <p>Makes <code>FilesystemIterator::key()</code> return the filename.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const KEY_AS_FILENAME = 256;

		/**
		 * @var int <p>Makes <code>RecursiveDirectoryIterator::hasChildren()</code> follow symlinks.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const FOLLOW_SYMLINKS = 512;

		/**
		 * @var int <p>Masks <code>FilesystemIterator::key()</code></p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const KEY_MODE_MASK = 3840;

		/**
		 * @var int <p>Same as <code>FilesystemIterator::KEY_AS_FILENAME | FilesystemIterator::CURRENT_AS_FILEINFO</code>.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const NEW_CURRENT_AND_KEY = 256;

		/**
		 * @var int <p>Skips dot files (<code>.</code> and <code>..</code>).</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const SKIP_DOTS = 4096;

		/**
		 * @var int <p>Makes paths use Unix-style forward slash irrespective of system default. Note that the <code>path</code> that is passed to the constructor is not modified.</p>
		 * @link https://php.net/manual/en/class.filesystemiterator.php
		 */
		const UNIX_PATHS = 8192;

		/**
		 * Constructs a new filesystem iterator
		 * <p>Constructs a new filesystem iterator from the <code>directory</code>.</p>
		 * @param string $directory <p>The path of the filesystem item to be iterated over.</p>
		 * @param int $flags <p>Flags may be provided which will affect the behavior of some methods. A list of the flags can found under FilesystemIterator predefined constants. They can also be set later with <code>FilesystemIterator::setFlags()</code></p> <p><b>Note</b>:</p><p><b><code>FilesystemIterator::SKIP_DOTS</code></b> is always set, and cannot be removed.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(string $directory, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS) {}

		/**
		 * Get file name as a string
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * The current file
		 * <p>Get file information of the current element.</p>
		 * @return string|SplFileInfo|FilesystemIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): string|\SplFileInfo|\FilesystemIterator {}

		/**
		 * Get last access time of the current DirectoryIterator item
		 * <p>Get the last access time of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the time the file was last accessed, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getATime(): int {}

		/**
		 * Get base name of current DirectoryIterator item
		 * <p>Get the base name of the current <code>DirectoryIterator</code> item.</p>
		 * @param string $suffix <p>If the base name ends in <code>suffix</code>, this will be cut.</p>
		 * @return string <p>The base name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Get inode change time of the current DirectoryIterator item
		 * <p>Get the inode change time for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the last change time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getCTime(): int {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Return file name of current DirectoryIterator item
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get the handling flags
		 * <p>Gets the handling flags, as set in <code>FilesystemIterator::__construct()</code> or <code>FilesystemIterator::setFlags()</code>.</p>
		 * @return int <p>The integer value of the set flags.</p>
		 * @link https://php.net/manual/en/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get group for the current DirectoryIterator item
		 * <p>Get the group id of the file.</p>
		 * @return int <p>Returns the group id of the current <code>DirectoryIterator</code> item in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getGroup(): int {}

		/**
		 * Get inode for the current DirectoryIterator item
		 * <p>Get the inode number for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the inode number for the file.</p>
		 * @link https://php.net/manual/en/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInode(): int {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Get last modification time of current DirectoryIterator item
		 * <p>Get the last modification time of the current <code>DirectoryIterator</code> item, as a Unix timestamp.</p>
		 * @return int <p>The last modification time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getMTime(): int {}

		/**
		 * Get owner of current DirectoryIterator item
		 * <p>Get the owner of the current <code>DirectoryIterator</code> item, in numerical format.</p>
		 * @return int <p>The file owner of the file, in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getOwner(): int {}

		/**
		 * Get path of current Iterator item without filename
		 * <p>Get the path to the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the path to the file, omitting the file name and any trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Return path and file name of current DirectoryIterator item
		 * <p>Get the path and file name of the current file.</p>
		 * @return string <p>Returns the path and file name of current file. Directories do not have a trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Get the permissions of current DirectoryIterator item
		 * <p>Get the permissions of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the permissions of the file, as a decimal <code>int</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPerms(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Get size of current DirectoryIterator item
		 * <p>Get the file size for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the size of the file, in bytes.</p>
		 * @link https://php.net/manual/en/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Determine the type of the current DirectoryIterator item
		 * <p>Determines which file type the current <code>DirectoryIterator</code> item belongs to. One of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @return string <p>Returns a <code>string</code> representing the type of the file. May be one of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getType(): string {}

		/**
		 * Determine if current DirectoryIterator item is a directory
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if it is a directory, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Determine if current DirectoryIterator item is '.' or '..'
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory and either <code>.</code> or <code>..</code></p>
		 * @return bool <p><b><code>true</code></b> if the entry is <code>.</code> or <code>..</code>, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDot(): bool {}

		/**
		 * Determine if current DirectoryIterator item is executable
		 * <p>Determines if the current <code>DirectoryIterator</code> item is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the entry is executable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a regular file
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a <code>link</code> or <code>dir</code>), otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a symbolic link
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a symbolic link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the item is a symbolic link, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.islink.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be read
		 * <p>Determines if the current <code>DirectoryIterator</code> item is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is readable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be written to
		 * <p>Determines if the current <code>DirectoryIterator</code> item is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file/directory is writable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.iswritable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Retrieve the key for the current file
		 * @return string <p>Returns the pathname or filename depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): string {}

		/**
		 * Move to the next file
		 * <p>Move to the next file.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewinds back to the beginning
		 * <p>Rewinds the directory back to the start.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to a DirectoryIterator item
		 * <p>Seek to a given position in the <code>DirectoryIterator</code>.</p>
		 * @param int $offset <p>The zero-based numeric position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets handling flags
		 * <p>Sets handling flags.</p>
		 * @param int $flags <p>The handling flags to set. See the FilesystemIterator constants.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Check whether current DirectoryIterator position is a valid file
		 * <p>Check whether current <code>DirectoryIterator</code> position is a valid file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This abstract iterator filters out unwanted values. This class should be extended to implement custom iterator filters. The <code>FilterIterator::accept()</code> must be implemented in the subclass.</p>
	 * @link https://php.net/manual/en/class.filteriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	abstract class FilterIterator extends \IteratorIterator {

		/**
		 * Construct a filterIterator
		 * <p>Constructs a new <code>FilterIterator</code>, which consists of a passed in <code>iterator</code> with filters applied to it.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Iterator $iterator <p>The iterator that is being filtered.</p>
		 * @return self <p>The <code>FilterIterator</code>.</p>
		 * @link https://php.net/manual/en/filteriterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator) {}

		/**
		 * Check whether the current element of the iterator is acceptable
		 * <p>Returns whether the current element of the iterator is acceptable through this filter.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is acceptable, otherwise <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/filteriterator.accept.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.next.php
		 * @see FilterIterator::current(), FilterIterator::key()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Iterates through a file system in a similar fashion to <code>glob()</code>.</p>
	 * @link https://php.net/manual/en/class.globiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class GlobIterator extends \FilesystemIterator implements \Countable {

		/**
		 * Construct a directory using glob
		 * <p>Constructs a new directory iterator from a glob expression.</p>
		 * @param string $pattern <p>A <code>glob()</code> pattern.</p>
		 * @param int $flags <p>Option flags, the flags may be a bitmask of the <code>FilesystemIterator</code> constants.</p>
		 * @return self
		 * @link https://php.net/manual/en/globiterator.construct.php
		 * @see glob()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(string $pattern, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO) {}

		/**
		 * Get file name as a string
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Get the number of directories and files
		 * <p>Gets the number of directories and files found by the glob expression.</p>
		 * @return int <p>The number of returned directories and files, as an <code>int</code>.</p>
		 * @link https://php.net/manual/en/globiterator.count.php
		 * @see count(), glob()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * The current file
		 * <p>Get file information of the current element.</p>
		 * @return string|SplFileInfo|FilesystemIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): string|\SplFileInfo|\FilesystemIterator {}

		/**
		 * Get last access time of the current DirectoryIterator item
		 * <p>Get the last access time of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the time the file was last accessed, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getATime(): int {}

		/**
		 * Get base name of current DirectoryIterator item
		 * <p>Get the base name of the current <code>DirectoryIterator</code> item.</p>
		 * @param string $suffix <p>If the base name ends in <code>suffix</code>, this will be cut.</p>
		 * @return string <p>The base name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Get inode change time of the current DirectoryIterator item
		 * <p>Get the inode change time for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the last change time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getCTime(): int {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Return file name of current DirectoryIterator item
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get the handling flags
		 * <p>Gets the handling flags, as set in <code>FilesystemIterator::__construct()</code> or <code>FilesystemIterator::setFlags()</code>.</p>
		 * @return int <p>The integer value of the set flags.</p>
		 * @link https://php.net/manual/en/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get group for the current DirectoryIterator item
		 * <p>Get the group id of the file.</p>
		 * @return int <p>Returns the group id of the current <code>DirectoryIterator</code> item in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getGroup(): int {}

		/**
		 * Get inode for the current DirectoryIterator item
		 * <p>Get the inode number for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the inode number for the file.</p>
		 * @link https://php.net/manual/en/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInode(): int {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Get last modification time of current DirectoryIterator item
		 * <p>Get the last modification time of the current <code>DirectoryIterator</code> item, as a Unix timestamp.</p>
		 * @return int <p>The last modification time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getMTime(): int {}

		/**
		 * Get owner of current DirectoryIterator item
		 * <p>Get the owner of the current <code>DirectoryIterator</code> item, in numerical format.</p>
		 * @return int <p>The file owner of the file, in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getOwner(): int {}

		/**
		 * Get path of current Iterator item without filename
		 * <p>Get the path to the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the path to the file, omitting the file name and any trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Return path and file name of current DirectoryIterator item
		 * <p>Get the path and file name of the current file.</p>
		 * @return string <p>Returns the path and file name of current file. Directories do not have a trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Get the permissions of current DirectoryIterator item
		 * <p>Get the permissions of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the permissions of the file, as a decimal <code>int</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPerms(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Get size of current DirectoryIterator item
		 * <p>Get the file size for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the size of the file, in bytes.</p>
		 * @link https://php.net/manual/en/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Determine the type of the current DirectoryIterator item
		 * <p>Determines which file type the current <code>DirectoryIterator</code> item belongs to. One of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @return string <p>Returns a <code>string</code> representing the type of the file. May be one of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getType(): string {}

		/**
		 * Determine if current DirectoryIterator item is a directory
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if it is a directory, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Determine if current DirectoryIterator item is '.' or '..'
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory and either <code>.</code> or <code>..</code></p>
		 * @return bool <p><b><code>true</code></b> if the entry is <code>.</code> or <code>..</code>, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDot(): bool {}

		/**
		 * Determine if current DirectoryIterator item is executable
		 * <p>Determines if the current <code>DirectoryIterator</code> item is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the entry is executable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a regular file
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a <code>link</code> or <code>dir</code>), otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a symbolic link
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a symbolic link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the item is a symbolic link, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.islink.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be read
		 * <p>Determines if the current <code>DirectoryIterator</code> item is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is readable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be written to
		 * <p>Determines if the current <code>DirectoryIterator</code> item is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file/directory is writable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.iswritable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Retrieve the key for the current file
		 * @return string <p>Returns the pathname or filename depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): string {}

		/**
		 * Move to the next file
		 * <p>Move to the next file.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewinds back to the beginning
		 * <p>Rewinds the directory back to the start.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to a DirectoryIterator item
		 * <p>Seek to a given position in the <code>DirectoryIterator</code>.</p>
		 * @param int $offset <p>The zero-based numeric position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets handling flags
		 * <p>Sets handling flags.</p>
		 * @param int $flags <p>The handling flags to set. See the FilesystemIterator constants.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Check whether current DirectoryIterator position is a valid file
		 * <p>Check whether current <code>DirectoryIterator</code> position is a valid file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The <b>InfiniteIterator</b> allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.</p>
	 * @link https://php.net/manual/en/class.infiniteiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class InfiniteIterator extends \IteratorIterator {

		/**
		 * Constructs an InfiniteIterator
		 * <p>Constructs an <code>InfiniteIterator</code> from an <code>Iterator</code>.</p>
		 * @param \Iterator $iterator <p>The iterator to infinitely iterate over.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/infiniteiterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator) {}

		/**
		 * Get the current value
		 * <p>Get the value of the current element.</p>
		 * @return mixed <p>The value of the current element.</p>
		 * @link https://php.net/manual/en/iteratoriterator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the inner iterator
		 * <p>Get the inner iterator.</p>
		 * @return ?Iterator <p>The inner iterator as passed to <code>IteratorIterator::__construct()</code>, or <b><code>null</code></b> when there is no inner iterator.</p>
		 * @link https://php.net/manual/en/iteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): ?\Iterator {}

		/**
		 * Get the key of the current element
		 * <p>Get the key of the current element.</p>
		 * @return mixed <p>The key of the current element.</p>
		 * @link https://php.net/manual/en/iteratoriterator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Moves the inner Iterator forward or rewinds it
		 * <p>Moves the inner <code>Iterator</code> forward to its next element if there is one, otherwise rewinds the inner <code>Iterator</code> back to the beginning.</p><p><b>Note</b>:</p><p>Even an <code>InfiniteIterator</code> stops if its inner <code>Iterator</code> is empty.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/infiniteiterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind to the first element
		 * <p>Rewinds to the first element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/iteratoriterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Checks if the iterator is valid
		 * <p>Checks if the iterator is valid.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the iterator is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/iteratoriterator.valid.php
		 * @see iterator_count()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception thrown if an argument is not of the expected type.</p>
	 * @link https://php.net/manual/en/class.invalidargumentexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class InvalidArgumentException extends \LogicException {

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
	 * <p>This iterator wrapper allows the conversion of anything that is Traversable into an Iterator. It is important to understand that most classes that do not implement Iterators have reasons as most likely they do not allow the full Iterator feature set. If so, techniques should be provided to prevent misuse, otherwise expect exceptions or fatal errors.</p>
	 * @link https://php.net/manual/en/class.iteratoriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class IteratorIterator implements \OuterIterator {

		/**
		 * Create an iterator from anything that is traversable
		 * <p>Creates an iterator from anything that is traversable.</p>
		 * @param \Traversable $iterator <p>The traversable iterator.</p>
		 * @param ?string $class
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/iteratoriterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\Traversable $iterator, ?string $class = null) {}

		/**
		 * Get the current value
		 * <p>Get the value of the current element.</p>
		 * @return mixed <p>The value of the current element.</p>
		 * @link https://php.net/manual/en/iteratoriterator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the inner iterator
		 * <p>Get the inner iterator.</p>
		 * @return ?Iterator <p>The inner iterator as passed to <code>IteratorIterator::__construct()</code>, or <b><code>null</code></b> when there is no inner iterator.</p>
		 * @link https://php.net/manual/en/iteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): ?\Iterator {}

		/**
		 * Get the key of the current element
		 * <p>Get the key of the current element.</p>
		 * @return mixed <p>The key of the current element.</p>
		 * @link https://php.net/manual/en/iteratoriterator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Forward to the next element
		 * <p>Forward to the next element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/iteratoriterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind to the first element
		 * <p>Rewinds to the first element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/iteratoriterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Checks if the iterator is valid
		 * <p>Checks if the iterator is valid.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the iterator is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/iteratoriterator.valid.php
		 * @see iterator_count()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception thrown if a length is invalid.</p>
	 * @link https://php.net/manual/en/class.lengthexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class LengthException extends \LogicException {

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
	 * <p>The <b>LimitIterator</b> class allows iteration over a limited subset of items in an <code>Iterator</code>.</p>
	 * @link https://php.net/manual/en/class.limititerator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class LimitIterator extends \IteratorIterator {

		/**
		 * Construct a LimitIterator
		 * <p>Constructs a new <code>LimitIterator</code> from an <code>iterator</code> with a given starting <code>offset</code> and maximum <code>limit</code>.</p>
		 * @param \Iterator $iterator <p>The <code>Iterator</code> to limit.</p>
		 * @param int $offset <p>Optional offset of the limit.</p>
		 * @param int $limit <p>Optional count of the limit.</p>
		 * @return self <p>The new <code>LimitIterator</code>.</p>
		 * @link https://php.net/manual/en/limititerator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator, int $offset = 0, int $limit = -1) {}

		/**
		 * Get current element
		 * <p>Gets the current element of the inner <code>Iterator</code>.</p>
		 * @return mixed <p>Returns the current element or <b><code>null</code></b> if there is none.</p>
		 * @link https://php.net/manual/en/limititerator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get inner iterator
		 * <p>Gets the inner <code>Iterator</code>.</p>
		 * @return Iterator <p>The inner iterator passed to <code>LimitIterator::__construct()</code>.</p>
		 * @link https://php.net/manual/en/limititerator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Return the current position
		 * <p>Gets the current zero-based position of the inner <code>Iterator</code>.</p>
		 * @return int <p>The current position.</p>
		 * @link https://php.net/manual/en/limititerator.getposition.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getPosition(): int {}

		/**
		 * Get current key
		 * <p>Gets the key for the current item in the inner <code>Iterator</code>.</p>
		 * @return mixed <p>Returns the key for the current item.</p>
		 * @link https://php.net/manual/en/limititerator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>Moves the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/limititerator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator to the specified starting offset
		 * <p>Rewinds the iterator to the starting offset specified in <code>LimitIterator::__construct()</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/limititerator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to the given position
		 * <p>Moves the iterator to the offset specified by <code>offset</code>.</p>
		 * @param int $offset <p>The position to seek to.</p>
		 * @return int <p>Returns the offset position after seeking.</p>
		 * @link https://php.net/manual/en/limititerator.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): int {}

		/**
		 * Check whether the current element is valid
		 * <p>Checks whether the current element is valid.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/limititerator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code.</p>
	 * @link https://php.net/manual/en/class.logicexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class LogicException extends \Exception {

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
	 * <p>An Iterator that sequentially iterates over all attached iterators</p>
	 * @link https://php.net/manual/en/class.multipleiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class MultipleIterator implements \Iterator {

		/**
		 * @var int <p>Do not require all sub iterators to be valid in iteration.</p>
		 * @link https://php.net/manual/en/class.multipleiterator.php
		 */
		const MIT_NEED_ANY = 0;

		/**
		 * @var int <p>Require all sub iterators to be valid in iteration.</p>
		 * @link https://php.net/manual/en/class.multipleiterator.php
		 */
		const MIT_NEED_ALL = 1;

		/**
		 * @var int <p>Keys are created from the sub iterators position.</p>
		 * @link https://php.net/manual/en/class.multipleiterator.php
		 */
		const MIT_KEYS_NUMERIC = 0;

		/**
		 * @var int <p>Keys are created from sub iterators associated information.</p>
		 * @link https://php.net/manual/en/class.multipleiterator.php
		 */
		const MIT_KEYS_ASSOC = 2;

		/**
		 * Constructs a new MultipleIterator
		 * <p>Construct a new MultipleIterator.</p>
		 * @param int $flags <p>The flags to set, according to the Flag Constants.</p><ul> <li> <b><code>MultipleIterator::MIT_NEED_ALL</code></b> or <b><code>MultipleIterator::MIT_NEED_ANY</code></b> </li> <li> <b><code>MultipleIterator::MIT_KEYS_NUMERIC</code></b> or <b><code>MultipleIterator::MIT_KEYS_ASSOC</code></b> </li> </ul> <p>Defaults to <b><code>MultipleIterator::MIT_NEED_ALL</code></b>|<b><code>MultipleIterator::MIT_KEYS_NUMERIC</code></b>.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/multipleiterator.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(int $flags = MultipleIterator::MIT_NEED_ALL | MultipleIterator::MIT_KEYS_NUMERIC) {}

		/**
		 * Attaches iterator information
		 * <p>Attaches iterator information.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Iterator $iterator <p>The new iterator to attach.</p>
		 * @param string|int|null $info <p>The associative information for the Iterator, which must be an <code>int</code>, a <code>string</code>, or <b><code>null</code></b>.</p>
		 * @return void <p>Description...</p>
		 * @link https://php.net/manual/en/multipleiterator.attachiterator.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function attachIterator(\Iterator $iterator, string|int|null $info = null): void {}

		/**
		 * Checks if an iterator is attached
		 * <p>Checks if an iterator is attached or not.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Iterator $iterator <p>The iterator to check.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/multipleiterator.containsiterator.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function containsIterator(\Iterator $iterator): bool {}

		/**
		 * Gets the number of attached iterator instances
		 * <p>Gets the number of attached iterator instances.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of attached iterator instances (as an <code>int</code>).</p>
		 * @link https://php.net/manual/en/multipleiterator.countiterators.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function countIterators(): int {}

		/**
		 * Gets the registered iterator instances
		 * <p>Get the registered iterator instances current() result.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>An <code>array</code> containing the current values of each attached iterator.</p>
		 * @link https://php.net/manual/en/multipleiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): array {}

		/**
		 * Detaches an iterator
		 * <p>Detaches an iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Iterator $iterator <p>The iterator to detach.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/multipleiterator.detachiterator.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function detachIterator(\Iterator $iterator): void {}

		/**
		 * Gets the flag information
		 * <p>Gets information about the flags.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>Information about the flags, as an <code>int</code>.</p>
		 * @link https://php.net/manual/en/multipleiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Gets the registered iterator instances
		 * <p>Get the registered iterator instances key() result.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>An <code>array</code> of all registered iterator instances.</p>
		 * @link https://php.net/manual/en/multipleiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): array {}

		/**
		 * Moves all attached iterator instances forward
		 * <p>Moves all attached iterator instances forward.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/multipleiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewinds all attached iterator instances
		 * <p>Rewinds all attached iterator instances.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/multipleiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Sets flags
		 * <p>Sets flags.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $flags <p>The flags to set, according to the Flag Constants</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/multipleiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Checks the validity of sub iterators
		 * <p>Checks the validity of sub iterators.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if one or all sub iterators are valid depending on flags, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/multipleiterator.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This iterator ignores rewind operations. This allows processing an iterator in multiple partial foreach loops.</p>
	 * @link https://php.net/manual/en/class.norewinditerator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class NoRewindIterator extends \IteratorIterator {

		/**
		 * Construct a NoRewindIterator
		 * <p>Constructs a NoRewindIterator.</p>
		 * @param \Iterator $iterator <p>The iterator being used.</p>
		 * @return self <p>A <b>NoRewindIterator()</b> based on the passed in <code>iterator</code>.</p>
		 * @link https://php.net/manual/en/norewinditerator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator) {}

		/**
		 * Get the current value
		 * <p>Gets the current value.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>The current value.</p>
		 * @link https://php.net/manual/en/norewinditerator.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get the inner iterator
		 * <p>Gets the inner iterator, that was passed in to <code>NoRewindIterator</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return iterator <p>The inner iterator, as passed to <code>NoRewindIterator::__construct()</code>.</p>
		 * @link https://php.net/manual/en/norewinditerator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \iterator {}

		/**
		 * Get the current key
		 * <p>Gets the current key.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/norewinditerator.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Forward to the next element
		 * <p>Forwards to the next element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/norewinditerator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Prevents the rewind operation on the inner iterator
		 * <p>Prevents the rewind operation on the inner iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/norewinditerator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Validates the iterator
		 * <p>Checks whether the iterator is valid.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/norewinditerator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Classes implementing <b>OuterIterator</b> can be used to iterate over iterators.</p>
	 * @link https://php.net/manual/en/class.outeriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	interface OuterIterator extends Iterator {

		/**
		 * Return the current element
		 * <p>Returns the current element.</p>
		 * @return mixed <p>Can return any type.</p>
		 * @link https://php.net/manual/en/iterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed;

		/**
		 * Returns the inner iterator for the current entry
		 * <p>Returns the inner iterator for the current iterator entry.</p>
		 * @return ?Iterator <p>Returns the inner iterator for the current entry if it exists, or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/outeriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): ?\Iterator;

		/**
		 * Return the key of the current element
		 * <p>Returns the key of the current element.</p>
		 * @return mixed <p>Returns scalar on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): mixed;

		/**
		 * Move forward to next element
		 * <p>Moves the current position to the next element.</p><p><b>Note</b>:</p><p>This method is called <i>after</i> each foreach loop.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void;

		/**
		 * Rewind the Iterator to the first element
		 * <p>Rewinds back to the first element of the Iterator.</p><p><b>Note</b>:</p><p>This is the <i>first</i> method called when starting a foreach loop. It will <i>not</i> be executed <i>after</i> foreach loops.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void;

		/**
		 * Checks if current position is valid
		 * <p>This method is called after <code>Iterator::rewind()</code> and <code>Iterator::next()</code> to check if the current position is valid.</p>
		 * @return bool <p>The return value will be casted to <code>bool</code> and then evaluated. Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool;
	}

	/**
	 * <p>Exception thrown if a value is not a valid key. This represents errors that cannot be detected at compile time.</p>
	 * @link https://php.net/manual/en/class.outofboundsexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class OutOfBoundsException extends \RuntimeException {

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
	 * <p>Exception thrown when an illegal index was requested. This represents errors that should be detected at compile time.</p>
	 * @link https://php.net/manual/en/class.outofrangeexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class OutOfRangeException extends \LogicException {

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
	 * <p>Exception thrown when adding an element to a full container.</p>
	 * @link https://php.net/manual/en/class.overflowexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class OverflowException extends \RuntimeException {

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
	 * <p>This extended <code>FilterIterator</code> allows a recursive iteration using <code>RecursiveIteratorIterator</code> that only shows those elements which have children.</p>
	 * @link https://php.net/manual/en/class.parentiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class ParentIterator extends \RecursiveFilterIterator {

		/**
		 * Constructs a ParentIterator
		 * <p>Constructs a <code>ParentIterator</code> on an iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \RecursiveIterator $iterator <p>The iterator being constructed upon.</p>
		 * @return self <p>The <code>ParentIterator</code>.</p>
		 * @link https://php.net/manual/en/parentiterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\RecursiveIterator $iterator) {}

		/**
		 * Determines acceptability
		 * <p>Determines if the current element has children.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is acceptable, otherwise <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/parentiterator.accept.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Return the inner iterator's children contained in a ParentIterator
		 * <p>Get the inner iterator's children contained in a ParentIterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return ParentIterator <p>An <code>object</code>.</p>
		 * @link https://php.net/manual/en/parentiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): \ParentIterator {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Check whether the inner iterator's current element has children
		 * <p>Check whether the inner iterator's current element has children.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/parentiterator.haschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>Moves the iterator forward.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parentiterator.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>Rewinds the iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/parentiterator.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception thrown to indicate range errors during program execution. Normally this means there was an arithmetic error other than under/overflow. This is the runtime version of <code>DomainException</code>.</p>
	 * @link https://php.net/manual/en/class.rangeexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class RangeException extends \RuntimeException {

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
	 * <p>This iterator allows to unset and modify values and keys while iterating over Arrays and Objects in the same way as the <code>ArrayIterator</code>. Additionally it is possible to iterate over the current iterator entry.</p>
	 * @link https://php.net/manual/en/class.recursivearrayiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class RecursiveArrayIterator extends \ArrayIterator implements \RecursiveIterator {

		/**
		 * @var int <p>Treat only arrays (not objects) as having children for recursive iteration.</p>
		 * @link https://php.net/manual/en/class.recursivearrayiterator.php
		 */
		const CHILD_ARRAYS_ONLY = 4;

		/**
		 * Append an element
		 * <p>Appends value as the last element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $value <p>The value to append.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.append.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function append(mixed $value): void {}

		/**
		 * Sort entries by values
		 * <p>Sorts entries by their values.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.asort.php
		 * @see asort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function asort(int $flags = SORT_REGULAR): bool {}

		/**
		 * Count elements
		 * <p>Gets the number of elements in the <code>array</code>, or the number of public properties in the <code>object</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The number of elements or public properties in the associated <code>array</code> or <code>object</code>, respectively.</p>
		 * @link https://php.net/manual/en/arrayiterator.count.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current array entry
		 * <p>Get the current <code>array</code> entry.</p>
		 * @return mixed <p>The current <code>array</code> entry.</p>
		 * @link https://php.net/manual/en/arrayiterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get array copy
		 * <p>Get a copy of an array.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>A copy of the <code>array</code>, or array of public properties if ArrayIterator refers to an <code>object</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.getarraycopy.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getArrayCopy(): array {}

		/**
		 * Returns an iterator for the current entry if it is an array or an object
		 * <p>Returns an iterator for the current iterator entry.</p>
		 * @return ?RecursiveArrayIterator <p>An iterator for the current entry, if it is an <code>array</code> or <code>object</code>; or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/recursivearrayiterator.getchildren.php
		 * @see RecursiveArrayIterator::hasChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): ?\RecursiveArrayIterator {}

		/**
		 * Get behavior flags
		 * <p>Gets the behavior flags of the <code>ArrayIterator</code>. See the ArrayIterator::setFlags method for a list of the available flags.</p>
		 * @return int <p>Returns the behavior flags of the ArrayIterator.</p>
		 * @link https://php.net/manual/en/arrayiterator.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Returns whether current entry is an array or an object
		 * <p>Returns whether current entry is an <code>array</code> or an <code>object</code> for which an iterator can be obtained via <code>RecursiveArrayIterator::getChildren()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current entry is an <code>array</code> or an <code>object</code>, otherwise <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/recursivearrayiterator.haschildren.php
		 * @see RecursiveArrayIterator::getChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Return current array key
		 * <p>This function returns the current array key</p>
		 * @return string|int|null <p>The current <code>array</code> key.</p>
		 * @link https://php.net/manual/en/arrayiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): string|int|null {}

		/**
		 * Sort entries by keys
		 * <p>Sorts entries by their keys.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.ksort.php
		 * @see ksort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function ksort(int $flags = SORT_REGULAR): bool {}

		/**
		 * Sort entries naturally, case insensitive
		 * <p>Sort the entries by values using a case insensitive "natural order" algorithm.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.natcasesort.php
		 * @see natcasesort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function natcasesort(): bool {}

		/**
		 * Sort entries naturally
		 * <p>Sort the entries by values using a "natural order" algorithm.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.natsort.php
		 * @see natsort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function natsort(): bool {}

		/**
		 * Move to next entry
		 * <p>The iterator to the next entry.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Check if offset exists
		 * <p>Checks if the offset exists.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $key <p>The offset being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the offset exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/arrayiterator.offsetexists.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetExists(mixed $key): bool {}

		/**
		 * Get value for an offset
		 * <p>Gets the value from the provided offset.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $key <p>The offset to get the value from.</p>
		 * @return mixed <p>The value at offset <code>key</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.offsetget.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetGet(mixed $key): mixed {}

		/**
		 * Set value for an offset
		 * <p>Sets a value for a given offset.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $key <p>The index to set for.</p>
		 * @param mixed $value <p>The new value to store at the index.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.offsetset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetSet(mixed $key, mixed $value): void {}

		/**
		 * Unset value for an offset
		 * <p>Unsets a value for an offset.</p><p>If iteration is in progress, and <b>ArrayIterator::offsetUnset()</b> is used to unset the current index of iteration, the iteration position will be advanced to the next index. Since the iteration position is also advanced at the end of a foreach loop body, use of <b>ArrayIterator::offsetUnset()</b> inside a <code>foreach</code> loop may result in indices being skipped.</p>
		 * @param mixed $key <p>The offset to unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.offsetunset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetUnset(mixed $key): void {}

		/**
		 * Rewind array back to the start
		 * <p>This rewinds the iterator to the beginning.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to position
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $offset <p>The position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.seek.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Serialize
		 * <p>Serialize.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The serialized <code>ArrayIterator</code>.</p>
		 * @link https://php.net/manual/en/arrayiterator.serialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Set behaviour flags
		 * <p>Set the flags that change the behavior of the ArrayIterator.</p>
		 * @param int $flags <p>The new ArrayIterator behavior. It takes on either a bitmask, or named constants. Using named constants is strongly encouraged to ensure compatibility for future versions.</p> <p>The available behavior flags are listed below. The actual meanings of these flags are described in the predefined constants.</p> <b>ArrayIterator behavior flags</b>   value constant     1  ArrayIterator::STD_PROP_LIST    2  ArrayIterator::ARRAY_AS_PROPS
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sort with a user-defined comparison function and maintain index association
		 * <p>This method sorts the elements such that indices maintain their correlation with the values they are associated with, using a user-defined comparison function.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.uasort.php
		 * @see uasort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function uasort(callable $callback): bool {}

		/**
		 * Sort by keys using a user-defined comparison function
		 * <p>This method sorts the elements by keys using a user-supplied comparison function.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p>
		 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/arrayiterator.uksort.php
		 * @see uksort()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function uksort(callable $callback): bool {}

		/**
		 * Unserialize
		 * <p>Unserialize.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data <p>The serialized ArrayIterator object to be unserialized.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayiterator.unserialize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}

		/**
		 * Check whether array contains more entries
		 * <p>Checks if the <code>array</code> contains any more entries.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the iterator is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/arrayiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>...</p>
	 * @link https://php.net/manual/en/class.recursivecachingiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class RecursiveCachingIterator extends \CachingIterator implements \RecursiveIterator {

		/**
		 * Construct
		 * <p>Constructs a new <code>RecursiveCachingIterator</code>, which consists of a passed in <code>iterator</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \Iterator $iterator <p>The iterator being used.</p>
		 * @param int $flags <p>The flags. Use <b><code>CALL_TOSTRING</code></b> to call <b>RecursiveCachingIterator::__toString()</b> for every element (the default), and/or <b><code>CATCH_GET_CHILD</code></b> to catch exceptions when trying to get children.</p>
		 * @return self <p>The <code>RecursiveCachingIterator</code>.</p>
		 * @link https://php.net/manual/en/recursivecachingiterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator, int $flags = RecursiveCachingIterator::CALL_TOSTRING) {}

		/**
		 * Return the string representation of the current element
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the string representation of the current element.</p>
		 * @return string <p>The <code>string</code> representation of the current element.</p>
		 * @link https://php.net/manual/en/cachingiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * The number of elements in the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>May return the number of elements in the iterator.</p>
		 * @return int <p>The count of the elements iterated over.</p>
		 * @link https://php.net/manual/en/cachingiterator.count.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return the current element
		 * <p>This function is currently not documented; only its argument list is available.</p><p>May return the current element in the iteration.</p>
		 * @return mixed <p>Mixed</p>
		 * @link https://php.net/manual/en/cachingiterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Retrieve the contents of the cache
		 * <p>Retrieve the contents of the cache.</p><p><b>Note</b>:</p><p>The <b><code>CachingIterator::FULL_CACHE</code></b> flag must be being used.</p>
		 * @return array <p>An <code>array</code> containing the cache items.</p>
		 * @link https://php.net/manual/en/cachingiterator.getcache.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getCache(): array {}

		/**
		 * Return the inner iterator's children as a RecursiveCachingIterator
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return ?RecursiveCachingIterator <p>The inner iterator's children, as a RecursiveCachingIterator; or <b><code>null</code></b> if there is no children.</p>
		 * @link https://php.net/manual/en/recursivecachingiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): ?\RecursiveCachingIterator {}

		/**
		 * Get flags used
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the bitmask of the flags used for this CachingIterator instance.</p>
		 * @return int <p>Description...</p>
		 * @link https://php.net/manual/en/cachingiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Returns the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the iterator sent to the constructor.</p>
		 * @return Iterator <p>Returns an object implementing the Iterator interface.</p>
		 * @link https://php.net/manual/en/cachingiterator.getinneriterator.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Check whether the current element of the inner iterator has children
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b> if the inner iterator has children, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/recursivecachingiterator.haschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Check whether the inner iterator has a valid next element
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/cachingiterator.hasnext.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function hasNext(): bool {}

		/**
		 * Return the key for the current element
		 * <p>This function is currently not documented; only its argument list is available.</p><p>This method may return a key for the current element.</p>
		 * @return scalar
		 * @link https://php.net/manual/en/cachingiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): \scalar {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * The offsetExists purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>The index being checked.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if an entry referenced by the offset exists, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetexists.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetExists(string $key): bool {}

		/**
		 * The offsetGet purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>Description...</p>
		 * @return mixed <p>Description...</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetget.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetGet(string $key): mixed {}

		/**
		 * The offsetSet purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>The index of the element to be set.</p>
		 * @param mixed $value <p>The new value for the <code>key</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetSet(string $key, mixed $value): void {}

		/**
		 * The offsetUnset purpose
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $key <p>The index of the element to be unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.offsetunset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function offsetUnset(string $key): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * The setFlags purpose
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Set the flags for the CachingIterator object.</p>
		 * @param int $flags <p>Bitmask of the flags to set.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/cachingiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Check whether the current element is valid.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/cachingiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.recursivecallbackfilteriterator.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	class RecursiveCallbackFilterIterator extends \CallbackFilterIterator implements \RecursiveIterator {

		/**
		 * Create a RecursiveCallbackFilterIterator from a RecursiveIterator
		 * <p>Creates a filtered iterator from a <code>RecursiveIterator</code> using the <code>callback</code> to determine which items are accepted or rejected.</p>
		 * @param \RecursiveIterator $iterator <p>The recursive iterator to be filtered.</p>
		 * @param callable $callback <p>The callback, which should return <b><code>true</code></b> to accept the current item or <b><code>false</code></b> otherwise. See Examples.</p> <p>May be any valid <code>callable</code> value.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivecallbackfilteriterator.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function __construct(\RecursiveIterator $iterator, callable $callback) {}

		/**
		 * Calls the callback with the current value, the current key and the inner iterator as arguments
		 * <p>This method calls the callback with the current value, current key and the inner iterator.</p><p>The callback is expected to return <b><code>true</code></b> if the current item is to be accepted, or <b><code>false</code></b> otherwise.</p>
		 * @return bool <p>Returns <b><code>true</code></b> to accept the current item, or <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/callbackfilteriterator.accept.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Return the inner iterator's children contained in a RecursiveCallbackFilterIterator
		 * <p>Fetches the filtered children of the inner iterator.</p><p><code>RecursiveCallbackFilterIterator::hasChildren()</code> should be used to determine if there are children to be fetched.</p>
		 * @return RecursiveCallbackFilterIterator <p>Returns a <code>RecursiveCallbackFilterIterator</code> containing the children.</p>
		 * @link https://php.net/manual/en/recursivecallbackfilteriterator.getchildren.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function getChildren(): \RecursiveCallbackFilterIterator {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Check whether the inner iterator's current element has children
		 * <p>Returns <b><code>true</code></b> if the current element has children, <b><code>false</code></b> otherwise.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current element has children, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/recursivecallbackfilteriterator.haschildren.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.next.php
		 * @see FilterIterator::current(), FilterIterator::key()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The <b>RecursiveDirectoryIterator</b> provides an interface for iterating recursively over filesystem directories.</p>
	 * @link https://php.net/manual/en/class.recursivedirectoryiterator.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class RecursiveDirectoryIterator extends \FilesystemIterator implements \RecursiveIterator {

		/**
		 * Constructs a RecursiveDirectoryIterator
		 * <p>Constructs a <b>RecursiveDirectoryIterator()</b> for the provided <code>directory</code>.</p>
		 * @param string $directory <p>The path of the directory to be iterated over.</p>
		 * @param int $flags <p>Flags may be provided which will affect the behavior of some methods. A list of the flags can found under FilesystemIterator predefined constants. They can also be set later with <code>FilesystemIterator::setFlags()</code>.</p>
		 * @return self <p>Returns the newly created <code>RecursiveDirectoryIterator</code>.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.construct.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __construct(string $directory, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO) {}

		/**
		 * Get file name as a string
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * The current file
		 * <p>Get file information of the current element.</p>
		 * @return string|SplFileInfo|FilesystemIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/filesystemiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): string|\SplFileInfo|\FilesystemIterator {}

		/**
		 * Get last access time of the current DirectoryIterator item
		 * <p>Get the last access time of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the time the file was last accessed, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getatime.php
		 * @see fileatime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getATime(): int {}

		/**
		 * Get base name of current DirectoryIterator item
		 * <p>Get the base name of the current <code>DirectoryIterator</code> item.</p>
		 * @param string $suffix <p>If the base name ends in <code>suffix</code>, this will be cut.</p>
		 * @return string <p>The base name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getbasename.php
		 * @see basename(), pathinfo()
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Get inode change time of the current DirectoryIterator item
		 * <p>Get the inode change time for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the last change time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getctime.php
		 * @see filectime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getCTime(): int {}

		/**
		 * Returns an iterator for the current entry if it is a directory
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveDirectoryIterator <p>The filename, file information, or $this depending on the set flags. See the FilesystemIterator constants.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): \RecursiveDirectoryIterator {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/directoryiterator.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Return file name of current DirectoryIterator item
		 * <p>Get the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the file name of the current <code>DirectoryIterator</code> item.</p>
		 * @link https://php.net/manual/en/directoryiterator.getfilename.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Get the handling flags
		 * <p>Gets the handling flags, as set in <code>FilesystemIterator::__construct()</code> or <code>FilesystemIterator::setFlags()</code>.</p>
		 * @return int <p>The integer value of the set flags.</p>
		 * @link https://php.net/manual/en/filesystemiterator.getflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get group for the current DirectoryIterator item
		 * <p>Get the group id of the file.</p>
		 * @return int <p>Returns the group id of the current <code>DirectoryIterator</code> item in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getgroup.php
		 * @see filegroup(), posix_getgrgid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getGroup(): int {}

		/**
		 * Get inode for the current DirectoryIterator item
		 * <p>Get the inode number for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the inode number for the file.</p>
		 * @link https://php.net/manual/en/directoryiterator.getinode.php
		 * @see fileinode()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getInode(): int {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Get last modification time of current DirectoryIterator item
		 * <p>Get the last modification time of the current <code>DirectoryIterator</code> item, as a Unix timestamp.</p>
		 * @return int <p>The last modification time of the file, as a Unix timestamp.</p>
		 * @link https://php.net/manual/en/directoryiterator.getmtime.php
		 * @see filemtime()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getMTime(): int {}

		/**
		 * Get owner of current DirectoryIterator item
		 * <p>Get the owner of the current <code>DirectoryIterator</code> item, in numerical format.</p>
		 * @return int <p>The file owner of the file, in numerical format.</p>
		 * @link https://php.net/manual/en/directoryiterator.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getOwner(): int {}

		/**
		 * Get path of current Iterator item without filename
		 * <p>Get the path to the current <code>DirectoryIterator</code> item.</p>
		 * @return string <p>Returns the path to the file, omitting the file name and any trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpath.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Return path and file name of current DirectoryIterator item
		 * <p>Get the path and file name of the current file.</p>
		 * @return string <p>Returns the path and file name of current file. Directories do not have a trailing slash.</p>
		 * @link https://php.net/manual/en/directoryiterator.getpathname.php
		 * @see pathinfo()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Get the permissions of current DirectoryIterator item
		 * <p>Get the permissions of the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the permissions of the file, as a decimal <code>int</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.getperms.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getPerms(): int {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Get size of current DirectoryIterator item
		 * <p>Get the file size for the current <code>DirectoryIterator</code> item.</p>
		 * @return int <p>Returns the size of the file, in bytes.</p>
		 * @link https://php.net/manual/en/directoryiterator.getsize.php
		 * @see filesize()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Get sub path
		 * <p>Returns the sub path relative to the directory given in the constructor.</p>
		 * @return string <p>The sub path.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getsubpath.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getSubPath(): string {}

		/**
		 * Get sub path and name
		 * <p>Gets the sub path and filename.</p>
		 * @return string <p>The sub path (sub directory) and filename.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getSubPathname(): string {}

		/**
		 * Determine the type of the current DirectoryIterator item
		 * <p>Determines which file type the current <code>DirectoryIterator</code> item belongs to. One of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @return string <p>Returns a <code>string</code> representing the type of the file. May be one of <code>file</code>, <code>link</code>, or <code>dir</code>.</p>
		 * @link https://php.net/manual/en/directoryiterator.gettype.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getType(): string {}

		/**
		 * Returns whether current entry is a directory and not '.' or '..'
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $allowLinks
		 * @return bool <p>Returns whether the current entry is a directory, but not '.' or '..'</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.haschildren.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function hasChildren(bool $allowLinks = false): bool {}

		/**
		 * Determine if current DirectoryIterator item is a directory
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if it is a directory, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdir.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Determine if current DirectoryIterator item is '.' or '..'
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a directory and either <code>.</code> or <code>..</code></p>
		 * @return bool <p><b><code>true</code></b> if the entry is <code>.</code> or <code>..</code>, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isdot.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isDot(): bool {}

		/**
		 * Determine if current DirectoryIterator item is executable
		 * <p>Determines if the current <code>DirectoryIterator</code> item is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the entry is executable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isexecutable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a regular file
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a <code>link</code> or <code>dir</code>), otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Determine if current DirectoryIterator item is a symbolic link
		 * <p>Determines if the current <code>DirectoryIterator</code> item is a symbolic link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the item is a symbolic link, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.islink.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be read
		 * <p>Determines if the current <code>DirectoryIterator</code> item is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is readable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.isreadable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Determine if current DirectoryIterator item can be written to
		 * <p>Determines if the current <code>DirectoryIterator</code> item is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file/directory is writable, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.iswritable.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Return path and filename of current dir entry
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The path and filename of the current dir entry.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): string {}

		/**
		 * Move to next entry
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewind dir back to the start
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivedirectoryiterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to a DirectoryIterator item
		 * <p>Seek to a given position in the <code>DirectoryIterator</code>.</p>
		 * @param int $offset <p>The zero-based numeric position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/directoryiterator.seek.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets handling flags
		 * <p>Sets handling flags.</p>
		 * @param int $flags <p>The handling flags to set. See the FilesystemIterator constants.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filesystemiterator.setflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Check whether current DirectoryIterator position is a valid file
		 * <p>Check whether current <code>DirectoryIterator</code> position is a valid file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/directoryiterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This abstract iterator filters out unwanted values for a <code>RecursiveIterator</code>. This class should be extended to implement custom filters. The <b>RecursiveFilterIterator::accept()</b> must be implemented in the subclass.</p>
	 * @link https://php.net/manual/en/class.recursivefilteriterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	abstract class RecursiveFilterIterator extends \FilterIterator implements \RecursiveIterator {

		/**
		 * Create a RecursiveFilterIterator from a RecursiveIterator
		 * <p>Create a <code>RecursiveFilterIterator</code> from a <code>RecursiveIterator</code>.</p>
		 * @param \RecursiveIterator $iterator <p>The <code>RecursiveIterator</code> to be filtered.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivefilteriterator.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(\RecursiveIterator $iterator) {}

		/**
		 * Check whether the current element of the iterator is acceptable
		 * <p>Returns whether the current element of the iterator is acceptable through this filter.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is acceptable, otherwise <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/filteriterator.accept.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Return the inner iterator's children contained in a RecursiveFilterIterator
		 * <p>Return the inner iterator's children contained in a <code>RecursiveFilterIterator</code>.</p>
		 * @return ?RecursiveFilterIterator <p>Returns a <code>RecursiveFilterIterator</code> containing the inner iterator's children.</p>
		 * @link https://php.net/manual/en/recursivefilteriterator.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): ?\RecursiveFilterIterator {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Check whether the inner iterator's current element has children
		 * <p>Check whether the inner iterator's current element has children.</p>
		 * @return bool <p><b><code>true</code></b> if the inner iterator has children, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/recursivefilteriterator.haschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.next.php
		 * @see FilterIterator::current(), FilterIterator::key()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Classes implementing <b>RecursiveIterator</b> can be used to iterate over iterators recursively.</p>
	 * @link https://php.net/manual/en/class.recursiveiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	interface RecursiveIterator extends Iterator {

		/**
		 * Return the current element
		 * <p>Returns the current element.</p>
		 * @return mixed <p>Can return any type.</p>
		 * @link https://php.net/manual/en/iterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed;

		/**
		 * Returns an iterator for the current entry
		 * <p>Returns an iterator for the current iterator entry.</p>
		 * @return ?RecursiveIterator <p>Returns an iterator for the current entry if it exists, or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/recursiveiterator.getchildren.php
		 * @see RecursiveIterator::hasChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): ?\RecursiveIterator;

		/**
		 * Returns if an iterator can be created for the current entry
		 * <p>Returns if an iterator can be created for the current entry. <code>RecursiveIterator::getChildren()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the current entry can be iterated over, otherwise returns <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/recursiveiterator.haschildren.php
		 * @see RecursiveIterator::getChildren()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool;

		/**
		 * Return the key of the current element
		 * <p>Returns the key of the current element.</p>
		 * @return mixed <p>Returns scalar on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): mixed;

		/**
		 * Move forward to next element
		 * <p>Moves the current position to the next element.</p><p><b>Note</b>:</p><p>This method is called <i>after</i> each foreach loop.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void;

		/**
		 * Rewind the Iterator to the first element
		 * <p>Rewinds back to the first element of the Iterator.</p><p><b>Note</b>:</p><p>This is the <i>first</i> method called when starting a foreach loop. It will <i>not</i> be executed <i>after</i> foreach loops.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void;

		/**
		 * Checks if current position is valid
		 * <p>This method is called after <code>Iterator::rewind()</code> and <code>Iterator::next()</code> to check if the current position is valid.</p>
		 * @return bool <p>The return value will be casted to <code>bool</code> and then evaluated. Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool;
	}

	/**
	 * <p>Can be used to iterate through recursive iterators.</p>
	 * @link https://php.net/manual/en/class.recursiveiteratoriterator.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class RecursiveIteratorIterator implements \OuterIterator {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursiveiteratoriterator.php
		 */
		const LEAVES_ONLY = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursiveiteratoriterator.php
		 */
		const SELF_FIRST = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursiveiteratoriterator.php
		 */
		const CHILD_FIRST = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursiveiteratoriterator.php
		 */
		const CATCH_GET_CHILD = 16;

		/**
		 * Construct a RecursiveIteratorIterator
		 * <p>Creates a <code>RecursiveIteratorIterator</code> from a <code>RecursiveIterator</code>.</p>
		 * @param \Traversable $iterator <p>The iterator being constructed from. Either a <code>RecursiveIterator</code> or <code>IteratorAggregate</code>.</p>
		 * @param int $mode <p>Optional mode. Possible values are</p><ul> <li> <b><code>RecursiveIteratorIterator::LEAVES_ONLY</code></b> - The default. Lists only leaves in iteration. </li> <li> <b><code>RecursiveIteratorIterator::SELF_FIRST</code></b> - Lists leaves and parents in iteration with parents coming first. </li> <li> <b><code>RecursiveIteratorIterator::CHILD_FIRST</code></b> - Lists leaves and parents in iteration with leaves coming first. </li> </ul>
		 * @param int $flags <p>Optional flag. Possible values are <b><code>RecursiveIteratorIterator::CATCH_GET_CHILD</code></b> which will then ignore exceptions thrown in calls to <b>RecursiveIteratorIterator::getChildren()</b>.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.construct.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function __construct(\Traversable $iterator, int $mode = RecursiveIteratorIterator::LEAVES_ONLY, int $flags = 0) {}

		/**
		 * Begin children
		 * <p>Is called after calling <b>RecursiveIteratorIterator::getChildren()</b>, and its associated <code>RecursiveIteratorIterator::rewind()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.beginchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function beginChildren(): void {}

		/**
		 * Begin Iteration
		 * <p>Called when iteration begins (after the first <code>RecursiveIteratorIterator::rewind()</code> call.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.beginiteration.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function beginIteration(): void {}

		/**
		 * Get children
		 * <p>Get children of the current element.</p>
		 * @return ?RecursiveIterator <p>A <b>RecursiveIterator()</b> on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.callgetchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function callGetChildren(): ?\RecursiveIterator {}

		/**
		 * Has children
		 * <p>Called for each element to test whether it has children.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns whether the element has children.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.callhaschildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function callHasChildren(): bool {}

		/**
		 * Access the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>The current elements value.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * End children
		 * <p>Called when end recursing one level.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.endchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function endChildren(): void {}

		/**
		 * End Iteration
		 * <p>Called when the iteration ends (when <code>RecursiveIteratorIterator::valid()</code> first returns <b><code>false</code></b>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.enditeration.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function endIteration(): void {}

		/**
		 * Get the current depth of the recursive iteration
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The current depth of the recursive iteration.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getdepth.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getDepth(): int {}

		/**
		 * Get inner iterator
		 * <p>Gets the current active sub iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveIterator <p>The current active sub iterator.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \RecursiveIterator {}

		/**
		 * Get max depth
		 * <p>Gets the maximum allowable depth.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int|false <p>The maximum accepted depth, or <b><code>false</code></b> if any depth is allowed.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getMaxDepth(): int|false {}

		/**
		 * The current active sub iterator
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?int $level
		 * @return ?RecursiveIterator <p>The current active sub iterator on success; <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSubIterator(?int $level = null): ?\RecursiveIterator {}

		/**
		 * Access the current key
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move forward to the next element
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Next element
		 * <p>Called when the next element is available.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.nextelement.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function nextElement(): void {}

		/**
		 * Rewind the iterator to the first element of the top level inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Set max depth
		 * <p>Set the maximum allowed depth.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $maxDepth <p>The maximum allowed depth. <code>-1</code> is used for any depth.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setMaxDepth(int $maxDepth = -1): void {}

		/**
		 * Check whether the current position is valid
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b> if the current position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This recursive iterator can filter another recursive iterator via a regular expression.</p>
	 * @link https://php.net/manual/en/class.recursiveregexiterator.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	class RecursiveRegexIterator extends \RegexIterator implements \RecursiveIterator {

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.regexiterator.php#regexiterator.props.replacement
		 */
		public $replacement = null;

		/**
		 * Creates a new RecursiveRegexIterator
		 * <p>Creates a new regular expression iterator.</p>
		 * @param \RecursiveIterator $iterator <p>The recursive iterator to apply this regex filter to.</p>
		 * @param string $pattern <p>The regular expression to match.</p>
		 * @param int $mode <p>Operation mode, see <code>RegexIterator::setMode()</code> for a list of modes.</p>
		 * @param int $flags <p>Special flags, see <code>RegexIterator::setFlags()</code> for a list of available flags.</p>
		 * @param int $pregFlags <p>The regular expression flags. These flags depend on the operation mode parameter:</p> <p></p> <b><code>RegexIterator</code> preg_flags</b>   operation mode available flags     RecursiveRegexIterator::ALL_MATCHES  See <code>preg_match_all()</code>.    RecursiveRegexIterator::GET_MATCH  See <code>preg_match()</code>.    RecursiveRegexIterator::MATCH  See <code>preg_match()</code>.    RecursiveRegexIterator::REPLACE  none.    RecursiveRegexIterator::SPLIT  See <code>preg_split()</code>.
		 * @return self
		 * @link https://php.net/manual/en/recursiveregexiterator.construct.php
		 * @see preg_match(), preg_match_all(), preg_replace(), preg_split()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function __construct(\RecursiveIterator $iterator, string $pattern, int $mode = RecursiveRegexIterator::MATCH, int $flags = 0, int $pregFlags = 0) {}

		/**
		 * Get accept status
		 * <p>Matches <code>(string)</code> <b>RegexIterator::current()</b> (or <b>RegexIterator::key()</b> if the RegexIterator::USE_KEY flag is set) against the regular expression.</p>
		 * @return bool <p><b><code>true</code></b> if a match, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/regexiterator.accept.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Returns an iterator for the current entry
		 * <p>Returns an iterator for the current iterator entry.</p>
		 * @return RecursiveRegexIterator <p>An iterator for the current entry, if it can be iterated over by the inner iterator.</p>
		 * @link https://php.net/manual/en/recursiveregexiterator.getchildren.php
		 * @see RecursiveRegexIterator::hasChildren()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getChildren(): \RecursiveRegexIterator {}

		/**
		 * Get flags
		 * <p>Returns the flags, see <code>RegexIterator::setFlags()</code> for a list of available flags.</p>
		 * @return int <p>Returns the set flags.</p>
		 * @link https://php.net/manual/en/regexiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Returns operation mode
		 * <p>Returns the operation mode, see <code>RegexIterator::setMode()</code> for the list of operation modes.</p>
		 * @return int <p>Returns the operation mode.</p>
		 * @link https://php.net/manual/en/regexiterator.getmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getMode(): int {}

		/**
		 * Returns the regular expression flags
		 * <p>Returns the regular expression flags, see <code>RegexIterator::__construct()</code> for the list of flags.</p>
		 * @return int <p>Returns a bitmask of the regular expression flags.</p>
		 * @link https://php.net/manual/en/regexiterator.getpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getPregFlags(): int {}

		/**
		 * Returns current regular expression
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/regexiterator.getregex.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function getRegex(): string {}

		/**
		 * Returns whether an iterator can be obtained for the current entry
		 * <p>Returns whether an iterator can be obtained for the current entry. This iterator can be obtained via <code>RecursiveRegexIterator::getChildren()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if an iterator can be obtained for the current entry, otherwise returns <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/recursiveregexiterator.haschildren.php
		 * @see RecursiveRegexIterator::getChildren()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.next.php
		 * @see FilterIterator::current(), FilterIterator::key()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Sets the flags
		 * <p>Sets the flags.</p>
		 * @param int $flags <p>The flags to set, a bitmask of class constants.</p> <p>The available flags are listed below. The actual meanings of these flags are described in the predefined constants.</p> <b><code>RegexIterator</code> flags</b>   value constant     1  RegexIterator::USE_KEY
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/regexiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the operation mode
		 * <p>Sets the operation mode.</p>
		 * @param int $mode <p>The operation mode.</p> <p>The available modes are listed below. The actual meanings of these modes are described in the predefined constants.</p> <b><code>RegexIterator</code> modes</b>   value constant     0  RegexIterator::MATCH    1  RegexIterator::GET_MATCH    2  RegexIterator::ALL_MATCHES    3  RegexIterator::SPLIT    4  RegexIterator::REPLACE
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/regexiterator.setmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setMode(int $mode): void {}

		/**
		 * Sets the regular expression flags
		 * <p>Sets the regular expression flags.</p>
		 * @param int $pregFlags <p>The regular expression flags. See <code>RegexIterator::__construct()</code> for an overview of available flags.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/regexiterator.setpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setPregFlags(int $pregFlags): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Allows iterating over a <code>RecursiveIterator</code> to generate an ASCII graphic tree.</p>
	 * @link https://php.net/manual/en/class.recursivetreeiterator.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class RecursiveTreeIterator extends \RecursiveIteratorIterator {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const BYPASS_CURRENT = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const BYPASS_KEY = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const PREFIX_LEFT = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const PREFIX_MID_HAS_NEXT = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const PREFIX_MID_LAST = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const PREFIX_END_HAS_NEXT = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const PREFIX_END_LAST = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.recursivetreeiterator.php
		 */
		const PREFIX_RIGHT = 5;

		/**
		 * Construct a RecursiveTreeIterator
		 * <p>Constructs a new <code>RecursiveTreeIterator</code> from the supplied recursive iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \RecursiveIterator|\IteratorAggregate $iterator <p>The <code>RecursiveIterator</code> or <code>IteratorAggregate</code> to iterate over.</p>
		 * @param int $flags <p>Flags may be provided which will affect the behavior of some methods. A list of the flags can found under RecursiveTreeIterator predefined constants.</p>
		 * @param int $cachingIteratorFlags
		 * @param int $mode <p>Flags to affect the behavior of the <code>RecursiveIteratorIterator</code> used internally.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(\RecursiveIterator|\IteratorAggregate $iterator, int $flags = RecursiveTreeIterator::BYPASS_KEY, int $cachingIteratorFlags = CachingIterator::CATCH_GET_CHILD, int $mode = RecursiveTreeIterator::SELF_FIRST) {}

		/**
		 * Begin children
		 * <p>Called when recursing one level down.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.beginchildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function beginChildren(): void {}

		/**
		 * Begin iteration
		 * <p>Called when iteration begins (after the first <code>RecursiveTreeIterator::rewind()</code> call).</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveIterator <p>A <code>RecursiveIterator</code>.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.beginiteration.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function beginIteration(): \RecursiveIterator {}

		/**
		 * Get children
		 * <p>Gets children of the current element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveIterator <p>A <code>RecursiveIterator</code>.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.callgetchildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function callGetChildren(): \RecursiveIterator {}

		/**
		 * Has children
		 * <p>Called for each element to test whether it has children.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b> if there are children, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/recursivetreeiterator.callhaschildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function callHasChildren(): bool {}

		/**
		 * Get current element
		 * <p>Gets the current element prefixed and postfixed.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>Returns the current element prefixed and postfixed.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * End children
		 * <p>Called when end recursing one level.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.endchildren.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function endChildren(): void {}

		/**
		 * End iteration
		 * <p>Called when the iteration ends (when <code>RecursiveTreeIterator::valid()</code> first returns <b><code>false</code></b>)</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.enditeration.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function endIteration(): void {}

		/**
		 * Get the current depth of the recursive iteration
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>The current depth of the recursive iteration.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getdepth.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getDepth(): int {}

		/**
		 * Get current entry
		 * <p>Gets the part of the tree built for the current element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>Returns the part of the tree built for the current element.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.getentry.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getEntry(): string {}

		/**
		 * Get inner iterator
		 * <p>Gets the current active sub iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return RecursiveIterator <p>The current active sub iterator.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \RecursiveIterator {}

		/**
		 * Get max depth
		 * <p>Gets the maximum allowable depth.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int|false <p>The maximum accepted depth, or <b><code>false</code></b> if any depth is allowed.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getMaxDepth(): int|false {}

		/**
		 * Get the postfix
		 * <p>Gets the string to place after the current element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>Returns the string to place after the current element.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.getpostfix.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getPostfix(): string {}

		/**
		 * Get the prefix
		 * <p>Gets the string to place in front of current element</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>Returns the string to place in front of current element</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.getprefix.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getPrefix(): string {}

		/**
		 * The current active sub iterator
		 * <p>This function is currently not documented; only its argument list is available.</p>
		 * @param ?int $level
		 * @return ?RecursiveIterator <p>The current active sub iterator on success; <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getSubIterator(?int $level = null): ?\RecursiveIterator {}

		/**
		 * Get the key of the current element
		 * <p>Gets the current key prefixed and postfixed.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return mixed <p>Returns the current key prefixed and postfixed.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move to next element
		 * <p>Moves forward to the next element.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Next element
		 * <p>Called when the next element is available.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.nextelement.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function nextElement(): void {}

		/**
		 * Rewind iterator
		 * <p>Rewinds the iterator to the first element of the top level inner iterator.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Set max depth
		 * <p>Set the maximum allowed depth.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $maxDepth <p>The maximum allowed depth. <code>-1</code> is used for any depth.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setMaxDepth(int $maxDepth = -1): void {}

		/**
		 * Set postfix
		 * <p>Sets postfix as used in <code>RecursiveTreeIterator::getPostfix()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $postfix
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.setpostfix.php
		 * @since PHP 5 >= 5.5.3, PHP 7, PHP 8
		 */
		public function setPostfix(string $postfix): void {}

		/**
		 * Set a part of the prefix
		 * <p>Sets a part of the prefix used in the graphic tree.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $part <p>One of the RecursiveTreeIterator::PREFIX_&#42; constants.</p>
		 * @param string $value <p>The value to assign to the part of the prefix specified in <code>part</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/recursivetreeiterator.setprefixpart.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setPrefixPart(int $part, string $value): void {}

		/**
		 * Check validity
		 * <p>Check whether the current position is valid.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b> if the current position is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/recursivetreeiterator.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This iterator can be used to filter another iterator based on a regular expression.</p>
	 * @link https://php.net/manual/en/class.regexiterator.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	class RegexIterator extends \FilterIterator {

		/**
		 * @var int <p>Only execute match (filter) for the current entry (see <code>preg_match()</code>).</p>
		 * @link https://php.net/manual/en/class.regexiterator.php
		 */
		const MATCH = 0;

		/**
		 * @var int <p>Return the first match for the current entry (see <code>preg_match()</code>).</p>
		 * @link https://php.net/manual/en/class.regexiterator.php
		 */
		const GET_MATCH = 1;

		/**
		 * @var int <p>Return all matches for the current entry (see <code>preg_match_all()</code>).</p>
		 * @link https://php.net/manual/en/class.regexiterator.php
		 */
		const ALL_MATCHES = 2;

		/**
		 * @var int <p>Returns the split values for the current entry (see <code>preg_split()</code>).</p>
		 * @link https://php.net/manual/en/class.regexiterator.php
		 */
		const SPLIT = 3;

		/**
		 * @var int <p>Replace the current entry (see <code>preg_replace()</code>; Not fully implemented yet)</p>
		 * @link https://php.net/manual/en/class.regexiterator.php
		 */
		const REPLACE = 4;

		/**
		 * @var int <p>Special flag: Match the entry key instead of the entry value.</p>
		 * @link https://php.net/manual/en/class.regexiterator.php
		 */
		const USE_KEY = 1;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.regexiterator.php#regexiterator.props.replacement
		 */
		public $replacement = null;

		/**
		 * Create a new RegexIterator
		 * <p>Create a new <code>RegexIterator</code> which filters an <code>Iterator</code> using a regular expression.</p>
		 * @param \Iterator $iterator <p>The iterator to apply this regex filter to.</p>
		 * @param string $pattern <p>The regular expression to match.</p>
		 * @param int $mode <p>Operation mode, see <code>RegexIterator::setMode()</code> for a list of modes.</p>
		 * @param int $flags <p>Special flags, see <code>RegexIterator::setFlags()</code> for a list of available flags.</p>
		 * @param int $pregFlags <p>The regular expression flags. These flags depend on the operation mode parameter:</p> <p></p> <b><code>RegexIterator</code> preg_flags</b>   operation mode available flags     RegexIterator::ALL_MATCHES  See <code>preg_match_all()</code>.    RegexIterator::GET_MATCH  See <code>preg_match()</code>.    RegexIterator::MATCH  See <code>preg_match()</code>.    RegexIterator::REPLACE  none.    RegexIterator::SPLIT  See <code>preg_split()</code>.
		 * @return self
		 * @link https://php.net/manual/en/regexiterator.construct.php
		 * @see preg_match(), preg_match_all(), preg_replace(), preg_split()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function __construct(\Iterator $iterator, string $pattern, int $mode = RegexIterator::MATCH, int $flags = 0, int $pregFlags = 0) {}

		/**
		 * Get accept status
		 * <p>Matches <code>(string)</code> <b>RegexIterator::current()</b> (or <b>RegexIterator::key()</b> if the RegexIterator::USE_KEY flag is set) against the regular expression.</p>
		 * @return bool <p><b><code>true</code></b> if a match, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/regexiterator.accept.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function accept(): bool {}

		/**
		 * Get the current element value
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current element value.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/filteriterator.current.php
		 * @see FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Get flags
		 * <p>Returns the flags, see <code>RegexIterator::setFlags()</code> for a list of available flags.</p>
		 * @return int <p>Returns the set flags.</p>
		 * @link https://php.net/manual/en/regexiterator.getflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Get the inner iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the inner iterator.</p>
		 * @return Iterator <p>The inner iterator.</p>
		 * @link https://php.net/manual/en/filteriterator.getinneriterator.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getInnerIterator(): \Iterator {}

		/**
		 * Returns operation mode
		 * <p>Returns the operation mode, see <code>RegexIterator::setMode()</code> for the list of operation modes.</p>
		 * @return int <p>Returns the operation mode.</p>
		 * @link https://php.net/manual/en/regexiterator.getmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getMode(): int {}

		/**
		 * Returns the regular expression flags
		 * <p>Returns the regular expression flags, see <code>RegexIterator::__construct()</code> for the list of flags.</p>
		 * @return int <p>Returns a bitmask of the regular expression flags.</p>
		 * @link https://php.net/manual/en/regexiterator.getpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getPregFlags(): int {}

		/**
		 * Returns current regular expression
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string
		 * @link https://php.net/manual/en/regexiterator.getregex.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function getRegex(): string {}

		/**
		 * Get the current key
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Get the current key.</p>
		 * @return mixed <p>The current key.</p>
		 * @link https://php.net/manual/en/filteriterator.key.php
		 * @see FilterIterator::next(), FilterIterator::current()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): mixed {}

		/**
		 * Move the iterator forward
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Move the iterator forward.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.next.php
		 * @see FilterIterator::current(), FilterIterator::key()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Rewind the iterator
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Rewind the iterator.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/filteriterator.rewind.php
		 * @see FilterIterator::current(), FilterIterator::key(), FilterIterator::next()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Sets the flags
		 * <p>Sets the flags.</p>
		 * @param int $flags <p>The flags to set, a bitmask of class constants.</p> <p>The available flags are listed below. The actual meanings of these flags are described in the predefined constants.</p> <b><code>RegexIterator</code> flags</b>   value constant     1  RegexIterator::USE_KEY
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/regexiterator.setflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the operation mode
		 * <p>Sets the operation mode.</p>
		 * @param int $mode <p>The operation mode.</p> <p>The available modes are listed below. The actual meanings of these modes are described in the predefined constants.</p> <b><code>RegexIterator</code> modes</b>   value constant     0  RegexIterator::MATCH    1  RegexIterator::GET_MATCH    2  RegexIterator::ALL_MATCHES    3  RegexIterator::SPLIT    4  RegexIterator::REPLACE
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/regexiterator.setmode.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setMode(int $mode): void {}

		/**
		 * Sets the regular expression flags
		 * <p>Sets the regular expression flags.</p>
		 * @param int $pregFlags <p>The regular expression flags. See <code>RegexIterator::__construct()</code> for an overview of available flags.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/regexiterator.setpregflags.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setPregFlags(int $pregFlags): void {}

		/**
		 * Check whether the current element is valid
		 * <p>This function is currently not documented; only its argument list is available.</p><p>Checks whether the current element is valid.</p>
		 * @return bool <p><b><code>true</code></b> if the current element is valid, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/filteriterator.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception thrown if an error which can only be found on runtime occurs.</p>
	 * @link https://php.net/manual/en/class.runtimeexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class RuntimeException extends \Exception {

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
	 * <p>The Seekable iterator.</p>
	 * @link https://php.net/manual/en/class.seekableiterator.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	interface SeekableIterator extends Iterator {

		/**
		 * Return the current element
		 * <p>Returns the current element.</p>
		 * @return mixed <p>Can return any type.</p>
		 * @link https://php.net/manual/en/iterator.current.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function current(): mixed;

		/**
		 * Return the key of the current element
		 * <p>Returns the key of the current element.</p>
		 * @return mixed <p>Returns scalar on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.key.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function key(): mixed;

		/**
		 * Move forward to next element
		 * <p>Moves the current position to the next element.</p><p><b>Note</b>:</p><p>This method is called <i>after</i> each foreach loop.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.next.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function next(): void;

		/**
		 * Rewind the Iterator to the first element
		 * <p>Rewinds back to the first element of the Iterator.</p><p><b>Note</b>:</p><p>This is the <i>first</i> method called when starting a foreach loop. It will <i>not</i> be executed <i>after</i> foreach loops.</p>
		 * @return void <p>Any returned value is ignored.</p>
		 * @link https://php.net/manual/en/iterator.rewind.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function rewind(): void;

		/**
		 * Seeks to a position
		 * <p>Seeks to a given position in the iterator.</p>
		 * @param int $offset <p>The position to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/seekableiterator.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function seek(int $offset): void;

		/**
		 * Checks if current position is valid
		 * <p>This method is called after <code>Iterator::rewind()</code> and <code>Iterator::next()</code> to check if the current position is valid.</p>
		 * @return bool <p>The return value will be casted to <code>bool</code> and then evaluated. Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/iterator.valid.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function valid(): bool;
	}

	/**
	 * <p>The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.</p>
	 * @link https://php.net/manual/en/class.spldoublylinkedlist.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplDoublyLinkedList implements \Iterator, \Countable, \ArrayAccess, \Serializable {

		/**
		 * @var int <p>The list will be iterated in a last in, first out order, like a stack.</p>
		 * @link https://php.net/manual/en/class.spldoublylinkedlist.php
		 */
		const IT_MODE_LIFO = 2;

		/**
		 * @var int <p>The list will be iterated in a first in, first out order, like a queue.</p>
		 * @link https://php.net/manual/en/class.spldoublylinkedlist.php
		 */
		const IT_MODE_FIFO = 0;

		/**
		 * @var int <p>Iteration will remove the iterated elements.</p>
		 * @link https://php.net/manual/en/class.spldoublylinkedlist.php
		 */
		const IT_MODE_DELETE = 1;

		/**
		 * @var int <p>Iteration will not remove the iterated elements.</p>
		 * @link https://php.net/manual/en/class.spldoublylinkedlist.php
		 */
		const IT_MODE_KEEP = 0;

		/**
		 * Add/insert a new value at the specified index
		 * <p>Insert the value <code>value</code> at the specified <code>index</code>, shuffling the previous value at that index (and all subsequent values) up through the list.</p>
		 * @param int $index <p>The index where the new value is to be inserted.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function add(int $index, mixed $value): void {}

		/**
		 * Peeks at the node from the beginning of the doubly linked list
		 * @return mixed <p>The value of the first node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.bottom.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function bottom(): mixed {}

		/**
		 * Counts the number of elements in the doubly linked list
		 * @return int <p>Returns the number of elements in the doubly linked list.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current array entry
		 * <p>Get the current doubly linked list node.</p>
		 * @return mixed <p>The current node value.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Returns the mode of iteration
		 * @return int <p>Returns the different modes and flags that affect the iteration.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getIteratorMode(): int {}

		/**
		 * Checks whether the doubly linked list is empty
		 * @return bool <p>Returns whether the doubly linked list is empty.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to next entry
		 * <p>Move the iterator to the next node.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Returns whether the requested $index exists
		 * @param int $index <p>The index being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the requested <code>index</code> exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetExists(int $index): bool {}

		/**
		 * Returns the value at the specified $index
		 * @param int $index <p>The index with the value.</p>
		 * @return mixed <p>The value at the specified <code>index</code>.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetGet(int $index): mixed {}

		/**
		 * Sets the value at the specified $index to $value
		 * <p>Sets the value at the specified <code>index</code> to <code>value</code>.</p>
		 * @param ?int $index <p>The index being set. If <b><code>null</code></b>, the next value will be added after the last item.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetSet(?int $index, mixed $value): void {}

		/**
		 * Unsets the value at the specified $index
		 * <p>Unsets the value at the specified index.</p>
		 * @param int $index <p>The index being unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetUnset(int $index): void {}

		/**
		 * Pops a node from the end of the doubly linked list
		 * @return mixed <p>The value of the popped node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.pop.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function pop(): mixed {}

		/**
		 * Move to previous entry
		 * <p>Move the iterator to the previous node.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.prev.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function prev(): void {}

		/**
		 * Pushes an element at the end of the doubly linked list
		 * <p>Pushes <code>value</code> at the end of the doubly linked list.</p>
		 * @param mixed $value <p>The value to push.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.push.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function push(mixed $value): void {}

		/**
		 * Rewind iterator back to the start
		 * <p>This rewinds the iterator to the beginning.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Serializes the storage
		 * <p>Serializes the storage.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The serialized string.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.serialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Sets the mode of iteration
		 * @param int $mode <p>There are two orthogonal sets of modes that can be set:</p> <ul> <li> The direction of the iteration (either one or the other): <ul> <li><b><code>SplDoublyLinkedList::IT_MODE_LIFO</code></b> (Stack style)</li> <li><b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> (Queue style)</li> </ul> </li> <li> The behavior of the iterator (either one or the other): <ul> <li><b><code>SplDoublyLinkedList::IT_MODE_DELETE</code></b> (Elements are deleted by the iterator)</li> <li><b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b> (Elements are traversed by the iterator)</li> </ul> </li> </ul> <p>The default mode is: <b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> | <b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b></p>
		 * @return int <p>Returns the different modes and flags that affect the iteration.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.setiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setIteratorMode(int $mode): int {}

		/**
		 * Shifts a node from the beginning of the doubly linked list
		 * @return mixed <p>The value of the shifted node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.shift.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function shift(): mixed {}

		/**
		 * Peeks at the node from the end of the doubly linked list
		 * @return mixed <p>The value of the last node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Unserializes the storage
		 * <p>Unserializes the storage, from <code>SplDoublyLinkedList::serialize()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data <p>The serialized string.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.unserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}

		/**
		 * Prepends the doubly linked list with an element
		 * <p>Prepends <code>value</code> at the beginning of the doubly linked list.</p>
		 * @param mixed $value <p>The value to unshift.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.unshift.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function unshift(mixed $value): void {}

		/**
		 * Check whether the doubly linked list contains more nodes
		 * <p>Checks if the doubly linked list contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the doubly linked list contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplFileInfo class offers a high-level object-oriented interface to information for an individual file.</p>
	 * @link https://php.net/manual/en/class.splfileinfo.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
	 */
	class SplFileInfo implements \Stringable {

		/**
		 * Construct a new SplFileInfo object
		 * <p>Creates a new SplFileInfo object for the file_name specified. The file does not need to exist, or be readable.</p>
		 * @param string $filename <p>Path to the file.</p>
		 * @return self
		 * @link https://php.net/manual/en/splfileinfo.construct.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __construct(string $filename) {}

		/**
		 * Returns the path to the file as a string
		 * <p>This method will return the file name of the referenced file.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.tostring.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets last access time of the file
		 * <p>Gets the last access time for the file.</p>
		 * @return int|false <p>Returns the time the file was last accessed on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getatime.php
		 * @see fileatime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getATime(): int|false {}

		/**
		 * Gets the base name of the file
		 * <p>This method returns the base name of the file, directory, or link without path info.</p><p><b>SplFileInfo::getBasename()</b> is locale aware, so for it to see the correct basename with multibyte character paths, the matching locale must be set using the <code>setlocale()</code> function.</p>
		 * @param string $suffix <p>Optional suffix to omit from the base name returned.</p>
		 * @return string <p>Returns the base name without path information.</p>
		 * @link https://php.net/manual/en/splfileinfo.getbasename.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Gets the inode change time
		 * <p>Returns the inode change time for the file. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>The last change time, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getctime.php
		 * @see filectime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getCTime(): int|false {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/splfileinfo.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Gets the filename
		 * <p>Gets the filename without any path information.</p>
		 * @return string <p>The filename.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfilename.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Gets the file group
		 * <p>Gets the file group. The group ID is returned in numerical format.</p>
		 * @return int|false <p>The group id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getgroup.php
		 * @see posix_getgrgid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getGroup(): int|false {}

		/**
		 * Gets the inode for the file
		 * <p>Gets the inode number for the filesystem object.</p>
		 * @return int|false <p>Returns the inode number for the filesystem object on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getinode.php
		 * @see fileinode()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getInode(): int|false {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Gets the last modified time
		 * <p>Returns the time when the contents of the file were changed. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>Returns the last modified time for the file, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getmtime.php
		 * @see filemtime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getMTime(): int|false {}

		/**
		 * Gets the owner of the file
		 * <p>Gets the file owner. The owner ID is returned in numerical format.</p>
		 * @return int|false <p>The owner id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getOwner(): int|false {}

		/**
		 * Gets the path without filename
		 * <p>Returns the path to the file, omitting the filename and any trailing slash.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpath.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Gets the path to the file
		 * <p>Returns the path to the file.</p>
		 * @return string <p>The path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathname.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Gets file permissions
		 * <p>Gets the file permissions for the file.</p>
		 * @return int|false <p>Returns the file permissions on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getperms.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPerms(): int|false {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Gets file size
		 * <p>Returns the filesize in bytes for the file referenced.</p>
		 * @return int|false <p>The filesize in bytes on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getsize.php
		 * @see filesize()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getSize(): int|false {}

		/**
		 * Gets file type
		 * <p>Returns the type of the file referenced.</p>
		 * @return string|false <p>A <code>string</code> representing the type of the entry. May be one of <code>file</code>, <code>link</code>, <code>dir</code>, <code>block</code>, <code>fifo</code>, <code>char</code>, <code>socket</code>, or <code>unknown</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.gettype.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getType(): string|false {}

		/**
		 * Tells if the file is a directory
		 * <p>This method can be used to determine if the file is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if a directory, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isdir.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Tells if the file is executable
		 * <p>Checks if the file is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if executable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isexecutable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Tells if the object references a regular file
		 * <p>Checks if the file referenced by this SplFileInfo object exists and is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a link), <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isfile.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Tells if the file is a link
		 * <p>Use this method to check if the file referenced by the SplFileInfo object is a link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is a link, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.islink.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Tells if file is readable
		 * <p>Check if the file is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if readable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isreadable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Tells if the entry is writable
		 * <p>Checks if the current entry is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if writable, <b><code>false</code></b> otherwise;</p>
		 * @link https://php.net/manual/en/splfileinfo.iswritable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}
	}

	/**
	 * <p>The SplFileObject class offers an object-oriented interface for a file.</p>
	 * @link https://php.net/manual/en/class.splfileobject.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class SplFileObject extends \SplFileInfo implements \RecursiveIterator, \SeekableIterator {

		/**
		 * @var int <p>Drop newlines at the end of a line.</p>
		 * @link https://php.net/manual/en/class.splfileobject.php
		 */
		const DROP_NEW_LINE = 1;

		/**
		 * @var int <p>Read on rewind/next.</p>
		 * @link https://php.net/manual/en/class.splfileobject.php
		 */
		const READ_AHEAD = 2;

		/**
		 * @var int <p>Skips empty lines in the file. This requires the <b><code>READ_AHEAD</code></b> flag be enabled, to work as expected.</p>
		 * @link https://php.net/manual/en/class.splfileobject.php
		 */
		const SKIP_EMPTY = 4;

		/**
		 * @var int <p>Read lines as CSV rows.</p>
		 * @link https://php.net/manual/en/class.splfileobject.php
		 */
		const READ_CSV = 8;

		/**
		 * Construct a new file object
		 * <p>Construct a new file object.</p>
		 * @param string $filename <p>The file to read.</p> <b>Tip</b><p>A URL can be used as a filename with this function if the fopen wrappers have been enabled. See <code>fopen()</code> for more details on how to specify the filename. See the Supported Protocols and Wrappers for links to information about what abilities the various wrappers have, notes on their usage, and information on any predefined variables they may provide.</p>
		 * @param string $mode <p>The mode in which to open the file. See <code>fopen()</code> for a list of allowed modes.</p>
		 * @param bool $useIncludePath <p>Whether to search in the include_path for <code>filename</code>.</p>
		 * @param ?resource $context <p>A valid context resource created with <code>stream_context_create()</code>.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.construct.php
		 * @see fopen()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function __construct(string $filename, string $mode = "r", bool $useIncludePath = false, ?resource $context = null) {}

		/**
		 * Returns the path to the file as a string
		 * <p>This method will return the file name of the referenced file.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.tostring.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Retrieve current line of file
		 * <p>Retrieves the current line of the file.</p>
		 * @return string|array|false <p>Retrieves the current line of the file. If the <b><code>SplFileObject::READ_CSV</code></b> flag is set, this method returns an array containing the current line parsed as CSV data. If the end of the file is reached, <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): string|array|false {}

		/**
		 * Reached end of file
		 * <p>Determine whether the end of file has been reached</p>
		 * @return bool <p>Returns <b><code>true</code></b> if file is at EOF, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileobject.eof.php
		 * @see feof()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function eof(): bool {}

		/**
		 * Flushes the output to the file
		 * <p>Forces a write of all buffered output to the file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.fflush.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fflush(): bool {}

		/**
		 * Gets character from file
		 * <p>Gets a character from the file.</p>
		 * @return string|false <p>Returns a string containing a single character read from the file or <b><code>false</code></b> on EOF.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link https://php.net/manual/en/splfileobject.fgetc.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fgetc(): string|false {}

		/**
		 * Gets line from file and parse as CSV fields
		 * <p>Gets a line from the file which is in CSV format and returns an array containing the fields read.</p><p><b>Note</b>:</p><p>The locale settings are taken into account by this function. If <code>LC_CTYPE</code> is e.g. <code>en_US.UTF-8</code>, files in one-byte encodings may be read wrongly by this function.</p>
		 * @param string $separator <p>The field delimiter (one single-byte character only). Defaults as a comma or the value set using <code>SplFileObject::setCsvControl()</code>.</p>
		 * @param string $enclosure <p>The field enclosure character (one single-byte character only). Defaults as a double quotation mark or the value set using <code>SplFileObject::setCsvControl()</code>.</p>
		 * @param string $escape <p>The escape character (at most one single-byte character). Defaults as a backslash (<code>\</code>) or the value set using <code>SplFileObject::setCsvControl()</code>. An empty string (<code>""</code>) disables the proprietary escape mechanism.</p> <p><b>Note</b>:  Usually an <code>enclosure</code> character is escpaped inside a field by doubling it; however, the <code>escape</code> character can be used as an alternative. So for the default parameter values <code>""</code> and <code>\"</code> have the same meaning. Other than allowing to escape the <code>enclosure</code> character the <code>escape</code> character has no special meaning; it isn't even meant to escape itself. </p>
		 * @return array|false <p>Returns an indexed array containing the fields read, or <b><code>false</code></b> on error.</p><p><b>Note</b>:</p><p>A blank line in a CSV file will be returned as an array comprising a single <b><code>null</code></b> field unless using <b><code>SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE</code></b>, in which case empty lines are skipped.</p>
		 * @link https://php.net/manual/en/splfileobject.fgetcsv.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fgetcsv(string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false {}

		/**
		 * Gets line from file
		 * <p>Gets a line from the file.</p>
		 * @return string <p>Returns a string containing the next line from the file, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.fgets.php
		 * @see fgets()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fgets(): string {}

		/**
		 * Gets line from file and strip HTML tags
		 * <p>Identical to <code>SplFileObject::fgets()</code>, except that <b>SplFileObject::fgetss()</b> attempts to strip any HTML and PHP tags from the text it reads. The function retains the parsing state from call to call, and as such is not equivalent to calling <code>strip_tags()</code> on the return value of <code>SplFileObject::fgets()</code>.</p>
		 * @param string $allowable_tags <p>Optional parameter to specify tags which should not be stripped.</p>
		 * @return string <p>Returns a string containing the next line of the file with HTML and PHP code stripped, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.fgetss.php
		 * @see fgetss()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetss(string $allowable_tags = null): string {}

		/**
		 * Portable file locking
		 * <p>Locks or unlocks the file in the same portable way as <code>flock()</code>.</p>
		 * @param int $operation <p><code>operation</code> is one of the following:</p><ul> <li>  <b><code>LOCK_SH</code></b> to acquire a shared lock (reader).  </li> <li>  <b><code>LOCK_EX</code></b> to acquire an exclusive lock (writer).  </li> <li>  <b><code>LOCK_UN</code></b> to release a lock (shared or exclusive).  </li> </ul> <p>It is also possible to add <b><code>LOCK_NB</code></b> as a bitmask to one of the above operations, if <code>flock()</code> should not block during the locking attempt.</p>
		 * @param int $wouldBlock <p>Set to <b><code>true</code></b> if the lock would block (EWOULDBLOCK errno condition).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.flock.php
		 * @see flock()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function flock(int $operation, int &$wouldBlock = null): bool {}

		/**
		 * Output all remaining data on a file pointer
		 * <p>Reads to EOF on the given file pointer from the current position and writes the results to the output buffer.</p><p>You may need to call <code>SplFileObject::rewind()</code> to reset the file pointer to the beginning of the file if you have already written data to the file.</p>
		 * @return int <p>Returns the number of characters read from <code>handle</code> and passed through to the output.</p>
		 * @link https://php.net/manual/en/splfileobject.fpassthru.php
		 * @see fpassthru()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fpassthru(): int {}

		/**
		 * Write a field array as a CSV line
		 * <p>Writes the <code>fields</code> array to the file as a CSV line.</p>
		 * @param array $fields <p>An array of values.</p>
		 * @param string $separator <p>The optional <code>separator</code> parameter sets the field delimiter (one single-byte character only).</p>
		 * @param string $enclosure <p>The optional <code>enclosure</code> parameter sets the field enclosure (one single-byte character only).</p>
		 * @param string $escape <p>The optional <code>escape</code> parameter sets the escape character (at most one single-byte character). An empty string (<code>""</code>) disables the proprietary escape mechanism.</p>
		 * @param string $eol <p>The optional <code>eol</code> parameter sets a custom End of Line sequence.</p>
		 * @return int|false <p>Returns the length of the written string or <b><code>false</code></b> on failure.</p><p>Returns <b><code>false</code></b>, and does not write the CSV line to the file, if the <code>separator</code> or <code>enclosure</code> parameter is not a single character.</p>
		 * @link https://php.net/manual/en/splfileobject.fputcsv.php
		 * @see fputcsv()
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false {}

		/**
		 * Read from file
		 * <p>Reads the given number of bytes from the file.</p>
		 * @param int $length <p>The number of bytes to read.</p>
		 * @return string|false <p>Returns the string read from the file or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.fread.php
		 * @see fread()
		 * @since PHP 5 >= 5.5.11, PHP 7, PHP 8
		 */
		public function fread(int $length): string|false {}

		/**
		 * Parses input from file according to a format
		 * <p>Reads a line from the file and interprets it according to the specified <code>format</code>, which is described in the documentation for <code>sprintf()</code>.</p><p>Any whitespace in the <code>format</code> string matches any whitespace in the line from the file. This means that even a tab <code>\t</code> in the format string can match a single space character in the input stream.</p>
		 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
		 * @param mixed $vars <p>The optional assigned values.</p>
		 * @return array|int|null <p>If only one parameter is passed to this method, the values parsed will be returned as an array. Otherwise, if optional parameters are passed, the function will return the number of assigned values. The optional parameters must be passed by reference.</p>
		 * @link https://php.net/manual/en/splfileobject.fscanf.php
		 * @see fscanf(), sscanf(), printf(), sprintf()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fscanf(string $format, mixed &...$vars): array|int|null {}

		/**
		 * Seek to a position
		 * <p>Seek to a position in the file measured in bytes from the beginning of the file, obtained by adding <code>offset</code> to the position specified by <code>whence</code>.</p>
		 * @param int $offset <p>The offset. A negative value can be used to move backwards through the file which is useful when SEEK_END is used as the <code>whence</code> value.</p>
		 * @param int $whence <p><code>whence</code> values are:</p><ul> <li><b><code>SEEK_SET</code></b> - Set position equal to <code>offset</code> bytes.</li> <li><b><code>SEEK_CUR</code></b> - Set position to current location plus <code>offset</code>.</li> <li><b><code>SEEK_END</code></b> - Set position to end-of-file plus <code>offset</code>.</li> </ul> <p>If <code>whence</code> is not specified, it is assumed to be <b><code>SEEK_SET</code></b>.</p>
		 * @return int <p>Returns 0 if the seek was successful, -1 otherwise. Note that seeking past EOF is not considered an error.</p>
		 * @link https://php.net/manual/en/splfileobject.fseek.php
		 * @see fseek()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fseek(int $offset, int $whence = SEEK_SET): int {}

		/**
		 * Gets information about the file
		 * <p>Gathers the statistics of the file. Behaves identically to <code>fstat()</code>.</p>
		 * @return array <p>Returns an array with the statistics of the file; the format of the array is described in detail on the <code>stat()</code> manual page.</p>
		 * @link https://php.net/manual/en/splfileobject.fstat.php
		 * @see fstat(), stat()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fstat(): array {}

		/**
		 * Return current file position
		 * <p>Returns the position of the file pointer which represents the current offset in the file stream.</p>
		 * @return int|false <p>Returns the position of the file pointer as an integer, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.ftell.php
		 * @see ftell()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function ftell(): int|false {}

		/**
		 * Truncates the file to a given length
		 * <p>Truncates the file to <code>size</code> bytes.</p>
		 * @param int $size <p>The size to truncate to.</p> <p><b>Note</b>:</p><p>If <code>size</code> is larger than the file it is extended with null bytes.</p> <p>If <code>size</code> is smaller than the file, the extra data will be lost.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.ftruncate.php
		 * @see ftruncate()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function ftruncate(int $size): bool {}

		/**
		 * Write to file
		 * <p>Writes the contents of <code>string</code> to the file</p>
		 * @param string $data <p>The string to be written to the file.</p>
		 * @param int $length <p>If the <code>length</code> argument is given, writing will stop after <code>length</code> bytes have been written or the end of <code>string</code> is reached, whichever comes first.</p>
		 * @return int|false <p>Returns the number of bytes written, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.fwrite.php
		 * @see fwrite()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fwrite(string $data, int $length = 0): int|false {}

		/**
		 * Gets last access time of the file
		 * <p>Gets the last access time for the file.</p>
		 * @return int|false <p>Returns the time the file was last accessed on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getatime.php
		 * @see fileatime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getATime(): int|false {}

		/**
		 * Gets the base name of the file
		 * <p>This method returns the base name of the file, directory, or link without path info.</p><p><b>SplFileInfo::getBasename()</b> is locale aware, so for it to see the correct basename with multibyte character paths, the matching locale must be set using the <code>setlocale()</code> function.</p>
		 * @param string $suffix <p>Optional suffix to omit from the base name returned.</p>
		 * @return string <p>Returns the base name without path information.</p>
		 * @link https://php.net/manual/en/splfileinfo.getbasename.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Gets the inode change time
		 * <p>Returns the inode change time for the file. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>The last change time, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getctime.php
		 * @see filectime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getCTime(): int|false {}

		/**
		 * No purpose
		 * <p>An <code>SplFileObject</code> does not have children so this method returns <b><code>null</code></b>.</p>
		 * @return ?RecursiveIterator <p>Returns <b><code>null</code></b>.</p>
		 * @link https://php.net/manual/en/splfileobject.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): ?\RecursiveIterator {}

		/**
		 * Get the delimiter, enclosure and escape character for CSV
		 * <p>Gets the delimiter, enclosure and escape character used for parsing CSV fields.</p>
		 * @return array <p>Returns an indexed array containing the delimiter, enclosure and escape character.</p>
		 * @link https://php.net/manual/en/splfileobject.getcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getCsvControl(): array {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/splfileinfo.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Gets the filename
		 * <p>Gets the filename without any path information.</p>
		 * @return string <p>The filename.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfilename.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Gets flags for the SplFileObject
		 * <p>Gets the flags set for an instance of SplFileObject as an <code>int</code>.</p>
		 * @return int <p>Returns an <code>int</code> representing the flags.</p>
		 * @link https://php.net/manual/en/splfileobject.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Gets the file group
		 * <p>Gets the file group. The group ID is returned in numerical format.</p>
		 * @return int|false <p>The group id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getgroup.php
		 * @see posix_getgrgid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getGroup(): int|false {}

		/**
		 * Gets the inode for the file
		 * <p>Gets the inode number for the filesystem object.</p>
		 * @return int|false <p>Returns the inode number for the filesystem object on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getinode.php
		 * @see fileinode()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getInode(): int|false {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Gets the last modified time
		 * <p>Returns the time when the contents of the file were changed. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>Returns the last modified time for the file, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getmtime.php
		 * @see filemtime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getMTime(): int|false {}

		/**
		 * Get maximum line length
		 * <p>Gets the maximum line length as set by <code>SplFileObject::setMaxLineLen()</code>.</p>
		 * @return int <p>Returns the maximum line length if one has been set with <code>SplFileObject::setMaxLineLen()</code>, default is <code>0</code>.</p>
		 * @link https://php.net/manual/en/splfileobject.getmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getMaxLineLen(): int {}

		/**
		 * Gets the owner of the file
		 * <p>Gets the file owner. The owner ID is returned in numerical format.</p>
		 * @return int|false <p>The owner id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getOwner(): int|false {}

		/**
		 * Gets the path without filename
		 * <p>Returns the path to the file, omitting the filename and any trailing slash.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpath.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Gets the path to the file
		 * <p>Returns the path to the file.</p>
		 * @return string <p>The path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathname.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Gets file permissions
		 * <p>Gets the file permissions for the file.</p>
		 * @return int|false <p>Returns the file permissions on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getperms.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPerms(): int|false {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Gets file size
		 * <p>Returns the filesize in bytes for the file referenced.</p>
		 * @return int|false <p>The filesize in bytes on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getsize.php
		 * @see filesize()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getSize(): int|false {}

		/**
		 * Gets file type
		 * <p>Returns the type of the file referenced.</p>
		 * @return string|false <p>A <code>string</code> representing the type of the entry. May be one of <code>file</code>, <code>link</code>, <code>dir</code>, <code>block</code>, <code>fifo</code>, <code>char</code>, <code>socket</code>, or <code>unknown</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.gettype.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getType(): string|false {}

		/**
		 * SplFileObject does not have children
		 * <p>An <code>SplFileObject</code> does not have children so this method always return <b><code>false</code></b>.</p>
		 * @return bool <p>Returns <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/splfileobject.haschildren.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Tells if the file is a directory
		 * <p>This method can be used to determine if the file is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if a directory, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isdir.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Tells if the file is executable
		 * <p>Checks if the file is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if executable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isexecutable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Tells if the object references a regular file
		 * <p>Checks if the file referenced by this SplFileInfo object exists and is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a link), <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isfile.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Tells if the file is a link
		 * <p>Use this method to check if the file referenced by the SplFileInfo object is a link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is a link, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.islink.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Tells if file is readable
		 * <p>Check if the file is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if readable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isreadable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Tells if the entry is writable
		 * <p>Checks if the current entry is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if writable, <b><code>false</code></b> otherwise;</p>
		 * @link https://php.net/manual/en/splfileinfo.iswritable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Get line number
		 * <p>Gets the current line number.</p><p><b>Note</b>:</p><p>This number may not reflect the actual line number in the file if <code>SplFileObject::setMaxLineLen()</code> is used to read fixed lengths of the file.</p>
		 * @return int <p>Returns the current line number.</p>
		 * @link https://php.net/manual/en/splfileobject.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Read next line
		 * <p>Moves ahead to the next line in the file.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewind the file to the first line
		 * <p>Rewinds the file back to the first line.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to specified line
		 * <p>Seek to specified line in the file.</p>
		 * @param int $line <p>The zero-based line number to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function seek(int $line): void {}

		/**
		 * Set the delimiter, enclosure and escape character for CSV
		 * <p>Sets the delimiter, enclosure and escape character for parsing CSV fields.</p>
		 * @param string $separator <p>The field delimiter (one single-byte character only).</p>
		 * @param string $enclosure <p>The field enclosure character (one single-byte character only).</p>
		 * @param string $escape <p>The field escape character (at most one single-byte character). An empty string (<code>""</code>) disables the proprietary escape mechanism.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.setcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setCsvControl(string $separator = ",", string $enclosure = "\"", string $escape = "\\"): void {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets flags for the SplFileObject
		 * <p>Sets the flags to be used by the <code>SplFileObject</code>.</p>
		 * @param int $flags <p>Bit mask of the flags to set. See SplFileObject constants for the available flags.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Set maximum line length
		 * <p>Sets the maximum length of a line to be read.</p>
		 * @param int $maxLength <p>The maximum length of a line.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.setmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setMaxLineLen(int $maxLength): void {}

		/**
		 * Not at EOF
		 * <p>Check whether EOF has been reached.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if not reached EOF, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileobject.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplFixedArray class provides the main functionalities of array. The main difference between a SplFixedArray and a normal PHP array is that the SplFixedArray must be resized manually and allows only integers within the range as indexes. The advantage is that it uses less memory than a standard <code>array</code>.</p>
	 * @link https://php.net/manual/en/class.splfixedarray.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplFixedArray implements \IteratorAggregate, \ArrayAccess, \Countable, \JsonSerializable {

		/**
		 * Constructs a new fixed array
		 * <p>Initializes a fixed array with a number of <b><code>null</code></b> values equal to <code>size</code>.</p>
		 * @param int $size <p>The size of the fixed array. This expects a number between <code>0</code> and <b><code>PHP_INT_MAX</code></b>.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfixedarray.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(int $size = 0) {}

		/**
		 * Reinitialises the array after being unserialised
		 * <p>Reinitialises the array after being unserialised.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfixedarray.wakeup.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function __wakeup(): void {}

		/**
		 * Returns the size of the array
		 * <p>Returns the size of the array.</p>
		 * @return int <p>Returns the size of the array.</p>
		 * @link https://php.net/manual/en/splfixedarray.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current array entry
		 * <p>Get the current array element.</p>
		 * @return mixed <p>The current element value.</p>
		 * @link https://php.net/manual/en/splfixedarray.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function current(): mixed {}

		/**
		 * Import a PHP array in a SplFixedArray instance
		 * <p>Import the PHP array <code>array</code> in a new <code>SplFixedArray</code> instance</p>
		 * @param array $array <p>The array to import.</p>
		 * @param bool $preserveKeys <p>Try to save the numeric indexes used in the original array.</p>
		 * @return SplFixedArray <p>Returns an instance of <code>SplFixedArray</code> containing the array content.</p>
		 * @link https://php.net/manual/en/splfixedarray.fromarray.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public static function fromArray(array $array, bool $preserveKeys = true): \SplFixedArray {}

		/**
		 * Gets the size of the array
		 * <p>Gets the size of the array.</p>
		 * @return int <p>Returns the size of the array, as an <code>int</code>.</p>
		 * @link https://php.net/manual/en/splfixedarray.getsize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getSize(): int {}

		/**
		 * Return current array index
		 * <p>Returns the current array index.</p>
		 * @return int <p>The current array index.</p>
		 * @link https://php.net/manual/en/splfixedarray.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function key(): int {}

		/**
		 * Move to next entry
		 * <p>Move the iterator to the next array entry.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfixedarray.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function next(): void {}

		/**
		 * Returns whether the requested index exists
		 * <p>Checks whether the requested index <code>index</code> exists.</p>
		 * @param int $index <p>The index being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the requested <code>index</code> exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/splfixedarray.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetExists(int $index): bool {}

		/**
		 * Returns the value at the specified index
		 * <p>Returns the value at the index <code>index</code>.</p>
		 * @param int $index <p>The index with the value.</p>
		 * @return mixed <p>The value at the specified <code>index</code>.</p>
		 * @link https://php.net/manual/en/splfixedarray.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetGet(int $index): mixed {}

		/**
		 * Sets a new value at a specified index
		 * <p>Sets the value at the specified <code>index</code> to <code>value</code>.</p>
		 * @param int $index <p>The index being set.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfixedarray.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetSet(int $index, mixed $value): void {}

		/**
		 * Unsets the value at the specified $index
		 * <p>Unsets the value at the specified index.</p>
		 * @param int $index <p>The index being unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfixedarray.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetUnset(int $index): void {}

		/**
		 * Rewind iterator back to the start
		 * <p>Rewinds the iterator to the beginning.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfixedarray.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function rewind(): void {}

		/**
		 * Change the size of an array
		 * <p>Change the size of an array to the new size of <code>size</code>. If <code>size</code> is less than the current array size, any values after the new size will be discarded. If <code>size</code> is greater than the current array size, the array will be padded with <b><code>null</code></b> values.</p>
		 * @param int $size <p>The new array size. This should be a value between <code>0</code> and <b><code>PHP_INT_MAX</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfixedarray.setsize.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setSize(int $size): bool {}

		/**
		 * Returns a PHP array from the fixed array
		 * <p>Returns a PHP array from the fixed array.</p>
		 * @return array <p>Returns a PHP <code>array</code>, similar to the fixed array.</p>
		 * @link https://php.net/manual/en/splfixedarray.toarray.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function toArray(): array {}

		/**
		 * Check whether the array contains more elements
		 * <p>Checks if the array contains any more elements.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the array contains any more elements, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfixedarray.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplHeap class provides the main functionalities of a Heap.</p>
	 * @link https://php.net/manual/en/class.splheap.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	abstract class SplHeap implements \Iterator, \Countable {

		/**
		 * Constructs a new empty heap
		 * <p>This constructs a new empty heap.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Compare elements in order to place them correctly in the heap while sifting up
		 * <p>Compare <code>value1</code> with <code>value2</code>.</p><p>Throwing exceptions in <b>SplHeap::compare()</b> can corrupt the Heap and place it in a blocked state. You can unblock it by calling <code>SplHeap::recoverFromCorruption()</code>. However, some elements might not be placed correctly and it may hence break the heap-property.</p>
		 * @param mixed $value1 <p>The value of the first node being compared.</p>
		 * @param mixed $value2 <p>The value of the second node being compared.</p>
		 * @return int <p>Result of the comparison, positive integer if <code>value1</code> is greater than <code>value2</code>, 0 if they are equal, negative integer otherwise.</p><p><b>Note</b>:</p><p>Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.</p>
		 * @link https://php.net/manual/en/splheap.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		protected function compare(mixed $value1, mixed $value2): int {}

		/**
		 * Counts the number of elements in the heap
		 * @return int <p>Returns the number of elements in the heap.</p>
		 * @link https://php.net/manual/en/splheap.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current node pointed by the iterator
		 * <p>Get the current datastructure node.</p>
		 * @return mixed <p>The current node value.</p>
		 * @link https://php.net/manual/en/splheap.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Extracts a node from top of the heap and sift up
		 * @return mixed <p>The value of the extracted node.</p>
		 * @link https://php.net/manual/en/splheap.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function extract(): mixed {}

		/**
		 * Inserts an element in the heap by sifting it up
		 * <p>Insert <code>value</code> in the heap.</p>
		 * @param mixed $value <p>The value to insert.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splheap.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function insert(mixed $value): bool {}

		/**
		 * Tells if the heap is in a corrupted state
		 * @return bool <p>Returns <b><code>true</code></b> if the heap is corrupted, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splheap.iscorrupted.php
		 * @since PHP 7, PHP 8
		 */
		public function isCorrupted(): bool {}

		/**
		 * Checks whether the heap is empty
		 * @return bool <p>Returns whether the heap is empty.</p>
		 * @link https://php.net/manual/en/splheap.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/splheap.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to the next node
		 * <p>Move to the next node. This will delete the top node of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Recover from the corrupted state and allow further actions on the heap
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splheap.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function recoverFromCorruption(): bool {}

		/**
		 * Rewind iterator back to the start (no-op)
		 * <p>This rewinds the iterator to the beginning. This is a no-op for heaps as the iterator is virtual and in fact never moves from the top of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Peeks at the node from the top of the heap
		 * @return mixed <p>The value of the node on the top.</p>
		 * @link https://php.net/manual/en/splheap.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Check whether the heap contains more nodes
		 * <p>Checks if the heap contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the heap contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splheap.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplMaxHeap class provides the main functionalities of a heap, keeping the maximum on the top.</p>
	 * @link https://php.net/manual/en/class.splmaxheap.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplMaxHeap extends \SplHeap {

		/**
		 * Compare elements in order to place them correctly in the heap while sifting up
		 * <p>Compare <code>value1</code> with <code>value2</code>.</p>
		 * @param mixed $value1 <p>The value of the first node being compared.</p>
		 * @param mixed $value2 <p>The value of the second node being compared.</p>
		 * @return int <p>Result of the comparison, positive integer if <code>value1</code> is greater than <code>value2</code>, 0 if they are equal, negative integer otherwise.</p><p><b>Note</b>:</p><p>Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.</p>
		 * @link https://php.net/manual/en/splmaxheap.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		protected function compare(mixed $value1, mixed $value2): int {}

		/**
		 * Counts the number of elements in the heap
		 * @return int <p>Returns the number of elements in the heap.</p>
		 * @link https://php.net/manual/en/splheap.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current node pointed by the iterator
		 * <p>Get the current datastructure node.</p>
		 * @return mixed <p>The current node value.</p>
		 * @link https://php.net/manual/en/splheap.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Extracts a node from top of the heap and sift up
		 * @return mixed <p>The value of the extracted node.</p>
		 * @link https://php.net/manual/en/splheap.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function extract(): mixed {}

		/**
		 * Inserts an element in the heap by sifting it up
		 * <p>Insert <code>value</code> in the heap.</p>
		 * @param mixed $value <p>The value to insert.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splheap.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function insert(mixed $value): bool {}

		/**
		 * Tells if the heap is in a corrupted state
		 * @return bool <p>Returns <b><code>true</code></b> if the heap is corrupted, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splheap.iscorrupted.php
		 * @since PHP 7, PHP 8
		 */
		public function isCorrupted(): bool {}

		/**
		 * Checks whether the heap is empty
		 * @return bool <p>Returns whether the heap is empty.</p>
		 * @link https://php.net/manual/en/splheap.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/splheap.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to the next node
		 * <p>Move to the next node. This will delete the top node of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Recover from the corrupted state and allow further actions on the heap
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splheap.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function recoverFromCorruption(): bool {}

		/**
		 * Rewind iterator back to the start (no-op)
		 * <p>This rewinds the iterator to the beginning. This is a no-op for heaps as the iterator is virtual and in fact never moves from the top of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Peeks at the node from the top of the heap
		 * @return mixed <p>The value of the node on the top.</p>
		 * @link https://php.net/manual/en/splheap.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Check whether the heap contains more nodes
		 * <p>Checks if the heap contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the heap contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splheap.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplMinHeap class provides the main functionalities of a heap, keeping the minimum on the top.</p>
	 * @link https://php.net/manual/en/class.splminheap.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplMinHeap extends \SplHeap {

		/**
		 * Compare elements in order to place them correctly in the heap while sifting up
		 * <p>Compare <code>value1</code> with <code>value2</code>.</p>
		 * @param mixed $value1 <p>The value of the first node being compared.</p>
		 * @param mixed $value2 <p>The value of the second node being compared.</p>
		 * @return int <p>Result of the comparison, positive integer if <code>value1</code> is lower than <code>value2</code>, 0 if they are equal, negative integer otherwise.</p><p><b>Note</b>:</p><p>Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.</p>
		 * @link https://php.net/manual/en/splminheap.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		protected function compare(mixed $value1, mixed $value2): int {}

		/**
		 * Counts the number of elements in the heap
		 * @return int <p>Returns the number of elements in the heap.</p>
		 * @link https://php.net/manual/en/splheap.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current node pointed by the iterator
		 * <p>Get the current datastructure node.</p>
		 * @return mixed <p>The current node value.</p>
		 * @link https://php.net/manual/en/splheap.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Extracts a node from top of the heap and sift up
		 * @return mixed <p>The value of the extracted node.</p>
		 * @link https://php.net/manual/en/splheap.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function extract(): mixed {}

		/**
		 * Inserts an element in the heap by sifting it up
		 * <p>Insert <code>value</code> in the heap.</p>
		 * @param mixed $value <p>The value to insert.</p>
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splheap.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function insert(mixed $value): bool {}

		/**
		 * Tells if the heap is in a corrupted state
		 * @return bool <p>Returns <b><code>true</code></b> if the heap is corrupted, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splheap.iscorrupted.php
		 * @since PHP 7, PHP 8
		 */
		public function isCorrupted(): bool {}

		/**
		 * Checks whether the heap is empty
		 * @return bool <p>Returns whether the heap is empty.</p>
		 * @link https://php.net/manual/en/splheap.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/splheap.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to the next node
		 * <p>Move to the next node. This will delete the top node of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Recover from the corrupted state and allow further actions on the heap
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splheap.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function recoverFromCorruption(): bool {}

		/**
		 * Rewind iterator back to the start (no-op)
		 * <p>This rewinds the iterator to the beginning. This is a no-op for heaps as the iterator is virtual and in fact never moves from the top of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splheap.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Peeks at the node from the top of the heap
		 * @return mixed <p>The value of the node on the top.</p>
		 * @link https://php.net/manual/en/splheap.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Check whether the heap contains more nodes
		 * <p>Checks if the heap contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the heap contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splheap.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set. This dual purpose can be useful in many cases involving the need to uniquely identify objects.</p>
	 * @link https://php.net/manual/en/class.splobjectstorage.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class SplObjectStorage implements \Countable, \Iterator, \Serializable, \ArrayAccess {

		/**
		 * Adds all objects from another storage
		 * <p>Adds all objects-data pairs from a different storage in the current storage.</p>
		 * @param \SplObjectStorage $storage <p>The storage you want to import.</p>
		 * @return int <p>The number of objects in the storage.</p>
		 * @link https://php.net/manual/en/splobjectstorage.addall.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function addAll(\SplObjectStorage $storage): int {}

		/**
		 * Adds an object in the storage
		 * <p>Adds an <code>object</code> inside the storage, and optionally associate it to some data.</p>
		 * @param object $object <p>The <code>object</code> to add.</p>
		 * @param mixed $info <p>The data to associate with the <code>object</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.attach.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function attach(object $object, mixed $info = null): void {}

		/**
		 * Checks if the storage contains a specific object
		 * <p>Checks if the storage contains the <code>object</code> provided.</p>
		 * @param object $object <p>The <code>object</code> to look for.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the <code>object</code> is in the storage, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splobjectstorage.contains.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function contains(object $object): bool {}

		/**
		 * Returns the number of objects in the storage
		 * <p>Counts the number of objects in the storage.</p>
		 * @param int $mode <p>If the optional <code>mode</code> parameter is set to <b><code>COUNT_RECURSIVE</code></b> (or 1), <b>SplObjectStorage::count()</b> will recursively count the storage.</p>
		 * @return int <p>The number of objects in the storage.</p>
		 * @link https://php.net/manual/en/splobjectstorage.count.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function count(int $mode = COUNT_NORMAL): int {}

		/**
		 * Returns the current storage entry
		 * <p>Returns the current storage entry.</p>
		 * @return object <p>The <code>object</code> at the current iterator position.</p>
		 * @link https://php.net/manual/en/splobjectstorage.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): object {}

		/**
		 * Removes an object from the storage
		 * <p>Removes the <code>object</code> from the storage.</p>
		 * @param object $object <p>The <code>object</code> to remove.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.detach.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function detach(object $object): void {}

		/**
		 * Calculate a unique identifier for the contained objects
		 * <p>This method calculates an identifier for the objects added to an <code>SplObjectStorage</code> object.</p><p>The implementation in <code>SplObjectStorage</code> returns the same value as <code>spl_object_hash()</code>.</p><p>The storage object will never contain more than one object with the same identifier. As such, it can be used to implement a set (a collection of unique values) where the quality of an object being unique is determined by the value returned by this function being unique.</p>
		 * @param object $object <p>The object whose identifier is to be calculated.</p>
		 * @return string <p>A <code>string</code> with the calculated identifier.</p>
		 * @link https://php.net/manual/en/splobjectstorage.gethash.php
		 * @see spl_object_hash()
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function getHash(object $object): string {}

		/**
		 * Returns the data associated with the current iterator entry
		 * <p>Returns the data, or info, associated with the object pointed by the current iterator position.</p>
		 * @return mixed <p>The data associated with the current iterator position.</p>
		 * @link https://php.net/manual/en/splobjectstorage.getinfo.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getInfo(): mixed {}

		/**
		 * Returns the index at which the iterator currently is
		 * <p>Returns the index at which the iterator currently is.</p>
		 * @return int <p>The index corresponding to the position of the iterator.</p>
		 * @link https://php.net/manual/en/splobjectstorage.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to the next entry
		 * <p>Moves the iterator to the next <code>object</code> in the storage.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Checks whether an object exists in the storage
		 * <p>Checks whether an <code>object</code> exists in the storage.</p><p><b>Note</b>:</p><p><b>SplObjectStorage::offsetExists()</b> is an alias of <code>SplObjectStorage::contains()</code>.</p>
		 * @param object $object <p>The <code>object</code> to look for.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the <code>object</code> exists in the storage, and <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splobjectstorage.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetExists(object $object): bool {}

		/**
		 * Returns the data associated with an object
		 * <p>Returns the data associated with an <code>object</code> in the storage.</p>
		 * @param object $object <p>The <code>object</code> to look for.</p>
		 * @return mixed <p>The data previously associated with the <code>object</code> in the storage.</p>
		 * @link https://php.net/manual/en/splobjectstorage.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetGet(object $object): mixed {}

		/**
		 * Associates data to an object in the storage
		 * <p>Associate data to an <code>object</code> in the storage.</p><p><b>Note</b>:</p><p><b>SplObjectStorage::offsetSet()</b> is an alias of <code>SplObjectStorage::attach()</code>.</p>
		 * @param object $object <p>The <code>object</code> to associate data with.</p>
		 * @param mixed $info <p>The data to associate with the <code>object</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetSet(object $object, mixed $info = null): void {}

		/**
		 * Removes an object from the storage
		 * <p>Removes an <code>object</code> from the storage.</p><p><b>Note</b>:</p><p><b>SplObjectStorage::offsetUnset()</b> is an alias of <code>SplObjectStorage::detach()</code>.</p>
		 * @param object $object <p>The <code>object</code> to remove.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetUnset(object $object): void {}

		/**
		 * Removes objects contained in another storage from the current storage
		 * <p>Removes objects contained in another storage from the current storage.</p>
		 * @param \SplObjectStorage $storage <p>The storage containing the elements to remove.</p>
		 * @return int <p>Returns the number of removed objects.</p>
		 * @link https://php.net/manual/en/splobjectstorage.removeall.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function removeAll(\SplObjectStorage $storage): int {}

		/**
		 * Removes all objects except for those contained in another storage from the current storage
		 * <p>Removes all objects except for those contained in another storage from the current storage.</p>
		 * @param \SplObjectStorage $storage <p>The storage containing the elements to retain in the current storage.</p>
		 * @return int <p>Returns the number of removed objects.</p>
		 * @link https://php.net/manual/en/splobjectstorage.removeallexcept.php
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function removeAllExcept(\SplObjectStorage $storage): int {}

		/**
		 * Rewind the iterator to the first storage element
		 * <p>Rewind the iterator to the first storage element.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Serializes the storage
		 * <p>Returns a string representation of the storage.</p>
		 * @return string <p>A string representing the storage.</p>
		 * @link https://php.net/manual/en/splobjectstorage.serialize.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Sets the data associated with the current iterator entry
		 * <p>Associates data, or info, with the object currently pointed to by the iterator.</p>
		 * @param mixed $info <p>The data to associate with the current iterator entry.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.setinfo.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setInfo(mixed $info): void {}

		/**
		 * Unserializes a storage from its string representation
		 * <p>Unserializes storage entries and attach them to the current storage.</p>
		 * @param string $data <p>The serialized representation of a storage.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobjectstorage.unserialize.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}

		/**
		 * Returns if the current iterator entry is valid
		 * <p>Returns if the current iterator entry is valid.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the iterator entry is valid, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splobjectstorage.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The <b>SplObserver</b> interface is used alongside <code>SplSubject</code> to implement the Observer Design Pattern.</p>
	 * @link https://php.net/manual/en/class.splobserver.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	interface SplObserver {

		/**
		 * Receive update from subject
		 * <p>This method is called when any <code>SplSubject</code> to which the observer is attached calls <code>SplSubject::notify()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SplSubject $subject <p>The <code>SplSubject</code> notifying the observer of an update.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splobserver.update.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function update(\SplSubject $subject): void;
	}

	/**
	 * <p>The SplPriorityQueue class provides the main functionalities of a prioritized queue, implemented using a max heap.</p>
	 * <p><b>Note</b>:  The order of elements with identical priority is <i>undefined</i>. It may differ from the order in which they have been inserted. </p>
	 * @link https://php.net/manual/en/class.splpriorityqueue.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplPriorityQueue implements \Iterator, \Countable {

		/**
		 * Constructs a new empty queue
		 * <p>This constructs a new empty queue.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Compare priorities in order to place elements correctly in the heap while sifting up
		 * <p>Compare <code>priority1</code> with <code>priority2</code>.</p>
		 * @param mixed $priority1 <p>The priority of the first node being compared.</p>
		 * @param mixed $priority2 <p>The priority of the second node being compared.</p>
		 * @return int <p>Result of the comparison, positive integer if <code>priority1</code> is greater than <code>priority2</code>, 0 if they are equal, negative integer otherwise.</p><p><b>Note</b>:</p><p>Multiple elements with the same priority will get dequeued in no particular order.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.compare.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function compare(mixed $priority1, mixed $priority2): int {}

		/**
		 * Counts the number of elements in the queue
		 * @return int <p>Returns the number of elements in the queue.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current node pointed by the iterator
		 * <p>Get the current datastructure node.</p>
		 * @return mixed <p>The value or priority (or both) of the current node, depending on the extract flag.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Extracts a node from top of the heap and sift up
		 * @return mixed <p>The value or priority (or both) of the extracted node, depending on the extract flag.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.extract.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function extract(): mixed {}

		/**
		 * Get the flags of extraction
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return int <p>Returns the flags of extraction.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.getextractflags.php
		 * @since PHP 7, PHP 8
		 */
		public function getExtractFlags(): int {}

		/**
		 * Inserts an element in the queue by sifting it up
		 * <p>Insert <code>value</code> with the priority <code>priority</code> in the queue.</p>
		 * @param mixed $value <p>The value to insert.</p>
		 * @param mixed $priority <p>The associated priority.</p>
		 * @return bool <p>Returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.insert.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function insert(mixed $value, mixed $priority): bool {}

		/**
		 * Tells if the priority queue is in a corrupted state
		 * @return bool <p>Returns <b><code>true</code></b> if the priority queue is corrupted, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.iscorrupted.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isCorrupted(): bool {}

		/**
		 * Checks whether the queue is empty
		 * @return bool <p>Returns whether the queue is empty.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to the next node
		 * <p>Extracts the top node from the queue.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Recover from the corrupted state and allow further actions on the queue
		 * @return bool <p>Always returns <b><code>true</code></b>.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.recoverfromcorruption.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function recoverFromCorruption(): bool {}

		/**
		 * Rewind iterator back to the start (no-op)
		 * <p>This rewinds the iterator to the beginning. This is a no-op for heaps as the iterator is virtual and in fact never moves from the top of the heap.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Sets the mode of extraction
		 * @param int $flags <p>Defines what is extracted by <code>SplPriorityQueue::current()</code>, <code>SplPriorityQueue::top()</code> and <code>SplPriorityQueue::extract()</code>.</p> <ul> <li><b><code>SplPriorityQueue::EXTR_DATA</code></b> (0x00000001): Extract the data</li> <li><b><code>SplPriorityQueue::EXTR_PRIORITY</code></b> (0x00000002): Extract the priority</li> <li><b><code>SplPriorityQueue::EXTR_BOTH</code></b> (0x00000003): Extract an array containing both</li> </ul> <p>The default mode is <b><code>SplPriorityQueue::EXTR_DATA</code></b>.</p>
		 * @return int <p>Returns the flags of extraction.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.setextractflags.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setExtractFlags(int $flags): int {}

		/**
		 * Peeks at the node from the top of the queue
		 * @return mixed <p>The value or priority (or both) of the top node, depending on the extract flag.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Check whether the queue contains more nodes
		 * <p>Checks if the queue contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the queue contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splpriorityqueue.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.</p>
	 * @link https://php.net/manual/en/class.splqueue.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplQueue extends \SplDoublyLinkedList {

		/**
		 * Constructs a new stack implemented using a doubly linked list
		 * <p>This constructs a new empty stack.</p><p><b>Note</b>:</p><p>This method automatically sets the iterator mode to SplDoublyLinkedList::IT_MODE_LIFO.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splstack.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Add/insert a new value at the specified index
		 * <p>Insert the value <code>value</code> at the specified <code>index</code>, shuffling the previous value at that index (and all subsequent values) up through the list.</p>
		 * @param int $index <p>The index where the new value is to be inserted.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function add(int $index, mixed $value): void {}

		/**
		 * Peeks at the node from the beginning of the doubly linked list
		 * @return mixed <p>The value of the first node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.bottom.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function bottom(): mixed {}

		/**
		 * Counts the number of elements in the doubly linked list
		 * @return int <p>Returns the number of elements in the doubly linked list.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current array entry
		 * <p>Get the current doubly linked list node.</p>
		 * @return mixed <p>The current node value.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Dequeues a node from the queue
		 * <p>Dequeues <code>value</code> from the top of the queue.</p><p><b>Note</b>:</p><p><b>SplQueue::dequeue()</b> is an alias of <code>SplDoublyLinkedList::shift()</code>.</p>
		 * @return mixed <p>The value of the dequeued node.</p>
		 * @link https://php.net/manual/en/splqueue.dequeue.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function dequeue(): mixed {}

		/**
		 * Adds an element to the queue
		 * <p>Enqueues <code>value</code> at the end of the queue.</p><p><b>Note</b>:</p><p><b>SplQueue::enqueue()</b> is an alias of <code>SplDoublyLinkedList::push()</code>.</p>
		 * @param mixed $value <p>The value to enqueue.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splqueue.enqueue.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function enqueue(mixed $value): void {}

		/**
		 * Returns the mode of iteration
		 * @return int <p>Returns the different modes and flags that affect the iteration.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getIteratorMode(): int {}

		/**
		 * Checks whether the doubly linked list is empty
		 * @return bool <p>Returns whether the doubly linked list is empty.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to next entry
		 * <p>Move the iterator to the next node.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Returns whether the requested $index exists
		 * @param int $index <p>The index being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the requested <code>index</code> exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetExists(int $index): bool {}

		/**
		 * Returns the value at the specified $index
		 * @param int $index <p>The index with the value.</p>
		 * @return mixed <p>The value at the specified <code>index</code>.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetGet(int $index): mixed {}

		/**
		 * Sets the value at the specified $index to $value
		 * <p>Sets the value at the specified <code>index</code> to <code>value</code>.</p>
		 * @param ?int $index <p>The index being set. If <b><code>null</code></b>, the next value will be added after the last item.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetSet(?int $index, mixed $value): void {}

		/**
		 * Unsets the value at the specified $index
		 * <p>Unsets the value at the specified index.</p>
		 * @param int $index <p>The index being unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetUnset(int $index): void {}

		/**
		 * Pops a node from the end of the doubly linked list
		 * @return mixed <p>The value of the popped node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.pop.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function pop(): mixed {}

		/**
		 * Move to previous entry
		 * <p>Move the iterator to the previous node.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.prev.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function prev(): void {}

		/**
		 * Pushes an element at the end of the doubly linked list
		 * <p>Pushes <code>value</code> at the end of the doubly linked list.</p>
		 * @param mixed $value <p>The value to push.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.push.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function push(mixed $value): void {}

		/**
		 * Rewind iterator back to the start
		 * <p>This rewinds the iterator to the beginning.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Serializes the storage
		 * <p>Serializes the storage.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The serialized string.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.serialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Sets the mode of iteration
		 * @param int $mode <p>There is only one iteration parameter you can modify.</p> <ul> <li> The behavior of the iterator (either one or the other): <ul> <li><b><code>SplDoublyLinkedList::IT_MODE_DELETE</code></b> (Elements are deleted by the iterator)</li> <li><b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b> (Elements are traversed by the iterator)</li> </ul> </li> </ul> <p>The default mode is: <b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b> | <b><code>SplDoublyLinkedList::IT_MODE_KEEP</code></b></p> <p><b>Warning</b></p> <p>The direction of iteration can not be changed for SplQueues, it is always <b><code>SplDoublyLinkedList::IT_MODE_FIFO</code></b>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splqueue.setiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setIteratorMode(int $mode): void {}

		/**
		 * Shifts a node from the beginning of the doubly linked list
		 * @return mixed <p>The value of the shifted node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.shift.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function shift(): mixed {}

		/**
		 * Peeks at the node from the end of the doubly linked list
		 * @return mixed <p>The value of the last node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Unserializes the storage
		 * <p>Unserializes the storage, from <code>SplDoublyLinkedList::serialize()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data <p>The serialized string.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.unserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}

		/**
		 * Prepends the doubly linked list with an element
		 * <p>Prepends <code>value</code> at the beginning of the doubly linked list.</p>
		 * @param mixed $value <p>The value to unshift.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.unshift.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function unshift(mixed $value): void {}

		/**
		 * Check whether the doubly linked list contains more nodes
		 * <p>Checks if the doubly linked list contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the doubly linked list contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.</p>
	 * @link https://php.net/manual/en/class.splstack.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class SplStack extends \SplDoublyLinkedList {

		/**
		 * Constructs a new stack implemented using a doubly linked list
		 * <p>This constructs a new empty stack.</p><p><b>Note</b>:</p><p>This method automatically sets the iterator mode to SplDoublyLinkedList::IT_MODE_LIFO.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splstack.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct() {}

		/**
		 * Add/insert a new value at the specified index
		 * <p>Insert the value <code>value</code> at the specified <code>index</code>, shuffling the previous value at that index (and all subsequent values) up through the list.</p>
		 * @param int $index <p>The index where the new value is to be inserted.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function add(int $index, mixed $value): void {}

		/**
		 * Peeks at the node from the beginning of the doubly linked list
		 * @return mixed <p>The value of the first node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.bottom.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function bottom(): mixed {}

		/**
		 * Counts the number of elements in the doubly linked list
		 * @return int <p>Returns the number of elements in the doubly linked list.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.count.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function count(): int {}

		/**
		 * Return current array entry
		 * <p>Get the current doubly linked list node.</p>
		 * @return mixed <p>The current node value.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.current.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function current(): mixed {}

		/**
		 * Returns the mode of iteration
		 * @return int <p>Returns the different modes and flags that affect the iteration.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getIteratorMode(): int {}

		/**
		 * Checks whether the doubly linked list is empty
		 * @return bool <p>Returns whether the doubly linked list is empty.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.isempty.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function isEmpty(): bool {}

		/**
		 * Return current node index
		 * <p>This function returns the current node index</p>
		 * @return int <p>The current node index.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.key.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Move to next entry
		 * <p>Move the iterator to the next node.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.next.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Returns whether the requested $index exists
		 * @param int $index <p>The index being checked.</p>
		 * @return bool <p><b><code>true</code></b> if the requested <code>index</code> exists, otherwise <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetexists.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetExists(int $index): bool {}

		/**
		 * Returns the value at the specified $index
		 * @param int $index <p>The index with the value.</p>
		 * @return mixed <p>The value at the specified <code>index</code>.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetget.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetGet(int $index): mixed {}

		/**
		 * Sets the value at the specified $index to $value
		 * <p>Sets the value at the specified <code>index</code> to <code>value</code>.</p>
		 * @param ?int $index <p>The index being set. If <b><code>null</code></b>, the next value will be added after the last item.</p>
		 * @param mixed $value <p>The new value for the <code>index</code>.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetSet(?int $index, mixed $value): void {}

		/**
		 * Unsets the value at the specified $index
		 * <p>Unsets the value at the specified index.</p>
		 * @param int $index <p>The index being unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.offsetunset.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function offsetUnset(int $index): void {}

		/**
		 * Pops a node from the end of the doubly linked list
		 * @return mixed <p>The value of the popped node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.pop.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function pop(): mixed {}

		/**
		 * Move to previous entry
		 * <p>Move the iterator to the previous node.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.prev.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function prev(): void {}

		/**
		 * Pushes an element at the end of the doubly linked list
		 * <p>Pushes <code>value</code> at the end of the doubly linked list.</p>
		 * @param mixed $value <p>The value to push.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.push.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function push(mixed $value): void {}

		/**
		 * Rewind iterator back to the start
		 * <p>This rewinds the iterator to the beginning.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.rewind.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Serializes the storage
		 * <p>Serializes the storage.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>The serialized string.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.serialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function serialize(): string {}

		/**
		 * Sets the mode of iteration
		 * @param int $mode <p>There is only one iteration parameter you can modify.</p> <ul> <li> The behavior of the iterator (either one or the other): <ul> <li>SplDoublyLinkedList::IT_MODE_DELETE (Elements are deleted by the iterator)</li> <li>SplDoublyLinkedList::IT_MODE_KEEP (Elements are traversed by the iterator)</li> </ul> </li> </ul> <p>The default mode is 0x2 : SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_KEEP</p> <p><b>Warning</b></p> <p>The direction of iteration can no longer be changed for SplStacks. Trying to do so will result in a <code>RuntimeException</code> being thrown.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splstack.setiteratormode.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setIteratorMode(int $mode): void {}

		/**
		 * Shifts a node from the beginning of the doubly linked list
		 * @return mixed <p>The value of the shifted node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.shift.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function shift(): mixed {}

		/**
		 * Peeks at the node from the end of the doubly linked list
		 * @return mixed <p>The value of the last node.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.top.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function top(): mixed {}

		/**
		 * Unserializes the storage
		 * <p>Unserializes the storage, from <code>SplDoublyLinkedList::serialize()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $data <p>The serialized string.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.unserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function unserialize(string $data): void {}

		/**
		 * Prepends the doubly linked list with an element
		 * <p>Prepends <code>value</code> at the beginning of the doubly linked list.</p>
		 * @param mixed $value <p>The value to unshift.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.unshift.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function unshift(mixed $value): void {}

		/**
		 * Check whether the doubly linked list contains more nodes
		 * <p>Checks if the doubly linked list contains any more nodes.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the doubly linked list contains any more nodes, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/spldoublylinkedlist.valid.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>The <b>SplSubject</b> interface is used alongside <code>SplObserver</code> to implement the Observer Design Pattern.</p>
	 * @link https://php.net/manual/en/class.splsubject.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	interface SplSubject {

		/**
		 * Attach an SplObserver
		 * <p>Attaches an <code>SplObserver</code> so that it can be notified of updates.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SplObserver $observer <p>The <code>SplObserver</code> to attach.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splsubject.attach.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function attach(\SplObserver $observer): void;

		/**
		 * Detach an observer
		 * <p>Detaches an observer from the subject to no longer notify it of updates.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param \SplObserver $observer <p>The <code>SplObserver</code> to detach.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splsubject.detach.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function detach(\SplObserver $observer): void;

		/**
		 * Notify an observer
		 * <p>Notifies all attached observers.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splsubject.notify.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function notify(): void;
	}

	/**
	 * <p>The SplTempFileObject class offers an object-oriented interface for a temporary file.</p>
	 * @link https://php.net/manual/en/class.spltempfileobject.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
	 */
	class SplTempFileObject extends \SplFileObject {

		/**
		 * Construct a new temporary file object
		 * <p>Construct a new temporary file object.</p>
		 * @param int $maxMemory <p>The maximum amount of memory (in bytes, default is 2 MB) for the temporary file to use. If the temporary file exceeds this size, it will be moved to a file in the system's temp directory.</p> <p>If <code>maxMemory</code> is negative, only memory will be used. If <code>maxMemory</code> is zero, no memory will be used.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/spltempfileobject.construct.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __construct(int $maxMemory = 2 * 1024 * 1024) {}

		/**
		 * Returns the path to the file as a string
		 * <p>This method will return the file name of the referenced file.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.tostring.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Retrieve current line of file
		 * <p>Retrieves the current line of the file.</p>
		 * @return string|array|false <p>Retrieves the current line of the file. If the <b><code>SplFileObject::READ_CSV</code></b> flag is set, this method returns an array containing the current line parsed as CSV data. If the end of the file is reached, <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.current.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function current(): string|array|false {}

		/**
		 * Reached end of file
		 * <p>Determine whether the end of file has been reached</p>
		 * @return bool <p>Returns <b><code>true</code></b> if file is at EOF, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileobject.eof.php
		 * @see feof()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function eof(): bool {}

		/**
		 * Flushes the output to the file
		 * <p>Forces a write of all buffered output to the file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.fflush.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fflush(): bool {}

		/**
		 * Gets character from file
		 * <p>Gets a character from the file.</p>
		 * @return string|false <p>Returns a string containing a single character read from the file or <b><code>false</code></b> on EOF.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
		 * @link https://php.net/manual/en/splfileobject.fgetc.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fgetc(): string|false {}

		/**
		 * Gets line from file and parse as CSV fields
		 * <p>Gets a line from the file which is in CSV format and returns an array containing the fields read.</p><p><b>Note</b>:</p><p>The locale settings are taken into account by this function. If <code>LC_CTYPE</code> is e.g. <code>en_US.UTF-8</code>, files in one-byte encodings may be read wrongly by this function.</p>
		 * @param string $separator <p>The field delimiter (one single-byte character only). Defaults as a comma or the value set using <code>SplFileObject::setCsvControl()</code>.</p>
		 * @param string $enclosure <p>The field enclosure character (one single-byte character only). Defaults as a double quotation mark or the value set using <code>SplFileObject::setCsvControl()</code>.</p>
		 * @param string $escape <p>The escape character (at most one single-byte character). Defaults as a backslash (<code>\</code>) or the value set using <code>SplFileObject::setCsvControl()</code>. An empty string (<code>""</code>) disables the proprietary escape mechanism.</p> <p><b>Note</b>:  Usually an <code>enclosure</code> character is escpaped inside a field by doubling it; however, the <code>escape</code> character can be used as an alternative. So for the default parameter values <code>""</code> and <code>\"</code> have the same meaning. Other than allowing to escape the <code>enclosure</code> character the <code>escape</code> character has no special meaning; it isn't even meant to escape itself. </p>
		 * @return array|false <p>Returns an indexed array containing the fields read, or <b><code>false</code></b> on error.</p><p><b>Note</b>:</p><p>A blank line in a CSV file will be returned as an array comprising a single <b><code>null</code></b> field unless using <b><code>SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE</code></b>, in which case empty lines are skipped.</p>
		 * @link https://php.net/manual/en/splfileobject.fgetcsv.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fgetcsv(string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false {}

		/**
		 * Gets line from file
		 * <p>Gets a line from the file.</p>
		 * @return string <p>Returns a string containing the next line from the file, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.fgets.php
		 * @see fgets()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fgets(): string {}

		/**
		 * Gets line from file and strip HTML tags
		 * <p>Identical to <code>SplFileObject::fgets()</code>, except that <b>SplFileObject::fgetss()</b> attempts to strip any HTML and PHP tags from the text it reads. The function retains the parsing state from call to call, and as such is not equivalent to calling <code>strip_tags()</code> on the return value of <code>SplFileObject::fgets()</code>.</p>
		 * @param string $allowable_tags <p>Optional parameter to specify tags which should not be stripped.</p>
		 * @return string <p>Returns a string containing the next line of the file with HTML and PHP code stripped, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.fgetss.php
		 * @see fgetss()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function fgetss(string $allowable_tags = null): string {}

		/**
		 * Portable file locking
		 * <p>Locks or unlocks the file in the same portable way as <code>flock()</code>.</p>
		 * @param int $operation <p><code>operation</code> is one of the following:</p><ul> <li>  <b><code>LOCK_SH</code></b> to acquire a shared lock (reader).  </li> <li>  <b><code>LOCK_EX</code></b> to acquire an exclusive lock (writer).  </li> <li>  <b><code>LOCK_UN</code></b> to release a lock (shared or exclusive).  </li> </ul> <p>It is also possible to add <b><code>LOCK_NB</code></b> as a bitmask to one of the above operations, if <code>flock()</code> should not block during the locking attempt.</p>
		 * @param int $wouldBlock <p>Set to <b><code>true</code></b> if the lock would block (EWOULDBLOCK errno condition).</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.flock.php
		 * @see flock()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function flock(int $operation, int &$wouldBlock = null): bool {}

		/**
		 * Output all remaining data on a file pointer
		 * <p>Reads to EOF on the given file pointer from the current position and writes the results to the output buffer.</p><p>You may need to call <code>SplFileObject::rewind()</code> to reset the file pointer to the beginning of the file if you have already written data to the file.</p>
		 * @return int <p>Returns the number of characters read from <code>handle</code> and passed through to the output.</p>
		 * @link https://php.net/manual/en/splfileobject.fpassthru.php
		 * @see fpassthru()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fpassthru(): int {}

		/**
		 * Write a field array as a CSV line
		 * <p>Writes the <code>fields</code> array to the file as a CSV line.</p>
		 * @param array $fields <p>An array of values.</p>
		 * @param string $separator <p>The optional <code>separator</code> parameter sets the field delimiter (one single-byte character only).</p>
		 * @param string $enclosure <p>The optional <code>enclosure</code> parameter sets the field enclosure (one single-byte character only).</p>
		 * @param string $escape <p>The optional <code>escape</code> parameter sets the escape character (at most one single-byte character). An empty string (<code>""</code>) disables the proprietary escape mechanism.</p>
		 * @param string $eol <p>The optional <code>eol</code> parameter sets a custom End of Line sequence.</p>
		 * @return int|false <p>Returns the length of the written string or <b><code>false</code></b> on failure.</p><p>Returns <b><code>false</code></b>, and does not write the CSV line to the file, if the <code>separator</code> or <code>enclosure</code> parameter is not a single character.</p>
		 * @link https://php.net/manual/en/splfileobject.fputcsv.php
		 * @see fputcsv()
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false {}

		/**
		 * Read from file
		 * <p>Reads the given number of bytes from the file.</p>
		 * @param int $length <p>The number of bytes to read.</p>
		 * @return string|false <p>Returns the string read from the file or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.fread.php
		 * @see fread()
		 * @since PHP 5 >= 5.5.11, PHP 7, PHP 8
		 */
		public function fread(int $length): string|false {}

		/**
		 * Parses input from file according to a format
		 * <p>Reads a line from the file and interprets it according to the specified <code>format</code>, which is described in the documentation for <code>sprintf()</code>.</p><p>Any whitespace in the <code>format</code> string matches any whitespace in the line from the file. This means that even a tab <code>\t</code> in the format string can match a single space character in the input stream.</p>
		 * @param string $format <p>The format string is composed of zero or more directives: ordinary characters (excluding <code>%</code>) that are copied directly to the result and <i>conversion specifications</i>, each of which results in fetching its own parameter.</p> <p>A conversion specification follows this prototype: <code>%[argnum$][flags][width][.precision]specifier</code>.</p> <p></p>Argnum <p>An integer followed by a dollar sign <code>$</code>, to specify which number argument to treat in the conversion.</p> <p></p> <b>Flags</b>   Flag Description     <code>-</code>  Left-justify within the given field width; Right justification is the default    <code>+</code>  Prefix positive numbers with a plus sign <code>+</code>; Default only negative are prefixed with a negative sign.    <code> </code>(space)  Pads the result with spaces. This is the default.    <code>0</code>  Only left-pads numbers with zeros. With <code>s</code> specifiers this can also right-pad with zeros.    <code>'</code>(char)  Pads the result with the character (char).     <p></p>Width <p>An integer that says how many characters (minimum) this conversion should result in.</p> <p></p>Precision <p>A period <code>.</code> followed by an integer who's meaning depends on the specifier:</p><ul> <li>  For <code>e</code>, <code>E</code>, <code>f</code> and <code>F</code> specifiers: this is the number of digits to be printed after the decimal point (by default, this is 6).  </li> <li>  For <code>g</code>, <code>G</code>, <code>h</code> and <code>H</code> specifiers: this is the maximum number of significant digits to be printed.  </li> <li>  For <code>s</code> specifier: it acts as a cutoff point, setting a maximum character limit to the string.  </li> </ul> <p><b>Note</b>:  If the period is specified without an explicit value for precision, 0 is assumed. </p> <p><b>Note</b>:  Attempting to use a position specifier greater than <b><code>PHP_INT_MAX</code></b> will generate warnings. </p> <p></p> <b>Specifiers</b>   Specifier Description     <code>%</code>  A literal percent character. No argument is required.    <code>b</code>  The argument is treated as an integer and presented as a binary number.    <code>c</code>  The argument is treated as an integer and presented as the character with that ASCII.    <code>d</code>  The argument is treated as an integer and presented as a (signed) decimal number.    <code>e</code>  The argument is treated as scientific notation (e.g. 1.2e+2).    <code>E</code>  Like the <code>e</code> specifier but uses uppercase letter (e.g. 1.2E+2).    <code>f</code>  The argument is treated as a float and presented as a floating-point number (locale aware).    <code>F</code>  The argument is treated as a float and presented as a floating-point number (non-locale aware).    <code>g</code>  <p>General format.</p> <p>Let P equal the precision if nonzero, 6 if the precision is omitted, or 1 if the precision is zero. Then, if a conversion with style E would have an exponent of X:</p> <p>If P &gt; X &ge; &minus;4, the conversion is with style f and precision P &minus; (X + 1). Otherwise, the conversion is with style e and precision P &minus; 1.</p>    <code>G</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>f</code>.    <code>h</code>  Like the <code>g</code> specifier but uses <code>F</code>. Available as of PHP 8.0.0.    <code>H</code>  Like the <code>g</code> specifier but uses <code>E</code> and <code>F</code>. Available as of PHP 8.0.0.    <code>o</code>  The argument is treated as an integer and presented as an octal number.    <code>s</code>  The argument is treated and presented as a string.    <code>u</code>  The argument is treated as an integer and presented as an unsigned decimal number.    <code>x</code>  The argument is treated as an integer and presented as a hexadecimal number (with lowercase letters).    <code>X</code>  The argument is treated as an integer and presented as a hexadecimal number (with uppercase letters).     <p><b>Warning</b></p> <p>The <code>c</code> type specifier ignores padding and width</p>  <p><b>Warning</b></p> <p>Attempting to use a combination of the string and width specifiers with character sets that require more than one byte per character may result in unexpected results</p>  <p>Variables will be co-erced to a suitable type for the specifier:</p> <b>Type Handling</b>   Type Specifiers     <code>string</code> <code>s</code>   <code>int</code>  <code>d</code>, <code>u</code>, <code>c</code>, <code>o</code>, <code>x</code>, <code>X</code>, <code>b</code>    <code>float</code>  <code>e</code>, <code>E</code>, <code>f</code>, <code>F</code>, <code>g</code>, <code>G</code>, <code>h</code>, <code>H</code>
		 * @param mixed $vars <p>The optional assigned values.</p>
		 * @return array|int|null <p>If only one parameter is passed to this method, the values parsed will be returned as an array. Otherwise, if optional parameters are passed, the function will return the number of assigned values. The optional parameters must be passed by reference.</p>
		 * @link https://php.net/manual/en/splfileobject.fscanf.php
		 * @see fscanf(), sscanf(), printf(), sprintf()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fscanf(string $format, mixed &...$vars): array|int|null {}

		/**
		 * Seek to a position
		 * <p>Seek to a position in the file measured in bytes from the beginning of the file, obtained by adding <code>offset</code> to the position specified by <code>whence</code>.</p>
		 * @param int $offset <p>The offset. A negative value can be used to move backwards through the file which is useful when SEEK_END is used as the <code>whence</code> value.</p>
		 * @param int $whence <p><code>whence</code> values are:</p><ul> <li><b><code>SEEK_SET</code></b> - Set position equal to <code>offset</code> bytes.</li> <li><b><code>SEEK_CUR</code></b> - Set position to current location plus <code>offset</code>.</li> <li><b><code>SEEK_END</code></b> - Set position to end-of-file plus <code>offset</code>.</li> </ul> <p>If <code>whence</code> is not specified, it is assumed to be <b><code>SEEK_SET</code></b>.</p>
		 * @return int <p>Returns 0 if the seek was successful, -1 otherwise. Note that seeking past EOF is not considered an error.</p>
		 * @link https://php.net/manual/en/splfileobject.fseek.php
		 * @see fseek()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fseek(int $offset, int $whence = SEEK_SET): int {}

		/**
		 * Gets information about the file
		 * <p>Gathers the statistics of the file. Behaves identically to <code>fstat()</code>.</p>
		 * @return array <p>Returns an array with the statistics of the file; the format of the array is described in detail on the <code>stat()</code> manual page.</p>
		 * @link https://php.net/manual/en/splfileobject.fstat.php
		 * @see fstat(), stat()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fstat(): array {}

		/**
		 * Return current file position
		 * <p>Returns the position of the file pointer which represents the current offset in the file stream.</p>
		 * @return int|false <p>Returns the position of the file pointer as an integer, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.ftell.php
		 * @see ftell()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function ftell(): int|false {}

		/**
		 * Truncates the file to a given length
		 * <p>Truncates the file to <code>size</code> bytes.</p>
		 * @param int $size <p>The size to truncate to.</p> <p><b>Note</b>:</p><p>If <code>size</code> is larger than the file it is extended with null bytes.</p> <p>If <code>size</code> is smaller than the file, the extra data will be lost.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileobject.ftruncate.php
		 * @see ftruncate()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function ftruncate(int $size): bool {}

		/**
		 * Write to file
		 * <p>Writes the contents of <code>string</code> to the file</p>
		 * @param string $data <p>The string to be written to the file.</p>
		 * @param int $length <p>If the <code>length</code> argument is given, writing will stop after <code>length</code> bytes have been written or the end of <code>string</code> is reached, whichever comes first.</p>
		 * @return int|false <p>Returns the number of bytes written, or <b><code>false</code></b> on error.</p>
		 * @link https://php.net/manual/en/splfileobject.fwrite.php
		 * @see fwrite()
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function fwrite(string $data, int $length = 0): int|false {}

		/**
		 * Gets last access time of the file
		 * <p>Gets the last access time for the file.</p>
		 * @return int|false <p>Returns the time the file was last accessed on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getatime.php
		 * @see fileatime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getATime(): int|false {}

		/**
		 * Gets the base name of the file
		 * <p>This method returns the base name of the file, directory, or link without path info.</p><p><b>SplFileInfo::getBasename()</b> is locale aware, so for it to see the correct basename with multibyte character paths, the matching locale must be set using the <code>setlocale()</code> function.</p>
		 * @param string $suffix <p>Optional suffix to omit from the base name returned.</p>
		 * @return string <p>Returns the base name without path information.</p>
		 * @link https://php.net/manual/en/splfileinfo.getbasename.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getBasename(string $suffix = ""): string {}

		/**
		 * Gets the inode change time
		 * <p>Returns the inode change time for the file. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>The last change time, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getctime.php
		 * @see filectime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getCTime(): int|false {}

		/**
		 * No purpose
		 * <p>An <code>SplFileObject</code> does not have children so this method returns <b><code>null</code></b>.</p>
		 * @return ?RecursiveIterator <p>Returns <b><code>null</code></b>.</p>
		 * @link https://php.net/manual/en/splfileobject.getchildren.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getChildren(): ?\RecursiveIterator {}

		/**
		 * Get the delimiter, enclosure and escape character for CSV
		 * <p>Gets the delimiter, enclosure and escape character used for parsing CSV fields.</p>
		 * @return array <p>Returns an indexed array containing the delimiter, enclosure and escape character.</p>
		 * @link https://php.net/manual/en/splfileobject.getcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getCsvControl(): array {}

		/**
		 * Gets the file extension
		 * <p>Retrieves the file extension.</p>
		 * @return string <p>Returns a <code>string</code> containing the file extension, or an empty <code>string</code> if the file has no extension.</p>
		 * @link https://php.net/manual/en/splfileinfo.getextension.php
		 * @see pathinfo()
		 * @since PHP 5 >= 5.3.6, PHP 7, PHP 8
		 */
		public function getExtension(): string {}

		/**
		 * Gets an SplFileInfo object for the file
		 * <p>This method gets an <code>SplFileInfo</code> object for the referenced file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use.</p>
		 * @return SplFileInfo <p>An <code>SplFileInfo</code> object created for the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfileinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFileInfo(?string $class = null): \SplFileInfo {}

		/**
		 * Gets the filename
		 * <p>Gets the filename without any path information.</p>
		 * @return string <p>The filename.</p>
		 * @link https://php.net/manual/en/splfileinfo.getfilename.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getFilename(): string {}

		/**
		 * Gets flags for the SplFileObject
		 * <p>Gets the flags set for an instance of SplFileObject as an <code>int</code>.</p>
		 * @return int <p>Returns an <code>int</code> representing the flags.</p>
		 * @link https://php.net/manual/en/splfileobject.getflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getFlags(): int {}

		/**
		 * Gets the file group
		 * <p>Gets the file group. The group ID is returned in numerical format.</p>
		 * @return int|false <p>The group id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getgroup.php
		 * @see posix_getgrgid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getGroup(): int|false {}

		/**
		 * Gets the inode for the file
		 * <p>Gets the inode number for the filesystem object.</p>
		 * @return int|false <p>Returns the inode number for the filesystem object on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getinode.php
		 * @see fileinode()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getInode(): int|false {}

		/**
		 * Gets the target of a link
		 * <p>Gets the target of a filesystem link.</p><p><b>Note</b>:</p><p>The target may not be the real path on the filesystem. Use <code>SplFileInfo::getRealPath()</code> to determine the true path on the filesystem.</p>
		 * @return string|false <p>Returns the target of the filesystem link on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getlinktarget.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getLinkTarget(): string|false {}

		/**
		 * Gets the last modified time
		 * <p>Returns the time when the contents of the file were changed. The time returned is a Unix timestamp.</p>
		 * @return int|false <p>Returns the last modified time for the file, in a Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getmtime.php
		 * @see filemtime()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getMTime(): int|false {}

		/**
		 * Get maximum line length
		 * <p>Gets the maximum line length as set by <code>SplFileObject::setMaxLineLen()</code>.</p>
		 * @return int <p>Returns the maximum line length if one has been set with <code>SplFileObject::setMaxLineLen()</code>, default is <code>0</code>.</p>
		 * @link https://php.net/manual/en/splfileobject.getmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function getMaxLineLen(): int {}

		/**
		 * Gets the owner of the file
		 * <p>Gets the file owner. The owner ID is returned in numerical format.</p>
		 * @return int|false <p>The owner id in numerical format on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getowner.php
		 * @see posix_getpwuid()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getOwner(): int|false {}

		/**
		 * Gets the path without filename
		 * <p>Returns the path to the file, omitting the filename and any trailing slash.</p>
		 * @return string <p>Returns the path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpath.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPath(): string {}

		/**
		 * Gets an SplFileInfo object for the path
		 * <p>Gets an <code>SplFileInfo</code> object for the parent of the current file.</p>
		 * @param ?string $class <p>Name of an <code>SplFileInfo</code> derived class to use, or itself if <b><code>null</code></b>.</p>
		 * @return ?SplFileInfo <p>Returns an <code>SplFileInfo</code> object for the parent path of the file on success, or <b><code>null</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathinfo.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathInfo(?string $class = null): ?\SplFileInfo {}

		/**
		 * Gets the path to the file
		 * <p>Returns the path to the file.</p>
		 * @return string <p>The path to the file.</p>
		 * @link https://php.net/manual/en/splfileinfo.getpathname.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPathname(): string {}

		/**
		 * Gets file permissions
		 * <p>Gets the file permissions for the file.</p>
		 * @return int|false <p>Returns the file permissions on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getperms.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getPerms(): int|false {}

		/**
		 * Gets absolute path to file
		 * <p>This method expands all symbolic links, resolves relative references and returns the real path to the file.</p>
		 * @return string|false <p>Returns the path to the file, or <b><code>false</code></b> if the file does not exist.</p>
		 * @link https://php.net/manual/en/splfileinfo.getrealpath.php
		 * @since PHP 5 >= 5.2.2, PHP 7, PHP 8
		 */
		public function getRealPath(): string|false {}

		/**
		 * Gets file size
		 * <p>Returns the filesize in bytes for the file referenced.</p>
		 * @return int|false <p>The filesize in bytes on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.getsize.php
		 * @see filesize()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getSize(): int|false {}

		/**
		 * Gets file type
		 * <p>Returns the type of the file referenced.</p>
		 * @return string|false <p>A <code>string</code> representing the type of the entry. May be one of <code>file</code>, <code>link</code>, <code>dir</code>, <code>block</code>, <code>fifo</code>, <code>char</code>, <code>socket</code>, or <code>unknown</code>, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/splfileinfo.gettype.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function getType(): string|false {}

		/**
		 * SplFileObject does not have children
		 * <p>An <code>SplFileObject</code> does not have children so this method always return <b><code>false</code></b>.</p>
		 * @return bool <p>Returns <b><code>false</code></b></p>
		 * @link https://php.net/manual/en/splfileobject.haschildren.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function hasChildren(): bool {}

		/**
		 * Tells if the file is a directory
		 * <p>This method can be used to determine if the file is a directory.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if a directory, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isdir.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isDir(): bool {}

		/**
		 * Tells if the file is executable
		 * <p>Checks if the file is executable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if executable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isexecutable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isExecutable(): bool {}

		/**
		 * Tells if the object references a regular file
		 * <p>Checks if the file referenced by this SplFileInfo object exists and is a regular file.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file exists and is a regular file (not a link), <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isfile.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isFile(): bool {}

		/**
		 * Tells if the file is a link
		 * <p>Use this method to check if the file referenced by the SplFileInfo object is a link.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the file is a link, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.islink.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isLink(): bool {}

		/**
		 * Tells if file is readable
		 * <p>Check if the file is readable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if readable, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileinfo.isreadable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isReadable(): bool {}

		/**
		 * Tells if the entry is writable
		 * <p>Checks if the current entry is writable.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if writable, <b><code>false</code></b> otherwise;</p>
		 * @link https://php.net/manual/en/splfileinfo.iswritable.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function isWritable(): bool {}

		/**
		 * Get line number
		 * <p>Gets the current line number.</p><p><b>Note</b>:</p><p>This number may not reflect the actual line number in the file if <code>SplFileObject::setMaxLineLen()</code> is used to read fixed lengths of the file.</p>
		 * @return int <p>Returns the current line number.</p>
		 * @link https://php.net/manual/en/splfileobject.key.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function key(): int {}

		/**
		 * Read next line
		 * <p>Moves ahead to the next line in the file.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function next(): void {}

		/**
		 * Gets an SplFileObject object for the file
		 * <p>Creates an <code>SplFileObject</code> <code>object</code> of the file. This is useful because <code>SplFileObject</code> contains additional methods for manipulating the file whereas <code>SplFileInfo</code> is only useful for gaining information, like whether the file is writable.</p>
		 * @param string $mode <p>The mode for opening the file. See the <code>fopen()</code> documentation for descriptions of possible modes. The default is read only.</p>
		 * @param bool $useIncludePath <p>When set to <b><code>true</code></b>, the filename is also searched for within the include_path</p>
		 * @param ?resource $context <p>Refer to the context section of the manual for a description of <code>contexts</code>.</p>
		 * @return SplFileObject <p>The opened file as an <code>SplFileObject</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/splfileinfo.openfile.php
		 * @see stream_context_create(), fopen()
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function openFile(string $mode = "r", bool $useIncludePath = false, ?resource $context = null): \SplFileObject {}

		/**
		 * Rewind the file to the first line
		 * <p>Rewinds the file back to the first line.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.rewind.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function rewind(): void {}

		/**
		 * Seek to specified line
		 * <p>Seek to specified line in the file.</p>
		 * @param int $line <p>The zero-based line number to seek to.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.seek.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function seek(int $line): void {}

		/**
		 * Set the delimiter, enclosure and escape character for CSV
		 * <p>Sets the delimiter, enclosure and escape character for parsing CSV fields.</p>
		 * @param string $separator <p>The field delimiter (one single-byte character only).</p>
		 * @param string $enclosure <p>The field enclosure character (one single-byte character only).</p>
		 * @param string $escape <p>The field escape character (at most one single-byte character). An empty string (<code>""</code>) disables the proprietary escape mechanism.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.setcsvcontrol.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setCsvControl(string $separator = ",", string $enclosure = "\"", string $escape = "\\"): void {}

		/**
		 * Sets the class used with SplFileInfo::openFile()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::openFile()</code> is called. The class name passed to this method must be <code>SplFileObject</code> or a class derived from <code>SplFileObject</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::openFile()</code> is called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setfileclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setFileClass(string $class = 'SplFileObject::class'): void {}

		/**
		 * Sets flags for the SplFileObject
		 * <p>Sets the flags to be used by the <code>SplFileObject</code>.</p>
		 * @param int $flags <p>Bit mask of the flags to set. See SplFileObject constants for the available flags.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.setflags.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setFlags(int $flags): void {}

		/**
		 * Sets the class used with SplFileInfo::getFileInfo() and SplFileInfo::getPathInfo()
		 * <p>Use this method to set a custom class which will be used when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called. The class name passed to this method must be <code>SplFileInfo</code> or a class derived from <code>SplFileInfo</code>.</p>
		 * @param string $class <p>The class name to use when <code>SplFileInfo::getFileInfo()</code> and <code>SplFileInfo::getPathInfo()</code> are called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileinfo.setinfoclass.php
		 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
		 */
		public function setInfoClass(string $class = 'SplFileInfo::class'): void {}

		/**
		 * Set maximum line length
		 * <p>Sets the maximum length of a line to be read.</p>
		 * @param int $maxLength <p>The maximum length of a line.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/splfileobject.setmaxlinelen.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function setMaxLineLen(int $maxLength): void {}

		/**
		 * Not at EOF
		 * <p>Check whether EOF has been reached.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if not reached EOF, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/splfileobject.valid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>Exception thrown when performing an invalid operation on an empty container, such as removing an element.</p>
	 * @link https://php.net/manual/en/class.underflowexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class UnderflowException extends \RuntimeException {

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
	 * <p>Exception thrown if a value does not match with a set of values. Typically this happens when a function calls another function and expects the return value to be of a certain type or value not including arithmetic or buffer related errors.</p>
	 * @link https://php.net/manual/en/class.unexpectedvalueexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	class UnexpectedValueException extends \RuntimeException {

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
	 * Return the interfaces which are implemented by the given class or interface
	 * <p>This function returns an array with the names of the interfaces that the given <code>object_or_class</code> and its parents implement.</p>
	 * @param object|string $object_or_class <p>An object (class instance) or a string (class or interface name).</p>
	 * @param bool $autoload <p>Whether to call __autoload by default.</p>
	 * @return array|false <p>An array on success, or <b><code>false</code></b> when the given class doesn't exist.</p>
	 * @link https://php.net/manual/en/function.class-implements.php
	 * @see class_parents(), get_declared_interfaces()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function class_implements(object|string $object_or_class, bool $autoload = true): array|false {}

	/**
	 * Return the parent classes of the given class
	 * <p>This function returns an array with the name of the parent classes of the given <code>object_or_class</code>.</p>
	 * @param object|string $object_or_class <p>An object (class instance) or a string (class name).</p>
	 * @param bool $autoload <p>Whether to call __autoload by default.</p>
	 * @return array|false <p>An array on success, or <b><code>false</code></b> when the given class doesn't exist.</p>
	 * @link https://php.net/manual/en/function.class-parents.php
	 * @see class_implements()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function class_parents(object|string $object_or_class, bool $autoload = true): array|false {}

	/**
	 * Return the traits used by the given class
	 * <p>This function returns an array with the names of the traits that the given <code>object_or_class</code> uses. This does however not include any traits used by a parent class.</p>
	 * @param object|string $object_or_class <p>An object (class instance) or a string (class name).</p>
	 * @param bool $autoload <p>Whether to call __autoload by default.</p>
	 * @return array|false <p>An array on success, or <b><code>false</code></b> when the given class doesn't exist.</p>
	 * @link https://php.net/manual/en/function.class-uses.php
	 * @see class_parents(), get_declared_traits()
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function class_uses(object|string $object_or_class, bool $autoload = true): array|false {}

	/**
	 * Call a function for every element in an iterator
	 * <p>Calls a function for every element in an iterator.</p>
	 * @param \Traversable $iterator <p>The iterator object to iterate over.</p>
	 * @param callable $callback <p>The callback function to call on every element. This function only receives the given <code>args</code>, so it is nullary by default. If <code>count($args) === 3</code>, for instance, the callback function is ternary.</p><p><b>Note</b>:  The function must return <b><code>true</code></b> in order to continue iterating over the <code>iterator</code>. </p>
	 * @param ?array $args <p>An <code>array</code> of arguments; each element of <code>args</code> is passed to the callback <code>callback</code> as separate argument.</p>
	 * @return int <p>Returns the iteration count.</p>
	 * @link https://php.net/manual/en/function.iterator-apply.php
	 * @see array_walk()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function iterator_apply(\Traversable $iterator, callable $callback, ?array $args = null): int {}

	/**
	 * Count the elements in an iterator
	 * <p>Count the elements in an iterator. <b>iterator_count()</b> is not guaranteed to retain the current position of the <code>iterator</code>.</p>
	 * @param \Traversable $iterator <p>The iterator being counted.</p>
	 * @return int <p>The number of elements in <code>iterator</code>.</p>
	 * @link https://php.net/manual/en/function.iterator-count.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function iterator_count(\Traversable $iterator): int {}

	/**
	 * Copy the iterator into an array
	 * <p>Copy the elements of an iterator into an array.</p>
	 * @param \Traversable $iterator <p>The iterator being copied.</p>
	 * @param bool $preserve_keys <p>Whether to use the iterator element keys as index.</p> <p>If a key is an <code>array</code> or <code>object</code>, a warning will be generated. <b><code>null</code></b> keys will be converted to an empty string, <code>float</code> keys will be truncated to their <code>int</code> counterpart, <code>resource</code> keys will generate a warning and be converted to their resource ID, and <code>bool</code> keys will be converted to integers.</p> <p><b>Note</b>:</p><p>If this parameter is not set or set to <b><code>true</code></b>, duplicate keys will be overwritten. The last value with a given key will be in the returned <code>array</code>. Set this parameter to <b><code>false</code></b> to get all the values in any case.</p>
	 * @return array <p>An <code>array</code> containing the elements of the <code>iterator</code>.</p>
	 * @link https://php.net/manual/en/function.iterator-to-array.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function iterator_to_array(\Traversable $iterator, bool $preserve_keys = true): array {}

	/**
	 * Default implementation for __autoload()
	 * <p>This function is intended to be used as a default implementation for <code>__autoload()</code>. If nothing else is specified and <code>spl_autoload_register()</code> is called without any parameters then this function will be used for any later call to <code>__autoload()</code>.</p>
	 * @param string $class <p>The name of the class (and namespace) being instantiated.</p>
	 * @param ?string $file_extensions <p>By default it checks all include paths to contain filenames built up by the lowercase class name appended by the filename extensions .inc and .php.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.spl-autoload.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function spl_autoload(string $class, ?string $file_extensions = null): void {}

	/**
	 * Try all registered __autoload() functions to load the requested class
	 * <p>This function can be used to manually search for a class or interface using the registered __autoload functions.</p>
	 * @param string $class <p>The class name being searched.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.spl-autoload-call.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function spl_autoload_call(string $class): void {}

	/**
	 * Register and return default file extensions for spl_autoload
	 * <p>This function can modify and check the file extensions that the built in <code>__autoload()</code> fallback function <code>spl_autoload()</code> will be using.</p><p><b>Note</b>:  There should not be a space between the defined file extensions. </p>
	 * @param ?string $file_extensions <p>If <b><code>null</code></b>, it simply returns the current list of extensions each separated by comma. To modify the list of file extensions, simply invoke the functions with the new list of file extensions to use in a single string with each extensions separated by comma.</p>
	 * @return string <p>A comma delimited list of default file extensions for <code>spl_autoload()</code>.</p>
	 * @link https://php.net/manual/en/function.spl-autoload-extensions.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function spl_autoload_extensions(?string $file_extensions = null): string {}

	/**
	 * Return all registered __autoload() functions
	 * <p>Get all registered __autoload() functions.</p>
	 * @return array <p>An <code>array</code> of all registered __autoload functions. If the autoload queue is not activated then the return value is <b><code>false</code></b>. If no function is registered the return value will be an empty array.</p>
	 * @link https://php.net/manual/en/function.spl-autoload-functions.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function spl_autoload_functions(): array {}

	/**
	 * Register given function as __autoload() implementation
	 * <p>Register a function with the spl provided __autoload queue. If the queue is not yet activated it will be activated.</p><p>If your code has an existing <code>__autoload()</code> function then this function must be explicitly registered on the __autoload queue. This is because <b>spl_autoload_register()</b> will effectively replace the engine cache for the <code>__autoload()</code> function by either <code>spl_autoload()</code> or <code>spl_autoload_call()</code>.</p><p>If there must be multiple autoload functions, <b>spl_autoload_register()</b> allows for this. It effectively creates a queue of autoload functions, and runs through each of them in the order they are defined. By contrast, <code>__autoload()</code> may only be defined once.</p>
	 * @param ?callable $callback <p>The autoload function being registered. If <b><code>null</code></b>, then the default implementation of <code>spl_autoload()</code> will be registered.</p>  callback(<code>string</code> <code>$class_name</code>): void
	 * @param bool $throw <p>This parameter specifies whether <b>spl_autoload_register()</b> should throw exceptions when the <code>callback</code> cannot be registered.</p>
	 * @param bool $prepend <p>If true, <b>spl_autoload_register()</b> will prepend the autoloader on the autoload queue instead of appending it.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.spl-autoload-register.php
	 * @see __autoload()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function spl_autoload_register(?callable $callback = null, bool $throw = true, bool $prepend = false): bool {}

	/**
	 * Unregister given function as __autoload() implementation
	 * <p>Removes a function from the autoload queue. If the queue is activated and empty after removing the given function then it will be deactivated.</p><p>When this function results in the queue being deactivated, any __autoload function that previously existed will not be reactivated.</p>
	 * @param callable $callback <p>The autoload function being unregistered.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.spl-autoload-unregister.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function spl_autoload_unregister(callable $callback): bool {}

	/**
	 * Return available SPL classes
	 * <p>This function returns an array with the current available SPL classes.</p>
	 * @return array <p>Returns an <code>array</code> containing the currently available SPL classes.</p>
	 * @link https://php.net/manual/en/function.spl-classes.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function spl_classes(): array {}

	/**
	 * Return hash id for given object
	 * <p>This function returns a unique identifier for the object. This id can be used as a hash key for storing objects, or for identifying an object, as long as the object is not destroyed. Once the object is destroyed, its hash may be reused for other objects. This behavior is similar to <code>spl_object_id()</code>.</p>
	 * @param object $object <p>Any object.</p>
	 * @return string <p>A string that is unique for each currently existing object and is always the same for each object.</p>
	 * @link https://php.net/manual/en/function.spl-object-hash.php
	 * @see spl_object_id()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function spl_object_hash(object $object): string {}

	/**
	 * Return the integer object handle for given object
	 * <p>This function returns a unique identifier for the object. The object id is unique for the lifetime of the object. Once the object is destroyed, its id may be reused for other objects. This behavior is similar to <code>spl_object_hash()</code>.</p>
	 * @param object $object <p>Any object.</p>
	 * @return int <p>An integer identifier that is unique for each currently existing object and is always the same for each object.</p>
	 * @link https://php.net/manual/en/function.spl-object-id.php
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function spl_object_id(object $object): int {}

}
