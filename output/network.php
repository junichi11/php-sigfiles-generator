<?php



namespace {

	/**
	 * Check DNS records corresponding to a given Internet host name or IP address
	 * <p>Searches DNS for records of type <code>type</code> corresponding to <code>host</code>.</p>
	 * @param string $host <p><code>host</code> may either be the IP address in dotted-quad notation or the host name.</p>
	 * @param string $type <p><code>type</code> may be any one of: A, MX, NS, SOA, PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT or ANY.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if any records are found; returns <b><code>FALSE</code></b> if no records were found or if an error occurred.</p>
	 * @link https://php.net/manual/en/function.checkdnsrr.php
	 * @see dns_get_record(), getmxrr(), gethostbyaddr(), gethostbyname(), gethostbynamel()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function checkdnsrr(string $host, string $type = "MX"): bool {}

	/**
	 * Close connection to system logger
	 * <p><b>closelog()</b> closes the descriptor being used to write to the system logger. The use of <b>closelog()</b> is optional.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.closelog.php
	 * @see syslog(), openlog()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function closelog(): bool {}

	/**
	 * Initializes all syslog related variables
	 * <p>Initializes all variables used in the syslog functions.</p>
	 * @return void <p>No value is returned.</p> <b>Syslog variables</b>   Variable Constant equal Meaning Notes     $LOG_EMERG <b><code>LOG_EMERG</code></b> System is unusable &nbsp;   $LOG_ALERT <b><code>LOG_ALERT</code></b> Immediate action required &nbsp;   $LOG_CRIT <b><code>LOG_CRIT</code></b> Critical conditions &nbsp;   $LOG_ERR <b><code>LOG_ERR</code></b> &nbsp; &nbsp;   $LOG_WARNING <b><code>LOG_WARNING</code></b> &nbsp; &nbsp;   $LOG_NOTICE <b><code>LOG_NOTICE</code></b> &nbsp; &nbsp;   $LOG_INFO <b><code>LOG_INFO</code></b> &nbsp; &nbsp;   $LOG_DEBUG <b><code>LOG_DEBUG</code></b> &nbsp; &nbsp;   $LOG_KERN <b><code>LOG_KERN</code></b> &nbsp; &nbsp;   $LOG_USER <b><code>LOG_USER</code></b> Genetic user level &nbsp;   $LOG_MAIL <b><code>LOG_MAIL</code></b> Log to email &nbsp;   $LOG_DAEMON <b><code>LOG_DAEMON</code></b> Other system daemons &nbsp;   $LOG_AUTH <b><code>LOG_AUTH</code></b> &nbsp; &nbsp;   $LOG_SYSLOG <b><code>LOG_SYSLOG</code></b> &nbsp; Not available on Netware   $LOG_LPR <b><code>LOG_LPR</code></b> &nbsp; &nbsp;   $LOG_NEWS <b><code>LOG_NEWS</code></b> Usenet new Not available on HP-UX   $LOG_CRON <b><code>LOG_CRON</code></b> &nbsp; Not available on all platforms   $LOG_AUTHPRIV <b><code>LOG_AUTHPRIV</code></b> &nbsp; Not available on AIX   $LOG_LOCAL0 <b><code>LOG_LOCAL0</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL1 <b><code>LOG_LOCAL1</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL2 <b><code>LOG_LOCAL2</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL3 <b><code>LOG_LOCAL3</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL4 <b><code>LOG_LOCAL4</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL5 <b><code>LOG_LOCAL5</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL6 <b><code>LOG_LOCAL6</code></b> &nbsp; Not available on Windows and Netware   $LOG_LOCAL7 <b><code>LOG_LOCAL7</code></b> &nbsp; Not available on Windows and Netware   $LOG_PID <b><code>LOG_PID</code></b> &nbsp; &nbsp;   $LOG_CONS <b><code>LOG_CONS</code></b> &nbsp; &nbsp;   $LOG_ODELAY <b><code>LOG_ODELAY</code></b> &nbsp; &nbsp;   $LOG_NDELAY <b><code>LOG_NDELAY</code></b> &nbsp; &nbsp;   $LOG_NOWAIT <b><code>LOG_NOWAIT</code></b> &nbsp; Not available on BeOS   $LOG_PERROR <b><code>LOG_PERROR</code></b> &nbsp; Not available on AIX   <p><b>Warning</b></p><p>This function has been <i>DEPRECATED</i> as of PHP 5.3.0 and <i>REMOVED</i> as of PHP 5.4.0.</p>
	 * @link https://php.net/manual/en/function.define-syslog-variables.php
	 * @see openlog(), syslog(), closelog()
	 * @since PHP 4, PHP 5 < 5.4.0
	 */
	function define_syslog_variables(): void {}

	/**
	 * Alias of checkdnsrr()
	 * <p>This function is an alias of: <code>checkdnsrr()</code>.</p>
	 * @param string $host <p><code>host</code> may either be the IP address in dotted-quad notation or the host name.</p>
	 * @param string $type <p><code>type</code> may be any one of: A, MX, NS, SOA, PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT or ANY.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.dns-check-record.php
	 * @since PHP 5, PHP 7
	 */
	function dns_check_record(string $host, string $type = "MX"): bool {}

