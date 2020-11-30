<?php



namespace {

	/**
	 * <p>The SoapClient class provides a client for SOAP 1.1, SOAP 1.2 servers. It can be used in WSDL or non-WSDL mode.</p>
	 * @link http://php.net/manual/en/class.soapclient.php
	 * @since PHP 5, PHP 7
	 */
	class SoapClient {

		/**
		 * SoapClient constructor
		 * <p>This constructor creates SoapClient objects in <i>WSDL</i> or <i>non-WSDL</i> mode.</p>
		 * @param mixed $wsdl <p>URI of the <i>WSDL</i> file or <b><code>NULL</code></b> if working in <i>non-WSDL</i> mode.</p> <p><b>Note</b>:</p><p>During development, WSDL caching may be disabled by the use of the <i>soap.wsdl_cache_ttl</i> php.ini setting otherwise changes made to the WSDL file will have no effect until <i>soap.wsdl_cache_ttl</i> is expired.</p>
		 * @param array $options <p>An array of options. If working in WSDL mode, this parameter is optional. If working in non-WSDL mode, the <i>location</i> and <i>uri</i> options must be set, where <i>location</i> is the URL of the SOAP server to send the request to, and <i>uri</i> is the target namespace of the SOAP service.</p> <p>The <i>style</i> and <i>use</i> options only work in non-WSDL mode. In WSDL mode, they come from the WSDL file.</p> <p>The <i>soap_version</i> option should be one of either <b><code>SOAP_1_1</code></b> or <b><code>SOAP_1_2</code></b> to select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.</p> <p>For HTTP authentication, the <i>login</i> and <i>password</i> options can be used to supply credentials. For making an HTTP connection through a proxy server, the options <i>proxy_host</i>, <i>proxy_port</i>, <i>proxy_login</i> and <i>proxy_password</i> are also available. For HTTPS client certificate authentication use <i>local_cert</i> and <i>passphrase</i> options. An authentication may be supplied in the <i>authentication</i> option. The authentication method may be either <b><code>SOAP_AUTHENTICATION_BASIC</code></b> (default) or <b><code>SOAP_AUTHENTICATION_DIGEST</code></b>.</p> <p>The <i>compression</i> option allows to use compression of HTTP SOAP requests and responses.</p> <p>The <i>encoding</i> option defines internal character encoding. This option does not change the encoding of SOAP requests (it is always utf-8), but converts strings into it.</p> <p>The <i>trace</i> option enables tracing of request so faults can be backtraced. This defaults to <b><code>FALSE</code></b></p> <p>The <i>classmap</i> option can be used to map some WSDL types to PHP classes. This option must be an array with WSDL types as keys and names of PHP classes as values.</p> <p>Setting the boolean <i>trace</i> option enables use of the methods  SoapClient-&gt;__getLastRequest,  SoapClient-&gt;__getLastRequestHeaders,  SoapClient-&gt;__getLastResponse and  SoapClient-&gt;__getLastResponseHeaders.</p> <p>The <i>exceptions</i> option is a boolean value defining whether soap errors throw exceptions of type  SoapFault.</p> <p>The <i>connection_timeout</i> option defines a timeout in seconds for the connection to the SOAP service. This option does not define a timeout for services with slow responses. To limit the time to wait for calls to finish the default_socket_timeout setting is available.</p> <p>The <i>typemap</i> option is an array of type mappings. Type mapping is an array with keys <i>type_name</i>, <i>type_ns</i> (namespace URI), <i>from_xml</i> (callback accepting one string parameter) and <i>to_xml</i> (callback accepting one object parameter).</p> <p>The <i>cache_wsdl</i> option is one of <b><code>WSDL_CACHE_NONE</code></b>, <b><code>WSDL_CACHE_DISK</code></b>, <b><code>WSDL_CACHE_MEMORY</code></b> or <b><code>WSDL_CACHE_BOTH</code></b>.</p> <p>The <i>user_agent</i> option specifies string to use in <i>User-Agent</i> header.</p> <p>The <i>stream_context</i> option is a <code>resource</code> for context.</p> <p>The <i>features</i> option is a bitmask of <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b>, <b><code>SOAP_USE_XSI_ARRAY_TYPE</code></b>, <b><code>SOAP_WAIT_ONE_WAY_CALLS</code></b>.</p> <p>The <i>keep_alive</i> option is a boolean value defining whether to send the <i>Connection: Keep-Alive</i> header or <i>Connection: close</i>.</p> <p>The <i>ssl_method</i> option is one of <b><code>SOAP_SSL_METHOD_TLS</code></b>, <b><code>SOAP_SSL_METHOD_SSLv2</code></b>, <b><code>SOAP_SSL_METHOD_SSLv3</code></b> or <b><code>SOAP_SSL_METHOD_SSLv23</code></b>.</p>
		 * @return self
		 * @link http://php.net/manual/en/soapclient.soapclient.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapClient($wsdl, array $options = NULL) {}

		/**
		 * Calls a SOAP function (deprecated)
		 * <p>Calling this method directly is deprecated. Usually, SOAP functions can be called as methods of the SoapClient object; in situations where this is not possible or additional options are needed, use <code>SoapClient::__soapCall()</code>.</p>
		 * @param string $function_name
		 * @param array $arguments
		 * @return mixed
		 * @link http://php.net/manual/en/soapclient.call.php
		 * @since PHP 5, PHP 7
		 */
		public function __call(string $function_name, array $arguments) {}

