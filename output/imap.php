<?php



namespace {

	/**
	 * Convert an 8bit string to a quoted-printable string
	 * <p>Convert an 8bit string to a quoted-printable string (according to RFC2045, section 6.7).</p>
	 * @param string $string <p>The 8bit string to convert</p>
	 * @return string <p>Returns a quoted-printable string.</p>
	 * @link http://php.net/manual/en/function.imap-8bit.php
	 * @see imap_qprint()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_8bit(string $string): string {}

	/**
	 * Returns all IMAP alert messages that have occurred
	 * <p>Returns all of the IMAP alert messages generated since the last <b>imap_alerts()</b> call, or the beginning of the page.</p><p>When <b>imap_alerts()</b> is called, the alert stack is subsequently cleared. The IMAP specification requires that these messages be passed to the user.</p>
	 * @return array <p>Returns an array of all of the IMAP alert messages generated or <b><code>FALSE</code></b> if no alert messages are available.</p>
	 * @link http://php.net/manual/en/function.imap-alerts.php
	 * @see imap_errors()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_alerts(): array {}

	/**
	 * Append a string message to a specified mailbox
	 * <p>Appends a string <code>message</code> to the specified <code>mailbox</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $message <p>The message to be append, as a string</p> <p>When talking to the Cyrus IMAP server, you must use "\r\n" as your end-of-line terminator instead of "\n" or the operation will fail</p>
	 * @param string $options <p>If provided, the <code>options</code> will also be written to the <code>mailbox</code></p>
	 * @param string $internal_date <p>If this parameter is set, it will set the INTERNALDATE on the appended message. The parameter should be a date string that conforms to the rfc2060 specifications for a date_time value.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-append.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_append($imap_stream, string $mailbox, string $message, string $options = NULL, string $internal_date = NULL): bool {}

	/**
	 * Decode BASE64 encoded text
	 * <p>Decodes the given BASE-64 encoded <code>text</code>.</p>
	 * @param string $text <p>The encoded text</p>
	 * @return string <p>Returns the decoded message as a string.</p>
	 * @link http://php.net/manual/en/function.imap-base64.php
	 * @see imap_binary(), base64_encode(), base64_decode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_base64(string $text): string {}

	/**
	 * Convert an 8bit string to a base64 string
	 * <p>Convert an 8bit string to a base64 string according to RFC2045, Section 6.8.</p>
	 * @param string $string <p>The 8bit string</p>
	 * @return string <p>Returns a base64 encoded string.</p>
	 * @link http://php.net/manual/en/function.imap-binary.php
	 * @see imap_base64()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_binary(string $string): string {}

	/**
	 * Read the message body
	 * <p><b>imap_body()</b> returns the body of the message, numbered <code>msg_number</code> in the current mailbox.</p><p><b>imap_body()</b> will only return a verbatim copy of the message body. To extract single parts of a multipart MIME-encoded message you have to use <code>imap_fetchstructure()</code> to analyze its structure and <code>imap_fetchbody()</code> to extract a copy of a single body component.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $options <p>The optional <code>options</code> are a bit mask with one or more of the following:</p><ul> <li>  <b><code>FT_UID</code></b> - The <code>msg_number</code> is a UID  </li> <li>  <b><code>FT_PEEK</code></b> - Do not set the \Seen flag if not already set  </li> <li>  <b><code>FT_INTERNAL</code></b> - The return string is in internal format, will not canonicalize to CRLF.  </li> </ul>
	 * @return string <p>Returns the body of the specified message, as a string.</p>
	 * @link http://php.net/manual/en/function.imap-body.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_body($imap_stream, int $msg_number, int $options = 0): string {}

	/**
	 * Read the structure of a specified body section of a specific message
	 * <p>Read the structure of a specified body section of a specific message.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param string $section <p>The body section to read</p>
	 * @return object <p>Returns the information in an object, for a detailed description of the object structure and properties see <code>imap_fetchstructure()</code>.</p>
	 * @link http://php.net/manual/en/function.imap-bodystruct.php
	 * @see imap_fetchstructure()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_bodystruct($imap_stream, int $msg_number, string $section): object {}

	/**
	 * Check current mailbox
	 * <p>Checks information about the current mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return object <p>Returns the information in an object with following properties:</p><ul> <li>  <b><code>Date</code></b> - current system time formatted according to RFC2822  </li> <li>  <b><code>Driver</code></b> - protocol used to access this mailbox: POP3, IMAP, NNTP  </li> <li>  <b><code>Mailbox</code></b> - the mailbox name  </li> <li>  <b><code>Nmsgs</code></b> - number of messages in the mailbox  </li> <li>  <b><code>Recent</code></b> - number of recent messages in the mailbox  </li> </ul><p>Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-check.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_check($imap_stream): object {}

	/**
	 * Clears flags on messages
	 * <p>This function causes a store to delete the specified <code>flag</code> to the flags set for the messages in the specified <code>sequence</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $sequence <p>A sequence of message numbers. You can enumerate desired messages with the <code>X,Y</code> syntax, or retrieve all messages within an interval with the <code>X:Y</code> syntax</p>
	 * @param string $flag <p>The flags which you can unset are "\\Seen", "\\Answered", "\\Flagged", "\\Deleted", and "\\Draft" (as defined by RFC2060)</p>
	 * @param int $options <p><code>options</code> are a bit mask and may contain the single option:</p><ul> <li>  <b><code>ST_UID</code></b> - The sequence argument contains UIDs instead of sequence numbers  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-clearflag-full.php
	 * @see imap_setflag_full()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_clearflag_full($imap_stream, string $sequence, string $flag, int $options = 0): bool {}

	/**
	 * Close an IMAP stream
	 * <p>Closes the imap stream.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $flag <p>If set to <b><code>CL_EXPUNGE</code></b>, the function will silently expunge the mailbox before closing, removing all messages marked for deletion. You can achieve the same thing by using <code>imap_expunge()</code></p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-close.php
	 * @see imap_open()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_close($imap_stream, int $flag = 0): bool {}

	/**
	 * Alias of imap_createmailbox()
	 * <p>This function is an alias of: <code>imap_createmailbox()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information. Names containing international characters should be encoded by <code>imap_utf7_encode()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.imap-create.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_create($imap_stream, string $mailbox): bool {}

	/**
	 * Create a new mailbox
	 * <p>Creates a new mailbox specified by <code>mailbox</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information. Names containing international characters should be encoded by <code>imap_utf7_encode()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-createmailbox.php
	 * @see imap_renamemailbox(), imap_deletemailbox()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_createmailbox($imap_stream, string $mailbox): bool {}

	/**
	 * Mark a message for deletion from current mailbox
	 * <p>Marks messages listed in <code>msg_number</code> for deletion. Messages marked for deletion will stay in the mailbox until either <code>imap_expunge()</code> is called or <code>imap_close()</code> is called with the optional parameter <b><code>CL_EXPUNGE</code></b>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $options <p>You can set the <b><code>FT_UID</code></b> which tells the function to treat the <code>msg_number</code> argument as a <code>UID</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.imap-delete.php
	 * @see imap_undelete(), imap_expunge(), imap_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_delete($imap_stream, int $msg_number, int $options = 0): bool {}

	/**
	 * Delete a mailbox
	 * <p>Deletes the specified <code>mailbox</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-deletemailbox.php
	 * @see imap_createmailbox(), imap_renamemailbox(), imap_open()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_deletemailbox($imap_stream, string $mailbox): bool {}

	/**
	 * Returns all of the IMAP errors that have occurred
	 * <p>Gets all of the IMAP errors (if any) that have occurred during this page request or since the error stack was reset.</p><p>When <b>imap_errors()</b> is called, the error stack is subsequently cleared.</p>
	 * @return array <p>This function returns an array of all of the IMAP error messages generated since the last <b>imap_errors()</b> call, or the beginning of the page. Returns <b><code>FALSE</code></b> if no error messages are available.</p>
	 * @link http://php.net/manual/en/function.imap-errors.php
	 * @see imap_last_error(), imap_alerts()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_errors(): array {}

	/**
	 * Delete all messages marked for deletion
	 * <p>Deletes all the messages marked for deletion by <code>imap_delete()</code>, <code>imap_mail_move()</code>, or <code>imap_setflag_full()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b>.</p>
	 * @link http://php.net/manual/en/function.imap-expunge.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_expunge($imap_stream): bool {}

	/**
	 * Read an overview of the information in the headers of the given message
	 * <p>This function fetches mail headers for the given <code>sequence</code> and returns an overview of their contents.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $sequence <p>A message sequence description. You can enumerate desired messages with the <code>X,Y</code> syntax, or retrieve all messages within an interval with the <code>X:Y</code> syntax</p>
	 * @param int $options <p><code>sequence</code> will contain a sequence of message indices or UIDs, if this parameter is set to <b><code>FT_UID</code></b>.</p>
	 * @return array <p>Returns an array of objects describing one message header each. The object will only define a property if it exists. The possible properties are:</p><ul> <li>  <code>subject</code> - the messages subject  </li> <li>  <code>from</code> - who sent it  </li> <li>  <code>to</code> - recipient  </li> <li>  <code>date</code> - when was it sent  </li> <li>  <code>message_id</code> - Message-ID  </li> <li>  <code>references</code> - is a reference to this message id  </li> <li>  <code>in_reply_to</code> - is a reply to this message id  </li> <li>  <code>size</code> - size in bytes  </li> <li>  <code>uid</code> - UID the message has in the mailbox  </li> <li>  <code>msgno</code> - message sequence number in the mailbox  </li> <li>  <code>recent</code> - this message is flagged as recent  </li> <li>  <code>flagged</code> - this message is flagged  </li> <li>  <code>answered</code> - this message is flagged as answered  </li> <li>  <code>deleted</code> - this message is flagged for deletion  </li> <li>  <code>seen</code> - this message is flagged as already read  </li> <li>  <code>draft</code> - this message is flagged as being a draft  </li> <li>  <code>udate</code> - the UNIX timestamp of the arrival date  </li> </ul>
	 * @link http://php.net/manual/en/function.imap-fetch-overview.php
	 * @see imap_fetchheader()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_fetch_overview($imap_stream, string $sequence, int $options = 0): array {}

	/**
	 * Fetch a particular section of the body of the message
	 * <p>Fetch of a particular section of the body of the specified messages. Body parts are not decoded by this function.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param string $section <p>The part number. It is a string of integers delimited by period which index into a body part list as per the IMAP4 specification</p>
	 * @param int $options <p>A bitmask with one or more of the following:</p><ul> <li>  <b><code>FT_UID</code></b> - The <code>msg_number</code> is a UID  </li> <li>  <b><code>FT_PEEK</code></b> - Do not set the \Seen flag if not already set  </li> <li>  <b><code>FT_INTERNAL</code></b> - The return string is in internal format, will not canonicalize to CRLF.  </li> </ul>
	 * @return string <p>Returns a particular section of the body of the specified messages as a text string.</p>
	 * @link http://php.net/manual/en/function.imap-fetchbody.php
	 * @see imap_savebody(), imap_fetchstructure()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_fetchbody($imap_stream, int $msg_number, string $section, int $options = 0): string {}

	/**
	 * Returns header for a message
	 * <p>This function causes a fetch of the complete, unfiltered RFC2822 format header of the specified message.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $options <p>The possible <code>options</code> are:</p><ul> <li>  <b><code>FT_UID</code></b> - The <code>msgno</code> argument is a UID  </li> <li>  <b><code>FT_INTERNAL</code></b> - The return string is in "internal" format, without any attempt to canonicalize to CRLF newlines  </li> <li>  <b><code>FT_PREFETCHTEXT</code></b> - The RFC822.TEXT should be pre-fetched at the same time. This avoids an extra RTT on an IMAP connection if a full message text is desired (e.g. in a "save to local file" operation)  </li> </ul>
	 * @return string <p>Returns the header of the specified message as a text string.</p>
	 * @link http://php.net/manual/en/function.imap-fetchheader.php
	 * @see imap_fetch_overview()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_fetchheader($imap_stream, int $msg_number, int $options = 0): string {}

	/**
	 * Fetch MIME headers for a particular section of the message
	 * <p>Fetch the MIME headers of a particular section of the body of the specified messages.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param string $section <p>The part number. It is a string of integers delimited by period which index into a body part list as per the IMAP4 specification</p>
	 * @param int $options <p>A bitmask with one or more of the following:</p><ul> <li>  <b><code>FT_UID</code></b> - The <code>msg_number</code> is a UID  </li> <li>  <b><code>FT_PEEK</code></b> - Do not set the \Seen flag if not already set  </li> <li>  <b><code>FT_INTERNAL</code></b> - The return string is in internal format, will not canonicalize to CRLF.  </li> </ul>
	 * @return string <p>Returns the MIME headers of a particular section of the body of the specified messages as a text string.</p>
	 * @link http://php.net/manual/en/function.imap-fetchmime.php
	 * @see imap_fetchbody(), imap_fetchstructure(), imap_fetchheader()
	 * @since PHP 5 >= 5.3.6, PHP 7
	 */
	function imap_fetchmime($imap_stream, int $msg_number, string $section, int $options = 0): string {}

