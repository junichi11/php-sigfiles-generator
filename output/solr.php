<?php



namespace {

	/**
	 * <p>Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.</p>
	 * @link https://php.net/manual/en/class.solrclient.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrClient {

		/**
		 * @var int <p>Used when updating the search servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const SEARCH_SERVLET_TYPE = 1;

		/**
		 * @var int <p>Used when updating the update servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const UPDATE_SERVLET_TYPE = 2;

		/**
		 * @var int <p>Used when updating the threads servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const THREADS_SERVLET_TYPE = 4;

		/**
		 * @var int <p>Used when updating the ping servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const PING_SERVLET_TYPE = 8;

		/**
		 * @var int <p>Used when updating the terms servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const TERMS_SERVLET_TYPE = 16;

		/**
		 * @var int <p>Used when retrieving system information from the system servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const SYSTEM_SERVLET_TYPE = 32;

		/**
		 * @var string <p>This is the initial value for the search servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const DEFAULT_SEARCH_SERVLET = 'select';

		/**
		 * @var string <p>This is the initial value for the update servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const DEFAULT_UPDATE_SERVLET = 'update';

		/**
		 * @var string <p>This is the initial value for the threads servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const DEFAULT_THREADS_SERVLET = 'admin/threads';

		/**
		 * @var string <p>This is the initial value for the ping servlet.</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const DEFAULT_PING_SERVLET = 'admin/ping';

		/**
		 * @var string <p>This is the initial value for the terms servlet used for the TermsComponent</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const DEFAULT_TERMS_SERVLET = 'terms';

		/**
		 * @var string <p>This is the initial value for the system servlet used to obtain Solr Server information</p>
		 * @link https://php.net/manual/en/class.solrclient.php
		 */
		const DEFAULT_SYSTEM_SERVLET = 'admin/system';

		/**
		 * Constructor for the SolrClient object
		 * <p>Constructor for the SolrClient object</p>
		 * @param array $clientOptions <p>This is an array containing one of the following keys :</p> <p></p><pre>- secure (Boolean value indicating whether or not to connect in secure mode) - hostname (The hostname for the Solr server) - port (The port number) - path (The path to solr) - wt (The name of the response writer e.g. xml, json) - login (The username used for HTTP Authentication, if any) - password (The HTTP Authentication password) - proxy_host (The hostname for the proxy server, if any) - proxy_port (The proxy port) - proxy_login (The proxy username) - proxy_password (The proxy password) - timeout (This is maximum time in seconds allowed for the http data transfer operation. Default is 30 seconds) - ssl_cert (File name to a PEM-formatted file containing the private key + private certificate (concatenated in that order) ) - ssl_key (File name to a PEM-formatted private key file only) - ssl_keypassword (Password for private key) - ssl_cainfo (Name of file holding one or more CA certificates to verify peer with) - ssl_capath (Name of directory holding multiple CA certificates to verify peer with ) Please note the if the ssl_cert file only contains the private certificate, you have to specify a separate ssl_key file The ssl_keypassword option is required if the ssl_cert or ssl_key options are set.</pre>
		 * @return self
		 * @link https://php.net/manual/en/solrclient.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct(array $clientOptions) {}

		/**
		 * Destructor for SolrClient
		 * <p>Destructor</p>
		 * @return void <p>Destructor for SolrClient</p>
		 * @link https://php.net/manual/en/solrclient.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Adds a document to the index
		 * <p>This method adds a document to the index.</p>
		 * @param \SolrInputDocument $doc <p>The SolrInputDocument instance.</p>
		 * @param bool $overwrite <p>Whether to overwrite existing document or not. If <b><code>FALSE</code></b> there will be duplicates (several documents with the same ID).</p> <p><b>Warning</b></p> <p>PECL Solr &lt; 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite bool flag.</p> <p>$allowDups = false is the same as $overwrite = true</p>
		 * @param int $commitWithin <p>Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.</p> <p>When this value specified, it leaves the control of when to do the commit to Solr itself, optimizing number of commits to a minimum while still fulfilling the update latency requirements, and Solr will automatically do a commit when the oldest add in the buffer is due.</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> object or throws an Exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.adddocument.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addDocument(\SolrInputDocument $doc, bool $overwrite = TRUE, int $commitWithin = 0): \SolrUpdateResponse {}

		/**
		 * Adds a collection of SolrInputDocument instances to the index
		 * <p>Adds a collection of documents to the index.</p>
		 * @param array $docs <p>An array containing the collection of SolrInputDocument instances. This array must be an actual variable.</p>
		 * @param bool $overwrite <p>Whether to overwrite existing documents or not. If <b><code>FALSE</code></b> there will be duplicates (several documents with the same ID).</p> <p><b>Warning</b></p> <p>PECL Solr &lt; 2.0 $allowDups was used instead of $overwrite, which does the same functionality with exact opposite bool flag.</p> <p>$allowDups = false is the same as $overwrite = true</p>
		 * @param int $commitWithin <p>Number of milliseconds within which to auto commit this document. Available since Solr 1.4 . Default (0) means disabled.</p> <p>When this value specified, it leaves the control of when to do the commit to Solr itself, optimizing number of commits to a minimum while still fulfilling the update latency requirements, and Solr will automatically do a commit when the oldest add in the buffer is due.</p>
		 * @return void <p>Returns a <code>SolrUpdateResponse</code> object or throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.adddocuments.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addDocuments(array $docs, bool $overwrite = TRUE, int $commitWithin = 0): void {}

		/**
		 * Finalizes all add/deletes made to the index
		 * <p>This method finalizes all add/deletes made to the index.</p>
		 * @param bool $softCommit <p>This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)</p> <p>A soft commit is much faster since it only makes index changes visible and does not fsync index files or write a new index descriptor. If the JVM crashes or there is a loss of power, changes that occurred after the last hard commit will be lost. Search collections that have near-real-time requirements (that want index changes to be quickly visible to searches) will want to soft commit often but hard commit less frequently.</p>
		 * @param bool $waitSearcher <p>block until a new searcher is opened and registered as the main query searcher, making the changes visible.</p>
		 * @param bool $expungeDeletes <p>Merge segments with deletes away. (Solr1.4+)</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse object on success or throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.commit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function commit(bool $softCommit = FALSE, bool $waitSearcher = TRUE, bool $expungeDeletes = FALSE): \SolrUpdateResponse {}

		/**
		 * Delete by Id
		 * <p>Deletes the document with the specified ID. Where ID is the value of the uniqueKey field declared in the schema</p>
		 * @param string $id <p>The value of the uniqueKey field declared in the schema</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.deletebyid.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteById(string $id): \SolrUpdateResponse {}

		/**
		 * Deletes by Ids
		 * <p>Deletes a collection of documents with the specified set of ids.</p>
		 * @param array $ids <p>An array of IDs representing the uniqueKey field declared in the schema for each document to be deleted. This must be an actual php variable.</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.deletebyids.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteByIds(array $ids): \SolrUpdateResponse {}

		/**
		 * Removes all documents matching any of the queries
		 * <p>Removes all documents matching any of the queries</p>
		 * @param array $queries <p>The array of queries. This must be an actual php variable.</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse on success and throws a SolrClientException on failure.</p>
		 * @link https://php.net/manual/en/solrclient.deletebyqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteByQueries(array $queries): \SolrUpdateResponse {}

		/**
		 * Deletes all documents matching the given query
		 * <p>Deletes all documents matching the given query.</p>
		 * @param string $query <p>The query</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.deletebyquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteByQuery(string $query): \SolrUpdateResponse {}

		/**
		 * Get Document By Id. Utilizes Solr Realtime Get (RTG)
		 * <p>Get Document By Id. Utilizes Solr Realtime Get (RTG).</p>
		 * @param string $id <p>Document ID</p>
		 * @return SolrQueryResponse <p><code>SolrQueryResponse</code></p>
		 * @link https://php.net/manual/en/solrclient.getbyid.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getById(string $id): \SolrQueryResponse {}

		/**
		 * Get Documents by their Ids. Utilizes Solr Realtime Get (RTG)
		 * <p>Get Documents by their Ids. Utilizes Solr Realtime Get (RTG).</p>
		 * @param array $ids <p>Document ids</p>
		 * @return SolrQueryResponse <p><code>SolrQueryResponse</code></p>
		 * @link https://php.net/manual/en/solrclient.getbyids.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getByIds(array $ids): \SolrQueryResponse {}

		/**
		 * Returns the debug data for the last connection attempt
		 * <p>Returns the debug data for the last connection attempt</p>
		 * @return string <p>Returns a string on success and null if there is nothing to return.</p>
		 * @link https://php.net/manual/en/solrclient.getdebug.php
		 * @since PECL solr >= 0.9.7
		 */
		public function getDebug(): string {}

		/**
		 * Returns the client options set internally
		 * <p>Returns the client options set internally. Very useful for debugging. The values returned are readonly and can only be set when the object is instantiated.</p>
		 * @return array <p>Returns an array containing all the options for the SolrClient object set internally.</p>
		 * @link https://php.net/manual/en/solrclient.getoptions.php
		 * @since PECL solr >= 0.9.6
		 */
		public function getOptions(): array {}

		/**
		 * Defragments the index
		 * <p>Defragments the index for faster search performance.</p>
		 * @param int $maxSegments <p>Optimizes down to at most this number of segments. Since Solr 1.3</p>
		 * @param bool $softCommit <p>This will refresh the 'view' of the index in a more performant manner, but without "on-disk" guarantees. (Solr4.0+)</p>
		 * @param bool $waitSearcher <p>Block until a new searcher is opened and registered as the main query searcher, making the changes visible.</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse on success or throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.optimize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function optimize(int $maxSegments = 1, bool $softCommit = TRUE, bool $waitSearcher = TRUE): \SolrUpdateResponse {}

		/**
		 * Checks if Solr server is still up
		 * <p>Checks if the Solr server is still alive. Sends a HEAD request to the Apache Solr server.</p>
		 * @return SolrPingResponse <p>Returns a <code>SolrPingResponse</code> object on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.ping.php
		 * @since PECL solr >= 0.9.2
		 */
		public function ping(): \SolrPingResponse {}

		/**
		 * Sends a query to the server
		 * <p>Sends a query to the server.</p>
		 * @param \SolrParams $query <p>A <code>SolrParams</code> object. It is recommended to use <code>SolrQuery</code> for advanced queries.</p>
		 * @return SolrQueryResponse <p>Returns a <code>SolrQueryResponse</code> object on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.query.php
		 * @since PECL solr >= 0.9.2
		 */
		public function query(\SolrParams $query): \SolrQueryResponse {}

		/**
		 * Sends a raw update request
		 * <p>Sends a raw XML update request to the server</p>
		 * @param string $raw_request <p>An XML string with the raw request to the server.</p>
		 * @return SolrUpdateResponse <p>Returns a <code>SolrUpdateResponse</code> on success. Throws an exception on failure.</p>
		 * @link https://php.net/manual/en/solrclient.request.php
		 * @since PECL solr >= 0.9.2
		 */
		public function request(string $raw_request): \SolrUpdateResponse {}

		/**
		 * Rollbacks all add/deletes made to the index since the last commit
		 * <p>Rollbacks all add/deletes made to the index since the last commit. It neither calls any event listeners nor creates a new searcher.</p>
		 * @return SolrUpdateResponse <p>Returns a SolrUpdateResponse on success or throws a SolrClientException on failure.</p>
		 * @link https://php.net/manual/en/solrclient.rollback.php
		 * @since PECL solr >= 0.9.2
		 */
		public function rollback(): \SolrUpdateResponse {}

		/**
		 * Sets the response writer used to prepare the response from Solr
		 * <p>Sets the response writer used to prepare the response from Solr</p>
		 * @param string $responseWriter <p>One of the following:</p> <ul> <li><code>json</code></li> <li><code>phps</code></li> <li><code>xml</code></li> </ul>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/solrclient.setresponsewriter.php
		 * @since PECL solr >= 0.9.11
		 */
		public function setResponseWriter(string $responseWriter): void {}

		/**
		 * Changes the specified servlet type to a new value
		 * <p>Changes the specified servlet type to a new value</p>
		 * @param int $type <p>One of the following :</p> <p></p><pre>- SolrClient::SEARCH_SERVLET_TYPE - SolrClient::UPDATE_SERVLET_TYPE - SolrClient::THREADS_SERVLET_TYPE - SolrClient::PING_SERVLET_TYPE - SolrClient::TERMS_SERVLET_TYPE</pre>
		 * @param string $value <p>The new value for the servlet</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrclient.setservlet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setServlet(int $type, string $value): bool {}

		/**
		 * Retrieve Solr Server information
		 * <p>Retrieve Solr Server information</p>
		 * @return void <p>Returns a <code>SolrGenericResponse</code> object on success.</p>
		 * @link https://php.net/manual/en/solrclient.system.php
		 * @since PECL solr >= 2.0.0
		 */
		public function system(): void {}

