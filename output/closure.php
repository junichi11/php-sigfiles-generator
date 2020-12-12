<?php



namespace {

	/**
	 * <p>Class used to represent anonymous functions.</p>
	 * <p>Anonymous functions yield objects of this type. This class has methods that allow further control of the anonymous function after it has been created.</p>
	 * <p>Besides the methods listed here, this class also has an <code>__invoke</code> method. This is for consistency with other classes that implement calling magic, as this method is not used for calling the function.</p>
	 * @link https://php.net/manual/en/class.closure.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class Closure {

		/**
		 * Constructor that disallows instantiation
		 * <p>This method exists only to disallow instantiation of the Closure class. Objects of this class are created in the fashion described on the anonymous functions page.</p>
		 * @return self
		 * @link https://php.net/manual/en/closure.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		private function __construct() {}

		/**
		 * Duplicates a closure with a specific bound object and class scope
		 * <p>This method is a static version of <code>Closure::bindTo()</code>. See the documentation of that method for more information.</p>
		 * @param \Closure $closure <p>The anonymous functions to bind.</p>
		 * @param object $newthis <p>The object to which the given anonymous function should be bound, or <b><code>NULL</code></b> for the closure to be unbound.</p>
		 * @param mixed $newscope <p>The class scope to which the closure is to be associated, or 'static' to keep the current one. If an object is given, the type of the object will be used instead. This determines the visibility of protected and private methods of the bound object. It is not allowed to pass (an object of) an internal class as this parameter.</p>
		 * @return Closure|false <p>Returns a new Closure object or <b><code>FALSE</code></b> on failure</p>
		 * @link https://php.net/manual/en/closure.bind.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public static function bind(\Closure $closure, object $newthis, $newscope = "static") {}

		/**
		 * Duplicates the closure with a new bound object and class scope
		 * <p>Create and return a new anonymous function with the same body and bound variables as this one, but possibly with a different bound object and a new class scope.</p><p>The &ldquo;bound object&rdquo; determines the value <code>$this</code> will have in the function body and the &ldquo;class scope&rdquo; represents a class which determines which private and protected members the anonymous function will be able to access. Namely, the members that will be visible are the same as if the anonymous function were a method of the class given as value of the <code>newscope</code> parameter.</p><p>Static closures cannot have any bound object (the value of the parameter <code>newthis</code> should be <b><code>NULL</code></b>), but this function can nevertheless be used to change their class scope.</p><p>This function will ensure that for a non-static closure, having a bound instance will imply being scoped and vice-versa. To this end, non-static closures that are given a scope but a <b><code>NULL</code></b> instance are made static and non-static non-scoped closures that are given a non-null instance are scoped to an unspecified class.</p><p><b>Note</b>:</p><p>If you only want to duplicate the anonymous functions, you can use cloning instead.</p>
		 * @param object $newthis <p>The object to which the given anonymous function should be bound, or <b><code>NULL</code></b> for the closure to be unbound.</p>
		 * @param mixed $newscope <p>The class scope to which the closure is to be associated, or 'static' to keep the current one. If an object is given, the type of the object will be used instead. This determines the visibility of protected and private methods of the bound object. It is not allowed to pass (an object of) an internal class as this parameter.</p>
		 * @return Closure|false <p>Returns the newly created Closure object or <b><code>FALSE</code></b> on failure</p>
		 * @link https://php.net/manual/en/closure.bindto.php
		 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
		 */
		public function bindTo(object $newthis, $newscope = "static") {}

		/**
		 * Binds and calls the closure
		 * <p>Temporarily binds the closure to <code>newthis</code>, and calls it with any given parameters.</p>
		 * @param object $newthis <p>The <code>object</code> to bind the closure to for the duration of the call.</p>
		 * @param mixed $values <p>Zero or more parameters, which will be given as parameters to the closure.</p>
		 * @return mixed <p>Returns the return value of the closure.</p>
		 * @link https://php.net/manual/en/closure.call.php
		 * @since PHP 7, PHP 8
		 */
		public function call(object $newthis, ...$values) {}

		/**
		 * Converts a callable into a closure
		 * <p>Create and return a new anonymous function from given <code>callable</code> using the current scope. This method checks if the <code>callable</code> is callable in the current scope and throws a TypeError if it is not.</p>
		 * @param callable $callable <p>The callable to convert.</p>
		 * @return Closure <p>Returns the newly created Closure or throws a TypeError if the <code>callable</code> is not callable in the current scope.</p>
		 * @link https://php.net/manual/en/closure.fromcallable.php
		 * @since PHP 7 >= 7.1.0
		 */
		public static function fromCallable(callable $callable): \Closure {}
	}

}
