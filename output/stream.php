<?php



namespace {

	/**
	 * <p>Children of this class are passed to <code>stream_filter_register()</code>. Note that the __construct method is not called; instead, <code>php_user_filter::onCreate()</code> should be used for initialization.</p>
	 * @link https://php.net/manual/en/class.php-user-filter.php
	 * @since PHP 5, PHP 7
	 */
	class php_user_filter {

		/**
		 * @var mixed <p>Name of the filter registered by <code>stream_filter_append()</code>.</p>
		 * @link https://php.net/manual/en/class.php-user-filter.php#php-user-filter.props.filtername
		 */
		public $filtername;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.php-user-filter.php#php-user-filter.props.params
		 */
		public $params;

		/**
		 * Called when applying the filter
		 * <p>This method is called whenever data is read from or written to the attached stream (such as with <code>fread()</code> or <code>fwrite()</code>).</p>
		 * @param resource $in <p><code>in</code> is a resource pointing to a <code>bucket brigade</code> which contains one or more <code>bucket</code> objects containing data to be filtered.</p>
		 * @param resource $out <p><code>out</code> is a resource pointing to a second <code>bucket brigade</code> into which your modified buckets should be placed.</p>
		 * @param int $consumed <p><code>consumed</code>, which must <i>always</i> be declared by reference, should be incremented by the length of the data which your filter reads in and alters. In most cases this means you will increment <code>consumed</code> by <code>$bucket-&gt;datalen</code> for each <code>$bucket</code>.</p>
		 * @param bool $closing <p>If the stream is in the process of closing (and therefore this is the last pass through the filterchain), the <code>closing</code> parameter will be set to <b><code>true</code></b>.</p>
		 * @return int <p>The <b>filter()</b> method must return one of three values upon completion.</p>   Return Value Meaning     <b><code>PSFS_PASS_ON</code></b>  Filter processed successfully with data available in the <code>out</code> <code>bucket brigade</code>.    <b><code>PSFS_FEED_ME</code></b>  Filter processed successfully, however no data was available to return. More data is required from the stream or prior filter.    <b><code>PSFS_ERR_FATAL</code></b> (default)  The filter experienced an unrecoverable error and cannot continue.
		 * @link https://php.net/manual/en/php-user-filter.filter.php
		 * @since PHP 5, PHP 7
		 */
		public function filter($in, $out, int &$consumed, bool $closing): int {}

		/**
		 * Called when closing the filter
		 * <p>This method is called upon filter shutdown (typically, this is also during stream shutdown), and is executed <i>after</i> the <code>flush</code> method is called. If any resources were allocated or initialized during <code>onCreate()</code> this would be the time to destroy or dispose of them.</p>
		 * @return void <p>Return value is ignored.</p>
		 * @link https://php.net/manual/en/php-user-filter.onclose.php
		 * @since PHP 5, PHP 7
		 */
		public function onClose(): void {}

		/**
		 * Called when creating the filter
		 * <p>This method is called during instantiation of the filter class object. If your filter allocates or initializes any other resources (such as a buffer), this is the place to do it.</p><p>When your filter is first instantiated, and <code>yourfilter-&gt;onCreate()</code> is called, a number of properties will be available as shown in the table below.</p><p></p>
		 * @return bool <p>Your implementation of this method should return <b><code>false</code></b> on failure, or <b><code>true</code></b> on success.</p>
		 * @link https://php.net/manual/en/php-user-filter.oncreate.php
		 * @since PHP 5, PHP 7
		 */
		public function onCreate(): bool {}
	}

	/**
	 * <p>Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as <code>fopen()</code>, <code>fread()</code> etc.).</p>
	 * <p><b>Note</b>:</p>
	 * <p>This is <i>NOT</i> a real class, only a prototype of how a class defining its own protocol should be.</p>
	 * <p><b>Note</b>:</p>
	 * <p>Implementing the methods in other ways than described here can lead to undefined behaviour.</p>
	 * <p>An instance of this class is initialized as soon as a stream function tries to access the protocol it is associated with.</p>
	 * @link https://php.net/manual/en/class.streamwrapper.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	class streamWrapper {

		/**
		 * @var resource <p>The current context, or <b><code>null</code></b> if no context was passed to the caller function.</p> <p>Use the <code>stream_context_get_options()</code> to parse the context.</p> <p><b>Note</b>:</p><p>This property <i>must</i> be public so PHP can populate it with the actual context resource.</p>
		 * @link https://php.net/manual/en/class.streamwrapper.php#streamwrapper.props.context
		 */
		public $context;

		/**
		 * Constructs a new stream wrapper
		 * <p>Called when opening the stream wrapper, right before <code>streamWrapper::stream_open()</code>.</p>
		 * @return self
		 * @link https://php.net/manual/en/streamwrapper.construct.php
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function __construct() {}

		/**
		 * Destructs an existing stream wrapper
		 * <p>Called when closing the stream wrapper, right before <code>streamWrapper::stream_flush()</code>.</p>
		 * @return void
		 * @link https://php.net/manual/en/streamwrapper.destruct.php
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function __destruct() {}

		/**
		 * Close directory handle
		 * <p>This method is called in response to <code>closedir()</code>.</p><p>Any resources which were locked, or allocated, during opening and use of the directory stream should be released.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.dir-closedir.php
		 * @see closedir()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function dir_closedir(): bool {}

		/**
		 * Open directory handle
		 * <p>This method is called in response to <code>opendir()</code>.</p>
		 * @param string $path <p>Specifies the URL that was passed to <code>opendir()</code>.</p> <p><b>Note</b>:</p><p>The URL can be broken apart with <code>parse_url()</code>.</p>
		 * @param int $options
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.dir-opendir.php
		 * @see opendir(), parse_url()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function dir_opendir(string $path, int $options): bool {}

		/**
		 * Read entry from directory handle
		 * <p>This method is called in response to <code>readdir()</code>.</p>
		 * @return string <p>Should return <code>string</code> representing the next filename, or <b><code>false</code></b> if there is no next file.</p><p><b>Note</b>:</p><p>The return value will be casted to <code>string</code>.</p>
		 * @link https://php.net/manual/en/streamwrapper.dir-readdir.php
		 * @see readdir()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function dir_readdir(): string {}

		/**
		 * Rewind directory handle
		 * <p>This method is called in response to <code>rewinddir()</code>.</p><p>Should reset the output generated by <code>streamWrapper::dir_readdir()</code>. i.e.: The next call to <code>streamWrapper::dir_readdir()</code> should return the first entry in the location returned by <code>streamWrapper::dir_opendir()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.dir-rewinddir.php
		 * @see rewinddir()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function dir_rewinddir(): bool {}

		/**
		 * Create a directory
		 * <p>This method is called in response to <code>mkdir()</code>.</p><p><b>Note</b>:</p><p>In order for the appropriate error message to be returned this method should <i>not</i> be defined if the wrapper does not support creating directories.</p>
		 * @param string $path <p>Directory which should be created.</p>
		 * @param int $mode <p>The value passed to <code>mkdir()</code>.</p>
		 * @param int $options <p>A bitwise mask of values, such as <b><code>STREAM_MKDIR_RECURSIVE</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.mkdir.php
		 * @see mkdir()
		 * @since PHP 5, PHP 7
		 */
		public function mkdir(string $path, int $mode, int $options): bool {}

