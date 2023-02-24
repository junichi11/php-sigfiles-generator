<?php



namespace {

	/**
	 * <p>The SoapClient class provides a client for &#xBB;&#xA0;SOAP 1.1, &#xBB;&#xA0;SOAP 1.2 servers. It can be used in WSDL or non-WSDL mode.</p>
	 * @link https://php.net/manual/en/class.soapclient.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SoapClient {

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.uri
		 */
		private $uri = null;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.style
		 */
		private $style = null;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.use
		 */
		private $use = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.location
		 */
		private $location = null;

		/**
		 * @var bool
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.trace
		 */
		private $trace = false;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.compression
		 */
		private $compression = null;

		/**
		 * @var ?resource
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.sdl
		 */
		private $sdl = null;

		/**
		 * @var ?resource
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.typemap
		 */
		private $typemap = null;

		/**
		 * @var ?resource
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.httpsocket
		 */
		private $httpsocket = null;

		/**
		 * @var ?resource
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.httpurl
		 */
		private $httpurl = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-login
		 */
		private $_login = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-password
		 */
		private $_password = null;

		/**
		 * @var bool
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-use-digest
		 */
		private $_use_digest = false;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-digest
		 */
		private $_digest = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-proxy-host
		 */
		private $_proxy_host = null;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-proxy-port
		 */
		private $_proxy_port = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-proxy-login
		 */
		private $_proxy_login = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-proxy-password
		 */
		private $_proxy_password = null;

		/**
		 * @var bool
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-exceptions
		 */
		private $_exceptions = true;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-encoding
		 */
		private $_encoding = null;

		/**
		 * @var ?array
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-classmap
		 */
		private $_classmap = null;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-features
		 */
		private $_features = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-connection-timeout
		 */
		private $_connection_timeout;

		/**
		 * @var ?resource
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-stream-context
		 */
		private $_stream_context = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-user-agent
		 */
		private $_user_agent = null;

		/**
		 * @var bool
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-keep-alive
		 */
		private $_keep_alive = true;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-ssl-method
		 */
		private $_ssl_method = null;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-soap-version
		 */
		private $_soap_version;

		/**
		 * @var ?int
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-use-proxy
		 */
		private $_use_proxy = null;

		/**
		 * @var array
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.-cookies
		 */
		private $_cookies = [];

		/**
		 * @var ?array
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.--default-headers
		 */
		private $__default_headers = null;

		/**
		 * @var ?SoapFault
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.--soap-fault
		 */
		private $__soap_fault = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.--last-request
		 */
		private $__last_request = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.--last-response
		 */
		private $__last_response = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.--last-request-headers
		 */
		private $__last_request_headers = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapclient.php#soapclient.props.--last-response-headers
		 */
		private $__last_response_headers = null;

