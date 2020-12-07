<?php



namespace pht {

	/**
	 * <p>The <b>pht\AtomicInteger</b> class is currently the only supported atomic value. It allows for an integer to be safely passed around between, and manipulated, by multiple threads. The methods exposed by this class do not need mutex locking, since they will acquire the internal mutex lock implicitly. <code>pht\AtomicInteger::lock()</code> and <code>pht\AtomicInteger::unlock()</code> are still exposed, however, for when multiple operations involving the same <b>pht\AtomicInteger</b> object need to be grouped together.</p>
	 * <p>The mutex locks of the atomic values are reentrant safe.</p>
	 * @link http://php.net/manual/en/class.pht-atomicinteger.php
	 * @since PECL pht >= 0.0.1
	 */
	class AtomicInteger implements \pht\Threaded {

		/**
		 * AtomicInteger creation
		 * <p>Handles the creation of a new atomic integer.</p>
		 * @param int $value <p>The value to initialise the atomic integer to.</p>
		 * @return AtomicInteger <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.construct.php
		 * @since PECL pht >= 0.0.1
		 */
		public function __construct(int $value = 0) {}

		/**
		 * Decrements the atomic integer's value by one
		 * <p>This method will decrement the atomic integer's value by one. Internally, the mutex lock of the atomic integer will be acquired, and so there is no need to manually acquire it (unless this operation needs to be grouped with other operations on the same atomic integer - see the example in <code>pht\AtomicInteger::lock()</code> for a demonstration of this).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.dec.php
		 * @since PECL pht >= 0.0.1
		 */
		public function dec(): void {}

		/**
		 * Gets the atomic integer's value
		 * <p>This method will fetch the current value of the atomic integer. Internally, the mutex lock of the atomic integer will be acquired, and so there is no need to manually acquire it (unless this operation needs to be grouped with other operations on the same atomic integer - see the example in <code>pht\AtomicInteger::lock()</code> for a demonstration of this).</p>
		 * @return int <p>The current integer value of the atomic integer.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.get.php
		 * @since PECL pht >= 0.0.1
		 */
		public function get(): int {}

		/**
		 * Increments the atomic integer's value by one
		 * <p>This method will increment the atomic integer's value by one. Internally, the mutex lock of the atomic integer will be acquired, and so there is no need to manually acquire it (unless this operation needs to be grouped with other operations on the same atomic integer - see the example in <code>pht\AtomicInteger::lock()</code> for a demonstration of this).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.inc.php
		 * @since PECL pht >= 0.0.1
		 */
		public function inc(): void {}

		/**
		 * Acquires the atomic integer's mutex lock
		 * <p>This method will acquire the mutex lock associated with the atomic integer. The mutex lock only needs to be acquired when needing to group together multiple operations.</p><p>The mutex locks of the atomic values are reentrant safe. It is therefore valid for the same thread to reacquire a mutex lock that it has already acquired.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.lock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function lock(): void {}

		/**
		 * Sets the atomic integer's value
		 * <p>This method will set the value of the atomic integer. Internally, the mutex lock of the atomic integer will be acquired, and so there is no need to manually acquire it (unless this operation needs to be grouped with other operations on the same atomic integer - see the example in <code>pht\AtomicInteger::lock()</code> for a demonstration of this).</p>
		 * @param int $value <p>The value to set the atomic integer to.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.set.php
		 * @since PECL pht >= 0.0.1
		 */
		public function set(int $value): void {}

		/**
		 * Releases the atomic integer's mutex lock
		 * <p>This method will release the mutex lock associated with the atomic integer.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-atomicinteger.unlock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function unlock(): void {}
	}

	/**
	 * <p>The <b>pht\HashTable</b> class is one of the Inter-Thread Communication (ITC) data structures exposed by pht. It can be safely passed around between threads, and manipulated by multiple threads using the mutex locks that have been packed in with the data structure. It is reference-counted across threads, and so it does not need to be explicitly destroyed.</p>
	 * <p>The <b>pht\HashTable</b> class enables for array access upon its objects (along with the <code>isset()</code> and <code>unset()</code> functions). The ArrayAccess interface is not explicitly implemented, however, because it is only needed for such abilities by userland classes.</p>
	 * @link http://php.net/manual/en/class.pht-hashtable.php
	 * @since PECL pht >= 0.0.1
	 */
	class HashTable implements \pht\Threaded {

		/**
		 * Acquires the hash table's mutex lock
		 * <p>This method will acquire the mutex lock associated with the hash table. The mutex lock should always be acquired when manipulating the hash table if it is being used by multiple threads.</p><p>The mutex locks of the Inter-Thread Communication (ITC) data structures are not reentrant. Attempting to reacquire an already-acquired mutex lock by the same thread will therefore cause a deadlock.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-hashtable.lock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function lock(): void {}

		/**
		 * Gets the size of the hash table
		 * <p>Returns the current size of the hash table. This operation requires a pht\HashTable's mutex lock to be held if it is being used by multiple threads.</p>
		 * @return int <p>The size of the hash table.</p>
		 * @link http://php.net/manual/en/pht-hashtable.size.php
		 * @since PECL pht >= 0.0.1
		 */
		public function size(): int {}

