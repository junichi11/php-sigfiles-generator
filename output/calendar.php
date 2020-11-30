<?php



namespace {

	/**
	 * Return the number of days in a month for a given year and calendar
	 * <p>This function will return the number of days in the <code>month</code> of <code>year</code> for the specified <code>calendar</code>.</p>
	 * @param int $calendar <p>Calendar to use for calculation</p>
	 * @param int $month <p>Month in the selected calendar</p>
	 * @param int $year <p>Year in the selected calendar</p>
	 * @return int <p>The length in days of the selected month in the given calendar</p>
	 * @link http://php.net/manual/en/function.cal-days-in-month.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_days_in_month(int $calendar, int $month, int $year): int {}

	/**
	 * Converts from Julian Day Count to a supported calendar
	 * <p><b>cal_from_jd()</b> converts the Julian day given in <code>jd</code> into a date of the specified <code>calendar</code>. Supported <code>calendar</code> values are <b><code>CAL_GREGORIAN</code></b>, <b><code>CAL_JULIAN</code></b>, <b><code>CAL_JEWISH</code></b> and <b><code>CAL_FRENCH</code></b>.</p>
	 * @param int $jd <p>Julian day as integer</p>
	 * @param int $calendar <p>Calendar to convert to</p>
	 * @return array <p>Returns an array containing calendar information like month, day, year, day of week (<i>dow</i>), abbreviated and full names of weekday and month and the date in string form "month/day/year". The day of week ranges from <i>0</i> (Sunday) to <i>6</i> (Saturday).</p>
	 * @link http://php.net/manual/en/function.cal-from-jd.php
	 * @see cal_to_jd(), jdtofrench(), jdtogregorian(), jdtojewish(), jdtojulian(), jdtounix()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_from_jd(int $jd, int $calendar): array {}

	/**
	 * Returns information about a particular calendar
	 * <p><b>cal_info()</b> returns information on the specified <code>calendar</code>.</p><p>Calendar information is returned as an array containing the elements <i>calname</i>, <i>calsymbol</i>, <i>month</i>, <i>abbrevmonth</i> and <i>maxdaysinmonth</i>. The names of the different calendars which can be used as <code>calendar</code> are as follows:</p><p>If no <code>calendar</code> is specified information on all supported calendars is returned as an array.</p>
	 * @param int $calendar <p>Calendar to return information for. If no calendar is specified information about all calendars is returned.</p>
	 * @return array
	 * @link http://php.net/manual/en/function.cal-info.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_info(int $calendar = -1): array {}

	/**
	 * Converts from a supported calendar to Julian Day Count
	 * <p><b>cal_to_jd()</b> calculates the Julian day count for a date in the specified <code>calendar</code>. Supported <code>calendar</code>s are <b><code>CAL_GREGORIAN</code></b>, <b><code>CAL_JULIAN</code></b>, <b><code>CAL_JEWISH</code></b> and <b><code>CAL_FRENCH</code></b>.</p>
	 * @param int $calendar <p>Calendar to convert from, one of <b><code>CAL_GREGORIAN</code></b>, <b><code>CAL_JULIAN</code></b>, <b><code>CAL_JEWISH</code></b> or <b><code>CAL_FRENCH</code></b>.</p>
	 * @param int $month <p>The month as a number, the valid range depends on the <code>calendar</code></p>
	 * @param int $day <p>The day as a number, the valid range depends on the <code>calendar</code></p>
	 * @param int $year <p>The year as a number, the valid range depends on the <code>calendar</code></p>
	 * @return int <p>A Julian Day number.</p>
	 * @link http://php.net/manual/en/function.cal-to-jd.php
	 * @see cal_from_jd(), frenchtojd(), gregoriantojd(), jewishtojd(), juliantojd(), unixtojd()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_to_jd(int $calendar, int $month, int $day, int $year): int {}

	/**
	 * Get Unix timestamp for midnight on Easter of a given year
	 * <p>Returns the Unix timestamp corresponding to midnight on Easter of the given year.</p><p>This function will generate a warning if the year is outside of the range for Unix timestamps (i.e. typically before 1970 or after 2037 on 32bit systems).</p><p>The date of Easter Day was defined by the Council of Nicaea in AD325 as the Sunday after the first full moon which falls on or after the Spring Equinox. The Equinox is assumed to always fall on 21st March, so the calculation reduces to determining the date of the full moon and the date of the following Sunday. The algorithm used here was introduced around the year 532 by Dionysius Exiguus. Under the Julian Calendar (for years before 1753) a simple 19-year cycle is used to track the phases of the Moon. Under the Gregorian Calendar (for years after 1753 - devised by Clavius and Lilius, and introduced by Pope Gregory XIII in October 1582, and into Britain and its then colonies in September 1752) two correction factors are added to make the cycle more accurate.</p>
	 * @param int $year <p>The year as a number between 1970 an 2037. If omitted, defaults to the current year according to the local time.</p>
	 * @return int <p>The easter date as a unix timestamp.</p>
	 * @link http://php.net/manual/en/function.easter-date.php
	 * @see easter_days()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function easter_date(int $year  = 'date("Y")'): int {}

	/**
	 * Get number of days after March 21 on which Easter falls for a given year
	 * <p>Returns the number of days after March 21 on which Easter falls for a given year. If no year is specified, the current year is assumed.</p><p>This function can be used instead of <code>easter_date()</code> to calculate Easter for years which fall outside the range of Unix timestamps (i.e. before 1970 or after 2037).</p><p>The date of Easter Day was defined by the Council of Nicaea in AD325 as the Sunday after the first full moon which falls on or after the Spring Equinox. The Equinox is assumed to always fall on 21st March, so the calculation reduces to determining the date of the full moon and the date of the following Sunday. The algorithm used here was introduced around the year 532 by Dionysius Exiguus. Under the Julian Calendar (for years before 1753) a simple 19-year cycle is used to track the phases of the Moon. Under the Gregorian Calendar (for years after 1753 - devised by Clavius and Lilius, and introduced by Pope Gregory XIII in October 1582, and into Britain and its then colonies in September 1752) two correction factors are added to make the cycle more accurate.</p>
	 * @param int $year <p>The year as a positive number. If omitted, defaults to the current year according to the local time.</p>
	 * @param int $method <p>Allows Easter dates to be calculated based on the Gregorian calendar during the years 1582 - 1752 when set to <b><code>CAL_EASTER_ROMAN</code></b>. See the calendar constants for more valid constants.</p>
	 * @return int <p>The number of days after March 21st that the Easter Sunday is in the given <code>year</code>.</p>
	 * @link http://php.net/manual/en/function.easter-days.php
	 * @see easter_date()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function easter_days(int $year  = 'date("Y")', int $method = CAL_EASTER_DEFAULT): int {}

	/**
	 * Converts a date from the French Republican Calendar to a Julian Day Count
	 * <p>Converts a date from the French Republican Calendar to a Julian Day Count.</p><p>These routines only convert dates in years 1 through 14 (Gregorian dates 22 September 1792 through 22 September 1806). This more than covers the period when the calendar was in use.</p>
	 * @param int $month <p>The month as a number from 1 (for Vend&eacute;miaire) to 13 (for the period of 5-6 days at the end of each year)</p>
	 * @param int $day <p>The day as a number from 1 to 30</p>
	 * @param int $year <p>The year as a number between 1 and 14</p>
	 * @return int <p>The julian day for the given french revolution date as an integer.</p>
	 * @link http://php.net/manual/en/function.frenchtojd.php
	 * @see jdtofrench(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function frenchtojd(int $month, int $day, int $year): int {}

	/**
	 * Converts a Gregorian date to Julian Day Count
	 * <p>The valid range for the Gregorian calendar is from November 25, 4714 B.C. to at least December 31, 9999 A.D.</p><p>Although this function can handle dates all the way back to 4714 B.C., such use may not be meaningful. The Gregorian calendar was not instituted until October 15, 1582 (or October 5, 1582 in the Julian calendar). Some countries did not accept it until much later. For example, Britain converted in 1752, The USSR in 1918 and Greece in 1923. Most European countries used the Julian calendar prior to the Gregorian.</p>
	 * @param int $month <p>The month as a number from 1 (for January) to 12 (for December)</p>
	 * @param int $day <p>The day as a number from 1 to 31. If the month has less days then given, overflow occurs; see the example below.</p>
	 * @param int $year <p>The year as a number between -4714 and 9999. Negative numbers mean years B.C., positive numbers mean years A.D. Note that there is no year <i>0</i>; December 31, 1 B.C. is immediately followed by January 1, 1 A.D.</p>
	 * @return int <p>The julian day for the given gregorian date as an integer. Dates outside the valid range return <i>0</i>.</p>
	 * @link http://php.net/manual/en/function.gregoriantojd.php
	 * @see jdtogregorian(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gregoriantojd(int $month, int $day, int $year): int {}

	/**
	 * Returns the day of the week
	 * <p>Returns the day of the week. Can return a string or an integer depending on the mode.</p>
	 * @param int $julianday <p>A julian day number as integer</p>
	 * @param int $mode <b>Calendar week modes</b>   Mode Meaning     0 (Default)  Return the day number as an int (0=Sunday, 1=Monday, etc)    1  Returns string containing the day of week (English-Gregorian)    2  Return a string containing the abbreviated day of week (English-Gregorian)
	 * @return mixed <p>The gregorian weekday as either an integer or string.</p>
	 * @link http://php.net/manual/en/function.jddayofweek.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jddayofweek(int $julianday, int $mode = CAL_DOW_DAYNO) {}

	/**
	 * Returns a month name
	 * <p>Returns a string containing a month name. <code>mode</code> tells this function which calendar to convert the Julian Day Count to, and what type of month names are to be returned.</p>
	 * @param int $julianday
	 * @param int $mode <p>The calendar mode (see table above).</p>
	 * @return string <p>The month name for the given Julian Day and <code>mode</code>.</p>
	 * @link http://php.net/manual/en/function.jdmonthname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdmonthname(int $julianday, int $mode): string {}

	/**
	 * Converts a Julian Day Count to the French Republican Calendar
	 * <p>Converts a Julian Day Count to the French Republican Calendar.</p>
	 * @param int $juliandaycount
	 * @return string <p>The french revolution date as a string in the form "month/day/year"</p>
	 * @link http://php.net/manual/en/function.jdtofrench.php
	 * @see frenchtojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtofrench(int $juliandaycount): string {}

	/**
	 * Converts Julian Day Count to Gregorian date
	 * <p>Converts Julian Day Count to a string containing the Gregorian date in the format of "month/day/year".</p>
	 * @param int $julianday <p>A julian day number as integer</p>
	 * @return string <p>The gregorian date as a string in the form "month/day/year"</p>
	 * @link http://php.net/manual/en/function.jdtogregorian.php
	 * @see gregoriantojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtogregorian(int $julianday): string {}

	/**
	 * Converts a Julian day count to a Jewish calendar date
	 * <p>Converts a Julian Day Count to the Jewish Calendar.</p>
	 * @param int $juliandaycount
	 * @param bool $hebrew <p>If the <code>hebrew</code> parameter is set to <b><code>TRUE</code></b>, the <code>fl</code> parameter is used for Hebrew, ISO-8859-8 encoded string based, output format.</p>
	 * @param int $fl <p>A bitmask which may consist of <b><code>CAL_JEWISH_ADD_ALAFIM_GERESH</code></b>, <b><code>CAL_JEWISH_ADD_ALAFIM</code></b> and <b><code>CAL_JEWISH_ADD_GERESHAYIM</code></b>.</p>
	 * @return string <p>The Jewish date as a string in the form "month/day/year", or an ISO-8859-8 encoded Hebrew date string, according to the <code>hebrew</code> parameter.</p>
	 * @link http://php.net/manual/en/function.jdtojewish.php
	 * @see jewishtojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtojewish(int $juliandaycount, bool $hebrew = FALSE, int $fl = 0): string {}

	/**
	 * Converts a Julian Day Count to a Julian Calendar Date
	 * <p>Converts Julian Day Count to a string containing the Julian Calendar Date in the format of "month/day/year".</p>
	 * @param int $julianday <p>A julian day number as integer</p>
	 * @return string <p>The julian date as a string in the form "month/day/year"</p>
	 * @link http://php.net/manual/en/function.jdtojulian.php
	 * @see juliantojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtojulian(int $julianday): string {}

	/**
	 * Convert Julian Day to Unix timestamp
	 * <p>This function will return a Unix timestamp corresponding to the Julian Day given in <code>jday</code> or <b><code>FALSE</code></b> if <code>jday</code> is not inside the Unix epoch (Gregorian years between 1970 and 2037 or 2440588 &lt;= <code>jday</code> &lt;= 2465342 ). The time returned is UTC.</p>
	 * @param int $jday <p>A julian day number between 2440588 and 2465342.</p>
	 * @return int <p>The unix timestamp for the start (midnight, not noon) of the given Julian day.</p>
	 * @link http://php.net/manual/en/function.jdtounix.php
	 * @see unixtojd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtounix(int $jday): int {}

	/**
	 * Converts a date in the Jewish Calendar to Julian Day Count
	 * <p>Although this function can handle dates all the way back to the year 1 (3761 B.C.), such use may not be meaningful. The Jewish calendar has been in use for several thousand years, but in the early days there was no formula to determine the start of a month. A new month was started when the new moon was first observed.</p>
	 * @param int $month <p>The month as a number from <i>1</i> to <i>13</i>, where <i>1</i> means <i>Tishri</i>, <i>13</i> means <i>Elul</i>, and <i>6</i> <i>and</i> <i>7</i> mean <i>Adar</i> in regular years, but <i>Adar I</i> and <i>Adar II</i>, respectively, in leap years.</p>
	 * @param int $day <p>The day as a number from <i>1</i> to <i>30</i>. If the month has only 29 days, the first day of the following month is assumed.</p>
	 * @param int $year <p>The year as a number between 1 and 9999</p>
	 * @return int <p>The julian day for the given jewish date as an integer.</p>
	 * @link http://php.net/manual/en/function.jewishtojd.php
	 * @see jdtojewish(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jewishtojd(int $month, int $day, int $year): int {}

	/**
	 * Converts a Julian Calendar date to Julian Day Count
	 * <p>Valid Range for Julian Calendar 4713 B.C. to 9999 A.D.</p><p>Although this function can handle dates all the way back to 4713 B.C., such use may not be meaningful. The calendar was created in 46 B.C., but the details did not stabilize until at least 8 A.D., and perhaps as late at the 4th century. Also, the beginning of a year varied from one culture to another - not all accepted January as the first month.</p><p>Remember, the current calendar system being used worldwide is the Gregorian calendar. <code>gregoriantojd()</code> can be used to convert such dates to their Julian Day count.</p>
	 * @param int $month <p>The month as a number from 1 (for January) to 12 (for December)</p>
	 * @param int $day <p>The day as a number from 1 to 31</p>
	 * @param int $year <p>The year as a number between -4713 and 9999</p>
	 * @return int <p>The julian day for the given julian date as an integer.</p>
	 * @link http://php.net/manual/en/function.juliantojd.php
	 * @see jdtojulian(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function juliantojd(int $month, int $day, int $year): int {}

	/**
	 * Convert Unix timestamp to Julian Day
	 * <p>Return the Julian Day for a Unix <code>timestamp</code> (seconds since 1.1.1970), or for the current day if no <code>timestamp</code> is given. Either way, the time is regarded as local time (not UTC).</p>
	 * @param int $timestamp <p>A unix timestamp to convert.</p>
	 * @return int <p>A julian day number as integer.</p>
	 * @link http://php.net/manual/en/function.unixtojd.php
	 * @see jdtounix()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function unixtojd(int $timestamp  = 'time()'): int {}

	/**
	 * For <code>jddayofweek()</code>: the day of the week as <code>integer</code>, where <i>0</i> means Sunday and <i>6</i> means Saturday.
	 */
	define('CAL_DOW_DAYNO', 0);