		/**
		 * Renames a file or directory
		 * <p>This method is called in response to <code>rename()</code>.</p><p>Should attempt to rename <code>path_from</code> to <code>path_to</code></p><p><b>Note</b>:</p><p>In order for the appropriate error message to be returned this method should <i>not</i> be defined if the wrapper does not support renaming files.</p>
		 * @param string $path_from <p>The URL to the current file.</p>
		 * @param string $path_to <p>The URL which the <code>path_from</code> should be renamed to.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.rename.php
		 * @see rename()
		 * @since PHP 5, PHP 7
		 */
		public function rename(string $path_from, string $path_to): bool {}

		/**
		 * Removes a directory
		 * <p>This method is called in response to <code>rmdir()</code>.</p><p><b>Note</b>:</p><p>In order for the appropriate error message to be returned this method should <i>not</i> be defined if the wrapper does not support removing directories.</p>
		 * @param string $path <p>The directory URL which should be removed.</p>
		 * @param int $options <p>A bitwise mask of values, such as <b><code>STREAM_MKDIR_RECURSIVE</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.rmdir.php
		 * @see rmdir()
		 * @since PHP 5, PHP 7
		 */
		public function rmdir(string $path, int $options): bool {}

		/**
		 * Retrieve the underlaying resource
		 * <p>This method is called in response to <code>stream_select()</code>.</p>
		 * @param int $cast_as <p>Can be <b><code>STREAM_CAST_FOR_SELECT</code></b> when <code>stream_select()</code> is calling <b>stream_cast()</b> or <b><code>STREAM_CAST_AS_STREAM</code></b> when <b>stream_cast()</b> is called for other uses.</p>
		 * @return resource <p>Should return the underlying stream resource used by the wrapper, or <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-cast.php
		 * @see stream_select()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function stream_cast(int $cast_as) {}

		/**
		 * Close a resource
		 * <p>This method is called in response to <code>fclose()</code>.</p><p>All resources that were locked, or allocated, by the wrapper should be released.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-close.php
		 * @see fclose()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_close(): void {}

		/**
		 * Tests for end-of-file on a file pointer
		 * <p>This method is called in response to <code>feof()</code>.</p>
		 * @return bool <p>Should return <b><code>true</code></b> if the read/write position is at the end of the stream and if no more data is available to be read, or <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-eof.php
		 * @see feof()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_eof(): bool {}

		/**
		 * Flushes the output
		 * <p>This method is called in response to <code>fflush()</code> and when the stream is being closed while any unflushed data has been written to it before.</p><p>If you have cached data in your stream but not yet stored it into the underlying storage, you should do so now.</p>
		 * @return bool <p>Should return <b><code>true</code></b> if the cached data was successfully stored (or if there was no data to store), or <b><code>false</code></b> if the data could not be stored.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-flush.php
		 * @see fflush()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_flush(): bool {}

		/**
		 * Advisory file locking
		 * <p>This method is called in response to <code>flock()</code>, when <code>file_put_contents()</code> (when <code>flags</code> contains <b><code>LOCK_EX</code></b>), <code>stream_set_blocking()</code> and when closing the stream (<b><code>LOCK_UN</code></b>).</p>
		 * @param int $operation <p><code>operation</code> is one of the following:</p><ul> <li>  <b><code>LOCK_SH</code></b> to acquire a shared lock (reader).  </li> <li>  <b><code>LOCK_EX</code></b> to acquire an exclusive lock (writer).  </li> <li>  <b><code>LOCK_UN</code></b> to release a lock (shared or exclusive).  </li> <li>  <b><code>LOCK_NB</code></b> if you don't want <code>flock()</code> to block while locking. (not supported on Windows)  </li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-lock.php
		 * @see stream_set_blocking(), flock()
		 * @since PHP 5, PHP 7
		 */
		public function stream_lock(int $operation): bool {}

