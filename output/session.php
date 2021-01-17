<?php



namespace {

	/**
	 * <p><b>SessionHandler</b> is a special class that can be used to expose the current internal PHP session save handler by inheritance. There are seven methods which wrap the seven internal session save handler callbacks (<code>open</code>, <code>close</code>, <code>read</code>, <code>write</code>, <code>destroy</code>, <code>gc</code> and <code>create_sid</code>). By default, this class will wrap whatever internal save handler is set as defined by the session.save_handler configuration directive which is usually <code>files</code> by default. Other internal session save handlers are provided by PHP extensions such as SQLite (as <code>sqlite</code>), Memcache (as <code>memcache</code>), and Memcached (as <code>memcached</code>).</p>
	 * <p>When a plain instance of <b>SessionHandler</b> is set as the save handler using <code>session_set_save_handler()</code> it will wrap the current save handlers. A class extending from <b>SessionHandler</b> allows you to override the methods or intercept or filter them by calls the parent class methods which ultimately wrap the internal PHP session handlers.</p>
	 * <p>This allows you, for example, to intercept the <code>read</code> and <code>write</code> methods to encrypt/decrypt the session data and then pass the result to and from the parent class. Alternatively one might chose to entirely override a method like the garbage collection callback <code>gc</code>.</p>
	 * <p>Because the <b>SessionHandler</b> wraps the current internal save handler methods, the above example of encryption can be applied to any internal save handler without having to know the internals of the handlers.</p>
	 * <p>To use this class, first set the save handler you wish to expose using session.save_handler and then pass an instance of <b>SessionHandler</b> or one extending it to <code>session_set_save_handler()</code>.</p>
	 * <p>Please note the callback methods of this class are designed to be called internally by PHP and are not meant to be called from user-space code. The return values are equally processed internally by PHP. For more information on the session workflow, please refer <code>session_set_save_handler()</code>.</p>
	 * @link https://php.net/manual/en/class.sessionhandler.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SessionHandler implements \SessionHandlerInterface, \SessionIdInterface {

		/**
		 * Close the session
		 * <p>Closes the current session. This method is automatically executed internally by PHP when closing the session, or explicitly via <code>session_write_close()</code> (which first calls the <code>SessionHandler::write()</code>).</p><p>This method wraps the internal PHP save handler defined in the session.save_handler ini setting that was set before this handler was activated by <code>session_set_save_handler()</code>.</p><p>If this class is extended by inheritiance, calling the parent <code>close</code> method will invoke the wrapper for this method and therefore invoke the associated internal callback. This allows the method to be overridden and or intercepted.</p><p>For more information on what this method is expected to do, please refer to the documentation at <code>SessionHandlerInterface::close()</code>.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandler.close.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Return a new session ID
		 * <p>Generates and returns a new session ID.</p>
		 * @return string <p>A session ID valid for the default session handler.</p>
		 * @link https://php.net/manual/en/sessionhandler.create-sid.php
		 * @see session_id(), session_create_id()
		 * @since PHP 5 >= 5.5.1, PHP 7
		 */
		public function create_sid(): string {}