		/**
		 * Releases the hash table's mutex lock
		 * <p>This method will release the mutex lock associated with the hash table.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-hashtable.unlock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function unlock(): void {}
	}

	/**
	 * <p>The <b>pht\Queue</b> class is one of the Inter-Thread Communication (ITC) data structures exposed by pht. It can be safely passed around between threads, and manipulated by multiple threads using the mutex locks that have been packed in with the data structure. It is reference-counted across threads, and so it does not need to be explicitly destroyed.</p>
	 * @link http://php.net/manual/en/class.pht-queue.php
	 * @since PECL pht >= 0.0.1
	 */
	class Queue implements \pht\Threaded {

		/**
		 * Returns the first value from a queue
		 * <p>This method will remove a value from the front of the queue (in constant time). Attempting to return the front value from an empty queue will result in an Error exception.</p><p>Due to the fact that all values in a pht\Queue are serialised, extracting a value from the queue will require it to be deserialised. This can incur a noticeable performance hit if the inspection of the queue's front value is performed within a loop.</p>
		 * @return mixed <p>The value on the front of the queue.</p>
		 * @link http://php.net/manual/en/pht-queue.front.php
		 * @since PECL pht >= 0.0.1
		 */
		public function front() {}

		/**
		 * Acquires the queue's mutex lock
		 * <p>This method will acquire the mutex lock associated with the queue. The mutex lock should always be acquired when manipulating the queue if it is being used by multiple threads.</p><p>The mutex locks of the Inter-Thread Communication (ITC) data structures are not reentrant. Attempting to reacquire an already-acquired mutex lock by the same thread will therefore cause a deadlock.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-queue.lock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function lock(): void {}

		/**
		 * Pops a value off of the front of a queue
		 * <p>This method will remove a value from the front of the queue (in constant time). Attempting to pop a value from an empty queue will result in an Error exception.</p>
		 * @return mixed <p>The value removed from the queue.</p>
		 * @link http://php.net/manual/en/pht-queue.pop.php
		 * @since PECL pht >= 0.0.1
		 */
		public function pop() {}

		/**
		 * Pushes a value to the end of a queue
		 * <p>This method will add a value onto the queue.</p>
		 * @param mixed $value <p>The value to be added to a pht\Queue. This value will be serialised (since it may be passed around between threads).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-queue.push.php
		 * @since PECL pht >= 0.0.1
		 */
		public function push($value): void {}

		/**
		 * Gets the size of the queue
		 * <p>Returns the current size of the queue. This operation requires a pht\Queue's mutex lock to be held if it is being used by multiple threads.</p>
		 * @return int <p>The size of the queue.</p>
		 * @link http://php.net/manual/en/pht-queue.size.php
		 * @since PECL pht >= 0.0.1
		 */
		public function size(): int {}

		/**
		 * Releases the queue's mutex lock
		 * <p>This method will release the mutex lock associated with the queue.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-queue.unlock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function unlock(): void {}
	}

	/**
	 * <p>The <b>pht\Runnable</b> interface enforces the implementation of a run() method on classes that should be threaded. This method acts as the entry point of the threaded class.</p>
	 * @link http://php.net/manual/en/class.pht-runnable.php
	 * @since PECL pht >= 0.0.1
	 */
	interface Runnable {

		/**
		 * The entry point of a threaded class
		 * <p>This method acts as the entry point of execution for a threaded class. It must be defined by all classes that will be threaded.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-runnable.run.php
		 * @since PECL pht >= 0.0.1
		 */
		public function run(): void;
	}

	/**
	 * <p>The <b>pht\Thread</b> class abstracts away a native thread. It has an internal task queue, where the methods <code>pht\Thread::addClassTask()</code>, <code>pht\Thread::addFunctionTask()</code>, and <code>pht\Thread::addFileTask()</code> push new tasks onto this queue. Invoking the <code>pht\Thread::start()</code> method will cause the new thread to be spawned, where it will then begin working through the task queue. A thread may be reused for any number of tasks.</p>
	 * @link http://php.net/manual/en/class.pht-thread.php
	 * @since PECL pht >= 0.0.1
	 */
	class Thread {

		/**
		 * Class threading
		 * <p>Adds a new class task to a pht\Threads internal task queue.</p>
		 * @param string $className <p>The name of the class to be threaded. This class must implement the <code>pht\Runnable</code> interface.</p>
		 * @param mixed $_$ctorArgs
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-thread.addClassTask.php
		 * @since PECL pht >= 0.0.1
		 */
		public function addClassTask(string $className, $_$ctorArgs): void {}

