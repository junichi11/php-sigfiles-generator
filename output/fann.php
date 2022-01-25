<?php



namespace {

	/**
	 * <p><b>FANNConnection</b> is used for the neural network connection. The objects of this class are used in <code>fann_get_connection_array()</code> and <code>fann_set_weight_array()</code>.</p>
	 * @link https://php.net/manual/en/class.fannconnection.php
	 * @since No version information available, might only be in Git
	 */
	class FANNConnection {

		/**
		 * @var mixed <p>The neuron where the connection starts.</p>
		 * @link https://php.net/manual/en/class.fannconnection.php#fannconnection.props.from-neuron
		 */
		public $from_neuron;

		/**
		 * @var mixed <p>The neuron where the connection ends.</p>
		 * @link https://php.net/manual/en/class.fannconnection.php#fannconnection.props.to-neuron
		 */
		public $to_neuron;

		/**
		 * @var mixed <p>The weight of the connection.</p>
		 * @link https://php.net/manual/en/class.fannconnection.php#fannconnection.props.weight
		 */
		public $weight;

		/**
		 * The connection constructor
		 * <p>Create new connection and initialize its params. After creating the connection, only weight can be changed.</p>
		 * @param int $from_neuron <p>The postion number of starting neuron.</p>
		 * @param int $to_neuron <p>The postion number of terminating neuron.</p>
		 * @param float $weight <p>The connection weight value.</p>
		 * @return self
		 * @link https://php.net/manual/en/fannconnection.construct.php
		 * @since PECL fann >= 1.0.0
		 */
		public function __construct(int $from_neuron, int $to_neuron, float $weight) {}

		/**
		 * Returns the postions of starting neuron
		 * <p>Returns the postions of starting neuron.</p>
		 * @return int <p>The postions of starting neuron.</p>
		 * @link https://php.net/manual/en/fannconnection.getfromneuron.php
		 * @since PECL fann >= 1.0.0
		 */
		public function getFromNeuron(): int {}

		/**
		 * Returns the postions of terminating neuron
		 * <p>Returns the positions of terminating neuron.</p>
		 * @return int <p>The postions of terminating neuron.</p>
		 * @link https://php.net/manual/en/fannconnection.gettoneuron.php
		 * @since PECL fann >= 1.0.0
		 */
		public function getToNeuron(): int {}

		/**
		 * Returns the connection weight
		 * <p>Returns the connection weight.</p>
		 * @return void <p>The connection weight.</p>
		 * @link https://php.net/manual/en/fannconnection.getweight.php
		 * @since PECL fann >= 1.0.0
		 */
		public function getWeight(): void {}

		/**
		 * Sets the connections weight
		 * <p>Sets the connection weight.</p><p>This method is different than <code>fann_set_weight()</code>. It does not update the weight value in the network. The network value is updated only after calling <code>fann_set_weight_array()</code>.</p>
		 * @param float $weight <p>The connection weight.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/fannconnection.setweight.php
		 * @since PECL fann >= 1.0.0
		 */
		public function setWeight(float $weight): void {}
	}

