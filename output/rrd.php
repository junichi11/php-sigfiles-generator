<?php



namespace {

	/**
	 * <p>Class for creation of RRD database file.</p>
	 * @link https://php.net/manual/en/class.rrdcreator.php
	 * @since PECL rrd >= 0.9.0
	 */
	class RRDCreator {

		/**
		 * Creates new RRDCreator instance
		 * <p>Creates new RRDCreator instance.</p>
		 * @param string $path <p>Path for newly created RRD database file.</p>
		 * @param string $startTime <p>Time for the first value in RRD database. Parameter supports all formats which are supported by rrd create call.</p>
		 * @param int $step
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/rrdcreator.construct.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function __construct(string $path, string $startTime = null, int $step = 0) {}

		/**
		 * Adds RRA - archive of data values for each data source
		 * <p>Adds RRA definition by description of archive. Archive consists of a number of data values or statistics for each of the defined data-sources (DS). Data sources are defined by method <code>RRDCreator::addDataSource()</code>. You need call this method for each requested archive.</p>
		 * @param string $description <p>Definition of archive - RRA. This has same format as RRA definition in rrd create command. See man page of rrd create for more details.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/rrdcreator.addarchive.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function addArchive(string $description): void {}

		/**
		 * Adds data source definition for RRD database
		 * <p>RRD can accept input from several data sources (DS), e.g incoming and outgoing traffic. This method adds data source by description. You need call this method for each data source.</p>
		 * @param string $description <p>Definition of data source - DS. This has same format as DS definition in rrd create command. See man page of rrd create for more details.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/rrdcreator.adddatasource.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function addDataSource(string $description): void {}

		/**
		 * Saves the RRD database to a file
		 * <p>Saves the RRD database into file, which name is defined by <code>RRDCreator::__construct()</code>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rrdcreator.save.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function save(): bool {}
	}

	/**
	 * <p>Class for exporting data from RRD database to image file.</p>
	 * @link https://php.net/manual/en/class.rrdgraph.php
	 * @since PECL rrd >= 0.9.0
	 */
	class RRDGraph {

		/**
		 * Creates new RRDGraph instance
		 * <p>Creates new RRDGraph instance. This instance is responsible for rendering the result of RRD database query into image.</p>
		 * @param string $path <p>Full path for the newly created image.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/rrdgraph.construct.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function __construct(string $path) {}

		/**
		 * Saves the result of query into image
		 * <p>Saves the result of RRD database query into image defined by <code>RRDGraph::__construct()</code>.</p>
		 * @return array <p>Array with information about generated image is returned, <b><code>false</code></b> if error occurs.</p>
		 * @link https://php.net/manual/en/rrdgraph.save.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function save(): array {}

		/**
		 * Saves the RRD database query into image and returns the verbose information about generated graph
		 * <p>Saves the RRD database query into image file defined by method <code>RRDGraph::__construct()</code> and returns the verbose information about generated graph, if "-" is used as image filename, image data are also returned in result array.</p>
		 * @return array <p>Array with detailed information about generated image is returned, optionally with image data, <b><code>false</code></b> if error occurs.</p>
		 * @link https://php.net/manual/en/rrdgraph.saveverbose.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function saveVerbose(): array {}

		/**
		 * Sets the options for rrd graph export
		 * @param array $options <p>List of options for the image generation from the RRD database file. It can be list of strings or list of strings with keys for better readability. Read the rrd graph man pages for list of available options.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/rrdgraph.setoptions.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function setOptions(array $options): void {}
	}

	/**
	 * <p>Class for updating RDD database file.</p>
	 * @link https://php.net/manual/en/class.rrdupdater.php
	 * @since PECL rrd >= 0.9.0
	 */
	class RRDUpdater {

		/**
		 * Creates new RRDUpdater instance
		 * <p>Creates new RRDUpdater instance. This instance is responsible for updating the RRD database file.</p>
		 * @param string $path <p>Filesystem path for RRD database file, which will be updated.</p>
		 * @return self <p>No value is returned.</p>
		 * @link https://php.net/manual/en/rrdupdater.construct.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function __construct(string $path) {}

		/**
		 * Update the RRD database file
		 * <p>Updates the RRD file defined via <code>RRDUpdater::__construct()</code>. The file is updated with a specific values.</p>
		 * @param array $values <p>Data for update. Key is data source name.</p>
		 * @param string $time <p>Time value for updating the RRD with a particulat data. Default value is current time.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/rrdupdater.update.php
		 * @since PECL rrd >= 0.9.0
		 */
		public function update(array $values, string $time = 'time()'): bool {}
	}

