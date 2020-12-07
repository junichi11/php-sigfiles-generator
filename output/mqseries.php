<?php



namespace {

	/**
	 * MQSeries MQBACK
	 * <p>The <b>mqseries_back()</b> (MQBACK) call indicates to the queue manager that all the message gets and puts that have occurred since the last syncpoint are to be backed out. Messages put as part of a unit of work are deleted; messages retrieved as part of a unit of work are reinstated on the queue.</p><p>Using <b>mqseries_back()</b> only works in conjunction with <code>mqseries_begin()</code> and only function when connecting directly to a Queueu manager. Not via the mqclient interface.</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-back.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_begin()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_back($hconn, &$compCode, &$reason): void {}

	/**
	 * MQseries MQBEGIN
	 * <p>The <b>mqseries_begin()</b> (MQBEGIN) call begins a unit of work that is coordinated by the queue manager, and that may involve external resource managers.</p><p>Using <b>mqseries_begin()</b> starts the unit of work. Either <code>mqseries_back()</code> or <code>mqseries_cmit()</code> ends the unit of work.</p>
	 * @param resource $hconn
	 * @param array $beginOptions
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-begin.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_back(), mqseries_cmit()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_begin($hconn, array $beginOptions, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCLOSE
	 * <p>The <b>mqseries_close()</b> (MQCLOSE) call relinquishes access to an object, and is the inverse of the <code>mqseries_open()</code> (MQOPEN) call.</p>
	 * @param resource $hconn
	 * @param resource $hobj
	 * @param int $options
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-close.php
	 * @see mqseries_open(), mqseries_conn(), mqseries_connx()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_close($hconn, $hobj, int $options, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCMIT
	 * <p>The <b>mqseries_cmit()</b> (MQCMIT) call indicates to the queue manager that the application has reached a syncpoint, and that all of the message gets and puts that have occurred since the last syncpoint are to be made permanent. Messages put as part of a unit of work are made available to other applications; messages retrieved as part of a unit of work are deleted.</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-cmit.php
	 * @see mqseries_begin(), mqseries_back(), mqseries_conn(), mqseries_connx()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_cmit($hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCONN
	 * <p>The <b>mqseries_conn()</b> (MQCONN) call connects an application program to a queue manager. It provides a queue manager connection handle, which is used by the application on subsequent message queuing calls.</p>
	 * @param string $qManagerName <p>Name of queue manager.</p> <p>Name of the queue manager the application wishes to connect.</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-conn.php
	 * @see mqseries_disc()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_conn(string $qManagerName, &$hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQCONNX
	 * <p>The <b>mqseries_connx()</b> (MQCONNX) call connects an application program to a queue manager. It provides a queue manager connection handle, which is used by the application on subsequent MQ calls.</p><p>The <b>mqseries_connx()</b> call is like the <code>mqseries_conn()</code> (MQCONN) call, except that MQCONNX allows options to be specified to control the way that the call works.</p>
	 * @param string $qManagerName <p>Name of queue manager.</p> <p>Name of the queue manager the application wishes to connect.</p>
	 * @param array $connOptions
	 * @param resource $hconn
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-connx.php
	 * @see mqseries_disc()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_connx(string $qManagerName, array &$connOptions, &$hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQDISC
	 * <p>The <b>mqseries_disc()</b> (MQDISC) call breaks the connection between the queue manager and the application program, and is the inverse of the <code>mqseries_conn()</code> (MQCONN) or <code>mqseries_connx()</code> (MQCONNX) call.</p>
	 * @param resource $hconn
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-disc.php
	 * @see mqseries_conn(), mqseries_connx()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_disc($hconn, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQGET
	 * <p>The <b>mqseries_get()</b> (MQGET) call retrieves a message from a local queue that has been opened using the <code>mqseries_open()</code> (MQOPEN) call</p>
	 * @param resource $hConn <p>Connection handle.</p> <p>This handle represents the connection to the queue manager.</p>
	 * @param resource $hObj <p>Object handle.</p> <p>This handle represents the object to be used.</p>
	 * @param array $md <p>Message descriptor (MQMD).</p>
	 * @param array $gmo <p>Get message options (MQGMO).</p>
	 * @param int $bufferLength <p>Expected length of the result buffer</p>
	 * @param string $msg <p>Buffer holding the message that was retrieved from the object.</p>
	 * @param int $data_length <p>Actual buffer length</p>
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-get.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open(), mqseries_put()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_get($hConn, $hObj, array &$md, array &$gmo, int &$bufferLength, string &$msg, int &$data_length, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQINQ
	 * <p>The <b>mqseries_inq()</b> (MQINQ) call returns an array of integers and a set of character strings containing the attributes of an object.</p>
	 * @param resource $hconn
	 * @param resource $hobj
	 * @param int $selectorCount <p>Count of selectors.</p>
	 * @param array $selectors <p>Array of attribute selectors.</p>
	 * @param int $intAttrCount
	 * @param resource $intAttr <p>Array of integer attributes.</p>
	 * @param int $charAttrLength <p>Length of character attributes buffer.</p>
	 * @param resource $charAttr <p>Character attributes.</p>
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-inq.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_inq($hconn, $hobj, int $selectorCount, array $selectors, int $intAttrCount, &$intAttr, int $charAttrLength, &$charAttr, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQOPEN
	 * <p>The <b>mqseries_open()</b> (MQOPEN) call establishes access to an object.</p>
	 * @param resource $hconn
	 * @param array $objDesc <p>Object descriptor. (MQOD)</p>
	 * @param int $option
	 * @param resource $hobj
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-open.php
	 * @see mqseries_close()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_open($hconn, array &$objDesc, int $option, &$hobj, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQPUT
	 * <p>The <b>mqseries_put()</b> (MQPUT) call puts a message on a queue or distribution list. The queue or distribution list must already be open.</p>
	 * @param resource $hConn <p>Connection handle.</p> <p>This handle represents the connection to the queue manager.</p>
	 * @param resource $hObj <p>Object handle.</p> <p>This handle represents the object to be used.</p>
	 * @param array $md <p>Message descriptor (MQMD).</p>
	 * @param array $pmo <p>Put message options (MQPMO).</p>
	 * @param string $message <p>The actual message to put onto the queue.</p>
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-put.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open(), mqseries_get()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_put($hConn, $hObj, array &$md, array &$pmo, string $message, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQPUT1
	 * <p>The <b>mqseries_put1()</b> (MQPUT1) call puts one message on a queue. The queue need not be open.</p><p>You can use both the <code>mqseries_put()</code> and <b>mqseries_put1()</b> calls to put messages on a queue; which call to use depends on the circumstances. Use the <code>mqseries_put()</code> (MQPUT) call to place multiple messages on the same queue. Use the <b>mqseries_put1()</b> (MQPUT1) call to put only one message on a queue. This call encapsulates the MQOPEN, MQPUT, and MQCLOSE calls into a single call, minimizing the number of calls that must be issued.</p>
	 * @param resource $hconn
	 * @param resource $objDesc <p>Object descriptor. (MQOD)</p> <p>This is a structure which identifies the queue to which the message is added.</p>
	 * @param resource $msgDesc <p>Message descriptor (MQMD).</p>
	 * @param resource $pmo <p>Put message options (MQPMO).</p>
	 * @param string $buffer
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-put1.php
	 * @see mqseries_conn(), mqseries_connx(), mqseries_open(), mqseries_get()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_put1($hconn, &$objDesc, &$msgDesc, &$pmo, string $buffer, &$compCode, &$reason): void {}

	/**
	 * MQSeries MQSET
	 * <p>The <b>mqseries_set()</b> (MQSET) call is used to change the attributes of an object represented by a handle. The object must be a queue.</p>
	 * @param resource $hConn <p>Connection handle.</p> <p>This handle represents the connection to the queue manager.</p>
	 * @param resource $hObj <p>Object handle.</p> <p>This handle represents the object to be used.</p>
	 * @param int $selectorCount <p>Count of selectors.</p>
	 * @param array $selectors <p>Array of attribute selectors.</p>
	 * @param int $intAttrCount <p>Count of integer attributes.</p>
	 * @param array $intAttrs <p>Array of integer attributes.</p>
	 * @param int $charAttrLength <p>Length of character attributes buffer.</p>
	 * @param array $charAttrs <p>Character attributes.</p>
	 * @param resource $compCode <p>Completion code.</p>
	 * @param resource $reason <p>Reason code qualifying the compCode.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.mqseries-set.php
	 * @see mqseries_inq()
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_set($hConn, $hObj, int $selectorCount, array $selectors, int $intAttrCount, array $intAttrs, int $charAttrLength, array $charAttrs, &$compCode, &$reason): void {}

	/**
	 * Returns the error message corresponding to a result code (MQRC)
	 * <p><b>mqseries_strerror()</b> returns the message that correspond to the reason result code.</p>
	 * @param int $reason <p>Reason code qualifying the compCode.</p>
	 * @return string <p>string representation of the reason code message.</p>
	 * @link http://php.net/manual/en/function.mqseries-strerror.php
	 * @since PECL mqseries >= 0.10.0
	 */
	function mqseries_strerror(int $reason): string {}

	/**
	 * MQCC_FAILED
	 */
	define('MQSERIES_MQCC_FAILED', null);

	/**
	 * MQCC_OK
	 */
	define('MQSERIES_MQCC_OK', null);

	/**
	 * MQCC_UNKNOWN
	 */
	define('MQSERIES_MQCC_UNKNOWN', null);

	/**
	 * MQCC_WARNING
	 */
	define('MQSERIES_MQCC_WARNING', null);

}