		/**
		 * Calls a SOAP function (deprecated)
		 * <p>Calling this method directly is deprecated. Usually, SOAP functions can be called as methods of the <code>SoapClient</code> object; in situations where this is not possible or additional options are needed, use <code>SoapClient::__soapCall()</code>.</p>
		 * @param string $name <p>The name of the SOAP function to call.</p>
		 * @param array $args <p>An array of the arguments to pass to the function. This can be either an ordered or an associative array. Note that most SOAP servers require parameter names to be provided, in which case this must be an associative array.</p>
		 * @return mixed <p>SOAP functions may return one, or multiple values. If only one value is returned by the SOAP function, the return value will be a scalar. If multiple values are returned, an associative array of named output parameters is returned instead.</p><p>On error, if the <code>SoapClient</code> object was constructed with the <code>exceptions</code> option set to <b><code>false</code></b>, a <code>SoapFault</code> object will be returned.</p>
		 * @link https://php.net/manual/en/soapclient.call.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __call(string $name, array $args): mixed {}

		/**
		 * SoapClient constructor
		 * <p>Creates a <code>SoapClient</code> object to connect to a SOAP service.</p>
		 * @param ?string $wsdl <p>URI of a WSDL file describing the service, which is used to automatically configure the client. If not provided, the client will operate in non-WSDL mode.</p> <p><b>Note</b>:</p><p>By default, the WSDL file will be cached for performance. To disable or configure this caching, see SOAP Configure Options and the  <code>cache_wsdl</code> option.</p>
		 * @param array $options <p>An associative array specifying additional options for the SOAP client. If <code>wsdl</code> is provided, this is optional; otherwise, at least <code>location</code> and <code>url</code> must be provided.</p>  <code>location</code> <code>string</code>   <p>The URL of the SOAP server to send the request to.</p> <p>Required if the <code>wsdl</code> parameter is not provided. If both a <code>wsdl</code> parameter and <code>location</code> option are provided, the <code>location</code> option will over-ride any location specified in the WSDL file.</p>   <code>uri</code> <code>string</code>   <p>The target namespace of the SOAP service.</p> <p>Required if the <code>wsdl</code> parameter is not provided; ignored otherwise.</p>   <code>style</code> <code>int</code>   <p>Specifies the binding style to use for this client, using the constants <b><code>SOAP_RPC</code></b> and <b><code>SOAP_DOCUMENT</code></b>. <b><code>SOAP_RPC</code></b> indicates RPC-style binding, where the SOAP request body contains a standard encoding of a function call. <b><code>SOAP_DOCUMENT</code></b> indicates document-style binding, where the SOAP request body contains an XML document with service-defined meaning.</p> <p>If the <code>wsdl</code> parameter is provided, this option is ignored, and the style is read from the WSDL file.</p> <p>If neither this option nor the <code>wsdl</code> parameter is provided, RPC-style is used.</p>   <code>use</code> <code>int</code>   <p>Specifies the encoding style to use for this client, using the constants <b><code>SOAP_ENCODED</code></b> or <b><code>SOAP_LITERAL</code></b>. <b><code>SOAP_ENCODED</code></b> indicates encoding using the types defined in the SOAP specification. <b><code>SOAP_LITERAL</code></b> indicates encoding using a schema defined by the service.</p> <p>If the <code>wsdl</code> parameter is provided, this option is ignored, and the encoding is read from the WSDL file.</p> <p>If neither this option nor the <code>wsdl</code> parameter is provided, the "encoded" style is used.</p>   <code>soap_version</code> <code>int</code>   <p>Specifies the version of the SOAP protocol to use: <b><code>SOAP_1_1</code></b> for SOAP 1.1, or <b><code>SOAP_1_2</code></b> for SOAP 1.2.</p> <p>If omitted, SOAP 1.1 is used.</p>   <code>authentication</code> <code>int</code>   <p>Specifies the authentication method when using HTTP authentication in requests. The value may be either <b><code>SOAP_AUTHENTICATION_BASIC</code></b> or <b><code>SOAP_AUTHENTICATION_DIGEST</code></b>.</p> <p>If omitted, and the <code>login</code> option is provided, Basic Authentication is used.</p>   <code>login</code> <code>string</code>   <p>Username to use with HTTP Basic or Digest Authentication.</p>   <code>password</code> <code>string</code>   <p>Password to use with HTTP Basic or Digest Authentication.</p> <p>Not to be confused with <code>passphrase</code>, which is used with HTTPS Client Certificate authentication.</p>   <code>local_cert</code> <code>string</code>   <p>Path to a client certificate for use with HTTPS authentication. It must be a PEM encoded file which contains your certificate and private key.</p> <p>The file can also include a chain of issuers, which must come after the client certificate.</p> <p>Can also be set via  <code>stream_context</code>, which also supports specifying a separate private key file.</p>   <code>passphrase</code> <code>string</code>   <p>Passphrase for the client certificate specified in the <code>local_cert</code> option.</p> <p>Not to be confused with <code>password</code>, which is used for Basic or Digest Authentication.</p> <p>Can also be set via  <code>stream_context</code>.</p>   <code>proxy_host</code> <code>string</code>   <p>Hostname to use as a proxy server for HTTP requests.</p> <p>The <code>proxy_port</code> option must also be specified.</p>   <code>proxy_port</code> <code>int</code>   <p>TCP port to use when connecting to the proxy server specified in <code>proxy_host</code>.</p>   <code>proxy_login</code> <code>string</code>   <p>Optional username to authenticate with the proxy server specified in <code>proxy_host</code>, using HTTP Basic Authentication.</p>   <code>proxy_password</code> <code>string</code>   <p>Optional password to authenticate with the proxy server specified in <code>proxy_host</code>, using HTTP Basic Authentication.</p>   <code>compression</code> <code>int</code>   <p>Enables compression of HTTP SOAP requests and responses.</p> <p>The value should be the bitwise OR of three parts: an optional <b><code>SOAP_COMPRESSION_ACCEPT</code></b>, to send an "Accept-Encoding" header; either <b><code>SOAP_COMPRESSION_GZIP</code></b> or <b><code>SOAP_COMPRESSION_DEFLATE</code></b> to indicate the compression algorithm to use; and a number between 1 and 9 to indicate the level of compression to use in the request. For example, to enable two-way gzip compression with the maximum compression level, use <code>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 9</code>.</p>   <code>encoding</code> <code>string</code>   <p>Defines the internal character encoding. Requests are always sent in UTF-8, and converted to and from this encoding.</p>   <code>trace</code> <code>bool</code>   <p>Captures request and response information, which can then be accessed with the methods <code>SoapClient::__getLastRequest()</code>, <code>SoapClient::__getLastRequestHeaders()</code>, <code>SoapClient::__getLastResponse()</code>, and <code>SoapClient::__getLastResponseHeaders()</code>.</p> <p>If omitted, defaults to <b><code>false</code></b></p>   <code>classmap</code> <code>array</code>   <p>Used to map types defined in the WSDL to PHP classes. It should be specified as an associative <code>array</code> with type names from the WSDL as keys and names of PHP classes as values. Note that the type names of an element is not necessarily the same as the element (tag) name.</p> <p>The provided class names should always be fully qualified with any namespaces, and never start with a leading <code>\</code>. The correct form can be generated by using ::class.</p> <p>Note that when creating a class, the constructor will not be called, but magic __set() and __get() methods for individual properties will be.</p>   <code>typemap</code> <code>array</code>   <p>Used to define type mappings using user-defined callback functions. Each type mapping should be an array with keys <code>type_name</code> (<code>string</code> specifying the XML element type); <code>type_ns</code> (<code>string</code> containing namespace URI); <code>from_xml</code> (<code>callable</code> accepting one string parameter and returning an object) and <code>to_xml</code> (<code>callable</code> accepting one object parameter and returning a string).</p>   <code>exceptions</code> <code>bool</code>   <p>Defines whether errors throw exceptions of type <code>SoapFault</code>.</p> <p>Defaults to <b><code>true</code></b></p>   <code>connection_timeout</code> <code>int</code>   <p>Defines a timeout in seconds for the connection to the SOAP service. This option does not define a timeout for services with slow responses. To limit the time to wait for calls to finish the default_socket_timeout configuration option is available.</p>   <code>cache_wsdl</code> <code>int</code>   <p>If the <code>wsdl</code> parameter is provided, and the soap.wsdl_cache_enabled configuration option is on, this option determines the type of caching. One of <b><code>WSDL_CACHE_NONE</code></b>, <b><code>WSDL_CACHE_DISK</code></b>, <b><code>WSDL_CACHE_MEMORY</code></b> or <b><code>WSDL_CACHE_BOTH</code></b>.</p> <p>Two types of cache are available: in-memory caching, which caches the WSDL in the memory of the current process; and disk caching, which caches the WSDL in a file on disk, shared between all processes. The directory to use for the disk cache is determined by the soap.wsdl_cache_dir configuration option. Both caches use the same lifetime, determined by the soap.wsdl_cache_ttl configuration option. The in-memory cache also has a maximum number of entries determined by the soap.wsdl_cache_limit configuration option.</p> <p>If not specified, the  soap.wsdl_cache configuration option will be used.</p>   <code>user_agent</code> <code>string</code>   <p>The value to use in the <code>User-Agent</code> HTTP header when making requests.</p> <p>Can also be set via  <code>stream_context</code>.</p> <p>If not specified, the user agent will be <code>"PHP-SOAP/"</code> followed by the value of <b><code>PHP_VERSION</code></b>.</p>   <code>stream_context</code> <code>resource</code>   <p>A stream context created by <code>stream_context_create()</code>, which allows additional options to be set.</p> <p>The context may include socket context options, SSL context options, plus selected HTTP context options: <code>content_type</code>, <code>header</code>, <code>max_redirects</code>, <code>protocol_version</code>, and <code>user_agent</code>.</p> <p>Note that the following HTTP headers are generated automatically or from other options, and will be ignored if specified in the <code>'header'</code> context option: <code>host</code>, <code>connection</code>, <code>user-agent</code>, <code>content-length</code>, <code>content-type</code>, <code>cookie</code>, <code>authorization</code>, and <code>proxy-authorization</code></p>   <code>features</code> <code>int</code>   <p>A bitmask to enable one or more of the following features:</p>  <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b>   <p>When decoding a response to an array, the default behaviour is to detect whether an element name appears once or multiple times in a particular parent element. For elements which appear only once, an object property allows direct access to the content; for elements which appear more than once, the property contains an array with the content of each matching element.</p> <p>If the <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b> feature is enabled, elements which appear only once are placed in a single-element array, so that access is consistent for all elements. This only has an effect when using a WSDL containing a schema for the response. See Examples section for an illustration.</p>   <b><code>SOAP_USE_XSI_ARRAY_TYPE</code></b>   <p>When the <code>use</code> option or WSDL property is set to <code>encoded</code>, force arrays to use a type of <code>SOAP-ENC:Array</code>, rather than a schema-specific type.</p>   <b><code>SOAP_WAIT_ONE_WAY_CALLS</code></b>   <p>Wait for a response even if the WSDL indicates a one-way request.</p>     <code>keep_alive</code> <code>bool</code>   <p>a boolean value defining whether to send the <code>Connection: Keep-Alive</code> header or <code>Connection: close</code>.</p> <p>Defaults to <b><code>true</code></b></p>   <code>ssl_method</code> <code>string</code>   <p>Specifies the SSL or TLS protocol version to use with secure HTTP connections, instead of the default negotiation. Specifying <b><code>SOAP_SSL_METHOD_SSLv2</code></b> or <b><code>SOAP_SSL_METHOD_SSLv3</code></b> will force use of SSL 2 or SSL 3, respectively. Specifying <b><code>SOAP_SSL_METHOD_SSLv23</code></b> has no effect; the constant exists only for backwards compatibility. As of PHP 7.2, specifying <b><code>SOAP_SSL_METHOD_TLS</code></b> also has no effect; in earlier versions, it forced use of TLS 1.0.</p> <p>Note that SSL versions 2 and 3 are considered insecure, and may not be supported by the installed OpenSSL library.</p> <p>This option is <i>DEPRECATED</i> as of PHP 8.1.0. A more flexible alternative, which allows specifying individual versions of TLS, is to use the  <code>stream_context</code> option with the 'crypto_method' context parameter.</p> <p><b>Example #1 Specifying use of TLS 1.3 only</b></p>  <code> &lt;&#63;php<br>$context = stream_context_create([<br> 'ssl' =&gt; [<br> 'crypto_method' =&gt; STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT<br> ]<br>];<br>$client = new SoapClient("some.wsdl", ['context' =&gt; $context]);  </code>
		 * @return self
		 * @link https://php.net/manual/en/soapclient.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(?string $wsdl, array $options = []) {}

		/**
		 * Performs a SOAP request
		 * <p>Performs SOAP request over HTTP.</p><p>This method can be overridden in subclasses to implement different transport layers, perform additional XML processing or other purpose.</p>
		 * @param string $request <p>The XML SOAP request.</p>
		 * @param string $location <p>The URL to request.</p>
		 * @param string $action <p>The SOAP action.</p>
		 * @param int $version <p>The SOAP version.</p>
		 * @param bool $oneWay <p>If <code>one_way</code> is set to 1, this method returns nothing. Use this where a response is not expected.</p>
		 * @return ?string <p>The XML SOAP response.</p>
		 * @link https://php.net/manual/en/soapclient.dorequest.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false): ?string {}

		/**
		 * Get list of cookies
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link https://php.net/manual/en/soapclient.getcookies.php
		 * @since PHP 5 >= 5.4.30, PHP 7, PHP 8
		 */
		public function __getCookies(): array {}

