<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.svm.php
	 * @since PECL svm >= 0.1.0
	 */
	class SVM {

		/**
		 * @var int <p>The basic C_SVC SVM type. The default, and a good starting point</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const C_SVC = 0;

		/**
		 * @var int <p>The NU_SVC type uses a different, more flexible, error weighting</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const NU_SVC = 1;

		/**
		 * @var int <p>One class SVM type. Train just on a single class, using outliers as negative examples</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const ONE_CLASS = 2;

		/**
		 * @var int <p>A SVM type for regression (predicting a value rather than just a class)</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const EPSILON_SVR = 3;

		/**
		 * @var int <p>A NU style SVM regression type</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const NU_SVR = 4;

		/**
		 * @var int <p>A very simple kernel, can work well on large document classification problems</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const KERNEL_LINEAR = 0;

		/**
		 * @var int <p>A polynomial kernel</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const KERNEL_POLY = 1;

		/**
		 * @var int <p>The common Gaussian RBD kernel. Handles non-linear problems well and is a good default for classification</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const KERNEL_RBF = 2;

		/**
		 * @var int <p>A kernel based on the sigmoid function. Using this makes the SVM very similar to a two layer sigmoid based neural network</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const KERNEL_SIGMOID = 3;

		/**
		 * @var int <p>A precomputed kernel - currently unsupported.</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const KERNEL_PRECOMPUTED = 4;

		/**
		 * @var int <p>The options key for the SVM type</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_TYPE = 101;

		/**
		 * @var int <p>The options key for the kernel type</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_KERNEL_TYPE = 102;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_DEGREE = 103;

		/**
		 * @var int <p>Training parameter, boolean, for whether to use the shrinking heuristics</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_SHRINKING = 104;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_PROPABILITY = 105;

		/**
		 * @var int <p>Algorithm parameter for Poly, RBF and Sigmoid kernel types.</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_GAMMA = 201;

		/**
		 * @var int <p>The option key for the nu parameter, only used in the NU_ SVM types</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_NU = 202;

		/**
		 * @var int <p>The option key for the Epsilon parameter, used in epsilon regression</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_EPS = 203;

		/**
		 * @var int <p>Training parameter used by Episilon SVR regression</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_P = 204;

		/**
		 * @var int <p>Algorithm parameter for poly and sigmoid kernels</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_COEF_ZERO = 205;

		/**
		 * @var int <p>The option for the cost parameter that controls tradeoff between errors and generality - effectively the penalty for misclassifying training examples.</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_C = 206;

		/**
		 * @var int <p>Memory cache size, in MB</p>
		 * @link https://php.net/manual/en/class.svm.php
		 */
		const OPT_CACHE_SIZE = 207;

		/**
		 * Construct a new SVM object
		 * <p>Constructs a new SVM object ready to accept training data.</p>
		 * @return self <p>Throws SVMException if the libsvm library could not be loaded</p>
		 * @link https://php.net/manual/en/svm.construct.php
		 * @since PECL svm >= 0.1.0
		 */
		public function __construct() {}

		/**
		 * Test training params on subsets of the training data
		 * <p>Crossvalidate can be used to test the effectiveness of the current parameter set on a subset of the training data. Given a problem set and a n "folds", it separates the problem set into n subsets, and the repeatedly trains on one subset and tests on another. While the accuracy will generally be lower than a SVM trained on the enter data set, the accuracy score returned should be relatively useful, so it can be used to test different training parameters.</p>
		 * @param array $problem <p>The problem data. This can either be in the form of an array, the URL of an SVMLight formatted file, or a stream to an opened SVMLight formatted datasource.</p>
		 * @param int $number_of_folds <p>The number of sets the data should be divided into and cross tested. A higher number means smaller training sets and less reliability. 5 is a good number to start with.</p>
		 * @return float <p>The correct percentage, expressed as a floating point number from 0-1. In the case of NU_SVC or EPSILON_SVR kernels the mean squared error will returned instead.</p>
		 * @link https://php.net/manual/en/svm.crossvalidate.php
		 * @since PECL svm >= 0.1.0
		 */
		public function crossvalidate(array $problem, int $number_of_folds): float {}

		/**
		 * Return the current training parameters
		 * <p>Retrieve an array containing the training parameters. The parameters will be keyed on the predefined SVM constants.</p>
		 * @return array <p>Returns an array of configuration settings.</p>
		 * @link https://php.net/manual/en/svm.getoptions.php
		 * @since PECL svm >= 0.1.0
		 */
		public function getOptions(): array {}

		/**
		 * Set training parameters
		 * <p>Set one or more training parameters.</p>
		 * @param array $params <p>An array of training parameters, keyed on the SVM constants.</p>
		 * @return bool <p>Return true on success, throws SVMException on error.</p>
		 * @link https://php.net/manual/en/svm.setoptions.php
		 * @since PECL svm >= 0.1.0
		 */
		public function setOptions(array $params): bool {}

		/**
		 * Create a SVMModel based on training data
		 * <p>Train a support vector machine based on the supplied training data.</p>
		 * @param array $problem <p>The problem can be provided in three different ways. An array, where the data should start with the class label (usually 1 or -1) then followed by a sparse data set of dimension =&gt; data pairs. A URL to a file containing a SVM Light formatted problem, with the each line being a new training example, the start of each line containing the class (1, -1) then a series of tab separated data values shows as key:value. A opened stream pointing to a data source formatted as in the file above.</p>
		 * @param array $weights <p>Weights are an optional set of weighting parameters for the different classes, to help account for unbalanced training sets. For example, if the classes were 1 and -1, and -1 had significantly more example than one, the weight for -1 could be 0.5. Weights should be in the range 0-1.</p>
		 * @return SVMModel <p>Returns an SVMModel that can be used to classify previously unseen data. Throws SVMException on error</p>
		 * @link https://php.net/manual/en/svm.train.php
		 * @since PECL svm >= 0.1.0
		 */
		public function train(array $problem, array $weights = NULL): \SVMModel {}
	}

	/**
	 * <p>The SVMModel is the end result of the training process. It can be used to classify previously unseen data.</p>
	 * @link https://php.net/manual/en/class.svmmodel.php
	 * @since PECL svm >= 0.1.0
	 */
	class SVMModel {

		/**
		 * Construct a new SVMModel
		 * <p>Build a new SVMModel. Models will usually be created from the SVM::train function, but then saved models may be restored directly.</p>
		 * @param string $filename <p>The filename for the saved model file this model should load.</p>
		 * @return self <p>Throws SVMException on error</p>
		 * @link https://php.net/manual/en/svmmodel.construct.php
		 * @since PECL svm >= 0.1.0
		 */
		public function __construct(string $filename = NULL) {}

		/**
		 * Returns true if the model has probability information
		 * <p>Returns true if the model contains probability information.</p>
		 * @return bool <p>Return a boolean value</p>
		 * @link https://php.net/manual/en/svmmodel.checkprobabilitymodel.php
		 * @since PECL svm >= 0.1.5
		 */
		public function checkProbabilityModel(): bool {}

		/**
		 * Get the labels the model was trained on
		 * <p>Return an array of labels that the model was trained on. For regression and one class models an empty array is returned.</p>
		 * @return array <p>Return an array of labels</p>
		 * @link https://php.net/manual/en/svmmodel.getlabels.php
		 * @since PECL svm >= 0.1.5
		 */
		public function getLabels(): array {}

		/**
		 * Returns the number of classes the model was trained with
		 * <p>Returns the number of classes the model was trained with, will return 2 for one class and regression models.</p>
		 * @return int <p>Return an integer number of classes</p>
		 * @link https://php.net/manual/en/svmmodel.getnrclass.php
		 * @since PECL svm >= 0.1.5
		 */
		public function getNrClass(): int {}

		/**
		 * Get the SVM type the model was trained with
		 * <p>Returns an integer value representing the type of the SVM model used, e.g SVM::C_SVC.</p>
		 * @return int <p>Return an integer SVM type</p>
		 * @link https://php.net/manual/en/svmmodel.getsvmtype.php
		 * @since PECL svm >= 0.1.5
		 */
		public function getSvmType(): int {}

		/**
		 * Get the sigma value for regression types
		 * <p>For regression models, returns a sigma value. If there is no probability information or the model is not SVR, 0 is returned.</p>
		 * @return float <p>Returns a sigma value</p>
		 * @link https://php.net/manual/en/svmmodel.getsvrprobability.php
		 * @since PECL svm >= 0.1.5
		 */
		public function getSvrProbability(): float {}

		/**
		 * Load a saved SVM Model
		 * <p>Load a model file ready for classification or regression.</p>
		 * @param string $filename <p>The filename of the model.</p>
		 * @return bool <p>Throws SVMException on error. Returns true on success.</p>
		 * @link https://php.net/manual/en/svmmodel.load.php
		 * @since PECL svm >= 0.1.00.1.0
		 */
		public function load(string $filename): bool {}

		/**
		 * Predict a value for previously unseen data
		 * <p>This function accepts an array of data and attempts to predict the class or regression value based on the model extracted from previously trained data.</p>
		 * @param array $data <p>The array to be classified. This should be a series of key =&gt; value pairs in increasing key order, but not necessarily continuous.</p>
		 * @return float <p>Float the predicted value. This will be a class label in the case of classification, a real value in the case of regression. Throws SVMException on error</p>
		 * @link https://php.net/manual/en/svmmodel.predict.php
		 * @since PECL svm >= 0.1.0
		 */
		public function predict(array $data): float {}

		/**
		 * Return class probabilities for previous unseen data
		 * <p>This function accepts an array of data and attempts to predict the class, as with the predict function. Additionally, however, this function returns an array of probabilities, one per class in the model, which represent the estimated chance of the data supplied being a member of that class. Requires that the model to be used has been trained with the probability parameter set to true.</p>
		 * @param array $data <p>The array to be classified. This should be a series of key =&gt; value pairs in increasing key order, but not necessarily continuous.</p>
		 * @return float <p>Float the predicted value. This will be a class label in the case of classification, a real value in the case of regression. Throws SVMException on error</p>
		 * @link https://php.net/manual/en/svmmodel.predict-probability.php
		 * @since PECL svm >= 0.1.4
		 */
		public function predict_probability(array $data): float {}

		/**
		 * Save a model to a file
		 * <p>Save the model data to a file, for later use.</p>
		 * @param string $filename <p>The file to save the model to.</p>
		 * @return bool <p>Throws SVMException on error. Returns true on success.</p>
		 * @link https://php.net/manual/en/svmmodel.save.php
		 * @since PECL svm >= 0.1.0
		 */
		public function save(string $filename): bool {}
	}

}
