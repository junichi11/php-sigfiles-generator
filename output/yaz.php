<?php



namespace {

	/**
	 * Returns additional error information
	 * <p>Returns additional error information for the last request on the server.</p><p>With some servers, this function may return the same string as <code>yaz_error()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @return string <p>A string containing additional error information or an empty string if the last operation was successful or if no additional information was provided by the server.</p>
	 * @link http://php.net/manual/en/function.yaz-addinfo.php
	 * @see yaz_error(), yaz_errno()
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_addinfo($id): string {}

	/**
	 * Configure CCL parser
	 * <p>This function configures the CCL query parser for a server with definitions of access points (CCL qualifiers) and their mapping to RPN.</p><p>To map a specific CCL query to RPN afterwards call the <code>yaz_ccl_parse()</code> function.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param array $config <p>An array of configuration. Each key of the array is the name of a CCL field and the corresponding value holds a string that specifies a mapping to RPN.</p> <p>The mapping is a sequence of attribute-type, attribute-value pairs. Attribute-type and attribute-value is separated by an equal sign (<code>=</code>). Each pair is separated by white space.</p> <p>Additional information can be found on the CCL page.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-ccl-conf.php
	 * @see yaz_ccl_parse()
	 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
	 */
	function yaz_ccl_conf($id, array $config): void {}

	/**
	 * Invoke CCL Parser
	 * <p>This function invokes a CCL parser. It converts a given CCL FIND query to an RPN query which may be passed to the <code>yaz_search()</code> function to perform a search.</p><p>To define a set of valid CCL fields call <code>yaz_ccl_conf()</code> prior to this function.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $query <p>The CCL FIND query.</p>
	 * @param array $result <p>If the function was executed successfully, this will be an array containing the valid RPN query under the key <code>rpn</code>.</p> <p>Upon failure, three indexes are set in this array to indicate the cause of failure:</p><ul> <li> <p><code>errorcode</code> - the CCL error code (integer)</p> </li> <li> <p><code>errorstring</code> - the CCL error string</p> </li> <li> <p><code>errorpos</code> - approximate position in query of failure (integer is character position)</p> </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-ccl-parse.php
	 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
	 */
	function yaz_ccl_parse($id, string $query, array &$result): bool {}

