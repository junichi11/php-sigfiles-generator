<?php



namespace {

	/**
	 * Calculate the hash value needed by EZMLM
	 * <p><b>ezmlm_hash()</b> calculates the hash value needed when keeping EZMLM mailing lists in a MySQL database.</p>
	 * @param string $addr <p>The email address that's being hashed.</p>
	 * @return int <p>The hash value of <code>addr</code>.</p>
	 * @link https://php.net/manual/en/function.ezmlm-hash.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ezmlm_hash(string $addr): int {}

	/**
	 * Send mail
	 * <p>Sends an email.</p>
	 * @param string $to <p>Receiver, or receivers of the mail.</p> <p>The formatting of this string must comply with &#xBB;&#xA0;RFC 2822. Some examples are:</p><ul> <li>user@example.com</li> <li>user@example.com, anotheruser@example.com</li> <li>User &lt;user@example.com&gt;</li> <li>User &lt;user@example.com&gt;, Another User &lt;anotheruser@example.com&gt;</li> </ul>
	 * @param string $subject <p>Subject of the email to be sent.</p> <b>Caution</b> <p>Subject must satisfy &#xBB;&#xA0;RFC 2047.</p>
	 * @param string $message <p>Message to be sent.</p> <p>Each line should be separated with a CRLF (\r\n). Lines should not be larger than 70 characters.</p> <b>Caution</b> <p>(Windows only) When PHP is talking to a SMTP server directly, if a full stop is found on the start of a line, it is removed. To counter-act this, replace these occurrences with a double dot.</p> <code> &lt;&#63;php<br>$text = str_replace("\n.", "\n..", $text);<br>&#63;&gt;  </code>
	 * @param array|string $additional_headers <p><code>String</code> or <code>array</code> to be inserted at the end of the email header.</p> <p>This is typically used to add extra headers (From, Cc, and Bcc). Multiple extra headers should be separated with a CRLF (\r\n). If outside data are used to compose this header, the data should be sanitized so that no unwanted headers could be injected.</p> <p>If an <code>array</code> is passed, its keys are the header names and its values are the respective header values.</p> <p><b>Note</b>:</p><p>Before PHP 5.4.42 and 5.5.27, repectively, <code>additional_headers</code> did not have mail header injection protection. Therefore, users must make sure specified headers are safe and contains headers only. i.e. Never start mail body by putting multiple newlines.</p>  <p><b>Note</b>:</p><p>When sending mail, the mail <i>must</i> contain a <code>From</code> header. This can be set with the <code>additional_headers</code> parameter, or a default can be set in php.ini.</p> <p>Failing to do this will result in an error message similar to <code>Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing</code>. The <code>From</code> header sets also <code>Return-Path</code> when sending directly via SMTP (Windows only).</p>  <p><b>Note</b>:</p><p>If messages are not received, try using a LF (\n) only. Some Unix mail transfer agents (most notably &#xBB;&#xA0;qmail) replace LF by CRLF automatically (which leads to doubling CR if CRLF is used). This should be a last resort, as it does not comply with &#xBB;&#xA0;RFC 2822.</p>
	 * @param string $additional_params <p>The <code>additional_params</code> parameter can be used to pass additional flags as command line options to the program configured to be used when sending mail, as defined by the <code>sendmail_path</code> configuration setting. For example, this can be used to set the envelope sender address when using sendmail with the <code>-f</code> sendmail option.</p> <p>This parameter is escaped by <code>escapeshellcmd()</code> internally to prevent command execution. <code>escapeshellcmd()</code> prevents command execution, but allows to add additional parameters. For security reasons, it is recommended for the user to sanitize this parameter to avoid adding unwanted parameters to the shell command.</p> <p>Since <code>escapeshellcmd()</code> is applied automatically, some characters that are allowed as email addresses by internet RFCs cannot be used. <b>mail()</b> can not allow such characters, so in programs where the use of such characters is required, alternative means of sending emails (such as using a framework or a library) is recommended.</p> <p>The user that the webserver runs as should be added as a trusted user to the sendmail configuration to prevent a 'X-Warning' header from being added to the message when the envelope sender (-f) is set using this method. For sendmail users, this file is /etc/mail/trusted-users.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the mail was successfully accepted for delivery, <b><code>false</code></b> otherwise.</p><p>It is important to note that just because the mail was accepted for delivery, it does NOT mean the mail will actually reach the intended destination.</p>
	 * @link https://php.net/manual/en/function.mail.php
	 * @see mb_send_mail(), imap_mail()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function mail(string $to, string $subject, string $message, array|string $additional_headers = [], string $additional_params = ""): bool {}

}