		/**
		 * File threading
		 * <p>Adds a new file task to a pht\Threads internal task queue.</p>
		 * @param string $fileName
		 * @param mixed $_$globals
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-thread.addFileTask.php
		 * @since PECL pht >= 0.0.1
		 */
		public function addFileTask(string $fileName, $_$globals): void {}

		/**
		 * Function threading
		 * <p>Adds a new function task to a pht\Threads internal task queue.</p>
		 * @param callable $func <p>The function to be threaded. If it is bound to an instance, then <code>$this</code> will become <b><code>NULL</code></b>.</p>
		 * @param mixed $_$funcArgs
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-thread.addFunctionTask.php
		 * @since PECL pht >= 0.0.1
		 */
		public function addFunctionTask(callable $func, $_$funcArgs): void {}

		/**
		 * Joins a thread
		 * <p>This method will join the spawned thread (though it will first wait for that thread's internal task queue to finish). As a matter of good practice, threads should always be joined. Not joining a thread may lead to undefined behaviour.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-thread.join.php
		 * @since PECL pht >= 0.0.1
		 */
		public function join(): void {}

		/**
		 * Starts the new thread
		 * <p>This will cause a new thread to be spawned for the associated pht\Thread object, where its internal task queue will begin to be processed.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-thread.start.php
		 * @since PECL pht >= 0.0.1
		 */
		public function start(): void {}

		/**
		 * Gets a thread's task count
		 * <p>Retrieves the current task count of a pht\Thread.</p>
		 * @return int <p>The number of tasks remaining to be processed.</p>
		 * @link http://php.net/manual/en/pht-thread.taskCount.php
		 * @since PECL pht >= 0.0.1
		 */
		public function taskCount(): int {}
	}

	/**
	 * <p>The <b>pht\Threaded</b> interface is an internal interface used by the Inter-Thread Communication (ITC) data structures (pht\HashTable, pht\Queue, and pht\Vector). It allows those data structures to be threaded and ensures that the mutex locking API (<code>pht\Threaded::lock()</code> and <code>pht\Threaded::unlock()</code>) is implemented by each of the ITC data structures. It is not implementable by userland classes (since standalone mutex locks are not exposed).</p>
	 * @link http://php.net/manual/en/class.pht-threaded.php
	 * @since PECL pht >= 0.0.1
	 */
	interface Threaded {

		/**
		 * Acquires the mutex lock
		 * <p>This method will acquire the mutex lock associated with the given class (either a pht\HashTable, pht\Queue, pht\Vector, or pht\AtomicInteger).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-threaded.lock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function lock(): void;

		/**
		 * Releases the mutex lock
		 * <p>This method will unlock the mutex lock associated with the given class (either a pht\HashTable, pht\Queue, pht\Vector, or pht\AtomicInteger).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-threaded.unlock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function unlock(): void;
	}

	/**
	 * <p>The <b>pht\Vector</b> class is one of the Inter-Thread Communication (ITC) data structures exposed by pht. It can be safely passed around between threads, and manipulated by multiple threads using the mutex locks that have been packed in with the data structure. It is reference-counted across threads, and so is does not need to be explicitly destroyed.</p>
	 * <p>The <b>pht\Vector</b> class enables for array access upon its objects (along with the <code>isset()</code> and <code>unset()</code> functions). The ArrayAccess interface is not explicitly implemented, however, because it is only needed for such abilities by userland classes.</p>
	 * @link http://php.net/manual/en/class.pht-vector.php
	 * @since PECL pht >= 0.0.1
	 */
	class Vector implements \pht\Threaded {

		/**
		 * Vector creation
		 * <p>Handles the creation of a new vector.</p>
		 * @param int $size <p>The size of the vector that will be created.</p>
		 * @param mixed $value <p>The value to initialise the empty slots in the vector to.</p>
		 * @return Vector <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.construct.php
		 * @since PECL pht >= 0.0.1
		 */
		public function __construct(int $size = 0, $value = 0) {}

		/**
		 * Deletes a value in the vector
		 * <p>This method deletes a value at the specified offset in the vector (in linear time).</p><p>Since the pht\Vector class supports array access, deleting values can also be performed using the array subset notation (<code>[]</code>) in combination with the <code>unset()</code> function.</p>
		 * @param int $offset <p>The offset at which the value will be deleted at. This offset must be within the 0..(N-1) range (inclusive), where N is the size of the vector. Attempting to delete at offsets outside of this range will result in an Error exception.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.deleteAt.php
		 * @since PECL pht >= 0.0.1
		 */
		public function deleteAt(int $offset): void {}

