<?php



namespace {

	/**
	 * <p>A fully opaque class which replaces <code>shmop</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.shmop.php
	 * @since PHP 8
	 */
	final class Shmop {
	}

	/**
	 * Close shared memory block
	 * <p><b>Note</b>:</p><p>This function has no effect. Prior to PHP 8.0.0, this function was used to close the resource.</p><p><b>shmop_close()</b> is used to close a shared memory block.</p>
	 * @param \Shmop $shmop <p>The shared memory block resource created by <code>shmop_open()</code></p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.shmop-close.php
	 * @see shmop_open()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function shmop_close(\Shmop $shmop): void {}

	/**
	 * Delete shared memory block
	 * <p><b>shmop_delete()</b> is used to delete a shared memory block.</p>
	 * @param \Shmop $shmop <p>The shared memory block resource created by <code>shmop_open()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shmop-delete.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function shmop_delete(\Shmop $shmop): bool {}

	/**
	 * Create or open shared memory block
	 * <p><b>shmop_open()</b> can create or open a shared memory block.</p>
	 * @param int $key <p>System's id for the shared memory block. Can be passed as a decimal or hex.</p>
	 * @param string $mode <p>The flags that you can use:</p><ul> <li>  "a" for access (sets SHM_RDONLY for shmat) use this flag when you need to open an existing shared memory segment for read only  </li> <li>  "c" for create (sets IPC_CREATE) use this flag when you need to create a new shared memory segment or if a segment with the same key exists, try to open it for read and write  </li> <li>  "w" for read &amp; write access use this flag when you need to read and write to a shared memory segment, use this flag in most cases.  </li> <li>  "n" create a new memory segment (sets IPC_CREATE|IPC_EXCL) use this flag when you want to create a new shared memory segment but if one already exists with the same flag, fail. This is useful for security purposes, using this you can prevent race condition exploits.  </li> </ul>
	 * @param int $permissions <p>The permissions that you wish to assign to your memory segment, those are the same as permission for a file. Permissions need to be passed in octal form, like for example <code>0644</code></p>
	 * @param int $size <p>The size of the shared memory block you wish to create in bytes</p>
	 * @return Shmop|false <p>On success <b>shmop_open()</b> will return a <code>Shmop</code> instance that you can use to access the shared memory segment you've created. <b><code>false</code></b> is returned on failure.</p>
	 * @link https://php.net/manual/en/function.shmop-open.php
	 * @see shmop_close(), shmop_delete()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function shmop_open(int $key, string $mode, int $permissions, int $size): \Shmop|false {}

	/**
	 * Read data from shared memory block
	 * <p><b>shmop_read()</b> will read a string from shared memory block.</p>
	 * @param \Shmop $shmop <p>The shared memory block identifier created by <code>shmop_open()</code></p>
	 * @param int $offset <p>Offset from which to start reading</p>
	 * @param int $size <p>The number of bytes to read. <code>0</code> reads <code>shmop_size($shmid) - $start</code> bytes.</p>
	 * @return string <p>Returns the data or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.shmop-read.php
	 * @see shmop_write()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function shmop_read(\Shmop $shmop, int $offset, int $size): string {}

	/**
	 * Get size of shared memory block
	 * <p><b>shmop_size()</b> is used to get the size, in bytes of the shared memory block.</p>
	 * @param \Shmop $shmop <p>The shared memory block identifier created by <code>shmop_open()</code></p>
	 * @return int <p>Returns an int, which represents the number of bytes the shared memory block occupies.</p>
	 * @link https://php.net/manual/en/function.shmop-size.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function shmop_size(\Shmop $shmop): int {}

	/**
	 * Write data into shared memory block
	 * <p><b>shmop_write()</b> will write a string into shared memory block.</p>
	 * @param \Shmop $shmop <p>The shared memory block identifier created by <code>shmop_open()</code></p>
	 * @param string $data <p>A string to write into shared memory block</p>
	 * @param int $offset <p>Specifies where to start writing data inside the shared memory segment.</p>
	 * @return int <p>The size of the written <code>data</code>.</p>
	 * @link https://php.net/manual/en/function.shmop-write.php
	 * @see shmop_read()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8
	 */
	function shmop_write(\Shmop $shmop, string $data, int $offset): int {}

}