		/**
		 * Returns list of available SOAP functions
		 * <p>Returns an array of functions described in the WSDL for the Web service.</p><p><b>Note</b>:</p><p>This function only works in WSDL mode.</p>
		 * @return ?array <p>The <code>array</code> of SOAP function prototypes, detailing the return type, the function name and parameter types.</p>
		 * @link https://php.net/manual/en/soapclient.getfunctions.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __getFunctions(): ?array {}

		/**
		 * Returns last SOAP request
		 * <p>Returns the XML sent in the last SOAP request.</p><p><b>Note</b>:</p><p>This method works only if the <code>SoapClient</code> object was created with the <code>trace</code> option set to <b><code>true</code></b>.</p>
		 * @return ?string <p>The last SOAP request, as an XML string.</p>
		 * @link https://php.net/manual/en/soapclient.getlastrequest.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __getLastRequest(): ?string {}

		/**
		 * Returns the SOAP headers from the last request
		 * <p>Returns the SOAP headers from the last request.</p><p><b>Note</b>:</p><p>This function only works if the <code>SoapClient</code> object was created with the <code>trace</code> option set to <b><code>true</code></b>.</p>
		 * @return ?string <p>The last SOAP request headers.</p>
		 * @link https://php.net/manual/en/soapclient.getlastrequestheaders.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __getLastRequestHeaders(): ?string {}

		/**
		 * Returns last SOAP response
		 * <p>Returns the XML received in the last SOAP response.</p><p><b>Note</b>:</p><p>This method works only if the <code>SoapClient</code> object was created with the <code>trace</code> option set to <b><code>true</code></b>.</p>
		 * @return ?string <p>The last SOAP response, as an XML string.</p>
		 * @link https://php.net/manual/en/soapclient.getlastresponse.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __getLastResponse(): ?string {}

		/**
		 * Returns the SOAP headers from the last response
		 * <p>Returns the SOAP headers from the last response.</p><p><b>Note</b>:</p><p>This function only works if the <code>SoapClient</code> object was created with the <code>trace</code> option set to <b><code>true</code></b>.</p>
		 * @return ?string <p>The last SOAP response headers.</p>
		 * @link https://php.net/manual/en/soapclient.getlastresponseheaders.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __getLastResponseHeaders(): ?string {}

		/**
		 * Returns a list of SOAP types
		 * <p>Returns an array of types described in the WSDL for the Web service.</p><p><b>Note</b>:</p><p>This function only works in WSDL mode.</p>
		 * @return ?array <p>The <code>array</code> of SOAP types, detailing all structures and types.</p>
		 * @link https://php.net/manual/en/soapclient.gettypes.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __getTypes(): ?array {}

		/**
		 * Defines a cookie for SOAP requests
		 * <p>Defines a cookie to be sent along with the SOAP requests.</p><p><b>Note</b>:</p><p>Calling this method will affect all following calls to <code>SoapClient</code> methods.</p>
		 * @param string $name <p>The name of the cookie.</p>
		 * @param ?string $value <p>The value of the cookie. If not specified, the cookie will be deleted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapclient.setcookie.php
		 * @since PHP 5 >= 5.0.4, PHP 7, PHP 8
		 */
		public function __setCookie(string $name, ?string $value = null): void {}