	/**
	 * Close YAZ connection
	 * <p>Closes the connection given by parameter <code>id</code>.</p><p><b>Note</b>:</p><p>This function will only close a non-persistent connection opened by setting the <code>persistent</code> option to <b><code>FALSE</code></b> with <code>yaz_connect()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-close.php
	 * @see yaz_connect()
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_close($id): bool {}

	/**
	 * Prepares for a connection to a Z39.50 server
	 * <p>This function returns a connection resource on success, zero on failure.</p><p><b>yaz_connect()</b> prepares for a connection to a Z39.50 server. This function is non-blocking and does not attempt to establish a connection - it merely prepares a connect to be performed later when <code>yaz_wait()</code> is called.</p><p><b>Note</b>:</p><p>The YAZ proxy is a freely available Z39.50 proxy.</p>
	 * @param string $zurl <p>A string that takes the form <code>host[:port][/database]</code>. If port is omitted, port 210 is used. If database is omitted <code>Default</code> is used.</p>
	 * @param mixed $options <p>If given as a string, it is treated as the Z39.50 V2 authentication string (OpenAuth).</p> <p>If given as an array, the contents of the array serves as options.</p>  user  <p>Username for authentication.</p>   group  <p>Group for authentication.</p>   password  <p>Password for authentication.</p>   cookie  <p>Cookie for session (YAZ proxy).</p>   proxy  <p>Proxy for connection (YAZ proxy).</p>   persistent  <p>A boolean. If <b><code>TRUE</code></b> the connection is persistent; If <b><code>FALSE</code></b> the connection is not persistent. By default connections are persistent.</p> <p><b>Note</b>:</p><p>If you open a persistent connection, you won't be able to close it later with <code>yaz_close()</code>.</p>    piggyback  <p>A boolean. If <b><code>TRUE</code></b> piggyback is enabled for searches; If <b><code>FALSE</code></b> piggyback is disabled. By default piggyback is enabled.</p> <p>Enabling piggyback is more efficient and usually saves a network-round-trip for first time fetches of records. However, a few Z39.50 servers do not support piggyback or they ignore element set names. For those, piggyback should be disabled.</p>   charset  <p>A string that specifies character set to be used in Z39.50 language and character set negotiation. Use strings such as: <code>ISO-8859-1</code>, <code>UTF-8</code>, <code>UTF-16</code>.</p> <p>Most Z39.50 servers do not support this feature (and thus, this is ignored). Many servers use the ISO-8859-1 encoding for queries and messages. MARC21/USMARC records are not affected by this setting.</p>   preferredMessageSize  <p>An integer that specifies the maximum byte size of all records to be returned by a target during retrieval. See the Z39.50 standard for more information.</p> <p><b>Note</b>:</p><p>This option is supported in PECL YAZ 1.0.5 or later.</p>    maximumRecordSize  <p>An integer that specifies the maximum byte size of a single record to be returned by a target during retrieval. This entity is referred to as Exceptional-record-size in the Z39.50 standard.</p> <p><b>Note</b>:</p><p>This option is supported in PECL YAZ 1.0.5 or later.</p>
	 * @return mixed <p>A connection resource on success, <b><code>FALSE</code></b> on error.</p>
	 * @link http://php.net/manual/en/function.yaz-connect.php
	 * @see yaz_close()
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_connect(string $zurl, $options = NULL) {}

	/**
	 * Specifies the databases within a session
	 * <p>This function allows you to change databases within a session by specifying one or more databases to be used in search, retrieval, etc. - overriding databases specified in call to <code>yaz_connect()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $databases <p>A string containing one or more databases. Multiple databases are separated by a plus sign <code>+</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-database.php
	 * @since PHP 4 >= 4.0.6, PECL yaz >= 0.9.0
	 */
	function yaz_database($id, string $databases): bool {}

	/**
	 * Specifies Element-Set Name for retrieval
	 * <p>This function sets the element set name for retrieval.</p><p>Call this function before <code>yaz_search()</code> or <code>yaz_present()</code> to specify the element set name for records to be retrieved.</p><p><b>Note</b>:</p><p>If this function appears to have no effect, see the description of the <code>piggybacking</code> option in <code>yaz_connect()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $elementset <p>Most servers support <code>F</code> (for full records) and <code>B</code> (for brief records).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-element.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_element($id, string $elementset): bool {}

	/**
	 * Returns error number
	 * <p>Returns an error number for the server (last request) identified by <code>id</code>.</p><p><b>yaz_errno()</b> should be called after network activity for each server - (after <code>yaz_wait()</code> returns) to determine the success or failure of the last operation (e.g. search).</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @return int <p>Returns an error code. The error code is either a Z39.50 diagnostic code (usually a Bib-1 diagnostic) or a client side error code which is generated by PHP/YAZ itself, such as "Connect failed", "Init Rejected", etc.</p>
	 * @link http://php.net/manual/en/function.yaz-errno.php
	 * @see yaz_error(), yaz_addinfo()
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_errno($id): int {}

	/**
	 * Returns error description
	 * <p><b>yaz_error()</b> returns an English text message corresponding to the last error number as returned by <code>yaz_errno()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @return string <p>Returns an error text message for server (last request), identified by parameter <code>id</code>. An empty string is returned if the last operation was successful.</p>
	 * @link http://php.net/manual/en/function.yaz-error.php
	 * @see yaz_errno(), yaz_addinfo()
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_error($id): string {}

	/**
	 * Prepares for an Extended Service Request
	 * <p>This function prepares for an Extended Service Request. Extended Services is family of various Z39.50 facilities, such as Record Update, Item Order, Database administration etc.</p><p><b>Note</b>:</p><p>Many Z39.50 Servers do not support Extended Services.</p><p>The <b>yaz_es()</b> creates an Extended Service Request packages and puts it into a queue of operations. Use <code>yaz_wait()</code> to send the request(s) to the server. After completion of <code>yaz_wait()</code> the result of the Extended Service operation should be expected with a call to <code>yaz_es_result()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $type <p>A string which represents the type of the Extended Service: <code>itemorder</code> (Item Order), <code>create</code> (Create Database), <code>drop</code> (Drop Database), <code>commit</code> (Commit Operation), <code>update</code> (Update Record), <code>xmlupdate</code> (XML Update). Each type is specified in the following section.</p>
	 * @param array $args <p>An array with extended service options plus package specific options. The options are identical to those offered in the C API of ZOOM C. Refer to the ZOOM Extended Services.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-es.php
	 * @see yaz_es_result()
	 * @since PECL yaz >= 0.9.0
	 */
	function yaz_es($id, string $type, array $args): void {}

