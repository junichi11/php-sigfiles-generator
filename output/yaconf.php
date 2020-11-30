<?php



namespace {

	/**
	 * <p>Yaconf is a configurations container, it parses INIT files, stores the result in PHP when PHP is started, the result lives with the whole PHP lifecycle.</p>
	 * @link http://php.net/manual/en/class.yaconf.php
	 * @since PECL yaconf >= 1.0.0
	 */
	class Yaconf {

		/**
		 * Retrieve a item
		 * @param string $name <p>Configuration key, the key looks like "filename.key", or "filename.sectionName,key".</p>
		 * @param mixed $default_value <p>if the key doesn't exists, Yaconf::get will return this as result.</p>
		 * @return mixed <p>Returns configuration result(string or array) if the key exists, return default_value if not.</p>
		 * @link http://php.net/manual/en/yaconf.get.php
		 * @since PECL yaconf >= 1.0.0
		 */
		public static function get(string $name, $default_value = NULL) {}

		/**
		 * Determine if a item exists
		 * @param string $name
		 * @return bool
		 * @link http://php.net/manual/en/yaconf.has.php
		 * @since PECL yaconf >= 1.0.0
		 */
		public static function has(string $name): bool {}
	}

}