		/**
		 * Destroy a session
		 * <p>Destroys a session. Called internally by PHP with <code>session_regenerate_id()</code> (assuming the <code>$destroy</code> is set to <b><code>true</code></b>, by <code>session_destroy()</code> or when <code>session_decode()</code> fails.</p><p>This method wraps the internal PHP save handler defined in the session.save_handler ini setting that was set before this handler was set by <code>session_set_save_handler()</code>.</p><p>If this class is extended by inheritiance, calling the parent <code>destroy</code> method will invoke the wrapper for this method and therefore invoke the associated internal callback. This allows this method to be overridden and or intercepted and filtered.</p><p>For more information on what this method is expected to do, please refer to the documentation at <code>SessionHandlerInterface::destroy()</code>.</p>
		 * @param string $id <p>The session ID being destroyed.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandler.destroy.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function destroy(string $id): bool {}

		/**
		 * Cleanup old sessions
		 * <p>Cleans up expired sessions. Called randomly by PHP internally when a session starts or when <code>session_start()</code> is invoked. The frequency this is called is based on the session.gc_divisor and session.gc_probability configuration directives.</p><p>This method wraps the internal PHP save handler defined in the session.save_handler ini setting that was set before this handler was set by <code>session_set_save_handler()</code>.</p><p>If this class is extended by inheritiance, calling the parent <code>gc</code> method will invoke the wrapper for this method and therefore invoke the associated internal callback. This allows this method to be overridden and or intercepted and filtered.</p><p>For more information on what this method is expected to do, please refer to the documentation at <code>SessionHandlerInterface::gc()</code>.</p>
		 * @param int $max_lifetime <p>Sessions that have not updated for the last <code>max_lifetime</code> seconds will be removed.</p>
		 * @return int|bool <p>Returns the number of deleted sessions on success, or <b><code>false</code></b> on failure. Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandler.gc.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function gc(int $max_lifetime): int|bool {}

		/**
		 * Initialize session
		 * <p>Create new session, or re-initialize existing session. Called internally by PHP when a session starts either automatically or when <code>session_start()</code> is invoked.</p><p>This method wraps the internal PHP save handler defined in the session.save_handler ini setting that was set before this handler was set by <code>session_set_save_handler()</code>.</p><p>If this class is extended by inheritiance, calling the parent <code>open</code> method will invoke the wrapper for this method and therefore invoke the associated internal callback. This allows this method to be overridden and or intercepted and filtered.</p><p>For more information on what this method is expected to do, please refer to the documentation at <code>SessionHandlerInterface::open()</code>.</p>
		 * @param string $path <p>The path where to store/retrieve the session.</p>
		 * @param string $name <p>The session name.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandler.open.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function open(string $path, string $name): bool {}

		/**
		 * Read session data
		 * <p>Reads the session data from the session storage, and returns the result back to PHP for internal processing. This method is called automatically by PHP when a session is started (either automatically or explicitly with <code>session_start()</code> and is preceded by an internal call to the <code>SessionHandler::open()</code>.</p><p>This method wraps the internal PHP save handler defined in the session.save_handler ini setting that was set before this handler was set by <code>session_set_save_handler()</code>.</p><p>If this class is extended by inheritance, calling the parent <code>read</code> method will invoke the wrapper for this method and therefore invoke the associated internal callback. This allows the method to be overridden and or intercepted and filtered (for example, decrypting <code>$data</code> value returned by the parent <code>read</code> method).</p><p>For more information on what this method is expected to do, please refer to the documentation at <code>SessionHandlerInterface::read()</code>.</p>
		 * @param string $id <p>The session id to read data for.</p>
		 * @return string <p>Returns an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandler.read.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function read(string $id): string {}

		/**
		 * Write session data
		 * <p>Writes the session data to the session storage. Called by normal PHP shutdown, by <code>session_write_close()</code>, or when <code>session_register_shutdown()</code> fails. PHP will call <code>SessionHandler::close()</code> immediately after this method returns.</p><p>This method wraps the internal PHP save handler defined in the session.save_handler ini setting that was set before this handler was set by <code>session_set_save_handler()</code>.</p><p>If this class is extended by inheritiance, calling the parent <code>write</code> method will invoke the wrapper for this method and therefore invoke the associated internal callback. This allows this method to be overridden and or intercepted and filtered (for example, encrypting the <code>$data</code> value before sending it to the parent <code>write</code> method).</p><p>For more information on what this method is expected to do, please refer to the documentation at <code>SessionHandlerInterface::write()</code>.</p>
		 * @param string $id <p>The session id.</p>
		 * @param string $data <p>The encoded session data. This data is the result of the PHP internally encoding the $_SESSION superglobal to a serialized string and passing it as this parameter. Please note sessions use an alternative serialization method.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandler.write.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function write(string $id, string $data): bool {}
	}

	/**
	 * <p><b>SessionHandlerInterface</b> is an interface which defines the minimal prototype for creating a custom session handler. In order to pass a custom session handler to <code>session_set_save_handler()</code> using its OOP invocation, the class can implement this interface.</p>
	 * <p>Please note the callback methods of this class are designed to be called internally by PHP and are not meant to be called from user-space code.</p>
	 * @link https://php.net/manual/en/class.sessionhandlerinterface.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SessionHandlerInterface {

		/**
		 * Close the session
		 * <p>Closes the current session. This function is automatically executed when closing the session, or explicitly via <code>session_write_close()</code>.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandlerinterface.close.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function close(): bool;

		/**
		 * Destroy a session
		 * <p>Destroys a session. Called by <code>session_regenerate_id()</code> (with $destroy = <b><code>true</code></b>), <code>session_destroy()</code> and when <code>session_decode()</code> fails.</p>
		 * @param string $id <p>The session ID being destroyed.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandlerinterface.destroy.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function destroy(string $id): bool;

		/**
		 * Cleanup old sessions
		 * <p>Cleans up expired sessions. Called by <code>session_start()</code>, based on session.gc_divisor, session.gc_probability and session.gc_maxlifetime settings.</p>
		 * @param int $max_lifetime <p>Sessions that have not updated for the last <code>max_lifetime</code> seconds will be removed.</p>
		 * @return int|bool <p>Returns the number of deleted sessions on success, or <b><code>false</code></b> on failure. Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandlerinterface.gc.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function gc(int $max_lifetime): int|bool;

		/**
		 * Initialize session
		 * <p>Re-initialize existing session, or creates a new one. Called when a session starts or when <code>session_start()</code> is invoked.</p>
		 * @param string $path <p>The path where to store/retrieve the session.</p>
		 * @param string $name <p>The session name.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandlerinterface.open.php
		 * @see session_name()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function open(string $path, string $name): bool;

		/**
		 * Read session data
		 * <p>Reads the session data from the session storage, and returns the results. Called right after the session starts or when <code>session_start()</code> is called. Please note that before this method is called <code>SessionHandlerInterface::open()</code> is invoked.</p><p>This method is called by PHP itself when the session is started. This method should retrieve the session data from storage by the session ID provided. The string returned by this method must be in the same serialized format as when originally passed to the <code>SessionHandlerInterface::write()</code> If the record was not found, return an empty string.</p><p>The data returned by this method will be decoded internally by PHP using the unserialization method specified in session.serialize_handler. The resulting data will be used to populate the $_SESSION superglobal.</p><p>Note that the serialization scheme is not the same as <code>unserialize()</code> and can be accessed by <code>session_decode()</code>.</p>
		 * @param string $id <p>The session id.</p>
		 * @return string <p>Returns an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandlerinterface.read.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function read(string $id): string;

		/**
		 * Write session data
		 * <p>Writes the session data to the session storage. Called by <code>session_write_close()</code>, when <code>session_register_shutdown()</code> fails, or during a normal shutdown. Note: <code>SessionHandlerInterface::close()</code> is called immediately after this function.</p><p>PHP will call this method when the session is ready to be saved and closed. It encodes the session data from the $_SESSION superglobal to a serialized string and passes this along with the session ID to this method for storage. The serialization method used is specified in the session.serialize_handler setting.</p><p>Note this method is normally called by PHP after the output buffers have been closed unless explicitly called by <code>session_write_close()</code></p>
		 * @param string $id <p>The session id.</p>
		 * @param string $data <p>The encoded session data. This data is the result of the PHP internally encoding the $_SESSION superglobal to a serialized string and passing it as this parameter. Please note sessions use an alternative serialization method.</p>
		 * @return bool <p>The return value (usually <b><code>true</code></b> on success, <b><code>false</code></b> on failure). Note this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionhandlerinterface.write.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		abstract public function write(string $id, string $data): bool;
	}

	/**
	 * <p><b>SessionIdInterface</b> is an interface which defines optional methods for creating a custom session handler. In order to pass a custom session handler to <code>session_set_save_handler()</code> using its OOP invocation, the class can implement this interface.</p>
	 * <p>Note that the callback methods of classes implementing this interface are designed to be called internally by PHP and are not meant to be called from user-space code.</p>
	 * @link https://php.net/manual/en/class.sessionidinterface.php
	 * @since PHP 5 >= 5.5.1, PHP 7
	 */
	interface SessionIdInterface {

