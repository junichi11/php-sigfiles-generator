<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.seaslog.php
	 * @since PECL seaslog >=1.0.0
	 */
	class SeasLog {

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void
		 * @link https://php.net/manual/en/seaslog.destruct.php
		 * @since PECL seaslog >=1.0.0
		 */
		public function __destruct() {}

		/**
		 * Record alert log information
		 * <p>Record alert log information.</p><p><b>Note</b>:</p><p>"ALERT" - Action must be taken immediately. Immediate attention should be given to relevant personnel for emergency repairs.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.alert.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function alert(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Get log count by level, log_path and key_word
		 * <p>`SeasLog` get count value of `grep -ai '{level}' | grep -aic '{key_word}'` use system pipe and return to PHP (array or int).</p>
		 * @param string $level <p>String. The log information level.</p>
		 * @param string $log_path <p>String. The log information path.</p>
		 * @param string $key_word <p>String. The search key word for log information.</p>
		 * @return mixed <p>If `level` is SEASLOG_ALL or Empty, return all levels count as `array`. If `level` is SEASLOG_INFO or the other level, return count as `int`.</p>
		 * @link https://php.net/manual/en/seaslog.analyzercount.php
		 * @since PECL seaslog >=1.1.6
		 */
		public static function analyzerCount(string $level, string $log_path = NULL, string $key_word = NULL) {}

		/**
		 * Get log detail by level, log_path, key_word, start, limit, order
		 * <p>`SeasLog` get results of `grep -ai '{level}' | grep -ai '{key_word}' | sed -n '{start},{limit}'p` use system pipe and return array to PHP.</p>
		 * @param string $level <p>String. The log information level.</p>
		 * @param string $log_path <p>String. The log information path.</p>
		 * @param string $key_word <p>String. The search key word for log information.</p>
		 * @param int $start <p>Int. Default is `1`.</p>
		 * @param int $limit <p>Int. Default is `20`.</p>
		 * @param int $order <p>Int. Default is SEASLOG_DETAIL_ORDER_ASC. See also:</p><ul> <li>SEASLOG_DETAIL_ORDER_ASC</li> <li>SEASLOG_DETAIL_ORDER_DESC</li> </ul>
		 * @return mixed <p>Return results as array.</p><p><b>Note</b>:</p><p>When `start`,`limit` is not NULL and in Windows, SeasLog will threw exception with message 'Param start and limit don't support Windows'.</p>
		 * @link https://php.net/manual/en/seaslog.analyzerdetail.php
		 * @since PECL seaslog >=1.1.6
		 */
		public static function analyzerDetail(string $level, string $log_path = NULL, string $key_word = NULL, int $start = NULL, int $limit = NULL, int $order = NULL) {}

		/**
		 * Manually release stream flow from logger
		 * <p>Manually release stream flow from logger. SeasLog caches the stream handle opened by the log logger to save the overhead of creating a stream. The handle will be automatically released at the end of the request. If in CLI mode, the process will also automatically release when it exits. Or you can use the following functions to manually release(manually release function needs to update SeasLog 1.8.6 or updated version).</p>
		 * @param int $model <p>Constant int.</p><ul> <li>SEASLOG_CLOSE_LOGGER_STREAM_MOD_ALL</li> <li>SEASLOG_CLOSE_LOGGER_STREAM_MOD_ASSIGN</li> </ul>
		 * @param string $logger <p>The logger name.</p>
		 * @return bool <p>Return TRUE on released stream flow success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.closeloggerstream.php
		 * @since PECL seaslog >=1.8.6
		 */
		public static function closeLoggerStream(int $model, string $logger): bool {}

		/**
		 * Record critical log information
		 * <p>Record critical log information.</p><p><b>Note</b>:</p><p>"CRITICAL" - Critical conditions.Need to be repaired immediately, and the program component is unavailable.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.critical.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function critical(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Record debug log information
		 * <p>Record debug log information.</p><p><b>Note</b>:</p><p>"DEBUG" - Detailed debug information.Fine-grained information events.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.debug.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function debug(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Record emergency log information
		 * <p>Record emergency log information.</p><p><b>Note</b>:</p><p>"EMERGENCY" - System is unusable.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.emergency.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function emergency(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Record error log information
		 * <p>Record error log information.</p><p><b>Note</b>:</p><p>"ERROR" - Runtime errors that do not require immediate action but should typically.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.error.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function error(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Flush logs buffer, dump to appender file, or send to remote api with tcp/udp
		 * <p>Flush logs buffer by seaslog.appender: dump to file, or send to remote api with tcp/udp.</p><p><b>Note</b>:</p><p>See also: seaslog.appender_retry seaslog.remote_host seaslog.remote_port</p>
		 * @return bool <p>Return TRUE on flush buffer success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.flushbuffer.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function flushBuffer(): bool {}

		/**
		 * Get SeasLog base path.
		 * <p>Use the Function <b>SeasLog::getBasePath()</b> will get the value of seaslog.default_basepath what configured in php.ini(seaslog.ini).</p><p>If you use <code>Seaslog::setBasePath()</code>, will change the result.</p>
		 * @return string <p>Return seaslog.default_basepath as string.</p>
		 * @link https://php.net/manual/en/seaslog.getbasepath.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function getBasePath(): string {}

		/**
		 * Get the logs buffer in memory as array
		 * @return array <p>Return an array from logs buffer in memory.</p>
		 * @link https://php.net/manual/en/seaslog.getbuffer.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function getBuffer(): array {}

		/**
		 * Determin if buffer enabled
		 * <p>Result join seaslog.use_buffer and seaslog.buffer_disabled_in_cli.</p>
		 * @return bool <p>Return TRUE on seaslog.use_buffer is true. If switch seaslog.buffer_disabled_in_cli on, and running in cli, seaslog.use_buffer setting will be discarded, Seaslog write to the Data Store IMMEDIATELY.</p>
		 * @link https://php.net/manual/en/seaslog.getbufferenabled.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function getBufferEnabled(): bool {}

		/**
		 * Get SeasLog datetime format style
		 * <p>Get SeasLog datetime format style. Use the Function <b>SeasLog::getDatetimeFormat()</b> will get the value of seaslog.default_datetime_format what configured in php.ini(seaslog.ini).</p>
		 * @return string <p>Get SeasLog datetime format style of seaslog.default_datetime_format. Use the Function <code>SeasLog::setDatetimeFormat()</code> will change this value.</p>
		 * @link https://php.net/manual/en/seaslog.getdatetimeformat.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function getDatetimeFormat(): string {}

		/**
		 * Get SeasLog last logger path
		 * <p>Use the Function <b>SeasLog::getLastLogger()</b> will get the value of seaslog.default_logger what configured in php.ini(seaslog.ini).</p>
		 * @return string <p>Use the Function <code>SeasLog::setLogger()</code> will change the value of function <b>SeasLog::getLastLogger()</b>.</p>
		 * @link https://php.net/manual/en/seaslog.getlastlogger.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function getLastLogger(): string {}

		/**
		 * Get SeasLog request_id differentiated requests
		 * <p>To distinguish a single request, such as not invoking the <code>SeasLog::setRequestId()</code> function&#65292; the unique value generated by the built-in `static char &#42;get_uniqid ()` function is used when the request is initialized.</p>
		 * @return string <p>Return string generated by the built-in `static char &#42;get_uniqid ()` function, or setted by <code>SeasLog::setRequestId()</code> function.</p>
		 * @link https://php.net/manual/en/seaslog.getrequestid.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function getRequestID(): string {}

		/**
		 * Get SeasLog request variable
		 * <p>Get SeasLog request variable.</p>
		 * @param int $key <p>Constant int.</p><ul> <li>SEASLOG_REQUEST_VARIABLE_DOMAIN_PORT</li> <li>SEASLOG_REQUEST_VARIABLE_REQUEST_URI</li> <li>SEASLOG_REQUEST_VARIABLE_REQUEST_METHOD</li> <li>SEASLOG_REQUEST_VARIABLE_CLIENT_IP</li> </ul>
		 * @return bool <p>Return request variable value on set success.</p>
		 * @link https://php.net/manual/en/seaslog.getrequestvariable.php
		 * @since PECL seaslog >=1.9.0
		 */
		public static function getRequestVariable(int $key): bool {}

		/**
		 * Record info log information
		 * <p>Record info log information.</p><p><b>Note</b>:</p><p>"INFO" - Interesting events.Emphasizes the running process of the application.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.info.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function info(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * The Common Record Log Function
		 * <p>The Common Record Log Function.</p>
		 * @param string $level <p>Can use level in:</p><ul> <li>SEASLOG_DEBUG</li> <li>SEASLOG_INFO</li> <li>SEASLOG_NOTICE</li> <li>SEASLOG_WARNING</li> <li>SEASLOG_ERROR</li> <li>SEASLOG_CRITICAL</li> <li>SEASLOG_ALERT</li> <li>SEASLOG_EMERGENCY</li> </ul> Or you can create a new level self-help.
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.log.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function log(string $level, string $message = NULL, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Record notice log information
		 * <p>Record notice log information.</p><p><b>Note</b>:</p><p>"NOTICE" - Normal but significant events.Information that is more important than the INFO level during execution.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.notice.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function notice(string $message, array $content = NULL, string $logger = NULL): bool {}

		/**
		 * Set SeasLog base path
		 * <p>Set SeasLog base path.</p>
		 * @param string $base_path <p>String.</p>
		 * @return bool <p>Return TRUE on setted base path success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.setbasepath.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function setBasePath(string $base_path): bool {}

		/**
		 * Set SeasLog datetime format style
		 * <p>Set SeasLog datetime format style.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $format <p>String. Such as `Y-m-d H:i:s` or `Ymd His`. See also first param `format` at <code>date()</code>.</p>
		 * @return bool <p>Return TRUE on setted datetime format success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.setdatetimeformat.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function setDatetimeFormat(string $format): bool {}

		/**
		 * Set SeasLog logger name
		 * <p>Use the Function <b>SeasLog::setLogger()</b> will change the value of function <code>SeasLog::getLastLogger()</code>. Than's mean, SeasLog will record loginfo into the logger directory.</p>
		 * @param string $logger <p>Logger name.</p>
		 * @return bool <p>Return TRUE on created logger disectory success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.setlogger.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function setLogger(string $logger): bool {}

		/**
		 * Set SeasLog request_id differentiated requests
		 * <p>To distinguish a single request, such as not invoking the <b>SeasLog::setRequestId()</b> function&#65292; the unique value generated by the built-in `static char &#42;get_uniqid ()` function is used when the request is initialized.</p>
		 * @param string $request_id <p>String.</p>
		 * @return bool <p>Return TRUE on set request_id success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.setrequestid.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function setRequestID(string $request_id): bool {}

		/**
		 * Manually set SeasLog request variable
		 * <p>Manually set SeasLog request variable.</p>
		 * @param int $key <p>Constant int.</p><ul> <li>SEASLOG_REQUEST_VARIABLE_DOMAIN_PORT</li> <li>SEASLOG_REQUEST_VARIABLE_REQUEST_URI</li> <li>SEASLOG_REQUEST_VARIABLE_REQUEST_METHOD</li> <li>SEASLOG_REQUEST_VARIABLE_CLIENT_IP</li> </ul>
		 * @param string $value <p>The request variable value.</p>
		 * @return bool <p>Return TRUE on set success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.setrequestvariable.php
		 * @since PECL seaslog >=1.9.0
		 */
		public static function setRequestVariable(int $key, string $value): bool {}

		/**
		 * Record warning log information
		 * <p>Record warning log information.</p><p><b>Note</b>:</p><p>"WARNING" - Exceptional occurrences that are not errors. Potentially aberrant information that needs attention and needs to be repaired.</p>
		 * @param string $message <p>The log message.</p>
		 * @param array $content <p>The `message` contain placeholders which implementors replace with values from content array. Sush as `message` is `log info from {NAME}` and `content` is `array('NAME' =&gt; neeke)`, the log information will `log info from neeke`.</p>
		 * @param string $logger <p>The `logger` cased by the third param would be used right this right now, like a temp logger, when the function SeasLog::setLogger() called in pre content. If `logger` NULL or "", SeasLog will use lastest logger setted by <code>SeasLog::setLogger()</code>.</p>
		 * @return bool <p>Return TRUE on record log information success, FALSE on failure.</p>
		 * @link https://php.net/manual/en/seaslog.warning.php
		 * @since PECL seaslog >=1.0.0
		 */
		public static function warning(string $message, array $content = NULL, string $logger = NULL): bool {}
	}

	/**
	 * Get SeasLog author.
	 * @return string <p>Return SeasLog author as string.</p>
	 * @link https://php.net/manual/en/function.seaslog-get-author.php
	 * @since PECL seaslog >=1.0.0
	 */
	function seaslog_get_author(): string {}

	/**
	 * Get SeasLog version.
	 * @return string <p>Return SeasLog version (SEASLOG_VERSION) as string.</p>
	 * @link https://php.net/manual/en/function.seaslog-get-version.php
	 * @since PECL seaslog >=1.0.0
	 */
	function seaslog_get_version(): string {}

	/**
	 * "ALERT" - Action must be taken immediately.Immediate attention should be given to relevant personnel for emergency repairs.
	 */
	define('SEASLOG_ALERT', null);

	/**
	 * "ALL"
	 */
	define('SEASLOG_ALL', null);

	/**
	 * 1
	 */
	define('SEASLOG_APPENDER_FILE', null);

	/**
	 * 2
	 */
	define('SEASLOG_APPENDER_TCP', null);

	/**
	 * 3
	 */
	define('SEASLOG_APPENDER_UDP', null);

	define('SEASLOG_AUTHOR', null);

	/**
	 * 1
	 */
	define('SEASLOG_CLOSE_LOGGER_STREAM_MOD_ALL', null);

	/**
	 * 2
	 */
	define('SEASLOG_CLOSE_LOGGER_STREAM_MOD_ASSIGN', null);

	/**
	 * "CRITICAL" - Critical conditions.Need to be repaired immediately, and the program component is unavailable.
	 */
	define('SEASLOG_CRITICAL', null);

	/**
	 * "DEBUG" - Detailed debug information.Fine-grained information events.
	 */
	define('SEASLOG_DEBUG', null);

	/**
	 * 1
	 */
	define('SEASLOG_DETAIL_ORDER_ASC', null);

	/**
	 * 2
	 */
	define('SEASLOG_DETAIL_ORDER_DESC', null);

	/**
	 * "EMERGENCY" - System is unusable.
	 */
	define('SEASLOG_EMERGENCY', null);

	/**
	 * "ERROR" - Runtime errors that do not require immediate action but should typically.
	 */
	define('SEASLOG_ERROR', null);

	/**
	 * "INFO" - Interesting events.Emphasizes the running process of the application.
	 */
	define('SEASLOG_INFO', null);

	/**
	 * "NOTICE" - Normal but significant events.Information that is more important than the INFO level during execution.
	 */
	define('SEASLOG_NOTICE', null);

	/**
	 * 4
	 */
	define('SEASLOG_REQUEST_VARIABLE_CLIENT_IP', null);

	/**
	 * 1
	 */
	define('SEASLOG_REQUEST_VARIABLE_DOMAIN_PORT', null);

	/**
	 * 3
	 */
	define('SEASLOG_REQUEST_VARIABLE_REQUEST_METHOD', null);

	/**
	 * 2
	 */
	define('SEASLOG_REQUEST_VARIABLE_REQUEST_URI', null);

	define('SEASLOG_VERSION', null);

	/**
	 * "WARNING" - Exceptional occurrences that are not errors.Potentially aberrant information that needs attention and needs to be repaired.
	 */
	define('SEASLOG_WARNING', null);

}
