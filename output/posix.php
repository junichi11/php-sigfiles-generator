<?php



namespace {

	/**
	 * Determine accessibility of a file
	 * <p><b>posix_access()</b> checks the user's permission of a file.</p>
	 * @param string $filename <p>The name of the file to be tested.</p>
	 * @param int $flags <p>A mask consisting of one or more of <b><code>POSIX_F_OK</code></b>, <b><code>POSIX_R_OK</code></b>, <b><code>POSIX_W_OK</code></b> and <b><code>POSIX_X_OK</code></b>.</p> <p><b><code>POSIX_R_OK</code></b>, <b><code>POSIX_W_OK</code></b> and <b><code>POSIX_X_OK</code></b> request checking whether the file exists and has read, write and execute permissions, respectively. <b><code>POSIX_F_OK</code></b> just requests checking for the existence of the file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-access.php
	 * @see posix_get_last_error(), posix_strerror()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function posix_access(string $filename, int $flags = 0): bool {}

	/**
	 * Get path name of controlling terminal
	 * <p>Generates a <code>string</code> which is the pathname for the current controlling terminal for the process. On error this will set errno, which can be checked using <code>posix_get_last_error()</code></p>
	 * @return string|false <p>Upon successful completion, returns <code>string</code> of the pathname to the current controlling terminal. Otherwise <b><code>false</code></b> is returned and errno is set, which can be checked with <code>posix_get_last_error()</code>.</p>
	 * @link https://php.net/manual/en/function.posix-ctermid.php
	 * @see posix_ttyname(), posix_get_last_error()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_ctermid(): string|false {}

	/**
	 * Alias of posix_get_last_error()
	 * <p>This function is an alias of: <code>posix_get_last_error()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/en/function.posix-errno.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function posix_errno(): int {}

	/**
	 * Retrieve the error number set by the last posix function that failed
	 * <p>Retrieve the error number set by the last posix function that failed. The system error message associated with the errno may be checked with <code>posix_strerror()</code>.</p>
	 * @return int <p>Returns the errno (error number) set by the last posix function that failed. If no errors exist, 0 is returned.</p>
	 * @link https://php.net/manual/en/function.posix-get-last-error.php
	 * @see posix_strerror()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function posix_get_last_error(): int {}

	/**
	 * Pathname of current directory
	 * <p>Gets the absolute pathname of the script's current working directory. On error, it sets errno which can be checked using <code>posix_get_last_error()</code></p>
	 * @return string|false <p>Returns a <code>string</code> of the absolute pathname on success. On error, returns <b><code>false</code></b> and sets errno which can be checked with <code>posix_get_last_error()</code>.</p>
	 * @link https://php.net/manual/en/function.posix-getcwd.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getcwd(): string|false {}

	/**
	 * Return the effective group ID of the current process
	 * <p>Return the numeric effective group ID of the current process.</p>
	 * @return int <p>Returns an <code>int</code> of the effective group ID.</p>
	 * @link https://php.net/manual/en/function.posix-getegid.php
	 * @see posix_getgrgid(), posix_getgid(), posix_setgid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getegid(): int {}

	/**
	 * Return the effective user ID of the current process
	 * <p>Return the numeric effective user ID of the current process. See also <code>posix_getpwuid()</code> for information on how to convert this into a useable username.</p>
	 * @return int <p>Returns the user id, as an <code>int</code></p>
	 * @link https://php.net/manual/en/function.posix-geteuid.php
	 * @see posix_getpwuid(), posix_getuid(), posix_setuid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_geteuid(): int {}

	/**
	 * Return the real group ID of the current process
	 * <p>Return the numeric real group ID of the current process.</p>
	 * @return int <p>Returns the real group id, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.posix-getgid.php
	 * @see posix_getgrgid(), posix_getegid(), posix_setgid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getgid(): int {}

	/**
	 * Return info about a group by group id
	 * <p>Gets information about a group provided its id.</p>
	 * @param int $group_id <p>The group id.</p>
	 * @return array|false <p>The array elements returned are:</p> <b>The group information array</b>   Element Description     name  The name element contains the name of the group. This is a short, usually less than 16 character "handle" of the group, not the real, full name.    passwd  The passwd element contains the group's password in an encrypted format. Often, for example on a system employing "shadow" passwords, an asterisk is returned instead.    gid  Group ID, should be the same as the <code>group_id</code> parameter used when calling the function, and hence redundant.    members  This consists of an <code>array</code> of <code>string</code>'s for all the members in the group.     The function returns <b><code>false</code></b> on failure.
	 * @link https://php.net/manual/en/function.posix-getgrgid.php
	 * @see posix_getegid(), posix_getgrnam(), filegroup(), stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getgrgid(int $group_id): array|false {}

	/**
	 * Return info about a group by name
	 * <p>Gets information about a group provided its name.</p>
	 * @param string $name <p>The name of the group</p>
	 * @return array|false <p>Returns an <code>array</code> on success, or <b><code>false</code></b> on failure. The array elements returned are:</p> <b>The group information array</b>   Element Description     name  The name element contains the name of the group. This is a short, usually less than 16 character "handle" of the group, not the real, full name. This should be the same as the <code>name</code> parameter used when calling the function, and hence redundant.    passwd  The passwd element contains the group's password in an encrypted format. Often, for example on a system employing "shadow" passwords, an asterisk is returned instead.    gid  Group ID of the group in numeric form.    members  This consists of an <code>array</code> of <code>string</code>'s for all the members in the group.
	 * @link https://php.net/manual/en/function.posix-getgrnam.php
	 * @see posix_getegid(), posix_getgrgid(), filegroup(), stat()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getgrnam(string $name): array|false {}

	/**
	 * Return the group set of the current process
	 * <p>Gets the group set of the current process.</p>
	 * @return array|false <p>Returns an array of integers containing the numeric group ids of the group set of the current process, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-getgroups.php
	 * @see posix_getgrgid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getgroups(): array|false {}

	/**
	 * Return login name
	 * <p>Returns the login name of the user owning the current process.</p>
	 * @return string|false <p>Returns the login name of the user, as a <code>string</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-getlogin.php
	 * @see posix_getpwnam()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getlogin(): string|false {}

	/**
	 * Get process group id for job control
	 * <p>Returns the process group identifier of the process <code>process_id</code> or <b><code>false</code></b> on failure.</p>
	 * @param int $process_id <p>The process id.</p>
	 * @return int|false <p>Returns the identifier, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.posix-getpgid.php
	 * @see posix_getppid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getpgid(int $process_id): int|false {}

	/**
	 * Return the current process group identifier
	 * <p>Return the process group identifier of the current process.</p>
	 * @return int <p>Returns the identifier, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.posix-getpgrp.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getpgrp(): int {}

	/**
	 * Return the current process identifier
	 * <p>Return the process identifier of the current process.</p>
	 * @return int <p>Returns the identifier, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.posix-getpid.php
	 * @see posix_kill()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getpid(): int {}

	/**
	 * Return the parent process identifier
	 * <p>Return the process identifier of the parent process of the current process.</p>
	 * @return int <p>Returns the identifier, as an <code>int</code>.</p>
	 * @link https://php.net/manual/en/function.posix-getppid.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getppid(): int {}

	/**
	 * Return info about a user by username
	 * <p>Returns an <code>array</code> of information about the given user.</p>
	 * @param string $username <p>An alphanumeric username.</p>
	 * @return array|false <p>On success an array with the following elements is returned, else <b><code>false</code></b> is returned:</p> <b>The user information array</b>   Element Description     name  The name element contains the username of the user. This is a short, usually less than 16 character "handle" of the user, not the real, full name. This should be the same as the <code>username</code> parameter used when calling the function, and hence redundant.    passwd  The passwd element contains the user's password in an encrypted format. Often, for example on a system employing "shadow" passwords, an asterisk is returned instead.    uid  User ID of the user in numeric form.    gid  The group ID of the user. Use the function <code>posix_getgrgid()</code> to resolve the group name and a list of its members.    gecos  GECOS is an obsolete term that refers to the finger information field on a Honeywell batch processing system. The field, however, lives on, and its contents have been formalized by POSIX. The field contains a comma separated list containing the user's full name, office phone, office number, and home phone number. On most systems, only the user's full name is available.    dir  This element contains the absolute path to the home directory of the user.    shell  The shell element contains the absolute path to the executable of the user's default shell.
	 * @link https://php.net/manual/en/function.posix-getpwnam.php
	 * @see posix_getpwuid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getpwnam(string $username): array|false {}

	/**
	 * Return info about a user by user id
	 * <p>Returns an <code>array</code> of information about the user referenced by the given user ID.</p>
	 * @param int $user_id <p>The user identifier.</p>
	 * @return array|false <p>Returns an associative array with the following elements:</p> <b>The user information array</b>   Element Description     name  The name element contains the username of the user. This is a short, usually less than 16 character "handle" of the user, not the real, full name.    passwd  The passwd element contains the user's password in an encrypted format. Often, for example on a system employing "shadow" passwords, an asterisk is returned instead.    uid  User ID, should be the same as the <code>user_id</code> parameter used when calling the function, and hence redundant.    gid  The group ID of the user. Use the function <code>posix_getgrgid()</code> to resolve the group name and a list of its members.    gecos  GECOS is an obsolete term that refers to the finger information field on a Honeywell batch processing system. The field, however, lives on, and its contents have been formalized by POSIX. The field contains a comma separated list containing the user's full name, office phone, office number, and home phone number. On most systems, only the user's full name is available.    dir  This element contains the absolute path to the home directory of the user.    shell  The shell element contains the absolute path to the executable of the user's default shell.     The function returns <b><code>false</code></b> on failure.
	 * @link https://php.net/manual/en/function.posix-getpwuid.php
	 * @see posix_getpwnam()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getpwuid(int $user_id): array|false {}

	/**
	 * Return info about system resource limits
	 * <p><b>posix_getrlimit()</b> returns an <code>array</code> of information about the current resource's soft and hard limits.</p><p>Each resource has an associated soft and hard limit. The soft limit is the value that the kernel enforces for the corresponding resource. The hard limit acts as a ceiling for the soft limit. An unprivileged process may only set its soft limit to a value from 0 to the hard limit, and irreversibly lower its hard limit.</p>
	 * @return array|false <p>Returns an associative <code>array</code> of elements for each limit that is defined. Each limit has a soft and a hard limit.</p> <b>List of possible limits returned</b>   Limit name Limit description     core  The maximum size of the core file. When 0, not core files are created. When core files are larger than this size, they will be truncated at this size.    totalmem  The maximum size of the memory of the process, in bytes.    virtualmem  The maximum size of the virtual memory for the process, in bytes.    data  The maximum size of the data segment for the process, in bytes.    stack  The maximum size of the process stack, in bytes.    rss  The maximum number of virtual pages resident in RAM    maxproc  The maximum number of processes that can be created for the real user ID of the calling process.    memlock  The maximum number of bytes of memory that may be locked into RAM.    cpu  The amount of time the process is allowed to use the CPU.    filesize  The maximum size of the data segment for the process, in bytes.    openfiles  One more than the maximum number of open file descriptors.     The function returns <b><code>false</code></b> on failure.
	 * @link https://php.net/manual/en/function.posix-getrlimit.php
	 * @see posix_setrlimit()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getrlimit(): array|false {}

	/**
	 * Get the current sid of the process
	 * <p>Return the session id of the process <code>process_id</code>. The session id of a process is the process group id of the session leader.</p>
	 * @param int $process_id <p>The process identifier. If set to 0, the current process is assumed. If an invalid <code>process_id</code> is specified, then <b><code>false</code></b> is returned and an error is set which can be checked with <code>posix_get_last_error()</code>.</p>
	 * @return int|false <p>Returns the identifier, as an <code>int</code>, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-getsid.php
	 * @see posix_getpgid(), posix_setsid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getsid(int $process_id): int|false {}

	/**
	 * Return the real user ID of the current process
	 * <p>Return the numeric real user ID of the current process.</p>
	 * @return int <p>Returns the user id, as an <code>int</code></p>
	 * @link https://php.net/manual/en/function.posix-getuid.php
	 * @see posix_getpwuid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_getuid(): int {}

	/**
	 * Calculate the group access list
	 * <p>Calculates the group access list for the user specified in name.</p>
	 * @param string $username <p>The user to calculate the list for.</p>
	 * @param int $group_id <p>Typically the group number from the password file.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-initgroups.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function posix_initgroups(string $username, int $group_id): bool {}

	/**
	 * Determine if a file descriptor is an interactive terminal
	 * <p>Determines if the file descriptor <code>file_descriptor</code> refers to a valid terminal type device.</p>
	 * @param resource|int $file_descriptor
	 * @return bool <p>Returns <b><code>true</code></b> if <code>file_descriptor</code> is an open descriptor connected to a terminal and <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.posix-isatty.php
	 * @see posix_ttyname(), stream_isatty()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_isatty($file_descriptor): bool {}

	/**
	 * Send a signal to a process
	 * <p>Send the signal <code>signal</code> to the process with the process identifier <code>process_id</code>.</p>
	 * @param int $process_id <p>The process identifier.</p>
	 * @param int $signal <p>One of the PCNTL signals constants.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-kill.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_kill(int $process_id, int $signal): bool {}

	/**
	 * Create a fifo special file (a named pipe)
	 * <p><b>posix_mkfifo()</b> creates a special <code>FIFO</code> file which exists in the file system and acts as a bidirectional communication endpoint for processes.</p>
	 * @param string $filename <p>Path to the <code>FIFO</code> file.</p>
	 * @param int $permissions <p>The second parameter <code>permissions</code> has to be given in octal notation (e.g. 0644). The permission of the newly created <code>FIFO</code> also depends on the setting of the current <code>umask()</code>. The permissions of the created file are (mode &amp; ~umask).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-mkfifo.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_mkfifo(string $filename, int $permissions): bool {}

	/**
	 * Create a special or ordinary file (POSIX.1)
	 * <p>Creates a special or ordinary file.</p>
	 * @param string $filename <p>The file to create</p>
	 * @param int $flags <p>This parameter is constructed by a bitwise OR between file type (one of the following constants: <b><code>POSIX_S_IFREG</code></b>, <b><code>POSIX_S_IFCHR</code></b>, <b><code>POSIX_S_IFBLK</code></b>, <b><code>POSIX_S_IFIFO</code></b> or <b><code>POSIX_S_IFSOCK</code></b>) and permissions.</p>
	 * @param int $major <p>The major device kernel identifier (required to pass when using <b><code>S_IFCHR</code></b> or <b><code>S_IFBLK</code></b>).</p>
	 * @param int $minor <p>The minor device kernel identifier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-mknod.php
	 * @see posix_mkfifo()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function posix_mknod(string $filename, int $flags, int $major = 0, int $minor = 0): bool {}

	/**
	 * Set the effective GID of the current process
	 * <p>Set the effective group ID of the current process. This is a privileged function and needs appropriate privileges (usually root) on the system to be able to perform this function.</p>
	 * @param int $group_id <p>The group id.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-setegid.php
	 * @see posix_getgrgid(), posix_getgid(), posix_setgid()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function posix_setegid(int $group_id): bool {}

	/**
	 * Set the effective UID of the current process
	 * <p>Set the effective user ID of the current process. This is a privileged function and needs appropriate privileges (usually root) on the system to be able to perform this function.</p>
	 * @param int $user_id <p>The user id.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-seteuid.php
	 * @see posix_geteuid(), posix_setuid(), posix_getuid()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8
	 */
	function posix_seteuid(int $user_id): bool {}

