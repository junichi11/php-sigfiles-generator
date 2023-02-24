<?php



namespace {

	/**
	 * <p>The OAuth extension provides a simple interface to interact with data providers using the OAuth HTTP specification to protect private resources.</p>
	 * @link https://php.net/manual/en/class.oauth.php
	 * @since PECL OAuth >= 0.99.1
	 */
	class OAuth {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.oauth.php#oauth.props.debug
		 */
		public $debug;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.oauth.php#oauth.props.sslchecks
		 */
		public $sslChecks;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.oauth.php#oauth.props.debuginfo
		 */
		public $debugInfo;

		/**
		 * Create a new OAuth object
		 * <p>Creates a new OAuth object</p>
		 * @param string $consumer_key <p>The consumer key provided by the service provider.</p>
		 * @param string $consumer_secret <p>The consumer secret provided by the service provider.</p>
		 * @param string $signature_method <p>This optional parameter defines which signature method to use, by default it is <b><code>OAUTH_SIG_METHOD_HMACSHA1</code></b> (HMAC-SHA1).</p>
		 * @param int $auth_type <p>This optional parameter defines how to pass the OAuth parameters to a consumer, by default it is <b><code>OAUTH_AUTH_TYPE_AUTHORIZATION</code></b> (in the <code>Authorization</code> header).</p>
		 * @return self
		 * @link https://php.net/manual/en/oauth.construct.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function __construct(string $consumer_key, string $consumer_secret, string $signature_method = 'OAUTH_SIG_METHOD_HMACSHA1', int $auth_type = 0) {}

		/**
		 * The destructor
		 * <p>The destructor.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauth.destruct.php
		 * @since PECL OAuth >= 0.99.9
		 */
		public function __destruct() {}

		/**
		 * Turn off verbose debugging
		 * <p>Turns off verbose request information (off by default). Alternatively, the debug property can be set to a <b><code>false</code></b> value to turn debug off.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.disabledebug.php
		 * @since PECL OAuth >= 0.99.3
		 */
		public function disableDebug(): bool {}

		/**
		 * Turn off redirects
		 * <p>Disable redirects from being followed automatically, thus allowing the request to be manually redirected.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.disableredirects.php
		 * @since PECL OAuth >= 0.99.9
		 */
		public function disableRedirects(): bool {}

		/**
		 * Turn off SSL checks
		 * <p>Turns off the usual SSL peer certificate and host checks, this is not for production environments. Alternatively, the <code>sslChecks</code> member can be set to <b><code>false</code></b> to turn SSL checks off.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.disablesslchecks.php
		 * @since PECL OAuth >= 0.99.5
		 */
		public function disableSSLChecks(): bool {}

		/**
		 * Turn on verbose debugging
		 * <p>Turns on verbose request information useful for debugging, the debug information is stored in the <code>debugInfo</code> member. Alternatively, the <code>debug</code> member can be set to a non-<b><code>false</code></b> value to turn debug on.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.enabledebug.php
		 * @since PECL OAuth >= 0.99.3
		 */
		public function enableDebug(): bool {}

		/**
		 * Turn on redirects
		 * <p>Follow and sign redirects automatically, which is enabled by default.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.enableredirects.php
		 * @since PECL OAuth >= 0.99.9
		 */
		public function enableRedirects(): bool {}

		/**
		 * Turn on SSL checks
		 * <p>Turns on the usual SSL peer certificate and host checks (enabled by default). Alternatively, the <code>sslChecks</code> member can be set to a non-<b><code>false</code></b> value to turn SSL checks off.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.enablesslchecks.php
		 * @since PECL OAuth >= 0.99.5
		 */
		public function enableSSLChecks(): bool {}