	/**
	 * Alias of getmxrr()
	 * <p>This function is an alias of: <code>getmxrr()</code>.</p>
	 * @param string $hostname <p>The Internet host name.</p>
	 * @param array $mxhosts <p>A list of the MX records found is placed into the array <code>mxhosts</code>.</p>
	 * @param array $weight <p>If the <code>weight</code> array is given, it will be filled with the weight information gathered.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.dns-get-mx.php
	 * @since PHP 5, PHP 7
	 */
	function dns_get_mx(string $hostname, array &$mxhosts, array &$weight = NULL): bool {}

	/**
	 * Fetch DNS Resource Records associated with a hostname
	 * <p>Fetch DNS Resource Records associated with the given <code>hostname</code>.</p>
	 * @param string $hostname <p><code>hostname</code> should be a valid DNS hostname such as "<code>www.example.com</code>". Reverse lookups can be generated using <code>in-addr.arpa</code> notation, but <code>gethostbyaddr()</code> is more suitable for the majority of reverse lookups.</p> <p><b>Note</b>:</p><p>Per DNS standards, email addresses are given in <code>user.host</code> format (for example: <code>hostmaster.example.com</code> as opposed to <code>hostmaster@example.com</code>), be sure to check this value and modify if necessary before using it with a functions such as <code>mail()</code>.</p>
	 * @param int $type <p>By default, <b>dns_get_record()</b> will search for any resource records associated with <code>hostname</code>. To limit the query, specify the optional <code>type</code> parameter. May be any one of the following: <b><code>DNS_A</code></b>, <b><code>DNS_CNAME</code></b>, <b><code>DNS_HINFO</code></b>, <b><code>DNS_CAA</code></b>, <b><code>DNS_MX</code></b>, <b><code>DNS_NS</code></b>, <b><code>DNS_PTR</code></b>, <b><code>DNS_SOA</code></b>, <b><code>DNS_TXT</code></b>, <b><code>DNS_AAAA</code></b>, <b><code>DNS_SRV</code></b>, <b><code>DNS_NAPTR</code></b>, <b><code>DNS_A6</code></b>, <b><code>DNS_ALL</code></b> or <b><code>DNS_ANY</code></b>.</p> <p><b>Note</b>:</p><p>Because of eccentricities in the performance of libresolv between platforms, <b><code>DNS_ANY</code></b> will not always return every record, the slower <b><code>DNS_ALL</code></b> will collect all records more reliably.</p>  <p><b>Note</b>:</p><p><b><code>DNS_CAA</code></b> is not supported on Windows.</p>
	 * @param array $authns <p>Passed by reference and, if given, will be populated with Resource Records for the <i>Authoritative Name Servers</i>.</p>
	 * @param array $addtl <p>Passed by reference and, if given, will be populated with any <i>Additional Records</i>.</p>
	 * @param bool $raw <p>The <code>type</code> will be interpreted as a raw DNS type ID (the <code>DNS_&#42;</code> constants cannot be used). The return value will contain a <code>data</code> key, which needs to be manually parsed.</p>
	 * @return array|false <p>This function returns an array of associative arrays, or <b><code>FALSE</code></b> on failure. Each associative array contains <i>at minimum</i> the following keys:</p> <b>Basic DNS attributes</b>   Attribute Meaning     host  The record in the DNS namespace to which the rest of the associated data refers.    class  <b>dns_get_record()</b> only returns Internet class records and as such this parameter will always return <code>IN</code>.    type  String containing the record type. Additional attributes will also be contained in the resulting array dependant on the value of type. See table below.    ttl  <code>"Time To Live"</code> remaining for this record. This will <i>not</i> equal the record's original ttl, but will rather equal the original ttl minus whatever length of time has passed since the authoritative name server was queried.     <b>Other keys in associative arrays dependant on 'type'</b>   Type Extra Columns     <code>A</code>  <code>ip</code>: An IPv4 addresses in dotted decimal notation.    <code>MX</code>  <code>pri</code>: Priority of mail exchanger. Lower numbers indicate greater priority. <code>target</code>: FQDN of the mail exchanger. See also <code>dns_get_mx()</code>.    <code>CNAME</code>  <code>target</code>: FQDN of location in DNS namespace to which the record is aliased.    <code>NS</code>  <code>target</code>: FQDN of the name server which is authoritative for this hostname.    <code>PTR</code>  <code>target</code>: Location within the DNS namespace to which this record points.    <code>TXT</code>  <code>txt</code>: Arbitrary string data associated with this record.    <code>HINFO</code>  <code>cpu</code>: IANA number designating the CPU of the machine referenced by this record. <code>os</code>: IANA number designating the Operating System on the machine referenced by this record. See IANA's <code>Operating System Names</code> for the meaning of these values.    <code>CAA</code>  <code>flags</code>: A one-byte bitfield; currently only bit 0 is defined, meaning 'critical'; other bits are reserved and should be ignored. <code>tag</code>: The CAA tag name (alphanumeric ASCII string). <code>value</code>: The CAA tag value (binary string, may use subformats). For additional information see: RFC 6844    <code>SOA</code>  <code>mname</code>: FQDN of the machine from which the resource records originated. <code>rname</code>: Email address of the administrative contact for this domain. <code>serial</code>: Serial # of this revision of the requested domain. <code>refresh</code>: Refresh interval (seconds) secondary name servers should use when updating remote copies of this domain. <code>retry</code>: Length of time (seconds) to wait after a failed refresh before making a second attempt. <code>expire</code>: Maximum length of time (seconds) a secondary DNS server should retain remote copies of the zone data without a successful refresh before discarding. <code>minimum-ttl</code>: Minimum length of time (seconds) a client can continue to use a DNS resolution before it should request a new resolution from the server. Can be overridden by individual resource records.    <code>AAAA</code>  <code>ipv6</code>: IPv6 address    <code>A6</code>(PHP &gt;= 5.1.0)  <code>masklen</code>: Length (in bits) to inherit from the target specified by <code>chain</code>. <code>ipv6</code>: Address for this specific record to merge with <code>chain</code>. <code>chain</code>: Parent record to merge with <code>ipv6</code> data.    <code>SRV</code>  <code>pri</code>: (Priority) lowest priorities should be used first. <code>weight</code>: Ranking to weight which of commonly prioritized <code>targets</code> should be chosen at random. <code>target</code> and <code>port</code>: hostname and port where the requested service can be found. For additional information see: RFC 2782    <code>NAPTR</code>  <code>order</code> and <code>pref</code>: Equivalent to <code>pri</code> and <code>weight</code> above. <code>flags</code>, <code>services</code>, <code>regex</code>, and <code>replacement</code>: Parameters as defined by RFC 2915.
	 * @link https://php.net/manual/en/function.dns-get-record.php
	 * @see dns_get_mx(), dns_check_record()
	 * @since PHP 5, PHP 7
	 */
	function dns_get_record(string $hostname, int $type = DNS_ANY, array &$authns = NULL, array &$addtl = NULL, bool $raw = FALSE) {}