	/**
	 * Inspects Extended Services Result
	 * <p>This function inspects the last returned Extended Service result from a server. An Extended Service is initiated by either <b>yaz_item_order()</b> or <code>yaz_es()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @return array <p>Returns array with element <code>targetReference</code> for the reference for the extended service operation (generated and returned from the server).</p>
	 * @link http://php.net/manual/en/function.yaz-es-result.php
	 * @see yaz_es()
	 * @since PHP 4 >= 4.2.0, PECL yaz >= 0.9.0
	 */
	function yaz_es_result($id): array {}

	/**
	 * Returns value of option for connection
	 * <p>Returns the value of the option specified with <code>name</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $name <p>The option name.</p>
	 * @return string <p>Returns the value of the specified option or an empty string if the option wasn't set.</p>
	 * @link http://php.net/manual/en/function.yaz-get-option.php
	 * @see yaz_set_option()
	 * @since PECL yaz >= 0.9.0
	 */
	function yaz_get_option($id, string $name): string {}

	/**
	 * Returns number of hits for last search
	 * <p><b>yaz_hits()</b> returns the number of hits for the last search.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param array $searchresult <p>Result array for detailed search result information.</p>
	 * @return int <p>Returns the number of hits for the last search or 0 if no search was performed.</p><p>The search result array (if supplied) holds information that is returned by a Z39.50 server in the SearchResult-1 format part of a search response. The SearchResult-1 format can be used to obtain information about hit counts for various parts of the query (subquery). In particular, it is possible to obtain hit counts for the individual search terms in a query. Information for first subquery is in $array[0], second subquery in $array[1], and so forth.</p> <b>searchresult members</b>     Element Description     <code>id</code> Sub query ID2 (string)   <code>count</code> Result count / hits (integer)   <code>subquery.term</code> Sub query term (string)   <code>interpretation.term</code> Interpretated sub query term (string)   <code>recommendation.term</code> Recommended sub query term (string)   <p><b>Note</b>:</p><p>The SearchResult facility requires PECL YAZ 1.0.5 or later and YAZ 2.1.9 or later.</p> <p><b>Note</b>:</p><p>Very few Z39.50 implementations support the SearchResult facility.</p>
	 * @link http://php.net/manual/en/function.yaz-hits.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_hits($id, array &$searchresult = NULL): int {}

	/**
	 * Prepares for Z39.50 Item Order with an ILL-Request package
	 * <p>This function prepares for an Extended Services request using the Profile for the Use of Z39.50 Item Order Extended Service to Transport ILL (Profile/1). See this and the specification.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param array $args <p>Must be an associative array with information about the Item Order request to be sent. The key of the hash is the name of the corresponding ASN.1 tag path. For example, the ISBN below the Item-ID has the key item-id,ISBN.</p> <p>The ILL-Request parameters are:</p> <pre> protocol-version-num transaction-id,initial-requester-id,person-or-institution-symbol,person transaction-id,initial-requester-id,person-or-institution-symbol,institution transaction-id,initial-requester-id,name-of-person-or-institution,name-of-person transaction-id,initial-requester-id,name-of-person-or-institution,name-of-institution transaction-id,transaction-group-qualifier transaction-id,transaction-qualifier transaction-id,sub-transaction-qualifier service-date-time,this,date service-date-time,this,time service-date-time,original,date service-date-time,original,time requester-id,person-or-institution-symbol,person requester-id,person-or-institution-symbol,institution requester-id,name-of-person-or-institution,name-of-person requester-id,name-of-person-or-institution,name-of-institution responder-id,person-or-institution-symbol,person responder-id,person-or-institution-symbol,institution responder-id,name-of-person-or-institution,name-of-person responder-id,name-of-person-or-institution,name-of-institution transaction-type delivery-address,postal-address,name-of-person-or-institution,name-of-person delivery-address,postal-address,name-of-person-or-institution,name-of-institution delivery-address,postal-address,extended-postal-delivery-address delivery-address,postal-address,street-and-number delivery-address,postal-address,post-office-box delivery-address,postal-address,city delivery-address,postal-address,region delivery-address,postal-address,country delivery-address,postal-address,postal-code delivery-address,electronic-address,telecom-service-identifier delivery-address,electronic-address,telecom-service-addreess billing-address,postal-address,name-of-person-or-institution,name-of-person billing-address,postal-address,name-of-person-or-institution,name-of-institution billing-address,postal-address,extended-postal-delivery-address billing-address,postal-address,street-and-number billing-address,postal-address,post-office-box billing-address,postal-address,city billing-address,postal-address,region billing-address,postal-address,country billing-address,postal-address,postal-code billing-address,electronic-address,telecom-service-identifier billing-address,electronic-address,telecom-service-addreess ill-service-type requester-optional-messages,can-send-RECEIVED requester-optional-messages,can-send-RETURNED requester-optional-messages,requester-SHIPPED requester-optional-messages,requester-CHECKED-IN search-type,level-of-service search-type,need-before-date search-type,expiry-date search-type,expiry-flag place-on-hold client-id,client-name client-id,client-status client-id,client-identifier item-id,item-type item-id,call-number item-id,author item-id,title item-id,sub-title item-id,sponsoring-body item-id,place-of-publication item-id,publisher item-id,series-title-number item-id,volume-issue item-id,edition item-id,publication-date item-id,publication-date-of-component item-id,author-of-article item-id,title-of-article item-id,pagination item-id,ISBN item-id,ISSN item-id,additional-no-letters item-id,verification-reference-source copyright-complicance retry-flag forward-flag requester-note forward-note </pre> <p>There are also a few parameters that are part of the Extended Services Request package and the ItemOrder package:</p> <pre> package-name user-id contact-name contact-phone contact-email itemorder-item </pre>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-itemorder.php
	 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
	 */
	function yaz_itemorder($id, array $args): void {}

