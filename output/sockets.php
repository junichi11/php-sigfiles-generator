<?php



namespace {

	/**
	 * <p>A fully opaque class which replaces <code>AddressInfo</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.addressinfo.php
	 * @since PHP 8
	 */
	final class AddressInfo {
	}

	/**
	 * <p>A fully opaque class which replaces <code>Socket</code> resources as of PHP 8.0.0.</p>
	 * @link https://php.net/manual/en/class.socket.php
	 * @since PHP 8
	 */
	final class Socket {
	}

	/**
	 * Accepts a connection on a socket
	 * <p>After the socket <code>socket</code> has been created using <code>socket_create()</code>, bound to a name with <code>socket_bind()</code>, and told to listen for connections with <code>socket_listen()</code>, this function will accept incoming connections on that socket. Once a successful connection is made, a new <code>Socket</code> instance is returned, which may be used for communication. If there are multiple connections queued on the socket, the first will be used. If there are no pending connections, <b>socket_accept()</b> will block until a connection becomes present. If <code>socket</code> has been made non-blocking using <code>socket_set_blocking()</code> or <code>socket_set_nonblock()</code>, <b><code>false</code></b> will be returned.</p><p>The <code>Socket</code> instance returned by <b>socket_accept()</b> may not be used to accept new connections. The original listening socket <code>socket</code>, however, remains open and may be reused.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @return Socket|false <p>Returns a new <code>Socket</code> instance on success, or <b><code>false</code></b> on error. The actual error code can be retrieved by calling <code>socket_last_error()</code>. This error code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-accept.php
	 * @see socket_connect(), socket_listen(), socket_create(), socket_bind(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_accept(\Socket $socket): \Socket|false {}

	/**
	 * Create and bind to a socket from a given addrinfo
	 * <p>Create a <code>Socket</code> instance, and bind it to the provided <code>AddressInfo</code>. The return value of this function may be used with <code>socket_listen()</code>.</p>
	 * @param \AddressInfo $address <p><code>AddressInfo</code> instance created from <code>socket_addrinfo_lookup()</code>.</p>
	 * @return Socket|false <p>Returns a <code>Socket</code> instance on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-addrinfo-bind.php
	 * @see socket_addrinfo_connect(), socket_addrinfo_explain(), socket_addrinfo_lookup(), socket_listen()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function socket_addrinfo_bind(\AddressInfo $address): \Socket|false {}

	/**
	 * Create and connect to a socket from a given addrinfo
	 * <p>Create a <code>Socket</code> instance, and connect it to the provided <code>AddressInfo</code> instance. The return value of this function may be used with the rest of the socket functions.</p>
	 * @param \AddressInfo $address <p><code>AddressInfo</code> instance created from <code>socket_addrinfo_lookup()</code></p>
	 * @return Socket|false <p>Returns a <code>Socket</code> instance on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-addrinfo-connect.php
	 * @see socket_addrinfo_bind(), socket_addrinfo_explain(), socket_addrinfo_lookup()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function socket_addrinfo_connect(\AddressInfo $address): \Socket|false {}

	/**
	 * Get information about addrinfo
	 * <p><b>socket_addrinfo_explain()</b> exposed the underlying <code>addrinfo</code> structure.</p>
	 * @param \AddressInfo $address <p><code>AddressInfo</code> instance created from <code>socket_addrinfo_lookup()</code></p>
	 * @return array <p>Returns an array containing the fields in the <code>addrinfo</code> structure.</p>
	 * @link https://php.net/manual/en/function.socket-addrinfo-explain.php
	 * @see socket_addrinfo_bind(), socket_addrinfo_connect(), socket_addrinfo_lookup()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function socket_addrinfo_explain(\AddressInfo $address): array {}

	/**
	 * Get array with contents of getaddrinfo about the given hostname
	 * <p>Lookup different ways we can connect to <code>host</code>. The returned array contains a set of <code>AddressInfo</code> instances that we can bind to using <code>socket_addrinfo_bind()</code>.</p>
	 * @param string $host <p>Hostname to search.</p>
	 * @param ?string $service <p>The service to connect to. If service is a name, it is translated to the corresponding port number.</p>
	 * @param array $hints <p>Hints provide criteria for selecting addresses returned. You may specify the hints as defined by getadrinfo.</p>
	 * @return array|false <p>Returns an array of <code>AddressInfo</code> instances that can be used with the other socket_addrinfo functions. On failure, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.socket-addrinfo-lookup.php
	 * @see socket_addrinfo_bind(), socket_addrinfo_connect(), socket_addrinfo_explain()
	 * @since PHP 7 >= 7.2.0, PHP 8
	 */
	function socket_addrinfo_lookup(string $host, ?string $service = null, array $hints = []): array|false {}

