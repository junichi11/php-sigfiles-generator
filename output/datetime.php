<?php



namespace {

	/**
	 * <p>Represents a date interval.</p>
	 * <p>A date interval stores either a fixed amount of time (in years, months, days, hours etc) or a relative time string in the format that <code>DateTimeImmutable</code>'s and <code>DateTime</code>'s constructors support.</p>
	 * <p>More specifically, the information in an object of the <b>DateInterval</b> class is an instruction to get from one date/time to another date/time. This process is not always reversible.</p>
	 * <p>A common way to create a <b>DateInterval</b> object is by calculating the difference between two date/time objects through <code>DateTimeInterface::diff()</code>.</p>
	 * <p>Since there is no well defined way to compare date intervals, <b>DateInterval</b> instances are incomparable.</p>
	 * @link https://php.net/manual/en/class.dateinterval.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class DateInterval {

		/**
		 * @var int <p>Number of years.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.y
		 */
		public $y;

		/**
		 * @var int <p>Number of months.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.m
		 */
		public $m;

		/**
		 * @var int <p>Number of days.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.d
		 */
		public $d;

		/**
		 * @var int <p>Number of hours.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.h
		 */
		public $h;

		/**
		 * @var int <p>Number of minutes.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.i
		 */
		public $i;

		/**
		 * @var int <p>Number of seconds.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.s
		 */
		public $s;

		/**
		 * @var float <p>Number of microseconds, as a fraction of a second.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.f
		 */
		public $f;

		/**
		 * @var int <p>Is <code>1</code> if the interval represents a negative time period and <code>0</code> otherwise. See <code>DateInterval::format()</code>.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.invert
		 */
		public $invert;

		/**
		 * @var mixed <p>If the DateInterval object was created by <code>DateTimeImmutable::diff()</code> or <code>DateTime::diff()</code>, then this is the total number of full days between the start and end dates. Otherwise, days will be <b><code>false</code></b>.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.days
		 */
		public $days;

		/**
		 * @var bool <p>If the DateInterval object was created by <code>DateInterval::createFromDateString()</code>, then this property's value will be <b><code>true</code></b>, and the date_string property will be populated. Otherwise, the value will be <b><code>false</code></b>, and the y to f, invert, and days properties will be populated.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.from-string
		 */
		public $from_string;

		/**
		 * @var string <p>The string used as argument to <code>DateInterval::createFromDateString()</code>.</p>
		 * @link https://php.net/manual/en/class.dateinterval.php#dateinterval.props.date-string
		 */
		public $date_string;

		/**
		 * Creates a new DateInterval object
		 * <p>Creates a new DateInterval object.</p>
		 * @param string $duration <p>An interval specification.</p> <p>The format starts with the letter <code>P</code>, for period. Each duration period is represented by an integer value followed by a period designator. If the duration contains time elements, that portion of the specification is preceded by the letter <code>T</code>.</p> <p></p> <b> <code>duration</code> Period Designators </b>   Period Designator Description     <code>Y</code> years   <code>M</code> months   <code>D</code> days   <code>W</code>  weeks. Converted into days. Prior to PHP 8.0.0, can not be combined with <code>D</code>.    <code>H</code> hours   <code>M</code> minutes   <code>S</code> seconds    <p>Here are some simple examples. Two days is <code>P2D</code>. Two seconds is <code>PT2S</code>. Six years and five minutes is <code>P6YT5M</code>.</p> <p><b>Note</b>:</p><p>The unit types must be entered from the largest scale unit on the left to the smallest scale unit on the right. So years before months, months before days, days before minutes, etc. Thus one year and four days must be represented as <code>P1Y4D</code>, not <code>P4D1Y</code>.</p>  <p>The specification can also be represented as a date time. A sample of one year and four days would be <code>P0001-00-04T00:00:00</code>. But the values in this format can not exceed a given period's roll-over-point (e.g. <code>25</code> hours is invalid).</p> <p>These formats are based on the &#xBB;&#xA0;ISO 8601 duration specification.</p>
		 * @return self
		 * @link https://php.net/manual/en/dateinterval.construct.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub(), DateTime::diff()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(string $duration) {}

		/**
		 * Sets up a DateInterval from the relative parts of the string
		 * <p>Uses the date/time parsers as used in the <code>DateTimeImmutable</code> constructor to create a <code>DateInterval</code> from the relative parts of the parsed string.</p>
		 * @param string $datetime <p>A date with relative parts. Specifically, the relative formats supported by the parser used for <code>DateTimeImmutable</code>, <code>DateTime</code>, and <code>strtotime()</code> will be used to construct the DateInterval.</p> <p>To use an ISO-8601 format string like <code>P7D</code>, you must use the constructor.</p>
		 * @return DateInterval|false <p>Returns a new <code>DateInterval</code> instance on success, or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/dateinterval.createfromdatestring.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public static function createFromDateString(string $datetime): \DateInterval|false {}

		/**
		 * Formats the interval
		 * <p>Formats the interval.</p>
		 * @param string $format <p></p> <b> The following characters are recognized in the <code>format</code> parameter string. Each format character must be prefixed by a percent sign (<code>%</code>). </b>   <code>format</code> character Description Example values     <code>%</code> Literal <code>%</code> <code>%</code>   <code>Y</code> Years, numeric, at least 2 digits with leading 0 <code>01</code>, <code>03</code>   <code>y</code> Years, numeric <code>1</code>, <code>3</code>   <code>M</code> Months, numeric, at least 2 digits with leading 0 <code>01</code>, <code>03</code>, <code>12</code>   <code>m</code> Months, numeric <code>1</code>, <code>3</code>, <code>12</code>   <code>D</code> Days, numeric, at least 2 digits with leading 0 <code>01</code>, <code>03</code>, <code>31</code>   <code>d</code> Days, numeric <code>1</code>, <code>3</code>, <code>31</code>   <code>a</code> Total number of days as a result of a <code>DateTime::diff()</code> or <code>(unknown)</code> otherwise <code>4</code>, <code>18</code>, <code>8123</code>   <code>H</code> Hours, numeric, at least 2 digits with leading 0 <code>01</code>, <code>03</code>, <code>23</code>   <code>h</code> Hours, numeric <code>1</code>, <code>3</code>, <code>23</code>   <code>I</code> Minutes, numeric, at least 2 digits with leading 0 <code>01</code>, <code>03</code>, <code>59</code>   <code>i</code> Minutes, numeric <code>1</code>, <code>3</code>, <code>59</code>   <code>S</code> Seconds, numeric, at least 2 digits with leading 0 <code>01</code>, <code>03</code>, <code>57</code>   <code>s</code> Seconds, numeric <code>1</code>, <code>3</code>, <code>57</code>   <code>F</code> Microseconds, numeric, at least 6 digits with leading 0 <code>007701</code>, <code>052738</code>, <code>428291</code>   <code>f</code> Microseconds, numeric <code>7701</code>, <code>52738</code>, <code>428291</code>   <code>R</code> Sign "<code>-</code>" when negative, "<code>+</code>" when positive <code>-</code>, <code>+</code>   <code>r</code> Sign "<code>-</code>" when negative, empty when positive <code>-</code>, <code></code>
		 * @return string <p>Returns the formatted interval.</p>
		 * @link https://php.net/manual/en/dateinterval.format.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function format(string $format): string {}
	}

	/**
	 * <p>Represents a date period.</p>
	 * <p>A date period allows iteration over a set of dates and times, recurring at regular intervals, over a given period.</p>
	 * @link https://php.net/manual/en/class.dateperiod.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	class DatePeriod implements \IteratorAggregate {

		/**
		 * @var int <p>Exclude start date, used in <code>DatePeriod::__construct()</code>.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php
		 */
		public const EXCLUDE_START_DATE = 1;

		/**
		 * @var int <p>Include end date, used in <code>DatePeriod::__construct()</code>.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php
		 */
		public const INCLUDE_END_DATE = 2;

		/**
		 * @var ?DateTimeInterface <p>The start date of the period.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.start
		 */
		public $start;

		/**
		 * @var ?DateTimeInterface <p>During iteration this will contain the current date within the period.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.current
		 */
		public $current;

		/**
		 * @var ?DateTimeInterface <p>The end date of the period.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.end
		 */
		public $end;

		/**
		 * @var ?DateInterval <p>An ISO 8601 repeating interval specification.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.interval
		 */
		public $interval;

		/**
		 * @var int <p>The minimum amount of instances as retured by the iterator.</p> <p>If the number of recurrences has been explicitly passed through the <code>$recurrences</code> parameter in the constructor of the <b>DatePeriod</b> instance, then this property contains this value, <i>plus</i> one if the start date has not been disabled through <b><code>DatePeriod::EXCLUDE_START_DATE</code></b>, <i>plus</i> one if the end date has been enabled through <b><code>DatePeriod::INCLUDE_END_DATE</code></b>.</p> <p>If the number of recurrences has not been explicitly passed, then this property contains the minimum number of returned instances. This would be <code>0</code>, <i>plus</i> one if the start date has not been disabled through <b><code>DatePeriod::EXCLUDE_START_DATE</code></b>, <i>plus</i> one if the end date has been enabled through <b><code>DatePeriod::INCLUDE_END_DATE</code></b>.</p> <p></p>  <code> &lt;&#63;php<br>$start = new DateTime('2018-12-31 00:00:00');<br>$end = new DateTime('2021-12-31 00:00:00');<br>$interval = new DateInterval('P1M');<br>$recurrences = 5;<br><br>// recurrences explicitly set through the constructor<br>$period = new DatePeriod($start, $interval, $recurrences, DatePeriod::EXCLUDE_START_DATE);<br>echo $period-&gt;recurrences, "\n";<br><br>$period = new DatePeriod($start, $interval, $recurrences);<br>echo $period-&gt;recurrences, "\n";<br><br>$period = new DatePeriod($start, $interval, $recurrences, DatePeriod::INCLUDE_END_DATE);<br>echo $period-&gt;recurrences, "\n";<br><br>// recurrences not set in the constructor<br>$period = new DatePeriod($start, $interval, $end);<br>echo $period-&gt;recurrences, "\n";<br><br>$period = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);<br>echo $period-&gt;recurrences, "\n";<br>&#63;&gt;  </code>  <p>The above example will output:</p> <br> 5<br> 6<br> 7<br> 1<br> 0<br>   <p>See also <code>DatePeriod::getRecurrences()</code>.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.recurrences
		 */
		public $recurrences;

		/**
		 * @var bool <p>Whether to include the start date in the set of recurring dates or not.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.include-start-date
		 */
		public $include_start_date;

		/**
		 * @var bool <p>Whether to include the end date in the set of recurring dates or not.</p>
		 * @link https://php.net/manual/en/class.dateperiod.php#dateperiod.props.include-end-date
		 */
		public $include_end_date;

		/**
		 * Creates a new DatePeriod object
		 * <p>Creates a new DatePeriod object.</p><p><code>DatePeriod</code> objects can be used as an iterator to generate a number of <code>DateTimeImmutable</code> or <code>DateTime</code> object from a <code>start</code> date, a <code>interval</code>, and an <code>end</code> date or the number of <code>recurrences</code>.</p><p>The class of returned objects is equivalent to the <code>DateTimeImmutable</code> or <code>DateTime</code> ancestor class of the <code>start</code> object.</p>
		 * @param \DateTimeInterface $start <p>The start date of the period. Included by default in the result set.</p>
		 * @param \DateInterval $interval <p>The interval between recurrences within the period.</p>
		 * @param int $recurrences <p>The number of recurrences. The number of returned results is one higher than this, as the start date is included in the result set by default. Must be greater than <code>0</code>.</p>
		 * @param int $options <p>A bit field which can be used to control certain behaviour with start- and end- dates.</p> <p>With <b><code>DatePeriod::EXCLUDE_START_DATE</code></b> you exclude the start date from the set of recurring dates within the period.</p> <p>With <b><code>DatePeriod::INCLUDE_END_DATE</code></b> you include the end date in the set of recurring dates within the period.</p>
		 * @return self
		 * @link https://php.net/manual/en/dateperiod.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __construct(\DateTimeInterface $start, \DateInterval $interval, int $recurrences, int $options = 0) {}

		/**
		 * Gets the interval
		 * <p>Object-oriented style</p><p>Gets a <code>DateInterval</code> <code>object</code> representing the interval used for the period.</p>
		 * @return DateInterval <p>Returns a <code>DateInterval</code> <code>object</code></p>
		 * @link https://php.net/manual/en/dateperiod.getdateinterval.php
		 * @since PHP 5 >= 5.6.5, PHP 7, PHP 8
		 */
		public function getDateInterval(): \DateInterval {}

		/**
		 * Gets the end date
		 * <p>Object-oriented style</p><p>Gets the end date of the period.</p>
		 * @return ?DateTimeInterface <p>Returns <b><code>null</code></b> if the <code>DatePeriod</code> does not have an end date. For example, when initialized with the <code>recurrences</code> parameter, or the <code>isostr</code> parameter without an end date.</p><p>Returns a <code>DateTimeImmutable</code> <code>object</code> when the <code>DatePeriod</code> is initialized with a <code>DateTimeImmutable</code> <code>object</code> as the <code>end</code> parameter.</p><p>Returns a cloned <code>DateTime</code> <code>object</code> representing the end date otherwise.</p>
		 * @link https://php.net/manual/en/dateperiod.getenddate.php
		 * @since PHP 5 >= 5.6.5, PHP 7, PHP 8
		 */
		public function getEndDate(): ?\DateTimeInterface {}

		/**
		 * Gets the number of recurrences
		 * <p>Object-oriented style</p><p>Get the number of recurrences.</p>
		 * @return ?int <p>The number of recurrences as set by explicitly passing the <code>$recurrences</code> to the contructor of the <code>DatePeriod</code> class, or <b><code>null</code></b> otherwise.</p>
		 * @link https://php.net/manual/en/dateperiod.getrecurrences.php
		 * @since PHP 7 >= 7.2.17/7.3.4, PHP 8
		 */
		public function getRecurrences(): ?int {}

