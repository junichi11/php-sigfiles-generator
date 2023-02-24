<?php



namespace {

	/**
	 * Absolute value
	 * <p>Returns the absolute value of <code>num</code>.</p>
	 * @param int|float $num <p>The numeric value to process</p>
	 * @return int|float <p>The absolute value of <code>num</code>. If the argument <code>num</code> is of type <code>float</code>, the return type is also <code>float</code>, otherwise it is <code>int</code> (as <code>float</code> usually has a bigger value range than <code>int</code>).</p>
	 * @link https://php.net/manual/en/function.abs.php
	 * @see gmp_abs(), gmp_sign()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function abs(int|float $num): int|float {}

	/**
	 * Arc cosine
	 * <p>Returns the arc cosine of <code>num</code> in radians. <b>acos()</b> is the inverse function of <code>cos()</code>, which means that <code>a==cos(acos(a))</code> for every value of a that is within <b>acos()</b>' range.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The arc cosine of <code>num</code> in radians.</p>
	 * @link https://php.net/manual/en/function.acos.php
	 * @see cos(), acosh(), asin(), atan()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function acos(float $num): float {}

	/**
	 * Inverse hyperbolic cosine
	 * <p>Returns the inverse hyperbolic cosine of <code>num</code>, i.e. the value whose hyperbolic cosine is <code>num</code>.</p>
	 * @param float $num <p>The value to process</p>
	 * @return float <p>The inverse hyperbolic cosine of <code>num</code></p>
	 * @link https://php.net/manual/en/function.acosh.php
	 * @see cosh(), acos(), asinh(), atanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function acosh(float $num): float {}

	/**
	 * Arc sine
	 * <p>Returns the arc sine of <code>num</code> in radians. <b>asin()</b> is the inverse function of <code>sin()</code>, which means that <code>a==sin(asin(a))</code> for every value of a that is within <b>asin()</b>'s range.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The arc sine of <code>num</code> in radians</p>
	 * @link https://php.net/manual/en/function.asin.php
	 * @see sin(), asinh(), acos(), atan()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function asin(float $num): float {}

	/**
	 * Inverse hyperbolic sine
	 * <p>Returns the inverse hyperbolic sine of <code>num</code>, i.e. the value whose hyperbolic sine is <code>num</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The inverse hyperbolic sine of <code>num</code></p>
	 * @link https://php.net/manual/en/function.asinh.php
	 * @see sinh(), asin(), acosh(), atanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function asinh(float $num): float {}

	/**
	 * Arc tangent
	 * <p>Returns the arc tangent of <code>num</code> in radians. <b>atan()</b> is the inverse function of <code>tan()</code>, which means that <code>a==tan(atan(a))</code> for every value of a that is within <b>atan()</b>'s range.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The arc tangent of <code>num</code> in radians.</p>
	 * @link https://php.net/manual/en/function.atan.php
	 * @see tan(), atanh(), asin(), acos()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function atan(float $num): float {}

	/**
	 * Arc tangent of two variables
	 * <p>This function calculates the arc tangent of the two variables <code>x</code> and <code>y</code>. It is similar to calculating the arc tangent of <code>y</code> / <code>x</code>, except that the signs of both arguments are used to determine the quadrant of the result.</p><p>The function returns the result in radians, which is between -PI and PI (inclusive).</p>
	 * @param float $y <p>Dividend parameter</p>
	 * @param float $x <p>Divisor parameter</p>
	 * @return float <p>The arc tangent of <code>y</code>/<code>x</code> in radians.</p>
	 * @link https://php.net/manual/en/function.atan2.php
	 * @see atan()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function atan2(float $y, float $x): float {}

	/**
	 * Inverse hyperbolic tangent
	 * <p>Returns the inverse hyperbolic tangent of <code>num</code>, i.e. the value whose hyperbolic tangent is <code>num</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>Inverse hyperbolic tangent of <code>num</code></p>
	 * @link https://php.net/manual/en/function.atanh.php
	 * @see tanh(), atan(), asinh(), acosh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function atanh(float $num): float {}

	/**
	 * Convert a number between arbitrary bases
	 * <p>Returns a string containing <code>num</code> represented in base <code>to_base</code>. The base in which <code>num</code> is given is specified in <code>from_base</code>. Both <code>from_base</code> and <code>to_base</code> have to be between 2 and 36, inclusive. Digits in numbers with a base higher than 10 will be represented with the letters a-z, with a meaning 10, b meaning 11 and z meaning 35. The case of the letters doesn't matter, i.e. <code>num</code> is interpreted case-insensitively.</p><p><b>base_convert()</b> may lose precision on large numbers due to properties related to the internal <code>float</code> type used. Please see the Floating point numbers section in the manual for more specific information and limitations.</p>
	 * @param string $num <p>The number to convert. Any invalid characters in <code>num</code> are silently ignored. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @param int $from_base <p>The base <code>num</code> is in</p>
	 * @param int $to_base <p>The base to convert <code>num</code> to</p>
	 * @return string <p><code>num</code> converted to base <code>to_base</code></p>
	 * @link https://php.net/manual/en/function.base-convert.php
	 * @see intval()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function base_convert(string $num, int $from_base, int $to_base): string {}

	/**
	 * Binary to decimal
	 * <p>Returns the decimal equivalent of the binary number represented by the <code>binary_string</code> argument.</p><p><b>bindec()</b> converts a binary number to an <code>int</code> or, if needed for size reasons, <code>float</code>.</p><p><b>bindec()</b> interprets all <code>binary_string</code> values as unsigned integers. This is because <b>bindec()</b> sees the most significant bit as another order of magnitude rather than as the sign bit.</p>
	 * @param string $binary_string <p>The binary string to convert. Any invalid characters in <code>binary_string</code> are silently ignored. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @return int|float <p>The decimal value of <code>binary_string</code></p>
	 * @link https://php.net/manual/en/function.bindec.php
	 * @see decbin(), octdec(), hexdec(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function bindec(string $binary_string): int|float {}

	/**
	 * Round fractions up
	 * <p>Returns the next highest integer value by rounding up <code>num</code> if necessary.</p>
	 * @param int|float $num <p>The value to round</p>
	 * @return float <p><code>num</code> rounded up to the next highest integer. The return value of <b>ceil()</b> is still of type <code>float</code> as the value range of <code>float</code> is usually bigger than that of <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.ceil.php
	 * @see floor(), round()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function ceil(int|float $num): float {}

	/**
	 * Cosine
	 * <p><b>cos()</b> returns the cosine of the <code>num</code> parameter. The <code>num</code> parameter is in radians.</p>
	 * @param float $num <p>An angle in radians</p>
	 * @return float <p>The cosine of <code>num</code></p>
	 * @link https://php.net/manual/en/function.cos.php
	 * @see acos(), sin(), tan(), deg2rad()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function cos(float $num): float {}

	/**
	 * Hyperbolic cosine
	 * <p>Returns the hyperbolic cosine of <code>num</code>, defined as <code>(exp($num) + exp(-$num))/2</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The hyperbolic cosine of <code>num</code></p>
	 * @link https://php.net/manual/en/function.cosh.php
	 * @see cos(), acosh(), sinh(), tanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function cosh(float $num): float {}

	/**
	 * Decimal to binary
	 * <p>Returns a string containing a binary representation of the given <code>num</code> argument.</p>
	 * @param int $num <p>Decimal value to convert</p>  <b>Range of inputs on 32-bit machines</b>      positive <code>num</code> negative <code>num</code> return value     0 &#xA0; 0   1 &#xA0; 1   2 &#xA0; 10   ... normal progression ...   2147483646 &#xA0; 1111111111111111111111111111110   2147483647 (largest signed integer) &#xA0; 1111111111111111111111111111111 (31 1's)   2147483648 -2147483648 10000000000000000000000000000000   ... normal progression ...   4294967294 -2 11111111111111111111111111111110   4294967295 (largest unsigned integer) -1 11111111111111111111111111111111 (32 1's)     <b>Range of inputs on 64-bit machines</b>      positive <code>num</code> negative <code>num</code> return value     0 &#xA0; 0   1 &#xA0; 1   2 &#xA0; 10   ... normal progression ...   9223372036854775806 &#xA0; 111111111111111111111111111111111111111111111111111111111111110   9223372036854775807 (largest signed integer) &#xA0; 111111111111111111111111111111111111111111111111111111111111111 (63 1's)   &#xA0; -9223372036854775808 1000000000000000000000000000000000000000000000000000000000000000   ... normal progression ...   &#xA0; -2 1111111111111111111111111111111111111111111111111111111111111110   &#xA0; -1 1111111111111111111111111111111111111111111111111111111111111111 (64 1's)
	 * @return string <p>Binary string representation of <code>num</code></p>
	 * @link https://php.net/manual/en/function.decbin.php
	 * @see bindec(), decoct(), dechex(), base_convert(), printf(), sprintf()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function decbin(int $num): string {}

	/**
	 * Decimal to hexadecimal
	 * <p>Returns a string containing a hexadecimal representation of the given unsigned <code>num</code> argument.</p><p>The largest number that can be converted is <b><code>PHP_INT_MAX</code></b><code> &#42; 2 + 1</code> (or <code>-1</code>): on 32-bit platforms, this will be <code>4294967295</code> in decimal, which results in <b>dechex()</b> returning <code>ffffffff</code>.</p>
	 * @param int $num <p>The decimal value to convert.</p> <p>As PHP's <code>int</code> type is signed, but <b>dechex()</b> deals with unsigned integers, negative integers will be treated as though they were unsigned.</p>
	 * @return string <p>Hexadecimal string representation of <code>num</code>.</p>
	 * @link https://php.net/manual/en/function.dechex.php
	 * @see hexdec(), decbin(), decoct(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function dechex(int $num): string {}

	/**
	 * Decimal to octal
	 * <p>Returns a string containing an octal representation of the given <code>num</code> argument. The largest number that can be converted depends on the platform in use. For 32-bit platforms this is usually <code>4294967295</code> in decimal resulting in <code>37777777777</code>. For 64-bit platforms this is usually <code>9223372036854775807</code> in decimal resulting in <code>777777777777777777777</code>.</p>
	 * @param int $num <p>Decimal value to convert</p>
	 * @return string <p>Octal string representation of <code>num</code></p>
	 * @link https://php.net/manual/en/function.decoct.php
	 * @see octdec(), decbin(), dechex(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function decoct(int $num): string {}

	/**
	 * Converts the number in degrees to the radian equivalent
	 * <p>This function converts <code>num</code> from degrees to the radian equivalent.</p>
	 * @param float $num <p>Angular value in degrees</p>
	 * @return float <p>The radian equivalent of <code>num</code></p>
	 * @link https://php.net/manual/en/function.deg2rad.php
	 * @see rad2deg()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function deg2rad(float $num): float {}

	/**
	 * Calculates the exponent of e
	 * <p>Returns <b><code>e</code></b> raised to the power of <code>num</code>.</p><p><b>Note</b>:</p><p>'<b><code>e</code></b>' is the base of the natural system of logarithms, or approximately 2.718282.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>'e' raised to the power of <code>num</code></p>
	 * @link https://php.net/manual/en/function.exp.php
	 * @see log(), pow()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function exp(float $num): float {}

	/**
	 * Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
	 * <p><b>expm1()</b> returns the equivalent to 'exp(<code>num</code>) - 1' computed in a way that is accurate even if the value of <code>num</code> is near zero, a case where 'exp (<code>num</code>) - 1' would be inaccurate due to subtraction of two numbers that are nearly equal.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>'e' to the power of <code>num</code> minus one</p>
	 * @link https://php.net/manual/en/function.expm1.php
	 * @see log1p(), exp()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function expm1(float $num): float {}

	/**
	 * Divides two numbers, according to IEEE 754
	 * <p>Returns the floating point result of dividing the <code>num1</code> by the <code>num2</code>. If the <code>num2</code> is zero, then one of <code>INF</code>, <code>-INF</code>, or <code>NAN</code> will be returned.</p><p>Note that in comparisons, <code>NAN</code> will never <code>==</code> or <code>===</code>, any value, including itself.</p>
	 * @param float $num1 <p>The dividend (numerator)</p>
	 * @param float $num2 <p>The divisor</p>
	 * @return float <p>The floating point result of <code>num1</code>/<code>num2</code></p>
	 * @link https://php.net/manual/en/function.fdiv.php
	 * @see intdiv(), fmod()
	 * @since PHP 8
	 */
	function fdiv(float $num1, float $num2): float {}