		/**
		 * SoapClient constructor
		 * <p>This function is an alias of: <code>SoapClient::SoapClient()</code></p>
		 * @link http://php.net/manual/en/soapclient.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}

		/**
		 * Performs a SOAP request
		 * <p>Performs SOAP request over HTTP.</p><p>This method can be overridden in subclasses to implement different transport layers, perform additional XML processing or other purpose.</p>
		 * @param string $request <p>The XML SOAP request.</p>
		 * @param string $location <p>The URL to request.</p>
		 * @param string $action <p>The SOAP action.</p>
		 * @param int $version <p>The SOAP version.</p>
		 * @param int $one_way <p>If <i>one_way</i> is set to 1, this method returns nothing. Use this where a response is not expected.</p>
		 * @return string <p>The XML SOAP response.</p>
		 * @link http://php.net/manual/en/soapclient.dorequest.php
		 * @since PHP 5, PHP 7
		 */
		public function __doRequest(string $request, string $location, string $action, int $version, int $one_way = 0): string {}

		/**
		 * Get list of cookies
		 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
		 * @return array
		 * @link http://php.net/manual/en/soapclient.getcookies.php
		 * @since PHP 5 >= 5.4.30, PHP 7
		 */
		public function __getCookies(): array {}

		/**
		 * Returns list of available SOAP functions
		 * <p>Returns an array of functions described in the WSDL for the Web service.</p><p><b>Note</b>:</p><p>This function only works in WSDL mode.</p>
		 * @return array <p>The <code>array</code> of SOAP function prototypes, detailing the return type, the function name and type-hinted parameters.</p>
		 * @link http://php.net/manual/en/soapclient.getfunctions.php
		 * @since PHP 5, PHP 7
		 */
		public function __getFunctions(): array {}

		/**
		 * Returns last SOAP request
		 * <p>Returns the XML sent in the last SOAP request.</p><p><b>Note</b>:</p><p>This method works only if the SoapClient object was created with the <i>trace</i> option set to <b><code>TRUE</code></b>.</p>
		 * @return string <p>The last SOAP request, as an XML string.</p>
		 * @link http://php.net/manual/en/soapclient.getlastrequest.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastRequest(): string {}

		/**
		 * Returns the SOAP headers from the last request
		 * <p>Returns the SOAP headers from the last request.</p><p><b>Note</b>:</p><p>This function only works if the SoapClient object was created with the <i>trace</i> option set to <b><code>TRUE</code></b>.</p>
		 * @return string <p>The last SOAP request headers.</p>
		 * @link http://php.net/manual/en/soapclient.getlastrequestheaders.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastRequestHeaders(): string {}

		/**
		 * Returns last SOAP response
		 * <p>Returns the XML received in the last SOAP response.</p><p><b>Note</b>:</p><p>This method works only if the SoapClient object was created with the <i>trace</i> option set to <b><code>TRUE</code></b>.</p>
		 * @return string <p>The last SOAP response, as an XML string.</p>
		 * @link http://php.net/manual/en/soapclient.getlastresponse.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastResponse(): string {}

		/**
		 * Returns the SOAP headers from the last response
		 * <p>Returns the SOAP headers from the last response.</p><p><b>Note</b>:</p><p>This function only works if the SoapClient object was created with the <i>trace</i> option set to <b><code>TRUE</code></b>.</p>
		 * @return string <p>The last SOAP response headers.</p>
		 * @link http://php.net/manual/en/soapclient.getlastresponseheaders.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastResponseHeaders(): string {}

		/**
		 * Returns a list of SOAP types
		 * <p>Returns an array of types described in the WSDL for the Web service.</p><p><b>Note</b>:</p><p>This function only works in WSDL mode.</p>
		 * @return array <p>The <code>array</code> of SOAP types, detailing all structures and types.</p>
		 * @link http://php.net/manual/en/soapclient.gettypes.php
		 * @since PHP 5, PHP 7
		 */
		public function __getTypes(): array {}

