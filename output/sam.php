<?php



namespace {

	/**
	 * Automatic behaviour
	 */
	define('SAM_AUTO', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_BOOLEAN', null);

	/**
	 * Connect attribute used to set the name of the enterprise service bus to connect to.
	 */
	define('SAM_BUS', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_BYTE', null);

	/**
	 * Message body type descriptor.
	 */
	define('SAM_BYTES', null);

	/**
	 * Attribute used on receive, send and remove requests to identify specific messages.
	 */
	define('SAM_CORRELID', null);

	/**
	 * Message header property.
	 */
	define('SAM_DELIVERYMODE', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_DOUBLE', null);

	/**
	 * Connect attribute used to define the possible endpoints to connect to.
	 */
	define('SAM_ENDPOINTS', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_FLOAT', null);

	/**
	 * Connect attribute used to set the hostname of the required messaging server.
	 */
	define('SAM_HOST', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_INT', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_LONG', null);

	/**
	 * Manual (script controlled) behaviour
	 */
	define('SAM_MANUAL', null);

	/**
	 * Attribute used on receive and remove requests to identify specific messages.
	 */
	define('SAM_MESSAGEID', null);

	/**
	 * Connect protocol definition for selecting the MQTT (MQ Telemetry Transport) protocol.
	 */
	define('SAM_MQTT', null);

	/**
	 * Optional connect option to indicate to an MQTT server that all previous connection data for this client should be removed and that subscriptions should be deleted when the client disconnects explicitly or unexpectedly.
	 */
	define('SAM_MQTT_CLEANSTART', null);

	/**
	 * Connect attribute value used to request messages are not made persistent on the messaging server.
	 */
	define('SAM_NON_PERSISTENT', null);

	/**
	 * Connect attribute used to define the password to be used for the user account being used to connect to a messaging server that requires authorisation for connections.
	 */
	define('SAM_PASSWORD', null);

	/**
	 * Connect attribute value used to request messages are made persistent on the messaging server to protect against loss of messages in the event of failure.
	 */
	define('SAM_PERSISTENT', null);

	/**
	 * Connect attribute used to set the port number on which to communicate with the messaging server.
	 */
	define('SAM_PORT', null);

	/**
	 * Option name used on send requests to specify a delivery priority value.
	 */
	define('SAM_PRIORITY', null);

	/**
	 * Message property used to specify the queue identity on to which the script expects response or reply messages to be posted.
	 */
	define('SAM_REPLY_TO', null);

	/**
	 * Connect protocol definition for selecting the IBM Realtime Transport protocol for communication with a business integration messaging server.
	 */
	define('SAM_RTT', null);

	/**
	 * Type specifier used when setting properties on SAM_Message objects.
	 */
	define('SAM_STRING', null);

	/**
	 * Connection attribute used to set the required target chain identifier.
	 */
	define('SAM_TARGETCHAIN', null);

	/**
	 * Message body type descriptor.
	 */
	define('SAM_TEXT', null);

	/**
	 * Message send option name used to specify the length of time a message should be retained in milliseconds.
	 */
	define('SAM_TIMETOLIVE', null);

	/**
	 * Connection attribute used to set required transactional behaviour. May be set to SAM_AUTO (default) or SAM_MANUAL.
	 */
	define('SAM_TRANSACTIONS', null);

	/**
	 * Connect attribute used to define the account to being used to connect to a messaging server that requires authorisation for connections.
	 */
	define('SAM_USERID', null);

	/**
	 * Receive property used to specify the wait timeout to be used when receiving a message from a queue or subscription.
	 */
	define('SAM_WAIT', null);

	/**
	 * Connect protocol definition for selecting the IBM WebSphere MQSeries protocol for communication with the desired messaging server.
	 */
	define('SAM_WMQ', null);

	/**
	 * Connect protocol definition for selecting the IBM WebSphere MQSeries protocol for communication with a local messaging server.
	 */
	define('SAM_WMQ_BINDINGS', null);

	/**
	 * Connect protocol definition for selecting the IBM WebSphere MQSeries protocol for communication with a remote messaging server.
	 */
	define('SAM_WMQ_CLIENT', null);

	/**
	 * Option name used on send requests to specify the target client mode. This can either be default to 'jms' or 'mq'. The default is 'jms' which means an RFH2 header is sent with the message whereas the 'mq' setting means no RFH2 is included.
	 */
	define('SAM_WMQ_TARGET_CLIENT', null);

	/**
	 * Connect protocol definition for selecting the IBM WebSphere Platform Messaging protocol for communication with a WebSphere Application Server messaging server.
	 */
	define('SAM_WPM', null);

}
