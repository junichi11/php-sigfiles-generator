<?php



namespace {

	/**
	 * <p>Represents a date interval.</p>
	 * <p>A date interval stores either a fixed amount of time (in years, months, days, hours etc) or a relative time string in the format that DateTime's constructor supports.</p>
	 * @link http://php.net/manual/en/class.dateinterval.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class DateInterval {

		/**
		 * @var integer <p>Number of years.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.y
		 */
		public $y;

		/**
		 * @var integer <p>Number of months.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.m
		 */
		public $m;

		/**
		 * @var integer <p>Number of days.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.d
		 */
		public $d;

		/**
		 * @var integer <p>Number of hours.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.h
		 */
		public $h;

		/**
		 * @var integer <p>Number of minutes.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.i
		 */
		public $i;

		/**
		 * @var integer <p>Number of seconds.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.s
		 */
		public $s;

		/**
		 * @var float <p>Number of microseconds, as a fraction of a second.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.f
		 */
		public $f;

		/**
		 * @var integer <p>Is <i>1</i> if the interval represents a negative time period and <i>0</i> otherwise. See <code>DateInterval::format()</code>.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.invert
		 */
		public $invert;

		/**
		 * @var mixed <p>If the DateInterval object was created by <code>DateTime::diff()</code>, then this is the total number of days between the start and end dates. Otherwise, days will be <b><code>FALSE</code></b>.</p> <p>Before PHP 5.4.20/5.5.4 instead of <b><code>FALSE</code></b> you will receive -99999 upon accessing the property.</p>
		 * @link http://php.net/manual/en/class.dateinterval.php#dateinterval.props.days
		 */
		public $days;

		/**
		 * Creates a new DateInterval object
		 * <p>Creates a new DateInterval object.</p>
		 * @param string $interval_spec <p>An interval specification.</p> <p>The format starts with the letter <i>P</i>, for "period." Each duration period is represented by an integer value followed by a period designator. If the duration contains time elements, that portion of the specification is preceded by the letter <i>T</i>.</p> <p></p> <b> <code>interval_spec</code> Period Designators </b>   Period Designator Description     <i>Y</i> years   <i>M</i> months   <i>D</i> days   <i>W</i>  weeks. These get converted into days, so can not be combined with <i>D</i>.    <i>H</i> hours   <i>M</i> minutes   <i>S</i> seconds    <p>Here are some simple examples. Two days is <i>P2D</i>. Two seconds is <i>PT2S</i>. Six years and five minutes is <i>P6YT5M</i>.</p> <p><b>Note</b>:</p><p>The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the right. So years before months, months before days, days before minutes, etc. Thus one year and four days must be represented as <i>P1Y4D</i>, not <i>P4D1Y</i>.</p>  <p>The specification can also be represented as a date time. A sample of one year and four days would be <i>P0001-00-04T00:00:00</i>. But the values in this format can not exceed a given period's roll-over-point (e.g. <i>25</i> hours is invalid).</p> <p>These formats are based on the ISO 8601 duration specification.</p>
		 * @return self
		 * @link http://php.net/manual/en/dateinterval.construct.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub(), DateTime::diff()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $interval_spec) {}

		/**
		 * Sets up a DateInterval from the relative parts of the string
		 * <p>Uses the normal date parsers and sets up a DateInterval from the relative parts of the parsed string.</p>
		 * @param string $time <p>A date with relative parts. Specifically, the relative formats supported by the parser used for <code>strtotime()</code> and DateTime will be used to construct the DateInterval.</p>
		 * @return DateInterval <p>Returns a new DateInterval instance.</p>
		 * @link http://php.net/manual/en/dateinterval.createfromdatestring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function createFromDateString(string $time): \DateInterval {}

		/**
		 * Formats the interval
		 * <p>Formats the interval.</p>
		 * @param string $format <p></p> <b> The following characters are recognized in the <code>format</code> parameter string. Each format character must be prefixed by a percent sign (<i>%</i>). </b>   <code>format</code> character Description Example values     <i>%</i> Literal <i>%</i> <i>%</i>   <i>Y</i> Years, numeric, at least 2 digits with leading 0 <i>01</i>, <i>03</i>   <i>y</i> Years, numeric <i>1</i>, <i>3</i>   <i>M</i> Months, numeric, at least 2 digits with leading 0 <i>01</i>, <i>03</i>, <i>12</i>   <i>m</i> Months, numeric <i>1</i>, <i>3</i>, <i>12</i>   <i>D</i> Days, numeric, at least 2 digits with leading 0 <i>01</i>, <i>03</i>, <i>31</i>   <i>d</i> Days, numeric <i>1</i>, <i>3</i>, <i>31</i>   <i>a</i> Total number of days as a result of a <code>DateTime::diff()</code> or <i>(unknown)</i> otherwise <i>4</i>, <i>18</i>, <i>8123</i>   <i>H</i> Hours, numeric, at least 2 digits with leading 0 <i>01</i>, <i>03</i>, <i>23</i>   <i>h</i> Hours, numeric <i>1</i>, <i>3</i>, <i>23</i>   <i>I</i> Minutes, numeric, at least 2 digits with leading 0 <i>01</i>, <i>03</i>, <i>59</i>   <i>i</i> Minutes, numeric <i>1</i>, <i>3</i>, <i>59</i>   <i>S</i> Seconds, numeric, at least 2 digits with leading 0 <i>01</i>, <i>03</i>, <i>57</i>   <i>s</i> Seconds, numeric <i>1</i>, <i>3</i>, <i>57</i>   <i>F</i> Microseconds, numeric, at least 6 digits with leading 0 <i>007701</i>, <i>052738</i>, <i>428291</i>   <i>f</i> Microseconds, numeric <i>7701</i>, <i>52738</i>, <i>428291</i>   <i>R</i> Sign "<i>-</i>" when negative, "<i>+</i>" when positive <i>-</i>, <i>+</i>   <i>r</i> Sign "<i>-</i>" when negative, empty when positive <i>-</i>, <i></i>
		 * @return string <p>Returns the formatted interval.</p>
		 * @link http://php.net/manual/en/dateinterval.format.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function format(string $format): string {}
	}

	/**
	 * <p>Represents a date period.</p>
	 * <p>A date period allows iteration over a set of dates and times, recurring at regular intervals, over a given period.</p>
	 * @link http://php.net/manual/en/class.dateperiod.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class DatePeriod implements \Traversable {

		/**
		 * @var integer <p>Exclude start date, used in <code>DatePeriod::__construct()</code>.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php
		 */
		const EXCLUDE_START_DATE = 1;

		/**
		 * @var integer <p>The number of recurrences.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php#dateperiod.props.recurrences
		 */
		public $recurrences;

		/**
		 * @var boolean <p>Whether to include the start date in the set of recurring dates or not.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php#dateperiod.props.include_start_date
		 */
		public $include_start_date;

		/**
		 * @var DateTimeInterface <p>The start date of the period.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php#dateperiod.props.start
		 */
		public $start;

		/**
		 * @var DateTimeInterface <p>During iteration this will contain the current date within the period.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php#dateperiod.props.current
		 */
		public $current;

		/**
		 * @var DateTimeInterface <p>The end date of the period.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php#dateperiod.props.end
		 */
		public $end;

		/**
		 * @var DateInterval <p>An ISO 8601 repeating interval specification.</p>
		 * @link http://php.net/manual/en/class.dateperiod.php#dateperiod.props.interval
		 */
		public $interval;

		/**
		 * Creates a new DatePeriod object
		 * <p>Creates a new DatePeriod object.</p>
		 * @param \DateTimeInterface $start <p>The start date of the period.</p>
		 * @param \DateInterval $interval <p>The interval between recurrences within the period.</p>
		 * @param int $recurrences <p>The number of recurrences.</p>
		 * @param int $options <p>Can be set to <b><code>DatePeriod::EXCLUDE_START_DATE</code></b> to exclude the start date from the set of recurring dates within the period.</p>
		 * @return self
		 * @link http://php.net/manual/en/dateperiod.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(\DateTimeInterface $start, \DateInterval $interval, int $recurrences, int $options = NULL) {}

		/**
		 * Gets the interval
		 * <p>Gets a DateInterval <code>object</code> representing the interval used for the period.</p>
		 * @return DateInterval <p>Returns a DateInterval <code>object</code></p>
		 * @link http://php.net/manual/en/dateperiod.getdateinterval.php
		 * @since PHP 5 >= 5.6.5, PHP 7
		 */
		public function getDateInterval(): \DateInterval {}

		/**
		 * Gets the end date
		 * <p>Gets the end date of the period.</p>
		 * @return DateTimeInterface <p>Returns <b><code>NULL</code></b> if the DatePeriod does not have an end date. For example, when initialized with the <code>recurrences</code> parameter, or the <code>isostr</code> parameter without an end date.</p><p>Returns a DateTimeImmutable <code>object</code> when the DatePeriod is initialized with a DateTimeImmutable <code>object</code> as the <code>end</code> parameter.</p><p>Returns a DateTime <code>object</code> otherwise.</p>
		 * @link http://php.net/manual/en/dateperiod.getenddate.php
		 * @since PHP 5 >= 5.6.5, PHP 7
		 */
		public function getEndDate(): \DateTimeInterface {}