	/**
	 * Read the structure of a particular message
	 * <p>Fetches all the structured information for a given message.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $options <p>This optional parameter only has a single option, <b><code>FT_UID</code></b>, which tells the function to treat the <code>msg_number</code> argument as a <code>UID</code>.</p>
	 * @return object|false <p>Returns an object with properties listed in the table below, or <b><code>FALSE</code></b> on failure.</p> <b> Returned Object for <b>imap_fetchstructure()</b> </b>   type Primary body type   encoding Body transfer encoding   ifsubtype <b><code>TRUE</code></b> if there is a subtype string   subtype MIME subtype   ifdescription <b><code>TRUE</code></b> if there is a description string   description Content description string   ifid <b><code>TRUE</code></b> if there is an identification string   id Identification string   lines Number of lines   bytes Number of bytes   ifdisposition <b><code>TRUE</code></b> if there is a disposition string   disposition Disposition string   ifdparameters <b><code>TRUE</code></b> if the dparameters array exists   dparameters An array of objects where each object has an <code>"attribute"</code> and a <code>"value"</code> property corresponding to the parameters on the <code>Content-disposition</code> MIME header.   ifparameters <b><code>TRUE</code></b> if the parameters array exists   parameters An array of objects where each object has an <code>"attribute"</code> and a <code>"value"</code> property.   parts An array of objects identical in structure to the top-level object, each of which corresponds to a MIME body part.    <b>Primary body type (value may vary with used library, use of constants is recommended)</b>  ValueTypeConstant   0textTYPETEXT 1multipartTYPEMULTIPART 2messageTYPEMESSAGE 3applicationTYPEAPPLICATION 4audioTYPEAUDIO 5imageTYPEIMAGE 6videoTYPEVIDEO 7modelTYPEMODEL 8otherTYPEOTHER   <b>Transfer encodings (value may vary with used library, use of constants is recommended)</b>  ValueTypeConstant   07bitENC7BIT 18bitENC8BIT 2BinaryENCBINARY 3Base64ENCBASE64 4Quoted-PrintableENCQUOTEDPRINTABLE 5otherENCOTHER
	 * @link http://php.net/manual/en/function.imap-fetchstructure.php
	 * @see imap_fetchbody(), imap_bodystruct()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_fetchstructure($imap_stream, int $msg_number, int $options = 0) {}

	/**
	 * Alias of imap_body()
	 * <p>This function is an alias of: <code>imap_body()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $options <p>The optional <code>options</code> are a bit mask with one or more of the following:</p><ul> <li>  <b><code>FT_UID</code></b> - The <code>msg_number</code> is a UID  </li> <li>  <b><code>FT_PEEK</code></b> - Do not set the \Seen flag if not already set  </li> <li>  <b><code>FT_INTERNAL</code></b> - The return string is in internal format, will not canonicalize to CRLF.  </li> </ul>
	 * @return string
	 * @link http://php.net/manual/en/function.imap-fetchtext.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_fetchtext($imap_stream, int $msg_number, int $options = 0): string {}

	/**
	 * Clears IMAP cache
	 * <p>Purges the cache of entries of a specific type.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $caches <p>Specifies the cache to purge. It may one or a combination of the following constants: <b><code>IMAP_GC_ELT</code></b> (message cache elements), <b><code>IMAP_GC_ENV</code></b> (envelope and bodies), <b><code>IMAP_GC_TEXTS</code></b> (texts).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-gc.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function imap_gc($imap_stream, int $caches): bool {}

	/**
	 * Retrieve the quota level settings, and usage statics per mailbox
	 * <p>Retrieve the quota level settings, and usage statics per mailbox.</p><p>For a non-admin user version of this function, please see the <code>imap_get_quotaroot()</code> function of PHP.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $quota_root <p><code>quota_root</code> should normally be in the form of <code>user.name</code> where name is the mailbox you wish to retrieve information about.</p>
	 * @return array <p>Returns an array with integer values limit and usage for the given mailbox. The value of limit represents the total amount of space allowed for this mailbox. The usage value represents the mailboxes current level of capacity. Will return <b><code>FALSE</code></b> in the case of failure.</p><p>As of PHP 4.3, the function more properly reflects the functionality as dictated by the RFC2087. The array return value has changed to support an unlimited number of returned resources (i.e. messages, or sub-folders) with each named resource receiving an individual array key. Each key value then contains an another array with the usage and limit values within it.</p><p>For backwards compatibility reasons, the original access methods are still available for use, although it is suggested to update.</p>
	 * @link http://php.net/manual/en/function.imap-get-quota.php
	 * @see imap_open(), imap_set_quota(), imap_get_quotaroot()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function imap_get_quota($imap_stream, string $quota_root): array {}

	/**
	 * Retrieve the quota settings per user
	 * <p>Retrieve the quota settings per user. The limit value represents the total amount of space allowed for this user's total mailbox usage. The usage value represents the user's current total mailbox capacity.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $quota_root <p><code>quota_root</code> should normally be in the form of which mailbox (i.e. INBOX).</p>
	 * @return array <p>Returns an array of integer values pertaining to the specified user mailbox. All values contain a key based upon the resource name, and a corresponding array with the usage and limit values within.</p><p>This function will return <b><code>FALSE</code></b> in the case of call failure, and an array of information about the connection upon an un-parsable response from the server.</p>
	 * @link http://php.net/manual/en/function.imap-get-quotaroot.php
	 * @see imap_open(), imap_set_quota(), imap_get_quota()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function imap_get_quotaroot($imap_stream, string $quota_root): array {}

	/**
	 * Gets the ACL for a given mailbox
	 * <p>Gets the ACL for a given mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return array <p>Returns an associative array of "folder" =&gt; "acl" pairs.</p>
	 * @link http://php.net/manual/en/function.imap-getacl.php
	 * @see imap_setacl()
	 * @since PHP 5, PHP 7
	 */
	function imap_getacl($imap_stream, string $mailbox): array {}

