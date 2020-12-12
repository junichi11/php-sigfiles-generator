<?php



namespace {

	/**
	 * <p>Interface to provide accessing objects as arrays.</p>
	 * @link https://php.net/manual/en/class.arrayaccess.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	interface ArrayAccess {

		/**
		 * Whether an offset exists
		 * <p>Whether or not an offset exists.</p><p>This method is executed when using <code>isset()</code> or <code>empty()</code> on objects implementing ArrayAccess.</p><p><b>Note</b>:</p><p>When using <code>empty()</code> <code>ArrayAccess::offsetGet()</code> will be called and checked if empty only if <b>ArrayAccess::offsetExists()</b> returns <b><code>TRUE</code></b>.</p>
		 * @param mixed $offset <p>An offset to check for.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p><b>Note</b>:</p><p>The return value will be casted to <code>bool</code> if non-boolean was returned.</p>
		 * @link https://php.net/manual/en/arrayaccess.offsetexists.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetExists($offset): bool;

		/**
		 * Offset to retrieve
		 * <p>Returns the value at specified offset.</p><p>This method is executed when checking if offset is <code>empty()</code>.</p>
		 * @param mixed $offset <p>The offset to retrieve.</p>
		 * @return mixed <p>Can return all value types.</p>
		 * @link https://php.net/manual/en/arrayaccess.offsetget.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetGet($offset);

		/**
		 * Assign a value to the specified offset
		 * <p>Assigns a value to the specified offset.</p>
		 * @param mixed $offset <p>The offset to assign the value to.</p>
		 * @param mixed $value <p>The value to set.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayaccess.offsetset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetSet($offset, $value): void;

		/**
		 * Unset an offset
		 * <p>Unsets an offset.</p><p><b>Note</b>:</p><p>This method will <i>not</i> be called when type-casting to (unset)</p>
		 * @param mixed $offset <p>The offset to unset.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/arrayaccess.offsetunset.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function offsetUnset($offset): void;
	}

}