	/**
	 * Set the GID of the current process
	 * <p>Set the real group ID of the current process. This is a privileged function and needs appropriate privileges (usually root) on the system to be able to perform this function. The appropriate order of function calls is <b>posix_setgid()</b> first, <code>posix_setuid()</code> last.</p><p><b>Note</b>:</p><p>If the caller is a super user, this will also set the effective group id.</p>
	 * @param int $group_id <p>The group id.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-setgid.php
	 * @see posix_getgrgid(), posix_getgid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_setgid(int $group_id): bool {}

	/**
	 * Set process group id for job control
	 * <p>Let the process <code>process_id</code> join the process group <code>process_group_id</code>.</p>
	 * @param int $process_id <p>The process id.</p>
	 * @param int $process_group_id <p>The process group id.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-setpgid.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_setpgid(int $process_id, int $process_group_id): bool {}

	/**
	 * Set system resource limits
	 * <p><b>posix_setrlimit()</b> sets the soft and hard limits for a given system resource.</p><p>Each resource has an associated soft and hard limit. The soft limit is the value that the kernel enforces for the corresponding resource. The hard limit acts as a ceiling for the soft limit. An unprivileged process may only set its soft limit to a value from 0 to the hard limit, and irreversibly lower its hard limit.</p>
	 * @param int $resource <p>The resource limit constant corresponding to the limit that is being set.</p>
	 * @param int $soft_limit <p>The soft limit, in whatever unit the resource limit requires, or <b><code>POSIX_RLIMIT_INFINITY</code></b>.</p>
	 * @param int $hard_limit <p>The hard limit, in whatever unit the resource limit requires, or <b><code>POSIX_RLIMIT_INFINITY</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-setrlimit.php
	 * @see posix_getrlimit()
	 * @since PHP 7, PHP 8
	 */
	function posix_setrlimit(int $resource, int $soft_limit, int $hard_limit): bool {}

