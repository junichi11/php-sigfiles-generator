<?php



namespace {

	/**
	 * <p>A fully opaque class which replaces <code>enchant_broker</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.enchantbroker.php
	 * @since PHP 8
	 */
	final class EnchantBroker {
	}

	/**
	 * <p>A fully opaque class which replaces <code>enchant_dict</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.enchantdictionary.php
	 * @since PHP 8
	 */
	final class EnchantDictionary {
	}

	/**
	 * Enumerates the Enchant providers
	 * <p>Enumerates the Enchant providers and tells you some rudimentary information about them. The same info is provided through phpinfo().</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @return array <p>Returns an <code>array</code> of available Enchant providers with their details.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-describe.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
	 */
	function enchant_broker_describe(\EnchantBroker $broker): array {}

	/**
	 * Whether a dictionary exists or not. Using non-empty tag
	 * <p>Tells if a dictionary exists or not, using a non-empty tags</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @param string $tag <p>non-empty tag in the LOCALE format, ex: us_US, ch_DE, etc.</p>
	 * @return bool <p>Returns <b><code>true</code></b> when the tag exist or <b><code>false</code></b> when not.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-dict-exists.php
	 * @see enchant_broker_describe()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_dict_exists(\EnchantBroker $broker, string $tag): bool {}

	/**
	 * Free the broker resource and its dictionaries
	 * <p>Free a broker with all its dictionaries. As of PHP 8.0.0, it is recommended to unset the object instead of calling this function.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-free.php
	 * @see enchant_broker_init()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_free(\EnchantBroker $broker): bool {}

	/**
	 * Free a dictionary resource
	 * <p>Free a dictionary. As of PHP 8.0.0, it is recommended to unset the object instead of calling this function.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-free-dict.php
	 * @see enchant_broker_request_dict(), enchant_broker_request_pwl_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_free_dict(\EnchantDictionary $dictionary): bool {}

	/**
	 * Get the directory path for a given backend
	 * <p>Get the directory path for a given backend.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @param int $type <p>The type of the dictionaries, i.e. <b><code>ENCHANT_MYSPELL</code></b> or <b><code>ENCHANT_ISPELL</code></b>.</p>
	 * @return string|false <p>Returns the path of the dictionary directory on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-get-dict-path.php
	 * @see enchant_broker_set_dict_path()
	 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_get_dict_path(\EnchantBroker $broker, int $type): string|false {}

	/**
	 * Returns the last error of the broker
	 * <p>Returns the last error which occurred in this broker.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @return string|false <p>Return the msg string if an error was found or <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.enchant-broker-get-error.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_get_error(\EnchantBroker $broker): string|false {}

	/**
	 * Create a new broker object capable of requesting
	 * @return EnchantBroker|false <p>Returns a broker resource on success or <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-init.php
	 * @see enchant_broker_free()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_init(): \EnchantBroker|false {}

	/**
	 * Returns a list of available dictionaries
	 * <p>Returns a list of available dictionaries with their details.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @return array <p>Returns an <code>array</code> of available dictionaries with their details.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-list-dicts.php
	 * @see enchant_broker_describe()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_list_dicts(\EnchantBroker $broker): array {}

	/**
	 * Create a new dictionary using a tag
	 * <p>create a new dictionary using tag, the non-empty language tag you wish to request a dictionary for ("en_US", "de_DE", ...)</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @param string $tag <p>A tag describing the locale, for example en_US, de_DE</p>
	 * @return EnchantDictionary|false <p>Returns a dictionary resource on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-request-dict.php
	 * @see enchant_dict_describe(), enchant_broker_dict_exists(), enchant_broker_free_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_request_dict(\EnchantBroker $broker, string $tag): \EnchantDictionary|false {}

	/**
	 * Creates a dictionary using a PWL file
	 * <p>Creates a dictionary using a PWL file. A PWL file is personal word file one word per line.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @param string $filename <p>Path to the PWL file. If there is no such file, a new one will be created if possible.</p>
	 * @return EnchantDictionary|false <p>Returns a dictionary resource on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-request-pwl-dict.php
	 * @see enchant_dict_describe(), enchant_broker_dict_exists(), enchant_broker_free_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_request_pwl_dict(\EnchantBroker $broker, string $filename): \EnchantDictionary|false {}

	/**
	 * Set the directory path for a given backend
	 * <p>Set the directory path for a given backend.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @param int $type <p>The type of the dictionaries, i.e. <b><code>ENCHANT_MYSPELL</code></b> or <b><code>ENCHANT_ISPELL</code></b>.</p>
	 * @param string $path <p>The path of the dictionary directory.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-set-dict-path.php
	 * @see enchant_broker_get_dict_path()
	 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_set_dict_path(\EnchantBroker $broker, int $type, string $path): bool {}

	/**
	 * Declares a preference of dictionaries to use for the language
	 * <p>Declares a preference of dictionaries to use for the language described/referred to by 'tag'. The ordering is a comma delimited list of provider names. As a special exception, the "&#42;" tag can be used as a language tag to declare a default ordering for any language that does not explicitly declare an ordering.</p>
	 * @param \EnchantBroker $broker <p>An Enchant broker returned by <code>enchant_broker_init()</code>.</p>
	 * @param string $tag <p>Language tag. The special "&#42;" tag can be used as a language tag to declare a default ordering for any language that does not explicitly declare an ordering.</p>
	 * @param string $ordering <p>Comma delimited list of provider names</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-broker-set-ordering.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_set_ordering(\EnchantBroker $broker, string $tag, string $ordering): bool {}

	/**
	 * Add a word to personal word list
	 * <p>Add a word to personal word list of the given dictionary.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to add</p>
	 * @return void <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-add.php
	 * @see enchant_broker_request_pwl_dict(), enchant_broker_request_dict()
	 * @since PHP 8
	 */
	function enchant_dict_add(\EnchantDictionary $dictionary, string $word): void {}

