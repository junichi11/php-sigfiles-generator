<?php



namespace {

	/**
	 * Perform a regular expression search and replace
	 * <p><b>preg_filter()</b> is identical to <code>preg_replace()</code> except it only returns the (possibly transformed) subjects where there was a match. For details about how this function works, read the <code>preg_replace()</code> documentation.</p>
	 * @param string|array $pattern
	 * @param string|array $replacement
	 * @param string|array $subject
	 * @param int $limit
	 * @param int $count
	 * @return string|array|null <p>Returns an <code>array</code> if the <code>subject</code> parameter is an <code>array</code>, or a <code>string</code> otherwise.</p><p>If no matches are found or an error occurred, an empty <code>array</code> is returned when <code>subject</code> is an <code>array</code> or <b><code>null</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.preg-filter.php
	 * @see preg_quote(), preg_replace(), preg_replace_callback(), preg_grep(), preg_last_error()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function preg_filter(string|array $pattern, string|array $replacement, string|array $subject, int $limit = -1, int &$count = null): string|array|null {}

	/**
	 * Return array entries that match the pattern
	 * <p>Returns the array consisting of the elements of the <code>array</code> array that match the given <code>pattern</code>.</p>
	 * @param string $pattern <p>The pattern to search for, as a string.</p>
	 * @param array $array <p>The input array.</p>
	 * @param int $flags <p>If set to <b><code>PREG_GREP_INVERT</code></b>, this function returns the elements of the input array that do <i>not</i> match the given <code>pattern</code>.</p>
	 * @return array|false <p>Returns an array indexed using the keys from the <code>array</code> array, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.preg-grep.php
	 * @see preg_quote(), preg_match_all(), preg_filter(), preg_last_error()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function preg_grep(string $pattern, array $array, int $flags = 0): array|false {}

	/**
	 * Returns the error code of the last PCRE regex execution
	 * <p>Returns the error code of the last PCRE regex execution.</p><p></p><p><b>Example #1 <b>preg_last_error()</b> example</b></p><p>The above example will output:</p>
	 * @return int <p>Returns one of the following constants (explained on their own page):</p><ul> <li><b><code>PREG_NO_ERROR</code></b></li> <li><b><code>PREG_INTERNAL_ERROR</code></b></li> <li><b><code>PREG_BACKTRACK_LIMIT_ERROR</code></b> (see also pcre.backtrack_limit)</li> <li><b><code>PREG_RECURSION_LIMIT_ERROR</code></b> (see also pcre.recursion_limit)</li> <li><b><code>PREG_BAD_UTF8_ERROR</code></b></li> <li><b><code>PREG_BAD_UTF8_OFFSET_ERROR</code></b></li> <li><b><code>PREG_JIT_STACKLIMIT_ERROR</code></b></li> </ul>
	 * @link https://php.net/manual/en/function.preg-last-error.php
	 * @see preg_last_error_msg()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function preg_last_error(): int {}

	/**
	 * Returns the error message of the last PCRE regex execution
	 * <p>Returns the error message of the last PCRE regex execution.</p>
	 * @return string <p>Returns the error message on success, or <code>"No error"</code> if no error has occurred.</p>
	 * @link https://php.net/manual/en/function.preg-last-error-msg.php
	 * @see preg_last_error()
	 * @since PHP 8
	 */
	function preg_last_error_msg(): string {}

