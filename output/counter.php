<?php



namespace {

	/**
	 * This flag causes <code>counter_create()</code> to avoid overwriting an existing named counter with a new one.
	 */
	define('COUNTER_FLAG_NO_OVERWRITE', null);

	/**
	 * A counter with this flag will be created as a persistent resource.
	 */
	define('COUNTER_FLAG_PERSIST', null);

	/**
	 * A counter with this flag will be saved between invocations of PHP.
	 */
	define('COUNTER_FLAG_SAVE', null);

	/**
	 * Pass this constant to determine whether a counter resource or object is persistent (has the <b><code>COUNTER_FLAG_PERSIST</code></b> flag).
	 */
	define('COUNTER_META_IS_PERISTENT', null);

	/**
	 * Pass this constant to get the name of a counter resource or object.
	 */
	define('COUNTER_META_NAME', null);

	/**
	 * The counter will never be reset.
	 */
	define('COUNTER_RESET_NEVER', null);

	/**
	 * The counter will be reset on each invocation of PHP.
	 */
	define('COUNTER_RESET_PER_LOAD', null);

	/**
	 * The counter will be reset on each request.
	 */
	define('COUNTER_RESET_PER_REQUEST', null);

}