		/**
		 * Create session ID
		 * <p>Creates a new session ID.This function is automatically executed when a new session ID needs to be created.</p>
		 * @return string <p>The new session ID. Note that this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionidinterface.create-sid.php
		 * @since PHP 5 >= 5.5.1, PHP 7
		 */
		public function create_sid(): string;
	}

	/**
	 * <p><b>SessionUpdateTimestampHandlerInterface</b> is an interface which defines optional methods for creating a custom session handler. In order to pass a custom session handler to <code>session_set_save_handler()</code> using its OOP invocation, the class can implement this interface.</p>
	 * <p>Note that the callback methods of classes implementing this interface are designed to be called internally by PHP and are not meant to be called from user-space code.</p>
	 * @link https://php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php
	 * @since PHP 7
	 */
	interface SessionUpdateTimestampHandlerInterface {

		/**
		 * Update timestamp
		 * <p>Updates the last modification timestamp of the session. This function is automatically executed when a session is updated.</p>
		 * @param string $id <p>The session ID.</p>
		 * @param string $data <p>The session data.</p>
		 * @return bool <p>Returns <b><code>true</code></b> if the timestamp was updated, <b><code>false</code></b> otherwise. Note that this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionupdatetimestamphandlerinterface.updatetimestamp.php
		 * @since PHP 7
		 */
		public function updateTimestamp(string $id, string $data): bool;

