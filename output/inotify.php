<?php



namespace {

	/**
	 * Add a watch to an initialized inotify instance
	 * <p><b>inotify_add_watch()</b> adds a new watch or modify an existing watch for the file or directory specified in <code>pathname</code>.</p><p>Using <b>inotify_add_watch()</b> on a watched object replaces the existing watch. Using the <b><code>IN_MASK_ADD</code></b> constant adds (OR) events to the existing watch.</p>
	 * @param resource $inotify_instance <p>Resource returned by <code>inotify_init()</code></p>
	 * @param string $pathname <p>File or directory to watch</p>
	 * @param int $mask <p>Events to watch for. See Predefined Constants.</p>
	 * @return int <p>The return value is a unique (inotify instance wide) watch descriptor.</p>
	 * @link http://php.net/manual/en/function.inotify-add-watch.php
	 * @see inotify_init()
	 * @since PECL inotify >= 0.1.2
	 */
	function inotify_add_watch($inotify_instance, string $pathname, int $mask): int {}

	/**
	 * Initialize an inotify instance
	 * <p>Initialize an inotify instance for use with <code>inotify_add_watch()</code></p>
	 * @return resource <p>A stream resource or <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.inotify-init.php
	 * @see inotify_add_watch(), inotify_rm_watch(), inotify_queue_len(), inotify_read(), fclose()
	 * @since PECL inotify >= 0.1.2
	 */
	function inotify_init() {}

	/**
	 * Return a number upper than zero if there are pending events
	 * <p>This function allows to know if <code>inotify_read()</code> will block or not. If a number upper than zero is returned, there are pending events and <code>inotify_read()</code> will not block.</p>
	 * @param resource $inotify_instance <p>Resource returned by <code>inotify_init()</code></p>
	 * @return int <p>Returns a number upper than zero if there are pending events.</p>
	 * @link http://php.net/manual/en/function.inotify-queue-len.php
	 * @see inotify_init(), stream_select(), stream_set_blocking()
	 * @since PECL inotify >= 0.1.2
	 */
	function inotify_queue_len($inotify_instance): int {}

	/**
	 * Read events from an inotify instance
	 * <p>Read inotify events from an inotify instance.</p>
	 * @param resource $inotify_instance <p>Resource returned by <code>inotify_init()</code></p>
	 * @return array <p>An array of inotify events or <b><code>FALSE</code></b> if no events was pending and <code>inotify_instance</code> is non-blocking. Each event is an array with the following keys:</p><ul> <li>wd is a watch descriptor returned by <code>inotify_add_watch()</code></li> <li>mask is a bit mask of events</li> <li>cookie is a unique id to connect related events (e.g. <b><code>IN_MOVE_FROM</code></b> and <b><code>IN_MOVE_TO</code></b>)</li> <li>name is the name of a file (e.g. if a file was modified in a watched directory)</li> </ul>
	 * @link http://php.net/manual/en/function.inotify-read.php
	 * @see inotify_init(), stream_select(), stream_set_blocking(), inotify_queue_len()
	 * @since PECL inotify >= 0.1.2
	 */
	function inotify_read($inotify_instance): array {}

	/**
	 * Remove an existing watch from an inotify instance
	 * <p><b>inotify_rm_watch()</b> removes the watch <code>watch_descriptor</code> from the inotify instance <code>inotify_instance</code>.</p>
	 * @param resource $inotify_instance <p>Resource returned by <code>inotify_init()</code></p>
	 * @param int $watch_descriptor <p>Watch to remove from the instance</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.inotify-rm-watch.php
	 * @see inotify_init()
	 * @since PECL inotify >= 0.1.2
	 */
	function inotify_rm_watch($inotify_instance, int $watch_descriptor): bool {}

	/**
	 * File was accessed (read) (&#42;)
	 */
	define('IN_ACCESS', null);

	/**
	 * Bitmask of all the above constants
	 */
	define('IN_ALL_EVENTS', null);

	/**
	 * Metadata changed (e.g. permissions, mtime, etc.) (&#42;)
	 */
	define('IN_ATTRIB', null);

	/**
	 * Equals to IN_CLOSE_WRITE | IN_CLOSE_NOWRITE
	 */
	define('IN_CLOSE', null);

	/**
	 * File not opened for writing was closed (&#42;)
	 */
	define('IN_CLOSE_NOWRITE', null);

	/**
	 * File opened for writing was closed (&#42;)
	 */
	define('IN_CLOSE_WRITE', null);

	/**
	 * File or directory created in watched directory (&#42;)
	 */
	define('IN_CREATE', null);

	/**
	 * File or directory deleted in watched directory (&#42;)
	 */
	define('IN_DELETE', null);

	/**
	 * Watched file or directory was deleted
	 */
	define('IN_DELETE_SELF', null);

	/**
	 * Do not dereference pathname if it is a symlink (Since Linux 2.6.15)
	 */
	define('IN_DONT_FOLLOW', null);

	/**
	 * Watch was removed (explicitly by <code>inotify_rm_watch()</code> or because file was removed or filesystem unmounted
	 */
	define('IN_IGNORED', null);

	/**
	 * Subject of this event is a directory
	 */
	define('IN_ISDIR', null);

	/**
	 * Add events to watch mask for this pathname if it already exists (instead of replacing mask).
	 */
	define('IN_MASK_ADD', null);

	/**
	 * File was modified (&#42;)
	 */
	define('IN_MODIFY', null);

	/**
	 * Equals to IN_MOVED_FROM | IN_MOVED_TO
	 */
	define('IN_MOVE', null);

	/**
	 * Watch file or directory was moved
	 */
	define('IN_MOVE_SELF', null);

	/**
	 * File moved out of watched directory (&#42;)
	 */
	define('IN_MOVED_FROM', null);

	/**
	 * File moved into watched directory (&#42;)
	 */
	define('IN_MOVED_TO', null);

	/**
	 * Monitor pathname for one event, then remove from watch list.
	 */
	define('IN_ONESHOT', null);

	/**
	 * Only watch pathname if it is a directory (Since Linux 2.6.15)
	 */
	define('IN_ONLYDIR', null);

	/**
	 * File was opened (&#42;)
	 */
	define('IN_OPEN', null);

	/**
	 * Event queue overflowed (wd is -1 for this event)
	 */
	define('IN_Q_OVERFLOW', null);

	/**
	 * File system containing watched object was unmounted
	 */
	define('IN_UNMOUNT', null);

}
