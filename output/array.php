<?php



namespace {

	/**
	 * Changes the case of all keys in an array
	 * <p>Returns an array with all keys from <code>array</code> lowercased or uppercased. Numbered indices are left as is.</p>
	 * @param array $array <p>The array to work on</p>
	 * @param int $case <p>Either <b><code>CASE_UPPER</code></b> or <b><code>CASE_LOWER</code></b> (default)</p>
	 * @return array <p>Returns an array with its keys lower or uppercased, or <b><code>null</code></b> if <code>array</code> is not an array.</p>
	 * @link https://php.net/manual/en/function.array-change-key-case.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function array_change_key_case(array $array, int $case = CASE_LOWER): array {}

	/**
	 * Split an array into chunks
	 * <p>Chunks an array into arrays with <code>length</code> elements. The last chunk may contain less than <code>length</code> elements.</p>
	 * @param array $array <p>The array to work on</p>
	 * @param int $length <p>The size of each chunk</p>
	 * @param bool $preserve_keys <p>When set to <b><code>true</code></b> keys will be preserved. Default is <b><code>false</code></b> which will reindex the chunk numerically</p>
	 * @return array <p>Returns a multidimensional numerically indexed array, starting with zero, with each dimension containing <code>length</code> elements.</p>
	 * @link https://php.net/manual/en/function.array-chunk.php
	 * @see array_slice()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function array_chunk(array $array, int $length, bool $preserve_keys = false): array {}

	/**
	 * Return the values from a single column in the input array
	 * <p><b>array_column()</b> returns the values from a single column of the <code>array</code>, identified by the <code>column_key</code>. Optionally, an <code>index_key</code> may be provided to index the values in the returned array by the values from the <code>index_key</code> column of the input array.</p>
	 * @param array $array <p>A multi-dimensional array or an array of objects from which to pull a column of values from. If an array of objects is provided, then public properties can be directly pulled. In order for protected or private properties to be pulled, the class must implement both the <b>__get()</b> and <b>__isset()</b> magic methods.</p>
	 * @param int|string|null $column_key <p>The column of values to return. This value may be an integer key of the column you wish to retrieve, or it may be a string key name for an associative array or property name. It may also be <b><code>null</code></b> to return complete arrays or objects (this is useful together with <code>index_key</code> to reindex the array).</p>
	 * @param int|string|null $index_key <p>The column to use as the index/keys for the returned array. This value may be the integer key of the column, or it may be the string key name. The value is cast as usual for array keys (however, prior to PHP 8.0.0, objects supporting conversion to string were also allowed).</p>
	 * @return array <p>Returns an array of values representing a single column from the input array.</p>
	 * @link https://php.net/manual/en/function.array-column.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array {}

	/**
	 * Creates an array by using one array for keys and another for its values
	 * <p>Creates an <code>array</code> by using the values from the <code>keys</code> array as keys and the values from the <code>values</code> array as the corresponding values.</p>
	 * @param array $keys <p>Array of keys to be used. Illegal values for key will be converted to <code>string</code>.</p>
	 * @param array $values <p><code>Array</code> of values to be used</p>
	 * @return array <p>Returns the combined <code>array</code>, <b><code>false</code></b> if the number of elements for each array isn't equal.</p>
	 * @link https://php.net/manual/en/function.array-combine.php
	 * @see array_merge(), array_walk(), array_values()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_combine(array $keys, array $values): array {}

	/**
	 * Counts all the values of an array
	 * <p><b>array_count_values()</b> returns an array using the values of <code>array</code> as keys and their frequency in <code>array</code> as values.</p>
	 * @param array $array <p>The array of values to count</p>
	 * @return array <p>Returns an associative array of values from <code>array</code> as keys and their count as value.</p>
	 * @link https://php.net/manual/en/function.array-count-values.php
	 * @see count(), array_unique(), array_values(), count_chars()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_count_values(array $array): array {}

	/**
	 * Computes the difference of arrays
	 * <p>Compares <code>array</code> against one or more other arrays and returns the values in <code>array</code> that are not present in any of the other arrays.</p>
	 * @param array $array <p>The array to compare from</p>
	 * @param array $arrays <p>Arrays to compare against</p>
	 * @return array <p>Returns an <code>array</code> containing all the entries from <code>array</code> that are not present in any of the other arrays. Keys in the <code>array</code> array are preserved.</p>
	 * @link https://php.net/manual/en/function.array-diff.php
	 * @see array_diff_assoc(), array_udiff(), array_intersect(), array_intersect_assoc()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function array_diff(array $array, array ...$arrays): array {}

	/**
	 * Computes the difference of arrays with additional index check
	 * <p>Compares <code>array</code> against <code>arrays</code> and returns the difference. Unlike <code>array_diff()</code> the array keys are also used in the comparison.</p>
	 * @param array $array <p>The array to compare from</p>
	 * @param array $arrays <p>Arrays to compare against</p>
	 * @return array <p>Returns an <code>array</code> containing all the values from <code>array</code> that are not present in any of the other arrays.</p>
	 * @link https://php.net/manual/en/function.array-diff-assoc.php
	 * @see array_diff(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function array_diff_assoc(array $array, array ...$arrays): array {}

	/**
	 * Computes the difference of arrays using keys for comparison
	 * <p>Compares the keys from <code>array</code> against the keys from <code>arrays</code> and returns the difference. This function is like <code>array_diff()</code> except the comparison is done on the keys instead of the values.</p>
	 * @param array $array <p>The array to compare from</p>
	 * @param array $arrays <p>Arrays to compare against</p>
	 * @return array <p>Returns an <code>array</code> containing all the entries from <code>array</code> whose keys are absent from all of the other arrays.</p>
	 * @link https://php.net/manual/en/function.array-diff-key.php
	 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_ukey(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_key(), array_intersect_ukey()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function array_diff_key(array $array, array ...$arrays): array {}

	/**
	 * Computes the difference of arrays with additional index check which is performed by a user supplied callback function
	 * <p>Compares <code>array</code> against <code>arrays</code> and returns the difference. Unlike <code>array_diff()</code> the array keys are used in the comparison.</p><p>Unlike <code>array_diff_assoc()</code> a user supplied callback function is used for the indices comparison, not internal function.</p>
	 * @param array $array <p>The array to compare from</p>
	 * @param array $arrays <p>Arrays to compare against</p>
	 * @param callable $key_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns an <code>array</code> containing all the entries from <code>array</code> that are not present in any of the other arrays.</p>
	 * @link https://php.net/manual/en/function.array-diff-uassoc.php
	 * @see array_diff(), array_diff_assoc(), array_udiff(), array_udiff_assoc(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_diff_uassoc(array $array, array ...$arrays, callable $key_compare_func): array {}

	/**
	 * Computes the difference of arrays using a callback function on the keys for comparison
	 * <p>Compares the keys from <code>array</code> against the keys from <code>arrays</code> and returns the difference. This function is like <code>array_diff()</code> except the comparison is done on the keys instead of the values.</p><p>Unlike <code>array_diff_key()</code> a user supplied callback function is used for the indices comparison, not internal function.</p>
	 * @param array $array <p>The array to compare from</p>
	 * @param array $arrays <p>Arrays to compare against</p>
	 * @param callable $key_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns an <code>array</code> containing all the entries from <code>array</code> that are not present in any of the other arrays.</p>
	 * @link https://php.net/manual/en/function.array-diff-ukey.php
	 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_key(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_key(), array_intersect_ukey()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function array_diff_ukey(array $array, array ...$arrays, callable $key_compare_func): array {}

	/**
	 * Fill an array with values
	 * <p>Fills an array with <code>count</code> entries of the value of the <code>value</code> parameter, keys starting at the <code>start_index</code> parameter.</p>
	 * @param int $start_index <p>The first index of the returned array.</p> <p>If <code>start_index</code> is negative, the first index of the returned array will be <code>start_index</code> and the following indices will start from zero (see example).</p>
	 * @param int $count <p>Number of elements to insert. Must be greater than or equal to zero.</p>
	 * @param mixed $value <p>Value to use for filling</p>
	 * @return array <p>Returns the filled array</p>
	 * @link https://php.net/manual/en/function.array-fill.php
	 * @see array_fill_keys(), str_repeat(), range()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function array_fill(int $start_index, int $count, mixed $value): array {}

	/**
	 * Fill an array with values, specifying keys
	 * <p>Fills an array with the value of the <code>value</code> parameter, using the values of the <code>keys</code> array as keys.</p>
	 * @param array $keys <p>Array of values that will be used as keys. Illegal values for key will be converted to <code>string</code>.</p>
	 * @param mixed $value <p>Value to use for filling</p>
	 * @return array <p>Returns the filled array</p>
	 * @link https://php.net/manual/en/function.array-fill-keys.php
	 * @see array_fill(), array_combine()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function array_fill_keys(array $keys, mixed $value): array {}

	/**
	 * Filters elements of an array using a callback function
	 * <p>Iterates over each value in the <code>array</code> passing them to the <code>callback</code> function. If the <code>callback</code> function returns <b><code>true</code></b>, the current value from <code>array</code> is returned into the result <code>array</code>.</p><p>Array keys are preserved, and may result in gaps if the <code>array</code> was indexed. The result <code>array</code> can be reindexed using the <code>array_values()</code> function.</p>
	 * @param array $array <p>The array to iterate over</p>
	 * @param ?callable $callback <p>The callback function to use</p> <p>If no <code>callback</code> is supplied, all empty entries of <code>array</code> will be removed. See <code>empty()</code> for how PHP defines empty in this case.</p>
	 * @param int $mode <p>Flag determining what arguments are sent to <code>callback</code>:</p><ul> <li> <b><code>ARRAY_FILTER_USE_KEY</code></b> - pass key as the only argument to <code>callback</code> instead of the value </li> <li> <b><code>ARRAY_FILTER_USE_BOTH</code></b> - pass both value and key as arguments to <code>callback</code> instead of the value </li> </ul> Default is <code>0</code> which will pass value as the only argument to <code>callback</code> instead.
	 * @return array <p>Returns the filtered array.</p>
	 * @link https://php.net/manual/en/function.array-filter.php
	 * @see array_intersect(), array_map(), array_reduce(), array_walk()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function array_filter(array $array, ?callable $callback = null, int $mode = 0): array {}

	/**
	 * Exchanges all keys with their associated values in an array
	 * <p><b>array_flip()</b> returns an <code>array</code> in flip order, i.e. keys from <code>array</code> become values and values from <code>array</code> become keys.</p><p>Note that the values of <code>array</code> need to be valid keys, i.e. they need to be either <code>int</code> or <code>string</code>. A warning will be emitted if a value has the wrong type, and the key/value pair in question <i>will not be included in the result</i>.</p><p>If a value has several occurrences, the latest key will be used as its value, and all others will be lost.</p>
	 * @param array $array <p>An array of key/value pairs to be flipped.</p>
	 * @return array <p>Returns the flipped array.</p>
	 * @link https://php.net/manual/en/function.array-flip.php
	 * @see array_values(), array_keys(), array_reverse()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_flip(array $array): array {}

	/**
	 * Computes the intersection of arrays
	 * <p><b>array_intersect()</b> returns an array containing all the values of <code>array</code> that are present in all the arguments. Note that keys are preserved.</p>
	 * @param array $array <p>The array with master values to check.</p>
	 * @param array $arrays <p>Arrays to compare values against.</p>
	 * @return array <p>Returns an array containing all of the values in <code>array</code> whose values exist in all of the parameters.</p>
	 * @link https://php.net/manual/en/function.array-intersect.php
	 * @see array_intersect_assoc(), array_diff(), array_diff_assoc()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function array_intersect(array $array, array ...$arrays): array {}

	/**
	 * Computes the intersection of arrays with additional index check
	 * <p><b>array_intersect_assoc()</b> returns an array containing all the values of <code>array</code> that are present in all the arguments. Note that the keys are also used in the comparison unlike in <code>array_intersect()</code>.</p>
	 * @param array $array <p>The array with master values to check.</p>
	 * @param array $arrays <p>Arrays to compare values against.</p>
	 * @return array <p>Returns an associative array containing all the values in <code>array</code> that are present in all of the arguments.</p>
	 * @link https://php.net/manual/en/function.array-intersect-assoc.php
	 * @see array_intersect(), array_uintersect_assoc(), array_intersect_uassoc(), array_uintersect_uassoc(), array_diff(), array_diff_assoc()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function array_intersect_assoc(array $array, array ...$arrays): array {}

	/**
	 * Computes the intersection of arrays using keys for comparison
	 * <p><b>array_intersect_key()</b> returns an array containing all the entries of <code>array</code> which have keys that are present in all the arguments.</p>
	 * @param array $array <p>The array with master keys to check.</p>
	 * @param array $arrays <p>Arrays to compare keys against.</p>
	 * @return array <p>Returns an associative array containing all the entries of <code>array</code> which have keys that are present in all arguments.</p>
	 * @link https://php.net/manual/en/function.array-intersect-key.php
	 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_key(), array_diff_ukey(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_ukey()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function array_intersect_key(array $array, array ...$arrays): array {}

	/**
	 * Computes the intersection of arrays with additional index check, compares indexes by a callback function
	 * <p><b>array_intersect_uassoc()</b> returns an array containing all the values of <code>array</code> that are present in all the arguments. Note that the keys are used in the comparison unlike in <code>array_intersect()</code>.</p>
	 * @param array $array <p>Initial array for comparison of the arrays.</p>
	 * @param array $arrays <p>Arrays to compare keys against.</p>
	 * @param callable $key_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns the values of <code>array</code> whose values exist in all of the arguments.</p>
	 * @link https://php.net/manual/en/function.array-intersect-uassoc.php
	 * @see array_intersect(), array_intersect_assoc(), array_uintersect_assoc(), array_uintersect_uassoc(), array_intersect_key(), array_intersect_ukey()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_intersect_uassoc(array $array, array ...$arrays, callable $key_compare_func): array {}

	/**
	 * Computes the intersection of arrays using a callback function on the keys for comparison
	 * <p><b>array_intersect_ukey()</b> returns an array containing all the values of <code>array</code> which have matching keys that are present in all the arguments.</p>
	 * @param array $array <p>Initial array for comparison of the arrays.</p>
	 * @param array $arrays <p>Arrays to compare keys against.</p>
	 * @param callable $key_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns the values of <code>array</code> whose keys exist in all the arguments.</p>
	 * @link https://php.net/manual/en/function.array-intersect-ukey.php
	 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_key(), array_diff_ukey(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_key()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function array_intersect_ukey(array $array, array ...$arrays, callable $key_compare_func): array {}

	/**
	 * Checks whether a given array is a list
	 * <p>Determines if the given <code>array</code> is a list. An <code>array</code> is considered a list if its keys consist of consecutive numbers from <code>0</code> to <code>count($array)-1</code>.</p>
	 * @param array $array <p>The <code>array</code> being evaluated.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>array</code> is a list, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.array-is-list.php
	 * @see array_values()
	 * @since PHP 8 >= 8.1.0
	 */
	function array_is_list(array $array): bool {}

