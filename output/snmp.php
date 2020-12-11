<?php



namespace {

	/**
	 * <p>Represents SNMP session.</p>
	 * @link https://php.net/manual/en/class.snmp.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SNMP {

		/**
		 * @var int <p>Maximum OID per GET/SET/GETBULK request</p>
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.max-oids
		 */
		public $max_oids;

		/**
		 * @var int <p>Controls the method how the SNMP values will be returned</p>   <b><code>SNMP_VALUE_LIBRARY</code></b>The return values will be as returned by the Net-SNMP library. <b><code>SNMP_VALUE_PLAIN</code></b>The return values will be the plain value without the SNMP type hint.  <b><code>SNMP_VALUE_OBJECT</code></b> The return values will be objects with the properties "value" and "type", where the latter is one of the SNMP_OCTET_STR, SNMP_COUNTER etc. constants. The way "value" is returned is based on which one of <b><code>SNMP_VALUE_LIBRARY</code></b>, <b><code>SNMP_VALUE_PLAIN</code></b> is set
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.valueretrieval
		 */
		public $valueretrieval;

		/**
		 * @var bool <p>Value of <code>quick_print</code> within the NET-SNMP library</p> <p>Sets the value of <code>quick_print</code> within the NET-SNMP library. When this is set (1), the SNMP library will return 'quick printed' values. This means that just the value will be printed. When <code>quick_print</code> is not enabled (default) the UCD SNMP library prints extra information including the type of the value (i.e. IpAddress or OID). Additionally, if quick_print is not enabled, the library prints additional hex values for all strings of three characters or less.</p>
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.quick-print
		 */
		public $quick_print;

		/**
		 * @var bool <p>Controls the way enum values are printed</p> <p>Parameter toggles if walk/get etc. should automatically lookup enum values in the MIB and return them together with their human readable string.</p>
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.enum-print
		 */
		public $enum_print;

		/**
		 * @var int <p>Controls OID output format</p>  <b>OID .1.3.6.1.2.1.1.3.0 representation for various oid_output_format values</b>  <b><code>SNMP_OID_OUTPUT_FULL</code></b>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_NUMERIC</code></b>.1.3.6.1.2.1.1.3.0  <b><code>SNMP_OID_OUTPUT_MODULE</code></b>DISMAN-EVENT-MIB::sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_SUFFIX</code></b>sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_UCD</code></b>system.sysUpTime.sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_NONE</code></b>Undefined
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.oid-output-format
		 */
		public $oid_output_format;

		/**
		 * @var bool <p>Controls disabling check for increasing OID while walking OID tree</p> <p>Some SNMP agents are known for returning OIDs out of order but can complete the walk anyway. Other agents return OIDs that are out of order and can cause <code>SNMP::walk()</code> to loop indefinitely until memory limit will be reached. PHP SNMP library by default performs OID increasing check and stops walking on OID tree when it detects possible loop with issuing warning about non-increasing OID faced. Set oid_increasing_check to <b><code>FALSE</code></b> to disable this check.</p>
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.oid-increasing-check
		 */
		public $oid_increasing_check;

		/**
		 * @var int <p>Controls which failures will raise SNMPException instead of warning. Use bitwise OR'ed <b><code>SNMP::ERRNO_&#42;</code></b> constants. By default all SNMP exceptions are disabled.</p>
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.exceptions-enabled
		 */
		public $exceptions_enabled;

		/**
		 * @var array <p>Read-only property with remote agent configuration: hostname, port, default timeout, default retries count</p>
		 * @link https://php.net/manual/en/class.snmp.php#snmp.props.info
		 */
		public $info;