		/**
		 * Inserts a value into the vector
		 * <p>This method inserts a value at the specified offset into the vector (in linear time). The vector will automatically be resized if it is not large enough.</p>
		 * @param mixed $value <p>The value to be inserted into the vector. This value will be serialised (since it may be passed around between threads).</p>
		 * @param int $offset <p>The offset at which the value will be inserted at. This offset must be within the 0..N range (inclusive), where N is the size of the vector. Inserting at position N is the equivalent of using <code>pht\Vector::push()</code>, and inserting at position 0 is the equivalent of using <code>pht\Vector::unshift()</code>. Attempting to insert at offsets outside of this range will result in an Error exception.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.insertAt.php
		 * @since PECL pht >= 0.0.1
		 */
		public function insertAt($value, int $offset): void {}

		/**
		 * Acquires the vector's mutex lock
		 * <p>This method will acquire the mutex lock associated with the vector. The mutex lock should always be acquired when manipulating the vector if it is being used by multiple threads.</p><p>The mutex locks of the Inter-Thread Communication (ITC) data structures are not reentrant. Attempting to reacquire an already-acquired mutex lock by the same thread will therefore cause a deadlock.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.lock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function lock(): void {}

		/**
		 * Pops a value to the vector
		 * <p>This method pops a value from the end of a vector (in constant time). Popping a value from an empty vector will result in an Error exception.</p>
		 * @return mixed <p>The value from the end of the vector.</p>
		 * @link http://php.net/manual/en/pht-vector.pop.php
		 * @since PECL pht >= 0.0.1
		 */
		public function pop() {}

		/**
		 * Pushes a value to the vector
		 * <p>This method pushes a value onto the end of a vector (in constant time). The vector will automatically be resized if it is not large enough.</p><p>Since the pht\Vector class supports array access, new values can also be pushed onto the vector using the empty subset notation (<code>[]</code>).</p>
		 * @param mixed $value <p>The value to be pushed onto the end of the vector. This value will be serialised (since it may be passed around between threads).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.push.php
		 * @since PECL pht >= 0.0.1
		 */
		public function push($value): void {}

		/**
		 * Resizes a vector
		 * <p>Resizes the vector. If it is enlarged, then the <code>value</code> parameter will be used to fill in the new slots. If it is made smaller, then the end values will be truncated.</p>
		 * @param int $size <p>The new size of the vector.</p>
		 * @param mixed $value <p>The value to initialise the empty vector slots to (only used if the vector is enlarged).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.resize.php
		 * @since PECL pht >= 0.0.1
		 */
		public function resize(int $size, $value = 0): void {}

		/**
		 * Shifts a value from the vector
		 * <p>This method shifts a value from the front of a vector (in linear time). Shifting a value from an empty vector will result in an Error exception.</p>
		 * @return mixed <p>The value from the front of the vector.</p>
		 * @link http://php.net/manual/en/pht-vector.shift.php
		 * @since PECL pht >= 0.0.1
		 */
		public function shift() {}

		/**
		 * Gets the size of the vector
		 * <p>Returns the current size of the vector. This operation requires a pht\Vector's mutex lock to be held if it is being used by multiple threads.</p>
		 * @return int <p>The size of the vector.</p>
		 * @link http://php.net/manual/en/pht-vector.size.php
		 * @since PECL pht >= 0.0.1
		 */
		public function size(): int {}

		/**
		 * Releases the vector's mutex lock
		 * <p>This method will release the mutex lock associated with the vector.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.unlock.php
		 * @since PECL pht >= 0.0.1
		 */
		public function unlock(): void {}

		/**
		 * Unshifts a value to the vector front
		 * <p>This method unshifts a value to the front of a vector (in linear time). The vector will automatically be resized if it is not large enough.</p>
		 * @param mixed $value <p>The value to be pushed onto the beginning of the vector. This value will be serialised (since it may be passed around between threads).</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.unshift.php
		 * @since PECL pht >= 0.0.1
		 */
		public function unshift($value): void {}

		/**
		 * Updates a value in the vector
		 * <p>This method updates a value at the specified offset in the vector (in linear time). The vector will automatically be resized if it is not large enough.</p><p>Since the pht\Vector class supports array access, updating values can also be performed using the array subset notation (<code>[]</code>).</p>
		 * @param mixed $value <p>The value to be inserted into the vector. This value will be serialised (since it may be passed around between threads).</p>
		 * @param int $offset <p>The offset at which the value will be updated at. This offset must be within the 0..(N-1) range (inclusive), where N is the size of the vector. Attempting to update at offsets outside of this range will result in an Error exception.</p>
		 * @return void <p>No return value.</p>
		 * @link http://php.net/manual/en/pht-vector.updateAt.php
		 * @since PECL pht >= 0.0.1
		 */
		public function updateAt($value, int $offset): void {}
	}

}
