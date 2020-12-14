<?php



namespace {

	/**
	 * <p>A GMP number. These objects support overloaded arithmetic, bitwise and comparison operators.</p>
	 * <p><b>Note</b>:</p>
	 * <p>No object oriented interface is provided to manipulate <b>GMP</b> objects. Please use the procedural GMP API.</p>
	 * @link https://php.net/manual/en/class.gmp.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	class GMP implements \Serializable {
	}

	/**
	 * Absolute value
	 * <p>Get the absolute value of a number.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>Returns the absolute value of <code>a</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-abs.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_abs(\GMP $a): \GMP {}

	/**
	 * Add numbers
	 * <p>Add two numbers.</p>
	 * @param \GMP $a <p>The first summand (augent).</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>The second summand (addend).</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP number representing the sum of the arguments.</p>
	 * @link https://php.net/manual/en/function.gmp-add.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_add(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Bitwise AND
	 * <p>Calculates bitwise AND of two GMP numbers.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP number representing the bitwise <code>AND</code> comparison.</p>
	 * @link https://php.net/manual/en/function.gmp-and.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_and(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Calculates binomial coefficient
	 * <p>Calculates the binomial coefficient C(n, k).</p>
	 * @param mixed $n <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $k
	 * @return GMP|false <p>Returns the binomial coefficient C(n, k), or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gmp-binomial.php
	 * @since PHP 7 >= 7.3.0
	 */
	function gmp_binomial(mixed $n, int $k): \GMP|false {}

	/**
	 * Clear bit
	 * <p>Clears (sets to 0) bit <code>index</code> in <code>a</code>. The index starts at 0.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $index <p>The index of the bit to clear. Index 0 represents the least significant bit.</p>
	 * @return void <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-clrbit.php
	 * @see gmp_setbit(), gmp_testbit()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_clrbit(\GMP $a, int $index): void {}

	/**
	 * Compare numbers
	 * <p>Compares two numbers.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return int <p>Returns a positive value if <code>a &gt; b</code>, zero if <code>a = b</code> and a negative value if <code>a &lt; b</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-cmp.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_cmp(\GMP $a, \GMP $b): int {}

	/**
	 * Calculates one's complement
	 * <p>Returns the one's complement of <code>a</code>.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>Returns the one's complement of <code>a</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-com.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_com(\GMP $a): \GMP {}

	/**
	 * Alias of gmp_div_q()
	 * <p>This function is an alias of: <code>gmp_div_q()</code>.</p>
	 * @param \GMP $a <p>The number being divided.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>The number that <code>a</code> is being divided by.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $round <p>The result rounding is defined by the <code>round</code>, which can have the following values:</p><ul> <li>  <b><code>GMP_ROUND_ZERO</code></b>: The result is truncated towards 0.  </li> <li>  <b><code>GMP_ROUND_PLUSINF</code></b>: The result is rounded towards <code>+infinity</code>.  </li> <li>  <b><code>GMP_ROUND_MINUSINF</code></b>: The result is rounded towards <code>-infinity</code>.  </li> </ul> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP
	 * @link https://php.net/manual/en/function.gmp-div.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_div(\GMP $a, \GMP $b, int $round = GMP_ROUND_ZERO): \GMP {}

	/**
	 * Divide numbers
	 * <p>Divides <code>a</code> by <code>b</code> and returns the integer result.</p>
	 * @param \GMP $a <p>The number being divided.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>The number that <code>a</code> is being divided by.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $round <p>The result rounding is defined by the <code>round</code>, which can have the following values:</p><ul> <li>  <b><code>GMP_ROUND_ZERO</code></b>: The result is truncated towards 0.  </li> <li>  <b><code>GMP_ROUND_PLUSINF</code></b>: The result is rounded towards <code>+infinity</code>.  </li> <li>  <b><code>GMP_ROUND_MINUSINF</code></b>: The result is rounded towards <code>-infinity</code>.  </li> </ul> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-div-q.php
	 * @see gmp_div_r(), gmp_div_qr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_div_q(\GMP $a, \GMP $b, int $round = GMP_ROUND_ZERO): \GMP {}

	/**
	 * Divide numbers and get quotient and remainder
	 * <p>The function divides <code>n</code> by <code>d</code>.</p>
	 * @param \GMP $n <p>The number being divided.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $d <p>The number that <code>n</code> is being divided by.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $round <p>See the <code>gmp_div_q()</code> function for description of the <code>round</code> argument.</p>
	 * @return array <p>Returns an <code>array</code>, with the first element being <code>[n/d]</code> (the integer result of the division) and the second being <code>(n - [n/d] &#42; d)</code> (the remainder of the division).</p>
	 * @link https://php.net/manual/en/function.gmp-div-qr.php
	 * @see gmp_div_q(), gmp_div_r()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_div_qr(\GMP $n, \GMP $d, int $round = GMP_ROUND_ZERO): array {}

	/**
	 * Remainder of the division of numbers
	 * <p>Calculates remainder of the integer division of <code>n</code> by <code>d</code>. The remainder has the sign of the <code>n</code> argument, if not zero.</p>
	 * @param \GMP $n <p>The number being divided.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $d <p>The number that <code>n</code> is being divided by.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $round <p>See the <code>gmp_div_q()</code> function for description of the <code>round</code> argument.</p>
	 * @return GMP <p>The remainder, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-div-r.php
	 * @see gmp_div_q(), gmp_div_qr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_div_r(\GMP $n, \GMP $d, int $round = GMP_ROUND_ZERO): \GMP {}

	/**
	 * Exact division of numbers
	 * <p>Divides <code>n</code> by <code>d</code>, using fast "exact division" algorithm. This function produces correct results only when it is known in advance that <code>d</code> divides <code>n</code>.</p>
	 * @param \GMP $n <p>The number being divided.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $d <p>The number that <code>a</code> is being divided by.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-divexact.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_divexact(\GMP $n, \GMP $d): \GMP {}

	/**
	 * Export to a binary string
	 * <p>Export a GMP number to a binary string</p>
	 * @param \GMP $gmpnumber <p>The GMP number being exported</p>
	 * @param int $word_size <p>Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.</p>
	 * @param int $options <p>Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.</p>
	 * @return string|false <p>Returns a string or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gmp-export.php
	 * @see gmp_import()
	 * @since PHP 5 >= 5.6.1, PHP 7
	 */
	function gmp_export(\GMP $gmpnumber, int $word_size = 1, int $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): string|false {}

