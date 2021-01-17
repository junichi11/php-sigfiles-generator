<?php



namespace {

	/**
	 * <p>A fully opaque class which replaces <code>xml</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.xmlparser.php
	 * @since PHP 8
	 */
	final class XmlParser {
	}

	/**
	 * Converts a string with ISO-8859-1 characters encoded with UTF-8 to single-byte ISO-8859-1
	 * <p>This function converts the string <code>string</code> from the <code>UTF-8</code> encoding to <code>ISO-8859-1</code>. Bytes in the string which are not valid <code>UTF-8</code>, and <code>UTF-8</code> characters which do not exist in <code>ISO-8859-1</code> (that is, characters above <code>U+00FF</code>) are replaced with <code>&#63;</code>.</p><p><b>Note</b>:</p><p>Many web pages marked as using the <code>ISO-8859-1</code> character encoding actually use the similar <code>Windows-1252</code> encoding, and web browsers will interpret <code>ISO-8859-1</code> web pages as <code>Windows-1252</code>. <code>Windows-1252</code> features additional printable characters, such as the Euro sign (<code>&euro;</code>) and curly quotes (<code>&ldquo;</code> <code>&rdquo;</code>), instead of certain <code>ISO-8859-1</code> control characters. This function will not convert such <code>Windows-1252</code> characters correctly. Use a different function if <code>Windows-1252</code> conversion is required.</p>
	 * @param string $string <p>A UTF-8 encoded string.</p>
	 * @return string <p>Returns the ISO-8859-1 translation of <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.utf8-decode.php
	 * @see utf8_encode(), mb_convert_encoding(), iconv(), recode_string()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function utf8_decode(string $string): string {}

	/**
	 * Encodes an ISO-8859-1 string to UTF-8
	 * <p>This function converts the string <code>string</code> from the <code>ISO-8859-1</code> encoding to <code>UTF-8</code>.</p><p><b>Note</b>:</p><p>Many web pages marked as using the <code>ISO-8859-1</code> character encoding actually use the similar <code>Windows-1252</code> encoding, and web browsers will interpret <code>ISO-8859-1</code> web pages as <code>Windows-1252</code>. <code>Windows-1252</code> features additional printable characters, such as the Euro sign (<code>&euro;</code>) and curly quotes (<code>&ldquo;</code> <code>&rdquo;</code>), instead of certain <code>ISO-8859-1</code> control characters. This function will not convert such <code>Windows-1252</code> characters correctly. Use a different function if <code>Windows-1252</code> conversion is required.</p>
	 * @param string $string <p>An ISO-8859-1 string.</p>
	 * @return string <p>Returns the UTF-8 translation of <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.utf8-encode.php
	 * @see utf8_decode(), mb_convert_encoding(), iconv(), recode_string()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function utf8_encode(string $string): string {}

	/**
	 * Get XML parser error string
	 * <p>Gets the XML parser error string associated with the given <code>error_code</code>.</p>
	 * @param int $error_code <p>An error code from <code>xml_get_error_code()</code>.</p>
	 * @return string|null <p>Returns a string with a textual description of the error <code>error_code</code>, or <b><code>false</code></b> if no description was found.</p>
	 * @link https://php.net/manual/en/function.xml-error-string.php
	 * @see xml_get_error_code()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_error_string(int $error_code): string|null {}

	/**
	 * Get current byte index for an XML parser
	 * <p>Gets the current byte index of the given XML parser.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to get byte index from.</p>
	 * @return int <p>This function returns <b><code>false</code></b> if <code>parser</code> does not refer to a valid parser, or else it returns which byte index the parser is currently at in its data buffer (starting at 0).</p>
	 * @link https://php.net/manual/en/function.xml-get-current-byte-index.php
	 * @see xml_get_current_column_number(), xml_get_current_line_number()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_get_current_byte_index(\XMLParser $parser): int {}

	/**
	 * Get current column number for an XML parser
	 * <p>Gets the current column number of the given XML parser.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to get column number from.</p>
	 * @return int <p>This function returns <b><code>false</code></b> if <code>parser</code> does not refer to a valid parser, or else it returns which column on the current line (as given by <code>xml_get_current_line_number()</code>) the parser is currently at.</p>
	 * @link https://php.net/manual/en/function.xml-get-current-column-number.php
	 * @see xml_get_current_byte_index(), xml_get_current_line_number()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_get_current_column_number(\XMLParser $parser): int {}

	/**
	 * Get current line number for an XML parser
	 * <p>Gets the current line number for the given XML parser.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to get line number from.</p>
	 * @return int <p>This function returns <b><code>false</code></b> if <code>parser</code> does not refer to a valid parser, or else it returns which line the parser is currently at in its data buffer.</p>
	 * @link https://php.net/manual/en/function.xml-get-current-line-number.php
	 * @see xml_get_current_column_number(), xml_get_current_byte_index()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_get_current_line_number(\XMLParser $parser): int {}

	/**
	 * Get XML parser error code
	 * <p>Gets the XML parser error code.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to get error code from.</p>
	 * @return int <p>This function returns <b><code>false</code></b> if <code>parser</code> does not refer to a valid parser, or else it returns one of the error codes listed in the error codes section.</p>
	 * @link https://php.net/manual/en/function.xml-get-error-code.php
	 * @see xml_error_string()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_get_error_code(\XMLParser $parser): int {}

	/**
	 * Start parsing an XML document
	 * <p><b>xml_parse()</b> parses an XML document. The handlers for the configured events are called as many times as necessary.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to use.</p>
	 * @param string $data <p>Chunk of data to parse. A document may be parsed piece-wise by calling <b>xml_parse()</b> several times with new data, as long as the <code>is_final</code> parameter is set and <b><code>true</code></b> when the last data is parsed.</p>
	 * @param bool $is_final <p>If set and <b><code>true</code></b>, <code>data</code> is the last piece of data sent in this parse.</p>
	 * @return int <p>Returns 1 on success or 0 on failure.</p><p>For unsuccessful parses, error information can be retrieved with <code>xml_get_error_code()</code>, <code>xml_error_string()</code>, <code>xml_get_current_line_number()</code>, <code>xml_get_current_column_number()</code> and <code>xml_get_current_byte_index()</code>.</p><p><b>Note</b>:</p><p>Some errors (such as entity errors) are reported at the end of the data, thus only if <code>is_final</code> is set and <b><code>true</code></b>.</p>
	 * @link https://php.net/manual/en/function.xml-parse.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_parse(\XMLParser $parser, string $data, bool $is_final = false): int {}

	/**
	 * Parse XML data into an array structure
	 * <p>This function parses an XML string into 2 parallel array structures, one (<code>index</code>) containing pointers to the location of the appropriate values in the <code>values</code> array. These last two parameters must be passed by reference.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser.</p>
	 * @param string $data <p>A string containing the XML data.</p>
	 * @param array $values <p>An array containing the values of the XML data</p>
	 * @param array $index <p>An array containing pointers to the location of the appropriate values in the $values.</p>
	 * @return int <p><b>xml_parse_into_struct()</b> returns 0 for failure and 1 for success. This is not the same as <b><code>false</code></b> and <b><code>true</code></b>, be careful with operators such as ===.</p>
	 * @link https://php.net/manual/en/function.xml-parse-into-struct.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_parse_into_struct(\XMLParser $parser, string $data, array &$values, array &$index = null): int {}

	/**
	 * Create an XML parser
	 * <p><b>xml_parser_create()</b> creates a new XML parser and returns a XMLParser instance to be used by the other XML functions.</p>
	 * @param string|null $encoding <p>The optional <code>encoding</code> specifies the character encoding for the input/output in PHP 4. Starting from PHP 5, the input encoding is automatically detected, so that the <code>encoding</code> parameter specifies only the output encoding. In PHP 4, the default output encoding is the same as the input charset. If empty string is passed, the parser attempts to identify which encoding the document is encoded in by looking at the heading 3 or 4 bytes. In PHP 5.0.0 and 5.0.1, the default output charset is ISO-8859-1, while in PHP 5.0.2 and upper is UTF-8. The supported encodings are <code>ISO-8859-1</code>, <code>UTF-8</code> and <code>US-ASCII</code>.</p>
	 * @return XMLParser <p>Returns a new XMLParser instance.</p>
	 * @link https://php.net/manual/en/function.xml-parser-create.php
	 * @see xml_parser_create_ns(), xml_parser_free()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_parser_create(string|null $encoding = null): \XMLParser {}

	/**
	 * Create an XML parser with namespace support
	 * <p><b>xml_parser_create_ns()</b> creates a new XML parser with XML namespace support and returns a XMLParser instance to be used by the other XML functions.</p>
	 * @param string|null $encoding <p>The input encoding is automatically detected, so that the <code>encoding</code> parameter specifies only the output encoding. In PHP 5.0.0 and 5.0.1, the default output charset is ISO-8859-1, while in PHP 5.0.2 and upper is UTF-8. The supported encodings are <code>ISO-8859-1</code>, <code>UTF-8</code> and <code>US-ASCII</code>.</p>
	 * @param string $separator <p>With a namespace aware parser tag parameters passed to the various handler functions will consist of namespace and tag name separated by the string specified in <code>separator</code>.</p>
	 * @return XMLParser <p>Returns a new XMLParser instance.</p>
	 * @link https://php.net/manual/en/function.xml-parser-create-ns.php
	 * @see xml_parser_create(), xml_parser_free()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function xml_parser_create_ns(string|null $encoding = null, string $separator = ":"): \XMLParser {}

	/**
	 * Free an XML parser
	 * <p>Frees the given XML <code>parser</code>.</p><p>In addition to calling <b>xml_parser_free()</b> when the parsing is finished, prior to PHP 8.0.0, it was necessary to also explicitly unset the reference to <code>parser</code> to avoid memory leaks, if the parser resource is referenced from an object, and this object references that parser resource.</p>
	 * @param \XMLParser $parser A reference to the XML parser to free.
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-parser-free.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_parser_free(\XMLParser $parser): bool {}

	/**
	 * Get options from an XML parser
	 * <p>Gets an option value from an XML parser.</p>
	 * @param \XMLParser $parser A reference to the XML parser to get an option from.
	 * @param int $option Which option to fetch. <b><code>XML_OPTION_CASE_FOLDING</code></b>, <b><code>XML_OPTION_SKIP_TAGSTART</code></b>, <b><code>XML_OPTION_SKIP_WHITE</code></b> and <b><code>XML_OPTION_TARGET_ENCODING</code></b> are available. See <code>xml_parser_set_option()</code> for their description.
	 * @return string|int <p>This function returns <b><code>false</code></b> if <code>parser</code> does not refer to a valid parser or if <code>option</code> isn't valid (generates also a <b><code>E_WARNING</code></b>). Else the option's value is returned.</p>
	 * @link https://php.net/manual/en/function.xml-parser-get-option.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_parser_get_option(\XMLParser $parser, int $option): string|int {}

	/**
	 * Set options in an XML parser
	 * <p>Sets an option in an XML parser.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set an option in.</p>
	 * @param int $option <p>Which option to set. See below.</p> <p>The following options are available:</p> <b>XML parser options</b>   Option constant Data type Description     <b><code>XML_OPTION_CASE_FOLDING</code></b> integer  Controls whether case-folding is enabled for this XML parser. Enabled by default.    <b><code>XML_OPTION_SKIP_TAGSTART</code></b> integer  Specify how many characters should be skipped in the beginning of a tag name.    <b><code>XML_OPTION_SKIP_WHITE</code></b> integer  Whether to skip values consisting of whitespace characters.    <b><code>XML_OPTION_TARGET_ENCODING</code></b> string  Sets which target encoding to use in this XML parser.By default, it is set to the same as the source encoding used by <code>xml_parser_create()</code>. Supported target encodings are <code>ISO-8859-1</code>, <code>US-ASCII</code> and <code>UTF-8</code>.
	 * @param string|int $value <p>The option's new value.</p>
	 * @return bool <p>This function returns <b><code>false</code></b> if <code>parser</code> does not refer to a valid parser, or if the option could not be set. Else the option is set and <b><code>true</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.xml-parser-set-option.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_parser_set_option(\XMLParser $parser, int $option, string|int $value): bool {}

	/**
	 * Set up character data handler
	 * <p>Sets the character data handler function for the XML parser <code>parser</code>.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up character data handler function.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept two parameters:</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$data</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>data</code>   The second parameter, <code>data</code>, contains the character data as a string.    <p>Character data handler is called for every piece of a text in the XML document. It can be called multiple times inside each fragment (e.g. for non-ASCII strings).</p> <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-character-data-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_character_data_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Set up default handler
	 * <p>Sets the default handler function for the XML parser <code>parser</code>.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up default handler function.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept two parameters:</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$data</code> )   <code>parser</code>    The first parameter, parser, is a reference to the XML parser calling the handler.    <code>data</code>    The second parameter, <code>data</code>, contains the character data.This may be the XML declaration, document type declaration, entities or other data for which no other handler exists.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-default-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_default_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Set up start and end element handlers
	 * <p>Sets the element handler functions for the XML <code>parser</code>. <code>start_handler</code> and <code>end_handler</code> are strings containing the names of functions that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up start and end element handler functions.</p>
	 * @param callable $start_handler <p>The function named by <code>start_handler</code> must accept three parameters:</p> start_element_handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$name</code> , <code>array</code> <code>$attribs</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>name</code>   The second parameter, <code>name</code>, contains the name of the element for which this handler is called.If case-folding is in effect for this parser, the element name will be in uppercase letters.    <code>attribs</code>   The third parameter, <code>attribs</code>, contains an associative array with the element's attributes (if any).The keys of this array are the attribute names, the values are the attribute values.Attribute names are case-folded on the same criteria as element names.Attribute values are <i>not</i> case-folded.   The original order of the attributes can be retrieved by walking through <code>attribs</code> the normal way, using <code>each()</code>.The first key in the array was the first attribute, and so on.    <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @param callable $end_handler <p>The function named by <code>end_handler</code> must accept two parameters:</p> end_element_handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$name</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>name</code>   The second parameter, <code>name</code>, contains the name of the element for which this handler is called.If case-folding is in effect for this parser, the element name will be in uppercase letters.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-element-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_element_handler(\XMLParser $parser, callable $start_handler, callable $end_handler): bool {}

	/**
	 * Set up end namespace declaration handler
	 * <p>Set a handler to be called when leaving the scope of a namespace declaration. This will be called, for each namespace declaration, after the handler for the end tag of the element in which the namespace was declared.</p><p>This event is not supported under libXML, so a registered handler wouldn't be called.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept two parameters, and should return an integer value. If the value returned from the handler is <b><code>false</code></b> (which it will be if no value is returned), the XML parser will stop parsing and <code>xml_get_error_code()</code> will return <b><code>XML_ERROR_EXTERNAL_ENTITY_HANDLING</code></b>.</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$prefix</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>prefix</code>   The prefix is a string used to reference the namespace within an XML object.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-end-namespace-decl-handler.php
	 * @see xml_set_start_namespace_decl_handler()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function xml_set_end_namespace_decl_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Set up external entity reference handler
	 * <p>Sets the external entity reference handler function for the XML parser <code>parser</code>.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up external entity reference handler function.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept five parameters, and should return an integer value.If the value returned from the handler is <b><code>false</code></b> (which it will be if no value is returned), the XML parser will stop parsing and <code>xml_get_error_code()</code> will return <b><code>XML_ERROR_EXTERNAL_ENTITY_HANDLING</code></b>.</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$open_entity_names</code> , <code>string</code> <code>$base</code> , <code>string</code> <code>$system_id</code> , <code>string</code> <code>$public_id</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>open_entity_names</code>   The second parameter, <code>open_entity_names</code>, is a space-separated list of the names of the entities that are open for the parse of this entity (including the name of the referenced entity).    <code>base</code>   This is the base for resolving the system identifier (<code>system_id</code>) of the external entity.Currently this parameter will always be set to an empty string.    <code>system_id</code>   The fourth parameter, <code>system_id</code>, is the system identifier as specified in the entity declaration.    <code>public_id</code>   The fifth parameter, <code>public_id</code>, is the public identifier as specified in the entity declaration, or an empty string if none was specified; the whitespace in the public identifier will have been normalized as required by the XML spec.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-external-entity-ref-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_external_entity_ref_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Set up notation declaration handler
	 * <p>Sets the notation declaration handler function for the XML parser <code>parser</code>.</p><p>A notation declaration is part of the document's DTD and has the following format:</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up notation declaration handler function.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept five parameters:</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$notation_name</code> , <code>string</code> <code>$base</code> , <code>string</code> <code>$system_id</code> , <code>string</code> <code>$public_id</code> )   <code>parser</code>    The first parameter, parser, is a reference to the XML parser calling the handler.    <code>notation_name</code>   This is the notation's <code>name</code>, as per the notation format described above.    <code>base</code>    This is the base for resolving the system identifier (<code>system_id</code>) of the notation declaration. Currently this parameter will always be set to an empty string.    <code>system_id</code>   System identifier of the external notation declaration.    <code>public_id</code>    Public identifier of the external notation declaration.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-notation-decl-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_notation_decl_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Use XML Parser within an object
	 * <p>This function allows to use <code>parser</code> inside <code>object</code>. All callback functions could be set with <code>xml_set_element_handler()</code> etc and assumed to be methods of <code>object</code>.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to use inside the object.</p>
	 * @param object $object <p>The object where to use the XML parser.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-object.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_object(\XMLParser $parser, object $object): bool {}

	/**
	 * Set up processing instruction (PI) handler
	 * <p>Sets the processing instruction (PI) handler function for the XML parser <code>parser</code>.</p><p>A processing instruction has the following format:</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up processing instruction (PI) handler function.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept three parameters:</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$target</code> , <code>string</code> <code>$data</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>target</code>   The second parameter, <code>target</code>, contains the PI target.    <code>data</code>   The third parameter, <code>data</code>, contains the PI data.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-processing-instruction-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_processing_instruction_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Set up start namespace declaration handler
	 * <p>Set a handler to be called when a namespace is declared. Namespace declarations occur inside start tags. But the namespace declaration start handler is called before the start tag handler for each namespace declared in that start tag.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept three parameters, and should return an integer value. If the value returned from the handler is <b><code>false</code></b> (which it will be if no value is returned), the XML parser will stop parsing and <code>xml_get_error_code()</code> will return <b><code>XML_ERROR_EXTERNAL_ENTITY_HANDLING</code></b>.</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$prefix</code> , <code>string</code> <code>$uri</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>prefix</code>   The prefix is a string used to reference the namespace within an XML object.    <code>uri</code>   Uniform Resource Identifier (URI) of namespace.    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-start-namespace-decl-handler.php
	 * @see xml_set_end_namespace_decl_handler()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function xml_set_start_namespace_decl_handler(\XMLParser $parser, callable $handler): bool {}

	/**
	 * Set up unparsed entity declaration handler
	 * <p>Sets the unparsed entity declaration handler function for the XML parser <code>parser</code>.</p><p>The <code>handler</code> will be called if the XML parser encounters an external entity declaration with an NDATA declaration, like the following:</p><p>See section 4.2.2 of the XML 1.0 spec for the definition of notation declared external entities.</p>
	 * @param \XMLParser $parser <p>A reference to the XML parser to set up unparsed entity declaration handler function.</p>
	 * @param callable $handler <p><code>handler</code> is a string containing the name of a function that must exist when <code>xml_parse()</code> is called for <code>parser</code>.</p> <p>The function named by <code>handler</code> must accept six parameters:</p> handler ( <code>XMLParser</code> <code>$parser</code> , <code>string</code> <code>$entity_name</code> , <code>string</code> <code>$base</code> , <code>string</code> <code>$system_id</code> , <code>string</code> <code>$public_id</code> , <code>string</code> <code>$notation_name</code> )   <code>parser</code>   The first parameter, parser, is a reference to the XML parser calling the handler.    <code>entity_name</code>   The name of the entity that is about to be defined.    <code>base</code>   This is the base for resolving the system identifier (<code>systemId</code>) of the external entity.Currently this parameter will always be set to an empty string.    <code>system_id</code>   System identifier for the external entity.    <code>public_id</code>   Public identifier for the external entity.    <code>notation_name</code>   Name of the notation of this entity (see <code>xml_set_notation_decl_handler()</code>).    <p>If a handler function is set to an empty string, or <b><code>false</code></b>, the handler in question is disabled.</p> <p><b>Note</b>: Instead of a function name, an array containing an object reference and a method name can also be supplied.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.xml-set-unparsed-entity-decl-handler.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, callable $handler): bool {}

	define('XML_ERROR_ASYNC_ENTITY', 13);

	define('XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF', 16);

	define('XML_ERROR_BAD_CHAR_REF', 14);

	define('XML_ERROR_BINARY_ENTITY_REF', 15);

	define('XML_ERROR_DUPLICATE_ATTRIBUTE', 8);

	define('XML_ERROR_EXTERNAL_ENTITY_HANDLING', 21);

	define('XML_ERROR_INCORRECT_ENCODING', 19);

	define('XML_ERROR_INVALID_TOKEN', 4);

	define('XML_ERROR_JUNK_AFTER_DOC_ELEMENT', 9);

	define('XML_ERROR_MISPLACED_XML_PI', 17);

	define('XML_ERROR_NO_ELEMENTS', 3);

	define('XML_ERROR_NO_MEMORY', 1);

	define('XML_ERROR_NONE', 0);

	define('XML_ERROR_PARAM_ENTITY_REF', 10);

	define('XML_ERROR_PARTIAL_CHAR', 6);

	define('XML_ERROR_RECURSIVE_ENTITY_REF', 12);

	define('XML_ERROR_SYNTAX', 2);

	define('XML_ERROR_TAG_MISMATCH', 7);

	define('XML_ERROR_UNCLOSED_CDATA_SECTION', 20);

	define('XML_ERROR_UNCLOSED_TOKEN', 5);

	define('XML_ERROR_UNDEFINED_ENTITY', 11);

	define('XML_ERROR_UNKNOWN_ENCODING', 18);

	define('XML_OPTION_CASE_FOLDING', 1);

	define('XML_OPTION_SKIP_TAGSTART', 3);

	define('XML_OPTION_SKIP_WHITE', 4);

	define('XML_OPTION_TARGET_ENCODING', 2);

	/**
	 * Holds the SAX implementation method. Can be <code>libxml</code> or <code>expat</code>.
	 */
	define('XML_SAX_IMPL', 'libxml');

}