	/**
	 * Read the list of mailboxes, returning detailed information on each one
	 * <p>Gets information on the mailboxes.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @return array <p>Returns an array of objects containing mailbox information. Each object has the attributes <code>name</code>, specifying the full name of the mailbox; <code>delimiter</code>, which is the hierarchy delimiter for the part of the hierarchy this mailbox is in; and <code>attributes</code>. <code>Attributes</code> is a bitmask that can be tested against:</p><ul> <li> <p><b><code>LATT_NOINFERIORS</code></b> - This mailbox not contains, and may not contain any "children" (there are no mailboxes below this one). Calling <code>imap_createmailbox()</code> will not work on this mailbox.</p> </li> <li> <p><b><code>LATT_NOSELECT</code></b> - This is only a container, not a mailbox - you cannot open it.</p> </li> <li> <p><b><code>LATT_MARKED</code></b> - This mailbox is marked. This means that it may contain new messages since the last time it was checked. Not provided by all IMAP servers.</p> </li> <li> <p><b><code>LATT_UNMARKED</code></b> - This mailbox is not marked, does not contain new messages. If either <b><code>MARKED</code></b> or <b><code>UNMARKED</code></b> is provided, you can assume the IMAP server supports this feature for this mailbox.</p> </li> <li> <p><b><code>LATT_REFERRAL</code></b> - This container has a referral to a remote mailbox.</p> </li> <li> <p><b><code>LATT_HASCHILDREN</code></b> - This mailbox has selectable inferiors.</p> </li> <li> <p><b><code>LATT_HASNOCHILDREN</code></b> - This mailbox has no selectable inferiors.</p> </li> </ul>
	 * @link http://php.net/manual/en/function.imap-getmailboxes.php
	 * @see imap_getsubscribed()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_getmailboxes($imap_stream, string $ref, string $pattern): array {}

	/**
	 * List all the subscribed mailboxes
	 * <p>Gets information about the subscribed mailboxes.</p><p>Identical to <code>imap_getmailboxes()</code>, except that it only returns mailboxes that the user is subscribed to.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @return array <p>Returns an array of objects containing mailbox information. Each object has the attributes <code>name</code>, specifying the full name of the mailbox; <code>delimiter</code>, which is the hierarchy delimiter for the part of the hierarchy this mailbox is in; and <code>attributes</code>. <code>Attributes</code> is a bitmask that can be tested against:</p><ul> <li>  <b><code>LATT_NOINFERIORS</code></b> - This mailbox has no "children" (there are no mailboxes below this one).  </li> <li>  <b><code>LATT_NOSELECT</code></b> - This is only a container, not a mailbox - you cannot open it.  </li> <li>  <b><code>LATT_MARKED</code></b> - This mailbox is marked. Only used by UW-IMAPD.  </li> <li>  <b><code>LATT_UNMARKED</code></b> - This mailbox is not marked. Only used by UW-IMAPD.  </li> <li>  <b><code>LATT_REFERRAL</code></b> - This container has a referral to a remote mailbox.  </li> <li>  <b><code>LATT_HASCHILDREN</code></b> - This mailbox has selectable inferiors.  </li> <li>  <b><code>LATT_HASNOCHILDREN</code></b> - This mailbox has no selectable inferiors.  </li> </ul>
	 * @link http://php.net/manual/en/function.imap-getsubscribed.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_getsubscribed($imap_stream, string $ref, string $pattern): array {}

	/**
	 * Alias of imap_headerinfo()
	 * <p>This function is an alias of: <code>imap_headerinfo()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $fromlength <p>Number of characters for the <code>fetchfrom</code> property. Must be greater than or equal to zero.</p>
	 * @param int $subjectlength <p>Number of characters for the <code>fetchsubject</code> property Must be greater than or equal to zero.</p>
	 * @param string $defaulthost
	 * @return object
	 * @link http://php.net/manual/en/function.imap-header.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_header($imap_stream, int $msg_number, int $fromlength = 0, int $subjectlength = 0, string $defaulthost = NULL): object {}

	/**
	 * Read the header of the message
	 * <p>Gets information about the given message number by reading its headers.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $fromlength <p>Number of characters for the <code>fetchfrom</code> property. Must be greater than or equal to zero.</p>
	 * @param int $subjectlength <p>Number of characters for the <code>fetchsubject</code> property Must be greater than or equal to zero.</p>
	 * @param string $defaulthost
	 * @return object <p>Returns <b><code>FALSE</code></b> on error or, if successful, the information in an object with following properties:</p><ul> <li>  toaddress - full to: line, up to 1024 characters  </li> <li>  to - an array of objects from the To: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  fromaddress - full from: line, up to 1024 characters  </li> <li>  from - an array of objects from the From: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  ccaddress - full cc: line, up to 1024 characters  </li> <li>  cc - an array of objects from the Cc: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  bccaddress - full bcc: line, up to 1024 characters  </li> <li>  bcc - an array of objects from the Bcc: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  reply_toaddress - full Reply-To: line, up to 1024 characters  </li> <li>  reply_to - an array of objects from the Reply-To: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  senderaddress - full sender: line, up to 1024 characters  </li> <li>  sender - an array of objects from the Sender: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  return_pathaddress - full Return-Path: line, up to 1024 characters  </li> <li>  return_path - an array of objects from the Return-Path: line, with the following properties: <code>personal</code>, <code>adl</code>, <code>mailbox</code>, and <code>host</code>  </li> <li>  remail -  </li> <li>  date - The message date as found in its headers  </li> <li>  Date - Same as date  </li> <li>  subject - The message subject  </li> <li>  Subject - Same as subject  </li> <li>  in_reply_to -  </li> <li>  message_id -  </li> <li>  newsgroups -  </li> <li>  followup_to -  </li> <li>  references -  </li> <li>  Recent - <code>R</code> if recent and seen, <code>N</code> if recent and not seen, ' ' if not recent.  </li> <li>  Unseen - <code>U</code> if not seen AND not recent, ' ' if seen OR not seen and recent  </li> <li>  Flagged - <code>F</code> if flagged, ' ' if not flagged  </li> <li>  Answered - <code>A</code> if answered, ' ' if unanswered  </li> <li>  Deleted - <code>D</code> if deleted, ' ' if not deleted  </li> <li>  Draft - <code>X</code> if draft, ' ' if not draft  </li> <li>  Msgno - The message number  </li> <li>  MailDate -  </li> <li>  Size - The message size  </li> <li>  udate - mail message date in Unix time  </li> <li>  fetchfrom - from line formatted to fit <code>fromlength</code> characters  </li> <li>  fetchsubject - subject line formatted to fit <code>subjectlength</code> characters  </li> </ul>
	 * @link http://php.net/manual/en/function.imap-headerinfo.php
	 * @see imap_fetch_overview()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_headerinfo($imap_stream, int $msg_number, int $fromlength = 0, int $subjectlength = 0, string $defaulthost = NULL): object {}

	/**
	 * Returns headers for all messages in a mailbox
	 * <p>Returns headers for all messages in a mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return array <p>Returns an array of string formatted with header info. One element per mail message.</p>
	 * @link http://php.net/manual/en/function.imap-headers.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_headers($imap_stream): array {}

	/**
	 * Gets the last IMAP error that occurred during this page request
	 * <p>Gets the full text of the last IMAP error message that occurred on the current page. The error stack is untouched; calling <b>imap_last_error()</b> subsequently, with no intervening errors, will return the same error.</p>
	 * @return string <p>Returns the full text of the last IMAP error message that occurred on the current page. Returns <b><code>FALSE</code></b> if no error messages are available.</p>
	 * @link http://php.net/manual/en/function.imap-last-error.php
	 * @see imap_errors()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_last_error(): string {}

	/**
	 * Read the list of mailboxes
	 * <p>Read the list of mailboxes.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code>.</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @return array <p>Returns an array containing the names of the mailboxes or false in case of failure.</p>
	 * @link http://php.net/manual/en/function.imap-list.php
	 * @see imap_getmailboxes(), imap_lsub()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_list($imap_stream, string $ref, string $pattern): array {}

	/**
	 * Alias of imap_list()
	 * <p>This function is an alias of: <code>imap_list()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code>.</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @return array
	 * @link http://php.net/manual/en/function.imap-listmailbox.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_listmailbox($imap_stream, string $ref, string $pattern): array {}

	/**
	 * Returns the list of mailboxes that matches the given text
	 * <p>Returns an array containing the names of the mailboxes that have <code>content</code> in the text of the mailbox.</p><p>This function is similar to <code>imap_listmailbox()</code>, but it will additionally check for the presence of the string <code>content</code> inside the mailbox data.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @param string $content <p>The searched string</p>
	 * @return array <p>Returns an array containing the names of the mailboxes that have <code>content</code> in the text of the mailbox.</p>
	 * @link http://php.net/manual/en/function.imap-listscan.php
	 * @see imap_listmailbox(), imap_search()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_listscan($imap_stream, string $ref, string $pattern, string $content): array {}

	/**
	 * Alias of imap_lsub()
	 * <p>This function is an alias of: <code>imap_lsub()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @return array
	 * @link http://php.net/manual/en/function.imap-listsubscribed.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_listsubscribed($imap_stream, string $ref, string $pattern): array {}

	/**
	 * List all the subscribed mailboxes
	 * <p>Gets an array of all the mailboxes that you have subscribed.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @return array <p>Returns an array of all the subscribed mailboxes.</p>
	 * @link http://php.net/manual/en/function.imap-lsub.php
	 * @see imap_list(), imap_getmailboxes()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_lsub($imap_stream, string $ref, string $pattern): array {}

	/**
	 * Send an email message
	 * <p>This function allows sending of emails with correct handling of Cc and Bcc receivers.</p><p>The parameters <code>to</code>, <code>cc</code> and <code>bcc</code> are all strings and are all parsed as RFC822 address lists.</p>
	 * @param string $to <p>The receiver</p>
	 * @param string $subject <p>The mail subject</p>
	 * @param string $message <p>The mail body, see <code>imap_mail_compose()</code></p>
	 * @param string $additional_headers <p>As string with additional headers to be set on the mail</p>
	 * @param string $cc
	 * @param string $bcc <p>The receivers specified in <code>bcc</code> will get the mail, but are excluded from the headers.</p>
	 * @param string $rpath <p>Use this parameter to specify return path upon mail delivery failure. This is useful when using PHP as a mail client for multiple users.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-mail.php
	 * @see mail(), imap_mail_compose()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_mail(string $to, string $subject, string $message, string $additional_headers = NULL, string $cc = NULL, string $bcc = NULL, string $rpath = NULL): bool {}

	/**
	 * Create a MIME message based on given envelope and body sections
	 * <p>Create a MIME message based on the given <code>envelope</code> and <code>body</code> sections.</p>
	 * @param array $envelope <p>An associative array of header fields. Valid keys are: <code>"remail"</code>, <code>"return_path"</code>, <code>"date"</code>, <code>"from"</code>, <code>"reply_to"</code>, <code>"in_reply_to"</code>, <code>"subject"</code>, <code>"to"</code>, <code>"cc"</code>, <code>"bcc"</code> and <code>"message_id"</code>, which set the respective message headers to the given <code>string</code>. To set additional headers, the key <code>"custom_headers"</code> is supported, which expects an array of those headers, e.g. <code>["User-Agent: My Mail Client"]</code>.</p>
	 * @param array $body <p>An indexed array of bodies. The first body is the main body of the message; only if it has a type of <b><code>TYPEMULTIPART</code></b>, further bodies are processed; these bodies constitute the bodies of the parts.</p> <p></p> <b>Body Array Structure</b>   Key Type Description     <code>type</code> <code>int</code>  The MIME type. One of <b><code>TYPETEXT</code></b> (default), <b><code>TYPEMULTIPART</code></b>, <b><code>TYPEMESSAGE</code></b>, <b><code>TYPEAPPLICATION</code></b>, <b><code>TYPEAUDIO</code></b>, <b><code>TYPEIMAGE</code></b>, <b><code>TYPEMODEL</code></b> or <b><code>TYPEOTHER</code></b>.    <code>encoding</code> <code>int</code>  The <code>Content-Transfer-Encoding</code>. One of <b><code>ENC7BIT</code></b> (default), <b><code>ENC8BIT</code></b>, <b><code>ENCBINARY</code></b>, <b><code>ENCBASE64</code></b>, <b><code>ENCQUOTEDPRINTABLE</code></b> or <b><code>ENCOTHER</code></b>.    <code>charset</code> <code>string</code> The charset parameter of the MIME type.   <code>type.parameters</code> <code>array</code> An associative <code>array</code> of <code>Content-Type</code> parameter names and their values.   <code>subtype</code> <code>string</code> The MIME subtype, e.g. <code>'jpeg'</code> for <b><code>TYPEIMAGE</code></b>.   <code>id</code> <code>string</code> The <code>Content-ID</code>.   <code>description</code> <code>string</code> The <code>Content-Description</code>.   <code>disposition.type</code> <code>string</code> The <code>Content-Disposition</code>, e.g. <code>'attachment'</code>.   <code>disposition</code> <code>array</code> An associative <code>array</code> of <code>Content-Disposition</code> parameter names and values.   <code>contents.data</code> <code>string</code> The payload.   <code>lines</code> <code>int</code> The size of the payload in lines.   <code>bytes</code> <code>int</code> The size of the payload in bytes.   <code>md5</code> <code>string</code> The MD5 checksum of the payload.
	 * @return string|false <p>Returns the MIME message as <code>string</code>, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-mail-compose.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_mail_compose(array $envelope, array $body) {}

	/**
	 * Copy specified messages to a mailbox
	 * <p>Copies mail messages specified by <code>msglist</code> to specified mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $msglist <p><code>msglist</code> is a range not just message numbers (as described in RFC2060).</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param int $options <p><code>options</code> is a bitmask of one or more of</p><ul> <li>  <b><code>CP_UID</code></b> - the sequence numbers contain UIDS  </li> <li>  <b><code>CP_MOVE</code></b> - Delete the messages from the current mailbox after copying  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-mail-copy.php
	 * @see imap_mail_move()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_mail_copy($imap_stream, string $msglist, string $mailbox, int $options = 0): bool {}

	/**
	 * Move specified messages to a mailbox
	 * <p>Moves mail messages specified by <code>msglist</code> to the specified <code>mailbox</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $msglist <p><code>msglist</code> is a range not just message numbers (as described in RFC2060).</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param int $options <p><code>options</code> is a bitmask and may contain the single option:</p><ul> <li>  <b><code>CP_UID</code></b> - the sequence numbers contain UIDS  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-mail-move.php
	 * @see imap_mail_copy()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_mail_move($imap_stream, string $msglist, string $mailbox, int $options = 0): bool {}

	/**
	 * Get information about the current mailbox
	 * <p>Checks the current mailbox status on the server. It is similar to <code>imap_status()</code>, but will additionally sum up the size of all messages in the mailbox, which will take some additional time to execute.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return object <p>Returns the information in an object with following properties:</p> <b>Mailbox properties</b>   Date date of last change (current datetime)   Driver driver   Mailbox name of the mailbox   Nmsgs number of messages   Recent number of recent messages   Unread number of unread messages   Deleted number of deleted messages   Size mailbox size   <p>Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-mailboxmsginfo.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_mailboxmsginfo($imap_stream): object {}

	/**
	 * Decode MIME header elements
	 * <p>Decodes MIME message header extensions that are non ASCII text (see RFC2047).</p>
	 * @param string $text <p>The MIME text</p>
	 * @return array <p>The decoded elements are returned in an array of objects, where each object has two properties, <code>charset</code> and <code>text</code>.</p><p>If the element hasn't been encoded, and in other words is in plain US-ASCII, the <code>charset</code> property of that element is set to <code>default</code>.</p>
	 * @link http://php.net/manual/en/function.imap-mime-header-decode.php
	 * @see imap_utf8()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_mime_header_decode(string $text): array {}

	/**
	 * Gets the message sequence number for the given UID
	 * <p>Returns the message sequence number for the given <code>uid</code>.</p><p>This function is the inverse of <code>imap_uid()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $uid <p>The message UID</p>
	 * @return int <p>Returns the message sequence number for the given <code>uid</code>.</p>
	 * @link http://php.net/manual/en/function.imap-msgno.php
	 * @see imap_uid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_msgno($imap_stream, int $uid): int {}

	/**
	 * Decode a modified UTF-7 string to UTF-8
	 * <p>Decode a modified UTF-7 (as specified in RFC 2060, section 5.1.3) string to UTF-8.</p><p><b>Note</b>:</p><p>This function is only available, if libcclient exports utf8_to_mutf7().</p>
	 * @param string $in <p>A string encoded in modified UTF-7.</p>
	 * @return string|false <p>Returns <code>in</code> converted to UTF-8, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-mutf7-to-utf8.php
	 * @see imap_utf8_to_mutf7()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function imap_mutf7_to_utf8(string $in) {}

	/**
	 * Gets the number of messages in the current mailbox
	 * <p>Gets the number of messages in the current mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return int <p>Return the number of messages in the current mailbox, as an integer, or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.imap-num-msg.php
	 * @see imap_num_recent(), imap_status()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_num_msg($imap_stream): int {}

	/**
	 * Gets the number of recent messages in current mailbox
	 * <p>Gets the number of recent messages in the current mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return int <p>Returns the number of recent messages in the current mailbox, as an integer.</p>
	 * @link http://php.net/manual/en/function.imap-num-recent.php
	 * @see imap_num_msg(), imap_status()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_num_recent($imap_stream): int {}

	/**
	 * Open an IMAP stream to a mailbox
	 * <p>Opens an IMAP stream to a <code>mailbox</code>.</p><p>This function can also be used to open streams to POP3 and NNTP servers, but some functions and features are only available on IMAP servers.</p>
	 * @param string $mailbox <p>A mailbox name consists of a server and a mailbox path on this server. The special name <code>INBOX</code> stands for the current users personal mailbox. Mailbox names that contain international characters besides those in the printable ASCII space have to be encoded with <code>imap_utf7_encode()</code>.</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p> <p>The server part, which is enclosed in '{' and '}', consists of the servers name or ip address, an optional port (prefixed by ':'), and an optional protocol specification (prefixed by '/').</p> <p>The server part is mandatory in all mailbox parameters.</p> <p>All names which start with <code>{</code> are remote names, and are in the form <code>"{" remote_system_name [":" port] [flags] "}" [mailbox_name]</code> where:</p><ul> <li>  <code>remote_system_name</code> - Internet domain name or bracketed IP address of server.  </li> <li>  <code>port</code> - optional TCP port number, default is the default port for that service  </li> <li>  <code>flags</code> - optional flags, see following table.  </li> <li>  <code>mailbox_name</code> - remote mailbox name, default is INBOX  </li> </ul> <p></p> <b>Optional flags for names</b>   Flag Description     <code>/service=</code><i>service</i> mailbox access service, default is "imap"   <code>/user=</code><i>user</i> remote user name for login on the server   <code>/authuser=</code><i>user</i> remote authentication user; if specified this is the user name whose password is used (e.g. administrator)   <code>/anonymous</code> remote access as anonymous user   <code>/debug</code> record protocol telemetry in application's debug log   <code>/secure</code> do not transmit a plaintext password over the network   <code>/imap</code>, <code>/imap2</code>, <code>/imap2bis</code>, <code>/imap4</code>, <code>/imap4rev1</code> equivalent to <code>/service=imap</code>   <code>/pop3</code> equivalent to <code>/service=pop3</code>   <code>/nntp</code> equivalent to <code>/service=nntp</code>   <code>/norsh</code> do not use rsh or ssh to establish a preauthenticated IMAP session   <code>/ssl</code> use the <code>Secure Socket Layer</code> to encrypt the session   <code>/validate-cert</code> validate certificates from TLS/SSL server (this is the default behavior)   <code>/novalidate-cert</code> do not validate certificates from TLS/SSL server, needed if server uses self-signed certificates   <code>/tls</code> force use of <code>start-TLS</code> to encrypt the session, and reject connection to servers that do not support it   <code>/notls</code> do not do <code>start-TLS</code> to encrypt the session, even with servers that support it   <code>/readonly</code> request read-only mailbox open (IMAP only; ignored on NNTP, and an error with SMTP and POP3)
	 * @param string $username <p>The user name</p>
	 * @param string $password <p>The password associated with the <code>username</code></p>
	 * @param int $options <p>The <code>options</code> are a bit mask with one or more of the following:</p><ul> <li>  <b><code>OP_READONLY</code></b> - Open mailbox read-only  </li> <li>  <b><code>OP_ANONYMOUS</code></b> - Don't use or update a .newsrc for news (NNTP only)  </li> <li>  <b><code>OP_HALFOPEN</code></b> - For IMAP and NNTP names, open a connection but don't open a mailbox.  </li> <li>  <b><code>CL_EXPUNGE</code></b> - Expunge mailbox automatically upon mailbox close (see also <code>imap_delete()</code> and <code>imap_expunge()</code>)  </li> <li>  <b><code>OP_DEBUG</code></b> - Debug protocol negotiations  </li> <li>  <b><code>OP_SHORTCACHE</code></b> - Short (<code>elt</code>-only) caching  </li> <li>  <b><code>OP_SILENT</code></b> - Don't pass up events (internal use)  </li> <li>  <b><code>OP_PROTOTYPE</code></b> - Return driver prototype  </li> <li>  <b><code>OP_SECURE</code></b> - Don't do non-secure authentication  </li> </ul>
	 * @param int $n_retries <p>Number of maximum connect attempts</p>
	 * @param array $params <p>Connection parameters, the following (string) keys maybe used to set one or more connection parameters:</p><ul> <li>  <code>DISABLE_AUTHENTICATOR</code> - Disable authentication properties  </li> </ul>
	 * @return resource <p>Returns an IMAP stream on success or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.imap-open.php
	 * @see imap_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_open(string $mailbox, string $username, string $password, int $options = 0, int $n_retries = 0, array $params = array()) {}

	/**
	 * Check if the IMAP stream is still active
	 * <p><b>imap_ping()</b> pings the stream to see if it's still active. It may discover new mail; this is the preferred method for a periodic "new mail check" as well as a "keep alive" for servers which have inactivity timeout.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the stream is still alive, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.imap-ping.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_ping($imap_stream): bool {}

	/**
	 * Convert a quoted-printable string to an 8 bit string
	 * <p>Convert a quoted-printable string to an 8 bit string according to RFC2045, section 6.7.</p>
	 * @param string $string <p>A quoted-printable string</p>
	 * @return string <p>Returns an 8 bits string.</p>
	 * @link http://php.net/manual/en/function.imap-qprint.php
	 * @see imap_8bit()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_qprint(string $string): string {}

	/**
	 * Alias of imap_renamemailbox()
	 * <p>This function is an alias of: <code>imap_renamemailbox()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $old_mbox <p>The old mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $new_mbox <p>The new mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool
	 * @link http://php.net/manual/en/function.imap-rename.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_rename($imap_stream, string $old_mbox, string $new_mbox): bool {}

	/**
	 * Rename an old mailbox to new mailbox
	 * <p>This function renames on old mailbox to new mailbox (see <code>imap_open()</code> for the format of <code>mbox</code> names).</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $old_mbox <p>The old mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $new_mbox <p>The new mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-renamemailbox.php
	 * @see imap_createmailbox(), imap_deletemailbox()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_renamemailbox($imap_stream, string $old_mbox, string $new_mbox): bool {}

	/**
	 * Reopen IMAP stream to new mailbox
	 * <p>Reopens the specified stream to a new <code>mailbox</code> on an IMAP or NNTP server.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param int $options <p>The <code>options</code> are a bit mask with one or more of the following:</p><ul> <li>  <b><code>OP_READONLY</code></b> - Open mailbox read-only  </li> <li>  <b><code>OP_ANONYMOUS</code></b> - Don't use or update a .newsrc for news (NNTP only)  </li> <li>  <b><code>OP_HALFOPEN</code></b> - For IMAP and NNTP names, open a connection but don't open a mailbox.  </li> <li>  <b><code>OP_EXPUNGE</code></b> - Silently expunge recycle stream  </li> <li>  <b><code>CL_EXPUNGE</code></b> - Expunge mailbox automatically upon mailbox close (see also <code>imap_delete()</code> and <code>imap_expunge()</code>)  </li> </ul>
	 * @param int $n_retries <p>Number of maximum connect attempts</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the stream is reopened, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.imap-reopen.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_reopen($imap_stream, string $mailbox, int $options = 0, int $n_retries = 0): bool {}

	/**
	 * Parses an address string
	 * <p>Parses the address string as defined in RFC2822 and for each address.</p>
	 * @param string $address <p>A string containing addresses</p>
	 * @param string $default_host <p>The default host name</p>
	 * @return array <p>Returns an array of objects. The objects properties are:</p><ul> <li>  mailbox - the mailbox name (username)  </li> <li>  host - the host name  </li> <li>  personal - the personal name  </li> <li>  adl - at domain source route  </li> </ul>
	 * @link http://php.net/manual/en/function.imap-rfc822-parse-adrlist.php
	 * @see imap_rfc822_parse_headers()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_rfc822_parse_adrlist(string $address, string $default_host): array {}

	/**
	 * Parse mail headers from a string
	 * <p>Gets an object of various header elements, similar to <code>imap_header()</code>.</p>
	 * @param string $headers <p>The parsed headers data</p>
	 * @param string $defaulthost <p>The default host name</p>
	 * @return object <p>Returns an object similar to the one returned by <code>imap_header()</code>, except for the flags and other properties that come from the IMAP server.</p>
	 * @link http://php.net/manual/en/function.imap-rfc822-parse-headers.php
	 * @see imap_rfc822_parse_adrlist()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_rfc822_parse_headers(string $headers, string $defaulthost = "UNKNOWN"): object {}

	/**
	 * Returns a properly formatted email address given the mailbox, host, and personal info
	 * <p>Returns a properly formatted email address as defined in RFC2822 given the needed information.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $host <p>The email host part</p>
	 * @param string $personal <p>The name of the account owner</p>
	 * @return string <p>Returns a string properly formatted email address as defined in RFC2822.</p>
	 * @link http://php.net/manual/en/function.imap-rfc822-write-address.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_rfc822_write_address(string $mailbox, string $host, string $personal): string {}

	/**
	 * Save a specific body section to a file
	 * <p>Saves a part or the whole body of the specified message.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param mixed $file <p>The path to the saved file as a string, or a valid file descriptor returned by <code>fopen()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param string $part_number <p>The part number. It is a string of integers delimited by period which index into a body part list as per the IMAP4 specification</p>
	 * @param int $options <p>A bitmask with one or more of the following:</p><ul> <li>  <b><code>FT_UID</code></b> - The <code>msg_number</code> is a UID  </li> <li>  <b><code>FT_PEEK</code></b> - Do not set the \Seen flag if not already set  </li> <li>  <b><code>FT_INTERNAL</code></b> - The return string is in internal format, will not canonicalize to CRLF.  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-savebody.php
	 * @see imap_fetchbody()
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	function imap_savebody($imap_stream, $file, int $msg_number, string $part_number = "", int $options = 0): bool {}

	/**
	 * Alias of imap_listscan()
	 * <p>This function is an alias of: <code>imap_listscan()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @param string $content <p>The searched string</p>
	 * @return array
	 * @link http://php.net/manual/en/function.imap-scan.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_scan($imap_stream, string $ref, string $pattern, string $content): array {}

	/**
	 * Alias of imap_listscan()
	 * <p>This function is an alias of: <code>imap_listscan()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $ref <p><code>ref</code> should normally be just the server specification as described in <code>imap_open()</code></p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $pattern <p>Specifies where in the mailbox hierarchy to start searching.</p><p>There are two special characters you can pass as part of the <code>pattern</code>: '<code>&#42;</code>' and '<code>%</code>'. '<code>&#42;</code>' means to return all mailboxes. If you pass <code>pattern</code> as '<code>&#42;</code>', you will get a list of the entire mailbox hierarchy. '<code>%</code>' means to return the current level only. '<code>%</code>' as the <code>pattern</code> parameter will return only the top level mailboxes; '<code>~/mail/%</code>' on <code>UW_IMAPD</code> will return every mailbox in the ~/mail directory, but none in subfolders of that directory.</p>
	 * @param string $content <p>The searched string</p>
	 * @return array
	 * @link http://php.net/manual/en/function.imap-scanmailbox.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_scanmailbox($imap_stream, string $ref, string $pattern, string $content): array {}

	/**
	 * This function returns an array of messages matching the given search criteria
	 * <p>This function performs a search on the mailbox currently opened in the given IMAP stream.</p><p>For example, to match all unanswered messages sent by Mom, you'd use: "UNANSWERED FROM mom". Searches appear to be case insensitive. This list of criteria is from a reading of the UW c-client source code and may be incomplete or inaccurate (see also RFC1176, section "tag SEARCH search_criteria").</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $criteria <p>A string, delimited by spaces, in which the following keywords are allowed. Any multi-word arguments (e.g. <code>FROM "joey smith"</code>) must be quoted. Results will match all <code>criteria</code> entries.</p><ul> <li>  ALL - return all messages matching the rest of the criteria  </li> <li>  ANSWERED - match messages with the \\ANSWERED flag set  </li> <li>  BCC "string" - match messages with "string" in the Bcc: field  </li> <li>  BEFORE "date" - match messages with Date: before "date"  </li> <li>  BODY "string" - match messages with "string" in the body of the message  </li> <li>  CC "string" - match messages with "string" in the Cc: field  </li> <li>  DELETED - match deleted messages  </li> <li>  FLAGGED - match messages with the \\FLAGGED (sometimes referred to as Important or Urgent) flag set  </li> <li>  FROM "string" - match messages with "string" in the From: field  </li> <li>  KEYWORD "string" - match messages with "string" as a keyword  </li> <li>  NEW - match new messages  </li> <li>  OLD - match old messages  </li> <li>  ON "date" - match messages with Date: matching "date"  </li> <li>  RECENT - match messages with the \\RECENT flag set  </li> <li>  SEEN - match messages that have been read (the \\SEEN flag is set)  </li> <li>  SINCE "date" - match messages with Date: after "date"  </li> <li>  SUBJECT "string" - match messages with "string" in the Subject:  </li> <li>  TEXT "string" - match messages with text "string"  </li> <li>  TO "string" - match messages with "string" in the To:  </li> <li>  UNANSWERED - match messages that have not been answered  </li> <li>  UNDELETED - match messages that are not deleted  </li> <li>  UNFLAGGED - match messages that are not flagged  </li> <li>  UNKEYWORD "string" - match messages that do not have the keyword "string"  </li> <li>  UNSEEN - match messages which have not been read yet  </li> </ul>
	 * @param int $options <p>Valid values for <code>options</code> are <b><code>SE_UID</code></b>, which causes the returned array to contain UIDs instead of messages sequence numbers.</p>
	 * @param string $charset <p>MIME character set to use when searching strings.</p>
	 * @return array <p>Returns an array of message numbers or UIDs.</p><p>Return <b><code>FALSE</code></b> if it does not understand the search <code>criteria</code> or no messages have been found.</p>
	 * @link http://php.net/manual/en/function.imap-search.php
	 * @see imap_listscan()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_search($imap_stream, string $criteria, int $options = SE_FREE, string $charset = NULL): array {}

	/**
	 * Sets a quota for a given mailbox
	 * <p>Sets an upper limit quota on a per mailbox basis.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $quota_root <p>The mailbox to have a quota set. This should follow the IMAP standard format for a mailbox: <code>user.name</code>.</p>
	 * @param int $quota_limit <p>The maximum size (in KB) for the <code>quota_root</code></p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-set-quota.php
	 * @see imap_open(), imap_get_quota()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function imap_set_quota($imap_stream, string $quota_root, int $quota_limit): bool {}

	/**
	 * Sets the ACL for a given mailbox
	 * <p>Sets the ACL for a giving mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param string $id <p>The user to give the rights to.</p>
	 * @param string $rights <p>The rights to give to the user. Passing an empty string will delete acl.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-setacl.php
	 * @see imap_getacl()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imap_setacl($imap_stream, string $mailbox, string $id, string $rights): bool {}

	/**
	 * Sets flags on messages
	 * <p>Causes a store to add the specified <code>flag</code> to the flags set for the messages in the specified <code>sequence</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $sequence <p>A sequence of message numbers. You can enumerate desired messages with the <code>X,Y</code> syntax, or retrieve all messages within an interval with the <code>X:Y</code> syntax</p>
	 * @param string $flag <p>The flags which you can set are <code>\Seen</code>, <code>\Answered</code>, <code>\Flagged</code>, <code>\Deleted</code>, and <code>\Draft</code> as defined by RFC2060.</p>
	 * @param int $options <p>A bit mask that may contain the single option:</p><ul> <li>  <b><code>ST_UID</code></b> - The sequence argument contains UIDs instead of sequence numbers  </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-setflag-full.php
	 * @see imap_clearflag_full()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_setflag_full($imap_stream, string $sequence, string $flag, int $options = NIL): bool {}

	/**
	 * Gets and sort messages
	 * <p>Gets and sorts message numbers by the given parameters.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $criteria <p>Criteria can be one (and only one) of the following:</p><ul> <li>  <b><code>SORTDATE</code></b> - message Date  </li> <li>  <b><code>SORTARRIVAL</code></b> - arrival date  </li> <li>  <b><code>SORTFROM</code></b> - mailbox in first From address  </li> <li>  <b><code>SORTSUBJECT</code></b> - message subject  </li> <li>  <b><code>SORTTO</code></b> - mailbox in first To address  </li> <li>  <b><code>SORTCC</code></b> - mailbox in first cc address  </li> <li>  <b><code>SORTSIZE</code></b> - size of message in octets  </li> </ul>
	 * @param int $reverse <p>Set this to 1 for reverse sorting</p>
	 * @param int $options <p>The <code>options</code> are a bitmask of one or more of the following:</p><ul> <li>  <b><code>SE_UID</code></b> - Return UIDs instead of sequence numbers  </li> <li>  <b><code>SE_NOPREFETCH</code></b> - Don't prefetch searched messages  </li> </ul>
	 * @param string $search_criteria <p>IMAP2-format search criteria string. For details see <code>imap_search()</code>.</p>
	 * @param string $charset <p>MIME character set to use when sorting strings.</p>
	 * @return array|false <p>Returns an array of message numbers sorted by the given parameters, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-sort.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_sort($imap_stream, int $criteria, int $reverse, int $options = 0, string $search_criteria = NULL, string $charset = NULL) {}

	/**
	 * Returns status information on a mailbox
	 * <p>Gets status information about the given <code>mailbox</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @param int $options <p>Valid flags are:</p><ul> <li>  <b><code>SA_MESSAGES</code></b> - set $status-&gt;messages to the number of messages in the mailbox  </li> <li>  <b><code>SA_RECENT</code></b> - set $status-&gt;recent to the number of recent messages in the mailbox  </li> <li>  <b><code>SA_UNSEEN</code></b> - set $status-&gt;unseen to the number of unseen (new) messages in the mailbox  </li> <li>  <b><code>SA_UIDNEXT</code></b> - set $status-&gt;uidnext to the next uid to be used in the mailbox  </li> <li>  <b><code>SA_UIDVALIDITY</code></b> - set $status-&gt;uidvalidity to a constant that changes when uids for the mailbox may no longer be valid  </li> <li>  <b><code>SA_ALL</code></b> - set all of the above  </li> </ul>
	 * @return object <p>This function returns an object containing status information. The object has the following properties: <code>messages</code>, <code>recent</code>, <code>unseen</code>, <code>uidnext</code>, and <code>uidvalidity</code>.</p><p><code>flags</code> is also set, which contains a bitmask which can be checked against any of the above constants.</p>
	 * @link http://php.net/manual/en/function.imap-status.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_status($imap_stream, string $mailbox, int $options): object {}

	/**
	 * Subscribe to a mailbox
	 * <p>Subscribe to a new mailbox.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-subscribe.php
	 * @see imap_unsubscribe()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_subscribe($imap_stream, string $mailbox): bool {}

	/**
	 * Returns a tree of threaded message
	 * <p>Gets a tree of a threaded message.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $options
	 * @return array <p><b>imap_thread()</b> returns an associative array containing a tree of messages threaded by <code>REFERENCES</code>, or <b><code>FALSE</code></b> on error.</p><p>Every message in the current mailbox will be represented by three entries in the resulting array:</p><ul> <li><p>$thread["XX.num"] - current message number</p></li> <li><p>$thread["XX.next"]</p></li> <li><p>$thread["XX.branch"]</p></li> </ul>
	 * @link http://php.net/manual/en/function.imap-thread.php
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function imap_thread($imap_stream, int $options = SE_FREE): array {}

	/**
	 * Set or fetch imap timeout
	 * <p>Sets or fetches the imap timeout.</p>
	 * @param int $timeout_type <p>One of the following: <b><code>IMAP_OPENTIMEOUT</code></b>, <b><code>IMAP_READTIMEOUT</code></b>, <b><code>IMAP_WRITETIMEOUT</code></b>, or <b><code>IMAP_CLOSETIMEOUT</code></b>.</p>
	 * @param int $timeout <p>The timeout, in seconds.</p>
	 * @return mixed <p>If the <code>timeout</code> parameter is set, this function returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p><p>If <code>timeout</code> is not provided or evaluates to -1, the current timeout value of <code>timeout_type</code> is returned as an integer.</p>
	 * @link http://php.net/manual/en/function.imap-timeout.php
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function imap_timeout(int $timeout_type, int $timeout = -1) {}

	/**
	 * This function returns the UID for the given message sequence number
	 * <p>This function returns the UID for the given message sequence number. An UID is a unique identifier that will not change over time while a message sequence number may change whenever the content of the mailbox changes.</p><p>This function is the inverse of <code>imap_msgno()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number.</p>
	 * @return int <p>The UID of the given message.</p>
	 * @link http://php.net/manual/en/function.imap-uid.php
	 * @see imap_msgno()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_uid($imap_stream, int $msg_number): int {}

	/**
	 * Unmark the message which is marked deleted
	 * <p>Removes the deletion flag for a specified message, which is set by <code>imap_delete()</code> or <code>imap_mail_move()</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param int $msg_number <p>The message number</p>
	 * @param int $flags
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-undelete.php
	 * @see imap_delete(), imap_mail_move()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_undelete($imap_stream, int $msg_number, int $flags = 0): bool {}

	/**
	 * Unsubscribe from a mailbox
	 * <p>Unsubscribe from the specified <code>mailbox</code>.</p>
	 * @param resource $imap_stream <p>An IMAP stream returned by <code>imap_open()</code>.</p>
	 * @param string $mailbox <p>The mailbox name, see <code>imap_open()</code> for more information</p> <p><b>Warning</b></p><p>Passing untrusted data to this parameter is <i>insecure</i>, unless imap.enable_insecure_rsh is disabled.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-unsubscribe.php
	 * @see imap_subscribe()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_unsubscribe($imap_stream, string $mailbox): bool {}

	/**
	 * Decodes a modified UTF-7 encoded string
	 * <p>Decodes modified UTF-7 <code>text</code> into ISO-8859-1 string.</p><p>This function is needed to decode mailbox names that contain certain characters which are not in range of printable ASCII characters.</p>
	 * @param string $text <p>A modified UTF-7 encoding string, as defined in RFC 2060, section 5.1.3 (original UTF-7 was defined in RFC1642).</p>
	 * @return string <p>Returns a string that is encoded in ISO-8859-1 and consists of the same sequence of characters in <code>text</code>, or <b><code>FALSE</code></b> if <code>text</code> contains invalid modified UTF-7 sequence or <code>text</code> contains a character that is not part of ISO-8859-1 character set.</p>
	 * @link http://php.net/manual/en/function.imap-utf7-decode.php
	 * @see imap_utf7_encode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_utf7_decode(string $text): string {}

	/**
	 * Converts ISO-8859-1 string to modified UTF-7 text
	 * <p>Converts <code>data</code> to modified UTF-7 text.</p><p>This is needed to encode mailbox names that contain certain characters which are not in range of printable ASCII characters.</p>
	 * @param string $data <p>An ISO-8859-1 string.</p>
	 * @return string <p>Returns <code>data</code> encoded with the modified UTF-7 encoding as defined in RFC 2060, section 5.1.3 (original UTF-7 was defined in RFC1642).</p>
	 * @link http://php.net/manual/en/function.imap-utf7-encode.php
	 * @see imap_utf7_decode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_utf7_encode(string $data): string {}

	/**
	 * Converts MIME-encoded text to UTF-8
	 * <p>Converts the given <code>mime_encoded_text</code> to UTF-8, if the declared charset is known to libc-client. Otherwise the given text is decoded, but not converted to UTF-8.</p>
	 * @param string $mime_encoded_text <p>A MIME encoded string. MIME encoding method and the UTF-8 specification are described in RFC2047 and RFC2044 respectively.</p>
	 * @return string <p>Returns the decoded string, if possible converted to UTF-8.</p>
	 * @link http://php.net/manual/en/function.imap-utf8.php
	 * @see imap_mime_header_decode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function imap_utf8(string $mime_encoded_text): string {}

	/**
	 * Encode a UTF-8 string to modified UTF-7
	 * <p>Encode a UTF-8 string to modified UTF-7 (as specified in RFC 2060, section 5.1.3).</p><p><b>Note</b>:</p><p>This function is only available, if libcclient exports utf8_to_mutf7().</p>
	 * @param string $in <p>A UTF-8 encoded string.</p>
	 * @return string|false <p>Returns <code>in</code> converted to modified UTF-7, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.imap-utf8-to-mutf7.php
	 * @see imap_mutf7_to_utf8()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function imap_utf8_to_mutf7(string $in) {}

	/**
	 * silently expunge the mailbox before closing when calling <code>imap_close()</code>
	 */
	define('CL_EXPUNGE', null);