	/**
	 * Factorial
	 * <p>Calculates factorial (<code>a!</code>) of <code>a</code>.</p>
	 * @param mixed $a <p>The factorial number.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-fact.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_fact(mixed $a): \GMP {}

	/**
	 * Calculate GCD
	 * <p>Calculate greatest common divisor of <code>a</code> and <code>b</code>. The result is always positive even if either of, or both, input operands are negative.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A positive GMP number that divides into both <code>a</code> and <code>b</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-gcd.php
	 * @see gmp_lcm()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_gcd(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Calculate GCD and multipliers
	 * <p>Calculates g, s, and t, such that <code>a&#42;s + b&#42;t = g = gcd(a,b)</code>, where gcd is the greatest common divisor. Returns an array with respective elements g, s and t.</p><p>This function can be used to solve linear Diophantine equations in two variables. These are equations that allow only integer solutions and have the form: <code>a&#42;x + b&#42;y = c</code>. For more information, go to the "Diophantine Equation" page at MathWorld</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return array <p>An <code>array</code> of GMP numbers.</p>
	 * @link https://php.net/manual/en/function.gmp-gcdext.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_gcdext(\GMP $a, \GMP $b): array {}

	/**
	 * Hamming distance
	 * <p>Returns the hamming distance between <code>a</code> and <code>b</code>. Both operands should be non-negative.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p> <p>It should be positive.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p> <p>It should be positive.</p>
	 * @return int <p>The hamming distance between <code>a</code> and <code>b</code>, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-hamdist.php
	 * @see gmp_popcount(), gmp_xor()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_hamdist(\GMP $a, \GMP $b): int {}

	/**
	 * Import from a binary string
	 * <p>Import a GMP number from a binary string</p>
	 * @param string $data <p>The binary string being imported</p>
	 * @param int $word_size <p>Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.</p>
	 * @param int $options <p>Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.</p>
	 * @return GMP|false <p>Returns a GMP number or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gmp-import.php
	 * @see gmp_export()
	 * @since PHP 5 >= 5.6.1, PHP 7
	 */
	function gmp_import(string $data, int $word_size = 1, int $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): \GMP|false {}