		/**
		 * The __setCookie purpose
		 * <p>Defines a cookie to be sent along with the SOAP requests.</p><p><b>Note</b>:</p><p>Calling this method will affect all following calls to SoapClient methods.</p>
		 * @param string $name <p>The name of the cookie.</p>
		 * @param string $value <p>The value of the cookie. If not specified, the cookie will be deleted.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapclient.setcookie.php
		 * @since PHP 5 >= 5.0.4, PHP 7
		 */
		public function __setCookie(string $name, string $value = NULL): void {}

		/**
		 * Sets the location of the Web service to use
		 * <p>Sets the endpoint URL that will be touched by following SOAP requests. This is equivalent to specifying the <i>location</i> option when constructing the SoapClient.</p><p><b>Note</b>:</p><p>Calling this method is optional. The SoapClient uses the endpoint from the WSDL file by default.</p>
		 * @param string $new_location <p>The new endpoint URL.</p>
		 * @return string <p>The old endpoint URL.</p>
		 * @link http://php.net/manual/en/soapclient.setlocation.php
		 * @since PHP 5 >= 5.0.4, PHP 7
		 */
		public function __setLocation(string $new_location = NULL): string {}

		/**
		 * Sets SOAP headers for subsequent calls
		 * <p>Defines headers to be sent along with the SOAP requests.</p><p><b>Note</b>:</p><p>Calling this method will replace any previous values.</p>
		 * @param mixed $soapheaders <p>The headers to be set. It could be SoapHeader object or array of SoapHeader objects. If not specified or set to <b><code>NULL</code></b>, the headers will be deleted.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/soapclient.setsoapheaders.php
		 * @since PHP 5 >= 5.0.5, PHP 7
		 */
		public function __setSoapHeaders($soapheaders = NULL): bool {}

		/**
		 * Calls a SOAP function
		 * <p>This is a low level API function that is used to make a SOAP call. Usually, in WSDL mode, SOAP functions can be called as methods of the SoapClient object. This method is useful in non-WSDL mode when <i>soapaction</i> is unknown, <i>uri</i> differs from the default or when sending and/or receiving SOAP Headers.</p><p>On error, a call to a SOAP function can cause PHP to throw exceptions or return a SoapFault object if exceptions are disabled. To check if the function call failed to catch the SoapFault exceptions, check the result with <code>is_soap_fault()</code>.</p>
		 * @param string $function_name <p>The name of the SOAP function to call.</p>
		 * @param array $arguments <p>An array of the arguments to pass to the function. This can be either an ordered or an associative array. Note that most SOAP servers require parameter names to be provided, in which case this must be an associative array.</p>
		 * @param array $options <p>An associative array of options to pass to the client.</p> <p>The <i>location</i> option is the URL of the remote Web service.</p> <p>The <i>uri</i> option is the target namespace of the SOAP service.</p> <p>The <i>soapaction</i> option is the action to call.</p>
		 * @param mixed $input_headers <p>An array of headers to be sent along with the SOAP request.</p>
		 * @param array $output_headers <p>If supplied, this array will be filled with the headers from the SOAP response.</p>
		 * @return mixed <p>SOAP functions may return one, or multiple values. If only one value is returned by the SOAP function, the return value of <i>__soapCall</i> will be a simple value (e.g. an integer, a string, etc). If multiple values are returned, <i>__soapCall</i> will return an associative array of named output parameters.</p><p>On error, if the SoapClient object was constructed with the <i>exceptions</i> option set to <b><code>FALSE</code></b>, a SoapFault object will be returned.</p>
		 * @link http://php.net/manual/en/soapclient.soapcall.php
		 * @see is_soap_fault()
		 * @since PHP 5, PHP 7
		 */
		public function __soapCall(string $function_name, array $arguments, array $options = NULL, $input_headers = NULL, array &$output_headers = NULL) {}
	}