		/**
		 * Validate ID
		 * <p>Validates a given session ID. A session ID is valid, if a session with that ID already exists. This function is automatically executed when a session is to be started, a session ID is supplied and session.use_strict_mode is enabled.</p>
		 * @param string $id <p>The session ID.</p>
		 * @return bool <p>Returns <b><code>true</code></b> for valid ID, <b><code>false</code></b> otherwise. Note that this value is returned internally to PHP for processing.</p>
		 * @link https://php.net/manual/en/sessionupdatetimestamphandlerinterface.validateid.php
		 * @since PHP 7
		 */
		public function validateId(string $id): bool;
	}

	/**
	 * Discard session array changes and finish session
	 * <p><b>session_abort()</b> finishes session without saving data. Thus the original values in session data are kept.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-abort.php
	 * @see session_start(), session_reset(), session_commit()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function session_abort(): bool {}

	/**
	 * Get and/or set current cache expire
	 * <p><b>session_cache_expire()</b> returns the current setting of <code>session.cache_expire</code>.</p><p>The cache expire is reset to the default value of 180 stored in session.cache_expire at request startup time. Thus, you need to call <b>session_cache_expire()</b> for every request (and before <code>session_start()</code> is called).</p>
	 * @param int|null $value <p>If <code>value</code> is given and not <b><code>null</code></b>, the current cache expire is replaced with <code>value</code>.</p> <p></p><p><b>Note</b>:  Setting <code>value</code> is of value only, if <code>session.cache_limiter</code> is set to a value <i>different</i> from <code>nocache</code>. </p>
	 * @return int|false <p>Returns the current setting of <code>session.cache_expire</code>. The value returned should be read in minutes, defaults to 180. On failure to change the value, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.session-cache-expire.php
	 * @see session_cache_limiter()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function session_cache_expire(int|null $value = null): int|false {}

	/**
	 * Get and/or set the current cache limiter
	 * <p><b>session_cache_limiter()</b> returns the name of the current cache limiter.</p><p>The cache limiter defines which cache control HTTP headers are sent to the client. These headers determine the rules by which the page content may be cached by the client and intermediate proxies. Setting the cache limiter to <code>nocache</code> disallows any client/proxy caching. A value of <code>public</code> permits caching by proxies and the client, whereas <code>private</code> disallows caching by proxies and permits the client to cache the contents.</p><p>In <code>private</code> mode, the Expire header sent to the client may cause confusion for some browsers, including Mozilla. You can avoid this problem by using <code>private_no_expire</code> mode. The <code>Expire</code> header is never sent to the client in this mode.</p><p>Setting the cache limiter to <code>''</code> will turn off automatic sending of cache headers entirely.</p><p>The cache limiter is reset to the default value stored in session.cache_limiter at request startup time. Thus, you need to call <b>session_cache_limiter()</b> for every request (and before <code>session_start()</code> is called).</p>
	 * @param string|null $value <p>If <code>value</code> is specified and not <b><code>null</code></b>, the name of the current cache limiter is changed to the new value.</p>  <b>Possible values</b>   Value Headers sent     <code>public</code>   <pre>Expires: (sometime in the future, according session.cache_expire) Cache-Control: public, max-age=(sometime in the future, according to session.cache_expire) Last-Modified: (the timestamp of when the session was last saved)</pre>      <code>private_no_expire</code>   <pre>Cache-Control: private, max-age=(session.cache_expire in the future), pre-check=(session.cache_expire in the future) Last-Modified: (the timestamp of when the session was last saved)</pre>      <code>private</code>   <pre>Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: private, max-age=(session.cache_expire in the future), pre-check=(session.cache_expire in the future) Last-Modified: (the timestamp of when the session was last saved)</pre>      <code>nocache</code>   <pre>Expires: Thu, 19 Nov 1981 08:52:00 GMT Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0 Pragma: no-cache</pre>
	 * @return string|false <p>Returns the name of the current cache limiter. On failure to change the value, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.session-cache-limiter.php
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function session_cache_limiter(string|null $value = null): string|false {}

	/**
	 * Alias of session_write_close()
	 * <p>This function is an alias of: <code>session_write_close()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.session-commit.php
	 * @since PHP 4 >= 4.4.0, PHP 5, PHP 7
	 */
	function session_commit(): bool {}