	/**
	 * Create GMP number
	 * <p>Creates a GMP number from an integer or string.</p>
	 * @param mixed $number <p>An integer or a string. The string representation can be decimal, hexadecimal or octal.</p>
	 * @param int $base <p>The base.</p> <p>The base may vary from 2 to 36. If base is 0 (default value), the actual base is determined from the leading characters: if the first two characters are <code>0x</code> or <code>0X</code>, hexadecimal is assumed, otherwise if the first character is "0", octal is assumed, otherwise decimal is assumed.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-init.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_init(mixed $number, int $base = 0): \GMP {}

	/**
	 * Convert GMP number to integer
	 * <p>This function converts GMP number into native PHP <code>int</code>s.</p>
	 * @param \GMP $gmpnumber <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return int <p>The <code>int</code> value of <code>gmpnumber</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-intval.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_intval(\GMP $gmpnumber): int {}

	/**
	 * Inverse by modulo
	 * <p>Computes the inverse of <code>a</code> modulo <code>b</code>.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP number on success or <b><code>FALSE</code></b> if an inverse does not exist.</p>
	 * @link https://php.net/manual/en/function.gmp-invert.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_invert(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Jacobi symbol
	 * <p>Computes Jacobi symbol of <code>a</code> and <code>p</code>. <code>p</code> should be odd and must be positive.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $p <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p> <p>Should be odd and must be positive.</p>
	 * @return int <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-jacobi.php
	 * @see gmp_kronecker(), gmp_legendre()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_jacobi(\GMP $a, \GMP $p): int {}

	/**
	 * Kronecker symbol
	 * <p>This function computes the Kronecker symbol of <code>a</code> and <code>b</code>.</p>
	 * @param mixed $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param mixed $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return int <p>Returns the Kronecker symbol of <code>a</code> and <code>b</code></p>
	 * @link https://php.net/manual/en/function.gmp-kronecker.php
	 * @see gmp_jacobi(), gmp_legendre()
	 * @since PHP 7 >= 7.3.0
	 */
	function gmp_kronecker(mixed $a, mixed $b): int {}

	/**
	 * Calculate LCM
	 * <p>This function computes the least common multiple (lcm) of <code>a</code> and <code>b</code>.</p>
	 * @param mixed $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param mixed $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-lcm.php
	 * @see gmp_gcd()
	 * @since PHP 7 >= 7.3.0
	 */
	function gmp_lcm(mixed $a, mixed $b): \GMP {}

	/**
	 * Legendre symbol
	 * <p>Compute the  Legendre symbol of <code>a</code> and <code>p</code>. <code>p</code> should be odd and must be positive.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $p <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p> <p>Should be odd and must be positive.</p>
	 * @return int <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-legendre.php
	 * @see gmp_jacobi(), gmp_kronecker()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_legendre(\GMP $a, \GMP $p): int {}

	/**
	 * Modulo operation
	 * <p>Calculates <code>n</code> modulo <code>d</code>. The result is always non-negative, the sign of <code>d</code> is ignored.</p>
	 * @param \GMP $n <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $d <p>The modulo that is being evaluated.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-mod.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_mod(\GMP $n, \GMP $d): \GMP {}

	/**
	 * Multiply numbers
	 * <p>Multiplies <code>a</code> by <code>b</code> and returns the result.</p>
	 * @param \GMP $a <p>A number that will be multiplied by <code>b</code>.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>A number that will be multiplied by <code>a</code>.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-mul.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_mul(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Negate number
	 * <p>Returns the negative value of a number.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>Returns -<code>a</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-neg.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_neg(\GMP $a): \GMP {}

	/**
	 * Find next prime number
	 * <p>Find next prime number</p>
	 * @param int $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>Return the next prime number greater than <code>a</code>, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-nextprime.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function gmp_nextprime(int $a): \GMP {}

	/**
	 * Bitwise OR
	 * <p>Calculates bitwise inclusive OR of two GMP numbers.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-or.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_or(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Perfect power check
	 * <p>Checks whether <code>a</code> is a perfect power.</p>
	 * @param mixed $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>a</code> is a perfect power, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.gmp-perfect-power.php
	 * @see gmp_perfect_square()
	 * @since PHP 7 >= 7.3.0
	 */
	function gmp_perfect_power(mixed $a): bool {}