		/**
		 * Sets the location of the Web service to use
		 * <p>Sets the endpoint URL that will be touched by following SOAP requests. This is equivalent to specifying the <code>location</code> option when constructing the SoapClient.</p><p><b>Note</b>:</p><p>Calling this method is optional. The SoapClient uses the endpoint from the WSDL file by default.</p>
		 * @param ?string $location <p>The new endpoint URL.</p>
		 * @return ?string <p>The old endpoint URL.</p>
		 * @link https://php.net/manual/en/soapclient.setlocation.php
		 * @since PHP 5 >= 5.0.4, PHP 7, PHP 8
		 */
		public function __setLocation(?string $location = null): ?string {}

		/**
		 * Sets SOAP headers for subsequent calls
		 * <p>Defines headers to be sent along with the SOAP requests.</p><p><b>Note</b>:</p><p>Calling this method will replace any previous values.</p>
		 * @param \SoapHeader|array|null $headers <p>The headers to be set. It could be <code>SoapHeader</code> object or array of <code>SoapHeader</code> objects. If not specified or set to <b><code>null</code></b>, the headers will be deleted.</p>
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/soapclient.setsoapheaders.php
		 * @since PHP 5 >= 5.0.5, PHP 7, PHP 8
		 */
		public function __setSoapHeaders(\SoapHeader|array|null $headers = null): bool {}