	/**
	 * Create new session id
	 * <p><b>session_create_id()</b> is used to create new session id for the current session. It returns collision free session id.</p><p>If session is not active, collision check is omitted.</p><p>Session ID is created according to php.ini settings.</p><p>It is important to use the same user ID of your web server for GC task script. Otherwise, you may have permission problems especially with files save handler.</p>
	 * @param string $prefix <p>If <code>prefix</code> is specified, new session id is prefixed by <code>prefix</code>. Not all characters are allowed within the session id. Characters in the range <code>a-z A-Z 0-9 , (comma) and - (minus)</code> are allowed.</p>
	 * @return string|false <p><b>session_create_id()</b> returns new collision free session id for the current session. If it is used without active session, it omits collision check. On failure, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.session-create-id.php
	 * @see session_regenerate_id(), session_start()
	 * @since PHP 7 >= 7.1.0
	 */
	function session_create_id(string $prefix = ""): string|false {}

	/**
	 * Decodes session data from a session encoded string
	 * <p><b>session_decode()</b> decodes the serialized session data provided in <code>$data</code>, and populates the $_SESSION superglobal with the result.</p><p>By default, the unserialization method used is internal to PHP, and is not the same as <code>unserialize()</code>. The serialization method can be set using session.serialize_handler.</p>
	 * @param string $data <p>The encoded data to be stored.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-decode.php
	 * @see session_encode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_decode(string $data): bool {}

	/**
	 * Destroys all data registered to a session
	 * <p><b>session_destroy()</b> destroys all of the data associated with the current session. It does not unset any of the global variables associated with the session, or unset the session cookie. To use the session variables again, <code>session_start()</code> has to be called.</p><p><b>Note</b>:  You do not have to call <b>session_destroy()</b> from usual code. Cleanup $_SESSION array rather than destroying session data. </p><p>In order to kill the session altogether, the session ID must also be unset. If a cookie is used to propagate the session ID (default behavior), then the session cookie must be deleted. <code>setcookie()</code> may be used for that.</p><p>When session.use_strict_mode is enabled. You do not have to remove obsolete session ID cookie because session module will not accept session ID cookie when there is no data associated to the session ID and set new session ID cookie. Enabling session.use_strict_mode is recommended for all sites.</p><p>Immediate session deletion may cause unwanted results. When there is concurrent requests, other connections may see sudden session data loss. e.g. Requests from JavaScript and/or requests from URL links.</p><p>Although current session module does not accept empty session ID cookie, but immediate session deletion may result in empty session ID cookie due to client(browser) side race condition. This will result that the client creates many session ID needlessly.</p><p>To avoid these, you must set deletion time-stamp to $_SESSION and reject access while later. Or make sure your application does not have concurrent requests. This applies to <code>session_regenerate_id()</code> also.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-destroy.php
	 * @see session_reset(), session_regenerate_id(), unset(), setcookie()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_destroy(): bool {}

	/**
	 * Encodes the current session data as a session encoded string
	 * <p><b>session_encode()</b> returns a serialized string of the contents of the current session data stored in the $_SESSION superglobal.</p><p>By default, the serialization method used is internal to PHP, and is not the same as <code>serialize()</code>. The serialization method can be set using session.serialize_handler.</p>
	 * @return string|false <p>Returns the contents of the current session encoded, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-encode.php
	 * @see session_decode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_encode(): string|false {}

	/**
	 * Perform session data garbage collection
	 * <p><b>session_gc()</b> is used to perform session data GC(garbage collection). PHP does probability based session GC by default.</p><p>Probability based GC works somewhat but it has few problems. 1) Low traffic sites' session data may not be deleted within the preferred duration. 2) High traffic sites' GC may be too frequent GC. 3) GC is performed on the user's request and the user will experience a GC delay.</p><p>Therefore, it is recommended to execute GC periodically for production systems using, e.g., "cron" for UNIX-like systems. Make sure to disable probability based GC by setting session.gc_probability to 0.</p>
	 * @return int|false <p><b>session_gc()</b> returns number of deleted session data for success, <b><code>false</code></b> for failure.</p><p>Old save handlers do not return number of deleted session data, but only success/failure flag. If this is the case, number of deleted session data became 1 regardless of actually deleted data.</p>
	 * @link https://php.net/manual/en/function.session-gc.php
	 * @see session_start(), session_destroy()
	 * @since PHP 7 >= 7.1.0
	 */
	function session_gc(): int|false {}

