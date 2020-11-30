<?php



namespace {

	/**
	 * @link http://php.net/manual/en/class.lua.php
	 * @since PECL lua >=0.9.0
	 */
	class Lua {

		/**
		 * @var string
		 * @link http://php.net/manual/en/class.lua.php
		 */
		const LUA_VERSION = 'Lua 5.1.4';

		/**
		 * Call Lua functions
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param callable $lua_func <p>Function name in lua</p>
		 * @param array $args <p>Arguments passed to the Lua function</p>
		 * @param int $use_self <p>Whether to use <i>self</i></p>
		 * @return mixed <p>Returns result of the called function, <b><code>NULL</code></b> for wrong arguments or <b><code>FALSE</code></b> on other failure.</p>
		 * @link http://php.net/manual/en/lua.call.php
		 * @since PECL lua >=0.9.0
		 */
		public function __call(callable $lua_func, array $args = NULL, int $use_self = 0) {}

		/**
		 * Lua constructor
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $lua_script_file
		 * @return self
		 * @link http://php.net/manual/en/lua.construct.php
		 * @since PECL lua >=0.9.0
		 */
		public function __construct(string $lua_script_file = NULL) {}

		/**
		 * Assign a PHP variable to Lua
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $name
		 * @param string $value
		 * @return mixed <p>Returns $this or <b><code>NULL</code></b> on failure.</p>
		 * @link http://php.net/manual/en/lua.assign.php
		 * @since PECL lua >=0.9.0
		 */
		public function assign(string $name, string $value) {}

		/**
		 * Call Lua functions
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param callable $lua_func <p>Function name in lua</p>
		 * @param array $args <p>Arguments passed to the Lua function</p>
		 * @param int $use_self <p>Whether to use <i>self</i></p>
		 * @return mixed <p>Returns result of the called function, <b><code>NULL</code></b> for wrong arguments or <b><code>FALSE</code></b> on other failure.</p>
		 * @link http://php.net/manual/en/lua.call.php
		 * @since PECL lua >=0.9.0
		 */
		public function call(callable $lua_func, array $args = NULL, int $use_self = 0) {}

		/**
		 * Evaluate a string as Lua code
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $statements
		 * @return mixed <p>Returns result of evaled code, <b><code>NULL</code></b> for wrong arguments or <b><code>FALSE</code></b> on other failure.</p>
		 * @link http://php.net/manual/en/lua.eval.php
		 * @since PECL lua >=0.9.0
		 */
		public function eval(string $statements) {}

		/**
		 * The getversion purpose
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return string <p>Returns Lua::LUA_VERSION.</p>
		 * @link http://php.net/manual/en/lua.getversion.php
		 * @since PECL lua >=0.9.0
		 */
		public function getVersion(): string {}

		/**
		 * Parse a Lua script file
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $file
		 * @return mixed <p>Returns result of included code, <b><code>NULL</code></b> for wrong arguments or <b><code>FALSE</code></b> on other failure.</p>
		 * @link http://php.net/manual/en/lua.include.php
		 * @since PECL lua >=0.9.0
		 */
		public function include(string $file) {}

		/**
		 * Register a PHP function to Lua
		 * <p>Register a PHP function to Lua as a function named "$name"</p>
		 * @param string $name
		 * @param callable $function <p>A valid PHP function callback</p>
		 * @return mixed <p>Returns $this, <b><code>NULL</code></b> for wrong arguments or <b><code>FALSE</code></b> on other failure.</p>
		 * @link http://php.net/manual/en/lua.registercallback.php
		 * @since No version information available, might only be in Git
		 */
		public function registerCallback(string $name, callable $function) {}
	}

	/**
	 * <p>LuaClosure is a wrapper class for LUA_TFUNCTION which could be return from calling to Lua function.</p>
	 * @link http://php.net/manual/en/class.luaclosure.php
	 * @since PECL lua >=0.9.0
	 */
	class LuaClosure {

		/**
		 * Invoke luaclosure
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $arg
		 * @param mixed $_
		 * @return void
		 * @link http://php.net/manual/en/luaclosure.invoke.php
		 * @since PECL lua >=0.9.0
		 */
		public function __invoke($arg, $_ = NULL): void {}
	}

}