		/**
		 * Checks the threads status
		 * <p>Checks the threads status</p>
		 * @return void <p>Returns a SolrGenericResponse object.</p>
		 * @link https://php.net/manual/en/solrclient.threads.php
		 * @since PECL solr >= 0.9.2
		 */
		public function threads(): void {}
	}

	/**
	 * <p>An exception thrown when there is an error while making a request to the server from the client.</p>
	 * @link https://php.net/manual/en/class.solrclientexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrClientException extends \SolrException {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var int <p>The line in c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>The c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>The c-space function where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Returns internal information where the Exception was thrown
		 * <p>Returns internal information where the Exception was thrown.</p>
		 * @return array <p>Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.</p>
		 * @link https://php.net/manual/en/solrclientexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.solrcollapsefunction.php
	 * @since PECL solr >= 2.2.0
	 */
	class SolrCollapseFunction {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.solrcollapsefunction.php
		 */
		const NULLPOLICY_IGNORE = 'ignore';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.solrcollapsefunction.php
		 */
		const NULLPOLICY_EXPAND = 'expand';

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.solrcollapsefunction.php
		 */
		const NULLPOLICY_COLLAPSE = 'collapse';

		/**
		 * Constructor
		 * <p>Collapse Function constructor</p>
		 * @param string $field <p>The field name to collapse on.</p> <p>In order to collapse a result. The field type must be a single valued String, Int or Float.</p>
		 * @return self
		 * @link https://php.net/manual/en/solrcollapsefunction.construct.php
		 * @since PECL solr >= 2.2.0
		 */
		public function __construct(string $field = NULL) {}

		/**
		 * Returns a string representing the constructed collapse function
		 * <p>Returns a string representing the constructed collapse function</p>
		 * @return string
		 * @link https://php.net/manual/en/solrcollapsefunction.tostring.php
		 * @since PECL solr >= 2.2.0
		 */
		public function __toString(): string {}

		/**
		 * Returns the field that is being collapsed on
		 * <p>Returns the field that is being collapsed on.</p>
		 * @return string
		 * @link https://php.net/manual/en/solrcollapsefunction.getfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getField(): string {}

		/**
		 * Returns collapse hint
		 * <p>Returns collapse hint</p>
		 * @return string
		 * @link https://php.net/manual/en/solrcollapsefunction.gethint.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getHint(): string {}

		/**
		 * Returns max parameter
		 * <p>Returns max parameter</p>
		 * @return string
		 * @link https://php.net/manual/en/solrcollapsefunction.getmax.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getMax(): string {}

		/**
		 * Returns min parameter
		 * <p>Returns min parameter</p>
		 * @return string
		 * @link https://php.net/manual/en/solrcollapsefunction.getmin.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getMin(): string {}

		/**
		 * Returns null policy
		 * <p>Returns null policy used or null</p>
		 * @return string
		 * @link https://php.net/manual/en/solrcollapsefunction.getnullpolicy.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getNullPolicy(): string {}

		/**
		 * Returns size parameter
		 * <p>Gets the initial size of the collapse data structures when collapsing on a numeric field only</p>
		 * @return int
		 * @link https://php.net/manual/en/solrcollapsefunction.getsize.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getSize(): int {}

		/**
		 * Sets the field to collapse on
		 * <p>The field name to collapse on. In order to collapse a result. The field type must be a single valued String, Int or Float.</p>
		 * @param string $fieldName
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/en/solrcollapsefunction.setfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setField(string $fieldName): \SolrCollapseFunction {}

		/**
		 * Sets collapse hint
		 * <p>Sets collapse hint</p>
		 * @param string $hint <p>Currently there is only one hint available "top_fc", which stands for top level FieldCache</p>
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/en/solrcollapsefunction.sethint.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setHint(string $hint): \SolrCollapseFunction {}

		/**
		 * Selects the group heads by the max value of a numeric field or function query
		 * <p>Selects the group heads by the max value of a numeric field or function query.</p>
		 * @param string $max
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/en/solrcollapsefunction.setmax.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setMax(string $max): \SolrCollapseFunction {}

		/**
		 * Sets the initial size of the collapse data structures when collapsing on a numeric field only
		 * <p>Sets the initial size of the collapse data structures when collapsing on a numeric field only</p>
		 * @param string $min
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/en/solrcollapsefunction.setmin.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setMin(string $min): \SolrCollapseFunction {}

		/**
		 * Sets the NULL Policy
		 * <p>Sets the NULL Policy. One of the 3 policies defined as class constants shall be passed. Accepts ignore, expand, or collapse policies.</p>
		 * @param string $nullPolicy
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/en/solrcollapsefunction.setnullpolicy.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setNullPolicy(string $nullPolicy): \SolrCollapseFunction {}

		/**
		 * Sets the initial size of the collapse data structures when collapsing on a numeric field only
		 * <p>Sets the initial size of the collapse data structures when collapsing on a numeric field only.</p>
		 * @param int $size
		 * @return SolrCollapseFunction <p><code>SolrCollapseFunction</code></p>
		 * @link https://php.net/manual/en/solrcollapsefunction.setsize.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setSize(int $size): \SolrCollapseFunction {}
	}

	/**
	 * @link https://php.net/manual/en/class.solrdismaxquery.php
	 * @since No version information available, might only be in Git
	 */
	class SolrDisMaxQuery extends \SolrQuery implements \Serializable {

		/**
		 * Class Constructor
		 * <p>Class constructor initializes the object and sets the q parameter if passed</p>
		 * @param string $q <p>Search Query (q parameter)</p>
		 * @return self
		 * @link https://php.net/manual/en/solrdismaxquery.construct.php
		 * @since No version information available, might only be in Git
		 */
		public function __construct(string $q = NULL) {}

		/**
		 * Destructor
		 * <p>Destructor</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrquery.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Adds a Phrase Bigram Field (pf2 parameter)
		 * <p>Adds a Phrase Bigram Field (pf2 parameter) output format: field~slop^boost OR field^boost Slop is optional</p>
		 * @param string $field
		 * @param string $boost
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.addbigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function addBigramPhraseField(string $field, string $boost, string $slop = NULL): \SolrDisMaxQuery {}

		/**
		 * Adds a boost query field with value and optional boost (bq parameter)
		 * <p>Adds a Boost Query field with value [and boost] (bq parameter)</p>
		 * @param string $field
		 * @param string $value
		 * @param string $boost
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.addboostquery.php
		 * @since No version information available, might only be in Git
		 */
		public function addBoostQuery(string $field, string $value, string $boost = NULL): \SolrDisMaxQuery {}

		/**
		 * Overrides main filter query, determines which documents to include in the main group
		 * <p>Overrides main filter query, determines which documents to include in the main group.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Orders the documents within the expanded groups (expand.sort parameter)
		 * <p>Orders the documents within the expanded groups (expand.sort parameter).</p>
		 * @param string $field <p>field name</p>
		 * @param string $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants.</p> <p>Default: SolrQuery::ORDER_DESC</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandSortField(string $field, string $order = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date
		 * <p>This method allows you to specify a field which should be treated as a facet.</p><p>It can be used multiple times with different field names to indicate multiple facet fields</p>
		 * @param string $dateField <p>The name of the date field.</p>
		 * @return SolrQuery <p>Returns a SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateField(string $dateField): \SolrQuery {}

		/**
		 * Adds another facet.date.other parameter
		 * <p>Sets the facet.date.other parameter. Accepts an optional field override</p>
		 * @param string $value <p>The value to use.</p>
		 * @param string $field_override <p>The field name for the override.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Adds another field to the facet
		 * <p>Adds another field to the facet</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetField(string $field): \SolrQuery {}

		/**
		 * Adds a facet query
		 * <p>Adds a facet query</p>
		 * @param string $facetQuery <p>The facet query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetQuery(string $facetQuery): \SolrQuery {}

		/**
		 * Specifies which fields to return in the result
		 * <p>This method is used to used to specify a set of fields to return, thereby restricting the amount of data returned in the response.</p><p>It should be called multiple time, once for each field name.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object</p>
		 * @link https://php.net/manual/en/solrquery.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $field): \SolrQuery {}

		/**
		 * Specifies a filter query
		 * <p>Specifies a filter query</p>
		 * @param string $fq <p>The filter query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.addfilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Add a field to be used to group results
		 * <p>The name of the field by which to group results. The field must be single-valued, and either be indexed or a field type that has a value source and works in a function query, such as ExternalFileField. It must also be a string-based field, such as StrField or TextField Uses group.field parameter</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.addgroupfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupField(string $value): \SolrQuery {}

		/**
		 * Allows grouping results based on the unique values of a function query (group.func parameter)
		 * <p>Adds a group function (group.func parameter) Allows grouping results based on the unique values of a function query.</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addgroupfunction.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupFunction(string $value): \SolrQuery {}

		/**
		 * Allows grouping of documents that match the given query
		 * <p>Allows grouping of documents that match the given query. Adds query to the group.query parameter</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addgroupquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupQuery(string $value): \SolrQuery {}

		/**
		 * Add a group sort field (group.sort parameter)
		 * <p>Allow sorting group documents, using group sort field (group.sort parameter).</p>
		 * @param string $field <p>Field name</p>
		 * @param int $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.addgroupsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupSortField(string $field, int $order = NULL): \SolrQuery {}

		/**
		 * Maps to hl.fl
		 * <p>Maps to hl.fl. This is used to specify that highlighted snippets should be generated for a particular field</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addhighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addHighlightField(string $field): \SolrQuery {}

		/**
		 * Sets a field to use for similarity
		 * <p>Maps to mlt.fl. It specifies that a field should be used for similarity.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addmltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltField(string $field): \SolrQuery {}

		/**
		 * Maps to mlt.qf
		 * <p>Maps to mlt.qf. It is used to specify query fields and their boosts</p>
		 * @param string $field <p>The name of the field</p>
		 * @param float $boost <p>Its boost value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addmltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltQueryField(string $field, float $boost): \SolrQuery {}

		/**
		 * Adds a Phrase Field (pf parameter)
		 * <p>Adds a Phrase Field (pf parameter)</p>
		 * @param string $field <p>field name</p>
		 * @param string $boost
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.addphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function addPhraseField(string $field, string $boost, string $slop = NULL): \SolrDisMaxQuery {}

		/**
		 * Add a query field with optional boost (qf parameter)
		 * <p>Add a query field with optional boost (qf parameter)</p>
		 * @param string $field <p>field name</p>
		 * @param string $boost <p>Boost value. Boosts documents with matching terms.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.addqueryfield.php
		 * @since No version information available, might only be in Git
		 */
		public function addQueryField(string $field, string $boost = NULL): \SolrDisMaxQuery {}

		/**
		 * Used to control how the results should be sorted
		 * <p>Used to control how the results should be sorted.</p>
		 * @param string $field <p>The name of the field</p>
		 * @param int $order <p>The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.addsortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addSortField(string $field, int $order = SolrQuery::ORDER_DESC): \SolrQuery {}

		/**
		 * Requests a return of sub results for values within the given facet
		 * <p>Requests a return of sub results for values within the given facet. Maps to the stats.facet field</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addstatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsFacet(string $field): \SolrQuery {}

		/**
		 * Maps to stats.field parameter
		 * <p>Maps to stats.field parameter This methods adds another stats.field parameter.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addstatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsField(string $field): \SolrQuery {}

		/**
		 * Adds a Trigram Phrase Field (pf3 parameter)
		 * <p>Adds a Trigram Phrase Field (pf3 parameter)</p>
		 * @param string $field <p>Field Name</p>
		 * @param string $boost <p>Field Boost</p>
		 * @param string $slop <p>Field Slop</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.addtrigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function addTrigramPhraseField(string $field, string $boost, string $slop = NULL): \SolrDisMaxQuery {}

		/**
		 * Adds a field to User Fields Parameter (uf)
		 * <p>Adds a field to The User Fields Parameter (uf)</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.adduserfield.php
		 * @since No version information available, might only be in Git
		 */
		public function addUserField(string $field): \SolrDisMaxQuery {}

		/**
		 * Collapses the result set to a single document per group
		 * <p>Collapses the result set to a single document per group before it forwards the result set to the rest of the search components.</p><p>So all downstream components (faceting, highlighting, etc...) will work with the collapsed result set.</p>
		 * @param \SolrCollapseFunction $collapseFunction
		 * @return SolrQuery <p>Returns the current <code>SolrQuery</code> object</p>
		 * @link https://php.net/manual/en/solrquery.collapse.php
		 * @since No version information available, might only be in Git
		 */
		public function collapse(\SolrCollapseFunction $collapseFunction): \SolrQuery {}

		/**
		 * Returns true if group expanding is enabled
		 * <p>Returns <b><code>TRUE</code></b> if group expanding is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpand(): bool {}

		/**
		 * Returns the expand filter queries
		 * <p>Returns the expand filter queries</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getexpandfilterqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandFilterQueries(): array {}

		/**
		 * Returns the expand query expand.q parameter
		 * <p>Returns the expand query expand.q parameter</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandQuery(): array {}

		/**
		 * Returns The number of rows to display in each group (expand.rows)
		 * <p>Returns The number of rows to display in each group (expand.rows)</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandRows(): int {}

		/**
		 * Returns an array of fields
		 * <p>Returns an array of fields</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getexpandsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandSortFields(): array {}

		/**
		 * Returns the value of the facet parameter
		 * <p>Returns the value of the facet parameter.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacet(): bool {}

		/**
		 * Returns the value for the facet.date.end parameter
		 * <p>Returns the value for the facet.date.end parameter. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateEnd(string $field_override = NULL): string {}

		/**
		 * Returns all the facet.date fields
		 * <p>Returns all the facet.date fields</p>
		 * @return array <p>Returns all the facet.date fields as an array or <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdatefields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateFields(): array {}

		/**
		 * Returns the value of the facet.date.gap parameter
		 * <p>Returns the value of the facet.date.gap parameter. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateGap(string $field_override = NULL): string {}

		/**
		 * Returns the value of the facet.date.hardend parameter
		 * <p>Returns the value of the facet.date.hardend parameter. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateHardEnd(string $field_override = NULL): string {}

		/**
		 * Returns the value for the facet.date.other parameter
		 * <p>Returns the value for the facet.date.other parameter. This method accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return array <p>Returns an <code>array</code> on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateOther(string $field_override = NULL): array {}

		/**
		 * Returns the lower bound for the first date range for all date faceting on this field
		 * <p>Returns the lower bound for the first date range for all date faceting on this field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateStart(string $field_override = NULL): string {}

		/**
		 * Returns all the facet fields
		 * <p>Returns all the facet fields</p>
		 * @return array <p>Returns an array of all the fields and <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetFields(): array {}

		/**
		 * Returns the maximum number of constraint counts that should be returned for the facet fields
		 * <p>Returns the maximum number of constraint counts that should be returned for the facet fields. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetLimit(string $field_override = NULL): int {}

		/**
		 * Returns the value of the facet.method parameter
		 * <p>Returns the value of the facet.method parameter. This accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMethod(string $field_override = NULL): string {}

		/**
		 * Returns the minimum counts for facet fields should be included in the response
		 * <p>Returns the minimum counts for facet fields should be included in the response. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMinCount(string $field_override = NULL): int {}

		/**
		 * Returns the current state of the facet.missing parameter
		 * <p>Returns the current state of the facet.missing parameter. This accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMissing(string $field_override = NULL): bool {}

		/**
		 * Returns an offset into the list of constraints to be used for pagination
		 * <p>Returns an offset into the list of constraints to be used for pagination. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetOffset(string $field_override = NULL): int {}

		/**
		 * Returns the facet prefix
		 * <p>Returns the facet prefix</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetPrefix(string $field_override = NULL): string {}

		/**
		 * Returns all the facet queries
		 * <p>Returns all the facet queries</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetQueries(): array {}

		/**
		 * Returns the facet sort type
		 * <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT)</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetSort(string $field_override = NULL): int {}

		/**
		 * Returns the list of fields that will be returned in the response
		 * <p>Returns the list of fields that will be returned in the response</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFields(): array {}

		/**
		 * Returns an array of filter queries
		 * <p>Returns an array of filter queries. These are queries that can be used to restrict the super set of documents that can be returned, without influencing score</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfilterqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFilterQueries(): array {}

		/**
		 * Returns true if grouping is enabled
		 * <p>Returns true if grouping is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroup(): bool {}

		/**
		 * Returns group cache percent value
		 * <p>Returns group cache percent value</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupCachePercent(): int {}

		/**
		 * Returns the group.facet parameter value
		 * <p>Returns the group.facet parameter value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFacet(): bool {}

		/**
		 * Returns group fields (group.field parameter values)
		 * <p>Returns group fields (group.field parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getgroupfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFields(): array {}

		/**
		 * Returns the group.format value
		 * <p>Returns the group.format value</p>
		 * @return string
		 * @link https://php.net/manual/en/solrquery.getgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFormat(): string {}

		/**
		 * Returns group functions (group.func parameter values)
		 * <p>Returns group functions (group.func parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getgroupfunctions.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFunctions(): array {}

		/**
		 * Returns the group.limit value
		 * <p>Returns the group.limit value</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupLimit(): int {}

		/**
		 * Returns the group.main value
		 * <p>Returns the group.main value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupMain(): bool {}

		/**
		 * Returns the group.ngroups value
		 * <p>Returns the group.ngroups value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupNGroups(): bool {}

		/**
		 * Returns the group.offset value
		 * <p>Returns the group.offset value</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupOffset(): int {}

		/**
		 * Returns all the group.query parameter values
		 * <p>Returns all the group.query parameter values</p>
		 * @return array <p><code>array</code></p>
		 * @link https://php.net/manual/en/solrquery.getgroupqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupQueries(): array {}

		/**
		 * Returns the group.sort value
		 * <p>Returns the group.sort value</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getgroupsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupSortFields(): array {}

		/**
		 * Returns the group.truncate value
		 * <p>Returns the group.truncate value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupTruncate(): bool {}

		/**
		 * Returns the state of the hl parameter
		 * <p>Returns a boolean indicating whether or not to enable highlighted snippets to be generated in the query response.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlight(): bool {}

		/**
		 * Returns the highlight field to use as backup or default
		 * <p>Returns the highlight field to use as backup or default. It accepts an optional override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightAlternateField(string $field_override = NULL): string {}

		/**
		 * Returns all the fields that Solr should generate highlighted snippets for
		 * <p>Returns all the fields that Solr should generate highlighted snippets for</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFields(): array {}

		/**
		 * Returns the formatter for the highlighted output
		 * <p>Returns the formatter for the highlighted output</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFormatter(string $field_override = NULL): string {}

		/**
		 * Returns the text snippet generator for highlighted text
		 * <p>Returns the text snippet generator for highlighted text. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragmenter(string $field_override = NULL): string {}

		/**
		 * Returns the number of characters of fragments to consider for highlighting
		 * <p>Returns the number of characters of fragments to consider for highlighting. Zero implies no fragmenting. The entire field should be used.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragsize(string $field_override = NULL): int {}

		/**
		 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
		 * <p>Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightHighlightMultiTerm(): bool {}

		/**
		 * Returns the maximum number of characters of the field to return
		 * <p>Returns the maximum number of characters of the field to return</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAlternateFieldLength(string $field_override = NULL): int {}

		/**
		 * Returns the maximum number of characters into a document to look for suitable snippets
		 * <p>Returns the maximum number of characters into a document to look for suitable snippets</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAnalyzedChars(): int {}

		/**
		 * Returns whether or not the collapse contiguous fragments into a single fragment
		 * <p>Returns whether or not the collapse contiguous fragments into a single fragment. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMergeContiguous(string $field_override = NULL): bool {}

		/**
		 * Returns the maximum number of characters from a field when using the regex fragmenter
		 * <p>Returns the maximum number of characters from a field when using the regex fragmenter</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexMaxAnalyzedChars(): int {}

		/**
		 * Returns the regular expression for fragmenting
		 * <p>Returns the regular expression used for fragmenting</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexPattern(): string {}

		/**
		 * Returns the deviation factor from the ideal fragment size
		 * <p>Returns the factor by which the regex fragmenter can deviate from the ideal fragment size to accomodate the regular expression</p>
		 * @return float <p>Returns a double on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexSlop(): float {}

		/**
		 * Returns if a field will only be highlighted if the query matched in this particular field
		 * <p>Returns if a field will only be highlighted if the query matched in this particular field.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRequireFieldMatch(): bool {}

		/**
		 * Returns the text which appears after a highlighted term
		 * <p>Returns the text which appears after a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePost(string $field_override = NULL): string {}

		/**
		 * Returns the text which appears before a highlighted term
		 * <p>Returns the text which appears before a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePre(string $field_override = NULL): string {}

		/**
		 * Returns the maximum number of highlighted snippets to generate per field
		 * <p>Returns the maximum number of highlighted snippets to generate per field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSnippets(string $field_override = NULL): int {}

		/**
		 * Returns the state of the hl.usePhraseHighlighter parameter
		 * <p>Returns whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightUsePhraseHighlighter(): bool {}

		/**
		 * Returns whether or not MoreLikeThis results should be enabled
		 * <p>Returns whether or not MoreLikeThis results should be enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMlt(): bool {}

		/**
		 * Returns whether or not the query will be boosted by the interesting term relevance
		 * <p>Returns whether or not the query will be boosted by the interesting term relevance</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltBoost(): bool {}

		/**
		 * Returns the number of similar documents to return for each result
		 * <p>Returns the number of similar documents to return for each result</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltCount(): int {}

		/**
		 * Returns all the fields to use for similarity
		 * <p>Returns all the fields to use for similarity</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltFields(): array {}

		/**
		 * Returns the maximum number of query terms that will be included in any generated query
		 * <p>Returns the maximum number of query terms that will be included in any generated query</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumQueryTerms(): int {}

		/**
		 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
		 * <p>Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumTokens(): int {}

		/**
		 * Returns the maximum word length above which words will be ignored
		 * <p>Returns the maximum word length above which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxWordLength(): int {}

		/**
		 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
		 * <p>Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinDocFrequency(): int {}

		/**
		 * Returns the frequency below which terms will be ignored in the source document
		 * <p>Returns the frequency below which terms will be ignored in the source document</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinTermFrequency(): int {}

		/**
		 * Returns the minimum word length below which words will be ignored
		 * <p>Returns the minimum word length below which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinWordLength(): int {}

		/**
		 * Returns the query fields and their boosts
		 * <p>Returns the query fields and their boosts</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltqueryfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltQueryFields(): array {}

		/**
		 * Returns the main query
		 * <p>Returns the main search query</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getQuery(): string {}

		/**
		 * Returns the maximum number of documents
		 * <p>Returns the maximum number of documents from the complete result set to return to the client for every request</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRows(): int {}

		/**
		 * Returns all the sort fields
		 * <p>Returns all the sort fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if none of the parameters was set.</p>
		 * @link https://php.net/manual/en/solrquery.getsortfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getSortFields(): array {}

		/**
		 * Returns the offset in the complete result set
		 * <p>Returns the offset in the complete result set for the queries where the set of returned documents should begin.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStart(): int {}

		/**
		 * Returns whether or not stats is enabled
		 * <p>Returns whether or not stats is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStats(): bool {}

		/**
		 * Returns all the stats facets that were set
		 * <p>Returns all the stats facets that were set</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstatsfacets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFacets(): array {}

		/**
		 * Returns all the statistics fields
		 * <p>Returns all the statistics fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstatsfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFields(): array {}

		/**
		 * Returns whether or not the TermsComponent is enabled
		 * <p>Returns whether or not the TermsComponent is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTerms(): bool {}

		/**
		 * Returns the field from which the terms are retrieved
		 * <p>Returns the field from which the terms are retrieved</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsField(): string {}

		/**
		 * Returns whether or not to include the lower bound in the result set
		 * <p>Returns whether or not to include the lower bound in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeLowerBound(): bool {}

		/**
		 * Returns whether or not to include the upper bound term in the result set
		 * <p>Returns whether or not to include the upper bound term in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeUpperBound(): bool {}

		/**
		 * Returns the maximum number of terms Solr should return
		 * <p>Returns the maximum number of terms Solr should return</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLimit(): int {}

		/**
		 * Returns the term to start at
		 * <p>Returns the term to start at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLowerBound(): string {}

		/**
		 * Returns the maximum document frequency
		 * <p>Returns the maximum document frequency</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMaxCount(): int {}

		/**
		 * Returns the minimum document frequency to return in order to be included
		 * <p>Returns the minimum document frequency to return in order to be included</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMinCount(): int {}

		/**
		 * Returns the term prefix
		 * <p>Returns the prefix to which matching terms must be restricted. This will restrict matches to only terms that start with the prefix</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsPrefix(): string {}

		/**
		 * Whether or not to return raw characters
		 * <p>Returns a boolean indicating whether or not to return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsReturnRaw(): bool {}

		/**
		 * Returns an integer indicating how terms are sorted
		 * <p>SolrQuery::TERMS_SORT_INDEX indicates that the terms are returned by index order. SolrQuery::TERMS_SORT_COUNT implies that the terms are sorted by term frequency (highest count first)</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsSort(): int {}

		/**
		 * Returns the term to stop at
		 * <p>Returns the term to stop at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsUpperBound(): string {}

		/**
		 * Returns the time in milliseconds allowed for the query to finish
		 * <p>Returns the time in milliseconds allowed for the query to finish.</p>
		 * @return int <p>Returns and integer on success and <b><code>NULL</code></b> if it is not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTimeAllowed(): int {}

		/**
		 * Removes phrase bigram field (pf2 parameter)
		 * <p>Removes a Bigram Phrase Field (pf2 parameter) that was previously added using <code>SolrDisMaxQuery::addBigramPhraseField()</code></p>
		 * @param string $field <p>The Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.removebigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeBigramPhraseField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes a boost query partial by field name (bq)
		 * <p>Removes a boost query partial from the existing query, only if <code>SolrDisMaxQuery::addBoostQuery()</code> was used.</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.removeboostquery.php
		 * @since No version information available, might only be in Git
		 */
		public function removeBoostQuery(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes an expand filter query
		 * <p>Removes an expand filter query.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.removeexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes an expand sort field from the expand.sort parameter
		 * <p>Removes an expand sort field from the expand.sort parameter.</p>
		 * @param string $field <p>field name</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.removeexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet date fields
		 * <p>The name of the field</p>
		 * @param string $field <p>The name of the date field to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.date.other parameters
		 * <p>Removes one of the facet.date.other parameters</p>
		 * @param string $value <p>The value</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Removes one of the facet.date parameters
		 * <p>Removes one of the facet.date parameters</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.query parameters
		 * <p>Removes one of the facet.query parameters.</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetQuery(string $value): \SolrQuery {}

		/**
		 * Removes a field from the list of fields
		 * <p>Removes a field from the list of fields</p>
		 * @param string $field <p>Name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeField(string $field): \SolrQuery {}

		/**
		 * Removes a filter query
		 * <p>Removes a filter query.</p>
		 * @param string $fq <p>The filter query to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes one of the fields used for highlighting
		 * <p>Removes one of the fields used for highlighting.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removehighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeHighlightField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis fields
		 * <p>Removes one of the moreLikeThis fields.</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removemltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis query fields
		 * <p>Removes one of the moreLikeThis query fields.</p>
		 * @param string $queryField <p>The query field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removemltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltQueryField(string $queryField): \SolrQuery {}

		/**
		 * Removes a Phrase Field (pf parameter)
		 * <p>Removes a Phrase Field (pf parameter) that was previously added using SolrDisMaxQuery::addPhraseField</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.removephrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function removePhraseField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes a Query Field (qf parameter)
		 * <p>Removes a Query Field (qf parameter) from the field list added by <code>SolrDisMaxQuery::addQueryField()</code></p><p>qf: When building DisjunctionMaxQueries from the user's query it specifies the fields to search in, and boosts for those fields.</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.removequeryfield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeQueryField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes one of the sort fields
		 * <p>Removes one of the sort fields</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removesortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the stats.facet parameters
		 * <p>Removes one of the stats.facet parameters</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removestatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsFacet(string $value): \SolrQuery {}

		/**
		 * Removes one of the stats.field parameters
		 * <p>Removes one of the stats.field parameters</p>
		 * @param string $field <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removestatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsField(string $field): \SolrQuery {}

		/**
		 * Removes a Trigram Phrase Field (pf3 parameter)
		 * <p>Removes a Trigram Phrase Field (pf3 parameter)</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.removetrigramphrasefield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeTrigramPhraseField(string $field): \SolrDisMaxQuery {}

		/**
		 * Removes a field from The User Fields Parameter (uf)
		 * <p>Removes a field from The User Fields Parameter (uf)</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $field <p>Field Name</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.removeuserfield.php
		 * @since No version information available, might only be in Git
		 */
		public function removeUserField(string $field): \SolrDisMaxQuery {}

		/**
		 * Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter
		 * <p>Sets Bigram Phrase Fields (pf2) and their boosts (and slops)</p>
		 * @param string $fields <p>Fields boosts (slops)</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setbigramphrasefields.php
		 * @since No version information available, might only be in Git
		 */
		public function setBigramPhraseFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Sets Bigram Phrase Slop (ps2 parameter)
		 * <p>Sets Bigram Phrase Slop (ps2 parameter). A default slop for Bigram phrase fields.</p>
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setbigramphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setBigramPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Sets a Boost Function (bf parameter)
		 * <p>Sets Boost Function (bf parameter).</p><p>Functions (with optional boosts) that will be included in the user's query to influence the score. Any function supported natively by Solr can be used, along with a boost value. e.g.:</p><p>recip(rord(myfield),1,2,3)^1.5</p>
		 * @param string $function
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setboostfunction.php
		 * @since No version information available, might only be in Git
		 */
		public function setBoostFunction(string $function): \SolrDisMaxQuery {}

		/**
		 * Directly Sets Boost Query Parameter (bq)
		 * <p>Sets Boost Query Parameter (bq)</p>
		 * @param string $q <p>query</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setboostquery.php
		 * @since No version information available, might only be in Git
		 */
		public function setBoostQuery(string $q): \SolrDisMaxQuery {}

		/**
		 * Toggles the echoHandler parameter
		 * <p>If set to true, Solr places the name of the handle used in the response to the client for debugging purposes.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setechohandler.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoHandler(bool $flag): \SolrQuery {}

		/**
		 * Determines what kind of parameters to include in the response
		 * <p>Instructs Solr what kinds of Request parameters should be included in the response for debugging purposes, legal values include:</p><p></p>
		 * @param string $type <p>The type of parameters to include</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setechoparams.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoParams(string $type): \SolrQuery {}

		/**
		 * Enables/Disables the Expand Component
		 * <p>Enables/Disables the Expand Component.</p>
		 * @param bool $value <p>Bool flag</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.setexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpand(bool $value): \SolrQuery {}

		/**
		 * Sets the expand.q parameter
		 * <p>Sets the expand.q parameter.</p><p>Overrides the main q parameter, determines which documents to include in the main group.</p>
		 * @param string $q
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.setexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandQuery(string $q): \SolrQuery {}

		/**
		 * Sets the number of rows to display in each group (expand.rows). Server Default 5
		 * <p>Sets the number of rows to display in each group (expand.rows). Server Default 5</p>
		 * @param int $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.setexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandRows(int $value): \SolrQuery {}

		/**
		 * Sets the explainOther common query parameter
		 * <p>Sets the explainOther common query parameter</p>
		 * @param string $query <p>The Lucene query to identify a set of documents</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setexplainother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setExplainOther(string $query): \SolrQuery {}

		/**
		 * Maps to the facet parameter. Enables or disables facetting
		 * <p>Enables or disables faceting.</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacet(bool $flag): \SolrQuery {}

		/**
		 * Maps to facet.date.end
		 * <p>Maps to facet.date.end</p>
		 * @param string $value <p>See facet.date.end</p>
		 * @param string $field_override <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateEnd(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.gap
		 * <p>Maps to facet.date.gap</p>
		 * @param string $value <p>See facet.date.gap</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateGap(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.hardend
		 * <p>Maps to facet.date.hardend</p>
		 * @param bool $value <p>See facet.date.hardend</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateHardEnd(bool $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.start
		 * <p>Maps to facet.date.start</p>
		 * @param string $value <p>See facet.date.start</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateStart(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the minimum document frequency used for determining term count
		 * <p>Sets the minimum document frequency used for determining term count</p>
		 * @param int $frequency
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetEnumCacheMinDefaultFrequency(int $frequency, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.limit
		 * <p>Maps to facet.limit. Sets the maximum number of constraint counts that should be returned for the facet fields.</p>
		 * @param int $limit <p>The maximum number of constraint counts</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetLimit(int $limit, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the type of algorithm to use when faceting a field
		 * <p>Specifies the type of algorithm to use when faceting a field. This method accepts optional field override.</p>
		 * @param string $method <p>The method to use.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMethod(string $method, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.mincount
		 * <p>Sets the minimum counts for facet fields that should be included in the response</p>
		 * @param int $mincount <p>The minimum count</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMinCount(int $mincount, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.missing
		 * <p>Used to indicate that in addition to the Term-based constraints of a facet field, a count of all matching results which have no value for the field should be computed</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns this feature on. <b><code>FALSE</code></b> disables it.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMissing(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the offset into the list of constraints to allow for pagination
		 * <p>Sets the offset into the list of constraints to allow for pagination.</p>
		 * @param int $offset <p>The offset</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetOffset(int $offset, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies a string prefix with which to limits the terms on which to facet
		 * <p>Specifies a string prefix with which to limits the terms on which to facet.</p>
		 * @param string $prefix <p>The prefix string</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetPrefix(string $prefix, string $field_override = NULL): \SolrQuery {}

		/**
		 * Determines the ordering of the facet field constraints
		 * <p>Determines the ordering of the facet field constraints</p>
		 * @param int $facetSort <p>Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetSort(int $facetSort, string $field_override = NULL): \SolrQuery {}

		/**
		 * Enable/Disable result grouping (group parameter)
		 * <p>Enable/Disable result grouping (group parameter)</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroup(bool $value): \SolrQuery {}

		/**
		 * Enables caching for result grouping
		 * <p>Setting this parameter to a number greater than 0 enables caching for result grouping. Result Grouping executes two searches; this option caches the second search. The server default value is 0. Testing has shown that group caching only improves search time with Boolean, wildcard, and fuzzy queries. For simple queries like term or "match all" queries, group caching degrades performance. group.cache.percent parameter</p>
		 * @param int $percent
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupCachePercent(int $percent): \SolrQuery {}

		/**
		 * Sets group.facet parameter
		 * <p>Determines whether to compute grouped facets for the field facets specified in facet.field parameters. Grouped facets are computed based on the first specified group.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFacet(bool $value): \SolrQuery {}

		/**
		 * Sets the group format, result structure (group.format parameter)
		 * <p>Sets the group.format parameter. If this parameter is set to simple, the grouped documents are presented in a single flat list, and the start and rows parameters affect the numbers of documents instead of groups. Accepts: grouped/simple</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFormat(string $value): \SolrQuery {}

		/**
		 * Specifies the number of results to return for each group. The server default value is 1
		 * <p>Specifies the number of results to return for each group. The server default value is 1.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupLimit(int $value): \SolrQuery {}

		/**
		 * If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple
		 * <p>If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple.</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupMain(string $value): \SolrQuery {}

		/**
		 * If true, Solr includes the number of groups that have matched the query in the results
		 * <p>If true, Solr includes the number of groups that have matched the query in the results.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupNGroups(bool $value): \SolrQuery {}

		/**
		 * Sets the group.offset parameter
		 * <p>Sets the group.offset parameter.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupOffset(int $value): \SolrQuery {}

		/**
		 * If true, facet counts are based on the most relevant document of each group matching the query
		 * <p>If true, facet counts are based on the most relevant document of each group matching the query. The server default value is false. group.truncate parameter</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupTruncate(bool $value): \SolrQuery {}

		/**
		 * Enables or disables highlighting
		 * <p>Setting it to <b><code>TRUE</code></b> enables highlighted snippets to be generated in the query response.</p><p>Setting it to <b><code>FALSE</code></b> disables highlighting</p>
		 * @param bool $flag <p>Enable or disable highlighting</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlight(bool $flag): \SolrQuery {}

		/**
		 * Specifies the backup field to use
		 * <p>If a snippet cannot be generated because there were no matching terms, one can specify a field to use as the backup or default summary</p>
		 * @param string $field <p>The name of the backup field</p>
		 * @param string $field_override <p>The name of the field we are overriding this setting for.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightAlternateField(string $field, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify a formatter for the highlight output
		 * <p>Specify a formatter for the highlight output.</p>
		 * @param string $formatter <p>Currently the only legal value is "simple"</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.sethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFormatter(string $formatter, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets a text snippet generator for highlighted text
		 * <p>Specify a text snippet generator for highlighted text.</p>
		 * @param string $fragmenter <p>The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain regular expression</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragmenter(string $fragmenter, string $field_override = NULL): \SolrQuery {}

		/**
		 * The size of fragments to consider for highlighting
		 * <p>Sets the size, in characters, of fragments to consider for highlighting. "0" indicates that the whole field value should be used (no fragmenting).</p>
		 * @param int $size <p>The size, in characters, of fragments to consider for highlighting</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragsize(int $size, string $field_override = NULL): \SolrQuery {}

		/**
		 * Use SpanScorer to highlight phrase terms
		 * <p>Use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @param bool $flag <p>Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightHighlightMultiTerm(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of characters of the field to return
		 * <p>If SolrQuery::setHighlightAlternateField() was passed the value <b><code>TRUE</code></b>, this parameter specifies the maximum number of characters of the field to return</p><p>Any value less than or equal to 0 means unlimited.</p>
		 * @param int $fieldLength <p>The length of the field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAlternateFieldLength(int $fieldLength, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the number of characters into a document to look for suitable snippets
		 * <p>Specifies the number of characters into a document to look for suitable snippets</p>
		 * @param int $value <p>The number of characters into a document to look for suitable snippets</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAnalyzedChars(int $value): \SolrQuery {}

		/**
		 * Whether or not to collapse contiguous fragments into a single fragment
		 * <p>Whether or not to collapse contiguous fragments into a single fragment</p>
		 * @param bool $flag
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMergeContiguous(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify the maximum number of characters to analyze
		 * <p>Specify the maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @param int $maxAnalyzedChars <p>The maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars): \SolrQuery {}

		/**
		 * Specify the regular expression for fragmenting
		 * <p>Specifies the regular expression for fragmenting. This could be used to extract sentences</p>
		 * @param string $value <p>The regular expression for fragmenting. This could be used to extract sentences</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexPattern(string $value): \SolrQuery {}

		/**
		 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
		 * <p>The factor by which the regex fragmenter can stray from the ideal fragment size ( specfied by SolrQuery::setHighlightFragsize )to accommodate the regular expression</p>
		 * @param float $factor <p>The factor by which the regex fragmenter can stray from the ideal fragment size</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexSlop(float $factor): \SolrQuery {}

		/**
		 * Require field matching during highlighting
		 * <p>If <b><code>TRUE</code></b>, then a field will only be highlighted if the query matched in this particular field.</p><p>This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to <b><code>TRUE</code></b></p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRequireFieldMatch(bool $flag): \SolrQuery {}

		/**
		 * Sets the text which appears after a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p>
		 * @param string $simplePost <p>Sets the text which appears after a highlighted term</p> <p></p><pre>The default is &lt;/em&gt;</pre>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.sethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePost(string $simplePost, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the text which appears before a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p><p></p>
		 * @param string $simplePre <p>The text which appears before a highlighted term</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePre(string $simplePre, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the maximum number of highlighted snippets to generate per field
		 * <p>Sets the maximum number of highlighted snippets to generate per field</p>
		 * @param int $value <p>The maximum number of highlighted snippets to generate per field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSnippets(int $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Whether to highlight phrase terms only when they appear within the query phrase
		 * <p>Sets whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightUsePhraseHighlighter(bool $flag): \SolrQuery {}

		/**
		 * Set Minimum "Should" Match (mm)
		 * <p>Set Minimum "Should" Match parameter (mm). If the default query operator is AND then mm=100%, if the default query operator (q.op) is OR, then mm=0%.</p>
		 * @param string $value <p>Minimum match value/expression</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setminimummatch.php
		 * @since No version information available, might only be in Git
		 */
		public function setMinimumMatch(string $value): \SolrDisMaxQuery {}

		/**
		 * Enables or disables moreLikeThis
		 * <p>Enables or disables moreLikeThis</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it and <b><code>FALSE</code></b> turns it off.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMlt(bool $flag): \SolrQuery {}

		/**
		 * Set if the query will be boosted by the interesting term relevance
		 * <p>Set if the query will be boosted by the interesting term relevance</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltBoost(bool $flag): \SolrQuery {}

		/**
		 * Set the number of similar documents to return for each result
		 * <p>Set the number of similar documents to return for each result</p>
		 * @param int $count <p>The number of similar documents to return for each result</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltCount(int $count): \SolrQuery {}

		/**
		 * Sets the maximum number of query terms included
		 * <p>Sets the maximum number of query terms that will be included in any generated query.</p>
		 * @param int $value <p>The maximum number of query terms that will be included in any generated query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumQueryTerms(int $value): \SolrQuery {}

		/**
		 * Specifies the maximum number of tokens to parse
		 * <p>Specifies the maximum number of tokens to parse in each example doc field that is not stored with TermVector support.</p>
		 * @param int $value <p>The maximum number of tokens to parse</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumTokens(int $value): \SolrQuery {}

		/**
		 * Sets the maximum word length
		 * <p>Sets the maximum word length above which words will be ignored.</p>
		 * @param int $maxWordLength <p>The maximum word length above which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxWordLength(int $maxWordLength): \SolrQuery {}

		/**
		 * Sets the mltMinDoc frequency
		 * <p>The frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @param int $minDocFrequency <p>Sets the frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinDocFrequency(int $minDocFrequency): \SolrQuery {}

		/**
		 * Sets the frequency below which terms will be ignored in the source docs
		 * <p>Sets the frequency below which terms will be ignored in the source docs</p>
		 * @param int $minTermFrequency <p>The frequency below which terms will be ignored in the source docs</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinTermFrequency(int $minTermFrequency): \SolrQuery {}

		/**
		 * Sets the minimum word length
		 * <p>Sets the minimum word length below which words will be ignored.</p>
		 * @param int $minWordLength <p>The minimum word length below which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinWordLength(int $minWordLength): \SolrQuery {}

		/**
		 * Exclude the header from the returned results
		 * <p>Exclude the header from the returned results.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> excludes the header from the result.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setomitheader.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setOmitHeader(bool $flag): \SolrQuery {}

		/**
		 * Sets Phrase Fields and their boosts (and slops) using pf2 parameter
		 * <p>Sets Phrase Fields (pf) and their boosts (and slops)</p>
		 * @param string $fields <p>Fields, boosts [, slops]</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setphrasefields.php
		 * @since No version information available, might only be in Git
		 */
		public function setPhraseFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Sets the default slop on phrase queries (ps parameter)
		 * <p>Sets the default amount of slop on phrase queries built with "pf", "pf2" and/or "pf3" fields (affects boosting). "ps" parameter</p>
		 * @param string $slop
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Sets the search query
		 * <p>Sets the search query.</p>
		 * @param string $query <p>The search query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object</p>
		 * @link https://php.net/manual/en/solrquery.setquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setQuery(string $query): \SolrQuery {}

		/**
		 * Set Query Alternate (q.alt parameter)
		 * <p>Set Query Alternate (q.alt parameter)</p><p>When the main <i>q</i> parameter is not specified or is blank. The <i>q.alt</i> parameter is used</p>
		 * @param string $q <p>Query String</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setqueryalt.php
		 * @since No version information available, might only be in Git
		 */
		public function setQueryAlt(string $q): \SolrDisMaxQuery {}

		/**
		 * Specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter)
		 * <p>The Query Phrase Slop is the amount of slop permitted on phrase queries explicitly included in the user's query string with the <i>qf</i> parameter.</p><p>slop refers to the number of positions one token needs to be moved in relation to another token in order to match a phrase specified in a query.</p>
		 * @param string $slop <p>Amount of slop</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setqueryphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setQueryPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Specifies the maximum number of rows to return in the result
		 * <p>Specifies the maximum number of rows to return in the result</p>
		 * @param int $rows <p>The maximum number of rows to return</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.setrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setRows(int $rows): \SolrQuery {}

		/**
		 * Flag to show debug information
		 * <p>Whether to show debug info</p>
		 * @param bool $flag <p>Whether to show debug info. <b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setshowdebuginfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setShowDebugInfo(bool $flag): \SolrQuery {}

		/**
		 * Specifies the number of rows to skip
		 * <p>Specifies the number of rows to skip. Useful in pagination of results.</p>
		 * @param int $start <p>The number of rows to skip.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.setstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStart(int $start): \SolrQuery {}

		/**
		 * Enables or disables the Stats component
		 * <p>Enables or disables the Stats component.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns on the stats component and <b><code>FALSE</code></b> disables it.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStats(bool $flag): \SolrQuery {}

		/**
		 * Enables or disables the TermsComponent
		 * <p>Enables or disables the TermsComponent</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it. <b><code>FALSE</code></b> turns it off</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTerms(bool $flag): \SolrQuery {}

		/**
		 * Sets the name of the field to get the Terms from
		 * <p>Sets the name of the field to get the terms from</p>
		 * @param string $fieldname <p>The field name</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsField(string $fieldname): \SolrQuery {}

		/**
		 * Include the lower bound term in the result set
		 * <p>Include the lower bound term in the result set.</p>
		 * @param bool $flag <p>Include the lower bound term in the result set</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeLowerBound(bool $flag): \SolrQuery {}

		/**
		 * Include the upper bound term in the result set
		 * <p>Include the upper bound term in the result set.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeUpperBound(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of terms to return
		 * <p>Sets the maximum number of terms to return</p>
		 * @param int $limit <p>The maximum number of terms to return. All the terms will be returned if the limit is negative.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLimit(int $limit): \SolrQuery {}

		/**
		 * Specifies the Term to start from
		 * <p>Specifies the Term to start from</p>
		 * @param string $lowerBound <p>The lower bound Term</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLowerBound(string $lowerBound): \SolrQuery {}

		/**
		 * Sets the maximum document frequency
		 * <p>Sets the maximum document frequency.</p>
		 * @param int $frequency <p>The maximum document frequency.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMaxCount(int $frequency): \SolrQuery {}

		/**
		 * Sets the minimum document frequency
		 * <p>Sets the minimum doc frequency to return in order to be included</p>
		 * @param int $frequency <p>The minimum frequency</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMinCount(int $frequency): \SolrQuery {}

		/**
		 * Restrict matches to terms that start with the prefix
		 * <p>Restrict matches to terms that start with the prefix</p>
		 * @param string $prefix <p>Restrict matches to terms that start with the prefix</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsPrefix(string $prefix): \SolrQuery {}

		/**
		 * Return the raw characters of the indexed term
		 * <p>If true, return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsReturnRaw(bool $flag): \SolrQuery {}

		/**
		 * Specifies how to sort the returned terms
		 * <p>If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first). If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order</p>
		 * @param int $sortType <p>SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsSort(int $sortType): \SolrQuery {}

		/**
		 * Sets the term to stop at
		 * <p>Sets the term to stop at</p>
		 * @param string $upperBound <p>The term to stop at</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsUpperBound(string $upperBound): \SolrQuery {}

		/**
		 * Sets Tie Breaker parameter (tie parameter)
		 * <p>Sets Tie Breaker parameter (tie parameter)</p>
		 * @param string $tieBreaker <p>The <i>tie</i> parameter specifies a float value (which should be something much less than 1) to use as tiebreaker in DisMax queries.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.settiebreaker.php
		 * @since No version information available, might only be in Git
		 */
		public function setTieBreaker(string $tieBreaker): \SolrDisMaxQuery {}

		/**
		 * The time allowed for search to finish
		 * <p>The time allowed for a search to finish. This value only applies to the search and not to requests in general. Time is in milliseconds. Values less than or equal to zero implies no time restriction. Partial results may be returned, if there are any.</p>
		 * @param int $timeAllowed <p>The time allowed for a search to finish.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTimeAllowed(int $timeAllowed): \SolrQuery {}

		/**
		 * Directly Sets Trigram Phrase Fields (pf3 parameter)
		 * <p>Directly Sets Trigram Phrase Fields (pf3 parameter)</p>
		 * @param string $fields <p>Trigram Phrase Fields</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.settrigramphrasefields.php
		 * @since No version information available, might only be in Git
		 */
		public function setTrigramPhraseFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Sets Trigram Phrase Slop (ps3 parameter)
		 * <p>Sets Trigram Phrase Slop (ps3 parameter)</p>
		 * @param string $slop <p>Phrase slop</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.settrigramphraseslop.php
		 * @since No version information available, might only be in Git
		 */
		public function setTrigramPhraseSlop(string $slop): \SolrDisMaxQuery {}

		/**
		 * Sets User Fields parameter (uf)
		 * <p>Sets User Fields parameter (uf)</p><p>User Fields: Specifies which schema fields the end user shall be allowed to query.</p>
		 * @param string $fields <p>Fields names separated by space</p> <p>This parameter supports wildcards.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.setuserfields.php
		 * @since No version information available, might only be in Git
		 */
		public function setUserFields(string $fields): \SolrDisMaxQuery {}

		/**
		 * Switch QueryParser to be DisMax Query Parser
		 * <p>Switch QueryParser to be DisMax Query Parser</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.usedismaxqueryparser.php
		 * @since No version information available, might only be in Git
		 */
		public function useDisMaxQueryParser(): \SolrDisMaxQuery {}

		/**
		 * Switch QueryParser to be EDisMax
		 * <p>Switch QueryParser to be EDisMax. By default the query builder uses edismax, if it was switched using <code>SolrDisMaxQuery::useDisMaxQueryParser()</code>, it can be switched back using this method.</p>
		 * @return SolrDisMaxQuery <p><code>SolrDisMaxQuery</code></p>
		 * @link https://php.net/manual/en/solrdismaxquery.useedismaxqueryparser.php
		 * @since No version information available, might only be in Git
		 */
		public function useEDisMaxQueryParser(): \SolrDisMaxQuery {}
	}

	/**
	 * <p>Represents a Solr document retrieved from a query response.</p>
	 * @link https://php.net/manual/en/class.solrdocument.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrDocument implements \ArrayAccess, \Iterator, \Serializable {

		/**
		 * @var int <p>Default mode for sorting fields within the document.</p>
		 * @link https://php.net/manual/en/class.solrdocument.php
		 */
		const SORT_DEFAULT = 1;

		/**
		 * @var int <p>Sorts the fields in ascending order</p>
		 * @link https://php.net/manual/en/class.solrdocument.php
		 */
		const SORT_ASC = 1;

		/**
		 * @var int <p>Sorts the fields in descending order</p>
		 * @link https://php.net/manual/en/class.solrdocument.php
		 */
		const SORT_DESC = 2;

		/**
		 * @var int <p>Sorts the fields by field name.</p>
		 * @link https://php.net/manual/en/class.solrdocument.php
		 */
		const SORT_FIELD_NAME = 1;

		/**
		 * @var int <p>Sorts the fields by number of values in each field.</p>
		 * @link https://php.net/manual/en/class.solrdocument.php
		 */
		const SORT_FIELD_VALUE_COUNT = 2;

		/**
		 * @var int <p>Sorts the fields by thier boost values.</p>
		 * @link https://php.net/manual/en/class.solrdocument.php
		 */
		const SORT_FIELD_BOOST_VALUE = 4;

		/**
		 * Creates a copy of a SolrDocument object
		 * <p>Creates a copy of a SolrDocument object. Not to be called directly.</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrdocument.clone.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __clone() {}

		/**
		 * Constructor
		 * <p>Constructor for SolrDocument</p>
		 * @return self
		 * @link https://php.net/manual/en/solrdocument.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor for SolrDocument.</p>
		 * @return void
		 * @link https://php.net/manual/en/solrdocument.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Access the field as a property
		 * <p>Magic method for accessing the field as a property.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return SolrDocumentField <p>Returns a SolrDocumentField instance.</p>
		 * @link https://php.net/manual/en/solrdocument.get.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __get(string $fieldName): \SolrDocumentField {}

		/**
		 * Checks if a field exists
		 * <p>Checks if a field exists</p>
		 * @param string $fieldName <p>Name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.isset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __isset(string $fieldName): bool {}

		/**
		 * Adds another field to the document
		 * <p>Adds another field to the document. Used to set the fields as new properties.</p>
		 * @param string $fieldName <p>Name of the field.</p>
		 * @param string $fieldValue <p>Field value.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.set.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __set(string $fieldName, string $fieldValue): bool {}

		/**
		 * Removes a field from the document
		 * <p>Removes a field from the document when the field is access as an object property.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.unset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __unset(string $fieldName): bool {}

		/**
		 * Adds a field to the document
		 * <p>This method adds a field to the SolrDocument instance.</p>
		 * @param string $fieldName <p>The name of the field</p>
		 * @param string $fieldValue <p>The value of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $fieldName, string $fieldValue): bool {}

		/**
		 * Drops all the fields in the document
		 * <p>Resets the current object. Discards all the fields and resets the document boost to zero.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.clear.php
		 * @since PECL solr >= 0.9.2
		 */
		public function clear(): bool {}

		/**
		 * Retrieves the current field
		 * <p>Retrieves the current field</p>
		 * @return SolrDocumentField <p>Returns the field</p>
		 * @link https://php.net/manual/en/solrdocument.current.php
		 * @since PECL solr >= 0.9.2
		 */
		public function current(): \SolrDocumentField {}

		/**
		 * Removes a field from the document
		 * <p>Removes a field from the document.</p>
		 * @param string $fieldName <p>Name of the field</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.deletefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteField(string $fieldName): bool {}

		/**
		 * Checks if a field exists in the document
		 * <p>Checks if the requested field as a valid fieldname in the document.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the field is present and <b><code>FALSE</code></b> if it does not.</p>
		 * @link https://php.net/manual/en/solrdocument.fieldexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function fieldExists(string $fieldName): bool {}

		/**
		 * Returns an array of child documents (SolrDocument)
		 * <p>Returns an array of child documents (SolrDocument)</p>
		 * @return array
		 * @link https://php.net/manual/en/solrdocument.getchilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocuments(): array {}

		/**
		 * Returns the number of child documents
		 * <p>Returns the number of child documents</p>
		 * @return int
		 * @link https://php.net/manual/en/solrdocument.getchilddocumentscount.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocumentsCount(): int {}

		/**
		 * Retrieves a field by name
		 * <p>Retrieves a field by name.</p>
		 * @param string $fieldName <p>Name of the field.</p>
		 * @return SolrDocumentField <p>Returns a SolrDocumentField on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.getfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getField(string $fieldName): \SolrDocumentField {}

		/**
		 * Returns the number of fields in this document
		 * <p>Returns the number of fields in this document. Multi-value fields are only counted once.</p>
		 * @return int <p>Returns an integer on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.getfieldcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldCount(): int {}

		/**
		 * Returns an array of fields names in the document
		 * <p>Returns an array of fields names in the document.</p>
		 * @return array <p>Returns an array containing the names of the fields in this document.</p>
		 * @link https://php.net/manual/en/solrdocument.getfieldnames.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldNames(): array {}

		/**
		 * Returns a SolrInputDocument equivalent of the object
		 * <p>Returns a SolrInputDocument equivalent of the object. This is useful if one wishes to resubmit/update a document retrieved from a query.</p>
		 * @return SolrInputDocument <p>Returns a SolrInputDocument on success and <b><code>NULL</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.getinputdocument.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInputDocument(): \SolrInputDocument {}

		/**
		 * Checks whether the document has any child documents
		 * <p>Checks whether the document has any child documents</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrdocument.haschilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function hasChildDocuments(): bool {}

		/**
		 * Retrieves the current key
		 * <p>Retrieves the current key.</p>
		 * @return string <p>Returns the current key.</p>
		 * @link https://php.net/manual/en/solrdocument.key.php
		 * @since PECL solr >= 0.9.2
		 */
		public function key(): string {}

		/**
		 * Merges source to the current SolrDocument
		 * <p>Merges source to the current SolrDocument.</p>
		 * @param \SolrDocument $sourceDoc <p>The source document.</p>
		 * @param bool $overwrite <p>If this is <b><code>TRUE</code></b> then fields with the same name in the destination document will be overwritten.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.merge.php
		 * @since PECL solr >= 0.9.2
		 */
		public function merge(\SolrDocument $sourceDoc, bool $overwrite = TRUE): bool {}

		/**
		 * Moves the internal pointer to the next field
		 * <p>Moves the internal pointer to the next field.</p>
		 * @return void <p>This method has no return value.</p>
		 * @link https://php.net/manual/en/solrdocument.next.php
		 * @since PECL solr >= 0.9.2
		 */
		public function next(): void {}

		/**
		 * Checks if a particular field exists
		 * <p>Checks if a particular field exists. This is used when the object is treated as an array.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.offsetexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetExists(string $fieldName): bool {}

		/**
		 * Retrieves a field
		 * <p>This is used to retrieve the field when the object is treated as an array.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return SolrDocumentField <p>Returns a SolrDocumentField object.</p>
		 * @link https://php.net/manual/en/solrdocument.offsetget.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetGet(string $fieldName): \SolrDocumentField {}

		/**
		 * Adds a field to the document
		 * <p>Used when the object is treated as an array to add a field to the document.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @param string $fieldValue <p>The value for this field.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.offsetset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetSet(string $fieldName, string $fieldValue): void {}

		/**
		 * Removes a field
		 * <p>Removes a field from the document.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return void <p>No return value.</p>
		 * @link https://php.net/manual/en/solrdocument.offsetunset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetUnset(string $fieldName): void {}

		/**
		 * This is an alias to SolrDocument::clear()
		 * <p>This is an alias to SolrDocument::clear()</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.reset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function reset(): bool {}

		/**
		 * Resets the internal pointer to the beginning
		 * <p>Resets the internal pointer to the beginning.</p>
		 * @return void <p>This method has no return value.</p>
		 * @link https://php.net/manual/en/solrdocument.rewind.php
		 * @since PECL solr >= 0.9.2
		 */
		public function rewind(): void {}

		/**
		 * Used for custom serialization
		 * <p>Used for custom serialization.</p>
		 * @return string <p>Returns a string representing the serialized Solr document.</p>
		 * @link https://php.net/manual/en/solrdocument.serialize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function serialize(): string {}

		/**
		 * Sorts the fields in the document
		 * @param int $sortOrderBy <p>The sort criteria.</p>
		 * @param int $sortDirection <p>The sort direction.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrdocument.sort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function sort(int $sortOrderBy, int $sortDirection = SolrDocument::SORT_ASC): bool {}

		/**
		 * Returns an array representation of the document
		 * <p>Returns an array representation of the document.</p>
		 * @return array <p>Returns an array representation of the document.</p>
		 * @link https://php.net/manual/en/solrdocument.toarray.php
		 * @since PECL solr >= 0.9.2
		 */
		public function toArray(): array {}

		/**
		 * Custom serialization of SolrDocument objects
		 * <p>Custom serialization of SolrDocument objects</p>
		 * @param string $serialized <p>An XML representation of the document.</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrdocument.unserialize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function unserialize(string $serialized): void {}

		/**
		 * Checks if the current position internally is still valid
		 * <p>Checks if the current position internally is still valid. It is used during foreach operations.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> if the current position is no longer valid.</p>
		 * @link https://php.net/manual/en/solrdocument.valid.php
		 * @since PECL solr >= 0.9.2
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>This represents a field in a Solr document. All its properties are read-only.</p>
	 * @link https://php.net/manual/en/class.solrdocumentfield.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrDocumentField {

		/**
		 * @var string <p>The name of the field.</p>
		 * @link https://php.net/manual/en/class.solrdocumentfield.php#solrdocumentfield.props.name
		 */
		public $name;

		/**
		 * @var float <p>The boost value for the field</p>
		 * @link https://php.net/manual/en/class.solrdocumentfield.php#solrdocumentfield.props.boost
		 */
		public $boost;

		/**
		 * @var array <p>An array of values for this field</p>
		 * @link https://php.net/manual/en/class.solrdocumentfield.php#solrdocumentfield.props.values
		 */
		public $values;

		/**
		 * Constructor
		 * <p>Constructor.</p>
		 * @return self <p>None.</p>
		 * @link https://php.net/manual/en/solrdocumentfield.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor.</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrdocumentfield.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}
	}

	/**
	 * <p>This is the base class for all exception thrown by the Solr extension classes.</p>
	 * @link https://php.net/manual/en/class.solrexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrException extends \Exception {

		/**
		 * @var int <p>The line in c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>The c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>The c-space function where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Returns internal information where the Exception was thrown
		 * <p>Returns internal information where the Exception was thrown.</p>
		 * @return array <p>Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.</p>
		 * @link https://php.net/manual/en/solrexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a response from the solr server.</p>
	 * @link https://php.net/manual/en/class.solrgenericresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrGenericResponse extends \SolrResponse {

		/**
		 * @var int <p>Documents should be parsed as SolrObject instances</p>
		 * @link https://php.net/manual/en/class.solrgenericresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var int <p>Documents should be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrgenericresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var int <p>The http status of the response.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var int <p>Whether to parse the solr documents as SolrObject or SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>Was there an error during the request</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>Detailed message on http status</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>The request URL</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>A string of raw headers sent during the request.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>The raw request sent to the server</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Response headers from the Solr server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>The response message from the server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>The response in PHP serialized format.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * Constructor
		 * <p>Constructor</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrgenericresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor.</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrgenericresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Returns the XML response as serialized PHP data
		 * <p>Returns the XML response as serialized PHP data</p>
		 * @return string <p>Returns the XML response as serialized PHP data</p>
		 * @link https://php.net/manual/en/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * Returns the HTTP status of the response
		 * <p>Returns the HTTP status of the response.</p>
		 * @return int <p>Returns the HTTP status of the response.</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * Returns more details on the HTTP status
		 * <p>Returns more details on the HTTP status.</p>
		 * @return string <p>Returns more details on the HTTP status</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Returns the raw request sent to the Solr server
		 * <p>Returns the raw request sent to the Solr server.</p>
		 * @return string <p>Returns the raw request sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Returns the raw request headers sent to the Solr server
		 * <p>Returns the raw request headers sent to the Solr server.</p>
		 * @return string <p>Returns the raw request headers sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Returns the raw response from the server
		 * <p>Returns the raw response from the server.</p>
		 * @return string <p>Returns the raw response from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Returns the raw response headers from the server
		 * <p>Returns the raw response headers from the server.</p>
		 * @return string <p>Returns the raw response headers from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * Returns the full URL the request was sent to
		 * <p>Returns the full URL the request was sent to.</p>
		 * @return string <p>Returns the full URL the request was sent to</p>
		 * @link https://php.net/manual/en/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * Returns a SolrObject representing the XML response from the server
		 * <p>Returns a SolrObject representing the XML response from the server.</p>
		 * @return SolrObject <p>Returns a SolrObject representing the XML response from the server</p>
		 * @link https://php.net/manual/en/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * Sets the parse mode
		 * <p>Sets the parse mode.</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * Was the request a success
		 * <p>Used to check if the request to the server was successful.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if it was successful and <b><code>FALSE</code></b> if it was not.</p>
		 * @link https://php.net/manual/en/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>This object is thrown when an illegal or invalid argument is passed to a method.</p>
	 * @link https://php.net/manual/en/class.solrillegalargumentexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrIllegalArgumentException extends \SolrException {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var int <p>The line in c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>The c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>The c-space function where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Returns internal information where the Exception was thrown
		 * <p>Returns internal information where the Exception was thrown.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.</p>
		 * @link https://php.net/manual/en/solrillegalargumentexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>This object is thrown when an illegal or unsupported operation is performed on an object.</p>
	 * @link https://php.net/manual/en/class.solrillegaloperationexception.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrIllegalOperationException extends \SolrException {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var int <p>The line in c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>The c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>The c-space function where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Returns internal information where the Exception was thrown
		 * <p>Returns internal information where the Exception was thrown.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.</p>
		 * @link https://php.net/manual/en/solrillegaloperationexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>This class represents a Solr document that is about to be submitted to the Solr index.</p>
	 * @link https://php.net/manual/en/class.solrinputdocument.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrInputDocument {

		/**
		 * @var int <p>Sorts the fields in ascending order.</p>
		 * @link https://php.net/manual/en/class.solrinputdocument.php
		 */
		const SORT_DEFAULT = 1;

		/**
		 * @var int <p>Sorts the fields in ascending order.</p>
		 * @link https://php.net/manual/en/class.solrinputdocument.php
		 */
		const SORT_ASC = 1;

		/**
		 * @var int <p>Sorts the fields in descending order.</p>
		 * @link https://php.net/manual/en/class.solrinputdocument.php
		 */
		const SORT_DESC = 2;

		/**
		 * @var int <p>Sorts the fields by name</p>
		 * @link https://php.net/manual/en/class.solrinputdocument.php
		 */
		const SORT_FIELD_NAME = 1;

		/**
		 * @var int <p>Sorts the fields by number of values.</p>
		 * @link https://php.net/manual/en/class.solrinputdocument.php
		 */
		const SORT_FIELD_VALUE_COUNT = 2;

		/**
		 * @var int <p>Sorts the fields by boost value.</p>
		 * @link https://php.net/manual/en/class.solrinputdocument.php
		 */
		const SORT_FIELD_BOOST_VALUE = 4;

		/**
		 * Creates a copy of a SolrDocument
		 * <p>Should not be called directly. It is used to create a deep copy of a SolrInputDocument.</p>
		 * @return void <p>Creates a new SolrInputDocument instance.</p>
		 * @link https://php.net/manual/en/solrinputdocument.clone.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __clone() {}

		/**
		 * Constructor
		 * <p>Constructor.</p>
		 * @return self <p>None.</p>
		 * @link https://php.net/manual/en/solrinputdocument.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrinputdocument.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Adds a child document for block indexing
		 * <p>Adds a child document to construct a document block with nested documents.</p>
		 * @param \SolrInputDocument $child <p>A <code>SolrInputDocument</code> object.</p>
		 * @return void
		 * @link https://php.net/manual/en/solrinputdocument.addchilddocument.php
		 * @since PECL solr >= 2.3.0
		 */
		public function addChildDocument(\SolrInputDocument $child): void {}

		/**
		 * Adds an array of child documents
		 * <p>Adds an array of child documents to the current input document.</p>
		 * @param array $docs <p>An <code>array</code> of <code>SolrInputDocument</code> objects.</p>
		 * @return void
		 * @link https://php.net/manual/en/solrinputdocument.addchilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function addChildDocuments(array &$docs): void {}

		/**
		 * Adds a field to the document
		 * <p>For multi-value fields, if a valid boost value is specified, the specified value will be multiplied by the current boost value for this field.</p>
		 * @param string $fieldName <p>The name of the field</p>
		 * @param string $fieldValue <p>The value for the field.</p>
		 * @param float $fieldBoostValue <p>The index time boost for the field. Though this cannot be negative, you can still pass values less than 1.0 but they must be greater than zero.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $fieldName, string $fieldValue, float $fieldBoostValue = 0.0): bool {}

		/**
		 * Resets the input document
		 * <p>Resets the document by dropping all the fields and resets the document boost to zero.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.clear.php
		 * @since PECL solr >= 0.9.2
		 */
		public function clear(): bool {}

		/**
		 * Removes a field from the document
		 * <p>Removes a field from the document.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.deletefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function deleteField(string $fieldName): bool {}

		/**
		 * Checks if a field exists
		 * <p>Checks if a field exists</p>
		 * @param string $fieldName <p>Name of the field.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the field was found and <b><code>FALSE</code></b> if it was not found.</p>
		 * @link https://php.net/manual/en/solrinputdocument.fieldexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function fieldExists(string $fieldName): bool {}

		/**
		 * Retrieves the current boost value for the document
		 * <p>Retrieves the current boost value for the document.</p>
		 * @return float <p>Returns the boost value on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.getboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getBoost(): float {}

		/**
		 * Returns an array of child documents (SolrInputDocument)
		 * <p>Returns an array of child documents (SolrInputDocument)</p>
		 * @return array
		 * @link https://php.net/manual/en/solrinputdocument.getchilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocuments(): array {}

		/**
		 * Returns the number of child documents
		 * <p>Returns the number of child documents</p>
		 * @return int
		 * @link https://php.net/manual/en/solrinputdocument.getchilddocumentscount.php
		 * @since PECL solr >= 2.3.0
		 */
		public function getChildDocumentsCount(): int {}

		/**
		 * Retrieves a field by name
		 * <p>Retrieves a field in the document.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return SolrDocumentField <p>Returns a SolrDocumentField object on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.getfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getField(string $fieldName): \SolrDocumentField {}

		/**
		 * Retrieves the boost value for a particular field
		 * <p>Retrieves the boost value for a particular field.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @return float <p>Returns the boost value for the field or <b><code>FALSE</code></b> if there was an error.</p>
		 * @link https://php.net/manual/en/solrinputdocument.getfieldboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldBoost(string $fieldName): float {}

		/**
		 * Returns the number of fields in the document
		 * <p>Returns the number of fields in the document.</p>
		 * @return int|false <p>Returns an integer on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.getfieldcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldCount(): int|false {}

		/**
		 * Returns an array containing all the fields in the document
		 * <p>Returns an array containing all the fields in the document.</p>
		 * @return array <p>Returns an array on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.getfieldnames.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFieldNames(): array {}

		/**
		 * Returns true if the document has any child documents
		 * <p>Checks whether the document has any child documents</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrinputdocument.haschilddocuments.php
		 * @since PECL solr >= 2.3.0
		 */
		public function hasChildDocuments(): bool {}

		/**
		 * Merges one input document into another
		 * <p>Merges one input document into another.</p>
		 * @param \SolrInputDocument $sourceDoc <p>The source document.</p>
		 * @param bool $overwrite <p>If this is <b><code>TRUE</code></b> it will replace matching fields in the destination document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. In the future, this will be modified to return the number of fields in the new document.</p>
		 * @link https://php.net/manual/en/solrinputdocument.merge.php
		 * @since PECL solr >= 0.9.2
		 */
		public function merge(\SolrInputDocument $sourceDoc, bool $overwrite = TRUE): bool {}

		/**
		 * This is an alias of SolrInputDocument::clear
		 * <p>This is an alias of SolrInputDocument::clear</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.reset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function reset(): bool {}

		/**
		 * Sets the boost value for this document
		 * <p>Sets the boost value for this document.</p>
		 * @param float $documentBoostValue <p>The index-time boost value for this document.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.setboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setBoost(float $documentBoostValue): bool {}

		/**
		 * Sets the index-time boost value for a field
		 * <p>Sets the index-time boost value for a field. This replaces the current boost value for this field.</p>
		 * @param string $fieldName <p>The name of the field.</p>
		 * @param float $fieldBoostValue <p>The index time boost value.</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrinputdocument.setfieldboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFieldBoost(string $fieldName, float $fieldBoostValue): bool {}

		/**
		 * Sorts the fields within the document
		 * @param int $sortOrderBy <p>The sort criteria</p>
		 * @param int $sortDirection <p>The sort direction</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.sort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function sort(int $sortOrderBy, int $sortDirection = SolrInputDocument::SORT_ASC): bool {}

		/**
		 * Returns an array representation of the input document
		 * <p>Returns an array representation of the input document.</p>
		 * @return array <p>Returns an array containing the fields. It returns <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrinputdocument.toarray.php
		 * @since PECL solr >= 0.9.2
		 */
		public function toArray(): array {}
	}

	/**
	 * @link https://php.net/manual/en/class.solrmissingmandatoryparameterexception.php
	 * @since No version information available, might only be in Git
	 */
	class SolrMissingMandatoryParameterException extends \SolrException {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var int <p>The line in c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>The c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>The c-space function where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Returns internal information where the Exception was thrown
		 * <p>Returns internal information where the Exception was thrown.</p>
		 * @return array <p>Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.</p>
		 * @link https://php.net/manual/en/solrexception.getinternalinfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getInternalInfo(): array {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a collection of name-value pairs sent to the Solr server during a request.</p>
	 * @link https://php.net/manual/en/class.solrmodifiableparams.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrModifiableParams extends \SolrParams implements \Serializable {

		/**
		 * Constructor
		 * <p>Constructor</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrmodifiableparams.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrmodifiableparams.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * This is an alias for SolrParams::addParam
		 * <p>This is an alias for SolrParams::addParam</p>
		 * @param string $name <p>The name of the parameter</p>
		 * @param string $value <p>The value of the parameter</p>
		 * @return SolrParams <p>Returns a SolrParams instance on success</p>
		 * @link https://php.net/manual/en/solrparams.add.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function add(string $name, string $value): \SolrParams {}

		/**
		 * Adds a parameter to the object
		 * <p>Adds a parameter to the object. This is used for parameters that can be specified multiple times.</p>
		 * @param string $name <p>Name of parameter</p>
		 * @param string $value <p>Value of parameter</p>
		 * @return SolrParams <p>Returns a SolrParam object on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrparams.addparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addParam(string $name, string $value): \SolrParams {}

		/**
		 * This is an alias for SolrParams::getParam
		 * <p>This is an alias for SolrParams::getParam</p>
		 * @param string $param_name <p>Then name of the parameter</p>
		 * @return mixed <p>Returns an array or string depending on the type of parameter</p>
		 * @link https://php.net/manual/en/solrparams.get.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function get(string $param_name): mixed {}

		/**
		 * Returns a parameter value
		 * <p>Returns a parameter with name param_name</p>
		 * @param string $param_name <p>The name of the parameter</p>
		 * @return mixed <p>Returns a string or an array depending on the type of the parameter</p>
		 * @link https://php.net/manual/en/solrparams.getparam.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParam(string $param_name = NULL): mixed {}

		/**
		 * Returns an array of non URL-encoded parameters
		 * <p>Returns an array of non URL-encoded parameters</p>
		 * @return array <p>Returns an array of non URL-encoded parameters</p>
		 * @link https://php.net/manual/en/solrparams.getparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParams(): array {}

		/**
		 * Returns an array of URL-encoded parameters
		 * <p>Returns an array on URL-encoded parameters</p>
		 * @return array <p>Returns an array on URL-encoded parameters</p>
		 * @link https://php.net/manual/en/solrparams.getpreparedparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getPreparedParams(): array {}

		/**
		 * Used for custom serialization
		 * <p>Used for custom serialization</p>
		 * @return string <p>Used for custom serialization</p>
		 * @link https://php.net/manual/en/solrparams.serialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function serialize(): string {}

		/**
		 * An alias of SolrParams::setParam
		 * <p>An alias of SolrParams::setParam</p>
		 * @param string $name <p>Then name of the parameter</p>
		 * @param string $value <p>The parameter value</p>
		 * @return void <p>Returns an instance of the SolrParams object on success</p>
		 * @link https://php.net/manual/en/solrparams.set.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function set(string $name, string $value): void {}

		/**
		 * Sets the parameter to the specified value
		 * <p>Sets the query parameter to the specified value. This is used for parameters that can only be specified once. Subsequent calls with the same parameter name will override the existing value</p>
		 * @param string $name <p>Name of the parameter</p>
		 * @param string $value <p>Value of the parameter</p>
		 * @return SolrParams <p>Returns a SolrParam object on success and <b><code>FALSE</code></b> on value.</p>
		 * @link https://php.net/manual/en/solrparams.setparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParam(string $name, string $value): \SolrParams {}

		/**
		 * Returns all the name-value pair parameters in the object
		 * <p>Returns all the name-value pair parameters in the object</p>
		 * @param bool $url_encode <p>Whether to return URL-encoded values</p>
		 * @return string <p>Returns a string on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrparams.tostring.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function toString(bool $url_encode = FALSE): string {}

		/**
		 * Used for custom serialization
		 * <p>Used for custom serialization</p>
		 * @param string $serialized <p>The serialized representation of the object</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrparams.unserialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This is an object whose properties can also by accessed using the array syntax. All its properties are read-only.</p>
	 * @link https://php.net/manual/en/class.solrobject.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrObject implements \ArrayAccess {

		/**
		 * Creates Solr object
		 * <p>Creates Solr object.</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrobject.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>The destructor</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrobject.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Returns an array of all the names of the properties
		 * <p>Returns an array of all the names of the properties</p>
		 * @return array <p>Returns an array.</p>
		 * @link https://php.net/manual/en/solrobject.getpropertynames.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getPropertyNames(): array {}

		/**
		 * Checks if the property exists
		 * <p>Checks if the property exists. This is used when the object is treated as an array.</p>
		 * @param string $property_name <p>The name of the property.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrobject.offsetexists.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetExists(string $property_name): bool {}

		/**
		 * Used to retrieve a property
		 * <p>Used to get the value of a property. This is used when the object is treated as an array.</p>
		 * @param string $property_name <p>Name of the property.</p>
		 * @return mixed <p>Returns the property value.</p>
		 * @link https://php.net/manual/en/solrobject.offsetget.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetGet(string $property_name): mixed {}

		/**
		 * Sets the value for a property
		 * <p>Sets the value for a property. This is used when the object is treated as an array. This object is read-only. This should never be attempted.</p>
		 * @param string $property_name <p>The name of the property.</p>
		 * @param string $property_value <p>The new value.</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrobject.offsetset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetSet(string $property_name, string $property_value): void {}

		/**
		 * Unsets the value for the property
		 * <p>Unsets the value for the property. This is used when the object is treated as an array. This object is read-only. This should never be attempted.</p>
		 * @param string $property_name <p>The name of the property.</p>
		 * @return void <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrobject.offsetunset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function offsetUnset(string $property_name): void {}
	}

	/**
	 * <p>Represents a collection of name-value pairs sent to the Solr server during a request.</p>
	 * @link https://php.net/manual/en/class.solrparams.php
	 * @since PECL solr >= 0.9.2
	 */
	abstract class SolrParams implements \Serializable {

		/**
		 * This is an alias for SolrParams::addParam
		 * <p>This is an alias for SolrParams::addParam</p>
		 * @param string $name <p>The name of the parameter</p>
		 * @param string $value <p>The value of the parameter</p>
		 * @return SolrParams <p>Returns a SolrParams instance on success</p>
		 * @link https://php.net/manual/en/solrparams.add.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function add(string $name, string $value): \SolrParams {}

		/**
		 * Adds a parameter to the object
		 * <p>Adds a parameter to the object. This is used for parameters that can be specified multiple times.</p>
		 * @param string $name <p>Name of parameter</p>
		 * @param string $value <p>Value of parameter</p>
		 * @return SolrParams <p>Returns a SolrParam object on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrparams.addparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addParam(string $name, string $value): \SolrParams {}

		/**
		 * This is an alias for SolrParams::getParam
		 * <p>This is an alias for SolrParams::getParam</p>
		 * @param string $param_name <p>Then name of the parameter</p>
		 * @return mixed <p>Returns an array or string depending on the type of parameter</p>
		 * @link https://php.net/manual/en/solrparams.get.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function get(string $param_name): mixed {}

		/**
		 * Returns a parameter value
		 * <p>Returns a parameter with name param_name</p>
		 * @param string $param_name <p>The name of the parameter</p>
		 * @return mixed <p>Returns a string or an array depending on the type of the parameter</p>
		 * @link https://php.net/manual/en/solrparams.getparam.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParam(string $param_name = NULL): mixed {}

		/**
		 * Returns an array of non URL-encoded parameters
		 * <p>Returns an array of non URL-encoded parameters</p>
		 * @return array <p>Returns an array of non URL-encoded parameters</p>
		 * @link https://php.net/manual/en/solrparams.getparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getParams(): array {}

		/**
		 * Returns an array of URL-encoded parameters
		 * <p>Returns an array on URL-encoded parameters</p>
		 * @return array <p>Returns an array on URL-encoded parameters</p>
		 * @link https://php.net/manual/en/solrparams.getpreparedparams.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function getPreparedParams(): array {}

		/**
		 * Used for custom serialization
		 * <p>Used for custom serialization</p>
		 * @return string <p>Used for custom serialization</p>
		 * @link https://php.net/manual/en/solrparams.serialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function serialize(): string {}

		/**
		 * An alias of SolrParams::setParam
		 * <p>An alias of SolrParams::setParam</p>
		 * @param string $name <p>Then name of the parameter</p>
		 * @param string $value <p>The parameter value</p>
		 * @return void <p>Returns an instance of the SolrParams object on success</p>
		 * @link https://php.net/manual/en/solrparams.set.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function set(string $name, string $value): void {}

		/**
		 * Sets the parameter to the specified value
		 * <p>Sets the query parameter to the specified value. This is used for parameters that can only be specified once. Subsequent calls with the same parameter name will override the existing value</p>
		 * @param string $name <p>Name of the parameter</p>
		 * @param string $value <p>Value of the parameter</p>
		 * @return SolrParams <p>Returns a SolrParam object on success and <b><code>FALSE</code></b> on value.</p>
		 * @link https://php.net/manual/en/solrparams.setparam.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParam(string $name, string $value): \SolrParams {}

		/**
		 * Returns all the name-value pair parameters in the object
		 * <p>Returns all the name-value pair parameters in the object</p>
		 * @param bool $url_encode <p>Whether to return URL-encoded values</p>
		 * @return string <p>Returns a string on success and <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrparams.tostring.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function toString(bool $url_encode = FALSE): string {}

		/**
		 * Used for custom serialization
		 * <p>Used for custom serialization</p>
		 * @param string $serialized <p>The serialized representation of the object</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrparams.unserialize.php
		 * @since PECL solr >= 0.9.2
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Represents a response to a ping request to the server</p>
	 * @link https://php.net/manual/en/class.solrpingresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrPingResponse extends \SolrResponse {

		/**
		 * @var int <p>Documents should be parsed as SolrObject instances</p>
		 * @link https://php.net/manual/en/class.solrpingresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var int <p>Documents should be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrpingresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * Constructor
		 * <p>Constructor</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrpingresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrpingresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Returns the XML response as serialized PHP data
		 * <p>Returns the XML response as serialized PHP data</p>
		 * @return string <p>Returns the XML response as serialized PHP data</p>
		 * @link https://php.net/manual/en/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * Returns the HTTP status of the response
		 * <p>Returns the HTTP status of the response.</p>
		 * @return int <p>Returns the HTTP status of the response.</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * Returns more details on the HTTP status
		 * <p>Returns more details on the HTTP status.</p>
		 * @return string <p>Returns more details on the HTTP status</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Returns the raw request sent to the Solr server
		 * <p>Returns the raw request sent to the Solr server.</p>
		 * @return string <p>Returns the raw request sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Returns the raw request headers sent to the Solr server
		 * <p>Returns the raw request headers sent to the Solr server.</p>
		 * @return string <p>Returns the raw request headers sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Returns the raw response from the server
		 * <p>Returns the raw response from the server.</p>
		 * @return string <p>Returns the raw response from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Returns the raw response headers from the server
		 * <p>Returns the raw response headers from the server.</p>
		 * @return string <p>Returns the raw response headers from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * Returns the full URL the request was sent to
		 * <p>Returns the full URL the request was sent to.</p>
		 * @return string <p>Returns the full URL the request was sent to</p>
		 * @link https://php.net/manual/en/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * Returns the response from the server
		 * <p>Returns the response from the server. This should be empty because the request as a HEAD request.</p>
		 * @return string <p>Returns an empty string.</p>
		 * @link https://php.net/manual/en/solrpingresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): string {}

		/**
		 * Sets the parse mode
		 * <p>Sets the parse mode.</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * Was the request a success
		 * <p>Used to check if the request to the server was successful.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if it was successful and <b><code>FALSE</code></b> if it was not.</p>
		 * @link https://php.net/manual/en/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>Represents a collection of name-value pairs sent to the Solr server during a request.</p>
	 * @link https://php.net/manual/en/class.solrquery.php
	 * @since PECL solr >= 0.9.2
	 */
	class SolrQuery extends \SolrModifiableParams implements \Serializable {

		/**
		 * @var int <p>Used to specify that the sorting should be in acending order</p>
		 * @link https://php.net/manual/en/class.solrquery.php
		 */
		const ORDER_ASC = 0;

		/**
		 * @var int <p>Used to specify that the sorting should be in descending order</p>
		 * @link https://php.net/manual/en/class.solrquery.php
		 */
		const ORDER_DESC = 1;

		/**
		 * @var int <p>Used to specify that the facet should sort by index</p>
		 * @link https://php.net/manual/en/class.solrquery.php
		 */
		const FACET_SORT_INDEX = 0;

		/**
		 * @var int <p>Used to specify that the facet should sort by count</p>
		 * @link https://php.net/manual/en/class.solrquery.php
		 */
		const FACET_SORT_COUNT = 1;

		/**
		 * @var int <p>Used in the TermsComponent</p>
		 * @link https://php.net/manual/en/class.solrquery.php
		 */
		const TERMS_SORT_INDEX = 0;

		/**
		 * @var int <p>Used in the TermsComponent</p>
		 * @link https://php.net/manual/en/class.solrquery.php
		 */
		const TERMS_SORT_COUNT = 1;

		/**
		 * Constructor
		 * <p>Constructor.</p>
		 * @param string $q <p>Optional search query</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrquery.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct(string $q = NULL) {}

		/**
		 * Destructor
		 * <p>Destructor</p>
		 * @return void <p>None.</p>
		 * @link https://php.net/manual/en/solrquery.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Overrides main filter query, determines which documents to include in the main group
		 * <p>Overrides main filter query, determines which documents to include in the main group.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Orders the documents within the expanded groups (expand.sort parameter)
		 * <p>Orders the documents within the expanded groups (expand.sort parameter).</p>
		 * @param string $field <p>field name</p>
		 * @param string $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants.</p> <p>Default: SolrQuery::ORDER_DESC</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addExpandSortField(string $field, string $order = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date
		 * <p>This method allows you to specify a field which should be treated as a facet.</p><p>It can be used multiple times with different field names to indicate multiple facet fields</p>
		 * @param string $dateField <p>The name of the date field.</p>
		 * @return SolrQuery <p>Returns a SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateField(string $dateField): \SolrQuery {}

		/**
		 * Adds another facet.date.other parameter
		 * <p>Sets the facet.date.other parameter. Accepts an optional field override</p>
		 * @param string $value <p>The value to use.</p>
		 * @param string $field_override <p>The field name for the override.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Adds another field to the facet
		 * <p>Adds another field to the facet</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetField(string $field): \SolrQuery {}

		/**
		 * Adds a facet query
		 * <p>Adds a facet query</p>
		 * @param string $facetQuery <p>The facet query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addfacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFacetQuery(string $facetQuery): \SolrQuery {}

		/**
		 * Specifies which fields to return in the result
		 * <p>This method is used to used to specify a set of fields to return, thereby restricting the amount of data returned in the response.</p><p>It should be called multiple time, once for each field name.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object</p>
		 * @link https://php.net/manual/en/solrquery.addfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addField(string $field): \SolrQuery {}

		/**
		 * Specifies a filter query
		 * <p>Specifies a filter query</p>
		 * @param string $fq <p>The filter query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.addfilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Add a field to be used to group results
		 * <p>The name of the field by which to group results. The field must be single-valued, and either be indexed or a field type that has a value source and works in a function query, such as ExternalFileField. It must also be a string-based field, such as StrField or TextField Uses group.field parameter</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.addgroupfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupField(string $value): \SolrQuery {}

		/**
		 * Allows grouping results based on the unique values of a function query (group.func parameter)
		 * <p>Adds a group function (group.func parameter) Allows grouping results based on the unique values of a function query.</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addgroupfunction.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupFunction(string $value): \SolrQuery {}

		/**
		 * Allows grouping of documents that match the given query
		 * <p>Allows grouping of documents that match the given query. Adds query to the group.query parameter</p>
		 * @param string $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.addgroupquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupQuery(string $value): \SolrQuery {}

		/**
		 * Add a group sort field (group.sort parameter)
		 * <p>Allow sorting group documents, using group sort field (group.sort parameter).</p>
		 * @param string $field <p>Field name</p>
		 * @param int $order <p>Order ASC/DESC, utilizes SolrQuery::ORDER_&#42; constants</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.addgroupsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function addGroupSortField(string $field, int $order = NULL): \SolrQuery {}

		/**
		 * Maps to hl.fl
		 * <p>Maps to hl.fl. This is used to specify that highlighted snippets should be generated for a particular field</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addhighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addHighlightField(string $field): \SolrQuery {}

		/**
		 * Sets a field to use for similarity
		 * <p>Maps to mlt.fl. It specifies that a field should be used for similarity.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addmltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltField(string $field): \SolrQuery {}

		/**
		 * Maps to mlt.qf
		 * <p>Maps to mlt.qf. It is used to specify query fields and their boosts</p>
		 * @param string $field <p>The name of the field</p>
		 * @param float $boost <p>Its boost value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addmltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addMltQueryField(string $field, float $boost): \SolrQuery {}

		/**
		 * Used to control how the results should be sorted
		 * <p>Used to control how the results should be sorted.</p>
		 * @param string $field <p>The name of the field</p>
		 * @param int $order <p>The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.addsortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addSortField(string $field, int $order = SolrQuery::ORDER_DESC): \SolrQuery {}

		/**
		 * Requests a return of sub results for values within the given facet
		 * <p>Requests a return of sub results for values within the given facet. Maps to the stats.facet field</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addstatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsFacet(string $field): \SolrQuery {}

		/**
		 * Maps to stats.field parameter
		 * <p>Maps to stats.field parameter This methods adds another stats.field parameter.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.addstatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function addStatsField(string $field): \SolrQuery {}

		/**
		 * Collapses the result set to a single document per group
		 * <p>Collapses the result set to a single document per group before it forwards the result set to the rest of the search components.</p><p>So all downstream components (faceting, highlighting, etc...) will work with the collapsed result set.</p>
		 * @param \SolrCollapseFunction $collapseFunction
		 * @return SolrQuery <p>Returns the current <code>SolrQuery</code> object</p>
		 * @link https://php.net/manual/en/solrquery.collapse.php
		 * @since No version information available, might only be in Git
		 */
		public function collapse(\SolrCollapseFunction $collapseFunction): \SolrQuery {}

		/**
		 * Returns true if group expanding is enabled
		 * <p>Returns <b><code>TRUE</code></b> if group expanding is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpand(): bool {}

		/**
		 * Returns the expand filter queries
		 * <p>Returns the expand filter queries</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getexpandfilterqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandFilterQueries(): array {}

		/**
		 * Returns the expand query expand.q parameter
		 * <p>Returns the expand query expand.q parameter</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandQuery(): array {}

		/**
		 * Returns The number of rows to display in each group (expand.rows)
		 * <p>Returns The number of rows to display in each group (expand.rows)</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandRows(): int {}

		/**
		 * Returns an array of fields
		 * <p>Returns an array of fields</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getexpandsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getExpandSortFields(): array {}

		/**
		 * Returns the value of the facet parameter
		 * <p>Returns the value of the facet parameter.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacet(): bool {}

		/**
		 * Returns the value for the facet.date.end parameter
		 * <p>Returns the value for the facet.date.end parameter. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateEnd(string $field_override = NULL): string {}

		/**
		 * Returns all the facet.date fields
		 * <p>Returns all the facet.date fields</p>
		 * @return array <p>Returns all the facet.date fields as an array or <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdatefields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateFields(): array {}

		/**
		 * Returns the value of the facet.date.gap parameter
		 * <p>Returns the value of the facet.date.gap parameter. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateGap(string $field_override = NULL): string {}

		/**
		 * Returns the value of the facet.date.hardend parameter
		 * <p>Returns the value of the facet.date.hardend parameter. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateHardEnd(string $field_override = NULL): string {}

		/**
		 * Returns the value for the facet.date.other parameter
		 * <p>Returns the value for the facet.date.other parameter. This method accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return array <p>Returns an <code>array</code> on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateOther(string $field_override = NULL): array {}

		/**
		 * Returns the lower bound for the first date range for all date faceting on this field
		 * <p>Returns the lower bound for the first date range for all date faceting on this field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetDateStart(string $field_override = NULL): string {}

		/**
		 * Returns all the facet fields
		 * <p>Returns all the facet fields</p>
		 * @return array <p>Returns an array of all the fields and <b><code>NULL</code></b> if none was set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetFields(): array {}

		/**
		 * Returns the maximum number of constraint counts that should be returned for the facet fields
		 * <p>Returns the maximum number of constraint counts that should be returned for the facet fields. This method accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetLimit(string $field_override = NULL): int {}

		/**
		 * Returns the value of the facet.method parameter
		 * <p>Returns the value of the facet.method parameter. This accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMethod(string $field_override = NULL): string {}

		/**
		 * Returns the minimum counts for facet fields should be included in the response
		 * <p>Returns the minimum counts for facet fields should be included in the response. It accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMinCount(string $field_override = NULL): int {}

		/**
		 * Returns the current state of the facet.missing parameter
		 * <p>Returns the current state of the facet.missing parameter. This accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetMissing(string $field_override = NULL): bool {}

		/**
		 * Returns an offset into the list of constraints to be used for pagination
		 * <p>Returns an offset into the list of constraints to be used for pagination. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field to override for.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set</p>
		 * @link https://php.net/manual/en/solrquery.getfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetOffset(string $field_override = NULL): int {}

		/**
		 * Returns the facet prefix
		 * <p>Returns the facet prefix</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetPrefix(string $field_override = NULL): string {}

		/**
		 * Returns all the facet queries
		 * <p>Returns all the facet queries</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetQueries(): array {}

		/**
		 * Returns the facet sort type
		 * <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT)</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFacetSort(string $field_override = NULL): int {}

		/**
		 * Returns the list of fields that will be returned in the response
		 * <p>Returns the list of fields that will be returned in the response</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFields(): array {}

		/**
		 * Returns an array of filter queries
		 * <p>Returns an array of filter queries. These are queries that can be used to restrict the super set of documents that can be returned, without influencing score</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getfilterqueries.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getFilterQueries(): array {}

		/**
		 * Returns true if grouping is enabled
		 * <p>Returns true if grouping is enabled</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroup(): bool {}

		/**
		 * Returns group cache percent value
		 * <p>Returns group cache percent value</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupCachePercent(): int {}

		/**
		 * Returns the group.facet parameter value
		 * <p>Returns the group.facet parameter value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFacet(): bool {}

		/**
		 * Returns group fields (group.field parameter values)
		 * <p>Returns group fields (group.field parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getgroupfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFields(): array {}

		/**
		 * Returns the group.format value
		 * <p>Returns the group.format value</p>
		 * @return string
		 * @link https://php.net/manual/en/solrquery.getgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFormat(): string {}

		/**
		 * Returns group functions (group.func parameter values)
		 * <p>Returns group functions (group.func parameter values)</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getgroupfunctions.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupFunctions(): array {}

		/**
		 * Returns the group.limit value
		 * <p>Returns the group.limit value</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupLimit(): int {}

		/**
		 * Returns the group.main value
		 * <p>Returns the group.main value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupMain(): bool {}

		/**
		 * Returns the group.ngroups value
		 * <p>Returns the group.ngroups value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupNGroups(): bool {}

		/**
		 * Returns the group.offset value
		 * <p>Returns the group.offset value</p>
		 * @return int
		 * @link https://php.net/manual/en/solrquery.getgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupOffset(): int {}

		/**
		 * Returns all the group.query parameter values
		 * <p>Returns all the group.query parameter values</p>
		 * @return array <p><code>array</code></p>
		 * @link https://php.net/manual/en/solrquery.getgroupqueries.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupQueries(): array {}

		/**
		 * Returns the group.sort value
		 * <p>Returns the group.sort value</p>
		 * @return array
		 * @link https://php.net/manual/en/solrquery.getgroupsortfields.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupSortFields(): array {}

		/**
		 * Returns the group.truncate value
		 * <p>Returns the group.truncate value</p>
		 * @return bool
		 * @link https://php.net/manual/en/solrquery.getgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function getGroupTruncate(): bool {}

		/**
		 * Returns the state of the hl parameter
		 * <p>Returns a boolean indicating whether or not to enable highlighted snippets to be generated in the query response.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlight(): bool {}

		/**
		 * Returns the highlight field to use as backup or default
		 * <p>Returns the highlight field to use as backup or default. It accepts an optional override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightAlternateField(string $field_override = NULL): string {}

		/**
		 * Returns all the fields that Solr should generate highlighted snippets for
		 * <p>Returns all the fields that Solr should generate highlighted snippets for</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFields(): array {}

		/**
		 * Returns the formatter for the highlighted output
		 * <p>Returns the formatter for the highlighted output</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFormatter(string $field_override = NULL): string {}

		/**
		 * Returns the text snippet generator for highlighted text
		 * <p>Returns the text snippet generator for highlighted text. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragmenter(string $field_override = NULL): string {}

		/**
		 * Returns the number of characters of fragments to consider for highlighting
		 * <p>Returns the number of characters of fragments to consider for highlighting. Zero implies no fragmenting. The entire field should be used.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success or <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightFragsize(string $field_override = NULL): int {}

		/**
		 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
		 * <p>Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightHighlightMultiTerm(): bool {}

		/**
		 * Returns the maximum number of characters of the field to return
		 * <p>Returns the maximum number of characters of the field to return</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAlternateFieldLength(string $field_override = NULL): int {}

		/**
		 * Returns the maximum number of characters into a document to look for suitable snippets
		 * <p>Returns the maximum number of characters into a document to look for suitable snippets</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMaxAnalyzedChars(): int {}

		/**
		 * Returns whether or not the collapse contiguous fragments into a single fragment
		 * <p>Returns whether or not the collapse contiguous fragments into a single fragment. Accepts an optional field override.</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightMergeContiguous(string $field_override = NULL): bool {}

		/**
		 * Returns the maximum number of characters from a field when using the regex fragmenter
		 * <p>Returns the maximum number of characters from a field when using the regex fragmenter</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexMaxAnalyzedChars(): int {}

		/**
		 * Returns the regular expression for fragmenting
		 * <p>Returns the regular expression used for fragmenting</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexPattern(): string {}

		/**
		 * Returns the deviation factor from the ideal fragment size
		 * <p>Returns the factor by which the regex fragmenter can deviate from the ideal fragment size to accomodate the regular expression</p>
		 * @return float <p>Returns a double on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRegexSlop(): float {}

		/**
		 * Returns if a field will only be highlighted if the query matched in this particular field
		 * <p>Returns if a field will only be highlighted if the query matched in this particular field.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightRequireFieldMatch(): bool {}

		/**
		 * Returns the text which appears after a highlighted term
		 * <p>Returns the text which appears after a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePost(string $field_override = NULL): string {}

		/**
		 * Returns the text which appears before a highlighted term
		 * <p>Returns the text which appears before a highlighted term. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSimplePre(string $field_override = NULL): string {}

		/**
		 * Returns the maximum number of highlighted snippets to generate per field
		 * <p>Returns the maximum number of highlighted snippets to generate per field. Accepts an optional field override</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightSnippets(string $field_override = NULL): int {}

		/**
		 * Returns the state of the hl.usePhraseHighlighter parameter
		 * <p>Returns whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHighlightUsePhraseHighlighter(): bool {}

		/**
		 * Returns whether or not MoreLikeThis results should be enabled
		 * <p>Returns whether or not MoreLikeThis results should be enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMlt(): bool {}

		/**
		 * Returns whether or not the query will be boosted by the interesting term relevance
		 * <p>Returns whether or not the query will be boosted by the interesting term relevance</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltBoost(): bool {}

		/**
		 * Returns the number of similar documents to return for each result
		 * <p>Returns the number of similar documents to return for each result</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltCount(): int {}

		/**
		 * Returns all the fields to use for similarity
		 * <p>Returns all the fields to use for similarity</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltFields(): array {}

		/**
		 * Returns the maximum number of query terms that will be included in any generated query
		 * <p>Returns the maximum number of query terms that will be included in any generated query</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumQueryTerms(): int {}

		/**
		 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
		 * <p>Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxNumTokens(): int {}

		/**
		 * Returns the maximum word length above which words will be ignored
		 * <p>Returns the maximum word length above which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMaxWordLength(): int {}

		/**
		 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
		 * <p>Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinDocFrequency(): int {}

		/**
		 * Returns the frequency below which terms will be ignored in the source document
		 * <p>Returns the frequency below which terms will be ignored in the source document</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinTermFrequency(): int {}

		/**
		 * Returns the minimum word length below which words will be ignored
		 * <p>Returns the minimum word length below which words will be ignored</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltMinWordLength(): int {}

		/**
		 * Returns the query fields and their boosts
		 * <p>Returns the query fields and their boosts</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getmltqueryfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getMltQueryFields(): array {}

		/**
		 * Returns the main query
		 * <p>Returns the main search query</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getQuery(): string {}

		/**
		 * Returns the maximum number of documents
		 * <p>Returns the maximum number of documents from the complete result set to return to the client for every request</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRows(): int {}

		/**
		 * Returns all the sort fields
		 * <p>Returns all the sort fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if none of the parameters was set.</p>
		 * @link https://php.net/manual/en/solrquery.getsortfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getSortFields(): array {}

		/**
		 * Returns the offset in the complete result set
		 * <p>Returns the offset in the complete result set for the queries where the set of returned documents should begin.</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStart(): int {}

		/**
		 * Returns whether or not stats is enabled
		 * <p>Returns whether or not stats is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStats(): bool {}

		/**
		 * Returns all the stats facets that were set
		 * <p>Returns all the stats facets that were set</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstatsfacets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFacets(): array {}

		/**
		 * Returns all the statistics fields
		 * <p>Returns all the statistics fields</p>
		 * @return array <p>Returns an array on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getstatsfields.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getStatsFields(): array {}

		/**
		 * Returns whether or not the TermsComponent is enabled
		 * <p>Returns whether or not the TermsComponent is enabled</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.getterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTerms(): bool {}

		/**
		 * Returns the field from which the terms are retrieved
		 * <p>Returns the field from which the terms are retrieved</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsField(): string {}

		/**
		 * Returns whether or not to include the lower bound in the result set
		 * <p>Returns whether or not to include the lower bound in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeLowerBound(): bool {}

		/**
		 * Returns whether or not to include the upper bound term in the result set
		 * <p>Returns whether or not to include the upper bound term in the result set</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsIncludeUpperBound(): bool {}

		/**
		 * Returns the maximum number of terms Solr should return
		 * <p>Returns the maximum number of terms Solr should return</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLimit(): int {}

		/**
		 * Returns the term to start at
		 * <p>Returns the term to start at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsLowerBound(): string {}

		/**
		 * Returns the maximum document frequency
		 * <p>Returns the maximum document frequency</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMaxCount(): int {}

		/**
		 * Returns the minimum document frequency to return in order to be included
		 * <p>Returns the minimum document frequency to return in order to be included</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsMinCount(): int {}

		/**
		 * Returns the term prefix
		 * <p>Returns the prefix to which matching terms must be restricted. This will restrict matches to only terms that start with the prefix</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsPrefix(): string {}

		/**
		 * Whether or not to return raw characters
		 * <p>Returns a boolean indicating whether or not to return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @return bool <p>Returns a boolean on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsReturnRaw(): bool {}

		/**
		 * Returns an integer indicating how terms are sorted
		 * <p>SolrQuery::TERMS_SORT_INDEX indicates that the terms are returned by index order. SolrQuery::TERMS_SORT_COUNT implies that the terms are sorted by term frequency (highest count first)</p>
		 * @return int <p>Returns an integer on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsSort(): int {}

		/**
		 * Returns the term to stop at
		 * <p>Returns the term to stop at</p>
		 * @return string <p>Returns a string on success and <b><code>NULL</code></b> if not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTermsUpperBound(): string {}

		/**
		 * Returns the time in milliseconds allowed for the query to finish
		 * <p>Returns the time in milliseconds allowed for the query to finish.</p>
		 * @return int <p>Returns and integer on success and <b><code>NULL</code></b> if it is not set.</p>
		 * @link https://php.net/manual/en/solrquery.gettimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getTimeAllowed(): int {}

		/**
		 * Removes an expand filter query
		 * <p>Removes an expand filter query.</p>
		 * @param string $fq
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.removeexpandfilterquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes an expand sort field from the expand.sort parameter
		 * <p>Removes an expand sort field from the expand.sort parameter.</p>
		 * @param string $field <p>field name</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.removeexpandsortfield.php
		 * @since PECL solr >= 2.2.0
		 */
		public function removeExpandSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet date fields
		 * <p>The name of the field</p>
		 * @param string $field <p>The name of the date field to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetdatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.date.other parameters
		 * <p>Removes one of the facet.date.other parameters</p>
		 * @param string $value <p>The value</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetdateother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetDateOther(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Removes one of the facet.date parameters
		 * <p>Removes one of the facet.date parameters</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetField(string $field): \SolrQuery {}

		/**
		 * Removes one of the facet.query parameters
		 * <p>Removes one of the facet.query parameters.</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefacetquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFacetQuery(string $value): \SolrQuery {}

		/**
		 * Removes a field from the list of fields
		 * <p>Removes a field from the list of fields</p>
		 * @param string $field <p>Name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeField(string $field): \SolrQuery {}

		/**
		 * Removes a filter query
		 * <p>Removes a filter query.</p>
		 * @param string $fq <p>The filter query to remove</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removefilterquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeFilterQuery(string $fq): \SolrQuery {}

		/**
		 * Removes one of the fields used for highlighting
		 * <p>Removes one of the fields used for highlighting.</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removehighlightfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeHighlightField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis fields
		 * <p>Removes one of the moreLikeThis fields.</p>
		 * @param string $field <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removemltfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltField(string $field): \SolrQuery {}

		/**
		 * Removes one of the moreLikeThis query fields
		 * <p>Removes one of the moreLikeThis query fields.</p>
		 * @param string $queryField <p>The query field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removemltqueryfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeMltQueryField(string $queryField): \SolrQuery {}

		/**
		 * Removes one of the sort fields
		 * <p>Removes one of the sort fields</p>
		 * @param string $field <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removesortfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeSortField(string $field): \SolrQuery {}

		/**
		 * Removes one of the stats.facet parameters
		 * <p>Removes one of the stats.facet parameters</p>
		 * @param string $value <p>The value</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removestatsfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsFacet(string $value): \SolrQuery {}

		/**
		 * Removes one of the stats.field parameters
		 * <p>Removes one of the stats.field parameters</p>
		 * @param string $field <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.removestatsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function removeStatsField(string $field): \SolrQuery {}

		/**
		 * Toggles the echoHandler parameter
		 * <p>If set to true, Solr places the name of the handle used in the response to the client for debugging purposes.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setechohandler.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoHandler(bool $flag): \SolrQuery {}

		/**
		 * Determines what kind of parameters to include in the response
		 * <p>Instructs Solr what kinds of Request parameters should be included in the response for debugging purposes, legal values include:</p><p></p>
		 * @param string $type <p>The type of parameters to include</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setechoparams.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setEchoParams(string $type): \SolrQuery {}

		/**
		 * Enables/Disables the Expand Component
		 * <p>Enables/Disables the Expand Component.</p>
		 * @param bool $value <p>Bool flag</p>
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.setexpand.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpand(bool $value): \SolrQuery {}

		/**
		 * Sets the expand.q parameter
		 * <p>Sets the expand.q parameter.</p><p>Overrides the main q parameter, determines which documents to include in the main group.</p>
		 * @param string $q
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.setexpandquery.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandQuery(string $q): \SolrQuery {}

		/**
		 * Sets the number of rows to display in each group (expand.rows). Server Default 5
		 * <p>Sets the number of rows to display in each group (expand.rows). Server Default 5</p>
		 * @param int $value
		 * @return SolrQuery <p><code>SolrQuery</code></p>
		 * @link https://php.net/manual/en/solrquery.setexpandrows.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setExpandRows(int $value): \SolrQuery {}

		/**
		 * Sets the explainOther common query parameter
		 * <p>Sets the explainOther common query parameter</p>
		 * @param string $query <p>The Lucene query to identify a set of documents</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setexplainother.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setExplainOther(string $query): \SolrQuery {}

		/**
		 * Maps to the facet parameter. Enables or disables facetting
		 * <p>Enables or disables faceting.</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacet.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacet(bool $flag): \SolrQuery {}

		/**
		 * Maps to facet.date.end
		 * <p>Maps to facet.date.end</p>
		 * @param string $value <p>See facet.date.end</p>
		 * @param string $field_override <p>Name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdateend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateEnd(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.gap
		 * <p>Maps to facet.date.gap</p>
		 * @param string $value <p>See facet.date.gap</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdategap.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateGap(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.hardend
		 * <p>Maps to facet.date.hardend</p>
		 * @param bool $value <p>See facet.date.hardend</p>
		 * @param string $field_override <p>The name of the field</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdatehardend.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateHardEnd(bool $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.date.start
		 * <p>Maps to facet.date.start</p>
		 * @param string $value <p>See facet.date.start</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetdatestart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetDateStart(string $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the minimum document frequency used for determining term count
		 * <p>Sets the minimum document frequency used for determining term count</p>
		 * @param int $frequency
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetEnumCacheMinDefaultFrequency(int $frequency, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.limit
		 * <p>Maps to facet.limit. Sets the maximum number of constraint counts that should be returned for the facet fields.</p>
		 * @param int $limit <p>The maximum number of constraint counts</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetlimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetLimit(int $limit, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the type of algorithm to use when faceting a field
		 * <p>Specifies the type of algorithm to use when faceting a field. This method accepts optional field override.</p>
		 * @param string $method <p>The method to use.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetmethod.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMethod(string $method, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.mincount
		 * <p>Sets the minimum counts for facet fields that should be included in the response</p>
		 * @param int $mincount <p>The minimum count</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMinCount(int $mincount, string $field_override = NULL): \SolrQuery {}

		/**
		 * Maps to facet.missing
		 * <p>Used to indicate that in addition to the Term-based constraints of a facet field, a count of all matching results which have no value for the field should be computed</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns this feature on. <b><code>FALSE</code></b> disables it.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetmissing.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetMissing(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the offset into the list of constraints to allow for pagination
		 * <p>Sets the offset into the list of constraints to allow for pagination.</p>
		 * @param int $offset <p>The offset</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetoffset.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetOffset(int $offset, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies a string prefix with which to limits the terms on which to facet
		 * <p>Specifies a string prefix with which to limits the terms on which to facet.</p>
		 * @param string $prefix <p>The prefix string</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetPrefix(string $prefix, string $field_override = NULL): \SolrQuery {}

		/**
		 * Determines the ordering of the facet field constraints
		 * <p>Determines the ordering of the facet field constraints</p>
		 * @param int $facetSort <p>Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setfacetsort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setFacetSort(int $facetSort, string $field_override = NULL): \SolrQuery {}

		/**
		 * Enable/Disable result grouping (group parameter)
		 * <p>Enable/Disable result grouping (group parameter)</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroup.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroup(bool $value): \SolrQuery {}

		/**
		 * Enables caching for result grouping
		 * <p>Setting this parameter to a number greater than 0 enables caching for result grouping. Result Grouping executes two searches; this option caches the second search. The server default value is 0. Testing has shown that group caching only improves search time with Boolean, wildcard, and fuzzy queries. For simple queries like term or "match all" queries, group caching degrades performance. group.cache.percent parameter</p>
		 * @param int $percent
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupcachepercent.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupCachePercent(int $percent): \SolrQuery {}

		/**
		 * Sets group.facet parameter
		 * <p>Determines whether to compute grouped facets for the field facets specified in facet.field parameters. Grouped facets are computed based on the first specified group.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupfacet.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFacet(bool $value): \SolrQuery {}

		/**
		 * Sets the group format, result structure (group.format parameter)
		 * <p>Sets the group.format parameter. If this parameter is set to simple, the grouped documents are presented in a single flat list, and the start and rows parameters affect the numbers of documents instead of groups. Accepts: grouped/simple</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupformat.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupFormat(string $value): \SolrQuery {}

		/**
		 * Specifies the number of results to return for each group. The server default value is 1
		 * <p>Specifies the number of results to return for each group. The server default value is 1.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgrouplimit.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupLimit(int $value): \SolrQuery {}

		/**
		 * If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple
		 * <p>If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple.</p>
		 * @param string $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupmain.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupMain(string $value): \SolrQuery {}

		/**
		 * If true, Solr includes the number of groups that have matched the query in the results
		 * <p>If true, Solr includes the number of groups that have matched the query in the results.</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupngroups.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupNGroups(bool $value): \SolrQuery {}

		/**
		 * Sets the group.offset parameter
		 * <p>Sets the group.offset parameter.</p>
		 * @param int $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgroupoffset.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupOffset(int $value): \SolrQuery {}

		/**
		 * If true, facet counts are based on the most relevant document of each group matching the query
		 * <p>If true, facet counts are based on the most relevant document of each group matching the query. The server default value is false. group.truncate parameter</p>
		 * @param bool $value
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.setgrouptruncate.php
		 * @since PECL solr >= 2.2.0
		 */
		public function setGroupTruncate(bool $value): \SolrQuery {}

		/**
		 * Enables or disables highlighting
		 * <p>Setting it to <b><code>TRUE</code></b> enables highlighted snippets to be generated in the query response.</p><p>Setting it to <b><code>FALSE</code></b> disables highlighting</p>
		 * @param bool $flag <p>Enable or disable highlighting</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlight.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlight(bool $flag): \SolrQuery {}

		/**
		 * Specifies the backup field to use
		 * <p>If a snippet cannot be generated because there were no matching terms, one can specify a field to use as the backup or default summary</p>
		 * @param string $field <p>The name of the backup field</p>
		 * @param string $field_override <p>The name of the field we are overriding this setting for.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightalternatefield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightAlternateField(string $field, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify a formatter for the highlight output
		 * <p>Specify a formatter for the highlight output.</p>
		 * @param string $formatter <p>Currently the only legal value is "simple"</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.sethighlightformatter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFormatter(string $formatter, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets a text snippet generator for highlighted text
		 * <p>Specify a text snippet generator for highlighted text.</p>
		 * @param string $fragmenter <p>The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain regular expression</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightfragmenter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragmenter(string $fragmenter, string $field_override = NULL): \SolrQuery {}

		/**
		 * The size of fragments to consider for highlighting
		 * <p>Sets the size, in characters, of fragments to consider for highlighting. "0" indicates that the whole field value should be used (no fragmenting).</p>
		 * @param int $size <p>The size, in characters, of fragments to consider for highlighting</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightfragsize.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightFragsize(int $size, string $field_override = NULL): \SolrQuery {}

		/**
		 * Use SpanScorer to highlight phrase terms
		 * <p>Use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @param bool $flag <p>Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightHighlightMultiTerm(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of characters of the field to return
		 * <p>If SolrQuery::setHighlightAlternateField() was passed the value <b><code>TRUE</code></b>, this parameter specifies the maximum number of characters of the field to return</p><p>Any value less than or equal to 0 means unlimited.</p>
		 * @param int $fieldLength <p>The length of the field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAlternateFieldLength(int $fieldLength, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specifies the number of characters into a document to look for suitable snippets
		 * <p>Specifies the number of characters into a document to look for suitable snippets</p>
		 * @param int $value <p>The number of characters into a document to look for suitable snippets</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMaxAnalyzedChars(int $value): \SolrQuery {}

		/**
		 * Whether or not to collapse contiguous fragments into a single fragment
		 * <p>Whether or not to collapse contiguous fragments into a single fragment</p>
		 * @param bool $flag
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightmergecontiguous.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightMergeContiguous(bool $flag, string $field_override = NULL): \SolrQuery {}

		/**
		 * Specify the maximum number of characters to analyze
		 * <p>Specify the maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @param int $maxAnalyzedChars <p>The maximum number of characters to analyze from a field when using the regex fragmenter</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars): \SolrQuery {}

		/**
		 * Specify the regular expression for fragmenting
		 * <p>Specifies the regular expression for fragmenting. This could be used to extract sentences</p>
		 * @param string $value <p>The regular expression for fragmenting. This could be used to extract sentences</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightregexpattern.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexPattern(string $value): \SolrQuery {}

		/**
		 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
		 * <p>The factor by which the regex fragmenter can stray from the ideal fragment size ( specfied by SolrQuery::setHighlightFragsize )to accommodate the regular expression</p>
		 * @param float $factor <p>The factor by which the regex fragmenter can stray from the ideal fragment size</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightregexslop.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRegexSlop(float $factor): \SolrQuery {}

		/**
		 * Require field matching during highlighting
		 * <p>If <b><code>TRUE</code></b>, then a field will only be highlighted if the query matched in this particular field.</p><p>This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to <b><code>TRUE</code></b></p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightRequireFieldMatch(bool $flag): \SolrQuery {}

		/**
		 * Sets the text which appears after a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p>
		 * @param string $simplePost <p>Sets the text which appears after a highlighted term</p> <p></p><pre>The default is &lt;/em&gt;</pre>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery
		 * @link https://php.net/manual/en/solrquery.sethighlightsimplepost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePost(string $simplePost, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the text which appears before a highlighted term
		 * <p>Sets the text which appears before a highlighted term</p><p></p>
		 * @param string $simplePre <p>The text which appears before a highlighted term</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightsimplepre.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSimplePre(string $simplePre, string $field_override = NULL): \SolrQuery {}

		/**
		 * Sets the maximum number of highlighted snippets to generate per field
		 * <p>Sets the maximum number of highlighted snippets to generate per field</p>
		 * @param int $value <p>The maximum number of highlighted snippets to generate per field</p>
		 * @param string $field_override <p>The name of the field.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightsnippets.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightSnippets(int $value, string $field_override = NULL): \SolrQuery {}

		/**
		 * Whether to highlight phrase terms only when they appear within the query phrase
		 * <p>Sets whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the document</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setHighlightUsePhraseHighlighter(bool $flag): \SolrQuery {}

		/**
		 * Enables or disables moreLikeThis
		 * <p>Enables or disables moreLikeThis</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it and <b><code>FALSE</code></b> turns it off.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmlt.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMlt(bool $flag): \SolrQuery {}

		/**
		 * Set if the query will be boosted by the interesting term relevance
		 * <p>Set if the query will be boosted by the interesting term relevance</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltboost.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltBoost(bool $flag): \SolrQuery {}

		/**
		 * Set the number of similar documents to return for each result
		 * <p>Set the number of similar documents to return for each result</p>
		 * @param int $count <p>The number of similar documents to return for each result</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltCount(int $count): \SolrQuery {}

		/**
		 * Sets the maximum number of query terms included
		 * <p>Sets the maximum number of query terms that will be included in any generated query.</p>
		 * @param int $value <p>The maximum number of query terms that will be included in any generated query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumQueryTerms(int $value): \SolrQuery {}

		/**
		 * Specifies the maximum number of tokens to parse
		 * <p>Specifies the maximum number of tokens to parse in each example doc field that is not stored with TermVector support.</p>
		 * @param int $value <p>The maximum number of tokens to parse</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmaxnumtokens.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxNumTokens(int $value): \SolrQuery {}

		/**
		 * Sets the maximum word length
		 * <p>Sets the maximum word length above which words will be ignored.</p>
		 * @param int $maxWordLength <p>The maximum word length above which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmaxwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMaxWordLength(int $maxWordLength): \SolrQuery {}

		/**
		 * Sets the mltMinDoc frequency
		 * <p>The frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @param int $minDocFrequency <p>Sets the frequency at which words will be ignored which do not occur in at least this many docs.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmindocfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinDocFrequency(int $minDocFrequency): \SolrQuery {}

		/**
		 * Sets the frequency below which terms will be ignored in the source docs
		 * <p>Sets the frequency below which terms will be ignored in the source docs</p>
		 * @param int $minTermFrequency <p>The frequency below which terms will be ignored in the source docs</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltmintermfrequency.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinTermFrequency(int $minTermFrequency): \SolrQuery {}

		/**
		 * Sets the minimum word length
		 * <p>Sets the minimum word length below which words will be ignored.</p>
		 * @param int $minWordLength <p>The minimum word length below which words will be ignored</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setmltminwordlength.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setMltMinWordLength(int $minWordLength): \SolrQuery {}

		/**
		 * Exclude the header from the returned results
		 * <p>Exclude the header from the returned results.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> excludes the header from the result.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setomitheader.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setOmitHeader(bool $flag): \SolrQuery {}

		/**
		 * Sets the search query
		 * <p>Sets the search query.</p>
		 * @param string $query <p>The search query</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object</p>
		 * @link https://php.net/manual/en/solrquery.setquery.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setQuery(string $query): \SolrQuery {}

		/**
		 * Specifies the maximum number of rows to return in the result
		 * <p>Specifies the maximum number of rows to return in the result</p>
		 * @param int $rows <p>The maximum number of rows to return</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.setrows.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setRows(int $rows): \SolrQuery {}

		/**
		 * Flag to show debug information
		 * <p>Whether to show debug info</p>
		 * @param bool $flag <p>Whether to show debug info. <b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setshowdebuginfo.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setShowDebugInfo(bool $flag): \SolrQuery {}

		/**
		 * Specifies the number of rows to skip
		 * <p>Specifies the number of rows to skip. Useful in pagination of results.</p>
		 * @param int $start <p>The number of rows to skip.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object.</p>
		 * @link https://php.net/manual/en/solrquery.setstart.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStart(int $start): \SolrQuery {}

		/**
		 * Enables or disables the Stats component
		 * <p>Enables or disables the Stats component.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> turns on the stats component and <b><code>FALSE</code></b> disables it.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setstats.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setStats(bool $flag): \SolrQuery {}

		/**
		 * Enables or disables the TermsComponent
		 * <p>Enables or disables the TermsComponent</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> enables it. <b><code>FALSE</code></b> turns it off</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.setterms.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTerms(bool $flag): \SolrQuery {}

		/**
		 * Sets the name of the field to get the Terms from
		 * <p>Sets the name of the field to get the terms from</p>
		 * @param string $fieldname <p>The field name</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsfield.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsField(string $fieldname): \SolrQuery {}

		/**
		 * Include the lower bound term in the result set
		 * <p>Include the lower bound term in the result set.</p>
		 * @param bool $flag <p>Include the lower bound term in the result set</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsincludelowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeLowerBound(bool $flag): \SolrQuery {}

		/**
		 * Include the upper bound term in the result set
		 * <p>Include the upper bound term in the result set.</p>
		 * @param bool $flag <p><b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsincludeupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsIncludeUpperBound(bool $flag): \SolrQuery {}

		/**
		 * Sets the maximum number of terms to return
		 * <p>Sets the maximum number of terms to return</p>
		 * @param int $limit <p>The maximum number of terms to return. All the terms will be returned if the limit is negative.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermslimit.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLimit(int $limit): \SolrQuery {}

		/**
		 * Specifies the Term to start from
		 * <p>Specifies the Term to start from</p>
		 * @param string $lowerBound <p>The lower bound Term</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermslowerbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsLowerBound(string $lowerBound): \SolrQuery {}

		/**
		 * Sets the maximum document frequency
		 * <p>Sets the maximum document frequency.</p>
		 * @param int $frequency <p>The maximum document frequency.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsmaxcount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMaxCount(int $frequency): \SolrQuery {}

		/**
		 * Sets the minimum document frequency
		 * <p>Sets the minimum doc frequency to return in order to be included</p>
		 * @param int $frequency <p>The minimum frequency</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsmincount.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsMinCount(int $frequency): \SolrQuery {}

		/**
		 * Restrict matches to terms that start with the prefix
		 * <p>Restrict matches to terms that start with the prefix</p>
		 * @param string $prefix <p>Restrict matches to terms that start with the prefix</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsprefix.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsPrefix(string $prefix): \SolrQuery {}

		/**
		 * Return the raw characters of the indexed term
		 * <p>If true, return the raw characters of the indexed term, regardless of if it is human readable</p>
		 * @param bool $flag
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsreturnraw.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsReturnRaw(bool $flag): \SolrQuery {}

		/**
		 * Specifies how to sort the returned terms
		 * <p>If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first). If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order</p>
		 * @param int $sortType <p>SolrQuery::TERMS_SORT_INDEX or SolrQuery::TERMS_SORT_COUNT</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermssort.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsSort(int $sortType): \SolrQuery {}

		/**
		 * Sets the term to stop at
		 * <p>Sets the term to stop at</p>
		 * @param string $upperBound <p>The term to stop at</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settermsupperbound.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTermsUpperBound(string $upperBound): \SolrQuery {}

		/**
		 * The time allowed for search to finish
		 * <p>The time allowed for a search to finish. This value only applies to the search and not to requests in general. Time is in milliseconds. Values less than or equal to zero implies no time restriction. Partial results may be returned, if there are any.</p>
		 * @param int $timeAllowed <p>The time allowed for a search to finish.</p>
		 * @return SolrQuery <p>Returns the current SolrQuery object, if the return value is used.</p>
		 * @link https://php.net/manual/en/solrquery.settimeallowed.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setTimeAllowed(int $timeAllowed): \SolrQuery {}
	}

	/**
	 * <p>Represents a response to a query request.</p>
	 * @link https://php.net/manual/en/class.solrqueryresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrQueryResponse extends \SolrResponse {

		/**
		 * @var int <p>Documents should be parsed as SolrObject instances</p>
		 * @link https://php.net/manual/en/class.solrqueryresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var int <p>Documents should be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrqueryresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var int <p>The http status of the response.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var int <p>Whether to parse the solr documents as SolrObject or SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>Was there an error during the request</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>Detailed message on http status</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>The request URL</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>A string of raw headers sent during the request.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>The raw request sent to the server</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Response headers from the Solr server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>The response message from the server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>The response in PHP serialized format.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * Constructor
		 * <p>Constructor</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrqueryresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor.</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrqueryresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Returns the XML response as serialized PHP data
		 * <p>Returns the XML response as serialized PHP data</p>
		 * @return string <p>Returns the XML response as serialized PHP data</p>
		 * @link https://php.net/manual/en/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * Returns the HTTP status of the response
		 * <p>Returns the HTTP status of the response.</p>
		 * @return int <p>Returns the HTTP status of the response.</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * Returns more details on the HTTP status
		 * <p>Returns more details on the HTTP status.</p>
		 * @return string <p>Returns more details on the HTTP status</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Returns the raw request sent to the Solr server
		 * <p>Returns the raw request sent to the Solr server.</p>
		 * @return string <p>Returns the raw request sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Returns the raw request headers sent to the Solr server
		 * <p>Returns the raw request headers sent to the Solr server.</p>
		 * @return string <p>Returns the raw request headers sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Returns the raw response from the server
		 * <p>Returns the raw response from the server.</p>
		 * @return string <p>Returns the raw response from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Returns the raw response headers from the server
		 * <p>Returns the raw response headers from the server.</p>
		 * @return string <p>Returns the raw response headers from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * Returns the full URL the request was sent to
		 * <p>Returns the full URL the request was sent to.</p>
		 * @return string <p>Returns the full URL the request was sent to</p>
		 * @link https://php.net/manual/en/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * Returns a SolrObject representing the XML response from the server
		 * <p>Returns a SolrObject representing the XML response from the server.</p>
		 * @return SolrObject <p>Returns a SolrObject representing the XML response from the server</p>
		 * @link https://php.net/manual/en/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * Sets the parse mode
		 * <p>Sets the parse mode.</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * Was the request a success
		 * <p>Used to check if the request to the server was successful.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if it was successful and <b><code>FALSE</code></b> if it was not.</p>
		 * @link https://php.net/manual/en/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>Represents a response from the Solr server.</p>
	 * @link https://php.net/manual/en/class.solrresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	abstract class SolrResponse {

		/**
		 * @var int <p>Documents should be parsed as SolrObject instances</p>
		 * @link https://php.net/manual/en/class.solrresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var int <p>Documents should be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var int <p>The http status of the response.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var int <p>Whether to parse the solr documents as SolrObject or SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>Was there an error during the request</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>Detailed message on http status</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>The request URL</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>A string of raw headers sent during the request.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>The raw request sent to the server</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Response headers from the Solr server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>The response message from the server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>The response in PHP serialized format.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * Returns the XML response as serialized PHP data
		 * <p>Returns the XML response as serialized PHP data</p>
		 * @return string <p>Returns the XML response as serialized PHP data</p>
		 * @link https://php.net/manual/en/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * Returns the HTTP status of the response
		 * <p>Returns the HTTP status of the response.</p>
		 * @return int <p>Returns the HTTP status of the response.</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * Returns more details on the HTTP status
		 * <p>Returns more details on the HTTP status.</p>
		 * @return string <p>Returns more details on the HTTP status</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Returns the raw request sent to the Solr server
		 * <p>Returns the raw request sent to the Solr server.</p>
		 * @return string <p>Returns the raw request sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Returns the raw request headers sent to the Solr server
		 * <p>Returns the raw request headers sent to the Solr server.</p>
		 * @return string <p>Returns the raw request headers sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Returns the raw response from the server
		 * <p>Returns the raw response from the server.</p>
		 * @return string <p>Returns the raw response from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Returns the raw response headers from the server
		 * <p>Returns the raw response headers from the server.</p>
		 * @return string <p>Returns the raw response headers from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * Returns the full URL the request was sent to
		 * <p>Returns the full URL the request was sent to.</p>
		 * @return string <p>Returns the full URL the request was sent to</p>
		 * @link https://php.net/manual/en/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * Returns a SolrObject representing the XML response from the server
		 * <p>Returns a SolrObject representing the XML response from the server.</p>
		 * @return SolrObject <p>Returns a SolrObject representing the XML response from the server</p>
		 * @link https://php.net/manual/en/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * Sets the parse mode
		 * <p>Sets the parse mode.</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * Was the request a success
		 * <p>Used to check if the request to the server was successful.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if it was successful and <b><code>FALSE</code></b> if it was not.</p>
		 * @link https://php.net/manual/en/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>An exception thrown when there is an error produced by the Solr Server itself.</p>
	 * @link https://php.net/manual/en/class.solrserverexception.php
	 * @since PECL Solr >= 1.1.0, >=2.0.0
	 */
	class SolrServerException extends \SolrException {

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var int <p>The line in c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourceline
		 */
		protected $sourceline;

		/**
		 * @var string <p>The c-space source file where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.sourcefile
		 */
		protected $sourcefile;

		/**
		 * @var string <p>The c-space function where exception was generated</p>
		 * @link https://php.net/manual/en/class.solrexception.php#solrexception.props.zif-name
		 */
		protected $zif_name;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final private function __clone() {}

		/**
		 * String representation of the exception
		 * <p>Returns the <code>string</code> representation of the exception.</p>
		 * @return string <p>Returns the <code>string</code> representation of the exception.</p>
		 * @link https://php.net/manual/en/exception.tostring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __toString(): string {}

		/**
		 * Gets the Exception code
		 * <p>Returns the Exception code.</p>
		 * @return mixed <p>Returns the exception code as <code>int</code> in Exception but possibly as other type in Exception descendants (for example as <code>string</code> in PDOException).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): mixed {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

		/**
		 * Returns internal information where the Exception was thrown
		 * <p>Returns internal information where the Exception was thrown.</p>
		 * @return array <p>Returns an array containing internal information where the error was thrown. Used only for debugging by extension developers.</p>
		 * @link https://php.net/manual/en/solrserverexception.getinternalinfo.php
		 * @since PECL solr >= 1.1.0, >=2.0.0
		 */
		public function getInternalInfo(): array {}

		/**
		 * Gets the line in which the exception was created
		 * <p>Get line number where the exception was created.</p>
		 * @return int <p>Returns the line number where the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getline.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getLine(): int {}

		/**
		 * Gets the Exception message
		 * <p>Returns the Exception message.</p>
		 * @return string <p>Returns the Exception message as a string.</p>
		 * @link https://php.net/manual/en/exception.getmessage.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getMessage(): string {}

		/**
		 * Returns previous Exception
		 * <p>Returns previous exception (the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return Throwable <p>Returns the previous Throwable if available or <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the Exception stack trace.</p>
		 * @return array <p>Returns the Exception stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/en/exception.gettrace.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the Exception stack trace as a string.</p>
		 * @return string <p>Returns the Exception stack trace as a string.</p>
		 * @link https://php.net/manual/en/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>Represents a response to an update request.</p>
	 * @link https://php.net/manual/en/class.solrupdateresponse.php
	 * @since PECL solr >= 0.9.2
	 */
	final class SolrUpdateResponse extends \SolrResponse {

		/**
		 * @var int <p>Documents should be parsed as SolrObject instances</p>
		 * @link https://php.net/manual/en/class.solrupdateresponse.php
		 */
		const PARSE_SOLR_OBJ = 0;

		/**
		 * @var int <p>Documents should be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrupdateresponse.php
		 */
		const PARSE_SOLR_DOC = 1;

		/**
		 * @var int <p>The http status of the response.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status
		 */
		protected $http_status;

		/**
		 * @var int <p>Whether to parse the solr documents as SolrObject or SolrDocument instances.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.parser-mode
		 */
		protected $parser_mode;

		/**
		 * @var bool <p>Was there an error during the request</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.success
		 */
		protected $success;

		/**
		 * @var string <p>Detailed message on http status</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-status-message
		 */
		protected $http_status_message;

		/**
		 * @var string <p>The request URL</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-request-url
		 */
		protected $http_request_url;

		/**
		 * @var string <p>A string of raw headers sent during the request.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request-headers
		 */
		protected $http_raw_request_headers;

		/**
		 * @var string <p>The raw request sent to the server</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-request
		 */
		protected $http_raw_request;

		/**
		 * @var string <p>Response headers from the Solr server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response-headers
		 */
		protected $http_raw_response_headers;

		/**
		 * @var string <p>The response message from the server.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-raw-response
		 */
		protected $http_raw_response;

		/**
		 * @var string <p>The response in PHP serialized format.</p>
		 * @link https://php.net/manual/en/class.solrresponse.php#solrresponse.props.http-digested-response
		 */
		protected $http_digested_response;

		/**
		 * Constructor
		 * <p>Constructor</p>
		 * @return self <p>None</p>
		 * @link https://php.net/manual/en/solrupdateresponse.construct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __construct() {}

		/**
		 * Destructor
		 * <p>Destructor</p>
		 * @return void <p>None</p>
		 * @link https://php.net/manual/en/solrupdateresponse.destruct.php
		 * @since PECL solr >= 0.9.2
		 */
		public function __destruct() {}

		/**
		 * Returns the XML response as serialized PHP data
		 * <p>Returns the XML response as serialized PHP data</p>
		 * @return string <p>Returns the XML response as serialized PHP data</p>
		 * @link https://php.net/manual/en/solrresponse.getdigestedresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getDigestedResponse(): string {}

		/**
		 * Returns the HTTP status of the response
		 * <p>Returns the HTTP status of the response.</p>
		 * @return int <p>Returns the HTTP status of the response.</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatus.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatus(): int {}

		/**
		 * Returns more details on the HTTP status
		 * <p>Returns more details on the HTTP status.</p>
		 * @return string <p>Returns more details on the HTTP status</p>
		 * @link https://php.net/manual/en/solrresponse.gethttpstatusmessage.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getHttpStatusMessage(): string {}

		/**
		 * Returns the raw request sent to the Solr server
		 * <p>Returns the raw request sent to the Solr server.</p>
		 * @return string <p>Returns the raw request sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequest.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequest(): string {}

		/**
		 * Returns the raw request headers sent to the Solr server
		 * <p>Returns the raw request headers sent to the Solr server.</p>
		 * @return string <p>Returns the raw request headers sent to the Solr server</p>
		 * @link https://php.net/manual/en/solrresponse.getrawrequestheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawRequestHeaders(): string {}

		/**
		 * Returns the raw response from the server
		 * <p>Returns the raw response from the server.</p>
		 * @return string <p>Returns the raw response from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponse(): string {}

		/**
		 * Returns the raw response headers from the server
		 * <p>Returns the raw response headers from the server.</p>
		 * @return string <p>Returns the raw response headers from the server.</p>
		 * @link https://php.net/manual/en/solrresponse.getrawresponseheaders.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRawResponseHeaders(): string {}

		/**
		 * Returns the full URL the request was sent to
		 * <p>Returns the full URL the request was sent to.</p>
		 * @return string <p>Returns the full URL the request was sent to</p>
		 * @link https://php.net/manual/en/solrresponse.getrequesturl.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getRequestUrl(): string {}

		/**
		 * Returns a SolrObject representing the XML response from the server
		 * <p>Returns a SolrObject representing the XML response from the server.</p>
		 * @return SolrObject <p>Returns a SolrObject representing the XML response from the server</p>
		 * @link https://php.net/manual/en/solrresponse.getresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public function getResponse(): \SolrObject {}

		/**
		 * Sets the parse mode
		 * <p>Sets the parse mode.</p>
		 * @param int $parser_mode <p>SolrResponse::PARSE_SOLR_DOC parses documents in SolrDocument instances. SolrResponse::PARSE_SOLR_OBJ parses document into SolrObjects.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrresponse.setparsemode.php
		 * @since PECL solr >= 0.9.2
		 */
		public function setParseMode(int $parser_mode = 0): bool {}

		/**
		 * Was the request a success
		 * <p>Used to check if the request to the server was successful.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if it was successful and <b><code>FALSE</code></b> if it was not.</p>
		 * @link https://php.net/manual/en/solrresponse.success.php
		 * @since PECL solr >= 0.9.2
		 */
		public function success(): bool {}
	}

	/**
	 * <p>Contains utility methods for retrieving the current extension version and preparing query phrases.</p>
	 * <p>Also contains method for escaping query strings and parsing XML responses.</p>
	 * @link https://php.net/manual/en/class.solrutils.php
	 * @since PECL solr >= 0.9.2
	 */
	abstract class SolrUtils {

		/**
		 * Parses an response XML string into a SolrObject
		 * <p>This method parses an response XML string from the Apache Solr server into a SolrObject. It throws a SolrException if there was an error.</p>
		 * @param string $xmlresponse <p>The XML response string from the Solr server.</p>
		 * @param int $parse_mode <p>Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC</p>
		 * @return SolrObject <p>Returns the SolrObject representing the XML response.</p><p>If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.</p><p>If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.</p>
		 * @link https://php.net/manual/en/solrutils.digestxmlresponse.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function digestXmlResponse(string $xmlresponse, int $parse_mode = 0): \SolrObject {}

		/**
		 * Escapes a lucene query string
		 * <p>Lucene supports escaping special characters that are part of the query syntax.</p><p>The current list special characters are:</p><p></p><p>These characters are part of the query syntax and must be escaped</p>
		 * @param string $str <p>This is the query string to be escaped.</p>
		 * @return string|false <p>Returns the escaped string or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/solrutils.escapequerychars.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function escapeQueryChars(string $str): string|false {}

		/**
		 * Returns the current version of the Solr extension
		 * <p>Returns the current Solr version.</p>
		 * @return string <p>The current version of the Apache Solr extension.</p>
		 * @link https://php.net/manual/en/solrutils.getsolrversion.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function getSolrVersion(): string {}

		/**
		 * Prepares a phrase from an unescaped lucene string
		 * <p>Prepares a phrase from an unescaped lucene string.</p>
		 * @param string $str <p>The lucene phrase.</p>
		 * @return string <p>Returns the phrase contained in double quotes.</p>
		 * @link https://php.net/manual/en/solrutils.queryphrase.php
		 * @since PECL solr >= 0.9.2
		 */
		public static function queryPhrase(string $str): string {}
	}

	/**
	 * Returns the current version of the Apache Solr extension
	 * <p>This function returns the current version of the extension as a string.</p>
	 * @return string <p>It returns a string on success and <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.solr-get-version.php
	 * @see SolrUtils::getSolrVersion()
	 * @since PECL solr >= 0.9.1
	 */
	function solr_get_version(): string {}

	define('SOLR_EXTENSION_VERSION', null);

	define('SOLR_MAJOR_VERSION', null);

	define('SOLR_MINOR_VERSION', null);

	define('SOLR_PATCH_VERSION', null);

}
