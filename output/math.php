<?php



namespace {

	/**
	 * Absolute value
	 * <p>Returns the absolute value of <code>number</code>.</p>
	 * @param mixed $number <p>The numeric value to process</p>
	 * @return int|float <p>The absolute value of <code>number</code>. If the argument <code>number</code> is of type <code>float</code>, the return type is also <code>float</code>, otherwise it is <code>int</code> (as <code>float</code> usually has a bigger value range than <code>int</code>).</p>
	 * @link https://php.net/manual/en/function.abs.php
	 * @see gmp_abs(), gmp_sign()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function abs(mixed $number): int|float {}

	/**
	 * Arc cosine
	 * <p>Returns the arc cosine of <code>arg</code> in radians. <b>acos()</b> is the inverse function of <code>cos()</code>, which means that <code>a==cos(acos(a))</code> for every value of a that is within <b>acos()</b>' range.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The arc cosine of <code>arg</code> in radians.</p>
	 * @link https://php.net/manual/en/function.acos.php
	 * @see cos(), acosh(), asin(), atan()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function acos(float $arg): float {}

	/**
	 * Inverse hyperbolic cosine
	 * <p>Returns the inverse hyperbolic cosine of <code>arg</code>, i.e. the value whose hyperbolic cosine is <code>arg</code>.</p>
	 * @param float $arg <p>The value to process</p>
	 * @return float <p>The inverse hyperbolic cosine of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.acosh.php
	 * @see cosh(), acos(), asinh(), atanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function acosh(float $arg): float {}

	/**
	 * Arc sine
	 * <p>Returns the arc sine of <code>arg</code> in radians. <b>asin()</b> is the inverse function of <code>sin()</code>, which means that <code>a==sin(asin(a))</code> for every value of a that is within <b>asin()</b>'s range.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The arc sine of <code>arg</code> in radians</p>
	 * @link https://php.net/manual/en/function.asin.php
	 * @see sin(), asinh(), acos(), atan()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function asin(float $arg): float {}

	/**
	 * Inverse hyperbolic sine
	 * <p>Returns the inverse hyperbolic sine of <code>arg</code>, i.e. the value whose hyperbolic sine is <code>arg</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The inverse hyperbolic sine of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.asinh.php
	 * @see sinh(), asin(), acosh(), atanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function asinh(float $arg): float {}

	/**
	 * Arc tangent
	 * <p>Returns the arc tangent of <code>arg</code> in radians. <b>atan()</b> is the inverse function of <code>tan()</code>, which means that <code>a==tan(atan(a))</code> for every value of a that is within <b>atan()</b>'s range.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The arc tangent of <code>arg</code> in radians.</p>
	 * @link https://php.net/manual/en/function.atan.php
	 * @see tan(), atanh(), asin(), acos()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function atan(float $arg): float {}

	/**
	 * Arc tangent of two variables
	 * <p>This function calculates the arc tangent of the two variables <code>x</code> and <code>y</code>. It is similar to calculating the arc tangent of <code>y</code> / <code>x</code>, except that the signs of both arguments are used to determine the quadrant of the result.</p><p>The function returns the result in radians, which is between -PI and PI (inclusive).</p>
	 * @param float $y <p>Dividend parameter</p>
	 * @param float $x <p>Divisor parameter</p>
	 * @return float <p>The arc tangent of <code>y</code>/<code>x</code> in radians.</p>
	 * @link https://php.net/manual/en/function.atan2.php
	 * @see atan()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function atan2(float $y, float $x): float {}

	/**
	 * Inverse hyperbolic tangent
	 * <p>Returns the inverse hyperbolic tangent of <code>arg</code>, i.e. the value whose hyperbolic tangent is <code>arg</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>Inverse hyperbolic tangent of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.atanh.php
	 * @see tanh(), atan(), asinh(), acosh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function atanh(float $arg): float {}

	/**
	 * Convert a number between arbitrary bases
	 * <p>Returns a string containing <code>number</code> represented in base <code>tobase</code>. The base in which <code>number</code> is given is specified in <code>frombase</code>. Both <code>frombase</code> and <code>tobase</code> have to be between 2 and 36, inclusive. Digits in numbers with a base higher than 10 will be represented with the letters a-z, with a meaning 10, b meaning 11 and z meaning 35. The case of the letters doesn't matter, i.e. <code>number</code> is interpreted case-insensitively.</p><p><b>base_convert()</b> may lose precision on large numbers due to properties related to the internal "double" or "float" type used. Please see the Floating point numbers section in the manual for more specific information and limitations.</p>
	 * @param string $number <p>The number to convert. Any invalid characters in <code>number</code> are silently ignored. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @param int $frombase <p>The base <code>number</code> is in</p>
	 * @param int $tobase <p>The base to convert <code>number</code> to</p>
	 * @return string <p><code>number</code> converted to base <code>tobase</code></p>
	 * @link https://php.net/manual/en/function.base-convert.php
	 * @see intval()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function base_convert(string $number, int $frombase, int $tobase): string {}

	/**
	 * Binary to decimal
	 * <p>Returns the decimal equivalent of the binary number represented by the <code>binary_string</code> argument.</p><p><b>bindec()</b> converts a binary number to an <code>int</code> or, if needed for size reasons, <code>float</code>.</p><p><b>bindec()</b> interprets all <code>binary_string</code> values as unsigned integers. This is because <b>bindec()</b> sees the most significant bit as another order of magnitude rather than as the sign bit.</p>
	 * @param string $binary_string <p>The binary string to convert. Any invalid characters in <code>binary_string</code> are silently ignored. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @return int|float <p>The decimal value of <code>binary_string</code></p>
	 * @link https://php.net/manual/en/function.bindec.php
	 * @see decbin(), octdec(), hexdec(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bindec(string $binary_string): int|float {}

	/**
	 * Round fractions up
	 * <p>Returns the next highest integer value by rounding up <code>value</code> if necessary.</p>
	 * @param float $value <p>The value to round</p>
	 * @return float <p><code>value</code> rounded up to the next highest integer. The return value of <b>ceil()</b> is still of type <code>float</code> as the value range of <code>float</code> is usually bigger than that of <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.ceil.php
	 * @see floor(), round()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ceil(float $value): float {}

	/**
	 * Cosine
	 * <p><b>cos()</b> returns the cosine of the <code>arg</code> parameter. The <code>arg</code> parameter is in radians.</p>
	 * @param float $arg <p>An angle in radians</p>
	 * @return float <p>The cosine of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.cos.php
	 * @see acos(), sin(), tan(), deg2rad()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function cos(float $arg): float {}

	/**
	 * Hyperbolic cosine
	 * <p>Returns the hyperbolic cosine of <code>arg</code>, defined as <code>(exp(arg) + exp(-arg))/2</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The hyperbolic cosine of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.cosh.php
	 * @see cos(), acosh(), sinh(), tanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cosh(float $arg): float {}

	/**
	 * Decimal to binary
	 * <p>Returns a string containing a binary representation of the given <code>number</code> argument.</p>
	 * @param int $number <p>Decimal value to convert</p>  <b>Range of inputs on 32-bit machines</b>      positive <code>number</code> negative <code>number</code> return value     0 &nbsp; 0   1 &nbsp; 1   2 &nbsp; 10   ... normal progression ...   2147483646 &nbsp; 1111111111111111111111111111110   2147483647 (largest signed integer) &nbsp; 1111111111111111111111111111111 (31 1's)   2147483648 -2147483648 10000000000000000000000000000000   ... normal progression ...   4294967294 -2 11111111111111111111111111111110   4294967295 (largest unsigned integer) -1 11111111111111111111111111111111 (32 1's)     <b>Range of inputs on 64-bit machines</b>      positive <code>number</code> negative <code>number</code> return value     0 &nbsp; 0   1 &nbsp; 1   2 &nbsp; 10   ... normal progression ...   9223372036854775806 &nbsp; 111111111111111111111111111111111111111111111111111111111111110   9223372036854775807 (largest signed integer) &nbsp; 111111111111111111111111111111111111111111111111111111111111111 (63 1's)   &nbsp; -9223372036854775808 1000000000000000000000000000000000000000000000000000000000000000   ... normal progression ...   &nbsp; -2 1111111111111111111111111111111111111111111111111111111111111110   &nbsp; -1 1111111111111111111111111111111111111111111111111111111111111111 (64 1's)
	 * @return string <p>Binary string representation of <code>number</code></p>
	 * @link https://php.net/manual/en/function.decbin.php
	 * @see bindec(), decoct(), dechex(), base_convert(), printf(), sprintf()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function decbin(int $number): string {}

	/**
	 * Decimal to hexadecimal
	 * <p>Returns a string containing a hexadecimal representation of the given unsigned <code>number</code> argument.</p><p>The largest number that can be converted is <b><code>PHP_INT_MAX</code></b><code> &#42; 2 + 1</code> (or <code>-1</code>): on 32-bit platforms, this will be <code>4294967295</code> in decimal, which results in <b>dechex()</b> returning <code>ffffffff</code>.</p>
	 * @param int $number <p>The decimal value to convert.</p> <p>As PHP's <code>int</code> type is signed, but <b>dechex()</b> deals with unsigned integers, negative integers will be treated as though they were unsigned.</p>
	 * @return string <p>Hexadecimal string representation of <code>number</code>.</p>
	 * @link https://php.net/manual/en/function.dechex.php
	 * @see hexdec(), decbin(), decoct(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dechex(int $number): string {}

	/**
	 * Decimal to octal
	 * <p>Returns a string containing an octal representation of the given <code>number</code> argument. The largest number that can be converted depends on the platform in use. For 32-bit platforms this is usually <code>4294967295</code> in decimal resulting in <code>37777777777</code>. For 64-bit platforms this is usually <code>9223372036854775807</code> in decimal resulting in <code>777777777777777777777</code>.</p>
	 * @param int $number <p>Decimal value to convert</p>
	 * @return string <p>Octal string representation of <code>number</code></p>
	 * @link https://php.net/manual/en/function.decoct.php
	 * @see octdec(), decbin(), dechex(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function decoct(int $number): string {}

	/**
	 * Converts the number in degrees to the radian equivalent
	 * <p>This function converts <code>number</code> from degrees to the radian equivalent.</p>
	 * @param float $number <p>Angular value in degrees</p>
	 * @return float <p>The radian equivalent of <code>number</code></p>
	 * @link https://php.net/manual/en/function.deg2rad.php
	 * @see rad2deg()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function deg2rad(float $number): float {}

	/**
	 * Calculates the exponent of e
	 * <p>Returns <b><code>e</code></b> raised to the power of <code>arg</code>.</p><p><b>Note</b>:</p><p>'<b><code>e</code></b>' is the base of the natural system of logarithms, or approximately 2.718282.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>'e' raised to the power of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.exp.php
	 * @see log(), pow()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function exp(float $arg): float {}

	/**
	 * Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
	 * <p><b>expm1()</b> returns the equivalent to 'exp(<code>arg</code>) - 1' computed in a way that is accurate even if the value of <code>arg</code> is near zero, a case where 'exp (<code>arg</code>) - 1' would be inaccurate due to subtraction of two numbers that are nearly equal.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>'e' to the power of <code>arg</code> minus one</p>
	 * @link https://php.net/manual/en/function.expm1.php
	 * @see log1p(), exp()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function expm1(float $arg): float {}

	/**
	 * Round fractions down
	 * <p>Returns the next lowest integer value (as float) by rounding down <code>value</code> if necessary.</p>
	 * @param float $value <p>The numeric value to round</p>
	 * @return float <p><code>value</code> rounded to the next lowest integer. The return value of <b>floor()</b> is still of type <code>float</code> because the value range of <code>float</code> is usually bigger than that of <code>int</code>. This function returns <b><code>FALSE</code></b> in case of an error (e.g. passing an array).</p>
	 * @link https://php.net/manual/en/function.floor.php
	 * @see ceil(), round()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function floor(float $value): float {}

	/**
	 * Returns the floating point remainder (modulo) of the division of the arguments
	 * <p>Returns the floating point remainder of dividing the dividend (<code>x</code>) by the divisor (<code>y</code>). The remainder (r) is defined as: x = i &#42; y + r, for some integer i. If <code>y</code> is non-zero, r has the same sign as <code>x</code> and a magnitude less than the magnitude of <code>y</code>.</p>
	 * @param float $x <p>The dividend</p>
	 * @param float $y <p>The divisor</p>
	 * @return float <p>The floating point remainder of <code>x</code>/<code>y</code></p>
	 * @link https://php.net/manual/en/function.fmod.php
	 * @see intdiv()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fmod(float $x, float $y): float {}

	/**
	 * Show largest possible random value
	 * <p>Returns the maximum value that can be returned by a call to <code>rand()</code>.</p>
	 * @return int <p>The largest possible random value returned by <code>rand()</code></p>
	 * @link https://php.net/manual/en/function.getrandmax.php
	 * @see rand(), srand(), mt_getrandmax()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getrandmax(): int {}

	/**
	 * Hexadecimal to decimal
	 * <p>Returns the decimal equivalent of the hexadecimal number represented by the <code>hex_string</code> argument. <b>hexdec()</b> converts a hexadecimal string to a decimal number.</p><p><b>hexdec()</b> will ignore any non-hexadecimal characters it encounters. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @param string $hex_string <p>The hexadecimal string to convert</p>
	 * @return int|float <p>The decimal representation of <code>hex_string</code></p>
	 * @link https://php.net/manual/en/function.hexdec.php
	 * @see dechex(), bindec(), octdec(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function hexdec(string $hex_string): int|float {}

	/**
	 * Calculate the length of the hypotenuse of a right-angle triangle
	 * <p><b>hypot()</b> returns the length of the hypotenuse of a right-angle triangle with sides of length <code>x</code> and <code>y</code>, or the distance of the point (<code>x</code>, <code>y</code>) from the origin. This is equivalent to <code>sqrt(x&#42;x + y&#42;y)</code>.</p>
	 * @param float $x <p>Length of first side</p>
	 * @param float $y <p>Length of second side</p>
	 * @return float <p>Calculated length of the hypotenuse</p>
	 * @link https://php.net/manual/en/function.hypot.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function hypot(float $x, float $y): float {}

	/**
	 * Integer division
	 * <p>Returns the integer quotient of the division of <code>dividend</code> by <code>divisor</code>.</p>
	 * @param int $dividend <p>Number to be divided.</p>
	 * @param int $divisor <p>Number which divides the <code>dividend</code>.</p>
	 * @return int <p>The integer quotient of the division of <code>dividend</code> by <code>divisor</code>.</p>
	 * @link https://php.net/manual/en/function.intdiv.php
	 * @see fmod()
	 * @since PHP 7
	 */
	function intdiv(int $dividend, int $divisor): int {}