	/**
	 * Perfect square check
	 * <p>Check if a number is a perfect square.</p>
	 * @param \GMP $a <p>The number being checked as a perfect square.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>a</code> is a perfect square, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.gmp-perfect-square.php
	 * @see gmp_perfect_power(), gmp_sqrt(), gmp_sqrtrem()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_perfect_square(\GMP $a): bool {}

	/**
	 * Population count
	 * <p>Get the population count.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return int <p>The population count of <code>a</code>, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-popcount.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_popcount(\GMP $a): int {}

	/**
	 * Raise number into power
	 * <p>Raise <code>base</code> into power <code>exp</code>.</p>
	 * @param \GMP $base <p>The base number.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $exp <p>The positive power to raise the <code>base</code>.</p>
	 * @return GMP <p>The new (raised) number, as a GMP number. The case of <code>0^0</code> yields 1.</p>
	 * @link https://php.net/manual/en/function.gmp-pow.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_pow(\GMP $base, int $exp): \GMP {}

	/**
	 * Raise number into power with modulo
	 * <p>Calculate (<code>base</code> raised into power <code>exp</code>) modulo <code>mod</code>. If <code>exp</code> is negative, result is undefined.</p>
	 * @param \GMP $base <p>The base number.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $exp <p>The positive power to raise the <code>base</code>.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $mod <p>The modulo.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>The new (raised) number, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-powm.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_powm(\GMP $base, \GMP $exp, \GMP $mod): \GMP {}

	/**
	 * Check if number is "probably prime"
	 * <p>The function uses Miller-Rabin's probabilistic test to check if a number is a prime.</p>
	 * @param \GMP $a <p>The number being checked as a prime.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $reps <p>Reasonable values of <code>reps</code> vary from 5 to 10 (default being 10); a higher value lowers the probability for a non-prime to pass as a "probable" prime.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return int <p>If this function returns 0, <code>a</code> is definitely not prime. If it returns 1, then <code>a</code> is "probably" prime. If it returns 2, then <code>a</code> is surely prime.</p>
	 * @link https://php.net/manual/en/function.gmp-prob-prime.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_prob_prime(\GMP $a, int $reps = 10): int {}

	/**
	 * Random number
	 * <p>Generate a random number. The number will be between 0 and (2 &#42;&#42; n) - 1, where n is the number of bits per limb multiplied by <code>limiter</code>. If <code>limiter</code> is negative, negative numbers are generated.</p><p>A limb is an internal GMP mechanism. The number of bits in a limb is not static, and can vary from system to system. Generally, the number of bits in a limb is either 32 or 64, but this is not guaranteed.</p>
	 * @param int $limiter <p>The limiter.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
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
	 * @since PHP 5 >= 5.6.3, PHP 7
	 */
	function gmp_random_bits(int $bits): \GMP {}

	/**
	 * Random number
	 * <p>Generate a random number. The number will be between <code>min</code> and <code>max</code>.</p><p><code>min</code> and <code>max</code> can both be negative but <code>min</code> must always be less than <code>max</code>.</p>
	 * @param \GMP $min <p>A GMP number representing the lower bound for the random number</p>
	 * @param \GMP $max <p>A GMP number representing the upper bound for the random number</p>
	 * @return GMP <p>A random GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-random-range.php
	 * @since PHP 5 >= 5.6.3, PHP 7
	 */
	function gmp_random_range(\GMP $min, \GMP $max): \GMP {}

	/**
	 * Sets the RNG seed
	 * @param mixed $seed <p>The seed to be set for the <code>gmp_random()</code>, <code>gmp_random_bits()</code>, and <code>gmp_random_range()</code> functions.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return void <p>Returns <b><code>NULL</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gmp-random-seed.php
	 * @see gmp_init(), gmp_random(), gmp_random_bits(), gmp_random_range()
	 * @since PHP 7
	 */
	function gmp_random_seed(mixed $seed): void {}