		/**
		 * Fetch an OAuth protected resource
		 * <p>Fetch a resource.</p>
		 * @param string $protected_resource_url <p>URL to the OAuth protected resource.</p>
		 * @param array $extra_parameters <p>Extra parameters to send with the request for the resource.</p>
		 * @param string $http_method <p>One of the <b><code>OAUTH_HTTP_METHOD_&#42;</code></b> OAUTH constants, which includes GET, POST, PUT, HEAD, or DELETE.</p> <p>HEAD (<b><code>OAUTH_HTTP_METHOD_HEAD</code></b>) can be useful for discovering information prior to the request (if OAuth credentials are in the <code>Authorization</code> header).</p>
		 * @param array $http_headers <p>HTTP client headers (such as User-Agent, Accept, etc.)</p>
		 * @return mixed <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauth.fetch.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function fetch(string $protected_resource_url, array $extra_parameters = null, string $http_method = null, array $http_headers = null): mixed {}

		/**
		 * Generate a signature
		 * <p>Generate a signature based on the final HTTP method, URL and a string/array of parameters.</p>
		 * @param string $http_method <p>HTTP method for request</p>
		 * @param string $url <p>URL for request</p>
		 * @param mixed $extra_parameters <p>String or array of additional parameters.</p>
		 * @return string|false <p>A string containing the generated signature or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/oauth.generatesignature.php
		 * @since No version information available, might only be in Git
		 */
		public function generateSignature(string $http_method, string $url, mixed $extra_parameters = null): string|false {}

		/**
		 * Fetch an access token
		 * <p>Fetch an access token, secret and any additional response parameters from the service provider.</p>
		 * @param string $access_token_url <p>URL to the access token API.</p>
		 * @param string $auth_session_handle <p>Authorization session handle, this parameter does not have any citation in the core OAuth 1.0 specification but may be implemented by large providers. &#xBB;&#xA0;See ScalableOAuth for more information.</p>
		 * @param string $verifier_token <p>For service providers which support 1.0a, a <code>verifier_token</code> must be passed while exchanging the request token for the access token. If the <code>verifier_token</code> is present in <code>$_GET</code> or <code>$_POST</code> it is passed automatically and the caller does not need to specify a <code>verifier_token</code> (usually if the access token is exchanged at the oauth_callback URL). &#xBB;&#xA0;See ScalableOAuth for more information.</p>
		 * @param string $http_method <p>HTTP method to use, e.g. <code>GET</code> or <code>POST</code>.</p>
		 * @return array <p>Returns an array containing the parsed OAuth response on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauth.getaccesstoken.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function getAccessToken(string $access_token_url, string $auth_session_handle = null, string $verifier_token = null, string $http_method = null): array {}

		/**
		 * Gets CA information
		 * <p>Gets the Certificate Authority information, which includes the ca_path and ca_info set by <code>OAuth::setCaPath()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array <p>An <code>array</code> of Certificate Authority information, specifically as <code>ca_path</code> and <code>ca_info</code> keys within the returned associative array.</p>
		 * @link https://php.net/manual/en/oauth.getcapath.php
		 * @since PECL OAuth >= 0.99.8
		 */
		public function getCAPath(): array {}

		/**
		 * Get the last response
		 * <p>Get the raw response of the most recent request.</p>
		 * @return string <p>Returns a string containing the last response.</p>
		 * @link https://php.net/manual/en/oauth.getlastresponse.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function getLastResponse(): string {}

		/**
		 * Get headers for last response
		 * <p>Get headers for last response.</p>
		 * @return string|false <p>A string containing the last response's headers or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/oauth.getlastresponseheaders.php
		 * @since No version information available, might only be in Git
		 */
		public function getLastResponseHeaders(): string|false {}