	/**
	 * Checks if the given key or index exists in the array
	 * <p><b>array_key_exists()</b> returns <b><code>true</code></b> if the given <code>key</code> is set in the array. <code>key</code> can be any value possible for an array index.</p>
	 * @param string|int $key <p>Value to check.</p>
	 * @param array $array <p>An array with keys to check.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p><b>Note</b>:</p><p><b>array_key_exists()</b> will search for the keys in the first dimension only. Nested keys in multidimensional arrays will not be found.</p>
	 * @link https://php.net/manual/en/function.array-key-exists.php
	 * @see isset(), array_keys(), in_array(), property_exists()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8
	 */
	function array_key_exists(string|int $key, array $array): bool {}

	/**
	 * Gets the first key of an array
	 * <p>Get the first key of the given <code>array</code> without affecting the internal array pointer.</p>
	 * @param array $array <p>An array.</p>
	 * @return int|string|null <p>Returns the first key of <code>array</code> if the array is not empty; <b><code>null</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.array-key-first.php
	 * @see array_key_last(), reset()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function array_key_first(array $array): int|string|null {}

	/**
	 * Gets the last key of an array
	 * <p>Get the last key of the given <code>array</code> without affecting the internal array pointer.</p>
	 * @param array $array <p>An array.</p>
	 * @return int|string|null <p>Returns the last key of <code>array</code> if the array is not empty; <b><code>null</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.array-key-last.php
	 * @see array_key_first(), end()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function array_key_last(array $array): int|string|null {}

	/**
	 * Return all the keys or a subset of the keys of an array
	 * <p><b>array_keys()</b> returns the keys, numeric and string, from the <code>array</code>.</p><p>If a <code>search_value</code> is specified, then only the keys for that value are returned. Otherwise, all the keys from the <code>array</code> are returned.</p>
	 * @param array $array <p>An array containing keys to return.</p>
	 * @return array <p>Returns an array of all the keys in <code>array</code>.</p>
	 * @link https://php.net/manual/en/function.array-keys.php
	 * @see array_values(), array_combine(), array_key_exists(), array_search()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_keys(array $array): array {}

	/**
	 * Applies the callback to the elements of the given arrays
	 * <p><b>array_map()</b> returns an <code>array</code> containing the results of applying the <code>callback</code> to the corresponding index of <code>array</code> (and <code>arrays</code> if more arrays are provided) used as arguments for the callback. The number of parameters that the <code>callback</code> function accepts should match the number of arrays passed to <b>array_map()</b>. Excess input arrays are ignored. An <code>ArgumentCountError</code> is thrown if an insufficient number of arguments is provided.</p>
	 * @param ?callable $callback <p>A <code>callable</code> to run for each element in each array.</p> <p><b><code>null</code></b> can be passed as a value to <code>callback</code> to perform a zip operation on multiple arrays. If only <code>array</code> is provided, <b>array_map()</b> will return the input array.</p>
	 * @param array $array <p>An array to run through the <code>callback</code> function.</p>
	 * @param array $arrays <p>Supplementary variable list of array arguments to run through the <code>callback</code> function.</p>
	 * @return array <p>Returns an array containing the results of applying the <code>callback</code> function to the corresponding index of <code>array</code> (and <code>arrays</code> if more arrays are provided) used as arguments for the callback.</p><p>The returned array will preserve the keys of the array argument if and only if exactly one array is passed. If more than one array is passed, the returned array will have sequential integer keys.</p>
	 * @link https://php.net/manual/en/function.array-map.php
	 * @see array_filter(), array_reduce(), array_walk()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function array_map(?callable $callback, array $array, array ...$arrays): array {}

	/**
	 * Merge one or more arrays
	 * <p>Merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one. It returns the resulting array.</p><p>If the input arrays have the same string keys, then the later value for that key will overwrite the previous one. If, however, the arrays contain numeric keys, the later value will <i>not</i> overwrite the original value, but will be appended.</p><p>Values in the input arrays with numeric keys will be renumbered with incrementing keys starting from zero in the result array.</p>
	 * @param array $arrays <p>Variable list of arrays to merge.</p>
	 * @return array <p>Returns the resulting array. If called without any arguments, returns an empty <code>array</code>.</p>
	 * @link https://php.net/manual/en/function.array-merge.php
	 * @see array_merge_recursive(), array_replace(), array_combine()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_merge(array ...$arrays): array {}

	/**
	 * Merge one or more arrays recursively
	 * <p><b>array_merge_recursive()</b> merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one. It returns the resulting array.</p><p>If the input arrays have the same string keys, then the values for these keys are merged together into an array, and this is done recursively, so that if one of the values is an array itself, the function will merge it with a corresponding entry in another array too. If, however, the arrays have the same numeric key, the later value will not overwrite the original value, but will be appended.</p>
	 * @param array $arrays <p>Variable list of arrays to recursively merge.</p>
	 * @return array <p>An array of values resulted from merging the arguments together. If called without any arguments, returns an empty <code>array</code>.</p>
	 * @link https://php.net/manual/en/function.array-merge-recursive.php
	 * @see array_merge(), array_replace_recursive()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function array_merge_recursive(array ...$arrays): array {}

	/**
	 * Sort multiple or multi-dimensional arrays
	 * <p><b>array_multisort()</b> can be used to sort several arrays at once, or a multi-dimensional array by one or more dimensions.</p><p>Associative (<code>string</code>) keys will be maintained, but numeric keys will be re-indexed.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array1 <p>An <code>array</code> being sorted.</p>
	 * @param mixed $array1_sort_order <p>The order used to sort the previous <code>array</code> argument. Either <b><code>SORT_ASC</code></b> to sort ascendingly or <b><code>SORT_DESC</code></b> to sort descendingly.</p> <p>This argument can be swapped with <code>array1_sort_flags</code> or omitted entirely, in which case <b><code>SORT_ASC</code></b> is assumed.</p>
	 * @param mixed $array1_sort_flags <p>Sort options for the previous <code>array</code> argument:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally (don't change types) </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul> <p>This argument can be swapped with <code>array1_sort_order</code> or omitted entirely, in which case <b><code>SORT_REGULAR</code></b> is assumed.</p>
	 * @param mixed $rest <p>More arrays, optionally followed by sort order and flags. Only elements corresponding to equivalent elements in previous arrays are compared. In other words, the sort is lexicographical.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.array-multisort.php
	 * @see usort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_multisort(array &$array1, mixed $array1_sort_order = SORT_ASC, mixed $array1_sort_flags = SORT_REGULAR, mixed ...$rest): bool {}

	/**
	 * Pad array to the specified length with a value
	 * <p><b>array_pad()</b> returns a copy of the <code>array</code> padded to size specified by <code>length</code> with value <code>value</code>. If <code>length</code> is positive then the array is padded on the right, if it's negative then on the left. If the absolute value of <code>length</code> is less than or equal to the length of the <code>array</code> then no padding takes place. It is possible to add at most 1048576 elements at a time.</p>
	 * @param array $array <p>Initial array of values to pad.</p>
	 * @param int $length <p>New size of the array.</p>
	 * @param mixed $value <p>Value to pad if <code>array</code> is less than <code>length</code>.</p>
	 * @return array <p>Returns a copy of the <code>array</code> padded to size specified by <code>length</code> with value <code>value</code>. If <code>length</code> is positive then the array is padded on the right, if it's negative then on the left. If the absolute value of <code>length</code> is less than or equal to the length of the <code>array</code> then no padding takes place.</p>
	 * @link https://php.net/manual/en/function.array-pad.php
	 * @see array_fill(), range()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_pad(array $array, int $length, mixed $value): array {}

	/**
	 * Pop the element off the end of array
	 * <p><b>array_pop()</b> pops and returns the value of the last element of <code>array</code>, shortening the <code>array</code> by one element.</p><p><b>Note</b>: This function will <code>reset()</code> the <code>array</code> pointer of the input array after use.</p>
	 * @param array $array <p>The array to get the value from.</p>
	 * @return mixed <p>Returns the value of the last element of <code>array</code>. If <code>array</code> is empty (or is not an array), <b><code>null</code></b> will be returned.</p>
	 * @link https://php.net/manual/en/function.array-pop.php
	 * @see array_push(), array_shift(), array_unshift()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_pop(array &$array): mixed {}

	/**
	 * Calculate the product of values in an array
	 * <p><b>array_product()</b> returns the product of values in an array.</p>
	 * @param array $array <p>The array.</p>
	 * @return int|float <p>Returns the product as an integer or float.</p>
	 * @link https://php.net/manual/en/function.array-product.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function array_product(array $array): int|float {}

	/**
	 * Push one or more elements onto the end of array
	 * <p><b>array_push()</b> treats <code>array</code> as a stack, and pushes the passed variables onto the end of <code>array</code>. The length of <code>array</code> increases by the number of variables pushed. Has the same effect as:</p><p><b>Note</b>:  If you use <b>array_push()</b> to add one element to the array, it's better to use <code>$array[] = </code> because in that way there is no overhead of calling a function. </p><p><b>Note</b>:  <b>array_push()</b> will raise a warning if the first argument is not an array. This differed from the <code>$var[]</code> behaviour where a new array was created, prior to PHP 7.1.0. </p>
	 * @param array $array <p>The input array.</p>
	 * @param mixed $values <p>The values to push onto the end of the <code>array</code>.</p>
	 * @return int <p>Returns the new number of elements in the array.</p>
	 * @link https://php.net/manual/en/function.array-push.php
	 * @see array_pop(), array_shift(), array_unshift()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_push(array &$array, mixed ...$values): int {}

	/**
	 * Pick one or more random keys out of an array
	 * <p>Picks one or more random entries out of an array, and returns the key (or keys) of the random entries. It uses a pseudo random number generator that is not suitable for cryptographic purposes.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $num <p>Specifies how many entries should be picked.</p>
	 * @return int|string|array <p>When picking only one entry, <b>array_rand()</b> returns the key for a random entry. Otherwise, an array of keys for the random entries is returned. This is done so that random keys can be picked from the array as well as random values. If multiple keys are returned, they will be returned in the order they were present in the original array. Trying to pick more elements than there are in the array will result in an <b><code>E_WARNING</code></b> level error, and NULL will be returned.</p>
	 * @link https://php.net/manual/en/function.array-rand.php
	 * @see shuffle()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_rand(array $array, int $num = 1): int|string|array {}

	/**
	 * Iteratively reduce the array to a single value using a callback function
	 * <p><b>array_reduce()</b> applies iteratively the <code>callback</code> function to the elements of the <code>array</code>, so as to reduce the array to a single value.</p>
	 * @param array $array <p>The input array.</p>
	 * @param callable $callback callback(<code>mixed</code> <code>$carry</code>, <code>mixed</code> <code>$item</code>): <code>mixed</code>   <code>carry</code>  <p>Holds the return value of the previous iteration; in the case of the first iteration it instead holds the value of <code>initial</code>.</p>   <code>item</code>  <p>Holds the value of the current iteration.</p>
	 * @param mixed $initial <p>If the optional <code>initial</code> is available, it will be used at the beginning of the process, or as a final result in case the array is empty.</p>
	 * @return mixed <p>Returns the resulting value.</p><p>If the array is empty and <code>initial</code> is not passed, <b>array_reduce()</b> returns <b><code>null</code></b>.</p>
	 * @link https://php.net/manual/en/function.array-reduce.php
	 * @see array_filter(), array_map(), array_unique(), array_count_values()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8
	 */
	function array_reduce(array $array, callable $callback, mixed $initial = null): mixed {}