	/**
	 * Binds a name to a socket
	 * <p>Binds the name given in <code>address</code> to the socket described by <code>socket</code>. This has to be done before a connection is be established using <code>socket_connect()</code> or <code>socket_listen()</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @param string $address <p>If the socket is of the <b><code>AF_INET</code></b> family, the <code>address</code> is an IP in dotted-quad notation (e.g. <code>127.0.0.1</code>).</p> <p>If the socket is of the <b><code>AF_UNIX</code></b> family, the <code>address</code> is the path of a Unix-domain socket (e.g. /tmp/my.sock).</p>
	 * @param int $port <p>The <code>port</code> parameter is only used when binding an <b><code>AF_INET</code></b> socket, and designates the port on which to listen for connections.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p><p>The error code can be retrieved with <code>socket_last_error()</code>. This code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-bind.php
	 * @see socket_connect(), socket_listen(), socket_create(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_bind(\Socket $socket, string $address, int $port = 0): bool {}

	/**
	 * Clears the error on the socket or the last error code
	 * <p>This function clears the error code on the given socket or the global last socket error if no socket is specified.</p><p>This function allows explicitly resetting the error code value either of a socket or of the extension global last error code. This may be useful to detect within a part of the application if an error occurred or not.</p>
	 * @param ?\Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.socket-clear-error.php
	 * @see socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_clear_error(?\Socket $socket = null): void {}

	/**
	 * Closes a Socket instance
	 * <p><b>socket_close()</b> closes the <code>Socket</code> instance given by <code>socket</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.socket-close.php
	 * @see socket_bind(), socket_listen(), socket_create(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_close(\Socket $socket): void {}

	/**
	 * Calculate message buffer size
	 * <p>Calculates the size of the buffer that should be allocated for receiving the ancillary data.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param int $level
	 * @param int $type
	 * @param int $num
	 * @return ?int
	 * @link https://php.net/manual/en/function.socket-cmsg-space.php
	 * @see socket_recvmsg(), socket_sendmsg()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function socket_cmsg_space(int $level, int $type, int $num = 0): ?int {}

	/**
	 * Initiates a connection on a socket
	 * <p>Initiate a connection to <code>address</code> using the <code>Socket</code> instance <code>socket</code>, which must be <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @param string $address <p>The <code>address</code> parameter is either an IPv4 address in dotted-quad notation (e.g. <code>127.0.0.1</code>) if <code>socket</code> is <b><code>AF_INET</code></b>, a valid IPv6 address (e.g. <code>::1</code>) if IPv6 support is enabled and <code>socket</code> is <b><code>AF_INET6</code></b> or the pathname of a Unix domain socket, if the socket family is <b><code>AF_UNIX</code></b>.</p>
	 * @param ?int $port <p>The <code>port</code> parameter is only used and is mandatory when connecting to an <b><code>AF_INET</code></b> or an <b><code>AF_INET6</code></b> socket, and designates the port on the remote host to which a connection should be made.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. The error code can be retrieved with <code>socket_last_error()</code>. This code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p><p><b>Note</b>:</p><p>If the socket is non-blocking then this function returns <b><code>false</code></b> with an error <code>Operation now in progress</code>.</p>
	 * @link https://php.net/manual/en/function.socket-connect.php
	 * @see socket_bind(), socket_listen(), socket_create(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_connect(\Socket $socket, string $address, ?int $port = null): bool {}

	/**
	 * Create a socket (endpoint for communication)
	 * <p>Creates and returns a <code>Socket</code> instance, also referred to as an endpoint of communication. A typical network connection is made up of 2 sockets, one performing the role of the client, and another performing the role of the server.</p>
	 * @param int $domain <p>The <code>domain</code> parameter specifies the protocol family to be used by the socket.</p>  <b>Available address/protocol families</b>   Domain Description     <b><code>AF_INET</code></b>  IPv4 Internet based protocols. TCP and UDP are common protocols of this protocol family.    <b><code>AF_INET6</code></b>  IPv6 Internet based protocols. TCP and UDP are common protocols of this protocol family.    <b><code>AF_UNIX</code></b>  Local communication protocol family. High efficiency and low overhead make it a great form of IPC (Interprocess Communication).
	 * @param int $type <p>The <code>type</code> parameter selects the type of communication to be used by the socket.</p>  <b>Available socket types</b>   Type Description     <b><code>SOCK_STREAM</code></b>  Provides sequenced, reliable, full-duplex, connection-based byte streams. An out-of-band data transmission mechanism may be supported. The TCP protocol is based on this socket type.    <b><code>SOCK_DGRAM</code></b>  Supports datagrams (connectionless, unreliable messages of a fixed maximum length). The UDP protocol is based on this socket type.    <b><code>SOCK_SEQPACKET</code></b>  Provides a sequenced, reliable, two-way connection-based data transmission path for datagrams of fixed maximum length; a consumer is required to read an entire packet with each read call.    <b><code>SOCK_RAW</code></b>  Provides raw network protocol access. This special type of socket can be used to manually construct any type of protocol. A common use for this socket type is to perform ICMP requests (like ping).    <b><code>SOCK_RDM</code></b>  Provides a reliable datagram layer that does not guarantee ordering. This is most likely not implemented on your operating system.
	 * @param int $protocol <p>The <code>protocol</code> parameter sets the specific protocol within the specified <code>domain</code> to be used when communicating on the returned socket. The proper value can be retrieved by name by using <code>getprotobyname()</code>. If the desired protocol is TCP, or UDP the corresponding constants <b><code>SOL_TCP</code></b>, and <b><code>SOL_UDP</code></b> can also be used.</p>  <b>Common protocols</b>   Name Description     icmp  The Internet Control Message Protocol is used primarily by gateways and hosts to report errors in datagram communication. The "ping" command (present in most modern operating systems) is an example application of ICMP.    udp  The User Datagram Protocol is a connectionless, unreliable, protocol with fixed record lengths. Due to these aspects, UDP requires a minimum amount of protocol overhead.    tcp  The Transmission Control Protocol is a reliable, connection based, stream oriented, full duplex protocol. TCP guarantees that all data packets will be received in the order in which they were sent. If any packet is somehow lost during communication, TCP will automatically retransmit the packet until the destination host acknowledges that packet. For reliability and performance reasons, the TCP implementation itself decides the appropriate octet boundaries of the underlying datagram communication layer. Therefore, TCP applications must allow for the possibility of partial record transmission.
	 * @return Socket|false <p><b>socket_create()</b> returns a <code>Socket</code> instance on success, or <b><code>false</code></b> on error. The actual error code can be retrieved by calling <code>socket_last_error()</code>. This error code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-create.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_create(int $domain, int $type, int $protocol): \Socket|false {}

	/**
	 * Opens a socket on port to accept connections
	 * <p><b>socket_create_listen()</b> creates a new <code>Socket</code> instance of type <b><code>AF_INET</code></b> listening on <i>all</i> local interfaces on the given port waiting for new connections.</p><p>This function is meant to ease the task of creating a new socket which only listens to accept new connections.</p>
	 * @param int $port <p>The port on which to listen on all interfaces.</p>
	 * @param int $backlog <p>The <code>backlog</code> parameter defines the maximum length the queue of pending connections may grow to. <b><code>SOMAXCONN</code></b> may be passed as <code>backlog</code> parameter, see <code>socket_listen()</code> for more information.</p>
	 * @return Socket|false <p><b>socket_create_listen()</b> returns a new <code>Socket</code> instance on success or <b><code>false</code></b> on error. The error code can be retrieved with <code>socket_last_error()</code>. This code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-create-listen.php
	 * @see socket_create(), socket_create_pair(), socket_bind(), socket_listen(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_create_listen(int $port, int $backlog = 128): \Socket|false {}

	/**
	 * Creates a pair of indistinguishable sockets and stores them in an array
	 * <p><b>socket_create_pair()</b> creates two connected and indistinguishable sockets, and stores them in <code>pair</code>. This function is commonly used in IPC (InterProcess Communication).</p>
	 * @param int $domain <p>The <code>domain</code> parameter specifies the protocol family to be used by the socket. See <code>socket_create()</code> for the full list.</p>
	 * @param int $type <p>The <code>type</code> parameter selects the type of communication to be used by the socket. See <code>socket_create()</code> for the full list.</p>
	 * @param int $protocol <p>The <code>protocol</code> parameter sets the specific protocol within the specified <code>domain</code> to be used when communicating on the returned socket. The proper value can be retrieved by name by using <code>getprotobyname()</code>. If the desired protocol is TCP, or UDP the corresponding constants <b><code>SOL_TCP</code></b>, and <b><code>SOL_UDP</code></b> can also be used.</p> <p>See <code>socket_create()</code> for the full list of supported protocols.</p>
	 * @param array $pair <p>Reference to an array in which the two <code>Socket</code> instances will be inserted.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-create-pair.php
	 * @see socket_create(), socket_create_listen(), socket_bind(), socket_listen(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_create_pair(int $domain, int $type, int $protocol, array &$pair): bool {}

	/**
	 * Export a socket into a stream that encapsulates a socket
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \Socket $socket
	 * @return resource|false <p>Return resource or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-export-stream.php
	 * @since PHP 7 >= 7.0.7, PHP 8
	 */
	function socket_export_stream(\Socket $socket) {}

