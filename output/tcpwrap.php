<?php



namespace {

	/**
	 * Performs a tcpwrap check
	 * <p>This function consults the /etc/hosts.allow and /etc/hosts.deny files to check if access to service <code>daemon</code> should be granted or denied for a client.</p>
	 * @param string $daemon <p>The service name.</p>
	 * @param string $address <p>The client remote address. Can be either an IP address or a domain name.</p>
	 * @param string $user <p>An optional user name.</p>
	 * @param bool $nodns <p>If <code>address</code> looks like domain name then DNS is used to resolve it to IP address; set <code>nodns</code> to <b><code>TRUE</code></b> to avoid this.</p>
	 * @return bool <p>This function returns <b><code>TRUE</code></b> if access should be granted, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.tcpwrap-check.php
	 * @since PECL tcpwrap >= 0.1.0
	 */
	function tcpwrap_check(string $daemon, string $address, string $user = NULL, bool $nodns = FALSE): bool {}

}