	/**
	 * Creates rrd database file
	 * <p>Creates the rdd database file.</p>
	 * @param string $filename <p>Filename for newly created rrd file.</p>
	 * @param array $options <p>Options for rrd create - list of strings. See man page of rrd create for whole list of options.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.rrd-create.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_create(string $filename, array $options): bool {}

	/**
	 * Gets latest error message
	 * <p>Returns latest global rrd error message.</p>
	 * @return string <p>Latest error message.</p>
	 * @link https://php.net/manual/en/function.rrd-error.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_error(): string {}

	/**
	 * Fetch the data for graph as array
	 * <p>Gets data for graph output from RRD database file as array. This function has same result as <code>rrd_graph()</code>, but fetched data are returned as array, no image file is created.</p>
	 * @param string $filename <p>RRD database file name.</p>
	 * @param array $options <p>Array of options for resolution specification.</p>
	 * @return array <p>Returns information about retrieved graph data.</p>
	 * @link https://php.net/manual/en/function.rrd-fetch.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_fetch(string $filename, array $options): array {}

	/**
	 * Gets the timestamp of the first sample from rrd file
	 * <p>Returns the first data sample from the specified RRA of the RRD file.</p>
	 * @param string $file <p>RRD database file name.</p>
	 * @param int $raaindex <p>The index number of the RRA that is to be examined. Default value is 0.</p>
	 * @return int <p>Integer number of unix timestamp, <b><code>false</code></b> if some error occurs.</p>
	 * @link https://php.net/manual/en/function.rrd-first.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_first(string $file, int $raaindex = 0): int {}

	/**
	 * Creates image from a data
	 * <p>Creates image for a particular data from RRD file.</p>
	 * @param string $filename <p>The filename to output the graph to. This will generally end in either <code>.png</code>, <code>.svg</code> or <code>.eps</code>, depending on the format you want to output.</p>
	 * @param array $options <p>Options for generating image. See man page of rrd graph for all possible options. All options (data definitions, variable defintions, etc.) are allowed.</p>
	 * @return array <p>Array with information about generated image is returned, <b><code>false</code></b> when error occurs.</p>
	 * @link https://php.net/manual/en/function.rrd-graph.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_graph(string $filename, array $options): array {}

	/**
	 * Gets information about rrd file
	 * <p>Returns information about particular RRD database file.</p>
	 * @param string $filename
	 * @return array <p>Array with information about requsted RRD file, <b><code>false</code></b> when error occurs.</p>
	 * @link https://php.net/manual/en/function.rrd-info.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_info(string $filename): array {}

	/**
	 * Gets unix timestamp of the last sample
	 * <p>Returns the UNIX timestamp of the most recent update of the RRD database.</p>
	 * @param string $filename <p>RRD database file name.</p>
	 * @return int <p>Integer as unix timestamp of the most recent data from the RRD database.</p>
	 * @link https://php.net/manual/en/function.rrd-last.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_last(string $filename): int {}

	/**
	 * Gets information about last updated data
	 * <p>Gets array of the UNIX timestamp and the values stored for each date in the most recent update of the RRD database file.</p>
	 * @param string $filename
	 * @return array <p>Array of information about last update, <b><code>false</code></b> when error occurs.</p>
	 * @link https://php.net/manual/en/function.rrd-lastupdate.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_lastupdate(string $filename): array {}

	/**
	 * Restores the RRD file from XML dump
	 * <p>Restores the RRD file from the XML dump.</p>
	 * @param string $xml_file <p>XML filename with the dump of the original RRD database file.</p>
	 * @param string $rrd_file <p>Restored RRD database file name.</p>
	 * @param array $options <p>Array of options for restoring. See man page for rrd restore.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.rrd-restore.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_restore(string $xml_file, string $rrd_file, array $options = null): bool {}

	/**
	 * Tunes some RRD database file header options
	 * <p>Change some options in the RRD dabase header file. E.g. renames the source for the data etc.</p>
	 * @param string $filename <p>RRD database file name.</p>
	 * @param array $options <p>Options with RRD database file properties which will be changed. See rrd tune man page for details.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.rrd-tune.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_tune(string $filename, array $options): bool {}

	/**
	 * Updates the RRD database
	 * <p>Updates the RRD database file. The input data is time interpolated according to the properties of the RRD database file.</p>
	 * @param string $filename <p>RRD database file name. This database will be updated.</p>
	 * @param array $options <p>Options for updating the RRD database. This is list of strings. See man page of rrd update for whole list of options.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success, <b><code>false</code></b> when error occurs.</p>
	 * @link https://php.net/manual/en/function.rrd-update.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_update(string $filename, array $options): bool {}

	/**
	 * Gets information about underlying rrdtool library
	 * <p>Returns information about underlying rrdtool library.</p>
	 * @return string <p>String with rrdtool version number e.g. "1.4.3".</p>
	 * @link https://php.net/manual/en/function.rrd-version.php
	 * @since PECL rrd >= 1.0.0
	 */
	function rrd_version(): string {}

	/**
	 * Exports the information about RRD database
	 * <p>Exports the information about RRD database file. This data can be converted to XML file via user space PHP script and then restored back as RRD database file.</p>
	 * @param array $options <p>Array of options for the export, see rrd xport man page.</p>
	 * @return array <p>Array with information about RRD database file, <b><code>false</code></b> when error occurs.</p>
	 * @link https://php.net/manual/en/function.rrd-xport.php
	 * @since PECL rrd >= 0.9.0
	 */
	function rrd_xport(array $options): array {}

	/**
	 * Close any outstanding connection to rrd caching daemon
	 * <p>Close any outstanding connection to rrd caching daemon.</p><p>This function is automatically called when the whole PHP process is terminated. It depends on used SAPI. For example, it's called automatically at the end of command line script.</p><p>It's up user whether he wants to call this function at the end of every request or otherwise.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.rrdc-disconnect.php
	 * @since PECL rrd >= 1.1.2
	 */
	function rrdc_disconnect(): void {}

}