	/**
	 * Alias of enchant_dict_add()
	 * <p>This function is an alias of: <code>enchant_dict_add()</code>.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to add</p>
	 * @return void
	 * @link https://php.net/manual/en/function.enchant-dict-add-to-personal.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_add_to_personal(\EnchantDictionary $dictionary, string $word): void {}

	/**
	 * Add 'word' to this spell-checking session
	 * <p>Add a word to the given dictionary. It will be added only for the active spell-checking session.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to add</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-add-to-session.php
	 * @see enchant_broker_request_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_add_to_session(\EnchantDictionary $dictionary, string $word): void {}

	/**
	 * Check whether a word is correctly spelled or not
	 * <p>If the word is correctly spelled return <b><code>true</code></b>, otherwise return <b><code>false</code></b></p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to check</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the word is spelled correctly, <b><code>false</code></b> if not.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-check.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_check(\EnchantDictionary $dictionary, string $word): bool {}

	/**
	 * Describes an individual dictionary
	 * <p>Returns the details of the dictionary.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @return array <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-describe.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_describe(\EnchantDictionary $dictionary): array {}

	/**
	 * Returns the last error of the current spelling-session
	 * <p>Returns the last error of the current spelling-session</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @return string|false <p>Returns the error message as string or <b><code>false</code></b> if no error occurred.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-get-error.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_get_error(\EnchantDictionary $dictionary): string|false {}

	/**
	 * Whether or not 'word' exists in this spelling-session
	 * <p>Tells whether or not a word already exists in the current session.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to lookup</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the word exists or <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.enchant-dict-is-added.php
	 * @see enchant_dict_add_to_session()
	 * @since PHP 8
	 */
	function enchant_dict_is_added(\EnchantDictionary $dictionary, string $word): bool {}

	/**
	 * Alias of enchant_dict_is_added()
	 * <p>This function is an alias of: <code>enchant_dict_is_added()</code>.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to lookup</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.enchant-dict-is-in-session.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_is_in_session(\EnchantDictionary $dictionary, string $word): bool {}

	/**
	 * Check the word is correctly spelled and provide suggestions
	 * <p>If the word is correctly spelled return <b><code>true</code></b>, otherwise return <b><code>false</code></b>, if suggestions variable is provided, fill it with spelling alternatives.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>The word to check</p>
	 * @param array $suggestions <p>If the word is not correctly spelled, this variable will contain an array of suggestions.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the word is correctly spelled or <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.enchant-dict-quick-check.php
	 * @see enchant_dict_check(), enchant_dict_suggest()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1
	 */
	function enchant_dict_quick_check(\EnchantDictionary $dictionary, string $word, array &$suggestions = null): bool {}

	/**
	 * Add a correction for a word
	 * <p>Add a correction for 'mis' using 'cor'. Notes that you replaced @mis with @cor, so it's possibly more likely that future occurrences of @mis will be replaced with @cor. So it might bump @cor up in the suggestion list.</p>
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $misspelled <p>The work to fix</p>
	 * @param string $correct <p>The correct word</p>
	 * @return void <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-store-replacement.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_store_replacement(\EnchantDictionary $dictionary, string $misspelled, string $correct): void {}

	/**
	 * Will return a list of values if any of those pre-conditions are not met
	 * @param \EnchantDictionary $dictionary <p>An Enchant dictionary returned by <code>enchant_broker_request_dict()</code> or <code>enchant_broker_request_pwl_dict()</code>.</p>
	 * @param string $word <p>Word to use for the suggestions.</p>
	 * @return array <p>Will returns an array of suggestions if the word is bad spelled.</p>
	 * @link https://php.net/manual/en/function.enchant-dict-suggest.php
	 * @see enchant_dict_check(), enchant_dict_quick_check()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_suggest(\EnchantDictionary $dictionary, string $word): array {}

	/**
	 * Dictionary type for Ispell. Used with <code>enchant_broker_get_dict_path()</code> and <code>enchant_broker_set_dict_path()</code>. Deprecated as of PHP 8.0.0.
	 */
	define('ENCHANT_ISPELL', null);

	/**
	 * Dictionary type for MySpell. Used with <code>enchant_broker_get_dict_path()</code> and <code>enchant_broker_set_dict_path()</code>. Deprecated as of PHP 8.0.0.
	 */
	define('ENCHANT_MYSPELL', null);

	/**
	 * The version of libenchant. Available as of PHP 8.0.0.
	 */
	define('LIBENCHANT_VERSION', null);

}