	/**
	 * <p>Represents a SOAP fault.</p>
	 * @link http://php.net/manual/en/class.soapfault.php
	 * @since PHP 5, PHP 7
	 */
	class SoapFault extends \Exception {

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
		 * SoapFault constructor
		 * <p>This class is used to send SOAP fault responses from the PHP handler. <code>faultcode</code>, <code>faultstring</code>, <code>faultactor</code> and <code>detail</code> are standard elements of a SOAP Fault.</p>
		 * @param string $faultcode <p>The error code of the SoapFault.</p>
		 * @param string $faultstring <p>The error message of the SoapFault.</p>
		 * @param string $faultactor <p>A string identifying the actor that caused the error.</p>
		 * @param string $detail <p>More details about the cause of the error.</p>
		 * @param string $faultname <p>Can be used to select the proper fault encoding from WSDL.</p>
		 * @param string $headerfault <p>Can be used during SOAP header handling to report an error in the response header.</p>
		 * @return self
		 * @link http://php.net/manual/en/soapfault.soapfault.php
		 * @see is_soap_fault()
		 * @since PHP 5, PHP 7
		 */
		public function SoapFault(string $faultcode, string $faultstring, string $faultactor = NULL, string $detail = NULL, string $faultname = NULL, string $headerfault = NULL) {}

		/**
		 * Clone the exception
		 * <p>Tries to clone the Exception, which results in Fatal error.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * SoapFault constructor
		 * <p>This function is an alias of: <code>SoapFault::SoapFault()</code></p>
		 * @link http://php.net/manual/en/soapfault.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}

		/**
		 * Obtain a string representation of a SoapFault
		 * <p>Returns a string representation of the SoapFault.</p>
		 * @return string <p>A string describing the SoapFault.</p>
		 * @link http://php.net/manual/en/soapfault.tostring.php
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

	/**
	 * <p>Represents a SOAP header.</p>
	 * @link http://php.net/manual/en/class.soapheader.php
	 * @since PHP 5, PHP 7
	 */
	class SoapHeader {

		/**
		 * SoapHeader constructor
		 * <p>Constructs a new SoapHeader object.</p>
		 * @param string $namespace <p>The namespace of the SOAP header element.</p>
		 * @param string $name <p>The name of the SoapHeader object.</p>
		 * @param mixed $data <p>A SOAP header's content. It can be a PHP value or a SoapVar object.</p>
		 * @param bool $mustunderstand
		 * @param string $actor <p>Value of the <i>actor</i> attribute of the SOAP header element.</p>
		 * @return self
		 * @link http://php.net/manual/en/soapheader.soapheader.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapHeader(string $namespace, string $name, $data = NULL, bool $mustunderstand = FALSE, string $actor = NULL) {}

		/**
		 * SoapHeader constructor
		 * <p>This function is an alias of: <code>SoapHeader::SoapHeader()</code></p>
		 * @link http://php.net/manual/en/soapheader.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}
	}

	/**
	 * <p>Represents parameter to a SOAP call.</p>
	 * @link http://php.net/manual/en/class.soapparam.php
	 * @since PHP 5, PHP 7
	 */
	class SoapParam {

		/**
		 * SoapParam constructor
		 * <p>Constructs a new SoapParam object.</p>
		 * @param mixed $data <p>The data to pass or return. This parameter can be passed directly as PHP value, but in this case it will be named as <i>paramN</i> and the SOAP service may not understand it.</p>
		 * @param string $name <p>The parameter name.</p>
		 * @return self
		 * @link http://php.net/manual/en/soapparam.soapparam.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapParam($data, string $name) {}

		/**
		 * SoapParam constructor
		 * <p>This function is an alias of: <code>SoapParam::SoapParam()</code></p>
		 * @link http://php.net/manual/en/soapparam.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}
	}

	/**
	 * <p>The SoapServer class provides a server for the SOAP 1.1 and SOAP 1.2 protocols. It can be used with or without a WSDL service description.</p>
	 * @link http://php.net/manual/en/class.soapserver.php
	 * @since PHP 5, PHP 7
	 */
	class SoapServer {

