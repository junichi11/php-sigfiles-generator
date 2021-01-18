<?php



namespace {

	/**
	 * @link https://php.net/manual/en/class.varnishadmin.php
	 * @since PECL varnish >= 0.3
	 */
	class VarnishAdmin {

		/**
		 * VarnishAdmin constructor
		 * @param array $args <p>Configuration arguments. The possible keys are:</p><pre>VARNISH_CONFIG_IDENT - local varnish instance ident VARNISH_CONFIG_HOST - varnish instance ip VARNISH_CONFIG_PORT - varnish instance port VARNISH_CONFIG_SECRET - varnish instance secret VARNISH_CONFIG_TIMEOUT - connection read timeout VARNISH_CONFIG_COMPAT - varnish major version compatibility</pre>
		 * @return self
		 * @link https://php.net/manual/en/varnishadmin.construct.php
		 * @since PECL varnish >= 0.3
		 */
		public function __construct(array $args = null) {}

		/**
		 * Authenticate on a varnish instance
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/varnishadmin.auth.php
		 * @since PECL varnish >= 0.3
		 */
		public function auth(): bool {}

		/**
		 * Ban URLs using a VCL expression
		 * @param string $vcl_regex <p>Varnish VCL expression. It's based on the varnish ban command.</p>
		 * @return int <p>Returns the varnish command status.</p>
		 * @link https://php.net/manual/en/varnishadmin.ban.php
		 * @since PECL varnish >= 0.3
		 */
		public function ban(string $vcl_regex): int {}

		/**
		 * Ban an URL using a VCL expression
		 * @param string $vcl_regex <p>URL regular expression in PCRE compatible syntax. It's based on the ban.url varnish command.</p>
		 * @return int <p>Returns the varnish command status.</p>
		 * @link https://php.net/manual/en/varnishadmin.banurl.php
		 * @since PECL varnish >= 0.3
		 */
		public function banUrl(string $vcl_regex): int {}

		/**
		 * Clear varnish instance panic messages
		 * @return int <p>Returns the varnish command status.</p>
		 * @link https://php.net/manual/en/varnishadmin.clearpanic.php
		 * @since PECL varnish >= 0.4
		 */
		public function clearPanic(): int {}

		/**
		 * Connect to a varnish instance administration interface
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/varnishadmin.connect.php
		 * @since PECL varnish >= 0.3
		 */
		public function connect(): bool {}

		/**
		 * Disconnect from a varnish instance administration interface
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/varnishadmin.disconnect.php
		 * @since PECL varnish >= 1.0.0
		 */
		public function disconnect(): bool {}

		/**
		 * Get the last panic message on a varnish instance
		 * @return string <p>Returns the last panic message on the current varnish instance.</p>
		 * @link https://php.net/manual/en/varnishadmin.getpanic.php
		 * @since PECL varnish >= 0.4
		 */
		public function getPanic(): string {}

		/**
		 * Fetch current varnish instance configuration parameters
		 * @return array <p>Returns an array with the varnish configuration parameters.</p>
		 * @link https://php.net/manual/en/varnishadmin.getparams.php
		 * @since PECL varnish >= 0.4
		 */
		public function getParams(): array {}

		/**
		 * Check if the varnish slave process is currently running
		 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/varnishadmin.isrunning.php
		 * @since PECL varnish >= 0.3
		 */
		public function isRunning(): bool {}

		/**
		 * Set the class compat configuration param
		 * @param int $compat <p>Varnish compatibility option.</p>
		 * @return void
		 * @link https://php.net/manual/en/varnishadmin.setcompat.php
		 * @since PECL varnish >= 0.9.2
		 */
		public function setCompat(int $compat): void {}

		/**
		 * Set the class host configuration param
		 * @param string $host <p>Connection host configuration parameter.</p>
		 * @return void
		 * @link https://php.net/manual/en/varnishadmin.sethost.php
		 * @since PECL varnish >= 0.8
		 */
		public function setHost(string $host): void {}

		/**
		 * Set the class ident configuration param
		 * @param string $ident <p>Connection ident configuration parameter.</p>
		 * @return void
		 * @link https://php.net/manual/en/varnishadmin.setident.php
		 * @since PECL varnish >= 0.8
		 */
		public function setIdent(string $ident): void {}

		/**
		 * Set configuration param on the current varnish instance
		 * @param string $name <p>Varnish configuration param name.</p>
		 * @param string|int $value <p>Varnish configuration param value.</p>
		 * @return int <p>Returns the varnish command status.</p>
		 * @link https://php.net/manual/en/varnishadmin.setparam.php
		 * @since PECL varnish >= 0.4
		 */
		public function setParam(string $name, string|int $value): int {}

		/**
		 * Set the class port configuration param
		 * @param int $port <p>Connection port configuration parameter.</p>
		 * @return void
		 * @link https://php.net/manual/en/varnishadmin.setport.php
		 * @since PECL varnish >= 0.8
		 */
		public function setPort(int $port): void {}

		/**
		 * Set the class secret configuration param
		 * @param string $secret <p>Connection secret configuration parameter.</p>
		 * @return void
		 * @link https://php.net/manual/en/varnishadmin.setsecret.php
		 * @since PECL varnish >= 0.8
		 */
		public function setSecret(string $secret): void {}

