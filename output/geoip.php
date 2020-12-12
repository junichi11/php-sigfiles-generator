<?php



namespace {

	/**
	 * Get the Autonomous System Numbers (ASN)
	 * <p>The <b>geoip_asnum_by_name()</b> function will return the Autonomous System Numbers (ASN) associated with an IP address.</p>
	 * @param string $hostname <p>The hostname or IP address.</p>
	 * @return string <p>Returns the ASN on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-asnum-by-name.php
	 * @since PECL geoip >= 1.1.0
	 */
	function geoip_asnum_by_name(string $hostname): string {}

	/**
	 * Get the two letter continent code
	 * <p>The <b>geoip_continent_code_by_name()</b> function will return the two letter continent code corresponding to a hostname or an IP address.</p>
	 * @param string $hostname <p>The hostname or IP address whose location is to be looked-up.</p>
	 * @return string <p>Returns the two letter continent code on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p> <b>Continent codes</b>   Code Continent name     <code>AF</code> Africa   <code>AN</code> Antarctica   <code>AS</code> Asia   <code>EU</code> Europe   <code>NA</code> North america   <code>OC</code> Oceania   <code>SA</code> South america
	 * @link https://php.net/manual/en/function.geoip-continent-code-by-name.php
	 * @see geoip_country_code_by_name()
	 * @since PECL geoip >= 1.0.3
	 */
	function geoip_continent_code_by_name(string $hostname): string {}

	/**
	 * Get the three letter country code
	 * <p>The <b>geoip_country_code3_by_name()</b> function will return the three letter country code corresponding to a hostname or an IP address.</p>
	 * @param string $hostname <p>The hostname or IP address whose location is to be looked-up.</p>
	 * @return string <p>Returns the three letter country code on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-country-code3-by-name.php
	 * @see geoip_country_code_by_name(), geoip_country_name_by_name()
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_country_code3_by_name(string $hostname): string {}

	/**
	 * Get the two letter country code
	 * <p>The <b>geoip_country_code_by_name()</b> function will return the two letter country code corresponding to a hostname or an IP address.</p>
	 * @param string $hostname <p>The hostname or IP address whose location is to be looked-up.</p>
	 * @return string <p>Returns the two letter ISO country code on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-country-code-by-name.php
	 * @see geoip_country_code3_by_name(), geoip_country_name_by_name()
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_country_code_by_name(string $hostname): string {}

	/**
	 * Get the full country name
	 * <p>The <b>geoip_country_name_by_name()</b> function will return the full country name corresponding to a hostname or an IP address.</p>
	 * @param string $hostname <p>The hostname or IP address whose location is to be looked-up.</p>
	 * @return string <p>Returns the country name on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-country-name-by-name.php
	 * @see geoip_country_code_by_name(), geoip_country_code3_by_name()
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_country_name_by_name(string $hostname): string {}

	/**
	 * Get GeoIP Database information
	 * <p>The <b>geoip_database_info()</b> function returns the corresponding GeoIP Database version as it is defined inside the binary file.</p><p>If this function is called without arguments, it returns the version of the GeoIP Free Country Edition.</p>
	 * @param int $database <p>The database type as an integer. You can use the various constants defined with this extension (ie: GEOIP_&#42;_EDITION).</p>
	 * @return string <p>Returns the corresponding database version, or <b><code>NULL</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.geoip-database-info.php
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_database_info(int $database = GEOIP_COUNTRY_EDITION): string {}

	/**
	 * Determine if GeoIP Database is available
	 * <p>The <b>geoip_db_avail()</b> function returns if the corresponding GeoIP Database is available and can be opened on disk.</p><p>It does not indicate if the file is a proper database, only if it is readable.</p>
	 * @param int $database <p>The database type as an integer. You can use the various constants defined with this extension (ie: GEOIP_&#42;_EDITION).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> is database exists, <b><code>FALSE</code></b> if not found, or <b><code>NULL</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.geoip-db-avail.php
	 * @since PECL geoip >= 1.0.1
	 */
	function geoip_db_avail(int $database): bool {}

	/**
	 * Returns the filename of the corresponding GeoIP Database
	 * <p>The <b>geoip_db_filename()</b> function returns the filename of the corresponding GeoIP Database.</p><p>It does not indicate if the file exists or not on disk, only where the library is looking for the database.</p>
	 * @param int $database <p>The database type as an integer. You can use the various constants defined with this extension (ie: GEOIP_&#42;_EDITION).</p>
	 * @return string <p>Returns the filename of the corresponding database, or <b><code>NULL</code></b> on error.</p>
	 * @link https://php.net/manual/en/function.geoip-db-filename.php
	 * @since PECL geoip >= 1.0.1
	 */
	function geoip_db_filename(int $database): string {}