		/**
		 * Gets the start date
		 * <p>Object-oriented style</p><p>Gets the start date of the period.</p>
		 * @return DateTimeInterface <p>Returns a <code>DateTimeImmutable</code> <code>object</code> when the <code>DatePeriod</code> is initialized with a <code>DateTimeImmutable</code> <code>object</code> as the <code>start</code> parameter.</p><p>Returns a <code>DateTime</code> <code>object</code> otherwise.</p>
		 * @link https://php.net/manual/en/dateperiod.getstartdate.php
		 * @since PHP 5 >= 5.6.5, PHP 7, PHP 8
		 */
		public function getStartDate(): \DateTimeInterface {}
	}

	/**
	 * <p>Representation of date and time.</p>
	 * <p>This class behaves the same as <code>DateTimeImmutable</code> except objects are modified itself when modification methods such as <code>DateTime::modify()</code> are called.</p>
	 * <p>Calling methods on objects of the class <b>DateTime</b> will change the information encapsulated in these objects, if you want to prevent that you will have to use <code>clone</code> operator to create a new object. Use <code>DateTimeImmutable</code> instead of <b>DateTime</b> to obtain this recommended behaviour by default.</p>
	 * @link https://php.net/manual/en/class.datetime.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	class DateTime implements \DateTimeInterface {

		/**
		 * Returns new DateTime object
		 * <p>Like <code>DateTimeImmutable::__construct()</code> but works with <code>DateTime</code>. Consider using the <code>DateTimeImmutable</code> and features instead.</p><p>Returns a new DateTime object.</p>
		 * @param string $datetime <p>A date/time string. Valid formats are explained in Date and Time Formats.</p> <p>Enter <code>"now"</code> here to obtain the current time when using the <code>$timezone</code> parameter.</p>
		 * @param ?\DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the timezone of <code>$datetime</code>.</p> <p>If <code>$timezone</code> is omitted or <b><code>null</code></b>, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>$timezone</code> parameter and the current timezone are ignored when the <code>$datetime</code> parameter either is a UNIX timestamp (e.g. <code>@946684800</code>) or specifies a timezone (e.g. <code>2010-01-28T15:00:00+02:00</code>).</p>
		 * @return self <p>Returns a new DateTime instance. Procedural style returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetime.construct.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function __construct(string $datetime = "now", ?\DateTimeZone $timezone = null) {}

		/**
		 * The __set_state handler
		 * <p>The __set_state() handler.</p><p>Like <code>DateTimeImmutable::__set_state()</code> but works with <code>DateTime</code>.</p>
		 * @param array $array <p>Initialization array.</p>
		 * @return DateTime <p>Returns a new instance of a DateTime object.</p>
		 * @link https://php.net/manual/en/datetime.set-state.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public static function __set_state(array $array): \DateTime {}

		/**
		 * The __wakeup handler
		 * <p>The __wakeup() handler.</p>
		 * @return void <p>Initializes a DateTime object.</p>
		 * @link https://php.net/manual/en/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __wakeup(): void {}

		/**
		 * Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds
		 * <p>Object-oriented style</p><p>Adds the specified <code>DateInterval</code> object to the specified <code>DateTime</code> object.</p><p>Like <code>DateTimeImmutable::add()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param \DateInterval $interval <p>A <code>DateInterval</code> object</p>
		 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
		 * @link https://php.net/manual/en/datetime.add.php
		 * @see DateTimeImmutable::add()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function add(\DateInterval $interval): \DateTime {}

		/**
		 * Parses a time string according to a specified format
		 * <p>Object-oriented style</p><p>Returns a new DateTime object representing the date and time specified by the <code>datetime</code> string, which was formatted in the given <code>format</code>.</p><p>Like <code>DateTimeImmutable::createFromFormat()</code> and <code>date_create_immutable_from_format()</code>, respectively, but creates a <code>DateTime</code> object.</p>
		 * @param string $format
		 * @param string $datetime
		 * @param ?\DateTimeZone $timezone
		 * @return DateTime|false <p>Returns a new DateTime instance or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetime.createfromformat.php
		 * @see DateTimeImmutable::createFromFormat()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public static function createFromFormat(string $format, string $datetime, ?\DateTimeZone $timezone = null): \DateTime|false {}

		/**
		 * Returns new DateTime instance encapsulating the given DateTimeImmutable object
		 * @param \DateTimeImmutable $object <p>The immutable <code>DateTimeImmutable</code> object that needs to be converted to a mutable version. This object is not modified, but instead a new <code>DateTime</code> instance is created containing the same date, time, and timezone information.</p>
		 * @return static <p>Returns a new <code>DateTime</code> instance.</p>
		 * @link https://php.net/manual/en/datetime.createfromimmutable.php
		 * @since PHP 7 >= 7.3.0, PHP 8
		 */
		public static function createFromImmutable(\DateTimeImmutable $object): static {}

		/**
		 * Returns new DateTime object encapsulating the given DateTimeInterface object
		 * @param \DateTimeInterface $object <p>The <code>DateTimeInterface</code> object that needs to be converted to a mutable version. This object is not modified, but instead a new <code>DateTime</code> object is created containing the same date, time, and timezone information.</p>
		 * @return DateTime <p>Returns a new <code>DateTime</code> instance.</p>
		 * @link https://php.net/manual/en/datetime.createfrominterface.php
		 * @since PHP 8
		 */
		public static function createFromInterface(\DateTimeInterface $object): \DateTime {}

		/**
		 * Returns the difference between two DateTime objects
		 * <p>Object-oriented style</p><p>Returns the difference between two <code>DateTimeInterface</code> objects.</p>
		 * @param \DateTimeInterface $targetObject
		 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
		 * @return DateInterval <p>The <code>DateInterval</code> object represents the difference between the two dates.</p><p>The return value more specifically represents the clock-time interval to apply to the original object (<code>$this</code> or <code>$originObject</code>) to arrive at the <code>$targetObject</code>. This process is not always reversible.</p><p>The method is aware of DST changeovers, and hence can return an interval of <code>24 hours and 30 minutes</code>, as per one of the examples. If you want to calculate with absolute time, you need to convert both the <code>$this</code>/<code>$baseObject</code>, and <code>$targetObject</code> to UTC first.</p>
		 * @link https://php.net/manual/en/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval {}

		/**
		 * Returns date formatted according to given format
		 * <p>Object-oriented style</p><p>Returns date formatted according to given format.</p>
		 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options below. There are also several predefined date constants that may be used instead, so for example <b><code>DATE_RSS</code></b> contains the format string <code>'D, d M Y H:i:s'</code>.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example returned values     <i>Day</i> --- ---   <code>d</code> Day of the month, 2 digits with leading zeros <code>01</code> to <code>31</code>   <code>D</code> A textual representation of a day, three letters <code>Mon</code> through <code>Sun</code>   <code>j</code> Day of the month without leading zeros <code>1</code> to <code>31</code>   <code>l</code> (lowercase 'L') A full textual representation of the day of the week <code>Sunday</code> through <code>Saturday</code>   <code>N</code> ISO 8601 numeric representation of the day of the week <code>1</code> (for Monday) through <code>7</code> (for Sunday)   <code>S</code> English ordinal suffix for the day of the month, 2 characters  <code>st</code>, <code>nd</code>, <code>rd</code> or <code>th</code>. Works well with <code>j</code>    <code>w</code> Numeric representation of the day of the week <code>0</code> (for Sunday) through <code>6</code> (for Saturday)   <code>z</code> The day of the year (starting from 0) <code>0</code> through <code>365</code>   <i>Week</i> --- ---   <code>W</code> ISO 8601 week number of year, weeks starting on Monday Example: <code>42</code> (the 42nd week in the year)   <i>Month</i> --- ---   <code>F</code> A full textual representation of a month, such as January or March <code>January</code> through <code>December</code>   <code>m</code> Numeric representation of a month, with leading zeros <code>01</code> through <code>12</code>   <code>M</code> A short textual representation of a month, three letters <code>Jan</code> through <code>Dec</code>   <code>n</code> Numeric representation of a month, without leading zeros <code>1</code> through <code>12</code>   <code>t</code> Number of days in the given month <code>28</code> through <code>31</code>   <i>Year</i> --- ---   <code>L</code> Whether it's a leap year <code>1</code> if it is a leap year, <code>0</code> otherwise.   <code>o</code> ISO 8601 week-numbering year. This has the same value as <code>Y</code>, except that if the ISO week number (<code>W</code>) belongs to the previous or next year, that year is used instead. Examples: <code>1999</code> or <code>2003</code>   <code>X</code> An expanded full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE, and <code>+</code> for years CE. Examples: <code>-0055</code>, <code>+0787</code>, <code>+1999</code>, <code>+10191</code>   <code>x</code> An expanded full numeric representation if requried, or a standard full numeral representation if possible (like <code>Y</code>). At least four digits. Years BCE are prefixed with a <code>-</code>. Years beyond (and including) <code>10000</code> are prefixed by a <code>+</code>. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>+10191</code>   <code>Y</code> A full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>2003</code>, <code>10191</code>   <code>y</code> A two digit representation of a year Examples: <code>99</code> or <code>03</code>   <i>Time</i> --- ---   <code>a</code> Lowercase Ante meridiem and Post meridiem <code>am</code> or <code>pm</code>   <code>A</code> Uppercase Ante meridiem and Post meridiem <code>AM</code> or <code>PM</code>   <code>B</code> Swatch Internet time <code>000</code> through <code>999</code>   <code>g</code> 12-hour format of an hour without leading zeros <code>1</code> through <code>12</code>   <code>G</code> 24-hour format of an hour without leading zeros <code>0</code> through <code>23</code>   <code>h</code> 12-hour format of an hour with leading zeros <code>01</code> through <code>12</code>   <code>H</code> 24-hour format of an hour with leading zeros <code>00</code> through <code>23</code>   <code>i</code> Minutes with leading zeros <code>00</code> to <code>59</code>   <code>s</code> Seconds with leading zeros <code>00</code> through <code>59</code>   <code>u</code>  Microseconds. Note that <code>date()</code> will always generate <code>000000</code> since it takes an <code>int</code> parameter, whereas <b>DateTime::format()</b> does support microseconds if <code>DateTime</code> was created with microseconds.  Example: <code>654321</code>   <code>v</code>  Milliseconds. Same note applies as for <code>u</code>.  Example: <code>654</code>   <i>Timezone</i> --- ---   <code>e</code> Timezone identifier Examples: <code>UTC</code>, <code>GMT</code>, <code>Atlantic/Azores</code>   <code>I</code> (capital i) Whether or not the date is in daylight saving time <code>1</code> if Daylight Saving Time, <code>0</code> otherwise.   <code>O</code> Difference to Greenwich time (GMT) without colon between hours and minutes Example: <code>+0200</code>   <code>P</code> Difference to Greenwich time (GMT) with colon between hours and minutes Example: <code>+02:00</code>   <code>p</code>  The same as <code>P</code>, but returns <code>Z</code> instead of <code>+00:00</code> (available as of PHP 8.0.0)  Examples: <code>Z</code> or <code>+02:00</code>   <code>T</code> Timezone abbreviation, if known; otherwise the GMT offset. Examples: <code>EST</code>, <code>MDT</code>, <code>+05</code>   <code>Z</code> Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. <code>-43200</code> through <code>50400</code>   <i>Full Date/Time</i> --- ---   <code>c</code> ISO 8601 date 2004-02-12T15:19:21+00:00   <code>r</code> &#xBB;&#xA0;RFC 2822/&#xBB;&#xA0;RFC 5322 formatted date Example: <code>Thu, 21 Dec 2000 16:01:07 +0200</code>   <code>U</code> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) See also <code>time()</code>    <p>Unrecognized characters in the format string will be printed as-is. The <code>Z</code> format will always return <code>0</code> when using <code>gmdate()</code>.</p> <p><b>Note</b>:</p><p>Since this function only accepts <code>int</code> timestamps the <code>u</code> format character is only useful when using the <code>date_format()</code> function with user based timestamps created with <code>date_create()</code>.</p>
		 * @return string <p>Returns the formatted date string on success.</p>
		 * @link https://php.net/manual/en/datetime.format.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function format(string $format): string {}

		/**
		 * Returns the warnings and errors
		 * <p>Object-oriented style</p><p>Like <code>DateTimeImmutable::getLastErrors()</code> but works with <code>DateTime</code>.</p>
		 * @return array|false <p>Returns array containing info about warnings and errors, or <b><code>false</code></b> if there are neither warnings nor errors.</p>
		 * @link https://php.net/manual/en/datetime.getlasterrors.php
		 * @see DateTimeImmutable::getLastErrors()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public static function getLastErrors(): array|false {}

		/**
		 * Returns the timezone offset
		 * <p>Object-oriented style</p><p>Returns the timezone offset.</p>
		 * @return int <p>Returns the timezone offset in seconds from UTC on success.</p>
		 * @link https://php.net/manual/en/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getOffset(): int {}

		/**
		 * Gets the Unix timestamp
		 * <p>Object-oriented style</p><p>Gets the Unix timestamp.</p>
		 * @return int <p>Returns the Unix timestamp representing the date.</p>
		 * @link https://php.net/manual/en/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTimeImmutable::setTimestamp(), DateTimeInterface::format()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getTimestamp(): int {}

		/**
		 * Return time zone relative to given DateTime
		 * <p>Object-oriented style</p><p>Return time zone relative to given DateTime.</p>
		 * @return DateTimeZone|false <p>Returns a <code>DateTimeZone</code> object on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getTimezone(): \DateTimeZone|false {}

		/**
		 * Alters the timestamp
		 * <p>Object-oriented style</p><p>Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by <code>DateTimeImmutable::__construct()</code>.</p>
		 * @param string $modifier <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
		 * @return DateTime|false <p>Returns the modified <code>DateTime</code> object for method chaining or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetime.modify.php
		 * @see strtotime(), DateTimeImmutable::modify(), DateTime::add(), DateTime::sub(), DateTime::setDate(), DateTime::setISODate(), DateTime::setTime(), DateTime::setTimestamp()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function modify(string $modifier): \DateTime|false {}

		/**
		 * Sets the date
		 * <p>Object-oriented style</p><p>Resets the current date of the DateTime object to a different date.</p><p>Like <code>DateTimeImmutable::setDate()</code> but works with <code>DateTime</code>, and changes the existing object.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param int $year <p>Year of the date.</p>
		 * @param int $month <p>Month of the date.</p>
		 * @param int $day <p>Day of the date.</p>
		 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
		 * @link https://php.net/manual/en/datetime.setdate.php
		 * @see DateTimeImmutable::setDate()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setDate(int $year, int $month, int $day): \DateTime {}

		/**
		 * Sets the ISO date
		 * <p>Object-oriented style</p><p>Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.</p><p>Like <code>DateTimeImmutable::setISODate()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param int $year <p>Year of the date.</p>
		 * @param int $week <p>Week of the date.</p>
		 * @param int $dayOfWeek <p>Offset from the first day of the week.</p>
		 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
		 * @link https://php.net/manual/en/datetime.setisodate.php
		 * @see DateTimeImmutable::setISODate()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setISODate(int $year, int $week, int $dayOfWeek = 1): \DateTime {}

		/**
		 * Sets the time
		 * <p>Object-oriented style</p><p>Resets the current time of the DateTime object to a different time.</p><p>Like <code>DateTimeImmutable::setTime()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param int $hour <p>Hour of the time.</p>
		 * @param int $minute <p>Minute of the time.</p>
		 * @param int $second <p>Second of the time.</p>
		 * @param int $microsecond <p>Microsecond of the time.</p>
		 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
		 * @link https://php.net/manual/en/datetime.settime.php
		 * @see DateTimeImmutable::setTime()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0): \DateTime {}

		/**
		 * Sets the date and time based on an Unix timestamp
		 * <p>Object-oriented style</p><p>Sets the date and time based on an Unix timestamp.</p><p>Like <code>DateTimeImmutable::setTimestamp()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param int $timestamp <p>Unix timestamp representing the date. Setting timestamps outside the range of <code>int</code> is possible by using <code>DateTimeImmutable::modify()</code> with the <code>@</code> format.</p>
		 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
		 * @link https://php.net/manual/en/datetime.settimestamp.php
		 * @see DateTimeImmutable::setTimestamp()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function setTimestamp(int $timestamp): \DateTime {}

		/**
		 * Sets the time zone for the DateTime object
		 * <p>Object-oriented style</p><p>Sets a new timezone for a <code>DateTime</code> <code>object</code>.</p><p>Like <code>DateTimeImmutable::setTimezone()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param \DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the desired time zone.</p>
		 * @return DateTime <p>Returns the <code>DateTime</code> object for method chaining. The underlaying point-in-time is not changed when calling this method.</p>
		 * @link https://php.net/manual/en/datetime.settimezone.php
		 * @see DateTimeImmutable::setTimezone(), DateTime::getTimezone(), DateTimeZone::__construct()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function setTimezone(\DateTimeZone $timezone): \DateTime {}

		/**
		 * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
		 * <p>Object-oriented style</p><p>Modifies the specified DateTime object, by subtracting the specified <code>DateInterval</code> object.</p><p>Like <code>DateTimeImmutable::sub()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
		 * @param \DateInterval $interval <p>A <code>DateInterval</code> object</p>
		 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
		 * @link https://php.net/manual/en/datetime.sub.php
		 * @see DateTimeImmutable::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function sub(\DateInterval $interval): \DateTime {}
	}

	/**
	 * <p>Representation of date and time.</p>
	 * <p>This class behaves the same as <code>DateTime</code> except new objects are returned when modification methods such as <code>DateTime::modify()</code> are called.</p>
	 * @link https://php.net/manual/en/class.datetimeimmutable.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	class DateTimeImmutable implements \DateTimeInterface {

		/**
		 * Returns new DateTimeImmutable object
		 * <p>Object-oriented style</p><p>Returns new a DateTimeImmutable object.</p>
		 * @param string $datetime <p>A date/time string. Valid formats are explained in Date and Time Formats.</p> <p>Enter <code>"now"</code> here to obtain the current time when using the <code>$timezone</code> parameter.</p>
		 * @param ?\DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the timezone of <code>$datetime</code>.</p> <p>If <code>$timezone</code> is omitted or <b><code>null</code></b>, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>$timezone</code> parameter and the current timezone are ignored when the <code>$datetime</code> parameter either is a UNIX timestamp (e.g. <code>@946684800</code>) or specifies a timezone (e.g. <code>2010-01-28T15:00:00+02:00</code>, or <code>2010-07-05T06:00:00Z</code>).</p>
		 * @return DateTimeImmutable|false <p>Returns a new DateTimeImmutable instance. Procedural style returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function __construct(string $datetime = "now", ?\DateTimeZone $timezone = null) {}

		/**
		 * The __set_state handler
		 * <p>The __set_state() handler.</p>
		 * @param array $array <p>Initialization array.</p>
		 * @return DateTimeImmutable <p>Returns a new instance of a DateTimeImmutable object.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.set-state.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function __set_state(array $array): \DateTimeImmutable {}

		/**
		 * The __wakeup handler
		 * <p>The __wakeup() handler.</p>
		 * @return void <p>Initializes a DateTime object.</p>
		 * @link https://php.net/manual/en/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __wakeup(): void {}

		/**
		 * Returns a new object, with added amount of days, months, years, hours, minutes and seconds
		 * <p>Creates a new <code>DateTimeImmutable</code> object, and adds the specified <code>DateInterval</code> object to this, to represent the new value.</p>
		 * @param \DateInterval $interval <p>A <code>DateInterval</code> object</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> object with the modified data.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.add.php
		 * @see DateTimeImmutable::sub(), DateTimeImmutable::diff(), DateTimeImmutable::modify()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function add(\DateInterval $interval): \DateTimeImmutable {}

		/**
		 * Parses a time string according to a specified format
		 * <p>Object-oriented style</p><p>Returns a new DateTimeImmutable object representing the date and time specified by the <code>datetime</code> string, which was formatted in the given <code>format</code>.</p>
		 * @param string $format <p>The format that the passed in <code>string</code> should be in. See the formatting options below. In most cases, the same letters as for the <code>date()</code> can be used.</p> <p>All fields are initialised with the current date/time. In most cases you would want to reset these to "zero" (the Unix epoch, <code>1970-01-01 00:00:00 UTC</code>). You do that by including the <code>!</code> character as first character in your <code>format</code>, or <code>|</code> as your last. Please see the documentation for each character below for more information.</p> <p>The format is parsed from left to right, which means that in some situations the order in which the format characters are present affects the result. In the case of <code>z</code> (the day of the year), it is required that a year has already been parsed, for example through the <code>Y</code> or <code>y</code> characters.</p> <p>Letters that are used for parsing numbers allow a wide range of values, outside of what the logical range would be. For example, the <code>d</code> (day of the month) accepts values in the range from <code>00</code> to <code>99</code>. The only constraint is on the amount of digits. The date/time parser's overflow mechanism is used when out-of-range values are given. The examples below show some of this behaviour.</p> <p>This also means that the data parsed for a format letter is greedy, and will read up to the amount of digits its format allows for. That can then also mean that there are no longer enough characters in the <code>datetime</code> string for following format characters. An example on this page also illustrates this issue.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example parsable values     <i>Day</i> --- ---   <code>d</code> and <code>j</code> Day of the month, 2 digits with or without leading zeros  <code>01</code> to <code>31</code> or <code>1</code> to <code>31</code>. (2 digit numbers higher than the number of days in the month are accepted, in which case they will make the month overflow. For example using 33 with January, means February 2nd)    <code>D</code> and <code>l</code> A textual representation of a day  <code>Mon</code> through <code>Sun</code> or <code>Sunday</code> through <code>Saturday</code>. If the day name given is different then the day name belonging to a parsed (or default) date is different, then an overflow occurs to the <i>next</i> date with the given day name. See the examples below for an explanation.    <code>S</code> English ordinal suffix for the day of the month, 2 characters. It's ignored while processing.  <code>st</code>, <code>nd</code>, <code>rd</code> or <code>th</code>.    <code>z</code>  The day of the year (starting from 0); must be preceded by <code>Y</code> or <code>y</code>.   <code>0</code> through <code>365</code>. (3 digit numbers higher than the numbers in a year are accepted, in which case they will make the year overflow. For example using 366 with 2022, means January 2nd, 2023)    <i>Month</i> --- ---   <code>F</code> and <code>M</code> A textual representation of a month, such as January or Sept  <code>January</code> through <code>December</code> or <code>Jan</code> through <code>Dec</code>    <code>m</code> and <code>n</code> Numeric representation of a month, with or without leading zeros  <code>01</code> through <code>12</code> or <code>1</code> through <code>12</code>. (2 digit numbers higher than 12 are accepted, in which case they will make the year overflow. For example using 13 means January in the next year)    <i>Year</i> --- ---   <code>X</code> and <code>x</code> A full numeric representation of a year, up to 19 digits, optionally prefixed by <code>+</code> or <code>-</code> Examples: <code>0055</code>, <code>787</code>, <code>1999</code>, <code>-2003</code>, <code>+10191</code>   <code>Y</code> A full numeric representation of a year, up to 4 digits Examples: <code>0055</code>, <code>787</code>, <code>1999</code>, <code>2003</code>   <code>y</code>  A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive)   Examples: <code>99</code> or <code>03</code> (which will be interpreted as <code>1999</code> and <code>2003</code>, respectively)    <i>Time</i> --- ---   <code>a</code> and <code>A</code> Ante meridiem and Post meridiem <code>am</code> or <code>pm</code>   <code>g</code> and <code>h</code> 12-hour format of an hour with or without leading zero  <code>1</code> through <code>12</code> or <code>01</code> through <code>12</code> (2 digit numbers higher than 12 are accepted, in which case they will make the day overflow. For example using <code>14</code> means <code>02</code> in the next AM/PM period)    <code>G</code> and <code>H</code> 24-hour format of an hour with or without leading zeros  <code>0</code> through <code>23</code> or <code>00</code> through <code>23</code> (2 digit numbers higher than 24 are accepted, in which case they will make the day overflow. For example using <code>26</code> means <code>02:00</code> the next day)    <code>i</code> Minutes with leading zeros  <code>00</code> to <code>59</code>. (2 digit numbers higher than 59 are accepted, in which case they will make the hour overflow. For example using <code>66</code> means <code>:06</code> the next hour)    <code>s</code> Seconds, with leading zeros  <code>00</code> through <code>59</code> (2 digit numbers higher than 59 are accepted, in which case they will make the minute overflow. For example using <code>90</code> means <code>:30</code> the next minute)    <code>v</code> Fraction in milliseconds (up to three digits) Example: <code>12</code> (<code>0.12</code> seconds), <code>345</code> (<code>0.345</code> seconds)   <code>u</code> Fraction in microseconds (up to six digits) Example: <code>45</code> (<code>0.45</code> seconds), <code>654321</code> (<code>0.654321</code> seconds)   <i>Timezone</i> --- ---    <code>e</code>, <code>O</code>, <code>P</code> and <code>T</code>  Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation Examples: <code>UTC</code>, <code>GMT</code>, <code>Atlantic/Azores</code> or <code>+0200</code> or <code>+02:00</code> or <code>EST</code>, <code>MDT</code>    <i>Full Date/Time</i> --- ---   <code>U</code> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) Example: <code>1292177455</code>   <i>Whitespace and Separators</i> --- ---   <code> </code> (space) One space or one tab Example: <code> </code>   <code>#</code>  One of the following separation symbol: <code>;</code>, <code>:</code>, <code>/</code>, <code>.</code>, <code>,</code>, <code>-</code>, <code>(</code> or <code>)</code>  Example: <code>/</code>    <code>;</code>, <code>:</code>, <code>/</code>, <code>.</code>, <code>,</code>, <code>-</code>, <code>(</code> or <code>)</code>  The specified character. Example: <code>-</code>   <code>&#63;</code> A random byte Example: <code>^</code> (Be aware that for UTF-8 characters you might need more than one <code>&#63;</code>. In this case, using <code>&#42;</code> is probably what you want instead)   <code>&#42;</code> Random bytes until the next separator or digit Example: <code>&#42;</code> in <code>Y-&#42;-d</code> with the string <code>2009-aWord-08</code> will match <code>aWord</code>   <code>!</code> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values ( <code>0</code> for hour, minute, second and fraction, <code>1</code> for month and day, <code>1970</code> for year and <code>UTC</code> for timezone information) Without <code>!,</code> all fields will be set to the current date and time.   <code>|</code> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values if they have not been parsed yet <code>Y-m-d|</code> will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.   <code>+</code> If this format specifier is present, trailing data in the string will not cause an error, but a warning instead Use <code>DateTimeImmutable::getLastErrors()</code> to find out whether trailing data was present.    <p>Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with <code>DateTimeImmutable::getLastErrors()</code>.</p> <p>To include literal characters in <code>format</code>, you have to escape them with a backslash (<code>\</code>).</p> <p>If <code>format</code> does not contain the character <code>!</code> then portions of the generated date/time which are not specified in <code>format</code> will be set to the current system time.</p> <p>If <code>format</code> contains the character <code>!</code>, then portions of the generated date/time not provided in <code>format</code>, as well as values to the left-hand side of the <code>!</code>, will be set to corresponding values from the Unix epoch.</p> <p>If any time character is parsed, then all other time-related fields are set to "0", unless also parsed.</p> <p>The Unix epoch is 1970-01-01 00:00:00 UTC.</p>
		 * @param string $datetime <p>String representing the time.</p>
		 * @param ?\DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the desired time zone.</p> <p>If <code>timezone</code> is omitted or <b><code>null</code></b> and <code>datetime</code> contains no timezone, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>timezone</code> parameter and the current timezone are ignored when the <code>datetime</code> parameter either contains a UNIX timestamp (e.g. <code>946684800</code>) or specifies a timezone (e.g. <code>2010-01-28T15:00:00+02:00</code>).</p>
		 * @return DateTimeImmutable|false <p>Returns a new DateTimeImmutable instance or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.createfromformat.php
		 * @see DateTimeImmutable::__construct(), DateTimeImmutable::getLastErrors(), checkdate(), strptime()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function createFromFormat(string $format, string $datetime, ?\DateTimeZone $timezone = null): \DateTimeImmutable|false {}

		/**
		 * Returns new DateTimeImmutable object encapsulating the given DateTimeInterface object
		 * @param \DateTimeInterface $object <p>The <code>DateTimeInterface</code> object that needs to be converted to an immutable version. This object is not modified, but instead a new <code>DateTimeImmutable</code> object is created containing the same date, time, and timezone information.</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> instance.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.createfrominterface.php
		 * @since PHP 8
		 */
		public static function createFromInterface(\DateTimeInterface $object): \DateTimeImmutable {}

		/**
		 * Returns new DateTimeImmutable instance encapsulating the given DateTime object
		 * @param \DateTime $object <p>The mutable <code>DateTime</code> object that you want to convert to an immutable version. This object is not modified, but instead a new <code>DateTimeImmutable</code> instance is created containing the same date time and timezone information.</p>
		 * @return static <p>Returns a new <code>DateTimeImmutable</code> instance.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.createfrommutable.php
		 * @since PHP 5 >= 5.6.0, PHP 7, PHP 8
		 */
		public static function createFromMutable(\DateTime $object): static {}

		/**
		 * Returns the difference between two DateTime objects
		 * <p>Object-oriented style</p><p>Returns the difference between two <code>DateTimeInterface</code> objects.</p>
		 * @param \DateTimeInterface $targetObject
		 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
		 * @return DateInterval <p>The <code>DateInterval</code> object represents the difference between the two dates.</p><p>The return value more specifically represents the clock-time interval to apply to the original object (<code>$this</code> or <code>$originObject</code>) to arrive at the <code>$targetObject</code>. This process is not always reversible.</p><p>The method is aware of DST changeovers, and hence can return an interval of <code>24 hours and 30 minutes</code>, as per one of the examples. If you want to calculate with absolute time, you need to convert both the <code>$this</code>/<code>$baseObject</code>, and <code>$targetObject</code> to UTC first.</p>
		 * @link https://php.net/manual/en/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval {}

		/**
		 * Returns date formatted according to given format
		 * <p>Object-oriented style</p><p>Returns date formatted according to given format.</p>
		 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options below. There are also several predefined date constants that may be used instead, so for example <b><code>DATE_RSS</code></b> contains the format string <code>'D, d M Y H:i:s'</code>.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example returned values     <i>Day</i> --- ---   <code>d</code> Day of the month, 2 digits with leading zeros <code>01</code> to <code>31</code>   <code>D</code> A textual representation of a day, three letters <code>Mon</code> through <code>Sun</code>   <code>j</code> Day of the month without leading zeros <code>1</code> to <code>31</code>   <code>l</code> (lowercase 'L') A full textual representation of the day of the week <code>Sunday</code> through <code>Saturday</code>   <code>N</code> ISO 8601 numeric representation of the day of the week <code>1</code> (for Monday) through <code>7</code> (for Sunday)   <code>S</code> English ordinal suffix for the day of the month, 2 characters  <code>st</code>, <code>nd</code>, <code>rd</code> or <code>th</code>. Works well with <code>j</code>    <code>w</code> Numeric representation of the day of the week <code>0</code> (for Sunday) through <code>6</code> (for Saturday)   <code>z</code> The day of the year (starting from 0) <code>0</code> through <code>365</code>   <i>Week</i> --- ---   <code>W</code> ISO 8601 week number of year, weeks starting on Monday Example: <code>42</code> (the 42nd week in the year)   <i>Month</i> --- ---   <code>F</code> A full textual representation of a month, such as January or March <code>January</code> through <code>December</code>   <code>m</code> Numeric representation of a month, with leading zeros <code>01</code> through <code>12</code>   <code>M</code> A short textual representation of a month, three letters <code>Jan</code> through <code>Dec</code>   <code>n</code> Numeric representation of a month, without leading zeros <code>1</code> through <code>12</code>   <code>t</code> Number of days in the given month <code>28</code> through <code>31</code>   <i>Year</i> --- ---   <code>L</code> Whether it's a leap year <code>1</code> if it is a leap year, <code>0</code> otherwise.   <code>o</code> ISO 8601 week-numbering year. This has the same value as <code>Y</code>, except that if the ISO week number (<code>W</code>) belongs to the previous or next year, that year is used instead. Examples: <code>1999</code> or <code>2003</code>   <code>X</code> An expanded full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE, and <code>+</code> for years CE. Examples: <code>-0055</code>, <code>+0787</code>, <code>+1999</code>, <code>+10191</code>   <code>x</code> An expanded full numeric representation if requried, or a standard full numeral representation if possible (like <code>Y</code>). At least four digits. Years BCE are prefixed with a <code>-</code>. Years beyond (and including) <code>10000</code> are prefixed by a <code>+</code>. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>+10191</code>   <code>Y</code> A full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>2003</code>, <code>10191</code>   <code>y</code> A two digit representation of a year Examples: <code>99</code> or <code>03</code>   <i>Time</i> --- ---   <code>a</code> Lowercase Ante meridiem and Post meridiem <code>am</code> or <code>pm</code>   <code>A</code> Uppercase Ante meridiem and Post meridiem <code>AM</code> or <code>PM</code>   <code>B</code> Swatch Internet time <code>000</code> through <code>999</code>   <code>g</code> 12-hour format of an hour without leading zeros <code>1</code> through <code>12</code>   <code>G</code> 24-hour format of an hour without leading zeros <code>0</code> through <code>23</code>   <code>h</code> 12-hour format of an hour with leading zeros <code>01</code> through <code>12</code>   <code>H</code> 24-hour format of an hour with leading zeros <code>00</code> through <code>23</code>   <code>i</code> Minutes with leading zeros <code>00</code> to <code>59</code>   <code>s</code> Seconds with leading zeros <code>00</code> through <code>59</code>   <code>u</code>  Microseconds. Note that <code>date()</code> will always generate <code>000000</code> since it takes an <code>int</code> parameter, whereas <b>DateTime::format()</b> does support microseconds if <code>DateTime</code> was created with microseconds.  Example: <code>654321</code>   <code>v</code>  Milliseconds. Same note applies as for <code>u</code>.  Example: <code>654</code>   <i>Timezone</i> --- ---   <code>e</code> Timezone identifier Examples: <code>UTC</code>, <code>GMT</code>, <code>Atlantic/Azores</code>   <code>I</code> (capital i) Whether or not the date is in daylight saving time <code>1</code> if Daylight Saving Time, <code>0</code> otherwise.   <code>O</code> Difference to Greenwich time (GMT) without colon between hours and minutes Example: <code>+0200</code>   <code>P</code> Difference to Greenwich time (GMT) with colon between hours and minutes Example: <code>+02:00</code>   <code>p</code>  The same as <code>P</code>, but returns <code>Z</code> instead of <code>+00:00</code> (available as of PHP 8.0.0)  Examples: <code>Z</code> or <code>+02:00</code>   <code>T</code> Timezone abbreviation, if known; otherwise the GMT offset. Examples: <code>EST</code>, <code>MDT</code>, <code>+05</code>   <code>Z</code> Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. <code>-43200</code> through <code>50400</code>   <i>Full Date/Time</i> --- ---   <code>c</code> ISO 8601 date 2004-02-12T15:19:21+00:00   <code>r</code> &#xBB;&#xA0;RFC 2822/&#xBB;&#xA0;RFC 5322 formatted date Example: <code>Thu, 21 Dec 2000 16:01:07 +0200</code>   <code>U</code> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) See also <code>time()</code>    <p>Unrecognized characters in the format string will be printed as-is. The <code>Z</code> format will always return <code>0</code> when using <code>gmdate()</code>.</p> <p><b>Note</b>:</p><p>Since this function only accepts <code>int</code> timestamps the <code>u</code> format character is only useful when using the <code>date_format()</code> function with user based timestamps created with <code>date_create()</code>.</p>
		 * @return string <p>Returns the formatted date string on success.</p>
		 * @link https://php.net/manual/en/datetime.format.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function format(string $format): string {}

		/**
		 * Returns the warnings and errors
		 * <p>Returns an array of warnings and errors found while parsing a date/time string.</p>
		 * @return array|false <p>Returns array containing info about warnings and errors, or <b><code>false</code></b> if there are neither warnings nor errors.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.getlasterrors.php
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public static function getLastErrors(): array|false {}

		/**
		 * Returns the timezone offset
		 * <p>Object-oriented style</p><p>Returns the timezone offset.</p>
		 * @return int <p>Returns the timezone offset in seconds from UTC on success.</p>
		 * @link https://php.net/manual/en/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getOffset(): int {}

		/**
		 * Gets the Unix timestamp
		 * <p>Object-oriented style</p><p>Gets the Unix timestamp.</p>
		 * @return int <p>Returns the Unix timestamp representing the date.</p>
		 * @link https://php.net/manual/en/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTimeImmutable::setTimestamp(), DateTimeInterface::format()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getTimestamp(): int {}

		/**
		 * Return time zone relative to given DateTime
		 * <p>Object-oriented style</p><p>Return time zone relative to given DateTime.</p>
		 * @return DateTimeZone|false <p>Returns a <code>DateTimeZone</code> object on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getTimezone(): \DateTimeZone|false {}

		/**
		 * Creates a new object with modified timestamp
		 * <p>Creates a new <code>DateTimeImmutable</code> object with modified timestamp. The original object is not modified.</p>
		 * @param string $modifier <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
		 * @return DateTimeImmutable|false <p>Returns a new modified DateTimeImmutable object or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.modify.php
		 * @see DateTimeImmutable::add(), DateTimeImmutable::sub(), DateTimeImmutable::setDate(), DateTimeImmutable::setISODate(), DateTimeImmutable::setTime(), DateTimeImmutable::setTimestamp()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function modify(string $modifier): \DateTimeImmutable|false {}

		/**
		 * Sets the date
		 * <p>Returns a new DateTimeImmutable object with the current date of the DateTimeImmutable object set to the given date.</p>
		 * @param int $year <p>Year of the date.</p>
		 * @param int $month <p>Month of the date.</p>
		 * @param int $day <p>Day of the date.</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> object with the modified data.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.setdate.php
		 * @see DateTimeImmutable::setISODate(), DateTimeImmutable::setTime()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setDate(int $year, int $month, int $day): \DateTimeImmutable {}

		/**
		 * Sets the ISO date
		 * <p>Returns a new DateTimeImmutable object with the date set according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.</p>
		 * @param int $year <p>Year of the date.</p>
		 * @param int $week <p>Week of the date.</p>
		 * @param int $dayOfWeek <p>Offset from the first day of the week.</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> object with the modified data.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.setisodate.php
		 * @see DateTimeImmutable::setDate(), DateTimeImmutable::setTime()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setISODate(int $year, int $week, int $dayOfWeek = 1): \DateTimeImmutable {}

		/**
		 * Sets the time
		 * <p>Returns a new DateTimeImmutable object with the time set to the given time.</p>
		 * @param int $hour <p>Hour of the time.</p>
		 * @param int $minute <p>Minute of the time.</p>
		 * @param int $second <p>Second of the time.</p>
		 * @param int $microsecond <p>Microsecond of the time.</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> object with the modified data.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.settime.php
		 * @see DateTimeImmutable::setDate(), DateTimeImmutable::setISODate()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0): \DateTimeImmutable {}

		/**
		 * Sets the date and time based on a Unix timestamp
		 * <p>Returns a new <code>DateTimeImmutable</code> object constructed from the old one, with the date and time set based on an Unix timestamp.</p>
		 * @param int $timestamp <p>Unix timestamp representing the date. Setting timestamps outside the range of <code>int</code> is possible by using <code>DateTimeImmutable::modify()</code> with the <code>@</code> format.</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> object with the modified data.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.settimestamp.php
		 * @see DateTimeImmutable::getTimestamp()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setTimestamp(int $timestamp): \DateTimeImmutable {}

		/**
		 * Sets the time zone
		 * <p>Returns a new DateTimeImmutable object with a new timezone set.</p>
		 * @param \DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the desired time zone.</p>
		 * @return DateTimeImmutable <p>Returns a new modified <code>DateTimeImmutable</code> object for method chaining. The underlaying point-in-time is not changed when calling this method.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.settimezone.php
		 * @see DateTimeImmutable::getTimezone(), DateTimeZone::__construct()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function setTimezone(\DateTimeZone $timezone): \DateTimeImmutable {}

		/**
		 * Subtracts an amount of days, months, years, hours, minutes and seconds
		 * <p>Returns a new <code>DateTimeImmutable</code> object, with the specified <code>DateInterval</code> object subtracted from the specified DateTimeImmutable object.</p>
		 * @param \DateInterval $interval <p>A <code>DateInterval</code> object</p>
		 * @return DateTimeImmutable <p>Returns a new <code>DateTimeImmutable</code> object with the modified data.</p>
		 * @link https://php.net/manual/en/datetimeimmutable.sub.php
		 * @see DateTimeImmutable::add(), DateTimeImmutable::diff(), DateTimeImmutable::modify()
		 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
		 */
		public function sub(\DateInterval $interval): \DateTimeImmutable {}
	}

	/**
	 * <p><b>DateTimeInterface</b> was created so that parameter, return, or property type declarations may accept either <code>DateTimeImmutable</code> or <code>DateTime</code> as a value. It is not possible to implement this interface with userland classes.</p>
	 * <p>Common constants that allow for formatting <code>DateTimeImmutable</code> or <code>DateTime</code> objects through <code>DateTimeImmutable::format()</code> and <code>DateTime::format()</code> are also defined on this interface.</p>
	 * @link https://php.net/manual/en/class.datetimeinterface.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	interface DateTimeInterface {

		/**
		 * @var string Atom (example: 2005-08-15T15:52:01+00:00)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const ATOM = "Y-m-d\\TH:i:sP";

		/**
		 * @var string HTTP Cookies (example: Monday, 15-Aug-2005 15:52:01 UTC)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const COOKIE = "l, d-M-Y H:i:s T";

		/**
		 * @var string ISO-8601 (example: 2005-08-15T15:52:01+0000)  <p><b>Note</b>:  This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons. Use <b><code>DateTimeInterface::ISO8601_EXPANDED</code></b>, <b><code>DateTimeInterface::ATOM</code></b> for compatibility with ISO-8601 instead. (ref ISO8601:2004 section 4.3.3 clause d) </p>
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const ISO8601 = "Y-m-d\\TH:i:sO";

		/**
		 * @var string ISO-8601 Expanded (example: +10191-07-26T08:59:52+01:00)  <p><b>Note</b>:  This format allows for year ranges outside of ISO-8601's normal range of <code>0000</code>-<code>9999</code> by always including a sign character. It also addresses that that timezone part (<code>+01:00</code>) is compatible with ISO-8601. </p>
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const ISO8601_EXPANDED = "X-m-d\\TH:i:sP";

		/**
		 * @var string RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC822 = "D, d M y H:i:s O";

		/**
		 * @var string RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC850 = "l, d-M-y H:i:s T";

		/**
		 * @var string RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC1036 = "D, d M y H:i:s O";

		/**
		 * @var string RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC1123 = "D, d M Y H:i:s O";

		/**
		 * @var string RFC 7231 (since PHP 7.0.19 and 7.1.5) (example: Sat, 30 Apr 2016 17:52:13 GMT)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC7231 = "D, d M Y H:i:s \\G\\M\\T";

		/**
		 * @var string RFC 2822 (example: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC2822 = "D, d M Y H:i:s O";

		/**
		 * @var string Same as <b><code>DATE_ATOM</code></b>
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC3339 = "Y-m-d\\TH:i:sP";

		/**
		 * @var string RFC 3339 EXTENDED format (example: 2005-08-15T15:52:01.000+00:00)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RFC3339_EXTENDED = "Y-m-d\\TH:i:s.vP";

		/**
		 * @var string RSS (example: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const RSS = "D, d M Y H:i:s O";

		/**
		 * @var string World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
		 * @link https://php.net/manual/en/class.datetimeinterface.php
		 */
		public const W3C = "Y-m-d\\TH:i:sP";

		/**
		 * The __wakeup handler
		 * <p>The __wakeup() handler.</p>
		 * @return void <p>Initializes a DateTime object.</p>
		 * @link https://php.net/manual/en/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function __wakeup(): void;

		/**
		 * Returns the difference between two DateTime objects
		 * <p>Object-oriented style</p><p>Returns the difference between two <code>DateTimeInterface</code> objects.</p>
		 * @param \DateTimeInterface $targetObject
		 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
		 * @return DateInterval <p>The <code>DateInterval</code> object represents the difference between the two dates.</p><p>The return value more specifically represents the clock-time interval to apply to the original object (<code>$this</code> or <code>$originObject</code>) to arrive at the <code>$targetObject</code>. This process is not always reversible.</p><p>The method is aware of DST changeovers, and hence can return an interval of <code>24 hours and 30 minutes</code>, as per one of the examples. If you want to calculate with absolute time, you need to convert both the <code>$this</code>/<code>$baseObject</code>, and <code>$targetObject</code> to UTC first.</p>
		 * @link https://php.net/manual/en/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval;

		/**
		 * Returns date formatted according to given format
		 * <p>Object-oriented style</p><p>Returns date formatted according to given format.</p>
		 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options below. There are also several predefined date constants that may be used instead, so for example <b><code>DATE_RSS</code></b> contains the format string <code>'D, d M Y H:i:s'</code>.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example returned values     <i>Day</i> --- ---   <code>d</code> Day of the month, 2 digits with leading zeros <code>01</code> to <code>31</code>   <code>D</code> A textual representation of a day, three letters <code>Mon</code> through <code>Sun</code>   <code>j</code> Day of the month without leading zeros <code>1</code> to <code>31</code>   <code>l</code> (lowercase 'L') A full textual representation of the day of the week <code>Sunday</code> through <code>Saturday</code>   <code>N</code> ISO 8601 numeric representation of the day of the week <code>1</code> (for Monday) through <code>7</code> (for Sunday)   <code>S</code> English ordinal suffix for the day of the month, 2 characters  <code>st</code>, <code>nd</code>, <code>rd</code> or <code>th</code>. Works well with <code>j</code>    <code>w</code> Numeric representation of the day of the week <code>0</code> (for Sunday) through <code>6</code> (for Saturday)   <code>z</code> The day of the year (starting from 0) <code>0</code> through <code>365</code>   <i>Week</i> --- ---   <code>W</code> ISO 8601 week number of year, weeks starting on Monday Example: <code>42</code> (the 42nd week in the year)   <i>Month</i> --- ---   <code>F</code> A full textual representation of a month, such as January or March <code>January</code> through <code>December</code>   <code>m</code> Numeric representation of a month, with leading zeros <code>01</code> through <code>12</code>   <code>M</code> A short textual representation of a month, three letters <code>Jan</code> through <code>Dec</code>   <code>n</code> Numeric representation of a month, without leading zeros <code>1</code> through <code>12</code>   <code>t</code> Number of days in the given month <code>28</code> through <code>31</code>   <i>Year</i> --- ---   <code>L</code> Whether it's a leap year <code>1</code> if it is a leap year, <code>0</code> otherwise.   <code>o</code> ISO 8601 week-numbering year. This has the same value as <code>Y</code>, except that if the ISO week number (<code>W</code>) belongs to the previous or next year, that year is used instead. Examples: <code>1999</code> or <code>2003</code>   <code>X</code> An expanded full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE, and <code>+</code> for years CE. Examples: <code>-0055</code>, <code>+0787</code>, <code>+1999</code>, <code>+10191</code>   <code>x</code> An expanded full numeric representation if requried, or a standard full numeral representation if possible (like <code>Y</code>). At least four digits. Years BCE are prefixed with a <code>-</code>. Years beyond (and including) <code>10000</code> are prefixed by a <code>+</code>. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>+10191</code>   <code>Y</code> A full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>2003</code>, <code>10191</code>   <code>y</code> A two digit representation of a year Examples: <code>99</code> or <code>03</code>   <i>Time</i> --- ---   <code>a</code> Lowercase Ante meridiem and Post meridiem <code>am</code> or <code>pm</code>   <code>A</code> Uppercase Ante meridiem and Post meridiem <code>AM</code> or <code>PM</code>   <code>B</code> Swatch Internet time <code>000</code> through <code>999</code>   <code>g</code> 12-hour format of an hour without leading zeros <code>1</code> through <code>12</code>   <code>G</code> 24-hour format of an hour without leading zeros <code>0</code> through <code>23</code>   <code>h</code> 12-hour format of an hour with leading zeros <code>01</code> through <code>12</code>   <code>H</code> 24-hour format of an hour with leading zeros <code>00</code> through <code>23</code>   <code>i</code> Minutes with leading zeros <code>00</code> to <code>59</code>   <code>s</code> Seconds with leading zeros <code>00</code> through <code>59</code>   <code>u</code>  Microseconds. Note that <code>date()</code> will always generate <code>000000</code> since it takes an <code>int</code> parameter, whereas <b>DateTime::format()</b> does support microseconds if <code>DateTime</code> was created with microseconds.  Example: <code>654321</code>   <code>v</code>  Milliseconds. Same note applies as for <code>u</code>.  Example: <code>654</code>   <i>Timezone</i> --- ---   <code>e</code> Timezone identifier Examples: <code>UTC</code>, <code>GMT</code>, <code>Atlantic/Azores</code>   <code>I</code> (capital i) Whether or not the date is in daylight saving time <code>1</code> if Daylight Saving Time, <code>0</code> otherwise.   <code>O</code> Difference to Greenwich time (GMT) without colon between hours and minutes Example: <code>+0200</code>   <code>P</code> Difference to Greenwich time (GMT) with colon between hours and minutes Example: <code>+02:00</code>   <code>p</code>  The same as <code>P</code>, but returns <code>Z</code> instead of <code>+00:00</code> (available as of PHP 8.0.0)  Examples: <code>Z</code> or <code>+02:00</code>   <code>T</code> Timezone abbreviation, if known; otherwise the GMT offset. Examples: <code>EST</code>, <code>MDT</code>, <code>+05</code>   <code>Z</code> Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. <code>-43200</code> through <code>50400</code>   <i>Full Date/Time</i> --- ---   <code>c</code> ISO 8601 date 2004-02-12T15:19:21+00:00   <code>r</code> &#xBB;&#xA0;RFC 2822/&#xBB;&#xA0;RFC 5322 formatted date Example: <code>Thu, 21 Dec 2000 16:01:07 +0200</code>   <code>U</code> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) See also <code>time()</code>    <p>Unrecognized characters in the format string will be printed as-is. The <code>Z</code> format will always return <code>0</code> when using <code>gmdate()</code>.</p> <p><b>Note</b>:</p><p>Since this function only accepts <code>int</code> timestamps the <code>u</code> format character is only useful when using the <code>date_format()</code> function with user based timestamps created with <code>date_create()</code>.</p>
		 * @return string <p>Returns the formatted date string on success.</p>
		 * @link https://php.net/manual/en/datetime.format.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function format(string $format): string;

		/**
		 * Returns the timezone offset
		 * <p>Object-oriented style</p><p>Returns the timezone offset.</p>
		 * @return int <p>Returns the timezone offset in seconds from UTC on success.</p>
		 * @link https://php.net/manual/en/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getOffset(): int;

		/**
		 * Gets the Unix timestamp
		 * <p>Object-oriented style</p><p>Gets the Unix timestamp.</p>
		 * @return int <p>Returns the Unix timestamp representing the date.</p>
		 * @link https://php.net/manual/en/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTimeImmutable::setTimestamp(), DateTimeInterface::format()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getTimestamp(): int;

		/**
		 * Return time zone relative to given DateTime
		 * <p>Object-oriented style</p><p>Return time zone relative to given DateTime.</p>
		 * @return DateTimeZone|false <p>Returns a <code>DateTimeZone</code> object on success or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getTimezone(): \DateTimeZone|false;
	}

	/**
	 * <p>Representation of time zone.</p>
	 * @link https://php.net/manual/en/class.datetimezone.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	class DateTimeZone {

		/**
		 * @var int <p>Africa time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const AFRICA = 1;

		/**
		 * @var int <p>America time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const AMERICA = 2;

		/**
		 * @var int <p>Antarctica time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const ANTARCTICA = 4;

		/**
		 * @var int <p>Arctic time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const ARCTIC = 8;

		/**
		 * @var int <p>Asia time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const ASIA = 16;

		/**
		 * @var int <p>Atlantic time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const ATLANTIC = 32;

		/**
		 * @var int <p>Australia time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const AUSTRALIA = 64;

		/**
		 * @var int <p>Europe time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const EUROPE = 128;

		/**
		 * @var int <p>Indian time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const INDIAN = 256;

		/**
		 * @var int <p>Pacific time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const PACIFIC = 512;

		/**
		 * @var int <p>UTC time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const UTC = 1024;

		/**
		 * @var int <p>All time zones.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const ALL = 2047;

		/**
		 * @var int <p>All time zones including backwards compatible.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const ALL_WITH_BC = 4095;

		/**
		 * @var int <p>Time zones per country.</p>
		 * @link https://php.net/manual/en/class.datetimezone.php
		 */
		public const PER_COUNTRY = 4096;

		/**
		 * Creates new DateTimeZone object
		 * <p>Object-oriented style</p><p>Creates a new DateTimeZone object.</p><p>A DateTimeZone object provides access to three different types of timezone rules: UTC offset (type <code>1</code>), timezone abbreviation (type <code>2</code>), and timezone identifiers as published in the IANA timezone database (type <code>3</code>).</p><p>The DateTimeZone object can be attached to <code>DateTime</code> and <code>DateTimeImmutable</code> objects to be able to render the timezone encapsulated by these objects in a local timezone.</p>
		 * @param string $timezone <p>One of the supported timezone names, an offset value (+0200), or a timezone abbreviation (BST).</p>
		 * @return DateTimeZone|false <p>Returns <code>DateTimeZone</code> on success. Procedural style returns <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetimezone.construct.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function __construct(string $timezone) {}

		/**
		 * Returns location information for a timezone
		 * <p>Object-oriented style</p><p>Returns location information for a timezone, including country code, latitude/longitude and comments.</p>
		 * @return array|false <p>Array containing location information about timezone or <b><code>false</code></b> on failure.</p>
		 * @link https://php.net/manual/en/datetimezone.getlocation.php
		 * @see DateTimeZone::listIdentifiers()
		 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
		 */
		public function getLocation(): array|false {}

		/**
		 * Returns the name of the timezone
		 * <p>Object-oriented style</p><p>Returns the name of the timezone.</p>
		 * @return string <p>Depending on zone type, UTC offset (type 1), timezone abbreviation (type 2), and timezone identifiers as published in the IANA timezone database (type 3), the descriptor string to create a new <code>DateTimeZone</code> object with the same offset and/or rules. For example <code>02:00</code>, <code>CEST</code>, or one of the timezone names in the list of timezones.</p>
		 * @link https://php.net/manual/en/datetimezone.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getName(): string {}

		/**
		 * Returns the timezone offset from GMT
		 * <p>Object-oriented style</p><p>This function returns the offset to GMT for the date/time specified in the <code>datetime</code> parameter. The GMT offset is calculated with the timezone information contained in the DateTimeZone object being used.</p>
		 * @param \DateTimeInterface $datetime <p>DateTime that contains the date/time to compute the offset from.</p>
		 * @return int <p>Returns time zone offset in seconds.</p>
		 * @link https://php.net/manual/en/datetimezone.getoffset.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getOffset(\DateTimeInterface $datetime): int {}

		/**
		 * Returns all transitions for the timezone
		 * <p>Object-oriented style</p>
		 * @param int $timestampBegin <p>Begin timestamp.</p>
		 * @param int $timestampEnd <p>End timestamp.</p>
		 * @return array|false <p>Returns a numerically indexed array of transition arrays on success, or <b><code>false</code></b> on failure. DateTimeZone objects wrapping type 1 (UTC offsets) and type 2 (abbreviations) do not contain any transitions, and calling this method on them will return <b><code>false</code></b>.</p><p>If <code>timestampBegin</code> is given, the first entry in the returned array will contain a transition element at the time of <code>timestampBegin</code>.</p> <b>Transition Array Structure</b>   Key Type Description     <code>ts</code> <code>int</code> Unix timestamp   <code>time</code> <code>string</code> <b><code>DateTimeInterface::ISO8601_EXPANDED</code></b> (PHP 8.2 and later), or <b><code>DateTimeInterface::ISO8601</code></b> (PHP 8.1 and lower) time string   <code>offset</code> <code>int</code> Offset to UTC in seconds   <code>isdst</code> <code>bool</code> Whether daylight saving time is active   <code>abbr</code> <code>string</code> Timezone abbreviation
		 * @link https://php.net/manual/en/datetimezone.gettransitions.php
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public function getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false {}

		/**
		 * Returns associative array containing dst, offset and the timezone name
		 * <p>Object-oriented style</p><p>The returned list of abbreviations includes all historical use of abbreviations, which can lead to correct, but confusing entries. There are also conflicts, as <code>PST</code> is used both in the US and in the Philippines.</p><p>The list that this function returns is therefore not suitable for building an array with options to present a choice of timezone to users.</p><p><b>Note</b>:</p><p>The data for this function are precompiled for performance reasons, and are not updated when using a newer &#xBB;&#xA0;timezonedb.</p>
		 * @return array <p>Returns the array of timezone abbreviations.</p>
		 * @link https://php.net/manual/en/datetimezone.listabbreviations.php
		 * @see timezone_identifiers_list()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public static function listAbbreviations(): array {}

		/**
		 * Returns a numerically indexed array containing all defined timezone identifiers
		 * <p>Object-oriented style</p>
		 * @param int $timezoneGroup <p>One of the <code>DateTimeZone</code> class constants (or a combination).</p>
		 * @param ?string $countryCode <p>A two-letter (uppercase) ISO 3166-1 compatible country code.</p> <p><b>Note</b>:  This option is only used when <code>timezoneGroup</code> is set to <b><code>DateTimeZone::PER_COUNTRY</code></b>. </p>
		 * @return array <p>Returns the array of timezone identifiers. Only non-outdated items are returned. To get all, including outdated timezone identifiers, use the <code>DateTimeZone::ALL_WITH_BC</code> as value for <code>timezoneGroup</code>.</p>
		 * @link https://php.net/manual/en/datetimezone.listidentifiers.php
		 * @see timezone_abbreviations_list()
		 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
		 */
		public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array {}
	}

	/**
	 * Validate a Gregorian date
	 * <p>Checks the validity of the date formed by the arguments. A date is considered valid if each parameter is properly defined.</p>
	 * @param int $month <p>The month is between 1 and 12 inclusive.</p>
	 * @param int $day <p>The day is within the allowed number of days for the given <code>month</code>. Leap <code>year</code>s are taken into consideration.</p>
	 * @param int $year <p>The year is between 1 and 32767 inclusive.</p>
	 * @return bool <p>Returns <b><code>true</code></b> if the date given is valid; otherwise returns <b><code>false</code></b>.</p>
	 * @link https://php.net/manual/en/function.checkdate.php
	 * @see mktime(), strtotime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function checkdate(int $month, int $day, int $year): bool {}

	/**
	 * Format a Unix timestamp
	 * <p>Returns a string formatted according to the given format string using the given integer <code>timestamp</code> (Unix timestamp) or the current time if no timestamp is given. In other words, <code>timestamp</code> is optional and defaults to the value of <code>time()</code>.</p><p>Unix timestamps do not handle timezones. Use the <code>DateTimeImmutable</code> class, and its <code>DateTimeInterface::format()</code> formatting method to format date/time information with a timezone attached.</p>
	 * @param string $format <p>Format accepted by <code>DateTimeInterface::format()</code>.</p> <p><b>Note</b>:  <b>date()</b> will always generate <code>000000</code> as microseconds since it takes an <code>int</code> parameter, whereas <code>DateTime::format()</code> does support microseconds if <code>DateTime</code> was created with microseconds. </p>
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string <p>Returns a formatted date string.</p>
	 * @link https://php.net/manual/en/function.date.php
	 * @see gmdate(), idate(), getdate(), getlastmod(), mktime(), time()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function date(string $format, ?int $timestamp = null): string {}

	/**
	 * Modifies a DateTime object, with added amount of days, months, years, hours, minutes and seconds
	 * <p>Object-oriented style</p><p>Adds the specified <code>DateInterval</code> object to the specified <code>DateTime</code> object.</p><p>Like <code>DateTimeImmutable::add()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param \DateInterval $interval <p>A <code>DateInterval</code> object</p>
	 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
	 * @link https://php.net/manual/en/datetime.add.php
	 * @see DateTimeImmutable::add()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_add(\DateTime $object, \DateInterval $interval): \DateTime {}

	/**
	 * create a new DateTime object
	 * <p>This is the procedural version of <code>DateTime::__construct()</code>.</p><p>Unlike the <code>DateTime</code> constructor, it will return <b><code>false</code></b> instead of an exception if the passed in <code>datetime</code> string is invalid.</p>
	 * @param string $datetime
	 * @param ?\DateTimeZone $timezone
	 * @return DateTime|false <p>Returns a new DateTime instance. Procedural style returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.date-create.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_create(string $datetime = "now", ?\DateTimeZone $timezone = null): \DateTime|false {}

	/**
	 * Parses a time string according to a specified format
	 * <p>Object-oriented style</p><p>Returns a new DateTime object representing the date and time specified by the <code>datetime</code> string, which was formatted in the given <code>format</code>.</p><p>Like <code>DateTimeImmutable::createFromFormat()</code> and <code>date_create_immutable_from_format()</code>, respectively, but creates a <code>DateTime</code> object.</p>
	 * @param string $format
	 * @param string $datetime
	 * @param ?\DateTimeZone $timezone
	 * @return DateTime|false <p>Returns a new DateTime instance or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetime.createfromformat.php
	 * @see DateTimeImmutable::createFromFormat()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_create_from_format(string $format, string $datetime, ?\DateTimeZone $timezone = null): \DateTime|false {}

	/**
	 * Returns new DateTimeImmutable object
	 * <p>Object-oriented style</p><p>Returns new a DateTimeImmutable object.</p>
	 * @param string $datetime <p>A date/time string. Valid formats are explained in Date and Time Formats.</p> <p>Enter <code>"now"</code> here to obtain the current time when using the <code>$timezone</code> parameter.</p>
	 * @param ?\DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the timezone of <code>$datetime</code>.</p> <p>If <code>$timezone</code> is omitted or <b><code>null</code></b>, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>$timezone</code> parameter and the current timezone are ignored when the <code>$datetime</code> parameter either is a UNIX timestamp (e.g. <code>@946684800</code>) or specifies a timezone (e.g. <code>2010-01-28T15:00:00+02:00</code>, or <code>2010-07-05T06:00:00Z</code>).</p>
	 * @return DateTimeImmutable|false <p>Returns a new DateTimeImmutable instance. Procedural style returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetimeimmutable.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function date_create_immutable(string $datetime = "now", ?\DateTimeZone $timezone = null): \DateTimeImmutable|false {}

	/**
	 * Parses a time string according to a specified format
	 * <p>Object-oriented style</p><p>Returns a new DateTimeImmutable object representing the date and time specified by the <code>datetime</code> string, which was formatted in the given <code>format</code>.</p>
	 * @param string $format <p>The format that the passed in <code>string</code> should be in. See the formatting options below. In most cases, the same letters as for the <code>date()</code> can be used.</p> <p>All fields are initialised with the current date/time. In most cases you would want to reset these to "zero" (the Unix epoch, <code>1970-01-01 00:00:00 UTC</code>). You do that by including the <code>!</code> character as first character in your <code>format</code>, or <code>|</code> as your last. Please see the documentation for each character below for more information.</p> <p>The format is parsed from left to right, which means that in some situations the order in which the format characters are present affects the result. In the case of <code>z</code> (the day of the year), it is required that a year has already been parsed, for example through the <code>Y</code> or <code>y</code> characters.</p> <p>Letters that are used for parsing numbers allow a wide range of values, outside of what the logical range would be. For example, the <code>d</code> (day of the month) accepts values in the range from <code>00</code> to <code>99</code>. The only constraint is on the amount of digits. The date/time parser's overflow mechanism is used when out-of-range values are given. The examples below show some of this behaviour.</p> <p>This also means that the data parsed for a format letter is greedy, and will read up to the amount of digits its format allows for. That can then also mean that there are no longer enough characters in the <code>datetime</code> string for following format characters. An example on this page also illustrates this issue.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example parsable values     <i>Day</i> --- ---   <code>d</code> and <code>j</code> Day of the month, 2 digits with or without leading zeros  <code>01</code> to <code>31</code> or <code>1</code> to <code>31</code>. (2 digit numbers higher than the number of days in the month are accepted, in which case they will make the month overflow. For example using 33 with January, means February 2nd)    <code>D</code> and <code>l</code> A textual representation of a day  <code>Mon</code> through <code>Sun</code> or <code>Sunday</code> through <code>Saturday</code>. If the day name given is different then the day name belonging to a parsed (or default) date is different, then an overflow occurs to the <i>next</i> date with the given day name. See the examples below for an explanation.    <code>S</code> English ordinal suffix for the day of the month, 2 characters. It's ignored while processing.  <code>st</code>, <code>nd</code>, <code>rd</code> or <code>th</code>.    <code>z</code>  The day of the year (starting from 0); must be preceded by <code>Y</code> or <code>y</code>.   <code>0</code> through <code>365</code>. (3 digit numbers higher than the numbers in a year are accepted, in which case they will make the year overflow. For example using 366 with 2022, means January 2nd, 2023)    <i>Month</i> --- ---   <code>F</code> and <code>M</code> A textual representation of a month, such as January or Sept  <code>January</code> through <code>December</code> or <code>Jan</code> through <code>Dec</code>    <code>m</code> and <code>n</code> Numeric representation of a month, with or without leading zeros  <code>01</code> through <code>12</code> or <code>1</code> through <code>12</code>. (2 digit numbers higher than 12 are accepted, in which case they will make the year overflow. For example using 13 means January in the next year)    <i>Year</i> --- ---   <code>X</code> and <code>x</code> A full numeric representation of a year, up to 19 digits, optionally prefixed by <code>+</code> or <code>-</code> Examples: <code>0055</code>, <code>787</code>, <code>1999</code>, <code>-2003</code>, <code>+10191</code>   <code>Y</code> A full numeric representation of a year, up to 4 digits Examples: <code>0055</code>, <code>787</code>, <code>1999</code>, <code>2003</code>   <code>y</code>  A two digit representation of a year (which is assumed to be in the range 1970-2069, inclusive)   Examples: <code>99</code> or <code>03</code> (which will be interpreted as <code>1999</code> and <code>2003</code>, respectively)    <i>Time</i> --- ---   <code>a</code> and <code>A</code> Ante meridiem and Post meridiem <code>am</code> or <code>pm</code>   <code>g</code> and <code>h</code> 12-hour format of an hour with or without leading zero  <code>1</code> through <code>12</code> or <code>01</code> through <code>12</code> (2 digit numbers higher than 12 are accepted, in which case they will make the day overflow. For example using <code>14</code> means <code>02</code> in the next AM/PM period)    <code>G</code> and <code>H</code> 24-hour format of an hour with or without leading zeros  <code>0</code> through <code>23</code> or <code>00</code> through <code>23</code> (2 digit numbers higher than 24 are accepted, in which case they will make the day overflow. For example using <code>26</code> means <code>02:00</code> the next day)    <code>i</code> Minutes with leading zeros  <code>00</code> to <code>59</code>. (2 digit numbers higher than 59 are accepted, in which case they will make the hour overflow. For example using <code>66</code> means <code>:06</code> the next hour)    <code>s</code> Seconds, with leading zeros  <code>00</code> through <code>59</code> (2 digit numbers higher than 59 are accepted, in which case they will make the minute overflow. For example using <code>90</code> means <code>:30</code> the next minute)    <code>v</code> Fraction in milliseconds (up to three digits) Example: <code>12</code> (<code>0.12</code> seconds), <code>345</code> (<code>0.345</code> seconds)   <code>u</code> Fraction in microseconds (up to six digits) Example: <code>45</code> (<code>0.45</code> seconds), <code>654321</code> (<code>0.654321</code> seconds)   <i>Timezone</i> --- ---    <code>e</code>, <code>O</code>, <code>P</code> and <code>T</code>  Timezone identifier, or difference to UTC in hours, or difference to UTC with colon between hours and minutes, or timezone abbreviation Examples: <code>UTC</code>, <code>GMT</code>, <code>Atlantic/Azores</code> or <code>+0200</code> or <code>+02:00</code> or <code>EST</code>, <code>MDT</code>    <i>Full Date/Time</i> --- ---   <code>U</code> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) Example: <code>1292177455</code>   <i>Whitespace and Separators</i> --- ---   <code> </code> (space) One space or one tab Example: <code> </code>   <code>#</code>  One of the following separation symbol: <code>;</code>, <code>:</code>, <code>/</code>, <code>.</code>, <code>,</code>, <code>-</code>, <code>(</code> or <code>)</code>  Example: <code>/</code>    <code>;</code>, <code>:</code>, <code>/</code>, <code>.</code>, <code>,</code>, <code>-</code>, <code>(</code> or <code>)</code>  The specified character. Example: <code>-</code>   <code>&#63;</code> A random byte Example: <code>^</code> (Be aware that for UTF-8 characters you might need more than one <code>&#63;</code>. In this case, using <code>&#42;</code> is probably what you want instead)   <code>&#42;</code> Random bytes until the next separator or digit Example: <code>&#42;</code> in <code>Y-&#42;-d</code> with the string <code>2009-aWord-08</code> will match <code>aWord</code>   <code>!</code> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values ( <code>0</code> for hour, minute, second and fraction, <code>1</code> for month and day, <code>1970</code> for year and <code>UTC</code> for timezone information) Without <code>!,</code> all fields will be set to the current date and time.   <code>|</code> Resets all fields (year, month, day, hour, minute, second, fraction and timezone information) to zero-like values if they have not been parsed yet <code>Y-m-d|</code> will set the year, month and day to the information found in the string to parse, and sets the hour, minute and second to 0.   <code>+</code> If this format specifier is present, trailing data in the string will not cause an error, but a warning instead Use <code>DateTimeImmutable::getLastErrors()</code> to find out whether trailing data was present.    <p>Unrecognized characters in the format string will cause the parsing to fail and an error message is appended to the returned structure. You can query error messages with <code>DateTimeImmutable::getLastErrors()</code>.</p> <p>To include literal characters in <code>format</code>, you have to escape them with a backslash (<code>\</code>).</p> <p>If <code>format</code> does not contain the character <code>!</code> then portions of the generated date/time which are not specified in <code>format</code> will be set to the current system time.</p> <p>If <code>format</code> contains the character <code>!</code>, then portions of the generated date/time not provided in <code>format</code>, as well as values to the left-hand side of the <code>!</code>, will be set to corresponding values from the Unix epoch.</p> <p>If any time character is parsed, then all other time-related fields are set to "0", unless also parsed.</p> <p>The Unix epoch is 1970-01-01 00:00:00 UTC.</p>
	 * @param string $datetime <p>String representing the time.</p>
	 * @param ?\DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the desired time zone.</p> <p>If <code>timezone</code> is omitted or <b><code>null</code></b> and <code>datetime</code> contains no timezone, the current timezone will be used.</p> <p><b>Note</b>:</p><p>The <code>timezone</code> parameter and the current timezone are ignored when the <code>datetime</code> parameter either contains a UNIX timestamp (e.g. <code>946684800</code>) or specifies a timezone (e.g. <code>2010-01-28T15:00:00+02:00</code>).</p>
	 * @return DateTimeImmutable|false <p>Returns a new DateTimeImmutable instance or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetimeimmutable.createfromformat.php
	 * @see DateTimeImmutable::__construct(), DateTimeImmutable::getLastErrors(), checkdate(), strptime()
	 * @since PHP 5 >= 5.5.0, PHP 7, PHP 8
	 */
	function date_create_immutable_from_format(string $format, string $datetime, ?\DateTimeZone $timezone = null): \DateTimeImmutable|false {}

	/**
	 * Sets the date
	 * <p>Object-oriented style</p><p>Resets the current date of the DateTime object to a different date.</p><p>Like <code>DateTimeImmutable::setDate()</code> but works with <code>DateTime</code>, and changes the existing object.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $year <p>Year of the date.</p>
	 * @param int $month <p>Month of the date.</p>
	 * @param int $day <p>Day of the date.</p>
	 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
	 * @link https://php.net/manual/en/datetime.setdate.php
	 * @see DateTimeImmutable::setDate()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_date_set(\DateTime $object, int $year, int $month, int $day): \DateTime {}

	/**
	 * Gets the default timezone used by all date/time functions in a script
	 * <p>In order of preference, this function returns the default timezone by:</p><p>Reading the timezone set using the <code>date_default_timezone_set()</code> function (if any)</p><p>Reading the value of the date.timezone ini option (if set)</p><p>If none of the above succeed, <b>date_default_timezone_get()</b> will return a default timezone of <code>UTC</code>.</p>
	 * @return string <p>Returns a <code>string</code>.</p>
	 * @link https://php.net/manual/en/function.date-default-timezone-get.php
	 * @see date_default_timezone_set()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function date_default_timezone_get(): string {}

	/**
	 * Sets the default timezone used by all date/time functions in a script
	 * <p><b>date_default_timezone_set()</b> sets the default timezone used by all date/time functions.</p><p>Instead of using this function to set the default timezone in your script, you can also use the INI setting date.timezone to set the default timezone.</p>
	 * @param string $timezoneId <p>The timezone identifier, like <code>UTC</code>, <code>Africa/Lagos</code>, <code>Asia/Hong_Kong</code>, or <code>Europe/Lisbon</code>. The list of valid identifiers is available in the List of Supported Timezones.</p>
	 * @return bool <p>This function returns <b><code>false</code></b> if the <code>timezoneId</code> isn't valid, or <b><code>true</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.date-default-timezone-set.php
	 * @see date_default_timezone_get()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function date_default_timezone_set(string $timezoneId): bool {}

	/**
	 * Returns the difference between two DateTime objects
	 * <p>Object-oriented style</p><p>Returns the difference between two <code>DateTimeInterface</code> objects.</p>
	 * @param \DateTimeInterface $baseObject
	 * @param \DateTimeInterface $targetObject
	 * @param bool $absolute <p>Should the interval be forced to be positive&#63;</p>
	 * @return DateInterval <p>The <code>DateInterval</code> object represents the difference between the two dates.</p><p>The return value more specifically represents the clock-time interval to apply to the original object (<code>$this</code> or <code>$originObject</code>) to arrive at the <code>$targetObject</code>. This process is not always reversible.</p><p>The method is aware of DST changeovers, and hence can return an interval of <code>24 hours and 30 minutes</code>, as per one of the examples. If you want to calculate with absolute time, you need to convert both the <code>$this</code>/<code>$baseObject</code>, and <code>$targetObject</code> to UTC first.</p>
	 * @link https://php.net/manual/en/datetime.diff.php
	 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_diff(\DateTimeInterface $baseObject, \DateTimeInterface $targetObject, bool $absolute = false): \DateInterval {}

	/**
	 * Returns date formatted according to given format
	 * <p>Object-oriented style</p><p>Returns date formatted according to given format.</p>
	 * @param \DateTimeInterface $object <p>A <code>DateTime</code> object returned by <code>date_create()</code></p>
	 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options below. There are also several predefined date constants that may be used instead, so for example <b><code>DATE_RSS</code></b> contains the format string <code>'D, d M Y H:i:s'</code>.</p> <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description Example returned values     <i>Day</i> --- ---   <code>d</code> Day of the month, 2 digits with leading zeros <code>01</code> to <code>31</code>   <code>D</code> A textual representation of a day, three letters <code>Mon</code> through <code>Sun</code>   <code>j</code> Day of the month without leading zeros <code>1</code> to <code>31</code>   <code>l</code> (lowercase 'L') A full textual representation of the day of the week <code>Sunday</code> through <code>Saturday</code>   <code>N</code> ISO 8601 numeric representation of the day of the week <code>1</code> (for Monday) through <code>7</code> (for Sunday)   <code>S</code> English ordinal suffix for the day of the month, 2 characters  <code>st</code>, <code>nd</code>, <code>rd</code> or <code>th</code>. Works well with <code>j</code>    <code>w</code> Numeric representation of the day of the week <code>0</code> (for Sunday) through <code>6</code> (for Saturday)   <code>z</code> The day of the year (starting from 0) <code>0</code> through <code>365</code>   <i>Week</i> --- ---   <code>W</code> ISO 8601 week number of year, weeks starting on Monday Example: <code>42</code> (the 42nd week in the year)   <i>Month</i> --- ---   <code>F</code> A full textual representation of a month, such as January or March <code>January</code> through <code>December</code>   <code>m</code> Numeric representation of a month, with leading zeros <code>01</code> through <code>12</code>   <code>M</code> A short textual representation of a month, three letters <code>Jan</code> through <code>Dec</code>   <code>n</code> Numeric representation of a month, without leading zeros <code>1</code> through <code>12</code>   <code>t</code> Number of days in the given month <code>28</code> through <code>31</code>   <i>Year</i> --- ---   <code>L</code> Whether it's a leap year <code>1</code> if it is a leap year, <code>0</code> otherwise.   <code>o</code> ISO 8601 week-numbering year. This has the same value as <code>Y</code>, except that if the ISO week number (<code>W</code>) belongs to the previous or next year, that year is used instead. Examples: <code>1999</code> or <code>2003</code>   <code>X</code> An expanded full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE, and <code>+</code> for years CE. Examples: <code>-0055</code>, <code>+0787</code>, <code>+1999</code>, <code>+10191</code>   <code>x</code> An expanded full numeric representation if requried, or a standard full numeral representation if possible (like <code>Y</code>). At least four digits. Years BCE are prefixed with a <code>-</code>. Years beyond (and including) <code>10000</code> are prefixed by a <code>+</code>. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>+10191</code>   <code>Y</code> A full numeric representation of a year, at least 4 digits, with <code>-</code> for years BCE. Examples: <code>-0055</code>, <code>0787</code>, <code>1999</code>, <code>2003</code>, <code>10191</code>   <code>y</code> A two digit representation of a year Examples: <code>99</code> or <code>03</code>   <i>Time</i> --- ---   <code>a</code> Lowercase Ante meridiem and Post meridiem <code>am</code> or <code>pm</code>   <code>A</code> Uppercase Ante meridiem and Post meridiem <code>AM</code> or <code>PM</code>   <code>B</code> Swatch Internet time <code>000</code> through <code>999</code>   <code>g</code> 12-hour format of an hour without leading zeros <code>1</code> through <code>12</code>   <code>G</code> 24-hour format of an hour without leading zeros <code>0</code> through <code>23</code>   <code>h</code> 12-hour format of an hour with leading zeros <code>01</code> through <code>12</code>   <code>H</code> 24-hour format of an hour with leading zeros <code>00</code> through <code>23</code>   <code>i</code> Minutes with leading zeros <code>00</code> to <code>59</code>   <code>s</code> Seconds with leading zeros <code>00</code> through <code>59</code>   <code>u</code>  Microseconds. Note that <code>date()</code> will always generate <code>000000</code> since it takes an <code>int</code> parameter, whereas <b>DateTime::format()</b> does support microseconds if <code>DateTime</code> was created with microseconds.  Example: <code>654321</code>   <code>v</code>  Milliseconds. Same note applies as for <code>u</code>.  Example: <code>654</code>   <i>Timezone</i> --- ---   <code>e</code> Timezone identifier Examples: <code>UTC</code>, <code>GMT</code>, <code>Atlantic/Azores</code>   <code>I</code> (capital i) Whether or not the date is in daylight saving time <code>1</code> if Daylight Saving Time, <code>0</code> otherwise.   <code>O</code> Difference to Greenwich time (GMT) without colon between hours and minutes Example: <code>+0200</code>   <code>P</code> Difference to Greenwich time (GMT) with colon between hours and minutes Example: <code>+02:00</code>   <code>p</code>  The same as <code>P</code>, but returns <code>Z</code> instead of <code>+00:00</code> (available as of PHP 8.0.0)  Examples: <code>Z</code> or <code>+02:00</code>   <code>T</code> Timezone abbreviation, if known; otherwise the GMT offset. Examples: <code>EST</code>, <code>MDT</code>, <code>+05</code>   <code>Z</code> Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive. <code>-43200</code> through <code>50400</code>   <i>Full Date/Time</i> --- ---   <code>c</code> ISO 8601 date 2004-02-12T15:19:21+00:00   <code>r</code> &#xBB;&#xA0;RFC 2822/&#xBB;&#xA0;RFC 5322 formatted date Example: <code>Thu, 21 Dec 2000 16:01:07 +0200</code>   <code>U</code> Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) See also <code>time()</code>    <p>Unrecognized characters in the format string will be printed as-is. The <code>Z</code> format will always return <code>0</code> when using <code>gmdate()</code>.</p> <p><b>Note</b>:</p><p>Since this function only accepts <code>int</code> timestamps the <code>u</code> format character is only useful when using the <code>date_format()</code> function with user based timestamps created with <code>date_create()</code>.</p>
	 * @return string <p>Returns the formatted date string on success.</p>
	 * @link https://php.net/manual/en/datetime.format.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_format(\DateTimeInterface $object, string $format): string {}

	/**
	 * Returns the warnings and errors
	 * <p>Object-oriented style</p><p>Like <code>DateTimeImmutable::getLastErrors()</code> but works with <code>DateTime</code>.</p>
	 * @return array|false <p>Returns array containing info about warnings and errors, or <b><code>false</code></b> if there are neither warnings nor errors.</p>
	 * @link https://php.net/manual/en/datetime.getlasterrors.php
	 * @see DateTimeImmutable::getLastErrors()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_get_last_errors(): array|false {}

	/**
	 * Alias of DateInterval::createFromDateString()
	 * <p>This function is an alias of: <code>DateInterval::createFromDateString()</code></p>
	 * @link https://php.net/manual/en/function.date-interval-create-from-date-string.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_interval_create_from_date_string() {}

	/**
	 * Alias of DateInterval::format()
	 * <p>This function is an alias of: <code>DateInterval::format()</code></p>
	 * @link https://php.net/manual/en/function.date-interval-format.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_interval_format() {}

	/**
	 * Sets the ISO date
	 * <p>Object-oriented style</p><p>Set a date according to the ISO 8601 standard - using weeks and day offsets rather than specific dates.</p><p>Like <code>DateTimeImmutable::setISODate()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $year <p>Year of the date.</p>
	 * @param int $week <p>Week of the date.</p>
	 * @param int $dayOfWeek <p>Offset from the first day of the week.</p>
	 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
	 * @link https://php.net/manual/en/datetime.setisodate.php
	 * @see DateTimeImmutable::setISODate()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_isodate_set(\DateTime $object, int $year, int $week, int $dayOfWeek = 1): \DateTime {}

	/**
	 * Alters the timestamp
	 * <p>Object-oriented style</p><p>Alter the timestamp of a DateTime object by incrementing or decrementing in a format accepted by <code>DateTimeImmutable::__construct()</code>.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param string $modifier <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
	 * @return DateTime|false <p>Returns the modified <code>DateTime</code> object for method chaining or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetime.modify.php
	 * @see strtotime(), DateTimeImmutable::modify(), DateTime::add(), DateTime::sub(), DateTime::setDate(), DateTime::setISODate(), DateTime::setTime(), DateTime::setTimestamp()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_modify(\DateTime $object, string $modifier): \DateTime|false {}

	/**
	 * Returns the timezone offset
	 * <p>Object-oriented style</p><p>Returns the timezone offset.</p>
	 * @param \DateTimeInterface $object <p>A <code>DateTime</code> object returned by <code>date_create()</code></p>
	 * @return int <p>Returns the timezone offset in seconds from UTC on success.</p>
	 * @link https://php.net/manual/en/datetime.getoffset.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_offset_get(\DateTimeInterface $object): int {}

	/**
	 * Returns associative array with detailed info about given date/time
	 * <p><b>date_parse()</b> parses the given <code>datetime</code> string according to the same rules as <code>strtotime()</code> and <code>DateTimeImmutable::__construct()</code>. Instead of returning a Unix timestamp (with <code>strtotime()</code>) or a <code>DateTimeImmutable</code> object (with <code>DateTimeImmutable::__construct()</code>), it returns an associative array with the information that it could detect in the given <code>datetime</code> string.</p><p>If no information about a certain group of elements can be found, these array elements will be set to <b><code>false</code></b> or are missing. If needed for constructing a timestamp or <code>DateTimeImmutable</code> object from the same <code>datetime</code> string, more fields can be set to a non-<b><code>false</code></b> value. See the examples for cases where that happens.</p>
	 * @param string $datetime <p>Date/time in format accepted by <code>DateTimeImmutable::__construct()</code>.</p>
	 * @return array <p>Returns <code>array</code> with information about the parsed date/time on success or <b><code>false</code></b> on failure.</p><p>The returned array has keys for <code>year</code>, <code>month</code>, <code>day</code>, <code>hour</code>, <code>minute</code>, <code>second</code>, <code>fraction</code>, and <code>is_localtime</code>.</p><p>If <code>is_localtime</code> is present then <code>zone_type</code> indicates the type of timezone. For type <code>1</code> (UTC offset) the <code>zone</code>, <code>is_dst</code> fields are added; for type <code>2</code> (abbreviation) the fields <code>tz_abbr</code>, <code>is_dst</code> are added; and for type <code>3</code> (timezone identifier) the <code>tz_abbr</code>, <code>tz_id</code> are added.</p><p>If relative time elements are present in the <code>datetime</code> string such as <code>+3 days</code>, the then returned array includes a nested array with the key <code>relative</code>. This array then contains the keys <code>year</code>, <code>month</code>, <code>day</code>, <code>hour</code>, <code>minute</code>, <code>second</code>, and if necessary <code>weekday</code>, and <code>weekdays</code>, depending on the string that was passed in.</p><p>The array includes <code>warning_count</code> and <code>warnings</code> fields. The first one indicate how many warnings there were. The keys of elements <code>warnings</code> array indicate the position in the given <code>datetime</code> where the warning occurred, with the string value describing the warning itself.</p><p>The array also contains <code>error_count</code> and <code>errors</code> fields. The first one indicate how many errors were found. The keys of elements <code>errors</code> array indicate the position in the given <code>datetime</code> where the error occurred, with the string value describing the error itself.</p><p><b>Warning</b></p> <p>The number of array elements in the <code>warnings</code> and <code>errors</code> arrays might be less than <code>warning_count</code> or <code>error_count</code> if they occurred at the same position.</p>
	 * @link https://php.net/manual/en/function.date-parse.php
	 * @see date_parse_from_format(), checkdate(), getdate()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_parse(string $datetime): array {}

	/**
	 * Get info about given date formatted according to the specified format
	 * <p>Returns associative array with detailed info about given date/time.</p>
	 * @param string $format <p>Documentation on how the <code>format</code> is used, please refer to the documentation of <code>DateTimeImmutable::createFromFormat()</code>. The same rules apply.</p>
	 * @param string $datetime <p>String representing the date/time.</p>
	 * @return array <p>Returns associative array with detailed info about given date/time.</p><p>The returned array has keys for <code>year</code>, <code>month</code>, <code>day</code>, <code>hour</code>, <code>minute</code>, <code>second</code>, <code>fraction</code>, and <code>is_localtime</code>.</p><p>If <code>is_localtime</code> is present then <code>zone_type</code> indicates the type of timezone. For type <code>1</code> (UTC offset) the <code>zone</code>, <code>is_dst</code> fields are added; for type <code>2</code> (abbreviation) the fields <code>tz_abbr</code>, <code>is_dst</code> are added; and for type <code>3</code> (timezone identifier) the <code>tz_abbr</code>, <code>tz_id</code> are added.</p><p>The array includes <code>warning_count</code> and <code>warnings</code> fields. The first one indicate how many warnings there were. The keys of elements <code>warnings</code> array indicate the position in the given <code>datetime</code> where the warning occurred, with the string value describing the warning itself. An example below shows such a warning.</p><p>The array also contains <code>error_count</code> and <code>errors</code> fields. The first one indicate how many errors were found. The keys of elements <code>errors</code> array indicate the position in the given <code>datetime</code> where the error occurred, with the string value describing the error itself. An example below shows such an error.</p><p><b>Warning</b></p> <p>The number of array elements in the <code>warnings</code> and <code>errors</code> arrays might be less than <code>warning_count</code> or <code>error_count</code> if they occurred at the same position.</p>
	 * @link https://php.net/manual/en/function.date-parse-from-format.php
	 * @see DateTimeImmutable::createFromFormat(), checkdate()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_parse_from_format(string $format, string $datetime): array {}

	/**
	 * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
	 * <p>Object-oriented style</p><p>Modifies the specified DateTime object, by subtracting the specified <code>DateInterval</code> object.</p><p>Like <code>DateTimeImmutable::sub()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param \DateInterval $interval <p>A <code>DateInterval</code> object</p>
	 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
	 * @link https://php.net/manual/en/datetime.sub.php
	 * @see DateTimeImmutable::sub()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_sub(\DateTime $object, \DateInterval $interval): \DateTime {}

	/**
	 * Returns an array with information about sunset/sunrise and twilight begin/end
	 * @param int $timestamp <p>Unix timestamp.</p>
	 * @param float $latitude <p>Latitude in degrees.</p>
	 * @param float $longitude <p>Longitude in degrees.</p>
	 * @return array <p>Returns array on success or <b><code>false</code></b> on failure. The structure of the array is detailed in the following list:</p>  <code>sunrise</code>   The timestamp of the sunrise (zenith angle = 90&#xB0;35').    <code>sunset</code>   The timestamp of the sunset (zenith angle = 90&#xB0;35').    <code>transit</code>   The timestamp when the sun is at its zenith, i.e. has reached its topmost point.    <code>civil_twilight_begin</code>   The start of the civil dawn (zenith angle = 96&#xB0;). It ends at <code>sunrise</code>.    <code>civil_twilight_end</code>   The end of the civil dusk (zenith angle = 96&#xB0;). It starts at <code>sunset</code>.    <code>nautical_twilight_begin</code>   The start of the nautical dawn (zenith angle = 102&#xB0;). It ends at <code>civil_twilight_begin</code>.    <code>nautical_twilight_end</code>   The end of the nautical dusk (zenith angle = 102&#xB0;). It starts at <code>civil_twilight_end</code>.    <code>astronomical_twilight_begin</code>   The start of the astronomical dawn (zenith angle = 108&#xB0;). It ends at <code>nautical_twilight_begin</code>.    <code>astronomical_twilight_end</code>   The end of the astronomical dusk (zenith angle = 108&#xB0;). It starts at <code>nautical_twilight_end</code>.   <p>The values of the array elements are either UNIX timestamps, <b><code>false</code></b> if the sun is below the respective zenith for the whole day, or <b><code>true</code></b> if the sun is above the respective zenith for the whole day.</p>
	 * @link https://php.net/manual/en/function.date-sun-info.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PHP 8
	 */
	function date_sun_info(int $timestamp, float $latitude, float $longitude): array {}

	/**
	 * Returns time of sunrise for a given day and location
	 * <p><b>date_sunrise()</b> returns the sunrise time for a given day (specified as a <code>timestamp</code>) and location.</p>
	 * @param int $timestamp <p>The <code>timestamp</code> of the day from which the sunrise time is taken.</p>
	 * @param int $returnFormat <p></p> <b><code>returnFormat</code> constants</b>   constant description example     SUNFUNCS_RET_STRING returns the result as <code>string</code> 16:46   SUNFUNCS_RET_DOUBLE returns the result as <code>float</code> 16.78243132   SUNFUNCS_RET_TIMESTAMP returns the result as <code>int</code> (timestamp) 1095034606
	 * @param ?float $latitude <p>Defaults to North, pass in a negative value for South. See also: date.default_latitude</p>
	 * @param ?float $longitude <p>Defaults to East, pass in a negative value for West. See also: date.default_longitude</p>
	 * @param ?float $zenith <p><code>zenith</code> is the angle between the center of the sun and a line perpendicular to earth's surface. It defaults to date.sunrise_zenith</p> <b>Common <code>zenith</code> angles</b>   Angle Description     90&#xB0;50' Sunrise: the point where the sun becomes visible.   96&#xB0; Civil twilight: conventionally used to signify the start of dawn.   102&#xB0; Nautical twilight: the point at which the horizon starts being visible at sea.   108&#xB0; Astronomical twilight: the point at which the sun starts being the source of any illumination.
	 * @param ?float $utcOffset <p>Specified in hours. The <code>utcOffset</code> is ignored, if <code>returnFormat</code> is <b><code>SUNFUNCS_RET_TIMESTAMP</code></b>.</p>
	 * @return string|int|float|false <p>Returns the sunrise time in a specified <code>returnFormat</code> on success or <b><code>false</code></b> on failure. One potential reason for failure is that the sun does not rise at all, which happens inside the polar circles for part of the year.</p>
	 * @link https://php.net/manual/en/function.date-sunrise.php
	 * @see date_sun_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude = null, ?float $longitude = null, ?float $zenith = null, ?float $utcOffset = null): string|int|float|false {}

	/**
	 * Returns time of sunset for a given day and location
	 * <p><b>date_sunset()</b> returns the sunset time for a given day (specified as a <code>timestamp</code>) and location.</p>
	 * @param int $timestamp <p>The <code>timestamp</code> of the day from which the sunset time is taken.</p>
	 * @param int $returnFormat <p></p> <b><code>returnFormat</code> constants</b>   constant description example     SUNFUNCS_RET_STRING returns the result as <code>string</code> 16:46   SUNFUNCS_RET_DOUBLE returns the result as <code>float</code> 16.78243132   SUNFUNCS_RET_TIMESTAMP returns the result as <code>int</code> (timestamp) 1095034606
	 * @param ?float $latitude <p>Defaults to North, pass in a negative value for South. See also: date.default_latitude</p>
	 * @param ?float $longitude <p>Defaults to East, pass in a negative value for West. See also: date.default_longitude</p>
	 * @param ?float $zenith <p><code>zenith</code> is the angle between the center of the sun and a line perpendicular to earth's surface. It defaults to date.sunset_zenith</p> <b>Common <code>zenith</code> angles</b>   Angle Description     90&#xB0;50' Sunset: the point where the sun becomes invisible.   96&#xB0; Civil twilight: conventionally used to signify the end of dusk.   102&#xB0; Nautical twilight: the point at which the horizon ends being visible at sea.   108&#xB0; Astronomical twilight: the point at which the sun ends being the source of any illumination.
	 * @param ?float $utcOffset <p>Specified in hours. The <code>utcOffset</code> is ignored, if <code>returnFormat</code> is <b><code>SUNFUNCS_RET_TIMESTAMP</code></b>.</p>
	 * @return string|int|float|false <p>Returns the sunset time in a specified <code>returnFormat</code> on success or <b><code>false</code></b> on failure. One potential reason for failure is that the sun does not set at all, which happens inside the polar circles for part of the year.</p>
	 * @link https://php.net/manual/en/function.date-sunset.php
	 * @see date_sun_info()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function date_sunset(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude = null, ?float $longitude = null, ?float $zenith = null, ?float $utcOffset = null): string|int|float|false {}

	/**
	 * Sets the time
	 * <p>Object-oriented style</p><p>Resets the current time of the DateTime object to a different time.</p><p>Like <code>DateTimeImmutable::setTime()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $hour <p>Hour of the time.</p>
	 * @param int $minute <p>Minute of the time.</p>
	 * @param int $second <p>Second of the time.</p>
	 * @param int $microsecond <p>Microsecond of the time.</p>
	 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
	 * @link https://php.net/manual/en/datetime.settime.php
	 * @see DateTimeImmutable::setTime()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_time_set(\DateTime $object, int $hour, int $minute, int $second = 0, int $microsecond = 0): \DateTime {}

	/**
	 * Gets the Unix timestamp
	 * <p>Object-oriented style</p><p>Gets the Unix timestamp.</p>
	 * @param \DateTimeInterface $object
	 * @return int <p>Returns the Unix timestamp representing the date.</p>
	 * @link https://php.net/manual/en/datetime.gettimestamp.php
	 * @see DateTime::setTimestamp(), DateTimeImmutable::setTimestamp(), DateTimeInterface::format()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_timestamp_get(\DateTimeInterface $object): int {}

	/**
	 * Sets the date and time based on an Unix timestamp
	 * <p>Object-oriented style</p><p>Sets the date and time based on an Unix timestamp.</p><p>Like <code>DateTimeImmutable::setTimestamp()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param int $timestamp <p>Unix timestamp representing the date. Setting timestamps outside the range of <code>int</code> is possible by using <code>DateTimeImmutable::modify()</code> with the <code>@</code> format.</p>
	 * @return DateTime <p>Returns the modified <code>DateTime</code> object for method chaining.</p>
	 * @link https://php.net/manual/en/datetime.settimestamp.php
	 * @see DateTimeImmutable::setTimestamp()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function date_timestamp_set(\DateTime $object, int $timestamp): \DateTime {}

	/**
	 * Return time zone relative to given DateTime
	 * <p>Object-oriented style</p><p>Return time zone relative to given DateTime.</p>
	 * @param \DateTimeInterface $object <p>A <code>DateTime</code> object returned by <code>date_create()</code></p>
	 * @return DateTimeZone|false <p>Returns a <code>DateTimeZone</code> object on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetime.gettimezone.php
	 * @see DateTime::setTimezone()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_timezone_get(\DateTimeInterface $object): \DateTimeZone|false {}

	/**
	 * Sets the time zone for the DateTime object
	 * <p>Object-oriented style</p><p>Sets a new timezone for a <code>DateTime</code> <code>object</code>.</p><p>Like <code>DateTimeImmutable::setTimezone()</code> but works with <code>DateTime</code>.</p><p>The procedural version takes the <code>DateTime</code> object as its first argument.</p>
	 * @param \DateTime $object <p>A <code>DateTime</code> object returned by <code>date_create()</code>. The function modifies this object.</p>
	 * @param \DateTimeZone $timezone <p>A <code>DateTimeZone</code> object representing the desired time zone.</p>
	 * @return DateTime <p>Returns the <code>DateTime</code> object for method chaining. The underlaying point-in-time is not changed when calling this method.</p>
	 * @link https://php.net/manual/en/datetime.settimezone.php
	 * @see DateTimeImmutable::setTimezone(), DateTime::getTimezone(), DateTimeZone::__construct()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function date_timezone_set(\DateTime $object, \DateTimeZone $timezone): \DateTime {}

	/**
	 * Get date/time information
	 * <p>Returns an associative <code>array</code> containing the date information of the <code>timestamp</code>, or the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>.</p>
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return array <p>Returns an associative <code>array</code> of information related to the <code>timestamp</code>. Elements from the returned associative array are as follows:</p> <b>Key elements of the returned associative array</b>   Key Description Example returned values     <code>"seconds"</code> Numeric representation of seconds <code>0</code> to <code>59</code>   <code>"minutes"</code> Numeric representation of minutes <code>0</code> to <code>59</code>   <code>"hours"</code> Numeric representation of hours <code>0</code> to <code>23</code>   <code>"mday"</code> Numeric representation of the day of the month <code>1</code> to <code>31</code>   <code>"wday"</code> Numeric representation of the day of the week <code>0</code> (for Sunday) through <code>6</code> (for Saturday)   <code>"mon"</code> Numeric representation of a month <code>1</code> through <code>12</code>   <code>"year"</code> A full numeric representation of a year, 4 digits Examples: <code>1999</code> or <code>2003</code>   <code>"yday"</code> Numeric representation of the day of the year <code>0</code> through <code>365</code>   <code>"weekday"</code> A full textual representation of the day of the week <code>Sunday</code> through <code>Saturday</code>   <code>"month"</code> A full textual representation of a month, such as January or March <code>January</code> through <code>December</code>   <code>0</code>  Seconds since the Unix Epoch, similar to the values returned by <code>time()</code> and used by <code>date()</code>.   System Dependent, typically <code>-2147483648</code> through <code>2147483647</code>.
	 * @link https://php.net/manual/en/function.getdate.php
	 * @see date(), idate(), localtime(), time(), setlocale()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function getdate(?int $timestamp = null): array {}

	/**
	 * Get current time
	 * <p>This is an interface to gettimeofday(2). It returns an associative array containing the data returned from the system call.</p>
	 * @param bool $as_float <p>When set to <b><code>true</code></b>, a float instead of an array is returned.</p>
	 * @return array|float <p>By default an <code>array</code> is returned. If <code>as_float</code> is set, then a <code>float</code> is returned.</p><p>Array keys:</p><ul> <li>  "sec" - seconds since the Unix Epoch  </li> <li>  "usec" - microseconds  </li> <li>  "minuteswest" - minutes west of Greenwich  </li> <li>  "dsttime" - type of dst correction  </li> </ul>
	 * @link https://php.net/manual/en/function.gettimeofday.php
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function gettimeofday(bool $as_float = false): array|float {}

	/**
	 * Format a GMT/UTC date/time
	 * <p>Identical to the <code>date()</code> function except that the time returned is Greenwich Mean Time (GMT).</p>
	 * @param string $format <p>The format of the outputted date <code>string</code>. See the formatting options for the <code>date()</code> function.</p>
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string <p>Returns a formatted date string.</p>
	 * @link https://php.net/manual/en/function.gmdate.php
	 * @see date(), mktime(), gmmktime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function gmdate(string $format, ?int $timestamp = null): string {}

	/**
	 * Get Unix timestamp for a GMT date
	 * <p>Identical to <code>mktime()</code> except the passed parameters represents a GMT date. <b>gmmktime()</b> internally uses <code>mktime()</code> so only times valid in derived local time can be used.</p><p>Like <code>mktime()</code>, arguments may be left out in order from right to left, with any omitted arguments being set to the current corresponding GMT value.</p><p>Calling <b>gmmktime()</b> without arguments is deprecated. <code>time()</code> can be used to get the current timestamp.</p>
	 * @param int $hour <p>The number of the hour relative to the start of the day determined by <code>month</code>, <code>day</code> and <code>year</code>. Negative values reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate hour in the following day(s).</p>
	 * @param ?int $minute <p>The number of the minute relative to the start of the <code>hour</code>. Negative values reference the minute in the previous hour. Values greater than 59 reference the appropriate minute in the following hour(s).</p>
	 * @param ?int $second <p>The number of seconds relative to the start of the <code>minute</code>. Negative values reference the second in the previous minute. Values greater than 59 reference the appropriate second in the following minute(s).</p>
	 * @param ?int $month <p>The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar months of the year in question. Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the appropriate month in the following year(s).</p>
	 * @param ?int $day <p>The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month. Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).</p>
	 * @param ?int $year <p>The year</p>
	 * @return int|false <p>Returns a <code>int</code> Unix timestamp on success, or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.gmmktime.php
	 * @see mktime(), date(), time()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function gmmktime(int $hour, ?int $minute = null, ?int $second = null, ?int $month = null, ?int $day = null, ?int $year = null): int|false {}

	/**
	 * Format a GMT/UTC time/date according to locale settings
	 * <p>Behaves the same as <code>strftime()</code> except that the time returned is Greenwich Mean Time (GMT). For example, when run in Eastern Standard Time (GMT -0500), the first line below prints "Dec 31 1998 20:00:00", while the second prints "Jan 01 1999 01:00:00".</p><p>This function depends on operating system locale information, which might be inconsistent with each other, or not available at all. Instead use the <code>IntlDateFormatter::format()</code> method.</p>
	 * @param string $format <p>See description in <code>strftime()</code>.</p>
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string|false <p>Returns a string formatted according to the given format string using the given <code>timestamp</code> or the current local time if no timestamp is given. Month and weekday names and other language dependent strings respect the current locale set with <code>setlocale()</code>. On failure, <b><code>false</code></b> is returned.</p>
	 * @link https://php.net/manual/en/function.gmstrftime.php
	 * @see strftime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function gmstrftime(string $format, ?int $timestamp = null): string|false {}

	/**
	 * Format a local time/date part as integer
	 * <p>Returns a number formatted according to the given format string using the given integer <code>timestamp</code> or the current local time if no timestamp is given. In other words, <code>timestamp</code> is optional and defaults to the value of <code>time()</code>.</p><p>Unlike the function <code>date()</code>, <b>idate()</b> accepts just one char in the <code>format</code> parameter.</p>
	 * @param string $format <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> character Description     <code>B</code> Swatch Beat/Internet Time   <code>d</code> Day of the month   <code>h</code> Hour (12 hour format)   <code>H</code> Hour (24 hour format)   <code>i</code> Minutes   <code>I</code> (uppercase i) returns <code>1</code> if DST is activated, <code>0</code> otherwise   <code>L</code> (uppercase l) returns <code>1</code> for leap year, <code>0</code> otherwise   <code>m</code> Month number   <code>N</code> ISO-8601 day of the week (<code>1</code> for Monday through <code>7</code> for Sunday)   <code>o</code> ISO-8601 year (4 digits)   <code>s</code> Seconds   <code>t</code> Days in current month   <code>U</code> Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC - this is the same as <code>time()</code>   <code>w</code> Day of the week (<code>0</code> on Sunday)   <code>W</code> ISO-8601 week number of year, weeks starting on Monday   <code>y</code> Year (1 or 2 digits - check note below)   <code>Y</code> Year (4 digits)   <code>z</code> Day of the year   <code>Z</code> Timezone offset in seconds
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return int|false <p>Returns an <code>int</code> on success, or <b><code>false</code></b> on failure.</p><p>As <b>idate()</b> always returns an <code>int</code> and as they can't start with a "0", <b>idate()</b> may return fewer digits than you would expect. See the example below.</p>
	 * @link https://php.net/manual/en/function.idate.php
	 * @see date(), getdate(), time()
	 * @since PHP 5, PHP 7, PHP 8
	 */
	function idate(string $format, ?int $timestamp = null): int|false {}

	/**
	 * Get the local time
	 * <p>The <b>localtime()</b> function returns an array identical to that of the structure returned by the C function call.</p>
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @param bool $associative <p>Determines whether the function should return a regular, numerically indexed array, or an associative one.</p>
	 * @return array <p>If <code>associative</code> is set to <b><code>false</code></b> or not supplied then the array is returned as a regular, numerically indexed array. If <code>associative</code> is set to <b><code>true</code></b> then <b>localtime()</b> returns an associative array containing the elements of the structure returned by the C function call to localtime. The keys of the associative array are as follows:</p><ul> <li>  "tm_sec" - seconds, <code>0</code> to <code>59</code>  </li> <li>  "tm_min" - minutes, <code>0</code> to <code>59</code>  </li> <li>  "tm_hour" - hours, <code>0</code> to <code>23</code>  </li> <li>  "tm_mday" - day of the month, <code>1</code> to <code>31</code>  </li> <li>  "tm_mon" - month of the year, <code>0</code> (Jan) to <code>11</code> (Dec)  </li> <li>  "tm_year" - years since 1900  </li> <li>  "tm_wday" - day of the week, <code>0</code> (Sun) to <code>6</code> (Sat)  </li> <li>  "tm_yday" - day of the year, <code>0</code> to <code>365</code>  </li> <li>  "tm_isdst" - is daylight savings time in effect&#63;   Positive if yes, <code>0</code> if not, negative if unknown.  </li> </ul>
	 * @link https://php.net/manual/en/function.localtime.php
	 * @see getdate()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function localtime(?int $timestamp = null, bool $associative = false): array {}

	/**
	 * Return current Unix timestamp with microseconds
	 * <p><b>microtime()</b> returns the current Unix timestamp with microseconds. This function is only available on operating systems that support the gettimeofday() system call.</p><p>For performance measurements, using <code>hrtime()</code> is recommended.</p>
	 * @param bool $as_float <p>If used and set to <b><code>true</code></b>, <b>microtime()</b> will return a <code>float</code> instead of a <code>string</code>, as described in the return values section below.</p>
	 * @return string|float <p>By default, <b>microtime()</b> returns a <code>string</code> in the form "msec sec", where <code>sec</code> is the number of seconds since the Unix epoch (0:00:00 January 1,1970 GMT), and <code>msec</code> measures microseconds that have elapsed since <code>sec</code> and is also expressed in seconds as a decimal fraction.</p><p>If <code>as_float</code> is set to <b><code>true</code></b>, then <b>microtime()</b> returns a <code>float</code>, which represents the current time in seconds since the Unix epoch accurate to the nearest microsecond.</p>
	 * @link https://php.net/manual/en/function.microtime.php
	 * @see time(), hrtime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function microtime(bool $as_float = false): string|float {}

	/**
	 * Get Unix timestamp for a date
	 * <p>Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.</p><p>Any arguments omitted or <b><code>null</code></b> will be set to the current value according to the local date and time.</p><p>Please note that the ordering of arguments is in an odd order: <code>month</code>, <code>day</code>, <code>year</code>, and not in the more reasonable order of <code>year</code>, <code>month</code>, <code>day</code>.</p><p>Calling <b>mktime()</b> without arguments is deprecated. <code>time()</code> can be used to get the current timestamp.</p>
	 * @param int $hour <p>The number of the hour relative to the start of the day determined by <code>month</code>, <code>day</code> and <code>year</code>. Negative values reference the hour before midnight of the day in question. Values greater than 23 reference the appropriate hour in the following day(s).</p>
	 * @param ?int $minute <p>The number of the minute relative to the start of the <code>hour</code>. Negative values reference the minute in the previous hour. Values greater than 59 reference the appropriate minute in the following hour(s).</p>
	 * @param ?int $second <p>The number of seconds relative to the start of the <code>minute</code>. Negative values reference the second in the previous minute. Values greater than 59 reference the appropriate second in the following minute(s).</p>
	 * @param ?int $month <p>The number of the month relative to the end of the previous year. Values 1 to 12 reference the normal calendar months of the year in question. Values less than 1 (including negative values) reference the months in the previous year in reverse order, so 0 is December, -1 is November, etc. Values greater than 12 reference the appropriate month in the following year(s).</p>
	 * @param ?int $day <p>The number of the day relative to the end of the previous month. Values 1 to 28, 29, 30 or 31 (depending upon the month) reference the normal days in the relevant month. Values less than 1 (including negative values) reference the days in the previous month, so 0 is the last day of the previous month, -1 is the day before that, etc. Values greater than the number of days in the relevant month reference the appropriate day in the following month(s).</p>
	 * @param ?int $year <p>The number of the year, may be a two or four digit value, with values between 0-69 mapping to 2000-2069 and 70-100 to 1970-2000. On systems where time_t is a 32bit signed integer, as most common today, the valid range for <code>year</code> is somewhere between 1901 and 2038.</p>
	 * @return int|false <p><b>mktime()</b> returns the Unix timestamp of the arguments given.</p>
	 * @link https://php.net/manual/en/function.mktime.php
	 * @see checkdate(), gmmktime(), date(), time()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function mktime(int $hour, ?int $minute = null, ?int $second = null, ?int $month = null, ?int $day = null, ?int $year = null): int|false {}

	/**
	 * Format a local time/date according to locale settings
	 * <p>Format the time and/or date according to locale settings. Month and weekday names and other language-dependent strings respect the current locale set with <code>setlocale()</code>.</p><p>Not all conversion specifiers may be supported by your C library, in which case they will not be supported by PHP's <b>strftime()</b>. Additionally, not all platforms support negative timestamps, so your date range may be limited to no earlier than the Unix epoch. This means that %e, %T, %R and, %D (and possibly others) - as well as dates prior to <code>Jan 1, 1970</code> - will not work on Windows, some Linux distributions, and a few other operating systems. For Windows systems, a complete overview of supported conversion specifiers can be found at &#xBB;&#xA0;MSDN. Instead use the <code>IntlDateFormatter::format()</code> method.</p>
	 * @param string $format <p></p> <b>The following characters are recognized in the <code>format</code> parameter string</b>   <code>format</code> Description Example returned values     <i>Day</i> --- ---   <code>%a</code> An abbreviated textual representation of the day <code>Sun</code> through <code>Sat</code>   <code>%A</code> A full textual representation of the day <code>Sunday</code> through <code>Saturday</code>   <code>%d</code> Two-digit day of the month (with leading zeros) <code>01</code> to <code>31</code>   <code>%e</code>  Day of the month, with a space preceding single digits. Not implemented as described on Windows. See below for more information.  <code> 1</code> to <code>31</code>   <code>%j</code> Day of the year, 3 digits with leading zeros <code>001</code> to <code>366</code>   <code>%u</code> ISO-8601 numeric representation of the day of the week <code>1</code> (for Monday) through <code>7</code> (for Sunday)   <code>%w</code> Numeric representation of the day of the week <code>0</code> (for Sunday) through <code>6</code> (for Saturday)   <i>Week</i> --- ---   <code>%U</code> Week number of the given year, starting with the first Sunday as the first week <code>13</code> (for the 13th full week of the year)   <code>%V</code> ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week <code>01</code> through <code>53</code> (where 53 accounts for an overlapping week)   <code>%W</code> A numeric representation of the week of the year, starting with the first Monday as the first week <code>46</code> (for the 46th week of the year beginning with a Monday)   <i>Month</i> --- ---   <code>%b</code> Abbreviated month name, based on the locale <code>Jan</code> through <code>Dec</code>   <code>%B</code> Full month name, based on the locale <code>January</code> through <code>December</code>   <code>%h</code> Abbreviated month name, based on the locale (an alias of %b) <code>Jan</code> through <code>Dec</code>   <code>%m</code> Two digit representation of the month <code>01</code> (for January) through <code>12</code> (for December)   <i>Year</i> --- ---   <code>%C</code> Two digit representation of the century (year divided by 100, truncated to an integer) <code>19</code> for the 20th Century   <code>%g</code> Two digit representation of the year going by ISO-8601:1988 standards (see %V) Example: <code>09</code> for the week of January 6, 2009   <code>%G</code> The full four-digit version of %g Example: <code>2008</code> for the week of January 3, 2009   <code>%y</code> Two digit representation of the year Example: <code>09</code> for 2009, <code>79</code> for 1979   <code>%Y</code> Four digit representation for the year Example: <code>2038</code>   <i>Time</i> --- ---   <code>%H</code> Two digit representation of the hour in 24-hour format <code>00</code> through <code>23</code>   <code>%k</code> Hour in 24-hour format, with a space preceding single digits <code> 0</code> through <code>23</code>   <code>%I</code> Two digit representation of the hour in 12-hour format <code>01</code> through <code>12</code>   <code>%l (lower-case 'L')</code> Hour in 12-hour format, with a space preceding single digits <code> 1</code> through <code>12</code>   <code>%M</code> Two digit representation of the minute <code>00</code> through <code>59</code>   <code>%p</code> UPPER-CASE 'AM' or 'PM' based on the given time Example: <code>AM</code> for 00:31, <code>PM</code> for 22:23. The exact result depends on the Operating System, and they can also return lower-case variants, or variants with dots (such as <code>a.m.</code>).   <code>%P</code> lower-case 'am' or 'pm' based on the given time Example: <code>am</code> for 00:31, <code>pm</code> for 22:23. Not supported by all Operating Systems.   <code>%r</code> Same as "%I:%M:%S %p" Example: <code>09:34:17 PM</code> for 21:34:17   <code>%R</code> Same as "%H:%M" Example: <code>00:35</code> for 12:35 AM, <code>16:44</code> for 4:44 PM   <code>%S</code> Two digit representation of the second <code>00</code> through <code>59</code>   <code>%T</code> Same as "%H:%M:%S" Example: <code>21:34:17</code> for 09:34:17 PM   <code>%X</code> Preferred time representation based on locale, without the date Example: <code>03:59:16</code> or <code>15:59:16</code>   <code>%z</code> The time zone offset. Not implemented as described on Windows. See below for more information. Example: <code>-0500</code> for US Eastern Time   <code>%Z</code> The time zone abbreviation. Not implemented as described on Windows. See below for more information. Example: <code>EST</code> for Eastern Time   <i>Time and Date Stamps</i> --- ---   <code>%c</code> Preferred date and time stamp based on locale Example: <code>Tue Feb 5 00:45:10 2009</code> for February 5, 2009 at 12:45:10 AM   <code>%D</code> Same as "%m/%d/%y" Example: <code>02/05/09</code> for February 5, 2009   <code>%F</code> Same as "%Y-%m-%d" (commonly used in database datestamps) Example: <code>2009-02-05</code> for February 5, 2009   <code>%s</code> Unix Epoch Time timestamp (same as the <code>time()</code> function) Example: <code>305815200</code> for September 10, 1979 08:40:00 AM   <code>%x</code> Preferred date representation based on locale, without the time Example: <code>02/05/09</code> for February 5, 2009   <i>Miscellaneous</i> --- ---   <code>%n</code> A newline character ("\n") ---   <code>%t</code> A Tab character ("\t") ---   <code>%%</code> A literal percentage character ("%") ---    <p><b>Warning</b></p> <p>Contrary to ISO-9899:1999, Sun Solaris starts with Sunday as 1. As a result, <code>%u</code> may not function as described in this manual.</p>  <p><b>Warning</b></p> <p><i>Windows only:</i></p> <p>The <code>%e</code> modifier is not supported in the Windows implementation of this function. To achieve this value, the <code>%#d</code> modifier can be used instead. The example below illustrates how to write a cross platform compatible function.</p> <p>The <code>%z</code> and <code>%Z</code> modifiers both return the time zone name instead of the offset or abbreviation.</p>  <p><b>Warning</b></p> <p><i>macOS and musl only:</i> The <code>%P</code> modifier is not supported in the macOS implementation of this function.</p>
	 * @param ?int $timestamp <p>The optional <code>timestamp</code> parameter is an <code>int</code> Unix timestamp that defaults to the current local time if <code>timestamp</code> is omitted or <b><code>null</code></b>. In other words, it defaults to the value of <code>time()</code>.</p>
	 * @return string|false <p>Returns a string formatted according <code>format</code> using the given <code>timestamp</code> or the current local time if no timestamp is given. Month and weekday names and other language-dependent strings respect the current locale set with <code>setlocale()</code>. The function returns <b><code>false</code></b> if <code>format</code> is empty, contains unsupported conversion specifiers, or if the length of the returned string would be greater than <code>4095</code>.</p>
	 * @link https://php.net/manual/en/function.strftime.php
	 * @see setlocale(), mktime(), strptime(), gmstrftime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strftime(string $format, ?int $timestamp = null): string|false {}

	/**
	 * Parse a time/date generated with strftime()
	 * <p><b>strptime()</b> returns an array with the <code>timestamp</code> parsed, or <b><code>false</code></b> on error.</p><p>Month and weekday names and other language dependent strings respect the current locale set with <code>setlocale()</code> (<b><code>LC_TIME</code></b>).</p>
	 * @param string $timestamp <p>The string to parse (e.g. returned from <code>strftime()</code>).</p>
	 * @param string $format <p>The format used in <code>timestamp</code> (e.g. the same as used in <code>strftime()</code>). Note that some of the format options available to <code>strftime()</code> may not have any effect within <b>strptime()</b>; the exact subset that are supported will vary based on the operating system and C library in use.</p> <p>For more information about the format options, read the <code>strftime()</code> page.</p>
	 * @return array|false <p>Returns an array or <b><code>false</code></b> on failure.</p> <b>The following parameters are returned in the array</b>   parameters Description     <code>"tm_sec"</code> Seconds after the minute (0-61)   <code>"tm_min"</code> Minutes after the hour (0-59)   <code>"tm_hour"</code> Hour since midnight (0-23)   <code>"tm_mday"</code> Day of the month (1-31)   <code>"tm_mon"</code> Months since January (0-11)   <code>"tm_year"</code> Years since 1900   <code>"tm_wday"</code> Days since Sunday (0-6)   <code>"tm_yday"</code> Days since January 1 (0-365)   <code>"unparsed"</code> the <code>timestamp</code> part which was not recognized using the specified <code>format</code>
	 * @link https://php.net/manual/en/function.strptime.php
	 * @see checkdate(), strftime(), date_parse_from_format()
	 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
	 */
	function strptime(string $timestamp, string $format): array|false {}

	/**
	 * Parse about any English textual datetime description into a Unix timestamp
	 * <p>The function expects to be given a string containing an English date format and will try to parse that format into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 UTC), relative to the timestamp given in <code>baseTimestamp</code>, or the current time if <code>baseTimestamp</code> is not supplied. The date string parsing is defined in Date and Time Formats, and has several subtle considerations. Reviewing the full details there is strongly recommended.</p><p>The Unix timestamp that this function returns does not contain information about time zones. In order to do calculations with date/time information, you should use the more capable <code>DateTimeImmutable</code>.</p><p>Each parameter of this function uses the default time zone unless a time zone is specified in that parameter. Be careful not to use different time zones in each parameter unless that is intended. See <code>date_default_timezone_get()</code> on the various ways to define the default time zone.</p>
	 * @param string $datetime <p>A date/time string. Valid formats are explained in Date and Time Formats.</p>
	 * @param ?int $baseTimestamp <p>The timestamp which is used as a base for the calculation of relative dates.</p>
	 * @return int|false <p>Returns a timestamp on success, <b><code>false</code></b> otherwise.</p>
	 * @link https://php.net/manual/en/function.strtotime.php
	 * @see checkdate(), strptime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function strtotime(string $datetime, ?int $baseTimestamp = null): int|false {}

	/**
	 * Return current Unix timestamp
	 * <p>Returns the current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).</p><p><b>Note</b>:</p><p>Unix timestamps do not contain any information with regards to any local timezone. It is recommended to use the <code>DateTimeImmutable</code> class for handling date and time information in order to avoid the pitfalls that come with just Unix timestamps.</p>
	 * @return int <p>Returns the current timestamp.</p>
	 * @link https://php.net/manual/en/function.time.php
	 * @see date(), microtime()
	 * @since PHP 4, PHP 5, PHP 7, PHP 8
	 */
	function time(): int {}

	/**
	 * Returns associative array containing dst, offset and the timezone name
	 * <p>Object-oriented style</p><p>The returned list of abbreviations includes all historical use of abbreviations, which can lead to correct, but confusing entries. There are also conflicts, as <code>PST</code> is used both in the US and in the Philippines.</p><p>The list that this function returns is therefore not suitable for building an array with options to present a choice of timezone to users.</p><p><b>Note</b>:</p><p>The data for this function are precompiled for performance reasons, and are not updated when using a newer &#xBB;&#xA0;timezonedb.</p>
	 * @return array <p>Returns the array of timezone abbreviations.</p>
	 * @link https://php.net/manual/en/datetimezone.listabbreviations.php
	 * @see timezone_identifiers_list()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function timezone_abbreviations_list(): array {}

	/**
	 * Returns a numerically indexed array containing all defined timezone identifiers
	 * <p>Object-oriented style</p>
	 * @param int $timezoneGroup <p>One of the <code>DateTimeZone</code> class constants (or a combination).</p>
	 * @param ?string $countryCode <p>A two-letter (uppercase) ISO 3166-1 compatible country code.</p> <p><b>Note</b>:  This option is only used when <code>timezoneGroup</code> is set to <b><code>DateTimeZone::PER_COUNTRY</code></b>. </p>
	 * @return array <p>Returns the array of timezone identifiers. Only non-outdated items are returned. To get all, including outdated timezone identifiers, use the <code>DateTimeZone::ALL_WITH_BC</code> as value for <code>timezoneGroup</code>.</p>
	 * @link https://php.net/manual/en/datetimezone.listidentifiers.php
	 * @see timezone_abbreviations_list()
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function timezone_identifiers_list(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array {}

	/**
	 * Returns location information for a timezone
	 * <p>Object-oriented style</p><p>Returns location information for a timezone, including country code, latitude/longitude and comments.</p>
	 * @param \DateTimeZone $object <p>A <code>DateTimeZone</code> object returned by <code>timezone_open()</code></p>
	 * @return array|false <p>Array containing location information about timezone or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetimezone.getlocation.php
	 * @see DateTimeZone::listIdentifiers()
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
	 */
	function timezone_location_get(\DateTimeZone $object): array|false {}

	/**
	 * Returns a timezone name by guessing from abbreviation and UTC offset
	 * @param string $abbr <p>Time zone abbreviation.</p>
	 * @param int $utcOffset <p>Offset from GMT in seconds. Defaults to -1 which means that first found time zone corresponding to <code>abbr</code> is returned. Otherwise exact offset is searched and only if not found then the first time zone with any offset is returned.</p>
	 * @param int $isDST <p>Daylight saving time indicator. Defaults to -1, which means that whether the time zone has daylight saving or not is not taken into consideration when searching. If this is set to 1, then the <code>utcOffset</code> is assumed to be an offset with daylight saving in effect; if 0, then <code>utcOffset</code> is assumed to be an offset without daylight saving in effect. If <code>abbr</code> doesn't exist then the time zone is searched solely by the <code>utcOffset</code> and <code>isDST</code>.</p>
	 * @return string|false <p>Returns time zone name on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.timezone-name-from-abbr.php
	 * @see timezone_abbreviations_list()
	 * @since PHP 5 >= 5.1.3, PHP 7, PHP 8
	 */
	function timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1): string|false {}

	/**
	 * Returns the name of the timezone
	 * <p>Object-oriented style</p><p>Returns the name of the timezone.</p>
	 * @param \DateTimeZone $object <p>The <code>DateTimeZone</code> for which to get a name.</p>
	 * @return string <p>Depending on zone type, UTC offset (type 1), timezone abbreviation (type 2), and timezone identifiers as published in the IANA timezone database (type 3), the descriptor string to create a new <code>DateTimeZone</code> object with the same offset and/or rules. For example <code>02:00</code>, <code>CEST</code>, or one of the timezone names in the list of timezones.</p>
	 * @link https://php.net/manual/en/datetimezone.getname.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function timezone_name_get(\DateTimeZone $object): string {}

	/**
	 * Returns the timezone offset from GMT
	 * <p>Object-oriented style</p><p>This function returns the offset to GMT for the date/time specified in the <code>datetime</code> parameter. The GMT offset is calculated with the timezone information contained in the DateTimeZone object being used.</p>
	 * @param \DateTimeZone $object <p>A <code>DateTimeZone</code> object returned by <code>timezone_open()</code></p>
	 * @param \DateTimeInterface $datetime <p>DateTime that contains the date/time to compute the offset from.</p>
	 * @return int <p>Returns time zone offset in seconds.</p>
	 * @link https://php.net/manual/en/datetimezone.getoffset.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function timezone_offset_get(\DateTimeZone $object, \DateTimeInterface $datetime): int {}

	/**
	 * Creates new DateTimeZone object
	 * <p>Object-oriented style</p><p>Creates a new DateTimeZone object.</p><p>A DateTimeZone object provides access to three different types of timezone rules: UTC offset (type <code>1</code>), timezone abbreviation (type <code>2</code>), and timezone identifiers as published in the IANA timezone database (type <code>3</code>).</p><p>The DateTimeZone object can be attached to <code>DateTime</code> and <code>DateTimeImmutable</code> objects to be able to render the timezone encapsulated by these objects in a local timezone.</p>
	 * @param string $timezone <p>One of the supported timezone names, an offset value (+0200), or a timezone abbreviation (BST).</p>
	 * @return DateTimeZone|false <p>Returns <code>DateTimeZone</code> on success. Procedural style returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/datetimezone.construct.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function timezone_open(string $timezone): \DateTimeZone|false {}

	/**
	 * Returns all transitions for the timezone
	 * <p>Object-oriented style</p>
	 * @param \DateTimeZone $object <p>A <code>DateTimeZone</code> object returned by <code>timezone_open()</code></p>
	 * @param int $timestampBegin <p>Begin timestamp.</p>
	 * @param int $timestampEnd <p>End timestamp.</p>
	 * @return array|false <p>Returns a numerically indexed array of transition arrays on success, or <b><code>false</code></b> on failure. DateTimeZone objects wrapping type 1 (UTC offsets) and type 2 (abbreviations) do not contain any transitions, and calling this method on them will return <b><code>false</code></b>.</p><p>If <code>timestampBegin</code> is given, the first entry in the returned array will contain a transition element at the time of <code>timestampBegin</code>.</p> <b>Transition Array Structure</b>   Key Type Description     <code>ts</code> <code>int</code> Unix timestamp   <code>time</code> <code>string</code> <b><code>DateTimeInterface::ISO8601_EXPANDED</code></b> (PHP 8.2 and later), or <b><code>DateTimeInterface::ISO8601</code></b> (PHP 8.1 and lower) time string   <code>offset</code> <code>int</code> Offset to UTC in seconds   <code>isdst</code> <code>bool</code> Whether daylight saving time is active   <code>abbr</code> <code>string</code> Timezone abbreviation
	 * @link https://php.net/manual/en/datetimezone.gettransitions.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PHP 8
	 */
	function timezone_transitions_get(\DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false {}

	/**
	 * Gets the version of the timezonedb
	 * <p>Returns the current version of the timezonedb.</p>
	 * @return string <p>Returns a <code>string</code> in the format <code>YYYY.increment</code>, such as <code>2022.2</code>.</p><p>If you have a timezone database version that is old (for example, it doesn't show the current year), then you can update the timezone information by either upgrading your PHP version, or installing the &#xBB;&#xA0;timezonedb PECL package.</p><p>Some Linux distributions patch PHP's date/time support to use an alternative source for timezone information. In which case this function will return <code>0.system</code>. You are encouraged to install the &#xBB;&#xA0;timezonedb PECL package in that case as well.</p>
	 * @link https://php.net/manual/en/function.timezone-version-get.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PHP 8
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
	 * ISO-8601 (example: 2005-08-15T15:52:01+0000)  <p><b>Note</b>:  This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons. Use <b><code>DateTimeInterface::ISO8601_EXPANDED</code></b>, <b><code>DateTimeInterface::ATOM</code></b> for compatibility with ISO-8601 instead. (ref ISO8601:2004 section 4.3.3 clause d) </p>
	 */
	define('DATE_ISO8601', 'Y-m-d\TH:i:sO');

	/**
	 * ISO-8601 Expanded (example: +10191-07-26T08:59:52+01:00)  <p><b>Note</b>:  This format allows for year ranges outside of ISO-8601's normal range of <code>0000</code>-<code>9999</code> by always including a sign character. It also addresses that that timezone part (<code>+01:00</code>) is compatible with ISO-8601. </p>
	 */
	define('DATE_ISO8601_EXPANDED', 'X-m-d\TH:i:sP');

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
	 * Same as <b><code>DATE_ATOM</code></b>
	 */
	define('DATE_RFC3339', 'Y-m-d\TH:i:sP');

	/**
	 * RFC 3339 EXTENDED format (example: 2005-08-15T15:52:01.000+00:00)
	 */
	define('DATE_RFC3339_EXTENDED', 'Y-m-d\TH:i:s.vP');

	/**
	 * RFC 7231 (since PHP 7.0.19 and 7.1.5) (example: Sat, 30 Apr 2016 17:52:13 GMT)
	 */
	define('DATE_RFC7231', 'D, d M Y H:i:s \G\M\T');

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