		/**
		 * Get HTTP information about the last response
		 * <p>Get HTTP information about the last response.</p>
		 * @return array <p>Returns an array containing the response information for the last request. Constants from <code>curl_getinfo()</code> may be used.</p>
		 * @link https://php.net/manual/en/oauth.getlastresponseinfo.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function getLastResponseInfo(): array {}

		/**
		 * Generate OAuth header string signature
		 * <p>Generate OAuth header string signature based on the final HTTP method, URL and a string/array of parameters</p>
		 * @param string $http_method <p>HTTP method for request.</p>
		 * @param string $url <p>URL for request.</p>
		 * @param mixed $extra_parameters <p>String or array of additional parameters.</p>
		 * @return string|false <p>A string containing the generated request header or <b><code>false</code></b> on failure</p>
		 * @link https://php.net/manual/en/oauth.getrequestheader.php
		 * @since No version information available, might only be in Git
		 */
		public function getRequestHeader(string $http_method, string $url, mixed $extra_parameters = null): string|false {}

		/**
		 * Fetch a request token
		 * <p>Fetch a request token, secret and any additional response parameters from the service provider.</p>
		 * @param string $request_token_url <p>URL to the request token API.</p>
		 * @param string $callback_url <p>OAuth callback URL. If <code>callback_url</code> is passed and is an empty value, it is set to "oob" to address the OAuth 2009.1 advisory.</p>
		 * @param string $http_method <p>HTTP method to use, e.g. <code>GET</code> or <code>POST</code>.</p>
		 * @return array <p>Returns an array containing the parsed OAuth response on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauth.getrequesttoken.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function getRequestToken(string $request_token_url, string $callback_url = null, string $http_method = null): array {}

		/**
		 * Set authorization type
		 * <p>Set where the OAuth parameters should be passed.</p>
		 * @param int $auth_type <p><code>auth_type</code> can be one of the following flags (in order of decreasing preference as per OAuth 1.0 section 5.2):</p>  <b><code>OAUTH_AUTH_TYPE_AUTHORIZATION</code></b>   Pass the OAuth parameters in the HTTP <code>Authorization</code> header.    <b><code>OAUTH_AUTH_TYPE_FORM</code></b>   Append the OAuth parameters to the HTTP POST request body.    <b><code>OAUTH_AUTH_TYPE_URI</code></b>   Append the OAuth parameters to the request URI.    <b><code>OAUTH_AUTH_TYPE_NONE</code></b>   None.
		 * @return bool <p>Returns <b><code>true</code></b> if a parameter is correctly set, otherwise <b><code>false</code></b> (e.g., if an invalid <code>auth_type</code> is passed in.)</p>
		 * @link https://php.net/manual/en/oauth.setauthtype.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function setAuthType(int $auth_type): bool {}

		/**
		 * Set CA path and info
		 * <p>Sets the Certificate Authority (CA), both for path and info.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $ca_path <p>The CA Path being set.</p>
		 * @param string $ca_info <p>The CA Info being set.</p>
		 * @return mixed <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> if either <code>ca_path</code> or <code>ca_info</code> are considered invalid.</p>
		 * @link https://php.net/manual/en/oauth.setcapath.php
		 * @since PECL OAuth >= 0.99.8
		 */
		public function setCAPath(string $ca_path = null, string $ca_info = null): mixed {}

		/**
		 * Set the nonce for subsequent requests
		 * <p>Sets the nonce for all subsequent requests.</p>
		 * @param string $nonce <p>The value for oauth_nonce.</p>
		 * @return mixed <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> if the <code>nonce</code> is considered invalid.</p>
		 * @link https://php.net/manual/en/oauth.setnonce.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function setNonce(string $nonce): mixed {}

		/**
		 * Set the RSA certificate
		 * <p>Sets the RSA certificate.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $cert <p>The RSA certificate.</p>
		 * @return mixed <p>Returns <b><code>true</code></b> on success, or <b><code>false</code></b> on failure (e.g., the RSA certificate cannot be parsed.)</p>
		 * @link https://php.net/manual/en/oauth.setrsacertificate.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function setRSACertificate(string $cert): mixed {}

		/**
		 * The setRequestEngine purpose
		 * <p>Sets the Request Engine, that will be sending the HTTP requests.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $reqengine <p>The desired request engine. Set to <b><code>OAUTH_REQENGINE_STREAMS</code></b> to use PHP Streams, or <b><code>OAUTH_REQENGINE_CURL</code></b> to use Curl.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauth.setrequestengine.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function setRequestEngine(int $reqengine): void {}

		/**
		 * Tweak specific SSL checks for requests
		 * <p>Tweak specific SSL checks for requests.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param int $sslcheck
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauth.setsslchecks.php
		 * @since No version information available, might only be in Git
		 */
		public function setSSLChecks(int $sslcheck): bool {}

