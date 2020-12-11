<?php



namespace {

	/**
	 * Returns the YAML representation of a value
	 * <p>Generate a YAML representation of the provided <code>data</code>.</p>
	 * @param mixed $data <p>The <code>data</code> being encoded. Can be any type except a <code>resource</code>.</p>
	 * @param int $encoding <p>Output character encoding chosen from <b><code>YAML_ANY_ENCODING</code></b>, <b><code>YAML_UTF8_ENCODING</code></b>, <b><code>YAML_UTF16LE_ENCODING</code></b>, <b><code>YAML_UTF16BE_ENCODING</code></b>.</p>
	 * @param int $linebreak <p>Output linebreak style chosen from <b><code>YAML_ANY_BREAK</code></b>, <b><code>YAML_CR_BREAK</code></b>, <b><code>YAML_LN_BREAK</code></b>, <b><code>YAML_CRLN_BREAK</code></b>.</p>
	 * @param array $callbacks <p>Content handlers for emitting YAML nodes. Associative <code>array</code> of classname =&gt; <code>callable</code> mappings. See emit callbacks for more details.</p>
	 * @return string <p>Returns a YAML encoded <code>string</code> on success.</p>
	 * @link https://php.net/manual/en/function.yaml-emit.php
	 * @see yaml_emit_file(), yaml_parse()
	 * @since PECL yaml >= 0.5.0
	 */
	function yaml_emit($data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = NULL): string {}

	/**
	 * Send the YAML representation of a value to a file
	 * <p>Generate a YAML representation of the provided <code>data</code> in the <code>filename</code>.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param mixed $data <p>The <code>data</code> being encoded. Can be any type except a <code>resource</code>.</p>
	 * @param int $encoding <p>Output character encoding chosen from <b><code>YAML_ANY_ENCODING</code></b>, <b><code>YAML_UTF8_ENCODING</code></b>, <b><code>YAML_UTF16LE_ENCODING</code></b>, <b><code>YAML_UTF16BE_ENCODING</code></b>.</p>
	 * @param int $linebreak <p>Output linebreak style chosen from <b><code>YAML_ANY_BREAK</code></b>, <b><code>YAML_CR_BREAK</code></b>, <b><code>YAML_LN_BREAK</code></b>, <b><code>YAML_CRLN_BREAK</code></b>.</p>
	 * @param array $callbacks <p>Content handlers for emitting YAML nodes. Associative <code>array</code> of classname =&gt; <code>callable</code> mappings. See emit callbacks for more details.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
	 * @link https://php.net/manual/en/function.yaml-emit-file.php
	 * @see yaml_emit(), yaml_parse()
	 * @since PECL yaml >= 0.5.0
	 */
	function yaml_emit_file(string $filename, $data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = NULL): bool {}

	/**
	 * Parse a YAML stream
	 * <p>Convert all or part of a YAML document stream to a PHP variable.</p>
	 * @param string $input <p>The <code>string</code> to parse as a YAML document stream.</p>
	 * @param int $pos <p>Document to extract from stream (<code>-1</code> for all documents, <code>0</code> for first document, ...).</p>
	 * @param int $ndocs <p>If <code>ndocs</code> is provided, then it is filled with the number of documents found in stream.</p>
	 * @param array $callbacks <p>Content handlers for YAML nodes. Associative <code>array</code> of YAML tag =&gt; <code>callable</code> mappings. See parse callbacks for more details.</p>
	 * @return mixed <p>Returns the value encoded in <code>input</code> in appropriate PHP type or <b><code>FALSE</code></b> on failure. If <code>pos</code> is <code>-1</code> an <code>array</code> will be returned with one entry for each document found in the stream.</p>
	 * @link https://php.net/manual/en/function.yaml-parse.php
	 * @see yaml_parse_file(), yaml_parse_url(), yaml_emit()
	 * @since PECL yaml >= 0.4.0
	 */
	function yaml_parse(string $input, int $pos = 0, int &$ndocs = NULL, array $callbacks = NULL) {}