	/**
	 * Trains on an entire dataset, for a period of time using the Cascade2 training algorithm
	 * <p>The cascade output change fraction is a number between 0 and 1 determining how large a fraction the <code>fann_get_MSE()</code> value should change within <code>fann_get_cascade_output_stagnation_epochs()</code> during training of the output connections, in order for the training not to stagnate. If the training stagnates, the training of the output connections will be ended and new candidates will be prepared.</p><p>This training uses the parameters set using the fann_set_cascade_..., but it also uses another training algorithm as it&rsquo;s internal training algorithm. This algorithm can be set to either <b><code>FANN_TRAIN_RPROP</code></b> or <b><code>FANN_TRAIN_QUICKPROP</code></b> by <code>fann_set_training_algorithm()</code>, and the parameters set for these training algorithms will also affect the cascade training.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @param int $max_neurons <p>The maximum number of neurons to be added to neural network.</p>
	 * @param int $neurons_between_reports <p>The number of neurons between printing a status report. A value of zero means no reports should be printed.</p>
	 * @param float $desired_error <p>The desired <code>fann_get_MSE()</code> or <code>fann_get_bit_fail()</code>, depending on which stop function is chosen by <code>fann_set_train_stop_function()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-cascadetrain-on-data.php
	 * @see fann_train_on_data(), fann_cascadetrain_on_file()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_cascadetrain_on_data($ann, $data, int $max_neurons, int $neurons_between_reports, float $desired_error): bool {}

	/**
	 * Trains on an entire dataset read from file, for a period of time using the Cascade2 training algorithm
	 * <p>Does the same as <code>fann_cascadetrain_on_data()</code>, but reads the training data directly from a file.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param string $filename <p>A file containing the data for training.</p>
	 * @param int $max_neurons <p>The maximum number of neurons to be added to neural network</p>
	 * @param int $neurons_between_reports <p>The number of neurons between printing a status report. A value of zero means no reports should be printed.</p>
	 * @param float $desired_error <p>The desired <code>fann_get_MSE()</code> or <code>fann_get_bit_fail()</code>, depending on which stop function is chosen by <code>fann_set_train_stop_function()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-cascadetrain-on-file.php
	 * @see fann_train_on_data(), fann_cascadetrain_on_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_cascadetrain_on_file($ann, string $filename, int $max_neurons, int $neurons_between_reports, float $desired_error): bool {}

	/**
	 * Clears scaling parameters
	 * <p>Clears scaling parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-clear-scaling-params.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_clear_scaling_params($ann): bool {}

	/**
	 * Creates a copy of a fann structure
	 * <p>Creates a copy of a fann structure.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return resource <p>Returns a copy of neural network resource on success, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/function.fann-copy.php
	 * @see fann_test()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_copy($ann) {}

	/**
	 * Constructs a backpropagation neural network from a configuration file
	 * <p>Constructs a backpropagation neural network from a configuration file, which have been saved by <code>fann_save()</code>.</p>
	 * @param string $configuration_file <p>The configuration file path.</p>
	 * @return resource <p>Returns a neural network <code>resource</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-from-file.php
	 * @see fann_save()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_from_file(string $configuration_file) {}

	/**
	 * Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections
	 * <p>Creates a standard backpropagation neural network, which is not fully connected and which also has shortcut connections.</p><p>Shortcut connections are connections that skip layers. A fully connected network with shortcut connections, is a network where all neurons are connected to all neurons in later layers. Including direct connections from the input layer to the output layer.</p>
	 * @param int $num_layers <p>The total number of layers including the input and the output layer.</p>
	 * @param int $num_neurons1 <p>Number of neurons in the first layer.</p>
	 * @param int $num_neurons2 <p>Number of neurons in the second layer.</p>
	 * @param int $num_neuronsN <p>Number of neurons in other layers.</p>
	 * @return resource <p>Returns a neural network resource on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-shortcut.php
	 * @see fann_create_shortcut_array(), fann_create_sparse(), fann_create_standard()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_shortcut(int $num_layers, int $num_neurons1, int $num_neurons2, int ...$num_neuronsN) {}

	/**
	 * Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections
	 * <p>Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections using an array of layers sizes.</p>
	 * @param int $num_layers <p>The total number of layers including the input and the output layer.</p>
	 * @param array $layers <p>An array of layers sizes.</p>
	 * @return resource <p>Returns a neural network resource on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-shortcut-array.php
	 * @see fann_create_shortcut(), fann_create_sparse(), fann_create_standard()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_shortcut_array(int $num_layers, array $layers) {}

	/**
	 * Creates a standard backpropagation neural network, which is not fully connected
	 * <p>Creates a standard backpropagation neural network, which is not fully connected.</p>
	 * @param float $connection_rate <p>The connection rate controls how many connections there will be in the network. If the connection rate is set to 1, the network will be fully connected, but if it is set to 0.5 only half of the connections will be set. A connection rate of 1 will yield the same result as <code>fann_create_standard()</code>.</p>
	 * @param int $num_layers <p>The total number of layers including the input and the output layer.</p>
	 * @param int $num_neurons1 <p>Number of neurons in the first layer.</p>
	 * @param int $num_neurons2 <p>Number of neurons in the second layer.</p>
	 * @param int $num_neuronsN <p>Number of neurons in other layers.</p>
	 * @return resource <p>Returns a neural network resource on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-sparse.php
	 * @see fann_create_sparse_array(), fann_create_standard(), fann_create_shortcut()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_sparse(float $connection_rate, int $num_layers, int $num_neurons1, int $num_neurons2, int ...$num_neuronsN) {}

	/**
	 * Creates a standard backpropagation neural network, which is not fully connected using an array of layer sizes
	 * <p>Creates a standard backpropagation neural network, which is not fully connected using an array of layer sizes.</p>
	 * @param float $connection_rate <p>The connection rate controls how many connections there will be in the network. If the connection rate is set to 1, the network will be fully connected, but if it is set to 0.5 only half of the connections will be set. A connection rate of 1 will yield the same result as <code>fann_create_standard()</code>.</p>
	 * @param int $num_layers <p>The total number of layers including the input and the output layer.</p>
	 * @param array $layers <p>An array of layer sizes.</p>
	 * @return resource <p>Returns a neural network resource on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-sparse-array.php
	 * @see fann_create_sparse(), fann_create_standard(), fann_create_shortcut()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_sparse_array(float $connection_rate, int $num_layers, array $layers) {}

	/**
	 * Creates a standard fully connected backpropagation neural network
	 * <p>Creates a standard fully connected backpropagation neural network.</p><p>There will be a bias neuron in each layer (except the output layer), and this bias neuron will be connected to all neurons in the next layer. When running the network, the bias nodes always emits 1.</p><p>To destroy a neural network use the <code>fann_destroy()</code> function.</p>
	 * @param int $num_layers <p>The total number of layers including the input and the output layer.</p>
	 * @param int $num_neurons1 <p>Number of neurons in the first layer.</p>
	 * @param int $num_neurons2 <p>Number of neurons in the second layer.</p>
	 * @param int $num_neuronsN <p>Number of neurons in other layers.</p>
	 * @return resource <p>Returns a neural network resource on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-standard.php
	 * @see fann_create_standard_array(), fann_create_sparse(), fann_create_shortcut()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_standard(int $num_layers, int $num_neurons1, int $num_neurons2, int ...$num_neuronsN) {}

	/**
	 * Creates a standard fully connected backpropagation neural network using an array of layer sizes
	 * <p>Creates a standard fully connected backpropagation neural network.</p><p>There will be a bias neuron in each layer (except the output layer), and this bias neuron will be connected to all neurons in the next layer. When running the network, the bias nodes always emits 1.</p><p>To destroy a neural network use the <code>fann_destroy()</code> function.</p>
	 * @param int $num_layers <p>The total number of layers including the input and the output layer.</p>
	 * @param array $layers <p>An array of layer sizes.</p>
	 * @return resource <p>Returns a neural network resource on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-standard-array.php
	 * @see fann_create_standard(), fann_create_sparse(), fann_create_shortcut()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_standard_array(int $num_layers, array $layers) {}

	/**
	 * Creates an empty training data struct
	 * <p>Creates an empty training data struct.</p>
	 * @param int $num_data <p>The number of training data</p>
	 * @param int $num_input <p>The number of inputs per training data</p>
	 * @param int $num_output <p>The number of ouputs per training data</p>
	 * @return resource <p>Returns a train data <code>resource</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-train.php
	 * @see fann_read_train_from_file(), fann_train_on_data(), fann_destroy_train(), fann_save_train()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_train(int $num_data, int $num_input, int $num_output) {}

	/**
	 * Creates the training data struct from a user supplied function
	 * <p>Creates the training data struct from a user supplied function. As the training data are numerable (data 1, data 2...), the user must write a function that receives the number of the training data set (input, output) and returns the set.</p>
	 * @param int $num_data <p>The number of training data</p>
	 * @param int $num_input <p>The number of inputs per training data</p>
	 * @param int $num_output <p>The number of ouputs per training data</p>
	 * @param callable $user_function <p>The user supplied function with following parameters:</p><ul> <li><code>num</code> - The number of the training data set</li> <li><code>num_input</code> - The number of inputs per training data</li> <li><code>num_output</code> - The number of ouputs per training data</li> </ul> <p>The function should return an associative array with keys <code>input</code> and <code>output</code> and two array values of input and output.</p>
	 * @return resource <p>Returns a train data <code>resource</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-create-train-from-callback.php
	 * @see fann_read_train_from_file(), fann_train_on_data(), fann_destroy_train(), fann_save_train()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_create_train_from_callback(int $num_data, int $num_input, int $num_output, callable $user_function) {}

	/**
	 * Scale data in input vector after get it from ann based on previously calculated parameters
	 * <p>Scale data in input vector after get it from ann based on previously calculated parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $input_vector <p>Input vector that will be descaled</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-descale-input.php
	 * @see fann_scale_input(), fann_descale_output()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_descale_input($ann, array $input_vector): bool {}

	/**
	 * Scale data in output vector after get it from ann based on previously calculated parameters
	 * <p>Scale data in output vector after get it from ann based on previously calculated parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $output_vector <p>Output vector that will be descaled</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-descale-output.php
	 * @see fann_scale_output(), fann_descale_input()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_descale_output($ann, array $output_vector): bool {}

	/**
	 * Descale input and output data based on previously calculated parameters
	 * <p>Descale input and output data based on previously calculated parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-descale-train.php
	 * @see fann_scale_train(), fann_set_scaling_params()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_descale_train($ann, $train_data): bool {}

	/**
	 * Destroys the entire network and properly freeing all the associated memory
	 * <p>Destroys the entire network and properly freeing all the associated memory.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-destroy.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_destroy($ann): bool {}

	/**
	 * Destructs the training data
	 * <p>Destructs the training data</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-destroy-train.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_destroy_train($train_data): bool {}

	/**
	 * Returns an exact copy of a fann train data
	 * <p>Returns an exact copy of a fann train data <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @return resource <p>Returns a train data <code>resource</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-duplicate-train-data.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_duplicate_train_data($data) {}

	/**
	 * Returns the activation function
	 * <p>Get the activation function for neuron number <code>neuron</code> in layer number <code>layer</code>, counting the input layer as layer 0.</p><p>It is not possible to get activation functions for the neurons in the input layer.</p><p>The return value is one of the activation functions constants.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $layer <p>Layer number.</p>
	 * @param int $neuron <p>Neuron number.</p>
	 * @return int <p>Learning functions constant or -1 if the neuron is not defined in the neural network, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-activation-function.php
	 * @see fann_set_activation_function_layer(), fann_set_activation_function_hidden(), fann_set_activation_function_output(), fann_set_activation_steepness(), fann_set_activation_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_activation_function($ann, int $layer, int $neuron): int {}

	/**
	 * Returns the activation steepness for supplied neuron and layer number
	 * <p>Get the activation steepness for neuron number <code>neuron</code> in layer number <code>layer</code>, counting the input layer as layer 0.</p><p>It is not possible to get activation steepness for the neurons in the input layer.</p><p>The steepness of an activation function says something about how fast the activation function goes from the minimum to the maximum. A high value for the activation function will also give a more aggressive training.</p><p>When training neural networks where the output values should be at the extremes (usually 0 and 1, depending on the activation function), a steep activation function can be used (e.g. 1.0).</p><p>The default activation steepness is 0.5.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $layer <p>Layer number</p>
	 * @param int $neuron <p>Neuron number</p>
	 * @return float <p>The activation steepness for the neuron or -1 if the neuron is not defined in the neural network, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-activation-steepness.php
	 * @see fann_set_activation_function(), fann_set_activation_steepness_layer(), fann_set_activation_steepness_hidden(), fann_set_activation_steepness_output(), fann_set_activation_steepness()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_activation_steepness($ann, int $layer, int $neuron): float {}

	/**
	 * Get the number of bias in each layer in the network
	 * <p>Get the number of bias in each layer in the network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return array <p>An array of numbers of bias in each layer</p>
	 * @link https://php.net/manual/en/function.fann-get-bias-array.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_bias_array($ann): array {}

	/**
	 * The number of fail bits
	 * <p>The number of fail bits; means the number of output neurons which differ more than the bit fail limit (see <code>fann_get_bit_fail_limit()</code>, <code>fann_set_bit_fail_limit()</code>). The bits are counted in all of the training data, so this number can be higher than the number of training data.</p><p>This value is reset by <code>fann_reset_MSE()</code> and updated by all the same functions which also updates the MSE value (e.g. <code>fann_test_data()</code>, <code>fann_train_epoch()</code>)</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of bits fail, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-bit-fail.php
	 * @see fann_get_MSE(), fann_reset_MSE(), fann_test_data(), fann_train_epoch(), fann_get_bit_fail_limit(), fann_set_bit_fail_limit()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_bit_fail($ann): int {}

	/**
	 * Returns the bit fail limit used during training
	 * <p>Returns the bit fail limit used during training.</p><p>The bit fail limit is used during training where the stop function is set to <b><code>FANN_STOPFUNC_BIT</code></b>.</p><p>The limit is the maximum accepted difference between the desired output and the actual output during training. Each output that diverges more than this limit is counted as an error bit. This difference is divided by two when dealing with symmetric activation functions, so that symmetric and not symmetric activation functions can use the same limit.</p><p>The default bit fail limit is 0.35.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The bit fail limit, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-bit-fail-limit.php
	 * @see fann_set_bit_fail_limit()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_bit_fail_limit($ann): float {}

	/**
	 * Returns the cascade activation functions
	 * <p>The cascade activation functions array is an array of the different activation functions used by the candidates</p><p>See <code>fann_get_cascade_num_candidates()</code> for a description of which candidate neurons will be generated by this array.</p><p>The default activation functions are <b><code>FANN_SIGMOID</code></b>, <b><code>FANN_SIGMOID_SYMMETRIC</code></b>, <b><code>FANN_GAUSSIAN</code></b>, <b><code>FANN_GAUSSIAN_SYMMETRIC</code></b>, <b><code>FANN_ELLIOT</code></b>, <b><code>FANN_ELLIOT_SYMMETRIC</code></b>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return array <p>The cascade activation functions, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-activation-functions.php
	 * @see fann_get_cascade_activation_functions_count(), fann_set_cascade_activation_functions()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_activation_functions($ann): array {}

	/**
	 * Returns the number of cascade activation functions
	 * <p>The number of activation functions in the <code>fann_get_cascade_activation_functions()</code> array.</p><p>The default number of activation functions is 6.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of cascade activation functions, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-activation-functions-count.php
	 * @see fann_get_cascade_activation_functions(), fann_set_cascade_activation_functions()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_activation_functions_count($ann): int {}

	/**
	 * Returns the cascade activation steepnesses
	 * <p>The cascade activation steepnesses array is an array of the different activation functions used by the candidates.</p><p>See <code>fann_get_cascade_num_candidates()</code> for a description of which candidate neurons will be generated by this array.</p><p>The default activation steepnesses are {0.25, 0.50, 0.75, 1.00}.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return array <p>The cascade activation steepnesses, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-activation-steepnesses.php
	 * @see fann_get_cascade_activation_steepnesses_count(), fann_set_cascade_activation_steepnesses()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_activation_steepnesses($ann): array {}

	/**
	 * The number of activation steepnesses
	 * <p>The number of activation steepnesses in the <code>fann_get_cascade_activation_functions()</code> array.</p><p>The default number of activation steepnesses is 4.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of activation steepnesses, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-activation-steepnesses-count.php
	 * @see fann_get_cascade_activation_steepnesses(), fann_set_cascade_activation_functions()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_activation_steepnesses_count($ann): int {}

	/**
	 * Returns the cascade candidate change fraction
	 * <p>The cascade candidate change fraction is a number between 0 and 1 determining how large a fraction the <code>fann_get_MSE()</code> value should change within <code>fann_get_cascade_candidate_stagnation_epochs()</code> during training of the candidate neurons, in order for the training not to stagnate. If the training stagnates, the training of the candidate neurons will be ended and the best candidate will be selected.</p><p>It means that if the MSE does not change by a fraction of <b>fann_get_cascade_candidate_change_fraction()</b> during a period of <code>fann_get_cascade_candidate_stagnation_epochs()</code>, the training of the candidate neurons is stopped because the training has stagnated.</p><p>If the cascade candidate change fraction is low, the candidate neurons will be trained more and if the fraction is high they will be trained less.</p><p>The default cascade candidate change fraction is 0.01, which is equalent to a 1% change in MSE.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The cascade candidate change fraction, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-candidate-change-fraction.php
	 * @see fann_set_cascade_candidate_change_fraction(), fann_get_MSE(), fann_get_cascade_candidate_stagnation_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_candidate_change_fraction($ann): float {}

	/**
	 * Return the candidate limit
	 * <p>The candidate limit is a limit for how much the candidate neuron may be trained. The limit is a limit on the proportion between the MSE and candidate score.</p><p>Set this to a lower value to avoid overfitting and to a higher if overfitting is not a problem.</p><p>The default candidate limit is 1000.0.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The candidate limit, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-candidate-limit.php
	 * @see fann_set_cascade_candidate_limit()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_candidate_limit($ann): float {}

	/**
	 * Returns the number of cascade candidate stagnation epochs
	 * <p>The number of cascade candidate stagnation epochs determines the number of epochs training is allowed to continue without changing the MSE by a fraction of <code>fann_get_cascade_candidate_change_fraction()</code>.</p><p>See more info about this parameter in <code>fann_get_cascade_candidate_change_fraction()</code>.</p><p>The default number of cascade candidate stagnation epochs is 12.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of cascade candidate stagnation epochs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-candidate-stagnation-epochs.php
	 * @see fann_set_cascade_candidate_stagnation_epochs(), fann_get_cascade_candidate_change_fraction()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_candidate_stagnation_epochs($ann): int {}

	/**
	 * Returns the maximum candidate epochs
	 * <p>The maximum candidate epochs determines the maximum number of epochs the input connections to the candidates may be trained before adding a new candidate neuron.</p><p>The default max candidate epochs is 150.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The maximum candidate epochs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-max-cand-epochs.php
	 * @see fann_set_cascade_max_cand_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_max_cand_epochs($ann): int {}

	/**
	 * Returns the maximum out epochs
	 * <p>The maximum out epochs determines the maximum number of epochs the output connections may be trained after adding a new candidate neuron.</p><p>The default max out epochs is 150.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The maximum out epochs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-max-out-epochs.php
	 * @see fann_set_cascade_max_out_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_max_out_epochs($ann): int {}

	/**
	 * Returns the minimum candidate epochs
	 * <p>The minimum candidate epochs determines the minimum number of epochs the input connections to the candidates may be trained before adding a new candidate neuron.</p><p>The default min candidate epochs is 50.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The minimum candidate epochs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-min-cand-epochs.php
	 * @see fann_set_cascade_min_cand_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_min_cand_epochs($ann): int {}

	/**
	 * Returns the minimum out epochs
	 * <p>The minimum out epochs determines the minimum number of epochs the output connections must be trained after adding a new candidate neuron.</p><p>The default min out epochs is 50.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The minimum out epochs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-min-out-epochs.php
	 * @see fann_set_cascade_min_out_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_min_out_epochs($ann): int {}

	/**
	 * Returns the number of candidate groups
	 * <p>The number of candidate groups is the number of groups of identical candidates which will be used during training.</p><p>This number can be used to have more candidates without having to define new parameters for the candidates.</p><p>See <code>fann_get_cascade_num_candidates()</code> for a description of which candidate neurons will be generated by this parameter.</p><p>The default number of candidate groups is 2.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of candidate groups, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-num-candidate-groups.php
	 * @see fann_set_cascade_num_candidate_groups()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_num_candidate_groups($ann): int {}

	/**
	 * Returns the number of candidates used during training
	 * <p>The number of candidates used during training (calculated by multiplying <code>fann_get_cascade_activation_functions_count()</code>, <code>fann_get_cascade_activation_steepnesses_count()</code> and <code>fann_get_cascade_num_candidate_groups()</code>).</p><p>The actual candidates is defined by the <code>fann_get_cascade_activation_functions()</code> and <code>fann_get_cascade_activation_steepnesses()</code> arrays. These arrays define the activation functions and activation steepnesses used for the candidate neurons. If there are 2 activation functions in the activation function array and 3 steepnesses in the steepness array, then there will be 2x3=6 different candidates which will be trained. These 6 different candidates can be copied into several candidate groups, where the only difference between these groups is the initial weights. If the number of groups is set to 2, then the number of candidate neurons will be 2x3x2=12. The number of candidate groups is defined by <code>fann_set_cascade_num_candidate_groups()</code>.</p><p>The default number of candidates is 6x4x2 = 48</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of candidates used during training, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-num-candidates.php
	 * @see fann_get_cascade_activation_functions(), fann_get_cascade_activation_functions_count(), fann_get_cascade_activation_steepnesses(), fann_get_cascade_activation_steepnesses_count(), fann_get_cascade_num_candidate_groups()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_num_candidates($ann): int {}

	/**
	 * Returns the cascade output change fraction
	 * <p>The cascade output change fraction is a number between 0 and 1 determining how large a fraction of the <code>fann_get_MSE()</code> value should change within <code>fann_get_cascade_output_stagnation_epochs()</code> during training of the output connections, in order for the training not to stagnate. If the training stagnates, the training of the output connections will be ended and new candidates will be prepared.</p><p>It means that if the MSE does not change by a fraction of <b>fann_get_cascade_output_change_fraction()</b> during a period of <code>fann_get_cascade_output_stagnation_epochs()</code>, the training of the output connections is stopped because the training has stagnated.</p><p>If the cascade output change fraction is low, the output connections will be trained more and if the fraction is high, they will be trained less.</p><p>The default cascade output change fraction is 0.01, which is equalent to a 1% change in MSE.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The cascade output change fraction, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-output-change-fraction.php
	 * @see fann_set_cascade_output_change_fraction(), fann_get_MSE(), fann_get_cascade_output_stagnation_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_output_change_fraction($ann): float {}

	/**
	 * Returns the number of cascade output stagnation epochs
	 * <p>The number of cascade output stagnation epochs determines the number of epochs training is allowed to continue without changing the MSE by a fraction of <code>fann_get_cascade_output_change_fraction()</code>.</p><p>See more info about this parameter in <code>fann_get_cascade_output_change_fraction()</code>.</p><p>The default number of cascade output stagnation epochs is 12.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of cascade output stagnation epochs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-output-stagnation-epochs.php
	 * @see fann_set_cascade_output_stagnation_epochs(), fann_get_cascade_output_change_fraction()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_output_stagnation_epochs($ann): int {}

	/**
	 * Returns the weight multiplier
	 * <p>The weight multiplier is a parameter which is used to multiply the weights from the candidate neuron before adding the neuron to the neural network. This parameter is usually between 0 and 1, and is used to make the training a bit less aggressive.</p><p>The default weight multiplier is 0.4.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The weight multiplier, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-cascade-weight-multiplier.php
	 * @see fann_set_cascade_weight_multiplier()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_cascade_weight_multiplier($ann): float {}

	/**
	 * Get connections in the network
	 * <p>Get connections in the network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return array <p>An array of connections in the network</p>
	 * @link https://php.net/manual/en/function.fann-get-connection-array.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_connection_array($ann): array {}

	/**
	 * Get the connection rate used when the network was created
	 * <p>Get the connection rate used when the network was created.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The connection rate used when the network was created, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-connection-rate.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_connection_rate($ann): float {}

	/**
	 * Returns the last error number
	 * <p>Returns the last error number.</p>
	 * @param resource $errdat <p>Either neural network <code>resource</code> or neural network trainining data <code>resource</code>.</p>
	 * @return int <p>The error number, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-errno.php
	 * @see fann_reset_errno(), fann_get_errstr()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_errno($errdat): int {}

	/**
	 * Returns the last errstr
	 * <p>Returns the last errstr.</p>
	 * @param resource $errdat <p>Either neural network <code>resource</code> or neural network trainining data <code>resource</code>.</p>
	 * @return string <p>The last error string, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-errstr.php
	 * @see fann_reset_errstr(), fann_get_errno()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_errstr($errdat): string {}

	/**
	 * Get the number of neurons in each layer in the network
	 * <p>Get the number of neurons in each layer in the neural network.</p><p>Bias is not included so the layers match the fann_create functions.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return array <p>An array of numbers of neurons in each leayer</p>
	 * @link https://php.net/manual/en/function.fann-get-layer-array.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_layer_array($ann): array {}

	/**
	 * Returns the learning momentum
	 * <p>The learning momentum can be used to speed up <b><code>FANN_TRAIN_INCREMENTAL</code></b> training. A too high momentum will however not benefit training. Setting momentum to 0 will be the same as not using the momentum parameter. The recommended value of this parameter is between 0.0 and 1.0.</p><p>The default momentum is 0.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p><p>The learning momentum, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-learning-momentum.php
	 * @see fann_set_learning_momentum(), fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_learning_momentum($ann): float {}

	/**
	 * Returns the learning rate
	 * <p>The learning rate is used to determine how aggressive training should be for some of the training algorithms (<b><code>FANN_TRAIN_INCREMENTAL</code></b>, <b><code>FANN_TRAIN_BATCH</code></b>, <b><code>FANN_TRAIN_QUICKPROP</code></b>). Do however note that it is not used in <b><code>FANN_TRAIN_RPROP</code></b>.</p><p>The default learning rate is 0.7.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The learning rate, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-learning-rate.php
	 * @see fann_set_learning_rate(), fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_learning_rate($ann): float {}

	/**
	 * Reads the mean square error from the network
	 * <p>Reads the mean square error from the network.</p><p>Reads the mean square error from the network. This value is calculated during training or testing and can therefore sometimes be a bit off if the weights have been changed since the last calculation of the value.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The mean square error, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-mse.php
	 * @see fann_test_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_MSE($ann): float {}

	/**
	 * Get the type of neural network it was created as
	 * <p>Get the type of neural network it was created as.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>Network type constant, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-network-type.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_network_type($ann): int {}

	/**
	 * Get the number of input neurons
	 * <p>Get the number of input neurons.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>Number of input neurons, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/function.fann-get-num-input.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_num_input($ann): int {}

	/**
	 * Get the number of layers in the neural network
	 * <p>Get the number of layers in the neural network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The number of leayers in the neural network, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-num-layers.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_num_layers($ann): int {}

	/**
	 * Get the number of output neurons
	 * <p>Get the number of output neurons.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>Number of output neurons, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/function.fann-get-num-output.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_num_output($ann): int {}

	/**
	 * Returns the decay which is a factor that weights should decrease in each iteration during quickprop training
	 * <p>The decay is a small negative valued number which is a factor that the weights should decrease in each iteration during quickprop training. This is used to make sure that the weights do not become too high during training.</p><p>The default decay is -0.0001.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The decay, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-quickprop-decay.php
	 * @see fann_set_quickprop_decay()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_quickprop_decay($ann): float {}

	/**
	 * Returns the mu factor
	 * <p>The mu factor is used to increase and decrease the step-size during quickprop training. The mu factor should always be above 1, since it would otherwise decrease the step-size when it was suppose to increase it.</p><p>The default mu factor is 1.75.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The mu factor, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-quickprop-mu.php
	 * @see fann_set_quickprop_mu()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_quickprop_mu($ann): float {}

	/**
	 * Returns the increase factor used during RPROP training
	 * <p>The decrease factor is a value smaller than 1, which is used to decrease the step-size during RPROP training.</p><p>The default decrease factor is 0.5.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The decrease factor, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-rprop-decrease-factor.php
	 * @see fann_set_rprop_decrease_factor()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_rprop_decrease_factor($ann): float {}

	/**
	 * Returns the maximum step-size
	 * <p>The maximum step-size is a positive number determining how large the maximum step-size may be.</p><p>The default delta max is 50.0.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The maximum step-size, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-rprop-delta-max.php
	 * @see fann_set_rprop_delta_max(), fann_get_rprop_delta_min()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_rprop_delta_max($ann): float {}

	/**
	 * Returns the minimum step-size
	 * <p>The minimum step-size is a small positive number determining how small the minimum step-size may be.</p><p>The default value delta min is 0.0.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The minimum step-size, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-rprop-delta-min.php
	 * @see fann_set_rprop_delta_min()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_rprop_delta_min($ann): float {}

	/**
	 * Returns the initial step-size
	 * <p>The initial step-size is a positive number determining the initial step size.</p><p>The default delta zero is 0.1.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The initial step-size, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-rprop-delta-zero.php
	 * @see fann_set_rprop_delta_zero(), fann_get_rprop_delta_min(), fann_get_rprop_delta_max()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_rprop_delta_zero($ann): int {}

	/**
	 * Returns the increase factor used during RPROP training
	 * <p>The increase factor is a value larger than 1, which is used to increase the step-size during RPROP training.</p><p>The default increase factor is 1.2.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The increase factor, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-rprop-increase-factor.php
	 * @see fann_set_rprop_increase_factor()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_rprop_increase_factor($ann): float {}

	/**
	 * Returns the sarprop step error shift
	 * <p>Returns the sarprop step error shift.</p><p>The default step error shift is 1.385.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The sarprop step error shift , or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-sarprop-step-error-shift.php
	 * @see fann_set_sarprop_step_error_shift()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_sarprop_step_error_shift($ann): float {}

	/**
	 * Returns the sarprop step error threshold factor
	 * <p>The sarprop step error threshold factor.</p><p>The default factor is 0.1.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The sarprop step error threshold factor, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-sarprop-step-error-threshold-factor.php
	 * @see fann_set_sarprop_step_error_threshold_factor()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_sarprop_step_error_threshold_factor($ann): float {}

	/**
	 * Returns the sarprop temperature
	 * <p>Returns the sarprop temperature.</p><p>The default temperature is 0.015.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The sarprop temperature, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-sarprop-temperature.php
	 * @see fann_set_sarprop_temperature()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_sarprop_temperature($ann): float {}

	/**
	 * Returns the sarprop weight decay shift
	 * <p>The sarprop weight decay shift.</p><p>The default delta max is -6.644.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return float <p>The sarprop weight decay shift, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-sarprop-weight-decay-shift.php
	 * @see fann_set_sarprop_weight_decay_shift()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_sarprop_weight_decay_shift($ann): float {}

	/**
	 * Get the total number of connections in the entire network
	 * <p>Get the total number of connections in the entire network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>Total number of connections in the entire network, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/function.fann-get-total-connections.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_total_connections($ann): int {}

	/**
	 * Get the total number of neurons in the entire network
	 * <p>Get the total number of neurons in the entire network. This number does also include the bias neurons, so a 2-4-2 network has 2+4+2 +2(bias) = 10 neurons.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>Total number of neurons in the entire network, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-total-neurons.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_total_neurons($ann): int {}

	/**
	 * Returns the error function used during training
	 * <p>Returns the error function used during training.</p><p>The error functions are described further in error functions constants.</p><p>The default error function is <b><code>FANN_ERRORFUNC_TANH</code></b>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The error function constant, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-train-error-function.php
	 * @see fann_set_train_error_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_train_error_function($ann): int {}

	/**
	 * Returns the stop function used during training
	 * <p>Returns the stop function used during training.</p><p>The stop functions are described further in stop functions constants.</p><p>The default stop function is <b><code>FANN_STOPFUNC_MSE</code></b>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>The stop function constant, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-train-stop-function.php
	 * @see fann_set_train_stop_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_train_stop_function($ann): int {}

	/**
	 * Returns the training algorithm
	 * <p>Returns the training algorithm. This training algorithm is used by <code>fann_train_on_data()</code> and associated functions.</p><p>Note that this algorithm is also used during <code>fann_cascadetrain_on_data()</code>, although only <b><code>FANN_TRAIN_RPROP</code></b> and <b><code>FANN_TRAIN_QUICKPROP</code></b> is allowed during cascade training.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @return int <p>Training algorithm constant, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-get-training-algorithm.php
	 * @see fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_get_training_algorithm($ann): int {}

	/**
	 * Initialize the weights using Widrow + Nguyen’s algorithm
	 * <p>Initialize the weights using Widrow + Nguyen&rsquo;s algorithm.</p><p>This function behaves similarly to <code>fann_randomize_weights()</code>. It will use the algorithm developed by Derrick Nguyen and Bernard Widrow to set the weights in such a way as to speed up training. This technique is not always successful, and in some cases can be less efficient than a purely random initialization.</p><p>The algorithm requires access to the range of the input data (for example largest and smallest input), and therefore accepts a second argument, data, which is the training data that will be used to train the network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-init-weights.php
	 * @see fann_randomize_weights(), fann_read_train_from_file()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_init_weights($ann, $train_data): bool {}

	/**
	 * Returns the number of training patterns in the train data
	 * <p>Returns the number of training patterns in the train data <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @return int <p>Number of elements in the train data <code>resource</code>, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-length-train-data.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_length_train_data($data): int {}

	/**
	 * Merges the train data
	 * <p>Merges the data from data1 and data2 into a new train data <code>resource</code>.</p>
	 * @param resource $data1 <p>Neural network training data <code>resource</code>.</p>
	 * @param resource $data2 <p>Neural network training data <code>resource</code>.</p>
	 * @return resource <p>New merged train data <code>resource</code>, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-merge-train-data.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_merge_train_data($data1, $data2) {}

	/**
	 * Returns the number of inputs in each of the training patterns in the train data
	 * <p>Returns the number of inputs in each of the training patterns in the train data <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @return int <p>The number of inputs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-num-input-train-data.php
	 * @see fann_length_train_data(), fann_num_output_train_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_num_input_train_data($data): int {}

	/**
	 * Returns the number of outputs in each of the training patterns in the train data
	 * <p>Returns the number of outputs in each of the training patterns in the train data <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @return int <p>The number of outputs, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-num-output-train-data.php
	 * @see fann_length_train_data(), fann_num_input_train_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_num_output_train_data($data): int {}

	/**
	 * Prints the error string
	 * <p>Prints the error string.</p>
	 * @param resource $errdat <p>Either neural network <code>resource</code> or neural network trainining data <code>resource</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.fann-print-error.php
	 * @see fann_get_errstr()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_print_error($errdat): void {}

	/**
	 * Give each connection a random weight between min_weight and max_weight
	 * <p>Give each connection a random weight between <code>min_weight</code> and <code>max_weight</code></p><p>From the beginning the weights are random between -0.1 and 0.1.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $min_weight <p>Minimum weight value</p>
	 * @param float $max_weight <p>Maximum weight value</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-randomize-weights.php
	 * @see fann_init_weights()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_randomize_weights($ann, float $min_weight, float $max_weight): bool {}

	/**
	 * Reads a file that stores training data
	 * <p>Reads a file that stores training data.</p>
	 * @param string $filename <p>The input file in the following format:</p>  <pre>num_train_data num_input num_output inputdata separated by space outputdata separated by space . . . inputdata separated by space outputdata separated by space</pre>
	 * @return resource <p>Returns a train data <code>resource</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-read-train-from-file.php
	 * @see fann_train_on_data(), fann_destroy_train(), fann_save_train()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_read_train_from_file(string $filename) {}

	/**
	 * Resets the last error number
	 * <p>Resets the last error number.</p>
	 * @param resource $errdat <p>Either neural network <code>resource</code> or neural network trainining data <code>resource</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.fann-reset-errno.php
	 * @see fann_get_errno(), fann_reset_errstr()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_reset_errno($errdat): void {}

	/**
	 * Resets the last error string
	 * <p>Resets the last error string.</p>
	 * @param resource $errdat <p>Either neural network <code>resource</code> or neural network trainining data <code>resource</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.fann-reset-errstr.php
	 * @see fann_get_errstr(), fann_reset_errno()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_reset_errstr($errdat): void {}

	/**
	 * Resets the mean square error from the network
	 * <p>Resets the mean square error from the network.</p><p>This function also resets the number of bits that fail.</p>
	 * @param string $ann <p>Neural network <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-reset-mse.php
	 * @see fann_get_MSE(), fann_get_bit_fail(), fann_get_bit_fail_limit()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_reset_MSE(string $ann): bool {}

	/**
	 * Will run input through the neural network
	 * <p>Will run input through the neural network, returning an array of outputs, the number of which being equal to the number of neurons in the output layer.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $input <p>Array of input values</p>
	 * @return array <p>Array of output values, or <b><code>false</code></b> on error</p>
	 * @link https://php.net/manual/en/function.fann-run.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_run($ann, array $input): array {}

	/**
	 * Saves the entire network to a configuration file
	 * <p>Saves the entire network to a configuration file.</p><p>The configuration file contains all information about the neural network and enables <code>fann_create_from_file()</code> to create an exact copy of the neural network and all of the parameters associated with the neural network.</p><p>These three parameters (<code>fann_set_callback()</code>, <code>fann_set_error_log()</code>, <b>fann_set_user_data()</b>) are NOT saved to the file because they cannot safely be ported to a different location. Also temporary parameters generated during training like <code>fann_get_MSE()</code> is not saved.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param string $configuration_file <p>The configuration file path.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-save.php
	 * @see fann_create_from_file()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_save($ann, string $configuration_file): bool {}

	/**
	 * Save the training structure to a file
	 * <p>Save the training data to a file, with the format as specified in <code>fann_read_train_from_file()</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @param string $file_name <p>The file name of the file where training data is saved to.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-save-train.php
	 * @see fann_read_train_from_file()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_save_train($data, string $file_name): bool {}

	/**
	 * Scale data in input vector before feed it to ann based on previously calculated parameters
	 * <p>Scale data in input vector before feed it to ann based on previously calculated parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $input_vector <p>Input vector that will be scaled</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-scale-input.php
	 * @see fann_descale_input(), fann_scale_output()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_scale_input($ann, array $input_vector): bool {}

	/**
	 * Scales the inputs in the training data to the specified range
	 * <p>Scales the inputs in the training data to the specified range.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @param float $new_min <p>New minimum after scaling inputs in training data.</p>
	 * @param float $new_max <p>New maximum after scaling inputs in training data.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-scale-input-train-data.php
	 * @see fann_scale_output_train_data(), fann_scale_train_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_scale_input_train_data($train_data, float $new_min, float $new_max): bool {}

	/**
	 * Scale data in output vector before feed it to ann based on previously calculated parameters
	 * <p>Scale data in output vector before feed it to ann based on previously calculated parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $output_vector <p>Output vector that will be scaled</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-scale-output.php
	 * @see fann_descale_output(), fann_scale_input()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_scale_output($ann, array $output_vector): bool {}

	/**
	 * Scales the outputs in the training data to the specified range
	 * <p>Scales the outputs in the training data to the specified range.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @param float $new_min <p>New minimum after scaling outputs in training data.</p>
	 * @param float $new_max <p>New maximum after scaling outputs in training data.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-scale-output-train-data.php
	 * @see fann_scale_input_train_data(), fann_scale_train_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_scale_output_train_data($train_data, float $new_min, float $new_max): bool {}

	/**
	 * Scale input and output data based on previously calculated parameters
	 * <p>Scale input and output data based on previously calculated parameters.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-scale-train.php
	 * @see fann_descale_train(), fann_set_scaling_params()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_scale_train($ann, $train_data): bool {}

	/**
	 * Scales the inputs and outputs in the training data to the specified range
	 * <p>Scales the inputs and outputs in the training data to the specified range.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @param float $new_min <p>New minimum after scaling inputs and outputs in training data.</p>
	 * @param float $new_max <p>New maximum after scaling inputs and outputs in training data.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-scale-train-data.php
	 * @see fann_scale_output_train_data(), fann_scale_input_train_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_scale_train_data($train_data, float $new_min, float $new_max): bool {}

	/**
	 * Sets the activation function for supplied neuron and layer
	 * <p>Set the activation function for neuron number <code>neuron</code> in layer number <code>layer</code>, counting the input layer as layer 0.</p><p>It is not possible to set activation functions for the neurons in the input layer.</p><p>When choosing an activation function it is important to note that the activation functions have different range. <b><code>FANN_SIGMOID</code></b> is e.g. in the 0 - 1 range while <b><code>FANN_SIGMOID_SYMMETRIC</code></b> is in the -1 - 1 range and <b><code>FANN_LINEAR</code></b> is unbound.</p><p>The supplied activation_function value must be one of the activation functions constants.</p><p>The return value is one of the activation functions constants.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $activation_function <p>The activation functions constant.</p>
	 * @param int $layer <p>Layer number.</p>
	 * @param int $neuron <p>Neuron number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-function.php
	 * @see fann_set_activation_function_layer(), fann_set_activation_function_hidden(), fann_set_activation_function_output(), fann_set_activation_steepness(), fann_get_activation_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_function($ann, int $activation_function, int $layer, int $neuron): bool {}

	/**
	 * Sets the activation function for all of the hidden layers
	 * <p>Sets the activation function for all of the hidden layers.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $activation_function <p>The activation functions constant.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-function-hidden.php
	 * @see fann_set_activation_function(), fann_set_activation_function_layer(), fann_set_activation_function_output(), fann_set_activation_steepness()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_function_hidden($ann, int $activation_function): bool {}

	/**
	 * Sets the activation function for all the neurons in the supplied layer
	 * <p>Set the activation function for all the neurons in the layer number <code>layer</code>, counting the input layer as layer 0.</p><p>It is not possible to set activation functions for the neurons in the input layer.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $activation_function <p>The activation functions constant.</p>
	 * @param int $layer <p>Layer number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-function-layer.php
	 * @see fann_set_activation_function(), fann_set_activation_function_hidden(), fann_set_activation_function_output(), fann_set_activation_steepness()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_function_layer($ann, int $activation_function, int $layer): bool {}

	/**
	 * Sets the activation function for the output layer
	 * <p>Sets the activation function for the output layer.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $activation_function <p>The activation functions constant.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-function-output.php
	 * @see fann_set_activation_function(), fann_set_activation_function_layer(), fann_set_activation_function_hidden(), fann_set_activation_steepness()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_function_output($ann, int $activation_function): bool {}

	/**
	 * Sets the activation steepness for supplied neuron and layer number
	 * <p>Set the activation steepness for neuron number <code>neuron</code> in layer number <code>layer</code>, counting the input layer as layer 0.</p><p>It is not possible to set activation steepness for the neurons in the input layer.</p><p>The steepness of an activation function says something about how fast the activation function goes from the minimum to the maximum. A high value for the activation function will also give a more aggressive training.</p><p>When training neural networks where the output values should be at the extremes (usually 0 and 1, depending on the activation function), a steep activation function can be used (e.g. 1.0).</p><p>The default activation steepness is 0.5.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $activation_steepness <p>The activation steepness.</p>
	 * @param int $layer <p>Layer number.</p>
	 * @param int $neuron <p>Neuron number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-steepness.php
	 * @see fann_set_activation_steepness_layer(), fann_set_activation_steepness_hidden(), fann_set_activation_steepness_output(), fann_get_activation_steepness(), fann_set_activation_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_steepness($ann, float $activation_steepness, int $layer, int $neuron): bool {}

	/**
	 * Sets the steepness of the activation steepness for all neurons in the all hidden layers
	 * <p>Sets the steepness of the activation steepness for all neurons in the all hidden layers.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $activation_steepness <p>The activation steepness.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-steepness-hidden.php
	 * @see fann_set_activation_steepness(), fann_set_activation_steepness_layer(), fann_set_activation_steepness_output(), fann_get_activation_steepness(), fann_set_activation_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_steepness_hidden($ann, float $activation_steepness): bool {}

	/**
	 * Sets the activation steepness for all of the neurons in the supplied layer number
	 * <p>Set the activation steepness for all of the neurons in layer number <code>layer</code>, counting the input layer as layer 0.</p><p>It is not possible to set activation steepness for the neurons in the input layer.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $activation_steepness <p>The activation steepness.</p>
	 * @param int $layer <p>Layer number.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-steepness-layer.php
	 * @see fann_set_activation_steepness(), fann_set_activation_steepness_hidden(), fann_set_activation_steepness_output(), fann_get_activation_steepness(), fann_set_activation_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_steepness_layer($ann, float $activation_steepness, int $layer): bool {}

	/**
	 * Sets the steepness of the activation steepness in the output layer
	 * <p>Sets the steepness of the activation steepness in the output layer.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $activation_steepness <p>The activation steepness.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-activation-steepness-output.php
	 * @see fann_set_activation_steepness(), fann_set_activation_steepness_layer(), fann_set_activation_steepness_hidden(), fann_get_activation_steepness(), fann_set_activation_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_activation_steepness_output($ann, float $activation_steepness): bool {}

	/**
	 * Set the bit fail limit used during training
	 * <p>Set the bit fail limit used during training.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $bit_fail_limit <p>The bit fail limit.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-bit-fail-limit.php
	 * @see fann_get_bit_fail_limit()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_bit_fail_limit($ann, float $bit_fail_limit): bool {}

	/**
	 * Sets the callback function for use during training
	 * <p>Sets the callback function for use during training. It means that it is called from <code>fann_train_on_data()</code> or <code>fann_train_on_file()</code>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param callable $callback <p>The supplied callback function takes following parameters:</p><ul> <li><code>ann</code> - The neural network <code>resource</code></li> <li><code>train</code> - The train data <code>resource</code> or <b><code>null</code></b> if called from <code>fann_train_on_file()</code></li> <li><code>max_epochs</code> - The maximum number of epochs the training should continue</li> <li><code>epochs_between_reports</code> - The number of epochs between calling this function</li> <li><code>desired_error</code> - The desired <code>fann_get_MSE()</code> or <code>fann_get_bit_fail()</code>, depending on the stop function chosen by <code>fann_set_train_stop_function()</code></li> <li><code>epochs</code> - The current epoch</li> </ul> <p>The callback should return <b><code>true</code></b>. If it returns <b><code>false</code></b>, the training will terminate.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-callback.php
	 * @see fann_train_on_data(), fann_train_on_file()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_callback($ann, callable $callback): bool {}

	/**
	 * Sets the array of cascade candidate activation functions
	 * <p>Sets the array of cascade candidate activation functions.</p><p>See <code>fann_get_cascade_num_candidates()</code> for a description of which candidate neurons will be generated by this array.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $cascade_activation_functions <p>The array of cascade candidate activation functions.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-activation-functions.php
	 * @see fann_get_cascade_activation_functions_count()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_activation_functions($ann, array $cascade_activation_functions): bool {}

	/**
	 * Sets the array of cascade candidate activation steepnesses
	 * <p>Sets the array of cascade candidate activation steepnesses.</p><p>See <code>fann_get_cascade_num_candidates()</code> for a description of which candidate neurons will be generated by this array.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $cascade_activation_steepnesses_count <p>The array of cascade candidate activation steepnesses.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-activation-steepnesses.php
	 * @see fann_get_cascade_activation_steepnesses(), fann_get_cascade_activation_steepnesses_count()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_activation_steepnesses($ann, array $cascade_activation_steepnesses_count): bool {}

	/**
	 * Sets the cascade candidate change fraction
	 * <p>Sets the cascade candidate change fraction.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $cascade_candidate_change_fraction <p>The cascade candidate change fraction.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-candidate-change-fraction.php
	 * @see fann_get_cascade_candidate_change_fraction()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_candidate_change_fraction($ann, float $cascade_candidate_change_fraction): bool {}

	/**
	 * Sets the candidate limit
	 * <p>Sets the candidate limit.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $cascade_candidate_limit <p>The candidate limit.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-candidate-limit.php
	 * @see fann_get_cascade_candidate_limit()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_candidate_limit($ann, float $cascade_candidate_limit): bool {}

	/**
	 * Sets the number of cascade candidate stagnation epochs
	 * <p>Sets the number of cascade candidate stagnation epochs.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_candidate_stagnation_epochs <p>The number of cascade candidate stagnation epochs.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-candidate-stagnation-epochs.php
	 * @see fann_get_cascade_candidate_stagnation_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_candidate_stagnation_epochs($ann, int $cascade_candidate_stagnation_epochs): bool {}

	/**
	 * Sets the max candidate epochs
	 * <p>Sets the max candidate epochs.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_max_cand_epochs <p>The max candidate epochs.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-max-cand-epochs.php
	 * @see fann_get_cascade_max_cand_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_max_cand_epochs($ann, int $cascade_max_cand_epochs): bool {}

	/**
	 * Sets the maximum out epochs
	 * <p>Sets the maximum out epochs.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_max_out_epochs <p>The maximum out epochs.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-max-out-epochs.php
	 * @see fann_get_cascade_max_out_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_max_out_epochs($ann, int $cascade_max_out_epochs): bool {}

	/**
	 * Sets the min candidate epochs
	 * <p>Sets the min candidate epochs.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_min_cand_epochs <p>The minimum candidate epochs.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-min-cand-epochs.php
	 * @see fann_get_cascade_min_cand_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_min_cand_epochs($ann, int $cascade_min_cand_epochs): bool {}

	/**
	 * Sets the minimum out epochs
	 * <p>Sets the minimum out epochs.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_min_out_epochs <p>The minimum out epochs.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-min-out-epochs.php
	 * @see fann_get_cascade_min_out_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_min_out_epochs($ann, int $cascade_min_out_epochs): bool {}

	/**
	 * Sets the number of candidate groups
	 * <p>Sets the number of candidate groups.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_num_candidate_groups <p>The number of candidate groups.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-num-candidate-groups.php
	 * @see fann_get_cascade_num_candidate_groups()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_num_candidate_groups($ann, int $cascade_num_candidate_groups): bool {}

	/**
	 * Sets the cascade output change fraction
	 * <p>Sets the cascade output change fraction.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $cascade_output_change_fraction <p>The cascade output change fraction.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-output-change-fraction.php
	 * @see fann_get_cascade_output_change_fraction()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_output_change_fraction($ann, float $cascade_output_change_fraction): bool {}

	/**
	 * Sets the number of cascade output stagnation epochs
	 * <p>Sets the number of cascade output stagnation epochs.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $cascade_output_stagnation_epochs <p>The number of cascade output stagnation epochs.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-output-stagnation-epochs.php
	 * @see fann_get_cascade_output_stagnation_epochs()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_output_stagnation_epochs($ann, int $cascade_output_stagnation_epochs): bool {}

	/**
	 * Sets the weight multiplier
	 * <p>Sets the weight multiplier.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $cascade_weight_multiplier <p>The weight multiplier.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-cascade-weight-multiplier.php
	 * @see fann_get_cascade_weight_multiplier()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_cascade_weight_multiplier($ann, float $cascade_weight_multiplier): bool {}

	/**
	 * Sets where the errors are logged to
	 * <p>Sets where the errors are logged to.</p>
	 * @param resource $errdat <p>Either neural network <code>resource</code> or neural network trainining data <code>resource</code>.</p>
	 * @param string $log_file <p>The log file path.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.fann-set-error-log.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_error_log($errdat, string $log_file): void {}

	/**
	 * Calculate input scaling parameters for future use based on training data
	 * <p>Calculate input scaling parameters for future use based on training data.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @param float $new_input_min <p>The desired lower bound in input data after scaling (not strictly followed)</p>
	 * @param float $new_input_max <p>The desired upper bound in input data after scaling (not strictly followed)</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-input-scaling-params.php
	 * @see fann_set_output_scaling_params()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_input_scaling_params($ann, $train_data, float $new_input_min, float $new_input_max): bool {}

	/**
	 * Sets the learning momentum
	 * <p>Sets the learning momentum.</p><p>More info available in <code>fann_get_learning_momentum()</code>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $learning_momentum <p>The learning momentum.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-learning-momentum.php
	 * @see fann_get_learning_momentum(), fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_learning_momentum($ann, float $learning_momentum): bool {}

	/**
	 * Sets the learning rate
	 * <p>Sets the learning rate.</p><p>More info available in <code>fann_get_learning_rate()</code>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $learning_rate <p>The learning rate.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-learning-rate.php
	 * @see fann_get_learning_rate(), fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_learning_rate($ann, float $learning_rate): bool {}

	/**
	 * Calculate output scaling parameters for future use based on training data
	 * <p>Calculate output scaling parameters for future use based on training data.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @param float $new_output_min <p>The desired lower bound in output data after scaling (not strictly followed)</p>
	 * @param float $new_output_max <p>The desired upper bound in output data after scaling (not strictly followed)</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-output-scaling-params.php
	 * @see fann_set_input_scaling_params()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_output_scaling_params($ann, $train_data, float $new_output_min, float $new_output_max): bool {}

	/**
	 * Sets the quickprop decay factor
	 * <p>Sets the quickprop decay factor.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $quickprop_decay <p>The quickprop decay factor.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-quickprop-decay.php
	 * @see fann_get_quickprop_decay()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_quickprop_decay($ann, float $quickprop_decay): bool {}

	/**
	 * Sets the quickprop mu factor
	 * <p>Sets the quickprop mu factor.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $quickprop_mu <p>The mu factor.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-quickprop-mu.php
	 * @see fann_get_quickprop_mu()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_quickprop_mu($ann, float $quickprop_mu): bool {}

	/**
	 * Sets the decrease factor used during RPROP training
	 * <p>Sets the decrease factor used during RPROP training.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $rprop_decrease_factor <p>The decrease factor.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-rprop-decrease-factor.php
	 * @see fann_get_rprop_decrease_factor()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_rprop_decrease_factor($ann, float $rprop_decrease_factor): bool {}

	/**
	 * Sets the maximum step-size
	 * <p>The maximum step-size is a positive number determining how large the maximum step-size may be.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $rprop_delta_max <p>The maximum step-size.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-rprop-delta-max.php
	 * @see fann_get_rprop_delta_max(), fann_get_rprop_delta_min()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_rprop_delta_max($ann, float $rprop_delta_max): bool {}

	/**
	 * Sets the minimum step-size
	 * <p>The minimum step-size is a small positive number determining how small the minimum step-size may be.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $rprop_delta_min <p>The minimum step-size.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-rprop-delta-min.php
	 * @see fann_get_rprop_delta_min()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_rprop_delta_min($ann, float $rprop_delta_min): bool {}

	/**
	 * Sets the initial step-size
	 * <p>The initial step-size is a positive number determining the initial step size.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $rprop_delta_zero <p>The initial step-size.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-rprop-delta-zero.php
	 * @see fann_get_rprop_delta_zero(), fann_get_rprop_delta_min(), fann_get_rprop_delta_max()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_rprop_delta_zero($ann, float $rprop_delta_zero): bool {}

	/**
	 * Sets the increase factor used during RPROP training
	 * <p>Sets the increase factor used during RPROP training.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $rprop_increase_factor <p>The increase factor.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-rprop-increase-factor.php
	 * @see fann_get_rprop_increase_factor()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_rprop_increase_factor($ann, float $rprop_increase_factor): bool {}

	/**
	 * Sets the sarprop step error shift
	 * <p>Sets the sarprop step error shift.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $sarprop_step_error_shift <p>The sarprop step error shift.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-sarprop-step-error-shift.php
	 * @see fann_get_sarprop_step_error_shift()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_sarprop_step_error_shift($ann, float $sarprop_step_error_shift): bool {}

	/**
	 * Sets the sarprop step error threshold factor
	 * <p>Sets the sarprop step error threshold factor.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $sarprop_step_error_threshold_factor <p>The sarprop step error threshold factor.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-sarprop-step-error-threshold-factor.php
	 * @see fann_get_sarprop_step_error_threshold_factor()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_sarprop_step_error_threshold_factor($ann, float $sarprop_step_error_threshold_factor): bool {}

	/**
	 * Sets the sarprop temperature
	 * <p>Sets the sarprop temperature.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $sarprop_temperature <p>The sarprop temperature.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-sarprop-temperature.php
	 * @see fann_get_sarprop_temperature()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_sarprop_temperature($ann, float $sarprop_temperature): bool {}

	/**
	 * Sets the sarprop weight decay shift
	 * <p>Sets the sarprop weight decay shift.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param float $sarprop_weight_decay_shift <p>The sarprop weight decay shift.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-sarprop-weight-decay-shift.php
	 * @see fann_get_sarprop_weight_decay_shift()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_sarprop_weight_decay_shift($ann, float $sarprop_weight_decay_shift): bool {}

	/**
	 * Calculate input and output scaling parameters for future use based on training data
	 * <p>Calculate input and output scaling parameters for future use based on training data.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @param float $new_input_min <p>The desired lower bound in input data after scaling (not strictly followed)</p>
	 * @param float $new_input_max <p>The desired upper bound in input data after scaling (not strictly followed)</p>
	 * @param float $new_output_min <p>The desired lower bound in output data after scaling (not strictly followed)</p>
	 * @param float $new_output_max <p>The desired upper bound in output data after scaling (not strictly followed)</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-scaling-params.php
	 * @see fann_set_input_scaling_params(), fann_set_output_scaling_params()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_scaling_params($ann, $train_data, float $new_input_min, float $new_input_max, float $new_output_min, float $new_output_max): bool {}

	/**
	 * Sets the error function used during training
	 * <p>Sets the error function used during training.</p><p>The error functions are described further in error functions constants.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $error_function <p>The error function constant</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-train-error-function.php
	 * @see fann_get_train_error_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_train_error_function($ann, int $error_function): bool {}

	/**
	 * Sets the stop function used during training
	 * <p>Sets the stop function used during training.</p><p>The stop functions are described further in stop functions constants.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $stop_function <p>The stop function constant.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-train-stop-function.php
	 * @see fann_get_train_stop_function()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_train_stop_function($ann, int $stop_function): bool {}

	/**
	 * Sets the training algorithm
	 * <p>Sets the training algorithm.</p><p>More info available in <code>fann_get_training_algorithm()</code>.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $training_algorithm <p>Training algorithm constant</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-training-algorithm.php
	 * @see fann_get_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_training_algorithm($ann, int $training_algorithm): bool {}

	/**
	 * Set a connection in the network
	 * <p>Set a connections in the network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param int $from_neuron <p>The neuron where the connection starts</p>
	 * @param int $to_neuron <p>The neuron where the connection ends</p>
	 * @param float $weight <p>Connection weight</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-weight.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_weight($ann, int $from_neuron, int $to_neuron, float $weight): bool {}

	/**
	 * Set connections in the network
	 * <p>Set connections in the network.</p><p>Only the weights can be changed, connections and weights are ignored if they do not already exist in the network.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $connections <p>An array of <code>FANNConnection</code> objects</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-set-weight-array.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_set_weight_array($ann, array $connections): bool {}

	/**
	 * Shuffles training data, randomizing the order
	 * <p>Shuffles training data, randomizing the order. This is recommended for incremental training, while it have no influence during batch training.</p>
	 * @param resource $train_data <p>Neural network training data <code>resource</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-shuffle-train-data.php
	 * @since PECL fann >= 1.0.0
	 */
	function fann_shuffle_train_data($train_data): bool {}