	/**
	 * Take the integer part of nth root
	 * <p>Takes the <code>nth</code> root of <code>a</code> and returns the integer component of the result.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $nth <p>The positive root to take of <code>a</code>.</p>
	 * @return GMP <p>The integer component of the resultant root, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-root.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function gmp_root(\GMP $a, int $nth): \GMP {}

	/**
	 * Take the integer part and remainder of nth root
	 * <p>Takes the <code>nth</code> root of <code>a</code> and returns the integer component and remainder of the result.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $nth <p>The positive root to take of <code>a</code>.</p>
	 * @return array <p>A two element array, where the first element is the integer component of the root, and the second element is the remainder, both represented as GMP numbers.</p>
	 * @link https://php.net/manual/en/function.gmp-rootrem.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function gmp_rootrem(\GMP $a, int $nth): array {}

	/**
	 * Scan for 0
	 * <p>Scans <code>a</code>, starting with bit <code>start</code>, towards more significant bits, until the first clear bit is found.</p>
	 * @param \GMP $a <p>The number to scan.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $start <p>The starting bit.</p>
	 * @return int <p>Returns the index of the found bit, as an <code>int</code>. The index starts from 0.</p>
	 * @link https://php.net/manual/en/function.gmp-scan0.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_scan0(\GMP $a, int $start): int {}

	/**
	 * Scan for 1
	 * <p>Scans <code>a</code>, starting with bit <code>start</code>, towards more significant bits, until the first set bit is found.</p>
	 * @param \GMP $a <p>The number to scan.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $start <p>The starting bit.</p>
	 * @return int <p>Returns the index of the found bit, as an <code>int</code>. If no set bit is found, -1 is returned.</p>
	 * @link https://php.net/manual/en/function.gmp-scan1.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_scan1(\GMP $a, int $start): int {}

	/**
	 * Set bit
	 * <p>Sets bit <code>index</code> in <code>a</code>.</p>
	 * @param \GMP $a <p>The value to modify.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $index <p>The index of the bit to set. Index 0 represents the least significant bit.</p>
	 * @param bool $bit_on <p>True to set the bit (set it to 1/on); false to clear the bit (set it to 0/off).</p>
	 * @return void <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-setbit.php
	 * @see gmp_clrbit(), gmp_testbit()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_setbit(\GMP $a, int $index, bool $bit_on = TRUE): void {}

	/**
	 * Sign of number
	 * <p>Checks the sign of a number.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to an <code>int</code>.</p>
	 * @return int <p>Returns 1 if <code>a</code> is positive, -1 if <code>a</code> is negative, and 0 if <code>a</code> is zero.</p>
	 * @link https://php.net/manual/en/function.gmp-sign.php
	 * @see gmp_abs(), abs()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_sign(\GMP $a): int {}

	/**
	 * Calculate square root
	 * <p>Calculates square root of <code>a</code>.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>The integer portion of the square root, as a GMP number.</p>
	 * @link https://php.net/manual/en/function.gmp-sqrt.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_sqrt(\GMP $a): \GMP {}

	/**
	 * Square root with remainder
	 * <p>Calculate the square root of a number, with remainder.</p>
	 * @param \GMP $a <p>The number being square rooted.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return array <p>Returns array where first element is the integer square root of <code>a</code> and the second is the remainder (i.e., the difference between <code>a</code> and the first element squared).</p>
	 * @link https://php.net/manual/en/function.gmp-sqrtrem.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_sqrtrem(\GMP $a): array {}

	/**
	 * Convert GMP number to string
	 * <p>Convert GMP number to string representation in base <code>base</code>. The default base is 10.</p>
	 * @param \GMP $gmpnumber <p>The GMP number that will be converted to a string.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $base <p>The base of the returned number. The default base is 10. Allowed values for the base are from 2 to 62 and -2 to -36.</p>
	 * @return string <p>The number, as a <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.gmp-strval.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_strval(\GMP $gmpnumber, int $base = 10): string {}

	/**
	 * Subtract numbers
	 * <p>Subtracts <code>b</code> from <code>a</code> and returns the result.</p>
	 * @param \GMP $a <p>The number being subtracted from.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>The number subtracted from <code>a</code>.</p> <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-sub.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_sub(\GMP $a, \GMP $b): \GMP {}

	/**
	 * Tests if a bit is set
	 * <p>Tests if the specified bit is set.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param int $index <p>The bit to test</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the bit is set in resource <code>$a</code>, otherwise <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.gmp-testbit.php
	 * @see gmp_setbit(), gmp_clrbit()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function gmp_testbit(\GMP $a, int $index): bool {}

	/**
	 * Bitwise XOR
	 * <p>Calculates bitwise exclusive OR (XOR) of two GMP numbers.</p>
	 * @param \GMP $a <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @param \GMP $b <p>Either a GMP number <code>resource</code> in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
	 * @return GMP <p>A GMP object.</p>
	 * @link https://php.net/manual/en/function.gmp-xor.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gmp_xor(\GMP $a, \GMP $b): \GMP {}

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