		/**
		 * Gets the start date
		 * <p>Gets the start date of the period.</p>
		 * @return DateTimeInterface <p>Returns a DateTimeImmutable <code>object</code> when the DatePeriod is initialized with a DateTimeImmutable <code>object</code> as the <code>start</code> parameter.</p><p>Returns a DateTime <code>object</code> otherwise.</p>
		 * @link http://php.net/manual/en/dateperiod.getstartdate.php
		 * @since PHP 5 >= 5.6.5, PHP 7
		 */
		public function getStartDate(): \DateTimeInterface {}
	}

	/**
	 * <p>Representation of date and time.</p>
	 * @link http://php.net/manual/en/class.datetime.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class DateTime implements \DateTimeInterface {

		/**
		 * @var string Atom (example: 2005-08-15T15:52:01+00:00)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const ATOM = "Y-m-d\TH:i:sP";

		/**
		 * @var string HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const COOKIE = "l, d-M-Y H:i:s T";

		/**
		 * @var string ISO-8601 (example: 2005-08-15T15:52:01+0000)  <p><b>Note</b>:  This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons. Use <b><code>DateTime::ATOM</code></b> or <b><code>DATE_ATOM</code></b> for compatibility with ISO-8601 instead. </p>
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const ISO8601 = "Y-m-d\TH:i:sO";

		/**
		 * @var string RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC822 = "D, d M y H:i:s O";

		/**
		 * @var string RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC850 = "l, d-M-y H:i:s T";

		/**
		 * @var string RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC1036 = "D, d M y H:i:s O";

		/**
		 * @var string RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC1123 = "D, d M Y H:i:s O";

		/**
		 * @var string RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC2822 = "D, d M Y H:i:s O";

		/**
		 * @var string Same as <b><code>DATE_ATOM</code></b> (since PHP 5.1.3)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC3339 = "Y-m-d\TH:i:sP";

		/**
		 * @var string RFC 3339 EXTENDED format (since PHP 7.0.0) (example: 2005-08-15T15:52:01.000+00:00)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RFC3339_EXTENDED = "Y-m-d\TH:i:s.vP";

		/**
		 * @var string RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const RSS = "D, d M Y H:i:s O";

		/**
		 * @var string World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
		 * @link http://php.net/manual/en/class.datetime.php
		 */
		const W3C = "Y-m-d\TH:i:sP";

		/**
		 * Returns new DateTime object
		 * <p>Returns new DateTime object.</p>
		 * @param string $time <p>A date/time string. Valid formats are explained in Date and Time Formats.</p> <p>Enter <i>"now"</i> here to obtain the current time when using the <code>$timezone</code> parameter.</p>
		 * @param \DateTimeZone $timezone <p>A DateTimeZone object representing the timezone of <code>$time</code>.</p> <p>If <code>$timezone</code> is omitted, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>$timezone</code> parameter and the current timezone are ignored when the <code>$time</code> parameter either is a UNIX timestamp (e.g. <i>@946684800</i>) or specifies a timezone (e.g. <i>2010-01-28T15:00:00+02:00</i>).</p>
		 * @return DateTime <p>Returns a new DateTime instance. Procedural style returns <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.construct.php
		 * @see DateTime::createFromFormat(), DateTimeZone::__construct(), date_default_timezone_set(), DateTime::getLastErrors(), checkdate()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function __construct(string $time = "now", \DateTimeZone $timezone = NULL) {}

		/**
		 * The __set_state handler
		 * <p>The __set_state() handler.</p>
		 * @param array $array <p>Initialization array.</p>
		 * @return DateTime <p>Returns a new instance of a DateTime object.</p>
		 * @link http://php.net/manual/en/datetime.set-state.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function __set_state(array $array): \DateTime {}

		/**
		 * The __wakeup handler
		 * <p>The __wakeup() handler.</p>
		 * @return void <p>Initializes a DateTime object.</p>
		 * @link http://php.net/manual/en/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __wakeup() {}

		/**
		 * Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object
		 * <p>Adds the specified DateInterval object to the specified DateTime object.</p>
		 * @param \DateInterval $interval <p>A DateInterval object</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.add.php
		 * @see DateTime::sub(), DateTime::diff(), DateTime::modify()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function add(\DateInterval $interval): \DateTime {}

		/**
		 * Parses a time string according to a specified format
		 * <p>Returns a new DateTime object representing the date and time specified by the <code>time</code> string, which was formatted in the given <code>format</code>.</p>
		 * @param string $format <p>The format that the passed in <code>string</code> should be in. See the formatting options below. In most cases, the same letters as for the <code>date()</code> can be used.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example parsable values     <i>Day</i> --- ---   <i>d</i> and <i>j</i> Day of the month, 2 digits with or without leading zeros  <i>01</i> to <i>31</i> or <i>1</i> to <i>31</i>    <i>D</i> and <i>l</i> A textual representation of a day  <i>Mon</i> through <i>Sun</i> or <i>Sunday</i> through <i>Saturday</i>    <i>S</i> English ordinal suffix for the day of the month, 2 characters. It's ignored while processing.  <i>st</i>, <i>nd</i>, <i>rd</i> or <i>th</i>.    <i>z</i> The day of the year (starting from 0) <i>0</i> through <i>365</i>   <i>Month</i> --- ---   <i>F</i> and <i>M</i> A textual representation of a month, such as January or Sept  <i>January</i> through <i>December</i> or <i>Jan</i> through <i>Dec</i>    <i>m</i> and <i>n</i> Numeric representation of a month, with or without leading zeros  <i>01</i> through <i>12</i> or <i>1</i> through <i>12</i>    <i>Year</i> --- ---   <i>Y</i> A full numeric representation of a year, 4 digits Examples: <i>1999</i> or <i>2003</i>   <i>y</i>  A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive)   Examples: <i>99</i> or <i>03</i> (which will be interpreted as <i>1999</i> and <i>2003</i>, respectively)    <i>Time</i> --- ---   <i>a</i> and <i>A</i> Ante meridiem and Post meridiem <i>am</i> or <i>pm</i>   <i>g</i> and <i>h</i> 12-hour format of an hour with or without leading zero  <i>1</i> through <i>12</i> or <i>01</i> through <i>12</i>    <i>G</i> and <i>H</i> 24-hour format of an hour with or without leading zeros  <i>0</i> through <i>23</i> or <i>00</i> through <i>23</i>    <i>i</i> Minutes with leading zeros <i>00</i> to <i>59</i>   <i>s</i> Seconds, with leading zeros <i>00</i> through <i>59</i>   <i>u</i> Microseconds (up to six digits) Example: <i>45</i>, <i>654321</i>   <i>Timezone</i> --- ---    <i>e</i>, <i>O</i>, <i>P</i> and <i>T</i>  Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation Examples: <i>UTC</i>, <i>GMT</i>, <i>Atlantic/Azores</i> or <i>+0200</i> or <i>+02:00</i> or <i>EST</i>, <i>MDT</i>    <i>Full Date/Time</i> --- ---   <i>U</i> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) Example: <i>1292177455</i>   <i>Whitespace and Separators</i> --- ---   <i> </i> (space) One space or one tab Example: <i> </i>   <i>#</i>  One of the following separation symbol: <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> or <i>)</i>  Example: <i>/</i>    <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> or <i>)</i>  The specified character. Example: <i>-</i>   <i>&#63;</i> A random byte Example: <i>^</i> (Be aware that for UTF-8 characters you might need more than one <i>&#63;</i>. In this case, using <i>&#42;</i> is probably what you want instead)   <i>&#42;</i> Random bytes until the next separator or digit Example: <i>&#42;</i> in <i>Y-&#42;-d</i> with the string <i>2009-aWord-08</i> will match <i>aWord</i>   <i>!</i> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to the Unix Epoch Without <i>!,</i> all fields will be set to the current date and time.   <i>|</i> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to the Unix Epoch if they have not been parsed yet <i>Y-m-d|</i> will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.   <i>+</i> If this format specifier is present, trailing data in the string will not cause an error, but a warning instead Use <code>DateTime::getLastErrors()</code> to find out whether trailing data was present.    <p>Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with <code>DateTime::getLastErrors()</code>.</p> <p>To include literal characters in <code>format</code>, you have to escape them with a backslash (<i>\</i>).</p> <p>If <code>format</code> does not contain the character <i>!</i> then portions of the generated time which are not specified in <code>format</code> will be set to the current system time.</p> <p>If <code>format</code> contains the character <i>!</i>, then portions of the generated time not provided in <code>format</code>, as well as values to the left-hand side of the <i>!</i>, will be set to corresponding values from the Unix epoch.</p> <p>The Unix epoch is 1970-01-01 00:00:00 UTC.</p>
		 * @param string $time <p>String representing the time.</p>
		 * @param \DateTimeZone $timezone <p>A DateTimeZone object representing the desired time zone.</p> <p>If <code>timezone</code> is omitted and <code>time</code> contains no timezone, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>timezone</code> parameter and the current timezone are ignored when the <code>time</code> parameter either contains a UNIX timestamp (e.g. <i>946684800</i>) or specifies a timezone (e.g. <i>2010-01-28T15:00:00+02:00</i>).</p>
		 * @return DateTime <p>Returns a new DateTime instance or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.createfromformat.php
		 * @see DateTime::__construct(), DateTime::getLastErrors(), checkdate(), strptime()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function createFromFormat(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTime {}

		/**
		 * Returns the difference between two DateTime objects
		 * <p>Returns the difference between two DateTimeInterface objects.</p>
		 * @param \DateTimeInterface $datetime2
		 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
		 * @return DateInterval <p>The DateInterval object representing the difference between the two dates or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function diff(\DateTimeInterface $datetime2, bool $absolute = FALSE): \DateInterval {}

		/**
		 * Returns date formatted according to given format
		 * <p>Returns date formatted according to given format.</p>
		 * @param string $format <p>Format accepted by <code>date()</code>.</p>
		 * @return string <p>Returns the formatted date string on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.format.php
		 * @see date()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function format(string $format): string {}

		/**
		 * Returns the warnings and errors
		 * <p>Returns an array of warnings and errors found while parsing a date/time string.</p>
		 * @return array <p>Returns array containing info about warnings and errors.</p>
		 * @link http://php.net/manual/en/datetime.getlasterrors.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function getLastErrors(): array {}

		/**
		 * Returns the timezone offset
		 * <p>Returns the timezone offset.</p>
		 * @return int <p>Returns the timezone offset in seconds from UTC on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getOffset(): int {}

		/**
		 * Gets the Unix timestamp
		 * <p>Gets the Unix timestamp.</p>
		 * @return int <p>Returns the Unix timestamp representing the date.</p>
		 * @link http://php.net/manual/en/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTime::format()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getTimestamp(): int {}

		/**
		 * Return time zone relative to given DateTime
		 * <p>Return time zone relative to given DateTime.</p>
		 * @return DateTimeZone <p>Returns a DateTimeZone object on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getTimezone(): \DateTimeZone {}

		/**
		 * Alters the timestamp
		 * <p>Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by <code>strtotime()</code>.</p>
		 * @param string $modify <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.modify.php
		 * @see strtotime(), DateTime::add(), DateTime::sub(), DateTime::setDate(), DateTime::setISODate(), DateTime::setTime(), DateTime::setTimestamp()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function modify(string $modify): \DateTime {}

		/**
		 * Sets the date
		 * <p>Resets the current date of the DateTime object to a different date.</p>
		 * @param int $year <p>Year of the date.</p>
		 * @param int $month <p>Month of the date.</p>
		 * @param int $day <p>Day of the date.</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.setdate.php
		 * @see DateTime::setISODate(), DateTime::setTime()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setDate(int $year, int $month, int $day): \DateTime {}

		/**
		 * Sets the ISO date
		 * <p>Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.</p>
		 * @param int $year <p>Year of the date.</p>
		 * @param int $week <p>Week of the date.</p>
		 * @param int $day <p>Offset from the first day of the week.</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.setisodate.php
		 * @see DateTime::setDate(), DateTime::setTime()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setISODate(int $year, int $week, int $day = 1): \DateTime {}

		/**
		 * Sets the time
		 * <p>Resets the current time of the DateTime object to a different time.</p>
		 * @param int $hour <p>Hour of the time.</p>
		 * @param int $minute <p>Minute of the time.</p>
		 * @param int $second <p>Second of the time.</p>
		 * @param int $microseconds <p>Microsecond of the time.</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.settime.php
		 * @see DateTime::setDate(), DateTime::setISODate()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0): \DateTime {}

		/**
		 * Sets the date and time based on an Unix timestamp
		 * <p>Sets the date and time based on an Unix timestamp.</p>
		 * @param int $unixtimestamp <p>Unix timestamp representing the date.</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.settimestamp.php
		 * @see DateTime::getTimestamp()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setTimestamp(int $unixtimestamp): \DateTime {}

		/**
		 * Sets the time zone for the DateTime object
		 * <p>Sets a new timezone for a DateTime <code>object</code>.</p>
		 * @param \DateTimeZone $timezone <p>A DateTimeZone object representing the desired time zone.</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.settimezone.php
		 * @see DateTime::getTimezone(), DateTimeZone::__construct()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setTimezone(\DateTimeZone $timezone): \DateTime {}

		/**
		 * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
		 * <p>Subtracts the specified DateInterval object from the specified DateTime object.</p>
		 * @param \DateInterval $interval <p>A DateInterval object</p>
		 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.sub.php
		 * @see DateTime::add(), DateTime::diff(), DateTime::modify()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function sub(\DateInterval $interval): \DateTime {}
	}

	/**
	 * <p>This class behaves the same as DateTime except it never modifies itself but returns a new object instead.</p>
	 * @link http://php.net/manual/en/class.datetimeimmutable.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	class DateTimeImmutable implements \DateTimeInterface {

		/**
		 * Returns new DateTimeImmutable object
		 * <p>Like <code>DateTime::__construct()</code> but works with DateTimeImmutable.</p>
		 * @param string $time
		 * @param \DateTimeZone $timezone
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function __construct(string $time = "now", \DateTimeZone $timezone = NULL) {}

		/**
		 * The __set_state handler
		 * <p>Like <code>DateTime::__set_state()</code> but works with DateTimeImmutable.</p>
		 * @param array $array
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.set-state.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public static function __set_state(array $array): \DateTimeImmutable {}

		/**
		 * The __wakeup handler
		 * <p>The __wakeup() handler.</p>
		 * @return void <p>Initializes a DateTime object.</p>
		 * @link http://php.net/manual/en/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __wakeup() {}

		/**
		 * Adds an amount of days, months, years, hours, minutes and seconds
		 * <p>Like <code>DateTime::add()</code> but works with DateTimeImmutable.</p>
		 * @param \DateInterval $interval
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function add(\DateInterval $interval): \DateTimeImmutable {}

		/**
		 * Parses a time string according to a specified format
		 * <p>Like <code>DateTime::createFromFormat()</code> but works with DateTimeImmutable.</p>
		 * @param string $format
		 * @param string $time
		 * @param \DateTimeZone $timezone
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.createfromformat.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public static function createFromFormat(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTimeImmutable {}

		/**
		 * Returns new DateTimeImmutable object encapsulating the given DateTime object
		 * @param \DateTime $datetime <p>The mutable DateTime object that you want to convert to an immutable version. This object is not modified, but instead a new DateTimeImmutable object is created containing the same date time and timezone information.</p>
		 * @return DateTimeImmutable <p>Returns a new DateTimeImmutable instance.</p>
		 * @link http://php.net/manual/en/datetimeimmutable.createfrommutable.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public static function createFromMutable(\DateTime $datetime): \DateTimeImmutable {}

		/**
		 * Returns the difference between two DateTime objects
		 * <p>Returns the difference between two DateTimeInterface objects.</p>
		 * @param \DateTimeInterface $datetime2
		 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
		 * @return DateInterval <p>The DateInterval object representing the difference between the two dates or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function diff(\DateTimeInterface $datetime2, bool $absolute = FALSE): \DateInterval {}

		/**
		 * Returns date formatted according to given format
		 * <p>Returns date formatted according to given format.</p>
		 * @param string $format <p>Format accepted by <code>date()</code>.</p>
		 * @return string <p>Returns the formatted date string on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.format.php
		 * @see date()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function format(string $format): string {}

		/**
		 * Returns the warnings and errors
		 * <p>Like <code>DateTime::getLastErrors()</code> but works with DateTimeImmutable.</p>
		 * @return array
		 * @link http://php.net/manual/en/datetimeimmutable.getlasterrors.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public static function getLastErrors(): array {}

		/**
		 * Returns the timezone offset
		 * <p>Returns the timezone offset.</p>
		 * @return int <p>Returns the timezone offset in seconds from UTC on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getOffset(): int {}

		/**
		 * Gets the Unix timestamp
		 * <p>Gets the Unix timestamp.</p>
		 * @return int <p>Returns the Unix timestamp representing the date.</p>
		 * @link http://php.net/manual/en/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTime::format()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getTimestamp(): int {}

		/**
		 * Return time zone relative to given DateTime
		 * <p>Return time zone relative to given DateTime.</p>
		 * @return DateTimeZone <p>Returns a DateTimeZone object on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getTimezone(): \DateTimeZone {}

		/**
		 * Creates a new object with modified timestamp
		 * <p>Creates a new <code>DateTimeImmutable</code> object with modified timestamp. The original object is not modified.</p>
		 * @param string $modify <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
		 * @return DateTimeImmutable <p>Returns the newly created object or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimeimmutable.modify.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function modify(string $modify): \DateTimeImmutable {}

		/**
		 * Sets the date
		 * <p>Like <code>DateTime::setDate()</code> but works with DateTimeImmutable.</p>
		 * @param int $year
		 * @param int $month
		 * @param int $day
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.setdate.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setDate(int $year, int $month, int $day): \DateTimeImmutable {}

		/**
		 * Sets the ISO date
		 * <p>Like <code>DateTime::setISODate()</code> but works with DateTimeImmutable.</p>
		 * @param int $year
		 * @param int $week
		 * @param int $day
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.setisodate.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setISODate(int $year, int $week, int $day = 1): \DateTimeImmutable {}

		/**
		 * Sets the time
		 * <p>Like <code>DateTime::setTime()</code> but works with DateTimeImmutable.</p>
		 * @param int $hour
		 * @param int $minute
		 * @param int $second
		 * @param int $microseconds
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.settime.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0): \DateTimeImmutable {}

		/**
		 * Sets the date and time based on a Unix timestamp
		 * <p>Like <code>DateTime::setTimestamp()</code> but works with DateTimeImmutable.</p>
		 * @param int $unixtimestamp
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.settimestamp.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setTimestamp(int $unixtimestamp): \DateTimeImmutable {}

		/**
		 * Sets the time zone
		 * <p>Like <code>DateTime::setTimezone()</code> but works with DateTimeImmutable.</p>
		 * @param \DateTimeZone $timezone
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.settimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setTimezone(\DateTimeZone $timezone): \DateTimeImmutable {}

		/**
		 * Subtracts an amount of days, months, years, hours, minutes and seconds
		 * <p>Like <code>DateTime::sub()</code> but works with DateTimeImmutable.</p>
		 * @param \DateInterval $interval
		 * @return DateTimeImmutable
		 * @link http://php.net/manual/en/datetimeimmutable.sub.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function sub(\DateInterval $interval): \DateTimeImmutable {}
	}

	/**
	 * <p>DateTimeInterface is meant so that both DateTime and DateTimeImmutable can be type hinted for. It is not possible to implement this interface with userland classes.</p>
	 * @link http://php.net/manual/en/class.datetimeinterface.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	interface DateTimeInterface {

		/**
		 * The __wakeup handler
		 * <p>The __wakeup() handler.</p>
		 * @return void <p>Initializes a DateTime object.</p>
		 * @link http://php.net/manual/en/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __wakeup();

		/**
		 * Returns the difference between two DateTime objects
		 * <p>Returns the difference between two DateTimeInterface objects.</p>
		 * @param \DateTimeInterface $datetime2
		 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
		 * @return DateInterval <p>The DateInterval object representing the difference between the two dates or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function diff(\DateTimeInterface $datetime2, bool $absolute = FALSE): \DateInterval;

		/**
		 * Returns date formatted according to given format
		 * <p>Returns date formatted according to given format.</p>
		 * @param string $format <p>Format accepted by <code>date()</code>.</p>
		 * @return string <p>Returns the formatted date string on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.format.php
		 * @see date()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function format(string $format): string;

		/**
		 * Returns the timezone offset
		 * <p>Returns the timezone offset.</p>
		 * @return int <p>Returns the timezone offset in seconds from UTC on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getOffset(): int;

		/**
		 * Gets the Unix timestamp
		 * <p>Gets the Unix timestamp.</p>
		 * @return int <p>Returns the Unix timestamp representing the date.</p>
		 * @link http://php.net/manual/en/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTime::format()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getTimestamp(): int;

		/**
		 * Return time zone relative to given DateTime
		 * <p>Return time zone relative to given DateTime.</p>
		 * @return DateTimeZone <p>Returns a DateTimeZone object on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getTimezone(): \DateTimeZone;
	}

	/**
	 * <p>Representation of time zone.</p>
	 * @link http://php.net/manual/en/class.datetimezone.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class DateTimeZone {

		/**
		 * @var integer <p>Africa time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const AFRICA = 1;

		/**
		 * @var integer <p>America time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const AMERICA = 2;

		/**
		 * @var integer <p>Antarctica time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const ANTARCTICA = 4;

		/**
		 * @var integer <p>Arctic time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const ARCTIC = 8;

		/**
		 * @var integer <p>Asia time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const ASIA = 16;

		/**
		 * @var integer <p>Atlantic time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const ATLANTIC = 32;

		/**
		 * @var integer <p>Australia time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const AUSTRALIA = 64;

		/**
		 * @var integer <p>Europe time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const EUROPE = 128;

		/**
		 * @var integer <p>Indian time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const INDIAN = 256;

		/**
		 * @var integer <p>Pacific time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const PACIFIC = 512;

		/**
		 * @var integer <p>UTC time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const UTC = 1024;

		/**
		 * @var integer <p>All time zones.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const ALL = 2047;

		/**
		 * @var integer <p>All time zones including backwards compatible.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const ALL_WITH_BC = 4095;

		/**
		 * @var integer <p>Time zones per country.</p>
		 * @link http://php.net/manual/en/class.datetimezone.php
		 */
		const PER_COUNTRY = 4096;

		/**
		 * Creates new DateTimeZone object
		 * <p>Creates new DateTimeZone object.</p>
		 * @param string $timezone <p>One of the supported timezone names or an offset value (+0200).</p>
		 * @return DateTimeZone <p>Returns DateTimeZone on success. Procedural style returns <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimezone.construct.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function __construct(string $timezone) {}

		/**
		 * Returns location information for a timezone
		 * <p>Returns location information for a timezone, including country code, latitude/longitude and comments.</p>
		 * @return array <p>Array containing location information about timezone or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimezone.getlocation.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLocation(): array {}

		/**
		 * Returns the name of the timezone
		 * <p>Returns the name of the timezone.</p>
		 * @return string <p>One of the timezone names in the list of timezones.</p>
		 * @link http://php.net/manual/en/datetimezone.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * Returns the timezone offset from GMT
		 * <p>This function returns the offset to GMT for the date/time specified in the <code>datetime</code> parameter. The GMT offset is calculated with the timezone information contained in the DateTimeZone object being used.</p>
		 * @param \DateTime $datetime <p>DateTime that contains the date/time to compute the offset from.</p>
		 * @return int <p>Returns time zone offset in seconds on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimezone.getoffset.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getOffset(\DateTime $datetime): int {}

		/**
		 * Returns all transitions for the timezone
		 * @param int $timestamp_begin <p>Begin timestamp.</p>
		 * @param int $timestamp_end <p>End timestamp.</p>
		 * @return array <p>Returns numerically indexed array containing associative array with all transitions on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimezone.gettransitions.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getTransitions(int $timestamp_begin = NULL, int $timestamp_end = NULL): array {}

		/**
		 * Returns associative array containing dst, offset and the timezone name
		 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimezone.listabbreviations.php
		 * @see timezone_identifiers_list()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public static function listAbbreviations(): array {}

		/**
		 * Returns a numerically indexed array containing all defined timezone identifiers
		 * @param int $what <p>One of DateTimeZone class constants.</p>
		 * @param string $country <p>A two-letter ISO 3166-1 compatible country code.</p> <p><b>Note</b>:  This option is only used when <code>what</code> is set to <b><code>DateTimeZone::PER_COUNTRY</code></b>. </p>
		 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure.</p>
		 * @link http://php.net/manual/en/datetimezone.listidentifiers.php
		 * @see timezone_abbreviations_list()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public static function listIdentifiers(int $what = DateTimeZone::ALL, string $country = NULL): array {}
	}

	/**
	 * Validate a Gregorian date
	 * <p>Checks the validity of the date formed by the arguments. A date is considered valid if each parameter is properly defined.</p>
	 * @param int $month <p>The month is between 1 and 12 inclusive.</p>
	 * @param int $day <p>The day is within the allowed number of days for the given <code>month</code>. Leap <code>year</code>s are taken into consideration.</p>
	 * @param int $year <p>The year is between 1 and 32767 inclusive.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the date given is valid; otherwise returns <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/en/function.checkdate.php
	 * @see mktime(), strtotime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function checkdate(int $month, int $day, int $year): bool {}

	/**
	 * Format a local time/date
	 * <p>Returns a string formatted according to the given format string using the given integer <code>timestamp</code> or the current time if no timestamp is given. In other words, <code>timestamp</code> is optional and defaults to the value of <code>time()</code>.</p>
	 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options below. There are also several predefined date constants that may be used instead, so for example <b><code>DATE_RSS</code></b> contains the format string <i>'D, d M Y H:i:s'</i>.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example returned values     <i>Day</i> --- ---   <i>d</i> Day of the month, 2 digits with leading zeros <i>01</i> to <i>31</i>   <i>D</i> A textual representation of a day, three letters <i>Mon</i> through <i>Sun</i>   <i>j</i> Day of the month without leading zeros <i>1</i> to <i>31</i>   <i>l</i> (lowercase 'L') A full textual representation of the day of the week <i>Sunday</i> through <i>Saturday</i>   <i>N</i> ISO-8601 numeric representation of the day of the week (added in PHP 5.1.0) <i>1</i> (for Monday) through <i>7</i> (for Sunday)   <i>S</i> English ordinal suffix for the day of the month, 2 characters  <i>st</i>, <i>nd</i>, <i>rd</i> or <i>th</i>. Works well with <i>j</i>    <i>w</i> Numeric representation of the day of the week <i>0</i> (for Sunday) through <i>6</i> (for Saturday)   <i>z</i> The day of the year (starting from 0) <i>0</i> through <i>365</i>   <i>Week</i> --- ---   <i>W</i> ISO-8601 week number of year, weeks starting on Monday Example: <i>42</i> (the 42nd week in the year)   <i>Month</i> --- ---   <i>F</i> A full textual representation of a month, such as January or March <i>January</i> through <i>December</i>   <i>m</i> Numeric representation of a month, with leading zeros <i>01</i> through <i>12</i>   <i>M</i> A short textual representation of a month, three letters <i>Jan</i> through <i>Dec</i>   <i>n</i> Numeric representation of a month, without leading zeros <i>1</i> through <i>12</i>   <i>t</i> Number of days in the given month <i>28</i> through <i>31</i>   <i>Year</i> --- ---   <i>L</i> Whether it's a leap year <i>1</i> if it is a leap year, <i>0</i> otherwise.   <i>o</i> ISO-8601 week-numbering year. This has the same value as <i>Y</i>, except that if the ISO week number (<i>W</i>) belongs to the previous or next year, that year is used instead. (added in PHP 5.1.0) Examples: <i>1999</i> or <i>2003</i>   <i>Y</i> A full numeric representation of a year, 4 digits Examples: <i>1999</i> or <i>2003</i>   <i>y</i> A two digit representation of a year Examples: <i>99</i> or <i>03</i>   <i>Time</i> --- ---   <i>a</i> Lowercase Ante meridiem and Post meridiem <i>am</i> or <i>pm</i>   <i>A</i> Uppercase Ante meridiem and Post meridiem <i>AM</i> or <i>PM</i>   <i>B</i> Swatch Internet time <i>000</i> through <i>999</i>   <i>g</i> 12-hour format of an hour without leading zeros <i>1</i> through <i>12</i>   <i>G</i> 24-hour format of an hour without leading zeros <i>0</i> through <i>23</i>   <i>h</i> 12-hour format of an hour with leading zeros <i>01</i> through <i>12</i>   <i>H</i> 24-hour format of an hour with leading zeros <i>00</i> through <i>23</i>   <i>i</i> Minutes with leading zeros <i>00</i> to <i>59</i>   <i>s</i> Seconds, with leading zeros <i>00</i> through <i>59</i>   <i>u</i>  Microseconds (added in PHP 5.2.2). Note that <b>date()</b> will always generate <i>000000</i> since it takes an <code>integer</code> parameter, whereas <code>DateTime::format()</code> does support microseconds if DateTime was created with microseconds.  Example: <i>654321</i>   <i>v</i>  Milliseconds (added in PHP 7.0.0). Same note applies as for <i>u</i>.  Example: <i>654</i>   <i>Timezone</i> --- ---   <i>e</i> Timezone identifier (added in PHP 5.1.0) Examples: <i>UTC</i>, <i>GMT</i>, <i>Atlantic/Azores</i>   <i>I</i> (capital i) Whether or not the date is in daylight saving time <i>1</i> if Daylight Saving Time, <i>0</i> otherwise.   <i>O</i> Difference to Greenwich time (GMT) in hours Example: <i>+0200</i>   <i>P</i> Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3) Example: <i>+02:00</i>   <i>T</i> Timezone abbreviation Examples: <i>EST</i>, <i>MDT</i> ...   <i>Z</i> Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. <i>-43200</i> through <i>50400</i>   <i>Full Date/Time</i> --- ---   <i>c</i> ISO 8601 date (added in PHP 5) 2004-02-12T15:19:21+00:00   <i>r</i> RFC 2822 formatted date Example: <i>Thu, 21 Dec 2000 16:01:07 +0200</i>   <i>U</i> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) See also <code>time()</code>    <p>Unrecognized characters in the format string will be printed as-is. The <i>Z</i> format will always return <i>0</i> when using <code>gmdate()</code>.</p> <p><b>Note</b>:</p><p>Since this function only accepts <code>integer</code> timestamps the <i>u</i> format character is only useful when using the <code>date_format()</code> function with user based timestamps created with <code>date_create()</code>.</p>
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string <p>Returns a formatted date string. If a non-numeric value is used for <code>timestamp</code>, <b><code>FALSE</code></b> is returned and an <b><code>E_WARNING</code></b> level error is emitted.</p>
	 * @link http://php.net/manual/en/function.date.php
	 * @see gmdate(), idate(), getdate(), getlastmod(), mktime(), strftime(), time(), strtotime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function date(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object
	 * <p>Adds the specified DateInterval object to the specified DateTime object.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param \DateInterval $interval <p>A DateInterval object</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.add.php
	 * @see DateTime::sub(), DateTime::diff(), DateTime::modify()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_add(\DateTime $object, \DateInterval $interval): \DateTime {}

	/**
	 * Returns new DateTime object
	 * <p>Returns new DateTime object.</p>
	 * @param string $time <p>A date/time string. Valid formats are explained in Date and Time Formats.</p> <p>Enter <i>"now"</i> here to obtain the current time when using the <code>$timezone</code> parameter.</p>
	 * @param \DateTimeZone $timezone <p>A DateTimeZone object representing the timezone of <code>$time</code>.</p> <p>If <code>$timezone</code> is omitted, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>$timezone</code> parameter and the current timezone are ignored when the <code>$time</code> parameter either is a UNIX timestamp (e.g. <i>@946684800</i>) or specifies a timezone (e.g. <i>2010-01-28T15:00:00+02:00</i>).</p>
	 * @return DateTime <p>Returns a new DateTime instance. Procedural style returns <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.construct.php
	 * @see DateTime::createFromFormat(), DateTimeZone::__construct(), date_default_timezone_set(), DateTime::getLastErrors(), checkdate()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_create(string $time = "now", \DateTimeZone $timezone = NULL): \DateTime {}

	/**
	 * Parses a time string according to a specified format
	 * <p>Returns a new DateTime object representing the date and time specified by the <code>time</code> string, which was formatted in the given <code>format</code>.</p>
	 * @param string $format <p>The format that the passed in <code>string</code> should be in. See the formatting options below. In most cases, the same letters as for the <code>date()</code> can be used.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example parsable values     <i>Day</i> --- ---   <i>d</i> and <i>j</i> Day of the month, 2 digits with or without leading zeros  <i>01</i> to <i>31</i> or <i>1</i> to <i>31</i>    <i>D</i> and <i>l</i> A textual representation of a day  <i>Mon</i> through <i>Sun</i> or <i>Sunday</i> through <i>Saturday</i>    <i>S</i> English ordinal suffix for the day of the month, 2 characters. It's ignored while processing.  <i>st</i>, <i>nd</i>, <i>rd</i> or <i>th</i>.    <i>z</i> The day of the year (starting from 0) <i>0</i> through <i>365</i>   <i>Month</i> --- ---   <i>F</i> and <i>M</i> A textual representation of a month, such as January or Sept  <i>January</i> through <i>December</i> or <i>Jan</i> through <i>Dec</i>    <i>m</i> and <i>n</i> Numeric representation of a month, with or without leading zeros  <i>01</i> through <i>12</i> or <i>1</i> through <i>12</i>    <i>Year</i> --- ---   <i>Y</i> A full numeric representation of a year, 4 digits Examples: <i>1999</i> or <i>2003</i>   <i>y</i>  A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive)   Examples: <i>99</i> or <i>03</i> (which will be interpreted as <i>1999</i> and <i>2003</i>, respectively)    <i>Time</i> --- ---   <i>a</i> and <i>A</i> Ante meridiem and Post meridiem <i>am</i> or <i>pm</i>   <i>g</i> and <i>h</i> 12-hour format of an hour with or without leading zero  <i>1</i> through <i>12</i> or <i>01</i> through <i>12</i>    <i>G</i> and <i>H</i> 24-hour format of an hour with or without leading zeros  <i>0</i> through <i>23</i> or <i>00</i> through <i>23</i>    <i>i</i> Minutes with leading zeros <i>00</i> to <i>59</i>   <i>s</i> Seconds, with leading zeros <i>00</i> through <i>59</i>   <i>u</i> Microseconds (up to six digits) Example: <i>45</i>, <i>654321</i>   <i>Timezone</i> --- ---    <i>e</i>, <i>O</i>, <i>P</i> and <i>T</i>  Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation Examples: <i>UTC</i>, <i>GMT</i>, <i>Atlantic/Azores</i> or <i>+0200</i> or <i>+02:00</i> or <i>EST</i>, <i>MDT</i>    <i>Full Date/Time</i> --- ---   <i>U</i> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) Example: <i>1292177455</i>   <i>Whitespace and Separators</i> --- ---   <i> </i> (space) One space or one tab Example: <i> </i>   <i>#</i>  One of the following separation symbol: <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> or <i>)</i>  Example: <i>/</i>    <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> or <i>)</i>  The specified character. Example: <i>-</i>   <i>&#63;</i> A random byte Example: <i>^</i> (Be aware that for UTF-8 characters you might need more than one <i>&#63;</i>. In this case, using <i>&#42;</i> is probably what you want instead)   <i>&#42;</i> Random bytes until the next separator or digit Example: <i>&#42;</i> in <i>Y-&#42;-d</i> with the string <i>2009-aWord-08</i> will match <i>aWord</i>   <i>!</i> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to the Unix Epoch Without <i>!,</i> all fields will be set to the current date and time.   <i>|</i> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to the Unix Epoch if they have not been parsed yet <i>Y-m-d|</i> will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.   <i>+</i> If this format specifier is present, trailing data in the string will not cause an error, but a warning instead Use <code>DateTime::getLastErrors()</code> to find out whether trailing data was present.    <p>Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with <code>DateTime::getLastErrors()</code>.</p> <p>To include literal characters in <code>format</code>, you have to escape them with a backslash (<i>\</i>).</p> <p>If <code>format</code> does not contain the character <i>!</i> then portions of the generated time which are not specified in <code>format</code> will be set to the current system time.</p> <p>If <code>format</code> contains the character <i>!</i>, then portions of the generated time not provided in <code>format</code>, as well as values to the left-hand side of the <i>!</i>, will be set to corresponding values from the Unix epoch.</p> <p>The Unix epoch is 1970-01-01 00:00:00 UTC.</p>
	 * @param string $time <p>String representing the time.</p>
	 * @param \DateTimeZone $timezone <p>A DateTimeZone object representing the desired time zone.</p> <p>If <code>timezone</code> is omitted and <code>time</code> contains no timezone, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>timezone</code> parameter and the current timezone are ignored when the <code>time</code> parameter either contains a UNIX timestamp (e.g. <i>946684800</i>) or specifies a timezone (e.g. <i>2010-01-28T15:00:00+02:00</i>).</p>
	 * @return DateTime <p>Returns a new DateTime instance or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.createfromformat.php
	 * @see DateTime::__construct(), DateTime::getLastErrors(), checkdate(), strptime()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_create_from_format(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTime {}

	/**
	 * Returns new DateTimeImmutable object
	 * <p>Like <code>DateTime::__construct()</code> but works with DateTimeImmutable.</p>
	 * @param string $time
	 * @param \DateTimeZone $timezone
	 * @return DateTimeImmutable
	 * @link http://php.net/manual/en/datetimeimmutable.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function date_create_immutable(string $time = "now", \DateTimeZone $timezone = NULL): \DateTimeImmutable {}

	/**
	 * Parses a time string according to a specified format
	 * <p>Like <code>DateTime::createFromFormat()</code> but works with DateTimeImmutable.</p>
	 * @param string $format
	 * @param string $time
	 * @param \DateTimeZone $timezone
	 * @return DateTimeImmutable
	 * @link http://php.net/manual/en/datetimeimmutable.createfromformat.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function date_create_immutable_from_format(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTimeImmutable {}

	/**
	 * Sets the date
	 * <p>Resets the current date of the DateTime object to a different date.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $year <p>Year of the date.</p>
	 * @param int $month <p>Month of the date.</p>
	 * @param int $day <p>Day of the date.</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.setdate.php
	 * @see DateTime::setISODate(), DateTime::setTime()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_date_set(\DateTime $object, int $year, int $month, int $day): \DateTime {}

	/**
	 * Gets the default timezone used by all date/time functions in a script
	 * <p>In order of preference, this function returns the default timezone by:</p><p>Reading the timezone set using the <code>date_default_timezone_set()</code> function (if any)</p><p>Prior to PHP 5.4.0 <i>only</i>: Reading the TZ environment variable (if non empty)</p><p>Reading the value of the date.timezone ini option (if set)</p><p>Prior to PHP 5.4.0 <i>only</i>: Querying the host operating system (if supported and allowed by the OS). This uses an algorithm that has to <i>guess</i> the timezone. This is by no means going to work correctly for every situation. A warning is shown when this stage is reached. Do not rely on it to be guessed correctly, and set date.timezone to the correct timezone instead.</p><p>If none of the above succeed, <b>date_default_timezone_get()</b> will return a default timezone of <i>UTC</i>.</p>
	 * @return string <p>Returns a <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.date-default-timezone-get.php
	 * @see date_default_timezone_set()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function date_default_timezone_get(): string {}

	/**
	 * Sets the default timezone used by all date/time functions in a script
	 * <p><b>date_default_timezone_set()</b> sets the default timezone used by all date/time functions.</p><p><b>Note</b>:</p><p>Since PHP 5.1.0 (when the date/time functions were rewritten), every call to a date/time function will generate a <b><code>E_NOTICE</code></b> if the timezone isn't valid, and/or a <b><code>E_WARNING</code></b> message if using the system settings or the TZ environment variable.</p><p>Instead of using this function to set the default timezone in your script, you can also use the INI setting date.timezone to set the default timezone.</p>
	 * @param string $timezone_identifier <p>The timezone identifier, like <i>UTC</i> or <i>Europe/Lisbon</i>. The list of valid identifiers is available in the List of Supported Timezones.</p>
	 * @return bool <p>This function returns <b><code>FALSE</code></b> if the <code>timezone_identifier</code> isn't valid, or <b><code>TRUE</code></b> otherwise.</p>
	 * @link http://php.net/manual/en/function.date-default-timezone-set.php
	 * @see date_default_timezone_get()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function date_default_timezone_set(string $timezone_identifier): bool {}

	/**
	 * Returns the difference between two DateTime objects
	 * <p>Returns the difference between two DateTimeInterface objects.</p>
	 * @param \DateTimeInterface $datetime1
	 * @param \DateTimeInterface $datetime2
	 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
	 * @return DateInterval <p>The DateInterval object representing the difference between the two dates or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.diff.php
	 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_diff(\DateTimeInterface $datetime1, \DateTimeInterface $datetime2, bool $absolute = FALSE): \DateInterval {}

	/**
	 * Returns date formatted according to given format
	 * <p>Returns date formatted according to given format.</p>
	 * @param \DateTimeInterface $object <p>A DateTime object returned by <code>date_create()</code></p>
	 * @param string $format <p>Format accepted by <code>date()</code>.</p>
	 * @return string <p>Returns the formatted date string on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.format.php
	 * @see date()
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function date_format(\DateTimeInterface $object, string $format): string {}

	/**
	 * Returns the warnings and errors
	 * <p>Returns an array of warnings and errors found while parsing a date/time string.</p>
	 * @return array <p>Returns array containing info about warnings and errors.</p>
	 * @link http://php.net/manual/en/datetime.getlasterrors.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_get_last_errors(): array {}

	/**
	 * Alias of DateInterval::createFromDateString()
	 * <p>This function is an alias of: <code>DateInterval::createFromDateString()</code></p>
	 * @link http://php.net/manual/en/function.date-interval-create-from-date-string.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_interval_create_from_date_string() {}

	/**
	 * Alias of DateInterval::format()
	 * <p>This function is an alias of: <code>DateInterval::format()</code></p>
	 * @link http://php.net/manual/en/function.date-interval-format.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_interval_format() {}

	/**
	 * Sets the ISO date
	 * <p>Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $year <p>Year of the date.</p>
	 * @param int $week <p>Week of the date.</p>
	 * @param int $day <p>Offset from the first day of the week.</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.setisodate.php
	 * @see DateTime::setDate(), DateTime::setTime()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_isodate_set(\DateTime $object, int $year, int $week, int $day = 1): \DateTime {}

	/**
	 * Alters the timestamp
	 * <p>Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by <code>strtotime()</code>.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param string $modify <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.modify.php
	 * @see strtotime(), DateTime::add(), DateTime::sub(), DateTime::setDate(), DateTime::setISODate(), DateTime::setTime(), DateTime::setTimestamp()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_modify(\DateTime $object, string $modify): \DateTime {}

	/**
	 * Returns the timezone offset
	 * <p>Returns the timezone offset.</p>
	 * @param \DateTimeInterface $object <p>A DateTime object returned by <code>date_create()</code></p>
	 * @return int <p>Returns the timezone offset in seconds from UTC on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.getoffset.php
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function date_offset_get(\DateTimeInterface $object): int {}

	/**
	 * Returns associative array with detailed info about given date
	 * @param string $date <p>Date in format accepted by <code>strtotime()</code>.</p>
	 * @return array <p>Returns <code>array</code> with information about the parsed date on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.date-parse.php
	 * @see checkdate(), getdate()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_parse(string $date): array {}

	/**
	 * Get info about given date formatted according to the specified format
	 * <p>Returns associative array with detailed info about given date.</p>
	 * @param string $format <p>Format accepted by <code>DateTime::createFromFormat()</code>.</p>
	 * @param string $date <p>String representing the date.</p>
	 * @return array <p>Returns associative array with detailed info about given date.</p>
	 * @link http://php.net/manual/en/function.date-parse-from-format.php
	 * @see DateTime::createFromFormat(), checkdate()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_parse_from_format(string $format, string $date): array {}

	/**
	 * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
	 * <p>Subtracts the specified DateInterval object from the specified DateTime object.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param \DateInterval $interval <p>A DateInterval object</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.sub.php
	 * @see DateTime::add(), DateTime::diff(), DateTime::modify()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_sub(\DateTime $object, \DateInterval $interval): \DateTime {}

	/**
	 * Returns an array with information about sunset/sunrise and twilight begin/end
	 * @param int $time <p>Timestamp.</p>
	 * @param float $latitude <p>Latitude in degrees.</p>
	 * @param float $longitude <p>Longitude in degrees.</p>
	 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure. The structure of the array is detailed in the following list:</p>  <i>sunrise</i>   The time of the sunrise (zenith angle = 90&deg;35').    <i>sunset</i>   The time of the sunset (zenith angle = 90&deg;35').    <i>transit</i>   The time when the sun is at its zenith, i.e. has reached its topmost point.    <i>civil_twilight_begin</i>   The start of the civil dawn (zenith angle = 96&deg;). It ends at <i>sunrise</i>.    <i>civil_twilight_end</i>   The end of the civil dusk (zenith angle = 96&deg;). It starts at <i>sunset</i>.    <i>nautical_twilight_begin</i>   The start of the nautical dawn (zenith angle = 102&deg;). It ends at <i>civil_twilight_begin</i>.    <i>nautical_twilight_end</i>   The end of the nautical dusk (zenith angle = 102&deg;). It starts at <i>civil_twilight_end</i>.    <i>astronomical_twilight_begin</i>   The start of the astronomical dawn (zenith angle = 108&deg;). It ends at <i>nautical_twilight_begin</i>.    <i>astronomical_twilight_end</i>   The end of the astronomical dusk (zenith angle = 108&deg;). It starts at <i>nautical_twilight_end</i>.   <p>The values of the array elements are either UNIX timestamps, <b><code>FALSE</code></b> if the sun is below the respective zenith for the whole day, or <b><code>TRUE</code></b> if the sun is above the respective zenith for the whole day.</p>
	 * @link http://php.net/manual/en/function.date-sun-info.php
	 * @see date_sunrise(), date_sunset()
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	function date_sun_info(int $time, float $latitude, float $longitude): array {}

	/**
	 * Returns time of sunrise for a given day and location
	 * <p><b>date_sunrise()</b> returns the sunrise time for a given day (specified as a <code>timestamp</code>) and location.</p>
	 * @param int $timestamp <p>The <code>timestamp</code> of the day from which the sunrise time is taken.</p>
	 * @param int $format <p></p> <b><code>format</code> constants</b>   constant description example     SUNFUNCS_RET_STRING returns the result as <code>string</code> 16:46   SUNFUNCS_RET_DOUBLE returns the result as <code>float</code> 16.78243132   SUNFUNCS_RET_TIMESTAMP returns the result as <code>integer</code> (timestamp) 1095034606
	 * @param float $latitude <p>Defaults to North, pass in a negative value for South. See also: date.default_latitude</p>
	 * @param float $longitude <p>Defaults to East, pass in a negative value for West. See also: date.default_longitude</p>
	 * @param float $zenith <p><code>zenith</code> is the angle between the center of the sun and a line perpendicular to earth's surface. It defaults to date.sunrise_zenith</p> <b>Common <code>zenith</code> angles</b>   Angle Description     90&deg;50' Sunrise: the point where the sun becomes visible.   96&deg; Civil twilight: conventionally used to signify the start of dawn.   102&deg; Nautical twilight: the point at which the horizon starts being visible at sea.   108&deg; Astronomical twilight: the point at which the sun starts being the source of any illumination.
	 * @param float $gmt_offset
	 * @return mixed <p>Returns the sunrise time in a specified <code>format</code> on success or <b><code>FALSE</code></b> on failure. One potential reason for failure is that the sun does not rise at all, which happens inside the polar circles for part of the year.</p>
	 * @link http://php.net/manual/en/function.date-sunrise.php
	 * @see date_sunset(), date_sun_info()
	 * @since PHP 5, PHP 7
	 */
	function date_sunrise(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude  = 'ini_get("date.default_latitude")', float $longitude  = 'ini_get("date.default_longitude")', float $zenith  = 'ini_get("date.sunrise_zenith")', float $gmt_offset = 0) {}

	/**
	 * Returns time of sunset for a given day and location
	 * <p><b>date_sunset()</b> returns the sunset time for a given day (specified as a <code>timestamp</code>) and location.</p>
	 * @param int $timestamp <p>The <code>timestamp</code> of the day from which the sunset time is taken.</p>
	 * @param int $format <p></p> <b><code>format</code> constants</b>   constant description example     SUNFUNCS_RET_STRING returns the result as <code>string</code> 16:46   SUNFUNCS_RET_DOUBLE returns the result as <code>float</code> 16.78243132   SUNFUNCS_RET_TIMESTAMP returns the result as <code>integer</code> (timestamp) 1095034606
	 * @param float $latitude <p>Defaults to North, pass in a negative value for South. See also: date.default_latitude</p>
	 * @param float $longitude <p>Defaults to East, pass in a negative value for West. See also: date.default_longitude</p>
	 * @param float $zenith <p><code>zenith</code> is the angle between the center of the sun and a line perpendicular to earth's surface. It defaults to date.sunset_zenith</p> <b>Common <code>zenith</code> angles</b>   Angle Description     90&deg;50' Sunset: the point where the sun becomes invisible.   96&deg; Civil twilight: conventionally used to signify the end of dusk.   102&deg; Nautical twilight: the point at which the horizon ends being visible at sea.   108&deg; Astronomical twilight: the point at which the sun ends being the source of any illumination.
	 * @param float $gmt_offset
	 * @return mixed <p>Returns the sunset time in a specified <code>format</code> on success or <b><code>FALSE</code></b> on failure. One potential reason for failure is that the sun does not set at all, which happens inside the polar circles for part of the year.</p>
	 * @link http://php.net/manual/en/function.date-sunset.php
	 * @see date_sunrise(), date_sun_info()
	 * @since PHP 5, PHP 7
	 */
	function date_sunset(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude  = 'ini_get("date.default_latitude")', float $longitude  = 'ini_get("date.default_longitude")', float $zenith  = 'ini_get("date.sunset_zenith")', float $gmt_offset = 0) {}

	/**
	 * Sets the time
	 * <p>Resets the current time of the DateTime object to a different time.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $hour <p>Hour of the time.</p>
	 * @param int $minute <p>Minute of the time.</p>
	 * @param int $second <p>Second of the time.</p>
	 * @param int $microseconds <p>Microsecond of the time.</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.settime.php
	 * @see DateTime::setDate(), DateTime::setISODate()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_time_set(\DateTime $object, int $hour, int $minute, int $second = 0, int $microseconds = 0): \DateTime {}

	/**
	 * Gets the Unix timestamp
	 * <p>Gets the Unix timestamp.</p>
	 * @param \DateTimeInterface $object
	 * @return int <p>Returns the Unix timestamp representing the date.</p>
	 * @link http://php.net/manual/en/datetime.gettimestamp.php
	 * @see DateTime::setTimestamp(), DateTime::format()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_timestamp_get(\DateTimeInterface $object): int {}

	/**
	 * Sets the date and time based on an Unix timestamp
	 * <p>Sets the date and time based on an Unix timestamp.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $unixtimestamp <p>Unix timestamp representing the date.</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.settimestamp.php
	 * @see DateTime::getTimestamp()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_timestamp_set(\DateTime $object, int $unixtimestamp): \DateTime {}

	/**
	 * Return time zone relative to given DateTime
	 * <p>Return time zone relative to given DateTime.</p>
	 * @param \DateTimeInterface $object <p>A DateTime object returned by <code>date_create()</code></p>
	 * @return DateTimeZone <p>Returns a DateTimeZone object on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.gettimezone.php
	 * @see DateTime::setTimezone()
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function date_timezone_get(\DateTimeInterface $object): \DateTimeZone {}

	/**
	 * Sets the time zone for the DateTime object
	 * <p>Sets a new timezone for a DateTime <code>object</code>.</p>
	 * @param \DateTime $object <p>A DateTime object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param \DateTimeZone $timezone <p>A DateTimeZone object representing the desired time zone.</p>
	 * @return DateTime <p>Returns the DateTime object for method chaining or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetime.settimezone.php
	 * @see DateTime::getTimezone(), DateTimeZone::__construct()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_timezone_set(\DateTime $object, \DateTimeZone $timezone): \DateTime {}

	/**
	 * Get date/time information
	 * <p>Returns an associative <code>array</code> containing the date information of the <code>timestamp</code>, or the current local time if no <code>timestamp</code> is given.</p>
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return array <p>Returns an associative <code>array</code> of information related to the <code>timestamp</code>. Elements from the returned associative array are as follows:</p> <b>Key elements of the returned associative array</b>   Key Description Example returned values     <i>"seconds"</i> Numeric representation of seconds <i>0</i> to <i>59</i>   <i>"minutes"</i> Numeric representation of minutes <i>0</i> to <i>59</i>   <i>"hours"</i> Numeric representation of hours <i>0</i> to <i>23</i>   <i>"mday"</i> Numeric representation of the day of the month <i>1</i> to <i>31</i>   <i>"wday"</i> Numeric representation of the day of the week <i>0</i> (for Sunday) through <i>6</i> (for Saturday)   <i>"mon"</i> Numeric representation of a month <i>1</i> through <i>12</i>   <i>"year"</i> A full numeric representation of a year, 4 digits Examples: <i>1999</i> or <i>2003</i>   <i>"yday"</i> Numeric representation of the day of the year <i>0</i> through <i>365</i>   <i>"weekday"</i> A full textual representation of the day of the week <i>Sunday</i> through <i>Saturday</i>   <i>"month"</i> A full textual representation of a month, such as January or March <i>January</i> through <i>December</i>   <i>0</i>  Seconds since the Unix Epoch, similar to the values returned by <code>time()</code> and used by <code>date()</code>.   System Dependent, typically <i>-2147483648</i> through <i>2147483647</i>.
	 * @link http://php.net/manual/en/function.getdate.php
	 * @see date(), idate(), localtime(), time(), setlocale()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getdate(int $timestamp  = 'time()'): array {}

	/**
	 * Get current time
	 * <p>This is an interface to gettimeofday(2). It returns an associative array containing the data returned from the system call.</p>
	 * @param bool $return_float <p>When set to <b><code>TRUE</code></b>, a float instead of an array is returned.</p>
	 * @return mixed <p>By default an <code>array</code> is returned. If <code>return_float</code> is set, then a <code>float</code> is returned.</p><p>Array keys:</p><ul> <li>  "sec" - seconds since the Unix Epoch  </li> <li>  "usec" - microseconds  </li> <li>  "minuteswest" - minutes west of Greenwich  </li> <li>  "dsttime" - type of dst correction  </li> </ul>
	 * @link http://php.net/manual/en/function.gettimeofday.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gettimeofday(bool $return_float = FALSE) {}

	/**
	 * Format a GMT/UTC date/time
	 * <p>Identical to the <code>date()</code> function except that the time returned is Greenwich Mean Time (GMT).</p>
	 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options for the <code>date()</code> function.</p>
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string <p>Returns a formatted date string. If a non-numeric value is used for <code>timestamp</code>, <b><code>FALSE</code></b> is returned and an <b><code>E_WARNING</code></b> level error is emitted.</p>
	 * @link http://php.net/manual/en/function.gmdate.php
	 * @see date(), mktime(), gmmktime(), strftime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gmdate(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * Get Unix timestamp for a GMT date
	 * <p>Identical to <code>mktime()</code> except the passed parameters represents a GMT date. <b>gmmktime()</b> internally uses <code>mktime()</code> so only times valid in derived local time can be used.</p><p>Like <code>mktime()</code>, arguments may be left out in order from right to left, with any omitted arguments being set to the current corresponding GMT value.</p>
	 * @param int $hour <p>The number of the hour relative to the start of the day determined by <code>month</code>, <code>day</code> and <code>year</code>. Negative values reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate hour in the following day(s).</p>
	 * @param int $minute <p>The number of the minute relative to the start of the <code>hour</code>. Negative values reference the minute in the previous hour. Values greater than 59 reference the appropriate minute in the following hour(s).</p>
	 * @param int $second <p>The number of seconds relative to the start of the <code>minute</code>. Negative values reference the second in the previous minute. Values greater than 59 reference the appropriate second in the following minute(s).</p>
	 * @param int $month <p>The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar months of the year in question. Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the appropriate month in the following year(s).</p>
	 * @param int $day <p>The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month. Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).</p>
	 * @param int $year <p>The year</p>
	 * @param int $is_dst <p>Parameters always represent a GMT date so <code>is_dst</code> doesn't influence the result.</p> <p><b>Note</b>:</p><p>This parameter has been removed in PHP 7.0.0.</p>
	 * @return int <p>Returns a <code>integer</code> Unix timestamp.</p>
	 * @link http://php.net/manual/en/function.gmmktime.php
	 * @see mktime(), date(), time()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gmmktime(int $hour  = 'gmdate("H")', int $minute  = 'gmdate("i")', int $second  = 'gmdate("s")', int $month  = 'gmdate("n")', int $day  = 'gmdate("j")', int $year  = 'gmdate("Y")', int $is_dst = -1): int {}

	/**
	 * Format a GMT/UTC time/date according to locale settings
	 * <p>Behaves the same as <code>strftime()</code> except that the time returned is Greenwich Mean Time (GMT). For example, when run in Eastern Standard Time (GMT -0500), the first line below prints "Dec 31 1998 20:00:00", while the second prints "Jan 01 1999 01:00:00".</p>
	 * @param string $format <p>See description in <code>strftime()</code>.</p>
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string <p>Returns a string formatted according to the given format string using the given <code>timestamp</code> or the current local time if no timestamp is given. Month and weekday names and other language dependent strings respect the current locale set with <code>setlocale()</code>.</p>
	 * @link http://php.net/manual/en/function.gmstrftime.php
	 * @see strftime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gmstrftime(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * Format a local time/date as integer
	 * <p>Returns a number formatted according to the given format string using the given integer <code>timestamp</code> or the current local time if no timestamp is given. In other words, <code>timestamp</code> is optional and defaults to the value of <code>time()</code>.</p><p>Unlike the function <code>date()</code>, <b>idate()</b> accepts just one char in the <code>format</code> parameter.</p>
	 * @param string $format <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description     <i>B</i> Swatch Beat/Internet Time   <i>d</i> Day of the month   <i>h</i> Hour (12 hour format)   <i>H</i> Hour (24 hour format)   <i>i</i> Minutes   <i>I</i> (uppercase i) returns <i>1</i> if DST is activated, <i>0</i> otherwise   <i>L</i> (uppercase l) returns <i>1</i> for leap year, <i>0</i> otherwise   <i>m</i> Month number   <i>s</i> Seconds   <i>t</i> Days in current month   <i>U</i> Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC - this is the same as <code>time()</code>   <i>w</i> Day of the week (<i>0</i> on Sunday)   <i>W</i> ISO-8601 week number of year, weeks starting on Monday   <i>y</i> Year (1 or 2 digits - check note below)   <i>Y</i> Year (4 digits)   <i>z</i> Day of the year   <i>Z</i> Timezone offset in seconds
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return int <p>Returns an <code>integer</code>.</p><p>As <b>idate()</b> always returns an <code>integer</code> and as they can't start with a "0", <b>idate()</b> may return fewer digits than you would expect. See the example below.</p>
	 * @link http://php.net/manual/en/function.idate.php
	 * @see date(), getdate(), time()
	 * @since PHP 5, PHP 7
	 */
	function idate(string $format, int $timestamp  = 'time()'): int {}

	/**
	 * Get the local time
	 * <p>The <b>localtime()</b> function returns an array identical to that of the structure returned by the C function call.</p>
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @param bool $is_associative <p>If set to <b><code>FALSE</code></b> or not supplied then the array is returned as a regular, numerically indexed array. If the argument is set to <b><code>TRUE</code></b> then <b>localtime()</b> returns an associative array containing all the different elements of the structure returned by the C function call to localtime. The names of the different keys of the associative array are as follows:</p> <p></p><ul> <li>  "tm_sec" - seconds, <i>0</i> to <i>59</i>  </li> <li>  "tm_min" - minutes, <i>0</i> to <i>59</i>  </li> <li>  "tm_hour" - hours, <i>0</i> to <i>23</i>  </li> <li>  "tm_mday" - day of the month, <i>1</i> to <i>31</i>  </li> <li>  "tm_mon" - month of the year, <i>0</i> (Jan) to <i>11</i> (Dec)  </li> <li>  "tm_year" - years since 1900  </li> <li>  "tm_wday" - day of the week, <i>0</i> (Sun) to <i>6</i> (Sat)  </li> <li>  "tm_yday" - day of the year, <i>0</i> to <i>365</i>  </li> <li>  "tm_isdst" - is daylight savings time in effect&#63;   Positive if yes, <i>0</i> if not, negative if unknown.  </li> </ul>
	 * @return array
	 * @link http://php.net/manual/en/function.localtime.php
	 * @see getdate()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function localtime(int $timestamp  = 'time()', bool $is_associative = FALSE): array {}

	/**
	 * Return current Unix timestamp with microseconds
	 * <p><b>microtime()</b> returns the current Unix timestamp with microseconds. This function is only available on operating systems that support the gettimeofday() system call.</p>
	 * @param bool $get_as_float <p>If used and set to <b><code>TRUE</code></b>, <b>microtime()</b> will return a <code>float</code> instead of a <code>string</code>, as described in the return values section below.</p>
	 * @return mixed <p>By default, <b>microtime()</b> returns a <code>string</code> in the form "msec sec", where <i>sec</i> is the number of seconds since the Unix epoch (0:00:00 January 1,1970 GMT), and <i>msec</i> measures microseconds that have elapsed since <i>sec</i> and is also expressed in seconds.</p><p>If <code>get_as_float</code> is set to <b><code>TRUE</code></b>, then <b>microtime()</b> returns a <code>float</code>, which represents the current time in seconds since the Unix epoch accurate to the nearest microsecond.</p>
	 * @link http://php.net/manual/en/function.microtime.php
	 * @see time()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function microtime(bool $get_as_float = FALSE) {}

	/**
	 * Get Unix timestamp for a date
	 * <p>Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.</p><p>Arguments may be left out in order from right to left; any arguments thus omitted will be set to the current value according to the local date and time.</p>
	 * @param int $hour <p>The number of the hour relative to the start of the day determined by <code>month</code>, <code>day</code> and <code>year</code>. Negative values reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate hour in the following day(s).</p>
	 * @param int $minute <p>The number of the minute relative to the start of the <code>hour</code>. Negative values reference the minute in the previous hour. Values greater than 59 reference the appropriate minute in the following hour(s).</p>
	 * @param int $second <p>The number of seconds relative to the start of the <code>minute</code>. Negative values reference the second in the previous minute. Values greater than 59 reference the appropriate second in the following minute(s).</p>
	 * @param int $month <p>The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar months of the year in question. Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the appropriate month in the following year(s).</p>
	 * @param int $day <p>The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month. Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).</p>
	 * @param int $year <p>The number of the year, may be a two or four digit value, with values between 0-69 mapping to 2000-2069 and 70-100 to 1970-2000. On systems where time_t is a 32bit signed integer, as most common today, the valid range for <code>year</code> is somewhere between 1901 and 2038. However, before PHP 5.1.0 this range was limited from 1970 to 2038 on some systems (e.g. Windows).</p>
	 * @param int $is_dst <p>This parameter can be set to 1 if the time is during daylight savings time (DST), 0 if it is not, or -1 (the default) if it is unknown whether the time is within daylight savings time or not. If it's unknown, PHP tries to figure it out itself. This can cause unexpected (but not incorrect) results. Some times are invalid if DST is enabled on the system PHP is running on or <code>is_dst</code> is set to 1. If DST is enabled in e.g. 2:00, all times between 2:00 and 3:00 are invalid and <b>mktime()</b> returns an undefined (usually negative) value. Some systems (e.g. Solaris 8) enable DST at midnight so time 0:30 of the day when DST is enabled is evaluated as 23:30 of the previous day.</p> <p><b>Note</b>:</p><p>As of PHP 5.1.0, this parameter became deprecated. As a result, the new timezone handling features should be used instead.</p>  <p><b>Note</b>:</p><p>This parameter has been removed in PHP 7.0.0.</p>
	 * @return int <p><b>mktime()</b> returns the Unix timestamp of the arguments given. If the arguments are invalid, the function returns <b><code>FALSE</code></b> (before PHP 5.1 it returned <i>-1</i>).</p>
	 * @link http://php.net/manual/en/function.mktime.php
	 * @see checkdate(), gmmktime(), date(), time()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mktime(int $hour  = 'date("H")', int $minute  = 'date("i")', int $second  = 'date("s")', int $month  = 'date("n")', int $day  = 'date("j")', int $year  = 'date("Y")', int $is_dst = -1): int {}

	/**
	 * Format a local time/date according to locale settings
	 * <p>Format the time and/or date according to locale settings. Month and weekday names and other language-dependent strings respect the current locale set with <code>setlocale()</code>.</p><p>Not all conversion specifiers may be supported by your C library, in which case they will not be supported by PHP's <b>strftime()</b>. Additionally, not all platforms support negative timestamps, so your date range may be limited to no earlier than the Unix epoch. This means that %e, %T, %R and, %D (and possibly others) - as well as dates prior to <i>Jan 1, 1970</i> - will not work on Windows, some Linux distributions, and a few other operating systems. For Windows systems, a complete overview of supported conversion specifiers can be found at MSDN.</p>
	 * @param string $format <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> Description Example returned values     <i>Day</i> --- ---   <i>%a</i> An abbreviated textual representation of the day <i>Sun</i> through <i>Sat</i>   <i>%A</i> A full textual representation of the day <i>Sunday</i> through <i>Saturday</i>   <i>%d</i> Two-digit day of the month (with leading zeros) <i>01</i> to <i>31</i>   <i>%e</i>  Day of the month, with a space preceding single digits. Not implemented as described on Windows. See below for more information.  <i> 1</i> to <i>31</i>   <i>%j</i> Day of the year, 3 digits with leading zeros <i>001</i> to <i>366</i>   <i>%u</i> ISO-8601 numeric representation of the day of the week <i>1</i> (for Monday) through <i>7</i> (for Sunday)   <i>%w</i> Numeric representation of the day of the week <i>0</i> (for Sunday) through <i>6</i> (for Saturday)   <i>Week</i> --- ---   <i>%U</i> Week number of the given year, starting with the first Sunday as the first week <i>13</i> (for the 13th full week of the year)   <i>%V</i> ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week <i>01</i> through <i>53</i> (where 53 accounts for an overlapping week)   <i>%W</i> A numeric representation of the week of the year, starting with the first Monday as the first week <i>46</i> (for the 46th week of the year beginning with a Monday)   <i>Month</i> --- ---   <i>%b</i> Abbreviated month name, based on the locale <i>Jan</i> through <i>Dec</i>   <i>%B</i> Full month name, based on the locale <i>January</i> through <i>December</i>   <i>%h</i> Abbreviated month name, based on the locale (an alias of %b) <i>Jan</i> through <i>Dec</i>   <i>%m</i> Two digit representation of the month <i>01</i> (for January) through <i>12</i> (for December)   <i>Year</i> --- ---   <i>%C</i> Two digit representation of the century (year divided by 100, truncated to an integer) <i>19</i> for the 20th Century   <i>%g</i> Two digit representation of the year going by ISO-8601:1988 standards (see %V) Example: <i>09</i> for the week of January 6, 2009   <i>%G</i> The full four-digit version of %g Example: <i>2008</i> for the week of January 3, 2009   <i>%y</i> Two digit representation of the year Example: <i>09</i> for 2009, <i>79</i> for 1979   <i>%Y</i> Four digit representation for the year Example: <i>2038</i>   <i>Time</i> --- ---   <i>%H</i> Two digit representation of the hour in 24-hour format <i>00</i> through <i>23</i>   <i>%k</i> Hour in 24-hour format, with a space preceding single digits <i> 0</i> through <i>23</i>   <i>%I</i> Two digit representation of the hour in 12-hour format <i>01</i> through <i>12</i>   <i>%l (lower-case 'L')</i> Hour in 12-hour format, with a space preceding single digits <i> 1</i> through <i>12</i>   <i>%M</i> Two digit representation of the minute <i>00</i> through <i>59</i>   <i>%p</i> UPPER-CASE 'AM' or 'PM' based on the given time Example: <i>AM</i> for 00:31, <i>PM</i> for 22:23   <i>%P</i> lower-case 'am' or 'pm' based on the given time Example: <i>am</i> for 00:31, <i>pm</i> for 22:23   <i>%r</i> Same as "%I:%M:%S %p" Example: <i>09:34:17 PM</i> for 21:34:17   <i>%R</i> Same as "%H:%M" Example: <i>00:35</i> for 12:35 AM, <i>16:44</i> for 4:44 PM   <i>%S</i> Two digit representation of the second <i>00</i> through <i>59</i>   <i>%T</i> Same as "%H:%M:%S" Example: <i>21:34:17</i> for 09:34:17 PM   <i>%X</i> Preferred time representation based on locale, without the date Example: <i>03:59:16</i> or <i>15:59:16</i>   <i>%z</i> The time zone offset. Not implemented as described on Windows. See below for more information. Example: <i>-0500</i> for US Eastern Time   <i>%Z</i> The time zone abbreviation. Not implemented as described on Windows. See below for more information. Example: <i>EST</i> for Eastern Time   <i>Time and Date Stamps</i> --- ---   <i>%c</i> Preferred date and time stamp based on locale Example: <i>Tue Feb 5 00:45:10 2009</i> for February 5, 2009 at 12:45:10 AM   <i>%D</i> Same as "%m/%d/%y" Example: <i>02/05/09</i> for February 5, 2009   <i>%F</i> Same as "%Y-%m-%d" (commonly used in database datestamps) Example: <i>2009-02-05</i> for February 5, 2009   <i>%s</i> Unix Epoch Time timestamp (same as the <code>time()</code> function) Example: <i>305815200</i> for September 10, 1979 08:40:00 AM   <i>%x</i> Preferred date representation based on locale, without the time Example: <i>02/05/09</i> for February 5, 2009   <i>Miscellaneous</i> --- ---   <i>%n</i> A newline character ("\n") ---   <i>%t</i> A Tab character ("\t") ---   <i>%%</i> A literal percentage character ("%") ---    <p>Maximum length of this parameter is 1023 characters.</p> <p><b>Warning</b></p> <p>Contrary to ISO-9899:1999, Sun Solaris starts with Sunday as 1. As a result, <i>%u</i> may not function as described in this manual.</p>  <p><b>Warning</b></p> <p><i>Windows only:</i></p> <p>The <i>%e</i> modifier is not supported in the Windows implementation of this function. To achieve this value, the <i>%#d</i> modifier can be used instead. The example below illustrates how to write a cross platform compatible function.</p> <p>The <i>%z</i> and <i>%Z</i> modifiers both return the time zone name instead of the offset or abbreviation.</p>  <p><b>Warning</b></p> <p><i>macOS only:</i> The <i>%P</i> modifier is not supported in the macOS implementation of this function.</p>
	 * @param int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>integer</code> Unix timestamp that defaults to the current local time if a <code>timestamp</code> is not given. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string <p>Returns a string formatted according <code>format</code> using the given <code>timestamp</code> or the current local time if no timestamp is given. Month and weekday names and other language-dependent strings respect the current locale set with <code>setlocale()</code>.</p>
	 * @link http://php.net/manual/en/function.strftime.php
	 * @see setlocale(), mktime(), strptime(), gmstrftime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function strftime(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * Parse a time/date generated with strftime()
	 * <p><b>strptime()</b> returns an array with the <code>date</code> parsed, or <b><code>FALSE</code></b> on error.</p><p>Month and weekday names and other language dependent strings respect the current locale set with <code>setlocale()</code> (<b><code>LC_TIME</code></b>).</p>
	 * @param string $date <p>The string to parse (e.g. returned from <code>strftime()</code>).</p>
	 * @param string $format <p>The format used in <code>date</code> (e.g. the same as used in <code>strftime()</code>). Note that some of the format options available to <code>strftime()</code> may not have any effect within <b>strptime()</b>; the exact subset that are supported will vary based on the operating system and C library in use.</p> <p>For more information about the format options, read the <code>strftime()</code> page.</p>
	 * @return array <p>Returns an array or <b><code>FALSE</code></b> on failure.</p> <b>The following parameters are returned in the array</b>   parameters Description     <i>"tm_sec"</i> Seconds after the minute (0-61)   <i>"tm_min"</i> Minutes after the hour (0-59)   <i>"tm_hour"</i> Hour since midnight (0-23)   <i>"tm_mday"</i> Day of the month (1-31)   <i>"tm_mon"</i> Months since January (0-11)   <i>"tm_year"</i> Years since 1900   <i>"tm_wday"</i> Days since Sunday (0-6)   <i>"tm_yday"</i> Days since January 1 (0-365)   <i>"unparsed"</i> the <code>date</code> part which was not recognized using the specified <code>format</code>
	 * @link http://php.net/manual/en/function.strptime.php
	 * @see checkdate(), strftime(), date_parse_from_format(), DateTime::createFromFormat()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function strptime(string $date, string $format): array {}

	/**
	 * Parse about any English textual datetime description into a Unix timestamp
	 * <p>The function expects to be given a string containing an English date format and will try to parse that format into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 UTC), relative to the timestamp given in <code>now</code>, or the current time if <code>now</code> is not supplied.</p><p>Each parameter of this function uses the default time zone unless a time zone is specified in that parameter. Be careful not to use different time zones in each parameter unless that is intended. See <code>date_default_timezone_get()</code> on the various ways to define the default time zone.</p>
	 * @param string $time <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
	 * @param int $now <p>The timestamp which is used as a base for the calculation of relative dates.</p>
	 * @return int <p>Returns a timestamp on success, <b><code>FALSE</code></b> otherwise. Previous to PHP 5.1.0, this function would return <i>-1</i> on failure.</p>
	 * @link http://php.net/manual/en/function.strtotime.php
	 * @see checkdate(), strptime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function strtotime(string $time, int $now  = 'time()'): int {}

	/**
	 * Return current Unix timestamp
	 * <p>Returns the current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).</p>
	 * @return int
	 * @link http://php.net/manual/en/function.time.php
	 * @see date(), microtime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function time(): int {}

	/**
	 * Returns associative array containing dst, offset and the timezone name
	 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetimezone.listabbreviations.php
	 * @see timezone_identifiers_list()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_abbreviations_list(): array {}

	/**
	 * Returns a numerically indexed array containing all defined timezone identifiers
	 * @param int $what <p>One of DateTimeZone class constants.</p>
	 * @param string $country <p>A two-letter ISO 3166-1 compatible country code.</p> <p><b>Note</b>:  This option is only used when <code>what</code> is set to <b><code>DateTimeZone::PER_COUNTRY</code></b>. </p>
	 * @return array <p>Returns array on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetimezone.listidentifiers.php
	 * @see timezone_abbreviations_list()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_identifiers_list(int $what = DateTimeZone::ALL, string $country = NULL): array {}

	/**
	 * Returns location information for a timezone
	 * <p>Returns location information for a timezone, including country code, latitude/longitude and comments.</p>
	 * @param \DateTimeZone $object <p>A DateTimeZone object returned by <code>timezone_open()</code></p>
	 * @return array <p>Array containing location information about timezone or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetimezone.getlocation.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function timezone_location_get(\DateTimeZone $object): array {}

	/**
	 * Returns the timezone name from abbreviation
	 * @param string $abbr <p>Time zone abbreviation.</p>
	 * @param int $gmtOffset <p>Offset from GMT in seconds. Defaults to -1 which means that first found time zone corresponding to <code>abbr</code> is returned. Otherwise exact offset is searched and only if not found then the first time zone with any offset is returned.</p>
	 * @param int $isdst <p>Daylight saving time indicator. Defaults to -1, which means that whether the time zone has daylight saving or not is not taken into consideration when searching. If this is set to 1, then the <code>gmtOffset</code> is assumed to be an offset with daylight saving in effect; if 0, then <code>gmtOffset</code> is assumed to be an offset without daylight saving in effect. If <code>abbr</code> doesn't exist then the time zone is searched solely by the <code>gmtOffset</code> and <code>isdst</code>.</p>
	 * @return string <p>Returns time zone name on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.timezone-name-from-abbr.php
	 * @see timezone_abbreviations_list()
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	function timezone_name_from_abbr(string $abbr, int $gmtOffset = -1, int $isdst = -1): string {}

	/**
	 * Returns the name of the timezone
	 * <p>Returns the name of the timezone.</p>
	 * @param \DateTimeZone $object <p>The DateTimeZone for which to get a name.</p>
	 * @return string <p>One of the timezone names in the list of timezones.</p>
	 * @link http://php.net/manual/en/datetimezone.getname.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_name_get(\DateTimeZone $object): string {}

	/**
	 * Returns the timezone offset from GMT
	 * <p>This function returns the offset to GMT for the date/time specified in the <code>datetime</code> parameter. The GMT offset is calculated with the timezone information contained in the DateTimeZone object being used.</p>
	 * @param \DateTimeZone $object <p>A DateTimeZone object returned by <code>timezone_open()</code></p>
	 * @param \DateTime $datetime <p>DateTime that contains the date/time to compute the offset from.</p>
	 * @return int <p>Returns time zone offset in seconds on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetimezone.getoffset.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_offset_get(\DateTimeZone $object, \DateTime $datetime): int {}

	/**
	 * Creates new DateTimeZone object
	 * <p>Creates new DateTimeZone object.</p>
	 * @param string $timezone <p>One of the supported timezone names or an offset value (+0200).</p>
	 * @return DateTimeZone <p>Returns DateTimeZone on success. Procedural style returns <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetimezone.construct.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_open(string $timezone): \DateTimeZone {}

	/**
	 * Returns all transitions for the timezone
	 * @param \DateTimeZone $object <p>A DateTimeZone object returned by <code>timezone_open()</code></p>
	 * @param int $timestamp_begin <p>Begin timestamp.</p>
	 * @param int $timestamp_end <p>End timestamp.</p>
	 * @return array <p>Returns numerically indexed array containing associative array with all transitions on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/datetimezone.gettransitions.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_transitions_get(\DateTimeZone $object, int $timestamp_begin = NULL, int $timestamp_end = NULL): array {}

	/**
	 * Gets the version of the timezonedb
	 * <p>Returns the current version of the timezonedb.</p>
	 * @return string <p>Returns a <code>string</code>.</p>
	 * @link http://php.net/manual/en/function.timezone-version-get.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function timezone_version_get(): string {}

	/**
	 * Atom (example: 2005-08-15T15:52:01+00:00)
	 */
	define('DATE_ATOM', 'Y-m-d\TH:i:sP');

	/**
	 * HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
	 */
	define('DATE_COOKIE', 'l, d-M-Y H:i:s T');

	/**
	 * ISO-8601 (example: 2005-08-15T15:52:01+0000)  <p><b>Note</b>:  This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons. Use <b><code>DateTime::ATOM</code></b> or <b><code>DATE_ATOM</code></b> for compatibility with ISO-8601 instead. </p>
	 */
	define('DATE_ISO8601', 'Y-m-d\TH:i:sO');

	/**
	 * RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
	 */
	define('DATE_RFC1036', 'D, d M y H:i:s O');

	/**
	 * RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
	 */
	define('DATE_RFC1123', 'D, d M Y H:i:s O');

	/**
	 * RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
	 */
	define('DATE_RFC2822', 'D, d M Y H:i:s O');

	/**
	 * Same as <b><code>DATE_ATOM</code></b> (since PHP 5.1.3)
	 */
	define('DATE_RFC3339', 'Y-m-d\TH:i:sP');

	/**
	 * RFC 3339 EXTENDED format (since PHP 7.0.0) (example: 2005-08-15T15:52:01.000+00:00)
	 */
	define('DATE_RFC3339_EXTENDED', 'Y-m-d\TH:i:s.vP');

	/**
	 * RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
	 */
	define('DATE_RFC822', 'D, d M y H:i:s O');

	/**
	 * RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
	 */
	define('DATE_RFC850', 'l, d-M-y H:i:s T');

	/**
	 * RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
	 */
	define('DATE_RSS', 'D, d M Y H:i:s O');

	/**
	 * World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
	 */
	define('DATE_W3C', 'Y-m-d\TH:i:sP');

	/**
	 * Hours as floating point number (example 8.75)
	 */
	define('SUNFUNCS_RET_DOUBLE', 2);

	/**
	 * Hours:minutes (example: 08:02)
	 */
	define('SUNFUNCS_RET_STRING', 1);

	/**
	 * Timestamp
	 */
	define('SUNFUNCS_RET_TIMESTAMP', 0);

}
