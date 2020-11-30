<?php



namespace {

	/**
	 * Performs an obscure check with the given password
	 * <p>Performs an obscure check with the given password on the specified dictionary. The alternative signature also takes into account the username and the GECOS information.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param resource $dictionary <p>The crack lib dictionary. If not specified, the last opened dictionary is used.</p>
	 * @param string $password <p>The password to be checked.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>password</code> is strong, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.crack-check.php
	 * @since PECL crack >= 0.1
	 */
	function crack_check($dictionary, string $password): bool {}

	/**
	 * Closes an open CrackLib dictionary
	 * <p><b>crack_closedict()</b> closes the specified <code>dictionary</code> identifier.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @param resource $dictionary <p>The dictionary to close. If not specified, the current dictionary is closed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.crack-closedict.php
	 * @see crack_opendict()
	 * @since PECL crack >= 0.1
	 */
	function crack_closedict($dictionary = NULL): bool {}

	/**
	 * Returns the message from the last obscure check
	 * <p><b>crack_getlastmessage()</b> returns the message from the last obscure check.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p>
	 * @return string <p>The message from the last obscure check or <b><code>FALSE</code></b> if there was no obscure checks made so far.</p><p>The returned message is one of:</p><ul> <li>  <i>it's WAY too short</i>  </li> <li>  <i>it is too short</i>  </li> <li>  <i>it does not contain enough DIFFERENT characters</i>  </li> <li>  <i>it is all whitespace</i>  </li> <li>  <i>it is too simplistic/systematic</i>  </li> <li>  <i>it looks like a National Insurance number.</i>  </li> <li>  <i>it is based on a dictionary word</i>  </li> <li>  <i>it is based on a (reversed) dictionary word</i>  </li> <li>  <i>strong password</i>  </li> </ul>
	 * @link http://php.net/manual/en/function.crack-getlastmessage.php
	 * @see crack_check()
	 * @since PECL crack >= 0.1
	 */
	function crack_getlastmessage(): string {}

	/**
	 * Opens a new CrackLib dictionary
	 * <p><b>crack_opendict()</b> opens the specified CrackLib <code>dictionary</code> for use with <code>crack_check()</code>.</p><p>This function is <i>EXPERIMENTAL</i>. The behaviour of this function, its name, and surrounding documentation may change without notice in a future release of PHP. This function should be used at your own risk.</p><p><b>Note</b>:</p><p>Only one dictionary may be open at a time.</p>
	 * @param string $dictionary <p>The path to the Cracklib dictionary.</p>
	 * @return resource <p>Returns a dictionary resource identifier on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.crack-opendict.php
	 * @see crack_check(), crack_closedict()
	 * @since PECL crack >= 0.1
	 */
	function crack_opendict(string $dictionary) {}

}