	/**
	 * Round fractions down
	 * <p>Returns the next lowest integer value (as float) by rounding down <code>num</code> if necessary.</p>
	 * @param int|float $num <p>The numeric value to round</p>
	 * @return float <p><code>num</code> rounded to the next lowest integer. The return value of <b>floor()</b> is still of type <code>float</code>. This function returns <b><code>false</code></b> in case of an error (e.g. passing an array).</p>
	 * @link https://php.net/manual/en/function.floor.php
	 * @see ceil(), round()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function floor(int|float $num): float {}

	/**
	 * Returns the floating point remainder (modulo) of the division of the arguments
	 * <p>Returns the floating point remainder of dividing the dividend (<code>num1</code>) by the divisor (<code>num2</code>). The remainder (r) is defined as: num1 = i &#42; num2 + r, for some integer i. If <code>num2</code> is non-zero, r has the same sign as <code>num1</code> and a magnitude less than the magnitude of <code>num2</code>.</p>
	 * @param float $num1 <p>The dividend</p>
	 * @param float $num2 <p>The divisor</p>
	 * @return float <p>The floating point remainder of <code>num1</code>/<code>num2</code></p>
	 * @link https://php.net/manual/en/function.fmod.php
	 * @see intdiv()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function fmod(float $num1, float $num2): float {}

	/**
	 * Hexadecimal to decimal
	 * <p>Returns the decimal equivalent of the hexadecimal number represented by the <code>hex_string</code> argument. <b>hexdec()</b> converts a hexadecimal string to a decimal number.</p><p><b>hexdec()</b> will ignore any non-hexadecimal characters it encounters. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @param string $hex_string <p>The hexadecimal string to convert</p>
	 * @return int|float <p>The decimal representation of <code>hex_string</code></p>
	 * @link https://php.net/manual/en/function.hexdec.php
	 * @see dechex(), bindec(), octdec(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function hexdec(string $hex_string): int|float {}

	/**
	 * Calculate the length of the hypotenuse of a right-angle triangle
	 * <p><b>hypot()</b> returns the length of the hypotenuse of a right-angle triangle with sides of length <code>x</code> and <code>y</code>, or the distance of the point (<code>x</code>, <code>y</code>) from the origin. This is equivalent to <code>sqrt(x&#42;x + y&#42;y)</code>.</p>
	 * @param float $x <p>Length of first side</p>
	 * @param float $y <p>Length of second side</p>
	 * @return float <p>Calculated length of the hypotenuse</p>
	 * @link https://php.net/manual/en/function.hypot.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function hypot(float $x, float $y): float {}

	/**
	 * Integer division
	 * <p>Returns the integer quotient of the division of <code>num1</code> by <code>num2</code>.</p>
	 * @param int $num1 <p>Number to be divided.</p>
	 * @param int $num2 <p>Number which divides the <code>num1</code>.</p>
	 * @return int <p>The integer quotient of the division of <code>num1</code> by <code>num2</code>.</p>
	 * @link https://php.net/manual/en/function.intdiv.php
	 * @see fmod()
	 * @since PHP 7, PHP 8
	 */
	function intdiv(int $num1, int $num2): int {}

