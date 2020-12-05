<?php



namespace {

	/**
	 * Add two arbitrary precision numbers
	 * <p>Sums <code>num1</code> and <code>num2</code>.</p>
	 * @param string $num1 <p>The left operand, as a string.</p>
	 * @param string $num2 <p>The right operand, as a string.</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>The sum of the two operands, as a string.</p>
	 * @link http://php.net/manual/en/function.bcadd.php
	 * @see bcsub()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcadd(string $num1, string $num2, $scale = NULL): string {}

	/**
	 * Compare two arbitrary precision numbers
	 * <p>Compares the <code>num1</code> to the <code>num2</code> and returns the result as an integer.</p>
	 * @param string $num1 <p>The left operand, as a string.</p>
	 * @param string $num2 <p>The right operand, as a string.</p>
	 * @param int|null $scale <p>The optional <code>scale</code> parameter is used to set the number of digits after the decimal place which will be used in the comparison.</p>
	 * @return int <p>Returns 0 if the two operands are equal, 1 if the <code>num1</code> is larger than the <code>num2</code>, -1 otherwise.</p>
	 * @link http://php.net/manual/en/function.bccomp.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bccomp(string $num1, string $num2, $scale = NULL): int {}

	/**
	 * Divide two arbitrary precision numbers
	 * <p>Divides the <code>num1</code> by the <code>num2</code>.</p>
	 * @param string $num1 <p>The dividend, as a string.</p>
	 * @param string $num2 <p>The divisor, as a string.</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>Returns the result of the division as a string, or <b><code>NULL</code></b> if <code>num2</code> is <code>0</code>.</p>
	 * @link http://php.net/manual/en/function.bcdiv.php
	 * @see bcmul()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcdiv(string $num1, string $num2, $scale = NULL): string {}

	/**
	 * Get modulus of an arbitrary precision number
	 * <p>Get the remainder of dividing <code>num1</code> by <code>num2</code>. Unless <code>num2</code> is zero, the result has the same sign as <code>num1</code>.</p>
	 * @param string $num1 <p>The dividend, as a string.</p>
	 * @param string $num2 <p>The divisor, as a string.</p>
	 * @param int|null $scale
	 * @return string <p>Returns the modulus as a string, or <b><code>NULL</code></b> if <code>num2</code> is <code>0</code>.</p>
	 * @link http://php.net/manual/en/function.bcmod.php
	 * @see bcdiv()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcmod(string $num1, string $num2, $scale = NULL): string {}

	/**
	 * Multiply two arbitrary precision numbers
	 * <p>Multiply the <code>num1</code> by the <code>num2</code>.</p>
	 * @param string $num1 <p>The left operand, as a string.</p>
	 * @param string $num2 <p>The right operand, as a string.</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>Returns the result as a string.</p>
	 * @link http://php.net/manual/en/function.bcmul.php
	 * @see bcdiv()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcmul(string $num1, string $num2, $scale = NULL): string {}

	/**
	 * Raise an arbitrary precision number to another
	 * <p>Raise <code>num</code> to the power <code>exponent</code>.</p>
	 * @param string $num <p>The base, as a string.</p>
	 * @param string $exponent <p>The exponent, as a string. If the exponent is non-integral, it is truncated. The valid range of the exponent is platform specific, but is at least <code>-2147483648</code> to <code>2147483647</code>.</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>Returns the result as a string.</p>
	 * @link http://php.net/manual/en/function.bcpow.php
	 * @see bcpowmod(), bcsqrt()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcpow(string $num, string $exponent, $scale = NULL): string {}

	/**
	 * Raise an arbitrary precision number to another, reduced by a specified modulus
	 * <p>Use the fast-exponentiation method to raise <code>num</code> to the power <code>exponent</code> with respect to the modulus <code>modulus</code>.</p>
	 * @param string $num <p>The base, as an integral string (i.e. the scale has to be zero).</p>
	 * @param string $exponent <p>The exponent, as an non-negative, integral string (i.e. the scale has to be zero).</p>
	 * @param string $modulus <p>The modulus, as an integral string (i.e. the scale has to be zero).</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>Returns the result as a string, or <b><code>FALSE</code></b> if <code>modulus</code> is <code>0</code> or <code>exponent</code> is negative.</p>
	 * @link http://php.net/manual/en/function.bcpowmod.php
	 * @see bcpow(), bcmod()
	 * @since PHP 5, PHP 7
	 */
	function bcpowmod(string $num, string $exponent, string $modulus, $scale = NULL): string {}

	/**
	 * Set or get default scale parameter for all bc math functions
	 * <p>Sets the default scale parameter for all subsequent calls to bc math functions that do not explicitly specify a scale parameter.</p><p>Gets the current scale factor.</p>
	 * @param int $scale <p>The scale factor.</p>
	 * @return int <p>Returns the old scale when used as setter. Otherwise the current scale is returned.</p>
	 * @link http://php.net/manual/en/function.bcscale.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcscale(int $scale): int {}

	/**
	 * Get the square root of an arbitrary precision number
	 * <p>Return the square root of the <code>num</code>.</p>
	 * @param string $num <p>The operand, as a string.</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>Returns the square root as a string, or <b><code>NULL</code></b> if <code>num</code> is negative.</p>
	 * @link http://php.net/manual/en/function.bcsqrt.php
	 * @see bcpow()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcsqrt(string $num, $scale = NULL): string {}

	/**
	 * Subtract one arbitrary precision number from another
	 * <p>Subtracts the <code>num2</code> from the <code>num1</code>.</p>
	 * @param string $num1 <p>The left operand, as a string.</p>
	 * @param string $num2 <p>The right operand, as a string.</p>
	 * @param int|null $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <code>0</code> if this has not been set.</p>
	 * @return string <p>The result of the subtraction, as a string.</p>
	 * @link http://php.net/manual/en/function.bcsub.php
	 * @see bcadd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcsub(string $num1, string $num2, $scale = NULL): string {}

}