	/**
	 * Gets socket options for the socket
	 * <p>The <b>socket_get_option()</b> function retrieves the value for the option specified by the <code>option</code> parameter for the specified <code>socket</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param int $level <p>The <code>level</code> parameter specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a <code>level</code> parameter of <b><code>SOL_SOCKET</code></b> would be used. Other levels, such as <b><code>TCP</code></b>, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the <code>getprotobyname()</code> function.</p>
	 * @param int $option <b>Available Socket Options</b>   Option Description Type     <b><code>SO_DEBUG</code></b>  Reports whether debugging information is being recorded.   <code>int</code>    <b><code>SO_BROADCAST</code></b>  Reports whether transmission of broadcast messages is supported.   <code>int</code>    <b><code>SO_REUSEADDR</code></b>  Reports whether local addresses can be reused.   <code>int</code>    <b><code>SO_REUSEPORT</code></b>  Reports whether local ports can be reused.   <code>int</code>    <b><code>SO_KEEPALIVE</code></b>  Reports whether connections are kept active with periodic transmission of messages. If the connected socket fails to respond to these messages, the connection is broken and processes writing to that socket are notified with a SIGPIPE signal.   <code>int</code>    <b><code>SO_LINGER</code></b>  <p>Reports whether the <code>socket</code> lingers on <code>socket_close()</code> if data is present. By default, when the socket is closed, it attempts to send all unsent data. In the case of a connection-oriented socket, <code>socket_close()</code> will wait for its peer to acknowledge the data.</p> <p>If l_onoff is non-zero and l_linger is zero, all the unsent data will be discarded and RST (reset) is sent to the peer in the case of a connection-oriented socket.</p> <p>On the other hand, if l_onoff is non-zero and l_linger is non-zero, <code>socket_close()</code> will block until all the data is sent or the time specified in l_linger elapses. If the socket is non-blocking, <code>socket_close()</code> will fail and return an error.</p>   <code>array</code>. The array will contain two keys: l_onoff and l_linger.    <b><code>SO_OOBINLINE</code></b>  Reports whether the <code>socket</code> leaves out-of-band data inline.   <code>int</code>    <b><code>SO_SNDBUF</code></b>  Reports the size of the send buffer.   <code>int</code>    <b><code>SO_RCVBUF</code></b>  Reports the size of the receive buffer.   <code>int</code>    <b><code>SO_ERROR</code></b>  Reports information about error status and clears it.   <code>int</code> (cannot be set by <code>socket_set_option()</code>)    <b><code>SO_TYPE</code></b>  Reports the <code>socket</code> type (e.g. <b><code>SOCK_STREAM</code></b>).   <code>int</code> (cannot be set by <code>socket_set_option()</code>)    <b><code>SO_DONTROUTE</code></b>  Reports whether outgoing messages bypass the standard routing facilities.   <code>int</code>    <b><code>SO_RCVLOWAT</code></b>  Reports the minimum number of bytes to process for <code>socket</code> input operations.   <code>int</code>    <b><code>SO_RCVTIMEO</code></b>  Reports the timeout value for input operations.   <code>array</code>. The array will contain two keys: sec which is the seconds part on the timeout value and usec which is the microsecond part of the timeout value.    <b><code>SO_SNDTIMEO</code></b>  Reports the timeout value specifying the amount of time that an output function blocks because flow control prevents data from being sent.   <code>array</code>. The array will contain two keys: sec which is the seconds part on the timeout value and usec which is the microsecond part of the timeout value.    <b><code>SO_SNDLOWAT</code></b>  Reports the minimum number of bytes to process for <code>socket</code> output operations.   <code>int</code>    <b><code>TCP_NODELAY</code></b>  Reports whether the Nagle TCP algorithm is disabled.   <code>int</code>    <b><code>MCAST_JOIN_GROUP</code></b>  Joins a multicast group.   <code>array</code> with keys <code>"group"</code>, specifying a <code>string</code> with an IPv4 or IPv6 multicast address and <code>"interface"</code>, specifying either an interface number (type <code>int</code>) or a <code>string</code> with the interface name, like <code>"eth0"</code>. <code>0</code> can be specified to indicate the interface should be selected using routing rules. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_LEAVE_GROUP</code></b>  Leaves a multicast group.   <code>array</code>. See <b><code>MCAST_JOIN_GROUP</code></b> for more information. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_BLOCK_SOURCE</code></b>  Blocks packets arriving from a specific source to a specific multicast group, which must have been previously joined.   <code>array</code> with the same keys as <b><code>MCAST_JOIN_GROUP</code></b>, plus one extra key, <code>source</code>, which maps to a <code>string</code> specifying an IPv4 or IPv6 address of the source to be blocked. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_UNBLOCK_SOURCE</code></b>  Unblocks (start receiving again) packets arriving from a specific source address to a specific multicast group, which must have been previously joined.   <code>array</code> with the same format as <b><code>MCAST_BLOCK_SOURCE</code></b>. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_JOIN_SOURCE_GROUP</code></b>  Receive packets destined to a specific multicast group whose source address matches a specific value.   <code>array</code> with the same format as <b><code>MCAST_BLOCK_SOURCE</code></b>. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_LEAVE_SOURCE_GROUP</code></b>  Stop receiving packets destined to a specific multicast group whose source address matches a specific value.   <code>array</code> with the same format as <b><code>MCAST_BLOCK_SOURCE</code></b>. (can only be used in <code>socket_set_option()</code>)    <b><code>IP_MULTICAST_IF</code></b>  The outgoing interface for IPv4 multicast packets.   Either <code>int</code> specifying the interface number or a <code>string</code> with an interface name, like <code>eth0</code>. The value 0 can be used to indicate the routing table is to used in the interface selection. The function <b>socket_get_option()</b> returns an interface index. Note that, unlike the C API, this option does NOT take an IP address. This eliminates the interface difference between <b><code>IP_MULTICAST_IF</code></b> and <b><code>IPV6_MULTICAST_IF</code></b>.    <b><code>IPV6_MULTICAST_IF</code></b>  The outgoing interface for IPv6 multicast packets.   The same as <b><code>IP_MULTICAST_IF</code></b>.    <b><code>IP_MULTICAST_LOOP</code></b>  The multicast loopback policy for IPv4 packets, which determines whether multicast packets sent by this socket also reach receivers in the same host that have joined the same multicast group on the outgoing interface used by this socket. This is the case by default.   <code>int</code> (either <code>0</code> or <code>1</code>). For <code>socket_set_option()</code> any value will be accepted and will be converted to a boolean following the usual PHP rules.    <b><code>IPV6_MULTICAST_LOOP</code></b>  Analogous to <b><code>IP_MULTICAST_LOOP</code></b>, but for IPv6.   <code>int</code>. See <b><code>IP_MULTICAST_LOOP</code></b>.    <b><code>IP_MULTICAST_TTL</code></b>  The time-to-live of outgoing IPv4 multicast packets. This should be a value between 0 (don't leave the interface) and 255. The default value is 1 (only the local network is reached).   <code>int</code> between 0 and 255.    <b><code>IPV6_MULTICAST_HOPS</code></b>  Analogous to <b><code>IP_MULTICAST_TTL</code></b>, but for IPv6 packets. The value -1 is also accepted, meaning the route default should be used.   <code>int</code> between -1 and 255.    <b><code>SO_MARK</code></b>  Sets an identifier on the socket for packet filtering purpose on Linux.   <code>int</code>    <b><code>SO_ACCEPTFILTER</code></b>  Adds an accept filter on the listened socket (FreeBSD/NetBSD). An accept filter kernel module needs to be loaded beforehand on FreeBSD (e.g. accf_http).   <code>string</code> name of the filter (length 15 max).    <b><code>SO_USER_COOKIE</code></b>  Sets an identifier on the socket for packet filtering purpose on FreeBSD.   <code>int</code>    <b><code>SO_DONTTRUNC</code></b>  Retain unread data.   <code>int</code>    <b><code>SO_WANTMORE</code></b>  Give a hint when more data is ready.   <code>int</code>    <b><code>TCP_DEFER_ACCEPT</code></b>  Don't notify a listening socket until data is ready.   <code>int</code>
	 * @return array|int|false <p>Returns the value of the given option, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-get-option.php
	 * @see socket_create_listen(), socket_set_option()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_get_option(\Socket $socket, int $level, int $option): array|int|false {}

	/**
	 * Alias of socket_get_option()
	 * <p>This function is an alias of: <code>socket_get_option()</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param int $level <p>The <code>level</code> parameter specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a <code>level</code> parameter of <b><code>SOL_SOCKET</code></b> would be used. Other levels, such as <b><code>TCP</code></b>, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the <code>getprotobyname()</code> function.</p>
	 * @param int $option <b>Available Socket Options</b>   Option Description Type     <b><code>SO_DEBUG</code></b>  Reports whether debugging information is being recorded.   <code>int</code>    <b><code>SO_BROADCAST</code></b>  Reports whether transmission of broadcast messages is supported.   <code>int</code>    <b><code>SO_REUSEADDR</code></b>  Reports whether local addresses can be reused.   <code>int</code>    <b><code>SO_REUSEPORT</code></b>  Reports whether local ports can be reused.   <code>int</code>    <b><code>SO_KEEPALIVE</code></b>  Reports whether connections are kept active with periodic transmission of messages. If the connected socket fails to respond to these messages, the connection is broken and processes writing to that socket are notified with a SIGPIPE signal.   <code>int</code>    <b><code>SO_LINGER</code></b>  <p>Reports whether the <code>socket</code> lingers on <code>socket_close()</code> if data is present. By default, when the socket is closed, it attempts to send all unsent data. In the case of a connection-oriented socket, <code>socket_close()</code> will wait for its peer to acknowledge the data.</p> <p>If l_onoff is non-zero and l_linger is zero, all the unsent data will be discarded and RST (reset) is sent to the peer in the case of a connection-oriented socket.</p> <p>On the other hand, if l_onoff is non-zero and l_linger is non-zero, <code>socket_close()</code> will block until all the data is sent or the time specified in l_linger elapses. If the socket is non-blocking, <code>socket_close()</code> will fail and return an error.</p>   <code>array</code>. The array will contain two keys: l_onoff and l_linger.    <b><code>SO_OOBINLINE</code></b>  Reports whether the <code>socket</code> leaves out-of-band data inline.   <code>int</code>    <b><code>SO_SNDBUF</code></b>  Reports the size of the send buffer.   <code>int</code>    <b><code>SO_RCVBUF</code></b>  Reports the size of the receive buffer.   <code>int</code>    <b><code>SO_ERROR</code></b>  Reports information about error status and clears it.   <code>int</code> (cannot be set by <code>socket_set_option()</code>)    <b><code>SO_TYPE</code></b>  Reports the <code>socket</code> type (e.g. <b><code>SOCK_STREAM</code></b>).   <code>int</code> (cannot be set by <code>socket_set_option()</code>)    <b><code>SO_DONTROUTE</code></b>  Reports whether outgoing messages bypass the standard routing facilities.   <code>int</code>    <b><code>SO_RCVLOWAT</code></b>  Reports the minimum number of bytes to process for <code>socket</code> input operations.   <code>int</code>    <b><code>SO_RCVTIMEO</code></b>  Reports the timeout value for input operations.   <code>array</code>. The array will contain two keys: sec which is the seconds part on the timeout value and usec which is the microsecond part of the timeout value.    <b><code>SO_SNDTIMEO</code></b>  Reports the timeout value specifying the amount of time that an output function blocks because flow control prevents data from being sent.   <code>array</code>. The array will contain two keys: sec which is the seconds part on the timeout value and usec which is the microsecond part of the timeout value.    <b><code>SO_SNDLOWAT</code></b>  Reports the minimum number of bytes to process for <code>socket</code> output operations.   <code>int</code>    <b><code>TCP_NODELAY</code></b>  Reports whether the Nagle TCP algorithm is disabled.   <code>int</code>    <b><code>MCAST_JOIN_GROUP</code></b>  Joins a multicast group.   <code>array</code> with keys <code>"group"</code>, specifying a <code>string</code> with an IPv4 or IPv6 multicast address and <code>"interface"</code>, specifying either an interface number (type <code>int</code>) or a <code>string</code> with the interface name, like <code>"eth0"</code>. <code>0</code> can be specified to indicate the interface should be selected using routing rules. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_LEAVE_GROUP</code></b>  Leaves a multicast group.   <code>array</code>. See <b><code>MCAST_JOIN_GROUP</code></b> for more information. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_BLOCK_SOURCE</code></b>  Blocks packets arriving from a specific source to a specific multicast group, which must have been previously joined.   <code>array</code> with the same keys as <b><code>MCAST_JOIN_GROUP</code></b>, plus one extra key, <code>source</code>, which maps to a <code>string</code> specifying an IPv4 or IPv6 address of the source to be blocked. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_UNBLOCK_SOURCE</code></b>  Unblocks (start receiving again) packets arriving from a specific source address to a specific multicast group, which must have been previously joined.   <code>array</code> with the same format as <b><code>MCAST_BLOCK_SOURCE</code></b>. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_JOIN_SOURCE_GROUP</code></b>  Receive packets destined to a specific multicast group whose source address matches a specific value.   <code>array</code> with the same format as <b><code>MCAST_BLOCK_SOURCE</code></b>. (can only be used in <code>socket_set_option()</code>)    <b><code>MCAST_LEAVE_SOURCE_GROUP</code></b>  Stop receiving packets destined to a specific multicast group whose source address matches a specific value.   <code>array</code> with the same format as <b><code>MCAST_BLOCK_SOURCE</code></b>. (can only be used in <code>socket_set_option()</code>)    <b><code>IP_MULTICAST_IF</code></b>  The outgoing interface for IPv4 multicast packets.   Either <code>int</code> specifying the interface number or a <code>string</code> with an interface name, like <code>eth0</code>. The value 0 can be used to indicate the routing table is to used in the interface selection. The function <b>socket_get_option()</b> returns an interface index. Note that, unlike the C API, this option does NOT take an IP address. This eliminates the interface difference between <b><code>IP_MULTICAST_IF</code></b> and <b><code>IPV6_MULTICAST_IF</code></b>.    <b><code>IPV6_MULTICAST_IF</code></b>  The outgoing interface for IPv6 multicast packets.   The same as <b><code>IP_MULTICAST_IF</code></b>.    <b><code>IP_MULTICAST_LOOP</code></b>  The multicast loopback policy for IPv4 packets, which determines whether multicast packets sent by this socket also reach receivers in the same host that have joined the same multicast group on the outgoing interface used by this socket. This is the case by default.   <code>int</code> (either <code>0</code> or <code>1</code>). For <code>socket_set_option()</code> any value will be accepted and will be converted to a boolean following the usual PHP rules.    <b><code>IPV6_MULTICAST_LOOP</code></b>  Analogous to <b><code>IP_MULTICAST_LOOP</code></b>, but for IPv6.   <code>int</code>. See <b><code>IP_MULTICAST_LOOP</code></b>.    <b><code>IP_MULTICAST_TTL</code></b>  The time-to-live of outgoing IPv4 multicast packets. This should be a value between 0 (don't leave the interface) and 255. The default value is 1 (only the local network is reached).   <code>int</code> between 0 and 255.    <b><code>IPV6_MULTICAST_HOPS</code></b>  Analogous to <b><code>IP_MULTICAST_TTL</code></b>, but for IPv6 packets. The value -1 is also accepted, meaning the route default should be used.   <code>int</code> between -1 and 255.    <b><code>SO_MARK</code></b>  Sets an identifier on the socket for packet filtering purpose on Linux.   <code>int</code>    <b><code>SO_ACCEPTFILTER</code></b>  Adds an accept filter on the listened socket (FreeBSD/NetBSD). An accept filter kernel module needs to be loaded beforehand on FreeBSD (e.g. accf_http).   <code>string</code> name of the filter (length 15 max).    <b><code>SO_USER_COOKIE</code></b>  Sets an identifier on the socket for packet filtering purpose on FreeBSD.   <code>int</code>    <b><code>SO_DONTTRUNC</code></b>  Retain unread data.   <code>int</code>    <b><code>SO_WANTMORE</code></b>  Give a hint when more data is ready.   <code>int</code>    <b><code>TCP_DEFER_ACCEPT</code></b>  Don't notify a listening socket until data is ready.   <code>int</code>
	 * @return array|int|false
	 * @link https://php.net/manual/en/function.socket-getopt.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_getopt(\Socket $socket, int $level, int $option): array|int|false {}

	/**
	 * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
	 * <p>Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param string $address <p>If the given socket is of type <b><code>AF_INET</code></b> or <b><code>AF_INET6</code></b>, <b>socket_getpeername()</b> will return the peers (remote) <i>IP address</i> in appropriate notation (e.g. <code>127.0.0.1</code> or <code>fe80::1</code>) in the <code>address</code> parameter and, if the optional <code>port</code> parameter is present, also the associated port.</p> <p>If the given socket is of type <b><code>AF_UNIX</code></b>, <b>socket_getpeername()</b> will return the Unix filesystem path (e.g. <code>/var/run/daemon.sock</code>) in the <code>address</code> parameter.</p>
	 * @param int $port <p>If given, this will hold the port associated to <code>address</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. <b>socket_getpeername()</b> may also return <b><code>false</code></b> if the socket type is not any of <b><code>AF_INET</code></b>, <b><code>AF_INET6</code></b>, or <b><code>AF_UNIX</code></b>, in which case the last socket error code is <i>not</i> updated.</p>
	 * @link https://php.net/manual/en/function.socket-getpeername.php
	 * @see socket_getsockname(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_getpeername(\Socket $socket, string &$address, int &$port = null): bool {}

	/**
	 * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
	 * <p><b>Note</b>:  <b>socket_getsockname()</b> should not be used with <b><code>AF_UNIX</code></b> sockets created with <code>socket_connect()</code>. Only sockets created with <code>socket_accept()</code> or a primary server socket following a call to <code>socket_bind()</code> will return meaningful values. </p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param string $address <p>If the given socket is of type <b><code>AF_INET</code></b> or <b><code>AF_INET6</code></b>, <b>socket_getsockname()</b> will return the local <i>IP address</i> in appropriate notation (e.g. <code>127.0.0.1</code> or <code>fe80::1</code>) in the <code>address</code> parameter and, if the optional <code>port</code> parameter is present, also the associated port.</p> <p>If the given socket is of type <b><code>AF_UNIX</code></b>, <b>socket_getsockname()</b> will return the Unix filesystem path (e.g. <code>/var/run/daemon.sock</code>) in the <code>address</code> parameter.</p>
	 * @param int $port <p>If provided, this will hold the associated port.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. <b>socket_getsockname()</b> may also return <b><code>false</code></b> if the socket type is not any of <b><code>AF_INET</code></b>, <b><code>AF_INET6</code></b>, or <b><code>AF_UNIX</code></b>, in which case the last socket error code is <i>not</i> updated.</p>
	 * @link https://php.net/manual/en/function.socket-getsockname.php
	 * @see socket_getpeername(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_getsockname(\Socket $socket, string &$address, int &$port = null): bool {}

	/**
	 * Import a stream
	 * <p>Imports a stream that encapsulates a socket into a socket extension resource.</p>
	 * @param resource $stream <p>The stream resource to import.</p>
	 * @return Socket|false <p>Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-import-stream.php
	 * @see stream_socket_server()
	 * @since PHP 5 >= 5.4.0, PHP 7, PHP 8
	 */
	function socket_import_stream($stream): \Socket|false {}

