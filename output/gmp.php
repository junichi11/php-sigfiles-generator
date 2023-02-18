<?php



namespace {

	/**
	 * <p>A GMP number. These objects support overloaded arithmetic, bitwise and comparison operators.</p>
	 * <p><b>Note</b>:</p>
	 * <p>No object-oriented interface is provided to manipulate <b>GMP</b> objects. Please use the procedural GMP API.</p>
	 * @link https://php.net/manual/en/class.gmp.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	class GMP {

		/**
		 * Serializes the GMP object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>No value is returned.</p>
		 * @link https://php.net/manual/en/gmp.serialize.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function __serialize(): array {}

		/**
		 * Deserializes the data parameter into a GMP object
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $data <p>The value being deserialized.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/gmp.unserialize.php
		 * @since PHP 8 >= 8.1.0
		 */
		public function __unserialize(array $data): void {}
	}

	/**
	 * Absolute value
	 * <p>Get the absolute value of a number.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>Returns the absolute value of <code>num</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-abs.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_abs(\GMP|int|string $num): \GMP {}

	/**
	 * Add numbers
	 * <p>Add two numbers.</p>
	 * @param \GMP|int|string $num1 <p>The first summand (augent).</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The second summand (addend).</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A GMP number representing the sum of the arguments.</p>
	 * @link https://php.net/manual/en/function.gmp-add.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_add(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Bitwise AND
	 * <p>Calculates bitwise AND of two GMP numbers.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A GMP number representing the bitwise <code>AND</code> comparison.</p>
	 * @link https://php.net/manual/en/function.gmp-and.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_and(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Calculates binomial coefficient
	 * <p>Calculates the binomial coefficient C(n, k).</p>
	 * @param \GMP|int|string $n <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $k
	 * @return GMP <p>Returns the binomial coefficient C(n, k).</p>
	 * @link https://php.net/manual/en/function.gmp-binomial.php
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function gmp_binomial(\GMP|int|string $n, int $k): \GMP {}

	/**
	 * Clear bit
	 * <p>Clears (sets to 0) bit <code>index</code> in <code>num</code>. The index starts at 0.</p>
	 * @param \GMP $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $index <p>The index of the bit to clear. Index 0 represents the least significant bit.</p>
	 * @return void <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-clrbit.php
	 * @see gmp_setbit(), gmp_testbit()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_clrbit(\GMP $num, int $index): void {}

	/**
	 * Compare numbers
	 * <p>Compares two numbers.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return int <p>Returns a positive value if <code>a &gt; b</code>, zero if <code>a = b</code> and a negative value if <code>a &lt; b</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-cmp.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_cmp(\GMP|int|string $num1, \GMP|int|string $num2): int {}

	/**
	 * Calculates one's complement
	 * <p>Returns the one's complement of <code>num</code>.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>Returns the one's complement of <code>num</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-com.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_com(\GMP|int|string $num): \GMP {}

	/**
	 * Alias of gmp_div_q()
	 * <p>This function is an alias of: <code>gmp_div_q()</code>.</p>
	 * @param \GMP|int|string $num1 <p>The number being divided.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The number that <code>num1</code> is being divided by.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $rounding_mode <p>The result rounding is defined by the <code>rounding_mode</code>, which can have the following values:</p><ul> <li>  <b><code>GMP_ROUND_ZERO</code></b>: The result is truncated towards 0.  </li> <li>  <b><code>GMP_ROUND_PLUSINF</code></b>: The result is rounded towards <code>+infinity</code>.  </li> <li>  <b><code>GMP_ROUND_MINUSINF</code></b>: The result is rounded towards <code>-infinity</code>.  </li> </ul> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP
	 * @link https://php.net/manual/en/function.gmp-div.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_div(\GMP|int|string $num1, \GMP|int|string $num2, int $rounding_mode = GMP_ROUND_ZERO): \GMP {}

	/**
	 * Divide numbers
	 * <p>Divides <code>num1</code> by <code>num2</code> and returns the integer result.</p>
	 * @param \GMP|int|string $num1 <p>The number being divided.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The number that <code>num1</code> is being divided by.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $rounding_mode <p>The result rounding is defined by the <code>rounding_mode</code>, which can have the following values:</p><ul> <li>  <b><code>GMP_ROUND_ZERO</code></b>: The result is truncated towards 0.  </li> <li>  <b><code>GMP_ROUND_PLUSINF</code></b>: The result is rounded towards <code>+infinity</code>.  </li> <li>  <b><code>GMP_ROUND_MINUSINF</code></b>: The result is rounded towards <code>-infinity</code>.  </li> </ul> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-div-q.php
	 * @see gmp_div_r(), gmp_div_qr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_div_q(\GMP|int|string $num1, \GMP|int|string $num2, int $rounding_mode = GMP_ROUND_ZERO): \GMP {}

	/**
	 * Divide numbers and get quotient and remainder
	 * <p>The function divides <code>num1</code> by <code>num2</code>.</p>
	 * @param \GMP|int|string $num1 <p>The number being divided.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The number that <code>num1</code> is being divided by.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $rounding_mode <p>See the <code>gmp_div_q()</code> function for description of the <code>rounding_mode</code> argument.</p>
	 * @return array <p>Returns an <code>array</code>, with the first element being <code>[n/d]</code> (the integer result of the division) and the second being <code>(n - [n/d] &#42; d)</code> (the remainder of the division).</p>
	 * @link https://php.net/manual/en/function.gmp-div-qr.php
	 * @see gmp_div_q(), gmp_div_r()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_div_qr(\GMP|int|string $num1, \GMP|int|string $num2, int $rounding_mode = GMP_ROUND_ZERO): array {}

	/**
	 * Remainder of the division of numbers
	 * <p>Calculates remainder of the integer division of <code>num1</code> by <code>num2</code>. The remainder has the sign of the <code>num1</code> argument, if not zero.</p>
	 * @param \GMP|int|string $num1 <p>The number being divided.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The number that <code>num1</code> is being divided by.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $rounding_mode <p>See the <code>gmp_div_q()</code> function for description of the <code>rounding_mode</code> argument.</p>
	 * @return GMP <p>The remainder, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-div-r.php
	 * @see gmp_div_q(), gmp_div_qr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_div_r(\GMP|int|string $num1, \GMP|int|string $num2, int $rounding_mode = GMP_ROUND_ZERO): \GMP {}

	/**
	 * Exact division of numbers
	 * <p>Divides <code>num1</code> by <code>num2</code>, using fast "exact division" algorithm. This function produces correct results only when it is known in advance that <code>num2</code> divides <code>num1</code>.</p>
	 * @param \GMP|int|string $num1 <p>The number being divided.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The number that <code>a</code> is being divided by.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-divexact.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_divexact(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Export to a binary string
	 * <p>Export a GMP number to a binary string</p>
	 * @param \GMP|int|string $num <p>The GMP number being exported</p>
	 * @param int $word_size <p>Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.</p>
	 * @param int $flags <p>Default value is <b><code>GMP_MSW_FIRST</code></b> | <b><code>GMP_NATIVE_ENDIAN</code></b>.</p>
	 * @return string <p>Returns a string.</p>
	 * @link https://php.net/manual/en/function.gmp-export.php
	 * @see gmp_import()
	 * @since PHP 5 >= 5.6.1, PHP 7, PHP 8
	 */
	function gmp_export(\GMP|int|string $num, int $word_size = 1, int $flags = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): string {}

	/**
	 * Factorial
	 * <p>Calculates factorial (<code>num!</code>) of <code>num</code>.</p>
	 * @param \GMP|int|string $num <p>The factorial number.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-fact.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_fact(\GMP|int|string $num): \GMP {}

	/**
	 * Calculate GCD
	 * <p>Calculate greatest common divisor of <code>num1</code> and <code>num2</code>. The result is always positive even if either of, or both, input operands are negative.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A positive GMP number that divides into both <code>num1</code> and <code>num2</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-gcd.php
	 * @see gmp_lcm()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_gcd(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Calculate GCD and multipliers
	 * <p>Calculates g, s, and t, such that <code>a&#42;s + b&#42;t = g = gcd(a,b)</code>, where gcd is the greatest common divisor. Returns an array with respective elements g, s and t.</p><p>This function can be used to solve linear Diophantine equations in two variables. These are equations that allow only integer solutions and have the form: <code>a&#42;x + b&#42;y = c</code>. For more information, go to the "Diophantine Equation" page at MathWorld</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return array <p>An <code>array</code> of GMP numbers.</p>
	 * @link https://php.net/manual/en/function.gmp-gcdext.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_gcdext(\GMP|int|string $num1, \GMP|int|string $num2): array {}

	/**
	 * Hamming distance
	 * <p>Returns the hamming distance between <code>num1</code> and <code>num2</code>. Both operands should be non-negative.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p> <p>It should be positive.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p> <p>It should be positive.</p>
	 * @return int <p>The hamming distance between <code>num1</code> and <code>num2</code>, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-hamdist.php
	 * @see gmp_popcount(), gmp_xor()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_hamdist(\GMP|int|string $num1, \GMP|int|string $num2): int {}

	/**
	 * Import from a binary string
	 * <p>Import a GMP number from a binary string</p>
	 * @param string $data <p>The binary string being imported</p>
	 * @param int $word_size <p>Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.</p>
	 * @param int $flags <p>Default value is <b><code>GMP_MSW_FIRST</code></b> | <b><code>GMP_NATIVE_ENDIAN</code></b>.</p>
	 * @return GMP <p>Returns a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-import.php
	 * @see gmp_export()
	 * @since PHP 5 >= 5.6.1, PHP 7, PHP 8
	 */
	function gmp_import(string $data, int $word_size = 1, int $flags = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): \GMP {}

	/**
	 * Create GMP number
	 * <p>Creates a GMP number from an integer or string.</p>
	 * @param int|string $num <p>An integer or a string. The string representation can be decimal, hexadecimal or octal.</p>
	 * @param int $base <p>The base.</p> <p>The base may vary from 2 to 62. If base is 0 (default value), the actual base is determined from the leading characters: if the first two characters are <code>0x</code> or <code>0X</code>, hexadecimal is assumed, if the first two characters are <code>0b</code> or <code>0B</code>, binary is assumed, otherwise if the first character is <code>0</code>, octal is assumed, otherwise decimal is assumed. For bases up to 36, case is ignored; upper-case and lower-case letters have the same value. For bases 37 to 62, upper-case letter represent the usual 10 to 35 while lower-case letter represent 36 to 61.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-init.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_init(int|string $num, int $base = 0): \GMP {}

	/**
	 * Convert GMP number to integer
	 * <p>This function converts GMP number into native PHP <code>int</code>s.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return int <p>The <code>int</code> value of <code>num</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-intval.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_intval(\GMP|int|string $num): int {}

	/**
	 * Inverse by modulo
	 * <p>Computes the inverse of <code>num1</code> modulo <code>num2</code>.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP|false <p>A GMP number on success or <b><code>false</code></b> if an inverse does not exist.</p>
	 * @link https://php.net/manual/en/function.gmp-invert.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_invert(\GMP|int|string $num1, \GMP|int|string $num2): \GMP|false {}

	/**
	 * Jacobi symbol
	 * <p>Computes Jacobi symbol of <code>num1</code> and <code>num2</code>. <code>num2</code> should be odd and must be positive.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p> <p>Should be odd and must be positive.</p>
	 * @return int <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-jacobi.php
	 * @see gmp_kronecker(), gmp_legendre()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_jacobi(\GMP|int|string $num1, \GMP|int|string $num2): int {}

	/**
	 * Kronecker symbol
	 * <p>This function computes the Kronecker symbol of <code>num1</code> and <code>num2</code>.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return int <p>Returns the Kronecker symbol of <code>num1</code> and <code>num2</code></p>
	 * @link https://php.net/manual/en/function.gmp-kronecker.php
	 * @see gmp_jacobi(), gmp_legendre()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function gmp_kronecker(\GMP|int|string $num1, \GMP|int|string $num2): int {}

	/**
	 * Calculate LCM
	 * <p>This function computes the least common multiple (lcm) of <code>num1</code> and <code>num2</code>.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-lcm.php
	 * @see gmp_gcd()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function gmp_lcm(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Legendre symbol
	 * <p>Compute the  Legendre symbol of <code>num1</code> and <code>num2</code>. <code>num2</code> should be odd and must be positive.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p> <p>Should be odd and must be positive.</p>
	 * @return int <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-legendre.php
	 * @see gmp_jacobi(), gmp_kronecker()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_legendre(\GMP|int|string $num1, \GMP|int|string $num2): int {}

	/**
	 * Modulo operation
	 * <p>Calculates <code>num1</code> modulo <code>num2</code>. The result is always non-negative, the sign of <code>num2</code> is ignored.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The modulo that is being evaluated.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-mod.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_mod(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Multiply numbers
	 * <p>Multiplies <code>num1</code> by <code>num2</code> and returns the result.</p>
	 * @param \GMP|int|string $num1 <p>A number that will be multiplied by <code>num2</code>.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A number that will be multiplied by <code>num1</code>.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-mul.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_mul(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Negate number
	 * <p>Returns the negative value of a number.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>Returns -<code>num</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-neg.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_neg(\GMP|int|string $num): \GMP {}

	/**
	 * Find next prime number
	 * <p>Find next prime number</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>Return the next prime number greater than <code>num</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-nextprime.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function gmp_nextprime(\GMP|int|string $num): \GMP {}

	/**
	 * Bitwise OR
	 * <p>Calculates bitwise inclusive OR of two GMP numbers.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-or.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_or(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Perfect power check
	 * <p>Checks whether <code>num</code> is a perfect power.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>num</code> is a perfect power, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.gmp-perfect-power.php
	 * @see gmp_perfect_square()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function gmp_perfect_power(\GMP|int|string $num): bool {}

	/**
	 * Perfect square check
	 * <p>Check if a number is a perfect square.</p>
	 * @param \GMP|int|string $num <p>The number being checked as a perfect square.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>num</code> is a perfect square, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.gmp-perfect-square.php
	 * @see gmp_perfect_power(), gmp_sqrt(), gmp_sqrtrem()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_perfect_square(\GMP|int|string $num): bool {}

	/**
	 * Population count
	 * <p>Get the population count.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return int <p>The population count of <code>num</code>, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-popcount.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_popcount(\GMP|int|string $num): int {}

	/**
	 * Raise number into power
	 * <p>Raise <code>num</code> into power <code>exponent</code>.</p>
	 * @param \GMP|int|string $num <p>The base number.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $exponent <p>The positive power to raise the <code>num</code>.</p>
	 * @return GMP <p>The new (raised) number, as a GMP number. The case of <code>0^0</code> yields 1.</p>
	 * @link https://php.net/manual/en/function.gmp-pow.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_pow(\GMP|int|string $num, int $exponent): \GMP {}

	/**
	 * Raise number into power with modulo
	 * <p>Calculate (<code>num</code> raised into power <code>exponent</code>) modulo <code>modulus</code>. If <code>exponent</code> is negative, result is undefined.</p>
	 * @param \GMP|int|string $num <p>The base number.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $exponent <p>The positive power to raise the <code>num</code>.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $modulus <p>The modulo.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>The new (raised) number, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-powm.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_powm(\GMP|int|string $num, \GMP|int|string $exponent, \GMP|int|string $modulus): \GMP {}

	/**
	 * Check if number is "probably prime"
	 * <p>The function uses Miller-Rabin's probabilistic test to check if a number is a prime.</p>
	 * @param \GMP|int|string $num <p>The number being checked as a prime.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $repetitions <p>Reasonable values of <code>repetitions</code> vary from 5 to 10 (default being 10); a higher value lowers the probability for a non-prime to pass as a "probable" prime.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return int <p>If this function returns 0, <code>num</code> is definitely not prime. If it returns 1, then <code>num</code> is "probably" prime. If it returns 2, then <code>num</code> is surely prime.</p>
	 * @link https://php.net/manual/en/function.gmp-prob-prime.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_prob_prime(\GMP|int|string $num, int $repetitions = 10): int {}

	/**
	 * Random number
	 * <p>Generate a random number. The number will be between 0 and (2 &#42;&#42; n) - 1, where n is the number of bits per limb multiplied by <code>limiter</code>. If <code>limiter</code> is negative, negative numbers are generated.</p><p>A limb is an internal GMP mechanism. The number of bits in a limb is not static, and can vary from system to system. Generally, the number of bits in a limb is either 32 or 64, but this is not guaranteed.</p>
	 * @param int $limiter <p>The limiter.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A random GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-random.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_random(int $limiter = 20): \GMP {}

	/**
	 * Random number
	 * <p>Generate a random number. The number will be between 0 and (2 &#42;&#42; <code>bits</code>) - 1.</p><p><code>bits</code> must greater than 0, and the maximum value is restricted by available memory.</p>
	 * @param int $bits <p>The number of bits.</p>
	 * @return GMP <p>A random GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-random-bits.php
	 * @since PHP 5 >= 5.6.3, PHP 7, PHP 8
	 */
	function gmp_random_bits(int $bits): \GMP {}

	/**
	 * Random number
	 * <p>Generate a random number. The number will be between <code>min</code> and <code>max</code>.</p><p><code>min</code> and <code>max</code> can both be negative but <code>min</code> must always be less than <code>max</code>.</p>
	 * @param \GMP|int|string $min <p>A GMP number representing the lower bound for the random number</p>
	 * @param \GMP|int|string $max <p>A GMP number representing the upper bound for the random number</p>
	 * @return GMP <p>A random GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-random-range.php
	 * @since PHP 5 >= 5.6.3, PHP 7, PHP 8
	 */
	function gmp_random_range(\GMP|int|string $min, \GMP|int|string $max): \GMP {}

	/**
	 * Sets the RNG seed
	 * @param \GMP|int|string $seed <p>The seed to be set for the <code>gmp_random()</code>, <code>gmp_random_bits()</code>, and <code>gmp_random_range()</code> functions.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return void <p>Returns <b><code>null</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gmp-random-seed.php
	 * @see gmp_init(), gmp_random(), gmp_random_bits(), gmp_random_range()
	 * @since PHP 7, PHP 8
	 */
	function gmp_random_seed(\GMP|int|string $seed): void {}

	/**
	 * Take the integer part of nth root
	 * <p>Takes the <code>nth</code> root of <code>num</code> and returns the integer component of the result.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $nth <p>The positive root to take of <code>num</code>.</p>
	 * @return GMP <p>The integer component of the resultant root, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-root.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function gmp_root(\GMP|int|string $num, int $nth): \GMP {}

	/**
	 * Take the integer part and remainder of nth root
	 * <p>Takes the <code>nth</code> root of <code>num</code> and returns the integer component and remainder of the result.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $nth <p>The positive root to take of <code>num</code>.</p>
	 * @return array <p>A two element array, where the first element is the integer component of the root, and the second element is the remainder, both represented as GMP numbers.</p>
	 * @link https://php.net/manual/en/function.gmp-rootrem.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
	 */
	function gmp_rootrem(\GMP|int|string $num, int $nth): array {}

	/**
	 * Scan for 0
	 * <p>Scans <code>num1</code>, starting with bit <code>start</code>, towards more significant bits, until the first clear bit is found.</p>
	 * @param \GMP|int|string $num1 <p>The number to scan.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $start <p>The starting bit.</p>
	 * @return int <p>Returns the index of the found bit, as an <code>int</code>. The index starts from 0.</p>
	 * @link https://php.net/manual/en/function.gmp-scan0.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_scan0(\GMP|int|string $num1, int $start): int {}

	/**
	 * Scan for 1
	 * <p>Scans <code>num1</code>, starting with bit <code>start</code>, towards more significant bits, until the first set bit is found.</p>
	 * @param \GMP|int|string $num1 <p>The number to scan.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $start <p>The starting bit.</p>
	 * @return int <p>Returns the index of the found bit, as an <code>int</code>. If no set bit is found, -1 is returned.</p>
	 * @link https://php.net/manual/en/function.gmp-scan1.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_scan1(\GMP|int|string $num1, int $start): int {}

	/**
	 * Set bit
	 * <p>Sets bit <code>index</code> in <code>num</code>.</p>
	 * @param \GMP $num <p>The value to modify.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $index <p>The index of the bit to set. Index 0 represents the least significant bit.</p>
	 * @param bool $value <p>True to set the bit (set it to 1/on); false to clear the bit (set it to 0/off).</p>
	 * @return void <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-setbit.php
	 * @see gmp_clrbit(), gmp_testbit()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_setbit(\GMP $num, int $index, bool $value = true): void {}

	/**
	 * Sign of number
	 * <p>Checks the sign of a number.</p>
	 * @param \GMP|int|string $num <p>Either a <code>GMP</code> object, or a numeric string provided that it is possible to convert the latter to an <code>int</code>.</p>
	 * @return int <p>Returns 1 if <code>num</code> is positive, -1 if <code>num</code> is negative, and 0 if <code>num</code> is zero.</p>
	 * @link https://php.net/manual/en/function.gmp-sign.php
	 * @see gmp_abs(), abs()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_sign(\GMP|int|string $num): int {}

	/**
	 * Calculate square root
	 * <p>Calculates square root of <code>num</code>.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>The integer portion of the square root, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-sqrt.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_sqrt(\GMP|int|string $num): \GMP {}

	/**
	 * Square root with remainder
	 * <p>Calculate the square root of a number, with remainder.</p>
	 * @param \GMP|int|string $num <p>The number being square rooted.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return array <p>Returns array where first element is the integer square root of <code>num</code> and the second is the remainder (i.e., the difference between <code>num</code> and the first element squared).</p>
	 * @link https://php.net/manual/en/function.gmp-sqrtrem.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_sqrtrem(\GMP|int|string $num): array {}

	/**
	 * Convert GMP number to string
	 * <p>Convert GMP number to string representation in base <code>base</code>. The default base is 10.</p>
	 * @param \GMP|int|string $num <p>The GMP number that will be converted to a string.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $base <p>The base of the returned number. The default base is 10. Allowed values for the base are from 2 to 62 and -2 to -36.</p>
	 * @return string <p>The number, as a <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-strval.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_strval(\GMP|int|string $num, int $base = 10): string {}

	/**
	 * Subtract numbers
	 * <p>Subtracts <code>num2</code> from <code>num1</code> and returns the result.</p>
	 * @param \GMP|int|string $num1 <p>The number being subtracted from.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>The number subtracted from <code>num1</code>.</p> <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-sub.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_sub(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	/**
	 * Tests if a bit is set
	 * <p>Tests if the specified bit is set.</p>
	 * @param \GMP|int|string $num <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param int $index <p>The bit to test</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the bit is set in <code>num</code>, otherwise <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.gmp-testbit.php
	 * @see gmp_setbit(), gmp_clrbit()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function gmp_testbit(\GMP|int|string $num, int $index): bool {}

	/**
	 * Bitwise XOR
	 * <p>Calculates bitwise exclusive OR (XOR) of two GMP numbers.</p>
	 * @param \GMP|int|string $num1 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @param \GMP|int|string $num2 <p>A <code>GMP</code> object, an <code>int</code> or a numeric <code>string</code>.</p>
	 * @return GMP <p>A <code>GMP</code> object.</p>
	 * @link https://php.net/manual/en/function.gmp-xor.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function gmp_xor(\GMP|int|string $num1, \GMP|int|string $num2): \GMP {}

	define('GMP_BIG_ENDIAN', null);

	define('GMP_LITTLE_ENDIAN', null);

	define('GMP_LSW_FIRST', null);

	define('GMP_MSW_FIRST', null);

	define('GMP_NATIVE_ENDIAN', null);

	define('GMP_ROUND_MINUSINF', null);

	define('GMP_ROUND_PLUSINF', null);

	define('GMP_ROUND_ZERO', null);

	/**
	 * The GMP library version
	 */
	define('GMP_VERSION', null);

}
