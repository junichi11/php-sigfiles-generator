<?php



namespace {

	/**
	 * <p>Interface to create an external Iterator.</p>
	 * @link http://php.net/manual/en/class.iteratoraggregate.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	interface IteratorAggregate extends Traversable {

		/**
		 * Retrieve an external iterator
		 * <p>Returns an external iterator.</p>
		 * @return Traversable <p>An instance of an object implementing Iterator or Traversable</p>
		 * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getIterator(): \Traversable;
	}

}