		/**
		 * Set the timestamp
		 * <p>Sets the OAuth timestamp for subsequent requests.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $timestamp <p>The timestamp.</p>
		 * @return mixed <p>Returns <b><code>true</code></b>, unless the <code>timestamp</code> is invalid, in which case <b><code>false</code></b> is returned.</p>
		 * @link https://php.net/manual/en/oauth.settimestamp.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function setTimestamp(string $timestamp): mixed {}

		/**
		 * Sets the token and secret
		 * <p>Set the token and secret for subsequent requests.</p>
		 * @param string $token <p>The OAuth token.</p>
		 * @param string $token_secret <p>The OAuth token secret.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauth.settoken.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function setToken(string $token, string $token_secret): bool {}

		/**
		 * Set the OAuth version
		 * <p>Sets the OAuth version for subsequent requests</p>
		 * @param string $version <p>OAuth version, default value is always "1.0"</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauth.setversion.php
		 * @since PECL OAuth >= 0.99.1
		 */
		public function setVersion(string $version): bool {}
	}

	/**
	 * <p>This exception is thrown when exceptional errors occur while using the OAuth extension and contains useful debugging information.</p>
	 * @link https://php.net/manual/en/class.oauthexception.php
	 * @since PECL OAuth >= 0.99.1
	 */
	class OAuthException extends \Exception {

		/**
		 * @var mixed <p>The response of the exception which occurred, if any</p>
		 * @link https://php.net/manual/en/class.oauthexception.php#oauthexception.props.lastresponse
		 */
		public $lastResponse;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.oauthexception.php#oauthexception.props.debuginfo
		 */
		public $debugInfo;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message = "";

		/**
		 * @var string <p>The string representation of the stack trace</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.string
		 */
		private $string = "";

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The filename where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.file
		 */
		protected $file = "";

		/**
		 * @var int <p>The line where the exception was created</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * @var array <p>The stack trace as an array</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.trace
		 */
		private $trace = [];

		/**
		 * @var ?Throwable <p>The previously thrown exception</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.previous
		 */
		private $previous = null;

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		private function __clone() {}

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
		 * @return int <p>Returns the exception code as <code>int</code> in <code>Exception</code> but possibly as other type in <code>Exception</code> descendants (for example as <code>string</code> in <code>PDOException</code>).</p>
		 * @link https://php.net/manual/en/exception.getcode.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getCode(): int {}

		/**
		 * Gets the file in which the exception was created
		 * <p>Get the name of the file in which the exception was created.</p>
		 * @return string <p>Returns the filename in which the exception was created.</p>
		 * @link https://php.net/manual/en/exception.getfile.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		final public function getFile(): string {}

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
		 * Returns previous Throwable
		 * <p>Returns previous <code>Throwable</code> (which had been passed as the third parameter of <code>Exception::__construct()</code>).</p>
		 * @return ?Throwable <p>Returns the previous <code>Throwable</code> if available or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		final public function getPrevious(): ?\Throwable {}

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
	 * <p>Manages an OAuth provider class.</p>
	 * <p>See also an external in-depth tutorial titled &#xBB;&#xA0;Writing an OAuth Provider Service, which takes a hands-on approach to providing this service. There are also &#xBB;&#xA0;OAuth provider examples within the OAuth extensions sources.</p>
	 * @link https://php.net/manual/en/class.oauthprovider.php
	 * @since PECL OAuth >= 1.0.0
	 */
	class OAuthProvider {

