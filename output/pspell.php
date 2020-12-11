<?php



namespace {

	/**
	 * Add the word to a personal wordlist
	 * <p><b>pspell_add_to_personal()</b> adds a word to the personal wordlist. If you used <code>pspell_new_config()</code> with <code>pspell_config_personal()</code> to open the dictionary, you can save the wordlist later with <code>pspell_save_wordlist()</code>.</p>
	 * @param int $dictionary_link
	 * @param string $word <p>The added word.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-add-to-personal.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_add_to_personal(int $dictionary_link, string $word): bool {}

	/**
	 * Add the word to the wordlist in the current session
	 * <p><b>pspell_add_to_session()</b> adds a word to the wordlist associated with the current session. It is very similar to <code>pspell_add_to_personal()</code></p>
	 * @param int $dictionary_link
	 * @param string $word <p>The added word.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-add-to-session.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_add_to_session(int $dictionary_link, string $word): bool {}

	/**
	 * Check a word
	 * <p><b>pspell_check()</b> checks the spelling of a word.</p>
	 * @param int $dictionary_link
	 * @param string $word <p>The tested word.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the spelling is correct, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/en/function.pspell-check.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_check(int $dictionary_link, string $word): bool {}

	/**
	 * Clear the current session
	 * <p><b>pspell_clear_session()</b> clears the current session. The current wordlist becomes blank, and, for example, if you try to save it with <code>pspell_save_wordlist()</code>, nothing happens.</p>
	 * @param int $dictionary_link
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-clear-session.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_clear_session(int $dictionary_link): bool {}

	/**
	 * Create a config used to open a dictionary
	 * <p>Create a config used to open a dictionary.</p><p><b>pspell_config_create()</b> has a very similar syntax to <code>pspell_new()</code>. In fact, using <b>pspell_config_create()</b> immediately followed by <code>pspell_new_config()</code> will produce the exact same result. However, after creating a new config, you can also use <b>pspell_config_&#42;()</b> functions before calling <code>pspell_new_config()</code> to take advantage of some advanced functionality.</p><p>For more information and examples, check out inline manual pspell website:http://aspell.net/.</p>
	 * @param string $language <p>The language parameter is the language code which consists of the two letter ISO 639 language code and an optional two letter ISO 3166 country code after a dash or underscore.</p>
	 * @param string $spelling <p>The spelling parameter is the requested spelling for languages with more than one spelling such as English. Known values are 'american', 'british', and 'canadian'.</p>
	 * @param string $jargon <p>The jargon parameter contains extra information to distinguish two different words lists that have the same language and spelling parameters.</p>
	 * @param string $encoding <p>The encoding parameter is the encoding that words are expected to be in. Valid values are 'utf-8', 'iso8859-&#42;', 'koi8-r', 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned 32'. This parameter is largely untested, so be careful when using.</p>
	 * @return int <p>Returns a pspell config identifier, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.pspell-config-create.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_create(string $language, string $spelling = NULL, string $jargon = NULL, string $encoding = NULL): int {}

	/**
	 * Location of language data files
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $conf
	 * @param string $directory
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-data-dir.php
	 * @since PHP 5, PHP 7
	 */
	function pspell_config_data_dir(int $conf, string $directory): bool {}

	/**
	 * Location of the main word list
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $conf
	 * @param string $directory
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-dict-dir.php
	 * @since PHP 5, PHP 7
	 */
	function pspell_config_dict_dir(int $conf, string $directory): bool {}