		/**
		 * Calls a SOAP function
		 * <p>This is a low level API function that is used to make a SOAP call. Usually, in WSDL mode, SOAP functions can be called as methods of the <code>SoapClient</code> object. This method is useful in non-WSDL mode when <code>soapaction</code> is unknown, <code>uri</code> differs from the default or when sending and/or receiving SOAP Headers.</p><p>On error, a call to a SOAP function can cause PHP to throw exceptions or return a <code>SoapFault</code> object if exceptions are disabled. To check if the function call failed to catch the SoapFault exceptions, check the result with <code>is_soap_fault()</code>.</p>
		 * @param string $name <p>The name of the SOAP function to call.</p>
		 * @param array $args <p>An array of the arguments to pass to the function. This can be either an ordered or an associative array. Note that most SOAP servers require parameter names to be provided, in which case this must be an associative array.</p>
		 * @param ?array $options <p>An associative array of options to pass to the client.</p> <p>The <code>location</code> option is the URL of the remote Web service.</p> <p>The <code>uri</code> option is the target namespace of the SOAP service.</p> <p>The <code>soapaction</code> option is the action to call.</p>
		 * @param \SoapHeader|array|null $inputHeaders <p>An array of headers to be sent along with the SOAP request.</p>
		 * @param array $outputHeaders <p>If supplied, this array will be filled with the headers from the SOAP response.</p>
		 * @return mixed <p>SOAP functions may return one, or multiple values. If only one value is returned by the SOAP function, the return value will be a scalar. If multiple values are returned, an associative array of named output parameters is returned instead.</p><p>On error, if the <code>SoapClient</code> object was constructed with the <code>exceptions</code> option set to <b><code>false</code></b>, a <code>SoapFault</code> object will be returned.</p>
		 * @link https://php.net/manual/en/soapclient.soapcall.php
		 * @see is_soap_fault()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __soapCall(string $name, array $args, ?array $options = null, \SoapHeader|array|null $inputHeaders = null, array &$outputHeaders = null): mixed {}
	}

	/**
	 * <p>Represents a SOAP fault.</p>
	 * @link https://php.net/manual/en/class.soapfault.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SoapFault extends \Exception {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.faultstring
		 */
		public $faultstring;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.faultcode
		 */
		public $faultcode = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.faultcodens
		 */
		public $faultcodens = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.faultactor
		 */
		public $faultactor = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.detail
		 */
		public $detail = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.-name
		 */
		public $_name = null;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.soapfault.php#soapfault.props.headerfault
		 */
		public $headerfault = null;

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
		 * SoapFault constructor
		 * <p>This class is used to send SOAP fault responses from the PHP handler. <code>faultcode</code>, <code>faultstring</code>, <code>faultactor</code> and <code>detail</code> are standard elements of a SOAP Fault.</p>
		 * @param array|string|null $code
		 * @param string $string
		 * @param ?string $actor
		 * @param mixed $details
		 * @param ?string $name
		 * @param mixed $headerFault
		 * @return self
		 * @link https://php.net/manual/en/soapfault.construct.php
		 * @see is_soap_fault()
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(array|string|null $code, string $string, ?string $actor = null, mixed $details = null, ?string $name = null, mixed $headerFault = null) {}

		/**
		 * Obtain a string representation of a SoapFault
		 * <p>Returns a string representation of the SoapFault.</p>
		 * @return string <p>A string describing the SoapFault.</p>
		 * @link https://php.net/manual/en/soapfault.tostring.php
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
	 * <p>Represents a SOAP header.</p>
	 * @link https://php.net/manual/en/class.soapheader.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SoapHeader {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.soapheader.php#soapheader.props.namespace
		 */
		public $namespace;

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.soapheader.php#soapheader.props.name
		 */
		public $name;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.soapheader.php#soapheader.props.data
		 */
		public $data = null;

		/**
		 * @var bool
		 * @link https://php.net/manual/en/class.soapheader.php#soapheader.props.mustunderstand
		 */
		public $mustUnderstand;

		/**
		 * @var string|int|null
		 * @link https://php.net/manual/en/class.soapheader.php#soapheader.props.actor
		 */
		public $actor;

		/**
		 * SoapHeader constructor
		 * <p>Constructs a new SoapHeader object.</p>
		 * @param string $namespace <p>The namespace of the SOAP header element.</p>
		 * @param string $name <p>The name of the SoapHeader object.</p>
		 * @param mixed $data <p>A SOAP header's content. It can be a PHP value or a <code>SoapVar</code> object.</p>
		 * @param bool $mustunderstand
		 * @param string $actor <p>Value of the <code>actor</code> attribute of the SOAP header element.</p>
		 * @return self
		 * @link https://php.net/manual/en/soapheader.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(string $namespace, string $name, mixed $data = null, bool $mustunderstand = null, string $actor = null) {}
	}

	/**
	 * <p>Represents parameter to a SOAP call.</p>
	 * @link https://php.net/manual/en/class.soapparam.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SoapParam {

		/**
		 * @var string
		 * @link https://php.net/manual/en/class.soapparam.php#soapparam.props.param-name
		 */
		public $param_name;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.soapparam.php#soapparam.props.param-data
		 */
		public $param_data;

		/**
		 * SoapParam constructor
		 * <p>Constructs a new <code>SoapParam</code> object.</p>
		 * @param mixed $data <p>The data to pass or return. This parameter can be passed directly as PHP value, but in this case it will be named as <code>paramN</code> and the SOAP service may not understand it.</p>
		 * @param string $name <p>The parameter name.</p>
		 * @return self
		 * @link https://php.net/manual/en/soapparam.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(mixed $data, string $name) {}
	}

	/**
	 * <p>The SoapServer class provides a server for the &#xBB;&#xA0;SOAP 1.1 and &#xBB;&#xA0;SOAP 1.2 protocols. It can be used with or without a WSDL service description.</p>
	 * @link https://php.net/manual/en/class.soapserver.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SoapServer {

		/**
		 * @var ?SoapFault
		 * @link https://php.net/manual/en/class.soapserver.php#soapserver.props.--soap-fault
		 */
		private $__soap_fault = null;