	/**
	 * Returns an copy of a subset of the train data
	 * <p>Returns an copy of a subset of the train data <code>resource</code>, starting at position <code>pos</code> and <code>length</code> elements forward.</p><p>The <code>fann_subset_train_data(train_data, 0, fann_length_train_data(train_data))</code> do the same as <code>fann_duplicate_train_data()</code></p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @param int $pos <p>Starting position.</p>
	 * @param int $length <p>The number of copied elements.</p>
	 * @return resource <p>Returns a train data <code>resource</code> on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-subset-train-data.php
	 * @see fann_duplicate_train_data()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_subset_train_data($data, int $pos, int $length) {}

	/**
	 * Test with a set of inputs, and a set of desired outputs
	 * <p>Test with a set of inputs, and a set of desired outputs. This operation updates the mean square error, but does not change the network in any way.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $input <p>An array of inputs. This array must be exactly <code>fann_get_num_input()</code> long.</p>
	 * @param array $desired_output <p>An array of desired outputs. This array must be exactly <code>fann_get_num_output()</code> long.</p>
	 * @return array <p>Returns test outputs on success, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-test.php
	 * @see fann_test_data(), fann_train(), fann_get_num_input(), fann_get_num_output()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_test($ann, array $input, array $desired_output): array {}

	/**
	 * Test a set of training data and calculates the MSE for the training data
	 * <p>Test a set of training data and calculates the MSE for the training data.</p><p>This function updates the MSE and the bit fail values.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @return float <p>The updated MSE, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-test-data.php
	 * @see fann_train_on_data(), fann_train_epoch(), fann_get_bit_fail(), fann_get_MSE(), fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_test_data($ann, $data): float {}

	/**
	 * Train one iteration with a set of inputs, and a set of desired outputs
	 * <p>Train one iteration with a set of inputs, and a set of desired outputs. This training is always incremental training, since only one pattern is presented.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param array $input <p>An array of inputs. This array must be exactly <code>fann_get_num_input()</code> long.</p>
	 * @param array $desired_output <p>An array of desired outputs. This array must be exactly <code>fann_get_num_output()</code> long.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-train.php
	 * @see fann_train_on_data(), fann_train_epoch(), fann_get_num_input(), fann_get_num_output()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_train($ann, array $input, array $desired_output): bool {}

	/**
	 * Train one epoch with a set of training data
	 * <p>Train one epoch with the training data stored in data. One epoch is where all of the training data is considered exactly once.</p><p>This function returns the MSE error as it is calculated either before or during the actual training. This is not the actual MSE after the training epoch, but since calculating this will require to go through the entire training set once more. It is more than adequate to use this value during training.</p><p>The training algorithm used by this function is chosen by <code>fann_set_training_algorithm()</code> function.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @return float <p>The MSE, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.fann-train-epoch.php
	 * @see fann_train_on_data(), fann_test_data(), fann_get_MSE(), fann_set_training_algorithm()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_train_epoch($ann, $data): float {}

	/**
	 * Trains on an entire dataset for a period of time
	 * <p>Trains on an entire dataset for a period of time.</p><p>This training uses the training algorithm chosen by <code>fann_set_training_algorithm()</code> and the parameters set for these training algorithms.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param resource $data <p>Neural network training data <code>resource</code>.</p>
	 * @param int $max_epochs <p>The maximum number of epochs the training should continue</p>
	 * @param int $epochs_between_reports <p>The number of epochs between calling a callback function. A value of zero means that user function is not called.</p>
	 * @param float $desired_error <p>The desired <code>fann_get_MSE()</code> or <code>fann_get_bit_fail()</code>, depending on the stop function chosen by <code>fann_set_train_stop_function()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-train-on-data.php
	 * @see fann_train_on_file(), fann_train_epoch(), fann_get_bit_fail(), fann_get_MSE(), fann_set_train_stop_function(), fann_set_training_algorithm(), fann_set_callback()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_train_on_data($ann, $data, int $max_epochs, int $epochs_between_reports, float $desired_error): bool {}

	/**
	 * Trains on an entire dataset, which is read from file, for a period of time
	 * <p>Trains on an entire dataset, which is read from file, for a period of time.</p><p>This training uses the training algorithm chosen by <code>fann_set_training_algorithm()</code> and the parameters set for these training algorithms.</p>
	 * @param resource $ann <p>Neural network <code>resource</code>.</p>
	 * @param string $filename <p>The file containing train data</p>
	 * @param int $max_epochs <p>The maximum number of epochs the training should continue</p>
	 * @param int $epochs_between_reports <p>The number of epochs between calling a user function. A value of zero means that user function is not called.</p>
	 * @param float $desired_error <p>The desired <code>fann_get_MSE()</code> or <code>fann_get_bit_fail()</code>, depending on the stop function chosen by <code>fann_set_train_stop_function()</code></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.fann-train-on-file.php
	 * @see fann_train_on_data(), fann_train_epoch(), fann_get_bit_fail(), fann_get_MSE(), fann_set_train_stop_function(), fann_set_training_algorithm(), fann_set_callback()
	 * @since PECL fann >= 1.0.0
	 */
	function fann_train_on_file($ann, string $filename, int $max_epochs, int $epochs_between_reports, float $desired_error): bool {}