	/**
	 * Open Internet or Unix domain socket connection
	 * <p>Initiates a socket connection to the resource specified by <code>hostname</code>.</p><p>PHP supports targets in the Internet and Unix domains as described in List of Supported Socket Transports. A list of supported transports can also be retrieved using <code>stream_get_transports()</code>.</p><p>The socket will by default be opened in blocking mode. You can switch it to non-blocking mode by using <code>stream_set_blocking()</code>.</p><p>The function <code>stream_socket_client()</code> is similar but provides a richer set of options, including non-blocking connection and the ability to provide a stream context.</p>
	 * @param string $hostname <p>If OpenSSL support is installed, you may prefix the <code>hostname</code> with either <code>ssl://</code> or <code>tls://</code> to use an SSL or TLS client connection over TCP/IP to connect to the remote host.</p>
	 * @param int $port <p>The port number. This can be omitted and skipped with <code>-1</code> for transports that do not use ports, such as <code>unix://</code>.</p>
	 * @param int $errno <p>If provided, holds the system level error number that occurred in the system-level <code>connect()</code> call.</p> <p>If the value returned in <code>errno</code> is <code>0</code> and the function returned <b><code>FALSE</code></b>, it is an indication that the error occurred before the <code>connect()</code> call. This is most likely due to a problem initializing the socket.</p>
	 * @param string $errstr <p>The error message as a string.</p>
	 * @param float $timeout <p>The connection timeout, in seconds.</p> <p><b>Note</b>:</p><p>If you need to set a timeout for reading/writing data over the socket, use <code>stream_set_timeout()</code>, as the <code>timeout</code> parameter to <b>fsockopen()</b> only applies while connecting the socket.</p>
	 * @return resource <p><b>fsockopen()</b> returns a file pointer which may be used together with the other file functions (such as <code>fgets()</code>, <code>fgetss()</code>, <code>fwrite()</code>, <code>fclose()</code>, and <code>feof()</code>). If the call fails, it will return <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/en/function.fsockopen.php
	 * @see pfsockopen(), stream_socket_client(), stream_set_blocking(), stream_set_timeout(), fgets(), fgetss(), fwrite(), fclose(), feof(), socket_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function fsockopen(string $hostname, int $port = -1, int &$errno = NULL, string &$errstr = NULL, float $timeout  = 'ini_get("default_socket_timeout")') {}

	/**
	 * Get the Internet host name corresponding to a given IP address
	 * <p>Returns the host name of the Internet host specified by <code>ip_address</code>.</p>
	 * @param string $ip_address <p>The host IP address.</p>
	 * @return string <p>Returns the host name on success, the unmodified <code>ip_address</code> on failure, or <b><code>FALSE</code></b> on malformed input.</p>
	 * @link https://php.net/manual/en/function.gethostbyaddr.php
	 * @see gethostbyname(), gethostbynamel()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gethostbyaddr(string $ip_address): string {}

	/**
	 * Get the IPv4 address corresponding to a given Internet host name
	 * <p>Returns the IPv4 address of the Internet host specified by <code>hostname</code>.</p>
	 * @param string $hostname <p>The host name.</p>
	 * @return string <p>Returns the IPv4 address or a string containing the unmodified <code>hostname</code> on failure.</p>
	 * @link https://php.net/manual/en/function.gethostbyname.php
	 * @see gethostbyaddr(), gethostbynamel(), inet_pton(), inet_ntop()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gethostbyname(string $hostname): string {}

	/**
	 * Get a list of IPv4 addresses corresponding to a given Internet host name
	 * <p>Returns a list of IPv4 addresses to which the Internet host specified by <code>hostname</code> resolves.</p>
	 * @param string $hostname <p>The host name.</p>
	 * @return array <p>Returns an array of IPv4 addresses or <b><code>FALSE</code></b> if <code>hostname</code> could not be resolved.</p>
	 * @link https://php.net/manual/en/function.gethostbynamel.php
	 * @see gethostbyname(), gethostbyaddr(), checkdnsrr(), getmxrr()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gethostbynamel(string $hostname): array {}

	/**
	 * Gets the host name
	 * <p><b>gethostname()</b> gets the standard host name for the local machine.</p>
	 * @return string <p>Returns a string with the hostname on success, otherwise <b><code>FALSE</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.gethostname.php
	 * @see gethostbyname(), gethostbyaddr(), php_uname()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function gethostname(): string {}

	/**
	 * Get MX records corresponding to a given Internet host name
	 * <p>Searches DNS for MX records corresponding to <code>hostname</code>.</p>
	 * @param string $hostname <p>The Internet host name.</p>
	 * @param array $mxhosts <p>A list of the MX records found is placed into the array <code>mxhosts</code>.</p>
	 * @param array $weight <p>If the <code>weight</code> array is given, it will be filled with the weight information gathered.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if any records are found; returns <b><code>FALSE</code></b> if no records were found or if an error occurred.</p>
	 * @link https://php.net/manual/en/function.getmxrr.php
	 * @see checkdnsrr(), dns_get_record(), gethostbyname(), gethostbynamel(), gethostbyaddr()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getmxrr(string $hostname, array &$mxhosts, array &$weight = NULL): bool {}

	/**
	 * Get protocol number associated with protocol name
	 * <p><b>getprotobyname()</b> returns the protocol number associated with the protocol <code>name</code> as per /etc/protocols.</p>
	 * @param string $name <p>The protocol name.</p>
	 * @return int|false <p>Returns the protocol number, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.getprotobyname.php
	 * @see getprotobynumber()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getprotobyname(string $name) {}

	/**
	 * Get protocol name associated with protocol number
	 * <p><b>getprotobynumber()</b> returns the protocol name associated with protocol <code>number</code> as per /etc/protocols.</p>
	 * @param int $number <p>The protocol number.</p>
	 * @return string|false <p>Returns the protocol name as a string, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.getprotobynumber.php
	 * @see getprotobyname()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getprotobynumber(int $number) {}

	/**
	 * Get port number associated with an Internet service and protocol
	 * <p><b>getservbyname()</b> returns the Internet port which corresponds to <code>service</code> for the specified <code>protocol</code> as per /etc/services.</p>
	 * @param string $service <p>The Internet service name, as a string.</p>
	 * @param string $protocol <p><code>protocol</code> is either <code>"tcp"</code> or <code>"udp"</code> (in lowercase).</p>
	 * @return int <p>Returns the port number, or <b><code>FALSE</code></b> if <code>service</code> or <code>protocol</code> is not found.</p>
	 * @link https://php.net/manual/en/function.getservbyname.php
	 * @see getservbyport()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getservbyname(string $service, string $protocol): int {}

	/**
	 * Get Internet service which corresponds to port and protocol
	 * <p><b>getservbyport()</b> returns the Internet service associated with <code>port</code> for the specified <code>protocol</code> as per /etc/services.</p>
	 * @param int $port <p>The port number.</p>
	 * @param string $protocol <p><code>protocol</code> is either <code>"tcp"</code> or <code>"udp"</code> (in lowercase).</p>
	 * @return string <p>Returns the Internet service name as a string.</p>
	 * @link https://php.net/manual/en/function.getservbyport.php
	 * @see getservbyname()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getservbyport(int $port, string $protocol): string {}

	/**
	 * Send a raw HTTP header
	 * <p><b>header()</b> is used to send a raw HTTP header. See the HTTP/1.1 specification for more information on HTTP headers.</p><p>Remember that <b>header()</b> must be called before any actual output is sent, either by normal HTML tags, blank lines in a file, or from PHP. It is a very common error to read code with <code>include</code>, or <code>require</code>, functions, or another file access function, and have spaces or empty lines that are output before <b>header()</b> is called. The same problem exists when using a single PHP/HTML file.</p>
	 * @param string $header <p>The header string.</p> <p>There are two special-case header calls. The first is a header that starts with the string "<code>HTTP/</code>" (case is not significant), which will be used to figure out the HTTP status code to send. For example, if you have configured Apache to use a PHP script to handle requests for missing files (using the <code>ErrorDocument</code> directive), you may want to make sure that your script generates the proper status code.</p> <p></p>  <code> &lt;&#63;php<br>header("HTTP/1.0&nbsp;404&nbsp;Not&nbsp;Found");<br>&#63;&gt;  </code>   <p>The second special case is the "Location:" header. Not only does it send this header back to the browser, but it also returns a <code>REDIRECT</code> (302) status code to the browser unless the <code>201</code> or a <code>3xx</code> status code has already been set.</p> <p></p>  <code> &lt;&#63;php<br>header("Location:&nbsp;http://www.example.com/");&nbsp;/&#42;&nbsp;Redirect&nbsp;browser&nbsp;&#42;/<br><br>/&#42;&nbsp;Make&nbsp;sure&nbsp;that&nbsp;code&nbsp;below&nbsp;does&nbsp;not&nbsp;get&nbsp;executed&nbsp;when&nbsp;we&nbsp;redirect.&nbsp;&#42;/<br>exit;<br>&#63;&gt;  </code>
	 * @param bool $replace <p>The optional <code>replace</code> parameter indicates whether the header should replace a previous similar header, or add a second header of the same type. By default it will replace, but if you pass in <b><code>FALSE</code></b> as the second argument you can force multiple headers of the same type. For example:</p> <p></p>  <code> &lt;&#63;php<br>header('WWW-Authenticate:&nbsp;Negotiate');<br>header('WWW-Authenticate:&nbsp;NTLM',&nbsp;false);<br>&#63;&gt;  </code>
	 * @param int $http_response_code <p>Forces the HTTP response code to the specified value. Note that this parameter only has an effect if the <code>header</code> is not empty.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.header.php
	 * @see headers_sent(), setcookie(), http_response_code(), header_remove()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function header(string $header, bool $replace = TRUE, int $http_response_code = NULL): void {}

	/**
	 * Call a header function
	 * <p>Registers a function that will be called when PHP starts sending output.</p><p>The <code>callback</code> is executed just after PHP prepares all headers to be sent, and before any other output is sent, creating a window to manipulate the outgoing headers before being sent.</p>
	 * @param callable $callback <p>Function called just before the headers are sent. It gets no parameters and the return value is ignored.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.header-register-callback.php
	 * @see headers_list(), header_remove(), header()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function header_register_callback(callable $callback): bool {}

	/**
	 * Remove previously set headers
	 * <p>Removes an HTTP header previously set using <code>header()</code>.</p>
	 * @param string $name <p>The header name to be removed.</p> <p><b>Note</b>:  This parameter is case-insensitive. </p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.header-remove.php
	 * @see header(), headers_sent()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function header_remove(string $name = NULL): void {}

	/**
	 * Returns a list of response headers sent (or ready to send)
	 * <p><b>headers_list()</b> will return a list of headers to be sent to the browser / client. To determine whether or not these headers have been sent yet, use <code>headers_sent()</code>.</p>
	 * @return array <p>Returns a numerically indexed array of headers.</p>
	 * @link https://php.net/manual/en/function.headers-list.php
	 * @see headers_sent(), header(), setcookie(), apache_response_headers(), http_response_code()
	 * @since PHP 5, PHP 7
	 */
	function headers_list(): array {}