		/**
		 * SoapServer constructor
		 * <p>This constructor allows the creation of SoapServer objects in WSDL or non-WSDL mode.</p>
		 * @param mixed $wsdl <p>To use the SoapServer in WSDL mode, pass the URI of a WSDL file. Otherwise, pass <b><code>NULL</code></b> and set the <i>uri</i> option to the target namespace for the server.</p>
		 * @param array $options <p>Allow setting a default SOAP version (<i>soap_version</i>), internal character encoding (<i>encoding</i>), and actor URI (<i>actor</i>).</p> <p>The <i>classmap</i> option can be used to map some WSDL types to PHP classes. This option must be an array with WSDL types as keys and names of PHP classes as values.</p> <p>The <i>typemap</i> option is an array of type mappings. Type mapping is an array with keys <i>type_name</i>, <i>type_ns</i> (namespace URI), <i>from_xml</i> (callback accepting one string parameter) and <i>to_xml</i> (callback accepting one object parameter).</p> <p>The <i>cache_wsdl</i> option is one of <b><code>WSDL_CACHE_NONE</code></b>, <b><code>WSDL_CACHE_DISK</code></b>, <b><code>WSDL_CACHE_MEMORY</code></b> or <b><code>WSDL_CACHE_BOTH</code></b>.</p> <p>There is also a <i>features</i> option which can be set to <b><code>SOAP_WAIT_ONE_WAY_CALLS</code></b>, <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b>, <b><code>SOAP_USE_XSI_ARRAY_TYPE</code></b>.</p> <p>The <i>send_errors</i> option can be set to <b><code>FALSE</code></b> to sent a generic error message ("Internal error") instead of the specific error message sent otherwise.</p>
		 * @return self
		 * @link http://php.net/manual/en/soapserver.soapserver.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapServer($wsdl, array $options = NULL) {}

		/**
		 * SoapServer constructor
		 * <p>This function is an alias of: <code>SoapServer::SoapServer()</code></p>
		 * @link http://php.net/manual/en/soapserver.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}

		/**
		 * Adds one or more functions to handle SOAP requests
		 * <p>Exports one or more functions for remote clients</p>
		 * @param mixed $functions <p>To export one function, pass the function name into this parameter as a string.</p> <p>To export several functions, pass an array of function names.</p> <p>To export all the functions, pass a special constant <b><code>SOAP_FUNCTIONS_ALL</code></b>.</p> <p><b>Note</b>:</p><p><code>functions</code> must receive all input arguments in the same order as defined in the WSDL file (They should not receive any output parameters as arguments) and return one or more values. To return several values they must return an array with named output parameters.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.addfunction.php
		 * @since PHP 5, PHP 7
		 */
		public function addFunction($functions): void {}

		/**
		 * Add a SOAP header to the response
		 * <p>Adds a SOAP header to be returned with the response to the current request.</p>
		 * @param \SoapHeader $object <p>The header to be returned.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.addsoapheader.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function addSoapHeader(\SoapHeader $object): void {}

		/**
		 * Issue SoapServer fault indicating an error
		 * <p>Sends a response to the client of the current request indicating an error.</p><p><b>Note</b>:</p><p>This can only be called when handling a request.</p>
		 * @param string $code <p>The error code to return</p>
		 * @param string $string <p>A brief description of the error</p>
		 * @param string $actor <p>A string identifying the actor that caused the fault.</p>
		 * @param string $details <p>More details of the fault</p>
		 * @param string $name <p>The name of the fault. This can be used to select a name from a WSDL file.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.fault.php
		 * @since PHP 5, PHP 7
		 */
		public function fault(string $code, string $string, string $actor = NULL, string $details = NULL, string $name = NULL): void {}

		/**
		 * Returns list of defined functions
		 * <p>Returns a list of the defined functions in the SoapServer object. This method returns the list of all functions added by <code>SoapServer::addFunction()</code> or <code>SoapServer::setClass()</code>.</p>
		 * @return array <p>An <i>array</i> of the defined functions.</p>
		 * @link http://php.net/manual/en/soapserver.getfunctions.php
		 * @since PHP 5, PHP 7
		 */
		public function getFunctions(): array {}