	/**
	 * Periodical cosinus activation function.
	 */
	define('FANN_COS', null);

	/**
	 * Periodical cosinus activation function.
	 */
	define('FANN_COS_SYMMETRIC', null);

	/**
	 * Unable to allocate memory.
	 */
	define('FANN_E_CANT_ALLOCATE_MEM', null);

	/**
	 * Unable to open configuration file for reading.
	 */
	define('FANN_E_CANT_OPEN_CONFIG_R', null);

	/**
	 * Unable to open configuration file for writing.
	 */
	define('FANN_E_CANT_OPEN_CONFIG_W', null);

	/**
	 * Unable to open train data file for reading.
	 */
	define('FANN_E_CANT_OPEN_TD_R', null);

	/**
	 * Unable to open train data file for writing.
	 */
	define('FANN_E_CANT_OPEN_TD_W', null);

	/**
	 * Error reading info from configuration file.
	 */
	define('FANN_E_CANT_READ_CONFIG', null);

	/**
	 * Error reading connections from configuration file.
	 */
	define('FANN_E_CANT_READ_CONNECTIONS', null);

	/**
	 * Error reading neuron info from configuration file.
	 */
	define('FANN_E_CANT_READ_NEURON', null);

	/**
	 * Error reading training data from file.
	 */
	define('FANN_E_CANT_READ_TD', null);