	/**
	 * Checks if or where headers have been sent
	 * <p>Checks if or where headers have been sent.</p><p>You can't add any more header lines using the <code>header()</code> function once the header block has already been sent. Using this function you can at least prevent getting HTTP header related error messages. Another option is to use Output Buffering.</p>
	 * @param string $file <p>If the optional <code>file</code> and <code>line</code> parameters are set, <b>headers_sent()</b> will put the PHP source file name and line number where output started in the <code>file</code> and <code>line</code> variables.</p>
	 * @param int $line <p>The line number where the output started.</p>
	 * @return bool <p><b>headers_sent()</b> will return <b><code>FALSE</code></b> if no HTTP headers have already been sent or <b><code>TRUE</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.headers-sent.php
	 * @see ob_start(), trigger_error(), headers_list(), header()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function headers_sent(string &$file = NULL, int &$line = NULL): bool {}

	/**
	 * Get or Set the HTTP response code
	 * <p>Gets or sets the HTTP response status code.</p>
	 * @param int $response_code <p>The optional <code>response_code</code> will set the response code.</p>
	 * @return mixed <p>If <code>response_code</code> is provided, then the previous status code will be returned. If <code>response_code</code> is not provided, then the current status code will be returned. Both of these values will default to a <code>200</code> status code if used in a web server environment.</p><p><b><code>FALSE</code></b> will be returned if <code>response_code</code> is not provided and it is not invoked in a web server environment (such as from a CLI application). <b><code>TRUE</code></b> will be returned if <code>response_code</code> is provided and it is not invoked in a web server environment (but only when no previous response status has been set).</p>
	 * @link https://php.net/manual/en/function.http-response-code.php
	 * @see header(), headers_list()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function http_response_code(int $response_code = NULL) {}

	/**
	 * Converts a packed internet address to a human readable representation
	 * <p>This function converts a 32bit IPv4, or 128bit IPv6 address (if PHP was built with IPv6 support enabled) into an address family appropriate string representation.</p>
	 * @param string $in_addr <p>A 32bit IPv4, or 128bit IPv6 address.</p>
	 * @return string|false <p>Returns a string representation of the address or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.inet-ntop.php
	 * @see long2ip(), ip2long(), inet_pton()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function inet_ntop(string $in_addr) {}

	/**
	 * Converts a human readable IP address to its packed in_addr representation
	 * <p>This function converts a human readable IPv4 or IPv6 address (if PHP was built with IPv6 support enabled) into an address family appropriate 32bit or 128bit binary structure.</p>
	 * @param string $address <p>A human readable IPv4 or IPv6 address.</p>
	 * @return string <p>Returns the <code>in_addr</code> representation of the given <code>address</code>, or <b><code>FALSE</code></b> if a syntactically invalid <code>address</code> is given (for example, an IPv4 address without dots or an IPv6 address without colons).</p>
	 * @link https://php.net/manual/en/function.inet-pton.php
	 * @see ip2long(), long2ip(), inet_ntop()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function inet_pton(string $address): string {}

	/**
	 * Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer
	 * <p>The function <b>ip2long()</b> generates a long integer representation of IPv4 Internet network address from its Internet standard format (dotted string) representation.</p><p><b>ip2long()</b> will also work with non-complete IP addresses. Read http://publibn.boulder.ibm.com/doc_link/en_US/a_doc_lib/libs/commtrf2/inet_addr.htm for more info.</p>
	 * @param string $ip_address <p>A standard format address.</p>
	 * @return int <p>Returns the long integer or <b><code>FALSE</code></b> if <code>ip_address</code> is invalid.</p>
	 * @link https://php.net/manual/en/function.ip2long.php
	 * @see long2ip(), sprintf()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ip2long(string $ip_address): int {}

	/**
	 * Converts an long integer address into a string in (IPv4) Internet standard dotted format
	 * <p>The function <b>long2ip()</b> generates an Internet address in dotted format (i.e.: aaa.bbb.ccc.ddd) from the long integer representation.</p>
	 * @param int $proper_address <p>A proper address representation in long integer.</p>
	 * @return string <p>Returns the Internet IP address as a string.</p>
	 * @link https://php.net/manual/en/function.long2ip.php
	 * @see ip2long()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function long2ip(int $proper_address): string {}

	/**
	 * Open connection to system logger
	 * <p><b>openlog()</b> opens a connection to the system logger for a program.</p><p>The use of <b>openlog()</b> is optional. It will automatically be called by <code>syslog()</code> if necessary, in which case <code>ident</code> will default to <b><code>FALSE</code></b>.</p>
	 * @param string $ident <p>The string <code>ident</code> is added to each message.</p>
	 * @param int $option <p>The <code>option</code> argument is used to indicate what logging options will be used when generating a log message.</p> <b><b>openlog()</b> Options</b>   Constant Description     <b><code>LOG_CONS</code></b>  if there is an error while sending data to the system logger, write directly to the system console    <b><code>LOG_NDELAY</code></b>  open the connection to the logger immediately    <b><code>LOG_ODELAY</code></b>  (default) delay opening the connection until the first message is logged    <b><code>LOG_PERROR</code></b> print log message also to standard error   <b><code>LOG_PID</code></b> include PID with each message    You can use one or more of these options. When using multiple options you need to <code>OR</code> them, i.e. to open the connection immediately, write to the console and include the PID in each message, you will use: <code>LOG_CONS | LOG_NDELAY | LOG_PID</code>
	 * @param int $facility <p>The <code>facility</code> argument is used to specify what type of program is logging the message. This allows you to specify (in your machine's syslog configuration) how messages coming from different facilities will be handled.</p> <b><b>openlog()</b> Facilities</b>   Constant Description     <b><code>LOG_AUTH</code></b>  security/authorization messages (use <b><code>LOG_AUTHPRIV</code></b> instead in systems where that constant is defined)    <b><code>LOG_AUTHPRIV</code></b> security/authorization messages (private)   <b><code>LOG_CRON</code></b> clock daemon (cron and at)   <b><code>LOG_DAEMON</code></b> other system daemons   <b><code>LOG_KERN</code></b> kernel messages   <b><code>LOG_LOCAL0</code></b> ... <b><code>LOG_LOCAL7</code></b> reserved for local use, these are not available in Windows   <b><code>LOG_LPR</code></b> line printer subsystem   <b><code>LOG_MAIL</code></b> mail subsystem   <b><code>LOG_NEWS</code></b> USENET news subsystem   <b><code>LOG_SYSLOG</code></b> messages generated internally by syslogd   <b><code>LOG_USER</code></b> generic user-level messages   <b><code>LOG_UUCP</code></b> UUCP subsystem    <p><b>Note</b>:</p><p><b><code>LOG_USER</code></b> is the only valid log type under Windows operating systems</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openlog.php
	 * @see syslog(), closelog()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function openlog(string $ident, int $option, int $facility): bool {}

	/**
	 * Open persistent Internet or Unix domain socket connection
	 * <p>This function behaves exactly as <code>fsockopen()</code> with the difference that the connection is not closed after the script finishes. It is the persistent version of <code>fsockopen()</code>.</p>
	 * @param string $hostname
	 * @param int $port
	 * @param int $errno
	 * @param string $errstr
	 * @param float $timeout
	 * @return resource
	 * @link https://php.net/manual/en/function.pfsockopen.php
	 * @see fsockopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pfsockopen(string $hostname, int $port = -1, int &$errno = NULL, string &$errstr = NULL, float $timeout  = 'ini_get("default_socket_timeout")') {}

	/**
	 * Send a cookie
	 * <p><b>setcookie()</b> defines a cookie to be sent along with the rest of the HTTP headers. Like other headers, cookies must be sent <i>before</i> any output from your script (this is a protocol restriction). This requires that you place calls to this function prior to any output, including <code>&lt;html&gt;</code> and <code>&lt;head&gt;</code> tags as well as any whitespace.</p><p>Once the cookies have been set, they can be accessed on the next page load with the $_COOKIE array. Cookie values may also exist in $_REQUEST.</p>
	 * @param string $name <p>The name of the cookie.</p>
	 * @param string $value <p>The value of the cookie. This value is stored on the clients computer; do not store sensitive information. Assuming the <code>name</code> is <code>'cookiename'</code>, this value is retrieved through $_COOKIE['cookiename']</p>
	 * @param int $expires <p>The time the cookie expires. This is a Unix timestamp so is in number of seconds since the epoch. In other words, you'll most likely set this with the <code>time()</code> function plus the number of seconds before you want it to expire. Or you might use <code>mktime()</code>. <code>time()+60&#42;60&#42;24&#42;30</code> will set the cookie to expire in 30 days. If set to 0, or omitted, the cookie will expire at the end of the session (when the browser closes).</p> <p></p><p><b>Note</b>:</p><p>You may notice the <code>expires</code> parameter takes on a Unix timestamp, as opposed to the date format <code>Wdy, DD-Mon-YYYY HH:MM:SS GMT</code>, this is because PHP does this conversion internally.</p>
	 * @param string $path <p>The path on the server in which the cookie will be available on. If set to <code>'/'</code>, the cookie will be available within the entire <code>domain</code>. If set to <code>'/foo/'</code>, the cookie will only be available within the <code>/foo/</code> directory and all sub-directories such as <code>/foo/bar/</code> of <code>domain</code>. The default value is the current directory that the cookie is being set in.</p>
	 * @param string $domain <p>The (sub)domain that the cookie is available to. Setting this to a subdomain (such as <code>'www.example.com'</code>) will make the cookie available to that subdomain and all other sub-domains of it (i.e. w2.www.example.com). To make the cookie available to the whole domain (including all subdomains of it), simply set the value to the domain name (<code>'example.com'</code>, in this case).</p> <p>Older browsers still implementing the deprecated RFC 2109 may require a leading <code>.</code> to match all subdomains.</p>
	 * @param bool $secure <p>Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to <b><code>TRUE</code></b>, the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie only on secure connection (e.g. with respect to $_SERVER["HTTPS"]).</p>
	 * @param bool $httponly <p>When <b><code>TRUE</code></b> the cookie will be made accessible only through the HTTP protocol. This means that the cookie won't be accessible by scripting languages, such as JavaScript. It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks (although it is not supported by all browsers), but that claim is often disputed. <b><code>TRUE</code></b> or <b><code>FALSE</code></b></p>
	 * @return bool <p>If output exists prior to calling this function, <b>setcookie()</b> will fail and return <b><code>FALSE</code></b>. If <b>setcookie()</b> successfully runs, it will return <b><code>TRUE</code></b>. This does not indicate whether the user accepted the cookie.</p>
	 * @link https://php.net/manual/en/function.setcookie.php
	 * @see header(), setrawcookie()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function setcookie(string $name, string $value = "", int $expires = 0, string $path = "", string $domain = "", bool $secure = FALSE, bool $httponly = FALSE): bool {}

	/**
	 * Send a cookie without urlencoding the cookie value
	 * <p><b>setrawcookie()</b> is exactly the same as <code>setcookie()</code> except that the cookie value will not be automatically urlencoded when sent to the browser.</p>
	 * @param string $name
	 * @param string $value
	 * @param int $expires
	 * @param string $path
	 * @param string $domain
	 * @param bool $secure
	 * @param bool $httponly
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.setrawcookie.php
	 * @see setcookie()
	 * @since PHP 5, PHP 7
	 */
	function setrawcookie(string $name, string $value = NULL, int $expires = 0, string $path = NULL, string $domain = NULL, bool $secure = FALSE, bool $httponly = FALSE): bool {}

