<?php



namespace {

	/**
	 * <p>Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures.</p>
	 * <p><b>Note</b>:</p>
	 * <p>The class <b>WeakReference</b> is not to be confused with the class WeakRef of the Weakref extension.</p>
	 * <p><b>WeakReference</b>s cannot be serialized.</p>
	 * @link http://php.net/manual/en/class.weakreference.php
	 * @since PHP 7 >= 7.4.0
	 */
	class WeakReference {

		/**
		 * Constructor that disallows instantiation
		 * <p>This method exists only to disallow instantiation of the WeakReference class. Weak references are to be instantiated with the factory method <code>WeakReference::create()</code>.</p>
		 * @return self
		 * @link http://php.net/manual/en/weakreference.construct.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function __construct() {}

		/**
		 * Create a new weak reference
		 * <p>Creates a new WeakReference.</p>
		 * @param object $referent <p>The object to be weakly referenced.</p>
		 * @return WeakReference <p>Returns the freshly instantiated object.</p>
		 * @link http://php.net/manual/en/weakreference.create.php
		 * @since PHP 7 >= 7.4.0
		 */
		public static function create(object $referent): \WeakReference {}

		/**
		 * Get a weakly referenced Object
		 * <p>Gets a weakly referenced object. If the object has already been destroyed, <b><code>NULL</code></b> is returned.</p>
		 * @return object|null <p>Returns the referenced <code>object</code>, or <b><code>NULL</code></b> if the object has been destroyed.</p>
		 * @link http://php.net/manual/en/weakreference.get.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function get() {}
	}

}