	/**
	 * Prepares for retrieval (Z39.50 present)
	 * <p>This function prepares for retrieval of records after a successful search.</p><p>The <code>yaz_range()</code> function should be called prior to this function to specify the range of records to be retrieved.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-present.php
	 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
	 */
	function yaz_present($id): bool {}

	/**
	 * Specifies a range of records to retrieve
	 * <p>Specifies a range of records to retrieve.</p><p>This function should be called before <code>yaz_search()</code> or <code>yaz_present()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param int $start <p>Specifies the position of the first record to be retrieved. The records numbers goes from 1 to <code>yaz_hits()</code>.</p>
	 * @param int $number <p>Specifies the number of records to be retrieved.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-range.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_range($id, int $start, int $number): void {}

	/**
	 * Returns a record
	 * <p>The <b>yaz_record()</b> function inspects a record in the current result set at the position specified by parameter <code>pos</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param int $pos <p>The record position. Records positions in a result set are numbered 1, 2, ... $hits where $hits is the count returned by <code>yaz_hits()</code>.</p>
	 * @param string $type <p>The <code>type</code> specifies the form of the returned record.</p> <p><b>Note</b>:</p><p>It is the application which is responsible for actually ensuring that the records are returned from the Z39.50/SRW server in the proper format. The type given only specifies a conversion to take place on the client side (in PHP/YAZ).</p>  <p>Besides conversion of the transfer record to a string/array, PHP/YAZ it is also possible to perform a character set conversion of the record. Especially for USMARC/MARC21 that is recommended since these are typically returned in the character set MARC-8 that is not supported by browsers, etc. To specify a conversion, add <code>; charset=</code>from<code>, </code>to where from is the original character set of the record and to is the resulting character set (as seen by PHP).</p>   <code>string</code>  <p>The record is returned as a string for simple display. In this mode, all MARC records are converted to a line-by-line format since ISO2709 is hardly readable. XML records and SUTRS are returned in their original format. GRS-1 are returned in a (ugly) line-by-line format.</p> <p>This format is suitable if records are to be displayed in a quick way - for debugging - or because it is not feasible to perform proper display.</p>   <code>xml</code>  <p>The record is returned as an XML string if possible. In this mode, all MARC records are converted to MARCXML. XML records and SUTRS are returned in their original format. GRS-1 is not supported.</p> <p>This format is similar to <code>string</code> except that MARC records are converted to MARCXML</p> <p>This format is suitable if records are processed by an XML parser or XSLT processor afterwards.</p>   <code>raw</code>  <p>The record is returned as a string in its original form. This type is suitable for MARC, XML and SUTRS. It does not work for GRS-1.</p> <p>MARC records are returned as a ISO2709 string. XML and SUTRS are returned as strings.</p>   <code>syntax</code>  <p>The syntax of the record is returned as a string, i.e. <code>USmarc</code>, <code>GRS-1</code>, <code>XML</code>, etc.</p>   <code>database</code>  <p>The name of database associated with record at the position is returned as a string.</p>   <code>array</code>  <p>The record is returned as an array that reflects the GRS-1 structure. This type is suitable for MARC and GRS-1. XML, SUTRS are not supported and if the actual record is XML or SUTRS an empty string will be returned.</p> <p>The array returned consists of a list corresponding to each leaf/internal node of GRS-1. Each list item consists a sub list with first element <i>path</i> and <i>data</i> (if data is available).</p> <p>The path which is a string holds a list of each tree component (of the structured GRS-1 record) from root to leaf. Each component is a tag type, tag value pair of the form <code>(</code>type<code>,</code> value</p> <p>String tags normally has a corresponding tag type 3. MARC can also be returned as an array (they are converted to GRS-1 internally).</p>
	 * @return string <p>Returns the record at position <code>pos</code> or an empty string if no record exists at the given position.</p><p>If no database record exists at the given position an empty string is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-record.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_record($id, int $pos, string $type): string {}

	/**
	 * Prepares for a scan
	 * <p>This function prepares for a Z39.50 Scan Request on the specified connection.</p><p>To actually transfer the Scan Request to the server and receive the Scan Response, <code>yaz_wait()</code> must be called. Upon completion of <code>yaz_wait()</code> call <code>yaz_error()</code> and <code>yaz_scan_result()</code> to handle the response.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $type <p>Currently only type <code>rpn</code> is supported.</p>
	 * @param string $startterm <p>Starting term point for the scan.</p> <p>The form in which the starting term is specified is given by parameter <code>type</code>.</p> <p>The syntax this parameter is similar to the RPN query as described in <code>yaz_search()</code>. It consists of zero or more <code>@attr</code>-operator specifications, then followed by exactly one token.</p>
	 * @param array $flags <p>This optional parameter specifies additional information to control the behaviour of the scan request. Three indexes are currently read from the flags array: <code>number</code> (number of terms requested), <code>position</code> (preferred position of term) and <code>stepSize</code> (preferred step size).</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-scan.php
	 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
	 */
	function yaz_scan($id, string $type, string $startterm, array $flags = NULL): void {}