	/**
	 * Alias of stream_get_meta_data()
	 * <p>This function is an alias of: <code>stream_get_meta_data()</code>.</p>
	 * @param resource $stream <p>The stream can be any stream created by <code>fopen()</code>, <code>fsockopen()</code> and <code>pfsockopen()</code>.</p>
	 * @return array
	 * @link https://php.net/manual/en/function.socket-get-status.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function socket_get_status($stream): array {}

	/**
	 * Alias of stream_set_blocking()
	 * <p>This function is an alias of: <code>stream_set_blocking()</code>.</p>
	 * @param resource $stream <p>The stream.</p>
	 * @param bool $mode <p>If <code>mode</code> is <b><code>FALSE</code></b>, the given stream will be switched to non-blocking mode, and if <b><code>TRUE</code></b>, it will be switched to blocking mode. This affects calls like <code>fgets()</code> and <code>fread()</code> that read from the stream. In non-blocking mode an <code>fgets()</code> call will always return right away while in blocking mode it will wait for data to become available on the stream.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.socket-set-blocking.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function socket_set_blocking($stream, bool $mode): bool {}

	/**
	 * Alias of stream_set_timeout()
	 * <p>This function is an alias of: <code>stream_set_timeout()</code>.</p>
	 * @param resource $stream <p>The target stream.</p>
	 * @param int $seconds <p>The seconds part of the timeout to be set.</p>
	 * @param int $microseconds <p>The microseconds part of the timeout to be set.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.socket-set-timeout.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function socket_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

	/**
	 * Generate a system log message
	 * <p><b>syslog()</b> generates a log message that will be distributed by the system logger.</p><p>For information on setting up a user defined log handler, see the syslog.conf (5) Unix manual page. More information on the syslog facilities and option can be found in the man pages for syslog (3) on Unix machines.</p>
	 * @param int $priority <p><code>priority</code> is a combination of the facility and the level. Possible values are:</p> <b><b>syslog()</b> Priorities (in descending order)</b>   Constant Description     <b><code>LOG_EMERG</code></b> system is unusable   <b><code>LOG_ALERT</code></b> action must be taken immediately   <b><code>LOG_CRIT</code></b> critical conditions   <b><code>LOG_ERR</code></b> error conditions   <b><code>LOG_WARNING</code></b> warning conditions   <b><code>LOG_NOTICE</code></b> normal, but significant, condition   <b><code>LOG_INFO</code></b> informational message   <b><code>LOG_DEBUG</code></b> debug-level message
	 * @param string $message <p>The message to send, except that the two characters <code>%m</code> will be replaced by the error message string (strerror) corresponding to the present value of errno.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.syslog.php
	 * @see openlog(), closelog()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function syslog(int $priority, string $message): bool {}

	/**
	 * IPv4 Address Resource
	 */
	define('DNS_A', 1);

