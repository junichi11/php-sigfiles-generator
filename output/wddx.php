<?php



namespace {

	/**
	 * Add variables to a WDDX packet with the specified ID
	 * <p>Serializes the passed variables and add the result to the given packet.</p>
	 * @param resource $packet_id <p>A WDDX packet, returned by <code>wddx_packet_start()</code>.</p>
	 * @param mixed $var_name <p>Can be either a string naming a variable or an array containing strings naming the variables or another array, etc.</p>
	 * @param mixed $var_names
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.wddx-add-vars.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_add_vars($packet_id, mixed $var_name, mixed ...$var_names): bool {}

	/**
	 * Unserializes a WDDX packet
	 * <p>Unserializes a WDDX <code>packet</code>.</p><p>Do not pass untrusted user input to <b>wddx_deserialize()</b>. Unserialization can result in code being loaded and executed due to object instantiation and autoloading, and a malicious user may be able to exploit this. Use a safe, standard data interchange format such as JSON (via <code>json_decode()</code> and <code>json_encode()</code>) if you need to pass serialized data to the user.</p>
	 * @param string $packet <p>A WDDX packet, as a string or stream.</p>
	 * @return mixed <p>Returns the deserialized value which can be a string, a number or an array. Note that structures are deserialized into associative arrays.</p>
	 * @link https://php.net/manual/en/function.wddx-deserialize.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_deserialize(string $packet): mixed {}

	/**
	 * Ends a WDDX packet with the specified ID
	 * <p>Ends and returns the given WDDX packet.</p>
	 * @param resource $packet_id <p>A WDDX packet, returned by <code>wddx_packet_start()</code>.</p>
	 * @return string <p>Returns the string containing the WDDX packet.</p>
	 * @link https://php.net/manual/en/function.wddx-packet-end.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_packet_end($packet_id): string {}

	/**
	 * Starts a new WDDX packet with structure inside it
	 * <p>Start a new WDDX packet for incremental addition of variables. It automatically creates a structure definition inside the packet to contain the variables.</p>
	 * @param string $comment <p>An optional comment string.</p>
	 * @return resource <p>Returns a packet ID for use in later functions, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.wddx-packet-start.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_packet_start(string $comment = NULL) {}

	/**
	 * Serialize a single value into a WDDX packet
	 * <p>Creates a WDDX packet from a single given value.</p>
	 * @param mixed $var <p>The value to be serialized</p>
	 * @param string $comment <p>An optional comment string that appears in the packet header.</p>
	 * @return string <p>Returns the WDDX packet, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.wddx-serialize-value.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_serialize_value(mixed $var, string $comment = NULL): string {}

	/**
	 * Serialize variables into a WDDX packet
	 * <p>Creates a WDDX packet with a structure that contains the serialized representation of the passed variables.</p>
	 * @param mixed $var_name <p>Can be either a string naming a variable or an array containing strings naming the variables or another array, etc.</p>
	 * @param mixed $var_names
	 * @return string <p>Returns the WDDX packet, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.wddx-serialize-vars.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function wddx_serialize_vars(mixed $var_name, mixed ...$var_names): string {}

}