		/**
		 * Constructs a new OAuthProvider object
		 * <p>Initiates a new <code>OAuthProvider</code> <code>object</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param array $params_array <p>Setting these optional parameters is limited to the CLI SAPI.</p>
		 * @return self <p>An <code>OAuthProvider</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/oauthprovider.construct.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function __construct(array $params_array = null) {}

		/**
		 * Add required parameters
		 * <p>Add required oauth provider parameters.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $req_params <p>The required parameters.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauthprovider.addrequiredparameter.php
		 * @since PECL OAuth >= 1.0.0
		 */
		final public function addRequiredParameter(string $req_params): bool {}

		/**
		 * Calls the timestampNonceHandler callback
		 * <p>Calls the registered timestamp handler callback function, which is set with <code>OAuthProvider::timestampNonceHandler()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.calltimestampnoncehandler.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function callTimestampNonceHandler(): void {}

		/**
		 * Calls the consumerNonceHandler callback
		 * <p>Calls the registered consumer handler callback function, which is set with <code>OAuthProvider::consumerHandler()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.callconsumerhandler.php
		 * @since No version information available, might only be in Git
		 */
		public function callconsumerHandler(): void {}

		/**
		 * Calls the tokenNonceHandler callback
		 * <p>Calls the registered token handler callback function, which is set with <code>OAuthProvider::tokenHandler()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.calltokenhandler.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function calltokenHandler(): void {}

		/**
		 * Check an oauth request
		 * <p>Checks an OAuth request.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $uri <p>The optional URI, or endpoint.</p>
		 * @param string $method <p>The HTTP method. Optionally pass in one of the <b><code>OAUTH_HTTP_METHOD_&#42;</code></b> OAuth constants.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.checkoauthrequest.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function checkOAuthRequest(string $uri = null, string $method = null): void {}

		/**
		 * Set the consumerHandler handler callback
		 * <p>Sets the consumer handler callback, which will later be called with <code>OAuthProvider::callConsumerHandler()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param callable $callback_function <p>The <code>callable</code> functions name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.consumerhandler.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function consumerHandler(callable $callback_function): void {}

		/**
		 * Generate a random token
		 * <p>Generates a <code>string</code> of pseudo-random bytes.</p>
		 * @param int $size <p>The desired token length, in terms of bytes.</p>
		 * @param bool $strong <p>Setting to <b><code>true</code></b> means <code>/dev/random</code> will be used for entropy, as otherwise the non-blocking <code>/dev/urandom</code> is used. This parameter is ignored on Windows.</p>
		 * @return string <p>The generated token, as a <code>string</code> of bytes.</p>
		 * @link https://php.net/manual/en/oauthprovider.generatetoken.php
		 * @see openssl_random_pseudo_bytes(), mcrypt_create_iv()
		 * @since PECL OAuth >= 1.0.0
		 */
		final public static function generateToken(int $size, bool $strong = false): string {}

		/**
		 * is2LeggedEndpoint
		 * <p>The 2-legged flow, or request signing. It does not require a token.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param mixed $params_array
		 * @return void <p>An <code>OAuthProvider</code> <code>object</code>.</p>
		 * @link https://php.net/manual/en/oauthprovider.is2leggedendpoint.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function is2LeggedEndpoint(mixed $params_array): void {}

		/**
		 * Sets isRequestTokenEndpoint
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param bool $will_issue_request_token <p>Sets whether or not it will issue a request token, thus determining if <code>OAuthProvider::tokenHandler()</code> needs to be called.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.isrequesttokenendpoint.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function isRequestTokenEndpoint(bool $will_issue_request_token): void {}

		/**
		 * Remove a required parameter
		 * <p>Removes a required parameter.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $req_params <p>The required parameter to be removed.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauthprovider.removerequiredparameter.php
		 * @since PECL OAuth >= 1.0.0
		 */
		final public function removeRequiredParameter(string $req_params): bool {}