	/**
	 * Finds whether a value is a legal finite number
	 * <p>Checks whether <code>val</code> is a legal finite on this platform.</p>
	 * @param float $val <p>The value to check</p>
	 * @return bool <p><b><code>TRUE</code></b> if <code>val</code> is a legal finite number within the allowed range for a PHP float on this platform, else <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.is-finite.php
	 * @see is_infinite(), is_nan()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function is_finite(float $val): bool {}

	/**
	 * Finds whether a value is infinite
	 * <p>Returns <b><code>TRUE</code></b> if <code>val</code> is infinite (positive or negative), like the result of <code>log(0)</code> or any value too big to fit into a float on this platform.</p>
	 * @param float $val <p>The value to check</p>
	 * @return bool <p><b><code>TRUE</code></b> if <code>val</code> is infinite, else <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.is-infinite.php
	 * @see is_finite(), is_nan()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function is_infinite(float $val): bool {}

	/**
	 * Finds whether a value is not a number
	 * <p>Checks whether <code>val</code> is 'not a number', like the result of <code>acos(1.01)</code>.</p>
	 * @param float $val <p>The value to check</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>val</code> is 'not a number', else <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.is-nan.php
	 * @see is_finite(), is_infinite()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function is_nan(float $val): bool {}

	/**
	 * Combined linear congruential generator
	 * <p><b>lcg_value()</b> returns a pseudo random number in the range of (0, 1). The function combines two CGs with periods of 2^31 - 85 and 2^31 - 249. The period of this function is equal to the product of both primes.</p><p>This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using <code>random_int()</code>, <code>random_bytes()</code>, or <code>openssl_random_pseudo_bytes()</code> instead.</p>
	 * @return float <p>A pseudo random float value between 0.0 and 1.0, inclusive.</p>
	 * @link https://php.net/manual/en/function.lcg-value.php
	 * @see rand(), mt_rand()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function lcg_value(): float {}

	/**
	 * Natural logarithm
	 * <p>If the optional <code>base</code> parameter is specified, <b>log()</b> returns logbase <code>arg</code>, otherwise <b>log()</b> returns the natural logarithm of <code>arg</code>.</p>
	 * @param float $arg <p>The value to calculate the logarithm for</p>
	 * @param float $base <p>The optional logarithmic base to use (defaults to 'e' and so to the natural logarithm).</p>
	 * @return float <p>The logarithm of <code>arg</code> to <code>base</code>, if given, or the natural logarithm.</p>
	 * @link https://php.net/manual/en/function.log.php
	 * @see log10(), exp(), pow()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function log(float $arg, float $base = M_E): float {}

	/**
	 * Base-10 logarithm
	 * <p>Returns the base-10 logarithm of <code>arg</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The base-10 logarithm of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.log10.php
	 * @see log()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function log10(float $arg): float {}

	/**
	 * Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
	 * <p><b>log1p()</b> returns log(1 + <code>number</code>) computed in a way that is accurate even when the value of <code>number</code> is close to zero. <code>log()</code> might only return log(1) in this case due to lack of precision.</p>
	 * @param float $number <p>The argument to process</p>
	 * @return float <p>log(1 + <code>number</code>)</p>
	 * @link https://php.net/manual/en/function.log1p.php
	 * @see expm1(), log(), log10()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function log1p(float $number): float {}

	/**
	 * Find highest value
	 * <p>If the first and only parameter is an array, <b>max()</b> returns the highest value in that array. If at least two parameters are provided, <b>max()</b> returns the biggest of these values.</p><p><b>Note</b>:</p><p>Values of different types will be compared using the  standard comparison rules. For instance, a non-numeric <code>string</code> will be compared to an <code>int</code> as though it were <code>0</code>, but multiple non-numeric <code>string</code> values will be compared alphanumerically. The actual value returned will be of the original type with no conversion applied.</p><p>Be careful when passing arguments with mixed types values because <b>max()</b> can produce unpredictable results.</p>
	 * @param array $value_array <p>An array containing the values.</p>
	 * @return mixed <p><b>max()</b> returns the parameter value considered "highest" according to standard comparisons. If multiple values of different types evaluate as equal (e.g. <code>0</code> and <code>'abc'</code>) the first provided to the function will be returned.</p><p>If an empty array is passed, then <b><code>FALSE</code></b> will be returned and an <b><code>E_WARNING</code></b> error will be emitted.</p>
	 * @link https://php.net/manual/en/function.max.php
	 * @see min(), count()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function max(array $value_array): mixed {}

	/**
	 * Find lowest value
	 * <p>If the first and only parameter is an array, <b>min()</b> returns the lowest value in that array. If at least two parameters are provided, <b>min()</b> returns the smallest of these values.</p><p><b>Note</b>:</p><p>Values of different types will be compared using the  standard comparison rules. For instance, a non-numeric <code>string</code> will be compared to an <code>int</code> as though it were <code>0</code>, but multiple non-numeric <code>string</code> values will be compared alphanumerically. The actual value returned will be of the original type with no conversion applied.</p><p>Be careful when passing arguments with mixed types values because <b>min()</b> can produce unpredictable results.</p>
	 * @param array $value_array <p>An array containing the values.</p>
	 * @return mixed <p><b>min()</b> returns the parameter value considered "lowest" according to standard comparisons. If multiple values of different types evaluate as equal (e.g. <code>0</code> and <code>'abc'</code>) the first provided to the function will be returned.</p><p>If an empty array is passed, then <b><code>FALSE</code></b> will be returned and an <b><code>E_WARNING</code></b> error will be emitted.</p>
	 * @link https://php.net/manual/en/function.min.php
	 * @see max(), count()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function min(array $value_array): mixed {}

	/**
	 * Show largest possible random value
	 * <p>Returns the maximum value that can be returned by a call to <code>mt_rand()</code>.</p>
	 * @return int <p>Returns the maximum random value returned by a call to <code>mt_rand()</code> without arguments, which is the maximum value that can be used for its <code>max</code> parameter without the result being scaled up (and therefore less random).</p>
	 * @link https://php.net/manual/en/function.mt-getrandmax.php
	 * @see mt_rand(), mt_srand(), getrandmax()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mt_getrandmax(): int {}

	/**
	 * Generate a random value via the Mersenne Twister Random Number Generator
	 * <p>This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using <code>random_int()</code>, <code>random_bytes()</code>, or <code>openssl_random_pseudo_bytes()</code> instead.</p><p>Many random number generators of older libcs have dubious or unknown characteristics and are slow. The <b>mt_rand()</b> function is a drop-in replacement for the older <code>rand()</code>. It uses a random number generator with known characteristics using the Mersenne Twister, which will produce random numbers four times faster than what the average libc rand() provides.</p><p>If called without the optional <code>min</code>, <code>max</code> arguments <b>mt_rand()</b> returns a pseudo-random value between 0 and <code>mt_getrandmax()</code>. If you want a random number between 5 and 15 (inclusive), for example, use <code>mt_rand(5, 15)</code>.</p>
	 * @return int <p>A random integer value between <code>min</code> (or 0) and <code>max</code> (or <code>mt_getrandmax()</code>, inclusive), or <b><code>FALSE</code></b> if <code>max</code> is less than <code>min</code>.</p>
	 * @link https://php.net/manual/en/function.mt-rand.php
	 * @see mt_srand(), mt_getrandmax(), random_int(), random_bytes(), openssl_random_pseudo_bytes(), rand()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mt_rand(): int {}

	/**
	 * Seeds the Mersenne Twister Random Number Generator
	 * <p>Seeds the random number generator with <code>seed</code> or with a random value if no <code>seed</code> is given.</p><p><b>Note</b>: There is no need to seed the random number generator with <code>srand()</code> or <b>mt_srand()</b> as this is done automatically. </p>
	 * @param int $seed <p>An arbitrary <code>int</code> seed value.</p>
	 * @param int $mode <p>Use one of the following constants to specify the implementation of the algorithm to use.</p>   Constant Description     <b><code>MT_RAND_MT19937</code></b>  Uses the fixed, correct, Mersenne Twister implementation, available as of PHP 7.1.0.    <b><code>MT_RAND_PHP</code></b>  Uses an incorrect Mersenne Twister implementation which was used as the default up till PHP 7.1.0. This mode is available for backward compatibility.
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.mt-srand.php
	 * @see mt_rand(), mt_getrandmax(), srand()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mt_srand(int $seed = NULL, int $mode = MT_RAND_MT19937): void {}

	/**
	 * Octal to decimal
	 * <p>Returns the decimal equivalent of the octal number represented by the <code>octal_string</code> argument.</p>
	 * @param string $octal_string <p>The octal string to convert. Any invalid characters in <code>octal_string</code> are silently ignored. As of PHP 7.4.0 supplying any invalid characters is deprecated.</p>
	 * @return int|float <p>The decimal representation of <code>octal_string</code></p>
	 * @link https://php.net/manual/en/function.octdec.php
	 * @see decoct(), bindec(), hexdec(), base_convert()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function octdec(string $octal_string): int|float {}

	/**
	 * Get value of pi
	 * <p>Returns an approximation of pi. Also, you can use the <b><code>M_PI</code></b> constant which yields identical results to <b>pi()</b>.</p>
	 * @return float <p>The value of pi as float.</p>
	 * @link https://php.net/manual/en/function.pi.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pi(): float {}

	/**
	 * Exponential expression
	 * <p>Returns <code>base</code> raised to the power of <code>exp</code>.</p><p><b>Note</b>:</p><p>In PHP 5.6 onwards, you may prefer to use the &#42;&#42; operator.</p>
	 * @param int|float $base <p>The base to use</p>
	 * @param int|float $exp <p>The exponent</p>
	 * @return int|float <p><code>base</code> raised to the power of <code>exp</code>. If both arguments are non-negative integers and the result can be represented as an integer, the result will be returned with <code>int</code> type, otherwise it will be returned as a <code>float</code>.</p>
	 * @link https://php.net/manual/en/function.pow.php
	 * @see exp(), sqrt(), bcpow(), gmp_pow()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pow(int|float $base, int|float $exp): int|float {}

	/**
	 * Converts the radian number to the equivalent number in degrees
	 * <p>This function converts <code>number</code> from radian to degrees.</p>
	 * @param float $number <p>A radian value</p>
	 * @return float <p>The equivalent of <code>number</code> in degrees</p>
	 * @link https://php.net/manual/en/function.rad2deg.php
	 * @see deg2rad()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rad2deg(float $number): float {}

	/**
	 * Generate a random integer
	 * <p>If called without the optional <code>min</code>, <code>max</code> arguments <b>rand()</b> returns a pseudo-random integer between 0 and <code>getrandmax()</code>. If you want a random number between 5 and 15 (inclusive), for example, use <code>rand(5, 15)</code>.</p><p>This function does not generate cryptographically secure values, and should not be used for cryptographic purposes. If you need a cryptographically secure value, consider using <code>random_int()</code>, <code>random_bytes()</code>, or <code>openssl_random_pseudo_bytes()</code> instead.</p><p><b>Note</b>:  On some platforms (such as Windows), <code>getrandmax()</code> is only 32767. If you require a range larger than 32767, specifying <code>min</code> and <code>max</code> will allow you to create a range larger than this, or consider using <code>mt_rand()</code> instead. </p><p><b>Note</b>: As of PHP 7.1.0, <b>rand()</b> uses the same random number generator as <code>mt_rand()</code>. To preserve backwards compatibility <b>rand()</b> allows <code>max</code> to be smaller than <code>min</code> as opposed to returning <b><code>FALSE</code></b> as <code>mt_rand()</code>.</p>
	 * @return int <p>A pseudo random value between <code>min</code> (or 0) and <code>max</code> (or <code>getrandmax()</code>, inclusive).</p>
	 * @link https://php.net/manual/en/function.rand.php
	 * @see srand(), getrandmax(), mt_rand(), random_int(), random_bytes(), openssl_random_pseudo_bytes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rand(): int {}

	/**
	 * Rounds a float
	 * <p>Returns the rounded value of <code>val</code> to specified <code>precision</code> (number of digits after the decimal point). <code>precision</code> can also be negative or zero (default).</p>
	 * @param float $val <p>The value to round.</p>
	 * @param int $precision <p>The optional number of decimal digits to round to.</p> <p>If the <code>precision</code> is positive, <code>val</code> is rounded to <code>precision</code> significant digits after the decimal point.</p> <p>If the <code>precision</code> is negative, <code>val</code> is rounded to <code>precision</code> significant digits before the decimal point, i.e. to the nearest multiple of <code>pow(10, -precision)</code>, e.g. for a <code>precision</code> of -1 <code>val</code> is rounded to tens, for a <code>precision</code> of -2 to hundreds, etc.</p>
	 * @param int $mode <p>Use one of the following constants to specify the mode in which rounding occurs.</p>   Constants Description     <b><code>PHP_ROUND_HALF_UP</code></b>  Rounds <code>val</code> away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2.    <b><code>PHP_ROUND_HALF_DOWN</code></b>  Rounds <code>val</code> towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1.    <b><code>PHP_ROUND_HALF_EVEN</code></b>  Rounds <code>val</code> towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2.    <b><code>PHP_ROUND_HALF_ODD</code></b>  Rounds <code>val</code> towards the nearest odd value when it is half way there, making 1.5 into 1 and and 2.5 into 3.
	 * @return float <p>The value rounded to the given <code>precision</code> as a <code>float</code>.</p>
	 * @link https://php.net/manual/en/function.round.php
	 * @see ceil(), floor(), number_format()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function round(float $val, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float {}

	/**
	 * Sine
	 * <p><b>sin()</b> returns the sine of the <code>arg</code> parameter. The <code>arg</code> parameter is in radians.</p>
	 * @param float $arg <p>A value in radians</p>
	 * @return float <p>The sine of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.sin.php
	 * @see asin(), sinh(), cos(), tan(), deg2rad()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sin(float $arg): float {}

	/**
	 * Hyperbolic sine
	 * <p>Returns the hyperbolic sine of <code>arg</code>, defined as <code>(exp(arg) - exp(-arg))/2</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The hyperbolic sine of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.sinh.php
	 * @see sin(), asinh(), cosh(), tanh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function sinh(float $arg): float {}

	/**
	 * Square root
	 * <p>Returns the square root of <code>arg</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The square root of <code>arg</code> or the special value <code>NAN</code> for negative numbers.</p>
	 * @link https://php.net/manual/en/function.sqrt.php
	 * @see pow()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sqrt(float $arg): float {}

	/**
	 * Seed the random number generator
	 * <p>Seeds the random number generator with <code>seed</code> or with a random value if no <code>seed</code> is given.</p><p><b>Note</b>: There is no need to seed the random number generator with <b>srand()</b> or <code>mt_srand()</code> as this is done automatically. </p><p><b>Note</b>: As of PHP 7.1.0, <b>srand()</b> has been made an alias of <code>mt_srand()</code>.</p>
	 * @param int $seed <p>An arbitrary <code>int</code> seed value.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.srand.php
	 * @see rand(), getrandmax(), mt_srand()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function srand(int $seed = NULL): void {}

	/**
	 * Tangent
	 * <p><b>tan()</b> returns the tangent of the <code>arg</code> parameter. The <code>arg</code> parameter is in radians.</p>
	 * @param float $arg <p>The argument to process in radians</p>
	 * @return float <p>The tangent of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.tan.php
	 * @see atan(), atan2(), sin(), cos(), tanh(), deg2rad()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function tan(float $arg): float {}

	/**
	 * Hyperbolic tangent
	 * <p>Returns the hyperbolic tangent of <code>arg</code>, defined as <code>sinh(arg)/cosh(arg)</code>.</p>
	 * @param float $arg <p>The argument to process</p>
	 * @return float <p>The hyperbolic tangent of <code>arg</code></p>
	 * @link https://php.net/manual/en/function.tanh.php
	 * @see tan(), atanh(), sinh(), cosh()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function tanh(float $arg): float {}

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
	 * PHP 5.2.0
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
	 * PHP 5.2.0
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
	 * PHP 5.2.0
	 */
	define('M_SQRT3', 1.7320508075689);

	/**
	 * PHP 5.2.0
	 */
	define('M_SQRTPI', 1.7724538509055);

	/**
	 * Not A Number
	 */
	define('NAN', NAN);

	/**
	 * PHP 5.3.0
	 */
	define('PHP_ROUND_HALF_DOWN', 2);

	/**
	 * PHP 5.3.0
	 */
	define('PHP_ROUND_HALF_EVEN', 3);

	/**
	 * PHP 5.3.0
	 */
	define('PHP_ROUND_HALF_ODD', 4);

	/**
	 * PHP 5.3.0
	 */
	define('PHP_ROUND_HALF_UP', 1);

}