	/**
	 * For <code>jddayofweek()</code>: the English name of the day of the week.
	 */
	define('CAL_DOW_LONG', 1);

	/**
	 * For <code>jddayofweek()</code>: the abbreviated English name of the day of the week.
	 */
	define('CAL_DOW_SHORT', 2);

	/**
	 * For <code>easter_days()</code>: calculate Easter according to the proleptic Gregorian calendar.
	 */
	define('CAL_EASTER_ALWAYS_GREGORIAN', 2);

	/**
	 * For <code>easter_days()</code>: calculate Easter according to the Julian calendar.
	 */
	define('CAL_EASTER_ALWAYS_JULIAN', 3);

	/**
	 * For <code>easter_days()</code>: calculate Easter for years before 1753 according to the Julian calendar, and for later years according to the Gregorian calendar.
	 */
	define('CAL_EASTER_DEFAULT', 0);

	/**
	 * For <code>easter_days()</code>: calculate Easter for years before 1583 according to the Julian calendar, and for later years according to the Gregorian calendar.
	 */
	define('CAL_EASTER_ROMAN', 1);

	/**
	 * For <code>cal_days_in_month()</code>, <code>cal_from_jd()</code>, <code>cal_info()</code> and <code>cal_to_jd()</code>: use the French Repuclican calendar.
	 */
	define('CAL_FRENCH', 3);