	/**
	 * IPv6 Address Resource
	 */
	define('DNS_AAAA', 134217728);

	/**
	 * Iteratively query the name server for each available record type.
	 */
	define('DNS_ALL', 251721779);

	/**
	 * Any Resource Record. On most systems this returns all resource records, however it should not be counted upon for critical uses. Try <b><code>DNS_ALL</code></b> instead.
	 */
	define('DNS_ANY', 268435456);

	/**
	 * Certification Authority Authorization Resource (available as of PHP 7.0.16 and 7.1.2)
	 */
	define('DNS_CAA', 8192);

	/**
	 * Alias (Canonical Name) Resource
	 */
	define('DNS_CNAME', 16);

	/**
	 * Host Info Resource (See IANA's <code>Operating System Names</code> for the meaning of these values)
	 */
	define('DNS_HINFO', 4096);

	/**
	 * Mail Exchanger Resource
	 */
	define('DNS_MX', 16384);

	/**
	 * Authoritative Name Server Resource
	 */
	define('DNS_NS', 2);

	/**
	 * Pointer Resource
	 */
	define('DNS_PTR', 2048);

	/**
	 * Start of Authority Resource
	 */
	define('DNS_SOA', 32);

	/**
	 * Text Resource
	 */
	define('DNS_TXT', 32768);

