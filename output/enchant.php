<?php



namespace {

	/**
	 * Enumerates the Enchant providers
	 * <p>Enumerates the Enchant providers and tells you some rudimentary information about them. The same info is provided through phpinfo().</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @return array|false <p>Returns an <code>array</code> of available Enchant providers with their details, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-describe.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
	 */
	function enchant_broker_describe($broker): array|false {}

	/**
	 * Whether a dictionary exists or not. Using non-empty tag
	 * <p>Tells if a dictionary exists or not, using a non-empty tags</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @param string $tag <p>non-empty tag in the LOCALE format, ex: us_US, ch_DE, etc.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> when the tag exist or <b><code>FALSE</code></b> when not.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-dict-exists.php
	 * @see enchant_broker_describe()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_dict_exists($broker, string $tag): bool {}

	/**
	 * Free the broker resource and its dictionaries
	 * <p>Free a broker resource with all its dictionaries.</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-free.php
	 * @see enchant_broker_init()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_free($broker): bool {}

	/**
	 * Free a dictionary resource
	 * <p>Free a dictionary resource.</p>
	 * @param resource $dict <p>Dictionary resource.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-free-dict.php
	 * @see enchant_broker_request_dict(), enchant_broker_request_pwl_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_free_dict($dict): bool {}

	/**
	 * Get the directory path for a given backend
	 * <p>Get the directory path for a given backend.</p>
	 * @param resource $broker <p>Broker resource.</p>
	 * @param int $dict_type <p>The type of the dictionaries, i.e. <b><code>ENCHANT_MYSPELL</code></b> or <b><code>ENCHANT_ISPELL</code></b>.</p>
	 * @return bool <p>Returns the path of the dictionary directory on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-get-dict-path.php
	 * @see enchant_broker_set_dict_path()
	 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_get_dict_path($broker, int $dict_type): bool {}

	/**
	 * Returns the last error of the broker
	 * <p>Returns the last error which occurred in this broker.</p>
	 * @param resource $broker <p>Broker resource.</p>
	 * @return string <p>Return the msg string if an error was found or <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/en/function.enchant-broker-get-error.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_get_error($broker): string {}

	/**
	 * Create a new broker object capable of requesting
	 * @return resource <p>Returns a broker resource on success or <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-init.php
	 * @see enchant_broker_free()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_init() {}

	/**
	 * Returns a list of available dictionaries
	 * <p>Returns a list of available dictionaries with their details.</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @return mixed <p>Returns an <code>array</code> of available dictionaries with their details, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-list-dicts.php
	 * @see enchant_broker_describe()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_list_dicts($broker): mixed {}

	/**
	 * Create a new dictionary using a tag
	 * <p>create a new dictionary using tag, the non-empty language tag you wish to request a dictionary for ("en_US", "de_DE", ...)</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @param string $tag <p>A tag describing the locale, for example en_US, de_DE</p>
	 * @return resource|false <p>Returns a dictionary resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-request-dict.php
	 * @see enchant_dict_describe(), enchant_broker_dict_exists(), enchant_broker_free_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_request_dict($broker, string $tag) {}

	/**
	 * Creates a dictionary using a PWL file
	 * <p>Creates a dictionary using a PWL file. A PWL file is personal word file one word per line.</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @param string $filename <p>Path to the PWL file. If there is no such file, a new one will be created if possible.</p>
	 * @return resource|false <p>Returns a dictionary resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-request-pwl-dict.php
	 * @see enchant_dict_describe(), enchant_broker_dict_exists(), enchant_broker_free_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_request_pwl_dict($broker, string $filename) {}

	/**
	 * Set the directory path for a given backend
	 * <p>Set the directory path for a given backend.</p>
	 * @param resource $broker <p>Broker resource.</p>
	 * @param int $dict_type <p>The type of the dictionaries, i.e. <b><code>ENCHANT_MYSPELL</code></b> or <b><code>ENCHANT_ISPELL</code></b>.</p>
	 * @param string $value <p>The path of the dictionary directory.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-set-dict-path.php
	 * @see enchant_broker_get_dict_path()
	 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_set_dict_path($broker, int $dict_type, string $value): bool {}

	/**
	 * Declares a preference of dictionaries to use for the language
	 * <p>Declares a preference of dictionaries to use for the language described/referred to by 'tag'. The ordering is a comma delimited list of provider names. As a special exception, the "&#42;" tag can be used as a language tag to declare a default ordering for any language that does not explicitly declare an ordering.</p>
	 * @param resource $broker <p>Broker resource</p>
	 * @param string $tag <p>Language tag. The special "&#42;" tag can be used as a language tag to declare a default ordering for any language that does not explicitly declare an ordering.</p>
	 * @param string $ordering <p>Comma delimited list of provider names</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-set-ordering.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_set_ordering($broker, string $tag, string $ordering): bool {}

	/**
	 * Add a word to personal word list
	 * <p>Add a word to personal word list of the given dictionary.</p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $word <p>The word to add</p>
	 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-add-to-personal.php
	 * @see enchant_broker_request_pwl_dict(), enchant_broker_request_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_add_to_personal($dict, string $word): void {}

	/**
	 * Add 'word' to this spell-checking session
	 * <p>Add a word to the given dictionary. It will be added only for the active spell-checking session.</p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $word <p>The word to add</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-add-to-session.php
	 * @see enchant_broker_request_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_add_to_session($dict, string $word): void {}

	/**
	 * Check whether a word is correctly spelled or not
	 * <p>If the word is correctly spelled return <b><code>TRUE</code></b>, otherwise return <b><code>FALSE</code></b></p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $word <p>The word to check</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the word is spelled correctly, <b><code>FALSE</code></b> if not.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-check.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_check($dict, string $word): bool {}

	/**
	 * Describes an individual dictionary
	 * <p>Returns the details of the dictionary.</p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-describe.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_describe($dict): mixed {}

	/**
	 * Returns the last error of the current spelling-session
	 * <p>Returns the last error of the current spelling-session</p>
	 * @param resource $dict <p>Dictinaray resource</p>
	 * @return string <p>Returns the error message as string or <b><code>FALSE</code></b> if no error occurred.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-get-error.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_get_error($dict): string {}

	/**
	 * Whether or not 'word' exists in this spelling-session
	 * <p>Tells whether or not a word already exists in the current session.</p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $word <p>The word to lookup</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the word exists or <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/en/function.enchant-dict-is-in-session.php
	 * @see enchant_dict_add_to_session()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_is_in_session($dict, string $word): bool {}

	/**
	 * Check the word is correctly spelled and provide suggestions
	 * <p>If the word is correctly spelled return <b><code>TRUE</code></b>, otherwise return <b><code>FALSE</code></b>, if suggestions variable is provided, fill it with spelling alternatives.</p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $word <p>The word to check</p>
	 * @param array $suggestions <p>If the word is not correctly spelled, this variable will contain an array of suggestions.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the word is correctly spelled or <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/en/function.enchant-dict-quick-check.php
	 * @see enchant_dict_check(), enchant_dict_suggest()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1
	 */
	function enchant_dict_quick_check($dict, string $word, array &$suggestions = NULL): bool {}