	/**
	 * Delete the messages from the current mailbox after copying with <code>imap_mail_copy()</code>
	 */
	define('CP_MOVE', null);

	/**
	 * the sequence numbers contain UIDS
	 */
	define('CP_UID', null);

	/**
	 * Body encoding: 7 bit SMTP semantic data
	 */
	define('ENC7BIT', null);

	/**
	 * Body encoding: 8 bit SMTP semantic data
	 */
	define('ENC8BIT', null);

	/**
	 * Body encoding: base-64 encoded data
	 */
	define('ENCBASE64', null);

	/**
	 * Body encoding: 8 bit binary data
	 */
	define('ENCBINARY', null);

	/**
	 * Body encoding: unknown
	 */
	define('ENCOTHER', null);

	/**
	 * Body encoding: human-readable 8-as-7 bit data
	 */
	define('ENCQUOTEDPRINTABLE', null);

	/**
	 * The return string is in internal format, will not canonicalize to CRLF.
	 */
	define('FT_INTERNAL', null);

	define('FT_NOT', null);

	/**
	 * Do not set the \Seen flag if not already set
	 */
	define('FT_PEEK', null);

	define('FT_PREFETCHTEXT', null);

	/**
	 * The parameter is a UID
	 */
	define('FT_UID', null);

	define('IMAP_CLOSETIMEOUT', null);