	/**
	 * Perform a regular expression match
	 * <p>Searches <code>subject</code> for a match to the regular expression given in <code>pattern</code>.</p>
	 * @param string $pattern <p>The pattern to search for, as a string.</p>
	 * @param string $subject <p>The input string.</p>
	 * @param array $matches <p>If <code>matches</code> is provided, then it is filled with the results of search. $matches[0] will contain the text that matched the full pattern, $matches[1] will have the text that matched the first captured parenthesized subpattern, and so on.</p>
	 * @param int $flags <p><code>flags</code> can be a combination of the following flags:</p>  <b><code>PREG_OFFSET_CAPTURE</code></b>  <p>If this flag is passed, for every occurring match the appendant string offset (in bytes) will also be returned. Note that this changes the value of <code>matches</code> into an array where every element is an array consisting of the matched string at offset <code>0</code> and its string offset into <code>subject</code> at offset <code>1</code>.</p>  <code> &lt;&#63;php<br>preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> Array ( [0] =&gt; Array ( [0] =&gt; foobarbaz [1] =&gt; 0 ) [1] =&gt; Array ( [0] =&gt; foo [1] =&gt; 0 ) [2] =&gt; Array ( [0] =&gt; bar [1] =&gt; 3 ) [3] =&gt; Array ( [0] =&gt; baz [1] =&gt; 6 ) ) </pre>     <b><code>PREG_UNMATCHED_AS_NULL</code></b>  <p>If this flag is passed, unmatched subpatterns are reported as <b><code>null</code></b>; otherwise they are reported as an empty <code>string</code>.</p>  <code> &lt;&#63;php<br>preg_match('/(a)(b)&#42;(c)/', 'ac', $matches);<br>var_dump($matches);<br>preg_match('/(a)(b)&#42;(c)/', 'ac', $matches, PREG_UNMATCHED_AS_NULL);<br>var_dump($matches);<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> array(4) { [0]=&gt; string(2) "ac" [1]=&gt; string(1) "a" [2]=&gt; string(0) "" [3]=&gt; string(1) "c" } array(4) { [0]=&gt; string(2) "ac" [1]=&gt; string(1) "a" [2]=&gt; NULL [3]=&gt; string(1) "c" } </pre>
	 * @param int $offset <p>Normally, the search starts from the beginning of the subject string. The optional parameter <code>offset</code> can be used to specify the alternate place from which to start the search (in bytes).</p> <p><b>Note</b>:</p><p>Using <code>offset</code> is not equivalent to passing <code>substr($subject, $offset)</code> to <b>preg_match()</b> in place of the subject string, because <code>pattern</code> can contain assertions such as <i>^</i>, <i>$</i> or <i>(&#63;&lt;=x)</i>. Compare:</p>  <code> &lt;&#63;php<br>$subject = "abcdef";<br>$pattern = '/^def/';<br>preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> Array ( ) </pre>  <p>while this example</p>  <code> &lt;&#63;php<br>$subject = "abcdef";<br>$pattern = '/^def/';<br>preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>will produce</p>  <pre> Array ( [0] =&gt; Array ( [0] =&gt; def [1] =&gt; 0 ) ) </pre>  <p>Alternatively, to avoid using <code>substr()</code>, use the <code>\G</code> assertion rather than the <code>^</code> anchor, or the <code>A</code> modifier instead, both of which work with the <code>offset</code> parameter.</p>
	 * @return int|false <p><b>preg_match()</b> returns 1 if the <code>pattern</code> matches given <code>subject</code>, 0 if it does not, or <b><code>false</code></b> on failure.</p><p><b>Warning</b></p><p>This function may return Boolean <b><code>false</code></b>, but may also return a non-Boolean value which evaluates to <b><code>false</code></b>. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.</p>
	 * @link https://php.net/manual/en/function.preg-match.php
	 * @see preg_quote(), preg_match_all(), preg_replace(), preg_split(), preg_last_error(), preg_last_error_msg()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function preg_match(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int|false {}

	/**
	 * Perform a global regular expression match
	 * <p>Searches <code>subject</code> for all matches to the regular expression given in <code>pattern</code> and puts them in <code>matches</code> in the order specified by <code>flags</code>.</p><p>After the first match is found, the subsequent searches are continued on from end of the last match.</p>
	 * @param string $pattern <p>The pattern to search for, as a string.</p>
	 * @param string $subject <p>The input string.</p>
	 * @param array $matches <p>Array of all matches in multi-dimensional array ordered according to <code>flags</code>.</p>
	 * @param int $flags <p>Can be a combination of the following flags (note that it doesn't make sense to use <b><code>PREG_PATTERN_ORDER</code></b> together with <b><code>PREG_SET_ORDER</code></b>):</p>  <b><code>PREG_PATTERN_ORDER</code></b>  <p>Orders results so that $matches[0] is an array of full pattern matches, $matches[1] is an array of strings matched by the first parenthesized subpattern, and so on.</p> <p></p>  <code> &lt;&#63;php<br>preg_match_all("|&lt;[^&gt;]+&gt;(.&#42;)&lt;/[^&gt;]+&gt;|U",<br> "&lt;b&gt;example: &lt;/b&gt;&lt;div align=left&gt;this is a test&lt;/div&gt;",<br> $out, PREG_PATTERN_ORDER);<br>echo $out[0][0] . ", " . $out[0][1] . "\n";<br>echo $out[1][0] . ", " . $out[1][1] . "\n";<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> &lt;b&gt;example: &lt;/b&gt;, &lt;div align=left&gt;this is a test&lt;/div&gt; example: , this is a test </pre>  <p>So, $out[0] contains array of strings that matched full pattern, and $out[1] contains array of strings enclosed by tags.</p>  <p>If the pattern contains named subpatterns, $matches additionally contains entries for keys with the subpattern name.</p> <p>If the pattern contains duplicate named subpatterns, only the rightmost subpattern is stored in $matches[NAME].</p>  <code> &lt;&#63;php<br>preg_match_all(<br> '/(&#63;J)(&#63;&lt;match&gt;foo)|(&#63;&lt;match&gt;bar)/',<br> 'foo bar',<br> $matches,<br> PREG_PATTERN_ORDER<br>);<br>print_r($matches['match']);<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> Array ( [0] =&gt; [1] =&gt; bar ) </pre>     <b><code>PREG_SET_ORDER</code></b>  <p>Orders results so that $matches[0] is an array of first set of matches, $matches[1] is an array of second set of matches, and so on.</p>  <code> &lt;&#63;php<br>preg_match_all("|&lt;[^&gt;]+&gt;(.&#42;)&lt;/[^&gt;]+&gt;|U",<br> "&lt;b&gt;example: &lt;/b&gt;&lt;div align=\"left\"&gt;this is a test&lt;/div&gt;",<br> $out, PREG_SET_ORDER);<br>echo $out[0][0] . ", " . $out[0][1] . "\n";<br>echo $out[1][0] . ", " . $out[1][1] . "\n";<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> &lt;b&gt;example: &lt;/b&gt;, example: &lt;div align="left"&gt;this is a test&lt;/div&gt;, this is a test </pre>     <b><code>PREG_OFFSET_CAPTURE</code></b>  <p>If this flag is passed, for every occurring match the appendant string offset (in bytes) will also be returned. Note that this changes the value of <code>matches</code> into an array of arrays where every element is an array consisting of the matched string at offset <code>0</code> and its string offset into <code>subject</code> at offset <code>1</code>.</p>  <code> &lt;&#63;php<br>preg_match_all('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> Array ( [0] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; foobarbaz [1] =&gt; 0 ) ) [1] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; foo [1] =&gt; 0 ) ) [2] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; bar [1] =&gt; 3 ) ) [3] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; baz [1] =&gt; 6 ) ) ) </pre>     <b><code>PREG_UNMATCHED_AS_NULL</code></b>  <p>If this flag is passed, unmatched subpatterns are reported as <b><code>null</code></b>; otherwise they are reported as an empty <code>string</code>.</p>   <p>If no order flag is given, <b><code>PREG_PATTERN_ORDER</code></b> is assumed.</p>
	 * @param int $offset <p>Normally, the search starts from the beginning of the subject string. The optional parameter <code>offset</code> can be used to specify the alternate place from which to start the search (in bytes).</p> <p><b>Note</b>:</p><p>Using <code>offset</code> is not equivalent to passing <code>substr($subject, $offset)</code> to <b>preg_match_all()</b> in place of the subject string, because <code>pattern</code> can contain assertions such as <i>^</i>, <i>$</i> or <i>(&#63;&lt;=x)</i>. See <code>preg_match()</code> for examples.</p>
	 * @return int|false <p>Returns the number of full pattern matches (which might be zero), or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.preg-match-all.php
	 * @see preg_quote(), preg_match(), preg_replace(), preg_split(), preg_last_error()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function preg_match_all(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int|false {}

	/**
	 * Quote regular expression characters
	 * <p><b>preg_quote()</b> takes <code>str</code> and puts a backslash in front of every character that is part of the regular expression syntax. This is useful if you have a run-time string that you need to match in some text and the string may contain special regex characters.</p><p>The special regular expression characters are: <code>. \ + &#42; &#63; [ ^ ] $ ( ) { } = ! &lt; &gt; | : - #</code></p><p>Note that <code>/</code> is not a special regular expression character.</p><p><b>Note</b>:</p><p>Note that <b>preg_quote()</b> is not meant to be applied to the $replacement string(s) of <code>preg_replace()</code> etc.</p>
	 * @param string $str <p>The input string.</p>
	 * @param ?string $delimiter <p>If the optional <code>delimiter</code> is specified, it will also be escaped. This is useful for escaping the delimiter that is required by the PCRE functions. The <code>/</code> is the most commonly used delimiter.</p>
	 * @return string <p>Returns the quoted (escaped) string.</p>
	 * @link https://php.net/manual/en/function.preg-quote.php
	 * @see escapeshellcmd()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function preg_quote(string $str, ?string $delimiter = null): string {}

	/**
	 * Perform a regular expression search and replace
	 * <p>Searches <code>subject</code> for matches to <code>pattern</code> and replaces them with <code>replacement</code>.</p><p>To match an exact string, rather than a pattern, consider using <code>str_replace()</code> or <code>str_ireplace()</code> instead of this function.</p>
	 * @param string|array $pattern <p>The pattern to search for. It can be either a string or an array with strings.</p> <p>Several PCRE modifiers are also available.</p>
	 * @param string|array $replacement <p>The string or an array with strings to replace. If this parameter is a string and the <code>pattern</code> parameter is an array, all patterns will be replaced by that string. If both <code>pattern</code> and <code>replacement</code> parameters are arrays, each <code>pattern</code> will be replaced by the <code>replacement</code> counterpart. If there are fewer elements in the <code>replacement</code> array than in the <code>pattern</code> array, any extra <code>pattern</code>s will be replaced by an empty string.</p> <p><code>replacement</code> may contain references of the form <code>\n</code> or <code>$n</code>, with the latter form being the preferred one. Every such reference will be replaced by the text captured by the n'th parenthesized pattern. n can be from 0 to 99, and <code>\0</code> or <code>$0</code> refers to the text matched by the whole pattern. Opening parentheses are counted from left to right (starting from 1) to obtain the number of the capturing subpattern. Note that backslashes in <code>string</code> literals may require to be escaped.</p> <p>When working with a replacement pattern where a backreference is immediately followed by another number (i.e.: placing a literal number immediately after a matched pattern), you cannot use the familiar <code>\1</code> notation for your backreference. <code>\11</code>, for example, would confuse <b>preg_replace()</b> since it does not know whether you want the <code>\1</code> backreference followed by a literal <code>1</code>, or the <code>\11</code> backreference followed by nothing. In this case the solution is to use <code>${1}1</code>. This creates an isolated <code>$1</code> backreference, leaving the <code>1</code> as a literal.</p> <p>When using the deprecated <code>e</code> modifier, this function escapes some characters (namely <code>'</code>, <code>"</code>, <code>\</code> and NULL) in the strings that replace the backreferences. This is done to ensure that no syntax errors arise from backreference usage with either single or double quotes (e.g. <code>'strlen(\'$1\')+strlen("$2")'</code>). Make sure you are aware of PHP's string syntax to know exactly how the interpreted string will look.</p>
	 * @param string|array $subject <p>The string or an array with strings to search and replace.</p> <p>If <code>subject</code> is an array, then the search and replace is performed on every entry of <code>subject</code>, and the return value is an array as well.</p> <p>If the <code>subject</code> array is associative, keys will be preserved in the returned value.</p>
	 * @param int $limit <p>The maximum possible replacements for each pattern in each <code>subject</code> string. Defaults to <code>-1</code> (no limit).</p>
	 * @param int $count <p>If specified, this variable will be filled with the number of replacements done.</p>
	 * @return string|array|null <p><b>preg_replace()</b> returns an array if the <code>subject</code> parameter is an array, or a string otherwise.</p><p>If matches are found, the new <code>subject</code> will be returned, otherwise <code>subject</code> will be returned unchanged or <b><code>null</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/function.preg-replace.php
	 * @see preg_quote(), preg_filter(), preg_match(), preg_replace_callback(), preg_split(), preg_last_error(), str_replace()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function preg_replace(string|array $pattern, string|array $replacement, string|array $subject, int $limit = -1, int &$count = null): string|array|null {}

	/**
	 * Perform a regular expression search and replace using a callback
	 * <p>The behavior of this function is almost identical to <code>preg_replace()</code>, except for the fact that instead of <code>replacement</code> parameter, one should specify a <code>callback</code>.</p>
	 * @param string|array $pattern <p>The pattern to search for. It can be either a string or an array with strings.</p>
	 * @param callable $callback <p>A callback that will be called and passed an array of matched elements in the <code>subject</code> string. The callback should return the replacement string. This is the callback signature:</p> <p></p> handler(<code>array</code> <code>$matches</code>): <code>string</code> <p>You'll often need the <code>callback</code> function for a <b>preg_replace_callback()</b> in just one place. In this case you can use an anonymous function to declare the callback within the call to <b>preg_replace_callback()</b>. By doing it this way you have all information for the call in one place and do not clutter the function namespace with a callback function's name not used anywhere else.</p> <p></p> <p><b>Example #1 <b>preg_replace_callback()</b> and anonymous function</b></p>  <code> &lt;&#63;php<br>/&#42; a unix-style command line filter to convert uppercase<br> &#42; letters at the beginning of paragraphs to lowercase &#42;/<br>$fp = fopen("php://stdin", "r") or die("can't read stdin");<br>while (!feof($fp)) {<br> $line = fgets($fp);<br> $line = preg_replace_callback(<br> '|&lt;p&gt;\s&#42;\w|',<br> function ($matches) {<br> return strtolower($matches[0]);<br> },<br> $line<br> );<br> echo $line;<br>}<br>fclose($fp);<br>&#63;&gt;  </code>
	 * @param string|array $subject <p>The string or an array with strings to search and replace.</p>
	 * @param int $limit <p>The maximum possible replacements for each pattern in each <code>subject</code> string. Defaults to <code>-1</code> (no limit).</p>
	 * @param int $count <p>If specified, this variable will be filled with the number of replacements done.</p>
	 * @param int $flags <p><code>flags</code> can be a combination of the <b><code>PREG_OFFSET_CAPTURE</code></b> and <b><code>PREG_UNMATCHED_AS_NULL</code></b> flags, which influence the format of the matches array. See the description in <code>preg_match()</code> for more details.</p>
	 * @return string|array|null <p><b>preg_replace_callback()</b> returns an array if the <code>subject</code> parameter is an array, or a string otherwise. On errors the return value is <b><code>null</code></b></p><p>If matches are found, the new subject will be returned, otherwise <code>subject</code> will be returned unchanged.</p>
	 * @link https://php.net/manual/en/function.preg-replace-callback.php
	 * @see preg_replace_callback_array(), preg_quote(), preg_replace(), preg_last_error()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8
	 */
	function preg_replace_callback(string|array $pattern, callable $callback, string|array $subject, int $limit = -1, int &$count = null, int $flags = 0): string|array|null {}