		/**
		 * Handles a SOAP request
		 * <p>Processes a SOAP request, calls necessary functions, and sends a response back.</p>
		 * @param string $soap_request <p>The SOAP request. If this argument is omitted, the request is assumed to be in the raw POST data of the HTTP request.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.handle.php
		 * @since PHP 5, PHP 7
		 */
		public function handle(string $soap_request = NULL): void {}

		/**
		 * Sets the class which handles SOAP requests
		 * <p>Exports all methods from specified class.</p><p>The object can be made persistent across request for a given PHP session with the <code>SoapServer::setPersistence()</code> method.</p>
		 * @param string $class_name <p>The name of the exported class.</p>
		 * @param mixed $args <p>These optional parameters will be passed to the default class constructor during object creation.</p>
		 * @param mixed $_
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.setclass.php
		 * @since PHP 5, PHP 7
		 */
		public function setClass(string $class_name, $args = NULL, $_ = NULL): void {}

		/**
		 * Sets the object which will be used to handle SOAP requests
		 * <p>This sets a specific object as the handler for SOAP requests, rather than just a class as in <code>SoapServer::setClass()</code>.</p>
		 * @param object $object <p>The object to handle the requests.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.setobject.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setObject(object $object): void {}

		/**
		 * Sets SoapServer persistence mode
		 * <p>This function allows changing the persistence state of a SoapServer object between requests. This function allows saving data between requests utilizing PHP sessions. This method only has an affect on a SoapServer after it has exported functions utilizing <code>SoapServer::setClass()</code>.</p><p><b>Note</b>:</p><p>The persistence of <b><code>SOAP_PERSISTENCE_SESSION</code></b> makes only objects of the given class persistent, but not the class static data. In this case, use $this-&gt;bar instead of self::$bar.</p><p><b>Note</b>:</p><p><b><code>SOAP_PERSISTENCE_SESSION</code></b> serializes data on the class object between requests. In order to properly utilize resources (e.g. PDO), __wakeup() and __sleep() magic methods should be utilized.</p>
		 * @param int $mode <p>One of the <i>SOAP_PERSISTENCE_XXX</i> constants.</p> <p><b><code>SOAP_PERSISTENCE_REQUEST</code></b> - SoapServer data does not persist between requests. This is the <i>default</i> behavior of any SoapServer object after setClass is called.</p> <p><b><code>SOAP_PERSISTENCE_SESSION</code></b> - SoapServer data persists between requests. This is accomplished by serializing the SoapServer class data into $_SESSION['_bogus_session_name'], because of this <code>session_start()</code> must be called before this persistence mode is set.</p>
		 * @return void <p>No value is returned.</p>
		 * @link http://php.net/manual/en/soapserver.setpersistence.php
		 * @since PHP 5, PHP 7
		 */
		public function setPersistence(int $mode): void {}
	}

	/**
	 * <p>A class representing a variable or object for use with SOAP services.</p>
	 * @link http://php.net/manual/en/class.soapvar.php
	 * @since PHP 5, PHP 7
	 */
	class SoapVar {

		/**
		 * SoapVar constructor
		 * <p>Constructs a new SoapVar object.</p>
		 * @param mixed $data <p>The data to pass or return.</p>
		 * @param string $encoding <p>The encoding ID, one of the <i>XSD_...</i> constants.</p>
		 * @param string $type_name <p>The type name.</p>
		 * @param string $type_namespace <p>The type namespace.</p>
		 * @param string $node_name <p>The XML node name.</p>
		 * @param string $node_namespace <p>The XML node namespace.</p>
		 * @return self
		 * @link http://php.net/manual/en/soapvar.soapvar.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapVar($data, string $encoding, string $type_name = NULL, string $type_namespace = NULL, string $node_name = NULL, string $node_namespace = NULL) {}

		/**
		 * SoapVar constructor
		 * <p>This function is an alias of: <code>SoapVar::SoapVar()</code></p>
		 * @link http://php.net/manual/en/soapvar.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}
	}

	/**
	 * Checks if a SOAP call has failed
	 * <p>This function is useful to check if the SOAP call failed, but without using exceptions. To use it, create a SoapClient object with the <i>exceptions</i> option set to zero or <b><code>FALSE</code></b>. In this case, the SOAP method will return a special SoapFault object which encapsulates the fault details (faultcode, faultstring, faultactor and faultdetails).</p><p>If <i>exceptions</i> is not set then SOAP call will throw an exception on error. <b>is_soap_fault()</b> checks if the given parameter is a SoapFault object.</p>
	 * @param mixed $object <p>The object to test.</p>
	 * @return bool <p>This will return <b><code>TRUE</code></b> on error, and <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.is-soap-fault.php
	 * @since PHP 5, PHP 7
	 */
	function is_soap_fault($object): bool {}

