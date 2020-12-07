<?php



namespace {

	/**
	 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned
	 * <p>With <b>bind_textdomain_codeset()</b>, you can set in which encoding will be messages from <code>domain</code> returned by <code>gettext()</code> and similar functions.</p>
	 * @param string $domain <p>The domain</p>
	 * @param string $codeset <p>The code set</p>
	 * @return string|false <p>A <code>string</code> on success.</p>
	 * @link http://php.net/manual/en/function.bind-textdomain-codeset.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function bind_textdomain_codeset(string $domain, string $codeset) {}

	/**
	 * Sets the path for a domain
	 * <p>The <b>bindtextdomain()</b> function sets the path for a domain.</p>
	 * @param string $domain <p>The domain</p>
	 * @param string $directory <p>The directory path</p>
	 * @return string|false <p>The full pathname for the <code>domain</code> currently being set.</p>
	 * @link http://php.net/manual/en/function.bindtextdomain.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function bindtextdomain(string $domain, string $directory) {}

	/**
	 * Overrides the domain for a single lookup
	 * <p>This function allows you to override the current domain for a single message lookup.</p>
	 * @param string $domain <p>The domain</p>
	 * @param string $message <p>The message</p>
	 * @param int $category <p>The category</p>
	 * @return string <p>A <code>string</code> on success.</p>
	 * @link http://php.net/manual/en/function.dcgettext.php
	 * @see gettext()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dcgettext(string $domain, string $message, int $category): string {}

	/**
	 * Plural version of dcgettext
	 * <p>This function allows you to override the current domain for a single plural message lookup.</p>
	 * @param string $domain <p>The domain</p>
	 * @param string $singular
	 * @param string $plural
	 * @param int $count
	 * @param int $category
	 * @return string <p>A <code>string</code> on success.</p>
	 * @link http://php.net/manual/en/function.dcngettext.php
	 * @see ngettext()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function dcngettext(string $domain, string $singular, string $plural, int $count, int $category): string {}

	/**
	 * Override the current domain
	 * <p>The <b>dgettext()</b> function allows you to override the current <code>domain</code> for a single message lookup.</p>
	 * @param string $domain <p>The domain</p>
	 * @param string $message <p>The message</p>
	 * @return string <p>A <code>string</code> on success.</p>
	 * @link http://php.net/manual/en/function.dgettext.php
	 * @see gettext()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dgettext(string $domain, string $message): string {}

	/**
	 * Plural version of dgettext
	 * <p>The <b>dngettext()</b> function allows you to override the current <code>domain</code> for a single plural message lookup.</p>
	 * @param string $domain <p>The domain</p>
	 * @param string $singular
	 * @param string $plural
	 * @param int $count
	 * @return string <p>A <code>string</code> on success.</p>
	 * @link http://php.net/manual/en/function.dngettext.php
	 * @see ngettext()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function dngettext(string $domain, string $singular, string $plural, int $count): string {}

	/**
	 * Lookup a message in the current domain
	 * <p>Looks up a message in the current domain.</p>
	 * @param string $message <p>The message being translated.</p>
	 * @return string <p>Returns a translated <code>string</code> if one is found in the translation table, or the submitted message if not found.</p>
	 * @link http://php.net/manual/en/function.gettext.php
	 * @see setlocale()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gettext(string $message): string {}

	/**
	 * Plural version of gettext
	 * <p>The plural version of <code>gettext()</code>. Some languages have more than one form for plural messages dependent on the count.</p>
	 * @param string $singular <p>The singular message ID.</p>
	 * @param string $plural <p>The plural message ID.</p>
	 * @param int $count <p>The number (e.g. item count) to determine the translation for the respective grammatical number.</p>
	 * @return string <p>Returns correct plural form of message identified by <code>singular</code> and <code>plural</code> for count <code>count</code>.</p>
	 * @link http://php.net/manual/en/function.ngettext.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ngettext(string $singular, string $plural, int $count): string {}

	/**
	 * Sets the default domain
	 * <p>This function sets the domain to search within when calls are made to <code>gettext()</code>, usually the named after an application.</p>
	 * @param string|null $domain <p>The new message domain, or <b><code>NULL</code></b> to get the current setting without changing it</p>
	 * @return string <p>If successful, this function returns the current message domain, after possibly changing it.</p>
	 * @link http://php.net/manual/en/function.textdomain.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function textdomain($domain): string {}

}
