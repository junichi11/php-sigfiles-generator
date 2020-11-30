<?php



namespace {

	/**
	 * @link http://php.net/manual/en/class.phdfs.php
	 * @since phdfs >= 0.1.0
	 */
	class phdfs {

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.phdfs.php#phdfs.props.host
		 */
		static $host;

		/**
		 * @var mixed
		 * @link http://php.net/manual/en/class.phdfs.php#phdfs.props.port
		 */
		static $port;

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $ip
		 * @param string $port
		 * @return self
		 * @link http://php.net/manual/en/phdfs.construct.php
		 * @since phdfs >= 0.1.0
		 */
		public function __construct(string $ip, string $port) {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/phdfs.destruct.php
		 * @since phdfs >= 0.1.0
		 */
		public function __destruct() {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.connect.php
		 * @since phdfs >= 0.1.0
		 */
		public function connect(): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $source_file
		 * @param string $destination_file
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.copy.php
		 * @since phdfs >= 0.1.0
		 */
		public function copy(string $source_file, string $destination_file): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.create-directory.php
		 * @since phdfs >= 0.1.0
		 */
		public function create_directory(string $path): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.delete.php
		 * @since phdfs >= 0.1.0
		 */
		public function delete(string $path): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.disconnect.php
		 * @since phdfs >= 0.1.0
		 */
		public function disconnect(): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.exists.php
		 * @since phdfs>= 0.1.0
		 */
		public function exists(string $path): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.file-info.php
		 * @since phdfs >= 0.1.0
		 */
		public function file_info(string $path): array {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @param int $level
		 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.list-directory.php
		 * @since phdfs >= 0.1.0
		 */
		public function list_directory(string $path, int $level = 0): array {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @param int $length
		 * @return string
		 * @link http://php.net/manual/en/phdfs.read.php
		 * @since phdfs >= 0.1.0
		 */
		public function read(string $path, int $length = 0): string {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $old_path
		 * @param string $new_path
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.rename.php
		 * @since phdfs >= 0.1.0
		 */
		public function rename(string $old_path, string $new_path): bool {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @param int $read_length
		 * @return int
		 * @link http://php.net/manual/en/phdfs.tell.php
		 * @since phdfs >= 0.1.0
		 */
		public function tell(string $path, int $read_length = 1024): int {}

		/**
		 * Description
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path
		 * @param string $buffer
		 * @param int $mode
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/phdfs.write.php
		 * @since phdfs >= 0.1.0
		 */
		public function write(string $path, string $buffer, int $mode = 0): bool {}
	}

}