	/**
	 * Ignore words less than N characters long
	 * <p><b>pspell_config_ignore()</b> should be used on a config before calling <code>pspell_new_config()</code>. This function allows short words to be skipped by the spell checker.</p>
	 * @param int $dictionary_link
	 * @param int $n <p>Words less than <code>n</code> characters will be skipped.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-ignore.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_ignore(int $dictionary_link, int $n): bool {}

	/**
	 * Change the mode number of suggestions returned
	 * <p><b>pspell_config_mode()</b> should be used on a config before calling <code>pspell_new_config()</code>. This function determines how many suggestions will be returned by <code>pspell_suggest()</code>.</p>
	 * @param int $dictionary_link
	 * @param int $mode <p>The mode parameter is the mode in which spellchecker will work. There are several modes available:</p><ul> <li>  <b><code>PSPELL_FAST</code></b> - Fast mode (least number of suggestions)  </li> <li>  <b><code>PSPELL_NORMAL</code></b> - Normal mode (more suggestions)  </li> <li>  <b><code>PSPELL_BAD_SPELLERS</code></b> - Slow mode (a lot of suggestions)  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_mode(int $dictionary_link, int $mode): bool {}

	/**
	 * Set a file that contains personal wordlist
	 * <p>Set a file that contains personal wordlist. The personal wordlist will be loaded and used in addition to the standard one after you call <code>pspell_new_config()</code>. The file is also the file where <code>pspell_save_wordlist()</code> will save personal wordlist to.</p><p><b>pspell_config_personal()</b> should be used on a config before calling <code>pspell_new_config()</code>.</p>
	 * @param int $dictionary_link
	 * @param string $file <p>The personal wordlist. If the file does not exist, it will be created. The file should be writable by whoever PHP runs as (e.g. nobody).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-personal.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_personal(int $dictionary_link, string $file): bool {}

	/**
	 * Set a file that contains replacement pairs
	 * <p>Set a file that contains replacement pairs.</p><p>The replacement pairs improve the quality of the spellchecker. When a word is misspelled, and a proper suggestion was not found in the list, <code>pspell_store_replacement()</code> can be used to store a replacement pair and then <code>pspell_save_wordlist()</code> to save the wordlist along with the replacement pairs.</p><p><b>pspell_config_repl()</b> should be used on a config before calling <code>pspell_new_config()</code>.</p>
	 * @param int $dictionary_link
	 * @param string $file <p>The file should be writable by whoever PHP runs as (e.g. nobody).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-repl.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_repl(int $dictionary_link, string $file): bool {}

	/**
	 * Consider run-together words as valid compounds
	 * <p>This function determines whether run-together words will be treated as legal compounds. That is, "thecat" will be a legal compound, although there should be a space between the two words. Changing this setting only affects the results returned by <code>pspell_check()</code>; <code>pspell_suggest()</code> will still return suggestions.</p><p><b>pspell_config_runtogether()</b> should be used on a config before calling <code>pspell_new_config()</code>.</p>
	 * @param int $dictionary_link
	 * @param bool $flag <p><b><code>TRUE</code></b> if run-together words should be treated as legal compounds, <b><code>FALSE</code></b> otherwise.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-runtogether.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_runtogether(int $dictionary_link, bool $flag): bool {}

	/**
	 * Determine whether to save a replacement pairs list along with the wordlist
	 * <p><b>pspell_config_save_repl()</b> determines whether <code>pspell_save_wordlist()</code> will save the replacement pairs along with the wordlist. Usually there is no need to use this function because if <code>pspell_config_repl()</code> is used, the replacement pairs will be saved by <code>pspell_save_wordlist()</code> anyway, and if it is not, the replacement pairs will not be saved.</p><p><b>pspell_config_save_repl()</b> should be used on a config before calling <code>pspell_new_config()</code>.</p>
	 * @param int $dictionary_link
	 * @param bool $flag <p><b><code>TRUE</code></b> if replacement pairs should be saved, <b><code>FALSE</code></b> otherwise.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-config-save-repl.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_save_repl(int $dictionary_link, bool $flag): bool {}

	/**
	 * Load a new dictionary
	 * <p><b>pspell_new()</b> opens up a new dictionary and returns the dictionary link identifier for use in other pspell functions.</p><p>For more information and examples, check out inline manual pspell website:http://aspell.net/.</p>
	 * @param string $language <p>The language parameter is the language code which consists of the two letter ISO 639 language code and an optional two letter ISO 3166 country code after a dash or underscore.</p>
	 * @param string $spelling <p>The spelling parameter is the requested spelling for languages with more than one spelling such as English. Known values are 'american', 'british', and 'canadian'.</p>
	 * @param string $jargon <p>The jargon parameter contains extra information to distinguish two different words lists that have the same language and spelling parameters.</p>
	 * @param string $encoding <p>The encoding parameter is the encoding that words are expected to be in. Valid values are 'utf-8', 'iso8859-&#42;', 'koi8-r', 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned 32'. This parameter is largely untested, so be careful when using.</p>
	 * @param int $mode <p>The mode parameter is the mode in which spellchecker will work. There are several modes available:</p><ul> <li>  <b><code>PSPELL_FAST</code></b> - Fast mode (least number of suggestions)  </li> <li>  <b><code>PSPELL_NORMAL</code></b> - Normal mode (more suggestions)  </li> <li>  <b><code>PSPELL_BAD_SPELLERS</code></b> - Slow mode (a lot of suggestions)  </li> <li>  <b><code>PSPELL_RUN_TOGETHER</code></b> - Consider run-together words as legal compounds. That is, "thecat" will be a legal compound, although there should be a space between the two words. Changing this setting only affects the results returned by <code>pspell_check()</code>; <code>pspell_suggest()</code> will still return suggestions.  </li> </ul> Mode is a bitmask constructed from different constants listed above. However, <b><code>PSPELL_FAST</code></b>, <b><code>PSPELL_NORMAL</code></b> and <b><code>PSPELL_BAD_SPELLERS</code></b> are mutually exclusive, so you should select only one of them.
	 * @return int|false <p>Returns the dictionary link identifier on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-new.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_new(string $language, string $spelling = NULL, string $jargon = NULL, string $encoding = NULL, int $mode = 0) {}

	/**
	 * Load a new dictionary with settings based on a given config
	 * <p><b>pspell_new_config()</b> opens up a new dictionary with settings specified in a config, created with <code>pspell_config_create()</code> and modified with <b>pspell_config_&#42;()</b> functions. This method provides you with the most flexibility and has all the functionality provided by <code>pspell_new()</code> and <code>pspell_new_personal()</code>.</p>
	 * @param int $config <p>The <code>config</code> parameter is the one returned by <code>pspell_config_create()</code> when the config was created.</p>
	 * @return int|false <p>Returns a dictionary link identifier on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-new-config.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_new_config(int $config) {}

	/**
	 * Load a new dictionary with personal wordlist
	 * <p><b>pspell_new_personal()</b> opens up a new dictionary with a personal wordlist. The wordlist can be modified and saved with <code>pspell_save_wordlist()</code>, if desired. However, the replacement pairs are not saved. In order to save replacement pairs, you should create a config using <code>pspell_config_create()</code>, set the personal wordlist file with <code>pspell_config_personal()</code>, set the file for replacement pairs with <code>pspell_config_repl()</code>, and open a new dictionary with <code>pspell_new_config()</code>.</p><p>For more information and examples, check out inline manual pspell website:http://aspell.net/.</p>
	 * @param string $personal <p>The file where words added to the personal list will be stored. It should be an absolute filename beginning with '/' because otherwise it will be relative to $HOME, which is "/root" for most systems, and is probably not what you want.</p>
	 * @param string $language <p>The language code which consists of the two letter ISO 639 language code and an optional two letter ISO 3166 country code after a dash or underscore.</p>
	 * @param string $spelling <p>The requested spelling for languages with more than one spelling such as English. Known values are 'american', 'british', and 'canadian'.</p>
	 * @param string $jargon <p>Extra information to distinguish two different words lists that have the same language and spelling parameters.</p>
	 * @param string $encoding <p>The encoding that words are expected to be in. Valid values are <code>utf-8</code>, <code>iso8859-&#42;</code>, <code>koi8-r</code>, <code>viscii</code>, <code>cp1252</code>, <code>machine unsigned 16</code>, <code>machine unsigned 32</code>.</p>
	 * @param int $mode <p>The mode in which spellchecker will work. There are several modes available:</p><ul> <li>  <b><code>PSPELL_FAST</code></b> - Fast mode (least number of suggestions)  </li> <li>  <b><code>PSPELL_NORMAL</code></b> - Normal mode (more suggestions)  </li> <li>  <b><code>PSPELL_BAD_SPELLERS</code></b> - Slow mode (a lot of suggestions)  </li> <li>  <b><code>PSPELL_RUN_TOGETHER</code></b> - Consider run-together words as legal compounds. That is, "thecat" will be a legal compound, although there should be a space between the two words. Changing this setting only affects the results returned by <code>pspell_check()</code>; <code>pspell_suggest()</code> will still return suggestions.  </li> </ul> Mode is a bitmask constructed from different constants listed above. However, <b><code>PSPELL_FAST</code></b>, <b><code>PSPELL_NORMAL</code></b> and <b><code>PSPELL_BAD_SPELLERS</code></b> are mutually exclusive, so you should select only one of them.
	 * @return int <p>Returns the dictionary link identifier for use in other pspell functions.</p>
	 * @link http://php.net/manual/en/function.pspell-new-personal.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_new_personal(string $personal, string $language, string $spelling = NULL, string $jargon = NULL, string $encoding = NULL, int $mode = 0): int {}

	/**
	 * Save the personal wordlist to a file
	 * <p><b>pspell_save_wordlist()</b> saves the personal wordlist from the current session. The location of files to be saved specified with <code>pspell_config_personal()</code> and (optionally) <code>pspell_config_repl()</code>.</p>
	 * @param int $dictionary_link <p>A dictionary link identifier opened with <code>pspell_new_personal()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-save-wordlist.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_save_wordlist(int $dictionary_link): bool {}

	/**
	 * Store a replacement pair for a word
	 * <p><b>pspell_store_replacement()</b> stores a replacement pair for a word, so that replacement can be returned by <code>pspell_suggest()</code> later. In order to be able to take advantage of this function, you have to use <code>pspell_new_personal()</code> to open the dictionary. In order to permanently save the replacement pair, you have to use <code>pspell_config_personal()</code> and <code>pspell_config_repl()</code> to set the path where to save your custom wordlists, and then use <code>pspell_save_wordlist()</code> for the changes to be written to disk.</p>
	 * @param int $dictionary_link <p>A dictionary link identifier, opened with <code>pspell_new_personal()</code></p>
	 * @param string $misspelled <p>The misspelled word.</p>
	 * @param string $correct <p>The fixed spelling for the <code>misspelled</code> word.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.pspell-store-replacement.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_store_replacement(int $dictionary_link, string $misspelled, string $correct): bool {}

	/**
	 * Suggest spellings of a word
	 * <p><b>pspell_suggest()</b> returns an array of possible spellings for the given word.</p>
	 * @param int $dictionary_link
	 * @param string $word <p>The tested word.</p>
	 * @return array <p>Returns an array of possible spellings.</p>
	 * @link http://php.net/manual/en/function.pspell-suggest.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_suggest(int $dictionary_link, string $word): array {}

	define('PSPELL_BAD_SPELLERS', null);

	define('PSPELL_FAST', null);

	define('PSPELL_NORMAL', null);

	define('PSPELL_RUN_TOGETHER', null);

}
