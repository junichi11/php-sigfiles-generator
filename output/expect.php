<?php



namespace {

	/**
	 * Waits until the output from a process matches one of the patterns, a specified time period has passed, or an EOF is seen
	 * <p>Waits until the output from a process matches one of the patterns, a specified time period has passed, or an EOF is seen.</p><p>If <code>match</code> is provided, then it is filled with the result of search. The matched string can be found in <code>match[0]</code>. The match substrings (according to the parentheses) in the original pattern can be found in <code>match[1]</code>, <code>match[2]</code>, and so on, up to <code>match[9]</code> (the limitation of libexpect).</p>
	 * @param resource $expect <p>An Expect stream, previously opened with <code>expect_popen()</code>.</p>
	 * @param array $cases <p>An array of expect cases. Each expect case is an indexed array, as described in the following table:</p> <b>Expect Case Array</b>   Index Key Value Type Description Is Mandatory Default Value     0 string pattern, that will be matched against the output from the stream yes &#xA0;   1 mixed value, that will be returned by this function, if the pattern matches yes &#xA0;   2 integer  pattern type, one of: <b><code>EXP_GLOB</code></b>, <b><code>EXP_EXACT</code></b> or <b><code>EXP_REGEXP</code></b>  no <b><code>EXP_GLOB</code></b>
	 * @param array $match
	 * @return int <p>Returns value associated with the pattern that was matched.</p><p>On failure this function returns: <b><code>EXP_EOF</code></b>, <b><code>EXP_TIMEOUT</code></b> or <b><code>EXP_FULLBUFFER</code></b></p>
	 * @link https://php.net/manual/en/function.expect-expectl.php
	 * @see expect_popen()
	 * @since PECL expect >= 0.1.0
	 */
	function expect_expectl($expect, array $cases, array &$match = null): int {}

	/**
	 * Execute command via Bourne shell, and open the PTY stream to the process
	 * <p>Execute command via Bourne shell, and open the PTY stream to the process.</p>
	 * @param string $command <p>Command to execute.</p>
	 * @return resource <p>Returns an open PTY stream to the processes <code>stdio</code>, <code>stdout</code>, and <code>stderr</code>.</p><p>On failure this function returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.expect-popen.php
	 * @see popen()
	 * @since PECL expect >= 0.1.0
	 */
	function expect_popen(string $command) {}

	/**
	 * Value, returned by <code>expect_expectl()</code>, when EOF is reached.
	 */
	define('EXP_EOF', null);

	/**
	 * Indicates that the pattern is an exact string.
	 */
	define('EXP_EXACT', null);

	/**
	 * Value, returned by <code>expect_expectl()</code> if no pattern have been matched.
	 */
	define('EXP_FULLBUFFER', null);

	/**
	 * Indicates that the pattern is a glob-style string pattern.
	 */
	define('EXP_GLOB', null);

	/**
	 * Indicates that the pattern is a regexp-style string pattern.
	 */
	define('EXP_REGEXP', null);

	/**
	 * Value, returned by <code>expect_expectl()</code> upon timeout of seconds, specified in value of expect.timeout
	 */
	define('EXP_TIMEOUT', null);

}
