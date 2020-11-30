<?php



namespace {

	/**
	 * <p>LAPACK is written in Fortran 90 and provides routines for solving systems of simultaneous linear equations, least-squares solutions of linear systems of equations, eigenvalue problems, and singular value problems. This extension wraps the LAPACKE C bindings to allow access to several processes exposed by the library. Most functions work with arrays of arrays, representing rectangular matrices in row major order - so a two by two matrix [1 2; 3 4] would be array(array(1, 2), array(3, 4)).</p>
	 * <p>All of the functions are called statically, for example $eig = Lapack::eigenvalues($a);</p>
	 * @link http://php.net/manual/en/class.lapack.php
	 * @since PECL lapack >= 0.1.0
	 */
	class Lapack {

		/**
		 * This function returns the eigenvalues for a given square matrix
		 * <p>Calculate the eigenvalues for a square matrix, and optionally calculate the left and right eigenvectors.</p>
		 * @param array $a <p>The matrix to calculate the eigenvalues for.</p>
		 * @param array $left <p>Optional parameter - if an array is passed here, it will be filled with the left eigenvectors</p>
		 * @param array $right <p>Optional parameter - if an array is passed here, it will be filled with the right eigenvectors</p>
		 * @return array <p>Returns an array of arrays representing the eigenvalues for the array.</p>
		 * @link http://php.net/manual/en/lapack.eigenvalues.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function eigenValues(array $a, array $left = NULL, array $right = NULL): array {}

		/**
		 * Return an identity matrix
		 * <p>Return a size n identity matrix</p>
		 * @param int $n <p>The height and width of the identity matrix.</p>
		 * @return array <p>Will return a an array of n arrays, each containing n entries. The diagonals of the matrix will be 1s, the other positions 0.</p>
		 * @link http://php.net/manual/en/lapack.identity.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function identity(int $n): array {}

		/**
		 * Calculate the linear least squares solution of a matrix using QR factorisation
		 * <p>Solve the linear least squares problem, find min x in || B - Ax || Returns an array representing x. Expects arrays of arrays, and will return an array of arrays in the dimension B num cols x A num cols. Uses QR or LQ factorisation on matrix A.</p>
		 * @param array $a <p>Matrix A</p>
		 * @param array $b <p>Matrix B</p>
		 * @return array <p>Array of the solution matrix</p>
		 * @link http://php.net/manual/en/lapack.leastsquaresbyfactorisation.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function leastSquaresByFactorisation(array $a, array $b): array {}

		/**
		 * Solve the linear least squares problem, using SVD
		 * <p>Solve the linear least squares problem, find min x in || B - Ax || Returns an array representing x. Expects arrays of arrays, and will return an array of arrays in the dimension B num cols x A num cols. Uses SVD with a divide and conquer algorithm.</p>
		 * @param array $a <p>Matrix A</p>
		 * @param array $b <p>Matrix B</p>
		 * @return array <p>Returns the solution as an array of arrays.</p>
		 * @link http://php.net/manual/en/lapack.leastsquaresbysvd.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function leastSquaresBySVD(array $a, array $b): array {}

		/**
		 * Calculate the inverse of a matrix
		 * <p>Find the pseudoinverse of a matrix A.</p>
		 * @param array $a <p>Matrix to invert</p>
		 * @return array <p>Inverted matrix (array of arrays).</p>
		 * @link http://php.net/manual/en/lapack.pseudoinverse.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function pseudoInverse(array $a): array {}

		/**
		 * Calculated the singular values of a matrix
		 * <p>Calculate the singular values of the matrix A.</p>
		 * @param array $a <p>The matrix to calculate the singular values for</p>
		 * @return array <p>The singular values</p>
		 * @link http://php.net/manual/en/lapack.singularvalues.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function singularValues(array $a): array {}

		/**
		 * Solve a system of linear equations
		 * <p>This function computes the solution to the system of linear equations with a square matrix A and multiple right-hand sides B. Solves A &#42; X = B for multiple B.</p>
		 * @param array $a <p>Square matrix of linear equations</p>
		 * @param array $b <p>Right hand side to be solved for</p>
		 * @return array <p>Matrix X</p>
		 * @link http://php.net/manual/en/lapack.solvelinearequation.php
		 * @since PECL lapack >= 0.1.0
		 */
		public static function solveLinearEquation(array $a, array $b): array {}
	}

	/**
	 * <p>Exception thrown when an error is caught in the LAPACK functions</p>
	 * @link http://php.net/manual/en/class.lapackexception.php
	 * @since PECL lapack >= 0.1.0
	 */
	class lapackexception extends \Exception {

		/**
		 * @var string <p>The exception message</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link http://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link http://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>integer</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link http://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link http://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link http://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link http://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link http://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link http://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

}