	/**
	 * Perform a regular expression search and replace using callbacks
	 * <p>The behavior of this function is similar to <code>preg_replace_callback()</code>, except that callbacks are executed on a per-pattern basis.</p>
	 * @param array $pattern <p>An associative array mapping patterns (keys) to <code>callable</code>s (values).</p>
	 * @param string|array $subject <p>The string or an array with strings to search and replace.</p>
	 * @param int $limit <p>The maximum possible replacements for each pattern in each <code>subject</code> string. Defaults to <code>-1</code> (no limit).</p>
	 * @param int $count <p>If specified, this variable will be filled with the number of replacements done.</p>
	 * @param int $flags <p><code>flags</code> can be a combination of the <b><code>PREG_OFFSET_CAPTURE</code></b> and <b><code>PREG_UNMATCHED_AS_NULL</code></b> flags, which influence the format of the matches array. See the description in <code>preg_match()</code> for more details.</p>
	 * @return string|array|null <p><b>preg_replace_callback_array()</b> returns an array if the <code>subject</code> parameter is an array, or a string otherwise. On errors the return value is <b><code>null</code></b></p><p>If matches are found, the new subject will be returned, otherwise <code>subject</code> will be returned unchanged.</p>
	 * @link https://php.net/manual/en/function.preg-replace-callback-array.php
	 * @see preg_replace_callback(), preg_quote(), preg_replace(), preg_last_error()
	 * @since PHP 7, PHP 8
	 */
	function preg_replace_callback_array(array $pattern, string|array $subject, int $limit = -1, int &$count = null, int $flags = 0): string|array|null {}