	/**
	 * Unable to train with the selected activation function.
	 */
	define('FANN_E_CANT_TRAIN_ACTIVATION', null);

	/**
	 * Unable to use the selected activation function.
	 */
	define('FANN_E_CANT_USE_ACTIVATION', null);

	/**
	 * Unable to use the selected training algorithm.
	 */
	define('FANN_E_CANT_USE_TRAIN_ALG', null);

	/**
	 * Index is out of bound.
	 */
	define('FANN_E_INDEX_OUT_OF_BOUND', null);

	/**
	 * The number of input neurons in the ann and data do not match
	 */
	define('FANN_E_INPUT_NO_MATCH', null);

	/**
	 * No error.
	 */
	define('FANN_E_NO_ERROR', null);

	/**
	 * The number of output neurons in the ann and data do not match.
	 */
	define('FANN_E_OUTPUT_NO_MATCH', null);

	/**
	 * Scaling parameters not present.
	 */
	define('FANN_E_SCALE_NOT_PRESENT', null);

	/**
	 * Irreconcilable differences between two struct fann_train_data structures.
	 */
	define('FANN_E_TRAIN_DATA_MISMATCH', null);

	/**
	 * Trying to take subset which is not within the training set.
	 */
	define('FANN_E_TRAIN_DATA_SUBSET', null);