	/**
	 * Finds whether a value is a legal finite number
	 * <p>Checks whether <code>num</code> is a legal finite on this platform.</p>
	 * @param float $num <p>The value to check</p>
	 * @return bool <p><b><code>true</code></b> if <code>num</code> is a legal finite number within the allowed range for a PHP float on this platform, else <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.is-finite.php
	 * @see is_infinite(), is_nan()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function is_finite(float $num): bool {}

	/**
	 * Finds whether a value is infinite
	 * <p>Returns <b><code>true</code></b> if <code>num</code> is infinite (positive or negative), like the result of <code>log(0)</code> or any value too big to fit into a float on this platform.</p>
	 * @param float $num <p>The value to check</p>
	 * @return bool <p><b><code>true</code></b> if <code>num</code> is infinite, else <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.is-infinite.php
	 * @see is_finite(), is_nan()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function is_infinite(float $num): bool {}

	/**
	 * Finds whether a value is not a number
	 * <p>Checks whether <code>num</code> is 'not a number', like the result of <code>acos(1.01)</code>.</p>
	 * @param float $num <p>The value to check</p>
	 * @return bool <p>Returns <b><code>true</code></b> if <code>num</code> is 'not a number', else <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.is-nan.php
	 * @see is_finite(), is_infinite()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function is_nan(float $num): bool {}

	/**
	 * Natural logarithm
	 * <p>If the optional <code>base</code> parameter is specified, <b>log()</b> returns logbase <code>num</code>, otherwise <b>log()</b> returns the natural logarithm of <code>num</code>.</p>
	 * @param float $num <p>The value to calculate the logarithm for</p>
	 * @param float $base <p>The optional logarithmic base to use (defaults to 'e' and so to the natural logarithm).</p>
	 * @return float <p>The logarithm of <code>num</code> to <code>base</code>, if given, or the natural logarithm.</p>
	 * @link https://php.net/manual/en/function.log.php
	 * @see log10(), exp(), pow()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function log(float $num, float $base = M_E): float {}

	/**
	 * Base-10 logarithm
	 * <p>Returns the base-10 logarithm of <code>num</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The base-10 logarithm of <code>num</code></p>
	 * @link https://php.net/manual/en/function.log10.php
	 * @see log()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function log10(float $num): float {}

	/**
	 * Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
	 * <p><b>log1p()</b> returns log(1 + <code>num</code>) computed in a way that is accurate even when the value of <code>num</code> is close to zero. <code>log()</code> might only return log(1) in this case due to lack of precision.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>log(1 + <code>num</code>)</p>
	 * @link https://php.net/manual/en/function.log1p.php
	 * @see expm1(), log(), log10()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function log1p(float $num): float {}

	/**
	 * Find highest value
	 * <p>Alternative signature (not supported with named arguments):</p><p>If the first and only parameter is an array, <b>max()</b> returns the highest value in that array. If at least two parameters are provided, <b>max()</b> returns the biggest of these values.</p><p><b>Note</b>:</p><p>Values of different types will be compared using the  standard comparison rules. For instance, a non-numeric <code>string</code> will be compared to an <code>int</code> as though it were <code>0</code>, but multiple non-numeric <code>string</code> values will be compared alphanumerically. The actual value returned will be of the original type with no conversion applied.</p><p>Be careful when passing arguments of different types because <b>max()</b> can produce unpredictable results.</p>
	 * @param mixed $value <p>Any comparable value.</p>
	 * @param mixed $values <p>Any comparable values.</p>
	 * @return mixed <p><b>max()</b> returns the parameter value considered "highest" according to standard comparisons. If multiple values of different types evaluate as equal (e.g. <code>0</code> and <code>'abc'</code>) the first provided to the function will be returned.</p>
	 * @link https://php.net/manual/en/function.max.php
	 * @see min(), count()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function max(mixed $value, mixed ...$values): mixed {}

	/**
	 * Find lowest value
	 * <p>Alternative signature (not supported with named arguments):</p><p>If the first and only parameter is an array, <b>min()</b> returns the lowest value in that array. If at least two parameters are provided, <b>min()</b> returns the smallest of these values.</p><p><b>Note</b>:</p><p>Values of different types will be compared using the  standard comparison rules. For instance, a non-numeric <code>string</code> will be compared to an <code>int</code> as though it were <code>0</code>, but multiple non-numeric <code>string</code> values will be compared alphanumerically. The actual value returned will be of the original type with no conversion applied.</p><p>Be careful when passing arguments of different types because <b>min()</b> can produce unpredictable results.</p>
	 * @param mixed $value <p>Any comparable value.</p>
	 * @param mixed $values <p>Any comparable values.</p>
	 * @return mixed <p><b>min()</b> returns the parameter value considered "lowest" according to standard comparisons. If multiple values of different types evaluate as equal (e.g. <code>0</code> and <code>'abc'</code>) the first provided to the function will be returned.</p>
	 * @link https://php.net/manual/en/function.min.php
	 * @see max(), count()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function min(mixed $value, mixed ...$values): mixed {}

	/**
	 * Octal to decimal
	 * <p>Returns the decimal equivalent of the octal number represented by the <code>octal_string</code> argument.</p>
	 * @param string $octal_string <p>The octal string to convert. Any invalid characters in <code>octal_string</code> are silently ignored. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @return int|float <p>The decimal representation of <code>octal_string</code></p>
	 * @link https://php.net/manual/en/function.octdec.php
	 * @see decoct(), bindec(), hexdec(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function octdec(string $octal_string): int|float {}

	/**
	 * Get value of pi
	 * <p>Returns an approximation of pi. Also, you can use the <b><code>M_PI</code></b> constant which yields identical results to <b>pi()</b>.</p>
	 * @return float <p>The value of pi as float.</p>
	 * @link https://php.net/manual/en/function.pi.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function pi(): float {}

	/**
	 * Exponential expression
	 * <p>Returns <code>num</code> raised to the power of <code>exponent</code>.</p><p><b>Note</b>:</p><p>It is possible to use the &#42;&#42; operator instead.</p>
	 * @param mixed $num <p>The base to use</p>
	 * @param mixed $exponent <p>The exponent</p>
	 * @return int|float|object <p><code>num</code> raised to the power of <code>exponent</code>. If both arguments are non-negative integers and the result can be represented as an integer, the result will be returned with <code>int</code> type, otherwise it will be returned as a <code>float</code>.</p>
	 * @link https://php.net/manual/en/function.pow.php
	 * @see exp(), sqrt(), bcpow(), gmp_pow()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function pow(mixed $num, mixed $exponent): int|float|object {}

	/**
	 * Converts the radian number to the equivalent number in degrees
	 * <p>This function converts <code>num</code> from radian to degrees.</p>
	 * @param float $num <p>A radian value</p>
	 * @return float <p>The equivalent of <code>num</code> in degrees</p>
	 * @link https://php.net/manual/en/function.rad2deg.php
	 * @see deg2rad()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function rad2deg(float $num): float {}

	/**
	 * Rounds a float
	 * <p>Returns the rounded value of <code>num</code> to specified <code>precision</code> (number of digits after the decimal point). <code>precision</code> can also be negative or zero (default).</p>
	 * @param int|float $num <p>The value to round.</p>
	 * @param int $precision <p>The optional number of decimal digits to round to.</p> <p>If the <code>precision</code> is positive, <code>num</code> is rounded to <code>precision</code> significant digits after the decimal point.</p> <p>If the <code>precision</code> is negative, <code>num</code> is rounded to <code>precision</code> significant digits before the decimal point, i.e. to the nearest multiple of <code>pow(10, -precision)</code>, e.g. for a <code>precision</code> of -1 <code>num</code> is rounded to tens, for a <code>precision</code> of -2 to hundreds, etc.</p>
	 * @param int $mode <p>Use one of the following constants to specify the mode in which rounding occurs.</p>   Constants Description     <b><code>PHP_ROUND_HALF_UP</code></b>  Rounds <code>num</code> away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2.    <b><code>PHP_ROUND_HALF_DOWN</code></b>  Rounds <code>num</code> towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1.    <b><code>PHP_ROUND_HALF_EVEN</code></b>  Rounds <code>num</code> towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2.    <b><code>PHP_ROUND_HALF_ODD</code></b>  Rounds <code>num</code> towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 into 3.
	 * @return float <p>The value rounded to the given <code>precision</code> as a <code>float</code>.</p>
	 * @link https://php.net/manual/en/function.round.php
	 * @see ceil(), floor(), number_format()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float {}

	/**
	 * Sine
	 * <p><b>sin()</b> returns the sine of the <code>num</code> parameter. The <code>num</code> parameter is in radians.</p>
	 * @param float $num <p>A value in radians</p>
	 * @return float <p>The sine of <code>num</code></p>
	 * @link https://php.net/manual/en/function.sin.php
	 * @see asin(), sinh(), cos(), tan(), deg2rad()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function sin(float $num): float {}

	/**
	 * Hyperbolic sine
	 * <p>Returns the hyperbolic sine of <code>num</code>, defined as <code>(exp($num) - exp(-$num))/2</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The hyperbolic sine of <code>num</code></p>
	 * @link https://php.net/manual/en/function.sinh.php
	 * @see sin(), asinh(), cosh(), tanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function sinh(float $num): float {}

	/**
	 * Square root
	 * <p>Returns the square root of <code>num</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The square root of <code>num</code> or the special value <code>NAN</code> for negative numbers.</p>
	 * @link https://php.net/manual/en/function.sqrt.php
	 * @see pow()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function sqrt(float $num): float {}

	/**
	 * Tangent
	 * <p><b>tan()</b> returns the tangent of the <code>num</code> parameter. The <code>num</code> parameter is in radians.</p>
	 * @param float $num <p>The argument to process in radians</p>
	 * @return float <p>The tangent of <code>num</code></p>
	 * @link https://php.net/manual/en/function.tan.php
	 * @see atan(), atan2(), sin(), cos(), tanh(), deg2rad()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function tan(float $num): float {}

	/**
	 * Hyperbolic tangent
	 * <p>Returns the hyperbolic tangent of <code>num</code>, defined as <code>sinh($num)/cosh($num)</code>.</p>
	 * @param float $num <p>The argument to process</p>
	 * @return float <p>The hyperbolic tangent of <code>num</code></p>
	 * @link https://php.net/manual/en/function.tanh.php
	 * @see tan(), atanh(), sinh(), cosh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function tanh(float $num): float {}

	/**
	 * The infinite
	 */
	define('INF', INF);