	/**
	 * Split string by a regular expression
	 * <p>Split the given string by a regular expression.</p>
	 * @param string $pattern <p>The pattern to search for, as a string.</p>
	 * @param string $subject <p>The input string.</p>
	 * @param int $limit <p>If specified, then only substrings up to <code>limit</code> are returned with the rest of the string being placed in the last substring. A <code>limit</code> of -1 or 0 means "no limit".</p>
	 * @param int $flags <p><code>flags</code> can be any combination of the following flags (combined with the <code>|</code> bitwise operator):</p>  <b><code>PREG_SPLIT_NO_EMPTY</code></b>   If this flag is set, only non-empty pieces will be returned by <b>preg_split()</b>.    <b><code>PREG_SPLIT_DELIM_CAPTURE</code></b>   If this flag is set, parenthesized expression in the delimiter pattern will be captured and returned as well.    <b><code>PREG_SPLIT_OFFSET_CAPTURE</code></b>  <p>If this flag is set, for every occurring match the appendant string offset will also be returned. Note that this changes the return value in an array where every element is an array consisting of the matched string at offset <code>0</code> and its string offset into <code>subject</code> at offset <code>1</code>.</p>
	 * @return array|false <p>Returns an array containing substrings of <code>subject</code> split along boundaries matched by <code>pattern</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.preg-split.php
	 * @see preg_quote(), implode(), preg_match(), preg_match_all(), preg_replace(), preg_last_error()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function preg_split(string $pattern, string $subject, int $limit = -1, int $flags = 0): array|false {}

	/**
	 * 5.2.4
	 */
	define('PCRE_VERSION', '10.40 2022-04-14');

