<?php



namespace {

	/**
	 * Call the callback given by the first parameter
	 * <p>Calls the <code>callback</code> given by the first parameter and passes the remaining parameters as arguments.</p>
	 * @param callable $callback <p>The <code>callable</code> to be called.</p>
	 * @param mixed $args <p>Zero or more parameters to be passed to the callback.</p> <p><b>Note</b>:</p><p>Note that the parameters for <b>call_user_func()</b> are not passed by reference.</p> <p><b>Example #1 <b>call_user_func()</b> example and references</b></p>  <code> &lt;&#63;php<br>error_reporting(E_ALL);<br>function&nbsp;increment(&amp;$var)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;$var++;<br>}<br><br>$a&nbsp;=&nbsp;0;<br>call_user_func('increment',&nbsp;$a);<br>echo&nbsp;$a."\n";<br><br>//&nbsp;You&nbsp;can&nbsp;use&nbsp;this&nbsp;instead<br>call_user_func_array('increment',&nbsp;array(&amp;$a));<br>echo&nbsp;$a."\n";<br>&#63;&gt;  </code>  <p>The above example will output:</p>  <pre> Warning: Parameter 1 to increment() expected to be a reference, value given in &hellip; 0 1 </pre>
	 * @return mixed <p>Returns the return value of the callback.</p>
	 * @link https://php.net/manual/en/function.call-user-func.php
	 * @see call_user_func_array(), is_callable()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function call_user_func(callable $callback, ...$args) {}

	/**
	 * Call a callback with an array of parameters
	 * <p>Calls the <code>callback</code> given by the first parameter with the parameters in <code>param_arr</code>.</p>
	 * @param callable $callback <p>The <code>callable</code> to be called.</p>
	 * @param array $param_arr <p>The parameters to be passed to the callback, as an indexed array.</p>
	 * @return mixed <p>Returns the return value of the callback, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.call-user-func-array.php
	 * @see call_user_func()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function call_user_func_array(callable $callback, array $param_arr) {}

	/**
	 * Create an anonymous (lambda-style) function
	 * <p>Creates an anonymous function from the parameters passed, and returns a unique name for it.</p><p>This function internally performs an <code>eval()</code> and as such has the same security issues as <code>eval()</code>. Additionally it has bad performance and memory usage characteristics.</p><p>If you are using PHP 5.3.0 or newer a native anonymous function should be used instead.</p>
	 * @param string $args <p>The function arguments.</p>
	 * @param string $code <p>The function code.</p>
	 * @return string <p>Returns a unique function name as a string, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.create-function.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function create_function(string $args, string $code): string {}

	/**
	 * Call a static method
	 * <p>Calls a user defined function or method given by the <code>function</code> parameter, with the following arguments. This function must be called within a method context, it can't be used outside a class. It uses the late static binding.</p>
	 * @param callable $function <p>The function or method to be called. This parameter may be an array, with the name of the class, and the method, or a string, with a function name.</p>
	 * @param mixed $args <p>Zero or more parameters to be passed to the function.</p>
	 * @return mixed <p>Returns the function result, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.forward-static-call.php
	 * @see forward_static_call_array(), call_user_func_array(), call_user_func(), is_callable()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function forward_static_call(callable $function, ...$args) {}

	/**
	 * Call a static method and pass the arguments as array
	 * <p>Calls a user defined function or method given by the <code>function</code> parameter. This function must be called within a method context, it can't be used outside a class. It uses the late static binding. All arguments of the forwarded method are passed as values, and as an array, similarly to <code>call_user_func_array()</code>.</p>
	 * @param callable $function <p>The function or method to be called. This parameter may be an <code>array</code>, with the name of the class, and the method, or a <code>string</code>, with a function name.</p>
	 * @param array $parameters
	 * @return mixed <p>Returns the function result, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.forward-static-call-array.php
	 * @see forward_static_call(), call_user_func(), call_user_func_array(), is_callable()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function forward_static_call_array(callable $function, array $parameters) {}

	/**
	 * Return an item from the argument list
	 * <p>Gets the specified argument from a user-defined function's argument list.</p><p>This function may be used in conjunction with <code>func_get_args()</code> and <code>func_num_args()</code> to allow user-defined functions to accept variable-length argument lists.</p>
	 * @param int $arg_num <p>The argument offset. Function arguments are counted starting from zero.</p>
	 * @return mixed <p>Returns the specified argument, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.func-get-arg.php
	 * @see func_get_args(), func_num_args()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function func_get_arg(int $arg_num) {}

	/**
	 * Returns an array comprising a function's argument list
	 * <p>Gets an array of the function's argument list.</p><p>This function may be used in conjunction with <code>func_get_arg()</code> and <code>func_num_args()</code> to allow user-defined functions to accept variable-length argument lists.</p>
	 * @return array <p>Returns an array in which each element is a copy of the corresponding member of the current user-defined function's argument list.</p>
	 * @link https://php.net/manual/en/function.func-get-args.php
	 * @see func_get_arg(), func_num_args()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function func_get_args(): array {}

	/**
	 * Returns the number of arguments passed to the function
	 * <p>Gets the number of arguments passed to the function.</p><p>This function may be used in conjunction with <code>func_get_arg()</code> and <code>func_get_args()</code> to allow user-defined functions to accept variable-length argument lists.</p>
	 * @return int <p>Returns the number of arguments passed into the current user-defined function.</p>
	 * @link https://php.net/manual/en/function.func-num-args.php
	 * @see func_get_arg(), func_get_args()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function func_num_args(): int {}

	/**
	 * Return TRUE if the given function has been defined
	 * <p>Checks the list of defined functions, both built-in (internal) and user-defined, for <code>function_name</code>.</p>
	 * @param string $function_name <p>The function name, as a string.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>function_name</code> exists and is a function, <b><code>FALSE</code></b> otherwise.</p><p><b>Note</b>:</p><p>This function will return <b><code>FALSE</code></b> for constructs, such as <code>include_once</code> and <code>echo</code>.</p>
	 * @link https://php.net/manual/en/function.function-exists.php
	 * @see method_exists(), is_callable(), get_defined_functions(), class_exists(), extension_loaded()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function function_exists(string $function_name): bool {}

	/**
	 * Returns an array of all defined functions
	 * <p>Gets an array of all defined functions.</p>
	 * @param bool $exclude_disabled <p>Whether disabled functions should be excluded from the return value.</p>
	 * @return array <p>Returns a multidimensional array containing a list of all defined functions, both built-in (internal) and user-defined. The internal functions will be accessible via $arr["internal"], and the user defined ones using $arr["user"] (see example below).</p>
	 * @link https://php.net/manual/en/function.get-defined-functions.php
	 * @see function_exists(), get_defined_vars(), get_defined_constants(), get_declared_classes()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function get_defined_functions(bool $exclude_disabled = FALSE): array {}

	/**
	 * Register a function for execution on shutdown
	 * <p>Registers a <code>callback</code> to be executed after script execution finishes or <code>exit()</code> is called.</p><p>Multiple calls to <b>register_shutdown_function()</b> can be made, and each will be called in the same order as they were registered. If you call <code>exit()</code> within one registered shutdown function, processing will stop completely and no other registered shutdown functions will be called.</p>
	 * @param callable $callback <p>The shutdown callback to register.</p> <p>The shutdown callbacks are executed as the part of the request, so it's possible to send output from them and access output buffers.</p>
	 * @param mixed $args <p>It is possible to pass parameters to the shutdown function by passing additional parameters.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.register-shutdown-function.php
	 * @see exit()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function register_shutdown_function(callable $callback, ...$args): void {}

	/**
	 * Register a function for execution on each tick
	 * <p>Registers the given <code>function</code> to be executed when a tick is called.</p>
	 * @param callable $function <p>The function to register.</p>
	 * @param mixed $args
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.register-tick-function.php
	 * @see unregister_tick_function()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function register_tick_function(callable $function, ...$args): bool {}

	/**
	 * De-register a function for execution on each tick
	 * <p>De-registers the function <code>function</code> so it is no longer executed when a tick is called.</p>
	 * @param callable $function <p>The function to de-register.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.unregister-tick-function.php
	 * @see register_tick_function()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function unregister_tick_function(callable $function): void {}

}
