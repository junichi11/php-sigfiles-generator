<?php



namespace {

	/**
	 * Set the process title
	 * <p>Sets the process title of the current process.</p>
	 * @param string $title <p>The title to use as the process title.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.setproctitle.php
	 * @see cli_set_process_title(), pcntl_fork(), setthreadtitle()
	 * @since PECL proctitle >= 0.1.0
	 */
	function setproctitle(string $title): void {}

	/**
	 * Set the thread title
	 * <p>Sets the thread title.</p>
	 * @param string $title <p>The title to use as the thread title.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.setthreadtitle.php
	 * @see pcntl_fork(), setproctitle()
	 * @since PECL proctitle >= 0.1.2
	 */
	function setthreadtitle(string $title): bool {}

}