	/**
	 * Wrong version of configuration file.
	 */
	define('FANN_E_WRONG_CONFIG_VERSION', null);

	/**
	 * Number of connections not equal to the number expected.
	 */
	define('FANN_E_WRONG_NUM_CONNECTIONS', null);

	/**
	 * Fast (sigmoid like) activation function defined by David Elliott.
	 */
	define('FANN_ELLIOT', null);

	/**
	 * Fast (symmetric sigmoid like) activation function defined by David Elliott.
	 */
	define('FANN_ELLIOT_SYMMETRIC', null);

	/**
	 * Standard linear error function.
	 */
	define('FANN_ERRORFUNC_LINEAR', null);

	/**
	 * Tanh error function; usually better but may require a lower learning rate. This error function aggressively targets outputs that differ much from the desired, while not targeting outputs that only differ slightly. Not recommended for cascade or incremental training.
	 */
	define('FANN_ERRORFUNC_TANH', null);

	/**
	 * Gaussian activation function.
	 */
	define('FANN_GAUSSIAN', null);

	/**
	 * Stepwise gaussian activation function.
	 */
	define('FANN_GAUSSIAN_STEPWISE', null);

	/**
	 * Symmetric gaussian activation function.
	 */
	define('FANN_GAUSSIAN_SYMMETRIC', null);