	/**
	 * Returns the last error on the socket
	 * <p>If a <code>Socket</code> instance is passed to this function, the last error which occurred on this particular socket is returned. If <code>socket</code> is <b><code>null</code></b>, the error code of the last failed socket function is returned. The latter is particularly helpful for functions like <code>socket_create()</code> which don't return a socket on failure and <code>socket_select()</code> which can fail for reasons not directly tied to a particular socket. The error code is suitable to be fed to <code>socket_strerror()</code> which returns a string describing the given error code.</p><p>If no error had occurred, or the error had been cleared with <code>socket_clear_error()</code>, the function returns <code>0</code>.</p>
	 * @param ?\Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @return int <p>This function returns a socket error code.</p>
	 * @link https://php.net/manual/en/function.socket-last-error.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_last_error(?\Socket $socket = null): int {}

	/**
	 * Listens for a connection on a socket
	 * <p>After the socket <code>socket</code> has been created using <code>socket_create()</code> and bound to a name with <code>socket_bind()</code>, it may be told to listen for incoming connections on <code>socket</code>.</p><p><b>socket_listen()</b> is applicable only to sockets of type <b><code>SOCK_STREAM</code></b> or <b><code>SOCK_SEQPACKET</code></b>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_addrinfo_bind()</code></p>
	 * @param int $backlog <p>A maximum of <code>backlog</code> incoming connections will be queued for processing. If a connection request arrives with the queue full the client may receive an error with an indication of <code>ECONNREFUSED</code>, or, if the underlying protocol supports retransmission, the request may be ignored so that retries may succeed.</p> <p><b>Note</b>:</p><p>The maximum number passed to the <code>backlog</code> parameter highly depends on the underlying platform. On Linux, it is silently truncated to <b><code>SOMAXCONN</code></b>. On win32, if passed <b><code>SOMAXCONN</code></b>, the underlying service provider responsible for the socket will set the backlog to a maximum <i>reasonable</i> value. There is no standard provision to find out the actual backlog value on this platform.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure. The error code can be retrieved with <code>socket_last_error()</code>. This code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-listen.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_create(), socket_strerror(), socket_addrinfo_bind()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_listen(\Socket $socket, int $backlog = 0): bool {}

	/**
	 * Reads a maximum of length bytes from a socket
	 * <p>The function <b>socket_read()</b> reads from the <code>Socket</code> instance <code>socket</code> created by the <code>socket_create()</code> or <code>socket_accept()</code> functions.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param int $length <p>The maximum number of bytes read is specified by the <code>length</code> parameter. Otherwise you can use <b><code>\r</code></b>, <b><code>\n</code></b>, or <b><code>\0</code></b> to end reading (depending on the <code>mode</code> parameter, see below).</p>
	 * @param int $mode <p>Optional <code>mode</code> parameter is a named constant:</p><ul> <li>  <b><code>PHP_BINARY_READ</code></b> (Default) - use the system <code>recv()</code> function. Safe for reading binary data.  </li> <li>  <b><code>PHP_NORMAL_READ</code></b> - reading stops at <code>\n</code> or <code>\r</code>.  </li> </ul>
	 * @return string|false <p><b>socket_read()</b> returns the data as a string on success, or <b><code>false</code></b> on error (including if the remote host has closed the connection). The error code can be retrieved with <code>socket_last_error()</code>. This code may be passed to <code>socket_strerror()</code> to get a textual representation of the error.</p><p><b>Note</b>:</p><p><b>socket_read()</b> returns a zero length string ("") when there is no more data to read.</p>
	 * @link https://php.net/manual/en/function.socket-read.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_last_error(), socket_strerror(), socket_write()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_read(\Socket $socket, int $length, int $mode = PHP_BINARY_READ): string|false {}

	/**
	 * Receives data from a connected socket
	 * <p>The <b>socket_recv()</b> function receives <code>length</code> bytes of data in <code>data</code> from <code>socket</code>. <b>socket_recv()</b> can be used to gather data from connected sockets. Additionally, one or more flags can be specified to modify the behaviour of the function.</p><p><code>data</code> is passed by reference, so it must be specified as a variable in the argument list. Data read from <code>socket</code> by <b>socket_recv()</b> will be returned in <code>data</code>.</p>
	 * @param \Socket $socket <p>The <code>socket</code> must be a <code>Socket</code> instance previously created by socket_create().</p>
	 * @param ?string $data <p>The data received will be fetched to the variable specified with <code>data</code>. If an error occurs, if the connection is reset, or if no data is available, <code>data</code> will be set to <b><code>null</code></b>.</p>
	 * @param int $length <p>Up to <code>length</code> bytes will be fetched from remote host.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following flags, joined with the binary OR (<code>|</code>) operator.</p>  <b>Possible values for <code>flags</code></b>   Flag Description     <b><code>MSG_OOB</code></b>  Process out-of-band data.    <b><code>MSG_PEEK</code></b>  Receive data from the beginning of the receive queue without removing it from the queue.    <b><code>MSG_WAITALL</code></b>  Block until at least <code>length</code> are received. However, if a signal is caught or the remote host disconnects, the function may return less data.    <b><code>MSG_DONTWAIT</code></b>  With this flag set, the function returns even if it would normally have blocked.
	 * @return int|false <p><b>socket_recv()</b> returns the number of bytes received, or <b><code>false</code></b> if there was an error. The actual error code can be retrieved by calling <code>socket_last_error()</code>. This error code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-recv.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_recv(\Socket $socket, ?string &$data, int $length, int $flags): int|false {}

	/**
	 * Receives data from a socket whether or not it is connection-oriented
	 * <p>The <b>socket_recvfrom()</b> function receives <code>length</code> bytes of data in <code>data</code> from <code>address</code> on port <code>port</code> (if the socket is not of type <b><code>AF_UNIX</code></b>) using <code>socket</code>. <b>socket_recvfrom()</b> can be used to gather data from both connected and unconnected sockets. Additionally, one or more flags can be specified to modify the behaviour of the function.</p><p>The <code>address</code> and <code>port</code> must be passed by reference. If the socket is not connection-oriented, <code>address</code> will be set to the internet protocol address of the remote host or the path to the UNIX socket. If the socket is connection-oriented, <code>address</code> is <b><code>null</code></b>. Additionally, the <code>port</code> will contain the port of the remote host in the case of an unconnected <b><code>AF_INET</code></b> or <b><code>AF_INET6</code></b> socket.</p><p><b>Note</b>: This function is binary-safe.</p>
	 * @param \Socket $socket <p>The <code>socket</code> must be a <code>Socket</code> instance previously created by socket_create().</p>
	 * @param string $data <p>The data received will be fetched to the variable specified with <code>data</code>.</p>
	 * @param int $length <p>Up to <code>length</code> bytes will be fetched from remote host.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following flags, joined with the binary OR (<code>|</code>) operator.</p>  <b>Possible values for <code>flags</code></b>   Flag Description     <b><code>MSG_OOB</code></b>  Process out-of-band data.    <b><code>MSG_PEEK</code></b>  Receive data from the beginning of the receive queue without removing it from the queue.    <b><code>MSG_WAITALL</code></b>  Block until at least <code>length</code> are received. However, if a signal is caught or the remote host disconnects, the function may return less data.    <b><code>MSG_DONTWAIT</code></b>  With this flag set, the function returns even if it would normally have blocked.
	 * @param string $address <p>If the socket is of the type <b><code>AF_UNIX</code></b> type, <code>address</code> is the path to the file. Else, for unconnected sockets, <code>address</code> is the IP address of, the remote host, or <b><code>null</code></b> if the socket is connection-oriented.</p>
	 * @param int $port <p>This argument only applies to <b><code>AF_INET</code></b> and <b><code>AF_INET6</code></b> sockets, and specifies the remote port from which the data is received. If the socket is connection-oriented, <code>port</code> will be <b><code>null</code></b>.</p>
	 * @return int|false <p><b>socket_recvfrom()</b> returns the number of bytes received, or <b><code>false</code></b> if there was an error. The actual error code can be retrieved by calling <code>socket_last_error()</code>. This error code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p>
	 * @link https://php.net/manual/en/function.socket-recvfrom.php
	 * @see socket_recv(), socket_send(), socket_sendto(), socket_create()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_recvfrom(\Socket $socket, string &$data, int $length, int $flags, string &$address, int &$port = null): int|false {}

	/**
	 * Read a message
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \Socket $socket
	 * @param array $message
	 * @param int $flags
	 * @return int|false
	 * @link https://php.net/manual/en/function.socket-recvmsg.php
	 * @see socket_sendmsg(), socket_cmsg_space()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function socket_recvmsg(\Socket $socket, array &$message, int $flags = 0): int|false {}

	/**
	 * Runs the select() system call on the given arrays of sockets with a specified timeout
	 * <p><b>socket_select()</b> accepts arrays of sockets and waits for them to change status. Those coming with BSD sockets background will recognize that those socket arrays are in fact the so-called file descriptor sets. Three independent arrays of sockets are watched.</p>
	 * @param ?array $read <p>The sockets listed in the <code>read</code> array will be watched to see if characters become available for reading (more precisely, to see if a read will not block - in particular, a socket is also ready on end-of-file, in which case a <code>socket_read()</code> will return a zero length string).</p>
	 * @param ?array $write <p>The sockets listed in the <code>write</code> array will be watched to see if a write will not block.</p>
	 * @param ?array $except <p>The sockets listed in the <code>except</code> array will be watched for exceptions.</p>
	 * @param ?int $seconds <p>The <code>seconds</code> and <code>microseconds</code> together form the <code>timeout</code> parameter. The <code>timeout</code> is an upper bound on the amount of time elapsed before <b>socket_select()</b> return. <code>seconds</code> may be zero , causing <b>socket_select()</b> to return immediately. This is useful for polling. If <code>seconds</code> is <b><code>null</code></b> (no timeout), <b>socket_select()</b> can block indefinitely.</p>
	 * @param int $microseconds
	 * @return int|false <p>On success <b>socket_select()</b> returns the number of sockets contained in the modified arrays, which may be zero if the timeout expires before anything interesting happens.On error <b><code>false</code></b> is returned. The error code can be retrieved with <code>socket_last_error()</code>.</p><p><b>Note</b>:</p><p>Be sure to use the <code>===</code> operator when checking for an error. Since the <b>socket_select()</b> may return 0 the comparison with <code>==</code> would evaluate to <b><code>true</code></b>:</p> <p><b>Example #2 Understanding <b>socket_select()</b>'s result</b></p>  <code> &lt;&#63;php<br>$e&nbsp;=&nbsp;NULL;<br>if&nbsp;(false&nbsp;===&nbsp;socket_select($r,&nbsp;$w,&nbsp;$e,&nbsp;0))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"socket_select()&nbsp;failed,&nbsp;reason:&nbsp;"&nbsp;.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;socket_strerror(socket_last_error())&nbsp;.&nbsp;"\n";<br>}<br>&#63;&gt;  </code>
	 * @link https://php.net/manual/en/function.socket-select.php
	 * @see socket_read(), socket_write(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0): int|false {}

	/**
	 * Sends data to a connected socket
	 * <p>The function <b>socket_send()</b> sends <code>length</code> bytes to the socket <code>socket</code> from <code>data</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param string $data <p>A buffer containing the data that will be sent to the remote host.</p>
	 * @param int $length <p>The number of bytes that will be sent to the remote host from <code>data</code>.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following flags, joined with the binary OR (<code>|</code>) operator.</p> <b>Possible values for <code>flags</code></b>   <b><code>MSG_OOB</code></b>  Send OOB (out-of-band) data.    <b><code>MSG_EOR</code></b>  Indicate a record mark. The sent data completes the record.    <b><code>MSG_EOF</code></b>  Close the sender side of the socket and include an appropriate notification of this at the end of the sent data. The sent data completes the transaction.    <b><code>MSG_DONTROUTE</code></b>  Bypass routing, use direct interface.
	 * @return int|false <p><b>socket_send()</b> returns the number of bytes sent, or <b><code>false</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.socket-send.php
	 * @see socket_sendto()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_send(\Socket $socket, string $data, int $length, int $flags): int|false {}

	/**
	 * Send a message
	 * <p></p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param \Socket $socket
	 * @param array $message
	 * @param int $flags
	 * @return int|false <p>Returns the number of bytes sent, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-sendmsg.php
	 * @see socket_recvmsg(), socket_cmsg_space()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function socket_sendmsg(\Socket $socket, array $message, int $flags = 0): int|false {}

	/**
	 * Sends a message to a socket, whether it is connected or not
	 * <p>The function <b>socket_sendto()</b> sends <code>length</code> bytes from <code>data</code> through the socket <code>socket</code> to the <code>port</code> at the address <code>address</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created using <code>socket_create()</code>.</p>
	 * @param string $data <p>The sent data will be taken from buffer <code>data</code>.</p>
	 * @param int $length <p><code>length</code> bytes from <code>data</code> will be sent.</p>
	 * @param int $flags <p>The value of <code>flags</code> can be any combination of the following flags, joined with the binary OR (<code>|</code>) operator.</p> <b>Possible values for <code>flags</code></b>   <b><code>MSG_OOB</code></b>  Send OOB (out-of-band) data.    <b><code>MSG_EOR</code></b>  Indicate a record mark. The sent data completes the record.    <b><code>MSG_EOF</code></b>  Close the sender side of the socket and include an appropriate notification of this at the end of the sent data. The sent data completes the transaction.    <b><code>MSG_DONTROUTE</code></b>  Bypass routing, use direct interface.
	 * @param string $address <p>IP address of the remote host.</p>
	 * @param ?int $port <p><code>port</code> is the remote port number at which the data will be sent.</p>
	 * @return int|false <p><b>socket_sendto()</b> returns the number of bytes sent to the remote host, or <b><code>false</code></b> if an error occurred.</p>
	 * @link https://php.net/manual/en/function.socket-sendto.php
	 * @see socket_send()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_sendto(\Socket $socket, string $data, int $length, int $flags, string $address, ?int $port = null): int|false {}

	/**
	 * Sets blocking mode on a socket
	 * <p>The <b>socket_set_block()</b> function removes the <b><code>O_NONBLOCK</code></b> flag on the socket specified by the <code>socket</code> parameter.</p><p>When an operation (e.g. receive, send, connect, accept, ...) is performed on a blocking socket, the script will pause its execution until it receives a signal or it can perform the operation.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-set-block.php
	 * @see socket_set_nonblock(), socket_set_option()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_set_block(\Socket $socket): bool {}

	/**
	 * Sets nonblocking mode for file descriptor fd
	 * <p>The <b>socket_set_nonblock()</b> function sets the <b><code>O_NONBLOCK</code></b> flag on the socket specified by the <code>socket</code> parameter.</p><p>When an operation (e.g. receive, send, connect, accept, ...) is performed on a non-blocking socket, the script will not pause its execution until it receives a signal or it can perform the operation. Rather, if the operation would result in a block, the called function will fail.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-set-nonblock.php
	 * @see socket_set_block(), socket_set_option(), stream_set_blocking()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_set_nonblock(\Socket $socket): bool {}

	/**
	 * Sets socket options for the socket
	 * <p>The <b>socket_set_option()</b> function sets the option specified by the <code>option</code> parameter, at the specified protocol <code>level</code>, to the value pointed to by the <code>value</code> parameter for the <code>socket</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param int $level <p>The <code>level</code> parameter specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a <code>level</code> parameter of <b><code>SOL_SOCKET</code></b> would be used. Other levels, such as TCP, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the <code>getprotobyname()</code> function.</p>
	 * @param int $option <p>The available socket options are the same as those for the <code>socket_get_option()</code> function.</p>
	 * @param array|string|int $value <p>The option value.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-set-option.php
	 * @see socket_create(), socket_bind(), socket_strerror(), socket_last_error(), socket_get_option()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_set_option(\Socket $socket, int $level, int $option, array|string|int $value): bool {}

	/**
	 * Alias of socket_set_option()
	 * <p>This function is an alias of: <code>socket_set_option()</code>.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code> or <code>socket_accept()</code>.</p>
	 * @param int $level <p>The <code>level</code> parameter specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a <code>level</code> parameter of <b><code>SOL_SOCKET</code></b> would be used. Other levels, such as TCP, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the <code>getprotobyname()</code> function.</p>
	 * @param int $option <p>The available socket options are the same as those for the <code>socket_get_option()</code> function.</p>
	 * @param array|string|int $value <p>The option value.</p>
	 * @return bool
	 * @link https://php.net/manual/en/function.socket-setopt.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_setopt(\Socket $socket, int $level, int $option, array|string|int $value): bool {}

	/**
	 * Shuts down a socket for receiving, sending, or both
	 * <p>The <b>socket_shutdown()</b> function allows you to stop incoming, outgoing or all data (the default) from being sent through the <code>socket</code></p><p><b>Note</b>:</p><p>The associated buffer, or buffers, may or may not be emptied.</p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance created with <code>socket_create()</code>.</p>
	 * @param int $mode <p>The value of <code>mode</code> can be one of the following:</p> <b>possible values for <code>mode</code></b>   <code>0</code>  Shutdown socket reading    <code>1</code>  Shutdown socket writing    <code>2</code>  Shutdown socket reading and writing
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-shutdown.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_shutdown(\Socket $socket, int $mode = 2): bool {}

	/**
	 * Return a string describing a socket error
	 * <p><b>socket_strerror()</b> takes as its <code>error_code</code> parameter a socket error code as returned by <code>socket_last_error()</code> and returns the corresponding explanatory text.</p><p><b>Note</b>:</p><p>Although the error messages generated by the socket extension are in English, the system messages retrieved with this function will appear depending on the current locale (<b><code>LC_MESSAGES</code></b>).</p>
	 * @param int $error_code <p>A valid socket error number, likely produced by <code>socket_last_error()</code>.</p>
	 * @return string <p>Returns the error message associated with the <code>error_code</code> parameter.</p>
	 * @link https://php.net/manual/en/function.socket-strerror.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_create()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_strerror(int $error_code): string {}

	/**
	 * Write to a socket
	 * <p>The function <b>socket_write()</b> writes to the <code>socket</code> from the given <code>data</code>.</p>
	 * @param \Socket $socket
	 * @param string $data <p>The buffer to be written.</p>
	 * @param ?int $length <p>The optional parameter <code>length</code> can specify an alternate length of bytes written to the socket. If this length is greater than the buffer length, it is silently truncated to the length of the buffer.</p>
	 * @return int|false <p>Returns the number of bytes successfully written to the socket or <b><code>false</code></b> on failure. The error code can be retrieved with <code>socket_last_error()</code>. This code may be passed to <code>socket_strerror()</code> to get a textual explanation of the error.</p><p><b>Note</b>:</p><p>It is perfectly valid for <b>socket_write()</b> to return zero which means no bytes have been written. Be sure to use the <code>===</code> operator to check for <b><code>false</code></b> in case of an error.</p>
	 * @link https://php.net/manual/en/function.socket-write.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_read(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8
	 */
	function socket_write(\Socket $socket, string $data, ?int $length = null): int|false {}