		/**
		 * Report a problem
		 * <p>Pass in a problem as an <code>OAuthException</code>, with possible problems listed in the OAuth constants section.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $oauthexception <p>The <code>OAuthException</code>.</p>
		 * @param bool $send_headers
		 * @return string <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.reportproblem.php
		 * @since PECL OAuth >= 1.0.0
		 */
		final public static function reportProblem(string $oauthexception, bool $send_headers = true): string {}

		/**
		 * Set a parameter
		 * <p>Sets a parameter.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $param_key <p>The parameter key.</p>
		 * @param mixed $param_val <p>The optional parameter value.</p> <p>To exclude a parameter from signature verification, set its value to <b><code>null</code></b>.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/oauthprovider.setparam.php
		 * @since PECL OAuth >= 1.0.0
		 */
		final public function setParam(string $param_key, mixed $param_val = null): bool {}

		/**
		 * Set request token path
		 * <p>Sets the request tokens path.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param string $path <p>The path.</p>
		 * @return bool <p><b><code>true</code></b></p>
		 * @link https://php.net/manual/en/oauthprovider.setrequesttokenpath.php
		 * @since PECL OAuth >= 1.0.0
		 */
		final public function setRequestTokenPath(string $path): bool {}

		/**
		 * Set the timestampNonceHandler handler callback
		 * <p>Sets the timestamp nonce handler callback, which will later be called with <code>OAuthProvider::callTimestampNonceHandler()</code>. Errors related to timestamp/nonce are thrown to this callback.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param callable $callback_function <p>The <code>callable</code> functions name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.timestampnoncehandler.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function timestampNonceHandler(callable $callback_function): void {}

		/**
		 * Set the tokenHandler handler callback
		 * <p>Sets the token handler callback, which will later be called with <code>OAuthProvider::callTokenHandler()</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
		 * @param callable $callback_function <p>The <code>callable</code> functions name.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/oauthprovider.tokenhandler.php
		 * @since PECL OAuth >= 1.0.0
		 */
		public function tokenHandler(callable $callback_function): void {}
	}

	/**
	 * Generate a Signature Base String
	 * <p>Generates a Signature Base String according to pecl/oauth.</p>
	 * @param string $http_method <p>The HTTP method.</p>
	 * @param string $uri <p>URI to encode.</p>
	 * @param array $request_parameters <p>Array of request parameters.</p>
	 * @return string <p>Returns a Signature Base String.</p>
	 * @link https://php.net/manual/en/function.oauth-get-sbs.php
	 * @since PECL OAuth >=0.99.7
	 */
	function oauth_get_sbs(string $http_method, string $uri, array $request_parameters = null): string {}

	/**
	 * Encode a URI to RFC 3986
	 * <p>Encodes a URI to &#xBB;&#xA0;RFC 3986.</p>
	 * @param string $uri <p>URI to encode.</p>
	 * @return string <p>Returns an &#xBB;&#xA0;RFC 3986 encoded string.</p>
	 * @link https://php.net/manual/en/function.oauth-urlencode.php
	 * @since PECL OAuth >=0.99.2
	 */
	function oauth_urlencode(string $uri): string {}

	/**
	 * <p>This constant represents putting OAuth parameters in the <code>Authorization</code> header.</p>
	 */
	define('OAUTH_AUTH_TYPE_AUTHORIZATION', null);

	/**
	 * <p>This constant represents putting OAuth parameters as part of the HTTP POST body.</p>
	 */
	define('OAUTH_AUTH_TYPE_FORM', null);

	/**
	 * <p>This constant indicates a NoAuth OAuth request.</p>
	 */
	define('OAUTH_AUTH_TYPE_NONE', null);

	/**
	 * <p>This constant represents putting OAuth parameters in the request URI.</p>
	 */
	define('OAUTH_AUTH_TYPE_URI', null);

	/**
	 * The <i>oauth_nonce</i> value was used in a previous request, therefore it cannot be used now.
	 */
	define('OAUTH_BAD_NONCE', null);