		/**
		 * @var int <p>No SNMP-specific error occurred.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_NOERROR = 0;

		/**
		 * @var int <p>A generic SNMP error occurred.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_GENERIC = 2;

		/**
		 * @var int <p>Request to SNMP agent timed out.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_TIMEOUT = 4;

		/**
		 * @var int <p>SNMP agent returned an error in reply.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_ERROR_IN_REPLY = 8;

		/**
		 * @var int <p>SNMP agent faced OID cycling reporning non-increasing OID while executing (BULK)WALK command. This indicates bogus remote SNMP agent.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_OID_NOT_INCREASING = 16;

		/**
		 * @var int <p>Library failed while parsing OID (and/or type for SET command). No queries has been made.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_OID_PARSING_ERROR = 32;

		/**
		 * @var int <p>Library will use multiple queries for SET operation requested. That means that operation will be performed in a non-transaction manner and second or subsequent chunks may fail if a type or value failure will be faced.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_MULTIPLE_SET_QUERIES = 64;

		/**
		 * @var int <p>All SNMP::ERRNO_&#42; codes bitwise OR'ed.</p>
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const ERRNO_ANY = 126;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const VERSION_1 = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const VERSION_2C = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const VERSION_2c = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.snmp.php
		 */
		const VERSION_3 = 3;