	/**
	 * 1/pi
	 */
	define('M_1_PI', 0.31830988618379);

	/**
	 * 2/pi
	 */
	define('M_2_PI', 0.63661977236758);

	/**
	 * 2/sqrt(pi)
	 */
	define('M_2_SQRTPI', 1.1283791670955);

	/**
	 * e
	 */
	define('M_E', 2.718281828459);

	/**
	 * Euler constant
	 */
	define('M_EULER', 0.57721566490153);

	/**
	 * log_e 10
	 */
	define('M_LN10', 2.302585092994);

	/**
	 * log_e 2
	 */
	define('M_LN2', 0.69314718055995);

	/**
	 * log_e(pi)
	 */
	define('M_LNPI', 1.1447298858494);

	/**
	 * log_10 e
	 */
	define('M_LOG10E', 0.43429448190325);

	/**
	 * log_2 e
	 */
	define('M_LOG2E', 1.442695040889);

	/**
	 * Pi
	 */
	define('M_PI', 3.1415926535898);

	/**
	 * pi/2
	 */
	define('M_PI_2', 1.5707963267949);

	/**
	 * pi/4
	 */
	define('M_PI_4', 0.78539816339745);

	/**
	 * 1/sqrt(2)
	 */
	define('M_SQRT1_2', 0.70710678118655);

	/**
	 * sqrt(2)
	 */
	define('M_SQRT2', 1.4142135623731);

	/**
	 * sqrt(3)
	 */
	define('M_SQRT3', 1.7320508075689);

	/**
	 * sqrt(pi)
	 */
	define('M_SQRTPI', 1.7724538509055);

	/**
	 * Not A Number
	 */
	define('NAN', NAN);

	/**
	 * Round halves down
	 */
	define('PHP_ROUND_HALF_DOWN', 2);

	/**
	 * Round halves to even numbers
	 */
	define('PHP_ROUND_HALF_EVEN', 3);

	/**
	 * Round halves to odd numbers
	 */
	define('PHP_ROUND_HALF_ODD', 4);

	/**
	 * Round halves up
	 */
	define('PHP_ROUND_HALF_UP', 1);

}