	/**
	 * The <i>oauth_timestamp</i> value was not accepted by the service provider. In this case, the response should also contain the <i>oauth_acceptable_timestamps</i> parameter.
	 */
	define('OAUTH_BAD_TIMESTAMP', null);

	/**
	 * The consumer key was refused.
	 */
	define('OAUTH_CONSUMER_KEY_REFUSED', null);

	/**
	 * The <i>oauth_consumer_key</i> is temporarily unacceptable to the service provider. For example, the service provider may be throttling the consumer.
	 */
	define('OAUTH_CONSUMER_KEY_UNKNOWN', null);

	/**
	 * Use the <i>DELETE</i> method for the OAuth request.
	 */
	define('OAUTH_HTTP_METHOD_DELETE', null);

	/**
	 * <p>Use the <i>GET</i> method for the OAuth request.</p>
	 */
	define('OAUTH_HTTP_METHOD_GET', null);

	/**
	 * <p>Use the <i>HEAD</i> method for the OAuth request.</p>
	 */
	define('OAUTH_HTTP_METHOD_HEAD', null);

	/**
	 * <p>Use the <i>POST</i> method for the OAuth request.</p>
	 */
	define('OAUTH_HTTP_METHOD_POST', null);

	/**
	 * <p>Use the <i>PUT</i> method for the OAuth request.</p>
	 */
	define('OAUTH_HTTP_METHOD_PUT', null);

	/**
	 * The <i>oauth_signature</i> is invalid, as it does not match the signature computed by the service provider.
	 */
	define('OAUTH_INVALID_SIGNATURE', null);

	/**
	 * Life is good.
	 */
	define('OAUTH_OK', null);

	/**
	 * A required parameter was not received. In this case, the response should also contain the <i>oauth_parameters_absent</i> parameter.
	 */
	define('OAUTH_PARAMETER_ABSENT', null);

	/**
	 * Used by <code>OAuth::setRequestEngine()</code> to set the engine to Curl, as opposed to <b><code>OAUTH_REQENGINE_STREAMS</code></b> for PHP streams.
	 */
	define('OAUTH_REQENGINE_CURL', null);

	/**
	 * Used by <code>OAuth::setRequestEngine()</code> to set the engine to PHP streams, as opposed to <b><code>OAUTH_REQENGINE_CURL</code></b> for Curl.
	 */
	define('OAUTH_REQENGINE_STREAMS', null);

	/**
	 * <p>OAuth <i>HMAC-SHA1</i> signature method.</p>
	 */
	define('OAUTH_SIG_METHOD_HMACSHA1', null);

	/**
	 * OAuth <i>HMAC-SHA256</i> signature method.
	 */
	define('OAUTH_SIG_METHOD_HMACSHA256', null);

	/**
	 * OAuth <i>RSA-SHA1</i> signature method.
	 */
	define('OAUTH_SIG_METHOD_RSASHA1', null);

	/**
	 * The <i>oauth_signature_method</i> was not accepted by service provider.
	 */
	define('OAUTH_SIGNATURE_METHOD_REJECTED', null);

	/**
	 * The <i>oauth_token</i> has expired.
	 */
	define('OAUTH_TOKEN_EXPIRED', null);

	/**
	 * The <i>oauth_token</i> was not accepted by the service provider. The reason is not known, but it might be because the token was never issued, already consumed, expired, and/or forgotten by the service provider.
	 */
	define('OAUTH_TOKEN_REJECTED', null);

	/**
	 * The <i>oauth_token</i> has been revoked, and will never be accepted.
	 */
	define('OAUTH_TOKEN_REVOKED', null);

	/**
	 * The <i>oauth_token</i> has been consumed. It can no longer be used because it has already been used in the previous request(s).
	 */
	define('OAUTH_TOKEN_USED', null);

	/**
	 * The <i>oauth_verifier</i> is incorrect.
	 */
	define('OAUTH_VERIFIER_INVALID', null);

}