	/**
	 * Returns Scan Response result
	 * <p><b>yaz_scan_result()</b> returns terms and associated information as received from the server in the last performed <code>yaz_scan()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param array $result <p>If given, this array will be modified to hold additional information taken from the Scan Response:</p><ul> <li> <p><code>number</code> - Number of entries returned</p> </li> <li> <p><code>stepsize</code> - Step size</p> </li> <li> <p><code>position</code> - Position of term</p> </li> <li> <p><code>status</code> - Scan status</p> </li> </ul>
	 * @return array <p>Returns an array (0..n-1) where n is the number of terms returned. Each value is a pair where the first item is the term, and the second item is the result-count.</p>
	 * @link http://php.net/manual/en/function.yaz-scan-result.php
	 * @since PHP 4 >= 4.0.5, PECL yaz >= 0.9.0
	 */
	function yaz_scan_result($id, array &$result = NULL): array {}

	/**
	 * Specifies schema for retrieval
	 * <p><b>yaz_schema()</b> specifies the schema for retrieval.</p><p>This function should be called before <code>yaz_search()</code> or <code>yaz_present()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $schema <p>Must be specified as an OID (Object Identifier) in a raw dot-notation (like <code>1.2.840.10003.13.4</code>) or as one of the known registered schemas: <code>GILS-schema</code>, <code>Holdings</code>, <code>Zthes</code>, ...</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-schema.php
	 * @since PHP 4 >= 4.2.0, PECL yaz >= 0.9.0
	 */
	function yaz_schema($id, string $schema): void {}