	/**
	 * Exports the WSAPROTOCOL_INFO Structure
	 * <p>Exports the <code>WSAPROTOCOL_INFO</code> structure into shared memory and returns an identifier to be used with <code>socket_wsaprotocol_info_import()</code>. The exported ID is only valid for the given <code>process_id</code>.</p><p><b>Note</b>:  This function is available only on Windows. </p>
	 * @param \Socket $socket <p>A <code>Socket</code> instance.</p>
	 * @param int $process_id <p>The ID of the process which will import the socket.</p>
	 * @return string|false <p>Returns an identifier to be used for the import, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.socket-wsaprotocol-info-export.php
	 * @see socket_wsaprotocol_info_import(), socket_wsaprotocol_info_release()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function socket_wsaprotocol_info_export(\Socket $socket, int $process_id): string|false {}

	/**
	 * Imports a Socket from another Process
	 * <p>Imports a socket which has formerly been exported from another process.</p><p><b>Note</b>:  This function is available only on Windows. </p>
	 * @param string $info_id <p>The ID which has been returned by a former call to <code>socket_wsaprotocol_info_export()</code>.</p>
	 * @return Socket|false <p>Returns a <code>Socket</code> instance on success, or <b><code>false</code></b> on failure</p>
	 * @link https://php.net/manual/en/function.socket-wsaprotocol-info-import.php
	 * @see socket_wsaprotocol_info_export()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function socket_wsaprotocol_info_import(string $info_id): \Socket|false {}

	/**
	 * Releases an exported WSAPROTOCOL_INFO Structure
	 * <p>Releases the shared memory corresponding to the given <code>info_id</code>.</p><p><b>Note</b>:  This function is available only on Windows. </p>
	 * @param string $info_id <p>The ID which has been returned by a former call to <code>socket_wsaprotocol_info_export()</code>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.socket-wsaprotocol-info-release.php
	 * @see socket_wsaprotocol_info_export()
	 * @since PHP 7 >= 7.3.0, PHP 8
	 */
	function socket_wsaprotocol_info_release(string $info_id): bool {}