	/**
	 * Returns detailed information about all GeoIP database types
	 * <p>The <b>geoip_db_get_all_info()</b> function will return detailed information as a multi-dimensional array about all the GeoIP database types.</p><p>This function is available even if no databases are installed. It will simply list them as non-available.</p><p>The names of the different keys of the returning associative array are as follows:</p><p></p>
	 * @return array <p>Returns the associative array.</p>
	 * @link https://php.net/manual/en/function.geoip-db-get-all-info.php
	 * @since PECL geoip >= 1.0.1
	 */
	function geoip_db_get_all_info(): array {}

	/**
	 * Get the second level domain name
	 * <p>The <b>geoip_domain_by_name()</b> function will return the second level domain names associated with a hostname or an IP address.</p><p>This function is currently only available to users who have bought a commercial GeoIP Domain Edition. A warning will be issued if the proper database cannot be located.</p>
	 * @param string $hostname <p>The hostname or IP address.</p>
	 * @return string <p>Returns the domain name on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-domain-by-name.php
	 * @since PECL geoip >= 1.1.0
	 */
	function geoip_domain_by_name(string $hostname): string {}

	/**
	 * Get the Internet connection type
	 * <p>The <b>geoip_id_by_name()</b> function will return the Internet connection type corresponding to a hostname or an IP address.</p><p>The return value is numeric and can be compared to the following constants:</p><p></p>
	 * @param string $hostname <p>The hostname or IP address whose connection type is to be looked-up.</p>
	 * @return int <p>Returns the connection type.</p>
	 * @link https://php.net/manual/en/function.geoip-id-by-name.php
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_id_by_name(string $hostname): int {}

	/**
	 * Get the Internet Service Provider (ISP) name
	 * <p>The <b>geoip_isp_by_name()</b> function will return the name of the Internet Service Provider (ISP) that an IP is assigned to.</p><p>This function is currently only available to users who have bought a commercial GeoIP ISP Edition. A warning will be issued if the proper database cannot be located.</p>
	 * @param string $hostname <p>The hostname or IP address.</p>
	 * @return string <p>Returns the ISP name on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-isp-by-name.php
	 * @since PECL geoip >= 1.0.2
	 */
	function geoip_isp_by_name(string $hostname): string {}

	/**
	 * Get the Internet connection speed
	 * <p>The <b>geoip_netspeedcell_by_name()</b> function will return the Internet connection type and speed corresponding to a hostname or an IP address.</p><p>This function is only available if using GeoIP Library version 1.4.8 or newer.</p><p>This function is currently only available to users who have bought a commercial GeoIP NetSpeedCell Edition. A warning will be issued if the proper database cannot be located.</p><p>The return value is a string, common values are:</p><p></p>
	 * @param string $hostname <p>The hostname or IP address.</p>
	 * @return string <p>Returns the connection speed on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-netspeedcell-by-name.php
	 * @since PECL geoip >= 1.1.0
	 */
	function geoip_netspeedcell_by_name(string $hostname): string {}

	/**
	 * Get the organization name
	 * <p>The <b>geoip_org_by_name()</b> function will return the name of the organization that an IP is assigned to.</p><p>This function is currently only available to users who have bought a commercial GeoIP Organization, ISP or AS Edition. A warning will be issued if the proper database cannot be located.</p>
	 * @param string $hostname <p>The hostname or IP address.</p>
	 * @return string <p>Returns the organization name on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-org-by-name.php
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_org_by_name(string $hostname): string {}

	/**
	 * Returns the detailed City information found in the GeoIP Database
	 * <p>The <b>geoip_record_by_name()</b> function will return the record information corresponding to a hostname or an IP address.</p><p>This function is available for both GeoLite City Edition and commercial GeoIP City Edition. A warning will be issued if the proper database cannot be located.</p><p>The names of the different keys of the returning associative array are as follows:</p><p></p>
	 * @param string $hostname <p>The hostname or IP address whose record is to be looked-up.</p>
	 * @return array <p>Returns the associative array on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-record-by-name.php
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_record_by_name(string $hostname): array {}

	/**
	 * Get the country code and region
	 * <p>The <b>geoip_region_by_name()</b> function will return the country and region corresponding to a hostname or an IP address.</p><p>This function is currently only available to users who have bought a commercial GeoIP Region Edition. A warning will be issued if the proper database cannot be located.</p><p>The names of the different keys of the returning associative array are as follows:</p><p></p>
	 * @param string $hostname <p>The hostname or IP address whose region is to be looked-up.</p>
	 * @return array <p>Returns the associative array on success, or <b><code>FALSE</code></b> if the address cannot be found in the database.</p>
	 * @link https://php.net/manual/en/function.geoip-region-by-name.php
	 * @since PECL geoip >= 0.2.0
	 */
	function geoip_region_by_name(string $hostname): array {}