	/**
	 * Replaces elements from passed arrays into the first array
	 * <p><b>array_replace()</b> replaces the values of <code>array</code> with values having the same keys in each of the following arrays. If a key from the first array exists in the second array, its value will be replaced by the value from the second array. If the key exists in the second array, and not the first, it will be created in the first array. If a key only exists in the first array, it will be left as is. If several arrays are passed for replacement, they will be processed in order, the later arrays overwriting the previous values.</p><p><b>array_replace()</b> is not recursive : it will replace values in the first array by whatever type is in the second array.</p>
	 * @param array $array <p>The array in which elements are replaced.</p>
	 * @param array $replacements <p>Arrays from which elements will be extracted. Values from later arrays overwrite the previous values.</p>
	 * @return array <p>Returns an <code>array</code>, or <b><code>null</code></b> if an error occurs.</p>
	 * @link https://php.net/manual/en/function.array-replace.php
	 * @see array_replace_recursive(), array_merge()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function array_replace(array $array, array ...$replacements): array {}

	/**
	 * Replaces elements from passed arrays into the first array recursively
	 * <p><b>array_replace_recursive()</b> replaces the values of <code>array</code> with the same values from all the following arrays. If a key from the first array exists in the second array, its value will be replaced by the value from the second array. If the key exists in the second array, and not the first, it will be created in the first array. If a key only exists in the first array, it will be left as is. If several arrays are passed for replacement, they will be processed in order, the later array overwriting the previous values.</p><p><b>array_replace_recursive()</b> is recursive : it will recurse into arrays and apply the same process to the inner value.</p><p>When the value in the first array is scalar, it will be replaced by the value in the second array, may it be scalar or array. When the value in the first array and the second array are both arrays, <b>array_replace_recursive()</b> will replace their respective value recursively.</p>
	 * @param array $array <p>The array in which elements are replaced.</p>
	 * @param array $replacements <p>Arrays from which elements will be extracted.</p>
	 * @return array <p>Returns an <code>array</code>, or <b><code>null</code></b> if an error occurs.</p>
	 * @link https://php.net/manual/en/function.array-replace-recursive.php
	 * @see array_replace(), array_merge_recursive()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function array_replace_recursive(array $array, array ...$replacements): array {}

	/**
	 * Return an array with elements in reverse order
	 * <p>Takes an input <code>array</code> and returns a new array with the order of the elements reversed.</p>
	 * @param array $array <p>The input array.</p>
	 * @param bool $preserve_keys <p>If set to <b><code>true</code></b> numeric keys are preserved. Non-numeric keys are not affected by this setting and will always be preserved.</p>
	 * @return array <p>Returns the reversed array.</p>
	 * @link https://php.net/manual/en/function.array-reverse.php
	 * @see array_flip()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_reverse(array $array, bool $preserve_keys = false): array {}

	/**
	 * Searches the array for a given value and returns the first corresponding key if successful
	 * <p>Searches for <code>needle</code> in <code>haystack</code>.</p>
	 * @param mixed $needle <p>The searched value.</p> <p><b>Note</b>:</p><p>If <code>needle</code> is a string, the comparison is done in a case-sensitive manner.</p>
	 * @param array $haystack <p>The array.</p>
	 * @param bool $strict <p>If the third parameter <code>strict</code> is set to <b><code>true</code></b> then the <b>array_search()</b> function will search for <i>identical</i> elements in the <code>haystack</code>. This means it will also perform a strict type comparison of the <code>needle</code> in the <code>haystack</code>, and objects must be the same instance.</p>
	 * @return int|string|false <p>Returns the key for <code>needle</code> if it is found in the array, <b><code>false</code></b> otherwise.</p><p>If <code>needle</code> is found in <code>haystack</code> more than once, the first matching key is returned. To return the keys for all matching values, use <code>array_keys()</code> with the optional <code>search_value</code> parameter instead.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.array-search.php
	 * @see array_keys(), array_values(), array_key_exists(), in_array()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8
	 */
	function array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false {}

