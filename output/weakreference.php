<?php



namespace {

	/**
	 * <p>Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures.</p>
	 * <p><b>WeakReference</b>s cannot be serialized.</p>
	 * @link https://php.net/manual/en/class.weakreference.php
	 * @since PHP 7 >= 7.4.0, PHP 8
	 */
	final class WeakReference {

		/**
		 * Constructor that disallows instantiation
		 * <p>This method exists only to disallow instantiation of the <code>WeakReference</code> class. Weak references are to be instantiated with the factory method <code>WeakReference::create()</code>.</p>
		 * @return self
		 * @link https://php.net/manual/en/weakreference.construct.php
		 * @since PHP 7 >= 7.4.0, PHP 8
		 */
		public function __construct() {}

		/**
		 * Create a new weak reference
		 * <p>Creates a new <code>WeakReference</code>.</p>
		 * @param object $object <p>The object to be weakly referenced.</p>
		 * @return WeakReference <p>Returns the freshly instantiated object.</p>
		 * @link https://php.net/manual/en/weakreference.create.php
		 * @since PHP 7 >= 7.4.0, PHP 8
		 */
		public static function create(object $object): \WeakReference {}

		/**
		 * Get a weakly referenced Object
		 * <p>Gets a weakly referenced object. If the object has already been destroyed, <b><code>null</code></b> is returned.</p>
		 * @return ?object <p>Returns the referenced <code>object</code>, or <b><code>null</code></b> if the object has been destroyed.</p>
		 * @link https://php.net/manual/en/weakreference.get.php
		 * @since PHP 7 >= 7.4.0, PHP 8
		 */
		public function get(): ?object {}
	}

}
