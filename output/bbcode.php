<?php



namespace {

	/**
	 * Adds a bbcode element
	 * <p>Adds a tag to an existing BBCode_Container tag_set using tag_rules.</p>
	 * @param resource $bbcode_container <p>BBCode_Container resource, returned by <code>bbcode_create()</code>.</p>
	 * @param string $tag_name <p>The new tag to add to the BBCode_Container tag_set.</p>
	 * @param array $tag_rules <p>An associative array containing the parsing rules; see <code>bbcode_create()</code> for the available keys.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bbcode-add-element.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_add_element($bbcode_container, string $tag_name, array $tag_rules): bool {}

	/**
	 * Adds a smiley to the parser
	 * <p>Adds a smiley to the parser</p>
	 * @param resource $bbcode_container <p>BBCode_Container resource, returned by <code>bbcode_create()</code>.</p>
	 * @param string $smiley <p>The string that will be replaced when found.</p>
	 * @param string $replace_by <p>The string that replace smiley when found.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bbcode-add-smiley.php
	 * @since PECL bbcode >= 0.10.2
	 */
	function bbcode_add_smiley($bbcode_container, string $smiley, string $replace_by): bool {}

	/**
	 * Create a BBCode Resource
	 * <p>This function returns a new BBCode Resource used to parse BBCode strings.</p>
	 * @param array $bbcode_initial_tags <p>An associative array containing the tag names as keys and parameters required to correctly parse BBCode as their value. The following key/value pairs are supported:</p><ul> <li>  flags optional - a flag set based on the BBCODE_FLAGS_&#42; constants.  </li> <li>  type required - an int indicating the type of tag. Use the BBCODE_TYPE_&#42; constants.  </li> <li>  open_tag required - the HTML replacement string for the open tag.  </li> <li>  close_tag required - the HTML replacement string for the close tag.  </li> <li>  default_arg optional - use this value as the default argument if none is provided and tag_type is of type OPTARG.  </li> <li>  content_handling optional - Gives the callback used for modification of the content. Object Oriented Notation supported only since 0.10.1 callback prototype is string name<i>(string $content, string $argument)</i>  </li> <li>  param_handling optional - Gives the callback used for modification of the argument. Object Oriented Notation supported only since 0.10.1 callback prototype is string name<i>(string $content, string $argument)</i>  </li> <li>  childs optional - List of accepted children for the tag. The format of the list is a comma separated string. If the list starts with ! it will be the list of rejected children for the tag.  </li> <li>  parent optional - List of accepted parents for the tag. The format of the list is a comma separated string.  </li> </ul>
	 * @return resource <p>Returns a BBCode_Container</p>
	 * @link http://php.net/manual/en/function.bbcode-create.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_create(array $bbcode_initial_tags = NULL) {}

	/**
	 * Close BBCode_container resource
	 * <p>This function closes the resource opened by <code>bbcode_create()</code>.</p>
	 * @param resource $bbcode_container <p>BBCode_Container resource returned by <code>bbcode_create()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bbcode-destroy.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_destroy($bbcode_container): bool {}

	/**
	 * Parse a string following a given rule set
	 * <p>This function parse the string to_parse following the rules in the bbcode_container created by <code>bbcode_create()</code></p>
	 * @param resource $bbcode_container <p>BBCode_Container resource returned by <code>bbcode_create()</code>.</p>
	 * @param string $to_parse <p>The string we need to parse.</p>
	 * @return string <p>Returns the parsed string, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bbcode-parse.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_parse($bbcode_container, string $to_parse): string {}

	/**
	 * Attach another parser in order to use another rule set for argument parsing
	 * <p>Attaches another parser to the bbcode_container. This parser is used only when arguments must be parsed. If this function is not used, the default argument parser is the parser itself.</p>
	 * @param resource $bbcode_container <p>BBCode_Container resource, returned by <code>bbcode_create()</code>.</p>
	 * @param resource $bbcode_arg_parser <p>BBCode_Container resource, returned by <code>bbcode_create()</code>. It will be used only for parsed arguments</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bbcode-set-arg-parser.php
	 * @since PECL bbcode >= 0.10.2
	 */
	function bbcode_set_arg_parser($bbcode_container, $bbcode_arg_parser): bool {}

	/**
	 * Set or alter parser options
	 * <p>Set or alter parser options</p>
	 * @param resource $bbcode_container <p>BBCode_Container resource, returned by <code>bbcode_create()</code>.</p>
	 * @param int $flags <p>The flag set that must be applied to the bbcode_container options</p>
	 * @param int $mode <p>One of the BBCODE_SET_FLAGS_&#42; constant to set, unset a specific flag set or to replace the flag set by flags.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.bbcode-set-flags.php
	 * @since PECL bbcode >= 0.10.2
	 */
	function bbcode_set_flags($bbcode_container, int $flags, int $mode = BBCODE_SET_FLAGS_SET): bool {}