	/**
	 * Linear activation function.
	 */
	define('FANN_LINEAR', null);

	/**
	 * Bounded linear activation function.
	 */
	define('FANN_LINEAR_PIECE', null);

	/**
	 * Bounded linear activation function.
	 */
	define('FANN_LINEAR_PIECE_SYMMETRIC', null);

	/**
	 * Each layer only has connections to the next layer.
	 */
	define('FANN_NETTYPE_LAYER', null);

	/**
	 * Each layer has connections to all following layers
	 */
	define('FANN_NETTYPE_SHORTCUT', null);

	/**
	 * Sigmoid activation function.
	 */
	define('FANN_SIGMOID', null);

	/**
	 * Stepwise linear approximation to sigmoid.
	 */
	define('FANN_SIGMOID_STEPWISE', null);

	/**
	 * Symmetric sigmoid activation function, aka. tanh.
	 */
	define('FANN_SIGMOID_SYMMETRIC', null);

	/**
	 * Stepwise linear approximation to symmetric sigmoid
	 */
	define('FANN_SIGMOID_SYMMETRIC_STEPWISE', null);

	/**
	 * Periodical sinus activation function.
	 */
	define('FANN_SIN', null);

	/**
	 * Periodical sinus activation function.
	 */
	define('FANN_SIN_SYMMETRIC', null);