	/**
	 * For <code>cal_days_in_month()</code>, <code>cal_from_jd()</code>, <code>cal_info()</code> and <code>cal_to_jd()</code>: use the proleptic Gregorian calendar.
	 */
	define('CAL_GREGORIAN', 0);

	/**
	 * For <code>cal_days_in_month()</code>, <code>cal_from_jd()</code>, <code>cal_info()</code> and <code>cal_to_jd()</code>: use the Jewish calendar.
	 */
	define('CAL_JEWISH', 2);

	/**
	 * For <code>jdtojewish()</code>: adds the word alafim as thousands separator to the year number.
	 */
	define('CAL_JEWISH_ADD_ALAFIM', 4);

	/**
	 * For <code>jdtojewish()</code>: adds a geresh symbol (which resembles a single-quote mark) as thousands separator to the year number.
	 */
	define('CAL_JEWISH_ADD_ALAFIM_GERESH', 2);

	/**
	 * For <code>jdtojewish()</code>: add a gershayim symbol (which resembles a double-quote mark) before the final letter of the day and year numbers.
	 */
	define('CAL_JEWISH_ADD_GERESHAYIM', 8);

	/**
	 * For <code>cal_days_in_month()</code>, <code>cal_from_jd()</code>, <code>cal_info()</code> and <code>cal_to_jd()</code>: use the Julian calendar.
	 */
	define('CAL_JULIAN', 1);

	/**
	 * For <code>jdmonthname()</code>: the French Republican month name.
	 */
	define('CAL_MONTH_FRENCH', 5);

	/**
	 * For <code>jdmonthname()</code>: the Gregorian month name.
	 */
	define('CAL_MONTH_GREGORIAN_LONG', 1);

	/**
	 * For <code>jdmonthname()</code>: the abbreviated Gregorian month name.
	 */
	define('CAL_MONTH_GREGORIAN_SHORT', 0);

	/**
	 * For <code>jdmonthname()</code>: the Jewish month name.
	 */
	define('CAL_MONTH_JEWISH', 4);

	/**
	 * For <code>jdmonthname()</code>: the Julian month name.
	 */
	define('CAL_MONTH_JULIAN_LONG', 3);

	/**
	 * For <code>jdmonthname()</code>: the abbreviated Julian month name.
	 */
	define('CAL_MONTH_JULIAN_SHORT', 2);

	/**
	 * The number of available calendars.
	 */
	define('CAL_NUM_CALS', 4);

}