	/**
	 * Set whether to use the SOAP error handler
	 * <p>This function sets whether or not to use the SOAP error handler in the SOAP server. It will return the previous value. If set to <b><code>TRUE</code></b>, details of errors in a SoapServer application will be sent to the client as a SOAP fault message. If <b><code>FALSE</code></b>, the standard PHP error handler is used. The default is to send error to the client as SOAP fault message.</p>
	 * @param bool $handler <p>Set to <b><code>TRUE</code></b> to send error details to clients.</p>
	 * @return bool <p>Returns the original value.</p>
	 * @link http://php.net/manual/en/function.use-soap-error-handler.php
	 * @see set_error_handler(), set_exception_handler()
	 * @since PHP 5, PHP 7
	 */
	function use_soap_error_handler(bool $handler = TRUE): bool {}

	/**
	 * 200
	 */
	define('APACHE_MAP', 200);

	/**
	 * 1
	 */
	define('SOAP_1_1', 1);

	/**
	 * 2
	 */
	define('SOAP_1_2', 2);

	/**
	 * 1
	 */
	define('SOAP_ACTOR_NEXT', 1);

	/**
	 * 2
	 */
	define('SOAP_ACTOR_NONE', 2);

	/**
	 * 3
	 */
	define('SOAP_ACTOR_UNLIMATERECEIVER', 3);

	define('SOAP_AUTHENTICATION_BASIC', 0);

	/**
	 * 1
	 */
	define('SOAP_AUTHENTICATION_DIGEST', 1);

	/**
	 * 32
	 */
	define('SOAP_COMPRESSION_ACCEPT', 32);

	/**
	 * 16
	 */
	define('SOAP_COMPRESSION_DEFLATE', 16);

	define('SOAP_COMPRESSION_GZIP', 0);

	/**
	 * 2
	 */
	define('SOAP_DOCUMENT', 2);

	/**
	 * 300
	 */
	define('SOAP_ENC_ARRAY', 300);

	/**
	 * 301
	 */
	define('SOAP_ENC_OBJECT', 301);

	/**
	 * 1
	 */
	define('SOAP_ENCODED', 1);

	/**
	 * 999
	 */
	define('SOAP_FUNCTIONS_ALL', 999);

	/**
	 * 2
	 */
	define('SOAP_LITERAL', 2);

	/**
	 * 2
	 */
	define('SOAP_PERSISTENCE_REQUEST', 2);

	/**
	 * 1
	 */
	define('SOAP_PERSISTENCE_SESSION', 1);

	/**
	 * 1
	 */
	define('SOAP_RPC', 1);

	/**
	 * 1
	 */
	define('SOAP_SINGLE_ELEMENT_ARRAYS', 1);

	/**
	 * Since PHP 5.5.0.
	 */
	define('SOAP_SSL_METHOD_SSLv2', 1);

	/**
	 * Since PHP 5.5.0.
	 */
	define('SOAP_SSL_METHOD_SSLv23', 3);

	/**
	 * Since PHP 5.5.0.
	 */
	define('SOAP_SSL_METHOD_SSLv3', 2);

	/**
	 * Since PHP 5.5.0.
	 */
	define('SOAP_SSL_METHOD_TLS', 0);

	/**
	 * 4
	 */
	define('SOAP_USE_XSI_ARRAY_TYPE', 4);

	/**
	 * 2
	 */
	define('SOAP_WAIT_ONE_WAY_CALLS', 2);

	/**
	 * 999998
	 */
	define('UNKNOWN_TYPE', 999998);

	/**
	 * 3
	 */
	define('WSDL_CACHE_BOTH', 3);

	/**
	 * 1
	 */
	define('WSDL_CACHE_DISK', 1);

	/**
	 * 2
	 */
	define('WSDL_CACHE_MEMORY', 2);

