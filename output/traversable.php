<?php



namespace {

	/**
	 * <p>Interface to detect if a class is traversable using foreach.</p>
	 * <p>Abstract base interface that cannot be implemented alone. Instead it must be implemented by either <code>IteratorAggregate</code> or <code>Iterator</code>.</p>
	 * <p><b>Note</b>:</p>
	 * <p>Internal (built-in) classes that implement this interface can be used in a foreach construct and do not need to implement <code>IteratorAggregate</code> or <code>Iterator</code>.</p>
	 * <p><b>Note</b>:</p>
	 * <p>This is an internal engine interface which cannot be implemented in PHP scripts. Either <code>IteratorAggregate</code> or <code>Iterator</code> must be used instead. When implementing an interface which extends Traversable, make sure to list <code>IteratorAggregate</code> or <code>Iterator</code> before its name in the implements clause.</p>
	 * @link http://php.net/manual/en/class.traversable.php
	 * @since PHP 5, PHP 7
	 */
	interface Traversable {
	}

}