	/**
	 * Shift an element off the beginning of array
	 * <p><b>array_shift()</b> shifts the first value of the <code>array</code> off and returns it, shortening the <code>array</code> by one element and moving everything down. All numerical array keys will be modified to start counting from zero while literal keys won't be affected.</p><p><b>Note</b>: This function will <code>reset()</code> the <code>array</code> pointer of the input array after use.</p>
	 * @param array $array <p>The input array.</p>
	 * @return mixed <p>Returns the shifted value, or <b><code>null</code></b> if <code>array</code> is empty or is not an array.</p>
	 * @link https://php.net/manual/en/function.array-shift.php
	 * @see array_unshift(), array_push(), array_pop()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_shift(array &$array): mixed {}

	/**
	 * Extract a slice of the array
	 * <p><b>array_slice()</b> returns the sequence of elements from the array <code>array</code> as specified by the <code>offset</code> and <code>length</code> parameters.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $offset <p>If <code>offset</code> is non-negative, the sequence will start at that offset in the <code>array</code>.</p> <p>If <code>offset</code> is negative, the sequence will start that far from the end of the <code>array</code>.</p> <p><b>Note</b>:</p><p>The <code>offset</code> parameter denotes the position in the array, not the key.</p>
	 * @param ?int $length <p>If <code>length</code> is given and is positive, then the sequence will have up to that many elements in it.</p> <p>If the array is shorter than the <code>length</code>, then only the available array elements will be present.</p> <p>If <code>length</code> is given and is negative then the sequence will stop that many elements from the end of the array.</p> <p>If it is omitted, then the sequence will have everything from <code>offset</code> up until the end of the <code>array</code>.</p>
	 * @param bool $preserve_keys <p><b>Note</b>:</p><p><b>array_slice()</b> will reorder and reset the integer array indices by default. This behaviour can be changed by setting <code>preserve_keys</code> to <b><code>true</code></b>. String keys are always preserved, regardless of this parameter.</p>
	 * @return array <p>Returns the slice. If the offset is larger than the size of the array, an empty array is returned.</p>
	 * @link https://php.net/manual/en/function.array-slice.php
	 * @see array_chunk(), array_splice(), unset()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_slice(array $array, int $offset, ?int $length = null, bool $preserve_keys = false): array {}

	/**
	 * Remove a portion of the array and replace it with something else
	 * <p>Removes the elements designated by <code>offset</code> and <code>length</code> from the <code>array</code> array, and replaces them with the elements of the <code>replacement</code> array, if supplied.</p><p><b>Note</b>:</p><p>Numerical keys in <code>array</code> are not preserved.</p><p><b>Note</b>:  If <code>replacement</code> is not an array, it will be typecast to one (i.e. <code>(array) $replacement</code>). This may result in unexpected behavior when using an object or <b><code>null</code></b> <code>replacement</code>. </p>
	 * @param array $array <p>The input array.</p>
	 * @param int $offset <p>If <code>offset</code> is positive then the start of the removed portion is at that offset from the beginning of the <code>array</code> array.</p> <p>If <code>offset</code> is negative then the start of the removed portion is at that offset from the end of the <code>array</code> array.</p>
	 * @param ?int $length <p>If <code>length</code> is omitted, removes everything from <code>offset</code> to the end of the array.</p> <p>If <code>length</code> is specified and is positive, then that many elements will be removed.</p> <p>If <code>length</code> is specified and is negative, then the end of the removed portion will be that many elements from the end of the array.</p> <p>If <code>length</code> is specified and is zero, no elements will be removed.</p> <b>Tip</b> <p>To remove everything from <code>offset</code> to the end of the array when <code>replacement</code> is also specified, use <code>count($input)</code> for <code>length</code>.</p>
	 * @param mixed $replacement <p>If <code>replacement</code> array is specified, then the removed elements are replaced with elements from this array.</p> <p>If <code>offset</code> and <code>length</code> are such that nothing is removed, then the elements from the <code>replacement</code> array are inserted in the place specified by the <code>offset</code>.</p> <p><b>Note</b>:</p><p>Keys in the <code>replacement</code> array are not preserved.</p>  <p>If <code>replacement</code> is just one element it is not necessary to put <code>array()</code> or square brackets around it, unless the element is an array itself, an object or <b><code>null</code></b>.</p>
	 * @return array <p>Returns an array consisting of the extracted elements.</p>
	 * @link https://php.net/manual/en/function.array-splice.php
	 * @see array_merge(), array_slice(), unset()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_splice(array &$array, int $offset, ?int $length = null, mixed $replacement = []): array {}

	/**
	 * Calculate the sum of values in an array
	 * <p><b>array_sum()</b> returns the sum of values in an array.</p>
	 * @param array $array <p>The input array.</p>
	 * @return int|float <p>Returns the sum of values as an integer or float; <code>0</code> if the <code>array</code> is empty.</p>
	 * @link https://php.net/manual/en/function.array-sum.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function array_sum(array $array): int|float {}

	/**
	 * Computes the difference of arrays by using a callback function for data comparison
	 * <p>Computes the difference of arrays by using a callback function for data comparison. This is unlike <code>array_diff()</code> which uses an internal function for comparing the data.</p>
	 * @param array $array <p>The first array.</p>
	 * @param array $arrays <p>Arrays to compare against.</p>
	 * @param callable $value_compare_func <p>The callback comparison function.</p> <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns an array containing all the values of <code>array</code> that are not present in any of the other arguments.</p>
	 * @link https://php.net/manual/en/function.array-udiff.php
	 * @see array_diff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_udiff(array $array, array ...$arrays, callable $value_compare_func): array {}

	/**
	 * Computes the difference of arrays with additional index check, compares data by a callback function
	 * <p>Computes the difference of arrays with additional index check, compares data by a callback function.</p><p><b>Note</b>:  Please note that this function only checks one dimension of a n-dimensional array. Of course you can check deeper dimensions by using, for example, <code>array_udiff_assoc($array1[0], $array2[0], "some_comparison_func");</code>. </p>
	 * @param array $array <p>The first array.</p>
	 * @param array $arrays <p>Arrays to compare against.</p>
	 * @param callable $value_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p><b>array_udiff_assoc()</b> returns an <code>array</code> containing all the values from <code>array</code> that are not present in any of the other arguments. Note that the keys are used in the comparison unlike <code>array_diff()</code> and <code>array_udiff()</code>. The comparison of arrays' data is performed by using an user-supplied callback. In this aspect the behaviour is opposite to the behaviour of <code>array_diff_assoc()</code> which uses internal function for comparison.</p>
	 * @link https://php.net/manual/en/function.array-udiff-assoc.php
	 * @see array_diff(), array_diff_assoc(), array_diff_uassoc(), array_udiff(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_udiff_assoc(array $array, array ...$arrays, callable $value_compare_func): array {}

	/**
	 * Computes the difference of arrays with additional index check, compares data and indexes by a callback function
	 * <p>Computes the difference of arrays with additional index check, compares data and indexes by a callback function.</p><p>Note that the keys are used in the comparison unlike <code>array_diff()</code> and <code>array_udiff()</code>.</p>
	 * @param array $array <p>The first array.</p>
	 * @param array $arrays <p>Arrays to compare against.</p>
	 * @param callable $value_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @param callable $key_compare_func <p>The comparison of keys (indices) is done also by the callback function <code>key_compare_func</code>. This behaviour is unlike what <code>array_udiff_assoc()</code> does, since the latter compares the indices by using an internal function.</p>
	 * @return array <p>Returns an <code>array</code> containing all the values from <code>array</code> that are not present in any of the other arguments.</p>
	 * @link https://php.net/manual/en/function.array-udiff-uassoc.php
	 * @see array_diff(), array_diff_assoc(), array_udiff(), array_udiff_assoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_udiff_uassoc(array $array, array ...$arrays, callable $value_compare_func, callable $key_compare_func): array {}

	/**
	 * Computes the intersection of arrays, compares data by a callback function
	 * <p>Computes the intersection of arrays, compares data by a callback function.</p>
	 * @param array $array <p>The first array.</p>
	 * @param array $arrays <p>Arrays to compare against.</p>
	 * @param callable $value_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns an array containing all the values of <code>array</code> that are present in all the arguments.</p>
	 * @link https://php.net/manual/en/function.array-uintersect.php
	 * @see array_intersect(), array_intersect_assoc(), array_uintersect_assoc(), array_uintersect_uassoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_uintersect(array $array, array ...$arrays, callable $value_compare_func): array {}

	/**
	 * Computes the intersection of arrays with additional index check, compares data by a callback function
	 * <p>Computes the intersection of arrays with additional index check, compares data by a callback function.</p><p>Note that the keys are used in the comparison unlike in <code>array_uintersect()</code>. The data is compared by using a callback function.</p>
	 * @param array $array <p>The first array.</p>
	 * @param array $arrays <p>Arrays to compare against.</p>
	 * @param callable $value_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return array <p>Returns an array containing all the values of <code>array</code> that are present in all the arguments.</p>
	 * @link https://php.net/manual/en/function.array-uintersect-assoc.php
	 * @see array_uintersect(), array_intersect_assoc(), array_intersect_uassoc(), array_uintersect_uassoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_uintersect_assoc(array $array, array ...$arrays, callable $value_compare_func): array {}

	/**
	 * Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
	 * <p>Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions.</p>
	 * @param array $array1 <p>The first array.</p>
	 * @param array $arrays <p>Further arrays.</p>
	 * @param callable $value_compare_func <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @param callable $key_compare_func <p>Key comparison callback function.</p>
	 * @return array <p>Returns an array containing all the values of <code>array1</code> that are present in all the arguments.</p>
	 * @link https://php.net/manual/en/function.array-uintersect-uassoc.php
	 * @see array_uintersect(), array_intersect_assoc(), array_intersect_uassoc(), array_uintersect_assoc()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_uintersect_uassoc(array $array1, array ...$arrays, callable $value_compare_func, callable $key_compare_func): array {}

	/**
	 * Removes duplicate values from an array
	 * <p>Takes an input <code>array</code> and returns a new array without duplicate values.</p><p>Note that keys are preserved. If multiple elements compare equal under the given <code>flags</code>, then the key and value of the first equal element will be retained.</p><p><b>Note</b>:  Two elements are considered equal if and only if <code>(string) $elem1 === (string) $elem2</code> i.e. when the string representation is the same, the first element will be used. </p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally (don't change types) </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li> <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale.  </li> </ul>
	 * @return array <p>Returns the filtered array.</p>
	 * @link https://php.net/manual/en/function.array-unique.php
	 * @see array_count_values()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8
	 */
	function array_unique(array $array, int $flags = SORT_STRING): array {}