	define('AF_INET', 2);

	/**
	 * Only available if compiled with IPv6 support.
	 */
	define('AF_INET6', 10);

	define('AF_UNIX', 1);

	define('MSG_DONTROUTE', 4);

	/**
	 * Not available on Windows platforms.
	 */
	define('MSG_EOF', 512);

	/**
	 * Not available on Windows platforms.
	 */
	define('MSG_EOR', 128);

	define('MSG_OOB', 1);

	define('MSG_PEEK', 2);

	define('MSG_WAITALL', 256);

	define('PHP_BINARY_READ', 2);

	define('PHP_NORMAL_READ', 1);

	define('SCM_CREDENTIALS', 2);

	/**
	 * Send or receive a set of open file descriptors from another process.
	 */
	define('SCM_RIGHTS', 1);

	/**
	 * Available as of PHP 8.1.0
	 */
	define('SO_ACCEPTFILTER', null);

	define('SO_BROADCAST', 6);

	define('SO_DEBUG', 1);

	define('SO_DONTROUTE', 5);

	/**
	 * Available as of PHP 8.1.0
	 */
	define('SO_DONTTRUNC', null);

	define('SO_ERROR', 4);

	define('SO_KEEPALIVE', 9);

	define('SO_LINGER', 13);

	/**
	 * Available as of PHP 8.1.0
	 */
	define('SO_MARK', null);

