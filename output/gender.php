<?php



namespace Gender {

	/**
	 * @link https://php.net/manual/en/class.gender.php
	 * @since PECL gender >= 0.6.0
	 */
	class Gender {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IS_FEMALE = 70;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IS_MOSTLY_FEMALE = 102;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IS_MALE = 77;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IS_MOSTLY_MALE = 109;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IS_UNISEX_NAME = 63;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IS_A_COUPLE = 67;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const NAME_NOT_FOUND = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ERROR_IN_NAME = 69;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ANY_COUNTRY = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const BRITAIN = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const IRELAND = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const USA = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const SPAIN = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const PORTUGAL = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ITALY = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const MALTA = 7;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const FRANCE = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const BELGIUM = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const LUXEMBOURG = 10;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const NETHERLANDS = 11;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const GERMANY = 12;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const EAST_FRISIA = 13;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const AUSTRIA = 14;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const SWISS = 15;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ICELAND = 16;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const DENMARK = 17;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const NORWAY = 18;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const SWEDEN = 19;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const FINLAND = 20;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ESTONIA = 21;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const LATVIA = 22;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const LITHUANIA = 23;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const POLAND = 24;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const CZECH_REP = 25;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const SLOVAKIA = 26;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const HUNGARY = 27;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ROMANIA = 28;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const BULGARIA = 29;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const BOSNIA = 30;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const CROATIA = 31;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const KOSOVO = 32;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const MACEDONIA = 33;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const MONTENEGRO = 34;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const SERBIA = 35;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const SLOVENIA = 36;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ALBANIA = 37;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const GREECE = 38;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const RUSSIA = 39;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const BELARUS = 40;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const MOLDOVA = 41;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const UKRAINE = 42;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ARMENIA = 43;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const AZERBAIJAN = 44;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const GEORGIA = 45;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const KAZAKH_UZBEK = 46;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const TURKEY = 47;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ARABIA = 48;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const ISRAEL = 49;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const CHINA = 50;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const INDIA = 51;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const JAPAN = 52;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.gender.php
		 */
		const KOREA = 53;

		/**
		 * Construct the Gender object
		 * <p>Create a Gender object optionally connecting to an external name dictionary. When no external database was given, compiled in data will be used.</p>
		 * @param string $dsn <p>DSN to open.</p>
		 * @return self
		 * @link https://php.net/manual/en/gender-gender.construct.php
		 * @since PECL gender >= 0.6.0
		 */
		public function __construct(string $dsn = NULL) {}

		/**
		 * Connect to an external name dictionary
		 * <p>Connect to an external name dictionary. Currently only streams are supported.</p>
		 * @param string $dsn <p>DSN to open.</p>
		 * @return bool <p>Boolean as success of failure.</p>
		 * @link https://php.net/manual/en/gender-gender.connect.php
		 * @since PECL gender >= 0.6.0
		 */
		public function connect(string $dsn): bool {}

		/**
		 * Get textual country representation
		 * <p>Returns the textual representation of a country from a Gender class constant.</p>
		 * @param int $country <p>A country ID specified by a Gender\Gender class constant.</p>
		 * @return array|false <p>Returns an array with the short and full names of the country on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/gender-gender.country.php
		 * @since PECL gender >= 0.8.0
		 */
		public function country(int $country) {}

		/**
		 * Get gender of a name
		 * <p>Get the gender of the name in a particular country.</p>
		 * @param string $name <p>Name to check.</p>
		 * @param int $country <p>Country id identified by Gender class constant.</p>
		 * @return int <p>Returns gender of the name.</p>
		 * @link https://php.net/manual/en/gender-gender.get.php
		 * @since PECL gender >= 0.6.0
		 */
		public function get(string $name, int $country = NULL): int {}

		/**
		 * Check if the name0 is an alias of the name1
		 * <p>Check whether the name0 is a nick of the name1.</p>
		 * @param string $name0 <p>Name to check.</p>
		 * @param string $name1 <p>Name to check.</p>
		 * @param int $country <p>Country id identified by Gender class constant. If ommited ANY_COUNTRY is used.</p>
		 * @return array <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/en/gender-gender.isnick.php
		 * @since PECL gender >= 0.9.0
		 */
		public function isNick(string $name0, string $name1, int $country = NULL): array {}

		/**
		 * Get similar names
		 * <p>Get similar names for the given name and country.</p>
		 * @param string $name <p>Name to check.</p>
		 * @param int $country <p>Country id identified by Gender class constant. If ommited ANY_COUNTRY is used.</p>
		 * @return array <p>Returns an array with the similar names found.</p>
		 * @link https://php.net/manual/en/gender-gender.similarnames.php
		 * @since PECL gender >= 0.9.0
		 */
		public function similarNames(string $name, int $country = NULL): array {}
	}

}