		/**
		 * Change stream metadata
		 * <p>This method is called to set metadata on the stream. It is called when one of the following functions is called on a stream URL:</p>
		 * @param string $path <p>The file path or URL to set metadata. Note that in the case of a URL, it must be a :// delimited URL. Other URL forms are not supported.</p>
		 * @param int $option <p>One of:</p><ul> <li><b><code>STREAM_META_TOUCH</code></b> (The method was called in response to <code>touch()</code>)</li> <li><b><code>STREAM_META_OWNER_NAME</code></b> (The method was called in response to <code>chown()</code> with string parameter)</li> <li><b><code>STREAM_META_OWNER</code></b> (The method was called in response to <code>chown()</code>)</li> <li><b><code>STREAM_META_GROUP_NAME</code></b> (The method was called in response to <code>chgrp()</code>)</li> <li><b><code>STREAM_META_GROUP</code></b> (The method was called in response to <code>chgrp()</code>)</li> <li><b><code>STREAM_META_ACCESS</code></b> (The method was called in response to <code>chmod()</code>)</li> </ul>
		 * @param mixed $value <p>If <code>option</code> is</p><ul> <li><b><code>STREAM_META_TOUCH</code></b>: <code>Array</code> consisting of two arguments of the <code>touch()</code> function.</li> <li><b><code>STREAM_META_OWNER_NAME</code></b> or <b><code>STREAM_META_GROUP_NAME</code></b>: The name of the owner user/group as <code>string</code>.</li> <li><b><code>STREAM_META_OWNER</code></b> or <b><code>STREAM_META_GROUP</code></b>: The value owner user/group argument as <code>int</code>.</li> <li><b><code>STREAM_META_ACCESS</code></b>: The argument of the <code>chmod()</code> as <code>int</code>.</li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. If <code>option</code> is not implemented, <b><code>false</code></b> should be returned.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-metadata.php
		 * @see touch(), chmod(), chown(), chgrp()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function stream_metadata(string $path, int $option, mixed $value): bool {}

		/**
		 * Opens file or URL
		 * <p>This method is called immediately after the wrapper is initialized (f.e. by <code>fopen()</code> and <code>file_get_contents()</code>).</p>
		 * @param string $path <p>Specifies the URL that was passed to the original function.</p> <p><b>Note</b>:</p><p>The URL can be broken apart with <code>parse_url()</code>. Note that only URLs delimited by :// are supported. : and :/ while technically valid URLs, are not.</p>
		 * @param string $mode <p>The mode used to open the file, as detailed for <code>fopen()</code>.</p> <p><b>Note</b>:</p><p>Remember to check if the <code>mode</code> is valid for the <code>path</code> requested.</p>
		 * @param int $options <p>Holds additional flags set by the streams API. It can hold one or more of the following values OR'd together.</p>   Flag Description     <b><code>STREAM_USE_PATH</code></b> If <code>path</code> is relative, search for the resource using the include_path.    <b><code>STREAM_REPORT_ERRORS</code></b> If this flag is set, you are responsible for raising errors using <code>trigger_error()</code> during opening of the stream. If this flag is not set, you should not raise any errors.
		 * @param string $opened_path <p>If the <code>path</code> is opened successfully, and <b><code>STREAM_USE_PATH</code></b> is set in <code>options</code>, <code>opened_path</code> should be set to the full path of the file/resource that was actually opened.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-open.php
		 * @see fopen(), parse_url()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_open(string $path, string $mode, int $options, string &$opened_path): bool {}

		/**
		 * Read from stream
		 * <p>This method is called in response to <code>fread()</code> and <code>fgets()</code>.</p><p><b>Note</b>:</p><p>Remember to update the read/write position of the stream (by the number of bytes that were successfully read).</p>
		 * @param int $count <p>How many bytes of data from the current position should be returned.</p>
		 * @return string <p>If there are less than <code>count</code> bytes available, return as many as are available. If no more data is available, return either <b><code>false</code></b> or an empty string.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-read.php
		 * @see fread(), fgets()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_read(int $count): string {}

		/**
		 * Seeks to specific location in a stream
		 * <p>This method is called in response to <code>fseek()</code>.</p><p>The read/write position of the stream should be updated according to the <code>offset</code> and <code>whence</code>.</p>
		 * @param int $offset <p>The stream offset to seek to.</p>
		 * @param int $whence <p>Possible values:</p><ul> <li><b><code>SEEK_SET</code></b> - Set position equal to <code>offset</code> bytes.</li> <li><b><code>SEEK_CUR</code></b> - Set position to current location plus <code>offset</code>.</li> <li><b><code>SEEK_END</code></b> - Set position to end-of-file plus <code>offset</code>.</li> </ul> <p><b>Note</b>:  The current implementation never sets <code>whence</code> to <b><code>SEEK_CUR</code></b>; instead such seeks are internally converted to <b><code>SEEK_SET</code></b> seeks. </p>
		 * @return bool <p>Return <b><code>true</code></b> if the position was updated, <b><code>false</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-seek.php
		 * @see fseek()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_seek(int $offset, int $whence = SEEK_SET): bool {}

		/**
		 * Change stream options
		 * <p>This method is called to set options on the stream.</p>
		 * @param int $option <p>One of:</p><ul> <li><b><code>STREAM_OPTION_BLOCKING</code></b> (The method was called in response to <code>stream_set_blocking()</code>)</li> <li><b><code>STREAM_OPTION_READ_TIMEOUT</code></b> (The method was called in response to <code>stream_set_timeout()</code>)</li> <li><b><code>STREAM_OPTION_WRITE_BUFFER</code></b> (The method was called in response to <code>stream_set_write_buffer()</code>)</li> </ul>
		 * @param int $arg1 <p>If <code>option</code> is</p><ul> <li><b><code>STREAM_OPTION_BLOCKING</code></b>: requested blocking mode (1 meaning block 0 not blocking).</li> <li><b><code>STREAM_OPTION_READ_TIMEOUT</code></b>: the timeout in seconds.</li> <li><b><code>STREAM_OPTION_WRITE_BUFFER</code></b>: buffer mode (<b><code>STREAM_BUFFER_NONE</code></b> or <b><code>STREAM_BUFFER_FULL</code></b>).</li> </ul>
		 * @param int $arg2 <p>If <code>option</code> is</p><ul> <li><b><code>STREAM_OPTION_BLOCKING</code></b>: This option is not set.</li> <li><b><code>STREAM_OPTION_READ_TIMEOUT</code></b>: the timeout in microseconds.</li> <li><b><code>STREAM_OPTION_WRITE_BUFFER</code></b>: the requested buffer size.</li> </ul>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. If <code>option</code> is not implemented, <b><code>false</code></b> should be returned.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-set-option.php
		 * @see stream_set_blocking(), stream_set_timeout(), stream_set_write_buffer()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function stream_set_option(int $option, int $arg1, int $arg2): bool {}

		/**
		 * Retrieve information about a file resource
		 * <p>This method is called in response to <code>fstat()</code>.</p>
		 * @return array <p>See <code>stat()</code>.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-stat.php
		 * @see stat()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_stat(): array {}

		/**
		 * Retrieve the current position of a stream
		 * <p>This method is called in response to <code>fseek()</code> to determine the current position.</p>
		 * @return int <p>Should return the current position of the stream.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-tell.php
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_tell(): int {}

		/**
		 * Truncate stream
		 * <p>Will respond to truncation, e.g., through <code>ftruncate()</code>.</p>
		 * @param int $new_size <p>The new size.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-truncate.php
		 * @see ftruncate()
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function stream_truncate(int $new_size): bool {}

		/**
		 * Write to stream
		 * <p>This method is called in response to <code>fwrite()</code>.</p><p><b>Note</b>:</p><p>Remember to update the current position of the stream by number of bytes that were successfully written.</p>
		 * @param string $data <p>Should be stored into the underlying stream.</p> <p><b>Note</b>:</p><p>If there is not enough room in the underlying stream, store as much as possible.</p>
		 * @return int <p>Should return the number of bytes that were successfully stored, or 0 if none could be stored.</p>
		 * @link https://php.net/manual/en/streamwrapper.stream-write.php
		 * @see fwrite()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function stream_write(string $data): int {}

		/**
		 * Delete a file
		 * <p>This method is called in response to <code>unlink()</code>.</p><p><b>Note</b>:</p><p>In order for the appropriate error message to be returned this method should <i>not</i> be defined if the wrapper does not support removing files.</p>
		 * @param string $path <p>The file URL which should be deleted.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/streamwrapper.unlink.php
		 * @see unlink()
		 * @since PHP 5, PHP 7
		 */
		public function unlink(string $path): bool {}