	/**
	 * Returns the region name for some country and region code combo
	 * <p>The <b>geoip_region_name_by_code()</b> function will return the region name corresponding to a country and region code combo.</p><p>In the United States, the region code corresponds to the two-letter abbreviation of each state. In Canada, the region code corresponds to the two-letter province or territory code as attributed by Canada Post.</p><p>For the rest of the world, GeoIP uses FIPS 10-4 codes to represent regions. You can check http://www.maxmind.com/app/fips10_4 for a detailed list of FIPS 10-4 codes.</p><p>This function is always available if using GeoIP Library version 1.4.1 or newer. The data is taken directly from the GeoIP Library and not from any database.</p>
	 * @param string $country_code <p>The two-letter country code (see <code>geoip_country_code_by_name()</code>)</p>
	 * @param string $region_code <p>The two-letter (or digit) region code (see <code>geoip_region_by_name()</code>)</p>
	 * @return string <p>Returns the region name on success, or <b><code>FALSE</code></b> if the country and region code combo cannot be found.</p>
	 * @link https://php.net/manual/en/function.geoip-region-name-by-code.php
	 * @since PECL geoip >= 1.0.4
	 */
	function geoip_region_name_by_code(string $country_code, string $region_code): string {}

	/**
	 * Set a custom directory for the GeoIP database
	 * <p>The <b>geoip_setup_custom_directory()</b> function will change the default directory of the GeoIP database. This is equivalent to changing geoip.custom_directory.</p>
	 * @param string $path <p>The full path of where the GeoIP database is on disk.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.geoip-setup-custom-directory.php
	 * @since PECL geoip >= 1.1.0
	 */
	function geoip_setup_custom_directory(string $path): void {}

	/**
	 * Returns the time zone for some country and region code combo
	 * <p>The <b>geoip_time_zone_by_country_and_region()</b> function will return the time zone corresponding to a country and region code combo.</p><p>In the United States, the region code corresponds to the two-letter abbreviation of each state. In Canada, the region code corresponds to the two-letter province or territory code as attributed by Canada Post.</p><p>For the rest of the world, GeoIP uses FIPS 10-4 codes to represent regions. You can check http://www.maxmind.com/app/fips10_4 for a detailed list of FIPS 10-4 codes.</p><p>This function is always available if using GeoIP Library version 1.4.1 or newer. The data is taken directly from the GeoIP Library and not from any database.</p>
	 * @param string $country_code <p>The two-letter country code (see <code>geoip_country_code_by_name()</code>)</p>
	 * @param string $region_code <p>The two-letter (or digit) region code (see <code>geoip_region_by_name()</code>)</p>
	 * @return string <p>Returns the time zone on success, or <b><code>FALSE</code></b> if the country and region code combo cannot be found.</p>
	 * @link https://php.net/manual/en/function.geoip-time-zone-by-country-and-region.php
	 * @since PECL geoip >= 1.0.4
	 */
	function geoip_time_zone_by_country_and_region(string $country_code, string $region_code = NULL): string {}

	define('GEOIP_ASNUM_EDITION', null);

	define('GEOIP_CABLEDSL_SPEED', null);

	define('GEOIP_CITY_EDITION_REV0', null);

	define('GEOIP_CITY_EDITION_REV1', null);

	define('GEOIP_CORPORATE_SPEED', null);

	define('GEOIP_COUNTRY_EDITION', null);

	define('GEOIP_DIALUP_SPEED', null);

	define('GEOIP_DOMAIN_EDITION', null);

	define('GEOIP_ISP_EDITION', null);

	define('GEOIP_NETSPEED_EDITION', null);

	define('GEOIP_ORG_EDITION', null);

	define('GEOIP_PROXY_EDITION', null);

	define('GEOIP_REGION_EDITION_REV0', null);

	define('GEOIP_REGION_EDITION_REV1', null);

	define('GEOIP_UNKNOWN_SPEED', null);

}