	define('SO_OOBINLINE', 10);

	define('SO_RCVBUF', 8);

	define('SO_RCVLOWAT', 18);

	define('SO_RCVTIMEO', 20);

	define('SO_REUSEADDR', 2);

	/**
	 * This constant is only available on platforms that support the <b><code>SO_REUSEPORT</code></b> socket option: this includes macOS and FreeBSD, but does not include Linux or Windows.
	 */
	define('SO_REUSEPORT', 15);

	define('SO_SNDBUF', 7);

	define('SO_SNDLOWAT', 19);

	define('SO_SNDTIMEO', 21);

	define('SO_TYPE', 3);

	/**
	 * Available as of PHP 8.1.0
	 */
	define('SO_USER_COOKIE', null);

	/**
	 * Available as of PHP 8.1.0
	 */
	define('SO_WANTMORE', null);

	define('SOCK_DGRAM', 2);

	define('SOCK_RAW', 3);

	define('SOCK_RDM', 4);

	define('SOCK_SEQPACKET', 5);

	define('SOCK_STREAM', 1);

	/**
	 * Address already in use.
	 */
	define('SOCKET_ADDRINUSE', null);

	/**
	 * Arg list too long.
	 */
	define('SOCKET_E2BIG', 7);

	/**
	 * Permission denied.
	 */
	define('SOCKET_EACCES', 13);

	define('SOCKET_EADDRINUSE', 98);

	/**
	 * Cannot assign requested address.
	 */
	define('SOCKET_EADDRNOTAVAIL', 99);

	/**
	 * Advertise error.
	 */
	define('SOCKET_EADV', 68);

	/**
	 * Address family not supported by protocol.
	 */
	define('SOCKET_EAFNOSUPPORT', 97);

	/**
	 * Try again.
	 */
	define('SOCKET_EAGAIN', 11);

	/**
	 * Operation already in progress.
	 */
	define('SOCKET_EALREADY', 114);

	/**
	 * Invalid exchange.
	 */
	define('SOCKET_EBADE', 52);

	/**
	 * Bad file number.
	 */
	define('SOCKET_EBADF', 9);

	/**
	 * File descriptor in bad state.
	 */
	define('SOCKET_EBADFD', 77);

	/**
	 * Not a data message.
	 */
	define('SOCKET_EBADMSG', 74);

	/**
	 * Invalid request descriptor.
	 */
	define('SOCKET_EBADR', 53);

	/**
	 * Invalid request code.
	 */
	define('SOCKET_EBADRQC', 56);

	/**
	 * Invalid slot.
	 */
	define('SOCKET_EBADSLT', 57);

	/**
	 * Device or resource busy.
	 */
	define('SOCKET_EBUSY', 16);

	/**
	 * Channel number out of range.
	 */
	define('SOCKET_ECHRNG', 44);

	/**
	 * Communication error on send.
	 */
	define('SOCKET_ECOMM', 70);

	/**
	 * Software caused connection abort.
	 */
	define('SOCKET_ECONNABORTED', 103);

	/**
	 * Connection refused.
	 */
	define('SOCKET_ECONNREFUSED', 111);

	/**
	 * Connection reset by peer.
	 */
	define('SOCKET_ECONNRESET', 104);

	/**
	 * Destination address required.
	 */
	define('SOCKET_EDESTADDRREQ', 89);

	define('SOCKET_EDISCON', null);

	/**
	 * Quota exceeded.
	 */
	define('SOCKET_EDQUOT', 122);

	define('SOCKET_EDUOT', null);

	/**
	 * File exists.
	 */
	define('SOCKET_EEXIST', 17);

	/**
	 * Bad address.
	 */
	define('SOCKET_EFAULT', 14);