		/**
		 * Retrieve information about a file
		 * <p>This method is called in response to all <code>stat()</code> related functions, such as:</p>
		 * @param string $path <p>The file path or URL to stat. Note that in the case of a URL, it must be a :// delimited URL. Other URL forms are not supported.</p>
		 * @param int $flags <p>Holds additional flags set by the streams API. It can hold one or more of the following values OR'd together.</p>   Flag Description     STREAM_URL_STAT_LINK  For resources with the ability to link to other resource (such as an HTTP Location: forward, or a filesystem symlink). This flag specified that only information about the link itself should be returned, not the resource pointed to by the link. This flag is set in response to calls to <code>lstat()</code>, <code>is_link()</code>, or <code>filetype()</code>.    STREAM_URL_STAT_QUIET If this flag is set, your wrapper should not raise any errors. If this flag is not set, you are responsible for reporting errors using the <code>trigger_error()</code> function during stating of the path.
		 * @return array <p>Should return as many elements as <code>stat()</code> does. Unknown or unavailable values should be set to a rational value (usually <b><code>0</code></b>). Pay special attention to <code>mode</code> as documented under <code>stat()</code>.</p>
		 * @link https://php.net/manual/en/streamwrapper.url-stat.php
		 * @see stat()
		 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
		 */
		public function url_stat(string $path, int $flags): array {}
	}

	/**
	 * Append bucket to brigade
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $brigade
	 * @param object $bucket
	 * @return void
	 * @link https://php.net/manual/en/function.stream-bucket-append.php
	 * @since PHP 5, PHP 7
	 */
	function stream_bucket_append($brigade, object $bucket): void {}

	/**
	 * Return a bucket object from the brigade for operating on
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $brigade
	 * @return object
	 * @link https://php.net/manual/en/function.stream-bucket-make-writeable.php
	 * @since PHP 5, PHP 7
	 */
	function stream_bucket_make_writeable($brigade): object {}

	/**
	 * Create a new bucket for use on the current stream
	 * <p>This function is currently not documented; only its argument list is available.</p>
	 * @param resource $stream
	 * @param string $buffer
	 * @return object
	 * @link https://php.net/manual/en/function.stream-bucket-new.php
	 * @since PHP 5, PHP 7
	 */
	function stream_bucket_new($stream, string $buffer): object {}

	/**
	 * Prepend bucket to brigade
	 * <p>This function can be called to prepend a bucket to a bucket brigade. It is typically called from <code>php_user_filter::filter()</code>.</p>
	 * @param resource $brigade <p><code>brigade</code> is a resource pointing to a <code>bucket brigade</code> which contains one or more <code>bucket</code> objects.</p>
	 * @param object $bucket <p>A bucket object.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.stream-bucket-prepend.php
	 * @since PHP 5, PHP 7
	 */
	function stream_bucket_prepend($brigade, object $bucket): void {}

	/**
	 * Creates a stream context
	 * <p>Creates and returns a stream context with any options supplied in <code>options</code> preset.</p>
	 * @param array $options <p>Must be an associative array of associative arrays in the format <code>$arr['wrapper']['option'] = $value</code>. Refer to context options for a list of available wrappers and options.</p> <p>Default to an empty array.</p>
	 * @param array $params <p>Must be an associative array in the format <code>$arr['parameter'] = $value</code>. Refer to context parameters for a listing of standard stream parameters.</p>
	 * @return resource <p>A stream context <code>resource</code>.</p>
	 * @link https://php.net/manual/en/function.stream-context-create.php
	 * @see stream_context_set_option()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_context_create(array $options = null, array $params = null) {}

	/**
	 * Retrieve the default stream context
	 * <p>Returns the default stream context which is used whenever file operations (<code>fopen()</code>, <code>file_get_contents()</code>, etc...) are called without a context parameter. Options for the default context can optionally be specified with this function using the same syntax as <code>stream_context_create()</code>.</p>
	 * @param array $options <code>options</code> must be an associative array of associative arrays in the format <code>$arr['wrapper']['option'] = $value</code>.  <p><b>Note</b>:</p><p>As of PHP 5.3.0, the <code>stream_context_set_default()</code> function can be used to set the default context.</p>
	 * @return resource <p>A stream context <code>resource</code>.</p>
	 * @link https://php.net/manual/en/function.stream-context-get-default.php
	 * @see stream_context_create()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function stream_context_get_default(array $options = null) {}

	/**
	 * Retrieve options for a stream/wrapper/context
	 * <p>Returns an array of options on the specified stream or context.</p>
	 * @param resource $stream_or_context <p>The stream or context to get options from</p>
	 * @return array <p>Returns an associative array with the options.</p>
	 * @link https://php.net/manual/en/function.stream-context-get-options.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_context_get_options($stream_or_context): array {}

	/**
	 * Retrieves parameters from a context
	 * <p>Retrieves parameter and options information from the stream or context.</p>
	 * @param resource $stream_or_context <p>A stream <code>resource</code> or a context <code>resource</code></p>
	 * @return array <p>Returns an associate array containing all context options and parameters.</p>
	 * @link https://php.net/manual/en/function.stream-context-get-params.php
	 * @see stream_context_set_option(), stream_context_set_params()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function stream_context_get_params($stream_or_context): array {}

	/**
	 * Set the default stream context
	 * <p>Set the default stream context which will be used whenever file operations (<code>fopen()</code>, <code>file_get_contents()</code>, etc...) are called without a context parameter. Uses the same syntax as <code>stream_context_create()</code>.</p>
	 * @param array $options <p>The options to set for the default context.</p> <p><b>Note</b>:</p><p><code>options</code> must be an associative array of associative arrays in the format <code>$arr['wrapper']['option'] = $value</code>.</p>
	 * @return resource <p>Returns the default stream context.</p>
	 * @link https://php.net/manual/en/function.stream-context-set-default.php
	 * @see stream_context_create(), stream_context_get_default()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function stream_context_set_default(array $options) {}

	/**
	 * Sets an option for a stream/wrapper/context
	 * <p>Sets an option on the specified context. <code>value</code> is set to <code>option</code> for <code>wrapper</code></p>
	 * @param resource $stream_or_context <p>The stream or context resource to apply the options to.</p>
	 * @param string $wrapper
	 * @param string $option
	 * @param mixed $value
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-context-set-option.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_context_set_option($stream_or_context, string $wrapper, string $option, mixed $value): bool {}

	/**
	 * Set parameters for a stream/wrapper/context
	 * <p>Sets parameters on the specified context.</p>
	 * @param resource $context <p>The stream or context to apply the parameters too.</p>
	 * @param array $params <p>An array of parameters to set.</p> <p><b>Note</b>:</p><p><code>params</code> should be an associative array of the structure: <code>$params['paramname'] = "paramvalue";</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-context-set-params.php
	 * @see stream_notification_callback()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_context_set_params($context, array $params): bool {}

	/**
	 * Copies data from one stream to another
	 * <p>Makes a copy of up to <code>maxlength</code> bytes of data from the current position (or from the <code>offset</code> position, if specified) in <code>source</code> to <code>dest</code>. If <code>maxlength</code> is not specified, all remaining content in <code>source</code> will be copied.</p>
	 * @param resource $source <p>The source stream</p>
	 * @param resource $dest <p>The destination stream</p>
	 * @param int $maxlength <p>Maximum bytes to copy</p>
	 * @param int $offset <p>The offset where to start to copy data</p>
	 * @return int|false <p>Returns the total count of bytes copied, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-copy-to-stream.php
	 * @see copy()
	 * @since PHP 5, PHP 7
	 */
	function stream_copy_to_stream($source, $dest, int $maxlength = -1, int $offset = 0): int|false {}

	/**
	 * Attach a filter to a stream
	 * <p>Adds <code>filtername</code> to the list of filters attached to <code>stream</code>.</p>
	 * @param resource $stream <p>The target stream.</p>
	 * @param string $filtername <p>The filter name.</p>
	 * @param int $read_write <p>By default, <b>stream_filter_append()</b> will attach the filter to the <code>read filter chain</code> if the file was opened for reading (i.e. File Mode: <code>r</code>, and/or <code>+</code>). The filter will also be attached to the <code>write filter chain</code> if the file was opened for writing (i.e. File Mode: <code>w</code>, <code>a</code>, and/or <code>+</code>). <b><code>STREAM_FILTER_READ</code></b>, <b><code>STREAM_FILTER_WRITE</code></b>, and/or <b><code>STREAM_FILTER_ALL</code></b> can also be passed to the <code>read_write</code> parameter to override this behavior.</p>
	 * @param mixed $params <p>This filter will be added with the specified <code>params</code> to the <i>end</i> of the list and will therefore be called last during stream operations. To add a filter to the beginning of the list, use <code>stream_filter_prepend()</code>.</p>
	 * @return resource <p>Returns a resource on success or <b><code>false</code></b> on failure. The resource can be used to refer to this filter instance during a call to <code>stream_filter_remove()</code>.</p><p><b><code>false</code></b> is returned if <code>stream</code> is not a resource or if <code>filtername</code> cannot be located.</p>
	 * @link https://php.net/manual/en/function.stream-filter-append.php
	 * @see stream_filter_register(), stream_filter_prepend(), stream_get_filters()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_filter_append($stream, string $filtername, int $read_write = null, mixed $params = null) {}

	/**
	 * Attach a filter to a stream
	 * <p>Adds <code>filtername</code> to the list of filters attached to <code>stream</code>.</p>
	 * @param resource $stream <p>The target stream.</p>
	 * @param string $filtername <p>The filter name.</p>
	 * @param int $read_write <p>By default, <b>stream_filter_prepend()</b> will attach the filter to the <code>read filter chain</code> if the file was opened for reading (i.e. File Mode: <code>r</code>, and/or <code>+</code>). The filter will also be attached to the <code>write filter chain</code> if the file was opened for writing (i.e. File Mode: <code>w</code>, <code>a</code>, and/or <code>+</code>). <b><code>STREAM_FILTER_READ</code></b>, <b><code>STREAM_FILTER_WRITE</code></b>, and/or <b><code>STREAM_FILTER_ALL</code></b> can also be passed to the <code>read_write</code> parameter to override this behavior. See <code>stream_filter_append()</code> for an example of using this parameter.</p>
	 * @param mixed $params <p>This filter will be added with the specified <code>params</code> to the <i>beginning</i> of the list and will therefore be called first during stream operations. To add a filter to the end of the list, use <code>stream_filter_append()</code>.</p>
	 * @return resource <p>Returns a resource on success or <b><code>false</code></b> on failure. The resource can be used to refer to this filter instance during a call to <code>stream_filter_remove()</code>.</p><p><b><code>false</code></b> is returned if <code>stream</code> is not a resource or if <code>filtername</code> cannot be located.</p>
	 * @link https://php.net/manual/en/function.stream-filter-prepend.php
	 * @see stream_filter_register(), stream_filter_append()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_filter_prepend($stream, string $filtername, int $read_write = null, mixed $params = null) {}

	/**
	 * Register a user defined stream filter
	 * <p><b>stream_filter_register()</b> allows you to implement your own filter on any registered stream used with all the other filesystem functions (such as <code>fopen()</code>, <code>fread()</code> etc.).</p>
	 * @param string $filter_name <p>The filter name to be registered.</p>
	 * @param string $class <p>To implement a filter, you need to define a class as an extension of php_user_filter with a number of member functions. When performing read/write operations on the stream to which your filter is attached, PHP will pass the data through your filter (and any other filters attached to that stream) so that the data may be modified as desired. You must implement the methods exactly as described in php_user_filter - doing otherwise will lead to undefined behaviour.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p><b>stream_filter_register()</b> will return <b><code>false</code></b> if the <code>filter_name</code> is already defined.</p>
	 * @link https://php.net/manual/en/function.stream-filter-register.php
	 * @see stream_wrapper_register(), stream_filter_append(), stream_filter_prepend()
	 * @since PHP 5, PHP 7
	 */
	function stream_filter_register(string $filter_name, string $class): bool {}

	/**
	 * Remove a filter from a stream
	 * <p>Removes a stream filter previously added to a stream with <code>stream_filter_prepend()</code> or <code>stream_filter_append()</code>. Any data remaining in the filter's internal buffer will be flushed through to the next filter before removing it.</p>
	 * @param resource $stream_filter <p>The stream filter to be removed.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-filter-remove.php
	 * @see stream_filter_register(), stream_filter_append(), stream_filter_prepend()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function stream_filter_remove($stream_filter): bool {}

	/**
	 * Reads remainder of a stream into a string
	 * <p>Identical to <code>file_get_contents()</code>, except that <b>stream_get_contents()</b> operates on an already open stream resource and returns the remaining contents in a string, up to <code>maxlength</code> bytes and starting at the specified <code>offset</code>.</p>
	 * @param resource $handle <p>A stream resource (e.g. returned from <code>fopen()</code>)</p>
	 * @param int $maxlength <p>The maximum bytes to read. Defaults to -1 (read all the remaining buffer).</p>
	 * @param int $offset <p>Seek to the specified offset before reading. If this number is negative, no seeking will occur and reading will start from the current position.</p>
	 * @return string|false <p>Returns a string or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-get-contents.php
	 * @see fgets(), fread(), fpassthru()
	 * @since PHP 5, PHP 7
	 */
	function stream_get_contents($handle, int $maxlength = -1, int $offset = -1): string|false {}

	/**
	 * Retrieve list of registered filters
	 * <p>Retrieve the list of registered filters on the running system.</p>
	 * @return array <p>Returns an indexed array containing the name of all stream filters available.</p>
	 * @link https://php.net/manual/en/function.stream-get-filters.php
	 * @see stream_filter_register(), stream_get_wrappers()
	 * @since PHP 5, PHP 7
	 */
	function stream_get_filters(): array {}

	/**
	 * Gets line from stream resource up to a given delimiter
	 * <p>Gets a line from the given handle.</p><p>Reading ends when <code>length</code> bytes have been read, when the string specified by <code>ending</code> is found (which is <i>not</i> included in the return value), or on EOF (whichever comes first).</p><p>This function is nearly identical to <code>fgets()</code> except in that it allows end of line delimiters other than the standard \n, \r, and \r\n, and does <i>not</i> return the delimiter itself.</p>
	 * @param resource $handle <p>A valid file handle.</p>
	 * @param int $length <p>The number of bytes to read from the handle.</p>
	 * @param string $ending <p>An optional string delimiter.</p>
	 * @return string <p>Returns a string of up to <code>length</code> bytes read from the file pointed to by <code>handle</code>.</p><p>If an error occurs, returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.stream-get-line.php
	 * @see fread(), fgets(), fgetc()
	 * @since PHP 5, PHP 7
	 */
	function stream_get_line($handle, int $length, string $ending = null): string {}

	/**
	 * Retrieves header/meta data from streams/file pointers
	 * <p>Returns information about an existing <code>stream</code>.</p>
	 * @param resource $stream <p>The stream can be any stream created by <code>fopen()</code>, <code>fsockopen()</code> and <code>pfsockopen()</code>.</p>
	 * @return array <p>The result array contains the following items:</p><ul> <li> <p><code>timed_out</code> (bool) - <b><code>true</code></b> if the stream timed out while waiting for data on the last call to <code>fread()</code> or <code>fgets()</code>.</p> </li> <li> <p><code>blocked</code> (bool) - <b><code>true</code></b> if the stream is in blocking IO mode. See <code>stream_set_blocking()</code>.</p> </li> <li> <p><code>eof</code> (bool) - <b><code>true</code></b> if the stream has reached end-of-file. Note that for socket streams this member can be <b><code>true</code></b> even when <code>unread_bytes</code> is non-zero. To determine if there is more data to be read, use <code>feof()</code> instead of reading this item.</p> </li> <li> <p><code>unread_bytes</code> (int) - the number of bytes currently contained in the PHP's own internal buffer.</p> <p><b>Note</b>:  You shouldn't use this value in a script. </p> </li> <li> <p><code>stream_type</code> (string) - a label describing the underlying implementation of the stream.</p> </li> <li> <p><code>wrapper_type</code> (string) - a label describing the protocol wrapper implementation layered over the stream. See Supported Protocols and Wrappers for more information about wrappers.</p> </li> <li> <p><code>wrapper_data</code> (mixed) - wrapper specific data attached to this stream. See Supported Protocols and Wrappers for more information about wrappers and their wrapper data.</p> </li> <li> <p><code>mode</code> (string) - the type of access required for this stream (see Table 1 of the fopen() reference)</p> </li> <li> <p><code>seekable</code> (bool) - whether the current stream can be seeked.</p> </li> <li> <p><code>uri</code> (string) - the URI/filename associated with this stream.</p> </li> </ul>
	 * @link https://php.net/manual/en/function.stream-get-meta-data.php
	 * @see get_headers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_get_meta_data($stream): array {}

	/**
	 * Retrieve list of registered socket transports
	 * <p>Returns an indexed array containing the name of all socket transports available on the running system.</p>
	 * @return array <p>Returns an indexed array of socket transports names.</p>
	 * @link https://php.net/manual/en/function.stream-get-transports.php
	 * @see stream_get_filters(), stream_get_wrappers()
	 * @since PHP 5, PHP 7
	 */
	function stream_get_transports(): array {}

	/**
	 * Retrieve list of registered streams
	 * <p>Retrieve list of registered streams available on the running system.</p>
	 * @return array <p>Returns an indexed array containing the name of all stream wrappers available on the running system.</p>
	 * @link https://php.net/manual/en/function.stream-get-wrappers.php
	 * @see stream_wrapper_register()
	 * @since PHP 5, PHP 7
	 */
	function stream_get_wrappers(): array {}

	/**
	 * Checks if a stream is a local stream
	 * <p>Checks if a stream, or a URL, is a local one or not.</p>
	 * @param resource|string $stream <p>The stream <code>resource</code> or URL to check.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-is-local.php
	 * @since PHP 5 >= 5.2.4, PHP 7
	 */
	function stream_is_local($stream): bool {}

	/**
	 * Check if a stream is a TTY
	 * <p>Determines if stream <code>stream</code> refers to a valid terminal type device. This is a more portable version of <code>posix_isatty()</code>, since it works on Windows systems too.</p>
	 * @param resource $stream
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-isatty.php
	 * @since PHP 7 >= 7.2.0
	 */
	function stream_isatty($stream): bool {}

	/**
	 * A callback function for the notification context parameter
	 * <p>A <code>callable</code> function, used by the notification context parameter, called during an event.</p><p><b>Note</b>:</p><p>This is <i>not</i> a real function, only a prototype of how the function should be.</p>
	 * @param int $notification_code <p>One of the <b><code>STREAM_NOTIFY_&#42;</code></b> notification constants.</p>
	 * @param int $severity <p>One of the <b><code>STREAM_NOTIFY_SEVERITY_&#42;</code></b> notification constants.</p>
	 * @param string $message <p>Passed if a descriptive message is available for the event.</p>
	 * @param int $message_code <p>Passed if a descriptive message code is available for the event.</p> <p>The meaning of this value is dependent on the specific wrapper in use.</p>
	 * @param int $bytes_transferred <p>If applicable, the <code>bytes_transferred</code> will be populated.</p>
	 * @param int $bytes_max <p>If applicable, the <code>bytes_max</code> will be populated.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.stream-notification-callback.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function stream_notification_callback(int $notification_code, int $severity, string $message, int $message_code, int $bytes_transferred, int $bytes_max): void {}

	/**
	 * Alias of stream_wrapper_register()
	 * <p>This function is an alias of: <code>stream_wrapper_register()</code>.</p>
	 * @param string $protocol <p>The wrapper name to be registered.</p>
	 * @param string $class <p>The classname which implements the <code>protocol</code>.</p>
	 * @param int $flags <p>Should be set to <b><code>STREAM_IS_URL</code></b> if <code>protocol</code> is a URL protocol. Default is 0, local stream.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.stream-register-wrapper.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_register_wrapper(string $protocol, string $class, int $flags = 0): bool {}

	/**
	 * Resolve filename against the include path
	 * <p>Resolve <code>filename</code> against the include path according to the same rules as <code>fopen()</code>/<code>include</code>.</p>
	 * @param string $filename <p>The filename to resolve.</p>
	 * @return string|false <p>Returns a <code>string</code> containing the resolved absolute filename, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-resolve-include-path.php
	 * @since PHP 5 >= 5.3.2, PHP 7
	 */
	function stream_resolve_include_path(string $filename): string|false {}

	/**
	 * Runs the equivalent of the select() system call on the given arrays of streams with a timeout specified by tv_sec and tv_usec
	 * <p>The <b>stream_select()</b> function accepts arrays of streams and waits for them to change status. Its operation is equivalent to that of the <code>socket_select()</code> function except in that it acts on streams.</p>
	 * @param array $read <p>The streams listed in the <code>read</code> array will be watched to see if characters become available for reading (more precisely, to see if a read will not block - in particular, a stream resource is also ready on end-of-file, in which case an <code>fread()</code> will return a zero length string).</p>
	 * @param array $write <p>The streams listed in the <code>write</code> array will be watched to see if a write will not block.</p>
	 * @param array $except <p>The streams listed in the <code>except</code> array will be watched for high priority exceptional ("out-of-band") data arriving.</p> <p><b>Note</b>:</p><p>When <b>stream_select()</b> returns, the arrays <code>read</code>, <code>write</code> and <code>except</code> are modified to indicate which stream resource(s) actually changed status. The original keys of the <code>array</code>s are preserved.</p>
	 * @param int $tv_sec <p>The <code>tv_sec</code> and <code>tv_usec</code> together form the <i>timeout</i> parameter, <code>tv_sec</code> specifies the number of seconds while <code>tv_usec</code> the number of microseconds. The <code>timeout</code> is an upper bound on the amount of time that <b>stream_select()</b> will wait before it returns. If <code>tv_sec</code> and <code>tv_usec</code> are both set to <code>0</code>, <b>stream_select()</b> will not wait for data - instead it will return immediately, indicating the current status of the streams.</p> <p>If <code>tv_sec</code> is <b><code>null</code></b> <b>stream_select()</b> can block indefinitely, returning only when an event on one of the watched streams occurs (or if a signal interrupts the system call).</p> <p><b>Warning</b></p> <p>Using a timeout value of <code>0</code> allows you to instantaneously poll the status of the streams, however, it is NOT a good idea to use a <code>0</code> timeout value in a loop as it will cause your script to consume too much CPU time.</p> <p>It is much better to specify a timeout value of a few seconds, although if you need to be checking and running other code concurrently, using a timeout value of at least <code>200000</code> microseconds will help reduce the CPU usage of your script.</p> <p>Remember that the timeout value is the maximum time that will elapse; <b>stream_select()</b> will return as soon as the requested streams are ready for use.</p>
	 * @param int $tv_usec <p>See <code>tv_sec</code> description.</p>
	 * @return int <p>On success <b>stream_select()</b> returns the number of stream resources contained in the modified arrays, which may be zero if the timeout expires before anything interesting happens. On error <b><code>false</code></b> is returned and a warning raised (this can happen if the system call is interrupted by an incoming signal).</p>
	 * @link https://php.net/manual/en/function.stream-select.php
	 * @see stream_set_blocking()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_select(array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = 0): int {}

	/**
	 * Set blocking/non-blocking mode on a stream
	 * <p>Sets blocking or non-blocking mode on a <code>stream</code>.</p><p>This function works for any stream that supports non-blocking mode (currently, regular files and socket streams).</p>
	 * @param resource $stream <p>The stream.</p>
	 * @param bool $enable <p>If <code>enable</code> is <b><code>false</code></b>, the given stream will be switched to non-blocking mode, and if <b><code>true</code></b>, it will be switched to blocking mode. This affects calls like <code>fgets()</code> and <code>fread()</code> that read from the stream. In non-blocking mode an <code>fgets()</code> call will always return right away while in blocking mode it will wait for data to become available on the stream.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-set-blocking.php
	 * @see stream_select()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_set_blocking($stream, bool $enable): bool {}

	/**
	 * Set the stream chunk size
	 * <p>Set the stream chunk size.</p>
	 * @param resource $stream <p>The target stream.</p>
	 * @param int $size <p>The desired new chunk size.</p>
	 * @return int <p>Returns the previous chunk size on success.</p><p>Will return <b><code>false</code></b> if <code>size</code> is less than 1 or greater than <b><code>PHP_INT_MAX</code></b>.</p>
	 * @link https://php.net/manual/en/function.stream-set-chunk-size.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function stream_set_chunk_size($stream, int $size): int {}

	/**
	 * Set read file buffering on the given stream
	 * <p>Sets the read buffer. It's the equivalent of <code>stream_set_write_buffer()</code>, but for read operations.</p>
	 * @param resource $stream <p>The file pointer.</p>
	 * @param int $size <p>The number of bytes to buffer. If <code>size</code> is 0 then read operations are unbuffered. This ensures that all reads with <code>fread()</code> are completed before other processes are allowed to read from that input stream.</p>
	 * @return int <p>Returns 0 on success, or another value if the request cannot be honored.</p>
	 * @link https://php.net/manual/en/function.stream-set-read-buffer.php
	 * @see stream_set_write_buffer()
	 * @since PHP 5 >= 5.3.3, PHP 7
	 */
	function stream_set_read_buffer($stream, int $size): int {}

	/**
	 * Set timeout period on a stream
	 * <p>Sets the timeout value on <code>stream</code>, expressed in the sum of <code>seconds</code> and <code>microseconds</code>.</p><p>When the stream times out, the 'timed_out' key of the array returned by <code>stream_get_meta_data()</code> is set to <b><code>true</code></b>, although no error/warning is generated.</p>
	 * @param resource $stream <p>The target stream.</p>
	 * @param int $seconds <p>The seconds part of the timeout to be set.</p>
	 * @param int $microseconds <p>The microseconds part of the timeout to be set.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-set-timeout.php
	 * @see fsockopen(), fopen()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

	/**
	 * Sets write file buffering on the given stream
	 * <p>Sets the buffering for write operations on the given <code>stream</code> to <code>buffer</code> bytes.</p>
	 * @param resource $stream <p>The file pointer.</p>
	 * @param int $buffer <p>The number of bytes to buffer. If <code>buffer</code> is 0 then write operations are unbuffered. This ensures that all writes with <code>fwrite()</code> are completed before other processes are allowed to write to that output stream.</p>
	 * @return int <p>Returns 0 on success, or another value if the request cannot be honored.</p>
	 * @link https://php.net/manual/en/function.stream-set-write-buffer.php
	 * @see fopen(), fwrite()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function stream_set_write_buffer($stream, int $buffer): int {}

	/**
	 * Accept a connection on a socket created by stream_socket_server()
	 * <p>Accept a connection on a socket previously created by <code>stream_socket_server()</code>.</p>
	 * @param resource $server_socket <p>The server socket to accept a connection from.</p>
	 * @param float $timeout <p>Override the default socket accept timeout. Time should be given in seconds.</p>
	 * @param string $peername <p>Will be set to the name (address) of the client which connected, if included and available from the selected transport.</p> <p><b>Note</b>:</p><p>Can also be determined later using <code>stream_socket_get_name()</code>.</p>
	 * @return resource|false <p>Returns a stream to the accepted socket connection or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-socket-accept.php
	 * @see stream_socket_server(), stream_socket_get_name(), stream_set_blocking(), stream_set_timeout(), fgets(), fgetss(), fwrite(), fclose(), feof()
	 * @since PHP 5, PHP 7
	 */
	function stream_socket_accept($server_socket, float $timeout  = 'ini_get("default_socket_timeout")', string &$peername = null) {}

	/**
	 * Open Internet or Unix domain socket connection
	 * <p>Initiates a stream or datagram connection to the destination specified by <code>remote_socket</code>. The type of socket created is determined by the transport specified using standard URL formatting: <code>transport://target</code>. For Internet Domain sockets (AF_INET) such as TCP and UDP, the <code>target</code> portion of the <code>remote_socket</code> parameter should consist of a hostname or IP address followed by a colon and a port number. For Unix domain sockets, the <code>target</code> portion should point to the socket file on the filesystem.</p><p><b>Note</b>:</p><p>The stream will by default be opened in blocking mode. You can switch it to non-blocking mode by using <code>stream_set_blocking()</code>.</p>
	 * @param string $remote_socket <p>Address to the socket to connect to.</p>
	 * @param int $errno <p>Will be set to the system level error number if connection fails.</p>
	 * @param string $errstr <p>Will be set to the system level error message if the connection fails.</p>
	 * @param float $timeout <p>Number of seconds until the <code>connect()</code> system call should timeout.</p><p><b>Note</b>:  This parameter only applies when not making asynchronous connection attempts. </p> <p><b>Note</b>:</p><p>To set a timeout for reading/writing data over the socket, use the <code>stream_set_timeout()</code>, as the <code>timeout</code> only applies while making connecting the socket.</p>
	 * @param int $flags <p>Bitmask field which may be set to any combination of connection flags. Currently the select of connection flags is limited to <b><code>STREAM_CLIENT_CONNECT</code></b> (default), <b><code>STREAM_CLIENT_ASYNC_CONNECT</code></b> and <b><code>STREAM_CLIENT_PERSISTENT</code></b>.</p>
	 * @param resource $context <p>A valid context resource created with <code>stream_context_create()</code>.</p>
	 * @return resource <p>On success a stream resource is returned which may be used together with the other file functions (such as <code>fgets()</code>, <code>fgetss()</code>, <code>fwrite()</code>, <code>fclose()</code>, and <code>feof()</code>), <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-socket-client.php
	 * @see stream_socket_server(), stream_set_blocking(), stream_set_timeout(), stream_select(), fgets(), fgetss(), fwrite(), fclose(), feof()
	 * @since PHP 5, PHP 7
	 */
	function stream_socket_client(string $remote_socket, int &$errno = null, string &$errstr = null, float $timeout  = 'ini_get("default_socket_timeout")', int $flags = STREAM_CLIENT_CONNECT, $context = null) {}

	/**
	 * Turns encryption on/off on an already connected socket
	 * <p>Enable or disable encryption on the stream.</p><p>Once the crypto settings are established, cryptography can be turned on and off dynamically by passing <b><code>true</code></b> or <b><code>false</code></b> in the <code>enable</code> parameter.</p>
	 * @param resource $stream <p>The stream resource.</p>
	 * @param bool $enable <p>Enable/disable cryptography on the stream.</p>
	 * @param int $crypto_type <p>Setup encryption on the stream. Valid methods are</p><ul> <li><b><code>STREAM_CRYPTO_METHOD_SSLv2_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv3_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv23_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_ANY_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLS_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv2_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv3_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_SSLv23_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_ANY_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLS_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_0_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_1_SERVER</code></b></li> <li><b><code>STREAM_CRYPTO_METHOD_TLSv1_2_SERVER</code></b></li> </ul> <p>If omitted, the <code>crypto_method</code> context option on the stream's SSL context will be used instead.</p>
	 * @param resource $session_stream <p>Seed the stream with settings from <code>session_stream</code>.</p>
	 * @return mixed <p>Returns <b><code>true</code></b> on success, <b><code>false</code></b> if negotiation has failed or <code>0</code> if there isn't enough data and you should try again (only for non-blocking sockets).</p>
	 * @link https://php.net/manual/en/function.stream-socket-enable-crypto.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function stream_socket_enable_crypto($stream, bool $enable, int $crypto_type = null, $session_stream = null): mixed {}

	/**
	 * Retrieve the name of the local or remote sockets
	 * <p>Returns the local or remote name of a given socket connection.</p>
	 * @param resource $handle <p>The socket to get the name of.</p>
	 * @param bool $want_peer <p>If set to <b><code>true</code></b> the <code>remote</code> socket name will be returned, if set to <b><code>false</code></b> the <code>local</code> socket name will be returned.</p>
	 * @return string <p>The name of the socket.</p>
	 * @link https://php.net/manual/en/function.stream-socket-get-name.php
	 * @see stream_socket_accept()
	 * @since PHP 5, PHP 7
	 */
	function stream_socket_get_name($handle, bool $want_peer): string {}

	/**
	 * Creates a pair of connected, indistinguishable socket streams
	 * <p><b>stream_socket_pair()</b> creates a pair of connected, indistinguishable socket streams. This function is commonly used in IPC (Inter-Process Communication).</p>
	 * @param int $domain <p>The protocol family to be used: <b><code>STREAM_PF_INET</code></b>, <b><code>STREAM_PF_INET6</code></b> or <b><code>STREAM_PF_UNIX</code></b></p>
	 * @param int $type <p>The type of communication to be used: <b><code>STREAM_SOCK_DGRAM</code></b>, <b><code>STREAM_SOCK_RAW</code></b>, <b><code>STREAM_SOCK_RDM</code></b>, <b><code>STREAM_SOCK_SEQPACKET</code></b> or <b><code>STREAM_SOCK_STREAM</code></b></p>
	 * @param int $protocol <p>The protocol to be used: <b><code>STREAM_IPPROTO_ICMP</code></b>, <b><code>STREAM_IPPROTO_IP</code></b>, <b><code>STREAM_IPPROTO_RAW</code></b>, <b><code>STREAM_IPPROTO_TCP</code></b> or <b><code>STREAM_IPPROTO_UDP</code></b></p>
	 * @return array|false <p>Returns an <code>array</code> with the two socket resources on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-socket-pair.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function stream_socket_pair(int $domain, int $type, int $protocol): array|false {}

	/**
	 * Receives data from a socket, connected or not
	 * <p><b>stream_socket_recvfrom()</b> accepts data from a remote socket up to <code>length</code> bytes.</p>
	 * @param resource $socket <p>The remote socket.</p>
	 * @param int $length <p>The number of bytes to receive from the <code>socket</code>.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following:</p> <b>Possible values for <code>flags</code></b>   <b><code>STREAM_OOB</code></b>  Process OOB (<code>out-of-band</code>) data.    <b><code>STREAM_PEEK</code></b>  Retrieve data from the socket, but do not consume the buffer. Subsequent calls to <code>fread()</code> or <b>stream_socket_recvfrom()</b> will see the same data.
	 * @param string $address <p>If <code>address</code> is provided it will be populated with the address of the remote socket.</p>
	 * @return string <p>Returns the read data, as a string</p>
	 * @link https://php.net/manual/en/function.stream-socket-recvfrom.php
	 * @see stream_socket_sendto(), stream_socket_client(), stream_socket_server()
	 * @since PHP 5, PHP 7
	 */
	function stream_socket_recvfrom($socket, int $length, int $flags = 0, string &$address = null): string {}

	/**
	 * Sends a message to a socket, whether it is connected or not
	 * <p>Sends the specified <code>data</code> through the <code>socket</code>.</p>
	 * @param resource $socket <p>The socket to send <code>data</code> to.</p>
	 * @param string $data <p>The data to be sent.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following:</p> <b>possible values for <code>flags</code></b>   <b><code>STREAM_OOB</code></b>  Process OOB (out-of-band) data.
	 * @param string $address <p>The address specified when the socket stream was created will be used unless an alternate address is specified in <code>address</code>.</p> <p>If specified, it must be in dotted quad (or [ipv6]) format.</p>
	 * @return int <p>Returns a result code, as an integer.</p>
	 * @link https://php.net/manual/en/function.stream-socket-sendto.php
	 * @see stream_socket_recvfrom(), stream_socket_client(), stream_socket_server()
	 * @since PHP 5, PHP 7
	 */
	function stream_socket_sendto($socket, string $data, int $flags = 0, string $address = null): int {}

	/**
	 * Create an Internet or Unix domain server socket
	 * <p>Creates a stream or datagram socket on the specified <code>local_socket</code>.</p><p>This function only creates a socket, to begin accepting connections use <code>stream_socket_accept()</code>.</p>
	 * @param string $local_socket <p>The type of socket created is determined by the transport specified using standard URL formatting: <code>transport://target</code>.</p> <p>For Internet Domain sockets (<b><code>AF_INET</code></b>) such as TCP and UDP, the <code>target</code> portion of the <code>remote_socket</code> parameter should consist of a hostname or IP address followed by a colon and a port number. For Unix domain sockets, the <code>target</code> portion should point to the socket file on the filesystem.</p> <p>Depending on the environment, Unix domain sockets may not be available. A list of available transports can be retrieved using <code>stream_get_transports()</code>. See List of Supported Socket Transports for a list of bulitin transports.</p>
	 * @param int $errno <p>If the optional <code>errno</code> and <code>errstr</code> arguments are present they will be set to indicate the actual system level error that occurred in the system-level <code>socket()</code>, <code>bind()</code>, and <code>listen()</code> calls. If the value returned in <code>errno</code> is <code>0</code> and the function returned <b><code>false</code></b>, it is an indication that the error occurred before the <code>bind()</code> call. This is most likely due to a problem initializing the socket. Note that the <code>errno</code> and <code>errstr</code> arguments will always be passed by reference.</p>
	 * @param string $errstr <p>See <code>errno</code> description.</p>
	 * @param int $flags <p>A bitmask field which may be set to any combination of socket creation flags.</p> <p><b>Note</b>:</p><p>For UDP sockets, you must use <b><code>STREAM_SERVER_BIND</code></b> as the <code>flags</code> parameter.</p>
	 * @param resource $context
	 * @return resource <p>Returns the created stream, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.stream-socket-server.php
	 * @see stream_socket_client(), stream_set_blocking(), stream_set_timeout(), fgets(), fgetss(), fwrite(), fclose(), feof()
	 * @since PHP 5, PHP 7
	 */
	function stream_socket_server(string $local_socket, int &$errno = null, string &$errstr = null, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context = null) {}

	/**
	 * Shutdown a full-duplex connection
	 * <p>Shutdowns (partially or not) a full-duplex connection.</p><p><b>Note</b>:</p><p>The associated buffer, or buffers, may or may not be emptied.</p>
	 * @param resource $stream <p>An open stream (opened with <code>stream_socket_client()</code>, for example)</p>
	 * @param int $mode <p>One of the following constants: <b><code>STREAM_SHUT_RD</code></b> (disable further receptions), <b><code>STREAM_SHUT_WR</code></b> (disable further transmissions) or <b><code>STREAM_SHUT_RDWR</code></b> (disable further receptions and transmissions).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-socket-shutdown.php
	 * @see fclose()
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function stream_socket_shutdown($stream, int $mode): bool {}

	/**
	 * Tells whether the stream supports locking
	 * <p>Tells whether the stream supports locking through <code>flock()</code>.</p>
	 * @param resource $stream <p>The stream to check.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-supports-lock.php
	 * @see flock()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function stream_supports_lock($stream): bool {}

	/**
	 * Register a URL wrapper implemented as a PHP class
	 * <p>Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as <code>fopen()</code>, <code>fread()</code> etc.).</p>
	 * @param string $protocol <p>The wrapper name to be registered.</p>
	 * @param string $class <p>The classname which implements the <code>protocol</code>.</p>
	 * @param int $flags <p>Should be set to <b><code>STREAM_IS_URL</code></b> if <code>protocol</code> is a URL protocol. Default is 0, local stream.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p><b>stream_wrapper_register()</b> will return <b><code>false</code></b> if the <code>protocol</code> already has a handler.</p>
	 * @link https://php.net/manual/en/function.stream-wrapper-register.php
	 * @see stream_wrapper_unregister(), stream_wrapper_restore(), stream_get_wrappers()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function stream_wrapper_register(string $protocol, string $class, int $flags = 0): bool {}

	/**
	 * Restores a previously unregistered built-in wrapper
	 * <p>Restores a built-in wrapper previously unregistered with <code>stream_wrapper_unregister()</code>.</p>
	 * @param string $protocol
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-wrapper-restore.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function stream_wrapper_restore(string $protocol): bool {}

	/**
	 * Unregister a URL wrapper
	 * <p>Allows you to disable an already defined stream wrapper. Once the wrapper has been disabled you may override it with a user-defined wrapper using <code>stream_wrapper_register()</code> or reenable it later on with <code>stream_wrapper_restore()</code>.</p>
	 * @param string $protocol
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.stream-wrapper-unregister.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function stream_wrapper_unregister(string $protocol): bool {}

}