		/**
		 * SoapServer constructor
		 * <p>This constructor allows the creation of <code>SoapServer</code> objects in WSDL or non-WSDL mode.</p>
		 * @param ?string $wsdl <p>To use the SoapServer in WSDL mode, pass the URI of a WSDL file. Otherwise, pass <b><code>null</code></b> and set the <code>uri</code> option to the target namespace for the server.</p>
		 * @param array $options <p>Allow setting a default SOAP version (<code>soap_version</code>), internal character encoding (<code>encoding</code>), and actor URI (<code>actor</code>).</p> <p>The <code>classmap</code> option can be used to map some WSDL types to PHP classes. This option must be an array with WSDL types as keys and names of PHP classes as values.</p> <p>The <code>typemap</code> option is an array of type mappings. Type mapping is an array with keys <code>type_name</code>, <code>type_ns</code> (namespace URI), <code>from_xml</code> (callback accepting one string parameter) and <code>to_xml</code> (callback accepting one object parameter).</p> <p>The <code>cache_wsdl</code> option is one of <b><code>WSDL_CACHE_NONE</code></b>, <b><code>WSDL_CACHE_DISK</code></b>, <b><code>WSDL_CACHE_MEMORY</code></b> or <b><code>WSDL_CACHE_BOTH</code></b>.</p> <p>There is also a <code>features</code> option which can be set to <b><code>SOAP_WAIT_ONE_WAY_CALLS</code></b>, <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b>, <b><code>SOAP_USE_XSI_ARRAY_TYPE</code></b>.</p> <p>The <code>send_errors</code> option can be set to <b><code>false</code></b> to sent a generic error message ("Internal error") instead of the specific error message sent otherwise.</p>
		 * @return self
		 * @link https://php.net/manual/en/soapserver.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(?string $wsdl, array $options = []) {}

		/**
		 * Adds one or more functions to handle SOAP requests
		 * <p>Exports one or more functions for remote clients</p>
		 * @param array|string|int $functions <p>To export one function, pass the function name into this parameter as a string.</p> <p>To export several functions, pass an array of function names.</p> <p>To export all the functions, pass a special constant <b><code>SOAP_FUNCTIONS_ALL</code></b>.</p> <p><b>Note</b>:</p><p><code>functions</code> must receive all input arguments in the same order as defined in the WSDL file (They should not receive any output parameters as arguments) and return one or more values. To return several values they must return an array with named output parameters.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.addfunction.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function addFunction(array|string|int $functions): void {}

		/**
		 * Add a SOAP header to the response
		 * <p>Adds a SOAP header to be returned with the response to the current request.</p>
		 * @param \SoapHeader $header <p>The header to be returned.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.addsoapheader.php
		 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
		 */
		public function addSoapHeader(\SoapHeader $header): void {}

		/**
		 * Issue SoapServer fault indicating an error
		 * <p>Sends a response to the client of the current request indicating an error.</p><p><b>Note</b>:</p><p>This can only be called when handling a request.</p>
		 * @param string $code <p>The error code to return</p>
		 * @param string $string <p>A brief description of the error</p>
		 * @param string $actor <p>A string identifying the actor that caused the fault.</p>
		 * @param mixed $details <p>More details of the fault</p>
		 * @param string $name <p>The name of the fault. This can be used to select a name from a WSDL file.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.fault.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = ""): void {}

		/**
		 * Returns list of defined functions
		 * <p>Returns a list of the defined functions in the SoapServer object. This method returns the list of all functions added by <code>SoapServer::addFunction()</code> or <code>SoapServer::setClass()</code>.</p>
		 * @return array <p>An <code>array</code> of the defined functions.</p>
		 * @link https://php.net/manual/en/soapserver.getfunctions.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function getFunctions(): array {}

		/**
		 * Handles a SOAP request
		 * <p>Processes a SOAP request, calls necessary functions, and sends a response back.</p>
		 * @param ?string $request <p>The SOAP request. If this argument is omitted, the request is assumed to be in the raw POST data of the HTTP request.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.handle.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function handle(?string $request = null): void {}

		/**
		 * Sets the class which handles SOAP requests
		 * <p>Exports all methods from specified class.</p><p>The object can be made persistent across request for a given PHP session with the <code>SoapServer::setPersistence()</code> method.</p>
		 * @param string $class <p>The name of the exported class.</p>
		 * @param mixed $args <p>These optional parameters will be passed to the default class constructor during object creation.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.setclass.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function setClass(string $class, mixed ...$args): void {}

		/**
		 * Sets the object which will be used to handle SOAP requests
		 * <p>This sets a specific object as the handler for SOAP requests, rather than just a class as in <code>SoapServer::setClass()</code>.</p>
		 * @param object $object <p>The object to handle the requests.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.setobject.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setObject(object $object): void {}

		/**
		 * Sets SoapServer persistence mode
		 * <p>This function allows changing the persistence state of a SoapServer object between requests. This function allows saving data between requests utilizing PHP sessions. This method only has an affect on a SoapServer after it has exported functions utilizing <code>SoapServer::setClass()</code>.</p><p><b>Note</b>:</p><p>The persistence of <b><code>SOAP_PERSISTENCE_SESSION</code></b> makes only objects of the given class persistent, but not the class static data. In this case, use $this-&gt;bar instead of self::$bar.</p><p><b>Note</b>:</p><p><b><code>SOAP_PERSISTENCE_SESSION</code></b> serializes data on the class object between requests. In order to properly utilize resources (e.g. <code>PDO</code>), __wakeup() and __sleep() magic methods should be utilized.</p>
		 * @param int $mode <p>One of the <code>SOAP_PERSISTENCE_XXX</code> constants.</p> <p><b><code>SOAP_PERSISTENCE_REQUEST</code></b> - SoapServer data does not persist between requests. This is the <i>default</i> behavior of any SoapServer object after setClass is called.</p> <p><b><code>SOAP_PERSISTENCE_SESSION</code></b> - SoapServer data persists between requests. This is accomplished by serializing the SoapServer class data into $_SESSION['_bogus_session_name'], because of this <code>session_start()</code> must be called before this persistence mode is set.</p>
		 * @return void <p>No value is returned.</p>
		 * @link https://php.net/manual/en/soapserver.setpersistence.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function setPersistence(int $mode): void {}
	}

	/**
	 * <p>A class representing a variable or object for use with SOAP services.</p>
	 * @link https://php.net/manual/en/class.soapvar.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	class SoapVar {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.soapvar.php#soapvar.props.enc-type
		 */
		public $enc_type;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.soapvar.php#soapvar.props.enc-value
		 */
		public $enc_value = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapvar.php#soapvar.props.enc-stype
		 */
		public $enc_stype = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapvar.php#soapvar.props.enc-ns
		 */
		public $enc_ns = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapvar.php#soapvar.props.enc-name
		 */
		public $enc_name = null;

