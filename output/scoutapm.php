<?php



namespace {

	/**
	 * Returns a list of instrumented calls that have occurred
	 * <p>Returns a list of any instrumented function calls since <b>scoutapm_get_calls()</b> was last called. The list is cleared each time the function is called.</p>
	 * @return array <p><b>scoutapm_get_calls()</b> returns an array containing a list of all recorded calls to instrumented function calls.</p>
	 * @link http://php.net/manual/en/function.scoutapm-get-calls.php
	 * @since PECL scoutapm >= 1.0.0
	 */
	function scoutapm_get_calls(): array {}

	/**
	 * List functions scoutapm will instrument.
	 * <p>Returns a list of the functions the extension will instrument.</p>
	 * @return array <p><b>scoutapm_list_instrumented_functions()</b> returns an array containing a list of all functions that the scoutapm extension is able to instrument in the current installation.</p>
	 * @link http://php.net/manual/en/function.scoutapm-list-instrumented-functions.php
	 * @since PECL scoutapm >= 1.0.2
	 */
	function scoutapm_list_instrumented_functions(): array {}

}