	/**
	 * Prepend one or more elements to the beginning of an array
	 * <p><b>array_unshift()</b> prepends passed elements to the front of the <code>array</code>. Note that the list of elements is prepended as a whole, so that the prepended elements stay in the same order. All numerical array keys will be modified to start counting from zero while literal keys won't be changed.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param mixed $values <p>The values to prepend.</p>
	 * @return int <p>Returns the new number of elements in the <code>array</code>.</p>
	 * @link https://php.net/manual/en/function.array-unshift.php
	 * @see array_shift(), array_push(), array_pop()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_unshift(array &$array, mixed ...$values): int {}

	/**
	 * Return all the values of an array
	 * <p><b>array_values()</b> returns all the values from the <code>array</code> and indexes the array numerically.</p>
	 * @param array $array <p>The array.</p>
	 * @return array <p>Returns an indexed array of values.</p>
	 * @link https://php.net/manual/en/function.array-values.php
	 * @see array_keys(), array_combine()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_values(array $array): array {}

	/**
	 * Apply a user supplied function to every member of an array
	 * <p>Applies the user-defined <code>callback</code> function to each element of the <code>array</code> array.</p><p><b>array_walk()</b> is not affected by the internal array pointer of <code>array</code>. <b>array_walk()</b> will walk through the entire array regardless of pointer position.</p>
	 * @param array|object $array <p>The input array.</p>
	 * @param callable $callback <p>Typically, <code>callback</code> takes on two parameters. The <code>array</code> parameter's value being the first, and the key/index second.</p> <p><b>Note</b>:</p><p>If <code>callback</code> needs to be working with the actual values of the array, specify the first parameter of <code>callback</code> as a reference. Then, any changes made to those elements will be made in the original array itself.</p>  <p><b>Note</b>:</p><p>Many internal functions (for example <code>strtolower()</code>) will throw a warning if more than the expected number of argument are passed in and are not usable directly as a <code>callback</code>.</p>  <p>Only the values of the <code>array</code> may potentially be changed; its structure cannot be altered, i.e., the programmer cannot add, unset or reorder elements. If the callback does not respect this requirement, the behavior of this function is undefined, and unpredictable.</p>
	 * @param mixed $arg <p>If the optional <code>arg</code> parameter is supplied, it will be passed as the third parameter to the <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.array-walk.php
	 * @see array_walk_recursive(), iterator_apply(), list(), each(), call_user_func_array(), array_map()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function array_walk(array|object &$array, callable $callback, mixed $arg = null): bool {}

	/**
	 * Apply a user function recursively to every member of an array
	 * <p>Applies the user-defined <code>callback</code> function to each element of the <code>array</code>. This function will recurse into deeper arrays.</p>
	 * @param array|object $array <p>The input array.</p>
	 * @param callable $callback <p>Typically, <code>callback</code> takes on two parameters. The <code>array</code> parameter's value being the first, and the key/index second.</p> <p><b>Note</b>:</p><p>If <code>callback</code> needs to be working with the actual values of the array, specify the first parameter of <code>callback</code> as a reference. Then, any changes made to those elements will be made in the original array itself.</p>
	 * @param mixed $arg <p>If the optional <code>arg</code> parameter is supplied, it will be passed as the third parameter to the <code>callback</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.array-walk-recursive.php
	 * @see array_walk()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function array_walk_recursive(array|object &$array, callable $callback, mixed $arg = null): bool {}

	/**
	 * Sort an array in descending order and maintain index association
	 * <p>Sorts <code>array</code> in place in descending order, such that its keys maintain their correlation with the values they are associated with.</p><p>This is used mainly when sorting associative arrays where the actual element order is significant.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.arsort.php
	 * @see sort(), asort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function arsort(array &$array, int $flags = SORT_REGULAR): bool {}

	/**
	 * Sort an array in ascending order and maintain index association
	 * <p>Sorts <code>array</code> in place in ascending order, such that its keys maintain their correlation with the values they are associated with.</p><p>This is used mainly when sorting associative arrays where the actual element order is significant.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.asort.php
	 * @see sort(), arsort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function asort(array &$array, int $flags = SORT_REGULAR): bool {}

	/**
	 * Create array containing variables and their values
	 * <p>Creates an array containing variables and their values.</p><p>For each of these, <b>compact()</b> looks for a variable with that name in the current symbol table and adds it to the output array such that the variable name becomes the key and the contents of the variable become the value for that key. In short, it does the opposite of <code>extract()</code>.</p><p><b>Note</b>:</p><p>Before PHP 7.3, any strings that are not set will silently be skipped.</p>
	 * @param array|string $var_name
	 * @param array|string $var_names <p><b>compact()</b> takes a variable number of parameters. Each parameter can be either a string containing the name of the variable, or an array of variable names. The array can contain other arrays of variable names inside it; <b>compact()</b> handles it recursively.</p>
	 * @return array <p>Returns the output array with all the variables added to it.</p>
	 * @link https://php.net/manual/en/function.compact.php
	 * @see extract()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function compact(array|string $var_name, array|string ...$var_names): array {}

	/**
	 * Counts all elements in an array or in a Countable object
	 * <p>Counts all elements in an array when used with an array. When used with an object that implements the <code>Countable</code> interface, it returns the return value of the method <code>Countable::count()</code>.</p>
	 * @param \Countable|array $value <p>An array or <code>Countable</code> object.</p>
	 * @param int $mode <p>If the optional <code>mode</code> parameter is set to <b><code>COUNT_RECURSIVE</code></b> (or 1), <b>count()</b> will recursively count the array. This is particularly useful for counting all the elements of a multidimensional array.</p> <b>Caution</b> <p><b>count()</b> can detect recursion to avoid an infinite loop, but will emit an <b><code>E_WARNING</code></b> every time it does (in case the array contains itself more than once) and return a count higher than may be expected.</p>
	 * @return int <p>Returns the number of elements in <code>value</code>. Prior to PHP 8.0.0, if the parameter was neither an <code>array</code> nor an <code>object</code> that implements the <code>Countable</code> interface, <code>1</code> would be returned, unless <code>value</code> was <b><code>null</code></b>, in which case <code>0</code> would be returned.</p>
	 * @link https://php.net/manual/en/function.count.php
	 * @see is_array(), isset(), empty(), strlen(), is_countable()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function count(\Countable|array $value, int $mode = COUNT_NORMAL): int {}

	/**
	 * Return the current element in an array
	 * <p>Every array has an internal pointer to its "current" element, which is initialized to the first element inserted into the array.</p>
	 * @param array|object $array <p>The array.</p>
	 * @return mixed <p>The <b>current()</b> function simply returns the value of the array element that's currently being pointed to by the internal pointer. It does not move the pointer in any way. If the internal pointer points beyond the end of the elements list or the array is empty, <b>current()</b> returns <b><code>false</code></b>.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.current.php
	 * @see end(), key(), each(), prev(), reset(), next()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function current(array|object $array): mixed {}

	/**
	 * Return the current key and value pair from an array and advance the array cursor
	 * <p>Return the current key and value pair from an array and advance the array cursor.</p><p>After <b>each()</b> has executed, the array cursor will be left on the next element of the array, or past the last element if it hits the end of the array. You have to use <code>reset()</code> if you want to traverse the array again using each.</p>
	 * @param array|object $array <p>The input array.</p>
	 * @return array <p>Returns the current key and value pair from the array <code>array</code>. This pair is returned in a four-element array, with the keys <code>0</code>, <code>1</code>, <code>key</code>, and <code>value</code>. Elements <code>0</code> and <code>key</code> contain the key name of the array element, and <code>1</code> and <code>value</code> contain the data.</p><p>If the internal pointer for the array points past the end of the array contents, <b>each()</b> returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.each.php
	 * @see key(), list(), current(), reset(), next(), prev()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function each(array|object &$array): array {}

	/**
	 * Set the internal pointer of an array to its last element
	 * <p><b>end()</b> advances <code>array</code>'s internal pointer to the last element, and returns its value.</p>
	 * @param array|object $array <p>The array. This array is passed by reference because it is modified by the function. This means you must pass it a real variable and not a function returning an array because only actual variables may be passed by reference.</p>
	 * @return mixed <p>Returns the value of the last element or <b><code>false</code></b> for empty array.</p>
	 * @link https://php.net/manual/en/function.end.php
	 * @see current(), each(), prev(), reset(), next(), array_key_last()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function end(array|object &$array): mixed {}

	/**
	 * Import variables into the current symbol table from an array
	 * <p>Import variables from an array into the current symbol table.</p><p>Checks each key to see whether it has a valid variable name. It also checks for collisions with existing variables in the symbol table.</p><p>Do not use <b>extract()</b> on untrusted data, like user input (e.g. $_GET, $_FILES).</p>
	 * @param array $array <p>An associative array. This function treats keys as variable names and values as variable values. For each key/value pair it will create a variable in the current symbol table, subject to <code>flags</code> and <code>prefix</code> parameters.</p> <p>You must use an associative array; a numerically indexed array will not produce results unless you use <b><code>EXTR_PREFIX_ALL</code></b> or <b><code>EXTR_PREFIX_INVALID</code></b>.</p>
	 * @param int $flags <p>The way invalid/numeric keys and collisions are treated is determined by the extraction <code>flags</code>. It can be one of the following values:</p>  <b><code>EXTR_OVERWRITE</code></b>   If there is a collision, overwrite the existing variable.    <b><code>EXTR_SKIP</code></b>   If there is a collision, don't overwrite the existing variable.    <b><code>EXTR_PREFIX_SAME</code></b>  If there is a collision, prefix the variable name with <code>prefix</code>.    <b><code>EXTR_PREFIX_ALL</code></b>   Prefix all variable names with <code>prefix</code>.    <b><code>EXTR_PREFIX_INVALID</code></b>   Only prefix invalid/numeric variable names with <code>prefix</code>.    <b><code>EXTR_IF_EXISTS</code></b>   Only overwrite the variable if it already exists in the current symbol table, otherwise do nothing. This is useful for defining a list of valid variables and then extracting only those variables you have defined out of $_REQUEST, for example.    <b><code>EXTR_PREFIX_IF_EXISTS</code></b>   Only create prefixed variable names if the non-prefixed version of the same variable exists in the current symbol table.    <b><code>EXTR_REFS</code></b>   Extracts variables as references. This effectively means that the values of the imported variables are still referencing the values of the <code>array</code> parameter. You can use this flag on its own or combine it with any other flag by OR'ing the <code>flags</code>.    <p>If <code>flags</code> is not specified, it is assumed to be <b><code>EXTR_OVERWRITE</code></b>.</p>
	 * @param string $prefix <p>Note that <code>prefix</code> is only required if <code>flags</code> is <b><code>EXTR_PREFIX_SAME</code></b>, <b><code>EXTR_PREFIX_ALL</code></b>, <b><code>EXTR_PREFIX_INVALID</code></b> or <b><code>EXTR_PREFIX_IF_EXISTS</code></b>. If the prefixed result is not a valid variable name, it is not imported into the symbol table. Prefixes are automatically separated from the array key by an underscore character.</p>
	 * @return int <p>Returns the number of variables successfully imported into the symbol table.</p>
	 * @link https://php.net/manual/en/function.extract.php
	 * @see compact(), list()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = ""): int {}

	/**
	 * Checks if a value exists in an array
	 * <p>Searches for <code>needle</code> in <code>haystack</code> using loose comparison unless <code>strict</code> is set.</p>
	 * @param mixed $needle <p>The searched value.</p> <p><b>Note</b>:</p><p>If <code>needle</code> is a string, the comparison is done in a case-sensitive manner.</p>
	 * @param array $haystack <p>The array.</p>
	 * @param bool $strict <p>If the third parameter <code>strict</code> is set to <b><code>true</code></b> then the <b>in_array()</b> function will also check the types of the <code>needle</code> in the <code>haystack</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>needle</code> is found in the array, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.in-array.php
	 * @see array_search(), isset(), array_key_exists()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function in_array(mixed $needle, array $haystack, bool $strict = false): bool {}

	/**
	 * Fetch a key from an array
	 * <p><b>key()</b> returns the index element of the current array position.</p>
	 * @param array|object $array <p>The array.</p>
	 * @return int|string|null <p>The <b>key()</b> function simply returns the key of the array element that's currently being pointed to by the internal pointer. It does not move the pointer in any way. If the internal pointer points beyond the end of the elements list or the array is empty, <b>key()</b> returns <b><code>null</code></b>.</p>
	 * @link https://php.net/manual/en/function.key.php
	 * @see current(), next(), array_key_first()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function key(array|object $array): int|string|null {}

	/**
	 * Alias of array_key_exists()
	 * <p>This function is an alias of: <code>array_key_exists()</code>.</p>
	 * @param string|int $key <p>Value to check.</p>
	 * @param array $array <p>An array with keys to check.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.key-exists.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8
	 */
	function key_exists(string|int $key, array $array): bool {}