	/**
	 * Make the current process a session leader
	 * <p>Make the current process a session leader.</p>
	 * @return int <p>Returns the session id, or -1 on errors.</p>
	 * @link https://php.net/manual/en/function.posix-setsid.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_setsid(): int {}

	/**
	 * Set the UID of the current process
	 * <p>Set the real user ID of the current process. This is a privileged function that needs appropriate privileges (usually root) on the system to be able to perform this function.</p>
	 * @param int $user_id <p>The user id.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-setuid.php
	 * @see posix_setgid(), posix_seteuid(), posix_getuid(), posix_geteuid()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_setuid(int $user_id): bool {}

	/**
	 * Retrieve the system error message associated with the given errno
	 * <p>Returns the POSIX system error message associated with the given <code>error_code</code>. You may get the <code>error_code</code> parameter by calling <code>posix_get_last_error()</code>.</p>
	 * @param int $error_code <p>A POSIX error number, returned by <code>posix_get_last_error()</code>. If set to 0, then the string "Success" is returned.</p>
	 * @return string <p>Returns the error message, as a string.</p>
	 * @link https://php.net/manual/en/function.posix-strerror.php
	 * @see posix_get_last_error()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function posix_strerror(int $error_code): string {}

	/**
	 * Get process times
	 * <p>Gets information about the current CPU usage.</p>
	 * @return array|false <p>Returns a hash of strings with information about the current process CPU usage. The indices of the hash are:</p><ul> <li>  ticks - the number of clock ticks that have elapsed since reboot.  </li> <li>  utime - user time used by the current process.  </li> <li>  stime - system time used by the current process.  </li> <li>  cutime - user time used by current process and children.  </li> <li>  cstime - system time used by current process and children.  </li> </ul> The function returns <b><code>false</code></b> on failure.
	 * @link https://php.net/manual/en/function.posix-times.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_times(): array|false {}

	/**
	 * Determine terminal device name
	 * <p>Returns a <code>string</code> for the absolute path to the current terminal device that is open on the file descriptor <code>file_descriptor</code>.</p>
	 * @param resource|int $file_descriptor
	 * @return string|false <p>On success, returns a <code>string</code> of the absolute path of the <code>file_descriptor</code>. On failure, returns <b><code>false</code></b></p>
	 * @link https://php.net/manual/en/function.posix-ttyname.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_ttyname($file_descriptor): string|false {}

	/**
	 * Get system name
	 * <p>Gets information about the system.</p><p>Posix requires that assumptions must not be made about the format of the values, e.g. the assumption that a release may contain three digits or anything else returned by this function.</p>
	 * @return array|false <p>Returns a hash of strings with information about the system. The indices of the hash are</p><ul> <li> sysname - operating system name (e.g. Linux) </li> <li> nodename - system name (e.g. valiant) </li> <li> release - operating system release (e.g. 2.2.10) </li> <li> version - operating system version (e.g. #4 Tue Jul 20 17:01:36 MEST 1999) </li> <li> machine - system architecture (e.g. i586) </li> <li> domainname - DNS domainname (e.g. example.com) </li> </ul><p>domainname is a GNU extension and not part of POSIX.1, so this field is only available on GNU systems or when using the GNU libc.</p><p>The function returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.posix-uname.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function posix_uname(): array|false {}

}