	/**
	 * Prepares for a search
	 * <p><b>yaz_search()</b> prepares for a search on the given connection.</p><p>Like <code>yaz_connect()</code> this function is non-blocking and only prepares for a search to be executed later when <code>yaz_wait()</code> is called.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $type <p>This parameter represents the query type - only <code>"rpn"</code> is supported now in which case the third argument specifies a Type-1 query in prefix query notation.</p>
	 * @param string $query <p>The RPN query is a textual representation of the Type-1 query as defined by the Z39.50 standard. However, in the text representation as used by YAZ a prefix notation is used, that is the operator precedes the operands. The query string is a sequence of tokens where white space is ignored unless surrounded by double quotes. Tokens beginning with an at-character (<code>@</code>) are considered operators, otherwise they are treated as search terms.</p>  <b>RPN Operators</b>     Construct Description     <code>@and</code> query1 query2 intersection of query1 and query2   <code>@or</code> query1 query2 union of query1 and query2   <code>@not</code> query1 query2 query1 and not query2   <code>@set</code> name result set reference   <code>@attrset</code> set query  specifies attribute-set for query. This construction is only allowed once - in the beginning of the whole query    <code>@attr</code> [set] type=value query  applies attribute to query. The type and value are integers specifying the attribute-type and attribute-value respectively. The set, if given, specifies the attribute-set.     <p>You can find information about attributes at the Z39.50 Maintenance Agency site.</p> <p><b>Note</b>:</p><p>If you would like to use a more friendly notation, use the CCL parser - functions <code>yaz_ccl_conf()</code> and <code>yaz_ccl_parse()</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-search.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_search($id, string $type, string $query): bool {}

	/**
	 * Sets one or more options for connection
	 * <p>Sets one or more options on the given connection.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $name <p>May be either a string or an array.</p> <p>If given as a string, this will be the name of the option to set. You'll need to give it's <code>value</code>.</p> <p>If given as an array, this will be an associative array (option name =&gt; option value).</p>  <b>PHP/YAZ Connection Options</b>     Name Description     implementationName implementation name of server   implementationVersion implementation version of server   implementationId implementation ID of server   schema  schema for retrieval. By default, no schema is used. Setting this option is equivalent to using function <code>yaz_schema()</code>    preferredRecordSyntax  record syntax for retrieval. By default, no syntax is used. Setting this option is equivalent to using function <code>yaz_syntax()</code>    start  offset for first record to be retrieved via <code>yaz_search()</code> or <code>yaz_present()</code>. First record is numbered has a start value of 0. Second record has start value 1. Setting this option in combination with option <code>count</code> has the same effect as calling <code>yaz_range()</code> except that records are numbered from 1 in <code>yaz_range()</code>    count maximum number of records to be retrieved via <code>yaz_search()</code> or <code>yaz_present()</code>.    elementSetName element-set-name for retrieval. Setting this option is equivalent to calling <code>yaz_element()</code>.
	 * @param string $value <p>The new value of the option. Use this only if the previous argument is a string.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-set-option.php
	 * @since PECL yaz >= 0.9.0
	 */
	function yaz_set_option($id, string $name, string $value): void {}