	/**
	 * Sort an array by key in descending order
	 * <p>Sorts <code>array</code> in place by keys in descending order.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.krsort.php
	 * @see sort(), ksort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function krsort(array &$array, int $flags = SORT_REGULAR): bool {}

	/**
	 * Sort an array by key in ascending order
	 * <p>Sorts <code>array</code> in place by keys in ascending order.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.ksort.php
	 * @see sort(), krsort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ksort(array &$array, int $flags = SORT_REGULAR): bool {}

	/**
	 * Sort an array using a case insensitive "natural order" algorithm
	 * <p><b>natcasesort()</b> is a case insensitive version of <code>natsort()</code>.</p><p>This function implements a sort algorithm that orders alphanumeric strings in the way a human being would while maintaining key/value associations. This is described as a "natural ordering".</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.natcasesort.php
	 * @see natsort(), strnatcmp(), strnatcasecmp()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function natcasesort(array &$array): bool {}

	/**
	 * Sort an array using a "natural order" algorithm
	 * <p>This function implements a sort algorithm that orders alphanumeric strings in the way a human being would while maintaining key/value associations. This is described as a "natural ordering". An example of the difference between this algorithm and the regular computer string sorting algorithms (used in <code>sort()</code>) can be seen in the example below.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.natsort.php
	 * @see natcasesort(), strnatcmp(), strnatcasecmp()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function natsort(array &$array): bool {}

	/**
	 * Advance the internal pointer of an array
	 * <p><b>next()</b> behaves like <code>current()</code>, with one difference. It advances the internal array pointer one place forward before returning the element value. That means it returns the next array value and advances the internal array pointer by one.</p>
	 * @param array|object $array <p>The <code>array</code> being affected.</p>
	 * @return mixed <p>Returns the array value in the next place that's pointed to by the internal array pointer, or <b><code>false</code></b> if there are no more elements.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.next.php
	 * @see current(), end(), prev(), reset(), each()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function next(array|object &$array): mixed {}

	/**
	 * Alias of current()
	 * <p>This function is an alias of: <code>current()</code></p>
	 * @param array|object $array <p>The array.</p>
	 * @return mixed
	 * @link https://php.net/manual/en/function.pos.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function pos(array|object $array): mixed {}

	/**
	 * Rewind the internal array pointer
	 * <p>Rewind the internal array pointer.</p><p><b>prev()</b> behaves just like <code>next()</code>, except it rewinds the internal array pointer one place instead of advancing it.</p>
	 * @param array|object $array <p>The input array.</p>
	 * @return mixed <p>Returns the array value in the previous place that's pointed to by the internal array pointer, or <b><code>false</code></b> if there are no more elements.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.prev.php
	 * @see current(), end(), next(), reset(), each()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function prev(array|object &$array): mixed {}

	/**
	 * Create an array containing a range of elements
	 * <p>Create an array containing a range of elements.</p>
	 * @param string|int|float $start <p>First value of the sequence.</p>
	 * @param string|int|float $end <p>The sequence is ended upon reaching the <code>end</code> value.</p>
	 * @param int|float $step <p>If a <code>step</code> value is given, it will be used as the increment between elements in the sequence. <code>step</code> should be given as a positive number. If not specified, <code>step</code> will default to 1.</p>
	 * @return array <p>Returns an array of elements from <code>start</code> to <code>end</code>, inclusive.</p>
	 * @link https://php.net/manual/en/function.range.php
	 * @see shuffle(), array_fill()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function range(string|int|float $start, string|int|float $end, int|float $step = 1): array {}

	/**
	 * Set the internal pointer of an array to its first element
	 * <p><b>reset()</b> rewinds <code>array</code>'s internal pointer to the first element and returns the value of the first array element.</p>
	 * @param array|object $array <p>The input array.</p>
	 * @return mixed <p>Returns the value of the first array element, or <b><code>false</code></b> if the array is empty.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.reset.php
	 * @see current(), each(), end(), next(), prev(), array_key_first()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function reset(array|object &$array): mixed {}

	/**
	 * Sort an array in descending order
	 * <p>Sorts <code>array</code> in place by values in descending order.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>: This function assigns new keys to the elements in <code>array</code>. It will remove any existing keys that may have been assigned, rather than just reordering the keys.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.rsort.php
	 * @see sort(), arsort(), krsort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rsort(array &$array, int $flags = SORT_REGULAR): bool {}

	/**
	 * Shuffle an array
	 * <p>This function shuffles (randomizes the order of the elements in) an array. It uses a pseudo random number generator that is not suitable for cryptographic purposes.</p>
	 * @param array $array <p>The array.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shuffle.php
	 * @see array_rand()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function shuffle(array &$array): bool {}

	/**
	 * Alias of count()
	 * <p>This function is an alias of: <code>count()</code>.</p>
	 * @param \Countable|array $value <p>An array or <code>Countable</code> object.</p>
	 * @param int $mode <p>If the optional <code>mode</code> parameter is set to <b><code>COUNT_RECURSIVE</code></b> (or 1), <b>count()</b> will recursively count the array. This is particularly useful for counting all the elements of a multidimensional array.</p> <b>Caution</b> <p><b>count()</b> can detect recursion to avoid an infinite loop, but will emit an <b><code>E_WARNING</code></b> every time it does (in case the array contains itself more than once) and return a count higher than may be expected.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.sizeof.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function sizeof(\Countable|array $value, int $mode = COUNT_NORMAL): int {}

	/**
	 * Sort an array in ascending order
	 * <p>Sorts <code>array</code> in place by values in ascending order.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>: This function assigns new keys to the elements in <code>array</code>. It will remove any existing keys that may have been assigned, rather than just reordering the keys.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>The optional second parameter <code>flags</code> may be used to modify the sorting behavior using these values:</p> <p>Sorting type flags:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - compare items normally; the details are described in the comparison operators section </li> <li> <b><code>SORT_NUMERIC</code></b> - compare items numerically </li> <li> <b><code>SORT_STRING</code></b> - compare items as strings </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - compare items as strings, based on the current locale. It uses the locale, which can be changed using <code>setlocale()</code>  </li> <li>  <b><code>SORT_NATURAL</code></b> - compare items as strings using "natural ordering" like <code>natsort()</code>  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively  </li> </ul>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.sort.php
	 * @see rsort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function sort(array &$array, int $flags = SORT_REGULAR): bool {}

	/**
	 * Sort an array with a user-defined comparison function and maintain index association
	 * <p>Sorts <code>array</code> in place such that its keys maintain their correlation with the values they are associated with, using a user-defined comparison function.</p><p>This is used mainly when sorting associative arrays where the actual element order is significant.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.uasort.php
	 * @see usort(), uksort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function uasort(array &$array, callable $callback): bool {}

	/**
	 * Sort an array by keys using a user-defined comparison function
	 * <p>Sorts <code>array</code> in place by keys using a user-supplied comparison function to determine the order.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>:</p><p>Resets array's internal pointer to the first element.</p>
	 * @param array $array <p>The input array.</p>
	 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.uksort.php
	 * @see usort(), uasort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function uksort(array &$array, callable $callback): bool {}

	/**
	 * Sort an array by values using a user-defined comparison function
	 * <p>Sorts <code>array</code> in place by values using a user-supplied comparison function to determine the order.</p><p><b>Note</b>:</p><p>If two members compare as equal, they retain their original order. Prior to PHP 8.0.0, their relative order in the sorted array was undefined.</p><p><b>Note</b>: This function assigns new keys to the elements in <code>array</code>. It will remove any existing keys that may have been assigned, rather than just reordering the keys.</p>
	 * @param array $array <p>The input array.</p>
	 * @param callable $callback <p>The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.</p> callback(<code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code>): <code>int</code>
	 * @return bool <p>Always returns <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.usort.php
	 * @see uasort(), uksort()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function usort(array &$array, callable $callback): bool {}

	/**
	 * <b><code>ARRAY_FILTER_USE_BOTH</code></b> is used with <code>array_filter()</code> to pass both value and key to the given callback function.
	 */
	define('ARRAY_FILTER_USE_BOTH', 1);