	/**
	 * Add a correction for a word
	 * <p>Add a correction for 'mis' using 'cor'. Notes that you replaced @mis with @cor, so it's possibly more likely that future occurrences of @mis will be replaced with @cor. So it might bump @cor up in the suggestion list.</p>
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $mis <p>The work to fix</p>
	 * @param string $cor <p>The correct word</p>
	 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-store-replacement.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_store_replacement($dict, string $mis, string $cor): void {}

	/**
	 * Will return a list of values if any of those pre-conditions are not met
	 * @param resource $dict <p>Dictionary resource</p>
	 * @param string $word <p>Word to use for the suggestions.</p>
	 * @return array <p>Will returns an array of suggestions if the word is bad spelled.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-suggest.php
	 * @see enchant_dict_check(), enchant_dict_quick_check()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_suggest($dict, string $word): array {}

	/**
	 * Dictionary type for Ispell. Used with <code>enchant_broker_get_dict_path()</code> and <code>enchant_broker_set_dict_path()</code>.
	 */
	define('ENCHANT_ISPELL', null);

	/**
	 * Dictionary type for MySpell. Used with <code>enchant_broker_get_dict_path()</code> and <code>enchant_broker_set_dict_path()</code>.
	 */
	define('ENCHANT_MYSPELL', null);

}