	/**
	 * Sets sorting criteria
	 * <p>This function sets sorting criteria and enables Z39.50 Sort.</p><p>Call this function <i>before</i> <code>yaz_search()</code>. Using this function alone does not have any effect. When used in conjunction with <code>yaz_search()</code>, a Z39.50 Sort will be sent after a search response has been received and before any records are retrieved with Z39.50 Present (<code>yaz_present()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $criteria <p>A string that takes the form field1 flags1 field2 flags2 where field1 specifies the primary attributes for sort, field2 seconds, etc..</p> <p>The field specifies either a numerical attribute combinations consisting of type=value pairs separated by comma (e.g. <code>1=4,2=1</code>) ; or the field may specify a plain string criteria (e.g. <code>title</code>. The flags is a sequence of the following characters which may not be separated by any white space.</p> <p></p> <b>Sort Flags</b>  <code>a</code>  <p>Sort ascending</p>   <code>d</code>  <p>Sort descending</p>   <code>i</code>  <p>Case insensitive sorting</p>   <code>s</code>  <p>Case sensitive sorting</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-sort.php
	 * @since PHP 4 >= 4.0.7, PECL yaz >= 0.9.0
	 */
	function yaz_sort($id, string $criteria): void {}

	/**
	 * Specifies the preferred record syntax for retrieval
	 * <p><b>yaz_syntax()</b> specifies the preferred record syntax for retrieval</p><p>This function should be called before <code>yaz_search()</code> or <code>yaz_present()</code>.</p>
	 * @param resource $id <p>The connection resource returned by <code>yaz_connect()</code>.</p>
	 * @param string $syntax <p>The syntax must be specified as an OID (Object Identifier) in a raw dot-notation (like <code>1.2.840.10003.5.10</code>) or as one of the known registered record syntaxes (sutrs, usmarc, grs1, xml, etc.).</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.yaz-syntax.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_syntax($id, string $syntax): void {}

	/**
	 * Wait for Z39.50 requests to complete
	 * <p>This function carries out networked (blocked) activity for outstanding requests which have been prepared by the functions <code>yaz_connect()</code>, <code>yaz_search()</code>, <code>yaz_present()</code>, <code>yaz_scan()</code> and <code>yaz_itemorder()</code>.</p><p><b>yaz_wait()</b> returns when all servers have either completed all requests or aborted (in case of errors).</p>
	 * @param array $options <p>An associative array of options:</p>  <code>timeout</code>  <p>Sets timeout in seconds. If a server has not responded within the timeout it is considered dead and <b>yaz_wait()</b> returns. The default value for timeout is 15 seconds.</p>   <code>event</code>  <p>A boolean.</p>
	 * @return mixed <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure. In event mode, returns resource or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.yaz-wait.php
	 * @since PHP 4 >= 4.0.1, PECL yaz >= 0.9.0
	 */
	function yaz_wait(array &$options = NULL) {}

}