	/**
	 * Garbage collector, clear message cache elements.
	 */
	define('IMAP_GC_ELT', null);

	/**
	 * Garbage collector, clear envelopes and bodies.
	 */
	define('IMAP_GC_ENV', null);

	/**
	 * Garbage collector, clear texts.
	 */
	define('IMAP_GC_TEXTS', null);

	define('IMAP_OPENTIMEOUT', null);

	define('IMAP_READTIMEOUT', null);

	define('IMAP_WRITETIMEOUT', null);

	/**
	 * This mailbox has selectable inferiors.
	 */
	define('LATT_HASCHILDREN', null);

	/**
	 * This mailbox has no selectable inferiors.
	 */
	define('LATT_HASNOCHILDREN', null);

	/**
	 * This mailbox is marked. Only used by UW-IMAPD.
	 */
	define('LATT_MARKED', null);

	/**
	 * This mailbox has no "children" (there are no mailboxes below this one).
	 */
	define('LATT_NOINFERIORS', null);

	/**
	 * This is only a container, not a mailbox - you cannot open it.
	 */
	define('LATT_NOSELECT', null);

	/**
	 * This container has a referral to a remote mailbox.
	 */
	define('LATT_REFERRAL', null);

	/**
	 * This mailbox is not marked. Only used by UW-IMAPD.
	 */
	define('LATT_UNMARKED', null);

