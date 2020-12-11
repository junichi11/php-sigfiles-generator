<?php



namespace {

	/**
	 * Convert a pathname and a project identifier to a System V IPC key
	 * <p>The function converts the <code>pathname</code> of an existing accessible file and a project identifier into an <code>integer</code> for use with for example <code>shmop_open()</code> and other System V IPC keys.</p>
	 * @param string $pathname <p>Path to an accessible file.</p>
	 * @param string $proj <p>Project identifier. This must be a one character string.</p>
	 * @return int <p>On success the return value will be the created key value, otherwise <code>-1</code> is returned.</p>
	 * @link https://php.net/manual/en/function.ftok.php
	 * @see shmop_open(), sem_get()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ftok(string $pathname, string $proj): int {}

	/**
	 * Create or attach to a message queue
	 * <p><b>msg_get_queue()</b> returns an id that can be used to access the System V message queue with the given <code>key</code>. The first call creates the message queue with the optional <code>permissions</code>. A second call to <b>msg_get_queue()</b> for the same <code>key</code> will return a different message queue identifier, but both identifiers access the same underlying message queue.</p>
	 * @param int $key <p>Message queue numeric ID</p>
	 * @param int $permissions <p>Queue permissions. Default to 0666. If the message queue already exists, the <code>permissions</code> will be ignored.</p>
	 * @return SysvMessageQueue|false <p>Returns <b>SysvMessageQueue</b> instance that can be used to access the System V message queue, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.msg-get-queue.php
	 * @see msg_remove_queue(), msg_receive(), msg_send(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_get_queue(int $key, int $permissions = 0666) {}

	/**
	 * Check whether a message queue exists
	 * <p>Checks whether the message queue <code>key</code> exists.</p>
	 * @param int $key <p>Queue key.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.msg-queue-exists.php
	 * @see msg_remove_queue(), msg_receive(), msg_stat_queue()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function msg_queue_exists(int $key): bool {}

	/**
	 * Receive a message from a message queue
	 * <p><b>msg_receive()</b> will receive the first message from the specified <code>queue</code> of the type specified by <code>desired_message_type</code>.</p>
	 * @param \SysvMessageQueue $queue <p>The message queue.</p>
	 * @param int $desired_message_type <p>If <code>desired_message_type</code> is 0, the message from the front of the queue is returned. If <code>desired_message_type</code> is greater than 0, then the first message of that type is returned. If <code>desired_message_type</code> is less than 0, the first message on the queue with a type less than or equal to the absolute value of <code>desired_message_type</code> will be read. If no messages match the criteria, your script will wait until a suitable message arrives on the queue. You can prevent the script from blocking by specifying <b><code>MSG_IPC_NOWAIT</code></b> in the <code>flags</code> parameter.</p>
	 * @param int $received_message_type <p>The type of the message that was received will be stored in this parameter.</p>
	 * @param int $max_message_size <p>The maximum size of message to be accepted is specified by the <code>max_message_size</code>; if the message in the queue is larger than this size the function will fail (unless you set <code>flags</code> as described below).</p>
	 * @param mixed $message <p>The received message will be stored in <code>message</code>, unless there were errors receiving the message.</p>
	 * @param bool $unserialize <p>If set to <b><code>TRUE</code></b>, the message is treated as though it was serialized using the same mechanism as the session module. The message will be unserialized and then returned to your script. This allows you to easily receive arrays or complex object structures from other PHP scripts, or if you are using the WDDX serializer, from any WDDX compatible source.</p> <p>If <code>unserialize</code> is <b><code>FALSE</code></b>, the message will be returned as a binary-safe string.</p>
	 * @param int $flags <p>The optional <code>flags</code> allows you to pass flags to the low-level msgrcv system call. It defaults to 0, but you may specify one or more of the following values (by adding or ORing them together).</p> <b>Flag values for msg_receive</b>   <b><code>MSG_IPC_NOWAIT</code></b> If there are no messages of the <code>desired_message_type</code>, return immediately and do not wait. The function will fail and return an integer value corresponding to <b><code>MSG_ENOMSG</code></b>.    <b><code>MSG_EXCEPT</code></b> Using this flag in combination with a <code>desired_message_type</code> greater than 0 will cause the function to receive the first message that is not equal to <code>desired_message_type</code>.   <b><code>MSG_NOERROR</code></b>  If the message is longer than <code>max_message_size</code>, setting this flag will truncate the message to <code>max_message_size</code> and will not signal an error.
	 * @param int $error_code <p>If the function fails, the optional <code>error_code</code> will be set to the value of the system errno variable.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Upon successful completion the message queue data structure is updated as follows: <code>msg_lrpid</code> is set to the process-ID of the calling process, <code>msg_qnum</code> is decremented by 1 and <code>msg_rtime</code> is set to the current time.</p>
	 * @link https://php.net/manual/en/function.msg-receive.php
	 * @see msg_remove_queue(), msg_send(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_receive(\SysvMessageQueue $queue, int $desired_message_type, int &$received_message_type, int $max_message_size, &$message, bool $unserialize = TRUE, int $flags = 0, int &$error_code = NULL): bool {}

	/**
	 * Destroy a message queue
	 * <p><b>msg_remove_queue()</b> destroys the message queue specified by the <code>queue</code>. Only use this function when all processes have finished working with the message queue and you need to release the system resources held by it.</p>
	 * @param \SysvMessageQueue $queue <p>The message queue.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.msg-remove-queue.php
	 * @see msg_get_queue(), msg_receive(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_remove_queue(\SysvMessageQueue $queue): bool {}

	/**
	 * Send a message to a message queue
	 * <p><b>msg_send()</b> sends a <code>message</code> of type <code>message_type</code> (which MUST be greater than 0) to the message queue specified by <code>queue</code>.</p>
	 * @param \SysvMessageQueue $queue <p>The message queue.</p>
	 * @param int $message_type <p>The type of the message (MUST be greater than 0)</p>
	 * @param string|int|float|bool $message <p>The body of the message.</p> <p><b>Note</b>:</p><p>If <code>serialize</code> set to <b><code>FALSE</code></b> is supplied, MUST be of type: <code>string</code>, <code>int</code>, <code>float</code> or <code>bool</code>. In other case a warning will be issued.</p>
	 * @param bool $serialize <p>The optional <code>serialize</code> controls how the <code>message</code> is sent. <code>serialize</code> defaults to <b><code>TRUE</code></b> which means that the <code>message</code> is serialized using the same mechanism as the session module before being sent to the queue. This allows complex arrays and objects to be sent to other PHP scripts, or if you are using the WDDX serializer, to any WDDX compatible client.</p>
	 * @param bool $blocking <p>If the message is too large to fit in the queue, your script will wait until another process reads messages from the queue and frees enough space for your message to be sent. This is called blocking; you can prevent blocking by setting the optional <code>blocking</code> parameter to <b><code>FALSE</code></b>, in which case <b>msg_send()</b> will immediately return <b><code>FALSE</code></b> if the message is too big for the queue, and set the optional <code>error_code</code> to <b><code>MSG_EAGAIN</code></b>, indicating that you should try to send your message again a little later on.</p>
	 * @param int $error_code <p>If the function fails, the optional errorcode will be set to the value of the system errno variable.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>Upon successful completion the message queue data structure is updated as follows: <code>msg_lspid</code> is set to the process-ID of the calling process, <code>msg_qnum</code> is incremented by 1 and <code>msg_stime</code> is set to the current time.</p>
	 * @link https://php.net/manual/en/function.msg-send.php
	 * @see msg_remove_queue(), msg_receive(), msg_stat_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_send(\SysvMessageQueue $queue, int $message_type, $message, bool $serialize = TRUE, bool $blocking = TRUE, int &$error_code = NULL): bool {}

	/**
	 * Set information in the message queue data structure
	 * <p><b>msg_set_queue()</b> allows you to change the values of the msg_perm.uid, msg_perm.gid, msg_perm.mode and msg_qbytes fields of the underlying message queue data structure.</p><p>Changing the data structure will require that PHP be running as the same user that created the queue, owns the queue (as determined by the existing msg_perm.xxx fields), or be running with root privileges. root privileges are required to raise the msg_qbytes values above the system defined limit.</p>
	 * @param \SysvMessageQueue $queue <p>The message queue.</p>
	 * @param array $data <p>You specify the values you require by setting the value of the keys that you require in the <code>data</code> array.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.msg-set-queue.php
	 * @see msg_remove_queue(), msg_receive(), msg_stat_queue(), msg_get_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_set_queue(\SysvMessageQueue $queue, array $data): bool {}

	/**
	 * Returns information from the message queue data structure
	 * <p><b>msg_stat_queue()</b> returns the message queue meta data for the message queue specified by the <code>queue</code>. This is useful, for example, to determine which process sent the message that was just received.</p>
	 * @param \SysvMessageQueue $queue <p>The message queue.</p>
	 * @return array|false <p>On success, the return value is an array whose keys and values have the following meanings:</p> <b>Array structure for msg_stat_queue</b>   <code>msg_perm.uid</code>  The uid of the owner of the queue.    <code>msg_perm.gid</code>  The gid of the owner of the queue.    <code>msg_perm.mode</code>  The file access mode of the queue.    <code>msg_stime</code>  The time that the last message was sent to the queue.    <code>msg_rtime</code>  The time that the last message was received from the queue.    <code>msg_ctime</code>  The time that the queue was last changed.    <code>msg_qnum</code>  The number of messages waiting to be read from the queue.    <code>msg_qbytes</code>  The maximum number of bytes allowed in one message queue. On Linux, this value may be read and modified via /proc/sys/kernel/msgmnb.    <code>msg_lspid</code>  The pid of the process that sent the last message to the queue.    <code>msg_lrpid</code>  The pid of the process that received the last message from the queue.    <p>Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.msg-stat-queue.php
	 * @see msg_remove_queue(), msg_receive(), msg_get_queue(), msg_set_queue()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function msg_stat_queue(\SysvMessageQueue $queue) {}

	/**
	 * Acquire a semaphore
	 * <p><b>sem_acquire()</b> by default blocks (if necessary) until the semaphore can be acquired. A process attempting to acquire a semaphore which it has already acquired will block forever if acquiring the semaphore would cause its maximum number of semaphore to be exceeded.</p><p>After processing a request, any semaphores acquired by the process but not explicitly released will be released automatically and a warning will be generated.</p>
	 * @param \SysvSemaphore $semaphore <p><code>semaphore</code> is a semaphore obtained from <code>sem_get()</code>.</p>
	 * @param bool $non_blocking <p>Specifies if the process shouldn't wait for the semaphore to be acquired. If set to <code>true</code>, the call will return <code>false</code> immediately if a semaphore cannot be immediately acquired.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sem-acquire.php
	 * @see sem_get(), sem_release()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sem_acquire(\SysvSemaphore $semaphore, bool $non_blocking = FALSE): bool {}

	/**
	 * Get a semaphore id
	 * <p><b>sem_get()</b> returns an id that can be used to access the System V semaphore with the given <code>key</code>.</p><p>A second call to <b>sem_get()</b> for the same key will return a different semaphore identifier, but both identifiers access the same underlying semaphore.</p><p>If <code>key</code> is <code>0</code>, a new private semaphore is created for each call to <b>sem_get()</b>.</p>
	 * @param int $key
	 * @param int $max_acquire <p>The number of processes that can acquire the semaphore simultaneously is set to <code>max_acquire</code>.</p>
	 * @param int $permissions <p>The semaphore permissions. Actually this value is set only if the process finds it is the only process currently attached to the semaphore.</p>
	 * @param bool $auto_release <p>Specifies if the semaphore should be automatically released on request shutdown.</p>
	 * @return SysvSemaphore|false <p>Returns a positive semaphore identifier on success, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.sem-get.php
	 * @see sem_acquire(), sem_release(), ftok()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sem_get(int $key, int $max_acquire = 1, int $permissions = 0666, bool $auto_release = TRUE) {}

	/**
	 * Release a semaphore
	 * <p><b>sem_release()</b> releases the semaphore if it is currently acquired by the calling process, otherwise a warning is generated.</p><p>After releasing the semaphore, <code>sem_acquire()</code> may be called to re-acquire it.</p>
	 * @param \SysvSemaphore $semaphore <p>A Semaphore as returned by <code>sem_get()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sem-release.php
	 * @see sem_get(), sem_acquire()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function sem_release(\SysvSemaphore $semaphore): bool {}

	/**
	 * Remove a semaphore
	 * <p><b>sem_remove()</b> removes the given semaphore.</p><p>After removing the semaphore, it is no longer accessible.</p>
	 * @param \SysvSemaphore $semaphore <p>A semaphore as returned by <code>sem_get()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.sem-remove.php
	 * @see sem_get(), sem_release(), sem_acquire()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function sem_remove(\SysvSemaphore $semaphore): bool {}

	/**
	 * Creates or open a shared memory segment
	 * <p><b>shm_attach()</b> returns an id that can be used to access the System V shared memory with the given <code>key</code>, the first call creates the shared memory segment with <code>size</code> and the optional perm-bits <code>permissions</code>.</p><p>A second call to <b>shm_attach()</b> for the same <code>key</code> will return a different <b>SysvSharedMemory</b> instance, but both instances access the same underlying shared memory. <code>size</code> and <code>permissions</code> will be ignored.</p>
	 * @param int $key <p>A numeric shared memory segment ID</p>
	 * @param int|null $size <p>The memory size. If not provided, default to the <code>sysvshm.init_mem</code> in the php.ini, otherwise 10000 bytes.</p>
	 * @param int $permissions <p>The optional permission bits. Default to 0666.</p>
	 * @return SysvSharedMemory|false <p>Returns a <b>SysvSharedMemory</b> instance on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shm-attach.php
	 * @see shm_detach(), ftok()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_attach(int $key, $size = NULL, int $permissions = 0666) {}

	/**
	 * Disconnects from shared memory segment
	 * <p><b>shm_detach()</b> disconnects from the shared memory given by the <code>shm</code> created by <code>shm_attach()</code>. Remember, that shared memory still exist in the Unix system and the data is still present.</p>
	 * @param \SysvSharedMemory $shm <p>A shared memory segment obtained from <code>shm_attach()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shm-detach.php
	 * @see shm_attach(), shm_remove(), shm_remove_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_detach(\SysvSharedMemory $shm): bool {}

	/**
	 * Returns a variable from shared memory
	 * <p><b>shm_get_var()</b> returns the variable with a given <code>key</code>, in the given shared memory segment. The variable is still present in the shared memory.</p>
	 * @param \SysvSharedMemory $shm <p>A shared memory segment obtained from <code>shm_attach()</code>.</p>
	 * @param int $key <p>The variable key.</p>
	 * @return mixed <p>Returns the variable with the given key.</p>
	 * @link https://php.net/manual/en/function.shm-get-var.php
	 * @see shm_has_var(), shm_put_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_get_var(\SysvSharedMemory $shm, int $key) {}

	/**
	 * Check whether a specific entry exists
	 * <p>Checks whether a specific key exists inside a shared memory segment.</p>
	 * @param \SysvSharedMemory $shm <p>A shared memory segment obtained from <code>shm_attach()</code>.</p>
	 * @param int $key <p>The variable key.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the entry exists, otherwise <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/en/function.shm-has-var.php
	 * @see shm_get_var(), shm_put_var()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function shm_has_var(\SysvSharedMemory $shm, int $key): bool {}

	/**
	 * Inserts or updates a variable in shared memory
	 * <p><b>shm_put_var()</b> inserts or updates the <code>value</code> with the given <code>key</code>.</p><p>Warnings (<b><code>E_WARNING</code></b> level) will be issued if <code>shm</code> is not a valid SysV shared memory index or if there was not enough shared memory remaining to complete your request.</p>
	 * @param \SysvSharedMemory $shm <p>A shared memory segment obtained from <code>shm_attach()</code>.</p>
	 * @param int $key <p>The variable key.</p>
	 * @param mixed $value <p>The variable. All variable types that <code>serialize()</code> supports may be used: generally this means all types except for resources and some internal objects that cannot be serialized.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shm-put-var.php
	 * @see shm_get_var(), shm_has_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_put_var(\SysvSharedMemory $shm, int $key, $value): bool {}

	/**
	 * Removes shared memory from Unix systems
	 * <p><b>shm_remove()</b> removes the shared memory <code>shm</code>. All data will be destroyed.</p>
	 * @param \SysvSharedMemory $shm <p>A shared memory segment obtained from <code>shm_attach()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shm-remove.php
	 * @see shm_remove_var()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_remove(\SysvSharedMemory $shm): bool {}

	/**
	 * Removes a variable from shared memory
	 * <p>Removes a variable with a given <code>key</code> and frees the occupied memory.</p>
	 * @param \SysvSharedMemory $shm <p>A shared memory segment obtained from <code>shm_attach()</code>.</p>
	 * @param int $key <p>The variable key.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shm-remove-var.php
	 * @see shm_remove()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function shm_remove_var(\SysvSharedMemory $shm, int $key): bool {}

	/**
	 * As of 5.2.0
	 */
	define('MSG_EAGAIN', 11);

	/**
	 * As of 5.2.0
	 */
	define('MSG_ENOMSG', 42);

	/**
	 * <code>int</code>
	 */
	define('MSG_EXCEPT', 4);

	/**
	 * <code>int</code>
	 */
	define('MSG_IPC_NOWAIT', 1);

	/**
	 * <code>int</code>
	 */
	define('MSG_NOERROR', 2);

}