	/**
	 * Get the session cookie parameters
	 * <p>Gets the session cookie parameters.</p>
	 * @return array <p>Returns an array with the current session cookie information, the array contains the following items:</p><ul> <li>  "lifetime" - The lifetime of the cookie in seconds.  </li> <li>  "path" - The path where information is stored.  </li> <li>  "domain" - The domain of the cookie.  </li> <li>  "secure" - The cookie should only be sent over secure connections.  </li> <li>  "httponly" - The cookie can only be accessed through the HTTP protocol.  </li> <li>  "samesite" - Controls the cross-domain sending of the cookie.  </li> </ul>
	 * @link https://php.net/manual/en/function.session-get-cookie-params.php
	 * @see session_set_cookie_params()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_get_cookie_params(): array {}

	/**
	 * Get and/or set the current session id
	 * <p><b>session_id()</b> is used to get or set the session id for the current session.</p><p>The constant <b><code>SID</code></b> can also be used to retrieve the current name and session id as a string suitable for adding to URLs. See also Session handling.</p>
	 * @param string|null $id <p>If <code>id</code> is specified and not <b><code>null</code></b>, it will replace the current session id. <b>session_id()</b> needs to be called before <code>session_start()</code> for that purpose. Depending on the session handler, not all characters are allowed within the session id. For example, the file session handler only allows characters in the range <code>a-z A-Z 0-9 , (comma) and - (minus)</code>!</p> <p><b>Note</b>:  When using session cookies, specifying an <code>id</code> for <b>session_id()</b> will always send a new cookie when <code>session_start()</code> is called, regardless if the current session id is identical to the one being set. </p>
	 * @return string|false <p><b>session_id()</b> returns the session id for the current session or the empty string (<code>""</code>) if there is no current session (no current session id exists). On failure, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.session-id.php
	 * @see session_regenerate_id(), session_start(), session_set_save_handler()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_id(string|null $id = null): string|false {}

	/**
	 * Find out whether a global variable is registered in a session
	 * <p>Finds out whether a global variable is registered in a session.</p><p>This function has been <i>DEPRECATED</i> as of PHP 5.3.0 and <i>REMOVED</i> as of PHP 5.4.0.</p>
	 * @param string $name <p>The variable name.</p>
	 * @return bool <p><b>session_is_registered()</b> returns <b><code>true</code></b> if there is a global variable with the name <code>name</code> registered in the current session, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.session-is-registered.php
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function session_is_registered(string $name): bool {}

	/**
	 * Get and/or set the current session module
	 * <p><b>session_module_name()</b> gets the name of the current session module, which is also known as session.save_handler.</p>
	 * @param string|null $module <p>If <code>module</code> is specified and not <b><code>null</code></b>, that module will be used instead. Passing <code>"user"</code> to this parameter is forbidden. Instead <code>session_set_save_handler()</code> has to be called to set a user defined session handler.</p>
	 * @return string|false <p>Returns the name of the current session module, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-module-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_module_name(string|null $module = null): string|false {}

	/**
	 * Get and/or set the current session name
	 * <p><b>session_name()</b> returns the name of the current session. If <code>name</code> is given, <b>session_name()</b> will update the session name and return the <i>old</i> session name.</p><p>If a new session <code>name</code> is supplied, <b>session_name()</b> modifies the HTTP cookie (and output content when <code>session.transid</code> is enabled). Once the HTTP cookie is sent, <b>session_name()</b> raises error. <b>session_name()</b> must be called before <code>session_start()</code> for the session to work properly.</p><p>The session name is reset to the default value stored in <code>session.name</code> at request startup time. Thus, you need to call <b>session_name()</b> for every request (and before <code>session_start()</code> is called).</p>
	 * @param string|null $name <p>The session name references the name of the session, which is used in cookies and URLs (e.g. <code>PHPSESSID</code>). It should contain only alphanumeric characters; it should be short and descriptive (i.e. for users with enabled cookie warnings). If <code>name</code> is specified and not <b><code>null</code></b>, the name of the current session is changed to its value.</p> <p></p><p><b>Warning</b></p> <p>The session name can't consist of digits only, at least one letter must be present. Otherwise a new session id is generated every time.</p>
	 * @return string|false <p>Returns the name of the current session. If <code>name</code> is given and function updates the session name, name of the <i>old</i> session is returned, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_name(string|null $name = null): string|false {}

	/**
	 * Update the current session id with a newly generated one
	 * <p><b>session_regenerate_id()</b> will replace the current session id with a new one, and keep the current session information.</p><p>When session.use_trans_sid is enabled, output must be started after <b>session_regenerate_id()</b> call. Otherwise, old session ID is used.</p><p>Currently, session_regenerate_id does not handle an unstable network well, e.g. Mobile and WiFi network. Therefore, you may experience a lost session by calling session_regenerate_id.</p><p>You should not destroy old session data immediately, but should use destroy time-stamp and control access to old session ID. Otherwise, concurrent access to page may result in inconsistent state, or you may have lost session, or it may cause client(browser) side race condition and may create many session ID needlessly. Immediate session data deletion disables session hijack attack detection and prevention also.</p>
	 * @param bool $delete_old_session <p>Whether to delete the old associated session file or not. You should not delete old session if you need to avoid races caused by deletion or detect/avoid session hijack attacks.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-regenerate-id.php
	 * @see session_id(), session_create_id(), session_start(), session_destroy(), session_reset(), session_name()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function session_regenerate_id(bool $delete_old_session = false): bool {}

	/**
	 * Register one or more global variables with the current session
	 * <p><b>session_register()</b> accepts a variable number of arguments, any of which can be either a string holding the name of a variable or an array consisting of variable names or other arrays. For each name, <b>session_register()</b> registers the global variable with that name in the current session.</p><p>You can also create a session variable by simply setting the appropriate member of the $_SESSION array.</p><p>If <code>session_start()</code> was not called before this function is called, an implicit call to <code>session_start()</code> with no parameters will be made. $_SESSION does not mimic this behavior and requires <code>session_start()</code> before use.</p><p>This function has been <i>DEPRECATED</i> as of PHP 5.3.0 and <i>REMOVED</i> as of PHP 5.4.0.</p>
	 * @param mixed $name <p>A string holding the name of a variable or an array consisting of variable names or other arrays.</p>
	 * @param mixed $names
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-register.php
	 * @see session_is_registered(), session_unregister()
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function session_register(mixed $name, mixed ...$names): bool {}

	/**
	 * Session shutdown function
	 * <p>Registers <code>session_write_close()</code> as a shutdown function.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.session-register-shutdown.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function session_register_shutdown(): void {}

	/**
	 * Re-initialize session array with original values
	 * <p><b>session_reset()</b> reinitializes a session with original values stored in session storage. This function requires an active session and discards changes in $_SESSION.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-reset.php
	 * @see session_start(), session_abort(), session_commit()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function session_reset(): bool {}

	/**
	 * Get and/or set the current session save path
	 * <p><b>session_save_path()</b> returns the path of the current directory used to save session data.</p>
	 * @param string|null $path <p>Session data path. If specified and not <b><code>null</code></b>, the path to which data is saved will be changed. <b>session_save_path()</b> needs to be called before <code>session_start()</code> for that purpose.</p> <p></p><p><b>Note</b>:</p><p>On some operating systems, you may want to specify a path on a filesystem that handles lots of small files efficiently. For example, on Linux, reiserfs may provide better performance than ext2fs.</p>
	 * @return string|false <p>Returns the path of the current directory used for data storage, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-save-path.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_save_path(string|null $path = null): string|false {}

	/**
	 * Set the session cookie parameters
	 * <p>Alternative signature available as of PHP 7.3.0:</p><p>Set cookie parameters defined in the php.ini file. The effect of this function only lasts for the duration of the script. Thus, you need to call <b>session_set_cookie_params()</b> for every request and before <code>session_start()</code> is called.</p><p>This function updates the runtime ini values of the corresponding PHP ini configuration keys which can be retrieved with the <code>ini_get()</code>.</p>
	 * @param int $lifetime_or_options <p>When using the first signature, lifetime of the session cookie, defined in seconds.</p> <p>When using the second signature, an associative <code>array</code> which may have any of the keys <code>lifetime</code>, <code>path</code>, <code>domain</code>, <code>secure</code>, <code>httponly</code> and <code>samesite</code>. The values have the same meaning as described for the parameters with the same name. The value of the <code>samesite</code> element should be either <code>Lax</code> or <code>Strict</code>. If any of the allowed options are not given, their default values are the same as the default values of the explicit parameters. If the <code>samesite</code> element is omitted, no SameSite cookie attribute is set.</p>
	 * @param string|null $path <p>Path on the domain where the cookie will work. Use a single slash ('/') for all paths on the domain.</p>
	 * @param string|null $domain <p>Cookie domain, for example 'www.php.net'. To make cookies visible on all subdomains then the domain must be prefixed with a dot like '.php.net'.</p>
	 * @param bool|null $secure <p>If <b><code>true</code></b> cookie will only be sent over secure connections.</p>
	 * @param bool|null $httponly <p>If set to <b><code>true</code></b> then PHP will attempt to send the httponly flag when setting the session cookie.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-set-cookie-params.php
	 * @see session_get_cookie_params()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_set_cookie_params(int $lifetime_or_options, string|null $path = null, string|null $domain = null, bool|null $secure = null, bool|null $httponly = null): bool {}

	/**
	 * Sets user-level session storage functions
	 * <p>Since PHP 5.4 it is possible to register the following prototype:</p><p><b>session_set_save_handler()</b> sets the user-level session storage functions which are used for storing and retrieving data associated with a session. This is most useful when a storage method other than those supplied by PHP sessions is preferred, e.g. storing the session data in a local database.</p>
	 * @param callable $open
	 * @param callable $close
	 * @param callable $read
	 * @param callable $write
	 * @param callable $destroy
	 * @param callable $gc
	 * @param callable $create_sid
	 * @param callable $validate_sid
	 * @param callable $update_timestamp
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-set-save-handler.php
	 * @see register_shutdown_function(), session_register_shutdown()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_set_save_handler(callable $open, callable $close, callable $read, callable $write, callable $destroy, callable $gc, callable $create_sid = null, callable $validate_sid = null, callable $update_timestamp = null): bool {}

	/**
	 * Start new or resume existing session
	 * <p><b>session_start()</b> creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.</p><p>When <b>session_start()</b> is called or when a session auto starts, PHP will call the open and read session save handlers. These will either be a built-in save handler provided by default or by PHP extensions (such as SQLite or Memcached); or can be custom handler as defined by <code>session_set_save_handler()</code>. The read callback will retrieve any existing session data (stored in a special serialized format) and will be unserialized and used to automatically populate the $_SESSION superglobal when the read callback returns the saved session data back to PHP session handling.</p><p>To use a named session, call <code>session_name()</code> before calling <b>session_start()</b>.</p><p>When session.use_trans_sid is enabled, the <b>session_start()</b> function will register an internal output handler for URL rewriting.</p><p>If a user uses <code>ob_gzhandler</code> or similar with <code>ob_start()</code>, the function order is important for proper output. For example, <code>ob_gzhandler</code> must be registered before starting the session.</p>
	 * @param array $options <p>If provided, this is an associative array of options that will override the currently set session configuration directives. The keys should not include the <code>session.</code> prefix.</p> <p>In addition to the normal set of configuration directives, a <code>read_and_close</code> option may also be provided. If set to <b><code>true</code></b>, this will result in the session being closed immediately after being read, thereby avoiding unnecessary locking if the session data won't be changed.</p>
	 * @return bool <p>This function returns <b><code>true</code></b> if a session was successfully started, otherwise <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.session-start.php
	 * @see session_id()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_start(array $options = []): bool {}

	/**
	 * Returns the current session status
	 * <p><b>session_status()</b> is used to return the current session status.</p>
	 * @return int <ul> <li> <b><code>PHP_SESSION_DISABLED</code></b> if sessions are disabled. </li> <li> <b><code>PHP_SESSION_NONE</code></b> if sessions are enabled, but none exists. </li> <li> <b><code>PHP_SESSION_ACTIVE</code></b> if sessions are enabled, and one exists. </li> </ul>
	 * @link https://php.net/manual/en/function.session-status.php
	 * @see session_start()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function session_status(): int {}

	/**
	 * Unregister a global variable from the current session
	 * <p><b>session_unregister()</b> unregisters the global variable named <code>name</code> from the current session.</p><p>This function has been <i>DEPRECATED</i> as of PHP 5.3.0 and <i>REMOVED</i> as of PHP 5.4.0.</p>
	 * @param string $name <p>The variable name.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-unregister.php
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function session_unregister(string $name): bool {}

	/**
	 * Free all session variables
	 * <p>The <b>session_unset()</b> function frees all session variables currently registered.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-unset.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function session_unset(): bool {}

	/**
	 * Write session data and end session
	 * <p>End the current session and store session data.</p><p>Session data is usually stored after your script terminated without the need to call <b>session_write_close()</b>, but as session data is locked to prevent concurrent writes only one script may operate on a session at any time. When using framesets together with sessions you will experience the frames loading one by one due to this locking. You can reduce the time needed to load all the frames by ending the session as soon as all changes to session variables are done.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.session-write-close.php
	 * @see session_register_shutdown()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function session_write_close(): bool {}

	/**
	 * Since PHP 5.4.0. Return value of <code>session_status()</code> if sessions are enabled, and a session exists.
	 */
	define('PHP_SESSION_ACTIVE', 2);

	/**
	 * Since PHP 5.4.0. Return value of <code>session_status()</code> if sessions are disabled.
	 */
	define('PHP_SESSION_DISABLED', 0);

	/**
	 * Since PHP 5.4.0. Return value of <code>session_status()</code> if sessions are enabled, but no session exists.
	 */
	define('PHP_SESSION_NONE', 1);

	/**
	 * Constant containing either the session name and session ID in the form of <code>"name=ID"</code> or empty string if session ID was set in an appropriate session cookie. This is the same id as the one returned by <code>session_id()</code>.
	 */
	define('SID', null);

}