	/**
	 * Parse a YAML stream from a file
	 * <p>Convert all or part of a YAML document stream read from a file to a PHP variable.</p>
	 * @param string $filename <p>Path to the file.</p>
	 * @param int $pos <p>Document to extract from stream (<code>-1</code> for all documents, <code>0</code> for first document, ...).</p>
	 * @param int $ndocs <p>If <code>ndocs</code> is provided, then it is filled with the number of documents found in stream.</p>
	 * @param array $callbacks <p>Content handlers for YAML nodes. Associative <code>array</code> of YAML tag =&gt; <code>callable</code> mappings. See parse callbacks for more details.</p>
	 * @return mixed <p>Returns the value encoded in <code>input</code> in appropriate PHP type or <b><code>FALSE</code></b> on failure. If <code>pos</code> is <code>-1</code> an <code>array</code> will be returned with one entry for each document found in the stream.</p>
	 * @link https://php.net/manual/en/function.yaml-parse-file.php
	 * @see yaml_parse(), yaml_parse_url(), yaml_emit()
	 * @since PECL yaml >= 0.4.0
	 */
	function yaml_parse_file(string $filename, int $pos = 0, int &$ndocs = NULL, array $callbacks = NULL) {}

	/**
	 * Parse a Yaml stream from a URL
	 * <p>Convert all or part of a YAML document stream read from a URL to a PHP variable.</p>
	 * @param string $url <p><code>url</code> should be of the form "scheme://...". PHP will search for a protocol handler (also known as a wrapper) for that scheme. If no wrappers for that protocol are registered, PHP will emit a notice to help you track potential problems in your script and then continue as though filename specifies a regular file.</p>
	 * @param int $pos <p>Document to extract from stream (<code>-1</code> for all documents, <code>0</code> for first document, ...).</p>
	 * @param int $ndocs <p>If <code>ndocs</code> is provided, then it is filled with the number of documents found in stream.</p>
	 * @param array $callbacks <p>Content handlers for YAML nodes. Associative <code>array</code> of YAML tag =&gt; <code>callable</code> mappings. See parse callbacks for more</p>
	 * @return mixed <p>Returns the value encoded in <code>input</code> in appropriate PHP type or <b><code>FALSE</code></b> on failure. If <code>pos</code> is <code>-1</code> an <code>array</code> will be returned with one entry for each document found in the stream.</p>
	 * @link https://php.net/manual/en/function.yaml-parse-url.php
	 * @see yaml_parse(), yaml_parse_file(), yaml_emit()
	 * @since PECL yaml >= 0.4.0
	 */
	function yaml_parse_url(string $url, int $pos = 0, int &$ndocs = NULL, array $callbacks = NULL) {}

	/**
	 * Let emitter choose linebreak character.
	 */
	define('YAML_ANY_BREAK', null);

	/**
	 * Let the emitter choose an encoding.
	 */
	define('YAML_ANY_ENCODING', null);

	define('YAML_ANY_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:bool"
	 */
	define('YAML_BOOL_TAG', null);

	/**
	 * Use <code>\r</code> as break character (Mac style).
	 */
	define('YAML_CR_BREAK', null);

	/**
	 * Use <code>\r\n</code> as break character (DOS style).
	 */
	define('YAML_CRLN_BREAK', null);

	define('YAML_DOUBLE_QUOTED_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:float"
	 */
	define('YAML_FLOAT_TAG', null);

	define('YAML_FOLDED_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:int"
	 */
	define('YAML_INT_TAG', null);

	define('YAML_LITERAL_SCALAR_STYLE', null);

	/**
	 * Use <code>\n</code> as break character (Unix style).
	 */
	define('YAML_LN_BREAK', null);

	/**
	 * "tag:yaml.org,2002:map"
	 */
	define('YAML_MAP_TAG', null);

	/**
	 * "tag:yaml.org,2002:null"
	 */
	define('YAML_NULL_TAG', null);

	/**
	 * "!php/object"
	 */
	define('YAML_PHP_TAG', null);

	define('YAML_PLAIN_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:seq"
	 */
	define('YAML_SEQ_TAG', null);

	define('YAML_SINGLE_QUOTED_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:str"
	 */
	define('YAML_STR_TAG', null);

	/**
	 * "tag:yaml.org,2002:timestamp"
	 */
	define('YAML_TIMESTAMP_TAG', null);

	/**
	 * Encode as UTF16BE.
	 */
	define('YAML_UTF16BE_ENCODING', null);

	/**
	 * Encode as UTF16LE.
	 */
	define('YAML_UTF16LE_ENCODING', null);

	/**
	 * Encode as UTF8.
	 */
	define('YAML_UTF8_ENCODING', null);

}