		/**
		 * @var ?string
		 * @link https://php.net/manual/en/class.soapvar.php#soapvar.props.enc-namens
		 */
		public $enc_namens = null;

		/**
		 * SoapVar constructor
		 * <p>Constructs a new <code>SoapVar</code> object.</p>
		 * @param mixed $data <p>The data to pass or return.</p>
		 * @param ?int $encoding <p>The encoding ID, one of the <code>XSD_...</code> constants.</p>
		 * @param ?string $typeName
		 * @param ?string $typeNamespace
		 * @param ?string $nodeName
		 * @param ?string $nodeNamespace
		 * @return self
		 * @link https://php.net/manual/en/soapvar.construct.php
		 * @since PHP 5, PHP 7, PHP 8
		 */
		public function __construct(mixed $data, ?int $encoding, ?string $typeName = null, ?string $typeNamespace = null, ?string $nodeName = null, ?string $nodeNamespace = null) {}
	}

	/**
	 * Checks if a SOAP call has failed
	 * <p>This function is useful to check if the SOAP call failed, but without using exceptions. To use it, create a <code>SoapClient</code> object with the <code>exceptions</code> option set to zero or <b><code>false</code></b>. In this case, the SOAP method will return a special <code>SoapFault</code> object which encapsulates the fault details (faultcode, faultstring, faultactor and faultdetails).</p><p>If <code>exceptions</code> is not set then SOAP call will throw an exception on error. <b>is_soap_fault()</b> checks if the given parameter is a <code>SoapFault</code> object.</p>
	 * @param mixed $object <p>The object to test.</p>
	 * @return bool <p>This will return <b><code>true</code></b> on error, and <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.is-soap-fault.php
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function is_soap_fault(mixed $object): bool {}

	/**
	 * Set whether to use the SOAP error handler
	 * <p>This function sets whether or not to use the SOAP error handler in the SOAP server. It will return the previous value. If set to <b><code>true</code></b>, details of errors in a <code>SoapServer</code> application will be sent to the client as a SOAP fault message. If <b><code>false</code></b>, the standard PHP error handler is used. The default is to send error to the client as SOAP fault message.</p>
	 * @param bool $enable <p>Set to <b><code>true</code></b> to send error details to clients.</p>
	 * @return bool <p>Returns the original value.</p>
	 * @link https://php.net/manual/en/function.use-soap-error-handler.php
	 * @see set_error_handler(), set_exception_handler()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function use_soap_error_handler(bool $enable = true): bool {}

	/**
	 * 200
	 */
	define('APACHE_MAP', null);

	/**
	 * Specifies use of SOAP 1.1 when passed as <code>soap_version</code> option to <code>SoapServer::__construct()</code> or <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_1_1', null);

	/**
	 * Specifies use of SOAP 1.2 when passed as <code>soap_version</code> option to <code>SoapServer::__construct()</code> or <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_1_2', null);

	/**
	 * 1
	 */
	define('SOAP_ACTOR_NEXT', null);

	/**
	 * 2
	 */
	define('SOAP_ACTOR_NONE', null);

	/**
	 * 3
	 */
	define('SOAP_ACTOR_UNLIMATERECEIVER', null);

	/**
	 * Specifies use of HTTP Basic Authentication when passed as <code>authentication</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_AUTHENTICATION_BASIC', null);

	/**
	 * Specifies use of HTTP Digest Authentication when passed as <code>authentication</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_AUTHENTICATION_DIGEST', null);

	/**
	 * Specifies use of an "Accept-Encoding" header when passed as part of  the <code>compression</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_COMPRESSION_ACCEPT', null);

	/**
	 * Specifies use of deflate compression when passed as part of  the <code>compression</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_COMPRESSION_DEFLATE', null);

	/**
	 * Specifies use of gzip compression when passed as part of  the <code>compression</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_COMPRESSION_GZIP', null);

	/**
	 * Specifies use of document binding when passed as <code>style</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_DOCUMENT', null);

	/**
	 * 300
	 */
	define('SOAP_ENC_ARRAY', null);

	/**
	 * 301
	 */
	define('SOAP_ENC_OBJECT', null);

	/**
	 * Specifies use of SOAP Encoding when passed as <code>use</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_ENCODED', null);

	/**
	 * 999
	 */
	define('SOAP_FUNCTIONS_ALL', null);

	/**
	 * Specifies use of service-specific encoding when passed as <code>use</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_LITERAL', null);

	/**
	 * 2
	 */
	define('SOAP_PERSISTENCE_REQUEST', null);

	/**
	 * 1
	 */
	define('SOAP_PERSISTENCE_SESSION', null);

	/**
	 * Specifies use of RPC-style binding when passed as <code>style</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_RPC', null);

	/**
	 * Used with the  <code>features</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_SINGLE_ELEMENT_ARRAYS', null);

	/**
	 * Used with the deprecated  <code>ssl_method</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_SSL_METHOD_SSLv2', null);

	/**
	 * Used with the deprecated  <code>ssl_method</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_SSL_METHOD_SSLv23', null);

	/**
	 * Used with the deprecated  <code>ssl_method</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_SSL_METHOD_SSLv3', null);

	/**
	 * Used with the deprecated  <code>ssl_method</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_SSL_METHOD_TLS', null);

	/**
	 * Used with the  <code>features</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_USE_XSI_ARRAY_TYPE', null);

	/**
	 * Used with the  <code>features</code> option to <code>SoapClient::__construct()</code>.
	 */
	define('SOAP_WAIT_ONE_WAY_CALLS', null);

	/**
	 * 999998
	 */
	define('UNKNOWN_TYPE', null);

	/**
	 * Specifies use of both on-disk and in-memory WSDL caches when used in the soap.wsdl_cache configuration option or the <code>wsdl_cache</code> option to <code>SoapClient::__construct()</code> and <code>SoapServer::__construct()</code>.
	 */
	define('WSDL_CACHE_BOTH', null);

	/**
	 * Specifies use of the on-disk WSDL cache only when used in the soap.wsdl_cache configuration option or the <code>wsdl_cache</code> option to <code>SoapClient::__construct()</code> and <code>SoapServer::__construct()</code>.
	 */
	define('WSDL_CACHE_DISK', null);

	/**
	 * Specifies use of the in-memory WSDL cache only when used in the soap.wsdl_cache configuration option or the <code>wsdl_cache</code> option to <code>SoapClient::__construct()</code> and <code>SoapServer::__construct()</code>.
	 */
	define('WSDL_CACHE_MEMORY', null);

	/**
	 * Disables the WSDL cache when used in the soap.wsdl_cache configuration option or the <code>wsdl_cache</code> option to <code>SoapClient::__construct()</code> and <code>SoapServer::__construct()</code>.
	 */
	define('WSDL_CACHE_NONE', null);

	/**
	 * http://www.w3.org/1999/XMLSchema
	 */
	define('XSD_1999_NAMESPACE', null);

	/**
	 * 401
	 */
	define('XSD_1999_TIMEINSTANT', null);

	/**
	 * 145
	 */
	define('XSD_ANYTYPE', null);

	/**
	 * 117
	 */
	define('XSD_ANYURI', null);

	/**
	 * 147
	 */
	define('XSD_ANYXML', null);

	/**
	 * 116
	 */
	define('XSD_BASE64BINARY', null);

	/**
	 * 102
	 */
	define('XSD_BOOLEAN', null);

	/**
	 * 137
	 */
	define('XSD_BYTE', null);

	/**
	 * 109
	 */
	define('XSD_DATE', null);

	/**
	 * 107
	 */
	define('XSD_DATETIME', null);

	/**
	 * 103
	 */
	define('XSD_DECIMAL', null);

	/**
	 * 105
	 */
	define('XSD_DOUBLE', null);

	/**
	 * 106
	 */
	define('XSD_DURATION', null);

	/**
	 * 130
	 */
	define('XSD_ENTITIES', null);

	/**
	 * 129
	 */
	define('XSD_ENTITY', null);

	/**
	 * 104
	 */
	define('XSD_FLOAT', null);

	/**
	 * 113
	 */
	define('XSD_GDAY', null);

	/**
	 * 114
	 */
	define('XSD_GMONTH', null);

	/**
	 * 112
	 */
	define('XSD_GMONTHDAY', null);

	/**
	 * 111
	 */
	define('XSD_GYEAR', null);

	/**
	 * 110
	 */
	define('XSD_GYEARMONTH', null);

	/**
	 * 115
	 */
	define('XSD_HEXBINARY', null);

	/**
	 * 126
	 */
	define('XSD_ID', null);

	/**
	 * 127
	 */
	define('XSD_IDREF', null);

	/**
	 * 128
	 */
	define('XSD_IDREFS', null);

	/**
	 * 135
	 */
	define('XSD_INT', null);

	/**
	 * 131
	 */
	define('XSD_INTEGER', null);

	/**
	 * 122
	 */
	define('XSD_LANGUAGE', null);

	/**
	 * 134
	 */
	define('XSD_LONG', null);

	/**
	 * 124
	 */
	define('XSD_NAME', null);

	/**
	 * http://www.w3.org/2001/XMLSchema
	 */
	define('XSD_NAMESPACE', null);

	/**
	 * 125
	 */
	define('XSD_NCNAME', null);

	/**
	 * 133
	 */
	define('XSD_NEGATIVEINTEGER', null);

	/**
	 * 123
	 */
	define('XSD_NMTOKEN', null);

	/**
	 * 144
	 */
	define('XSD_NMTOKENS', null);

	/**
	 * 138
	 */
	define('XSD_NONNEGATIVEINTEGER', null);

	/**
	 * 132
	 */
	define('XSD_NONPOSITIVEINTEGER', null);

	/**
	 * 120
	 */
	define('XSD_NORMALIZEDSTRING', null);

	/**
	 * 119
	 */
	define('XSD_NOTATION', null);

	/**
	 * 143
	 */
	define('XSD_POSITIVEINTEGER', null);

	/**
	 * 118
	 */
	define('XSD_QNAME', null);

	/**
	 * 136
	 */
	define('XSD_SHORT', null);

	/**
	 * 101
	 */
	define('XSD_STRING', null);

	/**
	 * 108
	 */
	define('XSD_TIME', null);

	/**
	 * 121
	 */
	define('XSD_TOKEN', null);

	/**
	 * 142
	 */
	define('XSD_UNSIGNEDBYTE', null);

	/**
	 * 140
	 */
	define('XSD_UNSIGNEDINT', null);

	/**
	 * 139
	 */
	define('XSD_UNSIGNEDLONG', null);

	/**
	 * 141
	 */
	define('XSD_UNSIGNEDSHORT', null);

}
