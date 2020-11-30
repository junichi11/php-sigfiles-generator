<?php



namespace {

	/**
	 * Add two arbitrary precision numbers
	 * <p>Sums <code>left_operand</code> and <code>right_operand</code>.</p>
	 * @param string $left_operand <p>The left operand, as a string.</p>
	 * @param string $right_operand <p>The right operand, as a string.</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>The sum of the two operands, as a string.</p>
	 * @link http://php.net/manual/en/function.bcadd.php
	 * @see bcsub()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcadd(string $left_operand, string $right_operand, int $scale = 0): string {}

	/**
	 * Compare two arbitrary precision numbers
	 * <p>Compares the <code>left_operand</code> to the <code>right_operand</code> and returns the result as an integer.</p>
	 * @param string $left_operand <p>The left operand, as a string.</p>
	 * @param string $right_operand <p>The right operand, as a string.</p>
	 * @param int $scale <p>The optional <code>scale</code> parameter is used to set the number of digits after the decimal place which will be used in the comparison.</p>
	 * @return int <p>Returns 0 if the two operands are equal, 1 if the <code>left_operand</code> is larger than the <code>right_operand</code>, -1 otherwise.</p>
	 * @link http://php.net/manual/en/function.bccomp.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bccomp(string $left_operand, string $right_operand, int $scale = 0): int {}

	/**
	 * Divide two arbitrary precision numbers
	 * <p>Divides the <code>dividend</code> by the <code>divisor</code>.</p>
	 * @param string $dividend <p>The dividend, as a string.</p>
	 * @param string $divisor <p>The divisor, as a string.</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>Returns the result of the division as a string, or <b><code>NULL</code></b> if <code>divisor</code> is <i>0</i>.</p>
	 * @link http://php.net/manual/en/function.bcdiv.php
	 * @see bcmul()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcdiv(string $dividend, string $divisor, int $scale = 0): string {}

	/**
	 * Get modulus of an arbitrary precision number
	 * <p>Get the remainder of dividing <code>dividend</code> by <code>divisor</code>. Unless <code>divisor</code> is zero, the result has the same sign as <code>dividend</code>.</p>
	 * @param string $dividend <p>The dividend, as a string.</p>
	 * @param string $divisor <p>The divisor, as a string.</p>
	 * @param int $scale
	 * @return string <p>Returns the modulus as a string, or <b><code>NULL</code></b> if <code>divisor</code> is <i>0</i>.</p>
	 * @link http://php.net/manual/en/function.bcmod.php
	 * @see bcdiv()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcmod(string $dividend, string $divisor, int $scale = NULL): string {}

	/**
	 * Multiply two arbitrary precision numbers
	 * <p>Multiply the <code>left_operand</code> by the <code>right_operand</code>.</p>
	 * @param string $left_operand <p>The left operand, as a string.</p>
	 * @param string $right_operand <p>The right operand, as a string.</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>Returns the result as a string.</p>
	 * @link http://php.net/manual/en/function.bcmul.php
	 * @see bcdiv()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcmul(string $left_operand, string $right_operand, int $scale = 0): string {}

	/**
	 * Raise an arbitrary precision number to another
	 * <p>Raise <code>base</code> to the power <code>exponent</code>.</p>
	 * @param string $base <p>The base, as a string.</p>
	 * @param string $exponent <p>The exponent, as a string. If the exponent is non-integral, it is truncated. The valid range of the exponent is platform specific, but is at least <i>-2147483648</i> to <i>2147483647</i>.</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>Returns the result as a string.</p>
	 * @link http://php.net/manual/en/function.bcpow.php
	 * @see bcpowmod(), bcsqrt()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcpow(string $base, string $exponent, int $scale = 0): string {}

	/**
	 * Raise an arbitrary precision number to another, reduced by a specified modulus
	 * <p>Use the fast-exponentiation method to raise <code>base</code> to the power <code>exponent</code> with respect to the modulus <code>modulus</code>.</p>
	 * @param string $base <p>The base, as an integral string (i.e. the scale has to be zero).</p>
	 * @param string $exponent <p>The exponent, as an non-negative, integral string (i.e. the scale has to be zero).</p>
	 * @param string $modulus <p>The modulus, as an integral string (i.e. the scale has to be zero).</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>Returns the result as a string, or <b><code>NULL</code></b> if <code>modulus</code> is <i>0</i> or <code>exponent</code> is negative.</p>
	 * @link http://php.net/manual/en/function.bcpowmod.php
	 * @see bcpow(), bcmod()
	 * @since PHP 5, PHP 7
	 */
	function bcpowmod(string $base, string $exponent, string $modulus, int $scale = 0): string {}

	/**
	 * Set default scale parameter for all bc math functions
	 * <p>Sets the default scale parameter for all subsequent calls to bc math functions that do not explicitly specify a scale parameter. If <code>scale</code> is omitted, the function gets the current scale factor.</p>
	 * @param int $scale <p>The scale factor.</p>
	 * @return int <p>Returns the old scale.</p>
	 * @link http://php.net/manual/en/function.bcscale.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcscale(int $scale = NULL): int {}

	/**
	 * Get the square root of an arbitrary precision number
	 * <p>Return the square root of the <code>operand</code>.</p>
	 * @param string $operand <p>The operand, as a string.</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>Returns the square root as a string, or <b><code>NULL</code></b> if <code>operand</code> is negative.</p>
	 * @link http://php.net/manual/en/function.bcsqrt.php
	 * @see bcpow()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcsqrt(string $operand, int $scale = 0): string {}

	/**
	 * Subtract one arbitrary precision number from another
	 * <p>Subtracts the <code>right_operand</code> from the <code>left_operand</code>.</p>
	 * @param string $left_operand <p>The left operand, as a string.</p>
	 * @param string $right_operand <p>The right operand, as a string.</p>
	 * @param int $scale <p>This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the <code>bcscale()</code> function, or fallback to <i>0</i> if this has not been set.</p>
	 * @return string <p>The result of the subtraction, as a string.</p>
	 * @link http://php.net/manual/en/function.bcsub.php
	 * @see bcadd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bcsub(string $left_operand, string $right_operand, int $scale = 0): string {}

}