	/**
	 * Host is down.
	 */
	define('SOCKET_EHOSTDOWN', 112);

	/**
	 * No route to host.
	 */
	define('SOCKET_EHOSTUNREACH', 113);

	/**
	 * Identifier removed.
	 */
	define('SOCKET_EIDRM', 43);

	/**
	 * Operation now in progress.
	 */
	define('SOCKET_EINPROGRESS', 115);

	/**
	 * Interrupted system call.
	 */
	define('SOCKET_EINTR', 4);

	/**
	 * Invalid argument.
	 */
	define('SOCKET_EINVAL', 22);

	/**
	 * I/O error.
	 */
	define('SOCKET_EIO', 5);

	/**
	 * Transport endpoint is already connected.
	 */
	define('SOCKET_EISCONN', 106);

	/**
	 * Is a directory.
	 */
	define('SOCKET_EISDIR', 21);

	/**
	 * Is a named type file.
	 */
	define('SOCKET_EISNAM', 120);

	/**
	 * Level 2 halted.
	 */
	define('SOCKET_EL2HLT', 51);

	/**
	 * Level 2 not synchronized.
	 */
	define('SOCKET_EL2NSYNC', 45);

	/**
	 * Level 3 halted.
	 */
	define('SOCKET_EL3HLT', 46);

	/**
	 * Level 3 reset.
	 */
	define('SOCKET_EL3RST', 47);

	/**
	 * Link number out of range.
	 */
	define('SOCKET_ELNRNG', 48);

	/**
	 * Too many symbolic links encountered.
	 */
	define('SOCKET_ELOOP', 40);

	/**
	 * Wrong medium type.
	 */
	define('SOCKET_EMEDIUMTYPE', 124);

	/**
	 * Too many open files.
	 */
	define('SOCKET_EMFILE', 24);

	/**
	 * Too many links.
	 */
	define('SOCKET_EMLINK', 31);

	/**
	 * Message too long.
	 */
	define('SOCKET_EMSGSIZE', 90);

	/**
	 * Multihop attempted.
	 */
	define('SOCKET_EMULTIHOP', 72);

	/**
	 * File name too long.
	 */
	define('SOCKET_ENAMETOOLONG', 36);

	/**
	 * Network is down.
	 */
	define('SOCKET_ENETDOWN', 100);

	/**
	 * Network dropped connection because of reset.
	 */
	define('SOCKET_ENETRESET', 102);

	/**
	 * Network is unreachable.
	 */
	define('SOCKET_ENETUNREACH', 101);

	/**
	 * File table overflow.
	 */
	define('SOCKET_ENFILE', 23);

	/**
	 * No anode.
	 */
	define('SOCKET_ENOANO', 55);

	/**
	 * No buffer space available.
	 */
	define('SOCKET_ENOBUFS', 105);

	/**
	 * No CSI structure available.
	 */
	define('SOCKET_ENOCSI', 50);

	/**
	 * No data available.
	 */
	define('SOCKET_ENODATA', 61);

	/**
	 * No such device.
	 */
	define('SOCKET_ENODEV', 19);

	/**
	 * No such file or directory.
	 */
	define('SOCKET_ENOENT', 2);

	/**
	 * No record locks available.
	 */
	define('SOCKET_ENOLCK', 37);

	/**
	 * Link has been severed.
	 */
	define('SOCKET_ENOLINK', 67);

	/**
	 * No medium found.
	 */
	define('SOCKET_ENOMEDIUM', 123);

	/**
	 * Out of memory.
	 */
	define('SOCKET_ENOMEM', 12);

	/**
	 * No message of desired type.
	 */
	define('SOCKET_ENOMSG', 42);

	/**
	 * Machine is not on the network.
	 */
	define('SOCKET_ENONET', 64);

	define('SOCKET_ENOPROTOOPT', 92);

	/**
	 * No space left on device.
	 */
	define('SOCKET_ENOSPC', 28);

	/**
	 * Out of streams resources.
	 */
	define('SOCKET_ENOSR', 63);

	/**
	 * Device not a stream.
	 */
	define('SOCKET_ENOSTR', 60);

	/**
	 * Function not implemented.
	 */
	define('SOCKET_ENOSYS', 38);

	/**
	 * Block device required.
	 */
	define('SOCKET_ENOTBLK', 15);

	/**
	 * Transport endpoint is not connected.
	 */
	define('SOCKET_ENOTCONN', 107);

	/**
	 * Not a directory.
	 */
	define('SOCKET_ENOTDIR', 20);

	/**
	 * Directory not empty.
	 */
	define('SOCKET_ENOTEMPTY', 39);

	/**
	 * Socket operation on non-socket.
	 */
	define('SOCKET_ENOTSOCK', 88);

	/**
	 * Not a typewriter.
	 */
	define('SOCKET_ENOTTY', 25);

	/**
	 * Name not unique on network.
	 */
	define('SOCKET_ENOTUNIQ', 76);

	/**
	 * No such device or address.
	 */
	define('SOCKET_ENXIO', 6);

	/**
	 * Operation not supported on transport endpoint.
	 */
	define('SOCKET_EOPNOTSUPP', 95);

	/**
	 * Operation not permitted.
	 */
	define('SOCKET_EPERM', 1);

	/**
	 * Protocol family not supported.
	 */
	define('SOCKET_EPFNOSUPPORT', 96);

	/**
	 * Broken pipe.
	 */
	define('SOCKET_EPIPE', 32);

	define('SOCKET_EPROCLIM', null);

	/**
	 * Protocol error.
	 */
	define('SOCKET_EPROTO', 71);

	/**
	 * Protocol not supported.
	 */
	define('SOCKET_EPROTONOSUPPORT', 93);

	/**
	 * Protocol not available.
	 */
	define('SOCKET_EPROTOOPT', null);

	/**
	 * Protocol wrong type for socket.
	 */
	define('SOCKET_EPROTOTYPE', 91);

	/**
	 * Remote address changed.
	 */
	define('SOCKET_EREMCHG', 78);

	/**
	 * Object is remote.
	 */
	define('SOCKET_EREMOTE', 66);

	/**
	 * Remote I/O error.
	 */
	define('SOCKET_EREMOTEIO', 121);

	/**
	 * Interrupted system call should be restarted.
	 */
	define('SOCKET_ERESTART', 85);

	/**
	 * Read-only file system.
	 */
	define('SOCKET_EROFS', 30);

	/**
	 * Cannot send after transport endpoint shutdown.
	 */
	define('SOCKET_ESHUTDOWN', 108);

	/**
	 * Socket type not supported.
	 */
	define('SOCKET_ESOCKTNOSUPPORT', 94);

	/**
	 * Illegal seek.
	 */
	define('SOCKET_ESPIPE', 29);

	/**
	 * Srmount error.
	 */
	define('SOCKET_ESRMNT', 69);

	define('SOCKET_ESTALE', null);

	/**
	 * Streams pipe error.
	 */
	define('SOCKET_ESTRPIPE', 86);

	/**
	 * Timer expired.
	 */
	define('SOCKET_ETIME', 62);

	/**
	 * Connection timed out.
	 */
	define('SOCKET_ETIMEDOUT', 110);

	/**
	 * Too many references: cannot splice.
	 */
	define('SOCKET_ETOOMANYREFS', 109);

	define('SOCKET_ETOOMYREFS', null);

	/**
	 * Protocol driver not attached.
	 */
	define('SOCKET_EUNATCH', 49);

	/**
	 * Too many users.
	 */
	define('SOCKET_EUSERS', 87);

	/**
	 * Operation would block.
	 */
	define('SOCKET_EWOULDBLOCK', 11);

	/**
	 * Cross-device link.
	 */
	define('SOCKET_EXDEV', 18);

	/**
	 * Exchange full.
	 */
	define('SOCKET_EXFULL', 54);

	define('SOCKET_HOST_NOT_FOUND', null);

	define('SOCKET_NO_ADDRESS', null);

	define('SOCKET_NO_DATA', null);

	define('SOCKET_NO_RECOVERY', null);

	define('SOCKET_NOTINITIALISED', null);

	define('SOCKET_SYSNOTREADY', null);

	define('SOCKET_TRY_AGAIN', null);

	define('SOCKET_VERNOTSUPPORTED', null);

	define('SOL_SOCKET', 1);

	define('SOL_TCP', 6);

	define('SOL_UDP', 17);

	/**
	 * Available as of PHP 8.1.0
	 */
	define('TCP_DEFER_ACCEPT', null);

	/**
	 * Used to disable Nagle TCP algorithm.
	 */
	define('TCP_NODELAY', 1);

}