	/**
	 * action must be taken immediately
	 */
	define('LOG_ALERT', 1);

	/**
	 * security/authorization messages (use <b><code>LOG_AUTHPRIV</code></b> instead in systems where that constant is defined)
	 */
	define('LOG_AUTH', 32);

	/**
	 * security/authorization messages (private)
	 */
	define('LOG_AUTHPRIV', 80);

	/**
	 * if there is an error while sending data to the system logger, write directly to the system console
	 */
	define('LOG_CONS', 2);

	/**
	 * critical conditions
	 */
	define('LOG_CRIT', 2);

	/**
	 * clock daemon (cron and at)
	 */
	define('LOG_CRON', 72);

	/**
	 * other system daemons
	 */
	define('LOG_DAEMON', 24);

	/**
	 * debug-level message
	 */
	define('LOG_DEBUG', 7);

	/**
	 * system is unusable
	 */
	define('LOG_EMERG', 0);

	/**
	 * error conditions
	 */
	define('LOG_ERR', 3);

	/**
	 * informational message
	 */
	define('LOG_INFO', 6);

	/**
	 * kernel messages
	 */
	define('LOG_KERN', 0);

	define('LOG_LOCAL0', 128);

	/**
	 * line printer subsystem
	 */
	define('LOG_LPR', 48);

	/**
	 * mail subsystem
	 */
	define('LOG_MAIL', 16);

	/**
	 * open the connection to the logger immediately
	 */
	define('LOG_NDELAY', 8);

	/**
	 * USENET news subsystem
	 */
	define('LOG_NEWS', 56);

	/**
	 * normal, but significant, condition
	 */
	define('LOG_NOTICE', 5);

	define('LOG_NOWAIT', 16);

	/**
	 * (default) delay opening the connection until the first message is logged
	 */
	define('LOG_ODELAY', 4);

	/**
	 * print log message also to standard error
	 */
	define('LOG_PERROR', 32);

	/**
	 * include PID with each message
	 */
	define('LOG_PID', 1);

	/**
	 * messages generated internally by syslogd
	 */
	define('LOG_SYSLOG', 40);

	/**
	 * generic user-level messages
	 */
	define('LOG_USER', 8);

	/**
	 * UUCP subsystem
	 */
	define('LOG_UUCP', 64);

	/**
	 * warning conditions
	 */
	define('LOG_WARNING', 4);

}