		/**
		 * Set the class timeout configuration param
		 * @param int $timeout <p>Connection timeout configuration parameter.</p>
		 * @return void
		 * @link https://php.net/manual/en/varnishadmin.settimeout.php
		 * @since PECL varnish >= 0.8
		 */
		public function setTimeout(int $timeout): void {}

		/**
		 * Start varnish worker process
		 * @return int <p>Returns the varnish command status.</p>
		 * @link https://php.net/manual/en/varnishadmin.start.php
		 * @since PECL varnish >= 0.3
		 */
		public function start(): int {}

		/**
		 * Stop varnish worker process
		 * @return int <p>Returns the varnish command status.</p>
		 * @link https://php.net/manual/en/varnishadmin.stop.php
		 * @since PECL varnish >= 0.3
		 */
		public function stop(): int {}
	}

	/**
	 * @link https://php.net/manual/en/class.varnishlog.php
	 * @since PECL varnish >= 0.6
	 */
	class VarnishLog {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Debug = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Error = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_CLI = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_StatSess = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ReqEnd = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_SessionOpen = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_SessionClose = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_BackendOpen = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_BackendXID = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_BackendReuse = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_BackendClose = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_HttpGarbage = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Backend = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Length = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_FetchError = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_RxRequest = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_RxResponse = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_RxStatus = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_RxURL = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_RxProtocol = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_RxHeader = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TxRequest = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TxResponse = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TxStatus = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TxURL = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TxProtocol = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TxHeader = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ObjRequest = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ObjResponse = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ObjStatus = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ObjURL = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ObjProtocol = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ObjHeader = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_LostHeader = 33;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_TTL = 34;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Fetch_Body = 35;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_VCL_acl = 36;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_VCL_call = 37;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_VCL_trace = 38;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_VCL_return = 39;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_VCL_error = 40;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ReqStart = 41;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Hit = 42;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_HitPass = 43;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ExpBan = 44;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ExpKill = 45;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_WorkThread = 46;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_ESI_xmlerror = 47;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Hash = 48;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Backend_health = 49;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_VCL_Log = 50;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.varnishlog.php
		 */
		const TAG_Gzip = 51;

		/**
		 * Varnishlog constructor
		 * @param array $args <p>Configuration arguments. The possible keys are:</p><pre>VARNISH_CONFIG_IDENT - local varnish instance ident path</pre>
		 * @return self
		 * @link https://php.net/manual/en/varnishlog.construct.php
		 * @since PECL varnish >= 0.6
		 */
		public function __construct(array $args = null) {}

		/**
		 * Get next log line
		 * @return array <p>Returns an array with the log line data.</p>
		 * @link https://php.net/manual/en/varnishlog.getline.php
		 * @since PECL varnish >= 0.6
		 */
		public function getLine(): array {}

		/**
		 * Get the log tag string representation by its index
		 * @param int $index <p>Log tag index.</p>
		 * @return string <p>Returns the log tag name as <code>string</code>.</p>
		 * @link https://php.net/manual/en/varnishlog.gettagname.php
		 * @since PECL varnish >= 0.6
		 */
		public static function getTagName(int $index): string {}
	}

	/**
	 * @link https://php.net/manual/en/class.varnishstat.php
	 * @since PECL varnish >= 0.3
	 */
	class VarnishStat {

		/**
		 * VarnishStat constructor
		 * @param array $args <p>Configuration arguments. The possible keys are:</p><pre>VARNISH_CONFIG_IDENT - local varnish instance ident path</pre>
		 * @return self
		 * @link https://php.net/manual/en/varnishstat.construct.php
		 * @since PECL varnish >= 0.3
		 */
		public function __construct(array $args = null) {}

		/**
		 * Get the current varnish instance statistics snapshot
		 * @return array <p>Array with the varnish statistic snapshot. The array keys are identical to that in the varnishstat tool.</p>
		 * @link https://php.net/manual/en/varnishstat.getsnapshot.php
		 * @since PECL varnish >= 0.3
		 */
		public function getSnapshot(): array {}
	}

	define('VARNISH_COMPAT_2', null);

	define('VARNISH_COMPAT_3', null);

	define('VARNISH_CONFIG_COMPAT', null);

	define('VARNISH_CONFIG_HOST', null);

	define('VARNISH_CONFIG_IDENT', null);

	define('VARNISH_CONFIG_PORT', null);

	define('VARNISH_CONFIG_SECRET', null);

	define('VARNISH_CONFIG_TIMEOUT', null);

	define('VARNISH_STATUS_AUTH', null);

	define('VARNISH_STATUS_CANT', null);

	define('VARNISH_STATUS_CLOSE', null);

	define('VARNISH_STATUS_COMMS', null);

	define('VARNISH_STATUS_OK', null);

	define('VARNISH_STATUS_PARAM', null);

	define('VARNISH_STATUS_SYNTAX', null);

	define('VARNISH_STATUS_TOOFEW', null);

	define('VARNISH_STATUS_TOOMANY', null);

	define('VARNISH_STATUS_UNIMPL', null);

	define('VARNISH_STATUS_UNKNOWN', null);

}