		/**
		 * Creates SNMP instance representing session to remote SNMP agent
		 * <p>The function description goes here.</p>
		 * @param int $version <p>SNMP protocol version: <b><code>SNMP::VERSION_1</code></b>, <b><code>SNMP::VERSION_2C</code></b>, <b><code>SNMP::VERSION_3</code></b>.</p>
		 * @param string $hostname <p>The SNMP agent. <code>hostname</code> may be suffixed with optional SNMP agent port after colon. IPv6 addresses must be enclosed in square brackets if used with port. If FQDN is used for <code>hostname</code> it will be resolved by php-snmp library, not by Net-SNMP engine. Usage of IPv6 addresses when specifying FQDN may be forced by enclosing FQDN into square brackets. Here it is some examples:</p>  IPv4 with default port127.0.0.1 IPv6 with default port::1 or [::1] IPv4 with specific port127.0.0.1:1161 IPv6 with specific port[::1]:1161 FQDN with default porthost.domain FQDN with specific porthost.domain:1161 FQDN with default port, force usage of IPv6 address[host.domain] FQDN with specific port, force usage of IPv6 address[host.domain]:1161
		 * @param string $community <p>The purpuse of <code>community</code> is SNMP version specific:</p>   SNMP::VERSION_1SNMP community SNMP::VERSION_2CSNMP community SNMP::VERSION_3SNMPv3 securityName
		 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
		 * @param int $retries <p>The number of retries in case timeout occurs.</p>
		 * @return self <p>Returns SNMP object representing remote SNMP agent.</p>
		 * @link https://php.net/manual/en/snmp.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __construct(int $version, string $hostname, string $community, int $timeout = 1000000, int $retries = 5) {}

		/**
		 * Close SNMP session
		 * <p>Frees previously allocated SNMP session object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/snmp.close.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * Fetch an SNMP object
		 * <p>Fetch an SNMP object specified in <code>object_id</code> using GET query.</p>
		 * @param mixed $object_id <p>The SNMP object (OID) or objects</p>
		 * @param bool $preserve_keys <p>When <code>object_id</code> is a array and <code>preserve_keys</code> set to <b><code>TRUE</code></b> keys in results will be taken exactly as in <code>object_id</code>, otherwise SNMP::oid_output_format property is used to determinate the form of keys.</p>
		 * @return mixed <p>Returns SNMP objects requested as string or array depending on <code>object_id</code> type or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/snmp.get.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function get($object_id, bool $preserve_keys = FALSE) {}

		/**
		 * Get last error code
		 * <p>Returns error code from last SNMP request.</p>
		 * @return int <p>Returns one of SNMP error code values described in constants chapter.</p>
		 * @link https://php.net/manual/en/snmp.geterrno.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getErrno(): int {}

		/**
		 * Get last error message
		 * <p>Returns string with error from last SNMP request.</p>
		 * @return string <p>String describing error from last SNMP request.</p>
		 * @link https://php.net/manual/en/snmp.geterror.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getError(): string {}

		/**
		 * Fetch an SNMP object which follows the given object id
		 * <p>Fetch an SNMP object that follows specified <code>object_id</code>.</p>
		 * @param mixed $object_id <p>The SNMP object (OID) or objects</p>
		 * @return mixed <p>Returns SNMP objects requested as string or array depending on <code>object_id</code> type or <b><code>FALSE</code></b> on error.</p>
		 * @link https://php.net/manual/en/snmp.getnext.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getnext($object_id) {}

		/**
		 * Set the value of an SNMP object
		 * <p>Requests remote SNMP agent setting the value of one or more SNMP objects specified by the <code>object_id</code>.</p>
		 * @param mixed $object_id <p>The SNMP object id</p> <p>When count of OIDs in object_id array is greater than max_oids object property set method will have to use multiple queries to perform requested value updates. In this case type and value checks are made per-chunk so second or subsequent requests may fail due to wrong type or value for OID requested. To mark this a warning is raised when count of OIDs in object_id array is greater than max_oids.</p>
		 * @param mixed $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>  =The type is taken from the MIB iINTEGER  uINTEGER sSTRING xHEX STRING dDECIMAL STRING nNULLOBJ oOBJID tTIMETICKS aIPADDRESS bBITS   <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>  Uunsigned int64 Isigned int64 Ffloat Ddouble   <p>Most of these will use the obvious corresponding ASN.1 type. 's', 'x', 'd' and 'b' are all different ways of specifying an OCTET STRING value, and the 'u' unsigned type is also used for handling Gauge32 values.</p> <p>If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, '=' may be used as the <code>type</code> parameter for all object ids as the type can then be automatically read from the MIB.</p> <p>Note that there are two ways to set a variable of the type BITS like e.g. "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p> <ul> <li>  Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix.  </li> </ul> <p>See examples section for more details.</p>
		 * @param mixed $value <p>The new value.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/snmp.set.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function set($object_id, $type, $value): bool {}

		/**
		 * Configures security-related SNMPv3 session parameters
		 * <p>setSecurity configures security-related session parameters used in SNMP protocol version 3</p>
		 * @param string $sec_level <p>the security level (noAuthNoPriv|authNoPriv|authPriv)</p>
		 * @param string $auth_protocol <p>the authentication protocol (MD5 or SHA)</p>
		 * @param string $auth_passphrase <p>the authentication pass phrase</p>
		 * @param string $priv_protocol <p>the privacy protocol (DES or AES)</p>
		 * @param string $priv_passphrase <p>the privacy pass phrase</p>
		 * @param string $contextName <p>the context name</p>
		 * @param string $contextEngineID <p>the context EngineID</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/snmp.setsecurity.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function setSecurity(string $sec_level, string $auth_protocol = null, string $auth_passphrase = null, string $priv_protocol = null, string $priv_passphrase = null, string $contextName = null, string $contextEngineID = null) {}

		/**
		 * Fetch SNMP object subtree
		 * <p><b>SNMP::walk()</b> is used to read SNMP subtree rooted at specified <code>object_id</code>.</p>
		 * @param string $object_id <p>Root of subtree to be fetched</p>
		 * @param bool $suffix_as_key <p>By default full OID notation is used for keys in output array. If set to <b><code>TRUE</code></b> subtree prefix will be removed from keys leaving only suffix of object_id.</p>
		 * @param int $max_repetitions <p>This specifies the maximum number of iterations over the repeating variables. The default is to use this value from SNMP object.</p>
		 * @param int $non_repeaters <p>This specifies the number of supplied variables that should not be iterated over. The default is to use this value from SNMP object.</p>
		 * @return array <p>Returns an associative array of the SNMP object ids and their values on success or <b><code>FALSE</code></b> on error. When a SNMP error occures <code>SNMP::getErrno()</code> and <code>SNMP::getError()</code> can be used for retrieving error number (specific to SNMP extension, see class constants) and error message respectively.</p>
		 * @link https://php.net/manual/en/snmp.walk.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function walk(string $object_id, bool $suffix_as_key = FALSE, int $max_repetitions = NULL, int $non_repeaters = NULL): array {}
	}

	/**
	 * <p>Represents an error raised by SNMP. You should not throw a <b>SNMPException</b> from your own code. See Exceptions for more information about Exceptions in PHP.</p>
	 * @link https://php.net/manual/en/class.snmpexception.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SNMPException extends \RuntimeException {

		/**
		 * @var int <p>The exception code</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>The exception message</p>
		 * @link https://php.net/manual/en/class.exception.php#exception.props.message
		 */
		protected $message;

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
		final public function getCode() {}

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
	 * Fetch an SNMP object
	 * <p>The <b>snmp2_get()</b> function is used to read the value of an SNMP object specified by the <code>object_id</code>.</p>
	 * @param string $host <p>The SNMP agent.</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>The SNMP object.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return string <p>Returns SNMP object value on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmp2-get.php
	 * @see snmp2_set()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function snmp2_get(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * Fetch the SNMP object which follows the given object id
	 * <p>The <b>snmp2_get_next()</b> function is used to read the value of the SNMP object that follows the specified <code>object_id</code>.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>The SNMP object id which precedes the wanted one.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return string <p>Returns SNMP object value on success or <b><code>FALSE</code></b> on error. In case of an error, an E_WARNING message is shown.</p>
	 * @link https://php.net/manual/en/function.snmp2-getnext.php
	 * @see snmp2_get(), snmp2_walk()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_getnext(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * Return all objects including their respective object ID within the specified one
	 * <p>The <b>snmp2_real_walk()</b> function is used to traverse over a number of SNMP objects starting from <code>object_id</code> and return not only their values but also their object ids.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>The SNMP object id which precedes the wanted one.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an associative array of the SNMP object ids and their values on success or <b><code>FALSE</code></b> on error. In case of an error, an E_WARNING message is shown.</p>
	 * @link https://php.net/manual/en/function.snmp2-real-walk.php
	 * @see snmp2_walk()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_real_walk(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * Set the value of an SNMP object
	 * <p><b>snmp2_set()</b> is used to set the value of an SNMP object specified by the <code>object_id</code>.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $community <p>The write community.</p>
	 * @param string $object_id <p>The SNMP object id.</p>
	 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>  =The type is taken from the MIB iINTEGER  uINTEGER sSTRING xHEX STRING dDECIMAL STRING nNULLOBJ oOBJID tTIMETICKS aIPADDRESS bBITS   <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>  Uunsigned int64 Isigned int64 Ffloat Ddouble   <p>Most of these will use the obvious corresponding ASN.1 type. 's', 'x', 'd' and 'b' are all different ways of specifying an OCTET STRING value, and the 'u' unsigned type is also used for handling Gauge32 values.</p> <p>If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, '=' may be used as the <code>type</code> parameter for all object ids as the type can then be automatically read from the MIB.</p> <p>Note that there are two ways to set a variable of the type BITS like e.g. "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p> <ul> <li>  Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix.  </li> </ul> <p>See examples section for more details.</p>
	 * @param string $value <p>The new value.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown. If an unknown or invalid OID is specified the warning probably reads "Could not add variable".</p>
	 * @link https://php.net/manual/en/function.snmp2-set.php
	 * @see snmp2_get()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_set(string $host, string $community, string $object_id, string $type, string $value, int $timeout = 1000000, int $retries = 5): bool {}

	/**
	 * Fetch all the SNMP objects from an agent
	 * <p><b>snmp2_walk()</b> function is used to read all the values from an SNMP agent specified by the <code>hostname</code>.</p>
	 * @param string $host <p>The SNMP agent (server).</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>If <b><code>NULL</code></b>, <code>object_id</code> is taken as the root of the SNMP objects tree and all objects under that tree are returned as an array.</p> <p>If <code>object_id</code> is specified, all the SNMP objects below that <code>object_id</code> are returned.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an array of SNMP object values starting from the <code>object_id</code> as root or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmp2-walk.php
	 * @see snmp2_real_walk()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_walk(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * Fetch an SNMP object
	 * <p>The <b>snmp3_get()</b> function is used to read the value of an SNMP object specified by the <code>object_id</code>.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $sec_name <p>the security name, usually some kind of username</p>
	 * @param string $sec_level <p>the security level (noAuthNoPriv|authNoPriv|authPriv)</p>
	 * @param string $auth_protocol <p>the authentication protocol (MD5 or SHA)</p>
	 * @param string $auth_passphrase <p>the authentication pass phrase</p>
	 * @param string $priv_protocol <p>the privacy protocol (DES or AES)</p>
	 * @param string $priv_passphrase <p>the privacy pass phrase</p>
	 * @param string $object_id <p>The SNMP object id.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return string <p>Returns SNMP object value on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmp3-get.php
	 * @see snmp3_set()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_get(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * Fetch the SNMP object which follows the given object id
	 * <p>The <b>snmp3_getnext()</b> function is used to read the value of the SNMP object that follows the specified <code>object_id</code>.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $sec_name <p>the security name, usually some kind of username</p>
	 * @param string $sec_level <p>the security level (noAuthNoPriv|authNoPriv|authPriv)</p>
	 * @param string $auth_protocol <p>the authentication protocol (MD5 or SHA)</p>
	 * @param string $auth_passphrase <p>the authentication pass phrase</p>
	 * @param string $priv_protocol <p>the privacy protocol (DES or AES)</p>
	 * @param string $priv_passphrase <p>the privacy pass phrase</p>
	 * @param string $object_id <p>The SNMP object id.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return string <p>Returns SNMP object value on success or <b><code>FALSE</code></b> on error. In case of an error, an E_WARNING message is shown.</p>
	 * @link https://php.net/manual/en/function.snmp3-getnext.php
	 * @see snmp3_get(), snmp3_walk()
	 * @since PHP 5, PHP 7
	 */
	function snmp3_getnext(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * Return all objects including their respective object ID within the specified one
	 * <p>The <b>snmp3_real_walk()</b> function is used to traverse over a number of SNMP objects starting from <code>object_id</code> and return not only their values but also their object ids.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $sec_name <p>the security name, usually some kind of username</p>
	 * @param string $sec_level <p>the security level (noAuthNoPriv|authNoPriv|authPriv)</p>
	 * @param string $auth_protocol <p>the authentication protocol (MD5 or SHA)</p>
	 * @param string $auth_passphrase <p>the authentication pass phrase</p>
	 * @param string $priv_protocol <p>the privacy protocol (DES or AES)</p>
	 * @param string $priv_passphrase <p>the privacy pass phrase</p>
	 * @param string $object_id <p>The SNMP object id.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an associative array of the SNMP object ids and their values on success or <b><code>FALSE</code></b> on error. In case of an error, an E_WARNING message is shown.</p>
	 * @link https://php.net/manual/en/function.snmp3-real-walk.php
	 * @see snmpwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_real_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * Set the value of an SNMP object
	 * <p><b>snmp3_set()</b> is used to set the value of an SNMP object specified by the <code>object_id</code>.</p><p>Even if the security level does not use an auth or priv protocol/password valid values have to be specified.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $sec_name <p>the security name, usually some kind of username</p>
	 * @param string $sec_level <p>the security level (noAuthNoPriv|authNoPriv|authPriv)</p>
	 * @param string $auth_protocol <p>the authentication protocol (MD5 or SHA)</p>
	 * @param string $auth_passphrase <p>the authentication pass phrase</p>
	 * @param string $priv_protocol <p>the privacy protocol (DES or AES)</p>
	 * @param string $priv_passphrase <p>the privacy pass phrase</p>
	 * @param string $object_id <p>The SNMP object id.</p>
	 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>  =The type is taken from the MIB iINTEGER  uINTEGER sSTRING xHEX STRING dDECIMAL STRING nNULLOBJ oOBJID tTIMETICKS aIPADDRESS bBITS   <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>  Uunsigned int64 Isigned int64 Ffloat Ddouble   <p>Most of these will use the obvious corresponding ASN.1 type. 's', 'x', 'd' and 'b' are all different ways of specifying an OCTET STRING value, and the 'u' unsigned type is also used for handling Gauge32 values.</p> <p>If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, '=' may be used as the <code>type</code> parameter for all object ids as the type can then be automatically read from the MIB.</p> <p>Note that there are two ways to set a variable of the type BITS like e.g. "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p> <ul> <li>  Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix.  </li> </ul> <p>See examples section for more details.</p>
	 * @param string $value <p>The new value</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown. If an unknown or invalid OID is specified the warning probably reads "Could not add variable".</p>
	 * @link https://php.net/manual/en/function.snmp3-set.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_set(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $type, string $value, int $timeout = 1000000, int $retries = 5): bool {}

	/**
	 * Fetch all the SNMP objects from an agent
	 * <p><b>snmp3_walk()</b> function is used to read all the values from an SNMP agent specified by the <code>hostname</code>.</p><p>Even if the security level does not use an auth or priv protocol/password valid values have to be specified.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $sec_name <p>the security name, usually some kind of username</p>
	 * @param string $sec_level <p>the security level (noAuthNoPriv|authNoPriv|authPriv)</p>
	 * @param string $auth_protocol <p>the authentication protocol (MD5 or SHA)</p>
	 * @param string $auth_passphrase <p>the authentication pass phrase</p>
	 * @param string $priv_protocol <p>the privacy protocol (DES or AES)</p>
	 * @param string $priv_passphrase <p>the privacy pass phrase</p>
	 * @param string $object_id <p>If <b><code>NULL</code></b>, <code>object_id</code> is taken as the root of the SNMP objects tree and all objects under that tree are returned as an array.</p> <p>If <code>object_id</code> is specified, all the SNMP objects below that <code>object_id</code> are returned.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an array of SNMP object values starting from the <code>object_id</code> as root or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmp3-walk.php
	 * @see snmp3_real_walk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * Fetches the current value of the UCD library's quick_print setting
	 * <p>Returns the current value stored in the UCD Library for quick_print. quick_print is off by default.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if quick_print is on, <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.snmp-get-quick-print.php
	 * @see snmp_set_quick_print()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp_get_quick_print(): bool {}

	/**
	 * Return the method how the SNMP values will be returned
	 * @return int <p>OR-ed combitantion of constants ( <b><code>SNMP_VALUE_LIBRARY</code></b> or <b><code>SNMP_VALUE_PLAIN</code></b> ) with possible SNMP_VALUE_OBJECT set.</p>
	 * @link https://php.net/manual/en/function.snmp-get-valueretrieval.php
	 * @see snmp_set_valueretrieval()
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function snmp_get_valueretrieval(): int {}

	/**
	 * Reads and parses a MIB file into the active MIB tree
	 * <p>This function is used to load additional, e.g. vendor specific, MIBs so that human readable OIDs like VENDOR-MIB::foo.1 instead of error prone numeric OIDs can be used.</p><p>The order in which the MIBs are loaded does matter as the underlying Net-SNMP libary will print warnings if referenced objects cannot be resolved.</p>
	 * @param string $filename <p>The filename of the MIB.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.snmp-read-mib.php
	 * @since PHP 5, PHP 7
	 */
	function snmp_read_mib(string $filename): bool {}

	/**
	 * Return all values that are enums with their enum value instead of the raw integer
	 * <p>This function toggles if snmpwalk/snmpget etc. should automatically lookup enum values in the MIB and return them together with their human readable string.</p>
	 * @param int $enum_print <p>As the value is interpreted as boolean by the Net-SNMP library, it can only be "0" or "1".</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.snmp-set-enum-print.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function snmp_set_enum_print(int $enum_print): bool {}

	/**
	 * Set the OID output format
	 * <p>This function is an alias of: <code>snmp_set_oid_output_format()</code>.</p>
	 * @param int $oid_format <b>OID .1.3.6.1.2.1.1.3.0 representation for various <code>oid_format</code> values</b>  <b><code>SNMP_OID_OUTPUT_FULL</code></b>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_NUMERIC</code></b>.1.3.6.1.2.1.1.3.0    <p>Begining from PHP 5.4.0 four additional constants available:</p>  <b><code>SNMP_OID_OUTPUT_MODULE</code></b>DISMAN-EVENT-MIB::sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_SUFFIX</code></b>sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_UCD</code></b>system.sysUpTime.sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_NONE</code></b>Undefined
	 * @return bool
	 * @link https://php.net/manual/en/function.snmp-set-oid-numeric-print.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function snmp_set_oid_numeric_print(int $oid_format = SNMP_OID_OUTPUT_MODULE): bool {}

	/**
	 * Set the OID output format
	 * <p><b>snmp_set_oid_output_format()</b> sets the output format to be full or numeric.</p>
	 * @param int $oid_format <b>OID .1.3.6.1.2.1.1.3.0 representation for various <code>oid_format</code> values</b>  <b><code>SNMP_OID_OUTPUT_FULL</code></b>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_NUMERIC</code></b>.1.3.6.1.2.1.1.3.0    <p>Begining from PHP 5.4.0 four additional constants available:</p>  <b><code>SNMP_OID_OUTPUT_MODULE</code></b>DISMAN-EVENT-MIB::sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_SUFFIX</code></b>sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_UCD</code></b>system.sysUpTime.sysUpTimeInstance <b><code>SNMP_OID_OUTPUT_NONE</code></b>Undefined
	 * @return bool <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.snmp-set-oid-output-format.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function snmp_set_oid_output_format(int $oid_format = SNMP_OID_OUTPUT_MODULE): bool {}

	/**
	 * Set the value of quick_print within the UCD SNMP library
	 * <p>Sets the value of <code>quick_print</code> within the UCD SNMP library. When this is set (1), the SNMP library will return 'quick printed' values. This means that just the value will be printed. When <code>quick_print</code> is not enabled (default) the UCD SNMP library prints extra information including the type of the value (i.e. IpAddress or OID). Additionally, if quick_print is not enabled, the library prints additional hex values for all strings of three characters or less.</p><p>By default the UCD SNMP library returns verbose values, quick_print is used to return only the value.</p><p>Currently strings are still returned with extra quotes, this will be corrected in a later release.</p>
	 * @param bool $quick_print
	 * @return bool <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.snmp-set-quick-print.php
	 * @see snmp_get_quick_print()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp_set_quick_print(bool $quick_print): bool {}

	/**
	 * Specify the method how the SNMP values will be returned
	 * @param int $method <b>types</b>   SNMP_VALUE_LIBRARY The return values will be as returned by the Net-SNMP library.   SNMP_VALUE_PLAIN The return values will be the plain value without the SNMP type hint.   SNMP_VALUE_OBJECT  The return values will be objects with the properties "value" and "type", where the latter is one of the SNMP_OCTET_STR, SNMP_COUNTER etc. constants. The way "value" is returned is based on which one of constants <b><code>SNMP_VALUE_LIBRARY</code></b>, <b><code>SNMP_VALUE_PLAIN</code></b> is set.
	 * @return bool
	 * @link https://php.net/manual/en/function.snmp-set-valueretrieval.php
	 * @see snmp_get_valueretrieval()
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function snmp_set_valueretrieval(int $method = SNMP_VALUE_LIBRARY): bool {}

	/**
	 * Fetch an SNMP object
	 * <p>The <b>snmpget()</b> function is used to read the value of an SNMP object specified by the <code>object_id</code>.</p>
	 * @param string $hostname <p>The SNMP agent.</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>The SNMP object.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return string <p>Returns SNMP object value on success or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmpget.php
	 * @see snmpset()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpget(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * Fetch the SNMP object which follows the given object id
	 * <p>The <b>snmpgetnext()</b> function is used to read the value of the SNMP object that follows the specified <code>object_id</code>.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>The SNMP object id which precedes the wanted one.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return string <p>Returns SNMP object value on success or <b><code>FALSE</code></b> on error. In case of an error, an E_WARNING message is shown.</p>
	 * @link https://php.net/manual/en/function.snmpgetnext.php
	 * @see snmpget(), snmpwalk()
	 * @since PHP 5, PHP 7
	 */
	function snmpgetnext(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * Return all objects including their respective object ID within the specified one
	 * <p>The <b>snmprealwalk()</b> function is used to traverse over a number of SNMP objects starting from <code>object_id</code> and return not only their values but also their object ids.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>The SNMP object id which precedes the wanted one.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an associative array of the SNMP object ids and their values on success or <b><code>FALSE</code></b> on error. In case of an error, an E_WARNING message is shown.</p>
	 * @link https://php.net/manual/en/function.snmprealwalk.php
	 * @see snmpwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmprealwalk(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * Set the value of an SNMP object
	 * <p><b>snmpset()</b> is used to set the value of an SNMP object specified by the <code>object_id</code>.</p>
	 * @param string $host <p>The hostname of the SNMP agent (server).</p>
	 * @param string $community <p>The write community.</p>
	 * @param string $object_id <p>The SNMP object id.</p>
	 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>  =The type is taken from the MIB iINTEGER  uINTEGER sSTRING xHEX STRING dDECIMAL STRING nNULLOBJ oOBJID tTIMETICKS aIPADDRESS bBITS   <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>  Uunsigned int64 Isigned int64 Ffloat Ddouble   <p>Most of these will use the obvious corresponding ASN.1 type. 's', 'x', 'd' and 'b' are all different ways of specifying an OCTET STRING value, and the 'u' unsigned type is also used for handling Gauge32 values.</p> <p>If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, '=' may be used as the <code>type</code> parameter for all object ids as the type can then be automatically read from the MIB.</p> <p>Note that there are two ways to set a variable of the type BITS like e.g. "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p> <ul> <li>  Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix.  </li> </ul> <p>See examples section for more details.</p>
	 * @param mixed $value <p>The new value.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p><p>If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown. If an unknown or invalid OID is specified the warning probably reads "Could not add variable".</p>
	 * @link https://php.net/manual/en/function.snmpset.php
	 * @see snmpget()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpset(string $host, string $community, string $object_id, string $type, $value, int $timeout = 1000000, int $retries = 5): bool {}

	/**
	 * Fetch all the SNMP objects from an agent
	 * <p><b>snmpwalk()</b> function is used to read all the values from an SNMP agent specified by the <code>hostname</code>.</p>
	 * @param string $hostname <p>The SNMP agent (server).</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>If <b><code>NULL</code></b>, <code>object_id</code> is taken as the root of the SNMP objects tree and all objects under that tree are returned as an array.</p> <p>If <code>object_id</code> is specified, all the SNMP objects below that <code>object_id</code> are returned.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an array of SNMP object values starting from the <code>object_id</code> as root or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmpwalk.php
	 * @see snmprealwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpwalk(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * Query for a tree of information about a network entity
	 * <p><b>snmpwalkoid()</b> function is used to read all object ids and their respective values from an SNMP agent specified by <code>hostname</code>.</p><p>The existence of <b>snmpwalkoid()</b> and <code>snmpwalk()</code> has historical reasons. Both functions are provided for backward compatibility. Use <code>snmprealwalk()</code> instead.</p>
	 * @param string $hostname <p>The SNMP agent.</p>
	 * @param string $community <p>The read community.</p>
	 * @param string $object_id <p>If <b><code>NULL</code></b>, <code>object_id</code> is taken as the root of the SNMP objects tree and all objects under that tree are returned as an array.</p> <p>If <code>object_id</code> is specified, all the SNMP objects below that <code>object_id</code> are returned.</p>
	 * @param int $timeout <p>The number of microseconds until the first timeout.</p>
	 * @param int $retries <p>The number of times to retry if timeouts occur.</p>
	 * @return array <p>Returns an associative array with object ids and their respective object value starting from the <code>object_id</code> as root or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.snmpwalkoid.php
	 * @see snmpwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpwalkoid(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	define('SNMP_BIT_STR', null);

	define('SNMP_COUNTER', null);

	define('SNMP_COUNTER64', null);

	define('SNMP_INTEGER', null);

	define('SNMP_IPADDRESS', null);

	define('SNMP_NULL', null);

	define('SNMP_OBJECT_ID', null);

	define('SNMP_OCTET_STR', null);

	/**
	 * As of 5.2.0
	 */
	define('SNMP_OID_OUTPUT_FULL', null);

	/**
	 * As of 5.4.0
	 */
	define('SNMP_OID_OUTPUT_MODULE', null);

	/**
	 * As of 5.4.0
	 */
	define('SNMP_OID_OUTPUT_NONE', null);

	/**
	 * As of 5.2.0
	 */
	define('SNMP_OID_OUTPUT_NUMERIC', null);

	/**
	 * As of 5.4.0
	 */
	define('SNMP_OID_OUTPUT_SUFFIX', null);

	/**
	 * As of 5.4.0
	 */
	define('SNMP_OID_OUTPUT_UCD', null);

	define('SNMP_OPAQUE', null);

	define('SNMP_TIMETICKS', null);

	define('SNMP_UINTEGER', null);

	define('SNMP_UNSIGNED', null);

	define('SNMP_VALUE_LIBRARY', null);

	define('SNMP_VALUE_OBJECT', null);

	define('SNMP_VALUE_PLAIN', null);

}