	/**
	 * 5.2.0
	 */
	define('PREG_BACKTRACK_LIMIT_ERROR', 2);

	/**
	 * 5.2.0
	 */
	define('PREG_BAD_UTF8_ERROR', 4);

	/**
	 * 5.3.0
	 */
	define('PREG_BAD_UTF8_OFFSET_ERROR', 5);

	/**
	 * 5.2.0
	 */
	define('PREG_INTERNAL_ERROR', 1);

	/**
	 * 7.0.0
	 */
	define('PREG_JIT_STACKLIMIT_ERROR', 6);

	/**
	 * 5.2.0
	 */
	define('PREG_NO_ERROR', 0);

	/**
	 * See the description of <b><code>PREG_SPLIT_OFFSET_CAPTURE</code></b>.
	 */
	define('PREG_OFFSET_CAPTURE', 256);

	/**
	 * Orders results so that $matches[0] is an array of full pattern matches, $matches[1] is an array of strings matched by the first parenthesized subpattern, and so on. This flag is only used with <code>preg_match_all()</code>.
	 */
	define('PREG_PATTERN_ORDER', 1);

	/**
	 * 5.2.0
	 */
	define('PREG_RECURSION_LIMIT_ERROR', 3);

	/**
	 * Orders results so that $matches[0] is an array of first set of matches, $matches[1] is an array of second set of matches, and so on. This flag is only used with <code>preg_match_all()</code>.
	 */
	define('PREG_SET_ORDER', 2);

	/**
	 * This flag tells <code>preg_split()</code> to capture parenthesized expression in the delimiter pattern as well.
	 */
	define('PREG_SPLIT_DELIM_CAPTURE', 2);

	/**
	 * This flag tells <code>preg_split()</code> to return only non-empty pieces.
	 */
	define('PREG_SPLIT_NO_EMPTY', 1);

	/**
	 * If this flag is set, for every occurring match the appendant string offset will also be returned. Note that this changes the return values in an array where every element is an array consisting of the matched string at offset 0 and its string offset within subject at offset 1. This flag is only used for <code>preg_split()</code>.
	 */
	define('PREG_SPLIT_OFFSET_CAPTURE', 4);

	/**
	 * 7.2.0
	 */
	define('PREG_UNMATCHED_AS_NULL', 512);

}