	define('NIL', null);

	/**
	 * Don't use or update a .newsrc for news (NNTP only)
	 */
	define('OP_ANONYMOUS', null);

	define('OP_DEBUG', null);

	define('OP_EXPUNGE', null);

	/**
	 * For IMAP and NNTP names, open a connection but don't open a mailbox.
	 */
	define('OP_HALFOPEN', null);

	define('OP_PROTOTYPE', null);

	/**
	 * Open mailbox read-only
	 */
	define('OP_READONLY', null);

	define('OP_SECURE', null);

	define('OP_SHORTCACHE', null);

	define('OP_SILENT', null);

	define('SA_ALL', null);

	define('SA_MESSAGES', null);

	define('SA_RECENT', null);

	define('SA_UIDNEXT', null);

	define('SA_UIDVALIDITY', null);

	define('SA_UNSEEN', null);

	define('SE_FREE', null);

	/**
	 * Don't prefetch searched messages
	 */
	define('SE_NOPREFETCH', null);

	/**
	 * Return UIDs instead of sequence numbers
	 */
	define('SE_UID', null);

	define('SO_FREE', null);

	define('SO_NOSERVER', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: arrival date
	 */
	define('SORTARRIVAL', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: mailbox in first cc address
	 */
	define('SORTCC', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: message Date
	 */
	define('SORTDATE', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: mailbox in first From address
	 */
	define('SORTFROM', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: size of message in octets
	 */
	define('SORTSIZE', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: message subject
	 */
	define('SORTSUBJECT', null);

	/**
	 * Sort criteria for <code>imap_sort()</code>: mailbox in first To address
	 */
	define('SORTTO', null);

	define('ST_SET', null);

	define('ST_SILENT', null);

	/**
	 * The sequence argument contains UIDs instead of sequence numbers
	 */
	define('ST_UID', null);

	/**
	 * Primary body type: application data
	 */
	define('TYPEAPPLICATION', null);

	/**
	 * Primary body type: audio
	 */
	define('TYPEAUDIO', null);

	/**
	 * Primary body type: static image
	 */
	define('TYPEIMAGE', null);

	/**
	 * Primary body type: encapsulated message
	 */
	define('TYPEMESSAGE', null);

	/**
	 * Primary body type: model
	 */
	define('TYPEMODEL', null);

	/**
	 * Primary body type: multiple part
	 */
	define('TYPEMULTIPART', null);

	/**
	 * Primary body type: unknown
	 */
	define('TYPEOTHER', null);

	/**
	 * Primary body type: unformatted text
	 */
	define('TYPETEXT', null);

	/**
	 * Primary body type: video
	 */
	define('TYPEVIDEO', null);

}