	/**
	 * This is a parser option allowing argument quoting with double quotes (<i>"</i>)
	 */
	define('BBCODE_ARG_DOUBLE_QUOTE', null);

	/**
	 * This is a parser option allowing argument quoting with HTML version of double quotes (<i>&amp;quot;</i>)
	 */
	define('BBCODE_ARG_HTML_QUOTE', null);

	/**
	 * This is a parser option allowing argument quotes to be escaped this permit the quote delimiter to be found in the string escaping character is \ it can escape any quoting character or itself, if found in front of a non escapable character, it will be dropped. Default behaviour is not to use escaping.
	 */
	define('BBCODE_ARG_QUOTE_ESCAPING', null);

	/**
	 * This is a parser option allowing argument quoting with single quotes (<i>'</i>)
	 */
	define('BBCODE_ARG_SINGLE_QUOTE', null);

	/**
	 * This is a parser option changing the way errors are treated. It automatically closes tag in the order they are opened. And treat tags with only an open tag as if there were a close tag present.
	 */
	define('BBCODE_AUTO_CORRECT', null);

	/**
	 * This is a parser option changing the way errors are treated. It automatically reopens tag if close tags are not in the good order.
	 */
	define('BBCODE_CORRECT_REOPEN_TAGS', null);

	/**
	 * This is a parser option setting smileys to OFF if no flag is given at tag level.
	 */
	define('BBCODE_DEFAULT_SMILEYS_OFF', null);

	/**
	 * This is a parser option setting smileys to ON if no flag is given at tag level.
	 */
	define('BBCODE_DEFAULT_SMILEYS_ON', null);

	/**
	 * This is a parser option disabling the BBCode parsing it can be useful if only the "smiley" replacement must be used.
	 */
	define('BBCODE_DISABLE_TREE_BUILD', null);

	/**
	 * This BBCode tag require argument sub-parsing (the argument is also parsed by the BBCode extension). As Of 0.10.2 another parser can be used as argument parser.
	 */
	define('BBCODE_FLAGS_ARG_PARSING', null);

	/**
	 * This BBCode Tag does not accept content (it voids it automatically).
	 */
	define('BBCODE_FLAGS_CDATA_NOT_ALLOWED', null);

	/**
	 * This BBCode Tag does not allow unclosed children to reopen when automatically closed.
	 */
	define('BBCODE_FLAGS_DENY_REOPEN_CHILD', null);

	/**
	 * This BBCode Tag automatically closes if another tag of the same type is found at the same nesting level.
	 */
	define('BBCODE_FLAGS_ONE_OPEN_PER_LEVEL', null);

	/**
	 * This BBCode Tag is automatically removed if content is empty it allows to produce lighter HTML.
	 */
	define('BBCODE_FLAGS_REMOVE_IF_EMPTY', null);

	/**
	 * This BBCode Tag does not accept smileys.
	 */
	define('BBCODE_FLAGS_SMILEYS_OFF', null);

	/**
	 * This BBCode Tag accepts smileys.
	 */
	define('BBCODE_FLAGS_SMILEYS_ON', null);

	/**
	 * This is a parser option disabling completely the smileys parsing.
	 */
	define('BBCODE_FORCE_SMILEYS_OFF', null);

	/**
	 * This permits to switch a flag set ON on a parser.
	 */
	define('BBCODE_SET_FLAGS_ADD', null);

	/**
	 * This permits to switch a flag set OFF on a parser.
	 */
	define('BBCODE_SET_FLAGS_REMOVE', null);

	/**
	 * This permits to SET the complete flag set on a parser.
	 */
	define('BBCODE_SET_FLAGS_SET', null);

	/**
	 * Use a case insensitive Detection for smileys instead of a simple binary search.
	 */
	define('BBCODE_SMILEYS_CASE_INSENSITIVE', null);

	/**
	 * This BBCode tag need an argument.
	 */
	define('BBCODE_TYPE_ARG', null);

	/**
	 * This BBCode tag does not accept any arguments.
	 */
	define('BBCODE_TYPE_NOARG', null);

	/**
	 * This BBCode tag accept an optional argument.
	 */
	define('BBCODE_TYPE_OPTARG', null);

	/**
	 * This BBCode tag is the special tag root (nesting level 0).
	 */
	define('BBCODE_TYPE_ROOT', null);

	/**
	 * This BBCode tag does not have a corresponding close tag.
	 */
	define('BBCODE_TYPE_SINGLE', null);

}