	/**
	 * Stop criteria is number of bits that fail. The number of bits means the number of output neurons which differs more than the bit fail limit (see fann_get_bit_fail_limit, fann_set_bit_fail_limit). The bits are counted in all of the training data, so this number can be higher than the number of training data.
	 */
	define('FANN_STOPFUNC_BIT', null);

	/**
	 * Stop criteria is Mean Square Error (MSE) value.
	 */
	define('FANN_STOPFUNC_MSE', null);

	/**
	 * Threshold activation function.
	 */
	define('FANN_THRESHOLD', null);

	/**
	 * Threshold activation function.
	 */
	define('FANN_THRESHOLD_SYMMETRIC', null);

	/**
	 * Standard backpropagation algorithm, where the weights are updated after calculating the mean square error for the whole training set. This means that the weights are only updated once during a epoch. For this reason some problems, will train slower with this algorithm. But since the mean square error is calculated more correctly than in incremental training, some problems will reach a better solutions with this algorithm.
	 */
	define('FANN_TRAIN_BATCH', null);

	/**
	 * Standard backpropagation algorithm, where the weights are updated after each training pattern. This means that the weights are updated many times during a single epoch. For this reason some problems, will train very fast with this algorithm, while other more advanced problems will not train very well.
	 */
	define('FANN_TRAIN_INCREMENTAL', null);

	/**
	 * A more advanced batch training algorithm which achieves good results for many problems. The quickprop training algorithm uses the learning_rate parameter along with other more advanced parameters, but it is only recommended to change these advanced parameters, for users with insight in how the quickprop training algorithm works. The quickprop training algorithm is described by [Fahlman, 1988].
	 */
	define('FANN_TRAIN_QUICKPROP', null);

	/**
	 * A more advanced batch training algorithm which achieves good results for many problems. The RPROP training algorithm is adaptive, and does therefore not use the learning_rate. Some other parameters can however be set to change the way the RPROP algorithm works, but it is only recommended for users with insight in how the RPROP training algorithm works. The RPROP training algorithm is described by [Riedmiller and Braun, 1993], but the actual learning algorithm used here is the iRPROP- training algorithm which is described by [Igel and Husken, 2000] which is an variety of the standard RPROP training algorithm.
	 */
	define('FANN_TRAIN_RPROP', null);

	/**
	 * Even more advance training algorithm. Only for version 2.2
	 */
	define('FANN_TRAIN_SARPROP', null);

}