	/**
	 * <b><code>ARRAY_FILTER_USE_KEY</code></b> is used with <code>array_filter()</code> to pass each key as the first argument to the given callback function.
	 */
	define('ARRAY_FILTER_USE_KEY', 2);

	/**
	 * <b><code>CASE_LOWER</code></b> is used with <code>array_change_key_case()</code> and is used to convert array keys to lower case. This is also the default case for <code>array_change_key_case()</code>.
	 */
	define('CASE_LOWER', 0);

	/**
	 * <b><code>CASE_UPPER</code></b> is used with <code>array_change_key_case()</code> and is used to convert array keys to upper case.
	 */
	define('CASE_UPPER', 1);

	define('COUNT_NORMAL', 0);

	define('COUNT_RECURSIVE', 1);

	define('EXTR_IF_EXISTS', 6);

	define('EXTR_OVERWRITE', 0);

	define('EXTR_PREFIX_ALL', 3);

	define('EXTR_PREFIX_IF_EXISTS', 5);

	define('EXTR_PREFIX_INVALID', 4);

	define('EXTR_PREFIX_SAME', 2);

	define('EXTR_REFS', 256);

	define('EXTR_SKIP', 1);

	/**
	 * <b><code>SORT_ASC</code></b> is used with <code>array_multisort()</code> to sort in ascending order.
	 */
	define('SORT_ASC', 4);

	/**
	 * <b><code>SORT_DESC</code></b> is used with <code>array_multisort()</code> to sort in descending order.
	 */
	define('SORT_DESC', 3);

	/**
	 * <b><code>SORT_FLAG_CASE</code></b> can be combined (bitwise OR) with <b><code>SORT_STRING</code></b> or <b><code>SORT_NATURAL</code></b> to sort strings case-insensitively.
	 */
	define('SORT_FLAG_CASE', 8);

	/**
	 * <b><code>SORT_LOCALE_STRING</code></b> is used to compare items as strings, based on the current locale.
	 */
	define('SORT_LOCALE_STRING', 5);

	/**
	 * <b><code>SORT_NATURAL</code></b> is used to compare items as strings using "natural ordering" like <code>natsort()</code>.
	 */
	define('SORT_NATURAL', 6);

	/**
	 * <b><code>SORT_NUMERIC</code></b> is used to compare items numerically.
	 */
	define('SORT_NUMERIC', 1);

	/**
	 * <b><code>SORT_REGULAR</code></b> is used to compare items normally.
	 */
	define('SORT_REGULAR', 0);

	/**
	 * <b><code>SORT_STRING</code></b> is used to compare items as strings.
	 */
	define('SORT_STRING', 2);

}