	define('WSDL_CACHE_NONE', 0);

	/**
	 * http://www.w3.org/1999/XMLSchema
	 */
	define('XSD_1999_NAMESPACE', 'http://www.w3.org/1999/XMLSchema');

	/**
	 * 401
	 */
	define('XSD_1999_TIMEINSTANT', 401);

	/**
	 * 145
	 */
	define('XSD_ANYTYPE', 145);

	/**
	 * 117
	 */
	define('XSD_ANYURI', 117);

	/**
	 * 147
	 */
	define('XSD_ANYXML', 147);

	/**
	 * 116
	 */
	define('XSD_BASE64BINARY', 116);

	/**
	 * 102
	 */
	define('XSD_BOOLEAN', 102);

	/**
	 * 137
	 */
	define('XSD_BYTE', 137);

	/**
	 * 109
	 */
	define('XSD_DATE', 109);

	/**
	 * 107
	 */
	define('XSD_DATETIME', 107);

	/**
	 * 103
	 */
	define('XSD_DECIMAL', 103);

	/**
	 * 105
	 */
	define('XSD_DOUBLE', 105);

	/**
	 * 106
	 */
	define('XSD_DURATION', 106);

	/**
	 * 130
	 */
	define('XSD_ENTITIES', 130);

	/**
	 * 129
	 */
	define('XSD_ENTITY', 129);

	/**
	 * 104
	 */
	define('XSD_FLOAT', 104);

	/**
	 * 113
	 */
	define('XSD_GDAY', 113);

	/**
	 * 114
	 */
	define('XSD_GMONTH', 114);

	/**
	 * 112
	 */
	define('XSD_GMONTHDAY', 112);

	/**
	 * 111
	 */
	define('XSD_GYEAR', 111);

	/**
	 * 110
	 */
	define('XSD_GYEARMONTH', 110);

	/**
	 * 115
	 */
	define('XSD_HEXBINARY', 115);

	/**
	 * 126
	 */
	define('XSD_ID', 126);

	/**
	 * 127
	 */
	define('XSD_IDREF', 127);

	/**
	 * 128
	 */
	define('XSD_IDREFS', 128);

	/**
	 * 135
	 */
	define('XSD_INT', 135);

	/**
	 * 131
	 */
	define('XSD_INTEGER', 131);

	/**
	 * 122
	 */
	define('XSD_LANGUAGE', 122);

	/**
	 * 134
	 */
	define('XSD_LONG', 134);

	/**
	 * 124
	 */
	define('XSD_NAME', 124);

	/**
	 * http://www.w3.org/2001/XMLSchema
	 */
	define('XSD_NAMESPACE', 'http://www.w3.org/2001/XMLSchema');

	/**
	 * 125
	 */
	define('XSD_NCNAME', 125);

	/**
	 * 133
	 */
	define('XSD_NEGATIVEINTEGER', 133);

	/**
	 * 123
	 */
	define('XSD_NMTOKEN', 123);

	/**
	 * 144
	 */
	define('XSD_NMTOKENS', 144);

	/**
	 * 138
	 */
	define('XSD_NONNEGATIVEINTEGER', 138);

	/**
	 * 132
	 */
	define('XSD_NONPOSITIVEINTEGER', 132);

	/**
	 * 120
	 */
	define('XSD_NORMALIZEDSTRING', 120);

	/**
	 * 119
	 */
	define('XSD_NOTATION', 119);

	/**
	 * 143
	 */
	define('XSD_POSITIVEINTEGER', 143);

	/**
	 * 118
	 */
	define('XSD_QNAME', 118);

	/**
	 * 136
	 */
	define('XSD_SHORT', 136);

	/**
	 * 101
	 */
	define('XSD_STRING', 101);

	/**
	 * 108
	 */
	define('XSD_TIME', 108);

	/**
	 * 121
	 */
	define('XSD_TOKEN', 121);

	/**
	 * 142
	 */
	define('XSD_UNSIGNEDBYTE', 142);

	/**
	 * 140
	 */
	define('XSD_UNSIGNEDINT', 140);

	/**
	 * 139
	 */
	define('XSD_UNSIGNEDLONG', 139);

	/**
	 * 141
	 */
	define('XSD_UNSIGNEDSHORT', 141);

}
